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
 * Strings for component 'jazzquiz', language 'nl', version '4.1'.
 *
 * @package     jazzquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_out_of_b_responded'] = '{$a->a} / {$a->b} hebben geantwoord';
$string['a_out_of_b_voted'] = '{$a->a} / {$a->b} hebben gestemd';
$string['a_responses'] = '{$a} antwoorden';
$string['a_students_answered'] = '<b>{$a}</b> leerlingen hebben ten minste één vraag beantwoord.';
$string['a_students_joined_quiz'] = '<b>{$a}</b> leerlingen nemen deel aan de quiz.';
$string['add'] = 'Toevoegen';
$string['add_question'] = 'Vraag toevoegen';
$string['add_to_quiz'] = 'Toevoegen aan quiz';
$string['allow_guests'] = 'Gasten toestaan';
$string['anonymous'] = 'Anoniem';
$string['anonymous_answers'] = 'Anonieme antwoorden (deelname is zichtbaar)';
$string['anonymous_answers_info'] = 'Antwoorden worden in deze sessie geanonimiseerd. Je deelname wordt wel geregistreerd.';
$string['answer'] = 'Juiste antwoord';
$string['attempt_started'] = 'Je bent al begonnen aan een poging. Klik hieronder om met je open poging verder te gaan';
$string['attempts'] = 'Pogingen';
$string['attendance'] = 'Deelname';
$string['attendance_list'] = 'Lijst van deelname';
$string['click_to_show_original_results'] = 'Klik om oorspronkelijke resultaten te tonen';
$string['click_to_show_vote_results'] = 'Klik om resultaten van stemmen te tonen';
$string['closing_session'] = 'Sessie afsluiten...';
$string['create_new_question'] = 'Maak een nieuwe vraag';
$string['default_question_time'] = 'Standaardtijd voor vraag';
$string['default_question_time_help'] = 'De standaardtijd dat iedere vraag wordt getoond.<br>Dit kan voor individuele vragen worden overschreven.';
$string['delete_question'] = 'Vraag {$a} verwijderen';
$string['download_attendance_list'] = 'Lijst van deelname downloaden';
$string['download_report'] = 'Rapport downloaden';
$string['download_responses'] = 'Antwoorden downloaden';
$string['edit'] = 'Bewerken';
$string['edit_page_open_session_error'] = 'Je kunt de quiz niet bewerken terwijl er een sessie geopend is.';
$string['edit_question'] = 'Vraag bewerken';
$string['end'] = 'Beëindigen';
$string['error_getting_current_results'] = 'Er is een fout opgetreden bij het ophalen van huidige resultaten.';
$string['error_getting_vote_results'] = 'Er is een fout opgetreden bij het ophalen van de resultaten van stemmen.';
$string['error_saving_vote'] = 'Er is een fout opgetreden bij het bewaren van je stem.';
$string['error_starting_vote'] = 'Er is een fout opgetreden bij het starten van het stemmen.';
$string['error_with_request'] = 'Er is een fout opgetreden bij het verzoek.';
$string['event_attempt_started'] = 'Poging gestart';
$string['event_question_answered'] = 'Vraag beantwoord voor poging';
$string['exit'] = 'Verlaten';
$string['failed_to_end_question'] = 'Vraag beëindigen mislukt.';
$string['fullscreen'] = 'Volledig scherm';
$string['fully_anonymous'] = 'Volledig anoniem';
$string['fully_anonymous_info'] = 'Zowel antwoorden als deelname zijn volledig geanonimiseerd in deze sessie.';
$string['goto_session'] = 'Ga naar de sessie die bezig is';
$string['improvise'] = 'Improviseren';
$string['instructions_for_instructor'] = '<h3>Lees voor je begint deze instructies:</h3>
<p>Er zijn verschillende sneltoetsen die gebruikt kunnen worden als er een niet gefocust invoerveld is.</p>
<table>
    <tbody>
        <tr>
            <th>Functie</th>
            <th>Sneltoets</th>
            <th>Beschrijving</th>
        </tr>
        <tr>
            <td>
                <i class="fa fa-repeat"></i> Opnieuw doen
            </td>
            <td>r</td>
            <td>
                Hiermee kan de leraar de zojuist gestelde vraag opnieuw laten beantwoorden. Dit werkt op dezelfde manier als een vraag starten vanuit de keuzelijst bij Springen.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bar-chart"></i> Stemmen
            </td>
            <td>v</td>
            <td>
                Laat de leerlingen over hun antwoorden stemmen. De leraar kan op een antwoord klikken om het wel of niet op te nemen in de stemming. Wanneer je op de balk van het antwoord klikt, wordt er samengevoegd vanaf dat antwoord. Let op: deze balk neemt ook die
                van het antwoord op waar je daarna op klikt.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-edit"></i> Improviseren
            </td>
            <td>i</td>
            <td>
                Toont een lijst met vragen gemaakt om te improviseren. Schrijf de vraag op het bord en vraag vervolgens om input voor deze vragen.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars"></i> Springen
            </td>
            <td>j</td>
            <td>
                Toont een lijst met alle voor de quiz geplande vragen.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-forward"></i> Volgende
            </td>
            <td>n</td>
            <td>
                Ga door naar de volgende vraag in de lijst met geplande vragen.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-close"></i> Beëindigen
            </td>
            <td>e</td>
            <td>
                Beëindig de huidige vraag.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-expand"></i> Volledig scherm
            </td>
            <td>f</td>
            <td>
                Toon de resultaten in een volledig scherm. De antwoorden verschijnen niet tijdens een vraag; je kunt dit scherm open laten gedurende de sessie.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Antwoord
            </td>
            <td>a</td>
            <td>
                Toont de leraar een weergave van de vraag met het juiste antwoord geselecteerd.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Antwoorden
            </td>
            <td>t (schakelen)</td>
            <td>
                Verberg of toon de antwoorden van leerlingen.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-window-close"></i> Stoppen
            </td>
            <td></td>
            <td>
                De huidige quizsessie verlaten.
            </td>
        </tr>
    </tbody>
