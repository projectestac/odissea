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
 * Strings for component 'lti', language 'es', version '3.11'.
 *
 * @package     lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Aceptar';
$string['accept_grades'] = 'Aceptar calificaciones desde la herramienta';
$string['accept_grades_admin'] = 'Aceptar calificaciones desde la herramienta';
$string['accept_grades_admin_help'] = 'Especifique si el proveedor de la herramienta puede añadir, actualizar, leer y eliminar las calificaciones vinculadas a las instancias de esta herramienta.

Algunos proveedores de herramientas admiten la opción de notificar las calificaciones en Moodle en función de las acciones realizadas en la herramienta, lo que genera una experiencia más
integrada.';
$string['accept_grades_help'] = 'Especifique si el proveedor de herramientas puede añadir, actualizar, leer y eliminar las calificaciones vinculadas solo a esta instancia de la herramienta externa.

Algunos proveedores de herramientas admiten la opción de notificar las calificaciones a Moodle en función de las acciones realizadas en la herramienta, lo que genera una experiencia más integrada.

Tenga en cuenta que este ajuste puede estar invalidado en la configuración de la herramienta.';
$string['accepted'] = 'Aceptado';
$string['action'] = 'Acción';
$string['activate'] = 'Activar';
$string['activatetoadddescription'] = 'Necesitarás activar esta herramienta antes de que puedas añadir una descripción.';
$string['active'] = 'Activar';
$string['activity'] = 'Actividad';
$string['add_ltiadv'] = 'Añadir LTI Advantage';
$string['add_ltilegacy'] = 'Añadir Legacy LTI';
$string['addnewapp'] = 'Habilitar aplicación externa';
$string['addserver'] = 'Añadir un nuevo servidor de confianza';
$string['addtype'] = 'Añadir herramienta preconfigurada';
$string['allow'] = 'Permitir';
$string['allowsetting'] = 'Permitir que la herramienta almacene 8 K de ajustes en Moodle';
$string['always'] = 'Siempre';
$string['autoaddtype'] = 'Añadir herramienta';
$string['automatic'] = 'Automático, basado en la URL de la herramienta';
$string['baseurl'] = 'URL base / nombre de registro de la herramienta';
$string['basiclti'] = 'LTI';
$string['basiclti_base_string'] = 'Cadena base LTI OAuth';
$string['basiclti_endpoint'] = 'Extremo Iniciar LTI';
$string['basiclti_in_new_window'] = 'Su actividad se ha abierto en una nueva ventana';
$string['basiclti_in_new_window_open'] = 'Abrir en una ventana nueva';
$string['basiclti_parameters'] = 'Parámetros de inicio LTI';
$string['basicltiactivities'] = 'Actividades LTI';
$string['basicltifieldset'] = 'Personalizar conjunto de campos del ejemplo';
$string['basicltiintro'] = 'Descripción de la actividad';
$string['basicltiname'] = 'Nombre de la actividad';
$string['basicltisettings'] = 'Ajustes de interoperabilidad básica de herramientas de aprendizaje (LTI)';
$string['cachedef_keyset'] = 'Almacena en caché la información del conjunto de claves de las herramientas';
$string['cancel'] = 'Cancelar';
$string['cancelled'] = 'Cancelado';
$string['cannot_delete'] = 'No puede eliminar esta configuración de la herramienta.';
$string['cannot_edit'] = 'No puede editar esta configuración de la herramienta.';
$string['capabilities'] = 'Capacidades';
$string['capabilities_help'] = 'Seleccione las capacidades que desee ofrecer al proveedor de la herramienta.  Se puede seleccionar más de una capacidad.';
$string['capabilitiesrequired'] = 'Para activar esta herramienta es necesario el acceso a la siguiente información:';
$string['cleanaccesstokens'] = 'Eliminación de herramientas externas de tokens de acceso caducados';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Haga clic para continuar</a>';
$string['clientidadmin'] = 'ID de cliente';
$string['clientidadmin_help'] = 'El ID de cliente es un valor único que se utiliza para identificar una herramienta. Se crea automáticamente para cada herramienta que utiliza el perfil de seguridad JWT introducido en LTI 1.3 y debe formar parte de los detalles que se envían al proveedor de la herramienta para que pueda configurar la conexión en su extremo.';
$string['comment'] = 'Comentario';
$string['configpassword'] = 'Contraseña por defecto de la herramienta externa';
$string['configpreferheight'] = 'Altura preferida por defecto';
$string['configpreferwidget'] = 'Ajuste';
$string['configpreferwidth'] = 'Anchura predeterminada';
$string['configresourceurl'] = 'URL por defecto del recurso';
$string['configtoolurl'] = 'URL por defecto de la herramienta externa';
$string['configtypes'] = 'Habilitar aplicaciones LTI';
$string['configured'] = 'Configurado';
$string['confirmtoolactivation'] = 'Esta seguro que desea activar la siguiente herramienta?';
$string['contentitem'] = 'Mensaje elemento-contenido';
$string['contentitem_deeplinking'] = 'Admite enlaces profundos (mensaje elemento-contenido)';
$string['contentitem_deeplinking_help'] = 'Si está seleccionado, la opción \'Seleccionar contenido\' estará disponible cuando se añada una herramienta externa.';
$string['contentitem_help'] = 'Si está seleccionado, la opción \'Seleccionar contenido\' estará disponible cuando se añada una herramienta externa.';
$string['contentitem_multiple_description'] = 'Los siguientes elementos se añadirán a tu curso:';
$string['contentitem_multiple_graded'] = 'Actividad calificada (Calificación máxima: {$a})';
$string['course_tool_types'] = 'Herramientas del curso';
$string['courseactivitiesorresources'] = 'Actividades o recursos del curso';
$string['courseid'] = 'Número ID del Curso';
$string['courseinformation'] = 'Información del curso';
$string['courselink'] = 'Ir al curso';
$string['coursemisconf'] = 'El curso está mal configurado';
$string['createdon'] = 'Creado en';
$string['curllibrarymissing'] = 'La biblioteca PHP cURL necesaria para la herramienta externa.';
$string['custom'] = 'Parámetros personalizados';
$string['custom_config'] = 'Utilizando la herramienta de configuración personalizada.';
$string['custom_help'] = 'Los parámetros personalizados son configuraciones utilizadas por el proveedor de herramientas. Por ejemplo, se puede utilizar un parámetro personalizado para mostrar
un recurso específico del proveedor. Cada parámetro debe introducirse en una línea separada usando un formato de "nombre=valor"; por ejemplo, "capítulo=3".

