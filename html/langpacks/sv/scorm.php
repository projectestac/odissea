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
 * Strings for component 'scorm', language 'sv', version '4.5'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Aktivering';
$string['activityloading'] = 'Du kommer automatiskt att bli skickas till aktiviteten i';
$string['activityoverview'] = 'Det finns SCORM-paket som kräver uppmärksamhet';
$string['activitypleasewait'] = 'Aktiviteten laddas, vänta...';
$string['adminsettings'] = 'Administratörsinställningar';
$string['advanced'] = 'Parametrar';
$string['aicchacpkeepsessiondata'] = 'AICC HACP sessionsdata';
$string['aicchacpkeepsessiondata_desc'] = 'Längd för tid i dagar att behålla den externa AICC HACP sessionens data (ett högt värde kommer fylla upp tabellen med gammal data men kan vara användbart vid felsökning)';
$string['aicchacptimeout'] = 'Tidsgräns för AICC HACP';
$string['aicchacptimeout_desc'] = 'Tid i minuter som en extern AICC HACP session kan förbli öppen';
$string['aiccuserid'] = 'Använd ID-nummer för AICC';
$string['aiccuserid_desc'] = 'AICC-standarden för användarnamn är mycket restriktiv jämfört med Moodle och tillåter endast alfanumeriska tecken samt streck och understreck. Punkter, blanksteg och @-symbolen är inte tillåtna. Om aktiverat skickas användarens ID-nummer till AICC-paketet i stället för användarnamnet.';
$string['aliasonly'] = 'När du väljer en imsmanifest.xml fil från en lagringsplats måste du använda ett alias/en genväg för den här filen.';
$string['allowapidebug'] = 'Aktivera debugging och spårning av API (ställ in capture-masken med apidebugmask)';
$string['allowtypeaicchacp'] = 'Aktivera extern AICC HACP';
$string['allowtypeaicchacp_desc'] = 'Om aktiverat tillåter detta extern AICC HACP kommunikation utan att kräva användarinloggning för postförfrågningar från det externa AICC paketet';
$string['allowtypeexternal'] = 'Aktivera extern pakettyp';
$string['allowtypeexternalaicc'] = 'Aktivera direkt AICC URL';
$string['allowtypeexternalaicc_desc'] = 'Om detta är aktiverat tillåts en direkt url till ett enkelt AICC paket';
$string['allowtypelocalsync'] = 'Aktivera nedladdad pakettyp';
$string['apidebugmask'] = ' "Fånga in"-maskare för API  - använd ett enkelt regex på <username>:<activityname> t ex admin:.* det kommer att debugga endast för admin användare';
$string['areacontent'] = 'Innehållsfiler';
$string['areapackage'] = 'Paketfil';
$string['asset'] = 'Resurs';
$string['assetlaunched'] = 'Resurs - visad';
$string['attempt'] = 'Försök';
$string['attempt1'] = '1 försök';
$string['attempts'] = 'Försök';
$string['attemptsmanagement'] = 'Hantera försök';
$string['attemptstatusall'] = 'Översikts- och startsidan';
$string['attemptstatusentry'] = 'Endast ingångssidan';
$string['attemptstatusmy'] = 'Endast översiktssidan';
$string['attemptsx'] = '{$a} försök';
$string['attr_error'] = 'Olämpligt värde för attributet ({$a->attr}) i taggen {$a->tag}.';
$string['autocommit'] = 'Auto-bekräfta';
$string['autocommit_help'] = 'Om det här alternativet är aktiverat sparas SCORM-data automatiskt i databasen. Användbart för SCORM-objekt som inte sparar sina data regelbundet.';
$string['autocommitdesc'] = 'Spara SCORM-data automatiskt om SCORM-paketet inte sparar den.';
$string['autocontinue'] = 'Fortsätt automatiskt';
$string['autocontinue_help'] = '<p><b>Forts&auml;tt automatiskt</b></p>

<p>Om "Forts&auml;tt automatiskt" &auml;r aktiverat (Ja) s&aring; kommer n&auml;sta tillg&auml;ngliga SCORM att automatiskt startas n&auml;r  den f&ouml;reg&aring;ende &auml;r slutf&ouml;rd.</p>

