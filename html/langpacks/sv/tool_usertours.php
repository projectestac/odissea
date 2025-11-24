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
 * Strings for component 'tool_usertours', language 'sv', version '4.5'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Över';
$string['actions'] = 'Åtgärder';
$string['appliesto'] = 'Gäller för';
$string['backdrop'] = 'Visa med markering';
$string['backdrop_help'] = 'Du kan använda en bakgrund för att framhäva den del av sidan du pekar på.

Observera: Bakgrunder är inte kompatibla med vissa delar av sidan, som t.ex. navigeringsfältet.';
$string['below'] = 'Under';
$string['block'] = 'Block';
$string['block_named'] = 'Block med namn \'{$a}\'';
$string['cachedef_stepdata'] = 'Steg i den guidade turen';
$string['cachedef_tourdata'] = 'Lista över information om aktiverade guider som hämtas på varje sida';
$string['confirmstepremovalquestion'] = 'Är du säker på att du vill ta bort detta steg?';
$string['confirmstepremovaltitle'] = 'Bekräfta borttagning av steg';
$string['confirmtourremovalquestion'] = 'Är du säker på att du vill ta bort denna guidetur?';
$string['confirmtourremovaltitle'] = 'Bekräfta borttagning av guidetur';
$string['content'] = 'Innehåll';
$string['content_heading'] = 'Innehåll';
$string['content_help'] = 'Innehåll som beskriver steget kan läggas till som oformaterad text, innesluten i flerspråkstaggar (för användning med flerspråksinnehållsfiltret) om det behövs.';
$string['content_type'] = 'Innehållstyp';
$string['content_type_help'] = '* Manuellt - innehållet matas in med en textredigerare
* Språksträng-ID - i formatet <code>strängidentifierare, komponent</code> (utan mellanslag efter kommatecken)';
$string['content_type_langstring'] = 'Språksträng-ID';
$string['content_type_manual'] = 'Manuellt';
$string['cssselector'] = 'CSS-selektor';
$string['defaultvalue'] = 'Standard ({$a})';
$string['delay'] = 'Fördröjning innan steget visas';
$string['delay_help'] = 'Du kan valfritt välja att lägga till en fördröjning innan steget visas.

Den här fördröjningen anges i millisekunder.';
$string['description'] = 'Beskrivning';
$string['description_help'] = 'Beskrivningen av en rundtur kan läggas till som oformaterad text, innesluten i flerspråkstaggar (för användning med flerspråksinnehållsfiltret) om det behövs.

Alternativt kan ett språksträngs-ID anges i formatidentifieraren eller komponenten (utan hakparenteser eller blanksteg efter kommat).';
$string['displaystepnumbers'] = 'Visa stegnummer';
$string['displaystepnumbers_help'] = 'Om stegnummer, t.ex. 1/4, 2/4 etc., ska visas för att indikera längden på användarturen.';
$string['done'] = 'Klar';
$string['duplicatetour'] = 'Kopiera guide';
$string['duplicatetour_name'] = '{$a} (kopia)';
$string['editstep'] = 'Redigerar "{$a}"';
$string['enabled'] = 'Aktiv';
$string['endonesteptour'] = 'Jag förstår';
$string['endtour'] = 'Avsluta den guidade turen';
$string['endtourlabel'] = 'Etikett på knappen "Avsluta guidad tur"';
$string['endtourlabel_help'] = 'Du kan också ange en anpassad etikett för "Avsluta rundturen"-knappen. Standardetiketten är "Jag förstår" för enstegs- och "Avsluta rundturen" för flerstegsguider.

