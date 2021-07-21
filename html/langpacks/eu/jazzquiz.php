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
 * Strings for component 'jazzquiz', language 'eu', version '3.11'.
 *
 * @package     jazzquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_out_of_b_responded'] = '{$a->b}tatik {$a->a}k erantzun dute';
$string['a_out_of_b_voted'] = '{$a->b}tatik {$a->a}k bozkatu dute';
$string['a_responses'] = '{$a} erantzun';
$string['a_students_answered'] = '<b>{$a}</b> ikaslek gutxienez galdera bati erantzuna eman diote.';
$string['a_students_joined_quiz'] = 'Galdetegia <b>{$a}</b> ikaslek hasi dute.';
$string['add'] = 'Gehitu';
$string['add_question'] = 'Gehitu galdera';
$string['add_to_quiz'] = 'Gehitu galdetegira';
$string['allow_guests'] = 'Onartu gonbidatuak';
$string['anonymous'] = 'Anonimoa';
$string['anonymous_answers'] = 'Erantzun anonimoak (partaidetza ikus daiteke)';
$string['anonymous_answers_info'] = 'Saio honetako erantzunak anonimoak dira, baina partaidetza erregistratzen da.';
$string['answer'] = 'Erantzuna';
$string['attempt_started'] = 'Honez gero, saiakera bat hasi duzu, egin klik behealdean irekitako saiora joateko';
$string['attempts'] = 'Saiakerak';
$string['attendance'] = 'Agerraldiak';
$string['attendance_list'] = 'Agerraldi-zerrenda';
$string['click_to_show_original_results'] = 'Egin klik hasierako emaitzak ikusteko';
$string['click_to_show_vote_results'] = 'Click to show vote results';
$string['closing_session'] = 'Saioa ixten...';
$string['create_new_question'] = 'Sortu galdera berria';
$string['default_question_time'] = 'Galdera erantzuteko lehenetsitako denbora';
$string['default_question_time_help'] = 'Galdera bakoitza erakusteko denbora-epe lehenetsia.<br>Aukera hau galdera bakoitzean gainidatz daiteke.';
$string['delete_question'] = 'Ezabatu {$a} galdera';
$string['download_attendance_list'] = 'Jaitsi agerraldi-zerrenda';
$string['download_report'] = 'Jaitsi txostena';
$string['download_responses'] = 'Jaitsi erantzunak';
$string['edit'] = 'Editatu';
$string['edit_page_open_session_error'] = 'Ezin duzu galdetegia editatu saioa irekita dagoen bitartean.';
$string['edit_question'] = 'Editatu galdera';
$string['end'] = 'Amaitu';
$string['error_getting_current_results'] = 'Emaitzak eskuratzean errorea egon da.';
$string['error_getting_vote_results'] = 'Errore bat egon da bozketa-emaitzak eskuratzean.';
$string['error_saving_vote'] = 'Zure botoa gordetzean errorea egon da.';
$string['error_starting_vote'] = 'Bozketa hastean errorea egon da.';
$string['error_with_request'] = 'Eskaerarekin errorea egon da.';
$string['event_attempt_started'] = 'Saiakera hasi da';
$string['event_question_answered'] = 'Galdera saiakera honetan erantzun da';
$string['exit'] = 'Irten';
$string['failed_to_end_question'] = 'Galdera amaitzen huts egin da.';
$string['fullscreen'] = 'Pantaila osoa';
$string['fully_anonymous'] = 'Guztiz anonimoa';
$string['fully_anonymous_info'] = 'Saio honetako erantzunak eta partaidetza guztiz anonimoak izango dira.';
$string['goto_session'] = 'Sartu irekitako saio batean';
$string['improvise'] = 'Inprobisatu';
$string['instructions_for_instructor'] = '<h3>Irakurri argibideak, mesedez:</h3>
    <p>Sarrera-eremu bat aukeratu ez denean, hainbat tekla-lasterbide.</p>
    <table>
        <tr>
               <th>Kontrol</th>
               <th>Lasterbidea</th>
               <th>Deskribapena</th>
        </tr>
        <tr>
            <td>
                <i class="fa fa-repeat"></i> Abiarazi inkesta berriro
            </td>
            <td>r</td>
            <td>
                Irakasleari gehitu berri duen galdera berriro abiarazten ahalbidetzen dio.
                Hau <i class="fa fa-bars"></i> Jauzi zerrenda zabalgarritik galdera abiaraztea bezalakoa da.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bar-chart"></i> Bozkatu
            </td>
            <td>v</td>
            <td>
                 Utzi ikasleei beren erantzunez bozkatzen.
                 Irakasleak erantzun bat aukera dezake bozkan sartzeko.
                 Erantzun baten barran klikatuz, erantzun horren elkartzea hasiko da.
                 Ohar zaitez barra honek klikatuko duzun hurrengo barra kontsumituko duela.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-edit"></i> Inprobisatu
            </td>
            <td>i</td>
            <td>
                Inprobisatuz sortu den galdera-zerrenda erakusten du. Idatzi galdera arbelean eta eskatu erantzuteko.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars"></i> Jauzi
            </td>
            <td>j</td>
            <td>
                Erakutsi galdetegirako aukeratutako galdera-zerrenda osoa.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-forward"></i> Hurrengoa
            </td>
            <td>n</td>
            <td>
                Jarraitu aukeratutako galdera-zerrendako hurrengo galdera.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-close"></i> Amaitu
            </td>
            <td>e</td>
            <td>
                Amaitu oraingo galdera.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-expand"></i> Pantaila osoa
            </td>
            <td>f</td>
            <td>
                Erakutsi emaitzak pantaila osoan. Erantzunak ez dira erakutsiko galderak dirauen artean. Hortaz, pantaila osoa saioan zehar manten dezakezu.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Erantzuna
            </td>
            <td>a</td>
            <td>
               Irakasleari erantzun zuzena erakusten duen galderaren ikuspena ematen dio.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Erantzunak
            </td>
            <td>t (trukatu)</td>
            <td>
                Ezkutatu edo erakutsi ikasleen erantzunak.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-window-close"></i> Irten
            </td>
            <td></td>
            <td>
                Irten oraingo saiotik.
            </td>
        </tr>
    </table>';
