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
 * Strings for component 'tiny_multilang2', language 'pt', version '4.1'.
 *
 * @package     tiny_multilang2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['highlight'] = 'Destacar delimitadores';
$string['highlight_desc'] = 'Destacar visualmente no editor os delimitadores de conteúdos multilingue (por exemplo: {mlang XX} e {mlang}) no editor WYSIWYG).';
$string['highlightcss'] = 'CSS para tag de idioma';
$string['highlightcss_desc'] = 'CSS utilizado para destacar os delimitadores do conteúdo multilingue.

Se pretende mostrar o idioma para os blocos multilingues, pode usar algo como o seguinte (este exemplo é para o idioma português-portugal, as cores provavelmente não são as melhores):


<pre>
.multilang-begin:lang(pt):before {
    content: "pt";
    position: relative;
    top: -0.5em;
    font-weight: bold;
    background-color: #e05e5e;
    color: #ffffff;
}
</pre>';
$string['multilang2:desc'] = 'Ajuda a adicionar conteúdo multilingue (o Filtro Conteúdo Multilingue (v2) tem de estar ativado)';
$string['multilang2:language'] = 'Idioma';
$string['multilang2:other'] = 'Outro';
$string['multilang2:viewlanguagemenu'] = 'Ver a lista pendente de idiomas no editor TinyMCE';
$string['pluginname'] = 'Conteúdo Multilingue (v2)';
$string['privacy:metadata'] = 'O módulo Conteúdo Multilingue (v2) para o Tiny não armazena quaisquer dados pessoais.';
$string['requiremultilang2'] = 'Requer o Filtro Conteúdo Multilingue (v2)';
$string['requiremultilang2_desc'] = 'Se ativar esta opção, a lista pendente de idiomas fica visível apenas quando o Filtro Conteúdo Multilingue (v2) está ativado.';
$string['settings'] = 'Configuração do Conteúdo Multilingue (v2) para o Tiny';
$string['showalllangs'] = 'Mostrar todos os idiomas';
$string['showalllangs_desc'] = 'Se ativar esta opção, a lista pendente de idiomas conterá todos os idiomas suportados pelo Moodle. Caso contrário, apenas os idiomas instalados e ativados serão mostrados.';
