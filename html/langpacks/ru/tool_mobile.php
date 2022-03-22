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
 * Strings for component 'tool_mobile', language 'ru', version '3.11'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
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
$string['cachedef_subscriptiondata'] = 'Здесь хранится информация о подписке на приложение Moodle.';
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
$string['darkmode'] = 'Темный режим';
$string['disabledfeatures'] = 'Отключенные функции';
$string['disabledfeatures_desc'] = 'Выберите здесь функции, которые вы хотите отключить в мобильном приложении для своего сайта. Обратите внимание, что некоторые функции, перечисленные здесь, могут быть уже отключены с помощью других настроек сайта. Увидеть изменения вы сможете после повторного входа в приложение.';
$string['displayerrorswarning'] = 'Отображение сообщений отладки (debugdisplay) включено. Его нужно отключить.';
$string['downloadcourse'] = 'Скачать курс';
$string['downloadcourses'] = 'Скачать курсы';
$string['enablesmartappbanners'] = 'Включить баннеры приложений';
$string['enablesmartappbanners_desc'] = 'При входе на сайт через мобильный браузер будет отображаться баннер, рекламирующий мобильное приложение Moodle.';
$string['filetypeexclusionlist'] = 'Список исключений типов файлов';
$string['filetypeexclusionlist_desc'] = 'Выберите все типы файлов, которые не предназначены для использования на мобильных устройствах. Такие файлы по-прежнему будут отображаться в курсе на экране приложения, но при попытке открыть их пользователю будет выведено предупреждение о том, что этот тип файла не предназначен для использования на мобильном устройстве. Затем пользователь может отменить или проигнорировать предупреждение и в любом случае открыть файл.';
$string['filetypeexclusionlistplaceholder'] = 'Список исключений типов файлов для мобильных приложений.';
$string['forcedurlscheme'] = 'Если вы хотите, чтобы в окне браузера открывалось бы только ваше фирменное приложение, укажите здесь схему его URL. Если вы хотите разрешить только официальное приложение, то установите значение по умолчанию. Оставьте поле пустым, если вы хотите разрешить любое приложение.';
$string['forcedurlscheme_key'] = 'Схема URL';
$string['forcelogout'] = 'Принудительный выход из системы';
$string['forcelogout_desc'] = 'При включенном параметре пользователи всегда будут полностью выходить из системы, даже при переключении учетных записей. Они должны повторно ввести свой пароль при следующем входе на сайт.';
$string['getmoodleonyourmobile'] = 'Скачать мобильное приложение';
$string['h5poffline'] = 'Просмотр контента H5P в автономном режиме';
$string['httpsrequired'] = 'Требуется HTTPS';
$string['insecurealgorithmwarning'] = 'Похоже, HTTPS-сертификат использует небезопасный алгоритм подписи (SHA-1). Попробуйте обновить сертификат.';
$string['invalidcertificatechainwarning'] = 'Кажется, что последовательность сертификатов недействительна. Этот сертификат может работать в браузере, но не в мобильном приложении.';
$string['invalidcertificateexpiredatewarning'] = 'Похоже, что  истек срок действия сертификата HTTPS для сайта.';
$string['invalidcertificatestartdatewarning'] = 'Похоже, сертификат HTTPS для сайта еще недействителен (с датой начала в будущем).';
$string['invalidprivatetoken'] = 'Неверный закрытый ключ. Ключ не должен быть пустым или передаваться при помощи параметра GET.';
$string['invaliduserquotawarning'] = 'Пользовательская квота (userquota) имеет недопустимое значение. В настройках безопасности сайта должно быть указано допустимое (целое) число.';
$string['iosappid'] = 'Уникальный идентификатор приложения iOS';
$string['iosappid_desc'] = 'Эту настройку можно не трогать, пока у вас нет фирменного iOS приложения.';
$string['launchviasiteinbrowser'] = 'Запуск через сайт в системном браузере';
$string['loginintheapp'] = 'через приложение';
$string['logininthebrowser'] = 'через окно браузера (для плагинов SSO - системы единого входа)';
$string['loginintheembeddedbrowser'] = 'через встроенный браузер (для плагинов SSO - системы единого входа)';
$string['logoutconfirmation'] = 'Вы действительно хотите выйти из мобильного приложения на своих мобильных устройствах? После выхода из системы, вам нужно будет повторно ввести свои логин и пароль в мобильном приложении на всех устройствах, на которых оно установлено.';
$string['mainmenu'] = 'Главное меню';
$string['managefiletypes'] = 'Управление типами файлов';
$string['minimumversion'] = 'Если указана версия приложения (3.8.0 или выше), всем пользователям, использующим более старую версию приложения, будет предложено обновить свое приложение, прежде чем им будет разрешен доступ к сайту.';
$string['minimumversion_key'] = 'Требуемая минимальная версия приложения';
$string['mobileapp'] = 'Мобильное приложение';
$string['mobileappconnected'] = 'Мобильное приложение подключено';
$string['mobileappearance'] = 'Мобильный вид';
$string['mobileappenabled'] = 'На этом сайте разрешен доступ к мобильному приложению.<br /><a href="{$a}">
Загрузить мобильное приложение</a>.';
$string['mobileappsubscription'] = 'Подписка на приложение Moodle';
$string['mobileauthentication'] = 'Аутентификация на мобильных устройствах';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Мобильные функции';
$string['mobilenotificationsdisabledwarning'] = 'Мобильные уведомления не включены. Они должны быть включены в «Управлении сообщениями».';
$string['mobilesettings'] = 'Настройки мобильных устройств';
$string['moodleappsportalfeatureswarning'] = 'Обратите внимание, что некоторые функции могут быть ограничены в зависимости от вашей подписки на приложение Moodle. Для получения подробной информации посетите <a href="{$a}" target="_blank">Портал приложений Moodle</a>.';
$string['notifications'] = 'Уведомления';
$string['notificationsactivedevices'] = 'Активные устройства';
$string['notificationscurrentactivedevices'] = 'Устройства, получающие уведомления в этом месяце';
$string['notificationsignorednotifications'] = 'Уведомления не отправлены';
$string['notificationslimitreached'] = 'Превышен месячный лимит активных пользователей. Уведомления для некоторых пользователей отправляться не будут. Рекомендуется обновить тарифный план приложения на <a href="{$a}" target="_blank"> Портале приложений Moodle </a>.';
$string['notificationsmissingwarning'] = 'Не удалось получить статистику уведомлений приложения Moodle. Скорее всего, это связано с тем, что мобильные уведомления еще не включены на сайте. Вы можете включить их в Администрирование/Обмен сообщениями/Мобильные уведомления.';
$string['notificationsnewdevices'] = 'Новые устройства';
$string['notificationsseemore'] = 'Примечание: Статистика использования приложения Moodle не рассчитывается в реальном времени. Чтобы получить доступ к более подробной статистике, включая данные за предыдущие месяцы, зайдите на <a href="{$a}" target="_blank">Портал приложений Moodle</a>.';
$string['notificationssentnotifications'] = 'Уведомления отправлены';
$string['oauth2identityproviders'] = 'Поставщики удостоверений OAuth 2';
$string['offlineuse'] = 'Автономное использование';
$string['openusingembeddedbrowser'] = 'Открыть с помощью встроенного браузера';
$string['pluginname'] = 'Инструменты приложения Moodle';
$string['pluginnotenabledorconfigured'] = 'Не включен или не настроен плагин.';
$string['privacy:metadata:core_userkey'] = 'Ключи пользователя, используемые для создания ключа автоматического входа для текущего пользователя.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'Дата последнего запроса ключа для автоматического входа в систему. Между запросами необходимо 6 минут.';
$string['qrcodedisabled'] = 'Доступ через QR-код отключен';
$string['qrcodeformobileappaccess'] = 'QR-код для доступа к мобильному приложению';
$string['qrcodeformobileapploginabout'] = 'Отсканируйте QR-код своим мобильным приложением и вы автоматически войдете в систему. Срок действия QR-кода истечет через {$a} минут.';
$string['qrcodeformobileappurlabout'] = 'Отсканируйте QR-код своим мобильным приложением, чтобы ввести URL-адрес сайта в свое приложение.';
$string['qrcodetype'] = 'Доступ по QR-коду';
$string['qrcodetype_desc'] = 'QR-код может быть предоставлен для сканирования пользователям мобильного приложения. Это можно использовать для заполнения URL-адреса сайта или, если сайт защищен с помощью HTTPS - для автоматического входа пользователя в систему без необходимости вводить его логин и пароль.';
$string['qrcodetypelogin'] = 'QR-код с автоматическим входом';
$string['qrcodetypeurl'] = 'QR-код с URL-адресом сайта';
$string['qrsiteadminsnotallowed'] = 'По соображениям безопасности вход через QR-код не разрешен для администраторов сайта или при входе в систему под другим пользователем.';
$string['readingthisemailgettheapp'] = 'Читаете это по электронной почте? <a href="{$a}"> Загрузите мобильное приложение и получайте уведомления на свое мобильное устройство</a>.';
$string['remoteaddons'] = 'Отдаленные дополнения';
$string['responsivemainmenuitems'] = 'Адаптивные пункты меню';
$string['scanqrcode'] = 'Сканировать QR-код';
$string['selfsignedoruntrustedcertificatewarning'] = 'Похоже, сертификат HTTPS самоподписанный или непроверенный. Мобильное приложение будет работать только с доверенными сайтами. Используйте любую онлайн-программу проверки SSL для дальнейшей диагностики проблемы. Если эти инструменты показывают, что ваш сертификат в порядке, вы можете проигнорировать это предупреждение.';
$string['setuplink'] = 'Страница загрузки приложения';
$string['setuplink_desc'] = 'URL-адрес страницы с возможностью загрузки мобильного приложения из App Store и Google Play. Ссылка на страницу загрузки приложения отображается в нижнем колонтитуле страницы и в профиле пользователя. Оставьте поле пустым, чтобы ссылка не отображалась.';
$string['smartappbanners'] = 'Баннеры приложений';
$string['subscription'] = 'Подписка';
$string['subscriptioncreated'] = 'Дата начала';
$string['subscriptionerrorrequest'] = 'При попытке получить информацию о подписке на приложение Moodle произошла непредвиденная ошибка.';
$string['subscriptionexpiration'] = 'Дата истечения срока';
$string['subscriptionfeaturenotapplied'] = 'Эта функция настроена на вашем сайте, но не включена в ваш тарифный план приложения Moodle. Т.е. настройка не будет иметь никакого эффекта.';
$string['subscriptionfeatures'] = 'Возможности подписки.';
$string['subscriptionlimitsurpassed'] = 'Превышен лимит подписки';
$string['subscriptionregister'] = 'Для получения подробной информации о различных планах приложений и доступа к статистике использования приложений Moodle посетите <a href="{$a}" target="_blank"> Портал приложений Moodle</a>.';
$string['subscriptionsseemore'] = 'Примечание: Отображаемая информация не обновляется в реальном времени. Возможно, вам придется выйти и снова войти в систему, чтобы увидеть обновления. Чтобы получить информацию об обновлении тарифного плана приложения, зайдите на <a href="{$a}" target="_blank"> Портал приложений Moodle</a>.';
$string['switchaccount'] = 'Сменить аккаунт';
$string['typeoflogin'] = 'Тип входа';
$string['typeoflogin_desc'] = 'Если сайт использует метод аутентификации SSO, выберите: через окно браузера или через встроенный браузер. Встроенный браузер обеспечивает лучший пользовательский интерфейс, хотя он работает не со всеми плагинами SSO.';
$string['viewqrcode'] = 'Просмотр QR-кода';