Es seguro dejar este campo sin cambios a menos que lo indique el proveedor de la herramienta.';
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
$string['delegate_tool'] = 'Como se especifica en la definición de vínculo profundo o delegado al maestro';
$string['delete'] = 'Borrar';
$string['delete_confirmation'] = '¿Está seguro de que quiere eliminar esta herramienta preconfigurada?';
$string['deletetype'] = 'Eliminar herramienta preconfigurada';
$string['display_description'] = 'Mostrar la descripción de la actividad cuando se inicia';
$string['display_description_help'] = 'Si está seleccionada, se mostrará la descripción de la actividad (especificada previamente) encima del contenido del proveedor de la herramienta.

Se puede utilizar la descripción para proporcionar instrucciones adicionales a los iniciadores de la herramienta, pero no es necesario.

La descripción nunca se muestra cuando el contenedor de inicio de la herramienta se encuentra en una nueva ventana.';
$string['display_name'] = 'Nombre para mostrar la actividad cuando se inicia';
$string['display_name_help'] = 'Si está seleccionado, se mostrará el nombre de la actividad (especificado previamente) encima del contenido del proveedor de la herramienta.

Es posible que el proveedor de la herramienta también muestre el título. Esta opción puede evitar que el título de la actividad se muestre dos veces.

El título nunca se muestra cuando el contenedor de inicio de la herramienta se encuentra en una nueva ventana.';
$string['domain_mismatch'] = 'El dominio de la URL de la herramienta no coincide con la configuración de la herramienta.';
$string['donot'] = 'No envíe';
$string['donotaccept'] = 'No acepte';
$string['donotallow'] = 'No permita que';
$string['duplicateregurl'] = 'Esta URL de registro ya está en uso';
$string['dynreg_update_btn_new'] = 'Registrar como una nueva herramienta externa';
$string['dynreg_update_btn_update'] = 'Actualizar';
$string['dynreg_update_name'] = 'Nombre de la herramienta';
$string['dynreg_update_notools'] = 'Sin herramienta en el contexto.';
$string['dynreg_update_text'] = 'Hay herramientas existentes adjuntas al dominio de registro. ¿Quieres actualizar una herramienta externa ya instalada
o crear una nueva herramienta externa?';
$string['dynreg_update_url'] = 'URL base';
$string['dynreg_update_version'] = 'Versión LTI';
$string['dynreg_update_warn_dupdomain'] = 'No se recomienda tener varias herramientas externas bajo el mismo dominio.';
$string['editdescription'] = 'Clic aquí para dar una descripción a la herramienta';
$string['edittype'] = 'Editar la herramienta preconfigurada';
$string['embed'] = 'Incrustar';
$string['embed_no_blocks'] = 'Incrustar, sin bloques';
$string['enableemailnotification'] = 'Enviar emails de aviso';
$string['enableemailnotification_help'] = 'Si se activa, los estudiantes recibirán notificación por correo electrónico cuando sus entregas sean calificadas.';
$string['enterkeyandsecret'] = 'Introduzca su clave de consumidor y la clave secreta compartida';
$string['enterkeyandsecret_help'] = 'Si le dieron una clave de consumidor y/o una clave secreta compartida, introdúzcalas aquí';
$string['errorbadurl'] = 'La URL no es una URL de herramienta o de cartucho válida.';
$string['errorincorrectconsumerkey'] = 'La clave de consumidor es incorrecta.';
$string['errorinvaliddata'] = 'Datos no válidos: {$a}';
$string['errorinvalidmediatype'] = 'Tipo de medio no válido: {$a}';
$string['errorinvalidresponseformat'] = 'Formato de respuesta de elemento-contenido no válido.';
$string['errormisconfig'] = 'Herramienta mal configurada. Por favor, consulte a su administrador de Moodle cómo configurar la herramienta.';
$string['errortooltypenotfound'] = 'Tipo de herramienta LTI no encontrado.';
$string['existing_window'] = 'Ventana existente';
$string['extensions'] = 'Servicios de extensión LTI';
$string['external_tool_type'] = 'Herramienta preconfigurada';
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
$string['external_tool_types'] = 'Herramientas preconfiguradas';
$string['failedtoconnect'] = 'Moodle fue incapaz de comunicarse con el sistema "{$a}"';
$string['failedtocreatetooltype'] = 'Error al crear la nueva herramienta. Por favor comprueba la URL y prueba de nuevo.';
$string['failedtodeletetoolproxy'] = 'No se pudo borrar el registro de la herramienta. Es posible que deba visitar "Administrar registros de herramientas externas" y eliminarlo de forma manual.';
$string['filter_basiclti_configlink'] = 'Configure sus sitios preferidos y sus contraseñas';
$string['filter_basiclti_password'] = 'La contraseña es obligatoria';
$string['filterconfig'] = 'Administración LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Utilice una configuración existente para la instancia mal configurada';
$string['fixnew'] = 'Nueva configuración';
$string['fixnewconf'] = 'Defina una nueva configuración para la instancia mal configurada';
$string['fixold'] = 'Usar existente';
$string['force_ssl'] = 'Forzar SSL';
$string['force_ssl_help'] = 'Seleccionando esta opción fuerza a usar SSL en todos los lanzamientos a este proveedor de herramientas.

