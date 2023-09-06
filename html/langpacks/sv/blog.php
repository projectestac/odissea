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
 * Strings for component 'blog', language 'sv', version '4.1'.
 *
 * @package     blog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Nytt inlägg';
$string['addnewexternalblog'] = 'Registrera en extern blogg';
$string['assocdescription'] = 'Om du skriver om en kurs- eller aktivitetsmodul väljer du dem här.';
$string['associated'] = 'Kopplad till {$a}';
$string['associatewithcourse'] = 'Blogg om kurs {$a->coursename}';
$string['associatewithmodule'] = 'Blogg om  {$a->modtype}: {$a->modname}';
$string['association'] = 'Koppling';
$string['associations'] = 'Kopplingar';
$string['associationunviewable'] = 'Det här inlägget kan inte ses av andra förrän en kurs associerats med det eller att \'Publicera till\'-fältet ändrats';
$string['autotags'] = 'Lägg till de här etiketterna';
$string['autotags_help'] = 'Skriv in en eller flera lokala etiketter (separerade med kommatecken) som du vill automatiskt ska läggas till varje blogginlägg som kopieras från den externa bloggen in i din lokala blogg.';
$string['backupblogshelp'] = 'Om detta är aktiverat så kommer bloggar att tas med i automatiska säkerhetskopieringar på webbplatsnivå.';
$string['blockexternalstitle'] = 'Externa bloggar';
$string['blog'] = 'Blogg';
$string['blogaboutthis'] = 'Blogga om det här {$a->type}';
$string['blogaboutthiscourse'] = 'Lägg till ett inlägg om den här kursen';
$string['blogaboutthismodule'] = 'Lägg till ett inlägg om det här {$a}';
$string['blogadministration'] = 'Bloggadministration';
$string['blogdeleteconfirm'] = 'Ta bort \'{$a}\'?';
$string['blogdisable'] = 'Bloggande är inaktiverat!';
$string['blogentries'] = 'Blogginlägg';
$string['blogentriesabout'] = 'Blogginlägg om {$a}';
$string['blogentriesbygroupaboutcourse'] = 'Blogginlägg om {$a->course} av {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'Blogginlägg om {$a->mod} av {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'Blogginlägg om {$a->course} av {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'Blogginlägg om denna {$a->mod} av {$a->user}';
$string['blogentrybyuser'] = 'Blogginlägg av {$a}';
$string['blogpreferences'] = 'Blogginställningar';
$string['blogs'] = 'Bloggar';
$string['blogscourse'] = 'Kursbloggar';
$string['blogssite'] = 'Webbplatsbloggar';
$string['blogtags'] = 'Bloggetiketter';
$string['cannotviewcourseblog'] = 'Du har inte behörighet att visa bloggar i denna kurs';
$string['cannotviewcourseorgroupblog'] = 'Du har inte behörighet att visa bloggar i denna kurs/grupp';
$string['cannotviewsiteblog'] = 'Du har inte behörighet att visa alla webbplatsbloggar';
$string['cannotviewuserblog'] = 'Du har inte behörighet att läsa användarbloggar';
$string['configexternalblogcrontime'] = 'Hur ofta Moodle kontrollerar de externa bloggarna efter nya inlägg.';
$string['configmaxexternalblogsperuser'] = 'Antalet externa bloggar varje användare får länka till deras Moodle blogg.';
$string['configuseblogassociations'] = 'Aktiverar associationen mellan blogginlägg och kurser samt kursmoduler.';
$string['configuseexternalblogs'] = 'Möjliggör för användare att ange externa bloggflöden. Moodle kontrollerar regelbundet dessa bloggflöden och kopierar nya poster till den lokala användarens blogg.';
$string['courseblog'] = 'Kursblogg: {$a}';
$string['courseblogdisable'] = 'Kursbloggar är inte aktiverade';
$string['courseblogs'] = 'Användare kan endast se bloggar för kursdeltagare';
$string['deleteblogassociations'] = 'Ta bort kopplingar mellan bloggar';
$string['deleteblogassociations_help'] = 'Om ikryssad så kommer blogginlägg inte längre vara associerade med den här kursen, några kursaktiviteter eller resurser.  Själva blogginläggen kommer inte tas bort.';
$string['deleteentry'] = 'Ta bort inlägg';
$string['deleteexternalblog'] = 'Avregistrera den här externa bloggen';
$string['deleteotagswarn'] = 'Är du säker på att du vill ta bort de här etiketterna från alla blogginlägg och ta bort dem från systemet?';
$string['description'] = 'Beskrivning';
$string['description_help'] = 'Skriv in en mening eller två som sammanfattar innehållet i din externa blogg. (Om ingen beskrivning tillhandahålls så kommer beskrivningen från din externa blogg användas).';
$string['donothaveblog'] = 'Du har tyvärr ingen egen blogg.';
$string['editentry'] = 'Redigera blogginlägg';
$string['editexternalblog'] = 'Redigera den här externa bloggen';
$string['emptybody'] = 'Brödtexten i ett blogginlägg kan inte vara tom';
$string['emptyrssfeed'] = 'Webbadressen som du angav pekar inte på ett giltigt RSS-flöde';
$string['emptytitle'] = 'Titeln för ett blogginlägg kan inte vara tom';
$string['emptyurl'] = 'Du måste ange en webbadress till ett giltigt RSS-flöde';
$string['entrybody'] = 'Bloggtext';
$string['entrybodyonlydesc'] = 'Beskrivning';
$string['entryerrornotyours'] = 'Detta inlägg är inte ditt';
$string['entrysaved'] = 'Ditt inlägg har sparats';
$string['entrytitle'] = 'Titel';
$string['eventblogassociationadded'] = 'Bloggassociation skapad';
$string['eventblogassociationdeleted'] = 'Bloggassociation borttagen';
$string['eventblogentriesviewed'] = 'Blogginlägg visade';
$string['eventblogexternaladded'] = 'Extern blogg registrerad';
$string['eventblogexternalremoved'] = 'Extern blogg avregistrerad';
$string['eventblogexternalupdated'] = 'Extern blogg uppdaterad';
$string['evententryadded'] = 'Blogginlägg skapat';
$string['evententrydeleted'] = 'Blogginlägg borttaget';
$string['evententryupdated'] = 'Blogginlägg uppdaterat';
$string['eventexternalblogsviewed'] = 'Externt registrerade bloggar visade';
$string['externalblogcrontime'] = 'Cron-schema för extern blogg';
$string['externalblogdeleteconfirm'] = 'Avregistrera den här externa bloggen?';
$string['externalblogdeleted'] = 'Ej registrerad extern blogg';
$string['externalblogs'] = 'Externa bloggar';
$string['feedisinvalid'] = 'Det här inflödet är ogiltigt';
$string['feedisvalid'] = 'Det här inflödet är giltigt';
$string['filterblogsby'] = 'Filtera inlägg av...';
$string['filtertags'] = 'Filteretiketter';
$string['filtertags_help'] = 'Du kan använda den här funktionen för att filtrera inläggen som du vill använda. Om du specificerar etiketter här (separerade med kommatecken) så kommer endast inläggen med dessa etiketter kopieras från den externa bloggen.';
$string['groupblog'] = 'Gruppblogg: {$a}';
$string['groupblogdisable'] = 'Gruppblogg är inte aktiverat';
$string['groupblogentries'] = 'Blogginlägg associerade med {$a->coursename} från gruppen {$a->groupname}';
$string['groupblogs'] = 'Användare kan endast se bloggar av gruppdeltagare';
$string['incorrectblogfilter'] = 'Ogiltig bloggfiltertyp angiven';
$string['intro'] = 'Denna RSS genererades automatiskt från en eller flera bloggar';
$string['invalidgroupid'] = 'Ogiltigt gruppID';
$string['invalidurl'] = 'Det går inte att nå den här URLen';
$string['linktooriginalentry'] = 'Länk till ursprungligt blogginlägg';
$string['maxexternalblogsperuser'] = 'Maximalt antal externa bloggar per användare';
$string['myprofileuserblogs'] = 'Mina blogginlägg';
$string['name'] = 'Namn';
$string['name_help'] = 'Ange ett beskrivande namn för din externa blogg. (Om inget namn anges, kommer titeln på din externa blogg att användas).';
$string['noentriesyet'] = 'Inga synliga inlägg här';
$string['noguestpost'] = 'Gäster kan ej skriva bloggar!';
$string['nopermissionstodeleteentry'] = 'Du saknar behörighet för att ta bort detta blogginlägg';
$string['norighttodeletetag'] = 'Du har inga rättigheter att ta bort denna etikett - {$a}';
$string['nosuchentry'] = 'Inget sådant inlägg i blogg';
$string['notallowedtoedit'] = 'Du är inte tillåten att ändra detta inlägg';
$string['numberofentries'] = 'Inlägg: {$a}';
$string['numberoftags'] = 'Antal etiketter som visas';
$string['page-blog-edit'] = 'Redigeringssidor för bloggar';
$string['page-blog-index'] = 'Sidor med blogglistor';
$string['page-blog-x'] = 'Alla bloggsidor';
$string['pagesize'] = 'Inlägg per sida';
$string['permalink'] = 'Permalänk';
$string['personalblogs'] = 'Användare kan endast se deras egen blogg';
$string['preferences'] = 'Blogginställningar';
$string['privacy:metadata:core_comments'] = 'Kommentarer associerade med blogginlägg';
$string['privacy:metadata:core_files'] = 'Filer bifogade till blogginlägg';
$string['privacy:metadata:core_tag'] = 'Etiketter associerade med blogginlägg';
$string['privacy:metadata:external'] = 'Länk till externt RSS-flöde';
$string['privacy:metadata:external:description'] = 'Beskrivning för flödet';
$string['privacy:metadata:external:filtertags'] = 'Etikettlistan att filtrera inlägg med';
$string['privacy:metadata:external:name'] = 'Flödets namn';
$string['privacy:metadata:external:timefetched'] = 'Tidpunkt för senaste hämtningen av flödet';
$string['privacy:metadata:external:timemodified'] = 'Tidpunkt för senaste ändringen av associationen';
$string['privacy:metadata:external:url'] = 'Flödes-URL';
$string['privacy:metadata:external:userid'] = 'Användar-ID för användaren som skapade det externa blogginlägget';
$string['privacy:metadata:post'] = 'Informationen som är relaterad till blogginlägg';
$string['privacy:metadata:post:content'] = 'Innehållet i ett externt blogginlägg';
$string['privacy:metadata:post:created'] = 'Datum då blogginlägget skapades';
$string['privacy:metadata:post:lastmodified'] = 'Datum för senaste ändring av blogginlägget';
$string['privacy:metadata:post:publishstate'] = 'Om inlägget kan ses av andra, eller ej';
$string['privacy:metadata:post:subject'] = 'Rubrik för blogginlägget';
$string['privacy:metadata:post:summary'] = 'Texten i blogginlägget';
$string['privacy:metadata:post:uniquehash'] = 'Unik identifierare för ett externt blogginlägg, vanligtvis en URL';
$string['privacy:metadata:post:userid'] = 'Användar-ID för användaren som skapade blogginlägget';
$string['privacy:metadata:post:usermodified'] = 'Användaren som senaste ändrade inlägget';
$string['privacy:path:blogassociations'] = 'Associerade blogginlägg';
$string['privacy:unknown'] = 'Okänd';
$string['publishto'] = 'Publicera för';
$string['publishto_help'] = '<p>Det finns tre möjliga inställningar här</p>

<p><b>Du själv (utkast)</b> - Bara du och administratörer kan se inlägget.</p>

<p><b>Vem som helst på denna webbplats</b> - Alla som är registrerade användare på sajten kan se inlägget.</p>

<p><b>Vem som helst (Även för gäster)</b> - Alla, inklusive gäster, kan se inlägget.</p>';
$string['publishtocourse'] = 'Användare som delar en kurs med dig';
$string['publishtocourseassoc'] = 'Deltagare i den kopplade kursen';
$string['publishtocourseassocparam'] = 'Deltagare i {$a}';
$string['publishtogroup'] = 'Användare som delar en grupp med dig';
$string['publishtogroupassoc'] = 'Dina gruppmedlemmar i den kopplade kursen';
$string['publishtogroupassocparam'] = 'Dina gruppmedlemmar i {$a}';
$string['publishtonoone'] = 'Du själv (utkast)';
$string['publishtosite'] = 'Alla på denna webbplats';
$string['publishtoworld'] = 'Vem som helst (även gäster)';
$string['readfirst'] = 'Läs detta först';
$string['relatedblogentries'] = 'Relaterade inlägg i bloggar';
$string['retrievedfrom'] = 'Hämtad från';
$string['rssfeed'] = 'RSS-flöde för Blogg';
$string['searchterm'] = 'Sök: {$a}';
$string['settingsupdatederror'] = 'Ett fel har hänt, blogginställningar kunde inte uppdateras';
$string['siteblogdisable'] = 'Blogg på webbplatsnivå är inte aktiverad';
$string['siteblogheading'] = 'Webbplatsblogg';
$string['siteblogs'] = 'Användare på sajten kan se alla inlägg';
$string['tagdatelastused'] = 'Datum för senaste användning av etikett';
$string['tagparam'] = 'Etikett: {$a}';
$string['tags'] = 'Etiketter';
$string['tagsort'] = 'Sortera etiketter efter';
$string['tagtext'] = 'Etikettnamn';
$string['timefetched'] = 'Tidpunkt för senaste synk';
$string['timewithin'] = 'Visa etiketter som använts inom detta antal dagar';
$string['updateentrywithid'] = 'Uppdaterar inlägg';
$string['url'] = 'URL för RSS-flöde';
$string['url_help'] = 'Skriv in URLen för RSS inflöde från din externa blogg.';
$string['useblogassociations'] = 'Aktivera kopplingar mellan bloggar';
$string['useexternalblogs'] = 'Aktivera externa bloggar';
$string['userblog'] = 'Användarblogg: {$a}';
$string['userblogentries'] = 'Inlägg i blogg av {$a}';
$string['valid'] = 'Giltig';
$string['viewallblogentries'] = 'Alla inlägg om detta {$a}';
$string['viewallmodentries'] = 'Visa alla inlägg om detta {$a->type}';
$string['viewallmyentries'] = 'Visa alla mina inlägg';
$string['viewblogentries'] = 'Inlägg om detta {$a}';
$string['viewblogsfor'] = 'Visa alla inlägg för...';
$string['viewcourseblogs'] = 'Visa alla inlägg för den här kursen';
$string['viewentriesbyuseraboutcourse'] = 'Visa inlägg om den här kursen av {$a}';
$string['viewgroupblogs'] = 'Visa inlägg för grupp...';
$string['viewgroupentries'] = 'Gruppinlägg';
$string['viewmodblogs'] = 'Visa inlägg för modul';
$string['viewmodentries'] = 'Inlägg av typ modul';
$string['viewmyentries'] = 'Mina inlägg';
$string['viewmyentriesaboutcourse'] = 'Visa mina inlägg om den här kursen';
$string['viewmyentriesaboutmodule'] = 'Visa mina inlägg om detta {$a}';
$string['viewsiteentries'] = 'Visa alla inlägg ';
$string['viewuserentries'] = 'Visa alla inlägg av {$a}';
$string['worldblogs'] = 'Alla på internet kan läsa inlägg som gjorts tillgängliga för vem som helst';
$string['wrongexternalid'] = 'Felaktigt externt blogg-ID';
$string['wrongpostid'] = 'Felaktigt ID för inlägg i blogg';
