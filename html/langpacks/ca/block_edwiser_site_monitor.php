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
 * Strings for component 'block_edwiser_site_monitor', language 'ca', version '4.1'.
 *
 * @package     block_edwiser_site_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeusers'] = 'Actius';
$string['cannotshowonsidebar'] = 'No es pot mostrar el gràfic d\'ús a la barra lateral. Mogueu el bloc a la regió de contingut per a poder-lo veure.';
$string['changelog'] = 'Registre de canvis';
$string['checksettings'] = 'Comproveu <a target="_blank" href="{$a->link}">{$a->text}</a>';
$string['comeswith'] = 'Ve amb: {$a}';
$string['configtitle'] = 'Títol del bloc Monitor del lloc Edwiser';
$string['contactus'] = 'Contacteu amb nosaltres';
$string['cpu'] = 'CPU';
$string['cpucommandnotallowed'] = 'Ordre <strong>/proc/cpuinfo</strong> -- S\'ha denegat el permís';
$string['cpuhigherlimit'] = 'Límit superior de CPU';
$string['cpuhigherlimit_help'] = 'Límit superior d\'ús de la CPU';
$string['cpulimit_invalid'] = 'Introduïu un límit de CPU vàlid';
$string['cpulimit_overlap'] = 'Introduïu un límit de CPU vàlid. El límit superior no pot ser igual o menor al límit inferior';
$string['cpulowerlimit'] = 'Límit inferior de CPU';
$string['cpulowerlimit_help'] = 'Límit inferior d\'ús de la CPU';
$string['cpuusage'] = 'Ús de la CPU';
$string['crontask'] = 'Monitor del lloc Edwiser - Estadístiques d\'ús de les darreres 24 hores';
$string['deletedusers'] = 'S\'ha esborrat';
$string['edwiser_site_monitor:addinstance'] = 'Afegeix un nou bloc de monitoratge del lloc';
$string['edwiser_site_monitor:myaddinstance'] = 'Afegeix un nou monitor del lloc al Tauler';
$string['edwiserplugins'] = 'Connectors Edwiser';
$string['emailfailed'] = 'No s\'ha pogut enviar el correu-e.';
$string['emailsent'] = 'S\'ha enviat el correu-e.';
$string['emailsuccess'] = 'El vostre missatge s\'ha enviat correctament. Gràcies.';
$string['enablethreshold'] = 'Habilita els llindars límit';
$string['enablethreshold_help'] = 'Això habilitarà les comprovacions de llindars i enviarà un correu-e si l\'ús és menor que el límit inferior o més gran que el límit superior';
$string['errorfetching'] = 'S\'ha produït un error en baixar el fitxer ZIP del connector. <b>{$a}</b>';
$string['errorfetchingexist'] = 'S\'ha produït un error en baixar el fitxer ZIP del connector: La destinació ja existeix. <b>{$a}</b>';
$string['errors'] = 'Errors';
$string['failed'] = 'Ha fallat';
$string['hader-threshold'] = 'Llindar';
$string['header-current'] = 'Actual';
$string['header-expected'] = 'Baix/Alt';
$string['header-type'] = 'Tipus';
$string['high'] = 'Alt';
$string['highusage'] = 'Ús alt';
$string['installnew'] = 'Instal·la un nou connector';
$string['invalidjsonfile'] = 'Llista de productes Edwiser no vàlida';
$string['invalidzip'] = 'Fitxer zip no vàlid. <b>{$a}</b>';
$string['knowmore'] = 'Més detalls';
$string['last24hoursusage'] = 'Ús en les darreres 24 hores';
$string['livestatusrefreshrate'] = 'Període d\'actualització';
$string['livestatusrefreshrate_help'] = 'Període d\'actualització de la pestanya d\'estat en temps real, en segons';
$string['livestatusrefreshrate_invalid'] = 'Introduïu un valor vàlid pel període d\'actualització en segons';
$string['liveusage'] = 'Ús en temps real';
$string['liveusers'] = 'Usuaris en temps real';
$string['low'] = 'Baix';
$string['lowusage'] = 'Ús baix';
$string['memory'] = 'Memòria';
$string['memorycommandnotallowed'] = 'Ordre <strong>free</strong> -- S\'ha denegat el permís';
$string['memoryhigherlimit'] = 'Límit superior de memòria';
$string['memoryhigherlimit_help'] = 'Límit superior per a l\'ús de la memòria';
$string['memorylimit_invalid'] = 'Introduïu un límit de memòria vàlid';
$string['memorylimit_overlap'] = 'Introduïu un límit de memòria vàlid. El límit superior no pot ser igual o menor al límit inferior';
$string['memorylowerlimit'] = 'Límit inferior de memòria';
$string['memorylowerlimit_help'] = 'Límit inferior per a l\'ús de la memòria';
$string['memoryusage'] = 'Ús de la memòria';
$string['messageprovider:notifications'] = 'Actualitzacións i notícies d\'Edwiser';
$string['moderateusage'] = 'Ús moderat';
$string['news'] = 'Actualitzacións i notícies d\'Edwiser';
$string['noupdates'] = 'Tot és al dia.';
$string['otherplugins'] = 'Altres connectors';
$string['pluginname'] = 'Monitor del lloc Edwiser';
$string['policy'] = 'Estic d\'acord amb la <a href="{$a}" target="_blank">política de privadesa</a>';
$string['privacy:metadata'] = 'El bloc de monitoratge del lloc mostra informació sobre el servidor.';
$string['privacy:metadata:block_edwiser_site_monitor:cpu'] = 'Ús de la CPU del lloc quan es registra.';
$string['privacy:metadata:block_edwiser_site_monitor:memory'] = 'Ús de la memòria del lloc quan es registra.';
$string['privacy:metadata:block_edwiser_site_monitor:storage'] = 'Ús de l\'emmagatzematge del lloc quan es registra.';
$string['privacy:metadata:block_edwiser_site_monitor:tableexplanation'] = 'Emmagatzema l\'ús de cpu, memòria i disc del lloc web.';
$string['privacy:metadata:block_edwiser_site_monitor:time'] = 'Hora en què es registra l\'ús.';
$string['recommendation'] = 'Connectors recomanats';
$string['requirehigherversion'] = 'Necessita la versió de Moodle: <b>{$a}</b>';
$string['storage'] = 'Emmagatzematge';
$string['storagehigherlimit'] = 'Límit superior de l\'emmagatzematge';
$string['storagehigherlimit_help'] = 'Límit superior per a l\'ús de l\'emmagatzematge';
$string['storagelimit_invalid'] = 'Introduïu un límit d\'emmagatzematge vàlid';
$string['storagelimit_overlap'] = 'Introduïu un límit d\'emmagatzematge vàlid. El límit superior no pot ser igual o menor al límit inferior';
$string['storagelowerlimit'] = 'Límit inferior de l\'emmagatzematge';
$string['storagelowerlimit_help'] = 'Límit inferior per a l\'ús de l\'emmagatzematge';
$string['storageusage'] = 'Ús de l\'emmagatzematge';
$string['suspendedusers'] = 'Suspès';
$string['thanksmessage'] = '<div style="background-color: #efefef; -webkit-text-size-adjust: none !important; margin: 0; padding: 70px 70px 70px 70px;"><table id="template_container" style="text-align: center; padding-bottom: 20px; background-color: rgb(223, 223, 223); box-shadow: rgba(0, 0, 0, 0.024) 0px 0px 0px 3px !important; border-radius: 6px !important; margin: auto;" border="0" width="500" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="background-color: #1177d1;border-top-left-radius: 6px !important;border-top-right-radius: 6px !important;border-bottom: 0;font-family: Arial;font-weight: bold;line-height: 100%;vertical-align: middle;">
<center><img style="height: 60px;" src="https://edwiser.org/wp-content/uploads/2016/07/edwiser-logoalternate.png"></center>
</td>
</tr>
<tr>
<td style="padding: 20px; background-color: #dfdfdf; border-radius: 6px !important;" align="center" valign="top">
<div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Hi {$a->user},</div><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;"><br>Gràcies per posar-vos en contacte amb nosaltres.<br><br> El nostre equip d\'assistència respondrà en les properes 24 hores.</div><br><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Aquest és un correu-e autogenerat. Per qüestions addicionals o demanar ajuda, podeu escriure\'ns a {$a->email}</div></td></tr></tbody></table><br>
</div>';
$string['thankssubject'] = 'Gràcies per posar-vos en contacte amb nosaltres.';
$string['thresholdheader'] = 'Llindar límit';
$string['today'] = 'Avui';
$string['unabletoloadplugindetails'] = 'No s\'han pogut carregar els detalls del connector <b>{$a}</b>';
$string['unabletounzip'] = 'No s\'ha pogut descomprimir <b>{$a}</b>';
$string['usageemailsubject'] = '{$a}: Monitor del lloc Edwiser - Alerta d\'ús';
$string['users'] = 'Usuaris';
$string['xaxistitle'] = 'Hora';
$string['yaxistitle'] = 'Ús(%)';
