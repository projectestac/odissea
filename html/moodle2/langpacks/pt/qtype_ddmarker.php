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
 * Strings for component 'qtype_ddmarker', language 'pt', branch 'MOODLE_32_STABLE'
 *
 * @package   qtype_ddmarker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Espaços para mais {no} marcadores';
$string['alttext'] = 'Texto alternativo';
$string['answer'] = 'Resposta';
$string['bgimage'] = 'Imagem de fundo';
$string['clearwrongparts'] = 'Mover os marcadores arrastados incorretamente para a sua posição inicial na imagem abaixo';
$string['coords'] = 'Coordenadas';
$string['correctansweris'] = 'A resposta correta é: {$a}';
$string['draggableimage'] = 'Imagem arrastável';
$string['draggableitem'] = 'Item arrastável';
$string['draggableitemheader'] = 'Item arrastável {$a}';
$string['draggableitemtype'] = 'Tipo';
$string['draggableword'] = 'Texto arrastável';
$string['dropbackground'] = 'Imagem de fundo para onde arrastar os marcadores';
$string['dropzone'] = 'Área para largar {$a}';
$string['dropzoneheader'] = 'Áreas para largar';
$string['dropzones'] = 'Áreas para largar';
$string['dropzones_help'] = 'As áreas para largar são definidas através da indicação de coordenadas. À medida que for escrevendo, a pré-visualização é automaticamente atualizada, para que desta forma consiga corrigir as coordenadas por tentativa e erro

* Círculo: centro_X, centro_Y; raio<br>por exemplo: <code>80, 100; 50</code>
* Polígono: x1, y1; x2, y2; ...; xn, yn<br>por exemplo: <code>20, 60; 100, 60; 20, 100</code>
* Rectângulo: topo_esquerda_x, topo_esquerda_y; largura, altura<br>por exemplo: <code>20, 60; 80, 40</code>';
$string['followingarewrong'] = 'Os seguintes marcadores foram arrastados para uma área errada: {$a}.';
$string['followingarewrongandhighlighted'] = 'Os seguintes marcadores foram arrastados incorretamente: {$a}.<br />Os marcadores destacados foram colocados nas áreas de destino corretas.<br /> Clique no marcador para visualizar a área correta em destaque.';
$string['formerror_nobgimage'] = 'É necessário selecionar uma imagem para utilizar como fundo, para a área de arrastar e largar.';
$string['formerror_noitemselected'] = 'Especificou uma área para largar, mas não escolheu o marcador que deverá ser arrastado para essa área.';
$string['formerror_nosemicolons'] = 'Não existem pontos e vírgulas a separar a sua sequência de coordenadas. As suas coordenadas para o {$a->shape} devem ser expressas como - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Apenas as tags "{$a}" são permitidas num quadro para um marcador.';
$string['formerror_onlyusewholepositivenumbers'] = 'Por favor, utilize apenas números positivos inteiros para especificar as coordenadas X e Y e/ ou largura e altura das formas. As suas coordenadas para o {$a->shape} devem ser expressas como - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Para uma forma de polígono deverá especificar pelo menos 3 pontos. As suas coordenadas para o {$a->shape} devem ser expressas como - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Inseriu duas vezes as mesmas coordenadas. Cada ponto deverá ser único. As suas coordenadas para o {$a->shape} devem ser expressas como - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'A forma geométrica que definiu sai fora dos limites da imagem de fundo.';
$string['formerror_toomanysemicolons'] = 'Existem muitas partes separadas por ponto e vírgula para as coordenadas que foram especificadas. As suas coordenadas para o {$a->shape} devem ser expressas como - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'Não foi possível reconhecer a largura e a altura que especificou. As suas coordenadas para o {$a->shape} devem ser expressas como - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Não foi possível reconhecer as coordenadas X e Y que especificou. As suas coordenadas para o {$a->shape} devem ser expressas como - {$a->coordsstring}.';
$string['infinite'] = 'Infinito';
$string['marker'] = 'Marcador';
$string['marker_n'] = 'Marcador {no}';
$string['markers'] = 'Marcadores';
$string['nolabel'] = 'Sem quadro de texto';
$string['noofdrags'] = 'Número';
$string['pleasedragatleastonemarker'] = 'A sua resposta não está completa; deverá arrastar pelo menos um marcador para a imagem.';
$string['pluginname'] = 'Arrastar e largar numa área';
$string['pluginnameadding'] = 'Adicionar pergunta do tipo arrastar e largar numa área';
$string['pluginnameediting'] = 'Editar pergunta do tipo arrastar e largar numa área';
$string['pluginname_help'] = 'As perguntas do tipo arrastar e largar numa área necessitam que os alunos arrastem quadros de texto, e os larguem numa área para largar predefinida numa imagem de fundo.';
$string['pluginnamesummary'] = 'Os marcadores podem ser arrastados e largados em zonas predefinidas para largar, numa imagem de fundo.';
$string['previewareaheader'] = 'Pré-visualização';
$string['previewareamessage'] = 'Selecione um ficheiro de imagem de fundo, insira os seus quadros de texto para marcadores e defina as áreas para largar, na imagem de fundo, onde estes deverão ser largados.';
$string['refresh'] = 'Atualizar a pré-visualização';
$string['shape'] = 'Forma';
$string['shape_circle'] = 'Círculo';
$string['shape_circle_coords'] = 'X,Y;R (em que X,Y são as coordenadas do centro do círculo e R é o seu raio)';
$string['shape_circle_lowercase'] = 'círculo';
$string['shape_polygon'] = 'Polígono';
$string['shape_polygon_coords'] = 'X1,Y1;X2,Y2;X3,Y3;X4,Y4... (em que X1, Y1 são as coordenadas do primeiro vértice, X2, Y2 são as coordenadas do segundo, e assim sucessivamente. Não é necessário repetir as coordenadas do primeiro vértice para fechar o polígono.)';
$string['shape_polygon_lowercase'] = 'polígono';
$string['shape_rectangle'] = 'Rectângulo';
$string['shape_rectangle_coords'] = 'X,Y;W,H (em que X,Y são as coordenadas do canto superior esquerdo do retângulo, e o W e o H são a largura e altura do retângulo)';
$string['shape_rectangle_lowercase'] = 'rectângulo';
$string['showmisplaced'] = 'Destacar as áreas para largar que não contêm os marcadores corretos';
$string['shuffleimages'] = 'Baralhar os itens para arrastar a cada nova tentativa da pergunta';
$string['stateincorrectlyplaced'] = 'Contexto em que os marcadores são colocados incorretamente';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Área para largar {$a}';
$string['ytop'] = 'Topo';
