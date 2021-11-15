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
 * Strings for component 'tool_dataprivacy', language 'es', version '3.11'.
 *
 * @package     tool_dataprivacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Actividades y recursos';
$string['addcategory'] = 'Añadir categoría';
$string['addnewdefaults'] = 'Añadir un nuevo valor por defecto del módulo';
$string['addpurpose'] = 'Añadir propósito';
$string['addroleoverride'] = 'Añadir anulación de rol';
$string['approve'] = 'Aprobar';
$string['approvedrequestsubmitted'] = 'Su petición se ha enviado y será procesada pronto.';
$string['approverequest'] = 'Aprobar solicitud';
$string['automaticdatadeletionapproval'] = 'Aprobación de la solicitud de eliminación automática de datos';
$string['automaticdatadeletionapproval_desc'] = 'Si está habilitada, las solicitudes de eliminación de datos se aprueban automáticamente. <br/>Tenga en cuenta que la aprobación automática solo se aplicará a las nuevas solicitudes de eliminación de datos con esta configuración habilitada. Las solicitudes de eliminación de datos existentes pendientes de aprobación deberán ser aprobadas manualmente por el oficial de privacidad.';
$string['automaticdataexportapproval'] = 'Aprobación de la solicitud de exportación automática de datos';
$string['automaticdataexportapproval_desc'] = 'Si está habilitada, las solicitudes de exportación de datos se aprueban automáticamente. <br/>Tenga en cuenta que la aprobación automática solo se aplicará a las nuevas solicitudes de exportación de datos con esta configuración habilitada. Las solicitudes de exportación de datos existentes pendientes de aprobación deberán ser aprobadas manualmente por el oficial de privacidad.';
$string['automaticdeletionrequests'] = 'Crear solicitudes de eliminación de datos automáticas';
$string['automaticdeletionrequests_desc'] = 'Si se habilita, se crearán solicitudes de eliminación de datos automáticas para cualquier cuenta de usuario eliminada manualmente.';
$string['bulkapproverequests'] = 'Aprobar solicitudes';
$string['bulkdenyrequests'] = 'Denegar solicitudes';
$string['cachedef_contextlevel'] = 'Categoría y propósito de niveles de contexto';
$string['cachedef_purpose'] = 'Propósitos de los datos';
$string['cachedef_purpose_overrides'] = 'Anulaciones de propósito en la herramienta de Privacidad de Datos';
$string['cancelrequest'] = 'Cancelar solicitud';
$string['cancelrequestconfirmation'] = '¿Realmente desea cancelar esta solicitud de datos?';
$string['cannotreset'] = 'No se puede reiniciar esta solicitud. Solamente pueden reiniciarse solicitudes rechazadas.';
$string['categories'] = 'Categorías';
$string['categorieslist'] = 'Lista de categorías de datos';
$string['category'] = 'Categoría';
$string['category_help'] = 'Una categoría en el registro de datos describe un tipo de datos. Puede añadirse una nueva categoría, o si se selecciona "Heredar", la categoría de datos de un contexto superior es aplicada. Los contextos son (de bajo a alto): Bloques > Módulos de actividad > Cursos > Categorías de curso > Usuario > Sitio.';
$string['categorycreated'] = 'Categoría creada';
$string['categorydefault'] = 'Categoría por defecto';
$string['categorydefault_help'] = 'La categoría por defecto es la categoría de datos aplicada a cualquier nueva instancia. Si se selecciona "Heredar", la categoría de datos de un contexto superior es aplicada. Los contextos son (de bajo a alto): Bloques > Módulos de actividad > Cursos > Categorías de curso > Usuario > Sitio.';
$string['categoryupdated'] = 'Categoría actualizada';
$string['close'] = 'Cerrar';
$string['compliant'] = 'Conforme';
$string['confirmapproval'] = '¿Realmente desea aprobar esta solicitud de datos?';
$string['confirmbulkapproval'] = '¿Realmente desea aprobar masivamente las solicitudes de datos seleccionadas?';
$string['confirmbulkdenial'] = '¿Realmente desea denegar masivamente las solicitudes de datos seleccionadas?';
$string['confirmcompletion'] = '¿Realmente quiere marcar como completa esta solicitud del usuario?';
$string['confirmcontextdeletion'] = '¿Realmente desea confirmar la eliminación de los contextos seleccionados? Esto también eliminará todos los datos del usuario para sus respectivos subcontextos.';
$string['confirmdenial'] = '¿Realmente desea denegar esta solicitud de datos?';
$string['confirmrequestresubmit'] = '¿Está seguro de querer eliminar la actual solicitud  {$a->type} para {$a->username} y reenviarla?';
$string['contactdataprotectionofficer'] = 'Contactar con el Oficial de Privacidad';
$string['contactdataprotectionofficer_desc'] = 'Si se habilita, los usuarios podrán contactar con el Oficial de Privacidad y hacer una solicitud a través de un enlace en sus páginas del perfil.';
$string['contactdpoviaprivacypolicy'] = 'Por favor contacte al Oficial de Privacidad como se describe en la Política de Privacidad.';
$string['contextlevelname10'] = 'Sitio';
$string['contextlevelname30'] = 'Usuarios';
$string['contextlevelname40'] = 'Categorías de curso';
$string['contextlevelname50'] = 'Cursos';
$string['contextlevelname70'] = 'Módulos de actividad';
$string['contextlevelname80'] = 'Bloques';
$string['contextpurposecategorysaved'] = 'Propósito y categoría guardados.';
$string['createcategory'] = 'Crear categoría de datos';
$string['createdeletedatarequest'] = 'Crear petición de eliminación de datos';
$string['createnewdatarequest'] = 'Crear una nueva solicitud de datos';
$string['createpurpose'] = 'Crear propósito de datos';
$string['creationauto'] = 'Automáticamente';
$string['creationmanual'] = 'Manualmente';
$string['datadeletion'] = 'Eliminación de datos';
$string['datadeletionpagehelp'] = 'Datos para los cuales el período de retención ha expirado están listados aquí. Por favor revise y confirme la eliminación de datos, será ejecutada por la tarea programada "Eliminar contextos que han expirado".';
$string['dataprivacy:downloadallrequests'] = 'Descargar datos exportados para todos';
$string['dataprivacy:downloadownrequest'] = 'Descargar sus datos exportados';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Solicitar eliminación de datos para menores';
$string['dataprivacy:makedatarequestsforchildren'] = 'Hacer solicitudes de datos para menores de edad';
$string['dataprivacy:managedataregistry'] = 'Gestionar registro de datos';
$string['dataprivacy:managedatarequests'] = 'Gestionar solicitudes de datos';
$string['dataprivacy:requestdelete'] = 'Solicitar eliminación de datos para usted';
$string['dataprivacy:requestdeleteforotheruser'] = 'Solicitar eliminación de datos en nombre de otro usuario';
$string['dataregistry'] = 'Registro de datos';
$string['dataregistryinfo'] = 'El registro de datos habilita las categorías (tipos de datos) y propósitos (la razón para procesar los datos) para que sean configurados para todos los contenidos del sitio - desde usuario y cursos hasta actividades y bloques. Para cada propósito, puede configurarse un período de retención. Cuando un período de retención haya expirado, los datos son señalizados y listados para eliminación, esperando la confirmación administrativa.';
$string['datarequestcreatedforuser'] = 'Solicitud de datos creada para {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'Creado automáticamente desde una tarea programada (usuario preexistente eliminado).';
$string['datarequestcreatedupondelete'] = 'Creada automáticamente al eliminar usuario.';
$string['datarequestemailsubject'] = 'Solicitud de datos: {$a}';
$string['datarequests'] = 'Solicitudes de datos';
$string['dataretentionexplanation'] = 'Este resumen muestra los propósitos y las categorías por defecto para retener datos del usuario. Ciertas áreas pudieran tener propósitos y categorías más específicas que las aquí listadas.';
$string['dataretentionsummary'] = 'Resumen de retención de datos';
$string['datecomment'] = '[{$a->date}]:
{$a->comment}';
$string['daterequested'] = 'Fecha solicitada';
$string['daterequesteddetail'] = 'Fecha solicitada:';
$string['defaultexpired'] = 'Datos para todos los usuarios';
$string['defaultexpiredexcept'] = 'Datos para todos los usuarios, excepto aquellos que tengan cualquiera de los siguientes roles:<br> {$a->unexpired}';
$string['defaultsinfo'] = 'Las categorías y propósitos por defecto son aplicadas a todas las instancias de nueva creación y a las existentes donde no está configurado un valor.';
$string['defaultssaved'] = 'Valores por defecto guardados';
$string['defaultswarninginfo'] = 'Advertencia: Cambiar estos valores por defecto podría afectar el período de retención de instancias existentes.';
$string['defaultunexpired'] = 'Solamente datos para usuarios que tengan cualquiera de los siguientes roles:<br>
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Solamente datos para usuarios que tienen uno de los roles siguientes:<br>
{$a->expired}
A menos que también tengan uno de los roles siguientes:<br>
{$a->unexpired}';
$string['deletecategory'] = 'Eliminar categoría';
$string['deletecategorytext'] = '¿Está seguro de querer eliminar la categoría \'{$a}\' ?';
$string['deletedefaults'] = 'Eliminar valores por defecto: {$a}';
$string['deletedefaultsconfirmation'] = '¿Está seguro de querer eliminar las categorías y los propósitos por defecto para {$a} módulos?';
$string['deleteexistingdeleteduserstask'] = 'Crear solicitud de eliminación datos para usuarios eliminados preexistentes';
$string['deleteexpiredcontextstask'] = 'Eliminar contextos que han expirado';
$string['deleteexpireddatarequeststask'] = 'Elimina archivos de solicitudes de exportación de datos que han expirado';
$string['deletemyaccount'] = 'Eliminar mi cuenta';
$string['deletepurpose'] = 'Eliminar propósito';
$string['deletepurposetext'] = '¿Está seguro de querer eliminar el propósito \'{$a}\' ?';
$string['deny'] = 'Denegar';
$string['denyrequest'] = 'Denegar solicitud';
$string['deprecated'] = 'Obsoleto';
$string['deprecatedexplanation'] = 'Este plugin está usando una versión antigua de alguna de las interfases de privacidad y debería de ser actualizado.';
$string['download'] = 'Descargar';
$string['downloadexpireduser'] = 'La descarga ha expirado. Envíe una solicitud nueva si desea exportar sus datos personales.';
$string['dporolemapping'] = 'Mapeo de roles del Oficial de Privacidad';
$string['dporolemapping_desc'] = 'El Oficial de Privacidad puede gestionar las solicitudes de datos. La capacidad tool/dataprivacy:managedatarequests debe de estar permitida para que un rol sea listado como una opción para mapeo como Oficial de Privacidad.';
$string['duplicaterole'] = 'Rol ya especificado';
$string['editcategories'] = 'Editar categorías';
$string['editcategory'] = 'Editar categoría';
$string['editdefaults'] = 'Editar valores por defecto: {$a}';
$string['editmoduledefaults'] = 'Editar valores por defecto del módulo';
$string['editpurpose'] = 'Editar propósito';
$string['editpurposes'] = 'Editar propósitos';
$string['effectiveretentionperiodcourse'] = '{$a} (después de la fecha de terminación del curso)';
$string['effectiveretentionperioduser'] = '{$a} (desde la última vez que el usuario accedió al sitio)';
$string['emailsalutation'] = 'Estimado/a {$a},';
$string['errorcannotrequestdeleteforother'] = 'No tiene permiso para crear una petición de eliminación de datos para este usuario.';
$string['errorcannotrequestdeleteforself'] = 'No tiene permiso para crear una petición de eliminación de datos para usted mismo.';
$string['errorcontactdpodisabled'] = 'La opción para contactar con el oficial de privacidad está deshabilitada.';
$string['errorcontexthasunexpiredchildren'] = 'El contexto "{$a}" todavía tiene subcontextos que aun no han caducado. No se ha marcado ningún contexto para eliminación.';
$string['errorinvalidrequestcomments'] = 'El campo de comentarios sólo puede contener texto plano.';
$string['errorinvalidrequestcreationmethod'] = '¡Método inválido de creación de solicitud!';
$string['errorinvalidrequeststatus'] = '¡Estado de solicitud inválido!';
$string['errorinvalidrequesttype'] = '¡Tipo de solicitud inválido!';
$string['errornocapabilitytorequestforothers'] = 'El usuario {$a->requestedby} no tiene la capacidad para hacer una solicitud de datos a nombre de y en representación del usuario {$a->userid}';
$string['errornoexpiredcontexts'] = 'No hay contextos caducados para procesar';
$string['errorrequestalreadyexists'] = 'Ya tiene una solicitud en curso.';
$string['errorrequestnotfound'] = 'Solicitud no encontrada';
$string['errorrequestnotwaitingforapproval'] = 'La solicitud no está esperando aprobación. Ya sea porque no está lista o porque ya ha sido procesada.';
$string['errorsendingmessagetodpo'] = 'Se encontró un error al tratar de enviarle un mensaje a {$a}.';
$string['exceptionnotificationbody'] = '<p>Ocurrió una excepción al llamar a <b>{$a->fullmethodname}</b>.<br>Esto significa que el plugin <b>{$a->component}</b> no terminó de procesar los datos. Debajo puede encontrar la información de la excepción que puede ser enviada al desarrollador del plugin.</p><pre>{$a->message}<br>

