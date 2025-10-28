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
 * Strings for component 'question', language 'de', version '4.4'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Aktion';
$string['addanotherhint'] = 'Weiteren Hinweis hinzufügen';
$string['addcategory'] = 'Kategorie hinzufügen';
$string['addmorechoiceblanks'] = 'Leerfelder für {no} weitere Auswahlmöglichkeiten';
$string['adminreport'] = 'Bericht zu möglichen Problemen mit Ihrer Fragen-Datenbank';
$string['advancedsearchoptions'] = 'Suchoptionen';
$string['alltries'] = 'Alle Versuche';
$string['answer'] = 'Antwort';
$string['answers'] = 'Antworten';
$string['answersaved'] = 'Antwort gespeichert';
$string['answerx'] = 'Antwort {$a}';
$string['attemptfinished'] = 'Versuch beendet';
$string['attemptfinishedsubmitting'] = 'Abgeschlossener Versuch wird übertragen: {$a}';
$string['attemptoptions'] = 'Versuchsoptionen';
$string['availableq'] = 'Verfügbar?';
$string['badbase'] = 'Schlechter Bezug vor **: {$a}**';
$string['behaviour'] = 'Verhalten';
$string['behaviourbeingused'] = 'Eingestelltes Verhalten: {$a}';
$string['broken'] = 'Ungültiger Link, der auf eine nicht existierende Datei zeigt.';
$string['byandon'] = 'von <em>{$a->user}</em> - <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Die Sicherungsdatei konnte nicht kopiert werden';
$string['cannotcreate'] = 'Es konnte kein Eintrag in der Datenbanktabelle für Testversuche (question_attempts) angelegt werden.';
$string['cannotcreatepath'] = 'Pfad {$a} konnte nicht erstellt werden';
$string['cannotdeletebehaviourinuse'] = 'Sie können das Verhalten {$a} nicht löschen; es wird aktiv genutzt.';
$string['cannotdeletecate'] = 'Kategorie konnte nicht gelöscht werden, weil sie für diesen Kontext die Standardkategorie darstellt.';
$string['cannotdeleteneededbehaviour'] = 'Frageverhalten {$a} kann nicht gelöscht werden. es wird von anderen Verhalten benötigt.';
$string['cannotdeleteqtypeinuse'] = 'Sie dürfen den Fragetyp \'{$a}\' nicht löschen. In der Fragensammlung gibt es Fragen dieses Typs.';
$string['cannotdeleteqtypeneeded'] = 'Sie dürfen den Fragetyp \'{$a}\' nicht löschen. Andere installierte Fragetypen sind davon abgeleitet.';
$string['cannotdeletetopcat'] = 'Hauptkategorien können nicht gelöscht werden.';
$string['cannotedittopcat'] = 'Hauptkategorien können nicht bearbeitet werden.';
$string['cannotenable'] = 'Fragetyp \'{$a}\' kann nicht direkt erstellt werden.';
$string['cannotenablebehaviour'] = 'Frageverhalten {$a} kann nicht unmittelbar genutzt werden. Es ist nur für den internen Gebrauch.';
$string['cannotfindcate'] = 'Kategoriedaten konnten nicht gefunden werden';
$string['cannotfindquestionfile'] = 'Die Fragendaten konnten nicht in der ZIP-Datei gefunden werden';
$string['cannotgetdsfordependent'] = 'Für diese datensetabhängige Frage kann das gewählte Datenset nicht aufgerufen werden! (Frage: {$a->id}, Datensetwert: {$a->item})';
$string['cannotgetdsforquestion'] = 'Ausgewähltes Datenset für berechnete Fragen nicht gefunden! (Frage:{$a})';
$string['cannothidequestion'] = 'Frage konnte nicht verborgen werden';
$string['cannotimportformat'] = 'Sorry, aber der Import für dieses Format ist bisher nicht implementiert!';
$string['cannotinsertquestion'] = 'Neue Frage konnte nicht eingefügt werden!';
$string['cannotinsertquestioncatecontext'] = 'Neue Fragenkategorie {$a->cat} nicht eingefügt: ungültige Kontext-ID {$a->ctx}';
$string['cannotloadquestion'] = 'Frage konnte nicht geladen werden';
$string['cannotmovequestion'] = 'Mit dieser Funktion können Sie keine Fragen verschieben in denen Dateien (Bilder) aus unterschiedlichen Bereichen eingebunden sind.';
$string['cannotopenforwriting'] = 'Öffnen zum Schreiben von {$a} nicht möglich.';
$string['cannotpreview'] = 'Keine Vorschau für diese Fragen möglich!';
$string['cannotread'] = 'Importdatei kann nicht geöffnet werden oder ist leer';
$string['cannotregradedifferentqtype'] = 'Eine Neubewertung mit einer Frage eines anderen Typs ist nicht möglich.';
$string['cannotretrieveqcat'] = 'Fragekategorie konnte nicht aufgerufen werden';
$string['cannotunhidequestion'] = 'Frage konnte nicht sichtbar gemacht werden';
$string['cannotunzip'] = 'Datei konnte nicht entpackt werden.';
$string['cannotwriteto'] = 'Die exportierten Fragen können nicht nach "{$a}" gespeichert werden';
$string['categories'] = 'Kategorien';
$string['category'] = 'Kategorie';
$string['categorycurrent'] = 'Aktuelle Kategorie';
$string['categorycurrentuse'] = 'Diese Kategorie verwenden';
$string['categorydoesnotexist'] = 'Diese Kategorie gibt es nicht';
$string['categoryinfo'] = 'Kategoriebeschreibung';
$string['categorymove'] = 'Die Kategorie \'{$a->name}\' enthält {$a->count} Fragen (von denen einige als verborgene Fragen oder Zufallsfragen noch irgendwo in einem Test benutzt werden). Wählen Sie eine Kategorie aus, um sie dorthin zu verschieben.';
$string['categorymoveto'] = 'In der Kategorie sichern';
$string['categorynamecantbeblank'] = 'Der Kategoriename kann nicht leer bleiben';
$string['categorynamewithcount'] = '{$a->name} ({$a->questioncount})';
$string['categorynamewithidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['categorynamewithidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->questioncount})';
$string['changeoptions'] = 'Optionen ändern';
$string['changepublishstatuscat'] = 'Die <a href="{$a->caturl}">Kategorie "{$a->name}"</a> im Kurs "{$a->coursename}" wird ihren Freigabestatus von <strong>{$a->changefrom} nach {$a->changeto}</strong> ändern.';
$string['check'] = 'Prüfen';
$string['chooseqtypetoadd'] = 'Markieren Sie den gewünschten Fragetyp';
$string['clearwrongparts'] = 'Falsche Antworten löschen';
$string['clickflag'] = 'Frage markieren';
$string['clicktoflag'] = 'Diese Frage als Referenz markieren';
$string['clicktounflag'] = 'Markierung entfernen';
$string['clickunflag'] = 'Markierung entfernen';
$string['closepreview'] = 'Vorschau schließen';
$string['combinedfeedback'] = 'Kombiniertes Feedback';
$string['comment'] = 'Kommentar';
$string['commented'] = 'Kommentare: {$a}';
$string['commentormark'] = 'Kommentieren oder Punkte überschreiben';
$string['comments'] = 'Kommentare';
$string['commentx'] = 'Kommentar: {$a}';
$string['complete'] = 'Vollständig';
$string['contexterror'] = 'Diese Seite sollte nur angezeigt werden, wenn eine Kategorie in einen anderen Kontext verschoben wird.';
$string['copy'] = 'Aus {$a} kopieren und Links ändern.';
$string['correct'] = 'Richtig';
$string['correctfeedback'] = 'Für jede richtige Antwort';
$string['correctfeedbackdefault'] = 'Die Antwort ist richtig.';
$string['created'] = 'Erstellt';
$string['createdby'] = 'Erstellt von';
$string['createdmodifiedheader'] = 'Erstellt / zuletzt gespeichert';
$string['createnewquestion'] = 'Neue Frage erstellen...';
$string['cwrqpfs'] = 'Zufallsfragen, die Fragen aus der Unterkategorie auswählen.';
$string['cwrqpfsinfo'] = '<p>Beim Update auf Moodle 1.9 werden Fragekategorien in unterschiedliche Kontexten aufteilen. Bei einigen Fragekategorien und Fragen muss der Freigabestatus
geändert werden. Das manchmal kommt vor, wenn in einem Test eine oder mehrere "zufällig ausgewählte Fragen" aus freigegebenen und nicht freigegebenen Kategorien stammen (wie dies auf dieser Website der Fall ist). Bei einigen Kategorien muss dann der Status der Freigabe angepasst werden, wenn auf unterschiedlichen Hierarchieebenen unterschiedliche Freigabewerte existieren.</p>
<p>In den folgenden Fragenkategorien wurde der Freigabestatus so angepasst, dass die übergeordnete Kategorie den gleichen Status erhält wie die Kategorie, in der Fragen zur Zufallsauswahl abgelegt sind. Die von dieser Änderung betroffenen Fragen können wie bisher in allen Tests weiter genutzt werden, bis sie aus den Tests entfernt werden.</p>';
$string['cwrqpfsnoprob'] = 'Es sind keine Fragekategorien von der Funktion "Zufallsfragenauswahl aus untergeordnete Kategorien" betroffen.';
$string['decimalplacesingrades'] = 'Nachkommastellen in Bewertungen';
$string['defaultfor'] = 'Standard für {$a}';
$string['defaultinfofor'] = 'Standardkategorie für Fragen, die im Kontext \'{$a}\' freigegeben sind.';
$string['defaultmark'] = 'Erreichbare Punkte';
$string['defaultmarkmustbepositive'] = 'Die Standardbewertung muss ein positiver Wert sein.';
$string['deletecoursecategorywithquestions'] = 'In dieser Kurskategorie sind Fragen in der Fragensammlung hinterlegt. Wenn Sie nun fortfahren, werden diese gelöscht. Möglicherweise möchten Sie die Fragen zuerst über die Verwaltung der Fragensammlung verschieben.';
$string['deletequestioncheck'] = 'Die folgende Frage und alle ihre Versionen werden gelöscht: <br /><br />{$a}';
$string['deletequestionscheck'] = 'Die folgende Fragen und alle ihre Versionen werden gelöscht: <br /><br />{$a}';
$string['deletequestiontitle'] = 'Frage löschen?';
$string['deletequestiontitle_plural'] = 'Fragen löschen?';
$string['deleteselectedquestioncheck'] = 'Ausgewählte Versionen der folgenden Frage werden gelöscht: <br /><br />{$a}';
$string['deleteversiontitle'] = 'Ausgewählte Version löschen?';
$string['deleteversiontitle_plural'] = 'Ausgewählte Versionen löschen?';
$string['deletingbehaviour'] = 'Frageverhalten \'{$a}\' wird gelöscht';
$string['deletingqtype'] = 'Fragetyp \'{$a}\' löschen';
$string['didnotmatchanyanswer'] = '[Passt zu keiner Antwort]';
$string['disabled'] = 'deaktiviert';
$string['displayoptions'] = 'Anzeigeoptionen';
$string['disterror'] = 'Die Distribution {$a} verursacht Fehler.';
$string['donothing'] = 'Keine Dateien kopieren oder verschieben. Keine Links ändern.';
$string['editcategories'] = 'Kategorien bearbeiten';
$string['editcategories_help'] = 'Anstatt Fragen in einer einzigen langen Liste zu sammeln, können Sie Ihre Fragen strukturieren und in Fragenkategorien ablegen.

