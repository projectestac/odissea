<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'block_use_stats', language 'fr', branch 'MOODLE_26_STABLE'
 *
 * @package   block_use_stats
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blockname'] = 'Mesure d\'activité';
$string['configcapturemodules'] = 'Liste des modules de capture';
$string['configcapturemodules_desc'] = 'Modules qui sont pris en compte dans l\'analyse de détail';
$string['configcustomtagselect'] = 'Sélectionnez une balise personnalisée';
$string['configcustomtagselect_desc'] = 'Cette requête doit retourner un résultat unique par ligne du journal. Ce résultat va nourrir la colonne balise personnalisée {$ a }.';
$string['configenablecompilecube_desc'] = 'Lorsqu\'elles sont activées, les dimensions supplémentaires sont calculées en utilisant les sélections définies';
$string['configenablecompilelogs_desc'] = 'Lorsqu\'elle est activée , la mesure d\'activité compile les journaux et les lacunes dans le cron';
$string['configfromwhen'] = 'Depuis';
$string['configfromwhen_desc'] = 'Période de compilation (en jours jusqu\'à aujourd\'hui)';
$string['configignoremodules'] = 'Ignorer la liste des modules';
$string['configignoremodules_desc'] = 'Ignorer le temps consacré à ces modules';
$string['configlastcompiled'] = 'Date du dernier enregistrement compilé';
$string['configlastcompiled_desc'] = 'En changeant cette date, le cron recalculera tous les journaux postérieurs à la date indiquée';
$string['configlastpingcredit'] = 'Crédit-temps supplémentaire sur le dernier ping';
$string['configlastpingcredit_desc'] = 'Ce laps de temps (en minutes) sera systématiquement ajouté au journal de suivi pour chaque fermeture de session ou discontinuité supposée';
$string['configstudentscanuse_desc'] = 'Les étudiants peuvent voir le bloc (pour eux-mêmes)';
$string['configstudentscanuseglobal_desc'] = 'Permettre aux étudiants de voir le bloc Mesure d\'activité dans les espaces globaux (MonMoodle , hors du cours, pour eux-mêmes)';
$string['configthreshold'] = 'Seuil';
$string['configthreshold_desc'] = 'Seuil de continuité d\'activité (en minutes) . Au-dessus de ce temps de pause entre deux marques successives dans le journal, l\'utilisateur est considéré comme déconnecté. Un temps arbitraire "Dernier Crédit de Ping" sera ajouté au compteur temps .';
$string['credittime'] = 'Crédit temps';
$string['dimensionitem'] = 'Classes observables';
$string['errornorecords'] = 'Aucune information de suivi';
$string['errornotinitialized'] = 'Le module n\'est pas initialisé. Veuillez contacter un administrateur.';
$string['eventscount'] = 'Affichages';
$string['from'] = 'Depuis';
$string['ignored'] = 'Module/Activité ignoré(e) par le suivi';
$string['lastcompiled'] = 'Dernier enregistrement du journal compilé';
$string['modulename'] = 'Suivi d\'activité';
$string['noavailablelogs'] = 'Pas d\'enregistrement disponible';
$string['onthisMoodlefrom'] = 'sur ce site Moodle depuis';
$string['pluginname'] = 'Mesure d\'activité';
$string['showdetails'] = 'Montrer les détails';
$string['timeelapsed'] = 'Temps écoulé';
$string['use_stats:addinstance'] = 'Permettre l\'ajout d\'une instance';
$string['use_stats_description'] = 'En publiant ce service, vous permettez à des serveurs distants d\'accéder à la lecture des statistiques des utilisateurs locaux. <br/> En souscrivant à ce service , vous permettez à votre serveur local d\'interroger un serveur distant sur les statistiques de ses membres. <br/>';
$string['use_stats:myaddinstance'] = 'Permettre l\'ajout d\'une instance de Ma Page';
$string['use_stats_name'] = 'Accès à distance aux statistiques';
$string['use_stats_rpc_service'] = 'Accès à distance aux statistiques';
$string['use_stats_rpc_service_name'] = 'Accès à distance aux statistiques';
$string['use_stats:seecoursedetails'] = 'Permettre la visualisation des détails de tous les utilisateurs depuis leur cours';
$string['use_stats:seegroupdetails'] = 'Permettre la visualisation des détails de tous les utilisateurs depuis leur groupes';
$string['use_stats:seeowndetails'] = 'Permettre la visualisation de ses propres détails';
$string['use_stats:seesitedetails'] = 'Permettre la visualisation des détails de tous les utilisateurs';
$string['use_stats:view'] = 'Permettre la visualisation de l\'activité';
$string['youspent'] = 'Vous avez déjà passé';
