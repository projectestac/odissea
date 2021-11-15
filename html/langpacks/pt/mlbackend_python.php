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
 * Strings for component 'mlbackend_python', language 'pt', version '3.11'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'A configuração do servidor não está concluída.';
$string['errorserver'] = 'Erro de servidor {$a}';
$string['host'] = 'Anfitrião';
$string['hostdesc'] = 'Servidor';
$string['packageinstalledshouldbe'] = 'O pacote Python "moodlemlbackend" tem de ser atualizado. Versão necessária: "{$a->required}" -  Versão instalada: "{$a->installed}"';
$string['packageinstalledtoohigh'] = 'O pacote Python "moodlemlbackend" não é compatível com esta versão do Moodle. É necessária a versão "{$a->required}" ou superior, desde que seja compatível com a API. A versão instalada "{$a->installed}" é muito alta.';
$string['password'] = 'Senha';
$string['passworddesc'] = 'Cadeia de caracteres usada como senha na comunicação entre o servidor Moodle e o servidor Python.';
$string['pluginname'] = 'Estrutura Python de suporte à aprendizagem';
$string['port'] = 'Porta';
$string['portdesc'] = 'Porta';
$string['privacy:metadata'] = 'O módulo Estrutura Python de suporte à aprendizagem não armazena quaisquer dados pessoais.';
$string['pythonpackagenotinstalled'] = 'O pacote Python "moodlemlbackend" não está instalado ou existe um problema com ele. Execute "{$a}" na interface da linha de comando para obter mais informações';
$string['pythonpathnotdefined'] = 'O caminho para o binário Python executável não foi definido. Visite "{$a}" para o configurar.';
$string['secure'] = 'Usar HTTPS';
$string['securedesc'] = 'Se deve usar HTTP ou HTTPS.';
$string['serversettingsinfo'] = 'Se a opção \'Usar outro servidor\' estiver ativada, as configurações do servidor serão exibidas.';
$string['tensorboardinfo'] = 'Executar o TensorBoard no seu servidor a partir da linha de comandos com a instrução: tensorboard --logdir=\'{$a}\'.';
$string['username'] = 'Nome de utilizador';
$string['usernamedesc'] = 'Cadeia de caracteres usada como nome de utilizador na comunicação entre o servidor Moodle e o servidor Python.';
$string['useserver'] = 'Usar outro servidor';
$string['useserverdesc'] = 'O pacote da estrutura Python de suporte à aprendizagem não está instalado no servidor Moodle, mas sim, num servidor web diferente.';
