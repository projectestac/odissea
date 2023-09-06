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
 * Strings for component 'cachestore_file', language 'de', version '4.1'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'Verzeichnis asynchron löschen';
$string['asyncpurge_help'] = 'Wenn diese Option aktiviert ist, wird ein neues Verzeichnis mit Cache-Revision erstellt und das alte Verzeichnis wird asynchron über eine geplante Task gelöscht.';
$string['autocreate'] = 'Verzeichnis automatisch anlegen';
$string['autocreate_help'] = 'Nach der Aktivierung wird der angegebene Pfad automatisch erstellt sofern er noch nicht existiert.';
$string['lockwait'] = 'Maximale Sperrwartezeit';
$string['lockwait_help'] = 'Die maximale Wartezeit (in Sekunden) auf eine exklusive Sperre, bevor ein Cache-Schlüssel gelesen oder geschrieben wird. Dies wird nur für Cache-Definitionen verwendet, für die eine Lese- oder Schreibsperre erforderlich ist.';
$string['path'] = 'Cache-Pfad';
$string['path_help'] = 'Das Verzeichnis wird zur Ablage von Dateien des Cache-Speichers verwendet. Falls der Eintrag leer bleibt (default) wird automatisch ein Verzeichnis in moodledata angelegt. Damit kann ein Verzeichnis deklariert werden, in dem Daten abgelegt werden, um sie mit grosser Leistungsfähigkeit (z.B. memory) zu nutzen.';
$string['pluginname'] = 'Datei-Cache';
$string['prescan'] = 'Verzeichnis vorher durchsuchen';
$string['prescan_help'] = 'Nach der Aktivierung wird das Verzeichnis bei der Nutzung von Dateien oder Abfragen zuerst durchgescannt. Das kann den Zugriff beschleunigen wenn der Datenspeicher sonst langsam erscheint.';
$string['privacy:metadata'] = 'Das Dateicache-Cachestoreplugin speichert kurzfristig Daten im Rahmen des Cachings und wird dann wieder gelöscht.';
$string['singledirectory'] = 'Speichern in einem einzigen Verzeichnis';
$string['singledirectory_help'] = 'Nach der Aktivierung werden Dateien (gecachte Werte) in einem einzlenen Verzeichnis abgelegt und nicht in vielen Unterverzeichnissen gespeichert. <br />
Dateitransaktionen können dadurch beschleunigt werden. Es kann jedoch auch an die Grenzen des Dateisystems stossen.<br />
Empfohlen wird dies nunmehr nur wenn folgendes zutrifft:<br />
- Wenn Sie sich sicher sind, das die Zahl der Werte im Cache gering genug ist, um nicht das Dateisystem zu sehr zu beanspruchen. <br />
- Die gecachten Daten sind nicht zu umfangreich. Solte dies jedoch der Fall sein, ist die Standardeinstellung (default) die bessere Option, um Probleme zu vermeiden.';
$string['task_asyncpurge'] = 'Alte Cache-Revisionsverzeichnisse des Dateispeichers asynchron löschen';
