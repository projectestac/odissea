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
 * Strings for component 'jazzquiz', language 'de', version '4.4'.
 *
 * @package     jazzquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_out_of_b_responded'] = '{$a->a} / {$a->b} Antworten';
$string['a_out_of_b_voted'] = '{$a->a} / {$a->b} Stimmen';
$string['a_responses'] = '{$a} Antworten';
$string['a_students_answered'] = '<b>{$a}</b> Teilnehmer/innen haben zumindest eine Frage beantwortet.';
$string['a_students_joined_quiz'] = '<b>{$a}</b> Teilnehmer/innen haben am Test teilgenommen.';
$string['add'] = 'Hinzufügen';
$string['add_question'] = 'Frage hinzufügen';
$string['add_to_quiz'] = 'Zum Test hinzufügen';
$string['allow_guests'] = 'Gäste zulassen';
$string['anonymous'] = 'Anonym';
$string['anonymous_answers'] = 'Anonyme Antworten (Teilnahme kann eingesehen werden)';
$string['anonymous_answers_info'] = 'Antworten werden in dieser Session anonymisiert. Ihre Teilnahme wird dennoch gespeichert.';
$string['answer'] = 'Antwort';
$string['ask_teacher'] = 'Wenn Sie unsicher sind, fragen Sie Ihre Trainer/innen.';
$string['attempt_started'] = 'Sie haben bereits einen Versuch gestartet. Bitte klicken Sie unten, um den offenen Versuch fortzusetzen.';
$string['attempts'] = 'Versuche';
$string['attendance'] = 'Teilnahme';
$string['attendance_list'] = 'Teilnehmerliste';
$string['click_to_show_original_results'] = 'Die ursprünglichen Ergebnisse anzeigen';
$string['click_to_show_vote_results'] = 'Abstimmungsergebnisse anzeigen';
$string['closing_session'] = 'Session abschließen...';
$string['create_new_question'] = 'Neue Frage erstellen';
$string['default_question_time'] = 'Standardmäßige Antwortzeit';
$string['default_question_time_help'] = 'Die Zeit, die jede Frage angezeigt wird.<br>Dies kann für jede Frage einzeln eingestellt werden.';
$string['delete_question'] = 'Frage {$a} löschen';
$string['delete_report'] = 'Bericht löschen';
$string['download_attendance_list'] = 'Teilnehmerliste herunterladen';
$string['download_report'] = 'Bericht herunterladen';
$string['download_responses'] = 'Antworten herunterladen';
$string['edit'] = 'Bearbeiten';
$string['edit_page_open_session_error'] = 'Sie können den Test nicht bearbeiten, während eine Session offen ist.';
$string['edit_question'] = 'Frage bearbeiten';
$string['end'] = 'Beenden';
$string['error_getting_current_results'] = 'Beim Laden der aktuellen Ergebnisse ist ein Fehler aufgetreten.';
$string['error_getting_vote_results'] = 'Beim Laden der Abstimmungsergebnisse ist ein Fehler aufgetreten.';
$string['error_saving_vote'] = 'Beim Speichern Ihrer Abstimmung ist ein Fehler aufgetreten.';
$string['error_starting_vote'] = 'Beim Starten der Abstimmung ist ein Fehler aufgetreten.';
$string['error_with_request'] = 'Bei der Anfrage ist ein Fehler aufgetreten.';
$string['event_attempt_started'] = 'Versuch begonnen';
$string['event_question_answered'] = 'Frage für den Versuch beantwortet';
$string['exit'] = 'Beenden';
$string['failed_to_end_question'] = 'Frage konnte nicht beendet werden';
$string['fullscreen'] = 'Vollbild';
$string['fully_anonymous'] = 'Vollständig anonym';
$string['fully_anonymous_info'] = 'Sowohl Antworten als auch Teilnahme werden in dieser Session völlig anonymisiert.';
$string['goto_session'] = 'Aktive Session öffnen';
$string['guest_login'] = 'Sie sind nicht im Kurs eingeschrieben und es gibt derzeit keine Testsession, die für Gäste offen ist.';
$string['improvise'] = 'Improvisieren';
$string['instructions_for_instructor'] = '<h3>Bitte lesen Sie die Anleitung:</h3>
    <p>Sie können Hotkeys verwenden, wenn das Eingabefeld nicht automatisch aktiv wird.</p>
    <table>
        <tr>
               <th>Steuerzeichen</th>
               <th>Hotkey</th>
               <th>Beschreibung</th>
        </tr>
        <tr>
            <td>
                <i class="fa fa-repeat"></i> Erneut fragen
            </td>
            <td>r</td>
            <td>
                Ermöglicht es Trainer/innen, die soeben gestellte Frage erneut zu stellen. Diese Funktion ist ident mit dem <i class="fa fa-bars"></i> Springen-zu DropDown
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bar-chart"></i> Abstimmung
            </td>
            <td>v</td>
            <td>
                 Die Teilnehmer/innen bewerten ihre Antworten.
                 Die Trainer/innen können Antworten markieren, über die abgestimmt werden sollte.
                 Wenn Sie auf den Balken der jeweiligen Antwort klicken, wird diese Antwort zusammengeführt. Dieser Balken überdeckt den Balken, den Sie als nächstes anklicken.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-edit"></i> Improvisieren
            </td>
            <td>i</td>
            <td>
                Zeigt eine Liste von Fragen, die zur Improvisation geeignet sind. Schreiben Sie die Frage an die Tafel und fragen Sie nach Input.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars"></i> Springen
            </td>
            <td>j</td>
            <td>
                Zeigt eine Liste aller Fragen im Test an.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-forward"></i> Weiter
            </td>
            <td>n</td>
            <td>
                Zeigt die nächste Frage im Test an.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-random"></i> Zufall
            </td>
            <td>m</td>
            <td>
               Zeigt eine zufällige Frage aus dem Test an.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-close"></i> Beenden
            </td>
            <td>e</td>
            <td>
                Beendet die aktuelle Frage.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-expand"></i> Vollbild
            </td>
            <td>f</td>
            <td>
