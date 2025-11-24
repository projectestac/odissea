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
 * Strings for component 'game', language 'gl', version '4.5'.
 *
 * @package     game
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['game:preview'] = 'Previsualizar xogos';
$string['game:reviewmyattempts'] = 'Revisar os meus intentos';
$string['game:view'] = 'ver';
$string['game:viewreports'] = 'Ver informes';
$string['game_snakes'] = 'Serpes e Escaleiras';
$string['game_sudoku'] = 'Sudoku';
$string['gamenotavailable'] = 'Este xogo non estará dispoñible ata {$a}';
$string['gameopen'] = 'Abrir o xogo';
$string['gameopenclose'] = 'Abrir e pechar datas';
$string['gameopenclose_help'] = 'Os estudantes só poden iniciar o(s) intento(s) logo da hora de apertura e deben completalo(s) antes da hora de peche.';
$string['gameopenedon'] = 'Este xogo abriuse en {$a}';
$string['glossary_only_approved'] = 'Só entradas do glosario aprobadas ou do profesorado';
$string['grade'] = 'Calificación';
$string['gradeaverage'] = 'Calificación media';
$string['gradehighest'] = 'Calificación máis alta';
$string['grademethod'] = 'Método de calificación';
$string['hangman_allowspaces'] = 'Permitir espazos nas palabras';
$string['hangman_allowsub'] = 'Permitir o símmbolo "-" nas palabras';
$string['hangman_correct_phrase'] = 'A frase correcta era:';
$string['hangman_correct_word'] = 'A palabra correcta era:';
$string['hangman_gradeinstance'] = 'Nivel no xogo completo';
$string['hangman_imageset'] = 'Selecciona as imaxes para o Aforcado';
$string['hangman_language'] = 'Idioma das palabras';
$string['hangman_letters'] = 'Letras:';
$string['hangman_loose'] = '<BIG><B>¡Fin do xogo!</B></BIG>';
$string['hangman_maximum_number_of_errors'] = 'Número máximo de erros (deben ser imaxes chamadas hangman_0.jpg, hangman_1.jpg...)';
$string['hangman_maxtries'] = 'Número de palabras por xogo';
$string['hangman_options'] = 'Opcións do Aforcado';
$string['hangman_restletters_many'] = 'Ten <b>{$a}</b> intentos';
$string['hangman_restletters_one'] = 'Ten <b>ÚNICAMENTE 1</b> intento';
$string['hangman_showcorrectanswer'] = 'Amosar a resposta correcta logo do final';
$string['hangman_showfirst'] = 'Amosar a primeira letra do Aforcado';
$string['hangman_showlast'] = 'Amosar a última letra do Aforcado';
$string['hangman_showquestion'] = '¿Amosar as preguntas?';
$string['hangman_wrongnum'] = 'Erróneas: %%d de %%d';
$string['hangmanimagesets'] = 'Número de conxuntos de imaxes empregadas no Aforcado';
$string['header_footer_options'] = 'Opcións de Encabezado/Pe';
$string['helpbookquiz'] = 'Cando un estudante responda correctamente, pode ir ao seguinte capítulo.';
$string['helpcross'] = 'Este xogo obtén palabras dun Glosario ou de preguntas de resposta curta para cuestionario e xera un crucigrama aleatorio. O mestre pode configurar o número máximo de columnas/filas ou de palabras que contén. O estudante pode pulsar o botón "Revisar encrucillado" para revisar se as súas respostas son correctas. Cada encrucillado é dinámico, polo que é diferente para cada estudante.';
$string['helpcryptex'] = 'Este xogo é similar ao encrucillado, pero as respostas están ocultas dentro dun criptograma aleatorio.';
$string['helphangman'] = 'Este xogo obtén palabras dun Glosario ou de preguntas de resposta curta de exame e xera un Aforcado. O mestre pode configurar o número de palabras que ten cada xogo, se se amosa a primeiro ou a última letra, ou se se amosa a pregunta ou a resposta final.';
$string['helphiddenpicture'] = 'O xogo da imaxe oculta descubre cada parte dunha imaxe por cada pregunta correctamente contestada polo estudante. Cada número no xogo de imaxe oculta amosa unha pregunta ao estudante de forma tal que, cando o estudante respontde correctamente á pregunta, o número descúbrese, amosando unha parte da imaxe.';
$string['helpmillionaire'] = 'Amósase unha pregunta ao estudante; se a responde correctamtente móvese cara arriba ao seguinte número ata que o usuario complete as preguntas. Se se responde de xeito incorrecto acábase o xogo.';
$string['helpsnakes'] = 'Amósase unha pregunta ao estudante; se a responde correctamente amósase un número do dado, logo móvese a ficha do xogo o número de postos que amosou o dado.';
$string['helpsudoku'] = 'O xogo amosa un Sudoku aos estudantess con un número insuficiente de números para permitir resolvelo. Por cadda pregunta que responda corrrectamente, engádese un número adicional que permita facilitar a súa resolución.';
$string['hiddenpicture_across'] = 'Celas horizontais';
$string['hiddenpicture_down'] = 'Celas verticais';
$string['hiddenpicture_height'] = 'Establecer a algura da imaxe en (en píxeles)';
$string['hiddenpicture_mainsubmit'] = 'Calificación da pregunta principal';
$string['hiddenpicture_nocols'] = 'Debe especificar o número de filas horizontais';
$string['hiddenpicture_nomainquestion'] = 'Non hai entradas no glosario {$a->name} con unha imaxe axunta';
$string['hiddenpicture_norows'] = 'Debe especificar o número de columnas verticais';
$string['hiddenpicture_options'] = 'Opcións para \'Imaxe oculta\'';
$string['hiddenpicture_pictureglossary'] = 'Glosario para a pregunta e imaxe principais';
$string['hiddenpicture_width'] = 'Establecer un ancho de imaxe en (en píxeles)';
$string['hidebookquiz'] = 'Oculta o xogo "Libro con preguntas"';
$string['hidecross'] = 'Ocultar o xogo Encrucillado';
$string['hidecryptex'] = 'Ocultar o xogo Criptograma';
$string['hidehangman'] = 'Ocultar o xogo Aforcado';
$string['hidehiddenpicture'] = 'Ocultar o xogo "Imaxe oculta"';
$string['hidemillionaire'] = 'Ocultar o xogo Millonario';
$string['hidesnakes'] = 'Ocultar o xogo "Serpes e Escaleiras"';
$string['hidesudoku'] = 'Ocultar o xogo Sudoku';
$string['highscore'] = 'Amosar a puntuación alta (número de estudantes)';
$string['html_hangman_new'] = 'Novo';
$string['html_hascheckbutton'] = 'Ten un botón de comprobación:';
$string['html_hasprintbutton'] = 'Ten un botón de impresión:';
$string['html_snakes_check'] = 'Revisar';
$string['html_snakes_correct'] = '¡Correcto!';
$string['html_snakes_no_selection'] = '¡Debe seleccionar algo!';
$string['html_snakes_wrong'] = 'A súa resposta é incorrecta. Permaneza no mesmo asento.';
$string['html_title'] = 'Título de HTML:';
$string['info'] = 'Información';
$string['introduction'] = 'Descrición';
$string['javame_createdby'] = 'Creado por:';
$string['javame_description'] = 'Descrición:';
$string['javame_filename'] = 'Nome do ficheiro:';
$string['javame_icon'] = 'Icona:';
$string['javame_maxpictureheight'] = 'Altura máxima da imaxe:';
$string['javame_maxpicturewidth'] = 'Anchura máxima da imaxe:';
$string['javame_name'] = 'Nome:';
$string['javame_type'] = 'Tipo:';
$string['javame_vendor'] = 'Vendedor:';
$string['javame_version'] = 'Versión:';
$string['language_user_defined'] = 'Idioma definido polo usuario';
$string['letter'] = 'letra';
$string['letters'] = 'letras';
$string['lettersall'] = 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZ';
$string['millionaire_also_multichoice'] = 'Respostas de selección múltiple sen resposta correcta única';
$string['millionaire_background'] = 'Cor de fondo';
$string['millionaire_helppeople'] = 'Axuda do público';
$string['millionaire_info_people'] = 'O púclico di';
$string['millionaire_info_telephone'] = 'Penso que a resposta correcta é';
$string['millionaire_info_wrong_answer'] = 'A súa resposta é incorrecta.<br>A resposta correcta é:';
$string['millionaire_lettersall'] = '-';
$string['millionaire_must_select_questioncategory'] = 'Debe seleccionar unha categoría de preguntas';
$string['millionaire_must_select_quiz'] = 'Debe seleccionar un cuestionario';
$string['millionaire_no_multichoice_questions'] = 'Non hai preguntas de selección múltiple';
$string['millionaire_options'] = 'Opcións do Millonario';
$string['millionaire_quit'] = 'Saír';
$string['timetaken'] = 'Tempo levado';
