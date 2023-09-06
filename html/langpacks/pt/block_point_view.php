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
 * Strings for component 'block_point_view', language 'pt', version '4.1'.
 *
 * @package     block_point_view
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminpix'] = 'Predefinição do site:';
$string['blacktrack'] = 'Faixa preta';
$string['blockdisabled'] = '<h3 class="text-danger">O bloco está desativado</h3>';
$string['bluetrack'] = 'Faixa azul';
$string['contentinputlabel'] = 'Conteúdo do bloco';
$string['contentinputlabel_help'] = 'Este campo permite modificar o texto visível no bloco. Se deixado em branco, o bloco ficará oculto para os alunos.';
$string['customemoji'] = 'Emojis personalizados';
$string['customemoji_help'] = 'Pode definir aqui emojis personalizados para usar nas reações .<h5 class="text-danger">Importante:</h5>Nomeie os ficheiros <b><code>[emoji_name].png</code></b> para as imagens dos emojis: <code>easy.png</code>, <code>better.png</code> e <code>hard.png</code>. Também precisa de grupos de emojis <b><code>group_[emojis_initials].png</code></b>, por exemplo: <code>group_EB.png</code> para o grupo de reações Fácil e Melhor. Não se esqueça do ficheiro <b><code>group_.png</code></b> para a imagem sem avaliação. O tamanho de imagem recomendado é 200x200 para emojis e 400x200 para grupos.<br/><br/>São esperados 11 ficheiros:  <code>easy.png</code>, <code>better.png</code>, <code>hard.png</code>, <code>group_.png</code>, <code>group_E.png</code>, <code>group_B.png</code>, <code>group_H.png</code>, <code>group_EB.png</code>, <code>group_EH.png</code>, <code>group_BH.png</code> e <code>group_EBH.png</code>';
$string['custompix'] = 'Personalizado:';
$string['defaultpix'] = 'Predefinido:';
$string['defaulttextbetter'] = 'Estou a melhorar!';
$string['defaulttextcontent'] = 'Este módulo permite reagir e dar níveis de dificuldades às atividades.<br /> <br /><br />Este módulo é desenvolvido por <a href="mailto:q.fombaron@outlook.fr?subject=%22Point%20of%20view%22%20Moodle%20plugin%20-%20Feedback">Quentin Fombaron</a>.<br /><br />Pode editar ou apagar esta mensagem no menu de configuração do bloco<br /><br />';
$string['defaulttexteasy'] = 'Fácil!';
$string['defaulttexthard'] = 'Muito difícil...';
$string['delete_custom_pix'] = 'Apagar emoji personalizado';
$string['deleteemojiconfirmation'] = 'Tem a certeza de que pretende apagar o emoji personalizado para este bloco?
Isto apagará o emoji e os ficheiros guardados atualmente na área de rascunho abaixo. Esta ação não pode ser revertida.';
$string['disable_type'] = 'Desativar todos <b>{$a}</b>';
$string['disableall'] = 'Desativar todos em <b>{$a}</b>';
$string['emojidesc'] = 'Descrição do emoji';
$string['emojidesc_help'] = 'Texto personalizado a ser exibido no topo da reação';
$string['emojitouse'] = 'Emoji a usar';
$string['emojitouse_help'] = 'Escolha um emoji a ser usado como reação nesta disciplina.<br>Pode adicionar o seu próprio emoji personalizado selecionando "Personalizado".';
$string['enable_disable_section'] = 'Ativar/desativar tudo nesta secção';
$string['enable_disable_section_help'] = 'Ativar ou desativar as reações para todos os módulos de atividade nesta secção.';
$string['enable_disable_type'] = 'Ativar/desativar todos deste tipo';
$string['enable_disable_type_help'] = 'Ativar ou desativar as reações para todos os módulos de atividade deste tipo na disciplina.';
$string['enable_type'] = 'Ativar todos <b>{$a}</b>';
$string['enableall'] = 'Ativar todos em <b>{$a}</b>';
$string['enablecustompix'] = 'Usar emojis de reação personalizados';
$string['enabledifficulties'] = 'Ativar <b>Faixas de dificuldade</b>';
$string['enableforfuturemodules'] = 'Ativar para módulos futuros';
$string['enableforfuturemodules_help'] = 'Ativar automaticamente as reações nos novos módulos criados nesta disciplina.';
$string['enablepoint_views'] = 'Permitir <b>Reações</b>';
$string['errorfilemanager'] = '<b>ERRO</b>: O nome de <b>{$a}.png</b> não está em conformidade.';
$string['errorfilemanagerempty'] = 'Indique pelo menos um ficheiro.';
$string['greentrack'] = 'Faixa verde';
$string['header_activities'] = 'Configuração da reação e das faixas de dificuldade';
$string['header_images'] = 'Configuração dos emojis';
$string['highlightactivityrows'] = 'Destacar as linhas de atividade na página da disciplina';
$string['highlightactivityrows_help'] = 'Mostrar um plano de fundo com gradiente cinza ao passar o rato sobre as atividades na página da disciplina. Serve para ajudar no alinhamento vertical das reações nas atividades, mas pode ser desativado com segurança.';
$string['module'] = 'Módulo';
$string['noactivity'] = 'Sem atividade';
$string['nonetrack'] = 'Sem faixa';
$string['pluginname'] = 'Ponto de vista';
$string['point_view:access_overview'] = 'Ver detalhes das reações';
$string['point_view:addinstance'] = 'Adicionar uma instância do bloco de Ponto de vista';
$string['point_view:myaddinstance'] = 'Adicionar uma instância do bloco de Ponto de vista ao Painel de utilizador';
$string['privacy:metadata:activity_votes_database:cmid'] = 'ID da atividade da disciplina';
$string['privacy:metadata:activity_votes_database:courseid'] = 'ID da disciplina';
$string['privacy:metadata:activity_votes_database:userid'] = 'ID do utilizador';
$string['privacy:metadata:activity_votes_database:vote'] = 'Voto : 1 (Fácil!), 2 (Estou a melhorar!), 3 (Muito difícil...)';
$string['privacy:metadata:block_point_view'] = 'O bloco Ponto de vista armazena os votos do utilizador em cada atividade.';
$string['reactions'] = 'Reações';
$string['reactionsdetails'] = 'Detalhes das reações';
$string['reactionsresetsuccessfully'] = 'As reações foram repostas com sucesso.';
$string['reactionsunavailable'] = 'Não pode adicionar ou remover a sua reação neste módulo.';
$string['redtrack'] = 'Faixa vermelha';
$string['resetcoursereactions'] = 'Repor as reações da disciplina <b>{$a}</b>';
$string['resetreactions'] = 'Repor reações';
$string['resetreactions_help'] = 'Repor (apagar) todas as reações dos utilizadores na disciplina';
$string['resetreactionsconfirmation'] = 'Tem a certeza de que pretende repor (apagar) as reações de todos os utilizadores da disciplina <b>{$a}</b>? Esta ação não pode ser revertida.';
$string['showotherreactions'] = 'Mostrar reações de outros utilizadores';
$string['showotherreactions_help'] = 'Permitir que os alunos vejam o número de reações de cada tipo de outros utilizadores num módulo.';
$string['totalreactions'] = 'Total de reações: {$a}';
