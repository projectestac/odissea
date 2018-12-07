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
 * Strings for component 'tool_messageinbound', language 'ca', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_messageinbound
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'Nom de la classe';
$string['component'] = 'Component';
$string['configmessageinboundhost'] = 'L\'adreça del servidor amb què Moodle ha de comprovar el correu. Per especificar un port diferent del predeterminat, podeu utilitzar el format [server]:[port]; per exemple: mail.example.com:587. Si deixeu aquest camp buit, Moodle utilitzarà el port per defecte per al tipus de servidor que correu que especifiqueu.';
$string['defaultexpiration'] = 'Període per defecte d\'expiració de l\'adreça';
$string['defaultexpiration_help'] = 'Quan una adreça de correu electrònic ha estat generada per un gestor, es pot configurar que caduqui de forma automàtica després d\'un període de temps, i que no es pugui utilitzar més. És aconsellable establir un període de caducitat.';
$string['description'] = 'Descripció';
$string['domain'] = 'Domini del correu electrònic';
$string['edit'] = 'Edita';
$string['edithandler'] = 'Edita els paràmetres per al gestor de {$a}';
$string['editinghandler'] = 'S\'està editant {$a}';
$string['enabled'] = 'Habilitat';
$string['fixedenabled_help'] = 'No podeu canviar l\'estat d\'aquest gestor. Segurament altres gestors el necessiten.';
$string['fixedvalidateaddress'] = 'Valida l\'adreça del remitent';
$string['fixedvalidateaddress_help'] = 'No podeu canviar l\'adreça de validació per a aquest gestor. Segurament el gestor requereix un paràmetre especific.';
$string['handlerdisabled'] = 'S\'ha inhabilitat el gestor de correu amb el qual heu intentat posar-vos en contacte. El missatge no es pot processar en aquest moment.';
$string['incomingmailconfiguration'] = 'Configuració del correu electrònic entrant';
$string['incomingmailserversettings'] = 'Paràmetres del servidor del correu electrònic entrant';
$string['incomingmailserversettings_desc'] = 'Moodle té la capacitat de connectar-se a servidors IMAP configurats de manera apropiada. Podeu especificar els paràmetres que heu utilitzat per connectar-vos al vostre servidor IMAP aquí.';
$string['invalidrecipientdescription'] = 'El missatge «{$a->subject}» no s\'ha pogut autenticar, ja que fou enviat des d\'una adreça de correu diferent a la del perfil de l\'usuari. Per tal que el missatge es pugui autenticar us cal respondre a aquest missatge.';
$string['invalidrecipientdescriptionhtml'] = 'El missatge «{$a->subject}» no s\'ha pogut autenticar, ja que fou enviat des d\'una adreça de correu diferent a la del perfil de l\'usuari. Per tal que el missatge es pugui autenticar us cal respondre a aquest missatge.';
$string['invalidrecipientfinal'] = 'El missatge «{$a->subject}» no s\'ha pogut autenticar. Comproveu que esteu enviant el vostre missatge des de la mateixa adreça de correu que teniu al vostre perfil.';
$string['invalid_recipient_handler'] = 'Si es rep un missatge vàlid, però el remitent no pot ser autenticat, aquest missatge s\'emmagatzema al servidor de correu, i es contacta amb l\'usuari emprant l\'adreça electrònica del seu perfil d\'usuari. Es dóna a l\'usuari l\'oportunitat de respondre per confirmar l\'autenticitat del missatge original.

Aquest gestor processa aquestes respostes.

