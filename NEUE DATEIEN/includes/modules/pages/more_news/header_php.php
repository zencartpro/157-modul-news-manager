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
 * @version $Id: header_php.php 2024-02-16 08:35:16Z webchills $
 */
 
// -----
// Starting in v3.0.0 of the plugin, this page is 'deprecated' (i.e. no longer used).
//
// For installations that are upgrading from previous versions, this page now
// performs a "Redirect Permanent" to the 'article' page ... just in case
// the link was previously bookmarked.
//
zen_redirect(zen_href_link(FILENAME_ARTICLE, 'p=' . (int)($_GET['news_id'] ?? 0)), '301');
