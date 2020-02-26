<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'feedback', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   feedback
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Frage hinzufügen';
$string['add_pagebreak'] = 'Seitenumbruch hinzufügen';
$string['adjustment'] = 'Ausrichtung';
$string['after_submit'] = 'Nach der Abgabe';
$string['allowfullanonymous'] = 'Völlige Anonymität erlauben';
$string['analysis'] = 'Auswertung';
$string['anonymous'] = 'Anonym';
$string['anonymous_edit'] = 'Anonym ausfüllen';
$string['anonymous_entries'] = 'Anonyme Einträge ({$a})';
$string['anonymous_user'] = 'Anonyme Person';
$string['answerquestions'] = 'Frage beantworten';
$string['append_new_items'] = 'Neue Elemente anfügen';
$string['autonumbering'] = 'Automatische Nummerierung';
$string['autonumbering_help'] = 'Diese Option aktiviert die automatische Nummerierung aller Fragen.';
$string['average'] = 'Mittelwert';
$string['bold'] = 'Fett';
$string['calendarend'] = '{$a} endet';
$string['calendarstart'] = '{$a} beginnt';
$string['cannotaccess'] = 'Sie können auf dieses Feedback nur aus einem Kurs zugreifen.';
$string['cannotsavetempl'] = 'Vorlagen speichern ist nicht erlaubt';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Captcha wurde nicht gewählt';
$string['check'] = 'Mehrere Antworten';
$string['checkbox'] = 'Mehrere Antworten erlaubt (Checkboxen)';
$string['check_values'] = 'Antworten';
$string['choosefile'] = 'Datei auswählen';
$string['chosen_feedback_response'] = 'Gewählte Feedback-Antwort';
$string['closebeforeopen'] = 'Das Feedbackende muss nach dem Feedbackbeginn liegen.';
$string['completed'] = 'Abgeschlossen';
$string['completed_feedbacks'] = 'Ausgefüllte Feedbacks';
$string['completedon'] = 'Abgeschlossen am {$a}';
$string['complete_the_form'] = 'Beantworten Sie die Fragen';
$string['completionsubmit'] = 'Als abgeschlossen ansehen, wenn das Feedback abgegeben wurde';
$string['configallowfullanonymous'] = 'Wenn diese Option aktiviert ist, kann ein Feedback ohne vorhergehende Anmeldung abgegeben werden. Dies betrifft aber ausschließlich Feedbacks auf der Startseite.';
$string['confirmdeleteentry'] = 'Möchten Sie diesen Eintrag wirklich löschen?';
$string['confirmdeleteitem'] = 'Möchten Sie dieses Element wirklich löschen?';
$string['confirmdeletetemplate'] = 'Möchten Sie diese Vorlage wirklich löschen?';
$string['confirmusetemplate'] = 'Möchten Sie diese Vorlage wirklich nutzen?';
$string['continue_the_form'] = 'Ausfüllen des Fragebogens fortsetzen';
$string['count_of_nums'] = 'Anzahl von Werten';
$string['courseid'] = 'Kurs-ID';
$string['creating_templates'] = 'Diese Fragen als neue Vorlage speichern';
$string['delete_entry'] = 'Eintrag löschen';
$string['delete_item'] = 'Element löschen';
$string['delete_old_items'] = 'Alte Elemente löschen';
$string['delete_pagebreak'] = 'Seitenumbruch löschen';
$string['delete_template'] = 'Vorlage löschen';
$string['delete_templates'] = 'Vorlagen löschen...';
$string['depending'] = 'Abhängige Elemente';
$string['depending_help'] = 'Abhängige Elemente erlauben es Ihnen zu zeigen, wie Elemente mit den Werten anderer Elemente zusammenhängen<br /><br />
<strong>Beispiel für abhängige Elemente:</strong>
<ul>
<li>Zuerst legen Sie das Element an, von dem andere Elemente abhängen sollen.</li>
<li>Jetzt fügen Sie einen Seitenumbruch hinzu.</li>
<li>Danach fügen Sie die Elemente hinzu, die von dem vorherigen Elementewert abhängen sollen.<br />
Wählen Sie bei der Erstellung das Format "Abhängiges Element" und setzen Sie den notwendigen Wert auf "Abhängiger Wert"</li>
</ul>
<strong>Die Struktur sollte folgendermaßen aussehen:</strong>
<ol>
<li>Element - Frage: Haben Sie ein Auto? Antwort: ja/nein</li>
<li>Seitenumbruch</li>
<li>Element - Frage: Welche Farbe hat Ihr Auto?<br />
(Dieses Element bezieht sich auf den Wert \'ja\' des Elements 1)</li>
<li>Element - Frage: Warum haben Sie kein Auto?<br />
(Dieses Element bezieht sich auf den Wert \'nein\' des Elements 1)</li>
<li> ... weitere Elemente</li>
</ol>
Das war schon alles. Viel Erfolg!';
$string['dependitem'] = 'Abhängiges Element';
$string['dependvalue'] = 'Abhängiger Wert';
$string['description'] = 'Beschreibung';
$string['do_not_analyse_empty_submits'] = 'Leere Abgaben ignorieren';
$string['downloadresponseas'] = 'Alle Antworten herunterladen als:';
$string['dropdown'] = 'Multiple Choice - einzelne Antwort (Dropdown)';
$string['dropdownlist'] = 'Multiple Choice - einzelne Antwort (Dropdown)';
$string['dropdownrated'] = 'Dropdown-Menü (skaliert)';
$string['dropdown_values'] = 'Antworten';
$string['drop_feedback'] = 'Aus diesem Kurs entfernen';
$string['edit_item'] = 'Element bearbeiten';
$string['edit_items'] = 'Elemente bearbeiten';
$string['email_notification'] = 'Systemnachricht bei Abgabe senden';
$string['email_notification_help'] = 'Wenn diese Option aktiviert ist, bekommen die Trainer/innen bei Feedback-Abgaben eine Systemnachricht.';
$string['emailteachermail'] = '{$a->username} hat das Feedback \'{$a->feedback}\' abgeschlossen.

Sie können es hier anschauen:

{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} hat das Feedback \'{$a->feedback}\' abgeschlossen</p><p>
Das Feedback ist <a href="{$a->url}">auf der Webseite</a> verfügbar.';
$string['entries_saved'] = 'Einträge wurden gespeichert';
$string['eventresponsedeleted'] = 'Antwort gelöscht';
$string['eventresponsesubmitted'] = 'Antwort abgegeben';
$string['export_questions'] = 'Fragen exportieren';
$string['export_to_excel'] = 'Nach Excel exportieren';
$string['feedback:addinstance'] = 'Neues Feedback hinzufügen';
$string['feedbackclose'] = 'Antworten erlauben bis';
$string['feedback:complete'] = 'Ausfüllen eines Feedbacks';
$string['feedbackcompleted'] = '{$a->username} hat {$a->feedbackname} abgeschlossen.';
$string['feedback:createprivatetemplate'] = 'Erstellen eines kursinternen Templates';
$string['feedback:createpublictemplate'] = 'Erstellen eines öffentlichten Templates';
$string['feedback:deletesubmissions'] = 'Vollständige Einträge löschen';
$string['feedback:deletetemplate'] = 'Templates löschen';
$string['feedback:edititems'] = 'Fragen bearbeiten';
$string['feedback_is_not_for_anonymous'] = 'Das Feedback ist nicht für anonyme Personen.';
$string['feedback_is_not_open'] = 'Ein Feedback ist zu diesem Zeitpunkt nicht möglich';
$string['feedback:mapcourse'] = 'Kurse globalen Feedbacks zuordnen';
$string['feedbackopen'] = 'Antworten erlauben ab';
$string['feedback:receivemail'] = 'E-Mail-Nachricht empfangen';
$string['feedback:view'] = 'Feedback anzeigen';
$string['feedback:viewanalysepage'] = 'Analyseseite nach der Abgabe anzeigen';
$string['feedback:viewreports'] = 'Auswertungen anzeigen';
$string['file'] = 'Datei';
$string['filter_by_course'] = 'Kursfilter';
$string['handling_error'] = 'Fehler beim Module-Action-Handling';
$string['hide_no_select_option'] = 'Option \'Nicht ausgewählt\' verbergen';
$string['horizontal'] = 'Nebeneinander';
$string['importfromthisfile'] = 'Von ausgewählter Datei importieren';
$string['import_questions'] = 'Fragen importieren';
$string['import_successfully'] = 'Erfolgreich importiert';
$string['indicator:cognitivedepth'] = 'Feedback kognitiv';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die ein/e Teilnehmer/in in einer Feedback-Aktivität erreicht hat.';
$string['indicator:socialbreadth'] = 'Feedback sozial';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die ein/e Teilnehmer/in in einer Feedback-Aktivität erreicht hat.';
$string['info'] = 'Information';
$string['infotype'] = 'Information';
$string['insufficient_responses'] = 'Unzulängliche Antworten';
$string['insufficient_responses_for_this_group'] = 'Es gibt unzulängliche Antworten für diese Gruppe';
$string['insufficient_responses_help'] = 'Um das Feedback anonym zu halten, müssen mindestens zwei Antworten abgegeben werden.';
$string['item_label'] = 'Bezeichnung';
$string['item_name'] = 'Fragetext/Erläuterung';
$string['label'] = 'Textfeld';
$string['labelcontents'] = 'Inhalte';
$string['mapcourse'] = 'Kurs zuordnen';
$string['mapcourse_help'] = 'Standardmäßig sind Feedbacks, die Sie auf Ihrer Startseite erstellt haben, auf der gesamten Website verfügbar und werden über den Block Feedback in allen Kursen auftauchen.

Sie können das Erscheinen in jedem Kurs erzwingen, indem Sie einen festen Block erzeugen. Andererseits können Sie das Feedback auf ausgewählte Kurse einschränken, indem Sie das Feedback mit bestimmten Kursen verknüpfen.';
$string['mapcourseinfo'] = 'Dies ist ein globales Feedback. Es ist in allen Kursen verfügbar, die den Feedback-Block nutzen. Die Kurse in denen das Feedback erscheinen sollen, können begrenzt werden durch explizites Zuordnen. Dazu muss der Kurs gesucht und diesem Feedback zugeordnet werden.';
$string['mapcoursenone'] = 'Keinem Kurs zugeordnet. Dieses Feedback ist in allen Kursen verfügbar';
$string['mapcourses'] = 'Feedback zu Kursen zuordnen';
$string['mappedcourses'] = 'Zugeordnete Kurse';
$string['mappingchanged'] = 'Kursstruktur wurde geändert';
$string['maximal'] = 'Maximal';
$string['messageprovider:message'] = 'Systemnachricht zu Feedback';
$string['messageprovider:submission'] = 'Systemnachrichten bei Feedback';
$string['minimal'] = 'Minimal';
$string['mode'] = 'Modus';
$string['modulename'] = 'Feedback';
$string['modulename_help'] = 'Mit dem Feedback können Sie eigene Umfragen oder Evaluationsformulare anlegen, wofür eine Reihe von Fragetypen zur Verfügung stehen.

Die Antworten können Personen zugeordnet oder anonym erfolgen. Die Ergebnisse können Sie nach dem Ausfüllen anzeigen lassen und später als Datei exportieren.

Feedbacks auf der Startseite können völlig anonym auch von nicht angemeldeten Personen ausgefüllt und abgegeben werden.

Legen Sie Feedback-Fragebögen zentral an und setzen Sie sie in ausgewählten Kursen ein.';
$string['modulenameplural'] = 'Feedback';
$string['move_item'] = 'Element verschieben';
$string['multichoice'] = 'Multiple-Choice';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span> {$a->name}';
$string['multichoicerated'] = 'Multiple-Choice (skaliert)';
$string['multichoicetype'] = 'Typ';
$string['multichoice_values'] = 'Antworten';
$string['multiplesubmit'] = 'Mehrfache Abgabe';
$string['multiplesubmit_help'] = 'Wenn die Option für anonyme Auswertungen aktiviert ist, dürfen Nutzer/innen das Feedback beliebig oft abgeben.';
$string['name'] = 'Name';
$string['name_required'] = 'Name benötigt';
$string['next_page'] = 'Nächste Seite';
$string['no_handler'] = 'Keine Aktion gefunden!';
$string['no_itemlabel'] = 'Keine Bezeichnung';
$string['no_itemname'] = 'Keine Bezeichnung des Eintrags';
$string['no_items_available_yet'] = 'Noch keine Elemente definiert';
$string['non_anonymous'] = 'Nicht anonym';
$string['non_anonymous_entries'] = 'Nicht-anonyme Einträge ({$a})';
$string['non_respondents_students'] = 'Teilnehmer/innen ohne Antwort ({$a})';
$string['not_completed_yet'] = 'Noch nicht ausgefüllt';
$string['no_templates_available_yet'] = 'Noch keine Vorlagen definiert';
$string['not_selected'] = 'Nicht ausgewählt';
$string['not_started'] = 'Nicht begonnen';
$string['numberoutofrange'] = 'Zahl außerhalb des Bereichs';
$string['numeric'] = 'Numerische Antwort';
$string['numeric_range_from'] = 'Bereich von';
$string['numeric_range_to'] = 'Bereich bis';
$string['of'] = 'von';
$string['oldvaluespreserved'] = 'Alle alten Fragen und eingegebenen Werte werden aufbewahrt';
$string['oldvalueswillbedeleted'] = 'Die aktuellen Fragen und alle Antworten werden gelöscht.';
$string['only_one_captcha_allowed'] = 'Im Feedback ist nur ein Captcha erlaubt';
$string['openafterclose'] = 'Sie haben ein Startdatum angelegt, das nach dem Enddatum liegt.';
$string['overview'] = 'Überblick';
$string['page'] = 'Seite';
$string['page_after_submit'] = 'Abschlussmitteilung';
$string['pagebreak'] = 'Seitenumbruch';
$string['page-mod-feedback-x'] = 'Jede Feedback-Seite';
$string['pluginadministration'] = 'Feedback-Administration';
$string['pluginname'] = 'Feedback';
$string['position'] = 'Position';
$string['previous_page'] = 'Vorherige Seite';
$string['privacy:metadata:completed'] = 'Datensatz über beantwortete Feedback-Fragebögen';
$string['privacy:metadata:completed:anonymousresponse'] = 'Hier wird festgelegt, ob die Abgabe anonymisiert stattfinden soll.';
$string['privacy:metadata:completed:timemodified'] = 'Zeitpunkt der letzten Bearbeitung der Abgabe.';
$string['privacy:metadata:completedtmp'] = 'Datensatz über Beantwortungen im Feedback, die noch nicht abgeschlossen sind';
$string['privacy:metadata:completed:userid'] = 'ID des Nutzers, der die Feedback Aktivität abgeschlossen hat.';
$string['privacy:metadata:value'] = 'Datensatz mit Antworten auf Fragen';
$string['privacy:metadata:valuetmp'] = 'Datensatz mit Antworten auf Fragen, wenn das Feedback noch nicht abgeschlossen ist';
$string['privacy:metadata:value:value'] = 'Gewählte Antwort';
$string['public'] = 'öffentlich';
$string['question'] = 'Frage';
$string['questionandsubmission'] = 'Einstellungen für Fragen und Einträge';
$string['questions'] = 'Fragen';
$string['questionslimited'] = 'Nur die ersten {$a} Fragen werden angezeigt. Um alles zu sehen, lassen Sie sich die individuellen Antworten anzeigen oder laden Sie die gesamte Tabelle herunter.';
$string['radio'] = 'Einzelne Antwort - Radiobutton';
$string['radio_values'] = 'Antworten';
$string['ready_feedbacks'] = 'Fertige Feedbacks';
$string['required'] = 'Erforderlich';
$string['resetting_data'] = 'Feedback-Antworten zurücksetzen';
$string['resetting_feedbacks'] = 'Feedbacks werden zurückgesetzt';
$string['response_nr'] = 'Antwort Nr.';
$string['responses'] = 'Antworten';
$string['responsetime'] = 'Antwortzeit';
$string['save_as_new_item'] = 'Als neue Frage speichern';
$string['save_as_new_template'] = 'Als neue Vorlage speichern';
$string['save_entries'] = 'Einträge speichern';
$string['save_item'] = 'Element speichern';
$string['saving_failed'] = 'Fehler beim Speichern';
$string['search:activity'] = 'Feedback - Beschreibung';
$string['search_course'] = 'Kurs suchen';
$string['searchcourses'] = 'Kurse suchen';
$string['searchcourses_help'] = 'Nach Codes oder Namen von Kursen suchen, die Sie diesem Feedback zuordnen möchten';
$string['selected_dump'] = 'Dump der ausgewählten Indexe der Variable $SESSION:';
$string['send'] = 'Senden';
$string['send_message'] = 'Mitteilung senden';
$string['show_all'] = 'Alle anzeigen';
$string['show_analysepage_after_submit'] = 'Analyseseite nach der Abgabe anzeigen';
$string['show_entries'] = 'Einträge anzeigen';
$string['show_entry'] = 'Eintrag anzeigen';
$string['show_nonrespondents'] = 'Ohne Antwort';
$string['site_after_submit'] = 'Seite nach Eingabe';
$string['sort_by_course'] = 'Sortiert nach Kursen';
$string['started'] = 'Begonnen';
$string['startedon'] = 'Begonnen am {$a}';
$string['subject'] = 'Thema';
$string['switch_item_to_not_required'] = 'Als nicht notwendig setzen';
$string['switch_item_to_required'] = 'Als notwendig setzen';
$string['template'] = 'Vorlage';
$string['template_deleted'] = 'Vorlage gelöscht';
$string['templates'] = 'Vorlagen';
$string['template_saved'] = 'Vorlage gespeichert';
$string['textarea'] = 'Eingabebereich';
$string['textarea_height'] = 'Anzahl der Zeilen';
$string['textarea_width'] = 'Breite des Textbereiches';
$string['textfield'] = 'Eingabezeile';
$string['textfield_maxlength'] = 'Maximale Zeichenzahl';
$string['textfield_size'] = 'Breite des Textfeldes';
$string['there_are_no_settings_for_recaptcha'] = 'Keine Einstellungen für das Captcha';
$string['this_feedback_is_already_submitted'] = 'Sie haben diese Aktivität bereits beendet.';
$string['typemissing'] = 'Fehlender Wert \'Typ"';
$string['update_item'] = 'Element aktualisieren';
$string['url_for_continue'] = 'URL für den Knopf "Weiter"';
$string['url_for_continue_help'] = 'Nach der Abgabe des Feedbacks wird ein Knopf "Weiter" gezeigt. Standardmäßig ist die Kursseite als Ziel eingestellt. Falls Sie auf eine andere URL verlinken möchten, so können Sie hier das Ziel dafür angeben.';
$string['use_one_line_for_each_value'] = 'Benutzen Sie für jede Antwort eine neue Zeile!';
$string['use_this_template'] = 'Diese Vorlage verwenden';
$string['using_templates'] = 'Vorlagen verwenden';
$string['vertical'] = 'Untereinander';
