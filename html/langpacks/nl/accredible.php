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
 * Strings for component 'accredible', language 'nl', version '4.5'.
 *
 * @package     accredible
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accredible:addinstance'] = 'Een instantie van certificaat/badge toevoegen';
$string['accredible:manage'] = 'Een instantie van certificaat/badge beheren';
$string['accredible:student'] = 'Een certificaat of badge ophalen';
$string['accredible:view'] = 'Een certificaat of badge bekijken';
$string['accrediblecustomattributename'] = 'Kies een Accredible-ontwerpattribuut:';
$string['accrediblecustomattributeselectprompt'] = 'Selecteer een aangepast Accredible-attribuut';
$string['accrediblegroup'] = 'Accredible-groep';
$string['achievementid'] = 'Achievement-id / sitegroepnaam (moet uniek zijn)';
$string['activitygroupdescription'] = 'Credentialgroepen moeten eerst zijn aangemaakt in het <a href="{$a}" target="_blank">Accredible-dashboard</a> voordat credentials kunnen worden uitgegeven. Als er geen verschijnen, controleer dan je API-sleutel om te zien of de integratie correct is ingesteld.';
$string['activityname'] = 'Naam activiteit';
$string['additionalactivitiesone'] = 'Waarschuwing: je voegt meer dan één activiteit toe aan een cursus.<br/>Beide activiteiten zijn zichtbaar voor leerlingen, dus geef ze verschillende namen.';
$string['additionalactivitiesthree'] = 'Dit is de naam die zal verschijnen op het certificaat.';
$string['additionalactivitiestwo'] = 'Certificaten/Badges zullen alleen worden weergegeven op de activiteitenpagina wanneer ze met deze achievement id zijn uitgegeven.';
$string['apikeyhelp'] = 'Voer je API sleutel in van accredible.com';
$string['apikeylabel'] = 'API sleutel';
$string['attributemappingcoursecustomfields'] = 'Attribuuttoewijzing: aangepaste cursusvelden';
$string['attributemappingcoursefields'] = 'Attribuuttoewijzing: cursusvelden';
$string['attributemappinguserprofilefields'] = 'Attribuuttoewijzing: gebruikersprofielvelden';
$string['autoissueheader'] = 'Criteria voor automatische uitgifte';
$string['certificatename'] = 'Naam van certificaat/badge';
$string['certificateurl'] = 'Url van certificaat/badge';
$string['chooseexam'] = 'Kies eindtoets';
$string['completionissuecheckbox'] = 'Ja, uitgeven bij voltooiing van de cursus';
$string['completionissueheader'] = 'Criteria voor automatisch uitgeven: bij voltooiing van de cursus';
$string['coursetotal'] = 'Cursustotaal';
$string['credentialcreateerror'] = 'Er is een fout opgetreden bij het aanmaken van een credential op Accredible. De fout was: {$a->cause}';
$string['credentialloaderror'] = 'Het laden van credentials uit Accredible is nu niet gelukt. Probeer het later opnieuw; details staan in de logs (component mod_accredible).';
$string['dashboardlink'] = 'Link naar Accredible dashboard';
$string['dashboardlinktext'] = 'Om credentials te verwijderen of vorm te geven, log je in op het <a href="https://dashboard.accredible.com" target="_blank">dashboard</a>';
$string['datecreated'] = 'Datum gecreëerd';
$string['description'] = 'Beschrijving';
$string['emptygradeattributekeyname'] = 'Het eindcijfer van de cursus wordt gekoppeld aan het geselecteerde aangepaste Accredible-attribuut. Als je nog geen aangepast attribuut hebt aangemaakt, kun je dat doen op het <a href="{$a}" target="_blank">Accredible-platform</a>.';
$string['euhelp'] = 'Selecteer dit als je gegevens in de EU (Frankfurt) wilt hosten in plaats van in de VS';
$string['eulabel'] = 'EU-Server (Frankfurt)';
$string['eventapirequestfailed'] = 'Accredible-API-verzoek mislukt';
$string['eventcertificatecreated'] = 'Een credential is naar Accredible verzonden';
$string['eventcredentialissued'] = 'Accredible-credential uitgegeven';
$string['eventcredentialissuefailed'] = 'Uitgeven van Accredible-credential mislukt';
$string['eventcredentialissueskipped'] = 'Uitgeven van Accredible-credential overgeslagen';
$string['evidenceadderror'] = 'Er is een fout opgetreden bij het toevoegen van bewijs aan Accredible-credential met id = {$a->credentialid}. De fout was: {$a->cause}';
$string['getattributekeysserror'] = 'Er is een fout opgetreden bij het ophalen van je aangepaste Accredible-attribuutsleutels. Controleer de API-sleutel in de plug-ininstellingen of neem contact op met de support van Accredible.';
$string['getcredentialserror'] = 'Er is een fout opgetreden bij het ophalen van credentials. De fout was: {$a->cause}';
$string['getgroupserror'] = 'Er is een fout opgetreden bij het ophalen van je Accredible-groepen. Controleer de API-sleutel in de plug-ininstellingen of neem contact op met de support van Accredible.';
$string['gettemplateserror'] = 'Er is een fout opgetreden bij het ophalen van certificaatsjablonen. Controleer de API-sleutel in de plug-ininstellingen of neem contact op met de support van Accredible.';
$string['gotodashboard'] = 'Om het uiterlijk van je badges en certificaten aan te passen, ga je naar: <a href="https://dashboard.accredible.com" target="_blank">https://dashboard.accredible.com</a>';
$string['gradeattributegradeitemselect'] = 'Kies het op te nemen Moodle-cijfer:';
$string['gradeattributekeynameselect'] = 'Kies een Accredible-ontwerpattribuut:';
$string['gradeissueheader'] = 'Criteria voor automatisch uitgeven: op basis van het eindcijfer van de toets';
$string['groupselect'] = 'Groep';
$string['groupsyncerror'] = 'Er is een fout opgetreden bij het controleren op een bestaande credential. De fout was: {$a->cause}';
$string['id'] = 'ID';
$string['includegradeattributecheckbox'] = 'Ja, cijfer opnemen in de credential.';
$string['includegradeattributedescription'] = 'Cijfer van de leerling opnemen in de credential';
$string['indexheader'] = 'Alle certificaten/badges voor {$a}';
$string['issued'] = 'Uitgegeven';
$string['manualheader'] = 'Handmatig certificaten/badges uitgeven';
$string['manualissuefailures'] = 'Uitgeven van de credential is mislukt voor {$a->count} gebruiker(s): {$a->users}. Zie Site-beheer → Rapporten → Logs (component mod_accredible) voor details.';
$string['modulename'] = 'Accredible certificaten en badges';
$string['modulename_help'] = 'Met de Accredible-activiteit voor certificaten en badges kun je cursuscertificaten of badges uitgeven aan leerlingen op accredible.com.

