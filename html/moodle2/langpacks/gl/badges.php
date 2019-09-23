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
 * Strings for component 'badges', language 'gl', branch 'MOODLE_36_STABLE'
 *
 * @package   badges
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Accións';
$string['activate'] = 'Activar o acceso';
$string['activatesuccess'] = 'O acceso ás insignias activouse correctamente.';
$string['addbadge'] = 'Engadir insignias';
$string['addbadgecriteria'] = 'Engadir criterios para insignia';
$string['addbadge_help'] = 'Seleccionar todas as insignias que deberían engadirse a este requirimento de insignia. Manteña premida a tecla CTRL para seleccionar múltiples elementos.';
$string['addcohort'] = 'Engadir círculo';
$string['addcohort_help'] = 'Seleccionar todos os círculos que deberían engadirse a este requirimento de insignia. Manteña premida a tecla CTRL para seleccionar múltiples elementos.';
$string['addcourse'] = 'Engadir cursos';
$string['addcourse_help'] = 'Seleccionar todos os curso que deberían engadirse a este requirimento de insignia. Manteña premida a tecla CTRL para seleccionar múltiples elementos.';
$string['addcriteria'] = 'Engadir criterios';
$string['addcriteriatext'] = 'Para comezar a engadir criterios, seleccione unha das opcións do menú despregábel.';
$string['addrelated'] = 'Engadir a insignia relacionada';
$string['addtobackpack'] = 'Engadir á mochila';
$string['adminonly'] = 'Esta páxina é de acceso restrinxido só para administradores.';
$string['after'] = 'despois da data recepción.';
$string['aggregationmethod'] = 'Método de agregación';
$string['all'] = 'Todos';
$string['allmethod'] = 'Dánse todas as condicións seleccionadas';
$string['allmethodactivity'] = 'Todas as actividades seleccionadas están completas';
$string['allmethodbadges'] = 'Foron gañadas todas as insignias seleccionadas';
$string['allmethodcohort'] = 'Membros en todos os círculos seleccionados';
$string['allmethodcourseset'] = 'Todos os cursos seleccionados están completos';
$string['allmethodmanual'] = 'Todos os roles seleccionados outorgan a insignia';
$string['allmethodprofile'] = 'Completáronse todos os campos do perfil seleccionado';
$string['allowcoursebadges'] = 'Activar as insignias de curso';
$string['allowcoursebadges_desc'] = 'Permitir que se creen insignias e se concedan no contexto do curso.';
$string['allowexternalbackpack'] = 'Activar a conexión con mochilas externas';
$string['allowexternalbackpack_desc'] = 'Permitir que os usuarios estabelezan conexións e presenten as insignias dos seus fornecedores externos de mochilas.

Nota: Recoméndase deixar esta opción desactivada se non é posíbel acceder ao sitio web desde Internet (i.e. por culpa da devasa).';
$string['any'] = 'Calquera';
$string['anymethod'] = 'Dánse algunha das condicións seleccionadas';
$string['anymethodactivity'] = 'Algunha das actividades seleccionadas están completas';
$string['anymethodbadges'] = 'Foi gañada calquera das insignias seleccionadas';
$string['anymethodcohort'] = 'Membros en calquera dos círculos seleccionados';
$string['anymethodcourseset'] = 'Calquera dos cursos seleccionados están completos';
$string['anymethodmanual'] = 'Calquera dos roles seleccionados reciben a insignia';
$string['anymethodprofile'] = 'Completouse calquera dos campos do perfil seleccionado';
$string['archivebadge'] = 'Quere borrar a insignia «{$a}» pero manter as insignias xa concedidas?';
$string['archiveconfirm'] = 'Borrar e manter as insignias xa concedidas';
$string['archivehelp'] = '<p>Esta opción implica que a insignia quedará marcada como «retirada» e xa non aparecerá na lista de insignias. Os usuarios xa non volverán a podela ganar, pero aqueles aos que xa se lle concedeu poderán seguir amosándoa na súa páxina de perfil e trasladala á súa mochila externa.</p>
<p>Se desexa que os seus usuarios manteñan o acceso ás insignias xa concedidas é importante que seleccione esta opción en vez de eliminalas por completo.</p>';
$string['attachment'] = 'Anexar a insignia á mensaxe';
$string['attachment_help'] = 'De estar marcado, anexarase a insignia recibida ao correo do destinatario para a súa descarga. (teñen que estar activados os anexos en Administración do sitio > Engadidos > Mensaxes saíntes > Correo para poder usar esta opción)';
$string['award'] = 'Insignia recibida';
$string['awardedtoyou'] = 'Emitida para min';
$string['awardoncron'] = 'Activouse correctamente o acceso ás insignias. Moitos dos usuarios poden gañar instantaneamente esta insignia. Para asegurar o rendemento do sitio, esta acción procesarase con tempo.';
$string['awards'] = 'Destinatarios';
$string['backpackavailability'] = 'Comprobación da insignia externa';
$string['backpackavailability_help'] = 'Para que os destinatarios de insignias poidan probar que gañaron as súas insignias, un servizo de mochila externa debe acceder ao seu sitio para comprobar as insignias emitidas desde el. Actualmente, o seu sitio no parece que sexa accesíbel neste momento, o que significa que as insignias que emitise ou que se emitan no futuro no se poderán comprobar.

##Por que estou a ver esta mensaxe?

Pode ser que a súa devasa impida o acceso de usuarios externos á súa rede, que o seu sitio estea protexido por contrasinal, o que estea executando o sitio nun computador que no está dispoñíbel na Internet (como una máquina local para o desenvolvemento).

##É isto un problema?

