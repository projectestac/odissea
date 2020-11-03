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
 * Strings for component 'completion', language 'nl', branch 'MOODLE_38_STABLE'
 *
 * @package   completion
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Cijfer behalen';
$string['activities'] = 'Activiteiten';
$string['activitiescompleted'] = 'Voltooide activiteiten';
$string['activitiescompletednote'] = 'Opmerking: Voltooide activiteiten moet voor een activiteit ingeschakeld zijn om in bovenstaande lijst te kunnen verschijnen.';
$string['activitieslabel'] = 'Activiteiten / Bronnen';
$string['activityaggregation'] = 'Voorwaarde vereist';
$string['activityaggregation_all'] = 'ALLE geselecteerde activiteiten moeten voltooid zijn';
$string['activityaggregation_any'] = 'EEN geselecteerde activiteit moet voltooid zijn';
$string['activitycompletion'] = 'Voltooide activiteiten';
$string['activitycompletionupdated'] = 'Wijzigingen opgeslagen';
$string['activitygradenotrequired'] = 'Cijfer niet vereist';
$string['affectedactivities'] = 'De wijzigingen zijn van toepassing op de volgende <b>{$a}</b> activiteiten of bronnen:';
$string['aggregationmethod'] = 'Aggregatiemethode';
$string['all'] = 'Alle';
$string['any'] = 'Gelijk welke';
$string['approval'] = 'Goedkeuring';
$string['areyousureoverridecompletion'] = 'Weet je zeker dat je de huidige voltooiingsstatus voor deze activiteit van deze gebruiker wil overschrijven en het markeren als  "{$a}"?';
$string['badautocompletion'] = 'Als je automatisch voltooien kiest, moet je minstens één vereiste inschakelen (zie onder).';
$string['badcompletiongradeitemnumber'] = 'Cijfer vereist is <b>{$a}</b> omdat beoordelen op {$a} niet is ingeschakeld.';
$string['bulkactivitycompletion'] = 'Voltooide activiteiten in bulk bewerken';
$string['bulkactivitydetail'] = 'Selecteer de activiteiten die je in bulk wilt bewerken.';
$string['bulkcompletiontracking'] = 'Voltooien bijhouden';
$string['bulkcompletiontracking_help'] = '<strong>Niet:</strong> Voltooide activiteiten niet aangeven

<strong>Handmatig:</strong> Leerlingen kunnen de activiteit handmatig als voltooid markeren

