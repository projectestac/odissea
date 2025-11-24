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
 * Strings for component 'url', language 'fr', version '4.5'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowvariables'] = 'Permettre les variables d’URL';
$string['allowvariables_desc'] = 'Permet d’ajouter des variables aux URLs. Les variables permettent de passer des informations internes, comme le nom d’utilisateur, dans l’URL. Attention aux risques potentiels pour la vie privée lors de l’utilisation de cette fonction.';
$string['chooseavariable'] = 'Sélectionner une variable…';
$string['clicktoopen'] = 'Cliquer sur {$a} pour ouvrir la ressource.';
$string['configdisplayoptions'] = 'Sélectionner toutes les options à mettre à disposition des utilisateurs. Les réglages existants ne sont pas modifiés. Vous pouvez sélectionner plusieurs champs simultanément.';
$string['configframesize'] = 'Cette valeur est la hauteur (en pixels) du cadre contenant la navigation. Elle est utilisée quand une page web ou un fichier déposé est affiché dans un cadre.';
$string['configrolesinparams'] = 'Activer cette option rendre disponibles les noms de rôles (des réglages du cours) comme variables pour les paramètres d’URL.';
$string['configsecretphrase'] = 'Ce texte secret est utilisé pour générer une valeur chiffrée pouvant être envoyée vers des serveurs en tant que paramètre. La valeur chiffrée est le hachage md5 de l’adresse IP actuelle, suivi de votre texte secret. Cette valeur n’est pas à toute épreuve, car l’adresse IP peut changer et est souvent partagée par plusieurs ordinateurs.';
$string['contentheader'] = 'Contenu';
$string['createurl'] = 'Créer une URL';
$string['displayoptions'] = 'Options d’affichage disponibles';
$string['displayselect'] = 'Affichage';
$string['displayselect_help'] = 'Ce réglage, ainsi que le type de fichier de l’URL et la capacité du navigateur à intégrer des objets (<em>embedding</em>), détermine la façon dont l’URL est affichée. Les options peuvent être :

* Automatique : la meilleure option d’affichage pour l’URL concernée est automatiquement sélectionnée
* Intégrer : l’URL est affichée dans la page au-dessous de la barre de navigation, avec la description de l’URL et tous les blocs
* Ouvrir : l’URL est affichée toute seule dans la fenêtre du navigateur
* Fenêtre surgissante : l’URL est affichée dans une nouvelle fenêtre de navigateur sans menu ni barre d’adresse
* Dans un cadre : l’URL est affichée dans un cadre en dessous de la barre de navigation et de la description de l’URL
* Nouvelle fenêtre : l’URL est affichée dans une nouvelle fenêtre du navigateur, avec menus et barre d’adresse';
$string['displayselectexplain'] = 'Choisir le type d’affichage. Tous les types ne sont pas adéquats pour toutes les URLs.';
$string['externalurl'] = 'URL externe';
$string['framesize'] = 'Hauteur du cadre';
$string['indicator:cognitivedepth'] = 'URL : aspect cognitif';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l’étudiant dans une ressource URL.';
$string['indicator:cognitivedepthdef'] = 'URL : aspect cognitif';
$string['indicator:cognitivedepthdef_help'] = 'Le participant a atteint durant cet intervalle d’analyse ce pourcentage d’engagement cognitif offert par les ressources « URL » (niveaux : pas de vue, vue).';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'URL : aspect social';
$string['indicator:socialbreadth_help'] = 'Cet indicateur se base sur l’interaction sociale atteinte par l’étudiant dans une ressource URL.';
$string['indicator:socialbreadthdef'] = 'URL : aspect social';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint durant cet intervalle d’analyse ce pourcentage d’engagement social offert par les ressources « URL » (niveaux : pas de participation, participant seul).';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'Impossible d’afficher cette ressource : l’URL n’est pas valide.';
$string['invalidurl'] = 'L’URL saisie n’est pas valide';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'Le module URL permet à l’enseignant de fournir un lien web comme ressource de cours. Tout ce qui est disponible librement en ligne, documents, images, etc., peut être lié ; il n’est pas nécessaire que l’URL soit celle de la page d’accueil d’un site web. L’URL de n’importe quelle page web peut être copiée et collée. L’enseignant peut aussi utiliser le sélecteur de fichiers et choisir un lien d’un dépôt comme Flickr, YouTube ou Wikipedia (suivant les dépôts activés dans le site).

De nombreuses possibilités d’affichage sont offertes, par exemple l’intégration dans une page ou l’ouverture dans une nouvelle fenêtre. Des options avancées permettent si nécessaire de passer à l’URL des informations telles que le nom du participant, par exemple.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'URLs';
$string['name'] = 'Nom';
$string['name_help'] = 'Ce terme servira de texte pour le lien pointant vers l’URL.

Saisir un texte qui décrit de manière concise le but de l’URL.

Il est recommandé d’éviter le mot « lien », afin de fournir une expérience acceptable pour les utilisateurs de lecteurs d’écran, car ces lecteurs annonce les liens (par exemple « moodle.org, lien ») de sorte qu’il n’est pas nécessaire d’inclure le mot lien dans le champ nom.';
$string['page-mod-url-x'] = 'Toute page du module URL';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'Variables d’URL';
$string['parametersheader_help'] = 'Cette section permet de passer des informations internes comme parties de l’URL. C’est pratique si l’URL est celle d’une page interactive, avec des paramètres, et que vous voulez lui passer quelque chose, par exemple le nom de l’utilisateur actuel. Saisissez le nom du paramètre de l’URL dans le champ texte, puis sélectionnez la variable correspondante du site.';
$string['pluginadministration'] = 'Administration URL';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Hauteur de la fenêtre (en pixels)';
$string['popupheightexplain'] = 'Indique la hauteur par défaut des fenêtres surgissantes.';
$string['popupwidth'] = 'Largeur de la fenêtre (en pixels)';
$string['popupwidthexplain'] = 'Indique la largeur par défaut des fenêtres surgissantes.';
$string['printintro'] = 'Afficher la description de la ressource';
$string['printintroexplain'] = 'Indique s’il faut afficher la description de l’URL en dessous du contenu. Certains types d’affichage n’afficheront toutefois pas cette description, même lorsque l’option est activée.';
$string['privacy:metadata'] = 'Le plugin de ressource URL n’enregistre aucune donnée personnelle.';
$string['rolesinparams'] = 'Noms de rôles comme variables d’URL';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'URL du serveur';
$string['url:addinstance'] = 'Ajouter une ressource URL';
$string['url:view'] = 'Voir les URLs';
