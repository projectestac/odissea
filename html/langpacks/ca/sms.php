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
 * Strings for component 'sms', language 'ca', version '4.5'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Accions';
$string['countrycode'] = 'Codi de país per defecte';
$string['countrycode_help'] = 'Codi de país que s\'afegirà als números de telèfon si els usuaris no introdueixen el seu propi codi de país. Introduïu el número sense el símbol «+» inicial.';
$string['createnewgateway'] = 'Crea una passarel·la nova SMS';
$string['delete_sms_gateway'] = 'Esborra la passarel·la SMS';
$string['delete_sms_gateway_confirmation'] = 'Això esborrarà la passarel·la SMS {$a->gateway}.';
$string['edit_sms_gateway'] = 'Edita la passarel·la SMS de {$a->gateway}';
$string['gateway'] = 'Passarel·la';
$string['gateway_name'] = 'Nom de la passarel·la';
$string['manage_sms_gateways'] = 'Gestiona les passarel·les SMS';
$string['phonenumbernotvalid'] = 'No s\'ha reconegut el format del número de telèfon: {$a->message}';
$string['privacy:metadata:sms_messages'] = 'Emmagatzema els missatges enviats per SMS';
$string['privacy:metadata:sms_messages:content'] = 'El text del missatge';
$string['privacy:metadata:sms_messages:id'] = 'L\'identificador del missatge';
$string['privacy:metadata:sms_messages:recipient'] = 'El número de telèfon al qual es va enviar el missatge';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'L\'usuari a qui es va enviar el missatge, si es coneix';
$string['privacy:metadata:sms_messages:status'] = 'L\'estat del missatge';
$string['privacy:metadata:sms_messages:timecreated'] = 'L\'hora en què es va crear el missatge';
$string['privacy:sms:sensitive_not_shown'] = 'El contingut d\'aquest missatge no s\'ha emmagatzemat perquè s\'ha indicat que conté contingut sensible.';
$string['select_sms_gateways'] = 'Proveïdor de la passarel·la SMS';
$string['sms'] = 'SMS';
$string['sms_gateway_delete_failed'] = 'No es pot esborrar la passarel·la SMS {$a->gateway}. La passarel·la està en ús o hi ha un problema amb la base de dades. Comproveu si la passarel·la està activa o poseu-vos en contacte amb l\'administrador de la base de dades per obtenir ajuda.';
$string['sms_gateway_deleted'] = 'S\'ha esborrat la passarel·la SMS {$a->gateway}';
$string['sms_gateway_disable_failed'] = 'No es pot desactivar la passarel·la SMS. La passarel·la està en ús o hi ha un problema amb la base de dades. Comproveu si la passarel·la està activa o poseu-vos en contacte amb l\'administrador de la base de dades per obtenir ajuda.';
$string['sms_gateways'] = 'Passarel·les SMS';
$string['sms_gateways_info'] = 'Crea i gestiona passarel·les SMS per enviar missatges SMS des del vostre lloc web.';
$string['status:gateway_failed'] = 'La passarel·la no ha pogut enviar el missatge';
$string['status:gateway_not_available'] = 'La passarel·la no està disponible per enviar el missatge';
$string['status:gateway_queued'] = 'El missatge s\'ha posat a la cua per ser enviat per la passarel·la';
$string['status:gateway_rejected'] = 'La passarel·la ha rebutjat el missatge';
$string['status:gateway_sent'] = 'La passarel·la ha enviat el missatge';
$string['status:message_over_size'] = 'El missatge és massa gran per ser enviat per la passarel·la';
$string['status:unknown'] = 'No s\'ha pogut determinar l\'estat del missatge';
