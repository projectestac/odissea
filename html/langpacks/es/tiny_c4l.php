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
 * Strings for component 'tiny_c4l', language 'es', version '4.5'.
 *
 * @package     tiny_c4l
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalhtml'] = 'Página de administración de HTML adicional';
$string['aimedatstudents'] = 'Dirigidos a los estudiantes';
$string['aimedatstudents_desc'] = 'Por defecto, solo los elementos seleccionados estarán disponibles para ser usados en el editor por parte de usuarios con capacidades de estudiante. Puedes modificar la selección marcando o desmarcando los componentes en cuestión.';
$string['aiuseallowed'] = 'Uso de IA permitido';
$string['aiusenotallowed'] = 'Uso de IA no permitido';
$string['aiusereported'] = 'Se ha notificado el uso de IA';
$string['align-center'] = 'Centrar';
$string['align-left'] = 'Alinear a la izquierda';
$string['align-right'] = 'Alinear a la derecha';
$string['allpurposecard'] = 'Recuadro multipropósito';
$string['attention'] = 'Atención';
$string['button_c4l'] = 'C4L';
$string['c4l:use'] = 'Usar TinyMCE C4L';
$string['c4l:viewplugin'] = 'Mostrar el plugin C4L';
$string['caption'] = 'Cita';
$string['comfort-reading'] = 'Lectura de confort';
$string['conceptreview'] = 'Revisión de conceptos';
$string['contextual'] = 'Contextual';
$string['custom'] = 'Personalizado';
$string['customcompcode'] = 'Componente de código HTML {$a}';
$string['customcompcodedesc'] = 'La palabra <code>{{CUSTOMCLASS}}</code> es una clase obligatoria que debe estar junto a las clases CSS principales de los componentes. <br />
Ejemplo de código:
<pre>
&lt;div class="{{CUSTOMCLASS}} &lt;!-- Agregue aquí las clases CSS principales --&gt;"&gt;
    &lt;p&gt;{{PLACEHOLDER}}&lt;/p&gt;
