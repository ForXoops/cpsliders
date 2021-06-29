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
\define('_AM_CPSLIDERS_THEREARE_SLIDERS', "Il y a <span class='bold'>%s</span> sliders dans la base de données");
\define('_AM_CPSLIDERS_THEREARE_ELEMENTS', "Il y a <span class='bold'>%s</span> éléments dans la base de données");
// ---------------- Admin Files ----------------
// There aren't
\define('_AM_CPSLIDERS_THEREARENT_SLIDERS', "Il n'y a pas de sliders");
\define('_AM_CPSLIDERS_THEREARENT_ELEMENTS', "Il n'y a pas d'éléments");
// Save/Delete
\define('_AM_CPSLIDERS_FORM_OK', 'Enregistré avec succès');
\define('_AM_CPSLIDERS_FORM_DELETE_OK', 'Supprimé avec succès');
\define('_AM_CPSLIDERS_FORM_SURE_DELETE', "Êtes-vous sûr de vouloir supprimer: <b><span style='color : Red;'>%s </span></b>");
\define('_AM_CPSLIDERS_FORM_SURE_RENEW', "Êtes-vous sûr de mettre à jour: <b><span style='color : Red;'>%s </span></b>");
// Buttons
\define('_AM_CPSLIDERS_ADD_SLIDER', 'Ajouter un nouveau slider');
\define('_AM_CPSLIDERS_ADD_ELEMENT', 'Ajouter un nouvel élément');
// Lists
\define('_AM_CPSLIDERS_LIST_SLIDERS', 'Liste des slider');
\define('_AM_CPSLIDERS_LIST_ELEMENTS', 'Liste des élément');
// ---------------- Admin Classes ----------------
// Elements of Slider
\define('_AM_CPSLIDERS_SLIDER_ID', 'Id');
\define('_AM_CPSLIDERS_SLIDER_TEST', 'Test');
// Element add/edit
\define('_AM_CPSLIDERS_ELEMENT_ADD', 'Ajouter un élément');
\define('_AM_CPSLIDERS_ELEMENT_EDIT', 'Editer un élément');
// Elements of Element
\define('_AM_CPSLIDERS_ELEMENT_ID', 'Id');
\define('_AM_CPSLIDERS_ELEMENT_TITLE', 'Titre');
\define('_AM_CPSLIDERS_ELEMENT_DESCRIPTION', 'Description');
\define('_AM_CPSLIDERS_ELEMENT_IMG', 'Image');
\define('_AM_CPSLIDERS_ELEMENT_IMG_UPLOADS', 'Images dans les téléchargements');
// General
\define('_AM_CPSLIDERS_FORM_UPLOAD', 'Télécharger un fichier');
\define('_AM_CPSLIDERS_FORM_UPLOAD_NEW', 'Télécharger un nouveau fichier: ');
\define('_AM_CPSLIDERS_FORM_UPLOAD_SIZE', 'Taille maximale du fichier: ');
\define('_AM_CPSLIDERS_FORM_UPLOAD_SIZE_MB', 'MB');
\define('_AM_CPSLIDERS_FORM_UPLOAD_IMG_WIDTH', "Largeur maximale de l'image: ");
\define('_AM_CPSLIDERS_FORM_UPLOAD_IMG_HEIGHT', "Hauteur maximale de l'image: ");
\define('_AM_CPSLIDERS_FORM_IMAGE_PATH', 'Les fichiers dans %s :');
\define('_AM_CPSLIDERS_FORM_ACTION', 'Action');
\define('_AM_CPSLIDERS_FORM_EDIT', 'Modification');
\define('_AM_CPSLIDERS_FORM_DELETE', 'Effacer');
// ---------------- Admin Others ----------------
\define('_AM_CPSLIDERS_ABOUT_MAKE_DONATION', 'Envoyer');
\define('_AM_CPSLIDERS_SUPPORT_FORUM', 'Support Forum');
\define('_AM_CPSLIDERS_DONATION_AMOUNT', 'Donation Amount');
\define('_AM_CPSLIDERS_MAINTAINEDBY', ' is maintained by ');
// ---------------- End ----------------
