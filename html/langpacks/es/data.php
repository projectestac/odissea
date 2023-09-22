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
 * Strings for component 'data', language 'es', version '4.1'.
 *
 * @package     data
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acción';
$string['actionsmenu'] = 'Menú de acciones';
$string['add'] = 'Añadir entrada';
$string['addcomment'] = 'Añadir comentario';
$string['addedby'] = 'Añadido por';
$string['addentries'] = 'Añadir entradas';
$string['addtemplate'] = 'Plantilla de añadir entrada';
$string['advancedsearch'] = 'Búsqueda avanzada';
$string['allowcomments'] = 'Permitir comentar las entradas';
$string['alttext'] = 'Texto alternativo';
$string['approvalstatus'] = 'Estado de aprobación';
$string['approve'] = 'Aprobar';
$string['approved'] = 'Aprobado';
$string['areacontent'] = 'Campos';
$string['ascending'] = 'Ascendente';
$string['asearchtemplate'] = 'Plantilla de búsqueda avanzada';
$string['atmaxentry'] = '¡Ha introducido el número máximo de entradas permitido!';
$string['authorfirstname'] = 'Nombre';
$string['authorlastname'] = 'Apellido';
$string['autogenallforms'] = 'Generar todas las plantillas por defecto';
$string['autolinkurl'] = 'Autoenlazar la URL';
$string['availablefromdate'] = 'Disponible desde';
$string['availabletags'] = 'Marcas disponibles';
$string['availabletags_help'] = '<p align="center"><strong>Marcas disponibles</strong></p>
<p>Las marcas (\'tags\') son mantenedores de posición (\'place holders\') en la plantilla que se reemplazan con campos o botones cuando se editan o se consultan las entradas.</p>
<p>Los campos tienen el siguiente formato: [[fieldname]]</p>
<p>Los botones tienen el siguiente formato: ##somebutton##</p>
<p>En la plantilla actual sólo pueden usarse las marcas que están en la lista de "Marcas disponibles".</p>';
$string['availabletodate'] = 'Disponible hasta';
$string['availabletodatevalidation'] = 'La fecha de disponibilidad de fin no puede ser previa a la fecha de disponibilidad de comienzo.';
$string['blank'] = 'En blanco';
$string['buttons'] = 'Acciones';
$string['bynameondate'] = 'por {$a->name} - {$a->date}';
$string['calendarend'] = '{$a} cierra';
$string['calendarstart'] = '{$a} abre';
$string['cancel'] = 'Cancelar';
$string['cannotaccesspresentsother'] = 'No se le permite acceder a los ajustes previos de otros usuarios';
$string['cannotadd'] = 'No se pueden añadir entradas';
$string['cannotapplypreset'] = 'Error al aplicar el ajuste predefinido.';
$string['cannotdeletepreset'] = 'Error al eliminar un ajuste previo';
$string['cannotoverwritepreset'] = 'Error sobrescribiendo cvalor preestablecido';
$string['cannotunziptopreset'] = 'No se ha podido descomprimir al directorio de ajustes previos';
$string['checkbox'] = 'Caja de selección';
$string['chooseexportfields'] = 'Seleccione los campos que desea exportar';
$string['chooseexportformat'] = 'Seleccione el formato al que desea exportar';
$string['chooseorupload'] = 'Elegir archivo';
$string['choosepreset'] = 'Archivo de ajuste predefinido';
$string['closebeforeopen'] = 'Ha seleccionado una fecha de fin anterior a la fecha de inicio.';
$string['columns'] = 'columnas';
$string['comment'] = 'Comentario';
$string['commentdeleted'] = 'Comentario eliminado';
$string['commentempty'] = 'El comentario estaba vacío';
$string['comments'] = 'Comentarios';
$string['commentsaved'] = 'Comentario guardado';
$string['commentsn'] = '{$a} comentario(s)';
$string['commentsoff'] = 'La opción comentarios no está habilitada';
$string['completiondetail:entries'] = 'Realizar entradas: {$a}';
$string['completionentries'] = 'Entradas requeridas';
$string['completionentriescount'] = 'Número de entradas';
$string['completionentriesdesc'] = 'Número mínimo de entradas requeridas: {$a}';
$string['configenablerssfeeds'] = 'Esta opción habilita la posibilidad de canales RSS para todas las bases de datos. Aún así necesitará activar manualmente los canales en los ajustes de cada base de datos.';
$string['confirmdeletefield'] = 'Está a punto de eliminar este campo. ¿Está seguro?';
$string['confirmdeleterecord'] = '¿Está seguro de que desea eliminar esta entrada?';
$string['confirmdeleterecords'] = '¿Está seguro de que desea borrar estas entradas?';
$string['createactivity'] = 'Cree sus propios campos para recoger datos o use un ajuste  predefinido que ya incluya los campos.';
$string['createfields'] = 'Crear campos para recoger diferentes tipos de datos.';
$string['createtemplates'] = 'Las plantillas definen la interfaz de su actividadd. Una vez creados los campos, las plantillas se crearán automáticamente. Alternativamente, puede usar un ajuste predefinido, que incluye campos y plantillas.';
$string['csstemplate'] = 'CSS personalizado';
$string['csvfailed'] = 'No se pueden leer los datos del archivo CSV';
$string['csvfile'] = 'Archivo CSV';
$string['csvimport'] = 'Importar archivo CSV';
$string['csvimport_help'] = '<p align="center"><strong>Importar de un archivo CSV</strong></p>

<p>CSV significa \'Valores Separados por Comas\' (\'Comma-Separated-Values\') y es un formato común para intercambiar texto.</p>

<p>El formato esperado de archivo es texto plano con una lista de nombres de campo como primer registro. A continuación vienen los datos, a razón de un registro en cada línea.</p>

<p>El delimitador por defecto de cada campo es la COMA, y el cierre del campo no se establece por defecto (los cierres de campo son caracteres que rodean a cada campo en cada registro).</p>

<p>Los registros deberían estar delimitados por nuevas líneas (normalmente generadas al pulsar RETORNO o ENTER en el editor de texto). Los tabuladores pueden especificarse usando t y las nuevas líneas, mediante n. </p>

<p>Archivo de muestra:</p>

<pre>
  nombre,estatura,peso
  Manolo,180cm,80kg
  Juan,170cm,60kg
  Luis,190cm,20kg
</pre>

<p>ADVERTENCIA: es posible que no se admitan todos los tipos de campo.</p>';
$string['csvwithselecteddelimiter'] = '<abbr title="Comma Separated Values">CSV</abbr>';
$string['data:addinstance'] = 'Añadir una nueva base de datos';
$string['data:approve'] = 'Aprobar y deshacer entradas aceptadas';
$string['data:comment'] = 'Escribir comentarios';
$string['data:exportallentries'] = 'Exportar todas las entradas de la base de datos';
$string['data:exportentry'] = 'Exportar una entrada de la base de datos';
$string['data:exportownentry'] = 'Exportar la propia entrada de la base de datos';
$string['data:exportuserinfo'] = 'Exportar la información del  usuario';
$string['data:managecomments'] = 'Gestionar comentarios';
$string['data:manageentries'] = 'Gestionar entradas';
$string['data:managetemplates'] = 'Gestionar plantillas';
$string['data:manageuserpresets'] = 'Gestionar ajustes previos';
$string['data:rate'] = 'Calificar entradas';
$string['data:readentry'] = 'Leer entradas';
$string['data:view'] = 'Ver actividad de la base de datos';
$string['data:viewallratings'] = 'Ver todas las valoraciones emitidas por los usuarios';
$string['data:viewalluserpresets'] = 'Ver ajustes previos de todos los usuarios';
$string['data:viewanyrating'] = 'Ver el total de valoraciones que alguien recibió';
$string['data:viewentry'] = 'Ver entradas';
$string['data:viewrating'] = 'Ver la valoración total recibida';
$string['data:writeentry'] = 'Escribir entradas';
$string['date'] = 'Fecha';
$string['dateentered'] = 'Fecha introducida';
$string['datemodified'] = 'Editado por última vez:';
$string['defaultfielddelimiter'] = '(el valor por defecto es la coma)';
$string['defaultfieldenclosure'] = '(el valor por defecto es ninguno)';
$string['defaultsortfield'] = 'Campo de ordenación por defecto';
$string['delcheck'] = 'Checkbox de borrado masivo';
$string['delete'] = 'Eliminar';
$string['deleteallentries'] = 'Eliminar todas las entradas';
$string['deletecomment'] = '¿Está seguro de que desea eliminar este comentario?';
$string['deleteconfirm'] = '¿Borrar ajuste predefinido {$a}?';
$string['deleted'] = 'eliminado';
$string['deleteentry'] = 'Eliminar entrada';
$string['deletefield'] = 'Eliminar campo';
$string['deletenotenrolled'] = 'Eliminar entradas de usuarios no matriculados';
$string['deletewarning'] = 'Borrar un ajuste previo lo borra de la lista de ajustes previos disponibles en todos los cursos.';
$string['descending'] = 'Descendente';
$string['directorynotapreset'] = '{$a->directory} No preset: archivos perdidos: {$a->missing_files}';
$string['disapprove'] = 'Desaprobar';
$string['download'] = 'Descargar';
$string['edit'] = 'Edición';
$string['editcomment'] = 'Editar comentario';
$string['editentry'] = 'Editar entrada';
$string['editfield'] = 'Editar campo';
$string['editordisable'] = 'Desactivar editor';
$string['editorenable'] = 'Activar editor de código';
$string['editpreset'] = 'Editar ajuste predefinido';
$string['emptyadd'] = 'La plantilla Añadir está vacía, generando un formulario por defecto...';
$string['emptyaddform'] = '¡No ha rellenado ningún campo!';
$string['emptypresetname'] = 'El nombre del ajuste predefinido no puede dejarse en blanco';
$string['enabletemplateeditorcheck'] = '¿Está seguro de que quiere habilitar el editor? Esto puede provocar que el contenido sea alterado cuando se guarde la plantilla.';
$string['entries'] = 'Entradas';
$string['entrieslefttoadd'] = 'Debe añadir {$a->entriesleft} entrada(s) más para completar esta actividad.';
$string['entrieslefttoaddtoview'] = 'Debe añadir {$a->entrieslefttoview} entrada(s) antes de poder ver las entradas de otros participantes.';
$string['entry'] = 'Entrada';
$string['entrysaved'] = 'Su entrada se ha guardado';
$string['errormustbeteacher'] = 'Necesita ser un profesor para usar esta página';
$string['errormustsupplyvalue'] = 'Debe proporcionar un valor aquí.';
$string['errorpresetexists'] = 'Ya existe un elemento con el nombre seleccionado';
$string['errorpresetexistsbutnotoverwrite'] = 'Ya existe un ajuste predefinido con este nombre. Elija un nombre distinto.';
$string['errorpresetnotfound'] = 'No se encontró el ajuste definido llamado {$a}.';
$string['eventfieldcreated'] = 'Campo creado';
$string['eventfielddeleted'] = 'Campo borrado';
$string['eventfieldupdated'] = 'Campo actualizado';
$string['eventrecordcreated'] = 'Registro creado';
$string['eventrecorddeleted'] = 'Registro borrado';
$string['eventrecordupdated'] = 'Registro actualizado';
$string['eventtemplateupdated'] = 'Plantilla actualizada';
$string['eventtemplateviewed'] = 'Plantilla visualizada';
$string['example'] = 'Ejemplo de módulo de base de datos';
$string['excel'] = 'Excel';
$string['expired'] = 'Lo sentimos, esta actividad se cerró el {$a} y ya no está disponible';
$string['export'] = 'Exportar';
$string['exportaszip'] = 'Exportar como \'zip\'';
$string['exportaszip_help'] = 'Exportar como archivo Zip permite descargar las plantillas a su ordenador. Podrá subirlas más tarde a otra base de datos usando la opción Importar de archivo Zip.';
$string['exportedtozip'] = 'Exportado a un \'zip\' temporal...';
$string['exportentries'] = 'Exportar entradas';
$string['exportformat'] = 'Formato para exportar';
$string['exportoptions'] = 'Opciones para exportar';
$string['exportownentries'] = 'Desea exporta solo sus propias entradas? ({$a->mine} / {$a->all})';
$string['exportpreset'] = 'Exportar ajuste predefinido';
$string['failedpresetdelete'] = '¡Error al eliminar un ajuste previo!';
$string['fieldadded'] = 'Campo añadido';
$string['fieldallowautolink'] = 'Permitir autoenlace';
$string['fielddeleted'] = 'Campo eliminado';
$string['fielddelimiter'] = 'Delimitador de campo';
$string['fielddescription'] = 'Descripción de campo';
$string['fieldenclosure'] = 'Cierre de campo';
$string['fieldheight'] = 'Altura';
$string['fieldheightlistview'] = 'Altura (en píxeles) en vista de lista';
$string['fieldheightsingleview'] = 'Altura (en píxeles) en vista individual';
$string['fieldids'] = 'Ids. de campo';
$string['fieldmappings'] = 'Mapeos de campo';
$string['fieldmappings_help'] = 'Este menú le permite guardar los datos de la base de datos existente. Para conservar los datos en un campo, debe mapearlo a un nuevo campo, en el que aparecerán los datos. Puede asimismo dejar en blanco cualquier campo, sin que en él se copie información alguna. Cualquier campo antiguo no mapeado a uno nuevo se perderá, y todos sus datos quedarán eliminados.
Usted sólo puede mapear campos del mismo tipo, de modo que cada desplegable
contendrá distintos campos. Del mismo modo, debe ser cuidadoso en no intentar
mapear un campo viejo a más de un campo nuevo.';
$string['fieldname'] = 'Nombre de campo';
$string['fieldnametype'] = '{$a->name} ({$a->type})';
$string['fieldnotmatched'] = 'Los campos siguientes de su archivo no figuran en esta base de datos: {$a}';
$string['fieldoptions'] = 'Opciones (una por línea)';
$string['fields'] = 'Campos';
$string['fieldshelp'] = 'Cree campos para recoger diferentes tipos de datos. Los campos definen la estructura de su base de datos.';
$string['fieldsnavigation'] = 'Navegación terciaria de campos';
$string['fieldupdated'] = 'Campos actualizados';
$string['fieldwidth'] = 'Anchura';
$string['fieldwidthlistview'] = 'Anchura (en píxeles) en vista de lista';
$string['fieldwidthsingleview'] = 'Anchura (en píxeles) en vista individual';
$string['file'] = 'Archivo';
$string['fileencoding'] = 'Codificación';
$string['filesnotgenerated'] = 'No se han generado todos los archivos: {$a}';
$string['filtername'] = 'Autoenlace de base de datos';
$string['footer'] = 'Pie';
$string['forcelinkname'] = 'Nombre forzado para el enlace';
$string['foundnorecords'] = 'No se han encontrado registros (<a href="{$a->reseturl}">Borrar todo</a>)';
$string['foundrecords'] = 'Encontrados {$a->num} de {$a->max} registros. <a href="{$a->reseturl}">Borrar todo</a>';
$string['fromfile'] = 'Importar desde archivo \'zip\'';
$string['fromfile_help'] = 'Importar un archivo zip permite buscar y subir una preselección de plantillas y campos.';
$string['generateerror'] = 'No se han generado todos los archivos';
$string['header'] = 'Cabecera';
$string['headeraddtemplate'] = 'Define la interfaz para añadir o editar entradas.';
$string['headerasearchtemplate'] = 'Define la interfaz para búsquedas avanzadas.';
$string['headercsstemplate'] = 'Añadir CSS personalizados en las plantillas.';
$string['headerjstemplate'] = 'Define Javascript personalizado en las plantillas Lista, Única o Añadir.';
$string['headerlisttemplate'] = 'Define la interfaz de navegación para vista de lista.';
$string['headerrsstemplate'] = 'Define la apariencia de las entradas en canales RSS.';
$string['headersingletemplate'] = 'Define la interfaz de navegación para la vista simple.';
$string['id'] = 'ID de la entrada';
$string['importandapply'] = 'Importar y aplicar ajuste predefinido';
$string['importapreset'] = 'Importar un ajuste predefinido';
$string['importentries'] = 'Importar entradas';
$string['importpreset'] = 'Importar un ajuste predefinido';
$string['importpreset_desc'] = 'El ajuste predefinido se aplicará para esta actividad, creando campos y plantillas. No aparecerá en la lista de ajustes predefinidos.';
$string['importpresetmissingcapability'] = 'Usted no tiene permiso para importar un ajuste predefinido.';
$string['importsuccess'] = 'Ajuste predefinido aplicado.';
$string['includeapproval'] = 'Incluya el estado de aprobación';
$string['includetags'] = 'Incluir marcas';
$string['includetime'] = 'Incluya fecha añadido / modificado';
$string['includeuserdetails'] = 'Incluya detalles del usuario';
$string['indicator:cognitivedepth'] = 'Base de Datos cognitiva';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad Base de Datos.';
$string['indicator:cognitivedepthdef'] = 'Base de datos cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por las actividades de Base de datos durante este intervalo de análisis (Niveles = Sin visualización, Visualización, Envío)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Base de Datos social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad Base de Datos.';
$string['indicator:socialbreadthdef'] = 'Base de datos social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por las actividades de Base de datos durante este intervalo de análisis (Niveles = Sin participación, Participante solo)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['insufficiententries'] = 'se necesitan más entradas para ver esta base de datos';
$string['intro'] = 'Descripción';
$string['invalidaccess'] = 'No se ha accedido correctamente a esta página';
$string['invalidfieldid'] = 'El campo ID es incorrecto';
$string['invalidfieldname'] = 'Por favor, seleccione otro nombre para este campo';
$string['invalidfieldtype'] = 'El campo Tipo es incorrecto';
$string['invalidid'] = 'ID de datos incorrecto';
$string['invalidpreset'] = '{$a} no es un preajuste.';
$string['invalidrecord'] = 'Registro incorrecto';
$string['invalidurl'] = 'La URL introducida no es válida';
$string['jstemplate'] = 'Javascript personalizado';
$string['latitude'] = 'Latitud';
$string['latlong'] = 'Coordenadas';
$string['latlongboth'] = 'Tanto la latitud como la longitud son necesarias.';
$string['latlongdownloadallhint'] = 'Descargar enlace para todas las entradas como KML';
$string['latlongkmllabelling'] = 'Cómo etiquetar ítems en archivos KML (Google Earth)';
$string['latlonglinkservicesdisplayed'] = 'Conectar servicios a mostrar';
$string['latlongotherfields'] = 'Otros campos';
$string['list'] = 'Ver lista';
$string['listtemplate'] = 'Plantilla de vista de listado';
$string['listview'] = 'Vista de listado';
$string['longitude'] = 'Longitud';
$string['manageapproved'] = 'Permitir editar las entradas aprobadas';
$string['manageapproved_help'] = 'Permite a los estudiantes editar o borrar sus entradas después de que hayan sido aprobadas. Las entradas editadas necesitarán ser aprobadas.';
$string['managefields'] = 'Gestionar campos';
$string['mapexistingfield'] = 'Apunta a {$a}';
$string['mapnewfield'] = 'Crear un nuevo campo';
$string['mapping:applypresets'] = 'Aplicar ajuste predefinido';
$string['mapping:dialogtitle:usepreset'] = '¿Aplicar ajuste predefinido {$a}?';
$string['mapping:fieldstocreate'] = 'Campos para ser creados: {$a}';
$string['mapping:fieldstodelete'] = 'Campos existentes para ser borrados {$a}';
$string['mapping:mapfields'] = 'Mapear campos';
$string['mapping:warningmessagedelete'] = 'Si los campos a borrar son del mismo tipo que los nuevos campos del ajuste predefinido que usted está aplicando, usted podrá mapearlos con Map fields/Mapear campos.';
$string['mapping:warningmessagedeleteandcreate'] = 'Si los campos que van a ser borrados son del mismo tipo que los campos que van a ser creados, usted puede mapearlos en Mapear campos.';
$string['mappingwarning'] = 'Todos los campos viejos no mapeados a un nuevo campo se perderán y todos los datos de dichos campos quedarán eliminados.';
$string['maxentries'] = 'Número máximo de entradas';
$string['maxentries_help'] = 'Número máximo de entradas que un estudiante puede enviar en esta actividad.';
$string['maxsize'] = 'Tamaño máximo';
$string['menu'] = 'Menú';
$string['menuchoose'] = 'Seleccionar...';
$string['missingdata'] = 'Debe suministrarse la ID de los datos o del objeto a la clase de campo.';
$string['missingfield'] = 'Error del programador: Debe especificar el campo y/o los datos al definir la clase de campo.';
$string['missingfieldtype'] = 'Tipo de campo para {$a->name} no encontrado';
$string['missingfieldtypeimport'] = 'Los siguientes campos no fueron importados porque sus tipos de campos correspondientes no están instalados:';
$string['missingfieldtypes'] = 'Los siguientes campos no tienen instalados sus tipos de campo correspondientes y no serán incluidos en el formulario de añadir entrada. Necesita revisar la plantilla de añadir entrada y eliminar algunos nombres de campo.';
$string['modulename'] = 'Base de datos';
$string['modulename_help'] = 'El módulo de actividad de base de datos permite a los participantes crear, mantener y buscar información en un repositorio de registros. La estructura de las entradas la define el profesor según una lista de campos. Los tipos de campo incluyen casilla de verificación, botones de opción, menú desplegable, área de texto, URL, imagen y archivo cargado.

La presentación visual de la información al listar, ver o editar las entradas de la base de datos se controla mediante plantillas de base de datos. Las actividades de base de datos pueden ser compartidos entre los cursos como opción preestablecida de manera que un profesor también puede importar y exportar las entradas de base de datos.

Si el filtro de base de datos "auto enlace" está activo, cualquier entrada de la base de datos  será enlazada automáticamente cuando sus palabras o frases aparezcan dentro en el curso.

Un profesor puede permitir comentarios en las entradas. Las entradas también pueden se calificadas por profesores u otros estudiantes (evaluación por pares). Las calificaciones se agregarán para formar una calificación final que se registrará en el libro de calificaciones.

Las actividades de base de datos tienen muchos usos, como por ejemplo:

* Crear una colección colaborativa de enlaces web, libros, reseñas de libros, referencias de revistas, etc
* Visualizar fotos, carteles, sitios web o poemas de los estudiantes, que puedan ser comentados por otros estudiantes.';
$string['modulename_link'] = 'mod/data/view';
$string['modulenameplural'] = 'Bases de datos';
$string['more'] = 'Más';
$string['moreurl'] = 'Más URL';
$string['movezipfailed'] = 'No se puede mover el zip';
$string['multientry'] = 'Entrada repetida';
$string['multimenu'] = 'Menú (selección múltiple)';
$string['multipletags'] = 'Se han encontrado múltiples marcas. Plantilla no guardada';
$string['newentry'] = 'Nueva entrada';
$string['newfield'] = 'Crear un campo';
$string['newfield_help'] = 'Un campo permite la entrada de datos. Cada entrada en una actividad de base de datos puede tener varios campos de varios tipos, tales como un campo de fecha, que permite a los participantes seleccionar un día, mes y año a partir de una lista desplegable; un campo de imagen, que permite a los participantes cargar un archivo de imagen; o una casilla de verificación de campo, que permite a los participantes seleccionar una o más opciones.

Cada campo debe tener un nombre de campo único. La descripción del campo es opcional.';
$string['noaccess'] = 'No tiene acceso a esta página';
$string['nodefinedfields'] = '¡El nuevo ajuste previo no tiene campos definidos!';
$string['nofieldcontent'] = 'No se ha encontrado contenido del campo';
$string['nofieldindatabase'] = 'No hay campos definidos para esta base de datos. Por favor, agregue algunos';
$string['nofields'] = 'No hay campos aún';
$string['nolisttemplate'] = 'La plantilla de lista no está definida aún';
$string['nomatch'] = 'No se han encontrado entradas';
$string['nomaximum'] = 'No máximo';
$string['nopreviewavailable'] = 'No hay vista previa disponible para {$a}';
$string['norecords'] = 'No hay entradas aún';
$string['nosingletemplate'] = 'Aún no se ha definido la plantilla individual';
$string['notapproved'] = 'Pendiente de aprobación';
$string['notapprovederror'] = 'La entrada no está aprobada aún.';
$string['notemplates'] = 'No hay plantillas aún';
$string['notinjectivemap'] = 'No mapa inyectivo';
$string['notopenyet'] = 'Lo sentimos, esta actividad no está disponible hasta {$a}';
$string['number'] = 'Número';
$string['numberrssarticles'] = 'Entradas en el feed RSS';
$string['numnotapproved'] = 'Pendiente';
$string['numrecords'] = '{$a} entradas';
$string['ods'] = '<abbr title="OpenDocument Spreadsheet">ODS</abbr>&nbsp;(OpenOffice)';
$string['openafterclose'] = 'Ha especificado una fecha de apertura posterior a la fecha de cierre';
$string['optionaldescription'] = 'Descripción corta (opcional)';
$string['optionalfilename'] = 'Nombre de archivo (opcional)';
$string['other'] = 'Otro';
$string['overrwritedesc'] = 'Reemplazar el ajuste predefinido existente con este nombre y sobreescribir su contenido';
$string['overwrite'] = 'Sobrescribir';
$string['overwritesettings'] = 'Sobrescribir ajustes actuales tales como comentarios, puntuaciones, etc.';
$string['page-mod-data-x'] = 'Cualquier página del módulo actividad de Base de Datos';
$string['pagesize'] = 'Entradas por página';
$string['participants'] = 'Participantes';
$string['picture'] = 'Imagen';
$string['pleaseaddsome'] = 'Por favor, cree alguno debajo o <a href="{$a}">elija un conjunto predefinido</a> para empezar.';
$string['pluginadministration'] = 'Administración de la actividad base de datos';
$string['pluginname'] = 'Base de datos';
$string['portfolionotfile'] = 'Exportar a un portafolio en lugar de a un archivo (sólo csv y leap2a)';
$string['presetdeleted'] = 'Ajuste predefinido borrado.';
$string['presetinfo'] = 'Al guardar un ajuste previo se publicará esta plantilla. Otros usuarios podrán usarla en sus bases de datos.';
$string['presetnotselected'] = 'No se ha seleccionado ningún ajuste predefinido.';
$string['presets'] = 'Ajustes previos';
$string['presetshelp'] = 'Elegir un ajuste predefinido como punto de partida.';
$string['preview'] = 'Vista previa de {$a}';
$string['privacy:metadata:commentpurpose'] = 'Comentarios en los registros de base de datos';
$string['privacy:metadata:data_content'] = 'El contenido de un campo';
$string['privacy:metadata:data_content:content'] = 'Contenido';
$string['privacy:metadata:data_content:content1'] = 'Contenido adicional 1';
$string['privacy:metadata:data_content:content2'] = 'Contenido adicional 2';
$string['privacy:metadata:data_content:content3'] = 'Contenido adicional 3';
$string['privacy:metadata:data_content:content4'] = 'Contenido adicional 4';
$string['privacy:metadata:data_content:fieldid'] = 'ID de definición de campo';
$string['privacy:metadata:data_records'] = 'Registros en la actividad base de datos';
$string['privacy:metadata:data_records:approved'] = 'Estado de aprobación';
$string['privacy:metadata:data_records:groupid'] = 'Grupo';
$string['privacy:metadata:data_records:timecreated'] = 'Momento en el que el registro fue creado';
$string['privacy:metadata:data_records:timemodified'] = 'Momento en el que el registro fue modificado por última vez';
$string['privacy:metadata:data_records:userid'] = 'Usuario que creó el registro';
$string['privacy:metadata:datafieldnpluginsummary'] = 'Campos para el módulo de actividad de base de datos';
$string['privacy:metadata:filepurpose'] = 'Fichero adjunto al registro de base de datos';
$string['privacy:metadata:ratingpurpose'] = 'Calificaciones en registros de base de datos';
$string['privacy:metadata:tagpurpose'] = 'Etiquetas en registros de base de datos';
$string['radiobutton'] = 'Botones de opción';
$string['recordapproved'] = 'Entrada aprobada';
$string['recorddeleted'] = 'Entrada eliminada';
$string['recorddisapproved'] = 'Entrada desaprobada';
$string['recordsnotsaved'] = 'No se ha guardado ninguna entrada. Por favor, compruebe el formato del archivo subido.';
$string['recordssaved'] = 'entradas guardadas';
$string['removealldatatags'] = 'Eliminar todas las etiquetas de base de datos';
$string['requireapproval'] = 'Aprobación requerida';
$string['requireapproval_help'] = 'Un profesor debe aprobar las entradas antes de que sean visibles para todos.';
$string['required'] = 'Obligatorio';
$string['requiredentries'] = 'Entradas requeridas para completar (antiguo)';
$string['requiredentries_help'] = 'Si se establece, se mostrará un mensaje indicando el número de entradas requeridas para completar. Tenga en cuenta que este ajuste no está relacionado con la finalización de la actividad.

Para las entradas requeridas para la finalización de la actividad debe usar la opción \'Requerir entradas\' dentro de la sección Finalización de actividad. Para eliminar esta opción por completo déjela vacía y después guarde los cambios.
Por favor utilice en su lugar el campo Entradas requeridas en la sección de Finalización de actividad.';
$string['requiredentriestoview'] = 'Entradas requeridas antes de verse';
$string['requiredentriestoview_help'] = 'El número de entradas que un estudiante debe añadir antes de poder ver entradas de otros estudiantes.

Esto no es compatible con el filtro enlace automático a base de datos.';
$string['requiredentrieswarning'] = 'Esta opción ha sido reemplaza por el campo "Requerir entradas" de la sección Finalización de actividad';
$string['requiredfield'] = 'Campo obligatorio';
$string['resetalltemplates'] = 'Reiniciar todas las plantillas';
$string['resetalltemplatesconfirm'] = 'Está a punto de quitar todas las plantillas de su ajuste predefinido actual. Si quiere volver a recuperarlas más tarde, necesitará seleccionar el ajuste predefinido de nuevo en la pestaña "Presets/Ajustes predefinidos".';
$string['resetalltemplatesconfirmtitle'] = '¿Reiniciar todas las plantillas?';
$string['resetsettings'] = 'Restablecer filtros';
$string['resettemplate'] = 'Resetear plantilla';
$string['resettemplateconfirm'] = 'Esto eliminará permanentemente el {$a} de su ajuste predefinido actual.';
$string['resettemplateconfirmtitle'] = '¿Reiniciar plantilla?';
$string['resizingimages'] = 'Cambiando el tamaño de las miniaturas de imagen...';
$string['rows'] = 'filas';
$string['rssglobaldisabled'] = 'Deshabilitado. Vea las variables de configuración';
$string['rsstemplate'] = 'Plantilla RSS';
$string['rsstitletemplate'] = 'Plantilla de título RSS';
$string['rsstype'] = 'Canal RSS para esta actividad';
$string['save'] = 'Guardar';
$string['saveandadd'] = 'Guardar y añadir otro';
$string['saveandview'] = 'Guardar y ver';
$string['saveaspreset'] = 'Publicar ajuste previo en este sitio';
$string['saveaspreset_help'] = 'La opción Guardar como predeterminado publica las plantillas y los campos como un ajuste preestablecido que otros usuarios del sitio pueden utilizar. (Puede borrarla de la lista de valores predeterminados en cualquier momento.)';
$string['saveaspresetmissingcapability'] = 'El usuario no tiene permiso para guardar la base de datos como un ajuste predefinido.';
$string['savedataaspreset'] = 'Guardar todos los campos y plantillas y publicar como ajuste predefinido del sitio';
$string['savesettings'] = 'Guardar ajustes';
$string['savesuccess'] = 'Ajuste previo guardado. <a href="{$a->url}">Vista previa</a>';
$string['savetemplate'] = 'Guardar plantilla';
$string['search'] = 'Buscar';
$string['search:activity'] = 'Base de datos - información de actividad';
$string['search:entry'] = 'Base de datos - entradas';
$string['selectedrequired'] = 'Se requieren todos los seleccionados';
$string['selectexportoptions'] = 'Seleccionar opciones de exportación';
$string['selectfields'] = 'Seleccionar campos';
$string['showall'] = 'Mostrar todas las entradas';
$string['showmore'] = 'Mostrar más';
$string['single'] = 'Ver individual';
$string['singletemplate'] = 'Plantilla de vista Individual';
$string['singleview'] = 'Vista simple';
$string['startbuilding'] = 'Empezar a construir su actividad';
$string['subplugintype_datafield'] = 'Tipo de campo de la base de datos';
$string['subplugintype_datafield_plural'] = '	
Tipos de campo de la base de datos';
$string['subplugintype_datapreset'] = '	
Tipos de campo de la base de datos';
$string['subplugintype_datapreset_plural'] = 'Ajustes previos';
$string['tagarea_data_records'] = 'Entradas de la base de datos';
$string['tags'] = 'Marcas';
$string['tagsdeleted'] = 'Las etiquetas de la base de datos se han borrado';
$string['teachersandstudents'] = '{$a->teachers} y {$a->students}';
$string['templatereset'] = 'Plantilla reiniciada';
$string['templateresetall'] = 'Todas las plantillas reiniciadas';
$string['templates'] = 'Plantillas';
$string['templatesaved'] = 'Plantilla guardada';
$string['templatesnavigation'] = 'Plantillas de navegación terciaria';
$string['text'] = 'Texto';
$string['textarea'] = 'Área de texto';
$string['timeadded'] = 'Tiempo añadido';
$string['timemodified'] = 'Tiempo modificado';
$string['todatabase'] = 'a esta base de datos.';
$string['type'] = 'Tipo de campo';
$string['undefinedprocessactionmethod'] = 'No se ha definido método de acción en Data_Preset para manejar la acción "{$a}".';
$string['unknown'] = 'Campo desconocido';
$string['unsupportedexport'] = '({$a->fieldtype}) no se puede exportar.';
$string['unsupportedfields'] = 'Campos no soportados';
$string['unsupportedfieldslist'] = 'Los siguientes campos no se pueden exportar:';
$string['updatefield'] = 'Actualizar un campo existente';
$string['uploadfile'] = 'Subir archivo';
$string['uploadrecords'] = 'Subir entradas de un archivo';
$string['uploadrecords_help'] = 'Las entradas pueden ser cargadas a través de un archivo de texto. El formato del archivo debe ser el siguiente:
* Cada línea del archivo contiene un registro
* Cada registro contiene una serie de datos separados por el delimitador seleccionado
* El primer registro contiene una lista de nombres de campos que definen el formato del resto del fichero

El campo enmarcado es un carácter que separa cada campo dentro de cada registro. Normalmente se puede dejar sin definir.';
$string['uploadrecords_link'] = 'mod/data/import';
$string['url'] = 'URL';
$string['usedate'] = 'Incluir en la búsqueda';
$string['usepredefinedset'] = 'Usar conjunto predefinido';
$string['usepreset'] = 'Utilizar ajuste predefinido';
$string['usestandard'] = 'Use un ajuste previo';
$string['usestandard_help'] = 'Para utilizar un ajuste previo disponible en todo el sitio, selecciónelo de la lista. (Si ha agregado un ajuste previo de la lista mediante la función guardar como predeterminado entonces usted tiene la opción de eliminarlo.)';
$string['viewfromdate'] = 'Solo lectura desde';
$string['viewnavigation'] = 'Ver modo de navegación terciaria';
$string['viewtemplates'] = 'Ver plantillas';
$string['viewtodate'] = 'Solo lectura hasta';
$string['viewtodatevalidation'] = 'La fecha de solo lectura marcada como fin del intervalo no puede ser anterior a la fecha de solo lectura marcada como inicio del intervalo.';
$string['wrongdataid'] = 'Datos de id erróneos';
