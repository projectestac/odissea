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
 * Strings for component 'enrol_manual', language 'eu', branch 'MOODLE_34_STABLE'
 *
 * @package   enrol_manual
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Aurreratua';
$string['alterstatus'] = 'Aldatu egoera';
$string['altertimeend'] = 'Aldatu amaiera-unea';
$string['altertimestart'] = 'Aldatu hasiera-unea';
$string['assignrole'] = 'Esleitu rola';
$string['assignroles'] = 'Esleitu rolak';
$string['browsecohorts'] = 'Arakatu kohorteak';
$string['browseusers'] = 'Arakatu erabiltzaileak';
$string['confirmbulkdeleteenrolment'] = 'Ziur al zaude erabiltzaile hauen matrikula ezabatu nahi duzula?';
$string['defaultperiod'] = 'Matrikulazioaren iraupena';
$string['defaultperiod_desc'] = 'Matrikulazioaren lehenetsitako iraupena. Zero ezarriz gero, matrikulazioa modu lehenetsian mugarik gabekoa izango da.';
$string['defaultperiod_help'] = 'Matrikulazioaren lehenetsitako iraupena, erabiltzailea matrikulatu deneko unetik hasita. Desgaituz gero, matrikulazioa modu lehenetsian mugarik gabekoa izango da.';
$string['defaultstart'] = 'Matrikulazioaren lehenetsitako hasiera';
$string['deleteselectedusers'] = 'Ezabatu aukeratutako erabiltzaileen matrikulak';
$string['editselectedusers'] = 'Editatu aukeratutako erabiltzaileen matrikulak';
$string['enrolledincourserole'] = '"{$a->course}" ikastaroan "{$a->role}" rola ezarrita';
$string['enrolusers'] = 'Matrikulatu erabiltzaileak';
$string['enroluserscohorts'] = 'Matrikulatu aukeratutako erabiltzaile eta kohorteak';
$string['expiredaction'] = 'Matrikulazioaren iraungitze-ekintza';
$string['expiredaction_help'] = 'Aukeratu matrikulazioa iraungitzean exekutatuko den ekintza. Mesedez kontuan izan hainbat erabiltzaile-datu eta ezarpen ezabatuak izango direla ikastarotik desmatrikulatzean.';
$string['expirymessageenrolledbody'] = 'Kaixo {$a->user},

Mezu hau \'{$a->course}\' ikastaroan zure matrikula {$a->timeend} datan amaituko dela jakinarazteko da.

Laguntzarik behar baduzu, jarri harremanetan {$a->enroller}-(r)ekin.';
$string['expirymessageenrolledsubject'] = 'Matrikulazio-amaieraren jakinarazpena';
$string['expirymessageenrollerbody'] = '\'{$a->course}\' ikastaroko matrikulazioa hurrengo {$a->threshold} iraungituko da hurrengo erabiltzaileentzat:

{$a->users}

Euren matrikulazioa luzatzeko, sartu hemen {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Matrikulazio-amaieraren jakinarazpena';
$string['manual:config'] = 'Konfiguratu eskuzko matrikulaziorako instantziak';
$string['manual:enrol'] = 'Matrikulatu erabiltzaileak';
$string['manual:manage'] = 'Kudeatu erabiltzaileen matrikulak';
$string['manualpluginnotinstalled'] = '"Manual" plugina ez da oraindik instalatu';
$string['manual:unenrol'] = 'Desmatrikulatu erabiltzaileak ikastarotik';
$string['manual:unenrolself'] = 'Desmatrikulatu norbera ikastararotik';
$string['messageprovider:expiry_notification'] = 'Eskuzko matrikulazio-amaieraren jakinarazpenak';
$string['now'] = 'Orain';
$string['pluginname'] = 'Eskuzko matrikulazioa';
$string['pluginname_desc'] = 'Eskuzko matrikulazio pluginak erabiltzaileak eskuz matrikulatzea ahalbidetzen dio baimenak dituen erabiltzaile bati (irakaslea adibidez) ikastaroaren kudeaketa ezarpenetako esteka baten bitartez. Gehigarria normalean gaituta egon beharko litzateke, kontuan izanda beste matrikulazio-gehigarri batzuk (matrikulazio automatikoa adibidez) horren beharra dutela.';
$string['privacy:metadata'] = 'Eskuzko matrikulazio-pluginak ez du datu pertsonalik biltzen.';
$string['selectcohorts'] = 'Aukeratu kohorteak';
$string['selection'] = 'Aukeraketa';
$string['selectusers'] = 'Aukeratu erabiltzaileak';
$string['status'] = 'Gaitu eskuzko matrikulazioa';
$string['status_desc'] = 'Baimendu ikastarorako sarbidea barruan matrikulatutako erabiltzaileei. Hau gaituta mantendu beharko litzateke kasu gehienetan.';
$string['statusdisabled'] = 'Desgaituta';
$string['statusenabled'] = 'Gaituta';
$string['status_help'] = 'Ezarpen honek erabiltzaileak eskuz matrikulatu ahalko diren zehazten du, baimenak dituen erabiltzaile batek ikastaroaren kudeaketa-ezarpenetan duen esteka baten bitartez.';
$string['unenrol'] = 'Desmatrikulatu erabiltzailea';
$string['unenrolselectedusers'] = 'Desmatrikulatu aukeratutako erabiltzaileak';
$string['unenrolselfconfirm'] = 'Ziur al zaude "{$a}" ikastarotik desmatrikulatu nahi duzula?';
$string['unenroluser'] = 'Ziur al zaude  "{$a->user}" desmatrikulatu nahi duzula "{$a}" ikastarotik?';
$string['unenrolusers'] = 'Desmatrikulatu erabiltzaileak';
$string['wscannotenrol'] = 'Pluginaren instantziak ezin du erabiltzailea id = {$a->courseid} duen ikastaroan eskuz matrikulatu.';
$string['wsnoinstance'] = 'Eskuzko matrikulazio-pluginaren instantzia ez da existitzen edo ikastaro honentzako (id = {$a->courseid}) desgaituta dago';
$string['wsusercannotassign'] = 'Ez duzu baimenik ({$a->roleid}) rola ({$a->userid}) erabiltzaileari ({$a->courseid}) ikastaroan esleitzeko.';