Debería solucionar esta incidencia en todos os sitios en produción onde pretenda emitir insignias, do contrario os destinatarios no serán quen de probar que gañaron as insignias que vostede emite. No caso de que o seu sitio non estea aínda activo pode crear e emitir insignias de proba, en tanto que o sitio estea accesíbel antes de poñelo en produción.

##Que pasa se non consigo facer que todo o meu sitio sexa accesíbel publicamente?

O único URL necesario para a comprobación é [url-do-seu-sitio]/badges/assertion.php, así que se vostede pode modificar a devasa para permitir o acceso externo a ese ficheiro, seguirá funcionando a comprobación das insignias.';
$string['backpackbadges'] = 'Ten {$a->totalbadges} insignia(s) en pantalla de {$a->totalcollections} colección(s). <a href="mybackpack.php">Cambiar a configuración da mochila</a>.';
$string['backpackcannotsendverification'] = 'Non é posíbel enviar o correo de verificación';
$string['backpackconnection'] = 'Conexión coa mochila';
$string['backpackconnectioncancelattempt'] = 'Conéctese mediante un enderezo de correo diferente';
$string['backpackconnectionconnect'] = 'Conéctese á mochila';
$string['backpackconnection_help'] = 'Esta páxina permítelle configurar conexións a un fornecedor externo de mochilas. A conexión cunha mochila permítelle presentar en pantalla insignias externas dentro deste sitio e enviar as insignias gañadas á súa mochila.

Actualmente, soamente é compatíbel <a href="http://backpack.openbadges.org">Mozilla OpenBadges Backpack</a>. Cómpre que se rexistre nun servizo de mochila antes de tentar configurar unha conexión de mochila nesta páxina.';
$string['backpackconnectionresendemail'] = 'Reenviar o correo de verificación';
$string['backpackconnectionunexpectedresult'] = 'Produciuse un problema ao conectar coa súa mochila. Ténteo de novo.<br><br>Se o problema persiste, póñase en contacto co administrador.';
$string['backpackdetails'] = 'Configuración da mochila';
$string['backpackemail'] = 'Enderezo de correo';
$string['backpackemail_help'] = 'Enderezo de correo asociado coa súa mochila. Mentres estea conectado, as insignias gañadas neste sitio asociaranse con esta conta de correo.';
$string['backpackemailverificationpending'] = 'Verificación pendente';
$string['backpackemailverifyemailbody'] = 'Ola,

Solicitouse unha nova conexión á súa mochila de OpenBadges desde «{$a->sitename}» usando o seu enderezo de correo.

Para confirmalo e activar a conexión coa súa mochila, prema na ligazón de embaixo

{$a->link}

Na maioría dos programas de correo, isto debería aparecer como unha ligazón azul na que premer. Se iso non funciona, entón copie e pegue o enderezo na liña de enderezos na parte superior do seu navegador web.

Se precisa axuda, contacte co administrador do sitio,
{$a->admin}';
$string['backpackemailverifyemailsubject'] = '{$a}: Verificación de correo da mochila OpenBadges';
$string['backpackemailverifypending'] = 'Enviouse un correo de verificación a <strong>{$a}</strong>. Prema na ligazón de verificación no correo  para activar a conexión da Mochila';
$string['backpackemailverifysuccess'] = 'Grazas por verificar o seu enderezo de correo. Agora está conectado á súa mochila.';
$string['backpackemailverifytokenmismatch'] = 'A marca na ligazón que premeu non coincide coa marca almacenada. Asegúrese de premer na ligazón no correo máis recente que recibiu.';
$string['backpackimport'] = 'Configuración de importación de insignia';
$string['backpackimport_help'] = 'Tras unha conexión de mochila correcta, as insignias da súa mochila presentaranse na súa páxina «Insignias persoais» e na súa páxina de perfil.

Nesta área, pode seleccionar as coleccións de insignias da súa mochila que lle gustaría presentar no seu perfil.';
$string['badgedetails'] = 'Detalles da insignia';
$string['badgeimage'] = 'Imaxe';
$string['badgeimage_help'] = 'Esta é unha imaxe que se utilizará cando se emita a insignia.

Para engadir unha nova imaxe, navegue e seleccione unha imaxe (en formato JPG ou PNG), logo prema en «Gardar cambios». A imaxe recórtase en cadrado e redimensiónase para coincidir cos requirimentos das imaxes das insignias.';
$string['badgeprivacysetting'] = 'Configuración de privacidade da insignia';
$string['badgeprivacysetting_help'] = 'As insignias que gañe poden presentarse na súa páxina de perfil. Esta configuración permítelle estabelecer automaticamente a visibilidade de novas insignias gañadas.

Aínda pode controlar a configuración de insignias privadas individuais na súa páxina «Insignias persoais».';
$string['badgeprivacysetting_str'] = 'Amosar automaticamente as insignias que gañe na miña páxina de perfil';
$string['badges'] = 'Insignias';
$string['badgesalt'] = 'Salgar para a cadea de control do enderezo de correo do receptor';
$string['badgesalt_desc'] = 'A utilización dunha cadea de control permítelle aos servizos de mochila confirmar o gañador da insignia sen ter que expoñer o seu enderezo de correo. Esta configuración só debería utilizar números e letras.

