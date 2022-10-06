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
 * Strings for component 'offlinequiz', language 'sv', version '3.11'.
 *
 * @package     offlinequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Lägg till';
$string['addarandomquestion'] = 'slumpade frågor';
$string['addarandomquestion_help'] = 'Moodle lägger till ett slumpmässigt urval av flervalsfrågor (eller allt-eller-inget flervalsfrågor) i det aktuella offline-kunskapstestet. Antalet frågor som läggs till kan ställas in. Frågorna väljs från den aktuella frågekategorin (och om de väljs - dess underkategorier).';
$string['addarandomselectedquestion'] = 'Lägg till en slumpmässig fråga...';
$string['addlist'] = 'Lägg till lista';
$string['addnewpagesafterselected'] = 'Lägg till sidbrytning efter valda frågor';
$string['addnewquestion'] = 'en ny fråga';
$string['addnewquestionsqbank'] = 'Lägg till frågor till kategorin {$a->catname}: {$a->link}';
$string['addnewuseroverride'] = 'Lägg till användaråsidosättande';
$string['addpagebreak'] = 'Lägg till sidbrytning';
$string['addpagehere'] = 'Lägg till sida här';
$string['addparts'] = 'Lägg till deltagare';
$string['addquestionfrombankatend'] = 'Lägg till från frågebanken i slutet';
$string['addquestionfrombanktopage'] = 'Lägg till från frågebanken till sidan {$a}';
$string['addrandom'] = 'Lägg till {$a} slumpmässiga flervalsfrågor';
$string['addrandomfromcategory'] = 'slumpade frågor';
$string['addrandomquestion'] = 'frågor slumpmässigt';
$string['addrandomquestiontoofflinequiz'] = 'Lägger till frågor till {$a->name} (grupp {$a->group})';
$string['addrandomquestiontopage'] = 'Lägg till en slumpad fråga till sida {$a}';
$string['addtoofflinequiz'] = 'Lägg till i kunskapstestet';
$string['addtoqueue'] = 'Lägg till kö';
$string['allinone'] = 'Obegränsat';
$string['alllists'] = 'Alla listor';
$string['allornothing'] = 'Allt eller inget';
$string['allresults'] = 'Visa alla resultat';
$string['allstudents'] = 'Visa alla deltagare';
$string['alwaysavailable'] = 'Alltid tillgänglig';
$string['analysis'] = 'Objetksanalys';
$string['answerform'] = 'Svarsformulär';
$string['answerformforgroup'] = 'Svarsformulär för grupp {$a}';
$string['answerforms'] = 'Svarsformulär';
$string['answerpdfxy'] = 'Svarsformulär ({$a->maxquestions} frågor / {$a->maxanswers} alternativ)';
$string['areyousureremoveselected'] = 'Är du säker på att du vill ta bort valda frågor?';
$string['attemptexists'] = 'Försök finns';
$string['attemptsexist'] = 'Du kan inte längre lägga till eller ta bort frågor.';
$string['attemptsnum'] = 'Resultat: {$a}';
$string['attemptsonly'] = 'Visa endast deltagare med resultat';
$string['attendances'] = 'Närvaroregistreringar';
$string['basicideasofofflinequiz'] = 'Den grundläggande idén med kunskapstest offline';
$string['blackwhitethreshold'] = 'Gräns för svart-/vitkonvertering';
$string['bulksavegrades'] = 'Spara betyg';
$string['calibratescanner'] = 'Kalibrera skanner';
$string['cannoteditafterattempts'] = 'Du kan inte lägga till eller ta bort frågor eftersom det redan finns slutförda resultat. ({$a})';
$string['category'] = 'Kategori';
$string['changed'] = 'Resultaten har ändrats.';
$string['changeevaluationmode'] = 'Ändra hur utvärderingen görs. Endast möjligt om det tillåtits av administratören.';
$string['checkparts'] = 'Markera valda deltagare som närvarande';
$string['checkuserid'] = 'Kontrollera grupp/användar-ID';
$string['chooseagroup'] = 'Välj grupp...';
$string['closebeforeopen'] = 'Kunde inte uppdatera kunskapstestet. Du har angivit ett stängningsdatum som infaller före öppningsdatum.';
$string['closestudentview'] = 'Stäng deltagarvyn';
$string['closewindow'] = 'Stäng fönster';
$string['cmmissing'] = 'Kursmodulen för kunskapstest offline med ID {$a} saknas.';
$string['completiondetail:passgrade'] = 'Godkänt betyg';
$string['completionpass'] = 'Bli godkänd för att slutföra';
$string['completionpass_help'] = 'Studenter kan endast slutföra detta offlinekunskapstest om de erhåller ett betyg som är högre eller lika med gränsen för godkänt, så som angivits i betygsalternativen.';
$string['configblackwhitethreshold'] = 'Anger gränsen för vad som betraktas som vitt respektive svart på en skala mellan 1-99. Ju högre värde, desto vitare måste en pixel vara för att betraktas som vit. Värden utanför skalan resulterar i att ingen konvertering görs överhuvudtaget.';
$string['configdecimalplaces'] = 'Antal siffror som ska visas efter decimalkommat när resultat visas för kunskapstest.';
$string['configdisableimgnewlines'] = 'Det här alternativet inaktiverar nya rader före och efter bilder i pdf-frågebladen. Varning: Detta kan leda till formateringsproblem.';
$string['configexperimentalevaluation'] = 'Experimentell utvärdering av svarsformulär';
$string['configexperimentalevaluationdesc'] = 'ANVÄND INTE I PRODUKTION! Det här alternativet används för alfatester av den nya utvärderingsalgoritmen. Om det här alternativet är aktiverat kan du aktivera det i alternativen för kunskapstest-instansen. Vi avråder starkt från att använda det här alternativet. Det finns inget stöd alls för förlorade data på grund av att aktivera det här alternativet.';
$string['configintro'] = 'De värden du anger här används som standardvärden för inställningarna för nya kunskapstest offline.';
$string['configkeepfilesfordays'] = 'Bestäm hur många dagar de uppladdade bildfilerna sparas på den tillfälliga lagringsplatsen. Under denna tid är bildfilerna tillgängliga i administratörsrapporten för kunskapstest offline.';
$string['configonlylocalcategories'] = 'Inga delade frågekategorier tillåtna.';
$string['configpapergray'] = 'Vitvärdet för pappret som ska användas vid tolkning av svarsformulär.';
$string['configshuffleanswers'] = 'Blanda svaren';
$string['configshufflequestions'] = 'Om du aktiverar det här alternativet blandas ordningen på frågorna i frågegrupperna slumpmässigt varje gång du återskapar förhandsgranskningen i fliken "Skapa formulär".';
$string['configshufflewithin'] = 'Om du aktiverar det här alternativet blandas de delar som utgör de enskilda frågorna slumpmässigt när fråge- och svarsformulären skapas.';
$string['configuseridentification'] = 'En formel som beskriver användaridentifieringen. Den här formeln används för att tilldela svarsformulär till användare i systemet. Den högra sidan av ekvationen måste ange ett fält i användartabellen i Moodle.';
$string['confirmremovequestion'] = 'Är du säker på att du vill ta bort den här {$a}-frågan?';
$string['copy'] = 'Kopiera';
$string['copyright'] = '<strong>Varning: Texterna på denna sida är bara för din information. Liksom alla andra texter omfattas dessa frågor av upphovsrättsbegränsningar. Du får inte kopiera dem eller visa dem för andra personer!</strong>';
$string['copyselectedtogroup'] = 'Lägg till valda frågor till: {$a}';
$string['copytogroup'] = 'Lägg till alla frågor till gruppen: {$a}';
$string['correct'] = 'rätt';
$string['correcterror'] = 'lös';
$string['correctforgroup'] = 'Rätta svar för grupp {$a}';
$string['correctionform'] = 'Rättning';
$string['correctionforms'] = 'Rättningsformulär';
$string['correctionoptionsheading'] = 'Rättningsalternativ';
$string['correctupdated'] = 'Uppdaterat rättningsformulär för gruppen {$a}.';
$string['couldnotgrab'] = 'Kunde inte hämta bild {$a}';
$string['couldnotregister'] = 'Kunde inte registrera användare {$a}';
$string['createcategoryandaddrandomquestion'] = 'Skapa kategori och lägg till slumpad fråga';
$string['createlistfirst'] = 'Lägg till deltagare';
$string['createofflinequiz'] = 'Skapa formulär';
$string['createpartpdferror'] = 'Pdf-formuläret för deltagarlistan {$a} kunde inte skapas. Listan kan vara tom.';
$string['createpdf'] = 'Formulär';
$string['createpdferror'] = 'Det gick inte att skapa formuläret för gruppen {$a}. Det kanske inte finns några frågor i gruppen.';
$string['createpdffirst'] = 'Skapa PDF-lista först';
$string['createpdfforms'] = 'Skapa formulär';
$string['createpdfs'] = 'Ladda ned formulär';
$string['createpdfsparticipants'] = 'PDF-formulär för deltagarlista';
$string['createquestionandadd'] = 'Skapa en ny fråga och lägg till den i kunskapstestet.';
$string['createquiz'] = 'Skapa formulär';
$string['csvfile'] = 'CSV-fil';
$string['csvformat'] = 'Kommaseparerad textfil (CSV)';
$string['csvplus1format'] = 'Oformaterad textfil (CSV)';
$string['csvpluspointsformat'] = 'Textfil med poäng (CSV)';
$string['darkgray'] = 'Mörkgrå';
$string['datanotsaved'] = 'Kunde inte spara inställningarna';
$string['decimalplaces'] = 'Antal decimaler';
$string['decimalplaces_help'] = 'Antal decimaler efter kommatecknet.';
$string['deletelistcheck'] = 'Vill du verkligen ta bort valda listor och deltagare?';
$string['deletepagecheck'] = 'Vill du verkligen ta bort valda sidor?';
$string['deletepagesafterselected'] = 'Ta bort sidbrytningar efter valda frågor';
$string['deletepartcheck'] = 'Vill du verkligen ta bort valda deltagare?';
$string['deleteparticipantslist'] = 'Ta bort deltagarlista';
$string['deletepdfs'] = 'Ta bort dokument';
$string['deleteresultcheck'] = 'Vill du verkligen ta bort valda resultat?';
$string['deleteselectedpart'] = 'Ta bort valda deltagare';
$string['deleteselectedresults'] = 'Ta bort valda resultat';
$string['deletethislist'] = 'Ta bort denna lista';
$string['deleteupdatepdf'] = 'Ta bort och uppdatera PDF-formulär';
$string['difficultytitle'] = 'Svårighetsgrad';
$string['difficultytitlea'] = 'Svårighetsgrad A';
$string['difficultytitleb'] = 'Svårighetsgrad B';
$string['difficultytitlediff'] = 'Skillnad';
$string['disableimgnewlines'] = 'Inaktivera radbrytning före och efter bilder';
$string['disableimgnewlines_help'] = 'Det här alternativet inaktiverar nya rader före och efter bilder i pdf-frågebladen. Varning: Detta kan leda till formateringsproblem.';
$string['displayoptions'] = 'Visningsalternativ';
$string['done'] = 'klart';
$string['downloadallzip'] = 'Ladda ned alla filer som en ZIP-fil';
$string['downloadpartpdf'] = 'Ladda ned PDF-fil för lista \'{$a}\'';
$string['downloadpdfs'] = 'Ladda ned dokument';
$string['downloadresultsas'] = 'Ladda ned resultat som:';
$string['dragtoafter'] = 'Efter {$a}';
$string['dragtostart'] = 'Till början';
$string['editgroupquestions'] = 'Redigera frågegrupper';
$string['editgroups'] = 'Redigera offline-grupper';
$string['editingofflinequiz'] = 'Redigerar frågegrupper';
$string['editingofflinequiz_help'] = 'När du skapar ett offline-kunskapstest är huvudkoncepten:
<ul><li>Kunskapstestet, som innehåller frågor på en eller flera sidor</li>
<li> Frågebanken, som lagrar kopior av alla frågor organiserade i kategorier</li></ul>';
$string['editingofflinequizx'] = 'Redigera kunskapstest: {$a}';
$string['editlist'] = 'Redigera lista';
$string['editlists'] = 'Redigera listor';
$string['editmaxmark'] = 'Redigera maxpoäng';
$string['editofflinequiz'] = 'Redigera kunskapstest';
$string['editofflinesettings'] = 'Redigera offline-inställningar';
$string['editorder'] = 'Redigera ordning';
$string['editparticipants'] = 'Redigera deltagare';
$string['editquestion'] = 'Redigera fråga';
$string['editquestions'] = 'Redigera frågor';
$string['editscannedform'] = 'Redigera inskannat formulär';
$string['editthislist'] = 'Redigera denna lista';
$string['emptygroups'] = 'Vissa grupper i kunskapstestet är tomma. Lägg till några frågor.';
$string['enroluser'] = 'Registrera användare';
$string['erroraccessingreport'] = 'Du har inte behörighet att se den här rapporten.';
$string['errorreport'] = 'Rapport över importfel';
$string['eventattemptdeleted'] = 'Testförsök borttaget';
$string['eventattemptpreviewstarted'] = 'Förhandsgrandskning av offline-kunskapstest påbörjad';
$string['eventattemptreviewed'] = 'Offline-test försök granskade';
$string['eventattemptsummaryviewed'] = 'Offline-kunskapstest försökssammanfattning visad';
$string['eventattemptviewed'] = 'Offline-kunskapstest försök visat';
$string['eventdocscreated'] = 'Fråge- och svarsformulär skapade';
$string['eventdocsdeleted'] = 'Fråge- och svarsformulär borttagna';
$string['eventeditpageviewed'] = 'Offline-kunskapstest redigeringssida visad';
$string['eventofflinequizattemptsubmitted'] = 'Offline-testförsök inskickat';
$string['eventoverridecreated'] = 'Åsidosättande av offline-kunskapstest skapat';
$string['eventoverridedeleted'] = 'Åsidosättande av offline-kunskapstest borttaget';
$string['eventoverrideupdated'] = 'Åsidosättande av offline-kunskapstest uppdaterat';
$string['eventparticipantmarked'] = 'Deltagare betygsattes manuellt';
$string['eventquestionmanuallygraded'] = 'Frågor manuellt poängsatta';
$string['eventreportviewed'] = 'Offlinekunskapstest-rapport visad.';
$string['eventresultsregraded'] = 'Resultaten har betygsatts på nytt';
$string['everythingon'] = 'aktiverat';
$string['excelformat'] = 'Excel (XLSX)';
$string['experimentalevaluation'] = 'Experimentell utvärdering av svarsformulär';
$string['experimentalevaluation_help'] = 'Experimentell utvärdering av svarsformulär';
$string['fileformat'] = 'Format för frågeblad';
$string['fileformat_help'] = 'Välj om du vill ha dina frågeblad i PDF-, DOCX- eller TEX-format. Svarsformulär och rättningsmallar genereras alltid i PDF-format.';
$string['fileprefixanswer'] = 'svarsformulär';
$string['fileprefixcorrection'] = 'rättningsmall';
$string['fileprefixform'] = 'frågeformulär';
$string['fileprefixparticipants'] = 'deltagarlista';
$string['filesizetolarge'] = 'Vissa av dina bildfiler är väldigt stora. Storleken kommer att minskas under tolkningen. Försök skanna in med en upplösning på mellan 200 och 300 dpi och i svartvitt läge. Detta kommer snabba upp tolkningen nästa gång.';
$string['filterbytags'] = 'Filtrera efter etiketter...';
$string['fontsize'] = 'Teckenstorlek';
$string['forautoanalysis'] = 'För automatisk rättning';
$string['formforcorrection'] = 'Rättningsmall för grupp {$a}';
$string['formforgroup'] = 'Frågeformulär för grupp {$a}';
$string['formforgroupdocx'] = 'Frågeformulär för grupp {$a} (DOCX)';
$string['formforgrouplatex'] = 'Frågeformulär för grupp {$a} (LATEX)';
$string['formsexist'] = 'Formulär redan skapade.';
$string['formsexistx'] = 'Formulär redan skapade (<a href="{$a}">Ladda ned formulär</a>)';
$string['formsheetsettings'] = 'Formulärinställningar';
$string['formspreview'] = 'Förhandsgranskning av formulär';
$string['formwarning'] = 'Inget svarsformulär har skapats. Kontakta administratören.';
$string['fromquestionbank'] = 'från frågebank';
$string['functiondisabledbysecuremode'] = 'Den funktionaliteten är för närvarande inaktiverad.';
$string['generalfeedback'] = 'Allmän återkoppling';
$string['generalfeedback_help'] = 'Allmän återkoppling är text som visas efter att en fråga har försökts. Till skillnad från återkoppling för en specifik fråga som beror på svaret visas alltid samma allmänna återkoppling.';
$string['generatepdfform'] = 'Generera PDF-formulär';
$string['grade'] = 'Betyg';
$string['gradedon'] = 'Betygsatt den';
$string['gradedscannedform'] = 'Inskannat formulär med betyg';
$string['gradeiszero'] = 'OBS! Maxpoängen för detta offline-kunskapstest är 0 poäng!';
$string['gradeswarning'] = 'Frågebetygen måste vara numeriska!';
$string['gradewarning'] = 'Frågebetyget måste vara numeriskt!';
$string['gradingofflinequiz'] = 'Betyg';
$string['gradingofflinequizx'] = 'Betyg: {$a}';
$string['gradingoptionsheading'] = 'Alternativ för betygsättning';
$string['greeniscross'] = 'räknas som kryss';
$string['group'] = 'Grupp';
$string['groupoutofrange'] = 'Gruppen låg utanför intervallet och ersattes med grupp A.';
$string['groupquestions'] = 'Frågegrupper';
$string['hasresult'] = 'Resultat finns';
$string['hotspotdeletiontask'] = 'Borttagning av hotspots';
$string['html'] = 'HTML';
$string['idnumber'] = 'ID-nummer';
$string['imagefile'] = 'Bildfil';
$string['imagenotfound'] = 'Hittade inte bildfilen {$a}!';
$string['imagenotjpg'] = 'Filen är inte en <code>jpg</code> eller <code>png</code>: {$a}';
$string['imagickwarning'] = 'Imagemagick saknas: Be systemadministratören att installera Imagemagick-biblioteket och kontrollera sökvägen till konverteringsprogrammet i TeX-notationsfilterinställningarna. Du kan inte importera TIF-filer utan Imagemagick!';
$string['import'] = 'Importera';
$string['importedon'] = 'Importerat den';
$string['importerror11'] = 'Andra resultat finns';
$string['importerror12'] = 'Användaren är inte registrerad';
$string['importerror13'] = 'Ingen gruppdata';
$string['importerror14'] = 'Kunde inte hämta';
$string['importerror15'] = 'Osäkra markeringar';
$string['importerror16'] = 'Sidfel';
$string['importerror17'] = 'Sidorna är ofullständiga';
$string['importerror21'] = 'Kunde inte hämta';
$string['importerror22'] = 'Osäkra markeringar';
$string['importerror23'] = 'Användaren finns inte i listan';
$string['importerror24'] = 'Listan kunde inte hittas';
$string['importforms'] = 'Importera svarsformulär';
$string['importfromto'] = 'Importerar {$a->from} till {$a->to} av totalt {$a->total}.';
$string['importisfinished'] = 'Importen av offline-kunskapstest {$a} är slutförd.';
$string['importlinkresults'] = 'Länk till resultat: {$a}';
$string['importlinkverify'] = 'Länk till verifiering: {$a}';
$string['importmailsubject'] = 'notis om import av offline-kunskapstest';
$string['importnew'] = 'Importera';
$string['importnew_help'] = 'Du kan importera enstaka skannade bildfiler eller flera skannade bildfiler i ett ZIP-arkiv. Offline-kunskapstest modulen bearbetar bildfilerna i bakgrunden.
Filnamn är inte relevanta men bör inte innehålla specialtecken som t.ex. \'&\'. Bilder ska vara i formaten GIF, PNG
eller TIF. En upplösning mellan 200 och 300dpi rekommenderas.';
$string['importnumberexisting'] = 'Dubbletter: {$a}';
$string['importnumberpages'] = 'Importerade och automatiskt rättade formulär: {$a}';
$string['importnumberresults'] = 'Antal importerade: {$a}';
$string['importnumberverify'] = 'Formulär som behöver rättas manuellt: {$a}';
$string['importtimefinish'] = 'Processen avslutades: {$a}';
$string['importtimestart'] = 'Processen startade: {$a}';
$string['inconsistentdata'] = 'Inkonsekventa data: {$a}';
$string['info'] = 'Information';
$string['infoshort'] = 'i';
$string['insecuremarkings'] = 'Otydliga markeringar behöver rättas manuellt';
$string['insecuremarkingsforquestion'] = 'Otydliga markeringar kräver manuell rättning av frågorna';
$string['insertnumber'] = 'Sätt in rätt id-nummer markerat av den blå ramen.';
$string['instruction1'] = 'Det här svarsformuläret skannas automatiskt. Vik eller smutsa inte ned det. Använd svart eller blå penna för att markera fälten:';
$string['instruction2'] = 'Endast tydliga markeringar kan tolkas korrekt! Om du vill korrigera en markering fyller du rutan helt med färg. Det här fältet tolkas som en tom ruta:';
$string['instruction3'] = 'Korrigerade fält kan inte markeras på nytt. Vänligen skriv inte utanför fälten.';
$string['introduction'] = 'Introduktion';
$string['invalidformula'] = 'Ogiltig formel för användaridentifiering. Formeln ska ha formatet <prefix>[<#siffror>]<suffix>=<db-fält>.';
$string['invalidnumberofdigits'] = 'Ogiltigt antal siffror. 1 till 9 siffror tillåts.';
$string['invaliduserfield'] = 'Ogiltigt fält i den använda användartabellen.';
$string['invigilator'] = 'Skrivvakt';
$string['ischecked'] = 'Deltagande kontrollerat.';
$string['isnotchecked'] = 'Deltagande ej kontrollerat.';
$string['itemdata'] = 'Objektsdata';
$string['keepfilesfordays'] = 'Dagar att behålla filer';
$string['letter'] = 'Bokstav';
$string['lightgray'] = 'Ljusgrått';
$string['linktoscannedform'] = 'Visa inskannat formulär';
$string['listnotdetected'] = 'Kunde inte hitta streckkod för lista!';
$string['logdeleted'] = 'Loggpost {$a} borttagen.';
$string['logourl'] = 'URL till logotyp';
$string['logourldesc'] = 'URL till en bildfil som visas i det övre högra hörnet i svarsformulär, t.ex. <b>http://www.dinwebbplats.se/minlogo.png</b> eller <b>../sökväg/till/din/logo.png</b>. Den högsta tillåtna storleken är 520x140 pixlar. Svarsformulär kan inte utvärderas om bilden överskrider den maximala storleken!';
$string['lowertrigger'] = 'Nedre andra gräns';
$string['lowertriggerzero'] = 'Nedre andra gräns är 0';
$string['lowerwarning'] = 'Nedre första gräns';
$string['lowerwarningzero'] = 'Nedre första gräns är 0';
$string['marginwarning'] = 'Vänligen skriv ut följande PDF-filer utan marginaler!<br />Undvik att dela ut kopierade exemplar av PDF-dokumenten till deltagarna.';
$string['marks'] = 'Poäng';
$string['matrikel'] = 'studentnummer';
$string['maxgradewarning'] = 'Maxbetyget måste vara ett nummer.';
$string['maxmark'] = 'Maxpoäng';
$string['membersinplist'] = '{$a->count} deltagare i <a href="{$a->url}">{$a->name}</a>';
$string['missingimagefile'] = 'Bildfil saknas';
$string['missingitemdata'] = 'Svar saknas för användare {$a}';
$string['missinglogdata'] = 'Logdata saknas för befintligt resultat.';
$string['missingquestion'] = 'Frågan verkar inte finnas längre';
$string['missinguserid'] = 'Numret för användaridentifiering saknas. Kan inte läsa streckkoden!';
$string['modulename'] = 'Kunskapstest (Offline)';
$string['modulename_help'] = 'Aktiviteten <em>Kunskapstest (Offline)</em> gör det möjligt för läraren att utforma kunskapstest som kan genomföras på papper och som består av flervalsfrågor.
Dessa frågor lagras i Moodle-frågebanken och kan återanvändas inom kurser och även mellan kurser.
Kunskapstesterna kan laddas ner som PDF-, DOCX- eller LaTeX-filer. Eleverna markerar sina svar i svarsformulär. Svarsformulären läses in och svaren importeras till systemet.';
$string['modulenameplural'] = 'Kunskapstester (Offline)';
$string['moodleprocessing'] = 'Låt Moodle behandla data';
$string['movecorners'] = 'Ändra positionerna för hörnmarkeringarna först. Använd dra-och-släpp.';
$string['moveselectedonpage'] = 'Flytta markerade frågor till sidan: {$a}';
$string['multianswersforsingle'] = 'Flera svar på envalsfråga';
$string['multichoice'] = 'Flerval';
$string['multipleanswers'] = 'Välj minst ett svar.';
$string['name'] = 'Namn';
$string['neededcorrection'] = '<strong>OBS! Några av dina markeringar behövde manuell korrigering. Ta en titt på de röda rutorna i följande bild.
<br />Detta medförde manuell hantering av en lärare och försenade publiceringen av resultaten!</strong>';
$string['newgrade'] = 'Betygsatt';
$string['newpage'] = 'Ny sida';
$string['noattemptexists'] = 'Det finns inga resultat';
$string['noattempts'] = 'Inga resultat har importerats!';
$string['noattemptsonly'] = 'Visa enbart deltagare utan resultat';
$string['nocourse'] = 'Kursen med id {$a->course} som offline-kunskapstestet med ID {$a->offlinequiz} tillhör saknas.';
$string['nogradesseelater'] = 'Det här offline-kunskapstestet har ännu inte betygsatts för {$a}. Resultaten kommer att publiceras här.';
$string['nogroupdata'] = 'Inga gruppdata för användaren {$a}';
$string['nomcquestions'] = 'Det finns inga flervalsfrågor i gruppen {$a}!';
$string['noofflinequiz'] = 'Det finns inget offline-kunskapstest med id {$a}!';
$string['nopages'] = 'Inga sidor importerades';
$string['noparticipantsfound'] = 'Inga deltagare hittades';
$string['nopdfscreated'] = 'Inga dokument skapades!';
$string['noquestions'] = 'Vissa grupper är tomma. Lägg till några frågor.';
$string['noquestionselected'] = 'Inga frågor valda!';
$string['noquestionsfound'] = 'Det finns inga frågor i gruppen {$a}!';
$string['noquestionsonpage'] = 'Tom sida';
$string['noresults'] = 'Det finns inga resultat.';
$string['noreview'] = 'Du är inte behörig att granska detta offline-kunskapstest';
$string['noscannedpage'] = 'Det finns ingen inskannad sida med id {$a}!';
$string['notagselected'] = 'Ingen etikett vald';
$string['nothingtodo'] = 'Inget att göra!';
$string['notxtfile'] = 'Ej TXT-fil';
$string['notyetgraded'] = 'Ännu ej betygsatt';
$string['nozipfile'] = 'Ingen ZIP-fil';
$string['numattempts'] = 'Antal importerade resultat: {$a}';
$string['numattemptsqueue'] = '{$a} svarsformulär har lagts till i kön. Ett e-postmeddelande skickas till din adress efter bearbetningen av dem.';
$string['numattemptsverify'] = 'Inskannade formulär som väntar på att rättas: {$a}';
$string['numberformat'] = 'Värdet måste vara ett tal med {$a} siffror!';
$string['numbergroups'] = 'Antal grupper';
$string['numpages'] = '{$a} sidor importerades';
$string['numquestionsx'] = 'Frågor: {$a}';
$string['numusersadded'] = '{$a} deltagare har lagts till';
$string['odsformat'] = 'OpenDocument-kalkylblad (ODS)';
$string['offlineimplementationfor'] = 'Offlineimplementation för';
$string['offlinequiz:addinstance'] = 'Lägg till ett Offline-kunskapstest';
$string['offlinequiz:attempt'] = 'Gör kunskapstester';
$string['offlinequiz:changeevaluationmode'] = 'Gör det möjligt att ändra utvärderingsmetod. VARNING: ANVÄND INTE I PRODUKTIONSSYSTEM!';
$string['offlinequiz:createofflinequiz'] = 'Skapa formulär för offline-kunskapstest';
$string['offlinequiz:deleteattempts'] = 'Ta bort resultat för offline-kunskapstest';
$string['offlinequiz:grade'] = 'Betygsätt kunskapstest manuellt';
$string['offlinequiz:manage'] = 'Hantera offline-kunskapstest';
$string['offlinequiz:preview'] = 'Förhandsgranska offline-kunskapstest';
$string['offlinequiz:view'] = 'Visa information om offline-kunskapstest';
$string['offlinequiz:viewreports'] = 'Visa offline-kunskapstest rapporter';
$string['offlinequizcloses'] = 'Offline-kunskapstest stänger';
$string['offlinequizcloseson'] = 'Granskningen av detta offline-kunskapstest avslutas {$a}';
$string['offlinequizisclosed'] = 'Offline-kunskapstest stängt';
$string['offlinequizisclosedwillopen'] = 'Offline-kunskapstest stängt (öppnar {$a})';
$string['offlinequizisopen'] = 'Detta offline-kunskapstest är öppet.';
$string['offlinequizisopenwillclose'] = 'Offline-kunskapstest öppet (stänger {$a})';
$string['offlinequizopenedon'] = 'Offline-kunskapstestet öppnades {$a}';
$string['offlinequizopens'] = 'Offline-kunskapstest öppnar';
$string['offlinequizsettings'] = 'Offlineinställningar';
$string['offlinequizwillopen'] = 'Offline-kunskapstest öppnar {$a}';
$string['oneclickenrol'] = '1-klicks registrering';
$string['oneclickenroldesc'] = 'Om det här alternativet är aktiverat har lärare möjlighet att registrera användare med ett klick när de rättar svarsformulär.';
$string['oneclickrole'] = 'Roll vid 1-klicks registrering';
$string['oneclickroledesc'] = 'Välj den roll som den registrerade användaren får vid 1-klicks registrering. Endast roller med arketyp "student" kan väljas.';
$string['onlylocalcategories'] = 'Endast lokala frågekategorier';
$string['orderandpaging'] = 'Sortering och sidbrytning';
$string['orderandpaging_help'] = 'Siffrorna 10, 20, 30, ... mittemot varje fråga anger ordningen på frågorna. Antalet ökar i steg om 10 för att lämna utrymme för ytterligare frågor som ska infogas. Om du vill ändra ordning på frågorna ändrar du siffrorna och klickar sedan på knappen "Ordna om frågor".