Voeg de activiteit toe op de plek waar je wilt dat leerlingen hun certificaat of badge zien.';
$string['modulename_link'] = 'mod/accredible/view';
$string['modulenameplural'] = 'Accredible certificaten/badges';
$string['moodlecoursecustomfield'] = 'Kies het op te nemen aangepaste Moodle-cursusveld';
$string['moodlecoursefield'] = 'Kies het op te nemen Moodle-cursusveld';
$string['moodleuserprofilefield'] = 'Kies het op te nemen Moodle-gebruikersprofielveld';
$string['nocertificates'] = 'Er zijn geen certificaten/badges';
$string['nouserswarning'] = 'Je moet een Accredible-groep kiezen om de lijst met gebruikers te kunnen zien.';
$string['overview'] = 'Overzicht';
$string['passinggrade'] = 'Percentage score nodig om voor de cursus (%) te slagen';
$string['pluginadministration'] = 'Beheer Accredible certificaten/badges';
$string['pluginname'] = 'Accredible certificaten en badges';
$string['privacy:metadata:accredible'] = 'Om te kunnen integreren met Accredible moeten gebruikersgegevens met die dienst worden uitgewisseld.';
$string['privacy:metadata:accredible:email'] = 'Je e-mailadres wordt naar Accredible verzonden om een credential uit te geven.';
$string['privacy:metadata:accredible:fullname'] = 'Je volledige naam wordt naar Accredible verzonden om een credential uit te geven.';
$string['privacy:metadata:accredible:quizgrade'] = 'Je toetscijfer kan naar Accredible worden verzonden om een credential uit te geven.';
$string['reason_completion_not_met'] = 'Niet alle vereiste voltooiingsactiviteiten waren voltooid';
$string['reason_exception'] = 'Er is een onverwachte fout opgetreden tijdens het uitgeven';
$string['reason_grade_below_threshold'] = 'Het cijfer lag onder de slaaggrens';
$string['reason_legacy_completion_map'] = 'De activiteit gebruikt een voltooiingsregel voor activiteiten die niet langer wordt ondersteund - stel een eindtoets in of schakel cursusvoltooiing in voor deze cursus';
$string['reason_malformed_completion_record'] = 'Het opgeslagen record van voltooiingsactiviteiten is beschadigd';
$string['reason_missing_email'] = 'De gebruiker heeft geen e-mailadres';
$string['reason_missing_groupid'] = 'Er is geen Accredible-groep-id ingesteld';
$string['reason_nothing_to_check'] = 'Voor de activiteit zijn geen eindtoets of voltooiingsactiviteiten ingesteld';
$string['reason_repeat_attempt'] = 'De beslissende toets is meer dan één keer geprobeerd';
$string['recipient'] = 'Ontvanger';
$string['templatename'] = 'Sitegroepnaam (van dashboard)';
$string['trigger_course_completed'] = 'voltooiing van de cursus';
$string['trigger_manual_issue'] = 'een handmatige uitgifte vanuit de activiteitsinstellingen';
$string['trigger_quiz_submission'] = 'een ingediende toets';
$string['unissueddescription'] = 'Deze gebruikers voldoen aan de vereisten voor dit certificaat, maar hebben nog geen certificaat ontvangen. Selecteer degenen voor wie je certificaten wilt uitgeven.';
$string['unissuedheader'] = 'Onuitgegeven certificaten/badges';
$string['usestemplatesdescription'] = 'Zorg ervoor dat je een sitegroep in het dashboard hebt met dezelfde naam als je achievement id.';
$string['viewheader'] = 'Certificaten en badges voor {$a}';
$string['viewimgcomplete'] = 'Klik hier om je certificaat of badge te bekijken';
$string['viewimgincomplete'] = 'Cursus nog bezig';
$string['viewsubheader'] = 'Groep ID: {$a}';
$string['viewsubheaderold'] = 'Achievement ID: {$a}';
