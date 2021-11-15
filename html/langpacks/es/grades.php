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
 * Strings for component 'grades', language 'es', version '3.11'.
 *
 * @package     grades
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = 'Actividades';
$string['addcategory'] = 'Añadir categoría';
$string['addcategoryerror'] = 'No se pudo añadir categoría.';
$string['addexceptionerror'] = 'Ocurrió un error al añadir una excepción a userid:gradeitem';
$string['addfeedback'] = 'Agregar retroalimentación';
$string['addgradeletter'] = 'Añadir letra de calificación';
$string['addidnumbers'] = 'Añadir números ID';
$string['additem'] = 'Añadir ítem de calificación';
$string['additionalfeedback'] = 'Retroalimentación adicional';
$string['addoutcome'] = 'Agregar un resultado';
$string['addoutcomeitem'] = 'Agregar ítem de resultado';
$string['addscale'] = 'Agregar una escala';
$string['adjustedweight'] = 'Peso ajustado';
$string['aggregateextracreditmean'] = 'Media de calificaciones (con créditos extra)';
$string['aggregatemax'] = 'Calificación más alta';
$string['aggregatemean'] = 'Media de calificaciones';
$string['aggregatemedian'] = 'Mediana de calificaciones';
$string['aggregatemin'] = 'Calificación más baja';
$string['aggregatemode'] = 'Moda de calificaciones';
$string['aggregatenotonlygraded'] = 'Incluye calificaciones vacías';
$string['aggregateonlygraded'] = 'Excluir calificaciones vacías';
$string['aggregateonlygraded_help'] = 'Una calificación vacía o faltante es la que no está presente en el libro de calificación. Puede ser de una tarea que todavía no se entregado, o de un examen que no se ha hecho o que no se hizo en su fecha.

Esta configuración determina si las calificaciones vacías (faltantes) NO serán incluidas en la agregación o si serán contadas como calificaciones mínimas, por ejemplo 0 para una tarea con puntaje entre 0 y 100.

Nota del traductor: Dependiento de este ajuste, los cálculos de media, mediana y moda podrían no toman en cuenta las calificaciones faltantes, por lo que si existieran alumnos que faltan a algunos/varios/muchos exámenes sin justificación válida, la suma de calificaciones puede ser una mejor forma (pero más estricta) de evaluar su desempeño real (y la calificación que merecen) que media, mediana o moda donde exámenes no hechos no afectaron la calificación. Por favor corra pruebas con datos reales en su servidor antes de extender alguna estrategia de calificación a su institución...';
$string['aggregateoutcomes'] = 'Incluir resultados en cálculo total';
$string['aggregateoutcomes_help'] = '<p>La inclusión de resultados en la agregación puede no conducir a la calificafión global deseada, de modo que usted tiene la opción de incluirlos o desecharlos.</p>';
$string['aggregatesonly'] = 'Cambiar a solo cálculos totales';
$string['aggregatesubcatsupgradedgrades'] = 'Nota: La configuración de cálculos "Cálculos totales incluyendo subtageorías" ha sido removido tras la actualización del portal. Debido a que "Cálculos totales incluyendo subcategorías" se utilizaba en este curso, se recomienda que compruebe el cambio en el libro de calificaciones.';
$string['aggregatesum'] = 'Suma';
$string['aggregateweightedmean'] = 'Media ponderada de calificaciones';
$string['aggregateweightedmean2'] = 'Media ponderada simple de calificaciones';
$string['aggregation'] = 'Cálculo total';
$string['aggregation_help'] = 'El cálculo total determina cómo las calificaciones que forman parte de  una categoría se combinan para consolidarse en una calificación global. Pueden ser de diferente tipo:

 * Media - La suma de todos las calificaciones dividida por el número total de calificaciones
* Mediana de las calificaciones - El valor de la variable central cuando las calificaciones se ordenan de menor a mayor
* Calificación más baja
* Calificación más alta
* Moda - La calificación que se produce con más frecuencia
* Suma  - La suma de todas las calificaciones acorde a los valores de la escala establecida';
$string['aggregationcoef'] = 'Coeficiente';
$string['aggregationcoefextra'] = 'Puntos extra';
$string['aggregationcoefextra_help'] = 'Si la agregación es "Natural" o "Media ponderada simple" y la casilla de crédito extra está seleccionada, la máxima calificación de la unidad no se suma a la máxima calificación de la categoría. Esto resulta en la posibilidad de obtener la máxima calificación en la categoría sin tener la máxima calificación en todas las unidades. Si el administrador del portal ha activado las calificaciones sobre el máximo, podrá haber calificaciones sobre el máximo.
Si la agregación es "Media de calificaciones (con créditos extra)" y la configuración del crédito extra es un valor mayor a cero, el crédito extra es el factor por el cual se multiplica la nota antes de añadirla al total tras el cálculo de la media.';
$string['aggregationcoefextrasum'] = 'Actuar como puntos extra';
$string['aggregationcoefextrasum_help'] = 'Si está marcada la casilla de verificación Crédito extra, la calificación máxima del elemento de calificación no se agrega a la calificación máxima de la categoría, con el resultado de que es posible alcanzar la calificación máxima en la categoría (o una calificación superior a la máxima si lo ha habilitado el administrador) sin tener la calificación máxima en todos los elementos de calificación.';
$string['aggregationcoefextrasumabbr'] = '+';
$string['aggregationcoefextraweight'] = 'Ponderación del crédito extra';
$string['aggregationcoefextraweight_help'] = '<p>Un valor mayor que 0 trata las calificaciones de este elemento de calificación como crédito extra durante la agregación. El número es un factor por el cual se multiplicará el valor de la calificación antes de agregarse a la suma de todas las calificaciones, pero el elemento en sí mismo no será contado en la división. Por ejemplo:</p>

<ul>
    <li>El elemento 1 es calificado de 0 a 100 y el valor de su "crédito extra" se fija en 2</li>
    <li>El elemento 2 es calificado de 0 a 100 y el valor de su "crédito extra" se deja en 0.0000</li>
    <li>El elemento 2 es calificado de 0 a 100 y el valor de su "crédito extra" se deja en 0.0000</li>
    <li>Los 3 elementos pertenecen a la Categoría 1, que tiene como estrategia de agregación "Media de las calificaciones (con créditos extra)"</li>
    <li>Un estudiante consigue una calificación de 20 en el elemento 1, 40 en el 2 y 70 en el 3</li>
    <li>El total del estudiante en la Categoría 1 será de 95/100 puesto que 20*2 + (40 + 70)/2 = 95</li>
