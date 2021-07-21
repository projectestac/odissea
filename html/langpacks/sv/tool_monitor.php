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
 * Strings for component 'tool_monitor', language 'sv', version '3.11'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Ny regel';
$string['allevents'] = 'Alla händelser';
$string['allmodules'] = 'Alla instanser';
$string['area'] = 'Område';
$string['areatomonitor'] = 'Övervakningsområde';
$string['cachedef_eventsubscriptions'] = 'Detta lagrar listan med händelseövervakningar för individuella kurser';
$string['contactadmin'] = 'Kontakta administratören för att aktivera den.';
$string['core'] = 'System';
$string['currentsubscriptions'] = 'Nuvarande bevakningar';
$string['defaultmessagetemplate'] = 'Regel: {rulename}<br />Beskrivning: {description}<br />Händelse: {eventname}';
$string['deleterule'] = 'Ta bort regel';
$string['deletesubscription'] = 'Ta bort bevakning';
$string['description'] = 'Beskrivning:';
$string['disablefieldswarning'] = 'Vissa fält går inte att redigera eftersom det redan finns bevakningar för denna regel.';
$string['duplicaterule'] = 'Duplicera regel';
$string['editrule'] = 'Redigera regel';
$string['enablehelp'] = 'Aktivera/inaktivera händelseövervakning';
$string['enablehelp_help'] = 'Händelseövervakning måste aktiveras innan du kan skapa och bevaka regler. Observera att aktivering av Händelseövervakning kan påverka webbplatsens prestanda.';
$string['errorincorrectevent'] = 'Vänligen välj en händelse relaterad till vald plugin';
$string['event'] = 'Händelse';
$string['eventnotfound'] = 'Händelse kunde inte hittas';
$string['eventrulecreated'] = 'Regel skapad';
$string['eventruledeleted'] = 'Regel borttagen';
$string['eventruleupdated'] = 'Regel uppdaterad';
$string['eventsubcreated'] = 'Bevakning skapad';
$string['eventsubcriteriamet'] = 'Bevakningskriterium uppfyllt';
$string['eventsubdeleted'] = 'Bevakning borttagen';
$string['freqdesc'] = '{$a->freq} gång(er) på {$a->mins} min';
$string['frequency'] = 'Notifieringsgräns';
$string['frequency_help'] = 'Antalet händelser inom en angiven tidsperiod som krävs för att en ska skickas.';
$string['inminutes'] = 'i minuter';
$string['invalidmodule'] = 'Ogiltig modul';
$string['manage'] = 'Hantera';
$string['managerules'] = 'Övervakningsregler';
$string['manageruleslink'] = 'Du kan hantera regler på sidan för {$a}.';
$string['managesubscriptions'] = 'Händelseövervakning';
$string['managesubscriptionslink'] = 'Du kan skapa bevakningar på {$a}-sidan.';
$string['messageprovider:notification'] = 'Notiser för bevakningar';
$string['messagetemplate'] = 'Notis';
$string['messagetemplate_help'] = 'En notis skickas till prenumeranter när tröskelvärdet för antal notiser har uppnåtts.
Det kan omfatta någon eller alla av följande platshållare:

