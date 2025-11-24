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
 * Strings for component 'atto_accessibilitychecker', language 'pt', version '4.5'.
 *
 * @package     atto_accessibilitychecker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['emptytext'] = 'Texto vazio';
$string['entiredocument'] = 'Documento inteiro';
$string['imagesmissingalt'] = 'As imagens requerem um texto alternativo. Para corrigir este aviso, adicione um atributo alternativo às suas tags \'img\'. Pode ser usado um atributo alternativo vazio, mas apenas quando a imagem é meramente decorativa e não inclui nenhuma informação.';
$string['needsmorecontrast'] = 'As cores de primeiro plano e do texto de fundo não têm contraste suficiente. Para corrigir este aviso, altere a cor de primeiro plano ou a cor do texto de fundo, para que seja mais fácil de ler.';
$string['needsmoreheadings'] = 'Existe uma grande quantidade de texto sem títulos. Os títulos irão permitir aos utilizadores do Leitor de Ecrã navegar facilmente através das páginas, tornando-as mais acessíveis para todos.';
$string['nowarnings'] = 'Parabéns, não foram encontrados problemas de acessibilidade!';
$string['pluginname'] = 'Verificador de acessibilidade';
$string['privacy:metadata'] = 'O módulo atto_accessibilitychecker não armazena quaisquer dados pessoais.';
$string['report'] = 'Relatório de acessibilidade:';
$string['tablesmissingcaption'] = 'As tabelas devem ter legendas. Embora não seja necessário que cada tabela tenha uma legenda, uma legenda é geralmente muito útil.';
$string['tablesmissingheaders'] = 'As tabelas devem usar cabeçalhos de linhas e/ou colunas.';
$string['tableswithmergedcells'] = 'As tabelas não devem conter células unidas. Apesar de ser um tipo de configuração comum em tabelas, alguns Leitores de Ecrã ainda não suportam totalmente tabelas complexas. Quando possível, tente ajustar a tabela e evitar células unidas.';
