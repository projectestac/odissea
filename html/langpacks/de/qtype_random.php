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
 * Strings for component 'qtype_random', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   qtype_random
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configselectmanualquestions'] = 'Kann der Zufallsfragen-Typ eine manuell zu bewertende Frage wählen, wenn er eine Frage aus einer Kategorie zufällig wählt?';
$string['includingsubcategories'] = 'Enthaltene Unterkategorien';
$string['pluginname'] = 'Zufall';
$string['pluginnameediting'] = 'Zufallsfrage bearbeiten';
$string['pluginname_help'] = 'Eine Zufallsfrage ist kein Fragetyp als solcher, sondern sie ist ein Weg zur Einbeziehung einer zufällig gewählten Frage aus einer bestimmten Kategorie in einem Test.';
$string['privacy:metadata'] = 'Der Zufalls Fragentyp speichert keine personenbezogenen Daten';
$string['randomqname'] = 'Zufall ({$a})';
$string['randomqnamefromtop'] = 'Fehlerhafte Zufallsfrage! Löschen Sie diese Frage.';
$string['randomqnamefromtoptags'] = 'Fehlerhafte Zufallsfrage! Diese Frage sollten Sie löschen.';
$string['randomqnametags'] = 'Zufällig ({$a->category}, Tags: {$a->tags})';
$string['randomqplusname'] = 'Zufall ({$a} und Unterkategorien)';
$string['randomqplusnamecourse'] = 'Zufällig (alle Kategorien in diesem Kurs)';
$string['randomqplusnamecoursecat'] = 'Zufällig (alle Kategorien im Kursbereich {$a})';
$string['randomqplusnamecoursecattags'] = 'Zufällig (jede Kategorie innerhalb der Kurskategorie {$a->category}, Tags: {$a->tags})';
$string['randomqplusnamecoursetags'] = 'Zufällig (jede Kategorie im Kurs, Tags: {$a->tags})';
$string['randomqplusnamemodule'] = 'Zufällig (Alle Kategorien für diesen Test)';
$string['randomqplusnamemoduletags'] = 'Zufällig (jede Kategorie im Test, Tags: {$a->tags})';
$string['randomqplusnamesystem'] = 'Zufällig (Alle Kategorie auf der Website)';
$string['randomqplusnamesystemtags'] = 'Zufällig (jede Kategorie der Website, Tags: {$a->tags})';
$string['randomqplusnametags'] = 'Zufällig ({$a->category} und Unterkategorien, Tags: {$a->tags})';
$string['selectedby'] = '{$a->questionname} ausgewählt von {$a->randomname}';
$string['selectmanualquestions'] = 'Zufallsfragen können auf manuell bewerteten Fragen basieren';
$string['taskunusedrandomscleanup'] = 'Nicht verwendete Zufallsfragen entfernen';
