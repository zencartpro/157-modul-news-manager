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
 * @version $Id: news_box_manager_defines.php 2022-06-08 15:01:16Z webchills $
 */
 
define('BOX_HEADING_NEWS_BOX', 'Aktuelle News');
define('BOX_HEADING_NEWS_BOX_CATEGORY', 'Neueste %s');       //- The %s is filled in with the name of the sub-content type
define('TEXT_LINK_MORE', 'mehr &hellip;');
define('TEXT_TRAIL_STR', '&hellip;');
define('TEXT_ALL_NEWS', '[zeige alle]');

define('BOX_NEWS_NAME_ALL', 'News');                        //- This constant is used in news-box headers when all news types are being selected

define('NEWS_DATE_SEPARATOR', ' - ');

define('NEWS_BOX_HEADING_TITLE', 'Artikel Titel');
define('NEWS_BOX_HEADING_DATES', 'Artikel Datum');
// Legen Sie hier ihre Artikeltypen fest und benennen Sie die Typen nach Ihren Wünschen, z.B. Typ1 = Termine, Typ2 = Neuerscheinungen, Typ 3 = Veranstaltungen, Typ 4 = Aktionen
define('BOX_NEWS_NAME_TYPE1', 'Termine');
define('BOX_NEWS_NAME_TYPE2', 'Neuerscheinungen');
define('BOX_NEWS_NAME_TYPE3', 'Veranstaltungen');
define('BOX_NEWS_NAME_TYPE4', 'Aktionen');
define('NEWS_BOX_SEE_ALL','alle anzeigen');
define('TEXT_NEWS_BOX_INFO', 'Clicken Sie den Titel eines Newsbeitrags an, um den gesamten Beitrag zu lesen, oder clicken Sie auf den <em>zeige alle</em> Link, um alle News von ' . STORE_NAME . ' anzusehen!');