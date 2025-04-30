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
 * Strings for component 'feedback', language 'de', version '4.4'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
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
$string['answerquestions'] = 'Fragen beantworten';
$string['append_new_items'] = 'Neue Elemente anfügen';
$string['autonumbering'] = 'Automatische Nummerierung';
$string['autonumbering_help'] = 'Diese Option aktiviert die automatische Nummerierung der Fragen.';
$string['average'] = 'Mittelwert';
$string['bold'] = 'Fett';
$string['calendarend'] = '{$a} endet';
$string['calendarstart'] = '{$a} beginnt';
$string['cannotaccess'] = 'Sie können auf dieses Formular nur aus einem Kurs zugreifen.';
$string['cannotcreatepagebreak'] = 'Seitenumbrüche können nicht am Anfang eines Feedbacks hinzugefügt werden. Am Ende kann nur ein Seitenumbruch sein';
$string['cannotsavetempl'] = 'Vorlagen speichern ist nicht erlaubt';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Captcha wurde nicht ausgefüllt';
$string['check'] = 'Mehrere Antworten';
$string['check_values'] = 'Antworten';
$string['checkbox'] = 'Mehrere Antworten erlaubt (Checkboxen)';
$string['choosefile'] = 'Datei auswählen';
$string['chosen_feedback_response'] = 'Gewählte Antwort';
$string['closebeforeopen'] = 'Das Ende des Feedbacks muss nach dem Beginn liegen.';
$string['complete_the_form'] = 'Formular ausfüllen';
$string['completed'] = 'Abgeschlossen';
$string['completed_feedbacks'] = 'Ausgefüllte Feedbacks';
$string['completedon'] = 'Abgeschlossen am {$a}';
$string['completiondetail:submit'] = 'Feedback einreichen';
$string['completionsubmit'] = 'Feedback abgeben';
$string['configallowfullanonymous'] = 'Wenn diese Option aktiviert ist, kann ein Feedback ohne Anmeldung abgegeben werden. Dies betrifft aber ausschließlich Feedbacks auf der Startseite.';
$string['confirmdeleteentry'] = 'Möchten Sie diesen Eintrag wirklich löschen?';
$string['confirmdeleteitem'] = 'Möchten Sie dieses Element wirklich löschen?';
$string['confirmdeletetemplate'] = 'Möchten Sie diese Vorlage wirklich löschen?';
$string['confirmusetemplate'] = 'Möchten Sie diese Vorlage wirklich verwenden?';
$string['continue_the_form'] = 'Ausfüllen des Formulars fortsetzen';
$string['count_of_nums'] = 'Anzahl von Werten';
$string['courseid'] = 'Kurs-ID';
$string['creating_templates'] = 'Diese Fragen als neue Vorlage speichern';
$string['delete_entry'] = 'Eintrag löschen';
$string['delete_item'] = 'Element löschen';
$string['delete_old_items'] = 'Alte Elemente löschen';
$string['delete_pagebreak'] = 'Seitenumbruch löschen';
$string['delete_template'] = 'Vorlage löschen';
$string['delete_templates'] = 'Vorlage löschen...';
$string['depending'] = 'Abhängigkeiten';
$string['depending_help'] = 'Ein abhängiges Element wird in Abhängigkeit von einem anderen Element angezeigt.<br /><br />
<strong>Beispiel:</strong>
<ul>
<li>Legen Sie zunächst das Element an, von dem ein anderes Element abhängt.</li>
<li>Fügen Sie dann einen Seitenumbruch hinzu.</li>
<li>Fügen Sie nun die Elemente hinzu, die vom Wert des zuvor erstellten Elements abhängen. Wählen Sie das Element in der Liste "Abhängigkeitselement" aus und legen Sie den erforderlichen Wert im Feld "Abhängigkeitswert" fest.</li>
</ul>
<strong>Die Struktur sollte folgendermaßen aussehen:</strong>
<ol>
<li>Element - Frage: Haben Sie ein Auto? Antwort: ja/nein</li>
<li>Seitenumbruch</li>
<li>Element - Frage: Welche Farbe hat Ihr Auto?<br />
(Dieses Element wird bei der Antwort "ja" in der ersten Frage angezeigt)</li>
<li>Element - Frage: Warum haben Sie kein Auto?<br />
(Dieses Element wird bei der Antwort "nein" in der ersten Frage angezeigt)</li>
<li> ... weitere Elemente</li>
</ol>
Das ist schon alles.';
$string['dependitem'] = 'Abhängigkeitselement';
$string['dependvalue'] = 'Abhängigkeitswert';
$string['description'] = 'Beschreibung';
$string['do_not_analyse_empty_submits'] = 'Leere Abgaben bei Analytics weglassen';
$string['downloadresponseas'] = 'Alle Antworten herunterladen als:';
$string['drop_feedback'] = 'Aus diesem Kurs entfernen';
$string['dropdown'] = 'Multiple Choice - einzelne Antwort (Dropdown)';
$string['dropdown_values'] = 'Antworten';
$string['dropdownlist'] = 'Multiple Choice - einzelne Antwort (Dropdown)';
$string['dropdownrated'] = 'Dropdown-Menü (skaliert)';
$string['edit_item'] = 'Element bearbeiten';
$string['edit_items'] = 'Elemente bearbeiten';
$string['email_notification'] = 'Systemnachricht bei Abgaben senden';
$string['email_notification_help'] = 'Wenn diese Option aktiviert ist, bekommen die Trainer/innen bei Feedback-Abgaben eine Systemnachricht.';
$string['emailteachermail'] = '{$a->username} hat das Feedback \'{$a->feedback}\' abgeschlossen.

