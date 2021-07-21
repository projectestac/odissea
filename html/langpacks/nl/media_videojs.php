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
 * Strings for component 'media_videojs', language 'nl', version '3.11'.
 *
 * @package     media_videojs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = 'CSS-klasse voor audio';
$string['audioextensions'] = 'Extenties van audiobestanden';
$string['configaudiocssclass'] = 'Een CSS-klasse die toegevoegd zal worden aan het &lt;audio&gt;-element.';
$string['configaudioextensions'] = 'Een kommagescheiden lijst van ondersteunde audiobestanden. VideoJS zal proberen om de ingebouwde video-speler van de browser te gebruiken of VideoJS functionaliteit en terugvallen op een Flash-speler voor andere formaten als Flash ondersteund wordt door de browser en als terugvallen op Flash onderaan is ingeschakeld.';
$string['configlimitsize'] = 'Indien ingeschakeld en de breedte en hoogte zijn niet opgegeven, dan zal de video getoond worden met de standaard hoogte en breedte. Anders zal die uitgerekt worden tot de maximaal mogelijke breedte.';
$string['configrtmp'] = 'Indien ingeschakeld zullen links die starten met rtmp:// door de plugin afgehandeld worden, onafhankelijk van het inschakelen van de extensie in de instelling Video bestanden extenties (videoextensions). Terugvallen op Flash moet ingeschakeld zijn om RTMP te doen werken.';
$string['configuseflash'] = 'Gebruik een Flash speler als het video-formaat niet ondersteund wordt door de browser. Indien ingeschakeld zal VideoJS gebruikt worden voor elke bestandsextentie uit bovenstaande lijst zonder browsercontrole. Merk op dat Flash niet beschikbaar is op mobiele browsers en ontmoedigt wordt in vele desktop-browsers.';
$string['configvideocssclass'] = 'Er zal een CSS-klasse toegevoegd worden aan het  &lt;video&gt;-element. Bijvoorbeeld de CSS-klasse "vjs-big-play-centered" zal de afspeelknop in het midden zetten. Voor details zie docs.videojs.com.';
$string['configvideoextensions'] = 'Een kommagescheiden lijst van ondersteunde video-extenties. VideoJS zal proberen om de ingebouwde browser video-speler te gebruiken wanneer beschikbaar en zal terugvallen op een Flash-speler voor andere formaten als Flash ondersteund wordt door de browser en terugvallen op Flash hier onder ingeschakeld is.';
$string['configyoutube'] = 'Gebruik VideoJS om YouTube video\'s te spelen. Merk op dat YouTube playlists nog niet ondersteund worden door VideoJS.';
$string['limitsize'] = 'Beperk grootte';
$string['pluginname'] = 'VideoJS-speler';
$string['pluginname_help'] = 'Een JavaScript-wrapper voor video-bestanden die gespeeld worden met de ingebouwde videospeler van de browser met de mogelijkheid om terug te vallen op een Flash-speler. (Ondersteunde formaten afhankelijk van de browser.)';
$string['privacy:metadata'] = 'De VideoJS media player-plugin bewaart geen persoonlijke gegevens.';
$string['rtmp'] = 'RTMP streams';
$string['useflash'] = 'Gebruik terugvallen op Flash';
$string['videocssclass'] = 'CSS-klasse voor video';
$string['videoextensions'] = 'Videobestandsextenties';
$string['youtube'] = 'Youtube video\'s';