Jede Kategorie verfügt über einen Kontext, der festlegt, wo die Fragen dieser Kategorie eingesetzt werden können.

* Aktivitätenkontext - Frage nur in der konkreten Aktivität einsetzbar
* Kurskontext _ Frage kann im gesamten Kurs genutzt weden
* Kursbereichskontext - Frage kann in allen Kursen des Kursbereichs genutzt werden
* Systemkontext - Frage kann in allen Kursen genutzt werden.

Kategorien können auch als Container für Zufallsfragen genutzt werden.';
$string['editcategories_link'] = 'question/category';
$string['editcategory'] = 'Kategorie bearbeiten';
$string['editingcategory'] = 'Kategorie bearbeiten';
$string['editingquestion'] = 'Frage bearbeiten';
$string['editquestion'] = 'Frage bearbeiten';
$string['editquestions'] = 'Fragen bearbeiten';
$string['editthiscategory'] = 'Diese Kategorie bearbeiten';
$string['emptyxml'] = 'Unbekannter Fehler - leere Datei imsmanifest.xml';
$string['enabled'] = 'aktiv';
$string['erroraccessingcontext'] = 'Kein Zugriff auf den Kontext';
$string['errordeletingquestionsfromcategory'] = 'Fehler beim Löschen von Fragen in der Kategorie {$a}.';
$string['errorduringpost'] = 'Fehler nach Prozessabschluss';
$string['errorduringpre'] = 'Fehler vor Prozessbeginn';
$string['errorduringproc'] = 'Fehler bei Prozessausführung';
$string['errorduringregrade'] = 'Frage {$a->qid} konnte nicht neu bewertet werden - Status: {$a->stateid}';
$string['errorfilecannotbecopied'] = 'Fehler: Datei {$a} kann nicht kopiert werden.';
$string['errorfilecannotbemoved'] = 'Fehler: Datei {$a} kann nicht verschoben werden.';
$string['errorfileschanged'] = 'Fehler: Dateien, die in Fragen verwendet werden, haben sich seit der letzten Anzeige geändert. ';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'Die Frage ({$a}) erscheint mehrfach im Test mit unterschiedlichen Gewichtungen. Dies wird für der Erstellung der Statistik nicht unterstützt und könnte zu unzuverlässigen Auswertungen führen.';
$string['errormanualgradeoutofrange'] = 'Die Bewertung {$a->grade} für die Frage {$a->name} liegt nicht zwischen \'0\' und {$a->maxgrade}. Punkte und Kommentare wurde nicht gespeichert.';
$string['errormovingquestions'] = 'Fehler beim Verschieben von Fragen mit den IDs {$a}.';
$string['errorpostprocess'] = 'Fehler beim Post-Processing';
$string['errorpreprocess'] = 'Fehler beim Pre-Processing';
$string['errorprocess'] = 'Fehler beim Processing';
$string['errorprocessingresponses'] = 'Während der Verarbeitung Ihrer Antworten ist ein Fehler aufgetreten ({$a}). Klicken Sie auf "Fortsetzen", um zur Ausgangsseite zu gehen, und versuchen Sie es nochmal.';
$string['errorsavingcomment'] = 'Fehler beim Speichern des Kommentars für Frage {$a->name}.';
$string['errorsavingflags'] = 'Fehler beim Speichern der Markierung';
$string['errorupdatingattempt'] = 'Fehler beim Speichern des Kommentars zu Frage {$a->id} in der Datenbank.';
$string['eventqbankdisabled'] = 'Plugin Fragenspeicher deaktiviert';
$string['eventqbankenabled'] = 'Plugin Fragenspeicher aktiviert';
$string['eventquestioncategorycreated'] = 'Fragenkategorie';
$string['eventquestioncategorydeleted'] = 'Fragenkategorie gelöscht';
$string['eventquestioncategorymoved'] = 'Fragenkategorie verschoben';
$string['eventquestioncategoryupdated'] = 'Fragenkategorie aktualisiert';
$string['eventquestioncategoryviewed'] = 'Fragenkategorie angezeigt';
$string['eventquestioncreated'] = 'Frage angelegt';
$string['eventquestiondeleted'] = 'Frage gelöscht';
$string['eventquestionmoved'] = 'Frage verschoben';
$string['eventquestionsexported'] = 'Frage exportiert';
$string['eventquestionsimported'] = 'Frage importiert';
$string['eventquestionupdated'] = 'Frage aktualisiert';
$string['eventquestionviewed'] = 'Frage angezeigt';
$string['export'] = 'Export';
$string['exportasxml'] = 'Als Moodle-XML exportieren';
$string['exportcategory'] = 'Kategorie exportieren';
$string['exportcategory_help'] = 'Mit dieser Einstellung legen Sie fest, aus welcher Kategorie die exportierten Fragen stammen.

