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
 * Strings for component 'cohort', language 'pt', branch 'MOODLE_31_STABLE'
 *
 * @package   cohort
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Adicionar novo grupo global';
$string['allcohorts'] = 'Todos os grupos globais';
$string['anycohort'] = 'Qualquer';
$string['assign'] = 'Atribuir';
$string['assigncohorts'] = 'Atribuir membros dos grupos globais';
$string['assignto'] = 'Membros do grupo global \'{$a}\'';
$string['backtocohorts'] = 'Voltar aos grupos globais';
$string['bulkadd'] = 'Adicionar a grupo global';
$string['bulknocohort'] = 'Não foram encontrados grupos globais';
$string['categorynotfound'] = 'A categoria <b>{$a}</b> não foi encontrada ou não tem permissão para criar um grupo global nessa localização. Será usado o contexto predefinido.';
$string['cohort'] = 'Grupo global';
$string['cohorts'] = 'Grupos globais';
$string['cohortsin'] = '{$a}: grupos globais disponíveis';
$string['component'] = 'Origem';
$string['contextnotfound'] = 'O contexto <b>{$a}</b> não foi encontrado ou não tem permissão para criar um grupo global nessa localização. Será usado o contexto predefinido.';
$string['csvcontainserrors'] = 'Foram detetados erros nos dados CSV. Consulte os detalhes abaixo.';
$string['csvcontainswarnings'] = 'Foram detetados avisos nos dados CSV. Consulte os detalhes abaixo.';
$string['csvextracolumns'] = 'A coluna(s) <b>{$a}</b> será ignorada.';
$string['currentusers'] = 'Utilizadores atuais';
$string['currentusersmatching'] = 'Correspondência dos utilizadores atuais';
$string['defaultcontext'] = 'Contexto predefinido';
$string['delcohort'] = 'Apagar grupo global';
$string['delconfirm'] = 'Tem a certeza de que pretende apagar o grupo global \'{$a}\'?';
$string['description'] = 'Descrição';
$string['displayedrows'] = '{$a->displayed} linhas exibidas num total de {$a->total}.';
$string['duplicateidnumber'] = 'Já existe um grupo global com o ID indicado';
$string['editcohort'] = 'Editar grupo global';
$string['editcohortidnumber'] = 'Editar ID do grupo global';
$string['editcohortname'] = 'Editar nome do grupo global';
$string['eventcohortcreated'] = 'Grupo global criado';
$string['eventcohortdeleted'] = 'Grupo global eliminado';
$string['eventcohortmemberadded'] = 'Utilizador adicionado a um grupo global';
$string['eventcohortmemberremoved'] = 'Utilizador removido de um grupo global';
$string['eventcohortupdated'] = 'Grupo global atualizado';
$string['external'] = 'Grupo global externo';
$string['idnumber'] = 'ID';
$string['memberscount'] = 'Tamanho';
$string['name'] = 'Nome';
$string['namecolumnmissing'] = 'Há algo de errado com o formato do ficheiro CSV. Por favor, verifique que inclui nomes de coluna.';
$string['namefieldempty'] = 'O campo do nome não pode estar vazio';
$string['newidnumberfor'] = 'Novo ID para o grupo global {$a}';
$string['newnamefor'] = 'Novo nome para o grupo global {$a}';
$string['nocomponent'] = 'Criado manualmente';
$string['potusers'] = 'Utilizadores potenciais';
$string['potusersmatching'] = 'Utilizadores potenciais para correspondência';
$string['preview'] = 'Pré-visualização';
$string['removeuserwarning'] = 'Remover utilizadores dos grupos globais significa desinscreve-los de várias disciplinas, o que faz com que estes percam as suas configurações, notas, grupos e outras informações nessas disciplinas.';
$string['search'] = 'Procurar';
$string['searchcohort'] = 'Procurar grupos globais';
$string['selectfromcohort'] = 'Selecionar utilizadores do grupo global';
$string['systemcohorts'] = 'Grupos globais do sistema';
$string['unknowncohort'] = 'Grupo global desconhecido ({$a})!';
$string['uploadcohorts'] = 'Carregar grupos globais';
$string['uploadcohorts_help'] = 'Os grupos globais podem ser carregados através de um ficheiro de texto. O formato do ficheiro deverá cumprir com o seguinte:

* Cada linha do ficheiro contém um registo;
* Cada registo consiste numa série de dados separados por vírgulas (ou outro delimitador);
* O primeiro registo contém uma lista de campos que definem o formato do resto do ficheiro;
* O campo \'name\' é obrigatório;
* Os restantes campos são opcionais (idnumber, description, descriptionformat, visible, context, category, category_id, category_idnumber, category_path).';
$string['uploadedcohorts'] = 'Carregar {$a} grupos globais';
$string['useradded'] = 'Adicionar utilizador ao grupo global "{$a}"';
$string['visible'] = 'Visível';
$string['visible_help'] = 'Qualquer grupo global pode ser visualizado por utilizadores com a capacidade \'moodle/cohort:view\' no contexto do grupo global. Os grupos globais visíveis também podem ser visualizados pelos utilizadores nas disciplinas subjacentes.';
