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
 * Strings for component 'completion', language 'sv', version '4.1'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Uppnår betyg';
$string['achievingpassinggrade'] = 'Erhåller godkänt betyg';
$string['activities'] = 'Aktiviteter';
$string['activitiescompleted'] = 'Slutförda aktiviteter';
$string['activitiescompletednote'] = 'Notera: Slutförande av aktivitet måste aktiveras för en aktivitet för att den ska synas i ovanstående lista.';
$string['activitieslabel'] = 'Aktiviteter / resurser';
$string['activityaggregation'] = 'Villkor kräver att';
$string['activityaggregation_all'] = 'ALLA valda aktiviteter slutförs';
$string['activityaggregation_any'] = 'NÅGON av de valda aktiviteterna slutförs';
$string['activitycompletion'] = 'Slutförande av aktivitet';
$string['activitycompletionupdated'] = 'Ändringar sparade';
$string['activitygradenotrequired'] = 'Betyg krävs ej';
$string['activitygradetopassnotset'] = 'Den här aktiviteten har inte angivit någon betygsgräns för godkänt. Den kan ställas in i avsnittet Betyg i aktivitetsinställningarna.';
$string['affectedactivities'] = 'Förändringarna påverkar följande <b>{$a}</b> aktiviteter eller resurser:';
$string['aggregationmethod'] = 'Sammanställningsmetod';
$string['all'] = 'Allt';
$string['any'] = 'Valfri';
$string['approval'] = 'Godkännande';
$string['areyousureoverridecompletion'] = 'Vill du åsidosätta det aktuella slutförandetillståndet för den här aktiviteten och för den här användaren och markera det "{$a}"?';
$string['badautocompletion'] = 'När du väljer automatiskt slutförande måste du även ställa in minst ett villkor (nedan).';
$string['badcompletiongradeitemnumber'] = 'Kräv resultat kan inte aktiveras för <b>{$a}</b> eftersom bedömning av {$a} inte är aktiverad.';
$string['bulkactivitycompletion'] = 'Massredigera slutförandeinställningar för kursaktiviteter';
$string['bulkactivitydetail'] = 'Välj en eller flera aktiviteter att redigera.';
$string['bulkcompletiontracking'] = 'Slutförandebevakning';
$string['bulkcompletiontracking_help'] = '<strong>Ingen:</strong> Ange inte något status för slutförande av aktiviteten

<strong>Manuellt:</strong> Deltagare kan manuellt markera aktiviteten som slutförd