<p>Om detta inte &auml;r aktiverat (Nej) m&aring;ste anv&auml;ndaren sj&auml;lv anv&auml;nda knappen "Forts&auml;tt" f&ouml;r att g&aring; vidare. </p>';
$string['autocontinuedesc'] = 'Om det här alternativet är aktiverat startas efterföljande lärobjekt automatiskt. Om inte måste knappen <kbd>Fortsätt</kbd> användas.';
$string['averageattempt'] = 'Genomsnitt för försök';
$string['badarchive'] = 'Du måste ange en giltig ZIP-fil';
$string['badimsmanifestlocation'] = 'En imsmanifest.xml-fil hittades men den fanns inte i roten i din zip-fil. Vänligen paketera om ditt SCORM-paket.';
$string['badmanifest'] = 'Några fel med manifestet: se loggarna över fel';
$string['browse'] = 'Förhandsgranska';
$string['browsed'] = 'Visat';
$string['browsemode'] = 'Förhandsgranskningsläge';
$string['browserepository'] = 'Bläddra i arkivet';
$string['calculatedweight'] = 'Kalkylerad vikt';
$string['calendarend'] = '{$a} stänger';
$string['calendarstart'] = '{$a} öppnar';
$string['cannotaccess'] = 'Du kan inte anropa skriptet på det sättet.';
$string['cannotfindsco'] = 'Det gick inte att hitta någon SCO. ';
$string['chooseapacket'] = 'Välj eller uppdatera ett SCORM-paket';
$string['closebeforeopen'] = 'Du har angett ett stängningsdatum före öppningsdatum.';
$string['collapsetocwinsize'] = 'Fäll ihop innehållsförteckningen om fönsterstorleken understiger.';
$string['collapsetocwinsizedesc'] = 'Med den här inställningen kan du ange fönsterstorleken under vilken innehållsförteckningen automatiskt ska fällas ihop.';
$string['compatibilitysettings'] = 'Kompabilitetsinställningar';
$string['completed'] = 'Slutfört';
$string['completiondetail:allscos'] = 'Gör alla delar av denna aktivitet';
$string['completiondetail:completionscore'] = 'Få en poäng på {$a} eller högre';
$string['completiondetail:completionstatuscompleted'] = 'Slutför aktiviteten';
$string['completiondetail:completionstatuscompletedorpassed'] = 'Slutför och klara aktiviteten';
$string['completiondetail:completionstatuspassed'] = 'Klara aktiviteten';
$string['completionscorerequired'] = 'Kräv ett lägsta betyg';
$string['completionscorerequired_help'] = 'Om du aktiverar den här inställningen måste en användare ha minst den angivna poängen, samt ha uppfyllt övriga slutförandevillkor, för att markeras som slutförd i den här SCORM-aktiviteten.';
$string['completionscorerequireddesc'] = 'En lägsta poäng på {$a} krävs för slutförande';
$string['completionstatus_completed'] = 'Slutförd';
$string['completionstatus_passed'] = 'Godkänd';
$string['completionstatusallscos'] = 'Kräv att alla SCORM-paket returnerar slutförandestatus';
$string['completionstatusallscos_help'] = 'Vissa SCORM-paket innehåller flera komponenter eller "scos" - när detta är aktiverat måste alla scos i paketet returnera relevant <tt>lesson_status</tt> för att den här aktiviteten ska flaggas som slutförd.';
$string['completionstatusrequired'] = 'Kräv status';
$string['completionstatusrequired_help'] = 'Om du kontrollerar en eller flera statusar måste en användare uppnå minst en av de kontrollerade statusarna, samt ha uppfyllt övriga slutförandevillkor, för att markeras som att ha slutfört den här SCORM-aktiviteten.';
$string['completionstatusrequireddesc'] = 'Kursdeltagaren måste uppnå minst en av följande statusar: {$a}';
$string['confirmloosetracks'] = 'Varning! Paketet verkar ha blivit ändrat eller modifierat. Om strukturen på paketet har ändrats så kan vissa användares spår komma att gå förlorade under uppdateringsprocessen.';
$string['contents'] = 'Innehåll';
$string['coursepacket'] = 'Kurspaket';
$string['coursestruct'] = 'Kursstruktur';
$string['crontask'] = 'Bakgrundsbearbetning för SCORM';
$string['currentwindow'] = 'Aktuellt fönster';
$string['datadir'] = 'Filsystemfel: Det går inte att skapa kursdatakatalogen';
$string['defaultdisplaysettings'] = 'Förvalda visningsinställningar';
$string['defaultgradesettings'] = 'Förvalda betygsinställningar';
$string['defaultothersettings'] = 'Andra förvalda inställningar';
$string['deleteallattempts'] = 'Ta bort alla försök på SCORM';
$string['deleteattemptcheck'] = 'Är du helt säker på att du vill ta bort de här försöken helt och hållet?';
$string['deleteselected'] = 'Ta bort valda försök';
$string['deleteuserattemptcheck'] = 'Är du helt säker på att du vill ta bort alla dina försök?';
$string['details'] = 'Detaljerad SCO spårning';
$string['directories'] = 'Visa katalogens länkar';
$string['disabled'] = 'Inaktiverat';
$string['display'] = 'Visa i';
$string['displayattemptstatus'] = 'Visa försöksstatus';
$string['displayattemptstatus_help'] = 'Med den här inställningen kan en sammanfattning av användarnas försök visas i kursöversiktsblocket på översiktssidan och/eller SCORM-startsidan.';
$string['displayattemptstatusdesc'] = 'Om en sammanfattning av användarens försök visas i kursöversiktsblocket på översiktssidan och/eller SCORM-startsidan.';
$string['displaycoursestructure'] = 'Visa kursens struktur på ingångssidan';
$string['displaycoursestructure_help'] = 'Om detta är aktiverat så kommer tabellen över innehåll att visas på "outline"-sidan för SCORM. ';
$string['displaycoursestructuredesc'] = 'Om den är aktiverad visas innehållsförteckningen på SCORM-dispositionssidan.';
$string['displaydesc'] = 'Om SCORM-paketet ska visas i ett nytt fönster.';
$string['displaysettings'] = 'Visningsalternativ';
$string['dnduploadscorm'] = 'Lägg till som SCORM-paket';
$string['domxml'] = 'DOMXML externt bibliotek';
$string['element'] = 'Element';
$string['enter'] = 'Ange';
$string['entercourse'] = 'Ange kurs';
$string['errorlogs'] = 'Fellogg';
$string['eventattemptdeleted'] = 'Försök borttaget';
$string['eventinteractionsviewed'] = 'Visade interaktioner';
$string['eventreportviewed'] = 'Rapport visad';
$string['eventscolaunched'] = 'Sco uppstartad';
$string['eventscorerawsubmitted'] = 'SCORM-råpoäng skickades in';
$string['eventstatussubmitted'] = 'Skickade in SCORM-status';
$string['eventtracksviewed'] = 'Visade spår';
$string['eventuserreportviewed'] = 'Användarrapport visad';
$string['everyday'] = 'Varje dag';
$string['everytime'] = 'Varje gång som det används';
$string['exceededmaxattempts'] = 'Du har uppnått det maximala antalet försök.';
$string['exit'] = 'Avsluta kurs';
$string['exitactivity'] = 'Avsluta aktivitet';
$string['expired'] = 'Den här aktiviteten är tyvärr avslutad den {$a} och den är inte längre tillgänglig';
$string['external'] = 'Tajming för uppdatering av externa paket';
$string['failed'] = 'Misslyckades';
$string['finishscorm'] = 'Om du är färdig med visningen av den här resursen, {$a}';
$string['finishscormlinkname'] = 'klicka här för att återgå till kurssidan';
$string['firstaccess'] = 'Första tillfället att använda';
$string['firstattempt'] = 'Första försöket';
$string['floating'] = 'Flytande';
$string['forceattemptalways'] = 'Alltid';
$string['forceattemptoncomplete'] = 'När föregående försök slutfördes, godkändes eller underkändes';
$string['forcecompleted'] = 'Tvinga slutfört';
$string['forcecompleted_help'] = 'Om aktiverad tvingas statusen för det aktuella försöket till "Slutförd". (Gäller endast SCORM 1.2-paket.)';
$string['forcecompleteddesc'] = 'Det här alternativet anger huruvida framtvingande av fullföljande ska gälla eller inte';
$string['forcejavascript'] = 'Tvinga användarna att aktivera JavaScript';
$string['forcejavascript_desc'] = 'Om aktiverat (rekomenderat) förhindrar detta åtkomst till SCORM objekt när JavaScript inte stöds eller är aktiverat i en användares webbläsare. Om detta är inaktiverat kan användaren kanske se SCORM paketet men API kommunikationen kommer misslyckas och ingen betygsinformation kommer sparas.';
$string['forcejavascriptmessage'] = 'JavaScript krävs för att se detta objekt, aktivera JavaScript i din webbläsare och försök igen.';
$string['forcenewattempts'] = 'Tvinga nytt försök';
$string['forcenewattempts_help'] = 'Det finns 3 alternativ:

* Nej - Om ett tidigare försök slutförs, godkänns eller misslyckas får studenten möjlighet att gå in i granskningsläge eller starta ett nytt försök.
* När föregående försök slutfördes, skickades eller misslyckades - Detta förlitar sig på scorm-paketet som anger statusen "slutförd", "godkänd" eller "misslyckad".
* Alltid - Varje återinträde i SCORM-aktiviteten genererar ett nytt försök och deltagaren kommer inte att returneras till samma punkt som de nådde i sitt tidigare försök.';
$string['found'] = 'Manifestet hittades';
$string['frameheight'] = 'Höjden på ramen eller fönstret.';
$string['framewidth'] = 'Bredden på ramen eller fönstret.';
$string['fromleft'] = 'Från vänster';
$string['fromtop'] = 'Frön början';
$string['fullscreen'] = 'Fyll hela skärmen';
$string['general'] = 'Allmänna data';
$string['gradeaverage'] = 'Medelbetyg';
$string['gradeforattempt'] = 'Betyg för försök';
$string['gradehighest'] = 'Högsta betyg';
$string['grademethod'] = 'Betygsättningsmetod';
$string['grademethod_help'] = 'De resultat av en SCORM/AICC aktivitet som visas på sidan för betyg kan graderas med många olika mått:

* Lärobjekt - Antalet genomförda/godkända lärobjekt för aktiviteten. Maxvärdet är det totala antalet lärobjekt.
* Högsta betyget - Det högsta resultat som har uppnåtts av användare i alla godkända lärobjekt.
* Medelbetyg - Medelvärdet av alla resultat.
* Sammanlagt betyg - Alla resultat läggs ihop. ';
$string['grademethoddesc'] = 'Det här alternativet anger vilken metod för betygssättning som ska gälla för ett enskilt försök på aktiviteten.';
$string['gradereported'] = 'Betyg rapporterat';
$string['gradescoes'] = 'Lärobjekt ';
$string['gradesettings'] = 'Betygsinställningar';
$string['gradesum'] = 'Summa för betyg';
$string['height'] = 'Höjd';
$string['hidden'] = 'Dold';
$string['hidebrowse'] = 'Dölj knappen för förhandsgranskning';
$string['hidebrowse_help'] = '<p>Om det här alternativet är inställt till "Ja" så kommer  knappen Förhandsgranska sidan för visning av ett SCORM/AICC-paket att döljas.</p>

