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
 * Strings for component 'assignfeedback_editpdf', language 'pt', version '3.11'.
 *
 * @package     assignfeedback_editpdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
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
$string['commentindex'] = 'Índice de comentários';
$string['commentlabel'] = '{$a->pnum}.{$a->cnum}';
$string['couldnotsavepage'] = 'Não foi possível guardar a página {$a}';
$string['currentstamp'] = 'Carimbo';
$string['default'] = 'Ativo por predefinição';
$string['default_help'] = 'Se ativar esta opção, este método de feedback estará disponível para todos os trabalhos.';
$string['deleteannotation'] = 'Apagar anotação';
$string['deletecomment'] = 'Apagar comentário';
$string['deletefeedback'] = 'Apagar o ficheiro PDF de feedback';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'Descarregar ficheiro PDF de feedback';
$string['draftchangessaved'] = 'O rascunho das anotações foi guardado';
$string['drag'] = 'Arrastar';
$string['editpdf'] = 'Anotar PDF';
$string['editpdf_help'] = 'Anotar as submissões do aluno diretamente no navegador e produzir um PDF editado descarregável.';
$string['enabled'] = 'Anotar PDF';
$string['enabled_help'] = 'Se ativar esta opção, o professor poderá criar ficheiros PDF anotados quando estiver a avaliar as submissões do trabalho. Permite ao professor adicionar comentários, desenhos e carimbos diretamente no documento que os alunos submeteram. A anotação é feita no navegador, não sendo necessário nenhum software adicional.';
$string['errorgenerateimage'] = 'Erro ao gerar imagem com o Ghostscript. Informação de depuração: {$a}';
$string['errorpdfpage'] = 'Ocorreu um erro ao gerar esta página.';
$string['expcolcomments'] = 'Expandir/contrair todos os comentários';
$string['filter'] = 'Filtrar comentários...';
$string['generatefeedback'] = 'Gerar PDF de feedback';
$string['generatingpdf'] = 'A gerar o PDF...';
$string['gotopage'] = 'Ir para a página';
$string['green'] = 'Verde';
$string['gsimage'] = 'Imagem de teste Ghostscript';
$string['highlight'] = 'Destacar texto';
$string['jsrequired'] = 'É necessário o JavaScript para fazer anotações no PDF. Por favor, ative o JavaScript no seu navegador para poder usar esta funcionalidade.';
$string['launcheditor'] = 'Abrir editor de PDF...';
$string['line'] = 'Linha';
$string['loadingeditor'] = 'A carregar editor de PDF';
$string['navigatenext'] = 'Página seguinte (Alt/Shift-Alt/Ctrl-Opção + {$a})';
$string['navigateprevious'] = 'Página anterior (Alt/Shift-Alt/Ctrl-Opção + {$a})';
$string['output'] = 'Resposta:';
$string['oval'] = 'Oval';
$string['pagenumber'] = 'Página  {$a}';
$string['pagexofy'] = 'Página {$a->page} de {$a->total}';
$string['partialwarning'] = 'Alguns dos ficheiros desta submissão só podem ser acedidos se forem descarregados.';
$string['pathtogspathdesc'] = 'Note que a anotação de PDF requer que o caminho para o Ghostscript esteja definido em {$a}.';
$string['pen'] = 'Caneta';
$string['pluginname'] = 'Anotar PDF';
$string['preparesubmissionsforannotation'] = 'Preparar submissões de Trabalhos para anotação';
$string['privacy:metadata:colourpurpose'] = 'A cor do comentário ou anotação';
$string['privacy:metadata:conversionpurpose'] = 'Os ficheiros são convertidos em PDF para permitir anotações.';
$string['privacy:metadata:filepurpose'] = 'Armazena um PDF anotado com feedback para o utilizador';
$string['privacy:metadata:rawtextpurpose'] = 'Armazena o texto bruto para os dados rápidos';
$string['privacy:metadata:tablepurpose'] = 'Armazena comentários específicos da lista rápida do professor';
$string['privacy:metadata:userid'] = 'ID do utilizador';
$string['privacy:path'] = 'PDF de feedback';
$string['rectangle'] = 'Retângulo';
$string['red'] = 'Vermelho';
$string['result'] = 'Resultado:';
$string['rotateleft'] = 'Rodar 90 graus para a esquerda';
$string['rotateright'] = 'Rodar 90° para a direita';
$string['searchcomments'] = 'Pesquisar comentários';
$string['select'] = 'Selecionar';
$string['stamp'] = 'Carimbo';
$string['stamppicker'] = 'Seletor de carimbos';
$string['stamps'] = 'Carimbos';
$string['stampsdesc'] = 'Os  carimbos têm de ser ficheiros de imagem (tamanho recomendado: 40x40). Estas imagens podem ser usadas com a ferramenta carimbo para fazer anotações no PDF.';
$string['test_doesnotexist'] = 'O caminho para o Ghostscript aponta para um ficheiro que não existe';
$string['test_empty'] = 'O caminho para o Ghostscript está vazio. Por favor, introduza o caminho correto.';
$string['test_isdir'] = 'O caminho para o Ghostscript aponta para uma pasta. Por favor, inclua o programa Ghostscript no caminho que especificar.';
$string['test_notestfile'] = 'O PDF de teste está em falta';
$string['test_notexecutable'] = 'O caminho para o Ghostscript aponta para um ficheiro que não é executável';
$string['test_ok'] = 'O caminho para o Ghostscript parece estar correto. Por favor, verifique que consegue ver a mensagem na imagem abaixo';
$string['testgs'] = 'Testar caminho para o Ghostscript';
$string['tool'] = 'Ferramenta';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'Ver o PDF anotado';
$string['white'] = 'Branco';
$string['yellow'] = 'Amarelo';
