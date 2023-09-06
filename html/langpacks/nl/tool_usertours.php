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
 * Strings for component 'tool_usertours', language 'nl', version '4.1'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Bovenstaand';
$string['actions'] = 'Acties';
$string['appliesto'] = 'Geldt voor';
$string['backdrop'] = 'Toon met achtergrond';
$string['backdrop_help'] = 'Je kunt een achtergrond gebruiken om het deel van de pagina waarnaar je verwijst te beklemtonen.

Merk op: achtergronden zijn niet compatibel met sommige delen van de pagina, zoals de navigatiebalk';
$string['below'] = 'Beneden';
$string['block'] = 'Blok';
$string['block_named'] = 'Blok genaamd \'{$a}\'';
$string['cachedef_stepdata'] = 'Lijst van rondleidingsstappen';
$string['cachedef_tourdata'] = 'Lijst van ingeschakelde gebruikersrondleidingsinformatie die van elke pagina wordt opgehaald';
$string['confirmstepremovalquestion'] = 'Weet je zeker dat je deze stap wil verwijderen?';
$string['confirmstepremovaltitle'] = 'Bevestig verwijderen van stap';
$string['confirmtourremovalquestion'] = 'Weet je zeker dat je deze rondleiding wil verwijderen?';
$string['confirmtourremovaltitle'] = 'Bevestig verwijderen van rondleiding';
$string['content'] = 'Inhoud';
$string['content_heading'] = 'Inhoud';
$string['content_help'] = 'Inhoud die de stap beschrijft kan als tekst toegevoegd worden, ingebed in multilang tags (om te gebruiken met de multilang filter) indien vereist.';
$string['content_type'] = 'Inhoudstype';
$string['content_type_help'] = '* Handmatig - inhoud wordt ingevoerd met een teksteditor
* Taalstring ID - in het format string identifier,component (zonder spatie na de komma)';
$string['content_type_langstring'] = 'Taalstring ID';
$string['content_type_manual'] = 'Handmatig';
$string['cssselector'] = 'CSS selector';
$string['defaultvalue'] = 'Standaard ({$a})';
$string['delay'] = 'Wachttijd voor het tonen van de stap';
$string['delay_help'] = 'Je kunt optioneel een wachttijd toevoegen voor de stap getoond wordt.
Deze wachttijd is in milliseconden.';
$string['description'] = 'Beschrijving';
$string['description_help'] = 'De beschrijving van een rondleiding kan worden toegevoegd als platte tekst, ingesloten in multilang tags (voor gebruik met het filter voor meertalige inhoud) indien nodig.

Daarnaast kan een taalstring ID worden ingevoerd in het format identifier,component (zonder haken of spatie na de komma).';
$string['displaystepnumbers'] = 'Toon stap-aantallen';
$string['displaystepnumbers_help'] = 'Of het aantal overblijvende stappen , bijvoorbeeld 1/4, 2/4, ... wordt getoond in de rondleiding-navigatie.';
$string['done'] = 'Klaar';
$string['duplicatetour'] = 'Dubbele rondleiding';
$string['duplicatetour_name'] = '{$a} (kopie)';
$string['editstep'] = '"{$a}" bewerken';
$string['enabled'] = 'Ingeschakeld';
$string['endonesteptour'] = 'Begrepen';
$string['endtour'] = 'Einde rondleiding';
$string['endtourlabel'] = 'Label op de einde rondleiding-knop';
$string['endtourlabel_help'] = 'Je kunt een aangepast label op de einde rondleidng-knop zetten. Het standaard label is "Begrepen" voor een enkele stap rondleiding en "Einde rondleiding" voor een meerdere stappen rondleiding.

