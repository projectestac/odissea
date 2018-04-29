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
 * Strings for component 'tool_usertours', language 'fr', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_usertours
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = 'Au-dessus';
$string['actions'] = 'Actions';
$string['appliesto'] = 'S\'applique à';
$string['backdrop'] = 'Afficher avec image de fond';
$string['backdrop_help'] = 'Il est possible d\'utiliser une image de fond pour faire ressortir la partie de la page que vous voulez désigner.

Les images de fond ne sont pas compatibles avec certaines partie de la page, comme la barre de navigation.';
$string['below'] = 'Au-dessous';
$string['block'] = 'Bloc';
$string['block_named'] = 'Bloc appelé « {$a} »';
$string['cachedef_stepdata'] = 'Liste des étapes de la visite guidée';
$string['cachedef_tourdata'] = 'Liste des informations de visite guidée qui sont récupérées sur toutes les pages';
$string['confirmstepremovalquestion'] = 'Voulez-vous vraiment supprimer cette étape ?';
$string['confirmstepremovaltitle'] = 'Confirmer la suppression de l\'étape';
$string['confirmtourremovalquestion'] = 'Voulez-vous vraiment supprimer cette visite guidée ?';
$string['confirmtourremovaltitle'] = 'Confirmer la suppression de la visite guidée';
$string['content'] = 'Contenu';
$string['content_heading'] = 'Contenu';
$string['content_help'] = 'La description d\'une étape peut être ajoutée en texte pur ou en utilisant la syntaxe multilingue de Moodle (pour utilisation avec le filtre multilingue).

Il est aussi possible d\'indiquer un identifiant de chaîne de caractères, sous la forme « identifiant,composant » (sans espace après la virgule).';
$string['cssselector'] = 'Sélecteur CSS';
$string['defaultvalue'] = 'Défaut ({$a})';
$string['delay'] = 'Délai avant d\'afficher l\'étape';
$string['delay_help'] = 'Un délai optionnel peut être ajouté avant l\'affichage de l\'étape.

Ce délai est défini en millisecondes.';
$string['description'] = 'Description';
$string['done'] = 'Terminé';
$string['editstep'] = 'Modification de « {$a} »';
$string['enabled'] = 'Activé';
$string['endtour'] = 'Terminer la visite guidée';
$string['event_step_shown'] = 'Étape affichée';
$string['event_tour_ended'] = 'Visite guidée terminée';
$string['event_tour_reset'] = 'Visite guidée relancée';
$string['event_tour_started'] = 'Visite guidée commencée';
$string['exporttour'] = 'Exporter la visite guidée';
$string['filter_header'] = 'Filtres les visites guidées';
$string['filter_help'] = 'Il est possible de choisir à quelles conditions la visite guidée sera affichée. Tous les filtres doivent correspondre à une visite guidée à afficher à l\'utilisateur concerné.';
$string['filter_role'] = 'Rôle';
$string['filter_role_help'] = 'N\'afficher la visite guidée qu\'aux utilisateurs avec l\'un des rôles indiqués.';
$string['filter_theme'] = 'Thème';
$string['filter_theme_help'] = 'N\'afficher la visite guidée que lorsque l\'utilisateur utilise l\'un des thèmes indiqués.';
$string['importtour'] = 'Importer une visite guidée';
$string['left'] = 'À gauche';
$string['modifyshippedtourwarning'] = 'Cette visite guidée est fournie avec Moodle. Toutes les modifications que vous y apportez sont susceptibles d\'être écrasées lors de la prochaine mise à jour de votre plateforme.';
$string['movestepdown'] = 'Déplacer l\'étape vers le bas';
$string['movestepup'] = 'Déplacer l\'étape vers le haut';
$string['movetourdown'] = 'Déplacer la visite guidée vers le bas';
$string['movetourup'] = 'Déplacer la visite guidée vers le haut';
$string['name'] = 'Nom';
$string['newstep'] = 'Nouvelle étape';
$string['newtour'] = 'Créer une visite guidée';
$string['next'] = 'Suivant';
$string['options_heading'] = 'Options';
$string['orphan'] = 'Afficher si la cible n\'est pas trouvée';
$string['orphan_help'] = 'Afficher l\'étape si la cible ne peut pas être trouvée sur la page.';
$string['pathmatch'] = 'Afficher si l\'URL correspond';
$string['pathmatch_help'] = 'Les visites guidées seront affichées sur toutes les pages dont l\'URL correspond à cette valeur.

