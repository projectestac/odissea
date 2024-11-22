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
 * Strings for component 'geogebra', language 'fr', version '4.1'.
 *
 * @package     geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclosed'] = 'Cette activité est fermée';
$string['activitynotopened'] = 'Cette activité n’est pas envore disponible';
$string['attempt'] = 'Tentative';
$string['attempts'] = 'Tentatives';
$string['attemptsremaining'] = 'Nombre de tentatives restantes pour cette activité :';
$string['autograde'] = 'Activité auto-évaluée';
$string['availabledate'] = 'Disponible à partir de';
$string['average'] = 'Moyenne';
$string['choosescripttype'] = 'Choisissez le type de script';
$string['comment'] = 'Commentaire';
$string['contentheader'] = 'Contenu';
$string['coursewithoutstudents'] = 'Cours sans étudiant';
$string['datestudent'] = 'Dernière modification (envoi)';
$string['dateteacher'] = 'Dernière modification (note)';
$string['deleteallattempts'] = 'Supprimer toutes les tentatives';
$string['description'] = 'Description';
$string['discardchanges'] = 'Annuler les modifications et revenir';
$string['duedate'] = 'Date de fin';
$string['duration'] = 'Durée';
$string['enableLabelDrags'] = 'Activer le déplacement des étiquettes';
$string['enableRightClick'] = 'Activer le clic droit';
$string['errorattempt'] = 'Erreur : votre tentative n’a pas pu être enregistrée.';
$string['event_course_module_viewed'] = 'Module du cours vu';
$string['event_instances_list_viewed'] = 'Liste des instances vues';
$string['expired'] = 'Désolé, cette activité à été fermée le {$a} et n’est plus disponible';
$string['extractedfromggb'] = 'Fichiers extrait du ggb';
$string['filename'] = 'Nom du fichier';
$string['filenotfound'] = 'Le fichier spécifié n’existe pas';
$string['filetype'] = 'Type';
$string['filetype_help'] = 'Ce paramètre définit la manière dont l’activité GeoGebra est insérée dans le cours. Il y a deux possibilités :

