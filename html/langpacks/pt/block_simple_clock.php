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
 * Strings for component 'block_simple_clock', language 'pt', version '4.4'.
 *
 * @package     block_simple_clock
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['after_noon'] = 'p.m.';
$string['before_noon'] = 'a.m.';
$string['clock_separator'] = ':';
$string['clock_title_default'] = 'Relógio';
$string['config_clock_visibility'] = 'Relógios visíveis';
$string['config_clock_visibility_help'] = '<p>Com esta opção, é possível controlar o que o utilizador irá ver:</p>
<ul>
<li>hora no servidor,</li>
<li>hora na sua própria máquina, ou</li>
<li>ambos.</li>
</ul>';
$string['config_day'] = 'Mostrar dia da semana';
$string['config_day_help'] = '<p>Mostrar o dia da semana fornece informação adicional para estudantes que possam estar num fuso horário com um dia a mais ou um dia a menos.</p>';
$string['config_header'] = 'Mostrar cabeçalho';
$string['config_header_help'] = '<p>Com esta configuração, é possível controlar se o cabeçalho do bloco, incluindo o título, será mostrado.</p>
<p style="background:yellow;border:3px dashed black;padding:10px;"><strong>Nota</strong><br />
Quando a "Edição" é ativada, o cabeçalho do bloco será mostrado a professores/administradores.
Quando a "Edição" é desativada, o cabeçalho será ocultado.
Se selecionar a opção "Não", os alunos não irão ver o cabeçalho, independentemente de a "Edição" estar ativada ou desativada.</p>';
$string['config_icons'] = 'Mostrar ícones';
$string['config_icons_help'] = '<p>Com esta configuração, é possível controlar se são mostrados ícones junto a cada etiqueta de relógio.</p>
<p>O ícone do site é mostrado junto à etiqueta do "servidor". A imagem do utilizador é mostrada junto ao seu relógio.</p>';
$string['config_seconds'] = 'Mostrar segundos';
$string['config_seconds_help'] = '<p>Mostrar os segundos irá mostrar aos utilizadores a hora incluindo segundos em todos os relógios visíveis.</p>
<p style="background:yellow;border:3px dashed black;padding:10px;"><strong>Aviso</strong><br />
A hora mostrada inicialmente é a de quando a página foi criada.
Quando o conteúdo desta página chega ao navegador do utilizador, a diferença temporal inclui um atraso (normalmente de alguns segundos). Isto é na maioria das vezes aceitável, uma vez que qualquer interação com o Moodle envolve um atraso, mas esse atraso será mais evidente com os segundos a serem mostrados.</p>';
$string['config_show_both_clocks'] = 'Mostrar relógios do servidor e do utilizador';
$string['config_show_server_clock'] = 'Mostrar apenas o relógio do servidor';
$string['config_show_user_clock'] = 'Mostrar apenas o relógio do utilizador';
$string['config_title'] = 'Título alternativo';
$string['config_title_help'] = '<p>Esta configuração permite alterar o título do bloco.</p>
<p>Se não for fornecida uma alternativa, será usado o título predefinido.</p>
<p>Se o cabeçalho do bloco estiver oculto, o título não irá aparecer.</p>';
$string['config_twenty_four_hour_time'] = 'Mostrar a hora em formato 24h';
$string['day_names'] = 'Dom,Seg,Ter,Qua,Qui,Sex,Sáb';
$string['javascript_disabled'] = 'Para permitir que os relógios atualizem, ative o JavaScript no seu navegador.';
$string['loading'] = 'A carregar...';
$string['pluginname'] = 'Relógio Simples';
$string['server'] = 'Servidor';
$string['simple_clock:addinstance'] = 'Adicionar um novo bloco de Relógio Simples';
$string['simple_clock:myaddinstance'] = 'Adicionar um novo bloco Relógio Simples ao Painel do utilizador';
$string['you'] = 'Utilizador';
