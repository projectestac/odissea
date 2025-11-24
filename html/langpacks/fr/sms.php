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
 * Strings for component 'sms', language 'fr', version '4.5'.
 *
 * @package     sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['countrycode'] = 'Code du pays par défaut';
$string['countrycode_help'] = 'Le code du pays à ajouter aux numéros de téléphone si les utilisateurs ne le saisissent pas. Saisir le nombre sans le symbole « + » initial.';
$string['createnewgateway'] = 'Créer une nouvelle passerelle SMS';
$string['delete_sms_gateway'] = 'Supprimer la passerelle SMS';
$string['delete_sms_gateway_confirmation'] = 'Cette action supprimera la passerelle SMS {$a->gateway}';
$string['edit_sms_gateway'] = 'Modifier la passerelle SMS {$a->gateway}';
$string['gateway'] = 'Passerelle';
$string['gateway_name'] = 'Nom de la passerelle';
$string['manage_sms_gateways'] = 'Gérer les passerelles SMS';
$string['phonenumbernotvalid'] = 'Format du numéro de téléphone non reconnu : {$a->message}';
$string['privacy:metadata:sms_messages'] = 'Enregistre les messages envoyés par SMS';
$string['privacy:metadata:sms_messages:content'] = 'Le texte du message';
$string['privacy:metadata:sms_messages:id'] = 'L’ID du message';
$string['privacy:metadata:sms_messages:recipient'] = 'Le numéro de téléphone auquel le message a été envoyé';
$string['privacy:metadata:sms_messages:recipientuserid'] = 'L’utilisateur auquel le message a été envoyé, si connu';
$string['privacy:metadata:sms_messages:status'] = 'Le statut du message';
$string['privacy:metadata:sms_messages:timecreated'] = 'L’horodatage de la création du message';
$string['privacy:sms:sensitive_not_shown'] = 'Le contenu de ce message n’a pas été enregistré, car il a été signalé comme comportant un contenu sensible.';
$string['select_sms_gateways'] = 'Fournisseur de passerelle SMS';
$string['sms'] = 'SMS';
$string['sms_gateway_delete_failed'] = 'Impossible de supprimer la passerelle SMS {$a->gateway}. La passerelle est en cours d’utilisation ou il y a un problème de base de données. Vérifiez si la passerelle est actuellement utilisée ou contactez l’administrateur de la base de données.';
$string['sms_gateway_deleted'] = 'Passerelle SMS {$a->gateway} supprimée';
$string['sms_gateway_disable_failed'] = 'Impossible de désactiver la passerelle SMS. La passerelle est en cours d’utilisation ou il y a un problème avec la base de données. Vérifiez si la passerelle est active ou contacter l’administrateur de la base de données.';
$string['sms_gateways'] = 'Passerelles SMS';
$string['sms_gateways_info'] = 'Créer et gérer les passerelles SMS pour envoyer des SMS depuis votre site.';
$string['status:gateway_failed'] = 'La passerelle n’a pas réussi à envoyer le message';
$string['status:gateway_not_available'] = 'La passerelle n’est pas disponible pour envoyer le message';
$string['status:gateway_queued'] = 'Le message est dans la file d’attente d’envoi par la passerelle';
$string['status:gateway_rejected'] = 'La passerelle a rejeté le message';
$string['status:gateway_sent'] = 'La passerelle a envoyé le message';
$string['status:message_over_size'] = 'Le message est trop long pour être envoyé par la passerelle';
$string['status:unknown'] = 'Impossible de déterminer le statut du message';
