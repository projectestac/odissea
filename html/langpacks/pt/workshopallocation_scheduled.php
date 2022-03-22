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
 * Strings for component 'workshopallocation_scheduled', language 'pt', version '3.11'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'Processamento em segundo plano da atribuição programada';
$string['currentstatus'] = 'Estado atual';
$string['currentstatusexecution'] = 'Estado';
$string['currentstatusexecution1'] = 'Executada em {$a->datetime}';
$string['currentstatusexecution2'] = 'A executar novamente em {$a->datetime}';
$string['currentstatusexecution3'] = 'A executar em {$a->datetime}';
$string['currentstatusexecution4'] = 'A aguardar execução';
$string['currentstatusnext'] = 'Próxima execução';
$string['currentstatusnext_help'] = 'Em alguns casos, a atribuição é programada para automaticamente voltar a ser executada, mesmo que já tenha sido executada. Isto pode acontecer se, por exemplo, a data limite das submissões for adiada.';
$string['currentstatusreset'] = 'Reiniciar';
$string['currentstatusreset_help'] = 'Se guardar as alterações com esta opção ativa, o estado atual será reiniciado. Toda a informação sobre a execução anterior será apagada de modo a que a atribuição possa ser executada novamente (se a opção acima estiver ativa).';
$string['currentstatusresetinfo'] = 'Ative esta opção e guarde as alterações para repor os resultados da execução';
$string['currentstatusresult'] = 'Resultados da última execução';
$string['enablescheduled'] = 'Ativar atribuição automática';
$string['enablescheduledinfo'] = 'Atribuir automaticamente trabalhos na data limite das submissões';
$string['pluginname'] = 'Atribuição automática';
$string['privacy:metadata'] = 'O módulo Atribuição automática não armazena quaisquer dados pessoais. Os atuais dados pessoais sobre quem vai avaliar quem são armazenados pelo módulo workshop em si e formam a base para exportar detalhes de avaliação.';
$string['randomallocationsettings'] = 'Configurações da atribuição';
$string['randomallocationsettings_help'] = 'Os parâmetros para o método de atribuição aleatória são definidos aqui. Serão usados pelo módulo de atribuição aleatória para atribuir os trabalhos.';
$string['resultdisabled'] = 'Atribuição automática inativa';
$string['resultenabled'] = 'Atribuição automática ativa';
$string['resultexecuted'] = 'Operação realizada com sucesso!';
$string['resultfailed'] = 'Não é possível atribuir trabalhos automaticamente';
$string['resultfailedconfig'] = 'Atribuição automática foi configurada de forma incorreta';
$string['resultfaileddeadline'] = 'O workshop não tem definida a data limite das submissões';
$string['resultfailedphase'] = 'O workshop não está na fase de submissão dos trabalhos';
$string['resultvoid'] = 'Não foram atribuídos trabalhos';
$string['resultvoiddeadline'] = 'Ainda não está fora da data limite das submissões';
$string['resultvoidexecuted'] = 'A atribuição já foi realizada';
$string['scheduledallocationsettings'] = 'Configurações da atribuição automática';
$string['scheduledallocationsettings_help'] = 'Se ativar esta opção, o método de atribuição automática irá distribuir automaticamente os trabalhos para avaliação no final da fase de submissão dos trabalhos. O fim desta fase pode ser definido na configuração \'Data limite das submissões .

Internamente, o método de atribuição aleatória é executado com os parâmetros definidos abaixo. Isso significa que a atribuição automática funciona como se o professor realizasse a atribuição aleatória no final da fase de submissões utilizando as definições de atribuição abaixo.

Tenha em atenção que a atribuição automática *não* é realizada se alterar manualmente a fase antes da data limite de submissões definida nas configurações. Nesse caso terá de realizar a atribuição manual dos trabalhos. Este método automático é particularmente útil quando usado em simultâneo com a opção de configuração \'Avançar para fase seguinte\' após a data limite das submissões.';
$string['setup'] = 'Configurar atribuição automática';
