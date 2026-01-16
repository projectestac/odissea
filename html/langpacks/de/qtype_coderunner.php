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
 * Strings for component 'qtype_coderunner', language 'de', version '4.5'.
 *
 * @package     qtype_coderunner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['HIDE'] = 'Verstecken';
$string['HIDE_IF_FAIL'] = 'Verstecken falls fehlgeschlagen';
$string['HIDE_IF_SUCCEED'] = 'Verstecken falls bestanden';
$string['SHOW'] = 'Anzeigen';
$string['aborted'] = 'Der Test wurde aufgrund von Fehlern abgebrochen.';
$string['ace-language'] = 'Ace-Sprache';
$string['ace_aria_label'] = 'Code Editor - Geben Sie Ihren Code hier ein.';
$string['ace_gapfillerui_ui_source_descr'] = '"globalextra" übernimmt den anzuzeigenden Code vom Global extra Feld oder "test0" übernimmt ihn vom Testcode Feld des ersten Tests.';
$string['ace_ui_notready'] = 'Ace-Editor nicht bereit. Vielleicht Seite neu laden?';
$string['aceui_auto_switch_light_dark_descr'] = 'Einer Browser- oder Betriebssystem-Einstellung erlauben ein Light Theme mit Darkmode zu überschreiben.';
$string['aceui_font_size_descr'] = 'Ace Editor Schriftgröße';
$string['aceui_import_from_scratchpad_descr'] = 'True, um dem Ace Editor zu erlauben, die Antwort von der Scratchpad UI im JSON-Format zu erhalten, und die Frage-Antwort daraus zu extrahieren. Erleichtert das Wechseln zwischen UIs. Lassen Sie diese Einstellung auf "true" außer Sie möchten, dass Ace JSON Objekte mit einem "answer_code" Key bearbeitet.';
$string['aceui_live_autocompletion_descr'] = 'Live Autovervollständigungs-Modus von Ace Editor aktivieren';
$string['aceui_theme_descr'] = 'Ace Editor Theme. Standard ist das helle Theme "Textmate". Ein alternatives dunkles Theme ist "tomorrow_night". Helles Theme wird durch Benutzereinstellungen überschrieben - siehe auto_switch_dark.';
$string['addingcoderunner'] = 'Eine CodeRunner-Frage hinzufügen';
$string['advanced_customisation'] = 'Weitergehende Anpassung';
$string['ajax_error'] = '*** AJAX ERROR. DIES NICHT SPEICHERN! ***';
$string['allok'] = 'Alle Tests bestanden!';
$string['allornone'] = 'Testcode muss entweder für alle Testfälle oder für keinen bereitgestellt werden.';
$string['allornothing'] = 'Alles-oder-nichts-Bewertung';
$string['allornothing_help'] = 'Wenn die "Alles oder nichts-Bewertung" aktiviert ist, müssen alle Testfälle
für die Einreichung bestanden sein, um irgendeine Bewertung zu erreichen. Andernfalls wird die Bewertung durch Summieren der Bewertung für alle Testfälle, die bestehen, und dies als einen Bruchteil der maximal möglichen Punkte ausgedrückt.

Die pro-Testfall-Bewertung kann nur angegeben werden, wenn die Alles-oder-nichts-Bewertung-Checkbox deaktiviert ist.

