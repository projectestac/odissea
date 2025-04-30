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
 * Strings for component 'editor_marklar', language 'pt', version '4.4'.
 *
 * @package     editor_marklar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insertimage'] = 'Inserir imagem';
$string['insertlink'] = 'Inserir ficheiro';
$string['pluginname'] = 'Marklar';
$string['preferences'] = 'Preferências do editor Marklar';
$string['preferencesediting'] = 'Opções da edição';
$string['preferencesformat'] = 'Formatos de texto adicionais para serem também editados com Marklar';
$string['preferencesformat_help'] = 'Marklar suporta nativamente formatos de texto Markdown. Também pode ser utilizado para editar textos noutros formatos. Selecione todos os formatos de texto adicionais que deseja editar também com o Marklar.

Por definição, Marklar é usado no auto-formato do Moodle e campos de texto simples. Para edição de HTML, será utilizado outro editor de texto (como Atto ou TinyMCE).';
$string['preferencesmonospace'] = 'Usar fonte monoespaçada';
$string['previewloading'] = 'A carregar pré-visualização';
$string['previewoff'] = 'Editar';
$string['previewon'] = 'Pré-visualização';
$string['privacy:export:preferences:format'] = 'Se prefere, ou não, usar o Marklar para editar textos com a sintaxe {$a->format}.';
$string['syntax-format0'] = '<p>O auto-formato do Moodle permite escrever texto normalmente, como se estivesse a enviar um e-mail de texto simples. As quebras de linha serão mantidas. Pode incorporar código HTML, se pretender, e ele será aplicado.</p>';
$string['syntax-format1'] = '<dl>
<dt> Hiperligações</dt>
<dd><code><a href="https://example.com">Texto da ligação</a></code></dd>
<dt>Ênfase e importância</dt>
<dd><code><em>Texto salientado</em></code></dd>
<dd><code><strong>Texto muito importante</strong></code></dd>
<dt>Cabeçalhos</dt>
<dd><code><h2>Nível 2</h2></code></dd>
<dd><code><h3>Nível  3</h2></code></dd>
<dt>Parágrafos e quebras de linha</dt>
<dd><code><p>Texto do parágrafo</p></code></dd>
<dd><code>Quebra<br>de linha</code></dd>
</dl>';
$string['syntax-format2'] = '<p>Este formato é útil quando precisa de incluir muito código ou HTML que pretende mostrar exatamente como o escreveu. Irá traduzir espaços e novas linhas, mas, caso contrário, o texto não será alterado.</p>';
$string['syntax-format4'] = '<dl>
<dt>Hiperligações</dt>
<dd><code>[texto da ligação](https://example.com)</code></dd>
<dd><code>[texto da ligação](https://example.com "Título")</code></dd>
<dt>Ênfase e importância</dt>
<dd><code>_Texto salientado_</code></dd>
<dd><code>*Texto salientado*</code></dd>
<dd><code>__Texto muito importante__</code></dd>
<dd><code>**Texto muito importante**</code></dd>
<dt>Cabeçalhos</dt>
<dd><code>## Nível 2 ##</code></dd>
<dd><code>### Nível 3 ###</code></dd>
<dt>Parágrafos e quebras de linha</dt>
<dd>Os parágrafos são separados por uma linha em branco. Para uma quebra de linha, finalize uma linha com dois ou mais espaços.</dd>
<dt>Bloco de citações</dt>
<dd><code>> Bloco de citações tipo e-mail</code></dd>
<dt>Listas</dt>
<dd><code>* Item da lista de marcas</code></dd>
<dd><code>1. Item da lista numerada</code></dd>
<dt>Pré-formatado</dt>
<dd><code>`function_name()`</code> (inline)</dd>
<dd><code>&nbsp;&nbsp;&nbsp;code_block()</code> (avanço com quatro espaços)</dd>
<dt>Régua horizontal</dt>
<dd><code>---</code></dd>
<dd><code>***</code></dd>
<dt>HTML</dt>
<dd>Para qualquer marcação que não esteja abrangida pela sintaxe de Markdown, use apenas HTML simples.</dd>
<dd><code>&lt;span class="badge badge-info"&gt;Aviso&lt;/span&gt;</code></dd>
<dd><code>&lt;img class="img-responsive" src="…" alt="…" /&gt;</code></dd>
</dl>
<hr>
<p><a target="_blank" href="https://daringfireball.net/projects/markdown/syntax">Documentação completa sobe a sintaxe Markdown</a></p>';
$string['syntaxloading'] = 'A carregar a ajuda da sintaxe…';
$string['syntaxoff'] = 'Ocultar sintaxe';
$string['syntaxon'] = 'Mostrar sintaxe';
