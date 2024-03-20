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
 * Strings for component 'qtype_ddimageortext', language 'fr', version '4.1'.
 *
 * @package     qtype_ddimageortext
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoredropzones'] = 'Emplacement pour {no} zones de glisser-déposer supplémentaires';
$string['addmoreimages'] = 'Emplacement pour {no} éléments à glisser-déposer supplémentaires';
$string['answer'] = 'Réponse';
$string['bgimage'] = 'Image de fond';
$string['blank'] = 'vide';
$string['correctansweris'] = 'La réponse correcte est : {$a}';
$string['deletedchoice'] = '[Choix supprimé]';
$string['draggableimage'] = 'Image à glisser-déposer';
$string['draggableitem'] = 'Élément à glisser-déposer';
$string['draggableitemheader'] = 'Élément à glisser-déposer {$a}';
$string['draggableitems'] = 'Éléments à glisser-déposer';
$string['draggableitemtype'] = 'Type';
$string['draggableword'] = 'Texte à glisser-déposer';
$string['dropbackground'] = 'Image de fond sur laquelle glisser-déposer des éléments';
$string['dropzone'] = 'Zone de glisser-déposer {$a}';
$string['dropzoneheader'] = 'Zones de glisser-déposer';
$string['formerror_disallowedtags'] = 'Seules les balises « {$a} » sont permises dans ce texte à glisser-déposer.';
$string['formerror_dragrequired'] = 'Vous devez ajouter à cette question au moins un élément à glisser-déposer.';
$string['formerror_droprequired'] = 'Vous devez définir pour cette question au moins une zone de glisser-déposer.';
$string['formerror_multipledraginstance'] = 'Vous avez sélectionné l’image {$a} plus d’une fois comme choix correct pour une zone de glisser-déposer, mais elle n’est pas signalée comme un élément réutilisable pour glisser-déposer.';
$string['formerror_multipledraginstance2'] = 'Vous avez sélectionné cette image plus d’une fois comme choix correct pour une zone de glisser-déposer, mais elle n’est pas signalée comme un élément réutilisable pour glisser-déposer.';
$string['formerror_noallowedtags'] = 'Les balises HTML ne sont pas permises dans ce texte alternatif de l’image à glisser-déposer.';
$string['formerror_nobgimage'] = 'Veuillez sélectionner une image à utiliser comme fond pour la zone de glisser-déposer.';
$string['formerror_nofile'] = 'Veuillez déposer ou sélectionner un fichier à utiliser ici-';
$string['formerror_nofile3'] = 'Veuillez sélectionner un fichier image ou supprimer le label associé et décocher la case réutilisable.';
$string['formerror_noimageselected'] = 'Veuillez sélectionner un élément à glisser-déposer comme choix correct pour cette zone de glisser-déposer.';
$string['formerror_notintxleft'] = 'La coordonnée x doit être un nombre entier.';
$string['formerror_notintytop'] = 'La coordonnée y doit être un nombre entier.';
$string['formerror_noxleft'] = 'Veuillez fournir une valeur pour la coordonnée x du coin supérieur gauche de cette zone de glisser-déposer. Vous pouvez le faire au moyen du pointeur ou saisir les coordonnées manuellement.';
$string['formerror_noytop'] = 'Veuillez fournir une valeur pour la coordonnée x du coin supérieur gauche de cette zone de glisser-déposer. Vous pouvez le faire au moyen du pointeur ou saisir les coordonnées manuellement.';
$string['infinite'] = 'Réutilisable';
$string['label'] = 'Texte';
$string['nolabel'] = 'Pas de label texte';
$string['pleasedraganimagetoeachdropregion'] = 'Votre réponse n’est pas complète ; veuillez glisser un élément sur chaque zone.';
$string['pluginname'] = 'Glisser-déposer sur une image';
$string['pluginname_help'] = 'Les questions glisser-déposer sur une image demandent au participant de glisser-déposer des images ou des textes sur des zones de dépôts définies sur une image de fond. Les éléments à glisser-déposer peuvent être groupés, de sorte que les éléments d’un même groupe aient la même couleur que les zones de dépôt. Les éléments marqués comme réutilisables peuvent être déposés sur une ou plusieurs zones.';
$string['pluginname_link'] = 'question/type/ddimageortext';
$string['pluginnameadding'] = 'Ajout d’un glisser-déposer sur une image';
$string['pluginnameediting'] = 'Modification d’un glisser-déposer sur une image';
$string['pluginnamesummary'] = 'Les images ou les étiquettes sont glissés et déposés dans des zones de dépôt sur une image de fond.

À noter : ce type de question n’est pas accessible pour les personnes malvoyantes.';
$string['previewareaheader'] = 'Aperçu';
$string['previewareamessage'] = 'Sélectionnez un fichier image de fond, définissez des éléments à glisser-déposer ainsi que des zones de dépôt sur l’image de fond où ces éléments doivent être placés.';
$string['privacy:metadata'] = 'Le plugin de type de question Glisser-déposer sur une image permet aux auteurs de questions d’enregistrer des préférences par défaut.';
$string['privacy:preference:defaultmark'] = 'Le nombre de points par défaut pour une question.';
$string['privacy:preference:penalty'] = 'La pénalité pour chaque tentative incorrecte lorsque les questions sont utilisées dans le comportement « Interactif avec essais multiples » ou « Adaptatif ».';
$string['privacy:preference:shuffleanswers'] = 'Si les réponses doivent être mélangées automatiquement.';
$string['refresh'] = 'Rafraîchir l’aperçu';
$string['shuffleimages'] = 'Mélanger les éléments déplaçables lors de chaque tentative';
$string['summarisechoice'] = '{$a->no}. {$a->text}';
$string['summarisechoiceno'] = 'Élément {$a}';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Zone de dépôt {$a}';
$string['xleft'] = 'Gauche';
$string['ytop'] = 'Haut';
