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
 * Strings for component 'elang', language 'de', version '4.5'.
 *
 * @package     elang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedlanguages'] = 'Erlaubte Inhaltssprachen';
$string['allowedlanguages_desc'] = 'Die Inhaltssprachen, die beim Anlegen oder Bearbeiten eines Video-Diktats angeboten werden. Wählen Sie keine aus, um die vollständige Sprachliste anzubieten. Eine Aktivität behält ihre gespeicherte Sprache, auch wenn Sie diese hier später entfernen.';
$string['allowtranscriptdownload'] = 'Transkript-Download für Lernende';
$string['allowtranscriptdownload_help'] = 'Wenn aktiviert, können Lernende das Transkript als Arbeitsblatt — mit allen Lücken leer — als PDF-, Word-, OpenDocument- oder Textdatei herunterladen.

Standardmäßig ist das ausgeschaltet. Lehrende können das Transkript unabhängig von dieser Einstellung immer herunterladen.';
$string['allowtranscriptdownload_label'] = 'Lernende dürfen das Arbeitsblatt herunterladen';
$string['completiondetail_completionfinishattempt'] = 'Einen Versuch abschließen';
$string['completionfinishattempt'] = 'Teilnehmer/in muss einen Versuch abschließen';
$string['cuepausemode'] = 'Pausen am Untertitelende';
$string['cuepausemode_auto'] = 'Automatisch';
$string['cuepausemode_help'] = 'Ob das Medium am Ende eines Untertitels anhält.

* Automatisch — die Wiedergabe läuft durch und hält am Ende eines Untertitels nur an, solange dieser gerade bearbeitet wird, also nach einem Klick auf ihn oder eine seiner Lücken oder wenn der Tastaturfokus in einer davon steht.
* An jedem offenen Untertitel anhalten — die Wiedergabe hält am Ende jedes Untertitels an, in dem noch eine Lücke leer ist, und wartet auf das Fortsetzen.
* Nicht anhalten — die Wiedergabe läuft bis zum Ende des Mediums durch.

