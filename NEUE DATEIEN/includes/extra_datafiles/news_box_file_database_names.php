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
 * @version $Id: news_box_file_database_names.php 2022-06-07 07:35:16Z webchills $
 */
 
define('TABLE_BOX_NEWS', DB_PREFIX . 'box_news');
define('TABLE_BOX_NEWS_CONTENT', DB_PREFIX . 'box_news_content');

// -----
// "Legacy" pages.  Starting with v3.0.0, the 'more_news' page simply performs
// a redirect-permanent to the 'article' page and the 'news_archive' page
// performs a redirect to the 'all_articles' page.
//
define('FILENAME_MORE_NEWS', 'more_news');
define('FILENAME_NEWS_ARCHIVE', 'news_archive');

// -----
// Common formatting script.
//
define('FILENAME_NEWS_BOX_FORMAT', 'news_box_format');

// -----
// New pages, introduced in v3.0.0.
//
define('FILENAME_ALL_ARTICLES', 'all_articles');
define('FILENAME_ARTICLE', 'article');
