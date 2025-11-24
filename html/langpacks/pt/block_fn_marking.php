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
 * Strings for component 'block_fn_marking', language 'pt', version '4.5'.
 *
 * @package     block_fn_marking
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregatetype'] = 'Tipo de agregação';
$string['assign'] = 'Trabalho';
$string['blocksettings'] = 'A configurar um bloco de Marcação FN';
$string['blocktitle'] = 'Gestor de Marcações NED';
$string['cfgdisplaytitle'] = 'Mostrar título';
$string['close'] = 'Fechar';
$string['config_days'] = 'Definir o número de alunos que não iniciaram sessão há x dias';
$string['config_days_help'] = '<p>Esta configuração permite definir o número </p>
<p>de dias que os alunos já não acedem à disciplina</p>';
$string['config_percent'] = 'Definir percentagem de marcações';
$string['config_percent_help'] = '<p>Esta configuração permite definir a percentagem de marcações e depois de </p>
<p>definir a percentagem verá o número de marcações de alunos abaixo de x por cento.</p>';
$string['config_showgradeslink'] = 'Mostrar hiperligação para a nota';
$string['config_showgradeslink_help'] = '<p>Esta configuração permite definir se pretende mostrar </p>
<p>ou ocultar no bloco uma hiperligação para a nota.</p>';
$string['config_showmarked'] = 'Mostrar atividades marcadas';
$string['config_showmarked_help'] = '<p>Esta configuração permite definir se pretende mostrar </p>
<p> ou ocultar no bloco as atividades marcadas.</p>';
$string['config_shownotloggedinuser'] = 'Mostrar alunos sem sessão iniciada';
$string['config_shownotloggedinuser_help'] = '<p>Esta configuração permite definir se pretende mostrar ou ocultar </p>
<p>no bloco o número de alunos que não iniciaram sessão na semana passada.</p>';
$string['config_showreportlink'] = 'Mostrar hiperligação para o relatório';
$string['config_showreportlink_help'] = '<p>Esta configuração permite definir se pretende mostrar </p>
<p>ou ocultar no bloco uma hiperligação para o relatório.</p>';
$string['config_showsaved'] = 'Mostrar atividades em rascunho';
$string['config_showsaved_help'] = '<p>Esta configuração permite definir se pretende mostrar </p>
<p>ou ocultar no bloco as atividades em rascunho do aluno.</p>';
$string['config_showstudentmarkslessthanfiftypercent'] = 'Mostrar alunos com menos de 50% de marcações';
$string['config_showstudentmarkslessthanfiftypercent_help'] = '<p>Esta configuração permite definir se pretende mostrar </p>
<p> ou ocultar o número de alunos com menos de 50% de marcações.</p>';
$string['config_showstudentnotsubmittedassignment'] = 'Mostrar alunos que não submeteram trabalhos';
$string['config_showstudentnotsubmittedassignment_help'] = '<p>Esta configuração permite definir se pretende mostrar ou ocultar </p>
<p>o número de alunos que não submeteram trabalhos na semana passada.</p>';
$string['config_showunmarked'] = 'Mostrar atividades não marcadas';
$string['config_showunmarked_help'] = '<p>Esta configuração permite definir se pretende mostrar </p>
<p>ou ocultar no bloco as atividades não marcadas.</p>';
$string['config_title'] = 'Título da instância';
$string['config_title_help'] = '<p>Esta configuração permite que o título do bloco possa ser alterado.</p>
<p>Se o cabeçalho do bloco estiver oculto, o título não aparecerá.</p>';
$string['config_unsubmitted'] = 'Mostrar atividades não submetidas';
$string['config_unsubmitted_help'] = '<p>Esta configuração permite mostrar se </p>
<p>ou ocultar no bloco as atividades não submetidas.</p>';
$string['descconfig'] = '<p>Ative esta opção para ocultar todos os blocos ao visualizar a interface do Gestor de Marcações e fornecer uma vista menos desordenada. Note que antes de ativar esta opção, precisará adicionar este código em <b><em>yourmoodlesite/theme/base/config.php</em>.</b></p>
<p></p>
<pre><code style="font-size:12px; color:#FF7600;">
// Ocultar as colunas de blocos da esquerda e da direita ao visualizar o Gestor de Marcações
\'markingmanager\' => array(
\'file\' => \'general.php\',
\'regions\' => array(),
\'options\' => array(\'noblocks\'=>true),
),
</code></pre>
Depois de adicionar o código acima, o ficheiro deve se parecer com a imagem <a href="http://moodlefn.com/docs/marking_manager_no_blocks.png">mostrada aqui</a>.';
$string['displaytitle'] = 'Atividades submetidas';
$string['fn_marking:addinstance'] = 'Adicionar instância';
$string['fn_marking:viewblock'] = 'Ver bloco';
$string['fn_marking:viewreadonly'] = 'Ver apenas de leitura';
$string['forum'] = 'Fórum';
$string['grade'] = '<b>Nota: </b>';
$string['gradeslink'] = 'Notas';
$string['gradingstudentprogress'] = 'A mostrar {$a->index} de {$a->count}';
$string['headertitle'] = 'Gestor de Marcações NED';
$string['include_orphaned'] = 'Incluir atividades órfãs';
$string['keepseparate'] = 'Manter em separado os trabalhos em rascunho';
$string['labelnoblocks'] = 'Ocultar todos os blocos';
$string['marked'] = 'Avaliado';
$string['moodlegradebook'] = 'Abrir pauta do Moodle';
$string['morethan10'] = 'Há mais de 10 disciplinas com trabalhos não avaliados.';
$string['notloggedin'] = 'não iniciam sessão há pelo menos';
$string['notsubmittedany'] = 'não submetem qualquer atividade há mais de';
$string['overallfailinggrade'] = 'têm nota global inferior a';
$string['pluginname'] = 'Gestor de marcações NED';
$string['plugintitle'] = 'Gestor de marcações';
$string['posts'] = 'Mensagens';
$string['quiz'] = 'Teste';
$string['rating'] = 'Classificação';
$string['replies'] = 'Respostas';
$string['reportslink'] = 'Relatórios';
$string['saved'] = 'Rascunho';
$string['scale'] = 'Escala';
$string['setblocktitle'] = 'Definir título do bloco';
$string['setnumberofdays'] = 'Definir número de dias';
$string['setpercentmarks'] = 'Definir percentagem de marcações';
$string['show'] = 'Mostrar';
$string['showgradeslink'] = 'Relatório da progressão';
$string['showmarked'] = 'Atividades marcadas';
$string['shownotloggedinuser'] = 'Mostrar utilizador sem sessão iniciada';
$string['showreportslink'] = 'Lista de alunos';
$string['showsaved'] = 'Mostrar atividade em rascunho';
$string['showstudentmarkslessthanfiftypercent'] = 'Mostrar número de marcações de alunos inferior a 50%';
$string['showstudentnotsubmittedassignment'] = 'Mostrar número de trabalhos não submetidos pelos alunos';
$string['showtopmessage'] = 'Mostrar mensagem acima da interface';
$string['showunmarked'] = 'Requer avaliação';
$string['showunsubmitted'] = 'Atividades não submetidas';
$string['simplegradebook'] = 'Relatório da progressão';
$string['sort'] = 'Ordenar';
$string['student'] = 'Aluno';
$string['student_have_posted'] = 'Os seguintes alunos publicaram neste fórum:';
$string['studentlist'] = 'Lista de alunos';
$string['title:failingwithgradelessthanxpercent'] = 'Os seguintes alunos têm uma nota global inferior a';
$string['title:markslessthanxpercent'] = 'Os seguintes alunos não submetem atividades há';
$string['title:notlogin'] = 'Os Seguintes Alunos Não Iniciam Sessão há mais de';
$string['title:notsubmittedanyactivity'] = 'Os Seguintes Alunos Não Submetem Atividades há mais de';
$string['title:saved'] = 'Os Seguintes Alunos Têm Atividades em Rascunho';
$string['topmessage'] = 'Mensagem a mostrar';
$string['ttmarking'] = 'Interface de marcação';
$string['type'] = 'Tipo';
$string['unmarked'] = 'Requer avaliação';
$string['unsubmitted'] = 'Não submetido';
$string['view'] = 'Vista';
$string['whocanrate'] = 'Quem pode classificar';