Zeigt die Ergebnisse im Vollbildmodus an. Die Antworten scheinen nicht auf, wenn die Frage angezeigt wird. Diese Ansicht kann also für die gesamte Session beibehalten werden.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Antowrt
            </td>
            <td>a</td>
            <td>
                Zeigt den Trainer/innen die Frage mit der richtigen Antwort an.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Antworten
            </td>
            <td>t (toggle)</td>
            <td>
               Antworten der Teilnehmer/innen werden angezeigt oder verborgen.
            </td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-window-close"></i> Schließen
            </td>
            <td></td>
            <td>
                Schließt die aktuelle Testession.
            </td>
        </tr>
    </table>';
$string['instructions_for_student'] = '<p>Der Test muss erst durch die Trainer/innen gestartet werden.</p>';
$string['instructor_sessions_going'] = 'Es läuft gerade eine Session. Bitte klicken Sie auf den Button unten um an der Session teilzunehmen.';
$string['invalid_question_time'] = 'Die Fragezeit muss eine ganze Zahl größer gleich 0 sein.';
$string['jazzquiz:addinstance'] = 'Eine JazzQuiz-Instanz hinzufügen';
$string['jazzquiz:attempt'] = 'Einen JazzQuiz-Versuch starten';
$string['jazzquiz:control'] = 'Ein JazzQuiz überprüfen. (Nur für Trainer/innen)';
$string['jazzquiz:editquestions'] = 'Fragen in einem JazzQuiz bearbeiten';
$string['jazzquiz:seeresponses'] = 'Andere Antworten von Teilnehmer/innen anzeigen, um diese zu bewerten';
$string['jazzquizsettings'] = 'Allgemeine Einstellungen JazzQuiz';
$string['join_quiz'] = 'Am Test teilnehmen';
$string['join_quiz_instructions'] = 'Klicken Sie unten, um am Test teilzunehmen';
$string['jump'] = 'Springen';
$string['loading'] = 'Lädt ...';
$string['modulename'] = 'JazzQuiz';
$string['modulename_help'] = '<p>
    Die Aktivität JazzQuiz ermöglicht es Trainerinnen und Trainern Live-Quiz zu erstellen und zu verwalten. Alle Standard-Fragetypen können im JazzQuiz verwendet werden.
</p>
<p>
    Während einer Session, können Trainer/innen zu unterschiedlichen Fragen springen.
    Antworten werden in einem Live-Balkendiagramm angezeigt, das für Beamer optimiert ist. Ein Vollbildmodus ist auch verfügbar.
    Für jede Frage kann ein Zeitlimit festgelegt werden oder die Trainer/innen können die Zeit für die Beantwortung einer Frage manuell begrenzen und zur nächsten Frage weiterspringen.