<p>Studenterna/eleverna/deltagarna/de lärande kan välja att förhandsgranska aktiviteten eller försöka att genomföra den på normalt sätt. </p>

<p>När ett lärobjekt är förhandsgranskat så kommer det att markeras med  <img src="<?php echo $CFG->wwwroot.\'/mod/scorm/pix/browsed.gif\' ?>" alt="<?php print_string(\'browsed\',\'scorm\') ?>" title="<?php print_string(\'browsed\',\'scorm\') ?>" /> ikonen för "förhandsgranskat".</p>';
$string['hidebrowsedesc'] = 'Med förhandsgranskningsläget kan en deltagare bläddra i en aktivitet innan hen genomför ett försök.';
$string['hideexit'] = 'Dölj länken \'avsluta\'';
$string['hidereview'] = 'Dölj knappen \'Visa igen\'';
$string['hidetoc'] = 'Visa kursstrukturen i uppspelaren';
$string['hidetoc_help'] = 'Så här visas innehållsförteckningen i SCORM-spelaren';
$string['hidetocdesc'] = 'Den här inställningen anger hur innehållsförteckningen ska visas i SCORM-uppspelaren.';
$string['highestattempt'] = 'Högsta försöket';
$string['identifier'] = 'Frågeidentifierare';
$string['incomplete'] = 'Ofullständig';
$string['indicator:cognitivedepth'] = 'SCORM kognitiv';
$string['indicator:cognitivedepth_help'] = 'Denna indikator baseras på det kognitiva djup som uppnåtts av studenten i en SCORM-aktivitet.';
$string['indicator:cognitivedepthdef'] = 'SCORM kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Deltagaren har uppnått denna procentandel av det kognitiva engagemanget som erbjuds av SCORM-aktiviteterna under detta analysintervall (Nivåer = Ej visad, Visad, Skicka in, Visa återkoppling)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'SCORM social';
$string['indicator:socialbreadth_help'] = 'Denna indikator baseras på den sociala bredd som uppnåtts av studenten i en SCORM-aktivitet.';
$string['indicator:socialbreadthdef'] = 'SCORM social';
$string['indicator:socialbreadthdef_help'] = 'Deltagaren har nått denna procentandel av det sociala engagemanget som erbjuds av SCORM-aktiviteterna under detta analysintervall (Nivåer = Inget deltagande, Deltagaren ensamt)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['interactions'] = 'Interaktioner';
$string['invalidactivity'] = 'SCORM-aktiviteten är inkorrekt';
$string['invalidhacpsession'] = 'Ogiltig HACP-session';
$string['invalidmanifestname'] = 'Endast imsmanifest.xml eller .zip-filer kan väljas';
$string['invalidmanifestresource'] = 'VARNIN: Följande resurser refererades i ditt manifest men kunde inte hittas:';
$string['invalidstatus'] = 'Ogiltig status';
$string['invalidurl'] = 'Ogiltig URL angiven';
$string['invalidurlhttpcheck'] = 'Ogiltig URL angiven. Felsökningsmeddelande: <pre>{$a->cmsg}</pre>';
$string['last'] = 'Senaste åtkomst den';
$string['lastaccess'] = 'Senaste inloggning i modulen';
$string['lastattempt'] = 'Senast slutförda försöket';
$string['lastattemptlock'] = 'Lås efter det sista försöket';
$string['lastattemptlock_help'] = 'Om aktiverat förhindras elever att starta SCORM spelaren efter att de använt alla sina tilldelade försök.';
$string['lastattemptlockdesc'] = 'Om aktiverat förhindras en deltagare från att starta SCORM-spelaren efter att ha använt upp alla sina tilldelade försök.';
$string['location'] = 'Visa en rad som visar placeringen';
$string['masteryoverride'] = 'Skicklighetspoäng åsidosätter status';
$string['masteryoverride_help'] = 'Om aktiverad och en mastery-poäng tillhandahålls, när LMSFinish anropas och en rå poäng har angetts, kommer statusen att beräknas om med hjälp av råpoängen och mastery-poängen och eventuell status som tillhandahålls av SCORM (inklusive "ofullständig") åsidosätts.';
$string['masteryoverridedesc'] = 'Den här inställningen anger standardinställningen för åsidosättning av skicklighetspoängen';
$string['max'] = 'Maxpoäng';
$string['maximumattempts'] = 'Antal försök';
$string['maximumattempts_help'] = '<p>Här anger du det antal försök som användarna får göra<br />Det fungerar bara med SCORM1.2- och AICC-paket. SCORM2004 har ett eget sätt att definiera max antal försök.</p>';
$string['maximumattemptsdesc'] = 'Den här inställningen anger standard för maximala försök för en aktivitet';
$string['maximumgradedesc'] = 'Det här alternativet anger maxbetyget för en aktivitet. ';
$string['menubar'] = 'Visa menyraden';
$string['min'] = 'Lägsta resultat';
$string['missing_attribute'] = 'Saknat attribut {$a->attr} i taggen {$a->tag}';
$string['missing_tag'] = 'Saknad tagg {$a->tag}';
$string['missingparam'] = 'Ett element som är obligatoriskt saknas eller är felaktigt.';
$string['mode'] = 'Läge';
$string['modulename'] = 'Scormpaket';
$string['modulename_help'] = 'Ett SCORM-paket är en samling filer som är paketerade enligt en överenskommen standard för inlärningsobjekt. SCORM-aktivitetsmodulen gör det möjligt att ladda upp SCORM- eller AICC-paket som en ZIP-fil och lägga till dem i en kurs.