Als alternatief kun je ook een taalstring-ID ingeven in de opmaak identifier,component (zonder haakjes of spatie achter de komma).';
$string['event_step_shown'] = 'Getoonde stap';
$string['event_tour_ended'] = 'Rondleiding beëindigd';
$string['event_tour_reset'] = 'Rondleiding terug instellen';
$string['event_tour_started'] = 'Rondleiding gestart';
$string['exporttour'] = 'Rondleiding exporteren';
$string['filter_accessdate'] = 'Toegangsdatum';
$string['filter_accessdate_enabled'] = 'Filter voor toegangsdatum inschakelen';
$string['filter_accessdate_enabled_help'] = 'Laat de rondleiding alleen zien aan nieuwe gebruikers of gebruikers die de site onlangs hebben bezocht.';
$string['filter_category'] = 'Categorie';
$string['filter_category_help'] = 'Toon de rondleiding op een pagina die geassocieerd is met een cursus binnen de geselecteerde categorie.';
$string['filter_course'] = 'Cursussen';
$string['filter_course_help'] = 'Toon de rondleiding op een pagina die geassocieerd is met de geselecteerde cursus.';
$string['filter_courseformat'] = 'Cursusindeling';
$string['filter_courseformat_help'] = 'Toon de rondleiding op een pagina die geassocieerd is met een cursus die de geselecteerde cursusindeling gebruikt.';
$string['filter_cssselector'] = 'CSS-selector';
$string['filter_cssselector_help'] = 'Geef de rondleiding alleen weer als de opgegeven CSS-selector op de pagina is gevonden.';
$string['filter_date_account_creation'] = 'Aanmaakdatum van gebruikersaccount binnen';
$string['filter_date_first_login'] = 'Eerste toegangsdatum van de gebruiker binnen';
$string['filter_date_last_login'] = 'Laatste toegangsdatum van gebruiker binnen';
$string['filter_header'] = 'Rondleidingsfilters';
$string['filter_help'] = 'Selecteer de voorwaarden waaronder de rondleiding getoond zal worden. Alle filters moeten overeenkomen om een rondleiding aan een gebruiker te kunnen laten zien.';
$string['filter_role'] = 'Rol';
$string['filter_role_help'] = 'Een rondleiding kan beperkt worden tot gebruikers met geselecteerde rollen wanneer de rondleiding getoond wordt. Zo zal bijvoorbeeld het beperken van een rondleiding van de startpagina tot gebruikers met de leerling-rol niet werken omdat gebruikers de rol van leerling enkel in een cursus hebben. Een rondleiding van de startpagina kan enkel beperkt worden tot gebruikers met een systeem-rol.';
$string['filter_theme'] = 'Thema';
$string['filter_theme_help'] = 'Toon de rondleiding wanneer de gebruiker één van volgende thema\'s gebruikt.';
$string['importtour'] = 'Importeer rondleiding';
$string['invalid_lang_id'] = 'Ingeldige taalstring-ID';
$string['left'] = 'Links';
$string['modifyshippedtourwarning'] = 'Dit is een rondleiding voor gebruikers die meegeleverd wordt met Moodle. Alle wijzigingen die je maakt kunnen overschreven worden tijdens de volgende upgrade van je site.';
$string['moodle_language_identifier'] = 'Taalstring-ID';
$string['movestepdown'] = 'Stap naar beneden';
$string['movestepup'] = 'Stap omhoog';
$string['movetourdown'] = 'Rondleiding naar beneden';
$string['movetourup'] = 'Rondleiding omhoog';
$string['name'] = 'Naam';
$string['name_help'] = 'De naam van een rondleiding kan toegevoegd worden als platte tekst of  ingesloten in multilang-tags (voor gebruik met de multi-language inhoudsfilter) indien nodig.

Als alternatief mag er ook een taalstring-ID ingegeven worden in het formaat identifier,component (zonder haakjes of spatie na de komma).';
$string['newstep'] = 'Nieuwe stap';
$string['newtour'] = 'Maak een nieuwe rondleiding';
$string['next'] = 'Volgende';
$string['nextstep'] = 'Volgende';
$string['nextstep_sequence'] = 'Volgende ({$a->position}/{$a->total})';
$string['options_heading'] = 'Opties';
$string['orphan'] = 'Toon als het doel niet gevonden wordt';
$string['orphan_help'] = 'Toon deze stap als het doel niet gevonden wordt op de pagina.';
$string['pathmatch'] = 'Toepassen op overeenkomende pagina-URL';
$string['pathmatch_help'] = 'Rondleidingen zullen getoond worden op elke pagina waarvan de URL overeenkomt met deze waarde.

Je kunt het %-teken als jokerteken gebruiken. Enkele voorbeeldwaarden:

* /my/% - komt overeen met de startpagina
*/course/view.php?id=2 - komt overeen met een bepaalde cursus
* /mod/forum/view.php% - komt overeen met een lijst met forumdiscussies
* /user/profile.php% - komt overeen met de profielpagina van een gebruiker

Als je een rondleiding op de site startpagina wil tonen, dan kun je de waarde "FRONTPAGE" gebruiken.';
$string['pausetour'] = 'Pauze';
$string['placement'] = 'Plaatsing';
$string['placement_help'] = 'Een stap kan boven, onder links of rechts van het doel geplaatst worden. Boven of onder wordt aanbevolen omdat die beter passen op mobiele schermen.

Als de stap niet past op een bepaalde pagina op de opgegeven plaats, dan zal die automatisch ergens anders weergegeven worden.';
$string['pluginname'] = 'Rondleidingen';
$string['previousstep'] = 'Vorige';
$string['privacy:metadata:preference:completed'] = 'Het tijdstip waarop een gebruiker laatst een gebruikersrondleiding voltooide.';
$string['privacy:metadata:preference:requested'] = 'Het tijdstip waarop een gebruiker laatst manueel op een gebruikersrondleiding vroeg';
$string['privacy:request:preference:completed'] = 'Je hebt de "{$a->name}" gebruikersrondleiding als voltooid gemarkeerd op {$a->time}';
$string['privacy:request:preference:requested'] = 'Je hebt de "{$a->name}" gebruikersrondleidng laatst gevraagd op  {$a->time}';
$string['reflex'] = 'Ga verder met een klik';
$string['reflex_help'] = 'Ga verder naar de volgende stap wanneer op het doel geklikt wordt.';
$string['resettouronpage'] = 'Rondleiding opnieuw bekijken';
$string['resumetour'] = 'Ga verder';
$string['right'] = 'Rechts';
$string['select_block'] = 'Selecteer een blok';
$string['selector_defaulttitle'] = 'Geef een beschrijvende tekst';
$string['selectordisplayname'] = 'Een CSS-selector die overeenkomt met \'{$a}\'';
$string['selecttype'] = 'Selecteer een stap-type';
$string['sharedtourslink'] = 'Rondleidingsopslagruimte';
$string['skip'] = 'Sla over';
$string['skip_tour'] = 'Rondleiding overslaan';
$string['target'] = 'Doel';
$string['target_block'] = 'Blok';
$string['target_heading'] = 'Stap doel';
$string['target_selector'] = 'Selector';
$string['target_selector_targetvalue'] = 'CSS selectors';
$string['target_selector_targetvalue_help'] = 'Een CSS-selector kan gebruikt worden als doel voor nagenoeg elk element op de pagina. De juiste selector kan gemakkelijk gevonden worden door de ontwikkeltools van je browser te gebruiken.';
$string['target_unattached'] = 'Toon in het midden van de pagina';
$string['targettype'] = 'Doeltype';
$string['targettype_help'] = 'Elke stap wordt geassocieerd met een deel van de pagina - het doel. Doeltypes zijn:

* Blok - om de volgende stap te tonen naast een bepaald blok
* CSS-selector - om accuraat een doelzone te bepalen door gebruik te maken van CSS
* Toon in het midden van de pagina - voor eens tap die niet geassocieerd hoeft te worden met een bepaald deel van de pagina.';
$string['title'] = 'Titel';
$string['title_help'] = 'De titel van een stap kan toegevoegd worden als tekst, ingesloten in multilang tags (om te gebruiken met de multilang inhoudsfilter) indien nodig.

