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
 * Strings for component 'rating', language 'pt', version '3.11'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Nota média';
$string['aggregatecount'] = 'Número de avaliações';
$string['aggregatemax'] = 'Nota máxima';
$string['aggregatemin'] = 'Nota mínima';
$string['aggregatenone'] = 'Sem avaliação';
$string['aggregatesum'] = 'Soma das notas';
$string['aggregatetype'] = 'Tipo de avaliação';
$string['aggregatetype_help'] = 'O tipo de avaliação define a forma como as notas são apresentadas na pauta.

* Nota média - A média de todas as notas é a nota final
* Número de avaliações - O número de avaliações torna-se a nota final. O total não pode exceder a nota máxima da atividade
* Nota máxima - A nota mais alta atribuída torna-se a nota final
* Nota mínima - A nota mais baixa atribuída torna-se a nota final
* Soma das notas - Todas as notas são somadas. O total não pode exceder a nota máxima da atividade

Se selecionar \'Sem avaliação\', a atividade não aparece na pauta.';
$string['allowratings'] = 'Permitir avaliação?';
$string['allratingsforitem'] = 'Todas as avaliações submetidas';
$string['capabilitychecknotavailable'] = 'Não é possível verificar as permissões enquanto a atividade não for guardada';
$string['couldnotdeleteratings'] = 'Não é possível ser apagado pois já existem avaliações';
$string['norate'] = 'Não é permitido avaliar!';
$string['noratings'] = 'Não foram submetidas avaliações';
$string['noviewanyrate'] = 'Apenas pode consultar os resultados dos items que criou';
$string['noviewrate'] = 'Não tem permissão para ver avaliações';
$string['privacy:metadata:rating'] = 'A nota atribuída pelo utilizador é armazenada juntamente com o mapeamento do item que foi avaliado.';
$string['privacy:metadata:rating:rating'] = 'A nota numérica que o utilizador atribuiu.';
$string['privacy:metadata:rating:timecreated'] = 'Data e hora em que a nota foi atribuída pela última vez';
$string['privacy:metadata:rating:timemodified'] = 'A data e hora em que a nota foi atualizada pela última vez.';
$string['privacy:metadata:rating:userid'] = 'O utilizador que fez a avaliação.';
$string['rate'] = 'Avaliar';
$string['ratepermissiondenied'] = 'Não tem permissão para avaliar';
$string['rating'] = 'Avaliação';
$string['ratinginvalid'] = 'A avaliação não é válida';
$string['ratings'] = 'Avaliações';
$string['ratingtime'] = 'Restringir a avaliação para itens de um intervalo de datas';
$string['rolewarning'] = 'Papéis com permissão para avaliar';
$string['rolewarning_help'] = 'Os papeis com permissão para avaliar são papeis com a permissão moodle/rating:rate além de quaisquer capacidades de avaliação específicas da atividade. Pode dar permissão a mais papeis para avaliar via página Permissões.';
$string['scaleselectionrequired'] = 'Quando selecionar um tipo de agregação de avaliações, também deverá selecionar se vai usar uma escala ou definir uma pontuação máxima.';