</ul>';
$string['aggregationcoefweight'] = 'Peso del ítem';
$string['aggregationcoefweight_help'] = '<p>Ponderación aplicada a todas las calificaciones en este elemento de calificación durante la agregación con otros elementos de calificación.</p>';
$string['aggregationhintdropped'] = '( Descartada )';
$string['aggregationhintexcluded'] = '( Excluído )';
$string['aggregationhintextra'] = '( Crédito extra )';
$string['aggregationhintnovalue'] = '( Vacío )';
$string['aggregationofa'] = 'Agregación de {$a}';
$string['aggregationposition'] = 'Posición del resultado del cálculo';
$string['aggregationposition_help'] = 'Este parámetro valor determina si las columnas de totales de las categorías y los cursos se muestran al principio o al final en los informes del libro de calificaciones.';
$string['aggregationsvisible'] = 'Tipos de estrategias de cálculo';
$string['aggregationsvisiblehelp'] = 'Seleccione todos los tipos de cálculo que deberían estar disponibles. Mantenga pulsada la tecla Control para seleccionar múltiples ítems.';
$string['allgrades'] = 'Todas las calificaciones por categoría';
$string['allstudents'] = 'Todos los estudiantes';
$string['allusers'] = 'Todos los usuarios';
$string['autosort'] = 'Ordenación automática';
$string['availableidnumbers'] = 'Números ID disponibles';
$string['average'] = 'Promedio';
$string['averagesdecimalpoints'] = 'Nº de decimales en el promedio de las columnas';
$string['averagesdecimalpoints_help'] = 'Esta configuración determina el número de decimales a mostrar para cada promedio, o si es que la configuración global de decimales para la categoría o el ítem de calificación es usada (heredar).';
$string['averagesdisplaytype'] = 'Modo de visualización en el promedio de las columnas';
$string['averagesdisplaytype_help'] = '<o>Especifica como se presenta la media para cada columna. Si se selecciona Heredar, se usará el tipo de vista para cada columna.</p>';
$string['backupwithoutgradebook'] = 'La copia de seguridad no contiene la configuración del Libro de Calificaciones';
$string['badgrade'] = 'La calificación suministrada no es válida';
$string['badlyformattedscale'] = 'Por favor, escriba una lista de valores separados por comas (se requieren al menos dos valores).';
$string['baduser'] = 'El usuario suministrado no es válido';
$string['bonuspoints'] = 'Puntos bonificación';
$string['bulkcheckboxes'] = 'Casillas de verificación masivas';
$string['calculatedgrade'] = 'Calificación calculada';
$string['calculation'] = 'Cálculo';
$string['calculation_help'] = 'Un cálculo de calificaciones es una fórmula usada para determinar las calificaciones. La fórmula debería comenzar con el signo igual (=) y puede usar operadores matemáticos comunes tales como valor máximo, valor mínimo o suma. Si se desea, pueden incluirse otros ítems de calificación en el cálculo tecleando los números ID encerrados entre corchetes dobles.';
$string['calculationadd'] = 'Agregar cálculo';
$string['calculationedit'] = 'Editar cálculo';
$string['calculationsaved'] = 'Cálculo guardado';
$string['calculationview'] = 'Ver cálculo';
$string['cannotaccessgroup'] = 'Lo sentimos, no se puede acceder a las calificaciones del grupo seleccionado.';
$string['categories'] = 'Categorías';
$string['category'] = 'Categoría';
$string['categoryedit'] = 'Editar categoría';
$string['categoryname'] = 'Nombre de la categoría';
$string['categorytotal'] = 'Total categoría';
$string['categorytotalfull'] = 'Total {$a->category}';
$string['categorytotalname'] = 'Nombre de la categoría total';
$string['changedefaults'] = 'Cambiar valores por defecto';
$string['changereportdefaults'] = 'Cambiar valores por defecto del informe';
$string['chooseaction'] = 'Seleccione una acción...';
$string['choosecategory'] = 'Seleccionar categoría';
$string['collapsecriterion'] = 'Colapsar criterio';
$string['combo'] = 'Tabuladores y menú desplegable';
$string['compact'] = 'Compactar';
$string['componentcontrolsvisibility'] = 'El hecho que este ítem de calificación esté oculto o no, es controlado por la configuración de la actividad.';
$string['contract'] = 'Contraer categoría';
$string['contributiontocoursetotal'] = 'Aporta al total del curso';
$string['controls'] = 'Controles';
$string['courseavg'] = 'Promedio del curso';
$string['coursegradecategory'] = 'Categoría de calificación de curso';
$string['coursegradedisplaytype'] = 'Forma de mostrar calificación del curso';
$string['coursegradedisplayupdated'] = 'La forma de mostrar la calificación del curso ha sido actualizada.';
$string['coursegradesettings'] = 'Ajustes de la calificación del curso';
$string['coursename'] = 'Nombre del curso';
$string['coursescales'] = 'Escalas del curso';
$string['coursesettings'] = 'Ajustes del curso';
$string['coursesettingsexplanation'] = 'Los ajustes de calificación del curso determinan cómo aparece el libro de calificaciones a todos los participantes del curso.';
$string['coursesiamtaking'] = 'Cursos que estoy tomando';
$string['coursesiamteaching'] = 'Cursos que estoy enseñando';
$string['coursetotal'] = 'Total del curso';
$string['createcategory'] = 'Crear categoría';
$string['createcategoryerror'] = 'No se ha podido crear una categoría nueva';
$string['creatinggradebooksettings'] = 'Creando ajustes del libro de calificaciones';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = 'Agregación padre actual.';
$string['curveto'] = 'Curvar a';
$string['decimalpoints'] = 'Puntos decimales globales';
$string['decimalpoints_help'] = 'Esta configuración determina el número de decimales a mostrar para cada calificación. Este ajuste no tiene efecto en los cálculos de las calificaciones, que se hacen con una precisión de 5 decimales.';
$string['default'] = 'Por defecto';
$string['defaultprev'] = 'Valor por defecto ({$a})';
$string['deletecategory'] = 'Eliminar categoría';
$string['disablegradehistory'] = 'Deshabilitar historial de calificaciones';
$string['disablegradehistory_help'] = 'Deshabilitar el historial de rastreo de cambios en la tablas de calificaciones relacionadas. Esto puede agilizar algo el funcionamiento del servidor y conservar espacio en la base de datos.';
$string['displaylettergrade'] = 'Mostrar calificaciones con letra';
$string['displaypercent'] = 'Mostrar porcentajes';
$string['displaypoints'] = 'Mostrar puntos';
$string['displayweighted'] = 'Mostrar calificaciones ponderadas';
$string['dropdown'] = 'Menú desplegable';
$string['droplow'] = 'Descartar las más bajas';
$string['droplow_help'] = '<p>Si se activa, esta opción descartará las X calificaciones más bajas, donde X es el valor seleccionado por esta opción. </p>';
$string['droplowestvalue'] = 'Configurar descartar el menor valor de calificación';
$string['droplowestvalues'] = 'Descartar {$a} valores más bajos';
$string['dropped'] = 'Descartadas';
$string['dropxlowest'] = 'Descartar X más bajas';
$string['dropxlowestwarning'] = 'Nota: Si usa \'descartar x más bajas\', la calificación asume que todos los ítems de la categoría tienen el mismo valor en puntos. Si dichos valores difieren, los resultados serán impredecibles';
$string['duplicatedgradeitem'] = '{$a} (copia)';
$string['duplicatescale'] = 'Duplicar escala';
$string['edit'] = 'Editar';
$string['editcalculation'] = 'Editar cálculo';
$string['editcalculationverbose'] = 'Editar cáculo para {$a->category} {$a->itemmodule} {$a->itemname}';
$string['editfeedback'] = 'Editar retroalimentación';
$string['editgrade'] = 'Editar calificación';
$string['editgradeletters'] = 'Editar letras de calificación';
$string['editoutcome'] = 'Editar resultado';
$string['editoutcomes'] = 'Editar resultados';
$string['editscale'] = 'Editar escala';
$string['edittree'] = 'Configuración';
$string['editverbose'] = 'Editar {$a->category} {$a->itemmodule} {$a->itemname}';
$string['enableajax'] = 'Habilitar AJAX';
$string['enableajax_help'] = 'Agrega una capa de funcionalidad AJAX al informe del calificador, simplificando y agilizando las operaciones comunes. Depende de que Javascript esté activado en el navegador del usuario.';
$string['enableoutcomes'] = 'Habilitar resultados';
$string['enableoutcomes_help'] = 'Si se habilita, los ítems de calificación pueden ser calificados usando una o más escalas ligadas a declaraciones de resultados.';
$string['encoding'] = 'Codificación';
$string['encoding_help'] = 'Seleccione la codificación de caracteres usada para los datos. (La codificación estándar es UTF-8.) Si por error se selecciona una codificación equivocada, se notará al pre-visualizar los datos a importar.';
$string['errorcalculationbroken'] = 'Probablemente una referencia circular o una fórmula de cálculo errónea';
$string['errorcalculationnoequal'] = 'La fórmula debe comenzar por el signo \'igual\' (=1+2)';
$string['errorcalculationunknown'] = 'Fórmula no válida';
$string['errorgradevaluenonnumeric'] = 'Recibido valor no numérico para calificación baja o alta para';
$string['errornocalculationallowed'] = 'No se permiten cálculos para este ítem';
$string['errornocategorisedid'] = 'No se ha podido conseguir una ID no categorizada.';
$string['errornocourse'] = 'No se pudo obtener información del curso';
$string['errorreprintheadersnonnumeric'] = 'Recibido valor no numérico para cabeceras de reimpresión';
$string['errorsavegrade'] = 'Lo sentimos, no se pudo guardar la calificación.';
$string['errorsettinggrade'] = 'Error al guardar la calificación de "{$a->itemname}" para el usuario {$a->userid}';
$string['errorupdatinggradecategoryaggregateonlygraded'] = 'Error al actualizar el ajuste "Agregar sólo elementos calificados" de la categoría de calificación con ID {$a->id}';
$string['errorupdatinggradecategoryaggregateoutcomes'] = 'Error al actualizar el ajuste "Incluir resultados en agregación" de la categoría de calificación ID {$a->id}';
$string['errorupdatinggradecategoryaggregation'] = 'Error al actualizar el tipo de agregación de la categoría de calificación ID {$a->id}';
$string['errorupdatinggradeitemaggregationcoef'] = 'Error al actualizar el coeficiente de agregación (ponderación o crédito extra) de la categoría de calificación ID {$a->id}';
$string['eventgradedeleted'] = 'Calificación borrada';
$string['eventgradeitemcreated'] = 'Elemento de calificación creado';
$string['eventgradeitemdeleted'] = 'Elemento de calificación eliminado';
$string['eventgradeitemupdated'] = 'Elemento de calificación actualizado';
$string['eventgradelettercreated'] = 'Calificación con letra creada';
$string['eventgradeletterdeleted'] = 'Calificación con letra eliminada';
$string['eventgradeletterupdated'] = 'Calificación con letra actualizada';
$string['eventgradeviewed'] = 'Las calificaciones fueron vistas en el libro de calificaciones';
$string['eventscalecreated'] = 'Escala creada';
$string['eventscaledeleted'] = 'Escala eliminada';
$string['eventscaleupdated'] = 'Escala actualizada';
$string['eventusergraded'] = 'Usuario calificado';
$string['excluded'] = 'Excluídos';
$string['excluded_help'] = '<p>Si la opción de exclusión está habilitada, esta calificación será excluída de cualquier agregación ejecutada por cualquier elemento o categoría de orden superior.</p>';
$string['expand'] = 'Expandir categoría';
$string['expandcriterion'] = 'Expandir criterio';
$string['export'] = 'Exportar';
$string['exportalloutcomes'] = 'Exportar todos los resultados';
$string['exportfeedback'] = 'Incluir retroalimentación en la exportación';
$string['exportfeedback_desc'] = 'Esto puede ser anulado durante la exportación.';
$string['exportformatoptions'] = 'Opciones de los formatos de exportación';
$string['exportonlyactive'] = 'Excluir usuarios suspendidos';
$string['exportonlyactive_help'] = 'Solo incluye en la exportación aquellos estudiantes cuya matrícula esté activa y no haya sido suspendida';
$string['exportplugins'] = 'Conectores de exportación';
$string['exportsettings'] = 'Ajustes de exportación';
$string['exportto'] = 'Exportar a';
$string['externalurl'] = 'URL externa';
$string['externalurl_desc'] = 'Si se utiliza un libro de calificaciones externo, la URL debería indicarse aquí.';
$string['extracreditvalue'] = 'Valor de crédito extra para {$a}';
$string['extracreditwarning'] = 'Nota: Si se adscribe un crédito extra a todos los ítems de una categoría, se eliminarán del cálculo de la calificación, por lo que no existirá una puntuación total';
$string['fail'] = 'Suspenso';
$string['feedback'] = 'Retroalimentación';
$string['feedback_help'] = '<p>Comentarios añadidos por el profesor a la calificación. Pueden ser extensos, personalizados o un simple código que se refiere a un sistema de retroalimentación interno.</p>';
$string['feedbackadd'] = 'Agregar retroalimentación';
$string['feedbackedit'] = 'Editar retroalimentación';
$string['feedbackfiles'] = 'Archivos de retroalimentación';
$string['feedbackforgradeitems'] = 'Retroalimentación para {$a}';
$string['feedbackhistoryfiles'] = 'Archivos de historia de retroalimentación';
$string['feedbacks'] = 'Comentarios de retroalimentación';
$string['feedbacksaved'] = 'Retroalimentación guardada';
$string['feedbackview'] = 'Ver retroalimentación';
$string['finalgrade'] = 'Calificación final';
$string['finalgrade_help'] = 'La calificación final después de que todos los cálculos han sido realizados.';
$string['fixedstudents'] = 'Columna de estudiantes fijada';
$string['fixedstudents_help'] = 'Fija la columna de estudiantes en el informe del calificador, permitiendo que las calificaciones se desplacen horizontalmente.';
$string['forceimport'] = 'Forzar importar';
$string['forceimport_help'] = 'Fuerza importación de calificaciones incluso si se actualizan las calificaciones después de exportar el archivo de importación';
$string['forceoff'] = 'Forzar: Desconectar';
$string['forceon'] = 'Forzar: Conectar';
$string['forelementtypes'] = 'para el {$a} seleccionado';
$string['forstudents'] = 'Para los estudiantes';
$string['full'] = 'Completo';
$string['fullmode'] = 'Cambiar a vista completa';
$string['generalsettings'] = 'Ajustes generales';
$string['grade'] = 'Calificación';
$string['grade_help'] = 'La calificación a otorgar al estudiante por su trabajo.';
$string['gradeadministration'] = 'Administración de calificaciones';
$string['gradealreadyupdated'] = '{$a} calificaciones no hay sido importadas porque las calificaciones en el archivo de importación son más antiguas que en el informe del calificador. Para proceder con la importación de todos modos, utilice la opción forzar importación.';
$string['gradeanalysis'] = 'Análsisis de calificaciones';
$string['gradebook'] = 'Libro de calificaciones';
$string['gradebookcalculationsfixbutton'] = 'Aceptar cambios en las calificaciones y reparar errores de cálculos';
$string['gradebookcalculationsuptodate'] = 'Los cálculos en el libro de calificaciones están actualizados. Es posible que necesite recargar la página para ver cambios.';
$string['gradebookcalculationswarning'] = 'Nota: Se han detectado algunos errores al calcular las calificaciones mostradas en este libro de calificaciones. Si su curso no ha comenzado o está en progreso, es recomendable que los errores sean corregidos haciendo clic en el botón inferior, aunque esto puede llevar a un cambio en las calificaciones.  Si su curso ya ha finalizado y las calificaciones han sido
Para más detalles, vea los cambios entre las versiones {$a->gradebookversion} y {$a->currentversion} en <a href="{$a->url}">Cambios en los cálculos del libro de calificaciones</a>.';
$string['gradebookhiddenerror'] = 'El libro de calificaciones está ajustado de modo que no se mostrará nada a los estudiantes.';
$string['gradebookhistories'] = 'Historias de calificación';
$string['gradebooksetup'] = 'Configuración Calificaciones';
$string['gradeboundary'] = 'Límite de la calificación con letra';
$string['gradeboundary_help'] = '<p>Un límite porcentual con el que a las calificaciones se les asignará una calificación con letra (si el tipo de visualización de calificación con Letra es utilizado). </p>';
$string['gradecategories'] = 'Categorías de calificación';
$string['gradecategory'] = 'Categoría de calificación';
$string['gradecategoryonmodform'] = 'Categoría de calificaciones';
$string['gradecategoryonmodform_help'] = 'Este parámetro controla la categoría en la que las calificaciones de esta actividad están ubicadas en el libro de calificaciones';
$string['gradecategorysettings'] = 'Ajustes de categoría de calificación';
$string['gradedisplay'] = 'Mostrar calificación';
$string['gradedisplaytype'] = 'Modo de mostrar calificación';
$string['gradedisplaytype_help'] = 'Esta configuración determina cómo se muestran las calificaciones en los informes del calificador y del usuario.

