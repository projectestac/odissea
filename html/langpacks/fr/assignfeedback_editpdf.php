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
 * Strings for component 'assignfeedback_editpdf', language 'fr', version '4.5'.
 *
 * @package     assignfeedback_editpdf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Ajouter à la liste rapide';
$string['annotationcolour'] = 'Couleur d’annotation';
$string['black'] = 'Noir';
$string['blue'] = 'Bleu';
$string['cannotopenpdf'] = 'Impossible d’ouvrir le fichier PDF. Le fichier est peut-être corrompu ou dans un format non pris en charge.';
$string['clear'] = 'Effacer';
$string['colourpicker'] = 'Nuancier';
$string['command'] = 'Commande :';
$string['comment'] = 'Commentaires';
$string['commentcolour'] = 'Couleur de commentaire';
$string['commentcontextmenu'] = 'Menu contextuel de commentaire';
$string['commentindex'] = 'Index des commentaires';
$string['commentlabel'] = '{$a->pnum}.{$a->cnum}';
$string['couldnotsavepage'] = 'Impossible d’enregistrer la page {$a}';
$string['currentstamp'] = 'Tampon';
$string['default'] = 'Activé par défaut';
$string['default_help'] = 'Si ce réglage est activé, cette méthode de feedback sera activée par défaut pour tous les nouveaux devoirs.';
$string['deleteannotation'] = 'Supprimer l’annotation';
$string['deletecomment'] = 'Supprimer le commentaire';
$string['deletefeedback'] = 'Supprimer le feedback PDF';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'Télécharger le feedback PDF';
$string['draftchangessaved'] = 'Brouillon des annotations enregistré';
$string['drag'] = 'Glisser';
$string['editpdf'] = 'Annotation PDF';
$string['editpdf_help'] = 'Annoter directement dans le navigateur les devoirs remis et produire un PDF modifié téléchargeable.';
$string['enabled'] = 'Annoter PDF';
$string['enabled_help'] = 'Si ce réglage est activé, l’enseignant peut créer des fichiers PDF annotés lors de l’évaluation des devoirs. Ceci permet à l’enseignant d’ajouter des commentaires, des croquis et des tampons directement dans le travail de l’étudiant. L’annotation s’effectue dans le navigateur, sans nécessiter d’autre logiciel.';
$string['errorgenerateimage'] = 'Erreur lors de la création de l’image au moyen de GhostScript. Information de débogage : {$a}';
$string['errorpdfpage'] = 'Une erreur est survenue lors de la génération de cette page.';
$string['expcolcomments'] = 'Déplier/replier tous les commentaires';
$string['filter'] = 'Filtrer les commentaires…';
$string['generatefeedback'] = 'Générer le feedback PDF';
$string['generatingpdf'] = 'Génération du PDF…';
$string['gotopage'] = 'Aller à la page';
$string['green'] = 'Vert';
$string['gsimage'] = 'Image de test Ghostscript';
$string['highlight'] = 'Surlignage';
$string['jsrequired'] = 'L’annotation de documents PDF requiert l’activation de Javascript. Veuillez activer Javascript dans votre navigateur si vous désirez utiliser cette fonctionnalité.';
$string['launcheditor'] = 'Lancer l’éditeur PDF…';
$string['line'] = 'Ligne';
$string['loadingeditor'] = 'Chargement de l’éditeur PDF';
$string['navigatenext'] = 'Page suivante (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['navigateprevious'] = 'Page précédente (Alt/Shift-Alt/Ctrl-Option + {$a})';
$string['output'] = 'Sortie :';
$string['oval'] = 'Ovale';
$string['pagenumber'] = 'Page {$a}';
$string['pagexofy'] = 'Page {$a->page} sur {$a->total}';
$string['partialwarning'] = 'Certains des fichiers du travail remis ne peuvent être consultés qu’après téléchargement direct.';
$string['pathtogserror'] = 'Le chemin d’accès pour ghostscript n’est pas correctement configuré : {$a}';
$string['pathtogspathdesc'] = 'L’annotation des PDF requiert la définition du chemin d’accès à <em>ghostscript</em> dans {$a}.';
$string['pen'] = 'Plume';
$string['pluginname'] = 'Annotation PDF';
$string['preparesubmissionsforannotation'] = 'Préparer les travaux remis pour annotation';
$string['privacy:metadata:colourpurpose'] = 'Couleur du commentaire ou de l’annotation';
$string['privacy:metadata:conversionpurpose'] = 'Les fichiers sont convertis en PDF pour permettre les annotations.';
$string['privacy:metadata:filepurpose'] = 'Enregistre un PDF annoncé avec des feedback pour l’utilisateur.';
$string['privacy:metadata:rawtextpurpose'] = 'Enregistre du texte pur pour des données rapides.';
$string['privacy:metadata:tablepurpose'] = 'Enregistre les commentaires en liste rapide spécifiés par l’enseignant';
$string['privacy:metadata:userid'] = 'L’identifiant de l’utilisateur';
$string['privacy:path'] = 'Feedback PDF';
$string['rectangle'] = 'Rectangle';
$string['red'] = 'Rouge';
$string['result'] = 'Résultat :';
$string['rotateleft'] = 'Rotation anti-horaire de 90°';
$string['rotateright'] = 'Rotation de 90°';
$string['searchcomments'] = 'Rechercher des commentaires';
$string['select'] = 'Sélectionner';
$string['stamp'] = 'Tampon';
$string['stamppicker'] = 'Sélecteur de tampon';
$string['stamps'] = 'Tampons';
$string['stampsdesc'] = 'Les tampons doivent être des fichiers image (taille recommandée : 40x40 pixels). Ces images peuvent être utilisées avec l’outil tampon pour annoter le PDF.';
$string['test_doesnotexist'] = 'Le chemin d’accès à l’exécutable GhostScript pointe vers un fichier inexistant';
$string['test_empty'] = 'Le chemin Ghostscript est vide. Veuillez saisir un chemin correct';
$string['test_isdir'] = 'Le chemin d’accès à l’exécutable GhostScript pointe vers un dossier. Veuillez indiquer le nom de l’exécutable dans le chemin spécifié';
$string['test_notestfile'] = 'Le PDF de test est manquant';
$string['test_notexecutable'] = 'Le chemin d’accès à l’exécutable GhostScript pointe vers un fichier qui n’est pas exécutable';
$string['test_ok'] = 'Le chemin d’accès à l’exécutable GhostScript semble correct. Veuillez vérifier que vous voyez le message dans l’image ci-dessous';
$string['testgs'] = 'Tester le chemin d’accès à <em>ghostscript</em>';
$string['tool'] = 'Outil';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'Afficher le PDF annoté…';
$string['white'] = 'Blanc';
$string['yellow'] = 'Jaune';
