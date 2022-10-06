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
 * Strings for component 'scorm', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Aktivierung';
$string['activityloading'] = 'Sie werden automatisch zur Aktivität weitergeleitet:';
$string['activityoverview'] = 'Lernpakete erfordern Ihre Aufmerksamkeit.';
$string['activitypleasewait'] = 'Aktivität wird geladen. Bitte warten ....';
$string['adminsettings'] = 'Admin-Einstellungen';
$string['advanced'] = 'Einstellungen';
$string['aicchacpkeepsessiondata'] = 'AICC HACP Sessiondaten';
$string['aicchacpkeepsessiondata_desc'] = 'Speicherdauer in Tagen für externe AICC HACP Sessiondaten (ein hoher Wert speichert viele Daten in der Datenbanktabelle, kann jedoch zum debuggen hilfreich sein.';
$string['aicchacptimeout'] = 'AICC HACP Timeout';
$string['aicchacptimeout_desc'] = 'Länge in Minuten, die eine externe AICC HACP Session offen bleiben darf';
$string['aiccuserid'] = 'Nutzer-ID für AICC verwenden';
$string['aiccuserid_desc'] = 'Der AICC-Standard für Nutzernamen ist sehr restriktiv und erlaubt ausschließlich alphanumerische Zeichen und die Sonderzeichen Bindestrich und Unterstrich. Punkte, Leerzeichen und das Symbol @ sind nicht zugelassen.
Wenn diese Option aktiviert ist, werden die Nutzer-ID-Nummern an das AICC-Lernpaket übergeben und nicht die Anmeldenamen.';
$string['aliasonly'] = 'Wenn eine imsmanifest.xml-Datei aus einem Repository ausgewählt wird, muss für diese Datei ein Alias/Shortcut verwendet werden.';
$string['allowapidebug'] = 'API debug und tracing aktivieren (Capture Maske mit apidebumask einrichten)';
$string['allowtypeaicchacp'] = 'Externe AICC HACP aktivieren';
$string['allowtypeaicchacp_desc'] = 'Die Aktivierung ermöglicht AICC HACP die externe Kommunikation ohne ein Nutzerlogin zu benötigen, um Anfragen des externen AICC Pakets zu verarbeiten.';
$string['allowtypeexternal'] = 'Externen Pakettyp aktivieren';
$string['allowtypeexternalaicc'] = 'Direkte AICC URL aktivieren';
$string['allowtypeexternalaicc_desc'] = 'Ermöglicht den direkten Aufruf über eine URL auf ein einfaches AICC Paket.';
$string['allowtypelocalsync'] = 'Download Pakettyp aktivieren';
$string['apidebugmask'] = 'API Debug Capture Mask (simple regex on <username>:<activityname>) z.B. admin:* zeigt die Debugmitteilungen nur für den Nutzer admin';
$string['areacontent'] = 'Inhaltsdateien';
$string['areapackage'] = 'Paketdatei';
$string['asset'] = 'Anlage';
$string['assetlaunched'] = 'Anlage gesehen';
$string['attempt'] = 'Versuch';
$string['attempt1'] = '1 Versuch';
$string['attempts'] = 'Versuche';
$string['attemptsmanagement'] = 'Versuchsmanagement';
$string['attemptstatusall'] = 'Dashboard und Anfangsseite';
$string['attemptstatusentry'] = 'Nur Eingangsseite';
$string['attemptstatusmy'] = 'Nur Dashboard';
$string['attemptsx'] = '{$a} Versuche';
$string['attr_error'] = 'Falscher Wert für das Attribut ({$a->attr}) im Tag {$a->tag}';
$string['autocommit'] = 'Automatisch übernehmen';
$string['autocommitdesc'] = 'SCORM-Daten automatisch sichern, wenn sie nicht vom Lernpaket gesichert werden.';
$string['autocommit_help'] = 'Die Option legt fest, ob SCORM-Daten automatisch in der Datenbank gesichert werden. Dies ist hilfreich für SCORM-Objekte, die ihre Daten nicht regelmäßig sichern.';
$string['autocontinue'] = 'Automatische Fortsetzung';
$string['autocontinuedesc'] = 'Diese Einstellung setzt für diese Aktivität die automatische Fortsetzung.';
$string['autocontinue_help'] = 'Wenn die Option aktiviert ist, wird nach dem Bearbeiten eines Lernobjekts automatisch das nächste verfügbare Lernobjekt aufgerufen. Andernfalls muss eine Taste \'Weiter\' benutzt werden.';
$string['averageattempt'] = 'Durchschnitt';
$string['badarchive'] = 'Sie müssen eine gültige ZIP-Datei bereitstellen';
$string['badimsmanifestlocation'] = 'Eine Datei imsmanifest.xml wurde gefunden. Sie liegt jedoch nicht im Root-Verzeichnis der ZIP-Datei. Packen Sie das SCORM-Paket neu zusammen.';
$string['badmanifest'] = 'Einige Fehler im Manifest gefunden: siehe Fehlerprotokoll';
$string['browse'] = 'Vorschau';
$string['browsed'] = 'Durchsucht';
$string['browsemode'] = 'Vorschaumodus';
$string['browserepository'] = 'Repository durchsuchen';
$string['calculatedweight'] = 'Berechnete Gewichtung';
$string['calendarend'] = '\'{$a}\' endet.';
$string['calendarstart'] = '{$a} beginnt';
$string['cannotaccess'] = 'Dieses Skript kann so nicht aufgerufen werden.';
$string['cannotfindsco'] = 'SCO konnte nicht gefunden werden';
$string['chooseapacket'] = 'Auswählen/aktualisieren eines Pakets';
$string['closebeforeopen'] = 'Sie haben ein Enddatum festgelegt, das vor dem Startdatum liegt.';
$string['collapsetocwinsize'] = 'Inhaltsverzeichnis einklappen wenn Fenstergröße kleiner ist';
$string['collapsetocwinsizedesc'] = 'Die Einstellung ermöglicht Ihnen festzulegen, dass das Inhaltsverzeichnis automatisch eingeklappt wird wenn die Fenstergröße kleiner ist als der eingetragene Wert.';
$string['compatibilitysettings'] = 'Kompatibilität';
$string['completed'] = 'Abgeschlossen';
$string['completionscorerequired'] = 'Mindestpunkte notwendig';
$string['completionscorerequireddesc'] = 'Die Mindestpunktzahl {$a} ist zum Abschluss erforderlich.';
$string['completionscorerequired_help'] = 'Wenn diese Option aktiviert ist, müssen Teilnehmer/innen neben anderen Anforderungen auch die angegebene Mindestpunkte erreichen, um dieses Lernpaket als \'abgeschlossen\' markieren zu können.';
$string['completionstatusallscos'] = 'Alle Scos sind erforderlich, um den Abschlussstatus zurückzugeben';
$string['completionstatusallscos_help'] = 'Einige SCORM Pakete enthalten mehrere Komponenten oder "scos" - bei Aktivierung müssen alle scos innerhalb des Pakets den entsprechenden lesson_status für diese Aktivität zurücksenden um als abgeschlossen markiert zu werden.';
$string['completionstatus_completed'] = 'Erledigt';
$string['completionstatus_passed'] = 'Durchlaufen';
$string['completionstatusrequired'] = 'Status erforderlich';
$string['completionstatusrequireddesc'] = 'Teilnehmer/in muss mindestens einen der folgenden Status erreichen: {$a}';
$string['completionstatusrequired_help'] = 'Wenn Sie einen oder mehrere Punkte anwählen, müssen Teilnehmer/innen neben anderen Anforderungen auch mindestens einen dieser Punkte erledigen, um dieses Lernpaket als \'abgeschlossen\' markieren zu können.';
$string['confirmloosetracks'] = 'Warnung: Das Lernpaket scheint verändert worden zu sein. Evtl. ist die Paketstruktur geändert worden. Beim Update könnten Protokolldaten der Nutzer/innen verloren gehen.';
$string['contents'] = 'Inhalte';
$string['coursepacket'] = 'Lernpaket';
$string['coursestruct'] = 'Kursstruktur';
$string['crontask'] = 'Hintergrundprozess für Lernpakete';
$string['currentwindow'] = 'Aktuelles Fenster';
$string['datadir'] = 'Dateisystemfehler: Das Verzeichnis für Kursdaten konnte nicht erstellt werden';
$string['defaultdisplaysettings'] = 'Standard-Anzeigeeinstellungen';
$string['defaultgradesettings'] = 'Standard-Bewertungseinstellungen';
$string['defaultothersettings'] = 'Weitere Standardeinstellungen';
$string['deleteallattempts'] = 'Alle Versuche im Lernpaket löschen';
$string['deleteattemptcheck'] = 'Sind Sie wirklich sicher, dass Sie diese Versuche vollständig löschen möchten?';
$string['deleteselected'] = 'Ausgewählte Versuche löschen';
$string['deleteuserattemptcheck'] = 'Sind Sie sich wirklich sicher, dass alle Versuche gelöscht werden sollen?';
$string['details'] = 'Trackingdetails';
$string['directories'] = 'Verzeichnislinks anzeigen';
$string['disabled'] = 'Deaktiviert';
$string['display'] = 'Lernpaket anzeigen';
$string['displayactivityname'] = 'Aktivitätsname anzeigen';
$string['displayactivityname_help'] = 'Anzeige des Aktivitätsnamens über der Anzeige des Lernpakets';
$string['displayattemptstatus'] = 'Status der Versuche anzeigen';
$string['displayattemptstatusdesc'] = 'Die Option legt fest, ob eine Zusammenfassung der Nutzerversuche in der Kursübersicht im Dashboard und/oder der Anfangsseite des Lernpakets angezeigt werden soll.';
$string['displayattemptstatus_help'] = 'Diese Option legt fest, ob eine Zusammenfassung der Nutzerversuche in der Kursübersicht im Dashboard und/oder auf der Anfangsseite des Lernpakets angezeigt wird.';
$string['displaycoursestructure'] = 'Kursstruktur auf Einstiegsseite anzeigen';
$string['displaycoursestructuredesc'] = 'Wenn diese Option aktiviert ist, wir die Inhaltsstruktur auf der Einstiegsseite angezeigt.';
$string['displaycoursestructure_help'] = 'Wenn diese Option aktiviert ist, wird die Inhaltsstruktur des Lernpakets auf der Einstiegsseite angezeigt.';
$string['displaydesc'] = 'Ob das Lernpaket in einem neuen Fenster gezeigt werden soll.';
$string['displaysettings'] = 'Anzeigeeinstellungen';
$string['dnduploadscorm'] = 'Lernpaket hinzufügen';
$string['domxml'] = 'DOMXML externe Bibliothek';
$string['duedate'] = 'Fälligkeitsdatum';
$string['element'] = 'Element';
$string['enter'] = 'Start';
$string['entercourse'] = 'Lernpaket starten';
$string['errorlogs'] = 'Fehlerprotokoll';
$string['eventattemptdeleted'] = 'Versuch gelöscht';
$string['eventinteractionsviewed'] = 'Interaktionen angezeigt';
$string['eventreportviewed'] = 'Bericht angezeigt';
$string['eventscolaunched'] = 'Sco gestartet';
$string['eventscorerawsubmitted'] = 'Übermittelte Punktzahl des Lernpakets';
$string['eventstatussubmitted'] = 'Übermittelter Status des Lernpakets';
$string['eventtracksviewed'] = 'Tracks angezeigt';
$string['eventuserreportviewed'] = 'Nutzerbericht angezeigt';
$string['everyday'] = 'Jeden Tag';
$string['everytime'] = 'Alle Nutzungszeiten';
$string['exceededmaxattempts'] = 'Sie haben die Höchstzahl der Versuche erreicht.';
$string['exit'] = 'Lernpaket beenden';
$string['exitactivity'] = 'Beenden';
$string['expired'] = 'Entschuldigung, die Aktivität wurde am {$a} geschlossen und ist nicht länger verfügbar';
$string['external'] = 'Externe Paket-Zeitnahme benutzen';
$string['failed'] = 'Fehlgeschlagen';
$string['finishscorm'] = 'Wenn Sie diesen Lerninhalt abgeschlossen haben, {$a}';
$string['finishscormlinkname'] = 'Zurück zur Kursseite';
$string['firstaccess'] = 'Erster Zugang';
$string['firstattempt'] = 'Erster Versuch';
$string['floating'] = 'Umfliessen';
$string['forceattemptalways'] = 'Immer';
$string['forceattemptoncomplete'] = 'Wann vorherige Versuche abgeschlossen, bestätigt oder gescheitert sind';
$string['forcecompleted'] = 'Abschluss einfordern';
$string['forcecompleteddesc'] = 'Diese Einstellung setzt den Standardwert für die Einstellung \'Abschluss einfordern\'';
$string['forcecompleted_help'] = 'Mit dieser Einstellung \'Abschluss einfordern\' wird sicher gestellt, dass ein Versuch als \'abgeschlossen\' registriert wird. Dies funktioniert nur mit SCORM 1.2.';
$string['forcejavascript'] = 'Aktivierung von JavaScript einfordern';
$string['forcejavascript_desc'] = 'Lernpakete erfordern JavaScript zur Kommunikation zwischen dem Lernpaket und Moodle, z.B. um Bewertungen zu übergeben. Mit dieser Funktion wird der Zugriff auf ein Lernpaket lesend möglich, wenn JavaScript im Browser nicht verfügbar ist. Es werden jedoch keine Bewertungen abgespeichert. Es wird empfohlen, diese Funktion zu aktivieren.';
$string['forcejavascriptmessage'] = 'Um dieses Objekt anzuzeigen ist JavaScript notwendig. Bitte aktivieren Sie JavaScript für Ihren Browser und versuchen Sie es nochmal.';
$string['forcenewattempts'] = 'Neuen Versuch einfordern';
$string['forcenewattempts_help'] = 'Es gibt drei Optionen:

* Nein - Wenn ein vorheriger Versuch abgeschlossen, bestanden oder gescheitert ist, erhält der Nutzer die Option den Rückblick-Modus zu beginnen oder einen neuen Versuch zu starten.
* Wenn vorherige Versuche, abgeschlossen, bestanden oder gescheitert sind. Dies hängt von den Einstellungen des SCORM Pakets ab, was passiert wenn der Versuch \'abgeschlossen\', \'bestanden\' oder \'gescheitert\' ist.';
$string['found'] = 'Manifest gefunden';
$string['frameheight'] = 'Die Einstellung definiert die Höhe der Darstellung.';
$string['framewidth'] = 'Die Einstellung definiert die Breite der Darstellung.';
$string['fromleft'] = 'Von links';
$string['fromtop'] = 'Von oben';
$string['fullscreen'] = 'Auf Bildschirmgröße anpassen';
$string['general'] = 'Allgemeines';
$string['gradeaverage'] = 'Durchschnittsnote';
$string['gradeforattempt'] = 'Bewertung für Versuch';
$string['gradehighest'] = 'Höchstnote';
$string['grademethod'] = 'Bewertungsmethode';
$string['grademethoddesc'] = 'Diese Einstellung setzt die Standardbewertungsmethode für eine Aktivität';
$string['grademethod_help'] = 'Die Bewertungsmethoden legen fest, wie ein Versuch ausgewertet wird:

* Zahl der Lernobjekte - Zahl der abgeschlossenen bzw. erfolgreichen Lernobjekte
* Höchstbewertung - Die höchste Bewertung der erfolgreichen Lernobjekte wird übernommen
* Durchschnitt - Die Durchschnittswerte aller Bewertungen werden errechnet
* Summe der Bewertungen - Alle erreichten Bewertungen werden summiert';
$string['gradereported'] = 'Bewertung veröffentlicht';
$string['gradescoes'] = 'Zahl der Lernobjekte';
$string['gradesettings'] = 'Bewertungseinstellungen';
$string['gradesum'] = 'Summe der Bewertungen';
$string['height'] = 'Höhe';
$string['hidden'] = 'Verborgen';
$string['hidebrowse'] = 'Vorschau deaktivieren';
$string['hidebrowsedesc'] = 'Diese Einstellung legt fest, ob eine Vorschau möglich ist bevor ein Versuch gestartet wird.';
$string['hidebrowse_help'] = 'Der Vorschaumodus erlaubt es, eine Aktivität von dem Abgeben noch einmal anzusehen. Wenn die Vorschau deaktiviert ist, wird die Taste \'Vorschau\' nicht angezeigt.';
$string['hideexit'] = 'Taste \'Beenden\' verbergen';
$string['hidereview'] = 'Taste \'Wiederholen\' verbergen';
$string['hidetoc'] = 'Kursstruktur im Lernpaket anzeigen';
$string['hidetocdesc'] = 'Diese Einstellung legt fest, wie die Kursstruktur im Lernpaket angezeigt wird.';
$string['hidetoc_help'] = 'Diese Einstellung legt fest, wie die Kursstruktur im Lernpaket angezeigt wird.';
$string['highestattempt'] = 'Bester Versuch';
$string['identifier'] = 'Fragen-ID';
$string['incomplete'] = 'Unvollständig';
$string['indicator:cognitivedepth'] = 'Lernpaket kognitiv';
$string['indicator:cognitivedepthdef'] = 'Lernpaket kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Die Person hat diesen Prozentsatz des kognitiven Engagements erreicht, das die Lernpaketaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht, Beiträge, Feedback anzeigen).';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die einPerson in einer Lernpaketaktivität erreicht hat.';
$string['indicator:socialbreadth'] = 'Lernpaket sozial';
$string['indicator:socialbreadthdef'] = 'Lernpaket sozial';
$string['indicator:socialbreadthdef_help'] = 'Die Person hat diesen Prozentsatz des soziale Engagements erreicht, das die Lernpaketaktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein).';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die eine Person in einer Lernpaketaktivität erreicht hat.';
$string['info'] = 'Info';
$string['interactions'] = 'Interaktionen';
$string['invalidactivity'] = 'Aktivität im Lernpaket ist falsch';
$string['invalidhacpsession'] = 'Ungültige HACP Session';
$string['invalidmanifestname'] = 'Nur imsmanisfest.xml oder .zip-Dateien werden ausgewählt.';
$string['invalidmanifestresource'] = 'Warnung: folgende Ressourcen wurden im Manifest referenziert, konnten jedoch nicht gefunden werden:';
$string['invalidstatus'] = 'Ungültiger Status';
$string['invalidurl'] = 'Ungültige URL angegeben';
$string['invalidurlhttpcheck'] = 'Ungültige URL. Debug-Mitteilung: <pre>{$a->cmsg}</pre>';
$string['last'] = 'Letzter Versuch am';
$string['lastaccess'] = 'Letzter Versuch';
$string['lastattempt'] = 'Letzter vollständiger Versuch';
$string['lastattemptlock'] = 'Nach letztem Versuch sperren';
$string['lastattemptlockdesc'] = 'Diese Option legt fest, ob die Aktivität nach letztem Versuch für weitere Versuche gesperrt wird';
$string['lastattemptlock_help'] = 'Diese Option legt fest, ob Teilnehmer/innen nach dem Erreichen der Anzahl zulässiger Versuche weiter auf das Lernpaket zugreifen können oder ob der Zugriff zum Lernpaket nach dem letzten zulässigen Versuch gesperrt wird. Dazu muss ein Wert für die Anzahl der Versuche angegeben sein.';
$string['location'] = 'Adresse anzeigen';
$string['masteryoverride'] = 'Status für die Punktzahlüberschreibung zum Bestehen';
$string['masteryoverridedesc'] = 'Diese Einstellung legt die Vorgabe für die Punktzahl zum Bestehen fest.';
$string['masteryoverride_help'] = 'Wenn die Option aktiviert ist, wird der Status unter Einbeziehung des Raw-Score und des Master-Score neu berechnet und jeder Status überschrieben, der von SCORM (einschließlich "unvollständig") bereitgestellt wird. Voraussetzung ist dabei, dass ein Mastery-Score und ein Raw-Score gesetzt sind und das LMSFinish aufgerufen wird.';
$string['max'] = 'Höchstpunktzahl';
$string['maximumattempts'] = 'Zahl der Versuche';
$string['maximumattemptsdesc'] = 'Diese Einstellung legt die maximale Anzahl von Versuchen für eine Aktivität fest';
$string['maximumattempts_help'] = 'Diese Einstellung legt die maximale Anzahl der möglichen Versuche fest, was nur für Lernpakete im Format SCORM1.2 und AICC funktioniert.';
$string['maximumgradedesc'] = 'Diese Einstellung setzt den Standardwert für die maximale Bewertung einer Aktivität';
$string['menubar'] = 'Menüs anzeigen';
$string['min'] = 'Niedrigste Punktzahl';
$string['missing_attribute'] = 'Fehlende Attribute {$a->attr} im Tag {$a->tag}';
$string['missingparam'] = 'Parameter fehlt oder ist falsch.';
$string['missing_tag'] = 'Fehlendes Tag {$a->tag}';
$string['mode'] = 'Einstellung';
$string['modulename'] = 'Lernpaket';
$string['modulename_help'] = 'In einem Lernpaket sind die Inhalte meist über mehrere Seiten verteilt und werden über eine Navigation aufgerufen. Häufig sind Testfragen direkt integriert. Die Ergebnisse der Bearbeitung können in Moodle gespeichert werden.

