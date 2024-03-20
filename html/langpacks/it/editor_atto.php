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
 * Strings for component 'editor_atto', language 'it', version '4.1'.
 *
 * @package     editor_atto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'Non è stato possibile collegarsi al server per salvare una copia temporanea del testo in redazione. Prima di inviare il testo, accertarsi di essere collegati.';
$string['autosavefrequency'] = 'Frequenza salvataggio automatico';
$string['autosavefrequency_desc'] = 'Il numero di secondi che intercorrono tra salvataggi automatici. Atto salverà automaticamente il testo presente nell\'editor in base a questa impostazione. Il testo potrà essere ripristinato quando lo stesso utente accederà lo stesso form.';
$string['autosaves'] = 'Informazioni di salvataggio automatico dell\'editor';
$string['autosavesucceeded'] = 'Bozza salvata.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'La linea \'{$a}\' non ha il formato corretto.';
$string['errorgroupisusedtwice'] = 'Il gruppo \'{$a}\' è definito due volte; i nomi dei gruppi devono essere univoci.';
$string['errornopluginsorgroupsfound'] = 'Non sono stati trovati né plugin né gruppi. Per favore aggiungere alcuni plugin e gruppi.';
$string['errorpluginisusedtwice'] = 'Il plugin \'{$a}\' è utilizzato due volte; i plugin possono essere definiti una sola volta.';
$string['errorpluginnotfound'] = 'Non è possibile utilizzare il plugin \'{$a}\' poiché non risulta installato.';
$string['errortextrecovery'] = 'Purtroppo non è stato possibile recuperare la bozza';
$string['infostatus'] = 'Informazioni';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['pluginname'] = 'Editor HTML Atto';
$string['privacy:metadata:database:atto_autosave'] = 'Bozze salvate automaticamente dall\'editor di testo.';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'Testo salvato.';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'Orario di modifica del contenuto.';
$string['privacy:metadata:database:atto_autosave:userid'] = 'ID dell\'utente di cui sono stati salvati i dati.';
$string['recover'] = 'Ripristino';
$string['richtexteditor'] = 'Rich text editor';
$string['settings'] = 'Impostazioni barra degli strumenti Atto';
$string['subplugintype_atto'] = 'Plugin Atto';
$string['subplugintype_atto_plural'] = 'Plugin Atto';
$string['taskautosavecleanup'] = 'Eliminazione bozze salvate automaticamente';
$string['textrecovered'] = 'È stata ripristinata automaticamente una bozza del testo';
$string['toolbarconfig'] = 'Configurazione barra degli strumenti';
$string['toolbarconfig_desc'] = 'Le impostazioni di questa pagina consentono di configurare l\'elenco dei plugin e l\'ordine di visualizzazione. È possibile definire un gruppo per ogni linea seguito dall\'elenco dei plugin che fanno parte del gruppo. Per separare il nome del gruppo dal nome dei plugin si deve utilizzare il segno uguale, mentre per separare i plugin tra loro si deve usare la virgola. Il nome di ciascun gruppo deve essere univoco e possibilmente  utile a qualificare il gruppo di plugin (i pulsanti) che contiene. I nomi possono contenere solo caratteri alfanumerici e non è possibile ripetere i nomi dei gruppi e dei plugin.';
$string['warningstatus'] = 'Attenzione';
