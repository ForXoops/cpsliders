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
 * Wfdownloads module
 *
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package         wfdownload
 * @since           3.23
 * @author          Xoops Development Team
 */
$moduleDirName      = \basename(\dirname(\dirname(__DIR__)));
$moduleDirNameUpper = \mb_strtoupper($moduleDirName);

\define('CO_' . $moduleDirNameUpper . '_GDLIBSTATUS', 'Prise en charge de la bibliothèque GD: ');
\define('CO_' . $moduleDirNameUpper . '_GDLIBVERSION', 'Version de la bibliothèque GD: ');
\define('CO_' . $moduleDirNameUpper . '_GDOFF', "<span style='font-weight: bold;'>Désactivé</span> (Aucune miniature disponible)");
\define('CO_' . $moduleDirNameUpper . '_GDON', "<span style='font-weight: bold;'>Activé</span> (Miniatures disponibles)");
\define('CO_' . $moduleDirNameUpper . '_IMAGEINFO', 'État du serveur');
\define('CO_' . $moduleDirNameUpper . '_MAXPOSTSIZE', 'Taille de publication maximale autorisée (directive post_max_size dans php.ini): ');
\define('CO_' . $moduleDirNameUpper . '_MAXUPLOADSIZE', 'Taille de téléchargement maximale autorisée (directive upload_max_filesize dans php.ini): ');
\define('CO_' . $moduleDirNameUpper . '_MEMORYLIMIT', 'Limite de mémoire (directive memory_limit dans php.ini): ');
\define('CO_' . $moduleDirNameUpper . '_METAVERSION', "<span style='font-weight: bold;'>Downloads meta version:</span> ");
\define('CO_' . $moduleDirNameUpper . '_OFF', "<span style='font-weight: bold;'>OFF</span>");
\define('CO_' . $moduleDirNameUpper . '_ON', "<span style='font-weight: bold;'>ON</span>");
\define('CO_' . $moduleDirNameUpper . '_SERVERPATH', 'Chemin du serveur vers la racine XOOPS: ');
\define('CO_' . $moduleDirNameUpper . '_SERVERUPLOADSTATUS', 'État des téléchargements du serveur: ');
\define('CO_' . $moduleDirNameUpper . '_SPHPINI', "<span style='font-weight: bold;'>Informations extraites du fichier ini de PHP:</span>");
\define('CO_' . $moduleDirNameUpper . '_UPLOADPATHDSC', 'Le chemin de téléchargement *DOIT* contenir le chemin complet du serveur de votre dossier de téléchargement.');

\define('CO_' . $moduleDirNameUpper . '_PRINT', "<span style='font-weight: bold;'>Imprimer</span>");
\define('CO_' . $moduleDirNameUpper . '_PDF', "<span style='font-weight: bold;'>Créer un PDF</span>");

\define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED0', "Échec de la mise à jour - impossible de renommer le champ '%s'");
\define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED1', "Échec de la mise à jour - impossible d'ajouter de nouveaux champs");
\define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED2', "Échec de la mise à jour - impossible de renommer la table '%s'");
\define('CO_' . $moduleDirNameUpper . '_ERROR_COLUMN', 'Impossible de créer la colonne dans la base de données : %s');
\define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_XOOPS', 'Ce module nécessite XOOPS %s+ (%s installé)');
\define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_PHP', 'Ce module nécessite la version PHP %s+ (%s installé)');
\define('CO_' . $moduleDirNameUpper . '_ERROR_TAG_REMOVAL', 'Impossible de supprimer les balises du module de balises');

\define('CO_' . $moduleDirNameUpper . '_FOLDERS_DELETED_OK', 'Les dossiers de téléchargement ont été supprimés');

// Error Msgs
\define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_DEL_PATH', 'Impossible de supprimer le répertoire %s');
\define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_REMOVE', 'Impossible de supprimer %s');
\define('CO_' . $moduleDirNameUpper . '_ERROR_NO_PLUGIN', 'Impossible de charger le plug-in');

//Help
\define('CO_' . $moduleDirNameUpper . '_DIRNAME', \basename(\dirname(\dirname(__DIR__))));
\define('CO_' . $moduleDirNameUpper . '_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('CO_' . $moduleDirNameUpper . '_BACK_2_ADMIN', 'Retour à l\'administration de ');
\define('CO_' . $moduleDirNameUpper . '_OVERVIEW', 'Aperçu');

//\define('CO_' . $moduleDirNameUpper . '_HELP_DIR', __DIR__);

//help multi-page
\define('CO_' . $moduleDirNameUpper . '_DISCLAIMER', 'Avertissement');
\define('CO_' . $moduleDirNameUpper . '_LICENSE', 'Licence');
\define('CO_' . $moduleDirNameUpper . '_SUPPORT', 'Support');

