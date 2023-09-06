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
 * Strings for component 'question', language 'sv', version '4.1'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Åtgärd';
$string['addanotherhint'] = 'Lägg till ytterligare en ledtråd';
$string['addcategory'] = 'Lägg till kategori';
$string['addmorechoiceblanks'] = 'Lägg {no} fält för val';
$string['adminreport'] = 'Rapport över  möjliga problem i Din frågedatabas.';
$string['advancedsearchoptions'] = 'Sökalternativ';
$string['alltries'] = 'Alla försök';
$string['answer'] = 'Svar';
$string['answers'] = 'Svar';
$string['answersaved'] = 'Svar sparat';
$string['attemptfinished'] = 'Avslutat försök';
$string['attemptfinishedsubmitting'] = 'Försöket avslutades med inlämning: {$a}';
$string['attemptoptions'] = 'Försöksalternativ';
$string['availableq'] = 'Tillgänglig?';
$string['badbase'] = 'Dålig grund före **:{$a}**';
$string['behaviour'] = 'Beteende';
$string['behaviourbeingused'] = 'Beteende som används: {$a}';
$string['broken'] = 'Det här är en \'bruten\' länk, den pekar på en fil som inte finns.';
$string['byandon'] = 'av <em>{$a->user}</em> på <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Det gick inte att kopiera säkerhetskopian';
$string['cannotcreate'] = 'Kunde inte skapa ny post i tabellen question_attempts';
$string['cannotcreatepath'] = 'Det gick inte att skapa vägen: {$a}';
$string['cannotdeletebehaviourinuse'] = 'Du kan inte ta bort beteende "{$a}". Det används  i frågeförsök.';
$string['cannotdeletecate'] = 'Du kan inte ta bort den här kategorin eftersom det är standardkategorin i det här sammanhanget.';
$string['cannotdeleteneededbehaviour'] = 'Det går inte att ta bort frågebeteendet \'{$a}\'. Det finns andra installerade frågebeteenden som är beroende av det.';
$string['cannotdeleteqtypeinuse'] = 'Du kan inte radera frågetypen \'{$a}\'. Det finns frågor i frågebanken som använder den.';
$string['cannotdeleteqtypeneeded'] = 'Du kan inte radera frågetypen \'{$a}\'. Det finns andra installerade frågetyper som beror av den.';
$string['cannotdeletetopcat'] = 'Kategorier i den översta nivån kan inte tas bort.';
$string['cannotedittopcat'] = 'Kategorier i den översta nivån kan inte redigeras.';
$string['cannotenable'] = ' Det går inte att skapa frågetypen {$a} direkt.';
$string['cannotenablebehaviour'] = 'Frågebeteende {$a} kan inte användas direkt. Det är endast för internt bruk.';
$string['cannotfindcate'] = 'Det gick inte att hitta posten för kategori';
$string['cannotfindquestionfile'] = 'Det gick inte att hitta datafilen för frågor i zip-filen';
$string['cannotgetdsfordependent'] = 'Det gick inte att hitta den angivna datamängden för en fråga som är beroende av en datamängd! (question: {$a->id}, datasetitem: {$a->item})';
$string['cannotgetdsforquestion'] = 'Det gick inte att hitta den angivna datamängden för en kalkylerad fråga! (question: {$a})';
$string['cannothidequestion'] = 'Kunde inte dölja fråga';
$string['cannotimportformat'] = 'Import av det här formatet är tyvärr inte implementerat ännu!';
$string['cannotinsertquestion'] = 'Det gick inte att infoga ny fråga!';
$string['cannotinsertquestioncatecontext'] = 'Det gick inte att infoga den nya kategorin {$a->cat} i frågekategorierna eftersom den har ett ogiltigt \'contextid\' {$a->ctx}';
$string['cannotloadquestion'] = 'Kunde inte ladda fråga';
$string['cannotmovequestion'] = 'Du kan inte använda det här skriptet för att flytta frågor som är associerade till filer från olika andra områden. ';
$string['cannotopenforwriting'] = 'Det går inte att öppna för skrivning: {$a}';
$string['cannotpreview'] = 'Du kan inte förhandsgranska de här frågorna!';
$string['cannotread'] = 'Det går inte att läsa den importerade filen ({$a}) eller så är den tom';
$string['cannotregradedifferentqtype'] = 'Kan inte justera betyg med en fråga av en annan typ.';
$string['cannotretrieveqcat'] = 'Kunde inte hämta frågekategori';
$string['cannotunhidequestion'] = 'Det gick inte att ta fram frågan.';
$string['cannotunzip'] = 'Det gick inte att packa upp filen';
$string['cannotwriteto'] = 'Kan inte skriva exporterade frågor till {$a}';
$string['categories'] = 'Kategorier';
$string['category'] = 'Kategori';
$string['categorycurrent'] = 'Nuvarande kategori';
$string['categorycurrentuse'] = 'Använd den här kategorin';
$string['categorydoesnotexist'] = 'Den här kategorin finns inte.';
$string['categoryinfo'] = 'Information om kategori';
$string['categorymove'] = 'Kategorin {$a->name} innehåller {$a->count} frågor (varav vissa kan vara dolda frågor eller slumpmässiga frågor som fortfarande används i ett frågeformulär). Vänligen välj en annan kategori att flytta dem till.';
$string['categorymoveto'] = 'Spara i kategori';
$string['categorynamecantbeblank'] = 'Kategorinamnet får inte vara tomt.';
$string['categorynamewithcount'] = '{$a->name} ({$a->questioncount})';
$string['categorynamewithidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['categorynamewithidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->questioncount})';
$string['changeoptions'] = 'Ändra alternativ';
$string['changepublishstatuscat'] = '<a href="{$a->caturl}">Kategorin "{$a->name}"</a> i kursen "{$a->coursename}" kommer att få sin delningsstatus ändrad från <strong>{$a->changefrom} till {$a->changeto}</strong>.';
$string['check'] = 'Kontrollera';
$string['chooseqtypetoadd'] = 'Välj en frågetyp att lägga till';
$string['clearwrongparts'] = 'Rensa felaktiga svar';
$string['clickflag'] = 'Flagga fråga';
$string['clicktoflag'] = 'Flagga denna fråga för framtida referens';
$string['clicktounflag'] = 'Ta bort flagga';
$string['clickunflag'] = 'Ta bort flagga';
$string['closepreview'] = 'Stäng förhandsgranskning';
$string['combinedfeedback'] = 'Kombinerad återkoppling';
$string['comment'] = 'Kommentar';
$string['commented'] = 'Kommenterade: {$a}';
$string['commentormark'] = 'Kommentera eller åsidosätt betyg';
$string['comments'] = 'Kommentarer';
$string['commentx'] = 'Kommentar: {$a}';
$string['complete'] = 'Slutför';
$string['contexterror'] = 'Du borde inte ha hamnat här om Du inte håller på att flytta en kategori från ett annat sammanhang';
$string['copy'] = 'Kopiera från {$a} och ändra länkar';
$string['correct'] = 'Rätt';
$string['correctfeedback'] = 'För varje rätt svar';
$string['correctfeedbackdefault'] = 'Ditt svar är rätt.';
$string['created'] = 'Skapad';
$string['createdby'] = 'Skapad av';
$string['createdmodifiedheader'] = 'Skapad / Senast sparad';
$string['createnewquestion'] = 'Skapa en ny fråga...';
$string['cwrqpfs'] = 'Slumpmässiga frågor som väljer frågor ur underkategorier.';
$string['cwrqpfsinfo'] = '<p>I samband med uppgraderingen till Moodle 1.9 kommer vi att fördela frågekategorier på olika sammanhang. En del frågekategorier och frågor på din webbplats kommer att få sin status angående vad som är gemensamt ändrad. Detta är nödvändigt i det sällsynta fall där en eller fler slumpmässiga frågor i ett test har ställts in från en blandning av gemensamma och separata kategorier, så som är fallet på den här webbplatsen. Detta inträffar när en slumpmässig fråga är inställd till att välja ur underkategorier och en eller flera underkategorier har en annan status angående gemenskap än den föräldrakategori i vilken den slumpmässiga frågan har skapats.</p><p>De följande frågekategorierna, som slumpmässiga frågor i föräldrakategorier väljer frågor ur kommer i samband med uppgradering till Moodle 1.9 att få sin status ändrad till samma gemensamma status som kategorin med  den slumpmässiga frågan i. De följande kategorierna kommer att få sin status som gemensamma ändrad. De frågor som påverkas kommer att fortsätta att  fungera i alla befintliga test ända tills du tar bort dem från dessa test.</p>';
$string['cwrqpfsnoprob'] = 'Inga frågekategorier på din webbplats påverkas av funktionen \'Slumpmässiga frågor som väljer frågor ur underkategorier\'.';
$string['decimalplacesingrades'] = 'Antal decimaler i betyg';
$string['defaultfor'] = 'Standard för {$a}';
$string['defaultinfofor'] = 'Förinställd kategori för frågor som är gemensamma i sammanhanget \'{$a}\'.';
$string['defaultmark'] = 'Förvald maxpoäng';
$string['defaultmarkmustbepositive'] = 'Det förvalda betyget måste vara positivt';
$string['deletecoursecategorywithquestions'] = 'Det finns frågor i frågebanken i associerade med denna kurs kategori. Om du fortsätter kommer de att raderas. Du kanske vill flytta dem först, med hjälp av gränssnittet i frågebanken.';
$string['deletequestioncheck'] = 'Är du helt säker på att du vill ta bort \'{$a}\'?';
$string['deletequestionscheck'] = 'Är du helt säker på att du vill ta bort följande frågor?<br /><br />{$a}';
$string['deletingbehaviour'] = 'Raderar frågebeteende \'{$a}\'';
$string['deletingqtype'] = 'Tar bort frågetypen \'{$a}\'';
$string['didnotmatchanyanswer'] = '[Matchade inte något svar]';
$string['disabled'] = 'Inaktiverad';
$string['displayoptions'] = 'Visa alternativ';
$string['disterror'] = 'Distributionen {$a} förorsakade problem';
$string['donothing'] = 'Kopiera inte eller flytta filer eller ändra länkar.';
$string['editcategories'] = 'Redigera kategorier';
$string['editcategories_help'] = 'Istället för att ha allt i en lång lista kan frågor arrangeras i kategorier och underkategorier.

