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
 * Strings for component 'debug', language 'sv', version '4.4'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Det gick inte att hitta plug-in-programmet {$a} för autentisering.';
$string['blocknotexist'] = 'Det finns inget block {$a} ';
$string['cannotbenull'] = '{$a} kan inte vara null!';
$string['cannotdowngrade'] = 'Det går inte att nedgradera {$a->plugin} från {$a->oldversion} till {$a->newversion}';
$string['cannotfindadmin'] = 'Det gick inte att hitta någon administratörsanvändare!';
$string['cannotinitpage'] = 'Kan inte helt initiera sidan: ogiltigt {$a->name}-id {$a->id}';
$string['cannotsetuptable'] = '{$a}-tabellerna kunde INTE konfigureras korrekt!';
$string['codingerror'] = 'Detta är ett kodningsfel, det måste åtgärdas av en programmerare: {$a}';
$string['configmoodle'] = 'Moodle har inte konfigurerats ännu. Du behöver redigera config.php först.';
$string['debuginfo'] = 'Debuginformation';
$string['erroroccur'] = 'Det har uppstått ett fel under denna process';
$string['invalidarraysize'] = 'Felaktig storlek på arrayerna i parametrarna för {$a}';
$string['invalideventdata'] = 'Felaktiga händelsedata har angivits: {$a}';
$string['invalidparameter'] = 'Ett felaktigt värde för en parameter har upptäckts';
$string['invalidresponse'] = 'Ett felaktigt svarsvärde upptäcktes';
$string['line'] = 'Rad';
$string['missingconfigversion'] = 'Config-tabellen innehåller inte versionen. Du kan inte fortsätta.';
$string['modulenotexist'] = 'Det finns ingen modul {$a}';
$string['morethanonerecordinfetch'] = 'Det fanns mer än en post i fetch()!';
$string['mustbeoveride'] = 'Metoden för abstraktion {$a} måste åsidosättas.';
$string['noadminrole'] = 'Hittade ingen administratörsroll';
$string['noblocks'] = 'Det finns inga installerade block!';
$string['nocate'] = 'Inga kategorier!';
$string['nomodules'] = 'Det gick inte att hitta några moduler!!';
$string['nopageclass'] = 'Importerade {$a}, men kunde inte hitta några sidklasser';
$string['noreports'] = 'Det finns inga tillgängliga rapporter';
$string['notables'] = 'Inga tabeller!';
$string['outputbuffer'] = 'Utmatningsbuffert';
$string['phpvaroff'] = 'PHP-server-variabeln \'{$a->name}\' bör vara inställd som Off - {$a->link}';
$string['phpvaron'] = 'PHP-servervariabeln <code>{$a->name}</em> är inte satt till <em>"On"</em> - {$a->link}';
$string['reactive_highlightoff'] = 'Markera AV';
$string['reactive_highlighton'] = 'Markera PÅ';
$string['reactive_instances'] = 'Reaktiva instanser:';
$string['reactive_noinstances'] = 'Den här sidan har inga reaktiva instanser';
$string['reactive_pin'] = 'Fäst';
$string['reactive_readmodeoff'] = 'Läsläge AV';
$string['reactive_readmodeon'] = 'Läsläge PÅ';
$string['reactive_resetpanel'] = 'Återställ panel';
$string['reactive_saveingwarning'] = '<strong>Varning!</strong> Redigering av tillståndet kan medföra oväntade resultat.';
$string['reactive_statedata'] = 'Tillståndsdata';
$string['reactive_unpin'] = 'Ej fäst';
$string['sessionmissing'] = '{$a} objekt saknas i sessionen';
$string['sqlrelyonobsoletetable'] = 'Denna SQL förlitar sig på tabeller \'{$a}\' som inte längre används! Koden behöver korrigeras av en utvecklare.';
$string['stacktrace'] = 'Stackspårning';
$string['withoutversion'] = 'Huvudfilen version.php går inte att läsa.';
$string['xmlizeunavailable'] = '<code>xmlize</code> funktioner ej tillgängliga';
