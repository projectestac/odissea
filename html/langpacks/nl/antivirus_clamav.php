<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'antivirus_clamav', language 'nl', branch 'MOODLE_38_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Clam AV is vastgelopen. De foutmelding was {$a}. Hier is de melding van Clam:';
$string['clamfailureonupload'] = 'Als ClamAV faalt';
$string['configclamactlikevirus'] = 'Behandel bestanden als virussen';
$string['configclamdonothing'] = 'Behandel bestanden als OK';
$string['configclamfailureonupload'] = 'Als je Clam hebt geconfigureerd om geüploade bestanden te scannen, maar het is fout geconfigureerd of het faalt voor een onbekende reden, hoe moet het zich dan gedragen? Als je kiest voor "behandel bestanden als virussen", dan zullen ze in de quarantaine-zone gezet worden of verwijderd. Als je kiest voor "behandel bestanden als OK", dan zullen de bestanden zoals normaal naar de bestemmingsmap verplaatst worden. In beide gevallen zal de beheerder gemeld worden dat Clam fout loopt. Als je er kiest voor "behandel alle bestanden als virussen," dan zullen alle geüploade bestanden naar de quarantainezone verplaatst worden of verwijderd worden. Wees voorzichtig met deze instelling.';
$string['errorcantopensocket'] = 'Verbinden met een Unix domain socket gaf als fout {$a}';
$string['errorclamavnoresponse'] = 'ClamAV antwoordt niet; controleer of de status van de daemon';
$string['errornounixsocketssupported'] = 'Unix domain socket transport wordt niet ondersteund op dit systeem. Gebruik de command line optie.';
$string['invalidpathtoclam'] = 'Moodle is geconfigureerd om Clam te gebruiken voor bestandsupload, maar het pad naar Clam AV, {$a}, was niet juist.';
$string['pathtoclam'] = 'Command line';
$string['pathtoclamdesc'] = 'Als de methode om ClamAV te gebruiken is ingesteld op "command line", geeft dan het pad naar ClamAV hier op. Op een Linux-server zal dat /usr/bin/clamscan of /usr/bin/clamdscan zijn.';
$string['pathtounixsocket'] = 'Unix domain socket';
$string['pathtounixsocketdesc'] = 'Als de methode om ClamAV te gebruiken is ingesteld op "Unix domain socket", geeft dan het pad naar de ClamAV Unix socket hier op. Op Debian Linux zal dat /var/run/clamav/clamd.ctl zijn. Zorg ervoor dat de clamav daemon leesrechten heeft op geüploade bestanden. De makkelijkste manier om dat te doen is door de \'clamav-gebruiker\' toe te voegen aan je webserver-groep (\'www-data\' op Debian Linux).';
$string['pluginname'] = 'ClamAV antivirus';
$string['privacy:metadata'] = 'De ClamAV Antivirus-plug-in slaat geen persoonlijke gegevens op.';
$string['quarantinedir'] = 'Quarantaine-map';
$string['runningmethod'] = 'Gebruiksmethode';
$string['runningmethodcommandline'] = 'Command line';
$string['runningmethoddesc'] = 'Methode om ClamAV te gebruiken. Command line is de standaard, hoewel je op Unix-systemen betere performantie kunt krijgen door systeem-sockets te gebruiken.';
$string['runningmethodunixsocket'] = 'Unix domain socket';
$string['unknownerror'] = 'Er was een onbekende fout met clam.';
