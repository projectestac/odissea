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
 * Strings for component 'tool_migratehvp2h5p', language 'pt', version '4.5'.
 *
 * @package     tool_migratehvp2h5p
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempted'] = 'Utilizadores com tentativas';
$string['cannot_migrate'] = 'Não é possível migrar a atividade';
$string['contenttype'] = 'Tipo de conteúdo';
$string['copy2cb'] = 'Estes conteúdos devem ser adicionados ao banco de conteúdo?';
$string['copy2cb_no'] = 'Não, eles devem ser criados apenas na atividade';
$string['copy2cb_yeswithlink'] = 'Sim, e deve ser usada na atividade uma hiperligação para estes ficheiros';
$string['copy2cb_yeswithoutlink'] = 'Sim, mas uma cópia será usada na atividade (alterações no banco de conteúdo não irão alterar a atividade)';
$string['error_contenttypeh5p_disabled'] = 'O tipo de conteúdo H5P do banco de conteúdos está desativado. Tem de estar ativado para migrar atividades desde \'mod_hvp\' para ser possível adicioná-los ao banco de conteúdos. Pode ativar este tipo de conteúdo em \'Administração do Site | Módulos | Banco de conteúdos | Gerir tipos de conteúdos \'ou execute novamente a ferramenta de migração e selecione \'Não, eles devem ser criados apenas na atividade\'. (ou \'copy2cb = 0\' se executar através da CLI) para evitar a criação de ficheiros no banco de conteúdos.';
$string['error_modh5pactivity_disabled'] = 'A atividade H5P está desativada. Tem de estar ativada para migrar atividades desde \'mod_hvp\'';
$string['event_hvp_migrated'] = 'mod_hvp migrada para mod_h5pactivity';
$string['graded'] = 'Alunos avaliados';
$string['hvpactivities'] = 'Atividades \'hvp\' em espera';
$string['id'] = 'ID';
$string['keeporiginal'] = 'Selecione o que fazer com a atividade original depois de migrada';
$string['keeporiginal_delete'] = 'Apagar a atividade original';
$string['keeporiginal_hide'] = 'Ocultar a atividade original';
$string['keeporiginal_nothing'] = 'Deixar a atividade original como está';
$string['migrate'] = 'Migrar';
$string['migrate_fail'] = 'Ocorreu um erro na migração da atividade \'hvp\' com ID = {$a}';
$string['migrate_gradesoverridden'] = 'A atividade original do mod_hvp "{$a->name}", com ID = {$a->id} foi migrada com sucesso.
No entanto, ela tem algumas informações de avaliação que foram substituídas, tais como o feedback, que não foi migrado porque a atividade original está configurada com uma nota máxima inválida (deve ser maior que 0 para ser migrada para a pauta).';
$string['migrate_gradesoverridden_notdelete'] = 'A atividade original do mod_hvp "{$a->name}", com ID = {$a->id} foi migrada com sucesso.
No entanto, ela tem algumas informações de avaliação que foram substituídas, tais como o feedback, que não foi migrado porque a atividade original está configurada com uma nota máxima inválida (deve ser maior que 0 para ser migrada para a pauta).
A atividade original foi ocultada em vez de apagada.';
$string['migrate_success'] = 'Atividade \'hvp\' com ID = {$a} foi migrada com sucesso';
$string['nohvpactivities'] = 'Não existem atividades \'hvp\' para migrar para \'5pactivity\'.';
$string['pluginname'] = 'Migrar conteúdo de \'hvp\' para \'h5pactivity\'';
$string['privacy:metadata'] = 'O módulo Migrar conteúdo de \'hvp\' para \'h5pactivity\' não armazena quaisquer dados pessoais';
$string['savedstate'] = 'Estado guardado';
$string['selecthvpactivity'] = 'Selecione {$a} atividade \'hvp\'';
$string['settings'] = 'Configurações da migração';
