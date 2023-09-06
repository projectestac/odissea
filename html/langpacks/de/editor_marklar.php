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
 * Strings for component 'editor_marklar', language 'de', version '4.1'.
 *
 * @package     editor_marklar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insertimage'] = 'Bild einfügen';
$string['insertlink'] = 'Link einfügen';
$string['pluginname'] = 'Marklar';
$string['preferences'] = 'Einstellungen Marklar-Editor';
$string['preferencesformat'] = 'Zusätzliche Textformate, die auch mit Marklar zu bearbeiten sind';
$string['preferencesformat_help'] = 'Marklar unterstützt nativ Markdown-formatierte Texte. Es kann auch für die Bearbeitung von Texten in anderen Formaten verwendet werden. Markieren Sie alle zusätzlichen Textformate, die Sie auch mit Marklar bearbeiten möchten.

Marklar wird standardmäßig für Felder im Moodle-Text-Format und unformatierten Text verwendet. Zum Bearbeiten von HTML wird ein anderer Rich-Text-Editor (z.B. Atto oder TinyMCE) verwendet.';
$string['previewloading'] = 'Lade Vorschau…';
$string['previewoff'] = 'Bearbeiten';
$string['previewon'] = 'Vorschau';
$string['privacy:export:preferences:format'] = 'Ob Sie Marklar bevorzugen um Textfelder im Format {$a->format} zu bearbeiten.';
$string['syntax-format0'] = '<p>Das Moodle-Text-Format ermöglicht es, Text normal einzugeben, als ob Sie eine reine Text-E-Mail senden würden. Zeilenumbrüche werden beibehalten. Sie können immer noch HTML-Code einbetten, wenn Sie möchten und er wird angewendet.</p>';
$string['syntax-format1'] = '<dl>
<dt>Links</dt>
 <dd><code>&lt;a href="https://example.com"&gt;Link text&lt;/a&gt;</code></dd>
<dt>Hervorhebung und Wichtigkeit</dt>
 <dd><code>&lt;em&gt;Hervorgehobener Text&lt;/em&gt;</code></dd>
 <dd><code>&lt;strong&gt;Sehr wichtiger Text&lt;/strong&gt;</code></dd>
<dt>Titel</dt>
 <dd><code>&lt;h2&gt;Ebene 2&lt;/h2&gt;</code></dd>
 <dd><code>&lt;h3&gt;Ebene 3&lt;/h2&gt;</code></dd>
<dt>Absätze und Zeilenumbrüche</dt>
 <dd><code>&lt;p&gt;Absatztext&lt;/p&gt;</code></dd>
 <dd><code>Zeilen&lt;br&gt;umbruch</code></dd>
</dl>';
$string['syntax-format2'] = '<p>Dieses Format ist nützlich, wenn Sie viel Code oder HTML einfügen müssen, der genau so angezeigt werden sollen, wie Sie es eingegeben haben. Es übersetzt immer noch Leerzeichen und neue Zeilen, aber ansonsten wird Ihr Text nicht berührt.</p>';
$string['syntax-format4'] = '<dl>
<dt>Links</dt>
 <dd><code>[link text](https://example.com)</code></dd>
 <dd><code>[link text](https://example.com "Linktitel")</code></dd>
<dt>Hervorhebung und Wichtigkeit</dt>
 <dd><code>_Hervorgehobener Text_</code></dd>
 <dd><code>*Hervorgehobener Text*</code></dd>
 <dd><code>__Sehr wichtiger Text__</code></dd>
 <dd><code>**Sehr wichtiger Text**</code></dd>
<dt>Titel</dt>
 <dd><code>## Ebene 2 ##</code></dd>
 <dd><code>### Ebene 3 ###</code></dd>
<dt>Absätze und Zeilenumbrüche</dt>
 <dd>Absätze sind durch eine Leerzeile getrennt. Beenden Sie für einen Zeilenumbruch eine Zeile mit zwei oder mehr Leerzeichen</dd>
<dt>Zitatblöcke</dt>
 <dd><code>&gt; E-Mail-Stil von Zitatblöcken</code></dd>
<dt>Listen</dt>
 <dd><code>* Aufzählungspunkt-Listen-Element</code></dd>
 <dd><code>1. Nummeriertes Listen-Element</code></dd>
<dt>Vorformatiert</dt>
 <dd><code>`function_name()`</code> (inline)</dd>
 <dd><code>&nbsp;&nbsp;&nbsp;code_block()</code> (mit vier Leerzeichen einrücken)</dd>
<dt>Horizontale Linie</dt>
 <dd><code>---</code></dd>
 <dd><code>***</code></dd>
<dt>HTML</dt>
 <dd>Verwenden Sie für jedes Markup, das nicht von der Markdown-Syntax abgedeckt wird, einfach HTML.</dd>
 <dd><code>&lt;span class="label label-info"&gt;Mitteilung&lt;/span&gt;</code></dd>
 <dd><code>&lt;img class="img-responsive" src="…" alt="…" /&gt;</code></dd>
</dl>
<hr>
<p><a target="_blank" href="https://daringfireball.net/projects/markdown/syntax">Vollständige Markdown Syntax Dokumentation</a></p>';
$string['syntaxloading'] = 'Lade Syntax-Hilfe…';
$string['syntaxoff'] = 'Syntax verbergen';
$string['syntaxon'] = 'Syntax anzeigen';
