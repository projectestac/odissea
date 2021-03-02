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
 * Strings for component 'forum', language 'sv', version '3.8'.
 *
 * @package     forum
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actionsforgraderinterface'] = 'Åtgärder i bedömningsgränssnittet';
$string['actionsforpost'] = 'Åtgärder för inlägg';
$string['activityoverview'] = 'Det finns nya inlägg i forumet';
$string['addanewdiscussion'] = 'Nytt diskussion';
$string['addanewquestion'] = 'Ny fråga';
$string['addanewtopic'] = 'Nytt ämne';
$string['addtofavourites'] = 'Lägg denna diskussion till mina favoriter';
$string['advancedsearch'] = 'Avancerad sökning';
$string['alldiscussions'] = 'Alla diskussioner';
$string['allforums'] = 'Alla forum';
$string['allowdiscussions'] = 'Kan en {$a} göra inlägg i detta forum?';
$string['allowsallsubscribe'] = 'Det här forumet tillåter var och en att välja om de vill prenumerera eller inte.';
$string['allowsdiscussions'] = 'När du har gjort ditt inlägg och bifogat eventuell fil får du tillgång till dina kurskamraters inlämningar.';
$string['allsubscribe'] = 'Prenumerera på alla forum';
$string['allunsubscribe'] = 'Säg upp alla prenumerationer på forum';
$string['allusers'] = 'All användare';
$string['alreadyfirstpost'] = 'Det här är redan det första inlägget i diskussionen';
$string['anyfile'] = 'Vilken fil som helst';
$string['areaattachment'] = 'Bilagor';
$string['areapost'] = 'Meddelanden';
$string['attachment'] = 'Bilaga';
$string['attachment_help'] = 'Alternativt kan du bifoga en eller flera filer till ett inlägg i ett forum. Om du bifogar en bild så kommer den att visas efter meddelandet.';
$string['attachmentname'] = 'Bilaga {$a}';
$string['attachmentnameandfilesize'] = '{$a->name} ({$a->size})';
$string['attachmentnopost'] = 'Du kan inte exportera bilagor utan ett ID för inlägget.';
$string['attachments'] = 'Bilagor';
$string['attachmentswordcount'] = 'Bilagor och antal ord';
$string['authorreplyingprivatelytoauthor'] = '{$a->respondant} svarar privat till {$a->author}';
$string['authorreplyingtoauthor'] = '{$a->respondant} svarar till {$a->author}';
$string['availability'] = 'Tillgänglighet';
$string['blockafter'] = 'Tröskel för blockering av inlägg';
$string['blockafter_help'] = 'Den här inställningen specificerar det maximala antalet inlägg som en användare kan göra inom den givna tiden.  Användare med kapaciteten mod/forum:postwithoutthrottling är undantagna från den här begränsningen. ';
$string['blockperiod'] = 'Tidsperiod för blockering';
$string['blockperiod_help'] = 'Kursdeltagare kan blockeras från att göra fler än det givna antalet inlägg inom tidsperioden. Användare med kapaciteten mod/forum:postwithoutthrottling är undantagna från den här begränsningen.';
$string['blockperioddisabled'] = 'Blockera inte';
$string['blogforum'] = 'Forum som visas i ett bloggliknande format.';
$string['bynameondate'] = 'av {$a->name} - {$a->date}';
$string['cachedef_forum_is_tracked'] = 'Spårningsstatus för användare';
$string['calendardue'] = '{$a} har förfallit';
$string['cancelreply'] = 'Avbryt';
$string['cannotadd'] = 'Det gick inte att lägga till diskussionen till det här forumet. ';
$string['cannotadddiscussion'] = 'För att lägga till diskussionsämnen till det här forumet krävs det att man är medlem i en grupp.';
$string['cannotadddiscussionall'] = 'Du har inte tillstånd att lägga till ett nytt diskussionsämne för alla deltagare. Om du inte kan välja en grupp i det här forumet beror det på att du inte är tillagd i någon grupp, eller att den grupp du tillhör inte har rättigheter att skriva i det här forumet.';
$string['cannotadddiscussiongroup'] = 'Du måste vara medlem i en grupp för att skapa en diskussion.';
$string['cannotaddsubscriber'] = 'Det gick inte att lägga till en prenumerant med id {$a} till det här forumet!';
$string['cannotaddteacherforumto'] = 'Det gick inte att lägga till en omvänd instans av ett lärarforum till sektion 0 i kursen';
$string['cannotcreatediscussion'] = 'Det gick inte att skapa en ny diskussion';
$string['cannotcreateinstanceforteacher'] = 'Det gick inte att skapa en ny instans av en kursmodul för lärarforumet.';
$string['cannotdeletediscussioninsinglediscussion'] = 'Det går inte att ta bort det första inlägget i ett forum med inställningen "ett enskilt diskussionsämne".';
$string['cannotdeletepost'] = 'Du kan inte ta bort det här inlägget!';
$string['cannoteditposts'] = 'Du kan inte redigera andra människors inlägg!';
$string['cannotexportforum'] = 'Du kan inte exportera detta forum';
$string['cannotfavourite'] = 'Du har tyvärr inte behörighet att favoritmarkera diskussioner.';
$string['cannotfinddiscussion'] = 'Det gick inte att hitta diskussionen i det här forumet';
$string['cannotfindfirstpost'] = 'Det gick inte att hitta det första inlägget i det här forumet.';
$string['cannotfindorcreateforum'] = 'Det gick inte att hitta eller skapa ett övergripande nyhetsforum för webbplatsen.';
$string['cannotfindparentpost'] = 'Det gick inte att hitta den översta föräldern till inlägget {$a}.';
$string['cannotmovefromsingleforum'] = 'Det går inte att flytta diskussioner från ett enkelt diskussionsforum.';
$string['cannotmovenotvisible'] = 'Forumet är inte synligt. ';
$string['cannotmovetonotexist'] = 'Du kan inte flytta till det där forumet - det finns inte!';
$string['cannotmovetonotfound'] = 'Målforumet fanns inte i den här kursen. ';
$string['cannotmovetosingleforum'] = 'Kan inte flytta diskussionen till ett enkelt endiskussionsforum';
$string['cannotpindiscussions'] = 'Du har tyvärr inte behörighet att nåla fast diskussioner.';
$string['cannotpurgecachedrss'] = 'Det gick inte att hitta källan och/eller de adresserade forumen i de cachade RSS-flödena - kolla din fil "permissionforums".';
$string['cannotremovesubscriber'] = 'Det gick inte att ta bort prenumeranten med id {$a} från det här forumet!';
$string['cannotreply'] = 'Du kan inte svara på det här inlägget.';
$string['cannotsplit'] = 'Diskussioner från det här forumet går inte att dela upp.';
$string['cannotsubscribe'] = 'Du måste vara medlem i en grupp för att prenumerera.';
$string['cannottrack'] = 'Det gick inte att inaktivera spårning av detta forum.';
$string['cannotunsubscribe'] = 'Det gick inte att ta bort din prenumeration på detta forum.';
$string['cannotupdatepost'] = 'Du kan inte uppdatera det här inlägget.';
$string['cannotviewpostyet'] = 'Du kan inte läsa de andras frågor i det här diskussionsämnet ännu eftersom du inte har gjort något eget inlägg.';
$string['cannotviewusersposts'] = 'Det finns inga inlägg gjorda av denna användare som du kan visa.';
$string['cleanreadtime'] = 'Tidpunkt då lästa inlägg ska tas bort från \'läst\'-tabellen';
$string['clicktofavourite'] = 'Du har inte favoritmärkt denna diskussion. Klicka för att lägga den till dina favoriter.';
$string['clicktolockdiscussion'] = 'Klicka för att låsa diskussionen för nya inlägg.';
$string['clicktosubscribe'] = 'Du prenumererar inte på denna diskussion. Klicka för att prenumerera';
$string['clicktounfavourite'] = 'Du har favoritmärkt denna diskussion. Klicka för att ta bort markeringen.';
$string['clicktounlockdiscussion'] = 'Klicka för att låsa upp diskussionen.';
$string['clicktounsubscribe'] = 'Du prenumererar på denna diskussion. Klicka för att avbeställa prenumerationen.';
$string['close'] = 'Stäng';
$string['closegrader'] = 'Stäng bedömare';
$string['completiondiscussions'] = 'Kursdeltagaren måste skapa diskussioner:';
$string['completiondiscussionsdesc'] = 'Deltagaren måste starta minst {$a} diskussion(er)';
$string['completiondiscussionsgroup'] = 'Kräv diskussioner';
$string['completiondiscussionshelp'] = 'kräver diskussionsämnen för att du ska kunna fullfölja';
$string['completionposts'] = 'Kursdeltagare måste starta diskussioner eller svara:';
$string['completionpostsdesc'] = 'Deltagaren måste lägga in minst {$a} diskussion(er) eller svar';
$string['completionpostsgroup'] = 'Kräv inlägg';
$string['completionpostshelp'] = 'kräver diskussionsämnen eller svar för att du ska kunna fullfölja';
$string['completionreplies'] = 'Kursdeltagare måste göra inlägg som svar:';
$string['completionrepliesdesc'] = 'Deltagaren måste lägga in minst {$a} svar';
$string['completionrepliesgroup'] = 'Kräv svar';
$string['completionreplieshelp'] = 'kräver svar för att du ska kunna fullfölja';
$string['configcleanreadtime'] = 'Tidpunkten då gamla inlägg ska rensas från \'läst\'-tabellen.';
$string['configdigestmailtime'] = 'Användare som väljer att prenumerera på e-postsammanfattningar kommer att få dessa dagligen. Den här inställningen bestämmer vid vilken tid på dygnet de ska skickas. (det cron-jobb som körs närmast efter detta klockslag skickar det).';
$string['configdisplaymode'] = 'Det förinställda sättet att visa diskussionsämnen, om du inte har ställt in ett annat.';
$string['configenablerssfeeds'] = 'Denna inställningen aktiverar möjligheten för RSS-flöden för alla forum. Du kommer fortfarande att behöva aktivera flöden manuellt i inställningarna för varje forum.';
$string['configenabletimedposts'] = 'Ställ in på \'ja\' om du vill tillåta inställning av visningsperioder när du lägger upp en ny forumdiskussion.';
$string['configlongpost'] = 'Alla inlägg som överskrider den här längden (förutom HTML) anses vara långa.';
$string['configmanydiscussions'] = 'Maximalt antal diskussionsämnen som visas per sida i ett forum.';
$string['configmaxattachments'] = 'Förvalt standardantal tillåtna bilagor per inlägg.';
$string['configmaxbytes'] = 'Standardval (förinställt värde) för den maximala storleken på bifogade filer på den här webbsajten (det finns även lokala inställningar för t.ex. varje enskild kurs)';
$string['configoldpostdays'] = 'Antal dagar efter vilket gamla inlägg markeras som lästa.';
$string['configreplytouser'] = 'När ett inlägg i ett forum har skickats som e-post; ska det då innehålla användarens e-postadress så att mottagarna kan svara personligen snarare än via forumet? Även om du väljer "Ja" för denna inställning så kan användaren i sin profil välja att dölja sin e-postadress.';
$string['configrssarticlesdefault'] = 'Om RSS-flöden aktiverats anger denna inställning standardantalet artiklar (antingen diskussioner eller inlägg).';
$string['configrsstypedefault'] = 'Om RSS-flöden aktiverats anger denna inställning standardaktivitetstypen.';
$string['configshortpost'] = 'Alla inlägg som överskrider den här längden (förutom HTML) anses vara långa.';
$string['configsubscriptiontype'] = 'Standardinställning för prenumeration';
$string['configtrackingtype'] = 'Standardinställningen för lässpårning';
$string['configtrackreadposts'] = 'Ställ in detta till \'Ja\' om du vill spåra läst/inte läst för varje användare.';
$string['configusermarksread'] = 'Om \'Ja\' så måste användare manuellt markera ett inlägg som läst. Om \'Nej\' markeras inlägget som läst när det visas.';
$string['confirmsubscribe'] = 'Vill du verkligen prenumerera på forumet \'{$a}\'?';
$string['confirmsubscribediscussion'] = 'Vill du verkligen prenumerera på diskussionen \'{$a->discussion}\' i forumet \'{$a->forum}\' ?';
$string['confirmunsubscribe'] = 'Vill du verkligen avbryta prenumerationen på forumet \'{$a}\'?';
$string['confirmunsubscribediscussion'] = 'Vill du verkligen avbeställa din prenumeration på \'{$a->diskussion}\' i forum \'{$a->forum}\'?';
$string['couldnotadd'] = 'Det gick inte att lägga till ditt inlägg på grund av okänt fel.';
$string['couldnotdeletereplies'] = 'Tyvärr, det kan inte tas bort eftersom folk redan har svarat på det.';
$string['couldnotupdate'] = 'Det gick inte att uppdatera ditt inlägg på grund av okänt fel.';
$string['created'] = 'Skapat';
$string['crontask'] = 'Forumutskick och underhållsjobb';
$string['cutoffdate'] = 'Avstängningsdatum';
$string['cutoffdate_help'] = 'Efter valt datum stängs forumet för nya inlägg.';
$string['cutoffdatereached'] = 'Stängningsdatumet för detta forum har passerats. Det är inte längre möjligt att göra inlägg.';
$string['cutoffdatevalidation'] = 'Avstängningsdatum måste vara senare än stoppdatum för inlämning.';
$string['delete'] = 'Ta bort';
$string['deleteddiscussion'] = 'Diskussionsämnet har tagits bort';
$string['deletedpost'] = 'Inlägget har tagits bort';
$string['deletedposts'] = 'De inläggen har tagits bort';
$string['deleteduser'] = 'Borttagen användare';
$string['deletesure'] = 'Är du säker på att du vill ta bort detta inlägg?';
$string['deletesureplural'] = 'Är du säker på att du vill ta bort detta inlägg och alla svar? ({$a} inlägg)';
$string['digestmailheader'] = 'Det här är din dagliga sammanfattning av nya inlägg  i {$a->sitename} forum. För att ändra på dina val av e-post från forum - gå till {$a->userprefs}';
$string['digestmailpost'] = 'Ändra inställning för hur du får e-post från forum';
$string['digestmailpostlink'] = 'Ändra inställning för hur du får e-post från forum: {$a}';
$string['digestmailprefs'] = 'Din användarprofil';
$string['digestmailsubject'] = '{$a}: sammanfattning av forum';
$string['digestmailtime'] = 'Tidpunkt för utskick av e-post sammanfattningar';
$string['digestsentusers'] = 'Sammanfattande e-postmeddelanden har skickats till {$a} användare.';
$string['disallowsubscribe'] = 'Det är inte tillåtet att prenumerera';
$string['disallowsubscribeteacher'] = 'Det är inte tillåtet att prenumerera (utom för lärare)';
$string['disallowsubscription'] = 'Prenumeration';
$string['disallowsubscription_help'] = 'Detta forum har konfigurerats så att du inte kan prenumerera på diskussioner.';
$string['discussion'] = 'Diskussion';
$string['discussionlistsortbycreatedasc'] = 'Sortera efter skapelsedatum, äldst överst.';
$string['discussionlistsortbycreateddesc'] = 'Sortera efter skapelsedatum, nyast överst.';
$string['discussionlistsortbydiscussionasc'] = 'Sortera på diskussionsnamn i stigande ordning';
$string['discussionlistsortbydiscussiondesc'] = 'Sortera på diskussionsnamn i fallande ordning';
$string['discussionlistsortbygroupasc'] = 'Sortera på grupp i stigande ordning';
$string['discussionlistsortbygroupdesc'] = 'Sortera på grupp i fallande ordning';
$string['discussionlistsortbylastpostasc'] = 'Sortera efter skapelsedatum för det senaste inlägget, äldst överst.';
$string['discussionlistsortbylastpostdesc'] = 'Sortera efter skapelsedatum för det senaste inlägget, nyast överst.';
$string['discussionlistsortbyrepliesasc'] = 'Sortera efter antal svar, i stigande ordning.';
$string['discussionlistsortbyrepliesdesc'] = 'Sortera efter antal svar, i fallande ordning.';
$string['discussionlistsortbystarterasc'] = 'Sortera på trådstartare i stigande ordning';
$string['discussionlistsortbystarterdesc'] = 'Sortera på trådstartare i fallande ordning';
$string['discussionlocked'] = 'Denna diskussion är stängd och du kan inte längre göra inlägg i den.';
$string['discussionlockingdisabled'] = 'Stäng inte diskussioner';
$string['discussionlockingheader'] = 'Stängning av diskussion';
$string['discussionmoved'] = 'Det här diskussionsämnet har flyttats till \'{$a}\'.';
$string['discussionmovedpost'] = 'Det här diskussionsämnet har flyttats <a href="{$a->discusshref}">hit </a>i forumet <a href="{$a->forumhref}">{$a->forumname}</a>';
$string['discussionname'] = 'Namn på diskussion';
$string['discussionnownotsubscribed'] = '{$a->name} kommer INTE att få notiser om nya inlägg i \'{$a->discussion}\' i \'{$a->forum}\'';
$string['discussionnowsubscribed'] = '{$a->name} kommer att få notiser om nya inlägg i  \'{$a->discussion}\' i \'{$a->forum}\'';
$string['discussionpin'] = 'Nåla fast';
$string['discussionpinned'] = 'Fastnålad';
$string['discussionpinned_help'] = 'Fastnålade diskussionsämnen sitter längst upp i forumet.';
$string['discussions'] = 'Diskussionsämnen';
$string['discussionsplit'] = 'Diskussionen har delats upp.';
$string['discussionsstartedby'] = '{$a}  inledde det här diskussionsämnet';
$string['discussionsstartedbyrecent'] = 'Diskussioner som nyligen har inletts av \'{$a}\'.';
$string['discussionsstartedbyuserincourse'] = 'Diskussioner startade av {$a->fullname} i {$a->coursename}';
$string['discussionstartedby'] = 'Diskussion startad av {$a}';
$string['discussionsubscribed'] = 'Du prenumererar nu på denna diskussion.';
$string['discussionsubscribestart'] = 'Skicka mig notiser om nya inlägg i denna diskussion';
$string['discussionsubscribestop'] = 'Jag vill inte inte få notiser om nya inlägg i denna diskussion';
$string['discussionsubscription'] = 'Prenumeration på diskussion';
$string['discussionsubscription_help'] = 'Prenumerera på en diskussion innebär att du kommer att få notiser om nya inlägg till denna diskussion .';
$string['discussionunpin'] = 'Lossa diskussion';
$string['discussionunsubscribed'] = 'Du har nu avslutat prenumerationen på denna diskussion.';
$string['discussthistopic'] = 'Läs och kommentera';
$string['discusstopicname'] = 'Diskutera ämnet: {$a}';
$string['displayend'] = 'Visa slut';
$string['displayend_help'] = '<p>Du kan välja om ditt inlägg i ett forum ska visas fr.o.m. ett visst datum, utgå efter ett visst datum eller om det bara ska visas under en viss period.</p>

