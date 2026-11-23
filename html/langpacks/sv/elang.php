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
 * Strings for component 'elang', language 'sv', version '4.5'.
 *
 * @package     elang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedlanguages'] = 'Tillåtna innehållsspråk';
$string['allowedlanguages_desc'] = 'De innehållsspråk som erbjuds när en videodiktamen skapas eller redigeras. Välj inget för att erbjuda hela språklistan. En aktivitet behåller sitt sparade språk även om du senare tar bort det här.';
$string['allowtranscriptdownload'] = 'Nedladdning av transkription för deltagare';
$string['allowtranscriptdownload_help'] = 'När detta är påslaget kan deltagare ladda ned transkriptionens arbetsblad, med varje lucka dold, som PDF, Word, OpenDocument eller text.

Det är avstängt som standard. Lärare kan alltid ladda ned transkriptionen, oavsett den här inställningen.';
$string['allowtranscriptdownload_label'] = 'Deltagare får ladda ned arbetsbladet';
$string['completiondetail_completionfinishattempt'] = 'Slutföra ett försök';
$string['completionfinishattempt'] = 'Deltagaren måste slutföra ett försök';
$string['cuepausemode'] = 'Paus vid undertextgränser';
$string['cuepausemode_auto'] = 'Automatiskt';
$string['cuepausemode_help'] = 'Om mediet stannar i slutet av en undertext.

* Automatiskt — uppspelningen fortsätter och stannar i slutet av en undertext endast så länge den undertexten bearbetas, alltså efter ett klick på den eller på en av dess luckor, eller när tangentbordsfokus står i någon av dem.
* Stanna vid varje obesvarad undertext — uppspelningen stannar i slutet av varje undertext som fortfarande har en tom lucka och väntar på att återupptas.
* Stanna aldrig — uppspelningen fortsätter till mediets slut.