* Letra: las letras o palabras se utilizan para representar un rango de calificaciones, como se define en \'Letras\' en la configuración del libro de calificaciones
* Porcentaje: relativo a las calificaciones máximas y mínimas
* Real: calificaciones reales o valores de escala';
$string['gradedon'] = 'Calificados {$a}';
$string['gradeexport'] = 'Exportar calificaciones';
$string['gradeexportcolumntype'] = '{$a->name} ({$a->extra})';
$string['gradeexportcustomprofilefields'] = 'Campos de perfil personalizados en exportación de calificaciones';
$string['gradeexportcustomprofilefields_desc'] = 'Incluir estos campos personalizados de perfil en la exportación de calificaciones, separados por comas.';
$string['gradeexportdecimalpoints'] = 'Puntos decimales en la exportación de calificaciones.';
$string['gradeexportdecimalpoints_desc'] = 'El número de posiciones decimales que se mostrarán para la exportación. Esto se puede anular durante la exportación.';
$string['gradeexportdisplaytype'] = 'Forma de mostrar exportación de calificaciones';
$string['gradeexportdisplaytype_desc'] = 'Las calificaciones pueden mostrarse como calificaciones reales, como porcentajes (en relación a las calificaciones mínima y máxima) o como letras (A, B, C, &c.) durante la exportación. Puede pasarse por alto durante la exportación.';
$string['gradeexportdisplaytypes'] = 'Mostrar tipos de exportación de calificaciones';
$string['gradeexportuserprofilefields'] = 'Campos de perfil de usuario al exportar las calificaciones';
$string['gradeexportuserprofilefields_desc'] = 'Incluir estos campos de perfil de usuario en la exportación de calificaciones, separados por comas.';
$string['gradeforstudent'] = '{$a->student}<br />{$a->item}{$a->feedback}';
$string['gradegrademinmax'] = 'No recalcula calificaciones, aparece la calificación con el máximo y/o mínimo anterior hasta que esta se actualiza manualmente por el profesor';
$string['gradehelp'] = 'Ayuda sobre las calificaciones';
$string['gradehistorylifetime'] = 'Duración del historial de calificaciones';
$string['gradehistorylifetime_help'] = 'Esta opción especifica durante cuánto tiempo desea mantener el historial de cambios en las tablas de calificaciones relacionadas. Se recomienda mantenerlo todo el tiempo posible. Si experimenta problemas de funcionamiento o tiene un espacio limitado en la base de datos, pruebe con un valor más bajo.';
$string['gradeimport'] = 'Importar calificaciones';
$string['gradeimportfailed'] = 'Se ha producido un fallo en la importación de las calificaciones. Más detalles:';
$string['gradeitem'] = 'Ítem de calificación';
$string['gradeitemaddusers'] = 'Excluir de calificación';
$string['gradeitemadvanced'] = 'Opciones avanzadas de ítems de calificación';
$string['gradeitemadvanced_help'] = 'Seleccionar todos los ítems que se mostrarán al editar los ítems de calificación.';
$string['gradeitemislocked'] = 'Esta actividad está bloqueada en el libro de calificaciones. Los cambios realizados a las calificaciones en esta actividad no se copiarán al libro de calificaciones hasta que no se desbloquée.';
$string['gradeitemlocked'] = 'Calificación bloqueada';
$string['gradeitemmembersselected'] = 'Excluídos de calificación';
$string['gradeitemminmax'] = 'No recalcula las calificaciones pero aparece en relación al nuevo máximo y/o mínimo';
$string['gradeitemnonmembers'] = 'Incluídos en calificación';
$string['gradeitemremovemembers'] = 'Incluir en calificación';
$string['gradeitems'] = 'Ítems de calificación';
$string['gradeitemsettings'] = 'Ajustes de ítems de calificación';
$string['gradeitemsinc'] = 'Ítems de calificación a incluir';
$string['gradeletter'] = 'Letra de calificación';
$string['gradeletter_help'] = '<p>Una letra u otro símbolo utilizado para representar un rango de calificaciones.</p>';
$string['gradeletternote'] = 'Para eliminar una letra de calificación, simplemente vacíe cualquiera de las<br />tres áreas de texto de dicha letra y haga clic en guardar cambios.';
$string['gradeletteroverridden'] = 'Han sido modificados los valores por defecto para las calificaciones con letras.';
$string['gradeletters'] = 'Letras de calificación';
$string['gradelocked'] = 'La calificación está bloqueada';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = 'Calif. máxima';
$string['grademax_help'] = 'Este parámetro determina la calificación máxima cuando se usa \'Valor\' como \'Tipo de calificación\'. El valor máximo para cada actividad calificable se establece en la página de configuración de la actividad.';
$string['grademin'] = 'Calif. mínima';
$string['grademin_help'] = 'Este parámetro determina la calificación mínima cuando se usa \'Valor\' como \'Tipo de calificación\'. ';
$string['gradenotificationmessage'] = 'Tienes nuevos comentarios sobre tu trabajo para "{$a}"';
$string['gradenotificationsubject'] = 'Has sido calificado';
$string['gradeoutcomeitem'] = 'Ítem de resultado de calificación';
$string['gradeoutcomes'] = 'Resultados';
$string['gradeoutcomescourses'] = 'Resultados del curso';
$string['gradepass'] = 'Calificación para aprobar';
$string['gradepass_help'] = '<p>Si un ítem tiene una calificación que los usuarios deben igualar o superar para aprobar
   un ítem, puede fijarla en este campo.</p>';
