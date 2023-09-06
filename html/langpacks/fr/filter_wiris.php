<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'filter_wiris', language 'fr', version '4.1'.
 *
 * @package     filter_wiris
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessproviderenabled'] = 'Contrôle d\'accès';
$string['accessproviderenabled_help'] = 'Si cette option est activée, seuls les utilisateurs authentifiés peuvent accéder aux services MathType.';
$string['alloweditorpluginactive'] = 'Éditeur toujours actif';
$string['alloweditorpluginactive_help'] = 'L\'éditeur serait activé indépendamment du fait que le filtre MathType est désactivé au niveau du cours ou de l\'activité. Par défaut, si le filtre MathType est désactivé dans un cours/une activité, MathType est également désactivé dans le même cours/activité.';
$string['area'] = 'surface';
$string['arenotinstalled'] = 'ne sont pas installés.';
$string['atto'] = 'Atto';
$string['button1'] = 'Tests MathType';
$string['button2'] = 'Tests Wiris Quizzes';
$string['cachedef_formulas'] = 'Formules MathType';
$string['cachedef_images'] = 'Images MathType';
$string['clearcache'] = 'Vider le cache';
$string['clearcachedesc'] = 'Vider le cache du filtre MathType';
$string['clickwirisplugincorrectlyinstalled'] = 'Cliquer sur le bouton suivant pour vérifier si MathType est correctement installé.';
$string['clickwirisquizzescorrectlyinstalled'] = 'Cliquer sur le bouton suivant pour vérifier si Wiris Quizzes est correctement installé.';
$string['connectionsettings'] = 'Paramètres de connexion';
$string['contact'] = 'Pour plus d\'informations ou si vous avez un doute quelconque, contactez l\'assistance WIRIS :';
$string['disabled'] = 'Désactivé';
$string['editormodalwindow'] = 'Fenêtre modale activée';
$string['editormodalwindowfullscreen'] = 'Fenêtre modale en mode plein écran';
$string['editormodalwindowfullscreen_help'] = 'Spécifier si la fenêtre modale doit être ouverte en mode plein écran.';
$string['editornameexpected'] = 'Le nom de l\'éditeur est attendu';
$string['editorsettings'] = 'Paramètres de l\'éditeur';
$string['enabled'] = 'Activé';
$string['error'] = 'ERREUR';
$string['errordeletingcache'] = 'Erreur lors de la suppression du cache dans la zone {$a}';
$string['errorsavingcache'] = 'Erreur lors de la sauvegarde du cache dans la zone {$a}';
$string['filter_standalone'] = 'Filtre MathType uniquement';
$string['filter_standalonedesc'] = 'Vous pourrez afficher les formules existantes mais la création de nouvelles formules n\'est pas disponible. Il supprime également le message d\'avertissement.';
$string['filtermustbeinstalled'] = 'Le filtre doit être installé dans le dossier des filtres Moodle.';
$string['filtername'] = 'MathType par WIRIS';
$string['furtherinformation'] = 'Pour plus d\'informations, consultez notre page de documentation';
$string['havesameversion'] = 'Avoir la même version';
$string['imageformat'] = 'Format de l\'image';
$string['imageformat_help'] = 'Spécifier le format d\'image (svg ou png).';
$string['imageservicehost'] = 'Hôte de service';
$string['imageservicehost_help'] = 'Spécifier l\'hôte du serveur d\'images de formule.';
$string['imageservicepath'] = 'Chemin de service';
$string['imageservicepath_help'] = 'Spécifier le chemin du serveur d\'images de formule.';
$string['imageserviceport'] = 'Port de service';
$string['imageserviceport_help'] = 'Spécifier le port du serveur d\'images de formule.';
$string['imageserviceprotocol'] = 'Protocole de service';
$string['imageserviceprotocol_help'] = 'Spécifier le protocole du serveur d\'images de formule.';
$string['imagesettings'] = 'Paramètres d\'image';
$string['impossibletofindwirisfilterversion'] = 'Impossible de trouver le fichier de version du filtre MathType.';
$string['lookingforfilterfiles'] = 'Recherche de fichiers de filtre';
$string['lookingforwirisfilterversion'] = 'Recherche de la version du filtre MathType';
$string['lookingforwirisplugin'] = 'Recherche de MathType pour';
$string['lookingforwirispluginenabled'] = 'Recherche de MathType pour';
$string['mustbeinstalled'] = 'doit être installé.';
$string['noteditorspluginsinstalled'] = 'Il n\'y a pas de plugins d\'éditeurs installés';
$string['notsupportededitor'] = 'n\'est pas un éditeur supporté.';
$string['ok'] = 'OK';
$string['oldconfiguration'] = 'Un ancien fichier configuration.ini a été détecté sur {$a}. Veuillez le déplacer vers /filter/wiris/configuration.ini.';
$string['onlytextareaeditorinstalled'] = 'Il n\'y a qu\'un plugin d\'éditeurs textarea installé';
$string['or'] = 'ou';
$string['pluginname'] = 'MathType par WIRIS';
$string['pluginperformance'] = 'Mode de performance d\'image';
$string['pluginperformance_help'] = 'Spécifier si la réponse doit être un JSON au lieu d\'un binaire qui permet aux requêtes d\'être mises en cache. Activez les performances pour utiliser la réponse JSON.';
$string['rendertype'] = 'Type de rendu';
$string['rendertype_help'] = 'Spécifier comment rendre les formules. <br> - PHP : appeller le service de rendu Wiris depuis le module de filtrage. <br> - Client : toutes les requêtes aux serveurs Wiris sont faites depuis le navigateur.';
$string['securitysettings'] = 'Paramètres de sécurité';
$string['tinymce'] = 'TinyMCE';
$string['title'] = 'Page de test du filtre MathType';
$string['version'] = 'version';
$string['versionsdontmatch'] = 'les versions ne correspondent pas';
$string['windowsettings'] = 'Paramètres de la fenêtre';
$string['wirisbehaterroreditornotfound'] = 'Impossible de trouver MathType';
$string['wiriscas'] = 'Calculatrice';
$string['wirischemeditor'] = 'Éditeur de chimie';
$string['wirischemeditor_help'] = 'Afficher le bouton ChemType.';
$string['wirisfilterversion'] = 'Version du filtre MathType =';
$string['wirismatheditor'] = 'Éditeur de mathématiques';
$string['wirismatheditor_help'] = 'Afficher le bouton de l\'éditeur MathType.';
$string['wirispluginfilterfor'] = 'Filtre MathType et MathType pour';
$string['wirispluginfiltermustbeinstalled'] = 'Le filtre MathType doit être installé.';
$string['wirispluginfor'] = 'MathType pour';
$string['wirispluginforatto'] = 'MathType pour Atto';
$string['wirispluginfortinymce'] = 'MathType pour TinyMCE';
