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
 * Strings for component 'mnet', language 'gl', version '4.4'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (autoasinado)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (asinado)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP descifrado';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (autoasinado)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (asinado)';
$string['aboutyourhost'] = 'Sobre o seu servidor';
$string['accesslevel'] = 'Nivel de acceso';
$string['addhost'] = 'Engadir servidor';
$string['addnewhost'] = 'Engadir un novo servidor';
$string['addtoacl'] = 'Engadir ao control de acceso';
$string['allhosts'] = 'Todos os servidores';
$string['allhosts_no_options'] = 'Non hai opcións dispoñíbeis cando se ven varios servidores';
$string['allow'] = 'Permitir';
$string['applicationtype'] = 'Tipo de aplicación';
$string['authfail_nosessionexists'] = 'Erro na autorización: A sesión mnet non existe.';
$string['authfail_sessiontimedout'] = 'Erro na autorización: A sesión mnet acabou.';
$string['authfail_usermismatch'] = 'Erro na autorización: O usuario non coincide.';
$string['authmnetdisabled'] = 'O <em>complemento de autenticación</em> da rede de Moodle está <strong>desactivado</strong>.';
$string['badcert'] = 'Este certificado non é válido.';
$string['certdetails'] = 'Detalles do certificado';
$string['configmnet'] = 'MNet permite a comunicación deste servidor con outros servidores ou servizos.';
$string['couldnotgetcert'] = 'Non se encontrou ningún certificado en <br />{$a}. <br />Talvez o servidor non funcione ou estea mal configurado.';
$string['couldnotmatchcert'] = 'Isto non coincide co certificado actualmente publicado polo servidor web.';
$string['courses'] = 'cursos';
$string['courseson'] = 'cursos en';
$string['current_transport'] = 'Transporte actual';
$string['currentkey'] = 'Chave pública actual';
$string['databaseerror'] = 'Non foi posíbel escribir os detalles na base de datos.';
$string['deleteaserver'] = 'Eliminando un servidor';
$string['deletedhostinfo'] = 'O servidor foi eliminado.Se quere telo de volta, cambie o estado de eliminado a «Non».';
$string['deletedhosts'] = 'Srrvidores eliminados: {$a}';
$string['deletehost'] = 'Eliminar servidor';
$string['deletekeycheck'] = 'Está realmente certo de que desexa eliminar esta chave?';
$string['deleteoutoftime'] = 'A súa xanela de 60 segundos para eliminar esta chave caducou. Comece de novo.';
$string['deleteuserrecord'] = 'SSO ACL: eliminar rexistro do usuario «{$a}[0]» de {$a}[1].';
$string['deletewrongkeyvalue'] = 'Ocorreu un erro. Se non estaba a tentar eliminar a chave SSL do seu servidor, é posíbel que fose suxeito dun ataque malicioso. Non se executou ningunha acción.';
$string['deny'] = 'Denegar';
$string['description'] = 'Descrición';
$string['duplicate_usernames'] = 'Produciuse un erro ao crear un índice nas columnas «mnethostid» e »username» na súa táboa de usuarios.<br />Isto pode acontecer cando ten <a href="{$a}" target="_blank">nomes de usuarios duplicados na súa táboa de usuarios</a>.<br />A súa autorización aínda debería completarse correctamente. Prema na ligazón de arriba e logo aparecerá este problema nunha nova xanela en instrucións de arranxo. Vostede pode atendelo ao final da actualización.<br />';
$string['enabled_for_all'] = '(Este servizo foi activado para todos os servidores).';
$string['enterausername'] = 'Introduza un nome de usuario ou unha lista de nomes separados por vírgulas.';
$string['error7020'] = 'Este erro ocorre polo xeral se o sitio remoto creou un rexistro co wwwroot trabucado, por exemplo https://oseusitio.com en lugar de https://www.oseusitio.com. Póñase en contaco co administrador do sitio remoto co seu wwwroot (tal como se especifica en config.php) e pídalle que actualice o rexistro do seu servidor.';
$string['error7022'] = 'A mensaxe que enviou ao sitio remoto foi cifrado correctamente, mais non foi asinado. É moi estraño que ocorra isto e probabelmente Vostede debería informar sobre o erro (fornecendo toda a información posíbel sobre a versión da aplicación, etc.';
$string['error7023'] = 'O sitio remoto tentou descifrar a súa mensaxe con todas as chaves que ten rexistradas para o seu sitio, mais fracasaron. Debería poder solucionar este problema introducindo a man as chaves do sitio remoto. É pouco probábel que ocorra isto a non ser que non teña mantido contacto co sitio remoto durante varios meses.';
$string['error7024'] = 'Vostede envía unha mensaxe sen cifrar ao sitio remoto, mais este non acepta comunicacións sen cifrar dende o seu sitio. É moi estraño que ocorra isto e probabelmente Vostede debería informar sobre o erro (fornecendo toda a información posíbel sobre a versión da aplicación, etc).';
$string['error7026'] = 'A chave coa que foi asinada a súa mensaxe é distinta da chave no servidor remoto. É máis, o servidor remoto tentou obter a súa clave actual e non foi quen de facelo. Tente introducir manualmente a chave e volva a probar de facelo.';
$string['error709'] = 'O sitio remoto non foi quen de obter unha chave SSL para vostede.';
$string['eventaccesscontrolcreated'] = 'Creouse o control de accesos';
$string['eventaccesscontrolupdated'] = 'Actualizouse o control de accesos';
$string['expired'] = 'Esta chave caduca o';
$string['expires'] = 'Válida ata';
$string['expireyourkey'] = 'Eliminar esta chave';
$string['expireyourkeyexplain'] = 'Moodle alterna automaticamente as chaves cada 28 días (como predeterminado) mais ten a opción de adiantar <em>manualmente</em> a caducidade desta chave en calquera momento. Isto é útil se cre que a chave está en perigo. A substitución xérase entón inmediatamente de xeito automático.<br />Con todo, a eliminación da chave imposibilitará a súa comunicación con outros Moodles mentres non contacte manualmente con cada administrador e lles forneza a nova chave.';
$string['exportfields'] = 'Campos que exportar';
$string['failedaclwrite'] = 'Produciuse un fallo ao escribir á lista de control de acceso MNET o usuario «{$a}».';
$string['findlogin'] = 'Atopar o acceso';
$string['forbidden-function'] = 'Esa función non foi activada para RPC.';
$string['forbidden-transport'] = 'O método de transporte que está a tentar utilizar non está permitido.';
$string['forcesavechanges'] = 'Forzar a gravación das modificacións';
$string['helpnetworksettings'] = 'Configurar comunicación inter-Moodle';
$string['hidelocal'] = 'Agochar usuarios locais';
$string['hideremote'] = 'Agochar usuarios remotos';
$string['host'] = 'servidor';
$string['hostcoursenotfound'] = 'Servidor ou curso non encontrado';
$string['hostdeleted'] = 'Servidor eliminado';
$string['hostexists'] = 'Xa existe un rexistro para un servidor con ese nome de máquina. (Se cadra foi eliminado.) <a href="{$a}">Editar o rexistro</a>';
$string['hostlist'] = 'Lista de servidores en rede';
$string['hostname'] = 'Nome do servidor';
$string['hostnamehelp'] = 'O nome do dominio plenamente cualificado do servidor remoto, como por exemplo: www.example.com';
$string['hostnotconfiguredforsso'] = 'Este hub de Moodle remoto non está configurado para inicios de sesión remotos.';
$string['hostsettings'] = 'Configuración do servidor';
$string['http_self_signed_help'] = 'Permitir conexións utilizando un certificado DIY SSL autoasinado no servidor remoto.';
$string['http_verified_help'] = 'Permitir conexións utilizando un certificado SSL verificado en PHP no servidor remoto, sobre http (non https).';
$string['https_self_signed_help'] = 'Permitir conexións utilizando un DIY SSL autoasinado en PHP no servidor remoto sobre http.';
$string['https_verified_help'] = 'Permitir conexións utilizando un certificado SSL verificado no servidor remoto.';
$string['id'] = 'ID';
$string['idhelp'] = 'Este valor atribúese automaticamente e non se pode mudar';
$string['importfields'] = 'Campos que importar';
$string['inspect'] = 'Inspeccionar';
$string['installnosuchfunction'] = 'Produciuse un erro de codificación! Alguén está tentando instalar unha función mnet xmlrpc ({$a->method}) dende un ficheiro ({$a->file}) e non é posíbel atopalo!';
$string['installnosuchmethod'] = 'Produciuse un erro de codificación! Alguén está tentando instalar un método mnet xmlrpc ({$a->method}) nunha clase ({$a->class}) e non é posíbel atopala!';
$string['installreflectionclasserror'] = 'Produciuse un erro de codificación! A introspección MNet fallou para o método «{$a->method}» na clase «{$a->class}». A mensaxe orixinal de erro, por se serve de axuda, é: «{$a->error}»';
$string['installreflectionfunctionerror'] = 'Produciuse un erro de codificación! A introspección MNet fallou para a función «{$a->method}» no ficheiro «{$a->file}». A mensaxe orixinal de erro, por se serve de axuda, é: «{$a->error}»';
$string['invalidaccessparam'] = 'Parámetro de acceso non válido.';
$string['invalidactionparam'] = 'Parámetro de acción non válido.';
$string['invalidhost'] = 'Forneza un identificador de servidor válido';
$string['invalidpubkey'] = 'A chave non é unha SSL válida.';
$string['invalidurl'] = 'Parámetro URL non válido.';
$string['ipaddress'] = 'Enderezo IP';
$string['is_in_range'] = 'O enderezo IP  <code>{$a}</code>  constitúe un servidor de confianza válido.';
$string['ispublished'] = '{$a} Moodle activou este servizo para ti.';
$string['issubscribed'] = '{$a} Moodle estase subscribindo a este servizo do seu servidor.';
$string['keydeleted'] = 'A súa chave eliminouse e substituíuse con éxito.';
$string['keydeletedcancelled'] = 'Non se fixeron cambios na chave.';
$string['keymismatch'] = 'A chave pública que posúe para este servidor é diferente da publicada neste momento.';
$string['last_connect_time'] = 'Última conexión';
$string['last_connect_time_help'] = 'O tempo que permaneceu conectado a este servidor.';
$string['last_transport_help'] = 'O transporte que utilizou para a última conexión a este servidor.';
$string['leavedefault'] = 'Empregue no seu lugar os axustes predeterminados';
$string['listservices'] = 'Lista de servizos';
$string['loginlinkmnetuser'] = '<br />Se é un usuario remoto da rede Moodle e pode <a href="{$a}">confirmar o seu enderezo de correo electrónico aquí</a>, pode ser redirixido á súa páxina de inicio de sesión.<br />';
$string['logs'] = 'logs';
$string['managemnetpeers'] = 'Xestionar os pares';
$string['method'] = 'Método';
$string['methodhelp'] = 'Axuda de método para {$a}';
$string['methodsavailableonhost'] = 'Métodos dispoñíbeis en {$a}';
$string['methodsavailableonhostinservice'] = 'Métodos dispoñíbeis para {$a->service} en {$a->host}';
$string['methodsignature'] = 'Sinatura de método para {$a}';
$string['mnet'] = 'Rede Moodle';
$string['mnet_concatenate_strings'] = 'Concatenar (ata) 3 cadeas e devolver o resultado';
$string['mnet_session_prohibited'] = 'Os usuarios do seu servidor doméstico non teñen permiso neste momento para moverse a {$a}.';
$string['mnetdisabled'] = 'A rede de Moodle está <strong>desactivada</strong>.';
$string['mnetidprovider'] = 'Provedor de ID MNet';
$string['mnetidproviderdesc'] = 'Vostede pode empregar esta función para obter unha ligazón coa que poder acceder ao sitio. Se pode fornecer un enderezo de correo correcto que coincida co nome de usuario co que Vostede tentou acceder previamente.';
$string['mnetidprovidermsg'] = 'Vostede debería poder acceder no seu provedor {$a}.';
$string['mnetidprovidernotfound'] = 'Desculpe, non foi posíbel atopar máis información.';
$string['mnetpeers'] = 'Compañeiros';
$string['mnetservices'] = 'Servizos';
$string['mnetsettings'] = 'Configuración da rede Moodle';
$string['moodle_home_help'] = 'O camiño da páxina principal de Moodle no servidor remoto, como por exemplo: /moodle/.';
$string['name'] = 'Nome';
$string['net'] = 'Rede';
$string['networksettings'] = 'Configuración da rede';
$string['never'] = 'Nunca';
$string['noaclentries'] = 'Non hai entradas na lista de control de acceso SSO';
$string['noaddressforhost'] = 'Vaites, non foi posíbel resolver o nome da máquina ({$a})!';
$string['nocurl'] = 'A biblioteca PHP cURL non está instalada';
$string['nolocaluser'] = 'Non existe ningún rexistro local para usuario remoto, e non é posíbel crealo xa esta máquina no crea usuarios automaticamente. Contacte co seu administrador.';
$string['nomodifyacl'] = 'Non ten permiso para modificar a lista de control de acceso MNET.';
$string['nonmatchingcert'] = 'O asunto do certificado <br /><em>{$a}[0]</em><br />non coincide co servidor de que procede:<br /><em>{$a}[1]</em>.';
$string['nopubkey'] = 'Houbo un problema durante o proceso de recuperación da chave pública.<br />Talvez o servidor non acepte a rede de Moodle ou a chave non sexa válida.';
$string['nosite'] = 'Non foi posíbel atopar curso a nivel do sitio';
$string['nosuchfile'] = 'O ficheiro/función {$a} non existe.';
$string['nosuchfunction'] = 'Incapaz de localizar a función, ou función prohibida para RPC.';
$string['nosuchmodule'] = 'Ou hai algún erro no enderezo da función ou non foi posíbel atopala.
Use o formato mod/modulename/lib/functionname.';
$string['nosuchpublickey'] = 'Incapaz de obter a chave pública para a verificación da sinatura.';
$string['nosuchservice'] = 'O servizo RPC non está a funcionar neste servidor.';
$string['nosuchtransport'] = 'Non existe transporte con ese ID.';
$string['notBASE64'] = 'Esta cadea non está en formato Base64 Encoded. Non pode ser unha chave válida.';
$string['notPEM'] = 'Esta chave non está en formato PEM. Non vai funcionar.';
$string['not_in_range'] = 'O enderezo IP  <code>{$a}</code>  non constitúe un servidor de confianza válido.';
$string['notenoughidpinfo'] = 'O seu provedor de identidade non está a darnos información abondo para crear ou actualizar localmente a súa conta. Desculpe!';
$string['notinxmlrpcserver'] = 'Intento de acceso ao cliente remoto MNet, non é posíbel durante a execución do servidor XMLRPC';
$string['notmoodleapplication'] = 'AVISO: Esta non é una aplicativo Moodle, polo que é posíbel que algúns dos métodos de inspección non funcionen axeitadamente.';
$string['notpermittedtojump'] = 'Non ten permiso para comezar unha sesión remota dende este hub de Moodle.';
$string['notpermittedtojumpas'] = 'Vostede non pode comezar unha sesión remota cando está conectado como outro usuario.';
$string['notpermittedtoland'] = 'Non ten permiso para comezar unha sesión remota.';
$string['off'] = 'Desactivado';
$string['on'] = 'Activado';
$string['options'] = 'Opcións';
$string['peerprofilefielddesc'] = 'Aquí poden anularse os axustes globais dos campos do perfil que enviar e importar cando se crean usuarios novos';
$string['permittedtransports'] = 'Transportes permitidos';
$string['phperror'] = 'Un erro interno de PHP impediu efectuar o seu pedido.';
$string['position'] = 'Posición';
$string['postrequired'] = 'A función eliminada require un pedido POST.';
$string['privacy:metadata'] = 'O complemento MNet non almacena ningún dato persoal.';
$string['profileexportfields'] = 'Campos para enviar';
$string['profilefielddesc'] = 'Aquí pode configurar a lista de campos del perfil que se envían e reciben de MNet cando se crean ou actualizan as contas de usuario. Tamén pode anulalo para cada elemento MNet individual. Teña en conta que os seguintes campos envíanse sempre e non son opcionais: {$a}';
$string['profilefields'] = 'Campos de perfil';
$string['profileimportfields'] = 'Campos que importar';
$string['promiscuous'] = 'Promiscuo';
$string['publickey'] = 'Chave pública';
$string['publickey_help'] = 'Esta chave pública obtense automaticamente do servidor remoto.';
$string['publickeyrequired'] = 'Debe fornecer unha chave pública';
$string['publish'] = 'Publicar';
$string['reallydeleteserver'] = 'Confirma que quere eliminar o servidor?';
$string['receivedwarnings'] = 'Recibíronse as seguintes advertencias';
$string['recordnoexists'] = 'Ese rexistro non existe.';
$string['reenableserver'] = 'Non, seleccione esta opción para volver activar este servidor.';
$string['registerallhosts'] = 'Rexistrar todos os servidores (<em>modo Hub</em>)';
$string['registerallhostsexplain'] = 'Pode escoller rexistrar todos os servidores que tentan conectarte automaticamente con vostede. Isto significa que na lista de servidores aparecerá o rexistro de calquera sitio MNet que se conecte con vostede e solicite a súa chave pública.<br /> Embaixo proporciónase a posibilidade de configurar servizos para «Todos os servidores». Os servizos aí activados pódense fornecer a calquera servidor remoto de xeito indiscriminado indiscriminadamente.';
$string['registerhostsoff'] = 'Actualmente a función de rexistrar todos os servidores está <b>desactivada</b>';
$string['registerhostson'] = 'Actualmente a función de rexistrar todos os servidores está <b>activada</b>';
$string['remotecourses'] = 'Cursos remotos';
$string['remotehost'] = 'Servidor remoto';
$string['remotehosts'] = 'Servidores remotos';
$string['remoteuser'] = 'Usuario {$a->remotetype} remoto';
$string['remoteuserinfo'] = 'Perfil obtido de <a href="{$a->remoteurl}">{$a->remotename}</a>';
$string['requiresopenssl'] = 'A rede require a extensión OpenSSL';
$string['restore'] = 'Restaurar';
$string['returnvalue'] = 'Valor devolto';
$string['reviewhostdetails'] = 'Revisar detalles do servidor';
$string['reviewhostservices'] = 'Revisar servizos do servidor';
$string['selectaccesslevel'] = 'Seleccione un nivel de acceso da lista.';
$string['selectahost'] = 'Seleccione un servidor Moodle remoto.';
$string['service'] = 'Nome do servizo';
$string['serviceid'] = 'ID do servizo';
$string['servicesavailableonhost'] = 'Servizos dispoñíbeis en {$a}';
$string['serviceswepublish'] = 'Servizos que publicamos para {$a}.';
$string['serviceswesubscribeto'] = 'Servizos en {$a} aos que nos subscribimos.';
$string['settings'] = 'Axustes';
$string['showlocal'] = 'Mostrar usuarios locais';
$string['showremote'] = 'Mostrar usuarios remotos';
$string['ssl_acl_allow'] = 'SSO ACL: Permitir usuario {$a}[0] de {$a}[1]';
$string['ssl_acl_deny'] = 'SSO ACL: Denegar usuario {$a}[0] de {$a}[1]';
$string['sslverification'] = 'Verificación SSL';
$string['sslverification_help'] = 'Esta opción permítelle configurar o nivel de seguridade ao conectarse a un par usando HTTPS.

