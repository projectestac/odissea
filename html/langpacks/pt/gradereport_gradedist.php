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
 * Strings for component 'gradereport_gradedist', language 'pt', version '4.1'.
 *
 * @package     gradereport_gradedist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a'] = '(absoluto)';
$string['absolut'] = 'Absoluto';
$string['actcoverage'] = 'Itens não incluídos nas notas alfabéticas atuais:&nbsp;';
$string['actualcolumns'] = 'notas alfabéticas atuais';
$string['actualgrade'] = 'Nota (atual)';
$string['boundaryerror'] = 'Algumas entradas para as novas notas alfabéticas podem ser inválidas. Todas as entradas têm de estar preenchidas';
$string['category'] = 'Categoria de nota';
$string['changeletters'] = 'Guardar as notas alfabéticas alteradas';
$string['chart'] = 'Gráfico';
$string['columns'] = 'Barras';
$string['confirm'] = 'Guardar as notas alfabéticas alteradas';
$string['confirmationtableviewed'] = 'Visualizada a tabela de confirmação';
$string['confirmationtableviewed_description'] = 'O utilizador com o número de identificação (ID) {$a->userid} visualizou a tabela de confirmação da distribuição das notas.';
$string['contextbuttontitle'] = 'Menu de contexto do gráfico';
$string['coursesum'] = 'Soma da disciplina';
$string['coverage'] = 'A nova distribuição não engloba todas as notas!';
$string['coverage_export'] = 'Itens não incluídos nas notas alfabéticas:';
$string['decimals'] = 'O limite inferior tem de ser um número entre 0 e 100. São permitidas, no máximo, duas casas decimais.';
$string['description'] = 'Etiqueta';
$string['download'] = 'Descarregar';
$string['downloadjpeg'] = 'Imagem JPEG';
$string['downloadpdf'] = 'Documento PDF';
$string['downloadpng'] = 'Imagem PNG';
$string['downloadsvg'] = 'Descarregar imagem SVG';
$string['export'] = 'Descarregar os dados como:';
$string['exportasimage'] = 'Descarregar gráfico como:';
$string['gradeboundary'] = 'Limite inferior em %';
$string['gradeboundary_help'] = 'Esta definição determina a percentagem mínima a partir da qual as notas serão atribuídas à nota alfabética.';
$string['gradeboundary_new'] = 'Novo limite inferior em %';
$string['gradeboundary_new_help'] = 'Pode visualizar os efeitos dos novos limites inferiores sobre a distribuição das notas. Os limites inferiores têm de ser números com um máximo de 2 casas decimais.';
$string['gradedist:edit'] = 'Gerir a distribuição das notas';
$string['gradedist:view'] = 'Visualizar a distribuição das notas';
$string['gradedistdownloaded'] = 'Foi descarregada a atual distribuição das notas';
$string['gradedistdownloaded_description'] = 'O utilizador com número de identificação (ID) {$a->userid} descarregou a atual distribuição das notas';
$string['gradedistviewed'] = 'Visualizada a distribuição das notas';
$string['gradedistviewed_description'] = 'O utilizador com número de identificação (ID) {$a->userid} visualizou a distribuição das notas';
$string['gradeitem'] = 'Coluna de avaliação';
$string['gradeletter'] = 'Notas alfabéticas';
$string['highchartsmissing'] = 'Para ver o diagrama, descarregue a última versão da biblioteca Highcharts desde <a href="http://code.highcharts.com/">http://code.highcharts.com/</a>. Copie o módulo \'highcharts.src.js\' e o módulo \'exporting.src.js\' ou, em alternativa, se preferir, as respetivas versões reduzidas \'highcharts.js\' e \'exporting.js\' para a pasta \'moodleroot/grade/report/gradedist/js\'.';
$string['interval'] = 'O limite inferior tem de estar entre 0 e 100.';
$string['labelgroup'] = 'Focar visualização no grupo';
$string['labelgrouping'] = 'Focar visualização no agrupamento';
$string['newcolumns'] = 'novas notas alfabéticas';
$string['newcoverage'] = 'Itens não incluídos nas novas notas alfabéticas: ';
$string['newgrade'] = 'Nota (nova)';
$string['newletterssubmitted'] = 'Novas notas alfabéticas submetidas';
$string['newletterssubmitted_description'] = 'O utilizador com número de identificação (ID) {$a->userid} submeteu as novas notas alfabéticas';
$string['nogroupingentry'] = 'Sem agrupamento';
$string['notification'] = 'Nota: A definição das notas alfabéticas aplica-se a todos os itens de avaliação na disciplina.';
$string['p'] = '(%)';
$string['percent'] = 'Percentagem';
$string['pluginname'] = 'Distribuição das notas';
$string['pluginname_help'] = 'Este relatório mostra a distribuição das notas de um determinado item de avaliação, baseado nos limites inferiores definidos para as notas alfabéticas. A funcionalidade de pré-visualização permite que veja de imediato como as alterações nos limites inferiores das notas alfabéticas afetam a distribuição das notas. Se estiver satisfeito com os novos limites inferiores, as definições das notas alfabéticas podem ser alteradas de forma permanente.
Nota: A definição das nota alfabéticas aplica-se a todos os itens de avaliação na disciplina.';
$string['points'] = 'Pontos ({$a})';
$string['predecessor'] = 'O limite inferior de uma nota alfabética tem de ser menor do que o limite do seu antecessor.';
$string['printchart'] = 'Imprimir gráfico';
$string['privacy:null_reason'] = 'Este módulo não armazena quaisquer dados pessoais. Apresenta uma interface que mostra visualmente e exporta a distribuição das notas dos elementos avaliados numa disciplina.';
$string['saved'] = 'As notas alfabéticas foram alteradas com sucesso.';
$string['showgradeitem'] = 'Mostrar item de avaliação';
$string['showgradeitem_description'] = 'Mostra o tipo da apresentação da nota como uma escolha para o item de avaliação.';
$string['submitanddownload'] = 'Guardar alterações';
$string['sum'] = 'Soma';
