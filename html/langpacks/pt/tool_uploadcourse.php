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
 * Strings for component 'tool_uploadcourse', language 'pt', version '4.1'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Permitir exclusões';
$string['allowdeletes_help'] = 'Se o campo de exclusão é aceite ou não.';
$string['allowrenames'] = 'Permitir renomeação';
$string['allowrenames_help'] = 'Se o campo de renomeação é aceite ou não.';
$string['allowresets'] = 'Permitir reiniciar';
$string['allowresets_help'] = 'Se o campo reiniciar é aceite ou não';
$string['cachedef_helper'] = 'Ajudante de caching';
$string['cannotdeletecoursenotexist'] = 'Não é possível eliminar uma disciplina que não existe';
$string['cannotforcelang'] = 'Não tem permissão para forçar o idioma para esta disciplina';
$string['cannotgenerateshortnameupdatemode'] = 'Não é possível gerar um nome curto quando as atualizações são permitidas';
$string['cannotreadbackupfile'] = 'Não é possível ler o ficheiro da cópia de segurança';
$string['cannotrenamecoursenotexist'] = 'Não é possível renomear uma disciplina que não existe';
$string['cannotrenameidnumberconflict'] = 'Não é possível renomear a disciplina, o número de identificação (ID) está em conflito com uma disciplina existente';
$string['cannotrenameshortnamealreadyinuse'] = 'Não é possível renomear a disciplina, o nome curto já está em uso';
$string['cannotupdatefrontpage'] = 'Não tem permissão para modificar a página principal.';
$string['canonlyrenameinupdatemode'] = 'Só é possível renomear uma disciplina quando a atualização é permitida';
$string['canonlyresetcourseinupdatemode'] = 'Só é possível reiniciar uma disciplina no modo de atualização';
$string['couldnotresolvecatgorybyid'] = 'Não foi possível resolver a categoria por ID';
$string['couldnotresolvecatgorybyidnumber'] = 'Não foi possível resolver a categoria pelo número de identificação (ID)';
$string['couldnotresolvecatgorybypath'] = 'Não foi possível resolver a categoria pelo caminho';
$string['coursecreated'] = 'Disciplina criada';
$string['coursedeleted'] = 'Disciplina apagada';
$string['coursedeletionnotallowed'] = 'Não é permitido eliminar disciplina';
$string['coursedoesnotexistandcreatenotallowed'] = 'A disciplina não existe e não é permitido criar disciplina';
$string['courseexistsanduploadnotallowed'] = 'A  disciplina existe e não é permitido atualizar';
$string['coursefile'] = 'Ficheiro';
$string['coursefile_help'] = 'O ficheiro tem de ser um ficheiro CSV.';
$string['courseidnumberincremented'] = 'Número de identificação (ID) da disciplina incrementado de {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Processamento da disciplina';
$string['courserenamed'] = 'Disciplina renomeada';
$string['courserenamingnotallowed'] = 'Não é permitido renomear disciplina';
$string['coursereset'] = 'Disciplina reiniciada';
$string['courseresetnotallowed'] = 'Não é permitido reiniciar disciplina';
$string['courserestored'] = 'Disciplina restaurada';
$string['coursescreated'] = 'Disciplinas criadas: {$a}';
$string['coursesdeleted'] = 'Disciplinas apagadas: {$a}';
$string['courseserrors'] = 'Disciplinas com erros: {$a}';
$string['courseshortnamegenerated'] = 'Nomes curtos de disciplinas gerados: {$a}';
$string['courseshortnameincremented'] = 'Nomes curtos de disciplinas incrementados {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Total de disciplinas: {$a}';
$string['coursesupdated'] = 'Disciplinas atualizadas: {$a}';
$string['coursetemplatename'] = 'Restaurar a partir desta disciplina depois do carregamento';
$string['coursetemplatename_help'] = 'Indique o nome curto de uma disciplina existente para usar como um modelo na criação de todas as disciplinas';
$string['coursetorestorefromdoesnotexist'] = 'A disciplina a partir da qual pretende fazer o restauro não existe';
$string['courseupdated'] = 'Disciplina atualizada';
$string['createall'] = 'Criar todas e incrementar o nome curto, se necessário';
$string['createnew'] = 'Criar apenas as novas disciplinas, ignorar as existentes';
$string['createorupdate'] = 'Criar as novas disciplinas ou atualizar as existentes';
$string['csvdelimiter'] = 'Separador CSV';
$string['csvdelimiter_help'] = 'O caráter que separa a série de dados em cada registo.';
$string['csvfileerror'] = 'Existe algo de errado com o formato do ficheiro CSV. Verifique a correspondência entre o número de cabeçalhos e colunas e que o separador e a codificação do ficheiro estão corretos. {$a}';
$string['csvline'] = 'Linha';
$string['customfieldinvalid'] = 'O campo personalizado \'{$a}\' está em branco ou contém dados inválidos';
$string['defaultvalues'] = 'Valores predefinidos da disciplina';
$string['defaultvaluescustomfieldcategory'] = 'Valores predefinidos para \'{$a}\'';
$string['downloadcontentnotallowed'] = 'Não é permitido configurar o descarregamento do conteúdo da disciplina';
$string['encoding'] = 'Codificação';
$string['encoding_help'] = 'Codificação do ficheiro CSV.';
$string['errorcannotcreateorupdateenrolment'] = 'Não é possível criar ou atualizar o método de inscrição \'{$a}\'';
$string['errorcannotdeleteenrolment'] = 'Não é possível apagar o método de inscrição \'{$a}\'';
$string['errorcannotdisableenrolment'] = 'Não é possível desativar o método de inscrição \'{$a}\'';
$string['errorwhiledeletingcourse'] = 'Erro ao eliminar a disciplina';
$string['errorwhilerestoringcourse'] = 'Erro ao restaurar a disciplina';
$string['generatedshortnamealreadyinuse'] = 'O nome curto gerado já está a ser usado';
$string['generatedshortnameinvalid'] = 'O nome curto gerado é inválido';
$string['id'] = 'ID';
$string['idnumberalreadyinuse'] = 'Número de identificação (ID) já em uso por outra disciplina';
$string['importoptions'] = 'Opções de importar disciplina';
$string['invalidbackupfile'] = 'Ficheiro de cópia de segurança inválido';
$string['invalidcourseformat'] = 'Formato de disciplina inválido';
$string['invalidcsvfile'] = 'Entrada inválida de ficheiro CSV';
$string['invaliddownloadcontent'] = 'Descarregamento inválido do valor do conteúdo da disciplina';
$string['invalidencoding'] = 'Codificação inválida';
$string['invalideupdatemode'] = 'O modo de atualização selecionado é inválido';
$string['invalidfullnametoolong'] = 'O campo \'Nome completo da disciplina\' está limitado a {$a} caracteres';
$string['invalidmode'] = 'O modo selecionado é inválido';
$string['invalidroles'] = 'Nomes de papel inválidos: {$a}';
$string['invalidshortname'] = 'Nome curto inválido';
$string['invalidshortnametoolong'] = 'O campo \'Nome curto\' está limitado a {$a} caracteres';
$string['invalidvisibilitymode'] = 'Modo de visibilidade inválido';
$string['missingmandatoryfields'] = 'Valor em falta para campos obrigatórios: {$a}';
$string['missingshortnamenotemplate'] = 'Não foram definidos o nome curto e o modelo de nome curto em falta';
$string['mode'] = 'Modo de carregamento';
$string['mode_help'] = 'Esta opção especifica se as disciplinas podem ser criadas e/ou atualizadas.';
$string['nochanges'] = 'Sem alterações';
$string['pluginname'] = 'Carregar disciplina';
$string['preview'] = 'Pré-visualização';
$string['privacy:metadata'] = 'O módulo Carregar Disciplina não armazena dados pessoais.';
$string['reset'] = 'Reiniciar disciplina depois do carregamento';
$string['reset_help'] = 'Define se a disciplina é reiniciada depois de criada/atualizada.';
$string['restoreafterimport'] = 'Restaurar depois de importar';
$string['result'] = 'Resultado';
$string['rowpreviewnum'] = 'Pré-visualizar linhas';
$string['rowpreviewnum_help'] = 'Número de linhas do ficheiro CSV que serão visualizadas na página seguinte. Esta opção existe para limitar o tamanho da página seguinte.';
$string['shortnametemplate'] = 'Modelo para gerar um nome curto';
$string['shortnametemplate_help'] = 'O nome curto da disciplina é exibido na navegação. Pode usar a sintaxe modelo (%f = fullname, %i = idnumber) ou inserir um valor inicial que será incrementado.';
$string['templatefile'] = 'Restaurar a partir deste ficheiro depois do carregamento';
$string['templatefile_help'] = 'Selecione um ficheiro para ser usado como modelo para a criação de todas as disciplinas.';
$string['unknownimportmode'] = 'Modo de importação desconhecido';
$string['updatemissing'] = 'Preencher os itens em falta a partir dos dados do CSV e dos predefinidos';
$string['updatemode'] = 'Modo de atualização';
$string['updatemode_help'] = 'Se permitir que as disciplinas sejam atualizadas, é necessário indicar com o que é que será feita a atualização das disciplinas';
$string['updatemodedoessettonothing'] = 'O modo de atualização não permite que nada seja atualizado';
$string['updateonly'] = 'Apenas atualizar disciplinas existentes';
$string['updatewithdataonly'] = 'Atualizar apenas com os dados do CSV';
$string['updatewithdataordefaults'] = 'Atualizar com os dados do CSV e dos predefinidos';
$string['uploadcourses'] = 'Carregar disciplinas';
$string['uploadcourses_help'] = 'As disciplinas podem ser carregadas via ficheiro de texto. O ficheiro deve ter o seguinte formato:

* Cada linha do ficheiro contém um registo
* Cada registo é uma linha com uma série de dados separados pelo separador selecionado
* A primeira linha contém a lista dos nomes dos campos que define o formato do ficheiro
* Os nomes dos campos obrigatórios são: shortname, fullname e category';
$string['uploadcoursespreview'] = 'Pré-visualizar carregamento de disciplinas';
$string['uploadcoursesresult'] = 'Resultados do carregamento de disciplinas';