Varje kategori har ett sammanhang som avgör var frågan i kategorin kan användas:

* Aktivitetssammanhang - Frågan är endast tillgänglig i aktivitetsmodulen
* Kurssammanhang - Frågan är tillgänglig i alla aktivitetsmoduler i kursen
* Kurskategorisammanhang - Frågan är tillgänglig i alla aktivitetsmoduler och kurser i kurskategorin
* System sammanhang - Frågan är tillgänglig i alla kurser och aktiviteter på webbplatsen

Kategorier används även för slumpvisa frågor då frågor väljs från en speciell kategori.';
$string['editcategories_link'] = 'question/category';
$string['editcategory'] = 'Redigera kategori';
$string['editingcategory'] = 'Redigerar en kategori';
$string['editingquestion'] = 'Redigerar en fråga';
$string['editquestion'] = 'Redigera fråga';
$string['editquestions'] = 'Redigera frågor';
$string['editthiscategory'] = 'Redigera den här kategorin';
$string['emptyxml'] = 'Okänt fel - tom imsmanifest.xml';
$string['enabled'] = 'Aktiverad';
$string['erroraccessingcontext'] = 'Det går inte att få tillgång till sammanhanget';
$string['errordeletingquestionsfromcategory'] = 'Fel vid borttagande av frågor från kategori {$a}.';
$string['errorduringpost'] = 'Fel inträffade under efterbearbetning!';
$string['errorduringpre'] = 'Fel inträffade under förbearbetningen!';
$string['errorduringproc'] = 'Ett fel uppstod under bearbetning!';
$string['errorduringregrade'] = 'Det gick inte att betygsätta frågan {$a->qid} på nytt - på väg till läge {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Fel: Det går inte att kopiera filen {$a}.';
$string['errorfilecannotbemoved'] = 'Fel: Det går inte att flytta filen {$a}.';
$string['errorfileschanged'] = 'Fel: De filer som har länkats till frågor har ändrats sedan formuläret visades.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'Frågan ({$a}) visas mer än en gång med olika vikter på olika platser i testet. Detta stöds för närvarande inte av statistikrapporten och kan göra statistiken för denna fråga otillförlitlig.';
$string['errormanualgradeoutofrange'] = 'Betyget {$a->grade} ligger inte mellan 0 och {$a->maxgrade} för fråga {$a->name}. Resultat och kommentar har inte sparats.';
$string['errormovingquestions'] = 'Ett fel inträffaded då frågorna med följande ID:n flyttades: {$a}.';
$string['errorpostprocess'] = 'Ett fel inträffade under efterbearbetning!';
$string['errorpreprocess'] = 'Ett fel inträffade under förbearbetningen!';
$string['errorprocess'] = 'Ett fel inträffade under bearbetningen!';
$string['errorprocessingresponses'] = 'Ett fel inträffade när dina svar bearbetades ({$a}). Klicka på fortsätt för att återvända till den sida du var på och försök igen.';
$string['errorsavingcomment'] = 'Ett fel inträffade när kommentar till frågan {$a->name} skulle sparas i databasen.';
$string['errorsavingflags'] = 'Ett fel inträffade vid sparande av flaggningsstatus.';
$string['errorupdatingattempt'] = 'Ett fel inträffade vid uppdatering av försök {$a->id} i databasen.';
$string['eventquestioncategorycreated'] = 'Frågekategori skapad';
$string['eventquestioncategorydeleted'] = 'Frågekategori borttagen';
$string['eventquestioncategorymoved'] = 'Frågekategori flyttad';
$string['eventquestioncategoryupdated'] = 'Frågekategori uppdaterad';
$string['eventquestioncategoryviewed'] = 'Frågekategori visad';
$string['eventquestioncreated'] = 'Fråga skapad';
$string['eventquestiondeleted'] = 'Fråga borttagen';
$string['eventquestionmoved'] = 'Fråga flyttad';
$string['eventquestionsexported'] = 'Frågor exporterade';
$string['eventquestionsimported'] = 'Frågor importerade';
$string['eventquestionupdated'] = 'Fråga uppdaterad';
$string['eventquestionviewed'] = 'Fråga visad';
$string['export'] = 'Exportera';
$string['exportasxml'] = 'Exportera som Moodle XML';
$string['exportcategory'] = 'Kategori för export';
$string['exportcategory_help'] = 'Den här inställningen bestämmer vilken kategori de exporterade frågorna ska tas från.

