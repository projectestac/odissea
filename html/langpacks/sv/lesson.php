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
 * Strings for component 'lesson', language 'sv', version '3.8'.
 *
 * @package     lesson
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesscontrol'] = 'Styrning av tillgänglighet';
$string['actionaftercorrectanswer'] = 'Åtgärd efter rätt svar';
$string['actionaftercorrectanswer_help'] = '<p>Det normala om svaret är rätt, är att följa hoppet så som det är angivet i svaret.
I de flesta fall kommer detta antagligen att visa Nästa sida i lektionen, alltså i situationer
när studenten/ eleven/ deltagaren/ den lärande leds genom lektionen på ett logiskt sätt
med start på sidan ett och med avslutning på den sista.</p>
<p>Lektionsmodulen kan emellertid också användas som en sorts uppgift av typ <i>Flash-kort</i>.
	Studenten/ eleven/ deltagaren/ den lärande får se en viss information (valfritt) och en fråga
	i slumpmässig ordning. Det finns egentligen ingen klar början och tydligt slut, utan
	bara en uppsättning  <i>kort</i> som visas den ena efter den andra i en slumpmässig ordning.</p>
<p>Det här alternativet möjliggör två väldigt likartade beteenden för Flash-kort.
Alternativet "Visa en ny sida" visar aldrig samma sida två gånger (inte ens om studenten/ eleven/ deltagaren/ den lärande
<b> inte</b> lämnade ett korrekt svar på den fråga som var kopplad till sidan/kortet).
Det andra, icke-standardmässiga alternativet "Visa en obesvarad sida" låter studenten/ eleven/ deltagaren/ den lärande
se sidor som kan ha förekommit tidigare men bara om den därtill hörande frågan har besvarats felaktigt.</p>
<p>I båda dessa lektioner av typ Flash-kort kan du som t ex (distans)lärare
bestämma dig för att använda antingen alla sidorna/korten i lektionen eller bara en (slumpmässig) deluppsättning. Detta styr du med parametern "Antal sidor/kort att visa".</p>';
$string['actions'] = 'Åtgärder';
$string['activitylink'] = 'Länk till nästa aktivitet';
$string['activitylink_help'] = 'Om du vill ange en länk i slutet av lektionen, till en annan aktivitet i kursen väljer du aktiviteten i den rullgardinsmenyn.';
$string['activitylinkname'] = 'Gå till: {$a}';
$string['activityoverview'] = 'Du har lektioner som förfallit';
$string['addabranchtable'] = 'Lägg till en sida med innehåll';
$string['addanendofbranch'] = 'Lägg till ett slut på förgrening';
$string['addanewpage'] = 'Lägg till en ny sida';
$string['addaquestionpage'] = 'Lägg till en sida med fråga';
$string['addaquestionpagehere'] = 'Lägg till en sida med en fråga här';
$string['addbranchtable'] = 'Lägg till en innehållssida';
$string['addcluster'] = 'Lägg till ett kluster';
$string['addedabranchtable'] = 'Lade till en innehållssida';
$string['addedanendofbranch'] = 'Lade till ett slut på en förgrening';
$string['addedaquestionpage'] = 'Lade till en frågesida';
$string['addedcluster'] = 'Lade till ett kluster';
$string['addedendofcluster'] = 'Lade till ett slut på ett kluster';
$string['addendofbranch'] = 'Lägg till förgreningsslut';
$string['addendofcluster'] = 'Lägg till slut på kluster';
$string['addessay'] = 'Ska uppsatsfrågesida';
$string['additionalattemptsremaining'] = 'Slutförd, du kan göra denna lektion igen';
$string['addmatching'] = 'Skapa matchande svar';
$string['addmultichoice'] = 'Skapa flervalsfrågesida';
$string['addnewgroupoverride'] = 'Lägg till gruppåsidosättande';
$string['addnewuseroverride'] = 'Lägg till åsidosättande av användare';
$string['addnumerical'] = 'Ny Numerisk fråga';
$string['addpage'] = 'Lägg till en sida';
$string['addshortanswer'] = 'Nytt kortsvar';
$string['addtruefalse'] = 'Ny Sant/falskt-fråga';
$string['allotheranswers'] = 'Övriga svar';
$string['allotheranswersjump'] = 'Hopp för övriga svar';
$string['allotheranswersscore'] = 'Poäng för övriga svar';
$string['allowofflineattempts'] = 'Tillåt att lektionen görs offline i mobilappen.';
$string['allowofflineattempts_help'] = 'Om det här alternativet är aktiverat kan en mobilappanvändare ladda ned lektionen och försöka använda den offline. Alla möjliga svar och korrekta svar kommer också att laddas ner. Det är inte möjligt att försöka använda en lektion offline om den har en tidsgräns.';
$string['anchortitle'] = 'Början av huvudinnehållet';
$string['and'] = 'OCH';
$string['answer'] = 'Svar';
$string['answeredcorrectly'] = 'besvarad korrekt';
$string['answersfornumerical'] = 'Svar på numeriska frågor bör vara matchade par av minimala och maximala värden';
$string['arrangebuttonshorizontally'] = 'Arrangera innehållsknapparna horisontellt?';
$string['attempt'] = 'Försök: {$a}';
$string['attemptheader'] = 'Försök';
$string['attemptinfonograde'] = '{$a->timestart} ({$a->duration})';
$string['attemptinfowithgrade'] = '{$a->grade}% {$a->timestart} ({$a->duration})';
$string['attempts'] = 'Försök';
$string['attemptsdeleted'] = 'Tog bort försök';
$string['attemptsremaining'] = 'Du har {$a} återstående försök';
$string['available'] = 'Tillgänglig fr.o.m.';
$string['averagescore'] = 'Genomsnittsligt resultat';
$string['averagetime'] = 'Genomsnittslig tid';
$string['branch'] = 'Innehåll';
$string['branchtable'] = 'Innehåll';
$string['cancel'] = 'Avbryt';
$string['cannotfindanswer'] = 'Fel: det gick inte att hitta svar';
$string['cannotfindattempt'] = 'Fel: det gick inte att hitta försök';
$string['cannotfindessay'] = 'Fel: Det gick inte att hitta en essä';
$string['cannotfindfirstgrade'] = 'Fel: det gick inte att hitta betyg';
$string['cannotfindfirstpage'] = 'Det gick inte att hitta den första sidan';
$string['cannotfindgrade'] = 'Fel: det gick inte att hitta betyg';
$string['cannotfindnewestgrade'] = 'Fel: det gick inte att hitta det senaste betyget';
$string['cannotfindnextpage'] = 'Säkerhetskopiering av lektion: Det gick inte att hitta nästa sida!';
$string['cannotfindpagerecord'] = 'Lägg till slut på förgrening: det gick inte att hitta posten för sidan';
$string['cannotfindpages'] = 'Det gick inte att hitta sidor i lektionen';
$string['cannotfindpagetitle'] = 'Bekräfta borttagande: det gick inte att hitta titeln på sidan.';
$string['cannotfindpreattempt'] = 'Det gick inte att hitta posten angående det föregående försöket!';
$string['cannotfindrecords'] = 'Fel: det gick inte att hitta posterna till lektionen';
$string['cannotfindtimer'] = 'Fel: det gick inte att hitta lesson_timer records';
$string['cannotfinduser'] = 'Fel: det gick inte att hitta användare';
$string['canretake'] = '{$a} kan göra om';
$string['casesensitive'] = 'Använd reguljära uttryck';
$string['casesensitive_help'] = 'Markera kryssrutan för att använda <a href="https://sv.m.wikipedia.org/wiki/Regulj%C3%A4ra_uttryck" target="_blank">reguljära uttryck</a> för analys av svar.';
$string['checkbranchtable'] = 'Kontrollera innehållsida';
$string['checkedthisone'] = 'Kontrollerade den här.';
$string['checknavigation'] = 'Kontrollera navigation';
$string['checkquestion'] = 'Kontrollera fråga';
$string['classstats'] = 'Statistik för klass';
$string['clicktodownload'] = 'Klicka på den följande länken för att ladda ner filen.';
$string['closebeforeopen'] = 'Det gick inte att uppdatera lektionen. Du har angett ett stängningsdatum som infaller före startdatum.';
$string['cluster'] = 'Kluster';
$string['clusterjump'] = 'Ej visad fråga inom ett kluster';
$string['clustertitle'] = 'Kluster';
$string['collapsed'] = 'Komprimerad';
$string['comments'] = 'Dina kommentarer';
$string['completed'] = 'Slutförd';
$string['completederror'] = 'Slutför lektionen';
$string['completethefollowingconditions'] = 'Du måste uppfylla följande villkor i <b>{$a}</b> lektion innan Du kan fortsätta.';
$string['completionendreached'] = 'Kräv att slutet nåtts';
$string['completionendreached_desc'] = 'Studenten måste nå slutet av lektionssidan för att slutföra denna aktivitet';
$string['completiontimespent'] = 'Studenten måste göra denna aktivitet under minst';
$string['completiontimespentdesc'] = 'Deltagaren måste jobba i denna aktivitet i minst {$a}';
$string['completiontimespentgroup'] = 'Kräv nedlagd tid';
$string['conditionsfordependency'] = 'Villkor för beroendet';
$string['configintro'] = 'De värden som anges här definierar de standardvärden som används i inställningsformuläret när en ny lektionsaktivitet skapas. Inställningar som anses avancerade visas endast när \'Visa mer...\'-länken klickas.';
$string['configmaxanswers'] = 'Det standardmässiga förvalet av maximalt antal svar per sida';
$string['configmediaclose'] = 'Visar en stängningsknapp som en del av det popup-fönster som skapas för en länkad mediafil';
$string['configmediaheight'] = 'Avgör höjden på det popup-fönster som visas för en länkad mediafil';
$string['configmediawidth'] = 'Avgör bredden på det popup-fönster som visas för en länkad mediafil';
$string['configpassword_desc'] = 'Anger om det krävs ett lösenord för att få tillgång till lektionen.';
$string['configslideshowbgcolor'] = 'Bakgrundsfärg för bildspelet om det är aktiverat';
$string['configslideshowheight'] = 'Avgör höjden på bildspelet om det är aktiverat';
$string['configslideshowwidth'] = 'Avgör bredden på bildspelet om det är aktiverat';
$string['configtimelimit_desc'] = 'Om en tidsgräns är inställd visas en varning i början av lektionen och en nedräkningstimer visas. Om den är satt till noll finns ingen tidsgräns.';
$string['confirmdelete'] = 'Ta bort sida';
$string['confirmdeletionofthispage'] = 'Bekräfta att du vill ta bort den här sidan';
$string['congratulations'] = 'Gratulerar - här slutar lektionen';
$string['continue'] = 'Fortsätt';
$string['continuetoanswer'] = 'Fortsätt att ändra svar';
$string['continuetonextpage'] = 'Fortsätt till nästa sida.';
$string['correctanswerjump'] = 'Hopp vid korrekt svar';
$string['correctanswerscore'] = 'Resultat avseende korrekta svar';
$string['correctresponse'] = 'Korrekt svar';
$string['createaquestionpage'] = 'Skapa en frågesida';
$string['credit'] = 'Tillgodoräknande';
$string['customscoring'] = 'Anpassad poängsättning';
$string['customscoring_help'] = 'Om aktiverat kan varje svar ges ett numeriskt poängvärde (positivt eller negativt).';
$string['deadline'] = 'Deadline';
$string['defaultessayresponse'] = 'Din essä kommer att få ett betyg/omdöme av kursens lärare.';
$string['deleteallattempts'] = 'Ta bot alla försök att genomföra lektionen';
$string['deletedefaults'] = 'Tog bort {$a} x lektion standardinställning';
$string['deletedpage'] = 'Borttagen sida';
$string['deletepagenamed'] = 'Ta bort sida: {$a}';
$string['deleting'] = 'Tar bort';
$string['deletingpage'] = 'Tar bort sidan: {$a}';
$string['dependencyon'] = 'Beroende av';
$string['dependencyon_help'] = '<p>Med den här inställningen kan Du göra den aktuella lektionen beroende av hur studenten/ eleven/ deltagaren/ den lärande har presterat i en annan lektion som är del av samma kurs. Om kraven på prestation inte har uppfyllts då kommer studenten/ eleven/ deltagaren/ den lärande inte att få tillgång till den här lektionen.</p>

