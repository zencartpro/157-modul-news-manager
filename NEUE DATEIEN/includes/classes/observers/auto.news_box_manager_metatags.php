<?php
/**
 * Part of the News Box Manager plugin, re-structured for Zen Cart v1.5.8 and later by lat9.
 * Copyright (C) 2015-2024, Vinos de Frutas Tropicales
 * Do Not Remove: Coded for Zen-Cart by geeks4u.com
 * Dedicated to Memory of Amelita "Emmy" Abordo Gelarderes
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: auto.news_box_manager_metatags.php 2024-02-16 08:35:16Z webchills $
 */
 
class zcObserverNewsBoxManagerMetatags extends base
{
    public function __construct()
    {
        if (!empty($_GET['main_page']) && ($_GET['main_page'] === FILENAME_ALL_ARTICLES || $_GET['main_page'] === FILENAME_ARTICLE)) {
            $this->attach($this, ['NOTIFY_MODULE_META_TAGS_UNSPECIFIEDPAGE']);
        }
    }

    public function update(&$class, $eventID, $p1, &$p2, &$meta_tags_over_ride, &$metatags_title, &$metatags_description, &$metatags_keywords)
    {
        if ($_GET['main_page'] === FILENAME_ALL_ARTICLES) {
            $metatags_title = sprintf(HEADING_TITLE, $GLOBALS['news_type_name']);
            $meta_tags_over_ride = true;
        } else {
            $news_box_fields = $GLOBALS['news_box_query']->fields;
            if ($news_box_fields['news_metatags_title'] !== '') {
                $metatags_title = zen_clean_html($news_box_fields['news_metatags_title']);
                $meta_tags_over_ride = true;
            }
            if (!empty($news_box_fields['news_metatags_keywords'])) {
                $metatags_keywords = zen_clean_html($news_box_fields['news_metatags_keywords']);
                $meta_tags_over_ride = true;
            }
            if (!empty($news_box_fields['news_metatags_description'])) {
                $news_metatags_description = $news_box_fields['news_metatags_description'];
                $news_metatags_description = zen_truncate_paragraph(strip_tags(stripslashes($news_metatags_description)), MAX_META_TAG_DESCRIPTION_LENGTH);
                $metatags_description = zen_clean_html($news_metatags_description);
                $meta_tags_over_ride = true;
            }
        }
    }
}
