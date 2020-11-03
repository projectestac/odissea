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
 * Strings for component 'tool_mobile', language 'ru', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_mobile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'Отладка ADOdb включена. Это следует отключить в настройках плагинов аутентификации или зачисления из внешней базы данных.';
$string['androidappid'] = 'Уникальный идентификатор приложения Android';
$string['androidappid_desc'] = 'Этот параметр можно оставить по умолчанию, если у вас нет специального приложения для Android.';
$string['apppolicy'] = 'URL-адрес политики приложения';
$string['apppolicy_help'] = 'URL-адрес политики для пользователей приложения, указанный в приложении на странице «О программе». Если поле оставить пустым, вместо него будет использоваться URL-адрес политики сайта.';
$string['apprequired'] = 'Эта функция доступна только при доступе через мобильное  или настольное приложение Moodle.';
$string['autologinkeygenerationlockout'] = 'Генерация ключа автоматического входа была заблокирована. Вам нужно выждать 6 минут между запросами.';
$string['autologinnotallowedtoadmins'] = 'Автоматический вход запрещен администратором сайта.';
$string['cachedef_plugininfo'] = 'Здесь хранится список плагинов с мобильными дополнениями';
$string['clickheretolaunchtheapp'] = 'Нажмите здесь, если приложение не открылось автоматически.';
$string['configmobilecssurl'] = 'CSS файл для изменения внешнего вида сайта для мобильных устройств.';
$string['customlangstrings'] = 'Пользовательские языковые строки';
$string['customlangstrings_desc'] = 'Здесь можно настроить слова и фразы, отображаемые в приложении. Введите каждую строку пользовательского языка c новой строки. Используйте форматирование: идентификатор строки, содержимое строки языка и код языка, разделенные вертикальной чертой. Например:
<pre>
mm.user.student|Learner|en
mm.user.student|Cтудент|ru
mm.user.student|Aprendiz|es
</pre>
Полный список идентификаторов строк смотрите в документации.';
$string['custommenuitems'] = 'Пользовательские пункты меню';
$string['custommenuitems_desc'] = 'В главное меню приложения можно добавить дополнительные элементы, указав их здесь. Введите каждый пункт пользовательского меню с новой строки в формате: текст элемента, URL ссылки, метод открытия ссылок и код языка (необязательно, для отображения элемента только для пользователей указанного языка), разделенных вертикальной чертой.

Методы открытия ссылок: «в приложении» (для привязки к элементам, поддерживаемым приложением), «в приложении в браузере» (для открытия ссылки в браузере без выхода из приложения), «в браузере» (для открытия ссылки вне приложения в браузере по умолчанию) и «встроенный» (для отображения ссылки во фрейме на новой странице в приложении).

