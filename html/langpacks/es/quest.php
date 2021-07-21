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
 * Strings for component 'quest', language 'es', version '3.11'.
 *
 * @package     quest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absent'] = 'Ausente';
$string['accumulative'] = 'Acumulativa';
$string['action'] = 'Acción';
$string['actions'] = 'Acciones';
$string['addacomment'] = 'Añadir un comentario';
$string['addcomment'] = 'Añadir Comentario';
$string['addelement'] = 'Añadir elemento';
$string['addsubmission'] = 'Añadir Desafío';
$string['adminlogs'] = 'Registros del administrador';
$string['allowteams'] = 'Permitir Equipos';
$string['allowteams_help'] = '<P align="justify">Este par&aacute;metro obliga a que cada uno de los alumnos que participe en este m&oacute;dulo QUESTOURnament pertenezca a un equipo. Cuando un alumno acceda por primera vez a un m&oacute;dulo que tenga esta opci&oacute;n habilitada, tendr&aacute; que introducir el nombre del equipo al que pertenece para poder entrar. </P>
<P align="justify">Cuando esta opci&oacute;n est&eacute; habilitada aparecer&aacute; en el m&oacute;dulo, adem&aacute;s de la clasificaci&oacute;n individual de todos los alumnos, la clasificaci&oacute;n por equipos. </P>
<P align="justify"> Cada equipo tendr&aacute; un n&uacute;mero de componentes, fijado por el par&aacute;mero <a href="help.php?component=quest&identifier=ncomponents"">N&uacute;mero de Componentes</a>, que podr&aacute; ser gestionado por los profesores. Los posibles errores que se poduzcan podr&aacute;n solucionarse atrav&eacute;s de la opci&oacute;n de
<a href="help.php?component=quest&identifier=changeteamteacher"">Gesti&oacute;n de Equipos</a> a la que s&oacute;lo tienen acceso los profesores. </P>';
$string['amendassessmentelements'] = 'Rectificar elementos de valoración';
$string['answer'] = 'Responder';
$string['answer_not_found'] = 'No existe un registro de respuesta con id {$a}';
$string['answercontent'] = 'Contenido de la Respuesta';
$string['answerexisty'] = 'Ya existe una respuesta a este desafío.';
$string['answername'] = 'Respuesta: {$a->title}';
$string['answernoauthorizedupdate'] = 'No estás autorizado a modificar la respuesta';
$string['answers'] = 'Resp.';
$string['answersubmission'] = 'Responder al desafío';
$string['answersubmission_help'] = '<P align="justify">Esta acci$ocute;n permite responder al desaf&iacute;o. </P>
<P align="justify">Los campos que aparecen son los siguientes:</P>
<ul>
  <li><strong>T&iacute;tulo</strong>: nombre con el que se desea identificar la respuesta a enviar.</li>
  <li><strong>Descripci&oacute;n</strong>: es el cuerpo de la respuesta al desafío. Deber&aacute; dar respuesta a todas cuestiones planteadas en el desaf&iacute;o.</li>
  <li><strong>Anexos</strong>: en caso de haberse habilitado el env&iacute;o de anexos se podr&aacute;n incluir al final tras el cuerpo de la respuesta</li>
</ul>
<p>La pantalla aparecer&aacute; fragmentada en dos zonas, en la parte superior se muestra la sección que permite introducir la respuesta, además de pedirse a quién la envía que valore subjetivamente, es decir, según su propio criterio, el nivel de dificultad del desafío propuesto, escogiendo para ello una opción entre las propuestas, mientras que en la parte inferior se muestra el desaf&iacute;o a responder. </p>
<p align="justify">Junto al texto Responder se muestra un icono con la imagen de una raiz cuadrada. Al pulsar este icono aparecer&aacute; una pantalla en la que se pueden comprobar las expresiones del filtro TEX de texto que proporciona Moodle. Este filtro TEX convierte expresiones introducidas con una sintaxis contreta en ecuaciones matem&aacute;ticas tal y como las muestra el editor de ecuaciones de Word. </p>
<p align="justify">El botón Previsualizar permite acceder a una pantalla que muestra el aspecto de la respuesta introducida una vez que hayan aplicado los filtros de texto de que dispone Moodle. Esta pantalla es la <a href="help.php?component=quest&identifier=windowpreview"">Ventana de Previsualizaci&oacute;n de la respuesta </a>. El bot&oacute;n, Enviar Tarea permite guardar y enviar la respuesta que se ha introducido.</p>';
$string['approve'] = 'Aprobar';
$string['approvesubmission'] = 'Aprobar/Rechazar Desaf&iacute;o';
$string['approvesubmission_help'] = '<P align="justify">Esta página permite al profesor aprobar, guardar o borrar un desaf&iacute;o propuesto por un alumno. A continuación se describe cada una de las acciones que se pueden realizar:</P>
<ul>
  <li><strong align="justify">Aprobar</strong>: al pulsar este bot&oacute;n se guardan todos los datos referentes al desaf&iacute;o, con las modificaciones realizadas por el profesor. A partir de este instante, el desafío será visible por el resto de los alumnos que podr&aacute;n enviar respuestas una vez se abra dicho desafío.</li>
  <li><strong align="justify">Guardar</strong>: se almacenan todos los cambios realizados por el profesor en el desaf&iacute;o, sin que éste pase a estar visible para el resto de alumnos. Esto permite que el autor del desafío realice las modificaciones necesarias para que el profesor lo apruebe</li>
  <li><strong align="justify">Borrar</strong>: el profesor elimina el desafío por no considerarlo adecuado o interesante.</li>
</ul>
<P align="justify">Al realizar cualquiera de estas acciones se enviar&aacute; un mensaje al autor del desaf&iacute;o, bien interno, bien por correo electr&oacute;nico, dependiendo de las preferencias del usuario a este respecto fijadas por el mismo en su perfil. </P>
<P align="justify">La información que se presenta sobre el desafío y que puede modificarse es la siguiente:</P>
<ul>

    <li><strong>T&iacute;tulo</strong>: nombre con el se designa el desaf&iacute;o, se recomienda que no incluya el nombre del autor, para conservar el anonimato sobre la autoría del desaf&iacute;o, en caso contrario podr&aacute; ser rechazado o modificado por el profesor.</li>
      <li><strong>Descripci&oacute;n</strong>: es el cuerpo del desaf&iacute;o, donde se explica la problem&aacute;tica y los aspectos que debe incluir la respuesta. Debe ser clara y completa. </li>
      <li><strong>Puntuaci&oacute;n M&aacute;xima</strong>: es la m&aacute;xima puntuaci&oacute;n que podr&aacute; alcanzar el desaf&iacute;o, viene limitada por la <a href="help.php?component=quest&identifier=maxcalification"">M&aacute;xima Puntuaci&oacute;n</a> del m&oacute;dulo QUESTOURnament al que pertenece.</li>
      <li><strong>Puntuaci&oacute;n Inicia</strong>l: es la puntuaci&oacute;n con la que parte el desaf&iacute;o en el instante de su comienzo, la cuál irá evolucionando a medida que se desarrolle el concurso.</li>
      <li><strong>Fecha de Comienzo</strong>: establece la fecha en que se abre el desaf&iacute;o, este par&aacute;metro s&oacute;lo es configurable por parte de los profesores. Cuando el desafío lo crea un alumno, se toma como fecha de comienzo el instante de creaci&oacute;n del desaf&iacute;o.</li>
      <li><strong>Fecha de Cierre</strong>: establece la fecha en la que se cierra el desaf&iacute;o, a partir de esta fecha no se podr&aacute; responder al desaf&iacute;o, aunque los autores del desaf&iacute;o y los profesores s&iacute; que podr&aacute;n evaluar las respuestas realizadas hasta la fecha. No puede ser posterior a la <a href="help.php?component=quest&identifier=dateend"">Fecha de Cierre</a> establecida para el m&oacute;dulo QUESTOURnament. </li>
      <li><strong>Anexos</strong>: se especificarán los anexos correspondientes en caso de haberse habilitado el env&iacute;o de anexos al crear el módulo QUESTOURnament. También se permite eliminar los anexos inclu&iacute;dos en el desaf&iacute;o hasta este momento.</li>

  <li><strong>Comentarios para el Autor</strong>: en este campo se incluir&aacute;n las sugerencias o los comentarios que el profesor quiera realizar al alumno, los cuáles s&oacute;lo estarán visibles para el autor del desaf&iacute;o y para el resto de profesores.</li>
  <li><strong>Comentarios para los Alumnos</strong>: en este campo se incluir&aacute;n los comentarios que el profesor quiera realizar a los alumnos acerca del desaf&iacute;o, estos comentarios estarán visibles para todos los participantes en el m&oacute;dulo QUESTOURnament. </li>
</ul>';
$string['assess'] = 'Evaluar';
$string['assessedon'] = 'Evaluada el {$a}';
$string['assessment'] = 'Valoración';
$string['assessmentby'] = 'Evaluada por {$a}';
$string['assessmentcharacteristics'] = 'Características de la corrección';
$string['assessmentglobal'] = 'Calificación Global';
$string['assessmentgrade'] = 'Calificación de la valoración: {$a}';
$string['assessmentof'] = 'Evaluación de {$a}';
$string['assessmentofthissubmission'] = 'Valoración de este envío';
$string['assessments'] = 'Eval.';
$string['assessmentsby'] = 'Valoradas por {$a}';
$string['assessthisanswer'] = 'Evaluar esta Respuesta';
$string['assessthissubmission'] = 'Evaluar Desaf&iacute;o';
$string['assessthissubmission_help'] = '<P align="justify">Esta página permite a los profesores evaluar la labor de los alumnos que propongan desaf&iacute;os en un m&oacute;dulo QUESTOURnament. La calificaci&oacute;n otorgada depender&aacute; tanto de la labor del autor como evaluador como del desaf&iacute;o propuesto.</P>

<P align="justify">Para facilitar la valoración de la tarea se utilizarán una serie de elementos de evaluación de forma que cada uno cubra un aspecto particular a valorar en la tarea. Para cada elemento de evaluación será preciso:
<div align="justify">
  <OL>
<LI>Introducir una calificaci&oacute;n haciendo clic en el radio bot&oacute;n apropiado, seleccionando un n&uacute;mero en el men&uacute; desplegable que se presente, etc., lo cuál dependerá de la escala utilizada para ese elemento de evaluación.
<LI>Introducir una explicaci&oacute;n de por qu&eacute; se asigna esa calificaci&oacute;n. Si se considera que la raz&oacute;n es obvia, se puede dejar esa casilla en blanco. No obstante, debe tenerse en cuenta que la persona cuyo trabajo est&aacute; evaluando puede efectuar una reclamación sobre la calificación asignada.
  </OL>
</div>

