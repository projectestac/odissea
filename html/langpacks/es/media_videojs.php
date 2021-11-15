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
 * Strings for component 'media_videojs', language 'es', version '3.11'.
 *
 * @package     media_videojs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = 'Clase CSS para audio';
$string['audioextensions'] = 'Extensiones de archivos de audio';
$string['configaudiocssclass'] = 'Una clase CSS que se añadirá al elemento &lt;audio&gt;.';
$string['configaudioextensions'] = 'Una lista separada por comas de extensiones de archivos de audio compatibles. VideoJS intentará usar el reproductor de vídeo nativo del navegador cuando esté disponible o la funcionalidad nativa de VideoJS, y recurrirá a un reproductor Flash para otros formatos si Flash es compatible con el navegador y el respaldo de Flash está habilitado a continuación.';
$string['configlimitsize'] = 'Si está habilitado y no se especifican el ancho y el alto, el video se mostrará con el ancho y alto predeterminados. De lo contrario, se estirará al máximo ancho posible.';
$string['configrtmp'] = 'Si está habilitado, los enlaces que comienzan con rtmp:// serán manejados por el complemento, independientemente de si la extensión está habilitada en la configuración Extensiones de archivo de vídeo (extensiones de vídeo). El respaldo de flash debe estar habilitado para que RTMP funcione.';
$string['configuseflash'] = 'Utilizar Flash Player si el formato de vídeo no es compatible de forma nativa con el navegador y/o de forma nativa con el reproductor VideoJS. Si está habilitado, VideoJS se activará para cualquier extensión de archivo de la lista anterior sin verificación del navegador. Tenga en cuenta que Flash no está disponible en navegadores móviles y se desaconseja en muchos de escritorio.';
$string['configvideocssclass'] = 'Una clase CSS que se agregará al elemento &lt;video&gt;. Por ejemplo, la clase CSS "vjs-big-play-centered" colocará el botón de reproducción en el medio. Para obtener detalles, incluido cómo configurar una máscara personalizada, consulte docs.videojs.com.';
$string['configvideoextensions'] = 'Una lista separada por comas de extensiones de archivos de video compatibles. VideoJS intentará usar el reproductor de video nativo del navegador cuando esté disponible, y recurrirá a un reproductor Flash para otros formatos si Flash es compatible con el navegador y el respaldo de Flash está habilitado a continuación.';
$string['configyoutube'] = 'Utilizar VideoJS para reproducir videos de YouTube. Tenga en cuenta que las listas de reproducción de YouTube aún no son compatibles con VideoJS.';
$string['limitsize'] = 'Tamaño límite';
$string['pluginname'] = 'Reproductor VideoJS';
$string['pluginname_help'] = 'Un contenedor de JavaScript para archivos de video reproducidos por el reproductor de video nativo del navegador con un respaldo de Flash Player. (La compatibilidad con el formato depende del navegador).';
$string['privacy:metadata'] = 'El complemento del reproductor de medios VideoJS no almacena ningún dato personal.';
$string['rtmp'] = 'Secuencias de RTMP';
$string['useflash'] = 'Usar respaldo de Flash';
$string['videocssclass'] = 'Clase CSS para vídeo';
$string['videoextensions'] = 'Formatos de archivos de vídeo';
$string['youtube'] = 'YouTube videos';
