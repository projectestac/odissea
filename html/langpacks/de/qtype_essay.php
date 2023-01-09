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
 * Strings for component 'qtype_essay', language 'de', version '3.11'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Akzeptierte Dateitypen';
$string['acceptedfiletypes_help'] = 'Die akzeptierten Dateitypen  können durch Eingabe einer Liste von Dateiendungen eingeschränkt werden. Wenn das Feld leer bleibt, sind alle Dateitypen akzeptiert.';
$string['allowattachments'] = 'Anhänge erlauben';
$string['answerfiles'] = 'Antwortdateien';
$string['answertext'] = 'Antworttext';
$string['attachedfiles'] = 'Anhänge: {$a}';
$string['attachmentsoptional'] = 'Anhänge sind optional';
$string['attachmentsrequired'] = 'Anhänge erforderlich';
$string['attachmentsrequired_help'] = 'Die Option legt die Mindestzahl von Dateianhängen fest, damit eine Antwort als bewertbar erkannt wird.';
$string['err_maxminmismatch'] = 'Die maximale Anzahl an Wörtern muss größer sein als die minimale Anzahl.';
$string['err_maxwordlimit'] = 'Die maximale Anzahl an Wörtern ist aktiviert, aber es ist kein Wert eingetragen.';
$string['err_maxwordlimitnegative'] = 'Die maximale Anzahl an Wörtern kann keine negative Zahl sein.';
$string['err_minwordlimit'] = 'Die Mindestanzahl an Wörtern ist aktiviert, aber es ist kein Wert eingetragen.';
$string['err_minwordlimitnegative'] = 'Die Mindestanzahl an Wörtern kann keine negative Zahl sein.';
$string['formateditor'] = 'HTML-Editor';
$string['formateditorfilepicker'] = 'HTML-Editor mit Dateiauswahl';
$string['formatmonospaced'] = 'Unformatierter Text, Schriftart mit fester Laufweite';
$string['formatnoinline'] = 'Kein Online-Text';
$string['formatplain'] = 'Unformatierter Text';
$string['graderinfo'] = 'Information zur Bewertung';
$string['graderinfoheader'] = 'Bewerterinformation';
$string['maxbytes'] = 'Maximale Dateigröße';
$string['maxwordlimit'] = 'Maximale Anzahl von Wörtern';
$string['maxwordlimit_help'] = 'Wenn die Antwort eine Texteingabe durch Teilnehmer/innen erfordert, ist dies die maximale Anzahl von Wörtern, die jeder eingeben darf.';
$string['maxwordlimitboundary'] = 'Diese Frage darf mit höchstens {$a->limit} Wörtern beantwortet werden, du versuchst {$a->count} Wörter einzureichen. Bitte formuliere deine Antwort kürzer und versuche es erneut.';
$string['minwordlimit'] = 'Minimale Anzahl von Wörtern';
$string['minwordlimit_help'] = 'Wenn die Antwort eine Texteingabe durch Teilnehmer/innen erfordert, ist dies die minimale Anzahl von Wörtern, die jeder eingeben muss.';
$string['minwordlimitboundary'] = 'Die Antwort auf diese Frage muss mindestens {$a->limit} Wörter lang sein, du versuchst {$a->count} Wörter einzureichen. Bitte formuliere deine Antwort länger und versuche es erneut.';
$string['mustattach'] = 'Wenn \'Kein Textfeld\' ausgewählt wurde oder Antworten optional sind, muss mindestens ein Dateianhang zugelassen werden.';
$string['mustrequire'] = 'Wenn \'Kein Textfeld\' ausgewählt wurde oder Antworten optional sind, ist mindestens ein Dateianhang erforderlich.';
$string['mustrequirefewer'] = 'Sie können nicht mehr Dateianhänge als erforderlich festlegen als zugelassen sind.';
$string['nlines'] = '{$a} Zeilen';
$string['nonexistentfiletypes'] = 'Folgende Typen werden nicht erkannt: {$a}';
$string['pluginname'] = 'Freitext';
$string['pluginname_help'] = 'Teilnehmer/innen laden zur Beantwortung der Frage eine oder mehrere Dateien hoch oder erstellen einen Text. Eine Antwortvorlage kann bereitgestellt werden. Die Bewertung erfolgt durch die Trainer/innen manuell und wird danach den Teilnehmer/innen angezeigt.';
$string['pluginnameadding'] = 'Freitextfrage hinzufügen';
$string['pluginnameediting'] = 'Freitextfrage bearbeiten';
$string['pluginnamesummary'] = 'Eine Freitextantwort erlaubt eine Antwort als Datei und/oder als Onlinetext. Diese Antwort muss manuell bewertet werden.';
$string['privacy:metadata'] = 'Das Plugin "Essay-Frageformat" erlaubt es Frageautor/innen, standardmäßige Optionen als Nutzereinstellungen zu setzen.';
$string['privacy:preference:attachments'] = 'Anzahl erlaubter Anhänge';
$string['privacy:preference:attachmentsrequired'] = 'Anzahl notwendiger Anhänge';
$string['privacy:preference:defaultmark'] = 'Die Standardmarkierung wird für eine bestimmte Frage gesetzt.';
$string['privacy:preference:maxbytes'] = 'Maximale Dateigröße';
$string['privacy:preference:responsefieldlines'] = 'Anzahl von Zeilen, die die Größe des Textbereichs angibt';
$string['privacy:preference:responseformat'] = 'Wie ist das Antwortformat (HTML-Editor, unformatierter Text, ...)?';
$string['privacy:preference:responserequired'] = 'Die Option legt fest, ob eine Texteingabe notwendig oder optional ist.';
$string['responsefieldlines'] = 'Größe des Eingabefeldes';
$string['responseformat'] = 'Antwortformat';
$string['responseisrequired'] = 'Teilnehmer/in muss Text eingeben';
$string['responsenotrequired'] = 'Texteingabe ist optional';
$string['responseoptions'] = 'Antwortoptionen';
$string['responserequired'] = 'Texteingabe erforderlich';
$string['responsetemplate'] = 'Antwortvorlage';
$string['responsetemplate_help'] = 'Dieser Text wird Teilnehmer/innen im Antwortfeld angezeigt, wenn diese die Frage beantworten möchten.';
$string['responsetemplateheader'] = 'Antwortvorlage';
$string['wordcount'] = 'Wortanzahl: {$a}';
$string['wordcounttoofew'] = 'Wortanzahl: {$a->count},  kleiner als die erforderlichen {$a->limit} Wörter.';
$string['wordcounttoomuch'] = 'Wortanzahl: {$a->count}, größer als die erlaubten {$a->limit} Wörter.';