Wenn Sie eine Bewerter-Vorlage verwenden, der Teilmarkierungen für Testfälle vergibt, sollte "Alles oder nichts-Bewertung" generell deaktiviert sein.';
$string['allowattachments'] = 'Anhänge erlauben';
$string['allowattachments_help'] = 'Ob und wie viele Anhänge Teilnehmer/innen ihren Einreichungen beifügen dürfen. Die Anhänge werden in das Runtime-Arbeitsverzeichnis kopiert und eine durch Kommata getrennte Liste der Namen der Anhänge wird der Vorlage in der Twig-Variablen {{ ATTACHMENTS }} zur Verfügung gestellt. Warnung: Das Zulassen von Anhängen könnte bei großen Klassen und/oder großen Anhängen Auswirkungen auf die Leistung oder den Plattenplatz der Moodle- und Jobe-Server haben. Der Moodle-Server und die Jobe-Server vor Februar 2019 speichern alle Anhänge auf unbestimmte Zeit.';
$string['allowedfilenames'] = 'Erlaubte Dateinamen';
$string['allowedfilenames_help'] = 'Alle hochgeladenen Dateinamen müssen dem angegebenen regulären PHP (Perl)-Ausdruck entsprechen, falls nicht leer. Verwenden Sie zum Beispiel \'.+\\\\.cpp\', um jede C++-Datei zuzulassen, oder \'(?!Prog)\\\\\\.java\', um jede Java-Datei außer \'Prog.java\' zuzulassen. Darüber hinaus dürfen Dateinamen nur alphanumerische Zeichen plus Unterstrich, Bindestrich und Punkt enthalten, nicht mit einem doppelten Unterstrich (\'\\_\\_\') beginnen und nicht in Konflikt mit den Namen der unterstützten Dateien geraten. Die Beschreibung ist eine Textnachricht, die dem/der Teilnehmenden angezeigt wird, um zu erklären, welche Datei(en) erwartet wird (werden). Lassen Sie sie leer, um den regulären Ausdruck selbst anzuzeigen. Lassen Sie beides leer, um die Prüfung des regulären Ausdrucks zu umgehen.';
$string['allowedfilenamesregex'] = 'Erlaubte Dateinamen (regulärer Ausdruck)';
$string['allowmultiplestdins'] = 'Mehrere stdins erlauben';
$string['answer'] = 'Antwort';
$string['answer_help'] = 'Eine Beispielantwort kann hier eingegeben und zur Überprüfung durch den Frageautor verwendet und optional den Studierenden während der Überprüfung gezeigt werden. Sie wird auch vom Bulk-Tester-Skript verwendet. Die Korrektheit einer nicht leeren Antwort wird beim Speichern überprüft, es sei denn, \'Beim Speichern prüfen\' ist deaktiviert.';
$string['answerbox_group'] = 'Antwortfeld';
$string['answerbox_group_help'] = 'Legen Sie die Anzahl der Zeilen für das Antwortfeld fest. Dies legt die Mindesthöhe des Nutzeroberflächenelements (z.B. Ace) fest, welches das Antwortfeld steuert. Die Breite wird dem Fenster angepasst. Wenn die Antwort das Feld vertikal oder horizontal überläuft, werden Bildlaufleisten angezeigt.';
$string['answerboxlines'] = 'Zeilen';
$string['answerpreload'] = 'Vorbelegung des Antwortfelds';
$string['answerpreload_help'] = 'Der hier eingegebene Text wird im Antwortfeld vorgeladen.';
$string['answerprompt'] = 'Antwort:';
$string['answerrequired'] = 'Bitte geben Sie eine nicht leere Antwort ein';
$string['answertooshort'] = 'Die Antwort ist zu kurz. Sie muss mindestens {$a} Zeichen enthalten.';
$string['answerunchanged'] = 'Sie müssen die geladene Antwort vervollständigen oder bearbeiten.';
$string['asolutionis'] = 'Lösung des Frageautors anzeigen/verbergen:';
$string['atleastonetest'] = 'Sie müssen mindestens einen Testfall für diese Frage bereitstellen.';
$string['attachmentoptions'] = 'Optionen für Anhänge';
$string['attachmentsoptional'] = 'Anhänge sind optional';
$string['attachmentsrequired'] = 'Anhänge erforderlich';
$string['attachmentsrequired_help'] = 'Diese Option gibt die Mindestanzahl von Anhängen an, die für die Bewertung einer Antwort erforderlich sind.';
$string['autotagbycategoryindextitle'] = 'CodeRunner-Frage Autotagger';
$string['autotagbycategorytitle'] = 'CodeRunner Autotag nach Kategorie';
$string['bad_dotdotdot'] = 'Falsche Verwendung von "...". Muss sich am Ende befinden, nach zwei ansteigenden numerischen Abzügen';
$string['bad_empty_splitter'] = 'Der Test-Trenner kann nicht leer sein, wenn eine Kombinator-Vorlage verwendet wird.';
$string['bad_new_prototype_name'] = 'Ungültiger Name für neuen Prototyp: bereits in Verwendung';
$string['badacelangstring'] = 'Falsche Ace-Sprachzeichenfolge';
$string['badcputime'] = 'Die CPU-Zeitbegrenzung muss leer bleiben oder eine ganze Zahl größer als Null sein';
$string['bademptyprecheck'] = 'Die Vorabprüfung ist mit der folgenden unerwarteten Ausgabe fehlgeschlagen.';
$string['badfilenamesregex'] = 'Ungültiger regulärer Ausdruck';
$string['badfiles'] = 'Unzulässige(r) Dateiname(n): {$a}';
$string['badjson'] = 'Ungültiger JSON-Output der Kombinator-Bewertung. Output war: {$a->output}';
$string['badjsonfunc'] = 'Unbekannte JSON embedded func ({$a->func})';
$string['badmemlimit'] = 'Die Speicherbegrenzung muss leer bleiben oder eine ganze Zahl größer als Null sein';
$string['badpenalties'] = 'Das Abzugssystem muss eine durch Komma getrennte Liste von Zahlen im Bereich [0, 100] sein';
$string['badquestion'] = 'Fehler in der Frage';
$string['badrandomintarg'] = 'Fehlerhaftes Argument für JSON @randomint-Funktion';
$string['badrandompickarg'] = 'Fehlerhaftes Argument für JSON @randompic-Funktion';
$string['badsandboxparams'] = 'Das Feld \'Andere\' (Sandbox-Parameter) muss entweder leer oder ein gültiger JSON-Datensatz sein';
$string['badtemplateparams'] = 'Vorlagenparameter müssen entweder leer oder ein gültiger JSON-Datensatz sein. <pre class="templateparamserror">{$a}</pre>';
$string['baduiparams'] = 'UI Parameter müssen entweder leer oder ein gültiger JSON-Datensatz sein.';
$string['brokencombinator'] = 'Erwartete {$a->numtests} Testergebnisse, erhielt {$a->numresults}. Vielleicht zu große Ausgabe oder Fehler in der Frage?';
$string['brokentemplategrader'] = 'Fehlerhafte Ausgabe des Bewerters: {$a->output}. Ihre Programmausführung wurde möglicherweise abgebrochen (z.B. wurde eine Zeitüberschreitung oder ein Speicherlimit überschritten).';
$string['browsequestions'] = 'Fragen durchsuchen';
$string['bulkquestiontester'] = 'Das <a href="{$a->link}">Bulk-Tester-Skript</a> prüft, dass Beispielantworten für alle Fragen im aktuellen Kontext richtig bewertet werden. Erst sinnvoll, wenn einige Fragen mit Beispielantworten hinzugefügt wurden; die Erstinstallation hat keine.';
$string['bulktestallcachenotclearedmessage'] = '<b>Hinweis:</b> Bewertungs-Cache nicht geleert -- Leeren Sie den Cache unter Administration > Plugins > Cache wenn Sie diesen für alle Kurse leeren möchten.';
$string['bulktestallincontext'] = 'Alle ausführen';
$string['bulktestalltitle'] = 'ALLE Fragen der Webseite überprüfen';
$string['bulktestclearcachefirstlabel'] = 'Bewertungs-Cache des Kurses zuerst leeren:';
$string['bulktestcontinuefromhere'] = 'Erneut ausführen, oder von hier an fortsetzen';
$string['bulktestindextitle'] = 'CodeRunner Bulk-Testing';
$string['bulktestnumrunslabel'] = 'Anzahl der Durchläufe pro Frage:';
$string['bulktestoverallresults'] = 'Gesamtergebnisse';
$string['bulktestrepeatrandomonlyexplanation'] = 'Limitiert wiederholtes Ausführen von Fragen mit <emph>random</emph> im Namen.';
$string['bulktestrepeatrandomonlylabel'] = 'Nur Zufällige wiederholen';
$string['bulktestrun'] = 'Alle Fragetests für alle Fragen im System ausführen (langsam, nur für Administratoren)';
$string['bulktesttitle'] = 'Testfragen in {$a}';
$string['bulktestusecacheexplanation'] = 'Ob der Coderunner Bewertungscache verwendet werden soll. Wenn deaktiviert, werden alle Fragen immer am Jobe Server ausgeführt. Wenn Code mehrmals ausgeführt wird, zeigt diese Einstellung Probleme mit einzelnen Jobe Servern, wenn mehrere Jobe Server oder ein Jobe Proxy der die Last auf mehrere Jobe Server verteilt verwendet werden. Standard: ja';
$string['bulktestusecachelabel'] = 'Bewertungs-Cache verwenden:';
$string['cachedef_coderunner_grading_cache'] = 'Bewertungsergebnisse werden gecached, sodass vermieden werden kann, den Jobe Server so oft aufzurufen.';
$string['cachepurgepagetitle'] = 'Cache für {$a} leeren';
$string['cannotrunprototype'] = 'Dies ist ein Prototyp und kann nicht ausgeführt werden. Wenn Sie diesen Prototypen verwenden möchten, erstellen Sie eine neue Frage und wählen Sie diesen Fragetyp.';
$string['coderunner'] = 'Programmcode';
$string['coderunner:sandboxwsaccess'] = 'Zugriff zur Jobe Sandbox via Webservices erlauben';
$string['coderunner:viewhiddentestcases'] = 'Ausgeblendete Testcases bei der Frageüberprüfung anzeigen';
$string['coderunner_grading_cache'] = 'Bewertungsergebnisse werden gecached, sodass vermieden werden kann, den Jobe Server so oft aufzurufen.';
$string['coderunner_help'] = 'Als Antwort auf eine Frage, die eine Spezifikation für ein Programmfragment, eine Funktion oder ein ganzes Programm ist, geben die Studierenden Quellcode in einer bestimmten Computersprache ein, die die Spezifikation erfüllt.';
$string['coderunner_install_testsuite_failures'] = 'Fehlgeschlagene Tests';
$string['coderunner_install_testsuite_intro'] = 'Auf dieser Seite können Sie testen, ob die CodeRunner-Fragen mit Beispielantworten richtig funktionieren.';
$string['coderunner_install_testsuite_noanswer'] = 'Fragen ohne Beispielantworten';
$string['coderunner_install_testsuite_title'] = 'Eine Testsuite für CodeRunner-Beispielantworten';
$string['coderunner_install_testsuite_title_desc'] = 'Das <a href="{$a->link}">Beispiel-Antwort-Testskript</a> überprüft, ob die Fragen mit Beispielantworten korrekt ausgeführt werden.';
$string['coderunner_link'] = 'question/type/coderunner';
$string['coderunner_question_type'] = 'CodeRunner Fragetyp:';
$string['coderunnercategories'] = 'Kategorien mit CodeRunner-Fragen';
$string['coderunnercontexts'] = 'Kontexte mit CodeRunner-Fragen';
$string['coderunnersettings'] = 'CodeRunner Einstellungen';
$string['coderunnersummary'] = 'Antwort ist ein Programmcode, der im Kontext einer Anzahl Testfälle ausgeführt wird, um seine Korrektheit zu bestimmen.';
$string['coderunnertype'] = 'Fragetyp';
$string['coderunnertype_help'] = 'Wählen Sie die Programmiersprache und den Fragetyp. Nachdem ein Typ ausgewählt wurde, werden Details im Detailfenster "Fragetyp" unten angezeigt.';
$string['coderunnerwssettings'] = 'Sandbox Webservice Einstellungen';
$string['columncontrols'] = 'Resultatetabelle';
$string['columncontrols_help'] = 'Die Checkboxen markieren, welche Spalten der Ergebnistabelle den Studierenden nach der Einreichung angezeigt werden sollen';
$string['confirm_proceed'] = 'Wenn Sie diese Frage mit nicht gewähltem "Anpassen" speichern, gehen alle vorgenommenen Anpassungen verloren. Möchten Sie fortfahren?';
$string['confirmreset'] = 'Ihre gesamte Arbeit an dieser Frage verwerfen und das Antwortfeld auf den ursprünglichen vorinstallierten Wert zurücksetzen?';
$string['contextidnotacourseincachepurgerequest'] = 'Bewertungs-Cache nicht geleert, da die Kontext-ID {$a} kein Kurs ist.';
$string['corruptuiparams'] = 'Die UI Parameter für diese Frage oder diesen Prototyp sind fehlerhaft.';
$string['cputime'] = 'Zeitbegrenzung (s)';
$string['currentttlinfo'] = 'Coderunner Bewertungscache Time to Live Einstellungen: TTL = {$a->seconds} Sekunden (={$a->days} Tage)';
$string['customisation'] = 'Anpassung';
$string['customisationcontrols'] = 'Anpassung';
$string['customise'] = 'Anpassen';
$string['datafiles'] = 'Unterstützungsdateien';
$string['datafiles_help'] = 'Alle hier hochgeladenen Dateien werden dem Arbeitsverzeichnis hinzugefügt, wenn das erweiterte Vorlagenprogramm ausgeführt wird. Dadurch können große Daten- oder Supportdateien bequem hinzugefügt werden.';
$string['default_penalty_regime'] = 'Standardmäßiges Abzugssystem';
$string['default_penalty_regime_desc'] = 'Das standardmäßige Abzugssystem für neue Fragen, bestehend aus einer kommagetrennten Liste von Prozentabzügen, die optional in ", ..." endet, um eine fortlaufende arithmetische Progression zu kennzeichnen.';
$string['display'] = 'Anzeige';
$string['downloadquizattempts'] = 'Testversuche herunterladen';
$string['downloadquizattemptshelp'] = 'Klicken Sie auf den entsprechenden Kurs und/oder Download-Button für den Kurs und den Test, den Sie herunterladen möchten. Zahlen in Klammern nach den Kursen sind die Anzahl der Tests im Kurs mit mindestens einet Einreichung. Die Zahlen in Klammern hinter dem Testnamen ist die Anzahl der Einreichungen.';
$string['duplicateprototype'] = 'Der Fragetyp dieser Frage ist \'{$a->crtype}\' aber der Prototyp ist nicht eindeutig für folgende Fragen: {$a->outputstring}. Bitte entfernen Sie alle Duplikate dieses Prototyps oder wählen Sie einen anderen Fragetyp.';
$string['editingcoderunner'] = 'Eine CodeRunner-Frage bearbeiten';
$string['empty_new_prototype_name'] = 'Der Name des neuen Fragetyps darf nicht leer sein';
$string['emptypenaltyregime'] = 'Abzugssystem muss definiert sein (seit Version 3.1)';
$string['emptysandboxlanguage'] = 'Sandbox Sprache kann beim Erstellen eines Prototypen nicht leer sein.';
$string['enable'] = 'Aktivieren';
$string['enable_diff_check'] = 'Button "Unterschiede anzeigen" aktivieren';
$string['enable_diff_check_desc'] = 'Geben Sie Teilnehmer/innen eine Schaltfläche "Unterschiede anzeigen", wenn ihre Antwort falsch ist und ein Validierer für genaue Übereinstimmung verwendet wird (experimentell).';
$string['enable_sandbox_desc'] = 'Die Verwendung der angegebenen Sandbox für die Ausführung von Studierenden-Einreichungen erlauben';
$string['enable_sandbox_ws'] = 'Sandbox Webservice aktivieren';
$string['enable_sandbox_ws_desc'] = 'Webservice aktivieren, der direkten Zugriff auf den Sandbox Server (normalerweise Jobe) erlaubt.';
$string['enablecombinator'] = 'Kombinator aktivieren';
$string['enablegradecache'] = 'Aktivieren Sie Lesen/Schreiben des Jobs von/in den Coderunner Bewertungscache.';
$string['enablegradecache_desc'] = 'Experimentell. Der Cache ist ein lokaler Moodle Cache (derzeit File Cache), um Ergebnisse der Fragebewertung zu speichern. Das Feature dient dazu erneute Bewertungen durch gecachte Ergebnisse von bereits bewerteten Auswertungen am Jobe Server zu beschleunigen. HINWEIS: Wenn Sie den Bewertungscache deaktivieren, sollten Sie den Coderunner Bewertungscache leeren, bevor Sie ihn wieder aktivieren, sodass Sie über einen bekannten Status des Cache verfügen. Sie sollten den Cache auch leeren, wenn Sie das Jobe Backend ändern (z.B. Installation einer neuen Python Version), da Ergebnisse von den gespeicherten Werten im Cache abweichen könnten.';
$string['enter_to_submit'] = 'Drücken Sie Enter, um abzugeben...';
$string['equalitygrader'] = 'Genaue Übereinstimmung';
$string['error_access_denied'] = 'Sandbox Server Zugriff verweigert';
$string['error_excessive_output'] = 'Übermäßiger Output';
$string['error_jobe_unknown'] = 'Unbekannter Fehler von Jobe Server';
$string['error_json_params'] = 'Parameter sind nicht in einem gültigen JSON Format';
$string['error_loading_prototype'] = 'Fehler beim Laden des Prototyps. Netzwerkprobleme oder Server down, vielleicht?';
$string['error_loading_ui_descr'] = 'Fehler beim Laden der UI Beschreibung. Möglichererweise gibt es Netzwerkprobleme oder der Server ist nicht erreichbar.';
$string['error_memory_limit'] = 'Speicherlimit überschritten';
$string['error_sandbox_server_overload'] = 'Jobe Server Überlastung';
$string['error_submission_limit_reached'] = 'Jobe Sandbox Abgabelimit überschritten';
$string['error_timeout'] = 'Zeitlimit überschritten';
$string['error_unknown_language'] = 'Unbekannte Sprache angefragt';
$string['error_unknown_runtime'] = 'Unbekannter Runtime Fehler';
$string['erroroninit'] = '**** FEHLER BEIM INITIALISIEREN DER FRAGE ****<br>{$a->error}<br>';
$string['errorstring-accessdenied'] = 'Zugriff auf die Sandbox verweigert';
$string['errorstring-autherror'] = 'Nicht autorisiert, die Sandbox zu verwenden';
$string['errorstring-blocked-url'] = 'Die URL ist gesperrt. Überprüfen Sie die Jobe URL und die HTTP Sicherheits-Einstellungen von Moodle.';
$string['errorstring-duplicate-name'] = 'Klassennamen umbenennen; dieser Name wird von Unterstützungsdateien dieser Frage verwendet.';
$string['errorstring-jobe-failed'] = 'Jobe Serveranfrage fehlgeschlagen.';
$string['errorstring-jobe400'] = 'Fehler vom Jobe Sandbox Server:';
$string['errorstring-ok'] = 'Ok';
$string['errorstring-overload'] = 'Job konnte wegen Serverüberlastung nicht ausgeführt werden. Vielleicht bald noch einmal versuchen?';
$string['errorstring-pastenotfound'] = 'Anforderung des Status eines nicht vorhandenen Jobs';
$string['errorstring-submissionfailed'] = 'Die Übermittlung an die Sandbox ist fehlgeschlagen';
$string['errorstring-submissionlimitexceeded'] = 'Begrenzung der Anzahl Sandbox-Einreichungen erreicht';
$string['errorstring-unknown'] = 'Unerwarteter Fehler beim Ausführen Ihres Codes. Der Sandbox-Server ist möglicherweise inaktiv oder überlastet. Vielleicht bald noch einmal versuchen?';
$string['errorstring-wronglangid'] = 'Nicht vorhandene Sprache angefordert';
$string['event_sandboxwebserviceexec'] = 'CodeRunner Sandbox ausführen';
$string['event_sandboxwebserviceexec_desc'] = 'Ein Job würde über das CodeRunner Sandbox Webservice ausgeführt.';
$string['exit_fullscreen'] = 'Vollbildmodus verlassen';
$string['expand'] = 'Ausklappen';
$string['expandtitle'] = 'Fragekategorien anzeigen';
$string['expected'] = 'Erwartete Ausgabe';
$string['expected_help'] = 'Der erwartete Output des Tests. Von der Vorlage als {{TEST.expected}} erkannt.';
$string['expectedcolhdr'] = 'Erwartet';
$string['exportthisquestion'] = 'Dieser Frage exportieren';
$string['exportthisquestion_help'] = 'Dies wird eine Moodle-XML-Exportdatei erstellen, die nur diese eine Frage enthält. Dies ist zum Beispiel nützlich, wenn Sie glauben, dass diese Frage einen Fehler in CodeRunner vor Augen führt, den Sie den Entwicklern melden möchten.';
$string['extra'] = 'Zusätzliche Vorlagedaten';
$string['extra_help'] = 'Ein manchmal nützliches zusätzliches Textfeld für die Vorlage, als {{TEST.extra}} erkannt.';
$string['extractcodefromjson'] = 'Ace/Scratchpad konform';
$string['fail'] = 'Fehlgeschlagen';
$string['failedhidden'] = 'Ihr Code hat einen oder mehrere verborgene Tests nicht bestanden.';
$string['failedntests'] = '{$a->numerrors} Test(s) fehlgeschlagen';
$string['failedtesting'] = 'Testen fehlgeschlagen';
$string['fails'] = 'Fehler';
$string['feedback'] = 'Feedback';
$string['feedback_help'] = 'Wählen Sie "Vom Test festgelegt", damit die Test-Feedback-Einstellungen (insbesondere die Einstellungen zum spezifischen Feedback) die Anzeige der Ergebnistabelle steuern können, "Anzeigen erzwingen", um die Ergebnistabelle immer anzuzeigen, und "Verbergen erzwingen", um sie immer auszublenden';
$string['feedback_hide'] = 'Verbergen erzwingen';
$string['feedback_quiz'] = 'Vom Test festgelegt';
$string['feedback_show'] = 'Anzeigen erzwingen';
$string['fileheader'] = 'Unterstützungsdateien';
$string['filenamesexplain'] = 'Beschreibung';
$string['filenamesregex'] = 'Regulärer Ausdruck';
$string['filloutoneanswer'] = 'Sie müssen Quellcode eingeben, der die Spezifikation erfüllt. Der von Ihnen eingegebene Code wird ausgeführt, um seine Korrektheit zu prüfen und entsprechend eine Bewertung zu vergeben.';
$string['firstfailure'] = 'Erster fehlgeschlagener Testfall: {$a}';
$string['forexample'] = 'Zum Beispiel';
$string['fullscreen'] = 'Vollbildmodus';
$string['gapfillerui_delimiters_descr'] = 'Ein Array mit 2 Elementen der Strings, die zum Öffnen und Schließen der Lückenbeschreibung verwendet werden.';
$string['gapfillerui_sync_interval_secs_descr'] = 'Das Zeitintervall in Sekunden zwischen Aufrufen, um die UI Inhalte mit der Frageantwort zu synchronlisieren. 0 für keine Auto-Synchronisation.';
$string['giveup'] = 'Stop Button';
$string['giveup_aftermaxmarks'] = 'Verfügbar, sobald die Bewertung nicht mehr verbessert werden kann';
$string['giveup_always'] = 'Immer verfügbar';
$string['giveup_help'] = 'Wenn diese Option aktiviert ist, sehen Teilnehmer/innen einen Button, um die Interaktion mit der Frage abzubrechen und stattdessen das allgemeine Feedback anzuzeigen.

