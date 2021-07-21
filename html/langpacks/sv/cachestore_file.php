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
 * Strings for component 'cachestore_file', language 'sv', version '3.11'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Autoskapa katalog';
$string['autocreate_help'] = 'Om den är aktiverat skapas katalogen som anges i sökvägen automatiskt om den inte redan finns.';
$string['path'] = 'Cache-sökväg';
$string['path_help'] = 'Katalogen som ska användas för att lagra filer för den här cachelagringsplatsen. Om den lämnas tom (standard) skapas en katalog automatiskt i moodledata-katalogen. Detta kan användas för att peka ett filarkiv mot en katalog på en enhet med bättre prestanda (till exempel en i minnet).';
$string['pluginname'] = 'Filcache';
$string['prescan'] = 'Förkontrollera katalog';
$string['prescan_help'] = 'Om aktiverad genomsöks katalogen när cacheminnet används första gången och begäranden om filer kontrolleras först mot skanningsdata. Detta kan hjälpa om du har ett långsamt filsystem och finner att filåtgärder utgör en flaskhals.';
$string['privacy:metadata'] = 'Pluginmodulen Filcache lagrar data kort som en del av dess cachelagringsfunktionalitet, men dessa data rensas regelbundet.';
$string['singledirectory'] = 'Enkatalogslagring';
$string['singledirectory_help'] = 'Om aktiverade filer (cachelagrade objekt) lagras i en enda katalog i stället för att delas upp i flera kataloger.

Att aktivera detta kommer att påskynda filinteraktioner men görs på bekostnad av en ökad risk att stöta på filsystembegränsningar.

Det är lämpligt att endast slå på detta om följande är sant:

* Om du vet att antalet objekt i cachen kommer att vara tillräckligt litet för att det inte ska orsaka problem i filsystemet du använder.
* De data som cachelagras är inte dyra att generera. Om det sedan håller fast vid standardvärdet kan det fortfarande vara det bättre alternativet eftersom det minskar risken för problem.';