Nota: A efecto de verificar o destinatario, evite cambiar esta configuración unha ves comece a emisión de insignias.';
$string['badgesdisabled'] = 'As insignias non están activas neste sitio.';
$string['badgesearned'] = 'Número de insignias gañadas: {$a}';
$string['badgesettings'] = 'Configuración de insignias';
$string['badgestatus_0'] = 'Non está dispoñíbel para os usuarios';
$string['badgestatus_1'] = 'Dispoñíbel para os usuarios';
$string['badgestatus_2'] = 'Non está dispoñíbel para os usuarios';
$string['badgestatus_3'] = 'Dispoñíbel para os usuarios';
$string['badgestatus_4'] = 'Arquivado';
$string['badgestoearn'] = 'Número de insignias dispoñíbeis: {$a}';
$string['badgesview'] = 'Insignias do curso';
$string['badgeurl'] = 'Ligazón da insignia emitida';
$string['bawards'] = 'Destinatarios ({$a})';
$string['bcriteria'] = 'Criterios';
$string['bdetails'] = 'Editar os detalles';
$string['bendorsement'] = 'Aprobación';
$string['bmessage'] = 'Mensaxe';
$string['boverview'] = 'Vista xeral';
$string['brelated'] = 'Insignias relacionadas ({$a})';
$string['bydate'] = 'completado por';
$string['claim'] = 'Reclamación';
$string['claimcomment'] = 'Comentario á aprobación';
$string['claimid'] = 'URL da reclamación';
$string['clearsettings'] = 'Limpar a configuración';
$string['completioninfo'] = 'Esta insignia emitiuse polo completado de:';
$string['completionnotenabled'] = 'O completado do curso non está activado para este curso, así non é posíbel incluílo nos criterios da insignia. O completado do curso pode activarse na configuración do curso.';
$string['configenablebadges'] = 'Cando está activada, esta funcionalidade permítelle crear insignias e premiar con elas aos usuarios do sitio.';
$string['configuremessage'] = 'Mensaxe da insignia';
$string['connect'] = 'Conectar';
$string['connected'] = 'Conectado';
$string['connecting'] = 'Conectando...';
$string['contact'] = 'Contacto';
$string['contact_help'] = 'Un enderezo de correo asociado co emisor da insignia.';
$string['copyof'] = 'Copia de {$a}';
$string['coursebadges'] = 'Insignias';
$string['coursebadgesdisabled'] = 'As insignias do curso non están activas neste sitio.';
$string['coursecompletion'] = 'Os alumnos deben completar este curso.';
$string['create'] = 'Nova insignia';
$string['createbutton'] = 'Crear unha insignia';
$string['creatorbody'] = '<p>{$a->user} completou todos os requirimentos da insignia e premióuselle coa insignia. Ver a insignia emitida en {$a->link} </p>';
$string['creatorsubject'] = '«{$a}» vén de ser premiado!';
$string['criteria_0'] = 'Esta insignia concédese cando...';
$string['criteria_1'] = 'Completado da actividade';
$string['criteria_1_help'] = 'Permite conceder unha insignia a usuario baseada no completado dun conxunto de actividades dentro dun curso.';
$string['criteria_2'] = 'Emisión manual por rol';
$string['criteria_2_help'] = 'Permite conceder unha insignia manualmente a usuarios que teñan un rol particular dentro do sitio ou curso.';
$string['criteria_3'] = 'Participación social';
$string['criteria_3_help'] = 'Social';
$string['criteria_4'] = 'Completado do curso';
$string['criteria_4_help'] = 'Permite conceder unha insignia a usuarios que completasen o curso. Este criterio pode ter parámetros adicionais como unha cualificación mínima e unha data de completado do curso.';
$string['criteria_5'] = 'Completando un conxunto de cursos';
$string['criteria_5_help'] = 'Permite conceder unha insignia a usuarios que completasen un conxunto de cursos. Cada curso pode ter parámetros adicionais como unha cualificación mínima e unha data de completado do curso.';
$string['criteria_6'] = 'Perfil de completado';
$string['criteria_6_help'] = 'Permite conceder unha insignia a usuarios por completar certos campos no seu perfil. Pode seleccionar tanto campos personalizados como predeterminados do perfil que están dispoñíbeis para os usuario.';
$string['criteria_7'] = 'Insignias outorgadas';
$string['criteria_7_help'] = 'Permite que se outorgue unha insignia aos usuarios en función das outras insignias que gañaron.';
$string['criteria_8'] = 'Membro do círculo';
$string['criteria_8_help'] = 'Permite que se outorgue unha insignia aos usuarios en función da participación no círculo.';
$string['criteriacreated'] = 'Criterios das insignias creados correctamente';
$string['criteriadeleted'] = 'Criterios das insignias eliminados correctamente';
$string['criteria_descr'] = 'Os alumnos reciben esta insignia cando completan o seguinte requirimento:';
$string['criteria_descr_0'] = 'Os alumnos reciben esta insignia cando completan <strong>{$a}</strong> dos requirimentos listados.';
$string['criteria_descr_1'] = '<strong>{$a}</strong> das actividades seguintes están completadas:';
$string['criteria_descr_2'] = 'Esta insignia debe concederse aos usuarios con <strong>{$a}</strong> dos seguintes roles:';
$string['criteria_descr_4'] = 'Os alumnos deben completar o curso';
$string['criteria_descr_5'] = 'Teñen que ser completados <strong>{$a}</strong> dos seguintes cursos:';
$string['criteria_descr_6'] = 'Teñen que ser completados <strong>{$a}</strong> dos seguintes campos do perfil do usuario:';
$string['criteria_descr_7'] = 'Teñen que ter sido gañadas <strong>{$a}</strong> das seguintes insignias:';
$string['criteria_descr_8'] = 'É necesario ser membro de <strong>{$a}</strong> dos seguintes círculos:';
$string['criteria_descr_bydate'] = 'por <em>{$a}</em>';
$string['criteria_descr_grade'] = 'cunha cualificación mínima de <em>{$a}</em>';
$string['criteria_descr_short0'] = 'Completar <strong>{$a}</strong> de:';
$string['criteria_descr_short1'] = 'Completar <strong>{$a}</strong> de:';
$string['criteria_descr_short2'] = 'Concedida por <strong>{$a}</strong> de:';
$string['criteria_descr_short4'] = 'Completar o curso';
$string['criteria_descr_short5'] = 'Completar <strong>{$a}</strong> de:';
$string['criteria_descr_short6'] = 'Completar <strong>{$a}</strong> de:';
$string['criteria_descr_short7'] = 'Completar <strong>{$a}</strong> de:';
$string['criteria_descr_short8'] = 'Membro do círculo en <strong>{$a}</strong> de:';
$string['criteria_descr_single_1'] = 'Ten que completar a seguinte actividade:';
$string['criteria_descr_single_2'] = 'Debe concederse esta insignia ao usuario co seguinte rol:';
$string['criteria_descr_single_4'] = 'Os alumnos deben completar este curso';
$string['criteria_descr_single_5'] = 'Ten que completar o seguinte curso:';
$string['criteria_descr_single_6'] = 'Ten que completar o seguinte campo do perfil de usuario:';
$string['criteria_descr_single_7'] = 'Ten que gañar a seguinte insignia:';
$string['criteria_descr_single_8'] = 'Requírese ser membro dos seguintes círculos:';
$string['criteria_descr_single_short1'] = 'Completar:';
$string['criteria_descr_single_short2'] = 'Concedido por:';
$string['criteria_descr_single_short4'] = 'Completar o curso';
$string['criteria_descr_single_short5'] = 'Completar:';
$string['criteria_descr_single_short6'] = 'Completar:';
$string['criteria_descr_single_short7'] = 'Completar:';
$string['criteria_descr_single_short8'] = 'Membro en:';
$string['criteriasummary'] = 'Resumo de criterios';
$string['criteriaupdated'] = 'Criterios das insignias actualizados correctamente';
$string['criterror'] = 'Incidencias cos parámetros actuais';
$string['criterror_help'] = 'Este conxunto de campos amosa todos os parámetros que inicialmente se lle engadiron aos requirimentos da insignia pero que xa no están dispoñíbeis. Recoméndase que estes parámetros se desactiven para asegurarse de que os alumnos poidan obter esta insignia no futuro.';
$string['currentimage'] = 'Imaxe actual';
$string['currentstatus'] = 'Estado actual:';
$string['dateawarded'] = 'Data da emisión';
$string['dateearned'] = 'Data: {$a}';
$string['day'] = 'Día(s)';
$string['deactivate'] = 'Desactivar o acceso';
$string['deactivatesuccess'] = 'O acceso ás insignias desactivouse correctamente.';
$string['defaultissuercontact'] = 'Detalles predeterminados de contacto do emisor da insignia';
$string['defaultissuercontact_desc'] = 'Un enderezo de correo asociado co emisor da insignia.';
$string['defaultissuername'] = 'Nome predeterminado do emisor da insignia';
$string['defaultissuername_desc'] = 'Nome do axente ou autoridade emisores.';
$string['delbadge'] = 'Quere borrar a insignia «{$a}» e eliminar as insignias xa concedidas?';
$string['delconfirm'] = 'Borrar e eliminar as insignias xa concedidas';
$string['delcritconfirm'] = 'Confirma que quere eliminar este criterio?';
$string['deletehelp'] = '<p>Borrar por completo unha insignia significa que tamén se elimina toda a súa información e os rexistros de criterios de entrega. Os usuarios aos que se lle concedeu esta insignia non poderán acceder a ela nin amosala na súa páxina de perfil.</p>
<p>Nota: Os usuarios aos que se lle concedeu esta insignia e xa a trasladaron á súa mochila externa seguirán a podela amosar na súa mochila. Sen embargo, non poderán acceder nin aos criterios nin aos enlaces ás páxinas de evidencia neste sitio web.</p>';
$string['delparamconfirm'] = 'Confirma que quere eliminar este parámetro?';
$string['description'] = 'Descrición';
$string['disconnect'] = 'Desconectar';
$string['donotaward'] = 'Actualmente, esta insignia non está activa, de modo que non é posíbel concederlla aos usuarios. Se quere conceder esta insignia, poña o seu estado como activo.';
$string['editsettings'] = 'Editar a configuración';
$string['enablebadges'] = 'Activar as insignias';
$string['endorsement'] = 'Aprobación';
$string['error:backpackdatainvalid'] = 'A data devolvida pola mochila é incorrecta';
$string['error:backpackemailnotfound'] = 'O enderezo de correo «{$a}» non está asociado a unha mochila. É necesario <a href="http://backpack.openbadges.org">crear unha mochila</a> para esa conta ou acceder con outro enderezo de correo.';
$string['error:backpackloginfailed'] = 'Non pode estar conectado a unha mochila externa pola seguinte razón: {$a}';
$string['error:backpacknotavailable'] = 'O seu sitio non é accesíbel desde a Internet, de modo que calquera insignia emitida por este sitio non é posíbel comprobala por un servizo externo de mochila.';
$string['error:backpackproblem'] = 'Hai un problema para conectar co seu fornecedor de servizo de mochila. Ténteo de novo máis adiante.';
$string['error:badgeawardnotfound'] = 'Non é posíbel verificar esta insignia outorgada. Esta insignia puido ser revogada.';
$string['error:badgenotfound'] = 'Non se atopa a insignia';
$string['error:badjson'] = 'O intento de conexión devolveu datos incorrectos.';
$string['error:cannotact'] = 'Non foi posíbel activar a insignia.';
$string['error:cannotawardbadge'] = 'Non foi posíbel conceder a insignia a un usuario.';
$string['error:cannotdeletecriterion'] = 'Este criterio non se pode eliminar.';
$string['error:cannotrevokebadge'] = 'Non foi posíbel revogar a insignia dun usuario.';
$string['error:clone'] = 'Non foi posíbel clonar a insignia.';
$string['error:connectionunknownreason'] = 'Fracasou a conexión, mais non se coñecen as razóns.';
$string['error:duplicatename'] = 'Xa existe unha insignia con ese nome no sistema.';
$string['error:externalbadgedoesntexist'] = 'Non se atopa a insignia';
$string['error:guestuseraccess'] = 'Neste momento está usando o acceso para convidados. Para ver as insignias ten que acceder coa súa conta de usuario.';
$string['error:invalidbadgeurl'] = 'O formato do URL do emisor da insignia é incorrecto.';
$string['error:invalidcriteriatype'] = 'Tipo de criterio incorrecto.';
$string['error:invalidexpiredate'] = 'A data de caducidade ten que situarse no futuro.';
$string['error:invalidexpireperiod'] = 'O período de caducidade non pode ser negativo nin igual a 0.';
$string['error:invalidparambadge'] = 'Esa insignia non existe.';
$string['error:invalidparamcohort'] = 'Ese círculo non existe.';
$string['error:noactivities'] = 'Non hai actividades con criterio de completado activado neste curso.';
$string['error:noassertion'] = 'Persona non devolveu ningunha aseveración. É probábel que pechara a xanela de diálogo antes de completar o proceso de acceso.';
$string['error:nobadges'] = 'Non hai insignias de curso nin de sitio con acceso activado para engadir como criterios.';
$string['error:nocohorts'] = 'Sen círculos';
$string['error:nocourses'] = 'O completado do curso non está activado en ningún dos curso deste sitio, así que non se pode presentar ningún. O completado do curso pode activarse na configuración do curso.';
$string['error:nogroups'] = '<p>Non hai coleccións públicas de insignias dispoñíbeis na súa mochila. </p>
<p>Só se amosan as coleccións públicas, <a href="http://backpack.openbadges.org">visite a súa mochila</a> para crear algunhas coleccións públicas.</p>';
$string['error:nopermissiontoview'] = 'Non ten permisos para ver os receptores de insignias';
$string['error:nosuchbadge'] = 'A insignia co ID {$a} non existe.';
$string['error:nosuchcohort'] = 'Aviso: Este círculo xa non está dispoñíbel.';
$string['error:nosuchcourse'] = 'Aviso: Este curso xa non está dispoñíbel.';
$string['error:nosuchfield'] = 'Aviso: este campo de usuario xa non está dispoñíbel.';
$string['error:nosuchmod'] = 'Aviso: Esta actividade xa non está dispoñíbel.';
$string['error:nosuchrole'] = 'Aviso: Este rol xa non está dispoñíbel.';
$string['error:nosuchuser'] = 'O usuario con este enderezo de correo non ten unha conta no fornecedor de mochilas actual.';
$string['error:notifycoursedate'] = 'Aviso: As insignias asociadas co completado de curso e actividade non se emitiran ata a data de comezo do curso.';
$string['error:parameter'] = 'Aviso: Cando menos, debería seleccionarse un dos parámetros para asegurar o correcto fluxo de emisión da insignia.';
$string['error:personaneedsjs'] = 'Para conectar coa súa mochila, actualmente, requírese JavaScript. Active o JavaScript e recargue a páxina.';
$string['error:relatedbadgedoesntexist'] = 'Non hai unha insignia pública con este identificador';
$string['error:requesterror'] = 'A solicitude de conexión fracasou (código de erro {$a}).';
$string['error:requesttimeout'] = 'A solicitude de conexión esgotou o tempo antes de completarse.';
$string['error:save'] = 'Non foi posíbel gardar a insignia.';
$string['error:userdeleted'] = '{$a->user} (Este usuario xa non existe en {$a->site})';
$string['eventbadgearchived'] = 'Insignia arquivada';
$string['eventbadgeawarded'] = 'Insignia concedida';
$string['eventbadgecreated'] = 'Insignia creada';
$string['eventbadgecriteriacreated'] = 'Creouse un criterio de insignia';
$string['eventbadgecriteriadeleted'] = 'Eliminouse un criterio de insignia';
$string['eventbadgecriteriaupdated'] = 'Actualizouse un criterio de insignia';
$string['eventbadgedeleted'] = 'Insignia eliminada';
$string['eventbadgedisabled'] = 'Insignia desactivada';
$string['eventbadgeduplicated'] = 'Insignia duplicada';
$string['eventbadgeenabled'] = 'Insignia activada';
$string['eventbadgelistingviewed'] = 'Lista de insignias vistas';
$string['eventbadgerevoked'] = 'Insignia revogada';
$string['eventbadgeupdated'] = 'Insignia actualizada';
$string['eventbadgeviewed'] = 'Insignia vista';
$string['evidence'] = 'Evidencia';
$string['existingrecipients'] = 'Destinatarios de insignias existentes';
$string['expired'] = 'Caducada';
$string['expiredate'] = 'Esta insignia caduca o {$a}.';
$string['expireddate'] = 'Esta insignia caducou o {$a}.';
$string['expireperiod'] = 'Esta insignia caduca {$a} día(s) despois de ser emitida.';
$string['expireperiodh'] = 'Esta insignia caduca {$a} hora(s) despois de ser emitida.';
$string['expireperiodm'] = 'Esta insignia caduca {$a} minuto(s) despois de ser emitida.';
$string['expireperiods'] = 'Esta insignia caduca {$a} segundo(s) despois de ser emitida.';
$string['expirydate'] = 'Data de caducidade';
$string['expirydate_help'] = 'Opcionalmente, as insignias poden caducar nunha data específica, ou a data pode calcularse segundo a data na que se emitiu a insignia para un usuario.';
$string['externalbadges'] = 'As miñas insignias doutros sitios web';
$string['externalbadges_help'] = 'Esta área presenta as insignias da súa mochila externa.';
$string['externalbadgesp'] = 'Insignias doutros sitios web:';
$string['externalconnectto'] = 'Para presentar insignias persoais externas, necesita <a href="{$a}">conectar cunha mochila</a>.';
$string['fixed'] = 'Data fixa';
$string['hiddenbadge'] = 'Desafortunadamente, o propietario da insignia non puxo esta información dispoñíbel.';
$string['imageauthoremail'] = 'Correo do autor da imaxe';
$string['imageauthoremail_help'] = 'Se se especifica, o enderezo de correo do autor da imaxe da insignia amosase na páxina de insignias.';
$string['imageauthorname'] = 'Nome do autor da imaxe';
$string['imageauthorname_help'] = 'Se se especifica, o nome do autor da imaxe da insignia amosase na páxina de insignias.';
$string['imageauthorurl'] = 'URL do autor da imaxe';
$string['imageauthorurl_help'] = 'Se se especifica, a ligazón do autor da imaxe da insignia amosase na páxina de insignias. O URL debe ter un prefixo http:// ou https://.';
$string['imagecaption'] = 'Lenda da imaxe';
$string['imagecaption_help'] = 'Se se especifica, a lenda da imaxe amosase na páxina de insignias.';
$string['invalidurl'] = 'URL incorrecto';
$string['issuancedetails'] = 'Caducidade da insignia';
$string['issuedbadge'] = 'Información da insignia emitida';
$string['issuerdetails'] = 'Detalles do emisor';
$string['issueremail'] = 'Correo';
$string['issueremail_help'] = 'Un enderezo de correo de contacto da organización que emite o aprobado.';
$string['issuername'] = 'Nome do emisor';
$string['issuername_endorsement'] = 'Nome de quen aproba';
$string['issuername_endorsement_help'] = 'O nome de quen aproba.';
$string['issuername_help'] = 'Nome do axente ou autoridade emisores.';
$string['issuerurl'] = 'URL do emisor';
$string['issuerurl_help'] = 'O sitio web da organización que emite o aprobado. O URL debe ter un prefixo http:// ou https://.';
$string['language'] = 'Idioma';
$string['language_help'] = 'O idioma usado na páxina de insignias.';
$string['localbadges'] = 'As miñas insignias do sitio web {$a}';
$string['localbadgesh'] = 'As miñas insignias deste sitio web';
$string['localbadgesh_help'] = 'Todas as insignias gañadas dentro deste sitio ao completar cursos, actividades de curso e outros requirimentos.