$string['gradepassgreaterthangrade'] = 'La calificación para pasar no puede ser mayor que la calificación máxima posible {$a}';
$string['gradepointdefault'] = 'Calificación por defecto';
$string['gradepointdefault_help'] = 'Este ajuste determina el valor predeterminado para la puntuación máxima disponible en una unidad.';
$string['gradepointdefault_validateerror'] = 'Este valor debe ser un número entero entre el 1 y la puntuación máxima de calificación.';
$string['gradepointmax'] = 'Puntuación máxima de calificación';
$string['gradepointmax_help'] = 'Este valor determina la puntuación máxima de calificación en una actividad.';
$string['gradepointmax_validateerror'] = 'Este valor debe ser un número entero entre 1 y 10000.';
$string['gradepreferences'] = 'Preferencias de Calificación';
$string['gradepreferenceshelp'] = 'Ayuda sobre preferencias de calificación';
$string['gradepublishing'] = 'Habilitar publicación';
$string['gradepublishing_help'] = 'La publicación de calificaciones es una forma de importar y exportar calificaciones a través de una URL sin iniciar sesión en Moodle. Si está habilitado, los administradores y usuarios con permiso para publicar calificaciones (de forma predeterminada, los usuarios con el rol de administrador solamente) reciben la configuración de publicación de exportación de calificaciones en cada libro de calificaciones del curso.';
$string['gradepublishinglink'] = 'Descargar: {$a}';
$string['gradereport'] = 'Informe de calificaciones';
$string['graderreport'] = 'Informe del calificador';
$string['grades'] = 'Calificaciones';
$string['gradesforuser'] = 'Calificaciones de {$a->user}';
$string['gradesmoduledeletionpendingwarning'] = 'Advertencia: ¡Borrado de actividad en curso! Algunas calificaciones están a punto de ser eliminadas.';
$string['gradesmoduledeletionprefix'] = '[Borrado en progreso]';
$string['gradesonly'] = 'Cambiar a sólo calificaciones';
$string['gradessettings'] = 'Ajustes';
$string['gradetype'] = 'Tipo de calificación';
$string['gradetype_help'] = '<p>Especifica el tipo de calificación usado: <b>Ninguno</b> (no se permite calificar),
   <b>Valor</b> (habilita los ajustes de calificación máximo y mínimo), <b>Escala</b>
   (habilita los ajustes de escala) o <b>Texto</b> (comentarios solamente). Solamente
   los tipos de calificación de <em>valor</em> y <em>escala</em> pueden ser agregados.
   El tipo de calificación para un ítem de calificación basado en una actividad es
   establecido en la página de actualización de la actividad.</p>';
$string['gradevaluetoobig'] = 'Uno de los valores de calificación es mayor que la calificación máxima permitida de {$a}';
$string['gradeview'] = 'Ver calificación';
$string['gradewasmodifiedduringediting'] = 'La calificación puesta por {$a->itemname} para {$a->username} ha sido ignorada ya que alguien la actualizó recientemente.';
$string['gradeweighthelp'] = 'Ayuda sobre ponderación de calificaciones';
$string['gradingmodulename'] = 'Calificación ({$a})';
$string['groupavg'] = 'Promedio del grupo';
$string['hidden'] = 'Ocultar';
$string['hidden_help'] = 'Si se marca esta opción, las calificaciones se ocultarán a los estudiantes. Se pueden ocultar si se desea hasta en día en que se hagan públicas las calificaciones una vez completado el proceso.';
$string['hiddenasdate'] = 'Mostrar fecha de envío para calificaciones ocultas';
$string['hiddenasdate_help'] = 'Si el usuario no puede ver las calificaciones ocultas, muestre la fecha de envío en lugar de \'-\'.';
$string['hiddenuntil'] = 'Ocultar hasta';
$string['hiddenuntildate'] = 'Ocultas hasta: {$a}';
$string['hideadvanced'] = 'Ocultar características avanzadas';
$string['hideaverages'] = 'Ocultar promedios';
$string['hidecalculations'] = 'Ocultar cálculos';
$string['hidecategory'] = 'Ocultos';
$string['hideeyecons'] = 'Ocultar iconos \'mostrar/ocultar\'';
$string['hidefeedback'] = 'Ocultar retroalimentación';
$string['hideforcedsettings'] = 'Ocultar ajustes forzados';
$string['hideforcedsettings_help'] = 'No mostrar ajustes forzados al calificar UI.';
$string['hidegroups'] = 'Ocultar grupos';
$string['hidelocks'] = 'Ocultar bloqueos';
$string['hidenooutcomes'] = 'Mostrar resultados';
$string['hidequickfeedback'] = 'Ocultar Retroalimentación Rápida';
$string['hideranges'] = 'Ocultar rangos';
$string['hidetotalifhiddenitems'] = '¿Ocultar totales si contienen ítems ocultos?';
$string['hidetotalifhiddenitems_help'] = 'Este ajuste especifica si los totales que contienen ítems de calificación oculta se muestran a los estudiantes, o bien si se reemplazan con un guión (-). Si se muestran, el total puede calcularse excluyendo o incluyendo dichos ítems.

Si se excluyen los ítems ocultos, el total será diferente al que el profesor ve en el informe del calificador, puesto que el profesor siempre ve los totales calculados con todos los ítems, ocultos o visibles. Si se incluyen los ítems ocultos, los estudiatnes podrán calcular estos ítems.';
$string['hidetotalshowexhiddenitems'] = 'Mostrar totales excluyendo ítems ocultos';
$string['hidetotalshowinchiddenitems'] = 'Mostrar totales incluyendo ítems ocultos';
$string['hideverbose'] = 'Ocultar {$a->category} {$a->itemmodule} {$a->itemname}';
$string['highgradeascending'] = 'Ordenar por calificación ascendente';
$string['highgradedescending'] = 'Ordenar por calificación descendente';
$string['highgradeletter'] = 'Altas';
$string['identifier'] = 'Identificar al usuario por';
$string['idnumbers'] = 'Números ID';
$string['ignore'] = 'Ignorar';
$string['import'] = 'Importar';
$string['importcsv'] = 'Importar CSV';
$string['importcsv_help'] = 'Es posible importar calificaciones desde un archivo CSV con el siguiente formato:

* Cada línea del archivo contiene un registro
* Cada registro es una serie de datos separados por comas o un separador alternativo
* El primer registro contiene una lista de nombres de campo definiendo el formato del resto del archivo
* Es necesario que uno de los campos identifique al usuario - nombre de usuario o número de ID o dirección de correo

Se puede obtener un archivo con el formato correcto exportando previamente alguna calificación. El archivo puede ser editado y guardado como CSV.';
$string['importcustom'] = 'Importar como resultados personalizados (sólo este curso)';
$string['importdata'] = 'Datos';
$string['importdata_help'] = 'Las calificaciones se pueden pegar directamente desde una hoja de cálculo de OpenDocument o Excel con el siguiente formato:

* Al menos una columna debe contener datos de identidad del usuario: nombre de usuario, dirección de correo electrónico o número de identificación (ID).
* Otras columnas deben tener encabezados como para actividades existentes o elementos de calificación.

Se puede obtener una hoja de cálculo con el formato correcto exportando primero algunas calificaciones. La hoja de cálculo se puede editar para añadir más calificaciones y guardar.

Seleccione y copie las columnas que desea importar de la hoja de cálculo y luego péguelas en este campo.';
$string['importerror'] = 'Ha ocurrido un error: este script no se ha invocado con los parámetros correctos.';
$string['importfailed'] = 'Importación fallida. No se han importado datos.';
$string['importfeedback'] = 'Importar retroalimentación';
$string['importfile'] = 'Importar archivo';
$string['importfilemissing'] = 'No se ha recibido ningún archivo. Regrese al formulario y asegúrese de que sube un archivo válido.';
$string['importfrom'] = 'Importar de';
$string['importoutcomenofile'] = 'El archivo subido está vacío o corrupto. Por favor, verifique que es un archivo válido. El problema se detectó en la línea {$a}; esto sucede cuando las líneas de datos no tienen tantas columnas como la primera línea (cabecera) o cuando el archivo importado carece de las cabeceras esperadas. Examine el archivo exportado para ver un ejemplo de archivo con cabecera válida.';
$string['importoutcomes'] = 'Importar resultados';
$string['importoutcomes_help'] = 'Los resultados pueden importarse en un archivo csv, al igual que exportarse (archivo csv).';
$string['importoutcomesuccess'] = 'Resultado importado "{$a->name}" con ID #{$a->id}';
$string['importplugins'] = 'Conectores de importación';
$string['importpreview'] = 'Vista previa de la importación';
$string['importsettings'] = 'Importar ajustes';
$string['importskippednomanagescale'] = 'No tiene permiso para agregar una nueva escala. El resultado "{$a}" se ha pasado por alto puesto que requiere crear una nueva escala';
$string['importskippedoutcome'] = 'Ya existe un resultado con el nombre corto "{$a}" en este contexto; el archivo importado ha sido pasado por alto.';
$string['importstandard'] = 'Importar como resultados estándar';
$string['importsuccess'] = 'Importación de calificaciones exitosa';
$string['importxml'] = 'Importar XML';
$string['includescalesinaggregation'] = 'Incluir escalas en la agregación';
$string['includescalesinaggregation_help'] = 'Puede incluir las escalas como números en todas las calificaciones agregadas de todos los libros de calificaciones en cada curso. PRECAUCIÓN: si modifica este ajuste todas las calificaciones serán recalculadas.';
$string['incorrectcourseid'] = 'La ID del curso es incorrecta';
$string['incorrectcustomscale'] = '(Escala personalizada incorrecta: cámbiela, por favor)';
$string['incorrectminmax'] = 'El mínimo debe ser menor que el máximo';
$string['inherit'] = 'Heredar';
$string['intersectioninfo'] = 'Info Estudiante/Calificación';
$string['invalidgradeexporteddate'] = 'La fecha de exportación es inválida porque se refiere a un año atrás, o en el futuro, o porque el formato es inválido.';
$string['item'] = 'Ítem';
$string['iteminfo'] = 'Info ítem';
$string['iteminfo_help'] = '<p>Espacio para introducir información sobre el ítem. El texto introducido no aparece en ningún otro lugar.</p>';
$string['itemname'] = 'Nombre del ítem';
$string['itemnamehelp'] = 'Nombre de este ítem, suministrado por el módulo.';
$string['items'] = 'Ítems';
$string['itemsedit'] = 'Editar ítem de calificación';
$string['keephigh'] = 'Mantener las más altas';
$string['keephigh_help'] = 'Si se activa la opción, solo se  conservarán las X calificaciones más altas, siendo X el valor seleccionado en esta copació.';
$string['keephighestvalues'] = 'Mantener los {$a} valores más altos';
$string['keymanager'] = 'Gestor de claves';
$string['lessthanmin'] = 'La calificación otorgada en {$a->itemname} a {$a->username} es menor que el mínimo permitido';
$string['letter'] = 'Letra';
$string['lettergrade'] = 'Calificación por letra';
$string['lettergradenonnumber'] = 'Calificaciones bajas y/o altas no numéricas para';
$string['letterpercentage'] = 'Letra (porcentaje)';
$string['letterreal'] = 'Letra (real)';
$string['letters'] = 'Letras';
$string['linkedactivity'] = 'Actividad vinculada';
$string['linkedactivity_help'] = '<p>Especifica una actividad opcional en la que este ítem de resultado esta vinculada.
   Esto se utiliza para medir el rendimiento del estudiante en criterios no medidos por
   la calificación de la actividad.</p>';
