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
 * Strings for component 'enrol_lmb', language 'es', version '4.1'.
 *
 * @package     enrol_lmb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving'] = 'Una vez que Usted haya guardado sus configuraciones, Usted podría desear';
$string['always'] = 'Siempre';
$string['assignroles'] = 'Asignar roles';
$string['authmethod'] = 'Configurar método de autorización a';
$string['authmethodhelp'] = 'Seleccione en cual método de autorización debería de configurar las cuentas el módulo LMB';
$string['bannerextractimport'] = 'Importar Banner XML';
$string['bannerxmlfolder'] = 'Localización de la carpeta Banner XML';
$string['bannerxmlfoldercomp'] = 'Tratar a la carpeta Banner XML como completa';
$string['bannerxmlfoldercomphelp'] = 'Si esta opción es seleccionada, entonces las inscripciones faltantes de los archivos extraídos se descartarán.';
$string['bannerxmlfolderhelp'] = 'La ruta (en el servidor Moodle) al directorio donde se localizará un conjunto de archivos XML.';
$string['bannerxmllocation'] = 'Localización de archivo Banner XML';
$string['bannerxmllocationcomp'] = 'Tratar al archivo Banner XML como completo';
$string['bannerxmllocationcomphelp'] = 'Si esta opción es seleccionada, entonces las inscripciones faltantes de los archivos extraídos serán descartadas.';
$string['bannerxmllocationhelp'] = 'La ruta (en el servidor Moodle) adonde residen los archivos XML que le gustaría importar.';
$string['bizdowngrace'] = 'Tiempo de gracia de mensajes durante el horario de trabajo';
$string['bizdowngracehelp'] = 'Cuantos minutos pueden transcurrir desde el último mensaje LMB antes de mandar Emails de advertencia durante el horario de trabajo. Configure a 0 para desactivar revisiones durante este período.';
$string['blacklist'] = 'Lista_negra';
$string['categorytype'] = 'Categorías de Cursos';
$string['cathidden'] = '';
$string['cathiddenhelp'] = 'Crear nuevas categorías como ocultas.';
$string['catselect'] = 'Categoría seleccionada';
$string['commadelimit'] = '(Delimitado por coma)';
$string['computesections'] = 'Computar número de secciones';
$string['computesectionshelp'] = 'Computar el número de secciones/tópicos a mostrar, basado en el número de semanas en un curso.';
$string['consolidateusers'] = 'Consolidar los nombres_de_usuarios existentes';
$string['consolidateusershelp'] = 'Si un usuario no puede ser encontrado con el sourceid(idnumber) esperado, pero hay una coincidencia con nombre_de_usuario , las cuentas serán consolidadas. Solamente use esta opción si Usted sabe que los nombres_de_usuarios son únicos y que no habrá colisiones.';
$string['coursehidden'] = 'Crear nuevos cursos como ocultos';
$string['coursehiddenalways'] = 'Siempre';
$string['coursehiddencron'] = 'Basado en configuración de CRON';
$string['coursehiddennever'] = 'Nunca';
$string['courseshorttitle'] = 'Nombre corto del curso';
$string['courseshorttitlehelp'] = 'Esto contiene la plantilla para crear el nombre corto del curso. Vea arriba para las marcas disponibles.';
$string['coursetitle'] = 'Nombre completo del curso';
$string['createnewusers'] = 'Crear cuentas de usuario para usuarios que aún no están registrados en Moodle';
$string['createnewusershelp'] = 'Esta configuración le permite al módulo LMB crear nuevos usuarios de Moodle según le dirija Banner/LMB.';
$string['createusersemaildomain'] = 'Solamente crear usuarios con Emails en este dominio';
$string['createusersemaildomainhelp'] = 'Si esta configuración tiene algún valor, solamente los usuarios que tengan una dirección Email en el dominio dado tendrán una cuenta generada para ellos por el módulo LMB.';
$string['cron'] = 'Opciones de CRON';
$string['cronunhidecourses'] = 'Des-ocultar Cursos';
$string['cronunhidecourseshelp'] = 'Con ésta opción seleccionada, cada noche, alrededor de media noche, el módulo automáticamente dejará de ocultar a los cursos de Banner/LMB que inicien dentro del número de días especificado en \'Des-ocultar éste número de días antes del inicio del curso\'. Por ejemplo, si ésta opción se seleccionara,  \'Des-ocultar éste número de días antes del inicio del curso\' se configura a 7, y hay un curso que empieza en 2009-junio-14, entonces éste se hará visible automáticamente en la mañana del 2009-junio-07. La fecha de inicio del curso es determinada por la fecha de  timeframe->begin proporcionada con el curso por Banner/LMB.';
$string['cronunhidedays'] = 'Des-ocultar esto varios días antes de que inicie el curso';
$string['cronunhidedayshelp'] = 'Este es el número de días para des-ocultar un curso antes de que inicie. Si lo configura a 0 el curso se des-ocultará el día que inicia.';
$string['cronxmlfile'] = 'Revisar el archivo XML durante el CRON';
$string['cronxmlfilehelp'] = 'Con esta opción habilitada, cada vez que se llame al CRON, el módulo revisará el archivo XML para ver si su fecha de modificación ha cambiado desde la última vez que fue procesado. Si hubiera cambiado, entonces será procesado.';
$string['cronxmlfolder'] = 'Revisar la carpeta XML durante el CRON';
$string['cronxmlfolderhelp'] = 'Con esta opción habilitada, cada vez que se llame al CRON, el módulo intentará procesar la carpeta extraída.';
$string['customfield1help'] = 'Nombre corto del campo del curso a donde mapear.';
$string['customfield1mapping'] = 'Campo personalizado del perfil';
$string['customfield1source'] = 'Orígen del campo personalizado del perfil';
$string['customfield1sourcehelp'] = 'Orígen del campo personalizado del perfil de usuario';
$string['defaultcity'] = 'Ciudad';
$string['deleteusers'] = 'Eliminar cuentas de usuario cuando se especifique en el XML';
$string['deleteusershelp'] = 'Si esta canfiguración está activada, el módulo LMB eliminará registros de usuarios de Moodle cuando se le indique.';
$string['deptcat'] = 'Departamentos';
$string['deptcodecat'] = 'Códigos de Departamento';
$string['description'] = 'Este módulo proporciona una forma de integrar Moodle con Banner. Usted puede usar tanto a Luminis Message Broker para proporcionar actualizaciones en tiempo real, en la misma forma que WebCT, o puede usar archivos de exportación de Banner. <br /><br />Este módulo no está afiliado con, ni patrocinado por Ellucian en forma alguna.';
$string['disableenrol'] = 'Deshabilitar Inscripciones al Descartar';
$string['disableenrolhelp'] = 'Desactivar la matriculación en lugar de darles de baja. Evita la posible pérdida de datos en algunas versiones y configuraciones de Moodle cuando los usuarios se eliminan y se vuelven a añadir a un curso.';
$string['disablesecurity'] = 'Deshabilitar Seguridad en Autenticación Remota';
$string['disablesecurityhelp'] = 'Caundo se activa, se deshabilitará la autenticación en el LMB. Esto crea un agujero de seguridad, pero puede ser necesario para algunas configuraciones  o pruebas de conexión.';
$string['donterroremail'] = 'No marcar error en usuarios saltados por causa del Email';
$string['donterroremailhelp'] = 'Si se selecciona, un usuario al que le falte una dirección Email no producirá un error de bitácora.';
$string['dropprecentlimit'] = 'No descartar si hubiera más de este porcentaje de inscripciones.';
$string['dropprecentlimithelp'] = 'Cuando se hace un procesamiento completo de XML, las inscripciones faltantes son tratadas como descartadas. Esta configuración causará que el módulo se salte el proceso de descarte si hubiera más que este porcentaje de las incripciones totales que habrían sido descartables.';
$string['emailname'] = 'Nombre del Email (antes del @)';
$string['endbiztime'] = 'Fin del horario de trabajo';
$string['endbiztimehelp'] = 'Esta es la hora que termina el horario de trabajo.';
$string['filterlist'] = 'Lista de filtros';
$string['filtermode'] = 'Modo de filtrado';
$string['forceadr'] = 'Forzar dirección de calle';
$string['forceadrhelp'] = 'Siempre forzar que la dirección/ciudad de los usuarios coincida con el XML, aún cuando hubieran sido cambiadas manualmente.';
$string['forcecat'] = 'Forzar categoría al actualizar';
$string['forcecathelp'] = 'Esta opción causará que la categoría se cambie a la configuración de arriba cuando ocurra una actualización de LMB/Banner, aunque hubiera sido cambiada manualmente.';
$string['forcecity'] = 'Forzar ciudad al actualizar';
$string['forcecityhelp'] = 'Permitir forzar la dirección/ciudad del usuario para que coincida con el XML, aunque haya sido cambiada manualmente.';
$string['forcecomputesections'] = 'orzar computar secciones';
$string['forcecomputesectionshelp'] = 'Forzar contar secciones al actualizar, pero solamente más de las existentes, nunca quitar secciones.';
$string['forceemail'] = 'Forzar dirección Email al actualizar';
$string['forceemailhelp'] = 'Siempre forzar que la dirección Email de los usuarios coincida con el XML, aún cuando hubiera sido cambiada manualmente.';
$string['forcename'] = 'Forzar nombre al actualizar';
$string['forcenamehelp'] = 'Siempre forzar que el nombre de los usuarios coincida con el XML, aún cuando hubiera sido cambiado manualmente.';
$string['forcepassword'] = 'Forzar contraseña al actualizar';
$string['forcepasswordhelp'] = 'Cuando se configura y cuando se configuran también un tipo de autorización y orígen apropiados, la contraseña del usuario se configura a la contraseña de LMB cada vez que se reciba un mensaje. Si se desactiva, la contraseña solamente se configurará al crear al usuario.';
$string['forceshorttitle'] = 'Forzar nombre corto del curso al actualizar';
$string['forceshorttitlehelp'] = 'Si se selecciona esta opción, entonces cuando ocurra una actualización a un curso mediante LMB/Banner, el nombre corto se configurará como se describe en las configuraciones para \'Nombre corto del curso\', aún y cuando el nombre corto hubiera sido cambiado manualmente. Si esta opción no se configura, entonces el nombre corto sólamente se configurará durante la creación inicial del curso.';
$string['forcetele'] = 'Forzar número de teléfono al actualizar';
$string['forcetelehelp'] = 'Siempre forzar que el número de teléfono de los usuarios coincida con el XML, aún cuando hubiera sido cambiado manualmente.';
$string['forcetitle'] = 'Forzar nombre del curso al actualizar';
$string['forcetitlehelp'] = 'Si se selecciona esta opción, entonces cuando ocurra una actualización a un curso mediante LMB/Banner, el nombre se configurará como se describe en las configuraciones para \'Nombre completo del curso\', aún y cuando el nombre corto hubiera sido cambiado manualmente. Si esta opción no se configura, entonces el nombre sólamente se configurará durante la creación inicial del curso.';
$string['fullemail'] = 'Dirección Email completa';
$string['header'] = 'Usted está usando el Módulo de Banner/Luminis Message Broker versión {$a->version}.<br> LMB Tools  (las herramientas) se han movido hacia el bloque de configuración, debajo de Administración del Sitio > Plugins > Inscripciones > Banner/Luminis Message Broker > Herramientas (Tools)</a>.';
$string['ignoredomaincase'] = 'Ignorar MAYÚSCULAS del dominio';
$string['ignoredomaincasehelp'] = 'Configurar la comparación del dominio a que no importen MAYÚSCULAS/minúsculas.';
$string['ignoreemailcase'] = 'Ignorar MAYÚSCULAS de dirección de Email';
$string['ignoreemailcasehelp'] = 'Todas las direcciones de Email serán convertidas a minúsculas cuando se seleccione esta opción.';
$string['ignoreusernamecase'] = 'Hacer nombre_de_usuario en minúsculas';
$string['ignoreusernamecasehelp'] = 'Todos los nombres_de_usuarios serán convertidas a minúsculas cuando se seleccione esta opción. Moodle generalmente necesita nombres_de_usuarios en minúsculas.';
$string['importnow'] = 'Importar ahorita';
$string['includeadr'] = 'Incluir dirección de la calle';
$string['includeadrhelp'] = 'Incluir la dirección de la calle en el perfil de Moodle.';
$string['includecity'] = 'Incluir ciudad';
$string['includecityhelp'] = 'Incluir la ciudad del usuario en el perfil Moodle.';
$string['includetele'] = 'Incluir teléfono';
$string['includetelehelp'] = 'Incluir el número de teléfono de los usuarios en el perfil de Moodle, si lo proporciona el XML.';
$string['livefilterlist'] = 'Lista de filtro de host remoto';
$string['livefiltermode'] = 'Modo filtro host-remoto';
$string['liveinfo'] = 'La URL de interfaz importación en vivo para este sitio está localizada en {$a}';
$string['livesettings'] = 'Configuraciones de Importación en vivo';
$string['lmb:enrol'] = 'Inscribir usuarios';
$string['lmb:manage'] = 'Gestionar inscripciones de usuarios';
$string['lmb:unenrol'] = 'Dar de baja alumnos del curso';
$string['lmb:unenrolself'] = 'Darse de baja del curso';
$string['lmbcheck'] = 'Notificación de descompuesto (downtime) de LMB';
$string['lmbcheckhelp'] = 'Cuando se selecciona esta casilla, se hará una revisión durante cada período del cron, para verificar que Luminis Message Broker está mandando mensajes a Moodle.';
$string['lmbnotificationemails'] = 'Direcciones de Email para notificaciones';
$string['lmbnotificationemailshelp'] = 'Una lista separada por comas de todas las direcciones de Email que deberían de recibir mensajes de advertencias de la revisión de LMB.';
$string['lmbpasswd'] = 'Contraseña de Autorización Remota';
$string['lmbpasswdhelp'] = 'Esta es la contraseña usada para limitar el acceso a la interfaz de LMB.';
$string['lmbusername'] = 'Nombre_de_usuario de Autenticación Remota';
$string['lmbusernamehelp'] = 'Esta es la configuración de la contraseña usada para limitar el acceso a la interfaz de LMB. Esta, junto con la contraseña, serán usadas para comprobación de autenticación por HTTP. Debe de coincidir con las configuraciones en Luminis Message Broker.';
$string['locality'] = '\'localidad\' XML del usuario';
$string['logerrors'] = 'Registrar en bitácora solamente errores';
$string['logerrorshelp'] = 'Si se activa esta opción, solamente se registrarán los errores en el archivo de bitácora. Si no se activa, se grabarán todos los registros.';
$string['logpercent'] = 'Registrar en bitácora & completo al correr procesos por lotes.';
$string['logsettings'] = 'Registrar enbitácora las configuraciones';
$string['logtolocation'] = 'Localización de salida del archivo de bitácora (dejar vacío para que no registre en bitácora)';
$string['logtolocationhelp'] = 'Esta es la localización que a Usted le gustaría para que allí se guarde el archivo de bitácora. Esta debe ser una ruta absoluta en el servidor. El archivo especificado ya debería de existir, y necesita ser escribible por el proceso del servidor web.';
$string['never'] = 'Nunca';
$string['nickname'] = 'Usar sobrenombre (apodo)';
$string['nicknamehelp'] = 'Si el sobrenombre (apodo) fuera XML incluido, usarlo en lugar del nombre propio.';
$string['nomessage'] = 'No se recibieron mensajes de Luminis Message Broker';
$string['nomessagefull'] = 'Moodle no ha recibido un mensaje de Luminis Message broker en {$a}.';
$string['nonbizdowngrace'] = 'Tiempo de gracia de mensaje durante horario no laborable';
$string['nonbizdowngracehelp'] = 'Cuantos minutos pueden transcurrir desde el último mensaje LMB antes de que se envíen mensajes Email de advertencia durante horario no-laborable. Configúrelo a 0 para deshabilitar revisiones durante este período.';
$string['none'] = 'Ninguna/nada';
$string['off'] = 'Desactivado';
$string['onerror'] = 'Solamente en error';
$string['otherpassword'] = 'Orígen de otra Contraseña';
$string['otheruserid'] = 'Otro orígen de ID de Usuario';
$string['page_backfillenddates'] = 'Fechas de Fin de Curso Retrollenado';
$string['page_cleanxlsdrops'] = 'Limpiar descartes de XLS';
$string['page_extractprocess'] = 'Procesar Extracto';
$string['page_importnow'] = 'Procesar Archivo';
$string['page_lmbstatus'] = 'Estatus de LMB';
$string['page_prunelmbtables'] = 'Podar tablas';
$string['page_reprocessenrolments'] = 'Re-procesar elementos';
$string['parsecourse'] = 'Analizar XML - Curso';
$string['parsecoursexml'] = 'Analizar XML del Curso';
$string['parsecoursexmlhelp'] = 'Procesar registros XML del curso. Si se deja no-seleccionado, se saltarán por completo los registros.';
$string['parseenrol'] = 'Analizar XML - Inscripción';
$string['parseenrolxml'] = 'Analizar XML de Inscripción';
$string['parseenrolxmlhelp'] = 'Procesar registros de inscripción. Deben estar seleccionados \'Procesar Curso\' y \'Procesar Persona\'. Si se deja no-seleccionado, se saltarán por completo los registros.';
$string['parseperson'] = 'Procesar XML - Persona';
$string['parsepersonxml'] = 'Procesar XML Persona';
$string['parsepersonxmlhelp'] = 'Procesar registros de persona. Si se deja no-seleccionado, se saltarán por completo los registros.';
$string['parsexls'] = 'Procesar XML - Listadocruzado';
$string['parsexlsxml'] = 'Procesar XML Listadocruzado';
$string['parsexlsxmlhelp'] = 'Cuando se activa, XML de listacruzada será procesado. El procesamineto (parsing) de XML del curso debe estar activado. Cuando se desactiva, los registros serán saltados completamente.';
$string['passwordsource'] = 'Orígen de contraseña';
$string['performlmbcheck'] = 'Revisar revisión de LMB descompuesto (downtime)';
$string['recordsctid'] = 'Grabar SCT ID';
$string['recordsctidhelp'] = 'Grabar la SCT ID del usuario en la base de datos. Para uso con intercambio de calificaciones.';
$string['recovergrades'] = 'Recuperar calificaciones antiguas para usuarios re-inscritos';
$string['recovergradeshelp'] = 'Si los usuarios están siendo re-inscritos en un curso, tratar de recuperar sus calificaciones antiguas. Este era el comportamiento estándar en Moodle 1.9 e inferiores.';
$string['removelangs'] = '<b><font color=red>Aviso::</font> Al parecer están instalados todavía archivos antiguos de idioma de Banner/Luminis Message Broker. Por favor, remueva el archivo \'{$a}/enrol_lmb.php\' y la carpeta \'{$a}/help/enrol/lmb\'.</b>';
$string['selectedcat'] = 'Seleccionado:';
$string['sourdidfallback'] = 'Proceda a usar sourceid si no encuentra username (nombre_de_usuario )';
$string['sourdidfallbackhelp'] = 'Configurar el userid al sourceid de la persona en caso de no encontrar un nombre_de_usuario . En general, los usuarios no se sabrán este número, por lo que no podrán ingresar, pero ésto creará la cuenta como un sustituíble (placeholder) hasta que se hayan recibido datos más completos.';
$string['standardcity'] = 'Ciudad Estándar';
$string['startbiztime'] = 'Inicio de horario de trabajo';
$string['startbiztimehelp'] = 'Esta es la hora de inicio de lo que Usted considera horario de trabajo (intenso) de Lunes a Viernes. Esto le permite configurar diferentes posibilidades de horario antes de considerar que LMB está apagado, dependiendo de la hora del día.';
$string['storexml'] = 'Guardar XML crudo desde LMB en tabla';
$string['termcat'] = 'Semestres/Trimestres';
$string['termdeptcat'] = 'Semestres/Trimestres y después Departamentos';
$string['termdeptcodecat'] = 'Semestres/Trimestres y después códigos de Departamentos';
$string['termfilter'] = 'Filtrado por semestre';
$string['tools'] = 'Herramientas';
$string['unenrolmember'] = 'Dar de baja miembros de un curso cuando se indique';
$string['unenrolmemberhelp'] = 'Dar de baja miembros de un curso cuando se reciba un un mensaje XML apropiado.';
$string['usemoodlecoursesettings'] = 'Usar configuraciones de curso por defecto de Moodle';
$string['usemoodlecoursesettingshelp'] = 'Cuando se crea un curso nuevo, use las opciones de configuración por defecto del curso encontradas en las configuracioones administrativas de Moodle, en lugar de las configuraciones específicas en este módulo.';
$string['userestrictdates'] = 'Usar Fechas Restringidas';
$string['userestrictdateshelp'] = 'Si se especifica en la inscripción, configura fechas para inicio y fin en Moodle.';
$string['useridtypeemail'] = 'useridtype - ID del Email';
$string['useridtypelogin'] = 'useridtype - ID para ingresar al sitio';
$string['useridtypeother'] = 'useridtype - Otro:';
$string['useridtypesctid'] = 'useridtype - SCTID';
$string['usernamesource'] = 'Orígen del nombre_de_usuario';
$string['usestandardcity'] = 'Siempre dar ciudad dada:';
$string['usestandardcityxml'] = 'Usar dada si falta \'localidad\'';
$string['usestatusfiles'] = 'Usar archivos de estatus para carpeta XML';
$string['whitelist'] = 'Lista_blanca';
$string['xlsmergecourse'] = 'Curso fusionado';
$string['xlsmergegroups'] = 'Poner a los usuarios en cursos fusionados dentro de grupos';
$string['xlsmergegroupshelp'] = 'Si esta opción es seleccionada, entonces los usuarios se pondrán en grupos con un curso fusionado basado en sus números de curso originales.';
$string['xlsmetacourse'] = 'Meta Curso';
$string['xlsshorttitle'] = 'Nombre corto de curso en listacruzada';
$string['xlsshorttitledivider'] = 'Divisor del nombre corto';
$string['xlsshorttitledividerhelp'] = 'Esta es la cadena de caracteres que se colocará entre cada cadena de miembro definida en el \'Repetidor de nombre corto\'. Vea la descripción del divisor completro del listadocruzado para los detalles.';
$string['xlsshorttitlehelp'] = 'Esto contiene la plantilla para crear el nombre corto del curso para cursos en listacruzada. Vea la descripción de título completo de listacruzada para los detalles.';
$string['xlsshorttitlerepeat'] = 'Repetidor del nombre corto';
$string['xlsshorttitlerepeathelp'] = 'Esto contiene la plantilla para la sección que repite [REPEAT] del nombre corto del curso, y será repetida para cada curso miembro en la listacruzada. Vea la descripción del repetidor completo en listacruzada para los detalles.';
$string['xlstitle'] = 'Nombre completo del curso en listacruzada';
$string['xlstitledivider'] = 'Divisor del nombre completo';
$string['xlstitlerepeat'] = 'Repetidor del nombre completo';
$string['xlstype'] = 'Tipo de curso en listacruzada';
