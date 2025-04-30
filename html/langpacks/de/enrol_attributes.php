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
 * Strings for component 'enrol_attributes', language 'de', version '4.4'.
 *
 * @package     enrol_attributes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcondition'] = 'Bedingung hinzufügen';
$string['addgroup'] = 'Gruppe hinzufügen';
$string['ajax-error'] = 'Ein Fehler ist aufgetreten';
$string['ajax-okforced'] = 'Ok, {$a} Nutzer/innen wurden eingeschrieben';
$string['ajax-okpurged'] = 'Ok, Einschreibungen wurden gelöscht';
$string['attributes:config'] = 'Plugin-Instanzen konfigurieren';
$string['attributes:manage'] = 'Eingeschriebene Nutzer/innen verwalten';
$string['attributes:unenrol'] = 'Nutzer/innen aus dem Kurs abmelden';
$string['attributes:unenrolself'] = 'Selber aus dem Kurs abmelden';
$string['attrsyntax'] = 'Nutzerprofile-Regeln';
$string['attrsyntax_help'] = '<p>Diese Regeln können nur nutzerdefinierte Profilfelder verwenden. </p>';
$string['cachedef_dbquerycache'] = 'Datenbank-Abfrage-Cache';
$string['confirmforce'] = 'Dies wird alle Nutzer/innen (wieder) einschreiben, die dieser Regel entsprechen.';
$string['confirmpurge'] = 'Dadurch werden alle Einschreibungen entfernen, die dieser Regel entsprechen.';
$string['defaultrole'] = 'Standardmäßige Rolle';
$string['defaultrole_desc'] = 'Die Standardrolle zum Einschreiben von Personen mit diesem Plugin (jede Instanz kann dies überschreiben).';
$string['defaultwhenexpired'] = 'Standardverhalten nach Ablauf von Attributen';
$string['defaultwhenexpired_desc'] = 'Was tun mit Nutzer/innen, die nicht mehr mit der Attributregel übereinstimmen? Diese Einstellung kann in jeder Registrierungsinstanz überschrieben werden.';
$string['deletecondition'] = 'Bedingung löschen';
$string['force'] = 'Einschreibungen jetzt erzwingen';
$string['group'] = 'Gruppenzuweisung';
$string['group_help'] = 'Sie können keine oder mehrere Gruppen zuweisen';
$string['mappings'] = 'Shibboleth Mappings';
$string['mappings_desc'] = 'Bei Verwendung der Shibboleth-Authentifizierung kann dieses Plugin das Profil einer Person bei jeder Anmeldung automatisch aktualisieren. <br>
<br>Wenn Sie beispielsweise das Profilfeld <code>homesorganizationtype</code> einer Person mit dem Shibboleth-Attribut <code>Shib-HomeOrganizationType</code> aktualisieren möchten (vorausgesetzt, dass die Umgebungsvariable beim Anmelden zur Verfügung steht), können Sie in einer Zeile eingeben: <code>Shib-HomeOrganizationType:homeorganizationtype</code>
<br>Sie können so viele Zeilen eingeben, wie Sie brauchen.<br>
<br>Um diese Funktion nicht zu verwenden oder wenn Sie keine Shibboleth-Authentifizierung verwenden, lassen Sie dieses Feld einfach leer.';
$string['no_custom_field'] = 'Es scheint kein nutzerdefiniertes Feld zu geben. Gehen Sie zu <a href="{$a}" target="_blank"> Nutzereinstellungen </a>, um ein Feld hinzuzufügen.';
$string['no_profile_field_selected'] = 'In den Plugin-Einstellungen von enrol_attributes wurde kein Profilfeld ausgewählt.';
$string['observelogins'] = 'Nutzer/innen sofort bei der Anmeldung einschreiben';
$string['observelogins_desc'] = 'Versuchen Sie, Nutzer/innen sofort bei der Anmeldung einzuschreiben. Dies kann sich auf Ihre Website auswirken. Deaktivieren Sie dies, wenn sich viele Nutzer/innen gleichzeitig anmelden und sie gleichzeitig eingeschrieben werden, weil dies eine zu starke Serverlast erzeugt.';
$string['pluginname'] = 'Einschreibung nach Profilfeld';
$string['privacy:metadata'] = 'Das Plugin "Einschreibung nach Profilfeld" speichert keine personenbezogenen Daten.';
$string['profilefields'] = 'Profilfelder, die in der Auswahl verwendet werden sollen';
$string['profilefields_desc'] = 'Welche Nutzerprofilfelder können bei der Konfiguration einer Registrierungsinstanz verwendet werden?<br><br>
<div class="alert alert-warning alert-block fade in" role="alert" data-aria-autofocus="true">Wenn Sie hier kein Attribut auswählen, macht das Plugin Ärger und deaktiviert seine Verwendung in Kursen.</div><br>Die folgende Funktion kann jedoch in diesem Fall weiterhin verwendet werden.';
$string['purge'] = 'Einschreibungen löschen';
$string['removewhenexpired'] = 'Nach Ablauf der Attribute abmelden';
$string['removewhenexpired_help'] = 'Nutzer/innen beim Login abmelden, wenn sie nicht mehr mit der Attributregel übereinstimmen.';
$string['whenexpired'] = 'Verhalten nach dem Ablauf von Attributen';
$string['whenexpired_help'] = 'Was soll mit Nutzer/innen passieren, die nicht mehr mit der Attributregel übereinstimmen?';
$string['whenexpireddonothing'] = 'Nutzer/in eingeschrieben lassen';
$string['whenexpiredremove'] = 'Nutzer/in abmelden';
$string['whenexpiredsuspend'] = 'Nutzer/in ausschließen';
