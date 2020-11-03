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
 * Strings for component 'lti', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   lti
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Aceptar';
$string['accepted'] = 'Aceptado';
$string['accept_grades'] = 'Aceptar calificaciones desde la herramienta';
$string['accept_grades_admin'] = 'Aceptar calificaciones desde la herramienta';
$string['accept_grades_admin_help'] = 'Especifique si el proveedor de herramientas puede añadir, actualizar, leer y eliminar las calificaciones vinculadas a las instancias de este tipo de herramienta.

Algunos proveedores de herramientas admiten la opción de notificar las calificaciones en Moodle en función de las acciones realizadas en la herramienta, lo que genera una experiencia más
integrada.';
$string['accept_grades_help'] = 'Especifique si el proveedor de herramientas puede añadir, actualizar, leer y eliminar las calificaciones vinculadas solo a esta instancia de la herramienta externa.

Algunos proveedores de herramientas admiten la opción de notificar las calificaciones a Moodle en función de las acciones realizadas en la herramienta, lo que genera una experiencia más integrada.

Tenga en cuenta que este ajuste puede estar invalidado en la configuración de la herramienta.';
$string['action'] = 'Acción';
$string['activate'] = 'Activar';
$string['activatetoadddescription'] = 'Necesitarás activar esta herramienta antes de que puedas añadir una descripción.';
$string['active'] = 'Activar';
$string['activity'] = 'Actividad';
$string['addnewapp'] = 'Habilitar aplicación externa';
$string['addserver'] = 'Añadir un nuevo servidor de confianza';
$string['addtype'] = 'Añadir configuración de la herramienta externa';
$string['allow'] = 'Permitir';
$string['allowsetting'] = 'Permitir que la herramienta almacene 8 K de ajustes en Moodle';
$string['always'] = 'Siempre';
$string['autoaddtype'] = 'Añadir herramienta';
$string['automatic'] = 'Automático, basado en la URL de inicio';
$string['baseurl'] = 'URL Base';
$string['basiclti'] = 'LTI';
$string['basicltiactivities'] = 'Actividades LTI';
$string['basiclti_base_string'] = 'Cadena base LTI OAuth';
$string['basiclti_endpoint'] = 'Extremo Iniciar LTI';
$string['basicltifieldset'] = 'Personalizar conjunto de campos del ejemplo';
$string['basiclti_in_new_window'] = 'Su actividad se ha abierto en una nueva ventana';
$string['basiclti_in_new_window_open'] = 'Abrir en una ventana nueva';
$string['basicltiintro'] = 'Descripción de la actividad';
$string['basicltiname'] = 'Nombre de la actividad';
$string['basiclti_parameters'] = 'Parámetros de inicio LTI';
$string['basicltisettings'] = 'Ajustes de interoperabilidad básica de herramientas de aprendizaje (LTI)';
$string['cancel'] = 'Cancelar';
$string['cancelled'] = 'Cancelado';
$string['cannot_delete'] = 'No puede eliminar esta configuración de la herramienta.';
$string['cannot_edit'] = 'No puede editar esta configuración de la herramienta.';
$string['capabilities'] = 'Capacidades';
$string['capabilities_help'] = 'Seleccione las capacidades que desee ofrecer al proveedor de la herramienta.  Se puede seleccionar más de una capacidad.';
$string['capabilitiesrequired'] = 'Para activar esta herramienta es necesario el acceso a la siguiente información:';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Haga clic para continuar</a>';
$string['comment'] = 'Comentario';
$string['configpassword'] = 'Contraseña de Herramienta Externa por defecto';
$string['configpreferheight'] = 'Altura preferida por defecto';
$string['configpreferwidget'] = 'Ajuste';
$string['configpreferwidth'] = 'Anchura predeterminada';
$string['configresourceurl'] = 'URL del recurso por defecto';
$string['configtoolurl'] = 'URL de la Herramienta Externa por defecto';
$string['configtypes'] = 'Habilitar aplicaciones LTI';
$string['configured'] = 'Configurado';
$string['confirmtoolactivation'] = 'Esta seguro que desea activar la siguiente herramienta?';
$string['courseactivitiesorresources'] = 'Actividades o recursos del curso';
$string['courseid'] = 'Número ID del Curso';
$string['courseinformation'] = 'Información del curso';
$string['courselink'] = 'Ir al curso';
$string['coursemisconf'] = 'El curso está mal configurado';
$string['course_tool_types'] = 'Tipos de herramientas del curso';
$string['createdon'] = 'Creado el';
$string['curllibrarymissing'] = 'La biblioteca PHP Curl debe estar instalada para usar LTI';
$string['custom'] = 'Parámetros personalizados';
$string['custom_config'] = 'Utilizando la herramienta de configuración personalizada.';
$string['custom_help'] = 'Los parámetros personalizados son ajustes utilizados por el proveedor de la herramienta. Por ejemplo, un parámetro personalizado puede ser utilizado para mostrar un recurso específico.