Pode xestionar as súas insignias aquí facéndoas públicas ou privadas para a súa páxina de perfil.

Pode descargar todas as súas insignias por cada páxina separadamente e gardalas no seu computador. As insignias descargadas poden engadirse ao seu servizo externo de mochila.';
$string['localbadgesp'] = 'Insignia de {$a}:';
$string['localconnectto'] = 'Para compartir estas insignias fóra deste sitio web, necesita <a href="{$a}">conectar cunha mochila</a>.';
$string['makeprivate'] = 'Facer privada';
$string['makepublic'] = 'Facer pública';
$string['managebadges'] = 'Xestionar as insignias';
$string['message'] = 'Corpo da mensaxe';
$string['messagebody'] = '<p>Concedéuselle unha insignia «%badgename%»!</p>
<p>Pode atopar máis información sobre esta insignia na páxina de información %badgelink%.</p>
<p>Pode xestionar e descargar a insignia da páxina {$a}.</p>';
$string['messagesubject'] = 'Parabéns! Vén de concedérselle unha insignia!';
$string['method'] = 'Este criterio está completo cando...';
$string['mingrade'] = 'Cualificación mínima requirida';
$string['month'] = 'Mes(es)';
$string['mybackpack'] = 'Configuración da mochila persoal';
$string['mybadges'] = 'Insignias persoais';
$string['never'] = 'Nunca';
$string['newbadge'] = 'Engadir unha nova insignia';
$string['newimage'] = 'Nova imaxe';
$string['noawards'] = 'Aínda non gañou esta insignia.';
$string['nobackpack'] = 'Non hai ningún servizo de mochila conectado a esta conta.<br/>';
$string['nobackpackbadges'] = 'Non hai insignias nas coleccións que seleccionou. <a href="mybackpack.php">Engadir máis coleccións</a>.';
$string['nobackpackcollections'] = 'Non hai coleccións seleccionadas. <a href="mybackpack.php">Engadir máis coleccións</a>.';
$string['nobadges'] = 'Non hai insignias dispoñíbeis.';
$string['nocriteria'] = 'Os criterios para esta insignia aínda non foron configurados.';
$string['noendorsement'] = 'Esta insignia non ten un aprobado.';
$string['noexpiry'] = 'Esta insignia non ten unha data de caducidade.';
$string['noparamstoadd'] = 'Non hai parámetros adicionais dispoñíbeis para engadir a este requirimento da insignia.';
$string['norelated'] = 'Esta insignia non ten ningunha insignia relacionada.';
$string['notacceptedrole'] = 'O seu rol de tarefas non está entre os roles que poden emitir manualmente esta insignia.<br/>
Se lle gustaría ver usuarios que xa gañasen esta insignia, pode visitar a páxina {$a}.';
$string['notconnected'] = 'Non conectado';
$string['noteendorsement'] = 'Pode empregarse un aprobado de terceiros para engadir valor á insignia. Por exemplo, unha insignia emitida por un profesor pode ser aprobada pola escola, ou unha insignia emitida por un órgano de concesión local pode ser aprobada polo órgano nacional de concesión.';
$string['noterelated'] = 'As insignias cunha conexión pódense marcarse como relacionadas. Por exemplo, as insignias cos mesmos criterios que se amosan en diferentes idiomas poden marcarse como relacionadas. Todas as insignias relacionadas amósanse na páxina de insignias.';
$string['nothingtoadd'] = 'Non hai criterios dispoñíbeis para engadir.';
$string['notification'] = 'Notificarlle ao creador da insignia';
$string['notification_help'] = 'Esta opción xestiona as notificacións enviadas a un creador de insignias para permitirlles saber que se emitiu a insignia.