Bestimmte Importformate wie GIFT und Moodle XML erlauben es, Kategorie- und Kontextdaten in die Exportdatei aufzunehmen, sodass diese beim Import (optional) wiederhergestellt werden können. Bei Bedarf sollten die entsprechenden Kontrollkästchen aktiviert werden.';
$string['exporterror'] = 'Fehler beim Export aufgetreten!';
$string['exportfilename'] = 'quiz';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = 'Diese Frage im Moodle-XML-Format herunterladen';
$string['exportquestions'] = 'Fragen in Datei exportieren';
$string['exportquestions_help'] = 'Mit dieser Funktion können Sie eine komplette Kategorie (und ggf. Unterkategorien) von Fragen in eine Datei exportieren. Bitte beachten Sie, dass je nach gewähltem Dateiformat einige Fragedaten und bestimmte Fragetypen möglicherweise nicht exportiert werden.';
$string['exportquestions_link'] = 'question/export';
$string['feedback'] = 'Feedback';
$string['fieldinquestion'] = '{$a->fieldname} {$a->questionindentifier}';
$string['fieldinquestionpre'] = '{$a->questionindentifier} {$a->fieldname}';
$string['filecantmovefrom'] = 'Die Fragendateien können nicht verschoben werden, da Sie nicht über das Recht zum Entfernen von Dateien von dem Ort verfügen, von dem aus Sie die Fragen verschieben möchten.';
$string['filecantmoveto'] = 'Die Fragendateien können nicht verschoben werden, da Sie nicht über das Recht zum Hinzufügen von Dateien an dem Ort verfügen, zu dem Sie die Fragen verschieben möchten.';
$string['fileformat'] = 'Dateiformat';
$string['filesareacourse'] = 'Dateibereich im Kurs';
$string['filesareasite'] = 'Dateien der Website';
$string['filestomove'] = 'Dateien nach {$a} kopieren / verschieben?';
$string['fillincorrect'] = 'Richtige Lösung';
$string['filterbytags'] = 'Nach Tags filtern ...';
$string['firsttry'] = 'Erster Versuch';
$string['flagged'] = 'markiert';
$string['flagthisquestion'] = 'Diese Frage markieren';
$string['formquestionnotinids'] = 'Die angefragte Frage ist nicht in questionids vermerkt.';
$string['fractionsnomax'] = 'Eine der Antworten sollte mit 100% bewertet werden, um für die Beantwortung der Frage die volle Punktzahl bekommen zu können.';
$string['generalfeedback'] = 'Allgemeines Feedback';
$string['generalfeedback_help'] = 'Das allgemeine Feedback wird nach der Beantwortung der Fragen angezeigt, und zwar unabhängig von den gegebenen Antworten. Andere Feedbacks sind abhängig von der \'Richtigkeit\' der Antworten.

