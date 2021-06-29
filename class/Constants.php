<?php

declare(strict_types=1);


namespace XoopsModules\Cpsliders;

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
 * @min_xoops      2.5.9
 * @author         Dorian - Email:<info@email.com> - Website:<http://xoops.org>
 */

/**
 * Interface  Constants
 */
interface Constants
{
	// Constants for tables
	const TABLE_SLIDERS = 0;
	const TABLE_ELEMENTS = 1;

	// Constants for status
	public const STATUS_NONE      = 0;
	public const STATUS_OFFLINE   = 1;
	public const STATUS_SUBMITTED = 2;
	public const STATUS_APPROVED  = 3;
	public const STATUS_BROKEN    = 4;

}
