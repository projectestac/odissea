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
 * Strings for component 'grading', language 'ru', version '4.1'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = 'Метод «{$a->method}» выбран в качестве активного метода оценивания для области «{$a->area}»';
$string['activemethodinfonone'] = 'Для области «{$a->area}» выбран не передовой метод оценивания. Будет использоваться простое непосредственное оценивание.';
$string['changeactivemethod'] = 'Изменить активный метод оценивания на';
$string['clicktoclose'] = 'щелкните, чтобы закрыть';
$string['error:gradingunavailable'] = 'Неправильно задан передовой метод оценки. Пожалуйста, проверьте все параметры выставления оценок в настройках форума.';
$string['error:notinrange'] = 'Выставлена неверная оценка "{$a->grade}". Оценки должны быть от 0 до {$a->maxgrade}.';
$string['exc_gradingformelement'] = 'Не удалось создать экземпляр элемента формы оценивания';
$string['formnotavailable'] = 'Для использования был выбран передовой метод оценивания, но его форма оценивания еще не готова.';
$string['gradingformunavailable'] = 'Пожалуйста, обратите внимание: форма передового оценивания не готова в данный момент. Пока форма не имеет необходимого статуса, будет использоваться простой метод оценивания.';
$string['gradingmanagement'] = 'Передовое оценивание';
$string['gradingmanagementtitle'] = 'Передовое оценивание:
{$a->component} ({$a->area})';
$string['gradingmethod'] = 'Метод оценивания';
$string['gradingmethod_help'] = 'Выберите метод передового оценивания, который будет использован для подсчета оценок в заданном контексте.

Для отключения передового метода оценивания и возврата к стандартному механизму, выберите «Простое непосредственное оценивание».';
$string['gradingmethodnone'] = 'Простое непосредственное оценивание';
$string['gradingmethods'] = 'Методы оценивания';
$string['manageactionclone'] = 'Создание новой формы оценивания на основе шаблона';
$string['manageactiondelete'] = 'Удалить заданную в настоящее время форму';
$string['manageactiondeleteconfirm'] = 'Вы собираетесь удалить форму оценивания «{$a->formname}» и всю сопутствующую информацию из «{$a->component} ({$a->area})». Пожалуйста, убедитесь, что Вы осознаете следующие последствия:

* Эту операцию невозможно отменить.
* Вы можете без удаления этой формы переключиться на другой метод оценивания, в т.ч. на «Простое непосредственное оценивание».
* Вся информация о заполнении формы оценивания будет потеряна.
* На результаты вычислений оценок, хранящихся в журнале оценок, это не повлияет, но разъяснение того, как они были рассчитаны, не будет доступно.
* Данная операция не повлияет на возможные копии этой формы в других элементах курса.';
$string['manageactiondeletedone'] = 'Форма была успешно удалена';
$string['manageactionedit'] = 'Изменить заданную в настоящее время форму';
$string['manageactionnew'] = 'Задать новую форму оценивания с нуля';
$string['manageactionshare'] = 'Опубликовать форму как новый шаблон';
$string['manageactionshareconfirm'] = 'Вы собираетесь сохранить копию формы оценивания «{$a}» как новый общий шаблон. Другие пользователи сайта будут иметь возможность создавать новые формы оценивания, основанные на этом шаблоне, в своих элементах курса.';
$string['manageactionsharedone'] = 'Форма была успешно сохранена в виде шаблона';
$string['noitemid'] = 'Оценивание невозможно. Оцениваемый элемент не существует.';
$string['nosharedformfound'] = 'Шаблон не найден';
$string['privacy:metadata:grading_definitions'] = 'Базовая информация о форме передового оценивания, определенной в оцениваемой области.';
$string['privacy:metadata:grading_definitions:areaid'] = 'ID области, в которой определена форма передового оценивания.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'ID формы оценивания, из которой она была скопирована.';
$string['privacy:metadata:grading_definitions:description'] = 'Описание метода передового оценивания.';
$string['privacy:metadata:grading_definitions:method'] = 'Метод оценивания, который отвечает за форму.';
$string['privacy:metadata:grading_definitions:name'] = 'Название формы передового оценивания.';
$string['privacy:metadata:grading_definitions:options'] = 'Некоторые настройки этой формы оценивания.';
$string['privacy:metadata:grading_definitions:status'] = 'Статус этой формы передового оценивания.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'Время, когда форма оценивания была скопирована.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'Время, когда форма оценивания была создана.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'Время, когда форма оценивания была последний раз изменена.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'ID пользователя, создавшего форму оценивания.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'ID пользователя, последним изменившего форму оценивания.';
$string['privacy:metadata:grading_instances'] = 'Запись оценки для одного элемента оценивания, оцененного одним оценщиком.';
$string['privacy:metadata:grading_instances:feedback'] = 'Отзыв, данный пользователем.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'Текстовый формат отзыва, данного пользователем.';
$string['privacy:metadata:grading_instances:raterid'] = 'ID пользователя, оценивавшего оцениваемый экземпляр.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'Оценка за оцениваемый экземпляр.';
$string['privacy:metadata:grading_instances:status'] = 'Статус этого оцениваемого экземпляра.';
$string['privacy:metadata:grading_instances:timemodified'] = 'Время, когда оцениваемый экземпляр был последний раз изменен.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Данные для метода оценивания.';
$string['searchownforms'] = 'включить мои формы';
$string['searchtemplate'] = 'Поиск форм оценивания';
$string['searchtemplate_help'] = 'Здесь Вы можете найти форму оценивания и использовать ее в качестве шаблона для новой формы оценивания. Просто введите слова, которые должны присутствовать где-нибудь в названии формы, ее описании или содержимом формы. Чтобы найти фразу, заключите весь запрос в двойные кавычки.

По умолчанию, только формы оценивания, которые были сохранены как общие шаблоны, включаются в результат поиска. Вы можете также включить все свои собственные формы оценивания в результат поиска. Т.е. Вы можете просто повторно использовать свои формы оценивания, не делая их общими. Только формы, помеченные как «Готовые для использования» могут быть повторно использованы таким образом.';
$string['statusdraft'] = 'Черновик';
$string['statusready'] = 'Готово для использования';
$string['templatedelete'] = 'Удалить';
$string['templatedeleteconfirm'] = 'Вы собираетесь удалить общий шаблон «{$a}». Удаление шаблона не повлияет на существующие формы, которые были созданы на его основе.';
$string['templateedit'] = 'Редактировать';
$string['templatepick'] = 'Использовать этот шаблон';
$string['templatepickconfirm'] = 'Вы хотите использовать форму оценивания «{$a->formname}» в качестве шаблона для новой формы оценивания для «{$a->component} ({$a->area})»?';
$string['templatepickownform'] = 'Использовать эту форму как шаблон';
$string['templatesource'] = 'Расположение: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Собственная форма';
$string['templatetypeshared'] = 'Общий шаблон';