<P align="justify">Asimismo es posible realizar un comentario general sobre el trabajo valorado. &Eacute;ste comentario debe ser respetuoso y constructivo. Las calificaciones y comentarios realizados se mostrar&aacute; al autor del desafío. El profesor podrá modificar manualmente la calificación global, en caso de que desee hacer ajustes sobre la calculada de forma automática.
<P align="justify">La m&aacute;xima calificaci&oacute;n posible para el autor del desafío será, siempre que se haya producido una respuesta correcta, la m&aacute;xima puntuaci&oacute;n alcanzada por el desaf&iacute;o durante su tiempo de vida. Si por el contrario, no se ha enviado ninguna respuesta correcta al desaf&iacute;o antes de que éste se cierre, se considerará como m&aacute;xima puntuaci&oacute;n su <a href="help.php?component=quest&identifier=initialpoints"">Puntuaci&oacute;n Inicial</a>.';
$string['assignmentnotinthecorrectphase'] = 'La valoración no se ha hecho en la fase correcta';
$string['attachment'] = 'Anexo';
$string['attachments'] = 'Anexos';
$string['attachmentsnoauthorizedupdate'] = 'No está autorizado a borrar estos adjuntos';
$string['authorofsubmission'] = 'Autor del envío';
$string['by'] = 'por';
$string['bynameondate'] = 'de {$a->name} - {$a->date}';
$string['calification'] = 'Puntuación';
$string['calification_provisional_msg'] = 'La calificación mostrada puede ser provisional';
$string['calificationautor'] = 'Puntuación del Autor del Desafío';
$string['cantRespond_WARN'] = 'No puede responder.';
$string['cantRespond_WARN_notingroup_or_challengeended'] = 'No puede responder. O no pertenece a este grupo o el desafío ha terminado.';
$string['challengeend'] = 'Fin del desafío.';
$string['challengeend_help'] = '<P align="justify">Permite establecer la fecha en la que se cerrará un desaf&iacute;o. A partir de esta fecha no será posible enviar más respuestas al desaf&iacute;o. Sin embargo, los profesores sí podr&aacute;n seguir evaluando al autor del desaf&iacute;o, tanto por la pregunta planteada como por la labor desarrollada como evaluador. Asimismo, los autores de los desaf&iacute;os podr&aacute;n continuar evaluando las respuestas enviadas por otros alumnos.</P>
<P align="justify">Una vez se cierre el desafío, todos los participantes podr&aacute;n ver las respuestas enviadas por el resto, así como las evaluaciones y puntuaciones obtenidas. </P>
<P align="justify">Esta fecha no podr&aacute; ser posterior a la <a href="help.php?component=quest&identifier=dateend"">Fecha de Cierre</a> del m&oacute;dulo QUESTOURnament, ni anterior a la <a href="help.php?component=quest&identifier=submissionstart"">Fecha de Comienzo del Desaf&iacute;o </a>. </P>';
$string['challengestart'] = 'Inicio del desafío.';
$string['challengestart_help'] = '<P align="justify">Permite establecer la fecha en la que comenzará un desaf&iacute;o. Este par&aacute;metro s&oacute;lo es configurable por un profesor.</P>
<P align="justify">Si el desafío lo crea un alumno se toma como fecha de comienzo la fecha de creaci&oacute;n del desaf&iacute;o, pudiendo los profesores modificar este valor al aprobar el desaf&iacute;o o al realizar alguna modificaci&oacute;n sobre él.</P>
<P align="justify">A partir de esta fecha los alumnos podr&aacute;n visualizar el desaf&iacute;o y enviar sus respuestas. </P>
<P align="justify">Este fecha deber&aacute; ser anterior a la Fecha de Cierre del Desaf&iacute;o </P>';
$string['change'] = 'Guardar Cambios';
$string['changemanualcalification'] = 'Cambiar Calificación Manualmente';
$string['changeteam'] = 'Gestión Equipos';
$string['changeteamteacher'] = 'Gesti&oacute;n de Equipos';
$string['changeteamteacher_help'] = '<P align="justify">Esta opción permite realizar la gesti&oacute;n de los equipos del m&oacute;dulo QUESTOURnament así como cambiar a un alumno de equipo si resultara necesario.</P>
<P align="justify">Se presenta la siguiente información:</P>
<div align="justify">
  <ul>
    <li><strong>Nombre/Apellido</strong>: muestra el nombre y el apellido introducido por el alumno al registrarse en el sistema.</li>
      <li><strong>Nombre del Equipo</strong>: muestra el nombre del equipo al que pertenece el alumno.</li>
      <li><strong>N&ordm; Componentes</strong>: indica el n&uacute;mero actual de componentes con que cuenta el equipo al que pertenece el alumno.</li>
      <li><strong>Nuevo Equipo</strong>: es un campo de texto donde se puede introducir el nombre del nuevo equipo al que se desea asignar al alumno en cuesti&oacute;n.</li>
  </ul>
</div>
<p align="justify">Si en el m&oacute;dulo QUESTOURnament est&aacute;n habilitados los grupos, el profesor, al cambiar a un alumno de equipo deber&aacute; seleccionar el grupo al que pertenezca dicho alumno. Esto permite que pueda haber dos equipos con el mismo nombre siempre que pertenezcan a grupos distintos. </p>
<p align="justify">Si al cambiar a un alumno de equipo, éste se quedase sin componentes, dicho equipo desaparecer&iacute;a.</p>';
$string['checkthat'] = 'Compruebe que';
$string['clasification'] = 'Clasificación';
$string['closebeforeopen'] = 'La fecha de finalización del QUESTOURnament debe ser posterior a la fecha de inicio';
$string['comment'] = 'Comentario';
$string['commentby'] = 'Comentado por';
$string['commentsauthor'] = 'Comentarios generales del autor';
$string['commentsforauthor'] = 'Comentarios para el autor';
$string['commentsforauthor_help'] = '<strong>Comentarios para el autor</strong>: en este campo se podrán incluir las sugerencias o comentarios que el docente quiera hacer al estudiante que propuso el desafío, y a los que también tendrán acceso el resto de docentes.</li>';
$string['commentsforstudent'] = 'Comentarios para estudiantes';
$string['commentsforstudent_help'] = '<strong>Comentarios para estudiantes</strong>: este campo contiene los comentarios que el docente quiere mostrar a los estudiantes sobre este desafío, y estarán disponibles para la totalidad de participantes del QUESTOURnament.';
$string['commentsforteacher'] = 'Comentarios para el Profesor';
$string['commentsteacher'] = 'Comentario General del Profesor';
$string['confirmchangeform'] = 'Cambio de formulario';
$string['confirmdelete'] = 'Confirmar Borrar';
$string['confirmdeletionofthisitem'] = 'Confirmar el borrado de este elemento: {$a}';
$string['correct'] = 'Correcto';
$string['currentphase'] = 'Fase de QUESTOURnament';
$string['currentphaseanswer'] = 'Fase de Respuesta';
$string['currentphasesubmission'] = 'Fase actual';
$string['dateanswer'] = 'Fecha';
$string['dateassess'] = 'Fecha de Evaluación';
$string['dateend'] = 'Fecha de Cierre';
$string['dateend_help'] = '<P align="justify">Este par&aacute;metro establece la fecha de cierre de este m&oacute;dulo QUESTOURnament. A partir de esta fecha los alumnos del curso que accedan a este m&oacute;dulo no podr&aacute;n realizar ninguna de las acciones asociadas al mismo. En este momento se tendr&aacute;n las calificaciones finales del concurso. </P>
<P align="justify">Una vez cerrado el concurso, su contenido permanecer&aacute; visible para los alumnos y profesores del curso, siempre que así se hubiera definido al crear el módulo QUESTOURnament, de manera que se podr&aacute; acceder a los desaf&iacute;os y respuestas realizadas por todos los participantes, así como a las calificaciones por ellos obtenidas. </P>';
$string['dateendevent'] = 'Finalización del QUESTOURnament "{$a}"';
$string['dateendsubmissionevent'] = 'Finalización del Desafío: "{$a}"';
$string['dateofend'] = 'Fecha de cierre';
$string['dateofend_help'] = '<P align="justify">This paramenter sets the closing date of this QUESTOURnament. After this closing date, the students that access the QUESTOURnament will not be able to do any of the usual actions. At this point, the classifications of the QUESTOURnament will be definitive.</P>
<P align="justify">Once the contest is over, its content will still be accesible for the students and teachers of the course, whenever this was defined when the QUESTOURnament was created, this means that it will still be possible to access challenges and answers submitted by each and every participant, as well as their classifications.</P>';
$string['dateofstart'] = 'Fecha de Comienzo';
$string['datestart'] = 'A partir de';
$string['datestart_help'] = '<P align="justify">Este par&aacute;metro establece la fecha de comienzo de este m&oacute;dulo QUESTOURnament. A partir de esta fecha los alumnos del curso que accedan al m&oacute;dulo podr&aacute;n a&ntilde;adir desaf&iacute;os, responder a los ya plantedos o realizar cualquier otra actividad contemplada en este módulo QUESTOURnament. </P>
<P align="justify">Esta fecha se comprobar&aacute; al crear el m&oacute;dulo, de manera que si fuese posterior a la <a href="help.php?component=quest&identifier=dateend"">
Fecha de Cierre</a> establecida se mostrar&iacute;a un mensaje de error y no se a&ntilde;adir&iacute;a el m&oacute;dulo QUESTOURnament que se est&aacute; intentando crear. </P>';
$string['datestartevent'] = 'Inicio del QUESTOURnament "{$a}"';
$string['datestartsubmissionevent'] = 'Inicio del Desafío: "{$a}"';
$string['datestr'] = '%d/%m/%y<br />%H:%M';
$string['datestrmodel'] = '%%d/%%m/%%y &nbsp;&nbsp;%%H:%%M';
$string['deadline'] = 'Fecha límite';
$string['deadlineis'] = 'La fecha límite es {$a}';
$string['delete'] = 'Borrar';
$string['deletechallenge'] = 'El desafío ha sido borrado';
$string['deleting'] = 'Borrando';
$string['description'] = 'Descripción';
$string['detailsofassessment'] = 'Detalles de valoración';
$string['difficultyAttainable'] = 'Asequible';
$string['difficultyEasy'] = 'Fácil';
$string['difficultyHard'] = 'Difícil';
$string['difficultyVeryHard'] = 'Muy difícil';
$string['disagreewiththisassessment'] = 'Discrepar de esta valoración';
$string['displayoffinalgrades'] = 'Presentar las Calificaciones Finales';
$string['dontshowgrades'] = 'No mostrar las calificaciones';
$string['doyouwantparticularform'] = '¿Quiere particularizar el formulario de evaluación?';
$string['edit'] = 'Editar';
$string['editacomment'] = 'Editar un Comentario';
$string['editelementsanswer'] = 'Editar Elementos de Valoración de Respuestas';
$string['editelementsautor'] = 'Editar Elementos de Valoración de Autores';
$string['editingassessmentelements'] = 'Editando elementos de valoración';
$string['editingassessmentelementsofautors'] = 'Editando Elementos de Valoración de Autores';
$string['element'] = 'Elemento';
$string['elements'] = 'Elementos de Calificaci&oacute;n';
$string['elements_help'] = '<P align="justify">Para calificar una respuesta enviada a un desafío se utilizarán una serie de &quot;Elementos de evaluación&quot;. Cada elemento debe cubrir un aspecto particular a evaluar en las respuestas enviadas y su número dependerá del tamaño y complejidad del desafío propuesto. Los elementos tendrán las siguientes características:
<div align="justify">
  <OL>
      <li>La DESCRIPCIÓN del elemento de evaluación. Debería establecer claramente qué aspecto de la tarea se está evaluando. Si la evaluación es cualitativa, será útil dar detalles de qué se considera excelente, promedio, etc.
      y pobre. </li>
      <li>La ESCALA del elemento de evaluación. Existen una serie de escalas predefinidas, que van desde una escala simple SÍ/NO, hasta una escala de porcentaje total. Cada elemento de evaluación tiene su propia escala, la cuál debería elegirse para que pudiera ajustarse a todas las variaciones posibles de ese elemento. No obstante, debe tenerse en cuenta que la escala NO determina la importancia del elemento cuando se calcula la calificación final: por ejemplo, un elemento con una escala de dos puntos tiene la misma &quot;influencia&quot; en la calificación final que otro elemento que use una escala de 100 puntos, siempre que los respectivos elementos tengan el mismo <i>peso</i> o factor de ponderación.</li>
      <li>El PESO del elemento de evaluación. Por defecto, todos los elementos tienen la misma importancia cuando se calcula la calificación final de la tarea. No obstante, este hecho puede alterarse dando a los elementos más importantes un peso superior a uno, y a los menos importantes un peso inferior a uno. Debe tenerse en cuenta que, modificar el peso NO afecta a la posible calificación máxima de una respuesta, puesto que ese valor queda determinado por la <a href="help.php?component=quest&identifier=maxcalification"">M&aacute;xima Puntuaci&oacute;n</a> establecida para el desafío para el cuál se envía la respuesta y por el instante en el que se envía dicha respuesta.
      </li>
  </OL>
