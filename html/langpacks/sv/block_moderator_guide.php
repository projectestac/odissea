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
 * Strings for component 'block_moderator_guide', language 'sv', version '4.4'.
 *
 * @package     block_moderator_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Åtgärder';
$string['addguide'] = 'Lägg till guide';
$string['addguidehelp'] = 'För att lägga till en guide använd Moderator Guide blocket från valfr kurssida.';
$string['addtemplate'] = 'Lägg till mall';
$string['author'] = 'Författare';
$string['cancel'] = 'Avbryt';
$string['cancomplete'] = 'Tillåt guideredigerare att markera guiden som slutförd.';
$string['canreview'] = 'Tillåt guidegranskare att markera guiden som granskad och att lämna en kommentar';
$string['completed'] = 'Slutförd';
$string['configmoderation'] = 'Moderering';
$string['configmoderationdesc'] = 'Låt lärare markera sin guide som slutförd och andra personer att granska guideinnehållet.';
$string['configtitle'] = 'Titel';
$string['confirmdeleteguide'] = 'Bekräfta borttagning av guide';
$string['confirmdeleteguidetext'] = 'Vill du verkligen ta bort denna guide: {$a->name}?';
$string['confirmdeletetemplate'] = 'Bekräfta borttagning av mall';
$string['confirmdeletetemplatetext'] = 'Vill du verkligen ta bort denna mall: {$a->name}?';
$string['course'] = 'Kurs';
$string['defaultguidename'] = 'Standardnamn';
$string['delete'] = 'Ta bort';
$string['description'] = 'Beskrivning';
$string['editguide'] = 'Redigera guide';
$string['edittemplate'] = 'Redigera mall';
$string['guide'] = 'Guide';
$string['guides'] = 'Guider';
$string['hide'] = 'Dölj';
$string['manageguides'] = 'Hantera guider';
$string['managetemplates'] = 'Hantera mallar';
$string['managetemplatesdesc'] = '<strong>Dölj</strong>: mallen kommer inte att vara tillgänglig längre för att skapa guider. Befintliga guider är dock fortfarande tillgängliga.<br/>
<strong>Ta bort</strong>: detta kommer att ta bort mallen och de guider som använder denna mall.<br/>
<strong>Redigera</strong>: endast namn, organisation och beskrivning kommer att kunna redigeras när en guide har skapats med den här mallen.<br/>
<strong>Guider</strong>: endast tillgänglig när en guide har skapats med den här mallen.';
$string['moderation'] = 'Modereringsavsnitt';
$string['moderator_guide:addinstance'] = 'Kan lägga till ett Moderator Guide block';
$string['moderator_guide:cancomplete'] = 'Kan markera en guide som slutförd';
$string['moderator_guide:canreview'] = 'Kan granska en guide';
$string['moderator_guide:canviewcomplete'] = 'Kan visa slutförandestatus';
$string['moderator_guide:canviewreview'] = 'Kan visa granskningskommentarerna (i statusarna granskad/slutförd/ingen)';
$string['moderator_guide:editguide'] = 'Kan redigera ett Moderator Guide-block';
$string['moderator_guide:edittemplate'] = 'Kan redigera en Moderator Guide-mall';
$string['moderator_guide:myaddinstance'] = 'Kan lägga till ett Moderator Guide-block till sin översiktssida';
$string['moderator_guide:viewguide'] = 'Kan visa en Moderator Guide-guide';
$string['moderator_guide:viewguidestatus'] = 'Kan visa all kursguidesstatistik';
$string['moderator_guide:viewtemplate'] = 'Kan visa Moderator Guide-mallar';
$string['moderatorcomment'] = 'Moderatorkommentar';
$string['name'] = 'Namn';
$string['noguidesforthiscourse'] = 'Inga guider för denna kurs.';
$string['notemplate'] = 'Inga mallar - din administratör behöver skapa och visa minst en mall.';
$string['organization'] = 'Organisation';
$string['organizations'] = 'Organisationer';
$string['pluginname'] = 'Moderatorguide';
$string['previewguide'] = 'Förhandsgranska';
$string['profilerestriction'] = 'Begränsa via anpassat profilfält';
$string['profilerestrictiondesc'] = 'Begränsa mallar som är synliga för lärare baserat på det här fältet. Ange till exempel, "organisation" som är kortnamnet för ett anpassat profilfält. Om värdet på det fältet är tomt kommer lärare att se alla mallar. Om det är ifyllt, dvs om man t.ex. anger "organisation" i det fältet kommer mallarna att begränsas baserat på organisationens värde (i varje mall)';
$string['reviewcomment'] = 'Granska kommentar';
$string['reviewed'] = 'Granskad';
$string['sectionx'] = 'Avsnitt {$a->id}';
$string['show'] = 'Visa';
$string['template'] = 'Mall';
$string['templateexample'] = '<pre><i>Detta är ett exempel, redigera det gärna som du vill.</i></pre>
	<h3>Betygsråd för extern betygsättare</h3>
	<p>Om du är en extern betygsättare kommer detta dokument att hjälpa dig att veta hur du bedömer den här kursen.</p>
	<pre><i>Raden nedan är en platshållare för redigeraren. Den ersätts av en Moodle HTML-redigerare på sidan "Lägg till/redigera guide":</i></pre>
	<p>[1:html]</p>
	<br/>
	<p>Du måste kontrollera dessa krav:</p>
	<pre><i>Följande rader är också en platshållare för en redigerare, men denna mer komplexa platshållare innehåller förifylld HTML (här "krav") som kommer att visas i redigeraren. Det hjälper dig att ge några exempel till läraren.</i></pre>
	<p>[2:html:BEGIN]</p>
	<ul>
		<li>krav A</li>
		<li>krav B</li>
		<li>krav C</li>
	</ul>
	<p>[2:html:END]</p>
	<br/>
	<p>Vi rekommenderar att du läser följande filer:</p>
	<pre><i>Följande rad är en platshållare för filhanteraren. Den kommer att ersättas av en Moodles filhanterare på sidan "Lägg till / redigera guide":</i></pre>
	<p>[3:files]</p>
	<br/>
	<p>UK gov Referenser:</p>
	<pre><i>Följande rad är en länkplatshållare. Den kommer att ersättas av 2 textfält (url och länknamn) på sidan "Lägg till / redigera guide" :</i> </pre>
	<p>[4:link]</p>
	<br/>
	<pre><i>Följande rad är en länkplatshållare med ett förifyllt länknamn (endast text visas, html ignoreras):</i> </pre>
	<p>[5:link:BEGIN]<br/> Klicka här om du vill komma åt avdelningssidan<br/>[5:link:END]</p>
	<p><br/>Tack, <br>Vetenskapensuniversitet</p>';
$string['warningdeletetemplate'] = 'VARNING! Du kommer även ta bort följande guider:';
