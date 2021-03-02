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
 * Strings for component 'tool_lpmigrate', language 'pt', version '3.8'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Disciplinas permitidas';
$string['allowedcourses_help'] = 'Selecione as disciplinas que pretende que sejam migradas para o novo quadro. Se não especificar nenhuma disciplina, todas as disciplinas serão migradas.';
$string['continuetoframeworks'] = 'Continuar para o quadro';
$string['coursecompetencymigrations'] = 'Migrações de competências da disciplina';
$string['coursemodulecompetencymigrations'] = 'Migrações de competências das atividades e recursos da disciplina';
$string['coursemodulesfound'] = 'Atividades ou recursos da disciplina encontrados';
$string['coursesfound'] = 'Disciplinas encontradas';
$string['coursestartdate'] = 'Data de início das disciplinas';
$string['coursestartdate_help'] = 'Se ativar esta opção, as disciplinas com uma data de início anterior à data que indicou não serão migradas.';
$string['disallowedcourses'] = 'Disciplinas não permitidas';
$string['disallowedcourses_help'] = 'Selecione todas as disciplinas que NÃO devem ser migradas para o novo quadro.';
$string['errorcannotmigratetosameframework'] = 'Não pode selecionar o mesmo quadro de competências nos dois campos.';
$string['errorcouldnotmapcompetenciesinframework'] = 'Não foi possível mapear nenhuma competência neste quadro.';
$string['errors'] = 'Erros';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Erro ao migrar a competência da disciplina: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Erro ao migrar a competência da atividade ou recurso: {$a}';
$string['excludethese'] = 'Excluir estas';
$string['explanation'] = 'Esta ferramenta pode ser utilizada para atualizar o quadro de uma competência para a versão mais recente. Esta pesquisa competências em disciplinas e atividades que estão a utilizar o quadro antigo, e atualiza as hiperligações de modo a apontarem para o novo quadro de competências.

Não é recomendável que edite diretamente as especificações antigas das competências, pois isso irá alterar todas as competências que já foram atribuídas nos planos de aprendizagem dos utilizadores.

Habitualmente, importaria a nova versão do quadro, ocultaria o quadro antigo, e depois utilizaria esta ferramenta para migrar as novas disciplinas para o novo quadro de competências.';
$string['findingcoursecompetencies'] = 'A procurar as competências da disciplina';
$string['findingmodulecompetencies'] = 'A procurar as competências da atividade e recurso';
$string['frameworks'] = 'Quadros de competências';
$string['limittothese'] = 'Limitar a estas';
$string['lpmigrate:frameworksmigrate'] = 'Migrar quadros de competências';
$string['migrateframeworks'] = 'Migrar quadros de competências';
$string['migratefrom'] = 'Migrar de';
$string['migratefrom_help'] = 'Selecione o quadro de competências mais antigo atualmente em uso.';
$string['migratemore'] = 'Migrar mais';
$string['migrateto'] = 'Migrar para';
$string['migrateto_help'] = 'Selecione a versão mais recente do quadro de competências. Apenas é possível selecionar um quadro que não esteja oculto.';
$string['migratingcourses'] = 'A migrar disciplinas';
$string['missingmappings'] = 'Mapeamentos não encontrados';
$string['performmigration'] = 'Realizar a migração';
$string['pluginname'] = 'Ferramenta de migração de competências';
$string['privacy:metadata'] = 'O módulo Ferramenta de migração de competências não armazena dados pessoais.';
$string['results'] = 'Resultados';
$string['startdatefrom'] = 'Data de início a partir de';
$string['unmappedin'] = 'Não mapeado em {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'A competência da disciplina não pode ser removida.';
$string['warningcouldnotremovemodulecompetency'] = 'A competência da atividade ou recurso não pode ser removida.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'A competência já está associada à disciplina que indicou.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'A competência já está associada à atividade ou recurso que indicou.';
$string['warnings'] = 'Avisos';
