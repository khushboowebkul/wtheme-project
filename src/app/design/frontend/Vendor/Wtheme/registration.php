<?php
/**
 * Webkul Software.
 *
 * @category  Webkul
 * @package   Webkul_Wtheme
 * @author    Webkul Software Private Limited
 * @copyright Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::THEME, 
    'frontend/Vendor/Wtheme', __DIR__
);
