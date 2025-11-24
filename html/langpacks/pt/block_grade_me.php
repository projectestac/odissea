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
 * Strings for component 'block_grade_me', language 'pt', version '4.5'.
 *
 * @package     block_grade_me
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alt_gradebook'] = 'Ir para a pauta de \'{$a->course_name}\'…';
$string['alt_mark'] = 'verificar';
$string['alt_mod'] = 'Ir para {$a->mod_name} na pauta…';
$string['datetime'] = '%B %d, %l:%M %p';
$string['excess'] = 'Existem mais de {$a->maxcourses} disciplinas com trabalho não avaliado.';
$string['expand'] = 'Contrair/Expandir tudo';
$string['grade_me:addinstance'] = 'Adicionar um novo bloco Falta Avaliar';
$string['grade_me:myaddinstance'] = 'Adicionar um novo bloco Falta Avaliar ao Painel do utilizador';
$string['grade_me_tools'] = 'Ferramentas';
$string['grade_me_tools_desc'] = '<p><a href="{$a}/blocks/grade_me/quiz_update_ngrade.php">Atualizar tentativas do teste que faltam avaliar</a></p>';
$string['link_grade_img'] = 'Avaliar trabalho...';
$string['link_gradebook'] = 'Ir para {$a->course_name}…';
$string['link_gradebook_icon'] = 'Ir para a pauta de {$a->course_name}…';
$string['link_mod'] = 'Ir para {$a->mod_name}';
$string['link_mod_img'] = 'Ir para {$a->mod_name} na pauta...';
$string['link_user_profile'] = 'Perfil de {$a->first_name}…';
$string['nothing'] = 'Nada para avaliar!';
$string['pluginname'] = 'Falta Avaliar';
$string['pluginname-reset'] = 'Falta Avaliar - repor tabela';
$string['quiz_update_ngrade_complete'] = 'Atualização completa';
$string['quiz_update_ngrade_success'] = 'A lista de tentativas do teste foi atualizada com sucesso. Atualmente existem {$a} perguntas que precisam ser avaliadas.';
$string['settings_adminviewall'] = 'Mostrar tudo aos administradores';
$string['settings_configadminviewall'] = 'Permitir aos administradores o direito de ver todos os trabalhos não avaliados - não apenas para disciplinas onde têm uma função de avaliação.';
$string['settings_configenablepre'] = 'Deve o "Falta Avaliar" mostrar a atividade não avaliada do módulo "{$a->plugin_name}"?';
$string['settings_configmaxage'] = 'O idade máxima, em dias, até que à qual os itens classificáveis serão exibidos. Itens mais antigos que este valor serão ocultados. Digite 0 para sem limite.';
$string['settings_configmaxcourses'] = 'Defina o número máximo de disciplinas não avaliadas para mostrar. Um valor muito alto pode afetar o desempenho.';
$string['settings_configshowhidden'] = 'Permite mostrar itens por avaliar em disciplinas ocultas';
$string['settings_enablepre'] = 'Mostrar';
$string['settings_maxage'] = 'Idade máxima';
$string['settings_maxcourses'] = 'Máximo de disciplinas mostradas';
$string['settings_showhidden'] = 'Mostrar itens de disciplinas ocultas';
$string['title'] = 'Falta Avaliar';
