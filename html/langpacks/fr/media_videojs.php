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
 * Strings for component 'media_videojs', language 'fr', version '3.11'.
 *
 * @package     media_videojs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = 'Classe CSS pour séquences audio';
$string['audioextensions'] = 'Extensions des fichiers audio';
$string['configaudiocssclass'] = 'Classe CSS qui sera ajoutée à l\'élément &lt;audio&gt;.';
$string['configaudioextensions'] = 'Une liste d\'extensions de fichiers audio supportés, séparées par des virgules. VideoJS essaiera d\'utiliser le lecteur audio natif du navigateur, si disponible, ou la fonctionnalité native VideoJS, et utilisera pour d\'autres formats le lecteur Flash, s\'il est supporté par le navigateur et si l\'utilisation de Flash en dernier recours est activée ci-dessous.';
$string['configlimitsize'] = 'Si ce réglage est activé et que la largeur et la hauteur ne sont pas spécifiées, la vidéo sera affichée avec la largeur et la hauteur par défaut. Dans le cas contraire, elle s\'étendra à la plus grande largeur possible.';
$string['configrtmp'] = 'Si ce réglage est activé, les liens commençant par rtmp:// seront traités par ce plugin, que l\'extension de fichier soit indiquée comme supportée ou non dans les réglages du plugin. L\'utilisation de Flash en dernier recours doit être activée pour que RTMP fonctionne.';
$string['configuseflash'] = 'Utiliser le lecteur Flash si le format vidéo n\'est pas supporté nativement par le navigateur. Si ce réglage est activé, VideoJS sera activé pour toute extension de fichiers de la liste ci-dessus, sans contrôle du navigateur. Attention, Flash n\'est pas disponible sur les navigateurs mobiles et n\'est pas recommandé avec de nombreux navigateurs pour ordinateurs.';
$string['configvideocssclass'] = 'Classe CSS qui sera ajoutée à l\'élément <video>. Par exemple, la classe CSS « vjs-big-play-centered » placera le bouton de lecture au milieu. Il est aussi possible de définir une présentation personnalisée. Pour plus d\'information, y compris pour définir une présentation personnalisée, veuillez vous référer à docs.videojs.com.';
$string['configvideoextensions'] = 'Une liste d\'extensions de fichiers vidéo supportés, séparées par des virgules. VideoJS essaiera d\'utiliser le lecteur vidéo natif du navigateur, si possible, et utilisera pour d\'autres formats le lecteur Flash, s\'il est supporté par le navigateur et si l\'utilisation de Flash en dernier recours est activée ci-dessous.';
$string['configyoutube'] = 'Utiliser VideoJS pour lire les vidéos YouTube. Les listes de lecture YouTube ne sont actuellement pas supportées par VideoJS.';
$string['limitsize'] = 'Limite de taille';
$string['pluginname'] = 'Lecteur VideoJS';
$string['pluginname_help'] = 'Un script JavaScript pour la lecture des fichiers vidéo au moyen du lecteur vidéo natif du navigateur, et utilisant en dernier recours un lecteur Flash (le support des formats dépend du navigateur).';
$string['privacy:metadata'] = 'Le plugin média Lecteur VideoJS n\'enregistre aucune donnée personnelle.';
$string['rtmp'] = 'Flux RTMP';
$string['useflash'] = 'Utiliser Flash en dernier recours';
$string['videocssclass'] = 'Classe CSS pour vidéos';
$string['videoextensions'] = 'Extensions des fichiers vidéo';
$string['youtube'] = 'Vidéos YouTube';