<strong>Med villkor:</strong> Visa aktivitet som slutförd när villkor är uppfyllda';
$string['checkactivity'] = 'Kryssruta för aktivitet / resurs: {$a}';
$string['checkall'] = 'Markera eller avmarkera alla aktiviteter och resurser';
$string['checkallsection'] = 'Markera eller avmarkera alla aktiviteter och resurser i följande sektion: {$a}';
$string['completeactivity'] = 'Slutför aktiviteten';
$string['completed'] = 'Slutförd';
$string['completedunlocked'] = 'Alternativen för slutförande är upplåsta';
$string['completedunlockedtext'] = 'När du sparar ändringarna nollställs markeringarna av slutförande för alla kursdeltagare. Om du inte är säker på att detta ska göras, välj att avbryta.';
$string['completedwarning'] = 'Alternativen för slutförande är låsta';
$string['completedwarningtext'] = 'Den här aktiviteten har redan markerats som slutförd för {$a} deltagare. Om du ändrar alternativet för slutförande av aktiviteten kommer deras slutförandestatus tas bort och det kan orsaka förvirring. Således bör inte alternativen låsas upp om det inte är absolut nödvändigt.';
$string['completion'] = 'Slutförandebevakning';
$string['completion-alt-auto-enabled'] = 'Systemet markerar automatiskt denna aktivitet som slutförd baserat på uppställda kriterier.';
$string['completion-alt-auto-fail'] = 'Slutförd: {$a} (uppnådde inte godkänt resultat)';
$string['completion-alt-auto-n'] = 'Ej slutförd: {$a}';
$string['completion-alt-auto-n-override'] = 'Ej slutförd: {$a->modname} (satt av {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Slutförd: {$a} (godkänt resultat)';
$string['completion-alt-auto-y'] = 'Slutförd: {$a}';
$string['completion-alt-auto-y-override'] = 'Slutförd: {$a->modname} (satt av {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Kursdeltagare kan själv markera denna aktivitet som slutförd';
$string['completion-alt-manual-n'] = 'Ej slutförd: {$a}. Välj för att markera som slutförd.';
$string['completion-alt-manual-n-override'] = 'Ej slutförd: {$a->modname} (satt av {$a->overrideuser}). Välj för att markera som slutförd.';
$string['completion-alt-manual-y'] = 'Slutförd: {$a}. Välj för att markera som ej slutförd.';
$string['completion-alt-manual-y-override'] = 'Slutförd: {$a->modname} (satt av {$a->overrideuser}). Välj för att markera som ej slutförd.';
$string['completion-fail'] = 'Slutförd (inte uppnått godkänt betyg)';
$string['completion-n'] = 'Ej slutförd';
$string['completion-n-override'] = 'Ej slutförd (satt av {$a})';
$string['completion-pass'] = 'Slutförd (uppnått godkänt betyg)';
$string['completion-y'] = 'Slutförd';
$string['completion-y-override'] = 'Slutförd (satt av {$a})';
$string['completion_automatic'] = 'Visa aktivitet som slutförd när villkor är uppnådda.';
$string['completion_help'] = 'Om aktiverat blir aktivitetsslutförandet markerat manuellt eller automatiskt, beroende på angivna kriterier. Flera kriterier kan anges. Om så blir aktiviteten betraktad som slutförd först då <strong>samtliga</strong> dessa uppfyllts.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'Kursdeltagare kan själva markera aktiviteten som slutförd.';
$string['completion_none'] = 'Ingen slutförandebevakning';
$string['completionactivitydefault'] = 'Använd aktivitetsstandard';
$string['completiondefault'] = 'Standard för bevakning av slutförande';
$string['completiondisabled'] = 'Inaktiverad - visas inte i aktivitetsinställningar';
$string['completionduration'] = 'Registrering';
$string['completionenabled'] = 'Aktiverad, hanteras via inställningar för aktiviteter och slutförande';
$string['completionexpected'] = 'Förväntad tid för slutförande';
$string['completionexpected_help'] = 'Den här inställningen anger det datum då aktiviteten förväntas slutföras. När datumet närmar sig visas aktiviteten i tidslinjeblocket på översiktssidan.';
$string['completionexpecteddesc'] = 'Slutförande förväntas den {$a}';
$string['completionexpectedfor'] = '{$a->instancename} ska slutföras';
$string['completionicons'] = 'Kryssrutor för att markera slutförande';
$string['completionicons_help'] = 'En markering bredvid ett aktivitetsnamn kan användas för att indikera när aktiviteten är slutförd.

Om en ruta med en prickad kantlinje visas kommer en markering automatiskt dyka upp när du har slutfört aktiviteten enligt de villkor som läraren har angett.

