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
 * Strings for component 'quizaccess_offlineattempts', language 'pt', version '4.5'.
 *
 * @package     quizaccess_offlineattempts
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowofflineattempts'] = 'Permitir que o teste seja respondido offline através da Aplicação móvel';
$string['allowofflineattempts_help'] = 'Se ativar esta opção, um utilizador da Aplicação móvel pode descarregar o teste e realizar uma tentativa offline.

Nota: Não é possível responder offline a um teste se: este tenha sido configurado com um tempo limite, tenha definido endereços de rede autorizados, utilize outro modo de comportamento das perguntas que não seja o feedback diferido (com ou sem ABGC) ou use modo de navegação sequencial.';
$string['confirmdatasaved'] = 'Confirmo que não tenho nenhum trabalho por guardar num dispositivo móvel.';
$string['mobileapp'] = 'Aplicação móvel';
$string['offlineattemptserror'] = 'Não é possível responder offline a um teste se: este tenha sido configurado com um tempo limite, tenha definido endereços de rede autorizados, utilize outro modo de comportamento das perguntas que não seja o feedback diferido (com ou sem ABGC) ou use modo de navegação sequencial.';
$string['offlinedatamessage'] = 'Já esteve nesta tentativa através de um dispositivo móvel. Os dados foram guardados pela última vez neste site há {$a} atrás.';
$string['pleaseconfirm'] = 'Por favor, verifique e confirme que não tem qualquer trabalho por guardar.';
$string['pluginname'] = 'Regra de acesso baseada em tentativas offline';
$string['privacy:metadata'] = 'O módulo Regra de acesso baseada em tentativas offline não armazena quaisquer dados pessoais.';
