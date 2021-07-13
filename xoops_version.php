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

// 
$moduleDirName      = \basename(__DIR__);
$moduleDirNameUpper = \mb_strtoupper($moduleDirName);
// ------------------- Informations ------------------- //
$modversion = [
	'name'                => _MI_CPSLIDERS_NAME,
	'version'             => 1.1,
	'description'         => _MI_CPSLIDERS_DESC,
	'author'              => 'Dorian, ForMuss',
	'author_mail'         => 'info@email.com',
	'author_website_url'  => 'http://xoops.org',
	'author_website_name' => 'XOOPS Project',
	'credits'             => 'XOOPS Development Team',
	'license'             => 'GPL 2.0 or later',
	'license_url'         => 'http://www.gnu.org/licenses/gpl-3.0.en.html',
	'help'                => 'page=help',
	'release_info'        => 'release_info',
	'release_file'        => XOOPS_URL . '/modules/cpsliders/docs/release_info file',
	'release_date'        => '2021/06/01',
	'manual'              => 'link to manual file',
	'manual_file'         => XOOPS_URL . '/modules/cpsliders/docs/install.txt',
	'min_php'             => '7.0',
	'min_xoops'           => '2.5.9',
	'min_admin'           => '1.2',
	'min_db'              => ['mysql' => '5.5', 'mysqli' => '5.5'],
	'image'               => 'assets/images/logo.png',
	'dirname'             => \basename(__DIR__),
	'dirmoduleadmin'      => 'Frameworks/moduleclasses/moduleadmin',
	'sysicons16'          => '../../Frameworks/moduleclasses/icons/16',
	'sysicons32'          => '../../Frameworks/moduleclasses/icons/32',
	'modicons16'          => 'assets/icons/16',
	'modicons32'          => 'assets/icons/32',
	'demo_site_url'       => 'https://xoops.org',
	'demo_site_name'      => 'XOOPS Demo Site',
	'support_url'         => 'https://xoops.org/modules/newbb',
	'support_name'        => 'Support Forum',
	'module_website_url'  => 'www.xoops.org',
	'module_website_name' => 'XOOPS Project',
	'release'             => '01-06-2021',
	'module_status'       => 'Beta 1',
	'system_menu'         => 1,
	'hasAdmin'            => 1,
	'hasMain'             => 0,
	'adminindex'          => 'admin/index.php',
	'adminmenu'           => 'admin/menu.php',
	'onInstall'           => 'include/install.php',
	'onUninstall'         => 'include/uninstall.php',
	'onUpdate'            => 'include/update.php',
];
// ------------------- Templates ------------------- //
$modversion['templates'] = [
	// Admin templates
	['file' => 'cpsliders_admin_about.tpl', 'description' => '', 'type' => 'admin'],
	['file' => 'cpsliders_admin_header.tpl', 'description' => '', 'type' => 'admin'],
	['file' => 'cpsliders_admin_index.tpl', 'description' => '', 'type' => 'admin'],
	['file' => 'cpsliders_admin_sliders.tpl', 'description' => '', 'type' => 'admin'],
	['file' => 'cpsliders_admin_elements.tpl', 'description' => '', 'type' => 'admin'],
	['file' => 'cpsliders_admin_footer.tpl', 'description' => '', 'type' => 'admin'],
];
// ------------------- Mysql ------------------- //
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
// Tables
$modversion['tables'] = [
	'cpsliders_sliders',
	'cpsliders_elements',
];

// ------------------- Blocks ------------------- //
$modversion['blocks'][] = [
    'file'        => $moduleDirName . '_block.php',
    'name'        => _MI_CPSLIDERS_BLOCK1,
    'description' => _MI_CPSLIDERS_BLOCK1_DESC,
    'show_func'   => $moduleDirName . '_block_show',
    'edit_func'   => $moduleDirName . '_block_edit',
    'options'     => '0|5000|carousel|block|0', // id_slider|interval(ms)|type(carousel ou logos)|type|unique_id
    'template'    => $moduleDirName . '_block.tpl'
];

// ------------------- Config ------------------- //

// create increment steps for file size
include_once __DIR__ . '/include/xoops_version.inc.php';
$iniPostMaxSize       = cpslidersReturnBytes(\ini_get('post_max_size'));
$iniUploadMaxFileSize = cpslidersReturnBytes(\ini_get('upload_max_filesize'));
$maxSize              = min($iniPostMaxSize, $iniUploadMaxFileSize);
if ($maxSize > 10000 * 1048576) {
	$increment = 500;
}
if ($maxSize <= 10000 * 1048576) {
	$increment = 200;
}
if ($maxSize <= 5000 * 1048576) {
	$increment = 100;
}
if ($maxSize <= 2500 * 1048576) {
	$increment = 50;
}
if ($maxSize <= 1000 * 1048576) {
	$increment = 10;
}
if ($maxSize <= 500 * 1048576) {
	$increment = 5;
}
if ($maxSize <= 100 * 1048576) {
	$increment = 2;
}
if ($maxSize <= 50 * 1048576) {
	$increment = 1;
}
if ($maxSize <= 25 * 1048576) {
	$increment = 0.5;
}
$optionMaxsize = [];
$i = $increment;
while ($i * 1048576 <= $maxSize) {
	$optionMaxsize[$i . ' ' . _MI_CPSLIDERS_SIZE_MB] = $i * 1048576;
	$i += $increment;
}
// Uploads : maxsize of image
$modversion['config'][] = [
	'name'        => 'maxsize_image',
	'title'       => '_MI_CPSLIDERS_MAXSIZE_IMAGE',
	'description' => '_MI_CPSLIDERS_MAXSIZE_IMAGE_DESC',
	'formtype'    => 'select',
	'valuetype'   => 'int',
	'default'     => 3145728,
	'options'     => $optionMaxsize,
];
// Uploads : mimetypes of image
$modversion['config'][] = [
	'name'        => 'mimetypes_image',
	'title'       => '_MI_CPSLIDERS_MIMETYPES_IMAGE',
	'description' => '_MI_CPSLIDERS_MIMETYPES_IMAGE_DESC',
	'formtype'    => 'select_multi',
	'valuetype'   => 'array',
	'default'     => ['image/gif', 'image/jpeg', 'image/png'],
	'options'     => ['bmp' => 'image/bmp','gif' => 'image/gif','pjpeg' => 'image/pjpeg', 'jpeg' => 'image/jpeg','jpg' => 'image/jpg','jpe' => 'image/jpe', 'png' => 'image/png'],
];