Keine der ersten beiden Einstellungen hält an einem Untertitel an, dessen Lücken alle ausgefüllt sind: das ist erledigte Arbeit, und dort anzuhalten verlangte einen Tastendruck für nichts. Der zweite Durchgang durch eine Übung hält damit nur noch dort, wo etwas fehlt.';
$string['cuepausemode_nostop'] = 'Nicht anhalten';
$string['cuepausemode_stop'] = 'An jedem offenen Untertitel anhalten';
$string['editcontent'] = 'Inhalt bearbeiten';
$string['editor_addcue'] = 'Untertitel hinzufügen';
$string['editor_addgap'] = 'Lücke aus Auswahl markieren';
$string['editor_addhint'] = 'Hinweis hinzufügen';
$string['editor_addvariant'] = 'Variante hinzufügen';
$string['editor_advanced'] = 'Erweiterte Einstellungen';
$string['editor_algoexact'] = 'Exakte Übereinstimmung';
$string['editor_algorithm'] = 'Antwortvergleich';
$string['editor_algowordrecognized'] = 'Ähnliche Antworten erkennen';
$string['editor_answers'] = 'Akzeptierte Varianten';
$string['editor_autosaved'] = 'Alle Änderungen gespeichert.';
$string['editor_autosaveerror'] = 'Automatisches Speichern fehlgeschlagen – zum erneuten Versuch „Speichern“ nutzen.';
$string['editor_captureend'] = 'Ende aus Wiedergabe';
$string['editor_capturestart'] = 'Start aus Wiedergabe';
$string['editor_cueactions'] = 'Aktionen für den Untertitel';
$string['editor_cuecount'] = 'Untertitel: {$a}';
$string['editor_cuenotsaved'] = 'Nicht gespeichert';
$string['editor_currentmedia'] = 'Aktuelles Medium:';
$string['editor_deletecue'] = 'Untertitel löschen';
$string['editor_deletegap'] = 'Lücke löschen';
$string['editor_emptytranscript'] = '(noch kein Text)';
$string['editor_endtime'] = 'Endzeit';
$string['editor_formatsubrip'] = 'SubRip (.srt)';
$string['editor_formatwebvtt'] = 'WebVTT (.vtt)';
$string['editor_gapcount'] = 'Lücken: {$a}';
$string['editor_gaphasalternatives'] = 'hat zulässige Varianten';
$string['editor_gaphashints'] = 'hat Hinweise';
$string['editor_gapmode_exact'] = 'genaue Übereinstimmung';
$string['editor_gapmode_wordrecognized'] = 'ähnliche Antworten zulässig';
$string['editor_gaprange'] = 'Lückenposition (Zeichen)';
$string['editor_gapunplaceable_outofrange'] = 'Diese Lücke liegt außerhalb des Textes und lässt sich nicht an ihrer Stelle zeigen.';
$string['editor_gapunplaceable_overlap'] = 'Diese Lücke überschneidet sich mit einer anderen und lässt sich nicht an ihrer Stelle zeigen.';
$string['editor_gotomedia'] = 'Zu den Medien';
$string['editor_heading'] = 'Untertitel und Lücken bearbeiten';
$string['editor_hints'] = 'Hinweise';
$string['editor_hinttext'] = 'Hinweistext';
$string['editor_hinttype'] = 'Typ';
$string['editor_hinttype_firstletter'] = 'Erster Buchstabe';
$string['editor_hinttype_partial'] = 'Teilweise';
$string['editor_hinttype_solution'] = 'Lösung';
$string['editor_hinttype_text'] = 'Freitext';
$string['editor_hinttype_translation'] = 'Übersetzung';
$string['editor_hinttype_wordlength'] = 'Wortlänge';
$string['editor_import'] = 'Untertitel importieren';
$string['editor_importappend'] = 'An vorhandene Untertitel anhängen';
$string['editor_importapply'] = 'Importieren';
$string['editor_importcancel'] = 'Abbrechen';
$string['editor_importcheck'] = 'Inhalt prüfen';
$string['editor_importchecking'] = 'Wird geprüft …';
$string['editor_importcuecount'] = 'Erkannte Untertitel';
$string['editor_importduration'] = 'Dauer';
$string['editor_importedcues'] = 'Importierte Untertitel: {$a}';
$string['editor_importfilehint'] = 'Wählen Sie eine WebVTT- (.vtt) oder SubRip-Datei (.srt) mit Untertiteln.';
$string['editor_importformat'] = 'Format';
$string['editor_importfromfile'] = 'Datei hochladen';
$string['editor_importfromtext'] = 'Text einfügen';
$string['editor_importgapcount'] = 'Erkannte Lücken';
$string['editor_importhint'] = 'WebVTT- oder SubRip-Inhalt einfügen und als Untertitel importieren.';
$string['editor_importparseerror'] = 'Dieser Inhalt konnte nicht als WebVTT oder SubRip gelesen werden.';
$string['editor_importpastedtext'] = 'Eingefügter Text';
$string['editor_importreaderror'] = 'Die Datei konnte nicht gelesen werden.';
$string['editor_importready'] = 'Bereit zum Import';
$string['editor_importreplace'] = 'Alle Untertitel ersetzen';
$string['editor_importreplacedcues'] = 'Untertitel ersetzt; neu importiert: {$a}';
$string['editor_importsource'] = 'Quelle';
$string['editor_importsummary'] = 'Gefundener Inhalt';
$string['editor_importtoolarge'] = 'Diese Datei ist {$a->size} groß; der Import nimmt höchstens {$a->max}.';
$string['editor_importwrongtype'] = 'Wählen Sie eine Untertiteldatei ({$a}).';
$string['editor_insertafter'] = 'Untertitel danach einfügen';
$string['editor_insertbefore'] = 'Untertitel davor einfügen';
$string['editor_invalidtime'] = 'Geben Sie eine Zeit als mm:ss.SSS an, zum Beispiel 01:05.400.';
$string['editor_linkurl'] = 'Link zum Nachschlagen';
$string['editor_linkurl_help'] = 'Wird neben der Lücke als Nachschlagemöglichkeit angeboten. Leer lassen für keinen.';
$string['editor_loaderror'] = 'Der Editor konnte nicht geladen werden. Bitte laden Sie die Seite neu.';
$string['editor_loading'] = 'Editor wird geladen …';
$string['editor_maxlength'] = 'Maximale Länge';
$string['editor_maxlength_help'] = 'Begrenzt, wie viel Lernende eingeben können. 0 bedeutet keine Begrenzung.';
$string['editor_media'] = 'Medium';
$string['editor_mediafile'] = 'Hochgeladene Datei';
$string['editor_mediakind'] = 'Medienart';
$string['editor_medianone'] = 'Keins';
$string['editor_mediaprovider'] = 'Anbieter';
$string['editor_mediaproviderref'] = 'Anbieter-Referenz';
$string['editor_mediaproviderrefhint'] = 'Video-ID oder Link in gängiger Form (z. B. youtu.be/…).';
$string['editor_mediasaved'] = 'Medium gespeichert.';
$string['editor_mediaurl'] = 'Direkte Medien-URL';
$string['editor_nocues'] = 'Noch keine Untertitel. Fügen Sie einen hinzu oder importieren Sie Untertitel.';
$string['editor_nocueselected'] = 'Wählen Sie einen Untertitel aus der Liste, um ihn zu bearbeiten.';
$string['editor_nocuesmatch'] = 'Kein Untertitel passt zu dieser Suche.';
$string['editor_nogaps'] = 'Keine Lücken';
$string['editor_nomedia'] = 'keins';
$string['editor_nomedianotice'] = 'Legen Sie zuerst im Reiter „Medien“ die Video- oder Audiodatei an. Die Untertitel werden zeitlich auf das Medium abgestimmt, der Editor braucht es also, bevor Sie an Untertiteln und Lücken arbeiten können.';
$string['editor_novideotrack'] = 'Dieser Browser kann die Videospur dieses Mediums nicht dekodieren (nur der Ton läuft); Lernende sähen ein schwarzes Bild. Bitte die Datei als H.264/MP4 neu kodieren (z. B. mit ffmpeg oder HandBrake) und erneut hochladen.';
$string['editor_onboardinggaps'] = 'Markieren Sie ein Wort in einem Untertitel und machen Sie eine Lücke daraus.';
$string['editor_onboardingimport'] = 'Importieren Sie WebVTT- oder SubRip-Untertitel, oder legen Sie Untertitel von Hand an.';
$string['editor_onboardingintro'] = 'Erstellen Sie eine Übung in drei Schritten:';
$string['editor_onboardingmedia'] = 'Ein Medium wählen (Upload, URL oder Anbieter).';
$string['editor_onboardingtitle'] = 'Übung beginnen';
$string['editor_onlywarnings'] = 'Nur Untertitel mit Warnungen';
$string['editor_parsegaps'] = 'Lückenmarkierungen erkennen: [Wort] erzeugt eine Lücke mit Hinweisen, {Wort} eine ohne.';
$string['editor_penalty'] = 'Abzug';
$string['editor_poster'] = 'Vorschaubild';
$string['editor_preview'] = 'Lernenden-Vorschau';
$string['editor_problem_afterduration'] = 'Die Endzeit liegt nach dem Ende des Mediums.';
$string['editor_problem_endbeforestart'] = 'Die Endzeit liegt auf oder vor der Startzeit.';
$string['editor_problem_negativestart'] = 'Die Startzeit liegt vor dem Beginn der Aufnahme.';
$string['editor_publish'] = 'Veröffentlichen';
$string['editor_publishblocked'] = 'Einige Untertitel lassen sich noch nicht speichern. Korrigieren Sie sie vor dem Veröffentlichen.';
$string['editor_published'] = 'Version veröffentlicht.';
$string['editor_removehint'] = 'Hinweis entfernen';
$string['editor_removevariant'] = 'Entfernen';
$string['editor_repaircue'] = 'Endzeit korrigieren';
$string['editor_ruleapplied'] = '%count% Lücken aus der Regel erzeugt.';
$string['editor_ruleapply'] = '%count% Lücken übernehmen';
$string['editor_ruleerror'] = 'Die Lücken konnten nicht erzeugt werden.';
$string['editor_ruleeverynth'] = 'Jedes n-te Wort';
$string['editor_rulefound'] = 'Die Regel fand %count% Lücken.';
$string['editor_rulegenerate'] = 'Lücken erzeugen';
$string['editor_ruleinterval'] = 'Intervall (n)';
$string['editor_ruletype'] = 'Lückenregel';
$string['editor_rulewordlist'] = 'Auszublendende Wörter';
$string['editor_rulewords'] = 'Wortliste';
$string['editor_save'] = 'Entwurf speichern';
$string['editor_saved'] = 'Entwurf gespeichert.';
$string['editor_savedwithproblems'] = 'Gespeichert, was sich speichern ließ; einige Untertitel brauchen Aufmerksamkeit.';
$string['editor_saveerror'] = 'Der Entwurf konnte nicht gespeichert werden.';
$string['editor_savemedia'] = 'Medium speichern';
$string['editor_saving'] = 'Wird gespeichert …';
$string['editor_searchcues'] = 'Untertitel durchsuchen';
$string['editor_selecttext'] = 'Markieren Sie zuerst im Transkript das auszublendende Wort.';
$string['editor_solution'] = 'Lösung';
$string['editor_starttime'] = 'Startzeit';
$string['editor_transcript'] = 'Transkript';
$string['editor_unsaved'] = 'Nicht gespeicherte Änderungen';
$string['editor_uploadmedia'] = 'Mediendateien hochladen';
$string['editor_variantisregex'] = '{$a} als regulären Ausdruck behandeln';
$string['editor_variantmatching'] = 'Wie die akzeptierten Varianten verglichen werden';
$string['editor_warnemptysolution'] = 'Eine Lücke hat keine Lösung';
$string['editor_warnnotranscript'] = 'Kein Text';
$string['editor_warntiming'] = 'Ende liegt nicht nach dem Start';
$string['editor_waveform'] = 'Audio-Wellenform';
$string['elang:addinstance'] = 'Neues Video-Diktat anlegen';
$string['elang:attempt'] = 'Ein Video-Diktat bearbeiten';
$string['elang:deleteattempts'] = 'Versuche von Lernenden löschen';
$string['elang:exportreports'] = 'Berichte mit personenbezogenen Daten exportieren';
$string['elang:exportsolution'] = 'Musterlösung exportieren';
$string['elang:exporttranscript'] = 'Transkript-Arbeitsblatt als Dokument exportieren';
$string['elang:manage'] = 'Übungsinhalte erstellen und bearbeiten';
$string['elang:useregex'] = 'Reguläre Ausdrücke in akzeptierten Antworten verwenden';
$string['elang:view'] = 'Ein Video-Diktat ansehen';
$string['elang:viewreports'] = 'Berichte zu Lernenden ansehen';
$string['error_attemptnotinprogress'] = 'Dieser Versuch läuft nicht mehr.';
$string['error_couldnotobtainlock'] = 'Für diesen Vorgang konnte keine Sperre erlangt werden. Bitte erneut versuchen.';
$string['error_draftrevisionmismatch'] = 'Dieser Entwurf wurde seit dem Laden verändert. Bitte neu laden und erneut versuchen.';
$string['error_duplicatecuekey'] = 'Zwei Untertitelblöcke teilen sich den Schlüssel „{$a}“; jeder Block braucht einen eindeutigen Schlüssel.';
$string['error_duplicategapkey'] = 'Zwei Lücken eines Untertitelblocks teilen sich den Schlüssel „{$a}“; jede Lücke braucht einen eindeutigen Schlüssel.';
$string['error_duplicatehintlevel'] = 'Eine Lücke hat zwei Hinweise auf Stufe {$a}; jede Hinweisstufe muss eindeutig sein.';
$string['error_gapnotinattemptversion'] = 'Diese Lücke gehört nicht zur Übungsversion dieses Versuchs.';
$string['error_importnocues'] = 'Aus diesem Inhalt ließen sich keine Untertitel lesen. Eine WebVTT- oder SubRip-Datei hat über jedem Untertitel eine Zeitzeile wie 00:00:01.000 --> 00:00:04.000.';
$string['error_importnotutf8'] = 'Diese Datei ist kein gültiges UTF-8. Sie wurde vermutlich in einer älteren Kodierung gespeichert — öffnen Sie sie in einem Texteditor und speichern Sie sie erneut als UTF-8.';
$string['error_importtoolarge'] = 'Diese Datei ist {$a->size} groß; der Import nimmt höchstens {$a->max}. Eine Untertiteldatei zu einer Unterrichtsaufnahme ist weit kleiner — dies ist vermutlich keine.';
$string['error_importtoomanycues'] = 'Diese Datei enthält {$a->count} Untertitel; der Import nimmt höchstens {$a->max}.';
$string['error_invalidcuepausemode'] = 'Wählen Sie eine der angebotenen Optionen für die Wiedergabe an Untertitelgrenzen.';
$string['error_invalidgradingalgorithm'] = 'Der Bewertungsalgorithmus \'{$a}\' ist weder exact noch wordrecognized.';
$string['error_invalidhinttype'] = 'Der Hinweistyp \'{$a}\' gehört nicht zu den erlaubten Hinweistypen.';
$string['error_invalidisregex'] = 'Der Regex-Marker einer Antwortvariante muss 0 oder 1 sein.';
$string['error_invalidmediakind'] = 'Die gewählte Medienart ist keine von file, url oder provider.';
$string['error_invalidpenalty'] = 'Ein Hinweis-Punktabzug muss zwischen 0 und 1 liegen.';
$string['error_invalidproviderref'] = '\'{$a}\' ist keine erkennbare Video-ID und kein erkennbarer Link für diesen Anbieter.';
$string['error_invalidregexpattern'] = '\'{$a}\' ist kein gültiger regulärer Ausdruck.';
$string['error_invalidsolutionavailability'] = 'Wählen Sie eine der angebotenen Optionen dafür, wann Lernende die Musterlösung sehen dürfen.';
$string['error_invalidsourceurl'] = 'Geben Sie eine vollständige Adresse mit http:// oder https:// an, oder einen YouTube- bzw. Vimeo-Link.';
$string['error_invalidsubtitleposition'] = 'Wählen Sie eine der angebotenen Optionen dafür, wo die Untertitel angezeigt werden.';
$string['error_invalidv1cuejson'] = 'Dieser Untertitel aus Version 1 konnte nicht verarbeitet werden.';
$string['error_negativegapoffset'] = 'Position und Länge einer Lücke dürfen nicht negativ sein.';
$string['error_noaccesstoattempt'] = 'Sie haben keinen Zugriff auf diesen Versuch.';
$string['error_nomorehints'] = 'Für diese Lücke gibt es keine weiteren Hinweise.';
$string['error_nopublishedversion'] = 'Für diese Übung ist noch kein Inhalt veröffentlicht.';
$string['error_responsetoolong'] = 'Ihre Antwort ist zu lang. Das Maximum für diese Lücke beträgt {$a} Zeichen.';
$string['error_solutionnotavailable'] = 'Die Musterlösung steht Ihnen in dieser Aktivität nicht zur Verfügung.';
$string['error_staleattemptstate'] = 'Ihre Ansicht dieses Versuchs ist veraltet. Bitte laden Sie den aktuellen Stand neu und versuchen Sie es erneut.';
$string['error_transcriptnotavailable'] = 'In dieser Aktivität steht Ihnen kein Transkript zum Herunterladen zur Verfügung.';
$string['error_unknowngaprule'] = 'Unbekannter Lückenregel-Typ \'{$a}\'.';
$string['error_unknownmediaprovider'] = '\'{$a}\' gehört nicht zu den unterstützten Medienanbietern.';
$string['error_versionnotadraft'] = 'Nur eine Entwurfsversion kann bearbeitet werden.';
$string['error_versionnotfound'] = 'Diese Übungsversion existiert nicht mehr.';
$string['error_versionnotpublishable'] = 'Diese Version kann nicht veröffentlicht werden: {$a}';
$string['export_audienceaftersubmission'] = 'Lernende können dies nach einem abgeschlossenen Versuch herunterladen';
$string['export_audiencealways'] = 'Lernende können dies jederzeit herunterladen';
$string['export_audiencestaff'] = 'Nur berechtigte Lehrende — für Lernende nicht verfügbar';
$string['export_docx'] = 'Als Word (DOCX) herunterladen';
$string['export_downloadpdf'] = 'PDF herunterladen';
$string['export_heading'] = 'Transkript exportieren';
$string['export_intro'] = 'Laden Sie das Transkript dieser Übung in verschiedenen Formaten herunter.';
$string['export_moreformats'] = 'Weitere Formate';
$string['export_nocontent'] = 'Es ist noch kein veröffentlichtes Transkript zum Export vorhanden.';
$string['export_odt'] = 'Als OpenDocument (ODT) herunterladen';
$string['export_pdf'] = 'Als PDF herunterladen';
$string['export_solution'] = 'Musterlösung';
$string['export_solutionhint'] = 'Das vollständige Transkript mit allen Lösungen.';
$string['export_text'] = 'Als Text herunterladen';
$string['export_versionnote'] = 'Exporte basieren auf der aktuell veröffentlichten Version dieser Übung.';
$string['export_worksheet'] = 'Arbeitsblatt (Lücken ausgeblendet)';
$string['export_worksheethint'] = 'Der Text mit ausgeblendeten Lücken. Ideal für Lernende als Arbeitsmaterial.';
$string['exporttranscript'] = 'Transkript exportieren';
$string['filearea_media'] = 'Medien';
$string['filearea_poster'] = 'Vorschaubild';
$string['gradingheading'] = 'Antwortbewertung';
$string['import_badtiming'] = 'Die Zeitangabe konnte nicht gelesen werden: {$a}';
$string['import_emptytranscript'] = 'Ein Untertitel ohne Transkripttext wurde übersprungen.';
$string['import_warnlinetoolong'] = 'Block {$a->block} wurde übersprungen: er enthält eine Zeile mit mehr als {$a->max} Zeichen, was keine Untertitelzeile ist.';
$string['jarothreshold'] = 'Ähnlichkeitsschwelle';
$string['jarothreshold_help'] = 'Für Lücken mit „Ähnliche Antworten erkennen“ legt dieser Wert die minimale Jaro-Ähnlichkeit zwischen der erwarteten und der eingegebenen Antwort fest. 1 verlangt nach der sprachspezifischen Normalisierung eine exakte Übereinstimmung; niedrigere Werte lassen zunehmend ähnliche Schreibungen gelten.';
$string['jarothresholdrange'] = 'Der Schwellwert muss zwischen 0 und 1 liegen.';
$string['language'] = 'Inhaltssprache';
$string['language_help'] = 'Wählen Sie die Sprache des Übungsinhalts. Sie steuert, wie Antworten verglichen werden, insbesondere die Behandlung von Groß- und Kleinschreibung und die Transliteration. Wählen Sie „Generisch (nicht angegeben)“, wenn keine sprachspezifische Verarbeitung verwendet werden soll. Neue Inhaltsversionen übernehmen diese Einstellung.';
$string['language_none'] = 'Generisch (nicht angegeben)';
$string['media_cuenote'] = 'Vorhandene Untertitel und Lücken bleiben beim Wechsel des Mediums erhalten. Ihre Zeiten werden nicht angepasst — prüfen Sie sie danach im Editor.';
$string['media_current'] = 'Aktuell eingestelltes Medium';
$string['media_heading'] = 'Medien';
$string['media_intro'] = 'Wählen Sie das Video oder Audio, auf dem diese Übung aufbaut. Die Untertitel werden zeitlich damit synchronisiert, deshalb steht dies am Anfang.';
$string['media_none'] = 'Für diese Übung ist noch kein Medium eingestellt.';
$string['media_othersource'] = 'Andere Quelle';
$string['media_providerhint'] = 'Erkannte Anbieter: {$a}. Jede andere Adresse wird als direkte Medien-URL verwendet.';
$string['media_sourceurl'] = 'Medien-URL';
$string['media_sourceurl_help'] = 'Fügen Sie die Adresse eines Videos ein, statt eine Datei hochzuladen — einen YouTube- oder Vimeo-Link oder die direkte Adresse einer Mediendatei.

