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
 * Strings for component 'analytics', language 'sv', branch 'MOODLE_38_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analytics'] = 'Analysfunktioner';
$string['analyticsdisabled'] = 'Analysfunktionerna är inaktiverade. Du kan aktivera dem under ”Administration av webbplats > Avancerade inställningar”.';
$string['analyticslogstore'] = 'Lagringsplats för log som används av analysfunktionerna';
$string['analyticslogstore_help'] = 'Lagringsplatsen som kommer användas av analysfunktionens API för att läsa användaraktiviteter.';
$string['analyticssettings'] = 'Inställningar för analysfunktionen';
$string['errorimportmissingclasses'] = 'Dessa analyskomponenter är inte tillgängliga på denna webbplats: {$a->missingclasses}.';
$string['errornoroles'] = 'Lärar- eller elevroller har inte definierats. Du kan definiera dessa på sidan för inställningar av analysfunktionen.';
$string['fixedack'] = 'Acceptera';
$string['incorrectlyflagged'] = 'Felaktigt flaggad';
$string['noinsights'] = 'Inga insikter rapporterade';
$string['notapplicable'] = 'Inte tillämpligt';
$string['onlycli'] = 'Analysfunktionens processer körs endast via kommandoraden.';
$string['onlycliinfo'] = 'Analysprocesser, såsom att utvärdera modeller, träna algoritmer för maskininlärning eller hämta förutsägelser kan vara tidskrävande. Dessa körs som cron-aktiviteter eller kan köras manuellt via kommandoraden. Om inaktiverat kan analysprocesserna köras via webbgränssnittet.';
