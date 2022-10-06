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
 * Strings for component 'portfolio_mahara', language 'gl', branch 'MOODLE_38_STABLE'
 *
 * @package   portfolio_mahara
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Activar a compatibilidade de portafolios Leap2A (require Mahara 1.3 ou superior)';
$string['err_invalidhost'] = 'Máquina MNet incorrecta';
$string['err_invalidhost_help'] = 'Este engadido está mal configurado porque apunta a unha máquina MNet incorrecta (ou eliminada). Este engadido require pares de Rede Moodle (Moodle Networking) con SSO IDP publicados, SSO_SP subscritos, e portafolios subscritos <b>e</b> publicados.';
$string['err_networkingoff'] = 'MNet está apagada';
$string['err_networkingoff_help'] = 'MNet está completamente apagado. Actíveo antes de tentar configurar este engadido. Calquera instancia deste engadido estará agochada ata que se arranxe isto, para volvelas visíbeis deberá facelo manualmente. Non poden usarse ata que faga isto.';
$string['err_nomnetauth'] = 'O engadido de autenticación MNet está desactivado.';
$string['err_nomnetauth_help'] = 'O engadido de autenticación MNet está desactivado, mais é requirido para este servizo';
$string['err_nomnethosts'] = 'Baseado en MNet';
$string['err_nomnethosts_help'] = 'Este engadido basease en pares MNet con SSO IDP publicado, SSO SP subscrito, portafolios de servizos publicados <b>e</b> subscritos, así como no engadido de autenticación MNet. Calquera instancia deste engadido foi agochado ata que se cumpran estas condicións. Posteriormente será necesario axustalos manualmente para facelos de novo visíbeis.';
$string['failedtojump'] = 'Non foi posíbel iniciar a comunicación co servidor remoto';
$string['failedtoping'] = 'Non foi posíbel iniciar a comunicación co servidor remoto: {$a}';
$string['mnethost'] = 'Máqina MNet';
$string['mnet_nofile'] = 'Non foi posíbel atopar o ficheiro no obxecto transferido - erro raro';
$string['mnet_nofilecontents'] = 'Atopouse o ficheiro no obxecto transferido, mais non foi posíbel obter o seu contido - erro raro: {$a}';
$string['mnet_noid'] = 'Non foi posíbel atopar o rexistro concordante coa transferencia para esta credencial';
$string['mnet_notoken'] = 'Non foi posíbel atopar unha credencial correspondente con esta transferencia';
$string['mnet_wronghost'] = 'A máquina remota non coincide co rexistro de transferencia para esta credencial';
$string['pf_description'] = 'Permitirlle aos usuarios remitir (push) contido de Moodle cara esta máquina<br />Subscríbase a <b>e</b> publique este servizo para permitir que os usuarios autenticados no seu sitio poidan remitir contido a {$a}<br /><ul><li><em>Dependencia</em>: Tamén ten que <strong>publicar</strong> o servizo do SSO (Provedor de identificación) en {$a}.</li><li><em>Dependencia</em>: Tamén ten que <strong>subscribirse </strong> ao servizo SSO (Provedor de servicio) en {$a}</li><li><em>Dependencia</em>: Así mesmo ten que activar o engadido de autenticación MNet.</li></ul><br />';
$string['pf_name'] = 'Servicios de portafolios';
$string['pluginname'] = 'ePortafolios Mahara';
$string['privacy:metadata'] = 'Este engadido envía datos externamente a unha conta de Mahara ligada. Non almacena datos localmente.';
$string['privacy:metadata:data'] = 'Datos persoais pasados a mediante o subsistema portafolios.';
$string['senddisallowed'] = 'Polo momento non pode transferir ficheiros a Mahara';
$string['url'] = 'URL';