Vissa importformat, som GIFT och Moodle XML, tillåter att kategori- och kontextdata tas med i exportfilen, vilket gör det möjligt för dem att (valfritt) återskapas vid import. Om så krävs bör lämpliga kryssrutor markeras.';
$string['exporterror'] = 'Ett fel inträffade vid exporten!';
$string['exportfilename'] = 'frågor';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = 'Ladda ner denna fråga i Moodle XML-format';
$string['exportquestions'] = 'Exportera frågor till fil';
$string['exportquestions_help'] = 'Med den här funktionen kan du exportera en fullständig kategori (och eventuella underkategorier) till fil. Observera att vissa frågedata och vissa frågetyper kanske inte exporteras beroende på vilket filformat som valts.';
$string['exportquestions_link'] = 'question/export';
$string['feedback'] = 'Återkoppling';
$string['filecantmovefrom'] = 'Frågefilerna kan inte flyttas eftersom du inte har behörighet att ta bort filer från den plats du försöker flytta dem från.';
$string['filecantmoveto'] = 'Frågefilerna kan inte flyttas eller kopieras eftersom du inte har behörighet att lägga till filer på den plats du försöker flytta till.';
$string['fileformat'] = 'Filformat';
$string['filesareacourse'] = 'arkiv för kursfiler';
$string['filesareasite'] = 'arkiv för filer på webbplatsnivå';
$string['filestomove'] = 'Flytta/kopiera filer till {$a}?';
$string['fillincorrect'] = 'Fyll i rätt svar';
$string['filterbytags'] = 'Filtrera på etiketter...';
$string['firsttry'] = 'Första försöket';
$string['flagged'] = 'Flaggad';
$string['flagthisquestion'] = 'Flagga denna fråga';
$string['formquestionnotinids'] = 'Formuläret innehåll en fråga som saknar frågeID';
$string['fractionsnomax'] = 'Ett av svaren bör ha ett resultat på 100% så att det blir möjligt att få full poäng på den här frågan.';
$string['generalfeedback'] = 'Allmän återkoppling';
$string['generalfeedback_help'] = 'Generell återkoppling visas för eleven efter att denne har svarat på frågan. Till skillnad från specifik återkoppling, som beror på frågetyp och vilket svar eleven gav, visas samma generella återkoppling för alla elever.