Ingen av de två första stannar vid en undertext vars luckor alla är ifyllda: det är färdigt arbete, och att stanna där skulle kräva en tangenttryckning utan verkan. Det betyder också att en andra genomgång av en övning bara stannar där något fortfarande saknas.';
$string['cuepausemode_nostop'] = 'Stanna aldrig';
$string['cuepausemode_stop'] = 'Stanna vid varje obesvarad undertext';
$string['editcontent'] = 'Redigera innehåll';
$string['editor_addcue'] = 'Lägg till segment';
$string['editor_addgap'] = 'Skapa lucka från markeringen';
$string['editor_addhint'] = 'Lägg till ledtråd';
$string['editor_addvariant'] = 'Lägg till variant';
$string['editor_advanced'] = 'Avancerade inställningar';
$string['editor_algoexact'] = 'Exakt matchning';
$string['editor_algorithm'] = 'Matchning';
$string['editor_algowordrecognized'] = 'Godta närliggande svar';
$string['editor_answers'] = 'Godtagna varianter';
$string['editor_autosaved'] = 'Alla ändringar är sparade.';
$string['editor_autosaveerror'] = 'Automatisk sparning misslyckades — använd Spara för att försöka igen.';
$string['editor_captureend'] = 'Sätt slut från uppspelningen';
$string['editor_capturestart'] = 'Sätt start från uppspelningen';
$string['editor_cueactions'] = 'Segmentåtgärder';
$string['editor_cuecount'] = 'Segment: {$a}';
$string['editor_currentmedia'] = 'Nuvarande medium:';
$string['editor_deletecue'] = 'Ta bort segment';
$string['editor_deletegap'] = 'Ta bort lucka';
$string['editor_emptytranscript'] = '(ingen text ännu)';
$string['editor_endtime'] = 'Sluttid';
$string['editor_formatsubrip'] = 'SubRip (.srt)';
$string['editor_formatwebvtt'] = 'WebVTT (.vtt)';
$string['editor_gapcount'] = 'Luckor: {$a}';
$string['editor_gaprange'] = 'Luckans position (tecken)';
$string['editor_gotomedia'] = 'Gå till Media';
$string['editor_heading'] = 'Innehållsredigerare för övningen';
$string['editor_hints'] = 'Ledtrådar';
$string['editor_hinttext'] = 'Ledtrådstext';
$string['editor_hinttype'] = 'Typ';
$string['editor_hinttype_firstletter'] = 'Första bokstaven';
$string['editor_hinttype_partial'] = 'Delvis';
$string['editor_hinttype_solution'] = 'Lösning';
$string['editor_hinttype_text'] = 'Fri text';
$string['editor_hinttype_translation'] = 'Översättning';
$string['editor_hinttype_wordlength'] = 'Ordlängd';
$string['editor_import'] = 'Importera undertexter';
$string['editor_importappend'] = 'Lägg till i befintliga segment';
$string['editor_importapply'] = 'Importera';
$string['editor_importcancel'] = 'Avbryt';
$string['editor_importcheck'] = 'Kontrollera innehållet';
$string['editor_importchecking'] = 'Kontrollerar…';
$string['editor_importcuecount'] = 'Hittade segment';
$string['editor_importduration'] = 'Längd';
$string['editor_importedcues'] = 'Importerade segment: {$a}';
$string['editor_importfilehint'] = 'Välj en WebVTT-fil (.vtt) eller SubRip-fil (.srt) med undertexter.';
$string['editor_importformat'] = 'Format';
$string['editor_importfromfile'] = 'Ladda upp fil';
$string['editor_importfromtext'] = 'Klistra in text';
$string['editor_importgapcount'] = 'Hittade luckor';
$string['editor_importhint'] = 'Klistra in WebVTT- eller SubRip-innehåll och importera det som segment.';
$string['editor_importparseerror'] = 'Innehållet kunde inte läsas som WebVTT eller SubRip.';
$string['editor_importpastedtext'] = 'Inklistrad text';
$string['editor_importreaderror'] = 'Filen kunde inte läsas.';
$string['editor_importready'] = 'Klart att importera';
$string['editor_importreplace'] = 'Ersätt alla segment';
$string['editor_importreplacedcues'] = 'Segmenten ersattes; nyimporterade: {$a}';
$string['editor_importsource'] = 'Källa';
$string['editor_importsummary'] = 'Vad som hittades';
$string['editor_importtoolarge'] = 'Filen är {$a->size}; importen godtar högst {$a->max}.';
$string['editor_importwrongtype'] = 'Välj en undertextfil ({$a}).';
$string['editor_insertafter'] = 'Infoga segment efter';
$string['editor_insertbefore'] = 'Infoga segment före';
$string['editor_invalidtime'] = 'Ange en tid som mm:ss.SSS, till exempel 01:05.400.';
$string['editor_linkurl'] = 'Referenslänk';
$string['editor_linkurl_help'] = 'Visas bredvid luckan som ett ställe att slå upp ordet. Lämna tomt för ingen länk.';
$string['editor_loaderror'] = 'Redigeraren kunde inte laddas. Ladda om sidan.';
$string['editor_loading'] = 'Laddar redigeraren…';
$string['editor_maxlength'] = 'Största längd';
$string['editor_maxlength_help'] = 'Begränsar hur mycket en deltagare kan skriva. 0 betyder ingen gräns.';
$string['editor_media'] = 'Media';
$string['editor_mediafile'] = 'Uppladdad fil';
$string['editor_mediakind'] = 'Medietyp';
$string['editor_medianone'] = 'Ingen';
$string['editor_mediaprovider'] = 'Leverantör';
$string['editor_mediaproviderref'] = 'Leverantörsreferens';
$string['editor_mediaproviderrefhint'] = 'Video-ID eller länk i någon vanlig form (t.ex. youtu.be/…).';
$string['editor_mediasaved'] = 'Mediet sparades.';
$string['editor_mediaurl'] = 'Direktadress';
$string['editor_nocues'] = 'Inga segment ännu. Lägg till ett eller importera undertexter.';
$string['editor_nocueselected'] = 'Välj ett segment i listan för att redigera det.';
$string['editor_nocuesmatch'] = 'Inget segment matchar den här sökningen.';
$string['editor_nogaps'] = 'Inga luckor';
$string['editor_nomedia'] = 'inget';
$string['editor_nomedianotice'] = 'Lägg först till video- eller ljudfilen under fliken Media. Undertexterna tidsätts mot mediet, så redigeraren behöver ett innan du kan arbeta med segment och luckor.';
$string['editor_novideotrack'] = 'Den här webbläsaren kan inte avkoda mediets videospår (endast ljudet spelas); deltagarna skulle se en svart bild. Koda om filen som H.264/MP4 (till exempel med ffmpeg eller HandBrake) och ladda upp den igen.';
$string['editor_onboardinggaps'] = 'Markera ett ord i ett segment och gör det till en lucka.';
$string['editor_onboardingimport'] = 'Importera WebVTT- eller SubRip-undertexter, eller lägg till segment för hand.';
$string['editor_onboardingintro'] = 'Bygg en övning i tre steg:';
$string['editor_onboardingmedia'] = 'Välj ett medium (uppladdning, adress eller leverantör).';
$string['editor_onboardingtitle'] = 'Börja din övning';
$string['editor_onlywarnings'] = 'Endast segment med varningar';
$string['editor_parsegaps'] = 'Känn igen luckmarkörer: [ord] skapar en lucka med ledtrådar tillåtna, {ord} en utan.';
$string['editor_penalty'] = 'Avdrag';
$string['editor_poster'] = 'Affischbild';
$string['editor_preview'] = 'Förhandsgranskning för deltagare';
$string['editor_publish'] = 'Publicera';
$string['editor_published'] = 'Versionen publicerades.';
$string['editor_removehint'] = 'Ta bort ledtråd';
$string['editor_removevariant'] = 'Ta bort';
$string['editor_ruleapplied'] = '%count% luckor skapades från regeln.';
$string['editor_ruleapply'] = 'Tillämpa %count% luckor';
$string['editor_ruleerror'] = 'Luckorna kunde inte skapas.';
$string['editor_ruleeverynth'] = 'Vart n:te ord';
$string['editor_rulefound'] = 'Regeln hittade %count% luckor.';
$string['editor_rulegenerate'] = 'Skapa luckor';
$string['editor_ruleinterval'] = 'Intervall (n)';
$string['editor_ruletype'] = 'Luckregel';
$string['editor_rulewordlist'] = 'Ord att dölja';
$string['editor_rulewords'] = 'Ordlista';
$string['editor_save'] = 'Spara utkast';
$string['editor_saved'] = 'Utkastet sparades.';
$string['editor_saveerror'] = 'Utkastet kunde inte sparas.';
$string['editor_savemedia'] = 'Spara medium';
$string['editor_saving'] = 'Sparar…';
$string['editor_searchcues'] = 'Sök segment';
$string['editor_selecttext'] = 'Markera först ordet som ska döljas i transkriptionen.';
$string['editor_solution'] = 'Lösning';
$string['editor_starttime'] = 'Starttid';
$string['editor_transcript'] = 'Transkription';
$string['editor_unsaved'] = 'Osparade ändringar';
$string['editor_uploadmedia'] = 'Ladda upp mediefiler';
$string['editor_variantisregex'] = 'Behandla {$a} som ett reguljärt uttryck';
$string['editor_variantmatching'] = 'Hur de godtagna varianterna jämförs';
$string['editor_warnemptysolution'] = 'En lucka saknar lösning';
$string['editor_warnnotranscript'] = 'Ingen text';
$string['editor_warntiming'] = 'Slutet ligger inte efter starten';
$string['editor_waveform'] = 'Ljudvågform';
$string['elang:addinstance'] = 'Lägga till en ny videodiktamen';
$string['elang:attempt'] = 'Genomföra en videodiktamen';
$string['elang:deleteattempts'] = 'Ta bort deltagarnas försök';
$string['elang:exportreports'] = 'Exportera rapporter med personuppgifter';
$string['elang:exportsolution'] = 'Exportera den fullständiga lösningstranskriptionen';
$string['elang:exporttranscript'] = 'Exportera arbetsbladet som dokument';
$string['elang:manage'] = 'Skapa och redigera övningsinnehåll';
$string['elang:useregex'] = 'Använda reguljära uttryck i godtagna svar';
$string['elang:view'] = 'Visa en videodiktamen';
$string['elang:viewreports'] = 'Visa deltagarrapporter';
$string['error_attemptnotinprogress'] = 'Det här försöket pågår inte längre.';
$string['error_couldnotobtainlock'] = 'Kunde inte få något lås för den här åtgärden. Försök igen.';
$string['error_draftrevisionmismatch'] = 'Utkastet har ändrats sedan du laddade det. Ladda om och försök igen.';
$string['error_duplicatecuekey'] = 'Två segment delar nyckeln ”{$a}”; varje segment behöver en unik nyckel.';
$string['error_duplicategapkey'] = 'Två luckor i samma segment delar nyckeln ”{$a}”; varje lucka behöver en unik nyckel.';
$string['error_duplicatehintlevel'] = 'En lucka har två ledtrådar på nivå {$a}; varje nivå måste vara unik.';
$string['error_gapnotinattemptversion'] = 'Den här luckan hör inte till övningsversionen för det här försöket.';
$string['error_importnocues'] = 'Inga undertexter kunde läsas ur innehållet. En WebVTT- eller SubRip-fil har en tidsrad som 00:00:01.000 --> 00:00:04.000 ovanför varje undertext.';
$string['error_importnotutf8'] = 'Filen är inte giltig UTF-8. Den sparades troligen i en äldre teckenkodning — öppna den i en textredigerare och spara om den som UTF-8.';
$string['error_importtoolarge'] = 'Filen är {$a->size}; importen godtar högst {$a->max}. En undertextfil för en lektionsinspelning är mycket mindre, så detta är sannolikt inte en sådan.';
$string['error_importtoomanycues'] = 'Filen innehåller {$a->count} undertexter; importen godtar högst {$a->max}.';
$string['error_invalidcuepausemode'] = 'Välj ett av de erbjudna alternativen för paus vid undertextgränser.';
$string['error_invalidgradingalgorithm'] = 'Bedömningsalgoritmen ”{$a}” är varken exact eller wordrecognized.';
$string['error_invalidhinttype'] = 'Ledtrådstypen ”{$a}” är inte en av de tillåtna typerna.';
$string['error_invalidisregex'] = 'En variants regex-markering måste vara 0 eller 1.';
$string['error_invalidmediakind'] = 'Den valda medietypen är varken file, url eller provider.';
$string['error_invalidpenalty'] = 'Ett ledtrådsavdrag måste ligga mellan 0 och 1.';
$string['error_invalidproviderref'] = '”{$a}” är inte ett igenkänt video-ID eller en igenkänd länk för den här leverantören.';
$string['error_invalidregexpattern'] = '”{$a}” är inte ett giltigt reguljärt uttryck.';
$string['error_invalidsolutionavailability'] = 'Välj ett av de erbjudna alternativen för när deltagare får se lösningstranskriptionen.';
$string['error_invalidsourceurl'] = 'Ange en fullständig adress som börjar med http:// eller https://, eller en YouTube- eller Vimeo-länk.';
$string['error_invalidsubtitleposition'] = 'Välj ett av de erbjudna alternativen för var undertexterna visas.';
$string['error_invalidv1cuejson'] = 'Det här segmentet från version 1 kunde inte tolkas.';
$string['error_negativegapoffset'] = 'En luckas position och längd får inte vara negativa.';
$string['error_noaccesstoattempt'] = 'Du har inte åtkomst till det här försöket.';
$string['error_nomorehints'] = 'Inga fler ledtrådar finns för den här luckan.';
$string['error_nopublishedversion'] = 'Den här övningen har ännu inget publicerat innehåll.';
$string['error_responsetoolong'] = 'Ditt svar är för långt. Högsta antal tecken för den här luckan är {$a}.';
$string['error_solutionnotavailable'] = 'Lösningstranskriptionen är inte tillgänglig för dig i den här aktiviteten.';
$string['error_staleattemptstate'] = 'Din vy av det här försöket är inaktuell. Ladda om aktuellt läge och försök igen.';
$string['error_transcriptnotavailable'] = 'Det finns ingen transkription att ladda ned i den här aktiviteten.';
$string['error_unknowngaprule'] = 'Okänd typ av luckregel ”{$a}”.';
$string['error_unknownmediaprovider'] = '”{$a}” är inte en av de medieleverantörer som stöds.';
$string['error_versionnotadraft'] = 'Endast en version som är utkast kan redigeras.';
$string['error_versionnotfound'] = 'Den här övningsversionen finns inte längre.';
$string['error_versionnotpublishable'] = 'Den här versionen kan inte publiceras: {$a}';
$string['export_audienceaftersubmission'] = 'Deltagare kan ladda ned detta när de har slutfört ett försök';
$string['export_audiencealways'] = 'Deltagare kan ladda ned detta när som helst';
$string['export_audiencestaff'] = 'Endast undervisande personal med behörighet — erbjuds inte deltagare';
$string['export_docx'] = 'Ladda ned som Word (DOCX)';
$string['export_downloadpdf'] = 'Ladda ned PDF';
$string['export_heading'] = 'Exportera transkription';
$string['export_intro'] = 'Ladda ned den här övningens transkription i flera format.';
$string['export_moreformats'] = 'Fler format';
$string['export_nocontent'] = 'Det finns ännu ingen publicerad transkription att exportera.';
$string['export_odt'] = 'Ladda ned som OpenDocument (ODT)';
$string['export_pdf'] = 'Ladda ned som PDF';
$string['export_solution'] = 'Lösningstranskription';
$string['export_solutionhint'] = 'Den fullständiga texten med varje luckas lösning synlig.';
$string['export_text'] = 'Ladda ned som text';
$string['export_versionnote'] = 'Exporterna utgår från den för närvarande publicerade versionen av övningen.';
$string['export_worksheet'] = 'Arbetsblad (luckor dolda)';
$string['export_worksheethint'] = 'Texten med varje lucka dold. Färdig att dela ut som deltagarmaterial.';
$string['exporttranscript'] = 'Exportera transkription';
$string['filearea_media'] = 'Media';
$string['filearea_poster'] = 'Affischbild';
$string['gradingheading'] = 'Bedömning av svar';
$string['import_badtiming'] = 'Tidsraden kunde inte läsas: {$a}';
$string['import_emptytranscript'] = 'Ett segment utan text hoppades över.';
$string['import_warnlinetoolong'] = 'Block {$a->block} hoppades över: det innehåller en rad längre än {$a->max} tecken, vilket inte är en undertextrad.';
$string['jarothreshold'] = 'Likhetströskel';
$string['jarothreshold_help'] = 'För luckor som är inställda på ”Godta närliggande svar” är detta den minsta Jaro-likheten mellan det förväntade svaret och det som skrivs in. Värdet 1 kräver en exakt träff efter den språkspecifika normaliseringen; lägre värden godtar allt mer avvikande stavningar.';
$string['jarothresholdrange'] = 'Tröskeln måste ligga mellan 0 och 1.';
$string['language'] = 'Innehållsspråk';
$string['language_help'] = 'Välj språket för övningens innehåll. Det styr hur svar jämförs, bland annat skiftläge och translitterering. Välj ”Allmänt (ej angivet)” om ingen språkspecifik hantering ska användas. Nya innehållsversioner utgår från den här inställningen.';
$string['language_none'] = 'Allmänt (ej angivet)';
$string['media_cuenote'] = 'Befintliga undertexter och luckor behålls när du byter medium. Deras tider justeras inte, så kontrollera dem i redigeraren efteråt.';
$string['media_current'] = 'Nuvarande medium';
$string['media_heading'] = 'Media';
$string['media_intro'] = 'Välj videon eller ljudet som övningen bygger på. Undertexterna tidsätts mot det, så detta kommer först.';
$string['media_none'] = 'Inget medium har angetts för den här övningen ännu.';
$string['media_othersource'] = 'Annan källa';
$string['media_providerhint'] = 'Igenkända leverantörer: {$a}. Varje annan adress används som direkt medieadress.';
$string['media_sourceurl'] = 'Källadress';
$string['media_sourceurl_help'] = 'Klistra in adressen till en video i stället för att ladda upp en fil — en YouTube- eller Vimeo-länk, eller en direkt adress till en mediefil.

