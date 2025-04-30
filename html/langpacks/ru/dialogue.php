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
 * Strings for component 'dialogue', language 'ru', version '4.4'.
 *
 * @package     dialogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Действия';
$string['ago'] = 'ранее';
$string['attachment'] = 'Вложение';
$string['attachments'] = 'Вложения';
$string['bulkopener'] = 'Массовые операции';
$string['bulkopenrule'] = 'Массовое открытие';
$string['bulkopenrulenotifymessage'] = '<strong>Примечание:</strong><br/>При использовании правила массового открытия разговоры открываются не сразу. Разговоры будут открываться при запуске системной функции cron, обычно каждые 30 минут.';
$string['bulkopenrules'] = 'Массовое открытие';
$string['cachedef_params'] = 'Параметры - пользовательский интерфейс';
$string['cachedef_participants'] = 'Идентификаторы участников (основная информация)';
$string['cachedef_unreadcounts'] = 'Количество непрочитанных сообщений пользователей в разговорах';
$string['cachedef_userdetails'] = 'Краткие сведения о пользователе, все зарегистрированные пользователи';
$string['cannotclosedraftconversation'] = 'Вы не можете закрыть разговор, который еще не начался!';
$string['cannotdeleteopenconversation'] = 'Вы не можете удалить открытый разговор';
$string['closeconversation'] = 'Закрыть разговор';
$string['closed'] = 'Закрыто';
$string['completed'] = 'Завершено';
$string['configmaxattachments'] = 'Максимальное число вложений в сообщении (по умолчанию)';
$string['configmaxbytes'] = 'Максимальный размер по умолчанию для всех вложений диалога на сайте (с учетом ограничений курса и других локальных настроек)';
$string['configtrackunread'] = 'Отслеживание непрочитанных сообщений диалога на главной странице курса';
$string['configviewconversationsbyrole'] = 'Экспериментально: просмотр разговоров по ролям, упорядоченность разговоров по роли автора';
$string['configviewstudentconversations'] = 'Экспериментально: список студентов с разговорами, в которых они участвуют';
$string['conversation'] = 'Разговор';
$string['conversationcloseconfirm'] = 'Вы действительно хотите закрыть разговор {$a} ?';
$string['conversationclosed'] = 'Разговор {$a} закрыт';
$string['conversationdeleteconfirm'] = 'Вы уверены, что хотите безвозвратно удалить разговор {$a} ?';
$string['conversationdeleted'] = 'Разговор {$a} удален';
$string['conversationdiscarded'] = 'В разговоре отказано';
$string['conversationlistdisplayheader'] = 'Отображение {$a->show} {$a->state} разговоров {$a->groupname}';
$string['conversationopened'] = 'Разговор был открыт';
$string['conversationopenedcron'] = 'Разговор будет открыт автоматически';
$string['conversationopenedwith'] = '<strong>1</strong> разговор открыт:';
$string['conversations'] = 'Разговоры';
$string['conversationsopenedwith'] = 'Открыто разговоров - <strong>{$a}</strong>:';
$string['cutoffdate'] = 'Предельный срок';
$string['day'] = 'день';
$string['days'] = 'дни';
$string['deleteallconversations'] = 'Удалить все разговоры';
$string['deletealldrafts'] = 'Удалить все черновики';
$string['deleteallrules'] = 'Удалить все правила открывания';
$string['deleteconversation'] = 'Удалить разговор';
$string['deletereply'] = 'Удалить ответ';
$string['dialogue:addinstance'] = 'Добавлять Диалог';
$string['dialogue:bulkopenruleeditany'] = 'Позволяет пользователю редактировать любое правило';
$string['dialogue:close'] = 'Закрывать разговор';
$string['dialogue:closeany'] = 'Закрывать любой разговор';
$string['dialogue:delete'] = 'Удалять свой разговор';
$string['dialogue:deleteany'] = 'Удалять любой разговор';
$string['dialogue:open'] = 'Открывать разговор';
$string['dialogue:receive'] = 'Выяснять, кто может быть получателем при открытии разговора';
$string['dialogue:reply'] = 'Отвечать';
$string['dialogue:replyany'] = 'Отвечать в любом разговоре';
$string['dialogue:viewany'] = 'Просматривать любой разговор';
$string['dialogue:viewbyrole'] = 'Просматривать разговоры, упорядоченные по ролям. экспериментально';
$string['dialogueintro'] = 'Описание диалога';
$string['dialoguename'] = 'Название диалога';
$string['displaybystudent'] = 'Показать как студента';
$string['displayconversationsheading'] = 'Отображение разговоров -  {$a}';
$string['displaying'] = 'Отображение';
$string['draft'] = 'Черновик';
$string['draftconversation'] = 'Черновик разговора';
$string['draftlistdisplayheader'] = 'Отображение моих черновиков';
$string['draftreply'] = 'Черновик ответа';
$string['draftreplytrashed'] = 'Черновик удален';
$string['drafts'] = 'Черновики';
$string['errorcutoffdateinpast'] = 'Дата отключения не может быть установлена в прошлом';
$string['erroremptymessage'] = 'Сообщение не может быть пустым';
$string['erroremptysubject'] = 'Тема не может быть пустой';
$string['errornoparticipant'] = 'Вы должны открыть диалог с кем-то ...';
$string['eventconversationclosed'] = 'Разговор закрыт';
$string['eventconversationcreated'] = 'Разговор создан';
$string['eventconversationdeleted'] = 'Разговор удален';
$string['eventconversationviewed'] = 'Разговор просмотрен';
$string['eventreplycreated'] = 'Ответ создан';
$string['everybody'] = 'Все (открыто для всех)';
$string['everyone'] = 'Каждый';
$string['firstname'] = 'Имя';
$string['fullname'] = 'ФИО';
$string['groupmodenotifymessage'] = 'Этот диалог выполняется в групповом режиме, что влияет на то, с кем вы можете начать разговор и какие разговоры отображаются.';
$string['hasnotrun'] = 'Еще не запущен';
$string['hour'] = 'час';
$string['hours'] = 'часы';
$string['includefuturemembers'] = 'Включить будущих участников';
$string['ingroup'] = 'в группе {$a}';
$string['justmy'] = 'только мой';
$string['lastname'] = 'Фамилия';
$string['lastranon'] = 'Последний раз';
$string['latest'] = 'Последние';
$string['listpaginationheader'] = '{$a->start}-{$a->end} из {$a->total}';
$string['maxattachments'] = 'Максимальное количество вложений';
$string['maxattachments_help'] = 'Этот параметр указывает максимальное количество файлов, которые могут быть прикреплены к сообщению диалога.';
$string['maxattachmentsize'] = 'Максимальный размер вложения';
$string['maxattachmentsize_help'] = 'Этот параметр указывает наибольший размер файла, который может быть прикреплен к сообщению диалога.';
$string['message'] = 'Сообщение';
$string['messageapibasicmessage'] = '<p>{$a->userfrom} отправлено новое сообщение в ваш разговор с собеседником: <i>{$a->subject}</i>
<br/><br/><a href="{$a->url}">Просмотреть в Moodle</a></p>';
$string['messageapismallmessage'] = '{$a} отправил(а) новое сообщение в разговор, в котором вы участвуете';
$string['messageprovider:post'] = 'Уведомления о диалоге';
$string['messages'] = 'сообщения';
$string['mine'] = 'Мой';
$string['minute'] = 'минута';
$string['minutes'] = 'минуты';
$string['modulename'] = 'Диалог';
$string['modulename_help'] = 'Диалоги позволяют студентам или учителям начинать двустороннее общение с другим человеком. Это вид активного элемента курса, который может быть полезен, когда учитель хочет, чтобы кто-то предоставил конфиденциальный отзыв ученику на его онлайн-деятельность. Например, если студент участвует в языковом форуме и делает грамматическую ошибку, на которую учитель хочет указать, не смущая студента, то диалог является идеальным выбором. Диалог также будет отличным способом для консультирования студентов - все действия регистрируются и не требуется применение электронной почты';
$string['modulenameplural'] = 'Диалоги';
$string['month'] = 'месяц';
$string['months'] = 'месяцы';
$string['nobulkrulesfound'] = 'Никаких групповых правил не найдено!';
$string['noconversationsfound'] = 'Никаких разговоров не найдено!';
$string['nodraftsfound'] = 'Никаких черновиков не найдено!';
$string['nomatchingpeople'] = 'Нет участников \'{$a}\\';
$string['nopermissiontoclose'] = 'У вас нет прав для закрытия этого разговора!';
$string['nopermissiontodelete'] = 'У вас нет прав для удаления!';
$string['nosubject'] = '[нет темы]';
$string['numberattachments'] = 'Вложения - {$a}';
$string['numberunread'] = 'Не прочитано - {$a}';
$string['oldest'] = 'Самый старший';
$string['onlydraftscanbetrashed'] = 'Удалить можно только черновики';
$string['open'] = 'Открыт';
$string['openedbyfullyear'] = '<small>Открыто</small> <strong>{$a->fullname}</strong> <small>: </small> {$a->datefull} <small>({$a->time})</small>';
$string['openedbyshortyear'] = '<small>Открыто</small> <strong>{$a->fullname}</strong> <small>: </small> {$a->dateshort} <small>({$a->time})</small>';
$string['openedbytoday'] = '<small>Открыто</small> <strong>{$a->fullname}</strong> <small>: </small> {$a->time} <small>({$a->timepast}) ранее</small>';
$string['openwith'] = 'Открыть с';
$string['participants'] = 'участники';
$string['people'] = 'Люди';
$string['pluginadministration'] = 'Управление диалогом';
$string['pluginname'] = 'Диалог';
$string['repliedby'] = '<strong>{$a->fullname}</strong> <small>ответил(а)</small> {$a->timeago}';
$string['repliedbyfullyear'] = '<strong>{$a->fullname}</strong> <small>ответил(а)</small> {$a->datefull} <small>({$a->time})</small>';
$string['repliedbyshortyear'] = '<strong>{$a->fullname}</strong> <small>ответил(а)</small> {$a->dateshort} <small>({$a->time})</small>';
$string['repliedbytoday'] = '<strong>{$a->fullname}</strong> <small>ответил(а)</small> {$a->time} <small>({$a->timepast}) тому назад</small>';
$string['reply'] = 'Ответ';
$string['replydeleteconfirm'] = 'Вы уверены, что хотите удалить этот ответ?';
$string['replydeleted'] = 'Ответ был удален';
$string['replysent'] = 'Ваш ответ был отправлен';
$string['savedraft'] = 'Сохранить черновик';
$string['second'] = 'секунда';
$string['seconds'] = 'секунды';
$string['send'] = 'Отправить';
$string['senton'] = '<small><strong>Отправить в: </strong></small>';
$string['sortedby'] = 'Упорядочить по: {$a}';
$string['studenttostudent'] = 'Студент - Студент';
$string['subject'] = 'Тема';
$string['teachertostudent'] = 'Учитель - Студент';
$string['trashdraft'] = 'Удалить черновик';
$string['unread'] = 'Непрочитано';
$string['unreadmessages'] = 'Непрочитанные сообщения';
$string['unreadmessagesnumber'] = 'Непрочитанные сообщения - {$a}';
$string['unreadmessagesone'] = '1 непрочитанное сообщение';
$string['usecoursegroups'] = 'Использовать группы курса';
$string['usecoursegroups_help'] = 'Если в курсе определены группы, то будет добавлено дополнительное ограничение для того, кто может открыть диалог. Диалоги могут открываться только между членами группы, исключая случаи, когда человек, открывающий диалог, имеет право «Доступ ко всем группам».';
$string['usesearch'] = 'Используйте поиск, чтобы найти людей, с которыми хотите поговорить';
$string['viewconversations'] = 'Просмотр разговоров';
$string['viewconversationsbyrole'] = 'Просмотр разговоров по ролям';
$string['week'] = 'неделя';
$string['weeks'] = 'недели';
$string['year'] = 'год';
$string['years'] = 'годы';
