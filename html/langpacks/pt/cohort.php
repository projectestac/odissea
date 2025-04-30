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
 * Strings for component 'cohort', language 'pt', version '4.4'.
 *
 * @package     cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Adicionar novo Grupo global';
$string['allcohorts'] = 'Todos os Grupos globais';
$string['anycohort'] = 'Qualquer';
$string['assign'] = 'Atribuir membros';
$string['assigncohorts'] = 'Atribuir membros aos Grupos globais';
$string['assignto'] = 'Membros do Grupo global \'{$a}\'';
$string['backtocohorts'] = 'Voltar aos Grupos globais';
$string['bulkadd'] = 'Adicionar a Grupo global';
$string['bulknocohort'] = 'Não foram encontrados Grupos globais';
$string['categorynotfound'] = 'A categoria <b>{$a}</b> não foi encontrada ou não tem permissão para criar um Grupo global nessa localização. Será usado o contexto predefinido.';
$string['cohort'] = 'Grupo global';
$string['cohortmember'] = 'Membro de Grupo global';
$string['cohorts'] = 'Grupos globais';
$string['cohortsin'] = '{$a}: Grupos globais disponíveis';
$string['component'] = 'Origem';
$string['contextcohortnotallowed'] = 'Grupo global <b>{$a}</b> não permitido neste contexto.
.';
$string['contextnotfound'] = 'O contexto <b>{$a}</b> não foi encontrado ou não tem permissão para criar um Grupo global nessa localização. Será usado o contexto predefinido.';
$string['csvcontainserrors'] = 'Foram detetados erros nos dados CSV. Consulte os detalhes abaixo.';
$string['csvcontainswarnings'] = 'Foram detetados avisos nos dados CSV. Consulte os detalhes abaixo.';
$string['csvextracolumns'] = 'A coluna <b>{$a}</b> será ignorada.';
$string['currentusers'] = 'Utilizadores atuais';
$string['currentusersmatching'] = 'Correspondência dos utilizadores atuais';
$string['defaultcontext'] = 'Contexto predefinido';
$string['delcohort'] = 'Apagar Grupo global';
$string['delconfirm'] = 'Irá apagar o Grupo global \'{$a}\' e todos os dados associados.';
$string['description'] = 'Descrição';
$string['displayedrows'] = '{$a->displayed} linhas exibidas num total de {$a->total}.';
$string['duplicateidnumber'] = 'Já existe um Grupo global com o número de identificação (ID) indicado';
$string['editcohort'] = 'Editar Grupo global';
$string['editcohortidnumber'] = 'Editar o ID do Grupo global';
$string['editcohortname'] = 'Editar o nome do Grupo global';
$string['eventcohortcreated'] = 'Grupo global criado';
$string['eventcohortdeleted'] = 'Grupo global apagado';
$string['eventcohortmemberadded'] = 'Utilizador adicionado a um Grupo global';
$string['eventcohortmemberremoved'] = 'Utilizador removido de um Grupo global';
$string['eventcohortupdated'] = 'Grupo global atualizado';
$string['external'] = 'Grupo global externo';
$string['idnumber'] = 'Número de identificação (ID)';
$string['invalidtheme'] = 'Tema do Grupo global não existe';
$string['memberofcohort'] = 'Membro do Grupo global';
$string['memberscount'] = 'Tamanho';
$string['name'] = 'Nome';
$string['namecolumnmissing'] = 'Existe algo errado com o formato do ficheiro CSV. Por favor, verifique se estão incluídos os nomes corretos das colunas. Para adicionar utilizadores a um Grupo Global, aceda a  "Carregar utilizadores" na Administração do Site.';
$string['namefieldempty'] = 'O campo \'Nome\' não pode estar em branco';
$string['newidnumberfor'] = 'Novo ID para o Grupo global {$a}';
$string['newnamefor'] = 'Novo nome para o Grupo global {$a}';
$string['nocomponent'] = 'Criado manualmente';
$string['potusers'] = 'Utilizadores potenciais';
$string['potusersmatching'] = 'Utilizadores potenciais para correspondência';
$string['preview'] = 'Pré-visualização';
$string['privacy:metadata:cohort_members'] = 'Informação sobre o grupo de utilizadores';
$string['privacy:metadata:cohort_members:cohortid'] = 'O ID do grupo';
$string['privacy:metadata:cohort_members:timeadded'] = 'O tempo exato de indicação de quando o utilizador foi adicionado ao grupo';
$string['privacy:metadata:cohort_members:userid'] = 'O ID do utilizador associado ao grupo';
$string['removeuserwarning'] = 'Remover utilizadores dos Grupos globais significa cancelar a inscrição nas disciplinas, o que faz com que estes percam as suas configurações, notas, grupos e outras informações nessas disciplinas.';
$string['search'] = 'Pesquisar';
$string['searchcohort'] = 'Pesquisar Grupos globais';
$string['selectcohort'] = 'Selecione o grupo global';
$string['selectfromcohort'] = 'Selecionar utilizadores do Grupo global';
$string['systemcohorts'] = 'Grupos globais do sistema';
$string['unknowncohort'] = 'Grupo global desconhecido ({$a})!';
$string['uploadcohorts'] = 'Carregar Grupos globais';
$string['uploadcohorts_help'] = 'Os  Grupos globais podem ser carregados via ficheiro de texto. O ficheiro deve ter o seguinte formato:

* Cada linha do ficheiro contém um registo
* Cada registo é uma linha com uma série de dados separados pelo separador selecionado
* O primeiro registo contém uma lista de campos que definem o formato do resto do ficheiro
* O campo \'name\' é obrigatório
* Os campos opcionais são: idnumber, description, descriptionformat, visible, context, category, category_id, category_idnumber, category_path';
$string['uploadedcohorts'] = 'Carregar {$a} Grupos globais';
$string['useradded'] = 'Adicionar utilizador ao Grupo global \'{$a}\'';
$string['visible'] = 'Visível';
$string['visible_help'] = 'Qualquer Grupo global pode ser visualizado por utilizadores com a permissão \'moodle/cohort:view\' no contexto do Grupo global. Os Grupos globais visíveis também podem ser visualizados pelos utilizadores nas disciplinas subjacentes.';
