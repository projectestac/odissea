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
 * Strings for component 'tool_lp', language 'pt', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_lp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['activities'] = 'Atividades';
$string['addcohorts'] = 'Adicionar Grupos globais';
$string['addcohortstosync'] = 'Adicionar Grupos globais para sincronizar';
$string['addcompetency'] = 'Adicionar competência';
$string['addcoursecompetencies'] = 'Adicionar competências à disciplina';
$string['addcrossreferencedcompetency'] = 'Adicionar competência referenciada';
$string['addingcompetencywillresetparentrule'] = 'Se adicionar uma nova competência irá remover a regra estabelecida em \'{$a}\'. Tem a certeza de que pretende continuar?';
$string['addnewcompetency'] = 'Adicionar nova competência';
$string['addnewcompetencyframework'] = 'Adicionar novo quadro de competências';
$string['addnewplan'] = 'Adicionar novo plano de aprendizagem';
$string['addnewtemplate'] = 'Adicionar novo modelo de plano de aprendizagem';
$string['addnewuserevidence'] = 'Adicionar novo comprovativo';
$string['addtemplatecompetencies'] = 'Adicionar competências ao modelo de plano de aprendizagem';
$string['aisrequired'] = '\'{$a}\' é necessário';
$string['aplanswerecreated'] = 'Foram criados {$a} planos de aprendizagem.';
$string['aplanswerecreatedmoremayrequiresync'] = 'Foram criados {$a} planos de aprendizagem e serão criados mais no decorrer da próxima sincronização.';
$string['assigncohorts'] = 'Atribuir Grupos globais';
$string['averageproficiencyrate'] = 'A percentagem média de proficiência para os planos de aprendizagem concluídos baseados neste modelo é {$a}%';
$string['cancelreviewrequest'] = 'Cancelar o pedido de revisão';
$string['cannotaddrules'] = 'A competência não pode ser configurada.';
$string['cannotcreateuserplanswhentemplateduedateispassed'] = 'Não é possível criar novos planos de aprendizagem, porque a data limite do modelo expirou ou está prestes a expirar.';
$string['cannotcreateuserplanswhentemplatehidden'] = 'Não podem ser criados novos planos de aprendizagem enquanto este modelo está oculto.';
$string['category'] = 'Categoria';
$string['chooserating'] = 'Selecione uma avaliação';
$string['cohortssyncedtotemplate'] = 'Os grupos globais foram sincronizados com este modelo de plano de aprendizagem';
$string['competenciesforframework'] = 'Competências para {$a}';
$string['competenciesmostoftennotproficient'] = 'Competências usualmente sem proficiênica em planos de aprendizagem concluídos';
$string['competenciesmostoftennotproficientincourse'] = 'Competências sem proficiência nesta disciplina';
$string['competencycannotbedeleted'] = 'A competência \'{$a}\' não pode ser apagada';
$string['competencycreated'] = 'Competência criada';
$string['competencycrossreferencedcompetencies'] = '{$a} competências referenciadas';
$string['competencyframework'] = 'Quadro de competências';
$string['competencyframeworkcreated'] = 'Quadro de competências criado.';
$string['competencyframeworkname'] = 'Nome';
$string['competencyframeworkroot'] = 'Sem ascendentes (competência de topo)';
$string['competencyframeworks'] = 'Quadros de competências';
$string['competencyframeworksrepository'] = 'Repositório de quadros de competências';
$string['competencyframeworkupdated'] = 'Quadro de competências atualizado.';
$string['competencyoutcome_complete'] = 'Marcar como concluído';
$string['competencyoutcome_evidence'] = 'Anexar um comprovativo';
$string['competencyoutcome_none'] = 'Nenhum';
$string['competencyoutcome_recommend'] = 'Recomendar esta competência';
$string['competencypicker'] = 'Selecionar a competência';
$string['competencyrule'] = 'Regra da competência';
$string['competencyupdated'] = 'Competência atualizada';
$string['completeplan'] = 'Completar este plano de aprendizagem';
$string['completeplanconfirm'] = 'Pretende assinalar o plano de aprendizagem \'{$a}\' como concluído? Neste caso, os estados atuais das competências de todos os utilizadores vão ser registados, e o plano passará a ser apenas de leitura.';
$string['configurecoursecompetencysettings'] = 'Configurar competências da disciplina';
$string['configurescale'] = 'Configurar escalas';
$string['coursecompetencies'] = 'Competências da disciplina';
$string['coursecompetencyratingsarenotpushedtouserplans'] = 'As avaliações das competências nesta disciplina não afetam os planos de aprendizagem.';
$string['coursecompetencyratingsarepushedtouserplans'] = 'As avaliações das competências nesta disciplina são automaticamente atualizadas nos planos de aprendizagem.';
$string['coursecompetencyratingsquestion'] = 'Quando uma competência da disciplina é avaliada, a avaliação da competência nos planos de aprendizagem é atualizada ou aplica-se apenas à disciplina?';
$string['coursesusingthiscompetency'] = 'Disciplinas associadas a esta competência';
$string['coveragesummary'] = '{$a->competenciescoveredcount} de {$a->competenciescount} competência encontra-se abrangida ( {$a->coveragepercentage}% )';
$string['createlearningplans'] = 'Criar planos de aprendizagem';
$string['createplans'] = 'Criar planos de aprendizagem';
$string['crossreferencedcompetencies'] = 'Competências referenciadas';
$string['default'] = 'Predefinido';
$string['deletecompetency'] = 'Pretende apagar a competência \'{$a}\'?';
$string['deletecompetencyframework'] = 'Pretende apagar o quadro de competências \'{$a}\'?';
$string['deletecompetencyparenthasrule'] = 'Pretende apagar a competência \'{$a}\'? Isto irá remover o conjunto de regras definidas para as competências ascendentes.';
$string['deleteplan'] = 'Pretende apagar o plano de aprendizagem \'{$a}\'?';
$string['deleteplans'] = 'Apagar os planos de aprendizagem';
$string['deletetemplate'] = 'Pretende apagar o modelo de plano de aprendizagem \'{$a}\'?';
$string['deletetemplatewithplans'] = 'Este modelo possui planos de aprendizagem associados. Deve indicar como processar estes planos.';
$string['deletethisplan'] = 'Apagar este plano de aprendizagem';
$string['deletethisuserevidence'] = 'Apagar este comprovativo';
$string['deleteuserevidence'] = 'Pretende apagar o comprovativo de aprendizagem anterior \'{$a}\'?';
$string['description'] = 'Descrição';
$string['duedate'] = 'Data limite';
$string['duedate_help'] = 'A data limite em que um plano de aprendizagem deve estar concluído.';
$string['editcompetency'] = 'Editar competência';
$string['editcompetencyframework'] = 'Editar quadro de competências';
$string['editplan'] = 'Editar plano de aprendizagem';
$string['editrating'] = 'Editar avaliação';
$string['edittemplate'] = 'Editar modelo de plano de aprendizagem';
$string['editthisplan'] = 'Editar este plano de aprendizagem';
$string['editthisuserevidence'] = 'Editar este comprovativo';
$string['edituserevidence'] = 'Editar comprovativo';
$string['evidence'] = 'Comprovativo';
$string['filterbyactivity'] = 'Filtrar competências por recurso ou atividade';
$string['findcourses'] = 'Procurar disciplinas';
$string['frameworkcannotbedeleted'] = 'O quadro de competências \'{$a}\' não pode ser apagado';
$string['hidden'] = 'Oculto';
$string['hiddenhint'] = '(oculto)';
$string['idnumber'] = 'Número ID';
$string['inheritfromframework'] = 'Herdar do quadro de competências (predefinido)';
$string['itemstoadd'] = 'Itens para adicionar';
$string['jumptocompetency'] = 'Seguir para a competência';
$string['jumptouser'] = 'Seguir para o utilizador';
$string['learningplancompetencies'] = 'Competências do plano de aprendizagem';
$string['learningplans'] = 'Planos de aprendizagem';
$string['levela'] = 'Nível {$a}';
$string['linkcompetencies'] = 'Competências associadas';
$string['linkcompetency'] = 'Competência associada';
$string['linkedcompetencies'] = 'Competências associadas';
$string['linkedcourses'] = 'Disciplinas associadas';
$string['linkedcourseslist'] = 'Disciplinas associadas:';
$string['listcompetencyframeworkscaption'] = 'Lista dos quadros de competências';
$string['listofevidence'] = 'Lista de comprovativos';
$string['listplanscaption'] = 'Lista dos planos de aprendizagem';
$string['listtemplatescaption'] = 'Lista dos modelos de planos de aprendizagem';
$string['loading'] = 'A carregar...';
$string['locatecompetency'] = 'Localizar a competência';
$string['managecompetenciesandframeworks'] = 'Gerir competências e quadros de competências';
$string['modcompetencies'] = 'Competências da disciplina';
$string['modcompetencies_help'] = 'As competências da disciplina foram associadas a esta atividade.';
$string['move'] = 'Mover';
$string['movecompetency'] = 'Mover a competência';
$string['movecompetencyafter'] = 'Mover a competência para depois de \'{$a}\'';
$string['movecompetencyframework'] = 'Mover o quadro de competências';
$string['movecompetencytochildofselfwillresetrules'] = 'Mover a competência vai remover as regras definidas para esta, bem como a localização e o conjunto de regras definidas para as suas competências ascendentes. Tem a certeza de que pretende mover?';
$string['movecompetencywillresetrules'] = 'Mover a competência irá remover a localização e o conjunto de regras definidas para as suas competências ascendentes. Tem a certeza de que pretende mover?';
$string['moveframeworkafter'] = 'Mover o quadro de competência depois de \'{$a}\'';
$string['movetonewparent'] = 'Mover';
$string['myplans'] = 'Os meus planos de aprendizagem';
$string['nfiles'] = '{$a} ficheiro(s)';
$string['noactivities'] = 'Nenhuma atividade associada';
$string['nocompetencies'] = 'Ainda não foram criadas competências neste quadro.';
$string['nocompetenciesinactivity'] = 'Nenhuma competência foi associada a esta atividade ou recurso.';
$string['nocompetenciesincourse'] = 'Ainda não foram associadas competências a esta disciplina.';
$string['nocompetenciesinevidence'] = 'Ainda não foram associadas competências a este comprovativo.';
$string['nocompetenciesinlearningplan'] = 'Ainda não foram associadas competências a este plano de aprendizagem.';
$string['nocompetenciesinlist'] = 'Nenhuma competência foi selecionada.';
$string['nocompetenciesintemplate'] = 'Ainda não foram associadas competências a este modelo de plano de aprendizagem.';
$string['nocompetencyframeworks'] = 'Ainda não foram criados quadros de competências.';
$string['nocompetencyselected'] = 'Nenhuma competência selecionada';
$string['nocrossreferencedcompetencies'] = 'Nenhuma competência foi referenciada a esta competência.';
$string['noevidence'] = 'Não foi adicionado nenhum comprovativo';
$string['nofiles'] = 'Não foi carregado nenhum ficheiro';
$string['nolinkedcourses'] = 'Esta competência não está associada a nenhuma disciplina';
$string['noparticipants'] = 'Não foram encontrados participantes.';
$string['noplanswerecreated'] = 'Nenhum plano de aprendizagem foi criado.';
$string['notemplates'] = 'Ainda não foram criados modelos de planos de aprendizagem.';
$string['nourl'] = 'Sem URL';
$string['nouserevidence'] = 'Ainda não foi adicionado nenhum comprovativo de aprendizagem anterior.';
$string['nouserplans'] = 'Ainda não foram criados planos de aprendizagem.';
$string['oneplanwascreated'] = 'Foi criado um plano de aprendizagem';
$string['outcome'] = 'Resultado da aprendizagem';
$string['parentcompetency'] = 'Competência ascendente';
$string['parentcompetency_edit'] = 'Editar competência ascendente';
$string['parentcompetency_help'] = 'Indique a competência ascendente da competência que será adicionada. Pode indicar outra competência do mesmo quadro, ou a raiz do quadro de competências para uma competência de topo.';
$string['path'] = 'Localização:';
$string['planapprove'] = 'Ativar';
$string['plancompleted'] = 'Plano de aprendizagem concluído';
$string['plancreated'] = 'Plano de aprendizagem criado';
$string['plandescription'] = 'Descrição';
$string['planname'] = 'Nome';
$string['plantemplate'] = 'Selecione o modelo de plano de aprendizagem';
$string['plantemplate_help'] = 'Um plano de aprendizagem criado a partir de um modelo, irá conter uma lista das competências que correspondem ao modelo. As atualizações ao modelo serão refletidas em todos os planos criados a partir deste.';
$string['planunapprove'] = 'Enviar novamente para rascunho';
$string['planupdated'] = 'Plano de aprendizagem atualizado';
$string['pluginname'] = 'Planos de aprendizagem';
$string['points'] = 'Pontos';
$string['pointsgivenfor'] = 'Pontos para \'{$a}\'';
$string['privacy:metadata'] = 'O módulo Planos de aprendizagem não armazena dados pessoais.';
$string['proficient'] = 'Proficiente';
$string['progress'] = 'Progresso';
$string['rate'] = 'Avaliar';
$string['ratecomment'] = 'Observações do comprovativo';
$string['rating'] = 'Avaliação';
$string['ratingaffectsonlycourse'] = 'Avaliar uma competência apenas atualiza a competência nesta disciplina';
$string['ratingaffectsuserplans'] = 'Avaliar uma competência também atualiza a competência em todos os planos de aprendizagem';
$string['reopenplan'] = 'Reabrir este plano de aprendizagem';
$string['reopenplanconfirm'] = 'Pretende reabrir o plano de aprendizagem \'{$a}\'? Neste caso, o estado das competências dos utilizadores que foi registado no momento em que o plano foi concluído anteriormente será apagado, e o plano voltará a estar ativo.';
$string['requestreview'] = 'Pedido de revisão';
$string['reviewer'] = 'Avaliador';
$string['reviewstatus'] = 'Estado da revisão';
$string['savechanges'] = 'Guardar alterações';
$string['scale'] = 'Escala';
$string['scale_help'] = 'Uma escala determina como é medida a proficiência numa competência. Depois de selecionar uma escala esta necessita de ser configurada.