Es seguro dejar este campo sin cambios, salvo indicación del proveedor de la herramienta.';
$string['custominstr'] = 'Parámetros personalizados';
$string['debuglaunch'] = 'Opción de depuración';
$string['debuglaunchoff'] = 'Inicio normal';
$string['debuglaunchon'] = 'Depurar el inicio';
$string['default'] = 'Defecto';
$string['default_launch_container'] = 'Contenedor de inicio por defecto';
$string['default_launch_container_help'] = 'El contenedor de inicio afecta a la visualización de la herramienta cuando se inicia desde el curso. Algunos contenedores de inicio proporcionan un mayor espacio de pantalla real a la herramienta, mientras que otros ofrecen una sensación más integrada en el entorno de Moodle.

* **Predeterminado**: utilice el contenedor de inicio que especifique la configuración de la herramienta.
* **Incrustar**: la herramienta se visualiza en la ventana de Moodle ya existente de una forma similar al resto de tipos de actividades.
* **Incrustar sin bloques**: la herramienta se muestra en la ventana de Moodle ya existente solo con los controles de navegación en la parte superior de la página.
* **Nueva ventana**: la herramienta se abre en una nueva ventana que ocupa todo el espacio disponible.
        En función del navegador que se utilice, se abrirá en una nueva pestaña o en una ventana emergente.
        Es posible que los navegadores impidan que se abra la nueva ventana.';
$string['delegate'] = 'Delegar al profesor';
$string['delete'] = 'Borrar';
$string['delete_confirmation'] = '¿Está seguro que quiere eliminar esta configuración de la herramienta externa?';
$string['deletetype'] = 'Eliminar configuración de la herramienta externa';
$string['display_description'] = 'Mostrar la descripción de la actividad cuando se inicia';
$string['display_description_help'] = 'Si está seleccionada, se mostrará la descripción de la actividad (especificada previamente) encima del contenido del proveedor de la herramienta.

Se puede utilizar la descripción para proporcionar instrucciones adicionales a los iniciadores de la herramienta, pero no es necesario.

La descripción nunca se muestra cuando el contenedor de inicio de la herramienta se encuentra en una nueva ventana.';
$string['display_name'] = 'Nombre para mostrar la actividad cuando se inicia';
$string['display_name_help'] = 'Si está seleccionado, se mostrará el nombre de la actividad (especificado previamente) encima del contenido del proveedor de la herramienta.

Es posible que el proveedor de la herramienta también muestre el título. Esta opción puede evitar que el título de la actividad se muestre dos veces.

El título nunca se muestra cuando el contenedor de inicio de la herramienta se encuentra en una nueva ventana.';
$string['domain_mismatch'] = 'El dominio de la URL de inicio no coincide con la configuración de la herramienta.';
$string['donot'] = 'No envíe';
$string['donotaccept'] = 'No acepte';
$string['donotallow'] = 'No permita que';
$string['duplicateregurl'] = 'Esta URL de registro ya está en uso';
$string['editdescription'] = 'Clic aquí para dar una descripción a la herramienta';
$string['edittype'] = 'Editar la configuración de la herramienta externa';
$string['embed'] = 'Incrustar';
$string['embed_no_blocks'] = 'Incrustar, sin bloques';
$string['enableemailnotification'] = 'Enviar emails de aviso';
$string['enableemailnotification_help'] = 'Si se activa, los estudiantes recibirán notificación por correo electrónico cuando sus entregas sean calificadas.';
$string['errormisconfig'] = 'Herramienta mal configurada. Por favor, consulte a su administrador de Moodle cómo configurar la herramienta.';
$string['existing_window'] = 'Ventana existente';
$string['extensions'] = 'Servicios de la extensión LTI';
$string['external_tool_type'] = 'Tipo de herramienta externa';
$string['external_tool_type_help'] = 'El propósito principal de una "configuración de herramientas" es establecer un canal de comunicación seguro entre Moodle y el proveedor de la herramienta También proporciona una oportunidad para establecer configuraciones por defecto e instalar servicios adicionales proporcionados por la herramienta.

