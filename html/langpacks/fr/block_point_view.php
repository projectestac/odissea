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
 * Strings for component 'block_point_view', language 'fr', version '4.4'.
 *
 * @package     block_point_view
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminpix'] = 'Défaut (site) :';
$string['blacktrack'] = 'Piste noire';
$string['blockdisabled'] = '<h3 class="text-danger">Le bloc est désactivé</h3>';
$string['blockonlyonmainpage'] = 'Ce bloc n’affichera pas les traces de difficulté ni les réactions sur les pages du module de cours car il n’est pas affiché dans les sous-contextes de ce cours.';
$string['bluetrack'] = 'Piste bleue';
$string['cleanupcoursereactions'] = 'Nettoyer les <b>{$a}</b> réactions du cours';
$string['cleanupreactions'] = 'Nettoyer les réactions';
$string['cleanupreactions_help'] = 'Nettoyer (supprimer) les réactions des utilisateurs qui ne sont plus inscrits au cours';
$string['cleanupreactionsconfirmation'] = 'Voulez-vous vraiment effacer (supprimer) les réactions des utilisateurs qui ne sont plus inscrits au cours <b>{$a}</b> ? Cette action ne peut pas être annulée.';
$string['confirmshowinsubcontexts'] = 'Voulez-vous vraiment rendre ce bloc visible dans les sous-contextes ?<br>
(Ceci peut être inversé dans la configuration du bloc, dans « Où ce bloc apparaît »).';
$string['contentinputlabel'] = 'Contenu du bloc';
$string['contentinputlabel_help'] = 'Ce champ permet de modifier le texte visible dans le bloc. S’il est vide, le bloc sera invisible pour les étudiants.';
$string['customemoji'] = 'Émojis personnalisés';
$string['customemoji_help'] = 'Des émojis personnalisés à utiliser comme réactions peuvent être définis ici.<h5 class="text-danger">Important :</h5>Nommer les fichiers <b><code>[nom_emoji].png</code></b> pour les émojis : <code>easy.png</code>, <code>better.png</code> et <code>hard.png</code>. Les groupes d’émojis sont aussi nécessaires : <b><code>group_[initiales_des_emoji].png</code></b>, par exemple : <code>group_EB.png</code> pour le groupe des réactions Easy et Better. Ne pas oublier le fichier <b><code>group_.png</code></b> pour l’image de « Aucun vote ». La taille recommandée des images est de 200x200 pour les émojis et 400x200 pour les groupes.<br/><br/>11 fichiers attendus : <code>easy.png</code>, <code>better.png</code>, <code>hard.png</code>, <code>group_.png</code>, <code>group_E.png</code>, <code>group_B.png</code>, <code>group_H.png</code>, <code>group_EB.png</code>, <code>group_EH.png</code>, <code>group_BH.png</code> et <code>group_EBH.png</code>';
$string['custompix'] = 'Personnalisé :';
$string['defaultpix'] = 'Défaut :';
$string['defaulttextbetter'] = 'Je m’améliore !';
$string['defaulttextcontent'] = 'Ce plugin offre la possibilité de réagir et de donner des niveaux de difficulté aux activités.</br></br>Ce plugin est développé par <a href="mailto:q.fombaron@outlook.fr?subject=%22Point%20of%20view%22%20Moodle%20plugin%20-%20Feedback">Quentin Fombaron</a>.<br/><br/>Vous pouvez modifier ou effacer ce texte dans le menu de configuration du bloc.<br/><br/>';
$string['defaulttexteasy'] = 'Facile !';
$string['defaulttexthard'] = 'Dur dur…';
$string['delete_custom_pix'] = 'Supprimer les émojis personnalisés';
$string['deleteemojiconfirmation'] = 'Voulez-vous vraiment supprimer les émojis personnalisés pour ce bloc ? Cela supprimera les émojis actuellement enregistrés et les fichiers dans la zone ci-dessous. Cette action est irréversible.';
$string['disable_type'] = 'Désactiver tous les <b>{$a}</b>';
$string['disableall'] = 'Tout désactiver dans <b>{$a}</b>';
$string['emojidesc'] = 'Description de l’émoji';
$string['emojidesc_help'] = 'Texte personnalisé qui sera affiché au survol de la réaction';
$string['emojitouse'] = 'Émoji à utiliser';
$string['emojitouse_help'] = 'Choisir les émojis à utiliser comme réactions dans ce cours.<br>Vous pouvez ajouter vos propres émojis personnalisés en sélectionnant « Personnalisé ».';
$string['enable_disable_section'] = 'Tout activer/désactiver dans cette section';
$string['enable_disable_section_help'] = 'Activer ou désactiver les réactions pour tous les modules dans cette section.';
$string['enable_disable_type'] = 'Tout activer/désactiver pour ce type de module';
$string['enable_disable_type_help'] = 'Activer ou désactiver les réactions pour tous les modules de ce type dans ce cours.';
$string['enable_type'] = 'Activer tous les <b>{$a}</b>';
$string['enableall'] = 'Tout activer dans <b>{$a}</b>';
$string['enablecustompix'] = 'Utiliser des émojis personnalisés';
$string['enabledifficulties'] = 'Activer les <b>Pistes de difficulté</b>';
$string['enableforfuturemodules'] = 'Activer pour les futurs modules';
$string['enableforfuturemodules_help'] = 'Activer automatiquement les réactions pour les nouveaux modules créés dans ce cours.';
$string['enablepoint_views'] = 'Activer les <b>Réactions</b>';
$string['errorfilemanager'] = '<b>ERREUR</b> : le nom du fichier <b>{$a}.png</b> n’est pas conforme.';
$string['errorfilemanagerempty'] = 'Veuillez fournir au moins un fichier.';
$string['eventreactionadded'] = 'Réaction ajoutée';
$string['eventreactionremoved'] = 'Réaction retirée';
$string['eventreactionupdated'] = 'Réaction modifiée';
$string['forthismodule'] = 'Pour ce module ({$a}) :';
$string['greentrack'] = 'Piste verte';
$string['header_activities'] = 'Configuration des Réactions et Pistes de difficulté';
$string['header_images'] = 'Configuration des émojis';
$string['highlightactivityrows'] = 'Mettre en surbrillance les lignes d’activité sur la page du cours';
$string['highlightactivityrows_help'] = 'Afficher un arrière-plan gris dégradé lors du survol des activités sur la page du cours. Ceci est destiné à faciliter l’alignement vertical des réactions aux activités, mais peut être désactivé en toute sécurité.';
$string['module'] = 'Module';
$string['noactivity'] = 'Aucune activité';
$string['nonetrack'] = 'Aucune piste';
$string['noreactionsyet'] = 'Il n’y a pas encore de module de cours avec réactions.';
$string['pluginname'] = 'Point de vue';
$string['point_view:access_overview'] = 'Voir le détail des réactions';
$string['point_view:addinstance'] = 'Ajouter une instance du bloc Point de vue';
$string['point_view:addreaction'] = 'Voir la zone de réactions et ajouter des réactions';
$string['point_view:myaddinstance'] = 'Ajouter une instance du bloc Point de vue sur le tableau de bord';
$string['privacy:metadata:activity_votes_database:cmid'] = 'ID de l’activité';
$string['privacy:metadata:activity_votes_database:courseid'] = 'ID du cours';
$string['privacy:metadata:activity_votes_database:userid'] = 'ID de l’utilisateur';
$string['privacy:metadata:activity_votes_database:vote'] = 'Vote : 1 (Facile !), 2 (Je m’améliore !), 3 (Dur dur…)';
$string['privacy:metadata:block_point_view'] = 'Le bloc Point de vue enregistre le vote des utilisateurs sur chaque activité.';
$string['reactions'] = 'Réactions';
$string['reactionscleanedupsuccessfully'] = 'Les réactions ont été effacées avec succès.';
$string['reactionsdetails'] = 'Détail des réactions';
$string['reactionsresetsuccessfully'] = 'Les réactions ont été correctement réinitialisées.';
$string['reactionsunavailable'] = 'Vous ne pouvez pas ajouter ou retirer de réaction pour ce module.';
$string['redtrack'] = 'Piste rouge';
$string['resetcoursereactions'] = 'Réinitialiser les réactions du cours <b>{$a}</b>';
$string['resetreactions'] = 'Réinitialiser les réactions';
$string['resetreactions_help'] = 'Réinitialiser (supprimer) toutes les réactions des utilisateurs dans ce cours.';
$string['resetreactionsbymodule'] = 'Réinitialiser les réactions par module :';
$string['resetreactionsconfirmation'] = 'Voulez-vous vraiment réinitialiser (supprimer) toutes les réactions des utilisateurs dans <b>{$a}</b> ? Cette action est irréversible.';
$string['resetreactionsheader'] = 'Effacer ou réinitialiser les réactions';
$string['resetreactionsonmoduleconfirmation'] = 'Voulez-vous vraiment réinitialiser (supprimer) toutes les réactions des utilisateurs de ce module ? Cette action ne peut pas être annulée.';
$string['showinsubcontexts'] = 'Afficher également ce bloc dans les sous-contextes.';
$string['showotherreactions'] = 'Montrer les réactions des autres utilisateurs';
$string['showotherreactions_help'] = 'Permettre aux étudiants de voir le nombre de réactions de chaque type par les autres utilisateurs pour chaque module.';
$string['totalreactions'] = 'Réactions totales : {$a}';
