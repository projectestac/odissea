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
 * Strings for component 'block_course_overview_campus', language 'es', version '4.4'.
 *
 * @package     block_course_overview_campus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['academicyear_desc'] = 'Año académico (El año calendario no está dividido)';
$string['activityoverview'] = 'Tiene {$a}s que requieren atención';
$string['all'] = 'Todos';
$string['appearancesettingheading'] = 'Apariencia';
$string['blocktitle'] = 'Título del bloque';
$string['blocktitle_desc'] = 'El nombre a mostrar tal como se muestra en el título del bloque';
$string['blocktitledefault'] = 'Vista general del curso';
$string['category'] = 'Categoría paterna';
$string['categorycoursefilter'] = 'Filtro de categoría paterna activa';
$string['categorycoursefilter_desc'] = 'Permitirle a usuarios filtrar cursos por categoría paterna';
$string['categorycoursefilterdisplayname'] = 'Mostrar nombre para filtro de categoría paterna';
$string['categorycoursefilterdisplayname_desc'] = 'Este nombre a mostrar se muestra arriba del filtro de categoría paterna<br /><em>Esta configuración solamente es procesada cuando se activa el filtro de categoría paterna</em>';
$string['categorycoursefiltersettingheading'] = 'Filtro de categoría paterna: Activación de filtro';
$string['course_overview_campus:addinstance'] = 'Añadir un nuevo bloque de vista general de curso del campus';
$string['course_overview_campus:myaddinstance'] = 'Añadir un nuevo bloque de vista general de curso del campus al Tablero';
$string['defaultterm'] = 'Usar período por defecto';
$string['defaultterm_desc'] = 'Si el usuario no ha seleccionado previamente un período para filtrado por período, se le elige un período. La primera opción es el período actual vigente. Si el usuario no está inscrito en ningún curso en el período actual, se elige el período anterior más reciente.<br /><em>Esta configuración solamente es procesada cuando está activado el filtro de período</em>';
$string['enablehidecourses'] = 'Habilitar ocultar curso';
$string['enablehidecourses_desc'] = 'Habilitar ocultación del curso, que les permite a los usuarios ocultar cursos de la lista de vista general de cursos';
$string['firstrowcoursename'] = 'Primera fila: estilo del nombre del curso';
$string['firstrowcoursename_desc'] = 'Mostrar el nombre completo del curso o el nombre corto del curso en la primera fila de las entradas de la lista de la vista general del curso';
$string['hiddencourses'] = 'cursos ocultos';
$string['hidecourse'] = 'Ocultar curso en lista de vista general de curso';
$string['hidecoursessettingheading'] = 'Ocultar cursos';
$string['listentriessettingheading'] = 'Lista de vista general del curso: Entradas';
$string['managehiddencourses'] = 'Gestionar los cursos ocultos';
$string['mergehomonymouscategories'] = 'Unir categorías paternas homónimas';
$string['mergehomonymouscategories_desc'] = 'Si hay múltiples cursos con diferentes categorías padre, pero con el mismo nombre de la categoría paterna, el filtro de categoría paterna se llenará con múltiples categorías con el mismo nombre predeterminado. Esto podría confundir al usuario. Si Usted quiere juntar todas las categorías paternas homónimas dentro de una categoría al usar el filtro de categoría, active esta configuración<br /><em> Esta configuración solamente es procesada cuando está activado el filtro de categoría paterna</em>';
$string['mergehomonymouscategoriessettingheading'] = 'Filtro de categoría paterna: Unir categorías paternas homónimas';
$string['nocourses'] = 'Actualmente, Usted no está inscrito en ningún curso';
$string['noteacher'] = 'Sin profesores inscritos';
$string['noteachertext'] = 'Texto cuando no hay profesores inscritos';
$string['noteachertext_desc'] = 'Este texto es mostrado en lugar de los nombres de los profesores en caso de que no hubiera profesores inscritos en el curso. Si Usted no desea que aparezca un texto sustituíble (placeholder), simplemente elimine aquí el texto.<br /><em>Esta configuración solamente es procesada cuando se activa el mostrar nombre del profesor</em>';
$string['ordersettingheading'] = 'Lista de vista general del curso: Orden';
$string['other'] = 'Otro(s)';
$string['pluginname'] = 'Vista general del curso en el campus';
$string['prioritizemyteachedcourses'] = 'Priorizar cursos en los que yo enseño';
$string['prioritizemyteachedcourses_desc'] = 'Los cursos en donde el usuario tiene un rol de profesor se enlistan primero en la lista de vista general del curso';
$string['privacy:metadata:preference:hidecourse'] = 'El estado mostrar/ocultar de un curso en la lista de vista general de curso.';
$string['privacy:metadata:preference:local_boostcoc-activefilters'] = 'La lista de filtros activos a ser usados en el plugin acompañante \'Boost course overview campus\'.';
$string['privacy:metadata:preference:local_boostcoc-notshowncourses'] = 'La lista de cursos actualmente no mostrados  a ser usados en el plugin acompañante \'Boost course overview campus\'.';
$string['privacy:metadata:preference:selectedcategory'] = 'La selección actual del filtro de categoría padre.';
$string['privacy:metadata:preference:selectedteacher'] = 'La selección actual del filtro profesor.';
$string['privacy:metadata:preference:selectedterm'] = 'La selección actual del filtro semestre.';
$string['privacy:metadata:preference:selectedtoplevelcategory'] = 'La selección actual del filtro categoría nivel superior.';
$string['privacy:request:preference:hidecourse'] = 'El estado mostrar/ocultar del curso {$a->item} en la lista de vista general de curso es: {$a->value}.';
$string['privacy:request:preference:local_boostcoc-activefilters'] = 'La lista de filtros activos actuales a ser usados en el plugin acompañante \'Boost course overview campus\' es: {$a->value}.';
$string['privacy:request:preference:local_boostcoc-notshowncourses'] = 'La lista de cursos no mostrados actualmente a ser usada en el plugin acompañante \'Boost course overview campus\' es: {$a->value}.';
$string['privacy:request:preference:selectedcategory'] = 'La selección actual del filtro categoría padre es: {$a->value}.';
$string['privacy:request:preference:selectedteacher'] = 'La selección actual del filtro profesor es: {$a->value}.';
$string['privacy:request:preference:selectedterm'] = 'La selección actual del filtro semestre es: {$a->value}.';
$string['privacy:request:preference:selectedtoplevelcategory'] = 'La selección actual del filtro categoría nivel superior es: {$a->value}.';
$string['secondrowhideonphones'] = 'Segunda hilera: Ocultar en teléfonos';
$string['secondrowhideonphones_desc'] = 'Ocultar la segunda fila en teléfonos móviles para ahorar espacio';
$string['secondrowshowcategoryname'] = 'Segunda fila: Mostrar nombre de categoría paterna';
$string['secondrowshowcategoryname_desc'] = 'Mostrar el nombre de la categoría paterna del curso en una segunda hilera de la entrada de lista de vista general del curso';
$string['secondrowshowshortname'] = 'Segunda fila: Mostrar nombre corto';
$string['secondrowshowshortname_desc'] = 'Mostrar el nombre corto del curso en una segunda hilera de la entrada de lista de vista general del curso';
$string['secondrowshowteachername'] = 'Segunda fila: Mostrar nombre del profesor';
$string['secondrowshowteachername_desc'] = 'Mostrar el nombre de los profesores en una segunda fila de la entrada de lista de vista general de curso. Si hay más de un profesor, los nombres se ordenarán primeramente por el <a href="/admin/roles/manage.php">orden global de roles</a> y secundariamente por los apellidos de los profesores';
$string['secondrowshowteachernamestyle'] = 'Segunda fila: Estilo del nombre del profesor';
$string['secondrowshowteachernamestyle_desc'] = 'Definir como se mostrará el nombre del profesor en la segunda fila de la entrada de lista de vista general del curso<br /><em>Esta configuración solamente es procesada cuando se activa el mostrar nombre del profesor</em>';
$string['secondrowshowtermname'] = 'Segunda fila: Mostrar nombre del período';
$string['secondrowshowtermname_desc'] = 'Mostrar el nombre del período del curso en una segunda hilera de la entrada de lista de vista general del curso';
$string['secondrowshowtoplevelcategoryname'] = 'Segunda fila: Mostrar nombre de categoría de nivel superior';
$string['secondrowshowtoplevelcategoryname_desc'] = 'Mostrar nombre de categoría de nivel superior del curso en una segunda fila de la entrada de la lista de vista general del curso';
$string['semester_desc'] = 'Semestre (el año calendario se divide en dos semestres)';
$string['settingspage_categoryfilter'] = 'Filtro de categoría padre';
$string['settingspage_courseoverviewlist'] = 'Lista de vista general del curso';
$string['settingspage_general'] = 'General';
$string['settingspage_hidecourses'] = 'Ocultar cursos';
$string['settingspage_teacherfilter'] = 'Filtro de Profesor';
$string['settingspage_teacherroles'] = 'Roles de Profesor';
$string['settingspage_termfilter'] = 'Filtro de semestre/período';
$string['settingspage_toplevelcategoryfilter'] = 'Filtro de categoría de nivel superior';
$string['showcourse'] = 'Mostrar curso';
$string['stopmanaginghiddencourses'] = 'Dejar de gestionar los cursos ocultos';
$string['submitfilter'] = '¡ Filtrar mis cursos !';
$string['teachercoursefilter'] = 'Activar filtro del profesor';
$string['teachercoursefilter_desc'] = 'Permitirles a los usuarios filtrar cursos por profesor';
$string['teachercoursefilterdisplayname'] = 'Filtro para mostrar nombre del profesor';
$string['teachercoursefilterdisplayname_desc'] = 'El nombre a mostrar es mostrado arriba del filtro de profesor<br /><em>Esta configuración solamente es procesada cuando está activo el filtro de profesor</em>';
$string['teachercoursefiltersettingheading'] = 'Filtro del profesor: Activación del filtro';
$string['teachernamestylefirstname'] = 'Nombre(s)';
$string['teachernamestylefullname'] = 'Nombre(s) Apellido(s)';
$string['teachernamestylefullnamedisplay'] = 'Estilo del nombre del profesor de acuerdo a la configuración del núcleo de Moodle de "fullnamedisplay</em>" (Actualmente configurado a "{$a}")';
$string['teachernamestylelastname'] = 'Apellido(s)';
$string['teacherroles'] = 'Roles de profesor';
$string['teacherroles_desc'] = 'Definir cuales roles son manejados como roles de profesor por este plugin<br /><em>Esta configuración solamente es procesada cuando está activado el mostrar nombre del profesor, o cuando está activado el filtro de profesor, o cuando está activada la priorización de los cursos en donde yo enseño</em>';
$string['teacherroleshidesuspended'] = 'IOcultar profesores suspendidos';
$string['teacherroleshidesuspended_desc'] = 'Al buscar profesores con los roles de profesor especificados, no solamente revisar si un profesor tiene uno de los roles dados en un curso, sino también revisar si su inscripción en el curso está activa (por ejemplo, la inscripción del profesor en el curso no está suspendida + la fecha actual está dentro de las fechas de inicio y fin de la inscripción del profesor + el método de inscripción de la inscripción del profesor está habilitado en el curso). Los profesores cuyas inscripciones en un curso no estén activas no serán considerados como profesores para este curso.<br /><em>Esta configuración solamente es procesada cuando está activado el mostrar el nombre del profesor o cuando está activado el filtro de profesor.</em><br /><em>Advertencia: Si Usted habilita esta configuración, la carga en la Base de Datos para crear la lista de cursos se aumentará levemente debido a las revisiones necesarias adicionales. Por tanto, solamente habilite esta configuración si la necesita.</em>';
$string['teacherrolesparent'] = 'Incluir roles de profesor en contexto paterno';
$string['teacherrolesparent_desc'] = 'Al buscar profesores con los roles de profesor especificados, incluir a profesores que tengan su rol asignado en contextos paternos (categoría de curso o a nivel del sistema)<br /><em>Esta configuración solamente es procesada cuando está activo el mostrar nombre de profesor o cuando el filtro de profesor está activado.</em><br /><em>Advertencia: Si Usted configura esto a "No" o "Dependiendo de la capacidad moodle/course:reviewotherusers del usuario", la función de "Priorizar cursos en donde yo enseño" también estará influenciada y no priorizará cursos en donde el usuario tiene rol de profesor asignado en contextos paternos.</em>';
$string['teacherrolesparentcapability'] = 'Dependiendo de la capacidad del usuario moodle/course:reviewotherusers';
$string['teacherrolessettingheading'] = 'Roles de profesor';
$string['term'] = 'Período';
$string['term1'] = 'Período 1';
$string['term1name'] = 'Nombre del período 1';
$string['term1name_desc'] = 'Nombre descriptivo para el período 1; por favor, renómbrelo de acuerdo a la terminología de su campus (o déjelo vacío en caso de que quiera usar solamente números de año en el modo de año académico)<br /><em>Esta configuración solamente es procesada cuando está activado el filtro de período</em>';
$string['term1startday'] = 'Día de inicio del período 1';
$string['term1startday_desc'] = 'Día y mes cuando inicia el período 1<br /><em>Esta configuración solamente es procesada cuando está activado el filtro de período</em></em>';
$string['term2'] = 'Período 2';
$string['term2name'] = 'Nombre del período 2';
$string['term2name_desc'] = 'Nombre descriptivo para el período 2; por favor, renómbrelo de acuerdo a la terminología de su campus <br /><em>Esta configuración solamente es procesada cuando está activado el filtro de período y cuando el modo del período está configurado a "Semestre", "Cuatrimestre" o "Trimestre"</em>';
$string['term2startday'] = 'Día de inicio del período 2';
$string['term2startday_desc'] = 'Día y mes cuando inicia el período 2<br /><em>Esta configuración solamente es procesada cuando está activado el filtro de período y cuando el modo del período está configurado a "Semestre", "Cuatrimestre" o "Trimestre"</em>';
$string['term3'] = 'Período 3';
$string['term3name'] = 'Nombre del período 3';
$string['term3name_desc'] = 'Nombre descriptivo para el período 3; por favor, renómbrelo de acuerdo a la terminología de su campus <br /><em>Esta configuración solamente es procesada cuando está activado el filtro de período y cuando el modo del período está configurado a "Cuatrimestre" o "Trimestre"</em>';
$string['term3startday'] = 'Día de inicio del período 3';
$string['term3startday_desc'] = 'Día y mes cuando inicia el período 3<br /><em>Esta configuración solamente es procesada cuando está activado el filtro de período y cuando el modo del período está configurado a "Cuatrimestre" o "Trimestre"</em>';
$string['term4'] = 'Período 4';
$string['term4name'] = 'Nombre del período 4';
$string['term4name_desc'] = 'Nombre descriptivo para el período 3; por favor, renómbrelo de acuerdo a la terminología de su campus <br /><em>Esta configuración solamente es procesada cuando está activado el filtro de período y cuando el modo del período está configurado a "Trimestre"</em>';
$string['term4startday'] = 'Día de inicio del período 4';
$string['term4startday_desc'] = 'Día y mes cuando inicia el período 4<br /><em>Esta configuración solamente es procesada cuando está activado el filtro de período y cuando el modo del período está configurado a "Trimestre"</em>';
$string['termbehavioursettingheading'] = 'Filtro de período: Comportamiento del período';
$string['termcoursefilter'] = 'Filtro de período activo';
$string['termcoursefilter_desc'] = 'Permitirle a los usuarios filtrar cursos por período';
$string['termcoursefilterdisplayname'] = 'Mostrar nombre para filtro de período';
$string['termcoursefilterdisplayname_desc'] = 'El nombre a mostrar es mostrado arriba del filtro del período<br /><em>Esta configuración solamente es procesada cuando está activo el filtro de período</em>';
$string['termcoursefiltersettingheading'] = 'Filtro de período: Activación del filtro';
$string['termmode'] = 'Modo de período';
$string['termmode_desc'] = 'Configurar el modo de período para el filtro de período<br /><em>Esta configuración solamente es procesada cuando está activado el filtro de período</em>';
$string['termnamesettingheading'] = 'Filtro de período: Nombres de períodos';
$string['termsettingerror'] = 'Las fechas de los períodos configurados no tienen sentido. Por favor, verifique que el período 2 inicie después del período 1 y así sucesivamente. El filtro de período no estará disponible para los usuarios hasta que Usted hay arreglado este problema.';
$string['termsettingheading'] = 'Filtro de período: Definición del período';
$string['termyearpos'] = 'Posición del año y el nombre del período';
$string['termyearpos_desc'] = 'Definir si el año del período debería de añadirse como sufijo (posterior a) o prefijo (anterior) al nombre del período <br /><em>Esta configuración solamente es procesada cuando está activado el filtro de período</em>';
$string['termyearposprefixnospace_desc'] = 'El año se añade como prefijo al nombre del período sin espacio (Ejemplo:"2014Verano")';
$string['termyearposprefixspace_desc'] = 'El año se añade como prefijo al nombre del período con espacio (Ejemplo:"2014 Período de Verano")';
$string['termyearpossuffixnospace_desc'] = 'El año se añade como sufijo al nombre del período sin espacio (Ejemplo:"Verano2014")';
$string['termyearpossuffixspace_desc'] = 'El año se añade como sufijo al nombre del período con espacio (Ejemplo:"Período de Verano 2014")';
$string['termyearseparation'] = 'Separación del nombre del período del segundo año';
$string['termyearseparation_desc'] = 'Si la duración del período incluye el día de Año Nuevo, definir cómo este segundo año debería de separarse del primero<br /><em><Esta configuración solamente es procesada cuando está activado el filtro de período</em>';
$string['termyearseparationhyphen_desc'] = 'Separar con un guión (Ejemplo: "2013-2014")';
$string['termyearseparationnosecondyear_desc'] = 'No añadir el segundo año (Ejemplo: "2013")';
$string['termyearseparationslash_desc'] = 'Separar con una diagonal (Ejemplo: "2013/2014")';
$string['termyearseparationunderscore_desc'] = 'Separar con un guión bajo (Ejemplo: "2013_2014")';
$string['tertial_desc'] = 'Cuatrimestre (año calendario se divide en tres períodos)';
$string['timelesscourses'] = 'Cursos atemporales';
$string['timelesscourses_desc'] = 'Habilitar soporte para cursos atemporales en el filtro de período. Los cursos atemporales parece que no están asociados a un período específico<br /><em>Esta configuración solamente es procesada cuando está activado el filtro de período</em>';
$string['timelesscoursesname'] = 'Mostrar nombre para cursos atemporales';
$string['timelesscoursesname_desc'] = 'Este nombre a mostrar es mostrado en el filtro del período para los cursos que son atemporales<br /><em>Esta configuración solamente es procesada cuando el filtro de período está activado y cuando los cursos atemporales están activados</em>';
$string['timelesscoursessettingheading'] = 'Filtro de período: Cursos atemporales';
$string['timelesscoursesthreshold'] = 'Umbral para cursos atemporales';
$string['timelesscoursesthreshold_desc'] = 'Definir cursos con un año de inicio anterior (y no igual) a este año como cursos atemporales<br /><em>Esta configuración solamente es procesada cuando el filtro de período está activado y cuando estána activados cursos atemporales</em>';
$string['toplevelcategory'] = 'Categoría de nivel superior';
$string['toplevelcategorycoursefilter'] = 'Activar categoría de nivel superior';
$string['toplevelcategorycoursefilter_desc'] = 'Permitirles a los usuarios el filtrar cursos por categoría de nivel superior';
$string['toplevelcategorycoursefilterdisplayname'] = 'Mostrar nombre para filtro de categoría de nivel superior';
$string['toplevelcategorycoursefilterdisplayname_desc'] = 'Este nombre a mostrar es mostrado arriba del filtro de la categoría nivel superior<br /><em>Esta configuración solamente es procesada cuando el filtro de categoría de nivel superior está activado</em>';
$string['toplevelcategorycoursefiltersettingheading'] = 'Filtro de categoría de nivel superior: Activación del filtro';
$string['trimester_desc'] = 'Trimestre (Año calendario es dividido en cuatro períodos)';
$string['youhave'] = 'Usted tiene';