<P align="justify">El sistema proporciona la posibilidad de que el conjunto de elementos de evaluación se personalice para cada desafío añadido en un mismo QUESTOURnament.
</div>';
$string['elementsautor'] = 'Elementos de evaluación para autores';
$string['elementsautor_help'] = '<P align="justify">Para evaluar un desafío se usa un número de &quot;Elementos de calificación&quot;. Cada uno debe cubrir un aspecto particular y su número depende del tamaño y complejidad de la tarea encomendada. Los elementos tienen los siguientes componenetes:
<div align="justify">
  <OL>
      <li>La DESCRIPCIÓN del elemento de evaluación. Debería establecer claramente qué aspecto de la tarea se está evaluando. Si la evaluación es cualitativa, será útil dar detalles de qué se considera excelente, promedio, etc.
      y pobre. </li>
      <li>La ESCALA del elemento de evaluación. Existen una serie de escalas predefinidas, que van desde una escala simple SÍ/NO, hasta una escala de porcentaje total. Cada elemento de evaluación tiene su propia escala, la cuál debería elegirse para que pudiera ajustarse a todas las variaciones posibles de ese elemento. No obstante, debe tenerse en cuenta que la escala NO determina la importancia del elemento cuando se calcula la calificación final: por ejemplo, un elemento con una escala de dos puntos tiene la misma &quot;influencia&quot; en la calificación final que otro elemento que use una escala de 100 puntos, siempre que los respectivos elementos tengan el mismo <i>peso</i> o factor de ponderación.</li>
      <li>El PESO del elemento de evaluación. Por defecto, todos los elementos tienen la misma importancia cuando se calcula la calificación final de la tarea. No obstante, este hecho puede alterarse dando a los elementos más importantes un peso superior a uno, y a los menos importantes un peso inferior a uno. Debe tenerse en cuenta que, modificar el peso NO afecta a la posible calificación máxima de un desafío, puesto que ese valor queda determinado por la <a href="help.php?component=quest&identifier=maxcalification"">M&aacute;xima Puntuaci&oacute;n</a> establecida para el desafío para el cuál se envía la respuesta y por el instante en el que se envía dicha respuesta.
      </li>
  </OL>
</div>';
$string['elementweight'] = 'Peso del elemento';
$string['emailaddsubmission'] = 'Hola, {$a->firstname}.
Se ha añadido un nuevo Desafío en
\'{$a->sitename}\' en el módulo QUESTOURnament \'{$a->name}\' cuyo nombre es \'{$a->title}\'.
Para acceder al nuevo Desafío haga clic aquí:
<a href="{$a->link}">{$a->link}</a>';
$string['emailaddsubmissionsubject'] = 'Moodle. Desafío añadido en Módulo QUESTOURnament';
$string['emailansweradd'] = 'Hola, {$a->firstname}.
Se ha añadido una respuesta en
\'{$a->sitename}\' en el módulo QUESTOURnament \'{$a->name}\' del Desafío \'{$a->title}\' cuyo nombre es \'{$a->secondname}\'.
Para acceder a la respuesta en cuestión haga clic aquí:
<a href="{$a->link}">{$a->link}</a>';
$string['emailansweraddsubject'] = 'Moodle. Respuesta Añadida en Módulo QUESTOURnament';
$string['emailanswerdelete'] = 'Hola, {$a->firstname}.
Se ha eliminado una respuesta en
\'{$a->sitename}\' en el módulo QUESTOURnament \'{$a->name}\' del Desafío \'{$a->title}\' cuyo nombre era \'{$a->secondname}\'.
Para acceder al Desafío en cuestión haga clic aquí:
<a href="{$a->link}">{$a->link}</a>';
$string['emailanswerdeletesubject'] = 'Moodle. Respuesta Eliminada en Módulo QUESTOURnament';
$string['emailapprobe'] = 'Hola, {$a->firstname}.
Se ha añadido un nuevo Desafío en
\'{$a->sitename}\' en el módulo QUESTOURnament \'{$a->name}\' cuyo nombre es \'{$a->title}\'.
Para acceder al nuevo Desafío haga clic aquí:
<a href="{$a->link}">{$a->link}</a>';
$string['emailapprobesubject'] = 'Moodle. Desafío añadido en Módulo QUESTOURnament';
$string['emailassessment'] = 'Hola, {$a->firstname}.
Se ha evaluado una respuesta en
\'{$a->sitename}\' en el módulo QUESTOURnament \'{$a->name}\' del Desafío \'{$a->title}\' cuyo nombre era \'{$a->secondname}\'.
Para acceder a la evaluación en cuestión haga clic aquí:
<a href="{$a->link}">{$a->link}</a>';
$string['emailassessmentautor'] = 'Hola, {$a->firstname}.
Se ha evaluado un Desafío en
\'{$a->sitename}\' en el módulo QUESTOURnament \'{$a->name}\' cuyo nombre es \'{$a->title}\'.
Para acceder a la evaluación en cuestión haga clic aquí:
<a href="{$a->link}">{$a->link}</a>';
$string['emailassessmentautorsubject'] = 'Moodle. Desafío Evaluado en Módulo QUESTOURnament';
$string['emailassessmentsubject'] = 'Moodle. Respuesta Evaluada en Módulo QUESTOURnament';
$string['emailchallenge_start'] = 'Hola, {$a->firstname}. Ha empezado el Desafío  <b>\'{$a->title}\'</b>
 en la actividad QUESTOURnament \'{$a->name}\'. (En \'{$a->sitename}\'.)
Para acceder al sitio donde se encuentra el Desafío modificado haga clic aquí:
<a href="{$a->link}">{$a->link}</a>';
$string['emailchallenge_startsubject'] = 'Moodle: Inicio de Desafío de QUESTOURnament';
$string['emailchallengeupdate'] = 'Hola, {$a->firstname}.
Se han realizado la modificación de un Desafío en
\'{$a->sitename}\' en el módulo QUESTOURnament \'{$a->name}\' cuyo nombre es \'{$a->title}\'.
Para acceder al sitio donde se encuentra el Desafío modificado haga clic aquí:
<a href="{$a->link}">{$a->link}</a>';
$string['emailchallengeupdatesubject'] = 'Moodle: Modificación en Desafío de Módulo QUESTOURnament';
$string['emaildeletesubmission'] = 'Hola, {$a->firstname}.
Se ha eliminado un Desafío en
\'{$a->sitename}\' en el módulo QUESTOURnament \'{$a->name}\' cuyo nombre es \'{$a->title}\'.
Para acceder al sitio donde se encuentraba el Desafío haga clic aquí:
<a href="{$a->link}">{$a->link}</a>';
$string['emaildeletesubmissionsubject'] = 'Moodle. Desafío Borrado de Módulo QUESTOURnament';
$string['emailevaluatecomment'] = 'Hola, {$a->firstname}.
Se ha empleado el mecanismo de reclamaciones en la evaluación de una respuesta en
\'{$a->sitename}\' en el módulo QUESTOURnament \'{$a->name}\' Desafío \'{$a->title}\' respuesta \'{$a->secondname}\'.
Para acceder a esta respuesta haga clic aquí:
<a href="{$a->link}">{$a->link}</a>';
$string['emailevaluatecommentsubject'] = 'Moodle. Reclamación de Evaluación en Módulo QUESTOURnament';
$string['emailmodifanswer'] = 'Hola, {$a->firstname}.
Se ha modificado una respuesta en
\'{$a->sitename}\' en el módulo QUESTOURnament \'{$a->name}\' del Desafío \'{$a->title}\' cuyo nombre es \'{$a->secondname}\'.
Para acceder a la respuesta en cuestión haga clic aquí:
<a href="{$a->link}">{$a->link}</a>';
$string['emailmodifanswersubject'] = 'Moodle. Respuesta Modificada en Módulo QUESTOURnament';
$string['emailsave'] = 'Hola, {$a->firstname}.
Se han realizado cambios en un Desafío en
\'{$a->sitename}\' en el módulo QUESTOURnament \'{$a->name}\' cuyo nombre es \'{$a->title}\'.
Para acceder al sitio donde se encuentra el Desafío modificado haga clic aquí:
<a href="{$a->link}">{$a->link}</a>';
$string['emailsavesubject'] = 'Moodle. Cambios en Desafío de Módulo QUESTOURnament';
$string['emailtagline'] = 'Este email es una copia de un mensaje que se envió el \\"{$a}\\"';
$string['enterpassword'] = 'Introducir Contraseña:';
$string['enterteam'] = 'Introducir Equipo';
$string['evaluate'] = 'Evaluar';
$string['evaluation_pending'] = 'Sin evaluar';
$string['excellent'] = 'Excelente';
$string['exponential'] = 'Exponencial';
$string['feedbackgoeshere'] = 'La respuesta va aquí';
$string['firstname'] = 'Nombre';
$string['generalcomment'] = 'Comentario General';
$string['good'] = 'Bueno';
$string['grade'] = 'Calificación';
$string['gradeassessment'] = 'Calificar la valoración';
$string['gradeautor'] = 'Calificación del Autor';
$string['graded'] = 'Calificada';
$string['gradedbyteacher'] = 'Calificada por {$a}';
$string['gradeforassessments'] = 'Calificación por valoraciones';
$string['gradeofsubmission'] = 'Calificación del envío: {$a}';
$string['grading'] = 'Evaluar Respuesta';
$string['grading_help'] = '<P align="justify">Esta página permite a los profesores evaluar una respuesta enviada. La calificaci&oacute;n asignada deberá depender de c&oacute;mo se ajuste la respuesta a lo exigido en el desaf&iacute;o correspondiente.</P>

<P align="justify">Para facilitar la valoración de la respuesta se utilizarán una serie de elementos de evaluación de forma que cada uno cubra un aspecto particular a valorar en la respuesta. Para cada elemento de evaluación será preciso:
<div align="justify">
  <OL>
<LI>Introducir una calificaci&oacute;n haciendo clic en el radio bot&oacute;n apropiado o seleccionando un n&uacute;mero en el men&uacute; desplegable que se presente, etc., lo cuál dependerá de la escala utilizada para ese elemento de evaluación.
<LI>Introducir una explicaci&oacute;n de por qu&eacute; se asigna esa calificaci&oacute;n. Si considera que la raz&oacute;n es obvia, puede dejar esa casilla en blanco. Tenga en cuenta, sin embargo, que la persona cuyo trabajo est&aacute; evaluando puede efectuar una reclamación sobre la calificación asignada.
  </OL>
</div>

<P align="justify">Asimismo es posible realizar un comentario general sobre el trabajo valorado. &Eacute;ste comentario debe ser respetuoso y constructivo. Las calificaciones y comentarios realizados se mostrar&aacute; al autor de la respuesta y a todos los alumnos una vez que el desaf&iacute;o se cierre.

<P align="justify">El profesor o el autor del desafío podrá modificar manualmente la calificación global, en caso de que desee hacer ajustes sobre la calculada de forma automática.
<P align="justify">La m&aacute;xima calificaci&oacute;n posible para el autor de la respuesta correcta ser&aacute; la puntuaci&oacute;n alcanzada por el desaf&iacute;o en el instante en el que se envío dicha respuesta.';
$string['gradingcharacteristics'] = 'Características de calificación';
$string['gradingstrategy'] = 'Estrategia de Calificación';
$string['gradingstrategy_help'] = '<P align="justify">La estrategia de evaluación utilizada para evaluar las respuestas enviadas a los desafíos planteados en un módulo QUESTOURnament es acumulativa.

<P align="justify">Esto significa que en la calificación de cada evaluación se utiliza un número de &quot;elementos de evaluación&quot;, debiendo cada uno de ellos cubrir un aspecto particular de la tarea a evaluar. El número de elementos de evaluación dependerá del tamaño y complejidad de la tarea. Los elementos de evaluación tienen las siguientes características:

    <div align="justify">
      <OL>
      <li>La DESCRIPCIÓN del elemento de evaluación. Debería establecer claramente qué aspecto de la tarea se está evaluando. Si la evaluación es cualitativa, será útil dar detalles de qué se considera excelente, promedio, etc. </li>
      <li>La ESCALA del elemento de evaluación. Existen una serie de escalas predefinidas, que van desde una escala simple SÍ/NO, hasta una escala de porcentaje total. Cada elemento de evaluación tiene su propia escala, la cuál debería elegirse para que pudiera ajustarse a todas las variaciones posibles de ese elemento. No obstante, debe tenerse en cuenta que la escala NO determina la importancia del elemento cuando se calcula la calificación final: por ejemplo, un elemento con una escala de dos puntos tiene la misma &quot;influencia&quot; en la calificación final que otro elemento que use una escala de 100 puntos, siempre que los respectivos elementos tengan el mismo <i>peso</i> o factor de ponderación.</li>
      <li>El PESO del elemento de evaluación. Por defecto, todos los elementos tienen la misma importancia cuando se calcula la calificación final de la tarea. No obstante, este hecho puede alterarse dando a los elementos más importantes un peso superior a uno, y a los menos importantes un peso inferior a uno. Debe tenerse en cuenta que, modificar el peso NO afecta a la posible calificación máxima de una respuesta, puesto que ese valor queda determinado por la <a href="help.php?component=quest&identifier=maxcalification"">M&aacute;xima Puntuaci&oacute;n</a> establecida para el desafío para el cuál se envía la respuesta y por el instante en el que se envía dicha respuesta.
      </li>
      </OL>
    </div>';
