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
 * Strings for component 'portfolio_mahara', language 'es', branch 'MOODLE_38_STABLE'
 *
 * @package   portfolio_mahara
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Habilitar admisión de portafolio Leap2A (requiere Mahara 1.3 o superior)';
$string['err_invalidhost'] = 'Cliente MNet no válido';
$string['err_invalidhost_help'] = 'Este plugin está mal configurado porque apunta a un host MNet inválido (o borrado). Este plugin requiere pares de Red Moodle (Moodle Networking) con SSO IDP publicados, SSO_SP suscrito, y portafolio suscrito <b>y</b> publicado.';
$string['err_networkingoff'] = 'MNet no está operativa';
$string['err_networkingoff_help'] = 'La autenticación MNet está actualmente deshabilitada. Por favor habilítela antes de intentar configurar este plugin. Cualquier instancia de este plugin se ha ocultado hasta que MNet sea habilitado. Necesitarán ser configuradas después manualmente para ser visibles.';
$string['err_nomnetauth'] = 'La extensión de identificación MNet está deshabilitada';
$string['err_nomnetauth_help'] = 'La extensión de identificación MNet está deshabilitado, pero es necesario para este servicio.';
$string['err_nomnethosts'] = 'Confía en MNet';
$string['err_nomnethosts_help'] = 'Esta extensión se basa en pares MNet con SSO IDP publicado, SSO SP suscrito, portafolio de servicios publicados <b> y </ b> suscritos, así como la extensión de identificación  MNet. Cualquier ejemplo de este conector se ha ocultado hasta que se cumplan estas condiciones. Posteriormente será necesario ajustarlos manualmente para hacerlos de nuevo visibles.';
$string['failedtojump'] = 'No se ha podido iniciar comunicación con el servidor remoto';
$string['failedtoping'] = 'No se ha podido iniciar comunicación con el servidor remoto {$a}';
$string['mnethost'] = 'Host MNet';
$string['mnet_nofile'] = 'No pudo encontrar el archivo en el objeto transferido - error raro';
$string['mnet_nofilecontents'] = 'Se encontró el archivo en el objeto transferido, pero no pudo obtener su contenido - error raro: {$a}';
$string['mnet_noid'] = 'No pudo encontrar el registro concordante con la transferencia para esta ficha (token)';
$string['mnet_notoken'] = 'No se ha encontrado la ficha correspondiente a esta transferencia';
$string['mnet_wronghost'] = 'El host remoto no se corresponde con el registro de transferencia para esta ficha';
$string['pf_description'] = 'Le permite a los usuarios enviar contenido de Moodle hacia este host<br />Subscríbase a <b>y</b> publique este servicio para permitir que los usuarios autenticados en su sitio puedan enviar contenido a  {$a}<br /><ul><li><em>Dependencia</em>: también debe de <strong>publicar</strong> el servicio del SSO (Proveedor de Identificación) a {$a}.</li><li><em>Dependencia</em>: también debe de <strong>subscribirse </strong> al servicio SSO (Proveedor de Servicio) en {$a}</li><li><em>Dependencia</em>: también debe de habilitar el plugin de autenticación MNet.</li></ul><br />';
$string['pf_name'] = 'Servicios de portafolio';
$string['pluginname'] = 'Mahara ePortfolio';
$string['privacy:metadata'] = 'Este plugin envía datos externamente hacia una aplicación enlazada Mahara. No almacena datos localmente.';
$string['privacy:metadata:data'] = 'Datos personales pasados a través del subsistema de portafolio.';
$string['senddisallowed'] = 'No se pueden transferir archivos a Mahara en este momento';
$string['url'] = 'URL';