* Fichier local - Utiliser un fichier « .ggb » valide avec le sélecteur de fichiers.
* URL externe - Utiliser une adresse URL spécifiée. L’adresse doit commencer par http(s) ou www et contenir un fichier « .ggb » valide.';
$string['filetypeexternal'] = 'URL externe';
$string['filetypelocal'] = 'Fichier local';
$string['firstattempt'] = 'Première tentative';
$string['for'] = 'pour';
$string['functionalityoptionsgrp'] = 'Fonctionnalité';
$string['geogebra:addinstance'] = 'Ajouter GeoGebra';
$string['geogebra:grade'] = 'Évaluer GeoGebra';
$string['geogebra:submit'] = 'Envoyer GeoGebra';
$string['geogebra:view'] = 'Voir GeoGebra';
$string['geogebrafile'] = 'Fichier GeoGebra';
$string['geogebrafile_help'] = 'Le fichier .ggb.';
$string['geogebraurl'] = 'URL';
$string['geogebraurl_help'] = 'Ce paramètre nécessite une adresse URL d’un fichier Géogébra plutôt que d’utiliser un fichier issu du sélecteur de fichiers.';
$string['grade'] = 'Évaluation';
$string['gradeit'] = 'Évaluer';
$string['grademethod'] = 'Méthode d’évaluation';
$string['header_geogebra'] = 'Paramètres de Geogebra';
$string['height'] = 'Hauteur';
$string['highestattempt'] = 'Tentative la plus haute';
$string['httpnotallowed'] = 'Il n’est pas possible pour l’instant d’utiliser des fichiers externes';
$string['interfaceoptionsgrp'] = 'Interface utilisateur';
$string['invalidgeogebrafile'] = 'Fichier non valide. Il doit avoir l’extension « .ggb ».';
$string['invalidurl'] = 'URL non valide. L’adresse doit commencer par http(s) ou www et contenir un fichier « .ggb » valide.';
$string['language'] = 'Langage';
$string['lastattempt'] = 'Dernière tentative';
$string['lastattemptremaining'] = 'Ceci est votre dernière tentative pour cette activité';
$string['lastmodifiedgrade'] = 'Dernière modification (évaluation)';
$string['lastmodifiedsubmission'] = 'Dernière modification (envoi)';
$string['lowestattempt'] = 'Tentative la plus basse';
$string['manualgrade'] = 'Évaluation manuelle';
$string['maxattempts'] = 'Nombre maximum de tentatives';
$string['modulename'] = 'GeoGebra';
$string['modulename_help'] = '<p><a href="http://www.geogebra.org" target="_blank">GeoGebra</a> est un logiciel libre et multi-plateforme de mathématiques dynamique pour tous les niveaux d’éducation qui relie géometrie, algèbre, tableur, graphique, statistiques et calcule dans un seul paquet facile à utiliser.</p>
<p>Par conséquent, Le <a href="http://www.gencat.cat/ensenyament/" target="_blank">Département d’Education de Catalogne</a> en association avec <a href="http://acgeogebra.cat/" target="_blank">l’Association Catalane de GeoGebra</a> (ACG) et l’équipe de développement de GeoGeobra ont créé ce module qui permet l’ajout d’activités Geogebra dans Moodle. Les fonctionnalités principales sont :
<ul>
<li>Intégration facile d’activités Geogebra dans des cours Moodle.</li>
<li>Facilite le suivi des étudiants grâce à la sauvegardes des scores, dates, durée et construction de chaque tentative de l’utilisateur.</li>
<li>Les étudiants peuvent sauvegarder l’état de l’activité pour reprendre plus tard.</li>
</ul>
</p>';
$string['modulenameplural'] = 'GeoGebra';
$string['msg_noattempts'] = 'Vous avez utilisé toutes les tentatives autorisées';
$string['msg_nosessions'] = 'Il n’y a aucune session pour cette activité Géogebra';
$string['name'] = 'Nom';
$string['noattempts'] = '-';
$string['nograding'] = 'Pas d’évaluation';
$string['nomoreattempts'] = 'Plus de tentative possible pour cette activité';
$string['notopenyet'] = 'Désolé, cette activité n’est pas disponible avant le {$a}';
$string['pluginadministration'] = 'Administration de GeoGebra';
$string['pluginname'] = 'GeoGebra';
$string['preview_geogebra'] = 'Prévisualiser l’activité Géogebra';
$string['previewtab'] = 'Aperçu';
$string['redirecttocourse'] = 'L’activité a été enregistrée. Retour à la page du cours';
$string['report'] = 'Rapport de';
$string['results'] = 'Résultats';
$string['resultstab'] = 'Résultats';
$string['resumeattempt'] = 'Revenir à la tentative non terminée';
$string['review'] = 'Révision pour';
$string['reviewtab'] = 'Relire';
$string['savechanges'] = 'Enregistrer les modifications';
$string['savewithoutsubmitting'] = 'Enregistrer sans envoyer';
$string['settings'] = 'Paramètres';
$string['showAlgebraInput'] = 'Afficher la barre d’insertion';
$string['showMenuBar'] = 'Afficher la barre de menu';
$string['showResetIcon'] = 'Afficher l’icone de remise à zéro';
$string['showToolBar'] = 'Afficher la barre d’outils';
$string['showToolBarHelp'] = 'Afficher l’aide de la barre d’outils';
$string['showsubmit'] = 'Afficher le bouton Envoyer';
$string['status'] = 'État';
$string['submitandfinish'] = 'Envoyer et terminer';
$string['timing'] = 'Disponibilité';
$string['total'] = 'Total';
$string['unfinished'] = 'Non terminé';
$string['ungraded'] = 'Non noté';
$string['unlimitedattempts'] = 'Nombre de tentatives illimitées pour cette activité';
$string['urledit'] = 'Fichier GeoGebra';
$string['urledit_help'] = 'Le fichier « .ggb » où vous trouverez l’activité GeoGebra.';
$string['useBrowserForJS'] = 'Utiliser Javascript depuis :';
$string['useBrowserForJS_geogebra'] = 'Fichier GeoGebra (faux)';
$string['useBrowserForJS_html'] = 'HTML (vrai)';
$string['view'] = 'Voir';
$string['viewattempt'] = 'Voir';
$string['viewattempts'] = 'Voir les tentatives';
$string['viewattempttab'] = 'Voir la tentative';
$string['viewtab'] = 'Voir';
$string['weight'] = 'Poids';
$string['width'] = 'Largeur';