Er mag ook een taalstringID ingegeven worden in het formaat identificatie,component (zonder haakjes of spaties na de komma).';
$string['tour1_content_addingblocks'] = 'Denk goed na over het plaatsen van blokken op je pagina\'s. Blokken worden niet getoond op de Mobiele app, dus als algemene regel is het beter om er voor te zorgen dat je site goed werkt zonder blokken.';
$string['tour1_content_blockregion'] = 'Er is hier nog een blok-zone. We raden aan om het navigatie- en instellingenblok volledig te verwijderen omdat alle functionaliteit op andere plaatsen zit in het Boost thema.';
$string['tour1_content_customisation'] = 'Om het uiterlijk van je site en je site startpagina aan te passen kun je het instellingenmenu gebruiken in de hoek van deze kopregel. Probeer nu bewerken in te schakelen.';
$string['tour1_content_end'] = 'Dit is het einde van jouw rondleiding. Dit zal niet meer getoond worden, tenzij je deze opnieuw instelt door de link te gebruiken onderaan de pagina. Als beheerder kun je ook rondleidingen zoals deze maken!';
$string['tour1_content_navigation'] = 'De belangrijkste navigatie gebeurt nu door dit navigatiepaneel. De inhoud past zich aan afhankelijk van jouw positie op de site. Gebruik de knoppen bovenaan om te verbergen of te tonen.';
$string['tour1_content_welcome'] = 'Welkom in het Boost thema. Als je Moodle vroeger al gebruikt hebt, dan zul je opmerken dat sommige zaken er nu wat anders uitzien.';
$string['tour1_title_addingblocks'] = 'Blokken toevoegen';
$string['tour1_title_blockregion'] = 'Blokkenzone';
$string['tour1_title_customisation'] = 'Aanpassing';
$string['tour1_title_end'] = 'Einde van de rondleiding';
$string['tour1_title_navigation'] = 'Navigatie';
$string['tour1_title_welcome'] = 'Welkom';
$string['tour2_content_addblock'] = 'Als je bewerken inschakelt, dan kun je blokken toevoegen vanaf het navigatiepaneel. Wees echter voorzichtig met het toevoegen van blokken aan je pagina\'s. Blokken worden niet getoond op de Mobiele app. Voor de beste gebruikerservaring kun je er dus best voor zorgen dat je cursus goed werkt zonder blokken.';
$string['tour2_content_addingblocks'] = 'Met deze knop kun je blokken toevoegen aan deze pagina. Wees echter voorzichtig met het toevoegen van blokken aan je pagina\'s. Blokken worden niet getoond op Mobiele app. Voor de beste gebruikerservaring kun je er dus best voor zorgen dat je cursus goed werkt zonder blokken.';
$string['tour2_content_customisation'] = 'Om de cursusinstellingen te wijzigen kun je het instellingenmenu gebruiken in de hoek van deze balk. Je zult gelijkaardige instellingenmenu\'s vinden op de startpagina van elke activiteit. Probeer nu bewerken in te schakelen.';
$string['tour2_content_end'] = 'Dit is het einde van jouw rondleiding,. Dit zal niet meer getoond worden, tenzij je deze opnieuw instelt door de link te gebruiken onderaan de pagina. De site-beheerder kan ook rondleidingen zoals deze maken, specifiek voor deze site, indien nodig.';
$string['tour2_content_navigation'] = 'De belangrijkste navigatie gebeurt vanaf nu via dit navigatiepaneel. Gebruik de knop bovenaan om deze te tonen of te verbergen. Je zult zien dat er links zijn voor de secties van je cursus.';
$string['tour2_content_opendrawer'] = 'Probeer nu het navigatiepaneel te openen.';
$string['tour2_content_participants'] = 'Bekijk hier je deelnemers. Dit is ook de plek waar je leerlingen gaat toevoegen of verwijderen.';
$string['tour2_content_welcome'] = 'Welkom bij het Boost-thema. Als je site geüpgraded is van een oudere versie, dan zul je opmerken dat de cursuspagina er nu wat anders uit ziet.';
$string['tour2_title_addblock'] = 'Voeg een blok toe';
$string['tour2_title_addingblocks'] = 'Blokken toevoegen';
$string['tour2_title_customisation'] = 'Aanpassingen';
$string['tour2_title_end'] = 'Einde van de rondleiding';
$string['tour2_title_navigation'] = 'Navigatie';
$string['tour2_title_opendrawer'] = 'Open het navigatiepaneel';
$string['tour2_title_participants'] = 'Cursusdeelnemers';
$string['tour2_title_welcome'] = 'Welkom';
$string['tour3_content_dashboard'] = 'Je nieuwe startpagina heeft veel functies om je gemakkelijk toegang te geven tot de informatie die voor jou het belangrijkst is.';
$string['tour3_content_displayoptions'] = 'Cursussen kunnen worden gesorteerd op cursusnaam of op de laatste toegangsdatum.