//Sample Data
\define('CO_' . $moduleDirNameUpper . '_' . 'ADD_SAMPLEDATA', 'Importer des exemples de données (supprimera TOUTES les données actuelles)');
\define('CO_' . $moduleDirNameUpper . '_' . 'SAMPLEDATA_SUCCESS', 'Exemple de données importé avec succès');
\define('CO_' . $moduleDirNameUpper . '_' . 'SAVE_SAMPLEDATA', 'Exporter les tableaux vers YAML');
\define('CO_' . $moduleDirNameUpper . '_' . 'SAVE_SAMPLEDATA_SUCCESS', 'Exporter les tableaux vers YAML avec succès');
\define('CO_' . $moduleDirNameUpper . '_' . 'SAVE_SAMPLEDATA_ERROR', "ERREUR : Échec de l'exportation des tables vers YAML");
\define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON', 'Afficher le bouton de données de test ?');
\define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON_DESC', 'Si oui, le bouton "Importer des exemples de données" sera visible par l\'administrateur. C\'est oui par défaut pour la première installation.');
\define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA', 'Exporter le schéma de base de données vers YAML');
\define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA_SUCCESS', 'Exporter le schéma de base de données vers YAML a été un succès');
\define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA_ERROR', 'ERREUR : Échec de l\'exportation du schéma de base de données vers YAML');
\define('CO_' . $moduleDirNameUpper . '_' . 'ADD_SAMPLEDATA_OK', 'Êtes-vous sûr d\'importer des exemples de données ? (Cela supprimera TOUTES les données actuelles)');
\define('CO_' . $moduleDirNameUpper . '_' . 'HIDE_SAMPLEDATA_BUTTONS', 'Masquer les boutons d\'import');
\define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLEDATA_BUTTONS', 'Afficher les boutons d\'import');
\define('CO_' . $moduleDirNameUpper . '_' . 'CONFIRM', 'Confirmer');

//letter choice
\define('CO_' . $moduleDirNameUpper . '_' . 'BROWSETOTOPIC', "<span style='font-weight: bold;'>Parcourir les éléments par ordre alphabétique</span>");
\define('CO_' . $moduleDirNameUpper . '_' . 'OTHER', 'Autre');
\define('CO_' . $moduleDirNameUpper . '_' . 'ALL', 'Tout');

// block defines
\define('CO_' . $moduleDirNameUpper . '_' . 'ACCESSRIGHTS', 'Droits d\'accès');
\define('CO_' . $moduleDirNameUpper . '_' . 'ACTION', 'Action');
\define('CO_' . $moduleDirNameUpper . '_' . 'ACTIVERIGHTS', 'Droits actifs');
\define('CO_' . $moduleDirNameUpper . '_' . 'BADMIN', 'Block d\'administration');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLKDESC', 'Description');
\define('CO_' . $moduleDirNameUpper . '_' . 'CBCENTER', 'Centre Milieu');
\define('CO_' . $moduleDirNameUpper . '_' . 'CBLEFT', 'Centre gauche');
\define('CO_' . $moduleDirNameUpper . '_' . 'CBRIGHT', 'Centre droit');
\define('CO_' . $moduleDirNameUpper . '_' . 'SBLEFT', 'Gauche');
\define('CO_' . $moduleDirNameUpper . '_' . 'SBRIGHT', 'Droit');
\define('CO_' . $moduleDirNameUpper . '_' . 'SIDE', 'Alignement');
\define('CO_' . $moduleDirNameUpper . '_' . 'TITLE', 'Titre');
\define('CO_' . $moduleDirNameUpper . '_' . 'VISIBLE', 'Visible');
\define('CO_' . $moduleDirNameUpper . '_' . 'VISIBLEIN', 'Visible dans');
\define('CO_' . $moduleDirNameUpper . '_' . 'WEIGHT', 'Poids');

\define('CO_' . $moduleDirNameUpper . '_' . 'PERMISSIONS', 'Permissions');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS', 'Admin blocks');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_DESC', 'Blocks/Group Admin');

\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_MANAGMENT', 'Gérer');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_ADDBLOCK', 'Ajouter un nouveau bloc');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_EDITBLOCK', 'Modifier un bloc');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_CLONEBLOCK', 'Cloner un bloc');

//myblocksadmin
\define('CO_' . $moduleDirNameUpper . '_' . 'AGDS', 'Groupes d\'administrateurs');
\define('CO_' . $moduleDirNameUpper . '_' . 'BCACHETIME', 'Temps de cache');
\define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_ADMIN', 'Admin blocks');

//Template Admin
\define('CO_' . $moduleDirNameUpper . '_' . 'TPLSETS', 'Gestion des modèles');
\define('CO_' . $moduleDirNameUpper . '_' . 'GENERATE', 'Générer');
\define('CO_' . $moduleDirNameUpper . '_' . 'FILENAME', 'Nom de fichier');

