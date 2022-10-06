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
 * Strings for component 'chat', language 'ru', branch 'MOODLE_38_STABLE'
 *
 * @package   chat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Предстоящие чат-сессии';
$string['ajax'] = 'Версия с использованием AJAX';
$string['autoscroll'] = 'Автоматическая прокрутка';
$string['beep'] = 'Сигнал';
$string['bubble'] = '«Пузырь»';
$string['cantlogin'] = 'Невозможно войти в чат!!';
$string['chat:addinstance'] = 'Добавлять новый чат';
$string['chat:chat'] = 'Входить в чат';
$string['chat:deletelog'] = 'Очищать журнал сообщений чата';
$string['chat:exportparticipatedsession'] = 'Экспортировать сессии чатов, в которых пользователь принимал участие';
$string['chat:exportsession'] = 'Экспортировать любые сессии чатов';
$string['chatintro'] = 'Вступление';
$string['chatname'] = 'Название чата';
$string['chat:readlog'] = 'Просматривать журнал сообщений чата';
$string['chatreport'] = 'Сессии чата';
$string['chat:talk'] = 'Высказываться в чате';
$string['chattime'] = 'Следующее время чата';
$string['chat:view'] = 'Просматривать элемент курса «Чат»';
$string['compact'] = 'Компактный';
$string['composemessage'] = 'Написать сообщение';
$string['configmethod'] = 'В режиме чата AJAX используется интерфейс, который автоматически соединяется с сервером для обновления сообщений.
В нормальном режиме пользователь вынужден самостоятельно соединяться с сервером для обновления. Для нормального режима не требуется настройка и он работает везде, но может создать серьезную нагрузку на сервер при большом количестве участников.
Для режима чат-сервера требуется доступ к shell в Unix, но это позволяет получить быстрый масштабируемый чат.';
$string['confignormalupdatemode'] = 'Обновления чата, как правило, служат для эффективного использования <em>вспомогательной</em> возможности HTTP 1.1 и действительно нагружают сервер. Более продвинутый метод заключается в использовании стратегии <em>потокового (Stream)</em>  обеспечения обновлений для пользователей. Использование <em>Stream</em> намного лучше  (подобно методу chatd), но может не поддерживаться вашим сервером.';
$string['configoldping'] = 'После того как долгое время не слышно пользователя, мы считаем что он нас покинул?';
$string['configrefreshroom'] = 'Как часто страница чата должна обновляться? (в секундах). Установка меньшего значения создаст иллюзию скорости, но может создать большую нагрузку на веб-сервер, когда много людей будут общаться в чате. В режиме <em>Stream</em> можно установить более частое обновление, например 2.';
$string['configrefreshuserlist'] = 'Как часто должен обновляться список пользователей? (в секундах).';
$string['configserverhost'] = 'Имя узла сети, на котором запущен сервер';
$string['configserverip'] = 'IP-адрес, соответствующий указанному выше имени узла сети';
$string['configservermax'] = 'Максимальное разрешенное число клиентов';
$string['configserverport'] = 'Порт сервера';
$string['coursetheme'] = 'Тема курса';
$string['currentchats'] = 'Работающие на данный момент чаты';
$string['currentusers'] = 'Текущие пользователи';
$string['deletesession'] = 'Удалить эту сессию';
$string['deletesessionsure'] = 'Вы уверены, что необходимо удалить эту сессию?';
$string['donotusechattime'] = 'Не показывать время работы чата';
$string['enterchat'] = 'Войти в чат';
$string['entermessage'] = 'Введите свое сообщение';
$string['errornousers'] = 'Нет ни одного пользователя!';
$string['eventmessagesent'] = 'Отправлено сообщение';
$string['eventsessionsviewed'] = 'Сессии просмотрены';
$string['explaingeneralconfig'] = 'Эти параметры используются <strong>всегда</strong>';
$string['explainmethoddaemon'] = 'Эти параметры используются <strong>только</strong> если выбран режим чата «Режим чат-сервера»';
$string['explainmethodnormal'] = 'Эти параметры используются <strong>только</strong> если выбран режим чата «Нормальный»';
$string['generalconfig'] = 'Основная конфигурация';
$string['idle'] = 'Фоном';
$string['indicator:cognitivedepth'] = 'Чат: познавательный аспект';
$string['indicator:cognitivedepth_help'] = 'Этот показатель основан на  глубине познания, достигнутой студентом при участии в Чатах.';
$string['indicator:socialbreadth'] = 'Чат: социальный аспект';
$string['indicator:socialbreadth_help'] = 'Этот показатель основан на широте общения, которая может быть достигнута студентом при работе с элементом Чат.';
$string['inputarea'] = 'Область ввода';
$string['invalidid'] = 'Невозможно найти этот чат!';
$string['list_all_sessions'] = 'Список всех сессий.';
$string['list_complete_sessions'] = 'Список завершенных сессий.';
$string['listing_all_sessions'] = 'Вывод всех сессий.';
$string['messagebeepseveryone'] = '{$a} отправил сигнал всем!';
$string['messagebeepsyou'] = '{$a} отправил Вам сигнал!';
$string['messageenter'] = '{$a} появился в чате';
$string['messageexit'] = '{$a} ушел из чата';
$string['messages'] = 'Сообщения';
$string['messageyoubeep'] = 'Вы отправили сигнал {$a}';
$string['method'] = 'Режим чата';
$string['methodajax'] = 'AJAX';
$string['methoddaemon'] = 'Режим чат-сервера';
$string['methodnormal'] = 'Нормальный';
$string['modulename'] = 'Чат';
$string['modulename_help'] = 'Модуль «Чат» позволяет участникам иметь возможность синхронного письменного общения в реальном времени.

