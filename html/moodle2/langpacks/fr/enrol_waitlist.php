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
 * Strings for component 'enrol_waitlist', language 'fr', branch 'MOODLE_25_STABLE'
 *
 * @package   enrol_waitlist
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmation'] = 'Si vous continuez, vous serez inscrit au cours.<br><br>Êtes-vous bien certain de vouloir continuer?';
$string['confirmation_cancel'] = 'Annuler';
$string['confirmationfull'] = '<strong>Ce cours est actuellement complet.</strong> Si vous continuez, vous serez placé sur une liste d\'attente. Si des places se libèrent, vous en serez informé par courriel et serez inscrit automatiquement.<br>';
$string['confirmation_no'] = 'Non';
$string['confirmation_yes'] = 'Oui';
$string['customwelcomemessage'] = 'Message d\'accueil personnalisé';
$string['defaultrole'] = 'Attribution du rôle par défaut';
$string['defaultrole_desc'] = 'Choix du rôle à assigner aux utilisateurs durant l\'inscription sur la liste d\'attente';
$string['enrolenddate'] = 'Date de fin';
$string['enrolenddate_help'] = 'Si activée, les utilisateurs peuvent s\'inscrire jusqu\'à cette date seulement';
$string['enrolenddaterror'] = 'La date de fin des inscriptions doit être antérieure à celle de début';
$string['enrolme'] = 'Inscrivez moi';
$string['enrolperiod'] = 'Durée de l\'inscription';
$string['enrolperiod_desc'] = 'Période de validité par défaut de l\'inscription (en secondes). Si réglée à zéro, la durée de l\'inscription sera illimitée par défaut';
$string['enrolperiod_help'] = 'Période de validité de l\'inscription à partir du moment où un utilisateur s\'inscrit. Si désactivée, la durée d\'inscription sera illimitée.';
$string['enrolstartdate'] = 'Date de début';
$string['enrolstartdate_help'] = 'Si activée, les utilisateurs peuvent s\'inscrire à compter de cette date seulement';
$string['enrolusers'] = 'Inscrire des utilisateurs';
$string['groupkey'] = 'Utilisation de clés d\'inscription de groupe';
$string['groupkey_desc'] = 'Utilisation des clés d\'inscription de groupe par défaut.';
$string['groupkey_help'] = 'En plus de restreindre l\'accès au cours aux utilisateurs disposant de la clé, l\'utilisation d\'une clé d\'inscription de groupe signifie que les utilisateurs seront automatiquement ajoutés au groupe au moment de l\'inscription.

Pour utiliser une clé d\'inscription de groupe, vous devez définir une clé d\'inscription dans les réglages du cours et une clé d\'inscription de groupe dans les réglages du groupe.';
$string['lineconfirm'] = '<br>Êtes-vous bien certain de vouloir continuer&nbsp;?';
$string['lineinfo'] = '<br>Nombre de personnes en ligne devant vous&nbsp;:';
$string['longtimenosee'] = 'Désinscrire un utilisateur inactif après';
$string['longtimenosee_help'] = 'Les utilisateurs qui n\'ont pas accédé au cours pendant une longue période sont automatiquement désinscrits. Ce paramètre permet de définir ladite période.';
$string['maxenrolled'] = 'Nombre maximal d\'utilisateurs inscrits';
$string['maxenrolled_help'] = 'Indique le nombre maximal d\'utilisateurs permis sur une liste d\'attente. Une valeur de 0 signifie aucune limite.';
$string['maxenrolledreached'] = 'Le nombre maximal d\'utilisateurs permis sur la liste d\'attente est déjà atteint.';
$string['password'] = 'Clé d\'inscription';
$string['password_help'] = 'Une clé d\'inscription permet de restreindre l\'accès au cours aux utilisateurs disposant de ladite clé.

Un champ vide permet à tous les utilisateurs de s\'inscrire.

Si une clé d\'inscription est précisée, les utilisateurs qui tentent de s\'inscrire au cours devront la fournir. À noter que les utilisateurs ne doivent fournir cette clé qu\'UNE SEULE fois, au moment de l\'inscription.';
$string['passwordinvalid'] = 'Clé erronée. Veuillez essayer de nouveau';
$string['passwordinvalidhint'] = 'La clé d\'inscription n\'est pas valide, veuillez essayer de nouveau<br />
(Indice&nbsp;: Elle débute par \'{$a}\')';
$string['pluginname'] = 'Liste d\'attente d\'inscription';
$string['pluginname_desc'] = 'Le plugiciel de liste d\'attente d\'inscription permet aux utilisateurs de sélectionner des cours, lesquels peuvent être protégés par une clé d\'inscription. À l\'interne, l\'inscription se fait au moyen du plugiciel d\'inscription manuel qui doit être activé dans le même cours.';
$string['requirepassword'] = 'Clé d\'inscription requise';
$string['requirepassword_desc'] = 'Exiger la clé d\'inscription dans les nouveaux cours et prévenir la suppression de la clé des cours existants.';
$string['role'] = 'Attribution d\'un rôle';
$string['sendcoursewelcomemessage'] = 'Envoi d\'un message d\'accueil au cours';
$string['sendcoursewelcomemessage_help'] = 'Si activé, les utilisateurs reçoivent un message d\'accueil par courriel lorsqu\'ils s\'inscrivent à la liste d\'attente d\'un cours.';
$string['showhint'] = 'Afficher un indice';
$string['showhint_desc'] = 'Montrer la première lettre de la clé d\'accès à titre d\'invité.';
$string['status'] = 'Permettre les inscriptions à une liste d\'attente';
$string['status_desc'] = 'Permettre par défaut aux utilisateurs de s\'inscrire à la liste d\'attente du cours.';
$string['status_help'] = 'Ce réglage détermine si un utilisateur peut s\'inscrire (et se désinscrire s\'il dispose de l\'autorisation appropriée) à un cours.';
$string['unenrolwaitlistconfirm'] = 'Souhaitez-vous vraiment vous désinscrire «&nbsp;{$a}&nbsp;»&nbsp;?';
$string['usepasswordpolicy'] = 'Appliquer de la politique de mot de passe';
$string['usepasswordpolicy_desc'] = 'Appliquer la politique de mot de passe standard pour les clés d\'inscription.';
$string['waitlist:config'] = 'Configurer les inscriptions à la liste d\'attente';
$string['waitlistinfo'] = '<b>Ce cours est actuellement complet</b>. <br/><br/>Merci de votre demande d\'inscription. Vous êtes désormais sur la liste d\'attente et serez informé par courriel si une place se libère.';
$string['waitlist:manage'] = 'Gérer les utilisateurs inscrits';
$string['waitlist:unenrol'] = 'Désinscrire des utilisateurs d\'un cours';
$string['waitlist:unenrolself'] = 'Se désinscrire à un cours';
$string['waitlist:unenrolwaitlist'] = 'Désinscrire les utilisateurs  sur la liste d\'attente d\'un cours';
$string['welcometocourse'] = 'Bienvenue au cours {$a}';
$string['welcometocoursetext'] = 'Bienvenue au cours {$a->coursename}&nbsp;!

Si ce n\'est déjà fait, veuillez remplir votre page de profil afin que nous puissions mieux vous connaître&nbsp;:

&nbsp; {$a->profileurl}';
