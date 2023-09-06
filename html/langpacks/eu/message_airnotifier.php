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
 * Strings for component 'message_airnotifier', language 'eu', version '4.1'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Kudeatu gailuak';
$string['airnotifieraccesskey'] = 'Airnotifier-eko sarbide-gakoa';
$string['airnotifierappname'] = 'Airnotifier-en aplikazioaren izena';
$string['airnotifierfielderror'] = 'Kendu itzazu mesedez hutsuneak edo beharrezkoak ez diren karaktereak hurrengo eremutik: {$a}';
$string['airnotifiermobileappname'] = 'Aplikazio mugikorraren izena';
$string['airnotifierport'] = 'Airnotifier-en ataka';
$string['airnotifierurl'] = 'Airnotifier-en URLa';
$string['checkconfiguration'] = 'Egiaztatu eta probatu push jakinarazpenen konfigurazioa';
$string['configairnotifieraccesskey'] = 'Airnotifier-en zerbitzariarekin konektatzeko sarbide-gakoa. Sarbide-gako bat lortu dezakezu beheko "Eskatu sarbide-gakoa" estekan klik eginda (soilik erregistratutako guneentzako) edo <a href="https://apps.moodle.com">Moodle Aplikazioen Atarian</a> kontu bat sortuta.';
$string['configairnotifierappname'] = 'Aplikazio-izenaren identifikatzailea Airnotifier-en.';
$string['configairnotifiermobileappname'] = 'Mobile aplikazioaren identifikatzaile bakarra (normalean com.moodle.moodlemobile moduko zerbait)';
$string['configairnotifierport'] = 'Airnotifier-en zerbitzariarekin konektatzeko erabili behar den ataka.';
$string['configairnotifierurl'] = 'Push jakinarazpenak bidaltzeko konektatu beharreko zerbitzariaren URLa.';
$string['configured'] = 'Konfiguratuta';
$string['deletecheckdevicename'] = 'Ezabatu zure gailua: {$a->name}';
$string['deletedevice'] = 'Ezabatu gailua. Kontuan izan app batek gailua berriz ere erregistratu dezakeela. Gailua berriz agertzen jarraituz gero, desgaitu ezazu.';
$string['devicetoken'] = 'Gailuaren tokena';
$string['donotsendnotification'] = 'Ez bidali inolako jakinarazpenik';
$string['enableprocessor'] = 'Gaitu mobile jakinarazpenak.';
$string['encryptnotifications'] = 'Zifratu jakinarazpenak';
$string['encryptprocessing'] = 'Zifratzea onartzen ez duten gailuentzat';
$string['encryptprocessing_desc'] = 'Zifratutako jakinarazpenek gutxienez Android 6 ala iOS 13 eta Moodle Aplikazioaren 4.2 edo goragoko bertsioa izatea behar dute.';
$string['errorretrievingkey'] = 'Errorea gertatu da sarrera-gakoa berreskuratzean. Zure gunea erregistratuta egon behar da zerbitzu hau erabiltzeko. Zure gunea dagoeneko erregistratuta badago mesedez saiatu zure erregistroa eguneratzen. Bestela, sarbide-gako bat lortu dezakezu <a href="https://apps.moodle.com">Moodle Aplikazioen Atarian</a> kontu bat sortuta.';
$string['keyretrievedsuccessfully'] = 'Gakoa ondo berreskuratu da. Moodle aplikazioaren erabilera-estatistiketara sarbidea izateko, sortu ezazu mesedez kontu bat <a href="https://apps.moodle.com">Moodle Aplikazioen Atarian</a>.';
$string['messageprovidersempty'] = 'Ez dago mobile jakinarazpenik gaituta lehenetsitako jakinarazpenen hobespenetan.';
$string['messageproviderslow'] = 'Gailu mugikorren jakinarazpen batzuk baino ez daude gaituta lehenetsitako jakinarazpenen hobespenetan.';
$string['moodleappsportallimitswarning'] = 'Kontuan izan jakinarazpenak jaso dezakeen erabiltzaile kopurua zure Moodle aplikazioaren harpidetzaren araberakoa izango dela. Xehetasunerako, joan <a href="{$a}" target="_blank">Moodle Aplikazioen Atarira</a>.';
$string['nodevices'] = 'Ez dago erregistratutako gailurik. Gailuak automatikoki agertuko dira Moodle aplikazioa instalatu eta gune hau gehitzen duzunean.';
$string['noemailevernotset'] = '$CFG->noemailever desgaituta';
$string['noemaileverset'] = '$CFG->noemailever gaituta dago config.php fitxategian. Ezarpen honetan false ezarri edo kendu behar duzu.';
$string['nopermissiontomanagedevices'] = 'Ez duzu baimenik gailuak kudeatzeko.';
$string['notconfigured'] = 'Airnotifier zerbitzaria ez da konfiguratu eta ondorioz push jakinarazpenak ezin dira bidali.';
$string['notificationsserverconfiguration'] = 'Jakinarazpenen zerbitzariaren (Airnotifier) konfigurazioa';
$string['pluginname'] = 'Mugikorra';
$string['privacy:appiddescription'] = 'Hau erabiltzen ari den aplikazioaren identifikatzailea da.';
$string['privacy:enableddescription'] = 'Gailu hau airnotifier-erako gaituta dagoen.';
$string['privacy:metadata:date'] = 'Mezua bidali zeneko data';
$string['privacy:metadata:enabled'] = 'Airnotifier gailua gaituta dagoen edo ez.';
$string['privacy:metadata:externalpurpose'] = 'Informazio hau kanpoko gune batera bidaltzen dira funtsean erabiltzailearen gailura helarazi ahal izateko.';
$string['privacy:metadata:fullmessage'] = 'Mezu osoa';
$string['privacy:metadata:notification'] = 'Mezua jakinarazpena den edo ez.';
$string['privacy:metadata:smallmessage'] = 'Mezuaren atal bat';
$string['privacy:metadata:subject'] = 'Mezuaren gaia duen lerroa';
$string['privacy:metadata:tableexplanation'] = 'Hemen airnotifier gailuaren informazioa gordetzen da.';
$string['privacy:metadata:userdeviceid'] = 'Erabiltzailearen gailu mugikorrera lotutako IDa';
$string['privacy:metadata:userfromfullname'] = 'Mezua bidali zuen erabiltzailearen izen osoa.';
$string['privacy:metadata:userfromid'] = 'Mezuaren egilearen erabiltzaile IDa.';
$string['privacy:metadata:userid'] = 'Mezua bidali zuen erabiltzailearen IDa.';
$string['privacy:metadata:username'] = 'Erabiltzailearen erabiltzaile-izena.';
$string['privacy:metadata:usersubsystem'] = 'Plugin hau erabiltzaile-azpisistemara konektatuta dago.';
$string['privacy:subcontext'] = 'Airnotifier Mezuak';
$string['requestaccesskey'] = 'Eskatu sarbide-gakoa';
$string['sendnotificationnotenc'] = 'Bidali jakinarazpenak zifratu gabe';
$string['sendtest'] = 'Bidali probarako push jakinarazpena nire gailuetara';
$string['sendtestconfirmation'] = 'Probarako push jakinarazpena bidaliko da gune honetara konektatzeko erabiltzen dituzun gailuetara. Egiaztatu ezazu mesedez zure gailuak Internetera konektatuta daudela eta mobile aplikazioa ez dagoela irekita (push jakinarazpenak soilik jasotzen dira atzeko planoan jasotzen direnean).';
$string['serverconnectivityerror'] = 'Gune hau ez da jakinarazpenen zerbitzariarekin ({$a}) konektatzeko gai';
$string['showhide'] = 'Gaitu/desgaitu gailua';
$string['sitemustberegistered'] = 'Airnotifier instantzia publikoa erabili ahal izateko, zure gunea erregistratuta egon behar da. Bestela, sarbide-gako bat lortu dezakezu <a href="https://apps.moodle.com">Moodle Aplikazioen Atarian</a> kontu bat sortuta.';
$string['unknowndevice'] = 'Gailu ezezaguna';
$string['userdevices'] = 'Erabiltzaile-gailuak';
$string['view_notification'] = 'Ukitu ikusteko';