<strong>Met voorwaarde(n):</strong> Toon de activiteit als voltooid wanneer er voldaan is aan de voorwaarden';
$string['checkactivity'] = 'Keuzevakje voor activiteit / bron: {$a}';
$string['checkall'] = 'Alle activiteiten en bronnen aan- of uitvinken';
$string['checkallsection'] = 'Alle activiteiten en bronnen in de volgende sectie aan- of uitvinken: {$a}';
$string['completed'] = 'Voltooid';
$string['completedunlocked'] = 'Opties voor voltooien niet geblokkeerd';
$string['completedunlockedtext'] = 'Wanneer je wijzigingen bewaart, zal de status van voltooien voor alle gebruikers gewist worden. Als je twijfelt of je dit wel wil, bewaar dit formulier dan niet.';
$string['completedwarning'] = 'Opties voor voltooien geblokkeerd';
$string['completedwarningtext'] = 'Eén of meer gebruikers ({$a}) heeft deze activiteit al als voltooid gemarkeerd. Het wijzigen van de voltooiingsopties zal hun voltooiingsstatus wissen en zou hierdoor voor verwarring kunnen zorgen.
De opties zijn geblokkeerd en je wordt aangeraden die geblokkeerd te laten tenzij het echt niet anders kan.';
$string['completion'] = 'Voltooien bijhouden';
$string['completionactivitydefault'] = 'Gebruik activiteitsstandaard';
$string['completion-alt-auto-enabled'] = 'Het systeem markeert dit item als voltooid - het voldoet aan de voorwaarden:  {$a}';
$string['completion-alt-auto-fail'] = 'Voltooid:  {$a}  (bereikte het cijfer voor geslaagd niet)';
$string['completion-alt-auto-n'] = 'Niet voltooid: {$a}';
$string['completion-alt-auto-n-override'] = 'Niet voltooid: {$a->modname} (ingesteld door {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Voltooid:  {$a} (slaagcijfer bereikt)';
$string['completion-alt-auto-y'] = 'Voltooid: {$a}';
$string['completion-alt-auto-y-override'] = 'Voltooid: {$a->modname} (ingesteld door {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Gebruikers kunnen deze activiteit manueel als voltooid markeren: {$a}';
$string['completion-alt-manual-n'] = 'Niet voltooid: {$a}. Selecteer om te markeren als voltooid';
$string['completion-alt-manual-n-override'] = 'Niet voltooid: {$a->modname} (ingesteld door {$a->overrideuser}). Selecteer om als voltooid te markeren.';
$string['completion-alt-manual-y'] = 'voltooid: {$a}. Selecteer om als niet voltooid te markeren.';
$string['completion-alt-manual-y-override'] = 'Voltooid: {$a->modname} (ingesteld door {$a->overrideuser}). Selecteer om als niet voltooid te markeren.';
$string['completion_automatic'] = 'Toon activiteit als voltooid als aan de voorwaarden voldaan is';
$string['completiondefault'] = 'Standaard voltooien bijhouden';
$string['completiondisabled'] = 'Uitgeschakeld, wordt niet getoond in de activiteitsinstellingen';
$string['completionduration'] = 'Aanmelding';
$string['completionenabled'] = 'Ingeschakeld, controle via de activiteitsinstellingen';
$string['completionexpected'] = 'Voltooien verwacht op';
$string['completionexpecteddesc'] = 'Voltooiing verwacht op {$a}';
$string['completionexpectedfor'] = '{$a->instancename} moet nog voltooid worden';
$string['completionexpected_help'] = 'Deze instelling geeft de datum op wanneer de activiteit voltooid hoort te zijn.';
$string['completion-fail'] = 'Voltooid (behaald cijfer onvoldoende)';
$string['completion_help'] = 'Indien ingeschakeld wordt het voltooien van activiteiten opgevolgd, ofwel manueel ofwel automatisch, gebaseerd op bepaalde voorwaarden. Meerdere voorwaarden kunnen ingesteld worden indien gewenst. Indien er meerdere voorwaarden zijn, wordt de activiteit pas als voltooid beschouwd als aan alle voorwaarden voldaan is.

Een vinkje naast de activiteitsnaam op de cursuspagina geeft aan of de activiteit voltooid is.';
$string['completionicons'] = 'Selectievakjes voor voltooien';
$string['completionicons_help'] = 'Een vinkje in het selectievakje naast een activiteitsnaam kan worden gebruikt om aan te duiden dat de activiteit voltooid is.

Wanneer je een selectievakje ziet waarvan de rand uit puntjes bestaat, zal dit automatisch aangevinkt worden wanneer je de activiteit hebt voltooid volgens de voorwaarden die door de leraar zijn opgesteld.