Sie können es hier anschauen:

{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} hat das Feedback \'{$a->feedback}\' abgeschlossen</p><p>
Das Feedback ist <a href="{$a->url}">auf der Webseite</a> verfügbar.</p>';
$string['entries_saved'] = 'Die Einträge wurden gespeichert.';
$string['eventresponsedeleted'] = 'Antwort gelöscht';
$string['eventresponsesubmitted'] = 'Antwort abgegeben';
$string['export_questions'] = 'Fragen exportieren';
$string['export_to_excel'] = 'Nach Excel exportieren';
$string['feedback:addinstance'] = 'Neues Feedback hinzufügen';
$string['feedback:complete'] = 'Feedback abschließen';
$string['feedback:createprivatetemplate'] = 'Kursinternen Template erstellen';
$string['feedback:createpublictemplate'] = 'Öffentlichtes Template erstellen';
$string['feedback:deletesubmissions'] = 'Abgeschlossene Abgaben löschen';
$string['feedback:deletetemplate'] = 'Template löschen';
$string['feedback:edititems'] = 'Fragen bearbeiten';
$string['feedback:mapcourse'] = 'Kurse zu globalen Feedbacks zuordnen';
$string['feedback:receivemail'] = 'E-Mail-Nachricht empfangen';
$string['feedback:view'] = 'Feedback anzeigen';
$string['feedback:viewanalysepage'] = 'Analyseseite nach der Abgabe anzeigen';
$string['feedback:viewreports'] = 'Auswertungen anzeigen';
$string['feedback_is_not_for_anonymous'] = 'Das Feedback ist nicht für anonyme Personen.';
$string['feedback_is_not_open'] = 'Ein Feedback ist zu diesem Zeitpunkt nicht möglich';
$string['feedbackclose'] = 'Antworten erlaubt bis';
$string['feedbackcompleted'] = '{$a->username} hat {$a->feedbackname} abgeschlossen.';
$string['feedbackopen'] = 'Antworten erlaubt ab';
$string['feedbackupdated'] = 'Feedback aktualisiert';
$string['file'] = 'Datei';
$string['filter_by_course'] = 'Kursfilter';
$string['handling_error'] = 'Fehler bei der Verarbeitung';
$string['hide_no_select_option'] = '\'Nicht gewählt\' verbergen';
$string['horizontal'] = 'Nebeneinander';
$string['import_questions'] = 'Fragen importieren';
$string['import_successfully'] = 'Erfolgreich importiert';
$string['importfromthisfile'] = 'Aus dieser Datei importieren';
$string['includeuserinrecipientslist'] = 'Fügen Sie {$a} in die Empfängerliste hinzu';
$string['indicator:cognitivedepth'] = 'Feedback kognitiv';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die eine Person in einer Feedback-Aktivität erreicht hat.';
$string['indicator:cognitivedepthdef'] = 'Feedback kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Die Person hat diesen Prozentsatz des kognitiven Engagements erreicht, das die Feedback-Aktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht, Beiträge).';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Feedback sozial';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die eine Person in einer Feedback-Aktivität erreicht hat.';
$string['indicator:socialbreadthdef'] = 'Feedback sozial';
$string['indicator:socialbreadthdef_help'] = 'Die Person hat diesen Prozentsatz des soziale Engagements erreicht, das die Feedback-Aktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein, Teilnahme mit anderen).';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Information';
$string['infotype'] = 'Informationstyp';
$string['insufficient_responses'] = 'Unzulängliche Antworten';
$string['insufficient_responses_for_this_group'] = 'Es gibt unzulängliche Antworten für diese Gruppe';
$string['insufficient_responses_help'] = 'Damit das Feedback anonym ist, müssen mindestens zwei Antworten abgegeben sein.';
$string['item_label'] = 'Bezeichner';
$string['item_name'] = 'Frage';
$string['label'] = 'Text- und Medienfeld';
$string['labelcontents'] = 'Inhalte';
$string['mapcourse'] = 'Kurs zuordnen';
$string['mapcourse_help'] = 'Die auf der Startseite erstellten Feedbacks sind auf der gesamten Website verfügbar und werden über den Block \'Feedback\' in allen Kursen angezeigt.