$string['gradingstrategyautor'] = 'Estrategia de Calificación para Autores';
$string['gradingstrategyautor_help'] = '<P align="justify">La estrategia de evaluación utilizada para evaluar los desafíos planteados en un módulo QUESTOURnament es acumulativa.

<P align="justify">Esto significa que en la calificación de cada evaluación se utiliza un número de &quot;elementos de evaluación&quot;, debiendo cada uno de ellos cubrir un aspecto particular de la tarea a evaluar. El número de elementos de evaluación dependerá del tamaño y complejidad de la tarea. Los elementos de evaluación tienen las siguientes características:

    <div align="justify">
      <OL>
      <li>La DESCRIPCIÓN del elemento de evaluación. Debería establecer claramente qué aspecto de la tarea se está evaluando. Si la evaluación es cualitativa, será útil dar detalles de qué se considera excelente, promedio, etc. </li>
      <li>La ESCALA del elemento de evaluación. Existen una serie de escalas predefinidas, que van desde una escala simple SÍ/NO, hasta una escala de porcentaje total. Cada elemento de evaluación tiene su propia escala, la cuál debería elegirse para que pudiera ajustarse a todas las variaciones posibles de ese elemento. No obstante, debe tenerse en cuenta que la escala NO determina la importancia del elemento cuando se calcula la calificación final: por ejemplo, un elemento con una escala de dos puntos tiene la misma &quot;influencia&quot; en la calificación final que otro elemento que use una escala de 100 puntos, siempre que los respectivos elementos tengan el mismo <i>peso</i> o factor de ponderación.</li>
      <li>El PESO del elemento de evaluación. Por defecto, todos los elementos tienen la misma importancia cuando se calcula la calificación final de la tarea. No obstante, este hecho puede alterarse dando a los elementos más importantes un peso superior a uno, y a los menos importantes un peso inferior a uno. Debe tenerse en cuenta que, modificar el peso NO afecta a la posible calificación máxima de una respuesta, puesto que ese valor queda determinado por la <a href="help.php?component=quest&identifier=maxcalification"">M&aacute;xima Puntuaci&oacute;n</a> establecida para el desafío para el cuál se envía la respuesta y por el instante en el que se envía dicha respuesta.
      </li>
      </OL>
    </div>';
$string['groupmode'] = 'Modo Grupo';
$string['groupmode_help'] = '<P align="justify">El modo de agrupación puede escogerse entre las siguientes opciones:</P>
<div align="justify">
  <ul>
    <li><strong>Sin grupos</strong>: No hay grupos, todos los alumnos forman parte de un único gran grupo.</li>
      <li><strong>Grupos separados</strong>: Cada alumno sólo puede ver el grupo al que él pertenece, el resto de grupos y los alumnos que los componen son invisibles. </li>
      <li><strong>Grupos visibles</strong>: Cada alumno trabaja dentro de su grupo, pero también puede ver el resto de grupos y los alumnos que los componen. </li>
  </ul>
</div>

<P align="justify">El modo de agrupación puede definirse a dos niveles:</P>

<div align="justify">
  <ul>
    <li><strong>Nivel Curso</strong>: El modo de agrupación definido a nivel de curso prevalece por defecto para todas las actividades definidas dentro de ese curso.</li>
      <li><strong>Nivel Actividad</strong>: Para toda actividad que soporte grupos se puede definir su propio modo de agrupación. No obstante, si el curso está configurado como "forzar modo de grupo" entonces no se tendrá en cuenta la configuración del modo de agrupación realizada a nivel de actividad. </li>
  </ul>
</div>';
$string['incorrect'] = 'Incorrecto';
$string['individualcalification'] = 'Puntuación individual';
$string['individualranking'] = 'Ver Ranking (individual)';
$string['individualranking_help'] = '<P align="justify">Esta opción muestra la clasificación de los participantes del QUESTOURnament que pertenecen al mismo grupo.</P>
<P align="justify">Se muestran los siguientes parámetros:</P>
<div align="justify">
  <ul>
    <li><strong>Foto</strong>: imagen del estudiante introducida por él mismo en su perfil.</li>
      <li><strong>Nombre/Apellido</strong>: nombre y apellido introducidos por el estudiante cuando se registró en el sistema.</li>
      <li><strong>Respuestas</strong>: número de respuestas presentadas por un alumno en este  QUESTOURnament.</li>
      <li><strong>Respuestas evaluadas</strong>: número de respuestas evaluadas de todas las presentadas por este estudiante en el QUESTOURnament.</li>
      <li><strong>Número de desafíos</strong>: número de desafíos propuestos por un estudiante en este QUESTOURnament.</li>
      <li><strong>Desafíos evaluados</strong>: número de desafíos evaluados de todos los propuestos por este estudiante en el QUESTOURnament.</li>
      <li><strong>Puntuación de los Desafío</strong>: puntuación total obtenida por el estudiante correspondiente a la valoración realizada por los profesores de los desafíos propuestos por él.</li>
      <li><strong>Puntuación de las respuestas</strong>: puntuación total obtenida por el alumno correspondiente a la valoración de las respuestas presentadas por él.</li>
      <li><strong>Puntuación del equipo</strong>: este parámetro sólo se muestra cuando se selecciona la opción <a href="help.php?component=quest&identifier=allowteams"">Permitir equipos</a> en el QUESTOURnament. Es el porcentaje, establecido por la opción <a href="help.php?component=quest&identifier=teamporcent"">Porcentaje de puntuación del equipo</a>, de la puntuación total obtenida por el equipo al que pertenece el estudiante, que se sumará a su puntuación individual.</li>
      <li><strong>Puntuación</strong>: Es la puntuación total individual del estudiante, incorporando las puntuaciones de sus desafíos y respuestas y un porcentaje de la puntuación de su equipo si fuera necesario.</li>
  </ul>
    <P>Hay que destacar que los profesores tienen acceso a toda la información indicada anteriormente, mientras que los alumnos sólo pueden ver esa información si el profesor que definió el QUESTOURnament seleccionó la opción <a href="help.php?component=quest&identifier=showauthoringdetails"">Mostrar detalles de autoría a los estudiantes en las clasificaciones</a>. En cualquier otro caso, los estudiantes no tendrán acceso a estos datos parciales relacionados con los desafíos propuestos por otros estudiantes.</P>
<P>Por defecto, la clasificación se ordena en función de la puntuación total individual obtenida por cada estudiante, aunque este orden puede modificarse eligiendo otro parámetro de ordenación y pulsando su nombre.</P>
  <P>También es posible acceder al ranking por equipos a través de la opción <a href="help.php?component=quest&identifier=teams"">Ver Resumen por Equipos</a>.</P>
</div>';
$string['initialpoints'] = 'Puntuaci&oacute;n Inicial';
$string['initialpoints_help'] = '<P align="justify">Este par&aacute;metro permite establecer la puntuaci&oacute;n inicial del desaf&iacute;o que se va a añadir. </P>
<P align="justify">No obstante, el profesor podr&aacute; modificar este valor desde la m$iacute;nima puntuaci&oacute;n hasta la m&aacute;xima puntuaci&oacute;n fijada para este m&oacute;dulo QUESTOURnament. </P>
<P align="justify">Si al a&ntilde;adir o modificar un desafío en un m&oacute;dulo QUESTOURnament la puntuaci&oacute;n inicial fuese superior a la <a href="help.php?component=quest&identifier=maxcalification">M&aacute;xima Puntuaci&oacute;n</a> establecida para dicho módulo, se tomar&iacute;a como valor de la puntuaci&oacute;n inicial el de la m&aacute;xima puntuaci&oacute;n establecida.</P>
<P align="justify">Finalmente destacar que el valor de este parámetro puede variar de un desaf&iacute;o a otro en un mismo módulo QUESTOURnament.</P>';
$string['inserterror'] = 'No se ha podido insertar un registro en la tabla {$a} de la base de datos.';
$string['introattachments'] = 'Ficheros adjuntos';
$string['introattachments_help'] = 'Ficheros adjuntos para complementar el enunciado del questournament. Se mostrarán debajo del texto del enunciado.';
$string['introductiontothechallenge'] = 'Descripción del desafío';
$string['invaliddates'] = 'Las Fechas no son Válidas. Deben estar entre {$a->questdatestart} y {$a->questdateend}.';
$string['invalidtext'] = 'El Campo de Texto está Vacío';
$string['lastname'] = 'Apellido';
$string['legend'] = 'A (B) [C] {$a} <br>A: Número de Respuestas. B: Número de Respuestas Correctas. <br>C: Número de Respuestas sin Evaluar. {$a} Indica si he Respondido al Desafío<br>';
$string['linear'] = 'Lineal';
$string['maxcalification'] = 'M&aacute;xima Puntuaci&oacute;n';
$string['maxcalification_help'] = '<P align="justify">Este par&aacute;metro permite fijar la m&aacute;xima puntuaci&oacute;n que podr&aacute; alcanzar cada uno de los desaf&iacute;os propuestos, y por lo tanto la m&aacute;xima calificaci&oacute;n que se podr&aacute; obtener en un respuesta enviada.</P>
<P align="justify"> Este valor puede ser diferente para cada uno de los desaf&iacute;os, no pudiendo sin embargo superar la puntuación establecida como máxima para el módulo QUESTOURnament al que pertenezcan. </P>';
$string['maximumsize'] = 'Tamaño máximo';
$string['mincalification'] = 'Puntuación mínima';
$string['mincalification_help'] = '<P align="justify">Este par&aacute;metro permite fijar la mínima puntuaci&oacute;n que podr&aacute; alcanzar cada uno de los desaf&iacute;os propuestos, y por lo tanto la mínima calificaci&oacute;n que se podr&aacute; obtener en un respuesta enviada.</P>
<P align="justify"> Este valor puede ser diferente para cada uno de los desaf&iacute;os, no pudiendo sin embargo ser inferior de la puntuación establecida como mínima para el módulo QUESTOURnament al que pertenezcan. </P>';
$string['modif'] = 'Modificar';
$string['modifanswersubmission'] = 'Modificar Respuesta para desafío {$a}';
$string['modified'] = 'modificada';
$string['modifsubmission'] = 'Modificar Desaf&iacute;o';
$string['modifsubmission_help'] = '<P align="justify">Esta opci&oacute;n permite a un profesor modificar un desaf&iacute;o propuesto por un alumno. Los alumnos podr&aacute;n modificar los desaf&iacute;os que hayan propuesto, siempre y cuando no hayan sido aprobados todav&iacute;a por el profesor. </P>
<P align="justify">La información que se presenta sobre el desafío y que puede modificarse es la siguiente:</P>
<ul>
   <li><strong>T&iacute;tulo</strong>: nombre con el se designa el desaf&iacute;o, se recomienda que no incluya el nombre del autor, para conservar el anonimato sobre la autoría del desaf&iacute;o, en caso contrario podr&aacute; ser rechazado o modificado por el profesor.</li>
      <li><strong>Descripci&oacute;n</strong>: es el cuerpo del desaf&iacute;o, donde se explica la problem&aacute;tica y los aspectos que debe incluir la respuesta. Debe ser clara y completa. </li>
      <li><strong>Puntuaci&oacute;n M&aacute;xima</strong>: es la m&aacute;xima puntuaci&oacute;n que podr&aacute; alcanzar el desaf&iacute;o, viene limitada por la <a href="help.php?component=quest&identifier=maxcalification"">M&aacute;xima Puntuaci&oacute;n</a> del m&oacute;dulo QUESTOURnament al que pertenece.</li>
      <li><strong>Puntuaci&oacute;n Inicia</strong>l: es la puntuaci&oacute;n con la que parte el desaf&iacute;o en el instante de su comienzo, la cuál irá evolucionando a medida que se desarrolle el concurso.</li>
      <li><strong>Fecha de Comienzo</strong>: establece la fecha en que se abre el desaf&iacute;o, este par&aacute;metro s&oacute;lo es configurable por parte de los profesores. Cuando el desafío lo crea un alumno, se toma como fecha de comienzo el instante de creaci&oacute;n del desaf&iacute;o.</li>
      <li><strong>Fecha de Cierre</strong>: establece la fecha en la que se cierra el desaf&iacute;o, a partir de esta fecha no se podr&aacute; responder al desaf&iacute;o, aunque los autores del desaf&iacute;o y los profesores s&iacute; que podr&aacute;n evaluar las respuestas realizadas hasta la fecha. No puede ser posterior a la <a href="help.php?component=quest&identifier=dateend"">Fecha de Cierre</a> establecida para el m&oacute;dulo QUESTOURnament. </li>
      <li><strong>Anexos</strong>: se especificarán los anexos correspondientes en caso de haberse habilitado el env&iacute;o de anexos al crear el módulo QUESTOURnament. También se permite eliminar los anexos inclu&iacute;dos en el desaf&iacute;o hasta este momento.</li>

  <li><strong>Comentarios para el Autor</strong>: en este campo se incluir&aacute;n las sugerencias o los comentarios que el profesor quiera realizar al alumno, los cuáles s&oacute;lo estarán visibles para el autor del desaf&iacute;o y para el resto de profesores.</li>
  <li><strong>Comentarios para los Alumnos</strong>: en este campo se incluir&aacute;n los comentarios que el profesor quiera realizar a los alumnos acerca del desaf&iacute;o, estos comentarios estarán visibles para todos los participantes en el m&oacute;dulo QUESTOURnament. </li>
