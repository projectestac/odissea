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
 * Strings for component 'block_configurable_reports', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   block_configurable_reports
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Publicaciones de actividad';
$string['activityview'] = 'Vistas de actividad';
$string['addreport'] = 'Añadir informe';
$string['anyone'] = 'Cualquiera';
$string['anyone_summary'] = 'Cualquier usuario en el Campus podra ver este informe';
$string['availablemarks'] = 'Puntuaciones disponibles';
$string['average'] = 'Promedio';
$string['badconditionexpr'] = 'Expresión de condición incorrecta';
$string['badsize'] = 'Tamaño incorrecto, debe ser en % o pixeles';
$string['badtablewidth'] = 'Ancho incorrecto, debe ser en % o valor absoluto';
$string['bar'] = 'Barra';
$string['barsummary'] = 'Barra de gráfico';
$string['blockname'] = 'informes configurables';
$string['calcs'] = 'Cálculos';
$string['categories'] = 'Categorías';
$string['categoryfield'] = 'Campo de categoría';
$string['categoryfieldorder'] = 'Orden de campo de categoría';
$string['ccoursefield'] = 'Condición de campo del curso';
$string['cellalign'] = 'Alineación de celda';
$string['cellsize'] = 'Tamaño de celda';
$string['cellwrap'] = 'Justificado en celda';
$string['column'] = 'Columna';
$string['columnandcellproperties'] = 'Propiedades de columna y celda';
$string['columncalculations'] = 'Cálculos de columna';
$string['columns'] = 'Columnas';
$string['comp_calcs'] = 'Cálculos';
$string['comp_calcs_help'] = '<p>Aqui puede usted añadir cálculos para columnas; Por ejemplo, promedio del número de usuarios matriculados en cursos</p>

<p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_calculations'] = 'Cálculos';
$string['comp_calculations_help'] = '<p>Aquí puede añadir cálculos para columnas; Por ejemplo, promedio de número de usuarios inscritos en cursos</p>';
$string['comp_columns'] = 'Columnas';
$string['comp_columns_help'] = '<p>Aquí puede elegir las diferentes columnas de su informe, dependiendo del tipo de informe</p>

<p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_conditions'] = 'Condiciones';
$string['comp_conditions_help'] = '<p>Aquí puede definir las condiciones (ejemplo: solamente cursos de esta categoría, solamente usuarios de España, etc.</p>

<p>Usted puede añadir una expresión logica si usted está usando más de una condición</p>

<p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_customsql'] = 'SQL Personalizado';
$string['comp_customsql_help'] = '<p>Añadir una petición de trabajo SQL. No use el prefijo de base de datos $CFG->prefix ; en su lugar use "prefix_" sin las comillas</p>

<p>Ejemplo:: SELECT * FROM prefix_course</p> <p>Usted puede encontrar muchos informes de SQL Aquí: <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">ad-hoc contributed reports</a></p>

<p>Dado que este bloque soporta los "CustomSQL Queries Reports" de Tim Hunts, usted puede usar cualquier petición.</p>

<p>Acuérdese de añadir un filtro de tiempo si es que va a usar informes con "testigos" (tokens) de tiempo. </p>

<p>Para usar filtros vea: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Creating a SQL Report Tutorial</a></p>';
$string['comp_filters'] = 'Filtros';
$string['comp_filters_help'] = '<p>Aquí puede elegir qué filtros se mostrarán</p>

<p>Un filtro le permite al usuario elegir columnas del informe para filtrar los resultados del informe</p>

<p>Para usar filtros, si el tipo de su informe es SQL, vea: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Creating a SQL Report Tutorial</a></p>

<p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['componenthelp'] = 'Ayuda de componente';
$string['comp_ordering'] = 'Ordenamiento';
$string['comp_ordering_help'] = '<p>Aquí puede elegir cómo ordenar el informe usando campos e instrucciones</p>

 <p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_permissions'] = 'Permisos';
