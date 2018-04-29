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
 * Strings for component 'tool_usertours', language 'pt', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_usertours
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Acima';
$string['actions'] = 'Ações';
$string['appliesto'] = 'Aplica-se a';
$string['backdrop'] = 'Mostrar com plano de fundo';
$string['backdrop_help'] = 'Pode usar um plano de fundo para realçar a parte da página para onde está a apontar.

Atenção: os planos de fundo não são compatíveis com algumas partes da página tal como, por exemplo, a barra de navegação.';
$string['below'] = 'Abaixo';
$string['block'] = 'Bloco';
$string['block_named'] = 'Bloco \'{$a}\'';
$string['cachedef_stepdata'] = 'Lista das etapas da demonstração ao utilizador';
$string['cachedef_tourdata'] = 'Lista de informações das demonstrações ao utilizador ativadas que é procurada em todas as páginas';
$string['confirmstepremovalquestion'] = 'Tem a certeza de que pretende remover esta etapa?';
$string['confirmstepremovaltitle'] = 'Confirmar a eliminação da etapa';
$string['confirmtourremovalquestion'] = 'Tem a certeza de que pretende remover esta demonstração?';
$string['confirmtourremovaltitle'] = 'Confirmar a eliminação da demonstração';
$string['content'] = 'Conteúdo';
$string['content_heading'] = 'Conteúdo';
$string['content_help'] = 'O conteúdo que descreve a etapa pode ser adicionado como texto simples, incluído em palavras-chave multilingue se for necessário (para uso com o filtro de conteúdo em vários idiomas).

Em alternativa, um ID de string do idioma pode ser inserido no identificador de formato, componente (sem parênteses ou espaço após a vírgula).';
$string['cssselector'] = 'Seletor CSS';
$string['defaultvalue'] = 'Valor predefinido ({$a})';
$string['delay'] = 'Atraso antes de mostrar a etapa';
$string['delay_help'] = 'Opcionalmente, pode optar por adicionar um atraso antes que a etapa seja exibida.

Este atraso é em milissegundos.';
$string['description'] = 'Descrição';
$string['done'] = 'Concluído';
$string['editstep'] = 'Edição de "{$a}"';
$string['enabled'] = 'Ativado';
$string['endtour'] = 'Fim da demonstração';
$string['event_step_shown'] = 'Etapa visualizada';
$string['event_tour_ended'] = 'Demonstração terminada';
$string['event_tour_reset'] = 'Reiniciar demonstração';
$string['event_tour_started'] = 'Demonstração iniciada';
$string['exporttour'] = 'Exportar demonstração';
$string['filter_header'] = 'Filtros da demonstração';
$string['filter_help'] = 'Selecione as condições sob as quais a demonstração será mostrada. Todos os filtros devem corresponder a uma demonstração a ser mostrada a um utilizador.';
$string['filter_role'] = 'Papel';
$string['filter_role_help'] = 'Uma demonstração pode ser exclusiva para utilizadores com papel selecionado no contexto em que a demonstração é mostrada. Por exemplo, restringir uma demonstração de Painel do utilizador aos utilizadores com o papel de aluno não funcionará se os utilizadores tiverem o papel de aluno numa disciplina (como geralmente é o caso). Uma demonstração de Painel do utilizador só pode ser restrita a utilizadores com um papel de sistema.';
$string['filter_theme'] = 'Tema';
$string['filter_theme_help'] = 'Mostrar a demonstração quando o utilizador estiver a usar um dos temas selecionados.';
$string['importtour'] = 'Importar demonstração';
$string['left'] = 'Esquerda';
$string['modifyshippedtourwarning'] = 'Esta é uma demonstração ao utilizador que vem com o Moodle. Quaisquer modificações poderão ser substituídas durante a próxima atualização do site.';
$string['movestepdown'] = 'Ir para etapa anterior';
$string['movestepup'] = 'Ir para etapa seguinte';
$string['movetourdown'] = 'Mover demonstração para baixo';
$string['movetourup'] = 'Mover demonstração para cima';
$string['name'] = 'Nome';
$string['newstep'] = 'Nova etapa';
$string['newtour'] = 'Criar nova demonstração';
$string['next'] = 'Seguinte';
$string['options_heading'] = 'Opções';
$string['orphan'] = 'Mostrar se o destino não for encontrado';
$string['orphan_help'] = 'Mostre a etapa se o destino não for encontrado na página.';
$string['pathmatch'] = 'Aplicar à correspondência do URL';
$string['pathmatch_help'] = 'As demonstrações serão mostradas em qualquer página cujo URL corresponda a este valor.