{$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'Ocurrió una excepción mientras se procesaban datos de privacidad';
$string['expandplugin'] = 'Plugin para expandir y contraer.';
$string['expandplugintype'] = 'Tipo del plugin para expandir y contraer.';
$string['expiredretentionperiodtask'] = 'Período de retención caducado';
$string['expiredrolewithretention'] = '{$a->retention} (Expirado)';
$string['expiry'] = 'Caducidad';
$string['explanationtitle'] = 'Iconos usados en esta página y lo que significan.';
$string['external'] = 'Adicional';
$string['externalexplanation'] = 'Un plugin adicional instalado en este sitio.';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'Curso en la Portada';
$string['gdpr_art_6_1_a_description'] = 'El interesado ha dado consentimiento para el tratamiento de sus datos personales para uno o más propósitos específicos';
$string['gdpr_art_6_1_a_name'] = 'Consentimiento (GDPR Art. 6.1(a))';
$string['gdpr_art_6_1_b_description'] = 'El tratamiento es necesario para el desempeño de un contrato para el cual el interesado es una parte, o como parte de la solicitud anterior del interesado para participar en un contrato';
$string['gdpr_art_6_1_b_name'] = 'Contrato (GDPR Art. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = 'Es necesario el tratamiento para cumplir con una obligación legal a la cual está sujeto el responsable';
$string['gdpr_art_6_1_c_name'] = 'Obligación legal (GDPR Art 6.1(c))';
$string['gdpr_art_6_1_d_description'] = 'El tratamiento es necesario para proteger los intereses vitales del interesado o de otra persona natural';
$string['gdpr_art_6_1_d_name'] = 'Intereses vitales (GDPR Art. 6.1(d))';
$string['gdpr_art_6_1_e_description'] = 'El tratamiento es necesario para el desempeño de un trabajo realizado en el interés público o en ejercicio de autoridad oficial encomendada al responsable';
$string['gdpr_art_6_1_e_name'] = 'Trabajo público (GDPR Art. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = 'El tratamiento es necesario para los propósitos de los intereses legítimos perseguidos por el responsable o por un tercero, excepto cuando tales intereses sean anulados por los intereses o derechos fundamentales y libertades  del interesado que requiera protección de datos personales, en particular cuando el interesado es un niño';
$string['gdpr_art_6_1_f_name'] = 'Intereses legítimos (GDPR Art. 6.1(f))';
$string['gdpr_art_9_2_a_description'] = 'El interesado ha dado su consentimiento expreso para el tratamiento de esos datos personales para uno o más fines específicos, excepto cuando la legislación de la Unión Europea o del Estado miembro establezca que el interesado no puede levantar la prohibición contemplada en el párrafo 1 del Artículo 9 de la GDPR';
$string['gdpr_art_9_2_a_name'] = 'Consentimiento explícito (GDPR Art. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = 'El tratamiento es necesario para los propósitos de cumplir con las obligaciones y ejercitar derechos específicos del responsable o del interesado en el campo de empleo y seguridad social y legislación de protección social en tanto está autorizado por una ley de la Unión Europea o de un Estado Miembro de ella o un acuerdo colectivo relativo a ley de Estados Miembros que proporciona salvaguardas apropiadas para los derechos fundamentales y los intereses del interesado';
$string['gdpr_art_9_2_b_name'] = 'Ley de protección/seguridad social y empleo (GDPR Art. 9.2(b))';
$string['gdpr_art_9_2_c_description'] = 'El tratamiento es necesario para proteger los intereses vitales del interesado o de otra persona natural en donde el interesado está física o legalmente impedido para otorgar el consentimiento';
$string['gdpr_art_9_2_c_name'] = 'Protección de intereses vitales (GDPR Art. 9.2(c))';
$string['gdpr_art_9_2_d_description'] = 'El tratamiento se lleva a cabo en el curso de sus actividades legítimas con las salvaguardias adecuadas por una fundación, asociación o cualquier otro organismo sin ánimo de lucro, con un objetivo político, filosófico, religioso o sindical y con la condición de que el procesamiento se relacione únicamente con el miembros o ex miembros del cuerpo o personas que tienen contacto regular con él en relación con sus propósitos y que los datos personales no se divulgan fuera de ese cuerpo sin el consentimiento de los interesados';
$string['gdpr_art_9_2_d_name'] = 'Atividades legítimas respecto a los miembros/contactos cercanos de una fundación, asociación o de otra organización no lucrativa (GDPR Art. 9.2(d))';
$string['gdpr_art_9_2_e_description'] = 'El tratamiento se relaciona a datos personales que son hechos públicos de forma manifiesta por el interesado';
$string['gdpr_art_9_2_e_name'] = 'Datos hechos públicos por el interesado (GDPR Art. 9.2(e))';
$string['gdpr_art_9_2_f_description'] = 'El tratamiento es necesario para el establecimiento, ejercicio o defensa de querellas legales o cuando las cortes estén actuando en su capacidad judicial';
$string['gdpr_art_9_2_f_name'] = 'Requerimientos legales y acciones de la corte (GDPR Art. 9.2(f))';
$string['gdpr_art_9_2_g_description'] = 'El tratamiento es necesario por razones de interés público sustancial, sobre la base de la legislación de la Unión Europea o del Estado miembro, que será proporcional al objetivo perseguido, respetará la esencia del derecho a la protección de datos y establecerá medidas adecuadas y específicas para salvaguardar los derechos fundamentales y los intereses del interesado';
$string['gdpr_art_9_2_g_name'] = 'Interés público sustancial (GDPR Art. 9.2(g))';
$string['gdpr_art_9_2_h_description'] = 'El tratamiento es necesario para fines de medicina preventiva u ocupacional, para la evaluación de la capacidad laboral del empleado, el diagnóstico médico, la provisión de atención o tratamiento de salud o asistencia social o la gestión de los sistemas y servicios de salud o asistencia social sobre la base de la legislación del Estado miembro o de la Unión Europea o en virtud de un contrato con un profesional de la salud y sujeto a las condiciones y garantías a que se hace referencia en el párrafo 3 del Artículo 9 de la GDPR';
$string['gdpr_art_9_2_h_name'] = 'Propósitos médicos (GDPR Art. 9.2(h))';
$string['gdpr_art_9_2_i_description'] = 'El tratamiento es necesario por razones de interés público en el ámbito de la salud pública, como la protección contra amenazas transfronterizas graves para la salud o la garantía de altos niveles de calidad y seguridad de la asistencia sanitaria y de medicamentos o dispositivos médicos, sobre la base de la legislación de la Unión Europea o de los Estados miembros que establece medidas adecuadas y específicas para salvaguardar los derechos y libertades del interesado, en particular el secreto profesional';
$string['gdpr_art_9_2_i_name'] = 'Salud pública (GDPR Art. 9.2(i))';
$string['gdpr_art_9_2_j_description'] = 'El tratamiento es necesario para fines de archivo de interés público, investigación científica o histórica o con fines estadísticos, de conformidad con el artículo 89, apartado 1, basada en la legislación de la Unión Europea o del Estado miembro, que será proporcional al objetivo perseguido y respetará la esencia del derecho a protección de datos y proveerá medidas adecuadas y específicas para salvaguardar los derechos fundamentales y los intereses del interesado';
$string['gdpr_art_9_2_j_name'] = 'Interés público, o investigación científica/histórica/estadística (GDPR Art. 9.2(j))';
$string['hide'] = 'Contraer todo';
$string['httpwarning'] = 'Cualquier dato descargado de este sitio podría no estar encriptado. Por favor contacte con su administrador del sistema y solicite que instalen SLL en este sitio.';
$string['inherit'] = 'Heredar';
$string['lawfulbases'] = 'Bases legales';
$string['lawfulbases_help'] = 'Seleccione al menos una opción que servirá como la base legal para el tratamiento de datos personales. Para detalles acerca de estas bases legales, por favor vea <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">GDPR Art. 6.1</a>';
$string['markcomplete'] = 'Marcar como completada';
$string['markedcomplete'] = 'Su solicitud ha sido marcada como completada por el oficial de privacidad.';
$string['message'] = 'Mensaje';
$string['messagelabel'] = 'Mensaje:';
$string['messageprovider:contactdataprotectionofficer'] = 'Solicitudes de datos';
$string['messageprovider:datarequestprocessingresults'] = 'Resultados de tratamiento de solicitud de datos';
$string['messageprovider:notifyexceptions'] = 'Notificaciones de excepciones de solicitudes de datos';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Mis solicitudes de datos personales';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} hijos';
$string['newrequest'] = 'Nueva solicitud';
$string['noactivitiestoload'] = 'Sin actividades';
$string['noassignedroles'] = 'Sin roles asignados en este contexto';
$string['noblockstoload'] = 'Sin bloques';
$string['nocategories'] = 'Aún no hay categorías';
$string['nocoursestoload'] = 'Sin actividades';
$string['nodatarequests'] = 'No hay solicitudes de datos';
$string['nodatarequestsmatchingfilter'] = 'No hay solicitudes de datos que coincidan con el filtro dado';
$string['noexpiredcontexts'] = 'El nivel del contexto no tiene datos para los cuales haya expirado el período de retención.';
$string['nopersonaldatarequests'] = 'Usted no tiene ninguna solicitud de datos personales';
$string['nopurposes'] = 'Aun no hay propósitos';
$string['nosubjectaccessrequests'] = 'No hay solicitudes de datos que requieran que las atienda';
$string['nosystemdefaults'] = 'Aun no se han definido propósito y categoría del sitio.';
$string['notset'] = 'No configurado (usar el valor por defecto)';
$string['notyetexpired'] = '{$a} (aun no expirado)';
$string['overrideinstances'] = 'Reiniciar instancias con valores personalizados';
$string['pluginname'] = 'Privacidad de datos';
$string['pluginname_help'] = 'Plugin de privacidad de datos';
$string['pluginregistry'] = 'Registro de privacidad de plugins';
$string['pluginregistrytitle'] = 'Registro de cumplimiento de privacidad del plugin';
$string['privacy'] = 'Privacidad';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Los filtros aplicados actualmente a la página de solicitudes de datos.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'El número de solicitudes de datos que el usuario prefiere ver en una página';
$string['privacy:metadata:request'] = 'Información de las solicitudes de datos personales (solicitudes de acceso y eliminación del interesado) hechas para este sitio.';
$string['privacy:metadata:request:comments'] = 'Cualquier comentario del usuario que acompañe la solicitud.';
$string['privacy:metadata:request:dpocomment'] = 'Cualquier comentario hecho por el Oficial de Privacidad del sitio con respecto a la solicitud.';
$string['privacy:metadata:request:requestedby'] = 'El ID del usuario que hace la solicitud, si se hace en representación de otro usuario.';
$string['privacy:metadata:request:timecreated'] = 'El sello de tiempo que indica que la solicitud fue hecha por el usuario.';
$string['privacy:metadata:request:userid'] = 'El ID del usuario a quien le pertenece la solicitud';
$string['privacyofficeronly'] = 'Solamente los usuarios que tengan asignado un rol de oficial de privacidad ({$a}) tienen acceso a este contenido';
$string['privacyrequestexpiry'] = 'Caducidad de solicitud de datos';
$string['privacyrequestexpiry_desc'] = 'El tiempo que estarán disponibles las solicitudes de datos para descarga antes de expirar. Si se configura a 0, entonces no hay límite de tiempo.';
$string['protected'] = 'Protegido';
$string['protectedlabel'] = 'La retención de estos datos tiene un alto precedente legal sobre la solicitud de un usuario de ser olvidado. Estos datos solamente serán eliminados después de que haya expirado el período de retención.';
$string['purpose'] = 'Propósito';
$string['purpose_help'] = 'El propósito describe la razón para procesar los datos. Puede añadirse un nuevo propósito, o si se selecciona Heredar, el propósito de un contexto superior es aplicado. Los contextos son (de bajo a alto): Bloques  > Módulos de actividad > Cursos > Categorías de curso > Usuario > Sitio.';
$string['purposecreated'] = 'Propósito creado';
$string['purposedefault'] = 'Propósito por defecto';
$string['purposedefault_help'] = 'El Propósito por defecto es el propósito que es aplicado a cualquier nueva instancia. Si se selecciona Heredar, el propósito de un contexto superior es aplicado. Los contextos son (de bajo a alto): Bloques  > Módulos de actividad > Cursos > Categorías de curso > Usuario > Sitio.';
$string['purposeoverview'] = 'Un propósito describe el uso al que está destinado y la política de retención para datos almacenados. La base para almacenar y retener esos datos está también descrita en el propósito.';
$string['purposes'] = 'Propósitos';
$string['purposeslist'] = 'Lista de propósitos de datos';
$string['purposeupdated'] = 'Propósito actualizado';
$string['replyto'] = 'Contestarle a';
$string['requestactions'] = 'Acciones';
$string['requestapproved'] = 'La solicitud ha sido aprobada';
$string['requestby'] = 'Solicitado por';
$string['requestbydetail'] = 'Solicitado por:';
$string['requestcomments'] = 'Comentarios';
$string['requestcomments_help'] = 'Esta caja le permite proporcionar más detalles acerca de su solicitud de datos.';
$string['requestcreation'] = 'Creación';
$string['requestdenied'] = 'La solicitud ha sido denegada';
$string['requestemailintro'] = 'Ha recibido una solicitud de datos:';
$string['requestfor'] = 'Usuario';
$string['requestmarkedcomplete'] = 'La solicitud ha sido marcada como completada';
$string['requestorigin'] = 'Sitio';
$string['requestsapproved'] = 'Las solicitudes han sido aprobadas';
$string['requestsdenied'] = 'Las solicitudes han sido denegadas';
$string['requeststatus'] = 'Estado';
$string['requestsubmitted'] = 'Su solicitud ha sido enviada al Oficial de Privacidad';
$string['requesttype'] = 'Tipo';
$string['requesttype_help'] = 'Seleccionar la razón para ponerse en contacto con el Oficial de Privacidad. Tenga en cuenta que la eliminación de todos los datos personales resultará en que ya no pueda iniciar sesión en el sitio.';
$string['requesttypedelete'] = 'Eliminar todos mis datos personales';
$string['requesttypedeleteshort'] = 'Eliminar';
$string['requesttypeexport'] = 'Exportar todos mis datos personales';
$string['requesttypeexportshort'] = 'Exportar';
$string['requesttypeothers'] = 'Investigación general';
$string['requesttypeothersshort'] = 'Mensaje';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'Considerar cursos sin fecha de terminación como activos';
$string['requireallenddatesforuserdeletion_desc'] = 'Cuando se calcula la expiración del usuario, varios factores son considerados:

* la hora del último ingreso del usuario es comparada con el período de retención para usuarios; y
* si es que el usuario está activamente inscrito en algún curso.

Al revisar las inscripciones activas de un curso, si el curso no tiene fecha de término entonces esta configuración es usada para determinar si es que ese curso es considerado activo o no.

Si el curso no tiene fecha de término, y esta configuración es habilitada, entonces el usuario no puede ser eliminado';
$string['requiresattention'] = 'Requiere atención.';
$string['requiresattentionexplanation'] = 'Este plugin no implementa la API de privacidad de Moodle. Si este plugin almacena algunos datos personales, no podrán ser exportados o eliminados mediante el sistema de privacidad de Moodle.';
$string['resubmitrequest'] = 'Reenviar solicitud {$a->type} para {$a->username}';
$string['resubmitrequestasnew'] = 'Reenviar como solicitud nueva';
$string['resubmittedrequest'] = 'La solicitud actual {$a->type} para {$a->username} fue cancelada y re-enviada';
$string['resultdeleted'] = 'Recientemente solicitó que su cuenta y sus datos personales en {$a} fueran eliminados. Este proceso ha sido completado y ya no podrá iniciar sesión en el sitio.';
$string['resultdownloadready'] = 'Su copia de sus datos personales en {$a} que solicitó recientemente, está ahora disponible para descargar. Por favor haga clic en el enlace inferior para ir a la página de la descarga.';
$string['retentionperiod'] = 'Período de retención';
$string['retentionperiod_help'] = 'El período de retención especifica el lapso de tiempo que los datos deben conservarse. Cuando el período de retención haya expirado, los datos son señalizados y listados para eliminación, esperando la confirmación administrativa.';
$string['retentionperiodnotdefined'] = 'No se ha definido un período de retención';
$string['retentionperiodzero'] = 'Sin período de retención';
$string['reviewdata'] = 'Revisar datos';
$string['role'] = 'Rol';
$string['role_help'] = 'El rol al cual debería aplicarse la anulación.';
$string['roleoverride'] = 'Anulación de rol';
$string['roleoverrideoverview'] = 'La política de retención por defecto puede ser anulada para roles específicos de usuarios, permitiéndole especificar una política de retención más larga o más corta. Un usuario solamente ha expirado cuando todos sus roles han expirado.';
$string['roleoverrides'] = 'Anulaciones de rol';
$string['selectbulkaction'] = 'Por favor seleccione una acción masiva.';
$string['selectdatarequests'] = 'Por favor seleccione solicitudes de datos.';
$string['selectuserdatarequest'] = 'Seleccionar solicitudes de datos {$a->requesttype} de {$a->username}.';
$string['send'] = 'Enviar';
$string['sensitivedatareasons'] = 'Razones para tratamiento de datos personales sensibles';
$string['sensitivedatareasons_help'] = 'Seleccione una o más razones aplicables que eximen de la prohibición de tratamiento de datos personales sensibles ligados a este propósito. Para más información, por favor vea <a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">GDPR Art. 9.2</a>';
$string['setdefaults'] = 'Configurar valores por defecto';
$string['showdataretentionsummary'] = 'Mostrar resumen de retención de datos';
$string['showdataretentionsummary_desc'] = 'Si se habilita, un enlace al resumen de retención de datos es mostrado en el pie de la página y en el perfil del usuario.';
$string['statusapproved'] = 'Aprobada';
$string['statusawaitingapproval'] = 'Esperando aprobación';
$string['statuscancelled'] = 'Cancelada';
$string['statuscomplete'] = 'Completa';
$string['statusdeleted'] = 'Eliminada';
$string['statusdetail'] = 'Estado:';
$string['statusexpired'] = 'Expirada';
$string['statuspending'] = 'Pendiente';
$string['statusprocessing'] = 'Procesando';
$string['statusready'] = 'Descarga lista';
$string['statusrejected'] = 'Rechazada';
$string['subjectscope'] = 'Alcance del asunto';
$string['subjectscope_help'] = 'El alcance del asunto lista los roles que pueden ser asignados en este contexto.';
$string['summary'] = 'Resumen de configuración del registro';
$string['systemconfignotsetwarning'] = 'No se han definido una categoría y un propósito del sitio. Cuando éstas no están definidas, todos los datos serán eliminados cuando se procesen las solicitudes de eliminación.';
$string['tobedeleted'] = 'Datos a ser eliminados';
$string['unexpiredrolewithretention'] = '{$a->retention} (No expirado)';
$string['user'] = 'Usuario';
$string['userlistexplanation'] = 'Este plugin tiene el proveedor base pero también debería de implementar el proveedor de lista de usuarios (userlist) para cubrir completamente la funcionalidad de privacidad.';
$string['userlistnoncompliant'] = 'Falta proveedor de lista de usuarios (userlist).';
$string['viewrequest'] = 'Ver la solicitud';
$string['visible'] = 'Expandir todo';
