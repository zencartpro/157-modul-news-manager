<?php
/**
 * Part of the News Box Manager plugin, re-structured for Zen Cart v1.5.8 and later by lat9.
 * Copyright (C) 2015-2024, Vinos de Frutas Tropicales
 * Do Not Remove: Coded for Zen-Cart by geeks4u.com
 * Dedicated to Memory of Amelita "Emmy" Abordo Gelarderes
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: news_box_manager_functions.php 2024-02-16 08:35:16Z webchills $
 */
 
function zen_get_news_title($box_news_id, $language_id = '')
{
    if ($language_id === '') {
        $language_id = $_SESSION['languages_id'];
    }
    $news = $GLOBALS['db']->Execute(
        "SELECT *
           FROM " . TABLE_BOX_NEWS_CONTENT . "
          WHERE box_news_id = " . (int)$box_news_id . "
            AND languages_id = " . (int)$language_id . "
          LIMIT 1"
    );
    return ($news->EOF) ? '' : $news->fields['news_title'];
}

function zen_get_news_content($box_news_id, $language_id = '')
{
    if ($language_id === '') {
        $language_id = $_SESSION['languages_id'];
    }
    $news = $GLOBALS['db']->Execute(
        "SELECT *
           FROM " . TABLE_BOX_NEWS_CONTENT . "
          WHERE box_news_id = " . (int)$box_news_id . "
            AND languages_id = " . (int)$language_id . "
          LIMIT 1"
    );
    return ($news->EOF) ? '' : $news->fields['news_content'];
}

function zen_get_news_info($box_news_id, $language_id = ''): array
{
    if ($language_id === '') {
        $language_id = $_SESSION['languages_id'];
    }
    $news = $GLOBALS['db']->Execute(
        "SELECT *
           FROM " . TABLE_BOX_NEWS_CONTENT . "
          WHERE box_news_id = " . (int)$box_news_id . "
            AND languages_id = " . (int)$language_id . "
          LIMIT 1"
    );
    return ($news->EOF) ? [] : $news->fields;
}
