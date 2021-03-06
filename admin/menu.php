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
 * @min_xoops      2.5.10
 * @author         Dorian
 * @author         ForMuss
 */

$dirname       = \basename(\dirname(__DIR__));
$moduleHandler = \xoops_getHandler('module');
$xoopsModule   = XoopsModule::getByDirname($dirname);
$moduleInfo    = $moduleHandler->get($xoopsModule->getVar('mid'));
$sysPathIcon32 = $moduleInfo->getInfo('sysicons32');

$adminmenu[] = [
	'title' => _MI_CPSLIDERS_ADMENU1,
	'link' => 'admin/index.php',
	'icon' => $sysPathIcon32.'/home.png',
];
$adminmenu[] = [
	'title' => _MI_CPSLIDERS_ADMENU2,
	'link' => 'admin/sliders.php',
	'icon' => $sysPathIcon32.'/metagen.png',
];
$adminmenu[] = [
	'title' => _MI_CPSLIDERS_ADMENU3,
	'link' => 'admin/elements.php',
	'icon' => $sysPathIcon32.'/photo.png',
];
$adminmenu[] = [
	'title' => _MI_CPSLIDERS_ABOUT,
	'link' => 'admin/about.php',
	'icon' => $sysPathIcon32.'/about.png',
];
