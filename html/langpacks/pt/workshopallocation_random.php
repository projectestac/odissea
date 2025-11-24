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
 * Strings for component 'workshopallocation_random', language 'pt', version '4.5'.
 *
 * @package     workshopallocation_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'Adicionar auto-avaliações';
$string['allocationaddeddetail'] = 'Novas avaliações a realizar: <strong>{$a->reviewername}</strong> é avaliador de <strong>{$a->authorname}</strong>';
$string['allocationdeallocategraded'] = 'O trabalho já está avaliado e, por isso, não é possível alterar as definições de revisão: avaliador: <strong>{$a->reviewername}</strong>, autor da submissão: <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'Re-avaliação: <strong>{$a->reviewername}</strong> permanece como avaliador de <strong>{$a->authorname}</strong>';
$string['allocationsettings'] = 'Configurações da atribuição de trabalhos';
$string['assessmentdeleteddetail'] = 'Trabalhos que deixaram de estar atribuídos: <strong>{$a->reviewername}</strong> já não é avaliador de <strong>{$a->authorname}</strong';
$string['assesswosubmission'] = 'Os participantes podem avaliar trabalhos, mesmo sem terem submetido';
$string['confignumofreviews'] = 'O número predefinido de trabalhos atribuídos aleatoriamente a cada avaliador';
$string['excludesamegroup'] = 'Evitar avaliação de trabalhos por pares do mesmo grupo';
$string['noallocationtoadd'] = 'Não existem trabalhos por atribuir';
$string['nogroupusers'] = '<p>Atenção: Se o workshop estiver no modo \'Grupos visíveis\' ou no modo \'Grupos separados\', os utilizadores devem estar inscritos em pelo menos um grupo para lhe serem atribuídos trabalhos para avaliação dos pares. Utilizadores que não se encontrem inscritos em nenhum grupo, podem apenas realizar auto-avaliações e avaliação de trabalhos que deixaram de estar atribuídos a pares.</p>
<p>Utilizadores não inscritos em qualquer grupo: {$a}</p>';
$string['numofdeallocatedassessment'] = '{$a} avaliações que deixaram de estar atribuídas';
$string['numofrandomlyallocatedsubmissions'] = 'Atribuição aleatória de {$a} trabalhos';
$string['numofreviews'] = 'Número de avaliações';
$string['numofselfallocatedsubmissions'] = 'Auto-atribuição de {$a} trabalhos';
$string['numperauthor'] = 'por trabalho submetido';
$string['numperreviewer'] = 'por avaliador';
$string['pluginname'] = 'Atribuição aleatória';
$string['privacy:metadata'] = 'O módulo Atribuição aleatória não armazena quaisquer dados pessoais. Os atuais dados pessoais sobre quem vai avaliar quem são armazenados pelo módulo workshop em si e formam a base para exportar detalhes de avaliação.';
$string['randomallocationdone'] = 'A atribuição aleatória foi realizada com sucesso';
$string['removecurrentallocations'] = 'Remover atribuições atuais';
$string['resultnomorepeers'] = 'Não existem mais pares disponíveis';
$string['resultnomorepeersingroup'] = 'Não existem mais pares disponíveis neste grupo separado';
$string['resultnotenoughpeers'] = 'Não existem pares suficientes';
$string['resultnumperauthor'] = 'A tentar atribuir {$a} avaliação(ões) por autor';
$string['resultnumperreviewer'] = 'A tentar atribuir {$a} avaliação(ões) por avaliador';
$string['stats'] = 'Estatísticas das atribuições atuais';
