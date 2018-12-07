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
 * Strings for component 'tool_usertours', language 'nl', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_usertours
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
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
$string['content_help'] = 'Inhoud die de stap beschrijft kan als tekst toegevoegd worden, ingebed in multilang tags (om te gebruiken met de multilang filter) indien vereist.

Als alternatief kan een taal ID-string ingegeven worden in de opmaak identificatie,component (zonder haakjes of spatie na de komma).';
$string['cssselector'] = 'CSS selector';
$string['defaultvalue'] = 'Standaard ({$a})';
$string['delay'] = 'Wachttijd voor het tonen van de stap';
$string['delay_help'] = 'Je kunt optioneel een wachttijd toevoegen voor de stap getoond wordt.
Deze wachttijd is in milliseconden.';
$string['description'] = 'Beschrijving';
$string['done'] = 'Klaar';
$string['editstep'] = '"{$a}" bewerken';
$string['enabled'] = 'Ingeschakeld';
$string['endtour'] = 'Einde rondleiding';
$string['event_step_shown'] = 'Getoonde stap';
$string['event_tour_ended'] = 'Rondleiding beëindigd';
$string['event_tour_reset'] = 'Rondleiding terug instellen';
$string['event_tour_started'] = 'Rondleiding gestart';
$string['exporttour'] = 'Rondleiding exporteren';
$string['filter_category'] = 'Categorie';
$string['filter_category_help'] = 'Toon de rondleiding op een pagina die geassocieerd is met een cursus binnen de geselecteerde categorie.';
$string['filter_course'] = 'Cursussen';
$string['filter_courseformat'] = 'Cursusindeling';
$string['filter_courseformat_help'] = 'Toon de rondleiding op een pagina die geassocieerd is met een cursus die de geselecteerde cursusindeling gebruikt.';
$string['filter_course_help'] = 'Toon de rondleiding op een pagina die geassocieerd is met de geselecteerde cursus.';
$string['filter_header'] = 'Rondleidingsfilters';
$string['filter_help'] = 'Selecteer de voorwaarden waaronder de rondleiding getoond zal worden. Alle filters moeten overeenkomen om een rondleiding aan een gebruiker te kunnen laten zien.';
$string['filter_role'] = 'Rol';
$string['filter_role_help'] = 'Een rondleiding kan beperkt worden tot gebruikers met geselecteerde rollen wanneer de rondleiding getoond wordt. Zo zal bijvoorbeeld het beperken van een rondleiding van de startpagina tot gebruikers met de leerling-rol niet werken omdat gebruikers de rol van leerling enkel in een cursus hebben. Een rondleiding van de startpagina kan enkel beperkt worden tot gebruikers met een systeem-rol.';
$string['filter_theme'] = 'Thema';
$string['filter_theme_help'] = 'Toon de rondleiding wanneer de gebruiker één van volgende thema\'s gebruikt.';
$string['importtour'] = 'Importeer rondleiding';
$string['left'] = 'Links';
$string['modifyshippedtourwarning'] = 'Dit is een rondleiding voor gebruikers die meegeleverd wordt met Moodle. Alle wijzigingen die je maakt kunnen overschreven worden tijdens de volgende upgrade van je site.';
$string['movestepdown'] = 'Stap naar beneden';
$string['movestepup'] = 'Stap omhoog';
$string['movetourdown'] = 'Rondleiding naar beneden';
$string['movetourup'] = 'Rondleiding omhoog';
$string['name'] = 'Naam';
$string['newstep'] = 'Nieuwe stap';
$string['newtour'] = 'Maak een nieuwe rondleiding';
$string['next'] = 'Volgende';
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

Als je een rondleiding op de startpagina van de site wil tonen, dan kun je de waarde "FRONTPAGE" gebruiken.';
$string['pausetour'] = 'Pauze';
$string['placement'] = 'Plaatsing';
$string['placement_help'] = 'Een stap kan boven, onder links of rechts van het doel geplaatst worden. Boven of onder wordt aanbevolen omdat die beter passen op mobiele schermen.

