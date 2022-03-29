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
 * Strings for component 'tool_xmldb', language 'de', version '3.11'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Aktuell';
$string['addpersistent'] = 'Hinzufügen von obligatorischen, beständigen Feldern';
$string['aftertable'] = 'Nach Tabelle:';
$string['back'] = 'Zurück';
$string['backtomainview'] = 'Zurück zur Übersicht';
$string['cannotuseidfield'] = 'Feld \'id\' kann nicht eingefügt werden. Es handelt sich um eine Spalte, die automatisch nummeriert wird.';
$string['change'] = 'Ändern';
$string['charincorrectlength'] = 'Falsche Feldlänge (char)';
$string['check_bigints'] = 'Ungültige DB-Werte (integers) suchen';
$string['check_defaults'] = 'Inkonsistente Vorgabewerte suchen';
$string['check_foreign_keys'] = 'Suche nach Beschädigungen an Fremdschlüsseln';
$string['check_indexes'] = 'Fehlende Datenbank-Indizes suchen';
$string['check_oracle_semantics'] = 'Suche nach fehlerhaften semantischen Längen';
$string['checkbigints'] = 'Zahlen prüfen';
$string['checkdefaults'] = 'Vorgaben prüfen';
$string['checkforeignkeys'] = 'Fremdschlüssel prüfen';
$string['checkindexes'] = 'Indizes prüfen';
$string['checkoraclesemantics'] = 'Semantische Prüfung';
$string['completelogbelow'] = '(das vollständige Suchprotokoll folgt)';
$string['confirmcheckbigints'] = 'Diese Funktion sucht nach <a href="https://tracker.moodle.org/browse/MDL-11038"> möglicherweise ungültigen Zahlenwerten</a> in Ihrem Moodle-Server und erzeugt automatisch die notwendigen SQL-Anweisungen, um die Integer Werte in der Datenbank zu korrigieren (die SQL-Anweisungen werden erzeugt, aber nicht ausgeführt!).

Nachdem die Anweisungen erzeugt wurden, können Sie diese kopieren und sie sicher in Ihrer bevorzugten SQL-Oberfläche ausführen. Vergessen Sie bitte nicht, Ihre Datenbank vorher zu sichern!!

Es wird dringend empfohlen, auf die jeweils neueste Variante Ihrer Moodle-Version zu aktualisieren, bevor Sie die Suche nach ungültigen Werten durchführen.

Die Funktion führt selber keinerlei Aktionen mit der Datenbank durch (außer lesend), so dass die Funktion zu jedem Zeitpunkt sicher ausgeführt werden kann.';
$string['confirmcheckdefaults'] = 'Diese Funktion sucht nach inkonsistenten Defaultwerten auf dem Moodle-Server und erstellt erforderliche SQL-Statements zur Korrektur dieser Werte, ohne jedoch automatisch die SQL Anpassungen vorzunehmen.

Wenn die Prüfung ausgeführt und das SQL Statement erstellt wurde, können Sie mit dieses mit dem Werkzeug Ihrer Wahl in der Datenbank ausführen. Vorher unbedingt ein Backup der Datenbank erstellen.

Es ist sehr wichtig zuvor die letzte (+Version) des Moodle Releases (1.8;1.9;2.x...) zu installieren.

Diese Prüfung verändert keine Einstellungen und Inhalte in Ihrer Datenbank. Es werden nur bestehende Einstellungen gelesen. Die Prüfung kann also jederzeit ausgeführt werden.';
$string['confirmcheckforeignkeys'] = 'Diese Funktion sucht nach möglicherweise zerstörten Fremdschlüsseln, die in der install.xml definiert wurden. (Moodle generiert zur Zeit keine Fremdschlüssel in der Datenbank, weshalb ungültige Daten verfügbar sein könnten.)

Es wird dringend empfohlen, die neueste verfügbare (+Version) zu Ihrem Moodle-Release zu installieren, bevor Sie die Suche nach fehlenden Indizes starten.

