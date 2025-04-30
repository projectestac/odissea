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
 * Strings for component 'antivirus_clamav', language 'ro', version '4.4'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'În acest moment apare o problemă cu scanarea AntiVirus. Fișierul dumneavoastră {$a->item} nu a fost încărcat. Vă rugăm să încercați din nou mai târziu.';
$string['clamfailed'] = 'Programul Clam AV nu a putut fi rulat.  Mesajul de eroare primit a fost {$a}. Iată rezultatul produs de Clam:';
$string['clamfailureonupload'] = 'Eșec al ClamAV';
$string['configclamactlikevirus'] = 'Consideră fișierele ca fiind virusuri';
$string['configclamdonothing'] = 'Consideră fișierele ca fiind OK';
$string['configclamfailureonupload'] = 'Dacă este selectat „Tratați fișierele ca OK”, fișierele vor fi mutate în directorul de destinație. Dacă este selectat „Refuzați încărcarea, încercați din nou”, utilizatorul va fi solicitat să încerce din nou mai târziu. Dacă este selectat „Tratați fișierele ca viruși”, fișierele vor fi mutate în zona de carantină sau șterse. Avertisment: Cu această opțiune, dacă dintr-un anumit motiv clam nu reușește să ruleze (de obicei din cauza unui pathtoclam nevalid), atunci TOATE fișierele încărcate vor fi mutate în zona de carantină dată sau șterse.';
$string['configclamtryagain'] = 'Refuzați încărcarea, încercați din nou';
$string['errorcantopensocket'] = 'Conectarea la Unix domain socket a returnat eroarea {$a}';
$string['errorclamavnoresponse'] = 'ClamAV nu răspunde; verificați statusul de rulare a procesului.';
$string['errornounixsocketssupported'] = 'Transportul conexiunilor de sistem Unix nu sunt acceptate de acest sistem. Vă rugăm să folosiți în schimb linia de comandă.';
$string['invalidpathtoclam'] = 'Calea către Clam AV, {$a}, este invalidă.';
$string['pathtoclam'] = 'Linie de comandă';
$string['pathtoclamdesc'] = 'Dacaă metoda de rulare este setată la "linie de comandă", inserați aici calea către ClamAV. Pe Linux va fi /usr/bin/clamscan or /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Conexiuni de sistem Unix';
$string['pathtounixsocketdesc'] = 'Dacă metoda de rulare este setată la „Unix socket de domeniu”, introduceți calea către socketul ClamAV Unix aici. Pe Debian Linux acesta va fi /var/run/clamav/clamd.ctl. Vă rugăm să vă asigurați că demonul clamav are acces de citire la fișierele încărcate, cel mai simplu mod de a vă asigura că este să adăugați utilizator „clamav” la grupul dvs. de servere web („www-data” pe Debian Linux).';
$string['pluginname'] = 'Antivirus ClamAV';
$string['privacy:metadata'] = 'Plugin-ul ClamAV Antivirus nu stochează date personale.';
$string['quarantinedir'] = 'Director carantină';
$string['runningmethod'] = 'Metodă de rulare';
$string['runningmethodcommandline'] = 'Linie de comandă';
$string['runningmethoddesc'] = 'Metoda prin care se rulează ClamAV. Linia de comandă este utilizată în mod iumplicit, totuși, pe sistemele Unix se obține o performanță mai bună folosind conexiuni de sistem.';
$string['runningmethodtcpsocket'] = 'Soclu TCP';
$string['runningmethodunixsocket'] = 'Conexiuni de sistem Unix';
$string['tcpsockethost'] = 'Soclul TCP al gazdei';
$string['tcpsockethostdesc'] = 'Numele de domeniu al serverului ClamAV';
$string['tcpsocketport'] = 'Port soclu TCP';
$string['tcpsocketportdesc'] = 'Portul de utilizat la conectarea la ClamAV';
$string['tries'] = 'Încercări de scanare';
$string['tries_desc'] = 'Numărul de încercări făcute de ClamAV dacă apare o eroare în timpul procesului de scanare.';
$string['tries_notice'] = 'Scanarea Clamav a încercat de {$a->tries} ori.
{$a->notice}';
$string['unknownerror'] = 'A apărut o eroare necunoscută ClamAV.';
