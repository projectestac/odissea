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
 * Strings for component 'url', language 'nl', version '4.1'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Kies een variable';
$string['clicktoopen'] = 'Klik op {$a} om de bron te openen.';
$string['configdisplayoptions'] = 'Selecteer alle opties die beschikbaar zouden kunnen zijn, bestaande instellingen worden niet aangepast. Hou de CTRL-toets ingedrukt om meerdere velden te kunnen selecteren.';
$string['configframesize'] = 'Wanneer een webpagina of een geupload bestand getoond wordt in een frame, dan is deze waarde de hoogte (in pixels) van het top frame (waar de navigatie inzit).';
$string['configrolesinparams'] = 'Moeten aangepaste rolnamen (van de cursusinstellingen) beschikbaar zijn als variabelen voor URL-parameters?.';
$string['configsecretphrase'] = 'De geheime zin wordt gebruikt om geëncrypteerde code te maken die naar sommige servers gestuurd kan worden als een parameter. De geëncrypteerde code wordt gemaakt door een md5-waarde van het IP-adres van de gebruiker te concateneren met jouw geheime zin. vb code is md5(IP.geheimezin). Merk op dat dit is niet betrouwbaar omdat IP-adressen kunnen wijzigen in dikwijls gedeeld worden door meerdere computers.';
$string['contentheader'] = 'Inhoud';
$string['createurl'] = 'Maak een URL';
$string['displayoptions'] = 'Beschikbare schermopties';
$string['displayselect'] = 'Toon';
$string['displayselect_help'] = 'Deze instelling, samen met het bestandstype van de URL en het toelaten door de browser van embedden, bepaalt hoe de URL wordt weergegeven. Mogelijke opties zijn:

* Automatisch - De beste weergave van de URL wordt automatisch gekozen
* Embed - De URL wordt weergegeven binnen de pagina onder de navigatiebalk, samen met de URL beschrijving en andere blokken
* Open - Enkel de URL wordt weergegeven in het browservenster
* In pop-up - De URL wordt weergegeven in een nieuw browservenster zonder menu\'s of een adressenbalk
* In frame - De URL wordt weergegeven in een frame onder de navigatiebalk en de URL beschrijving.
* Nieuw venster - De URL wordt weergegeven in een nieuw browservenster met menu\'s en een adresbalk';
$string['displayselectexplain'] = 'Toon schermtype. Jammer genoeg zijn niet zlle types geschikt voor alle URL\'s.';
$string['externalurl'] = 'Externe URL';
$string['framesize'] = 'Frame hoogte';
$string['indicator:cognitivedepth'] = 'URL cognitief';
$string['indicator:cognitivedepth_help'] = 'Deze indicator is gebaseerd op de door de leerling bereikte cognitieve diepte in een URL bron.';
$string['indicator:cognitivedepthdef'] = 'URL cognitief';
$string['indicator:cognitivedepthdef_help'] = 'De deelnemer heeft dit percentage van de cognitieve betrokkenheid bereikt die door de URL-bronnen wordt aangeboden tijdens dit analyse-interval (Niveaus = Geen weergave, Weergave)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'URL sociaal';
$string['indicator:socialbreadth_help'] = 'Deze indicator is gebaseerd op de door de leerling behaalde sociale breedte in een URL bron.';
$string['indicator:socialbreadthdef'] = 'URL sociaal';
$string['indicator:socialbreadthdef_help'] = 'De deelnemer heeft dit percentage van de sociale betrokkenheid bereikt die wordt aangeboden door de URL-bronnen tijdens dit analyse-interval (Niveaus = Geen deelname, alleen deelnemer)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'Kan deze bron niet tonen, URL is niet geldig.';
$string['invalidurl'] = 'Externe URL is niet geldig';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'Met de URL-module kan een leraar een weblink als bron in een cursus toevoegen. Alles wat vrij beschikbaar is online, zoals documenten of afbeeldingen, kan gelinkt worden; de URL moet geen startpagina of website zijn. De URL van een website mag gekopieerd of geplakt worden of een leraar kan de bestandenzoeker gebruker om  een link van een opslagruimte te zoeken, zoals Flickr, YouTube of Wikimedia (afhankelijk van welke opslagruimten er ingeschakeld zijn voor je site).

Er zijn een aantal toonmogelijkheden voor de URL, zoals ingebed of openen in een nieuw venster en geavanceerde opties voor het doorgeven van informatie aan de URL, zoals de naam van een leerling, indien dit vereist is.

Merk op dat URL\'s aan elke andere activiteit kan toegevoegd worden via de tekstverwerker.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'URL\'s';
$string['name'] = 'Naam';
$string['name_help'] = 'Dit zal dienen als de linktekst voor de URL.

Voer een betekenisvolle tekst in die beknopt het doel van de URL beschrijft.

Vermijd het gebruik van het woord "link". Dit zal gebruikers van schermlezers helpen, aangezien schermlezers links aankondigen (bijv. "Moodle.org, link"), dus het is niet nodig om het woord "link" in het naamveld op te nemen.';
$string['page-mod-url-x'] = 'Elke URL module-pagina';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'URL variabelen';
$string['parametersheader_help'] = 'In deze sectie kun je interne informatie meesturen als onderdeel van de URL. Dat is zinvol wanneer de URL verwijst naar een interactieve webpagina die parameters accepteert, en je bijvoorbeeld de naam van de huidige gebruiker wilt doorsturen. Voer de naam van de URL parameter in het tekstvak in en kies vervolgens de daarbij passende variabele van de site.';
$string['pluginadministration'] = 'Beheer URL-module';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Hoogte pop-upvenster (in pixels)';
$string['popupheightexplain'] = 'Bepaalt de standaardhoogte van pop-upvensters';
$string['popupwidth'] = 'Breedte pop-upvenster (in pixels)';
$string['popupwidthexplain'] = 'Bepaalt de standaardbreedte van pop-upvensters';
$string['printintro'] = 'Toon URL-beschrijving';
$string['printintroexplain'] = 'Toon URL-beschrijving onder de inhoud? Sommige schermtypes zullen dit niet kunnen tonen, zelfs niet als dit ingeschakeld is.';
$string['privacy:metadata'] = 'De URL bron-plugin bewaart geen persoonlijke gegevens.';
$string['rolesinparams'] = 'Rolnamen mee opnemen als URL-variabelen';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'Server URL';
$string['url:addinstance'] = 'Voeg een nieuwe URL-bron toe';
$string['url:view'] = 'Bekijk URL';