$string['linktoactivity'] = 'Vincular a la actividad {$a->name} {$a->title}';
$string['lock'] = 'Bloquear';
$string['locked'] = 'Bloquear';
$string['locked_help'] = 'Si se señala esta opción, las calificaciones ya no podrán ser actualizadas automáticamente por la actividad relacionada.';
$string['locktime'] = 'Bloquear desde';
$string['locktimedate'] = 'Bloqueada desde: {$a}';
$string['lockverbose'] = 'Bloquear {$a->category} {$a->itemmodule} {$a->itemname}';
$string['lowest'] = 'Más baja';
$string['lowgradeletter'] = 'Baja';
$string['manualitem'] = 'Ítem manual';
$string['mapfrom'] = 'Mapa desde';
$string['mapfrom_help'] = 'Seleccione la columna en la hoja de cálculo que contenga la información que identifique al participante, como el nombre, identificación de usuario (ID) o dirección electrónica.';
$string['mappings'] = 'Mapeos de ítems de calificación';
$string['mappings_help'] = 'En cada columna de notas en la hoja de cálculo, seleccione la unidad a la que importar la calificación.';
$string['mapto'] = 'Mapa a';
$string['mapto_help'] = 'Seleccione los mismos datos de identificación que los seleccionados para \'Mapa de\'.';
$string['max'] = 'Más alta';
$string['maxgrade'] = 'Calificación máxima';
$string['meanall'] = 'Todas las calificaciones';
$string['meangraded'] = 'Calificaciones no vacías';
$string['meanselection'] = 'Calificaciones seleccionadas para promedios de columna';
$string['meanselection_help'] = 'Seleccione qué tipo de calificaciones se incluirán en los promedios de columna. Las celdas sin calificación se pasarán por alto, o serán calificadas con 0 (ajuste por defecto).';
$string['median'] = 'Mediana';
$string['min'] = 'Más baja';
$string['minimum_show'] = 'Mostrar la calificación mínima';
$string['minimum_show_help'] = 'Calificación mínima se utiliza en el cálculo de las calificaciones y pesos. Si no se muestra su calificación mínima por defecto será cero y no podrá ser editada.';
$string['minmaxtouse'] = 'Cálculo al cambiar el mínimo y/o el máximo de una calificación';
$string['minmaxtouse_desc'] = 'Esta opción se aplica para controlar el comportamiento de las calificaciones de un elemento calificable cuando cambiamos su valor mínimo y/o máximo. Poniendo un ejemplo: <br />
Creamos una tarea con una calificación máxima de 10. La alumna Carla, recibe una puntuación de 5 sobre 10 (50%).  La calificación máxima de la tarea es cambiada a 20.<br />
- Si tenemos marcado "No recalcula las calificaciones pero aparece en relación al nuevo máximo y/o mínimo", Carla tendrá una puntuación de 5 sobre 20 (25%).<br />
- Si tenemos marcado "No recalcula calificaciones, aparece la calificación con el máximo y/o mínimo anterior hasta que esta se actualiza manualmente por el profesor", Carla tendrá una puntuación de 5 sobre 10 (50%) hasta que el profesor recalifique manualmente a Carla sobre 20.<br/><br/>
Se recomienda que esta configuración NO se modifique en horas punta de uso,  ya que se volverán a calcular todos las calificaciones, lo que puede dar lugar carga elevada del servidor.';
$string['minmaxtouse_help'] = 'Esta opción se aplica para controlar el comportamiento de las calificaciones de un elemento calificable cuando cambiamos su valor mínimo y/o máximo. Poniendo un ejemplo: <br />
Creamos una tarea con una calificación máxima de 10. La alumna Carla, recibe una puntuación de 5 sobre 10 (50%).  La calificación máxima de la tarea es cambiada a 20.<br />
- Si tenemos marcado "No recalcula las calificaciones pero aparece en relación al nuevo máximo y/o mínimo", Carla tendrá una puntuación de 5 sobre 20 (25%).<br />
- Si tenemos marcado "No recalcula calificaciones, aparece la calificación con el máximo y/o mínimo anterior hasta que esta se actualiza manualmente por el profesor", Carla tendrá una puntuación de 5 sobre 10 (50%) hasta que el profesor recalifique manualmente a Carla sobre 20.';
$string['minmaxupgradedgrades'] = 'Nota: Algunas calificaciones han sido modificadas para solventar alguna inconsistencia en el libro de calificaciones causada por un cambio en las notas mínimas y  máximas usadas al calcular la calificación mostrada. Se recomienda que se comprueben y verifiquen estos cambios.';
$string['minmaxupgradefixbutton'] = 'Resolver incoherencias';
$string['minmaxupgradewarning'] = 'Nota: Se ha detectado una inconsistencia con algunas calificaciones debido a un cambio en las notas mínimas y máximas usadas al calcular la calificación mostrada en el libro de calificaciones. Se recomienda resolver esta inconsistencia haciendo clic en el botón inferior, aunque esto implicará un cambio en algunas calificaciones.';
$string['missingitemtypeoreid'] = 'Falta la clave de matriz (itemtype o eid) del segundo parámetro de grade_edit_tree_column_select::get_item_cell ($item, $params)';
$string['missingscale'] = 'La escala debe estar seleccionada';
$string['mode'] = 'Moda';
$string['modgrade'] = 'Calificación';
$string['modgrade_help'] = 'Seleccione el tipo de calificación utilizada para esta actividad. Si se elige \'escala\', puede elegir la escala en el menú desplegable. Si usa la calificación de puntos, puede ingresar la calificación máxima disponible para esta actividad.';
$string['modgradecantchangegradetype'] = 'No puedes cambiar el tipo, ya que hay calificaciones para este elemento.';
$string['modgradecantchangegradetypemsg'] = 'Algunas calificaciones ya se han asignado, por lo que el tipo de calificación no se puede cambiar. Si desea cambiar la calificación máxima, primero debe elegir si desea o no recalcular el valor de las calificaciones existentes.';
$string['modgradecantchangegradetyporscalemsg'] = 'Algunas calificaciones han sido asignadas, de modo que el tipo y la escala no pueden ser cambiados.';
$string['modgradecantchangeratingmaxgrade'] = 'No se puede modificar la máxima calificación cuando ya se ha calificado una actividad que utiliza valoraciones.';
$string['modgradecantchangescale'] = 'No puedes cambiar la escala, ya que hay calificaciones existentes para este elemento.';
$string['modgradecategorycantchangegradetypemsg'] = 'Esta categoría tiene asociados items de calificación que han sido sobreescritos. Por lo tanto algunas calificaciones ya han sido asignadas, por lo que el tipo de calificación no puede ser variado. Si desea cambiar el valor máximo de la calificación, primero debe elegir entre recalcular o no las calificaciones existentes.';
$string['modgradecategorycantchangegradetyporscalemsg'] = 'Esta categoría tiene elementos de calificación asociados que se han anulado. Por lo tanto, ya se han otorgado algunas calificaciones, por lo que el tipo de calificación y la escala no se pueden cambiar.';
$string['modgradecategoryrescalegrades'] = 'Cambiar la escala de calificaciones anuladas';
$string['modgradecategoryrescalegrades_help'] = 'Al cambiar las calificaciones máximas en un elemento del libro de calificaciones, debe especificar si esto hará que las calificaciones porcentuales existentes también cambien.

Si se establece en \'Sí\', las calificaciones anuladas existentes se reescalarán para que la calificación porcentual siga siendo la misma.

Por ejemplo, si esta opción se establece en \'Sí\', cambiar la calificación máxima en un elemento de 10 a 20 provocaría que una calificación de 6/10 (60%) se vuelva a escalar a 12/20 (60%). Con esta opción establecida en \'No\', la calificación permanecerá sin cambios, requiriendo un ajuste manual de los elementos de calificación para asegurar puntajes correctos.';
$string['modgradedonotmodify'] = 'No modificar calificaciones existentes.';
$string['modgradeerrorbadpoint'] = 'Valor de calificación no válido. Debe ser un número entero entre 1 y {$a}';
$string['modgradeerrorbadscale'] = 'Escala no válida. Por favor, asegúrese de seleccionar una escala de las incluidas abajo.';
$string['modgrademaxgrade'] = 'Calificación máxima';
$string['modgraderescalegrades'] = 'Recalcular calificaciones';
$string['modgraderescalegrades_help'] = 'Al cambiar las calificaciones máximas en un elemento del libro de calificaciones, debe especificar si esto hará que las calificaciones porcentuales existentes también cambien.

Si se establece en \'Sí\', las calificaciones existentes se volverán a escalar para que la calificación porcentual siga siendo la misma.