Sie können das Erscheinen in jedem Kurs erzwingen, indem Sie einen festen Block erzeugen. Andererseits können Sie das Feedback auf ausgewählte Kurse einschränken, indem Sie das Feedback mit bestimmten Kursen verknüpfen.';
$string['mapcourseinfo'] = 'Dieses globale Feedback ist in allen Kursen verfügbar, die den Block \'Feedback\' nutzen. Sie können die Kurse einschränken, in denen das Feedback angezeigt wird. Ordnen Sie dazu das Feedback ausgewählten Kursen zu.';
$string['mapcoursenone'] = 'Keinem Kurs zugeordnet. Dieses Feedback ist in allen Kursen verfügbar.';
$string['mapcourses'] = 'Feedback zu Kursen zuordnen';
$string['mappedcourses'] = 'Zugeordnete Kurse';
$string['mappingchanged'] = 'Kurszuordnung wurde geändert';
$string['maximal'] = 'Maximal';
$string['messageprovider:message'] = 'Erinnerung zu Feedback';
$string['messageprovider:submission'] = 'Systemnachricht für Feedback';
$string['minimal'] = 'Minimal';
$string['mode'] = 'Modus';
$string['modulename'] = 'Feedback';
$string['modulename_help'] = 'Mit dem Feedback können Sie eigene Umfragen oder Evaluationen anlegen, wofür eine Reihe von Fragetypen, einschließlich MultipleChoice, Ja/Nein oder Texteingabe, zur Verfügung stehen.

Die Antworten können Personen zugeordnet werden oder anonym erfolgen. Die Ergebnisse können Sie nach dem Ausfüllen anzeigen lassen und später als Datei exportieren. Feedbacks auf der Startseite können völlig anonym auch von nicht angemeldeten Personen ausgefüllt und abgegeben werden.

Eine Feedback-Aktivität kann verwendet werden

* Bei Kursbewertungen, um den Inhalt für spätere Teilnehmer/innen zu verbessern
* Um den Teilnehmer/innen die Möglichkeit zu geben, sich für Kursmodule, Veranstaltungen usw. anzumelden
* Für Gästebefragungen zu Kurswahl, Schulpolitik, usw.
* Für Anti-Mobbing-Meldungen, bei denen Personen Vorfälle anonym melden können';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulenameplural'] = 'Feedback';
$string['move_item'] = 'Element verschieben';
$string['multichoice'] = 'Multiple-Choice';
$string['multichoice_values'] = 'Antworten';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span> {$a->name}';
$string['multichoicerated'] = 'Multiple-Choice (skaliert)';
$string['multichoicetype'] = 'Typ';
$string['multiplesubmit'] = 'Mehrfache Abgabe';
$string['multiplesubmit_help'] = 'Wenn diese Option auf Ja eingestellt ist:

* Bei anonymen Umfragen: Teilnehmer/innen können unbegrenzt Antworten einreichen und alle Antworten werden aufgezeichnet.
* Bei nicht-anonymen Umfragen: Teilnehmer/innen können unbegrenzt viele Antworten einreichen, es wird jedoch nur ihre letzte Antwort aufgezeichnet.';
$string['name'] = 'Name';
$string['name_required'] = 'Name benötigt';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = 'Nächste Seite';
$string['no_handler'] = 'Keine Aktion gefunden!';
$string['no_itemlabel'] = 'Kein Bezeichner';
$string['no_itemname'] = 'Kein Name des Eintrags';
$string['no_items_available_yet'] = 'Keine Elemente angelegt';
$string['no_templates_available_yet'] = 'Keine Vorlagen verfügbar';
$string['non_anonymous'] = 'Nicht anonym';
$string['non_anonymous_entries'] = 'Nicht-anonyme Einträge ({$a})';
$string['non_respondents_students'] = 'Teilnehmer/innen ohne Antwort ({$a})';
$string['not_completed_yet'] = 'Nicht abgeschlossen';
$string['not_selected'] = 'Nicht gewählt';
$string['not_started'] = 'Nicht begonnen';
$string['numberoutofrange'] = 'Zahl außerhalb des Bereichs';
$string['numeric'] = 'Numerische Antwort';
$string['numeric_range_from'] = 'Bereich von';
$string['numeric_range_to'] = 'Bereich bis';
$string['of'] = 'von';
$string['oldvaluespreserved'] = 'Alle alten Fragen und eingegebenen Werte werden aufbewahrt.';
$string['oldvalueswillbedeleted'] = 'Die aktuellen Fragen und alle Antworten werden gelöscht.';
$string['only_one_captcha_allowed'] = 'Im Feedback ist nur ein Captcha erlaubt';
$string['openafterclose'] = 'Sie haben ein Startdatum angelegt, das nach dem Enddatum liegt.';
$string['overview'] = 'Überblick';
$string['page'] = 'Seite';
$string['page-mod-feedback-x'] = 'Jede Feedback-Seite';
$string['page_after_submit'] = 'Abschlussmitteilung';
$string['pagebreak'] = 'Seitenumbruch';
$string['pluginadministration'] = 'Feedback-Administration';
$string['pluginname'] = 'Feedback';
$string['position'] = 'Position';
$string['previewquestions'] = 'Vorschau der Fragen';
$string['previous_page'] = 'Vorherige Seite';
$string['privacy:metadata:completed'] = 'Datensatz mit beantworteten Feedback-Fragebögen';
$string['privacy:metadata:completed:anonymousresponse'] = 'Hier wird festgelegt, ob die Abgabe anonymisiert stattfinden soll.';
$string['privacy:metadata:completed:timemodified'] = 'Zeitpunkt der letzten Bearbeitung der Abgabe.';
$string['privacy:metadata:completed:userid'] = 'ID der Person, der die Feedback-Aktivität abgeschlossen hat.';
$string['privacy:metadata:completedtmp'] = 'Datensatz über Beantwortungen im Feedback, die noch nicht abgeschlossen sind';
$string['privacy:metadata:value'] = 'Datensatz mit Antworten auf Fragen';
$string['privacy:metadata:value:value'] = 'Gewählte Antwort';
$string['privacy:metadata:valuetmp'] = 'Datensatz mit Antworten auf Fragen, wenn das Feedback noch nicht abgeschlossen ist';
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
$string['search:activity'] = 'Feedback - Aktivitätsinfo';
$string['search_course'] = 'Kurs suchen';
$string['searchcourses'] = 'Kurse suchen';
$string['searchcourses_help'] = 'Nach Codes oder Namen von Kursen suchen, die Sie diesem Feedback zuordnen möchten.';
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
$string['template_saved'] = 'Vorlage gespeichert';
$string['templates'] = 'Vorlagen';
$string['textarea'] = 'Eingabebereich';
$string['textarea_height'] = 'Höhe (in Zeilen)';
$string['textarea_width'] = 'Breite';
$string['textfield'] = 'Eingabezeile';
$string['textfield_maxlength'] = 'Maximale Zeichenzahl';
$string['textfield_size'] = 'Breite der Eingabe';
$string['there_are_no_settings_for_recaptcha'] = 'Keine Einstellungen für das Captcha';
$string['this_feedback_is_already_submitted'] = 'Sie haben diese Aktivität bereits abgeschlossen.';
$string['typemissing'] = 'Fehlender Typ';
$string['update_item'] = 'Änderungen speichern';
$string['url_for_continue'] = 'URL für die Taste "Weiter"';
$string['url_for_continue_help'] = 'Nach der Feedback-Abgabe wird eine Taste "Weiter" gezeigt. Zumeist auf die Kursseite weitergeleitet. Falls Sie auf ein anderes Ziel verlinken möchten, können Sie hier die URL angeben.';
$string['use_one_line_for_each_value'] = 'Schreiben Sie jede Antwort in eine neue Zeile!';
$string['use_this_template'] = 'Diese Vorlage verwenden';
$string['using_templates'] = 'Vorlage verwenden';
$string['vertical'] = 'Untereinander';
$string['whatfor'] = 'Was möchten Sie tun?';
