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
 * Strings for component 'board', language 'pt', version '4.5'.
 *
 * @package     board
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Cancel'] = 'Cancelar';
$string['Ok'] = 'OK';
$string['addrating'] = 'Avaliar publicações';
$string['addrating_all'] = 'Todos';
$string['addrating_none'] = 'Desativada';
$string['addrating_students'] = 'Alunos';
$string['addrating_teachers'] = 'Professores';
$string['aria_addmedia'] = 'Adicionar {type} para a publicação {post} na coluna {column}';
$string['aria_addmedianew'] = 'Adicionar {type} para a nova publicação na coluna {column}';
$string['aria_canceledit'] = 'Cancelar a edição da publicação {post} da coluna {column}';
$string['aria_cancelnew'] = 'Cancelar a nova publicação para a coluna {column}';
$string['aria_choosefileedit'] = 'Selecione o ficheiro para a publicação {post} da coluna {column}';
$string['aria_choosefilenew'] = 'Selecione o ficheiro para a nova publicação da coluna {column}';
$string['aria_deleteattachment'] = 'Apagar anexo da publicação {post} da coluna {column}';
$string['aria_deletecolumn'] = 'Apagar a coluna {column}';
$string['aria_deletepost'] = 'Apagar publicação {post} da coluna {column}';
$string['aria_newcolumn'] = 'Adicionar nova coluna';
$string['aria_newpost'] = 'Adicionar uma nova publicação à coluna {column}';
$string['aria_postedit'] = 'Guardar edição da publicação {post} da coluna {column}';
$string['aria_postnew'] = 'Guardar a nova publicação para a coluna {column}';
$string['aria_ratepost'] = 'Avaliar a publicação {post} da coluna {column}';
$string['background_color'] = 'Cor do fundo';
$string['background_color_help'] = 'Tem de ser uma cor hexadecimal válida, como por exemplo, #00CC99';
$string['background_image'] = 'Imagem de fundo';
$string['board:addinstance'] = 'Adicionar um novo recurso Quadro';
$string['board:manageboard'] = 'Gerir colunas e gerir todas as publicações.';
$string['board:view'] = 'Visualizar o conteúdo do quadro e gerir as próprias publicações.';
$string['boardsettings'] = 'Configurações do quadro';
$string['cancel_button_text'] = 'Cancelar';
$string['choose_file'] = 'Escolha o ficheiro da imagem';
$string['column_colours'] = 'Cores da coluna';
$string['column_colours_desc'] = 'As cores usadas no topo de cada coluna. São cores hexadecimais e devem ser colocadas uma vez por linha com 3 ou 6 caracteres. Se algum dos valores não for corresponder a uma cor, serão usados as cores predefinidas.';
$string['default_column_heading'] = 'Cabeçalho';
$string['delete'] = 'Apagar';
$string['event_add_column'] = 'Coluna adicionada';
$string['event_add_column_desc'] = 'O utilizador com ID \'{$a->userid}\' criou a coluna do quadro com ID \'{$a->objectid}\', com o nome \'{$a->name}\'.';
$string['event_add_note'] = 'Publicação adicionada';
$string['event_add_note_desc'] = 'O utilizador com ID \'{$a->userid}\' criou a publicação no quadro com ID \'{$a->objectid}\' com o cabeçalho \'{$a->heading}\', conteúdo \'{$a->content}\', multimédia \'{$a->media}\' na coluna com ID \'{$a->columnid}\', ID do grupo \'{$a->groupid}\'.';
$string['event_delete_column'] = 'Coluna apagada';
$string['event_delete_column_desc'] = 'O utilizador com ID \'{$a->userid}\' apagou a coluna do quadro com ID \'{$a->objectid}\'.';
$string['event_delete_note'] = 'Publicação apagada';
$string['event_delete_note_desc'] = 'O utilizador com ID \'{$a->userid}\' apagou a publicação no quadro com ID \'{$a->objectid}\' da coluna com ID \'{$a->columnid}\'.';
$string['event_move_note'] = 'Publicação movida';
$string['event_move_note_desc'] = 'O utilizador com ID \'{$a->userid}\' moveu a publicação no quadro com ID \'{$a->objectid}\' para a coluna com ID \'{$a->columnid}\'.';
$string['event_rate_note'] = 'Publicação avaliada';
$string['event_rate_note_desc'] = 'O utilizador com ID \'{$a->userid}\' avaliou a publicação no quadro com ID \'{$a->objectid}\' com \'{$a->rating}\'.';
$string['event_update_column'] = 'Coluna atualizada';
$string['event_update_column_desc'] = 'O utilizador com ID \'{$a->userid}\' alterou a coluna do quadro com ID \'{$a->objectid}\' para \'{$a->name}\'.';
$string['event_update_note'] = 'Publicação atualizada';
$string['event_update_note_desc'] = 'O utilizador com ID \'{$a->userid}\' atualizou no quadro a publicação com ID \'{$a->objectid}\' para cabeçalho \'{$a->heading}\', conteúdo \'{$a->content}\', multimédia \'{$a->media}\' na coluna com ID \'{$a->columnid}\'.';
$string['export_board'] = 'Exportar como CSV';
$string['export_content'] = 'Texto da publicação';
$string['export_email'] = 'E-mail';
$string['export_firstname'] = 'Nome';
$string['export_heading'] = 'Cabeçalho da publicação';
$string['export_info'] = 'Título da publicação';
$string['export_lastname'] = 'Apelido';
$string['export_submissions'] = 'Exportar submissões';
$string['export_timecreated'] = 'Data de criação';
$string['export_url'] = 'URL da publicação';
$string['form_body'] = 'Conteúdo';
$string['form_image_file'] = 'Ficheiro da imagem';
$string['form_mediatype'] = 'Multimédia';
$string['form_title'] = 'Título da publicação';
$string['hideheaders'] = 'Ocultar os cabeçalhos das colunas para os alunos';
$string['history'] = 'Histórico do quadro';
$string['history_refresh'] = 'Temporizador de atualização do quadro';
$string['history_refresh_desc'] = 'Tempo limite, em segundos, entre as atualizações automáticas do quadro. Se definido como 0 ou em branco, o quadro só será atualizado durante as ações do quadro (adicionar/atualizar/etc.)';
$string['historyinfo'] = 'A tabela de histórico do quadro é usada apenas para armazenar registos temporários, que são usados por processos do Javascript para atualizar as visualizações do quadro e, em seguida, são imediatamente apagados.';
$string['invalid_file_extension'] = 'Extensão de ficheiro não aceite para carregamento.';
$string['invalid_file_size_max'] = 'Tamanho de ficheiro muito grande para ser aceite.';
$string['invalid_file_size_min'] = 'Tamanho de ficheiro muito pequeno para ser aceite.';
$string['invalid_youtube_url'] = 'URL inválido do YouTube';
$string['media_selection'] = 'Seleção de multimédia';
$string['media_selection_buttons'] = 'Botões';
$string['media_selection_desc'] = 'Configure como será exibida a seleção de multimédia para as publicações.';
$string['media_selection_dropdown'] = 'Lista pendente';
$string['modal_title_edit'] = 'Editar publicação da coluna {column}';
$string['modal_title_new'] = 'Nova publicação para a coluna {column}';
$string['modulename'] = 'Quadro';
$string['modulename_help'] = 'Uma atividade do Moodle que permite ao professor criar um novo quadro de “postit”.';
$string['modulenameplural'] = 'Quadros';
$string['new_column_icon'] = 'Novo ícone da coluna';
$string['new_column_icon_desc'] = 'Ícone exibido no botão para novas colunas.';
$string['new_note_icon'] = 'Novo ícone da publicação';
$string['new_note_icon_desc'] = 'Ícone exibido no botão para novas publicações.';
$string['note_changed_text'] = 'A publicação que está a editar foi alterada.';
$string['note_changed_title'] = 'Confirmar';
$string['note_deleted_text'] = 'A publicação que estava a editar foi apagada.';
$string['option_empty'] = 'Em branco';
$string['option_image'] = 'Imagem';
$string['option_image_info'] = 'Título da imagem';
$string['option_image_url'] = 'URL da imagem';
$string['option_link_info'] = 'Título da hiperligação';
$string['option_link_url'] = 'URL da hiperligação';
$string['option_youtube'] = 'Vídeo (YouTube)';
$string['option_youtube_info'] = 'Título do vídeo';
$string['option_youtube_url'] = 'URL do Youtube';
$string['pluginadministration'] = 'Administração do quadro';
$string['pluginname'] = 'Quadro';
$string['post_button_text'] = 'Publicar';
$string['post_max_length'] = 'Tamanho máximo da publicação';
$string['post_max_length_desc'] = 'O tamanho máximo permitido do conteúdo. O texto acima deste valor será eliminado.';
$string['postbydate'] = 'Publicar até';
$string['postbyenabled'] = 'Limitar as publicações dos alunos por data';
$string['posts'] = 'Publicações';
$string['rate_note_text'] = 'Tem a certeza de que pretende avaliar esta publicação?';
$string['ratings'] = 'Classificações';
$string['remove_column_text'] = 'Tem a certeza de que pretende apagar a coluna "{$a}" e todas as publicações que contém?';
$string['remove_column_title'] = 'Confirmar';
$string['remove_note_text'] = 'Tem a certeza de que pretende apagar esta publicação e todos os dados que ela contém? Esta ação afetará todos os outros utilizadores da disciplina.';
$string['remove_note_title'] = 'Confirmar';
$string['sortby'] = 'Ordenar por';
$string['sortbydate'] = 'Data de criação';
$string['sortbynone'] = 'Nenhum';
$string['sortbyrating'] = 'Avaliação';
$string['userscanedit'] = 'Permitir que todos os utilizadores editem o posicionamento das suas próprias publicações.';
$string['warning'] = 'Notificação';
