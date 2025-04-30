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
 * Strings for component 'quizaccess_onesession', language 'pt', version '4.4'.
 *
 * @package     quizaccess_onesession
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anothersession'] = 'Está a tentar aceder à tentativa de resposta ao teste a partir de um computador, dispositivo ou navegador que não é o mesmo que usou para iniciar a resposta ao teste. Se fechou acidentalmente o navegador, contacte o professor.';
$string['eventattemptblocked'] = 'Foi bloqueada a possibilidade de utilizar outro dispositivo para continuar a tentativa de resposta ao teste.';
$string['eventattemptunlocked'] = 'O aluno foi autorizado a continuar a tentativa de resposta ao teste utilizando outro dispositivo';
$string['onesession'] = 'Bloquear sessões simultâneas';
$string['onesession:unlockattempt'] = 'Desbloquear a opção de apenas uma sessão';
$string['onesession_help'] = 'Se ativar esta opção, os utilizadores só podem continuar a tentativa de resposta ao teste na mesma sessão do navegador. Qualquer tentativa de abrir o mesmo teste noutro computador, dispositivo ou navegador será bloqueada. Poderá ser útil quando quer ter a certeza que ninguém ajuda o aluno abrindo a mesma tentativa de resposta ao teste noutro computador.';
$string['pluginname'] = 'Regra de acesso com bloqueio de sessões simultâneas';
$string['privacy:metadata'] = 'O módulo armazena o hash da string usada para identificar a sessão do dispositivo cliente. Embora a string original contenha o endereço IP do cliente e o cabeçalho User-Agent enviado pelo navegador do cliente, o hash não permite extrair estas informações. O hash é automaticamente apagado imediatamente após o fim da sessão do teste.';
$string['studentinfo'] = 'Atenção! É proibido mudar de dispositivo durante a tentativa de resposta a este teste. Tenha em atenção que após o início da tentativa de resposta, qualquer ligação a este teste utilizando outros computadores, dispositivos ou navegadores será bloqueada. Não feche a janela do navegador até ao fim da tentativa, caso contrário, não será capaz de responder totalmente a este teste.';
$string['unlockthisattempt'] = 'Permitir ao aluno continuar esta tentativa noutro dispositivo';
$string['unlockthisattempt_header'] = 'Bloquear sessões simultâneas';
$string['whitelist'] = 'Redes sem verificação de IP';
$string['whitelist_desc'] = 'Esta opção tem como objetivo diminuir os falsos positivos quando os utilizadores respondem a testes através de redes móveis, onde o IP pode ser alterado durante a tentativa de resposta. Não é necessário na maioria das situações. Pode indicar uma lista separada por vírgulas de sub-redes (por exemplo: 88.0.0.0/8, 77.77.0.0/16). Se o endereço IP estiver nessas redes, não é verificado. Para desativar totalmente a verificação do IP, pode definir como 0.0.0.0/0.';
