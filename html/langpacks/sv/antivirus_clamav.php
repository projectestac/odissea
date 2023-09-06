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
 * Strings for component 'antivirus_clamav', language 'sv', version '4.1'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'Det finns ett problem med virussökningen för tillfället. Filen {$a->item} har inte laddats upp. Försök igen senare.';
$string['clamfailed'] = 'Det gick inte att köra Clam AV. Felmeddelandet var {$a}. Här är felbeskrivningen:';
$string['clamfailureonupload'] = 'Vid ClamAV-fel';
$string['configclamactlikevirus'] = 'Betrakta filer som virus';
$string['configclamdonothing'] = 'Betrakta filer som OK';
$string['configclamfailureonupload'] = 'Om "Behandla filer som OK" är markerat flyttas filerna till målkatalogen. Om "Neka uppladdning, försök igen" är markerat uppmanas användaren att försöka igen senare. Om "Behandla filer som virus" är markerat flyttas filer till karantänområdet eller tas bort. <b>Varning:</b> Om detta alternativ är valt och Clam av någon anledning inte körs (vanligtvis på grund av en ogiltig sökväg till clam), flyttas alla uppladdade filer till det angivna karantänområdet eller tas bort.';
$string['configclamtryagain'] = 'Neka uppladdning, försök igen';
$string['errorcantopensocket'] = 'Anslutningen till Unix domain socket resulterade i felet {$a}';
$string['errorclamavnoresponse'] = 'ClamAV svarar inte. Kontrollera status för daemon.';
$string['errornounixsocketssupported'] = 'Unix domän socket transport stöds inte av det här systemet. Använd kommandoradsalternativet i stället.';
$string['invalidpathtoclam'] = 'Moodle är inställt så att clam ska köras när någon laddar upp filer men den sökväg som är angiven för Clam AV, {$a}, är inte giltig.';
$string['pathtoclam'] = 'Kommandorad';
$string['pathtoclamdesc'] = 'Om körningsmetoden är inställd på "kommandorad" anger du sökvägen till ClamAV här. På Linux blir detta /usr/bin/clamscan eller /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Unix domain socket';
$string['pathtounixsocketdesc'] = 'Om körningsmetoden är inställd på "Unix domain socket" anger du sökvägen till ClamAV Unix-socket här. På Debian Linux kommer detta att vara /var/run/clamav/clamd.ctl. Se till att clamav daemon har läsåtkomst till uppladdade filer. Det enklaste sättet att säkerställa att detta är att lägga till "clamav" -användare i din webbservergrupp ("www-data" på Debian Linux).';
$string['pluginname'] = 'ClamAV Antivirus';
$string['privacy:metadata'] = 'Pluginmodulen ClamAV lagrar ingen personinformation.';
$string['quarantinedir'] = 'Karantänmapp';
$string['runningmethod'] = 'Körningsmetod';
$string['runningmethodcommandline'] = 'Kommandorad';
$string['runningmethoddesc'] = 'Metod för att köra ClamAV. Kommandorads-baserad körning används som standard, men på Unix-system kan bättre prestanda erhållas med hjälp av system socketar.';
$string['runningmethodtcpsocket'] = 'TCP socket';
$string['runningmethodunixsocket'] = 'Unix domain socket';
$string['tcpsockethost'] = 'Värd för TCP socket';
$string['tcpsockethostdesc'] = 'Domännamn för ClamAV-server';
$string['tcpsocketport'] = 'TCP-port';
$string['tcpsocketportdesc'] = 'TCP-port att använda vid anslutning till ClamAV';
$string['tries'] = 'Antal skanningsförsök';
$string['tries_desc'] = 'Antalet försök som görs av ClamAV om det uppstår ett fel vid virussökningen.';
$string['tries_notice'] = 'ClamAV har försökt genomföra en virussökning {$a->tries} gånger. {$a->notice}';
$string['unknownerror'] = 'Det uppstod ett okänt fel med Clam.';
