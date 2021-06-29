<?php

declare(strict_types=1);

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

include_once __DIR__ . '/common.php';

// ---------------- Admin Index ----------------
\define('_AM_CPSLIDERS_STATISTICS', 'Statistics');
// There are
\define('_AM_CPSLIDERS_THEREARE_SLIDERS', "There are <span class='bold'>%s</span> sliders in the database");
\define('_AM_CPSLIDERS_THEREARE_ELEMENTS', "There are <span class='bold'>%s</span> elements in the database");
// ---------------- Admin Files ----------------
// There aren't
\define('_AM_CPSLIDERS_THEREARENT_SLIDERS', "There aren't sliders");
\define('_AM_CPSLIDERS_THEREARENT_ELEMENTS', "There aren't elements");
// Save/Delete
\define('_AM_CPSLIDERS_FORM_OK', 'Successfully saved');
\define('_AM_CPSLIDERS_FORM_DELETE_OK', 'Successfully deleted');
\define('_AM_CPSLIDERS_FORM_SURE_DELETE', "Are you sure to delete: <b><span style='color : Red;'>%s </span></b>");
\define('_AM_CPSLIDERS_FORM_SURE_RENEW', "Are you sure to update: <b><span style='color : Red;'>%s </span></b>");
// Buttons
\define('_AM_CPSLIDERS_ADD_SLIDER', 'Add New Slider');
\define('_AM_CPSLIDERS_ADD_ELEMENT', 'Add New Element');
// Lists
\define('_AM_CPSLIDERS_LIST_SLIDERS', 'List of Sliders');
\define('_AM_CPSLIDERS_LIST_ELEMENTS', 'List of Elements');
// ---------------- Admin Classes ----------------
// Elements of Slider
\define('_AM_CPSLIDERS_SLIDER_ID', 'Id');
\define('_AM_CPSLIDERS_SLIDER_TEST', 'Test');
// Element add/edit
\define('_AM_CPSLIDERS_ELEMENT_ADD', 'Add Element');
\define('_AM_CPSLIDERS_ELEMENT_EDIT', 'Edit Element');
// Elements of Element
\define('_AM_CPSLIDERS_ELEMENT_ID', 'Id');
\define('_AM_CPSLIDERS_ELEMENT_TITLE', 'Title');
\define('_AM_CPSLIDERS_ELEMENT_DESCRIPTION', 'Description');
\define('_AM_CPSLIDERS_ELEMENT_IMG', 'Img');
\define('_AM_CPSLIDERS_ELEMENT_IMG_UPLOADS', 'Img in uploads');
// General
\define('_AM_CPSLIDERS_FORM_UPLOAD', 'Upload file');
\define('_AM_CPSLIDERS_FORM_UPLOAD_NEW', 'Upload new file: ');
\define('_AM_CPSLIDERS_FORM_UPLOAD_SIZE', 'Max file size: ');
\define('_AM_CPSLIDERS_FORM_UPLOAD_SIZE_MB', 'MB');
\define('_AM_CPSLIDERS_FORM_UPLOAD_IMG_WIDTH', 'Max image width: ');
\define('_AM_CPSLIDERS_FORM_UPLOAD_IMG_HEIGHT', 'Max image height: ');
\define('_AM_CPSLIDERS_FORM_IMAGE_PATH', 'Files in %s :');
\define('_AM_CPSLIDERS_FORM_ACTION', 'Action');
\define('_AM_CPSLIDERS_FORM_EDIT', 'Modification');
\define('_AM_CPSLIDERS_FORM_DELETE', 'Clear');
// ---------------- Admin Others ----------------
\define('_AM_CPSLIDERS_ABOUT_MAKE_DONATION', 'Submit');
\define('_AM_CPSLIDERS_SUPPORT_FORUM', 'Support Forum');
\define('_AM_CPSLIDERS_DONATION_AMOUNT', 'Donation Amount');
\define('_AM_CPSLIDERS_MAINTAINEDBY', ' is maintained by ');
// Message
define('_AM_CPSLIDERS_MSG_ERROR', 'Some error has occurred!');

// ---------------- End ----------------