Innehållet visas vanligtvis på flera sidor, med navigering mellan sidorna. Det finns olika alternativ för att visa innehållet i ett popup-fönster, med en innehållsförteckning, med navigeringsknappar etc. SCORM-aktiviteter innehåller i allmänhet frågor där resultaten registreras i betygsboken.

SCORM-aktiviteter kan användas:

* För att presentera multimediainnehåll och animationer
* Som ett bedömningsverktyg';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulenameplural'] = 'SCORM-paket';
$string['myaiccsessions'] = 'Mina AICC-sessioner';
$string['myattempts'] = 'Mina försök';
$string['nav'] = 'Visa navigering';
$string['nav_help'] = 'Den här inställningen anger om navigeringsknapparna och deras position ska visas eller döljas.

Det finns 3 alternativ:

* Nej - Navigeringsknappar visas inte
* Under innehåll - Navigeringsknappar visas under SCORM-paketets innehåll
* Flytande - Navigeringsknappar visas flytande, med positionen uppifrån och från vänster som bestäms av paketet.';
$string['navdesc'] = 'Den här inställningen anger om navigeringsknappar och deras position ska visas eller döljas.';
$string['navigation'] = 'Navigering';
$string['navpositionleft'] = 'Navigeringsknapparnas position från vänster, angivet i pixlar.';
$string['navpositiontop'] = 'Navigeringsknapparnas position från överkanten, angivet i pixlar.';
$string['networkdropped'] = 'SCORM-uppspelaren har fastställt att Internetanslutningen är opålitlig eller har avbrutits. Om du fortsätter med den här SCORM-aktiviteten kanske dina förlopp inte sparas.<br />
Du bör avsluta aktiviteten nu och återvända när du har en pålitlig Internetanslutning.';
$string['newattempt'] = 'Påbörja ett nytt försök';
$string['next'] = 'Fortsätt';
$string['no_attributes'] = 'Taggen {$a->tag} måste ha attribut';
$string['no_children'] = 'Taggen {$a->tag} måste ha barn';
$string['noactivity'] = 'Inget att rapportera';
$string['noattemptsallowed'] = 'Antal tillåtna försök';
$string['noattemptsmade'] = 'Antal försök du genomfört';
$string['nolimit'] = 'Obegränsade försök';
$string['nomanifest'] = 'Felaktigt filpaket - saknar imsmanifest.xml eller AICC-struktur';
$string['noprerequisites'] = 'Du har tyvärr inte uppnått tillräckligt många av förkunskapskraven för att få tillgång till den här aktiviteten.';
$string['noreports'] = 'Ingen rapport att visa';
$string['normal'] = 'Normal';
$string['noscriptnoscorm'] = 'Din webbläsare stödjer inte javaskript eller så är javaskript inte aktiverat. Därför är det inte säkert att data från det här SCORM-paketet kommer att spelas upp eller sparas på ett korrekt sätt.';
$string['not_corr_type'] = 'Felaktig matchning av datatyp för taggen  {$a->tag}';
$string['notattempted'] = 'Ej försökt';
$string['notopenyet'] = 'Tyvärr är den här aktiviteten inte tillgänglig förrän {$a}';
$string['objectives'] = 'Mål';
$string['openafterclose'] = 'Du har angett ett öppningsdatum som infaller efter stängningsdatumet';
$string['optallstudents'] = 'alla användare';
$string['optattemptsonly'] = 'endast användare som gjort försök';
$string['options'] = 'Alternativ (inte tillgängliga i alla typer av webbläsare)';
$string['optionsadv'] = 'Alternativ (avancerade)';
$string['optionsadv_desc'] = 'Om markerat kommer bredden och höjden visas som avancerade inställningar.';
$string['optnoattemptsonly'] = 'Endast användare som inte har gjort några försök';
$string['organization'] = 'Organisation';
$string['organizations'] = 'Organisationer';
$string['othersettings'] = 'Kompletterande inställningar';
$string['package'] = 'Paketfil';
$string['package_help'] = '<p><b>Paketfiler</b></p>