Le caractère % peut être utilisé comme joker pour remplacer une chaîne de caractères quelconque. Voici quelques exemples :

* /my/% - correspond au Tableau de bord
* /course/view.php?id=2 - correspond à un cours spécifique
* /mod/forum/view.php% - correspond à la liste des forums de discussion
* /user/profile.php% - correspond au profil des utilisateurs

Pour afficher une visite guidée sur la page d\'accueil, il faut utiliser la valeur « FRONTPAGE ».';
$string['pausetour'] = 'Pause';
$string['placement'] = 'Position';
$string['placement_help'] = 'Une étape peut être affichée au-dessus, au-dessous, à gauche ou à droite de la cible. Un positionnement au-dessus ou au-dessous est recommandé, car s\'adaptant mieux aux appareils mobiles.

Si l\'étape ne tient pas dans la page à l\'emplacement choisi, elle sera automatiquement déplacée.';
$string['pluginname'] = 'Visites guidées';
$string['reflex'] = 'Continuer au clic';
$string['reflex_help'] = 'Passer à la prochaine étape lors d\'un clic sur la cible.';
$string['resettouronpage'] = 'Relancer la visite guidée sur cette page';
$string['resumetour'] = 'Reprendre';
$string['right'] = 'À droite';
$string['select_block'] = 'Sélectionner un bloc';
$string['selector_defaulttitle'] = 'Saisir un titre descriptif';
$string['selectordisplayname'] = 'Un sélecteur CSS correspondant à « {$a} »';
$string['selecttype'] = 'Choisir un type d\'étape';
$string['sharedtourslink'] = 'Dépôt des visites guidées';
$string['skip'] = 'Passer';
$string['target'] = 'Cible';
$string['target_block'] = 'Bloc';
$string['target_heading'] = 'Cible de l\'étape';
$string['target_selector'] = 'Sélecteur';
$string['target_selector_targetvalue'] = 'Sélecteurs CSS';
$string['target_selector_targetvalue_help'] = 'Un sélecteur CSS peut être utilisé pour cibler presque n\'importe quel élément d\'une page. Le sélecteur approprié peut être facilement trouvé à l\'aide des outils de développement de votre navigateur.';
$string['targettype'] = 'Type de cible';
$string['targettype_help'] = 'Chaque étape est associée à une partie de la page, la cible. Les types de cible sont :

* Bloc – pour afficher l\'étape suivante à proximité d\'un bloc indiqué
* Sélecteur CSS – pour définir précisément la zone de la cible au moyen de CSS
* Afficher au milieu de la page – pour une étape ne nécessitant pas d\'être associée à une partie spécifique de la page';
$string['target_unattached'] = 'Afficher au milieu de la page';
$string['title'] = 'Titre';
$string['title_help'] = 'Le titre d\'une étape peut être ajouté en texte pur ou en utilisant la syntaxe multilingue de Moodle (pour utilisation avec le filtre multilingue).

