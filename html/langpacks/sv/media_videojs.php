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
 * Strings for component 'media_videojs', language 'sv', version '3.11'.
 *
 * @package     media_videojs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = 'CSS-klass för ljud';
$string['audioextensions'] = 'Ljudfilstillägg';
$string['configaudiocssclass'] = 'CSS-klass som kommer läggas till &lt;audio&gt;-elementet.';
$string['configaudioextensions'] = 'En kommaseparerad lista över ljudfilstillägg som stöds. VideoJS kommer att försöka använda webbläsarens inbyggda videospelare när den finns tillgängligt eller inbyggda VideoJS funktionalitet och falla tillbaka till en Flash-spelare för andra format om Flash stöds av webbläsaren och Flash-fallback är aktiverat nedan.';
$string['configlimitsize'] = 'Om aktiverat och bredd och höjd inte anges, kommer videon att visas med standardbredd och -höjd. Annars kommer den att vidgas till största möjliga bredd.';
$string['configrtmp'] = 'Om aktiverat kommer länkar som börjar med <code>rtmp://</code> att hanteras av pluginmodulen, oberoende av om tillägget är aktiverat i Video-filtillägget (videoextensions). Flash-fallback måste vara aktiverat för att RTMP ska fungera.';
$string['configuseflash'] = 'Använd Flash-spelare om videoformat inte har inbyggt i webbläsaren och / eller inbyggt stöd i VideoJS-spelaren. Om aktiverat kommer VideoJS att vara involverad för alla filtillägg från ovanstående lista utan webbläsarkontroll. Observera att Flash inte är tillgängligt i mobila webbläsare och avrådes från användning på många stationära datorer.';
$string['configvideocssclass'] = 'En CSS-klass som kommer att läggas till i elementet &lt;video&gt;. Till exempel kommer CSS-klassen "vjs-big-play-centered" att placera play-knappen i mitten. För detaljer, inklusive hur du ställer in ett anpassat utseende, se <em>docs.videojs.com</em>.';
$string['configvideoextensions'] = 'En kommaseparerad lista med videofiltillägg som stöds. VideoJS kommer att försöka använda webbläsarens inbyggda videospelare när den är tillgängligt och falla tillbaka till en Flash-spelare för andra format om Flash stöds av webbläsaren och Flash-fallback är aktiverat nedan.';
$string['configyoutube'] = 'Använd VideoJS för att spela upp YouTube-videor. Observera att YouTube-spellistor ännu inte stöds av VideoJS.';
$string['limitsize'] = 'Begränsa storlek';
$string['pluginname'] = 'VideoJS-spelare';
$string['pluginname_help'] = 'Ett JavaScript-hjälpbibliotek för videofiler som spelas av webbläsarens inbyggda videospelare med en Flash-spelare som reserv. (Format som stöds beror på webbläsaren.)';
$string['privacy:metadata'] = 'Mediapluginmodulen VideoJS-spelare lagrar ingen personinformation.';
$string['rtmp'] = 'RTMP-strömmar';
$string['useflash'] = 'Använd Flash-fallback';
$string['videocssclass'] = 'CSS-klass för video';
$string['videoextensions'] = 'Videofilstillägg';
$string['youtube'] = 'YouTube-videor';
