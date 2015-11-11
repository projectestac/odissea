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
 * Strings for component 'tool_messageinbound', language 'ca', branch 'MOODLE_28_STABLE'
 *
 * @package   tool_messageinbound
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['component'] = 'Component';
$string['description'] = 'Descripció';
$string['domain'] = 'Domini del correu electrònic';
$string['edit'] = 'Edita';
$string['editinghandler'] = 'S\'està editant {$a}';
$string['enabled'] = 'Habilitat';
$string['handlerdisabled'] = 'S\'ha inhabilitat el gestor de correu amb el qual heu intentat posar-vos en contacte. El missatge no es pot processar en aquest moment.';
$string['incomingmailconfiguration'] = 'Configuració del correu electrònic entrant';
$string['invalid_recipient_handler'] = 'Si es rep un missatge vàlid, però el remitent no pot ser autenticat, aquest missatge s\'emmagatzema al servidor de correu, i es contacta amb l\'usuari emprant l\'adreça electrònica del seu perfil d\'usuari. Es dóna a l\'usuari l\'oportunitat de respondre per confirmar l\'autenticitat del missatge original.

Aquest gestor processa aquestes respostes.

No es pot inhabilitar la verificació del remitent d\'aquest gestor, perquè és possible que l\'usuari respongui des d\'una adreça electrònica incorrecta, si el seu client de configuració és incorrecte.';
$string['mailsettings'] = 'Paràmetres de correu';
$string['messageinboundhostpass'] = 'Contrasenya';
$string['messageinboundhosttype'] = 'Tipus de servidor';
$string['messageinboundhostuser'] = 'Nom d\'usuari';
$string['messageprocessingsuccess'] = '{$a->plain}

Si no voleu tornar a rebre aquestes notificacions, editeu les preferències de la vostra missatgeria obrint {$a->messagepreferencesurl} al navegador.';
$string['messageprocessingsuccesshtml'] = '{$a->html} <p> Si no voleu tornar a rebre aquestes notificacions, <a href="{$a->messagepreferencesurl}"> editeu les preferències de la vostra missatgeria </a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Missatge per a confirmar que sou el remitent d\'un missatge entrant';
$string['messageprovider:messageprocessingerror'] = 'Missatge quan no es pot processar un missatge entrant';
$string['messageprovider:messageprocessingsuccess'] = 'Confirmació que un missatge s\'ha processat correctament';
$string['name'] = 'Nom';
$string['oneday'] = 'Un dia';
$string['onehour'] = 'Una hora';
$string['oneweek'] = 'Una setmana';
$string['oneyear'] = 'Un any';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'Validar l\'adreça de l\'emissor';
$string['validateaddress'] = 'Validar l\'adreça de l\'emissor';
$string['validateaddress_help'] = 'Quan es rep un missatge d\'un usuari, Moodle intenta validar el missatge comparant l\'adreça electrònica del remitent amb l\'adreça electrònica del seu perfil d\'usuari.

Si el remitent no coincideix, s\'envia una notificació a l\'usuari perquè confirmi que realment va enviar el missatge de correu electrònic.

Si s\'inhabilita aquest paràmetre, no es verificarà de cap de les maneres l\'adreça electrònica del remitent.';
