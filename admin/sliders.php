<?php

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Sliders plugin for xoops modules
 *
 * @copyright      2020 XOOPS Project (https://xooops.org)
 * @license        GPL 2.0 or later
 * @package        cpsliders
 * @since          1.0
 * @min_xoops      2.5.10
 * @author         Dorian
 * @author         ForMuss
 */


use Xmf\Request;

include __DIR__ . '/header.php';

// It recovered the value of argument op in URL$
$currentFile        = basename(__FILE__);
$op                 = Request::getString('op', 'list');
$moduleDirName      = $GLOBALS['xoopsModule']->getVar('dirname');
$moduleDirNameUpper = \mb_strtoupper($moduleDirName);
xoops_loadLanguage('sliders', $moduleDirName);

$adminObject->displayNavigation($currentFile);

// Define Stylesheet
$xoTheme->addStylesheet(XOOPS_URL . '/modules/system/css/admin.css');
$xoTheme->addScript('modules/system/js/admin.js');

switch ($op) {

    // Display sliders list
    case 'list':
    default:
        $adminObject->addItemButton(_AM_CPSLIDERS_SLIDERS_ADD, $currentFile . '?op=add', 'add');
        $xoopsTpl->assign('renderbutton', $adminObject->renderButton());     
        
        $criteria = new \CriteriaCompo();
        $criteria->setSort('slider_title');
        $criteria->setOrder('ASC');

        $sliders_arr = $slidersHandler->getall($criteria);
        $sliders_count = $slidersHandler->getCount($criteria);

        $xoopsTpl->assign('sliders_count', $sliders_count);
        if($sliders_count == 0) {
            $xoopsTpl->assign('message_error', _AM_CPSLIDERS_THEREARENT_SLIDERS);
        }

        $sliders = [];
        foreach (array_keys($sliders_arr) as $i) {
            $slider["slider_id"] = $sliders_arr[$i]->getVar('slider_id');
            $slider["slider_title"] = $sliders_arr[$i]->getVar('slider_title');
            $sliders[] = $slider;
        }
        $xoopsTpl->assign('sliders', $sliders);

        break;

    // Add slider
    case 'add':
        // Module admin
        $adminObject->addItemButton(_AM_CPSLIDERS_SLIDERS_LIST, $currentFile, 'list');
        $xoopsTpl->assign('renderbutton', $adminObject->renderButton());

        // Create form
        $obj  = $slidersHandler->create();
        $form = $obj->getForm();
        // Assign form
        $xoopsTpl->assign('form', $form->render());
        break;

    // Edit slider
    case 'edit':
        $adminObject->addItemButton(_AM_CPSLIDERS_SLIDERS_LIST, $currentFile, 'list');
        $xoopsTpl->assign('renderbutton', $adminObject->renderButton());
        $slider_id = Request::getInt('slider_id', 0);

        if ($slider_id == 0) {
            $xoopsTpl->assign('message_error', _AM_CPSLIDERS_MSG_ERROR);
        } else {
            $obj = $slidersHandler->get($slider_id);
            $form = $obj->getForm();
            $xoopsTpl->assign('form', $form->render()); 
        }

        break;

    // Save slider
    case 'save':
        if (!$GLOBALS['xoopsSecurity']->check()) {
            redirect_header($currentFile, 3, implode('<br />', $GLOBALS['xoopsSecurity']->getErrors()));
        }
        if (isset($_POST['slider_id'])) {
            $obj = $slidersHandler->get(Request::getInt('slider_id', 0));
        } else {
            $obj = $slidersHandler->create();
        }

        $slider['title'] = Request::getString('slider_title', '', 'POST');

        $obj->setVar('slider_title', $slider['title']);

        if($slidersHandler->insert($obj)) {
            redirect_header($currentFile, 2, _AM_CPSLIDERS_SLIDERS_MSG_SAVE_SUCCESS);
        } else {
            $xoopsTpl->assign('message_error', $obj->getHtmlErrors());
        }
        break;

    // Delete slider
    case 'delete':
        $slider_id = Request::getInt('slider_id', 0);
        $obj       = $slidersHandler->get($slider_id);

        if (isset($_POST['ok']) && 1 == $_POST['ok']) {
            if (!$GLOBALS['xoopsSecurity']->check()) {
                redirect_header('sliders.php', 3, implode(',', $GLOBALS['xoopsSecurity']->getErrors()));
            }
            if ($slidersHandler->delete($obj)) {
                redirect_header('sliders.php', 2, _AM_CPSLIDERS_SLIDERS_MSG_DELETE_SUCCESS);
            } else {
                xoops_error($obj->getHtmlErrors());
            }
        } else {
            xoops_confirm(array(
                'ok'         => 1,
                'slider_id'  => $slider_id,
                'op'         => 'delete'
            ), $_SERVER['REQUEST_URI'], sprintf(_AM_CPSLIDERS_SLIDERS_MSG_SUREDEL, $obj->getVar('slider_title')));

        }

        break;

}
$xoopsTpl->display("db:cpsliders_admin_sliders.tpl");

require __DIR__ . '/footer.php';