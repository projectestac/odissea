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
 * Strings for component 'block_filtered_course_list', language 'pt', version '4.5'.
 *
 * @package     block_filtered_course_list
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcourses'] = 'Administrador vê todas as disciplinas';
$string['blockname'] = 'Lista de disciplinas filtradas';
$string['catrubrictpl'] = 'Modelo de rubrica de categoria';
$string['catseparator'] = 'Separador de categorias';
$string['completedcourses'] = 'Disciplinas concluídas';
$string['configcatrubrictpl'] = 'Use esta configuração para definir a predefinição de como mostrar rubricas ao filtrar por categoria. Os seguintes tokens de substituição estão disponíveis: NAME, IDNUMBER, PARENT, ANCESTRY (NOME, NÚMERO ID, ASCENDENTE, DESCENDÊNCIA). <br /><br />Mais informações em <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki</a>.';
$string['configcatseparator'] = 'Separador para colocar entre os nomes das categoria ao usar DESCENDÊNCIA da categoria no modelo de rubrica de categoria.';
$string['configcoursenametpl'] = 'Use esta configuração para definir a predefinição de como mostrar o nome da disciplina. Os seguintes tokens de substituição estão disponíveis: FULLNAME, SHORTNAME, IDNUMBER and CATEGORY (NOME COMPLETO, NOME CURTO, NÚMERO ID e CATEGORIA). <br /><br />Mais informações em <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki</a>.';
$string['configexternalfilters'] = 'Use o identificador entre parênteses para referenciar o filtro dentro da área de texto de configuração do filtro. Para mais informações sobre a configuração disponível para um filtro externo, consulte o módulo que o fornece.';
$string['configfilters'] = 'Digite um filtro por linha e use barras verticais para separar os elementos do filtro. Os tipos de filtro são: <i>category</i>, <i>shortname</i>, <i>regex</i>, <i>idnumber</i>, <i>completion</i>, <i>starred</i>, <i>enrolment</i> and <i>generic</i>. <br /><br />Mais detalhes em <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax</a>.';
$string['confighideallcourseslink'] = 'Ocultar a hiperligação "Todas as disciplinas" da parte inferior do bloco. <br>Se ativar esta opção, não mostrar a hiperligação, a \'Vista do administrador\' não é afetada.';
$string['confighidefromguests'] = 'Ocultar o bloco aos visitantes e anónimos.';
$string['confighideothercourses'] = 'Ocultar "Outras disciplinas" no bloco.';
$string['configmanagerview'] = 'O que pode ver um administrador no bloco da lista de disciplinas? Tenha em atenção que os administradores que não estão inscritos em nenhuma disciplinas continuarão a ver a lista genérica.';
$string['configmaxallcourse'] = 'Em sites com apenas uma categoria, os administradores e os visitantes poderão ver todas as disciplinas, mas acima do valor aqui indicado, irão ver, em vez disso, uma hiperligação para a categoria.<br />[Escolha um número inteiro entre 0 e 999.]';
$string['configpersistentexpansion'] = 'Lembrar estado de expansão da rubrica durante a mesma sessão do navegador.';
$string['configprimarysort'] = 'Dentro de uma rubrica, as disciplinas serão ordenadas por este campo. Escolha "Ordenação predefinida" para mostrar as disciplinas na mesma ordem que a visualizada em \'Gerir disciplinas e categorias\'.';
$string['configsecondarysort'] = 'Dentro de uma rubrica, as disciplinas serão ordenadas, em segundo nível, com base neste campo.';
$string['configtitle'] = 'Título do bloco';
$string['coursenametpl'] = 'Modelo do nome da disciplina';
$string['courses'] = 'Disciplinas';
$string['courseswithxenrolment'] = 'Disciplinas com {$a} inscrições';
$string['defaultfilters'] = 'categoria | colapsada | 0 (nível de topo) | 0 (todos os descendentes)';
$string['externalfilters'] = 'Filtro externo';
$string['filtered_course_list:addinstance'] = 'Adicionar um novo bloco Lista de disciplinas filtradas';
$string['filtered_course_list:myaddinstance'] = 'Adicionar um novo bloco Lista de disciplinas filtradas ao Painel de utilizador';
$string['filters'] = 'Configuração do filtro';
$string['filters_help'] = 'Digite um filtro por linha e use barras verticais (|) para separar os elementos do filtro. Os tipos de filtro são: <i>category</i>, <i>shortname</i>, <i>regex</i>, <i>idnumber</i>, <i>completion</i>, <i>starred</i>, <i>enrolment</i> and <i>generic</i>. <br /><br />Mais detalhes em <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax</a>.';
$string['hideallcourseslink'] = 'Ocultar "Todas as disciplinas"';
$string['hidefromguests'] = 'Ocultar dos visitantes';
$string['hideothercourses'] = 'Ocultar outras disciplinas';
$string['managerview'] = 'Vista do administrador';
$string['maxallcourse'] = 'Máximo disciplinas em categoria única';
$string['othercourses'] = 'Outras disciplinas';
$string['owncourses'] = 'Administrador vê as suas próprias disciplinas';
$string['persistentexpansion'] = 'Manter estado de expansão';
$string['pluginname'] = 'Lista de disciplinas filtradas';
$string['primarysort'] = 'Primeiro nível de ordenação';
$string['primaryvector'] = 'Modo da ordenação de primeiro nível';
$string['privacy:metadata'] = 'O bloco Lista de disciplinas filtradas mostra informações sobre as inscrições na disciplina mas não afeta nem armazena dados em si. Todas as inscrições são geridas por outros sistemas Moodle.';
$string['secondarysort'] = 'Segundo nível de ordenação';
$string['secondaryvector'] = 'Modo da ordenação de segundo nível';
$string['starredcourses'] = 'Disciplinas com estrela';
$string['top'] = 'Topo';
