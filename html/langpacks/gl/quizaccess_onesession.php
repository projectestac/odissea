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
 * Strings for component 'quizaccess_onesession', language 'gl', version '4.1'.
 *
 * @package     quizaccess_onesession
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anothersession'] = 'Tenta acceder ao intento de cuestionario dende un computador, dispositivo ou navegador distinto do que usou para iniciar o cuestionario. Se pechou accidentalmente o seu navegador, por favor, póñase en contacto co profesorado.';
$string['eventattemptblocked'] = 'O intento do alumno de continuar co intento de cuestionario usando outro dispositivo foi bloqueado';
$string['eventattemptunlocked'] = 'Alumno foi autorizado a continuar o intento de cuestionario usando outro dispositivo';
$string['onesession'] = 'Bloquear conexións simultáneas';
$string['onesession:unlockattempt'] = 'Desbloquear o intento de cuestionario';
$string['onesession_help'] = 'Se está activado, os usuarios poden continuar un intento de cuestionario só na mesma sesión do navegador. Calquera tentativa de abrir o mesmo intento de cuestionario usando outro computador, dispositivo ou navegador será bloqueado. Isto pode ser útil para estar seguro de que ninguén axuda a un alumno abrindo o mesmo intento de proba noutro computador.';
$string['pluginname'] = 'Regra de bloqueo de sesións simultáneas nun cuestionario';
$string['privacy:metadata'] = 'O complemento almacena o resumo criptográfico da cadea utilizada para identificar a sesión do dispositivo cliente. Aínda que a cadea orixinal contén o enderezo IP do cliente e a cabeceira do axente de usuario enviada polo navegador do cliente, o resumo criptográfico non permite extraer esta información. O resumo criptográfico elimínase automaticamente inmediatamente após o final da sesión do cuestionario.';
$string['studentinfo'] = 'Atención! Está prohibido cambiar de dispositivo mentres se intenta este cuestionario. Teña en conta que após o inicio do cuestionario calquera intento de conexión este cuestionario usando outros computadores, dispositivos e navegadores será bloqueado. Non peche a xanela do navegador ata o final do intento, se non, non poderá completar este cuestionario.';
$string['unlockthisattempt'] = 'Permitir que o alumno continúe este intento usando un dispositivo diferente';
$string['unlockthisattempt_header'] = 'Bloquear conexións simultáneas';
$string['whitelist'] = 'Redes sen comprobación IP';
$string['whitelist_desc'] = 'Esta opción pretende rebaixar os falsos positivos cando os usuarios toman os cuestionarios a través das redes móbiles, onde se pode cambiar o IP durante o cuestionario. Non é necesario na maioría das situacións. Pode fornecer unha lista separada por comas de subredes (por exemplo, 88.0.0.0/8, 77.77.0.0/16). Se un enderezo IP está en tal rede, non vai ser comprobado. Para desactivar totalmente a comprobación de IP, pode definir o valor para 0.0.0.0/0.';
