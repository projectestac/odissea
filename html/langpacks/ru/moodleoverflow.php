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
 * Strings for component 'moodleoverflow', language 'ru', version '4.1'.
 *
 * @package     moodleoverflow
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanewdiscussion'] = 'Добавить новую тему для обсуждения';
$string['addanewreply'] = 'Добавить новый ответ';
$string['allowcoursereputation'] = 'Суммировать репутацию в пределах курса.';
$string['allownegativereputation'] = 'Разрешить отрицательную репутацию?';
$string['allownegativereputation_help'] = 'Если задано «Да», то репутация пользователей в рамках курса или модуля может быть отрицательной. Если задано «Нет», то репутация перестанет уменьшаться, достигнув нуля.';
$string['allowratingchange'] = 'Разрешить изменение оценки';
$string['allsubscribe'] = 'Подписаться на все форумы';
$string['allunsubscribe'] = 'Отписаться от всех форумов';
$string['areaattachment'] = 'Вложения';
$string['areapost'] = 'Сообщения';
$string['attachment'] = 'Вложение';
$string['attachment_help'] = 'Вы можете дополнительно прикрепить один или несколько файлов к сообщению на форуме. Если вы прикрепите изображение, оно будет отображаться после сообщения.';
$string['attachments'] = 'Вложения';
$string['bynameondate'] = '{$a->name} ({$a->rating}) - {$a->date}';
$string['bynameondatenorating'] = '{$a->name} - {$a->date}';
$string['cannotcreatediscussion'] = 'Не удалось создать новое обсуждение';
$string['cannotdeletepost'] = 'Вы не можете удалить это сообщение!';
$string['cannotfindparentpost'] = 'Невозможно найти родительское сообщение для сообщения {$a}';
$string['cannotreply'] = 'Вы не можете отвечать на это сообщение';
$string['cannottrack'] = 'Невозможно отключить отслеживание этого форума';
$string['cannotunsubscribe'] = 'Невозможно отписаться от этого форума';
$string['cannotupdatepost'] = 'Вы не можете обновить это сообщение';
$string['cleanreadtime'] = 'Отметить старые сообщения как прочитанные';
$string['clicktosubscribe'] = 'Вы не подписаны на это обсуждение. Нажмите, чтобы подписаться.';
$string['clicktounsubscribe'] = 'Вы подписаны на это обсуждение. Нажмите, чтобы отменить подписку.';
$string['configallowcoursereputation'] = 'Разрешить суммировать репутацию всех форумов текущего курса?';
$string['configallowratingchange'] = 'Может ли пользователь изменить свою оценку?';
$string['configcleanreadtime'] = 'Время для очистки таблицы "прочитано" от старых сообщений.';
$string['configforcedreadtracking'] = 'Разрешить настроить Moodleoverflows на принудительное отслеживание информации о чтении. Это приведет к снижению эффективности в работе форума, особенно на курсах с большим количеством форумов и сообщений. Когда этот параметр выключен, во всех форумах, ранее настроенных на принудительное отслеживание чтения, эта настройка  рассматривается как необязательная.';
$string['configmanydiscussions'] = 'Максимальное количество обсуждений, показываемых на странице в форуме,';
$string['configmaxattachments'] = 'Максимальное количество вложений, разрешенных по умолчанию для каждого сообщения.';
$string['configmaxbytes'] = 'Максимальный размер по умолчанию для всех вложений форума на сайте (с учетом ограничений курса и других локальных настроек)';
$string['configmaxeditingtime'] = 'Максимальное количество секунд по умолчанию - 3600 (=один час).';
$string['configmaxmailingtime'] = 'Сообщения, поданные позже этого количества часов, не будут отправлены пользователям. Это поможет избежать проблем, когда система автоматического запуска задач не будет работать в течение длительного времени.';
$string['configoldpostdays'] = 'Количество дней, по истечению которых любое сообщение считается прочитанным.';
$string['configpreferteachersmark'] = 'Ответ, отмеченный преподавателем курса как правильное решение, имеет приоритет над ответом, отмеченным инициатором обсуждения как полезный.';
$string['configreputationnotnegative'] = 'Запретить отрицательную репутацию для пользователей.';
$string['configtrackingtype'] = 'Настройка по умолчанию для отслеживания чтения.';
$string['configtrackmoodleoverflow'] = 'Установите «Да», если вы хотите отслеживать прочитано/непрочитано для каждого пользователя.';
$string['configvotescaledownvote'] = 'Репутация после оценки "Против" для вашего сообщения.';
$string['configvotescalehelpful'] = 'Репутация после отметки вашего сообщения как полезного.';
$string['configvotescalesolved'] = 'Репутация после отметки вашего сообщения как правильного решения.';
$string['configvotescaleupvote'] = 'Репутация после оценки "За" для вашего сообщения.';
$string['configvotescalevote'] = 'Репутация, которая складывается после голосования.';
$string['confirmsubscribe'] = 'Вы действительно хотите подписаться на форум \'{$a}\'?';
$string['confirmsubscribediscussion'] = 'Вы действительно хотите подписаться на обсуждение «{$a->discussion}» на форуме «{$a->moodleoverflow}» ?';
$string['confirmunsubscribe'] = 'Вы действительно хотите отписаться от форума «{$a}»?';
$string['confirmunsubscribediscussion'] = 'Вы действительно хотите отписаться от обсуждения  «{$a->discussion}»  в форуме «{$а->moodleoverflow}»?';
$string['couldnotadd'] = 'Не удалось добавить ваше сообщение из-за неизвестной ошибки';
$string['couldnotdeletereplies'] = 'Извините, сообщение не может быть удалено, так как люди уже ответили на него';
$string['couldnotupdate'] = 'Не удалось обновить сообщение из-за неизвестной ошибки';
$string['coursewidereputation'] = 'Суммировать репутации форумов?';
$string['coursewidereputation_help'] = 'Если задано «Да», то репутация пользователей во всех форумах moodleoverflow в рамках данного курса будет суммироваться.';
$string['crontask'] = 'Moodleoverflow находится в разработке';
$string['delete'] = 'Удалить';
$string['deletesure'] = 'Вы уверены, что хотите удалить это сообщение?';
$string['deletesureplural'] = 'Вы уверены, что хотите удалить это сообщение и все ответы? (сообщений - {$a})';
$string['disallowsubscribe'] = 'Подписка не разрешена';
$string['discussionlocked'] = 'Это обсуждение было заблокировано, поэтому вы больше не можете отвечать на него.';
$string['discussionname'] = 'Название обсуждения';
$string['discussionnownotsubscribed'] = '{$a->name} не будет получать уведомления о новых сообщениях в обсуждении «{$a->discussion}» из форума «{$a->moodleoverflow}».';
$string['discussionnowsubscribed'] = '{$a->name} будет получать уведомления о новых сообщениях в обсуждении «{$a->discussion}» из форума «{$a->moodleoverflow}».';
$string['discussions'] = 'Обсуждения';
$string['discussionsubscription'] = 'Подписка на обсуждение';
$string['discussionsubscription_help'] = 'Подписка на обсуждение означает, что вы будете получать уведомления о новых сообщениях в этом обсуждении.';
$string['downvotenotchangeable'] = 'Против (безвозвратно)';
$string['edit'] = 'Редактировать';
$string['editedby'] = 'Отредактировано {$a->name} - изначально отправлено {$a->date}';
$string['editedpostupdated'] = 'сообщение {$a} было обновлено';
$string['erroremptymessage'] = 'Сообщение не может быть пустым';
$string['erroremptysubject'] = 'Тема сообщения не может быть пустой.';
$string['errorwhiledelete'] = 'Произошла ошибка при удалении записи.';
$string['eventdiscussioncreated'] = 'Обсуждение создано';
$string['eventdiscussiondeleted'] = 'Обсуждение удалено';
$string['eventdiscussionsubscriptioncreated'] = 'Создана подписка на обсуждение';
$string['eventdiscussionsubscriptiondeleted'] = 'Подписка на обсуждение удалена';
$string['eventdiscussionviewed'] = 'Обсуждение просмотрено';
$string['eventpostcreated'] = 'Сообщение создано';
$string['eventpostdeleted'] = 'Сообщение удалено';
$string['eventpostupdated'] = 'Сообщение обновлено';
$string['eventratingcreated'] = 'Оценка создана';
$string['eventratingdeleted'] = 'Оценка удалена';
$string['eventratingupdated'] = 'Оценка обновлена';
$string['eventreadtrackingdisabled'] = 'Отслеживание прочитанных сообщений отключено';
$string['eventreadtrackingenabled'] = 'Отслеживание прочитанных сообщений включено';
$string['eventsubscriptioncreated'] = 'Подписка создана';
$string['eventsubscriptiondeleted'] = 'Подписка удалена';
$string['everyonecannowchoose'] = 'Теперь каждый может выбрать подписку';
$string['everyoneisnowsubscribed'] = 'Теперь все подписаны на этот форум';
$string['everyoneissubscribed'] = 'Все подписаны на этот форум';
$string['forcedreadtracking'] = 'Разрешить принудительное отслеживание прочитанных сообщений';
$string['generalmoodleoverflows'] = 'Форумы в этом курсе';
$string['gotoindex'] = 'Управление настройками';
$string['grademaxgradeerror'] = 'Максимальная оценка должна быть положительным целым числом выше 0';
$string['gradesreport'] = 'Отчет об оценках';
$string['gradesupdated'] = 'Оценки обновлены';
$string['hiddenmoodleoverflowpost'] = 'Скрытый пост на форуме';
$string['invaliddiscussionid'] = 'ID обсуждения некорректный';
$string['invalidforcesubscribe'] = 'Недопустимый режим принудительной подписки';
$string['invalidmoodleoverflowid'] = 'Неверный ID форума';
$string['invalidparentpostid'] = 'Неверный ID родительского сообщения';
$string['invalidpostid'] = 'Неверный ID сообщения - {$a}';
$string['invalidratingid'] = 'Представленная оценка - ни «За», ни «Против».';
$string['mailindexlink'] = 'Измените свои настройки форума: {$a}';
$string['manydiscussions'] = 'Обсуждений на странице';
$string['markallread'] = 'Отметить все сообщения в этом обсуждении как прочитанные.';
$string['markdiscussionreadsuccessful'] = 'Обсуждение было отмечено как прочитанное.';
$string['markhelpful'] = 'Пометить как полезное';
$string['markmoodleoverflowreadsuccessful'] = 'Все сообщения были отмечены как прочитанные.';
$string['marknothelpful'] = 'Не полезно';
$string['marknotsolved'] = 'Удалить отметку о правильном решении';
$string['markread'] = 'Отметить как прочитанное';
$string['markreadfailed'] = 'Сообщение в обсуждении не может быть отмечено как прочитанное.';
$string['marksolved'] = 'Отметить как правильное решение';
$string['markunread'] = 'Отметить как непрочитанное';
$string['maxattachments'] = 'Максимальное количество вложений';
$string['maxattachments_help'] = 'Этот параметр определяет максимальное количество файлов, которые могут быть прикреплены к сообщению на форуме.';
$string['maxattachmentsize'] = 'Максимальный размер вложений';
$string['maxattachmentsize_help'] = 'Этот параметр определяет самый большой размер файла, который может быть прикреплен к сообщению на форуме.';
$string['maxeditingtime'] = 'Максимальное количество времени (сек), в течение которого сообщение может быть отредактировано его отправителем.';
$string['maxmailingtime'] = 'Максимальное время отправки сообщения';
$string['message'] = 'Сообщение';
$string['messageprovider:posts'] = 'Уведомление о новых сообщениях';
$string['modulename_help'] = 'Модуль Moodleoverflow позволяет участникам использовать структуру форума "вопрос-ответ". Отображение форума не является хронологическим, так как порядок зависит от голосов, а не от времени.';
$string['moodleoverflow:addinstance'] = 'Добавлять новый экземпляр Moodleoverflow';
$string['moodleoverflow:allowforcesubscribe'] = 'Назначать принудительную подписку';
$string['moodleoverflow:createattachment'] = 'Создавать вложения';
$string['moodleoverflowauthorhidden'] = 'Автор (скрыт)';
$string['moodleoverflowbodyhidden'] = 'Это сообщение не может быть просмотрено. Возможные причины: вы не разместили его в обсуждении; еще не прошло максимальное время редактирования; обсуждение не началось или уже закончилось.';
$string['privacy:metadata:core_files'] = 'Moodleoverflow хранит файлы, которые были загружены пользователем, чтобы сформировать часть сообщения на форуме.';
$string['privacy:metadata:moodleoverflow_discuss_subs'] = 'Информация о подписках на отдельные обсуждения на форуме. Включает в себя данные о том, когда пользователь решил подписаться на обсуждение или отписаться от того, на которое он иначе был бы подписан.';
$string['privacy:metadata:moodleoverflow_discuss_subs:discussion'] = 'Код обсуждения, на которое пользователь подписался или отписался.';
$string['privacy:metadata:moodleoverflow_discuss_subs:preference'] = 'Время начала подписки.';
$string['privacy:metadata:moodleoverflow_discuss_subs:userid'] = 'Код пользователя, который изменил настройки подписки.';
$string['privacy:metadata:moodleoverflow_discussions'] = 'Информация об обсуждениях на форуме. Включает в себя обсуждения, которые пользователь начал.';
$string['privacy:metadata:moodleoverflow_discussions:name'] = 'Название обсуждения.';
$string['privacy:metadata:moodleoverflow_discussions:timemodified'] = 'Время, когда обсуждение (например, сообщение) было изменено в последний раз.';
$string['privacy:metadata:moodleoverflow_discussions:userid'] = 'Код пользователя, который создал обсуждение.';
$string['privacy:metadata:moodleoverflow_discussions:usermodified'] = 'Код пользователя, который последним изменил обсуждение';
$string['privacy:metadata:moodleoverflow_posts'] = 'Информация о сообщениях на форуме. Включает в себя сведения о сообщениях, написанных пользователем.';
$string['privacy:metadata:moodleoverflow_posts:created'] = 'Дата создания этого сообщения.';
$string['privacy:metadata:moodleoverflow_posts:discussion'] = 'Код обсуждения, к которому это сообщение относится.';
$string['privacy:metadata:moodleoverflow_posts:message'] = 'Текст данного сообщения.';
$string['privacy:metadata:moodleoverflow_posts:modified'] = 'Последняя дата, когда это сообщение было изменено.';
$string['privacy:metadata:moodleoverflow_posts:parent'] = 'Код обсуждения, к которому относится сообщение с оценкой.';
$string['privacy:metadata:moodleoverflow_posts:userid'] = 'Код пользователя, который отправил это сообщение.';
$string['privacy:metadata:moodleoverflow_ratings'] = 'Информация об оценках сообщений. Включает в себя информацию о том, когда пользователь оценил сообщение и его конкретную оценку.';
$string['privacy:metadata:moodleoverflow_ratings:discussionid'] = 'Код обсуждения, к которому относится сообщение с оценкой.';
$string['privacy:metadata:moodleoverflow_ratings:firstrated'] = 'Дата, когда оценка была представлена.';
$string['privacy:metadata:moodleoverflow_ratings:lastchanged'] = 'Дата, когда оценка была изменена в последний раз.';
$string['privacy:metadata:moodleoverflow_ratings:moodleoverflowid'] = 'Код форума Moodleoverflow, который содержит сообщение с оценкой.';
$string['privacy:metadata:moodleoverflow_ratings:postid'] = 'Код сообщения, которое было оценено.';
$string['privacy:metadata:moodleoverflow_ratings:rating'] = 'Представленная оценка. 0 = нейтрально, 1 = отрицательно, 2 = положительно, 3 = полезно, 4 = решение';
$string['privacy:metadata:moodleoverflow_ratings:userid'] = 'Код пользователя, представившего оценку.';
$string['privacy:metadata:moodleoverflow_read'] = 'Информация об отслеживании прочтения сообщений. Включает в себя информацию о том, когда сообщения были прочитаны пользователем.';
$string['privacy:metadata:moodleoverflow_read:discussionid'] = 'Код обсуждения, которому принадлежит прочитанное сообщение,';
$string['privacy:metadata:moodleoverflow_read:firstread'] = 'Дата, когда сообщение было прочитано в первый раз.';
$string['privacy:metadata:moodleoverflow_read:lastread'] = 'Дата, когда сообщение было прочитано пользователем в последний раз.';
$string['privacy:metadata:moodleoverflow_read:postid'] = 'Код сообщения, которое было прочитано.';
$string['privacy:metadata:moodleoverflow_read:userid'] = 'Код пользователя, который прочитал сообщение.';
$string['privacy:metadata:moodleoverflow_subscriptions'] = 'Информация о подписках на форумы. Включает в себя информацию о том, на какие форумы подписался пользователь.';
$string['privacy:metadata:moodleoverflow_subscriptions:moodleoverflow'] = 'Код форума Moodleoverflow, на который подписан пользователь.';
$string['privacy:metadata:moodleoverflow_subscriptions:userid'] = 'Код пользователя, подписавшегося на форум.';
$string['privacy:metadata:moodleoverflow_tracking'] = 'Информация об отслеживании форумов. Включает в себя информацию о том, какие форумы пользователь не отслеживает.';
$string['privacy:metadata:moodleoverflow_tracking:moodleoverflowid'] = 'Код форума moodleoverflow, который не отслеживается пользователем.';
$string['privacy:metadata:moodleoverflow_tracking:userid'] = 'Код пользователя, который не отслеживает форум.';
$string['privacy:postwasread'] = 'Это сообщение было впервые прочитано {$a->firstread}, а последний раз прочитано {$a->lastread}';
$string['privacy:readtrackingdisabled'] = 'Вы решили не отслеживать, какие сообщения Вы прочитали на этом форуме.';
$string['privacy:subscribedtoforum'] = 'Вы подписаны на этот форум.';
$string['rateownpost'] = 'Вы не можете оценить свое сообщение.';
$string['ratingfailed'] = 'Оценка не поставлена. Попробуйте еще раз.';
$string['ratingheading'] = 'Оценка и репутация';
$string['ratingpreference'] = 'Показать первым';
$string['ratingpreference_help'] = 'Ответы могут быть помечены как решение и полезные. Эта опция решает, какой из них будет закреплен в качестве первого ответа в обсуждении. Есть 2 варианта:

* Полезно - отметка автора темы о полезности будет закреплена в верхней части обсуждения
* Решение - отметка преподавателя о решении будет закреплена в верхней части обсуждения';
$string['ratingtoold'] = 'Оценки могут быть изменены только в течение 30 минут после первого голосования.';
$string['re'] = 'Ответ:';
$string['reply'] = 'Комментарий';
$string['replyfirst'] = 'Ответить';
$string['reputation'] = 'Репутация';
$string['reputationnotnegative'] = 'Репутация только положительная?';
$string['scalefactor'] = 'Коэффициент масштаба';
$string['scalefactor_help'] = 'Оценка пользователя делится на коэффициент масштабирования для получения оценки каждого пользователя. Если итоговая оценка превышает максимальную оценку, значение ограничивается указанной максимальной оценкой';
$string['scalefactorerror'] = 'Коэффициент масштаба должен быть положительным целым, отличным от 0';
$string['smallmessage'] = 'Пользователем {$a->user} размещено сообщение в {$a->moodleoverflowname}';
$string['starterrating'] = 'Полезно';
$string['subject'] = 'Предмет';
$string['subscribe'] = 'Подписаться на этот форум';
$string['subscribed'] = 'Подписан';
$string['subscribeenrolledonly'] = 'Извините, только зарегистрированные пользователи могут подписаться на уведомления.';
$string['subscribestart'] = 'Присылать мне уведомления о новых сообщениях в этом форуме';
$string['subscribestop'] = 'Я не хочу получать уведомления о новых сообщениях на этом форуме';
$string['subscriptionauto'] = 'Автоматическая подписка';
$string['subscriptiondisabled'] = 'Подписка отключена';
$string['subscriptionforced'] = 'Обязательная подписка';
$string['subscriptionmode'] = 'Режим подписки';
$string['subscriptionmode_help'] = 'Когда участник подписан на форум, это означает, что он будет получать уведомления о сообщениях на форуме. Есть 4 варианта режима подписки:

* Добровольная подписка - участники могут выбрать, следует ли подписаться
* Обязательная подписка - все подписаны и не могут отписаться
* Автоматическая подписка - все подписаны изначально, но могут отказаться от подписки в любое время
* Подписка отключена - подписки не допускаются

Примечание: Любые изменения режима подписки будут влиять только на пользователей, которые будут записываться на курс в будущем, а не на существующих пользователей.';
$string['subscriptionoptional'] = 'Добровольная подписка';
$string['subscriptiontrackingheader'] = 'Подписка и отслеживание';
$string['taskcleanreadrecords'] = 'Работа по техническому обслуживанию Moodleoverflow для очистки старых прочитанных записей';
$string['tasksendmails'] = 'Работа по техническому обслуживанию Moodleoverflow для отправки почты';
$string['taskupdategrades'] = 'Работа по техническому обслуживанию Moodleoverflow для обновления оценок';
$string['teacherrating'] = 'Решение';
$string['tracking'] = 'Отслеживание';
$string['trackingoff'] = 'Выключено';
$string['trackingon'] = 'Обязательно';
$string['trackingoptional'] = 'Необязательно';
$string['trackingtype'] = 'Отслеживание прочтения';
$string['trackingtype_help'] = 'Отслеживание прочтения с выделением новых сообщений позволяет участникам легко проверить, какие сообщения они еще не видели.

