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
 * Strings for component 'assignfeedback_editpdf', language 'pt', branch 'MOODLE_31_STABLE'
 *
 * @package   assignfeedback_editpdf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Adicionar à lista rápida';
$string['annotationcolour'] = 'Cor da anotação';
$string['black'] = 'Preto';
$string['blue'] = 'Azul';
$string['cannotopenpdf'] = 'Não é possível abrir o PDF. O ficheiro pode estar corrompido ou num formato não suportado.';
$string['clear'] = 'Limpar';
$string['colourpicker'] = 'Seletor de cor';
$string['command'] = 'Comando:';
$string['comment'] = 'Comentários';
$string['commentcolour'] = 'Cor do comentário';
$string['commentcontextmenu'] = 'Menu de contexto do comentário';
$string['couldnotsavepage'] = 'Não foi possível guardar a página {$a}';
$string['currentstamp'] = 'Carimbo';
$string['deleteannotation'] = 'Apagar anotação';
$string['deletecomment'] = 'Apagar comentário';
$string['deletefeedback'] = 'Apagar o ficheiro PDF de feedback';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'Descarregar ficheiro PDF de feedback';
$string['draftchangessaved'] = 'O rascunho das anotações foi gravado';
$string['drag'] = 'Arrastar';
$string['editpdf'] = 'Anotar PDF';
$string['editpdf_help'] = 'Anotar as submissões dos alunos diretamente no navegador e produzir um PDF editado descarregável.';
$string['enabled'] = 'Anotar PDF';
$string['enabled_help'] = 'Se ativar esta opção, o professor poderá criar ficheiros PDF anotados quando estiver a avaliar os trabalhos. Isto permite ao professor adicionar comentários, desenhos e carimbos diretamente no documento que os alunos submeteram. A anotação é feita no navegador, não sendo necessário nenhum software adicional.';
$string['errorgenerateimage'] = 'Erro ao gerar imagem com ghostscript, informação de depuração: {$a}';
$string['errorpdfpage'] = 'Ocorreu um erro ao gerar esta página.';
$string['filter'] = 'Filtrar comentários...';
$string['generatefeedback'] = 'Gerar PDF de feedback';
$string['generatingpdf'] = 'A gerar o PDF...';
$string['gotopage'] = 'Ir para a página';
$string['green'] = 'Verde';
$string['gsimage'] = 'Imagem de teste Ghostscript';
$string['highlight'] = 'Destacar texto';
$string['jsrequired'] = 'É necessário JavaScript para fazer anotações no PDF. Por favor, ative o JavaScript no seu navegador para esta funcionalidade.';
$string['launcheditor'] = 'Abrir editor de PDF...';
$string['line'] = 'Linha';
$string['loadingeditor'] = 'A carregar editor de PDF';
$string['navigatenext'] = 'Página seguinte';
$string['navigateprevious'] = 'Página anterior';
$string['output'] = 'Resposta:';
$string['oval'] = 'Oval';
$string['pagenumber'] = 'Página  {$a}';
$string['pagexofy'] = 'Página {$a->page} de {$a->total}';
$string['pathtogspathdesc'] = 'Note que a anotação de PDF requer que o caminho para Ghostscript seja definido em {$a}.';
$string['pathtounoconvpathdesc'] = 'Tenha em atenção que para anotar diretamente no PDF é necessário indicar a localização do unoconv em {$a}.';
$string['pen'] = 'Caneta';
$string['pluginname'] = 'Anotar PDF';
$string['preparesubmissionsforannotation'] = 'Preparar submissões de Trabalhos para anotação';
$string['rectangle'] = 'Retângulo';
$string['red'] = 'Vermelho';
$string['result'] = 'Resultado:';
$string['searchcomments'] = 'Pesquisar comentários';
$string['select'] = 'Selecionar';
$string['stamp'] = 'Carimbo';
$string['stamppicker'] = 'Selecionador de carimbos';
$string['stamps'] = 'Carimbos';
$string['stampsdesc'] = 'Os  carimbos têm de ser ficheiros de imagem (tamanho recomendado: 40x40). Estas imagens podem ser usadas com a ferramenta carimbo para fazer anotações no PDF.';
$string['test_doesnotexist'] = 'O caminho ghostscript aponta para um ficheiro que não existe';
$string['test_empty'] = 'O caminho ghostscript está vazio - por favor, introduza o caminho correto.';
$string['testgs'] = 'Testar caminho ghostscript';
$string['test_isdir'] = 'O caminho ghostscript aponta para uma pasta, por favor inclua o programa ghostscript no caminho que especificar.';
$string['test_notestfile'] = 'O PDF de teste está em falta';
$string['test_notexecutable'] = 'O caminho ghostscript aponta para um ficheiro que não é executável';
$string['test_ok'] = 'O caminho ghostscript parece estar OK - por favor verifique que consegue ver a mensagem na imagem abaixo';
$string['test_unoconv'] = 'Testar o caminho do unoconv';
$string['test_unoconvdoesnotexist'] = 'O caminho para o unoconv não aponta para o programa unoconv. Reveja as configurações do caminho.';
$string['test_unoconvdownload'] = 'Descarregar o ficheiro de teste convertido em pdf.';
$string['test_unoconvisdir'] = 'O caminho para o unoconv aponta para uma pasta, por favor inclua o programa unoconv no caminho especificado';
$string['test_unoconvnotestfile'] = 'Falta o documento de teste a ser convertido em PDF';
$string['test_unoconvnotexecutable'] = 'O caminho para o unoconv aponta para um ficheiro que não é executável';
$string['test_unoconvok'] = 'O caminho para o unoconv parece estar configurado corretamente.';
$string['test_unoconvversionnotsupported'] = 'A versão do unoconv instalada não é suportada. A funcionalidade de avaliar Trabalho requer a versão 0.7 ou superior.';
$string['tool'] = 'Ferramenta';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'Ver o PDF anotado...';
$string['white'] = 'Branco';
$string['yellow'] = 'Amarelo';