$string['comp_permissions_help'] = '<p>Aquí puede elegir quien puede ver un informe.</p>

<p>Usted puede añadir una expresión lógica para calcular el permiso final si es que está usando más de una condición </p>

<p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_plot'] = 'Gráficos';
$string['comp_plot_help'] = '<p>Aquí puede añadir a su informe gráficos  basados en los valores y columnas del informe</p>

<p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_template'] = 'Plantilla';
$string['comp_template_help'] = '<p>Usted puede modificar el diseño del informe al crear una plantilla</p>

<p>Para crear una plantilla vea las marcas para reemplazar que puede emplear en el encabezado, pie de paginas y para cada registro del informe usando los botones de ayuda o la información que se muestra en la misma página</p>

<p>Más ayuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['conditionexpr'] = 'Condición';
$string['conditionexpr_conditions'] = 'Condición';
$string['conditionexpr_conditions_help'] = '<p>Usted puede combinar condiciones usando una expresión lógica</p>

<p>Escriba una expresión lógica válida con estos operadores: and, or, nor</p>';
$string['conditionexprhelp'] = 'Escriba una condición valida, por ejemplo (c1 and c2) or (c3 and c4)';
$string['conditionexpr_permissions'] = 'Condición';
$string['conditionexpr_permissions_help'] = '<p>Usted puede combinar condiciones usando una expresión lógica</p>

