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
 * Strings for component 'portfolio_mahara', language 'fr', version '3.11'.
 *
 * @package     portfolio_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Activer le support du format portfolio Leap2A (nécessite Mahara 1.3)';
$string['err_invalidhost'] = 'Serveur MNet non valide';
$string['err_invalidhost_help'] = 'Ce plugin pointe vers un hôte MNet non valide (ou supprimé). Il nécessite l\'utilisation de pairs MNet avec SSO (fournisseur d\'identité) publiée et abonnement SSO au portfolio (fournisseur de service).';
$string['err_networkingoff'] = 'MNet est désactivé';
$string['err_networkingoff_help'] = 'MNet est actuellement désactivé. Veuillez l\'activer avant de configurer ce plugin. En attendant, toutes les instances de ce plugin ont été cachées, jusqu\'à l\'activation de MNet. Vous devez les activer manuellement.';
$string['err_nomnetauth'] = 'Le plugin d\'authentification MNet est désactivé';
$string['err_nomnetauth_help'] = 'Le plugin d\'authentification MNet est désactivé, alors que ce service en a besoin.';
$string['err_nomnethosts'] = 'Nécessite le MNet';
$string['err_nomnethosts_help'] = 'Ce plugin nécessite l\'utilisation de pairs MNet avec SSO (fournisseur d\'identité) publiée et abonnement SSO au portfolio (fournisseur de service), ainsi que le plugin d\'authentification MNet. Toutes les instances de ce plugin ont été cachées. Vous devrez les rendre visibles manuellement une fois la configuration corrigée. Ces instances ne peuvent pas fonctionner jusque là.';
$string['failedtojump'] = 'Échec de communication avec le serveur distant';
$string['failedtoping'] = 'Échec de communication avec le serveur distant : {$a}';
$string['mnet_nofile'] = 'Impossible de trouver de fichier dans l\'objet transfert - erreur bizarre';
$string['mnet_nofilecontents'] = 'Fichier trouvé dans l\'objet transfert, mais impossible d\'obtenir son contenu - erreur bizarre : {$a}';
$string['mnet_noid'] = 'Impossible de trouver l\'enregistrement du transfert pour ce jeton';
$string['mnet_notoken'] = 'Impossible de trouver le jeton correspondant à ce transfert';
$string['mnet_wronghost'] = 'Le serveur distant ne correspond pas à l\'enregistrement du transfert pour ce jeton';
$string['mnethost'] = 'Hôte MNet';
$string['pf_description'] = 'Permet aux utilisateurs de copier des contenus du site Moodle sur ce serveur.<br />En vous abonnant à ce service, vous permettrez aux utilisateurs authentifiés de votre site de copier des contenus sur {$a}<br /><ul><li><em>Dépendance</em> : vous devez également <strong>publier</strong> le service SSO (fournisseur d\'identité) vers {$a}.</li><li><em>Dépendance</em> : vous devez également vous <strong>abonner</strong> au service SSO (fournisseur de service) de {$a}</li><li><em>Dépendance</em> : vous devez également activer le plugin d\'authentification MNet.</li></ul><br />';
$string['pf_name'] = 'Services portfolio';
$string['pluginname'] = 'Portfolio Mahara';
$string['privacy:metadata'] = 'Ce plugin transmet des données vers une application Mahara externe liée. Il n\'enregistre aucune donnée localement.';
$string['privacy:metadata:data'] = 'Données personnelles transmises à partir du sous-système portfolio.';
$string['senddisallowed'] = 'Il n\'est actuellement pas possible de transférer des fichiers vers Mahara';
$string['url'] = 'URL';
