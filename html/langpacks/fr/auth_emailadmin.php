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
 * Strings for component 'auth_emailadmin', language 'fr', version '4.4'.
 *
 * @package     auth_emailadmin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emailadminawaitingapproval'] = 'Votre compte est en attente d’approbation par un administrateur.';
$string['auth_emailadminconfirmation'] = 'Ceci est un exemple de message. L’administrateur devrait le personnaliser depuis la page Administration du site -> Personnalisation de la langue et modifier les chaînes relatives à auth/auth_emailadmin.php, notamment auth_emailadminconfirmation et auth_emailadminuserconfirmation.

Dans ce message, l’administrateur trouvera des exemples d’intégration de données utilisateur en utilisant les balises placées entre { et }. Il trouvera une liste des champs possibles dans la liste générée par $a->userdata.

--
Cher Administrateur Moodle,

Une nouvelle demande d’inscription pour « {$a->sitename} » est arrivée avec les données suivantes :

Exemple de donnée utilisateur :
user->lastname : {$a->lastname}

Tous les champs non-standards :
{$a->customfields}

Tous les champs utilisateur et les champs non-standards :
{$a->userdata}

Pour valider l’inscription, utilisez l’URL ci-dessous :
{$a->link}

Dans la plupart des logiciels de messagerie électronique, cette adresse devrait apparaître sous la forme d’un lien bleu cliquable. Si ce n’est pas le cas, copiez le lien et collez le dans la barre d’adresse de votre navigateur.

Vous pouvez également valider les comptes utilisateurs directement via Moodle depuis la page
Administration du site -> Utilisateurs';
$string['auth_emailadminconfirmationsubject'] = '{$a} : confirmation de compte';
$string['auth_emailadminconfirmsent'] = '<p>Votre inscription a bien été enregistrée mais doit encore être validée par un administrateur. Vous recevrez sous peu confirmation de votre inscription ou serez contacté pour de plus amples informations.</p>';
$string['auth_emailadmindescription'] = '<p>L’auto-inscription par courriel avec confirmation Administrateur permet à un utilisateur de créer son propre compte via un bouton « Créer un nouveau compte » sur la page de connexion. Les administrateurs du site reçoivent ensuite un courriel contenant un lien sécurisé sur une page où ils peuvent confirmer le compte. Les futures connexions vérifient simplement le nom de l’utilisateur et son mot de passe par rapport aux valeurs stockées dans la base de données Moodle.</p><p>Note : outre le fait d’activer le plugin, l’auto-inscription par courriel avec confirmation administrateur doit également être sélectionnée à partir du menu déroulant d’auto-inscription sur la page « Gérer l’authentification ».</p>';
$string['auth_emailadminnoadmin'] = 'Aucun administrateur ne correspond à la stratégie de notification prévue. Veuillez vérifier la configuration du plugin auth-emailadmin.';
$string['auth_emailadminnoemail'] = 'L’envoi d’un courriel à votre attention à échoué !';
$string['auth_emailadminnotif_failed'] = 'La notification d’enregistrement n’a pas pu être envoyée à :';
$string['auth_emailadminnotif_strategy'] = 'Définit la stratégie de notification des demandes d’inscription. Les options disponibles sont l’administrateur « principal », tous les administrateurs ou un administrateur spécifique.';
$string['auth_emailadminnotif_strategy_all'] = 'Tous les administrateurs';
$string['auth_emailadminnotif_strategy_allupdate'] = 'Tous les administrateurs et utilisateurs avec la capacité de mettre à jour les utilisateurs';
$string['auth_emailadminnotif_strategy_first'] = 'Administrateur principal';
$string['auth_emailadminnotif_strategy_key'] = 'Stratégie de notification :';
$string['auth_emailadminrecaptcha'] = 'Ajoute un élément de formulaire de confirmation visuel/audio sur la page d’inscription pour les utilisateurs qui s’auto-inscrivent par email. Ceci protège votre site des spammeurs et contribue à une juste cause. Consulter http://www.google.com/recaptcha/learnmore pour de plus amples informations. <br /><em>L’extension PHP cURL est requise.</em>';
$string['auth_emailadminrecaptcha_key'] = 'Activer reCAPTCHA';
$string['auth_emailadminsettings'] = 'Réglages';
$string['auth_emailadminuserconfirmation'] = 'Ceci est un exemple de message. L’administrateur devrait le personnaliser depuis la page Administration du site -> Personnalisation de la langue et modifier les chaînes relatives à auth/auth_emailadmin.php, notamment auth_emailadminconfirmation et auth_emailadminuserconfirmation.

Dans ce message, l’administrateur trouvera des exemples d’intégration de données utilisateur en utilisant les balises placées entre { et }. Il trouvera une liste des champs possibles dans la liste générée dans sa propre notification.

--
Bonjour {$a->firstname},

Bienvenue à (Mon organisation), votre compte a été validé.

IMPORTANT : indiquez ensuite toutes les informations utiles que vous voulez donner à vos nouveaux utilisateurs. Vous pouvez vous inspirer de la chaîne originale en anglais.

Bon usage de notre plateforme.
Le gestionnaire, (Mon nom)

--
(Mon organisation)
<a href=https://www.mon-organisation.org/>https://www.mon-organisation.org</a>
<a href=mailto:adresse@mon-organisation.org>adresse@mon-organisation.org</a>';
$string['pluginname'] = 'Auto-inscription par courriel avec confirmation administrateur';
$string['privacy:metadata'] = 'Le plugin Auto-inscription par courriel avec confirmation administrateur n’enregistre aucune donnée personnelle.';
