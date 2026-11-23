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
 * Strings for component 'ai', language 'nl', version '4.5'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Accepteren en doorgaan';
$string['action'] = 'Actie';
$string['action_generate_image'] = 'Afbeelding genereren';
$string['action_generate_image_desc'] = 'Genereert een afbeelding op basis van een tekstprompt.';
$string['action_generate_text'] = 'Tekst genereren';
$string['action_generate_text_desc'] = 'Genereert tekst op basis van een tekstprompt.';
$string['action_generate_text_instruction'] = 'Je ontvangt een tekstinvoer van de gebruiker. Jouw taak is om tekst te genereren op basis van hun verzoek. Volg deze belangrijke instructies:
    1. Geef de samenvatting uitsluitend als platte tekst terug.
    2. Gebruik geen markdown-opmaak, begroetingen of holle frasen.';
$string['action_summarise_text'] = 'Tekst samenvatten';
$string['action_summarise_text_desc'] = 'Vat de tekstinhoud op een cursuspagina samen.';
$string['action_summarise_text_instruction'] = 'Je ontvangt een tekstinvoer van de gebruiker. Jouw taak is om de opgegeven tekst samen te vatten. Volg deze richtlijnen:
    1. Condenseer: Kort lange passages in tot de kernpunten.
    2. Vereenvoudig: Maak complexe informatie gemakkelijker te begrijpen, vooral voor leerlingen en studenten.

Belangrijke instructies:
    1. Geef de samenvatting uitsluitend als platte tekst terug.
    2. Gebruik geen markdown-opmaak, begroetingen of holle frasen.
    3. Richt je op duidelijkheid, beknoptheid en toegankelijkheid.

