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
 * Strings for component 'tool_dataprivacy', language 'es', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_dataprivacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Actividades y recursos';
$string['addcategory'] = 'Añadir categoría';
$string['addpurpose'] = 'Añadir propósito';
$string['approve'] = 'Aprobar';
$string['approverequest'] = 'Aprobar solicitud';
$string['cachedef_contextlevel'] = 'Categoría y propósito de niveles de contexto';
$string['cachedef_purpose'] = 'Propósitos de los datos';
$string['cancelrequest'] = 'Cancelar solicitud';
$string['cancelrequestconfirmation'] = '¿Realmente desea cancelar esta solicitud de datos?';
$string['categories'] = 'Categorías';
$string['categorieslist'] = 'Lista de categorías de datos';
$string['category'] = 'Categoría';
$string['categorycreated'] = 'Categoría creada';
$string['categoryupdated'] = 'Categoría actualizada';
$string['close'] = 'Cerrar';
$string['compliant'] = 'Conforme';
$string['confirmapproval'] = '¿Realmente desea aprobar esta solicitud de datos?';
$string['confirmcontextdeletion'] = '¿Realmente desea confirmar la eliminación de los contextos seleccionados? Esto también eliminará todos los datos del usuario para sus respectivos subcontextos.';
$string['confirmdenial'] = '¿Realmente desea denegar esta solicitud de datos?';
$string['contactdataprotectionofficer'] = 'Contactar con el Oficial de Protección de Datos';
$string['contactdataprotectionofficer_desc'] = 'Al habilitar esta característica se proporcionará un enlace para que los usuarios contacten con el Oficial de Protección de Datos mediante este sitio. El enlace será mostrado en sus páginas de perfil, y en la página de política de privacidad del sitio también. El enlace conduce a un formulario en el cual el usuario puede hacer una solicitud de datos al Oficial de Protección de Datos.';
$string['contactdpoviaprivacypolicy'] = 'Por favor contacte con el Oficial de Protección de Datos del sitio como se describe en la Política de Privacidad';
$string['contextlevelname10'] = 'Sitio';
$string['contextlevelname30'] = 'Usuarios';
$string['contextlevelname40'] = 'Categorías de curso';
$string['contextlevelname50'] = 'Cursos';
$string['contextlevelname70'] = 'Módulos de actividad';
$string['contextlevelname80'] = 'Bloques';
$string['contextpurposecategorysaved'] = 'Propósito y categoría guardados.';
$string['createcategory'] = 'Crear categoría de datos';
$string['createpurpose'] = 'Crear propósito de datos';
$string['datadeletion'] = 'Eliminación de datos';
$string['datadeletionpagehelp'] = 'Esta página enlista los contextos que ya han pasado su período de retención y necesitan ser confirmados para eliminar los datos del usuario. Una vez que los contextos seleccionados hayan sido confirmados para eliminación, los datos del usuario relacionados con estos contextos serán eliminados en la siguiente ejecución del trabajo agendado "Eliminar contextos caducos".';
$string['dataprivacy:makedatarequestsforchildren'] = 'Hacer solicitudes de datos para niños';
$string['dataprivacy:managedataregistry'] = 'Gestionar registro de datos';
$string['dataprivacy:managedatarequests'] = 'Gestionar solicitudes de datos';
$string['dataregistry'] = 'Registro de datos';
$string['datarequestemailsubject'] = 'Solicitud de datos: {$a}';
$string['datarequests'] = 'Solicitudes de datos';
$string['daterequested'] = 'Fecha solicitada';
$string['daterequesteddetail'] = 'Fecha solicitada:';
$string['defaultsinfo'] = 'Las categorías y propósitos son aplicados a todas las instancias de nueva creación.';
$string['defaultssaved'] = 'Valores por defecto guardados';
$string['deletecategory'] = 'Eliminar categoría  "{$a}"';
$string['deletecategorytext'] = '¿Está seguro de querer eliminar la categoría "{$a}"?';
$string['deleteexpiredcontextstask'] = 'Eliminar contextos caducados';
$string['deletepurpose'] = 'Eliminar propósito "{$a}"';
$string['deletepurposetext'] = '¿Está seguro de querer eliminar el propósito "{$a}"?';
$string['deny'] = 'Denegar';
$string['denyrequest'] = 'Denegar solicitud';
$string['download'] = 'Descargar';
$string['dporolemapping'] = 'Mapeo de roles del Oficial de Protección de Datos';
$string['dporolemapping_desc'] = 'Seleccione uno o más roles que mapeen al rol de Oficial de Protección de Datos. Los usuarios con estos roles podrán gestionar solicitudes de datos. Esto requiere que el rol seleccionado tenga la capacidad \'tool/dataprivacy:managedatarequests\'';
$string['editcategories'] = 'Editar categorías';
$string['editcategory'] = 'Editar categoría';
$string['editpurpose'] = 'Editar propósito';
$string['editpurposes'] = 'Editar propósitos';
$string['effectiveretentionperiodcourse'] = '{$a} después de la fecha de terminación del curso';
$string['effectiveretentionperioduser'] = '{$a} (desde la última vez que el usuario accedió al sitio)';
$string['emailsalutation'] = 'Estimado/a {$a},';
$string['errorcontexthasunexpiredchildren'] = 'El contexto "{$a}" todavía tiene subcontextos que aun no han caducado. No se ha marcado ningun contexto para eliminación.';
$string['errorinvalidrequeststatus'] = '¡Estado de solicitud inválido!';
$string['errorinvalidrequesttype'] = '¡Tipo de solicitud inválido!';
$string['errornoexpiredcontexts'] = 'No hay contextos caducados para procesar';
$string['errorrequestalreadyexists'] = 'Ya tiene una solicitud en curso.';
$string['errorrequestnotfound'] = 'Solicitud no encontrada';
$string['errorrequestnotwaitingforapproval'] = 'La solicitud no está esperando aprobación. Ya sea porque no está lista o porque ya ha sido procesada.';
$string['errorsendingmessagetodpo'] = 'Se encontró un error al tratar de enviarle un mensaje a {$a}.';
$string['expandplugin'] = 'Extensión para expandir y contraer.';
$string['expandplugintype'] = 'Tipo de la extensión para expandir y contraer.';
$string['expiredretentionperiodtask'] = 'Período de retención caducado';
$string['expiry'] = 'Caducidad';
$string['explanationtitle'] = 'Iconos usados en esta página y lo que significan.';
$string['external'] = 'Adicional';
$string['externalexplanation'] = 'Una extensión adicional instalada en este sitio.';
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
$string['gdpr_art_9_2_d_description'] = 'El tratamiento se lleva a cabo en el curso de sus actividades legítimas con las salvaguardias adecuadas por una fundación, asociación o cualquier otro organismo sin ánimo de lucro, con un objetivo político, filosófico, religioso o sindical y con la condición de que el tratamiento se relacione únicamente con el miembros o exmiembros del cuerpo o personas que tienen contacto regular con él en relación con sus propósitos y que los datos personales no se divulgan fuera de ese cuerpo sin el consentimiento de los interesados';
$string['gdpr_art_9_2_d_name'] = 'Atividades legítimas respecto a los miembros/contactos cercanos de una fundación, asociación o de otra organización no lucrativa (GDPR Art. 9.2(d))';
$string['gdpr_art_9_2_e_description'] = 'El tratamiento se relaciona a datos personales  que son hechos públicos de forma manifiesta por el interesado';
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
$string['inherit'] = 'Heredar';
$string['lawfulbases'] = 'Bases legales';
$string['lawfulbases_help'] = 'Seleccione al menos una opción que servirá como la base legal para el tratamiento de datos personales. Para detalles acerca de estas bases legales, por favor vea <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">GDPR Art. 6.1</a>';
$string['message'] = 'Mensaje';
$string['messagelabel'] = 'Mensaje:';
$string['messageprovider:contactdataprotectionofficer'] = 'Solicitudes de datos';
$string['messageprovider:datarequestprocessingresults'] = 'Resultados del tratamiento de solicitud de datos';
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
$string['noexpiredcontexts'] = 'No hay contextos caducados en este nivel que necesiten ser confirmados para eliminación.';
$string['nopersonaldatarequests'] = 'Usted no tiene ninguna solicitud de datos personales';
$string['nopurposes'] = 'Aun no hay propósitos';
$string['nosubjectaccessrequests'] = 'No hay solicitudes de datos que requieran su actuación';
$string['nosystemdefaults'] = 'El propósito y la categoría por defecto del sitio aun no han sido definidos.';
$string['notset'] = 'No configurado (usar el valor por defecto)';
$string['pluginname'] = 'Privacidad de datos';
$string['pluginname_help'] = 'Extesnión de privacidad de datos';
$string['pluginregistry'] = 'Registro de privacidad de extensiones';
$string['pluginregistrytitle'] = 'Registro de cumplimiento de privacidad de la extensión';
$string['privacy'] = 'Privacidad';
$string['privacy:metadata:request'] = 'Información de las solicitudes de datos personales (solicitudes de acceso y eliminación del interesado) hechas para este sitio.';
$string['privacy:metadata:request:comments'] = 'Cualquier comentario del usuario que acompañe la solicitud.';
$string['privacy:metadata:request:requestedby'] = 'La ID del usuario que hace la solicitud, si se hace en representación de otro usuario.';
$string['privacy:metadata:request:timecreated'] = 'El sello de tiempo que indica que la solicitud fue hecha por el usuario.';
$string['privacy:metadata:request:userid'] = 'La ID del usuario a quien le pertenece la solicitud';
$string['protected'] = 'Protegido';
$string['protectedlabel'] = 'La retención de estos datos tiene un alto precedente legal sobre la solicitud de un usuario de ser olvidado. Estos datos solamente serán eliminados después de que haya expirado el período de retención.';
$string['purpose'] = 'Propósito';
$string['purposecreated'] = 'Propósito creado';
$string['purposes'] = 'Propósitos';
$string['purposeslist'] = 'Lista de propósitos de datos';
$string['purposeupdated'] = 'Propósito actualizado';
$string['replyto'] = 'Contestarle a';
$string['requestactions'] = 'Acciones';
$string['requestby'] = 'Solicitado por';
$string['requestcomments'] = 'Comentarios';
$string['requestcomments_help'] = 'Por favor siéntase libre de proporcionar más detalles acerca de su solicitud.';
$string['requestemailintro'] = 'Ha recibido una solicitud de datos:';
$string['requestfor'] = 'Solicitando para';
$string['requeststatus'] = 'Estado';
$string['requestsubmitted'] = 'Su solicitud ha sido enviada al Oficial de Protección de Datos';
$string['requesttype'] = 'Tipo';
$string['requesttypedelete'] = 'Eliminar todos mis datos personales';
$string['requesttypedeleteshort'] = 'Eliminar';
$string['requesttypeexport'] = 'Exportar todos mis datos personales';
$string['requesttypeexportshort'] = 'Exportar';
$string['requesttype_help'] = 'Seleccionar la razón por la que le gustaría contactar con el Oficial de Protección de Datos';
$string['requesttypeothers'] = 'Investigación general';
$string['requesttypeothersshort'] = 'Otras';
$string['requiresattention'] = 'Requiere atención.';
$string['requiresattentionexplanation'] = 'Este plugin no implementa la API de privacidad de Moodle. Si este plugin almacena algun dato personal no podrán ser exportados o eliminados mediante el sistema de privacidad de Moodle.';
$string['resultdeleted'] = 'Recientemente solicitó que su cuenta y sus datos personales en {$a} fueran eliminados. Este proceso ha sido completado y ya no podrá acceder al sitio.';
$string['resultdownloadready'] = 'Su copia de sus datos personales en {$a} que solicitó recientemente está ahora disponible para descargar. Por favor haga clic en el enlace inferior para ir a la página de la descarga.';
$string['retentionperiod'] = 'Período de retención';
$string['retentionperiodnotdefined'] = 'No se ha definido un período de retención';
$string['retentionperiodzero'] = 'Sin período de retención';
$string['reviewdata'] = 'Revisar datos';
$string['send'] = 'Enviar';
$string['sensitivedatareasons'] = 'Razones para procesamiento de datos personales sensibles';
$string['sensitivedatareasons_help'] = 'Seleccione una o más razones aplicables que eximen de la prohibición de procesamiento de datos personales sensibles ligados a este propósito. Para mayor información, por favor vea <a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">GDPR Art. 9.2</a>';
$string['setdefaults'] = 'Establecer valores por defecto';
$string['statusapproved'] = 'Aprobada';
$string['statusawaitingapproval'] = 'Esperando aprobación';
$string['statuscancelled'] = 'Cancelada';
$string['statuscomplete'] = 'Completa';
$string['statusdetail'] = 'Estado:';
$string['statuspending'] = 'Pendiente';
$string['statuspreprocessing'] = 'Preprocesando';
$string['statusprocessing'] = 'Procesando';
$string['statusrejected'] = 'Rechazada';
$string['subjectscope'] = 'Alcance del asunto';
$string['user'] = 'Usuario';
$string['viewrequest'] = 'Ver la solicitud';
$string['visible'] = 'Expandir todo';
