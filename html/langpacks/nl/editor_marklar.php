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
 * Strings for component 'editor_marklar', language 'nl', version '4.4'.
 *
 * @package     editor_marklar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insertimage'] = 'Afbeelding invoegen';
$string['insertlink'] = 'Bestand invoegen';
$string['pluginname'] = 'Marklar';
$string['preferences'] = 'Voorkeuren Marklar editor';
$string['preferencesediting'] = 'Opties bewerken';
$string['preferencesformat'] = 'Bijkomende tekstopmaak kan ook met Marklar bewerkt worden';
$string['preferencesformat_help'] = 'Marklar ondersteunt Markdown opgemaakte teksten. Het kan ook gebruikt worden voor het bewerken van teksten met andere opmaak. Selecteer alle bijkomende tekstopmaak die je ook met Marklar wil bewerken.

Standaard wordt Marklar gebruikt voor Moodle auto-opmaak en platte tekst opgemaakte velden. Voor het bewerken van HTML zal een andere editor voor opgemaakte tekst gebruikt worden (zoals Atto of TinyMCE).';
$string['preferencesmonospace'] = 'Gebruik monospace lettertype';
$string['previewloading'] = 'Voorbeeld laden';
$string['previewoff'] = 'Bewerk';
$string['previewon'] = 'Voorbeeld';
$string['privacy:export:preferences:format'] = 'Of je Marklar wil gebruiken voor het bewerken van teksten met {$a->format} syntax.';
$string['syntax-format0'] = '<p>Moodle auto-opmaaktekst maakt het mogelijk om tekst normaal in te voeren, zoals je een e-mail in platte tekst zou schrijven. Regeleinden worden bewaard. Je kunt HTML-code invoegen als je wil en die zal toegepast worden.</p>';
$string['syntax-format1'] = '<dl>
<dt>Links</dt>
 <dd><code><a href="https://voorbeeld.com">Link tekst</a></code></dd>
<dt>Nadruk en belang</dt>
 <dd><code><em>Benadrukte tekst</em></code></dd>
 <dd><code><strong>Belangrijke tekst</strong></code></dd>
<dt>Hoofdingen</dt>
 <dd><code><h2>Niveau 2</h2></code></dd>
 <dd><code><h3>Niveua 3</h2></code></dd>
<dt>Alinea\'s en nieuwe regels</dt>
 <dd><code><p>Alinea</p></code></dd>
 <dd><code>Line<br>Nieuwe regel</code></dd>
</dl>';
$string['syntax-format2'] = '<p>Deze opmaak is nuttig wanneer je veel code of HTML moet invoegen waarvan je wil dat die exact getoond wordt zoals je het schreef. Spaties en nieuwe regels worden nog wel toegepast, maar voor de rest wordt je tekst niet bijgewerkt.</p>';
$string['syntax-format4'] = '<dl>
<dt>Links</dt>
 <dd><code>[link text](https://voorbeeld.com)</code></dd>
 <dd><code>[link text](https://example.com "Link title")</code></dd>
<dt>Nadruk en belang</dt>
 <dd><code>_Benadrukte tekst_</code></dd>
 <dd><code>*Benadrukte tekst</code></dd>
 <dd><code>__Belangrijke tekst__</code></dd>
 <dd><code>**Belangrijke tekst*</code></dd>
<dt>Koppen</dt>
 <dd><code>## Niveau 2 ##</code></dd>
 <dd><code>### Niveau 3 ###</code></dd>
<dt>Alinea\'s en nieuwe regels</dt>
 <dd>Alinea\'s worden gescheiden door een lege regel. Eindig voor een nieuwe regel je lijn met twee of meer spaties.</dd>
<dt>Citaten</dt>
 <dd><code>> Email-stijl van citeren</code></dd>
<dt>Lijsten</dt>
 <dd><code>* ongenummerd lijstitem</code></dd>
 <dd><code>1. genummerd lijstitem</code></dd>
<dt>Vooraf opgemaakt/dt>
 <dd><code>`function_name()`</code> (inline)</dd>
 <dd><code>   code_block()</code> (inspringen met 4 spaties)</dd>
<dt>Horizontale lijn</dt>
 <dd><code>---</code></dd>
 <dd><code>***</code></dd>
<dt>HTML</dt>
 <dd>Gebruik gewoon HTML voor alle opmaak die je niet met Markdown kunt maken.</dd>
 <dd><code><span class="badge badge-info">Opmerking</span></code></dd>
 <dd><code><img class="img-responsive" src="…" alt="…" /></code></dd>
</dl>
<hr>
<p><a target="_blank" href="https://daringfireball.net/projects/markdown/syntax">Volledige  Markdown syntax documentatie</a></p>';
$string['syntaxloading'] = 'Laden van syntax-hulp ...';
$string['syntaxoff'] = 'Verberg syntax';
$string['syntaxon'] = 'Toon syntax';