Je kunt er ook voor kiezen de cursussen in een lijst weer te geven, met samenvattingsinformatie of de standaard \'kaartweergave\'.';
$string['tour3_content_overview'] = 'Het blok met het cursusoverzicht geeft alle cursussen weer waarvoor je bent ingeschreven.

Je kunt ervoor kiezen om cursussen te laten zien die momenteel lopen, of in het verleden of de toekomst, of cursussen die je met een ster hebt gemarkeerd.';
$string['tour3_content_recentcourses'] = 'Het blok \'Recente toegang\' toont de cursussen die je het laatst hebt bezocht, zodat je meteen weer kunt beginnen.';
$string['tour3_content_starring'] = 'Je kunt ervoor kiezen om een cursus te markeren om hem te laten opvallen, of om een cursus te verbergen die niet langer belangrijk voor je is.

Deze acties hebben alleen invloed op jouw startpagina.

Je kunt er ook voor kiezen de cursussen in een lijst weer te geven, of met samenvattingsinformatie, of de standaard \'kaartweergave\'.';
$string['tour3_content_timeline'] = 'Het tijdlijnblok toont je belangrijke aankomende gebeurtenissen.

Je kunt ervoor kiezen activiteiten in de volgende week, maand of verder in de toekomst weer te geven.

Je kunt ook items tonen die te laat zijn.';
$string['tour3_title_dashboard'] = 'Jouw startpagina';
$string['tour3_title_displayoptions'] = 'Weergaveopties';
$string['tour3_title_overview'] = 'Cursusoverzicht';
$string['tour3_title_recentcourses'] = 'Onlangs geopende cursussen';
$string['tour3_title_starring'] = 'Cursussen weergeven en verbergen';
$string['tour3_title_timeline'] = 'Tijdlijnblok';
$string['tour4_content_groupconvo'] = 'Als je lid bent van een groep met groepsberichten ingeschakeld, dan zie je hier groepsgesprekken.

Via cursusgroepgesprekken kun je met de anderen in jouw groep communiceren op een private en handige plek.';
$string['tour4_content_icon'] = 'Je kunt vanaf elke pagina toegang krijgen tot je berichten met behulp van dit pictogram.

Als je ongelezen berichten hebt, wordt hier ook het aantal ongelezen berichten weergegeven.

Klik op het pictogram om het berichtenpaneel te openen en door te gaan met de rondleiding.';
$string['tour4_content_messaging'] = 'Bij de nieuwe mogelijkheden voor berichten zit de  mogelijkheid voor groepsberichten binnen een cursus en een betere controle over wie jou berichten kan sturen.';
$string['tour4_content_settings'] = 'Je hebt toegang tot je berichtinstellingen via het tandwielpictogram. Met een nieuwe privacy-instelling kun je beperken wie je berichten kan sturen.';
$string['tour4_content_starred'] = 'Je kunt ervoor kiezen om bepaalde gesprekken te markeren om ze gemakkelijker te vinden.';
$string['tour4_title_groupconvo'] = 'Groepsberichten';
$string['tour4_title_icon'] = 'Berichten';
$string['tour4_title_messaging'] = 'Nieuwe berichteninterface';
$string['tour4_title_settings'] = 'Instellingen berichten';
$string['tour4_title_starred'] = 'Met ster';
$string['tour_activityinfo_activity_student_content'] = 'De data van activiteiten en de voorwaarden om die activiteiten te voltooien, worden getoond op de cursuspagina.';
$string['tour_activityinfo_activity_student_title'] = 'Nieuw: activiteitsinformatie';
$string['tour_activityinfo_activity_teacher_content'] = 'De data en de voltooiingsvoorwaarden van activiteiten worden nu aan de leerlingen getoond op iedere activiteitenpagina (en optioneel op de cursuspagina).

