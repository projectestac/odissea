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
 * Strings for component 'webservice', language 'gl', version '3.11'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Excepción ao control de acceso';
$string['actwebserviceshhdr'] = 'Protocolos activos de servizo web';
$string['addaservice'] = 'Engadir un servizo';
$string['addcapabilitytousers'] = 'Comprobar as funcionalidades dos usuarios';
$string['addcapabilitytousersdescription'] = 'Os usuarios deben ter dous permisos (permisos); webservice:createtoken e unha funcionalidade que concorde cos protocolos empregados, por exemplo webservice/rest:use, webservice/soap:use. Para lograr isto, defina un rol de servizos web cos permisos axeitados activados e asígnello ao usuario dos servizos web como un rol do sistema.';
$string['addfunction'] = 'Engadir unha función';
$string['addfunctionhelp'] = 'Seleccione a función a engadir ao servizo.';
$string['addfunctions'] = 'Engadir funcións';
$string['addfunctionsdescription'] = 'Seleccione as funcións requiridas para o servizo de nova creación.';
$string['addrequiredcapability'] = 'Asignar/Desasignar as funcionalidades requiridas';
$string['addservice'] = 'Engadir un novo servizo: {$a->name} (ID: {$a->id})';
$string['addservicefunction'] = 'Engadir funcións ao servizo «{$a}»';
$string['allusers'] = 'Todos os usuarios';
$string['apiexplorer'] = 'Explorador API';
$string['apiexplorernotavalaible'] = 'O explorador API aínda non está dispoñíbel.';
$string['arguments'] = 'Argumentos';
$string['authmethod'] = 'Método de autenticación';
$string['callablefromajax'] = 'Chamábel dende AJAX';
$string['cannotcreatetoken'] = 'Non ten permisos para crear o testemuño de servizo web para o servizo {$a}.';
$string['cannotgetcoursecontents'] = 'Non e posíbel obter os contidos do curso';
$string['checkusercapability'] = 'Comprobar a funcionalidade do usuario';
$string['checkusercapabilitydescription'] = 'O usuario debe ter os permisos axeitados conforme ao protocolo empregado, por exemplo webservice/rest:use, webservice/soap:use. Para lograr isto, defina un rol de servizos web cos permisos do protocolo activados e asígnello ao usuario dos servizos web como un rol do sistema.';
$string['configwebserviceplugins'] = 'Por razóns de seguridade, só se activarán os protocolos que vaian ser empregados.';
$string['context'] = 'Contexto';
$string['createservicedescription'] = 'Un servizo é un conxunto de funcións de «servizos web». Permitiralle ao usuario acceder a un novo servizo. Na páxina <strong>Engadir servizo</strong> marque as opcións «Activado» e «Usuarios autorizados». Seleccione «No se require ningunha funcionalidade».';
$string['createserviceforusersdescription'] = 'Un servizo é un conxunto de funcións de «servizos web». Permitiralle aos usuarios acceder a un novo servizo. Na páxina <strong>Engadir servizo</strong> marque as opcións «Activado» e desmarque «Usuarios autorizados». Seleccione «No se require ningunha funcionalidade».';
$string['createtoken'] = 'Crear un testemuño';
$string['createtokenforuser'] = 'Crear un testemuño para un usuario';
$string['createtokenforuserdescription'] = 'Crear un testemuño para o usuario dos servizos web.';
$string['createuser'] = 'Crear un usuario específico';
$string['createuserdescription'] = 'Requírese un usuario de servizos web para representar o sistema que controla Moodle.';
$string['criteriaerror'] = 'Faltan os permisos para buscar sobre un criterio.';
$string['default'] = 'Predeterminado para «{$a}»';
$string['deleteaservice'] = 'Eliminar o servizo';
$string['deleteservice'] = 'Eliminar o servizo: {$a->name} (ID: {$a->id})';
$string['deleteserviceconfirm'] = 'Eliminar un servizo tamén eliminará os testemuños relacionados con este servizo. Confirma que quere eliminar o servizo externo «{$a}»?';
$string['deletetokenconfirm'] = 'Confirma que quere eliminar este testemuño do servizo web para <strong>{$a->user}</strong> no servizo <strong>{$a->service}</strong>?';
$string['disabledwarning'] = 'Todos os protocolos de servizos web están desactivados. O parámetro «Activar servizos web» pode atopalo en «Características avanzadas».';
$string['doc'] = 'Documentación';
$string['docaccessrefused'] = 'Vostede non ten permisos para ver a documentación deste testemuño';
$string['documentation'] = 'Documentación do servizo web';
$string['downloadfiles'] = 'Pode descargar ficheiros';
$string['downloadfiles_help'] = 'Se o activa, calquera usuario pode descargar ficheiros coa súa chave de seguridade. Por suposto que están restrinxidos aos ficheiros que se lles permite descargar no sitio.';
$string['editaservice'] = 'Editar un servizo';
$string['editservice'] = 'Editar o servizo: {$a->name} (ID: {$a->id})';
$string['enabled'] = 'Activado';
$string['enabledocumentation'] = 'Activar a documentación do desenvolvedor';
$string['enabledocumentationdescription'] = 'Está dispoñíbel, para os protocolos activados, unha documentación detallada sobre os servizos web.';
$string['enableprotocols'] = 'Activar os protocolos';
$string['enableprotocolsdescription'] = 'Ten que estar activado, cando menos, un protocolo. Por razóns de seguridade, os protocolos que se van empregar deben estar activados.';
$string['enablews'] = 'Activar os servizos web';
$string['enablewsdescription'] = 'Os servizos web deben estar activados nas «Características avanzadas».';
$string['entertoken'] = 'Escriba unha chave/testemuño de seguridade:';
$string['error'] = 'Erro: {$a}';
$string['errorcatcontextnotvalid'] = 'Non pode executar funcións no contexto da categoría (category id:{$a->catid}). A mensaxe de erro do contexto foi: {$a->message}';
$string['errorcodes'] = 'Mensaxe de erro';
$string['errorcoursecontextnotvalid'] = 'Non pode executar funcións no contexto do curso (course id:{$a->courseid). A mensaxe de erro do contexto foi: {$a->message}';
$string['errorinvalidparam'] = 'O parámetro «{$a}» é incorrecto.';
$string['errornotemptydefaultparamarray'] = 'O parámetro de descrición do servizo web chamado «{$a}» é unha estrutura única ou múltiple. De xeito predeterminado só pode ser unha matriz baleira. Revise a descrición do servizo web.';
$string['erroroptionalparamarray'] = 'O parámetro de descrición do servizo web chamado «{$a}» é unha estrutura única ou múltiple. Non pode configurarse como VALUE_OPTIONAL. Revise a descrición do servizo web.';
$string['eventwebservicefunctioncalled'] = 'Chamada a función de servizo web';
$string['eventwebserviceloginfailed'] = 'Fallou a función de servizo web';
$string['eventwebserviceservicecreated'] = 'Creado o servizo de servizo web';
$string['eventwebserviceservicedeleted'] = 'Eliminado o servizo de servizo web';
$string['eventwebserviceserviceupdated'] = 'Actualizado o servizo de servizo web';
$string['eventwebserviceserviceuseradded'] = 'Engadido o servizo de servizo web';
$string['eventwebserviceserviceuserremoved'] = 'Retirado o servizo de servizo web';
$string['eventwebservicetokencreated'] = 'Creado o testemuño de servizo web';
$string['eventwebservicetokensent'] = 'Enviado o testemuño de servizo web';
$string['execute'] = 'Executar';
$string['executewarnign'] = 'ADVERTENCIA: Se preme en «Executar» a súa base de datos será modificada. Os cambios non poden reverterse automaticamente!';
$string['externalservice'] = 'Servizo externo';
$string['externalservicefunctions'] = 'Funcións do servizo externo';
$string['externalservices'] = 'Servizos externos';
$string['externalserviceusers'] = 'Usuarios do servizo externo';
$string['failedtolog'] = 'Produciuse un erro ao iniciar sesión';
$string['filenameexist'] = 'Xa existe ese nome de ficheiro: {$a}';
$string['forbiddenwsuser'] = 'Non é posíbel crear un testemuño para un usuario sen confirmar, eliminado, suspendido ou convidado.';
$string['function'] = 'Función';
$string['functions'] = 'Funcións';
$string['generalstructure'] = 'Estrutura xeral';
$string['information'] = 'Información';
$string['installexistingserviceshortnameerror'] = 'Xa existe un servizo web con nome abreviado «{$a}». Non é posíbel instalar/actualizar un servizo web diferente con este nome abreviado.';
$string['installserviceshortnameerror'] = 'Erro de programación: o nome abreviado de servizo «{$a}» unicamente pode conter caracteres alfanuméricos (letras e números), guión baixo (_), guión (-) ou punto (.)';
$string['invalidextparam'] = 'Parámetro API externa incorrecto: {$a}';
$string['invalidextresponse'] = 'Resposta API externa incorrecta: {$a}';
$string['invalidiptoken'] = 'Testemuña incorrecta, o seu IP non está admitido';
$string['invalidtimedtoken'] = 'Testemuño incorrecto, o testemuño caducou';
$string['invalidtoken'] = 'Testemuño incorrecto, non se atopou a testemuño';
$string['iprestriction'] = 'Restrición IP';
$string['iprestriction_help'] = 'O usuario poderá facer uso dos servizos web se se conecta dende os enderezos IP listados a seguir (separados por comas).';
$string['key'] = 'Chave';
$string['keyshelp'] = 'As chaves empréganse para acceder a súa conta no Moodle dende aplicacións externas.';
$string['loginrequired'] = 'Restrinxido a usuarios autenticados';
$string['manageprotocols'] = 'Xestionar os protocolos';
$string['managetokens'] = 'Xestionar os testemuños';
$string['missingcaps'] = 'Faltan os permisos';
$string['missingcaps_help'] = 'Lista de permisos requiridos para o servizo que non posúe o usuario seleccionado. Os permisos que faltan deben engadirse ao rol do usuario para poder empregar este servizo.';
$string['missingpassword'] = 'Falta o contrasinal';
$string['missingrequiredcapability'] = 'É requisito ter a funcionalidade {$a}.';
$string['missingusername'] = 'Falta o nome de usuario';
$string['missingversionfile'] = 'Hai un erro de programación: falta o ficheiro «version.php» para o compoñente {$a}';
$string['nameexists'] = 'Este nome xa está a ser usado por outro servizo';
$string['nocapabilitytouseparameter'] = 'O usuario non ten a funcionalidade necesaria para utilizar o parámetro {$a}';
$string['nofunctions'] = 'Este servizo non ten funcións.';
$string['norequiredcapability'] = 'Non se requiren funcionalidades';
$string['notoken'] = 'A lista de testemuños está baleira.';
$string['onesystemcontrolling'] = 'Permitir un sistema externo para controlar o Moodle';
$string['onesystemcontrollingdescription'] = 'Os pasos seguintes axudaranlle a crear un servizo web para que un sistema externo interactúe con Moodle. Inclúe o axuste do método de identificación por testemuño (chave de seguridade).';
$string['onlyseecreatedtokens'] = 'É posíbel eliminar calquera testemuño, aínda que só se poden ver os testemuños que creou.';
$string['operation'] = 'Operación';
$string['optional'] = 'Opcional';
$string['passwordisexpired'] = 'O contrasinal caducou.';
$string['phpparam'] = 'XML-RPC (estrutura PHP)';
$string['phpresponse'] = 'XML-RPC (estrutura PHP)';
$string['postrestparam'] = 'Código PHP para REST (solicitudes POST)';
$string['potusers'] = 'Non hai usuarios autorizados';
$string['potusersmatching'] = 'Non hai usuarios autorizados que coincidan';
$string['print'] = 'Imprimir todo';
$string['privacy:metadata:serviceusers'] = 'Unha lista de usuarios que poden empregar determinados servizos externos';
$string['privacy:metadata:serviceusers:iprestriction'] = 'IP restrinxido para usar o servizo';
$string['privacy:metadata:serviceusers:timecreated'] = 'A data na que se creou o rexistro';
$string['privacy:metadata:serviceusers:userid'] = 'O ID do usuario';
$string['privacy:metadata:serviceusers:validuntil'] = 'A data na que remata a autorización';
$string['privacy:metadata:tokens'] = 'Un rexistro de testemuños para interactuar con Moodle a través de servizos web ou aplicacións móbiles.';
$string['privacy:metadata:tokens:creatorid'] = 'O ID do usuario que creou o testemuño';
$string['privacy:metadata:tokens:iprestriction'] = 'IP restrinxido para usar este testemuño';
$string['privacy:metadata:tokens:lastaccess'] = 'A data en que se usou o testemuño por última vez';
$string['privacy:metadata:tokens:privatetoken'] = 'Un testemuño máis privado usado ocasionalmente para validar certas operacións, como o SSO (Single Sign-On =Ingreso único)';
$string['privacy:metadata:tokens:timecreated'] = 'A data na que se creou o testemuño';
$string['privacy:metadata:tokens:token'] = 'O testemuño do usuario';
$string['privacy:metadata:tokens:tokentype'] = 'O tipo de testemuño';
$string['privacy:metadata:tokens:userid'] = 'O ID do usuario de quen é este testemuño';
$string['privacy:metadata:tokens:validuntil'] = 'A data ata a que é valido o testemuño';
$string['privacy:request:notexportedsecurity'] = 'Non se exporta por razóns de seguridade';
$string['protocol'] = 'Protocolo';
$string['removefunction'] = 'Retirar';
$string['removefunctionconfirm'] = 'Confirma que quere retirar a función «{$a->function}» do servizo «{$a->service}»?';
$string['requireauthentication'] = 'Este método require identificación con permiso xxx.';
$string['required'] = 'Requirido';
$string['requiredcapability'] = 'Requírese a funcionalidade';
$string['requiredcapability_help'] = 'Se activa a opción, só os usuarios coas funcionalidades requiridas poderán acceder ao servizo.';
$string['requiredcaps'] = 'Requírense permisos';
$string['resettokenconfirm'] = 'Confirma que quere restaurar esta chave do servizo web para <strong>{$a->user}</strong> no servizo <strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = 'Confirma que quere restaurar esta chave? Calquera ligazón gardada que conteña a chave anterior non volverá a funcionar.';
$string['response'] = 'Resposta';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'A conta restaurada necesita reiniciar o contrasinal antes de obter un testemuño.';
$string['restparam'] = 'REST (parámetros POST)';
$string['restrictedusers'] = 'Só usuarios autorizados';
$string['restrictedusers_help'] = 'Este axuste determina se todos os usuarios con permiso para crear un testemuño de servizos web poden xerar ese testemuño mediante as súas páxinas de chaves de seguridade o se só poderán facelo os usuarios autorizados.';
$string['securitykey'] = 'Chave de seguridade (testemuño)';
$string['securitykeys'] = 'Chaves de seguridade';
$string['selectauthorisedusers'] = 'Seleccione os usuarios autorizados';
$string['selectedcapability'] = 'Seleccionado';
$string['selectedcapabilitydoesntexit'] = 'O actual axuste da funcionalidade requirida ({$a}) xa non existe. Cámbieo e garde os cambios.';
$string['selectservice'] = 'Seleccione un servizo';
$string['selectspecificuser'] = 'Seleccione un usuario específico';
$string['selectspecificuserdescription'] = 'Engada o usuario de servizos web como un usuario autorizado.';
$string['service'] = 'Servizo';
$string['servicehelpexplanation'] = 'Un servizo é un conxunto de funcións. A dito servizo poden acceder todos os usuarios ou só algúns especificados.';
$string['servicename'] = 'Nome do servizo';
$string['servicenotavailable'] = 'O servizo Web non está dispoñíbel (non existe ou pode estar desactivado)';
$string['servicerequireslogin'] = 'O servizo Web non está dispoñíbel (a sesión foi pechada ou caducou).';
$string['servicesbuiltin'] = 'Servizos incluídos';
$string['servicescustom'] = 'Servizos personalizados';
$string['serviceusers'] = 'Usuarios autorizados';
$string['serviceusersettings'] = 'Axustes do usuario';
$string['serviceusersmatching'] = 'Usuarios autorizados que coinciden';
$string['serviceuserssettings'] = 'Cambiar os axustes para usuarios autorizados';
$string['shortnametaken'] = 'Este nome abreviado xa está a ser usado noutro servizo ({$a})';
$string['simpleauthlog'] = 'Acceso por identificación simple';
$string['step'] = 'Paso';
$string['supplyinfo'] = 'Mais detalles';
$string['testauserwithtestclientdescription'] = 'Simular o acceso externo ao servizo empregando o cliente de proba do servizo web. Antes de facelo, acceda como usuario coa funcionalidade moodle/webservice:createtoken e obteña a chave de seguridade (testemuño) a través da páxina de preferencias do usuario. Vostede empregará este testemuño co cliente de proba. No cliente de proba, seleccione un protocolo activado con autenticación por testemuño. <strong>ADVERTENCIA: As funcións que probe SERÁN EXECUTADAS para este usuario, polo que debe ser cauteloso co que decida probar!</strong>';
$string['testclient'] = 'Cliente de proba do servizo web';
$string['testclientdescription'] = '* O cliente de proba do servizo web <strong>executa</strong> as funcións <strong>REALMENTE</strong>. Non probe funcións que non coñeza. <br />* Aínda non foron incluídas todas as funcións de servizos web no cliente de proba <br />* Para revisar que un usuario non poida acceder a algunhas funcións, pode probar algunhas funcións ás que vostede non lle deu permisos.<br />* Para ver mensaxes de erro máis claros, configure a depuración a <strong>{$a->mode}</strong> dentro de {$a->atag}<br />';
$string['testwithtestclient'] = 'Probar o servizo';
$string['testwithtestclientdescription'] = 'Simula o acceso externo ao servizo usando o cliente de proba do servizo web. Use un protocolo permitido con autenticación por testemuño. <strong>ADVERTENCIA: As funcións que probe SERÁN EXECUTADAS para este usuario, polo que debe ser cauteloso co que decida probar!</strong>';
$string['token'] = 'Testemuña';
$string['tokenauthlog'] = 'Autenticación con testemuño';
$string['tokencreatedbyadmin'] = 'Só pode ser restabelecido polo administrador (*)';
$string['tokencreator'] = 'Creador';
$string['unknownoptionkey'] = 'Chave de opción descoñecida ({$a})';
$string['unnamedstringparam'] = 'Un parámetro de tipo cadea está sen nome.';
$string['updateusersettings'] = 'Actualizar';
$string['uploadfiles'] = 'Pode enviar ficheiros';
$string['uploadfiles_help'] = 'Se o activa, calquera usuario pode enviar ficheiros coas súas chaves de seguridade a súa propia zona de ficheiros privados ou á zona de borradores. Aplicaranse as cotas de ficheiros a calquera usuarios.';
$string['userasclients'] = 'Usuarios como clientes con testemuño';
$string['userasclientsdescription'] = 'Os seguintes pasos poden axudarlle a configurar o servizo web do Moodle para usuarios como clientes. Estes pasos tamén lle axudarán a configurar o método de autenticación recomendado baseado na testemuño (chaves de seguridade). Neste caso, o usuario xerará o seu testemuño na páxina de chaves de seguridade a través da súa páxina de preferencias.';
$string['usermissingcaps'] = 'Faltan os permisos: {$a}';
$string['usernameorid'] = 'Nome de usuario / ID de usuario';
$string['usernameorid_help'] = 'Escriba o nome de usuario ou o ID de usuario.';
$string['usernameoridnousererror'] = 'Non se atoparon usuarios con este nome de usuario / ID de usuario.';
$string['usernameoridoccurenceerror'] = 'Atopouse máis dun usuario con este nome de usuario. Escriba o ID de usuario.';
$string['usernotallowed'] = 'O usuario non ten permitido este servizo. Primeiramente debe permitirllo a este usuario nas {$a} permitidas da páxina de administración de usuarios.';
$string['userservices'] = 'Servizos de usuario: {$a}';
$string['usersettingssaved'] = 'Gardados os axustes do usuario';
$string['validuntil'] = 'Caduca o';
$string['validuntil_help'] = 'Se activa a opción, o servizo desactivarase para este usuario após esta data.';
$string['webservice'] = 'Servizo web';
$string['webservices'] = 'Servizos web';
$string['webservicesoverview'] = 'Vista xeral';
$string['webservicetokens'] = 'Testemuñas de servizo web';
$string['wrongusernamepassword'] = 'Nome de usuario ou contrasinal estragados';
$string['wsaccessuserdeleted'] = 'Rexeitouse o acceso ao servizo web para o nome de usuario eliminado: {$a}';
$string['wsaccessuserexpired'] = 'Rexeitouse o acceso ao servizo web para o contrasinal caducado: {$a}';
$string['wsaccessusernologin'] = 'Rexeitouse o acceso ao servizo web para o nome de usuario sen acceder: {$a}';
$string['wsaccessusersuspended'] = 'Rexeitouse o acceso ao servizo web para o nome de usuario suspendido: {$a}';
$string['wsaccessuserunconfirmed'] = 'Rexeitouse o acceso ao servizo web para o nome de usuario sen confirmar: {$a}';
$string['wsclientdoc'] = 'Documentación dos servizos web do Moodle';
$string['wsdocapi'] = 'Documentación da API';
$string['wsdocumentation'] = 'Documentación do servizo web';
$string['wsdocumentationdisable'] = 'A documentación do servizo web está desactivada.';
$string['wsdocumentationintro'] = 'Para crear un cliente aconsellámoslle que lea a {$a->doclink}';
$string['wsdocumentationlogin'] = 'ou escriba o seu nome de usuario e o contrasinal do servizo web:';
$string['wspassword'] = 'Contrasinal do servizo web';
$string['wsusername'] = 'Nome de usuario do servizo web';