Alternativt kan ett språksträngs-ID anges i formatidentifieraren eller komponenten (utan hakparenteser eller blanksteg efter kommatecknet).';
$string['event_step_shown'] = 'Steg visat';
$string['event_tour_ended'] = 'Den guidade turen avslutades';
$string['event_tour_reset'] = 'Återställ den guidade turen';
$string['event_tour_started'] = 'Guidad tur startad';
$string['exporttour'] = 'Exportera guide';
$string['filter_accessdate'] = 'Åtkomstdatum';
$string['filter_accessdate_enabled'] = 'Aktivera filter för åtkomstdatum';
$string['filter_accessdate_enabled_help'] = 'Visa enbart guiden för nya användare eller användare som nyligen besökt webbplatsen.';
$string['filter_category'] = 'Kategori';
$string['filter_category_help'] = 'Visa guiden på en sida som är associerad med en kurs i den valda kategorin.';
$string['filter_course'] = 'Kurser';
$string['filter_course_help'] = 'Visa guiden på en sida som är associerad med den valda kursen.';
$string['filter_courseformat'] = 'Kursformat';
$string['filter_courseformat_help'] = 'Visa guiden på en sida som är associerad med en kurs i det valda kursformatet.';
$string['filter_cssselector'] = 'CSS-selektor';
$string['filter_cssselector_help'] = 'Visa endast guiden när den angivna CSS-selektorn hittas i sidan.';
$string['filter_date_account_creation'] = 'Kontoskapandedatum inom';
$string['filter_date_first_login'] = 'Användarens första åtkomstdatum inom';
$string['filter_date_last_login'] = 'Användarens senaste åtkomstdatum inom';
$string['filter_header'] = 'Guidefilter';
$string['filter_help'] = 'Välj villkor för vilka guiden kommer att visas. Alla villkor måste uppfyllas för att guiden ska visas för användaren.';
$string['filter_role'] = 'Roll';
$string['filter_role_help'] = 'En guide kan vara begränsad till användare med valda roller i det sammanhang där guiden visas. Att till exempel begränsa en guide för översiktssidan till användare med rollen som student fungerar inte om användarna har rollen som student i en kurs (vilket i allmänhet är fallet). En guide för översiktssidan kan bara begränsas till användare med en systemroll.';
$string['filter_theme'] = 'Tema';
$string['filter_theme_help'] = 'Visa guiden när användaren använder ett av de valda teman.';
$string['importtour'] = 'Importera guide';
$string['invalid_lang_id'] = 'Ogiltigt språksträng-ID';
$string['left'] = 'Vänster';
$string['modifyshippedtourwarning'] = 'Detta är en guide som har levererats tillsammans med Moodle. Alla ändringar du gör kan skrivas över vid nästa webbplatsuppgradering.';
$string['moodle_language_identifier'] = 'Språksträng-ID';
$string['movestepdown'] = 'Flytta nedåt';
$string['movestepup'] = 'Flytta uppåt';
$string['movetourdown'] = 'Flytta ned';
$string['movetourup'] = 'Flytta upp';
$string['name'] = 'Namn';
$string['name_help'] = 'Namnet på en rundtur kan läggas till som oformaterad text, omgiven av flerspråkstaggar (för användning med flerspråksinnehållsfiltret) om det behövs.

Alternativt kan ett språksträngs-ID anges i formatidentifieraren eller komponenten (utan hakparenteser eller blanksteg efter kommat).';
$string['newstep'] = 'Nytt steg';
$string['newtour'] = 'Ny guide';
$string['next'] = 'Nästa';
$string['nextstep'] = 'Nästa';
$string['nextstep_sequence'] = 'Nästa ({$a->position}/{$a->total})';
$string['options_heading'] = 'Alternativ';
$string['orphan'] = 'Visa om målet inte hittas';
$string['orphan_help'] = 'Visa steget om målet inte hittas på sidan.';
$string['pathmatch'] = 'Tillämpa på URL-matchning';
$string['pathmatch_help'] = 'Guider kommer att visas på godtycklig sida vars webbadress matchar detta värde.

Du kan använda tecknet % som jokertecken för att representera vad som helst.
Några exempelvärden är:

* /my/% - för att matcha sidan Översikt
* /course/view.php?id=2 - för att matcha en specifik kurs
* /mod/forum/view.php% - för att matcha forumets diskussionslista
* /user/profile.php% - för att matcha användarprofilsidan

Om du vill visa en guide på Startsidan kan du använda värdet: "FRONTPAGE".';
$string['pausetour'] = 'Pausa';
$string['placement'] = 'Placering';
$string['placement_help'] = 'Ett steg kan placeras ovanför, under, vänster eller höger om målet. Ovan eller under rekommenderas, eftersom dessa anpassas bättre för mobil visning.

Om steget inte får plats på en viss sida på angivet ställe, placeras det automatiskt någon annanstans.';
$string['pluginname'] = 'Guidade turer för användare';
$string['privacy:metadata:preference:completed'] = 'Tidpunkten då en användare senast slutförde en guidad tur.';
$string['privacy:metadata:preference:requested'] = 'Tidpunkten då en användare senast manuellt begärde en guidad tur.';
$string['privacy:request:preference:completed'] = 'Senast markerade du den guidade turen för "{$a->name}" som slutförd  {$a->time}';
$string['privacy:request:preference:requested'] = 'Senast du begärde en guidad tur för "{$a->name}" var "{$a->time}"';
$string['reflex'] = 'Fortsätt vid klick';
$string['reflex_help'] = 'Fortsätt till nästa steg när målet klickas.';
$string['resettouronpage'] = 'Återställ den guidade turen för denna sida';
$string['resumetour'] = 'Återuppta';
$string['right'] = 'Höger';
$string['select_block'] = 'Välj ett block';
$string['selector_defaulttitle'] = 'Ange en beskrivande rubrik';
$string['selectordisplayname'] = 'En CSS-selektor som matchar \'{$a}\'';
$string['selecttype'] = 'Välj stegtyp';
$string['sharedtourslink'] = 'Guidekatalog';
$string['skip'] = 'Hoppa över';
$string['skip_tour'] = 'Hoppa över rundtur';
$string['target'] = 'Mål';
$string['target_block'] = 'Block';
$string['target_heading'] = 'Stegmål';
$string['target_selector'] = 'Selektor';
$string['target_selector_targetvalue'] = 'CSS-selektorer';
$string['target_selector_targetvalue_help'] = 'En CSS-selektor kan användas för att peka ut nästan alla element på sidan. Ett lämpligt målelement kan lätt hittas med hjälp av utvecklarverktygen för din webbläsare.';
$string['target_unattached'] = 'Visa mitt på sidan';
$string['targettype'] = 'Måltyp';
$string['targettype_help'] = 'Varje steg är associerat med en specifik del av sidan - "Målet".

Möjliga måltyper är:

* Block - för visning av ett steg bredvid ett angivet block
* CSS-selektor - för att exakt definiera målområdet med hjälp av CSS
* Visa mitt på sidan - för ett steg som inte behöver associeras med en specifik del av sidan';
$string['title'] = 'Rubrik';
$string['title_help'] = 'Rubriken på ett steg kan läggas till som oformaterad text, omsluten av multilang-taggar (för användning med innehållsfiltret för flera språk) om det behövs.

