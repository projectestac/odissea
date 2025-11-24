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
$string['action_generate_text_instruction'] = 'Je krijgt een tekst als input van de gebruiker. Je taak is een tekst te genereren op basis van hun verzoek. Volg deze belangrijke instructies:
    1. Geef de samenvatting alleen in platte tekst terug.
    2. Voeg geen markdown opmaak, begroetingen of gemeenplaatsen in.';
$string['action_summarise_text'] = 'Tekst samenvatten';
$string['action_summarise_text_desc'] = 'Vat de tekstinhoud op een cursuspagina samen.';
$string['action_summarise_text_instruction'] = 'Je ontvangt een tekstinput van de gebruiker. Het is jouw taak de opgegeven tekst samen te vatten. Volg daarbij deze richtlijnen:
    1. Kort in: Verkort lange passages tot kernpunten.
    2. Vereenvoudig: Maak complexe informatie eenvoudiger te begrijpen, in het bijzonder voor lerenden.

Belangrijke instructies:
    1. Geef de samenvatting alleen in platte tekst terug.
    2. Voeg geen markdown opmaak, begroetingen of clichés in.
    3. Focus op helderheid, bondigheid en toegankelijkheid.

Zorg ervoor dat de samenvatting eenvoudig te lezen is en de hoofdpunten van de oorspronkelijke tekst effectief overbrengt.';
$string['action_translate_text'] = 'Tekst vertalen';
$string['action_translate_text_desc'] = 'Aangeleverde tekst van de ene naar een andere taal vertalen.';
$string['actionsettingprovider'] = 'Instellingen voor actie {$a}';
$string['actionsettingprovider_desc'] = 'Deze instellingen regelen hoe de {$a->providername} de actie {$a->actionname} uitvoert.';
$string['ai'] = 'AI';
$string['aiplacements'] = 'AI plaatsingen';
$string['aiproviders'] = 'AI providers';
$string['aiusagepolicy'] = 'Gebruiksbeleid AI';
$string['availableplacements'] = 'Kies waar AI acties beschikbaar zijn';
$string['availableplacements_desc'] = 'Plaatsingen regelen hoe en waar AI acties op je site kunnen worden gebruikt. Je kunt via de instellingen kiezen welke acties er in iedere plaatsing beschikbaar zijn,';
$string['availableproviders'] = 'De AI providers verbonden met je LMS beheren';
$string['availableproviders_desc'] = 'AI providers voegen AI functionaliteit aan je site toe met behulp van \'acties\' zoals tekst samenvatten of afbeeldingen genereren.<br/>
Je kunt de acties voor iedere provider beheren in de bijbehorende instellingen.';
$string['contentwatermark'] = 'Gegenereerd door AI';
$string['declineaipolicy'] = 'Afwijzen';
$string['manageaiplacements'] = 'AI plaatsingen beheren';
$string['manageaiproviders'] = 'AI providers beheren';
$string['noproviders'] = 'Deze actie is niet beschikbaar. Er zijn geen <a href="{$a}">providers</a> geconfigureerd voor deze actie.';
$string['placement'] = 'Plaatsing';
$string['placementactionsettings'] = 'Acties';
$string['placementactionsettings_desc'] = 'De voor deze AI plaatsing beschikbare acties';
$string['placementsettings'] = 'Specifieke instellingen voor plaatsingen';
$string['placementsettings_desc'] = 'Deze instellingen regelen hoe de plaatsing verbindt met de AI service en daaraan gerelateerde zaken.';
$string['privacy:metadata:ai_action_generate_image'] = 'Een tabel die de aanvragen voor afbeeldingsgeneratie van gebruikers bewaart.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'De beeldverhouding van de gegenereerde afbeeldingen.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'Het aantal gegenereerde afbeeldingen.';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'De prompt voor het aanvragen van afbeeldingen genereren.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'De kwaliteit van de gegenereerde afbeeldingen.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'De herziene prompt voor de gegenereerde afbeeldingen.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'De bron-URL van de gegenereerde afbeeldingen.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'De stijl van de gegenereerde afbeeldingen.';
$string['privacy:metadata:ai_action_generate_text'] = 'Een tabel die de aanvragen voor gegenereerde teksten van gebruikers bewaart.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'De voltooiingstokens die gebruiktworden om tekst te genereren.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'De unieke hash die de status/versie van het model en inhoud voorstelt.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'De eigenlijke tekst die het AI model gegenereerd heeft, gebaseerd op de input prompt.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'De prompt voor de aanvraag van gegenereerde tekst.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'De prompt tokens die gebruikt zijn om de tekst te genereren.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'De ID van het antwoord.';
$string['privacy:metadata:ai_action_register'] = 'Een tabel die de actie-aanvragen van gebruikers bewaart.';
$string['privacy:metadata:ai_action_register:actionid'] = 'De ID van de actie-aanvraag.';
$string['privacy:metadata:ai_action_register:actionname'] = 'De actienaam van de aanvraag.';
$string['privacy:metadata:ai_action_register:provider'] = 'De naam van de provider die de aanvraag afgehandeld heeft.';
$string['privacy:metadata:ai_action_register:success'] = 'De status van die actie-aanvraag.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'Het tijdstip waarop de aanvraag voltooid was.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'Het tijdstip waarop de aanvraag gemaakt werd.';
$string['privacy:metadata:ai_action_register:userid'] = 'De ID van de gebruiker die de aanvraag deed.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Een tabel die de tekstaanvragen van gebruikers bewaart.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Het voltooiingstoken dat gebruikt werd om de tekst samen te vatten.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'De unieke hash die de status/versie van het model en inhoud voorstelt.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'De feitelijke door het AI model gegenereerde tekst op basis van de input prompt.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'De prompt voor het verzoek de tekst samen te vatten.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'De prompt tokens gebruikt om de tekst samen te vatten.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'Het ID van de respons.';
$string['privacy:metadata:ai_policy_register'] = 'Een tabel waarin de acceptatiestatus van het AI beleid voor iedere gebruiker wordt opgeslagen.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'Het ID van de context waarvan de gegevens werden opgeslagen.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'Het tijdstip waarop de gebruiker het AI beleid accepteerde.';
$string['privacy:metadata:ai_policy_register:userid'] = 'Het ID van de gebruiker van wie gegevens werden opgeslagen.';
$string['provider'] = 'Provider';
$string['provideractionsettings'] = 'Acties';
$string['provideractionsettings_desc'] = 'Kies en configureer de actie die {$a} op je site kan uitvoeren.';
$string['providers'] = 'Providers';
$string['providersettings'] = 'Instellingen';
$string['userpolicy'] = '<h4>Welkom bij de nieuwe AI functionaliteit</h4>
<p>Deze functionaliteit voor Kunstmatige Intelligentie (AI) is enkel en alleen gebaseerd op Large Language Models (LLM) om je leer- en doceerervaring te verbeteren. Voordat je deze AI diensten gaat gebruiken, vragen we je dit gebruiksbeleid te lezen.</p>
<h4>Nauwkeurigheid van door AI gegenereerde inhoud</h4>
<p>AI kan je nuttige suggesties en informatie aanreiken, maar de nauwkeurigheid ervan kan variëren. We raden je aan de aangeleverde informatie zorgvuldig te controleren zodat deze accuraat, volledig en geschikt is voor je specifieke situatie.</p>
<h4><strong>Hoe je data wordt verwerkt</strong></h4>
<p>De AI functionaliteit wordt geleverd door een Large Language Model (LLM) van derden. Als je ervoor kiest deze functionaliteit te gebruiken, dan zullen de persoonlijke gegevens die je deelt worden verwerkt in overeenstemming met het privacybeleid van deze externe dienstverlener. We raden je aan dat je je informeert over de privacy in het LLM om te begrijpen hoe je gegevens daar worden verwerkt. Daarnaast kunnen je interacties met de AI functionaliteit op deze site worden bijgehouden.</p>
<p>Als je hier vragen over hebt, kun je contact opnemen met je leraars of Moodle beheerders.
</p>
<p>Door verder te gaan, bevestig je dat je dit begrijpt en hier mee akkoord gaat.</p>';
