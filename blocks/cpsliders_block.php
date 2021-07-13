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
 * Manage edit and display cpsliders block
 * 
 * @copyright      2020 XOOPS Project (https://xooops.org)
 * @license        GPL 2.0 or later
 * @package        cpsliders
 * @since          1.0
 * @min_xoops      2.5.10
 * @author         Dorian
 * @author         ForMuss
 */

defined('XOOPS_ROOT_PATH') || die('Restricted access');
include_once \dirname(__DIR__) . '/include/common.php';

use Xmf\Module\Admin;
use Xmf\Request;

/**
 * @param array $options array( 0 => id_slider| 1 => interval(ms)| 2 => type(carousel ou logos)| 3 => type | 4 => unique_id )
 *
 * @return array|bool
 */
function cpsliders_block_show($options)
{
    
    $helper = \XoopsModules\Cpsliders\Helper::getInstance();
    $slidersHandler = $helper->getHandler('Sliders');
    $elementsHandler = $helper->getHandler('Elements');
    $helper = \XoopsModules\Cpsliders\Helper::getInstance();

    $block              = [];
    $block["slider_id"] = $options[0];
    $block["interval"]  = $options[1];
    $block["type"]      = $options[2];
    $block["content"]   = $slidersHandler->renderSlider($block["slider_id"], $block["interval"], $block["type"]);
    
    $GLOBALS['xoTheme']->addStylesheet(CPSLIDERS_URL . '/assets/css/style.css');

    if ( $block["type"] == 'logos' ) {
        $GLOBALS['xoTheme']->addScript("browse.php?Frameworks/jquery/jquery.js");
        $GLOBALS['xoTheme']->addScript(CPSLIDERS_URL . '/assets/js/slick.js');
        $GLOBALS['xoTheme']->addScript(CPSLIDERS_URL . '/assets/js/cpsliders.js');
        $GLOBALS['xoTheme']->addStylesheet(CPSLIDERS_URL . '/assets/css/slick.css');
        
    } 

    if ('template' === $options[3]) {
        $GLOBALS['xoopsTpl']->assign("xoops_cpsliders_" . $options[4], $block["content"]);
        $block = false;
    }

    return $block;
}

/**
 * Create HTML for block editing functionality
 *
 * @param array $options array( 0 => id_slider| 1 => interval(ms)| 2 => type(carousel ou logos)| 3 => type | 4 => unique_id )
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

    $sliderTypeSelect = new \XoopsFormSelect(_AM_CPSLIDERS_BLOCK_SLIDER_TYPE, 'options[2]', $options[2]);
    $sliderTypeSelect->addOption('carousel', _AM_CPSLIDERS_BLOCK_SLIDER_TYPE_OPTN1 );
    $sliderTypeSelect->addOption('logos', _AM_CPSLIDERS_BLOCK_SLIDER_TYPE_OPTN2);
    $form->addElement($sliderTypeSelect);

    // option 3: displayMethod
    $displayMethodsList      = [
        'block'    => _MB_CPSLIDERS_DISPLAY_METHOD_BLOCK,
        'template' => _MB_CPSLIDERS_DISPLAY_METHOD_TEMPLATE
    ];
    $formDisplayMethodSelect = new XoopsFormSelect(_MB_CPSLIDERS_DISPLAY_METHOD, 'options[3]', $options[3], 1);
    $formDisplayMethodSelect->setDescription(_MB_CPSLIDERS_DISPLAY_METHOD_DSC);
    $formDisplayMethodSelect->addOptionArray($displayMethodsList);
    $form->addElement( $formDisplayMethodSelect);

    if ($options[4] == 0) {
        $options[4] = time();
    } 

    $eleUniqueID = new \XoopsFormText(_AM_CPSLIDERS_BLOCK_SLIDER_UNIQUE_ID, 'options[4]', 50, 255, $options[4]);
    $eleUniqueID->setDescription(_AM_CPSLIDERS_BLOCK_SLIDER_UNIQUE_ID_DESC);
    $form->addElement($eleUniqueID);

    return $form->render();
}