Der Button "Stop und Feedback anzeigen" kann gleich zu Beginn angezeigt werden oder sobald die Bewertung durch die Teilnehmer/innen nicht mehr verbessert werden kann.';
$string['giveup_never'] = 'Nie verfügbar';
$string['globalextra'] = 'Global extra';
$string['globalextra_help'] = 'Ein Textfeld zur allgemeinen Verwendung durch Vorlageautoren, wie das Zusatzfeld jedes Testfalls, aber global für alle Tests. Verfügbar für den Vorlageautor als {{ QUESTION.globalextra }}.';
$string['goodemptyprecheck'] = 'Bestanden';
$string['gotcolhdr'] = 'Erhalten';
$string['grader'] = 'Bewerter';
$string['grading'] = 'Benotung';
$string['gradingcachedefinitionnotfound'] = 'Seltsam... die Coderunner Cacheeinstellung für Bewertungen kann nicht gefunden werden.';
$string['gradingcachefilestorenotfound'] = 'Seltsam... der Coderunner Cachespeicher für Bewertungen kann nicht gefunden werden.';
$string['gradingcontrols'] = 'Bewertungseinstellungen';
$string['gradingcontrols_help'] = 'Die Standardbewertung "Genaue Übereinstimmung" vergibt nur Punkte, wenn der Output dem im Testfall erwarteten Wert exakt entspricht. Nachfolgende Leerzeichen werden von allen Zeilen entfernt und etwaige nachfolgende Leerzeilen werden gelöscht bevor der Vergleichstest durchgeführt wird.

Die Bewertung "Ungefähre Übereinstimmung" ist ähnlich. Es werden zusätzlich mehrere Leerzeichen und Tabulatorzeichen zu einem Leerzeichen zusammengefasst, alle Leerzeilen gelöscht und die Strings in Kleinbuchstaben umgewandelt.

Die Bewertung "Regulärer Ausdruck" verwendet das "Erwartet" Feld des Testfalls als Regulären Ausdruck (ohne PERL Begrenzungszeichen) und überprüft den das erwartete Ergebnis im Output enthalten ist. So würde beispielsweise ein erwarteter Wert von \'ab.*z\' jeden Output der die Zeichen \'ab\' und ein nachfolgendes \'z\' enthält. Um den gesamten Output zu mit dem Regulären Ausdruck zu überprüfen, beginnen Sie den Regulären Ausdruck mit \'\\A\' und schließen Sie mit \'\\Z\'. Der Reguläre Ausdruck Vergleich verwendet die MULTILINE und DOTALL Optionen.

Die Bewerter-Vorlage nimmt an, dass der Output des Programms ein Bewertungsergebnis ist, d.h. die Vorlage überprüft *und bewertet* die Abgabe der Teilnehmer/innen. Der einzige Output eines solchen Template Programms muss ein JSON-kodierter Datensatz sein.

Wenn die Vorlage eine Pro-Test-Vorlage (d.h. nicht eine Kombinationsvorlage) ist, muss der JSON String eine Zeile der Ergebnistabelle beschreiben und sollte zumindest ein \'fraction\' Feld enthalten, das mit TEST.mark multipliziert wird, um festzustellen wie viele Punkte für den Testfall vergeben werden. Er sollte auch ein \'got\' Feld, das den Wert der in der \'got\' Spalte angezeigt wird enthalten. Die anderen Spalten der Ergebnistabelle (Testcode, stdin, erwartet) können von dom Vorlage-Programm definiert werden und werden statt des Wertes des Testfalls verwendet. Beispiel: Wenn der Output des Programms der String <code>{"fraction":0.5, "got": "Die Hälfte der Antworten war richtig!"}</code> ist, würden die Hälfte der Punkte für den entsprechenden Testfall vergeben und die \'Erhalten\' Spalte würde den Text "Die Hälfte der Antworten war richtig!" enthalten. Weitere Spalten können zur Ergebnistabelle hinzugefügt werden, in dem weitere Attribute zur JSON Ausgabe und zum Feld der Ergebnistabelle der Frage hinzugefügt werden.

Wenn die Vorlage eine Kombinationsvorlage ist, sollte der JSON-String Output der Vorlagenbewertung ebenfalls ein "fraction" Feld enthalten, in diesem Fall für die Gesamtpunktezahl. Der String kann keines oder mehr der folgenden Felder enthalten: \'prologuehtml\', \'testresults\', \'epiloguehtml\', \'columnformats\', \'showoutputonly\', \'showdifferences\' and \'graderstate\'.
Die Felder \'prologuehtml\' und \'epiloguehtml\' enthalten HTML das vor bzw. nach der (optionalen) Ergebnistabelle angezeigt wird. Das \'testresults\' Feld, wenn vorhanden, ist eine Liste von Listen und wird verwendet um eine Art Testergebnistabelle anzuzeigen. Die erste Zeile enthält die Spaltenüberschriften, alle anderen Zeilen definieren den Tabellenkörper. Es gibt zwei spezielle Werte für Spaltenüberschriften:  \'iscorrect\' und \'ishidden\'. Die \'iscorrect\' Spalten werden verwendet, um Kreuze oder Haken für 0 bzw. 1 anzuzeigen. Die \'ishidden\' Spalte wird nicht angezeigt, jedoch können 0 und 1 Werte in der Spalte verwendet werden, um die Sichtbarkeit der Zeile zu steuern. Teilnehmer/innen sehen keine verborgenen Zeilen, aber Bewerter/innen und Trainer/innen sehen diese. Wenn eine \'testresults\' Tabelle eingefügt wird, kann auch ein \'columnformats\' Feld verwendet werden. Dieses sollte eine Liste mit einem String für jede Spalte ausgenommen der \'iscorrect\' und der \'ishidden\' Spalten enthalten. Die Strings definieren das Format, das zur Anzeige der Zellwerte verwendet wird; derzeit werden nur \'%s\' für normale String-Anzeige (die bereinigt und in ein \'pre\' Element eingeschlossen wird) und \'%h\' für einen HTML-Wert, der vor der Anzeige nicht weiter verarbeitet werden sollte, unterstützt.
Das \'showdifferences\' Feld aktiviert die Anzeige eines \'Zeige Unterschiede\' Buttons, unter der Ergebnistabelle, wenn die ermittelte Bewertung nicht 1,0 entspricht. Das \'showoutputonly\' Feld - wenn aktiviert - wird verwendet, wenn die Frage nur dazu verwendet wird den Output und eventuell Bilder eines Testlaufs ohne Bewertung anzuzeigen.
Die \'graderstate\' Variable ist ein String, den die Frageautoren und -autorinnen dazu verwenden können eine Bestehensbewertungs-Information zwischen Testversuchen zu protokollieren. Wenn diese in der Bewertungsantwort einer Abgabe inkludiert wird, ist diese bei der nächsten Abgabe als Twig \'QUESTION.stepinfo.graderstate\' verfgübar.';
$string['graph_ui_invalidserialisation'] = 'GraphUI: ungültige Serialisation';
$string['graphhelp'] = '- Doppelklicken Sie auf eine leere Stelle, um einen neuen Knoten/Status zu erstellen.
- Klicken Sie auf eine Verknüpfung/Knoten und drücken Sie die Entfernen Taste zum löschen (oder Fn + Del auf einem Mac)
- Doppelklicken Sie auf einen vorhandenen Knoten, um ihn zu "markieren", beipielsweise als Akzeptorzustand für Zustandsautomaten (FSMs). Doppelklicken Sie erneut, um die Markierung aufzuheben.
- Klicken und ziehen Sie, um einen Knoten zu verschieben.
- Halten Sie die Alt-Taste (oder Strg. + Alt) gedrückt und ziehen Sie mit gedrückter Maustaste, um einen (Unter)Graphen zu verschieben.
- Halten Sie die Umschalttaste gedrückt, während Sie innerhalb eines Knotens klicken und ziehen Sie sie zu einem anderen, um eine Verknüpfung zu erstellen.
- Klicken Sie bei gedrückter Umschalttaste auf eine leere Stelle und ziehen Sie den Mauszeiger auf einen Knoten, um ein Startverknüpfung zu erstellen (nur FSMs).
- Klicken und ziehen Sie eine Verknüpfung, um ihre Kurve zu ändern.
- Klicken Sie auf eine Verknüpfung/Knoten, um den Text zu bearbeiten.
- Klicken Sie auf einen Text und ziehen Sie ihn, um ihn zu verschieben.
- Eingabe von _ gefolgt von einer Ziffer macht diese Ziffer zu einer tiefergestellten Ziffer.
- Durch die Eingabe von \\epsilon wird ein Epsilon-Zeichen (und ähnlich für \\alpha, \\beta usw.) erstellt.
- Strg + z zum Rückgängig machen einer Aktion und Strg + y oder Strg + Umschaltteste + z zum Wiederherstellen.';
$string['graphui_fontsize_descr'] = 'Schriftgröße in Punkt für Knoten- und Kanten-Beschriftungen';
$string['graphui_helpmenutext_descr'] = 'Text, der wenn nicht leer, den Standard-Hilfe-Text in den CodeRunner Language Strings ersetzt.';
$string['graphui_isdirected_descr'] = 'Wahr, wenn die Kanten gerichtet sind';
$string['graphui_lockedgelabels_descr'] = 'Wahr, um den User davon abzuhalten, Beschriftungen zu ändern. Neue Kanten haben dann auch keine Beschriftungen.';
$string['graphui_lockedgeset_descr'] = 'Wahr, um den Benutzer davon abzuhalten Kanten hinzuzufügen oder zu löschen.';
$string['graphui_noderadius_descr'] = 'Der Radius eines Knoten in Pixel';
$string['hidden'] = 'Versteckt';
$string['hidecheck'] = 'Prüfen-Button verbergen';
$string['hidedetails'] = 'Details verbergen';
$string['hidedifferences'] = 'Unterschiede ausblenden';
$string['hiderestiffail'] = 'Rest ausblenden bei Fehler';
$string['hoisttemplateparams'] = 'Vorlagen-Parameter heben';
$string['howtogetmore'] = 'Für detailliertere Informationen speichern Sie die Frage ohne aktiviertes  "Beim Speichern prüfen" und testen Sie sie manuell';
$string['htmlui_html_src_descr'] = 'Setzt die Quelle für den HTML Code. Muss entweder "globalextra" oder "prototypextra" sein.';
$string['htmlui_sync_interval_secs_descr'] = 'Das Zeitintervall in Sekunden zwischen Aufrufen, um die UI Inhalte mit der Frageantwort zu synchronisieren. 0 um nicht automatisch zu synchronisieren.';
$string['htmluiloadfail'] = 'Das HTML UI Plugin konnte nicht initialisiert werden. Wahrscheinlich ist der JSON Status-String ungültig.';
$string['ideone_pass'] = 'Ideone Server Passwort';
$string['ideone_pass_desc'] = 'Das Passwort, dass beim Herstellen einer Verbindung zum veralteten Ideone-Server verwendet werden soll (wenn die Ideone-Sandbox aktiviert ist)';
$string['ideone_user'] = 'Ideone Server Benutzername';
$string['ideone_user_desc'] = 'Der Benutzername, der beim Herstellen einer Verbindung zum veralteten Ideone-Server verwendet werden soll (wenn die Ideone-Sandbox aktiviert ist)';
$string['illegalformat'] = 'Ungültiges Format ({$a->format}) in den Spaltenformaten';
$string['illegaluiparamname'] = 'Folgende Paramenter sind ungültig für die {$a->uiname} UI:';
$string['info_unavailable'] = 'Informationen zum Fragentyp sind für angepasste Fragen nicht verfügbar.';
$string['inputcolhdr'] = 'Eingabe';
$string['insufficientattachments'] = 'Nicht genügend Anhänge, {$a} erforderlich.';
$string['is_prototype'] = 'Als Prototyp verwenden';
$string['iscombinatortemplate'] = 'Ist ein Kombinator';
$string['jobe_apikey'] = 'Jobe API-Schlüssel';
$string['jobe_apikey_desc'] = 'Der API-Schlüssel, der in allen REST-Anforderungen an den Jobe-Server enthalten sein muss (falls erforderlich). Max 40 Zeichen. Lassen Sie das Feld leer, um den API-Schlüssel aus Anfragen auszulassen';
$string['jobe_canterbury_html'] = '<p style=\'color:gray; font-style:italic; font-size:smaller\'>Ausführen auf dem Jobe Server der University of Canterbury</p>';
$string['jobe_host'] = 'Jobe Server';
$string['jobe_host_desc'] = 'Der Host-Name des Jobe-Servers und die Port-Nummer, falls nicht Port 80, z. B jobe.somewhere.edu:4010. Die URL für die Jobe-Anfrage erhält man durch Voranstellen dieser Zeichenfolge mit http: // und Anhängen von /jobe/index.php/restapi/<REST_METHOD>. Sie können das https:// Protokoll vor den Host-Namen stellen (z. B.  https://jobe.somewhere.edu), wenn sich der Jobe Server hinter einem Reverse Proxy, der als SSL Beendigung fungiert, befindet. Mehrere Jobe Server können durch Semikolon getrennt definiert werden, um hohe Last abzuarbeiten: ein Server wird zufällig ausgewählt.';
$string['jobe_host_ws'] = 'Jobe-Server für Webservice';
$string['jobe_host_ws_desc'] = 'Das Sandbox-Server Webservice';
$string['jobe_warning_html'] = '<p style=\'background-color:yellow\'>Ausgeführen auf dem Jobe-Server der University of Canterbury. Dies ist nur für erste Tests gedacht. Bitte richten Sie so bald wie möglich Ihren eigenen Jobe-Server ein. Siehe <a href=\'https://github.com/trampgeek/moodle-qtype_coderunner/blob/master/Readme.md#sandbox-configuration\' target=\'_blank\'>hier</a>.</p>';
$string['language'] = 'Sandbox-Sprache';
$string['languages'] = 'Sprachen';
$string['languages_help'] = 'Die Sandbox-Sprache ist die Computersprache, um die Einreichung auszuführen. Dies sollte normalerweise keine Änderung von dem Wert in Elternvorlage erfordern; Modifikation auf eigene Gefahr.