<p>Avmarkera alternativet/en Insktivera för att aktivera ett start- och/eller ett slutdatum. </p>

<p>Lägg märke tilll att användare med rättigheter som administratörer kommer att kunna se meddelandena innan de publiceras och efter det att de har \'tagits bort\'. </p>';
$string['displayenddate'] = 'Visa slut: {$a}.';
$string['displaymode'] = 'Visningsläge';
$string['displayperiod'] = 'Visa period';
$string['displaystart'] = 'Visa start';
$string['displaystart_help'] = '<p>Du kan välja om ditt inlägg i ett forum ska visas fr.o.m. ett visst datum, utgå efter ett visst datum eller om det bara ska visas under en viss period.</p>

<p>Avmarkera alternativet/en Inaktivera för att aktivera ett start- och/eller ett slutdatum. </p>

<p>Lägg märke tilll att användare med rättigheter som administratörer kommer att kunna se meddelandena innan de publiceras och efter det att de har \'tagits bort\'. </p>';
$string['displaystartdate'] = 'Visa start: {$a}.';
$string['displaywordcount'] = 'Visa antal ord';
$string['displaywordcount_help'] = 'Denna inställning anger om antalet ord på varje inlägg ska visas eller inte .';
$string['duedate'] = 'Stoppdatum/tid';
$string['duedate_help'] = 'Detta är när inlägget i forumet förfaller. Även om detta datum visas i kalendern som förfallodatum för forumet, kommer inlägg fortfarande tillåtas efter detta datum. Ställ in ett forum cut-off datum för att förhindra inlägg i forumet efter ett visst datum.';
$string['duedatetodisplayincalendar'] = 'Förfallodatum att visa i kalender';
$string['eachuserforum'] = 'Inlämningsforum';
$string['edit'] = 'Redigera';
$string['editedby'] = 'Redigerad av  {$a->name} - {$a->date}';
$string['editedpostupdated'] = '{$a}\'s inlägg uppdaterades';
$string['editing'] = 'Redigering';
$string['emaildigestcompleteshort'] = 'Hela inlägg';
$string['emaildigestdefault'] = 'Standard ({$a})';
$string['emaildigestoffshort'] = 'Ingen sammanställning';
$string['emaildigestsubjectsshort'] = 'Endast ämne';
$string['emaildigesttype'] = 'Alternativ för e-postsammanställningen';
$string['emptymessage'] = 'Något var fel med ditt inlägg.  Kanske skrev du inte in någon text, eller så var bilagan för stor. Dina ändringar har INTE sparats.';
$string['errorcannotlock'] = 'Du har inte behörighet att låsa diskussioner.';
$string['erroremptymessage'] = 'Inläggstexten får inte vara tom';
$string['erroremptysubject'] = 'Rubriken får ej vara tom.';
$string['errorenrolmentrequired'] = 'Du måste vara registrerad på den här kursen för att ta del av innehållet';
$string['errorwhiledelete'] = 'Det uppstod ett fel när inlägget skulle tas bort.';
$string['eventassessableuploaded'] = 'Innehåll har postats';
$string['eventcoursesearched'] = 'Kurs sökt';
$string['eventdiscussioncreated'] = 'Diskussion skapad';
$string['eventdiscussiondeleted'] = 'Diskussion borttagen';
$string['eventdiscussionmoved'] = 'Diskussion flyttad';
$string['eventdiscussionpinned'] = 'Diskussion fastnålad';
$string['eventdiscussionsubscriptioncreated'] = 'Prenumeration skapad';
$string['eventdiscussionsubscriptiondeleted'] = 'Prenumeration borttagen';
$string['eventdiscussionunpinned'] = 'Diskussion lossad';
$string['eventdiscussionupdated'] = 'Diskussion uppdaterad';
$string['eventdiscussionviewed'] = 'Diskussion visad';
$string['eventpostcreated'] = 'Post skapad';
$string['eventpostdeleted'] = 'Post borttagen';
$string['eventpostupdated'] = 'Post uppdaterad';
$string['eventreadtrackingdisabled'] = 'Spåra läsning är av.';
$string['eventreadtrackingenabled'] = 'Spåra läsning är på.';
$string['eventsubscribersviewed'] = 'Prenumeranter har visats';
$string['eventsubscriptioncreated'] = 'Prenumeration skapad';
$string['eventsubscriptiondeleted'] = 'Prenumeration borttagen';
$string['eventuserreportviewed'] = 'Användarrapport har visats';
$string['everyonecanchoose'] = 'Alla kan välja att prenumerera';
$string['everyonecannowchoose'] = 'Var och en kan nu välja att prenumerera';
$string['everyoneisnowsubscribed'] = 'Alla prenumererar nu på detta forum.';
$string['everyoneissubscribed'] = 'Alla prenumererar på detta forum';
$string['existingsubscribers'] = 'Befintliga prenumeranter';
$string['export'] = 'Exportera';
$string['exportattachmentname'] = 'Exportera bilagan {$a} till portfolio.';
$string['exportdiscussion'] = 'Exportera hela diskussionen till portfölj';
$string['exporthumandates'] = 'Datum i läsbart format';
$string['exporthumandates_help'] = 'Om datum ska exporteras i läsbart format eller som en tidstämpel.';
$string['exportoptions'] = 'Exportalternativ';
$string['exportstriphtml'] = 'Ta bort HTML';
$string['exportstriphtml_help'] = 'Om HTML-taggar som t.ex. <code>p</code> eller <code>br</code> ska tas bort ur foruminlägg.';
$string['favourites'] = 'Favoriter';
$string['favouriteupdated'] = 'Favoriter uppdaterade';
$string['firstpost'] = 'Första inlägg';
$string['forcedreadtracking'] = 'Tillåt tvingad läs-spårning';
$string['forcedreadtracking_desc'] = 'Tillåter forum att ställs in för att tvinga läs-spårning. Detta kommer att resultera i försämrad prestanda för vissa användare, särskilt i kurser med många forum och inlägg. Om inaktiverat kommer alla forum där den tvingande spårningen varit påslagen att betrakta den som valfri.';
$string['forcesubscribed'] = 'Det är obligatoriskt för alla att prenumerera på här forumet.';
$string['forcesubscribed_help'] = 'Det går inte att avbeställa prenumerationen från detta forum.';
$string['forum'] = 'Forum';
$string['forum:addinstance'] = 'Lägg till nytt forum';
$string['forum:addnews'] = 'Lägg till nyheter';
$string['forum:addquestion'] = 'Lägg till fråga';
$string['forum:allowforcesubscribe'] = 'Tillåt obligatorisk prenumeration';
$string['forum:canoverridecutoff'] = 'Inlägg i forum efter deras cut-off datum.';
$string['forum:canoverridediscussionlock'] = 'Svara på låsta diskussioner';
$string['forum:canposttomygroups'] = 'Kan göra inlägg i alla diskussioner du har åtkomst till';
$string['forum:cantogglefavourite'] = 'Favoritmärk diskussioner';
$string['forum:createattachment'] = 'Skapa bfiogade filer';
$string['forum:deleteanypost'] = 'Ta bort vilka inlägg som helst (när som helst)';
$string['forum:deleteownpost'] = 'Ta bort egna inlägg (inom en tidsram)';
$string['forum:editanypost'] = 'Redigera valfritt inlägg';
$string['forum:exportdiscussion'] = 'Exportera hela diskussionen';
$string['forum:exportforum'] = 'Exportera forum';
$string['forum:exportownpost'] = 'Exportera egna inlägg';
$string['forum:exportpost'] = 'Exportera inlägg';
$string['forum:grade'] = 'Betygsätt forum';
$string['forum:managesubscriptions'] = 'Hantera prenumerationer';
$string['forum:movediscussions'] = 'Flytta diskussionsämnen';
$string['forum:pindiscussions'] = 'Nåla fast diskussioner';
$string['forum:postprivatereply'] = 'Svara privat på ett inlägg';
$string['forum:postwithoutthrottling'] = 'Undantag från tröskeln för inlägg';
$string['forum:rate'] = 'Bedöm/värdera inlägg';
$string['forum:readprivatereplies'] = 'Visa privata svar';
$string['forum:replynews'] = 'Svara på nyheter';
$string['forum:replypost'] = 'Svara på inlägg';
$string['forum:splitdiscussions'] = 'Dela upp diskussionsämnen';
$string['forum:startdiscussion'] = 'Inled nya diskussionsämnen';
$string['forum:viewallratings'] = 'Visa alla betyg/bedömningar som har avgivits av individer.';
$string['forum:viewanyrating'] = 'Visa totalbedömningar som någon fått';
$string['forum:viewdiscussion'] = 'Visa diskussionsämnen';
$string['forum:viewhiddentimedposts'] = 'Visa dolda och tidsbestämda inlägg';
$string['forum:viewqandawithoutposting'] = 'Visa alltid inlägg av typen F(rågor) och S(var)';
$string['forum:viewrating'] = 'Visa den sammanlagda bedömning/värdering som du har fått';
$string['forum:viewsubscribers'] = 'Visa prenumeranter';
$string['forumauthorhidden'] = 'Författare (dold)';
$string['forumblockingalmosttoomanyposts'] = 'Du närmar dig tröskeln för hur många inlägg man får göra. Du har gjort inlägg {$a->numposts} gånger under den senaste  {$a->blockperiod} och begränsningen är {$a->blockafter} inlägg.';
$string['forumbodydeleted'] = 'Innehållet i detta inlägg har tagits bort och kan inte visas längre.';
$string['forumbodyhidden'] = 'Eftersom du inte har gjort något eget inlägg ännu så får du inte se det här inlägget. Det kan också vara så att den tid som man har rätt att redigera inte har gått ut ännu.';
$string['forumgrader'] = 'Forumbedömare';
$string['forumgradingnavigation'] = 'Navigera bland bedömningar';
$string['forumgradingpanel'] = 'Bedömningspanel';
$string['forumintro'] = 'Beskrivning';
$string['forumname'] = 'Forumets namn';
$string['forumposts'] = 'Foruminlägg';
$string['forums'] = 'Forum';
$string['forumsubjectdeleted'] = 'Detta inlägg har tagits bort';
$string['forumsubjecthidden'] = 'Ämne (dolt)';
$string['forumtracked'] = 'Olästa inlägg spåras';
$string['forumtrackednot'] = 'Olästa inlägg spåras inte';
$string['forumtype'] = 'Typ av forum';
$string['forumtype_help'] = '<p>Det finns flera olika typer av forum som du kan välja mellan:</p>
<p><b>Ett enda enskilt diskussionsämne</b> -
det är bara ett tema, allt på en sida.
Detta passar bra för korta fokuserade diskussioner.</p>
<p><b>Standardforum för allmänt bruk</b> -
det är ett öppet forum där var och en kan
initiera ett nytt diskussionsämne när som helst.
Detta är det bästa forumet för allmänna ändamål.</p>
<p><b>Varje person initierar ett diskussionsämne</b> - Varje person kan
initiera exakt ett nytt diskussionsämne (alla kan dock svara).
Detta passar bra när du vill att varje enskild student/elev/deltagare/lärande
ska initiera en diskussion t ex om deras reflektioner angående veckans ämne, och alla
andra ska kunna ge respons på dessa.</p><p>Fråga/Svar-forum  Varje enskild student/elev/deltagare/lärande måste först göra inlägg om sina egna perspektiv innan de kan visa de andras. </p>
<p>(Detta kommer att utvecklas mer i kommande versioner av Moodle)</p>';
$string['generalforum'] = 'Standardforum för allmänt bruk';
$string['generalforums'] = 'Allmänna forum';
$string['grade_forum_header'] = 'Betygsätt hela forumet';
$string['grade_forum_name'] = 'Hela forumet';
$string['grade_forum_title'] = 'Betyg';
$string['grade_rating_name'] = 'Bedömning';
$string['graded'] = 'Betygsatt';
$string['gradeforrating'] = 'Betyg för bedömning: {$a->str_long_grade}';
$string['gradeforratinghidden'] = 'Betyg för klassificering dolt';
$string['gradeforwholeforum'] = 'Betyg för forum: {$a->str_long_grade}';
$string['gradeforwholeforumhidden'] = 'Betyg för forum dolt';
$string['gradeitem:forum'] = 'Forum';
$string['gradeitemnameforrating'] = 'Bedömningsbetyg för {$a->name}';
$string['gradeitemnameforwholeforum'] = 'Forumbetyg för {$a->name}';
$string['grades:gradesavedfor'] = 'Betyg för {$a->fullname} sparat';
$string['grades:gradesavefailed'] = 'Kunde inte spara betyg för {$a->fullname}: {$a->error}';
$string['gradeusers'] = 'Betygsätt användare';
$string['grading'] = 'Betyg';
$string['gradingstatus'] = 'Betygsstatus:';
$string['hiddenforumpost'] = 'Dolda inlägg i forum';
$string['hidegraderpanel'] = 'Dölj betygsättarpanel';
$string['hidepreviousrepliescount'] = 'Dölj tidigare svar ({$a})';
$string['hideusersearch'] = 'Dölj användarsökning';
$string['indexoutoftotal'] = '{$a->index} av totalt {$a->total}';
$string['indicator:cognitivedepth'] = 'Forum kognitiv';
$string['indicator:cognitivedepth_help'] = 'Denna indikator baseras på det kognitiva djup som uppnåtts av studenten i en Forumsktivitet.';
$string['indicator:cognitivedepthdef'] = 'Forum kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Deltagaren har nått denna procentandel av det kognitiva engagemang som erbjuds av Forum-aktiviteterna under detta analysintervall (Nivåer = Ingen visning, Visa, Skicka in, Visa återkoppling, Kommentera återkoppling, Skicka in på nytt efter läst återkoppling)';
$string['indicator:socialbreadth'] = 'Forum social';
$string['indicator:socialbreadth_help'] = 'Denna indikator baseras på den sociala bredd som uppnåtts av studenten i en Forumaktivitet.';
$string['indicator:socialbreadthdef'] = 'Forum social';
$string['indicator:socialbreadthdef_help'] = 'Deltagaren har nått denna procentandel av det sociala engagemanget som erbjuds av Forumaktiviteterna under detta analysintervall (Nivåer = Inget deltagande, Deltagaren ensamt, Deltagaren tillsammans med andra)';
$string['inforum'] = 'i {$a}';
$string['inpagereplysubject'] = 'Sv: {$a}';
$string['inreplyto'] = 'Som svar till {$a}';
$string['introblog'] = 'Inläggen i det här forumet kopierades hit automatiskt från bloggar som tillhör användare i den här kursen. Detta eftersom de blogginläggen inte längre var tillgängliga.';
$string['intronews'] = 'Allmänna nyheter och meddelanden';
$string['introsocial'] = 'Ett öppet forum där du kan diskutera vad du vill';
$string['introteacher'] = 'Ett forum endast för lärares anteckningar och diskussionsämnen';
$string['invalidaccess'] = 'Åtkomsten av den här sidan var ogiltig. ';
$string['invaliddiscussionid'] = 'ID för diskussionen var felaktigt alternativt existerar inte längre. ';
$string['invalidforcesubscribe'] = 'Ogiltig läge för obligatorisk prenumeration';
$string['invalidforumid'] = 'ID för forum var felaktigt. ';
$string['invalidparentpostid'] = ' ID för föräldra-inlägget var felaktigt. ';
$string['invalidpostid'] = 'Ogiltigt inläggs-ID - {$a}';
$string['lastpost'] = 'Senaste inlägget';
$string['learningforums'] = 'Forum för lärande';
$string['lockdiscussion'] = 'Lås denna diskussion för nya inlägg';
$string['lockdiscussionafter'] = 'Lås diskussioner efter en tids inaktivitet';
$string['lockdiscussionafter_help'] = 'En diskussion kan ställas in så att den låses automatiskt när den varit inaktiv under en viss tid.

