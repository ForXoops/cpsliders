<?php

declare(strict_types=1);

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Complus Sliders module for xoops
 *
 * @copyright      2020 XOOPS Project (https://xooops.org)
 * @license        GPL 2.0 or later
 * @package        cpsliders
 * @since          1.0
 * @min_xoops      2.5.9
 * @author         Dorian - Email:<info@email.com> - Website:<http://xoops.org>
 */




define('_AM_CPSLIDERS_BLOCK_SLIDER_TOSHOW', 'Slider to show');
define('_AM_CPSLIDERS_BLOCK_SLIDER_TOSHOW_NONE', 'None');
define('_AM_CPSLIDERS_BLOCK_SLIDER_INTERVAL', 'interval(ms)');
define('_AM_CPSLIDERS_BLOCK_SLIDER_INTERVAL_DESC', 'Only for bootstrap slider');
define('_AM_CPSLIDERS_BLOCK_SLIDER_TYPE', "Type");
define('_AM_CPSLIDERS_BLOCK_SLIDER_TYPE_OPTN1', "Bootsrap 4 Carousel");
define('_AM_CPSLIDERS_BLOCK_SLIDER_TYPE_OPTN2', "Slick Logos");

define('_AM_CPSLIDERS_BLOCK_SLIDER_UNIQUE_ID', 'Unique ID');
define('_AM_CPSLIDERS_BLOCK_SLIDER_UNIQUE_ID_DESC', '<span style="color:red">do not modify !</span>');

define('_MB_CPSLIDERS_DISPLAY_METHOD', 'Display Method');
define('_MB_CPSLIDERS_DISPLAY_METHOD_DSC', 'If you choose assign to the template, then you can use <{xoops_cpsliders_' . _AM_CPSLIDERS_BLOCK_SLIDER_UNIQUE_ID . '}> in your theme');
define('_MB_CPSLIDERS_DISPLAY_METHOD_BLOCK', 'Display this block');
define('_MB_CPSLIDERS_DISPLAY_METHOD_TEMPLATE', 'Assign to template');