Ace-Sprache ist die Sprache, die der Ace-Code-Editor (falls aktiviert) für die Antwort der Teilnehmer/innen verwendet.
Standardmäßig entspricht dies der Sandbox-Sprache; geben Sie hier nur einen anderen Wert ein, wenn die Vorlagensprache von der Sprache abweicht in der man erwartet, dass die Teilnehmer/innen schreiben (z.B. wenn es sich um einen Python-Präprozessor handelt, der verwendet wird, um C-Programm von Teilnehmer/innen zu validieren, bevor sie ausgeführt werden).

Mehrsprachige Fragen sind Fragen, auf die die Teilnehmer/innen in mehr als einer Sprache antworten können. Sie werden aktiviert, indem die Ace-Sprache auf eine Komma-getrennte Liste der Sprachen gesetzt wird. Den Teilnehmer/innen wird dann ein Dropdown-Menü zur Auswahl angeboten, um die Sprache auszuwählen, in der ihre Antwort geschrieben werden soll. Wenn genau eine der Sprachen ein Sternchen (\'\\*\') nachgestellt hat, wird diese Sprache als Standardsprache gewählt, die die Ausgangseinstellung des Dropdown-Menüs ist. Ein Ace-Sprachwert von beispielsweise "C,C++,Java\\*,Python3" würde es erlauben, eine Antwort in C, C++, Java oder Python3 einzureichen, aber das Dropdown-Menü würde anfänglich Java als Standard zeigen. Wenn kein Standardwert angegeben ist, bleibt der Anfangszustand des Dropdown-Menüs leer und die Teilnehmer/innen müssen eine Sprache auswählen.
Mehrsprachige Fragen erfordern eine spezielle Vorlage, die {{ANSWER\\_LANGUAGE}} verwendet, um die Vorlagenvariablen zu steuern, wie der Code ausgeführt wird, siehe das eingebaute Beispiel für den mehrsprachigen Fragentyp. Die Variable {{ANSWER\\_LANGUAGE}} ist <i>nur</i> für mehrsprachige Fragen definiert.

Wenn der Autor eine Beispielantwort zu einer mehrsprachigen Frage liefern möchte, muss er es entweder in der Standardsprache schreiben, falls angegeben, oder ansonsten in der ersten der erlaubten Sprachen.';
$string['languageselectlabel'] = 'Sprache';
$string['listprototypeduplicates'] = 'Frage-ID: {$a->id} <ul><li>Name: {$a->name}</li><li>Kategorie: {$a->category}</li></ul>';
$string['mark'] = 'Punkte';
$string['marking'] = 'Punktevergabe';
$string['markinggroup'] = 'Bewertung';
$string['markinggroup_help'] = 'Wenn die "Alles oder nichts-Bewertung" aktiviert ist, müssen alle Testfälle bestanden werden, um eine Bewertung zu erhalten. Andernfalls wird die Bewertung durch Summieren der Bewertung für alle Testfälle, die bestehen, und dies als einen Bruchteil der maximal möglichen Punkte ausgedrückt.
Die pro-Testfall-Bewertung kann nur angegeben werden, wenn die Alles-oder-nichts-Bewertung-Checkbox deaktiviert ist. Wenn Sie eine Bewerter-Vorlage verwenden, die Teilmarkierungen für Testfälle vergibt, sollte "Alles oder nichts-Bewertung" generell deaktiviert sein.

Das obligatorische Abzugssystem ist eine durch Komma getrennte Liste von Abzügen (jeweils in Prozent) die auf aufeinanderfolgende Einreichungen anzuwenden sind. Diese sind absolut, nicht kumulativ. Als ein Sonderfall kann die letzte Strafe "..." lauten, was bedeutet: "verlängere die vorherige zwei Strafen als eine arithmetische Progression bis zu 100". Zum Beispiel <code>0,5,10,30,...</code> entspricht <code>0,5,10,30,50,70,90,100</code>.
Wenn es mehr Einreichungen als definierte Abzüge gibt, wird der letzte Wert verwendet. Leerzeichen können anstatt von Kommata als Trennzeichen verwendet werden.

Das Standard-Abzugssystem kann durch einen Systemadministrator über  Website-Administration > Plugins > Fragetypen > CodeRunner für die gesamte Site festgelegt werden.

Setzen Sie das Abzugssystem auf 0, um bei allen Einreichungen keine Abzüge anzuwenden.

Das Abzugssystem wird ignoriert und es wird nichts abgezogen, wenn im Test das Frageverhalten "Mehrfachbeantwortung (ohne Abzüge) verwendet wird.';
$string['maxfilesize'] = 'Maximal zulässige Dateigröße (Bytes)';
$string['maxfilesize_help'] = 'Wählen Sie die maximale Datei-Upload-Größe (Bytes). Das Zulassen großer Datei-Uploads mit großen Klassen kann sich auf die Leistung und den Speicherplatz sowohl auf Moodle- als auch auf Jobe-Servern auswirken.';
$string['memorylimit'] = 'Speicherbegrenzung (MB)';
$string['missinganswers'] = 'fehlende Antworten';
$string['missingorbadfraction'] = 'Ungültiger oder fehlender Bruch im Output der Bewertungsvorlage. Output war: {$a->output}';
$string['missingoutput'] = 'Die erwartete Ausgabe dieses Testfalls muss angegeben werden.';
$string['missingprototype'] = 'Diese Frage wurde als vom Typ \'{$a->crtype}\' definiert, aber der Prototyp existiert nicht oder ist in diesem Kontext nicht verfügbar. Sie sollten abbrechen und versuchen, den Prototyp (erneut) zu installieren.
Fahren Sie mit der Bearbeitung nur fort, wenn Sie wissen, was Sie tun!';
$string['missingprototypes'] = 'Fehlende Prototypen';
$string['missingprototypewhenrunning'] = 'Fehlerhafte Frage (fehlender oder doppelter Prototyp \'{$a->crtype}\'). Kann nicht ausgeführt werden.';
$string['missinguiparams'] = 'Folgende UI Parameter sind verpflichtend, wurden aber nicht definiert:';
$string['morehidden'] = 'Einige verborgene Testfälle sind ebenfalls fehlgeschlagen.';
$string['multipledefaults'] = 'Höchstens eine Sprache kann als Standard ausgewählt werden';
$string['multipleprototypes'] = 'Mehrere Prototypen gefunden für \'{$a->crtype}\'';
$string['mustrequirefewer'] = 'Sie können nicht mehr Anhänge verlangen, als Sie zulassen.';
$string['nearequalitygrader'] = 'Ungefähre Übereinstimmung';
$string['negativeorzeromark'] = 'Punkte müssen größer als Null sein';
$string['nodetailsavailable'] = 'Wählen Sie einen Fragetyp aus, um detaillierte Hilfe anzuzeigen.';
$string['noerrorsallowed'] = 'Ihr Code muss alle Tests bestehen, um eine Bewertung zu erhalten. Versuchen Sie es noch einmal.';
$string['nolanguage'] = 'Bitte wählen Sie zuerst eine Sprache';
$string['nonnumericmark'] = 'Nichtnumerische Bewertung';
$string['nooutput'] = '< Kein Output! >';
$string['noqtype'] = 'Kein Fragetyp ausgewählt';
$string['nosampleanswer'] = 'Keine Beispielantwort';
$string['nouiparameters'] = 'Das {$a->uiname} UI hat keine Parameter.';
$string['options'] = 'Optionen';
$string['ordering'] = 'Sortierung';
$string['outputdisplayarea_invalid_json'] = 'JSON Parsingfehler. Output vom Wrapper:';
$string['outputdisplayarea_invalid_mode'] = 'Ungültiger Output Anzeigemodus';
$string['outputdisplayarea_missing_image_extension'] = 'Bild kann nicht angezeigt werden, fügen Sie die Dateiendung zum Dateinamen hinzu:';
$string['outputdisplayarea_missing_json_fields'] = 'In der JSON Outputanzeige fehlen Pflichtfelder:';
$string['overloadoninit'] = 'Durch eine Überlastung des Sandbox Servers konnte die Frage nicht initialiisert werden.';
$string['pass'] = 'Bestanden';
$string['passes'] = 'bestanden';
$string['penaltyregime'] = '(Abzugssystem: {$a} %)';
$string['penaltyregimelabel'] = 'Abzugssystem:';
$string['pluginname'] = 'CodeRunner';
$string['pluginname_help'] = 'Verwenden Sie das Feld "Fragetyp", um die Programmiersprache auszuwählen, die verwendet werden soll, um die Einreichung der Teilnehmer/innen auszuführen.
Geben Sie das Problem an, für das die Teilnehmer/innen Code schreiben müssen, und definieren Sie dann eine Reihe von Tests, die bei der Einreichung der Teilnehmer/innen durchgeführt werden';
$string['pluginname_link'] = 'question/type/coderunner';
$string['pluginnameadding'] = 'Eine CodeRunner-Frage hinzufügen';
$string['pluginnameediting'] = 'Eine CodeRunner-Frage bearbeiten';
$string['pluginnamesummary'] = 'CodeRunner: führt von Studierenden eingegebenen Code in einer Sandbox aus';
$string['precheck'] = 'Vorabprüfung';
$string['precheck_all'] = 'Alle';
$string['precheck_disabled'] = 'Deaktiviert';
$string['precheck_empty'] = 'Leer';
$string['precheck_examples'] = 'Beispiele';
$string['precheck_help'] = 'Legen Sie die für Teilnehmer/innen verfügbaren Buttons zum Überprüfen der Antwort fest. Üblicherweise wird zumindest ein Prüfen-Button angezeigt. Dieser kann jedoch verborgen werden (z. B. für Tests mit späterer Auswertung), wenn die Option <i>Prüfen-Button verbergen</i> aktiviert ist.

Wenn die Vorabprüfung aktiviert ist, haben die Teilnehmer/innen einen zusätzlichen Button links neben dem Prüfen-Button, um ihnen einen abzugfreien Durchlauf ihres Codes gegenüber einer Teilmenge der Testfälle zu ermöglichen.

<ul>
<li>Wenn \'Leer\' ausgewählt ist, wird ein einzelner Lauf mit der Testvorlage durchgeführt, die einen Testfall verwendet, in dem alle Felder (Testcode, stdin, erwartet, usw.) leere Zeichenfolgen sind. Eine nicht leere Ausgabe wird als Vorabprüfungsfehler angesehen. Verwenden Sie dies mit Vorsicht: Einige Fragetypen werden dies nicht korrekt behandeln, z.B. "schreiben Sie ein Programm"- Fragen, die eine Ausgabe erzeugen.</li>
<li>Wenn \'Beispiele\' ausgewählt ist, wird der Code gegen alle Testfälle getestet, für die \'Als Beispiel verwenden\' aktiviert wurde.</li>
<li>Wenn \'Ausgewählt\' ausgewählt ist, wird jedem Testfall ein zusätzliches  Benutzeroberflächenelement hinzugefügt damit der Autor eine bestimmte Teilmenge der Tests auswählen kann.</li>
<li>Wenn "Alle" ausgewählt ist, werden alle Testfälle ausgeführt (obwohl ihr Verhalten möglicherweise von der normalen Prüfung abweichen kannn, wenn der Vorlagencode dies so vorschreibt).</li>
</ul>

Die Vorlage kann anhand des Twig-Parameter {{IS_PRECHECK}}, der während des Vorüberprüfungslaufs "1" ist, ansonsten "0", überprüfen, ob der Lauf ein Vorabprüfungslauf ist oder nicht.';
$string['precheck_only'] = 'Nur Vorabprüfung';
$string['precheck_selected'] = 'Ausgewählt';
$string['precheckingemptyset'] = 'Beispiele am Vorabprüfen, aber keine vorhanden!';
$string['privacy:metadata'] = 'Der CodeRunner-Fragetyp speichert keine benutzerspezifischen Daten.';
$string['proceed_at_own_risk'] = 'Bearbeiten eines vorausgelieferten Frageprototyps?! Fahren Sie auf eigene Verantwortung fort!';
$string['prototypeQ'] = 'Ist Prototyp?';
$string['prototype_duplicate_alert'] = 'Prototyp Duplikat: Ein Duplikat von Prototyp {$a} existiert. Es kann nur einer geladen werden.';
$string['prototype_error'] = '*** FEHLER BEIM LADEN DES PROTOTYPS. DIES NICHT SPEICHERN! ***';
$string['prototype_load_failure'] = 'Fehler beim Laden des Prototyps:';
$string['prototype_missing_alert'] = 'Fehlender Prototyp: Überprüfen Sie, ob der Prototyp {$a} in diesem Kontext existiert.';
$string['prototypecontrols'] = 'Prototyping';
$string['prototypecontrols_help'] = 'Wenn "Ist Prototyp" gewählt ist, wird diese Frage zum Prototyp für andere Fragen. Nach dem Speichern wird der angegebene Name des Fragetyps in der Dropdown-Liste der Fragetypen angezeigt. Neue Fragen basierend auf diesem Typ übernehmen dann standardmäßig alle Anpassungsattribute, die für diese Frage angegeben wurden. Nachfolgende Änderungen an dieser Frage wirken sich dann auf alle abgeleiteten Fragen aus, sofern sie nicht selbst angepasst werden, wodurch die Verbindung unterbrochen wird.

Die prototypische Vererbung ist nur einstufig. Wenn diese Frage als Prototyp gespeichert wird, verliert sie ihre Verbindung zum ursprünglichen Basistyp und wird zu einem neuen Basistyp. Seien Sie darauf hingewiesen, dass sie, wenn Sie abgeleitete Fragen exportieren,  sicherstellen müssen, dass diese Frage auch im Export enthalten ist, ansonsten wird die abgeleitete Frage verwaist, wenn sie in ein anderes System importiert wird. Sie sind auch dafür verantwortlich zu verfolgen, welche Fragen Sie als Prototypen verwenden. Es wird dringend empfohlen, die Frage in "PROTOTYPE_for_my_new_question_type" umzubenennen, um die spätere Wartung zu vereinfachen.';
$string['prototypeexists'] = 'Dies ist ein Prototyp; der Fragetyp kann nicht geändert werden.';
$string['prototypeextra'] = 'Prototyp extra';
$string['prototypeusage'] = 'CodeRunner Frageprototyp-Verwendung für Kurs {$a}';
$string['prototypeusageindex'] = 'Verfügbare Kurse';
$string['purgeallcachekeysbutton'] = 'ALLE Schlüssel löschen';
$string['purgeoldcachekeysbutton'] = 'Nur ALTE Schlüssel löschen';
$string['purgingallkeysmessage'] = 'Alle Schlüssel für den Kontext löschen, unabhängig von "Time to Live" (TTL).';
$string['purgingoldkeysmessage'] = 'Nur alte Schlüssel für den Kurs löschen, basierend auf Time to Live. TTL={$a->seconds} Sekunden (={$a->days} days)';
$string['qWrongBehaviour'] = 'Verwenden Sie das adaptive Verhalten für alle CodeRunner-Fragen, oder es können massive Leistungseinbußen auftreten. Beispielsweise müssen alle Fragen auf einer Seite neu bewertet werden, wenn die Seite erneut angezeigt wird.';
$string['qtype_c_function'] = '<p>Ein Fragetyp für Schreibe-Eine-C-Funktion Fragen. Es wird eine vollständige C-Funktion in der Antwort erwartet. Der Antwort kann jedoch anderer in sich geschlossenem C-Code wie beispielsweise Präprozessor Direktiven und Support-Funktionen vorangestellt werden.</p>

<p>Der Test-Code für diese Fragetypen ruft die Funktion der Teilnehmer/innen mit einigen Test-Argumenten auf und gibt das Ergebnis aus, wie beispielsweise
<pre>printf("%d\\n", eineIntFunktion(blah1, blah2))</pre>
Das Feld <i>Erwartete Ausgabe</i> im Testfall legt die erwartete Ausgabe des Tests fest.</p>

<p>Wenn kein Standard Input für die Testfälle angegeben wird, wird ein einziges Testprogramm erstellt, das aus folgenden Elementen besteht:</p>
<ol>
<li>Standard #Includes: stdlib.h, ctype.h, string.h, stdbool.h, math.h</li>
<li>Die Antwort der Teilnehmer/innen</li>
<li>Eine Folge von mit Klammern umschlossenen Blöcken für jeden Testfall. Jeder Block enthält nur den Testcode des Testfalls. Es wird auch ein <i>printf</i> Statement zwischen den Codeblöcken eingefügt, um einen speziellen Trenner einzufügen, der verwendet wird, um den Output in einzelene Outputs der Testfälle zu gliedern.</li>
</ol>
<p>Wenn jedoch einer der Testfälle einen nicht leeren Standard Input aufweist, werden mehrere Programme für jeden Testfall geladen.</p>
<p>Das Feld<i>extra</i> des Testfalls wird ignoriert.</p>';
$string['qtype_c_program'] = '<p>Ein Fragetyp für Schreibe-Ein-C-Programm Fragen. Es gibt keinen Pro-Testfall-Code und unterschiedliche Tests verwenden nur unterschiedliche Standard Input-Daten (stdin). Es wird ein vollständiges ausführbares Programm als Antwort der Teilnehmer/innen erwartet. Das Programm wird von CodeRunner ohne weitere Veränderung für jeden Testfall ausgeführt. Die Werte vom Testcode und den Zusatzfeldern jedes Testfalls werden ignoriert.</p>
<p>Wenn Sie einen spezielle Bibliothek oder Argumente für die Frage benötigen, können Sie diese benutzerdefiniert gestalten. (Aktivieren Sie die Anpassen Checkbox), öffnen Sie den Abschnitt <i>Erweiterte Anpassung</ und fügen Sie entsprechende Werte im <i>Sandbox &gt; Parameter</i> Feld ein. Zum Beispiel:
<pre>{"linkargs":["-lm"]}</pre>, um die Mathematik-Bibliothek zu verlinken.';
$string['qtype_cpp_function'] = '<p>Ein Fragetyp für Schreibe-Eine-C++Funktion Fragen.Es wird eine vollständige C++ Funktion als Antwort erwartet. Der Antwort kann jedoch anderer in sich geschlossenem C++Code wie beispielsweise Präprozessor Direktiven und Support-Funktionen vorangestellt werden.</p>
<p>Der Test-Code für diese Fragetypen ruft die Funktion der Teilnehmer/innen mit einigen Test-Argumenten auf und gibt das Ergebnis aus, wie beispielsweise
<pre>cout << eineIntFunktion(blah1, blah2))</pre>
Das Feld <i>Erwartete Ausgabe</i> im Testfall legt die erwartete Ausgabe des Tests fest.</p>
<p>Wenn kein Standard Input für die Testfälle angegeben wird, wird ein einziges Testprogramm erstellt, das aus folgenden Elementen besteht:</p>
<ol>
<li>Standard #Includes: iostream, fstream, string, math, vector und algorithm</li>
<li><code>using namespace std;</code></li>
<li>Die Antwort der Teilnehmer/innen</li>
<li>Eine Folge von mit Klammern umschlossenen Blöcken für jeden Testfall. Jeder Block enthält nur den Testcode des Testfalls. Es wird auch ein <i>printf</i> Statement zwischen den Codeblöcken eingefügt, um einen speziellen Trenner einzufügen, der verwendet wird, um den Output in einzelene Outputs der Testfälle zu gliedern.</li>
</ol>
<p>Wenn jedoch einer der Testfälle einen nicht leeren Standard Input aufweist, werden mehrere Programme für jeden Testfall geladen.</p>';
$string['qtype_cpp_program'] = '<p>Verwendet für Schreib-ein-C++-Programm-Fragen, bei denen es keinen Code für jeden Testfall gibt und die verschiedenen Tests einfach unterschiedliche Standardeingabedaten (stdin) verwenden. Es wird erwartet, dass die Antwort der Teilnehmer/innen ein vollständig
lauffähiges Programm ist, das ohne Änderung durch CodeRunner in der vorliegenden Form einmal für jeden Testfall ausgeführt wird. Die Werte des Testcodes und der zusätzlichen Felder der Testfälle werden ignoriert.</p>';
$string['qtype_java_program'] = '<p>Eine Schreib-ein-Java-Programm-Frage, bei der die Teilnehmer/innen
Ihnen ein vollständiges Programm als Antwort vorlegen. Das Programm wird kompiliert und für jede Testfall ausgeführt. Es gibt keinen Testcode, nur stdin-Testdaten, obwohl dies nicht tatsächlich überprüft wird: caveat emptor. Die zusätzlichen Felder der Testfälle werden ebenfalls
ignoriert.</p>
<p>Dieser Fragetyp wird sehr ineffizient, wenn es viele Testfälle gibt, da
jeder einzelne einen vollständigen Kompilierungs- und Ausführungszyklus auf dem Jobe-Server erfordert. Es ist möglich, alle Tests in einen einzigen Python-Job zu packen, der an den Sandbox-Server gesandt wird und dieser kompiliert das Programm nur einmal und führt es dann bei jedem Testfall aus.
Einzelheiten zu diesem Ansatz finden Sie im Forum für Fragenautoren unter coderunner.org.nz.</p>';
$string['qtype_pascal_program'] = '<p>Ein Pascal-Fragetyp, bei dem die Antwort der/des Teilnehmer/in ein vollständiges Pascal-Programm ist. Das Programm wird für jeden Testfall einmal kompiliert und ausgeführt, wobei die im Testfall vorgesehene Standardeingabe verwendet wird und die Felder <i>testcode</i> und <i>extra</i> ignoriert werden.</p>';
$string['qtype_php'] = '<p>Eine php-Frage, bei dem die Antwort der/des Teilnehmer/in PHP-Code ist. Im einfachsten Fall beginnt der Code der/des Teilnehmer/in mit </p><pre><?php</pre>, aber <i>schließt den PHP-Tag nicht</i>. Der Grund für das Nichtschließen kann durch Einsicht in die Vorlage erkannt werden: Auf die Antwort der/des Teilnehmer/in folgen alle Testfall-Testcodes. Wenn Sie stattdessen möchten, dass der Code der/des Teilnehmer/innen durch Schließen des PHP-Tags beendet wird, sollten Sie die Vorlage so bearbeiten, dass der PHP-Tag vor der Testsequenz wieder geöffnet wird.</p>
<p>Die Ausgabe aus jedem Testfall, die mit dem <i>Erwartet</i> Feld aus dem Testfall übereinstimmen sollte, ist die Ausgabe aus dem PHP-Code der/des Teilnehmer/in (einschließlich aller Inhalte außerhalb des Geltungsbereichs von &lt;?php...?&gt; Tags) plus die Ausgabe aus dem Testcode.</p><p>Untersuchen Sie den Vorlagee-Code (durch Klicken auf <i>Anpassen</i>), um dies zu verstehen.</p>';
$string['qtype_python2'] = '<p>Ein Python2 Fragetyp, der "Schreiben Sie eine Funktion", "Schreiben Sie eine Klasse" oder "Schreiben Sie ein Programm" Fragen ermöglicht. Für jeden Testfall wird der Antwortcode der Teilnehmer/innen gefolgt vom Testcode ausgeführt. Wenn die Teilnehmer/innen beispielsweise eine Funktionsdefinition schreiben sollen, wird ihre Definition zuerst ausgeführt, gefolgt vom Testcode des Fragenautors/der Fragenautorin, der die Funktion üblicherweise aufruft und das Ergebnis oder einen daraus resultierenden Wert ausgibt.</p>
<p>Wenn es keine Standardeingaben für alle Testfälle gibt, werden alle Tests in einem einzigen Durchgang ausgeführt und jede Ausgabe wird durch einen Separierungsstring getrennt. Bitte beachten Sie, dass dies nicht unbedingt das gleiche Ergebnis liefert, als jeden Test einzeln auszuführen. Wenn durch die Teilnehmer/innen beispielsweise globale Variablen definiert werden, behalten diese über mehrere Testläufe die Werte. Wenn dies zu Problemen führen könnte, ist der einfachste Workaround einen Standard-Input mit einem nicht-leeren Wert für einen Testfall zu definieren. Damit wird CodeRunner in den Fallback Modus gezwungen und jeder Testfall wird separat ausgeführt.</p>';
$string['qtype_python3'] = '<p>Ein Python3 Fragetyp, der "Schreiben Sie eine Funktion", "Schreiben Sie eine Klasse" oder "Schreiben Sie ein Programm" Fragen ermöglicht. Für jeden Testfall wird der Antwortcode der Teilnehmer/innen gefolgt vom Testcode ausgeführt. Wenn die Teilnehmer/innen beispielsweise eine Funktionsdefinition schreiben sollen, wird ihre Definition zuerst ausgeführt, gefolgt vom Testcode des Fragenautors/der Fragenautorin, der die Funktion üblicherweise aufruft und das Ergebnis oder einen daraus resultierenden Wert ausgibt.</p>
<p>Wenn es keine Standardeingaben für alle Testfälle gibt, werden alle Tests in einem einzigen Durchgang ausgeführt und jede Ausgabe wird durch einen Separierungsstring getrennt. Bitte beachten Sie, dass dies nicht unbedingt das gleiche Ergebnis liefert, als jeden Test einzeln auszuführen. Wenn durch die Teilnehmer/innen beispielsweise globale Variablen definiert werden, behalten diese über mehrere Testläufe die Werte. Wenn dies zu Problemen führen könnte, ist der einfachste Workaround einen Standard-Input mit einem nicht-leeren Wert für einen Testfall zu definieren. Damit wird CodeRunner in den Fallback Modus gezwungen und jeder Testfall wird separat ausgeführt.</p>';
$string['qtype_sql'] = '<p>Ein SQL Fragetyp basierend auf sqlite3 ausgeführt mit Python3. Für diesen Fragetyp muss sqlite3 am Jobe Server installiert sein.</p>
<p>Das Arbeitsverzeichnis wird nach Dateien mit dem Dateityp \'.db\' durchsucht. Wenn es keine solche Datei gibt, wird die sqlite3 Datenbank für alle Tests verwendet. Mehrere .db Dateien produzieren derzeit eine Fehlermeldung. Eine mögliche Erweiterung ist unterschiedliche db Dateien für jeden Test zu verwenden, z.B. in sortierter Reihenfolge.</p>
<p>Für jeden Test wird ein sqlite3 Command Script in folgender Form ausgeführt:</p>
 <pre>.mode column<br>.headers on<br>&lt;code in extra&gt;<br>&lt;student answer&gt;<br>&lt;testcode&gt;</pre>
