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
 * Element class object
 *
 * @copyright      2020 XOOPS Project (https://xooops.org)
 * @license        GPL 2.0 or later
 * @package        cpsliders
 * @since          1.0
 * @min_xoops      2.5.10
 * @author         Dorian
 * @author         ForMuss
 */

namespace XoopsModules\Cpsliders;

use Xmf\Module\Admin;
use Xmf\Request;

/**
 * Gestion des éléments
 */
class Element extends \XoopsObject {

    /**
     * Element constructor
     *
     */
    public function __construct()
    {
        $this->initVar('element_id', XOBJ_DTYPE_INT, null, false);
        $this->initVar('element_title', XOBJ_DTYPE_TXTBOX, null, false);
        $this->initVar('element_description', XOBJ_DTYPE_TXTBOX, null, false);
        $this->initVar('element_img', XOBJ_DTYPE_TXTBOX, null, false);
        $this->initVar('element_url', XOBJ_DTYPE_TXTBOX, null, false);
        $this->initVar('element_order', XOBJ_DTYPE_INT, null, false);
        $this->initVar('element_visible', XOBJ_DTYPE_INT, 1, false);
        $this->initVar('element_slider_id', XOBJ_DTYPE_INT, null, false);
    }

    /**
     * Element form
     * @return XoopsThemeForm
     */
    public function getForm($clone = false)
    {
        $title = $this->isNew() ? sprintf(_AM_CPSLIDERS_ELEMENTS_FORM_ADD) : sprintf(_AM_CPSLIDERS_ELEMENTS_FORM_EDIT);

        xoops_load('XoopsFormLoader');

        $form = new \XoopsThemeForm($title, 'form', $_SERVER['REQUEST_URI'], 'post', true);
        $form->setExtra('enctype="multipart/form-data"');

        if (!$this->isNew() || $clone == true) {
            if($clone == false) {
                $form->addElement(new \XoopsFormHidden('element_id', $this->getVar('element_id')));
            }
            $title          = $this->getVar('element_title');
            $description    = $this->getVar('element_description');
            $lien           = $this->getVar('element_url');
            $ordre          = $this->getVar('element_order');
            $selectedSlider = $this->getVar('element_slider_id');
        } else {
            $title = "";
            $description = "";
            $lien = "";
            $ordre = 1;
            $selectedSlider = 0;
        }

        $helper = \XoopsModules\Cpsliders\Helper::getInstance();
        $slidersHandler = $helper->getHandler('Sliders');
        $sliderselect_id = new \XoopsFormSelect(_AM_CPSLIDERS_ELEMENTS_FORM_SELECT_SLIDER, 'element_slider_id', $selectedSlider);
        $sliders         = $slidersHandler->getObjects(null, true, false);
        $sliderselect_id->addOption(0, "Aucun");
        foreach ($sliders as $slider) {			
            $sliderselect_id->addOption($slider['slider_id'], $slider['slider_title']);
        }
        $form->addElement($sliderselect_id);

        $form->addElement(new \XoopsFormText(_AM_CPSLIDERS_ELEMENTS_TITLE, 'element_title', 60, 255, $title), true);
        $form->addElement(new \XoopsFormText(_AM_CPSLIDERS_ELEMENTS_DESCRIPTION, 'element_description', 80, 255, $description), false);
        $form->addElement(new \XoopsFormText(_AM_CPSLIDERS_ELEMENTS_LINK, 'element_url', 80, 255, $lien), false);
        
        
        //Element : image
        $helper = Helper::getHelper(basename(dirname(__DIR__)));
        $upload_size = $helper->getConfig('maxsize_image', 104858);

        $blank_img      	 = $this->getVar('element_img') ?: 'blank.png';
        $uploadirectory      = str_replace(XOOPS_URL, '', CPSLIDERS_UPLOAD_IMAGE_URL."/elements/");
        $imgtray_img         = new \XoopsFormElementTray("Image" . '<br><br>' . _AM_CPSLIDERS_ELEMENTS_FORM_IMG_DESC . ($upload_size / 1048576) . ' MB <br>');
        $imageselect_img     = new \XoopsFormSelect(_AM_CPSLIDERS_ELEMENTS_FORM_IMG_DESC_SELECT, 'element_img', $blank_img);
        $image_array_img     = \XoopsLists::getImgListAsArray(CPSLIDERS_UPLOAD_IMAGE_PATH."/elements/");
        foreach ($image_array_img as $image_img) {			
            $imageselect_img->addOption("$image_img", $image_img);
        }

        $imageselect_img->setExtra("onchange='cpslidersImgSelected(\"image_img2\", \"element_img\", \"" . $uploadirectory . "\", \"\", \"" . XOOPS_URL . "\")'");
        $imgtray_img->addElement($imageselect_img, false);
        $imgtray_img->addElement(new \XoopsFormLabel('', "<br><a class='lightbox' id='image_img2_link' href='" . XOOPS_URL . '/' . $uploadirectory . '/' . $blank_img . "'><img src='" . XOOPS_URL . '/' . $uploadirectory . '/' . $blank_img . "' name='image_img2' id='image_img2' alt='' style='max-width:200px'></a>"));
        $fileseltray_img = new \XoopsFormElementTray('<br>', '<br><br>');
        $formFile = new \XoopsFormFile(_AM_CPSLIDERS_ELEMENTS_FORM_IMG_DESC_UPLOAD, 'element_img2_href', $upload_size);
        $formFile->setExtra("onchange='cpslidersImageURL(this, $(\"#image_img2\", $(\"#image_img2_link\"))'");
        $fileseltray_img->addElement($formFile, false);
        $fileseltray_img->addElement(new \XoopsFormLabel(''), false);
        $imgtray_img->addElement($fileseltray_img);
        $form->addElement($imgtray_img);

        // Element : element_order
        $form->addElement(new \XoopsFormText(_AM_CPSLIDERS_ELEMENTS_ORDER, 'element_order', 5, 5, $ordre, true));

        // Element : visible
        $formvis    = new \XoopsFormRadioYN(_AM_CPSLIDERS_ELEMENTS_FORM_VISIBLE, 'element_visible', $this->getVar('element_visible'), _YES, _NO );
        $form->addElement($formvis);
        
        // form: button tray
        $buttonTray = new \XoopsFormElementTray('', '');
        $buttonTray->addElement(new \XoopsFormHidden('op', 'save'));

        $buttonSubmit = new \XoopsFormButton('', '', _SUBMIT, 'submit');
        $buttonSubmit->setExtra('onclick="this.form.elements.op.value=\'save\'"');
        $buttonTray->addElement($buttonSubmit);
        if ($this->isNew()) {
            // NOP
        } else {
            $form->addElement(new \XoopsFormHidden('id', (int)$this->getVar('id')));
            //
            $buttonDelete = new \XoopsFormButton('', '', _DELETE, 'submit');
            $buttonDelete->setExtra('onclick="this.form.elements.op.value=\'delete\'"');
            $buttonTray->addElement($buttonDelete);
        }
        //
        $buttonCancel = new \XoopsFormButton('', '', _CANCEL, 'button');
        $buttonCancel->setExtra('onclick="history.go(-1)"');
        $buttonTray->addElement($buttonCancel);
        
        $form->addElement($buttonTray);

        return $form;
    }
}