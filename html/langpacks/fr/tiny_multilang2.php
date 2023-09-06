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
 * Strings for component 'tiny_multilang2', language 'fr', version '4.1'.
 *
 * @package     tiny_multilang2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['helplinktext'] = 'Contenu multilingue (v2)';
$string['highlight'] = 'Mettre en évidence les délimiteurs';
$string['highlight_desc'] = 'Mettre en évidence visuellement les délimiteurs multilingues (c.-à-d. {mlang XX} et {mlang}) dans l\'éditeur WYSIWYG.';
$string['highlightcss'] = 'CSS pour délimiteurs';
$string['highlightcss_desc'] = 'CSS utilisé pour mettre en évidence les délimiteurs de contenus multilingues.

Si vous souhaitez afficher la langue pour les blocs {mlang}, vous pouvez utiliser quelque chose comme ce qui suit (cet exemple s\'applique à la langue Française)&nbsp;:

<pre>
.multilang-begin:lang(fr):before {
    content: "fr";
    position: relative;
    top: -0.5em;
    font-weight: bold;
    background-color: #e05e5e;
    color: #ffffff;
}
</pre>';
$string['multilang2:desc'] = 'Aide l\'ajout de contenu multilingue (le filtre Contenu multilingue (v2) doit être activé)';
$string['multilang2:language'] = 'Langue';
$string['multilang2:other'] = 'Autre';
$string['multilang2:viewlanguagemenu'] = 'Voir le menu déroulant des langues dans l\'éditeur TinyMCE';
$string['pluginname'] = 'Contenu multilingue (v2)';
$string['privacy:metadata'] = 'Le plugin Tiny Contenu multilingue (v2) n\'enregistre aucune donnée personnelle.';
$string['requiremultilang2'] = 'Requiert le filtre Contenu multilingue (v2)';
$string['requiremultilang2_desc'] = 'Si ce réglage est activé, le menu déroulant des langues ne sera visible que lorsque le filtre Contenu multilingue (v2) est activé.';
$string['settings'] = 'Paramètres Tiny Contenu multilingue (v2)';
$string['showalllangs'] = 'Afficher toutes les langues';
$string['showalllangs_desc'] = 'Si ce réglage est activé, le menu déroulant des langues contiendra toutes les langues prises en charge par Moodle. Sinon, seules les langues installées et activées apparaitront.';