Eine hier eingetragene Adresse ersetzt eine hochgeladene Datei. Lassen Sie das Feld leer, um den Upload oben zu verwenden.

Ein Anbietervideo wird im eingebetteten Player des Anbieters abgespielt, der seine Wiedergabezeit nicht meldet. Eine solche Übung zeigt die Untertitel immer unter dem Medium und hält nie an Untertitelgrenzen an.

**Wohin die Daten gehen.** Ein eingebetteter YouTube- oder Vimeo-Player verbindet den Browser jeder lernenden Person mit diesem Unternehmen, das dabei IP-Adresse und Geräteangaben erhält. Standardmäßig fragt die Übung vorher nach. Wenn Ihre Einrichtung einen eigenen Medienserver betreibt — Opencast, Panopto, Kaltura oder ähnlich —, fügen Sie stattdessen die direkte Adresse der Datei von dort ein: sie gilt als gewöhnliche Medien-URL, behält die von Ihnen gewählte Untertitelposition und Pauseneinstellung, und es ist kein Dritter beteiligt.';
$string['migratev1_approvalheading'] = 'Migriert, wartet auf Prüfung';
$string['migratev1_approvebutton'] = 'Diese Migration freigeben';
$string['migratev1_approved'] = 'Video-Diktat {$a} wurde freigegeben.';
$string['migratev1_colactivity'] = 'Aktivität';
$string['migratev1_colalgorithm'] = 'Bewertungsalgorithmus';
$string['migratev1_colcues'] = 'Untertitel';
$string['migratev1_colgaps'] = 'Lücken';
$string['migratev1_colissues'] = 'Befunde';
$string['migratev1_collearners'] = 'Lernende';
$string['migratev1_confirmdecommission'] = 'Dies entfernt UNUMKEHRBAR die Alttabellen aus Version 1 und elang.options. Es gibt kein Zurück. Fortfahren?';
$string['migratev1_confirmmigrate'] = 'Dies reiht einen Hintergrund-Task ein, der für jede oben aufgeführte Aktivität neue Version-2-Daten schreibt. Die Version-1-Tabellen und elang.options bleiben unangetastet. Fortfahren?';
$string['migratev1_decommissionblocked'] = 'Das Entfernen ist weiterhin blockiert; siehe die Liste unten.';
$string['migratev1_decommissionblockedintro'] = 'Das Entfernen ist noch blockiert, bis:';
$string['migratev1_decommissionbutton'] = 'Altdaten aus Version 1 entfernen';
$string['migratev1_decommissioned'] = 'Altdaten aus Version 1 wurden entfernt.';
$string['migratev1_decommissionheading'] = 'Altdaten aus Version 1 entfernen';
$string['migratev1_decommissionready'] = 'Jede Version-1-Aktivität wurde migriert und freigegeben. Die Alttabellen aus Version 1 und elang.options können jetzt entfernt werden. Das ist unumkehrbar.';
$string['migratev1_heading'] = 'Version-1-Aktivitäten migrieren';
$string['migratev1_migratebutton'] = 'Diese Aktivitäten migrieren';
$string['migratev1_noissues'] = 'Keine';
$string['migratev1_nonepending'] = 'Es warten keine Version-1-Aktivitäten auf Migration.';
$string['migratev1_nonependingapproval'] = 'Es warten keine migrierten Aktivitäten auf Prüfung.';
$string['migratev1_notablespresent'] = 'Auf dieser Seite wurden keine Alttabellen aus Version 1 gefunden. Es gibt nichts zu migrieren.';
$string['migratev1_parseerrorcount'] = 'Nicht lesbare Untertitel: {$a}';
$string['migratev1_pendingheading'] = 'Noch nicht migriert';
$string['migratev1_queued'] = 'Der Migrations-Task wurde eingereiht. Er läuft beim nächsten Cron-Durchlauf oder sofort über admin/cli/adhoc_task.php --execute.';
$string['migratev1_verifiedclean'] = 'Verifiziert: Die migrierten Daten stimmen ohne Abweichungen mit der Version-1-Quelle überein.';
$string['migratev1_verifieddiscrepancies'] = 'Die Prüfung fand Abweichungen gegenüber der Quelle aus Version 1: {$a}';
$string['migratev1_verifyfailed'] = 'Diese Aktivität konnte nicht verifiziert werden: {$a}';
$string['modulename'] = 'Video-Diktat';
$string['modulename_help'] = 'Die Aktivität Video-Diktat lässt Lernende Lücken in zeitcodierten Untertiteln ausfüllen, während sie ein Video ansehen oder anhören.