* **Automático, basada en Launch URL** - Esta configuración debería ser empleada en la mayoría de los casos. Moodle elegirá la configuración de la utilidad más apropiada      basada en Launch URL. Se usarán herramientas configurada tanto por el administrador como desde el propio curso.
Cuando se especifica Launch URL, Moodle dará información sobre si la reconoce o no. Si Moodle no reconociera Launch URL, entonces deberíaponer los detalles de configuración de la herramienta manualmente.

* **Un tipo específico de herramienta** - Al seleccionar un tipo específico de herramienta, usted puede forzar a Moodle a que emplee esa configuración de herramienta cuando se comunique con el proveedor de la herramienta externa. Si pareciera que la Launch URL no pertenece al proveedor de la herramienta, aparecerá una advertencia. En algunos casos no es necesario proporcionar un Launch URL al emplear un tipo de herramienta específico (si no está invocando un recurso particular dentro del proveedor de la herramienta).

* **Configuración a la medida** - Para ajustar la configuración a la medida solamente en esta instancia, mostrar Opciones Avanzadas, y proporcione usted mismo la clave privada y la clave pública. Si no tiene clave privada y clave pública, puede solicitarlas al proveedor de la herramienta. No todas las herramientas requieren una clave privada y una clave pública; en estos casos los campos pueden dejarse en blanco.

### Edición del Tipo de Herramienta.

Existen tres íconos disponibles en la lista desplegable de Herramienta:

* **Añadir** - Crea una configuración de herramienta a nivel de curso. Todas las instancias de la herramienta externa en este curso pueden emplear esta configuración de herramienta.

* **Editar** - Selecciona un tipo de herramienta a nivel de curso a partir de una lista desplegable y eligiendo después este ícono. Los detalles de la configuración de la herramienta pueden editarse.

* **Borrar** - Elimina el tipo de herramienta del curso seleccionado.';
$string['external_tool_types'] = 'Tipos de herramientas externas';
$string['failedtoconnect'] = 'Moodle fue incapaz de comunicarse con el sistema "{$a}"';
$string['failedtocreatetooltype'] = 'Error al crear la nueva herramienta. Por favor comprueba la URL y prueba de nuevo.';
$string['filter_basiclti_configlink'] = 'Configure sus sitios preferidos y sus contraseñas';
$string['filter_basiclti_password'] = 'La contraseña es obligatoria';
$string['filterconfig'] = 'Administración LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Utilice una configuración existente para la instancia mal configurada';
$string['fixnew'] = 'Nueva configuración';
$string['fixnewconf'] = 'Defina una nueva configuración para la instancia mal configurada';
$string['fixold'] = 'Usar existente';
$string['forced_help'] = 'Este ajuste ha sido configurado a nivel curso o sitio. Es posible que no pueda modificarlo desde esta interfaz.';
$string['force_ssl'] = 'Forzar SSL';
$string['force_ssl_help'] = 'Seleccionando esta opción fuerza a usar SSL en todos los lanzamientos a este proveedor de herramientas.

Además, todas las solicitudes de servicios Web desde el proveedor de la herramienta utilizarán SSL.

Si se utiliza esta opción, asegúrese de que su sitio Moodle y el proveedor de herramientas son compatibles con SSL';
$string['generaltool'] = 'Herramienta general';
$string['global_tool_types'] = 'Tipos de herramientas globales';
$string['grading'] = 'Rutas de calificación';
$string['icon_url'] = 'URL de icono';
$string['icon_url_help'] = 'La URL de icono permite modificar el icono que se muestra en la lista de cursos para esta actividad. En vez del icono LTI se puede especificar un icono adecuado al tipo de actividad.';
$string['id'] = 'id';
$string['indicator:cognitivedepth'] = 'LTI cognitiva';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad LTI.';
$string['indicator:socialbreadth'] = 'LTI social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad LTI.';
$string['invalidid'] = 'ID de LTI incorrecta';
$string['launch_in_moodle'] = 'Iniciar la herramienta en Moodle';
$string['launchinpopup'] = 'Iniciar el contenedor';
$string['launch_in_popup'] = 'Iniciar la herramienta en ventana emergente (pop-up)';
$string['launchinpopup_help'] = 'El contenedor que inicia la herramienta afecta al modo de visualización en el curso. Algunos contenedores proporcionan más espacio en pantalla y otros proporcionan una apariencia más integrada en Moodle.