Alternativt kan ett språksträngs-ID anges i formatidentifieraren, komponenten (utan hakparenteser eller mellanslag efter kommatecknet).';
$string['tour1_content_addingblocks'] = 'I själva verket, tänk efter noga innan du inkluderar eventuella block på dina sidor. Block visas inte i Moodle-appen, så som en allmän regel är det mycket bättre att se till att din webbplats fungerar bra utan några block.';
$string['tour1_content_blockregion'] = 'Det finns fortfarande en block-region här borta. Vi rekommenderar att du tar bort navigerings- och administrationsblocken helt, eftersom all funktionalitet finns på andra ställen i Boost-temat.';
$string['tour1_content_customisation'] = 'Om du vill anpassa utseendet på din webbplats och startsidan använder du inställningsmenyn i hörnet av det här sidhuvudet. Försök att aktivera redigeringen nu.';
$string['tour1_content_end'] = 'Din guidade tur är avslutad. Om du vill se den igen kan du klicka länken längst nere på sidan för att återställa den.
Som administratör för webbplatsen kan du själv skapa liknande guidade turer för dina användare.';
$string['tour1_content_navigation'] = 'Huvudsaklig navigering sker nu via denna navigeringspanel. Innehållet uppdateras beroende på var du befinner dig på webbplatsen. Använd knappen längst upp för att dölja eller visa den.';
$string['tour1_content_welcome'] = 'Välkommen till Temat Boost. Om du har uppgraderat från en tidigare version kanske du tycker att vissa saker ser lite annorlunda ut med det här temat.';
$string['tour1_title_addingblocks'] = 'Lägger till block';
$string['tour1_title_blockregion'] = 'Blockområde';
$string['tour1_title_customisation'] = 'Anpassning';
$string['tour1_title_end'] = 'Slut på den guidade turen';
$string['tour1_title_navigation'] = 'Navigering';
$string['tour1_title_welcome'] = 'Välkommen';
$string['tour2_content_addblock'] = 'Om du slår på redigering kan du lägga till block från navigeringspanelen. Tänk dock noga efter innan du inkluderar eventuella block på dina sidor. Block visas inte i Moodle-appen, så för bästa användarupplevelse är det bättre att se till att din kurs fungerar bra utan några block.';
$string['tour2_content_addingblocks'] = 'Du kan lägga till nya block med hjälp av den här knappen. Tänk dock noga efter innan du inkluderar eventuella block på dina sidor. Block visas inte i Moodle-appen, så för bästa användarupplevelse är det bättre att se till att din kurs fungerar bra utan några block.';
$string['tour2_content_customisation'] = 'Om du vill ändra eventuella kursinställningar använder du inställningsmenyn i hörnet av det här sidhuvudet. Du hittar även en liknande inställningsmeny på startsidan för varje aktivitet. Prova att slå på redigeringen nu.';
$string['tour2_content_end'] = 'Din guidade tur är avslutad. Om du vill se den igen kan du klicka länken längst nere på sidan för att återställa den.
Administratören för webbplatsen kan skapa fler guidade turer för användarna.';
$string['tour2_content_navigation'] = 'Navigeringen sker nu via den här navigeringspanelen. Använd knappen längst upp för att dölja eller visa den. Du kommer att se att det finns länkar för avsnitt i din kurs.';
$string['tour2_content_opendrawer'] = 'Försök öppna navigeringspanelen nu.';
$string['tour2_content_participants'] = 'Här ser du kursdeltagare. Det är också hit du går för att lägga till eller ta bort kursdeltagare.';
$string['tour2_content_welcome'] = 'Välkommen till Boost-temat. Om din webbplats uppgraderats från en tidigare version kanske du tycker att saker ser lite annorlunda ut här på kurssidan.';
$string['tour2_title_addblock'] = 'Lägg till block';
$string['tour2_title_addingblocks'] = 'Lägger till block';
$string['tour2_title_customisation'] = 'Anpassning';
$string['tour2_title_end'] = 'Slut på den guidade turen';
$string['tour2_title_navigation'] = 'Navigering';
$string['tour2_title_opendrawer'] = 'Öppna navigeringspanelen';
$string['tour2_title_participants'] = 'Kursdeltagare';
$string['tour2_title_welcome'] = 'Välkommen';
$string['tour3_content_dashboard'] = 'Översiktssidan har många funktioner som gör det lätt för dig att hitta den information som är viktig.';
$string['tour3_content_displayoptions'] = 'Kurserna kan sorteras efter kursnamn, kortnamn eller senaste åtkomstdatum.