Если установлено необязательное отслеживание (включено по умолчанию), то участники могут отключить отслеживание.

Если в администрировании сайта включена опция «Разрешить обязательное отслеживание прочтения», то доступна дополнительная опция - обязательно. Это означает, что отслеживание всегда включено.';
$string['trackmoodleoverflow'] = 'Отслеживать непрочитанные сообщения';
$string['unknownerror'] = 'Этого не ожидается.';
$string['unreadposts'] = 'Непрочитанные сообщения';
$string['unreadpostsnumber'] = 'Непрочитанные сообщения: {$a}';
$string['unreadpostsone'] = '1 непрочитанное сообщение';
$string['unsubscribe'] = 'Отписаться от этого форума';
$string['unsubscribediscussion'] = 'Отписаться от этого обсуждения';
$string['unsubscribediscussionlink'] = 'Отписаться от этого обсуждения: {$a}';
$string['unsubscribelink'] = 'Отписаться от этого форума: {$a}';
$string['updategrades'] = 'Обновить оценки';
$string['upvotenotchangeable'] = 'Понравилось (не изменяется)';
$string['votescaledownvote'] = 'Репутация: Не понравилось';
$string['votescalehelpful'] = 'Репутация: Полезно';
$string['votescalesolved'] = 'Репутация: Решение';
$string['votescaleupvote'] = 'Репутация: Понравилось';
$string['votescalevote'] = 'Репутация: Голосовать.';
$string['yournewtopic'] = 'Ваша новая тема для обсуждения';
$string['yourreply'] = 'Ваш ответ';