$string['instructions_for_student'] = '<p>Itxaron irakasleak galdetegiari hasiera eman diezaion, mesedez.</p>';
$string['instructor_sessions_going'] = 'Honez gero saioa hasita dago. Saiora sartzeko egin klik beheko botoian.o';
$string['invalid_question_time'] = 'Galdera-denborak 0tik gorako integer bat izan behar du';
$string['jazzquiz:addinstance'] = 'Gehitu jazzgaldetegi bat';
$string['jazzquiz:attempt'] = 'Hasi Jazz Galdetegia';
$string['jazzquiz:control'] = 'Kontrolatu Jazz Galdetegi bat. (Normalean irakasleentzat bakarrik)';
$string['jazzquiz:editquestions'] = 'Editatu Jazz Galdetegi baten galderak.';
$string['jazzquiz:seeresponses'] = 'Ikusi beste ikasleen erantzunak kalifikatu ahal izateko';
$string['jazzquizsettings'] = 'Jazz Galdetegiaren ezarpen orokorrak';
$string['join_quiz'] = 'Sartu Galdetegira';
$string['join_quiz_instructions'] = 'Egin klik behealdean galdetegira sartzeko';
$string['jump'] = 'Jauzi';
$string['loading'] = 'Kargatzen...';
$string['modulename'] = 'Jazz Galdetegia';
$string['modulename_help'] = '<p>
    Jazz Galdetegia jarduera-moduluak irakasleei ahalbidetzen die galdetegiak unean sortzen eta kudeatzen. JazzGaldetegian galdera mota estandar guztiak erabil daitezke.
</p>
<p>
    Irakasleak saioan bertan edozein galderatara joateko aukera dauka.
    Erantzunak zuzenean barra grafiko batean erakusten dira, proiektoreetarako egokiturik. Pantaila osoko modua ere eskuragarri dago.
    Galdera amaitzeko epe-muga automatikoa ezar daiteke. Bestela, irakasleak galdera eskuz amaitu eta hurrengora pasa daiteke.
