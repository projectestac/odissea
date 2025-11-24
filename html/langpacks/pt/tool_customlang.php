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
 * Strings for component 'tool_customlang', language 'pt', version '4.5'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Guardar strings no pacote linguístico';
$string['checkout'] = 'Abrir pacote linguístico para edição';
$string['checkoutdone'] = 'A carregar pacote linguístico';
$string['checkoutinprogress'] = 'A carregar o pacote linguístico';
$string['cliexportfileexists'] = 'O ficheiro para o idioma {$a->lang} já existe. Será ignorado. Se pretende substituir, adicione a opção --override=true.';
$string['cliexportfilenotfoundforcomponent'] = 'Não foi encontrado o ficheiro {$a->filepath} para o idioma {$a->lang}. O ficheiro será ignorado.';
$string['cliexportheading'] = 'A iniciar a exportação dos ficheiros lang.';
$string['cliexportnofilefoundforlang'] = 'Nenhum ficheiro encontrado para exportar. A exportação deste idioma não será efetuada.';
$string['cliexportstartexport'] = 'A exportar o idioma \'{$a}\'';
$string['cliexportzipdone'] = 'Zip criado: {$a}';
$string['cliexportzipfail'] = 'Não é possível criar o ficheiro Zip {$a}';
$string['clifiles'] = 'Ficheiros a importar para {$a}';
$string['cliimporting'] = 'Importar string de ficheiros (modo {$a})';
$string['climissingfiles'] = 'Ficheiros válidos em falta';
$string['climissinglang'] = 'Idioma em falta';
$string['climissingmode'] = 'Modo em falta ou inválido (valores válido: tudo, novo ou atualização)';
$string['climissingsource'] = 'Pasta ou ficheiro em falta';
$string['clinolog'] = 'Nada a importar para {$a}';
$string['confirmcheckin'] = 'Está prestes a guardar modificações no seu pacote linguístico local. Isso exportará as strings personalizadas do tradutor para a diretoria de dados do site e o seu site começará a usar as strings modificadas. Clique em \'Continuar\' para prosseguir para proceder à alteração.';
$string['customlang:edit'] = 'Editar tradução local';
$string['customlang:export'] = 'Exportar tradução local';
$string['customlang:view'] = 'Ver tradução local';
$string['editlangpack'] = 'Editar pacote linguístico';
$string['export'] = 'Exportar strings personalizadas';
$string['exportfilter'] = 'Selecione o(s) componente(s) para exportar';
$string['exportzipfilename'] = 'exportar_idioma_personalizado-{$a->lang}.zip';
$string['filter'] = 'Filtrar strings';
$string['filtercomponent'] = 'Mostrar strings destes componentes';
$string['filtercustomized'] = 'Apenas strings personalizadas';
$string['filtermodified'] = 'Apenas strings modificadas nesta sessão';
$string['filteronlyhelps'] = 'Apenas strings de ajuda';
$string['filtershowstrings'] = 'Mostrar strings';
$string['filterstringid'] = 'Identificador de strings';
$string['filtersubstring'] = 'Apenas strings contendo';
$string['headingcomponent'] = 'Componente';
$string['headinglocal'] = 'Personalização local';
$string['headingstandard'] = 'Texto padrão';
$string['headingstringid'] = 'String';
$string['import'] = 'Importar strings personalizadas';
$string['import_all'] = 'Criar ou atualizar todas as strings do(s) componente(s)';
$string['import_mode'] = 'Modo de importação';
$string['import_new'] = 'Criar apenas strings sem personalização local';
$string['import_update'] = 'Atualizar apenas as strings sem personalização local';
$string['importfile'] = 'Importar ficheiro';
$string['langpack'] = 'Componente(s) do idioma';
$string['markinguptodate'] = 'A marcar a personalização como atualizada';
$string['markinguptodate_help'] = 'A tradução personalizada pode ficar desatualizada, se tanto a original em Inglês ou a tradução local forem alteradas desde a personalização de uma dada string apenas no site. Reveja a tradução personalizada. Se encontrar desatualizações, clique na caixa de seleção e edite-a de outra forma.';
$string['markuptodate'] = 'marcar como desatualizada';
$string['modifiedno'] = 'Não existem strings alteradas para inserir';
$string['modifiednum'] = 'Existem {$a} strings alteradas. Deve inseri-las no disco para as guardar permanentemente.';
$string['nolocallang'] = 'Nenhuma string local encontrada.';
$string['nostringsfound'] = 'Não foram encontradas strings, altere os seus critérios de pesquisa.';
$string['notice_ignorenew'] = 'A string {$a->component}/{$a->stringid} foi ignorada porque não está personalizada.';
$string['notice_ignoreupdate'] = 'A string {$a->component}/{$a->stringid} foi ignorada porque já foi definida.';
$string['notice_inexitentstring'] = 'A string {$a->component}/{$a->stringid} não foi encontrada.';
$string['notice_missingcomponent'] = 'Componente {$a->component} em falta.';
$string['notice_success'] = 'A string {$a->component}/{$a->stringid} foi atualizada com sucesso.';
$string['placeholder'] = 'Espaços reservados';
$string['placeholder_help'] = 'Espaços reservados são códigos especiais como \'{$a}\' ou \'{$a->something}\' dentro de uma string. Estes são substituídos por um valor quando a string é exibida.

Como tal, é importante copiá-los exatamente como estão na string original. Não os traduza, nem altere a sua orientação da direita para a esquerda.';
$string['placeholderwarning'] = 'strings com expressões especiais';
$string['pluginname'] = 'Personalização do idioma';
$string['privacy:metadata'] = 'O módulo Personalização do idioma não armazena dados pessoais.';
$string['savecheckin'] = 'Guardar alterações ao pacote linguístico';
$string['savecontinue'] = 'Guardar e continuar a editar';
