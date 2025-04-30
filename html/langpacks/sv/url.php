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
 * Strings for component 'url', language 'sv', version '4.4'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Välj en variabel...';
$string['clicktoopen'] = 'Klicka på {$a} för att öppna resurs';
$string['configdisplayoptions'] = 'Välj alla alternativ som bör vara tillgängliga, gällande inställningar modifieras inte. Håll ner CTRL tangenten för att välja flera fält åt gången.';
$string['configframesize'] = 'När en webbsida eller en uppladdad fil visas i en inbäddad ram, är detta värde höjden (i pixlar) för toppramen (som innehåller navigationen).';
$string['configrolesinparams'] = 'Aktivera om du vill inkludera lokalanpassade namn för roller i listan över tillgängliga parametervariabler.';
$string['configsecretphrase'] = 'Den hemliga frasen används för att skapa krypterad kod som kan skickas till vissa servrar som en parameter. Den krypterade koden skapas med ett md5 värde för nuvarande användares IP adress sammanfogad med din hemliga fras. Exvis kod = md5(IP.hemligfras). Notera att detta är inte pålitligt på grund av att IP adress kan ändras och delas ofta av olika datorer.';
$string['contentheader'] = 'Innehåll';
$string['createurl'] = 'Skapa en webbadress';
$string['displayoptions'] = 'Tillgängliga visningsalternativ';
$string['displayselect'] = 'Visningsalternativ';
$string['displayselect_help'] = 'Den här inställningen, tillsammans med URL-filtypen och om webbläsaren tillåter inbäddning, avgör hur en URL ska visas.

Du kan välja mellan följande alternativ (beroende på egensklaperna hos URL:en är det inte säkert att alla alternativ visas):

* Automatiskt - Det bästa visningsalternativet väljs automatiskt
* Bädda in - URL:en visas på sidan under navigeringsfältet tillsammans med URL-beskrivningen och eventuella block
* Öppna - Innehållet visas i webbläsarfönstret
* I pop-up fönster - URL:en visas i ett nytt webbläsarfönster utan menyer eller ett adressfält
* I en ram - URL:en visas i en ram under navigeringsfältet och URL-beskrivningen
* Nytt fönster - URL:en visas i ett nytt webbläsarfönster med menyer och ett adressfält';
$string['displayselectexplain'] = 'Välj visningstyp, tyvärr är inte alla typer lämpliga för alla URL:er.';
$string['externalurl'] = 'Extern URL';
$string['framesize'] = 'Höjd på ram';
$string['indicator:cognitivedepth'] = 'URL kognitiv';
$string['indicator:cognitivedepth_help'] = 'Denna indikator baseras på det kognitiva djup som uppnåtts av studenten i en URL-resurs.';
$string['indicator:cognitivedepthdef'] = 'URL kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Deltagaren har nått denna procentandel av det kognitiva engagemang som erbjuds av URL-resurserna under detta analysintervall (Nivåer = Ingen visning, Visa)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'URL social';
$string['indicator:socialbreadth_help'] = 'Denna indikator baseras på den sociala bredd som uppnåtts av studenten i en URL-resurs.';
$string['indicator:socialbreadthdef'] = 'URL social';
$string['indicator:socialbreadthdef_help'] = 'Deltagaren har nått denna procentandel av det sociala engagemanget som erbjuds av URL-resurserna under detta analysintervall (Nivåer = Inget deltagande, Deltagaren ensamt)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'Kan inte visa, angiven URL är ogiltig.';
$string['invalidurl'] = 'Angiven URL är ogiltig';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'Modulen <em>URL</em> gör det möjligt för en lärare att tillhandahålla en webblänk som kursresurs. Det går att länka till allt som är fritt tillgängligt online, till exempel dokument eller bilder.  Webbadressen behöver inte vara startsidan för en webbplats. Webbadressen till en viss webbsida kan kopieras och klistras in eller en lärare kan använda filväljaren och välja en länk från en lagringsplats som Flickr, YouTube eller Wikimedia (beroende på vilka lagringsplatser som är aktiverade på webbplatsen).

Det finns ett antal visningsalternativ för webbadressen, till exempel inbäddad eller att den öppnas i ett nytt fönster och avancerade alternativ för att skicka information, till exempel en deltagares namn, till webbadressen om det behövs.

Observera att webbadresser även kan läggas till i någon annan resurs eller aktivitetstyp via textredigeraren.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'URL:er';
$string['page-mod-url-x'] = 'Valfri URL modulsida';
$string['parameterinfo'] = '&amp;parameter=variabel';
$string['parametersheader'] = 'URL-variabler';
$string['parametersheader_help'] = 'I det här avsnittet kan du skicka intern information som en del av URL:en. Detta är användbart om URL:en är en interaktiv webbsida som tar parametrar och du till exempel vill skicka något som t.ex. namnet på den aktuella användaren. Ange namnet på URL:ns parameter i textrutan och välj sedan motsvarande webbplatsvariabel.';
$string['pluginadministration'] = 'Administration av modulen URL';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Höjd på popup-fönster (i pixlar)';
$string['popupheightexplain'] = 'Anger standardhöjden på popup-fönster';
$string['popupwidth'] = 'Bredd på popup-fönster (i pixlar)';
$string['popupwidthexplain'] = 'Anger standardbredden på popup-fönster';
$string['printintro'] = 'Visa beskrivning för URL';
$string['printintroexplain'] = 'Visa URL beskrivning nedanför innehållet? Vissa visningstyper kanske inte visas beskrivningen även om detta är valt.';
$string['privacy:metadata'] = 'Plugin-modulen URL lagrar ingen personlig information.';
$string['rolesinparams'] = 'Ta med namn på roller i parametrar';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'URL till server';
$string['url:addinstance'] = 'Lägg till en ny URL';
$string['url:view'] = 'Visa URL';