**Por defecto** Utiliza el contenedor especificado en la configuración de la herramienta.
**Incrustado** Se muestra en la ventana de Moodle, de forma similar al resto de actividades.
**Incrustado sin bloques** Se muestra en la ventana de Moodle, mostrando sólo los controles de navegación al principio de la página.
**Nueva ventana** Se muestra en ventana nueva usando todo el espacio disponible.
Dependiendo del navegador se abrirá en nueva pestaña o en ventana emergente. Es posible que algunos navegadores o programas bloqueen la apertura en nueva ventana.';
$string['launchoptions'] = 'Opciones de inicio';
$string['launch_url'] = 'URL de inicio';
$string['launch_url_help'] = 'La URL de inicio indica la dirección web de la Herramienta Externa y puede contener información adicional. Si no está seguro que ruta introducir, por favor consulte al proveedor de la misma para más información.

Si ha seleccionado un tipo de herramienta específico, puede no ser necesario especificar una URL de inicio. Si el enlace se utiliza sólo para poner en marcha el sistema del proveedor y no para ir a un recurso específico, es probable que esto sea así.';
$string['leaveblank'] = 'Déjalo en blanco si no lo necesitas';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Calificar actividades LTI';
$string['lti:addinstance'] = 'Añadir una nueva actividad LTI';
$string['lti_administration'] = 'Administración de LTI';
$string['lti_errormsg'] = 'La herramienta devolvió el siguiente mensaje de error: "{$a}"';
$string['lti:grade'] = 'Calificar actividades LTI';
$string['lti_launch_error'] = 'Ha ocurrido un error al iniciar la herramienta externa:';
$string['lti_launch_error_tool_request'] = '<p> Para solicitar al administrador que complete la configuración de la herramienta, pulse <a href="{$a->admin_request_url}" target="_top">aquí</a>. </p>';
$string['lti_launch_error_unsigned_help'] = '<p>Este error puede deberse a que falta la clave del consumidor y el secreto compartido para el proveedor de herramientas.</p>
<p>Si tiene una clave del consumidor y un secreto compartido, puede introducirlos al editar la instancia de la herramienta externa (asegúrese de que estén visibles las opciones avanzadas).</p>
<p>Otra opción es <a href="{$a->course_tool_editor}">crear una configuración para el proveedor de herramientas al nivel del curso</a>.</p>';
$string['lti:manage'] = 'Editar actividades LTI';
$string['lti:requesttooladd'] = 'Proporcionar una herramienta de configuración a los administradores';
$string['ltisettings'] = 'Ajustes LTI';
$string['lti_tool_request_added'] = 'Solicitud de configuración de la herramienta enviada de forma correcta. Puede que tenga que contactar con el administrador del sitio para completar la configuración.';
$string['lti_tool_request_existing'] = 'La configuración para el dominio de la herramienta ya ha sido enviada.';
$string['ltiunknownserviceapicall'] = 'Llamada de API a servicio LTI desconocido.';
$string['lti:view'] = 'Ver actividades LTI';
$string['main_admin'] = 'Ayuda general';
$string['main_admin_help'] = 'Las herramientas externas permiten a los usuarios de Moodle interactuar directamente con recursos educativos alojados en servidores externos.

Mediante un protocolo especial de inicio la herramienta externa tendrá acceso a alguna información general del usuario que la inicia, como por ejemplo, el nombre de la institución, el id del curso y otras informaciones como el nombre de usuario o la dirección de correo.

Los tipos de herramienta se clasifican en tres categorías:

**Activo** Estos proveedores de herramientas han sido aprobados y configurados por el administrador. Pueden ser utilizados en todos los cursos de la plataforma Moodle. Si se dispone de clave de usuario y clave compartida, se establecerá una comunicación segura entre el sitio Moodle y la herramienta externa.

**Pendiente** Estos proveedores no han sido configurados por el administrador. Los docentes podrán usar herramientas de ese proveedor si disponen de una clave de usuario y clave compartida o si no se requieren.