<p>I villkoren för beroendet kan följande ingå:
    <ul>
        <li><b>Den tid som har använts:</b> studenten/ eleven/ deltagaren/ den lärande måste använda den här angivna tiden för att genomföra lektionen.</li>
        <li><b>Genomförd:</b>  studenten/eleven/deltagaren/den lärande måste genomföra den obligatoriska lektionen.</li>
        <li><b>Betyg/omdöme högre än:</b> studenten/ eleven/ deltagaren/ den lärande måste  uppnå ett betyg/omdöme som är högre än det som är angivet här. </li>
    </ul>
    Alla kombinationer av det ovanstående kan användas om det behövs.
</p>';
$string['description'] = 'Beskrivning';
$string['deselectallattempts'] = 'Avmarkera alla försök';
$string['detailedstats'] = 'Detaljerad statistik';
$string['didnotanswerquestion'] = 'Besvarade inte den här frågan.';
$string['didnotreceivecredit'] = 'Fick inte tillgodoräkna sig resultat';
$string['disabled'] = 'Inaktiverad';
$string['displaydefaultfeedback'] = 'Använd standardåterkoppling';
$string['displaydefaultfeedback_help'] = 'Om aktiverat visas standardsvaret "Det är det rätta svaret" eller "Det är fel svar" om svaret för en fråga inte kan hittas.';
$string['displayinleftmenu'] = 'Visa i menyn?';
$string['displayleftif'] = 'Betygsgräns för visning av meny';
$string['displayleftif_help'] = 'Den här inställningen avgör om en deltagare måste uppnå ett visst resultat innan lektionsmenyn visas. Detta tvingar eleven att gå igenom hela lektionen vid första försöket.';
$string['displayleftmenu'] = 'Visa meny';
$string['displayleftmenu_help'] = 'Om det här är aktiverat kommer en meny för navigering mellan sidorna visas.';
$string['displayofgrade'] = 'Visning av betyg (enbart för studenter)';
$string['displayreview'] = 'Tillhandahåll ett alternativ att försöka svara på en fråga igen';
$string['displayreview_help'] = 'Om aktiverad får en student som svarar fel på en fråga möjlighet att prova igen utan poängavdrag, eller fortsätta med lektionen. Om studenten klickar för att gå vidare till en annan fråga kommer det valda (felaktiga) svaret följas. Som standard hoppar studenten till "denna sida" vid felsvar och får poängen 0, så det rekommenderas att du ställer in "fel svar hoppa till en annan" sida för att undvika förvirring för dina elever.';
$string['displayscorewithessays'] = 'Du har uppnått {$a->score} av {$a->tempmaxgrade} för de frågor som betygssätts automatiskt.<br>Dina {$a->essayquestions} essäfrågor kommer att betygsättas och adderas till<br>ditt slutresultat vid ett senare tillfälle.<br><br>Ditt aktuella betyg utan essäfrågorna är {$a->score} av {$a->grade}';
$string['displayscorewithoutessays'] = 'Ditt resultat är {$a->score} (av {$a->grade}).';
$string['duplicatepagenamed'] = 'Duplicerad sida: {$a}';
$string['edit'] = 'Redigera';
$string['editbranchtable'] = 'Redigera sida';
$string['editcluster'] = 'Redigera kluster';
$string['editendofbranch'] = 'Redigera förgreningsslut';
$string['editendofcluster'] = 'Redigera klusterslut';
$string['editessay'] = 'Redigera uppsatsfråga';
$string['editingquestionpage'] = 'Redigerar frågesidan {$a} ';
$string['editlessonsettings'] = 'Redigera lektionsinställningar';
$string['editmatching'] = 'Redigera matchande svar';
$string['editmultichoice'] = 'Redigera flervalsfråga';
$string['editnumerical'] = 'Redigera numeriskt svar';
$string['editoverride'] = 'Redigera åsidosättande';
$string['editpage'] = 'Redigera sidinnehåll';
$string['editpagecontent'] = 'Redigera sidinnehåll';
$string['editquestion'] = 'Redigera fråga';
$string['editshortanswer'] = 'Redigera kortsvar';
$string['edittruefalse'] = 'Redigera sant/falskt';
$string['email'] = 'E-post';
$string['emailallgradedessays'] = 'Skicka  ALLA <br> betygssatta essäer med e-post';
$string['emailgradedessays'] = 'Skicka betygssatta essäer med e-post';
$string['emailsuccess'] = 'E-post skickades';
$string['emptypassword'] = 'Lösenordet får inte vara blankt';
$string['enabled'] = 'Aktiverad';
$string['endofbranch'] = 'Slut på förgrening';
$string['endofcluster'] = 'Slut på kluster';
$string['endofclustertitle'] = 'Slut på kluster';
$string['endoflesson'] = 'Slut på lektion';
$string['enteredthis'] = 'matade in det här.';
$string['enterpassword'] = 'Vänligen ange lösenordet:';
$string['eolstudentoutoftime'] = 'OBS! Tiden har gått ut för den här lektionen. Ditt sista svar kanske inte kommer att räknas om du lämnade det efter det att tiden hade gått ut.';
$string['eolstudentoutoftimenoanswers'] = 'Du besvarade inga frågor. Ditt resultat för den här lektionen är 0.';
$string['essay'] = 'Uppsats';
$string['essayemailmessage2'] = '<p>Essä:<blockquote>{$a->question}</blockquote></p><p>Ditt svar:<blockquote><em>{$a->response}</em></blockquote></p><p>Betygssättarens kommentarer:<blockquote><em>{$a->comment}</em></blockquote></p><p>Du har uppnått {$a->earned} av {$a->outof} för den här essäfrågan.</p><p>Ditt betyg för lektionen har ändrats till {$a->newgrade}%.</p>';
$string['essayemailmessagesmall'] = '<p>Du har fått {$a->earned} av {$a->outof} för denna essäfråga.</p> <p>Ditt resultat för lektionen {$a->lesson} har ändrats till {$a->newgrade}%.</p>';
$string['essayemailsubject'] = 'Ditt betyg för {$a} fråga';
$string['essaynotgradedyet'] = 'Denna uppsats har inte betygsatts ännu';
$string['essayresponses'] = 'Uppsatssvar';
$string['essays'] = 'Uppsatser';
$string['essayscore'] = 'Uppsatspoäng';
$string['eventcontentpageviewed'] = 'Innehållssida visad';
$string['eventessayassessed'] = 'Uppsats bedömd';
$string['eventessayattemptviewed'] = 'Essäförsök visat';
$string['eventlessonended'] = 'Lektion slutade';
$string['eventlessonrestarted'] = 'Lektion återstartades';
$string['eventlessonresumed'] = 'Lektion återupptagen';
$string['eventlessonstarted'] = 'Lektion började';
$string['eventoverridecreated'] = 'Lektionsåsidosättande skapat';
$string['eventoverridedeleted'] = 'Lektionsåsidosättande borttaget';
$string['eventoverrideupdated'] = 'Lektionsåsidosättande uppdaterat';
$string['eventpagecreated'] = 'Sida skapad';
$string['eventpagedeleted'] = 'Sida borttagen';
$string['eventpagemoved'] = 'Sida flyttad';
$string['eventpageupdated'] = 'Sida uppdaterad';
$string['eventquestionanswered'] = 'Fråga besvarad';
$string['eventquestionviewed'] = 'Fråga visad';
$string['false'] = 'Falskt';
$string['fileformat'] = 'Filformat';
$string['finalwrong'] = 'Inte riktigt.';
$string['finish'] = 'Avsluta';
$string['firstanswershould'] = 'Det första svaret bör hoppa till sidan \'Rätt\'';
$string['firstwrong'] = 'Tyvärr har Du inte uppnått den här poängen eftersom Du inte svarade rätt. Vill Du fortsätta att gissa, för lärandets skull (men inte för någon poäng)?';
$string['flowcontrol'] = 'Flödeskontroll';
$string['fractionsaddwrong'] = 'De positiva betyg du valt kan inte summeras till 100%.<br />Istället kommer de upp till {$a}%
<br />Vill du gå tillbaka och ändra denna fråga?';
$string['fractionsnomax'] = 'Ett av svaren borde bli 100%, så att det är
<br />möjligt att få fullt betyg på denna fråga.
<br />Vill Du gå tillbaka och ändra denna fråga?';
$string['full'] = 'Utvidgad';
$string['general'] = 'Allmänt';
$string['gotoendoflesson'] = 'Gå till slutet av lektionen';
$string['grade'] = 'Betyg';
$string['gradebetterthan'] = 'Betyg bättre än (%)';
$string['gradebetterthanerror'] = 'Prestera för ett betyg som är bättre än {$a} procent';
$string['graded'] = 'Betygssatt';
$string['gradeessay'] = 'Betygssätt essäfrågor';
$string['gradeis'] = 'Betyget är {$a}';
$string['gradeoptions'] = 'Betygsalternativ';
$string['groupoverrides'] = 'Gruppåsidosättanden';
$string['groupoverridesdeleted'] = 'Gruppåsidosättanden borttagna';
$string['groupsnone'] = 'Det finns inga kurser som du har behörighet till.';
$string['handlingofretakes'] = 'Hantering av omtagningar';
$string['handlingofretakes_help'] = 'Om \'Tillåt flera försök\' är aktiverat anger den här inställningen om max- eller genomsnittsbetyget från genomförda försök ska användas.';
$string['havenotgradedyet'] = 'Har inte satt betyg än.';
$string['here'] = 'här';
$string['highscore'] = 'Högstapoäng';
$string['hightime'] = 'Högstatid';
$string['importcount'] = 'Importerar {$a} frågor';
$string['importquestions'] = 'Importera frågor';
$string['importquestions_help'] = 'Denna funktion aktiverar möjligheten att via en textfil importera frågor i olika format.';
$string['indicator:cognitivedepth'] = 'Lektion kognitiv';
$string['indicator:cognitivedepth_help'] = 'Denna indikator baseras på det kognitiva djup som uppnåtts av studenten i en Lektionsaktivitet.';
$string['indicator:cognitivedepthdef'] = 'Lektion kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Deltagaren har nått denna procentandel av det kognitiva engagemang som erbjuds av Lektions-aktiviteterna under detta analysintervall (Nivåer = Ingen visning, Visa, Skicka in, Visa återkoppling, Kommentera återkoppling, Skicka in på nytt efter läst återkoppling)';
$string['indicator:socialbreadth'] = 'Lektion social';
$string['indicator:socialbreadth_help'] = 'Denna indikator baseras på den sociala bredd som uppnåtts av studenten i en Lektionresurs.';
$string['indicator:socialbreadthdef'] = 'Lektion social';
$string['indicator:socialbreadthdef_help'] = 'Deltagaren har nått denna procentandel av det sociala engagemanget som erbjuds av Lektionsaktiviteterna under detta analysintervall (Nivåer = Inget deltagande, Deltagaren ensamt, Deltagaren tillsammans med andra)';
$string['insertedpage'] = 'Infogad sida';
$string['invalidfile'] = 'Ogiltig fil';
$string['invalidid'] = 'Det avgavs ingen ID för modul eller lektion';
$string['invalidlessonid'] = 'ID för lektion var inte korrekt';
$string['invalidoverrideid'] = 'Ogiltigt åsidosättande-ID';
$string['invalidpageid'] = 'Ogiltigt ID för sida';
$string['jump'] = 'Hoppa till';
$string['jumps'] = 'Hopp';
$string['jumps_help'] = '<p>Varje svar har en hoppa-till-länk. När någon har valt ett svar så visas återkopplingen på
svaret för studenten/ eleven/ deltagaren/ den lärande. Efter det visas den sida om hoppa-till-länken refererar till.
Denna länk kan vara relativ eller absolut. Relativa länkar är <b>Den här sidan</b> och <b>Nästa sida</b>.
<b>Den här sidan</b> betyder att samma sida visas igen. <b>Nästa sida</b>
visar den sida som följer efter denna i en logisk följd av sidor. En
absolut länk till en sida anger Du genom att välja sidans <b>titel</b>.</p>
<p>Lägg märke till att en (relativ) <b>Nästa sida</b> hoppa-till-länk kan visa en
annan sida efter det att sidor har flyttats. En hoppa-till-länk som använder sig av
sido<b>titlar</b> visar däremot alltid samma sida även efter det att sidor har flyttats.
</p>
<b><p>Specialhopp</p>
<p>Ej visad fråga inom en förgrening</p></b>
<p>Det här blir en länk till en slumpmässigt vald (av studenten/ eleven/ deltagaren/ den lärande) ej visad fråga mellan den här förgreningstabellen och slutet på lektionen eller nästa slut på en förgrening. </p>