Allgemeines Feedback kann eingesetzt werden, um Hinweise zu geben. Links könnten zu weiteren Informationen führen, falls die Frage nicht verstanden wurde.';
$string['getcategoryfromfile'] = 'Kategorie aus Datei holen';
$string['getcontextfromfile'] = 'Kontext aus Datei holen';
$string['hintn'] = 'Hinweis {no}';
$string['hintnoptions'] = 'Optionen für Hinweis {no}';
$string['hinttext'] = 'Hinweistext';
$string['howquestionsbehave'] = 'Frageverhalten';
$string['howquestionsbehave_help'] = 'Fragen des Tests können beim Beantworten unterschiedliche Reaktionsweisen zeigen.
Häufig müssen Teilnehmer/innen erst den gesamten Test bearbeiten, bevor die Bewertung erfolgt und ein Feedback angezeigt wird. Das wäre die \'Spätere Auswertung\'.

Alternativ könnte nach der Beantwortung jeder einzelnen Frage eine sofortige  Rückmeldung gegeben werden. Bei falscher Beantwortung der Frage könnten sie eine neue Antwort abgeben. Bei der dann richtigen Antwort könnte ein Punktabzug vom Höchstwert erfolgen (Mehrfachbeantwortung (mit Abzügen)).

Dies sind die beiden am häufigsten genutzten Frageverhalten.';
$string['howquestionsbehave_link'] = 'question/behaviour';
$string['idnumber'] = 'ID-Nummer';
$string['idnumber_help'] = 'Wenn verwendet, muss die ID-Nummer in jeder Fragenkategorie eindeutig sein. Dies ist ein alternativer Weg, um Fragen zu identifizieren. Manchmal ist dies sinnvoll, aber normalerweise kann das Feld leer bleiben.';
$string['ignorebroken'] = 'Ungültige Links ignorieren';
$string['import'] = 'Import';
$string['importcategory'] = 'Importkategorien';
$string['importcategory_help'] = 'Diese Einstellung bestimmt die Kategorie, in die die importierten Fragen eingeordnet werden.

Bestimmte Importformate wie GIFT und Moodle XML können Kategorie- und Kontextdaten in der Importdatei enthalten. Um diese Daten anstelle der ausgewählten Kategorie zu verwenden, sollten die entsprechenden Kontrollkästchen aktiviert werden. Wenn in der Importdatei angegebene Kategorien nicht vorhanden sind, werden sie erstellt.';
$string['importerror'] = 'Fehler beim Import';
$string['importerrorquestion'] = 'Fehler beim Import der Frage';
$string['importfromcoursefiles'] = '... oder eine Datei zum Import auswählen.';
$string['importfromupload'] = 'Wählen Sie eine Datei zum Hochladen...';
$string['importingquestions'] = '{$a} Fragen werden aus der Datei importiert';
$string['importparseerror'] = 'Fehler beim Einlesen der Importdatei gefunden. Es wurden daher keine Fragen importiert. Zum Einlesen fehlerfreier Fragen setzen Sie die Einstellung \'Bei Fehler stoppen\' auf \'Nein\'.';
$string['importquestions'] = 'Fragen aus Datei importieren';
$string['importquestions_help'] = 'Mit dieser Funktion können Fragen in verschiedenen Formaten per Textdatei importiert werden. Die Datei muss die Kodierung UTF-8 verwenden.';
$string['importquestions_link'] = 'question/import';
$string['importwrongfileencoding'] = 'Die gewählte Datei ist nicht UTF-8 kodiert. {$a}-Dateien müssen aber UTF-8 verwenden.';
$string['importwrongfiletype'] = 'Die Inhalte der Datei ({$a->actualtype}) passen nicht zum Format der gewählten Importdatei ({$a->expectedtype}).';
$string['impossiblechar'] = 'Unzulässiges Zeichen {$a} innerhalb der Klammern entdeckt';
$string['includesubcategories'] = 'Fragen aus Unterkategorien anzeigen';
$string['incorrect'] = 'Falsch';
$string['incorrectfeedback'] = 'Für jede falsche Antwort';
$string['incorrectfeedbackdefault'] = 'Die Antwort ist falsch.';
$string['information'] = 'Information';
$string['invalidanswer'] = 'Unvollständige Antwort';
$string['invalidarg'] = 'Ungültige Argumente oder falsche Serverkonfiguration';
$string['invalidcategoryidforparent'] = 'Ungültige Kategorien-ID für übergeordnete Ebene';
$string['invalidcategoryidtomove'] = 'Ungültige Kategorien-ID beim Verschieben';
$string['invalidconfirm'] = 'Falscher Bestätigungstext';
$string['invalidcontextinhasanyquestions'] = 'Ungültiger Kontext für question_context_has_any_questions.';
$string['invalidgrade'] = 'Bewertungen passen nicht zu den Bewertungsoptionen - Fragen wurden übersprungen';
$string['invalidgradequestion'] = 'Die Bewertungen ({$a->grades}) stimmen nicht mit den Bewertungsoptionen überein – Frage "{$a->question}" wurde übersprungen.';
$string['invalidpenalty'] = 'Ungültige Abzüge';
$string['invalidwizardpage'] = 'Falsche oder keine Seite festgelegt!';
$string['lastmodifiedby'] = 'Zuletzt verändert von';
$string['lasttry'] = 'Letzter Versuch';
$string['linkedfiledoesntexist'] = 'Verbundene Datei {$a} existiert nicht';
$string['makechildof'] = 'Unterkategorie von \'{$a}\' erzeugen';
$string['makecopy'] = 'Kopieren';
$string['maketoplevelitem'] = 'Nach ganz oben bewegen';
$string['manualgradeinvalidformat'] = 'Dies ist eine ungültige Zahl.';
$string['manualgradeoutofrange'] = 'Diese Bewertung ist außerhalb des gültigen Bereichs.';
$string['manuallygraded'] = 'Manuell bewertete Punkte {$a->mark} mit Kommentar: {$a->comment}';
$string['mark'] = 'Punkte';
$string['markedoutof'] = 'Erreichbare Punkte';
$string['markedoutofmax'] = 'Erreichbare Punkte: {$a}';
$string['markoutofmax'] = 'Erreichte Punkte {$a->mark} von {$a->max}';
$string['marks'] = 'Punkte';
$string['matchgrades'] = 'Bewertungen abgleichen';
$string['matchgrades_help'] = 'Importierte Bewertungen müssen einer der gültigen Notenlisten entsprechen - 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0 (auch negative Werte). Wenn nicht, gibt es zwei Optionen:

* Fehler, wenn Note nicht aufgeführt - Wenn eine Frage Noten enthält, die nicht in der Liste enthalten sind, wird ein Fehler angezeigt und die Frage wird nicht importiert
* Nächstliegende Note, wenn nicht aufgeführt - Wenn eine Note gefunden wird, die keinem Wert in der Liste entspricht, wird die Note auf den nächstliegenden Wert in der Liste geändert';
$string['matchgradeserror'] = 'Fehler wenn Bewertung nicht gelistet';
$string['matchgradesnearest'] = 'Nächstliegende Bewertung verwenden';
$string['missingcourseorcmid'] = 'courseid oder cmid muss für print_question  angegeben werden';
$string['missingcourseorcmidtolink'] = 'courseid oder cmid erforderlich, um get_question_edit_link anzuzeigen.';
$string['missingimportantcode'] = 'Für diesem Fragetyp fehlt wichtiger Code: {$a}.';
$string['missingoption'] = 'In der Lückentext-Frage {$a} fehlen Optionen.';
$string['modified'] = 'Zuletzt gespeichert';
$string['move'] = 'Aus {$a} verschieben und Links ändern.';
$string['movecategory'] = 'Kategorie verschieben';
$string['movedquestionsandcategories'] = 'Fragen und Fragenkategorien wurden von {$a->oldplace} nach {$a->newplace} verschoben.';
$string['movelinksonly'] = 'Verändert die Angabe auf die Links verweisen. Verschiebt oder kopiert keine Dateien.';
$string['moveq'] = 'Fragen verschieben';
$string['moveqtoanothercontext'] = 'Frage in einen anderen Kontext verschieben';
$string['moveto'] = 'Verschieben nach';
$string['movingcategory'] = 'Kategorie wird verschoben';
$string['movingcategoryandfiles'] = 'Möchten Sie die Kategorie {$a->name} und alle Unterkategorien wirklich in den Kontext  "{$a->contextto}" verschieben?<br/>In Fragen in {$a->fromareaname} wird auf <strong>{$a->urlcount} Dateien</strong> verlinkt. Wollen Sie diese Dateien nach {$a->toareaname} kopieren oder verschieben?';
$string['movingcategorynofiles'] = 'Möchten Sie die Kategorie "{$a->name}" und alle Unterkategorien wirklich in den Kontext "{$a->contextto}" verschieben?';
$string['movingquestions'] = 'Fragen und Dateien werden verschoben';
$string['movingquestionsandfiles'] = 'Möchten Sie die Frage(n) {$a->questions} wirklich in den Kontext <strong>"{$a->tocontext}"</strong> verschieben?<br/>In Fragen in {$a->fromareaname} wird auf <strong>{$a->urlcount} Dateien</strong> verlinkt. Möchten Sie diese Dateien nach {$a->toareaname} kopieren oder verschieben?';
$string['movingquestionsnofiles'] = 'Möchten Sie die Fragen {$a->questions} wirklich in den Kontext <strong>"{$a->tocontext}"</strong> verschieben?<br/>Die Fragen in {$a->fromareaname} verlinken auf <strong>keine Datei</strong>.';
$string['needtochoosecat'] = 'Sie müssen eine Kategorie auswählen, um diese Frage zu verschieben. Oder Sie drücken "Abbrechen".';
$string['nocate'] = 'Keine solche Kategorie: {$a}!';
$string['noconditionspecified'] = 'Geben Sie bitte eine Bedingung an';
$string['nopermissionadd'] = 'Sie haben nicht das Recht, hier Fragen hinzuzufügen.';
$string['nopermissionedit'] = 'Sie können hier keine Fragen bearbeiten.';
$string['nopermissionmove'] = 'Sie haben nicht das Recht, hier Fragen zu verschieben. Speichern Sie die Frage in dieser Kategorie oder als neue Frage.';
$string['noprobs'] = 'Es wurden keine Probleme in Ihrer Fragen-Datenbank gefunden.';
$string['noquestionbanks'] = 'Keine Fragensammlungsplugins gefunden';
$string['noquestions'] = 'Es wurden keine Fragen gefunden, die exportiert werden könnten. Stellen Sie sicher, dass Sie eine Kategorie ausgewählt haben, die Fragen enthält.';
$string['noquestionsinfile'] = 'In der Importdatei sind keine Fragen enthalten.';
$string['noresponse'] = '[Keine Antwort]';
$string['notagfiltersapplied'] = 'Keine Filter für Tags angewendet';
$string['notanswered'] = 'Nicht beantwortet';
$string['notchanged'] = 'Seit dem letzten Versuch nicht geändert';
$string['notenoughanswers'] = 'Dieser Fragetyp erfordert mindestens {$a} Antworten.';
$string['notenoughdatatoeditaquestion'] = 'Weder eine Frage-ID, noch Kategorie-ID oder Fragetyp sind angegeben.';
$string['notenoughdatatomovequestions'] = 'Sie müssen die Frage-IDs der Fragen angeben, die Sie verschieben möchten.';
$string['notgraded'] = 'Nicht bewertet';
$string['notshown'] = 'Nicht anzeigen';
$string['notyetanswered'] = 'Bisher nicht beantwortet';
$string['notyourpreview'] = 'Diese Vorschau ist nicht für Sie gedacht.';
$string['novirtualquestiontype'] = 'Kein virtueller Fragetyp für Fragetyp {$a} vorhanden';
$string['numqas'] = 'Anzahl der Versuche';
$string['numquestions'] = 'Fragenanzahl';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} verborgene +{$a->numdraft} Entwürfe)';
$string['options'] = 'Optionen';
$string['page-question-category'] = 'Jede Fragenkategorieseite';
$string['page-question-edit'] = 'Jede Fragenbearbeitungsseite';
$string['page-question-export'] = 'Jede Fragen-Exportseite';
$string['page-question-import'] = 'Jede Fragen-Importseite';
$string['page-question-x'] = 'Jede Fragenseite';
$string['parent'] = 'Übergeordnet';
$string['parentcategory'] = 'Übergeordnete Kategorie';
$string['parentcategory_help'] = 'Fragenkategorien können hierarchisch strukturiert werden. Die übergeordnete Kategorie ist die Kategorie, in die die neue Kategorie eingefügt wird. "Oben" bedeutet, dass diese Kategorie in keiner anderen Kategorie enthalten ist. Kategoriekontexte werden fett dargestellt. In jedem Kontext muss mindestens eine Kategorie vorhanden sein.';
$string['parentcategory_link'] = 'question/category';
$string['parenthesisinproperclose'] = 'Die Klammer vor ** ist nicht richtig geschlossen bei {$a}**';
$string['parenthesisinproperstart'] = 'Die Klammer vor ** ist nicht richtig geöffnet bei {$a}**';
$string['parsingquestions'] = 'Fragen aus Importdatei einlesen';
$string['partiallycorrect'] = 'Teilweise richtig';
$string['partiallycorrectfeedback'] = 'Für jede teilweise richtige Antwort';
$string['partiallycorrectfeedbackdefault'] = 'Die Antwort ist teilweise richtig.';
$string['penaltyfactor'] = 'Abzugsfaktor';
$string['penaltyfactor_help'] = 'Diese Option legt fest, welcher Anteil der erreichbaren Punktzahl für jede falsche Antwort abgezogen wird. Diese Funktion kommt nur dann zur Anwendung, wenn der Modus Mehrfachbeantwortung eingestellt ist.