Il est aussi possible d\'indiquer un identifiant de chaîne de caractères, sous la forme « identifiant,composant » (sans espace après la virgule).';
$string['tour1_content_addingblocks'] = 'En fait, réfléchissez à deux fois avant d\'ajouter des blocs sur vos pages. Les blocs ne sont pas affichés dans l\'App mobile Moodle, donc de façon générale, il est beaucoup mieux de s\'assurer que votre plateforme fonctionne bien sans aucun bloc.';
$string['tour1_content_blockregion'] = 'Il reste encore une région pour les blocs à cet endroit. Nous vous recommandons de retirer complètement les blocs Navigation et Administration, puisque toutes leurs fonctionnalités sont disponibles ailleurs dans le thème Boost.';
$string['tour1_content_customisation'] = 'Pour personnaliser l\'apparence de votre plateforme et de sa page d\'accueil, utilisez le menu des réglages au coin de cette entête. Activez le mode édition maintenant.';
$string['tour1_content_end'] = 'Vous venez de faire une visite guidée, une nouvelle fonctionnalité de Moodle 3.2. Cette visite ne s\'affichera plus, à moins que vous ne la relanciez au moyen du lien dans le pied de page. En tant qu\'administrateur, vous pouvez bien sûr créer vos propres visites guidées comme celle-ci !';
$string['tour1_content_navigation'] = 'La navigation principale s\'effectue maintenant au moyen de ce tiroir de navigation. Son contenu s\'adapte au contexte dans lequel vous êtes sur la plateforme. Le bouton en haut permet de l\'afficher ou de le cacher.';
$string['tour1_content_welcome'] = 'Bienvenue au thème Boost pour Moodle 3.2. Si vous connaissez Moodle, vous trouverez que certaines choses paraissent différentes.';
$string['tour1_title_addingblocks'] = 'Ajout de blocs';
$string['tour1_title_blockregion'] = 'Région des blocs';
$string['tour1_title_customisation'] = 'Personnalisation';
$string['tour1_title_end'] = 'Fin de la visite guidée';
$string['tour1_title_navigation'] = 'Navigation';
$string['tour1_title_welcome'] = 'Bienvenue';
$string['tour2_content_addblock'] = 'En activant le mode édition, vous pouvez ajouter des blocs à partir du tiroir de navigation. Cependant, réfléchissez à deux fois avant d\'ajouter des blocs sur vos pages. Les blocs ne sont pas affichés dans l\'App mobile Moodle, et pour une meilleure expérience utilisateur de vos étudiants, il est beaucoup mieux de vous assurer que votre cours se passe bien sans aucun bloc.';
$string['tour2_content_addingblocks'] = 'Vous pouvez ajouter des blocs à cette page au moyen de ce bouton. Cependant, réfléchissez à deux fois avant d\'ajouter des blocs sur vos pages. Les blocs ne sont pas affichés dans l\'App mobile Moodle, et pour une meilleure expérience utilisateur de vos étudiants, il est beaucoup mieux de vous assurer que votre cours se passe bien sans aucun bloc.';
$string['tour2_content_customisation'] = 'Pour modifier les réglages du cours, utilisez le menu des réglages dans le coin de cette entête. Vous trouverez d\'autres menus de réglages similaires sur la page de chaque activité. Activez maintenant le mode édition.';
$string['tour2_content_end'] = 'Vous venez de faire une visite guidée, une nouvelle fonctionnalité de Moodle 3.2. Cette visite ne s\'affichera plus, à moins que vous ne la relanciez au moyen du lien dans le pied de page. L\'administrateur du site peut créer d\'autres visites guidées pour cette plateforme.';
$string['tour2_content_navigation'] = 'La navigation s\'effectue maintenant au moyen de ce tiroir de navigation. Le bouton en haut permet de l\'afficher ou de le cacher. Vous constaterez qu\'il s\'y trouver des liens vers les sections de votre cours.';
$string['tour2_content_opendrawer'] = 'Ouvrez maintenant le tiroir de navigation.';
$string['tour2_content_participants'] = 'Consultez la liste des participants ici. C\'est également ici que vous ajoutez ou retirez des étudiants.';
$string['tour2_content_welcome'] = 'Bienvenue au thème Boost pour Moodle 3.2. Si vous connaissez Moodle, vous trouverez que certaines choses paraissent différentes sur la page principale d\'un cours.';
$string['tour2_title_addblock'] = 'Ajouter un bloc';
$string['tour2_title_addingblocks'] = 'Ajout de blocs';
$string['tour2_title_customisation'] = 'Personnalisation';
$string['tour2_title_end'] = 'Fin de la visite guidée';
$string['tour2_title_navigation'] = 'Navigation';
$string['tour2_title_opendrawer'] = 'Ouvrir le tiroir de navigation';
$string['tour2_title_participants'] = 'Participants au cours';
$string['tour2_title_welcome'] = 'Bienvenue';
$string['tourconfig'] = 'Fichier de configuration de visite guidée à importer';
$string['tourisenabled'] = 'La visite est activée';
$string['tourlist_explanation'] = 'Il est possible de créer autant de visites guidées que désiré et de les activer pour diverses parties de Moodle. Une seule visite guidée peut être créée pour chaque page.';
$string['tour_resetforall'] = 'Le statut de la visite guidée a été relancé. La visite sera affichée de nouveau à tous les utilisateurs.';
$string['tours'] = 'Visites guidées';
$string['usertours'] = 'Visites guidées';
$string['usertours:managetours'] = 'Créer, modifier et supprimer des visites guidées';
$string['viewtour_edit'] = 'Il est possible de <a href="{$a->editlink}">modifier les réglages par défaut de la visite guidée</a> et d\'<a href="{$a->resetlink}">imposer l\'affichage de la visite guidée</a> une nouvelle fois à tous les utilisateurs.';
$string['viewtour_info'] = 'Voici la visite guidée « {$a->tourname} ». Elle s\'applique au chemin « {$a->path} ».';
