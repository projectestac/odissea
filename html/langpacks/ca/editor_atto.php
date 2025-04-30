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
 * Strings for component 'editor_atto', language 'ca', version '4.4'.
 *
 * @package     editor_atto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'No s\'ha pogut connectar amb el servidor. Si envieu aquesta pàgina ara, els vostres canvis es poden perdre.';
$string['autosavefrequency'] = 'Freqüència de desat automàtic';
$string['autosavefrequency_desc'] = 'Aquest és el temps entre desat i desat automàtic. L\'Atto desarà de forma automàtica el text de l\'editor segons aquest paràmetre; per tant, el text es restaurarà de forma automàtica quan el mateix usuari torni al mateix formulari.';
$string['autosaves'] = 'Informació de l\'autodesat de l\'editor';
$string['autosavesucceeded'] = 'S\'ha desat l\'esborrany.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'La línia \'{$a}\' no té un format correcte.';
$string['errorgroupisusedtwice'] = 'El grup \'{$a}\' està definit per duplicat; els noms dels grups han de ser únics.';
$string['errornopluginsorgroupsfound'] = 'No s\'han trobat connectors o grups; afegiu alguns grups i connectors.';
$string['errorpluginisusedtwice'] = 'El connector \'{$a}\' està duplicat; els connectors només poden definir-se una vegada.';
$string['errorpluginnotfound'] = 'El connector \'{$a}\' no és pot utilitzar; no sembla qu estigui instal·lat.';
$string['errortextrecovery'] = 'Malauradament l\'esborrany no s\'ha pogut restaurar.';
$string['infostatus'] = 'Informació';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['pluginname'] = 'Editor HTML Atto';
$string['privacy:metadata:database:atto_autosave'] = 'Esborranys de l\'editor de text desats automàticament';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'El text que s\'ha desat.';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'El temps que s\'ha modificat el contingut.';
$string['privacy:metadata:database:atto_autosave:userid'] = 'L\'Id de l\'usuari les dates del qual s\'han desat.';
$string['recover'] = 'Recupera';
$string['settings'] = 'Configuració de la barra d\'eines Atto';
$string['subplugintype_atto'] = 'Connector Atto';
$string['subplugintype_atto_plural'] = 'Connectors Atto';
$string['taskautosavecleanup'] = 'Suprimeix els esborranys de desament automàtic caducats de la base de dades.';
$string['textrecovered'] = 'Un esborrany d\'aquest text s\'ha restaurat automàticament.';
$string['toolbarconfig'] = 'Configuració de la barra d\'eines';
$string['toolbarconfig_desc'] = 'La llista de connectors i l\'ordre en què es mostren es pot configurar aquí. La configuració consta de grups (un per línia) seguits de la llista ordenada de connectors per a cada grup. El grup està separat dels connectors amb un signe d\'igual i els connectors estan separats per comes. Els noms dels grups han de ser únics i haurien d\'indicar el que els botons tenen en comú. Els noms de botons i de grups no es poden repetir i només poden contenir caràcters alfanumèrics.';
$string['warningstatus'] = 'Adevertència';