Der Wert sollte zwischen 0 und 1 liegen. Der Wert 1 bedeutet, dass es nur bei einer richtigen Antwort im ersten Versuch die volle Punktzahl und danch nichts mehr gibt. Ein Wert 0 bedeutet, dass nichts abgezogen wird und bei jedem Versuch die volle Punktzahl erreicht werden kann.';
$string['penaltyforeachincorrecttry'] = 'Abzug für jeden falschen Versuch';
$string['penaltyforeachincorrecttry_help'] = 'Sofern der Test im Modus \'Mehrfachbeantwortung (mit Hinweisen)\' oder im Modus \'Mehrfachbeantwortung (mit Abzügen)\' durchgeführt wird, bei dem die Teilnehmer/innen mehrere Versuche zur Beantwortung haben, steuert diese Option die Abzüge für jeden falschen Versuch.

Der Abzug ist ein Anteil der erreichbaren Punktzahl.  Wenn die Frage z.B. drei Punkte wert ist und der Abzug 0,3333333 beträgt, würde eine richtige Antwort im ersten Versuch mit 3 Punkten gewertet, im zweiten Versuch mit 2 Punkten und im dritten Versuch nur noch mit einem Punkt.

Bei einigen mehrteiligen Fragen wird diese Bewertungslogik separat auf jeden Teil der Frage angewendet. Die Details hängen von der Art der Frage ab und können kompliziert sein, aber das Prinzip besteht darin, den Teilnehmer/innen ihr Wissen so fair wie möglich anzuerkennen.';
$string['permissionedit'] = 'Diese Frage bearbeiten';
$string['permissionmove'] = 'Diese Frage verschieben';
$string['permissionsaveasnew'] = 'Diese Frage als neue Frage speichern';
$string['permissionto'] = 'Sie haben Rechte für :';
$string['previewquestion'] = 'Vorschau Frage {$a}';
$string['privacy:metadata:database:question'] = 'Details zu einer bestimmten Frage';
$string['privacy:metadata:database:question:createdby'] = 'Person, die Testfrage erstellt hat';
$string['privacy:metadata:database:question:generalfeedback'] = 'Allgemeines Feedback für die Frage';
$string['privacy:metadata:database:question:modifiedby'] = 'Person, die Frage zuletzt aktualisiert hat';
$string['privacy:metadata:database:question:name'] = 'Name der Frage';
$string['privacy:metadata:database:question:questiontext'] = 'Fragetext';
$string['privacy:metadata:database:question:timecreated'] = 'Datum und Zeit, wann die Frage erstellt wurde';
$string['privacy:metadata:database:question:timemodified'] = 'Datum und Zeit, wann die Frage aktualisiert wurde';
$string['privacy:metadata:database:question_attempt_step_data'] = 'Die Schritte des Fragenversuchs können zusätzliche, für diesen Schritt spezifische Daten enthalten. Die Daten werden in der Tabelle „step_data“ gespeichert.';
$string['privacy:metadata:database:question_attempt_step_data:name'] = 'Name des Datenwerts';
$string['privacy:metadata:database:question_attempt_step_data:value'] = 'Wert';
$string['privacy:metadata:database:question_attempt_steps'] = 'Jeder Fragenversuch durchläuft eine Reihe von Schritten vom Beginn bis zum Abschluss und der Bewertung. Die Tabelle speichert Informationen für jeden dieser Schritte.';
$string['privacy:metadata:database:question_attempt_steps:fraction'] = 'Bewertung für diesen Fragenversuch skaliert zu 1';
$string['privacy:metadata:database:question_attempt_steps:state'] = 'Status des Fragenversuchsschritts am Ende  der Verarbeitung des Schritts';
$string['privacy:metadata:database:question_attempt_steps:timecreated'] = 'Datum und Zeitpunkt, wann die Schrittverarbeitung dieser Frage begann';
$string['privacy:metadata:database:question_attempt_steps:userid'] = 'Person, die die Schrittverarbeitung ausgeführt hat';
$string['privacy:metadata:database:question_attempts'] = 'Informationen über einen Versuch für eine bestimmte Frage';
$string['privacy:metadata:database:question_attempts:flagged'] = 'Kennzeichen, dass die Person die Frage beim Versuch markiert hat.';
$string['privacy:metadata:database:question_attempts:responsesummary'] = 'Zusammenfassung der Antworten zu einer Frage';
$string['privacy:metadata:database:question_attempts:timemodified'] = 'Zeitpunkt, zu dem Fragenversuch aktualisiert wurde';
$string['privacy:metadata:database:question_bank_entries'] = 'Details zu einem bestimmten Eintrag in der Fragensammlung.';
$string['privacy:metadata:database:question_bank_entries:ownerid'] = 'Die Person, welcher der Eintrag in der Fragensammlung gehört.';
$string['privacy:metadata:link:qbehaviour'] = 'Das Fragen-Subsystem nutzt den Plugintyp \'Frageverhalten\'.';
$string['privacy:metadata:link:qformat'] = 'Das Fragen-Subsystem nutzt den Plugintyp \'Fragenformat\', um Fragen aus unterschiedlichen Formaten zu importieren oder zu exportieren.';
$string['privacy:metadata:link:qtype'] = 'Das Fragen-Subsystem nutzt den Plugintyp \'Fragetyp\', der verschiedene Fragentypen umfasst.';
$string['published'] = 'Freigegeben';
$string['qbanknotfound'] = 'Das Fragensammlungsplugin \'{$a}\' existiert nicht oder wurde nicht erkannt.';
$string['qtypeveryshort'] = 'T';
$string['question_version'] = 'Frageversion';
$string['questionaffected'] = '<a href="{$a->qurl}">Die Frage "{$a->name}" ({$a->qtype})</a> gehört zu dieser Fragenkategorie. Sie wird aber auch im <a href="{$a->qurl}">Test "{$a->quizname}"</a> innerhalb des Kurses "{$a->coursename}" benutzt.';
$string['questionbank'] = 'Fragensammlung';
$string['questionbanknavigation'] = 'Fragensammlung tertiäre Navigation';
$string['questionbehaviouradminsetting'] = 'Einstellungen zum Frageverhalten';
$string['questionbehavioursdisabled'] = 'Frageverhalten deaktivieren';
$string['questionbehavioursdisabledexplained'] = 'Geben Sie eine kommagetrennte Liste von Verhaltensweisen ein, die nicht im Dropdown-Menü angezeigt werden sollen.';
$string['questionbehavioursorder'] = 'Frageverhalten-Reihenfolge';
$string['questionbehavioursorderexplained'] = 'Geben Sie eine kommagetrennte Liste von Verhaltensweisen in der Reihenfolge ein, in der sie im Dropdown-Menü angezeigt werden sollen.';
$string['questioncategories'] = 'Fragenkategorien';
$string['questioncategory'] = 'Fragenkategorie';
$string['questioncatsfor'] = 'Fragenkategorien für \'{$a}\'';
$string['questiondoesnotexist'] = 'Diese Frage gibt es nicht';
$string['questionformtagheader'] = '{$a} Tags';
$string['questionidmismatch'] = 'Frage-IDs können nicht zugeordnet werden';
$string['questionloaderror'] = 'Die Frageoptionen konnten nicht geladen werden.';
$string['questionname'] = 'Fragetitel';
$string['questionnameandquestionversion'] = '{$a->name} v{$a->version}';
$string['questionnamecopy'] = '{$a} (Kopie)';
$string['questionno'] = 'Frage {$a}';
$string['questionpreviewdefaults'] = 'Standardeinstellungen für die Fragenvorschau';
$string['questionpreviewdefaults_desc'] = 'Diese Standardeinstellungen werden verwendet, wenn jemand eine Frage aus der Fragensammlung erstmalig anzeigt. Sobald eine Frage angezeigt wurde, werden die persönlichen Einstellungen gespeichert.';
$string['questions'] = 'Fragen';
$string['questionsaveerror'] = 'Fehler beim Speichern der Frage aufgetreten - ({$a})';
$string['questionsinuse'] = '* Fragen, die in Verwendung sind und nicht gelöscht werden können, werden hiermit gekennzeichnet. Stattdessen werden sie in der Fragensammlung ausgeblendet, außer die Option "Verborgene Fragen anzeigen" ist gewählt.';
$string['questionsmovedto'] = 'In Gebrauch befindliche Fragen wurden nach "{$a}" in der Kategorie verschoben.';
$string['questionsrescuedfrom'] = 'Fragen aus Kontext {$a} gespeichert.';
$string['questionsrescuedfrominfo'] = 'Diese Fragen (einige mögen verborgen sein) wurden gespeichert, als der Kontext {$a} gelöscht wurde, da sie in Tests oder anderen Aktivitäten in Gebrauch sind.';
$string['questiontags'] = 'Fragen-Tags';
$string['questiontext'] = 'Fragetext';
$string['questiontype'] = 'Fragetyp';
$string['questionuse'] = 'Frage in dieser Aktivität benutzen';
$string['questionvariant'] = 'Fragevariante';
$string['questionx'] = 'Frage {$a}';
$string['requiresgrading'] = 'Bewertung notwendig';
$string['responsehistory'] = 'Antworten-Rückblick';
$string['restart'] = 'Nochmal beginnen';
$string['restartwiththeseoptions'] = 'Die Optionen speichern und neu starten';
$string['restoremultipletopcats'] = 'Die Sicherungsdatei enthält mehr als eine Hauptkategorie für Fragen im Kontext {$a}.';
$string['reviewresponse'] = 'Antworten einsehen';
$string['rightanswer'] = 'Richtige Antwort';
$string['rightanswer_help'] = 'Automatisch erzeugte Zusammenfassung der richtigen Antworten. Dies kann etwas eingeschränkt wirken, wenn Sie die richtige Lösung also lieber im Gesamtfeedback nochmal erklären möchten, schalten Sie diese Option aus.';
$string['save'] = 'Speichern';
$string['savechangesandcontinueediting'] = 'Speichern und weiter bearbeiten';
$string['saved'] = 'Gespeichert: {$a}';
$string['saveflags'] = 'Den Status der Markierungen speichern';
$string['selectacategory'] = 'Eine Kategorie wählen:';
$string['selectaqtypefordescription'] = 'Wählen Sie einen Fragetyp, um seine Beschreibung zu sehen.';
$string['selectcategoryabove'] = 'Wählen Sie oben eine Kategorie';
$string['selectquestionsforbulk'] = 'Fragen für Sammelaktion auswählen';
$string['settingsformultipletries'] = 'Mehrfachversuche';
$string['shareincontext'] = 'Im Kontext von {$a} freigeben';
$string['shortversioninfo'] = 'v{$a->version} (von {$a->latestversion})';
$string['shortversioninfolatest'] = 'v{$a->version} (neueste)';
$string['showhidden'] = 'Verborgene Fragen anzeigen';
$string['showmarkandmax'] = 'Punkte und maximale Punkte zeigen';
$string['showmaxmarkonly'] = 'Nur maximale Punkte anzeigen';
$string['shown'] = 'Anzeigen';
$string['shownumpartscorrect'] = 'Anzahl der richtigen Antworten anzeigen';
$string['shownumpartscorrectwhenfinished'] = 'Anzahl der richtigen Antworten anzeigen, sobald die Frage beendet ist';
$string['showquestiontext'] = 'Fragetext in der Frageliste anzeigen?';
$string['showquestiontext_full'] = 'Ja, mit Bildern, Medien, usw.';
$string['showquestiontext_off'] = 'Nein';
$string['showquestiontext_plain'] = 'Ja, nur Text';
$string['specificfeedback'] = 'Spezifisches Feedback';
$string['specificfeedback_help'] = 'Spezifisches Feedback, das von der Antwort der Person abhängt.';
$string['started'] = 'Begonnen';
$string['state'] = 'Status';
$string['step'] = 'Schritt';
$string['steps'] = 'Schritte';
$string['stoponerror'] = 'Bei Fehler anhalten';
$string['stoponerror_help'] = 'Die Einstellung legt fest, ob der Importprozess gestoppt werden soll, wenn ein Fehler entdeckt wird. In dem Fall wird keine Frage importiert. Andernfalls werden korrekte Fragen importiert, fehlerhafte ignoriert. ';
$string['submissionoutofsequence'] = 'Zugriff außerhalb der Reihenfolge. Bitte klicken Sie beim Bearbeiten von Quizfragen nicht auf den Zurück-Button.';
$string['submissionoutofsequencefriendlymessage'] = 'Sie haben Daten außerhalb der normalen Reihenfolge eingegeben. Dies kann passieren, wenn Sie die Zurück- oder Vorwärts-Buttons Ihres Browsers verwenden. Bitte verwenden Sie diese Buttons während des Tests nicht. Es kann auch passieren, wenn Sie während des Ladens einer Seite auf etwas klicken. Klicken Sie auf <strong>Fortfahren</strong>, um fortzufahren.';
$string['submit'] = 'Abgabe';
$string['submitandfinish'] = 'Absenden und beenden';
$string['submitted'] = 'Absenden: {$a}';
$string['tagarea_question'] = 'Fragen';
$string['technicalinfo'] = 'Technische Information';
$string['technicalinfo_help'] = 'Diese technische Information wendet sich ausschließlich an Entwickler/innen von neuen Fragetypen. Sie kann auch für die Diagnose von Problemen mit Fragen verwendet werden.';
$string['technicalinfomaxfraction'] = 'Größter Teilwert: {$a}';
$string['technicalinfominfraction'] = 'Kleinster Teilwert: {$a}';
$string['technicalinfoquestionsummary'] = 'Fragetext: {$a}';
$string['technicalinforesponsesummary'] = 'Antwortzusammenfassung: {$a}';
$string['technicalinforightsummary'] = 'Text für die richtige Antwort: {$a}';
$string['technicalinfostate'] = 'Fragestatus: {$a}';
$string['technicalinfovariant'] = 'Fragevariante: {$a}';
$string['tofilecategory'] = 'Kategorie in eine Datei schreiben';
$string['tofilecontext'] = 'Kontext in eine Datei schreiben';
$string['topfor'] = 'Oberste für {$a}';
$string['uninstallbehaviour'] = 'Frageverhalten deinstallieren';
$string['uninstallqtype'] = 'Diesen Fragetyp deinstallieren';
$string['unknown'] = 'Unbekannt';
$string['unknownbehaviour'] = 'Unbekanntes Verhalten: {$a}.';
$string['unknownorunhandledtype'] = 'Unbekannter oder nicht nutzbarer Fragetyp: {$a}';
$string['unknownquestion'] = 'Unbekannte Frage: {$a}';
$string['unknownquestioncatregory'] = 'Unbekannte Fragekategorie: {$a}';
$string['unknownquestiontype'] = 'Unbekannter Fragetyp: {$a}';
$string['unknowntolerance'] = 'Unbekannter Toleranztyp: {$a}';
$string['unpublished'] = 'Nicht freigegeben';
$string['unusedcategorydeleted'] = 'Nach dem Löschen des Kurses wurde auch diese Kategorie gelöscht, denn die Fragen wurden nirgendwo mehr eingesetzt.';
$string['updatedisplayoptions'] = 'Anzeigeoptionen aktualisieren';
$string['upgradeproblemcategoryloop'] = 'Bei der Aktualisierung der Fragenkategorien wurde ein Problem erkannt. Es wurde eine Schleife (Wiederholung) im Kategorien-Baum entdeckt. Es handelt sich hierbei um die Kategorie mit der ID {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Die Fragenkategorie {$a->name} ({$a->id}) konnte nicht aktualisiert werden.';
$string['upgradeproblemunknowncategory'] = 'Bei der Aktualisierung der Fragenkategorien wurde ein Problem erkannt. Kategorie {$a->id} bezieht sich auf die Vorgänger-Kategorie, die nicht existiert. Die Vorgänger-Kategorie wurde geändert um das Problem zu beheben.';
$string['version_selection'] = 'Version {$a->version}';
$string['versioninfo'] = 'Version {$a->version} (of {$a->latestversion})';
$string['versioninfolatest'] = 'Version {$a->version} (neueste)';
$string['whethercorrect'] = 'Ob richtig';
$string['whethercorrect_help'] = 'Dies beinhaltet sowohl die textliche Beschreibung für \'Richtig\', \'Teilweise richtig\' und \'Falsch\' wie auch alle farbigen Hervorhebungen für die Informationen.';
$string['whichtries'] = 'Welche Versuche';
$string['withselected'] = 'Mit Auswahl';
$string['wrongprefix'] = 'Falsch formatiertes Präfix-Wort';
$string['xoutofmax'] = '{$a->mark} von {$a->max}';
$string['yougotnright'] = 'Sie haben {$a->num} richtig ausgewählt.';
$string['youmustselectaqtype'] = 'Wählen Sie zunächst einen Fragetyp aus.';
$string['yourfileshoulddownload'] = 'Der Download Ihrer Exportdatei sollte in Kürze beginnen. Falls nicht, dann klicken Sie  <a href="{$a}">hier</a>.';
