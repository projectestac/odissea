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
 * Strings for component 'enrol_flatfile', language 'eu', branch 'MOODLE_34_STABLE'
 *
 * @package   enrol_flatfile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'Fitxategien kodifikazioa';
$string['expiredaction'] = 'Matrikulazioaren iraungitze-ekintza';
$string['expiredaction_help'] = 'Aukeratu matrikulazioa iraungitzean exekutatuko den ekintza. Mesedez kontuan izan hainbat erabiltzaile-datu eta ezarpen ezabatuak izango direla ikastarotik desmatrikulatzean.';
$string['filelockedmail'] = 'Cron prozesuak ezin du ezabatu matrikulazioak egiteko ({$a}) fitxategian oinarriturik erabiltzen ari zaren testu-fitxategia. Normalean honen zergatia zure baimenak desegokiak izatean datza. Baimenak ezar itzazu Moodle-k fitxategia ezabatu ahal izateko, mesedez. Bestela, prozesua errepikatu egingo da.';
$string['filelockedmailsubject'] = 'Errore larria: Matrikulazio-fitxategia';
$string['flatfileenrolments'] = 'Testu-soileko fitxategi (CSV) bidezko matrikulazioak';
$string['flatfile:manage'] = 'Kudeatu erabiltzaileen matrikulazioak eskuz';
$string['flatfilesync'] = 'Testu-soileko fitxategi bidezko sinkronizazioa';
$string['flatfile:unenrol'] = 'Desmatrikulatu erabiltzaileak ikastarotik eskuz';
$string['location'] = 'Fitxategiaren kokapena';
$string['location_desc'] = 'Zehaztu matrikulazio-fitxategiaren helbide osoa. Fitxategi hau automatikoki ezabatzen da prozesatu ondoren.';
$string['mapping'] = 'Testu-soileko fitxategiko rolen lotura';
$string['messageprovider:flatfile_enrolment'] = 'Testu-soileko fitxategiko matrikulazio-meuzak.';
$string['notifyadmin'] = 'Jakinarazi kudeatzaileari';
$string['notifyenrolled'] = 'Jakinarazi matrikulatutako erabiltzaileei';
$string['notifyenroller'] = 'Jakinarazi matrikulazioen arduradunari';
$string['pluginname'] = 'Testu-soileko fitxategia (CSV)';
$string['pluginname_desc'] = 'Metodo honek zehazten duzun helbideko formatu bereziko testu-fitxategiak modu errepikakorrean egiaztatu eta prozesatuko ditu.
Fitxategia errenkada bakoitzean komaz banatutako 4 edo 6 eremu dituela suposatuko da:

 operation, role, user idnumber, course idnumber [, starttime [, endtime]]

eremuok balio hauek izan ditzakete:

* operation - add | del
* role - student | teacher | teacheredit
* user idnumber - erabiltzaile taulako ID zenbakia
* course idnumber - ierabiltzaile taulako ID zenbakia
* starttime - hasiera data (Unix-eko epoch-etik igarotako segunduak) - aukeakoa
* endtime - bukaera data (Unix-eko epoch-etik igarotako segunduak) - aukeakoa

Honen moduko zerbait izan daiteke:
<pre class="informationbox">
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'Testu-soileko fitxategi (CSV) bidezko matrikulazio-pluginak enrol_flatfile taulan etorkizuneko matrikulazioen inguruko informazioa gorde dezake.';
$string['privacy:metadata:enrol_flatfile:action'] = 'Matrikulazio-ekintza espero den data.';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'Matrikulazioarekin lotutako ikastaroaren IDa.';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'Esleitu edo kenduko den rolaren IDa.';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'Matrikulazio-aldaketa amaitzen den unea.';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'Matrikulazio-aldaketa honen aldatze-unea.';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'Matrikulazio-aldaketa hasten den unea.';
$string['privacy:metadata:enrol_flatfile:userid'] = 'Matrikulazioarekin lotutako erabiltzailearen IDa.';
