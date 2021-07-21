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
 * Strings for component 'auth_outage', language 'de', version '3.11'.
 *
 * @package     auth_outage
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_outagedescription'] = 'Zusatzplugin, das Teilnehmer/innen über eine geplante Wartungszeit informiert und nach Beginn der Wartungszeit das Einloggen verhindert.';
$string['autostart'] = 'Automatisch den Wartungsmodus starten.';
$string['autostart_help'] = 'Wenn ausgewählt, wird bei Beginn der Wartungszeit automatisch der Moodle-Wartungsmodus aktiviert.';
$string['clicreatehelp'] = 'Erstellt eine neue Wartungszeit.';
$string['clicreateparamautostart'] = 'Muss Y oder N sein; gibt an, ob eine Wartungszeit automatisch den Wartungsmodus aktiviert.';
$string['clicreateparamblock'] = 'blockieren bis Wartungszeit startet.';
$string['clicreateparamclone'] = 'Andere Wartungszeit kopieren, abgesehen von der Startzeit.';
$string['clicreateparamdescription'] = 'Die Beschreibung der Wartungszeit.';
$string['clicreateparamduration'] = 'Wie viele Sekunden die Wartungszeit dauern soll.';
$string['clicreateparamhelp'] = 'Zeigt Hilfe zu den Parametern an.';
$string['clicreateparamonlyid'] = 'Gibt nur die ID der neuen Wartungszeit aus, hilfreich für Skripte.';
$string['clicreateparamstart'] = 'In wie vielen Sekunden soll diese Wartungszeit starten? Muss angegeben werden.';
$string['clicreateparamtitle'] = 'Der Titel der Wartungszeit.';
$string['clicreateparamwarn'] = 'Wie viele Sekunden vorher eine Warnung angezeigt wird.';
$string['clierrorinvalidvalue'] = 'Ungültiger Wert für Parameter: {$a->param}';
$string['clierrormissingparamaters'] = 'Sie müssen die Startzeit angeben; nutzen Sie --help für mehr Informationen';
$string['clierroroutagechanged'] = 'Wartungszeit würde während der Wartezeit geändert.';
$string['clierroroutageended'] = 'Die Wartungszeit hat schon geendet.';
$string['clierroroutagenotfound'] = 'Wartungszeit nicht gefunden.';
$string['clifinishhelp'] = 'Beendet eine laufende Wartungzeit.';
$string['clifinishnotongoing'] = 'Wartungszeit läuft aktuell nicht.';
$string['clifinishparamactive'] = 'Beendet die aktuell laufende Wartungszeit.';
$string['clifinishparamhelp'] = 'Zeigt Hilfe zu den Parametern an.';
$string['clifinishparamoutageid'] = 'Die ID der zu beendenden Wartungszeit.';
$string['clioutagecreated'] = 'Wartungszeit erstellt, ID: {$a->id}';
$string['cliwaitforiterroridxoractive'] = 'Sie müssen entweder den Parameter --outageid=# oder --active nutzen, aber nicht beide.';
$string['cliwaitforithelp'] = 'Wartet bis eine Wartungszeit beginnt.';
$string['cliwaitforitoutagestarted'] = 'Wartungszeit begonnen!';
$string['cliwaitforitoutagestartingin'] = 'Wartungszeit beginnt in {$a->countdown}.';
$string['cliwaitforitparamactive'] = 'Wartet auf die aktuell laufende Wartungszeit.';
$string['cliwaitforitparamhelp'] = 'Zeigt Hilfe zu den Parametern an.';
$string['cliwaitforitparamoutageid'] = 'Die ID der Wartungszeit um zu warten bis sie beginnt.';
$string['cliwaitforitparamsleep'] = 'Maximale Anzahl Sekunden vor Statusausgabe';
$string['cliwaitforitparamverbose'] = 'Ausführlichen Modus anschalten.';
$string['clone'] = 'Kopieren';
$string['datetimeformat'] = '%a %d %h %Y at %I:%M%P %Z';
$string['defaultdescription'] = 'Beschreibung';
$string['defaultdescriptiondescription'] = 'Standard Warnhinweis für Wartungszeiten. Nutzen Sie {{start}} und {{stop}} als Platzhalter, sofern benötigt.';
$string['defaultdescriptionvalue'] = 'Von {{start}} bis {{stop}} ist eine geplante Wartungszeit angesetzt. In dieser Zeit wird das System nicht verfügbar sein.';
$string['defaultlayoutcss'] = 'Layout-CSS';
$string['defaultlayoutcssdescription'] = 'Dieser CSS-Code wird zur Anzeige des Warnhinweises auf die Wartungszeit genutzt.';
$string['defaultoutageautostart'] = 'Automatischer Start der Wartungszeit';
$string['defaultoutageautostartdescription'] = 'Gibt ab, ob die Wartungszeit bei Beginn automatisch den Wartungsmodus anschalten soll, was das weitere Nutzen der Website verhindert.';
$string['defaultoutageduration'] = 'Dauer der Wartungszeit';
$string['defaultoutagedurationdescription'] = 'Standarddauer (in Minuten) einer Wartungszeit';
$string['defaulttitle'] = 'Titel';
$string['defaulttitledescription'] = 'Standardtitel für Wartungszeiten. Nutzen Sie soweit benötigt {{start}} und {{stop}}.';
$string['defaulttitlevalue'] = 'Das System wird ab {{start}} für voraussichtlich {{duration}} gewartet und ist in dieser Zeit nicht verfügbar.';
$string['defaultwarningduration'] = 'Dauer der Warnung';
$string['defaultwarningdurationdescription'] = 'Standarddauer der Vorwarnzeit (in Minuten) für Wartungszeiten';
$string['description'] = 'Öffentliche Beschreibung';
$string['description_help'] = 'Eine vollständige Beschreibung der Wartungszeit, für alle Nutzer/innen sichtbar.';
$string['finish'] = 'Beenden';
$string['info15secondsbefore'] = '15 Sekunden vorher';
$string['infoendofoutage'] = 'Ende der Wartungszeit';
$string['infofrom'] = 'Von:';
$string['infopagestaticgenerated'] = 'Diese Warnung wurde generiert um {$a->time}.';
$string['infostart'] = 'Start';
$string['infostartofwarning'] = 'Start der Warnung';
$string['infountil'] = 'Bis:';
$string['menumanage'] = 'Verwalten';
$string['messageoutagebackonline'] = 'Wir sind wieder online!';
$string['messageoutagebackonlinedescription'] = 'Sie können normal weiterarbeiten.';
$string['messageoutageongoing'] = 'Zurück online um {$a->stop}.';
$string['messageoutagewarning'] = 'Herunterfahren in {{countdown}}';
$string['na'] = 'nicht verfügbar';
$string['notfound'] = 'Keine Wartungszeiten gefunden';
$string['outageclone'] = 'Wartungszeit kopieren';
$string['outageclonecrumb'] = 'Kopieren';
$string['outagecreate'] = 'Wartungszeit erstellen';
$string['outagecreatecrumb'] = 'Erstellen';
$string['outagedelete'] = 'Wartungszeit löschen';
$string['outagedeletewarning'] = 'Sie sind im Begriff, die untenstehende Wartungszeit permanent zu löschen. Das kann nicht rückgängig gemacht werden.';
$string['outageduration'] = 'Dauer der Wartungszeit';
$string['outageduration_help'] = 'Wie lange die Wartungszeit ab Start dauert';
$string['outagedurationerrorinvalid'] = 'Die Dauer der Wartungszeit muss positiv sein.';
$string['outageedit'] = 'Wartungszeit bearbeiten';
$string['outageeditcrumb'] = 'Bearbeiten';
$string['outagefinish'] = 'Wartungszeit beenden';
$string['outagefinishwarning'] = 'Sie sind im Begriff, diese Wartungszeit als beendet zu markieren. Das System wird dann unmittelbar danach wieder online sein.';
$string['outageslistfuture'] = 'Geplante Wartungszeiten';
$string['outageslistpast'] = 'Vergangene Wartungszeiten';
$string['pluginname'] = 'Verwaltung von Wartungszeiten';
$string['starttime'] = 'Startdatum und -zeit';
$string['starttime_help'] = 'An welchem Datum und welcher Uhrzeit die Wartungszeit startet und dabei den generellen Zugriff auf das System verhindert.';
$string['tableheaderduration'] = 'Dauer';
$string['tableheaderdurationactual'] = 'Tatsächliche Dauer';
$string['tableheaderdurationplanned'] = 'Geplante Dauer';
$string['tableheaderstarttime'] = 'Startet um';
$string['tableheadertitle'] = 'Titel';
$string['tableheaderwarnbefore'] = 'Warnung vorher';
$string['taskupdatestaticpage'] = 'Statische Wartungszeit-Seite aktualisieren';
$string['textplaceholdershint'] = 'Sie können {{start}}, {{stop}} und {{duration}} als Platzhalter für den Titel und die Beschreibung nutzen.';
$string['title'] = 'Titel';
$string['title_help'] = 'Ein kurzer Titel für diese Wartungszeit. Dieser Titel wird auf dem Warnbalken und im Kalender angezeigt.';
$string['titleerrorinvalid'] = 'Der Titel kann nicht leer gelassen werden.';
$string['titleerrortoolong'] = 'Der Titel kann nicht mehr als {$a} Zeichen lang sein.';
$string['warningduration'] = 'Warnungsdauer';
$string['warningduration_help'] = 'Wie lange vor dem Start einer Wartungszeit die Warnung angezeigt werden sollte.';
$string['warningdurationerrorinvalid'] = 'Die Vorwarnzeit muss positiv sein.';