Als de stap niet past op een bepaalde pagina op de opgegeven plaats, dan zal die automatisch ergens anders weergegeven worden.';
$string['pluginname'] = 'Rondleidingen';
$string['reflex'] = 'Ga verder met een klik';
$string['reflex_help'] = 'Ga verder naar de volgende stap wanneer op het doel geklikt wordt.';
$string['resettouronpage'] = 'Zet de rondleiding terug naar start op deze pagina';
$string['resumetour'] = 'Ga verder';
$string['right'] = 'Rechts';
$string['select_block'] = 'Selecteer een blok';
$string['selector_defaulttitle'] = 'Geef een beschrijvende tekst';
$string['selectordisplayname'] = 'Een CSS-selector die overeenkomt met \'{$a}\'';
$string['selecttype'] = 'Selecteer een stap-type';
$string['sharedtourslink'] = 'Rondleidingsopslagruimte';
$string['skip'] = 'Sla over';
$string['target'] = 'Doel';
$string['target_block'] = 'Blok';
$string['target_heading'] = 'Stap doel';
$string['target_selector'] = 'Selector';
$string['target_selector_targetvalue'] = 'CSS selectors';
$string['target_selector_targetvalue_help'] = 'Een CSS-selector kan gebruikt worden als doel voor nagenoeg elk element op de pagina. De juiste selector kan gemakkelijk gevonden worden door de ontwikkeltools van je browser te gebruiken.';
$string['targettype'] = 'Doeltype';
$string['targettype_help'] = 'Elke stap wordt geassocieerd met een deel van de pagina - het doel. Doeltypes zijn:

* Blok - om de volgende stap te tonen naast een bepaald blok
* CSS-selector - om accuraat een doelzone te bepalen door gebruik te maken van CSS
* Toon in het midden van de pagina - voor eens tap die niet geassocieerd hoeft te worden met een bepaald deel van de pagina.';
$string['target_unattached'] = 'Toon in het midden van de pagina';
$string['title'] = 'Titel';
$string['title_help'] = 'De titel van een stap kan toegevoegd worden als tekst, ingesloten in multilang tags (om te gebruiken met de multilang inhoudsfilter) indien nodig.