<p>Escriba una expresión lógica válida con estos operadores: and, or,</p>';
$string['conditions'] = 'Condiciones';
$string['configurable_reports:addinstance'] = 'Añadir un nuevo bloque de informes configurables';
$string['configurable_reports:manageownreports'] = 'Gestionar sus propios informes';
$string['configurable_reports:managereports'] = 'Gestionar informes';
$string['configurable_reports:managesqlreports'] = 'Gestionar informes SQL';
$string['configurable_reports:myaddinstance'] = 'Añadir nuevo bloque de informes configurables a mi pagina principal';
$string['configurable_reports:viewreports'] = 'Ver informes';
$string['confirmdeletereport'] = '¿Está usted seguro de querer eliminar este informe?';
$string['coursecategories'] = 'Filtro por Categoría del Curso';
$string['coursecategory'] = 'Curso en categoría';
$string['coursechild'] = 'Cursos que son hijos de';
$string['coursededicationtime'] = 'Tiempo de dedicación al curso';
$string['coursefield'] = 'Campo del curso';
$string['coursefieldorder'] = 'Orden del campo del curso';
$string['coursemodules'] = 'Módulo del Curso';
$string['courseparent'] = 'Cursos cuyo padre es';
$string['courses'] = 'Cursos';
$string['coursestats'] = 'Estadisticas del curso';
$string['cron'] = 'Auto ejecución Diaria';
$string['crondescription'] = 'Programe esta consulta para ejecutarse cada día (por la noche)';
$string['cron_help'] = 'Programe esta consulta para ejecutarse cada día (por la noche)';
$string['crrepository'] = 'Repositorio de Reportes';
$string['crrepositoryinfo'] = 'Repositorio remoto compartido con informes de ejemplo completamente funcionales';
$string['currentreportcourse'] = 'informe de curso actual';
$string['currentreportcourse_summary'] = 'El curso en donde se ha creado el informe';
$string['currentuser'] = 'Usuario actual';
$string['currentusercourses'] = 'Cursos inscritos por el usuario actual';
$string['currentusercourses_summary'] = 'Una lista de los cursos del usuario actual (solamente cursos visibles)';
$string['currentuserfinalgrade'] = 'Calificación final del curso del usuario actual';
$string['currentuserfinalgrade_summary'] = 'Esta columna muestra la calificación final del usuario actual en el curso-hilera';
$string['currentuser_summary'] = 'El usuario que está viendo el informe';
$string['cuserfield'] = 'Condición del campo del usuario';
$string['custom'] = 'Personalizado';
$string['customdateformat'] = 'Formato de fecha personalizada';
$string['customsql'] = 'SQL personalizado';
$string['datatables'] = 'Habilitar biblioteca de DataTables JS';
$string['datatables_emptytable'] = 'Dato no disponible en la tabla';
$string['datatables_first'] = 'Primer';
$string['datatablesinfo'] = 'Librería DataTables JS (Ordenación por columnas, fila de cabecera fija, búsqueda, paginación...)';
$string['datatables_info'] = 'Mostrando _INICIO_ a _FIN_ de _TOTAL_ entradas';
$string['datatables_infoempty'] = 'Mostrando 0 a 0 de 0 entradas';
$string['datatables_infofiltered'] = '(filtrado de _MAX_ total entradas)';
$string['datatables_last'] = 'Último';
$string['datatables_lengthmenu'] = 'Mostrar _MENU_ entradas';
$string['datatables_loadingrecords'] = 'Cargando...';
$string['datatables_next'] = 'Siguiente';
$string['datatables_previous'] = 'Anterior';
$string['datatables_processing'] = 'Procesando...';
$string['datatables_search'] = 'Buscar:';
$string['datatables_sortascending'] = 'activar: ACTIVAR para ordenar columnas en orden ascendente';
$string['datatables_sortdescending'] = ': activar para ordenar columnas en orden descendente';
$string['datatables_zerorecords'] = 'No se encontraron registros coincidentes';
$string['date'] = 'Fecha';
$string['dateformat'] = 'Formato de Fecha';
$string['dbhost'] = 'DB Host';
$string['dbhostinfo'] = 'Nombre del servidor remoto de Base de Datos (en el cual se ejecutarán las consultas SQL del informe)';
$string['dbname'] = 'Nombre de la BD';
$string['dbnameinfo'] = 'Nombre de la base de datos remota (en el cual se ejecutarán las consultas SQL del informe)';
$string['dbpass'] = 'Contraseña de la BD';
$string['dbpassinfo'] = 'Contraseña de la base de datos remota (para el DB Username definido más arriba)';
$string['dbuser'] = 'Usuario de la BD';
$string['dbuserinfo'] = 'Nombre de usuario de la base de datos remota (debería tener habilitados los privilegios necesarios para ejecutar sentencias SELECT en la DB Name definida más arriba)';
$string['decimals'] = 'Número de decimales';
$string['direction'] = 'Instruccion';
$string['disabled'] = 'Deshabilitado';
$string['displayglobalreports'] = 'Visualización Global de los Reportes';
$string['displayreportslist'] = 'Mostrar la lista de los informes en el cuerpo del bloque';
$string['donotshowtime'] = 'No mostrar información de fecha';
$string['download'] = 'Descargar';
$string['downloadreport'] = 'Descargar informe';
$string['email_message'] = 'Mensaje';
$string['email_send'] = 'Enviar';
$string['email_subject'] = 'Asunto';
$string['enabled'] = 'Habilitado';
$string['enableglobal'] = 'Este es un reporte global (accesible desde cualquier curso)';
$string['enablejsordering'] = 'Habilitar ordenar con JavaScript';
$string['enablejspagination'] = 'Habilitar paginar con JavaScript';
$string['endtime'] = 'Fecha de término';
$string['enrolledstudents'] = 'Estudiantes matriculados';
$string['error_field'] = 'Campo no permitido';
$string['error_operator'] = 'Operdor no permitido';
$string['error_value_expected_integer'] = 'Valor entero esperado';
$string['excludedeletedusers'] = 'Excluir usuarios eliminados (sólo para informes SQL)';
$string['executeat'] = 'Ejecutarse a';
$string['executeatinfo'] = 'El CRON de Moodle se ejecutará sobre las consultas SQL a la hora especificada. Una vez cada 24 horas.';
$string['export_csv'] = 'Exportar en formato CSV';
$string['export_ods'] = 'Exportar en formato ODS';
$string['exportoptions'] = 'Opciones para exportar';
$string['exportreport'] = 'Exportar informe';
$string['export_xls'] = 'Exportar en formato XLS';
$string['fcoursefield'] = 'Filtro de campo del curso';
$string['field'] = 'Campo';
$string['filter'] = 'Filtro';
$string['filter_all'] = 'Todos';
$string['filter_apply'] = 'Aplicar';
$string['filtercategories'] = 'Filtrar categorias';
$string['filtercategories_summary'] = 'Para filtrar por categoría';
$string['filtercoursecategories'] = 'Filtro por categoría del curso';
$string['filtercoursecategories_summary'] = 'Filtrar cursos por su ninguna categoría padre';
$string['filtercoursemodules'] = 'Módulo del Curso';
$string['filtercoursemodules_summary'] = 'Filtro de Módulos del curso';
$string['filtercourses'] = 'Cursos';
$string['filtercourses_summary'] = 'Este filtro muestra una lista de cursos. Solamente puede seleccionarse un curso a la vez';
$string['filterenrolledstudents'] = 'Estudiantes matriculados del curso';
$string['filterenrolledstudents_summary'] = 'Filtrar un usuario (por id) de los estudiantes matriculados del curso';
$string['filterrole'] = 'Rol';
$string['filterrole_summary'] = 'Filtro del sistema de Roles (profesor, estudiante, ...)';
$string['filters'] = 'Filtros';
$string['filter_searchtext'] = 'Búsqueda de texto';
$string['filter_searchtext_summary'] = 'Filtro de texto libre';
$string['filtersemester'] = 'Semestre (hebreo)';
$string['filtersemester_list'] = 'Otoño, Primavera, Otoño C, Seminario';
$string['filterstartendtime_summary'] = 'Filtro de fecha inicio/fin';
$string['filtersubcategories'] = 'Categoría ( subcategorías incluidas)';
$string['filtersubcategories_summary'] = 'Uso: %%FILTER_CATEGORIES:mdl_course_category.path%%';
$string['filteruser'] = 'Usuario del curso actual';
$string['filterusers'] = 'Usuario del sistema';
$string['filterusers_summary'] = 'Filtrar un usuario (por id) de la lista de usuarios del sistemaFiltrar un usuario (por id) de la lista de usuarios del sistema';
$string['filteruser_summary'] = 'Filtrar un usuario (id) de los usuarios del curso actual';
$string['filteryearhebrew'] = 'Año (hebreo)';
$string['filteryearhebrew_summary'] = 'Filtrar usando años Hebreos (תשעג,...)';
$string['filteryearnumeric'] = 'Año (Numérico)';
$string['filteryearnumeric_summary'] = 'El filtro está utilizando años numéricos (2013,...)';
$string['filteryears'] = 'Año (Numérico)';
$string['filteryears_list'] = '2010,2011,2012,2013,2014,2015';
$string['filteryears_summary'] = 'Filtrar por años (representación numérica, 2012...)';
$string['finalgradeincurrentcourse'] = 'Evaluación final en el curso';
$string['fixeddate'] = 'Fecha fija';
$string['footer'] = 'Pie de página';
$string['forcemidnight'] = 'Forzar medianoche';
$string['fsearchuserfield'] = 'Caja de búsqueda de campo del usuario';
$string['fuserfield'] = 'Filtro de campo del usuario';
$string['global'] = 'Informe global';
$string['global_help'] = 'A un informe global se puede acceder desde cualquier curso de la plataforma simplemente añadiendo &courseid=MY_COURSE_ID a la URL del informe';
$string['globalstatsshouldbeenabled'] = 'Las estadísticas del sitio deben estar habilitadas. Vaya a Administración  > Servidor > Estadísticas';
$string['groupseries'] = 'Series del grupo';
$string['groupvalues'] = 'Mismos valores del grupo (suma)';
$string['head_color'] = 'Color de fondo del gráfico';
$string['head_data'] = 'Datos del gráfico';
$string['header'] = 'Encabezado';
$string['head_size'] = 'Tamaño del gráfico';
$string['height'] = 'Altura';
$string['importfromrepository'] = 'Importar informe desde repositorio';
$string['importreport'] = 'Importar informe';
$string['includesubcats'] = 'Incluir subcategorias';
$string['jsordering'] = 'Ordenar por JavaScript';
$string['jsordering_help'] = 'Ordenamiento con JavaScript le permite ordenar la tabla del informe sin volver a cargar la página';
$string['label_field'] = 'Campo de etiqueta';
$string['label_field_help'] = 'Campo que proporciona nombres para las cosas representadas en el gráfico';
$string['lastexecutiontime'] = 'Tiempo de ejecución = {$a} (Sec)';
$string['legacylognotenabled'] = 'Los registros heredados deben estar habilitados.
Vaya a Administración del sitio/Extensiones/Logging
Habilitar el registro heredado dentro de la configuración de registro.';
$string['limitcategories'] = 'Limitar categorías en un gráfico';
$string['line'] = 'Gráfica de lineas';
$string['linesummary'] = 'Una gráfica de líneas con varias series de datos';
$string['listofsqlreports'] = '<a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">Lista de informes contribuidos SQL</a>';
$string['managereports'] = 'Gestionar informes';
$string['max'] = 'Máximo';
$string['min'] = 'Mínimo';
$string['missingcolumn'] = 'Se requiere una columna';
$string['module'] = 'Módulo';
$string['newreport'] = 'Informe nuevo';
$string['nocalcsyet'] = 'Todavía sin cálculos';
$string['nocolumnsyet'] = 'Todavía sin columnas';
$string['noconditionsyet'] = 'Todavía sin condiciones';
$string['noexplicitprefix'] = 'Sin prefijo explícito';
$string['nofiltersyet'] = 'Todavía sin filtros';
$string['nofilteryet'] = 'Todavía sin filtros';
$string['noorderingyet'] = 'Todavía sin ordenamiento';
$string['nopermissionsyet'] = 'Todavía sin permisos';
$string['noplotyet'] = 'Todavía sin gráficas';
$string['norecordsfound'] = 'No se encontraron registros';
$string['noreportsavailable'] = 'Sin informes disponibles';
$string['norowsreturned'] = 'No se devolvieron filas';
$string['nosemicolon'] = 'Sin punto y coma';
$string['notallowedwords'] = 'Palabras no permitidas';
$string['operator'] = 'Operador';
$string['ordering'] = 'Orden';
$string['others'] = 'Otros';
$string['pagination'] = 'Paginación';
$string['pagination_help'] = 'Número de registros a mostrar en cada página. Cero significa sin paginación';
$string['parentcategory'] = 'Categoría padre';
$string['permissions'] = 'Permisos';
$string['pie'] = 'Pastel';
$string['pieareaname'] = 'Nombre';
$string['pieareavalue'] = 'Valor';
$string['piesummary'] = 'Un gráfico de pastel';
$string['plot'] = 'Graficos';
$string['pluginname'] = 'Informes configurables';
$string['previousdays'] = 'Días previos';
$string['previousend'] = 'Fin previo';
$string['previousstart'] = 'Inicio previo';
$string['printreport'] = 'Imprimir informe';
$string['puserfield'] = 'Valor de campo de usuario';
$string['puserfield_summary'] = 'Usuario con el valor seleccionado en el campo seleccionado';
$string['queryfailed'] = 'Error de consulta <code><pre>{$a}</pre></code>';
$string['querysql'] = 'Solicitud SQL';
$string['remote'] = 'Ejecutar en BD remota';
$string['remotedescription'] = '¿Desea ejecutar esta consulta en la BD remota?';
$string['remote_help'] = '¿Desea ejecutar esta consulta en la BD remota?';
$string['remotequerysql'] = 'Consulta SQL';
$string['report'] = 'informe';
$string['reportcategories'] = '1) Elegir una categoría  de los informes remotos';
$string['report_categories'] = 'informe de categorías';
$string['reportcolumn'] = 'Columna de otro informe';
$string['report_courses'] = 'Informe de cursos';
$string['reportcreated'] = 'Informe creado con éxito';
$string['reportlimit'] = 'Límite de filas del informe';
$string['reportlimitinfo'] = 'Limite el número de filas que se muestran en la tabla de informes (El valor predeterminado es 5000 filas. Es mejor tener algún límite, así los usuarios no sobrecargarán el motor de la base de datos)';
$string['reports'] = 'informes';
$string['reportscapabilities'] = 'Capacidades del informe';
$string['reportscapabilities_summary'] = 'Usuarios con la capacidad moodle/site:viewreports habilitada';
$string['reportsincategory'] = '2) Elija un informe forman la lista';
$string['report_sql'] = 'informe SQL';
$string['reporttable'] = 'Tabla de informe';
$string['reporttable_help'] = '<p>Este es el ancho de la tabla que mostrará los registros del informe.</p>