//Menu
\define('CO_' . $moduleDirNameUpper . '_' . 'ADMENU_MIGRATE', 'Migrer');
\define('CO_' . $moduleDirNameUpper . '_' . 'FOLDER_YES', 'Le dossier "%s" existe');
\define('CO_' . $moduleDirNameUpper . '_' . 'FOLDER_NO', 'Le dossier "%s" n\'existe pas. Créez le dossier spécifié avec CHMOD 777.');
\define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_DEV_TOOLS', 'Afficher le bouton Outils de développement?');
\define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_DEV_TOOLS_DESC', 'Si oui, l\'onglet "Migrer" et les autres outils de développement seront visibles par l\'administrateur.');
\define('CO_' . $moduleDirNameUpper . '_' . 'ADMENU_FEEDBACK', 'Feedback');

//Latest Version Check
\define('CO_' . $moduleDirNameUpper . '_' . 'NEW_VERSION', 'Nouvelle Version: ');

//DirectoryChecker
\define('CO_' . $moduleDirNameUpper . '_' . 'AVAILABLE', "<span style='color: green;'>Disponible</span>");
\define('CO_' . $moduleDirNameUpper . '_' . 'NOTAVAILABLE', "<span style='color: red;'>Indisponible</span>");
\define('CO_' . $moduleDirNameUpper . '_' . 'NOTWRITABLE', "<span style='color: red;'>Devrait avoir l'autorisation ( %d ), mais il a ( %d )</span>");
\define('CO_' . $moduleDirNameUpper . '_' . 'CREATETHEDIR', 'Créer');
\define('CO_' . $moduleDirNameUpper . '_' . 'SETMPERM', 'Définir l\'autorisation');
\define('CO_' . $moduleDirNameUpper . '_' . 'DIRCREATED', 'Le répertoire a été créé');
\define('CO_' . $moduleDirNameUpper . '_' . 'DIRNOTCREATED', 'Le répertoire ne peut pas être créé');
\define('CO_' . $moduleDirNameUpper . '_' . 'PERMSET', 'L\'autorisation a été définie');
\define('CO_' . $moduleDirNameUpper . '_' . 'PERMNOTSET', 'L\'autorisation ne peut pas être définie');

//FileChecker
//\define('CO_' . $moduleDirNameUpper . '_' . 'AVAILABLE', "<span style='color: green;'>Available</span>");
//\define('CO_' . $moduleDirNameUpper . '_' . 'NOTAVAILABLE', "<span style='color: red;'>Not available</span>");
//\define('CO_' . $moduleDirNameUpper . '_' . 'NOTWRITABLE', "<span style='color: red;'>Should have permission ( %d ), but it has ( %d )</span>");
//\define('CO_' . $moduleDirNameUpper . '_' . 'COPYTHEFILE', 'Copy it');
//\define('CO_' . $moduleDirNameUpper . '_' . 'CREATETHEFILE', 'Create it');
//\define('CO_' . $moduleDirNameUpper . '_' . 'SETMPERM', 'Set the permission');

\define('CO_' . $moduleDirNameUpper . '_' . 'FILECOPIED', 'Le fichier a été copié');
\define('CO_' . $moduleDirNameUpper . '_' . 'FILENOTCOPIED', 'Le fichier ne peut pas être copié');

//\define('CO_' . $moduleDirNameUpper . '_' . 'PERMSET', 'The permission has been set');
//\define('CO_' . $moduleDirNameUpper . '_' . 'PERMNOTSET', 'The permission cannot be set');

//image config
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_WIDTH', 'Largeur d\'affichage de l\'image');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_WIDTH_DSC', 'Largeur d\'affichage pour l\'image');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_HEIGHT', 'Hauteur d\'affichage de l\'image');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_HEIGHT_DSC', 'Hauteur d\'affichage pour l\'image');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_CONFIG', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- Configuration de l\'image EXTERNE ---</span> ');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_CONFIG_DSC', '');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_UPLOAD_PATH', 'Chemin de téléchargement d\'image');
\define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_UPLOAD_PATH_DSC', 'Chemin de téléchargement des images');

//Preferences
\define('CO_' . $moduleDirNameUpper . '_' . 'TRUNCATE_LENGTH', 'Nombre de caractères à tronquer dans le champ de texte long');
\define('CO_' . $moduleDirNameUpper . '_' . 'TRUNCATE_LENGTH_DESC', 'Définir le nombre maximum de caractères pour tronquer les champs de texte longs');

//Module Stats
\define('CO_' . $moduleDirNameUpper . '_' . 'STATS_SUMMARY', 'Statistiques du module');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_CATEGORIES', 'Catégories:');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_ITEMS', 'Eléments');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_OFFLINE', 'Hors ligne');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_PUBLISHED', 'Publié');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_REJECTED', 'Rejeté');
\define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_SUBMITTED', 'Soumis');