Du kan använda generell återkoppling för att ge elever ett bearbetat svar och eventuellt en länk till mer information som de kan använda om de inte förstod frågorna.';
$string['getcategoryfromfile'] = 'Hämta kategori från fil';
$string['getcontextfromfile'] = 'Hämta sammanhang från fil';
$string['hintn'] = 'Ledtråd {no}';
$string['hintnoptions'] = 'Alternativ för ledtråd {no}';
$string['hinttext'] = 'Ledtrådstext';
$string['howquestionsbehave'] = 'Hur frågor beter sig';
$string['howquestionsbehave_help'] = 'Eleverna kan interagera med frågorna i testet på olika sätt. Du vill kanske vill att eleverna anger ett svar på varje fråga och sedan skickar in hela testet innan något blir betygsatt, eller innan de får återkoppling. I detta fall skulle inställningen vara "Fördröjd återkoppling".

Alternativt kan du vilja att studenter skickar in varje fråga efterhand för att få omedelbar återkoppling om de inte svarar rätt. De kan sedan försöka igen, dock med ett poängavdrag. I detta fall skulle inställningen vara "Interaktivt med flera försök".

Detta är förmodligen de två vanligaste inställningarna.';
$string['howquestionsbehave_link'] = 'question/behaviour';
$string['idnumber'] = 'ID-nummer';
$string['idnumber_help'] = 'Om ID-nummer används måste ID-numret vara unikt inom varje frågekategori. Det möjliggör ett annat sätt att identifiera en fråga som ibland är användbar, men kan oftast lämnas tomt.';
$string['ignorebroken'] = 'Ta inte hänsyn till brutna länkar';
$string['import'] = 'Importera';
$string['importcategory'] = 'Importera kategori';
$string['importcategory_help'] = 'Denna inställning avgör vilken kategori den importerade frågan kommer att tillhöra.

Vissa imporformat, såsom GIFT och Moodle XML, kan innehålla kategori och sammanhangsdata i den importerade filen. För att kunna använda denna data, istället för den valda kategorin, bör lämpliga inställningar väljas med kryssrutorna. Om de kategorier som anges i den importerade filen inte finns på webbplatsen kommer de att skapas.';
$string['importerror'] = 'Ett fel uppstod under importprocessen';
$string['importerrorquestion'] = 'Ett fel uppstod vid frågeimport';
$string['importfromcoursefiles'] = '...eller välj en kursfil att importera.';
$string['importfromupload'] = 'Välj fil att ladda upp ...';
$string['importingquestions'] = 'Importerar {$a} frågor från fil';
$string['importparseerror'] = 'Fel uppstod vid analys av importfilen. Inga frågor har importerats. Om du vill prova att importera de eventuella frågor i filen som är i rätt format, ändra inställningen "Stoppa vid fel" till "Nej".';
$string['importquestions'] = 'Importera frågor från fil';
$string['importquestions_help'] = 'Denna funktion möjliggör att frågor i en mängd olika format kan importeras från textfil. Notera att filen måste använda teckenkodning UTF-8.';
$string['importquestions_link'] = 'question/import';
$string['importwrongfileencoding'] = 'Den valda filen är inte kodad enligt UFT-8 teckenkodningen. {$a} filer måste använda UFT-8.';
$string['importwrongfiletype'] = 'Den typ av fil som du valde ({$a->actualtype}) motsvarar inte den typ som förväntas av detta importformat ({$a->expectedtype}).';
$string['impossiblechar'] = 'Ogiltligt tecken {$a} identifierades som parentestecken';
$string['includesubcategories'] = 'Visa även frågor från underkategorier';
$string['incorrect'] = 'Felaktigt';
$string['incorrectfeedback'] = 'För varje felaktigt svar';
$string['incorrectfeedbackdefault'] = 'Ditt svar är felaktigt.';
$string['information'] = 'Information';
$string['invalidanswer'] = 'Ofullständigt svar';
$string['invalidarg'] = 'Inga giltiga argument tillhandahållna eller felaktig serverkonfiguration';
$string['invalidcategoryidforparent'] = 'Ogiltigt kategori id för överliggande kategori.';
$string['invalidcategoryidtomove'] = 'Ogiltigt kategori-ID för flytt!';
$string['invalidconfirm'] = 'Bekräftelsesträngen var felaktig';
$string['invalidcontextinhasanyquestions'] = 'Ogiltig sammanhang skickas till question_context_has_any_questions.';
$string['invalidgrade'] = 'Betyg ({$a}) matchar inte betygsalternativen - frågan hoppas över.';
$string['invalidpenalty'] = 'Ogiltig straff';
$string['invalidwizardpage'] = 'Felaktig eller ingen guidesida angiven!';
$string['lastmodifiedby'] = 'Senast ändrad av';
$string['lasttry'] = 'Sista försöket';
$string['linkedfiledoesntexist'] = 'Den länkade filen {$a} finns inte.';
$string['makechildof'] = 'Gör \'{$a}\' till underliggande';
$string['makecopy'] = 'Skapa kopia';
$string['maketoplevelitem'] = 'Flytta till översta positionen';
$string['manualgradeinvalidformat'] = 'Det är inte ett giltigt nummer.';
$string['manualgradeoutofrange'] = 'Detta betyg är utanför det giltiga området.';
$string['manuallygraded'] = 'Manuellt betygsatt {$a->mark} med kommentar: {$a->comment}';
$string['mark'] = 'Poängsatt';
$string['markedoutof'] = 'Poängsatt till';
$string['markedoutofmax'] = 'Poängsatt till {$a}';
$string['markoutofmax'] = 'Poäng: {$a->mark} av {$a->max}';
$string['marks'] = 'Poäng';
$string['matchgrades'] = 'Matcha betyg';
$string['matchgrades_help'] = 'Importerade betyg måste överensstämma med någon av de fasta listorna över giltiga betyg - 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0 (även negativa värden). Om inte så finns det två möjligheter:

* Fel om betyg inte finns i listan - Om en fråga innehåller betyg som inte finns i listan visas ett felmeddelande och frågan importeras inte
* Närmaste betyg om inte i lista - Om ett betyg som inte finns i listan hittas ändras betyget till det närmsta värdet i listan.';
$string['matchgradeserror'] = 'Fel om betyg inte listas';
$string['matchgradesnearest'] = 'Närmaste betyg om det inte listats';
$string['missingcourseorcmid'] = 'Måste ange courseid eller cmid till print_question.';
$string['missingcourseorcmidtolink'] = 'Måste ange courseid eller cmid till get_question_edit_link.';
$string['missingimportantcode'] = 'Den här frågan saknar viktig kod: {$a}';
$string['missingoption'] = 'Den stängda frågan {$a} saknar svarsalternativ.';
$string['modified'] = 'Senast sparad';
$string['move'] = 'Flytta från {$a} och byt länkar';
$string['movecategory'] = 'Flytta kategori';
$string['movedquestionsandcategories'] = 'Flyttade frågor och kategorier fråga från {$a->oldplace} till {$a->newplace}.';
$string['movelinksonly'] = 'Ändra bara länkadresserna, flytta inte och kopiera inte filerna.';
$string['moveq'] = 'Flytta fråga/or';
$string['moveqtoanothercontext'] = 'Flytta fråga till ett annat sammanhang';
$string['moveto'] = 'Flytta till';
$string['movingcategory'] = 'Flyttar kategori';
$string['movingcategoryandfiles'] = 'Är Du säker på att Du vill flytta kategorin {$a->name} och alla barn-kategorier till sammanhanget för "{$a->contextto}"?<br />Vi har upptäckt {$a->urlcount} filer som är länkade från frågor i {$a->fromareaname}, skulle Du vilja kopiera eller flytta dessa till {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Är Du säker på att du vill flytta kategorin "{$a->name}" och alla underkategorier till kontextet för "{$a->contextto}"?';
$string['movingquestions'] = 'Flyttar frågor och eventuella filer';
$string['movingquestionsandfiles'] = 'Är du säker på att du vill flytta frågorna {$a->questions} till sammanhanget <strong>"{$a->tocontext}"</strong>? Vi har upptäckt <strong>{$a->urlcount} filer</strong> som är länkade från dessa frågor i {$a->fromareaname}. Skulle du vilja kopiera eller flytta dessa till {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Är du säker på att du vill flytta frågorna {$a->questions} till sammanhanget <strong>"{$a->tocontext}"</strong>?<br />Det finns  <strong>inga filer</strong> som är länkade från dessa frågor i {$a->fromareaname}.';
$string['needtochoosecat'] = 'Du måste välja en kategori för att flytta den här frågan eller klicka på \'Avbryt\'.';
$string['nocate'] = 'Ingen sådan kategori {$a}!';
$string['nopermissionadd'] = 'Du har inte behörighet att lägga till frågor här.';
$string['nopermissionedit'] = 'Du har inte behörighet att redigera frågor härifrån.';
$string['nopermissionmove'] = 'Du har inte behörighet att flytta frågor härifrån. Du måste spara frågan i denna kategori eller spara den som en ny fråga.';
$string['noprobs'] = 'Det fanns inga problem i Din databas för frågor.';
$string['noquestionbanks'] = 'Hittade ingen pluginmodul för frågebank.';
$string['noquestions'] = 'Inga frågor hittades som kunde exporteras. Se till att du har valt en kategori att exportera som innehåller frågor.';
$string['noquestionsinfile'] = 'Det finns inga frågor i importfilen';
$string['noresponse'] = '[Inget svar]';
$string['notagfiltersapplied'] = 'Inga etikettfilter tillämpade';
$string['notanswered'] = 'Ej besvarad';
$string['notchanged'] = 'Inte förändrats sedan senaste försök';
$string['notenoughanswers'] = 'Denna typ av fråga kräver minst {$a} svar';
$string['notenoughdatatoeditaquestion'] = 'Varken ett fråge-id, en kategori-id och frågetyp, har angivits.';
$string['notenoughdatatomovequestions'] = 'Du måste ange fråge-id för de frågor som Du vill flytta.';
$string['notflagged'] = 'Inte flaggad';
$string['notgraded'] = 'Inte rättad';
$string['notshown'] = 'Visas inte';
$string['notyetanswered'] = 'Inte besvarad än';
$string['notyourpreview'] = 'Den här förhandsvisningen tillhör inte dig.';
$string['novirtualquestiontype'] = 'Ingen virtuell frågetyp för frågetyp {$a}';
$string['numqas'] = 'Antal frågeförsök';
$string['numquestions'] = 'Antal frågor';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} dolda)';
$string['options'] = 'Alternativ';
$string['page-question-category'] = 'Frågekategori sida.';
$string['page-question-edit'] = 'Fråge redigeringssida';
$string['page-question-export'] = 'Fråge exportsida';
$string['page-question-import'] = 'Frågeimportsida';
$string['page-question-x'] = 'Vilken frågesida som helst';
$string['parent'] = 'Överliggande';
$string['parentcategory'] = 'Huvudkategori';
$string['parentcategory_help'] = 'Föräldrakategorin är den i vilken den nya kategorin placeras. "Överst" betyder att denna kategori inte ingår i/ under någon annan kategori. Sammanhang för kategori visas med fet text. Det måste finnas minst en kategori i varje sammanhang.';
$string['parentcategory_link'] = 'question/category';
$string['parenthesisinproperclose'] = 'Parentes innan ** är inte ordentligt stängd {$a} **';
$string['parenthesisinproperstart'] = 'Parentes innan ** är inte korrekt startade {$a} **';
$string['parsingquestions'] = 'Analysera frågor från importfilen';
$string['partiallycorrect'] = 'Delvis korrekt';
$string['partiallycorrectfeedback'] = 'För alla delvis korrekta svar';
$string['partiallycorrectfeedbackdefault'] = 'Ditt svar är delvis korrekt.';
$string['penaltyfactor'] = 'Avdragsfaktor';
$string['penaltyfactor_help'] = '<p>Du kan ange vilken del (fraktion) av det uppn&aring;dda resultatet som b&ouml;r dras av f&ouml;r varje felaktigt svar. Det h&auml;r &auml;r bara relevant om testet k&ouml;rs i adaptiv form s&aring; att studenten/eleven/deltagaren/den l&auml;rande har r&auml;tt att svara upprepade g&aring;nger p&aring; fr&aring;gan. Faktorn f&ouml;r avdrag b&ouml;r vara ett tal mellan 0 och 1. En faktor f&ouml;r avdrag p&aring; 1 betyder att studenten/eleven/deltagaren/den l&auml;rande m&aring;ste svara r&auml;tt p&aring; fr&aring;gan i sitt f&ouml;rsta svar f&ouml;r att &ouml;verhuvudtaget f&aring; tilgodor&auml;kna sig n&aring;gra po&auml;ng f&ouml;r fr&aring;gan. En faktor f&ouml;r avdrag p&aring; 0 betyder att studenten/eleven/deltagaren/den l&auml;rande kan f&ouml;rs&ouml;ka hur m&aring;nga g&aring;nger som helst och &auml;nd&aring; f&aring; h&ouml;gsta po&auml;ng.</p>';
$string['penaltyforeachincorrecttry'] = 'Straff för varje inkorrekt försök';
$string['penaltyforeachincorrecttry_help'] = 'När frågor använder beteendet "Interaktivt med flera försök" eller "Adaptivt läge", med vilka deltagaren erbjuds flera försök att besvara frågan, styr det här alternativet hur stort avdraget blir för varje felaktigt försök.