Du kan också välja att visa kurserna i en lista, med sammanfattningsinformation eller i standardvyn \'Kort\'.';
$string['tour3_content_overview'] = 'Blocket Kursöversikt visar alla kurser som du är registrerad på.

Du kan välja om du vill visa alla kurser eller bara dem som pågår just nu, dem som är avslutade eller kommande, eller kurser som du har markerat som favoriter.';
$string['tour3_content_recentcourses'] = 'Blocket Senast besökta kurser visar de kurser som du senast varit aktiv i så att du kan hoppa rätt in i dem igen.';
$string['tour3_content_starring'] = 'Du kan välja att favoritmarkera en kurs för att framhäva den, eller dölja en kurs som inte längre är viktig för dig.

Dessa åtgärder påverkar bara din vy.

Du kan också välja att visa kurserna i en lista eller med sammanfattande information eller standardvyn "kort".';
$string['tour3_content_timeline'] = 'Blocket Tidslinje visar viktiga kommande händelser.

Du kan välja att visa aktiviteter för nästa vecka, nästa månad eller ännu längre fram.

Du kan även visa saker där deadline redan har passerats.';
$string['tour3_title_dashboard'] = 'Min översikt';
$string['tour3_title_displayoptions'] = 'Visa alternativ';
$string['tour3_title_overview'] = 'Kursöversikt';
$string['tour3_title_recentcourses'] = 'Senast besökta kurser';
$string['tour3_title_starring'] = 'Favoritmarkera eller dölj kurser';
$string['tour3_title_timeline'] = 'Blocket Tidslinje';
$string['tour4_content_groupconvo'] = 'Om du är medlem i en grupp inom en kurs och gruppmeddelanden har aktiverats, kan du se dina gruppkonversationer här.

Gruppkonversationer är ett enkelt sätt att kommunicera med varandra i den slutna gruppen.';
$string['tour4_content_icon'] = 'Via denna ikon kommer du åt dina meddelanden från vilken sida som helst.

Om du har olästa meddelanden visar en siffra hur många.

Klicka på ikonen för att öppna meddelandefliken och fortsätt den guidade turen.';
$string['tour4_content_messaging'] = 'Nya meddelandefunktioner inkluderar möjligheten att skicka gruppmeddelanden inom en kurs och bättre kontroll över vem som kan skicka meddelanden till dig.';
$string['tour4_content_settings'] = 'Klicka på kugghjulet för att komma till inställningarna för "Meddelanden". Där kan du välja vilka som får skicka meddelanden till dig.';
$string['tour4_content_starred'] = 'Du kan markera konversationer som favoriter (sätt en stjärna), då hittar du dem lättare.';
$string['tour4_title_groupconvo'] = 'Gruppmeddelanden';
$string['tour4_title_icon'] = 'Att använda "Meddelanden"';
$string['tour4_title_messaging'] = 'Nytt gränssnitt för Meddelanden';
$string['tour4_title_settings'] = 'Meddelandeinställningar';
$string['tour4_title_starred'] = 'Favoriter';
$string['tour_activityinfo_activity_student_content'] = 'Aktivitetsdatum samt vad som måste göras för att slutföra aktiviteten visas på aktivitetssidan.';
$string['tour_activityinfo_activity_student_title'] = 'Nytt: Aktivitetsinformation';
$string['tour_activityinfo_activity_teacher_content'] = 'Aktivitetsdatum och slutförandevillkor visas nu för deltagare på varje aktivitetssida (och eventuellt på kurssidan).