Además, todas las solicitudes de servicios Web desde el proveedor de la herramienta utilizarán SSL.

Si se utiliza esta opción, asegúrese de que su sitio Moodle y el proveedor de herramientas son compatibles con SSL';
$string['forced_help'] = 'Este ajuste ha sido configurado a nivel curso o sitio. Es posible que no pueda modificarlo desde esta interfaz.';
$string['generaltool'] = 'Herramienta general';
$string['global_tool_types'] = 'Herramienta preconfiguradas';
$string['grading'] = 'Rutas de calificación';
$string['icon_url'] = 'URL de icono';
$string['icon_url_help'] = 'La URL de icono permite modificar el icono que se muestra en la lista de cursos para esta actividad. En vez del icono LTI se puede especificar un icono adecuado al tipo de actividad.';
$string['id'] = 'ID';
$string['indicator:cognitivedepth'] = 'LTI cognitiva';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad LTI.';
$string['indicator:cognitivedepthdef'] = 'LTI cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por las actividades LTI durante este intervalo de análisis (Niveles = Sin visualización, Visualización, Envío, Visualización de comentarios)';
$string['indicator:socialbreadth'] = 'LTI social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad LTI.';
$string['indicator:socialbreadthdef'] = 'LTI social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje de compromiso social ofrecido por las actividades LTI durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['initiatelogin'] = 'Iniciar URL de inicio de sesión';
$string['initiatelogin_help'] = 'La URL de la herramienta a la que se enviarán las solicitudes para iniciar un inicio de sesión. Esta URL es necesaria antes de que un mensaje se pueda enviar correctamente a la herramienta.';
$string['invalidid'] = 'ID de LTI incorrecta';
$string['jwtsecurity'] = 'LTI 1.3';
$string['keytype'] = 'Tipo de clave pública';
$string['keytype_help'] = 'El método de autenticación utilizado para validar la herramienta.';
$string['keytype_keyset'] = 'URL del conjunto de claves';
$string['keytype_rsa'] = 'Clave RSA';
$string['launch_in_moodle'] = 'Iniciar la herramienta en Moodle';
$string['launch_in_popup'] = 'Iniciar la herramienta en ventana emergente (pop-up)';
$string['launch_url'] = 'URL de la herramienta';
$string['launch_url_help'] = 'La URL de inicio indica la dirección web de la Herramienta Externa y puede contener información adicional. Si no está seguro que ruta introducir, por favor consulte al proveedor de la misma para más información.

Si ha seleccionado un tipo de herramienta específico, puede no ser necesario especificar una URL de inicio. Si el enlace se utiliza sólo para poner en marcha el sistema del proveedor y no para ir a un recurso específico, es probable que esto sea así.';
$string['launchinpopup'] = 'Iniciar el contenedor';
$string['launchinpopup_help'] = 'El contenedor que inicia la herramienta afecta al modo de visualización en el curso. Algunos contenedores proporcionan más espacio en pantalla y otros proporcionan una apariencia más integrada en Moodle.

