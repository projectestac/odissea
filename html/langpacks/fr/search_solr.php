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
 * Strings for component 'search_solr', language 'fr', version '4.4'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'Le serveur Solr indiqué n’est pas disponible ou l’index indiqué n’existe pas';
$string['connectionsettings'] = 'Réglages de connexion';
$string['errorcreatingschema'] = 'Erreur lors de la création du schéma Solr : {$a}';
$string['errorsolr'] = 'Le moteur de recherche Solr a renvoyé une erreur : {$a}';
$string['errorvalidatingschema'] = 'Erreur lors de la validation du schéma Solr : le champ {$a->fieldname} n’existe pas. Veuillez <a href="{$a->setupurl}">suivre ce lien</a> pour configurer les champs requis.';
$string['extensionerror'] = 'L’extension PHP Apache Solr n’est pas installée. Veuillez consulter la documentation.';
$string['fileindexing'] = 'Activer l’indexation des fichiers';
$string['fileindexing_help'] = 'Si votre serveur Solr le permet, cette fonctionnalité permet à Moodle de lui envoyer des fichiers à indexer.<br/>Après l’activation de cette option, vous devrez réindexer la totalité des contenus du site pour que tous les fichiers soient pris en compte.';
$string['fileindexsettings'] = 'Réglages d’indexation des fichiers';
$string['maxindexfilekb'] = 'Taille maximale des fichiers à indexer (kO)';
$string['maxindexfilekb_help'] = 'Les fichiers plus gros que ce nombre de kilo-octets ne seront pas traités lors de l’indexation pour la recherche. Si 0 est indiqué, les fichiers de toutes tailles seront indexés.';
$string['minimumsolr4'] = 'Une version de Solr 4.0 ou ultérieure est requise pour Moodle';
$string['missingconfig'] = 'Votre serveur Apache Solr n’est pas encore configuré dans Moodle.';
$string['multivaluedfield'] = 'Le champ « {$a} » retourné est un tableau au lieu d’un scalaire. Veuillez supprimer l’index actuel, en créer un nouveau et lancer le script setup_schema.php avant d’indexer les données dans Solr.';
$string['nodatafromserver'] = 'Aucune donnée du serveur';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Ce plugin transmet des données vers un moteur Solr externe lié. Il n’enregistre aucune donnée localement.';
$string['privacy:metadata:data'] = 'Données personnelles passées au sous-système de recherche.';
$string['schemafieldautocreated'] = 'Le champ « {$a} » existe déjà dans le schéma Solr. Vous avez probablement oublié de lancer ce script avant d’indexer les données, et des champs ont été créés automatiquement par Solr. Veuillez supprimer l’index actuel, en créer un nouveau et lancer le script setup_schema.php avant d’indexer les données dans Solr.';
$string['schemasetupfromsolr5'] = 'La version de votre serveur Solr est inférieure à 5.0. Ce script ne peut créer votre schéma que si la version de Solr est 5.0 ou ultérieure. Veuillez définir manuellement les champs de votre schéma suivant \\search_solr\\document::get_default_fields_definition().';
$string['searchinfo'] = 'Demandes de recherche';
$string['searchinfo_help'] = 'Le champ dans lequel rechercher peut être indiqué en préfixant la requête de recherche avec « title: », « content: », « name: » ou « intro: ». Par exemple, la requête « title:nouveautés » ne trouvera que les éléments comportant le terme « nouveautés » dans leur titre.

Les opérateurs booléens (AND, OR, NOT) peuvent être utilisés pour combiner ou exclure des termes de recherche.

Les caractères jokers (* et ?) peuvent être utilisés pour représenter des caractères quelconques dans la requête.';
$string['setupok'] = 'Le schéma est prêt à être utilisé';
$string['solrauthpassword'] = 'Mot de passe pour authentification HTTP';
$string['solrauthuser'] = 'Nom d’utilisateur pour authentification HTTP';
$string['solrhttpconnectionport'] = 'Port';
$string['solrhttpconnectiontimeout'] = 'Délai d’attente';
$string['solrhttpconnectiontimeout_desc'] = 'Le délai d’attente (<em>timeout</em>) de la connection HTTP est la durée maximale autorisées pour le transfert des données HTTP, en secondes.';
$string['solrindexname'] = 'Nom de l’index';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Le moteur Solr n’est pas le moteur de recherche configuré';
$string['solrsecuremode'] = 'Mode sûr';
$string['solrserverhostname'] = 'Nom d’hôte';
$string['solrserverhostname_desc'] = 'Nom de domaine du serveur Solr';
$string['solrsetting'] = 'Réglages Solr';
$string['solrsslcainfo'] = 'Fichier de d’autorités de certification SSL';
$string['solrsslcainfo_desc'] = 'Nom du fichier avec une ou plusieurs autorités de certification pour vérification';
$string['solrsslcapath'] = 'Chemin d’accès d’autorités de certification SSL';
$string['solrsslcapath_desc'] = 'Chemin d’accès au dossier contenant plusieurs autorités de certification pour vérification';
$string['solrsslcert'] = 'Certificat SSL';
$string['solrsslcert_desc'] = 'Nom d’un fichier contenant un certificat privé en format PEM';
$string['solrsslkey'] = 'Clef SSL';
$string['solrsslkey_desc'] = 'Nom d’un fichier contenant une clef privé en format PEM';
$string['solrsslkeypassword'] = 'Mot de passe clef SSL';
$string['solrsslkeypassword_desc'] = 'Mot de passe du fichier de clef privée en format PEM';
