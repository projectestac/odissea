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
 * Strings for component 'book', language 'fr', version '4.1'.
 *
 * @package     book
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Ajouter un nouveau chapitre';
$string['addafterchapter'] = 'Ajouter un chapitre après « {$a->title} »';
$string['book:addinstance'] = 'Ajouter un livre';
$string['book:edit'] = 'Modifier des chapitres';
$string['book:read'] = 'Consulter un livre';
$string['book:viewhiddenchapters'] = 'Consulter les chapitres cachés d’un livre';
$string['chapterandsubchaptersdeleted'] = 'Le chapitre « {$a->title} » et ses {$a->subchapters} sous-chapitres ont été supprimés';
$string['chapterdeleted'] = 'Le chapitre « {$a->title} » a été supprimé';
$string['chapters'] = 'Chapitres';
$string['chaptertitle'] = 'Titre du chapitre';
$string['confchapterdelete'] = 'Voulez-vous vraiment supprimer ce chapitre ?';
$string['confchapterdeleteall'] = 'Voulez-vous vraiment supprimer ce chapitre et tous ses sous-chapitres ?';
$string['content'] = 'Contenu';
$string['customtitles'] = 'Titres personnalisés';
$string['customtitles_help'] = 'Normalement, le titre du chapitre est affiché dans la table des matières et au-dessus du texte.

Si la case des titres personnalisés est cochée, le titre du chapitre n’est pas affiché au-dessus du texte. Un autre texte, éventuellement plus long que le titre du chapitre, pourra être indiqué pour s’afficher au-dessus du texte.';
$string['deletechapter'] = 'Supprimer le chapitre « {$a} »';
$string['editchapter'] = 'Modifier le chapitre « {$a} »';
$string['editingchapter'] = 'Modification du chapitre';
$string['errorchapter'] = 'Erreur lors de la lecture du chapitre';
$string['eventchaptercreated'] = 'Chapitre créé';
$string['eventchapterdeleted'] = 'Chapitre supprimé';
$string['eventchapterupdated'] = 'Chapitre modifié';
$string['eventchapterviewed'] = 'Chapitre consulté';
$string['hidechapter'] = 'Cacher le chapitre « {$a} »';
$string['indicator:cognitivedepth'] = 'Livre : aspect cognitif';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l’étudiant dans une ressource Livre.';
$string['indicator:cognitivedepthdef'] = 'Livre : aspect cognitif';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint durant cet intervalle d’analyse ce pourcentage d’engagement cognitif offert par les activités « Livre » (niveaux : pas de vue, vue).';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Livre : aspect social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur se base sur l’interaction sociale atteinte par l’étudiant dans une activité Livre.';
$string['indicator:socialbreadthdef'] = 'Livre : aspect social';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint durant cet intervalle d’analyse ce pourcentage d’engagement social offert par les activités « Livre » (niveaux : pas de participation, participant seul).';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['modulename'] = 'Livre';
$string['modulename_help'] = 'Le module livre permet à l’enseignant de créer une ressource composée de plusieurs pages, comme un livre, avec des chapitres et des sous-chapitres. Les livres peuvent contenir du texte ainsi que des fichiers médias et sont utiles pour afficher des contenus longs à couper en sections.

Un livre peut être utilisé par exemple pour :

* afficher du matériel à lire pour des modules à étudier individuellement
* mettre à disposition un mode d’emploi
* constituer un portfolio de travaux d’étudiants';
$string['modulename_link'] = 'mod/book/view';
$string['modulenameplural'] = 'Livres';
$string['movechapterdown'] = 'Déplacer vers le bas le chapitre « {$a} »';
$string['movechapterup'] = 'Déplacer vers le haut le chapitre « {$a} »';
$string['navexit'] = 'Sortir du livre';
$string['navimages'] = 'Images';
$string['navnext'] = 'Suivant';
$string['navnexttitle'] = 'Suivant : {$a}';
$string['navoptions'] = 'Options disponibles pour les liens de navigation';
$string['navoptions_desc'] = 'Options d’affichage de la navigation sur les pages d’un livre';
$string['navprev'] = 'Précédent';
$string['navprevtitle'] = 'Précédent : {$a}';
$string['navstyle'] = 'Style de navigation';
$string['navstyle_help'] = '* Images - Des icônes sont utilisées pour la navigation
* Texte - Les titres des chapitres sont utilisés pour la navigation';
$string['navtext'] = 'Texte';
$string['navtoc'] = 'Seulement table des matières';
$string['nocontent'] = 'Aucun contenu n’a encore été placé dans ce livre.';
$string['numbering'] = 'Format des titres de chapitres';
$string['numbering0'] = 'Aucun';
$string['numbering1'] = 'Nombres';
$string['numbering2'] = 'Puces';
$string['numbering3'] = 'Indentation';
$string['numbering_help'] = '* Aucun - Les titres des chapitres et sous-chapitres ne sont pas mis en forme
* Nombres - Les chapitres et sous-chapitres sont numérotés (1, 1.1, 1.2, 2…)
* Puces - Les sous-chapitres sont indentés et affichés au moyen de puces
* Indentations - les sous-chapitres sont indentés dans la table des matières';
$string['numberingoptions'] = 'Options disponibles pour le format des titres de chapitre';
$string['numberingoptions_desc'] = 'Options d’affichage des chapitres et sous-chapitres dans la table des matières';
$string['page-mod-book-x'] = 'Toute page d’un livre';
$string['pluginadministration'] = 'Administration du livre';
$string['pluginname'] = 'Livre';
$string['previouschapter'] = 'Chapitre précédent';
$string['privacy:metadata'] = 'Le module d’activité Livre n’enregistre aucune donnée personnelle.';
$string['removeallbooktags'] = 'Retirer tous les tags du livre';
$string['search:activity'] = 'Livre – information sur la ressource';
$string['search:chapter'] = 'Livre – chapitres';
$string['showchapter'] = 'Afficher le chapitre « {$a} »';
$string['subchapter'] = 'Sous-chapitre';
$string['subchapternotice'] = '(disponible après la création du premier chapitre)';
$string['subplugintype_booktool'] = 'Outil du livre';
$string['subplugintype_booktool_plural'] = 'Outils du livre';
$string['tagarea_book_chapters'] = 'Chapitres du livre';
$string['tagsdeleted'] = 'Les tags du livre ont été supprimés';
$string['toc'] = 'Table des matières';
$string['top'] = 'Haut';