Användare med behörighet att svara på låsta diskussioner kan låsa upp den igen genom att lägga in ett svar.';
$string['locked'] = 'Låst';
$string['lockupdated'] = 'Låsningsalternativet har uppdaterats';
$string['longpost'] = 'Långt inlägg';
$string['mailnow'] = 'Skicka e-postnotis nu';
$string['managesubscriptionsoff'] = 'Sluta hantera prenumerationer';
$string['managesubscriptionson'] = 'Hantera prenumerationer';
$string['manydiscussions'] = 'Diskussionsämnen per sida';
$string['markalldread'] = 'Markera alla inlägg i denna diskussion som lästa.';
$string['markallread'] = 'Markera alla inlägg i detta forum som lästa.';
$string['markasread'] = 'Markera som läst';
$string['markasreadonnotification'] = 'När notiser om nya inlägg i forum skickas ut';
$string['markasreadonnotification_help'] = 'När du får en notis om ett forumsinlägg kan du välja om du vill att inlägget ska markeras som läst dvsatt spårningen av nytt inlägg tas bort.';
$string['markasreadonnotificationno'] = 'Markera inte detta inlägg som läst';
$string['markasreadonnotificationyes'] = 'Markera detta inlägg som läst';
$string['markread'] = 'Markera som läst';
$string['markreadbutton'] = 'Markera<br />som läst';
$string['markunread'] = 'Markera som oläst';
$string['markunreadbutton'] = 'Markera<br />som oläst';
$string['maxattachments'] = 'Maximalt antal bilagor per inlägg';
$string['maxattachments_help'] = 'Den här inställningen anger maximalt antal filer som man får bifoga till ett inlägg i ett forum. ';
$string['maxattachmentsize'] = 'Maximal storlek på bifogad fil';
$string['maxattachmentsize_help'] = 'Denna inställning anger den maximala filstorleken för en fil som bifogas i ett foruminlägg.';
$string['maxtimehaspassed'] = 'Tyvärr, men maximitiden för att redigera detta inlägg ({$a}) har passerat!';
$string['message'] = 'Meddelande';
$string['messageinboundattachmentdisallowed'] = 'Ditt svar kunde inte publiceras eftersom det innehåller en bilaga och detta forum accepterar inte bilagor.';
$string['messageinboundfilecountexceeded'] = 'Ditt svar kunde inte publiceras eftersom det innehåller fler bilagor än detta forum accepterar ({$a->forum->maxattachments}).';
$string['messageinboundfilesizeexceeded'] = 'Ditt svar kunde inte publiceras eftersom bilagornas sammanlagda storlek ({$a->filesize}) överstiger den storlek som detta forum accepterar ({$a->maxbytes}).';
$string['messageinboundforumhidden'] = 'Ditt svar kunde inte publiceras eftersom forumet inte är årkomligt just nu.';
$string['messageinboundnopostforum'] = 'Ditt svar kunde inte publiceras eftersom du inte är behörig att göra inlägg i forumet {$a->forum->name}.';
$string['messageinboundthresholdhit'] = 'Ditt svar kunde inte publiceras eftersom du har överskridit det maximala antalet inlägg för detta forum.';
$string['messageprovider:digests'] = 'Sammanfattningar av inlägg i forum';
$string['messageprovider:posts'] = 'Inlägg från dina forum';
$string['missingsearchterms'] = 'De följande söktermerna förekommer bara i HTML-koden för det här meddelandet:';
$string['modeflatnewestfirst'] = 'Visa svar i enkel form (nyaste överst)';
$string['modeflatoldestfirst'] = 'Visa svar i enkel form (äldsta överst)';
$string['modenested'] = 'Visa svar i inkapslad form';
$string['modenestedv2'] = 'Visa svar i inkapslad form (experimentell)';
$string['modethreaded'] = 'Visa svar i trådad form';
$string['modulename'] = 'Forum';
$string['modulename_help'] = '<p><img src="<?php echo $CFG->wwwroot?>/mod/forum/icon.gif" alt="" /> 
<b>Forum</b></p>
<p>Det här kan vara den viktigaste aktiviteten - det är här som de flesta
diskussionerna äger rum. Forum kan vara strukturerade på olika sätt
och det kan ingå bedömning/värdering  på \'peer\'-nivå
av varje inlägg. Inläggen kan visas i ett antal olika format och de kan innehålla
bifogade filer. Genom att prenumerera på ett forum så kan deltagarna
få kopior på varje inlägg via e-post. En distanslärare kan ställa
in ett visst givet forum så att alla automatiskt prenumererar på det.
</p>';
$string['modulenameplural'] = 'Forum';
$string['more'] = 'mer';
$string['movedmarker'] = '(Flyttad)';
$string['movethisdiscussionlabel'] = 'Flytta aktuell diskussion till angivet forum';
$string['movethisdiscussionto'] = 'Flytta det här diskussionsämnet  till...';
$string['mustprovidediscussionorpost'] = 'Du måste ange antingen ett diskussion-ID eller ett inläggs-ID för att kunna exportera.';
$string['myprofileotherdis'] = 'Forumdiskussioner';
$string['myprofileowndis'] = 'Mina diskussioner i forum';
$string['myprofileownpost'] = 'Mina inlägg i forum';
$string['namenews'] = 'Nyheter';
$string['namenews_help'] = '<p>Nyhetsforumet är ett speciellt forum som skapas automatiskt för varje kurs och för
ingångssidan på webbplatsen. Du kan bara ha ett nyhetsforum per kurs.