En adress som anges här ersätter en uppladdad fil. Lämna den tom för att använda uppladdningen ovan.

En leverantörsvideo spelas i leverantörens egen ram, som inte rapporterar sin uppspelningstid. En sådan övning visar alltid undertexterna under mediet och stannar aldrig vid undertextgränser.

**Vart uppgifterna går.** En YouTube- eller Vimeo-ram ansluter varje deltagares webbläsare till det företaget, som då får deltagarens IP-adress och enhetsuppgifter. Som standard frågar övningen innan den gör det. Om din institution driver en egen mediaserver — Opencast, Panopto, Kaltura eller liknande — klistra då in filens direkta adress därifrån i stället: den behandlas som en vanlig medieadress, behåller undertextpositionen och pausinställningen du valt, och ingen tredje part är inblandad.';
$string['migratev1_approvalheading'] = 'Migrerade, väntar på granskning';
$string['migratev1_approvebutton'] = 'Godkänn den här migreringen';
$string['migratev1_approved'] = 'Videodiktamen {$a} har markerats som godkänd.';
$string['migratev1_colactivity'] = 'Aktivitet';
$string['migratev1_colalgorithm'] = 'Bedömningsalgoritm';
$string['migratev1_colcues'] = 'Segment';
$string['migratev1_colgaps'] = 'Luckor';
$string['migratev1_colissues'] = 'Problem';
$string['migratev1_collearners'] = 'Deltagare';
$string['migratev1_confirmdecommission'] = 'Detta tar OÅTERKALLELIGT bort version 1:s äldre tabeller och elang.options. Det går inte att ångra. Fortsätta?';
$string['migratev1_confirmmigrate'] = 'Detta köar en bakgrundsuppgift som skriver nya version 2-data för varje aktivitet ovan. Version 1:s tabeller och elang.options lämnas orörda. Fortsätta?';
$string['migratev1_decommissionblocked'] = 'Borttagningen är fortfarande blockerad; se listan nedan.';
$string['migratev1_decommissionblockedintro'] = 'Borttagningen är blockerad tills:';
$string['migratev1_decommissionbutton'] = 'Ta bort äldre data från version 1';
$string['migratev1_decommissioned'] = 'Äldre data från version 1 har tagits bort.';
$string['migratev1_decommissionheading'] = 'Avveckla data från version 1';
$string['migratev1_decommissionready'] = 'Varje aktivitet från version 1 har migrerats och godkänts. Version 1:s äldre tabeller och elang.options kan nu tas bort. Detta går inte att ångra.';
$string['migratev1_heading'] = 'Migrera aktiviteter från version 1';
$string['migratev1_migratebutton'] = 'Migrera dessa aktiviteter';
$string['migratev1_noissues'] = 'Inga';
$string['migratev1_nonepending'] = 'Inga aktiviteter från version 1 väntar på migrering.';
$string['migratev1_nonependingapproval'] = 'Inga migrerade aktiviteter väntar på granskning.';
$string['migratev1_notablespresent'] = 'Inga äldre tabeller från version 1 hittades på den här webbplatsen. Det finns inget att migrera.';
$string['migratev1_parseerrorcount'] = 'Segment som inte kunde tolkas: {$a}';
$string['migratev1_pendingheading'] = 'Ännu inte migrerade';
$string['migratev1_queued'] = 'Migreringsuppgiften har köats. Den körs vid nästa cron-körning, eller direkt via admin/cli/adhoc_task.php --execute.';
$string['migratev1_verifiedclean'] = 'Verifierat: de migrerade uppgifterna stämmer med källan från version 1 utan avvikelser.';
$string['migratev1_verifieddiscrepancies'] = 'Verifieringen hittade avvikelser mot källan från version 1: {$a}';
$string['migratev1_verifyfailed'] = 'Kunde inte verifiera den här aktiviteten: {$a}';
$string['modulename'] = 'Videodiktamen';
$string['modulename_help'] = 'Aktiviteten videodiktamen låter deltagare fylla i luckor i tidskodade undertexter medan de tittar på eller lyssnar till en video.

