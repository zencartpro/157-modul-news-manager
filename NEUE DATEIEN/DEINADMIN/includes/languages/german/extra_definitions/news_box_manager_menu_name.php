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
 * @version $Id: news_box_manager_menu_name.php 2022-06-07 08:00:16Z webchills $
 */

// -----
// In Zen Cart 1.5.7 and later, the language extra-definitions are loaded via a class method,
// so the $template_dir needs to be declared as global.
//
global $template_dir;

// -----
// Pull in the storefront's extra_definitions, contains the BOX_NEWS_NAME_TYPEx definitions.
//
$nbm_language_file = '/news_box_manager_defines.php';
if (file_exists(DIR_FS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/extra_definitions/' . $template_dir . $nbm_language_file)) {
    $nbm_language_file = DIR_FS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/extra_definitions/' . $template_dir . $nbm_language_file;
} else {
    $nbm_language_file = DIR_FS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/extra_definitions' . $nbm_language_file;
}
require $nbm_language_file; 

// -----
// Set up the "box" definitions that identify the names shown on the admin menu.  Note that
// the type-specific values need special care, since they're defined in the database (and won't
// be on an initial install or upgrade).
//
define('BOX_NEWS_BOX_MANAGER', 'News Box Manager [Alle Typen]');
define('BOX_NEWS_BOX_MANAGER1', 'News Box Manager [' . (defined('BOX_NEWS_NAME_TYPE1') ? BOX_NEWS_NAME_TYPE1 : 'Typ1') . ']');
define('BOX_NEWS_BOX_MANAGER2', 'News Box Manager [' . (defined('BOX_NEWS_NAME_TYPE2') ? BOX_NEWS_NAME_TYPE2 : 'Typ2') . ']');
define('BOX_NEWS_BOX_MANAGER3', 'News Box Manager [' . (defined('BOX_NEWS_NAME_TYPE3') ? BOX_NEWS_NAME_TYPE3 : 'Typ3') . ']');
define('BOX_NEWS_BOX_MANAGER4', 'News Box Manager [' . (defined('BOX_NEWS_NAME_TYPE4') ? BOX_NEWS_NAME_TYPE4 : 'Typ4') . ']');

// -----
// Used by the plugin's initialization script to identify that the installation or update
// was successful.
//
define('NEWS_BOX_INSTALLED', '<em>News Box Manager</em> (%s) wurde erfolgreich installiert.');
define('NEWS_BOX_UPDATED', '<em>News Box Manager</em> wurde erfolgreich aktualisiert von v%1$s auf v%2$s.');

// -----
// Used by the plugin's update script when one or more articles are disabled due to missing content.  The %s is filled in with the name
// of the file that contains details about the articles that were disabled.
//
define('NEWS_BOX_ARTICLES_DISABLED', 'One or more of your existing news articles have been disabled, due to missing content. See this (%s) file for details.');
