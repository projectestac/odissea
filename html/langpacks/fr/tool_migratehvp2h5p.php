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
 * Strings for component 'tool_migratehvp2h5p', language 'fr', version '3.11'.
 *
 * @package     tool_migratehvp2h5p
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempted'] = 'Utilisateurs ayant effectué des tentatives';
$string['cannot_migrate'] = 'Impossible de migrer l\'activité';
$string['contenttype'] = 'Type de contenu';
$string['copy2cb'] = 'Ces contenus doivent-ils être ajoutés à la banque de contenus ?';
$string['copy2cb_no'] = 'Non, ils doivent être créés uniquement dans l\'activité.';
$string['copy2cb_yeswithlink'] = 'Oui, et un lien vers ces fichiers doit être utilisé dans l\'activité';
$string['copy2cb_yeswithoutlink'] = 'Oui, mais une copie sera utilisée dans l\'activité (les changements dans la banque de contenu ne seront pas répercutés dans l\'activité)';
$string['error_contenttypeh5p_disabled'] = 'Le type banque de contenu H5P est désactivé. Il doit être activé pour migrer les activités de « mod_hvp » et les ajouter également à la banque de contenu. Vous pouvez activer ce type de contenu à partir de « Site administration | Plugins | Content bank | Manage
types de contenu » ou exécuter à nouveau l\'outil de migration et sélectionner « Non, ils doivent être créés uniquement dans l\'activité ». (ou « copy2cb=0 » si vous utilisez le CLI) pour éviter de créer des fichiers dans la banque de contenu.';
$string['error_modh5pactivity_disabled'] = 'L\'activité H5P est désactivée. Elle doit être activée pour migrer les activités de « mod_hvp »';
$string['event_hvp_migrated'] = 'mod_hvp migré vers mod_h5pactivity';
$string['graded'] = 'Utilisateurs notés';
$string['hvpactivities'] = 'Activités mod_hvp en attente';
$string['id'] = 'Identifiant';
$string['keeporiginal'] = 'Sélectionner l\'action à effectuer concernant l\'activité d\'origine une fois la migration effectuée';
$string['keeporiginal_delete'] = 'Supprimer l\'activité d\'origine';
$string['keeporiginal_hide'] = 'Cacher l\'activité d\'origine';
$string['keeporiginal_nothing'] = 'Laisser l\'activité originale telle quelle';
$string['migrate'] = 'Migrer';
$string['migrate_fail'] = 'Erreur lors de la migration de l\'activité hvp avec l\'identifiant {$a}';
$string['migrate_gradesoverridden'] = 'L\'activité mod_hvp originale « {$a->name} », avec l\'identifiant {$a->id}, a migré avec succès. Cependant, certaines informations de notation ont été remplacées, telles que le feedback, qui n\'a pas été migré parce que l\'activité originale est configurée avec une note maximale invalide (elle doit être supérieure à 0 pour pouvoir être transférée dans le carnet de notes).';
$string['migrate_gradesoverridden_notdelete'] = 'L\'activité mod_hvp originale  « {$a->name} », avec l\'identifiant {$a->id}, a migré avec succès. Cependant, certaines informations de notation ont été remplacées, comme le feedback, qui n\'a pas été migré parce que l\'activité originale est configurée avec une note maximale invalide (elle doit être supérieure à 0 pour pouvoir être transférée dans le carnet de notes). L\'activité originale a été masquée au lieu d\'être supprimée.';
$string['migrate_success'] = 'L\'activité Hvp avec l\'Identifiant {$a} a migré avec succès';
$string['nohvpactivities'] = 'Il n\'y a aucune activité mod_hvp à migrer vers mod_h5pactivity.';
$string['pluginname'] = 'Migrer le contenu de mod_hvp vers mod_h5pactivity';
$string['privacy:metadata'] = 'La migration du contenu de mod_hvp vers mod_h5pactivity ne stocke aucune donnée personnelle';
$string['savedstate'] = 'État enregistré';
$string['selecthvpactivity'] = 'Sélectionner l\'activité {$a} mod_hvp';
$string['settings'] = 'Paramètres de migration';