</ul>';
$string['modulehiddenerror'] = 'La actividad está oculta.';
$string['modulename'] = 'QUESTOURnament';
$string['modulename_help'] = '<UL>
<p align="justify">El módulo QUESTOURnament incentiva el trabajo del alumno, tanto de manera individual como en equipo.</p>
<p align="justify">Este m&oacute;dulo ofrece la posibilidad de responder a desaf&iacute;os o preguntas planteados por el profesor o los alumnos a lo largo de un periodo de tiempo predeterminado. Tanto las respuestas como los desaf&iacute;os enviados por los alumnos son evaluados. Estas evaluaciones podr&aacute;n ser realizadas tanto por los profesores como por los alumnos que hayan propuesto desafíos. De estas evaluaciones depender&aacute; la nota final de cada alumno. Esta nota final y su evoluci&oacute;n a medida que se desarrolla el concurso podr&aacute; ser visualizada en cualquier momento por los alumnos accediendo a la tabla de clasificación del concurso que se configura dinámicamente a partir de dichas notas finales. </p>
<p align="justify">Para la evaluaci&oacute;n de los desafíos propuestos, así como de las respuestas enviadas se definen sendos formularios de evaluaci&oacute;n, con elmentos de evaluaci&oacute;n y sus correspondientes pesos, que permitir&aacute;n determinar la puntuaci&oacute;n obtenida. </p>
</UL>';
$string['modulenameplural'] = 'QUESTOURnaments';
$string['myanswers'] = 'Mis Respuestas';
$string['myplace'] = 'Mi Sitio';
$string['myplace_help'] = '<P align="justify">Esta página muestra la informaci&oacute;n correspondiente a la actividad realizada por cada uno de los participantes del m&oacute;dulo QUESTOURnament.</P>
<P align="justify">La información presentada se divide en varias secciones:</P>
<ul>
  <li>
    <div align="justify"><strong>Mis Desaf&iacute;os </strong>: muestra una lista con todos los desaf&iacute;os que han sido a&ntilde;adidos por el usuario que visualiza esta p&aacute;gina. Para cada desafío se presenta su puntuaci&oacute;n actual (m&aacute;xima puntuaci&oacute;n que podr&aacute; obtener una respuesta enviada en ese instante), la fase o estado en que se encuentra, el n&uacute;mero de respuestas realizadas y número de ellas que son correctas, las fechas de inicio y de cierre y su t&iacute;tulo. Pulsando en el t&iacute;tulo se accede a la descripci&oacute;n completa del desaf&iacute;o. El profesor podr&aacute; modificar o borrar un desaf&iacute;o cualquiera en todo momento, mientras un alumno autor s&oacute;lo podr&aacute; hacerlo hasta que el desafío que ha propuesto sea aprobado por el profesor. </div>
  </li>
  <li><strong>Mis Respuestas</strong>: muestra una tabla con todas las respuestas que ha enviado el usuario que visualiza esta página. Para cada respuesta se presenta la fecha del env&iacute;o, las acciones que se pueden realizar (Ver Evaluación, etc.), la puntuaci&oacute;n obtenida y su t&iacute;tulo. Una respuesta podr&aacute;n ser modificada o borrada por el profesor en todo momento, mientras que un alumno s&oacute;lo podr&aacute; hacerlo hasta que la respuesta que ha enviado sea evaluada. </li>
  <li><strong>Mi Clasificaci&oacute;n</strong>: muestra las distintas puntuaciones obtenidas por un alumno en el m&oacute;dulo QUESTOURnament, ya sean por las respuestas evaluadas o por los desaf&iacute;os a&ntilde;adidos. Esta secci&oacute;n no se presentará si el usuario que accede es un profesor.</li>
  <li><strong>Mi Clasificaci&oacute;n por Equipos</strong>: muestra las puntuaciones obtenidas por el equipo al que pertenece el alumno. Esta opci&oacute;n s&oacute;lo se mostrará si se trata de un m&oacute;dulo QUEST que tenga habilitada la opci&oacute;n de <a href="help.php?component=quest&identifier=allowteams"">Permitir Equipos</a>. Esta secci&oacute;n tampoco se presentará si el usuario que accede es un profesor.</li>
