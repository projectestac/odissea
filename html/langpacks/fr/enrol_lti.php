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
 * Strings for component 'enrol_lti', language 'fr', version '3.11'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'Remarque : il est recommandé d\'activer le réglage « Autoriser l\'intégration dans un cadre » dans l\'administration de la plateforme, afin que les outils puissent d\'afficher dans un cadre plutôt que dans une nouvelle fenêtre.';
$string['authltimustbeenabled'] = 'Remarque : ce plugin nécessite l\'activation du plugin d\'authentification LTI.';
$string['cartridgeurl'] = 'URL de la cartouche';
$string['couldnotestablishproxy'] = 'Impossible d\'établir un proxy avec le client.';
$string['enrolenddate'] = 'Date de fin';
$string['enrolenddate_help'] = 'Si ce réglage est indiqué, les utilisateurs peuvent accéder seulement jusqu\'à cette date.';
$string['enrolenddateerror'] = 'La date de fin d\'inscription ne peut pas être antérieure à la date de début.';
$string['enrolisdisabled'] = 'Le plugin « Publication comme outil LTI » est désactivé.';
$string['enrolmentfinished'] = 'Inscription échue.';
$string['enrolmentnotstarted'] = 'L\'inscription n\'a pas commencé.';
$string['enrolperiod'] = 'Durée d\'\'inscription';
$string['enrolperiod_help'] = 'La durée pendant laquelle l\'inscription est valide, à compter du moment où l\'utilisateur s\'inscrit depuis le système distant. Si aucune valeur n\'est donnée, la durée est illimitée.';
$string['enrolstartdate'] = 'Date de début';
$string['enrolstartdate_help'] = 'Si ce réglage est indiqué, les utilisateurs peuvent accéder seulement à partir de cette date.';
$string['failedrequest'] = 'Échec de la requête. Raison : {$a->reason}';
$string['frameembeddingnotenabled'] = 'Pour accéder à l\'outil, veuillez cliquer sur le lien ci-dessous.';
$string['gradesync'] = 'Synchronisation des notes';
$string['gradesync_help'] = 'Ce réglage détermine si les notes de l\'outil sont envoyées au système distant (client LTI).';
$string['incorrecttoken'] = 'Le jeton est incorrect. Veuillez vérifier l\'URL et essayer à nouveau, ou contacter l\'administrateur de cet outil.';
$string['invalidrequest'] = 'Requête non valide';
$string['invalidtoolconsumer'] = 'Outil client non valide.';
$string['launchdetails'] = 'Détails du lancement';
$string['launchdetails_help'] = 'Une URL de cartouche (aussi appelée URL de configuration) ainsi qu\'un secret ou d\'une URL de lancement sont requis pour configurer l\'outil.';
$string['launchurl'] = 'URL de lancement';
$string['lti:config'] = 'Configurer les instances de publication comme outil LTI';
$string['lti:unenrol'] = 'Désinscrire du cours les utilisateurs';
$string['maxenrolled'] = 'Nombre maximum d\'utilisateurs inscrits';
$string['maxenrolled_help'] = 'Le nombre maximum d\'utilisateurs distants pouvant accéder à l\'outil. Une valeur nulle permet un nombre illimité d\'utilisateurs inscrits.';
$string['maxenrolledreached'] = 'Le nombre maximum d\'utilisateurs distants pouvant accéder à l\'outil a été atteint.';
$string['membersync'] = 'Synchronisation des utilisateurs';
$string['membersync_help'] = 'Ce réglage détermine si une tâche programmée synchronise les utilisateurs inscrits dans le système distant avec les inscriptions à ce cours, créant si nécessaire un compte pour chaque utilisateur distant, et l\'inscrivant ou le désinscrivant au cours.

Si ce réglage est désactivé, un compte sera créé automatiquement pour les utilisateurs distants et ce compte sera inscrit au cours au moment où ils accèdent à l\'outil.';
$string['membersyncmode'] = 'Mode de synchronisation des utilisateurs';
$string['membersyncmode_help'] = 'Ce réglage détermine si les utilisateurs distants doivent être inscrits et/ou désinscrits de ce cours.';
$string['membersyncmodeenrolandunenrol'] = 'Inscrire les nouveaux et désinscrire les utilisateurs manquants';
$string['membersyncmodeenrolnew'] = 'Inscrire les nouveaux utilisateurs';
$string['membersyncmodeunenrolmissing'] = 'Désinscrire les utilisateurs manquants';
$string['notoolsprovided'] = 'Aucun outil fourni';
$string['opentool'] = 'Ouvrir l\'outil';
$string['pluginname'] = 'Publication comme outil LTI';
$string['pluginname_desc'] = 'Le plugin « Publication comme outil LTI », en combinaison avec le plugin d\'authentification LTI, permet à des utilisateurs externes d\'accéder à des cours ou à des activités choisies. Il permet à Moodle de fonctionner comme fournisseur d\'outil LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'La liste des utilisateurs inscrits via un fournisseur LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'La date et l\'heure du dernier accès au cours de l\'utilisateur';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'La dernière note enregistrée pour l\'utilisateur';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'La date et l\'heure de l\'inscription de l\'utilisateur';
$string['privacy:metadata:enrol_lti_users:userid'] = 'L\'identifiant de l\'utilisateur';
$string['registration'] = 'Enregistrement de l\'outil publié';
$string['registrationurl'] = 'URL d\'enregistrement';
$string['registrationurl_help'] = 'Si une URL d\'enregistrement (aussi appelée URL proxy) est utilisée, l\'outil est configuré automatiquement.';
$string['remotesystem'] = 'Système distant';
$string['requirecompletion'] = 'Nécessite que le cours ou l\'activité soit terminée avant de synchroniser les notes';
$string['returnurlnotset'] = 'URL de retour non défini.';
$string['roleinstructor'] = 'Rôle de l\'enseignant';
$string['roleinstructor_help'] = 'Le rôle qui sera attribué dans l\'outil à l\'enseignant distant.';
$string['rolelearner'] = 'Rôle de l\'étudiant';
$string['rolelearner_help'] = 'Le rôle qui sera attribué dans l\'outil à l\'étudiant distant.';
$string['secret'] = 'Secret';
$string['secret_help'] = 'Une chaîne de caractères partagée avec le système distant (client LTI) pour permettre l\'accès à cet outil.';
$string['sharedexternaltools'] = 'Publiés comme outils LTI';
$string['successfulregistration'] = 'Enregistrement réussi';
$string['tasksyncgrades'] = 'Publication comme outil LTI de synchro des notes';
$string['tasksyncmembers'] = 'Publication comme outil LTI de synchro des utilisateurs';
$string['toolsprovided'] = 'Outils publiés';
$string['toolsprovided_help'] = 'Un outil peut être partagé avec un autre site en fournissant soit les informations de lancement, soit une URL d\'enregistrement.';
$string['tooltobeprovided'] = 'Outils à publier';
$string['toolurl'] = 'URL de l\'outil';
$string['userdefaultvalues'] = 'Valeurs utilisateur par défaut';
