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
 * elements plugin for xoops modules
 *
 * @copyright      XOOPS Project  (https://xoops.org)
 * @license        GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @author         Dorian
 */


use Xmf\Request;

$currentFile = basename(__FILE__);
include __DIR__ . '/header.php';

// It recovered the value of argument op in URL$
$currentFile        = basename(__FILE__);
$op                 = Request::getString('op', 'list');
$moduleDirName      = $GLOBALS['xoopsModule']->getVar('dirname');
$moduleDirNameUpper = \mb_strtoupper($moduleDirName);
\xoops_loadLanguage('elements', $moduleDirName);

$adminObject->displayNavigation($currentFile);

// Define Stylesheet
$xoTheme->addStylesheet(XOOPS_URL . '/modules/system/css/admin.css');
$xoTheme->addStylesheet(XOOPS_URL . '/modules/system/css/ui/' . xoops_getModuleOption('jquery_theme', 'system') . '/ui.all.css');
$xoTheme->addStylesheet(XOOPS_URL . '/modules/system/css/lightbox.css');
$xoTheme->addStylesheet('modules/cpsliders/assets/css/admin/style.css');
$xoTheme->addScript('browse.php?Frameworks/jquery/plugins/jquery.ui.js');
$xoTheme->addScript('browse.php?Frameworks/jquery/plugins/jquery.lightbox.js');
$xoTheme->addScript('modules/cpsliders/assets/js/admin.js');
$xoTheme->addScript('modules/system/js/admin.js');

switch ($op) {
    case 'list':
    default: 
        $selected_slider_id = Request::getInt('slider_id', 0);
        $adminObject->addItemButton(_AM_CPSLIDERS_ELEMENTS_ADD, $currentFile . '?op=add', 'add');
        $xoopsTpl->assign('renderbutton', $adminObject->renderButton());
        $criteria = new \CriteriaCompo();
        $criteria->setSort('element_slider_id, element_order');
        $criteria->setOrder('ASC');
        
        if ($selected_slider_id != 0) {
            $criteria->add(new \Criteria('element_slider_id', $selected_slider_id));
        }
        $elements_arr = $elementsHandler->getall($criteria);
        $elements_count = $elementsHandler->getCount($criteria);
        $xoopsTpl->assign('elements_count', $elements_count);
        $xoopsTpl->assign('filter', true);
        $elements = [];
        foreach (array_keys($elements_arr) as $i) {
            $element["id"] = $elements_arr[$i]->getVar('element_id');
            $element["title"] = $elements_arr[$i]->getVar('element_title');
            $element["description"] = $elements_arr[$i]->getVar('element_description');
            $element["img"] = XOOPS_UPLOAD_URL . '/cpsliders/images/elements/' . $elements_arr[$i]->getVar('element_img');
            $element["url"] = $elements_arr[$i]->getVar('element_url');
            $element["order"] = $elements_arr[$i]->getVar('element_order');
            $element["visible"] = $elements_arr[$i]->getVar('element_visible');
            $slider = $slidersHandler->get($elements_arr[$i]->getVar('element_slider_id'));
            $element["slider_title"] = $slider->getVar('slider_title');
            $elements[] = $element;
        }

        //Options pour la liste des sliders
        $slider_options = '<option value="0">'._AM_CPSLIDERS_ELEMENTS_SLIDER_DD_SHOW_ALL.'</option>';
        $slider_criteria = new \Criteria('');
        $slider_criteria->setSort('slider_title');
        $slider_criteria->setOrder('ASC');
        $sliders_arr = $slidersHandler->getall($slider_criteria);
        foreach (array_keys($sliders_arr) as $i) {
            $slider_options .= '<option value="'.$sliders_arr[$i]->getVar('slider_id').'" ' . ($selected_slider_id == $sliders_arr[$i]->getVar('slider_id') ? ' selected="selected"' : '') . '>'.$sliders_arr[$i]->getVar('slider_title').'</option>';
        }

        $xoopsTpl->assign('elements', $elements);
        $xoopsTpl->assign('slider_options', $slider_options);
        break;
    case 'add':
        // Module admin
        $adminObject->addItemButton(_AM_CPSLIDERS_ELEMENTS_LIST, $currentFile, 'list');
        $xoopsTpl->assign('renderbutton', $adminObject->renderButton());

        // Create form
        $obj  = $elementsHandler->create();
        $form = $obj->getForm();
        // Assign form
        $xoopsTpl->assign('form', $form->render());
        break;

    case 'edit':
        $adminObject->addItemButton(_AM_CPSLIDERS_ELEMENTS_LIST, 'elements.php', 'list');
        $xoopsTpl->assign('renderbutton', $adminObject->renderButton());
        $element_id = Request::getInt('element_id', 0);

        if ($element_id == 0) {
            $xoopsTpl->assign('message_error', "erreur");
        } else {
            $obj = $elementsHandler->get($element_id);
            $form = $obj->getForm();
            $xoopsTpl->assign('form', $form->render()); 
        }

        break;
    case 'save':
        if (!$GLOBALS['xoopsSecurity']->check()) {
            redirect_header('elements.php', 3, implode('<br />', $GLOBALS['xoopsSecurity']->getErrors()));
        }
        if (isset($_POST['element_id'])) {
            $obj = $elementsHandler->get(Request::getInt('element_id', 0));
        } else {
            $obj = $elementsHandler->create();
        }

        $element['title']                = Request::getString('element_title', '', 'POST');
        $element['description']          = Request::getString('element_description', '', 'POST');
        $element['url']                  = Request::getString('element_url', '', 'POST');
        $element['order']                = Request::getString('element_order', '', 'POST');
        $element['visible']              = Request::getString('element_visible', '', 'POST');
        $element['element_slider_id']    = Request::getString('element_slider_id', '', 'POST');

        //Image
        $uploadirectory = CPSLIDERS_UPLOAD_IMAGE_PATH . '/elements/';

        if ($_FILES['element_img']['error'] != UPLOAD_ERR_NO_FILE) {
            include_once XOOPS_ROOT_PATH . '/class/uploader.php';
            $upload_size = $helper->getConfig('maxsize_image', 104858);
            $uploader_element_img = new \XoopsMediaUploader($uploadirectory, ['image/gif', 'image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png'], $upload_size, null, null);
            if ($uploader_element_img->fetchMedia('element_img')) {
                $uploader_element_img->setPrefix('el_');
                if (!$uploader_element_img->upload()) {
                    $error .= $uploader_element_img->getErrors() . '<br>';
                    
                } else {
                    $element_img = $uploader_element_img->getSavedFileName();
                }
            } else {
                $error .= $uploader_element_img->getErrors();
            }
        } else {
			$element_img = Request::getString('element_img', '');
			if ($element_img == 'noimage/no-image.png'){
				$element_img = '';
			}
        }

        $obj->setVar('element_title', $element['title']);
        $obj->setVar('element_description', $element['description']);
        $obj->setVar('element_img', $element_img);
        $obj->setVar('element_url', $element['url']);
        $obj->setVar('element_order', $element['order']);
        $obj->setVar('element_visible', $element['visible']);
        $obj->setVar('element_slider_id', $element['element_slider_id']);
        
        if($elementsHandler->insert($obj)) {
            redirect_header('elements.php', 2, _AM_CPSLIDERS_ELEMENTS_MSG_SAVE_SUCCESS);
        } else {
            $xoopsTpl->assign('message_error', $obj->getHtmlErrors());
        }

        break;
    case 'delete':
        $element_id = Request::getInt('element_id', 0);
        $obj        = $elementsHandler->get($element_id);

        if (isset($_POST['ok']) && 1 == $_POST['ok']) {
            if (!$GLOBALS['xoopsSecurity']->check()) {
                redirect_header('elements.php', 3, implode(',', $GLOBALS['xoopsSecurity']->getErrors()));
            }
            if ($elementsHandler->delete($obj)) {
                redirect_header('elements.php', 2, _AM_CPSLIDERS_ELEMENTS_MSG_DELETE_SUCCESS);
            } else {
                xoops_error($obj->getHtmlErrors());
            }
        } else {
            xoops_confirm(array(
                'ok'         => 1,
                'element_id' => $element_id,
                'op'         => 'delete'
            ), $_SERVER['REQUEST_URI'], sprintf(_AM_CPSLIDERS_ELEMENTS_MSG_SUREDEL, $obj->getVar('element_title')));

        }
        
        break;
    // update status
    case 'element_update_status':
        $id = Request::getInt('id', 0);
        if ($id > 0) {
            $obj = $elementsHandler->get($id);
            $old = $obj->getVar('element_visible');
            $obj->setVar('element_visible', !$old);
            if ($elementsHandler->insert($obj)) {
                exit;
            }
            $xoopsTpl->assign('message_error', $obj->getHtmlErrors());
        }
        break;
    case 'order':
        if (isset($_POST['elem'])) {
            $i = 10;
            $cat = 0;
            foreach ($_POST['elem'] as $elem) {
                if ($elem > 0) {
                    $element = $elementsHandler->get($elem);
                    if($i == 10) {
                        $cat = $element->getVar('element_slider_id');
                    }
                    if($cat != $element->getVar('element_slider_id')) {
                        $i = 10;
                        $cat = $element->getVar('element_slider_id');
                    }
                    
                    $element->setVar('element_order', $i);
                    if (!$elementsHandler->insert($element)) {
                        $error = true;
                    }
                    $i = $i + 10;
                }
            }
            unset($i);
        }
        exit;
        break;
}
$xoopsTpl->display("db:cpsliders_admin_elements.tpl");

require __DIR__ . '/footer.php';