Wanneer je een selectievakje ziet waarvan de rand uit volle lijnen bestaat, dan kan je er zelf in klikken om aan te vinken dat de activiteit volgens jou voltooid is. (Je kunt er achteraf nog eens in klikken om het vinkje te verwijderen wanneer je je bedenkt.) Het aanvinken is optioneel; het is enkel een manier om je vooruitgang in de cursus bij te houden.';
$string['completion_manual'] = 'Gebruikers kunnen de activiteit manueel als voltooid markeren';
$string['completionmenuitem'] = 'Voltooien';
$string['completion-n'] = 'Niet voltooid';
$string['completion_none'] = 'Voltooide activiteiten niet aanduiden';
$string['completionnotenabled'] = 'Voltooien is niet ingeschakeld';
$string['completionnotenabledforcourse'] = 'Voltooien is niet ingeschakeld voor deze cursus';
$string['completionnotenabledforsite'] = 'Voltooien is niet ingeschakeld voor deze site';
$string['completion-n-override'] = 'Niet voltooid (ingesteld door {$a})';
$string['completionondate'] = 'Datum';
$string['completionondatevalue'] = 'Datum wanneer de cursus als voltooid gemarkeerd zal worden';
$string['completion-pass'] = 'Voltooid (voldoende cijfer behaald)';
$string['completionsettingslocked'] = 'Instellingen voor voltooien geblokkeerd';
$string['completionupdated'] = 'Voltooiing voor activiteit <b>{$a}</b> geüpdatet';
$string['completionusegrade'] = 'Cijfer vereist';
$string['completionusegrade_desc'] = 'De leerling moet een cijfer krijgen om deze activiteit te voltooien';
$string['completionusegrade_help'] = 'Indien ingeschakeld, wordt de activiteit als voltooid beschouwd zodra de leerling een cijfer gekregen heeft. Er kunnen geslaagd en mislukt icoontjes getoond worden als er een cijfer ingesteld is vanaf wanneer een leerling als geslaagd beschouwd wordt.';
$string['completionview'] = 'Bekijken vereist';
$string['completionview_desc'] = 'De leerling moet deze activiteit bekeken hebben om als voltooid beschouwd te worden.';
$string['completion-y'] = 'Voltooid';
$string['completion-y-override'] = 'Voltooid (ingesteld door {$a})';
$string['configcompletiondefault'] = 'De standaardinstelling voor het bijhouden van voltooien wanneer nieuwe activiteiten gemaakt worden.';
$string['configenablecompletion'] = 'Wanneer ingeschakeld, kun je voorwaarden instellen voor het voltooien van activiteiten. Het instellen van zulke voorwaarden is een goed idee, zodat er zinvolle informatie aan de gebruikers getoond wordt op hun startpagina.';
$string['confirmselfcompletion'] = 'Bevestig zelf als voltooid';
$string['courseaggregation'] = 'Voorwaarde vereist';
$string['courseaggregation_all'] = 'ALLE geselecteerde cursussen moeten voltooid zijn';
$string['courseaggregation_any'] = 'EEN geselecteerde cursus moet voltooid zijn';
$string['coursealreadycompleted'] = 'Je hebt deze cursus al voltooid';
$string['coursecomplete'] = 'Cursus voltooid';
$string['coursecompleted'] = 'Cursus voltooid';
$string['coursecompletion'] = 'Cursus voltooien';
$string['coursecompletioncondition'] = 'Voorwaarde:{$a}';
$string['coursegrade'] = 'Cursuscijfer';
$string['coursesavailable'] = 'Cursus beschikbaar';
$string['coursesavailableexplaination'] = 'Opmerking: de criteria voor het voltooien van een cursus moeten ingesteld zijn om in bovenstaande lijst te verschijnen.';
$string['criteria'] = 'Criteria';
$string['criteriagroup'] = 'Criteria groep';
$string['criteriarequiredall'] = 'Alle onderstaande criteria zijn vereist';
$string['criteriarequiredany'] = 'Al onderstaande criteria zijn vereist';
$string['csvdownload'] = 'Download als rekenblad (UTF-8.csv)';
$string['datepassed'] = 'Datum geslaagd';
$string['days'] = 'Dagen';
$string['daysoftotal'] = '{$a->days} van {$a->total}';
$string['defaultcompletion'] = 'Standaard voltooide activiteiten';
$string['defaultcompletionupdated'] = 'Wijzigingen opgeslagen';
$string['deletecompletiondata'] = 'Verwijder voltooiingsgegevens';
$string['dependencies'] = 'Voorwaarden';
$string['dependenciescompleted'] = 'Voltooien van andere cursussen';
$string['editcoursecompletionsettings'] = 'Bewerk instelling voor cursusvoltooiing';
$string['enablecompletion'] = 'Bijhouden van voltooiing inschakelen';
$string['enablecompletion_help'] = 'Indien ingeschakeld kunnen er in de activiteit en/of cursus voorwaarden voor voltooiing ingesteld worden.  Het wordt aangeraden dit in te schakelen, zodat het Cursusoverzicht op Mijn startpagina betekenisvolle gegevens toont.';
$string['enrolmentduration'] = 'Aanmeldingsduur';
$string['enrolmentdurationlength'] = 'Gebruiker blijft aangemeld gedurende';
$string['err_noactivities'] = 'Informatie over voltooien is voor geen enkele activiteit ingeschakeld, dus kan het niet getoond worden. Je kunt dit inschakelen door de instellingen van een activiteit te wijzigen.';
$string['err_nocourses'] = 'Cursus voltooien is voor geen enkele cursus ingeschakeld, dus er kan niets getoond worden. Je kunt cursus voltooien inschakelen in de cursusinstellingen';
$string['err_nograde'] = 'Een slaagcijfer is niet ingesteld voor deze cursus. Om dit criterium in te stellen, moet je een slaagcijfer voor deze cursus instellen.';
$string['err_noroles'] = 'Er zijn geen rollen met de mogelijkheid \'moodle/course:markcomplete\' in deze cursus.';
$string['err_nousers'] = 'Er zijn geen gebruikers in deze cursus of groep van wie informatie over voltooide activiteiten getoond wordt. (Informatie over voltooide activiteiten enkel getoond voor gebruikers met de mogelijkheid \'Getoond worden op voltooiingsrapporten\'. Deze mogelijkheid is standaard alleen toegewezen aan de leerling rol. Als er geen leerlingen zijn, dan zie je dit bericht.)';
$string['err_settingslocked'] = 'Eén of meer leerlingen hebben al een criterium bereikt en daarom zijn de instellingen geblokkeerd. Het deblokkeren van de voltooiingscriteria zal alle bestaande gebruikersgegevens verwijderen en kan verwarring veroorzaken.';
$string['err_system'] = 'Er is een interne fout opgetreden in het systeem om voltooide activiteiten bij te houden. (Systeembeheerders kunnen foutopsporing inschakelen om meer details over de fout te krijgen.)';
$string['eventcoursecompleted'] = 'Cursus voltooid';
$string['eventcoursecompletionupdated'] = 'Cursus voltooien aangepast';
$string['eventcoursemodulecompletionupdated'] = 'Voltooien van cursusactiviteit aangepast';
$string['eventdefaultcompletionupdated'] = 'Standaardwaarde voor voltooide activiteiten in cursus geüpdatet';
$string['excelcsvdownload'] = 'Download in Excel-compatibel formaat (.csv)';
$string['fraction'] = 'Breuk';
$string['graderequired'] = 'Vereist cursuscijfer';
$string['gradexrequired'] = '{$a} vereist';
$string['hiddenrules'] = 'Sommige instellingen specifiek voor <b>{$a}</b> zijn verborgen. Deselecteer andere activiteiten om deze te zien';
$string['inprogress'] = 'Bezig';
$string['manual'] = 'Handmatig';
$string['manualcompletionby'] = 'Manueel voltooid door anderen';
$string['manualcompletionbynote'] = 'Opmerking: de mogelijkheid moodle/course:markcomplete moet toegestaan zijn voor een rol om in de lijst te verschijnen.';
$string['manualselfcompletion'] = 'Manueel voltooien';
$string['manualselfcompletionnote'] = 'Opmerking: het blok zelf voltooien moet toegevoegd worden aan de cursus indien manueel zelf voltooien is ingeschakeld.';
$string['markcomplete'] = 'Markeer als voltooid';
$string['markedcompleteby'] = 'Als voltooid gemarkeerd door {$a}';
$string['markingyourselfcomplete'] = 'Markeer zelf als voltooid';
$string['modifybulkactions'] = 'Pas de acties aan die je in bulk wilt bewerken';
$string['moredetails'] = 'Meer details';
$string['nocriteriaset'] = 'Geen voltooiingscriteria ingesteld voor deze cursus';
$string['nogradeitem'] = 'Vereist cijfer kan niet worden ingeschakeld voor <b>{$a}</b> omdat dit een niet te beoordelen activiteit is.';
$string['notcompleted'] = 'Niet voltooid';
$string['notenroled'] = 'Je bent niet aangemeld in deze cursus';
$string['nottracked'] = 'Het voltooien van activiteiten wordt voor deze cursus niet bijgehouden.';
$string['notyetstarted'] = 'Nog niet begonnen';
$string['overallaggregation'] = 'Voltooingsvoorwaarden';
$string['overallaggregation_all'] = 'De cursus is voltooid wanneer aan ALLE voorwaarden is voldaan';
$string['overallaggregation_any'] = 'De cursus is voltooid wanneer aan EEN van de voorwaarden wordt voldaan.';
$string['pending'] = 'Bezig';
$string['periodpostenrolment'] = 'Periode na aanmelding';
$string['privacy:metadata:completionstate'] = 'Als de activiteit voltooid is';
$string['privacy:metadata:course'] = 'Een cursusidentificatie';
$string['privacy:metadata:coursecompletedsummary'] = 'Bewaart informatie over leerlingen die bepaalde criteria in de cursus voltooid hebben';
$string['privacy:metadata:coursemoduleid'] = 'De activiteitsID';
$string['privacy:metadata:coursemodulesummary'] = 'Bewaart het voltooiingstijdstip voor een gebruiker';
$string['privacy:metadata:coursesummary'] = 'Bewaart cursus voltooiingsgegevens van een gebruiker.';
$string['privacy:metadata:gradefinal'] = 'Het behaalde eindcijfer voor het voltooien van de cursus';
$string['privacy:metadata:overrideby'] = 'De gebruikersID van de persoon die het voltooien van de module overschreven heeft';
$string['privacy:metadata:reaggregate'] = 'Of het voltooien van de cursus opnieuw geaggregeerd werd.';
$string['privacy:metadata:timecompleted'] = 'Het tijdstip waarop de cursus voltooid werd.';
$string['privacy:metadata:timeenrolled'] = 'Het tijdstip waarop de gebruiker aangemeld was in de cursus';
$string['privacy:metadata:timemodified'] = 'Het tijdstip waarop het voltooien van de cursusmodule was aangepast';
$string['privacy:metadata:timestarted'] = 'Het tijdstip waarop de cursus gestart was.';
$string['privacy:metadata:unenroled'] = 'Of de gebruiker afgemeld geweest is van de cursus';
$string['privacy:metadata:userid'] = 'De gebruikersID van de gebruiker met cursus-  en activiteitsvoltooiingsgegevens';
$string['privacy:metadata:viewed'] = 'Of de cursusmodule bekeken werd';
$string['progress'] = 'Vordering leerling';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Vordering: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Herkenning van voorkennis';
$string['remainingenroledfortime'] = 'Aangemeld blijven voor een bepaalde periode';
$string['remainingenroleduntildate'] = 'Aangemeld blijven tot een bepaalde datum';
$string['reportpage'] = 'Toon gebruikers {$a->from} tot {$a->to} van {$a->total}.';
$string['requiredcriteria'] = 'Vereiste criteria';
$string['resetactivities'] = 'Reset alle aangevinkte activiteiten en bronnen';
$string['restoringcompletiondata'] = 'Wegschrijven gegevens voltooiing activiteit';
$string['roleaggregation'] = 'Voorwaarde vereist';
$string['roleaggregation_all'] = 'Alle geselecteerde rollen markeren wanneer aan de voorwaarden voldaan is';
$string['roleaggregation_any'] = 'ELKE geselecteerde rol te markeren wanneer aan de voorwaarde voldaan is';
$string['roleidnotfound'] = 'Rol-ID {$a} niet gevonden';
$string['saved'] = 'Bewaard';
$string['seedetails'] = 'Zie detail';
$string['select'] = 'Selecteer';
$string['self'] = 'Zelf';
$string['selfcompletion'] = 'Zelf voltooien';
$string['showinguser'] = 'Gebruiker tonen';
$string['unenrolingfromcourse'] = 'Afmelden van de cursus';
$string['unenrolment'] = 'Afmelding';
$string['unit'] = 'Unit';
$string['unlockcompletion'] = 'Deblokkeer opties voor voltooien';
$string['unlockcompletiondelete'] = 'Deblokkeer voltooiingsopties en verwijder de voltooiingsgegevens van de gebruikers';
$string['updateactivities'] = 'Voltooiingsstatus van aangevinkte activiteiten updaten';
$string['usealternateselector'] = 'Gebruik de alternatieve cursuskiezer';
$string['usernotenroled'] = 'Gebruiker is niet aangemeld in deze cursus';
$string['viewcoursereport'] = 'Bekijk cursusrapport';
$string['viewingactivity'] = '{$a} aan het bekijken';
$string['withconditions'] = 'Met voorwaarden';
$string['writingcompletiondata'] = 'Wegschrijven gegevens voltooien activiteit';
$string['xdays'] = '{$a} dagen';
$string['yourprogress'] = 'Jouw voortgang';