Ein Lernpaket wird außerhalb von Moodle mit spezieller Autorensoftware erstellt und im Format SCORM gespeichert. SCORM ist ein Standard, der die plattformübergreifende Verwendbarkeit von webbasierten Lerninhalten anstrebt.';
$string['modulenameplural'] = 'Lernpakete';
$string['myaiccsessions'] = 'Meine AICC sessions';
$string['myattempts'] = 'Meine Versuche';
$string['nav'] = 'Navigation anzeigen';
$string['navdesc'] = 'Die Einstellung legt fest, ob und wo die Navigationstasten Anzeigen/Verbergen angezeigt werden.';
$string['nav_help'] = 'Die Einstellung legt fest, ob die  Navigationstasten angezeigt oder verborgen werden und wo sie ggfs. platziert sind.

Es gibt drei Optionen:

* Nein - Navigationstasten werden nicht angezeigt
* Unter dem Inhalt - Navigationstasten werden unter dem Inhalt des Lernpakets gezeigt.
* Variabel (float) - Navigationstasten werden abhängig von der Fenstergröße platziert.';
$string['navigation'] = 'Navigation';
$string['navpositionleft'] = 'Position der Navigationstasten von links (als Pixel)';
$string['navpositiontop'] = 'Position der Navigationstasten von oben (als Pixel)';
$string['networkdropped'] = 'Die Anzeige für das Lernpaket hat festgestellt, dass die Internetverbindung nicht stabil oder unterbrochen ist. Wenn Sie das Lernpaket weiter bearbeiten, wird Ihr Fortschritt eventuell nicht festgehalten.<br />
Sie sollten die Aktivität abbrechen und erst fortsetzen, wenn die Internetverbindung wieder besteht.';
$string['newattempt'] = 'Neuen Versuch beginnen';
$string['next'] = 'Weiter';
$string['noactivity'] = 'Nichts zu berichten';
$string['noattemptsallowed'] = 'Zahl zulässiger Versuche';
$string['noattemptsmade'] = 'Zahl Ihrer Versuche';
$string['no_attributes'] = 'Tag {$a->tag} muss Attribute haben';
$string['no_children'] = 'Tag {$a->tag} muss Unrereinheiten (children) haben';
$string['nolimit'] = 'Unbegrenzte Zahl der Versuche';
$string['nomanifest'] = 'Falsches Dateipaket - die Datei imsmanifest.xml oder AICCC Struktur wird nicht gefunden';
$string['noprerequisites'] = 'Sie haben die Zugangvoraussetzungen zu diesem Lernobjekt noch nicht erfüllt.';
$string['noreports'] = 'Kein Bericht zum Anzeigen vorhanden';
$string['normal'] = 'Normal';
$string['noscriptnoscorm'] = 'Ihr Browser unterstützt kein Javascript oder Javascript ist ausgeschaltet. Dieses Lernpaket wird deswegen nicht richtig angezeigt und kann Daten nicht korrekt speichern.';
$string['notattempted'] = 'Nicht versucht';
$string['not_corr_type'] = 'Falsche Schreibweise im Tag {$a->tag}';
$string['notopenyet'] = 'Entschuldigung, diese Aktivität ist nicht verfügbar bis {$a}';
$string['objectives'] = 'Ziele';
$string['openafterclose'] = 'Das Enddatum kann nicht vor dem Startdatum liegen.';
$string['optallstudents'] = 'alle Nutzer/innen';
$string['optattemptsonly'] = 'Nutzer/innen mit Versuchen';
$string['options'] = 'Einstellungen (von einigen Browsern nicht unterstützt)';
$string['optionsadv'] = 'Optionen (erweitert)';
$string['optionsadv_desc'] = 'Wenn die Option aktiviert ist, werden Fensteroptionen als erweiterte Einstellungen im Formular vorgenommen.';
$string['optnoattemptsonly'] = 'Nutzer/innen ohne Versuche';
$string['organization'] = 'Organisation';
$string['organizations'] = 'Organisationen';
$string['othersettings'] = 'Erweiterte Einstellungen';
$string['package'] = 'Lernpaket';
$string['packagedir'] = 'Dateisystemfehler: Das Paketverzeichnis kann nicht erstellt werden';
$string['packagefile'] = 'Keine Lernpaket ausgewählt';
$string['packagehdr'] = 'Lernpaket';
$string['package_help'] = 'Ein Lernpaket ist eine ZIP-Datei (oder eine PIF-Datei), die alle SCORM- oder AICC-Kursdefinitionen und Dateien enthält.';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Diese Einstellung ermöglicht die Eingabe einer URL für das Lernpaket, anstatt das Lernpaket in der Dateiauswahl auszusuchen.';
$string['page-mod-scorm-x'] = 'Jede Lernpaketseite';
$string['pagesize'] = 'Seitenzahl';
$string['passed'] = 'Abgeschlossen';
$string['php5'] = 'PHP 5 (DOMXML native library)';
$string['pluginadministration'] = 'Lernpaket-Administration';
$string['pluginname'] = 'Lernpaket';
$string['popup'] = 'In neuem Fenster';
$string['popuplaunched'] = 'Dieses Lernpaket wurde in einem Popup-Fenster gestartet. Sobald Sie mit der Anzeige des Materials fertig sind, klicken Sie hier, um zum Kurs zurückzukehren.';
$string['popupmenu'] = 'In einem Dropdown-Menü';
$string['popupopen'] = 'Lernpaket in neuem Fenster öffnen';
$string['popupsblocked'] = 'Es scheint so als ob Popup-Fenster blockiert sind. Das Lernpaket kann nicht angezeigt werden. Bitte prüfen Sie Ihre Browsereinstellungen, bevor Sie es noch einmal probieren.';
$string['position_error'] = 'Das Tag {$a-tag} kann nicht Untereinheit (Child) des Tags {$a->parent} sein';
$string['preferencespage'] = 'Einstellungen für diese Seite';
$string['preferencesuser'] = 'Einstellungen für diese Übersicht';
$string['prev'] = 'Zurück';
$string['privacy:metadata:aicc:data'] = 'Personenbezogene Daten, die vom SCORM/AICC-Subsystem übergeben wurden';
$string['privacy:metadata:aicc:externalpurpose'] = 'Dieses Plugin sendet Daten weiter zur Nutzung von AICC HACP';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'Der gespeicherte Status in der Lektion';
$string['privacy:metadata:aicc_session:scormmode'] = 'Modus des gespeicherten Elements';
$string['privacy:metadata:aicc_session:scormstatus'] = 'Status des gespeicherten Elements';
$string['privacy:metadata:aicc_session:sessiontime'] = 'Gespeicherte Session-Zeit';
$string['privacy:metadata:aicc_session:timecreated'] = 'Zeitpunkt zu dem das gespeicherte Element erstellt wurde';
$string['privacy:metadata:attempt'] = 'Versuchsanzahl';
$string['privacy:metadata:scoes_track:element'] = 'Name des getrackten Elements';
$string['privacy:metadata:scoes_track:value'] = 'Wert des gegebenen Elements';
$string['privacy:metadata:scorm_aicc_session'] = 'Session Information von AICC HACP';
$string['privacy:metadata:scorm_scoes_track'] = 'Gespeicherte Daten der SCOs für die Aktivität';
$string['privacy:metadata:timemodified'] = 'Zeitpunkt zu dem das gespeicherte Element zuletzt geändert wurde';
$string['privacy:metadata:userid'] = 'ID des Nutzers der die SCORM Aktivität nutzte';
$string['protectpackagedownloads'] = 'Herunterladen des Lernpakets verhindern';
$string['protectpackagedownloads_desc'] = 'Wenn diese Option aktiviert ist, können Lernpakete nur mit dem Recht course:manageactivities heruntergeladen werden. Wenn die Option deaktiviert ist, kann das Lernpaket immer heruntergeladen werden (z.B. von mobilen Endgeräten).';
$string['raw'] = 'Rohpunktwert';
$string['regular'] = 'Reguläres Manifest';
$string['report'] = 'Bericht';
$string['reportcountallattempts'] = '{$a->nbresults} Ergebnisse ({$a->nbattempts} Versuche von {$a->nbusers} Nutzer/innen)';
$string['reportcountattempts'] = '{$a->nbresults} Ergebnisse ({$a->nbusers} Nutzer/innen)';
$string['reports'] = 'Übersicht';
$string['repositorynotsupported'] = 'Dieses Repository akzeptiert keine Verlinkung auf eine Datei imsmanifest.xml.';
$string['response'] = 'Antwort';
$string['result'] = 'Ergebnis';
$string['results'] = 'Ergebnisse';
$string['review'] = 'Rückblick';
$string['reviewmode'] = 'Rückblick-Modus';
$string['rightanswer'] = 'Richtige Antwort';
$string['scoes'] = 'Lernobjekte';
$string['score'] = 'Bewertung';
$string['scorm:addinstance'] = 'Neues Lernpaket hinzufügen';
$string['scormclose'] = 'Verfügbar bis';
$string['scormcourse'] = 'Lernpaket-Kurs';
$string['scorm:deleteownresponses'] = 'Eigene Versuche löschen';
$string['scorm:deleteresponses'] = 'Versuche im Lernpaket löschen';
$string['scormloggingoff'] = 'API-Logdaten deaktiviert';
$string['scormloggingon'] = 'API-Logdaten aktiviert';
$string['scormopen'] = 'Verfügbar ab';
$string['scormresponsedeleted'] = 'Gelöschte Nutzerversuche';
$string['scorm:savetrack'] = 'Trackingdaten speichern';
$string['scorm:skipview'] = 'Übersicht überspringen';
$string['scormstandard'] = 'Standardmodus von SCORM';
$string['scormstandarddesc'] = 'Wenn deaktiviert, ermöglicht Moodle dem SCORM 1.2 Paket mehr zu speichern als die Spezifikation vorsieht und verwendet den vollständigen Namen des Modle-Nutzers im SCORM Paket';
$string['scormtype'] = 'Typ';
$string['scormtype_help'] = 'Diese Einstellung legt fest, wie das Lernpaket in den Kurs eingebunden wird. Es gibt 4 Optionen:

* Hochgeladenes Lernpaket - das Lernpaket kann über die Dateiauswahl ausgesucht werden
* Externes SCORM Manifest - eine URL zu einer imsmanifest.xml-Datei muss angegeben werden. Hinweis: Falls diese URL einen anderen Domainnamen als Ihre Website besitzt, ist das \'Heruntergeladene Lernpaket\' die bessere Variante, da sonst Bewertungen nicht gespeichert werden.
* Heruntergeladenes Lernpaket - eine URL zum Lernpaket muss angegeben werden. Das Lernpaket wird heruntergeladen, ausgepackt und lokal gespeichert. Sobald das externe Lernpaket aktualisiert wird, werden alle Änderungen lokal übernommen.
* Externe AICC URL - Die URL führt zu einer extern abgelegten einzelnen AICC Aktivität. Ein \'Pseudo\'-Paket wird darum herum angelegt werden.';
$string['scorm:viewreport'] = 'Berichte sehen';
$string['scorm:viewscores'] = 'Bewertungen sehen';
$string['scrollbars'] = 'Scrollfunktion im Fenster bereitstellen';
$string['search:activity'] = 'Lernpaket - Beschreibung';
$string['selectall'] = 'Alles auswählen';
$string['selectnone'] = 'Alles abwählen';
$string['show'] = 'Zeigen';
$string['sided'] = 'Auf der linken Seite';
$string['skipview'] = 'Übersicht überspringen';
$string['skipviewdesc'] = 'Diese Einstellung legt fest, ob die Übersicht einer Seite übersprungen werden kann.';
$string['skipview_help'] = 'Diese Einstellung legt fest, ob die Strukturübersicht einer Seite übersprungen werden kann (bzw. nicht angezeigt wird). Falls das Lernpaket nur ein Lernobjekt enthält, dann wird grundsätzlich keine Übersicht angezeigt.';
$string['slashargs'] = 'Achtung: Slash-Argumente sind für diese Website ausgeschaltet. Einige Objekte werden nicht wie erwartet funktionieren!';
$string['stagesize'] = 'Darstellungsgröße';
$string['stagesize_help'] = 'Diese beiden Einstellungen legen die Breite und die Höhe für die Darstellung eines Lernpakets fest.';
$string['started'] = 'Begonnen am';
$string['status'] = 'Status';
$string['statusbar'] = 'Statusanzeige';
$string['student_response'] = 'Antwort';
$string['subplugintype_scormreport'] = 'Übersicht';
$string['subplugintype_scormreport_plural'] = 'Übersicht';
$string['suspended'] = 'Ausgeschlossen';
$string['syntax'] = 'Schreibfehler';
$string['tag_error'] = 'Unbekanntes Tag ({$a->tag}) mit dem Inhalt: {$a->value}';
$string['time'] = 'Zeit';
$string['title'] = 'Titel';
$string['toc'] = 'Inhaltsverzeichnis';
$string['toolbar'] = 'Toolbar anzeigen';
$string['too_many_attributes'] = 'Tag {$a->tag} hat zu viele Attribute';
$string['too_many_children'] = 'Tag {$a->tag} hat zu viele Untereinheitenr (children)';
$string['totaltime'] = 'Zeit';
$string['trackcorrectcount'] = 'Anzahl ändern';
$string['trackcorrectcount_help'] = 'Zahl der richtigen Antworten für die Frage';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'Dies ist die ID des Lernpakets für diese Frage. Die SCORM-Spezifikation erlaubt nicht den gesamten Fragetext anzuzeigen.';
$string['trackingloose'] = 'Achtung: Die Trackingdaten dieses Lernpaketes gehen verloren!';
$string['tracklatency'] = 'Latenz';
$string['tracklatency_help'] = 'Verstrichene Zeit zwischen der Anzeige der Seite<br />und der ersten Beantwortung durch den Teilnehmer.';
$string['trackpattern'] = 'Muster';
$string['trackpattern_help'] = 'Dies kennzeichnet eine richtige Antwort auf diese Frage. Die Antwort des Teilnehmners wird nicht angezeigt.';
$string['trackresponse'] = 'Antwort';
$string['trackresponse_help'] = 'Diese Antwort wurde vom Teilnehmer auf die Frage gegeben';
$string['trackresult'] = 'Ergebnis';
$string['trackresult_help'] = 'Ergebnis auf Grundlage der Teilnehmerantwort <br />und dem richtigen Ergebnis';
$string['trackscoremax'] = 'Höchste Punktzahl';
$string['trackscoremax_help'] = 'Höchstwert für den Rohwert der Bewertung';
$string['trackscoremin'] = 'Niedrigste Punktzahl';
$string['trackscoremin_help'] = 'Mindestwert für den Rohwert zur Bewertung';
$string['trackscoreraw'] = 'Basisbewertung';
$string['trackscoreraw_help'] = 'Die Zahl stellt die Leistung eines Lerners <br />auf einer Skala dar.';
$string['tracksuspenddata'] = 'Daten sperren';
$string['tracksuspenddata_help'] = 'Platz zum Speichern und Wiederfinden von Daten<br />zwischen den Sessions der Teilnehmer';
$string['tracktime'] = 'Zeit';
$string['tracktime_help'] = 'Zeitpunkt zu dem Versuch gestartet wurde';
$string['tracktype'] = 'Typ';
$string['tracktype_help'] = 'Fragetyp, z.B. \'Auswahl\' oder \'Kurzantwort\'.';
$string['trackweight'] = 'Gewichtung';
$string['trackweight_help'] = 'Gewichtung des Elements';
$string['type'] = 'Typ';
$string['typeaiccurl'] = 'Externe AICC URL';
$string['typeexternal'] = 'Externe Lernpaket-Liste';
$string['typelocal'] = 'Hochgeladenes Paket';
$string['typelocalsync'] = 'Heruntergeladenes Paket';
$string['undercontent'] = 'Unter dem Inhalt';
$string['unziperror'] = 'Beim Entpacken des Pakets ist ein Fehler aufgetreten.';
$string['updatefreq'] = 'Auto-Update-Häufigkeit';
$string['updatefreqdesc'] = 'Diese Einstellung setzt den Standardwert  für die Auto-Update-Häufigkeit einer Aktivität';
$string['updatefreq_error'] = 'Ein Updatezyklus kann nur festgelegt werden wenn das Paket extern gehostet wird.';
$string['updatefreq_help'] = 'Diese Option erlaubt dem externen Lernpaket, automatisch heruntergeladen und aktualisiert zu werden';
$string['validateascorm'] = 'Überprüfen eines Lernpakets';
$string['validation'] = 'Prüfergebnis';
$string['validationtype'] = 'Die Einstellungen der DOMXML Library werden zur Prüfung der Lernpaket-Liste verwandt. Wenn Sie sich nicht genau auskennen, lassen Sie die Einstellungen unverändert stehen.';
$string['value'] = 'Wert';
$string['versionwarning'] = 'Die Version der Liste ist älter als 1.3, Warnung beim {$a->tag} Schlüsselwort';
$string['viewallreports'] = 'Bericht für {$a} Versuch/e anzeigen';
$string['viewalluserreports'] = 'Berichte für {$a} Nutzer anzeigen';
$string['whatgrade'] = 'Bewertung der Versuche';
$string['whatgradedesc'] = 'Diese Einstellung setzt den Standardwert für die Bewertung der Versuche. Es kann der höchste, durchschnittliche, erste oder letzte Versuch festgelegt werden.';
$string['whatgrade_help'] = 'Bei mehreren Versuchen legt diese Einstellung fest, welcher Versuch bewertet wird (z.B. beste Bewertung, erste oder letzte Bewertung oder Durchschnittswert).
Die Option \'letzte Bewertung\' lässt fehlgeschlagene Versuche unberücksichtigt.

Hinweise zur Nutzung mehrfacher Versuche:

* Die Option zum Starten eines neuen Versuchs wird mit einer Checkbox auf der Übersichtsseite angezeigt. Prüfen Sie, ob Sie mehr als einen Versuch zulassen möchten.
* Einige Lernpakete unterstützen erneute Versuchen, viele aber nicht. Wenn Teilnehmer/innen erneut in einen bereits beendeten Versuch einsteigen, könnte die Bewertung des vorherigen Versuchs überschrieben werden, selbst wenn der Versuch als \'abgeschlossen\' oder \'erfolgreich\' markiert war.
* Die Einstellungen \'Abschluss einfordern\', \'Neuen Versuch einfordern\' und \'Nach letztem Versuch sperren\' bieten zusätzliche Möglichkeiten für mehrerer Versuche.';
$string['width'] = 'Breite';
$string['window'] = 'Fenster';
$string['youmustselectastatus'] = 'Sie müssen einen erforderlichen Status auswählen';