Om en ruta med en fast kantlinje visas kan du klicka på den för att kryssa i rutan när du tror att du har slutfört aktiviteten. (Om du klickar på den igen tas markeringen bort, om du skulle ånga dig.)';
$string['completionmenuitem'] = 'Slutförande';
$string['completionnotenabled'] = 'Slutförande är inte aktiverat';
$string['completionnotenabledforcourse'] = 'Slutförande är inte aktiverat för den här kursen';
$string['completionnotenabledforsite'] = 'Slutförande är inte aktiverad för den här webbplatsen';
$string['completionondate'] = 'Datum';
$string['completionondatevalue'] = 'Datum när kursen kommer att markeras som slutförd';
$string['completionpassgrade'] = 'Kräv godkännandebetyg';
$string['completionpassgrade_desc'] = 'Studenten måste erhålla ett godkänt betyg för att slutföra den här aktiviteten.';
$string['completionpassgrade_help'] = 'Om aktiverad anses den här aktiviteten slutförd när studenten erhåller ett godkänt betyg.';
$string['completionsettingslocked'] = 'Alternativen för slutförande är låsta';
$string['completionupdated'] = 'Uppdaterat slutförande för aktiviteten <b>{$a}</b>';
$string['completionusegrade'] = 'Kräv betyg';
$string['completionusegrade_desc'] = 'Studenten måste få betyg för att slutföra denna aktivitet';
$string['completionusegrade_help'] = 'Om aktiverat anses aktiviteten vara slutförd när en deltagare får ett betyg. Om en betygsgräns för godkänt har angivits visas ikonerna för godkänd/underkänd i slutföranderapporten för aktiviteten.';
$string['completionview'] = 'Kräv visning';
$string['completionview_desc'] = 'Studenten måste öppna den här aktiviteten för att slutföra den';
$string['configcompletiondefault'] = 'Standardinställning för slutförandebevakning när nya aktiviteter skapas';
$string['configenablecompletion'] = 'Om aktiverad kan slutförandevillkor för kurs- och aktivitet ställas in. Inställning av villkoren för slutförande av aktivitet rekommenderas så att meningsfulla data visas för användare i deras kursöversikt på översiktssidan.';
$string['confirmselfcompletion'] = 'Bekräfta slutförande';
$string['courseaggregation'] = 'Villkoret kräver att';
$string['courseaggregation_all'] = 'ALLA valda kurser slutförs';
$string['courseaggregation_any'] = 'NÅGON vald kurs slutförs';
$string['coursealreadycompleted'] = 'Du har redan slutfört denna kurs.';
$string['coursecomplete'] = 'Kurs slutförd';
$string['coursecompleted'] = 'Kurs slutförd';
$string['coursecompletedmessage'] = '<p>Gratulerar!</p><p>Du har slutfört kursen <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Kursslutförande';
$string['coursecompletioncondition'] = 'Villkor: {$a}';
$string['coursecompletionnavigation'] = 'Kursslutförandenavigering';
$string['coursegrade'] = 'Kursbetyg';
$string['coursesavailable'] = 'Tillgängliga kurser';
$string['coursesavailableexplaination'] = 'OBS! Villkoren för slutförande av kurs måste anges för en kurs för att den ska synas i ovanstående lista.';
$string['criteria'] = 'Kriterier';
$string['criteriagroup'] = 'Kriteriegrupp';
$string['criteriarequiredall'] = 'Alla kriterier nedan krävs';
$string['criteriarequiredany'] = 'Något av kriterierna nedan krävs';
$string['csvdownload'] = 'Ladda ned i kalkylbladsformat (UTF-8 .csv)';
$string['datepassed'] = 'Datum för godkännande';
$string['days'] = 'Dagar';
$string['daysoftotal'] = '{$a->days} av {$a->total}';
$string['daysuntilcompletion'] = 'Dagar till slutförande';
$string['defaultcompletion'] = 'Standardinställningar för aktivitetsslutförande';
$string['defaultcompletionupdated'] = 'Ändringar sparade';
$string['deletecompletiondata'] = 'Ta bort slutförandedata';
$string['dependencies'] = 'Beroenden';
$string['dependenciescompleted'] = 'Slutförande av andra kurser';
$string['detail_desc:receivegrade'] = 'Få ett betyg';
$string['detail_desc:receivepassgrade'] = 'Erhåll ett godkänt betyg';
$string['detail_desc:view'] = 'Visa';
$string['done'] = 'Slutförd';
$string['editcoursecompletionsettings'] = 'Redigera slutförandevillkor';
$string['enablecompletion'] = 'Bevaka slutförande';
$string['enablecompletion_help'] = 'Om aktiverat kan villkor för kurs- och aktivitetsslutförande specificeras. Det rekommenderas att ha detta aktiverat så att meningsfulla data visas i kursöversikten på översiktssidan.';
$string['enrolmentduration'] = 'Registreringens varaktighet';
$string['enrolmentdurationlength'] = 'Användare måste vara registrerad i';
$string['err_noactivities'] = 'Slutförandeinformation är inte inställd för någon aktivitet, så ingen sådan kan visas. Du kan aktivera spårning av slutförande via inställningarna för en aktivitet.';
$string['err_nocourses'] = 'Spårning av slutförande av kurs är inte aktiverad för någon annan kurs, så detta kan inte visas. Du kan aktivera spårning av slutförande av kurs i kursinställningarna.';
$string['err_nograde'] = 'En betygsgräns för godkännande i kursen har inte angivits. För att aktivera detta kriterium måste du ange en betygsgräns för godkänt i denna kurs.';
$string['err_noroles'] = 'Det finns inga roller med behörigheten <code>moodle/course:markcomplete</code> i den här kursen.';
$string['err_nousers'] = 'Det finns inga deltagare i den här kursen eller gruppen för vilka slutförandeinformation visas. (Slutförandeinformation visas endast för användare med funktionsbehörigheten <code>moodle/course:isincompletionreports</code>. Möjligheten är endast tillåten för standardrollen <em>deltagare</em>, så om det inte finns några deltagare, ser du det här meddelandet.)';
$string['err_settingslocked'] = 'En eller flera elever har redan uppfyllt ett eller flera villkor och därför har inställningarna låsts. Om du låser upp inställningarna för slutförandevillkoren tas alla befintliga användardata bort och det kan orsaka förvirring.';
$string['err_system'] = 'Ett internt fel uppstod i slutförandesystemet. Kontakta en systemadministratör. (Systemadministratörer kan aktivera debug-läge för att se ytterligare information.)';
$string['eventcoursecompleted'] = 'Kurs slutförd';
$string['eventcoursecompletionupdated'] = 'Kursslutförande uppdaterat';
$string['eventcoursemodulecompletionupdated'] = 'Slutförande för kursaktivitet uppdaterat';
$string['eventdefaultcompletionupdated'] = 'Standardvärdet för slutförande för kursaktivitet uppdaterat';
$string['excelcsvdownload'] = 'Ladda ned i Excelkompatibelt format (.csv)';
$string['failed'] = 'Misslyckad';
$string['fraction'] = 'Del';
$string['graderequired'] = 'Betygsgräns för godkänt';
$string['gradexrequired'] = '{$a} krävs';
$string['hiddenrules'] = 'Vissa inställningar som är specifika för <b>{$a}</b> har dolts. För att visa, avmarkera andra aktiviteter';
$string['inprogress'] = 'Pågående';
$string['manual'] = 'Manuellt';
$string['manualcompletionby'] = 'Manuellt slutförande av andra';
$string['manualcompletionbynote'] = 'OBS! Funktionsbehörigheten <code>moodle/course:markcomplete</code> måste tillåtas för att en roll ska synas i listan.';
$string['manualselfcompletion'] = 'Manuellt eget slutförande';
$string['manualselfcompletionnote'] = 'OBS! Blocket <em>Eget slutförande</em> måste läggas till i kursen om manuellt eget slutförande är aktiverat.';
$string['markcomplete'] = 'Markera som slutförd';
$string['markedcompleteby'] = 'Markerad som slutförd av {$a}';
$string['markingyourselfcomplete'] = 'Markera dig själv som klar';
$string['modifybulkactions'] = 'Ändra de åtgärder du vill massredigera';
$string['moredetails'] = 'Ytterligare detaljer';
$string['nocriteriaset'] = 'Inga slutförandekriterier har angivits för denna kurs.';
$string['nogradeitem'] = 'Kräv betyg kan inte aktiveras för <b>{$a}</b> eftersom aktiviteten inte är bedömd.';
$string['notcompleted'] = 'Ej slutförd';
$string['notenroled'] = 'Du är inte registrerad i den här kursen';
$string['nottracked'] = 'För närvarande spåras inte ditt slutförande i denna kurs.';
$string['notyetstarted'] = 'Ännu ej påbörjad';
$string['overallaggregation'] = 'Slutförandvillkor';
$string['overallaggregation_all'] = 'Kursen är slutförd då ALLA villkor har uppfyllts';
$string['overallaggregation_any'] = 'Kursen är slutförd då NÅGOT villkor har uppfyllts';
$string['pending'] = 'Väntande';
$string['periodpostenrolment'] = 'Period för efteranmälan';
$string['privacy:metadata:completionstate'] = 'Om aktiviteten slutförts';
$string['privacy:metadata:course'] = 'Kursidentifierare';
$string['privacy:metadata:coursecompletedsummary'] = 'Lagrar information om användare som uppfyllt kriterium i en kurs';
$string['privacy:metadata:coursemoduleid'] = 'Aktivitets-ID:t';
$string['privacy:metadata:coursemodulesummary'] = 'Lagrar information om aktivitetsslutförande för en användare';
$string['privacy:metadata:coursesummary'] = 'Lagrar information om kursslutförande för en användare';
$string['privacy:metadata:gradefinal'] = 'Slutbetyg som erhållits för kursslutförande';
$string['privacy:metadata:overrideby'] = 'Användar-ID för den som åsidosatte aktivitetsslutförandet';
$string['privacy:metadata:reaggregate'] = 'Om kursslutförandet sammanställdes på nytt.';
$string['privacy:metadata:timecompleted'] = 'Tidpunkt för då kursen slutfördes.';
$string['privacy:metadata:timeenrolled'] = 'Tidpunkt för då användaren registrerades på kursen.';
$string['privacy:metadata:timemodified'] = 'Tidpunkten då aktivitetsslutförandet ändrades';
$string['privacy:metadata:timestarted'] = 'Tidpunkt för då kursen började';
$string['privacy:metadata:unenroled'] = 'Om användaren avregistrerats från kursen';
$string['privacy:metadata:userid'] = 'Användar-ID för personen med information om kurs- och aktivitetsslutförande';
$string['privacy:metadata:viewed'] = 'Om aktiviteten visades';
$string['progress'] = 'Kursdeltagarens framsteg';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Förlopp: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Verifiering av tidigare kunskaper';
$string['remainingenroledfortime'] = 'Registrerad för en specifik tidsperiod';
$string['remainingenroleduntildate'] = 'Fortsätter vara registrerad på kursen fram till ett angivet datum';
$string['reportpage'] = 'Visar användare {$a->from} till {$a->to} av {$a->total}.';
$string['requiredcriteria'] = 'Obligatoriska kriterier';
$string['resetactivities'] = 'Rensa alla markerade aktiviteter och resurser';
$string['restoringcompletiondata'] = 'Skriver slutförandedata';
$string['roleaggregation'] = 'Villkoret kräver att';
$string['roleaggregation_all'] = 'ALLA valda roller markerar när villkoret är uppfyllt';
$string['roleaggregation_any'] = 'NÅGON vald roll markerar när villkoret är uppfyllt';
$string['roleidnotfound'] = 'Roll-ID {$a} hittades ej';
$string['saved'] = 'Sparad';
$string['seedetails'] = 'Se detaljer';
$string['select'] = 'Välj';
$string['self'] = 'Själv';
$string['selfcompletion'] = 'Eget slutförande';
$string['showcompletionconditions'] = 'Visa slutförandevillkor för aktiviteter';
$string['showcompletionconditions_help'] = 'Slutförandevillkor för aktiviteter visas alltid på aktivitetssidan. Den här inställningen avgör om slutförandevillkor för aktiviteter också visas under varje aktivitet på kurssidan.';
$string['showinguser'] = 'Visar användare';
$string['timecompleted'] = 'Tid för slutförande';
$string['todo'] = 'Att göra';
$string['unenrolingfromcourse'] = 'Avregistrerar sig från kursen';
$string['unenrolment'] = 'Avregistrering';
$string['unit'] = 'Enhet';
$string['unlockcompletion'] = 'Lås upp slutförandealternativ';
$string['unlockcompletiondelete'] = 'Lås upp slutförandealternativ och ta bort användarnas slutförandedata';
$string['updateactivities'] = 'Uppdatera slutförandestatus för valda aktiviteter';
$string['usealternateselector'] = 'Använd alternativ kursväljare';
$string['usernotenroled'] = 'Användaren är inte registrerad på den här kursen';
$string['viewcoursereport'] = 'Visa kursrapport';
$string['viewingactivity'] = 'Visar {$a}';
$string['withconditions'] = 'Med villkor';
$string['writingcompletiondata'] = 'Skriver slutförandedata';
$string['xdays'] = '{$a} dagar';
$string['yourprogress'] = 'Dina framsteg';
