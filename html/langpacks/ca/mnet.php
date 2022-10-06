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
 * Strings for component 'mnet', language 'ca', branch 'MOODLE_38_STABLE'
 *
 * @package   mnet
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutyourhost'] = 'El vostre servidor';
$string['accesslevel'] = 'Nivell d\'accés';
$string['addhost'] = 'Afegeix un servidor';
$string['addnewhost'] = 'Afegeix un servidor nou';
$string['addtoacl'] = 'Afegeix al control d\'accés';
$string['allhosts'] = 'Tots els servidors';
$string['allhosts_no_options'] = 'No hi ha opcions disponibles quan es veuen múltiples servidors';
$string['allow'] = 'Habilita';
$string['applicationtype'] = 'Tipus d\'aplicació';
$string['authfail_nosessionexists'] = 'Autorització errònia: la sessió mnet no existeix.';
$string['authfail_sessiontimedout'] = 'Autorització errònia: la sessió mnet ha acabat.';
$string['authfail_usermismatch'] = 'Autorització errònia: l\'usuari no concorda.';
$string['authmnetdisabled'] = 'El connector d\'autenticació MNet està <strong>inhabilitat</strong>.';
$string['badcert'] = 'Aquest no és un certificat vàlid';
$string['certdetails'] = 'Detalls Cert';
$string['configmnet'] = 'MNet permet les comunicacions d\'aquest servidor amb els altres servidors de serveis.';
$string['couldnotgetcert'] = 'No s\'ha trobat un certificat a <br />{$a}. <br />El servidor por haver caigut o estat configurat incorrectament.';
$string['couldnotmatchcert'] = 'Això no coincideix amb el certificat publicat actualment pel servidor web.';
$string['courses'] = 'cursos';
$string['courseson'] = 'cursos sobre';
$string['currentkey'] = 'Clau pública actual';
$string['current_transport'] = 'Transport actual';
$string['databaseerror'] = 'No es poden escriure els detalls en la base de dades.';
$string['deleteaserver'] = 'S\'està suprimint el servidor';
$string['deletedhostinfo'] = 'Aquest servidor s\'ha suprimit. Si voleu recuperar-lo, canvieu l\'estat d\'eliminat de nou a \'No\'.';
$string['deletedhosts'] = 'Servidors suprimits: {$a}';
$string['deletehost'] = 'Servidor suprimit';
$string['deletekeycheck'] = 'Esteu absolutament segurs de voler suprimir aquesta clau ?';
$string['deleteoutoftime'] = 'La vostra finestra de 60 segons per suprimir aquesta clau ha expirat. Torneu a començar.';
$string['deleteuserrecord'] = 'SSO ACL: Esborra la dada per l\'usuari  \'{$a->user}\' a {$a->host}.';
$string['deletewrongkeyvalue'] = 'S\'ha produït un error. Si no volíeu esborrar la vostra clau SSL del servidor, és possible que hàgiu sofert un atac maliciós. No s\'ha pres cap mesura.';
$string['deny'] = 'Denega';
$string['description'] = 'Descripció';
$string['duplicate_usernames'] = 'Ha fallat la creació d\'un índex a les columnes «mnethostid» i «username» a la taula d\'usuaris.<br />Això pot passar quan hi ha <a href="{$a}" target="_blank">noms d\'usuari duplicats a la taula d\'usuaris</a>.<br />L\'actualització hauria de reeixir igualment. Feu clic a l\'enllaç de dalt si voleu obtenir instruccions per a solucionar aquest problema en una finestra nova. Podeu seguir-les al final de l\'actualització. <br />';
$string['enabled_for_all'] = '(Aquest servei s\'ha habilitat per a tots els servidors)';
$string['enterausername'] = 'Introduïu el nom d\'usuari, o una llista de noms d\'usuari separats per comes.';
$string['error7020'] = 'Aquest error normalment es produeix si el lloc remot ha creat un registre per a vós amb la wwwroot incorrecta; per exemple, http://yoursite.com, en lloc de http://www.yoursite.com. Cal que us poseu en contacte amb l\'administrador del lloc remot amb el vostre wwwroot (com s\'especifica a config.php) per demanar-li que actualitzi el registre per al vostre servidor.';
$string['error7022'] = 'El missatge que heu enviat al lloc remot s\'ha xifrat però no signat.  Això és inesperat; hauríeu d\'enviar un fitxer sobre aquest error si torna a ocórrer (si doneu més informació sobre la versió de l\'aplicació en qüestió, ... , es millorarà el suport )';
$string['error7023'] = 'El lloc remot ha intentat desxifrar el missatge amb totes les claus que té en la base de dades per al vostre lloc. Cap d\'elles ha funcionat. Hauríeu de poder resoldre açò connectant amb el lloc remot i identificant-vos manualment. Això és poc probable que passi a menys que no hàgiu comunicat amb el lloc remot durant diversos mesos.';
$string['error7024'] = 'Heu enviat un missatge no xifrat al lloc remot, però el lloc remot no ha acceptat la comunicació no xifrada del vostre lloc. Això és molt inesperat, probablement hauríeu de presentar un informe d\'error si això passa (donant tanta informació com sigui possible sobre les versions de l\'aplicació en qüestió, etc.)';
$string['error7026'] = 'La clau amb què el vostre missatge ha estat signat es diferencia de la clau que el servidor remot té en els seus arxius per al vostre servidor. A més, la màquina remota ha intentat recuperar la seva clau actual i no ho ha aconseguit. Reconnecteu-vos manualment amb el servidor remot i torneu a intentar-ho.';
$string['error709'] = 'El lloc remot ha fallat en obtenir una clau SSL de vós.';
$string['eventaccesscontrolcreated'] = 'Control d\'accés creat';
$string['eventaccesscontrolupdated'] = 'Control d\'accés actualitzat';
$string['expired'] = 'Aquesta clau ha caducat';
$string['expires'] = 'Vàlida fins';
$string['expireyourkey'] = 'Suprimeix aquesta clau';
$string['expireyourkeyexplain'] = 'Moodle fa rotar automàticament les claus cada 28 dies (per defecte), però teniu l\'opció de fer caducar <em>manualment</em> aquesta clau en qualsevol moment. Això només serà útil si creieu que aquesta clau ha estat posada en perill. Es generarà automàticament un reemplaçament de manera immediata. <br /> Suprimir aquesta clau farà que sigui impossible per a altres aplicacions comunicar-se amb vós, fins que contacteu manualment amb cada administrador per donar-los la nova clau.';
$string['exportfields'] = 'Camps a exportar';
$string['failedaclwrite'] = 'Error en escriure al control d\'accés MNet  per a l\'usuari «{$a}».';
$string['findlogin'] = 'Cerca el nom d\'usuari';
$string['forbidden-function'] = 'Aquesta funció no s\'ha habilitat per RPC.';
$string['forbidden-transport'] = 'El mètode de transport que esteu intentant utilitzar no és permès.';
$string['forcesavechanges'] = 'Força el desar els canvis';
$string['helpnetworksettings'] = 'Configura la comunicació MNet';
$string['hidelocal'] = 'Oculta usuaris locals';
$string['hideremote'] = 'Oculta usuaris remots';
$string['host'] = 'servidor de bases de dades';
$string['hostcoursenotfound'] = 'No s\'ha trobat el servidor o el curs';
$string['hostdeleted'] = 'D\'acord - Servidor suprimit';
$string['hostexists'] = 'Ja existeix un registre per al servidor amb aquest nom ( pot ser suprimit). <a href="{$a}">Feu clic aquí</a> per editar aquest registre.';
$string['hostlist'] = 'Llista de servidors de treball';
$string['hostname'] = 'Nom del servidor';
$string['hostnamehelp'] = 'El nom del domini complet del servidor remot, exemple: www.exemple.com';
$string['hostnotconfiguredforsso'] = 'El servidor no està configurat per iniciar sessions remotament.';
$string['hostsettings'] = 'Paràmetres del servidor';
$string['http_self_signed_help'] = 'Permet connexions utilitzant un certificat DIY SSL auto signat al servidor remot.';
$string['https_self_signed_help'] = 'Permet connexions utilitzant un certificat DIY SSL auto signat  al servidor remot en PHP.';
$string['https_verified_help'] = 'Permet connexions utilitzant un certificat SSL  verificat al servidor remot.';
$string['http_verified_help'] = 'Permet connexions utilitzant un certificat SSL verificat al servidor remot en PHP, però sobre http (no https).';
$string['id'] = 'ID';
$string['idhelp'] = 'Aquest valor s\'assigna de forma automàtica i no es pot canviar';
$string['importfields'] = 'Camps a importar';
$string['inspect'] = 'Inspecciona';
$string['installnosuchfunction'] = 'Error de codificació! Algú està intentant instal·lar una funció xmlrpc  mnet ({$a->method}) des de el fitxer ({$a->file}) i no es pot trobar!';
$string['installnosuchmethod'] = 'Error de codificació! Algú està intentant instal·lar una funció xmlrpc mnet ({$a->method}) en la classe ({$a->class}) i no es pot trobar!';
$string['installreflectionclasserror'] = 'Error de codificació! La inspecció MNet ha fallat per al mètode \'{$a->method} en la classe \'{$a->class}. El missatge d\'error original, en cas que ajuda, és: \'{$a->error}';
$string['installreflectionfunctionerror'] = 'Error de codificació! La inspecció MNet ha fallat per la funció \'{$a->method} al fitxer \'{$a->file}. El missatge d\'error original, en cas que ajuda, és: \'{$a->error}';
$string['invalidaccessparam'] = 'Paràmetre d\'accés no vàlid.';
$string['invalidactionparam'] = 'Paràmetre d\'acció no vàlid.';
$string['invalidhost'] = 'Cal que proporcioneu un identificador vàlid per al servidor';
$string['invalidpubkey'] = 'La clau no és una clau SSL vàlida. ({$a})';
$string['invalidurl'] = 'El paràmetre URL no és vàlid';
$string['ipaddress'] = 'Adreça IP';
$string['is_in_range'] = 'La adreça IP <code>{$a}</code> representa un servidor vàlid de confiança.';
$string['ispublished'] = '{$a} ha habilitat aquest servei per a vós.';
$string['issubscribed'] = '{$a} està subscrit a aquest servei al vostre servidor.';
$string['keydeleted'] = 'La vostra clau ha estat esborrada amb èxit i reemplaçada.';
$string['keymismatch'] = 'La clau pública que es mantenen per a aquest servidor és diferent de la clau pública  actual. La clau publica actual és la següent:';
$string['last_connect_time'] = 'Hora de la darrera connexió.';
$string['last_connect_time_help'] = 'L\'hora de la darrera connexió a aquest servidor.';
$string['last_transport_help'] = 'El transport que heu emprat en la darrera connexió a aquest servidor.';
$string['leavedefault'] = 'Utilitzeu la configuració per defecte en lloc';
$string['listservices'] = 'Llista de serveis.';
$string['loginlinkmnetuser'] = '<br/>Si sou un usuari remot de Moodle en Xarxa i podeu <a href="{$a}">confirmar la vostra adreça electrònica aquí</a>, us podem redirigir a la vostra pàgina d\'inici de sessió.<br />';
$string['logs'] = 'registres';
$string['managemnetpeers'] = 'Gestiona parells';
$string['method'] = 'mètode';
$string['methodhelp'] = 'Mètode d\'ajuda per {$a}';
$string['methodsavailableonhost'] = 'Mètode disponible a {$a}';
$string['methodsavailableonhostinservice'] = 'Mètode disponible per {$a->service} a {$a->host}';
$string['methodsignature'] = 'Mètode de signatura per {$a}';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = 'Concatena (fins a ) 3 cadenes i retorna el resultat';
$string['mnetdisabled'] = 'MNet està <strong>inhabilitat</strong>';
$string['mnetidprovider'] = 'Proporcionador d\'identificació per MNet';
$string['mnetidproviderdesc'] = 'Podeu utilitzar aquesta funció per obtenir un enllaç que permeta connectar-vos, si podeu proporcionar l\'adreça de correu electrònic correcta perquè coincideixi amb el nom d\'usuari que ja ha intentat iniciar la sessió.';
$string['mnetidprovidermsg'] = 'Hauríeu de poder iniciar la sessió al vostre proveïdor {$a}.';
$string['mnetidprovidernotfound'] = 'No s\' ha trobat cap informació addicional.';
$string['mnetpeers'] = 'Iguals';
$string['mnetservices'] = 'Serveis';
$string['mnet_session_prohibited'] = 'Als usuaris del seu servidor no se\'ls permet actualment anar a  {$a}.';
$string['mnetsettings'] = 'Paràmetres de MNet';
$string['moodle_home_help'] = 'El camí a la pàgina principal de l\'aplicació MNet al servidor remot, ex. /moodle/.';
$string['name'] = 'Nom';
$string['net'] = 'Xarxa';
$string['networksettings'] = 'Paràmetres de xarxa';
$string['never'] = 'Mai';
$string['noaclentries'] = 'No hi ha entrades a la llista de control d\'accés SSO';
$string['noaddressforhost'] = 'No s\'ha pogut connectar amb aquest servidor ({$a})!';
$string['nocurl'] = 'La llibreria cURL de PHP no està instal·lada.';
$string['nolocaluser'] = 'No hi ha cap registre per a aquest usuari remot, i no es pot crear, ja que aquest servidor no permet la creació automàtica d\'usuaris. Contacteu amb l\'administrador!';
$string['nomodifyacl'] = 'No teniu permís per modificar la llista de control d\'accés MNet.';
$string['nonmatchingcert'] = 'Subjecte del certificat: <br /><em>{$a->subject}</em><br />no concorda amb el servidor que procedeix de:<br /><em>{$a->host}</em>.';
$string['nopubkey'] = 'Hi ha un problema en recuperar la clau pública.
<br /> Potser el servidor no permet Mnet o la clau no és vàlida.';
$string['nosite'] = 'No s\'ha trobat el lloc a nivell de curs';
$string['nosuchfile'] = 'El fitxer/funció {$a} no existeix.';
$string['nosuchfunction'] = 'No es pot trobar la funció, o funció prohibida per RPC.';
$string['nosuchmodule'] = 'La funció s\'ha especificat incorrectament i no pot ser localitzada. Utilitzeu el format mod/modulename/lib/functionname';
$string['nosuchpublickey'] = 'No es pot obtenir la clau pública per verificar la signatura.';
$string['nosuchservice'] = 'El servei RPC no funciona en aquesta màquina.';
$string['nosuchtransport'] = 'No existeix cap transport amb aquesta ID.';
$string['notBASE64'] = 'Aquesta cadena no està codificada en format base64. No pot ser una clau vàlida.';
$string['notenoughidpinfo'] = 'El vostre proveïdor d\'identitat no ens està donant la informació suficient per crear o actualitzar el vostre compte a nivell local.';
$string['not_in_range'] = 'L\'adreça IP <code> {$a} </ code> no representa un servidor vàlid de confiança.';
$string['notinxmlrpcserver'] = 'Intent d\'accés al client remot Mnet, no durant l\'execució del servidor XMLRPC';
$string['notmoodleapplication'] = 'ADVERTIMENT: Aquesta no és una aplicació de Moodle, de manera que és possible que alguns dels mètodes d\'inspecció no funcionin correctament.';
$string['notPEM'] = 'Aquesta clau no té format PEM. No funcionarà.';
$string['notpermittedtojump'] = 'No teniu permís per iniciar una sessió remota en aquest servidor Moodle.';
$string['notpermittedtojumpas'] = 'No podeu iniciar una sessió remota mentre esteu identificat com un altre usuari.';
$string['notpermittedtoland'] = 'No teniu permís per iniciar una sessió remota.';
$string['off'] = 'Desactiva';
$string['on'] = 'Activa';
$string['options'] = 'Opcions';
$string['peerprofilefielddesc'] = 'Aquí es pot reemplaçar la configuració global per cada camp del perfil per enviar o importar quan es creï un usuari nou.';
$string['permittedtransports'] = 'Transports permesos.';
$string['phperror'] = 'Un error intern de PHP impedeix que la vostra petició es dugui a terme.';
$string['position'] = 'Posició';
$string['postrequired'] = 'La funció de supressió requereix una sol·licitud POST.';
$string['profileexportfields'] = 'Camps a enviar';
$string['profilefielddesc'] = 'Aquí podeu configurar la llista de camps de perfil que s\'envien i es reben sobre MNet quan els usuaris dels comptes es creen o s\'actualitzen. Podeu també sobreescriure això per cada parell MNet individual. Fixeu-vos que els camps següents s\'envien sempre i no són opcionals: {$a}';
$string['profilefields'] = 'Camps del perfil';
$string['profileimportfields'] = 'Camps a importar';
$string['promiscuous'] = 'Promiscu';
$string['publickey'] = 'Clau pública';
$string['publickey_help'] = 'La clau pública s\'obté de forma automàtica al servidor remot';
$string['publickeyrequired'] = 'Heu de proporcionar una clau pública.';
$string['publish'] = 'Publica';
$string['reallydeleteserver'] = 'Esteu segurs de voler suprimir el servidor ?';
$string['receivedwarnings'] = 'S\'han rebut els següents avisos';
$string['recordnoexists'] = 'No existeix el registre.';
$string['reenableserver'] = 'No - Seleccioneu aquesta opció per tornar a habilitar aquest servidor.';
$string['registerallhosts'] = 'Registra tots els servidors (mode promiscu)';
$string['registerallhostsexplain'] = 'Podeu optar per registrar tots els servidors que intenten connectar-se amb vós de forma automàtica. Això significa que apareixerà un registre a la vostra llista de servidors per a qualsevol lloc web MNet que es connecti amb vós i sol·liciti la vostra clau pública. <br /> Teniu l\'opció de sota per configurar els serveis per a «Tots els servidors» i, habilitant alguns dels serveis allà, podreu proporcionar serveis a qualsevol servidor remot de manera indiscriminada.';
$string['registerhostsoff'] = 'El registre de tots els servidors està actualment <b>inhabilitat</b>';
$string['registerhostson'] = 'Registrar tots els servidor és actualment <b>habilitat</b>';
$string['remotecourses'] = 'Cursos remots';
$string['remotehost'] = 'Servidor remot';
$string['remotehosts'] = 'Servidors remots';
$string['remoteuser'] = 'Usuari remot {$a->remotetype}';
$string['remoteuserinfo'] = 'Perfil obtingut de <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'Us cal l\'extensió OpenSSL per treballar amb la xarxa.';
$string['restore'] = 'Restaura';
$string['returnvalue'] = 'Valor de retorn';
$string['reviewhostdetails'] = 'Reviseu els detalls del servidor';
$string['reviewhostservices'] = 'Reviseu els serveis del servidor';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP sense xifrar';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (auto-signat)';
$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (auto-signat)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (signat)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (signat)';
$string['selectaccesslevel'] = 'Seleccioneu un nivell d\'accés de la llista.';
$string['selectahost'] = 'Seleccioneu un servidor remot.';
$string['service'] = 'Nom del servei';
$string['serviceid'] = 'ID del servei';
$string['servicesavailableonhost'] = 'Serveis disponibles a {$a}';
$string['serviceswepublish'] = 'Serveis que publiquem en {$a}.';
$string['serviceswesubscribeto'] = 'Serveis en {$a} als que ens hem subscrit';
$string['settings'] = 'Paràmetres';
$string['showlocal'] = 'Mostra usuaris locals';
$string['showremote'] = 'Mostra usuaris remots';
$string['ssl_acl_allow'] = 'SSO ACL: Permet a l\'usuari {$a-> user} de {$a-> host}';
$string['ssl_acl_deny'] = 'SSO ACL: Denega a l\'usuari {$a-> user} de {$a-> host}';
$string['sslverification'] = 'Verificació SSL';
$string['sslverification_help'] = 'Aquesta opció us permet configurar el nivell de seguretat quan us connecteu a un igual usant HTTPS.