<p>Si usted usa una plantilla, esta opción no tiene efecto</p>';
$string['reporttableui'] = 'Visualización de la tabla de informe';
$string['reporttableuiinfo'] = 'Muestra la tabla de informe como: Una tabla HTML simple con scroll, tabla jQuery con ordenación por columnas o librería DataTables JS (Ordenación por columnas, cabecera superior fija, búsqueda, paginación...)';
$string['report_timeline'] = 'Informe de linea de tiempo';
$string['report_users'] = 'Informe de usuarios';
$string['repository'] = 'Repositorio de informes';
$string['repository_help'] = 'Puede importar informes de ejemplo desde un repositorio público compartido.

Por favor, comprenda que hay un límite diario de llamadas al repositorio.

Si la conexión al repositorio no funciona, puede descargar manualmente un informe desde aquí <a href="https://github.com/jleyva/moodle-configurable_reports_repository" target="_blank">https://github.com/jleyva/moodle-configurable_reports_repository</a> e importarlo utilizando la funcionalidad "Importar informes" mostrada a continuación.';
$string['role'] = 'Rol';
$string['roleincourse'] = 'Usuarios con el/los rol(es) en el informe actual de curso';
$string['roleusersn'] = 'Número de usuarios con rol....';
$string['searchtext'] = 'Búsqueda de texto';
$string['semester'] = 'Semestre (Hebreo)';
$string['serieid'] = 'Columna de serie';
$string['sessionlimittime'] = 'Límite entre clics (en minutos)';
$string['sessionlimittime_help'] = 'El límite entre los clics define si dos clics son parte de la misma sesión o no';
$string['setcourseid'] = 'Especificar "courseid"';
$string['sharedsqlrepository'] = 'Repositorio de consultas SQL';
$string['sharedsqlrepositoryinfo'] = 'Nombre del propietario de la cuenta en GitHub + barra lateral + nombre del repositorio';
$string['sqlsecurity'] = 'Seguridad SQL';
$string['sqlsecurityinfo'] = 'Deshabilitar para ejecutar consultas SQL con sentencias para insertar datos (Nombre del propietario de la cuenta en GitHub + barra lateral + nombre del repositorio)';
$string['sqlsyntaxhighlight'] = 'Resaltar sintáxis SQL';
$string['sqlsyntaxhighlightinfo'] = 'Resaltar sintáxis SQL en el editor de código (librería CodeMirror JS)';
$string['startendtime'] = 'Filtro de fecha de inicio/fin';
$string['starttime'] = 'Fecha de inicio';
$string['stat'] = 'Estadistica';
$string['statsactiveenrolments'] = 'Matriculaciones activas (ultima semana)';
$string['statslogins'] = 'Entradas a la plataforma';
$string['statstotalenrolments'] = 'Matriculaciones totales';
$string['student'] = 'Estudiante';
$string['subcategories'] = 'Categoría (Incluyendo sub-categorías)';
$string['sum'] = 'Suma';
$string['tablealign'] = 'Alineación de tabla';
$string['tablecellpadding'] = 'Justificado de tabla';
$string['tablecellspacing'] = 'Espaciado de tabla';
$string['tableclass'] = 'Clase de tabla';
$string['tablewidth'] = 'Ancho de tabla';
$string['template'] = 'Plantilla';
$string['template_marks'] = 'Marcas en plantilla';
$string['template_marks_help'] = '<p>Usted puede usar cualquiera de estas marcas de reemplazo:</p> <ul>
<li>##reportname## - Para incluir el nombre del informe</li>

