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
 * @version $Id: news_box_sanitization.php 2024-02-16 08:35:16Z webchills $
 */
$news_mgr_sanitizer = AdminRequestSanitizer::getInstance();
$news_mgr_sanitizer->addSimpleSanitization('PRODUCT_DESC_REGEX', ['news_title', 'news_content']);
