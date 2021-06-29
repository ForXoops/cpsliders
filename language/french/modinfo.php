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

include_once 'common.php';

// ---------------- Admin Main ----------------
\define('_MI_CPSLIDERS_NAME', 'Complus Sliders');
\define('_MI_CPSLIDERS_DESC', 'Module de gestion des sliders');
// ---------------- Admin Menu ----------------
\define('_MI_CPSLIDERS_ADMENU1', 'Accueil');
\define('_MI_CPSLIDERS_ADMENU2', 'Sliders');
\define('_MI_CPSLIDERS_ADMENU3', 'Éléments');
\define('_MI_CPSLIDERS_ADMENU4', 'Feedback');
\define('_MI_CPSLIDERS_ABOUT', 'À propos');
// Config
\define('_MI_CPSLIDERS_EDITOR_ADMIN', "Administrateur de l'éditeur");
\define('_MI_CPSLIDERS_EDITOR_ADMIN_DESC', 'Sélectionnez l\'éditeur qui doit être utilisé dans la zone d\'administration pour les champs de zone de texte');
\define('_MI_CPSLIDERS_EDITOR_USER', 'Editeur de l\'utilisateur');
\define('_MI_CPSLIDERS_EDITOR_USER_DESC', 'Sélectionnez l\'éditeur qui doit être utilisé dans la zone utilisateur pour les champs de zone de texte');
\define('_MI_CPSLIDERS_EDITOR_MAXCHAR', 'Texte maximum de caractères');
\define('_MI_CPSLIDERS_EDITOR_MAXCHAR_DESC', 'Nombre maximum de caractères pour afficher le texte d\'une zone de texte ou d\'un champ d\'éditeur dans la zone d\'administration');
\define('_MI_CPSLIDERS_KEYWORDS', 'Mots clés');
\define('_MI_CPSLIDERS_KEYWORDS_DESC', 'Insérez ici les mots-clés (séparés par des virgules)');
\define('_MI_CPSLIDERS_NUMB_COL', 'Nombre de colonnes');
\define('_MI_CPSLIDERS_NUMB_COL_DESC', 'Nombre de colonnes à afficher');
\define('_MI_CPSLIDERS_DIVIDEBY', 'Diviser par');
\define('_MI_CPSLIDERS_DIVIDEBY_DESC', 'Diviser par le nombre de colonnes');
\define('_MI_CPSLIDERS_TABLE_TYPE', 'Type de tableau');
\define('_MI_CPSLIDERS_TABLE_TYPE_DESC', 'Quel type de tableau html bootstrap');
\define('_MI_CPSLIDERS_PANEL_TYPE', 'Type de panel');
\define('_MI_CPSLIDERS_PANEL_TYPE_DESC', 'Quel type de div bootstrap');
\define('_MI_CPSLIDERS_IDPAYPAL', 'Identifiant Paypal');
\define('_MI_CPSLIDERS_IDPAYPAL_DESC', 'Insérez ici votre identifiant PayPal pour les dons');
\define('_MI_CPSLIDERS_SHOW_BREADCRUMBS', 'Afficher le fil d\'Ariane');
\define('_MI_CPSLIDERS_SHOW_BREADCRUMBS_DESC', 'Afficher le fil d\'Ariane qui affiche la page actuelle en contexte dans la structure du site');
\define('_MI_CPSLIDERS_ADVERTISE', 'Message d\'avertissement');
\define('_MI_CPSLIDERS_ADVERTISE_DESC', 'Insérer ici le message d\'advertisement');
\define('_MI_CPSLIDERS_MAINTAINEDBY', 'Maintenu par');
\define('_MI_CPSLIDERS_MAINTAINEDBY_DESC', 'Autoriser l\'URL du site d\'assistance ou de la communauté');
\define('_MI_CPSLIDERS_BOOKMARKS', 'Signets réseaux sociaux');
\define('_MI_CPSLIDERS_BOOKMARKS_DESC', 'Afficher les signets des réseaux sociaux sur la page unique');
\define('_MI_CPSLIDERS_SIZE_MB', 'MB');
// ---------------- End ----------------
