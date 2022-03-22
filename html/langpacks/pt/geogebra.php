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
 * Strings for component 'geogebra', language 'pt', version '3.11'.
 *
 * @package     geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclosed'] = 'Esta atividade já não está disponível';
$string['activitynotopened'] = 'Esta atividade ainda não está disponível';
$string['attempt'] = 'Tentativa';
$string['attempts'] = 'Tentativas';
$string['attemptsremaining'] = 'Restantes tentativas para esta atividade:';
$string['autograde'] = 'Atividade de auto avaliação';
$string['availabledate'] = 'Data de início';
$string['average'] = 'Média';
$string['choosescripttype'] = 'Escolha o tipo de script';
$string['comment'] = 'Comentário';
$string['contentheader'] = 'Conteúdo';
$string['coursewithoutstudents'] = 'Esta disciplina não tem alunos inscritos';
$string['datestudent'] = 'Última modificação (submissão)';
$string['dateteacher'] = 'Última modificação (nota)';
$string['deleteallattempts'] = 'Apagar todas as tentativas';
$string['description'] = 'Descrição';
$string['discardchanges'] = 'Ignorar alterações e voltar';
$string['duedate'] = 'Data de fim';
$string['duration'] = 'Duração';
$string['enableLabelDrags'] = 'Permitir arrastar etiquetas';
$string['enableRightClick'] = 'Permitir clique lado direito';
$string['errorattempt'] = 'Erro: não foi possível guardar a tentativa.';
$string['event_course_module_viewed'] = 'Visualizado módulo da disciplina';
$string['event_instances_list_viewed'] = 'Visualizada lista de instâmcias';
$string['expired'] = 'Desculpe, esta atividade terminou em {$a} e já não está disponível';
$string['extractedfromggb'] = 'ficheiros extraidos de ggb';
$string['filename'] = 'Nome do ficheiro';
$string['filenotfound'] = 'O ficheiro indicado não existe';
$string['filetype'] = 'Tipo';
$string['filetype_help'] = 'Esta configuração determina como a atividade GeoGebra está incluída na disciplina. Existem até 2 opções:

* Carregar GeoGebra - Permite que um pacote válido ".ggb" possa ser escolhido pelo seletor de ficheiros.
* URL externo - Permite que seja especificada um URL. Nota: O URL deve começar com http(s) ou www e conter um ficheiro ".ggb" válido.';
$string['filetypeexternal'] = 'URL externo';
$string['filetypelocal'] = 'Novo ficheiro';
$string['firstattempt'] = 'Primeira tentativa';
$string['for'] = 'para';
$string['functionalityoptionsgrp'] = 'Funcionalidades';
$string['geogebra:addinstance'] = 'Adicionar GeoGebra';
$string['geogebra:grade'] = 'Avaliar GeoGebra';
$string['geogebra:submit'] = 'Submeter GeoGebra';
$string['geogebra:view'] = 'Visualizar GeoGebra';
$string['geogebrafile'] = 'Ficheiro GeoGebra';
$string['geogebrafile_help'] = 'ficheiro .gbb';
$string['geogebraurl'] = 'URL';
$string['geogebraurl_help'] = 'Encontre a construção em <a href="https://www.geogebra.org/" target="_blank">geogebra.org</a>, depois clique em <strong>Detalhes</strong>, clique com o lado direito em <strong>Descarregar</strong> e selecione <strong>Copiar endereço</strong>. Por fim, vá para o campo URL e cole a hiperligação com <strong>Ctrl+V</strong>.<br/>Veja um exemplo passo a passo em: <a href="https://youtu.be/qbp-RuM4NpU" target="_blank">https://youtu.be/qbp-RuM4NpU</a>.';
$string['grade'] = 'Nota';
$string['gradeit'] = 'Avaliar';
$string['grademethod'] = 'Método de avaliação';
$string['height'] = 'Altura';
$string['highestattempt'] = 'Melhor tentativa';
$string['httpnotallowed'] = 'De momento não é permitido o uso de ficheiros externos';
$string['interfaceoptionsgrp'] = 'Interface do utilizador';
$string['invalidgeogebrafile'] = 'Ficheiro GeoGebra inválido. Deve ter a extensão ".ggb".';
$string['invalidurl'] = 'Foi especificado um URL inválido. Deve começar com http(s) e tem que ser um ficheiro ".ggb" válido.';
$string['language'] = 'Idioma';
$string['lastattempt'] = 'Última tentativa';
$string['lastattemptremaining'] = 'Esta é a sua última tentativa para esta atividade';
$string['lastmodifiedgrade'] = 'Última modificação (nota)';
$string['lastmodifiedsubmission'] = 'Última modificação (submissão)';
$string['lowestattempt'] = 'Pior tentativa';
$string['manualgrade'] = 'Avaliação manual?';
$string['maxattempts'] = 'Número máximo de tentativas';
$string['modulename'] = 'GeoGebra';
$string['modulename_help'] = '<p><a href="http://www.geogebra.org" target="_blank">GeoGebra</a> é um software de matemática dinâmico, gratuito e multi-plataforma, para todos os níveis de educação que une geometria, álgebra, tabelas, gráficos, estatísticas e cálculos em pacotes de fácil utilização.</p>
<p>Por isso, o <a href="http://www.gencat.cat/ensenyament/" target="_blank">Departamento de Educação da Catalunha</a> em colaboração com a <a href = "http: //acgeogebra.cat/ "target =" _ blank ">Associação Catalã de GeoGebra</a> (ACG) e a equipa de desenvolvimento GeoGeobra implementaram este módulo que permite a incorporação de atividades GeoGebra no Moodle. As suas principais características são:
<ul>
<li>Permite incorporar facilmente atividades do GeoGebra em disciplinas do Moodle.</li>
<li>Facilita o acompanhamento dos alunos porque guarda a pontuação, a data, a duração e a construção de cada uma das tentativas feitas pelos utilizadores.</li>
<li>Os alunos podem guardar o estado das atividades para continuar mais tarde.</li>
</ul>
</p>';
$string['modulenameplural'] = 'GeoGebra';
$string['msg_noattempts'] = 'Já fez esta atividade o número máximo de vezes permitido';
$string['msg_nosessions'] = 'Esta atividade da GeoGebra ainda não teve qualquer sessão';
$string['name'] = 'Nome';
$string['noattempts'] = '-';
$string['nograding'] = 'Sem avaliação';
$string['nomoreattempts'] = 'Não existem mais tentativas para esta atividade';
$string['notopenyet'] = 'Desculpe, esta atividade só estará disponível em {$a}';
$string['pluginadministration'] = 'Administração de GeoGebra';
$string['pluginname'] = 'GeoGebra';
$string['preview_geogebra'] = 'Pré-visualizar GeoGebra';
$string['previewtab'] = 'Pré-visualização';
$string['privacy'] = 'Privacidade dos dados';
$string['redirecttocourse'] = 'A atividade foi guardada. A voltar à página principal da disciplina';
$string['report'] = 'Relatório de';
$string['results'] = 'Resultados';
$string['resultstab'] = 'Resultados';
$string['resumeattempt'] = 'Terminar tentativas inacabadas';
$string['review'] = 'Revisão de';
$string['reviewtab'] = 'Revisão';
$string['savechanges'] = 'Gravar alterações';
$string['savewithoutsubmitting'] = 'Guardar sem submeter';
$string['settings'] = 'Configurações';
$string['showAlgebraInput'] = 'Mostrar barra de entrada';
$string['showMenuBar'] = 'Mostrar barra de menu';
$string['showResetIcon'] = 'Mostrar ícone de reiniciar';
$string['showToolBar'] = 'Mostrar barra de ferramentas';
$string['showToolBarHelp'] = 'Mostrar ajuda';
$string['showsubmit'] = 'Mostrar botão Submeter';
$string['status'] = 'Estado';
$string['submitandfinish'] = 'Submeter e finalizar';
$string['timing'] = 'Disponibilidade';
$string['total'] = 'Total';
$string['unfinished'] = 'Não terminada';
$string['ungraded'] = 'Não avaliada';
$string['unlimitedattempts'] = 'Esta atividade permite um número ilimitado de tentativas';
$string['urledit'] = 'Ficheiro GeoGebra';
$string['urledit_help'] = 'Ficheiro ".ggb" para esta atividade GeoGebra.';
$string['useBrowserForJS'] = 'Usar JavaScript de:';
$string['useBrowserForJS_geogebra'] = 'Ficheiro GeoGebra (falso)';
$string['useBrowserForJS_html'] = 'HTML (verdadeiro)';
$string['view'] = 'Visualizar';
$string['viewattempt'] = 'Visualizar';
$string['viewattempts'] = 'Ver tentativas';
$string['viewattempttab'] = 'Ver tentativa';
$string['viewtab'] = 'Visualizar';
$string['weight'] = 'Peso';
$string['width'] = 'Largura';