Avdraget är proportionell mot det totala frågebetyget. Om frågan är värd tre poäng, och straffet är 0,33333333, kommer studenten att få 3 om de svarar rätt första gången, 2 om de svarar rätt på andra försöket och 1 vid det tredje försöket.

För vissa uppdelade frågor tillämpas den här poänglogiken separat för varje del av frågan. Detaljerna beror på frågetypen och kan vara komplicerade, men principen är att ge studenterna beröm för de kunskaper de visat så rättvist som möjligt.';
$string['permissionedit'] = 'Redigera den här frågan';
$string['permissionmove'] = 'Flytta den här frågan';
$string['permissionsaveasnew'] = 'Spara det här som en ny fråga';
$string['permissionto'] = 'Du har behörighet att:';
$string['previewquestion'] = 'Förhandsgranska fråga: {$a}';
$string['privacy:metadata:database:question'] = 'Detaljinformation för en specifik fråga.';
$string['privacy:metadata:database:question:createdby'] = 'Personen som skapade frågan.';
$string['privacy:metadata:database:question:generalfeedback'] = 'Den generella återkoppling för denna fråga.';
$string['privacy:metadata:database:question:modifiedby'] = 'Den person som senast uppdaterade frågan.';
$string['privacy:metadata:database:question:name'] = 'Frågans namn.';
$string['privacy:metadata:database:question:questiontext'] = 'Frågetexten';
$string['privacy:metadata:database:question:timecreated'] = 'Datum och tid då denna fråga skapades.';
$string['privacy:metadata:database:question:timemodified'] = 'Datum och tid då denna fråga uppdaterades.';
$string['privacy:metadata:database:question_attempt_step_data'] = 'Frågeförsökssteg kan innehålla ytterligare data specifikt för steget. Denna data lagras i step_data-taberllen.';
$string['privacy:metadata:database:question_attempt_step_data:name'] = 'Namnet på dataobjektet.';
$string['privacy:metadata:database:question_attempt_step_data:value'] = 'Värdet hos dataobjektet.';
$string['privacy:metadata:database:question_attempt_steps'] = 'Varje frågeförsök innefattar ett antal steg som indikerar de olika faserna, från början till slutförande och vidare till bedömning. Denna tabell lagrar information om vart och ett av dessa steg.';
$string['privacy:metadata:database:question_attempt_steps:fraction'] = 'Poängen som tilldelades vid detta frågeförsök, omräknat till ett värde mellan 0 och 1.';
$string['privacy:metadata:database:question_attempt_steps:state'] = 'Tillståndet för detta frågeförsökssteg vid slutet av stegövergången.';
$string['privacy:metadata:database:question_attempt_steps:timecreated'] = 'Datum och tid då denna stegövergång började.';
$string['privacy:metadata:database:question_attempt_steps:userid'] = 'Användaren som utförde stegövergången.';
$string['privacy:metadata:database:question_attempts'] = 'Information om ett försök för en specifik fråga.';
$string['privacy:metadata:database:question_attempts:flagged'] = 'Indikation på att användaren flaggat denna fråga under ett försök.';
$string['privacy:metadata:database:question_attempts:responsesummary'] = 'Summering av frågesvaret.';
$string['privacy:metadata:database:question_attempts:timemodified'] = 'Tidpunkten då frågeförsöket uppdaterades.';
$string['privacy:metadata:database:question_bank_entries'] = 'Detaljer för specifik frågebankspost';
$string['privacy:metadata:database:question_bank_entries:ownerid'] = 'Personen som äger frågebanksposten';
$string['privacy:metadata:link:qbehaviour'] = 'Undersystemet Fråga använder sig av plugintypen Frågebeteende.';
$string['privacy:metadata:link:qformat'] = 'Undersystemet Fråga använder sig av plugintypen Frågebeteende för att importera och exportera frågor i olika format.';
$string['privacy:metadata:link:qtype'] = 'Undersystemet Fråga (Question) samverkar med plugintypen Frågetyp (Question Type) som innehåller de olika frågetyperna.';
$string['published'] = 'gemensam';
$string['qbanknotfound'] = 'Pluginmodulen {$a} för frågebank finns inte eller känns inte igen.';
$string['qtypeveryshort'] = 'T';
$string['question_version'] = 'Frågeversion';
$string['questionaffected'] = '<a href="{$a->qurl}">Frågan "{$a->name}" ({$a->qtype})</a> finns i den här frågekategorin men den används även i <a href="{$a->qurl}">test "{$a->quizname}"</a> i en annan kurs "{$a->coursename}".';
$string['questionbank'] = 'Frågebank';
$string['questionbanknavigation'] = 'Övergripande frågebanksnavigering';
$string['questionbehaviouradminsetting'] = 'Inställningar för frågebeteenden';
$string['questionbehavioursdisabled'] = 'Frågebeteenden att inaktivera';
$string['questionbehavioursdisabledexplained'] = 'Ange en kommaseparerad lista med frågebeteenden du inte vill ska visas i listrutan.';
$string['questionbehavioursorder'] = 'Ordning för frågebeteenden';
$string['questionbehavioursorderexplained'] = 'Ange en kommaseparerad lista med beteenden i den ordning du vill att de ska visas i listrutan.';
$string['questioncategories'] = 'Frågekategorier';
$string['questioncategory'] = 'Frågekategori';
$string['questioncatsfor'] = 'Frågekategorier för \'{$a}\'';
$string['questiondoesnotexist'] = 'Den här frågan finns inte';
$string['questionformtagheader'] = '{$a}-etiketter';
$string['questionidmismatch'] = 'Identiteten för frågan stämmer inte överrens';
$string['questionloaderror'] = 'Kunde inte hämta frågealternativen.';
$string['questionname'] = 'Frågenamn';
$string['questionnamecopy'] = '{$a} (kopia)';
$string['questionno'] = 'Fråga {$a}';
$string['questionpreviewdefaults'] = 'Standardinställningar för förhandsgranskning av frågor';
$string['questionpreviewdefaults_desc'] = 'Dessa förvalda värden används när en användare för första gången förhandsgranskar en fråga i frågebanken. När en användare har förhandsgranskat en fråga lagras deras personliga preferenser som användarinställningar.';
$string['questions'] = 'Frågor';
$string['questionsaveerror'] = 'Ett fel uppstod när frågan - ({$a}) sparades';
$string['questionsinuse'] = '(* Frågor markerade med en asterisk används redan i några kunskapstest. Dessa frågor kommer inte att tas bort från dessa tester utan bara i kategorilistan.)';
$string['questionsmovedto'] = 'Frågor som fortfarande används flyttades till "{$a}" i den överordnade kurskategorin.';
$string['questionsrescuedfrom'] = 'Frågor sparade från kontexten {$a}.';
$string['questionsrescuedfrominfo'] = 'Dessa frågor (av vilka några kan vara dolda) räddades när kontext {$a} ströks eftersom de fortfarande används av vissa tester eller andra aktiviteter.';
$string['questiontags'] = 'Frågeetiketter';
$string['questiontext'] = 'Frågetext';
$string['questiontype'] = 'Frågetyp';
$string['questionuse'] = 'Använd frågan i den här aktiviteten';
$string['questionvariant'] = 'Frågevariant';
$string['questionx'] = 'Fråga {$a}';
$string['requiresgrading'] = 'Kräver betygsättning';
$string['responsehistory'] = 'Svarshistorik';
$string['restart'] = 'Börja om';
$string['restartwiththeseoptions'] = 'Börja om med de här alternativen';
$string['restoremultipletopcats'] = 'Filen med säkerhetskopian innehåller mer än en frågekategori i den översta nivån i kontexten {$a}.';
$string['reviewresponse'] = 'Granska svar';
$string['rightanswer'] = 'Rätt svar';
$string['rightanswer_help'] = 'En automatiskt genererad sammanfattning av det korrekta svaret. Denna kan vara begränsad så du kanske bör överväga att förklara det korrekta svaret i den generella återkopplingen för frågan och stänga av detta val.';
$string['save'] = 'Spara';
$string['savechangesandcontinueediting'] = 'Spara ändringar och fortsätt redigera';
$string['saved'] = 'Sparad: {$a}';
$string['saveflags'] = 'Spara nuvarande tillstånd';
$string['selectacategory'] = 'Välj en kategori:';
$string['selectaqtypefordescription'] = 'Välj en frågetyp för att se dess beskrivning.';
$string['selectcategoryabove'] = 'Välj en kategori ovan';
$string['selectquestionsforbulk'] = 'Välj frågor för bulk åtgärder.';
$string['settingsformultipletries'] = 'Flera försök';
$string['shareincontext'] = 'Dela i sammanhanget för {$a}';
$string['showhidden'] = 'Visa även gamla frågor';
$string['showmarkandmax'] = 'Visa poäng och max';
$string['showmaxmarkonly'] = 'Visa endast maxpoäng';
$string['shown'] = 'Visas';
$string['shownumpartscorrect'] = 'Visa antalet korrekta svar';
$string['shownumpartscorrectwhenfinished'] = 'Visa antalet korrekta svar när frågan har slutförts';
$string['showquestiontext'] = 'Visa frågetext i frågelistan';
$string['specificfeedback'] = 'Specifik återkoppling';
$string['specificfeedback_help'] = 'Återkoppling som beror på vilket svar eleven gav.';
$string['started'] = 'Startad';
$string['state'] = 'Status';
$string['step'] = 'Steg';
$string['steps'] = 'Steg';
$string['stoponerror'] = 'Stanna vid fel';
$string['stoponerror_help'] = 'Denna inställning avgör om importprocessen ska stoppas när ett fel upptäcks, vilket resulterar i att inga frågor importeras, eller om frågor som innehåller fel ska ignoreras och övriga frågor importeras.';
$string['submissionoutofsequence'] = 'Sekvensfel. Vänligen klicka inte på bakåt/framåt knapparna i din webbläsare när du arbetar med testets frågor.';
$string['submissionoutofsequencefriendlymessage'] = 'Du har skickat uppgifter utanför den normala sekvensen. Detta kan inträffa om du använder tillbaka eller framåt-knapparna i webbläsaren, använd inte dessa under testet. Det kan också hända om du klickar på något medan en sida laddas. Klicka på <strong>Fortsätt</strong> för att återuppta.';
$string['submit'] = 'Skicka in';
$string['submitandfinish'] = 'Skicka in och avsluta';
$string['submitted'] = 'Skicka in: {$a}';
$string['tagarea_question'] = 'Frågor';
$string['technicalinfo'] = 'Teknisk information';
$string['technicalinfo_help'] = 'Denna tekniska information är troligen endast användbar för utvecklare av nya frågetyper. Det kan även vara till hjälp vid försök att hitta felaktigheter med frågor.';
$string['technicalinfomaxfraction'] = 'Maximal fraktion: {$a}';
$string['technicalinfominfraction'] = 'Minsta fraktion: {$a}';
$string['technicalinfoquestionsummary'] = 'Frågesammanfattning: {$a}';
$string['technicalinforesponsesummary'] = 'Summering av svar: {$a}';
$string['technicalinforightsummary'] = 'Rätt svar sammanfattning: {$a}';
$string['technicalinfostate'] = 'Tillstånd för fråga: {$a}';
$string['technicalinfovariant'] = 'Variant av fråga: {$a}';
$string['tofilecategory'] = 'Skriv kategori till fil';
$string['tofilecontext'] = 'Skriv sammanhang till fil';
$string['topfor'] = 'Överst för {$a}';
$string['uninstallbehaviour'] = 'Avinstallera detta frågebeteende.';
$string['uninstallqtype'] = 'Avinstallera frågetypen.';
$string['unknown'] = 'Okänd';
$string['unknownbehaviour'] = 'Okänd frågebeteende: {$a}.';
$string['unknownorunhandledtype'] = 'Okänd eller ohanterbar frågetyp: {$a}';
$string['unknownquestion'] = 'Okänd fråga: {$a}.';
$string['unknownquestioncatregory'] = 'Okänd frågekategori: {$a}.';
$string['unknownquestiontype'] = 'Okänd frågetyp: {$a}.';
$string['unknowntolerance'] = 'Okänd toleranstyp {$a}';
$string['unpublished'] = 'Inte gemensam';
$string['unusedcategorydeleted'] = 'Den här kategorin har tagits bort eftersom frågorna inte användes på servern längre efter det att kursen tagits bort.';
$string['updatedisplayoptions'] = 'Uppdatera visningsalternativ';
$string['upgradeproblemcategoryloop'] = 'Problem upptäcktes vid uppgradering av frågekategorier. Det finns en loop i kategoriträdet. Den berörda kategorins ID är {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Det gick inte att uppdatera {$a->name} frågekategori ({$a->id}).';
$string['upgradeproblemunknowncategory'] = 'Problem upptäcktes vid uppgradering av frågekategorier. Kategori {$a->id} avser den överliggande kategorin {$a->parent}, som inte existerar. Den överliggande kategorin ändrad för att åtgärda problemet.';
$string['version_selection'] = 'Version {$a->version}';
$string['whethercorrect'] = 'Huruvida korrekt';
$string['whethercorrect_help'] = 'Detta täcker både textbeskrivningen \'Korrekt\', \'Delvis korrekt\' eller \'Felaktig\' och alla färgade markeringar som förmedlar samma information.';
$string['whichtries'] = 'Vilket försök';
$string['withselected'] = 'Med valda';
$string['wrongprefix'] = 'Felaktigt formaterat namnprefix {$a}';
$string['xoutofmax'] = '{$a->mark} av {$a->max}';
$string['yougotnright'] = 'Du har korrekt valt {$a->num}.';
$string['youmustselectaqtype'] = 'Du måste välja en frågetyp.';
$string['yourfileshoulddownload'] = 'Din exportfil kommer att laddas ner inom kort. Om inte, <a href="{$a}">klicka här</a> .';