<li>##reportsummary## - Para incluir el resumen del informe</li>

<li>##graphs## - Para incluir los gráficos</li>

<li>##exportoptions## - Para incluir las opciones de exportación</li>

<li>##calculationstable## - Para incluir la tabla de cálculos</li>

<li>##pagination## - Para incluir la paginación </li> </ul>';
$string['templaterecord'] = 'Plantilla de registro';
$string['timeinterval'] = 'Intervalo de tiempo';
$string['timeline'] = 'Línea del tiempo';
$string['timemode'] = 'Modo de tiempo';
$string['totalrecords'] = 'Total de registros = {$a->totalrecords}';
$string['type'] = 'Tipo de informe';
$string['typeofreport'] = 'Tipo de informe';
$string['typeofreport_help'] = 'Elija el tipo de informe que quiere crear. Por seguridad, el informe SQL requiere una capacidad adicional';
$string['user'] = 'Usuario del curso (ID)';
$string['usercompletion'] = 'Estado de finalización del usuario en el curso';
$string['usercompletionsummary'] = 'Estado de finalización del curso';
$string['userfield'] = 'Campo del perfil del usuario';
$string['userfieldorder'] = 'Orden de campo de usuario';
$string['usermodactions'] = 'Acciones de módulo de usuario';
$string['usermodoutline'] = 'Estadísticas simples de módulo de usuario';
$string['users'] = 'Usuario de sistema (ID)';
$string['usersincohorts'] = 'Usuario que pertenece a una o varias cohortes';
$string['usersincohorts_summary'] = 'Solamente los usuarios que pertenecen a las cohortes seleccionadas';
$string['usersincoursereport'] = 'Cualquier usuario en el informe de curso actual';
$string['usersincoursereport_summary'] = 'Cualquier usuario en el informe del curso actual';
$string['usersincurrentcourse'] = 'Usuarios en el informe del curso actual';
$string['usersincurrentcourse_summary'] = 'Usuario con el/los rol(es) seleccionados en el informe de curso';
$string['userstats'] = 'Estadisticas del usuario';
$string['value'] = 'Valor';
$string['value_fields'] = 'Campos de valor';
$string['value_fields_help'] = 'Campos que deben representarse en el gráfico. Ctrl + clic (Cmd + clic en Mac) para seleccionar varios. Si selecciona un campo Etiqueta o un campo con valores no numéricos se ignorará';
$string['viewreport'] = 'Ver informe';
$string['width'] = 'Anchura';
$string['xandynotequal'] = 'Los ejes X e Y deben ser diferentes';
$string['xaxis'] = 'Eje de las X';
$string['yaxis'] = 'Eje de las Y';
$string['yearhebrew'] = 'Año (Hebreo)';
$string['yearnumeric'] = 'Año (Numérico)';
$string['years'] = 'Año (Numérico)';
$string['youmustselectarole'] = 'Se requiere al menos un rol';