**Rechazado** Estos proveedores están marcados como no disponibles en el sitio Moodle. Los docentes podrán usar herramientas de ese proveedor si disponen de una clave de usuario y clave compartida o si no se requieren.';
$string['manage_external_tools'] = 'Administrar herramientas';
$string['manage_tool_proxies'] = 'Administrar registros de la herramienta externa';
$string['manage_tools'] = 'Administrar tipos de herramienta externa';
$string['miscellaneous'] = '';
$string['misconfiguredtools'] = 'Se detectaron instancias de herramientas mal configuradas';
$string['missingparameterserror'] = 'La página está mal configurada: "{$a}"';
$string['module_class_type'] = 'Tipo de módulo Moodle';
$string['modulename'] = 'Herramienta Externa';
$string['modulename_help'] = 'El módulo de actividad de herramienta externa les permiten a los estudiantes interactuar con recursos educativos y actividades alojadas en otros sitios de internet. Por ejemplo, una herramienta externa podría proporcionar acceso a un nuevo tipo de actividad o de materiales educativos de una editorial.

Para crear una actividad de herramienta externa se requiere un provedor de herramienta que soporte  LTI (Learning Tools Interoperability = Interoperatividad de Herramientas de Aprendizaje). Un maestro puede crear una actividad de herramienta externa o hacer uso de una herramienta configurada por el administrador del sitio.

Las herramientas externas difieren se los recursos URL en varias formas:

* Las herramientas externas están conscientes del contexto, por ejemplo: tienen acceso a información acerca del usuario que invocó la herramienta, como por ejemplo sa institución, curso y nombre

* Las herramientas externas soportan leer, actualizar y borrar calificaciones asociadas con la instancia de la actividad

* Las configuraciones de la herramienta externa crean una relación de confianza entre su sitio Moodle y el provedor de la herramienta, permitiendo la comunicación segura entre ambos';
$string['modulenameplural'] = 'Herramientas externas';
$string['modulenamepluralformatted'] = 'Instancias LTI';
$string['name'] = 'Nombre';
$string['never'] = 'Nunca';
$string['new_window'] = 'Nueva ventana';
$string['noattempts'] = 'No se ha realizado ningún intento en esta instancia de la herramienta';
$string['no_lti_configured'] = 'No existen herramientas externas activas configuradas.';
$string['no_lti_pending'] = 'No existen herramientas externas pendientes.';
$string['no_lti_rejected'] = 'No existen herramientas externas rechazadas.';
$string['noltis'] = 'No hay instancias de herramientas externas';
$string['no_lti_tools'] = 'No hay herramientas externas configuradas.';
$string['noprofileservice'] = 'Servicio del perfil no encontrado';
$string['noservers'] = 'No se han encontrado servidores';
$string['no_tp_accepted'] = 'No hay registros aceptados de herramientas externas.';
$string['no_tp_cancelled'] = 'No hay registros cancelados de herramientas externas.';
$string['no_tp_pending'] = 'No hay registros pendientes de herramientas externas.';
$string['no_tp_rejected'] = 'No hay registros rechazados de herramientas externas.';
$string['noviewusers'] = 'No se encontraron usuarios con permiso para utilizar esta herramienta';
$string['optionalsettings'] = 'Ajustes opcionales';
$string['organization'] = 'Detalles de la organización';
$string['organizationdescr'] = 'Descripción de la organización';
$string['organizationid'] = 'ID de organización';
$string['organizationurl'] = 'URL de la organización';
$string['organizationurl_help'] = 'La URL base de esta instancia de Moodle.

