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
 * Strings for component 'webservice', language 'ca', branch 'MOODLE_38_STABLE'
 *
 * @package   webservice
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Accés de l\'excepció de control';
$string['actwebserviceshhdr'] = 'Activa els protocols de serveis web';
$string['addaservice'] = 'Afegeix servei';
$string['addcapabilitytousers'] = 'Comprova la capacitat dels usuaris';
$string['addcapabilitytousersdescription'] = 'Els usuaris tenen dos capacitats webservice:createtoken i la capacitat d\'associar els protocols utilitzats, per exemple webservice/rest:use, webservice/soap:use. Per aconseguir això, creeu un rol de servei web amb les capacitats apropiades permeses i assigneu-lo a l\'usuari de serveis web com a rol del sistema.';
$string['addfunction'] = 'Afegeix funció';
$string['addfunctionhelp'] = 'Seleccioneu la funció per afegir al servei.';
$string['addfunctions'] = 'Afegeix funcions';
$string['addfunctionsdescription'] = 'Seleccioneu les funcions necessàries per al servei acabat de crear.';
$string['addrequiredcapability'] = 'Assigneu/cancel·leu l\'assignació de la capacitat requerida';
$string['addservice'] = 'Afegeix un servei nou: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Afegeix funcions al servei "{$a}"';
$string['allusers'] = 'Tots els usuaris';
$string['apiexplorer'] = 'Explorador de l\'API';
$string['apiexplorernotavalaible'] = 'L\'explorador de l\'API encara no està disponible.';
$string['arguments'] = 'Arguments';
$string['authmethod'] = 'Mètode d\'autenticació';
$string['callablefromajax'] = 'Cridable des d\'AJAX';
$string['cannotcreatetoken'] = 'No teniu permís per crear el testimoni de serveis web per al servei {$a}.';
$string['cannotgetcoursecontents'] = 'No es poden obtenir els continguts del curs';
$string['checkusercapability'] = 'Comprova la capacitat de l\'usuari';
$string['checkusercapabilitydescription'] = 'L\'usuari hauria de tindre capacitats d\'acord amb el protocol utilitzat, per exemple webservice/rest use, webservice/soap: use. Per aconseguir açò, creeu un rol servei web amb les capacitats permeses i assigneu-lo a l\'usuari servei web com rol de sistema.';
$string['configwebserviceplugins'] = 'Per raons de seguretat, sols els protocols en ús estan habilitats.';
$string['context'] = 'Context';
$string['createservicedescription'] = 'Un servei és un conjunt de funcions servei web. Podeu permetre a l\'usuari accés al nou servei. A la pàgina <strong>Afegeix servei</strong> habiliteu les opcions \'Habilita\' i \'Usuaris autoritzats\'. Seleccioneu \'Capacitat no requerida\'.';
$string['createserviceforusersdescription'] = 'Un servei és un conjunt de funcions servei web. Podeu permetre als usuaris accés al nou servei. A la pàgina <strong>Afegeix servei</strong> habiliteu les opcions \'Habilita\' i \'Usuaris autoritzats\'. Seleccioneu \'Capacitat no requerida\'.';
$string['createtoken'] = 'Crea token';
$string['createtokenforuser'] = 'Crea un token per un usuari';
$string['createtokenforuserdescription'] = 'Crea un token per un usuari servei web.';
$string['createuser'] = 'Crea un usuari específic';
$string['createuserdescription'] = 'Cal un usuari de serveis web per representar el sistema de control de Moodle.';
$string['criteriaerror'] = 'No hi ha permisos per a cercar per un criteri';
$string['default'] = 'Per defecte per "{$a}"';
$string['deleteaservice'] = 'Suprimeix el servei';
$string['deleteservice'] = 'Suprimeix el servei: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Suprimir un servei requereix també suprimir els tokens relacionats amb el servei web. Realment voleu suprimir el servei extern "{$a}"?';
$string['deletetokenconfirm'] = 'Voleu realment suprimir el token de sevei web per a <strong>{$a->user}</strong> al servei <strong>{$a->service}</strong>?';
$string['disabledwarning'] = 'Tots els protocols de serveis web estan inhabilitats. Podeu trobar el paràmetre «Habilita els serveis web» a Característiques avançades.';
$string['doc'] = 'Documentació';
$string['docaccessrefused'] = 'No esteu habilitat per a veure la documentació per aquest token.';
$string['documentation'] = 'documentació del serveis web';
$string['downloadfiles'] = 'Es poden baixar fitxers';
$string['downloadfiles_help'] = 'Si està activat, qualsevol usuari pot descarregar fitxers amb les seves claus de seguretat. Per descomptat que es limita als fitxers que cada usuari pugui descarregar-se del lloc.';
$string['editaservice'] = 'Edita servei';
$string['editservice'] = 'Edita el servei: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Habilita';
$string['enabledocumentation'] = 'Habilita la documentació del desenvolupador';
$string['enabledocumentationdescription'] = 'La documentació dels serveis web està disponible per als protocols habilitats.';
$string['enableprotocols'] = 'Habilita protocols';
$string['enableprotocolsdescription'] = 'Almenys un protocol ha d\'estar habilitada. Per raons de seguretat, sols els protocols que s\'utilitzaran haurien d\'estar habilitats.';
$string['enablews'] = 'Habilita serveis web';
$string['enablewsdescription'] = 'Els serveis web cal que estiguin habilitats en Característiques avançades';
$string['entertoken'] = 'Introduïu la clau / el testimoni de seguretat:';
$string['error'] = 'Error: {$a}';
$string['errorcatcontextnotvalid'] = 'No podeu executar funcions en el context categoria (category id:{$a->catid}). L\'error ha estat: {$a->message}';
$string['errorcodes'] = 'Missatge d\'error';
$string['errorcoursecontextnotvalid'] = 'No podeu executar funcions al context curs (course id:{$a->courseid}). L\'error ha estat: {$a->message}';
$string['errorinvalidparam'] = 'El paràmetre "{$a}" no és vàlid';
$string['errornotemptydefaultparamarray'] = 'El paràmetre que descriu el servei web anomenat \'{$a}\' és una estructura única o múltiple. Per defecte pot sols ser una matriu buida. Llegiu la descripció dels serveis web.';
$string['erroroptionalparamarray'] = 'El paràmetre que descriu el servei web anomenat \'{$a}\' és una estructura única o múltiple. No pot ser posat com VALUE_OPTIONAL. Comproveu la descripció dels serveis web.';
$string['eventwebservicefunctioncalled'] = 'S\'ha cridat una funció del servei web';
$string['eventwebserviceloginfailed'] = 'Ha fallat l\'inici de sessió al servei web';
$string['eventwebserviceservicecreated'] = 'S\'ha creat un servei del servei web';
$string['eventwebserviceservicedeleted'] = 'Servei del servei web suprimit';
$string['eventwebserviceserviceupdated'] = 'S\'ha actualitzat un servei del servei web';
$string['eventwebserviceserviceuseradded'] = 'S\'ha afegit l\'usuari al servei del servei web';
$string['eventwebserviceserviceuserremoved'] = 'S\'ha suprimit l\'usuari al servei del servei web';
$string['eventwebservicetokencreated'] = 'S\'ha creat un testimoni al servei del servei web';
$string['eventwebservicetokensent'] = 'S\'ha enviat el testimoni al servei del servei web';
$string['execute'] = 'Executa';
$string['executewarnign'] = 'AVÍS: Si premeu executa la vostra base de dades serà modificada i els canvis no es podran revertir de forma automàtica!';
$string['externalservice'] = 'Servei extern';
$string['externalservicefunctions'] = 'Funcions del servei extern';
$string['externalservices'] = 'Serveis externs';
$string['externalserviceusers'] = 'Usuaris del servei extern';
$string['failedtolog'] = 'Error en iniciar sessió';
$string['filenameexist'] = 'El nom del fitxer ja existeix: {$a}';
$string['forbiddenwsuser'] = 'No es pot crear un testimoni per a un usuari no confirmat, eliminat, suspès o visitant.';
$string['function'] = 'Funció';
$string['functions'] = 'Funcions';
$string['generalstructure'] = 'Estructura general';
$string['information'] = 'Informació';
$string['installexistingserviceshortnameerror'] = 'Un servei web amb nom curt "{$a}" existeix realment. No es pot instal·lar/actualitzar un servei web diferent amb aquest nom curt.';
$string['installserviceshortnameerror'] = 'Error de codificació: el servei amb nom curt "{$a}"  ha de contenir números, lletres i sols _-..';
$string['invalidextparam'] = 'Paràmetre invàlid per API externa: {$a}';
$string['invalidextresponse'] = 'Resposta invàlida per API externa: {$a}';
$string['invalidiptoken'] = 'Token invàlid - la vostra IP no està suportada.';
$string['invalidtimedtoken'] = 'Token invàlid - el token ha expirat';
$string['invalidtoken'] = 'Token invàlid - el token no s\'ha trobat';
$string['iprestriction'] = 'Restricció IP';
$string['iprestriction_help'] = 'Caldrà que l\'usuari cridi el servei web des de les adreces IP de la llista (separades per comes).';
$string['key'] = 'Clau';
$string['keyshelp'] = 'Les claus s\'utilitzen per accedir al vostre compte de Moodle des d\'aplicacions externes.';
$string['loginrequired'] = 'Restringit als usuaris que han entrat';
$string['manageprotocols'] = 'Gestiona protocols';
$string['managetokens'] = 'Gestiona tokens';
$string['missingcaps'] = 'Capacitats perdudes';
$string['missingcaps_help'] = 'Llista de capacitats requerides  per al servei web que l\'usuari seleccionat no té. Les capacitats perdudes cal afegir-les al rol de l\'usuari per tal d\'utilitzar el servei.';
$string['missingpassword'] = 'Contrasenya perduda';
$string['missingrequiredcapability'] = 'Cal la capacitat {$a}.';
$string['missingusername'] = 'Nom d\'usuari perdut';
$string['missingversionfile'] = 'Error de codificació: el fitxer version.php s\'ha perdut per al component {$a}';
$string['nameexists'] = 'Aquest nom l\'està usant un altre servei.';
$string['nocapabilitytouseparameter'] = 'Aquest usuari no té la capacitat per a utilitzar el paràmetre {$a}';
$string['nofunctions'] = 'Aquest servei no té funcions';
$string['norequiredcapability'] = 'No cal cap capacitat';
$string['notoken'] = 'La llista de tokens està buida.';
$string['onesystemcontrolling'] = 'Permet que un sistema extern controli Moodle';
$string['onesystemcontrollingdescription'] = 'Els passos següents us ajudaran a configurar els serveis web de Moodle per permetre que un sistema extern interactuï amb Moodle. Això inclou configurar un mètode d\'identificació per testimoni (amb clau de seguretat).';
$string['onlyseecreatedtokens'] = 'Qualsevol testimoni (<em>token<em>) pot ser esborrat, encara que només podeu visualitzar els testimonis que heu creat.';
$string['operation'] = 'Operació';
$string['optional'] = 'Opcional';
$string['passwordisexpired'] = 'La contrasenya ha caducat.';
$string['phpparam'] = 'XML-RPC (Estructura PHP)';
$string['phpresponse'] = 'XML-RPC (Estructura PHP)';
$string['postrestparam'] = 'Codi PHP per a REST (sol·licitud POST)';
$string['potusers'] = 'Usuaris no autoritzats';
$string['potusersmatching'] = 'Cerca d\'usuaris no autoritzats.';
$string['print'] = 'Imprimeix-ho tot';
$string['protocol'] = 'Protocol';
$string['removefunction'] = 'Suprimeix';
$string['removefunctionconfirm'] = 'Voleu realment suprimir la funció "{$a->function}" del servei "{$a->service}"?';
$string['requireauthentication'] = 'Aquest mètode requereix autenticació amb permís xxx.';
$string['required'] = 'Requerit';
$string['requiredcapability'] = 'Capacitat requerida';
$string['requiredcapability_help'] = 'Si ho marqueu, sols els usuaris amb la capacitat habilitada podran accedir al servei.';
$string['requiredcaps'] = 'Capacitats requerides';
$string['resettokenconfirm'] = 'Voleu realment reinicialitzar aquest clau de servei web per a <strong>{$a->user}</strong> al servei <strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = 'Voleu realment reiniciar aquesta clau? Qualsevol enllaç desat que contingui aquesta clau antiga no funcionarà mai més.';
$string['response'] = 'Resposta';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Al compte restaurat li cal reiniciar la contrasenya abans de rebre un testimoni.';
$string['restparam'] = 'REST (Paràmetres POST)';
$string['restrictedusers'] = 'Sols usuaris autoritzats.';
$string['restrictedusers_help'] = 'Aquesta opció determina si tots els usuaris amb el permís per crear un testimoni de serveis web poden generar un testimoni d\'aquest servei a través de la seva pàgina de claus de seguretat o si només els usuaris autoritzats poden fer-ho.';
$string['securitykey'] = 'Clau de seguretat (token)';
$string['securitykeys'] = 'Claus de seguretat';
$string['selectauthorisedusers'] = 'Selecciona usuaris autoritzats';
$string['selectedcapability'] = 'Seleccionat';
$string['selectedcapabilitydoesntexit'] = 'El conjunt actual de capacitats requerides ({$a}) ja no existeix. Canvieu-lo i deseu els canvis.';
$string['selectservice'] = 'Selecciona un servei';
$string['selectspecificuser'] = 'Selecciona un usuari específic';
$string['selectspecificuserdescription'] = 'Afegeix l\'usuari de serveis web com un usuari autoritzat';
$string['service'] = 'Servei';
$string['servicehelpexplanation'] = 'Un servei és un conjunt de funcions. Un servei pot ser accessible per a tots els usuaris o sols per a uns usuaris especificats.';
$string['servicename'] = 'Nom del servei';
$string['servicenotavailable'] = 'El servei web no està disponible (no existeix o pot estar desactivat)';
$string['servicesbuiltin'] = 'Integra serveis';
$string['servicescustom'] = 'Personalitza serveis';
$string['serviceusers'] = 'Usuaris autoritzats';
$string['serviceusersettings'] = 'Paràmetres de l\'usuari';
$string['serviceusersmatching'] = 'Cerca d\'usuaris autoritzats';
$string['serviceuserssettings'] = 'Canvia els paràmetres per als usuaris autoritzats';
$string['shortnametaken'] = 'Aquest nom curt s\'està utilitzant en un altre servei ({$a})';
$string['simpleauthlog'] = 'Inici de sessió amb autenticació simple';
$string['step'] = 'Pas';
$string['supplyinfo'] = 'Més detalls';
$string['testauserwithtestclientdescription'] = 'Simula l\'accés extern al servei mitjançant el client de prova del servei web. Abans de fer-ho, inicieu sessió com un usuari amb la capacitat moodle/webservice:createtoken i obtingueu la clau de seguretat (testimoni) a través de la Configuració del meu perfil. Podeu utilitzar aquest testimoni en el client de prova. En el client de prova, també trieu un protocol activat amb la autenticació de testimoni. <strong>AVÍS: Les funcions que proveu S\'EXECUTARAN, així que aneu amb compte amb el que trieu per a provar!</strong>';
$string['testclient'] = 'Servei web client de prova';
$string['testclientdescription'] = 'El servei web client de prova <strong>executa</strong> funcions de forma <strong>REAL</strong>. No executeu funcions que no coneixeu. <br/>* Totes les funcions servei web no estan implementades encara al client de prova. <br/>* Per provar que un usuari no pot accedir a algunes funcions, podeu provar algunes funcions de les quals no teniu permís.<br/>* Per veure millor els missatges d\'error  configureu la depuració a  <strong>{$a->mode}</strong> dins {$a->atag}<br/>* Accediu a {$a->amfatag}.';
$string['testwithtestclient'] = 'Proveu el servei';
$string['testwithtestclientdescription'] = 'Simula l\'accés extern al servei mitjançant el client de prova del servei web. Utilitza un protocol habilitat amb autenticació de testimoni. <strong>AVÍS: Les funcions que proveu S\'EXECUTARAN, així que aneu amb compte amb el que trieu per a provar!</strong>';
$string['token'] = 'Testimoni';
$string['tokenauthlog'] = 'Autenticació de testimoni';
$string['tokencreatedbyadmin'] = 'Només ho pot reinicialitzar l\'administrador (*)';
$string['tokencreator'] = 'Creador';
$string['unknownoptionkey'] = 'Tecla d\'opció desconeguda ({$a})';
$string['unnamedstringparam'] = 'Un paràmetre de cadena no té nom.';
$string['updateusersettings'] = 'Actualitza';
$string['uploadfiles'] = 'Es poden penjar fitxers';
$string['uploadfiles_help'] = 'Si ho habiliteu qualsevol usuari podrà penjar fitxers amb les seves claus segures a les seves àrees privades o a la secció fitxers esborranys. És aplicable qualsevol limitació de les quotes de fitxers d\'usuari.';
$string['userasclients'] = 'Usuaris com clients amb el testimoni';
$string['userasclientsdescription'] = 'Els passos següents us ajudaran a configurar el servei web Moodle per als usuaris com a clients. Aquests passos també us ajudaran a configurar el mètode d\'autenticació recomanat (claus de seguretat). En aquest cas, l\'usuari generarà el seu propi testimoni (<em>token</em>) des la seva pàgina de seguretat mitjançant la Configuració del meu perfil.';
$string['usermissingcaps'] = 'Capacitats perdudes: {$a}';
$string['usernameorid'] = 'Nom d\'usuari / ID d\'usuari';
$string['usernameorid_help'] = 'Introduïu un nom d\'usuari o un ID d\'usuari.';
$string['usernameoridnousererror'] = 'No hi ha usuaris amb aquest nom d\'usuari o ID d\'usuari.';
$string['usernameoridoccurenceerror'] = 'S\'ha trobat més d\'un usuari amb aquest nom d\'usuari. Introduïu l\'ID d\'usuari.';
$string['usernotallowed'] = 'L\'usuari no té permés aquest servei. Primer us cal permetre aquest usuari en la pàgina d\'administració {$a} del usuaris permesos.';
$string['userservices'] = 'Serveis de l\'usuari: {$a}';
$string['usersettingssaved'] = 'S\'han desat els paràmetres de l\'usuari';
$string['validuntil'] = 'Vàlid fins';
$string['validuntil_help'] = 'Si ho habiliteu, el servei serà inactivat després d\'aquesta data per a aquest usuari.';
$string['webservice'] = 'Servei web';
$string['webservices'] = 'Serveis web';
$string['webservicesoverview'] = 'Resum';
$string['webservicetokens'] = 'Testimonis de servei web';
$string['wrongusernamepassword'] = 'Nom d\'usuari o contrasenya incorrecte';
$string['wsaccessuserdeleted'] = 'S\'ha rebutjat l\'accés al servei web perquè l\'usuari està suprimit: {$a}';
$string['wsaccessuserexpired'] = 'S\'ha rebutjat l\'accés al servei web perquè ha expirat la contrasenya de l\'usuari: {$a}';
$string['wsaccessusernologin'] = 'S\'ha rebutjat l\'accés al servei web perquè l\'usuari té associada una autenticació del tipus «nologin»: {$a}';
$string['wsaccessusersuspended'] = 'S\'ha rebutjat l\'accés al servei web perquè l\'usuari té la inscripció suspesa: {$a}';
$string['wsaccessuserunconfirmed'] = 'S\'ha rebutjat l\'accés al servei web perquè l\'usuari no està confirmat: {$a}';
$string['wsclientdoc'] = 'Documentació del client de servei web Moodle';
$string['wsdocapi'] = 'Documentació de l\'API';
$string['wsdocumentation'] = 'Documentació de servei web';
$string['wsdocumentationdisable'] = 'La documentació del servei web està inhabilitada.';
$string['wsdocumentationintro'] = 'Per crear un client us aconsellem que llegiu  {$a->doclink}';
$string['wsdocumentationlogin'] = 'o introduïu el vostre nom d\'usuari i contrasenya per al servei web:';
$string['wspassword'] = 'Contrasenya del servei web';
$string['wsusername'] = 'Nom d\'usuari del servei web';