* Länk till platsen för händelsen {link}
* Länk till området som bevakas {modulelink}
* Regelnamn {rulename}
* Beskrivning {description}
* Händelse {eventname}';
$string['moduleinstance'] = 'Instans';
$string['monitor:managerules'] = 'Hantera bevakningsregler';
$string['monitor:managetool'] = 'Aktivera/inaktivera händelseövervakning';
$string['monitor:subscribe'] = 'Prenumerera på bevakningsregler';
$string['monitordisabled'] = 'Händelseövervakning är inaktiverad.';
$string['monitorenabled'] = 'Händelseövervakning är aktiverad.';
$string['norules'] = 'Det finns inga bevakningsregler.';
$string['pluginname'] = 'Händelseövervakning';
$string['privacy:createdrules'] = 'Mina bevakningsregler';
$string['privacy:metadata:description'] = 'Beskrivning';
$string['privacy:metadata:eventname'] = 'Händelsenamn';
$string['privacy:metadata:frequency'] = 'Notifieringsfrekvens';
$string['privacy:metadata:historysummary'] = 'Lagrar historik för skickade notiser';
$string['privacy:metadata:inactivedate'] = 'Tidsperiod i dagar efter vilken inaktiva bevakningar tas bort';
$string['privacy:metadata:lastnotificationsent'] = 'När en notis senast skickades för denna bevakning';
$string['privacy:metadata:messagesummary'] = 'Notiser skickas till meddelandesystemet.';
$string['privacy:metadata:name'] = 'Namn';
$string['privacy:metadata:plugin'] = 'Frankenstyle-namn på pluginmodulen';
$string['privacy:metadata:rulessummary'] = 'Denna lagrar bevakningsregler.';
$string['privacy:metadata:subscriptionssummary'] = 'Lagrar bevakningar för olika regler';
$string['privacy:metadata:template'] = 'Meddelandemall';
$string['privacy:metadata:timecreatedrule'] = 'När denna regel skapades';
$string['privacy:metadata:timecreatedsub'] = 'När denna bevakning skapades';
$string['privacy:metadata:timemodifiedrule'] = 'När denna regel senast ändrades';
$string['privacy:metadata:timesent'] = 'När meddelandet skickades';
$string['privacy:metadata:timewindow'] = 'Tidsfönster, i sekunder';
$string['privacy:metadata:userid'] = 'Användar-ID:t för den som skapade regeln.';
$string['privacy:metadata:useridhistory'] = 'ID för användaren som denna notis skickades till';
$string['privacy:metadata:useridsub'] = 'ID:t för prenumeranten.';
$string['privacy:subscriptions'] = 'Mina bevakningar';
$string['processevents'] = 'Bearbeta händelser';
$string['ruleareyousure'] = 'Är du säker på att du vill ta bort regeln "{$a}"?';
$string['ruleareyousureextra'] = 'Det finns {$a} bevakningar av denna regel som också kommer tas bort.';
$string['rulecopysuccess'] = 'Regel duplicerad';
$string['ruledeletesuccess'] = 'Regel borttagen';
$string['rulehelp'] = 'Detaljer';
$string['rulehelp_help'] = 'Denna regel lyssnar efter när händelsen \'{$a->eventname}\' i \'{$a->eventcomponent}\' har utlösts \'{$a->frequency}\' gånger på \'{$a->minutes}\' minut(er).';
$string['rulename'] = 'Namn';
$string['rulenopermission'] = 'Du har inte behörighet att bevaka några händelser.';
$string['rulenopermissions'] = 'Du har inte behörighet att "{$a} en regel".';
$string['rulescansubscribe'] = 'Regler du kan bevaka';
$string['selectacourse'] = 'Välj kurs';
$string['selectcourse'] = 'Gå till denna rapport på kursnivå för att se möjliga moduler';
$string['subareyousure'] = 'Är du säker på att du vill ta bort bevakningen av "{$a}"-regeln?';
$string['subcreatesuccess'] = 'Bevakning skapad';
$string['subdeletesuccess'] = 'Bevakning borttagen';
$string['subhelp'] = 'Detaljer';
$string['subhelp_help'] = 'Denna bevakning lyssnar efter när händelsen \'{$a->eventname}\' i \'{$a->moduleinstance}\' har utlösts \'{$a->frequency}\' gånger på \'{$a->minutes}\' minut(er).';
$string['subscribeto'] = 'Bevakning av regel "{$a}"';
$string['taskchecksubscriptions'] = 'Aktivera/inaktivera ogiltiga regelbevakningar';
$string['taskcleanevents'] = 'Städa upp händelseövervakningshändelser';
$string['unsubscribe'] = 'Sluta bevaka';
