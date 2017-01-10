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
 * Strings for component 'message_email', language 'eu', branch 'MOODLE_31_STABLE'
 *
 * @package   message_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowattachments'] = 'Baimendu eranskinak';
$string['allowusermailcharset'] = 'Erabiltzaileari karakter-multzoa aldatzen utzi';
$string['configallowusermailcharset'] = 'Aukera hau aktibatuta, erabiltzaileek mezu elektronikoak idazteko bere karaktere-multzoa ezarri ahal izango dute.';
$string['configmailnewline'] = 'E-posta mezuetan erabilitako karaktere berriak. RFC 822bis-en arabera, CRLF beharrezkoa da; zenbait zerbitzarik automatikoki bihurtzen dute LF-tik CRLF-ra, beste batzuk oker bihurtzen dute CRLF-tik CRCRLF-ra eta, azkenik, beste batzuk (qmail, kasu) LF hutsa duten mezuak baztertu egiten dituzte. Saiatu ezarpen hau aldatzen entregatu gabeko edo lerro bikoitz berriak dituzten mezuekin arazoak badituzu.';
$string['confignoreplyaddress'] = 'Batzuetan e-postak erabiltzaileak bidaltzen ditu (ad., foro bateko mezuak). E-posta helbidea "Norena" gisa azalduko da hartzaileek zuzenean erantzuteko posibilitatea ez duten kasuetan (ad., erabiltzaileak bere helbidea ezkutatu nahi duenean).';
$string['configsitemailcharset'] = 'Ezarpen honek zehazten du berezko karaktere-multzoa gunetik bidalitako e-posta guztietarako.';
$string['configsmtphosts'] = 'Moodle-k posta-mezuak bidaltzeko erabiliko duen SMTP zerbitzari lokal bat edo gehiagoren izenak hemen idatzi (ad., \'posta.a.eus\' edo \'posta.a.eus;posta.b.eus\'). Berezkoa ez den ataka bat zehazteko (25 ez den bat adibidez), [zerbitzaria]:[ataka] sintaxia erabili dezakezu (ad., \'posta.a.eus:587\'). Konexio seguruak erabiltzeko, 465 ataka erabili ohi da SSLrekin, 587 ataka TLSrekin, zehaztu segurtasun-protokoloa behean. Zuriz uzten baduzu, Moodle-k posta bidaltzeko lehenetsitako PHP metodoa erabiliko du.';
$string['configsmtpmaxbulk'] = 'SMPT saioko bidalitako gehienezko mezu-kopurua. Mezuak taldekatzeak arindu egin dezake e-posta bidalketa. 2tik bheerako baloreek e-posta bakoitzeko SMTP saio berria sortarazten dute.';
$string['configsmtpsecure'] = 'SMTP zerbitzariak konexio segurua behar badu, ezarri protokolo-mota zuzena.';
$string['configsmtpuser'] = 'Lehenago SMTP zerbitzaria zehaztu baduzu, eta zerbitzariak autentifikazioa behar badu, erabiltzaile-izena eta pasahitza hemen idatzi.';
$string['email'] = 'Bidali e-posta bidezko jakinarazpenak hona';
$string['emailonlyfromnoreplyaddress'] = 'Beti bidali nahi duzu e-posta ez-erantzun moduko helbide batetik?';
$string['ifemailleftempty'] = 'Utzi hutsik jakinarazpenak hona bidaltzeko: {$a}';
$string['mailnewline'] = 'Lerro berriaren karaktereak e-postan';
$string['none'] = 'Bat ere ez';
$string['noreplyaddress'] = 'Ez-erantzun helbidea';
$string['pluginname'] = 'E-posta';
$string['sitemailcharset'] = 'Karaktere-multzoa';
$string['smtpauthtype'] = 'SMTP autentifikazio-mota';
$string['smtphosts'] = 'SMTP ostalariak';
$string['smtpmaxbulk'] = 'SMTP saiorako muga';
$string['smtppass'] = 'SMTP pasahitza';
$string['smtpsecure'] = 'SMTP segurtasuna';
$string['smtpuser'] = 'SMTP erabiltzaile-izena';
