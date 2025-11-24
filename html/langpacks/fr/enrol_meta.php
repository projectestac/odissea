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
 * Strings for component 'enrol_meta', language 'fr', version '4.5'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Ajouter au groupe';
$string['coursesort'] = 'Ordre de tri la liste des cours sources';
$string['coursesort_help'] = 'Ce réglage détermine comment les cours sources doivent être triés, lorsqu’un cours source est lié à un cours cible.';
$string['creategroup'] = 'Créer un groupe';
$string['defaultgroupnametext'] = 'Cours {$a->name} {$a->increment}';
$string['enrolmetasynctask'] = 'Synchronisation des méta-inscriptions';
$string['linkedcourse'] = 'Lier le cours';
$string['meta:config'] = 'Configurer les instances de méta-inscription';
$string['meta:selectaslinked'] = 'Sélectionner le cours comme méta-cours';
$string['meta:unenrol'] = 'Désinscrire les utilisateurs suspendus';
$string['nosyncroleids'] = 'Rôles non-synchronisés';
$string['nosyncroleids_desc'] = 'Sélectionner tous les rôles qui ne doivent pas être synchronisés entre le cours source et le cours cible.';
$string['pluginname'] = 'Lien méta-cours';
$string['pluginname_desc'] = 'Le plugin d’inscription lien méta-cours synchronise les inscriptions et rôles d’un cours source à un cours cible.';
$string['privacy:metadata:core_group'] = 'Le plugin d’inscription lien méta-cours peut créer un nouveau groupe ou utiliser un groupe existant pour y ajouter tous les participants du cours source.';
$string['samemetacourse'] = 'Il n’est pas possible d’ajouter un lien méta-cours vers le même cours.';
$string['syncall'] = 'Synchroniser tous les utilisateurs inscrits';
$string['syncall_desc'] = 'Si ce réglage est activé, tous les utilisateurs inscrits sont synchronisés depuis le cours source, même s’ils n’y ont aucun rôle. Dans le cas contraire, seuls les utilisateurs avec au moins un rôle sont inscrits dans le cours cible.';
$string['unknownmetacourse'] = 'Nom abrégé du méta-cours inconnu';
$string['wscannotcreategroup'] = 'Pas les permissions requises pour créer un groupe dans le cours lié, d’ID {$a}';
$string['wsinvalidcourse'] = 'Le cours d’ID {$a} n’existe pas ou vous n’avez pas les permissions requises pour ajouter un lien méta-cours.';
$string['wsinvalidmetacourse'] = 'Le méta-cours d’ID {$a} n’existe pas ou ou vous n’avez pas les permissions requises pour ajouter une instance d’inscription.';
$string['wsnoinstancesspecified'] = 'Aucune instance spécifiée';