**Por defecto** Utiliza el contenedor especificado en la configuración de la herramienta.
**Incrustado** Se muestra en la ventana de Moodle, de forma similar al resto de actividades.
**Incrustado sin bloques** Se muestra en la ventana de Moodle, mostrando sólo los controles de navegación al principio de la página.
**Nueva ventana** Se muestra en ventana nueva usando todo el espacio disponible.
Dependiendo del navegador se abrirá en nueva pestaña o en ventana emergente. Es posible que algunos navegadores o programas bloqueen la apertura en nueva ventana.';
$string['launchoptions'] = 'Opciones de inicio';
$string['leaveblank'] = 'Déjalo en blanco si no lo necesitas';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Añadir configuraciones de herramientas específicas del curso';
$string['lti:addinstance'] = 'Añadir una nueva herramienta externa';
$string['lti:addmanualinstance'] = 'Añadir una herramienta configurada manualmente';
$string['lti:addpreconfiguredinstance'] = 'Añadir una herramienta preconfigurada';
$string['lti:admin'] = 'Actuar como administrador cuando se ejecute la herramienta';
$string['lti:grade'] = 'Ver calificaciones devueltas por la herramienta externa';
$string['lti:manage'] = 'Actuar como instructor cuando se ejecute la herramienta';
$string['lti:requesttooladd'] = 'Solicitar que una herramienta esté configurada para todo el sitio';
$string['lti:view'] = 'Lanzar actividades de herramientas externas';
$string['lti_administration'] = 'Editar herramienta preconfigurada';
$string['lti_errormsg'] = 'La herramienta devolvió el siguiente mensaje de error: "{$a}"';
$string['lti_launch_error'] = 'Ha ocurrido un error al lanzar la herramienta externa:';
$string['lti_launch_error_tool_request'] = '<p> Para solicitar al administrador que complete la configuración de la herramienta, pulse <a href="{$a->admin_request_url}" target="_top">aquí</a>. </p>';
$string['lti_launch_error_unsigned_help'] = '<p>Este error puede deberse a que falta la clave del consumidor y el secreto compartido para el proveedor de herramientas.</p>
<p>Si tiene una clave del consumidor y un secreto compartido, puede introducirlos al editar la instancia de la herramienta externa (asegúrese de que estén visibles las opciones avanzadas).</p>
<p>Otra opción es <a href="{$a->course_tool_editor}">crear una configuración para el proveedor de herramientas al nivel del curso</a>.</p>';
$string['lti_tool_request_added'] = 'Solicitud de configuración de la herramienta enviada de forma correcta. Puede que tenga que contactar con el administrador del sitio para completar la configuración.';
$string['lti_tool_request_existing'] = 'La configuración para el dominio de la herramienta ya ha sido enviada.';
$string['ltisettings'] = 'Ajustes LTI';
$string['ltiunknownserviceapicall'] = 'Llamada de API a servicio LTI desconocido.';
$string['ltiversion'] = 'Versión LTI';
$string['ltiversion_help'] = 'La versión de LTI que se está utilizando para firmar mensajes y peticiones de servicio: LTI 1.0/1.1 y LTI 2.0 usan el perfil de seguridad OAuth 1.0A; LTI 1.3.0 utiliza JWT.';
$string['main_admin'] = 'Ayuda general';
$string['main_admin_help'] = 'Las herramientas externas permiten a los usuarios de Moodle interactuar directamente con recursos educativos alojados en servidores externos.

Mediante un protocolo especial de inicio la herramienta externa tendrá acceso a alguna información general del usuario que la inicia, como por ejemplo, el nombre de la institución, el id del curso y otras informaciones como el nombre de usuario o la dirección de correo.

Los tipos de herramienta se clasifican en tres categorías:

**Activo** Estos proveedores de herramientas han sido aprobados y configurados por el administrador. Pueden ser utilizados en todos los cursos de la plataforma Moodle. Si se dispone de clave de usuario y clave compartida, se establecerá una comunicación segura entre el sitio Moodle y la herramienta externa.

**Pendiente** Estos proveedores no han sido configurados por el administrador. Los docentes podrán usar herramientas de ese proveedor si disponen de una clave de usuario y clave compartida o si no se requieren.

**Rechazado** Estos proveedores están marcados como no disponibles en el sitio Moodle. Los docentes podrán usar herramientas de ese proveedor si disponen de una clave de usuario y clave compartida o si no se requieren.';
$string['manage_external_tools'] = 'Administrar herramientas';
$string['manage_tool_proxies'] = 'Administrar registros de la herramienta externa';
$string['manage_tools'] = 'Gestionar herramientas preconfiguradas';
$string['manuallyaddtype'] = 'De manera alternativa, puede <a href="{$a}">configurar la herramienta manualmente</a>.';
$string['miscellaneous'] = '';
$string['misconfiguredtools'] = 'Se detectaron instancias de herramientas mal configuradas';
$string['missingparameterserror'] = 'La página está mal configurada: "{$a}"';
$string['module_class_type'] = 'Tipo de módulo Moodle';
$string['modulename'] = 'Herramienta externa';
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
$string['no_lti_configured'] = 'No existen herramientas externas activas configuradas.';
$string['no_lti_pending'] = 'No existen herramientas externas pendientes.';
$string['no_lti_rejected'] = 'No existen herramientas externas rechazadas.';
$string['no_lti_tools'] = 'No hay herramientas externas configuradas.';
$string['no_tp_accepted'] = 'No se aceptan registros de herramientas externas';
$string['no_tp_cancelled'] = 'No hay registros cancelados de herramientas externas.';
$string['no_tp_configured'] = 'No se han configurado registros de herramientas externas sin registrar.';
$string['no_tp_pending'] = 'No hay registros pendientes de herramientas externas';
$string['no_tp_rejected'] = 'No hay registros rechazados de herramientas externas.';
$string['noattempts'] = 'No se ha realizado ningún intento en esta instancia de la herramienta';
$string['noltis'] = 'No hay instancias de herramientas extenas';
$string['noprofileservice'] = 'Perfil del servicio no encontrado';
$string['noservers'] = 'No se han encontrado servidores';
$string['notypes'] = 'Actualmente no hay herramientas LTI configuradas en Moodle. Haga clic en el enlace Instalar de arriba para añadir algunos.';
$string['noviewusers'] = 'No se encontraron usuarios con permiso para utilizar esta herramienta';
$string['oauthsecurity'] = 'LTI 1.0/1.1';
$string['opensslconfiginvalid'] = 'LTI 1.3 requiere un archivo openssl.cnf válido para configurarse y estar disponible para su servidor web. Por favor póngase en contacto con el administrador para configurar y habilitar openssl en este sitio.';
$string['optionalsettings'] = 'Ajustes opcionales';
$string['organization'] = 'Detalles de la organización';
$string['organizationdescr'] = 'Descripción de la organización';
$string['organizationid'] = 'ID de la organización';
$string['organizationid_default'] = 'ID por defecto de la organización';
$string['organizationid_default_help'] = 'El valor por defecto para utilizarlo como ID de la organización. El ID del sitio identifica esta instalación de Moodle.';
$string['organizationid_help'] = 'Un identificador único para esta instancia de Moodle. Habitualmente se utiliza el nombre DNS de la organización.