Lärare importerar en WebVTT- eller SubRip-undertextfil, markerar ord eller fraser som luckor och ställer in hur strikt svaren jämförs. Deltagarna arbetar sig genom transkriptionen segment för segment, begär bedömda ledtrådar och får omedelbar återkoppling.';
$string['modulenameplural'] = 'Videodiktamen';
$string['nav_exportshort'] = 'Export';
$string['nav_media'] = 'Media';
$string['nav_reports'] = 'Försök';
$string['nav_subtitles'] = 'Undertexter och luckor';
$string['noinstances'] = 'Det finns inga videodiktamen i den här kursen.';
$string['overview_attempts'] = 'Försök';
$string['playbackheading'] = 'Uppspelning och undertexter';
$string['playbackoverlayhint'] = 'En undertext över bilden visar bara den undertext som spelas just då, så uppspelningen pausar alltid i slutet av en undertext som fortfarande har luckor kvar att fylla i. Det finns inget att välja här.';
$string['playbackproviderhint'] = 'En YouTube- eller Vimeo-video spelas av leverantören i dennes egen ram, som inte rapporterar sin uppspelningstid. En sådan övning visar alltid undertexterna under mediet och stannar aldrig vid undertextgränser, oavsett vad som väljs ovan. Uppladdade filer och direkta medieadresser följer båda inställningarna.';
$string['player_check'] = 'Kontrollera svaret';
$string['player_consentaccept'] = 'Ladda videon från {$a}';
$string['player_consentdetail'] = 'Att spela upp den ansluter din webbläsare till {$a}. {$a} får din IP-adress och uppgifter om din enhet, och kan läsa kakor som redan satts. Ingenting skickas förrän du väljer att ladda videon.';
$string['player_consentheading'] = 'Den här videon tillhandahålls av {$a}';
$string['player_finish'] = 'Slutför försöket';
$string['player_finished'] = 'Försöket är slutfört. Poäng: %score%%';
$string['player_finishincomplete'] = 'Luckor som fortfarande är tomma: {$a}. Slutföra försöket ändå?';
$string['player_gaplabel'] = 'Lucka %gap%';
$string['player_gaplink'] = 'Öppna länken';
$string['player_hint'] = 'Visa en ledtråd';
$string['player_loaderror'] = 'Övningen kunde inte laddas. Ladda om sidan.';
$string['player_loading'] = 'Laddar övningen…';
$string['player_nocontent'] = 'Inget övningsinnehåll har publicerats ännu. Återkom senare.';
$string['player_novideotrack'] = 'Din webbläsare kan inte visa mediets videospår; ljudet spelas ändå. Meddela din lärare.';
$string['player_outdatedattempt'] = 'Den här övningen har uppdaterats sedan du påbörjade försöket. Du fortsätter på det tidigare innehållet; slutför försöket för att nästa gång arbeta med den uppdaterade övningen.';
$string['player_progress'] = '{$a->done} av {$a->total} luckor besvarade';
$string['player_ready'] = 'Övningen är klar.';
$string['player_scorelabel'] = 'Poäng: %score%%';
$string['player_stateaccepted'] = 'Godtaget';
$string['player_statecorrect'] = 'Rätt';
$string['player_statehinted'] = 'Ledtråd använd';
$string['player_stateincorrect'] = 'Fel';
$string['player_submitfailed'] = 'Ditt svar kunde inte sparas. Försök igen.';
$string['player_transcriptheading'] = 'Transkription';
$string['pluginadministration'] = 'Administration av videodiktamen';
$string['pluginname'] = 'Videodiktamen';
$string['privacy_metadata_elang'] = 'För varje aktivitet, noteringen om vem som godkände den enkelriktade migreringen av dess 1.x-innehåll.';
$string['privacy_metadata_elang_attempt'] = 'För varje försök i en övning lagrar aktiviteten vem som gjorde det, när, hur långt det kom och hur det bedömdes.';
$string['privacy_metadata_elang_attempt_answeredgaps'] = 'Hur många luckor deltagaren har besvarat i det här försöket.';
$string['privacy_metadata_elang_attempt_attemptnumber'] = 'Löpnumret för det här försöket för användaren och aktiviteten.';
$string['privacy_metadata_elang_attempt_correctgaps'] = 'Hur många luckor som godtogs som rätt i det här försöket.';
$string['privacy_metadata_elang_attempt_exactgaps'] = 'Hur många luckor som besvarades med exakt teckenmatchning i det här försöket.';
$string['privacy_metadata_elang_attempt_hintedgaps'] = 'För hur många luckor deltagaren begärde en ledtråd i det här försöket.';
$string['privacy_metadata_elang_attempt_score'] = 'Poängen som uppnåddes i det här försöket.';
$string['privacy_metadata_elang_attempt_state'] = 'Om försöket pågår, är slutfört eller övergivet.';
$string['privacy_metadata_elang_attempt_timefinish'] = 'Tidpunkten då försöket slutfördes.';
$string['privacy_metadata_elang_attempt_timemodified'] = 'Tidpunkten då försöket senast uppdaterades.';
$string['privacy_metadata_elang_attempt_timestart'] = 'Tidpunkten då försöket påbörjades.';
$string['privacy_metadata_elang_attempt_totalgaps'] = 'Det totala antalet luckor i övningsversionen som det här försöket gäller.';
$string['privacy_metadata_elang_attempt_userid'] = 'Id för användaren som gjorde försöket.';
$string['privacy_metadata_elang_attempt_versionid'] = 'Övningsversionen som det här försöket gjordes mot.';
$string['privacy_metadata_elang_migrationapproveduserid'] = 'Användaren som godkände migreringen av den här aktiviteten från mod_elang 1.x. Lagras så att godkännandet förblir spårbart.';
$string['privacy_metadata_elang_response'] = 'För varje lucka en deltagare besvarar inom ett försök lagrar aktiviteten svarstexten och hur den bedömdes.';
$string['privacy_metadata_elang_response_accepted'] = 'Om svaret godtogs som rätt för den här luckan.';
$string['privacy_metadata_elang_response_hintlevel'] = 'Den högsta ledtrådsnivå som visades för deltagaren för den här luckan.';
$string['privacy_metadata_elang_response_responsetext'] = 'Texten deltagaren skrev för den här luckan.';
$string['privacy_metadata_elang_response_resultstate'] = 'Den klassificering bedömaren gav svaret (exakt, igenkänt ord, fel eller tomt).';
$string['privacy_metadata_elang_response_score'] = 'Poängen som det här svaret bidrog med, efter eventuellt ledtrådsavdrag.';
$string['privacy_metadata_elang_response_timecreated'] = 'Tidpunkten då svaret skickades in första gången.';
$string['privacy_metadata_elang_response_timemodified'] = 'Tidpunkten då svaret senast uppdaterades.';
$string['privacy_metadata_elang_response_tries'] = 'Hur många gånger deltagaren skickade in ett svar för den här luckan.';
$string['privacy_metadata_elang_version'] = 'För varje innehållsversion lagrar aktiviteten vilken användare som senast ändrade den.';
$string['privacy_metadata_elang_version_usermodified'] = 'Användaren som senast ändrade den här innehållsversionen. Lagras för att kunna spåra vem som redigerade övningsinnehållet.';
$string['privacy_provider_externallink'] = 'När en övning bygger på en YouTube- eller Vimeo-video ansluter öppnandet deltagarens webbläsare till den leverantören. Tillägget skickar ingenting självt, men anslutningen orsakas av aktiviteten. Om den sker alls beror på webbplatsens inställning för leverantörssamtycke och på att deltagaren samtycker.';
$string['privacy_provider_ipaddress'] = 'IP-adressen som deltagarens webbläsare ansluter från.';
$string['privacy_provider_useragent'] = 'Uppgifterna om webbläsare och enhet som webbläsaren skickar.';
$string['provider_vimeo'] = 'Vimeo';
$string['provider_youtube'] = 'YouTube';
$string['providerconsent'] = 'Fråga innan YouTube eller Vimeo bäddas in';
$string['providerconsent_desc'] = 'Övningar som bygger på en YouTube- eller Vimeo-video visar ett meddelande i stället för videon och bäddar in den först efter att deltagaren samtyckt. Utan detta får leverantören deltagarens IP-adress och webbläsaruppgifter så snart sidan öppnas — innan någon trycker på spela. Stäng bara av det om din institution inhämtar detta samtycke på annat sätt.';
$string['report_actions'] = 'Åtgärder';
$string['report_answered'] = 'Besvarade';
$string['report_attemptnumber'] = 'Försök';
$string['report_back'] = 'Tillbaka till alla försök';
$string['report_correct'] = 'Rätt';
$string['report_delete'] = 'Ta bort';
$string['report_deleteconfirm'] = 'Ta bort det här försöket och alla dess svar permanent? Detta går inte att ångra.';
$string['report_deleted'] = 'Försöket togs bort.';
$string['report_exact'] = 'Exakt';
$string['report_export'] = 'Exportera';
$string['report_filterany'] = 'Alla';
$string['report_filterapply'] = 'Tillämpa filter';
$string['report_filterattempt'] = 'Försöksnummer';
$string['report_filterfrom'] = 'Påbörjat från';
$string['report_filterrangeerror'] = 'Periodens slut ligger före dess början.';
$string['report_filterreset'] = 'Rensa filter';
$string['report_filterstate'] = 'Status';
$string['report_filterto'] = 'Påbörjat till och med';
$string['report_filteruser'] = 'Person';
$string['report_finished'] = 'Slutförda';
$string['report_heading'] = 'Försök';
$string['report_hinted'] = 'Med ledtråd';
$string['report_hints'] = 'Ledtrådsnivå';
$string['report_kpianswered'] = 'Besvarade';
$string['report_kpiattempts'] = 'Visade försök';
$string['report_kpiaverage'] = 'Genomsnittlig poäng (slutförda)';
$string['report_kpicorrect'] = 'Godtagna';
$string['report_kpiexact'] = 'Helt rätt';
$string['report_kpifinished'] = 'Slutförda';
$string['report_kpihinted'] = 'Använde en ledtråd';
$string['report_kpihintedgaps'] = 'Behövde en ledtråd';
$string['report_noattempts'] = 'Inga försök ännu.';
$string['report_nogaps'] = 'Versionen som det här försöket gjordes på har inga luckor.';
$string['report_nomatchingattempts'] = 'Inget försök matchar de här filtren.';
$string['report_noresponse'] = 'Ej besvarad';
$string['report_response'] = 'Svar';
$string['report_result'] = 'Resultat';
$string['report_result_empty'] = 'Tomt';
$string['report_result_exact'] = 'Exakt';
$string['report_result_incorrect'] = 'Fel';
$string['report_result_none'] = '—';
$string['report_result_wordrecognized'] = 'Igenkänt';
$string['report_score'] = 'Poäng';
$string['report_solution'] = 'Lösning';
$string['report_started'] = 'Påbörjat';
$string['report_state'] = 'Status';
$string['report_state_abandoned'] = 'Övergivet';
$string['report_state_finished'] = 'Slutfört';
$string['report_state_inprogress'] = 'Pågår';
$string['report_transcript'] = 'Transkription';
$string['report_tries'] = 'Försök';
$string['report_user'] = 'Person';
$string['report_view'] = 'Visa';
$string['reports'] = 'Rapporter';
$string['resetattempts'] = 'Ta bort alla deltagares försök och svar';
$string['solutionavailability'] = 'Lösningstranskription för deltagare';
$string['solutionavailability_aftersubmission'] = 'Efter att försöket är slutfört';
$string['solutionavailability_always'] = 'När som helst';
$string['solutionavailability_help'] = 'När deltagare får ladda ned den fullständiga transkriptionen med varje luckas lösning synlig.