<p><b>Slumpmässig fråga inom en förgrening</b></p>
<p>Det här blir en länk till en slumpmässigt vald fråga mellan den aktuella förgreningstabellen och  slutet på lektionen eller nästa slut på en förgrening. Om studenten/ eleven/ deltagaren/ den lärande redan har sett frågan och antalet försök är fler än 1 då kommer de att få ytterligare en möjlighet att skaffa sig poängen för frågan. Om antalet försök är inställt till 1 då kommer frågan att hoppas över och istället visas en annan slumpmässig fråga.</p>

<p><b>Slumpmässig förgreningstabell</b></p>
<p>Det här blir ett hopp till en slumpmässig förgreningstabell mellan den aktuella och  slutet på lektionen eller nästa slut på en förgrening.</p>';
$string['jumpsto'] = 'Hopp till <em>{$a}</em>';
$string['leftduringtimed'] = 'Du har avbrutit under en tidsbestämd lektion.<br /> Vänligen välj "Fortsätt" för att starta om lektionen.';
$string['leftduringtimednoretake'] = 'Du har avbrutit under en tidsbestämd lektion<br /> och du får inte göra om, eller gå vidare med, lektionen.';
$string['lesson:addinstance'] = 'Lägg till ny lektion';
$string['lesson:edit'] = 'Redigera en lektionsaktivitet';
$string['lesson:grade'] = 'Betygsätt uppsatsfrågor';
$string['lesson:manage'] = 'Hantera lektionsaktivitet';
$string['lesson:manageoverrides'] = 'Hantera lektionsåsidosättanden';
$string['lesson:view'] = 'Visa lektionsaktivitet';
$string['lesson:viewreports'] = 'Visa lektionsrapport';
$string['lessonclosed'] = 'Den här lektionen stängdes  {$a}';
$string['lessoncloses'] = 'Lektionen avslutas';
$string['lessoncloseson'] = 'Lektionen stängs på {$a}';
$string['lessoneventcloses'] = '{$a} stänger';
$string['lessoneventopens'] = '{$a} öppnar';
$string['lessonformating'] = 'Lektionsformat';
$string['lessonmenu'] = 'Lektionsmeny';
$string['lessonname'] = 'Lektioner: {$a}';
$string['lessonnotready'] = 'Den här lektionen är klar för användning. Vänligen kontakta din {$a}.';
$string['lessonnotready2'] = 'Den här lektionen är ännu inte färdig för användning';
$string['lessonopen'] = 'Den här lektionen kommer att öppnas {$a}';
$string['lessonopens'] = 'Lektionen öppnas';
$string['lessonpagelinkingbroken'] = 'Det gick inte att hitta förstasidan. Länkningen mellan sidorna i lektionen tycks inte fungera. Vänligen kontakta systemadministratören.';
$string['lessonstats'] = 'Lektionsstatistik';
$string['linkedmedia'] = 'Länkad media';
$string['loginfail'] = 'Inloggningen misslyckades, vänligen försök igen...';
$string['lowscore'] = 'Lägstapoäng';
$string['lowtime'] = 'Lägstatid';
$string['manualgrading'] = 'Betygsätt uppsats';
$string['matchesanswer'] = 'Passar ihop med svar';
$string['matching'] = 'Matchning';
$string['matchingpair'] = 'Matchande par {$a}';
$string['maxgrade'] = 'Högsta betyg';
$string['maxgrade_help'] = 'Denna inställning anger maxbetyget för lektionen. 0 = lektionen syns inte på betygssidor.';
$string['maximumnumberofanswersbranches'] = 'Maximalt antal svar';
$string['maximumnumberofanswersbranches_help'] = 'Den här inställningen anger det maximala antalet svar som får användas i lektionen. Om bara sant/falskt-frågor används kan det ställas in till 2. Inställningen kan ändras när som helst, eftersom den bara påverkar vad läraren ser och inte informationen.';
$string['maximumnumberofattempts'] = 'Maximalt antal försök';
$string['maximumnumberofattempts_help'] = 'Den här inställningen anger det maximala antalet försök som tillåts för varje fråga. Om den besvaras felaktigt det ovan angivna antalet gånger visas nästa sida i lektionen.';
$string['maximumnumberofattemptsreached'] = 'Du har uppnått maximalt antal tillåtna försök - Du flyttas nu vidare till nästa sida.';
$string['mediaclose'] = 'Visa knappen stäng';
$string['mediafile'] = 'Länkad media';
$string['mediafile_help'] = '<p>Det här kommer att skapa ett popup-fönster innehållande en fil (t.ex. en mp3-fil) eller en webbsida i början av en lektion. Det kommer också att skapas en länk på varje sida i lektionen. Med den länken kan man öppna popup-fönstret igen om det skulle behövas.</p>

