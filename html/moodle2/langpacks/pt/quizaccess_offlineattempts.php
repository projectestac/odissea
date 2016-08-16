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
 * Strings for component 'quizaccess_offlineattempts', language 'pt', branch 'MOODLE_31_STABLE'
 *
 * @package   quizaccess_offlineattempts
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowofflineattempts'] = 'Permitir responder ao teste em modo offline na aplicação Moodle Mobile';
$string['allowofflineattempts_help'] = 'Se selecionar esta opção, o utilizador será capaz de descarregar o teste para realizar uma tentativa em modo offline, através da aplicação Moodle Mobile. Se o utilizador descarregar um teste para realizar em modo offline, será criada uma nova tentativa deste. Esta tentativa estará vazia até que o utilizador sincronize os resultados desta na aplicação Moodle Mobile.';
$string['confirmdatasaved'] = 'Confirmo que não tenho trabalhos não gravados nos meus dispositivos móveis antes de continuar esta tentativa.';
$string['mobileapp'] = 'Aplicação Moodle Mobile';
$string['offlineattemptserror'] = 'Testes em modo offline não são compatíveis com testes que estejam configurados com temporizadores, restrições de acesso por senha ou subrede, assim como testes que utilizem modos de comportamento de perguntas diferentes do \'feedback diferido\' com ou sem ABGC';
$string['offlinedatamessage'] = 'Tem realizado esta tentativa, num dispositivo móvel, e os dados foram guardados pela última vez neste site há {$a} atrás.';
$string['pleaseconfirm'] = 'Por favor, confirme que não tem trabalhos por gravar nos seus dispositivos móveis';
$string['pluginname'] = 'Regra de acesso a tentativas offline';