Si se deja este campo vacío, un valor por defecto será usado basado en la configuración de este sitio.';
$string['pagesize'] = 'Entregas mostradas por página';
$string['parameter'] = 'Parámetros de la herramienta';
$string['pending'] = 'Pendiente';
$string['pluginadministration'] = 'Administración de herramientas externas';
$string['pluginname'] = 'Herramienta Externa';
$string['preferheight'] = 'Altura recomendada';
$string['preferwidth'] = 'Ancho recomendado';
$string['press_to_submit'] = 'Pulsar para comenzar esta actividad';
$string['privacy'] = 'Privacidad';
$string['quickgrade'] = 'Permitir calificación rápida';
$string['redirect'] = 'Serás redirigido en unos segundos. Si no eres redirigido, presiona el botón.';
$string['register'] = 'Registro';
$string['registertype'] = 'Configurar una nueva herramienta externa de registro';
$string['registrationname'] = 'Nombre del proveedor de la herramienta';
$string['registrationname_help'] = 'Inserta el nombre del proveedor de la herramienta que está siendo registrada.';
$string['registration_options'] = 'Opciones de registro';
$string['registrationurl'] = 'URL de registro';
$string['reject'] = 'Rechazar';
$string['rejected'] = 'Rechazado';
$string['resource'] = 'Recurso';
$string['resourcekey'] = 'Clave de cliente';
$string['resourcekey_admin'] = 'Clave de cliente';
$string['resourceurl'] = 'URL del recurso';
$string['return_to_course'] = 'Clic <a href="{$a->link}" target="_top">aquí</a> para volver al curso.';
$string['saveallfeedback'] = 'Guardar toda mi retroalimentación';
$string['search:activity'] = 'Herramienta externa - información de actividad';
$string['selectcontent'] = 'Seleccionar contenido';
$string['send'] = 'Enviar';
$string['services'] = 'Servicios';
$string['setupoptions'] = 'Opciones de configuración';
$string['share_email'] = 'Compartir el e-mail del usuario con la herramienta';
$string['share_email_admin'] = 'Compartir el e-mail del usuario con la herramienta';
$string['share_name'] = 'Compartir el nombre del usuario con la herramienta';
$string['share_name_admin'] = 'Compartir el nombre del usuario con la herramienta';
$string['share_roster'] = 'Permitir acceder a la herramienta a la lista de este curso';
$string['share_roster_admin'] = 'La herramienta puede acceder a la lista del curso';
$string['show_in_course_lti1'] = 'Configuración del uso de la herramienta';
$string['show_in_course_lti2'] = 'Configuración del uso de la herramienta';
$string['show_in_course_preconfigured'] = 'Mostrar como una herramienta preconfigurada cuando se añade una herramienta externa';
$string['size'] = 'Parámetros de tamaño';
$string['submission'] = 'Entrega';
$string['submissions'] = 'Envíos';
$string['submissionsfor'] = 'Entregas para {$a}';
$string['subplugintype_ltiresource'] = 'Recurso del servicio LTI';
$string['subplugintype_ltiresource_plural'] = 'Recursos del servicio LTI';
$string['subplugintype_ltiservice'] = 'Servicio LTI';
$string['subplugintype_ltiservice_plural'] = 'Servicios LTI';
$string['subplugintype_ltisource'] = 'Fuente LTI';
$string['subplugintype_ltisource_plural'] = 'Fuentes LTI';
$string['successfullycreatedtooltype'] = 'Se ha creado una nueva herramienta con éxito!';
$string['toggle_debug_data'] = 'Activar información de desarrollo';
$string['tool_config_not_found'] = 'No se encuentra la configuración de herramienta para este URL';
$string['tooldescription'] = 'Descripción de la herramienta';
$string['toolisbeingused'] = 'Esta herramienta ha sido usada {$a} veces';
$string['toolisnotbeingused'] = 'Esta herramienta aún no ha sido usada';
$string['toolproxy'] = 'Registros de herramienta externa';
$string['toolproxyregistration'] = 'Registro de herramienta externa';
$string['toolregistration'] = 'Registro de herramienta externa';
$string['tool_settings'] = 'Ajustes de la herramienta';
$string['toolsetup'] = 'Registro de herramienta externa';
$string['tooltypeadded'] = 'Se ha añadido la herramienta preconfigurada';
$string['tooltypedeleted'] = 'Se ha borrado la herramienta preconfigurada';
$string['tooltypenotdeleted'] = 'No se ha podido borrar la herramienta preconfigurada';
$string['tooltypes'] = 'Herramientas';
$string['tooltypeupdated'] = 'Se ha actualizado la herramienta preoconfigurada';
$string['toolurl'] = 'URL de la herramienta';
$string['toolurlplaceholder'] = 'URL de la herramienta...';
$string['typename'] = 'Nombre de la herramienta';
$string['types'] = 'Tipos';
$string['unabletocreatetooltype'] = 'No se ha podido crear la herramienta';
$string['unabletofindtooltype'] = 'No se ha podido encontrar la herramienta {$a->id}';
$string['unknownstate'] = 'Estado desconocido';
$string['update'] = 'Actualización';
$string['useraccountinformation'] = 'Información de la cuenta del usuario';
$string['userpersonalinformation'] = 'Información personal del usuario';
$string['using_tool_cartridge'] = 'Usando herramienta cartridge';
$string['using_tool_configuration'] = 'Usar configuración de herramienta:';
$string['validurl'] = 'Una URL válida debe empezar con http(s)://';
$string['viewsubmissions'] = 'Ver entregas y pantalla de calificaciones';
