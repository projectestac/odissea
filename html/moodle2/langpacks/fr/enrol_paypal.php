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
 * Strings for component 'enrol_paypal', language 'fr', branch 'MOODLE_34_STABLE'
 *
 * @package   enrol_paypal
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Attribuer rôle';
$string['businessemail'] = 'Courriel professionnel PayPal';
$string['businessemail_desc'] = 'L\'adresse de courriel de votre compte professionnel PayPal';
$string['cost'] = 'Coût d\'inscription';
$string['costerror'] = 'Le coût d\'inscription n\'est pas un nombre';
$string['costorkey'] = 'Veuillez choisir l\'une des méthodes d\'inscription suivantes.';
$string['currency'] = 'Devise';
$string['defaultrole'] = 'Attribution de rôle par défaut';
$string['defaultrole_desc'] = 'Sélectionner le rôle à attribuer aux utilisateurs s\'inscrivant par PayPal';
$string['enrolenddate'] = 'Date de fin';
$string['enrolenddate_help'] = 'Si ce réglage est activé, les utilisateurs seront inscrits jusqu\'à cette date seulement.';
$string['enrolenddaterror'] = 'La date de fin d\'inscription ne peut pas être antérieure à la date de début';
$string['enrolperiod'] = 'Durée d\'inscription';
$string['enrolperiod_desc'] = 'Durée par défaut de la période durant laquelle l\'inscription est effective. Si 0 est indiqué, la durée sera illimitée par défaut.';
$string['enrolperiod_help'] = 'Temps durant lequel l\'inscription est valable, à compter de l\'inscription de l\'utilisateur. Si l\'option est désactivée, la durée est illimitée.';
$string['enrolstartdate'] = 'Date de début';
$string['enrolstartdate_help'] = 'Si ce réglage est activé, les utilisateurs seront inscrits à partir de cette date seulement.';
$string['errdisabled'] = 'Le plugin d\'inscription PayPal est désactivé et ne gère pas de notification de paiement.';
$string['erripninvalid'] = 'La notification de paiement instantané n\'a pas été vérifiée par PayPal.';
$string['errpaypalconnect'] = 'Impossible de se connecter à {$a->url} pour vérifier la notification de paiement instantané : {$a->result}';
$string['expiredaction'] = 'Action à l\'échéance de l\'inscription';
$string['expiredaction_help'] = 'Sélectionnez une action à effectuer lorsque l\'inscription du participant arrive à échéance. Veuillez noter que certaines données et réglages de l\'utilisateur sont supprimées lors de la désinscription d\'un cours.';
$string['mailadmins'] = 'Notifier les administrateurs';
$string['mailstudents'] = 'Notifier les étudiants';
$string['mailteachers'] = 'Notifier les enseignants';
$string['messageprovider:paypal_enrolment'] = 'Messages de l\'inscription PayPal';
$string['nocost'] = 'Aucun prix n\'est défini pour s\'inscrire à ce cours !';
$string['paypalaccepted'] = 'Paiements par PayPal acceptés';
$string['paypal:config'] = 'Configurer les instances d\'inscription PayPal';
$string['paypal:manage'] = 'Gérer les utilisateurs inscrits';
$string['paypal:unenrol'] = 'Désinscrire des utilisateurs d\'un cours';
$string['paypal:unenrolself'] = 'Se désinscrire d\'un cours';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'Le module PayPal permet de mettre sur pied des cours payants. Si le prix d\'un cours est zéro, l\'entrée du cours est libre. Il est possible de définir un prix par défaut pour tous les cours du site, ainsi qu\'un prix pour chaque cours. Le prix défini dans un cours a priorité sur le prix par défaut.';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'Informations sur les transactions PayPal liées aux inscriptions PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'Adresse de courriel ou identifiant de compte PayPal du destinataire du paiement, c\'est-à-dire du vendeur.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'L\'identifiant du cours vendu.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'L\'identifiant de l\'instance d\'inscription dans le cours.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'Le nom complet du cours pour lequel l\'inscription a été vendue.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'Une annotation qui a été saisie par l\'acheteur dans le champ de remarque de paiement du site web PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'Nom complet de l\'acheteur.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'En cas de remboursement ou d\'annulation, l\'identifiant de la transaction originale.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'Le statut du paiement.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'Si le paiement a été financé par un eCheck (echeck), par le crédit PayPal, par carte de crédit ou par transfert instantané (instant).';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'La raison du statut en attente du paiement, cas échéant.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'La raison du statut d\'annulation, de remboursement ou de refus du paiement, cas échéant.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'L\'adresse de courriel principale du destinataire du paiement, c\'est-à-dire du vendeur.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'L\'identifiant unique du compte PayPal du destinataire du paiement, c\'est-à-dire du vendeur.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'Le montant des taxes ajoutées au paiement.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'La date et l\'heure de la notification du paiement à Moodle par PayPal.';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'Le numéro d\'identification de la transaction originale du vendeur pour le paiement par l\'acheteur, contre qui le cas a été enregistré';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'L\'identifiant de l\'utilisateur qui a acheté l\'inscription au cours.';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'Le plugin d\'inscription PayPal transmet des données personnelles de Moodle au site web de PayPal.';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'Adresse de l\'utilisateur qui achète le cours.';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'La localité de l\'utilisateur qui achète le cours.';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'Pays de l\'utilisateur qui achète le cours.';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'Une liste des identifiants de l\'utilisateur (l\'acheteur), du cours et de l\'instance d\'inscription, séparés par des tirets.';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'L\'adresse de courriel de l\'utilisateur qui achète le cours.';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'Le prénom de l\'utilisateur qui achète le cours.';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'Le nom de l\'utilisateur qui achète le cours.';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'Le nom complet de l\'utilisateur qui achète le cours.';
$string['sendpaymentbutton'] = 'Envoyer un paiement avec PayPal';
$string['status'] = 'Permettre les inscriptions PayPal';
$string['status_desc'] = 'Permettre par défaut aux utilisateurs d\'utiliser PayPal pour s\'inscrire à un cours';
$string['transactions'] = 'Transactions PayPal';
$string['unenrolselfconfirm'] = 'Voulez-vous vraiment vous désinscrire du cours « {$a} »?';