</table>';
$string['instructions_for_student'] = '<p>Wacht tot de leraar de quiz start.</p>';
$string['instructor_sessions_going'] = 'Er is al een sessie bezig. Klik op de knop hieronder om naar de sessie te gaan';
$string['invalid_question_time'] = 'Vraagtijd moet een heel getal zijn van 0 of groter';
$string['jazzquiz:addinstance'] = 'Een instantie van JazzQuiz toevoegen';
$string['jazzquiz:attempt'] = 'Deelnemen aan een JazzQuiz';
$string['jazzquiz:control'] = 'Een JazzQuiz aansturen. (Doorgaans alleen voor leraren)';
$string['jazzquiz:editquestions'] = 'Vragen bewerken voor een JazzQuiz.';
$string['jazzquiz:seeresponses'] = 'Antwoorden van andere leerlingen bekijken om ze te beoordelen';
$string['jazzquizsettings'] = 'Algemene JazzQuiz instellingen';
$string['join_quiz'] = 'Deelnemen aan Quiz';
$string['join_quiz_instructions'] = 'Klik hieronder om deel te nemen aan de quiz';
$string['jump'] = 'Springen';
$string['loading'] = 'Laden...';
$string['modulename'] = 'JazzQuiz';
$string['modulename_help'] = '<p>Met de activiteit JazzQuiz kun je quizzen opzetten en in real-time te beheren. Alle gebruikelijke vraagtypes kunnen in deze activiteit worden gebruikt.</p>
<p>De leraar kan tijdens een sessie tussen vragen springen. Antwoorden worden live weergegeven in een staafdiagram, geoptimaliseerd voor projectoren. Er is eveneens een modus voor volledig scherm beschikbaar.
Er kan een tijdlimiet worden ingesteld om de vraag automatisch te beëindigen, of de leraar kan de vraag handmatig beëindigen om door te gaan naar de volgende.</p>';
$string['modulenameplural'] = 'JazzQuizzen';
$string['multichoice_options'] = 'Meerkeuzevragen';
$string['next'] = 'Volgende';
$string['no_attempts_found'] = 'Er zijn geen pogingen gevonden.';
$string['no_session'] = 'Er is nog geen geopende sessie';
$string['no_sessions_exist'] = 'Er is nog geen sessie.';
$string['no_students_have_joined'] = 'Er nemen geen leerlingen deel.';
$string['no_time_limit'] = 'Geen tijdlimiet';
$string['no_time_limit_help'] = 'Vink dit veld aan om geen timer op de vraag te hebben. <p>De leraar moet dan op de knop Vraag beëindigen klikken om de vraag te beëindigen.</p>';
$string['nonanonymous_session'] = 'Niet-anonieme sessie';
$string['nonanonymous_session_info'] = 'Dit is een niet-anonieme sessie. Zowel je deelname als je antwoorden worden geregistreerd.';
$string['one_student_has_joined'] = '1 leerling neemt deel.';
$string['pluginadministration'] = 'JazzQuiz beheer';
$string['pluginname'] = 'JazzQuiz';
$string['privacy:metadata:core_question'] = 'De activiteit JazzQuiz bewaart informatie over het vraaggebruik in het subsysteem core_question.';
$string['privacy:metadata:jazzquiz_attempts'] = 'Details over de quizpoging voor een JazzQuiz sessie.';
$string['privacy:metadata:jazzquiz_attempts:responded'] = 'Of de laatst gestelde vraag wel of niet is beantwoord.';
$string['privacy:metadata:jazzquiz_attempts:timefinish'] = 'Het tijdstip waarop de laatste vraag in de poging werd beëindigd.';
$string['privacy:metadata:jazzquiz_attempts:timemodified'] = 'Het tijdstip waarop de laatste vraag in de poging werd gewijzigd.';
$string['privacy:metadata:jazzquiz_attempts:timestart'] = 'Het tijdstip waarop de laatste vraag in de poging werd gestart.';
$string['privacy:metadata:jazzquiz_attempts:userid'] = 'De gebruiker die de poging deed.';
$string['question'] = 'Vraag';
$string['question_move_down'] = 'Verplaats vraag {$a} naar beneden';
$string['question_move_up'] = 'Verplaats vraag {$a} naar boven';
$string['question_time'] = 'Vraagtijd';
$string['question_time_help'] = 'Vraagtijd in seconden.';
$string['question_will_end_in_x_seconds'] = 'De vraag eindigt over {$a} seconden';
$string['question_will_start_in_x_seconds'] = 'De vraag begint over {$a} seconden';
$string['question_will_start_now'] = 'De vraag begint nu';
$string['questions'] = 'Vragen';
$string['quit'] = 'Stoppen';
$string['quiz_not_running'] = '<p>Wacht tot de leraar de quiz start.</p><p>Gebruik de knop Vernieuwen om te controleren of de quiz is begonnen.</p>';
$string['repoll'] = 'Opnieuw peilen';
$string['reports'] = 'Rapporten';
$string['responses'] = 'Antwoorden';
$string['review'] = 'Nakijken';
$string['save_question'] = 'Vraag bewaren';
$string['select_session'] = 'Selecteer sessie om na te kijken:';
$string['session'] = 'Sessie';
$string['session_closed'] = 'Sessie is nu gesloten';
$string['session_name'] = 'Sessienaam';
$string['session_name_required'] = 'De sessienaam is vereist';
$string['short_answer'] = 'Kort antwoord';
$string['short_math_answer'] = 'Kort wiskunde antwoord';
$string['showing_original_results'] = 'Oorspronkelijke resultaten tonen';
$string['showing_vote_results'] = 'Resultaten van stemmen tonen';
$string['start_session'] = 'Sessie starten';
$string['startquiz'] = 'Quiz starten';
$string['student'] = 'Leerling';
$string['teacher_start_instructions'] = '<p>Start een quiz waaraan leerlingen kunnen deelnemen.</p><p>Stel hieronder een sessienaam in om op een later moment de resultaten te kunnen terugvinden.</p>';
$string['unable_to_create_session'] = 'Kon geen sessie aanmaken';
$string['view'] = 'Bekijken';
$string['vote'] = 'Stemmen';
$string['wait_for_instructor'] = 'Wacht tot de leraar de volgende vraag start.';
$string['wait_for_question_time'] = 'Tijd voor wachten op vraag';
$string['wait_for_question_time_help'] = 'De wachttijd voordat een vraag begint.';
$string['wait_for_students'] = 'Wachten tot leerlingen deelnemen';
$string['x_seconds_left'] = '{$a} s over';
$string['x_students_have_joined'] = '{$a} leerlingen nemen deel.';
$string['you_already_voted'] = 'Sorry, je hebt al gestemd.';
