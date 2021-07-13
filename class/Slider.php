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

namespace XoopsModules\Cpsliders; 

/**
 * Manage sliders
 */
class Slider extends \XoopsObject {

    /**
     * Slider constructor
     *
     */
    public function __construct()
    {
        $this->initVar('slider_id', XOBJ_DTYPE_INT, null, false);
        $this->initVar('slider_title', XOBJ_DTYPE_TXTBOX, null, false);
    }

    /**
     * Slider form
     * @return XoopsThemeForm
     */
    public function getForm()
    {
        $title = $this->isNew() ? sprintf(_AM_CPSLIDERS_SLIDERS_FORM_ADD) : sprintf(_AM_CPSLIDERS_SLIDERS_FORM_EDIT);
        xoops_load('XoopsFormLoader');
        $form = new \XoopsThemeForm($title, 'form', $_SERVER['REQUEST_URI'], 'post', true);

        if (!$this->isNew()) {
            $form->addElement(new \XoopsFormHidden('slider_id', $this->getVar('slider_id')));
            $title = $this->getVar('slider_title');
        } else {
            $title = "";
        }

        // Slider: title
        $form->addElement(new \XoopsFormText(_AM_CPSLIDERS_SLIDERS_FORM_TITLE, 'slider_title', 60, 255, $title), true);

        // Slider: button tray
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