</p>';
$string['modulenameplural'] = 'JazzQuiz';
$string['multichoice_options'] = 'Multiple Choice Antworten';
$string['next'] = 'Weiter';
$string['no_attempts_found'] = 'Keine Versuche verfügbar.';
$string['no_guests'] = 'Möglicherweise haben die Trainer/innen noch keine Quiz Session gestartet. Sie können es später noch einmal versuchen. Es könnte auch sein, dass Sie sich als Teilnehmer/in anmelden und in den Kurs einschreiben müssen, um am Quiz teilnzunehmen.';
$string['no_session'] = 'Es gibt keine offenen Sessions';
$string['no_sessions_exist'] = 'Es gibt keine Sessions.';
$string['no_students_have_joined'] = 'Es gibt noch keine Teilnehmer/innen';
$string['no_time_limit'] = 'Kein Zeitlimit';
$string['no_time_limit_help'] = 'Aktivieren Sie die Checkbox, um kein Zeitlimit für diese Frage zu setzen. <p>Die Trainer/innen müssen dann durch Klick auf den "Frage beenden" Button zur nächsten Frage weiterspringen.';
$string['nonanonymous_session'] = 'Nicht-Anonymisierte Session';
$string['nonanonymous_session_info'] = 'Dies ist eine nicht-anonymisierte Session. Sowohl Teilnahme als auch Antworten werden gespeichert.';
$string['one_student_has_joined'] = '1 Teilnehmer/in';
$string['pluginadministration'] = 'JazzQuiz Verwaltung';
$string['pluginname'] = 'JazzQuiz';
$string['privacy:metadata:core_question'] = 'Die Aktivität JazzQuiz speichert die Informationen zur Verwendung von Fragen im core_question System.';
$string['privacy:metadata:jazzquiz_attempts'] = 'Details zum Quiz Versuch einer JazzQuiz Session.';
$string['privacy:metadata:jazzquiz_attempts:responded'] = 'Ob die zuletzt gestellte Frage beantwortet wurde.';
$string['privacy:metadata:jazzquiz_attempts:timefinish'] = 'Die Zeit in der die letzte Frage des Versuchs beendet wurde.';
$string['privacy:metadata:jazzquiz_attempts:timemodified'] = 'Zeitpunkt der letzten Bearbeitung der Frage in einem Versuch.';
$string['privacy:metadata:jazzquiz_attempts:timestart'] = 'Zeitpunkt an dem die Frage in dem Versuch gestartet wurde.';
$string['privacy:metadata:jazzquiz_attempts:userid'] = 'Teilnehmer/in der/die den Versuch gestartet hat.';
$string['question'] = 'Frage';
$string['question_move_down'] = 'Frage {$a} nach unten schieben';
$string['question_move_up'] = 'Frage {$a} nach oben schieben';
$string['question_time'] = 'Fragezeit';
$string['question_time_help'] = 'Fragezeit in Sekunden';
$string['question_will_end_in_x_seconds'] = 'Die Frage wird in {$a} Sekunden beendet';
$string['question_will_start_in_x_seconds'] = 'Die Frage startet in {$a} Sekunden';
$string['question_will_start_now'] = 'Die Frage startet jetzt';
$string['questions'] = 'Fragen';
$string['quit'] = 'Schließen';
$string['quiz_not_running'] = '<p>Warten Sie bis die Trainer/innen den Test gestartet hat.</p><p>Laden Sie den Test gegebenenfalls neu.</p>';
$string['random'] = 'Zufall';
$string['repoll'] = 'Erneut fragen';
$string['reports'] = 'Berichte';
$string['responses'] = 'Antworten';
$string['review'] = 'Überprüfen';
$string['save_question'] = 'Frage speichern';
$string['select_session'] = 'Session für die Überprüfung auswählen';
$string['session'] = 'Session';
$string['session_closed'] = 'Die Session wird jetzt beendet';
$string['session_name'] = 'Session Name';
$string['session_name_required'] = 'Ein Session Name ist erforderlich';
$string['short_answer'] = 'Kurzantwort';
$string['short_math_answer'] = 'Kurzantwort Mathematik';
$string['showing_original_results'] = 'Ursprüngliche Ergebnisse anzeigen';
$string['showing_vote_results'] = 'Abstimmungs-Ergebnisse anzeigen';
$string['start_session'] = 'Session starten';
$string['startquiz'] = 'Quiz starten';
$string['student'] = 'Teilnehmer/in';
$string['teacher_start_instructions'] = '<p>Starten Sie das Quiz für die Teilnehmer/innen</p><p>Geben Sie einen Session Namen ein, um die Ergebnisse später einzusehen.</p>';
$string['unable_to_create_session'] = 'Session kann nicht erstellt werden';
$string['view'] = 'Anzeigen';
$string['vote'] = 'Abstimmen';
$string['wait_for_instructor'] = 'Bitte warten Sie bis die Trainerin/der Trainer die nächste Frage startet.';
$string['wait_for_question_time'] = 'Frage-Zeit abwarten';
$string['wait_for_question_time_help'] = 'Zeit bis eine neue Frage gestartet wird.';
$string['wait_for_students'] = 'Auf Teilnehmer/innen warten';
$string['x_seconds_left'] = 'noch {$a}n';
$string['x_students_have_joined'] = '{$a} Teilnehmer/innen';
$string['you_already_voted'] = 'Sie haben bereits abgestimmt.';