Por ejemplo, si esta opción se establece en \'Sí\', cambiar la calificación máxima en un elemento de 10 a 20 provocaría que una calificación de 6/10 (60%) se vuelva a escalar a 12/20 (60%). Con esta opción configurada en \'No\', la calificación cambiaría de 6/10 (60%) a 6/20 (30%), lo que requiere un ajuste manual de los elementos de calificación para asegurar puntajes correctos.';
$string['modgradetype'] = 'Tipo';
$string['modgradetypenone'] = 'Ninguna';
$string['modgradetypepoint'] = 'Puntuación';
$string['modgradetypescale'] = 'Escala';
$string['morethanmax'] = 'La calificación otorgada en {$a->itemname} a {$a->username} es mayor que el máximo permitido';
$string['moveselectedto'] = 'Mover los ítems seleccionados a';
$string['movingelement'] = 'Moviendo {$a}';
$string['multfactor'] = 'Multiplicador';
$string['multfactor_help'] = '<p>Es el factor por el que se multiplicarán todas las calificaciones de este elemento de calificación, con un valor máximo para la calificación del establecido como máximo. Por ejemplo, si el multiplicador es 2 y la calificación máxima es de 100,  todos los grados menores de 50 se multiplican por dos, y todos los grados 50 y superiores se establecerán en 100.</p>';
$string['multfactorvalue'] = 'Valor multiplicador para {$a}';
$string['mustchooserescaleyesorno'] = 'Debe elegir entre recalcular o no las calificaciones existentes.';
$string['mygrades'] = 'Enlace a menú de calificaciones del usuario';
$string['mygrades_desc'] = 'Esta opción permite enlazar a un libro de calificaciones externo desde el menú del usuario.';
$string['mypreferences'] = 'Mis preferencias';
$string['myreportpreferences'] = 'Mis preferencias de informe';
$string['navmethod'] = 'Método de navegación';
$string['neverdeletehistory'] = 'Nunca eliminar historial';
$string['newcategory'] = 'Categoría nueva';
$string['newitem'] = 'Nuevo ítem de calificación';
$string['newoutcomeitem'] = 'Nuevo ítem de resultado';
$string['no'] = 'No';
$string['nocategories'] = 'No se han añadido o no se han encontrado las categorías de calificación para este curso';
$string['nocategoryname'] = 'No se ha dado nombre de categoría';
$string['nocategoryview'] = 'No categoría para ver por';
$string['nocourses'] = 'Aún no hay cursos';
$string['noforce'] = 'No forzar';
$string['nogradeletters'] = 'No se han ajustado las letras de calificación';
$string['nogradesreturned'] = 'No se han devuelto calificaciones';
$string['noidnumber'] = 'No número ID';
$string['nolettergrade'] = 'No calificación por letra para';
$string['nomode'] = 'NA';
$string['nonnumericweight'] = 'Recibido valor no numérico para';
$string['nonunlockableverbose'] = 'Esta calificación no puede desbloquearse hasta que {$a->itemname} sea desbloqueado.';
$string['nonweightedpct'] = '% no ponderado';
$string['nooutcome'] = 'No resultado';
$string['nooutcomes'] = 'Los ítems de resultados deben estar vinculados a un resultado de curso, pero no existen resultados para este curso. ¿Desea agregar uno?';
$string['nopermissiontoresetweights'] = 'No tiene permisos para resetear los pesos';
$string['nopublish'] = 'No publicar';
$string['noreports'] = 'No está matriculado o impartiendo ningún curso en esta página.';
$string['norolesdefined'] = 'No hay roles definidos en Administración > Calificaciones > Ajustes generales > Roles calificados';
$string['noscales'] = 'Los resultados deben estar vinculados a una escala (de curso o global), pero no existe ninguna. ¿Desea agregar una?';
$string['noselectedcategories'] = 'no se han seleccionado categorías';
$string['noselecteditems'] = 'no se han seleccionado ítems.';
$string['notenrolled'] = 'Usted no está matriculado actualmente en ningún curso.';
$string['notteachererror'] = 'Sólo los profesores pueden usar esta opción.';
$string['nousersloaded'] = 'No se han subido usuarios';
$string['nouserstograde'] = 'Sin usuarios para calificar';
$string['numberofgrades'] = 'Número de calificaciones';
$string['onascaleof'] = 'en una escala de {$a->grademin} a {$a->grademax}';
$string['operations'] = 'Operaciones';
$string['options'] = 'Opciones';
$string['others'] = 'Otros';
$string['outcome'] = 'Resultado';
$string['outcome_help'] = 'Resultado que representa este ítem de calificación.';
$string['outcomeassigntocourse'] = 'Asignar otro resultado a este curso';
$string['outcomecategory'] = 'Crear resultados en categoría';
$string['outcomecategorynew'] = 'Nueva categoría';
$string['outcomeconfirmdelete'] = '¿Está seguro de que desea eliminar el resultado "{$a}"?';
$string['outcomecreate'] = 'Agregar nuevo resultado';
$string['outcomedelete'] = 'Eliminar Resultado';
$string['outcomefullname'] = 'Nombre completo';
$string['outcomeitem'] = 'Ítem de resultado';
$string['outcomeitemsedit'] = 'Editar ítem de resultado';
$string['outcomereport'] = 'Informe del resultado';
$string['outcomes'] = 'Resultados';
$string['outcomescourse'] = 'Resultados usados en el curso';
$string['outcomescoursecustom'] = 'Uso personal (no quitar)';
$string['outcomescoursenotused'] = 'Estándar no usado';
$string['outcomescourseused'] = 'Usado estándar (no quitar)';
$string['outcomescustom'] = 'Resultados personalizados';
$string['outcomeshortname'] = 'Nombre corto';
$string['outcomesstandard'] = 'Resultados estándar';
$string['outcomesstandardavailable'] = 'Resultados estándar disponibles';
$string['outcomestandard'] = 'Resultado disponible';
$string['outcomestandard_help'] = '<p>Un resultado estándar esta disponible globalmente en el sitio, para todos los cursos.</p>';
$string['overallaverage'] = 'Promedio general';
$string['overridden'] = 'Anuladas';
$string['overridden_help'] = 'Si se activa, la calificación no podrá ser cambiada dentro de la actividad relacionada.

Cuando se edita una calificación dentro del informe del calificador, la casilla de anulación se activa automáticamente. Sin embargo, se puede desactivar para permitir que la calificación se pueda cambiar por medio de la actividad relacionada.';
$string['overriddennotice'] = 'La calificación final de esta actividad ha sido ajustada manualmente.';
$string['overridecat'] = 'Permitir que la categoría de calificaciones sea anulada manualmente';
$string['overridecat_help'] = 'Deshabilitar esta opción hace que sea imposible para los usuarios modificar la categoría de calificaciones.';
$string['overridesitedefaultgradedisplaytype'] = 'Pasar por alto los valores por defecto del sitio';
$string['overridesitedefaultgradedisplaytype_help'] = '<p>Marque esta casilla de verificación para habilitar la anulación de los valores
   por defecto del sitio al visualizar las calificaciones en el libro de calificaciones.
   Esto activa elementos en la forma que le permiten a usted definir las calificaciones
   en letra y los límites de su elección.</p>';
$string['overrideweightofa'] = 'Sobrescribir los pesos de {$a}';
$string['parentcategory'] = 'Categoría padre';
$string['pass'] = 'Aprobado';
$string['pctoftotalgrade'] = '% de la calificación total';
$string['percent'] = 'Porcentaje';
$string['percentage'] = 'Porcentaje';
$string['percentageletter'] = 'Porcentaje (letra)';
$string['percentagereal'] = 'Porcentaje (real)';
$string['percentascending'] = 'Clasificar por porcentaje ascendente';
$string['percentdescending'] = 'Ordenar por porcentaje descendente';
$string['percentshort'] = '%';
$string['plusfactor'] = 'Compensar';
$string['plusfactor_help'] = '<p>Es el valor que se sumará a cada calificación de este elemento de calificación, después de haber aplicado el multiplicador.</p>';
$string['plusfactorvalue'] = 'Valor de compensación para {$a}';
$string['points'] = 'puntos';
$string['pointsascending'] = 'Clasificar por puntos ascendente';
$string['pointsdescending'] = 'Clasificar por puntos descendente';
$string['positionfirst'] = 'Primero';
$string['positionlast'] = 'Último';
$string['preferences'] = 'Preferencias';
$string['prefgeneral'] = 'General';
$string['prefletters'] = 'Letras de calificación y límites';
$string['prefrows'] = 'Filas especiales';
$string['prefshow'] = 'Mostrar/ocultar conmutadores';
$string['previewrows'] = 'Previsualizar filas';
$string['privacy:metadata:categorieshistory'] = 'Un registro de versiones anteriores de categorías de calificación';
$string['privacy:metadata:filepurpose'] = 'Archivos de retroalimentación almacenados en el Libro de calificaciones para un usuario.';
$string['privacy:metadata:grade_import_newitem'] = 'Tabla temporal para almacenar nuevos nombres de grade_items desde importación de calificación';
$string['privacy:metadata:grade_import_newitem:importcode'] = 'Un código de lote único para identificar un lote de importaciones';
$string['privacy:metadata:grade_import_newitem:importer'] = 'Usuario que ingresa los datos';
$string['privacy:metadata:grade_import_newitem:itemname'] = 'Nuevo nombre de ítem de calificación';
$string['privacy:metadata:grade_import_values'] = 'Tabla temporal para importar calificaciones';
$string['privacy:metadata:grade_import_values:feedback'] = 'Retroalimentación de calificación';
$string['privacy:metadata:grade_import_values:finalgrade'] = 'Valor de calificación cruda';
$string['privacy:metadata:grade_import_values:importcode'] = 'Un código de lote único para identificar un lote de importaciones';
$string['privacy:metadata:grade_import_values:importer'] = 'Usuario que importa los datos';
$string['privacy:metadata:grade_import_values:importonlyfeedback'] = 'Señalización si es que solamente fue importada la retroalimentación';
$string['privacy:metadata:grade_import_values:userid'] = 'Usuario cuya calificación fue importada';
$string['privacy:metadata:grades'] = 'Un registro de calificaciones';
$string['privacy:metadata:grades:aggregationstatus'] = 'El estado de agregación';
$string['privacy:metadata:grades:aggregationweight'] = 'La ponderación en agregación';
$string['privacy:metadata:grades:feedback'] = 'La retroalimentación';
$string['privacy:metadata:grades:finalgrade'] = 'La calificación';
$string['privacy:metadata:grades:information'] = 'Información adicional acerca de la calificación';
$string['privacy:metadata:grades:timemodified'] = 'El momento cuando la calificación fue modificada por última vez';
$string['privacy:metadata:grades:userid'] = 'La ID del usuario de quien es la calificación';
$string['privacy:metadata:grades:usermodified'] = 'La ID del usuario que modificó el registro por última vez';
$string['privacy:metadata:gradeshistory'] = 'Un registro de las calificaciones anteriores';
$string['privacy:metadata:history:loggeduser'] = 'La ID del usuario que estaba ingresado al sitio cuando ocurrió el versionado';
$string['privacy:metadata:history:timemodified'] = 'El momento cuando ocurrió el versionado de calificación';
$string['privacy:metadata:itemshistory'] = 'Un registro de versiones anteriores de ítems de calificación';
$string['privacy:metadata:outcomes'] = 'Un registro de resultados';
$string['privacy:metadata:outcomes:timemodified'] = 'El momento cuando el registro fue modificado';
$string['privacy:metadata:outcomes:usermodified'] = 'El usuario que modificó por última vez el registro';
$string['privacy:metadata:outcomeshistory'] = 'Un registro de versiones anteriores de resultados';
$string['privacy:metadata:scale'] = 'Un registro de escalas';
$string['privacy:metadata:scale:timemodified'] = 'El momento cuando el registro fue modificado por última vez';
$string['privacy:metadata:scale:userid'] = 'El usuario que modificó por última vez el registro';
$string['privacy:metadata:scalehistory'] = 'Un registro de versiones anteriores de escalas';
$string['privacy:path:relatedtome'] = 'Relacionado conmigo';
$string['privacy:request:historyactiondelete'] = 'Eliminar';
$string['privacy:request:historyactioninsert'] = 'Insertar';
$string['privacy:request:historyactionupdate'] = 'Actualizar';
$string['privacy:request:unknowndeletedgradeitem'] = 'Desconocido (el ítem de calificación fue eliminado)';
$string['profilereport'] = 'Informe de perfil de usuario';
$string['profilereport_help'] = 'Informe de calificaciones usado en la página del perfil del usuario.';
$string['publishing'] = 'Publicando';
$string['publishingoptions'] = 'Opciones de publicación de calificaciones';
$string['quickfeedback'] = 'Retroalimentación rápida';
$string['quickgrading'] = 'Calificación rápida';
$string['quickgrading_help'] = 'Si se habilita, cuando se activa la edición, aparece una caja para introducir texto para cada calificación, lo que permite editar varias calificaciones al mismo tiempo. Los cambios son guardados y resaltados cuando se hace clic en el botón para actualizar.