Están dispoñíbeis as seguintes opcións:

* **NUNCA** - Non enviar notificacións.

* **SEMPRE** - Enviar unha notificación cada vez que se concede esta insignia.

* **DIARIAMENTE** - Enviar notificacións unha vez cada día.

* **SEMANALMENTE** - Enviar notificacións una vez cada semana.

*** MENSUALMENTE** - Enviar notificacións unha vez cada mes.';
$string['notifydaily'] = 'Diaria';
$string['notifyevery'] = 'Sempre';
$string['notifymonthly'] = 'Mensual';
$string['notifyweekly'] = 'Semanal';
$string['numawards'] = 'Esta insignia foi emitida para <a href="{$a->link}">{$a->count}</a> usuarios(s).';
$string['numawardstat'] = 'Esta insignia foi emitida para {$a} usuario(s).';
$string['overallcrit'] = 'dos criterios seleccionados están completados.';
$string['personaconnection'] = 'Rexístrese aquí co seu correo';
$string['personaconnection_help'] = 'Persona é un sistema para a súa identificación na web, usando un enderezo de correo da súa propiedade. A mochila de Open Badges utiliza Persona como sistema de acceso, polo que para conectarse a unha mochila necesita unha conta en Persona.

Para obter máis información sobre Persona visite <a href="https://login.persona.org/about">https://login.persona.org/about</a>.';
$string['potentialrecipients'] = 'Destinatarios potenciais da insignia';
$string['preferences'] = 'Preferencias da insignia';
$string['privacy:metadata:backpack'] = 'Un rexistro de mochilas de usuarios';
$string['privacy:metadata:backpack:backpackuid'] = 'O identificador único da mochila';
$string['privacy:metadata:backpack:backpackurl'] = 'O URL da mochila';
$string['privacy:metadata:backpack:email'] = 'O coreo asociado coa mochila';
$string['privacy:metadata:backpack:userid'] = 'O ID do usuario desta mochila';
$string['privacy:metadata:badge'] = 'Unha colección de insignias';
$string['privacy:metadata:badge:timecreated'] = 'A hora na que foi creada a insignia';
$string['privacy:metadata:badge:timemodified'] = 'A hora na que foi modificada a insignia';
$string['privacy:metadata:badge:usercreated'] = 'O ID do usuario que creou a insignia';
$string['privacy:metadata:badge:usermodified'] = 'O ID do usuario que modificou a insignia';
$string['privacy:metadata:criteriamet'] = 'Unha colección de criterios que se cumpriron';
$string['privacy:metadata:criteriamet:datemet'] = 'Data na que se cumpriron os criterios';
$string['privacy:metadata:criteriamet:userid'] = 'O ID do usuario que cumpriu os criterios';
$string['privacy:metadata:external:backpacks'] = 'Información compartida cando os usuarios envían as súas insignias a unha mochila externa';
$string['privacy:metadata:external:backpacks:badge'] = 'O nome da insignia';
$string['privacy:metadata:external:backpacks:description'] = 'A descrición da insignia';
$string['privacy:metadata:external:backpacks:image'] = 'A imaxe da insignia';
$string['privacy:metadata:external:backpacks:issuer'] = 'Algunha información sobre o emisor';
$string['privacy:metadata:external:backpacks:url'] = 'O URL de Moodle onde se pode ver a información da insignia emitida';
$string['privacy:metadata:issued'] = 'Un rexistro de insignias outorgadas';
$string['privacy:metadata:issued:dateexpire'] = 'A data na que caduca a insignia';
$string['privacy:metadata:issued:dateissued'] = 'A data da insignia';
$string['privacy:metadata:issued:userid'] = 'O ID do usuario ao que se lle outorgou unha insignia';
$string['privacy:metadata:manualaward'] = 'Un rexistro de outorgamentos manuais';
$string['privacy:metadata:manualaward:datemet'] = 'A data na que se lle outorgou ao usuario a insignia';
$string['privacy:metadata:manualaward:issuerid'] = 'O ID do usuario que outorga a insignia';
$string['privacy:metadata:manualaward:issuerrole'] = 'O rol do usuario que outorga a insignia';
$string['privacy:metadata:manualaward:recipientid'] = 'O ID do usuario ao que se lle outorgou manualmente unha insignia';
$string['recipientdetails'] = 'Detalles do receptor';
$string['recipientidentificationproblem'] = 'Non foi posíbel atopar un destinatario desta insignia entre os usuarios existentes.';
$string['recipients'] = 'Destinatarios da insignia';
$string['recipientvalidationproblem'] = 'Non é posíbel confirmar que o usuario actual é o receptor da insignia.';
$string['relatedbages'] = 'Insignias relacionadas';
$string['relative'] = 'Data relativa';
$string['requiredbadge'] = 'Debe engadirse, polo menos, unha insignia ao criterio de insignia.';
$string['requiredcohort'] = 'Cando menos, debería engadirse un círculo ao criterio de círculo.';
$string['requiredcourse'] = 'Cando menos, debería engadirse un curso ao criterio de conxunto de curso.';
$string['reviewbadge'] = 'Cambios no acceso as insignias';
$string['reviewconfirm'] = '<p>Con isto, fará que a súa insignia sexa visíbel para os usuarios e permítelles comezar a gañala.</p>

