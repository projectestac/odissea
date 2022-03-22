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
 * Strings for component 'quizgame', language 'es', version '3.11'.
 *
 * @package     quizgame
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedhighscoreof'] = 'Logró una máxima puntuación de {$a}';
$string['attempt'] = 'Intento #{$a}';
$string['completiondetail:score'] = 'Consigue una puntuación mínima de {$a}';
$string['completionscore'] = 'El estudiante debe lograr una puntuación mínima de:';
$string['completionscoredesc'] = 'El estudiante debe lograr una puntuación mínima de: {$a}';
$string['completionscoregroup'] = 'Requerir puntuación';
$string['completionscoregroup_help'] = 'Si está habilitado, puede exigir que se alcance una puntuación mínima antes de que la actividad se marque como completa.

Cada pregunta vale 1000 puntos cuando se responde correctamente en el primer intento, por lo que es posible que desee establecer el valor predeterminado a:

(Número de preguntas x 1000)';
$string['emptyquiz'] = 'No hay preguntas de opción múltiple en la categoría seleccionada.';
$string['endofgame'] = 'Su puntuación fue: {$a}. Pulse la barra espaciadora o haga clic para reiniciar.';
$string['eventgamescoreadded'] = 'Puntuación de Quizventure registrada';
$string['eventgamescoresviewed'] = 'Puntuaciones de Quizventure vistas';
$string['eventgamestarted'] = 'Comenzó el juego Quizventure';
$string['fullscreen'] = 'Pantalla completa';
$string['howtoplay'] = 'Cómo jugar';
$string['howtoplay_help'] = 'Puedes mover la nave usando las teclas de flecha o arrastrándola con el mouse.

Presione la barra espaciadora o haga clic en el botón del ratón para disparar, o toque con dos dedos en cualquier parte del juego.

Despeje tantas preguntas como sea posible disparando la respuesta correcta. ¡Buena suerte!';
$string['invalidcmorid'] = 'Error: debe especificar un ID de módulo de curso o un ID de instancia';
$string['modulename'] = 'Quizventure';
$string['modulename_help'] = '¿Sus estudiantes son propensos a procastinar? ¿Están jugando juegos en lugar de estudiar? ¡Bueno, ahora los puede motivar al permitirles hacer ambas cosas a la vez!

Quizventure es un módulo de actividad que carga preguntas de cuestionario desde el curso al que se agrega. Las respuestas posibles vienen bajando como naves espaciales y el estudiante tiene que dispararle a la respuesta correcta.

**Nota**: Quizventure está diseñado para promover el aprendizaje en lugar de la evaluación. Los estudiantes tendrán intentos infinitos con retroalimentación inmediata. Por esta razón, añada solamente las preguntas para las que desea que los estudiantes se aprendan las respuestas, en lugar de añadir las preguntas que quiere emplear para evaluar si han aprendido.';
$string['modulenameplural'] = 'Juegos Quizventure';
$string['notyetplayed'] = 'Aún no jugado';
$string['playedxtimeswithhighscore'] = 'Jugado {$a->veces} veces. El último juego terminó con una máxima puntuación de {$a->score}';
$string['playerscores'] = 'Puntuaciones de jugadores';
$string['pluginadministration'] = 'Administración de Quizventure';
$string['pluginname'] = 'Quizventure';
$string['privacy:metadata:quizgame_scores'] = 'Información sobre la(s) respuesta(s) elegida(s) por el usuario para una actividad determinada del juego de preguntas';
$string['privacy:metadata:quizgame_scores:quizgameid'] = 'El ID de la actividad del juego de preguntas para la que el usuario está respondiendo';
$string['privacy:metadata:quizgame_scores:score'] = 'La puntuación del usuario durante ese juego.';
$string['privacy:metadata:quizgame_scores:timecreated'] = 'La marca de tiempo que indica cuándo jugó el usuario al juego de preguntas';
$string['privacy:metadata:quizgame_scores:userid'] = 'El ID del usuario que juega esta actividad de juego de preguntas.';
$string['questioncategory'] = 'Categoría de pregunta';
$string['questioncategory_help'] = 'Seleccione la categoría del banco de preguntas que se usará en el juego.

Tome nota de que usted solamente debería de seleccionar preguntas que NO sean críticas para las evaluaciones posteriores. El juego de quizventure es similar a crear un cuestionario con intentos infinitos y retroalimentación instantánea tanto si la respuesta es correcta o incorrecta.

**Nota**: Quizventure está diseñado para promover el aprendizaje en lugar de la evaluación. Los estudiantes tendrán intentos infinitos con retroalimentación inmediata. Por esta razón, añada solamente las preguntas para las que desea que los estudiantes se aprendan las respuestas, en lugar de añadir las preguntas que quiere emplear para evaluar si han aprendido.';
$string['quizgame'] = 'Quizventure';
$string['quizgame:addinstance'] = 'Añadir una instancia de Quizventure';
$string['quizgame:view'] = 'Ver Quizventure';
$string['quizgame:viewallscores'] = 'Ver puntuaciones de jugadores';
$string['quizgamefieldset'] = 'Ejemplo de campo personalizado';
$string['quizgamename'] = 'Nombre del Quizventure';
$string['quizgamename_help'] = '¿Cuál es el nombre de este Quizventure?';
$string['removescores'] = 'Eliminar todas las puntuaciones de los usuarios';
$string['score'] = 'Puntuación: {$a->score} Vidas: {$a->lives}';
$string['scoreheader'] = 'Puntuación';
$string['scoreslink'] = 'Ver todos los intentos';
$string['scoreslinkhelp'] = 'Ver todos los intentos y puntuaciones de los jugadores';
$string['sound'] = 'Sonido';
$string['spacetostart'] = 'Pulse la barra espaciadora o haga clic para comenzar';