Lehrende importieren eine WebVTT- oder SubRip-Datei, markieren Wörter oder Wendungen als Lücken und legen fest, wie streng Antworten verglichen werden. Lernende arbeiten das Transkript Segment für Segment durch, können abgestufte Hinweise anfordern und erhalten unmittelbare Rückmeldung.';
$string['modulenameplural'] = 'Video-Diktate';
$string['nav_exportshort'] = 'Export';
$string['nav_media'] = 'Medien';
$string['nav_reports'] = 'Versuche';
$string['nav_subtitles'] = 'Untertitel und Lücken';
$string['noinstances'] = 'In diesem Kurs gibt es keine Video-Diktate.';
$string['overview_attempts'] = 'Versuche';
$string['playbackheading'] = 'Wiedergabe und Untertitel';
$string['playbackoverlayhint'] = 'Eine Einblendung auf dem Bild zeigt nur den gerade laufenden Untertitel. Die Wiedergabe hält deshalb immer am Ende eines Untertitels an, in dem noch Lücken offen sind — hier gibt es nichts zu wählen.';
$string['playbackproviderhint'] = 'Ein YouTube- oder Vimeo-Video wird vom Anbieter im eingebetteten Player des Anbieters abgespielt, der seine Wiedergabezeit nicht meldet. Eine solche Übung zeigt die Untertitel immer unter dem Medium und hält nie an Untertitelgrenzen an, unabhängig von der Auswahl oben. Hochgeladene Dateien und direkte Medien-URLs berücksichtigen beide Einstellungen.';
$string['player_check'] = 'Antwort prüfen';
$string['player_consentaccept'] = 'Video von {$a} laden';
$string['player_consentdetail'] = 'Beim Abspielen verbindet sich Ihr Browser mit {$a}. {$a} erhält dabei Ihre IP-Adresse und Angaben zu Ihrem Gerät und kann bereits gesetzte Cookies auslesen. Vorher wird nichts übertragen.';
$string['player_consentheading'] = 'Dieses Video stammt von {$a}';
$string['player_exitfullscreen'] = 'Vollbild verlassen';
$string['player_finish'] = 'Versuch abschließen';
$string['player_finished'] = 'Versuch abgeschlossen. Ergebnis: %score%%';
$string['player_finishincomplete'] = 'Noch leere Lücken: {$a}. Versuch trotzdem abschließen?';
$string['player_fullscreen'] = 'Vollbild';
$string['player_gaplabel'] = 'Lücke %gap%';
$string['player_gaplink'] = 'Link öffnen';
$string['player_hint'] = 'Hinweis anzeigen';
$string['player_loaderror'] = 'Die Übung konnte nicht geladen werden. Bitte laden Sie die Seite neu.';
$string['player_loading'] = 'Übung wird geladen …';
$string['player_nocontent'] = 'Es wurden noch keine Übungsinhalte veröffentlicht. Bitte später erneut vorbeischauen.';
$string['player_novideotrack'] = 'Ihr Browser kann die Videospur dieses Mediums nicht anzeigen; der Ton läuft weiter. Bitte informieren Sie Ihre Lehrkraft.';
$string['player_outdatedattempt'] = 'Diese Übung wurde aktualisiert, seit dieser Versuch begonnen wurde. Sie arbeiten auf dem früheren Stand weiter; schließen Sie den Versuch ab, um beim nächsten Mal die aktualisierte Übung zu nutzen.';
$string['player_progress'] = '{$a->done} von {$a->total} Lücken beantwortet';
$string['player_ready'] = 'Übung bereit.';
$string['player_scorelabel'] = 'Ergebnis: %score%%';
$string['player_stateaccepted'] = 'Akzeptiert';
$string['player_statecorrect'] = 'Richtig';
$string['player_statehinted'] = 'Hinweis benutzt';
$string['player_stateincorrect'] = 'Falsch';
$string['player_submitfailed'] = 'Ihre Antwort konnte nicht gespeichert werden. Bitte versuchen Sie es erneut.';
$string['player_transcriptheading'] = 'Transkript';
$string['pluginadministration'] = 'Video-Diktat-Administration';
$string['pluginname'] = 'Video-Diktat';
$string['privacy_metadata_elang'] = 'Zu jeder Aktivität wird festgehalten, wer die einmalige Migration der 1.x-Inhalte freigegeben hat.';
$string['privacy_metadata_elang_attempt'] = 'Für jeden Versuch an einer Übung speichert die Aktivität, wer ihn unternommen hat, wann, wie weit er kam und wie er bewertet wurde.';
$string['privacy_metadata_elang_attempt_answeredgaps'] = 'Wie viele Lücken die lernende Person in diesem Versuch beantwortet hat.';
$string['privacy_metadata_elang_attempt_attemptnumber'] = 'Die laufende Nummer dieses Versuchs für die Person und die Aktivität.';
$string['privacy_metadata_elang_attempt_correctgaps'] = 'Wie viele Lücken in diesem Versuch als richtig akzeptiert wurden.';
$string['privacy_metadata_elang_attempt_exactgaps'] = 'Wie viele Lücken in diesem Versuch exakt beantwortet wurden.';
$string['privacy_metadata_elang_attempt_hintedgaps'] = 'Für wie viele Lücken die lernende Person in diesem Versuch einen Hinweis angefordert hat.';
$string['privacy_metadata_elang_attempt_score'] = 'Die in diesem Versuch erreichte Punktzahl.';
$string['privacy_metadata_elang_attempt_state'] = 'Ob der Versuch läuft, abgeschlossen oder abgebrochen ist.';
$string['privacy_metadata_elang_attempt_timefinish'] = 'Der Zeitpunkt, zu dem der Versuch abgeschlossen wurde.';
$string['privacy_metadata_elang_attempt_timemodified'] = 'Der Zeitpunkt der letzten Aktualisierung des Versuchs.';
$string['privacy_metadata_elang_attempt_timestart'] = 'Der Zeitpunkt, zu dem der Versuch begonnen wurde.';
$string['privacy_metadata_elang_attempt_totalgaps'] = 'Die Gesamtzahl der Lücken in der Übungsversion dieses Versuchs.';
$string['privacy_metadata_elang_attempt_userid'] = 'Die ID der Person, die den Versuch unternommen hat.';
$string['privacy_metadata_elang_attempt_versionid'] = 'Die Übungsversion, gegen die dieser Versuch unternommen wurde.';
$string['privacy_metadata_elang_migrationapproveduserid'] = 'Die Person, die die Migration dieser Aktivität aus mod_elang 1.x freigegeben hat. Wird gespeichert, damit die Freigabe nachvollziehbar bleibt.';
$string['privacy_metadata_elang_response'] = 'Für jede Lücke, die eine lernende Person innerhalb eines Versuchs beantwortet, speichert die Aktivität den Antworttext und dessen Bewertung.';
$string['privacy_metadata_elang_response_accepted'] = 'Ob die Antwort für diese Lücke als richtig akzeptiert wurde.';
$string['privacy_metadata_elang_response_hintlevel'] = 'Die höchste Hinweisstufe, die der lernenden Person für diese Lücke gezeigt wurde.';
$string['privacy_metadata_elang_response_responsetext'] = 'Der von der lernenden Person für diese Lücke eingegebene Text.';
$string['privacy_metadata_elang_response_resultstate'] = 'Die vom Evaluator ermittelte Einstufung dieser Antwort (exakt, erkannt, falsch oder leer).';
$string['privacy_metadata_elang_response_score'] = 'Die von dieser Antwort beigetragenen Punkte, nach Abzügen für verwendete Hinweise.';
$string['privacy_metadata_elang_response_timecreated'] = 'Der Zeitpunkt, zu dem diese Antwort erstmals abgegeben wurde.';
$string['privacy_metadata_elang_response_timemodified'] = 'Der Zeitpunkt der letzten Aktualisierung dieser Antwort.';
$string['privacy_metadata_elang_response_tries'] = 'Wie oft die lernende Person eine Antwort auf diese Lücke abgegeben hat.';
$string['privacy_metadata_elang_version'] = 'Für jede Inhaltsversion speichert die Aktivität, welche Person sie zuletzt geändert hat.';
$string['privacy_metadata_elang_version_usermodified'] = 'Die Person, die diese Inhaltsversion zuletzt geändert hat. Gespeichert, um nachvollziehen zu können, wer den Übungsinhalt bearbeitet hat.';
$string['privacy_provider_externallink'] = 'Beruht eine Übung auf einem YouTube- oder Vimeo-Video, verbindet sich der Browser der lernenden Person beim Öffnen mit diesem Anbieter. Das Plugin selbst überträgt nichts, die Verbindung geht aber von der Aktivität aus. Ob sie überhaupt zustande kommt, hängt an der Site-Einstellung zur Anbieter-Einwilligung und an der Zustimmung der lernenden Person.';
$string['privacy_provider_ipaddress'] = 'Die IP-Adresse, von der aus sich der Browser verbindet.';
$string['privacy_provider_useragent'] = 'Die Browser- und Geräteangaben, die der Browser sendet.';
$string['provider_vimeo'] = 'Vimeo';
$string['provider_youtube'] = 'YouTube';
$string['providerconsent'] = 'Vor dem Einbetten von YouTube oder Vimeo fragen';
$string['providerconsent_desc'] = 'Übungen, die auf einem YouTube- oder Vimeo-Video beruhen, zeigen statt des Videos einen Hinweis und binden es erst nach Zustimmung der lernenden Person ein. Ohne das erhält der Anbieter IP-Adresse und Browserdaten der lernenden Person, sobald die Seite geöffnet wird — bevor jemand auf Wiedergabe drückt. Nur deaktivieren, wenn Ihre Einrichtung diese Einwilligung an anderer Stelle einholt.';
$string['report_actions'] = 'Aktionen';
$string['report_answered'] = 'Beantwortet';
$string['report_attemptnumber'] = 'Versuch';
$string['report_back'] = 'Zurück zu allen Versuchen';
$string['report_correct'] = 'Richtig';
$string['report_delete'] = 'Löschen';
$string['report_deleteconfirm'] = 'Diesen Versuch und alle zugehörigen Antworten endgültig löschen? Das kann nicht rückgängig gemacht werden.';
$string['report_deleted'] = 'Der Versuch wurde gelöscht.';
$string['report_exact'] = 'Exakt';
$string['report_export'] = 'Exportieren';
$string['report_filterany'] = 'Alle';
$string['report_filterapply'] = 'Filter anwenden';
$string['report_filterattempt'] = 'Versuchsnummer';
$string['report_filterfrom'] = 'Begonnen ab';
$string['report_filterrangeerror'] = 'Das Ende des Zeitraums liegt vor seinem Anfang.';
$string['report_filterreset'] = 'Filter zurücksetzen';
$string['report_filterstate'] = 'Status';
$string['report_filterto'] = 'Begonnen bis';
$string['report_filteruser'] = 'Teilnehmer/in';
$string['report_finished'] = 'Abgeschlossen';
$string['report_heading'] = 'Versuche';
$string['report_hinted'] = 'Mit Hinweis';
$string['report_hints'] = 'Hinweisstufe';
$string['report_kpianswered'] = 'Beantwortet';
$string['report_kpiattempts'] = 'Angezeigte Versuche';
$string['report_kpiaverage'] = 'Durchschnitt (abgeschlossen)';
$string['report_kpicorrect'] = 'Akzeptiert';
$string['report_kpiexact'] = 'Exakt richtig';
$string['report_kpifinished'] = 'Abgeschlossen';
$string['report_kpihinted'] = 'Mit Hinweis';
$string['report_kpihintedgaps'] = 'Mit Hinweis';
$string['report_noattempts'] = 'Noch keine Versuche.';
$string['report_nogaps'] = 'Die Version, auf der dieser Versuch beruht, enthält keine Lücken.';
$string['report_nomatchingattempts'] = 'Kein Versuch passt zu diesen Filtern.';
$string['report_noresponse'] = 'Nicht beantwortet';
$string['report_response'] = 'Antwort';
$string['report_result'] = 'Ergebnis';
$string['report_result_empty'] = 'Leer';
$string['report_result_exact'] = 'Exakt';
$string['report_result_incorrect'] = 'Falsch';
$string['report_result_none'] = '—';
$string['report_result_wordrecognized'] = 'Erkannt';
$string['report_score'] = 'Ergebnis';
$string['report_solution'] = 'Lösung';
$string['report_started'] = 'Begonnen';
$string['report_state'] = 'Status';
$string['report_state_abandoned'] = 'Abgebrochen';
$string['report_state_finished'] = 'Abgeschlossen';
$string['report_state_inprogress'] = 'Läuft';
$string['report_transcript'] = 'Transkript';
$string['report_tries'] = 'Antwortversuche';
$string['report_user'] = 'Teilnehmer/in';
$string['report_view'] = 'Ansehen';
$string['reports'] = 'Berichte';
$string['resetattempts'] = 'Alle Versuche und Antworten der Lernenden löschen';
$string['solutionavailability'] = 'Musterlösung für Lernende';
$string['solutionavailability_aftersubmission'] = 'Nach Abgabe';
$string['solutionavailability_always'] = 'Jederzeit';
$string['solutionavailability_help'] = 'Wann Lernende das vollständige Transkript mit allen Lückenlösungen herunterladen dürfen.

