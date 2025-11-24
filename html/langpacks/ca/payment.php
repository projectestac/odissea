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
 * Strings for component 'payment', language 'ca', version '4.5'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Arxivat';
$string['accountconfignote'] = 'Les passarel·les de pagament d\'aquest compte es configuraran separadament';
$string['accountdeleteconfirm'] = 'Si aquest compte té pagaments previs, serà arxivat. Altrament les seves dades de configuració s\'esborraran de manera permanent. Segur que voleu continuar?';
$string['accountidnumber'] = 'Nombre ID';
$string['accountidnumber_help'] = 'El nombre ID s\'usa només per comprovar la correspondència del compte amb sistemes externs i no es mostra enlloc del web. Si el compte té un codi oficial, podeu introduir-lo; altrament podeu deixar el camp en blanc.';
$string['accountname'] = 'Nom del compte';
$string['accountname_help'] = 'Coom s\'identificarà aquest compte per professors o gestors que estableixin mitjans de pagament (per exemple en els connectors d\'inscripció).';
$string['accountnotavailable'] = 'No disponible';
$string['createaccount'] = 'Crea un compte de pagaments';
$string['deleteorarchive'] = 'Esborra o arxiva';
$string['editpaymentaccount'] = 'Edita el compte de pagaments';
$string['eventaccountcreated'] = 'S\'ha creat el compte de pagaments';
$string['eventaccountdeleted'] = 'S\'ha esborrat el compte de pagaments';
$string['eventaccountupdated'] = 'S\'ha actualitzat el compte de pagaments';
$string['feeincludesurcharge'] = '{$a->fee} (inclou un {$a->surcharge}% de recàrrec per usar aquest tipus de pagament)';
$string['gatewaycannotbeenabled'] = 'No es pot habilitar la passarel·la de pagament perquè la configuració és incompleta.';
$string['gatewaydisabled'] = 'Inhabilitat';
$string['gatewayenabled'] = 'Habilitat';
$string['gatewaynotfound'] = 'No s\'ha trobat la passarel·la';
$string['gotomanageplugins'] = 'Habilita i inhabilita passarel·les de pagament i estableix recàrrecs via {$a}.';
$string['gotopaymentaccounts'] = 'Podeu crear múltiples comptes de pagament usant qualsevol de les passarel·les de la pàgina {$a}.';
$string['hidearchived'] = 'Oculta els arxivats.';
$string['noaccountsavilable'] = 'No hi ha cap compte de pagaments disponible.';
$string['nocurrencysupported'] = 'No és possible efectuar pagaments en cap moneda. Si us plau, assegureu-vos que s\'hagi activat almenys una passarel·la de pagament.';
$string['nogateway'] = 'No hi ha cap passarel·la de pagament usable.';
$string['nogatewayselected'] = 'Cal que escolliu primer una passarel·la de pagament.';
$string['paymentaccount'] = 'Compte de pagaments';
$string['paymentaccounts'] = 'Comptes de pagaments';
$string['paymentaccountsexplained'] = 'Crea un o múltiples comptes de pagament per aquest lloc. Cada compte inclou configuració per les passarel·les de pagament disponibles. La persona que configura els pagaments del lloc (per exemple, pagaments per les inscripcions als cursos) podrà escollir entre els diversos comptes disponibles.';
$string['payments'] = 'Pagaments';
$string['privacy:metadata:database:payments'] = 'Informació sobre els pagaments';
$string['privacy:metadata:database:payments:amount'] = 'El total del pagament';
$string['privacy:metadata:database:payments:currency'] = 'La moneda del pagament';
$string['privacy:metadata:database:payments:gateway'] = 'La passarel·la de pagament que s\'utilitza per a fer el pagament';
$string['privacy:metadata:database:payments:timecreated'] = 'L\'hora en que s\'ha fet el pagament';
$string['privacy:metadata:database:payments:timemodified'] = 'L\'hora en què es va actualitzar per darrera vegada el registre del pagament.';
$string['privacy:metadata:database:payments:userid'] = 'L\'usuari que ha efectuat el pagament.';
$string['restoreaccount'] = 'Restaura';
$string['selectpaymenttype'] = 'Seleccioneu el tipus de pagament';
$string['showarchived'] = 'Mostra els arxivats';
$string['supportedcurrencies'] = 'Divises acceptades';
$string['surcharge'] = 'Recàrrec (percentatge)';
$string['surcharge_desc'] = 'El recàrrec és el percentatge addicional cobrat als usuaris que escullen pagar a través d\'aquesta passarel·la.';
