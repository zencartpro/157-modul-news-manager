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
* @version $Id: tpL_article_default.php 2022-06-07 08:35816Z webchills $
*/

$article_class = "nbt-$news_type";
if (is_array($start_date)) {
    $article_class .= ' news-mdy';
}
?>
<div class="centerColumn <?php echo $article_class; ?>" id="articleDefault">
    <h1 id="articleHeading"><?php echo $news_title; ?></h1>

<?php
if (is_array($start_date)) {
    $news_date = '<span>' . $start_date[0] . '</span><span class="nb-day">' . $start_date[1] . '</span><span>' . $start_date[2] . '</span>';
} else {
    $news_date = '<div class="news-header"><strong>' . TEXT_NEWS_PUBLISHED_DATE . '</strong>&nbsp;<span>' . $start_date . ((!empty($end_date)) ? (NEWS_DATE_SEPARATOR . $end_date) : '') . '</span></div>';
}
?>
    <div class="news-dates"><?php echo $news_date; ?></div>
    <div class="news-content"><?php echo $news_content; ?></div>

    <div class="buttonRow back"><?php echo zen_back_link() . zen_image_button(BUTTON_IMAGE_BACK, BUTTON_BACK_ALT) . '</a>'; ?></div>
</div>