<p>Eine neue Kopie der db Datei wird für jeden Testfall verwendet.</p>
<p>Ein Vorlageparameter <i>columnwidths</i>&nbsp; kann für die Spaltenbreite des Berichts gesetzt werden. Standardmäßig setzt sqlite3 die Spaltenbreite auf das Maximum von 3 Werten: 10, die Breite des headers und die Breite der ersten Datenzeile. Ein Vorlage-String wie </p><pre><code>{"columnwidths": [10, 50, 10, 5]}
</code></pre>
<p>verwendet statdessen Spaltenbreiten von 10, 50, 10 und 5 für die ersten vier Spalten.</p>';
$string['qtypehelp'] = 'Hilfe für den Fragetyp';
$string['question_type_changed'] = 'Änderung des Fragetyps. Klicken Sie auf Ok, um die Anpassungsfelder neu zu laden oder Abbrechen, um Ihre angepassten Felder beizubehalten.';
$string['questioncheckboxes'] = 'Anpassung';
$string['questioncheckboxes_help'] = 'Um den Fragetyp anzupassen, z.B. um die Fragevorlagen oder Sandbox-Parameter zu bearbeiten, aktivieren Sie die "Anpassen"-Checkbox und lesen Sie die Hilfe zu den neu sichtbaren Formularelementen für weitere Informationen.