För aktiviteter som kräver att deltagarna manuellt markerar en aktivitet som slutförd visas knappen <em>"Markera som klar"</em> på aktivitetssidan.';
$string['tour_activityinfo_activity_teacher_title'] = 'Nytt: Aktivitetsinformation';
$string['tour_activityinfo_course_student_content'] = 'Aktivitetsdatum och/eller vad som måste göras för att slutföra aktiviteten visas på kurssidan.';
$string['tour_activityinfo_course_student_title'] = 'Nytt: Aktivitetsinformation';
$string['tour_activityinfo_course_teacher_content'] = 'Med de nya kursinställningarna "Visa slutförandevillkor" och "Visa aktivitetsdatum" kan du välja om villkor för aktivitetsslutförande (om angivet) och/eller datum visas för deltagare på kurssidan.';
$string['tour_activityinfo_course_teacher_title'] = 'Nytt: Aktivitetsinformation';
$string['tour_final_step_content'] = 'Din guidade tur är avslutad. Om du vill se den igen kan du klicka länken längst nere på sidan för att återställa den.';
$string['tour_final_step_title'] = 'Slut på den guidade turen';
$string['tour_navigation_course_announcements_teacher_content'] = '@@PIXICON::tour/tour_course_admin_3::tool_usertours@@<br>Publicera viktiga nyheter här.';
$string['tour_navigation_course_announcements_teacher_title'] = 'Något att berätta för alla?';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@@<br>Lägg till nytt innehåll eller redigera befintligt innehåll.';
$string['tour_navigation_course_edit_teacher_title'] = 'Aktivera redigeringsläge';
$string['tour_navigation_course_index_student_content'] = '@@PIXICON::tour/tour_course_student::tool_usertours@@<br>Bläddra igenom aktiviteter och spåra dina framsteg.';
$string['tour_navigation_course_index_student_title'] = 'Hitta rätt';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@@<br>Dra och släpp aktiviteter för att ordna om kursinnehållet.';
$string['tour_navigation_course_index_teacher_title'] = 'Kursindex';
$string['tour_navigation_course_student_tour_des'] = 'Var du kan bläddra igenom aktiviteter i en kurs';
$string['tour_navigation_course_student_tour_name'] = 'Kursindex';
$string['tour_navigation_course_teacher_tour_des'] = 'Redigeringsläge - dra och släpp aktiviteter och publicera meddelanden i en kurs';
$string['tour_navigation_course_teacher_tour_name'] = 'Kursredigering';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br>Den här sidopanelen kan innehålla fler funktioner.';
$string['tour_navigation_dashboard_title'] = 'Expandera för att utforska';
$string['tour_navigation_dashboard_tour_des'] = 'Var block finns på instrumentpanelen';
$string['tour_navigation_dashboard_tour_name'] = 'Blockverktygslåda';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourses::tool_usertours@@<br>Lägg till, kopiera, ta bort och dölj kurser på den här menyn.';
$string['tour_navigation_mycourses_endtourlabel'] = 'Jag förstår';
$string['tour_navigation_mycourses_title'] = 'Kurser och kategorier';
$string['tour_navigation_mycourses_tour_des'] = 'Kurshanteringsalternativ på sidan Mina kurser';
$string['tour_navigation_mycourses_tour_name'] = 'Kurshantering';
$string['tour_resetforall'] = 'Tillståndet hos den guidade turen har återställts. Det kommer åter att visas för alla användare.';
$string['tourconfig'] = 'Guidekonfigurationsfil att importera';
$string['tourisenabled'] = 'Guide aktiv';
$string['tourlist_explanation'] = 'Du kan skapa så många guider du vill och aktivera dem för olika delar av Moodle. Endast en guide kan skapas per sida.';
$string['tours'] = 'Guidade turer';
$string['usertours'] = 'Guidade turer för användare';
$string['usertours:managetours'] = 'Skapa, redigera och ta bort guider';
$string['viewtour_edit'] = 'Du kan <a href="{$a->editlink}">redigera standardinställningarna för guiden</a> och <a href="{$a->resetlink}">tvinga guiden att visas</a> för alla användare igen.';
$string['viewtour_info'] = 'Detta är \'{$a->tourname}\'-guiden. Den gäller för \'{$a->path}\'.';
