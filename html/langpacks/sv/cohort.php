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
 * Strings for component 'cohort', language 'sv', version '3.11'.
 *
 * @package     cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Lägg till ny kohort';
$string['allcohorts'] = 'Alla kohorter';
$string['anycohort'] = 'Valfri';
$string['assign'] = 'Tilldela';
$string['assigncohorts'] = 'Tilldela kohortmedlemmar';
$string['assignto'] = 'Kohort \'{$a}\' deltagare';
$string['backtocohorts'] = 'Tillbaka till kohorter';
$string['bulkadd'] = 'Lägg till i kohort';
$string['bulknocohort'] = 'Inga tillgängliga kohorter hittades';
$string['categorynotfound'] = 'Kategori <b>{$a}</b> kunde inte hittas, eller så har du inte behörighet att skapa en kohort där. Standardkontexten kommer att användas.';
$string['cohort'] = 'Kohort';
$string['cohorts'] = 'Kohorter';
$string['cohortsin'] = '{$a}: tillgängliga kohorter';
$string['component'] = 'Källa';
$string['contextnotfound'] = 'Kontext <b>{$a}</b> kunde inte hittas, eller så har du inte behörighet att skapa en kohort där. Standardkontexten kommer att användas.';
$string['csvcontainserrors'] = 'Fel i CSV. Se detaljer nedan.';
$string['csvcontainswarnings'] = 'Varningar för innehållet CSV-data hittades. Se detaljer nedan.';
$string['csvextracolumns'] = 'Följande kolumn(er) kommer att ignoreras: <b>{$a}</b>';
$string['currentusers'] = 'Användare';
$string['currentusersmatching'] = 'Användare som matchar';
$string['defaultcontext'] = 'Standardkontext';
$string['delcohort'] = 'Ta bort kohort';
$string['delconfirm'] = 'Vill Du verkligen ta bort kohorten \'{$a}\'?';
$string['description'] = 'Beskrivning';
$string['displayedrows'] = 'Visar {$a->displayed} rad(er) av totalt {$a->total}.';
$string['duplicateidnumber'] = 'Det finns redan en kohort med samma ID-nummer.';
$string['editcohort'] = 'Redigera kohort';
$string['editcohortidnumber'] = 'Redigera ID';
$string['editcohortname'] = 'Redigera Namn';
$string['eventcohortcreated'] = 'Kohort skapad';
$string['eventcohortdeleted'] = 'Kohort borttagen';
$string['eventcohortmemberadded'] = 'Användare tillagd i kohort';
$string['eventcohortmemberremoved'] = 'Användare borttagen från kohort';
$string['eventcohortupdated'] = 'Kohort uppdaterad';
$string['external'] = 'Extern kohort';
$string['idnumber'] = 'Kohort-ID';
$string['invalidtheme'] = 'Kohorttemat finns inte';
$string['memberscount'] = 'Kohortstorlek';
$string['name'] = 'Namn';
$string['namecolumnmissing'] = 'Det är något fel med formatet på CSV-filen. Vänligen kontrollera att den innehåller rätt kolumnnamn. Om du vill lägga till användare i en kohort går du till \'Ladda upp användare\' under <em>Administrera Webbplats &#10132; Användare</em>.';
$string['namefieldempty'] = 'Fältnamn får inte lämnas tomt';
$string['newidnumberfor'] = 'Nytt ID för kohort {$a}';
$string['newnamefor'] = 'Nytt namn för kohort {$a}';
$string['nocomponent'] = 'Skapad manuellt';
$string['potusers'] = 'Möjliga användare';
$string['potusersmatching'] = 'Möjliga matchande användare';
$string['preview'] = 'Förhandsgranska';
$string['privacy:metadata:cohort_members'] = 'Information om användarens kohort';
$string['privacy:metadata:cohort_members:cohortid'] = 'Kohortens ID-nummer';
$string['privacy:metadata:cohort_members:timeadded'] = 'Tidstämpel för när användaren lades till i kohorten';
$string['privacy:metadata:cohort_members:userid'] = 'Användar-ID:t för kohortanvändaren';
$string['removeuserwarning'] = 'Vid borttagning av en användare från en kohort kan detta att resultera i att användaren avregistreras från multipla kurser. Detta leder till borttagning av användarinställningar, betyg, gruppmedlemskap och annan användarinformation från berörda kurser.';
$string['search'] = 'Sök';
$string['searchcohort'] = 'Sök kohort';
$string['selectfromcohort'] = 'Välj kohortmedlemmar';
$string['systemcohorts'] = 'Systemkohorter';
$string['unknowncohort'] = 'Okänd kohort ({$a})!';
$string['uploadcohorts'] = 'Ladda upp kohorter';
$string['uploadcohorts_help'] = 'Kohorter kan laddas upp via en textfil. Formatet på filen bör vara följande:

* Varje rad i filen innehåller en post
* Varje post är en serie data åtskilda av kommatecken (eller andra avgränsare)
* Den första posten innehåller en lista över fältnamn som definierar formatet för resten av filen * Det obligatoriska fältet <code>name</code> måste finnas i filen
* Valfria fältnamn är <code> idnumber, description, descriptionformat, visible, context, category, category_id, category_idnumber, category_path</code>';
$string['uploadedcohorts'] = 'Laddade upp {$a} kohort(er)';
$string['useradded'] = 'Användare har lagts till kohort "{$a}"';
$string['visible'] = 'Synlig';
$string['visible_help'] = 'Alla kohorter kan ses av användare som har funktionsbehörigheten <code>moodle/cohort:view</code> i kohortens kontext.<br/>
Synliga kohorter kan också ses av användare i de underliggande kurserna.';
