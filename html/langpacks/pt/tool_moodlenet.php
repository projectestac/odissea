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
 * Strings for component 'tool_moodlenet', language 'pt', version '4.5'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'A adicionar conteúdo do MoodleNet';
$string['aria:enterprofile'] = 'Digite o seu ID do perfil MoodleNet';
$string['aria:footermessage'] = 'Pesquisar conteúdo no MoodleNet';
$string['autoenablenotification'] = '<p>Desde o Moodle 4.0 em diante, a integração do <a href="https://moodle.net/">MoodleNet</a> está ativada por predefinição nas Funcionalidades avançadas. Os utilizadores com a permissão de criar e gerir atividades podem navegar no MoodleNet através do seletor de atividades e importar recursos do MoodleNet para as suas disciplinas.</p><p>Se pretender, pode especificar uma instância alternativa do MoodleNet nas <a href="{$a->settingslink}">Configurações do MoodleNet</a>.</p>';
$string['autoenablenotification_subject'] = 'A configuração predefinida do MoodleNet foi alterada.';
$string['browsecontentmoodlenet'] = 'ou presquisar conteúdo no MoodleNet';
$string['clearsearch'] = 'Limpar pesquisa';
$string['connectandbrowse'] = 'Ligar e procurar:';
$string['defaultmoodlenet'] = 'URL do MoodleNet';
$string['defaultmoodlenet_desc'] = 'O URL para a instância MoodleNet disponível via seletor de atividades.';
$string['defaultmoodlenetname'] = 'Nome da instância do MoodleNet';
$string['defaultmoodlenetname_desc'] = 'O nome da instância MoodleNet disponível via seletor de atividades.';
$string['defaultmoodlenetnamevalue'] = 'Central do MoodleNet';
$string['enablemoodlenet'] = 'Ativar a integração do MoodleNet (entrada)';
$string['enablemoodlenet_desc'] = 'Se ativar esta opção, um utilizador com a permissão de criar e gerir atividades pode procurar no MoodleNet, via seletor de atividades, e importar recursos do MoodleNet para a disciplina. Além disso, um utilizador com a permissão de restaurar cópias de segurança pode selecionar um ficheiro de cópia de segurança no MoodleNet e restaurá-lo no Moodle.';
$string['errorduringdownload'] = 'Ocorreu um erro ao descarregar o ficheiro: {$a}';
$string['footermessage'] = 'Procurar conteúdo em';
$string['forminfo'] = 'O seu ID do perfil MoodleNet será guardado automaticamente no seu perfil deste site.';
$string['importconfirm'] = 'Está prestes a importar o conteúdo "{$a->resourcename} ({$a->resourcetype})" para a disciplina "{$a->coursename}". Tem a certeza de que pretende continuar?';
$string['importconfirmnocourse'] = 'Está prestes a importar o conteúdo "{$a->resourcename} ({$a->resourcetype})" para o seu site. Tem a certeza de que pretende continuar?';
$string['importformatselectguidingtext'] = 'Em que formato pretende que o conteúdo "{$a->name} ({$a->type})" seja adicionado à sua disciplina?';
$string['importformatselectheader'] = 'Escolha o formato de exibição do conteúdo';
$string['inputhelp'] = 'Se já possui uma conta MoodleNet, copie o ID do seu perfil MoodleNet e cole aqui:';
$string['instancedescription'] = 'O MoodleNet é uma plataforma social aberta de multimédia para educadores, com foco na criação colaborativa de coleções de recursos.';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-example@moodle.net';
$string['invalidmoodlenetprofile'] = '$userprofile não está formatado corretamente';
$string['missinginvalidpostdata'] = 'As informações de recursos do MoodleNet estão ausentes ou estão num formato incorreto.
Se isto acontecer repetidamente, contacte o administrador do site.';
$string['mnetprofile'] = 'Perfil MoodleNet';
$string['mnetprofiledesc'] = '<p>Digite os detalhes do seu perfil MoodleNet para ser redirecionado para o seu perfil enquanto visita o MoodleNet.</p>';
$string['moodlenetnotenabled'] = 'A integração do MoodleNet deve ser ativada em Administração do Site / MoodleNet antes que as importações de recursos possam ser processadas.';
$string['moodlenetsettings'] = 'Configurações da entrada no MoodleNet';
$string['notification'] = 'Está prestes a importar o conteúdo "{$a->name} ({$a->type})" para o seu site. Selecione a disciplina em que deve ser adicionado ou <a href="{$a->cancellink}">cancele</a>.';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'A ferramenta MoodleNet facilita apenas a comunicação com o MoodleNet. Não armazena quaisquer dados.';
$string['profilevalidationerror'] = 'Ocorreu um erro ao tentar validar o ID do seu perfil MoodleNet';
$string['profilevalidationfail'] = 'Indique um ID de perfil MoodleNet válido';
$string['profilevalidationpass'] = 'Parece bem!';
$string['removedmnetprofilenotification'] = 'Devido a mudanças recentes na plataforma MoodleNet, qualquer utilizador que guardou anteriormente o seu ID do perfil MoodleNet no site terá de indicar o ID do perfil MoodleNet no novo formato para se autenticar na plataforma MoodleNet.';
$string['removedmnetprofilenotification_subject'] = 'Alteração do formato do ID do perfil MoodleNet';
$string['saveandgo'] = 'Guardar e prosseguir';
$string['searchcourses'] = 'Procurar disciplinas';
$string['selectpagetitle'] = 'Selecionar página';
$string['uploadlimitexceeded'] = 'O tamanho do ficheiro {$a->filesize} excede o limite de carregamento do utilizador ({$a->uploadlimit} bytes).';
