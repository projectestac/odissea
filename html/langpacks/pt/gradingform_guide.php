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
 * Strings for component 'gradingform_guide', language 'pt', version '3.11'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Adicionar feedback frequente';
$string['addcriterion'] = 'Adicionar critério';
$string['additionalcomments'] = 'Comentários adicionais';
$string['additionalcommentsforcriterion'] = 'Comentários adicionais para o critério, {$a}';
$string['alwaysshowdefinition'] = 'Mostrar os critérios aos alunos';
$string['backtoediting'] = 'Voltar à edição';
$string['clicktocopy'] = 'Clique para copiar este texto para o critério de feedback';
$string['clicktoedit'] = 'Clique para editar';
$string['clicktoeditname'] = 'Clique para editar o nome do critério';
$string['comment'] = 'Comentário';
$string['commentpickerforcriterion'] = 'Seletor de comentários usados com frequência para {$a} comentários adicionais';
$string['comments'] = 'Feedback frequente';
$string['commentsdelete'] = 'Apagar feedback';
$string['commentsempty'] = 'Clique para editar comentário';
$string['commentsmovedown'] = 'Mover para baixo';
$string['commentsmoveup'] = 'Mover para cima';
$string['confirmdeletecriterion'] = 'Tem a certeza de que pretende apagar este critério?';
$string['confirmdeletelevel'] = 'Tem a certeza de que pretende apagar este nível?';
$string['criterion'] = 'Nome do critério';
$string['criteriondelete'] = 'Apagar critério';
$string['criterionempty'] = 'Clique para editar o critério';
$string['criterionmovedown'] = 'Mover para baixo';
$string['criterionmoveup'] = 'Mover para cima';
$string['criterionname'] = 'Nome do critério';
$string['criterionremark'] = 'Comentário do critério {$a}';
$string['definemarkingguide'] = 'Configurar grelha';
$string['description'] = 'Descrição';
$string['descriptionmarkers'] = 'Descrição para o professor';
$string['descriptionstudents'] = 'Descrição para os alunos';
$string['err_maxscoreisnegative'] = 'A pontuação máxima não é válida, não são permitidos valores negativos';
$string['err_maxscorenotnumeric'] = 'O máximo de pontuação deve ser numérica';
$string['err_nocomment'] = 'O comentário não pode ficar em branco';
$string['err_nodescription'] = 'A descrição para o aluno não pode ficar em branco';
$string['err_nodescriptionmarkers'] = 'A descrição para o professor não pode ficar em branco';
$string['err_nomaxscore'] = 'A pontuação máxima não pode ficar em branco';
$string['err_noshortname'] = 'O nome do critério não pode ficar em branco';
$string['err_scoreinvalid'] = 'A pontuação atribuída a \'{$a->criterianame}\' não é válida, a pontuação máxima possível é: {$a->maxscore}';
$string['err_scoreisnegative'] = 'A pontuação atribuída a \'{$a->criterianame}\' não é válida, não são permitidos valores negativos';
$string['err_shortnametoolong'] = 'O critério do nome deverá ter menos de 256 caracteres.';
$string['gradingof'] = '{$a} avaliado';
$string['guide'] = 'Grelha quantitativa';
$string['guidemappingexplained'] = 'AVISO: A sua grelha de avaliação tem uma nota máxima de <b>{$a->maxscore} pontos</b> mas a nota máxima da atividade é de {$a->modulegrade}  A nota máxima configurada na sua grelha irá ser convertida na nota máxima da atividade.<br />
    As notas intermediárias serão convertidas, respetivamente, e arredondadas para a nota mais próxima.';
$string['guidenotcompleted'] = 'Insira uma nota válida para cada critério';
$string['guideoptions'] = 'Opções da avaliação com grelha quantitativa';
$string['guidestatus'] = 'Estado da grelha';
$string['hidemarkerdesc'] = 'Ocultar a descrição dos critérios ao avaliar';
$string['hidestudentdesc'] = 'Ocultar a descrição dos critérios aos alunos';
$string['informationforcriterion'] = 'Informação de {$a}';
$string['insertcomment'] = 'Inserir um feedback frequente';
$string['maxscore'] = 'Pontuação máxima';
$string['name'] = 'Nome';
$string['needregrademessage'] = 'As definições da avaliação foram alteradas após a avaliação deste aluno. O aluno não poderá ver a avaliação até que verifique a grelha de avaliação e atualize a nota.';
$string['outof'] = 'Pontuação máxima de {$a}';
$string['pluginname'] = 'Grelha quantitativa';
$string['previewmarkingguide'] = 'Pré-visualizar grelha quantitativa';
$string['privacy:metadata:criterionid'] = 'Um identificador do critério de avaliação avançada.';
$string['privacy:metadata:fillingssummary'] = 'Armazena informações sobre a nota e o feedback de um utilizador para a grelha de avaliação.';
$string['privacy:metadata:instanceid'] = 'Um identificador para a nota usada por uma atividade.';
$string['privacy:metadata:preference:showmarkerdesc'] = 'Se deve mostrar a descrição dos critérios de marcadores';
$string['privacy:metadata:preference:showstudentdesc'] = 'Se deve mostrar ao aluno a descrição dos critérios';
$string['privacy:metadata:remark'] = 'Observações relacionadas com este critério de avaliação.';
$string['privacy:metadata:score'] = 'Uma pontuação para este critério de classificação.';
$string['regrademessage1'] = 'Está prestes a guardar alterações numa grelha de avaliação que já foi usada. Verifique se existem notas que necessitem de ser revistas. Se escolher "Marcar para reavaliar", a grelha estará oculta para os alunos até que as notas sejam reavaliadas.';
$string['regrademessage5'] = 'Está prestes a guardar significantes alterações numa grelha de avaliação que já foi anteriormente usada. O valor na pauta não será alterado, mas a grelha ficará oculta para os alunos enquanto decorrer a reavaliação das notas.';
$string['regradeoption0'] = 'Não marcar para reavaliar';
$string['regradeoption1'] = 'Marcar para reavaliar';
$string['remark_help'] = 'Adicione comentários adicionais sobre este critério.';
$string['restoredfromdraft'] = 'NOTA: A última tentativa para avaliar este aluno não foi guardado e as notas foram restauradas. Se deseja cancelar essas alterações clique no botão abaixo \'Cancelar\'.';
$string['save'] = 'Guardar';
$string['saveguide'] = 'Guardar grelha';
$string['saveguidedraft'] = 'Guardar como rascunho';
$string['score'] = 'nota';
$string['score_help'] = 'Insira uma pontuação para {$a->criterion} entre 0 e {$a->maxscore}.';
$string['scoreforcriterion'] = 'Pontuação de {$a}';
$string['showmarkerdesc'] = 'Mostrar descrição dos critérios ao professor';
$string['showmarkspercriterionstudents'] = 'Mostrar os pontos por critério aos alunos';
$string['showstudentdesc'] = 'Mostrar descrição dos critérios aos alunos';