Pode usar o carácter % como uma série numérica para dar significado a qualquer coisa.
Alguns exemplos de valores:

* /my/% - para corresponder ao Painel do utilizador
* /course/view.php?id=2 - para corresponder a determinada disciplina
* /mod/forum/view.php% - para corresponder à lista de discussão do fórum
* /user/profile.php% - para corresponder à página de perfil do utilizador

Se pretender mostrar uma demonstração na Página inicial do site, pode usar o valor: "FRONTPAGE".';
$string['pausetour'] = 'Pausa';
$string['placement'] = 'Posicionamento';
$string['placement_help'] = 'Uma etapa pode ser colocada acima, abaixo, à esquerda ou à direita do destino. Acima ou abaixo é recomendado, uma vez que se ajustam melhor em dispositivos móveis.

Se não for possível ajustar a etapa no local especificado de uma determinada página, ela será automaticamente colocada noutro lugar.';
$string['pluginname'] = 'Demonstrações ao utilizador';
$string['reflex'] = 'Clique para avançar';
$string['reflex_help'] = 'Ir para a próxima etapa quando clicar no destino.';
$string['resettouronpage'] = 'Repor a demonstração ao utilizador nesta página';
$string['resumetour'] = 'Retomar';
$string['right'] = 'Direita';
$string['select_block'] = 'Selecione um bloco';
$string['selector_defaulttitle'] = 'Digite um título descritivo';
$string['selectordisplayname'] = 'Um seletor CSS correspondente a \'{$a}\'';
$string['selecttype'] = 'Selecione o tipo de etapa';
$string['sharedtourslink'] = 'Repositório de demonstrações';
$string['skip'] = 'Saltar';
$string['target'] = 'Destino';
$string['target_block'] = 'Bloco';
$string['target_heading'] = 'Destino da etapa';
$string['target_selector'] = 'Seletor';
$string['target_selector_targetvalue'] = 'Seletores CSS';
$string['target_selector_targetvalue_help'] = 'Um seletor CSS serve para poder usar como destino quase todos os elementos da página. O seletor apropriado pode ser facilmente encontrado através das ferramentas de desenvolvimento para o seu navegador da Web.';
$string['targettype'] = 'Tipo de destino';
$string['targettype_help'] = 'Cada etapa é associada a uma parte da página - o destino. Os tipos de destino são:

* Bloco - para mostrar uma etapa ao lado de um bloco específico
* Seletor CSS - para definir com precisão a área de destino usando CSS
* Mostrar no meio da página - para uma etapa que não precisa de ser associada a uma parte específica da página';
$string['target_unattached'] = 'Mostrar no meio da página';
$string['title'] = 'Título';
$string['title_help'] = 'O título de uma etapa pode ser adicionado como texto simples, incluído em palavras-chave multilingue se for necessário (para uso com o filtro de conteúdo em vários idiomas).