</ul>
<p>A trav&eacute;s de esta opci&oacute;n tambi&eacute;n podr&aacute;n realizarse distintas acciones como <a href="help.php?component=quest&identifier=submitchallengeassignment"">A&ntilde;adir Desaf&iacute;o </a>, <a href="help.php?component=quest&identifier=global"">Ver Clasificaci&oacute;n Total</a>
o <a href="help.php?component=quest&identifier=changeteamteacher"">Gesti&oacute;n de Equipos</a>, &eacute;sta &uacute;ltima s&oacute;lo la podr&aacute;n llevar a cabo los profesores. </p>';
$string['nanswers'] = 'Nº Resp.';
$string['nanswersassessment'] = 'Nº Resp. Eval.';
$string['nanswerscorrect'] = 'Número de Respuestas correctas';
$string['nanswerscorrectshort'] = 'Correct';
$string['nanswersshort'] = 'Nº Resp.';
$string['nanswerswhithoutassess'] = 'Sin Eval.';
$string['ncomponents'] = 'N&uacute;mero de Componentes';
$string['ncomponents_help'] = '<P align="justify">Este par&aacute;metro fija el n&uacute;mero m&aacute;ximo de componentes que puede tener cada equipo. </P>
<P align="justify">Si un alumno intenta inscribirse en un equipo que ya est&eacute; completo, se le avisar&aacute; de ello y tendr&aacute; que darse de alta en otro equipo. </P>';
$string['ncomponentsteam'] = 'Nº Máximo de Componentes por Equipo';
$string['need_to_be_editor'] = '(Necesita ser un editor para añadir desafíos. Solicite los permisos al profesor.)';
$string['nelements'] = 'Número de Elementos de Evaluación';
$string['nelements_help'] = '<P align="justify">Este número indica la cantidad de elementos de evaluación que se utilizarán para evaluar las respuestas enviadas a los desafíos planteados. Dicho número dependerá del tamaño y complejidad del desafío. Existe además un campo para realizar comentarios generales sobre la evaluación realizada. </P>';
$string['nelementsautor'] = 'Número de Elementos de Evaluación para Autores';
$string['nelementsautor_help'] = '<P align="justify">Este número indica la cantidad de elementos de evaluación que se utilizarán para evaluar la tarea realizada por los autores de desafíos. Dicho número dependerá del tamaño y complejidad de la tarea. Existe además un campo para realizar comentarios generales sobre la evaluación realizada. </P>';
$string['newattachment'] = 'Nuevo Anexo';
$string['newcalification'] = 'Nueva Calificación';
$string['newteam'] = 'Nuevo Equipo';
$string['nmaxanswers'] = 'N&uacute;mero M&aacute;ximo de Respuestas';
$string['nmaxanswers_help'] = '<P>Este par&aacute;metro establece el n&uacute;mero m&aacute;ximo de respuestas correctas que se admiten en un desaf&iacute;o antes de que el mismo se cierre. </P>
<P>Una vez alcanzado dicho n&uacute;mero de respuestas calificadas como correctas, el desaf&iacute;o se cerrar&aacute;, de manera que no se admitir&aacute;n m&aacute;s respuestas a dicho desaf&iacute;o independientemente de la puntuaci&oacute;n actual del desaf&iacute;o o de que haya llegado o no su <a href="help.php?component=quest&identifier=dateend"">Fecha de Cierre</a></P>';
$string['noanswers'] = 'No hay Respuestas';
$string['noassessments'] = 'No hay Evaluaciones';
$string['noassessmentsdone'] = 'No se han hecho valoraciones';
$string['noattachments'] = 'No Hay Anexos';
$string['nocapabilityaddchallenge'] = 'No tienes permisos suficientes para añadir un nuevo desafío';
$string['nograde'] = 'No hay Calificación';
$string['nopermissionassessment'] = 'No se puede mostrar la evaluación. Necesita ser el autor del desafío o un profesor.';
$string['notavailable'] = 'No disponible';
$string['noteonassessmentelements'] = 'Tenga en cuenta que la calificación está dividida en una serie de \'Elementos de Valoración\'.<br />
Esto hace la calificación más sencilla y consistente. Como evaluador usted debe añadir estos<br />
Elementos antes de poner a disposición de los estudiantes el Questournament. Esto se consigue<br />
haciendo clic en el Questournament, y si no hay elementos se le pedirá<br />
que los añada. Puede cambiar el número de elementos usando la pantalla de Editar Evaluación de Desafíos,<br />
el elemento en sí puede ser rectificado desde la pantalla &quot;Editar Evaluación de Desafíos&quot;.';
$string['notgraded'] = 'No se ha calificado';
$string['notpermissionsubmission'] = 'No se puede mostrar el Desafío solicitado';
$string['notsubmittedyet'] = 'No hay Desafíos Enviados';
$string['nsubmissions'] = 'Nº Desafíos';
$string['nsubmissionsassessment'] = 'Nº Desafíos Eval.';
$string['numbermaxofanswers'] = 'Número Máximo de Respuestas';
$string['numberofattachments'] = 'Número de Anexos esperados en los Envíos';
$string['numberofattachments_help'] = '<p align="justify">El número introducido aquí determina cuántas cajas para la de subida de archivos se mostrarán cuando un estudiante o profesor realice un env&iacute;o. Este número puede oscilar entre 0 y 5. Normalmente este número será 0 ó 1, pero en ciertos casos puede ser necesario permitir el env&iacute;o de más de un anexo. Si el valor especificado es 0, que es además el valor por defecto para este parámetro, esto indica que no se permite adjuntar anexos en los envíos.</p>
<p align="justify">Si, por ejemplo, el número especificado es 3, y sólo se adjuntan 2 archivos al envío, dicho envío se realiza sin que se muestre ningún mensaje de advertencia. Es decir que, cuando se envía un trabajo se puede adjuntar cualquier número de archivos hasta el máximo permitido.</p>';
$string['of'] = 'de';
$string['oldteam'] = 'Equipo Actual';
$string['password'] = 'Contraseña';
$string['password_help'] = '<p align="justify">Este campo permite introducir la contraseña de acceso para este m&oacute;dulo QUESTOURnament. La contraseña puede tener una longitud máxima de 10 caracteres, y puede modificarse en cualquier momento a lo largo del tiempo de vida de este QUESTOURnament. Seleccionando la opción &quot; <a href="help.php?component=quest&identifier=usepassword"">Usar contraseña</a>&quot; se puede garantizar que los estudiantes deban escribir esta contraseña para acceder a este	m&oacute;dulo QUESTOURnament.</p>';
$string['passwordprotectedquest'] = 'Módulo QUESTOURnament Protegido con Contraseña';
$string['perceivedTeacherDifficultyLevel'] = 'Estimación del profesor de la dificultad';
$string['perceivedTeacherDifficultyLevel_help'] = 'Estimación del profesor de la dificultad del desafío. Se usa para clasificar el desafío. Es un parámetro opcional con fines de investigación docente.';
$string['perceiveddifficultyLevel'] = 'Dificultad';
$string['perceiveddifficultyLevelQuestion'] = '¿Qué dificultad le ha supuesto este desafío?';
$string['permitsubmit'] = 'Permitir Reenvio';
$string['permitviewautors'] = 'Mostrar a los Alumnos los Autores de los Desaf&iacute;os una vez cerrados';
$string['permitviewautors_help'] = '<P align="justify">Si se habilita esta opci&oacute;n, deshabilitada por defecto, se mostrar&aacute;n los autores de los desaf&iacute;os de un m&oacute;dulo QUESTOURnament cuando dichos desaf&iacute;os se hayan cerrado y ya no sea posible enviar más respuestas. </P>
<P align="justify">En caso contrario, los alumnos no conocer&aacute;n nunca la identidad de los autores de los desaf&iacute;os independientemente de cuál sea el estado de los mismos. </P>';
$string['phase'] = 'Fase';
$string['phase1'] = 'Concurso No Comenzado';
$string['phase1answer'] = 'Sin Evaluar';
$string['phase1quest'] = 'Pendiente de Inicio';
$string['phase1short'] = 'Colocar';
$string['phase1submission'] = 'Pendiente de Aprobación';
$string['phase2'] = 'Concurso Abierto';
$string['phase2answer'] = 'Evaluada por Autor';
$string['phase2quest'] = 'En Proceso';
$string['phase2short'] = 'Envíos';
$string['phase2submission'] = 'Pendiente de Inicio';
$string['phase3'] = 'Concurso Cerrado';
$string['phase3answer'] = 'Evaluada por Profesor';
$string['phase3quest'] = 'QUESTOURnament Finalizado';
$string['phase3short'] = 'Ambos';
$string['phase3submission'] = 'Desafío en Proceso';
$string['phase4'] = 'QUESTOURnament  Cerrado.<br> Puntuaciones publicadas';
$string['phase4answer'] = 'Evaluada Correct. por Autor';
$string['phase4short'] = 'Evaluaciones';
$string['phase4submission'] = 'Desafío Cerrado';
$string['phase5'] = 'Cálculo de la calificación final';
$string['phase5answer'] = 'Evaluado como correcto por el profesor';
$string['phase5short'] = 'Cálculo';
$string['phase5submission'] = 'Evaluado. Pendiente de Aprobación';
$string['phase6'] = 'Mostrar la calificación final';
$string['phase6short'] = 'Mostrar calificación';
$string['phase6submission'] = 'Evaluado. Desafío en Proceso';
$string['phase7submission'] = 'Evaluado. Desafío Cerrado';
$string['phase8submission'] = 'Evaluado. Pendiente de Inicio';
$string['picture'] = 'Foto';
$string['pictureof'] = 'Foto de';
$string['pluginadministration'] = 'Administración del Questournament';
$string['points'] = 'Puntuación';
$string['points_help'] = '<strong>Puntuación</strong>: Es la puntuación total individual del estudiante (o del equipo), incorporando sus puntuaciones de desafíos y respuestas y un porcentaje de su puntuación de equipo si fuera necesario.';
$string['pointsanswers'] = 'Punt. Resp.';
$string['pointsanswers_help'] = '<strong>Puntuación de las respuestas</strong>: puntuación total obtenida por el estudiante correspondiente a la valoración de las respuestas presentadas por él.';
$string['pointsmax'] = 'Puntuación máxima';
$string['pointsmax_help'] = 'Este parámetro permite fijar la máxima puntuación que podrá alcanzar este desafío, y por lo tanto la máxima calificación que se podrá obtener en un respuesta enviada.
Este valor puede ser diferente para cada uno de los desafíos. Sin embargo no puede superar la puntuación establecida como máxima para el módulo QUESTOURnament al que pertenezcan.';
$string['pointsmaxsubmission'] = 'Puntuación Máxima Alcanzada';
$string['pointsmin'] = 'Puntuación mínima';
$string['pointsmin_help'] = 'Este parámetro permite fijar la mínima puntuación que podrá alcanzar este desafío, y por lo tanto la mínima calificación cobre la que se calculará la nota de una respuesta enviada.
Este valor puede ser diferente para cada uno de los desafíos. Sin embargo no puede ser inferior que la puntuación establecida como mínima para el módulo QUESTOURnament al que pertenezcan.';
$string['pointssubmission'] = 'Punt. Desafíos';
$string['pointssubmission_help'] = '<strong>Puntuación de los desafíos</strong>: puntuación total obtenida por el alumno correspondiente a la valoración realizada por los profesores de los desafíos propuestos por él.';
$string['pointsteam'] = 'Punt. Equipos';
$string['pointsteam_help'] = '<strong>Puntuación del equipo</strong>: este parámetro sólo se muestra cuando se selecciona la opción <a href="help.php?component=quest&identifier=allowteams"">Permitir equipos</a> en el QUESTOURnament. Es el porcentaje, establecido por la opción Porcentaje de puntuación del equipo, de la puntuación total obtenida por el equipo al que pertenece el alumno, que se sumará a su puntuación individual.';
$string['poor'] = 'Pobre';
$string['porcent'] = 'Porcentaje';
$string['predictedDurationQuestion'] = 'Tiempo estimado para responder a esta pregunta';
$string['predictedDurationQuestion_help'] = 'Tiempo mínimo que el profesor estima necesario para responder a esta pregunta. Se usa para clasificar el desafío. Es un parámetro opcional con fines de investigación docente.';
$string['present'] = 'Presente';
$string['preview'] = 'Vista previa';
$string['processingquest'] = 'Procesando {$a}';
$string['quest:addchallenge'] = 'Añade un nuevo desafío al torneo';
$string['quest:approvechallenge'] = 'Aprobar un desafío propuesto.';
$string['quest:approvegrade'] = 'Aprobar una calificación pendiente.';
$string['quest:attempt'] = 'Enviar una respuesta para un desafío';
$string['quest:deleteattempts'] = 'Borrar las respuestas propias y ajenas';
$string['quest:deletechallengeall'] = 'Eliminar los desafíos propios y ajenos';
$string['quest:deletechallengemine'] = 'Eliminar los propios desafíos';
$string['quest:editattempt'] = 'Editar la respuesta enviada por alguien';
$string['quest:editattemptmine'] = 'Editar la respuesta propia enviada';
$string['quest:editchallengeall'] = 'Editar el desafío presentado por alguien';
$string['quest:editchallengemine'] = 'Editar el propio desafío presentado.';
$string['quest:emailconfirmchallenge'] = 'Recibir una confirmación por correo electrónico del propio desafío del questournament';
$string['quest:emailnotifychallenge'] = 'Recibir notificaciones por correo electrónico de los desafíos del questournament de otras personas';
$string['quest:generateActivityReport'] = 'Actividad';
$string['quest:generateCSVlogs'] = 'Generar informe CSV para:';
$string['quest:generateIPAccessesReport'] = 'Accesos por direcciones IP';
$string['quest:generateLogsReport'] = 'Registros';
$string['quest:grade'] = 'Califica y comenta manualmente los intentos de los estudiantes en una pregunta, y vuelve a calificar los questournaments.';
$string['quest:gradeownchallenge'] = 'Calificar el propio desafío';
$string['quest:ignoretimelimits'] = 'Ignora los plazos.';
$string['quest:manage'] = 'Edita la configuración del questournament, añade y elimina desafíos.';
$string['quest:manageownchallenge'] = 'Gestionar el propio desafío';
$string['quest:notifylocale'] = '<P>Para su configuración regional "<b>{$a->localelang}</b>" el separador decimal es "
<b>{$a->localeconfigdecimal}</b>".
Compruebe que su hoja de cálculo interpreta correctamente este carácter.</P>';
$string['quest:preview'] = 'Vea información detallada y los enlaces de las diferentes partes del QUESTOURnament.';
$string['quest:view'] = 'ver un torneo';
$string['quest:viewotherattemptsowners'] = 'Ver nombres de otros intentos';
$string['quest:viewreports'] = 'Ver los informes de questournament';
$string['questapprovesubmission'] = 'Desafíos Aprobados en QUESTOURnament';
$string['questassessments'] = 'Evaluaciones en QUESTOURnament';
$string['questcomments'] = 'Comentarios del módulo QUESTOURnament';
$string['questgraphYlegend'] = 'Puntuación';
$string['questgraphtitle'] = 'Puntuación Potencial';
$string['quests'] = 'QUESTOURnament';
$string['questsubmitanswer'] = 'Respuestas Enviadas en QUESTOURnament';
$string['questsubmitsubmission'] = 'Desafíos Enviados en QUESTOURnament';
$string['recalificationall'] = 'ReEvaluar Todo';
$string['reevaluate'] = 'Volver a evaluar';
$string['removeelement'] = 'Borrar Elemento';
$string['reply'] = 'Responder';
$string['resetchanges'] = 'Borrar los cambios';
$string['resetquestallanswers'] = 'Borrar todas las respuestas y las puntuaciones.';
$string['responsetochallenge'] = 'Respuesta al desafío';
$string['resume24hours'] = 'Resumen de los mensajes correspondientes a los Desafíos añadidos o modificados en el módulo QUESTOURnament {$a->name} en las últimas 24 horas';
$string['resumeindividual'] = 'Resumen Individual';
$string['resumequest'] = 'Moodle. Resumen Actividad. QUESTOURnament {$a->name}';
$string['resumeteams'] = 'Resumen por Equipos';
$string['returnto'] = 'Volver a';
$string['rubric'] = 'Rúbrica';
$string['save'] = 'Guardar';
$string['savedok'] = 'Guardado correctamente';
$string['savemyassessment'] = 'Guardar mi Valoración';
$string['savemycomment'] = 'Guardar mi Comentario';
$string['savemygrading'] = 'Guardar mi Calificación';
$string['savemysubmission'] = 'Guardar mi Desafío';
$string['scale10'] = 'Puntuación hasta 10';
$string['scale100'] = 'Puntuación hasta 100';
$string['scale20'] = 'Puntuación hasta 20';
$string['scalecorrect'] = 'Escala de 2 puntos Correcto/Incorrecto';
$string['scaleexcellent4'] = 'Escala de 4 puntos Excelente/Muy pobre';
$string['scaleexcellent5'] = 'Escala de 5 puntos Excelente/Muy pobre';
$string['scaleexcellent7'] = 'Escala de 7 puntos Excelente/Muy pobre';
$string['scalegood3'] = 'Escala de 3 puntos Bueno/Pobre';
$string['scalepresent'] = 'Escala de 2 puntos Presente/Ausente';
$string['scaleyes'] = 'Escala de 2 puntos Si/No';
$string['see'] = 'Ver';
$string['seeassessment'] = 'Ver Evaluaci&oacute;n de la Respuesta';
$string['seeassessment_help'] = '<P align="justify">Esta página muestra la evaluaci&oacute;n de una respuesta enviada, de esta forma, si no se est&aacute; de acuerdo con la misma se podr&aacute; reclamar al profesor o al autor del desaf&iacute;o para que la revise, siendo posible indicar el motivo del desacuerdo con la evaluación realizada.
<P align="justify">Además de la calificaci&oacute;n obtenida por el autor de la respuesta, tambi&eacute;n se muestra la m&aacute;xima puntuaci&oacute;n posible por dicha respuesta, que ser&aacute; la puntuaci&oacute;n del desaf&iacute;o en el instante en que se envi&oacute; la repuesta sobre la que se efectúa la reclamación. </P>
<P align="justify">Los profesores y autores de los desaf&iacute;os podr&aacute;n realizar una correcci&oacute;n manual de la calificaci&oacute;n otorgada para considerar aquellos aspectos que haya podido no tener en cuenta el formulario de evaluaci&oacute;n autom&aacute;tica. </P>';
$string['seeassessmentautor'] = 'Ver Evaluaci&oacute;n del Desaf&iacute;o';
$string['seeassessmentautor_help'] = '<P align="justify">Esta página muestra la evaluaci&oacute;n de un desafío propuesto, de esta forma, si no se est&aacute; de acuerdo con la misma se podr&aacute; reclamar al profesor para que la revise, siendo posible indicar el motivo del desacuerdo con la evaluación realizada.
Además de la calificaci&oacute;n asignada por el autor del desaf&iacute;o, tambi&eacute;n se muestra, entre par&eacute;ntesis, la m&aacute;xima puntuaci&oacute;n posible, siendo &eacute;sta la puntuaci&oacute;n que se alcanz&oacute; con la primera respuesta correcta, o en caso de no haberse respondido aún correctamente, la puntuaci&oacute;n inicial. </P>
<P align="justify">Los profesores podr&aacute;n realizar una correcci&oacute;n manual de la calificaci&oacute;n asignada para cubrir aquellos aspectos que haya podido no tener en cuenta el formulario de evaluaci&oacute;n autom&aacute;tica. </P>';
$string['seevaluate'] = 'Ver Evaluación';
$string['select'] = 'Elegir';
$string['selfassessment'] = 'Autoevaluación';
$string['shouldSelectDifficultyLevel'] = 'Debe seleccionar un nivel de dificultad';
$string['showanswer'] = 'Mostrar Respuesta';
$string['showanswers'] = 'Mostrar Respuestas';
$string['showanswersteam'] = 'Mostrar Respuestas Equipo';
$string['showanswersuser'] = 'Mostrar Respuestas Usuario';
$string['showauthoringdetails'] = 'Mostrar a los alumons detalles de Autor en clasificación';
$string['showauthoringdetails_help'] = '<P align="justify">Si se habilita esta opci&oacute;n, deshabilitada por defecto, la tabla de puntuaciones mostrar&aacute; los datos parciales relativos al número de desafíos propuestos y evaluados por cada alumno y por cada equipo, además de la puntuación obtenida por las respuestas enviadas a desafíos propuestos. Debe tenerse en cuenta que esto hace que no se respete el anonimato de los autores de los desafíos, sobre todo si se trata de grupos pequeños y con escasa participación. </P>';
$string['showcalification'] = 'Ver Calificaciones';
$string['showclasifindividual'] = 'Mostrar Clasificaci&oacute;n Individual';
$string['showclasifindividual_help'] = '<P align="justify">Esta opción está habilitada por defecto y permite que se muestre tanto la clasificaci&oacute;n individual de los alumnos como la clasificaci&oacute;n por equipos en caso de tener habilitada la opci&oacute;n de <a href="help.php?component=quest&identifier=allowteams"">Permitir Equipos.</a></P>
<P align="justify">Si la opci&oacute;n de Permitir Equipos no est&aacute; habilitada, sólo tendría sentido el valor por defecto de esta opción que muestra la clasificación individual. </P>';
$string['showdescription'] = 'Mostrar Descripción';
$string['showgrades'] = 'Mostrar Calificaciones';
$string['showresultssection'] = 'Información a mostrar a los estudiantes';
$string['showsubmission'] = 'Mostrar Desafío';
$string['showsubmissions'] = 'Mostrar Desafíos';
$string['showsubmissionsteam'] = 'Mostrar Desafíos Equipo';
$string['showsubmissionsuser'] = 'Ver Desafíos Usuario';
$string['specimenanswer'] = 'Formulario de Muestra de Evaluaci&oacute;n para las Respuestas';
$string['specimenanswer_help'] = '<P align="justify">Esta página muestra el formulario de evaluaci&oacute;n que se emplea en la evaluaci&oacute;n de cada una de las respuestas enviadas a un desafío en un módulo QUESTOURnament. </P>';
$string['specimenassessmentform'] = 'Formulario de Muestra de Valoración';
$string['specimenassessmentformanswer'] = 'Formulario de Muestra de Valoración para las Respuestas';
$string['specimenassessmentformsubmission'] = 'Formulario de Muestra de Valoración para los Desafíos';
$string['specimensubmission'] = 'Formulario de Muestra de Evaluaci&oacute;n para los Desaf&iacute;os';
$string['specimensubmission_help'] = '<P align="justify">Esta página muestra el formulario de evaluaci&oacute;n que se emplea en la evaluaci&oacute;n de los desaf&iacute;os propuestos por alumnos en el m&oacute;dulo QUESTOURnament. </P>';
$string['studentassessments'] = '{$a} Evaluaciones';
$string['studentgrades'] = '{$a} Calificaciones';
$string['studentsubmissions'] = '{$a} Envíos';
$string['studentsubmissionsforassessment'] = '{$a} Envíos de los estudiantes para valoración';
$string['subject'] = 'Asunto:';
$string['submission'] = 'Desafío';
$string['submissionend'] = 'Fecha de Cierre del Desaf&iacute;o';
$string['submissionend_help'] = '<P align="justify">Permite establecer la fecha en la que se cerrará un desaf&iacute;o. A partir de esta fecha no será posible enviar más respuestas al desaf&iacute;o. Sin embargo, los profesores sí podr&aacute;n seguir evaluando al autor del desaf&iacute;o, tanto por la pregunta planteada como por la labor desarrollada como evaluador. Asimismo, los autores de los desaf&iacute;os podr&aacute;n continuar evaluando las respuestas enviadas por otros alumnos.</P>
<P align="justify">Una vez se cierre el desafío, todos los participantes podr&aacute;n ver las respuestas enviadas por el resto, así como las evaluaciones y puntuaciones obtenidas. </P>
<P align="justify">Esta fecha no podr&aacute; ser posterior a la <a href="help.php?component=quest&identifier=dateend"">Fecha de Cierre</a> del m&oacute;dulo QUESTOURnament, ni anterior a la <a href="help.php?component=quest&identifier=submissionstart"">Fecha de Comienzo del Desaf&iacute;o </a>. </P>';
$string['submissions'] = 'Desafíos';
$string['submissionstart'] = 'Fecha de Comienzo del Desaf&iacute;o';
$string['submissionstart_help'] = '<P ALIGN=CENTER><strong>Fecha de Comienzo del Desaf&iacute;o </strong></P>
<P align="justify">Permite establecer la fecha en la que comenzará un desaf&iacute;o. Este par&aacute;metro s&oacute;lo es configurable por un profesor.</P>
<P align="justify">Si el desafío lo crea un alumno se toma como fecha de comienzo la fecha de creaci&oacute;n del desaf&iacute;o, pudiendo los profesores modificar este valor al aprobar el desaf&iacute;o o al realizar alguna modificaci&oacute;n sobre él.</P>
<P align="justify">A partir de esta fecha los alumnos podr&aacute;n visualizar el desaf&iacute;o y enviar sus respuestas. </P>
<P align="justify">Este fecha deber&aacute; ser anterior a la <a href="help.php?component=quest&identifier=submissionend"">Fecha de Cierre del Desaf&iacute;o </a>. </P>';
$string['submitchallenge'] = 'Añadir Desafío';
$string['submitchallengeassignment'] = 'Añadir desafío';
$string['submitchallengeassignment_help'] = '<P align="justify">Esta página permite a&ntilde;adir un desaf&iacute;o en el m&oacute;dulo QUESTOURnament.</p>
		<p> Para que los alumnos puedan enviar desafíos deben tener el permiso mod/quest:addchallenge que probablemente su plataforma tenga asignado en un rol. Utilice la opción de menú "Roles asignados localmente" o "Permisos" para añadir a los alumnos que pueden ser autores de desafíos en este QUESTOURNAMENT.</p>
		<p> Los siguientes campos son obligatorios:</P>