<p>Alternativt kommer det att skapas en knapp "Stäng fönster" längst ner på popup-fönstret. Du kan även ställa in höjd och bredd på fönstret. </p>';
$string['mediafilepopup'] = 'Klicka här för att visa ';
$string['mediaheight'] = 'Höjd på popup-fönster:';
$string['mediawidth'] = 'Bredd på popup-fönster::';
$string['messageprovider:graded_essay'] = 'Meddelande om betygsatt essä';
$string['minimumnumberofquestions'] = 'Minsta antal frågor';
$string['minimumnumberofquestions_help'] = 'Den här inställningen anger det minsta antalet frågor som ska användas för att beräkna ett betyg för aktiviteten.';
$string['missingname'] = 'Vänligen mata in ett smeknamn';
$string['modattempts'] = 'Tillåt lektionsgranskning för studenter';
$string['modattempts_help'] = 'Om aktiverad kan studenterna navigera genom lektionen igen från början.';
$string['modattemptsnoteacher'] = 'Lektionsgranskning fungerar enbart för studenter.';
$string['modulename'] = 'Lektion';
$string['modulename_help'] = '<img src="<?php echo $CFG->wwwroot?>/mod/lesson/icon.gif" alt="" /> <b>Lektion</b>
<p>En lektion kan presentera innehåll på ett intressant och flexibelt sätt.
Den består av ett antal sidor. Varje sida avslutas normalt sett med en fråga
och ett antal möjliga svar. Beroende på vilket svar studenten/eleven/deltagaren/den lärande
väljer så kan han/hon antingen fortsätta till nästa sida eller tvingas gå tillbaka till föregående sida.
Navigationen genom lektionen kan vara enkel eller komplex, till stor del beroende på hur innehållets struktur presenteras.</p>';
$string['modulenameplural'] = 'Lektioner';
$string['move'] = 'Flytta sida';
$string['movedpage'] = 'Flyttad sida';
$string['movepagehere'] = 'Flytta sidan hit';
$string['movepagenamed'] = 'Flytta sida: {$a}';
$string['moving'] = 'Flyttar sidan: {$a}';
$string['multianswer'] = 'Flera svar';
$string['multianswer_help'] = 'Markera denna kryssruta om mer än ett svarsalternativ kan vara korrekt.';
$string['multichoice'] = 'Flerval';
$string['multipleanswer'] = 'Flera svar';
$string['nameapproved'] = 'Namn godkänt';
$string['namereject'] = 'Ditt namn har tyvärr inte accepterats av filtret.<br> Vänligen försök igen.';
$string['new'] = 'ny';
$string['nextpage'] = 'Nästa sida';
$string['noanswer'] = 'Det finns inget angivet svar';
$string['noattemptrecordsfound'] = 'Inga försök har registrerats, inga betyg är utdelade';
$string['nobranchtablefound'] = 'Det gick inte att hitta någon innehållssida';
$string['noclose'] = 'Inget stängningsdatum';
$string['nocommentyet'] = 'Ingen kommentar ännu.';
$string['nocoursemods'] = 'Det gick inte att hitta några aktiviteter';
$string['nocredit'] = 'Inget tillgodoräknande';
$string['nodeadline'] = 'Ingen tidsbegränsning';
$string['noessayquestionsfound'] = 'Det gick inte att hitta några essäfrågor i den här lektionen.';
$string['nohighscores'] = 'Inga högstapoäng';
$string['nolessonattempts'] = 'Det har inte gjorts några försök att genomföra den här lektionen.';
$string['nolessonattemptsgroup'] = 'Inga försök har gjorts i denna lektion av {$a} gruppmedlemmar.';
$string['none'] = 'Ingen';
$string['nooneansweredcorrectly'] = 'Ingen lämnade ett korrekt svar.';
$string['nooneansweredthisquestion'] = 'Ingen besvarade den här frågan.';
$string['noonecheckedthis'] = 'Ingen kontrollerade det här.';
$string['nooneenteredthis'] = 'Ingen matade in det här.';
$string['noonehasanswered'] = 'Ingen har besvarat någon essäfråga ännu.';
$string['noopen'] = 'Inget öppningsdatum';
$string['noretake'] = 'Du får inte göra om den här lektionen.';
$string['normal'] = 'Normal - följ lektionens spår';
$string['notcompleted'] = 'Inte slutförd';
$string['notcompletedwithdate'] = 'Ej slutförd ({$s})';
$string['notdefined'] = 'Inte definierad';
$string['notenoughsubquestions'] = 'Otillräckligt antal delfrågor!<br />
Vill Du gå tillbaka och rätta till den här frågan?';
$string['notgraded'] = 'Ej betygssatt';
$string['notitle'] = 'Ingen titel';
$string['notyetcompleted'] = 'Lektionen har påbörjats men ännu ej slutförts';
$string['numberofcorrectanswers'] = 'Antal rätta svar:  {$a}';
$string['numberofcorrectanswersheader'] = 'Antal rätta svar';
$string['numberofcorrectmatches'] = 'Antal rätta matchningar:  {$a}';
$string['numberofpagestoshow'] = 'Antal sidor att visa';
$string['numberofpagestoshow_help'] = 'Den här inställningen specificerar antalet sidor som visas i en lektion. Den är endast applicerbar för lektioner med sidor som visas i en slumpmässig ordning (när "Åtgärd efter rätt svar" är satt till "Visa en tidigare inte visad sida" eller "Visa en obesvarad sida"). Om satt till noll så visas alla sidor.';
$string['numberofpagesviewed'] = 'Antal frågor som besvarats:  {$a}';
$string['numberofpagesviewedheader'] = 'Antal frågor som besvarats.';
$string['numberofpagesviewednotice'] = 'Antal besvarade frågor: {$a->nquestions}; (Du bör besvara åtminstone: {$a->minquestions})';
$string['numerical'] = 'Numerisk';
$string['numericanswer'] = 'Numeriskt svar';
$string['offlinedatamessage'] = 'Du har arbetat med detta försök på en mobil enhet. Senaste gången något sparades var för {$a} sedan. Kolla gärna så att du inte har arbete som inte sparats.';
$string['ongoing'] = 'Visa pågående resultat';
$string['ongoing_help'] = 'Om aktiverad kommer varje sida att visa deltagarens uppnådda poäng (hittills) i förhållande till antalet möjliga.';
$string['ongoingcustom'] = 'Du har uppnått {$a->score} poäng av {$a->currenthigh} poäng så här långt.';
$string['ongoingnormal'] = 'Du har lämnat korrekt/a svar på {$a->correct} fråga/or av {$a->viewed} fråga/or.';
$string['onpostperpage'] = 'Endast ett bidrag per betyg';
$string['options'] = 'Alternativ';
$string['or'] = 'ELLER';
$string['ordered'] = 'Ordnad';
$string['other'] = 'Övrigt';
$string['outof'] = 'Av {$a}';
$string['override'] = 'Åsidosätt';
$string['overridedeletegroupsure'] = 'Är du säker på att du vill ta bort åsidosättandet för gruppen {$a}?';
$string['overridedeleteusersure'] = 'Är du säker på att du vill ta bort åsidosättandet för användaren {$a}?';
$string['overridegroup'] = 'Åsidosätt grupp';
$string['overridegroupeventname'] = '{$a->lesson} - {$a->group}';
$string['overrides'] = 'Åsidosättanden';
$string['overrideuser'] = 'Åsidosätt användare';
$string['overrideusereventname'] = '{$a->lesson} - Åsidosätt';
$string['overview'] = 'Översikt';
$string['overview_help'] = 'En lektion består av ett antal sidor och valfria innehållssidor. En sida innehåller en del innehåll och slutar vanligtvis med en fråga. För varje svar specificeras ett hopp. Hoppet kan vara relativt, till exempel <em>den här sidan</em>, <em>nästa sida</em> eller <em>absolut</em> och ange någon av sidorna i lektionen. En innehållssida är en sida som innehåller en uppsättning länkar till andra sidor i lektionen, till exempel en Innehållsförteckning.';
$string['page'] = 'Sida:  {$a}';
$string['page-mod-lesson-edit'] = 'Redigera lektionssida';
$string['page-mod-lesson-view'] = 'Visa eller förhandsgranska lektionssida';
$string['page-mod-lesson-x'] = 'Valfri lektionssida';
$string['pageanswers'] = 'Svar';
$string['pagecontents'] = 'Sidinnehåll';
$string['pageresponses'] = '';
$string['pages'] = 'Sidor';
$string['pagetitle'] = 'Titel';
$string['password'] = 'Lösenord';
$string['passwordprotectedlesson'] = '{$a} är en lektion som kräver lösenord.';
$string['pleasecheckoneanswer'] = 'Markera ett svar';
$string['pleasecheckoneormoreanswers'] = 'Markera ett eller flera svar';
$string['pleaseenteryouranswerinthebox'] = 'Vänligen skriv in dina svar i textrutan';
$string['pleasematchtheabovepairs'] = 'Vänligen matcha de ovanstående paren';
$string['pluginadministration'] = 'Lektionsadministration';
$string['pluginname'] = 'Lektion';
$string['pointsearned'] = 'Intjänade poäng';
$string['postprocesserror'] = 'Fel uppstod under efterbearbetning!';
$string['postsuccess'] = 'Inlägget postades';
$string['practice'] = 'Övningslektion';
$string['practice_help'] = 'En övningslektion visas inte i betygsboken.';
$string['preprocesserror'] = 'Fel uppstod under förbearbetning!';
$string['preview'] = 'Förhandsgranska';
$string['previewlesson'] = 'Förhandsgranska {$a}';
$string['previewpagenamed'] = 'Förhandsgranska sida: {$a}';
$string['previouspage'] = 'Föregående sida';
$string['privacy:metadata:attempts'] = 'Förteckning över sidförsök';
$string['privacy:metadata:attempts:answerid'] = 'Svars-ID:t';
$string['privacy:metadata:timer:timemodifiedoffline'] = 'Det senaste tillfället när vi sparade aktivitet från mobilappen';
$string['privacy:path:essayanswers'] = 'Uppsatssvar';
$string['privacy:path:essayresponses'] = 'Uppsatssvar';
$string['privacy:path:pages'] = 'Sidor';
$string['processerror'] = 'Fel uppstod under bearbetning!';
$string['progressbar'] = 'Förloppsindikator';
$string['progressbar_help'] = 'Om aktiverad visas en förloppsindikator längst ned på lektionssidan som visar ungefärligt hur stor andel (i %) av kursen som slutförts.';
$string['progressbarteacherwarning'] = 'Förloppsindikator visas inte för {$a}';
$string['progressbarteacherwarning2'] = 'Du kan inte se förloppsindikatorn eftersom du kan redigera den här lektionen';
$string['progresscompleted'] = 'Du har gjort {$a}% av denna lektion.';
$string['qtype'] = 'Sidtyp';
$string['question'] = 'Fråga';
$string['questionoption'] = 'Fråga';
$string['questiontype'] = 'Frågetyp';
$string['randombranch'] = 'Slumpmässig innehållssida';
$string['randompageinbranch'] = 'Slumpad fråga inom en innehållssida';
$string['rank'] = 'Rangordna';
$string['rawgrade'] = 'Råbetyg';
$string['receivedcredit'] = 'Tillgodoräknat resultat';
$string['redisplaypage'] = 'Sida för visning igen';
$string['removeallgroupoverrides'] = 'Ta bort alla gruppåsidosättanden';
$string['removealluseroverrides'] = 'Ta bort alla användaråsidosättanden';
$string['report'] = 'Rapport';
$string['reports'] = 'Rapporter';
$string['response'] = 'Svar';
$string['retakesallowed'] = 'Tillåt flera försök';
$string['retakesallowed_help'] = 'Om aktiverat tillåts studenter försöka slutföra lektionen flera gånger.';
$string['returnto'] = 'Tillbaka till {$a}';
$string['returntocourse'] = 'Tillbaka till kursen';
$string['reverttodefaults'] = 'Återgå till standardinställningarna';
$string['review'] = 'Granska';
$string['reviewlesson'] = 'Granska lektion';
$string['reviewquestionback'] = 'Ja, jag vill försöka igen';
$string['reviewquestioncontinue'] = 'Nej, jag vill gå vidare till nästa fråga';
$string['sanitycheckfailed'] = 'Kontrollen misslyckades. Det här försöket har tagits bort';
$string['save'] = 'Spara';
$string['savechanges'] = 'Spara';
$string['savechangesandeol'] = 'Spara alla ändringar och gå till slutet av lektionen.';
$string['saveoverrideandstay'] = 'Spara och ange ett annat åsidosättande';
$string['savepage'] = 'Spara';
$string['score'] = 'Resultat';
$string['scores'] = 'Resultat';
$string['search:activity'] = 'Lektion - aktivitetsinformation';
$string['secondpluswrong'] = 'Inte helt. Vill du försöka igen?';
$string['selectallattempts'] = 'Välj alla försök';
$string['selectaqtype'] = 'Välj en frågetyp';
$string['sent'] = 'Skickad';
$string['shortanswer'] = 'Kort svar';
$string['showanunansweredpage'] = 'Visa en obesvarad sida';
$string['showanunseenpage'] = 'Visa en tidigare inte visad sida';
$string['singleanswer'] = 'Enskilt svar';
$string['skip'] = 'Hoppa över navigationen';
$string['slideshow'] = 'Bildspel';
$string['slideshow_help'] = 'Om aktiverat visas lektionen som ett bildspel med en fast bredd och höjd.';
$string['slideshowbgcolor'] = 'Bakgrundsfärg för bildspel';
$string['slideshowheight'] = 'Bildspelets höjd';
$string['slideshowwidth'] = 'Bildspelets bredd';
$string['startlesson'] = 'Påbörja lektion';
$string['studentattemptlesson'] = '{$a->lastname}, {$a->firstname}\'s försök nummer {$a->attempt}';
$string['studentname'] = '{$a} Namn';
$string['studentoneminwarning'] = 'Varning! Du har 1 minut eller mindre på dig att avsluta lektionen.';
$string['studentresponse'] = '{$a}s svar';
$string['submit'] = 'Skicka in';
$string['submitname'] = 'Skicka in namn';
$string['teacherjumpwarning'] = 'Ett {$a->cluster}-hopp eller {$a->unseen}-hopp används i den här lektionen. Hopptypen "Nästa sida" kommer att användas istället. Logga in som student för att testa dessa hopp.';
$string['teacherongoingwarning'] = 'Ett pågående resultat visas bara för studenter. Logga in som en sådan för att se pågående resultat.';
$string['teachertimerwarning'] = 'Tidtagning fungerar bara för studenter. Logga in som en sådan för att testa tidtagning.';
$string['thatsthecorrectanswer'] = 'Det är rätt svar';
$string['thatsthewronganswer'] = 'Det är fel svar';
$string['thefollowingpagesjumptothispage'] = 'De följande sidorna hoppar till den här sidan';
$string['thispage'] = 'Den här sidan';
$string['timeisup'] = 'Tiden är slut';
$string['timelimit'] = 'Tidsbegränsning';
$string['timeremaining'] = 'Återstående tid';
$string['timespenterror'] = 'Lägg ner åtminstone {$a} minuter på den här lektionen';
$string['timespentminutes'] = 'Använd tid (minuter)';
$string['timetaken'] = 'Tidsåtgång';
$string['totalpagesviewedheader'] = 'Antal visade sidor';
$string['true'] = 'Sant';
$string['truefalse'] = 'Sant/Falskt';
$string['unabledtosavefile'] = 'Det gick inte att spara den fil som Du laddade upp';
$string['unknownqtypesnotimported'] = '{$a} frågor av frågetyper som inte stödjs importerades inte';
$string['unseenpageinbranch'] = 'Ej visad fråga inom en innehållssida';
$string['unsupportedqtype'] = 'Frågetyp ({$a} som inte stödjs!';
$string['updatedpage'] = 'Uppdaterad sida';
$string['updatefailed'] = 'Uppdateringen misslyckades';
$string['updatepagenamed'] = 'Uppdatera sida: {$a}';
$string['usemaximum'] = 'Använd maximum';
$string['usemean'] = 'Använd medel';
$string['usepassword'] = 'Lektion som kräver lösenord';
$string['usepassword_help'] = '<p>Det här innebär att studenterna/eleverna/deltagarna/de lärande inte kommer att kunna göra lektionen om de inte skriver in lösenordet.</p>';
$string['useroverrides'] = 'Användaråsidosättanden';
$string['useroverridesdeleted'] = 'Användaråsidosättanden borttagna';
$string['usersnone'] = 'Inga studenter har tillgång till denna lektion';
$string['viewessayanswers'] = 'Visa uppsatssvar';
$string['viewgrades'] = 'Visa betyg';
$string['viewreports'] = 'Visa {$a->attempts} slutförda {$a->student} försök';
$string['viewreports2'] = 'Visa {$a} slutförda försök';
$string['warning'] = 'Varning';
$string['welldone'] = 'Bra gjort!';
$string['whatdofirst'] = 'Vad vill Du börja med?';
$string['withselectedattempts'] = 'Med valda försök...';
$string['wronganswerjump'] = 'Hopp vid felsvar';
$string['wronganswerscore'] = 'Resultat vid felsvar';
$string['wrongresponse'] = 'Felsvar';
$string['xattempts'] = '{$a} försök';
$string['youhaveseen'] = 'Du har redan påbörjat den här lektionen.<br />Vill du fortsätta där du slutade?';
$string['youranswer'] = 'Ditt svar';
$string['yourcurrentgradeis'] = 'Ditt nuvarande betyg är {$a}';
$string['yourcurrentgradeisoutof'] = 'Ditt nuvarande betyg är {$a->grade} av {$a->total}';
$string['youshouldview'] = 'Du måste svara på minst: {$a}';
