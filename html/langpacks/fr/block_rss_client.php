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
 * Strings for component 'block_rss_client', language 'fr', version '4.1'.
 *
 * @package     block_rss_client
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfeed'] = 'Ajouter l\'URL d\'un flux RSS :';
$string['addheadlineblock'] = 'Ajouter un bloc manchette RSS';
$string['addnew'] = 'Ajouter nouveau';
$string['addnewfeed'] = 'Ajouter un flux';
$string['cannotmakemodification'] = 'Vous n\'avez actuellement pas les permissions requises pour faire des modifications à ce flux RSS.';
$string['choosefeedlabel'] = 'Choisir les flux RSS que vous désirez rendre disponibles dans ce bloc :';
$string['clientchannellink'] = 'Site d\'origine…';
$string['clientnumentries'] = 'Nombre par défaut d\'articles RSS à afficher par bloc';
$string['clientshowchannellinklabel'] = 'Un lien vers le site original doit-il être affiché ? (Si aucun lien n\'est fourni dans le flux, aucun lien ne sera affiché) :';
$string['clientshowimagelabel'] = 'Afficher l\'image du flux si disponible :';
$string['configblock'] = 'Configurer ce bloc';
$string['couldnotfindfeed'] = 'Impossible de trouver le flux RSS d\'identifiant';
$string['couldnotfindloadrssfeed'] = 'Impossible de trouver ou charger le flux RSS';
$string['customtitlelabel'] = 'Titre personnalisé (laisser vide pour utiliser le titre fourni dans le flux) :';
$string['deletefeedconfirm'] = 'Voulez-vous vraiment supprimer ce flux RSS ?';
$string['disabledrssfeeds'] = 'Les flux RSS sont désactivés';
$string['displaydescriptionlabel'] = 'Afficher la description de chaque lien ?';
$string['editafeed'] = 'Modifier un flux';
$string['editfeeds'] = 'Modifier, s\'abonner ou se désabonner d\'un flux RSS/Atom';
$string['editnewsfeeds'] = 'Modifier les flux RSS';
$string['editrssblock'] = 'Modifier le bloc manchette RSS';
$string['enableautodiscovery'] = 'Activer la découverte automatique de flux ?';
$string['enableautodiscovery_help'] = 'Si ce réglage est activé, les flux RSS des pages web sont découverts automatiquement. Par exemple, si l\'on saisit https://docs.moodle.org/fr, Moodle découvrira automatiquement le lien https://docs.moodle.org/fr/index.php?title=Special:RecentChanges&feed=rss.';
$string['failedfeed'] = 'Échec du téléchargement du flux. Nouvelle tentative après le {$a}';
$string['failedfeeds'] = 'Un ou plusieurs flux RSS ont échoué';
$string['feed'] = 'Flux RSS';
$string['feedadded'] = 'Flux RSS ajouté';
$string['feeddeleted'] = 'Flux RSS supprimé';
$string['feeds'] = 'Flux RSS';
$string['feedsaddedit'] = 'Ajouter/modifier des flux RSS';
$string['feedsconfigurenewinstance'] = 'Cliquer ici pour afficher dans ce bloc des flux RSS';
$string['feedsconfigurenewinstance2'] = 'Cliquer l\'icône de modification ci-dessus pour configurer ce bloc afin d\'afficher des flux RSS.';
$string['feedupdated'] = 'Le flux RSS a été modifié';
$string['feedurl'] = 'URL du flux';
$string['findmorefeeds'] = 'Rechercher d\'autres flux RSS';
$string['managefeeds'] = 'Gérer tous mes flux RSS';
$string['nofeeds'] = 'Il n\'y a pas de flux RSS défini sur ce site.';
$string['numentries'] = 'Articles par flux';
$string['pickfeed'] = 'Choisir un flux RSS';
$string['pluginname'] = 'Flux RSS';
$string['privacy:metadata:block_rss_client:description'] = 'La description du flux RSS.';
$string['privacy:metadata:block_rss_client:preferredtitle'] = 'Le titre personnalisé du flux RSS.';
$string['privacy:metadata:block_rss_client:shared'] = 'Si le flux RSS est disponible pour tous les cours.';
$string['privacy:metadata:block_rss_client:skiptime'] = 'La durée en secondes que le cron va attendre entre les tentatives infructueuses d\'accéder aux flux RSS.';
$string['privacy:metadata:block_rss_client:skipuntil'] = 'La durée maximale durant laquelle le cron va tenter d\'ouvrir les flux RSS.';
$string['privacy:metadata:block_rss_client:tableexplanation'] = 'Les informations du bloc RSS sont enregistrées ici.';
$string['privacy:metadata:block_rss_client:title'] = 'Le titre du flux RSS.';
$string['privacy:metadata:block_rss_client:url'] = 'L\'URL du flux RSS.';
$string['privacy:metadata:block_rss_client:userid'] = 'L\'identifiant de l\'utilisateur qui a ajouté le flux RSS.';
$string['refreshfeedstask'] = 'Actualisation des flux RSS';
$string['remotenewsfeed'] = 'Flux RSS';
$string['rss_client:addinstance'] = 'Ajouter un bloc flux RSS';
$string['rss_client:createprivatefeeds'] = 'Créer des flux RSS privés';
$string['rss_client:createsharedfeeds'] = 'Créer des flux RSS partagés';
$string['rss_client:manageanyfeeds'] = 'Gérer tous les flux RSS';
$string['rss_client:manageownfeeds'] = 'Gérer ses propres flux RSS';
$string['rss_client:myaddinstance'] = 'Ajouter un bloc flux RSS distant au tableau de bord';
$string['seeallfeeds'] = 'Afficher tous les flux RSS';
$string['sharedfeed'] = 'Flux RSS partagé';
$string['shownumentrieslabel'] = 'Nombre maximum d\'articles à afficher par bloc';
$string['submitters'] = 'Qui aura les permissions requises pour définir de nouveaux flux RSS ? Les flux RSS définis sont disponibles sur toutes les pages de votre site.';
$string['submitters2'] = 'Pouvant définir';
$string['timeout'] = 'Durée en minutes avant l\'expiration d\'un flux RSS en cache. Cette durée définit le laps de temps minimal avant expiration. Le flux sera actualisé lors de l\'exécution du cron après expiration. Valeur recommandée : 30 min ou plus.';
$string['timeout2'] = 'Durée de vie';
$string['timeoutdesc'] = 'Durée de vie en cache d\'un flux RSS (en minutes).';
$string['updatefeed'] = 'Modifier l\'URL d\'un flux URL :';
$string['viewfeed'] = 'Afficher le flux';
