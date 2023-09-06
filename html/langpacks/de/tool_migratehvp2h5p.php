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
 * Strings for component 'tool_migratehvp2h5p', language 'de', version '4.1'.
 *
 * @package     tool_migratehvp2h5p
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempted'] = 'Teilnehmer/innen mit Versuchen';
$string['cannot_migrate'] = 'Aktivität kann nicht migriert werden';
$string['contenttype'] = 'Inhaltstyp';
$string['copy2cb'] = 'Sollen diese Inhalte zum Inhaltsspeicher hinzugefügt werden?';
$string['copy2cb_no'] = 'Nein, sie sollen nur in der Aktivität angelegt werden.';
$string['copy2cb_yeswithlink'] = 'Ja, und in der Aktivität soll ein Link auf diese Dateien verwendet werden.';
$string['copy2cb_yeswithoutlink'] = 'Ja, aber in der Aktivität soll eine Kopie verwendet werden (Änderungen im Inhaltsspeicher wirken sich nicht auf die Aktivität aus).';
$string['error_contenttypeh5p_disabled'] = 'H5P Inhaltsspeichertyp ist deaktiviert. Er muss aktiviert werden, um Aktivitäten von mod_hvp zu migrieren und Sie auch zum Inhaltsspeicher hinzuzufügen. Sie können diesen Inhaltstyp aktivieren unter \'Website-Administration | Plugins | Inhaltsspeicher | Inhaltstypen verwalten\' oder starten Sie das Migrationstool noch einmal und wählen Sie \'Nein, Sie sollen nur in der Aktivität angelegt werden\'. (oder \'copy2cb=0\' wenn Sie CLI nutzen) um zu vermeiden, dass Dateien im Inhaltsspeicher angelegt werden.';
$string['error_modh5pactivity_disabled'] = 'H5P Aktivität ist deaktiviert. Sie muss aktiviert werden, um Aktivitäten von mod_hvp zu migrieren';
$string['event_hvp_migrated'] = 'mod_hvp zu mod_h5pactivity migriert';
$string['graded'] = 'Teilnehmer/innen mit Bewertung';
$string['hvpactivities'] = 'Ausstehende hvp-Aktivitäten';
$string['id'] = 'ID';
$string['keeporiginal'] = 'Wählen Sie aus, was mit der ursprünglichen Aktivität nach der Migration geschehen soll';
$string['keeporiginal_delete'] = 'Original-Aktivität löschen';
$string['keeporiginal_hide'] = 'Original-Aktivität verbergen';
$string['keeporiginal_nothing'] = 'Original-Aktivität belassen, wie sie ist';
$string['migrate'] = 'Migrieren';
$string['migrate_fail'] = 'Fehler bei Migrieren der hvp-Aktivität mit der ID {$a}';
$string['migrate_gradesoverridden'] = 'Die Original mod_hvp Aktivität "{$a->name}", with id {$a->id}, wurde erfolgreich migriert. Allerdings wurden einige Bewertungsinformationen überschrieben, wie z.B. feedback, das nicht migriert wurde, weil die Original-Aktivität mit einem unzulässigen Bewertungsmaximum konfiguriert wurde (es muss größer als 0 sein, um in die Bewertungen migriert werden zu können).';
$string['migrate_gradesoverridden_notdelete'] = 'Die Original mod_hvp Aktivität "{$a->name}", with id {$a->id}, wurde erfolgreich migriert. Allerdings wurden einige Bewertungsinformationen überschrieben, wie z.B. feedback, das nicht migriert wurde, weil die Original-Aktivität mit einem unzulässigen Bewertungsmaximum konfiguriert wurde (es muss größer als 0 sein, um in die Bewertungen migriert werden zu können).
Die Original-Aktivität wurde verborgen anstatt entfernt zu werden.';
$string['migrate_success'] = 'hvp-Aktivität mit ID {$a} erfolgreich migriert';
$string['nohvpactivities'] = 'Es gibt keine hvp-Aktivität, die als h5pactivity migriert werden könnte.';
$string['pluginname'] = 'Inhalt von mod_hvp zu mod_h5pactivity migrieren';
$string['privacy:metadata'] = '"Inhalt von mod_hvp zu mod_h5pactivity migrieren" speichert keine personenbezogenen Daten';
$string['savedstate'] = 'Gespeicherte Zustände';
$string['selecthvpactivity'] = 'hvp Aktivität {$a} wählen';
$string['settings'] = 'Migrationseinstellungen';
