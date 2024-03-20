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
 * Strings for component 'tool_installaddon', language 'pt', version '4.1'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Confirmação';
$string['acknowledgementtext'] = 'Compreendo que é da minha responsabilidade ter cópias de segurança completas deste site antes de instalar módulos adicionais. Aceito e compreendo que os módulos (especialmente, mas não apenas, os provenientes de fontes não oficiais) podem conter falhas de segurança, tornar o site indisponível ou causar fuga ou perda de dados privados.';
$string['featuredisabled'] = 'A instalação de módulos está desativada neste site.';
$string['installaddon'] = 'Instalar módulo';
$string['installaddons'] = 'Instalar módulos';
$string['installfromrepo'] = 'Instalar a partir da diretoria de módulos do Moodle';
$string['installfromrepo_help'] = 'Será redirecionado para a diretoria de módulos do Moodle para procurar e instalar um módulo. Tenha em atenção que o nome completo do seu site, o URL e a versão Moodle também serão enviados por forma a facilitar-lhe o processo de instalação.';
$string['installfromzip'] = 'Instalar módulo a partir de ficheiro Zip';
$string['installfromzip_help'] = 'Uma alternativa para instalar um módulo diretamente da diretoria de módulos do Moodle é o carregamento de um pacote ZIP do módulo. O pacote ZIP deve ter a mesma estrutura de um pacote descarregado a partir da diretoria de módulos do Moodle.';
$string['installfromzipfile'] = 'Pacote ZIP';
$string['installfromzipfile_help'] = 'O pacote ZIP do módulo deve conter apenas uma diretoria e ter um nome correspondente ao do módulo. O conteúdo do ficheiro ZIP será extraído numa localização apropriada para o tipo de módulo. Se descarregou o pacote a partir da diretoria de módulos do Moodle, ele já terá esta estrutura.';
$string['installfromzipinvalid'] = 'O pacote ZIP do módulo deve conter apenas uma diretoria e ter um nome correspondente ao do módulo. O ficheiro apresentado é um pacote ZIP do módulo inválido .';
$string['installfromziprootdir'] = 'Alterar o nome da diretoria raiz';
$string['installfromziprootdir_help'] = 'Alguns pacotes ZIP, tais como os gerados pelo Github, podem conter um nome de diretoria raiz incorreto. Se assim for, pode inserir aqui o nome correto.';
$string['installfromzipsubmit'] = 'Instalar módulo a partir de ficheiro Zip';
$string['installfromziptype'] = 'Tipo de módulo';
$string['installfromziptype_help'] = 'No caso de módulos que declaram corretamente o seu nome, o instalador é capaz de detetar automaticamente o tipo de módulo. Se a auto-deteção falhar, escolha manualmente o tipo correto de módulo que está prestes a instalar.
Aviso: O procedimento de instalação pode falhar se for especificado um tipo de módulo incorreto.';
$string['installfromziptype_link'] = 'Development:Plugins';
$string['permcheck'] = 'Certifique-se que a pasta onde se encontram os módulos do tipo que pretende instalar permite a escrita pelo processo do servidor web.';
$string['permcheckerror'] = 'Erro durante a verificação de permissão de escrita';
$string['permcheckprogress'] = 'A verificar a permissão de escrita…';
$string['permcheckrepeat'] = 'Verifique novamente';
$string['permcheckresultno'] = 'A localização do tipo de módulo <em>{$a->path}</em> não permite escrita';
$string['permcheckresultyes'] = 'A localização do tipo de módulo <em>{$a->path}</em> permite escrita';
$string['pluginname'] = 'Instalação de módulo';
$string['privacy:metadata'] = 'O módulo Instalar módulo não armazena quaisquer dados pessoais.';
$string['remoterequestalreadyinstalled'] = 'Foi feito um pedido para instalar neste site o módulo \'<strong>{$a->name}</strong>\' ({$a->component}), versão \'{$a->version}\', a partir da diretoria de módulos do Moodle. No entanto, este módulo <strong>já está instalado</strong> no site.';
$string['remoterequestconfirm'] = 'Foi feito um pedido para instalar neste site o módulo \'<strong>{$a->name}</strong>\' ({$a->component}), versão \'{$a->version}\', a partir da diretoria de módulos do Moodle. Se continuar, o pacote ZIP do módulo será descarregado para validação. Para já, nada será instalado.';
$string['remoterequestinvalid'] = 'Foi feito um pedido para instalar neste site um módulo a partir da diretoria de módulos do Moodle. Infelizmente, o pedido não é válido, por isso, o módulo não pode ser instalado.';
$string['remoterequestnoninstallable'] = 'Existe um pedido para instalar neste site o módulo <strong>\'{$a->name}\'</strong> ({$a->component}), versão {$a->version}, da diretoria de módulos do Moodle. No entanto, falhou a verificação dos pré-requisitos da instalação do módulo (código da falha: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Foi feito um pedido para instalar neste site o módulo \'<strong>{$a->name}</strong>\' ({$a->component}), versão \'{$a->version}\', a partir da diretoria de módulos do Moodle. No entanto, <strong>\'{$a->typepath}\' é apenas de leitura</strong>. Tem de dar acesso de escrita ao utilizador do servidor web para a localização referida e depois clique no botão \'Continuar\' para repetir a verificação.';
$string['remoterequestpluginfoexception'] = 'Ocorreu um erro ao tentar obter informações sobre o módulo {$a->name} ({$a->component}), versão {$a->version}. O módulo não pode ser instalado. Ative o modo de depuração para ver os detalhes do erro.';
$string['typedetectionfailed'] = 'Não foi possível detecar o tipo de módulo. Por favor, escolha manualmente o tipo de módulo que está prestes a instalar.';
$string['typedetectionmismatch'] = 'O tipo de módulo selecionado não corresponde ao declarado pelo presente módulo: {$a}';