* O item selecionado como \'Predefinido\' é a avaliação atribuída quando uma competência é concluída automaticamente.
* Os item(ns) selecionado(s) como \'Proficiente\' indica(m) que valor(es) irão marcar as competências como proficientes quando estas são avaliadas.';
$string['scalevalue'] = 'Valor da escala';
$string['search'] = 'Pesquisa...';
$string['selectcohortstosync'] = 'Selecione os grupos globais a sincronizar';
$string['selectcompetencymovetarget'] = 'Selecione o local para onde pretende mover esta competência:';
$string['selectedcompetency'] = 'Competência selecionada';
$string['selectuserstocreateplansfor'] = 'Selecione os utilizadores para os quais pretende criar planos de aprendizagem';
$string['sendallcompetenciestoreview'] = 'Enviar todas as competências em revisão para comprovativos de aprendizagem anterior \'{$a}\'';
$string['sendcompetenciestoreview'] = 'Enviar competências para revisão';
$string['shortname'] = 'Nome';
$string['sitedefault'] = '(Site predefinido)';
$string['startreview'] = 'Iniciar a revisão';
$string['state'] = 'Processo';
$string['status'] = 'Estado';
$string['stopreview'] = 'Terminar a revisão';
$string['stopsyncingcohort'] = 'Parar de sincronizar grupos globais';
$string['taxonomies'] = 'Taxonomias';
$string['taxonomy_add_behaviour'] = 'Adicionar comportamento';
$string['taxonomy_add_competency'] = 'Adicionar competência';
$string['taxonomy_add_concept'] = 'Adicionar conceito';
$string['taxonomy_add_domain'] = 'Adicionar domínio';
$string['taxonomy_add_indicator'] = 'Adicionar indicador';
$string['taxonomy_add_level'] = 'Adicionar nível';
$string['taxonomy_add_outcome'] = 'Adicionar resultado da aprendizagem';
$string['taxonomy_add_practice'] = 'Adicionar prática';
$string['taxonomy_add_proficiency'] = 'Adicionar proficiência';
$string['taxonomy_add_skill'] = 'Adicionar habilidade';
$string['taxonomy_add_value'] = 'Adicionar valor';
$string['taxonomy_edit_behaviour'] = 'Editar comportamento';
$string['taxonomy_edit_competency'] = 'Editar competência';
$string['taxonomy_edit_concept'] = 'Editar conceito';
$string['taxonomy_edit_domain'] = 'Editar domínio';
$string['taxonomy_edit_indicator'] = 'Editar indicador';
$string['taxonomy_edit_level'] = 'Editar nível';
$string['taxonomy_edit_outcome'] = 'Editar resultado da aprendizagem';
$string['taxonomy_edit_practice'] = 'Editar prática';
$string['taxonomy_edit_proficiency'] = 'Editar proficiência';
$string['taxonomy_edit_skill'] = 'Editar habilidade';
$string['taxonomy_edit_value'] = 'Editar valor';
$string['taxonomy_parent_behaviour'] = 'Comportamento ascendente';
$string['taxonomy_parent_competency'] = 'Competência ascendente';
$string['taxonomy_parent_concept'] = 'Conceito ascendente';
$string['taxonomy_parent_domain'] = 'Domínio ascendente';
$string['taxonomy_parent_indicator'] = 'Indicador ascendente';
$string['taxonomy_parent_level'] = 'Nível ascendente';
$string['taxonomy_parent_outcome'] = 'Resultado da aprendizagem de nível superior';
$string['taxonomy_parent_practice'] = 'Prática ascendente';
$string['taxonomy_parent_proficiency'] = 'Proficiência ascendente';
$string['taxonomy_parent_skill'] = 'Habilidade ascendente';
$string['taxonomy_parent_value'] = 'Valor ascendente';
$string['taxonomy_selected_behaviour'] = 'Comportamento selecionado';
$string['taxonomy_selected_competency'] = 'Competência selecionada';
$string['taxonomy_selected_concept'] = 'Conceito selecionado';
$string['taxonomy_selected_domain'] = 'Domínio selecionado';
$string['taxonomy_selected_indicator'] = 'Indicador selecionado';
$string['taxonomy_selected_level'] = 'Nível selecionado';
$string['taxonomy_selected_outcome'] = 'Resultado da aprendizagem selecionado';
$string['taxonomy_selected_practice'] = 'Prática selecionada';
$string['taxonomy_selected_proficiency'] = 'Proeficiência selecionada';
$string['taxonomy_selected_skill'] = 'Habilidade selecionada';
$string['taxonomy_selected_value'] = 'Valor selecionado';
$string['template'] = 'Modelo de plano de aprendizagem';
$string['templatebased'] = 'Baseado num modelo';
$string['templatecohortnotsyncedwhileduedateispassed'] = 'Os grupos globais não serão sincronizados caso a data limite do modelo já tenha sido ultrapassada.';
$string['templatecohortnotsyncedwhilehidden'] = 'Os grupos globais não serão sincronizados enquanto este modelo estiver oculto.';
$string['templatecompetencies'] = 'Competências do modelo de plano de aprendizagem';
$string['templatecreated'] = 'Modelo de plano de aprendizagem criado';
$string['templatename'] = 'Nome';
$string['templates'] = 'Modelos de planos de aprendizagem';
$string['templateupdated'] = 'Modelo de plano de aprendizagem atualizado';
$string['totalrequiredtocomplete'] = 'Total necessário para concluir';
$string['unlinkcompetencycourse'] = 'Pretende desassociar a competência \'{$a}\' da disciplina?';
$string['unlinkcompetencyplan'] = 'Pretende desassociar a competência \'{$a}\' do plano de aprendizagem?';
$string['unlinkcompetencytemplate'] = 'Pretende desassociar a competência \'{$a}\' do modelo de plano de aprendizagem?';
$string['unlinkplanstemplate'] = 'Desassociar os planos de aprendizagem dos seus modelos';
$string['unlinkplantemplate'] = 'Desassociar do modelo de plano de aprendizagem';
$string['unlinkplantemplateconfirm'] = 'Pretende desassociar o plano de aprendizagem \'{$a}\' do seu modelo? Qualquer alteração efetuada ao modelo deixará de ser aplicada ao plano de aprendizagem. Esta ação é irreversível.';
$string['uponcoursecompletion'] = 'Após a conclusão da disciplina:';
$string['uponcoursemodulecompletion'] = 'Após a conclusão da atividade:';
$string['usercompetencyfrozen'] = 'Este registo está agora inativo. O mesmo reflete o estado da competência do utilizador quando o seu plano de aprendizagem foi marcado como concluído.';
$string['userevidence'] = 'Comprovativo de aprendizagem anterior';
$string['userevidencecreated'] = 'O comprovativo de aprendizagem anterior foi criado';
$string['userevidencedescription'] = 'Descrição';
$string['userevidencefiles'] = 'Ficheiros';
$string['userevidencename'] = 'Nome';
$string['userevidencesummary'] = 'Sumário';
$string['userevidenceupdated'] = 'O comprovativo de aprendizagem anterior foi atualizado';
$string['userevidenceurl'] = 'URL';
$string['userevidenceurl_help'] = 'O URL deve começar com o prefixo \'http://\' ou \'https://\'.';
$string['viewdetails'] = 'Ver detalhes';
$string['visible'] = 'Visível';
$string['visible_help'] = 'Um quadro de competências pode ser ocultado enquanto estiver a ser configurado ou atualizado para uma nova versão.';
$string['when'] = 'Quando';
$string['xcompetencieslinkedoutofy'] = '{$a->x} de {$a->y} competências foram associadas a disciplinas';
$string['xcompetenciesproficientoutofy'] = 'Tem proficiência em {$a->x} de {$a->y} competências';
$string['xcompetenciesproficientoutofyincourse'] = 'Tem proficiência em {$a->x} de {$a->y} competências nesta disciplina';
$string['xplanscompletedoutofy'] = '{$a->x} de {$a->y} planos de aprendizagem foram concluídos neste modelo';
