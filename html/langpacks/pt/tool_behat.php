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
 * Strings for component 'tool_behat', language 'pt', version '4.4'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Esta ferramenta de administração ajuda os programadores e criadores de testes a criarem ficheiros \'.feature\' que descrevem as funcionalidades do Moodle e executá-los automaticamente.
Os procedimentos disponíveis para utilização em ficheiros \'.feature\' encontram-se listados abaixo.';
$string['allavailablesteps'] = 'Todas as definições disponíveis da etapa';
$string['errorbehatcommand'] = 'Erro ao executar o comando Behat CLI. Tente executar manualmente "{$a} --help" a partir da CLI para saber mais sobre o problema.';
$string['errorcomposer'] = 'Dependências de Composer não estão instaladas.';
$string['errordataroot'] = '$CFG->behat_dataroot não está definido ou é inválido.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix e $CFG->behat_wwwroot necessita de ser configurado em config.php.';
$string['erroruniqueconfig'] = 'Os valores de $CFG->behat_dataroot, $CFG->behat_prefix e $CFG->behat_wwwroot têm de ser diferentes dos valores de $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot e $CFG->phpunit_prefix.<br/>Ou, se $CFG->behat_prefix é o mesmo, $CFG->behat_dbname ou $CFG->behat_dbhost têm de ser diferentes de $CFG->phpunit_dbname e $CFG->phpunit_dbhost e de $CFG->dbname e $CFG->dbhost.';
$string['fieldvalueargument'] = 'Argumentos do valor do campo';
$string['fieldvalueargument_help'] = 'Este argumento deve ser completado por um valor de campo. Existem muitos tipos de campos, incluindo os mais simples, tais como as caixas de seleção ou áreas de texto, ou os mais complexos como os selecionadores de datas. Consulte a documentação sobre \'<a href="https://moodledev.io/general/development/tools/behat" target="_blank">Acceptance_testing</a>\' para mais detalhes dos valores de campo esperados.';
$string['giveninfo'] = 'Dado: Processos para configurar o ambiente';
$string['infoheading'] = 'Informação';
$string['installinfo'] = 'Aceda a {$a} para obter informações sobre como instalar e executar os testes';
$string['newstepsinfo'] = 'Aceda a {$a} para obter informações sobre como adicionar novas definições de etapa';
$string['newtestsinfo'] = 'Aceda a {$a} para obter informações sobre como executar novos testes';
$string['nostepsdefinitions'] = 'Não existem definições da etapa que correspondam a este filtro';
$string['pluginname'] = 'Teste de aceitação';
$string['privacy:metadata'] = 'O módulo Teste de aceitação não armazena quaisquer dados pessoais.';
$string['stepsdefinitionscomponent'] = 'Área';
$string['stepsdefinitionscontains'] = 'Contém';
$string['stepsdefinitionsfilters'] = 'Definições da etapa';
$string['stepsdefinitionstype'] = 'Tipo';
$string['theninfo'] = 'Então: Verificações para garantir que os resultados são os esperados';
$string['unknownexceptioninfo'] = 'Ocorreu um erro com o Selenium ou com o navegador. Por favor, verifique se está a usar a versão mais recente do Selenium. Erro:';
$string['viewsteps'] = 'Filtro';
$string['warndirrootconfigfound'] = 'Um ficheiro de configuração foi encontrado em {$a}. Este ficheiro não é atualizado automaticamente e pode tornar-se obsoleto. Recomenda-se que apague o ficheiro.';
$string['wheninfo'] = 'Quando. Ação que provoca um evento';
$string['wrongbehatsetup'] = 'Existe um erro na configuração Behat e, por isso, as definições não podem ser listadas: <b>{$a->errormsg}</b><br/><br/>Por favor, verifique:<ul>
<li>$CFG->behat_dataroot, $CFG->behat_prefix e $CFG->behat_wwwroot estão definidos em config.php com diferentes valores de $CFG->dataroot, $CFG->prefix e $CFG->wwwroot.</li>
<li>Executou "{$a->behatinit}" a partir da diretoria raiz do seu Moodle.</li>
<li>As dependências estão instaladas em \'vendor/\' e o ficheiro \'{$a->behatcommand}\' tem permissões de execução.</li></ul>';