Observe que cuando edita una calificación dentro del informe del calificador, se activa un indicador de sobreescritura que indica que esta calificación ya no podrá ser cambiada desde la actividad misma.';
$string['range'] = 'Rango';
$string['rangedecimals'] = 'Rango de puntos decimales';
$string['rangedecimals_help'] = 'El número de posiciones decimales que se mostrarán para el rango.';
$string['rangesdecimalpoints'] = 'Decimales en los rangos';
$string['rangesdecimalpoints_help'] = 'Esta configuración determina la cantidad de lugares decimales que se mostrarán para cada rango o si se usa (hereda) la configuración general de lugares decimales para la categoría o elemento de calificación.';
$string['rangesdisplaytype'] = 'Tipo de visualización del rango';
$string['rangesdisplaytype_help'] = '<p>Especifica como visualizar los rangos. Sí Heredar es seleccionada,
   el tipo de visualización para cada columna es usado.</p>';
$string['rank'] = 'Ranking';
$string['rawpct'] = '% bruto';
$string['real'] = 'Real';
$string['realletter'] = 'Real (letra)';
$string['realpercentage'] = 'Real (porcentaje)';
$string['recalculatinggrades'] = 'Recalculando calificaciones';
$string['recovergradesdefault'] = 'Recuperar las calificaciones por defecto';
$string['recovergradesdefault_help'] = 'Por defecto recuperar las calificaciones antiguas cuando se matricula de nuevo a un usuario en un curso.';
$string['refreshpreview'] = 'Actualizar previsualización';
$string['regradeanyway'] = 'Recalificar de todos modos';
$string['removeallcoursegrades'] = 'Eliminar todas las calificaciones';
$string['removeallcoursegrades_help'] = 'Al seleccionarse, todas las unidades que fueron manualmente añadidas al libro de calificaciones serán eliminadas junto con las calificaciones e información de notas bloqueadas, excluidas, ocultas y manualmente anuladas. Solo quedarán las unidades asociadas con actividades.';
$string['removeallcourseitems'] = 'Eliminar todos los ítems y categorías';
$string['removeallcourseitems_help'] = 'Al seleccionarse, todas las categorías y unidades que fueron manualmente añadidas al libro de calificaciones serán eliminadas junto con las calificaciones e información de notas bloqueadas, excluidas, ocultas y manualmente anuladas. Solo quedarán las unidades asociadas con actividades.';
$string['report'] = 'Informe';
$string['reportdefault'] = 'Valor por defecto del informe ({$a})';
$string['reportplugins'] = 'Conectores de informe';
$string['reportsettings'] = 'Ajustes de informe';
$string['reprintheaders'] = 'Reimprimir cabeceras';
$string['resetweights'] = 'Resetear pesos de {$a->itemname}';
$string['resetweightsshort'] = 'Resetear pesos';
$string['respectingcurrentdata'] = 'la configuración actual queda sin modificar';
$string['rowpreviewnum'] = 'Previsualizar filas';
$string['rowpreviewnum_help'] = 'La información a importar puede ser vista antes de confirmar la importación. Esta configuración determina cuántas filas se muestran en la vista previa.';
$string['savechanges'] = 'Guardar cambios';
$string['savepreferences'] = 'Guardar preferencias';
$string['scaleconfirmdelete'] = '¿Está seguro de que desea eliminar la escala "{$a}"?';
$string['scaledpct'] = 'Escalado %';
$string['seeallcoursegrades'] = 'Ver todas las calificaciones del curso';
$string['select'] = 'Seleccionar {$a}';
$string['selectalloroneuser'] = 'Seleccionar todos o un usuario';
$string['selectauser'] = 'Seleccionar un usuario';
$string['selectdestination'] = 'Seleccionar destino de {$a}';
$string['separator'] = 'Separador';
$string['separator_help'] = 'Seleccionar el separador usado en e archivo CSV. (Normalmente es una coma).';
$string['sepcolon'] = 'Dos puntos';
$string['sepcomma'] = 'Coma';
$string['sepsemicolon'] = 'Punto y coma';
$string['septab'] = 'Tabulador';
$string['setcategories'] = 'Ajusstar categorías';
$string['setcategorieserror'] = 'Debe ajustar las categorías del curso antes de poder asignarles ponderaciones.';
$string['setgradeletters'] = 'Ajustar letras de calificación';
$string['setpreferences'] = 'Ajustar preferencias';
$string['setting'] = 'Ajuste';
$string['settings'] = 'Ajustes';
$string['setweights'] = 'Ajustar pesos';
$string['showactivityicons'] = 'Mostrar iconos de actividad';
$string['showactivityicons_help'] = '<p>Permite mostrar iconos de actividad junto a los nombres de la actividad.</p>';
$string['showallhidden'] = 'Mostrar ocultos';
$string['showallstudents'] = 'Mostrar a todos los estudiantes';
$string['showanalysisicon'] = 'Mostrar icono de análisis de calificaciones';
$string['showanalysisicon_desc'] = 'Si se muestra por omisión el icono de análisis de calificaciones. Si el módulo lo permite, el icono de análisis de calificaciones enlazara a una página con una explicación más detallada de la calificación y la forma en la que se obtuvo.';
$string['showanalysisicon_help'] = 'Si se muestra por omisión el icono de análisis de calificaciones. Si el módulo lo permite, el icono de análisis de calificaciones enlazara a una página con una explicación más detallada de la calificación y la forma en la que se obtuvo.';
$string['showaverage'] = 'Mostrar promedio';
$string['showaverage_help'] = 'Si mostrar una columna promedio. Tenga en cuenta que los participantes pueden estimar las calificaciones de otros si el promedio se calcula a partir de una pequeña cantidad de calificaciones. Por motivos de rendimiento, el promedio es aproximado si depende de elementos ocultos.';
$string['showaverages'] = 'Mostrar promedios de columna';
$string['showaverages_help'] = 'Muestra las medias de las columnas en el informe del calificador.';
$string['showcalculations'] = 'Mostrar cálculos';
$string['showcalculations_help'] = 'Si se activa, cuando se edita, se muestra un icono de una calculadora para cada ítem de calificación y para cada categoría, con un indicador visual de que es un elemento calculado.';
$string['showcontributiontocoursetotal'] = 'Mostrar aportación al total del curso';
$string['showcontributiontocoursetotal_help'] = 'Se muestra una columna que indica el porcentaje que aporta cada ítem de calificación a la nota total del curso (después de aplicar la ponderación).';
$string['showeyecons'] = 'Mostrar iconos \'mostrar/ocultar\'';
$string['showeyecons_help'] = 'Mostrar o no un icono de \'mostrar/ocultar\' junto a cada calificación (controlando que el usuario pueda verlo).';
$string['showfeedback'] = 'Mostrar retroalimentación';
$string['showfeedback_help'] = 'Si mostrar una columna para retroalimentación.';
$string['showgrade'] = 'Mostrar calificaciones';
$string['showgrade_help'] = 'Si mostrar una columna para calificaciones.';
$string['showgroups'] = 'Mostrar grupos';
$string['showhiddenitems'] = 'Mostrar ítems ocultos';
$string['showhiddenitems_help'] = 'Si estan totalmente ocultos los elementos de calificación  o si los nombres de los elementos de calificación ocultos son visibles para los estudiantes.

