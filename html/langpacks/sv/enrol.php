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
 * Strings for component 'enrol', language 'sv', version '4.1'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Tillgängliga pluginmoduler för registrering';
$string['addinstance'] = 'Lägg till metod';
$string['addinstanceanother'] = 'Lägg till metod och skapa en ny';
$string['ajaxnext25'] = 'Nästa 25...';
$string['ajaxoneuserfound'] = '1 användare hittades';
$string['ajaxxmoreusersfound'] = 'Det hittades fler än {$a} användare.';
$string['ajaxxusersfound'] = '{$a} användare hittades';
$string['assignnotpermitted'] = 'Du har inte behörighet, eller kan inte tilldela roller i den här kursen';
$string['bulkuseroperation'] = 'Bulk användarhantering';
$string['configenrolplugins'] = 'Välj alla de obligatoriska pluginmodulerna och arrangera dem sedan i lämplig ordning.';
$string['custominstancename'] = 'Anpassat namn på instans';
$string['defaultenrol'] = 'Lägg till instans till nya kurser';
$string['defaultenrol_desc'] = 'Det är möjligt att lägga till den här pluginmodulen till alla nya kurser som standard.';
$string['deleteinstanceconfirm'] = 'OBS! Du håller på ta bort registreringsmetoden "{$a->name}". Alla {$a->users} användare som registrerats med denna metod kommer att avregistreras och all kursrelaterad data såsom användarnas betyg, grupptillhörighet eller forumsprenumerationer kommer att raderas.

