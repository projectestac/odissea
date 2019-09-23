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
 * Strings for component 'search', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   search
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Erweiterte Suche';
$string['all'] = 'Alles';
$string['allareas'] = 'Alle Bereiche';
$string['allcourses'] = 'Alle Kurse';
$string['allusers'] = 'Alle Nutzer/innen';
$string['author'] = 'Autor/in';
$string['authorname'] = 'Name des Autors';
$string['back'] = 'Zurück';
$string['beadmin'] = 'Sie müssen Adminrechte besitzen, um diese Seite zu nutzen.';
$string['checkdb'] = 'Datenbank prüfen';
$string['checkdbadvice'] = 'Ihre Datenbank auf Probleme prüfen.';
$string['checkdir'] = 'Verzeichnis prüfen';
$string['checkdiradvice'] = 'Stellen Sie sicher, dass das Datenverzeichnis existiert und beschreibbar ist.';
$string['commenton'] = 'Kommentiert am';
$string['confirm_delete'] = 'Wollen Sie wirklich den Index für {$a} löschen? Bis der Suchbereich indexiert ist, werden Nutzer aus diesen Bereich keine Suchergebnisse erhalten.';
$string['confirm_deleteall'] = 'Sind Sie sicher, dass Sie alle indexierten Inhalte jetzt löschen wollen? Nutzer werden dann so lange keine Suchergebnisse erhalten bis eine erneute Indexierung erfolgt ist.';
$string['confirm_indexall'] = 'Möchten Sie wirklich alle Inhalte erneut indexieren? Wenn Sie sehr viele Inhalte haben, kann dies sehr lange dauern. Auf produktiven Servern sollte dieser Prozess durch den geplanten Vorgang  \'Indizierung für die globale Suche\' ausgeführt werden.';
$string['confirm_reindexall'] = 'Sind Sie sicher, dass Sie alle Inhalte erneut indexieren wollen? Wenn Sie sehr viele Inhalte haben, kann dies recht lange dauern. Bevor der Prozess abgeschlossen ist werden Nutzer nur Teilergenisse sehen.';
$string['createanindex'] = 'Index erzeugen';
$string['createdon'] = 'Erzeugt am';
$string['database'] = 'Datenbank';
$string['databasestate'] = 'Datenbank wird indiziert';
$string['datadirectory'] = 'Datenverzeichnis';
$string['deleteindex'] = 'Index {$a} löschen';
$string['deletionsinindex'] = 'Löschungen im Index';
$string['docmodifiedon'] = 'Zuletzt geändert am {$a}';
$string['doctype'] = 'Dokumententyp';
$string['doctypenotsupported'] = 'Der angegebene Dokumententyp wird bisher nicht unterstützt.';
$string['documents'] = 'Dokumente';
$string['documentsfor'] = 'Dokumente für';
$string['documentsindatabase'] = 'Dokumente in der Datenbank';
$string['documentsinindex'] = 'Dokumente im Index';
$string['duration'] = 'Dauer';
$string['emptydatabaseerror'] = 'Die Datenbank-Tabelle ist nicht vorhanden oder enthält keine Index-Datensätze.';
$string['enginenotfound'] = 'Die Suchmaschine {$a} wurde nicht gefunden.';
$string['enginenotinstalled'] = 'Die Suchmaschine {$a} ist nicht installiert.';
$string['enginenotselected'] = 'Sie haben keine Suchmaschine ausgewählt.';
$string['engineserverstatus'] = 'Die Suchmaschine ist nicht verfügbar. Wenden Sie sich an Ihren Administrator.';
$string['enteryoursearchquery'] = 'Suchanfrage eintragen';
$string['errorareanotavailable'] = 'Der Suchbereich {$a} ist nicht verfügbar.';
$string['error_indexing'] = 'Fehler bei der Indizierung';
$string['errors'] = 'Fehler';
$string['everywhere'] = 'Überall wo Sie Zugriff haben';
$string['filesinindexdirectory'] = 'Dateien im Indexverzeichnis';
$string['filterheader'] = 'Filter';
$string['fromtime'] = 'Geändert nach';
$string['globalsearch'] = 'Globale Suche';
$string['globalsearchdisabled'] = 'Die globale Suche ist nicht aktiviert.';
$string['gradualreindex'] = 'Schrittweise Neuindizierung {$a}';
$string['gradualreindex_confirm'] = 'Möchten Sie wirklich eine Neuindizierung von {$a} starten? Dies kann einige Zeit dauern, wobei die vorhandenen Daten während der Neuindizierung verfügbar bleiben.';
$string['gradualreindex_queued'] = 'Eine Neuindizierung wurde für {$a->name} ({$a->count} Kontexte) angefordert. Die Indizierung wird ausgeführt vom regelmäßigen Task \'Global Search Indexing\'.';
$string['incourse'] = 'im Kurs {$a}';
$string['index'] = 'Index';
$string['indexwhendisabledfullnotice'] = 'Die Indexierung ist zurzeit nicht gestattet wenn die Suche deaktiviert ist. Um diese zu aktivieren, passen Sie die <a href="{$a->url}">searchindexwhendisabled</a> Einstellung an.';
$string['indexwhendisabledshortnotice'] = 'Die Indizierung ist nicht verfügbar.';
$string['invalidindexerror'] = 'Das Indexverzeichnis enthält entweder einen ungültigen Index oder gar nichts.';
$string['ittook'] = 'Benötigt wurden';
$string['matchingfile'] = 'Treffer in der Datei: <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Treffer in den Dateien:';
$string['next'] = 'Weiter';
$string['noindexmessage'] = 'Admin: Es gibt scheinbar keinen Suchindex. Bitte';
$string['noresults'] = 'Keine Ergebnisse';
$string['normalsearch'] = 'Normale Suche';
$string['notitle'] = 'Ohne Namen';
$string['openedon'] = 'geöffnet am';
$string['optimize'] = 'Optimieren';
$string['order'] = 'Reihenfolge der Ergebnisse';
$string['order_location'] = 'Bevorzugt Ergebnisse im Zusammenhang mit {$a}';
$string['order_relevance'] = 'Beginnend mit besonders relevanten Ergebnissen';
$string['priority'] = 'Priorität';
$string['priority_normal'] = 'Normal';
$string['priority_reindexing'] = 'Neuindizierung';
$string['privacy:metadata'] = 'Das Such-Subsystem speichert keine personenbezogenen Daten.';
$string['progress'] = 'Fortschritt';
$string['queryerror'] = 'Die Suchanfrage konnte nicht umgesetzt werden: {$a}';
$string['queueheading'] = 'Weiterer Indizierungsauftrag ({$a} Elemente)';
$string['resultsreturnedfor'] = 'Ergebnisse für';
$string['runindexer'] = 'Indizierung durchführen';
$string['runindexertest'] = 'Indizierung testen';
$string['schemanotupdated'] = 'Suchschema ist nicht aktuell.';
$string['schemaversionunknown'] = 'Die Suchmaschine kennt die aktuelle Schemaversion nicht.';
$string['score'] = 'Punkte';
$string['search'] = 'Suchen';
$string['searcharea'] = 'Suchbereich';
$string['searching'] = 'Suche in ...';
$string['search:message_received'] = 'Mitteilungen - empfangen';
$string['search:message_sent'] = 'Mitteilungen - gesendet';
$string['search:mycourse'] = 'Meine Kurse';
$string['searchnotpermitted'] = 'Sie dürfen die Suchfunktion nicht benutzen.';
$string['search:section'] = 'Kursabschnitte';
$string['searchsetupdescription'] = 'Die folgenden Schritte sollen Ihnen helfen, die globale Suche in Moodle einzustellen.';
$string['search:user'] = 'Nutzer/innen';
$string['searchwithin'] = 'Innerhalb suchen';
$string['seconds'] = 'Sekunden';
$string['solutions'] = 'Lösungen';
$string['statistics'] = 'Statistiken';
$string['step'] = 'Schritt';
$string['thesewordshelpimproverank'] = 'Wörter mit hoher Gewichtung';
$string['thesewordsmustappear'] = 'Wörter müssen vorkommen';
$string['thesewordsmustnotappear'] = 'Wörter dürfen nicht vorkommen';
$string['title'] = 'Titel';
$string['tofetchtheseresults'] = ', um diese Ergebnisse zu bekommen';
$string['totalsize'] = 'Gesamtgröße';
$string['totime'] = 'Geändert vor';
$string['type'] = 'Typ';
$string['uncompleteindexingerror'] = 'Die Indizierung wurde nicht erfolgreich beendet. Versuchen Sie es noch einmal.';
$string['versiontoolow'] = 'Die globale Suche benötigt PHP 5.0.0 (oder höher).';
$string['viewresultincontext'] = 'Ergebnis im Kontext anzeigen';
$string['wordsintitle'] = 'Wörter im Titel';
