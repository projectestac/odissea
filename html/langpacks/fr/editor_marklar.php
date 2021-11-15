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
 * Strings for component 'editor_marklar', language 'fr', version '3.11'.
 *
 * @package     editor_marklar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insertimage'] = 'Insérer une image';
$string['insertlink'] = 'Insérer un fichier';
$string['pluginname'] = 'Marklar';
$string['preferences'] = 'Préférences pour l\'éditeur Marklar';
$string['preferencesformat'] = 'Autres formats de texte pouvant être édités avec Marklar';
$string['preferencesformat_help'] = 'Marklar gère nativement les textes au format Markdown. Il peut également être utilisé pour rédiger dans d\'autres formats. Sélectionnez les autres formats de texte que vous souhaitez pouvoir également utiliser avec l\'éditeur Marklar.

Par défaut, Marklar est paramétré pour prendre en charge les textes rédigés aux Format Moodle et Format texte. Pour rédiger en HTML, d\'autres éditeurs de texte riche (comme Atto ou TinyMCE) seront utilisés.';
$string['previewloading'] = 'Chargement de la prévisualisation...';
$string['previewoff'] = 'Modifier';
$string['previewon'] = 'Prévisualiser';
$string['privacy:export:preferences:format'] = 'Si vous préférez utiliser Marklar pour modifier des textes basés sur la syntaxe {$a->format}.';
$string['syntax-format0'] = '<p>Le Format Moodle permet de saisir du texte classiquement, comme si vous rédigiez un courriel au format texte. Les retours à la ligne sont pris en compte. Si vous le souhaitez, vous pouvez également intégrer du code HTML ; il sera pris en compte.</p>';
$string['syntax-format1'] = '<dl>
<dt>Liens</dt>
 <dd><code>&lt;a href="https://example.com"&gt;Link text&lt;/a&gt;</code></dd>
<dt>Emphase et importance</dt>
 <dd><code>&lt;em&gt;Texte mis en emphase&lt;/em&gt;</code></dd>
 <dd><code>&lt;strong&gt;Texte fortement important&lt;/strong&gt;</code></dd>
<dt>Titres</dt>
 <dd><code>&lt;h2&gt;Niveau 2&lt;/h2&gt;</code></dd>
 <dd><code>&lt;h3&gt;Niveau 3&lt;/h2&gt;</code></dd>
<dt>Paragraphes et retours chariot</dt>
 <dd><code>&lt;p&gt;Paragraphe&lt;/p&gt;</code></dd>
 <dd><code>Retour&lt;br&gt;chariot</code></dd>
</dl>';
$string['syntax-format2'] = '<p> Ce format est utile lorsque vous avez besoin de présenter du code ou du HTML, sans qu\'il soit interprété. En effet, s\'il tient tout de même compte des espaces et retours à la ligne, il n\'agit pas sur le contenu textuel. </p>';
$string['syntax-format4'] = '<dl>
<dt>Liens</dt>
 <dd><code>[link text](https://example.com)</code></dd>
 <dd><code>[link text](https://example.com "Link title")</code></dd>
<dt>Emphase et importance</dt>
 <dd><code>_Texte mis en emphase_</code></dd>
 <dd><code>*Texte mis en emphase*</code></dd>
 <dd><code>__Texte fortement important__</code></dd>
 <dd><code>**Texte fortement important**</code></dd>
<dt>Titres</dt>
 <dd><code>## Niveau 2 ##</code></dd>
 <dd><code>### Niveau 3 ###</code></dd>
<dt>Paragraphes et retours chariot</dt>
 <dd>Les paragraphes sont séparés via une ligne vide. Pour un retour chariot, terminez une ligne par 2 espaces ou plus.</dd>
<dt>Guillemets</dt>
 <dd><code>&gt; Style de guillemets que l\'on retrouve dans les courriels</code></dd>
<dt>Listes</dt>
 <dd><code>* Entrée de liste à puces</code></dd>
 <dd><code>1. Entrée de liste ordonnée</code></dd>
<dt>Texte préformaté</dt>
 <dd><code>`function_name()`</code> (élément en-ligne)</dd>
 <dd><code>&nbsp;&nbsp;&nbsp;code_block()</code> (indentation à 4 espaces)</dd>
<dt>Filet horizontal</dt>
 <dd><code>---</code></dd>
 <dd><code>***</code></dd>
<dt>HTML</dt>
 <dd>Pour tout balisage non prise en charge par la syntaxe Markdown, utilisez simplement du HTML brut.</dd>
 <dd><code>&lt;span class="badge badge-info"&gt;Notice&lt;/span&gt;</code></dd>
 <dd><code>&lt;img class="img-responsive" src="…" alt="…" /&gt;</code></dd>
</dl>
<hr>
<p><a target="_blank" href="https://daringfireball.net/projects/markdown/syntax">Documentation complète de la syntaxe Markdown</a></p>';
$string['syntaxloading'] = 'Chargement de l\'aide syntaxique';
$string['syntaxoff'] = 'Cacher la syntaxe';
$string['syntaxon'] = 'Montrer la syntaxe';