* Cap: cap nivell de seguretat
* Verifica sols el servidor: valida el domini del certificat SSL
* Verifica l\'igual i el servidor (recomanat): valida el domini i l\'emissor del certificat SSL';
$string['ssoaccesscontrol'] = 'Control d\'accés SSO';
$string['ssoacldescr'] = 'Utilitzeu aquesta pàgina per atorgar/denegar l\'accés a determinats usuaris des del servidor remot MNet. Això és funcional quan s\'estan oferint serveis SSO a usuaris remots. Per controlar la capacitat dels usuaris <em>locals</em> de migrar a altres servidors Moodle en xarxa (MNet), utilitzeu el sistema de permisos per atorgar-los la capacitat <em>mnetlogintoremote</em>.';
$string['ssoaclneeds'] = 'Per tal que aquesta funcionalitat estigui habilitada, us cal activar el treball en xarxa, i el connector d\'autenticació per Moodle en xarxa.';
$string['strict'] = 'Estricte';
$string['subscribe'] = 'Subscriu';
$string['system'] = 'Sistema';
$string['testclient'] = 'Client de prova de Moodle en Xarxa (MNet).';
$string['testtrustedhosts'] = 'Prova una adreça';
$string['testtrustedhostsexplain'] = 'Introduïu una adreça IP per veure si es tracta d\'un servidor de confiança.';
$string['theypublish'] = 'Facin pública';
$string['theysubscribe'] = 'Subscriguin';
$string['transport_help'] = 'Aquestes opcions són reciproques, de forma que sols podeu forçar un servidor remot a utilitzar SSL certificat si el vostre servidor  es un servidor SSL certificat.';
$string['trustedhosts'] = 'Servidors XML-RPC';
$string['trustedhostsexplain'] = '<p> El mecanisme de servidors de confiança permet a les màquines específiques executar crides a través de XML-RPC a qualsevol part de l\'API de Moodle. Això està disponible per als scripts a fi de controlar el comportament de Moodle i pot ser una opció molt perillosa d\'habilitar. En cas de dubte, manteniu-la desconnectada. </p><p> <strong>No és necessària per a cap característica Mnet estàndard!</strong> Activeu-la només si sabeu el que esteu fent. </p><p> Per activar-la, escriviu una llista d\'adreces IP o xarxes, una a cada línia. Alguns exemples: </p> El vostre servidor local: <br /> 127.0.0.1 <br /> El vostre servidor local (amb un bloc de xarxa): <br /> 127.0.0.1/32 <br /> Només el servidor amb adreces IP 192.168.0.7: <br /> 192.168.0.7/32 <br /> Qualsevol servidor amb una adreça IP entre 192.168.0.1 i 192.168.0.255: <br /> 192.168.0.0/24 <br /> Qualsevol servidor que sigui: <br /> 192.168.0.0/0 <br /> Òbviament, l\'últim exemple <strong>no</strong> és una configuració recomanada.';
$string['turnitoff'] = 'Atura';
$string['turniton'] = 'Engega';
$string['type'] = 'Tipus';
$string['unknown'] = 'Desconegut';
$string['unknownerror'] = 'Ha succeït un error durant la negociació';
$string['usercannotchangepassword'] = 'No podeu canviar la contrasenya aquí doncs esteu a un servidor remot.';
$string['userchangepasswordlink'] = '<br /> Podeu habilitar el canvi de la contrasenya al  vostre<a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a> subministrador.';
$string['usernotfullysetup'] = 'El vostre compte d\'usuari està incomplet. Us cal tornar <a href="{$a}">al vostre subministrador</a> i comprovar que el vostre perfil s\'ha completat allà. Potser us calgui finalitzar la sessió i tornar a iniciar-la per assegurar-vos que els canvis tenen efecte.';
$string['usersareonline'] = 'AVÍS: {$a} usuaris d\'aquest servidor han entrat al vostre lloc.';
$string['validated_by'] = 'Això està validat per la xarxa: <code>{$a}</code>';
$string['verifyhostandpeer'] = 'Verifica el servidor i l\'igual';
$string['verifyhostonly'] = 'Verifica sols el servidor';
$string['verifysignature-error'] = 'La verificació de la signatura a fallat. Ha succeït un error.';
$string['verifysignature-invalid'] = 'La verificació de la signatura ha fallat. Sembla que vós no vau signar aquest bloc d\'informació.';
$string['version'] = 'Versió';
$string['warning'] = 'Avís';
$string['wrong-ip'] = 'La vostra adreça IP no coincideix amb l\'adreça que tenim registrada.';
$string['xmlrpc-missing'] = 'Us cal instal·lar XML-RPC al vostre PHP per habilitar l\'ús d\'aquesta característica.';
$string['yourhost'] = 'El vostre servidor';
$string['yourpeers'] = 'Els vostres iguals';
