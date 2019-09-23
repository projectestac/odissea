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
 * Strings for component 'enrol_paypal', language 'eu', branch 'MOODLE_36_STABLE'
 *
 * @package   enrol_paypal
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Esleitu rola';
$string['businessemail'] = 'PayPal business-eko e-posta helbidea';
$string['businessemail_desc'] = 'Zure PayPal business-eko e-posta helbidea';
$string['cost'] = 'Matrikularen prezioa';
$string['costerror'] = 'Matrikularen prezioa ez da zenbaki bat';
$string['costorkey'] = 'Mesedez, aukeratu ondorengo matrikulazio-motetako bat.';
$string['currency'] = 'Moneta';
$string['defaultrole'] = 'Lehenetsitako rol-esleipena';
$string['defaultrole_desc'] = 'Aukeratu PayPal matrikulazioa egitean esleitu beharreko rola zein izan behar den';
$string['enrolenddate'] = 'Amaiera-data';
$string['enrolenddate_help'] = 'Gaituz gero, erabiltzaileek matrikula egin dezakete data honetara arte bakarrik.';
$string['enrolenddaterror'] = 'Matrikulatzeko amaiera-data ezin da izan hasiera-data baino lehenagokoa';
$string['enrolperiod'] = 'Matrikulazioaren iraupena';
$string['enrolperiod_desc'] = 'Matrikulazioaren lehenetsitako iraupena. Zero ezarriz gero, matrikulazioa modu lehenetsian mugarik gabekoa izango da.';
$string['enrolperiod_help'] = 'Matrikulazioaren iraupena, erabiltzaileak bere burua matrikulatzen duen unetik hasita. Desgaituz gero, matrikulazioa mugarik gabekoa izango da.';
$string['enrolstartdate'] = 'Hasiera-data';
$string['enrolstartdate_help'] = 'Gaituz gero, erabiltzaileek data honetatik aurrera soilik matrikulatu ahalko dute.';
$string['errdisabled'] = 'PayPal matrikulazio-plugina desgaituta dago eta ez du ordainketa-jakinarazpenik kudeatzen.';
$string['erripninvalid'] = 'Bat-bateko ordainketaren jakinarazpena ez da PayPal bitartez egiaztatu.';
$string['errpaypalconnect'] = 'Ezin izan da {$a->url} helbidera konektatu bat-bateko ordainketaren jakinarazpena egiaztatzeko: {$a->result}';
$string['expiredaction'] = 'Matrikulazioaren iraungitze-ekintza';
$string['expiredaction_help'] = 'Aukeratu matrikulazioa iraungitzean exekutatuko den ekintza. Mesedez kontuan izan hainbat erabiltzaile-datu eta ezarpen ezabatuak izango direla ikastarotik desmatrikulatzean.';
$string['mailadmins'] = 'Jakinarazi kudeatzaileari';
$string['mailstudents'] = 'Jakinarazi ikasleei';
$string['mailteachers'] = 'Jakinarazi irakasleei';
$string['messageprovider:paypal_enrolment'] = 'PayPal matikulazioaren mezuak';
$string['nocost'] = 'Ez dago ikastaro honen matrikulazioarekin lotutako kosturik!';
$string['paypalaccepted'] = 'Paypal ordainketak onartu dira';
$string['paypal:config'] = 'Konfiguratu PayPal matrikulazio-instantziak';
$string['paypal:manage'] = 'Kudeatu matrikulatutako erabiltzaileak';
$string['paypal:unenrol'] = 'Desmatrikulatu erabiltzaileak ikastarotik';
$string['paypal:unenrolself'] = 'Desmatrikulatu norbera ikastararotik';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'PayPal moduluak ordaindutako ikastaroak konfiguratzeko aukera ematen du. Ikastaroren bateko kostua zero bada ikasleei ikastaroan sartzeko ez zaie ordaintzea eskatuko. Lehenetsitako gune mailako kostua zehazten da hemen eta ondoren ikastaro bakoitzaren ezarpenetan kostua zehaztu daiteke. Ikastaroaren kostuak gune mailakoa baliogabetzen du.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'PayPal matrikulazioetarako PayPal transakzioen inguruko informazioa.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Ordainketaren jasotzailearen e-posta helbidea edo PayPal kontuaren IDa (hau da, saleroslea).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'Saltzen den ikastaroaren IDa.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'Ikastaroaren matrikulazio-instantziaren IDa.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Saldu den matrikularen ikastaroaren izen osoa.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Erosleak PayPal webgunean ordainketa-oharraren eremuan idatzitako oharra.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Eroslearen izen osoa.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'Itzulketa, atzera botatzea edo bertan behera utzi eta atzera botatzea gertatzekotan, hau izango da jatorrizko transakzioaren transakzio-IDa.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Ordainketaren egoera.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Ordainketa eCheck baten bitartez (echeck), PayPal balantzearekin, kreditu-txartelarekin edo bat-bateko transferentziarekin (instant) egin den gordetzen du.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'Ordainketa ordaindu gabe egotearen arrazoia (ordaindu gabe dagoenean).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'Ordainketa atzera botata (Reversed), itzulita (Refunded), bertan behera utzi eta atzera botata (Canceled_Reversal) edo ukatua (Denied) egotearen arrazoia (egoera horietako bat denean).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'Ordainketaren jasotzailearen e-posta helbidea (hau da, saleroslea).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'Ordainketaren jasotzailearen PayPal kontuaren IDa (hau da, saleroslea).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Ordainketa egitean kobratutako zerga kopurua.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'Moodle-ri PayPal-eko ordainketa buruz jakinarazi zaion unea.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Saleroslean jatorrizko transakzioaren eroslearen ordainketaren zenbaki identifikatzailea, kasua erregistratu duena hain zuzen ere';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'Ikastaro-matrikulazioa erosi zuen erabiltzailearen IDa.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'PayPal matrikulazio-pluginak erabiltzaile-datuak Moodle-tik PayPal-eko webgunera bidaltzen ditu.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Ikastaroa erosten ari den erabiltzailearen helbidea.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'Ikastaroa erosten ari den erabiltzailearen hiria.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Ikastaroa erosten ari den erabiltzailearen herrialdea.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Erabiltzailearen (eroslea) IDa, ikastaroaren IDa eta matrikulazio-instantziaren IDa dituen gidoiaz banatutako katea.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'Ikastaroa erosten ari den erabiltzailearen e-posta helbidea.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Ikastaroa erosten ari den erabiltzailearen izena.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Ikastaroa erosten ari den erabiltzailearen abizena.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Ikastaroa erosten ari den erabiltzailearen izen osoa.';
$string['processexpirationstask'] = 'PayPal matrikulazioen iraungitze-jakinarazpenen bidalketa zeregina';
$string['sendpaymentbutton'] = 'Bidali ordainketa Paypal bidez';
$string['status'] = 'Baimendu PayPal bidezko matrikulazioa';
$string['status_desc'] = 'Baimendu erabiltzaileak PayPal erabiltzen ikastaro batean matrikulatzeko lehenetsitako balio gisa.';
$string['transactions'] = 'PayPal-eko transakzioak';
$string['unenrolselfconfirm'] = 'Ziur al zaude "{$a}" ikastarotik desmatrikulatu nahi duzula?';
