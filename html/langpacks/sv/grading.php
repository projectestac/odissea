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
 * Strings for component 'grading', language 'sv', version '3.8'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' är vald som den aktiva betygsmetoden för \'{$a->area}\' området';
$string['activemethodinfonone'] = 'Ingen avancerad betygssättningsmetod är vald för området \'{$a->area}\'. Enkel betygssättning kommer att användas.';
$string['changeactivemethod'] = 'Ändra betygssättningsmetod till';
$string['clicktoclose'] = 'klicka för att välja';
$string['error:notinrange'] = 'Ogiltigt betyg \'{$a->grade}\' angavs. Betyg måste vara mellan 0 och {$a->maxgrade}.';
$string['exc_gradingformelement'] = 'Kunde inte instansiera betygsformulärselement';
$string['formnotavailable'] = 'En avancerad bedömningsmetod valdes men bedömningsformuläret är inte tillgängligt ännu. Du kan behöva definiera det först via en länk i åtgärdsmenyn eller administrationsblocket.';
$string['gradingformunavailable'] = 'OBS! Formuläret för den avancerade betygssättningen är inte klart ännu. Enkel betygssättning kommer att användas tills dess att det finns ett giltigt formulär.';
$string['gradingmanagement'] = 'Avancerad betygssättning';
$string['gradingmanagementtitle'] = 'Avancerad betygssättning: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Betygssättningsmetod';
$string['gradingmethod_help'] = 'Välj den avancerade betygssättningsmetod som ska användas för att beräkna betyget. För att inaktivera avancerad betygssättning och gå tillbaka till den förinställda betygssättningen, välj "Enkel betygssättning".';
$string['gradingmethodnone'] = 'Enkel betygssättning';
$string['gradingmethods'] = 'Betygssättningsmetoder';
$string['manageactionclone'] = 'Skapa nytt betygssättningsformulär från mall';
$string['manageactiondelete'] = 'Radera det formulär som nu är definierat';
$string['manageactiondeleteconfirm'] = 'Du kommer att radera betygsformuläret \'{$a->formname}\' och all associerad information från \'{$a->component} ({$a->area})\'. Säkerställ att du förstår följande konsekvenser:

 * Denna operation kan inte ångras eller återställas. * Du kan byta till en annan betygssättningsmetod inklusive \'Enkel direkt betygssättning\' utan att radera detta formulär. * All information om hur betygsformulären fylls kommer att förloras. * De beräknade resultaten av betyg sparade i betygsboken kommer inte att påverkas. Däremot kommer förklaringen till hur de beräknades inte att vara tillgänglig. * Denna operation påverkar inte eventuella kopior av detta formulär i andra aktiviteter.';
$string['manageactiondeletedone'] = 'Formuläret raderades.';
$string['manageactionedit'] = 'Ändra definition för nuvarande formulär';
$string['manageactionnew'] = 'Definiera nytt betygsformulär från grunden';
$string['manageactionshare'] = 'Publisera formuläret som en ny mall';
$string['manageactionshareconfirm'] = 'Du kommer att spara en kopia av betygssättningsformuläret \'{$a}\' som en ny publik mall. Andra användare på din webbplats kommer kunna skapa nya betygssättningsformulär i sina aktiviteter från denna mall.';
$string['manageactionsharedone'] = 'Formuläret sparades som en mall.';
$string['noitemid'] = 'Betygssättning är inte möjligt. Den betygssatta delen existerar inte.';
$string['nosharedformfound'] = 'Ingen mall hittades';
$string['privacy:metadata:grading_definitions'] = 'Grundläggande information om ett avancerat bedömningsformulär som definierats i ett bedömningsbart område.';
$string['privacy:metadata:grading_instances:feedback'] = 'Återkoppling från användaren';
$string['searchownforms'] = 'inkludera mina egna formulär';
$string['searchtemplate'] = 'Sök betygssättningsfomulär';
$string['searchtemplate_help'] = 'Du kan söka efter ett bedömningsformulär och använda det som en mall för det nya bedömningsformuläret här. Skriv helt enkelt ord som ska förekomma någonstans i formulärsnamnet, dess beskrivning eller i själva innehållet. Om du vill söka efter en fras, radbryt hela frågan med dubbla citationstecken.

Som standard ingår endast de bedömningsformulär som har sparats som delade mallar i sökresultaten. Du kan också inkludera alla dina egna bedömningsformulär i sökresultaten. På så sätt kan du helt enkelt återanvända dina bedömningsformulär utan att dela dem. Endast formulär som är markerade som \'Klart att användas\' kan användas på detta sätt.';
$string['statusdraft'] = 'Utkast';
$string['statusready'] = 'Klart att användas';
$string['templatedelete'] = 'Radera';
$string['templatedeleteconfirm'] = 'Du kommer att radera den delade mallen \'{$a}\'. Radering av en mall påverkar inte existerande formulär som skapades från den.';
$string['templateedit'] = 'Ändra';
$string['templatepick'] = 'Använd denna mall';
$string['templatepickconfirm'] = 'Vill du använda betygssättningsformuläret \'{$a->formname}\' som mall för det nya betygssättningsformuläret i \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Använd detta formulär som en mall';
$string['templatesource'] = 'Plats: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Eget formulär';
$string['templatetypeshared'] = 'Delad mall';