Например:
<pre>
App\'s help | https://someurl.xyz/help | inappbrowser | en
Visit our SIS | https://someurl.xyz | browser | en
Посетите наш SIS | https://someurl.xyz | browser | ru
My grades | https://someurl.xyz/local/mygrades/index.php | embedded | en
Мои оценки | https://someurl.xyz/local/mygrades/index.php | embedded | ru
</pre>';
$string['disabledfeatures'] = 'Отключенные функции';
$string['disabledfeatures_desc'] = 'Выберите здесь функции, которые вы хотите отключить в мобильном приложении для своего сайта. Обратите внимание, что некоторые функции, перечисленные здесь, могут быть уже отключены с помощью других настроек сайта. Увидеть изменения вы сможете после повторного входа в приложение.';
$string['displayerrorswarning'] = 'Отображение сообщений отладки (debugdisplay) включено. Его нужно отключить.';
$string['downloadcourse'] = 'Скачать курс';
$string['downloadcourses'] = 'Скачать курсы';
$string['enablesmartappbanners'] = 'Включить баннеры приложений';
$string['enablesmartappbanners_desc'] = 'При входе на сайт через мобильный браузер будет отображаться баннер, рекламирующий мобильное приложение Moodle.';
$string['forcedurlscheme'] = 'Если вы хотите, чтобы в окне браузера открывалось бы только ваше фирменное приложение, укажите здесь схему его URL. Если вы хотите разрешить только официальное приложение, то установите значение по умолчанию. Оставьте поле пустым, если вы хотите разрешить любое приложение.';
$string['forcedurlscheme_key'] = 'Схема URL';
$string['forcelogout'] = 'Принудительный выход из системы';
$string['forcelogout_desc'] = 'При включенном параметре опция «Изменить сайт» заменяется на «Выход». Это приводит к тому, что пользователь полностью выйдет из системы. Затем он должен повторно ввести свой пароль, когда  в следующий раз захочет получить доступ к сайту.';
$string['getmoodleonyourmobile'] = 'Скачать мобильное приложение';
$string['httpsrequired'] = 'Требуется HTTPS';
$string['invalidprivatetoken'] = 'Неверный закрытый ключ. Ключ не должен быть пустым или передаваться при помощи параметра GET.';
$string['invaliduserquotawarning'] = 'Пользовательская квота (userquota) имеет недопустимое значение. В настройках безопасности сайта должно быть указано допустимое (целое) число.';
$string['iosappid'] = 'Уникальный идентификатор приложения iOS';
$string['iosappid_desc'] = 'Эту настройку можно не трогать, пока у вас нет фирменного iOS приложения.';
$string['loginintheapp'] = 'через приложение';
$string['logininthebrowser'] = 'через окно браузера (для плагинов SSO - системы единого входа)';
$string['loginintheembeddedbrowser'] = 'через встроенный браузер (для плагинов SSO - системы единого входа)';
$string['mainmenu'] = 'Главное меню';
$string['minimumversion'] = 'Если указана версия приложения (3.8.0 или выше), всем пользователям, использующим более старую версию приложения, будет предложено обновить свое приложение, прежде чем им будет разрешен доступ к сайту.';
$string['minimumversion_key'] = 'Требуемая минимальная версия приложения';
$string['mobileapp'] = 'Мобильное приложение';
$string['mobileappconnected'] = 'Мобильное приложение подключено';
$string['mobileappearance'] = 'Мобильный вид';
$string['mobileappenabled'] = 'На этом сайте разрешен доступ к мобильному приложению.<br /><a href="{$a}">
Загрузить мобильное приложение</a>.';
$string['mobileauthentication'] = 'Аутентификация на мобильных устройствах';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Мобильные функции';
$string['mobilenotificationsdisabledwarning'] = 'Мобильные уведомления не включены. Они должны быть включены в «Управлении сообщениями».';
$string['mobilesettings'] = 'Настройки мобильных устройств';
$string['moodleappsportalfeatureswarning'] = 'Обратите внимание, что некоторые функции могут быть ограничены в зависимости от вашей подписки на приложение Moodle. Для получения подробной информации посетите <a href="{$a}" target="_blank">Портал приложений Moodle</a>.';
$string['oauth2identityproviders'] = 'Поставщики удостоверений OAuth 2';
$string['offlineuse'] = 'Автономное использование';
$string['pluginname'] = 'Инструменты приложения Moodle';
$string['pluginnotenabledorconfigured'] = 'Не включен или не настроен плагин.';
$string['privacy:metadata:core_userkey'] = 'Ключи пользователя, используемые для создания ключа автоматического входа для текущего пользователя.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Дата последнего запроса ключа для автоматического входа в систему. Между запросами необходимо 6 минут.';
$string['readingthisemailgettheapp'] = 'Читаете это по электронной почте? <a href="{$a}"> Загрузите мобильное приложение и получайте уведомления на свое мобильное устройство</a>.';
$string['remoteaddons'] = 'Отдаленные дополнения';
$string['responsivemainmenuitems'] = 'Адаптивные пункты меню';
$string['selfsignedoruntrustedcertificatewarning'] = 'Похоже, сертификат HTTPS самоподписанный или непроверенный. Мобильное приложение будет работать только с доверенными сайтами.';
$string['setuplink'] = 'Страница загрузки приложения';
$string['setuplink_desc'] = 'URL страницы со ссылками для загрузки мобильного приложения из App Store и Google Play.';
$string['smartappbanners'] = 'Баннеры приложений';
$string['typeoflogin'] = 'Тип входа';
$string['typeoflogin_desc'] = 'Если сайт использует метод аутентификации SSO, выберите: через окно браузера или через встроенный браузер. Встроенный браузер обеспечивает лучший пользовательский интерфейс, хотя он работает не со всеми плагинами SSO.';
