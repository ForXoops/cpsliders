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
 * Sliders persistent handler
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

use XoopsModules\Cpsliders;
use Xmf\Module\Admin;
use Xmf\Request;

/**
 * Class SlidersHandler
 */
class SlidersHandler extends \XoopsPersistableObjectHandler
{
    /**
     * SlidersHandler constructor
     *
     */
    public function __construct(\XoopsDatabase $db = null)
    {
        //                          Table             Classe          Id
        parent::__construct($db, 'cpsliders_sliders', Slider::class, 'slider_id');
    }


    public function renderSlider($slider_id, $interval, $type){

        $result = "";
        $criteria = new \CriteriaCompo();
        $criteria->add(new \Criteria('element_slider_id', $slider_id));
        $criteria->add(new \Criteria('element_visible', 1));
        $criteria->setSort('element_order');
        $criteria->setOrder('ASC');
        $helper = \XoopsModules\Cpsliders\Helper::getInstance();
        $elementsHandler = $helper->getHandler('Elements');
        $elements_arr = $elementsHandler->getall($criteria);

        switch ($type) {
            case 'carousel':

                $el_num = 0;
                $carousel_items = "";
                $carousel_indicators = "";

                foreach (array_keys($elements_arr) as $i) {
                    $carousel_indicators .= '<li data-target="#carouselSlider'.$slider_id.'" data-slide-to="'.$el_num.'" ';
                    $carousel_indicators .= ( $el_num == 0 ? 'class="active"></li>' : '></li>' );

                    $carousel_items      .= ( $el_num == 0 ? '<div class="carousel-item active"' : '<div class="carousel-item"' );
                    $carousel_items      .= ' data-interval="'.$interval.'">';
                    if(($elements_arr[$i]->getVar('element_url')) != '') {
                        $carousel_items      .= '<a href="';
                        $carousel_items      .= ( empty($elements_arr[$i]->getVar('element_url')) ? '#' : $elements_arr[$i]->getVar('element_url') );
                        $carousel_items      .= '">';
                    }
                    $carousel_items      .= '<img src="'.XOOPS_UPLOAD_URL . '/cpsliders/images/elements/' . $elements_arr[$i]->getVar('element_img') . '" class="d-block w-100" alt="...">';
                    $carousel_items      .= '<div class="carousel-caption">';
                    $carousel_items      .= '<h5>'.$elements_arr[$i]->getVar('element_title').'</h5>';
                    $carousel_items      .= '<p>'.$elements_arr[$i]->getVar('element_description').'</p>';
                    $carousel_items      .= '</div>';
                    if(($elements_arr[$i]->getVar('element_url')) != '') {
                        $carousel_items      .= '</a>';
                    }
                    $carousel_items      .= '</div>';
                    
                    $el_num++;
                }
                $result .= '<div id="carouselSlider'.$slider_id.'" class="carousel slide carousel-fade" data-ride="carousel">';
                $result .= '<ol class="carousel-indicators">';
                $result .= $carousel_indicators;
                $result .= '</ol>';

                $result .= '<div class="carousel-inner">';
                $result .= $carousel_items;
                $result .= '</div>';

                $result .= '<a class="carousel-control-prev" href="#carouselSlider'.$slider_id.'" role="button" data-slide="prev">';
                $result .= '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                $result .= '<span class="sr-only">Previous</span>';
                $result .= '</a>';

                $result .= '<a class="carousel-control-next" href="#carouselSlider'.$slider_id.'" role="button" data-slide="next">';
                $result .= '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                $result .= '<span class="sr-only">Next</span>';
                $result .= '</a>';

                $result .= '</div>';
                break;

            case 'logos':

                $logos_items = "";
                foreach (array_keys($elements_arr) as $i) {
                    $logos_items .= '<div class="slide">';
                    if(($elements_arr[$i]->getVar('element_url')) != '') {
                        $logos_items .= '<a href="';
                        $logos_items .= ( empty($elements_arr[$i]->getVar('element_url')) ? '#' : $elements_arr[$i]->getVar('element_url') );
                        $logos_items .= '" target="_blank">';
                    }
                    $logos_items .= '<img class="p-auto" src="'.XOOPS_UPLOAD_URL . '/cpsliders/images/elements/' . $elements_arr[$i]->getVar('element_img') .'" width="238">';
                    if(($elements_arr[$i]->getVar('element_url')) != '') {
                        $logos_items .=  '</a>';
                    }
                    $logos_items .=  '</div>';
                }

                $result .= '<section class="customer-logos slider">';
                $result .= $logos_items;
                $result .= '</section>';
                break;
        }

        return $result;
    }

}
