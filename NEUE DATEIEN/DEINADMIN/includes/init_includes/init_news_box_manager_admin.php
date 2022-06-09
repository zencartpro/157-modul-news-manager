<?php
/**
 * Part of the News Box Manager plugin, re-structured for Zen Cart v1.5.6 and later by lat9.
 * Copyright (C) 2015-2022, Vinos de Frutas Tropicales
 * Do Not Remove: Coded for Zen-Cart by geeks4u.com
 * Dedicated to Memory of Amelita "Emmy" Abordo Gelarderes
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: init_news_box_manager_admin.php 2022-06-09 08:49:16Z webchills $
 */
 
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

// -----
// Wait for an admin to login before processing ...
//
if (empty($_SESSION['admin_id'])) {
    return;
}

define('NEWS_BOX_CURRENT_VERSION', '3.1.2');
define('NEWS_BOX_CURRENT_UPDATE_DATE', '2022-06-09');
define('NEWS_BOX_CURRENT_VERSION_DATE', NEWS_BOX_CURRENT_VERSION . ' (' . NEWS_BOX_CURRENT_UPDATE_DATE . ')');

// -----
// Determine the configuration group associated with the News Box Manager, creating one if not present.
//
$configurationGroupTitle = 'News Box Manager';
$configuration = $db->Execute(
    "SELECT configuration_group_id 
       FROM " . TABLE_CONFIGURATION_GROUP . " 
      WHERE configuration_group_title = '$configurationGroupTitle' 
      LIMIT 1"
);
if ($configuration->EOF) {
    $db->Execute(
        "INSERT INTO " . TABLE_CONFIGURATION_GROUP . " 
            (configuration_group_title, configuration_group_description, language_id, sort_order, visible) 
         VALUES 
            ('$configurationGroupTitle', '$configurationGroupTitle Settings', 43, 1, 1);");
    $cgi = $db->Insert_ID(); 
    $db->Execute(
        "UPDATE " . TABLE_CONFIGURATION_GROUP . " 
            SET sort_order = $cgi 
          WHERE configuration_group_id = $cgi
          LIMIT 1"
    );
} else {
    $cgi = $configuration->fields['configuration_group_id'];
}

// ----
// If this is an initial installation, bring in the module that sets the plugin's
// legacy configuration into the database.
//
if (!defined('NEWS_BOX_MODULE_VERSION')) {
    require DIR_WS_INCLUDES . 'init_includes/news_box_manager_install.php';
}

// -----
// If the current module-version is different than that currently installed, bring in
// the module that handles configuration updates.  Note that this will occur on an 
// initial installation as well.
//
if (NEWS_BOX_MODULE_VERSION != NEWS_BOX_CURRENT_VERSION_DATE) {
    require DIR_WS_INCLUDES . 'init_includes/news_box_manager_update.php';
}
