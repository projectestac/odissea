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
 * Strings for component 'qbank_statistics', language 'pt', version '4.5'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'Requer verificação';
$string['discrimination_index_help'] = 'Uma pergunta é indicada como provável que precise de verificação com base nas estatísticas da pergunta. Por exemplo, se os alunos obtiverem uma pontuação baixa na pergunta, mas uma pontuação alta no teste, ou uma pontuação alta na pergunta, mas uma pontuação baixa no teste, pode indicar que há um problema com a pergunta, como por exemplo: uma resposta errada ser definida como correta. As estatísticas não são infalíveis. Trata-se apenas de uma dica de que a pergunta deve ser verificada.';
$string['discriminative_efficiency'] = 'Eficiência discriminativa';
$string['discriminative_efficiency_help'] = 'A eficiência discriminativa é uma estimativa estatística de quão bem a pergunta avalia os alunos, em que um valor mais alto avalia melhor. Um valor particularmente baixo pode indicar um problema com a pergunta. Uma pergunta muito difícil ou muito fácil (índice de facilidade próximo de 0% ou de 100%) também pode resultar num valor baixo.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['emptyvalue'] = '-';
$string['facility_index'] = 'Índice de facilidade';
$string['facility_index_help'] = 'O índice de facilidade indica a nota média (em percentagem) obtida na pergunta (todas as versões) em todos os testes em que houve tentativa de resposta à pergunta. Um valor mais alto normalmente indica uma pergunta mais fácil.';
$string['likely'] = 'Provável';
$string['na'] = 'N/A';
$string['pluginname'] = 'Estatísticas da pergunta';
$string['privacy:metadata'] = 'O módulo Estatísticas da pergunta da base de dados de perguntas não armazena quaisquer dados pessoais.';
$string['unlikely'] = 'Pouco provável';
$string['verylikely'] = 'Muito provável';