<p>Det är en plats där lärare och administratörer kan publicera allmänna meddelanden. Studenter kan inte skriva i Nyhetsforum.</p>

<p>Blocket "Senaste nytt" kommer att visa de senaste och mest aktuella inläggen från det här speciella forumet (även om du döper om det). Av den här orsaken kommer forumet automatiskt att återskapas av Moodle om du använder blocket "Senaste nytt".</p>';
$string['namesocial'] = 'Gemenskapsforum';
$string['nameteacher'] = 'Lärarforum';
$string['newforumposts'] = 'Nya inlägg i forum';
$string['nextdiscussiona'] = 'Nästa diskussion: {$a}';
$string['nextuser'] = 'Spara ändringar och fortsätt till nästa användare';
$string['noattachments'] = 'Det finns inga bilagor till det här inlägget';
$string['nodiscussions'] = 'Det finns ännu inga diskussionsämnen i detta forum';
$string['nodiscussionsstartedby'] = 'Den här användaren {$a} har inte inlett några diskussionsämnen.';
$string['nodiscussionsstartedbyyou'] = 'Du har inte startat några diskussioner ännu';
$string['noguestpost'] = 'Tyvärr, gäster har ingen behörighet att göra inlägg.';
$string['noguestsubscribe'] = 'Tyvärr, gäster kan inte prenumerera.';
$string['noguesttracking'] = 'Tyvärr, gäster får inte ställa in bevakningsalternativ.';
$string['nomorepostscontaining'] = 'Det gick inte att hitta några inlägg som innehåller \'{$a}\'';
$string['nonews'] = 'Inga nya inlägg ännu';
$string['noonecansubscribenow'] = 'Det är nu inte tillåtet att prenumerera';
$string['nopermissiontosubscribe'] = 'Du har inte tillstånd att se prenumeranterna av forumet.';
$string['nopermissiontoview'] = 'Du har inte tillstånd att se det här inlägget.';
$string['nopostforum'] = 'Du har tyvärr inte tillstånd att göra inlägg i detta forum.';
$string['noposts'] = 'Inga inlägg';
$string['nopostsmadebyuser'] = '{$a} har inte gjort några inlägg';
$string['nopostsmadebyyou'] = 'Du har inte gjort några inlägg';
$string['noquestions'] = 'Det finns ännu inga frågor i det här forumet';
$string['nosubscribers'] = 'Det finns ännu inga prenumeranter på detta forum';
$string['notexists'] = 'Diskussionen existerar inte längre.';
$string['notgraded'] = 'Ej betygsatt';
$string['nothingnew'] = 'Ingenting nytt för {$a}';
$string['notingroup'] = 'Du måste tyvärr vara med i en grupp för att se detta forum.';
$string['notinstalled'] = 'Modulen forum är inte installerad';
$string['notlocked'] = 'Lås';
$string['notpartofdiscussion'] = 'Det här inlägget är inte del av någon diskussion!';
$string['notrackforum'] = 'Spåra inte olästa inlägg';
$string['notsubscribed'] = 'Prenumerera';
$string['nousersmatch'] = 'Inga användare hittades för angivet kriterium.';
$string['noviewdiscussionspermission'] = 'Du har inte tillstånd att se diskussionsämnen i det här forumet.';
$string['nowallsubscribed'] = 'Du prenumererar nu på alla forum i {$a}.';
$string['nowallunsubscribed'] = 'Du har nu tagit bort din prenumeration från alla forum i {$a}.';
$string['nowgradinguser'] = 'Betygsätter nu {$a}';
$string['nownotsubscribed'] = '{$a->name} kommmer INTE att få kopior av \'{$a->forum}\' med e-post.';
$string['nownottracking'] = '{$a->name} spårar inte längre \'{$a->forum}\'.';
$string['nowsubscribed'] = '{$a->name} kommer att få kopior av \'{$a->forum}\' med e-post.';
$string['nowtracking'] = '{$a->name} spårar nu \'{$a->forum}\'.';
$string['numberofreplies'] = 'Antal svar: {$a}';
$string['numposts'] = '{$a} inlägg';
$string['olderdiscussions'] = 'Äldre diskussionsämnen';
$string['oldertopics'] = 'Äldre ämnen';
$string['oldpostdays'] = 'Markera som läst efter (dagar)';
$string['overviewnumpostssince'] = 'inlägg sedan senaste inloggning';
$string['overviewnumunread'] = '{$a} olästa inlägg';
$string['page-mod-forum-view'] = 'Forummodulens huvudsida';
$string['parent'] = 'Visa \'föräldern\' till detta inlägg';
$string['parentofthispost'] = 'Föräldern till detta inlägg';
$string['permalink'] = 'Permalänk';
$string['permanentlinktoparentpost'] = 'Permalänk till överliggande inlägg';
$string['permanentlinktopost'] = 'Permalänk till detta inlägg';
$string['pindiscussion'] = 'Nåla fast denna diskussion';
$string['pinupdated'] = 'Fastnålningsalternativet har uppdaterats.';
$string['pluginadministration'] = 'Administration av forum';
$string['pluginname'] = 'Forum';
$string['postadded'] = 'Ditt inlägg har lagts till.<p>Du har {$a} för att redigera det om du vill göra ändringar.';
$string['postaddedsuccess'] = 'Ditt inlägg lades till.';
$string['postaddedtimeleft'] = 'Du har {$a} att redigera om du vill göra ändringar.';
$string['postbymailsuccess'] = 'Ditt inlägg med ämnet "{$a->subject}" har publicerats. Du kan se det här {$a->discussionurl}.';
$string['postbymailsuccess_html'] = 'Ditt <a href="{$a->discussionurl}">inlägg</a> med ämnet "{$a->subject}" har publicerats.';
$string['postbyuser'] = '{$a->post} av {$a->user}';
$string['postincontext'] = 'Se detta inlägg i sitt sammanhang';
$string['postisprivatereply'] = 'Detta är ett privat svar. Det är inte synligt för andra deltagare.';
$string['postmailinfolink'] = 'Detta är en kopia av ett meddelande i   {$a->coursename}.

