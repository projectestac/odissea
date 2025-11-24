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
 * Strings for component 'jazzquiz', language 'ca', version '4.5'.
 *
 * @package     jazzquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_out_of_b_responded'] = 'Han respost {$a->a} / {$a->b}';
$string['a_out_of_b_voted'] = 'Han votat {$a->a} / {$a->b}';
$string['a_responses'] = '{$a} respostes';
$string['a_students_answered'] = '<b>{$a}</b> estudiants van respondre com a mínim una pregunta.';
$string['a_students_joined_quiz'] = '<b>{$a}</b> estudiants es van unir al qüestionari.';
$string['add'] = 'Afegeix';
$string['add_to_quiz'] = 'Afegeix al qüestionari';
$string['allow_guests'] = 'Permet convidats';
$string['anonymous_answers'] = 'Respostes anònimes (Es pot veure l\'assistència)';
$string['anonymous_answers_info'] = 'Les respostes són anònimes en aquesta sessió. La vostra assistència es continua enregistrant.';
$string['answer'] = 'Resposta';
$string['attendance'] = 'Assistència';
$string['attendance_list'] = 'Llista d\'assistència';
$string['create_new_question'] = 'Crea una pregunta nova';
$string['default_question_time'] = 'Temps per respondre la pregunta per defecte';
$string['default_question_time_help'] = 'El temps per defecte durant el qual es mostrarà cada pregunta. <br>Les preguntes individuals poden substituir-lo.';
$string['delete_report'] = 'Suprimeix l\'informe';
$string['download_attendance_list'] = 'Baixa la llista d\'assistència.';
$string['download_report'] = 'Baixa l\'informe';
$string['download_responses'] = 'Baixa les respostes';
$string['edit'] = 'Edita';
$string['end'] = 'Acaba';
$string['exit'] = 'Surt';
$string['fullscreen'] = 'Pantalla completa';
$string['fully_anonymous'] = 'Totalment anònima';
$string['goto_session'] = 'Ves a la sessió en curs';
$string['improvise'] = 'Improvisa';
$string['instructions_for_instructor'] = '<h3>Assegureu-vos de llegir les instruccions:</h3>
    <p>Hi ha dreceres de teclat disponibles, les quals es poden emprar quan un camp d\'entrada no té el focus del teclat.</p>
    <table>
        <tr>
               <th>Control</th>
               <th>Drecera de teclat</th>
               <th>Descripció</th>
        </tr>
        <tr>
            <td>
                <i class="fa fa-repeat"></i> Torna a fer la pregunta
            </td>
            <td>r</td>
            <td>
                Permet que l\'instructor torni a fer la pregunta que tot just acaba de fer.
               És el mateix que iniciar una pregunta des de la <i class="fa fa-bars"></i> llista desplegable de Salta.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bar-chart"></i> Vota
            </td>
            <td>v</td>
            <td>
               Permet que els estudiants votin a les seves respostes.
               L\'instructor pot clicar a una resposta per activar o desactivar si s\'hauria d\'incloure en la votació o no.
               Si cliqueu a la barra de la resposta, s\'iniciarà una fusió a partir de la dita resposta.
               Tingueu en compte que aquesta barra consumirà la barra sobre la qual cliqueu tot seguit.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-edit"></i> Improvisa
            </td>
            <td>i</td>
            <td>
                Mostra una llista de preguntes fetes per improvisar. Escriviu la pregunta a la pissarra i demaneu-hi respostes.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars"></i> Salta
            </td>
            <td>j</td>
            <td>
                Mostra una llista de totes les preguntes planificades per al qüestionari.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-forward"></i> Següent
            </td>
            <td>n</td>
            <td>
                Continua amb la pregunta següent a la llista de preguntes planificades.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-random"></i> Aleatòria
            </td>
            <td>m</td>
            <td>
                Inicia una pregunta aleatòria de la llista de preguntes planificades.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-close"></i> Acaba
            </td>
            <td>e</td>
            <td>
                Acaba la pregunta actual.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-expand"></i> Pantalla completa
            </td>
            <td>f</td>
            <td>
                Mostra els resultats a pantalla completa. Les respostes no apareixeran durant una pregunta, així que podeu mantenir-ho així tot al llarg de la sessió.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Resposta
            </td>
            <td>a</td>
            <td>
                Ofereix a l\'instructor una visualització de la pregunta amb la resposta correcta seleccionada.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Respostes
            </td>
            <td>t (toggle)</td>
            <td>
                Amaga o mostra les respostes dels estudiants.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-window-close"></i> Surt
            </td>
            <td></td>
            <td>
                Surt de la sessió del qüestionari actual.
            </td>
        </tr>
    </table>';
$string['instructions_for_student'] = '<p>Espereu que l\'instructor comenci el qüestionari.</p>';
$string['instructor_sessions_going'] = 'Ja hi ha una sessió en curs. Cliqueu el botó de sota per anar-hi';
$string['join_quiz'] = 'Uniu-vos al qüestionari';
$string['join_quiz_instructions'] = 'Cliqueu avall per unir-vos al qüestionari';
$string['jump'] = 'Salta';
$string['multichoice_options'] = 'Opcions múltiples';
$string['next'] = 'Següent';
$string['no_students_have_joined'] = 'No s\'hi ha unit cap estudiant.';
$string['no_time_limit'] = 'Sense límit de temps';
$string['nonanonymous_session'] = 'Sessió no anònima';
$string['nonanonymous_session_info'] = 'Aquesta sessió és no anònima. Es registrarà tant la vostra assistència com les vostres respostes.';
$string['question'] = 'Pregunta';
$string['question_time'] = 'Temps per respondre la pregunta';
$string['question_will_end_in_x_seconds'] = 'La pregunta finalitzarà en {$a} segons';
$string['questions'] = 'Preguntes';
$string['quit'] = 'Surt';
$string['random'] = 'Aleatòria';
$string['repoll'] = 'Torna a fer la pregunta';
$string['reports'] = 'Informes';
$string['responses'] = 'Respostes';
$string['save_question'] = 'Desa la pregunta';
$string['select_session'] = 'Selecciona una sessió per revisar-la';
$string['session'] = 'Sessió';
$string['session_name'] = 'Nom de la sessió';
$string['session_name_required'] = 'El nom de la sessió és necessari';
$string['short_answer'] = 'Resposta curta';
$string['start_session'] = 'Comença la sessió';
$string['startquiz'] = 'Comença el qüestionari';
$string['student'] = 'Estudiant';
$string['teacher_start_instructions'] = '<p>Comença un qüestionari per als estudiants. </p><p>Defineix a sota un nom de sessió per facilitar la cerca dels resultats en una data posterior.</p>';
$string['view'] = 'Visualitza';
$string['vote'] = 'Vota';
$string['wait_for_instructor'] = 'Espereu que l\'instructor comenci la pregunta següent.';
$string['wait_for_question_time'] = 'Espera abans que comenci el temps per respondre la pregunta';
$string['wait_for_question_time_help'] = 'El temps d\'espera abans que comenci una pregunta.';
$string['x_seconds_left'] = 'temps restant: {$a}s';