&lt;/div&gt;
</pre>
Tenga en cuenta que cualquier código JavaScript o CSS en línea se eliminará antes de finalizar el renderizado.';
$string['customcompcount'] = 'Número de componentes personalizados';
$string['customcompcountdesc'] = 'Número de componentes personalizados que se crearán';
$string['customcompenable'] = 'Habilitar el componente {$a}';
$string['customcompenabledesc'] = 'Si está habilitado, este componente estará disponible.';
$string['customcompicon'] = 'Icono del componente {$a}';
$string['customcompicondesc'] = 'Icono opcional para el componente. Tamaño recomendado: 18x18 píxeles.';
$string['customcompname'] = 'Componente de texto de botón {$a}';
$string['customcompnamedesc'] = 'Texto que se mostrará en el botón';
$string['customcomponents'] = 'Componentes personalizados';
$string['customcompsortorder'] = 'Componente de orden de clasificación {$a}';
$string['customcompsortorderdesc'] = 'Establece la posición del componente en la interfaz de usuario.';
$string['customcomptext'] = 'Componente de texto de marcador de posición {$a}';
$string['customcomptextdesc'] = 'Texto que se mostrará como marcador de posición en el componente. Ingrese la palabra <code>{{PLACEHOLDER}}</code> en el código.';
$string['customcomptitle'] = 'Componente personalizado {$a}';
$string['customcompvariant'] = 'Habilitar el componente de variantes {$a}';
$string['customcompvariantdesc'] = 'Si está habilitado, la variante de ancho completo estará disponible para este componente.';
$string['customimagesbank'] = 'Banco de imágenes';
$string['customimagesbankdesc'] = 'Para insertar cualquier imagen subida a su código, agregue esta línea:<br />
<code>&lt;img src="{{filename.extension}}" alt="Imagen personalizada"&gt;</code>';
$string['custompreviewcss'] = 'Código CSS';
$string['custompreviewcssdesc'] = 'CSS utilizado para previsualizar los componentes en el editor.
<p>Cualquier código CSS agregado aquí también debe incluirse en su tema o dentro de las etiquetas de estilo <code>&lt;style&gt;...&lt;style&gt;</code> y guardarlo en la configuración <strong>additionalhtmlhead</strong> en {$a};
en caso contrario, los estilos no se aplicarán a sus componentes cuando se rendericen.</p>';
$string['do-card'] = 'Recuadro correcto';
$string['docs'] = '¿Cuándo usar?';
$string['docs_aiuseallowed_desc'] = 'Indica que se permite el uso de herramientas de inteligencia artificial para una actividad o evaluación específica.';
$string['docs_aiuseallowed_use1'] = 'Las herramientas de IA pueden usarse como parte del proceso de aprendizaje.';
$string['docs_aiuseallowed_use2'] = 'Se desea reducir la ambigüedad sobre si el uso de IA es aceptable.';
$string['docs_aiusenotallowed_desc'] = 'Establece claramente que el uso de herramientas de inteligencia artificial está prohibido para una actividad o evaluación específica.';
$string['docs_aiusenotallowed_use1'] = 'La evaluación requiere un trabajo independiente.';
$string['docs_aiusenotallowed_use2'] = 'El objetivo de aprendizaje implica demostrar competencia individual.';
$string['docs_aiusenotallowed_use3'] = 'La tarea se realiza en condiciones controladas o de examen.';
$string['docs_aiusereported_desc'] = 'Indica que se permite el uso de herramientas de inteligencia artificial, pero que el estudiante debe declarar explícitamente su uso.';
$string['docs_aiusereported_use1'] = 'El uso de IA está permitido, pero debe documentarse.';
$string['docs_aiusereported_use2'] = 'La transparencia y el uso responsable de la IA son objetivos de aprendizaje.';
$string['docs_aiusereported_use3'] = 'Se espera que los estudiantes reflexionen críticamente sobre el uso que hacen de las herramientas de IA.';
$string['docs_aiusereported_use4'] = 'La normativa institucional requiere informar sobre la asistencia de IA.';
$string['docs_allpurposecard_desc'] = 'Proporciona un fragmento de contenido con un contexto visual propio, para hacerlo específico o diferente.';
$string['docs_allpurposecard_use1'] = 'En contenidos teóricos, establezca un contexto independiente del flujo principal.';
$string['docs_allpurposecard_use2'] = 'En cuestionarios u otros entornos de evaluación o práctica que incluyen teoría y práctica, se puede usar como contenedor de la teoría.';
$string['docs_attention_desc'] = 'Atrapa la atención del estudiante sobre algún aspecto o información relevante.';
$string['docs_attention_use1'] = 'Para advertir al estudiante de algún aspecto relevante que debe tener en cuenta en relación con un tema de estudio.';
$string['docs_attention_use2'] = 'En el contexto de un flujo de aprendizaje predefinido, atrapa la atención del estudiante hacia una manera recomendada (o esperada) de proceder en un contexto determinado.';
$string['docs_conceptreview_desc'] = 'Recupera un concepto antes que pueda ser útil para que el estudiante comprenda mejor un nuevo concepto que se está introduciendo.';
$string['docs_conceptreview_use1'] = 'Ayuda al estudiante a recordar la relevancia de un concepto antes que pueda ser útil, con lo que hace que sea más consciente de su papel en el recorrido de aprendizaje global.';
$string['docs_conceptreview_use2'] = 'Cuando se trabaja con contenido nuevo que implica una carga cognitiva elevada, permite que el educador proporcione un acceso rápido a los conocimientos previos.';
$string['docs_dodontcards_desc'] = 'Presentación comparativa donde el estudiante puede encontrar las maneras correctas e incorrectas para hacer algo o conceptualizar una idea específica en un contexto visual conjunto.';
$string['docs_dodontcards_use1'] = 'En un contexto práctico (usualmente), para clarificar la manera correcta o incorrecta de hacer algo.';
$string['docs_dodontcards_use2'] = 'En un contexto teórico, para ayudar al estudiante a apreciar las diferencias entre una buena y una mala manera de abordar un determinado concepto o idea.';
$string['docs_duedate_desc'] = 'Muestra la fecha límite en que se espera que el estudiante complete una tarea.';
$string['docs_duedate_use1'] = 'Para destacar visualmente la fecha límite y facilitar que el estudiante la tenga presente.';
$string['docs_estimatedtime_desc'] = 'Muestra el tiempo estimado que el estudiante necesita para realizar una actividad.';
$string['docs_estimatedtime_use1'] = 'En un contexto teórico, para ayudar al estudiante a calcular la duración aproximada de un contenido concreto.';
$string['docs_estimatedtime_use2'] = 'En un contexto práctico, para establecer el tiempo óptimo o necesario para realizar una tarea.';
$string['docs_example_desc'] = 'Muestra un caso significativo que ayuda al estudiante a comprender un concepto o una idea explicados en el contenido.';
$string['docs_example_use1'] = 'Para mostrar un ejemplo que requiere un cierto grado de elaboración.';
$string['docs_example_use2'] = 'En un contexto práctico, para mostrar una demostración de una manera concreta de resolver el problema.';
$string['docs_expectedfeedback_desc'] = 'Proporciona al estudiante retroalimentación o información relacionada con una tarea concreta.';
$string['docs_expectedfeedback_use1'] = 'Para proporcionar al estudiante retroalimentación relacionada con la tarea actual.';
$string['docs_expectedfeedback_use2'] = 'Si no se ofrece retroalimentación en ese momento, para indicar cuándo la recibirá el estudiante.';
$string['docs_expectedfeedback_use3'] = 'Si no se ofrece retroalimentación en ese momento, para especificar cómo será la retroalimentación y/o los requisitos para recibirla.';
$string['docs_figure_desc'] = 'Integra una imagen dentro del flujo del contenido, y permite agregarle una leyenda y la atribución de la fuente.';
$string['docs_figure_use1'] = 'Para ilustrar un concepto mencionado en el contenido.';
$string['docs_figure_use2'] = 'Para agregar precisión o detalles a un concepto o una idea concreta.';
$string['docs_figure_use3'] = 'Para ayudar a reducir la complejidad de un concepto que requiere un nivel elevado de abstracción para ser comprendido.';
$string['docs_furtherreading_desc'] = 'Una lista de recursos complementarios seleccionados que permiten al estudiante profundizar, ampliar o reforzar el contenido.';
$string['docs_furtherreading_use1'] = 'Para ofrecer recursos opcionales a los estudiantes que quieran explorar un tema con más profundidad.';
$string['docs_furtherreading_use2'] = 'Para complementar el contenido principal con perspectivas, explicaciones o formatos alternativos.';
$string['docs_furtherreading_use3'] = 'Para apoyar en las diferentes preferencias de aprendizaje proporcionando recursos variados.';
$string['docs_furtherreading_use4'] = 'Para apuntar a materiales de referencia que refuerzan las ideas clave.';
$string['docs_gradingvalue_desc'] = 'Muestra el valor relativo de la calificación de una tarea concreta.';
$string['docs_gradingvalue_use1'] = 'Pensado exclusivamente para contextos prácticos, establece el valor parcial de la tarea actual respecto a la calificación total.';
$string['docs_inlinetag_desc'] = 'Permite hacer referencia a una categoría u otras taxonomías dentro de un párrafo.';
$string['docs_inlinetag_use1'] = 'Cuando una categoría o taxonomía se ha establecido mediante el componente Etiqueta, se usa la etiqueta en línea para hacerle referencia dentro de un texto.';
$string['docs_inlinetag_use2'] = 'Para categorías implícitamente relacionadas con el estado del contenido; por ejemplo, para indicar que un artículo se ha agregado recientemente con una etiqueta de «Nuevo».';
$string['docs_keyconcept_desc'] = 'Destaca un concepto o una idea.';
$string['docs_keyconcept_use1'] = 'Definición concisa de un concepto relevante.';
$string['docs_keyconcept_use2'] = 'Síntesis breve de un concepto concreto que se ha explicado anteriormente.';
$string['docs_keyconcept_use3'] = 'En materiales científicos, para mostrar fórmulas o resultados matemáticos abstractos.';
$string['docs_learningoutcomes_desc'] = 'Muestra los resultados de aprendizaje que se espera que el estudiante adquiera después de completar un curso o una actividad.';
$string['docs_learningoutcomes_use1'] = 'Para mostrar los objetivos de aprendizaje (los resultados globales previstos de un curso o programa).';
$string['docs_learningoutcomes_use2'] = 'Para mostrar los objetivos de aprendizaje específicos (lo que se espera que el estudiante adquiera después de participar en una actividad concreta).';
$string['docs_nodocsavailable_desc'] = 'No hay documentación disponible para este componente.';
$string['docs_proceduralcontext_desc'] = 'Proporciona al estudiante una descripción detallada de un procedimiento que se debe seguir en un contexto determinado.';
$string['docs_proceduralcontext_use1'] = 'Para invitar al estudiante a realizar una acción concreta.';
$string['docs_proceduralcontext_use2'] = 'Para mantener informado al estudiante sobre el punto del su itinerario de aprendizaje en que se encuentra en ese momento.';
$string['docs_proceduralcontext_use3'] = 'En un contexto práctico, para detallar las características de un resultado esperado.';
$string['docs_quote_desc'] = 'Destaca una cita textual de un autor u obra externa en el contenido.';
$string['docs_quote_use1'] = 'Para enfatizar un concepto o una idea concreta, resaltando su importancia o ayudando al estudiante a comprender su significado y sus implicaciones.';
$string['docs_quote_use2'] = 'Para mostrar un punto de vista experimentado sobre una cuestión concreta.';
$string['docs_quote_use3'] = 'Para aportar contexto a un tema concreto.';
$string['docs_quote_use4'] = 'Para mostrar juicios informados de autores destacados u historias.';
$string['docs_readingcontext_desc'] = 'Proporciona un contexto visual adecuado para la lectura, aplicable a fragmentos de texto del contenido principal.';
$string['docs_readingcontext_use1'] = 'Para hacer más legible o fácilmente identificable un texto literario o especializado.';
$string['docs_readingcontext_use2'] = 'Para transmitir la sensación de un contexto independiente en el que predomina la acción de leer.';
$string['docs_readingcontext_use3'] = 'Para mostrar una cita considerablemente más larga que las citas de una sola oración, para las cuales el componente Citación es más adecuado.';
$string['docs_reminder_desc'] = 'Recupera un concepto concreto que puede ayudar al estudiante a comprender mejor el tema que está aprendiendo.';
$string['docs_reminder_use1'] = 'Cuando se introduce un concepto nuevo que requiere conocimientos previos concretos.';
$string['docs_reminder_use2'] = 'Después de explicar un concepto complejo, para resumir la parte esencial que se espera que el estudiante recuerde.';
$string['docs_reminder_use3'] = 'Para refrescar la memoria del estudiante con respecto a un concepto teórico necesario para resolver un ejercicio.';
$string['docs_tag_desc'] = 'Establece un entorno contextual en relación con el tipo de materia, categoría o taxonomías similares.';
$string['docs_tag_use1'] = 'Para mostrar contenido bajo una taxonomía específica siguiendo una lógica diferente a la jerarquía principal de títulos.';
$string['docs_tag_use2'] = 'En un contexto práctico, para separar ámbitos entre las diferentes competencias requeridas durante su implementación.';
$string['docs_tip_desc'] = 'Ofrece un consejo, una sugerencia o una pista.';
$string['docs_tip_use1'] = 'Para ofrecer consejos o orientaciones (sobre el contenido en sí, no sobre aspectos procedimentales relacionados con el aprendizaje).';
$string['docs_tip_use2'] = 'Para desambiguar un concepto.';
$string['docs_tip_use3'] = 'Para ayudar a prevenir un error habitual (un concepto o una idea concreta que con frecuencia se entienden mal o generan confusión).';
$string['docs_usecases'] = 'Casos de uso';
$string['dodontcards'] = 'Recuadros Correcto/Incorrecto';
$string['dont-card'] = 'Recuadro incorrecto';
$string['dont-card-only'] = 'Solo recuadro incorrecto';
$string['duedate'] = 'Fecha límite';
$string['enabledocs'] = 'Habilitar la documentación';
$string['enabledocs_desc'] = 'Si está activado, se muestra un panel de documentación al lado de la previsualización.';
$string['enablepreview'] = 'Habilitar la previsualización';
$string['enablepreview_desc'] = 'Si está habilitado, se mostrará una previsualización al desplazar el cursor sobre los componentes.';
$string['estimatedtime'] = 'Tiempo previsto';
$string['evaluative'] = 'Evaluativo';
$string['example'] = 'Ejemplo';
$string['expectedfeedback'] = 'Se espera retroalimentación';
$string['figure'] = 'Figura';
$string['full-width'] = 'Ancho completo';
$string['furtherreading'] = 'Lecturas complementarias';
$string['generalsettings'] = 'Configuración general';
$string['gradingvalue'] = 'Peso de la nota';
$string['helper'] = 'Auxiliares';
$string['helplinktext'] = 'Auxiliares';
$string['inlinetag'] = 'Etiqueta en línea';
$string['keyconcept'] = 'Concepto clave';
$string['learningoutcomes'] = 'Resultados de aprendizaje';
$string['menuitem_c4l'] = 'Componentes para el aprendizaje (C4L)';
$string['min'] = 'min';
$string['notintendedforstudents'] = 'No dirigidos a los estudiantes';
$string['notintendedforstudents_desc'] = 'Por defecto, el uso de componentes evaluativos y procedimentales en el editor no está dirigido a los usuarios con capacidades de estudiante. Puedes modificar la los valores por defecto seleccionando aquellos elementos que desees hacer disponibles.';
$string['ordered-list'] = 'Lista ordenada';
$string['pluginname'] = 'Componentes para el aprendizaje (C4L)';
$string['preview'] = 'Previsualización';
$string['previewdefault'] = 'Desplaza el cursor sobre los componentes para previsualizarlos.';
$string['previewdocsdefault'] = 'Coloque el cursor sobre cualquier componente para ver los casos de uso recomendados.';
$string['privacy:preference:components_variants'] = 'Variantes preferidas de cada componente';
$string['procedural'] = 'Procedimental';
$string['proceduralcontext'] = 'Contexto procedimental';
$string['quote'] = 'Cita';
$string['readingcontext'] = 'Contexto de lectura';
$string['reminder'] = 'Recordatorio';
$string['tag'] = 'Etiqueta';
$string['textplaceholder'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
$string['tip'] = 'Consejo';