Zorg ervoor dat de samenvatting gemakkelijk te lezen is en de hoofdpunten van de oorspronkelijke tekst effectief overbrengt.';
$string['action_translate_text'] = 'Tekst vertalen';
$string['action_translate_text_desc'] = 'Vertaal de opgegeven tekst van de ene taal naar de andere.';
$string['actionsettingprovider'] = 'Actie-instellingen voor {$a}';
$string['actionsettingprovider_desc'] = 'Deze instellingen bepalen hoe {$a->providername} de actie {$a->actionname} uitvoert.';
$string['ai'] = 'AI';
$string['aiplacements'] = 'AI-plaatsingen';
$string['aiproviders'] = 'AI-providers';
$string['aiusagepolicy'] = 'Beleid voor AI-gebruik';
$string['availableplacements'] = 'Kies waar AI-acties beschikbaar zijn';
$string['availableplacements_desc'] = 'Plaatsingen bepalen hoe en waar AI-acties op je site kunnen worden gebruikt. Via de instellingen kies je welke acties in elke plaatsing beschikbaar zijn.';
$string['availableproviders'] = 'Beheer de AI-providers die met je LMS zijn verbonden';
$string['availableproviders_desc'] = 'AI-providers voegen AI-functionaliteit toe aan je site via \'acties\', zoals het samenvatten van tekst of het genereren van afbeeldingen.<br/>
Je kunt de acties van elke provider beheren in de instellingen ervan.';
$string['contentwatermark'] = 'Gegenereerd door AI';
$string['declineaipolicy'] = 'Weigeren';
$string['manageaiplacements'] = 'AI-plaatsingen beheren';
$string['manageaiproviders'] = 'AI-providers beheren';
$string['noproviders'] = 'Deze actie is niet beschikbaar. Er zijn geen <a href="{$a}">AI-providers</a> geconfigureerd voor deze actie.';
$string['placement'] = 'Plaatsing';
$string['placementactionsettings'] = 'Acties';
$string['placementactionsettings_desc'] = 'De AI-acties die beschikbaar zijn voor deze plaatsing.';
$string['placementsettings'] = 'Plaatsingsspecifieke instellingen';
$string['placementsettings_desc'] = 'Deze instellingen bepalen hoe deze AI-plaatsing verbinding maakt met de AI-service, en de bijbehorende handelingen.';
$string['privacy:metadata:ai_action_generate_image'] = 'Een tabel waarin de verzoeken om afbeeldingen te genereren van gebruikers worden opgeslagen.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'De beeldverhouding van de gegenereerde afbeeldingen.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'Het aantal gegenereerde afbeeldingen.';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'De prompt voor het verzoek om een afbeelding te genereren.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'De kwaliteit van de gegenereerde afbeeldingen.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'De herziene prompt van de gegenereerde afbeeldingen.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'De bron-URL van de gegenereerde afbeeldingen.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'De stijl van de gegenereerde afbeeldingen.';
$string['privacy:metadata:ai_action_generate_text'] = 'Een tabel waarin de verzoeken om tekst te genereren van gebruikers worden opgeslagen.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'De completion-tokens die zijn gebruikt om de tekst te genereren.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'De unieke hash die de status/versie van het model en de inhoud weergeeft.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'De daadwerkelijke tekst die door het AI-model is gegenereerd op basis van de invoerprompt.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'De prompt voor het verzoek om tekst te genereren.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'De prompt-tokens die zijn gebruikt om de tekst te genereren.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'De ID van het antwoord.';
$string['privacy:metadata:ai_action_register'] = 'Een tabel waarin de actieverzoeken van gebruikers worden opgeslagen.';
$string['privacy:metadata:ai_action_register:actionid'] = 'De ID van het actieverzoek.';
$string['privacy:metadata:ai_action_register:actionname'] = 'De actienaam van het verzoek.';
$string['privacy:metadata:ai_action_register:provider'] = 'De naam van de provider die het verzoek heeft afgehandeld.';
$string['privacy:metadata:ai_action_register:success'] = 'De status van het actieverzoek.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'Het tijdstip waarop het verzoek is voltooid.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'Het tijdstip waarop het verzoek is aangemaakt.';
$string['privacy:metadata:ai_action_register:userid'] = 'De ID van de gebruiker die het verzoek heeft gedaan.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Een tabel waarin de verzoeken om tekst samen te vatten van gebruikers worden opgeslagen.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'De completion-tokens die zijn gebruikt om de tekst samen te vatten.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'De unieke hash die de status/versie van het model en de inhoud weergeeft.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'De daadwerkelijke tekst die door het AI-model is gegenereerd op basis van de invoerprompt.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'De prompt voor het verzoek om tekst samen te vatten.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'De prompt-tokens die zijn gebruikt om de tekst samen te vatten.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'De ID van het antwoord.';
$string['privacy:metadata:ai_policy_register'] = 'Een tabel waarin de status van de acceptatie van het AI-beleid per gebruiker wordt opgeslagen.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'De ID van de context waarvan de gegevens zijn opgeslagen.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'Het tijdstip waarop de gebruiker het AI-beleid heeft geaccepteerd.';
$string['privacy:metadata:ai_policy_register:userid'] = 'De ID van de gebruiker van wie de gegevens zijn opgeslagen.';
$string['provider'] = 'Provider';
$string['provideractionsettings'] = 'Acties';
$string['provideractionsettings_desc'] = 'Kies en configureer de acties die {$a} op je site kan uitvoeren.';
$string['providers'] = 'Providers';
$string['providersettings'] = 'Instellingen';
$string['userpolicy'] = '<h4><strong>Welkom bij de nieuwe AI-functie!</strong></h4>
<p>Deze functie voor kunstmatige intelligentie (AI) is uitsluitend gebaseerd op externe grote taalmodellen (LLM\'s) om je leer- en onderwijservaring te verbeteren. Lees dit gebruiksbeleid voordat je deze AI-services gaat gebruiken.</p>
<h4><strong>Nauwkeurigheid van door AI gegenereerde inhoud</strong></h4>
<p>AI kan nuttige suggesties en informatie geven, maar de nauwkeurigheid kan variëren. Controleer de verstrekte informatie altijd zorgvuldig om er zeker van te zijn dat die juist, volledig en geschikt is voor jouw specifieke situatie.</p>
<h4><strong>Hoe je gegevens worden verwerkt</strong></h4>
<p>Deze AI-functie maakt gebruik van externe grote taalmodellen (LLM\'s). Als je deze functie gebruikt, worden alle gegevens of persoonsgegevens die je deelt verwerkt volgens het privacybeleid van die LLM\'s. We raden je aan hun privacybeleid te lezen om te begrijpen hoe zij met je gegevens omgaan. Daarnaast kan een registratie van je interacties met de AI-functies op deze site worden bewaard.</p>
<p>Als je vragen hebt over hoe je gegevens worden verwerkt, neem dan contact op met je docenten of onderwijsorganisatie.</p>
<p>Door door te gaan bevestig je dat je dit beleid begrijpt en ermee instemt.</p>';