* Ningún: sen nivel de seguridade
* Verificar só o servidor: valida o dominio do certificado SSL
* Verificar o servidor e o par (recomendado): valida o dominio e o emisor do certificado SSL.';
$string['ssoaccesscontrol'] = 'Control de acceso SSO';
$string['ssoacldescr'] = 'Use esta páxina para garantir/denegar o acceso a determinados usuarios de servidores remotos de rede Moodle. Isto é funcional cando se ofrecen servizos SSO a usuarios remotos. Para controlar a capacidade dos seus usuarios <em>locais</em> para se moveren a outros servidores de rede Moodle, use o sistema de papeis para lles garantir a funcionalidade <em>mnetcanroam</em>.';
$string['ssoaclneeds'] = 'Para que esta opción funcione, a rede de Moodle ten que estar activa, así como o seu complemento de autenticación activado.';
$string['strict'] = 'Estrito';
$string['subscribe'] = 'Subscribirse';
$string['system'] = 'Sistema';
$string['testclient'] = 'Cliente de proba MNet';
$string['testtrustedhosts'] = 'Probe un enderezo';
$string['testtrustedhostsexplain'] = 'Introduza un enderezo IP para ver se é un servidor de confianza.';
$string['theypublish'] = 'Eles publican';
$string['theysubscribe'] = 'Eles subscriben';
$string['transport_help'] = 'Estas opcións son recíprocas, o que quere dicir que só pode forzar un servidor remoto a utilizar unha certificación SSL asinada se o seu servidor tamén ten unha.';
$string['trustedhosts'] = 'Servidores XML-RPC';
$string['trustedhostsexplain'] = '<p>O mecanismo dos servidores de confianza permite que determinadas máquinas executen chamadas vía XML-RPC a calquera parte da API do Moodle. Isto está dispoñíbel para que os scripts controlen o comportamento de Moodle. Activalo pode ser unha opción perigosa. Se ten dúbidas, déixeo desactivado.</p>
<p>Isto <strong>non</strong> é necesario para a rede de Moodle.</p>
<p>Para activalo, introduza unha lista de enderezos IP ou redes, unha en cada liña.
Algúns exemplos:</p>O seu servidor local:<br />127.0.0.1<br />O seu servidor local (con bloqueo de rede):<br />127.0.0.1/32<br />Só o servidor co enderezo IP 192.168.0.7:<br />192.168.0.7/32<br />Calquera servidor con enderezo IP entre 192.168.0.1 e 192.168.0.255:<br />192.168.0.0/24<br />Calquera servidor:<br />192.168.0.0/0<br />Obviamente o último exemplo <strong>non</strong> é unha configuración recomendada.';
$string['turnitoff'] = 'Desconectalo';
$string['turniton'] = 'Conectalo';
$string['type'] = 'Tipo';
$string['unknown'] = 'Descoñecido';
$string['unknownerror'] = 'Ocorreu un erro descoñecido durante a negociación.';
$string['usercannotchangepassword'] = 'Non pode mudar aquí o seu contrasinal, pois é un usuario remoto.';
$string['userchangepasswordlink'] = '<br /> Talvez poida mudar o seu contrasinal no seu fornecedor <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a>.';
$string['usernotfullysetup'] = 'A súa conta de usuario está incompleta. Necesita ir <a href="{$a}">de volta ao seu provedor</a> e asegurarse de que completou alí o seu perfil. É probábel que sexa necesario saír do sitio e volver entrar para que teña efecto.';
$string['usersareonline'] = 'Advertencia: {$a} usuarios deste servidor teñen neste momento a sesión iniciada no seu sitio.';
$string['validated_by'] = 'Está validado pola rede:  <code>{$a}</code>';
$string['verifyhostandpeer'] = 'Verificar o servidor e o par';
$string['verifyhostonly'] = 'Verificar só o servidor';
$string['verifysignature-error'] = 'Fallou a verificación da sinatura. Ocorreu un erro.';
$string['verifysignature-invalid'] = 'Fallou a verificación da sinatura. Parece que estes datos non foron asinados por vostede.';
$string['version'] = 'versión';
$string['warning'] = 'Advertencia';
$string['wrong-ip'] = 'O seu enderezo IP non coincide co enderezo que consta no noso rexistro.';
$string['xmlrpc-missing'] = 'Debe ter XML-RPC instalado na súa construción PHP para poder usar esta característica';
$string['yourhost'] = 'O seu servidor';
$string['yourpeers'] = 'Os seus compañeiros';