Wenn die Checkbox "Vorlagen-Debugging" aktiviert ist, wird das für jeden Jobe Sandbox Lauf generierte Programm im Output angezeigt.';
$string['questionloaderror'] = 'Frage konnte nicht geladen werden';
$string['questionpreview'] = 'Fragevorschau';
$string['questiontype'] = 'Fragetyp';
$string['questiontype_help'] = 'Wählen Sie den spezifischen Fragetyp aus.

Die Auswahl wählt einen der eingebauten Typen aus, der eine bestimmte Sprache und manchmal eine Sandbox spezifiziert, in der das Programm ausgeführt wird.
Jeder Fragetyp hat eine Vorlage, die definiert, wie das ausführbare Programm aus den Testfalldaten und der Antwort des Studierenden erstellt wird.

Die Vorlage angezeigt und optional durch Auswählen der Checkbox "Anpassen" angepasst werden,

Wenn die Checkbox Template-Debugging ausgewählt ist, wird das generierte Programm für jeden Testfall in der Ausgabe angezeigt.';
$string['questiontype_required'] = 'Sie müssen einen Fragentyp auswählen';
$string['questiontypedetails'] = 'Fragetyp-Details';
$string['regexgrader'] = 'Regulärer Ausdruck';
$string['replacedollarscount'] = 'Diese Kategorie enthält {$a} CodeRunner-Fragen.';
$string['replaceexpectedwithgot'] = 'Klicken Sie auf den &lt;&lt;-Button, um die erwartete Ausgabe dieses Testfalls durch die tatsächliche Ausgabe zu ersetzen.';
$string['reset'] = 'Antwort zurücksetzen';
$string['resethover'] = 'Änderungen verwerfen und Antwort auf den ursprünglichen vorinstallierten Wert zurücksetzen';
$string['resultcolumnheader'] = 'Resultat';
$string['resultcolumns'] = 'Resultatespalten';
$string['resultcolumns_help'] = 'Standardmäßig zeigt die Ergebnistabelle Spalten mit dem Testcode, stdin, Erwartet und Erhalten, vorausgesetzt, die Spalten sind nicht leer. Sie können die Voreinstellung und/oder die Spaltenüberschriften, indem Sie einen Wert für die Ergebnisspalten eingeben (leer lassen für
das Standardverhalten).

Wenn angegeben, muss das Feld resultcolumns eine JSON-codierte Liste von Spaltenspezifizierern sein. Jeder Spaltenspezifizierer ist selbst eine Liste, normalerweise mit nur zwei oder drei Elementen. Das erste Element ist die Spaltenüberschrift, das zweite Element ist das Feld aus dem TestResult-Objekt, das in der Spalte angezeigt wird, und das optionale dritte Element ist eine Zeichenfolge im sprintf-Format, mit der das Feld angezeigt wird.

Die im standardmäßigen TestResult-Objekt verfügbaren Felder sind: testcode, stdin, expected, got, extra, awarded, und mark. testcode, stdin, expected und extra sind die Felder aus dem Testfall, während got die tatsächlich erzeugte und vergebene Ausgabe ist und mark die tatsächlich vergebene Bewertung bzw. die maximale Bewertung für den Testfall ist.

Per-Test Bewerter-Vorlagen können ihre eigenen Felder hinzufügen, die auch zur Anzeige ausgewählt werden können. Es ist auch möglich, mehrere Felder zu einer Spalte zu kombinieren, indem dem Bezeichner zusätzliche Felder hinzugefügt werden: Diese müssen vor dem sprintf-Formatbezeichner stehen, der dann obligatorisch wird. Um beispielsweise eine Bruch-Spalte für die Bewertung in der Form 0,74 / 1,00 anzuzeigen, könnte beispielsweise ein Spaltenformatbezeichner von ["Bewertungsanteil", "awarded", "mark", "% .2f /%. 2f"] verwendet werden.

Als weiterer Sonderfall bedeutet ein Format von% h, dass das Testergebnisfeld als ausgabebereites HTML verwendet und nicht weiter verarbeitet werden sollte. Dies ist nur bei benutzerdefinierten Bewerter-Vorlagen nützlich, die HTML-Ausgaben generieren, z.B. SVG-Grafiken.

Der Standardwert für Ergebnisspalten ist [["Test", "testcode"], ["Eingabe", "stdin"], ["Erwartet", "expected"], ["Erhalten", "got"]].