Si este campo se deja en blanco, el nombre del host de este sitio Moodle se utilizará como valor por defecto.';
$string['organizationidguid'] = 'ID de la organización';
$string['organizationidguid_help'] = 'Un identificador único para esta instancia de Moodle que se pasa a la herramienta como GUID de instancia de plataforma.

Si este campo se deja en blanco, se utilizará el valor predeterminado.';
$string['organizationurl'] = 'URL de la organización';
$string['organizationurl_help'] = 'La URL base de esta instancia de Moodle.

Si se deja este campo vacío, un valor por defecto será usado de la configuración del sitio.';
$string['pagesize'] = 'Entregas mostradas por página';
$string['parameter'] = 'Parámetros de la herramienta';
$string['parameter_help'] = 'Los parámetros de la herramienta son ajustes solicitados por el proveedor de la herramienta en el proxy aceptado de la herramienta.';
$string['password'] = 'Secreto compartido';
$string['password_admin'] = 'Secreto compartido';
$string['password_admin_help'] = 'El secreto compartido se puede considerar como una contraseña que se utiliza para autenticar el acceso a la herramienta. Debe ser proporcionado
junto con la clave de consumidor del proveedor de herramientas.

Herramientas que no requieren una comunicación segura de Moodle y no brindan servicios adicionales (como informes de calificaciones)
puede que no requieran un secreto compartido.';
$string['password_help'] = 'Para herramientas preconfiguradas no es necesario introducir aquí un secreto compartido ya que éste será
proporcionado como parte del proceso de configuración.

Este campo debe introducirse si se crea un enlace a un proveedor de herramientas que aún no está configurado.
Si el proveedor de herramientas se va a utilizar más de una vez en este curso, es una buena idea añadir una configuración de herramientas del curso.

El secreto compartido se puede considerar como una contraseña que se utiliza para autenticar el acceso a la herramienta. Debe ser proporcionado
junto con la clave de consumidor del proveedor de herramientas.

