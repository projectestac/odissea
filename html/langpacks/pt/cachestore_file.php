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
 * Strings for component 'cachestore_file', language 'pt', version '4.1'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'Limpar diretoria assincronamente';
$string['asyncpurge_help'] = 'Se ativar esta opção, a nova diretoria é criada com revisão da cache e a diretoria antiga será apagada de forma assíncrona através de tarefa agendada.';
$string['autocreate'] = 'Criar diretoria automaticamernte';
$string['autocreate_help'] = 'Se ativar esta opção, e caso ainda não exista, o diretório especificado no caminho será automaticamente criado.';
$string['lockwait'] = 'Tempo máximo de espera de bloqueio';
$string['lockwait_help'] = 'O tempo máximo, em segundos, para aguardar um bloqueio exclusivo antes de ler ou gravar uma chave da cache. É usado apenas para definições de cache que exigem bloqueio de leitura ou gravação.';
$string['path'] = 'Caminho da cache';
$string['path_help'] = 'Pasta que deverá ser usada para armazenar ficheiros para esta cache. Se deixar o campo em branco (predefinição), será criada automaticamente uma sub-pasta na pasta \'moodledata\'. Pode ser usado para apontar para um armazenamento de ficheiros numa pasta com melhor desempenho da unidade (tal como se fosse na memória).';
$string['pluginname'] = 'Ficheiro da cache';
$string['prescan'] = 'Pré-verificação da diretoria';
$string['prescan_help'] = 'Se ativar esta opção, a diretoria é verificada quando a cache é usada pela primeira vez e os pedidos de ficheiros são verificados primeiro contra os dados de verificação. Isto pode ser útil se tiver um sistema de ficheiros lento e constatar que as operações de ficheiros estão a causar um congestionamento.';
$string['privacy:metadata'] = 'O armazenamento de cache do módulo Ficheiro da cache armazena dados temporariamente como parte da sua funcionalidade de armazenamento em cache, mas os dados são limpos regularmente.';
$string['singledirectory'] = 'Armazenamento único de diretoria';
$string['singledirectory_help'] = 'Se os ficheiros disponíveis (itens armazenados em cache) forem armazenados numa única diretoria ao invés de serem divididos em várias diretorias.

Ativar esta funcionalidade irá acelerar as interações de ficheiro, no entanto, causará um aumento do risco de atingir as limitações do sistema de ficheiros.

É aconselhável que ative esta funcionalidade apenas se:

* Souber que o número de itens na cache vai ser suficientemente pequeno para não causar problemas no sistema de ficheiros com que está a executar.
* Os dados que estão a ser armazenados em cache não forem dispendiosos de gerar. Se forem, manter a configuração predefinida poderá ser a melhor opção, uma vez que reduz a probabilidade de gerar problemas.';
$string['task_asyncpurge'] = 'Limpar de forma assíncrona as diretorias de ficheiros antigos de armazenamento da cache';