Voor activiteiten die leerlingen manueel kunnen voltooien, wordt een \'Markeer als voltooid\' knop getoond op de activiteitenpagina.';
$string['tour_activityinfo_activity_teacher_title'] = 'Nieuw: activiteitsinformatie';
$string['tour_activityinfo_course_student_content'] = 'De data van activiteiten en/of de voorwaarden om die activiteiten te voltooien, worden getoond op de cursuspagina.';
$string['tour_activityinfo_course_student_title'] = 'Nieuw: activiteitsinformatie';
$string['tour_activityinfo_course_teacher_content'] = 'De nieuwe cursusinstellingen \'Toon voltooiingsvoorwaarden\' en \'Toon data van activiteiten\' stellen je in staat te kiezen of voltooiingsvoorwaarden (indien ingesteld) en/of data van activiteiten op de cursuspagina aan leerlingen worden getoond.';
$string['tour_activityinfo_course_teacher_title'] = 'Nieuw: activiteitsinformatie';
$string['tour_final_step_content'] = 'Dit is het einde van je rondleiding. Je zult dit niet meer zien, tenzij je opnieuw start via de link onderaan de pagina.';
$string['tour_final_step_title'] = 'Einde van de rondleiding';
$string['tour_navigation_course_announcements_teacher_content'] = '@@PIXICON::tour/tour_course_admin_3::tool_usertours@@<br>Plaats hier belangrijk nieuws.';
$string['tour_navigation_course_announcements_teacher_title'] = 'Iets te melden voor iedereen?';
$string['tour_navigation_course_edit_teacher_content'] = '@@PIXICON::tour/tour_course_admin_1::tool_usertours@@<br>Voeg hier nieuwe inhoud toe of bewerk bestaande inhoud.';
$string['tour_navigation_course_edit_teacher_title'] = 'Bewerkmodus activeren';
$string['tour_navigation_course_index_student_content'] = '@@PIXICON::tour/tour_course_student::tool_usertours@@<br>Blader door activiteiten en houd je voortgang bij.';
$string['tour_navigation_course_index_student_title'] = 'Vind je weg';
$string['tour_navigation_course_index_teacher_content'] = '@@PIXICON::tour/tour_course_admin_2::tool_usertours@@<br>Sleep activiteiten om de cursusinhoud te herschikken.';
$string['tour_navigation_course_index_teacher_title'] = 'Inhoudsopgave cursus';
$string['tour_navigation_course_student_tour_des'] = 'Waar je door activiteiten in een cursus kunt bladeren';
$string['tour_navigation_course_student_tour_name'] = 'Inhoudsopgave cursus';
$string['tour_navigation_course_teacher_tour_des'] = 'Bewerkmodus, activiteiten slepen en mededelingen plaatsen in een cursus';
$string['tour_navigation_course_teacher_tour_name'] = 'Cursus bewerken';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br>Dit blokkenpaneel kan meerdere functies bevatten.';
$string['tour_navigation_dashboard_title'] = 'Uitvouwen om te verkennen';
$string['tour_navigation_dashboard_tour_des'] = 'Waar je blokken vindt';
$string['tour_navigation_dashboard_tour_name'] = 'Blokkenpaneel';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourses::tool_usertours@@<br>Via dit menu kun je cursussen toevoegen, kopiëren en verbergen.';
$string['tour_navigation_mycourses_endtourlabel'] = 'Ik begrijp het';
$string['tour_navigation_mycourses_title'] = 'Cursussen en categorieën';
$string['tour_navigation_mycourses_tour_des'] = 'Opties voor cursusbeheer op de pagina Mijn cursussen';
$string['tour_navigation_mycourses_tour_name'] = 'Cursusbeheer';
$string['tour_resetforall'] = 'De status van de rondleiding is teruggezet. Ze zal opnieuw getoond worden aan alle gebruikers.';
$string['tourconfig'] = 'Te importeren configuratiebestand voor een rondleiding';
$string['tourisenabled'] = 'Rondleiding is ingeschakeld';
$string['tourlist_explanation'] = 'Je kunt zoveel rondleidingen maken als je wil en ze inschakelen voor verschillende delen van Moodle. Er kan slechts één rondleiding gemaakt worden per pagina.';
$string['tours'] = 'Rondleidingen';
$string['usertours'] = 'Rondleidingen voor gebruikers';
$string['usertours:managetours'] = 'Maak, bewerk en verwijder rondleidingen voor gebruikers';
$string['viewtour_edit'] = 'Je kunt <a href="{$a->editlink}">de standaardinstellingen voor de rondleiding bewerken</a> en <a href="{$a->resetlink}">verplichten om de rondleiding opnieuw te tonen</a> aan alle gebruikers.';
$string['viewtour_info'] = 'Dit is de \'{$a->tourname}\'-rondleiding. Ze is van toepassing op het pad \'{$a->path}\'.';