* Aldrig — endast lärare kan ladda ned den.
* Efter att försöket är slutfört — en deltagare får ladda ned den när hen har slutfört ett försök i den här aktiviteten.
* När som helst — en deltagare får ladda ned den även innan hen svarar.

Lärare kan alltid ladda ned den, oavsett den här inställningen.';
$string['solutionavailability_never'] = 'Aldrig';
$string['subplugintype_elangscript'] = 'Skrifthanterare';
$string['subplugintype_elangscript_plural'] = 'Skrifthanterare';
$string['subtitleposition'] = 'Visning av undertexter';
$string['subtitleposition_below'] = 'Under mediet';
$string['subtitleposition_help'] = 'Var de interaktiva undertexterna visas.

* Under mediet — hela transkriptionen ligger under mediet i ett eget rullningsområde och följer uppspelningen.
* På mediet, nederst eller överst — endast den undertext som spelas just då ritas över mediet.

Ett medium med enbart ljud har ingen bild att rita på och använder därför alltid visningen under mediet. Själva inställningen behålls och gäller igen så snart aktiviteten använder en video.';
$string['subtitleposition_overlaybottom'] = 'På mediet — nederst';
$string['subtitleposition_overlaytop'] = 'På mediet — överst';
$string['task_migratev1activities'] = 'Migrera aktiviteter från version 1';
$string['transcriptheading'] = 'Transkription för deltagare';
$string['validate_cueafterend'] = '{$a->where}: slutar vid {$a->endtime} ms, efter mediet ({$a->duration} ms). Uppspelningen kan aldrig nå dit.';
$string['validate_cueendbeforestart'] = '{$a}: slutet ligger inte efter starten.';
$string['validate_cuewhere'] = 'Segment {$a->sortorder} ({$a->cuekey})';
$string['validate_emptysolution'] = 'Lösningen för {$a} är tom.';
$string['validate_hintlevels'] = 'Ledtrådsnivåerna för {$a} bildar ingen sammanhängande följd som börjar på 1.';
$string['validate_negativetime'] = '{$a}: starttiden ligger före inspelningens början.';
$string['validate_nocues'] = 'Versionen har inga segment.';
$string['validate_nogaps'] = 'Versionen har inga luckor att besvara.';
$string['validate_nonpositivelength'] = 'Teckenlängden för {$a} måste vara positiv.';
$string['validate_rangeoutside'] = 'Teckenintervallet för {$a} ligger utanför dess transkription.';
$string['validate_rangeoverlap'] = 'Teckenintervallet för {$a} överlappar en annan lucka.';
$string['validate_unknownalgorithm'] = 'Bedömningsalgoritmen ”{$a->algorithm}” för {$a->where} känns inte igen.';
$string['validate_where'] = 'lucka {$a->gapkey} i segment {$a->cuekey}';
$string['verify_algorithmmismatch'] = 'Lucka {$a->gapkey}: bedömningsalgoritmen är ”{$a->actual}”, ”{$a->expected}” förväntades.';
$string['verify_attemptcount'] = 'Antalet migrerade försök är {$a->actual}, {$a->expected} skilda deltagare från 1.x förväntades.';
$string['verify_jarothreshold'] = 'Tröskeln för svarsjämförelse är {$a->actual}, {$a->expected} förväntades.';
$string['verify_missingattempt'] = 'Användare {$a}: ett migrerat försök förväntades, inget hittades.';
$string['verify_missingcue'] = 'Segment {$a}: det migrerade segmentet saknas.';
$string['verify_missinggap'] = 'Lucka {$a}: den migrerade luckan saknas.';
$string['verify_missinghint'] = 'Lucka {$a}: version 1 tillät hjälp här, men ingen ledtråd migrerades.';
$string['verify_orphancue'] = 'Segment {$a}: inget motsvarande segment från version 1 hittades.';
$string['verify_orphangap'] = 'Lucka {$a}: ingen motsvarande lucka från version 1 hittades.';
$string['verify_rangemismatch'] = 'Lucka {$a}: teckenintervallet stämmer inte med källan från version 1.';
$string['verify_responsecount'] = 'Användare {$a->userid}: antalet migrerade svar är {$a->actual}, {$a->expected} förväntades.';
$string['verify_solutionmismatch'] = 'Lucka {$a->gapkey}: lösningen är ”{$a->actual}”, ”{$a->expected}” förväntades.';
$string['verify_transcriptmismatch'] = 'Segment {$a}: transkriptionen stämmer inte med källan från version 1.';
$string['verify_unexpectedhint'] = 'Lucka {$a}: version 1 tillät inte hjälp här, men en ledtråd migrerades.';