</p>';
$string['modulenameplural'] = 'Jazz Galdetegiak';
$string['multichoice_options'] = 'Erantzun anitzeko aukerak';
$string['next'] = 'Hurrengoa';
$string['no_attempts_found'] = 'Ez da saiakerarik aurkitu.';
$string['no_session'] = 'Ez dago saio irekirik';
$string['no_sessions_exist'] = 'Oraindik ez dago saiorik.';
$string['no_students_have_joined'] = 'Ez da ikaslerik sartu.';
$string['no_time_limit'] = 'Ez dago denbora-mugarik';
$string['no_time_limit_help'] = 'Aukeratu eremu hau denbora honetan denborarik ez ezartzearren.<p>Irakasleari eskatuko zaio galdera amaitzeko dagokion botoian klik eginez.</p>';
$string['nonanonymous_session'] = 'Saio ez-anonimoa';
$string['nonanonymous_session_info'] = 'Saio hau ez da anonimoa. Zure partaidetza nahiz erantzunak erregistratutako dira.';
$string['one_student_has_joined'] = 'Ikasle 1 sartu da.';
$string['pluginadministration'] = 'Jazz Galdetegiaren kudeaketa';
$string['pluginname'] = 'Jazz Galdetegia';
$string['privacy:metadata:core_question'] = 'Jazz Galdetegiko jarduerak galderen erabileraz informazioa biltzen du core-question azpisisteman.';
$string['privacy:metadata:jazzquiz_attempts'] = 'Jazz Galdetegiko saioko saiakerez xehetasunak';
$string['privacy:metadata:jazzquiz_attempts:responded'] = 'Azken galdera erantzunik izan duen ala ez.';
$string['privacy:metadata:jazzquiz_attempts:timefinish'] = 'Saiakerako azken galdera noiz amaitu den.';
$string['privacy:metadata:jazzquiz_attempts:timemodified'] = 'Saiakerako azken galdera noiz aldatu den.';
$string['privacy:metadata:jazzquiz_attempts:timestart'] = 'Saiakerako azken galdera noiz hasi den.';
$string['privacy:metadata:jazzquiz_attempts:userid'] = 'Saiakera egin duen azken erabiltzailea.';
$string['question'] = 'Galdera';
$string['question_move_down'] = 'Mugitu {$a} galdera behera';
$string['question_move_up'] = 'Mugitu {$a} galdera gora';
$string['question_time'] = 'Galderaren denbora';
$string['question_time_help'] = 'Galderaren denbora segundotan.';
$string['question_will_end_in_x_seconds'] = 'Galdera {$a} segundotan amaituko da';
$string['question_will_start_in_x_seconds'] = 'Galdera {$a} segundotan hasiko da';
$string['question_will_start_now'] = 'Galdera orain hasiko da';
$string['questions'] = 'Galderak';
$string['quit'] = 'Irten';
$string['quiz_not_running'] = '<p>Itxaron irakasleak galdetegiari hasiera eman arte.</p><p>Erabili berriz kargatzeko botoia galdetegia hasi ote den egiaztatzeko.</p>';
$string['repoll'] = 'Abiarazi inkesta berriro';
$string['reports'] = 'Txostenak';
$string['responses'] = 'Erantzunak';
$string['review'] = 'Berrikusi';
$string['save_question'] = 'Gorde galdera';
$string['select_session'] = 'Aukeratu berrikusteko saioa:';
$string['session'] = 'Saioa';
$string['session_closed'] = 'Saioa orain itxi da';
$string['session_name'] = 'Saioaren izena';
$string['session_name_required'] = 'Saioaren izena beharrezkoa da';
$string['short_answer'] = 'Erantzun laburra';
$string['short_math_answer'] = 'Zenbakizko erantzun laburra';
$string['showing_original_results'] = 'Hasierako emaitzak erakusten';
$string['showing_vote_results'] = 'Bozketaren emaitzak erakusten';
$string['start_session'] = 'Hasi Saioa';
$string['startquiz'] = 'Eman hasiera galdetegiari';
$string['student'] = 'Ikaslea';
$string['teacher_start_instructions'] = '<p>Eman hasiera galdetegi bati ikasleek egin dezaten.</p><p>Eman saioaren izena beranduago, emaitzak bilatzen laguntzearren.</p>';
$string['unable_to_create_session'] = 'Ezin da saioa hasi';
$string['view'] = 'Ikusi';
$string['vote'] = 'Bozkatu';
$string['wait_for_instructor'] = 'Itxoin irakasleak hurrengo galdera abiarazi arte, mesedez.';
$string['wait_for_question_time'] = 'Itxoin galdera hasi arte';
$string['wait_for_question_time_help'] = 'Galdera hasteko itxaron beharreko denbora-epea.';
$string['wait_for_students'] = 'Ikasleak konektatzearen zain';
$string['x_seconds_left'] = '{$a} segundo falta da';
$string['x_students_have_joined'] = '{$a} ikasle sartu dira.';
$string['you_already_voted'] = 'Barkatu, baina honez gero botoa eman duzu.';
