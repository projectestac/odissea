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
 * Strings for component 'repository_upload', language 'pt', version '4.1'.
 *
 * @package     repository_upload
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configplugin'] = 'Configurar repositório "Enviar ficheiro"';
$string['pluginname'] = 'Enviar ficheiro';
$string['pluginname_help'] = 'Enviar um ficheiro para o Moodle';
$string['privacy:metadata'] = 'O módulo Enviar ficheiro não armazena ou transmite quaisquer dados pessoais.';
$string['upload:view'] = 'Usar envio de ficheiros no explorador de ficheiros';
$string['upload_error_cant_write'] = 'Erro ao guardar ficheiro no servidor.';
$string['upload_error_extension'] = 'Uma extensão PHP interrompeu o envio do ficheiro.';
$string['upload_error_form_size'] = 'O tamanho do ficheiro enviado ultrapassa o valor definido no parâmetro MAX_FILE_SIZE que foi especificado no código HTML do formulário.';
$string['upload_error_ini_size'] = 'O tamanho do ficheiro é maior que o máximo permitido.';
$string['upload_error_invalid_file'] = 'O ficheiro \'{$a}\' está vazio ou é uma pasta. Para carregar pastas, crie primeiro um ficheiro Zip com as pastas organizadas.';
$string['upload_error_no_file'] = 'Não foi enviado nenhum ficheiro.';
$string['upload_error_no_tmp_dir'] = 'O PHP detetou a falta de uma pasta temporária.';
$string['upload_error_partial'] = 'O envio do ficheiro não foi completamente concluído.';
