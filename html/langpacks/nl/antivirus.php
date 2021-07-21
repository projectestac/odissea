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
 * Strings for component 'antivirus', language 'nl', version '3.11'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Beschikbare antivirus plugins';
$string['antiviruscommonsettings'] = 'Standaard antivirus-instellingen';
$string['antiviruses'] = 'Antivirusplugins';
$string['antivirussettings'] = 'Beheer antivirusplugins';
$string['configantivirusplugins'] = 'Kies de antivirusplugins die je wil gebruiken en rangschik ze in de volgorde waarin je ze wil toepassen.';
$string['datainfecteddesc'] = 'Geïnfecteerde gegevens gevonden';
$string['datainfectedname'] = 'Data geïnfecteerd';
$string['datastream'] = 'Gegevens';
$string['emailadditionalinfo'] = 'Bijkomende details, gerapporteerd door de anti-virus software:';
$string['emailauthor'] = 'Geüpload door:';
$string['emailcontenthash'] = 'Inhoud hash:';
$string['emailcontenttype'] = 'Inhoudstype:';
$string['emaildate'] = 'Uploaddatum:';
$string['emailfilename'] = 'Bestandsnaam:';
$string['emailfilesize'] = 'Bestandsgrootte:';
$string['emailgeoinfo'] = 'Geolocatie:';
$string['emailinfectedfiledetected'] = 'Geïnfecteerd bestand gedetecteerd';
$string['emailipaddress'] = 'IP-adres:';
$string['emailreferer'] = 'Verwijzing:';
$string['emailreport'] = 'Rapport:';
$string['emailscanner'] = 'Scanner:';
$string['emailscannererrordetected'] = 'Er is een fout in de scanner opgetreden';
$string['emailsubject'] = '{$a}:: Clam AV-melding';
$string['enablequarantine'] = 'Quarantaine inschakelen';
$string['enablequarantine_help'] = 'Wanneer quarantaine ingeschakeld is, zullen alle bestanden die als virus gemarkeerd zijn bewaard worden in een quarantaine-map voor verder onderzoek  ([dataroot]/{$a}).
De upload naar Moodle zal mislukken.
Als je een virusscanner op niveau van het bestandssysteem gebruikt, dan moet de quarantaine-map uitgesloten worden van de automatische viruscontrole om ervoor te zorgen dat de bestanden in quarantaine gedetecteerd worden.';
$string['fileinfecteddesc'] = 'Een geïnfecteerd bestand werd verwijderd.';
$string['fileinfectedname'] = 'Bestand geïnfecteerd';
$string['notifyemail'] = 'Antivirus-alarm notificatie e-mail';
$string['notifyemail_help'] = 'Het e-mailadres voor meldingen wanneer een virus gevonden wordt. Indien leeg, zullen alle site-beheerders een melding ontvangen.';
$string['privacy:metadata'] = 'De antivirus-plugin bewaart geen persoonlijke gegevens.';
$string['quarantinedfiles'] = 'Bestanden door antivirus in quarantaine geplaatst';
$string['quarantinedisabled'] = 'Quarantaine uitgeschakeld. Het bestand is niet bewaard.';
$string['quarantinetime'] = 'Maximale quarantaine-tijd';
$string['quarantinetime_desc'] = 'Bestanden in quarantaine die ouder zijn dan deze periode zullen verwijderd worden.';
$string['taskcleanup'] = 'Bestanden in quarantaine opschonen.';
$string['unknown'] = 'Onbekend';
$string['virusfound'] = '{$a->item}  is gescand op virussen en is geïnfecteerd!';
