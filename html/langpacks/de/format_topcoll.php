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
 * Strings for component 'format_topcoll', language 'de', version '4.1'.
 *
 * @package     format_topcoll
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsection'] = 'Abschnitt hinzufügen';
$string['arrow'] = 'Pfeil';
$string['bulb'] = 'Glühlampe';
$string['cachedef_activitymodulecountcache'] = 'Speichert die Anzahl der Teilnehmer/innen, die auf ein bestimmtes Modul in einem bestimmten Kurs zugreifen können.';
$string['cachedef_activitystudentrolescache'] = 'Speichert die Rollen der Teilnehmer/innen';
$string['cachedef_activitystudentscache'] = 'Speichert die IDs der Teilnehmer/innen für einen bestimmten Kurs';
$string['cachedef_activityusercreatedcache'] = 'Speichert die IDs von neuen Nutzer/innen für einen bestimmten Kurs';
$string['cannotgetactivitycacheslock'] = 'Die Sperre der Aktivitäts-Caches für die Kurs-ID {$a} kann nicht abgerufen werden.';
$string['center'] = 'Zentriert';
$string['cloud'] = 'Wolke';
$string['colourrule'] = 'Geben Sie bitte eine gültige RGB-Farbe (z.B. #336699) oder \'-\' für Standard ein.';
$string['columndynamic'] = 'Dynamisch';
$string['columnhorizontal'] = 'Waagerecht';
$string['columnvertical'] = 'Senkrecht';
$string['configurationheadingsub'] = 'Konfiguration';
$string['configurationheadingsubdesc'] = 'Konfigurationseinstellungen der Website';
$string['courseadditionalmoddatamaxstudents'] = 'Legen Sie die maximale Anzahl von Teilnehmer/innen in einem Kurs fest, für die "Zusätzliche Infos anzeigen" gelten soll';
$string['courseadditionalmoddatamaxstudentsdesc'] = 'Die Berechnung zusätzlicher Infos kann einige Zeit dauern, besonders bei großen Kursen. Deswegen können Sie hier die maximale Anzahl von Teilnehmer/innen im Kurs festlegen, damit die Funktionalität angezeigt werden kann. Bei einer größeren Anzahl werden die \'Zusätzlichen Infos\' unabhängig von den Kurseinstellungen NICHT berechnet uns NICHT angezeigt! Ein Wert von \'0\' bedeutet \'unbegrenzt\'. Hinweis: Die Caches werden gelöscht, wenn der Wert geändert wird.';
$string['courseadditionalmoddatastudentsinfo'] = 'Status für zusätzliche Infos';
$string['courseadditionalmoddatastudentsinfolimitednoshow'] = 'Zusätzliche Infos werden für die aktivierten Aktivitäten für {$a->students} Teilnehmer/innen NICHT angezeigt, da die maximale Anzahl {$a->maxstudents} überschritten ist, die administrativ in der Einstellung "courseadditionalmoddatamaxstudents" Für das Format "komprimierte Abschnitte" festgelegt wurde.';
$string['courseadditionalmoddatastudentsinfolimitedshow'] = 'Zusätzliche Infos werden für die aktivierten Aktivitäten für {$a->students} Teilnehmer/innen angezeigt, wenn die maximale Anzahl {$a->maxstudents} nicht überschritten wird. Der Wert wurde von den Administrator/innen  mit der Einstellung "courseadditionalmoddatamaxstudents" für das Format "komprimierte Abschnitte" festgelegt.';
$string['courseadditionalmoddatastudentsinfounlimited'] = 'Zusätzliche Infos werden für die aktivierten Aktivitäten für {$a} Teilnehmer/innen  angezeigt.';
$string['coursesectionactivityfurtherinformation'] = 'Weitere Infos der Kursseite';
$string['coursesectionactivityfurtherinformation_desc'] = 'Weitere Infoeinstellungen für Kursseite auf Website-Ebene';
$string['coursesectionactivityfurtherinformationassign'] = 'Aufgabeninfos anzeigen';
$string['coursesectionactivityfurtherinformationassigndesc'] = 'Im Kurs anzuzeigende Aufgabeninfos festlegen. Trainer/innen und Administrator/innen wird die Anzahl der Abgaben angezeigt.';
$string['coursesectionactivityfurtherinformationchoice'] = 'Abstimmungsinfos anzeigen';
$string['coursesectionactivityfurtherinformationchoicedesc'] = 'Im Kurs anzuzeigende Abstimmungsinfos festlegen.  Trainer/innen und Administrator/innen wird die Anzahl der Abgaben angezeigt.';
$string['coursesectionactivityfurtherinformationdata'] = 'Datenbankinfos anzeigen';
$string['coursesectionactivityfurtherinformationdatadesc'] = 'Im Kurs anzuzeigende Datenbankinfos festlegen.  Trainer/innen und Administrator/innen wird die Anzahl der Abgaben angezeigt.';
$string['coursesectionactivityfurtherinformationfeedback'] = 'Feedbackinfos anzeigen';
$string['coursesectionactivityfurtherinformationfeedbackdesc'] = 'Im Kurs anzuzeigende Feedbackinfos festlegen.  Trainer/innen und Administrator/innen wird die Anzahl der Abgaben angezeigt.';
$string['coursesectionactivityfurtherinformationforum'] = 'Foreninfo anzeigen';
$string['coursesectionactivityfurtherinformationforumdesc'] = 'Im Kurs anzuzeigende Foreninfos festlegen. Trainer/innen und Administrator/innen wird die Anzahl der Beiträge anzeigt, wenn die Bewertung des gesamten Forums aktiviert ist.';
$string['coursesectionactivityfurtherinformationlesson'] = 'Lektionsinfos anzeigen';
$string['coursesectionactivityfurtherinformationlessondesc'] = 'Im Kurs anzuzeigende Lektionsinfos festlegen. Trainer/innen und Administrator/innen wird die Anzahl der Abgaben angezeigt.';
$string['coursesectionactivityfurtherinformationquiz'] = 'Testinfos anzeigen';
$string['coursesectionactivityfurtherinformationquizdesc'] = 'Im Kurs anzuzeigende Testinfos festlegen. Trainer/innen und Administrator/innen wird die Anzahl der Abgaben angezeigt.';
$string['creatingsection'] = 'Neuer Abschnitt wird erstellt ...';
$string['ctreset'] = 'Rücksetzoptionen für komprimierte Abschnitte';
$string['ctreset_help'] = 'Die Einstellungen können auf die Standardwerte für komprimierte Abschnitte zurückgesetzt werden.';
$string['currentsection'] = 'Dieser Abschnitt';
$string['default'] = 'Standardmäßig - {$a}';
$string['defaultdisplayblocks'] = 'Blöcke zum Anzeigen';
$string['defaultdisplayblocks_desc'] = 'Wählen Sie die Blöcke aus, die in einem Kurs angezeigt werden sollen, der mit diesem Format erstellt wird. Eine Mehrfachauswahl bzw. eine Abwahl ist möglich, wenn Sie STRG bzw. CMD zusammen mit der Maus drücken. Hinweis: Diese Einstellung gilt nur bei der Kurserstellung und zu keinem anderen Zeitpunkt, z.B. beim Wechsel von einem anderen Format zu den komprimierten Abschnitten.';
$string['defaultdisplayblocksloc'] = 'Ort für den Block in der Anzeige';
$string['defaultdisplayblocksloc_desc'] = 'Wählen Sie den Ort für die ausgewählten Blöcke, um sie anzuzeigen.';
$string['defaultdisplayinstructions'] = 'Bedienhinweis';
$string['defaultdisplayinstructions_desc'] = 'Diese Option legt fest, ob ein kurzer Bedienhinweis angezeigt wird.';
$string['defaultheadingsub'] = 'Standardeinstellungen';
$string['defaultheadingsubdesc'] = 'Standardeinstellungen, die auf Kursebene überschrieben werden können';
$string['defaultlayoutcolumnorientation'] = 'Spaltenrichtung';
$string['defaultlayoutcolumnorientation_desc'] = 'Standardmäßige Spaltenrichtung:
<br>Dynamisch – Anzahl der Abschnitte pro "Zeile" wird an die Fenstergröße angepasst, die Einstellung "Spalte" wird derzeit nicht verwendet.
<br>Horizontal – Abschnitte gehen von links nach rechts.<br>Vertikal – Abschnitte gehen von oben nach unten.';
$string['defaultlayoutcolumns'] = 'Spaltenanzahl';
$string['defaultlayoutcolumns_desc'] = 'Die Spaltenanzahl kann von 1 bis 4 sein.';
$string['defaultlayoutelement'] = 'Inhalt der Abschnittstasten';
$string['defaultlayoutelement_desc'] = 'Die Layouteinstellung kann eine der folgenden sein:
<br />\'Standard\', wobei alles angezeigt wird.
<br />Kein \'Thema x\' / \'Woche x\' / \'Tag x\'.
<br />Keine Abschnittsnummer.
<br / >Kein \'Thema x\' / \'Woche x\' / \'Tag x\' und keine Abschnittsnummer.
<br />Kein \'Umschalten\'.
<br />Kein \'Umschalten\' und kein \'Thema x\' / \'Woche x \' / \'Tag x\'.
<br />Kein \'Umschalten\', kein \'Thema x\' / \'Woche x\' / \'Tag x\' und keine Abschnittsnummer.';
$string['defaultlayoutelement_descpositive'] = 'Die Layouteinstellung kann eine der folgenden sein:
<br />\'Umschalten\', \'Thema x\' / \'Woche x\' / \'Tag x\' und Abschnittsnummer.
<br />\'Umschalten\' und \'Thema x\' / \'Woche x\' / \'Tag x\'.
<br />\'Umschalten\' und Abschnittsnummer.
<br />\'Thema x\' / \'Woche x\' / \'Tag x\' und Abschnittsnummer.
<br />\'Umschalten‘.
<br />\'Thema x\' / \'Woche x\' / \'Tag x\'.
<br />Abschnittsnummer.
<br />Ohne Zusätze.';
$string['defaultlayoutstructure'] = 'Abschnittsformat';
$string['defaultlayoutstructure_desc'] = 'Die Struktureinstellung kann eine der folgenden sein:
<br />Thema
<br />Woche
<br />Aktuelle Woche zuerst
<br />Aktuelles Thema zuerst
<br />Tag';
$string['defaultonesection'] = 'Nur ein Abschnitt';
$string['defaultonesection_desc'] = 'Diese Option legt fest, dass immer nur ein Abschnitt angezeigt wird. Beim Bearbeiten des Kurses wird die Einstellung ignoriert, um Aktivitäten und Ressourcen bewegen zu können.';
$string['defaultonesectioniconfont'] = 'Icon Font für "Nur ein Abschnitt"';
$string['defaultonesectioniconfont_desc'] = 'Geben Sie die Icon-Font-Klasse an, die für das Link-Icon mit einem Abschnitt verwendet werden soll, d.h. FontAwesome-Icon-Klassen. Wenn leer, wird das Standardsymbol "Nur ein Abschnitt" im Verzeichnis "pix" des Formats verwendet.';
$string['defaultshowadditionalmoddata'] = 'Standardmäßiges \'Weitere Infos anzeigen\' im Kurs';
$string['defaultshowadditionalmoddatadesc'] = 'Wenn eine Aktivität auf Website-Ebene (unten) so eingestellt ist, dass zusätzliche Infos angezeigt werden, gibt diese Einstellung den Standardstatus der kursspezifischen Instanz davon an.';
$string['defaultshowsectionsummary'] = 'Abschnittsbeschreibung anzeigen, wenn zugeklappt';
$string['defaultshowsectionsummary_desc'] = 'Diese Option legt fest, ob die Abschnittsbeschreibungen angezeigt werden, auch wenn die Abschnitte zugeklappt sind.';
$string['defaulttgbgcolour'] = 'Hintergrundfarbe';
$string['defaulttgbgcolour_desc'] = 'Diese Option legt die Hintergrundfarbe als Hexadezimal-RGB fest.';
$string['defaulttgbghvrcolour'] = 'Hintergrundfarbe bei Mauskontakt';
$string['defaulttgbghvrcolour_desc'] = 'Diese Option legt die Hintergrundfarbe bei Mauskontakt als Hexadezimal-RGB fest.';
$string['defaulttgbghvropacity'] = 'Deckkraft der Hintergrundfarbe bei Mauskontakt';
$string['defaulttgbghvropacity_desc'] = 'Die Option legt die Deckkraft des Hintergrunds bei Mauskontakt zwischen 0 und 1 in 0.1-Abständen fest.';
$string['defaulttgbgopacity'] = 'Deckkraft der Hintergrundfarbe';
$string['defaulttgbgopacity_desc'] = 'Die Option legt die Deckkraft des Hintergrunds zwischen 0 und 1 in 0.1-Abständen fest.';
$string['defaulttgfgcolour'] = 'Textfarbe';
$string['defaulttgfgcolour_desc'] = 'Diese Option legt die Textfarbe als Hexadezimal-RGB fest.';
$string['defaulttgfghvrcolour'] = 'Textfarbe bei Mauskontakt';
$string['defaulttgfghvrcolour_desc'] = 'Die Option legt die Textfarbe bei Mauskontakt als Hexadezimal-RGB fest.';
$string['defaulttgfghvropacity'] = 'Deckkraft der Textfarbe bei Mauskontakt';
$string['defaulttgfghvropacity_desc'] = 'Diese Option legt die Deckkraft des Texts bei Mauskontakt zwischen 0 und 1 in 0.1-Abständen fest.';
$string['defaulttgfgopacity'] = 'Deckkraft der Textfarbe';
$string['defaulttgfgopacity_desc'] = 'Diese Option legt die Deckkraft des Texts zwischen 0 und 1 in 0.1-Abständen fest.';
$string['defaulttogglealignment'] = 'Textausrichtung';
$string['defaulttogglealignment_desc'] = 'Diese Option legt die Ausrichtung der Abschnittstitel fest, also links, zentriert oder rechts.';
$string['defaulttoggleallenabled'] = '"Alle umschalten" aktiviert';
$string['defaulttoggleallenabled_desc'] = 'Diese Option legt fest, ob "Alle umschalten" aktiviert werden soll.';
$string['defaulttoggleallhover'] = 'Symbol \'Alle\' bei Mauskontakt umschalten';
$string['defaulttoggleallhover_desc'] = 'Die Option legt fest, ob die Symbole für \'Alle aufklappen\' und \'Alle zuklappen\' bei Mauskontakt umschalten.';
$string['defaulttoggleborderradiusbl'] = 'Radius links unten';
$string['defaulttoggleborderradiusbl_desc'] = 'Die Option legt die Rundung der Abschnittstasten links unten fest.';
$string['defaulttoggleborderradiusbr'] = 'Radius rechts unten';
$string['defaulttoggleborderradiusbr_desc'] = 'Die Option legt die Rundung der Abschnittstasten rechts unten fest.';
$string['defaulttoggleborderradiustl'] = 'Radius links oben';
$string['defaulttoggleborderradiustl_desc'] = 'Die Option legt die Rundung der Abschnittstasten links oben fest.';
$string['defaulttoggleborderradiustr'] = 'Radius rechts oben';
$string['defaulttoggleborderradiustr_desc'] = 'Die Option legt die Rundung der Abschnittstasten rechts oben fest.';
$string['defaulttoggleiconfontclosed'] = 'Geschlossenes Umschalten für Icon Font';
$string['defaulttoggleiconfontclosed_desc'] = 'Wenn "defaulttoggleiconset" auf "Icon Font" gesetzt ist, gibt dies die Standard-CSS-Klassen an, die für das geschlossene Symbol verwendet werden sollen. Siehe FontAwesome-Icon-Klassen.';
$string['defaulttoggleiconfontopen'] = 'Umschalten "Icon Font" öffnen';
$string['defaulttoggleiconfontopen_desc'] = 'Wenn "defaulttoggleiconset" auf "Icon Font" gesetzt ist, gibt dies die Standard-CSS-Klassen an, die für das geöffnete Symbol verwendet werden sollen. Siehe die FontAwesome-Icon-Klassen.';
$string['defaulttoggleiconposition'] = 'Icon Position';
$string['defaulttoggleiconposition_desc'] = 'Die Option legt fest, ob  für das Icon links oder rechts vom Text sen soll.';
$string['defaulttoggleiconset'] = 'Symbol';
$string['defaulttoggleiconset_desc'] = '<table><tbody><tr><td>Arrow</td><td>{$a->arrow}</td></tr><tr><td>Bulb</td><td>{$a->bulb}</td></tr><tr><td>Cloud</td><td>{$a->cloud}</td></tr><tr><td>Eye</td><td>{$a->eye}</td></tr><tr><td>Folder</td><td>{$a->folder}</td></tr><tr><td>Ground Signal</td><td>{$a->groundsignal}</td></tr><tr><td>Light Emitting Diode</td><td>{$a->led}</td></tr><tr><td>Point</td><td>{$a->point}</td></tr><tr><td>Power</td><td>{$a->power}</td></tr><tr><td>Radio</td><td>{$a->radio}</td></tr><tr><td>Smiley</td><td>{$a->smiley}</td></tr><tr><td>Square</td><td>{$a->square}</td></tr><tr><td>Sun / Moon</td><td>{$a->sunmoon}</td></tr><tr><td>Switch</td><td>{$a->switch}</td></tr><tr><td>Icon font</td><td>{$a->tif}</td></tr></tbody></table>';
$string['defaulttoggleiconsize'] = 'Symbolgröße';
$string['defaulttoggleiconsize_desc'] = 'Symbolgröße: Small = 16px, Medium = 24px and Large = 32px, oder Icon Font: Small = 0.8em, Medium = 1.2em and Large = 1.8em.';
$string['defaulttogglepersistence'] = 'Schaltzustand merken';
$string['defaulttogglepersistence_desc'] = '\'An oder aus\'. Deaktivieren Sie diese Option, um die AJAX-Leistung zu steigern, aber die Umschaltauswahl von Nutzer/innen wird bei einer Seitenaktualisierung oder einem erneuten Besuch nicht gespeichert.<br />Hinweis: Wenn Sie die Persistenz deaktivieren, entfernen Sie bitte alle Zeilen, die \'topcoll_toggle_x\' im Feld \'name\' der Tabelle \'user_preferences\' enthalten. Wobei das "x" in "topcoll_toggle_x" eine Kurs-ID ist. Dies dient der Platzersparnis, wenn Sie nicht beabsichtigen, es wieder einzuschalten.';
$string['defaultuserpreference'] = 'Schaltzustand beim ersten Aufruf';
$string['defaultuserpreference_desc'] = 'Diese Option legt fest, ob Nutzer/innen beim ersten Aufruf eines Kurses standardmäßig alle Abschnitte geöffnet oder geschlossen angezeigt bekommen.';
$string['defaultviewsinglesectionenabled'] = '"Nur ein Abschnitt" aktiviert';
$string['defaultviewsinglesectionenabled_desc'] = 'Die Option legt fest, ob "Nur ein Abschnitt" aktiviert werden soll.';
$string['deletesection'] = 'Abschnitt löschen';
$string['displayinstructions'] = 'Bedienhinweis';
$string['displayinstructions_help'] = 'Diese Option legt fest, ob ein kurzer Hinweis zur Bedienung angezeigt wird.';
$string['donotshowdate'] = 'Datum nicht zeigen';
$string['donotshowdate_help'] = 'Datum nicht anzeigen, wenn eine wochenbasierte Struktur verwendet wird und "Standard verwenden" nicht angekreuzt ist.';
$string['duplicate'] = 'Duplizieren';
$string['duplicateconfirm'] = 'Möchten Sie den Abschnitt wirklich duplizieren? Dies kann je nach Anzahl der Ressourcen eine Weile dauern.';
$string['duplicating'] = 'Wird dupliziert …';
$string['editsection'] = 'Abschnitt bearbeiten';
$string['editsectionname'] = 'Abschnittstitel bearbeiten';
$string['em0_0'] = '0.0em';
$string['em0_1'] = '0.1em';
$string['em0_2'] = '0.2em';
$string['em0_3'] = '0.3em';
$string['em0_4'] = '0.4em';
$string['em0_5'] = '0.5em';
$string['em0_6'] = '0.6em';
$string['em0_7'] = '0.7em';
$string['em0_8'] = '0.8em';
$string['em0_9'] = '0.9em';
$string['em1_0'] = '1.0em';
$string['em1_1'] = '1.1em';
$string['em1_2'] = '1.2em';
$string['em1_3'] = '1.3em';
$string['em1_4'] = '1.4em';
$string['em1_5'] = '1.5em';
$string['em1_6'] = '1.6em';
$string['em1_7'] = '1.7em';
$string['em1_8'] = '1.8em';
$string['em1_9'] = '1.9em';
$string['em2_0'] = '2.0em';
$string['em2_1'] = '2.1em';
$string['em2_2'] = '2.2em';
$string['em2_3'] = '2.3em';
$string['em2_4'] = '2.4em';
$string['em2_5'] = '2.5em';
$string['em2_6'] = '2.6em';
$string['em2_7'] = '2.7em';
$string['em2_8'] = '2.8em';
$string['em2_9'] = '2.9em';
$string['em3_0'] = '3.0em';
$string['em3_1'] = '3.1em';
$string['em3_2'] = '3.2em';
$string['em3_3'] = '3.3em';
$string['em3_4'] = '3.4em';
$string['em3_5'] = '3.5em';
$string['em3_6'] = '3.6em';
$string['em3_7'] = '3.7em';
$string['em3_8'] = '3.8em';
$string['em3_9'] = '3.9em';
$string['em4_0'] = '4.0em';
$string['enableadditionalmoddata'] = 'Zusätzliche Infos aktivieren';
$string['enableadditionalmoddatadesc'] = 'Dies ist ein Schalter auf „Website-Ebene“, um die Aktivitätsinfos ein- oder auszuschalten. Es muss aktiviert sein, damit die entsprechenden Einstellungen auf Kursebene wirksam werden. Da diese Funktionalität rechenintensiv sein kann, wird dringend empfohlen, dass Sie vor der Verwendung auf einem Produktionssystem vollständige Tests durchführen. Hinweis: Löscht die Cache-Caches, wenn sie geändert werden.';
$string['errornosectioninfo'] = 'Das angegebene Thema hat keine Infos.';
$string['eye'] = 'Auge';
$string['feedbackavailable'] = 'Feedback verfügbar';
$string['folder'] = 'Verzeichnis';
$string['formatresponsive'] = 'Format responsiv';
$string['formatresponsive_desc'] = 'Aktivieren Sie, wenn Sie ein nicht responsives Theme verwenden und das Format wird sich an die Bildschirmgröße / das Gerät anpassen. Deaktivieren Sie, wenn Sie ein responsives Theme verwenden. Bootstrap 2.3.2 Unterstützung ist eingebaut, für andere Frameworks und Versionen, überschreiben die Methoden \'get_row_class ()\' und \'get_column_class ()\' in renderer.php.';
$string['formatsettings'] = 'Standardwerte für das Format';
$string['formatsettingsinformation'] = '<br />Klicken Sie auf das Symbol rechts, um die Einstellungen auf die Standardwerte zurückzusetzen.';
$string['four'] = '4';
$string['groundsignal'] = 'Massesignal';
$string['hidefromothers'] = 'Abschnitt verbergen';
$string['information'] = 'Infos';
$string['informationchanges'] = 'Änderungen';
$string['informationsettings'] = 'Einstellungen für Infos';
$string['informationsettingsdesc'] = 'Infos zum Format "komprimierte Abschnitte"';
$string['instructions'] = 'Hinweis: Ein Klick auf den Abschnittsnamen blendet den Inhalt ein oder aus.';
$string['large'] = 'Groß';
$string['layoutstructuredays'] = 'Tage';
$string['layoutstructuretopics'] = 'Themen';
$string['layoutstructureweeks'] = 'Wochen';
$string['led'] = 'LED';
$string['left'] = 'Links';
$string['love'] = 'Liebe';
$string['maincoursepage'] = 'Kursübersicht';
$string['markedthissection'] = 'Dieser Abschnitt ist als aktueller Abschnitt markiert';
$string['markthissection'] = 'Markieren Sie diesen Abschnitt als den aktuellen Abschnitt';
$string['medium'] = 'Mittel';
$string['newsectionname'] = 'Neuer Titel für Abschnitt {$a}';
$string['numbersections'] = 'Anzahl der Abschnitte';
$string['off'] = 'Aus';
$string['on'] = 'An';
$string['one'] = '1';
$string['onesection'] = 'Nur ein Abschnitt';
$string['onesection_help'] = 'Diese Option legt fest, dass immer nur ein Abschnitt angezeigt wird. Beim Bearbeiten des Kurses wird die Einstellung ignoriert, um Aktivitäten und Ressourcen bewegen zu können.';
$string['page-course-view-topcoll'] = 'Jede Kurshauptseite im Format \'komprimierte Abschnitte\'';
$string['page-course-view-topcoll-x'] = 'Jede Kursseite im Format \'komprimierte Abschnitte\'';
$string['pluginname'] = 'Komprimierte Abschnitte';
$string['point'] = 'Punkt';
$string['power'] = 'Plus / Minus';
$string['privacy:metadata:preference:toggle'] = 'Auf-/Zuklappzustand innerhalb der Kurse';
$string['privacy:request:preference:toggle'] = 'Für den Kurs mit der ID "{$a->name}" ist "{$a->value}" gespeichert, d.h. der Zustand ist "{$a->decoded}".';
$string['progresscounter'] = 'Aktivitäten werden dupliziert ({$a->current}/{$a->size})';
$string['progressfull'] = 'Abschnitt wird dupliziert ....';
$string['radio'] = 'Radiobutton';
$string['readme_desc'] = 'Weitere Infos zum Kursformat \'komprimierte Abschnitte\' finden Sie unter \'{$a->url}\' .';
$string['readme_title'] = 'Weitere Infos';
$string['rebuildcoursecache'] = 'Kurscache neu erstellen';
$string['resetactivitymeta'] = 'Zusätzliche Modulinfo';
$string['resetactivitymeta_help'] = 'Zusätzliche Modulinfo zurücksetzen, um den Standardwert für die Website einzustellen.';
$string['resetallactivitymeta'] = 'Alle zusätzlichen Modulinfos';
$string['resetallactivitymeta_help'] = 'Alle zusätzliche Modulinfos zurücksetzen, um die jeweiligen Standardwerte für die Website einzustellen.';
$string['resetallcolour'] = 'Farben';
$string['resetallcolour_help'] = 'Die Einstellungen für Farben und Transparenz werden auf die Standardwerte der Website zurückgesetzt.';
$string['resetalldisplayinstructions'] = 'Bedienhinweis';
$string['resetalldisplayinstructions_help'] = 'Die Einstellung für die Anzeige des Bedienhinweises wird auf den Standardwert der Website zurückgesetzt.';
$string['resetallgrp'] = 'Alle zurücksetzen:';
$string['resetalllayout'] = 'Layouts';
$string['resetalllayout_help'] = 'Alle Einstellungen für das Layoutelement, wie Struktur, Spalten, alles umschalten, nur ein Abschnitt, Symbolposition und die angezeigte Abschnittsbeschreibung, werden auf die Standardwerte der Website zurückgesetzt.';
$string['resetalltogglealignment'] = 'Ausrichtung';
$string['resetalltogglealignment_help'] = 'Die Einstellung für die Ausrichtung des Abschnittstitels wird auf den Standardwert der Website zurückgesetzt.';
$string['resetalltoggleiconset'] = 'Symbol';
$string['resetalltoggleiconset_help'] = 'Die Einstellungen für das Symbol werden auf die Standardwerte der Website zurückgesetzt.';
$string['resetcolour'] = 'Farbe';
$string['resetcolour_help'] = 'Die Einstellungen für Farben und Transparenz werden auf die Standardwerte zurückgesetzt.';
$string['resetdisplayinstructions'] = 'Bedienhinweis';
$string['resetdisplayinstructions_help'] = 'Die Einstellung für die Anzeige des Bedienhinweises wird auf den Standardwert der Website zurückgesetzt.';
$string['resetgrp'] = 'Zurücksetzen:';
$string['resetlayout'] = 'Inhalt';
$string['resetlayout_help'] = 'Alle Einstellungen für das Layoutelement, wie Struktur, Spalten, alles umschalten, nur ein Abschnitt, Symbolposition und die angezeigte Abschnittsbeschreibung, werden auf die Standardwerte der Website zurückgesetzt.';
$string['resettogglealignment'] = 'Ausrichtung';
$string['resettogglealignment_help'] = 'Die Einstellung für die Ausrichtung des Abschnittstitels wird auf den Standardwert der Website zurückgesetzt.';
$string['resettoggleiconset'] = 'Symbol';
$string['resettoggleiconset_help'] = 'Die Einstellungen für das Symbol werden auf die Standardwerte der Website zurückgesetzt.';
$string['right'] = 'Rechts';
$string['sctcloseall'] = 'Alle {$a} zuklappen';
$string['sctopenall'] = 'Alle {$a} öffnen';
$string['section0name'] = 'Allgemein';
$string['sectionname'] = 'Abschnitt';
$string['setcolour'] = 'Farbe';
$string['setcolour_help'] = 'Farbeinstellung für Text, Hintergrund und Hintergrund bei Mauskontakt';
$string['setlayout'] = 'Layout festlegen';
$string['setlayout_all'] = 'Umschalten, \'Thema x\' / \'Woche x\' / \'Tag x\' und Abschnittsnummer';
$string['setlayout_default'] = 'Standard';
$string['setlayout_help'] = 'Auswahl der Informationen, die zusätzlich zum Abschnittstitel angezeigt werden sollen.';
$string['setlayout_no_additions'] = 'Keine Zusätze';
$string['setlayout_no_section_no'] = 'Keine Abschnittsnummer';
$string['setlayout_no_toggle_section_x'] = 'Kein Abschnitt x';
$string['setlayout_no_toggle_section_x_section_no'] = 'Kein Abschnitt x, keine Abschnittsnummer';
$string['setlayout_no_toggle_word'] = 'Kein Umschalten';
$string['setlayout_no_toggle_word_toggle_section_x'] = 'Kein Umschalten, kein Abschnitt x';
$string['setlayout_no_toggle_word_toggle_section_x_section_no'] = 'Kein Umschalten, kein Abschnitt x, keine Abschnittsnummer';
$string['setlayout_section_number'] = 'Abschnittsnummer';
$string['setlayout_toggle_section_x'] = '\'Thema x\' / \'Woche x\' / \'Tag x\'';
$string['setlayout_toggle_section_x_section_number'] = '\'Thema x\' / \'Woche x\' / \'Tag x\', Abschnittsnummer';
$string['setlayout_toggle_word'] = 'Umschalten';
$string['setlayout_toggle_word_section_number'] = 'Umschalten, Abschnittsnummer';
$string['setlayout_toggle_word_section_x'] = 'Umschalten, \'Thema x\' / \'Woche x\' / \'Tag x\'';
$string['setlayoutcolumnorientation'] = 'Spaltenrichtung festlegen';
$string['setlayoutcolumnorientation_help'] = 'Dynamisch - die Anzahl der Abschnitte pro \'Reihe\' passt sich automatisch an die Fensterbreite an. \'Spalten\' wird nicht benutzt.<br>
Senkrecht - Abschnitte werden von oben nach unten angeordnet<br>
Waagerecht - Abschnitte werden von links nach rechts angeordnet';
$string['setlayoutcolumns'] = 'Spalten';
$string['setlayoutcolumns_help'] = 'Wie viele Spalten sollen verwendet werden?';
$string['setlayoutelements'] = 'Inhalt der Abschnittstasten';
$string['setlayoutelements_help'] = 'Welche Informationen sollen auf den Abschnittstasten angezeigt werden?';
$string['setlayoutstructure'] = 'Struktur';
$string['setlayoutstructure_help'] = 'Diese Option legt das Abschnittsformat für den Kurs fest.

