<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'filter_mathjaxloader', language 'pt', branch 'MOODLE_31_STABLE'
 *
 * @package   filter_mathjaxloader
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Delimitadores de equação adicionais';
$string['additionaldelimiters_help'] = 'O filtro MathJax analisa texto para equações contidas entre caracteres delimitadores.

A lista de caracteres delimitadores reconhecidos pode ser adicionada para aqui (p. ex., AsciiMath usa `).

Os delimitadores podem conter vários caracteres e vários delimitadores podem ser separados por vírgulas.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'HTTPS MathJax URL';
$string['httpsurl_help'] = 'URL completo para a biblioteca MathJax. Usado quando a página é carregada via https (seguro).';
$string['httpurl'] = 'HTTP MathJax URL';
$string['httpurl_help'] = 'URL completo para biblioteca MathJax. Usado quando a página é carregada via http.';
$string['localinstall'] = 'Instalação local MathJax';
$string['localinstall_help'] = 'A configuração predefinida de MathJax usa a versão CDN de MathJax, mas o MathJax pode ser instalado localmente, se necessário.

Isto pode ser útil para economizar largura de banda ou por causa das restrições de proxy local.

Para utilizar uma instalação local do MathJax, primeiro descarregue a biblioteca MathJax completa a partir de http://www.mathjax.org/. Em seguida, instale-o num servidor web. Por fim, atualize as configurações de filtro MathJax httpurl e/ou httpsurl para apontar para o MathJax.js URL local.';
$string['mathjaxsettings'] = 'Configuração MathJax';
$string['mathjaxsettings_desc'] = 'A configuração predefinida do MathJax deve adequar-se à maioria dos utilizadores, no entanto, o MathJax é altamente configurável e qualquer uma das opções de configuração predefinida do MathJax podem ser adicionadas aqui.';
$string['texfiltercompatibility'] = 'Compatibilidade do filtro TeX';
$string['texfiltercompatibility_help'] = 'O filtro MathJax pode ser utilizado como um substituto para o filtro de notação Tex.

Para suportar todos os delimitadores suportados pelo filtro de notação TeX, MathJax será configurado para exibir todas as equações no alinhamento do texto.';
