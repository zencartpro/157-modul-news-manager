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
 * @version $Id: news_box_manager_defines.php 2022-06-08 15:03:16Z webchills $
 */
 
define('BOX_HEADING_NEWS_BOX', 'Latest News');
define('BOX_HEADING_NEWS_BOX_CATEGORY', 'Latest %s');       //- The %s is filled in with the name of the sub-content type
define('TEXT_LINK_MORE', 'More &hellip;');
define('TEXT_TRAIL_STR', '&hellip;');
define('TEXT_ALL_NEWS', '[View All]');

define('BOX_NEWS_NAME_ALL', 'News');                        //- This constant is used in news-box headers when all news types are being selected

define('NEWS_DATE_SEPARATOR', ' - ');

define('NEWS_BOX_HEADING_TITLE', 'Article Title');
define('NEWS_BOX_HEADING_DATES', 'Article Date(s)');
// Define your article types here and name the types according to your wishes, e.g. type1 = dates, type2 = new releases, type 3 = events, type 4 = promotions.
define('BOX_NEWS_NAME_TYPE1', 'Dates');
define('BOX_NEWS_NAME_TYPE2', 'New Releases');
define('BOX_NEWS_NAME_TYPE3', 'Events');
define('BOX_NEWS_NAME_TYPE4', 'Promotions');
define('NEWS_BOX_SEE_ALL','See All');
define('TEXT_NEWS_BOX_INFO', 'Click an article\'s title to view its content, or click the <em>View All</em> link above to see all the latest news from ' . STORE_NAME . '!');