Die Funktion führt keine SQL-Anweisungen auf Ihrer Datenbank aus (außer, dass sie lesend zugreift), so dass die Funktion zu jedem Zeitpunkt sicher ausgeführt werden kann.';
$string['confirmcheckindexes'] = 'Diese Funktion sucht nach möglicherweise fehlenden Indizes in Ihrem Moodle-Server, wobei die nötigen SQL-Anweisungen für ein Update automatisch erzeugt (aber nicht ausgeführt) werden. Nachdem die Anweisungen erzeugt sind, können Sie sie kopieren und in Ihrem bevorzugten SQL-Zugang ausführen.<br /><br /> Es wird dringend empfohlen, die neueste verfügbare +-Version zu Ihrem Moodle-Release (1.8, 1.9, 2.x ...) zu installieren, bevor Sie die Suche nach fehlenden Indizes starten.<br /><br /> Die Funktion führt keine SQL-Anweisungen auf Ihrer Datenbank aus (außer dass sie lesend zugreift), so dass die Funktion zu jedem Zeitpunkt sicher ausgeführt werden kann.';
$string['confirmcheckoraclesemantics'] = 'Diese Funktion sucht nach <a href="https://tracker.moodle.org/browse/MDL-29322">Oracle varchar2 Spalten, die BYTE Semantics</a> verwenden auf Ihrem Moodle-Server, wobei die nötigen SQL-Anweisungen zur Konvertierung in CHAR Semantics für ein Update automatisch erzeugt (aber nicht ausgeführt) werden.

Nachdem die Anweisungen erzeugt wurden, können Sie diese kopieren und sie sicher in Ihrer bevorzugten SQL-Oberfläche ausführen. Vergessen Sie bitte nicht, Ihre Datenbank vorher zu sichern!!

Es wird dringend empfohlen, auf die jeweils neueste Variante Ihrer Moodle-Version zu aktualisieren, bevor Sie die Suche nach BYTE Semantics starten.

