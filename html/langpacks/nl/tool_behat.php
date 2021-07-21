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
 * Strings for component 'tool_behat', language 'nl', version '3.11'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Deze beheertool helpt ontwikkelaars en testers om .feature-bestanden te maken die de functionaliteit van Moodle beschrijft en ze automatisch laat lopen. De beschikbare definities om in .feature-bestanden te gebruiken zijn hieronder opgelijst.';
$string['allavailablesteps'] = 'Alle beschikbare stappendefinities';
$string['errorapproot'] = '$ CFG-> behat_ionic_dirroot verwijst niet naar een geldige Moodle app developer-installatie.';
$string['errorbehatcommand'] = 'Fout bij het lopen van het behat CLI commando. Probeer manueel "{$a} --help" op de command line te laten lopen om meer informatie over het probleem te verkrijgen.';
$string['errorcomposer'] = 'Composer dependencies zijn niet geïnstalleerd.';
$string['errordataroot'] = '$CFG->behat_dataroot is niet ingesteld of is ongeldig.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix en $CFG->behat_wwwroot moeten geconfigureerd zijn in config.php.';
$string['erroruniqueconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix en $CFG->behat_wwwroot waarden moeten verschillend zijn van $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG-> phpunit_dataroot en $CFG->phpunit_prefix.';
$string['fieldvalueargument'] = 'Argumenten veldwaarde';
$string['fieldvalueargument_help'] = 'Dit argument moet worden ingevuld door een veldwaarde. Er zijn vele veldtypen, eenvoudige, zoals selectievakjes of textzones of complexe,  zoals datumselectors. Zie  <a href="https://docs.moodle.org/dev/Acceptance_testing" target="_blank">Acceptance_testing</a> voor details van de verwachte veldwaardes.';
$string['giveninfo'] = 'Given. Processen die de omgeving instellen';
$string['infoheading'] = 'Info';
$string['installinfo'] = 'Lees {$a} voor informatie over installatie en het uitvoeren van tests';
$string['newstepsinfo'] = 'Lees {$a} voor info over hoe je nieuwe definitiestappen kunt toevoegen';
$string['newtestsinfo'] = 'Lees {$a} voor informatie over hoe nieuwe testen geschreven moeten worden.';
$string['nostepsdefinitions'] = 'Er zijn geen stappendefinities die overeenkomen met deze filter';
$string['pluginname'] = 'Acceptatietesten';
$string['privacy:metadata'] = 'De Acceptance testing-plugin bewaart geen persoonlijke gegevens.';
$string['stepsdefinitionscomponent'] = 'Zone';
$string['stepsdefinitionscontains'] = 'Bevat';
$string['stepsdefinitionsfilters'] = 'Stappendefinitie';
$string['stepsdefinitionstype'] = 'Type';
$string['theninfo'] = 'Then. Controles die er voor zorgen dat de resultaten zijn wat verwacht wordt.';
$string['unknownexceptioninfo'] = 'Er was een probleem met Selenium of de browser. Update Selenium tot de laatste versie: Fout:';
$string['viewsteps'] = 'Filter';
$string['warndirrootconfigfound'] = 'Er is een configuratiebestand gevonden op {$a}. Dit bestand wordt niet automatisch bijgewerkt en kan oud worden. We raden u aan dit bestand te verwijderen.';
$string['wheninfo'] = 'Wanneer. Acties die een gebeurtenis veroorzaken';
$string['wrongbehatsetup'] = 'Er is iets mis met de Behat setup. Daarom kunnen stap-definities niet worden getoond: <b>{$a->errormsg}</b> <br/><br/> Kijk na: <ul><li> $CFG->behat_dataroot, $CFG->behat_prefix en $CFG->behat_wwwroot worden ingesteld in config.php met waarden anders dan die van $CFG->dataroot, $CFG->prefix en $CFG->wwwroot. </li><li> Je liet "{$a->behatinit}" lopen vanuit je Moodlerootmap. </li><li> Dependencies worden geïnstalleerd in vendor / en het {$a->behatcommand} bestand heeft uitvoerrechten. </li></ul>';
