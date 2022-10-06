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
 * Strings for component 'tool_migratehvp2h5p', language 'sv', version '3.11'.
 *
 * @package     tool_migratehvp2h5p
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempted'] = 'Användare med försök';
$string['cannot_migrate'] = 'Kan inte migrera aktiviteten';
$string['contenttype'] = 'Innehållstyp';
$string['copy2cb'] = 'Ska dessa innehåll läggas till i innehållsbanken?';
$string['copy2cb_no'] = 'Nej, de ska endast skapas i aktiviteten';
$string['copy2cb_yeswithlink'] = 'Ja, samt använd länkar till dessa filer i aktiviteten';
$string['copy2cb_yeswithoutlink'] = 'Ja, men en kopia kommer användas i aktiviteten (ändringar i innehållsbanken kommer inte synas i aktiviteten)';
$string['error_contenttypeh5p_disabled'] = 'H5P-innehållsbanktypen är inaktiverad. Den måste vara aktiverad för kunna att migrera aktiviteter från mod_hvp och även lägga till dem i innehållsbanken. Du kan aktivera den här innehållstypen under <em>Hantera webbplats&#10140;Pluginmoduler&#10140;Innehållsbank&#10140;Hantera
innehållstyper</em> eller genom att köra migreringsverktyget igen och välja \'Nej, de ska bara skapas i aktiviteten\'. (eller <kbd>copy2cb=0</kbd> om du kör via CLI) för att undvika att filer skapas i innehållsbanken.';
$string['error_modh5pactivity_disabled'] = 'H5P-aktiviteten är inaktiverad. Den måste vara aktiverad för att kunna migrera aktiviteter från mod_hvp';
$string['event_hvp_migrated'] = '<code>mod_hvp</code> migrerad till <code>mod_h5pactivity</code>';
$string['graded'] = 'Betygsatta användare';
$string['hvpactivities'] = 'Väntande <em>mod_hvp</em>-aktiviteter';
$string['id'] = 'Id';
$string['keeporiginal'] = 'Välj vad som ska hända med ursprungsaktiviteten när den migrerats';
$string['keeporiginal_delete'] = 'Ta bort ursprungsaktiviteten';
$string['keeporiginal_hide'] = 'Göm ursprungsaktiviteten';
$string['keeporiginal_nothing'] = 'Gör inget';
$string['migrate'] = 'Migrera';
$string['migrate_fail'] = 'Det gick inte att migrera hvp-aktiviteten med id {$a}';
$string['migrate_gradesoverridden'] = 'Den ursprungliga mod_hvp "{$a->name}", med id {$a->id} migrerades. Dock har viss betygsinformation åsidosatts, såsom återkopplingar, eftersom konfigurationen i den ursprungliga aktiviteten innehöll en felaktigt angiven maxgräns för betyg (den måste vara större än 0 för att migreras till betygsboken).';
$string['migrate_gradesoverridden_notdelete'] = 'Den ursprungliga mod_hvp "{$a->name}", med id {$a->id} migrerades. Dock har viss betygsinformation åsidosatts, såsom återkopplingar, eftersom konfigurationen i den ursprungliga aktiviteten innehöll en felaktigt angiven maxgräns för betyg (den måste vara större än 0 för att migreras till betygsboken).
  Den ursprungliga aktiviteten har dolts istället för att ha tagits bort.';
$string['migrate_success'] = 'Hvp-aktivitet med id {$a} migrerades';
$string['nohvpactivities'] = 'Det finns inga <code>mod_hvp</code>-aktiviteter att migrera till <code>mod_h5pactivity</code>-aktiviteten';
$string['pluginname'] = 'Migrera mod_hvp till mod_h5pactivity';
$string['privacy:metadata'] = 'Pluginmodulen Migrera <code>mod_hvp</code> till <code>mod_h5pactivity</code> lagrar ingen personlig information.';
$string['savedstate'] = 'Sparat tillstånd';
$string['selecthvpactivity'] = 'Välj {$a}-mod_hvp aktivitet';
$string['settings'] = 'Migreringsinställningar';
