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
 * Strings for component 'quizaccess_offlinemode', language 'fr', version '4.5'.
 *
 * @package     quizaccess_offlinemode
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerchanged'] = 'Réponse modifiée';
$string['backtothequiz'] = 'Retour au test';
$string['changesmadereallygoaway'] = 'Vos réponses n’ont pas été enregistrées sur le serveur. Voulez-vous vraiment quitter cette tentative ?';
$string['dataprocessedsuccessfully'] = 'Données traitées avec succès ({$a}).';
$string['description'] = 'Ce test utilise le mode tolérant aux pannes. Les administrateurs peuvent {$a}';
$string['descriptionlink'] = 'déposer les réponses exportées';
$string['finishattemptsafterupload'] = 'Soumettre et terminer chaque tentative après avoir traité le téléchargement';
$string['lastsaved'] = 'Dernière sauvegarde : {$a}';
$string['lastsavedtotheserver'] = 'Dernier enregistrement sur le serveur : {$a}';
$string['lastsavedtothiscomputer'] = 'Dernier enregistrement sur cet ordinateur : {$a}';
$string['loggedinaswronguser'] = 'Vous vous êtes connecté avec un compte autre que celui qui tentait le test. Ça ne marchera pas. Cliquez sur Continuer pour vous reconnecter avec le bon compte..';
$string['logindialogueheader'] = 'Vous devrez peut-être vous reconnecter';
$string['loginokagain'] = 'Votre login est maintenant OK.';
$string['offlinemode:uploadresponses'] = 'Déposer les réponses';
$string['offlinemodeenabled'] = 'Mode expérimental tolérant aux pannes';
$string['offlinemodeenabled_desc'] = 'Indique si le mode tolérant aux pannes doit être activé par défaut pour les nouveaux tests, et s’il doit s’agir d’un paramètre avancé (derrière « Afficher plus… ») sur le formulaire des paramètres du test.';
$string['offlinemodeenabled_help'] = 'Le but de cette option expérimentale est de permettre aux étudiants de tenter un test même si la connexion réseau n’est pas fiable. Par exemple dans un train traversant des tunnels, ou tout simplement avec une mauvaise connexion Wi-Fi. Les étudiants peuvent se déplacer entre les pages du test même si le serveur n’est pas disponible, et toutes leurs réponses sont stockées localement et envoyées au serveur lorsque cela est possible.';
$string['pluginname'] = 'Mode tolérant aux pannes du test';
$string['privacy:metadata'] = 'Le plugin de mode tolérant aux pannes des tests n’enregistre aucune donnée personnelle.';
$string['privatekey'] = 'Clé privée de chiffrement';
$string['privatekey_desc'] = 'Vous pouvez utiliser la cryptographie à clé publique pour protéger les réponses téléchargées. Pour ce faire, vous devez fournir une paire de clés privée / publique. Vous pouvez générer une clé privée à l’aide de <code>openssl genrsa -out rsa_1024_priv.pem 1024</code> sur la ligne de commande (si vous avez installé OpenSSL à partir de https://www.openssl.org/). Collez ensuite le contenu du fichier rsa_1024_priv.pem dans cette zone.';
$string['processingcomplete'] = 'Traitement terminé';
$string['processingfile'] = 'Traitement du fichier {$a}';
$string['publickey'] = 'Clé publique de chiffrement';
$string['publickey_desc'] = 'Clé privée de chiffrement';
$string['responsefiles'] = 'Fichiers de réponses';
$string['responsefiles_help'] = 'Vous pouvez déposer un ou plusieurs fichiers de réponses téléchargés à l’aide du lien «Exporter les réponses d’urgence» lors d’une tentative de test.';
$string['reviewthisattempt'] = 'Revoir cette tentative';
$string['savefailed'] = 'Échec de la sauvegarde. Vous pouvez continuer à travailler. De temps en temps, vous devriez {$a}.';
$string['savetheresponses'] = 'enregistrer les réponses';
$string['savingdots'] = 'Enregistrement…';
$string['savingtryagaindots'] = 'Réessayer d’enregistrer sur le serveur…';
$string['submitfailed'] = 'Échec de la transmission';
$string['submitfaileddownloadmessage'] = '… ou vous pouvez {$a} en tant que fichier pouvant être traité ultérieurement.';
$string['submitfailedmessage'] = 'Vos réponses n’ont pas pu être transmises. Vous pouvez soit réessayer…';
$string['submitting'] = 'Transmission…';
$string['uploadfailed'] = 'Le dépôt a échoué';
$string['uploadingresponsesfor'] = 'Dépôt des réponses pour {$a}';
$string['uploadmoreresponses'] = 'Déposer plus de réponses';
$string['uploadresponses'] = 'Déposer des réponses';
$string['uploadresponsesfor'] = 'Déposer des réponses pour {$a}';