Die Einstellung des Felds resultcolumns hat keine Auswirkung, wenn ein Kombinator-Vorlage-Bewerter verwendet wird. Der Frageersteller ist dann dafür verantwortlich, die Ergebnistabelle in beliebiger Weise zu formatieren.';
$string['resultcolumnsnotjson'] = 'Das Resultatespalten-Feld ist keine gültige JSON-Zeichenfolge';
$string['resultcolumnsnotlist'] = 'Das Feld Resultatespalten muss eine JSON-codierte Liste von Spaltenbezeichnern enthalten';
$string['resultcolumnspecbad'] = 'Ungültiger Spaltenbezeichner gefunden: Jeder muss eine Liste mit zwei oder mehr Zeichenfolgen sein';
$string['resultstring-abnormaltermination'] = 'Fehlerhafter Programmabbruch';
$string['resultstring-compilationerror'] = 'Kompilierungsfehler';
$string['resultstring-illegalsyscall'] = 'Illegaler Funktionsaufruf';
$string['resultstring-internalerror'] = 'CodeRunner-Fehler (IE): bitte einen Tutor informieren';
$string['resultstring-memorylimit'] = 'Speicherbegrenzung überschritten';
$string['resultstring-norun'] = 'Kein Programmdurchlauf';
$string['resultstring-outputlimit'] = 'Zu große Ausgabe';
$string['resultstring-runtimeerror'] = 'Laufzeitfehler';
$string['resultstring-sandboxoverload'] = 'Der Sandbox-Server ist überlastet. Vielleicht bald noch einmal versuchen?';
$string['resultstring-sandboxpending'] = 'CodeRunner-Fehler (PD): bitte einen Tutor informieren';
$string['resultstring-sandboxpolicy'] = 'CodeRunner-Fehler (BP): bitte einen Tutor informieren';
$string['resultstring-success'] = 'Ok';
$string['resultstring-timelimit'] = 'Zeitbegrenzung überschritten';
$string['retestfailedquestions'] = 'Fehlgeschlagene Tests erneut durchführen';
$string['run_failed'] = 'Tests konnten nicht ausgeführt werden';
$string['sampleanswerattachments'] = 'Beispiel für Antwortanhänge';
$string['sampleanswerattachments_help'] = 'Wenn die Beispielantwort Anhänge benötigt, laden Sie diese hier hoch';
$string['sandboxcontrols'] = 'Sandbox';
$string['sandboxcontrols_help'] = 'Alle Jobs werden in der Jobe Sandbox durchgeführt, dies wirkt sich auf CPU-Zeit, Dateioutput etc. aus. Sie können diese Einschränkungen hier anpassen:

\'TimeLimit (secs)\' setzt die maximale CPU Zeit in Sekunden für jede Ausführung der Sandbox.
 \'MemLimit (MB)\' setzt den maximalen Speicher, den die Ausführung verwenden kann. Ein leerer Eintrag setzt die Standardwerte (normalerweise 5 Sekunden für CPU Zeit und einen sprachabhängigen Speicherverbrauch). Die Standardwerte sind nicht für ressourcenintensieve Anwendungen geeignet. Ein Wert von Null für den maximalen Speicher führt dazu, dass keine Begrenzung auferlegt wird. Die hier angegebene Speichermenge ist die Gesamtmenge, die für den Durchlauf benötigt wird, einschließlich aller Bibliotheken, Interpreter, VMs usw.

Der Parameter \'Parameters\' wird verwendet, um weitere Sandbox-spezifische Daten wie Compileroptionen und API-Schlüssel zu übergeben. Er sollte normalerweise leer gelassen werden, aber wenn er nicht leer ist, muss es ein gültiger JSON-Datensatz sein. Im Falle der Jobe-Sandbox umfassen die verfügbaren Attribute disklimit, streamsize, numprocs, compileargs, linkargs und interpreterargs. Zum Beispiel würde <code>{"compileargs":["-std=c89"]}</code> für eine C-Frage die C89-Konformität erzwingen und keine anderen C-Optionen würden verwendet werden. Details finden Sie in der Jobe-Dokumentation. Einige Sandboxen (z.B. die veraltete Ideone-Sandbox) ignorieren möglicherweise einige oder alle dieser Einstellungen stillschweigend.

Es ist möglich, einen anderen Jobserver auszuwählen, indem Sie einen Parameter \'jobeserver\' und optional \'jobeapikey\' definieren. Wenn beispielsweise das Feld \'Parameters\' auf <code>{"jobeserver": "myspecialjobe.com"}</code> gesetzt ist, wird die Ausführung stattdessen an den Server "myspecialjobe.com" gesendet.';
$string['sandboxerror'] = 'Fehler der Sandbox [{$a->sandbox}]: {$a->message}';
$string['sandboxparams'] = 'Parameter';
$string['scratchpad_ui_error'] = 'XML HTTP Anfrage fehlgeschlagen. Netzwerkfehler oder CORS.';
$string['scratchpad_ui_no_protocol'] = 'Jobe Server Name muss mit http:// oder https:// beginnen.';
$string['scratchpad_ui_request_failed'] = 'Anfrage zu Sandbox Server fehlgeschlagen.';
$string['scratchpadui_button_name_descr'] = 'Text für die Taste "Ausführen"';
$string['scratchpadui_def_button_name'] = 'Ausführen';
$string['scratchpadui_def_prefix_name'] = 'Präfix mit Antwort';
$string['scratchpadui_def_scratchpad_name'] = 'Scratchpad';
$string['scratchpadui_help_text_descr'] = 'Hilfetext, der angezeigt wird';
$string['scratchpadui_output_display_mode_descr'] = 'Legen Sie fest, wie die Ausgabe eines Programms bei der Ausführung angezeigt wird. Es gibt 3 Modi:
<ul>
        <li>text: die Ausgabe als Text anzeigen, html wird escaped. (Default)</li>
        <li>json: JSON Ausgabe von Programmen anzeigen, empfohlen um stdin und Bilder anzuzeigen.</li>
        <ul>
 <li>Akzeptiert JSON in der Programmausgabe mit den Feldern:</li>
            <ul>
                <li>returncode: Exit Code von der Programmausführung.</li>
                <li>stdout: Stdout Text von der Programmausführung.</li>
                <li>stderr: Fehlertext von der Programmausführung.</li>
                <li>files: Ein Objekt das Dateinamen zu base64 encoded Bildern enthält. Diese werden unter dem stdout Text angezeigt.</li>
            </ul>
<li>Senn der returncode auf 42 gesetzt wird, wird ein HTML Eingabefeld nach dem letzten erhaltenen stdout hinzugefügt. Wenn die Eingabetaste in diesem Eingabefeld gedrückt wird, wird der eingegebene Wert zu stdin hinzugefügt und das Programm wird erneut mit diesem aktualisierten stdin ausgeführt. Dies wird so oft wiederholt bis der returncode nicht mehr auf 42 gesetzt wird.</li></ul>
 <li>html: Programmausgabe als html innerhalb des Ausgabebereichs anzeigen. (fortgeschritten)</li>
<ul>
                <li>Dies kann verwendet werden, um Bilder anzuzeigen und anderes HTML einzufügen.</li>
                <li>Wenn einem &lt;input&gt; Element die class coderunner-run-input hinzugefügt wird, wird ein Event hinzugefügt: Wenn die Eingabetaste innerhalb des Eingabefeldes gedrückt wird, wird der eigegebene Wert zum stdin des Programms hinzugefügt und das Programm wird erneut mit diesem aktualisierten Eingabewert ausgeführt.</li>
            </ul>
    </ul>';
$string['scratchpadui_params_descr'] = 'Parameter für Sandbox Webservice.';
$string['scratchpadui_scratchpad_name_descr'] = 'Anzeigename des Scratchpad, wird verwendet um das Scratchpad anzuzeigen / zu verbergen.';
$string['seethisquestioninthequestionbank'] = 'Diese Frage in der Fragesammlung anzeigen';
$string['showcolumns'] = 'Spalten anzeigen:';
$string['showcolumns_help'] = 'Wählen Sie, welche Spalten der Ergebnistabelle den Studierenden angezeigt werden sollen. Leere Spalten werden unabhängig davon ausgeblendet.
Die Standardeinstellungen sind für die meisten Anwendungen geeignet.';
$string['showdetails'] = 'Details anzeigen';
$string['showdifferences'] = 'Unterschiede anzeigen';
$string['showsource'] = 'Vorlagen-Debugging';
$string['sourcecodeallruns'] = 'Debug: Quellcode aus allen Testdurchläufen';
$string['stdin'] = 'Standardeingabe';
$string['stdin_help'] = 'Die Standardeingabe für den Test, von der Vorlage als {{TEST.stdin}} erkannt.';
$string['student_answer'] = 'Antwort des Studierenden';
$string['submitbuttons'] = 'Prüfen-Buttons';
$string['supportscripts'] = 'Unterstützungsskripte';
$string['syntax_errors'] = 'Syntaxfehler';
$string['table_ui_invalidjson'] = 'Table UI: ungültige JSON-Serialisierung.';
$string['table_ui_invalidserialisation'] = 'Table UI: ungültige Serialisierung.';
$string['table_ui_missingparams'] = 'Die Tabellen-UI benötigt die Parameter table_num_columns und table_num_rows.';
$string['tableui_column_headers_descr'] = 'Eine Liste von Strings in den Tabellen-Headern.';
$string['tableui_lines_per_cell_descr'] = 'Die Anzahl der Textzeilen in jedem Textbereich bzw. jeder Zelle';
$string['tableui_num_columns_descr'] = 'Die Anzahl der Spalten in der Tabelle, ausgenommen der ersten Label Spalte (wenn Labels verwendet werden). Pflichtfeld.';
$string['tableui_num_rows_descr'] = 'Die (anfängliche) Anzahl der Zeilen in der Tabelle, ausgenommen der Headerzeile (wenn Header verwendet werden). Pflichtfeld.';
$string['template'] = 'Vorlage';
$string['template_changed'] = 'Per-Test-Vorlage geändert - Kombinator deaktivieren? [\'Abbrechen\' lässt ihn aktiviert.]';
$string['template_help'] = 'Die Vorlage definiert die Programme, die in der Sandbox für eine bestimmte Antwort der Teilnehmer/innen und Tests ausgeführt wird. Es gibt zwei Arten von Vorlagen:

* eine Vorlage pro Testfall, die ein Programm definiert, das für einen einzelnen Testfall ausgeführt werden soll, und
* eine \'Kombinator\'-Vorlage, die ein Programm definiert, das alle verschiedenen Fälle in einem einzigen Programm kombiniert.

Das Kontrollkästchen \'Ist ein Kombinator\' wird bei einer Vorlage pro Testfall nicht angekreuzt und ist für eine für eine Kombinator-Vorlage angekreuzt. Der Rest dieses Hilfebereichs geht davon aus, dass Sie eine Vorlage pro Testfall verwenden; siehe die vollständige Dokumentation für die Verwendung von Kombinator-Vorlagen.