Thema  - Jeder Abschnitt ist ein Thema in der Reihenfolge der Abschnittsnummer.

Woche  - Jeder Abschnitt ist eine Woche. Angezeigt werden Titel und Anfangs- und Ende-Datum der Woche.

Aktuelle Woche zuerst  - wie Wochenformat, aber die aktuelle Woche wird  ganz oben dargestellt.

Aktuelles Thema zuerst  - wie Themenformat, aber das aktuelle Thema wird ganz oben dargestellt.

Tag  - Jeder Abschnitt wird als Tag dargestellt, beginnend mit dem Startdatum des Kurses. Alle weiteren Tage sind aufsteigend sortiert.';
$string['setlayoutstructurecurrenttopicfirst'] = 'Thema - aktuelles Thema zuerst';
$string['setlayoutstructureday'] = 'Tag';
$string['setlayoutstructurelatweekfirst'] = 'Woche - aktuelle Woche zuerst';
$string['setlayoutstructuretopic'] = 'Thema';
$string['setlayoutstructureweek'] = 'Woche';
$string['setshowsectionsummary'] = 'Abschnittsbeschreibung anzeigen, wenn zugeklappt';
$string['setshowsectionsummary_help'] = 'Diese Option legt fest, ob die Abschnittsbeschreibungen angezeigt werden, auch wenn die Abschnitte zugeklappt sind.';
$string['settings'] = 'Einstellungen';
$string['settingssettings'] = 'Einstellungen';
$string['settingssettingsdesc'] = 'Einstellungen zum Format "komprimierte Abschnitte"';
$string['settogglealignment'] = 'Textausrichtung';
$string['settogglealignment_help'] = 'Der Abschnittstitel kann links, zentriert oder rechts angezeigt werden.';
$string['settoggleallenabled'] = '"Alle umschalten" aktiviert';
$string['settoggleallenabled_help'] = '"Alle anzeigen" ist aktiviert.';
$string['settoggleallhover'] = 'Symbol \'Alle\' bei Mauskontakt umschalten';
$string['settoggleallhover_help'] = 'Die Option legt fest, ob die Symbole für \'Alle aufklappen\' und \'Alle zuklappen\' bei Mauskontakt umschalten.';
$string['settogglebackgroundcolour'] = 'Hintergrundfarbe';
$string['settogglebackgroundcolour_help'] = 'Die Option legt die Hintergrundfarbe fest.';
$string['settogglebackgroundhovercolour'] = 'Hintergrundfarbe bei Mauskontakt';
$string['settogglebackgroundhovercolour_help'] = 'Die Option legt die Hintergrundfarbe bei Mauskontakt fest.';
$string['settogglebackgroundhoveropacity'] = 'Deckkraft der Hintergrunds bei Mauskontakt';
$string['settogglebackgroundhoveropacity_help'] = 'Die Option legt die Deckkraft des Hintergrunds bei Mauskontakt zwischen 0 und 1 in 0.1-Abständen fest.';
$string['settogglebackgroundopacity'] = 'Deckkraft des Hintergrunds';
$string['settogglebackgroundopacity_help'] = 'Die Option legt die Deckkraft des Hintergrunds zwischen 0 und 1 in 0.1-Abständen fest.';
$string['settoggleforegroundcolour'] = 'Textfarbe';
$string['settoggleforegroundcolour_help'] = 'Die Option legt die Textfarbe fest.';
$string['settoggleforegroundhovercolour'] = 'Textfarbe bei Mauskontakt';
$string['settoggleforegroundhovercolour_help'] = 'Die Option legt die Textfarbe bei Mauskontakt fest.';
$string['settoggleforegroundhoveropacity'] = 'Deckkraft der Textfarbe bei Mauskontakt';
$string['settoggleforegroundhoveropacity_help'] = 'Die Option legt die Deckkraft der Textfarbe bei Mauskontakt zwischen 0 und 1 in 0.1-Abständen fest.';
$string['settoggleforegroundopacity'] = 'Deckkraft der Textfarbe';
$string['settoggleforegroundopacity_help'] = 'Die Option legt die Deckkraft der Textfarbe zwischen 0 und 1 in 0.1-Abständen fest.';
$string['settoggleiconfontclosed'] = 'Umschalten "Icon Font" schließen';
$string['settoggleiconfontclosed_help'] = 'Wenn \'toggleiconset\' auf \'Icon font\' gesetzt ist, gibt dies die Standard-CSS-Klassen an, die für das geschlossene Symbol verwendet werden sollen. Siehe die FontAwesome-Icon-Klassen. Wenn auf \'-\' gesetzt, wird die Standardeinstellung verwendet.';
$string['settoggleiconfontopen'] = 'Umschalten "Icon Font" öffnen';
$string['settoggleiconfontopen_help'] = 'Wenn \'toggleiconset\' auf \'Icon font\' gesetzt ist, gibt dies die Standard-CSS-Klassen an, die für das geöffnete Symbol verwendet werden sollen. Siehe die FontAwesome-Icon-Klassen. Wenn auf \'-\' gesetzt, wird die Standardeinstellung verwendet.';
$string['settoggleiconposition'] = 'Symbolposition';
$string['settoggleiconposition_help'] = 'Die Option legt fest, ob das Umschalticon links oder rechts vom Text dargestellt wird.';
$string['settoggleiconset'] = 'Symbolauswahl';
$string['settoggleiconset_help'] = 'Die Option legt fest, welche Symbolauswahl verwendet wird.';
$string['setviewsinglesectionenabled'] = '"Nur ein Abschnitt" aktiviert';
$string['setviewsinglesectionenabled_help'] = 'Die Option legt fest, dass "Nur ein Abschnitt" ist aktiviert.';
$string['showadditionalmoddata'] = 'Zusätzliche Infos für {$a} im Kurs anzeigen';
$string['showadditionalmoddata_help'] = 'Ermöglichen Sie allen Nutzer/innen, die Aktivitätsfrist anzuzeigen, und Trainer/innen, die Anzahl der Aktivitätseinreichungen auf der Kursseite anzuzeigen.';
$string['showfromothers'] = 'Abschnitt zeigen';
$string['sidepost'] = 'Nach';
$string['sidepre'] = 'Vor';
$string['small'] = 'Klein';
$string['smiley'] = 'Smiley';
$string['square'] = 'Quadrat';
$string['sunmoon'] = 'Sonne / Mond';
$string['switch'] = 'Schalter';
$string['three'] = '3';
$string['tif'] = 'Icon Font';
$string['toggleclose'] = 'Schließen';
$string['toggleopen'] = 'Öffnen';
$string['topcoll:changeactivitymeta'] = 'Aktivitätsmeta ändern oder zurücksetzen';
$string['topcoll:changecolour'] = 'Farben der Abschnittstasten ändern';
$string['topcoll:changelayout'] = 'Layout der Abschnittstasten ändern';
$string['topcoll:changetogglealignment'] = 'Ausrichtung der Abschnittstasten ändern';
$string['topcoll:changetoggleiconset'] = 'Symbolauswahl der Abschnittstasten ändern';
$string['topcollall'] = 'Abschnitte.';
$string['topcollclosed'] = 'Alle zuklappen';
$string['topcollopened'] = 'Alle aufklappen';
$string['topcollsidewidthlang'] = 'en-28px';
$string['topcolltoggle'] = 'Umschalten';
$string['two'] = '2';
$string['versionalpha'] = 'Alpha-Version - Enthält mit ziemlicher Sicherheit Fehler. Dies ist eine Entwicklungsversion nur für Entwickler! Denken Sie nicht einmal daran, auf einem Produktionsserver zu installieren!';
$string['versionbeta'] = 'Beta-Version - Enthält wahrscheinlich Fehler. Nur für Administrator/innen auf einem Testserver zum Testen.';
$string['versioninfo'] = 'Release {$a->release}, Version {$a->version} auf Moodle {$a->moodle}. Gemacht mit {$a->love} in Großbritannien.';
$string['versionrc'] = 'Release Candidate Version - Kann Fehler enthalten. Überprüfen Sie die Version vollständig auf einem Testserver, bevor Sie einen Produktionsserver in Betracht ziehen.';
$string['versionstable'] = 'Stabile Version - Könnte Fehler enthalten. Überprüfen Sie die Version auf einen Testserver, bevor Sie ihn auf Ihrem Produktionsserver installieren.';
$string['viewonly'] = 'Nur \'{$a->sectionname}\' anzeigen';
$string['xanswered'] = '{$a->completed} haben beantwortet';
$string['xattempted'] = '{$a->completed} haben versucht';
$string['xcontributed'] = '{$a->completed} haben beigetragen';
$string['xofyanswered'] = '{$a->completed} von {$a->participants} haben beantwortet';
$string['xofyattempted'] = '{$a->completed} von {$a->participants} haben versucht';
$string['xofycontributed'] = '{$a->completed} von {$a->participants} haben beigetragen';
$string['xofyposted'] = '{$a->completed} von {$a->participants} haben gepostet';
$string['xofysubmitted'] = '{$a->completed} von {$a->participants} haben abgegeben';
$string['xposted'] = '{$a->completed} haben gepostet';
$string['xsubmitted'] = '{$a->completed} haben abgegeben';
$string['xungraded'] = '{$a} unbewertet';
