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
 * Strings for component 'editor_atto', language 'ro', version '4.5'.
 *
 * @package     editor_atto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'Nu s-a putut conecta la server. Dacă trimiteți această pagină acum, modificările pot fi pierdute.';
$string['autosavefrequency'] = 'Frecvența salvărilor automate';
$string['autosavefrequency_desc'] = 'Acesta este numărul de secunde între încercările de salvareautomata. Atto va salva automat textul în editor în conformitate cu această setare, astfel încât textul poate fi restabilit automat atunci când același utilizator revine la aceeași formă.';
$string['autosaves'] = 'Informații despre salvarea automată a editorului';
$string['autosavesucceeded'] = 'Draft salvat';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'Linia \'{$a}\' nu este în formatul corect.';
$string['errorgroupisusedtwice'] = 'Grupul "{$a}" este definit de două ori; numele grupului trebuie să fie unic.';
$string['errornopluginsorgroupsfound'] = 'Nu au fost găsite plugin-uri sau grupuri; vă rugăm să adăugați grupuri și plugin-uri.';
$string['errorpluginisusedtwice'] = 'Plugin-ul \'{$a}\' este folosit de două ori; plugin-urile pot fi definite doar o singură dată.';
$string['errorpluginnotfound'] = 'Plugin-ul \'{$a}\' nu poate fi folosit; nu apare ca fiind instalat.';
$string['errortextrecovery'] = 'Din păcate, versiunea draft nu a putut fi restabilită.';
$string['infostatus'] = 'Informații';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['pluginname'] = 'Editor Atto HTML';
$string['privacy:metadata:database:atto_autosave'] = 'Schițe de editor de text salvate automat.';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'Textul care a fost salvat.';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'Momentul modificării conținutului.';
$string['privacy:metadata:database:atto_autosave:userid'] = 'ID-ul utilizatorului ale cărui date au fost salvate.';
$string['recover'] = 'Recuperați';
$string['richtexteditor'] = 'Editorul de text';
$string['settings'] = 'Setări atto toolbar';
$string['subplugintype_atto'] = 'Plugin atto';
$string['subplugintype_atto_plural'] = 'Plugin-uri atto';
$string['taskautosavecleanup'] = 'Șterge draft-urile expirate, salvate din baza de date.';
$string['textrecovered'] = 'O versiune draft a acestui text a fost restablit în mod automat.';
$string['toolbarconfig'] = 'Configurare toolbar';
$string['toolbarconfig_desc'] = 'Lista de plugin-uri și ordinea în care sunt afișate pot fi configurate aici. Configurarea constă în grupuri (câte unul pe fiecare rând), urmată de lista ordonată de plugin-uri pentru acel grup. Grupul este separat de plugin-uri prin semnul egal iar plugin-urile sunt separate prin virgule. Numele grupului trebuie să fie unic și ar trebui să indice ce au butoanele în comun. Butonul și numele grupului nu trebuie să se repete și pot să conțină numai caractere alfanumerice.';
$string['warningstatus'] = 'Avertizare';
