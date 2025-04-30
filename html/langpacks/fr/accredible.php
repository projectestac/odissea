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
 * Strings for component 'accredible', language 'fr', version '4.4'.
 *
 * @package     accredible
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accredible:addinstance'] = 'Ajouter une instance de certificat/badge';
$string['accredible:manage'] = 'Gérer une instance de certificat/badge';
$string['accredible:student'] = 'Récupérer un certificat ou un badge';
$string['accredible:view'] = 'Consulter un certificat ou un badge';
$string['accrediblegroup'] = 'Groupe Accredible';
$string['achievementid'] = 'Identifiant d’achèvement / nom de la cohorte (doit être unique)';
$string['activitygroupdescription'] = 'Les groupes d’identifiants doivent avoir été créés dans le <a href="{$a}" target="_blank">Accredible Dashboard</a> avant que les identifiants puissent être délivrés. Si aucun n’apparaît, vérifiez votre clé API pour vous assurer que l’intégration est correctement configurée.';
$string['activityname'] = 'Nom de l’activité';
$string['additionalactivitiesone'] = 'Avertissement : vous allez ajouter plus qu’une activité à un cours.<br/>Ces activités sont visibles par les étudiants, donc assurez-vous de leurs donner des noms différents.';
$string['additionalactivitiesthree'] = 'Le nom qui apparaîtra sur le certificat.';
$string['additionalactivitiestwo'] = 'Les certificats/badges seront listé sur la page de l’activité s’ils ont été délivrés avec cet identifiant de réussite.';
$string['apikeyhelp'] = 'Entrez votre clé API pour accredible.com';
$string['apikeylabel'] = 'Clé API';
$string['autoissueheader'] = 'Critère d’émission automatique';
$string['certificatename'] = 'Nom du certificat/du badge';
$string['certificateurl'] = 'URL du certificat/badge';
$string['chooseexam'] = 'Choisir le test final';
$string['completionissuecheckbox'] = 'Oui, émettre lorsque le travail dans le cours est achevé';
$string['completionissueheader'] = 'Critère d’émission automatique : à l’achèvement du cours';
$string['dashboardlink'] = 'Lien vers Accredible sur le tableau de bord';
$string['dashboardlinktext'] = 'Pour supprimer ou modifier les informations d’identification, connectez-vous sur le <a href="https://accredible.com/issuer/login" target="_blank">tableau de bord</a>';
$string['datecreated'] = 'Date de création';
$string['description'] = 'Description';
$string['emptygradeattributekeyname'] = 'La note finale du cours sera associée à l’attribut personnalisé Accredible. Si vous n’avez pas encore créé d’attribut personnalisé, vous pouvez le faire dans <a href="{$a}" target="_blank">Accredible Platform</a>.';
$string['euhelp'] = 'Veuillez sélectionner si vous souhaitez héberger des données dans l’UE (Francfort) plutôt qu’aux États-Unis.';
$string['eulabel'] = 'Serveur informatique européen (Francfort)';
$string['eventcertificatecreated'] = 'Une référence a été envoyée à Accredible';
$string['gotodashboard'] = 'Pour mettre à jour l’apparence de vos badges et certificats, vous devez vous rendre sur : <a href="https://dashboard.accredible.com" target="_blank">https://dashboard.accredible.com</a>';
$string['gradeattributegradeitemselect'] = 'Choisir la note Moodle à inclure :';
$string['gradeattributekeynameselect'] = 'Choisir un attribut de conception Accredible :';
$string['gradeissueheader'] = 'Critère d’émission automatique : en fonction du résultat d’un questionnaire';
$string['groupselect'] = 'Groupe';
$string['id'] = 'Identifiant';
$string['includegradeattributecheckbox'] = 'Oui, inclure la note dans le certificat';
$string['includegradeattributedescription'] = 'Inclure la note de l’étudiant dans le certificat';
$string['indexheader'] = 'Tous les certificats/badges pour {$a}';
$string['issued'] = 'Publié';
$string['manualheader'] = 'Publier manuellement un certificat / un badge';
$string['modulename'] = 'Certificats et badges Accredible';
$string['modulename_help'] = 'Le module d’activités Accredible certificat et badge vous permet d’émettre pour vos étudiants des certificats ou des badges depuis le service d’accredible.com.

Ajoutez cette activité à chaque endroit où vous souhaitez que vos étudiants puissent voir leurs certificats ou badges.';
$string['modulename_link'] = 'mod/accredible/view';
$string['modulenameplural'] = 'Attribuer des certificats/badges';
$string['nocertificates'] = 'Il n’y a aucun certificat/badge';
$string['nouserswarning'] = 'Vous devez choisir un groupe Accredible pour voir la liste des utilisateurs.';
$string['overview'] = 'Vue d’ensemble';
$string['passinggrade'] = 'Pourcentage de réussite pour considérer le cours comme achevé (%)';
$string['pluginadministration'] = 'Certificats Accredible/Administration de badges';
$string['pluginname'] = 'Accredible Certificats & badges';
$string['privacy:metadata:accredible'] = 'Pour s’intégrer dans Accredible, les données des utilisateurs doivent être échangées avec ce service.';
$string['privacy:metadata:accredible:email'] = 'Votre courriel est envoyé à Accredible pour l’émission d’un justificatif d’identité.';
$string['privacy:metadata:accredible:fullname'] = 'Votre nom complet est envoyé à Accredible pour l’émission d’une accréditation.';
$string['privacy:metadata:accredible:quizgrade'] = 'Votre note pour le test peut être communiquée à Accredible afin d’obtenir une référence.';
$string['recipient'] = 'Destinataire';
$string['templatename'] = 'Nom de la cohorte (depuis le tableau de bord)';
$string['unissueddescription'] = 'Ces utilisateurs ont répondus aux critères d’obtention de ce certificat mais ne l’ont pas encore reçu. Sélectionnez ceux auxquels vous désirez émettre les certificats.';
$string['unissuedheader'] = 'Certificats/badges non émis';
$string['usestemplatesdescription'] = 'Assurez-vous d’avoir une cohorte sur le tableau de bord avec le même nom que votre identifiant de réussite.';
$string['viewheader'] = 'Certificats et badges pour {$a}';
$string['viewimgcomplete'] = 'Cliquer pour consulter votre certificat ou badge';
$string['viewimgincomplete'] = 'Le cours n’est pas encore terminé';
$string['viewsubheader'] = 'Identifiant du groupe : {$a}';
$string['viewsubheaderold'] = 'Identifiant de réussite : {$a}';