* Mostrar ocultos - Los nombres de los elementos de califiación ocultos se muestran, pero las calificaciones de los estudiante están ocultas
* Sólo se oculta hasta - Los elementos de calificación con "ocultar hasta" la fecha prevista se ocultan por completo hasta la fecha fijada, después de lo cual todo el elemento se muestra
* No mostrar - Los elementos de calificación ocultos grado están completamente ocultos';
$string['showhiddenuntilonly'] = 'Ocultos sólo hasta';
$string['showingaggregatesonly'] = 'Mostrar solo agregaciones';
$string['showingfullmode'] = 'Mostrando vista completa';
$string['showinggradesonly'] = 'Mostrando solo las calificaciones';
$string['showlettergrade'] = 'Mostrar calificaciones con letras';
$string['showlettergrade_help'] = 'Si mostrar una columna para calificaciones con letras.';
$string['showlocks'] = 'Mostrar bloqueos';
$string['showlocks_help'] = 'Mostrar o no un icono de \'bloquear/desbloquear\' junto a cada calificación.';
$string['shownohidden'] = 'No mostrar';
$string['shownooutcomes'] = 'Ocultar resultados';
$string['shownumberofgrades'] = 'Mostrar número de calificaciones en los promedios';
$string['shownumberofgrades_help'] = 'Muestra el número de calificaciones que se están agregando junto a cada promedio, entre paréntesis. Ejemplo: 45 (34).';
$string['showonlyactiveenrol'] = 'Mostrar solamente matriculaciones activas';
$string['showonlyactiveenrol_help'] = 'Este ajuste determina si sólo los usuarios activos serán visibles en el informe del libro de calificaciones. Si se activa, los usuarios suspendidos no se mostrarán en el libro de calificaciones.';
$string['showpercentage'] = 'Mostrar porcentaje';
$string['showpercentage_help'] = 'Si mostrar el valor porcentual de cada elemento de calificación.';
$string['showquickfeedback'] = 'Mostrar retroalimentación rápida';
$string['showquickfeedback_help'] = 'Si se habilita, cuando se activa la edición, aparece una caja con bordes punteados para introducir texto para cada calificación, lo que permite introducir comentarios para varias calificaciones al mismo tiempo. Los cambios son guardados y resaltados cuando se hace clic en el botón para actualizar.

Observe que cuando edita un comentario de retroalimentación dentro del informe del calificador, se activa un indicador de sobreescritura que indica que ese comentario ya no podrá ser cambiado desde la actividad misma.';
$string['showrange'] = 'Mostrar rangos';
$string['showrange_help'] = 'Si mostrar una columna para el rango.';
$string['showranges'] = 'Mostrar rangos';
$string['showranges_help'] = 'Muestra una fila que contiene el rango de calificaciones posibles para cada ítem en el informe del calificador.';
$string['showrank'] = 'Mostrar ranking';
$string['showrank_help'] = 'Si mostrar la posición del alumno en relación con el resto de la clase para cada elemento de calificación.';
$string['showuserimage'] = 'Mostrar imágenes de perfil del usuario';
$string['showuserimage_help'] = 'Mostrar o no la imagen del perfil del usuario junto a su nombre en el informe del calificador.';
$string['showverbose'] = 'Mostrar {$a->category} {$a->itemmodule} {$a->itemname}';
$string['showweight'] = 'Mostrar pesos';
$string['showweight_help'] = 'Si mostrar una columna para el peso de las calificaciones.';
$string['simpleview'] = 'Vista simple';
$string['singleview'] = 'Vista simple para {$a}';
$string['sitewide'] = 'Todo el sitio';
$string['sort'] = 'ordenar';
$string['sortasc'] = 'Ordenar (ascendente)';
$string['sortbyfirstname'] = 'Ordenar por nombre';
$string['sortbylastname'] = 'Ordenar por apellido';
$string['sortdesc'] = 'Ordenar (descendente)';
$string['standarddeviation'] = 'Desviación estándar';
$string['stats'] = 'Estadísticas';
$string['statslink'] = 'Estadísticas';
$string['student'] = 'Estudiante';
$string['studentsperpage'] = 'Estudiantes por página';
$string['studentsperpage_help'] = 'Número de estudiantes a mostrar por página en el informe del calificador.';
$string['studentsperpagereduced'] = 'Se redujo el número máximo de estudiantes por página de  {$a->originalstudentsperpage} a {$a->studentsperpage}. Considere aumentar la variable PHP max_input_vars de {$a->maxinputvars}.';
$string['subcategory'] = 'Categoría normal';
$string['submissions'] = 'Envíos';
$string['submittedon'] = 'Enviado: {$a}';
$string['sumofgradesupgradedgrades'] = 'Nota: El método de agregación "Suma de calificaciones" ha sido cambiado a "Natural" como parte de la actualización del portal. Debido a que se usó "Suma de calificaciones" previamente en este curso, se recomienda que revise este cambio en el libro de calificaciones.';
$string['switchtofullview'] = 'Cambiar a vista completa';
$string['switchtosimpleview'] = 'Cambiar a vista simple';
$string['tabs'] = 'Tabuladores';
$string['topcategory'] = 'Categoría superior';
$string['total'] = 'Total';
$string['totalweight100'] = 'El peso total es igual a 100';
$string['totalweightnot100'] = 'El peso total no es igual a 100';
$string['turnfeedbackoff'] = 'Desactivar retroalimentación';
$string['turnfeedbackon'] = 'Activar retroalimentación';
$string['typenone'] = 'Ninguno';
$string['typescale'] = 'Escala';
$string['typescale_help'] = 'Este parámetro determina la escala utilizada cuando se usa \'Escala\' como \'Tipo de calificación\'. La escala para cada actividad calificable se establece en la página de configuración de la actividad.';
$string['typetext'] = 'Texto';
$string['typevalue'] = 'Valor';
$string['uncategorised'] = 'Sin categorizar';
$string['unchangedgrade'] = 'Calificación sin cambios';
$string['unenrolledusersinimport'] = 'Esta importación incluye las siguientes calificaciones de los usuarios no matriculados actualmente en este curso: {$a}';
$string['unlimitedgrades'] = 'Calificaciones no limitadas';
$string['unlimitedgrades_help'] = 'Por defecto, las calificaciones están limitadas por los valores máximo y mínimo del ítem de calificación. Si se activa esta opción se eliminará ese límite, y se permitirá introducir directamente en el libro de calificaciones valores por encima del 100%.';
$string['unlock'] = 'Desbloquear';
$string['unlockverbose'] = 'Desbloquear {$a->category} {$a->itemmodule} {$a->itemname}';
$string['unused'] = 'Sin uso';
$string['updatedgradesonly'] = 'Exportar sólo calificaciones nuevas o actualizadas';
$string['upgradedgradeshidemessage'] = 'Ignorar aviso';
$string['upgradedminmaxrevertmessage'] = 'Deshacer los cambios';
$string['uploadgrades'] = 'Subir calificaciones';
$string['useadvanced'] = 'Usar características avanzadas';
$string['usedcourses'] = 'Cursos usados';
$string['usedgradeitem'] = 'Ítem de calificación usado';
$string['usenooutcome'] = 'No usar resultado';
$string['usenoscale'] = 'No usar escala';
$string['usepercent'] = 'Usar porcentaje';
$string['user'] = 'Usuario';
$string['userenrolmentsuspended'] = 'Matriculación de usuarios suspendida';
$string['userfields_show'] = 'Mostrar campos de usuario';
$string['userfields_show_help'] = 'Mostrar campos adicionales como dirección electrónica en el informe de calificaciones del usuario. El control de los campos a mostrar se lleva a cabo en la configuración de la página "mostrar identidad de usuario"';
$string['usergrade'] = 'Usuario {$a->fullname} ({$a->useridnumber}) en el ítem {$a->gradeidnumber}';
$string['userid'] = 'ID de usuario';
$string['useridnumberwarning'] = 'Usuarios sin un número de ID son excluidos de la exportación ya que no podrán ser importados.';
$string['usermappingerror'] = 'Error de asignación: No se pudo encontrar al usuario con {$a->field} de "{$a->value}".';
$string['usermappingerrorcurrentgroup'] = 'El usuario no es miembro del grupo actual.';
$string['usermappingerrormultipleusersfound'] = 'Error de mapeo de usuario. Se encontraron varios usuarios con {$a->field} de "{$a->value}". Por favor use un campo de mapeo más único.';
$string['usermappingerrorusernotfound'] = 'Error de asignación. No se pudo encontrar al usuario.';
$string['userpreferences'] = 'Preferencias del usuario';
$string['useweighted'] = 'Usar ponderación';
$string['verbosescales'] = 'Escalas de texto';
$string['verbosescales_help'] = 'La escala verbal usa palabras en lugar de números. Seleccione "sí" si desea importar las escalas numéricas y verbales. Seleccione "No" si solo desea importar las escalas numéricas.';
$string['viewbygroup'] = 'Grupo';
$string['viewgrades'] = 'Ver calificaciones';
$string['weight'] = 'Ponderación';
$string['weight_help'] = 'Un valor utilizado para determinar el valor relativo de elementos de calificación múltiple en un curso o categoría.';
$string['weightcourse'] = 'Usar calificaciones no ponderadas para el curso';
$string['weightedascending'] = 'Clasificar por porcentaje ponderado ascendente';
$string['weighteddescending'] = 'Clasificar por porcentaje ponderado descendente';
$string['weightedpct'] = '% ponderada';
$string['weightedpctcontribution'] = 'contribución % ponderada';
$string['weightofa'] = 'Peso de {$a}';
$string['weightorextracredit'] = 'Ponderación o crédito extra';
$string['weightoverride'] = 'ajuste de peso';
$string['weightoverride_help'] = 'Desmarcar esta opción para reestablecer el peso de un elemento de calificación a su valor calculado automáticamente. Al marcar esto se evita que el peso se ajuste automáticamente.';
$string['weights'] = 'Ponderaciones';
$string['weightsadjusted'] = 'Sus pesos han sido ajustado a un total de 100.';
$string['weightsedit'] = 'Editar ponderaciones y créditos extra';
$string['weightuc'] = 'Ponderación calculada';
$string['writinggradebookinfo'] = 'Escribiendo ajustes del libro de calificaciones';
$string['xml'] = 'XML';
$string['yes'] = 'Sí';
$string['yourgrade'] = 'Su calificación';
