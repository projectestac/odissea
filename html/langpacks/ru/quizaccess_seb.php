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
 * Strings for component 'quizaccess_seb', language 'ru', version '4.4'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Добавить новый шаблон';
$string['allowedbrowserkeysdistinct'] = 'Ключи должны быть разными.';
$string['allowedbrowserkeyssyntax'] = 'Ключ должен быть шестнадцатеричной строкой из 64 символов.';
$string['cachedef_config'] = 'Кэш конфигурации SEB';
$string['cachedef_configkey'] = 'Кэш ключей конфигурации SEB';
$string['cachedef_quizsettings'] = 'Кэш настроек теста SEB';
$string['cantdelete'] = 'Шаблон не может быть удален, так как он был использован для одного или нескольких тестов.';
$string['cantedit'] = 'Шаблон нельзя редактировать, так как он был использован для одного или нескольких тестов.';
$string['checkingaccess'] = 'Проверка доступа к Safe Exam Browser...';
$string['clientrequiresseb'] = 'Этот тест был настроен для использования браузера Safe Exam Browser с конфигурацией клиента.';
$string['confirmtemplateremovalquestion'] = 'Вы уверены, что хотите удалить этот шаблон?';
$string['confirmtemplateremovaltitle'] = 'Подтвердить удаление шаблона?';
$string['conflictingsettings'] = 'У вас нет разрешения на обновление существующих настроек браузера Safe Exam Browser.';
$string['content'] = 'Шаблон';
$string['description'] = 'Описание';
$string['disabledsettings'] = 'Отключенные настройки.';
$string['disabledsettings_help'] = 'Настройки теста Safe Exam Browser нельзя изменить, если кто-то попытался пройти тест. Чтобы изменить настройки, все попытки прохождения теста сначала должны быть удалены.';
$string['downloadsebconfig'] = 'Скачать конфигурационный файл SEB';
$string['duplicatetemplate'] = 'Шаблон с таким именем уже существует.';
$string['edittemplate'] = 'Редактировать шаблон';
$string['enabled'] = 'Включено';
$string['error:ws:nokeyprovided'] = 'Должен быть предоставлен хотя бы один ключ SEB.';
$string['error:ws:quiznotexists'] = 'Не найден тест, соответствующий ID модуля курса: {$a}';
$string['event:accessprevented'] = 'Доступ к тесту был заблокирован';
$string['event:templatecreated'] = 'Шаблон SEB был создан';
$string['event:templatedeleted'] = 'Шаблон SEB был удален';
$string['event:templatedisabled'] = 'Шаблон SEB был отключен';
$string['event:templateenabled'] = 'Шаблон SEB был включен';
$string['event:templateupdated'] = 'Шаблон SEB был обовлен';
$string['exitsebbutton'] = 'Выйти из Safe Exam Browser';
$string['filemanager_sebconfigfile'] = 'Загрузить файл конфигурации Safe Exam Browser';
$string['filemanager_sebconfigfile_help'] = 'Пожалуйста, загрузите свой собственный файл конфигурации Safe Exam Browser для этого теста.';
$string['filenotpresent'] = 'Пожалуйста, загрузите конфигурационный файл SEB.';
$string['fileparsefailed'] = 'Загруженный файл не может быть сохранен как файл конфигурации SEB.';
$string['httplinkbutton'] = 'Скачать конфигурацию';
$string['invalid_browser_key'] = 'Неверный ключ браузера SEB';
$string['invalid_config_key'] = 'Неверный ключ конфигурации SEB';
$string['invalidkeys'] = 'Не удалось проверить ключи Safe Exam Browser. Убедитесь, что вы используете Safe Exam Browser с правильным файлом конфигурации.';
$string['invalidtemplate'] = 'Неверный шаблон конфигурации SEB';
$string['manage_templates'] = 'Шаблоны Safe Exam Browser';
$string['managetemplates'] = 'Управление шаблонами';
$string['missingrequiredsettings'] = 'В настройках конфигурации отсутствуют некоторые обязательные значения.';
$string['name'] = 'Название';
$string['newtemplate'] = 'Новый шаблон';
$string['noconfigfilefound'] = 'Не найден загруженный файл конфигурации SEB для теста с cmid: {$a}';
$string['noconfigfound'] = 'Не удалось найти конфигурацию SEB для теста с cmid: {$a}';
$string['not_seb'] = 'Safe Exam Browser не используется.';
$string['notemplate'] = 'Нет шаблона';
$string['passwordnotset'] = 'Текущие настройки требуют установки пароля для тестов, проходящих с использованием Safe Exam Browser.';
$string['pluginname'] = 'Правило доступа к тесту: Safe Exam Browser';
$string['privacy:metadata:quizaccess_seb_quizsettings'] = 'Настройки Safe Exam Browser для теста. Они включают в себя идентификатор последнего пользователя, который создал или изменил настройки.';
$string['privacy:metadata:quizaccess_seb_quizsettings:quizid'] = 'Идентификатор теста, для которого существуют настройки.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timecreated'] = 'Unix-время, когда настройки были созданы.';
$string['privacy:metadata:quizaccess_seb_quizsettings:timemodified'] = 'Unix-время, когда настройки были в последний раз изменены.';
$string['privacy:metadata:quizaccess_seb_quizsettings:usermodified'] = 'Идентификатор пользователя, который последним создал или изменил настройки.';
$string['privacy:metadata:quizaccess_seb_template'] = 'Настройки шаблона Safe Exam Browser. Они включают в себя идентификатор последнего пользователя, который создал или изменил шаблон.';
$string['privacy:metadata:quizaccess_seb_template:timecreated'] = 'Unix-время, когда шаблон был создан.';
$string['privacy:metadata:quizaccess_seb_template:timemodified'] = 'Unix-время, когда шаблон был последний раз изменен.';
$string['privacy:metadata:quizaccess_seb_template:usermodified'] = 'Идентификатор пользователя, который последним создал или изменил шаблон.';
$string['quizsettings'] = 'Настройки теста';
$string['restoredfrom'] = '{$a->name} (восстановлено с помощью cmid {$a->cmid})';
$string['seb'] = 'Safe Exam Browser';
$string['seb:bypassseb'] = 'Обходить требование просмотра теста в браузере Safe Exam.';
$string['seb:manage_filemanager_sebconfigfile'] = 'Изменять настройки SEB для теста: Выбрать конфигурационный файл SEB';
$string['seb:manage_seb_activateurlfiltering'] = 'Изменять настройки SEB для теста: Включить URL-фильтрацию';
$string['seb:manage_seb_allowcapturecamera'] = 'Изменить настройку теста SEB: разрешить браузеру доступ к камере';
$string['seb:manage_seb_allowcapturemicrophone'] = 'Изменить настройку теста SEB: разрешить браузеру доступ к микрофону';
$string['seb:manage_seb_allowedbrowserexamkeys'] = 'Изменять настройки SEB для теста: Разрешенные ключи браузера экзамена';
$string['seb:manage_seb_allowreloadinexam'] = 'Изменять настройки SEB для теста: Разрешить перезагрузку';
$string['seb:manage_seb_allowspellchecking'] = 'Изменять настройки SEB для теста: Включить проверку правописания';
$string['seb:manage_seb_allowuserquitseb'] = 'Изменять настройки SEB для теста: Разрешить выход';
$string['seb:manage_seb_enableaudiocontrol'] = 'Изменять настройки SEB для теста: Включить управление звуком';
$string['seb:manage_seb_expressionsallowed'] = 'Изменять настройки SEB для теста: Разрешенные простые выражения';
$string['seb:manage_seb_expressionsblocked'] = 'Изменять настройки SEB для теста: Заблокированные простые выражения';
$string['seb:manage_seb_filterembeddedcontent'] = 'Изменять настройки SEB для теста: Фильтровать встроенный контент';
$string['seb:manage_seb_linkquitseb'] = 'Изменять настройки SEB для теста: Ссылка для выхода';
$string['seb:manage_seb_muteonstartup'] = 'Изменять настройки SEB для теста: Отключить звук при запуске';
$string['seb:manage_seb_quitpassword'] = 'Изменять настройки SEB для теста: Пароль для выхода';
$string['seb:manage_seb_regexallowed'] = 'Изменять настройки SEB для теста: Разрешенные регулярные выражения';
$string['seb:manage_seb_regexblocked'] = 'Изменять настройки SEB для теста: Заблокированные регулярные выражения';
$string['seb:manage_seb_requiresafeexambrowser'] = 'Изменять настройки SEB для теста: Требование использовать Safe Exam Browser';
$string['seb:manage_seb_showkeyboardlayout'] = 'Изменять настройки SEB для теста: Показывать раскладку клавиатуры';
$string['seb:manage_seb_showreloadbutton'] = 'Изменять настройки SEB для теста: Показывать кнопку перезагрузки';
$string['seb:manage_seb_showsebdownloadlink'] = 'Изменять настройки SEB для теста: Показывать кнопку загрузки';
$string['seb:manage_seb_showsebtaskbar'] = 'Изменять настройки SEB для теста: Показывать панель задач';
$string['seb:manage_seb_showtime'] = 'Изменять настройки SEB для теста: Показывать время';
$string['seb:manage_seb_showwificontrol'] = 'Изменять настройки SEB для теста: Показывать управление Wi-Fi';
$string['seb:manage_seb_templateid'] = 'Изменять настройки SEB для теста: Выбрать шаблон SEB';
$string['seb:manage_seb_userconfirmquit'] = 'Изменять настройки SEB для теста: Подтверждение при выходе';
$string['seb:managetemplates'] = 'Управление шаблонами конфигурации SEB';
$string['seb_activateurlfiltering'] = 'Включить фильтрацию URL';
$string['seb_activateurlfiltering_help'] = 'Если включено, URL будут отфильтрованы при загрузке веб-страниц. Набор фильтров должен быть определен ниже.';
$string['seb_allowcapturecamera'] = 'Разрешить браузеру доступ к камере';
$string['seb_allowcapturecamera_help'] = 'При включенном параметре пользователям будет предложено предоставить доступ к камере для SEB до начала экзамена. В macOS 12/iOS 15 или более поздних версиях отключение этой настройки в любом случае запрещает веб-приложениям получать доступ к камере, т. е. видеозапись через WebRTC будет невозможна.';
$string['seb_allowcapturemicrophone'] = 'Разрешить браузеру доступ к микрофону';
$string['seb_allowcapturemicrophone_help'] = 'При включенном параметре пользователям будет предложено предоставить доступ к микрофону для SEB до начала экзамена. В macOS 12/iOS 15 или более поздних версиях отключение этой настройки в любом случае запрещает веб-приложениям получать доступ к микрофону, т. е. аудиозапись через WebRTC будет невозможна.';
$string['seb_allowedbrowserexamkeys'] = 'Разрешенные значения ключа браузера и экзамена';
$string['seb_allowedbrowserexamkeys_help'] = 'В этом поле вы можете ввести разрешенные значения ключа браузера и экзамена (Browser Exam Key) для тех версий Safe Exam Browser, которым разрешен доступ к этому тесту. Если значения не заданы, ключ браузера и экзамена не проверяется.';
$string['seb_allowreloadinexam'] = 'Разрешить перезагрузку страницы во время экзамена';
$string['seb_allowreloadinexam_help'] = 'Если включено, будет разрешена перезагрузка страницы (кнопки перезагрузки на панели задач SEB, панели инструментов браузера, боковом меню ползунка iOS, сочетание клавиш F5/cmd+R). Обратите внимание, что автономное кэширование может не сработать, если пользователь попытается перезагрузить страницу без подключения к Интернету.';
$string['seb_allowspellchecking'] = 'Включить проверку правописания';
$string['seb_allowspellchecking_help'] = 'Если включено, проверка орфографии в браузере SEB будет разрешена.';
$string['seb_allowuserquitseb'] = 'Включить выход из SEB';
$string['seb_allowuserquitseb_help'] = 'Если включено, пользователи могут выйти из SEB с помощью кнопки «Выход» на панели задач SEB, либо нажав клавиши Ctrl-Q, либо нажав кнопку закрытия главного окна браузера.';
$string['seb_enableaudiocontrol'] = 'Включить управление звуком';
$string['seb_enableaudiocontrol_help'] = 'Если этот параметр включен, на панели задач SEB отображается значок управления звуком.';
$string['seb_expressionsallowed'] = 'Разрешенные выражения';
$string['seb_expressionsallowed_help'] = 'Текстовое поле, которое содержит разрешенные выражения для URL-фильтрации. Возможно использование символа подстановки \'\\*\'. Примеры выражений: \'example.com\' или \'example.com/stuff/\\*\'. \'example.com\' соответствует \'example.com\', \'www.example.com\' и \'www.mail.example.com\'. \'example.com/stuff/\\*\' соответствует всем запросам к любым поддоменам \'example.com\' , где \'stuff\' является первым сегментом пути.';
$string['seb_expressionsblocked'] = 'Заблокированные выражения';
$string['seb_expressionsblocked_help'] = 'Текстовое поле, которое содержит заблокированные выражения для URL-фильтрации. Возможно использование символа подстановки \'\\*\'. Примеры выражений: \'example.com\' или \'example.com/stuff/\\*\'. \'example.com\' соответствует \'example.com\', \'www.example.com\' и \'www.mail.example.com\'. \'example.com/stuff/\\*\' соответствует всем запросам к любым поддоменам \'example.com\' , где \'stuff\' является первым сегментом пути.';
$string['seb_filterembeddedcontent'] = 'Фильтровать также встроенный контент';
$string['seb_filterembeddedcontent_help'] = 'Если этот параметр включен, встроенные ресурсы также будут фильтроваться с использованием набора фильтров.';
$string['seb_help'] = 'Настройка теста для использования браузера Safe Exam Browser.';
$string['seb_linkquitseb'] = 'Показывать кнопку «Выйти из Safe Exam Browser», настроенную по этой ссылке выхода.';
$string['seb_linkquitseb_help'] = 'В этом поле вы можете ввести ссылку для выхода из SEB. Она будет использована на кнопке «Выйти из Safe Exam Browser» на странице, которая появляется после сдачи экзамена. При нажатии на кнопку или ссылку, размещенную там, где вы хотите ее разместить, можно выйти из SEB без необходимости ввода пароля для выхода. Для сайта HTTPS ссылка выхода должна начинаться с https://. Если ссылка не введена, то кнопка «Выйти из Safe Exam Browser» не отображается, и нет ссылки для выхода из SEB.';
$string['seb_managetemplates'] = 'Управление шаблонами Safe Exam Browser';
$string['seb_muteonstartup'] = 'Отключить звук при запуске';
$string['seb_muteonstartup_help'] = 'Если этот параметр включен, звук отключается при запуске SEB.';
$string['seb_quitpassword'] = 'Пароль для выхода';
$string['seb_quitpassword_help'] = 'Этот пароль запрашивается, когда пользователи пытаются выйти из SEB с помощью кнопки «Выход», Ctrl-Q или кнопки закрытия в главном окне браузера. Если пароль для выхода не задан, SEB просто выдаст запрос «Вы уверены, что хотите выйти из SEB?».';
$string['seb_regexallowed'] = 'Разрешенные регулярные выражения';
$string['seb_regexallowed_help'] = 'Текстовое поле, которое содержит фильтрующие выражения для разрешенных URL-адресов в формате регулярных выражений (Regex).';
$string['seb_regexblocked'] = 'Заблокированные регулярные выражения';
$string['seb_regexblocked_help'] = 'Текстовое поле, которое содержит фильтрующие выражения для заблокированных URL-адресов в формате регулярных выражений (Regex).';
$string['seb_requiresafeexambrowser'] = 'Требовать использование Safe Exam Browser';
$string['seb_requiresafeexambrowser_help'] = 'Если этот параметр включен, учащиеся могут пройти тест только с помощью Safe Exam Browser.
Доступные варианты:

* Нет
<br/>для прохождения теста не требуется Safe Exam Browser.
* Да – Использовать существующий шаблон
<br/>Можно использовать шаблон для настройки Safe Exam Browser. Шаблонами управляют администраторы сайта. Настройки, указанные вами вручную, перезаписывают настройки в шаблоне.
* Да – настроить вручную
<br/>Шаблон для настройки Safe Exam Browser не будет использоваться. Вы можете настроить Safe Exam Browser вручную.
* Да – Загрузить мою собственную конфигурацию
<br/>Вы можете загрузить свой собственный файл конфигурации Safe Exam Browser. Все настройки, указанные вручную, и шаблоны будут отключены.
* Да – использовать конфигурацию клиента SEB
<br/>Никаких настроек Safe Exam Browser нет на стороне Moodle. Тест можно выполнить с любой конфигурацией браузера Safe Exam.';
$string['seb_showkeyboardlayout'] = 'Показывать раскладку клавиатуры';
$string['seb_showkeyboardlayout_help'] = 'Если параметр включен, текущая раскладка клавиатуры отображается на панели задач SEB. Это позволяет переключаться на другие раскладки клавиатуры, которые включены в операционной системе.';
$string['seb_showreloadbutton'] = 'Показывать кнопку перезагрузки';
$string['seb_showreloadbutton_help'] = 'Если параметр включен, на панели задач SEB отображается кнопка перезагрузки, позволяющая перезагрузить текущую веб-страницу.';
$string['seb_showsebdownloadlink'] = 'Показывать кнопку загрузки браузера Safe Exam Browser';
$string['seb_showsebdownloadlink_help'] = 'Если параметр включен, то кнопка для загрузки Safe Exam Browser будет отображаться на стартовой странице теста.';
$string['seb_showsebtaskbar'] = 'Показывать панель задач SEB';
$string['seb_showsebtaskbar_help'] = 'Если параметр включен, панель задач появляется в нижней части окна браузера SEB. Панель задач необходима для отображения таких элементов, как управление Wi-Fi, кнопка перезагрузки, время и раскладка клавиатуры.';
$string['seb_showtime'] = 'Показывать время';
$string['seb_showtime_help'] = 'Если параметр включен, текущее время отображается на панели задач SEB.';
$string['seb_showwificontrol'] = 'Показывать управление Wi-Fi';
$string['seb_showwificontrol_help'] = 'Если параметр включен, кнопка управления Wi-Fi появляется на панели задач SEB. Кнопка позволяет пользователям подключаться к сетям Wi-Fi, которые были использованы ранее.';
$string['seb_templateid'] = 'Шаблон конфигурации Safe Exam Browser';
$string['seb_templateid_help'] = 'Параметры выбранного шаблона конфигурации будут использоваться для настройки Safe Exam Browser при попытке выполнить тест. Вы можете вручную перезаписать настройки, указанные в шаблоне.';
$string['seb_use_client'] = 'Да – Использовать конфигурацию клиента SEB';
$string['seb_use_manually'] = 'Да – Настроить вручную';
$string['seb_use_template'] = 'Да – Использовать существующий шаблон';
$string['seb_use_upload'] = 'Да – Загрузить мою собственную конфигурацию';
$string['seb_userconfirmquit'] = 'Просить пользователя подтвердить выход';
$string['seb_userconfirmquit_help'] = 'Если параметр включен, пользователи должны подтверждать выход из SEB при обнаружении ссылки на выход.';
$string['sebdownloadbutton'] = 'Скачать Safe Exam Browser';
$string['sebkeysvalidationfailed'] = 'Ошибка при проверке ключей SEB';
$string['seblinkbutton'] = 'Запустить Safe Exam Browser';
$string['sebrequired'] = 'Этот тест был настроен таким образом, чтобы студенты могли выполнять его только с помощью браузера Safe Exam Browser.';
$string['setting:autoreconfigureseb'] = 'Автоматическая настройка SEB';
$string['setting:autoreconfigureseb_desc'] = 'Если параметр включен, то пользователи, которые приступают к тесту с использованием браузера Safe Exam Browser, будут автоматически вынуждены перенастроить свой браузер Safe Exam Browser.';
$string['setting:displayblocksbeforestart'] = 'Показывать блоки перед началом теста';
$string['setting:displayblocksbeforestart_desc'] = 'Если параметр включен, блоки будут отображаться до того, как пользователь попытается выполнить тест.';
$string['setting:displayblockswhenfinished'] = 'Показать блоки после завершения теста';
$string['setting:displayblockswhenfinished_desc'] = 'Если параметр включен, блоки будут отображаться после того, как пользователь завершит попытку выполнения теста.';
$string['setting:downloadlink'] = 'Ссылка для скачивания Safe Exam Browser';
$string['setting:downloadlink_desc'] = 'URL для загрузки приложения Safe Exam Browser.';
$string['setting:quizpasswordrequired'] = 'Требуется пароль для теста';
$string['setting:quizpasswordrequired_desc'] = 'Если параметр включен, то все тесты, для которых необходим Safe Exam Browser, требуют установки пароля.';
$string['setting:showhttplink'] = 'Показывать ссылку http://';
$string['setting:showseblink'] = 'Показывать ссылку seb://';
$string['setting:showseblinks'] = 'Показывать ссылки для настройки конфигурации Safe Exam Browser';
$string['setting:showseblinks_desc'] = 'Показывать ли пользователю ссылки для доступа к файлу конфигурации браузера Safe Exam, когда доступ к тесту запрещен. Обратите внимание, ссылки seb:// могут работать не во всех браузерах.';
$string['setting:supportedversions'] = 'Обратите внимание, что для использования функции ключа конфигурации требуются следующие минимальные версии клиента Safe Exam Browser: macOS - 2.1.5pre2, Windows - 3.0, iOS - 2.1.14.';
$string['settingsfrozen'] = 'Из-за того, что была как минимум одна попытка выполнения теста, настройки Safe Exam Browser больше не могут быть обновлены.';
$string['unknown_reason'] = 'Неизвестная причина';
$string['used'] = 'Используется';