<p>Paketet &auml;r en specifik fil med ett <b>zip</b> (eller pif) som filnamnstill&auml;gg och som inneh&aring;ller giltiga filer som definierar kurser av typen AICC eller SCORM.</p>

<p>Ett <b>SCORM</b> paket m&aring;ste inneh&aring;lla en fil med namnet  <b>imsmanifest.xml</b > som ska ligga i roten p&aring; den zippade filen. Imsmanifestet inneh&aring;ller en beskrivning av SCORM-kursens struktur, placeringen av resurser och m&aring;nga andra saker.</p>

<p>Ett <b>AICC</b>-paket definieras  av &aring;tskilliga filer (mellan 4 och 7) med definierade filnamnstill&auml;gg.
   H&auml;r kan Du se vad filnamnstill&auml;ggen betyder:</p>
   <ul>
	<li>CRS - \'Course Description file\' - fil som beskriver kursen (obligatorisk)</li>
	<li>AU  - \'Assignable Unit file\' (obligatorisk)</li>
	<li>DES - \'Descriptor file\' (obligatorisk)</li>
	<li>CST - \'Course Structure file\' - fil som beskriver kursens struktur (obligatorisk)</li>
	<li>ORE - \'Objective Relationship file\' - fil f&ouml;r relationer mellan m&aring;l(valfritt)</li>
	<li>PRE - \'Prerequisites file\' - fil f&ouml;r f&ouml;rkunskaper (valfritt)</li>
	<li>CMP - \'Completition Requirements file\' - fil som inneh&aring;ller krav p&aring; fullf&ouml;ljande  (valfritt)</li>
   </ul>';
$string['packagedir'] = 'Fel i filsystemet: det går inte att skapa en katalog för paketet';
$string['packagefile'] = 'Ingen paketfil har angivits';
$string['packagehdr'] = 'Paket';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Denna inställning att en URL för SCORM paketet kan anges, istället för att välja en fil med filväljaren.';
$string['page-mod-scorm-x'] = 'Vilken SCORM modulsida som helst';
$string['pagesize'] = 'Storlek på sida';
$string['passed'] = 'Godkänd';
$string['php5'] = 'PHP 5 (DOMXML ursprungligt (native) bibliotek)';
$string['pluginadministration'] = 'Hantera SCORM-paket';
$string['pluginname'] = 'SCORM-paket';
$string['popup'] = 'Nytt fönster';
$string['popuplaunched'] = 'Detta SCORM-paket har startats i ett popup-fönster, Om du är färdig med den här resursen klickar du här för att återgå till kurssidan';
$string['popupmenu'] = 'I en nedrullningsmeny';
$string['popupopen'] = 'Öppna paketet i ett nytt fönster';
$string['popupsblocked'] = 'Det verkar som om popupfönster är blockerade vilket förhindrar denna scormmodul från att spelas upp. Kontrollera dina webbläsarinställningar innan du försöker igen.';
$string['position_error'] = '{$a->tag} taggen kan inte vara "child" till {$a->parent} taggen';
$string['preferencespage'] = 'Inställningar endast för denna sida';
$string['preferencesuser'] = 'Inställningar för den här rapporten';
$string['prev'] = 'Föregående';
$string['privacy:metadata:aicc:data'] = 'Personuppgifter som överförs från undersystemet AICC/SCORM.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Den här pluginmodulen skickar data externt med hjälp av AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'Lektionsstatusen som ska spåras';
$string['privacy:metadata:aicc_session:scormmode'] = 'Läget för det element som ska spåras';
$string['privacy:metadata:aicc_session:scormstatus'] = 'Status för det element som ska spåras';
$string['privacy:metadata:aicc_session:sessiontime'] = 'Sessionstiden som ska spåras';
$string['privacy:metadata:aicc_session:timecreated'] = 'Den tidpunkt då det spårade elementet skapades';
$string['privacy:metadata:attempt'] = 'Försöksnumret';
$string['privacy:metadata:scoes_track:element'] = 'Namnet på elementet som ska spåras';
$string['privacy:metadata:scoes_track:value'] = 'Värdet på det angivna elementet';
$string['privacy:metadata:scorm_aicc_session'] = 'Sessionsinformationen för AICC HACP';
$string['privacy:metadata:timemodified'] = 'Tidpunkt för då det spårade elementet senast ändrades';
$string['privacy:metadata:userid'] = 'ID för användaren som använde SCORM-aktiviteten';
$string['protectpackagedownloads'] = 'Skydda paketnedladdningar';
$string['protectpackagedownloads_desc'] = 'Om det här alternativet är aktiverat kan SCORM-paket bara hämtas om användaren har funktionsbehörigheten <code> course:manageactivities</code>. Om det är inaktiverat kan SCORM-paket alltid laddas ner (på via eller på annat sätt).';
$string['raw'] = 'Råa data för resultat';
$string['regular'] = 'Normalt manifest';
$string['report'] = 'Rapport';
$string['reportcountallattempts'] = '{$a->nbattempts} försök för {$a->nbusers} användare, av totalt {$a->nbresults} resultat';
$string['reportcountattempts'] = '{$a->nbresults} resultat ({$a->nbusers} users)';
$string['reports'] = 'Rapporter';
$string['repositorynotsupported'] = 'Den här lagringsplatsen stöder inte länkning direkt till en imsmanifest.xml fil.';
$string['response'] = 'Svar';
$string['result'] = 'Resultat';
$string['results'] = 'Resultat';
$string['review'] = 'Visa igen';
$string['reviewmode'] = 'Granskningsläge';
$string['rightanswer'] = 'Rätt svar';
$string['scoes'] = 'Lärobjekt';
$string['score'] = 'Poäng';
$string['scorm:addinstance'] = 'Nytt SCORM-paket';
$string['scorm:deleteownresponses'] = 'Radera egna försök';
$string['scorm:deleteresponses'] = 'Ta bort försök med SCORM';
$string['scorm:savetrack'] = 'Spara spårning';
$string['scorm:skipview'] = 'Hoppa över översikten';
$string['scorm:viewreport'] = 'Visa rapporter';
$string['scorm:viewscores'] = 'Visa resultat';
$string['scormclose'] = 'Tillgängligt till';
$string['scormcourse'] = 'Lärokurs';
$string['scormloggingoff'] = 'Loggning av API är inaktiverat';
$string['scormloggingon'] = 'Loggning av API är aktiverat';
$string['scormopen'] = 'Tillgänglig från';
$string['scormresponsedeleted'] = 'Tog bort användarförsök';
$string['scormstandard'] = 'SCORM - standardläge';
$string['scormstandarddesc'] = 'När det är inaktiverat tillåter Moodle SCORM 1.2-paket att lagra mer än specifikationen tillåter och använder Moodle fullnamnsformatinställningar när användarnas namn vidarebefordras till SCORM-paketet.';
$string['scormtype'] = 'Typ';
$string['scormtype_help'] = 'Denna inställning avgör hur paketet inkluderas i kursen. Det finns upp till fyra alternativ:

* Uppladdat paket - Möjliggör för ett SCORM paket att väljas via filväljaren
* Externt SCORM manifest - Möjliggör att URL till en imsmanifestfil (imsmanifest.xml) anges, dvs du kan återanvända centralt lagrade scormpaket från din server utan att dessa måste sparas som en kopia varje gång. Notera: Om URL:en har ett annat domännamn än din webbplats, då är Ladda ner paket ett bättre alternativ, eftersom annars sparas inte betyg
* Nedladdat paket - Medger att ett pakets URL anges. Paketet kommer att extraheras och sparas lokalt, och uppdateras när det externa SCORM paketet uppdateras
* Extern AICC URL - denna URL är start URL för en enskild AICC aktivitet. Ett pseudopaket kommer att konstrueras runt detta.';
$string['scrollbars'] = 'Tillåt användaren att rulla fönstret';
$string['search:activity'] = 'SCORM - aktivitetsinformation';
$string['selectall'] = 'Välj alla';
$string['selectnone'] = 'Avmarkera alla';
$string['show'] = 'Visa';
$string['sided'] = 'På sidan';
$string['skipview'] = 'Student kan hoppa över sidan som visar innehållets struktur';
$string['skipview_help'] = '<p>Om du lägger till ett paket med bara ett lärobjekt i så kan du välja att automatiskt hoppa över sidan som visar strukturen på innehållet när användare klickar på en SCORM-aktivitet på kursens sida.</p>

<p>Du kan välja:</p>

   <ul>
       <li> Hoppa <strong>Aldrig</strong> över sidan som visar strukturen på innehållet.</li>
       <li> hoppa över sidan som visar strukturen på innehållet endast <strong>Vid första visningen</strong> (den första gången som användaren visar SCORM-paketet).</li>
       <li> Hoppa <strong>Alltid</strong> över sidan som visar strukturen på innehållet.</li>
   </ul>';