Die Funktion führt selber keinerlei Aktionen mit der Datenbank durch (außer lesend), so dass die Funktion zu jedem Zeitpunkt sicher ausgeführt werden kann.';
$string['confirmdeletefield'] = 'Möchten Sie dieses Feld wirklich löschen?';
$string['confirmdeleteindex'] = 'Möchten Sie diesen Index wirklich löschen?';
$string['confirmdeletekey'] = 'Möchten Sie diesen Schlüssel wirklich löschen?';
$string['confirmdeletetable'] = 'Möchten Sie diese Tabelle wirklich löschen?';
$string['confirmdeletexmlfile'] = 'Möchten Sie diese Datei wirklich löschen?';
$string['confirmrevertchanges'] = 'Wollen Sie wirklich die Änderungen rückgängig machen, die Sie vorgenommen haben an:';
$string['create'] = 'Anlegen';
$string['createtable'] = 'Tabelle anlegen:';
$string['defaultincorrect'] = 'Falsche Voreinstellung';
$string['delete'] = 'Löschen';
$string['delete_field'] = 'Feld löschen';
$string['delete_index'] = 'Index löschen';
$string['delete_key'] = 'Schlüssel löschen';
$string['delete_table'] = 'Tabelle löschen';
$string['delete_xml_file'] = 'XML-Datei löschen';
$string['doc'] = 'Dokumentation';
$string['docindex'] = 'Dokumentationsindex:';
$string['documentationintro'] = 'Diese Dokumentation ist automatisch aus der Definition der XMLDB-Datenbank generiert. Sie ist ausschließlich in Englisch verfügbar.';
$string['down'] = 'Nach unten';
$string['duplicate'] = 'Duplizieren';
$string['duplicatefieldname'] = 'Ein anderes Feld hat bereits diesem Namen';
$string['duplicatefieldsused'] = 'Verwendete Felder duplizieren';
$string['duplicateindexname'] = 'Doppelter Indexname';
$string['duplicatekeyname'] = 'Ein anderer Schlüssel hat bereits diesem Namen';
$string['duplicatetablename'] = 'Es existiert bereits eine andere Tabelle mit diesem Namen';
$string['edit'] = 'Bearbeiten';
$string['edit_field'] = 'Feld bearbeiten';
$string['edit_field_save'] = 'Feld speichern';
$string['edit_index'] = 'Index bearbeiten';
$string['edit_index_save'] = 'Index speichern';
$string['edit_key'] = 'Schlüssel bearbeiten';
$string['edit_key_save'] = 'Schlüssel speichern';
$string['edit_table'] = 'Tabelle bearbeiten';
$string['edit_table_save'] = 'Tabelle speichern';
$string['edit_xml_file'] = 'XML-Datei bearbeiten';
$string['enumvaluesincorrect'] = 'Falsche Feldwerte (enum)';
$string['expected'] = 'Erwartet';
$string['extensionrequired'] = 'Für diese Aktion ist die PHP-Erweiterung \'{$a}\' notwendig. Installieren Sie bitte die Erweiterung, wenn Sie diese Möglichkeit nutzen möchten.';
$string['extraindexesfound'] = 'Zusätzliche Indizes gefunden';
$string['field'] = 'Feld';
$string['fieldnameempty'] = 'Feld \'Name\' ist leer';
$string['fields'] = 'Felder';
$string['fieldsnotintable'] = 'Das Feld gibt es nicht in der Tabelle';
$string['fieldsusedinindex'] = 'Dieses Feld wird als Index verwandt';
$string['fieldsusedinkey'] = 'Das Feld wird als Schlüssel verwendet.';
$string['filemodifiedoutfromeditor'] = 'Warnung: Die Datei wurde lokal mit dem XMLDB Editor verändert. Speichern überschreibt lokale Änderungen.';
$string['filenotwriteable'] = 'Die Datei ist schreibgeschützt';
$string['fkunknownfield'] = 'Fremder Schlüssel  {$a->keyname} in Tabelle {$a->tablename} verweist auf nicht bestehendes Feld {$a->reffield} in der Verweistabelle {$a->reftable}.';
$string['fkunknowntable'] = 'Fremder Schlüssel  {$a->keyname} in Tabelle {$a->tablename} verweist auf nicht bestehende Tabelle {$a->reftable}.';
$string['fkviolationdetails'] = 'Der Fremdschlüssel {$a->keyname} in der Tabelle {$a->tablename} ist in {$a->numviolations} von {$a->numrows} Zeilen beschädigt.';
$string['float2numbernote'] = 'Hinweis: Auch wenn Felder im Format "float" durch XMLDB 100%-ig unterstützt werden, wird trotzdem die Migration ins Format "number" empfohlen.';
$string['floatincorrectdecimals'] = 'Falsche Anzahl von Nachkommazahlen (float)';
$string['floatincorrectlength'] = 'Falsche Feldlänge (float)';
$string['generate_all_documentation'] = 'Gesamte Dokumentation';
$string['generate_documentation'] = 'Dokumentation';
$string['gotolastused'] = 'Zur zuletzt genutzten Datei';
$string['incorrectfieldname'] = 'Falscher Name';
$string['incorrectindexname'] = 'Falscher Indexname';
$string['incorrectkeyname'] = 'Falsche Key Bezeichnung';
$string['incorrecttablename'] = 'Falscher Tabellenname';
$string['index'] = 'Index';
$string['indexes'] = 'Indizes';
$string['indexnameempty'] = 'Indexname ist leer';
$string['integerincorrectlength'] = 'Falsche Feldlänge (integer)';
$string['key'] = 'Schlüssel';
$string['keynameempty'] = 'Die Key Bezeichnung darf nicht leer bleiben';
$string['keys'] = 'Schlüssel';
$string['listreservedwords'] = 'Liste von reservierten Wörtern<br/>auf dem aktuellen Stand: <a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB_reserved_words</a>';
$string['load'] = 'Laden';
$string['main_view'] = 'Hauptübersicht';
$string['masterprimaryuniqueordernomatch'] = 'Die Felder in Ihrem Fremdschlüssel (foreign key) müssen in der gleichen Reihenfolge haben, wie in UNIQUE KEY in der Referenztabelle eingetragen sind.';
$string['missing'] = 'Fehlend';
$string['missingindexes'] = 'Fehlende Indizes gefunden';
$string['mustselectonefield'] = 'Sie müssen ein Feld auswählen, um die möglichen Aktionen zu sehen!';
$string['mustselectoneindex'] = 'Sie müssen einen Index auswählen, um die möglichen Aktionen zu sehen!';
$string['mustselectonekey'] = 'Sie müssen einen Schlüssel auswählen, um die möglichen Aktionen zu sehen!';
$string['new_table_from_mysql'] = 'Neue Tabelle aus MySQL';
$string['newfield'] = 'Neues Feld';
$string['newindex'] = 'Neuer Index';
$string['newkey'] = 'Neuer Schlüssel';
$string['newtable'] = 'Neue Tabelle';
$string['newtablefrommysql'] = 'Neue Tabelle aus MySQL';
$string['nofieldsspecified'] = 'Keine Felder festgelegt';
$string['nomasterprimaryuniquefound'] = 'Die Spalte(n), auf die Ihr Fremdschlüssel (foreign key) verweist, müssen in einem primary oder unique key in der verknüpften Tabelle enthalten sein. Beachten Sie, dass eine Spalte in einem UNIQUE INDEX nicht ausreicht.';
$string['nomissingorextraindexesfound'] = 'Es wurden keine fehlende oder zusätzliche Indizes gefunden, so dass keine weiteren Maßnahmen erforderlich sind.';
$string['noreffieldsspecified'] = 'Keine Referenzfelder festgelegt';
$string['noreftablespecified'] = 'Angegebene Referentztabelle nicht gefunden';
$string['noviolatedforeignkeysfound'] = 'Keine beschädigten Fremdschlüssel gefunden';
$string['nowrongdefaultsfound'] = 'Es wurden keine inkonsistenten Vorgabewerte gefunden. Die Datenbank braucht keine weiteren Aktionen.';
$string['nowrongintsfound'] = 'Es wurden keine ungültigen Zahlenwerte (integer) gefunden. Die Datenbank braucht keine weiteren Aktionen.';
$string['nowrongoraclesemanticsfound'] = 'Es wurden keine Orcale Tabellen mit BYTE semantics gefunden. die Datenbank benötigt keine weitere Bearbeitung.';
$string['numberincorrectdecimals'] = 'Falsche Anzahl von Stellen (number)';
$string['numberincorrectlength'] = 'Falsche Feldlänge (number)';
$string['numberincorrectwholepart'] = 'Zu großer ganzzahliger Teil für Zahlenfeld';
$string['pendingchanges'] = 'Hinweis: Sie haben Veränderungen in dieser Datei vorgenommen, die jederzeit gespeichert werden können.';
$string['pendingchangescannotbesaved'] = 'Die Änderungen in dieser Datei können nicht gespeichert werden! Bitte prüfen Sie, dass das Verzeichnis und die darin enthaltene Datei "install.xml" eine Schreibberechtigung für den Webserver besitzen.';
$string['pendingchangescannotbesavedreload'] = 'Die Änderungen in dieser Datei können nicht gespeichert werden! Stellen Sie bitte sicher, dass das Verzeichnis und die enthaltene Datei "install.xml" eine Schreibberechtigung für den Webserver haben. Danach müssen Sie diese Seite neu laden und sollten Sie die Änderungen speichern können.';
$string['persistentfieldscomplete'] = 'Die folgenden Felder wurden hinzugefügt:';
$string['persistentfieldsconfirm'] = 'Möchten Sie die folgenden Felder hinzufügen:';
$string['persistentfieldsexist'] = 'Diese Felder sind bereits vorhanden:';
$string['pluginname'] = 'XMLDB-Editor';
$string['primarykeyonlyallownotnullfields'] = 'Primäre Keys können nicht null sein';
$string['privacy:metadata'] = 'Das Plugin \'XMLDB Editor\' speichert keine personenbezogenen Daten.';
$string['reconcile_files'] = 'XMLDB-Dateien suchen, die geklärt werden müssen';
$string['reconcile_files_intro'] = 'Diese Funktionalität durchsucht den Inhalt aller XMLDB-Dateien und überprüft, ob sie mit den Ergebnissen ihrer Generierung aus dem XMLDB-Editor übereinstimmen.