No es pot inhabilitar la verificació del remitent d\'aquest gestor, perquè és possible que l\'usuari respongui des d\'una adreça electrònica incorrecta, si el seu client de configuració és incorrecte.';
$string['invalid_recipient_handler_name'] = 'Gestor de destinatari invàlid';
$string['mailbox'] = 'Nom de la bústia';
$string['mailboxconfiguration'] = 'Configuració de la bústia';
$string['mailboxdescription'] = '[bústia]+subadreça@[domini]';
$string['mailsettings'] = 'Paràmetres de correu';
$string['message_handlers'] = 'Gestors de missatges';
$string['messageinbound'] = 'Missatge entrant';
$string['messageinboundenabled'] = 'Habilita el processament dels correus entrants';
$string['messageinboundenabled_desc'] = 'El processament dels correus entrants ha d\'habilitar-se per tal que els missatges siguin enviats amb la informació apropiada.';
$string['messageinboundgeneralconfiguration'] = 'Configuració general';
$string['messageinboundgeneralconfiguration_desc'] = 'El processament de missatges entrants us permet rebre i processar correu electrònic dins Moodle. Aquest té aplicacions com ara enviar les respostes enviades per correu electrònic als missatges del fòrum o afegir fitxers als fitxers privats de l\'usuari.';
$string['messageinboundhost'] = 'Servidor de correu entrant';
$string['messageinboundhostpass'] = 'Contrasenya';
$string['messageinboundhostpass_desc'] = 'Aquesta és la contrasenya que el vostre proveïdor de correu us ha d\'haver donat per entrar al vostre compte de correu.';
$string['messageinboundhostssl'] = 'Usa SSL';
$string['messageinboundhostssl_desc'] = 'Alguns servidors de correu admeten un nivell de seguretat addicional mitjançant l\'encriptació de la comunicació entre Moodle i el vostre servidor. Us recomanem que empreu aquesta encriptació SSL si el vostre servidor l\'admet.';
$string['messageinboundhosttype'] = 'Tipus de servidor';
$string['messageinboundhostuser'] = 'Nom d\'usuari';
$string['messageinboundhostuser_desc'] = 'Aquest és el nom d\'usuari que el vostre proveïdor de correu us d\'haver donat per entrar al vostre compte de correu.';
$string['messageinboundmailboxconfiguration_desc'] = 'Quan els missatges s\'envien, s\'ajusten al format adreça+dades@exemple.com. Per generar de manera fiable adreces de Moodle, especifiqueu l\'adreça que normalment utilitzaríeu abans del signe @, i el domini després del signe @ de manera separada. Per exemple, el nom de la bústia de l\'exemple seria «adreça», i el domini de correu electrònic seria «exemple.com». És recomanable que utilitzeu un compte de correu electrònic dedicat a aquest propòsit.';
$string['messageprocessingerror'] = 'Heu rebut fa poc temps un correu electrònic «{$a->subject}» però desafortunadament no ha estat possible processar-lo.

Els detalls de l\'error es mostren al dessota.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>Heu rebut fa poc temps un correu electrònic «{$a->subject}» però desafortunadament no ha estat possible processar-lo.</p>

<p>Els detalls de l\'error es mostren al dessota.</p>

<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'El correu electrònic «{$a->subject}» no s\'ha pogut processar. L\'error és el següent:
"{$a->message}".';
$string['messageprocessingfailedunknown'] = 'El correu electrònic «{$a->subject}» no s\'ha pogut processar. Poseu-vos en contacte amb el vostre administrador per a més informació.';
$string['messageprocessingsuccess'] = '{$a->plain}

Si no voleu tornar a rebre aquestes notificacions, editeu les preferències de la vostra missatgeria obrint {$a->messagepreferencesurl} al navegador.';
$string['messageprocessingsuccesshtml'] = '{$a->html} <p> Si no voleu tornar a rebre aquestes notificacions, <a href="{$a->messagepreferencesurl}"> editeu les preferències de la vostra missatgeria </a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'Missatge per a confirmar que sou el remitent d\'un missatge entrant';
$string['messageprovider:messageprocessingerror'] = 'Missatge quan no es pot processar un missatge entrant';
$string['messageprovider:messageprocessingsuccess'] = 'Confirmació que un missatge s\'ha processat correctament';
$string['name'] = 'Nom';
$string['noencryption'] = 'No activat - Sense xifrat';
$string['noexpiry'] = 'Sense caducitat';
$string['oldmessagenotfound'] = 'Heu intentat autenticar un missatge de forma manual, però el missatge no s\'ha trobat. Això pot ser perquè està essent processat o perquè el missatge ha caducat.';
$string['oneday'] = 'Un dia';
$string['onehour'] = 'Una hora';
$string['oneweek'] = 'Una setmana';
$string['oneyear'] = 'Un any';
$string['pluginname'] = 'Configuració de missatges entrants';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'Validar l\'adreça de l\'emissor';
$string['ssl'] = 'SSL (Auto-detecta la versió de SSL)';
$string['sslv2'] = 'SSLv2 (Força la versió 2 de SSL)';
$string['sslv3'] = 'SSLv2 (Força la versió 3 de SSL)';
$string['taskcleanup'] = 'Neteja del correu electrònic entrant no verificat';
$string['taskpickup'] = 'Recollida de correu electrònic entrant';
$string['tls'] = 'TLS (TLS; iniciat mitjançant la negociació a nivell de protocol sobre un canal sense xifrar; mode RECOMANAT d\'iniciar la connexió segura)';
$string['tlsv1'] = 'TLSv1 (Connexió TLS directa al servidor versió 1.x)';
$string['validateaddress'] = 'Validar l\'adreça de l\'emissor';
$string['validateaddress_help'] = 'Quan es rep un missatge d\'un usuari, Moodle intenta validar el missatge comparant l\'adreça electrònica del remitent amb l\'adreça electrònica del seu perfil d\'usuari.

Si el remitent no coincideix, s\'envia una notificació a l\'usuari perquè confirmi que realment va enviar el missatge de correu electrònic.

Si s\'inhabilita aquest paràmetre, no es verificarà de cap de les maneres l\'adreça electrònica del remitent.';