Em alternativa, um ID de string do idioma pode ser inserido no identificador de formato, componente (sem parênteses ou espaço após a vírgula).';
$string['tour1_content_addingblocks'] = 'Na verdade, pense cuidadosamente sobre incluir quaisquer blocos nas suas páginas. Os blocos não são mostrados na aplicação móvel do Moodle, por isso, como regra geral, é muito melhor certificar-se de que o seu site funciona bem sem quaisquer blocos.';
$string['tour1_content_blockregion'] = 'Existe ainda uma área com blocos. Recomenda-se a remoção completa dos blocos Navegação e Administração, uma vez que toda a funcionalidade destes está noutro lugar no tema Boost.';
$string['tour1_content_customisation'] = 'Para personalizar a aparência do seu site e da página principal, use o menu de configurações no canto deste cabeçalho. Clique em Ativar o modo de edição.';
$string['tour1_content_end'] = 'Esta foi uma demonstração ao utilizador, um novo recurso no Moodle 3.2. Não será mostrada novamente a menos que a reinicie através da hiperligação existente no rodapé. Como administrador, também pode criar as suas demonstrações!';
$string['tour1_content_navigation'] = 'A maioria da navegação é agora feita através desta caixa de navegação. Os conteúdos mostrados dependem de onde está no site. Use o botão na parte superior para ocultá-la ou mostrá-la.';
$string['tour1_content_welcome'] = 'Bem-vindo ao tema Boost para o Moodle 3.2. Se já usou o Moodle antes, irá notar que as coisas estão um pouco diferentes.';
$string['tour1_title_addingblocks'] = 'A adicionar blocos';
$string['tour1_title_blockregion'] = 'Região do bloco';
$string['tour1_title_customisation'] = 'Personalização';
$string['tour1_title_end'] = 'Fim da demonstração';
$string['tour1_title_navigation'] = 'Navegação';
$string['tour1_title_welcome'] = 'Bem-vindo';
$string['tour2_content_addblock'] = 'Se ativar o modo de edição, poderá adicionar blocos da caixa de navegação. No entanto, pense cuidadosamente sobre incluir quaisquer blocos nas suas páginas. Os blocos não são mostrados na aplicação móvel do Moodle, por isso, para uma melhor experiência do utilizador é melhor certificar-se de que a disciplina funciona bem, sem quaisquer blocos.';
$string['tour2_content_addingblocks'] = 'Pode adicionar blocos a esta página através deste botão. No entanto, pense cuidadosamente sobre incluir quaisquer blocos nas suas páginas. Os blocos não são mostrados na aplicação móvel do Moodle, por isso, para uma melhor experiência do utilizador é melhor certificar-se de que a disciplina funciona bem, sem quaisquer blocos.';
$string['tour2_content_customisation'] = 'Para alterar as configurações da disciplina, use o menu de configurações no canto deste cabeçalho. Também encontrará um menu de configurações semelhante na página inicial de todas as atividades. Clique em Ativar o modo de edição.';
$string['tour2_content_end'] = 'Esta foi uma demonstração ao utilizador, um novo recurso no Moodle 3.2. Não será mostrada novamente a menos que a reinicie através da hiperligação existente no rodapé. Se necessário, o administrador do site também pode criar outras demonstrações para este site.';
$string['tour2_content_navigation'] = 'A navegação é agora feita através desta caixa de navegação. Use o botão na parte superior para ocultá-la ou mostrá-la. Verá que existem hiperligações para as secções principais da sua disciplina.';
$string['tour2_content_opendrawer'] = 'Tente abrir agora a caixa de navegação.';
$string['tour2_content_participants'] = 'Ver os participantes aqui. Também é onde pode adicionar ou remover alunos.';
$string['tour2_content_welcome'] = 'Bem-vindo ao tema Boost para o Moodle 3.2. Se já usou o Moodle antes, irá notar que as coisas estão um pouco diferentes aqui na página da disciplina.';
$string['tour2_title_addblock'] = 'Adicionar um bloco';
$string['tour2_title_addingblocks'] = 'A adicionar blocos';
$string['tour2_title_customisation'] = 'Personalização';
$string['tour2_title_end'] = 'Fim da demonstração';
$string['tour2_title_navigation'] = 'Navegação';
$string['tour2_title_opendrawer'] = 'Abrir a caixa de navegação';
$string['tour2_title_participants'] = 'Participantes da disciplina';
$string['tour2_title_welcome'] = 'Bem-vindo';
$string['tourconfig'] = 'Ficheiro de configuração da demonstração a ser importado';
$string['tourisenabled'] = 'Demonstração ativada';
$string['tourlist_explanation'] = 'Pode criar as demonstrações que pretender e ativá-las para diferentes partes do Moodle. Apenas pode criar uma demonstração para cada página.';
$string['tour_resetforall'] = 'O estado da demonstração foi redefinido. Será mostrada novamente a todos os utilizadores.';
$string['tours'] = 'Demonstrações';
$string['usertours'] = 'Demonstrações ao utilizador';
$string['usertours:managetours'] = 'Criar, editar e eliminar demonstrações';
$string['viewtour_edit'] = 'Pode <a href="{$a->editlink}">editar os valores predefinidos da demonstração</a> e <a href="{$a->resetlink}">forçar a demonstração a ser mostrada</a> novamente a todos os utilizadores.';
$string['viewtour_info'] = 'Esta é a demonstração \'{$a->tourname}\'. Aplica-se ao caminho \'{$a->path}\'.';