<p>É posíbel que algúns usuarios xa cumpran os criterios desta insignia e que se lles entregue inmediatamente despois de que a active.</p>

<p>Unha vez que a insignia sexa emitida será <strong>bloqueada</strong> - certos axustes, incluíndo os criterios e os axustes de caducidade, xa non se poderán modificar.</p>

<p>Confirma que quere permitir o acceso á insignia «{$a}»?</p>';
$string['revoke'] = 'Revogar a insignia';
$string['save'] = 'Gardar';
$string['searchname'] = 'Buscar por nome';
$string['selectaward'] = 'Seleccione o rol que lle gustaría usar para emitir esta insignia:';
$string['selectgroup_end'] = 'Soamente se amosan as coleccións públicas, <a href="http://backpack.openbadges.org">visite a súa mochila</a> para crear máis coleccións públicas.';
$string['selectgroup_start'] = 'Seleccione coleccións da súa mochila que presentar neste sitio:';
$string['selecting'] = 'Coas insignias seleccionadas...';
$string['setup'] = 'Configurar a conexión';
$string['signinwithyouremail'] = 'Acceda co seu correo';
$string['sitebadges'] = 'Insignias do sitio';
$string['sitebadges_help'] = 'As insignias só poden serlles concedidas aos usuarios por actividades relacionadas co sitio. Isto inclúe o completado dunha serie de cursos ou partes dos perfís de usuarios. As insignias do sitio tamén se poden emitir manualmente dun usuario a outro.

