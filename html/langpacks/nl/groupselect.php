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
 * Strings for component 'groupselect', language 'nl', version '4.5'.
 *
 * @package     groupselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Actie';
$string['assignedteacher'] = 'Supervisor';
$string['assigngroup'] = 'Supervisoren toewijzen aan groepen';
$string['assigngroup_help'] = 'Indien ingesteld wordt er een knop getoond waarmee supervisoren aan groepen kunnen worden toegewezen (wanneer er supervisoren in de cursus zijn). Toegewezen supervisoren zijn geen groepsleden, maar verschijnen in het exportbestand en in de hoofdweergave (indien ingesteld). Nuttig wanneer er assistenten worden ingezet om groepen te ondersteunen. Deze permissie kan nader worden ingesteld in de rechten van rollen.';
$string['cannotselectclosed'] = 'Je kunt geen groepslid meer worden.';
$string['cannotselectmaxed'] = 'Je kunt geen lid worden van groep {$a} - het maximum aantal groepsleden is bereikt.';
$string['cannotselectnocap'] = 'Je mag geen groepen selecteren.';
$string['cannotselectnoenrol'] = 'Je dient aangemeld te zijn in deze cursus om lid te worden van een groep.';
$string['cannotunselectclosed'] = 'Je kunt de groep niet meer verlaten';
$string['creategroup'] = 'Nieuwe groep aanmaken';
$string['deleteallgrouppasswords'] = 'Alle groepswachtwoorden verwijderen';
$string['deleteemptygroups'] = 'Verwijder groep wanneer de laatste deelnemer de groep verlaat';
$string['deleteemptygroups_help'] = 'Indien ingesteld wordt de groep automatisch verwijderd wanneer de laatste deelnemer de groep verlaat';
$string['description'] = 'Groepsbeschrijving';
$string['duedate'] = 'Datum tot';
$string['edittooltip'] = 'Klik om te bewerken';
$string['enablepermissions'] = 'Algemene permissies';
$string['eventexportlinkcreated'] = 'Link voor exporteren gemaakt';
$string['eventgroupteacheradded'] = 'Leraar/supervisor toegevoegd';
$string['export'] = 'Link maken voor bestand met groepsgegevens (CSV)';
$string['export_download'] = 'CSV-bestand downloaden';
$string['fromallgroups'] = 'Alle groepen';
$string['globalpassword_help'] = 'Een globaal wachtwoord instellen voor deelnemen aan groepen. Overschrijft door deelnemers ingestelde wachtwoorden.';
$string['groupid'] = 'Groep ID';
$string['groupselect:addinstance'] = 'Een nieuwe Zelf groepen selecteren toevoegen';
$string['groupselect:assign'] = 'Supervisors toewijzen aan groepen toestaan';
$string['groupselect:create'] = 'Groep aanmaken toestaan';
$string['groupselect:export'] = 'Exporteren groepsleden toestaan';
$string['groupselect:select'] = 'Lid worden van groep toestaan';
$string['groupselect:unselect'] = 'Groep verlaten toestaan';
$string['hidefullgroups'] = 'Volle groepen verbergen in overzicht';
$string['hidefullgroups_help'] = 'Indien ingesteld verbergt dit alle groepen die het maximum aantal leden hebben bereikt in de hoofdweergave van de lijst (behalve de eigen groep van gebruiker). Kan handig wijn wanneer er veel groepen in de activiteit zitten.';
$string['hidegroupmembers'] = 'Groepsleden verbergen voor leerlingen';
$string['hidegroupmembers_help'] = 'Indien ingesteld worden alle groepsleden verborgen voor leerlingen. Als leerlingen groepen mogen beheren (moodle/course:managegroups) of als ze toegang hebben tot alle groepen (moodle/site:accessallgroups), worden de leden altijd getoond.';
$string['hidesuspendedstudents'] = 'Geschorste leerlingen verbergen';
$string['hidesuspendedstudents_help'] = 'Wanneer aangevinkt worden geschorste leerlingen verwijderd uit het aantal gebruikers en uit groepslijsten.';
$string['incorrectpassword'] = 'Wachtwoord onjuist';
$string['managegroups'] = 'Groepen beheren';
$string['maxcharlenreached'] = 'Maximum aantal tekens bereikt';
$string['maxgroupmembership'] = 'Maximum aantal groepen om aan deel te nemen';
$string['maxgroupmembership_error_low'] = 'Negatieve getallen zijn niet toegestaan!';
$string['maxgroupmembership_help'] = 'Maximum aantal groepen om in deel te nemen. Een 0 betekent dat deelname niet mogelijk is.';
$string['maxlimitreached'] = 'Maximum aantal bereikt';
$string['maxmembers'] = 'Maximum aantal leden per groep';
$string['maxmembers_error_low'] = 'Negatieve getallen zijn niet toegestaan. Gebruik 0 voor onbeperkt.';
$string['maxmembers_error_smaller_minmembers'] = 'Moet groter zijn dan het minimum aantal deelnemers per groep.';
$string['maxmembers_help'] = 'Maximum aantal deelnemers per groep. Gebruik 0 voor onbeperkt.';
$string['maxmembers_icon'] = 'Groep heeft teveel leden';
$string['maxmembers_notification'] = 'Je groep heeft teveel leden! Maximum is {$a}';
$string['member'] = 'Lid';
$string['membercount'] = 'Aantal';
$string['membershidden'] = 'Lijst groepsleden niet beschikbaar';
$string['memberslist'] = 'Leden';
$string['minmembers'] = 'Minimum aantal leden per groep';
$string['minmembers_error_bigger_maxmembers'] = 'De minimale groepsgrootte moet kleiner zijn dan het maximum aantal deelnemers per groep.';
$string['minmembers_error_low'] = 'Negatieve getallen zijn niet toegestaan voor de minimale groepsgrootte. Gebruik 0 om uit te schakelen.';
$string['minmembers_help'] = 'Minimum aantal deelnemers per groep. Voegt meldingen toe voor leden van groepen die onder deze limiet zitten. Standaardwaarde is 0 (uitgeschakeld).';
$string['minmembers_icon'] = 'Groep heeft minder leden dan vereist.';
$string['minmembers_notification'] = 'Je groep heeft minder leden dan vereist. Het minimum is {$a}.';
$string['miscellaneoussettings'] = 'Overige instellingen';
$string['modulename'] = 'Zelf groepen kiezen';
$string['modulename_help'] = 'Stelt deelnemers in staat zelf groepen aan te maken en te kiezen. Kenmerken:

* Deelnemer kan groepen maken, deze een beschrijving geven en ze beveiligen met een wachtwoord, indien gewenst
* Deelnemers kunnen groepen kiezen en er lid van worden
* Supervisoren kunnen aan groepen worden toegewezen
* Leraren kunnen een lijst van cursusgroepen als CSV-bestand exporteren
* Werkt volledig samen met standaardfunctionaliteit Moodle groepen: groepen kunnen ook op andere wijze worden aangemaakt indien nodig, ondersteunt groepsopdrachten etc.';
$string['modulename_link'] = 'mod/groupselect/view';
$string['modulenameplural'] = 'Zelf groepen kiezen';
$string['nogroups'] = 'Er zijn helaas geen groepen om uit te kiezen.';
$string['notavailableanymore'] = 'Groepen kiezen is helaas niet meer mogelijk (sinds {$a}).';
$string['notavailableyet'] = 'Groepen kiezen is beschikbaar op {$a}';
$string['notifyexpiredselection'] = 'Toon boodschap als de datum \'Open tot\' is bereikt';
$string['notifyexpiredselection_help'] = 'Indien ingesteld zal er een boodschap worden getoond als de datum \'Open tot\' is bereikt';
$string['ok'] = 'OK';
$string['password'] = 'Wachtwoord vereist';
$string['pluginadministration'] = 'Modulebeheer';
$string['pluginname'] = 'Zelf groepen selecteren';
$string['privacy:metadata'] = 'De plugin Zelf groepen kiezen bewaart geen persoonsgegevens.';
$string['removeallsupervisors'] = 'Supervisoren uit groepen verwijderen';
$string['saving'] = 'Opslaan...';
$string['select'] = 'Word lid van {$a}';
$string['selectconfirm'] = 'Weet je zeker dat je lid wilt worden van de groep <em>{$a}</em>?';
$string['selectgroupaction'] = 'Selecteer groep';
$string['showassignedteacher'] = 'Toegewezen supervisoren tonen';
$string['showassignedteacher_help'] = 'Indien ingesteld worden toegewezen supervisoren als groepsleden getoond. Handig wanneer deelnemers moeten weten wie hun toegewezen leraar is';
$string['studentcancreate'] = 'Deelnemers kunnen groepen maken';
$string['studentcancreate_help'] = 'Indien ingesteld kunnen deelnemers zonder groep (in de geselecteerde groepering) groepen aanmaken. Deze permissie kan verder worden ingesteld in de permissies van de rol.';
$string['studentcanjoin'] = 'Deelnemers kunnen lid worden van groepen';
$string['studentcanjoin_help'] = 'Indien ingesteld kunnen deelnemers lid worden van groepen. Deze permissie kan verder worden ingesteld in de permissies van de rol.';
$string['studentcanleave'] = 'Deelnemers kunnen groepen verlaten';
$string['studentcanleave_help'] = 'Indien ingesteld kunnen deelnemers groepen verlaten. Deze permissie kan verder worden ingesteld in de permissies van de rol.';
$string['studentcansetdesc'] = 'Deelnemers kunnen de groepsbeschrijving instellen en bewerken';
$string['studentcansetdesc_help'] = 'Indien ingesteld kunnen deelnemers een groepsbeschrijving toevoegen wanneer ze een groep aanmaken en kunnen groepsleden deze bewerken.';
$string['studentcansetenrolmentkey'] = 'Deelnemers kunnen wachtwoorden instellen om lid te worden van een groep';
$string['studentcansetenrolmentkey_help'] = 'Indien ingesteld kunnen deelnemers een aanmeldingssleutel toevoegen om lid te worden van groepen.';
$string['studentcansetgroupname'] = 'Deelnemers kunnen de naam instellen van nieuwe groepen';
$string['studentcansetgroupname_help'] = 'Indien ingesteld kunnen deelnemers de groepsnaam toevoegen voor nieuwe groepen.';
$string['supervisionrole'] = 'Rol van supervisor';
$string['supervisionrole_help'] = 'Definieer de rol voor supervisoren (normaal gesproken leraar zonder bewerken).';
$string['targetgrouping'] = 'Selecteer groepen uit groepering';
$string['timeavailable'] = 'Open vanaf';
$string['timeavailable_error_past_timedue'] = 'Kan niet beginnen na de deadline!';
$string['timedue'] = 'Open tot';
$string['timedue_error_pre_timeavailable'] = 'Kan niet eindigen voor de startdatum!';
$string['unassigngroup'] = 'Supervisoren van groepen verwijderen';
$string['unassigngroup_confirm'] = 'Hiermee verwijder je supervisoren uit groepen. Weet je het zeker?';
$string['unselect'] = 'Groep {$a} verlaten';
$string['unselectconfirm'] = 'Weet je zeker dat je de groep <em>{$a}</em> wilt verlaten?';
