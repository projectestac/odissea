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
 * Strings for component 'rating', language 'pt', branch 'MOODLE_36_STABLE'
 *
 * @package   rating
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
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

* Nota média - A média de todas as notas
* Número de avaliações - O número de avaliações torna-se a nota final. O total não pode exceder a nota máxima da atividade
* Nota máxima - A nota mais alta atribuída torna-se a nota final
* Nota mínima - A nota mais baixa atribuida torna-se a nota final
* Soma das notas - Todas as notas são somadas. O total não pode exceder a nota máxima da atividade

Se selecionar \'Sem avaliação\', a atividade não aparece na pauta.';
$string['allowratings'] = 'Permitir avaliação?';
$string['allratingsforitem'] = 'Todas as avaliações submetidas';
$string['capabilitychecknotavailable'] = 'Não pode verificar as permissões enquanto a atividade não for gravada';
$string['couldnotdeleteratings'] = 'Não é possível ser apagado pois já existem avaliações';
$string['norate'] = 'Não é permitido avaliar!';
$string['noratings'] = 'Não foram submetidas avaliações';
$string['noviewanyrate'] = 'Apenas pode consultar os resultados dos items que criou';
$string['noviewrate'] = 'Não tem permissão para ver avaliações';
$string['privacy:metadata:rating'] = 'A nota atribuída pelo utilizador é armazenada juntamente com o mapeamento do item que foi avaliado.';
$string['privacy:metadata:rating:rating'] = 'A nota numérica que o utilizador atribuiu.';
$string['privacy:metadata:rating:timecreated'] = 'A data/hora em que a nota foi atribuida pela última vez.';
$string['privacy:metadata:rating:timemodified'] = 'A data/hora em que a nota foi atualizada pela última vez.';
$string['privacy:metadata:rating:userid'] = 'O utilizador que fez a avaliação.';
$string['rate'] = 'Avaliar';
$string['ratepermissiondenied'] = 'Não tem permissão para avaliar';
$string['rating'] = 'Avaliação';
$string['ratinginvalid'] = 'A avaliação não é válida';
$string['ratings'] = 'Avaliações';
$string['ratingtime'] = 'Restringir a avaliação para itens de um intervalo de datas';
$string['rolewarning'] = 'Papéis com permissão para avaliar';
$string['rolewarning_help'] = 'Para avaliar atividades, os papéis dos utilizadores têm de incluir a permissão \'moodle/rating:rate\' e eventuais permissões especificas do módulo. Os utilizadores com os seguintes papéis devem poder avaliar itens. A lista de papéis pode ser modificada, a partir da hiperligação Permissões no menu de ações ou no bloco Administração, dependendo do tema utilizado.';
$string['scaleselectionrequired'] = 'Quando selecionar um tipo de agregação de avaliações, também deverá selecionar se vai usar uma escala ou definir uma pontuação máxima.';