<div align="justify">
  <ul>
    <li><strong>T&iacute;tulo</strong>: nombre con el se designa el desaf&iacute;o, se recomienda que no incluya el nombre del autor, para conservar el anonimato sobre la autoría del desaf&iacute;o, en caso contrario podr&aacute; ser rechazado o modificado por el profesor.</li>
      <li><strong>Descripci&oacute;n</strong>: es el cuerpo del desaf&iacute;o, donde se explica la problem&aacute;tica y los aspectos que debe incluir la respuesta. Debe ser clara y completa. </li>
      <li><strong>Puntuaci&oacute;n M&aacute;xima</strong>: es la m&aacute;xima puntuaci&oacute;n que podr&aacute; alcanzar el desaf&iacute;o, viene limitada por la <a href="help.php?component=quest&identifier=maxcalification"">M&aacute;xima Puntuaci&oacute;n</a> del m&oacute;dulo QUESTOURnament al que pertenece.</li>
      <li><strong>Puntuaci&oacute;n Inicia</strong>l: es la puntuaci&oacute;n con la que parte el desaf&iacute;o en el instante de su comienzo, la cuál irá evolucionando a medida que se desarrolle el concurso.</li>
      <li><strong>Fecha de Comienzo</strong>: establece la fecha en que se abre el desaf&iacute;o, este par&aacute;metro s&oacute;lo es configurable por parte de los profesores. Cuando el desafío lo crea un alumno, se toma como fecha de comienzo el instante de creaci&oacute;n del desaf&iacute;o.</li>
      <li><strong>Fecha de Cierre</strong>: establece la fecha en la que se cierra el desaf&iacute;o, a partir de esta fecha no se podr&aacute; responder al desaf&iacute;o, aunque los autores del desaf&iacute;o y los profesores s&iacute; que podr&aacute;n evaluar las respuestas realizadas hasta la fecha. No puede ser posterior a la <a href="help.php?component=quest&identifier=dateend"">Fecha de Cierre</a> establecida para el m&oacute;dulo QUESTOURnament. </li>
      <li><strong>Anexos</strong>: permite especificar los anexos correspondientes en caso de haberse habilitado el env&iacute;o de anexos al crear el módulo QUESTOURnament. </li>
  </ul>
  <p>Se comprobar&aacute; que los campos de t&iacute;tulo y descripci&oacute;n del desaf&iacute;o no est&eacute;n vac&iacute;os, en caso de que lo est&eacute;n se presentará un mensaje de error y el desaf&iacute;o no se a&ntilde;adir&aacute;. Tambi&eacute;n se comprobar&aacute; si las fechas son correctas, en el caso de que la fecha de cierre del desaf&iacute;o sea posterior a la fecha de cierre del m&oacute;dulo QUESTOURnament al que pertence el desafío, se fijar&aacute; esta &uacute;ltima fecha como fecha de cierre del desaf&iacute;o.</p>
  <p>Si la puntuaci&oacute;n inicial definida en el desaf&iacute;o fuese superior a la puntuaci&oacute;n m&aacute;xima definida para el desafío, se tomar&aacute; como puntuaci&oacute;n inicial la puntuaci&oacute;n m&aacute;xima establecida.</p>
