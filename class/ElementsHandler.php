<?php

namespace XoopsModules\Cpsliders;


use XoopsModules\Cpsliders;

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * oledrion
 *
 * @copyright   {@link https://xoops.org/ XOOPS Project}
 * @license     {@link http://www.fsf.org/copyleft/gpl.html GNU public license}
 * @author      Hervé Thouzard (http://www.herve-thouzard.com/)
 */


/**
 * Gestion des éléments
 */

/**
 * Class ElementsHandler
 */
class ElementsHandler extends \XoopsPersistableObjectHandler
{

    public function __construct(\XoopsDatabase $db = null)
    {
        //                          Table             Classe          Id
        parent::__construct($db, 'cpsliders_elements', Element::class, 'element_id');
    }

}