Klicka på länken för att svara: {$a->replylink}';
$string['postmailnow'] = '<p>Det här inlägget kommer omedelbart att skicka med e-post till alla som prenumererar på forumet.</p>';
$string['postmailsubject'] = '{$a->courseshortname}: {$a->subject}';
$string['postrating1'] = 'Visar mest enskilt,(rationellt) inriktat  vetande (kunskap)';
$string['postrating2'] = 'Enskilt,(rationellt) inriktat  vetande (kunskap) och socialt, (empatiskt) inriktat vetande (kunskap)';
$string['postrating3'] = 'Visar mest socialt, (empatiskt) inriktat vetande (kunskap)';
$string['posts'] = 'Inlägg';
$string['postsfrom'] = 'Inlägg från';
$string['postsmadebyuser'] = 'Inlägg av {$a}';
$string['postsmadebyuserincourse'] = 'Inlägg av {$a->fullname} i {$a->coursename}';
$string['poststo'] = 'Inlägg till';
$string['posttoforum'] = 'Publicera i forumet';
$string['posttomygroups'] = 'Publicera en kopia i alla grupper';
$string['posttomygroups_help'] = 'Publicera en kopia av detta inlägg i alla grupper som du har åtkomst till. Bara deltagare i grupper som du  har åtkomst till kommer att se inlägget.';
$string['postupdated'] = 'Ditt inlägg har blivit uppdaterat';
$string['potentialsubscribers'] = 'Möjliga prenumeranter';
$string['prevdiscussiona'] = 'Tidigare diskussion: {$a}';
$string['previoususer'] = 'Spara ändringar och fortsätt till föregående användare';
$string['privacy:digesttypenone'] = 'Vi håller inte några uppgifter som rör ett föredraget forumsammandrag för detta forum.';
$string['privacy:digesttypepreference'] = 'Du har valt följande inställningar för din prenumeration på inlägg i forum: "{$a->type}".';
$string['privacy:discussionsubscriptionpreference'] = 'Du har valt följande inställningar för din prenumeration på inlägg i detta forum: "{$a->preference}"';
$string['privacy:metadata:forum_digests:maildigest'] = 'Sammandragsinställningar';
$string['privacy:postwasread'] = 'Detta inlägg lästes för första gången {$a->firstread} och senast {$a->lastread}';
$string['privacy:readtrackingdisabled'] = 'Du har valt att INTE spåra vilka inlägg du läst i detta forum.';
$string['privacy:request:delete:discussion:name'] = 'Ta bort på begäran av författaren';
$string['privacy:request:delete:post:message'] = 'Innehållet har tagits bort på begäran av författaren.';
$string['privacy:request:delete:post:subject'] = 'Ta bort på begäran av författaren';
$string['privacy:subscribedtoforum'] = 'Du prenumerar på detta forum.';
$string['privatereply'] = 'Svara privat';
$string['privatereply_help'] = 'Ett privat svar är bara synligt för författaren till inlägget som man svarar på och för ev. användare som har behörighet att läsa privata svar.';
$string['processingdigest'] = 'Bearbetar sammanfattande e-postmeddelande för användare {$a}';
$string['processingpost'] = 'Bearbetar inlägg {$a}';
$string['prune'] = 'Bryt upp';
$string['prunedpost'] = 'Ett nytt diskussionsämne har skapats av posten';
$string['pruneheading'] = 'Dela tråden från och med detta inlägg och flytta till en ny diskussionstråd.';
$string['qandaforum'] = 'Forum för frågor och svar';
$string['qandanotify'] = 'Det här är ett forum för frågor och svar. För att du ska få se andras svar på de här frågorna så måste du först skicka in ditt eget svar.';
$string['re'] = 'Sv:';
$string['readtherest'] = 'Läs fortsättningen på detta ämne';
$string['removeallforumtags'] = 'Ta bort alla forumetiketter';
$string['removefromfavourites'] = 'Ta bort diskussionen från dina favoriter.';
$string['replies'] = 'Svar:';
$string['repliesmany'] = '{$a} kommentarer';
$string['repliesone'] = '{$a} kommentar';
$string['reply'] = 'Svara';
$string['reply_handler'] = 'Besvara forumsinlägg via e-post.';
$string['reply_handler_name'] = 'Besvara forumsinlägg';
$string['replyauthorself'] = '{$a} (du)';
$string['replyforum'] = 'Svar till forum';
$string['replyingtoauthor'] = 'Svarar till {$a}...';
$string['replyplaceholder'] = 'Skriv ditt svar...';
$string['replytopostbyemail'] = 'Du kan besvara detta via e-post';
$string['replytouser'] = 'Använd e-postadressen i svaret';
$string['resetdigests'] = 'Ta bort din inställning för hur du får e-post från forumet: {$a}';
$string['resetforums'] = 'Ta bort alla inlägg från';
$string['resetforumsall'] = 'Ta bort alla inlägg';
$string['resetsubscriptions'] = 'Ta bort alla prenumerationer på forum';
$string['resettrackprefs'] = 'Ta bort allt förval angående spårning av forum';
$string['rssarticles'] = 'Antal aktuella RSS-artiklar';
$string['rssarticles_help'] = '<p>Det här alternativet låter dig välja vilket antal RSS-artiklar
du vill ta med i RSS-matningen.</p>
<p>Ett antal mellan 5 och 20 bör vara lämpligt för de flesta forum.
Öka antalet om det är ett forum som används mycket.</p>';
$string['rsssubscriberssdiscussions'] = 'RSS-flöde med diskussionsämnen';
$string['rsssubscriberssposts'] = 'RSS-flöde med inlägg';
$string['rsstype'] = 'RSS-flöde för den här aktiviteten';
$string['rsstype_help'] = 'Om du vill aktivera RSS-flödet för den här aktiviteten väljer du de diskussioner eller inlägg som ska ingå i flödet.';
$string['rsstypedefault'] = 'Typ av RSS-flöde';
$string['search'] = 'Sök';
$string['search:activity'] = 'Forum - aktivitetsinformation';
$string['search:post'] = 'Forum - inlägg';
$string['searchdatefrom'] = 'Inlägget måste vara nyare än så här';
$string['searchdateto'] = 'Inlägget måste vara äldre än så här';
$string['searchforumintro'] = 'Var snäll och mata in sökord i ett eller flera av de följande textfälten:';
$string['searchforums'] = 'Sök i forum';
$string['searchfullwords'] = 'De här orden bör stå som hela ord';
$string['searchnotwords'] = 'De här orden bör INTE tas med';
$string['searcholderposts'] = 'Sök äldre inlägg...';
$string['searchphrase'] = 'Exakt den här frasen måste vara med i inlägget';
$string['searchresults'] = 'Sökresultat';
$string['searchsubject'] = 'De här orden bör vara med i ämnet';
$string['searchtags'] = 'är taggad med';
$string['searchuser'] = 'Det här namnet bör matcha författarens namn';
$string['searchuserid'] = 'Författarens Moodle-ID';
$string['searchusers'] = 'Sök användare';
$string['searchwhichforums'] = 'Välj vilket/vilka forum du vill söka i';
$string['searchwords'] = 'De här orden kan förekomma var som helst i inlägget';
$string['seeallposts'] = 'Visa alla inlägg som den här användaren har gjort';
$string['sendstudentnotificationsdefault'] = 'Standardinställning för "Meddela studenter"';
$string['sendstudentnotificationsno'] = 'Nej';
$string['sendstudentnotificationsyes'] = 'Ja, skicka notis till student';
$string['settings'] = 'Inställningar';
$string['shortpost'] = 'Kort inlägg';
$string['showgraderpanel'] = 'Visa bedömarpanel';
$string['showingcountoftotaldiscussions'] = 'Visar {$a->count} av {$a->total} diskussioner';
$string['showmoreusers'] = 'Visa fler användare';
$string['showpreviousrepliescount'] = 'Visa tidigare svar ({$a})';
$string['showsubscribers'] = 'Visa prenumeranter';
$string['showusersearch'] = 'Visa användarsök';
$string['singleforum'] = 'Ett enkelt enskilt diskussionsämne';
$string['smallmessage'] = '{$a->user} gjorde inlägg i {$a->forumname}';
$string['smallmessagedigest'] = 'Sammanfattningen från forum innehåller {$a} meddelanden';
$string['starredonly'] = 'Visa enbart favoritmärkta trådar';
$string['startedby'] = 'Påbörjad av:';
$string['subject'] = 'Ämne';
$string['subscribe'] = 'Prenumerera på detta forum';
$string['subscribeall'] = 'Registrera alla som prenumeranter på detta forum';
$string['subscribed'] = 'Prenumererar';
$string['subscribediscussion'] = 'Prenumerera på denna diskussion';
$string['subscribeenrolledonly'] = 'Det är tyvärr bara registrerade användare som har rätt att prenumerera på foruminlägg med hjälp av e-post.';
$string['subscribenone'] = 'Avregistrera alla som prenumeranter på detta forum';
$string['subscribers'] = 'Prenumeranter';
$string['subscriberstowithcount'] = 'Prenumeranter på "{$a->name}" ({$a->count})';
$string['subscribestart'] = 'Skicka notifieringar till mig när det kommer nya inlägg i detta forum.';
$string['subscribestop'] = 'Skicka INTE notifieringar av inlägg i detta forum  till mig';
$string['subscription'] = 'Prenumeration';
$string['subscription_help'] = '<p>När man har prenumererar på ett forum så betyder det att man får notifieringar om nya inlägg i det forumet via e-post.
(Inläggen skickas ungefär <?php echo $cfg->maxeditingtime/60 ?> minuter
efter det att de har gjorts).</p>
<p>Man kan vanligtvis välja om man vill prenumerera på ett forum eller ej.</p>
<p>Läraren/kursledaren kan dock ställa in ett forum så att
alla deltagare blir prenumeranter.</p>
<p>Det lämpar sig särskilt i Nyhetsforumet och i forum
som används i början på kurser (innan alla har upptäckt att
de kan prenumerera själva).</p>';
$string['subscriptionandtracking'] = 'Prenumeration och spårning';
$string['subscriptionauto'] = 'Automatisk prenumeration';
$string['subscriptiondisabled'] = 'Inaktiverad';
$string['subscriptionforced'] = 'Obligatorisk prenumeration';
$string['subscriptionmode'] = 'Prenumerationsläge';
$string['subscriptionmode_help'] = 'En prenumeration innebär att man får notifieringar av forumsinlägg till sin e-post. Det finns 4 typer av prenumerationer:

* Valfri – initialt ingen prenumeration, men användaren kan själv sätta på den.
* Obligatorisk – alla prenumererar och man kan inte avsluta prenumerationen.
* Automatisk – alla prenumererar initialt, men de kan själva stänga av prenumerationen.
* Inaktiverad – det går inte att prenumerera.

OBS: Om läraren ändrar prenumerationsinställningarna så gäller de nya för framtida elever. Användare som redan finns i kursen behåller sina inställningar.';
$string['subscriptionoptional'] = 'Valfri';
$string['subscriptions'] = 'Prenumerationer';
$string['tagarea_forum_posts'] = 'Foruminlägg';
$string['tagsdeleted'] = 'Forumetiketter har tagits bort';
$string['thisforumhasduedate'] = 'Senaste datum för inlägg i detta forum är {$a}.';
$string['thisforumisdue'] = 'Senaste datum för inlägg i detta forum var {$a}.';
$string['thisforumisthrottled'] = 'Det här forumet tillåter bara ett visst antal inlägg som du kan göra inom en viss tidsperiod. Detta är f n inställt till {$a->blockafter} inlägg under {$a->blockperiod}';
$string['timed'] = 'Tidtagen';
$string['timeddiscussion'] = 'Tidtagen diskussion';
$string['timedhidden'] = 'Tidtagen-status: Dold för studenter';
$string['timedposts'] = 'Tidsbestämda inlägg';
$string['timedvisible'] = 'Tidtagningsstatus: Synlig för alla användare';
$string['timestartenderror'] = 'Slutdatumet kan inte vara tidigare än startdatumet';
$string['togglediscussionmenu'] = 'Växla diskussionsmeny';
$string['togglefullscreen'] = 'Växla helskärmsläge';
$string['togglesettingsdrawer'] = 'Växla inställningspanel';
$string['trackforum'] = 'Spåra olästa inlägg';
$string['tracking'] = 'Spåra';
$string['trackingoff'] = 'Av';
$string['trackingon'] = 'Tvingad';
$string['trackingoptional'] = 'Valfri';
$string['trackingtype'] = 'Spåra lästa inlägga';
$string['trackingtype_help'] = '<p>Om \'spårning av lästa\' för forum är aktiverat kan användare
spåra lästa och olästa meddelanden i forum och diskussionsämnen.
Läraren/kursledaren kan välja att tvinga fram en typ av spårning för
ett forum som använder denna inställning.
</p>

