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
 * @copyright       {@link http://sourceforge.net/projects/xoops/ The XOOPS Project}
 * @license         {@link http://www.gnu.org/licenses/gpl-2.0.html GNU Public License}
 * @package         cpsliders
 * @since           1.0
 * @author          Dorian
 */

defined('XOOPS_ROOT_PATH') || die('Restricted access');
include_once \dirname(__DIR__) . '/include/common.php';

use Xmf\Module\Admin;
use Xmf\Request;

/**
 * @param array $options array( 0 => id_slider| 1 => interval(ms)| 2 => type(carousel ou logos)| 3 => unique_id )
 *
 * @return array|bool
 */
function cpsliders_block_show($options)
{
    
    $helper = \XoopsModules\Cpsliders\Helper::getInstance();
    $slidersHandler = $helper->getHandler('Sliders');
    $elementsHandler = $helper->getHandler('Elements');
    $helper = \XoopsModules\Mymenus\Helper::getInstance();

    $block              = [];
    $block["slider_id"] = $options[0];
    $block["interval"]  = $options[1];
    $block["type"]      = $options[2];
    $block["content"]   = $slidersHandler->renderSlider($block["slider_id"], $block["interval"], $block["type"]);
 
    if ( $block["type"] == 'logos' ) {
        $GLOBALS['xoTheme']->addScript(CPSLIDERS_URL . '/assets/js/slick.js');
        $GLOBALS['xoTheme']->addScript(CPSLIDERS_URL . '/assets/js/cpsliders.js');
        $GLOBALS['xoTheme']->addStylesheet(CPSLIDERS_URL . '/assets/css/slick.css');
    } 

    $GLOBALS['xoopsTpl']->assign("xoops_cpsliders_" . $options[3], $block["content"]);

    return false;
}

/**
 * Create HTML for block editing functionality
 *
 * @param array $options array( 0 => id_slider| 1 => interval(ms)| 2 => type(carousel ou logos)| 3 => unique_id )
 *
 * @return string html for edit form
 */
function cpsliders_block_edit($options)
{
    include_once XOOPS_ROOT_PATH . '/modules/cpsliders/class/blockform.php';
    xoops_load('XoopsFormLoader');
    \xoops_loadLanguage('block', 'cpsliders');
    $helper = \XoopsModules\Cpsliders\Helper::getInstance();
    $slidersHandler = $helper->getHandler('Sliders');
    $elementsHandler = $helper->getHandler('Elements');


	$form = new \CpslidersBlockForm("", "", "");
    $sliderSelect = new \XoopsFormSelect(_AM_CPSLIDERS_BLOCK_SLIDER_TOSHOW, 'options[0]', $options[0]);
    $sliderSelect->addOption(0, _AM_CPSLIDERS_BLOCK_SLIDER_TOSHOW_NONE);
    $sliders = $slidersHandler->getObjects(null, true, false);
    foreach ($sliders as $slider) {			
        $sliderSelect->addOption($slider['slider_id'], $slider['slider_title']);
    }

    $form->addElement($sliderSelect);
    $eleInterval = new \XoopsFormText(_AM_CPSLIDERS_BLOCK_SLIDER_INTERVAL, 'options[1]', 10, 10, $options[1]);
    $eleInterval->setDescription(_AM_CPSLIDERS_BLOCK_SLIDER_INTERVAL_DESC);
    $form->addElement($eleInterval);
    $sliderTypeSelect = new \XoopsFormSelect("Type", 'options[2]', $options[2]);
    $sliderTypeSelect->addOption('carousel', 'carousel');
    $sliderTypeSelect->addOption('logos', 'logos');
    $form->addElement($sliderTypeSelect);

    if ($options[3] == 0) {
        $options[3] = time();
    } 

    $eleUniqueID = new \XoopsFormText(_AM_CPSLIDERS_BLOCK_SLIDER_UNIQUE_ID, 'options[3]', 50, 255, $options[3]);
    $eleUniqueID->setDescription(_AM_CPSLIDERS_BLOCK_SLIDER_UNIQUE_ID_DESC);
    $form->addElement($eleUniqueID);

    return $form->render();
}