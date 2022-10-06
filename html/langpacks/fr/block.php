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
 * Strings for component 'block', language 'fr', branch 'MOODLE_38_STABLE'
 *
 * @package   block
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtodock'] = 'Déplacer vers le dock';
$string['anypagematchingtheabove'] = 'Toutes les pages correspondant aux critères ci-dessus';
$string['appearsinsubcontexts'] = 'Apparaît dans des sous-contextes';
$string['assignrolesinblock'] = 'Attribuer des rôles dans le bloc {$a}';
$string['blocksdrawertoggle'] = 'Afficher/cacher le tiroir des blocs';
$string['blocksettings'] = 'Réglages du bloc';
$string['bracketfirst'] = '{$a} (premier)';
$string['bracketlast'] = '{$a} (dernier)';
$string['configureblock'] = 'Configurer le bloc {$a}';
$string['contexts'] = 'Contextes de page';
$string['contexts_help'] = 'Les contextes sont des types de pages spécifiques où ce bloc peut être affiché, à l\'intérieur de l\'emplacement original. Il y a différentes options, suivant l\'emplacement initial du bloc et la page où vous vous trouvez. Par exemple, vous pouvez restreindre l\'affichage d\'un bloc sur les pages des forums d\'un cours en ajoutant le bloc dans ce cours (ce qui le fait s\'afficher sur toutes les sous-pages du cours), puis en allant dans un forum et en y modifiant les réglages du bloc pour qu\'il ne s\'affiche que dans les pages des forums.';
$string['createdat'] = 'Emplacement original du bloc';
$string['createdat_help'] = 'L\'emplacement où le bloc a été créé à l\'origine. Les réglages du bloc peuvent lui permettre d\'apparaître à différents emplacements (contextes) à l\'intérieur de l\'emplacement original. Par exemple, un bloc créé sur une page de cours peut être affiché dans les activités de ce cours. Un bloc créé sur la page d\'accueil peut être affiché sur tout le site.';
$string['defaultregion'] = 'Région par défaut';
$string['defaultregion_help'] = 'Les thèmes peuvent définir une ou plusieurs régions où les blocs peuvent s\'afficher. Ce réglage définit dans lesquelles de ces régions vous désirez que ce bloc s\'affiche par défaut. Le réglage peut être court-circuité sur des pages spécifiques, si nécessaire.';
$string['defaultweight'] = 'Poids par défaut';
$string['defaultweight_help'] = 'Le poids par défaut vous permet de choisir où vous voulez que le bloc s\'affiche dans la région choisie, plutôt vers le haut ou vers le bas. L\'emplacement définitif est calculé à partir de tous les blocs de la région (par exemple, un seul d\'entre eux peut être tout en haut). Cette valeur peut être court-circuitée sur des pages spécifiques, si nécessaire.';
$string['deleteblock'] = 'Supprimer le bloc {$a}';
$string['deleteblockcheck'] = 'Voulez-vous vraiment supprimer le bloc {$a} ?';
$string['deleteblockwarning'] = '<p>Vous êtes sur le point de supprimer un bloc affiché ailleurs.</p><p>Emplacement du bloc original : {$a->location}<br />Affichage sur des pages de types : {$a->pagetype}</p><p>Voulez-vous vraiment continuer ?</p>';
$string['deletecheck'] = 'Supprimer le bloc {$a} ?';
$string['dockblock'] = 'Mettre le bloc {$a} dans le dock';
$string['hideblock'] = 'Cacher le bloc {$a}';
$string['hidedockpanel'] = 'Cacher le panneau du dock';
$string['hidepanel'] = 'Cacher le dock';
$string['moveblock'] = 'Déplacer le bloc {$a}';
$string['moveblockafter'] = 'Déplacer le bloc après le bloc {$a}';
$string['moveblockbefore'] = 'Déplacer le bloc avant le bloc {$a}';
$string['moveblockinregion'] = 'Déplacer le bloc vers la région {$a}';
$string['movingthisblockcancel'] = 'Déplacement de ce bloc ({$a})';
$string['myblocks'] = 'Mes blocs';
$string['onthispage'] = 'Sur cette page';
$string['pagetypes'] = 'Types de page';
$string['pagetypewarning'] = 'Le type de page indiqué précédemment n\'est plus disponible. Veuillez choisir ci-dessous le type de page adéquat.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Enregistre quand l\'utilisateur a placé un bloc dans le dock';
$string['privacy:metadata:userpref:hiddenblock'] = 'Enregistre quand l\'utilisateur a replié/caché un bloc';
$string['privacy:request:blockisdocked'] = 'Indique si un bloc a été placé dans le dock';
$string['privacy:request:blockishidden'] = 'Indique si un bloc a été replié/caché';
$string['region'] = 'Région';
$string['restrictpagetypes'] = 'Afficher sur les types de page';
$string['showblock'] = 'Montrer le bloc {$a}';
$string['showoncontextandsubs'] = 'Afficher sur « {$a} » et toutes les sous-pages';
$string['showoncontextonly'] = 'Afficher sur « {$a} » seulement';
$string['showonentiresite'] = 'Afficher sur tout le site';
$string['showonfrontpageandsubs'] = 'Afficher sur la page d\'accueil et sur les pages ajoutées à la page d\'accueil';
$string['showonfrontpageonly'] = 'Afficher sur la page d\'accueil seulement';
$string['subpages'] = 'Sélectionner pages';
$string['thisspecificpage'] = 'Cette page spécifique';
$string['undockall'] = 'Tout retirer du dock';
$string['undockblock'] = 'Ôter du dock le bloc {$a}';
$string['undockitem'] = 'Retirer cet élément du dock';
$string['visible'] = 'Visible';
$string['weight'] = 'Poids';
$string['wherethisblockappears'] = 'Où ce bloc apparaît';
