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


use XoopsModules\Cpsliders\Common;

include_once \dirname(__DIR__) . '/preloads/autoloader.php';
require __DIR__ . '/header.php';

// Template Index
$templateMain = 'cpsliders_admin_index.tpl';

// Count elements
$countSliders = $slidersHandler->getCount();
$countElements = $elementsHandler->getCount();

// InfoBox Statistics
$adminObject->addInfoBox(_AM_CPSLIDERS_STATISTICS);
// Info elements
$adminObject->addInfoBoxLine(\sprintf( _AM_CPSLIDERS_THEREARE_SLIDERS, $countSliders));
$adminObject->addInfoBoxLine(\sprintf( _AM_CPSLIDERS_THEREARE_ELEMENTS, $countElements));
// Render Index
$GLOBALS['xoopsTpl']->assign('navigation', $adminObject->displayNavigation('index.php'));
// Test Data
if ($helper->getConfig('displaySampleButton')) {
	\xoops_loadLanguage('admin/modulesadmin', 'system');
	include_once \dirname(__DIR__) . '/testdata/index.php';
	//$adminObject->addItemButton(\constant('CO_' . $moduleDirNameUpper . '_ADD_SAMPLEDATA'), '__DIR__ . /../../testdata/index.php?op=load', 'add');
	//$adminObject->addItemButton(\constant('CO_' . $moduleDirNameUpper . '_SAVE_SAMPLEDATA'), '__DIR__ . /../../testdata/index.php?op=save', 'add');
//	$adminObject->addItemButton(\constant('CO_' . $moduleDirNameUpper . '_EXPORT_SCHEMA'), '__DIR__ . /../../testdata/index.php?op=exportschema', 'add');
	$adminObject->displayButton('left');
}
$GLOBALS['xoopsTpl']->assign('index', $adminObject->displayIndex());
// End Test Data
require __DIR__ . '/footer.php';
