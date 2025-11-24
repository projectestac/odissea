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
 * Strings for component 'search', language 'fr', version '4.5'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Recherche avancée';
$string['all'] = 'Tout';
$string['allareas'] = 'Toutes les zones';
$string['allcourses'] = 'Tous les cours';
$string['allusers'] = 'Tous les utilisateurs';
$string['author'] = 'Auteur';
$string['authorname'] = 'Nom d’auteur';
$string['back'] = 'Retour';
$string['beadmin'] = 'Vous devez être administrateur pour utiliser cette page.';
$string['checkdb'] = 'Vérifier la base de données';
$string['checkdbadvice'] = 'Contrôle si votre base de données comporte des problèmes.';
$string['checkdir'] = 'Vérifier le dossier';
$string['checkdiradvice'] = 'Vérifie que le dossier de données existe et qu’il peut être modifié.';
$string['commenton'] = 'Commenté le';
$string['confirm_delete'] = 'Voulez-vous vraiment supprimer l’index pour {$a} ? Tant que la zone de recherche n’est pas indexée, les utilisateurs n’obtiendront pas de résultat de recherche dans cette zone.';
$string['confirm_deleteall'] = 'Voulez-vous vraiment supprimer tous les index maintenant ? Tant que le site n’est pas indexé à nouveau, les utilisateurs n’obtiendront aucun résultat de recherche.';
$string['confirm_indexall'] = 'Voulez-vous vraiment mettre à jour les index maintenant ? Si une grande quantité de contenus nécessite une indexation, ceci peut prendre un temps considérable. Pour les serveurs en production, il est plus judicieux de laisser faire l’indexation au moyen de la tâche programmée « Indexation pour recherche globale ».';
$string['confirm_reindexall'] = 'Voulez-vous vraiment reconstruire l’index de tous les contenus du site maintenant ? Si votre site contient une grande quantité de contenus, ceci peut prendre un temps considérable, et les utilisateurs n’obtiendront pas des résultats complets avant la fin de l’indexation.';
$string['content:courserole'] = '{$a->role} dans {$a->course}';
$string['core-all'] = 'Tout';
$string['core-course-content'] = 'Contenu de cours';
$string['core-courses'] = 'Cours';
$string['core-other'] = 'Autre';
$string['core-users'] = 'Utilisateurs';
$string['createanindex'] = 'créer un index';
$string['createdon'] = 'Créé le';
$string['database'] = 'Base de données';
$string['databasestate'] = 'État d’indexation de la base de données';
$string['datadirectory'] = 'Dossier de données';
$string['deleteindex'] = 'Supprimer l’index {$a}';
$string['deletionsinindex'] = 'Suppressions dans l’index';
$string['docmodifiedon'] = 'Dernière modification le {$a}';
$string['doctype'] = 'Doctype';
$string['doctypenotsupported'] = 'Ce type de document n’est pas encore pris en charge';
$string['documents'] = 'documents';
$string['documentsfor'] = 'Documents de';
$string['documentsindatabase'] = 'Documents dans la base de données';
$string['documentsinindex'] = 'Documents dans l’index';
$string['duration'] = 'Durée';
$string['emptydatabaseerror'] = 'La table n’est pas dans la base de données ou ne contient aucun enregistrement d’index.';
$string['enginenotfound'] = 'Moteur {$a} non trouvé.';
$string['enginenotinstalled'] = 'Moteur {$a} pas installé.';
$string['enginenotselected'] = 'Vous n’avez sélectionné aucun moteur de recherche.';
$string['engineserverstatus'] = 'Le moteur de recherche n’est pas disponible. Veuillez contacter l’administrateur de la plateforme.';
$string['enteryoursearchquery'] = 'Taper votre requête';
$string['error_indexing'] = 'Une erreur est survenue lors de l’indexation';
$string['errorareanotavailable'] = 'La zone de recherche {$a} n’est pas disponible';
$string['errors'] = 'Erreurs';
$string['everywhere'] = 'Partout où vous avez accès';
$string['filesinindexdirectory'] = 'Fichier dans le répertoire d’index';
$string['filterheader'] = 'Filtre';
$string['fromtime'] = 'Modifié après';
$string['globalsearch'] = 'Recherche globale';
$string['globalsearchdisabled'] = 'La recherche globale n’est pas activée.';
$string['gradualreindex'] = 'Ré-indexer {$a} progressivement';
$string['gradualreindex_confirm'] = 'Voulez-vous vraiment ré-indexer {$a} ? Cette opération prendra un certain temps, durant lequel les données existantes resteront cependant disponibles.';
$string['gradualreindex_queued'] = 'Une ré-indexation a été demandée pour {$a->name} ({$a->count} contextes). L’indexation sera effectuée par la tâche programmée « Indexation de recherche globale ».';
$string['incourse'] = 'dans le cours {$a}';
$string['index'] = 'Index';
$string['indexwhendisabledfullnotice'] = 'L’indexation n’est actuellement pas autorisée lorsque la recherche est désactivée. Pour l’activer, veuillez consulter le réglage <a href="{$a->url}">searchindexwhendisabled</a>';
$string['indexwhendisabledshortnotice'] = 'L’indexation n’est pas disponible.';
$string['invalidindexerror'] = 'Le répertoire d’index contient un index non valide ou rien du tout.';
$string['ittook'] = 'Il a fallu';
$string['matchingfile'] = 'Trouvé dans le fichier <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Trouvé dans les fichiers :';
$string['mycoursesonly'] = 'Mes cours seulement';
$string['next'] = 'Suite';
$string['noindexmessage'] = 'Administrateur : il semble qu’il n’y a pas d’index de recherche. Merci de';
$string['noresults'] = 'Pas de résultat';
$string['normalsearch'] = 'Recherche normale';
$string['notitle'] = 'Sans titre';
$string['openedon'] = 'ouvert le';
$string['optimize'] = 'Optimiser';
$string['order'] = 'Ordre des résultats';
$string['order_location'] = 'Prioriser les résultats en lien avec {$a}';
$string['order_relevance'] = 'Résultats les plus pertinents en premier';
$string['performsearch'] = 'Lancer la recherche';
$string['priority'] = 'Priorité';
$string['priority_normal'] = 'Normale';
$string['priority_reindexing'] = 'Ré-indexation en cours';
$string['privacy:metadata'] = 'Le sous-système de recherche n’enregistre aucune donnée personnelle.';
$string['progress'] = 'Progression';
$string['queryerror'] = 'La demande fournie n’a pas pu être analysée par le moteur de recherche : {$a}';
$string['queueheading'] = 'File d’indexations additionnelles ({$a} éléments)';
$string['resultsreturnedfor'] = 'résultats trouvés pour';
$string['runindexer'] = 'Lancer l’indexation (réelle)';
$string['runindexertest'] = 'Lancer un test d’indexation';
$string['schemanotupdated'] = 'Le schéma de recherche n’est plus à jour.';
$string['schemaversionunknown'] = 'Le moteur de recherche n’a pas d’information sur la version du schéma actuel.';
$string['score'] = 'Score';
$string['search'] = 'Recherche';
$string['search:course'] = 'Cours';
$string['search:course_teacher'] = 'Enseignant du cours';
$string['search:customfield'] = 'Champs personnalisés de cours';
$string['search:message_received'] = 'Messages – reçus';
$string['search:message_sent'] = 'Messages – envoyés';
$string['search:mycourse'] = 'Mes cours';
$string['search:section'] = 'Sections de cours';
$string['search:user'] = 'Utilisateurs';
$string['searcharea'] = 'Zone de recherche';
$string['searchareacategories'] = 'Catégories de zones de recherche';
$string['searching'] = 'Recherche dans…';
$string['searchnotpermitted'] = 'Vous n’avez pas les permissions requises pour effectuer une recherche';
$string['searchsetupdescription'] = 'Les étapes suivantes vous aideront à configurer la recherche globale de Moodle.';
$string['searchwithin'] = 'Rechercher';
$string['seconds'] = 'secondes';
$string['sitewidesearch'] = 'Recherche sur le site';
$string['solutions'] = 'Solutions';
$string['statistics'] = 'Statistiques';
$string['step'] = 'Étape';
$string['thesewordshelpimproverank'] = 'Ces termes amélioreront le rang';
$string['thesewordsmustappear'] = 'Ces termes doivent être présents';
$string['thesewordsmustnotappear'] = 'Ces termes ne doivent pas être présents';
$string['title'] = 'Titre';
$string['tofetchtheseresults'] = 'pour retrouver ces résultats';
$string['topresults'] = 'Meilleurs résultats';
$string['totalsize'] = 'Taille totale';
$string['totime'] = 'Modifié avant';
$string['type'] = 'Type';
$string['uncompleteindexingerror'] = 'L’indexation n’a pas pu être terminée correctement. Veuillez la recommencer.';
$string['versiontoolow'] = 'La recherche globale requiert PHP 5.0.0 ou une version ultérieure';
$string['viewresultincontext'] = 'Voir ce résultat dans son contexte';
$string['wordsintitle'] = 'Termes dans le titre';
