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
 * Strings for component 'jclic', language 'fr', version '3.11'.
 *
 * @package     jclic
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['activity'] = 'Activité';
$string['activitydone'] = 'Activités achevées';
$string['activitysolved'] = 'Activités achevées avec succès';
$string['attempts'] = 'Tentatives';
$string['availabledate'] = 'Disponible à partir de';
$string['avaluation'] = 'Critère d\'évaluation';
$string['closebeforeopen'] = 'Impossible de mettre à jour JClic. Vous avez indiqué une date d\'échéance avant la date de disponibilité.';
$string['contentheader'] = 'Contenu';
$string['deleteallsessions'] = 'Supprimer toutes les sessions';
$string['description'] = 'Description';
$string['duedate'] = 'Date d\'échéance';
$string['event_course_module_viewed'] = 'Module de cours visités';
$string['event_instances_list_viewed'] = 'Liste d\'instances visitées';
$string['exiturl'] = 'URL de fin';
$string['exiturl_help'] = 'Ceci est l\'URL qui apparaît lorsque les élèves terminent la dernière activité JClic.

Pour activer cette redirection, il suffit d\'associer la dernière activité, dans l\'onglet Séquences, à l\'action "Exit JClic" dans la section Forward arrow.';
$string['expired'] = 'Désolé, cette activité est terminée depuis {$a} et n\'est plus disponible';
$string['filetype'] = 'Type';
$string['filetype_help'] = 'Ce paramètre détermine comment l\'activité JClic est inclus dans le cours. Il y a jusqu\'à 2 options:

* Fichier JClic externe - Une archive valide  de type ".jclic.zip" peut être choisi à travers le sélecteur de fichiers.
* URL externe - Une URL à préciser. Remarque : l\'URL doit commencer par "http(s)" ou www et contenir une archive ".jclic.zip" valide.';
$string['filetypeexternal'] = 'URL externe';
$string['filetypelocal'] = 'Fichier JClic externe';
$string['height'] = 'Hauteur';
$string['invalidjclicfile'] = 'Fichier JClic invalide. L\'extension ".jclic.zip" est requise.';
$string['invalidurl'] = 'URL invalide. Elle doit commencer par "http(s)" et pointer vers une archive ".jclic.zip" valide.';
$string['jclic'] = 'JClic';
$string['jclic:addinstance'] = 'Ajouter une instance';
$string['jclic:grade'] = 'Noter le JClic';
$string['jclic:submit'] = 'Soumettre le JClic';
$string['jclic:view'] = 'Voir le JClic';
$string['jclicfile'] = 'Fichier JClic';
$string['jclicfile_help'] = 'Le fichier archive ".jclic.zip" contenant le paquet JClic.';
$string['jclicjarbase'] = 'Base jar';
$string['jclicjarbase_help'] = 'L\'adresse web qui contient les fichiers jar de JClic';
$string['jclicurl'] = 'URL';
$string['jclicurl_help'] = 'Ce réglage permet de choisir le paquet JClic à travers une URL plutôt que par un fichier à téléverser.';
$string['lang'] = 'Langue';
$string['lap'] = 'Tour';
$string['lap_help'] = 'Le Temps entre deux transactions client-serveur (en secondes)';
$string['lastaccess'] = 'Dernière visite';
$string['maxattempts'] = 'Nombre d’essais maximum';
$string['maxgrade'] = 'Scores / activités qui doivent être validé';
$string['modulename'] = 'JClic';
$string['modulename_help'] = '<a href="http://clic.xtec.cat" target="_blank"> JClic </a> est un projet du ministère catalan de l\'éducation.
   Il se compose d\'un ensemble d\'applications logicielles open source qui permettent la création d\'activités pédagogiques multimédia: puzzles, jeux d\'association, activités de texte, mots croisés, jeux de mots cachés et plus.
   Par ailleurs, <a href="http://clic.xtec.cat/db/listact_ca.jsp" target="_blank">ClicZone</a> propose un référentiel où plus d\'un millier d\'activités sont affichées.
   Il a été créé par Des enseignants et des professionnels qui veulent partager leur travail avec les autres.

Ce module permet aux enseignants d\'ajouter des activités JClic à un cours et de suivre les résultats des élèves (temps passé sur chacune des activités, nombre d\'essais, score ...).';
$string['modulenameplural'] = 'JClics';
$string['msg_noattempts'] = 'Vous avez épuisé vos tentatives pour cette activité';
$string['msg_nosessions'] = 'Il n\'y a pas encore de session pour cette activité';
$string['notopenyet'] = 'Désolé, cette activité commencera à partir de {$a}';
$string['pluginadministration'] = 'Administration';
$string['pluginjs'] = 'URL des fichiers js du plugin';
$string['pluginjs_help'] = 'L\'URL contenant le fichier jclicplugin.js qui est nécessaire au bon fonctionnement du plugin. Si vide, le plugin utilisera celui du module.';
$string['pluginname'] = 'JClic';
$string['preview_jclic'] = 'Prévisualiser l\'activité';
$string['report_details'] = 'Résultats détaillés pour l\'ensemble des sessions';
$string['report_normal'] = 'Résumé des résultats';
$string['results'] = 'Résultats';
$string['return_results'] = 'Revenir aux résultats';
$string['score'] = 'Score';
$string['sessions'] = 'Sessions';
$string['show_my_results'] = 'Afficher mes résultats';
$string['size'] = 'Taille';
$string['skin'] = 'Skin';
$string['solved'] = 'Correct';
$string['solveddone'] = 'Activités résolues / achevées';
$string['starttime'] = 'Date de début';
$string['time'] = 'Temps';
$string['timing'] = 'Durée';
$string['totals'] = 'Totaux';
$string['totaltime'] = 'Temps total';
$string['unlimited'] = 'illimité';
$string['url'] = 'URL';
$string['urledit'] = 'Fichier d\'activité JClic';
$string['urledit_help'] = 'L\'archive "jclic.zip" qui contient le paquet de l\'activité JClic';
$string['width'] = 'Largeur';