Er mag ook een taalstringID ingegeven worden in het formaat identificatie,component (zonder haakjes of spaties na de komma).';
$string['tour1_content_addingblocks'] = 'Denk goed na over het plaatsen van blokken op je pagina\'s. Blokken worden niet getoond op de Moodle mobile app, dus als algemene regel is het beter om er voor te zorgen dat je site goed werkt zonder blokken.';
$string['tour1_content_blockregion'] = 'Er is hier nog een blok-zone. We raden aan om het navigatie- en instellingenblok volledig te verwijderen omdat alle functionaliteit op andere plaatsen zit in het Boost thema.';
$string['tour1_content_customisation'] = 'Om het uiterlijk van je site en je startpagina aan te passen kun je het instellingenmenu gebruiken in de hoek van deze kopregel. Probeer nu bewerken in te schakelen.';
$string['tour1_content_end'] = 'Dit is het einde van jouw rondleiding. Dit zal niet meer getoond worden, tenzij je deze opnieuw instelt door de link te gebruiken onderaan de pagina. Als beheerder kun je ook rondleidingen zoals deze maken!';
$string['tour1_content_navigation'] = 'De belangrijkste navigatie gebeurt nu door deze navigatiebalk. De inhoud past zich aan afhankelijk van jouw positie op de site. Gebruik de knoppen bovenaan om te verbergen of te tonen.';
$string['tour1_content_welcome'] = 'Welkom in het Boost thema. Als je Moodle vroeger al gebruikt hebt, dan zul je opmerken dat sommige zaken er nu wat anders uitzien.';
$string['tour1_title_addingblocks'] = 'Blokken toevoegen';
$string['tour1_title_blockregion'] = 'Blokkenzone';
$string['tour1_title_customisation'] = 'Aanpassing';
$string['tour1_title_end'] = 'Einde van de rondleiding';
$string['tour1_title_navigation'] = 'Navigatie';
$string['tour1_title_welcome'] = 'Welkom';
$string['tour2_content_addblock'] = 'Als je de bewerkmodus inschakelt, dan kun je blokken toevoegen vanaf de navigatiebalk. Wees echter voorzichtig met het toevoegen van blokken aan je pagina\'s. Blokken worden niet getoond op Moodle mobile app. Voor de beste leerling-ervaringen kun je er dus best voor zorgen dat je cursus goed werkt zonder blokken.';
$string['tour2_content_addingblocks'] = 'Met deze knop kun je blokken toevoegen aan deze pagina. Wees echter voorzichtig met het toevoegen van blokken aan je pagina\'s. Blokken worden niet getoond op Moodle mobile app. Voor de beste leerling-ervaringen kun je er dus best voor zorgen dat je cursus goed werkt zonder blokken.';
$string['tour2_content_customisation'] = 'Om de cursusinstellingen te wijzigen kun je het instellingenmenu gebruiken in de hoek van deze balk. Je zult gelijkaardige instellingenmenu\'s vinden op de startpagina van elke activiteit. Probeer nu bewerken in te schakelen.';
$string['tour2_content_end'] = 'Dit is het einde van jouw rondleiding,. Dit zal niet meer getoond worden, tenzij je deze opnieuw instelt door de link te gebruiken onderaan de pagina. De site-beheerder kan ook rondleidingen zoals deze maken, specifiek voor deze site, indien nodig.';
$string['tour2_content_navigation'] = 'De belangrijkste navigatie gebeurt vanaf nu via deze navigatiebalk. Gebruik de knop bovenaan om deze te tonen of te verbergen. Je zult zien dat er links zijn voor de belangrijkste secties van je cursus.';
$string['tour2_content_opendrawer'] = 'Probeer nu de navigatiebalk te openen.';
$string['tour2_content_participants'] = 'Bekijk hier je deelnemers. Dit is ook de plek waar je leerlingen gaat toevoegen of verwijderen.';
$string['tour2_content_welcome'] = 'Welkom bij het Boost-thema. Als je site geüpgraded is van een oudere versie, dan zul je opmerken dat de cursuspagina er nu wat anders uit ziet.';
$string['tour2_title_addblock'] = 'Voeg een blok toe';
$string['tour2_title_addingblocks'] = 'Blokken toevoegen';
$string['tour2_title_customisation'] = 'Aanpassingen';
$string['tour2_title_end'] = 'Einde van de rondleiding';
$string['tour2_title_navigation'] = 'Navigatie';
$string['tour2_title_opendrawer'] = 'Open de navigatiebalk';
$string['tour2_title_participants'] = 'Cursusdeelnemers';
$string['tour2_title_welcome'] = 'Welkom';
$string['tourconfig'] = 'Te importeren configuratiebestand voor een rondleiding';
$string['tourisenabled'] = 'Rondleiding is ingeschakeld';
$string['tourlist_explanation'] = 'Je kunt zoveel rondleidingen maken als je wil en ze inschakelen voor verschillende delen van Moodle. Er kan slechts één rondleiding gemaakt worden per pagina.';
$string['tour_resetforall'] = 'De status van de rondleiding is teruggezet. Ze zal opnieuw getoond worden aan alle gebruikers.';
$string['tours'] = 'Rondleidingen';
$string['usertours'] = 'Rondleidingen voor gebruikers';
$string['usertours:managetours'] = 'Maak, bewerk en verwijder rondleidingen voor gebruikers';
$string['viewtour_edit'] = 'Je kunt <a href="{$a->editlink}">de standaardinstellingen voor de rondleiding bewerken</a> en <a href="{$a->resetlink}">verplichten om de rondleiding opnieuw te tonen</a> aan alle gebruikers.';
$string['viewtour_info'] = 'Dit is de \'{$a->tourname}\'-rondleiding. Ze is van toepassing op het pad \'{$a->path}\'.';
