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
 * cpsliders module
 *
 * @copyright      2020 XOOPS Project (https://xooops.org)
 * @license        GPL 2.0 or later
 * @package        cpsliders
 * @since          1.0
 * @min_xoops      2.5.10
 * @author         Dorian
 * @author         ForMuss
 */


// IMPORTANT: The basis of this class comes from "Publisher"

xoops_load('XoopsForm');

/**
 * Form that will output formatted as a HTML table
 *
 * No styles and no JavaScript to check for required fields.
 */
class CpslidersBlockForm extends XoopsForm
{
    /**
     * __construct
     */
    public function __construct()
    {
        parent::__construct('', '', '');
    }

    /**
     * Render form block
     *
     * @return string
     */
    public function render()
    {
        $ret = '<table border="0" width="100%">' . NWLINE;
        foreach ($this->getElements() as $ele) {
            if (!$ele->isHidden()) {
				$ret .= '<tr><td style="vertical-align: top; width: 250px;">';
				$ret .= '<span style="font-weight: bold;">' . $ele->getCaption() . '</span>';
                $eleDesc = $ele->getDescription();
				if (isset($eleDesc)) {
					$ret .= '<br><span style="font-weight: normal;">' . $eleDesc . '</span>';
				}
				$ret .= '</td><td>' . $ele->render() . '</td></tr>';
            } else {
				$ret .= $ele->render();
			}
        }
        $ret .= '</table>';

        return $ret;
    }
}