Las herramientas que no requieren una comunicación segura de Moodle y no brindan servicios adicionales (como informes de calificaciones)
puede que no requieran un secreto compartido.';
$string['pending'] = 'Pendiente';
$string['pluginadministration'] = 'Administración de herramientas externas';
$string['pluginname'] = 'Herramienta Externa';
$string['preferheight'] = 'Altura recomendada';
$string['preferwidget'] = 'Preferir el lanzamiento del widget';
$string['preferwidth'] = 'Ancho recomendado';
$string['press_to_submit'] = 'Pulsar para comenzar esta actividad';
$string['privacy'] = 'Privacidad';
$string['privacy:metadata:coursefullname'] = 'El nombre completo del curso desde el que el usuario accede al Consumidor LTI';
$string['privacy:metadata:courseid'] = 'El ID del curso desde el que el usuario accede al Consumidor LTI';
$string['privacy:metadata:courseidnumber'] = 'El número ID del curso desde el que el usuario accede al Consumidor LTI';
$string['privacy:metadata:courseshortname'] = 'El nombre corto del curso desde el que el usuario accede al Consumidor LTI';
$string['privacy:metadata:createdby'] = 'El usuario que creó el registro';
$string['privacy:metadata:email'] = 'La dirección de correo electrónico del usuario que accede al Consumidor LTI';
$string['privacy:metadata:externalpurpose'] = 'El Consumidor LTI proporciona información del usuario y del contexto al Proveedor de la herramienta LTI.';
$string['privacy:metadata:firstname'] = 'El nombre del usuario que accede al consumidor LTI';
$string['privacy:metadata:fullname'] = 'El nombre completo del usuario que accede al consumidor LTI';
$string['privacy:metadata:lastname'] = 'El apellido del usuario que accede al consumidor LTI';
$string['privacy:metadata:lti_submission'] = 'Envío LTI';
$string['privacy:metadata:lti_submission:datesubmitted'] = 'La marca de tiempo que indica cuando se hizo el envío';
$string['privacy:metadata:lti_submission:dateupdated'] = 'La marca de tiempo que indica cuando se modificó el envío';
$string['privacy:metadata:lti_submission:gradepercent'] = 'La calificación del usuario como porcentaje';
$string['privacy:metadata:lti_submission:originalgrade'] = 'La calificación original del usuario';
$string['privacy:metadata:lti_submission:userid'] = 'El ID del usuario que envió la actividad LTI';
$string['privacy:metadata:lti_tool_proxies'] = 'Proxys LTI';
$string['privacy:metadata:lti_tool_proxies:name'] = 'Nombre del proxy LTI';
$string['privacy:metadata:lti_types'] = 'Tipos LTI';
$string['privacy:metadata:lti_types:name'] = 'Nombre del tipo LTI';
$string['privacy:metadata:role'] = 'El rol en el curso del usuario que accede al consumidor LTI';
$string['privacy:metadata:timecreated'] = 'El momento en el que se creó el registro';
$string['privacy:metadata:timemodified'] = 'El momento en el que se modificó el registro';
$string['privacy:metadata:userid'] = 'El ID del usuario que accede al consumidor LTI';
$string['privacy:metadata:useridnumber'] = 'El número ID del usuario que accede al consumidor LTI';
$string['privacy:metadata:username'] = 'El nombre de usuario del usuario que accede al consumidor LTI';
$string['publickey'] = 'Clave pública';
$string['publickey_help'] = 'La clave pública (en formato PEM) proporcionada por la herramienta para permitir la verificación de firmas de mensajes entrantes y solicitudes de servicio.';
$string['publickeyset'] = 'Conjunto de claves públicas';
$string['publickeyset_help'] = 'Conjunto de claves públicas desde donde este sitio recuperará la clave pública de la herramienta para permitir que se verifiquen las firmas de los mensajes entrantes y las solicitudes de servicio.';
$string['quickgrade'] = 'Permitir calificación rápida';
$string['quickgrade_help'] = 'Si está habilitado, se pueden calificar varias herramientas en una página. Añada calificaciones y comentarios y luego haga clic en el botón "Guardar todos mis comentarios" para guardar todos los cambios para esa página.';
$string['redirect'] = 'Serás redirigido en unos segundos. Si no eres redirigido, presiona el botón.';
$string['redirectionuris'] = 'URI(s) de redirección';
$string['redirectionuris_help'] = 'Una lista de URIs (uno por línea) que utiliza la herramienta al realizar solicitudes de autorización. Al menos uno debe estar registrado antes de que se pueda enviar un mensaje correctamente a la herramienta.';
$string['register'] = 'Registro';
$string['register_warning'] = 'La página de registro parece tardar un poco en abrirse. Si no aparece, verifique que introdujo la URL correcta en los ajustes de configuración. Si Moodle está usando https, asegúrese de que la herramienta que está configurando admita https y de que está usando https en la URL.';
$string['registertype'] = 'Configurar una nueva herramienta externa de registro';
$string['registration_options'] = 'Opciones de registro';
$string['registrationname'] = 'Nombre del proveedor de la herramienta';
$string['registrationname_help'] = 'Inserta el nombre del proveedor de la herramienta que está siendo registrado.';
$string['registrationurl'] = 'URL de registo';
$string['registrationurl_help'] = 'La URL de registro debe estar disponible en el proveedor de la herramienta así como la ubicación a la que se deben enviar las solicitudes de registro.';
$string['reject'] = 'Rechazar';
$string['rejected'] = 'Rechazado';
$string['resource'] = 'Recurso';
$string['resourcekey'] = 'Clave de cliente';
$string['resourcekey_admin'] = 'Clave de cliente';
$string['resourcekey_admin_help'] = 'La clave del consumidor se puede considerar como un nombre de usuario que se utiliza para autenticar el acceso a la herramienta.
El proveedor de la herramienta puede utilizarla para identificar de forma única el sitio Moodle desde el que los usuarios inician la herramienta.

La clave del consumidor debe ser proporcionada por el proveedor de la herramienta. El método para obtener una clave de consumidor varía entre
proveedores de herramientas. Puede ser un proceso automatizado o puede requerir de un diálogo con el proveedor de la herramienta.

Las herramientas que no requieren una comunicación segura de Moodle y no brindan servicios adicionales (como informes de calificaciones)
puede que no requieran una clave de recurso.';
$string['resourcekey_help'] = 'Para herramientas preconfiguradas, no es necesario introducir una clave de recurso aquí, ya que la clave de consumidor será
proporcionada como parte del proceso de configuración.

Este campo debe introducirse si se crea un enlace a un proveedor de herramientas que aún no está configurado.
Si el proveedor de herramientas se va a utilizar más de una vez en este curso, es una buena idea añadir una configuración de herramientas del curso.

La clave del consumidor se puede considerar como un nombre de usuario que se utiliza para autenticar el acceso a la herramienta.
El proveedor de la herramienta puede utilizarla para identificar de forma única el sitio Moodle desde el que los usuarios inician la herramienta.

La clave del consumidor debe ser proporcionada por el proveedor de la herramienta. El método para obtener una clave de consumidor varía entre
proveedores de herramientas. Puede ser un proceso automatizado o puede requerir de un diálogo con el proveedor de la herramienta.

