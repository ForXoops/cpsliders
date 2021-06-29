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
if (!\defined('XOOPS_ICONS32_PATH')) {
	\define('XOOPS_ICONS32_PATH', XOOPS_ROOT_PATH . '/Frameworks/moduleclasses/icons/32');
}
if (!\defined('XOOPS_ICONS32_URL')) {
	\define('XOOPS_ICONS32_URL', XOOPS_URL . '/Frameworks/moduleclasses/icons/32');
}
\define('CPSLIDERS_DIRNAME', 'cpsliders');
\define('CPSLIDERS_PATH', XOOPS_ROOT_PATH . '/modules/' . CPSLIDERS_DIRNAME);
\define('CPSLIDERS_URL', XOOPS_URL . '/modules/' . CPSLIDERS_DIRNAME);
\define('CPSLIDERS_ICONS_PATH', CPSLIDERS_PATH . '/assets/icons');
\define('CPSLIDERS_ICONS_URL', CPSLIDERS_URL . '/assets/icons');
\define('CPSLIDERS_IMAGE_PATH', CPSLIDERS_PATH . '/assets/images');
\define('CPSLIDERS_IMAGE_URL', CPSLIDERS_URL . '/assets/images');
\define('CPSLIDERS_UPLOAD_PATH', XOOPS_UPLOAD_PATH . '/' . CPSLIDERS_DIRNAME);
\define('CPSLIDERS_UPLOAD_URL', XOOPS_UPLOAD_URL . '/' . CPSLIDERS_DIRNAME);
\define('CPSLIDERS_UPLOAD_FILES_PATH', CPSLIDERS_UPLOAD_PATH . '/files');
\define('CPSLIDERS_UPLOAD_FILES_URL', CPSLIDERS_UPLOAD_URL . '/files');
\define('CPSLIDERS_UPLOAD_IMAGE_PATH', CPSLIDERS_UPLOAD_PATH . '/images');
\define('CPSLIDERS_UPLOAD_IMAGE_URL', CPSLIDERS_UPLOAD_URL . '/images');
\define('CPSLIDERS_UPLOAD_SHOTS_PATH', CPSLIDERS_UPLOAD_PATH . '/images/shots');
\define('CPSLIDERS_UPLOAD_SHOTS_URL', CPSLIDERS_UPLOAD_URL . '/images/shots');
\define('CPSLIDERS_ADMIN', CPSLIDERS_URL . '/admin/index.php');
$localLogo = CPSLIDERS_IMAGE_URL . '/dorian_logo.png';
// Module Information
$copyright = "<a href='http://xoops.org' title='XOOPS Project' target='_blank'><img src='" . $localLogo . "' alt='XOOPS Project' /></a>";
include_once XOOPS_ROOT_PATH . '/class/xoopsrequest.php';
include_once CPSLIDERS_PATH . '/include/functions.php';