Die Vorlage wird von der Twig-Templating-Engine (siehe http://twig.sensiolabs.org) verarbeitet in einem Kontext, in dem STUDENT_ANSWER die Antwort der/des Teilnehmenden ist und TEST.testcode der Code für den aktuellen Testfall ist. Diese Werte
(und andere Testfallwerte wie TEST.expected, TEST.stdin, TEST.mark)
können in die Vorlage eingefügt werden, indem sie in doppelte Klammern eingeschlossen werden, z.B. <code>{{TEST.testcode}}</code>. Für die Verwendung innerhalb von literalen Zeichenketten muss eine entsprechendes Escape-Funktion angewendet werden, z.B. <code>{{STUDENT_ANSWER | e(\'py\')}}</code> ist die Antwort der/des Teilnehmenden in einer Weise escaped, die für die Verwendung innerhalb von dreifachen Anführungszeichen in Python geeignet ist. Andere Escape-Funktionen sind <code>e(\'c\')</code>, <code>e(\'java\')</code>,
<code>e(\'matlab\')</code>. Das Programm, das von Twig ausgegeben wird, wird dann mit der Sprache des gewählten eingebauten Typs kompiliert und mit stdin auf TEST.stdin gesetzt ausgeführt. Die Ausgabe dieses Programms wird dann an den ausgewählten Bewerter weitergegeben.
Weitere Informationen dazu finden Sie in der Hilfe unter \'Grading controls\'.

Beachten Sie, dass, wenn eine angepasste Vorlage pro Testfall verwendet wird, es für jeden Testfall einen Kompilierungs- und Ausführungszyklus geben wird, während die meisten integrierten Fragetypen stattdessen eine Kombinator-Vorlage definieren, die alle Testfälle in einem einzigen Lauf ausführt.

Wenn das Vorlagen-Debugging-Kontrollkästchen angeklickt ist, wird in der Ausgabe das generierte Programm für jeden Testfall  angezeigt.';
$string['templatecontrols'] = 'Vorlagensteuerung';
$string['templatecontrols_help'] = 'Das Ankreuzen des Kontrollkästchens \'Ist ein Kombinator\' legt fest, dass es sich bei der Vorlage um eine Kombinator-Vorlage handelt, welche die Antwort der/des Teilnehmer/in und alle Testfälle in einem einzigen Durchlauf kombiniert (oder zu kombinieren versucht). Wenn dieses Kontrollkästchen angekreuzt ist, müssen Sie auch den Wert des \'Test-Trenner (regex)\'-Feldes, bei dem es sich um den regulären PHP-Ausdruck handelt, der verwendet wird, um die Ausgabe aus dem Programmlauf zurück in eine Reihe einzelner Testläufe aufzuteilen, definieren. Sie brauchen dies jedoch nicht zu definieren, wenn Sie auch eine Bewerter-Vorlage verwenden, da in diesem Fall der Vorlage-Code dafür verantwortlich ist, die Ausgabe selbst aufzuteilen und zu bewerten.

Kombinator-Vorlagen werden nicht durch eine TEST Twig-Variable übergeben. Stattdessen erhalten sie eine Variable TESTCASES, die eine Liste aller Tests in der Frage ist. Es wird allgemein davon ausgegangen, dass das von der Vorlage erzeugte Programm die STUDENT_ANSWER und alle TESTCASES in einem einzigen Programm kombiniert, das bei seiner Ausführung die Testergebnisse aus jedem Testfall ausgibt, getrennt durch eine eindeutige Zeichenfolge. Die Trennzeichenkette wird durch einen regulären Ausdruck definiert, der durch das Formularfeld \'Test-Trenner (regex)\' unten angegeben wird.

Wenn für Testfälle jedoch eine Standardeingabe definiert ist, werden Kombinator-Vorlagen problematisch. Wenn die Vorlage ein einzelnes Programm konstruiert, wie sollte die Standardeingabe aussehen? Die einfachste Lösung (und Standardlösung) besteht darin, die Testfälle einzeln nacheinander auszuführen, die Kombinator-Vorlage zur Erstellung jedes Programms zu verwenden und ihr eine TESTCASES-Variable zu übergeben, die nur einen einzigen Test enthält. Durch diesen "Trick" kann die Kombinator-Vorlage eine doppelte Funktion erfüllen: Sie verhält sich wie eine Vorlage für jeden Testfall (mit einem TESTCASES-Array mit einem einzigen Element), wenn der Fragenersteller eine Standardeingabe liefert, ansonsten aber wie ein richtiger Kombinator (mit einem TESTCASES-Array mit n Elementen). Um dieses Verhalten so zu ändern, dass der Kombinator alle Testfälle erhält, auch wenn stdin vorhanden ist, aktivieren Sie das Kontrollkästchen "Mehrere stdins zulassen".

Wenn ein Lauf des Kombinator-Programms zu einer Ausgabe nach stderr führt, wird dies als Lauffehler interpretiert. Um sicherzustellen, dass der/dem Teilnehmer/in so viele gültige Tests wie möglich gutgeschrieben werden, verhält sich das System wie bei einer Standardeingabe und greift auf die separate Ausführung jedes Tests zurück. Dies gilt jedoch nicht für Kombinator-Bewerter, die alle Laufzeitfehler selbst behandeln müssen und immer ein gültiges JSON-Ergebnis zurückgeben müssen.';
$string['templateerror'] = 'VORLAGEFEHLER';
$string['templategrader'] = 'Bewerter-Vorlage';
$string['templateparams'] = 'Vorlageparameter';
$string['templateparams_help'] = 'Wenn das Vorlageparameter-Feld nicht leer ist, muss die Vorlage-Parameter im JSON-Format eingegeben werden. In der einfachsten Form ist dieses feld ein JSON Datensatz, der eine Variablenliste definiert, die zur Twig-Vorlage Umgebung hinzugefügt werden, wenn die Vorlage erweitert wird.

Wenn ein Präprozessor in den Vorlageparameter-Einstellungen definiert wird, werden die Vorlageparameter zuerst von der definierten Sprache verarbeitet, um einen JSON Datensatz zu erzeugen. Weitere Informationen in der <a href="https://coderunner.org.nz/mod/url/view.php?id=199">Dokumentation</a>.

<b>Warnung:</b> der Einsatz eines anderen Präprozessors als Twig kann drastische Auswirkungen auf die Performance haben, wenn die Auswertung-pro-Teilnehmer/in-Checkbox aktiviert ist. Diese muss aktiviert sein, wenn eine zufällige Frage-Zuordung für alle Teilnehmer/innen konfiguriert wurde. Die Frage muss den Präprozessor durchlaufen, bevor sie dem/der Teilnehmer/in angezeigt wird. Nur Twig wird vom Jobe Sandbox Server verarbeitet. Jeder Versuch von jeder Frage von jedem/jeder Teilnehmer/in löst einen Job aus, der an den Server gesendet wird. Dies kann dazu führen, dass tausende Jobs vom Server abgearbeitet werden müssen, was zu einem Serveroverload führen kann.';
$string['templateparamsevalpertry'] = 'Pro Teilnehmer/in auswerten';
$string['templateparamslang'] = 'Präprozessor';
$string['templateparamsusingsandbox'] = 'Andere Präprozessoren als Twig verwenden den Sandbox-Server. Wenn "Pro Teilnehmer/in auswerten" aktiviert ist, wird sobald ein/e Teilnehmer/in einen Test startet ein Sandbox-Lauf für diese Fragen initiiert bevor die Frage überhaupt angezeigt werden kann. In einem Test- oder Prüfungssetting kann dies den Sandbox-Server überlasten.';
$string['testallincategory'] = 'Alle Fragen in dieser Kategorie ausführen';
$string['testalltitle'] = 'Alle Fragen in diesemr Kontext ausführen';
$string['testcase'] = 'Testfall {$a}';
$string['testcasecontrols'] = 'Testeigenschaften';
$string['testcasecontrols_help'] = 'Wenn "Als Beispiel verwenden" aktiviert ist, wird dieser Test automatisch in den Resultatetabelle "Zum Beispiel:" der Frage aufgeführt.

Die Einstellung "Anzeige" bestimmt, wann dieser Testfall dem Studenten in der Resultatetabelle angezeigt wird.

Wenn "Rest ausblenden bei Fehler" aktiviert ist und dieser Test fehlschlägt, werden alle hinterher ausgeführten Tests unabhängig von der Einstellung "Anzeige" vor den Studierenden verborgen.

"Punkte" setzt den Wert dieses Testfalls; nur sinnvoll, wenn dies nicht eine Alles-oder-nichts-Bewertung-Frage ist.

"Sortierung" kann verwendet werden, um die Reihenfolge der Testfälle zu ändern, wenn die Frage gespeichert wird: Testfälle werden nach diesem Feld sortiert.';
$string['testcases'] = 'Testfälle';
$string['testcode'] = 'Testcode';
$string['testcode_help'] = 'Der Code für den Test, von der Vorlage als {{TEST.testcode}} erkannt.';
$string['testcolhdr'] = 'Test';
$string['testingquestion'] = 'Testen der Frage {$a}';
$string['testsplitterre'] = 'Test-Trenner (regex)';
$string['testtype'] = 'Vorabprüfung-Testtyp';
$string['testtype_both'] = 'Beide';
$string['testtype_help'] = 'Wenn die Vorabprüfung aktiviert und auf "ausgewählt" eingestellt ist, steuert diese Einstellung, ob der Test nur in einem normalen Prüfungsdurchlauf, nur in einem Vorabprüfungsdurchlauf oder in beiden Durchläufen verwendet wird.
Wenn die Vorabprüfung auf etwas anderes als "ausgewählt" eingestellt ist, wird diese Einstellung ignoriert.';
$string['testtype_normal'] = 'Nur Prüfung';
$string['testtype_precheck'] = 'Nur Vorabprüfung';
$string['toobigfiles'] = 'Zu große Datei(en): {$a}';
$string['tooshort'] = 'Die Antwort ist zu kurz um einen Sinn zu ergeben und wurde ohne Strafe ignoriert';
$string['twigall'] = 'Twig für alles';
$string['twigcontrols'] = 'Vorlageparameter Steuerung';
$string['twigcontrols_help'] = 'Auf Vorlageparameter wird bei der Twig-Erweiterung normalerweise in der Form {{QUESTION.parameters.someparam}} Bezug genommen. Wenn jedoch das Kontrollkästchen \'Vorlagenparameter heben\' markiert ist, werden die Parameter in den globalen Namensraum von Twig gehoben und können einfach als {{someparam}} referenziert werden.

Der Twig-Makroprozessor wurde traditionell nur auf die Vorlage angewendet. Jetzt wird er auch auf die Vorlagenparameter und, wenn das Kontrollkästchen \'Twig für alles\' markiert ist, auf den Fragentext, die Musterantwort, den Antwort Preload und alle Testfallfelder angewendet, wobei die Parameter der Twig-erweiterten Vorlage als Umgebung verwendet werden. Normalerweise müssen Sie \'Twig für alles\' einschalten, wenn Sie die Randomisierung innerhalb der Vorlagenparameter benutzen möchten.';
$string['twigerror'] = 'Twig Fehler {$a}';
$string['twigerrorintest'] = 'Twig-Fehler bei der Verarbeitung dieses Tests {$a}';
$string['type_header'] = 'CodeRunner-Fragetyp';
$string['typename'] = 'Fragetyp';
$string['typerequired'] = 'Bitte wählen Sie den Typ der Frage (Sprache, Format, etc.)';
$string['ui_fallback'] = 'Rückgriff auf ein Rohtext-Feld.';
$string['uichanged'] = 'UI geändert. Speichern Sie und laden Sie die Seite neu, um verfügbare UI Parameter anzuzeigen oder zu bearbeiten.';
$string['uicontrols'] = 'Input UIs';
$string['uiparamdefault'] = 'Standard';
$string['uiparamdesc'] = 'Beschreibung';
$string['uiparametergroup'] = 'UI Parameter';
$string['uiparameters'] = 'UI Parameter (JSON)';
$string['uiparametertablehead'] = 'Das {$a->uiname} UI benötigt folgende Parameter:';
$string['uiparamname'] = 'Name';
$string['unauthorisedbulktest'] = 'Sie haben keinen verwendbaren Zugriff auf CodeRunner-Fragen';
$string['unauthoriseddbaccess'] = 'Sie sind nicht berechtigt, dieses Skript zu verwenden';
$string['unknowncombinatorgraderfield'] = 'Unbekanntes Feld mit Name ({$a->fieldname}) im Output des Kombinator-Bewerters';
$string['unknownerror'] = 'Ein unerwarteter Fehler ist aufgetreten. Die Sandbox ist möglicherweise nicht verfügbar. Versuchen Sie es bald noch einmal.';
$string['unknownuiplugin'] = 'Informationen über ein unbekanntes Plugin ({$a->pluginname}) wurden angefragt.';
$string['unserializefailed'] = 'Gespeicherte Testergebnisse konnten nicht deserialisiert werden. Vielleicht eine Neubewertung versuchen?';
$string['useace'] = 'Vorlage verwendet Ace';
$string['useasexample'] = 'Als Beispiel verwenden';
$string['validateonsave'] = 'Beim Speichern prüfen';
$string['wrongnumberofformats'] = 'Falsche Anzahl der Testresultate-Spaltenformate. Erwartet {$a->expected}, erhalten {$a->got}';
$string['wsbadjson'] = 'Paremeter und Datei Parameter müssen leer oder gültige JSON Einträge sein';
$string['wscputimeexcess'] = 'Die eingestellte CPU Zeit überschreitet die maximale CPU Zeit.';
$string['wsdisabled'] = 'Sandbox Webservice ist deaktivert. Kontaktieren Sie Ihren Systemadministrator.';
$string['wsloggingenable'] = 'Log Sandbox Webservice';
$string['wsloggingenable_desc'] = 'Wenn diese Option aktiviert ist, wird jede Code-Ausführung über das Sandbox Webservice im Log gespeichert. Diese Option muss für die Drosselung der Benutzerrate aktiviert sein.';
$string['wsmaxcputime'] = 'Max CPU Zeit (Sekunden)';
$string['wsmaxcputime_desc'] = 'Beschränkt die maximale CPU Zeit, die ein Webservice Job verwenden kann, auch wenn der CPU Zeit Sandbox parameter explizit gesetzt ist.';
$string['wsmaxhourlyrate'] = 'Max stündliche Einreichrate';
$string['wsmaxhourlyrate_desc'] = 'Wenn eine Person diese Einreichrate innerhalb einer Stunde überschreitet, werden die Einreichungen gesperrt. 0 für keine Drosselung der Nutzerrate.';
$string['wsnoaccess'] = 'Nur angemeldete Benutzer/innen können auf diese Funktion zugreifen.';
$string['wsnolanguage'] = 'Unbekannte Sprache "{$a}"';
$string['xmlcoderunnerformaterror'] = 'XML-Format-Fehler in der CodeRunner-Frage';