* Keine Musterlösung — nur Lehrende können sie herunterladen.
* Nach Abgabe — Lernende dürfen sie herunterladen, sobald sie einen Versuch in dieser Aktivität abgeschlossen haben.
* Jederzeit — Lernende dürfen sie auch schon vor dem Bearbeiten herunterladen.

Lehrende können sie unabhängig von dieser Einstellung immer herunterladen.';
$string['solutionavailability_never'] = 'Keine Musterlösung';
$string['subplugintype_elangscript'] = 'Schrift-Handler';
$string['subplugintype_elangscript_plural'] = 'Schrift-Handler';
$string['subtitleposition'] = 'Darstellung der Untertitel';
$string['subtitleposition_below'] = 'Unter dem Medium';
$string['subtitleposition_help'] = 'Wo die interaktiven Untertitel angezeigt werden.

* Unter dem Medium — das gesamte Transkript steht unter dem Medium in einem eigenen Scrollbereich und folgt der Wiedergabe.
* Im Video — unten / oben — nur der gerade laufende Untertitel wird über dem Medium angezeigt.

Ein reines Audiomedium hat kein Bild, auf dem etwas liegen könnte, und verwendet deshalb immer die Darstellung unter dem Medium. Die Einstellung bleibt erhalten und greift wieder, sobald die Aktivität ein Video verwendet.';
$string['subtitleposition_overlaybottom'] = 'Im Video — unten';
$string['subtitleposition_overlaytop'] = 'Im Video — oben';
$string['task_migratev1activities'] = 'Version-1-Aktivitäten migrieren';
$string['transcriptheading'] = 'Transkript für Lernende';
$string['validate_cueafterend'] = '{$a->where}: endet bei {$a->endtime} ms, nach dem Medium ({$a->duration} ms). Die Wiedergabe erreicht ihn nie.';
$string['validate_cueendbeforestart'] = '{$a}: das Ende liegt nicht nach dem Start.';
$string['validate_cuewhere'] = 'Untertitel {$a->sortorder} ({$a->cuekey})';
$string['validate_emptysolution'] = 'Die Lösung für {$a} ist leer.';
$string['validate_hintlevels'] = 'Die Hinweisstufen für {$a} bilden keine lückenlose Folge ab 1.';
$string['validate_negativetime'] = '{$a}: die Startzeit liegt vor dem Beginn der Aufnahme.';
$string['validate_nocues'] = 'Die Version enthält keine Untertitelblöcke.';
$string['validate_nogaps'] = 'Die Version enthält keine zu beantwortenden Lücken.';
$string['validate_nonpositivelength'] = 'Die Zeichenlänge von {$a} muss positiv sein.';
$string['validate_rangeoutside'] = 'Der Zeichenbereich von {$a} liegt außerhalb des Transkripts.';
$string['validate_rangeoverlap'] = 'Der Zeichenbereich von {$a} überlappt eine andere Lücke.';
$string['validate_unknownalgorithm'] = 'Der Bewertungsalgorithmus „{$a->algorithm}“ für {$a->where} ist unbekannt.';
$string['validate_where'] = 'Lücke {$a->gapkey} in Block {$a->cuekey}';
$string['verify_algorithmmismatch'] = 'Lücke {$a->gapkey}: Bewertungsalgorithmus ist „{$a->actual}“, erwartet „{$a->expected}“.';
$string['verify_attemptcount'] = 'Die Anzahl migrierter Versuche ist {$a->actual}, erwartet {$a->expected} verschiedene 1.x-Lernende.';
$string['verify_jarothreshold'] = 'Der Schwellenwert für den Antwortvergleich ist {$a->actual}, erwartet {$a->expected}.';
$string['verify_missingattempt'] = 'Nutzer/in {$a}: ein migrierter Versuch wurde erwartet, aber keiner gefunden.';
$string['verify_missingcue'] = 'Block {$a}: der migrierte Untertitelblock fehlt.';
$string['verify_missinggap'] = 'Lücke {$a}: die migrierte Lücke fehlt.';
$string['verify_missinghint'] = 'Lücke {$a}: Version 1 erlaubte hier einen Hinweis, es wurde aber keiner migriert.';
$string['verify_orphancue'] = 'Block {$a}: kein zugehöriger Block aus Version 1 gefunden.';
$string['verify_orphangap'] = 'Lücke {$a}: keine zugehörige Lücke aus Version 1 gefunden.';
$string['verify_rangemismatch'] = 'Lücke {$a}: der Zeichenbereich stimmt nicht mit der Quelle aus Version 1 überein.';
$string['verify_responsecount'] = 'Nutzer/in {$a->userid}: die Anzahl migrierter Antworten ist {$a->actual}, erwartet {$a->expected}.';
$string['verify_solutionmismatch'] = 'Lücke {$a->gapkey}: die Lösung ist „{$a->actual}“, erwartet „{$a->expected}“.';
$string['verify_transcriptmismatch'] = 'Block {$a}: das Transkript stimmt nicht mit der Quelle aus Version 1 überein.';
$string['verify_unexpectedhint'] = 'Lücke {$a}: Version 1 erlaubte hier keinen Hinweis, es wurde aber einer migriert.';
