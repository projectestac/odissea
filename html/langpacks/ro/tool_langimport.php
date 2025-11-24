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
 * Strings for component 'tool_langimport', language 'ro', version '4.5'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Nu s-a putut conecta la serverul de descărcare. Nu este posibil să instalați sau să actualizați automat pachetele lingvistice. Vă rugăm să descărcați fișierele ZIP corespunzătoare din <a href="{$a->src}"> {$a->src} </a> și dezarhivați-le manual în directorul dvs. de date <code> {$a->dest} </code>';
$string['install'] = 'Instalează pachetul de limbă selectat';
$string['installedlangs'] = 'Pachete de limbă instalate';
$string['installfailed'] = 'Instalarea pachetului de limbă a eșuat!';
$string['installfinished'] = 'Instalarea pachetului de limbă încheiată.';
$string['installpending'] = 'Următoarele pachete de limbă vor fi instalate în curând: {$a}.';
$string['installscheduled'] = 'Pachete de limbă programate pentru instalare.';
$string['langimport'] = 'Utilitar import limbă';
$string['langimportdisabled'] = 'Funcția de importare a limbii a fost dezactivată. Trebuie să vă actualizați manual pachetele lingvistice la nivel de sistem de fișiere. Nu uitați să ștergeți memoria cache după ce ați făcut acest lucru.';
$string['langpackinstalled'] = 'Pachetul de limbă „{$a}” a fost instalat cu succes';
$string['langpackinstalledevent'] = 'A fost instalat pachetul de limbă';
$string['langpacknotremoved'] = 'A avut loc o eroare; pachetul lingvistic „{$a}” nu este complet dezinstalat. Vă rugăm să verificați permisiunile de fișiere.';
$string['langpackremoved'] = 'Pachetul de limbă „{$a}” a fost dezinstalat';
$string['langpackremovedevent'] = 'Pachetul de limbă dezinstalat';
$string['langpackupdated'] = 'Pachetul de limbă \'{$a}\' a fost actualizat cu succes';
$string['langpackupdatedevent'] = 'Pachetul de limbă a fost actualizat';
$string['langpackupdateskipped'] = 'Actualizarea pachetului lingvistic „{$a}” a fost omisă';
$string['langpackuptodate'] = 'Pachetul de limbă „{$a}” este actualizat';
$string['langunsupported'] = '<p> Serverul dvs. nu pare să accepte pe deplin următoarele limbi: </p> <ul> {$a->missinglocales} </ul> <p> În schimb, localizarea globală ({$a->globallocale}) va fi folosit pentru a formata anumite șiruri, cum ar fi date sau numere. </p>';
$string['langupdatecomplete'] = 'Actualizarea modulului de localizare a fost finalizată';
$string['missingcfglangotherroot'] = 'Valoarea configurației lipsește $CFG->langotherroot';
$string['missinglangparent'] = 'Limba părinte lipsește <em> {$a->parent} </em> din <em> {$a->lang} </em>.';
$string['noenglishuninstall'] = 'Pachetul în limba engleză nu poate fi dezinstalat.';
$string['noenglishuninstalltitle'] = 'Nu se poate dezinstala';
$string['nolangupdateneeded'] = 'Toate versiunile localizate sunt la zi, nu este nevoie de actualizare';
$string['pluginname'] = 'Pachete de limbă';
$string['privacy:metadata'] = 'Pluginul Language Packs nu stochează date personale.';
$string['purgestringcaches'] = 'Ștergeți memoria cache';
$string['search'] = 'Căutați pachete de limbă disponibile';
$string['selectlangs'] = 'Selectați limbile de dezinstalat';
$string['uninstall'] = 'Dezinstalați pachetele de limbă selectate';
$string['uninstallconfirm'] = 'Sunteți pe punctul de a dezinstala complet aceste pachete de limbă: <strong> {$a} </strong>. Esti sigur?';
$string['updatelangs'] = 'Actualizează toate pachetele de limbă instalate';
$string['updatelangsnote'] = 'Actualizarea tuturor pachetelor lingvistice instalate făcând click pe butonul poate dura mult timp și pot apărea pauze. Se recomandă, în schimb, să folosiți funcția programată \'{$a->taskname}\' (care rulează zilnic în mod implicit).';
