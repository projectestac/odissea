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
 * Strings for component 'payment', language 'fr', version '4.4'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Archivé';
$string['accountconfignote'] = 'Les passerelles de paiment pour ce compte seront configurées séparément';
$string['accountdeleteconfirm'] = 'Si ce compte a des paiements antérieurs, il sera archivé, sinon ses données de configuration seront supprimées de manière permanente. Voulez-vous vraiment continuer ?';
$string['accountidnumber'] = 'Numéro d’identification';
$string['accountidnumber_help'] = 'Le numéro d’identification n’est utilisé que lors de l’appariement du compte avec des systèmes externes et n’est affiché nulle part sur le site. Si le compte a un nom de code officiel, celui-ci peut être saisi, sinon le champ peut être laissé vide.';
$string['accountname'] = 'Nom de compte';
$string['accountname_help'] = 'Le nom sous lequel apparaîtra ce compte pour les enseignants ou les gestionnaires qui configurent des paiements (par exemple dans le plugin d’inscription au cours).';
$string['accountnotavailable'] = 'Non disponible';
$string['createaccount'] = 'Créer un compte de paiement';
$string['deleteorarchive'] = 'Supprimer ou archiver';
$string['editpaymentaccount'] = 'Modifier un compte de paiement';
$string['eventaccountcreated'] = 'Compte de paiement créé';
$string['eventaccountdeleted'] = 'Compte de paiement supprimé';
$string['eventaccountupdated'] = 'Compte de paiement modifié';
$string['feeincludesurcharge'] = '{$a->fee} (inclut {$a->surcharge}% de supplément pour l’utilisation de ce type de paiement)';
$string['gatewaycannotbeenabled'] = 'La passerelle de paiement ne peut pas être activée, car sa configuration est incomplète.';
$string['gatewaydisabled'] = 'Désactivé';
$string['gatewayenabled'] = 'Activé';
$string['gatewaynotfound'] = 'Passerelle non trouvé';
$string['gotomanageplugins'] = 'Activer et désactiver des passerelles de paiement et fixer des suppléments via {$a}';
$string['gotopaymentaccounts'] = 'Il est possible de créer plusieurs comptes de paiement avec chacune de ces passerelles, sur la page {$a}';
$string['hidearchived'] = 'Cacher les comptes archivés';
$string['noaccountsavilable'] = 'Aucun compte de paiement n’est disponible.';
$string['nocurrencysupported'] = 'Aucun paiement n’est possible dans aucune devise. Veuillez vous assurer qu’au moins une passerelle de paiement est activée.';
$string['nogateway'] = 'Il n’y a pas de passerelle de paiement utilisable.';
$string['nogatewayselected'] = 'Vous devez d’abord sélectionner une passerelle de paiement.';
$string['paymentaccount'] = 'Compte de paiement';
$string['paymentaccounts'] = 'Comptes de paiement';
$string['paymentaccountsexplained'] = 'Créer un ou plusieurs comptes de paiement pour ce site. Chaque compte inclut une configuration pour les passerelles de paiement disponibles. La personne qui configure les paiements sur le site (par exemple des paiements pour l’inscription à des cours) pourra choisir parmi les comptes disponibles.';
$string['payments'] = 'Paiements';
$string['privacy:metadata:database:payments'] = 'Information sur les paiements.';
$string['privacy:metadata:database:payments:amount'] = 'Le montant du paiement.';
$string['privacy:metadata:database:payments:currency'] = 'La devise du paiement.';
$string['privacy:metadata:database:payments:gateway'] = 'La passerelle de paiement utilisée pour le paiement.';
$string['privacy:metadata:database:payments:timecreated'] = 'L’horodatage du paiement.';
$string['privacy:metadata:database:payments:timemodified'] = 'L’horodatage de la dernière modification de l’enregistrement du paiement.';
$string['privacy:metadata:database:payments:userid'] = 'L’utilisateur qui a fait le paiement.';
$string['restoreaccount'] = 'Restaurer';
$string['selectpaymenttype'] = 'Sélectionner le type de paiement';
$string['showarchived'] = 'Montrer les comptes archivés';
$string['supportedcurrencies'] = 'Devises prises en charge';
$string['surcharge'] = 'Supplément (pourcentage)';
$string['surcharge_desc'] = 'Le supplément est un montant supplémentaire à payer par les utilisateurs qui choisissent cette passerelle de paiement.';