Om du vill lägga till sidbrytningar efter särskilda frågor markerar du kryssrutorna bredvid frågorna och klickar sedan på knappen "Lägg till sidbrytningar efter markerade frågor".

Om du vill ordna frågorna på ett antal sidor klickar du på knappen <em>Omnumrera</em> och väljer önskat antal frågor per sida.';
$string['orderingofflinequiz'] = 'Sortering och sidbrytning';
$string['otherresultexists'] = 'Olika resultat för {$a} finns redan. Importen ignoreras! Ta bort resultatet först.';
$string['outof'] = '{$a->grade} av maxbetyget {$a->maxgrade}';
$string['outofshort'] = '{$a->grade}/{$a->maxgrade}';
$string['overallfeedback'] = 'Övergripande återkoppling';
$string['overview'] = 'Översikt';
$string['overviewdownload_help'] = 'Nedladdningsöversikt';
$string['page-mod-offlinequiz-edit'] = 'Redigera sida';
$string['page-mod-offlinequiz-x'] = 'Valfri sida';
$string['pagecorrected'] = 'Korrigerat deltagarblad importerat';
$string['pageevaluationtask'] = 'Utvärdering av svarsformulär för Offlinekunskapstest';
$string['pageimported'] = 'Deltagarblad importerat';
$string['pagenotdetected'] = 'Hittade inte streckkoden för sidan!';
$string['pagenumberimported'] = 'Sida {$a} av deltagarbladen importerat';
$string['pagenumberupdate'] = 'Uppdatering av sidnummer';
$string['pagesizeparts'] = 'Deltagare per sida:';
$string['papergray'] = 'Vithetsvärde för papper';
$string['papergray_help'] = 'Om de vita delarna i de skannade svarsformulären är mycket mörka kan du korrigera detta genom att ställa in det här värdet på mörkgrå.';
$string['partcheckedwithoutresult'] = '<a href="{$a->url}">{$a->count} markerade deltagare utan resultat</a>';
$string['partcheckedwithresult'] = '{$a} markerade deltagare med resultat';
$string['partial'] = 'delvis';
$string['participants'] = 'Deltagare';
$string['participants_help'] = '<p>Deltagarlistorna är utformad för stora offline-tester med många deltagare. De hjälper läraren att kontrollera vilka elever som deltog i kunskapstestet och om alla resultat importerades korrekt.
Du kan lägga till användare i olika listor. Varje lista kan till exempel innehålla deltagarna i ett visst rum. Deltagarna kan vara medlemmar i en särskild grupp. Ett gruppregistreringsverktyg kan användas för att skapa dessa grupper.
Listor över deltagare kan laddas ner som PDF-dokument, skrivas ut och markeras med kryss precis som svarsformulären för offline-kunskapstest. Efteråt kan de laddas upp och de markerade eleverna markeras som närvarande i databasen.
Undvik fläckar på streckkoderna eftersom de används för att identifiera studenterna.</p>';
$string['participantsinlists'] = 'Listdeltagare';
$string['participantslist'] = 'Deltagarlista';
$string['participantslists'] = 'Deltagare';
$string['partimportnew'] = 'Laddar upp deltagarlistor';
$string['partimportnew_help'] = '<p>På den här fliken kan du ladda upp de ifyllda deltagarlistorna. Du kan ladda upp enstaka skannade bildfiler eller flera skannade bildfiler i ett ZIP-arkiv. Offlinekunskapstest-modulen bearbetar bildfilerna i bakgrunden.
Filnamn är inte relevanta men bör inte innehålla svenska bokstäver eller andra specialtecken. Bilder ska vara GIF, PNG
eller TIF:ar. En upplösning mellan 200 och 300dpi rekommenderas.</p>';
$string['partuncheckedwithoutresult'] = '{$a} omarkerade deltagare utan resultat';
$string['partuncheckedwithresult'] = '<a href="{$a->url}">{$a->count} omarkerade deltagare med resultat</a>';
$string['pdfdeletedforgroup'] = 'Formulär för {$a}-gruppen togs bort';
$string['pdfintro'] = 'Övrig information';
$string['pdfintro_help'] = 'Denna information kommer att skrivas ut på första sidan i frågebladet och bör innehålla allmän information om hur du fyller i svarsformuläret.';
$string['pdfintrotext'] = '<b>Hur markerar jag rätt?</b> <br />Svarsformuläret skannas automatiskt. Vik eller smutsa inte ned det. Använd en svart eller blå penna för att markera fälten. Om du vill korrigera en markering fyller du rutan helt med färg. Det här fältet tolkas som en tom ruta.<br />';
$string['pdfintrotoolarge'] = 'Introduktionen är för lång (max 2000 tecken).';
$string['pdfscreated'] = 'PDF-formulär har skapats';
$string['pdfsdeletedforgroup'] = 'Formulär för {$a}-gruppen togs bort';
$string['pearlywhite'] = 'Pärlvitt';
$string['pluginadministration'] = 'Administrera offline-test';
$string['pluginname'] = 'Kunskapstest Offline';
$string['point'] = 'punkt';
$string['present'] = 'Närvarande';
$string['preventsamequestion'] = 'Förhindra flera användningar av samma fråga i olika grupper';
$string['preview'] = 'Förhandsgranska';
$string['previewforgroup'] = 'Förhandsgranskning av grupp {$a}';
$string['previewquestion'] = 'Förhandsgranska fråga';
$string['printstudycodefield'] = 'Visa studiekoden på frågeformuläret';
$string['printstudycodefield_help'] = 'Om markerat kommer studiekoden visas på första sidan i frågeformuläret.';
$string['privacy:data_folder_name'] = 'Offlinetest-data';
$string['privacy:metadata:core_files'] = 'Offlinetest använder fil-API:t för att lagra de genererade frågebladen, svarsbladen och korrigeringsbladen samt de ifyllda svarsbladen.';
$string['privacy:metadata:core_question'] = 'Offlinequiz använder fråge-API:t för att spara frågorna för kunskapstesten.';
$string['privacy:metadata:mod_quiz'] = 'Offlinetest använder test-API:t för att spara resultat från kunskapstesten.';
$string['privacy:metadata:offlinequiz'] = 'Tabellen offline-kunskapstest sparar all information som är specifik för en offlinekunskapstest-instans.';
$string['privacy:metadata:offlinequiz:course'] = 'Kolumnen "course" i tabellen "offlinequiz" sparar i vilken kurs detta offline-kunskapstest lagras.';
$string['privacy:metadata:offlinequiz:decimalpoints'] = 'Antalet decimaler som ska beräknas för betygen.';
$string['privacy:metadata:offlinequiz:disableimgnewlines'] = 'Ska inaktivera nya rader före och efter bilder.';
$string['privacy:metadata:offlinequiz:docscreated'] = 'Om dokumenten skapades är det här fältet inställt på 1 annars är det 0.';
$string['privacy:metadata:offlinequiz:fileformat'] = 'Filformatet som används för att skriva ut frågebladen; 0 för pdf, 1 för docx, 2 för LaTeX.';
$string['privacy:metadata:offlinequiz:fontsize'] = 'Storleken på teckensnittet i frågeformuläret.';
$string['privacy:metadata:offlinequiz:grade'] = 'Resultatet visar det maximala antalet poäng som kan uppnås i den här offline-kunskapstestet.';
$string['privacy:metadata:offlinequiz:id_digits'] = 'Sparar antalet siffror som idnumber hade när svarsbladen skapades. Detta behövs för bakåtkompatibilitet om sntalet höjs mellan skapandet och importen av svarsbladen.';
$string['privacy:metadata:offlinequiz:introformat'] = 'Det här fältet används inte.';
$string['privacy:metadata:offlinequiz:name'] = 'Kolumnen "name" sparar namnet på offline-kunskapstestet.';
$string['privacy:metadata:offlinequiz:numgroups'] = 'Antalet grupper som det här offline-kunskapstestet har.';
$string['privacy:metadata:offlinequiz:papergray'] = 'Vitvärde för detta offline-kunskapstest.';
$string['privacy:metadata:offlinequiz:pdfintro'] = 'Den ytterligare information som infogas i frågebladen i början.';
$string['privacy:metadata:offlinequiz:printstudycodefield'] = 'En preferens om studiekoden ska skrivas ut på frågeformuläret; 1 för sant, annars 0.';
$string['privacy:metadata:offlinequiz:review'] = 'I den här kolumnen sparas information om hur granskningen görs.';
$string['privacy:metadata:offlinequiz:showgrades'] = 'Sparar om antalet poäng som kan erhållas för frågan ska skrivas ut på frågebladet.';
$string['privacy:metadata:offlinequiz:showquestioninfo'] = 'Sparar om en information om frågorna ska visas, 0 för nej, 1 för information om frågetyp, 2 för information om antalet rätta svar.';
$string['privacy:metadata:offlinequiz:showtutorial'] = 'Sparar om deltagarna ska bli ombedda att genomgå en självstudiekurs i offline-kunskapstest.';
$string['privacy:metadata:offlinequiz:shufflequestions'] = 'En inställning om frågorna ska blandas när du skapar ett offline-kunskapstest; 1 för blandning annars 0.';
$string['privacy:metadata:offlinequiz:time'] = 'Tidskolumnen sparar datumet för offline-kunskapstest.';
$string['privacy:metadata:offlinequiz:timeclose'] = 'Kolumnen tidpunktförstängning sparar när offline-kunskapstestet stängdes/kommer att stängas.';
$string['privacy:metadata:offlinequiz:timecreated'] = 'Kolumnen tidpunktskapad sparar när offline-kunskapstestet skapades.';
$string['privacy:metadata:offlinequiz:timemodified'] = 'Kolumnen tidpunktförändring sparar när offline-kunskapstestet senast ändrades.';
$string['privacy:metadata:offlinequiz:timeopen'] = 'Kolumnen tidpunktföröppnande sparar när offline-kunskapstestet öppnades/kommer att öppnas.';
$string['privacy:metadata:offlinequiz_choices'] = 'Den här tabellen innehåller information om alla kryssen för alla skannade sidor. Informationen behövs för att senare skapa resultat baserat på kryssen.';
$string['privacy:metadata:offlinequiz_choices:choicenumber'] = 'Antalet val för denna fråga.';
$string['privacy:metadata:offlinequiz_choices:scannedpageid'] = 'Den skannade sidan som valet avser.';
$string['privacy:metadata:offlinequiz_choices:slotnumber'] = 'Frågeplatsen för detta val.';
$string['privacy:metadata:offlinequiz_choices:value'] = 'Om valet anses vara förkryssat; 0 för nej, 1 för ja, -1 för osäker.';
$string['privacy:metadata:offlinequiz_group_questions'] = 'Den här tabellen sparar alla frågor för alla offline-kunskapstest grupper.';
$string['privacy:metadata:offlinequiz_group_questions:maxmark'] = 'Det maximala antalet poäng som kan uppnås för denna fråga.';
$string['privacy:metadata:offlinequiz_group_questions:offlinegroupid'] = 'Den offline-kunskapstest grupp som den här gruppfrågan avser.';
$string['privacy:metadata:offlinequiz_group_questions:offlinequizid'] = 'offline-kunskapstest-ID som den här gruppfrågan gäller.';
$string['privacy:metadata:offlinequiz_group_questions:page'] = 'Sidan där den här frågan skrivs ut i svarsbladen.';
$string['privacy:metadata:offlinequiz_group_questions:position'] = 'Positionen i detta offline-kunskapstest.';
$string['privacy:metadata:offlinequiz_group_questions:questionid'] = 'Id:t för den valda frågan.';
$string['privacy:metadata:offlinequiz_group_questions:slot'] = 'Platsen för frågan i offline-kunskapstestet.';
$string['privacy:metadata:offlinequiz_groups'] = 'Tabell för de grupper där offline-kunskapstest deltar.';
$string['privacy:metadata:offlinequiz_groups:answerfilename'] = 'Filnamnet som användes för att spara svarsfilen.';
$string['privacy:metadata:offlinequiz_groups:correctionfilename'] = 'Filen som användes för att spara rättningsfilen.';
$string['privacy:metadata:offlinequiz_groups:number'] = 'Numret på gruppen för det här offline-kunskapstestet; 1 för grupp A, 2 grupp B och så vidare.';
$string['privacy:metadata:offlinequiz_groups:numberofpages'] = 'Hur många sidor som behövs för att skriva ut svarsbladen på.';
$string['privacy:metadata:offlinequiz_groups:offlinequizid'] = 'Id:t för offline-kunskapstestet som offline-kunskapstestet tillhör.';
$string['privacy:metadata:offlinequiz_groups:questionfilename'] = 'Filnamnet som användes för att spara frågefilen';
$string['privacy:metadata:offlinequiz_groups:sumgrades'] = 'Summan av alla betyg för alla frågor i den här gruppen.';
$string['privacy:metadata:offlinequiz_groups:templateusageid'] = 'Id:t för mallanvändningen, som används för att skapa ett resultat i kunskapstest-API:t.';
$string['privacy:metadata:offlinequiz_hotspots'] = 'I den här tabellen sparas alla rutors placeringar och om de utvärderas.';
$string['privacy:metadata:offlinequiz_hotspots:blank'] = 'Om hotspoten har analyserats.';
$string['privacy:metadata:offlinequiz_hotspots:name'] = 'Typ av hotspot, t.ex. u%nummer för användarens hotspot, a-0-0 för fråga 1 svar 1 och så vidare.';
$string['privacy:metadata:offlinequiz_hotspots:scannedpageid'] = 'Skannad sida där hotspoten är.';
$string['privacy:metadata:offlinequiz_hotspots:time'] = 'Den senaste uppdateringstiden för den här hotspoten.';
$string['privacy:metadata:offlinequiz_hotspots:x'] = 'x-värde för hotspot.';
$string['privacy:metadata:offlinequiz_hotspots:y'] = 'y-värde för hotspot.';
$string['privacy:metadata:offlinequiz_p_choices'] = 'I den här tabellen sparas alla kryss för deltagarlistorna.';
$string['privacy:metadata:offlinequiz_p_choices:scannedpageid'] = 'Den skannade sidan som det här valet gäller.';
$string['privacy:metadata:offlinequiz_p_choices:userid'] = 'Användar-ID som detta val avser.';
$string['privacy:metadata:offlinequiz_p_choices:value'] = 'Om krysset är fyllt eller inte (0 för inte fyllt, 1 för fyllt, -1 för osäkert).';
$string['privacy:metadata:offlinequiz_p_lists'] = 'I den här tabellen sparas information om deltagarlistor där lärarna kan kryssa för om en elev var närvarande eller inte.';
$string['privacy:metadata:offlinequiz_p_lists:filename'] = 'Namnet på filen för listan.';
$string['privacy:metadata:offlinequiz_p_lists:name'] = 'Namn på deltagarlistan';
$string['privacy:metadata:offlinequiz_p_lists:number'] = 'Numret på listan i offline-kunskapstestet.';
$string['privacy:metadata:offlinequiz_p_lists:offlinequizid'] = 'Offline-kunskapstestet denna lista hör till.';
$string['privacy:metadata:offlinequiz_page_corners'] = 'Den här tabellen sparar alla hörn för varje skannad sida för att utvärdera den snabbare vid nästa utvärdering eller korrigering.';
$string['privacy:metadata:offlinequiz_page_corners:position'] = 'Informationen om det här hörnet finns högst upp eller längst ned och till höger eller vänster.';
$string['privacy:metadata:offlinequiz_page_corners:scannedpageid'] = 'Den skannade sidan det här hörnet är på.';
$string['privacy:metadata:offlinequiz_page_corners:x'] = 'Hörnets x-värde.';
$string['privacy:metadata:offlinequiz_page_corners:y'] = 'Hörnets y-värde.';
$string['privacy:metadata:offlinequiz_participants'] = 'Deltagartabellen lagrar information om användaren deltog i offline-kunskapstestet eller inte.';
$string['privacy:metadata:offlinequiz_participants:checked'] = 'Informationen om den här användaren har markerats i deltagarlistan.';
$string['privacy:metadata:offlinequiz_participants:listid'] = 'Id:t för listan som deltagaren finns på.';
$string['privacy:metadata:offlinequiz_participants:userid'] = 'Användarens användare-id.';
$string['privacy:metadata:offlinequiz_queue'] = 'Den här tabellen sparar en kö för en uppladdning. För varje uppladdning finns det ett eget objekt i den här tabellen.';
$string['privacy:metadata:offlinequiz_queue:importuserid'] = 'Användare-ID för läraren som importerade filerna.';
$string['privacy:metadata:offlinequiz_queue:offlinequizid'] = 'Offlinekunskapstest-ID:t i kön.';
$string['privacy:metadata:offlinequiz_queue:status'] = 'Status för kö som behövs.';
$string['privacy:metadata:offlinequiz_queue:timecreated'] = 'Den tid då offline-kunskapstest bladen importerades.';
$string['privacy:metadata:offlinequiz_queue:timefinish'] = 'Den tidpunkt då utvärderingen av kön blev klar.';
$string['privacy:metadata:offlinequiz_queue:timestart'] = 'Den tidpunkt då utvärderingen av kön påbörjades.';
$string['privacy:metadata:offlinequiz_queue_data'] = 'Den här tabellen sparar data för kön eftersom varje fil i kön får ett ködataobjekt.';
$string['privacy:metadata:offlinequiz_queue_data:error'] = 'Om statusen är fel kommer här finnas ett mer detaljerat felmeddelande.';
$string['privacy:metadata:offlinequiz_queue_data:filename'] = 'Filnamnet på filen som kön avser.';
$string['privacy:metadata:offlinequiz_queue_data:queueid'] = 'Kön som dessa data tillhör.';
$string['privacy:metadata:offlinequiz_queue_data:status'] = 'Status för ködata.';
$string['privacy:metadata:offlinequiz_results'] = 'I den här tabellen sparas alla resultatdata som inte kan lagras i kunskapstest-API:t.';
$string['privacy:metadata:offlinequiz_results:offlinegroupid'] = 'Den offlinekunskapstest-grupp som det här resultatet tillhör.';
$string['privacy:metadata:offlinequiz_results:offlinequizid'] = 'Offline-kunskapstest som det här resultatet tillhör.';
$string['privacy:metadata:offlinequiz_results:status'] = 'Resultatets status (ofullständig eller fullständig).';
$string['privacy:metadata:offlinequiz_results:sumgrades'] = 'Summan av alla betyg för detta resultat.';
$string['privacy:metadata:offlinequiz_results:teacherid'] = 'Läraren som laddade upp resultatet.';
$string['privacy:metadata:offlinequiz_results:timefinish'] = 'Sluttiden som resultatet infogades för första gången.';
$string['privacy:metadata:offlinequiz_results:timemodified'] = 'Ändringsdatum för resultatet.';
$string['privacy:metadata:offlinequiz_results:timestart'] = 'Början på tiden då resultatet infogades första gången.';
$string['privacy:metadata:offlinequiz_results:usageid'] = 'Mallanvändnings-ID:t för kunskapstest-API:t där det här resultatet sparas.';
$string['privacy:metadata:offlinequiz_results:userid'] = 'Användaren som resultatet hör till.';
$string['privacy:metadata:offlinequiz_scanned_p_pages'] = 'I den här tabellen sparas deltagarsidor och deras allmänna information.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:error'] = 'Felet (om det finns) som den här sidan utlöste under bearbetningen.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:filename'] = 'Namnet på filen för den inskannade sidan.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:listnumber'] = 'Listnummer';
$string['privacy:metadata:offlinequiz_scanned_p_pages:offlinequizid'] = 'Offline-kunskapstest som den här deltagarsidan tillhör.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:status'] = 'Status för den inskannade sidan.';
$string['privacy:metadata:offlinequiz_scanned_p_pages:time'] = 'Tidpunkten då sidan bearbetades.';
$string['privacy:metadata:offlinequiz_scanned_pages'] = 'Tabellen sparar information om en skannad sida i ett offline-kunskapstest.';
$string['privacy:metadata:offlinequiz_scanned_pages:error'] = 'Det detaljerade felet som den här sidan har (om det finns).';
$string['privacy:metadata:offlinequiz_scanned_pages:filename'] = 'Filnamnet för den inskannade sidan.';
$string['privacy:metadata:offlinequiz_scanned_pages:groupnumber'] = 'Gruppnumret för den grupp som detta offline-kunskapstest tillhör.';
$string['privacy:metadata:offlinequiz_scanned_pages:offlinequizid'] = 'Offline-kunskapstestet för den inskannade sidan.';
$string['privacy:metadata:offlinequiz_scanned_pages:pagenumber'] = 'Sidnumret för den här sidan.';
$string['privacy:metadata:offlinequiz_scanned_pages:resultid'] = 'Resultatet som hör till den här sidan.';
$string['privacy:metadata:offlinequiz_scanned_pages:status'] = 'Status för den här sidan.';
$string['privacy:metadata:offlinequiz_scanned_pages:time'] = 'Tidpunkt då sidan bearbetades.';
$string['privacy:metadata:offlinequiz_scanned_pages:userkey'] = 'Användarnyckeln (ej userid) för den kryssade användaren på sidan.';
$string['privacy:metadata:offlinequiz_scanned_pages:warningfilename'] = 'Filnamnet på filen som skapas när ett felaktigt fylld offlinetest korrigeras och användaren får en varning om det.';
$string['questionanalysis'] = 'Analys av svårighetsgrad.';
$string['questionanalysistitle'] = 'Svårighetsgradsanalystabell';
$string['questionbankcontents'] = 'Frågebanksinnehåll';
$string['questionforms'] = 'Frågeformulär';
$string['questioninfoanswers'] = 'Antal rätta svar';
$string['questioninfocorrectanswer'] = 'rätt svar';
$string['questioninfocorrectanswers'] = 'rätta svar';
$string['questioninfonone'] = 'Inget';
$string['questioninfoqtype'] = 'Frågetyp';
$string['questionname'] = 'Frågenamn';
$string['questionpage'] = 'Sida';
$string['questionsheet'] = 'Frågeblad';
$string['questionsheetlatextemplate'] = '% !TEX encoding = UTF-8 Unicode
\\documentclass[11pt,a4paper]{article}
\\usepackage[utf8x]{inputenc}
\\usepackage[T1]{fontenc}
\\textwidth 16truecm
\\textheight 23truecm
\\setlength{\\oddsidemargin}{0cm}
\\setlength{\\evensidemargin}{0cm}
\\setlength{\\topmargin}{-1cm}
\\usepackage{amsmath} % for \\implies etc
\\usepackage{amsfonts} % for \\mathbb etc
\\usepackage[colorlinks=true,urlcolor=dunkelrot,linkcolor=black]{hyperref} % För hyperlänkar
\\usepackage{ifthen}
\\usepackage{enumitem}
\\usepackage{xcolor}
\\usepackage{ulem}
\\parindent 0pt % ingen indentering i början av avsnitt
\\renewcommand\\UrlFont{\\sf}
\\usepackage{lastpage}
\\usepackage{fancyhdr}
\\pagestyle{fancy}
\\chead{\\sc \\Title, Group \\Group}
\\cfoot{Seite \\thepage/\\pageref{LastPage}}
\\makeatletter %%% inaktivera sidbrytningar mellan svaren
\\@beginparpenalty=10000
\\@itempenalty=10000
\\makeatother
%
\\newcommand{\\answerIs}[1]{} %%%Inaktivera visning av rätt svar
% \\newcommand{\\answerIs}[1]{[#1]} %%%Aktivera visning av rätt svar
%%%


% ===========================================================================================================
%%% Kursdata:
\\newcommand{\\Group}{{$a->groupname}}
\\newcommand{\\Title}{{$a->coursename}}
\\newcommand{\\Date}

\\newcommand{\\TestTitle}{%
\\begin{center}
{\\bf \\Large Question sheet}\\\\[3mm]
\\fbox{
\\begin{tabular}{rl}
\\rule{0pt}{25pt} Name: & $\\underline{\\hspace*{8cm}}$ \\rule{20pt}{0pt}\\\\[5mm]
ID number: & $\\underline{\\hspace*{8cm}}$\\\\[5mm]
\\ifthenelse{\\equal{true}{{$a->printstudycodefield}}}{\\rule{10pt}{0pt} Study code: & $\\underline{\\hspace*{8cm}}$\\\\[5mm]}{}
\\rule[-20pt]{0pt}{20pt} Signatur: & $\\underline{\\hspace*{8cm}}$
\\end{tabular}}
\\end{center}
}

\\InputIfFileExists{offline_test_extras.tex}{}{} % Input extra user definitions

\\begin{document}


% ===========================================================================================================
\\TestTitle

% ===========================================================================================================


\\bigskip
% ===========================================================================================================

{$a->pdfintrotext}

% ===========================================================================================================

\\newpage

% ===========================================================================================================


{$a->latexforquestions}


\\end{document}';
$string['questionsin'] = 'Frågor i';
$string['questionsingroup'] = 'Frågor i gruppen';
$string['questionsinthisofflinequiz'] = 'Frågor i det här offline-kunskapstestet';
$string['questiontextisempty'] = '[Tom frågetext]';
$string['quizdate'] = 'Datum för offline-kunskapstestet';
$string['quizopenclose'] = 'Öppnings- och stängningsdatum';
$string['quizopenclose_help'] = 'Deltagare kan bara se sina försök efter öppningstiden och före stängningstiden.';
$string['quizquestions'] = 'Frågor';
$string['randomfromexistingcategory'] = 'Slumpmässig fråga från befintlig kategori';
$string['randomnumber'] = 'Antal slumpmässiga frågor';
$string['randomquestionusinganewcategory'] = 'Slumpmässig fråga med en ny kategori';
$string['readjust'] = 'Justera om';
$string['reallydeletepdfs'] = 'Vill du verkligen ta bort formulärfilerna?';
$string['reallydeleteupdatepdf'] = 'Vill du verkligen ta bort och uppdatera deltagarlistan?';
$string['recreatepdfs'] = 'Skapa om PDF:er';
$string['recurse'] = 'Inkludera även frågor från underkategorier';
$string['rediswrong'] = 'felaktig eller saknad kryssmarkering';
$string['refreshpreview'] = 'Uppdatera förhandsgranskning';
$string['regrade'] = 'Ändra betyg';
$string['regradedisplayexplanation'] = '<b>OBS!</b> Omgradering ändrar inte markeringar som har skrivits över manuellt!';
$string['regradinginfo'] = 'Om du ändrar poängen för en fråga måste du betygsätta offlinetestet  på nyttvför att uppdatera deltagarnas resultat.';
$string['regradingquiz'] = 'Gör om betygsättning';
$string['regradingresult'] = 'Gör om betygsättning för användare {$a}...';
$string['reloadpreview'] = 'Uppdatera förhandsgranskning';
$string['reloadquestionlist'] = 'Ladda om frågelistan';
$string['remove'] = 'Ta bort';
$string['removeemptypage'] = 'Ta bort tom sida';
$string['removepagebreak'] = 'Ta bort sidbrytning';
$string['removeselected'] = 'Ta bort valda';
$string['reordergroupquestions'] = 'Sortera frågegrupper';
$string['reorderquestions'] = 'Ordna om frågor';
$string['reordertool'] = 'Visa sorteringsverktyget';
$string['repaginate'] = 'Sidbryt med {$a} frågor per sida';
$string['repaginatecommand'] = 'Gör om sidbrytning';
$string['repaginatenow'] = 'Gör om sidbrytning nu';
$string['reportends'] = 'Reultatgranskningen avslutas';
$string['reportoverview'] = 'Översikt';
$string['reportstarts'] = 'Resultatgranskning påbörjas';
$string['resetofflinequizzes'] = 'Återställ offlinekunskapstest-data';
$string['resultexists'] = 'Samma resultat för {$a} finns redan, importen ignoreras';
$string['resultimport'] = 'Importerade resultat';
$string['results'] = 'Resultat';
$string['review'] = 'Granska';
$string['reviewbefore'] = 'Tillåt granskning när offline-kunskapstestet är öppet';
$string['reviewclosed'] = 'Efter att offline-kunskapstestet stängts';
$string['reviewcloses'] = 'Granskningen avslutas';
$string['reviewimmediately'] = 'Omedelbart efter försöket';
$string['reviewincludes'] = 'Granskningen omfattar';
$string['reviewofresult'] = 'Resultatgranskning';
$string['reviewopens'] = 'Granskningen börjar';
$string['reviewoptions'] = 'Deltagare kan visa';
$string['reviewoptions_help'] = 'Med dessa alternativ kan du styra vad deltagarna kan se efter att resultaten har importerats.
Du kan också definiera start- och sluttid för resultatrapporten. Kryssrutorna betyder:
<table>
<tr><td style="vertical-align: top;"><b>Försöket</b></td><td>
Texten till frågorna och svaren visas för studenterna. De kommer att se vilka svar de valde, men de rätta svaren kommer inte att markeras.</td>
</td></tr>
<tr><td style="vertical-align: top;"><b>Huruvida korrekt</b></td><td>
Det här alternativet kan bara aktiveras om alternativet "Försöket" är aktiverat. Om det är aktiverat kan eleverna se vilka av de valda svaren som är korrekta (grön bakgrund) eller felaktiga (röd bakgrund).</td></tr>
<tr><td style="vertical-align: top;"><b>Poäng</b></td><td>
Gruppen (t.ex. B), poäng (uppnått betyg, totalt betyg för frågorna, uppnådd procentandel, t.ex. 40/80 (50)) och betyget (t.ex. 50 av totalt 100) visas. Dessutom, om "Försöket" är valt, visas den uppnådda poängen och den maximala poängen för varje fråga.
</td></tr>
<tr><td style="vertical-align: top;"><b>Specifik återkoppling</b></td><td>
Återkoppling som beror på vilket svar studenten gav.
</td></tr>
<tr><td style="vertical-align: top;"><b>Allmän återkoppling</b></td><td>
<p>Allmän återkoppling visas för deltagaren efter att resultaten har importerats.
Till skillnad från specifik återkoppling, som beror på frågetypen och vilket svar studenten gav, visas samma allmänna återkopplingstext för alla elever.</p>
<p></p><p>Du kan använda den allmänna återkopplingen för att ge deltagarna ett uttömmande svar och kanske en länk till mer information som de kan använda om de inte förstod frågorna.</p>
</td></tr>
<tr><td style="vertical-align: top;"><b>Korrekta svar</b></td><td>
Vilka svar som är korrekta eller felaktiga visas. Det här alternativet är bara tillgängligt om "Försöket" är inställt.
</td></tr>
<tr><td style="vertical-align: top;"><b>Inskannat svarsformulär</b></td><td>
De inskannade svarsformulären visas. Markerade rutor är indikerade med gröna rutor.
</td></tr>
<tr><td style="vertical-align: top;"><b>Inskannat svarsformulär med betyg</b></td><td>
De inskannade svarsformulären visas. Markerade rutor är indikerade med gröna rutor. Felaktiga markeringar och saknade markeringar indikeras.
Dessutom visar en tabell det maximala betyget och det uppnådda betyget för varje fråga.
</td></tr>
</table>';
$string['reviewoptionsheading'] = 'Granskningsalternativ';
$string['rimport'] = 'Ladda upp/Rätta';
$string['rotate'] = 'Rotera';
$string['rotatingsheet'] = 'Bladet är roterat...';
$string['save'] = 'Spara';
$string['saveandshow'] = 'Spara och visa ändringar för studenten';
$string['savescannersettings'] = 'Spara skannerinställningar';
$string['scannedform'] = 'Inskannat formulär';
$string['scannerformfortype'] = 'Formulär för typ {$a}';
$string['scanneroptions'] = 'Skannerinställningar';
$string['scannerpdfs'] = 'Tomma formulär';
$string['scannerpdfstext'] = 'Hämta följande tomma formulär om du vill använda din egen skannerprogramvara.';
$string['scanningoptionsheading'] = 'Skanningsalternativ';
$string['score'] = 'Poäng';
$string['search:activity'] = 'Offline-kunskapstest - aktivitetsinformation';
$string['select'] = 'Välj';
$string['selectagroup'] = 'Välj en grupp';
$string['selectall'] = 'Välj alla';
$string['selectcategory'] = 'Välj kategori';
$string['selectdifferentgroup'] = 'Vänligen välj en annan grupp!';
$string['selectedattempts'] = 'Valda försök...';
$string['selectformat'] = 'Välj format...';
$string['selectgroup'] = 'Välj grupp';
$string['selectlist'] = 'Välj en lista eller försök att justera bladet:';
$string['selectmultipletoolbar'] = 'Välj flerverktygsraden';
$string['selectnone'] = 'Avmarkera alla';
$string['selectpage'] = 'Välj ett sidnummer eller försök att justera bladet:';
$string['selectquestiontype'] = '— Välj frågetyp —';
$string['showallparts'] = 'Visa alla {$a} deltagare';
$string['showcopyright'] = 'Visa copyrightinformation';
$string['showcopyrightdesc'] = 'Om du markerar det här alternativet visas copyrightinformation på sidan för granskning av elevernas resultat.';
$string['showgrades'] = 'Skriv ut frågebetyg';
$string['showgrades_help'] = 'Det här alternativet styr om de maximala betygen för frågor i offline-kunskapstestet ska skrivas ut på frågebladet.';
$string['showmissingattemptonly'] = 'Visa alla markerade deltagare utan resultat';
$string['showmissingcheckonly'] = 'Visa alla omarkerade deltagare med resultat';
$string['shownumpartsperpage'] = 'Visa {$a} deltagare per sida';
$string['showquestioninfo'] = 'Skriv ut information om svaren';
$string['showquestioninfo_help'] = 'Med det här alternativet kan du styra vilken ytterligare information om frågan som skrivs ut i frågebladet.
Du kan välja en av följande:
<ul>
<li> Inget
<li> Frågetypen - Beroende av typ kommer <em>Enskilt val, Flervals, Allt-eller-inget flervals</em> skrivas ut
<li> Antal rätta svar - Antalet rätta svar skrivs ut
</ul>';
$string['showstudentview'] = 'Visa studentvy';
$string['showtutorial'] = 'Visa självstudien om offline-kunskapstest för deltagare.';
$string['showtutorial_help'] = 'Det här alternativet avgör om deltagarna kan se en självstudie om grunderna i offline-kunskapstest.
Självstudien innehåller information om hur du hanterar olika typer av dokument i offline-kunskapstest. I en interaktiv del lär de sig att kryssa i sitt student-ID korrekt.<br />
<b>Tänk på att:</b><br />
Om du ställer in det här alternativet på "Ja" men döljer offline-kunskapstestet kommer länken till självstudien inte att vara synlig. I det här fallet kan du lägga till en länk till självstudien på kurssidan.';
$string['showtutorialdescription'] = 'Du kan lägga till en länk till självstudien på kurssidan med följande URL:';
$string['shuffleanswers'] = 'Blanda svaren';
$string['shufflequestions'] = 'Blanda frågor';
$string['shufflequestionsanswers'] = 'Blanda frågor och svar.';
$string['shufflequestionsselected'] = 'Alternativet <em>Blanda frågor</em> har aktiverats för detta kunskapstest. Detta medför att vissa sidåtgärder är otillgängliga. {$a} för att ändra blandningsalternativet.';
$string['shufflewithin'] = 'Blanda om inom frågor';
$string['shufflewithin_help'] = 'Om det här alternativet är aktiverat blandas de delar som utgör varje fråga slumpmässigt varje gång du trycker på knappen Uppdatera i förhandsgranskningen av formuläret. OBS! Den här inställningen gäller endast frågor för vilka blandningsalternativet aktiverats.';
$string['signature'] = 'Signatur';
$string['singlechoice'] = 'Envals-fråga';
$string['standard'] = 'Standard';
$string['starttutorial'] = 'Starta självstudien om provexamineringen';
$string['statistics'] = 'Statistik';
$string['statisticsplural'] = 'Statistik';
$string['statsoverview'] = 'Översikt statistik';
$string['studycode'] = 'Studiekod';
$string['temporaryfiledeletiontask'] = 'Ta bort tillfälliga filer';
$string['theattempt'] = 'Försöket';
$string['timesup'] = 'Tiden är slut!';
$string['totalmarksx'] = 'Totalt antal poäng: {$a}';
$string['totalpointsx'] = 'Totalt antal poäng: {$a}';
$string['totalquestionsinrandomqcategory'] = 'Totalt {$a} frågor i kategorin.';
$string['trigger'] = 'undre/övre gräns';
$string['tutorial'] = 'Handledning för offline-kunskapstest';
$string['type'] = 'Typ';
$string['uncheckparts'] = 'Markera valda deltagare som frånvarande';
$string['updatedsumgrades'] = 'Summan av alla resultat i gruppen {$a->letter} beräknades om till {$a->grade}.';
$string['upgradingfilenames'] = 'Uppgraderar filnamn för dokument: offline-kunskapstest {$a->done}/{$a->outof} (Offline-kunskapstest ID {$a->info})';
$string['upgradingilogs'] = 'Uppgraderar inskannade sidor: sida {$a->done}/{$a->outof} <br/>(Offline-kunskapstest ID {$a->info})';
$string['upgradingofflinequizattempts'] = 'Uppgraderar försök: Kunskapstest (Offline) {$a->done}/{$a->outof} <br/>(Offline-kunskapstest ID {$a->info})';
$string['upload'] = 'Ladda upp/Rätta';
$string['uploadpart'] = 'Ladda upp/Rätta deltagarlistor';
$string['uppertrigger'] = 'Övre andra gräns';
$string['uppertriggerzero'] = 'Övre andra gräns är 0';
$string['upperwarning'] = 'Övre första gräns';
$string['upperwarningzero'] = 'Övre första gräns är 0';
$string['useradded'] = 'Användare {$a} tillagd';
$string['userdoesnotexist'] = 'Användare {$a} finns inte';
$string['useridentification'] = 'Användaridentifiering';
$string['useridviolation'] = 'Hittade flera användare';
$string['userimported'] = 'Användare {$a} importerad och betygsatt';
$string['usernotincourse'] = 'Användare {$a} finns inte i kursen';
$string['usernotinlist'] = 'Användaren finns inte i listan!';
$string['usernotregistered'] = 'Användare {$a} är inte registrerad på kursen';
$string['userpageimported'] = 'En sida importerades för användare {$a}';
$string['valuezero'] = 'Värdet får inte vara 0';
$string['viewresults'] = 'Visa resultat';
$string['white'] = 'Vit';
$string['withselected'] = 'För valda...';
$string['zerogradewarning'] = 'Varning! Ditt offline-kunskapstest betyg är 0.0!';
$string['zipfile'] = 'ZIP-fil';
$string['zipok'] = 'ZIP-fil importerad';