Чат может быть одноразовым мероприятием или может повторяться в одно и то же время каждый день или каждую неделю. Чат-сессии сохраняются и могут быть доступны для просмотра всем или только некоторым пользователям.

Чаты особенно полезны, когда группа не может встретиться очно, например, в случаях:

* регулярные встречи студентов для обмена опытом с другими, находящимися в одном курсе, но в разных местах.
* студент временно не может присутствовать лично в беседе со своим учителем.
* студенты собираются вместе, чтобы обсудить свои достижения друг с другом и с преподавателем.
* младшие дети используют чат дома по вечерам для знакомства с миром социальных сетей.
* сессии вопросов и ответов с приглашенным докладчиком.
* помощь студентам в подготовке к тестам, в которых преподаватель или другие студенты будут представлять примерные вопросы.';
$string['modulenameplural'] = 'Чаты';
$string['neverdeletemessages'] = 'Никогда не удалять сообщения';
$string['nextsession'] = 'Следующая запланированная сессия';
$string['nochat'] = 'Нет ни одного чата';
$string['no_complete_sessions_found'] = 'Сессии не найдены.';
$string['noguests'] = 'Данный чат недоступен для гостей';
$string['nomessages'] = 'Нет ни одного сообщения';
$string['nopermissiontoseethechatlog'] = 'У Вас нет прав для просмотра истории чата.';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Нет запланированных сессий';
$string['notallowenter'] = 'Вам не разрешено входить в чат.';
$string['notlogged'] = 'Вы не вошли в систему!';
$string['oldping'] = 'Таймаут отключения';
$string['page-mod-chat-x'] = 'Любая страница модуля «Чат»';
$string['pastchats'] = 'Предыдущие чат-сессии';
$string['pluginadministration'] = 'Управление чатом';
$string['pluginname'] = 'Чат';
$string['privacy:metadata:chat_messages_current'] = 'Текущий сеанс чата. Эти данные являются временными и удаляются после удаления сеанса чата.';
$string['privacy:metadata:chat_users'] = 'Отслеживает, какие пользователи в каких чатах';
$string['privacy:metadata:chat_users:firstping'] = 'Время первого доступа в чат';
$string['privacy:metadata:chat_users:ip'] = 'IP пользователя';
$string['privacy:metadata:chat_users:lang'] = 'Язык пользователя';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Время последнего сообщения в этом чате';
$string['privacy:metadata:chat_users:lastping'] = 'Время последнего доступа к чату';
$string['privacy:metadata:chat_users:userid'] = 'ID пользователя';
$string['privacy:metadata:chat_users:version'] = 'Как пользователь получил доступ к чату  (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Запись о сообщениях, отправленных во время сеанса чата';
$string['privacy:metadata:messages:issystem'] = 'Является ли сообщение сгенерированным системой';
$string['privacy:metadata:messages:message'] = 'Сообщение';
$string['privacy:metadata:messages:timestamp'] = 'Время, когда сообщение было отправлено.';
$string['privacy:metadata:messages:userid'] = 'ID пользователя-автора сообщения';
$string['refreshroom'] = 'Обновлять страницу чата';
$string['refreshuserlist'] = 'Обновлять список пользователей';
$string['removemessages'] = 'Удалить все сообщения';
$string['repeatdaily'] = 'В это же время каждый день';
$string['repeatnone'] = 'Не повторять сесси.';
$string['repeattimes'] = 'Повторять сеансы';
$string['repeatweekly'] = 'В это же время каждую неделю';
$string['saidto'] = 'сказано';
$string['savemessages'] = 'Количество запоминаемых сообщений';
$string['search:activity'] = 'Чат — информация об элементе курса';
$string['seesession'] = 'Посмотреть сессию';
$string['send'] = 'Отправить';
$string['sending'] = 'Отправка';
$string['serverhost'] = 'Имя сервера';
$string['serverip'] = 'IP сервера';
$string['servermax'] = 'Пользователей макс.';
$string['serverport'] = 'Порт сервера';
$string['sessions'] = 'Чат-сессии';
$string['sessionstart'] = 'Следующий сеанс чата начнётся: {$a->date}, (через {$a->fromnow})';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Все могут посмотреть сессии';
$string['studentseereports_help'] = 'Если выбрано значение «Нет», то только пользователи с правом «mod/chat:readlog» смогут просматривать журнал чата';
$string['talk'] = 'Разговор';
$string['updatemethod'] = 'Метод обновления';
$string['updaterate'] = 'Частота обновления:';
$string['userlist'] = 'Список пользователей';
$string['usingchat'] = 'Использовать чат';
$string['usingchat_help'] = '<h2>Использование чата</h2>

<p>Модуль чата содержит некоторые возможности для того, чтобы общение было приятным.</p>

<dl>
<dt><b>Смайлики</b></dt>
<dd>Любые смайлики, которые вам известны, можете использовать в Moodle, и они будут отображаться корректно. Например, :-) = <img alt="улыбка" src="pix/s/smiley.gif" /> </dd>

<dt><b>Ссылки</b></dt>
<dd>Интернет-адреса преобразовываются в ссылки автоматически.</dd>
<dt><b>Эмоции</b></dt>
<dd>Вы можете начать строку с «/me» или «:» для проявлений эмоций. Например, если вас зовут Ким и вы напечатаете «:смеется!» или «/me смеется!» все увидят «Ким смеется!»</dd>


<dt><b>Звуковые сигналы</b></dt>
<dd>Вы можете отправлять другим людям звуковые сигналы с помощью команды «beep» после имени пользователя. Для отправки звукового сигнала всем используйте команду «beep all».</dd>

<dt><b>HTML</b></dt>
<dd>Если вы знаете HTML, вы можете вставлять в текст сообщений рисунки, проигрывать звуки и выделять текст цветом и размером.</dd>

</dl>';
$string['viewreport'] = 'Посмотреть прошлые чат-сессии';
