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
 * Strings for component 'tiny_recordrtc', language 'ru', version '4.1'.
 *
 * @package     tiny_recordrtc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedtypes'] = 'Тип записи';
$string['allowedtypes_desc'] = 'Какие типы записи можно делать в редакторе TinyMCE? В дополнение к этому параметру есть две возможности, которые контролируют доступ к параметрам записи.';
$string['attachrecording'] = 'Прикрепить запись';
$string['audioandvideo'] = 'Аудио и видео';
$string['audiobitrate'] = 'Битрейт аудио';
$string['audiobitrate_desc'] = 'Качество записи звука (большее значение соответствует более высокому качеству)';
$string['audiobuttontitle'] = 'Запись аудио';
$string['audiotimelimit'] = 'Ограничение времени аудио';
$string['audiotimelimit_desc'] = 'Максимальная длина записи, разрешенная для аудиоклипов';
$string['audiotitle'] = 'Запись аудио';
$string['confirm_yes'] = 'Да';
$string['discard_desc'] = 'Идет запись. Вы хотите остановить запись?';
$string['gumabort'] = 'Произошло что-то странное, что не даёт использовать веб-камеру/микрофон';
$string['gumabort_title'] = 'Что-то произошло';
$string['gumnotallowed'] = 'Пользователь должен разрешить браузеру доступ к веб-камере/микрофону';
$string['gumnotallowed_title'] = 'Неправильные разрешения';
$string['gumnotfound'] = 'Устройство ввода не обнаружено.';
$string['gumnotfound_title'] = 'Устройство отсутствует';
$string['gumnotreadable'] = 'Что-то мешает браузеру получить доступ к веб-камере/микрофону';
$string['gumnotreadable_title'] = 'Аппаратная ошибка';
$string['gumnotsupported'] = 'Ваш браузер не поддерживает запись по небезопасному соединению';
$string['gumnotsupported_title'] = 'Нет поддержки небезопасного соединения';
$string['gumoverconstrained'] = 'Имеющаяся веб-камера/микрофон не могут создать поток с требуемыми ограничениями';
$string['gumoverconstrained_title'] = 'Проблемы с ограничениями';
$string['gumsecurity'] = 'Ваш браузер не поддерживает запись по небезопасному соединению';
$string['gumsecurity_title'] = 'Нет поддержки небезопасного соединения';
$string['gumtype'] = 'Произведена попытка получить поток с веб-камеры/микрофона, но ограничения не были заданы';
$string['gumtype_title'] = 'Ограничения не заданы';
$string['helplinktext'] = 'Запись RTC';
$string['insecurealert'] = 'Ваш браузер может не разрешить этому плагину работать, если он не используется по HTTPS или с локального сервера';
$string['insecurealert_title'] = 'Небезопасное соединение!';
$string['maxfilesizehit'] = 'Вы достигли максимального размера файла для загрузки';
$string['maxfilesizehit_title'] = 'Запись остановлена';
$string['norecordingfound'] = 'Кажется что-то пошло не так. Ничего не записано.';
$string['norecordingfound_title'] = 'Запись не найдена';
$string['nowebrtc'] = 'Ваш браузер пока не поддерживает или обеспечивает ограниченную поддержку технологий WebRTC и не может использоваться с этим плагином. Пожалуйста, воспользуйтесь другим браузером или обновите свой.';
$string['nowebrtc_title'] = 'WebRTC не поддерживается';
$string['onlyaudio'] = 'Только аудио';
$string['onlyvideo'] = 'Только видео';
$string['pluginname'] = 'Tiny - запись RTC';
$string['privacy:metadata'] = 'Плагин «Запись RTC» не хранит никаких персональных данных.';
$string['recordagain'] = 'Записать снова';
$string['recordagain_desc'] = 'Вы уже записали некоторый контент. Повторная запись удалит этот контент. Вы уверены, что хотите сбросить запись?';
$string['recordingfailed'] = 'Запись не удалась, попробуйте снова';
$string['recordinguploaded'] = 'Запись загружена';
$string['recordrtc:recordaudio'] = 'Записывать аудио прямо в текстовый редактор';
$string['recordrtc:recordvideo'] = 'Записывать видео прямо в текстовый редактор';
$string['startrecording'] = 'Начать запись';
$string['stoprecording'] = 'Остановить запись';
$string['timelimitwarning'] = 'Вы должны ввести число больше 0.';
$string['uploadaborted'] = 'Загрузка прервана:';
$string['uploadfailed'] = 'Загрузка не удалась из-за ошибки: {$a->error}';
$string['uploadfailed404'] = 'Загрузка не удалась: файл слишком большой';
$string['uploading'] = 'Загрузка - {$a->progress}%';
$string['uploadprogress'] = 'завершена';
$string['videobitrate'] = 'Битрейт видео';
$string['videobitrate_desc'] = 'Качество записи видео (большее значение соответствует более высокому качеству)';
$string['videobuttontitle'] = 'Запись видео';
$string['videotimelimit'] = 'Ограничение времени видео';
$string['videotimelimit_desc'] = 'Максимальная длина записи, разрешенная для видеоклипов';
$string['videotitle'] = 'Запись видео';
