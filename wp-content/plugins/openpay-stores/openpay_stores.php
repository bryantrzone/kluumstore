<?php

/*
  Plugin Name: Openpay Stores Plugin
  Plugin URI: http://www.openpay.mx/docs/plugins/woocommerce.html
  Description: Provides a cash payment method with Openpay for WooCommerce. Compatible with WooCommerce 3.6.4 and Wordpress 5.0.3.
  Version: 1.4.5
  Author: Openpay
  Author URI: http://www.openpay.mx

  License: GNU General Public License v3.0
  License URI: http://www.gnu.org/licenses/gpl-3.0.html

  Openpay Docs: http://www.openpay.mx/docs/
 */

function openpay_stores_init_your_gateway() {
    if (class_exists('WC_Payment_Gateway')) {
        include_once('openpay_stores_gateway.php');
    }
}

add_action('plugins_loaded', 'openpay_stores_init_your_gateway', 0);
add_filter('woocommerce_email_attachments', 'attach_store_payment_receipt', 10, 3);

function attach_store_payment_receipt($attachments, $email_id, $order) {
    // Avoiding errors and problems
    if (!is_a($order, 'WC_Order') || !isset($email_id)) {
        return $attachments;
    }
    
    $logger = wc_get_logger();
    $upload_dir = wp_upload_dir();
    $order_id = $order->get_id();

    // Only for "customer_on_hold_order" email notification (for customers)
    if ($email_id == 'customer_on_hold_order' && $order->get_payment_method() == 'openpay_stores') {
        $pdf_url = get_post_meta($order_id, '_pdf_url', true);

        $logger->info('get_shipping_postcode: ' . $order->get_shipping_postcode());
        $logger->info('_openpay_customer_id: ' . get_post_meta($order->get_id(), '_openpay_customer_id', true));
        $logger->info('_pdf_url: ' . $pdf_url);
        $logger->info('email_id: ' . $email_id);
        $logger->info('order_id: ' . $order_id);
        $logger->info('basedir: ' . $upload_dir['basedir']);

        $pdf_path = $upload_dir['basedir'] . '/recibo_pago_' . $order_id . '.pdf';
        file_put_contents($pdf_path, file_get_contents($pdf_url));
        $attachments[] = $pdf_path;
    }

    return $attachments;
}