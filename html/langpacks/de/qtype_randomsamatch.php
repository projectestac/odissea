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
 * Strings for component 'qtype_randomsamatch', language 'de', version '3.11'.
 *
 * @package     qtype_randomsamatch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insufficientoptions'] = 'Die Auswahloptionen für diese Frage sind nicht richtig angelegt worden. Daher steht die Frage im Test nicht zur Verfügung. Informieren Sie bitte Ihre/n Trainer/in.';
$string['nosaincategory'] = 'In der ausgewählten Kategorie \'{$a->catname}\' befinden sich keine Kurztextfragen. Wählen Sie eine andere Kategorie aus oder erstellen Sie Fragen in dieser Kategorie.';
$string['notenoughsaincategory'] = 'In der ausgewählten Kategorie \'{$a->catname}\' befinden sich nur {$a->nosaquestions} Kurztextfragen. Wählen Sie eine andere Kategorie aus, erstellen Sie zusätzliche Kurztextfragen in dieser Kategorie oder reduzieren Sie die Zahl der auszuwählenden Kurztextfragen.';
$string['pluginname'] = 'Zufällige Kurzantwortzuordnung';
$string['pluginname_help'] = 'Aus Teilnehmendenansicht scheint dies eine Zuordnungsfrage zu sein. Der Unterschied besteht darin, dass die Fragen und Antworten zufällig aus den Kurzantwortfragen der gewählten Kategorie genommen werden. Es müssen ausreichend noch nicht genutzte Kurzantwortfragen in der Kategorie abgelegt sein. Andernfalls erscheint eine Fehlernachricht.';
$string['pluginnameadding'] = 'Zufällige Kurzantwort Zuordnungsfrage hinzufügen';
$string['pluginnameediting'] = 'Zufällige Kurzantwort Zuordnungsfrage bearbeiten';
$string['pluginnamesummary'] = 'Wie Zuordnungsfrage, jedoch zufällig aus Kurzantwortfragen der Kategorie erstellt.';
$string['privacy:metadata'] = 'Der Fragentyp \'Zufallsfragen-Zuordnung\' speichert keine personenbezogenen Daten.';
$string['randomsamatch'] = 'Zufällige Kurzantwort-Zuordnung';
$string['randomsamatchintro'] = 'Wählen Sie für jede der folgenden Fragen die passende Antwort aus dem Menu.';
$string['randomsamatchnumber'] = 'Anzahl der Fragen zur Auswahl';
$string['subcats'] = 'Unterkategorien einbeziehen';
$string['subcats_help'] = 'Wenn Sie diese Option aktivieren, werden auch Fragen aus Unterkategorien verwendet.';
