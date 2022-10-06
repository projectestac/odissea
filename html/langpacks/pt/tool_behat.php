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
 * Strings for component 'tool_behat', language 'pt', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_behat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Esta ferramenta de administração ajuda os programadores e criadores de testes a criar ficheiros \'.feature\' que descrevem as funcionalidades do Moodle e executá-los automaticamente.
Os procedimentos disponíveis para utilização em ficheiros \'.feature\' encontram-se listados abaixo.';
$string['allavailablesteps'] = 'Todas as definições disponíveis da etapa';
$string['errorapproot'] = '$CFG->behat_ionic_dirroot não está apontar para uma instalação válida do programador da Aplicação móvel Moodle.';
$string['errorbehatcommand'] = 'Erro ao executar o comando Behat CLI. Tente executar manualmente "{$a} --help" a partir da CLI para saber mais sobre o problema.';
$string['errorcomposer'] = 'Dependências do compositor não estão instaladas.';
$string['errordataroot'] = '$CFG->behat_dataroot não está definido ou é inválido.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix e $CFG->behat_wwwroot necessita de ser configurado em config.php.';
$string['erroruniqueconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix e $CFG->behat_wwwroot os valores devem ser diferentes de $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot e dos valores $CFG->phpunit_prefix.';
$string['fieldvalueargument'] = 'Argumentos do valor do campo';
$string['fieldvalueargument_help'] = 'Este argumento deve ser completo por um valor de campo. Existem muitos tipos de campos, incluindo campos simples como as caixas de seleção ou áreas de texto, ou mais complexos como os selecionadores de datas. Para mais detalhes sobre os valores de campo esperados, consulte a documentação de desenvolvimento sobre \'<a href="https://docs.moodle.org/dev/Acceptance_testing" target="_blank">teste de aceitação</a>\'.';
$string['giveninfo'] = 'Dado: Processos para configurar o ambiente';
$string['infoheading'] = 'Informação';
$string['installinfo'] = 'Aceda a {$a} para obter informação sobre instalação e execução de testes';
$string['newstepsinfo'] = 'Aceda a {$a} para obter informações sobre como adicionar novas definições de etapa';
$string['newtestsinfo'] = 'Aceda a {$a} para obter informações sobre como executar novos testes';
$string['nostepsdefinitions'] = 'Não existem definições da etapa que correspondam a este filtro';
$string['pluginname'] = 'Teste de aceitação';
$string['privacy:metadata'] = 'O módulo Teste de aceitação não armazena dados pessoais.';
$string['stepsdefinitionscomponent'] = 'Área';
$string['stepsdefinitionscontains'] = 'Contém';
$string['stepsdefinitionsfilters'] = 'Definições da etapa';
$string['stepsdefinitionstype'] = 'Tipo';
$string['theninfo'] = 'Então: Verificações para garantir que os resultados são os esperados';
$string['unknownexceptioninfo'] = 'Houve um problema com o Selenium ou com o navegador. Por favor, verifique se está a usar a versão mais recente do Selenium. Erro:';
$string['viewsteps'] = 'Filtro';
$string['wheninfo'] = 'Quando. Ação que provoca um evento';
$string['wrongbehatsetup'] = 'Algo de errado se passa com a configuração Behat e, por isso, as definições não podem ser listadas: <b>{$a->errormsg}</b><br/><br/>Por favor, verifique:<ul>
<li>$CFG->behat_dataroot, $CFG->behat_prefix e $CFG->behat_wwwroot estão definidos em config.php com diferentes valores de $CFG->dataroot, $CFG->prefix e $CFG->wwwroot.</li>
<li>Executou "{$a->behatinit}" a partir da sua diretoria-raiz Moodle.</li>
<li>As dependências estão instaladas em vendor/ e o ficheiro {$a->behatcommand} tem permissões de execução.</li></ul>';