$string['skipviewdesc'] = 'Denna inställning anger standard för om innehållsstrukturen för en sida ska hoppas över';
$string['slashargs'] = 'VARNING: snedstrecksargument är avstängt på denna webbplats varför vissa objekt kanske inte fungerar som förväntat!';
$string['stagesize'] = 'Storlek på ram/fönster';
$string['stagesize_help'] = '<p>De här två inställningarna definierar höjden och bredden på ramen för lärobjektet.</p>';
$string['started'] = 'Började';
$string['status'] = 'Status';
$string['statusbar'] = 'Visa statusraden';
$string['student_response'] = 'Svar';
$string['subplugintype_scormreport'] = 'Rapport';
$string['subplugintype_scormreport_plural'] = 'Rapporter';
$string['suspended'] = 'Avstängd';
$string['syntax'] = 'Syntaxfel';
$string['tag_error'] = 'Okänd tagg ({$a->tag}) med detta innehåll: {$a->value}';
$string['time'] = 'Tid';
$string['title'] = 'Titel';
$string['toc'] = 'Innehållsförteckning';
$string['too_many_attributes'] = 'Taggen {$a->tag} har för många attribut';
$string['too_many_children'] = 'Taggen {$a->tag} har för många barn';
$string['toolbar'] = 'Visa verktygsraden';
$string['totaltime'] = 'Tid';
$string['trackcorrectcount'] = 'Nuvarande antal';
$string['trackcorrectcount_help'] = 'Antalet korrekta resultat för frågan';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'Detta är identifieraren som anges av SCORM-paketet för den här frågan. SCORM-specifikationen tillåter inte att den fullständiga frågetexten tillhandahålls.';
$string['trackingloose'] = 'VARNING: spårningsdata till detta SCORM-paket kommer att försvinna!';
$string['tracklatency'] = 'Fördröjning';
$string['tracklatency_help'] = 'Tid som förflutit mellan tiden då interaktionen <br />gjordes tillgänglig för eleven för svar <br /> och tiden för det första svaret.';
$string['trackpattern'] = 'Mönster';
$string['trackpattern_help'] = 'Detta är vad ett korrekt svar på denna fråga skulle vara, det visar inte elevernas svar.';
$string['trackresponse'] = 'Svar';
$string['trackresponse_help'] = 'Detta är svaret från eleven för denna fråga';
$string['trackresult'] = 'Resultat';
$string['trackresult_help'] = 'Resultat baserat på elevens svar och <br />korrekt svar';
$string['trackscoremax'] = 'Maxpoäng';
$string['trackscoremax_help'] = 'Maximalt värde i spannet för råpoäng';
$string['trackscoremin'] = 'Lägstapoäng';
$string['trackscoremin_help'] = 'Minimalt värde i spannet för råpoäng';
$string['trackscoreraw'] = 'Råpoäng';
$string['trackscoreraw_help'] = 'Nummer som återspeglar prestationen för eleven<br /> relativt till spannet avgränsat av värden för min och max';
$string['tracksuspenddata'] = 'Stäng data';
$string['tracksuspenddata_help'] = 'Tillhandahåller rum för att spara och hämta data <br />mellan elevsessioner';
$string['tracktime'] = 'Tid';
$string['tracktime_help'] = 'Tid då försöket initierades';
$string['tracktype'] = 'Typ';
$string['tracktype_help'] = 'Typ av fråga, till exempel "val" eller "kort svar".';
$string['trackweight'] = 'Vikt';
$string['trackweight_help'] = 'Vikt tilldelad till elementet';
$string['type'] = 'Typ';
$string['typeaiccurl'] = 'Extern AICC URL';
$string['typeexternal'] = 'Externt SCORM manifest';
$string['typelocal'] = 'Uppladdat paket';
$string['typelocalsync'] = 'Nedladdat paket';
$string['undercontent'] = 'Nedanför innehållet';
$string['unziperror'] = 'Ett fel inträffade i samband med att paketet skulle packas upp.';
$string['updatefreq'] = 'Intervall för automatisk uppdatering';
$string['updatefreq_error'] = 'Automatisk uppdateringsfrekvens kan bara ställas in när paketfilen finns externt';
$string['updatefreq_help'] = 'Detta medger det externa paketet att bli automatiskt nedladdat och uppdaterat';
$string['updatefreqdesc'] = 'Denna inställning anger den förvalda automatiska uppdateringsfrekvensen för en aktivitet';
$string['validateascorm'] = 'Validera ett SCORM-paket';
$string['validation'] = 'Resultat av validering';
$string['validationtype'] = 'Den här inställningen innebär att  DOMXML-biblioteket används för att validera SCORM-manifesten. Om Du inte vet hur du ska göra så behåll det markerade valet.';
$string['value'] = 'Värde';
$string['versionwarning'] = 'Den här versionen av manifestet är äldre än 1.3, varning vid {$a->tag} taggen';
$string['viewallreports'] = 'Visa rapporter för {$a} försök';
$string['viewalluserreports'] = 'Visa rapporter för {$a} användare';
$string['whatgrade'] = 'Bedömning/betygssättning av försök';
$string['whatgrade_help'] = 'Om multipla försök tillåts specificerar denna inställning om det högsta, medel, första eller sista försöket sparas i betygsboken.

Hantering av multipla försök

* Alternativet att starta ett nytt försök tillhandahålls av en kryssruta ovanför Gå knappen på innehållsstruktursidan, så säkerställ att du tillhandahåller tillgång till den sidan om du vill tillåta mer än ett försök.
* Vissa scormpaket är intelligenta angående nya försök, många är det inte. Med detta menas att om eleven återinträder i ett existerande försök, om SCORM innehållet inte har intern logik för att undvika överskrivning av tidigare försök kan dessa bli överskrivna, även om försöken var slutförda eller godkända.
* Inställningarna Tvinga slutfört, Tvinga nytt försök och Lås efter slutligt försök tillhandahåller även ytterligare hantering av multipla försök.';
$string['whatgradedesc'] = 'Anger om det högsta, genomsnittliga (medelvärdet), första eller sista slutförda försöket registreras i betygsboken då flera försök är tillåtna.';
$string['width'] = 'Bredd';
$string['window'] = 'Fönster';
$string['youmustselectastatus'] = 'Du måste välja en status som är obligatorisk';
