<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AEPC_Addon_Factory' => $baseDir . '/includes/class-aepc-addon-factory.php',
    'AEPC_Addon_Product_Item' => $baseDir . '/includes/class-aepc-addon-product-item.php',
    'AEPC_Addons_Support' => $baseDir . '/includes/class-aepc-addons-support.php',
    'AEPC_Admin' => $baseDir . '/includes/admin/class-aepc-admin.php',
    'AEPC_Admin_Ajax' => $baseDir . '/includes/admin/class-aepc-admin-ajax.php',
    'AEPC_Admin_CA' => $baseDir . '/includes/admin/class-aepc-admin-ca.php',
    'AEPC_Admin_CA_Manager' => $baseDir . '/includes/admin/class-aepc-admin-ca-manager.php',
    'AEPC_Admin_Handlers' => $baseDir . '/includes/admin/class-aepc-admin-handlers.php',
    'AEPC_Admin_Install' => $baseDir . '/includes/admin/class-aepc-admin-install.php',
    'AEPC_Admin_Logger' => $baseDir . '/includes/admin/class-aepc-admin-logger.php',
    'AEPC_Admin_Menu' => $baseDir . '/includes/admin/class-aepc-admin-menu.php',
    'AEPC_Admin_Notices' => $baseDir . '/includes/admin/class-aepc-admin-notices.php',
    'AEPC_Admin_View' => $baseDir . '/includes/admin/class-aepc-admin-view.php',
    'AEPC_Cron' => $baseDir . '/includes/class-aepc-cron.php',
    'AEPC_Currency' => $baseDir . '/includes/class-aepc-currency.php',
    'AEPC_Edd_Addon_Support' => $baseDir . '/includes/supports/class-aepc-edd-addon-support.php',
    'AEPC_Facebook_Adapter' => $baseDir . '/includes/admin/class-aepc-facebook-adapter.php',
    'AEPC_Pixel_Scripts' => $baseDir . '/includes/class-aepc-pixel-scripts.php',
    'AEPC_Track' => $baseDir . '/includes/class-aepc-track.php',
    'AEPC_Woocommerce_Addon_Support' => $baseDir . '/includes/supports/class-aepc-woocommerce-addon-support.php',
    'PixelCaffeine\\Admin\\Exception\\AEPCException' => $baseDir . '/includes/admin/exceptions/exception-aepc-exception.php',
    'PixelCaffeine\\Admin\\Exception\\FBAPIException' => $baseDir . '/includes/admin/exceptions/exception-fbapi.php',
    'PixelCaffeine\\Admin\\Exception\\FBAPILoginException' => $baseDir . '/includes/admin/exceptions/exception-fbapi-login.php',
    'PixelCaffeine\\Admin\\Response' => $baseDir . '/includes/admin/class-aepc-admin-response.php',
    'PixelCaffeine\\Interfaces\\ECommerceAddOnInterface' => $baseDir . '/includes/interfaces/interface-ecommerce-addon.php',
    'PixelCaffeine\\Job\\RefreshAudiencesSize' => $baseDir . '/includes/jobs/class-refresh-audiences-size.php',
    'PixelCaffeine\\Logs\\Entity\\Log' => $baseDir . '/includes/admin/logs/entity/class-log.php',
    'PixelCaffeine\\Logs\\Exception\\LogNotExistingException' => $baseDir . '/includes/admin/logs/exception/exception-log-not-existing.php',
    'PixelCaffeine\\Logs\\LogDBHandler' => $baseDir . '/includes/admin/logs/class-log-db-handler.php',
    'PixelCaffeine\\Logs\\LogRepository' => $baseDir . '/includes/admin/logs/class-log-repository.php',
    'PixelCaffeine\\Logs\\LogRepositoryInterface' => $baseDir . '/includes/admin/logs/interface-log-repository.php',
    'PixelCaffeine\\Model\\Job' => $baseDir . '/includes/models/class-job.php',
    'PixelCaffeine\\ProductCatalog\\Admin\\Metaboxes' => $baseDir . '/includes/product-catalogs/admin/class-metaboxes.php',
    'PixelCaffeine\\ProductCatalog\\BackgroundFeedSaver' => $baseDir . '/includes/product-catalogs/class-background-feed-saver.php',
    'PixelCaffeine\\ProductCatalog\\BackgroundFeedSaverProcess' => $baseDir . '/includes/product-catalogs/class-background-feed-saver-process.php',
    'PixelCaffeine\\ProductCatalog\\Configuration' => $baseDir . '/includes/product-catalogs/class-configuration.php',
    'PixelCaffeine\\ProductCatalog\\ConfigurationDefaults' => $baseDir . '/includes/product-catalogs/class-configuration-defaults.php',
    'PixelCaffeine\\ProductCatalog\\Cron\\RefreshFeed' => $baseDir . '/includes/product-catalogs/cron/class-refresh-feed.php',
    'PixelCaffeine\\ProductCatalog\\DbProvider' => $baseDir . '/includes/product-catalogs/class-db-provider.php',
    'PixelCaffeine\\ProductCatalog\\Dictionary\\FeedSaver' => $baseDir . '/includes/product-catalogs/dictionary/class-feed-saver.php',
    'PixelCaffeine\\ProductCatalog\\Entity\\ProductCatalog' => $baseDir . '/includes/product-catalogs/entity/class-product-catalog.php',
    'PixelCaffeine\\ProductCatalog\\Exception\\EntityException' => $baseDir . '/includes/product-catalogs/exception/exception-entity.php',
    'PixelCaffeine\\ProductCatalog\\Exception\\FeedException' => $baseDir . '/includes/product-catalogs/exception/exception-feed.php',
    'PixelCaffeine\\ProductCatalog\\Exception\\GoogleTaxonomyException' => $baseDir . '/includes/product-catalogs/exception/exception-google-taxonomy.php',
    'PixelCaffeine\\ProductCatalog\\FeedMapper' => $baseDir . '/includes/product-catalogs/class-feed-mapper.php',
    'PixelCaffeine\\ProductCatalog\\FeedSaverInterface' => $baseDir . '/includes/product-catalogs/interface-feed-saver.php',
    'PixelCaffeine\\ProductCatalog\\Feed\\WriterInterface' => $baseDir . '/includes/product-catalogs/feed/interface-writer.php',
    'PixelCaffeine\\ProductCatalog\\Feed\\XMLWriter' => $baseDir . '/includes/product-catalogs/feed/class-xml-writer.php',
    'PixelCaffeine\\ProductCatalog\\ForegroundFeedSaver' => $baseDir . '/includes/product-catalogs/class-foreground-feed-saver.php',
    'PixelCaffeine\\ProductCatalog\\Helper\\FeedDirectoryHelper' => $baseDir . '/includes/product-catalogs/helper/class-feed-directory-helper.php',
    'PixelCaffeine\\ProductCatalog\\ProductCatalogManager' => $baseDir . '/includes/product-catalogs/class-product-catalog-manager.php',
    'PixelCaffeine\\ProductCatalog\\ProductCatalogs' => $baseDir . '/includes/product-catalogs/class-product-catalogs.php',
    'WP_Async_Request' => $vendorDir . '/a5hleyrich/wp-background-processing/classes/wp-async-request.php',
    'WP_Background_Process' => $vendorDir . '/a5hleyrich/wp-background-processing/classes/wp-background-process.php',
);
