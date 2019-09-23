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
 * Strings for component 'quizaccess_offlineattempts', language 'pt', branch 'MOODLE_36_STABLE'
 *
 * @package   quizaccess_offlineattempts
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowofflineattempts'] = 'Permitir que o teste seja respondido offline através da aplicação móvel';
$string['allowofflineattempts_help'] = 'Se ativar esta opção, um utilizador da aplicação móvel pode descarregar o Teste e realizar uma tentativa offline.

Nota: Não é possível responder offline a um Teste caso este tenha sido configurado com um tempo limite, tenha definidos endereço de rede autorizados ou utilize outro modo de comportamento das perguntas que não seja o feedback diferido (com ou sem ABGC).';
$string['confirmdatasaved'] = 'Confirmo que não tenho nenhum trabalho por guardar num dispositivo móvel.';
$string['mobileapp'] = 'Aplicação móvel';
$string['offlineattemptserror'] = 'Não é possível responder offline a um teste caso este tenha sido configurado com um limite de tempo, tenha definidos endereço de rede autorizados ou utilize outro modo de comportamento de perguntas que não seja o feedback diferido (com ou sem ABGC).';
$string['offlinedatamessage'] = 'Já esteve nesta tentativa através de um dispositivo móvel. Os dados foram guardados pela última vez neste site há {$a} atrás.';
$string['pleaseconfirm'] = 'Por favor, verifique e confirme que não tem qualquer trabalho por guardar.';
$string['pluginname'] = 'Regra de acesso a tentativas offline';
$string['privacy:metadata'] = 'O módulo Regra de acesso a tentativas offline não armazena dados pessoais.';
