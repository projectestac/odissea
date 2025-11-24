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
 * Strings for component 'search_solr', language 'de', version '4.5'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'Der angegeben Solr-Server ist nicht verfügbar oder der eingetragene Index existiert nicht.';
$string['connectionsettings'] = 'Verbindungseinstellungen';
$string['errorcreatingschema'] = 'Fehler beim Anlegen im Solr Schema: {$a}';
$string['errorsolr'] = 'Die Suchmaschine Solr hat einen Fehler gemeldet: {$a}';
$string['errorvalidatingschema'] = 'Fehler im Solr Schema: Das Feld \'{$a->fieldname}\' existiert nicht. <a href="{$a->setupurl}">Folgen Sie diesem Link</a>, um die notwendigen Felder zu konfigurieren.';
$string['extensionerror'] = 'Die PHP-Extension Apache Solr ist nicht installiert. Beachten Sie bitte die Dokumentation.';
$string['fileindexing'] = 'Dateiindizierung aktivieren';
$string['fileindexing_help'] = 'Wenn es die Solr-Installation unterstützt, erlaubt diese Option, dass Moodle Dateien zum Indizieren senden kann. Der gesamte Inhalt der Website muss erneut indiziert werden, wenn diese Option zum Hinzufügen aller Dateien aktiviert wird.';
$string['fileindexsettings'] = 'Einstellungen zur Dateiindizierung';
$string['maxindexfilekb'] = 'Maximale Dateigröße zur Indizierung (kB)';
$string['maxindexfilekb_help'] = 'Dateien, die größer als die maximale Dateigröße (in Kilobytes) sind, werden nicht in die Indizierung einbezogen. Wenn diese Option auf Null gesetzt ist, werden alle Dateien indiziert.';
$string['minimumsolr4'] = 'Solr 4.0 ist die Version, die Moodle mindestens erfordert.';
$string['missingconfig'] = 'Der Apache Solr Server ist noch nicht in Moodle konfiguriert.';
$string['multivaluedfield'] = 'Das Feld \'{$a}\' liefert ein Array anstatt eines Skalars zurück. Löschen Sie den aktuellen Index, legen Sie einen neuen Index an und führen Sie setup_schema.php  aus, bevor Sie Daten in Solr indizieren.';
$string['nodatafromserver'] = 'Keine Daten vom Server';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Das Plugin sendet Daten an eine externe SolR-Suchmaschine Es speichert keine persönlichen Daten.';
$string['privacy:metadata:data'] = 'Personenbezogene Daten, die vom Such-Subsystem übergeben wurden';
$string['schemafieldautocreated'] = 'Das Feld \'{$a}\' existiert bereits im Solr Schema. Wahrscheinlich wurde dieses Script nicht ausgeführt, bevor die Indizierungsdaten und -felder automatisch von Solr angelegt worden sind. Löschen Sie den aktuellen Index, legen Sie einen neuen Index an und führen Sie setup_schema.php  erneut aus, bevor Sie Daten in Solr indizieren.';
$string['schemasetupfromsolr5'] = 'Die Version des Solr-Servers ist kleiner als 5.0. Dieses Script kann die Schema-Einstellungen nur vornehmen, wenn die Solr-Version 5.0 (oder höher) ist. Sie müssen die Felder im Solr-Schema manuell einstellen, so wie es in \\search_solr\\document::get_default_fields_definition() angegeben ist.';
$string['searchinfo'] = 'Suchanfragen';
$string['searchinfo_help'] = 'Der durchsuchte Bereich kann spezifiziert werden, indem der Suchanfrage \'title:\', \'content:\', \'name:\', or \'intro:\' vorangestellt wird. So würde die Suche nach \'title:news\' z.B. alle Ergebnisse mit dem Wort \'news\' im Titel ausgeben.

Boolesche Operatoren (\'AND\', \'OR\', \'NOT\') können verwendet werden, um Suchwörter zu kombinieren oder auszuschließen.

Platzhalter (\'*\' oder \'?\') können verwendet werden, um Zeichen in der Suchanfrage darzustellen.';
$string['setupok'] = 'Das Schema wird bereits benutzt.';
$string['solrauthpassword'] = 'HTTP Authentifizierung Kennwort';
$string['solrauthuser'] = 'HTTP Authentifizierung Nutzername';
$string['solrhttpconnectionport'] = 'Port';
$string['solrhttpconnectiontimeout'] = 'Timeout';
$string['solrhttpconnectiontimeout_desc'] = 'Die Zeitüberschreitung der HTTP Verbindung ist die maximale Zeit in Sekunden, die für den HTTP Datentransfer gestattet ist.';
$string['solrindexname'] = 'Indexname';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Solr ist nicht die konfigurierte Suchmaschine.';
$string['solrsecuremode'] = 'Sicherer Modus';
$string['solrserverhostname'] = 'Hostname';
$string['solrserverhostname_desc'] = 'Domainname des Solr Servers';
$string['solrsetting'] = 'Solr Einstellungen';
$string['solrsslcainfo'] = 'SSL CA Certificates Name';
$string['solrsslcainfo_desc'] = 'Dateiname für Datei mit einem oder mehreren CA-Zertifikaten, über die Peers überprüft werden';
$string['solrsslcapath'] = 'SSL CA Certificates Pfad';
$string['solrsslcapath_desc'] = 'Verzeichnis für Dateien mit CA-Zertifikaten, über die Peers überprüft werden';
$string['solrsslcert'] = 'SSL Zertifikat';
$string['solrsslcert_desc'] = 'Dateiname für PEM-formatted private certificate';
$string['solrsslkey'] = 'SSL Key';
$string['solrsslkey_desc'] = 'Dateiname für PEM-formatted private key';
$string['solrsslkeypassword'] = 'SSL Key Password';
$string['solrsslkeypassword_desc'] = 'Kennwort für PEM-formatted private key file';