Eine Liste von Dateien, die geklärt (regeneriert) werden müssen, wird angezeigt. Der XMLDB-Editor kann verwendet werden, um die Dateien zu reparieren.';
$string['reconcile_files_no'] = 'Alle Dateien sind in Ordnung. Eine Klärung ist nicht notwendig.';
$string['reconcile_files_yes'] = 'Dateien zur Klärung gefunden:';
$string['reconcilefiles'] = 'XMLDB-Dateien klären';
$string['reserved'] = 'Reserviert';
$string['reservedwords'] = 'Reservierte Wörter';
$string['revert'] = 'Rückgängig';
$string['revert_changes'] = 'Änderungen rückgängig machen';
$string['save'] = 'Speichern';
$string['searchresults'] = 'Suchergebnisse';
$string['selectaction'] = 'Aktion auswählen:';
$string['selectdb'] = 'Datenbank auswählen:';
$string['selectfieldkeyindex'] = 'Feld/Schlüssel/Index auswählen:';
$string['selectonecommand'] = 'Wählen Sie bitte eine Aktion aus, um den PHP-Code anzusehen.';
$string['selectonefieldkeyindex'] = 'Wählen Sie bitte ein Feld/Schlüssel/Index aus, um den PHP-Code anzusehen.';
$string['selecttable'] = 'Tabelle auswählen:';
$string['table'] = 'Tabelle';
$string['tablenameempty'] = 'Der Tabellenname darf nicht leer bleiben.';
$string['tables'] = 'Tabellen';
$string['unknownfield'] = 'Verweis auf nicht bekanntes Feld';
$string['unknowntable'] = 'Verweis auf nicht bekannte Tabelle';
$string['unload'] = 'Löschen';
$string['up'] = 'Aufwärts';
$string['view'] = 'Ansicht';
$string['view_reserved_words'] = 'Reservierte Wörter anzeigen';
$string['view_structure_php'] = 'PHP-Struktur anzeigen';
$string['view_structure_sql'] = 'SQL-Struktur anzeigen';
$string['view_table_php'] = 'PHP-Tabelle anzeigen';
$string['view_table_sql'] = 'SQL-Tabelle anzeigen';
$string['viewedited'] = 'Bearbeitete anzeigen';
$string['vieworiginal'] = 'Original anzeigen';
$string['viewphpcode'] = 'PHP-Code anzeigen';
$string['viewsqlcode'] = 'SQL-Code anzeigen';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Beschädigte Fremdschlüssel';
$string['violatedforeignkeysfound'] = 'Beschädigte Fremdschlüssel gefunden';
$string['violations'] = 'Beschädigungen';
$string['wrong'] = 'Falsch';
$string['wrongdefaults'] = 'Falsche Standardwerte gefunden';
$string['wrongints'] = 'Falsche Zahlen gefunden';
$string['wronglengthforenum'] = 'Falsche Feldlänge (enum)';
$string['wrongnumberofreffields'] = 'Falsche Anzahl von Referenzfeldern';
$string['wrongoraclesemantics'] = 'Falsche Orcale BYTE Semantic sgefunden';
$string['wrongreservedwords'] = 'Derzeit verwendete reservierte Wörter <br />(die Tabellennamen sind nicht wichtig, wenn $CFG->prefix genutzt wird)';
$string['yesextraindexesfound'] = 'Die folgenden zusätzliche Indizes wuden gefunden.';
$string['yesmissingindexesfound'] = '<p>In der Datenbank wurden fehlende Indizes gefunden. Mit einem externen SQL-Werkzeug und den nachfolgenden SQL-Anweisungen können Sie die Indizes erzeugen.</p><p>
Die Suche nach fehlenden Indizes sollte anschließend noch einmal ausgeführt werden.</p>';
$string['yeswrongdefaultsfound'] = '<p>In der Datenbank wurden inkonsistente Standardwerte gefunden. Die nachfolgenden Details und die auszuführenden SQL Statements sollen Ihnen helfen, die Fehler in Ihrer Datenbank zu beheben. Vergessen Sie nicht eine Datenbanksicherung zu erstellen, bevor Sie diese Anweisungen ausführen.</p> <p>
Nachdem Sie das jeweilige Statement ausgeführt haben, sollten Sie die Prüfung erneut durchführen, um wirklich alle Inkonsistenzen aufzudecken.</p>';
$string['yeswrongintsfound'] = '<p>In Ihrer Datenbank wurden falsche Ganzzahlen (integer) gefunden. Es folgen Details zu den Fehlern und die erforderlichen SQL-Anweisungen, die Sie in Ihrem bevorzugten SQL-Interface ausführen können. Sichern Sie unbedingt zuerst Ihre Datenbank! </p><p>Nach der Korrektur wird dringend empfohlen, dieses Dienstprogramm erneut auszuführen. Dies soll sicherstellen, dass keine falschen Ganzzahlen mehr gefunden werden. </p>';
$string['yeswrongoraclesemanticsfound'] = '<p>Es wurden einige Oracle-Spalten in Ihrer Datenbank gefunden, die die BYTE Semantics verwenden. Es folgen Details zu den Fehlern und die erforderlichen SQL-Anweisungen, die Sie in Ihrem bevorzugten SQL-Interface ausführen können. Sichern Sie unbedingt zuerst Ihre Datenbank! </p><p>Nach der Korrektur wird dringend empfohlen, dieses Dienstprogramm erneut auszuführen. Dies soll sicherstellen, dass keine falschen Semantics mehr gefunden werden. </p>';
