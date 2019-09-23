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
 * Strings for component 'report_security', language 'ru', branch 'MOODLE_36_STABLE'
 *
 * @package   report_security
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>Рекомендуется, чтобы после установки разрешения для файла config.php были изменены так, чтобы файл не мог быть изменен веб-сервером. Пожалуйста, имейте в виду, что эта мера не повышает безопасность сервера значительно, но может снизить или ограничить уязвимости общего характера.</p>';
$string['check_configrw_name'] = 'Файл config.php доступен для записи';
$string['check_configrw_ok'] = 'Файл config.php не может быть изменен PHP-скриптами.';
$string['check_configrw_warning'] = 'PHP-скрипты могут изменить файл config.php.';
$string['check_cookiesecure_details'] = '<p>Если Вы разрешаете соединение по протоколу https, то рекомендуется разрешить и secure cookies. Вы должны также добавить постоянное перенаправление c http на https. В идеале хорошо использовать заголовки HSTS.</p>';
$string['check_cookiesecure_error'] = 'Пожалуйста, разрешите secure cookies';
$string['check_cookiesecure_name'] = 'Secure cookies';
$string['check_cookiesecure_ok'] = 'Secure cookies включены';
$string['check_defaultuserrole_details'] = '<p>Все вошедшие в систему пользователя получают права роли по умолчанию. Пожалуйста, удостоверьтесь, что для этой роли не разрешены никакие опасные права. </p>
<p>Единственный поддерживаемый устаревший тип для роли по умолчанию — <em>Аутентифицированный пользователь</em>. Возможность просмотра курса не должна быть включена.</p>';
$string['check_defaultuserrole_error'] = 'Роль пользователя по умолчанию «{$a}» задана неправильно!';
$string['check_defaultuserrole_name'] = 'Роль по умолчанию для всех пользователей';
$string['check_defaultuserrole_notset'] = 'Роль по умолчанию не задана.';
$string['check_defaultuserrole_ok'] = 'Роль по умолчанию для всех пользователей задана верно.';
$string['check_displayerrors_details'] = '<p>Включение настройки PHP <code>display_errors</code> (отображать ошибки) не рекомендуется на сайтах в промышленной эксплуатации, потому что сообщения об ошибках могут раскрыть конфиденциальную информацию о Вашем сервере.</p>';
$string['check_displayerrors_error'] = 'Включена настройка PHP для отображения ошибок. Рекомендуется ее отключить.';
$string['check_displayerrors_name'] = 'Отображать ошибки PHP';
$string['check_displayerrors_ok'] = 'Отображение ошибок PHP отключено.';
$string['check_emailchangeconfirmation_details'] = '<p>Рекомендуется, чтобы при изменении пользователями адреса электронной почты в своем профиле требовалось подтверждение нового адреса. Если этот параметр отключен, спамеры могут попытаться использовать сервер для рассылки спама.</p>
<p>Поле с адресом электронной почты может быть заблокировано настройками плагина аутентификации, такой случай здесь не учитывается.</p>';
$string['check_emailchangeconfirmation_error'] = 'Пользователи могут вводить любые адреса электронной почты.';
$string['check_emailchangeconfirmation_info'] = 'Пользователи могут вводить адреса электронной почты только из разрешенных доменов.';
$string['check_emailchangeconfirmation_name'] = 'Подтверждение изменения адреса электронной почты';
$string['check_emailchangeconfirmation_ok'] = 'Подтверждение изменения адреса электронной почты в профиле пользователя.';
$string['check_embed_details'] = '<p>Неограниченное внедрение объектов очень опасно — любой зарегистрированный пользователь сможет предпринять XSS-атаку против других пользователей сервера. Эта настройка должна быть отключена на серверах в промышленной эксплуатации. </p>';
$string['check_embed_error'] = 'Разрешено неограниченное внедрение объектов — это очень опасно для большинства серверов.';
$string['check_embed_name'] = 'Разрешить теги EMBED и OBJECT';
$string['check_embed_ok'] = 'Неограниченное внедрение объектов не разрешено.';
$string['check_frontpagerole_details'] = '<p>Все вошедшие в систему пользователя получают во всех элементах главной странице права роли для главной страницы. Пожалуйста, удостоверьтесь, что для этой роли не разрешены никакие опасные права.</p>
<p>Рекомендуется, чтобы для этой цели была создана специальная роль, а устаревшие типы ролей не использовались.</p>';
$string['check_frontpagerole_error'] = 'Обнаружена неправильно настроенная роль главной страницы — «{$a}»!';
$string['check_frontpagerole_name'] = 'Роль для главной страницы';
$string['check_frontpagerole_notset'] = 'Роль для главной страницы не задана.';
$string['check_frontpagerole_ok'] = 'Роль для главной страницы задана верно.';
$string['check_google_details'] = '<p>Параметр «Открыть для Google» позволяет поисковым машинам входить в курсы с доступом гостя. Нет никакого смысла в этой настройке, если вход гостя не разрешен.</p>';
$string['check_google_error'] = 'Доступ для поисковых машин разрешен, хотя гостевой доступ запрещен.';
$string['check_google_info'] = 'Поисковые машины могут входить как гости.';
$string['check_google_name'] = 'Открыть для Google';
$string['check_google_ok'] = 'Доступ для поисковых машин не разрешен.';
$string['check_guestrole_details'] = '<p>Роль гостя используется для гостей сайта, не вошедших в систему пользователей и временного доступа к курсам. Пожалуйста, убедитесь, что никакие опасные права не разрешены для этой роли.</p>
<p>Единственная поддерживаемая устаревшая роль для гостя — <em>Гость</em>.</p>';
$string['check_guestrole_error'] = 'Неправильно определена роль гостя — «{$a}»!';
$string['check_guestrole_name'] = 'Роль гостя';
$string['check_guestrole_notset'] = 'Роль гостя не установлена.';
$string['check_guestrole_ok'] = 'Роль гостя определена верно.';
$string['check_mediafilterswf_details'] = '<p>Автоматическое внедрение swf-файлов очень опасно — любой зарегистрированный пользователь сможет предпринять XSS-атаку против других пользователей сервера. Пожалуйста, отключите этот параметр на серверах в промышленной эксплуатации.</p>';
$string['check_mediafilterswf_error'] = 'Включен медиа-фильтр «Flash-анимация» — это очень опасно для большинства серверов.';
$string['check_mediafilterswf_name'] = 'Медиа-фильтр .swf (Flash-анимация) включен';
$string['check_mediafilterswf_ok'] = 'Медиа-фильтр .swf (Flash-анимация) выключен.';
$string['check_noauth_details'] = '<p>Плагин аутентификации «<em>Не использовать аутентификацию</em>» не предназначен для сайтов в промышленной эксплуатации. Пожалуйста, отключите его, если это не сайт для разработки и тестирования.</p>';
$string['check_noauth_error'] = 'Метод аутентификации «Не использовать аутентификацию» не может использоваться на сайтах в промышленной эксплуатации.';
$string['check_noauth_name'] = 'Не использовать аутентификацию';
$string['check_noauth_ok'] = 'Метод аутентификации «Не использовать аутентификацию» отключен.';
$string['check_nodemodules_details'] = '<p>Каталог <em>{$a->path}</em> содержит модули Node.js и их зависимости, обычно устанавливаемые утилитой NPM. Эти модули могут потребоваться для локальной разработки Moodle, например, для использования фреймворка grunt. Они не нужны для промышленной эксплуатации сайта Moodle, и могут содержать потенциально опасный код, подвергающий Ваш сайт угрозе атак.</p>
<p>Настоятельно рекомендуется удалить этот каталог, если сайт доступен через интернет, или, по крайней мере, запретить доступ к этому каталогу в конфигурации вашего веб-сервера.</ p>';
$string['check_nodemodules_info'] = 'На общедоступных сайтах не должно быть каталога node_modules.';
$string['check_nodemodules_name'] = 'Каталог модулей Node.js';
$string['check_openprofiles_details'] = 'Открытыми профилями пользователей могут злоупотреблять спамеры. Рекомендуется, чтобы были включены параметр или <code>Необходимо войти в систему для просмотра профилей</code>, или <code>Принуждать пользователей войти в систему</code>.';
$string['check_openprofiles_error'] = 'Любой желающий может просматривать профили пользователей не входя в систему.';
$string['check_openprofiles_name'] = 'Открытые профили пользователей';
$string['check_openprofiles_ok'] = 'Необходим вход в систему перед просмотром профилей пользователей.';
$string['check_passwordpolicy_details'] = '<p>Рекомендуется, чтобы была установлена политика паролей, так как угадывание пароля — часто самый легкий способ получить несанкционированный доступ. Не делайте требования слишком строгими, поскольку это может привести к тому, что пользователи не смогут запомнить свои пароли и будут забывать или записывать их.</p>';
$string['check_passwordpolicy_error'] = 'Политика паролей не задана.';
$string['check_passwordpolicy_name'] = 'Политика паролей';
$string['check_passwordpolicy_ok'] = 'Политика паролей включена.';
$string['check_preventexecpath_details'] = '<p>Разрешение настройки путей к исполняемым файлам через графический интерфейс администрирования может быть использован для попытки повышения привилегий.</p>';
$string['check_preventexecpath_name'] = 'Пути к исполняемым файлам';
$string['check_preventexecpath_ok'] = 'Пути к исполняемым файлам задаются только в файле config.php.';
$string['check_preventexecpath_warning'] = 'Пути к исполняемым файлам можно задать в графическом интерфейсе администрирования.';
$string['check_riskadmin_detailsok'] = '<p>Пожалуйста, проверьте следующий список администраторов системы:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Пожалуйста, проверьте следующий список администраторов системы:</p>{$a->admins}.
<p>Рекомендуется назначать роль администратора только в контексте системы. Следующим пользователям некорректно назначены роли администратора в других контекстах:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Администраторы';
$string['check_riskadmin_ok'] = 'Найдено администраторов сервера — {$a}';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) просмотр назначения роли</a>';
$string['check_riskadmin_warning'] = 'Найдено администраторов сервера — {$a->admincount} и некорректных назначений роли администратора — {$a->unsupcount}.';
$string['check_riskbackup_detailsok'] = 'Нет ролей с явным разрешением на резервное копирование пользовательских данных. Однако, отметьте, что администраторы с правом «moodle/site:doanything», вероятно, будут в состоянии сделать это.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Эти активные переопределения дают пользователям возможность включать пользовательские данные в резервные копии. Удостоверьтесь, что это право необходимо.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Следующие роли системы в настоящее время позволяют пользователям включать пользовательские данные в резервные копии. Удостоверьтесь, что это право необходимо.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Следующие пользователи (из-за перечисленных выше назначений или переопределений ролей) в настоящее время имеют право в своих курсах делать резервные копии, содержащие персональные данные всех записанных на эти курсы пользователей. Удостоверьтесь, что: а) Вы им доверяете и б) их учетные записи защищены надежными паролями:</p> {$a}';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} в контексте «{$a->contextname}»</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Резервное копирование пользовательских данных';
$string['check_riskbackup_ok'] = 'Нет ролей с явным разрешением на резервное копирование пользовательских данных';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) в контексте «{$a->contextname}»</a>';
$string['check_riskbackup_warning'] = 'Найдено ролей — {$a->rolecount}, переопределений ролей — {$a->overridecount}, пользователей с правом делать резервные копию пользовательских данных — {$a->usercount} .';
$string['check_riskxss_details'] = '<p>RISK_XSS обозначает все опасные возможности, которые могут использовать только доверенные пользователи.</p>
<p>Пожалуйста, просмотрите следующий список пользователей и убедитесь, что Вы полностью доверяете им на этом сервере: </p>
<p>{$a}</p>';
$string['check_riskxss_name'] = 'Пользователи. которым разрешено использовать XSS';
$string['check_riskxss_warning'] = 'RISK_XSS, найдено доверенных пользователей — {$a}.';
$string['check_unsecuredataroot_details'] = '<p>Каталог dataroot не должен быть доступен из сети. Лучший способ гарантированно сделать этот каталог недоступным — это разместить его вне публичного каталога веб-сервера.</p>
<p>После перемещении каталога Вы должны соответствующим образом изменить параметр <code>$CFG->dataroot</code> в файле <code>config.php</code>.</p>';
$string['check_unsecuredataroot_error'] = 'Ваш каталог dataroot<code>{$a}</code> неправильно размещен и доступен из сети!';
$string['check_unsecuredataroot_name'] = 'Небезопасное расположение каталога dataroot';
$string['check_unsecuredataroot_ok'] = 'Каталог dataroot не должен быть доступен из сети.';
$string['check_unsecuredataroot_warning'] = 'Ваш каталог dataroot<code>{$a}</code> неправильно размещен и, возможно, доступен из сети!';
$string['check_vendordir_details'] = '<p>Каталог <em>{$a->path}</em> содержит различные сторонние библиотеки и их зависимости, обычно устанавливаемые с помощью Composer (менеджера пакетов для PHP). Эти библиотеки могут потребоваться для локальной разработки Moodle, например, для установки фреймворка PHPUnit. Они не нужны для промышленной эксплуатации сайта Moodle, и могут содержать потенциально опасный код, подвергающий Ваш сайт угрозе атак.</p>
<p>Настоятельно рекомендуется удалить этот каталог, если сайт доступен через интернет, или, по крайней мере, запретить доступ к этому каталогу в конфигурации вашего веб-сервера.</ p>';
$string['check_vendordir_info'] = 'На общедоступных сайтах не должно быть каталога vendor.';
$string['check_vendordir_name'] = 'Каталог vendor';
$string['check_webcron_details'] = '<p>Запуск cron из веб-браузера может привести к раскрытию конфиденциальной информации для анонимных пользователей. Рекомендуется запускать cron только из командной строки или задать пароль для удаленного доступа к cron.</p>';
$string['check_webcron_name'] = 'Запуск cron через интернет';
$string['check_webcron_ok'] = 'Анонимные пользователи не имеют доступа к cron.';
$string['check_webcron_warning'] = 'Анонимные пользователи имеют доступ к cron.';
$string['configuration'] = 'Конфигурация';
$string['description'] = 'Описание';
$string['details'] = 'Подробности';
$string['issue'] = 'Возможная проблема';
$string['pluginname'] = 'Сведения о безопасности';
$string['security:view'] = 'Просматривать отчет «Сведения о безопасности»';
$string['status'] = 'Состояние';
$string['statuscritical'] = 'Критическое';
$string['statusinfo'] = 'Информация';
$string['statusok'] = 'OK';
$string['statusserious'] = 'Серьезное';
$string['statuswarning'] = 'Предупреждение';
$string['timewarning'] = 'Обработка данных может занять много времени, пожалуйста, будьте терпеливы...';
