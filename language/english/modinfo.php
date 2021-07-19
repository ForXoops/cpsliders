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

include_once 'common.php';

// ---------------- Admin Main ----------------
\define('_MI_CPSLIDERS_NAME', 'Sliders');
\define('_MI_CPSLIDERS_DESC', 'Manage sliders and slideshow');
// ---------------- Admin Menu ----------------
\define('_MI_CPSLIDERS_ADMENU1', 'Home');
\define('_MI_CPSLIDERS_ADMENU2', 'Sliders');
\define('_MI_CPSLIDERS_ADMENU3', 'Elements');
\define('_MI_CPSLIDERS_ADMENU4', 'Feedback');
\define('_MI_CPSLIDERS_ABOUT', 'About');
// Blocks
define('_MI_CPSLIDERS_BLOCK1', "Slider block");
define('_MI_CPSLIDERS_BLOCK1_DESC', "Manage sliders to display");
// Config
\define('_MI_CPSLIDERS_EDITOR_ADMIN', 'Editor admin');
\define('_MI_CPSLIDERS_EDITOR_ADMIN_DESC', 'Select the editor which should be used in admin area for text area fields');
\define('_MI_CPSLIDERS_EDITOR_USER', 'Editor user');
\define('_MI_CPSLIDERS_EDITOR_USER_DESC', 'Select the editor which should be used in user area for text area fields');
\define('_MI_CPSLIDERS_EDITOR_MAXCHAR', 'Text max characters');
\define('_MI_CPSLIDERS_EDITOR_MAXCHAR_DESC', 'Max characters for showing text of a textarea or editor field in admin area');
\define('_MI_CPSLIDERS_KEYWORDS', 'Keywords');
\define('_MI_CPSLIDERS_KEYWORDS_DESC', 'Insert here the keywords (separate by comma)');
\define('_MI_CPSLIDERS_NUMB_COL', 'Number Columns');
\define('_MI_CPSLIDERS_NUMB_COL_DESC', 'Number Columns to View');
\define('_MI_CPSLIDERS_DIVIDEBY', 'Divide By');
\define('_MI_CPSLIDERS_DIVIDEBY_DESC', 'Divide by columns number');
\define('_MI_CPSLIDERS_TABLE_TYPE', 'Table Type');
\define('_MI_CPSLIDERS_TABLE_TYPE_DESC', 'Table Type is the bootstrap html table');
\define('_MI_CPSLIDERS_PANEL_TYPE', 'Panel Type');
\define('_MI_CPSLIDERS_PANEL_TYPE_DESC', 'Panel Type is the bootstrap html div');
\define('_MI_CPSLIDERS_IDPAYPAL', 'Paypal ID');
\define('_MI_CPSLIDERS_IDPAYPAL_DESC', 'Insert here your PayPal ID for donations');
\define('_MI_CPSLIDERS_SHOW_BREADCRUMBS', 'Show breadcrumb navigation');
\define('_MI_CPSLIDERS_SHOW_BREADCRUMBS_DESC', 'Show breadcrumb navigation which displays the current page in context within the site structure');
\define('_MI_CPSLIDERS_ADVERTISE', 'Advertisement Code');
\define('_MI_CPSLIDERS_ADVERTISE_DESC', 'Insert here the advertisement code');
\define('_MI_CPSLIDERS_MAINTAINEDBY', 'Maintained By');
\define('_MI_CPSLIDERS_MAINTAINEDBY_DESC', 'Allow url of support site or community');
\define('_MI_CPSLIDERS_BOOKMARKS', 'Social Bookmarks');
\define('_MI_CPSLIDERS_BOOKMARKS_DESC', 'Show Social Bookmarks in the single page');
\define('_MI_CPSLIDERS_SIZE_MB', 'MB');
\define('_MI_CPSLIDERS_MAXSIZE_IMAGE', 'Maximum upload size');
\define('_MI_CPSLIDERS_MIMETYPES_IMAGE', 'Allowed mimetype to upload');
// ---------------- End ----------------
