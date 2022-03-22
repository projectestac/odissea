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
 * Strings for component 'block', language 'pt', version '3.11'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtodock'] = 'Mover para a consola';
$string['anypagematchingtheabove'] = 'Qualquer página que corresponda à de cima';
$string['appearsinsubcontexts'] = 'Aparecer nos subcontextos';
$string['assignrolesinblock'] = 'Atribuir papéis no bloco {$a}';
$string['blocksdrawertoggle'] = 'Ocultar/Mostrar a caixa de blocos';
$string['blocksettings'] = 'Configuração do bloco';
$string['bracketfirst'] = '{$a} (primeiro)';
$string['bracketlast'] = '{$a} (último)';
$string['configureblock'] = 'Configurar o bloco {$a}';
$string['contexts'] = 'Contextos';
$string['contexts_help'] = 'Contextos são tipos mais específicos de páginas em que este bloco pode ser exibido no local do bloco original. Verá diferentes opções, dependendo do local original do bloco e da sua localização atual. Por exemplo, pode restringir um bloco de forma a que apareça apenas nas páginas dos fóruns de uma disciplina. Para isso, basta adicionar o bloco na disciplina (configurá-lo para que seja mostrado em qualquer página da disciplina), aceder a um fórum e configurar o bloco de forma  a restringir a exibição apenas a páginas do fórum.';
$string['createdat'] = 'Localização original do bloco';
$string['createdat_help'] = 'O local original onde o bloco foi criado. As configurações do bloco podem aparecer em outros locais (contextos) dentro da localização original. Por exemplo, um bloco criado na página principal da disciplina pode ser exibido em atividades dentro dessa disciplina. Um bloco criado na página principal pode ser exibido em todo o site.';
$string['defaultregion'] = 'Posição predefinida';
$string['defaultregion_help'] = 'Os temas podem definir um ou mais locais onde os blocos são exibidos. Esta configuração define em que local este bloco irá aparecer por predefinição. Se pretender, poderá alterar esta posição na disciplina.';
$string['defaultweight'] = 'Ordem predefinida';
$string['defaultweight_help'] = 'A ordem predefinida permite que escolha a ordem pela qual será exibido o bloco. A localização final é calculada a partir de todos os blocos naquele local (por exemplo, apenas um bloco pode estar no topo da página). Se pretender, poderá alterar a ordem dos blocos na disciplina.';
$string['deleteblock'] = 'Apagar o bloco {$a}';
$string['deleteblockcheck'] = 'Tem a certeza de que pretende apagar o bloco <strong>\'{$a}\'</strong>?';
$string['deleteblockwarning'] = '<p>Está prestes a apagar um bloco que está a ser utilizado noutra localização.</p><p>Localização original do bloco: {$a->location}<br />Mostrar em páginas do tipo: {$a->pagetype}</p><p>Tem a certeza de que pretende continuar?</p>';
$string['deletecheck'] = 'Apagar o bloco {$a}?';
$string['dockblock'] = 'Mover o bloco {$a} para a consola';
$string['hideblock'] = 'Ocultar o bloco {$a}';
$string['hidedockpanel'] = 'Ocultar a consola';
$string['hidepanel'] = 'Ocultar o painel';
$string['moveblock'] = 'Mover o bloco {$a}';
$string['moveblockafter'] = 'Mover este bloco para depois do bloco {$a}';
$string['moveblockbefore'] = 'Mover este bloco para antes do bloco {$a}';
$string['moveblockinregion'] = 'Mover bloco para a região {$a}';
$string['movingthisblockcancel'] = 'Mover este bloco ({$a})';
$string['myblocks'] = 'Os meus blocos';
$string['onthispage'] = 'Nesta página';
$string['pagetypes'] = 'Tipos de página';
$string['pagetypewarning'] = 'O tipo de página especificado anteriormente já não pode ser selecionado. Escolha o tipo de página mais apropriado da lista abaixo.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Registo de quando o utilizador moveu o bloco';
$string['privacy:metadata:userpref:hiddenblock'] = 'Regista quando um utilizador colapsa/oculta um bloco';
$string['privacy:request:blockisdocked'] = 'Indica se o bloco foi movido';
$string['privacy:request:blockishidden'] = 'Indica se um bloco foi ocultado/colapsado';
$string['region'] = 'Posição';
$string['restrictpagetypes'] = 'Mostrar nas páginas';
$string['showblock'] = 'Mostrar o bloco {$a}';
$string['showoncontextandsubs'] = 'Mostrar em \'{$a}\' e em todas as suas páginas';
$string['showoncontextonly'] = 'Mostrar apenas em \'{$a}\'';
$string['showonentiresite'] = 'Mostrar em todo o site';
$string['showonfrontpageandsubs'] = 'Mostrar na página principal e em todas as páginas adicionadas à página principal';
$string['showonfrontpageonly'] = 'Mostrar apenas na página principal';
$string['subpages'] = 'Selecionar páginas';
$string['thisspecificpage'] = 'Esta página específica';
$string['undockall'] = 'Retirar todos da consola';
$string['undockblock'] = 'Retirar o bloco {$a} da consola';
$string['undockitem'] = 'Retirar este elemento da consola';
$string['visible'] = 'Visível';
$string['weight'] = 'Ordem';
$string['wherethisblockappears'] = 'Onde aparece este bloco';
