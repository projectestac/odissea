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
 * Strings for component 'editor_marklar', language 'eu', version '4.1'.
 *
 * @package     editor_marklar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insertimage'] = 'Txertatu irudia';
$string['insertlink'] = 'Txertatu fitxategia';
$string['pluginname'] = 'Marklar';
$string['preferences'] = 'Marklar editorearen hobespenak';
$string['preferencesformat'] = 'Marklar erabilita editatuko diren testu-formatu gehigarriak';
$string['preferencesformat_help'] = 'Marklar-ek berez onartzen ditu Markdown formatua duten testuak. Beste formatuetan dauden testuak editatzeko ere erabili daiteke. Aukeratu itzazu beste testu-formatu guztiak horiek ere Marklar-ekin editatu nahi badituzu.

Modu lehenetsian, Marklar Moodleko formatu automatikoa eta testu-lauko formatua duten eremuetan erabiltzen da. HTML formatua editatzeko bestelako testu-editorea (Atto edo TinyMCE esaterako) erabiliko da.';
$string['previewloading'] = 'Aurrebista kargatzen...';
$string['previewoff'] = 'Editatu';
$string['previewon'] = 'Aurrebista';
$string['privacy:export:preferences:format'] = 'Marklar {$a->format} sintaxia duten testuak editatzeko erabili nahi duzun ala ez.';
$string['syntax-format0'] = '<p>Moodleko formatu automatikoak testua modu normalean idazteko aukera ematen du, testu-lauko e-mail bat idazten ariko bazina bezala. Lerro-jauziak mantentzen dira. Nahi izanez gero HTML kodea txertatzeko aukera ere badaukazu eta aplikatu egingo da.</p>';
$string['syntax-format1'] = '<dl>
<dt>Links</dt>
 <dd><code>&lt;a href="https://example.comadibidea.eus"&gt;Estekaren testua&lt;/a&gt;</code></dd>
<dt>Enfasia eta garrantzia</dt>
 <dd><code>&lt;em&gt;Enfasia duen testua&lt;/em&gt;</code></dd>
 <dd><code>&lt;strong&gt;Oso garrantzitsua den testua&lt;/strong&gt;</code></dd>
<dt>Goiburuak</dt>
 <dd><code>&lt;h2&gt;2.maila&lt;/h2&gt;</code></dd>
 <dd><code>&lt;h3&gt;3. maila&lt;/h2&gt;</code></dd>
<dt>Paragrafoak eta lerro-etendurak</dt>
 <dd><code>&lt;p&gt;Paragrafoaren testua&lt;/p&gt;</code></dd>
 <dd><code>Lerro&lt;br&gt;etendura</code></dd>
</dl>';
$string['syntax-format2'] = '<p>Formatu hau erabilgarria da modu zehatz batean erakutsi behar den kode piloa duzunean edo HTMLa idazten joan ahala erakustea nahi duzunean. Hutsuneak eta lerro-etendurak erabili daitezke, baina bestela zure testua ez da ukituko.</p>';
$string['syntax-format4'] = '<dl>
<dt>Estekak</dt>
 <dd><code>[estekaren testua](https://adibidea.eus)</code></dd>
 <dd><code>[estekaren testua](https://adibidea.eus "Estekaren izenburua")</code></dd>
<dt>Enfasia eta garrantzia</dt>
 <dd><code>_Enfasia duen testua_</code></dd>
 <dd><code>*Enfasia duen testua*</code></dd>
 <dd><code>__Oso garrantzitsua den testua__</code></dd>
 <dd><code>**Oso garrantzitsua den testua**</code></dd>
<dt>Goiburuak</dt>
 <dd><code>## 2. maila ##</code></dd>
 <dd><code>### 3. maila ###</code></dd>
<dt>Paragrafoak eta lerro-etendurak</dt>
 <dd>Paragrafoak lerro huts batekin banatu daitezke. Lerro-etendurarako lerroa bi hutsune gehigarrirekin amaitu ezazu.</dd>
<dt>Bloke-aipuak</dt>
 <dd><code>&gt; E-mailetakoen moduko bloke-aipuak</code></dd>
<dt>Zerrendak</dt>
 <dd><code>* Buleten zerrenda-elementua</code></dd>
 <dd><code>1. Zenbakitutako zerrenda-elementua</code></dd>
<dt>Aurreformateatua</dt>
 <dd><code>`funtzioaren_izena()`</code> (lerro artean)</dd>
 <dd><code>&nbsp;&nbsp;&nbsp;kode_blokea()</code> (lau hutsuneekin koskatuta)</dd>
<dt>Lerro horizontala</dt>
 <dd><code>---</code></dd>
 <dd><code>***</code></dd>
<dt>HTMLa</dt>
 <dd>Markdown sintaxiak barne hartzen ez duen edozein formaturako, HTML gordina erabili dezakezu.</dd>
 <dd><code>&lt;span class="badge badge-info"&gt;Oharra&lt;/span&gt;</code></dd>
 <dd><code>&lt;img class="img-responsive" src="…" alt="…" /&gt;</code></dd>
</dl>
<hr>
<p><a target="_blank" href="https://daringfireball.net/projects/markdown/syntax">Markdown sintaxi guztiaren dokumentazioa</a></p>';
$string['syntaxloading'] = 'Sintaxi laguntzailea kargatzen...';
$string['syntaxoff'] = 'Ezkutatu sintaxia';
$string['syntaxon'] = 'Erakutsi sintaxia';