</div>
<ul>
</ul>';
$string['submitted'] = 'Desafío/Pregunta Enviado';
$string['submittedanswer'] = 'Respuesta Enviada';
$string['submittedby'] = 'Enviado por';
$string['suggestedgrade'] = 'Calificación sugerida';
$string['team'] = 'Equipo';
$string['teamcalification'] = 'Calificación por Equipos';
$string['teamforquest'] = 'Equipo para QUESTOURnament {$a}';
$string['teamname'] = 'Nombre del Equipo';
$string['teamporcent'] = 'Porcentaje de Calificaci&oacute;n de los Equipos';
$string['teamporcent_help'] = '<P align="justify">Este par&aacute;metro establece el tanto por ciento de la clasificaci&oacute;n de los equipos que se a&ntilde;adir&aacute; a la clasificaci&oacute;n individual, que es la que determina la nota final de un alumno en un m&oacute;dulo QUESTOURnament.</P>
<P align="justify">El porcentaje, establecido por este par&aacute;metro, de la puntuación obtenida por un equipo, se suma a la puntuación individual total de cada alumno que pertenezca a dicho equipo. </P>
<P align="justify">El objetivo es premiar el trabajo en equipo de forma que &eacute;ste repercuta en la clasificaci&oacute;n final de cada alumno. </P>';
$string['teams'] = 'Ver Clasificaci&oacute;n por Equipos';
$string['teams_help'] = '<P align="justify">Esta opción muestra la clasificaci&oacute;n obtenida por cada uno de los equipos formados en el m&oacute;dulo QUESTOURnament que pertenezcan al mismo grupo. Un porcentaje de esta clasificaci&oacute;n fijado al a&ntilde;adir el m&oacute;dulo QUESTOURnament (<a href="help.php?component=quest&identifier=teamporcent"">Porcentaje en la Calificaci&oacute;n de los Equipos</a>) contribuirá a la clasificaci&oacute;n indivual de cada componente del equipo.</P>
<P align="justify">Los par&aacute;metros que se muestran son los siguientes:</P>
<div align="justify">
  <ul>
    <li><strong>Equipo</strong>: nombre del equipo.</li>
      <li><strong>N&ordm; Resp.</strong>: n&uacute;mero de respuestas realizadas por todos los componentes de un mismo equipo en este m&oacute;dulo QUESTOURnament.</li>
      <li><strong>N&ordm; Resp. Eval.</strong>: n&uacute;mero de respuestas evaluadas de todas las enviadas por los componentes del equipo en este m&oacute;dulo QUESTOURnament.</li>
      <li><strong>N&ordm; Desaf&iacute;os </strong>: n&uacute;mero de desaf&iacute;os propuestos en el m&oacute;dulo QUESTOURnament por los componentes del equipo.</li>
      <li><strong>N&ordm; Desaf&iacute;os Eval.</strong>: n&uacute;mero de desaf&iacute;os evaluados de los propuestos por los componentes del equipo en este m&oacute;dulo QUESTOURnament.
      <li><strong>Punt. Desaf&iacute;os:</strong> engloba todas las puntuaciones obtenidas por los miembros del equipo correspondientes a la evaluaci&oacute;n, por parte de los profesores, de los desaf&iacute;os propuestos por dichos alumnos.</li>
      <li><strong>Punt. Resp.</strong>: engloba todas las puntuaciones obtenidas por los miembros del equipo correspondientes a la evaluaci&oacute;n de las respuestas enviadas por dichos alumnos.</li>
      <li><strong>Puntuaci&oacute;n</strong>: recoge la suma de las puntuaciones correspondientes a los desaf&iacute;os a&ntilde;adidos por los alumnos de un mismo equipo y a las respuestas enviadas por &eacute;stos. </li>
  </ul>
  <p>Por defecto la clasificaci&oacute;n viene ordenada de acuerdo a la puntuaci&oacute;n total obtenida por cada equipo, aunque este orden podr&aacute; modificarse escogiendo otro par&aacute;metro de ordenaci&oacute;n pulsando sobre el nombre del mismo.</p>
  <p>Se puede acceder a la clasificaci&oacute;n individual de los alumnos a trav&eacute;s de la opción <a href="help.php?component=quest&identifier=global"">Ver Clasificaci&oacute;n Total</a> que aparece en la parte inferior de la pantalla.</p>
</div>';
$string['thegradeis'] = 'La calificación es';
$string['timeassessment'] = 'Tiempo Eval.';
$string['timemaxoflife'] = 'Tiempo de vida por defecto de los desafíos';
$string['timemaxquestion'] = 'Tiempo M&aacute;ximo de Vida';
$string['timemaxquestion_help'] = '<P align="justify">Este par&aacute;metro establece la duraci&oacute;n en d&iacute;as de los desaf&iacute;os a&ntilde;adidos en este m&oacute;dulo QUESTOURnament. </P>
<P align="justify">Los alumnos no podr&aacute;n modificar la duraci&oacute;n de los desaf&iacute;os que a&ntilde;adan a este módulo. Sin embargo, los profesores sí podr&aacute;n modificar las fechas de comienzo y de cierre de todos los desaf&iacute;os del módulo, tanto de los planteados por los alumnos como de los planteados por ellos mismos.</P>';
$string['tinitial'] = 'Tiempo Inicial';
$string['tinitial_help'] = '<P align="justify">Este par&aacute;metro establece el tiempo, en días, que transcurrirá desde la fecha de comienzo de un desaf&iacute;o durante el cuál su puntuaci&oacute;n no variará. Esto ser&aacute; as&iacute; siempre y cuando no se haya enviado y evaluado una respuesta correcta a dicho desaf&iacute;o, ya que si esto ocurre, la puntuaci&oacute;n comenzar&aacute; a descender. </P>
<P align="justify">Se pretende de esta manera incentivar a los alumnos a que respondan lo antes posible para obtener la m&aacute;xima puntuaci&oacute;n posible.</P>';
$string['title'] = 'Título';
$string['today'] = 'Hoy';
$string['tothechallenge'] = 'al desafío';
$string['typecalification'] = 'Tipo de Variación de la Puntuaci&oacute;n';
$string['typecalification_help'] = '<P align="justify">Este parámetro permite establecer la forma en que variará la puntuaci&oacute;n de un desaf&iacute;o. Cada desaf&iacute;o propuesto tendr&aacute; una puntuaci&oacute;n inicial fijada mediante el par&aacute;metro <a href="help.php?component=quest&identifier=initialpoints"">Puntuaci&oacute;n Inicial</a>, una calificaci&oacute;n máxima posible fijada mediante el par&aacute;metro <a href="help.php?component=quest&identifier=maxcalification"">M&aacute;xima Puntuaci&oacute;n</a> y un <a href="help.php?component=quest&identifier=tinitial"">Tiempo Inicial</a> que determina el tiempo, medido en días, desde la fecha de comienzo del desaf&iacute;o en el que su puntuaci&oacute;n no var&iacute;ará salvo que se envíe y califique una respuesta correcta. De esta forma y transcurrido el tiempo inicial establecido, o bien, a partir de que se envíe y califique una respuesta correcta, la puntuaci&oacute;n del desafío empezar&aacute; a variar a partir de la puntuaci&oacute;n inicial de dos formas posibles, seg&uacute;n el tipo de puntuaci&oacute;n escogido:</P>
<P align="justify">LINEAL: la variaci&oacute;n de la puntuaci&oacute;n se produce linealmente, incrementándose hasta que llegue la fecha de finalizaci&oacute;n del desaf&iacute;o, alcanzando en este momento la m&aacute;xima puntuaci&oacute;n establecida, o bien hasta que se responda correctamente por vez primera y se califique dicha respuesta, momento a partir del cuál la puntuaci&oacute;n comenzar&aacute; a disminuir, de manera que se alcance el valor cero en la fecha de cierre del desaf&iacute;o, siempre y cuando antes no se hayan enviado y calificado el <a href="help.php?component=quest&identifier=nmaxanswers"">Número Máximo de Respuestas</a> admitidas para ese desafío.</P>
<P align="justify">EXPONENCIAL: la variación de la puntuaci&oacute;n sigue las mismas pautas que en el tipo anterior, con la diferencia de que en este caso la variaci&oacute;n no es lineal, sino exponencial, por lo que la variación es mayor a medida que transcurre el tiempo.</P>';
$string['typegrade'] = 'Obtener Notas de Alumnos o de Equipos';
$string['typegrade_help'] = '<P align="justify">Este par&aacute;metro establece en funci&oacute;n de qu&eacute; clasificaci&oacute;n se va a calcular la nota final para cada uno de los alumnos. </P>
<P align="justify">Existen dos posibilidades: </P>
<div align="justify">
  <ul>
    <li><strong>Alumnos</strong>: la nota que se calcula para cada alumno se obtiene a partir de la clasificaci&oacute;n individual. No obstante, si la opci&oacute;n de equipos est&aacute; habilitada la puntuaci&oacute;n del equipo de cada alumno contribuir&aacute; a su clasificaci&oacute;n individual.</li>
      <li><strong>Equipos</strong>: para el c&aacute;lculo de las notas de cada alumno &uacute;nicamente se emplea la clasificaci&oacute;n de los equipos. De esta forma, los alumnos que pertenezcan a un mismo equipo obtendr&aacute;n la misma nota. Para que esta posibilidad tenga sentido, deber&aacute; estar habilitada la opci&oacute;n de <a href="help.php?component=quest&identifier=allowteams"">Permitir Equipos</a>. </li>
  </ul>
</div>';
$string['typeindividual'] = 'Alumnos';
$string['typeofscale'] = 'Tipo de escala';
$string['typeteam'] = 'Equipos';
$string['unknownauthor'] = 'Autor desconocido';
$string['unkownactionerror'] = 'Error fatal: acción desconocida: {$a}.';
$string['updatecomment'] = 'Comentario actualizado.';
$string['usepassword'] = 'Usar contraseña';
$string['usepassword_help'] = '<p align="justify">Esta opción permite asociar una contraseña de acceso a este m&oacute;dulo QUESTOURnament. Proteger un módulo QUESTOURnament con contraseña puede resultar necesario, por ejemplo, cuando dicho m&oacute;dulo sea utilizado por varios grupos de estudiantes en un curso y se proponga a cada grupo en un periodo de tiempo diferente, en este caso, la contraseña de acceso impedirá que un grupo de estudiantes pueda acceder al m&oacute;dulo QUESTOURnament una vez que éste haya sido abierto para otro grupo de estudiantes diferente, pero no para ellos aún.</p>';
$string['user'] = 'Usuario';
$string['validateassessment'] = 'Validar Evaluaciones';
$string['validateassessment_help'] = '<P align="justify">Si se habilita esta opción, el profesor tendr&aacute; que validar todas las calificaciones otorgadas por los alumnos para que éstas tengan valor. Estas calificaciones se refieren a las realizadas por los alumnos autores de los desaf&iacute;os planteados a las respuestas enviadas por otros alumnos a dichos desaf&iacute;os. </P>
<P align="justify">Asimismo, la clasificaci&oacute;n de los alumnos no se modificar&aacute; hasta que el profesor haya validado las calificaciones otorgadas por los alumnos. El profesor podr&aacute; modificar el valor de dichas calificaciones, siendo la puntuación otorgada por el profesor, en caso de que sea diferente a la otorgada por el alumno autor del desafío, la que pase a formar parte de la nota final del alumno evaluado. </P>
<P align="justify">Si esta opci&oacute;n no se habilita, el profesor no tendr&aacute; la obligaci&oacute;n de validar todas las calificaciones otorgadas por estudiantes, aunque s&iacute; podr&iacute;a hacerlo si así lo deseara. Igualmente, si el profesor modifica la calificación, será esta nueva puntuación la que pase a formar parte de la nota final del alumno. Si por el contrario, el profesor no realizase de nuevo la evaluaci&oacute;n de la respuesta, se utilizaría la puntuaci&oacute;n obtenida en la evaluaci&oacute;n realizada por el alumno autor del desaf&iacute;o. </P>';
$string['verypoor'] = 'Muy pobre';
$string['view'] = 'Ver';
$string['viewassessment'] = 'Ver Evaluación';
$string['viewassessmentautor'] = 'Ver Evaluación del Desafío';
$string['viewclasification'] = 'Ver Clasificación';
$string['viewclasificationglobal'] = 'Ver Clasificación Total';
$string['viewclasificationteams'] = 'Ver Clasificación por Equipos';
$string['warningonamendingelements'] = 'AVISO: Hay valoraciones enviadas. <br /> NO cambie el número de elementos, el tipo de escala o los pesos de elemento.';
$string['weight'] = 'Peso';
$string['weights'] = 'Pesos';
$string['wrongpassword'] = 'Contraseña Errónea';
$string['yourfeedbackgoeshere'] = 'Aquí puedes dar tu opinión';
