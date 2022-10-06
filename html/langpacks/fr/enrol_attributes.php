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
 * Strings for component 'enrol_attributes', language 'fr', version '3.11'.
 *
 * @package     enrol_attributes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcondition'] = 'Ajouter une condition';
$string['addgroup'] = 'Ajouter un groupe';
$string['ajax-error'] = 'Une erreur est survenue';
$string['ajax-okforced'] = 'OK, {$a} personnes ont été inscrites';
$string['ajax-okpurged'] = 'OK, les inscriptions ont été purgées';
$string['attributes:config'] = 'Configurer des instances du plugin';
$string['attributes:manage'] = 'Gérer les utilisateurs inscrits';
$string['attributes:unenrol'] = 'Désinscrire des utilisateurs du cours';
$string['attributes:unenrolself'] = 'Se désinscrire du cours';
$string['attrsyntax'] = 'Règles sur les champs du profil utilisateur';
$string['attrsyntax_help'] = '<p>Ces règles ne peuvent utiliser que des champs du profil ajoutés.</p>';
$string['confirmforce'] = 'Ceci (ré)inscrira tous les utilisateurs correspondant à cette règle.';
$string['confirmpurge'] = 'Ceci supprimera toutes les inscriptions correspondant à cette règle.';
$string['defaultrole'] = 'Rôle par défaut';
$string['defaultrole_desc'] = 'Rôle à attribuer par défaut avec ce plugin (chaque instance peut avoir un réglage différent).';
$string['deletecondition'] = 'Supprimer une condition';
$string['force'] = 'Forcer les inscriptions maintenant';
$string['mappings'] = 'Lien depuis les attributs Shibboleth';
$string['mappings_desc'] = 'Si vous utilisez la méthode d\'authentification Shibboleth, ce plugin permet de mettre à jour les champs du profil utilisateur automatiquement à chaque connexion.<br><br>Par exemple, si vous désirez mettre à jour le champ <code>homeorganizationtype</code> du profil utilisateur avec la valeur de l\'attribut Shibboleth <code>Shib-HomeOrganizationType</code> (pour autant que celui-ci soit disponible en tant que variable d\'environnement du serveur lors de la connexion), vous pouvez entrer sur une ligne : <code>Shib-HomeOrganizationType:homeorganizationtype</code><br>Vous pouvez entrer autant de lignes que nécessaire.<br><br>Si vous ne désirez pas utiliser cette fonctionnalité, ou si vous n\'utilisez pas l\'authentification par Shibboleth, laissez simplement ce champ vide.';
$string['pluginname'] = 'Inscription par champs du profil utilisateur';
$string['profilefields'] = 'Champs du profil utilisables';
$string['profilefields_desc'] = 'Quels champs du profil utilisateur sont à montrer lors de la configuration d\'une instance d\'inscription ?<br><br><b>Si vous ne sélectionnez aucun role, cela rend l\'utilisation de ce plugin caduque, et désactive donc son utilisation dans les cours.</b><br>La fonctionnalité ci-dessous peut toutefois toujours être utilisée dans ce cas.';
$string['purge'] = 'Purger les inscriptions';
$string['removewhenexpired'] = 'Désinscrire après expiration des attributs';
$string['removewhenexpired_help'] = 'Désinscrire les utilisateurs à la connexion si leurs attributs ne correspondent plus à la règle.';
