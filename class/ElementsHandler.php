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
 * Element persistent handler
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