Las herramientas que no requieren una comunicación segura de Moodle y no brindan servicios adicionales (como informes de calificaciones)
puede que no requieran una clave de recurso.';
$string['resourceurl'] = 'URL del recurso';
$string['return_to_course'] = 'Haz clic <a href="{$a->link}" target="_top">aquí</a> para volver al curso.';
$string['saveallfeedback'] = 'Guardar toda mi retroalimentación';
$string['search:activity'] = 'Herramienta externa - información de actividad';
$string['secure_icon_url'] = 'URL de icono seguro';
$string['secure_icon_url_help'] = 'Similar a la URL del icono, pero se usa cuando se accede al sitio de forma segura a través de SSL. Este campo es para evitar que el navegador muestre una advertencia sobre una imagen insegura.';
$string['secure_launch_url'] = 'URL de herramienta segura';
$string['secure_launch_url_help'] = 'Similar a la URL de la herramienta, pero se usa en lugar de la URL de la herramienta si se requiere alta seguridad. Moodle utilizará la URL segura de la herramienta en lugar de la URL de la herramienta si se accede al sitio de Moodle a través de SSL, o si la configuración de la herramienta está configurada para que siempre se inicie a través de SSL.

La URL de la herramienta también se puede configurar en una dirección https para forzar el lanzamiento a través de SSL, y este campo puede dejarse en blanco.';
$string['selectcontent'] = 'Seleccionar contenido';
$string['send'] = 'Enviar';
$string['services'] = 'Servicios';
$string['services_help'] = 'Selecciona los servicios que desea ofrecer al proveedor de herramientas. Se puede seleccionar más de un servicio.';
$string['setupoptions'] = 'Opciones de configuración';
$string['share_email'] = 'Compartir el e-mail del usuario con la herramienta';
$string['share_email_admin'] = 'Compartir el e-mail del usuario con la herramienta';
$string['share_email_admin_help'] = 'Especifica si la dirección de correo electrónico del usuario que inicia la herramienta se compartirá con el proveedor de la herramienta.
El proveedor de la herramienta puede necesitar las direcciones de correo electrónico del lanzador para distinguir a los usuarios con el mismo nombre en la interfaz de usuario o enviar correos electrónicos
a los usuarios en función de las acciones dentro de la herramienta.';
$string['share_email_help'] = 'Especifica si la dirección de correo electrónico del usuario que inicia la herramienta se compartirá con el proveedor de la herramienta.

El proveedor de la herramienta puede necesitar las direcciones de correo electrónico del lanzador para distinguir a los usuarios con el mismo nombre o enviar correos electrónicos a los usuarios según las acciones dentro de la herramienta.

Tenga en cuenta que esta configuración puede anularse en la configuración de la herramienta.';
$string['share_name'] = 'Compartir el nombre del usuario con la herramienta';
$string['share_name_admin'] = 'Compartir el nombre del usuario con la herramienta';
$string['share_name_admin_help'] = 'Especifica si el nombre completo del usuario que inicia la herramienta debe compartirse con el proveedor de la herramienta.
El proveedor de la herramienta puede necesitar los nombres de los lanzadores para mostrar información significativa dentro de la herramienta.';
$string['share_name_help'] = 'Especifica si el nombre completo del usuario que lanza la herramienta debería ser compartido con el proveedor de la herramienta.

El proveedor de la herramienta puede necesitar el nombre de la persona que la lanza para mostrar información de utilidad dentro de la propia herramienta.

Tenga en cuenta que esta opción puede ser anulada desde la configuración de la herramienta.';
$string['share_roster'] = 'Permitir acceder a la herramienta a la lista de este curso';
$string['share_roster_admin'] = 'La herramienta puede acceder a la lista del curso';
$string['share_roster_admin_help'] = 'Especifica si la herramienta puede acceder a la lista de usuarios matriculados en cursos desde los que se lance la herramienta.';
$string['share_roster_help'] = 'Especifica si la herramienta puede acceder a la lista de usuarios matriculados en este curso.

Tenga en cuenta que esta opción puede ser anulada desde la configuración de la herramienta.';
$string['show_in_course_activity_chooser'] = 'Mostrar en el selector de actividad como una herramienta preconfigurada';
$string['show_in_course_lti1'] = 'Configuración del uso de la herramienta';
$string['show_in_course_lti1_help'] = 'Esta herramienta se puede mostrar en el selector de actividad para que un profesor lo seleccione para añadir a un curso. De forma alternativa, se puede mostrar en el menú desplegable de herramientas preconfiguradas que se muestra cuando se va a añadir una herramienta externa al curso. Otra opción es que la configuración de la herramienta solo se use si se introduce la URL exacta de la herramienta al añadir una herramienta externa a un curso.';
$string['show_in_course_lti2'] = 'Configuración del uso de la herramienta';
$string['show_in_course_lti2_help'] = 'Esta herramienta se puede mostrar en el selector de actividad para que un profesor lo seleccione para añadir a un curso o en el menú desplegable de herramientas preconfiguradas que se muestra cuando se va a añadir una herramienta externa al curso.';
$string['show_in_course_no'] = 'No mostrar; utilizar solo cuando se introduzca una URL de herramienta que coincida';
$string['show_in_course_preconfigured'] = 'Mostrar como una herramienta preconfigurada cuando se añade una herramienta externa';
$string['sitehost'] = 'Hostname del sitio';
$string['siteid'] = 'ID del sitio';
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
$string['successfullyfetchedtoolconfigurationfromcontent'] = 'La configuración de la herramienta se recuperó correctamente del contenido seleccionado.';
$string['toggle_debug_data'] = 'Activar información de desarrollo';
$string['tool_config_not_found'] = 'No se encuentra la configuración de herramienta para este URL';
$string['tool_settings'] = 'Ajustes de la herramienta';
$string['tooldescription'] = 'Descripción de la herramienta';
$string['tooldescription_help'] = 'La descripción de la herramienta que se mostrará a los profesores en la lista de actividades.

