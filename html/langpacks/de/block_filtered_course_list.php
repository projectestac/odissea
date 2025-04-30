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
 * Strings for component 'block_filtered_course_list', language 'de', version '4.4'.
 *
 * @package     block_filtered_course_list
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcourses'] = 'Manager/in sieht alle Kurse.';
$string['blockname'] = 'Gefilterte Kursliste';
$string['catrubrictpl'] = 'Kategorie Rubrik Vorlage';
$string['catseparator'] = 'Kategorie Trennzeichen';
$string['completedcourses'] = 'Abgeschlossene Kurse';
$string['configcatrubrictpl'] = 'Verwenden Sie diese Einstellung, um ein Muster für die Anzeige von Rubriken beim Filtern nach Kategorien festzulegen. Die folgenden Ersatz-Token sind verfügbar: NAME, IDNUMBER, PARENT, ANCESTRY. Sie können die Ausgabe eines beliebigen Token abschneiden, indem Sie eine Zeichenlänge in geschweiften Klammern anhängen. (z.B. NAME{20}). Eine Ellipse wird hinzugefügt. <br /><br />Vollständige Details unter <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki</a>.';
$string['configcatseparator'] = 'Trennzeichen, die zwischen den Kategorienamen verwendet werden sollen, wenn die Kategorie ANCESTRY in Kategorie Rubrik Vorlage verwendet wird.';
$string['configcoursenametpl'] = 'Verwenden Sie diese Einstellung, um ein Muster für die Anzeige eines Kursnamens festzulegen. Die folgenden Ersatz-Token sind verfügbar: FULLNAME, SHORTNAME, IDNUMBER und CATEGORY. Sie können die Ausgabe eines beliebigen Token abschneiden, indem Sie eine Zeichenlänge in geschweiften Klammern anhängen. (z.B. NAME{20}). Eine Ellipse wird hinzugefügt. <br /><br />Vollständige Details unter <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki</a>.';
$string['configexternalfilters'] = 'Verwenden Sie den Bezeichner in Klammern, um den Filter innerhalb des Textfeldes der Filterkonfiguration zu referenzieren. Informationen zur Konfiguration eines externen Filters finden Sie in dem Plugin, das ihn bereitstellt.';
$string['configfilters'] = 'Geben Sie einen Filter pro Zeile ein, indem Sie vertikale Balken verwenden, um die Filterelemente zu trennen. Filtertypen sind: <i>category</i>, <i>shortname</i>, <i>regex</i>, <i>idnumber</i>, <i>completion</i>, <i>starren</i>, <i>enrolment</i> und <i>generic</i>. <br /><br />Vollständige Details unter <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax</a>.';
$string['confighideallcourseslink'] = 'Verbergen Sie den Link "Alle Kurse" am unteren Rand des Blocks. <br>Link ausblenden hat keinen Einfluss auf die Ansicht eines Managers.';
$string['confighidefromguests'] = 'Verbergen Sie den Block vor Gästen und anonymen Besuchern.';
$string['confighideothercourses'] = 'Verstecken Sie die Rubrik "Andere Kurse" im Block.';
$string['configmanagerview'] = 'Was sollte ein Manager im Kurslistenblock sehen? Beachten Sie, dass Manager, die nicht in einem Kurs eingeschrieben sind, weiterhin die generische Liste sehen.';
$string['configmaxallcourse'] = 'Auf einer Website mit nur einer Kategorie, können Manager und Gäste alle Kurse sehen, <br />aber oberhalb dieser Nummer sehen sie stattdessen einen Kategorie-Link. <br />[Wählen Sie eine ganze Zahl zwischen 0 und 999.]';
$string['configpersistentexpansion'] = 'Erinnern Sie sich an die Zustände der Rubrikenerweiterung innerhalb einer Browsersitzung.';
$string['configprimarysort'] = 'Innerhalb einer Rubrik werden Kurse nach diesem Feld sortiert. Wählen Sie "Sortierreihenfolge", um Kurse in der gleichen Reihenfolge anzuzeigen, wie sie in der Kursverwaltungsoberfläche angezeigt wird.';
$string['configsecondarysort'] = 'Innerhalb einer Rubrik werden Kurse sekundär nach diesem Feld sortiert.';
$string['configtitle'] = 'Block-Titel';
$string['coursenametpl'] = 'Kursname-Vorlage';
$string['courses'] = 'Kurse';
$string['courseswithxenrolment'] = 'Kurse mit {$a} Einschreibungen';
$string['defaultfilters'] = 'Kategorie | eingeklappt | 0 (oberste Ebene) | 0 (alle Nachkommen)';
$string['externalfilters'] = 'Externe Filter';
$string['filtered_course_list:addinstance'] = 'Neuen Blocks der gefilterten Kursliste hinzufügen';
$string['filtered_course_list:myaddinstance'] = 'Neuen Block der gefilterten Kursliste zum Dashboard hinzufügen';
$string['filters'] = 'Filter-Konfiguration';
$string['filters_help'] = 'Geben Sie einen Filter pro Zeile ein, indem Sie vertikale Balken verwenden, um die Filterelemente zu trennen. Filtertypen sind: <i>categorie</i>, <i>shortname</i>, <i>regex</i>, <i>idnumber</i>, <i>completion</i>, <i>starren</i>, <i>enrolment</i> und <i>generic</i>. <br /><br />Vollständige Details unter <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax</a>.';
$string['hideallcourseslink'] = 'Link "Alle Kurse" ausblenden';
$string['hidefromguests'] = 'Für Gäste ausblenden';
$string['hideothercourses'] = 'Andere Kurse ausblenden';
$string['managerview'] = 'Manager-Ansicht';
$string['maxallcourse'] = 'Max für eine einzelne Kategorie';
$string['othercourses'] = 'Andere Kurse';
$string['owncourses'] = 'Manager/in sieht eigene Kurse';
$string['persistentexpansion'] = 'Ständige Expansion';
$string['pluginname'] = 'Gefilterte Kursliste';
$string['primarysort'] = 'Primäre Sortierung';
$string['primaryvector'] = 'Primärer Sortiervektor';
$string['privacy:metadata'] = 'Der Block Gefilterte Kursliste zeigt Informationen über Kursanmeldungen an, bewirkt oder speichert aber keine Daten selbst. Alle Einschreibungen werden von anderen Moodle-Systemen verwaltet.';
$string['secondarysort'] = 'Sekundäre Sortierung';
$string['secondaryvector'] = 'Sekundäre Sortiervektoren';
$string['starredcourses'] = 'Favorisierte Kurse';
$string['top'] = 'Top';