<p>Det finns tre alternativ för den här inställningen:</p>
<ul>
<li> Valfritt [standardmässigt förval]: studenter/elever/deltagare/lärande kan
koppla på eller av spårning för forumet som de vill.</li>
<li>På: Spårning är alltid på.</li>
<li>Av: Spårning är alltid av.</li>
</ul>';
$string['trackreadposts_header'] = 'Spåra nya inlägg i forum';
$string['unlockdiscussion'] = 'Lås upp diskussionen';
$string['unpindiscussion'] = 'Ta bort fastnålningen';
$string['unread'] = 'Oläst';
$string['unreadpost'] = 'Oläst inlägg';
$string['unreadposts'] = 'Olästa inlägg';
$string['unreadpostsnumber'] = '{$a} olästa inlägg';
$string['unreadpostsone'] = '1 oläst inlägg';
$string['unsubscribe'] = 'Avbeställ prenumeration från detta forum';
$string['unsubscribeall'] = 'Avbryt alla prenumerationer på forum';
$string['unsubscribeallconfirm'] = 'Du prenumererar för närvarande på {$a->forums} -forum, och {$a->discussions} diskussioner. Vill du verkligen avsluta prenumerationen på alla forum och diskussioner, och inaktivera diskussions auto-prenumeration?';
$string['unsubscribeallconfirmdiscussions'] = 'Du prenumererar för närvarande på {$a->discussions} diskussioner. Vill du verkligen avsluta prenumerationen på alla diskussioner och inaktivera automatisk prenumeration på diskussioner?';
$string['unsubscribeallconfirmforums'] = 'Du prenumererar för närvarande på {$a->forums} forum. Vill du verkligen avsluta prenumerationen på alla forum och inaktivera diskussions auto-prenumeration?';
$string['unsubscribealldone'] = 'Alla dina prenumerationer på forum har tagits bort. Du kan fortfarande få meddelanden från forum med obligatorisk prenumeration. För att hantera dina inställningar för notifieringar gå till Mina inställningar.';
$string['unsubscribeallempty'] = 'Du är tyvärr inte registrerad som prenumerant på några forum. Om du inte vill ha några fler e-postmeddelanden från den här servern, gå till din profil och inaktivera e-postadressen där.';
$string['unsubscribed'] = 'Avbeställd';
$string['unsubscribediscussion'] = 'Avbeställ prenumerationen från denna diskussion.';
$string['unsubscribediscussionlink'] = 'Avbeställ prenumerationen från denna diskussion: {$a}';
$string['unsubscribelink'] = 'Avbeställ prenumerationen från denna diskussion: {$a}';
$string['unsubscribeshort'] = 'Avregistrera prenumeration';
$string['useexperimentalui'] = 'Använd experimentell nästlad disskussionsvy';
$string['usermarksread'] = 'Markera manuellt ett inlägg som läst';
$string['usernavigation'] = 'Använd navigering';
$string['usersforumposts'] = 'Användarens inlägg';
$string['viewalldiscussions'] = 'Visa alla diskussioner';
$string['viewconversation'] = 'Visa diskussion';
$string['viewgrades'] = 'Visa betyg';
$string['viewparentpost'] = 'Visa överliggande inlägg';
$string['viewthediscussion'] = 'Visa diskussionen';
$string['warnafter'] = 'Gör ett inlägg som varnar för en tröskel';
$string['warnafter_help'] = 'Studenter kan varnas om de närmar sig det maximala antalet inlägg som är tillåtna under en given tidsperiod. Den här inställningen anger när de ska varnas. Användare med kapaciteten mod/forum:postwithoutthrottling är undantagna från den här begränsningen.';
$string['warnformorepost'] = 'Varning!  Det finns mer än ett diskussionämne i det forumet - som använder det senaste.';
$string['yournewquestion'] = 'Din nya fråga';
$string['yournewtopic'] = 'Ditt nya diskussionsämne';
$string['yourreply'] = 'Ditt svar';
