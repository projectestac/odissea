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
 * Strings for component 'booktool_wordimport', language 'pt', version '4.4'.
 *
 * @package     booktool_wordimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'Não é possível abrir o ficheiro temporário <b>{$a}</b>';
$string['embeddedimageswarning'] = 'Aviso: este ficheiro tem de ser aberto no Word 2020 ou Word 365 para ajustar corretamente as imagens incorporadas.';
$string['encodedimageswarning'] = 'Aviso: este ficheiro contém imagens codificadas. Para mais informações, consulte sobre como <a href="http://www.moodle2word.net/mod/page/view.php?id=143">convertê-las de novo em imagens incorporadas</a>.';
$string['exportbook'] = 'Exportar livro para Microsoft Word';
$string['exportchapter'] = 'Exportar este capítulo para Microsoft Word';
$string['exportformat'] = 'Formato de exportação';
$string['exportformat_desc'] = 'Formato de exportação';
$string['exportformat_embedded'] = 'Word 2010';
$string['exportformat_encoded'] = 'Word 2020';
$string['exportformat_help'] = 'Selecione o formato compatível com Word 2020/365 se tiver acesso ao Word 2019, Word 2020 ou Word 365. Caso contrário, escolha o Word 2010, que requer um modelo do Word externo para poder converter imagens num formato utilizável. Para mais informações, consulte sobre como <a href="http://www.moodle2word.net/mod/page/view.php?id=143">convertê-las de novo em imagens incorporadas</a>.';
$string['heading1stylelevel'] = 'Nível do elemento de cabeçalho para o estilo do Cabeçalho 1';
$string['heading1stylelevel_desc'] = 'Nível do elemento de título HTML para o qual o estilo "Cabeçalho 1" do Word deve ser mapeado';
$string['importchapters'] = 'Importar capítulos de Microsoft Word';
$string['insertionpoint'] = 'Inserir antes do capítulo atual';
$string['insertionpoint_help'] = 'Inserir conteúdo antes do capítulo atual, mantendo todo o conteúdo existente';
$string['nochapters'] = 'Não é possível exportar para Microsoft Word porque não foram encontrados capítulos neste livro.';
$string['pluginname'] = 'Importar de documento Microsoft Word (Livro)';
$string['privacy:metadata'] = 'A ferramenta de importação/exportação de ficheiros do Microsoft Word para Livros não armazena quaisquer dados pessoais.';
$string['replacebook'] = 'Substituir livro';
$string['replacebook_help'] = 'Eliminar o conteúdo atual do livro antes de importar';
$string['replacechapter'] = 'Substituir capítulo atual';
$string['replacechapter_help'] = 'Substituir o conteúdo do capítulo com o primeiro capítulo do ficheiro mas manter todos os outros capítulos';
$string['settings'] = 'Configurações da importação/exportação de ficheiros do Word (Livro)';
$string['splitonsubheadings'] = 'Criar subcapítulos baseados nos subtítulos';
$string['splitonsubheadings_help'] = 'Subcapítulos serão formatados com o estilo "Título 2"';
$string['stylesheetunavailable'] = 'XSLT Stylesheet <b>{$a}</b> não está disponível';
$string['transformationfailed'] = 'Falha na transformação XSLT';
$string['wordfile'] = 'Documento Microsoft Word';
$string['wordfile_help'] = 'Carregar documento Microsoft Word 2010 (ou posterior) <i>.docx</i>';
$string['wordimport:export'] = 'Exportar para documento Microsoft Word';
$string['wordimport:import'] = 'Importar de documento Microsoft Word';
$string['xsltunavailable'] = 'Precisa de ter a biblioteca XSLT instalada no PHP para poder guardar este ficheiro do Word';