Vill du verkligen fortsätta?';
$string['deleteinstanceconfirmself'] = 'Vill du verkligen ta bort registreringsmetoden "{$a->name}" som ger dig åtkomst till denna kurs? Risken är att du inte längre kommer in i kursen om du fortsätter.';
$string['deleteinstancenousersconfirm'] = 'Du håller på att ta bort registreringsmetoden "{$a->name}". Är du säker på att du vill fortsätta?';
$string['disableinstanceconfirmself'] = 'Vill du verkligen stänga av registreringsmetoden "{$a->name}" som ger dig åtkomst till denna kurs? Risken är att du inte längre kommer in i kursen om du fortsätter.';
$string['durationdays'] = '{$a} dagar';
$string['editenrolment'] = 'Redigera registrering';
$string['edituserenrolment'] = 'Redigera registrering på {$a}';
$string['enrol'] = 'Registrera';
$string['enrolcandidates'] = 'Inga registrerade användare';
$string['enrolcandidatesmatching'] = 'Matchar icke-registrerade användare';
$string['enrolcohort'] = 'Registrera kohort';
$string['enrolcohortusers'] = 'Registrera användare';
$string['enroldetails'] = 'Registreringsdetaljer';
$string['enrollednewusers'] = '{$a} nya användare registrerades framgångsrikt';
$string['enrolledusers'] = 'Registrerade användare';
$string['enrolledusersmatching'] = 'Matchar registrerade användare';
$string['enrolme'] = 'Registrera mig på den här kursen';
$string['enrolment'] = 'Kursregistrering';
$string['enrolmentinstances'] = 'Registreringsmetoder';
$string['enrolmentmethod'] = 'Registreringsmetod';
$string['enrolmentnew'] = 'Ny registrering på {$a}';
$string['enrolmentnewuser'] = '{$a->user} har registrerat sig på kursen "{$a->course}"';
$string['enrolmentoptions'] = 'Registreringsalternativ';
$string['enrolments'] = 'Registreringar';
$string['enrolmentupdatedforuser'] = 'Registreringen för användaren "{$a->fullname}" har uppdaterats';
$string['enrolnotpermitted'] = 'Du har inte behörighet, eller har inte rätt att registrera någon på den här kursen.';
$string['enrolperiod'] = 'Registreringens varaktighet';
$string['enroltimecreated'] = 'Registrering skapad';
$string['enroltimeend'] = 'Registrering avslutas';
$string['enroltimeendinvalid'] = 'Slutdatum för registrering måste vara senare än startdatum för registrering.';
$string['enroltimestart'] = 'Registrering påbörjas';
$string['enrolusage'] = 'Instanser/registreringar';
$string['enrolusers'] = 'Registrera användare';
$string['enrolxusers'] = 'Registrera {$a} användare';
$string['errajaxfailedenrol'] = 'Det gick inte att registrera användare';
$string['errajaxsearch'] = 'Fel vid sökning användare';
$string['erroreditenrolment'] = 'Ett fel inträffade när försök att ändra en användares registrering gjordes';
$string['errorenrolcohort'] = 'Fel vid skapande av instans för kohortsynkning för registrering i denna kurs.';
$string['errorenrolcohortusers'] = 'Fel vid registrering av kohortmedlemmar i denna kurs.';
$string['errorthresholdlow'] = 'Meddelandetröskel måste vara minst 1 dag.';
$string['errorwithbulkoperation'] = 'Ett fel inträffade när massändringen av registreringarna skulle genomföras.';
$string['eventenrolinstancecreated'] = 'Registreringsmetod skapad';
$string['eventenrolinstancedeleted'] = 'Registreringsmetod borttagen';
$string['eventenrolinstanceupdated'] = 'Registreringsmetod har uppdaterats';
$string['eventuserenrolmentcreated'] = 'Användaren har registrerats på kursen';
$string['eventuserenrolmentdeleted'] = 'Användaren har avregistrerats från kursen';
$string['eventuserenrolmentupdated'] = 'Användarregistrering har uppdaterats';
$string['expirynotify'] = 'Meddela innan registrering förfaller';
$string['expirynotify_help'] = 'Denna inställning avgör om meddelande om registreringens förfallande ska sändas.';
$string['expirynotifyall'] = 'Registrerare och registrerad användare';
$string['expirynotifyenroller'] = 'Registrerare endast';
$string['expirynotifyhour'] = 'Timme för att sända meddelande om registrering som förfaller';
$string['expirythreshold'] = 'Meddelandetröskel';
$string['expirythreshold_help'] = 'Hur långt innan registreringens förfallande ska användare meddelas?';
$string['extremovedaction'] = 'Extern avregistreringsåtgärd';
$string['extremovedaction_help'] = 'Välj åtgärd att vidta då användarregistreringen försvinner från den extern källan för registreringen. Observera att vissa användardata och inställningar rensas från kursen vid avregistreringen.';
$string['extremovedkeep'] = 'Behåll användare registrerad';
$string['extremovedsuspend'] = 'Inaktivera kursregistrering';
$string['extremovedsuspendnoroles'] = 'Inaktivera kursregistrering och ta bort roller';
$string['extremovedunenrol'] = 'Avregistrera användare från kurs';
$string['finishenrollingusers'] = 'Slutför registrering';
$string['foundxcohorts'] = '{$a} kohorter har hittats';
$string['instanceadded'] = 'Metod har lagts till';
$string['instanceeditselfwarning'] = 'Varning:';
$string['instanceeditselfwarningtext'] = 'Du är registrerad på denna kurs genom denna registreringsmetod. Ändringar kan påverka din åtkomst till kursen.';
$string['invalidenrolduration'] = 'Ogiltig varaktighet för registrering.';
$string['invalidenrolinstance'] = 'Felaktig registreringsinstans';
$string['invalidrequest'] = 'Ogiltig begäran';
$string['invalidrole'] = 'Ogiltig roll';
$string['manageenrols'] = 'Hantera pluginmoduler för registrering';
$string['manageinstance'] = 'Hantera';
$string['method'] = 'Metod';
$string['migratetomanual'] = 'Migrera till manuella registreringar';
$string['nochange'] = 'Ingen förändring';
$string['noexistingparticipants'] = 'Inga befintliga deltagare';
$string['nogroup'] = 'Ingen grupp';
$string['noguestaccess'] = 'Gäster inte kan komma i denna kurs, försök att logga in';
$string['none'] = 'Inga';
$string['notenrollable'] = 'Du kan inte registrera dig själv på denna kurs.';
$string['notenrolledusers'] = 'Övriga användare';
$string['otheruserdesc'] = 'Följande användare är inte registrerade i kursen men har roller, ärvda eller tilldelade.';
$string['participationactive'] = 'Aktiv';
$string['participationnotcurrent'] = 'Ej för närvarande';
$string['participationstatus'] = 'Status';
$string['participationsuspended'] = 'Spärrad';
$string['periodend'] = 'tills {$a}';
$string['periodnone'] = 'registrerad {$a}';
$string['periodstart'] = 'från {$a}';
$string['periodstartend'] = 'från {$a->start} till {$a->end}';
$string['privacy:metadata:user_enrolments'] = 'Registreringar';
$string['privacy:metadata:user_enrolments:enrolid'] = 'Registreringsplugin-instansen';
$string['privacy:metadata:user_enrolments:modifierid'] = 'ID för användaren som senast ändrade användarregistreringen';
$string['privacy:metadata:user_enrolments:status'] = 'Status för användarens kursregistrering';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Systempluginmodulen Registreringar lagrar registrerade användare.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'Tidpunkt då användarregistreringen skapades';
$string['privacy:metadata:user_enrolments:timeend'] = 'Tid då användarregistreringen upphör';
$string['privacy:metadata:user_enrolments:timemodified'] = 'Tidpunkt då användarregistreringen ändrades';
$string['privacy:metadata:user_enrolments:timestart'] = 'Tid då användarregistreringen börjar';
$string['privacy:metadata:user_enrolments:userid'] = 'Användar-ID:t';
$string['proceedtocourse'] = 'Gå vidare till kursinnehåll';
$string['recovergrades'] = 'Återställ användarens betyg om möjligt';
$string['rolefromcategory'] = '{$a->role} (Ärvd från kurskategori)';
$string['rolefrommetacourse'] = '{$a->role} (Ärvd från föräldrakurs)';
$string['rolefromsystem'] = '{$a->role} (Tilldelad på webbplatsnivå)';
$string['rolefromthiscourse'] = '{$a->role} (Tilldelad i denna kurs)';
$string['sendfromcoursecontact'] = 'Från kurskontakten';
$string['sendfromkeyholder'] = 'Från nyckelinnehavaren';
$string['sendfromnoreply'] = 'Från no-reply adressen';
$string['startdatetoday'] = 'Idag';
$string['synced'] = 'Synkroniserad';
$string['testsettings'] = 'Testa inställningarna';
$string['testsettingsheading'] = 'Testa registreringsinställningar - {$a}';
$string['timeended'] = 'Avslutstid';
$string['timeenrolled'] = 'Registrerad';
$string['timereaggregated'] = 'Tid omaggregerad';
$string['timestarted'] = 'Starttid';
$string['totalenrolledusers'] = '{$a} registrerade användare';
$string['totalotherusers'] = '{$a} övriga användare';
$string['totalunenrolledusers'] = '{$a} avregistrerade användare';
$string['unassignnotpermitted'] = 'Du har inte behörighet att frånta roller i denna kurs';
$string['unenrol'] = 'Avregistrera';
$string['unenrolconfirm'] = 'Vill du verkligen avregistrera <b>{$a->user}</b> (tidigare registrerad via "{$a->enrolinstancename}") från "{$a->course}" ?';
$string['unenrolleduser'] = 'Användare ”{$a->fullname}” avregistrerades från kursen';
$string['unenrolme'] = 'Avregistrera mig från {$a}';
$string['unenrolnotpermitted'] = 'Du har inte behörighet, eller kan inte avregistrera denna användare från kursen.';
$string['unenrolroleusers'] = 'Avregistrera användare';
$string['uninstallmigrating'] = 'Migrerar "{$a}" registreringar';
$string['unknowajaxaction'] = 'Okänd åtgärd begärdes';
$string['unlimitedduration'] = 'Obegränsad';
$string['userremovedfromselectiona'] = 'Användare "{$a}" togs bort från urvalet.';
$string['usersearch'] = 'Sök';
$string['withselectedusers'] = 'För valda användare';
$string['youenrolledincourse'] = 'Du är registrerad på kursen.';
$string['youunenrolledfromcourse'] = 'Du är avregistrerad från kursen "{$a}".';