Esto debería describir para qué es la herramienta y qué hace y cualquier información adicional que los profesores deban conocer.';
$string['tooldetailsaccesstokenurl'] = 'URL de token de acceso';
$string['tooldetailsauthrequesturl'] = 'URL de solicitud de autenticación';
$string['tooldetailsclientid'] = 'ID de cliente';
$string['tooldetailsdeploymentid'] = 'ID de despliegue';
$string['tooldetailsmailtosubject'] = 'Configuración de herramienta LTI';
$string['tooldetailsmodalemail'] = 'Correo electrónico';
$string['tooldetailsmodallink'] = 'Ver detalles de configuración';
$string['tooldetailsmodaltitle'] = 'Detalle de configuración de herramienta';
$string['tooldetailsplatformid'] = 'ID de plataforma';
$string['tooldetailspublickeyseturl'] = 'URL del conjunto de claves públicas';
$string['toolisbeingused'] = 'Esta herramienta ha sido usada {$a} veces';
$string['toolisnotbeingused'] = 'Esta herramienta aún no ha sido usada';
$string['toolproxy'] = 'Registros de herramienta externa';
$string['toolproxy_help'] = 'Los registros de herramientas externas permiten a los administradores del sitio de Moodle configurar herramientas externas desde un proxy de herramienta obtenido de un proveedor de herramientas compatible con LTI 2.0. Una URL de registro proporcionada por el proveedor de la herramienta es todo lo que se necesita para iniciar el proceso. Las capacidades y servicios ofrecidos al proveedor de herramientas se seleccionan al configurar un nuevo registro.

Los registros de herramientas enumerados en esta página se dividen en cuatro categorías:

* **Configurado** - Estos registros de herramientas se han configurado pero el proceso de registro aún no se ha iniciado.
* **Pendiente** - El proceso de registro para estos registros de herramientas se ha iniciado pero no se ha completado. Abra y guarde la configuración para moverla otra vez a la categoría \'Configurado\'.
* **Aceptado** - Estos registros de herramientas han sido aprobados; los recursos especificados en el proxy de la herramienta aparecerán en la página de herramientas preconfiguradas
con un estado inicial de \'Pendiente\'.
* **Rechazado** - Estos registros de herramientas son los que fueron rechazados durante el proceso de registro. Abra y guarde la configuración para moverla otra vez a la categoría \'Configurado\' para que se pueda reiniciar el proceso de registro.';
$string['toolproxyregistration'] = 'Registro de herramienta externa';
$string['toolregistration'] = 'Registro de herramienta externa';
$string['toolsetup'] = 'Registro de herramienta externa';
$string['tooltypeadded'] = 'Se ha añadido la herramienta preconfigurada';
$string['tooltypedeleted'] = 'Se ha borrado la herramienta preconfigurada';
$string['tooltypenotdeleted'] = 'No se ha podido borrar la herramienta preconfigurada';
$string['tooltypes'] = 'Herramientas';
$string['tooltypeupdated'] = 'Se ha actualizado la herramienta preoconfigurada';
$string['toolurl'] = 'URL de la herramienta';
$string['toolurl_contentitemselectionrequest'] = 'URL de selección de contenido';
$string['toolurl_contentitemselectionrequest_help'] = 'La URL de selección de contenido se utilizará para lanzar página de selección de contenido desde el proveedor de herramientas. Si está vacío, se utilizará la URL de la herramienta';
$string['toolurl_help'] = 'La URL de la herramienta se utiliza para hacer coincidir las URL de la herramienta con la configuración correcta de la herramienta. El prefijo de la URL con http(s) es opcional.

Por ejemplo, una URL de partida que sea *tool.com* podría coincidir con las siguientes:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=10
* www.tool.com/quizzes

Una URL de partida que sea *www.tool.com/quizzes* podría coincidir con las siguientes:

* www.tool.com/quizzes
* tool.com/quizzes
* tool.com/quizzes/take.php?id=10

Una URL de partida que sea *quiz.tool.com* podría coincidir con las siguientes:

* quiz.tool.com
* quiz.tool.com/take.php?id=10

Si existen dos configuraciones de herramienta diferentes para el mismo dominio, se utilizará la que coincida de manera más precisa.

También puede insertar una URL de cartucho (de configuración) si la tiene y los detalles de la herramienta se completarán automáticamente.';
$string['toolurlplaceholder'] = 'URL de la herramienta...';
$string['typename'] = 'Nombre de la herramienta';
$string['typename_help'] = 'El nombre de la herramienta se utiliza para identificar al proveedor en Moodle. El nombre introducido será visible para los profesore cuando añadan herramientas externas dentro de los cursos.';
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
