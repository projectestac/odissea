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
 * Strings for component 'media_videojs', language 'ru', version '3.11'.
 *
 * @package     media_videojs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = 'Класс CSS для аудио';
$string['audioextensions'] = 'Расширения аудиофайлов';
$string['configaudiocssclass'] = 'Класс CSS, который будет добавлен к <аудио> элементу.';
$string['configaudioextensions'] = 'Список разделенных запятыми поддерживаемых расширений аудиофайлов. VideoJS будет использовать собственный видеоплеер браузера, если он доступен. Для других форматов будет использоваться Flash-плеер, если он поддерживается браузером и использование резервного Flash включено ниже.';
$string['configlimitsize'] = 'Если при включенном параметре ширина и высота не указаны, то видео будет отображаться с размерами по умолчанию. В противном случае изображение будет растягиваться до максимально возможной ширины.';
$string['configrtmp'] = 'При включенной настройке ссылки, начинающиеся с rtmp: // будут обрабатываться плагином независимо от того, включено ли его расширение в параметре «Расширения видеофайлов»  (videoextensions).
 Для работы RTMP должен быть включен параметр «Использовать Flash как резерв».';
$string['configuseflash'] = 'Если формат видео не поддерживается браузером и(или) проигрывателем VideoJS, то используется Flash-плеер. При включенном параметре VideoJS будет задействован для файла с любым расширением из приведенного выше списка без проверки браузера. Обратите внимание: Flash не доступен в мобильных браузерах и не рекомендуется на многих настольных компьютерах.';
$string['configvideocssclass'] = 'Класс CSS, который будет добавлен к <видео> элементу. Например, класс CSS «vjs-big-play-centered» разместит кнопку воспроизведения посередине. Подробнее о том, как настроить пользовательский вид см. на странице docs.videojs.com.';
$string['configvideoextensions'] = 'Список разделенных запятыми поддерживаемых расширений видеофайлов. VideoJS будет использовать собственный видеоплеер браузера, если он доступен. Для других форматов будет использоваться Flash-плеер, если он поддерживается браузером и использование резервного Flash включено ниже.';
$string['configyoutube'] = 'Использовать VideoJS для воспроизведения видео с YouTube. Обратите внимание, что плейлисты YouTube пока не поддерживаются VideoJS.';
$string['limitsize'] = 'Ограничение размера';
$string['pluginname'] = 'Плеер VideoJS';
$string['pluginname_help'] = 'Оболочка JavaScript для видеофайлов, воспроизводимых собственным видеоплеером браузера с резервным использованием Flash-плеера. (Поддержка формата зависит от браузера.)';
$string['privacy:metadata'] = 'Медиа-плагин проигрыватель VideoJS не хранит никаких личных данных.';
$string['rtmp'] = 'Потоки RTMP';
$string['useflash'] = 'Использовать Flash как резерв';
$string['videocssclass'] = 'Класс CSS для видео';
$string['videoextensions'] = 'Расширения видеофайлов';
$string['youtube'] = 'Видео YouTube';