As insignias por actividades relacionadas co curso débense crear no nivel do curso. As insignias do curso pódense atopar en Administración do curso > Insignias.';
$string['status'] = 'Estado da insignia';
$string['status_help'] = 'O estado dunha insignia determina o seu comportamento no sistema:

*** DISPOÑÍBEL ** - Significa que esta insignia a poden gañar os usuarios. Namentres unha insignia estea dispoñíbel para os usuarios, non se poden modificar os criterios.

*** NO DISPOÑÍBEL ** - Significa que esta insignia non está dispoñíbel para os usuarios e non se pode gañar nin emitir manualmente. Se esa tal insignia nunca se emitise anteriormente, pódense cambiar os criterios.

Logo de que se emita unha insignia a un primeiro usuario, pasa automaticamente a **BLOQUEADA**. Os usuarios aínda poden obter insignias bloqueadas pero os seus criterios xa no se poden cambiar. Se necesita modificar detalles ou criterios dunha insignia bloqueada, pode duplicar esta insignia e facer todos os cambios necesarios.

*Por que bloqueamos insignias?*

Queremos asegurarnos de que todos os usuarios teñan os mesmos requirimentos para gañar una insignia. Actualmente, non é posíbel revogar insignias. Se permitimos que os requirimentos das insignias se poidan modificar en calquera momento, o máis probábel é que acabemos con que ao final usuarios que teñen a mesma insignia tivesen que satisfacer requirimentos completamente diferentes.';
$string['statusmessage_0'] = 'Esta insignia non está actualmente dispoñíbel para os usuarios. Active o acceso se quere que os usuarios consigan esta insignia.';
$string['statusmessage_1'] = 'Esta insignia está actualmente dispoñíbel para os usuarios. Desactive o acceso para facer calquera cambio.';
$string['statusmessage_2'] = 'Esta insignia non está actualmente dispoñíbel para os usuarios e os seus criterios están bloqueados. Active o acceso se quere que os usuarios consigan esta insignia.';
$string['statusmessage_3'] = 'Esta insignia está actualmente dispoñíbel para os usuarios, e os seus criterios están bloqueados.';
$string['statusmessage_4'] = 'Esta insignia está arquivada actualmente.';
$string['subject'] = 'Asunto da mensaxe';
$string['targetcode'] = 'Código';
$string['targetdescription'] = 'Descrición';
$string['targetframework'] = 'Marco';
$string['targeturl'] = 'URL';
$string['type'] = 'Tipo';
$string['variablesubstitution'] = 'Substitución de variábel nas mensaxes.';
$string['variablesubstitution_help'] = 'Nunha mensaxe de comunicación da insignia, pódense inserir algunhas variábeis no asunto e/ou no corpo da mensaxe para que se poidan substituír por valores reais cando se envía a mensaxe. As variábeis deben inserirse no texto tal e como se amosa a seguir. Pódense utilizar as seguintes variábeis:

%badgename%
:  Substituirase polo nome completo da insignia.

%username%
:  Substituirase polo nome completo do destinatario.

%badgelink%
:  Substituirase polo URL público con información sobre a insignia emitida.';
$string['version'] = 'Versión';
$string['version_help'] = 'O campo de versión pode usarse para seguir o desenvolvemento da insignia. Se se especifica, a versión amosase na páxina de insignias.';
$string['viewbadge'] = 'Ver a insignia emitida';
$string['visible'] = 'Visíbel';
$string['warnexpired'] = '(Esta insignia caducou!)';
$string['year'] = 'Ano(s)';
