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
 * Strings for component 'tool_lp', language 'ru', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_lp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Действия';
$string['activities'] = 'Элементы';
$string['addcohorts'] = 'Добавить глобальные группы';
$string['addcohortstosync'] = 'Добавить глобальные группы для синхронизации';
$string['addcompetency'] = 'Добавить компетенцию';
$string['addcoursecompetencies'] = 'Добавить компетенции в курс';
$string['addcrossreferencedcompetency'] = 'Добавить перекрестную компетенцию';
$string['addingcompetencywillresetparentrule'] = 'Добавление новой компетенции приведет к удалению правила, заданного для «{$a}». Вы хотите продолжить?';
$string['addnewcompetency'] = 'Добавить новую компетенцию';
$string['addnewcompetencyframework'] = 'Добавить новый фреймворк компетенций';
$string['addnewplan'] = 'Добавить новый учебный план';
$string['addnewtemplate'] = 'Добавить новый шаблон учебного плана';
$string['addnewuserevidence'] = 'Добавить новое доказательство';
$string['addtemplatecompetencies'] = 'Добавить компетенции в шаблон учебного плана';
$string['aisrequired'] = '«{$a}» обязательно';
$string['aplanswerecreated'] = 'Создано учебных планов: {$a}.';
$string['aplanswerecreatedmoremayrequiresync'] = 'Создано учебных планов: {$a}. Другие учебные планы будут созданы во время следующей синхронизации.';
$string['assigncohorts'] = 'Назначить глобальные группы';
$string['averageproficiencyrate'] = 'Средняя доля освоения завершенных учебных планов, созданных на этом шаблоне, равна {$a}%';
$string['cancelreviewrequest'] = 'Отменить запрос на пересмотр';
$string['cannotaddrules'] = 'Эту компетенцию нельзя настроить.';
$string['cannotcreateuserplanswhentemplateduedateispassed'] = 'Нельзя создать новые учебные планы, так как срок выполнения для шаблона уже прошел или наступит слишком быстро.';
$string['cannotcreateuserplanswhentemplatehidden'] = 'Нельзя создать новые учебные планы, пока этот шаблон скрыт.';
$string['category'] = 'Категория';
$string['chooserating'] = 'Выберите рейтинг...';
$string['cohortssyncedtotemplate'] = 'Глобальные группы, синхронизированные с этим шаблоном учебного плана';
$string['competenciesforframework'] = 'Компетенции для {$a}';
$string['competenciesmostoftennotproficient'] = 'Компетенции, которые чаще всего оказываются не освоенными в выполненных учебных планах';
$string['competenciesmostoftennotproficientincourse'] = 'Компетенции, которые чаще всего оказываются не освоенными в этом курсе';
$string['competencycannotbedeleted'] = 'Компетенция {$a} не может быть удалена';
$string['competencycreated'] = 'Компетенция создана';
$string['competencycrossreferencedcompetencies'] = 'Перекрестных компетенций: {$a}';
$string['competencyframework'] = 'Фреймворк компетенций';
$string['competencyframeworkcreated'] = 'Создан фреймворк компетенций.';
$string['competencyframeworkname'] = 'Название';
$string['competencyframeworkroot'] = 'Нет родителей (компетенция верхнего уровня)';
$string['competencyframeworks'] = 'Фреймворки компетенций';
$string['competencyframeworksrepository'] = 'Репозиторий фреймворков компетенций';
$string['competencyframeworkupdated'] = 'Обновлен фреймворк компетенций.';
$string['competencyoutcome_complete'] = 'Отметить как выполненную';
$string['competencyoutcome_evidence'] = 'Прикрепить доказательство';
$string['competencyoutcome_none'] = 'Нет';
$string['competencyoutcome_recommend'] = 'Рекомендовать компетенцию';
$string['competencypicker'] = 'Выбор компетенций';
$string['competencyrule'] = 'Правило компетенции';
$string['competencyupdated'] = 'Компетенция обновлена';
$string['completeplan'] = 'Выполнить этот учебный план';
$string['completeplanconfirm'] = 'Отметить учебный план «{$a}» как выполненный? После отметки будет сохранен текущий статус компетенций всех пользователей и план будет доступен только для чтения.';
$string['configurecoursecompetencysettings'] = 'Настроить компетенции курса';
$string['configurescale'] = 'Настроить шкалы';
$string['coursecompetencies'] = 'Компетенции курса';
$string['coursecompetencyratingsarenotpushedtouserplans'] = 'Рейтинги компетенций из этого курса не влияют на учебные планы.';
$string['coursecompetencyratingsarepushedtouserplans'] = 'Рейтинги компетенций из этого курса сразу же обновляются в учебных планах.';
$string['coursecompetencyratingsquestion'] = 'При задании рейтинга компетенции курса, нужно ли выполнять обновление компетенции в учебных планах или он будет применяться только к курсу?';
$string['coursesusingthiscompetency'] = 'Курсы, связанные с этой компетенцией';
$string['coveragesummary'] = 'Учтено {$a->competenciescoveredcount} из {$a->competenciescount} компетенций ({$a->coveragepercentage}%)';
$string['createlearningplans'] = 'Создать учебные планы';
$string['createplans'] = 'Создать учебные планы';
$string['crossreferencedcompetencies'] = 'Перекрестные компетенции';
$string['default'] = 'По умолчанию';
$string['deletecompetency'] = 'Удалить компетенцию «{$a}»?';
$string['deletecompetencyframework'] = 'Удалить фреймворк компетенций «{$a}»?';
$string['deletecompetencyparenthasrule'] = 'Удалить компетенцию «{$a}»? Также будет удалено правило, заданное для ее родителя.';
$string['deleteplan'] = 'Удалить учебный план «{$a}»?';
$string['deleteplans'] = 'Удалить учебные планы?';
$string['deletetemplate'] = 'Удалить шаблон учебного плана «{$a}»?';
$string['deletetemplatewithplans'] = 'Есть учебные планы, которые связаны с этим шаблоном. Вы должны указать, как обрабатывать эти планы.';
$string['deletethisplan'] = 'Удалить этот учебный план';
$string['deletethisuserevidence'] = 'Удалить это доказательство';
$string['deleteuserevidence'] = 'Удалить доказательство предыдущего обучения «{$a}»?';
$string['description'] = 'Описание';
$string['duedate'] = 'Срок выполнения';
$string['duedate_help'] = 'Дата, к которой учебный план должен быть выполнен.';
$string['editcompetency'] = 'Редактировать компетенцию';
$string['editcompetencyframework'] = 'Редактировать фреймворк компетенций';
$string['editplan'] = 'Редактировать учебный план';
$string['editrating'] = 'Редактировать рейтинг';
$string['edittemplate'] = 'Редактировать шаблон учебного плана';
$string['editthisplan'] = 'Редактировать этот учебный план';
$string['editthisuserevidence'] = 'Редактировать это доказательство';
$string['edituserevidence'] = 'Редактировать доказательство';
$string['evidence'] = 'Доказательство';
$string['findcourses'] = 'Найти курсы';
$string['frameworkcannotbedeleted'] = 'Фреймворк компетенций «{$a}» не может быть удален';
$string['hidden'] = 'Скрытый';
$string['hiddenhint'] = '(скрыта)';
$string['idnumber'] = 'Номер ID';
$string['inheritfromframework'] = 'Наследовать из фреймворка компетенций (по умолчанию)';
$string['itemstoadd'] = 'Элементы для добавления';
$string['jumptocompetency'] = 'Перейти к компетенции';
$string['jumptouser'] = 'Перейти к пользователю';
$string['learningplancompetencies'] = 'Компетенции учебного плана';
$string['learningplans'] = 'Учебные планы';
$string['levela'] = 'Уровень {$a}';
$string['linkcompetencies'] = 'Связать с компетенциями';
$string['linkcompetency'] = 'Связать с компетенцией';
$string['linkedcompetencies'] = 'Связанные компетенции';
$string['linkedcourses'] = 'Связанные курсы';
$string['linkedcourseslist'] = 'Связанные курсы:';
$string['listcompetencyframeworkscaption'] = 'Список фреймворков компетенций';
$string['listofevidence'] = 'Список доказательств';
$string['listplanscaption'] = 'Список учебных планов';
$string['listtemplatescaption'] = 'Список шаблонов учебных планов';
$string['loading'] = 'Загрузка...';
$string['locatecompetency'] = 'Разместить компетенцию';
$string['managecompetenciesandframeworks'] = 'Управление компетенциями и фреймворками';
$string['modcompetencies'] = 'Компетенции курса';
$string['modcompetencies_help'] = 'Компетенции курса, связанные с этим элементом.';
$string['move'] = 'Переместить';
$string['movecompetency'] = 'Переместить компетенцию';
$string['movecompetencyafter'] = 'Переместить компетенцию после «{$a}»';
$string['movecompetencyframework'] = 'Переместить фреймворк компетенций';
$string['movecompetencytochildofselfwillresetrules'] = 'Перемещение компетенции приведет к удалению ее правила и правил, заданных для ее родителя и места перемещения. Вы хотите продолжить?';
$string['movecompetencywillresetrules'] = 'Перемещение компетенции приведет к удалению правил, заданных для ее родителя и места перемещения. Вы хотите продолжить?';
$string['moveframeworkafter'] = 'Переместить фреймворк компетенций после «{$a}»';
$string['movetonewparent'] = 'Изменить положение';
$string['myplans'] = 'Мои учебные планы';
$string['nfiles'] = 'файлов - {$a}';
$string['noactivities'] = 'Нет элементов';
$string['nocompetencies'] = 'Нет компетенций, созданных в этом фреймворке.';
$string['nocompetenciesincourse'] = 'Нет компетенций, связанных с этим курсом.';
$string['nocompetenciesinevidence'] = 'Нет компетенций, связанных с этим доказательством.';
$string['nocompetenciesinlearningplan'] = 'Нет компетенций, связанных с этим учебным планом.';
$string['nocompetenciesintemplate'] = 'Нет компетенций, связанных с этим шаблоном учебного плана.';
$string['nocompetencyframeworks'] = 'Пока нет созданных фреймворков компетенций.';
$string['nocompetencyselected'] = 'Нет выбранных компетенций';
$string['nocrossreferencedcompetencies'] = 'Нет других компетенций, перекрестно ссылающихся на эту компетенцию.';
$string['noevidence'] = 'Нет доказательств';
$string['nofiles'] = 'Нет файлов';
$string['nolinkedcourses'] = 'Нет курсов, связанных с этой компетенцией.';
$string['noparticipants'] = 'Участники не найдены.';
$string['noplanswerecreated'] = 'Учебные планы не были созданы.';
$string['notemplates'] = 'Шаблоны учебных планов пока не были созданы.';
$string['nourl'] = 'Нет URL';
$string['nouserevidence'] = 'Доказательства предыдущего обучения пока не были добавлены.';
$string['nouserplans'] = 'Учебные планы пока не были созданы.';
$string['oneplanwascreated'] = 'Учебный план был создан';
$string['outcome'] = 'Результат';
$string['parentcompetency'] = 'Родитель';
$string['parentcompetency_edit'] = 'Редактировать родителя';
$string['parentcompetency_help'] = 'Задайте родителя, под которым будет добавлена компетенция. Это может быть либо другая компетенция из этого же фреймворка, либо корень фреймворка компетенций для компетенции верхнего уровня.';
$string['path'] = 'Путь:';
$string['planapprove'] = 'Сделать активным';
$string['plancompleted'] = 'Учебный план завершен';
$string['plancreated'] = 'Учебный план создан';
$string['plandescription'] = 'Описание';
$string['planname'] = 'Название';
$string['plantemplate'] = 'Выбрать шаблон учебного плана';
$string['plantemplate_help'] = 'Созданный из шаблона учебный план будет содержать список компетенций, соответствующий шаблону. Обновления шаблона будут отражаться на любом плане, созданном из этого шаблона.';
$string['planunapprove'] = 'Вернуть к черновику';
$string['planupdated'] = 'Учебный план обновлен';
$string['pluginname'] = 'Учебные планы';
$string['points'] = 'Баллы';
$string['pointsgivenfor'] = 'Оценка в баллах для «{$a}»';
$string['privacy:metadata'] = 'Дополнение "Учебные планы" не хранит персональные данные.';
$string['proficient'] = 'Освоено';
$string['progress'] = 'В процессе';
$string['rate'] = 'Оценить';
$string['ratecomment'] = 'Примечания к доказательству';
$string['rating'] = 'Рейтинг';
$string['ratingaffectsonlycourse'] = 'Выставление рейтинга компетенции приведет к обновлению компетенции только в этом курсе';
$string['ratingaffectsuserplans'] = 'Выставление рейтинга компетенции также приведет к обновлению компетенции во всех учебных планах';
$string['reopenplan'] = 'Повторно открыть этот учебный план';
$string['reopenplanconfirm'] = 'Повторно открыть учебный план «{$a}»? Это приведет к тому, что ранее сохраненные статусы компетенций пользователей будут удалены и план снова станет активным.';
$string['requestreview'] = 'Запросить пересмотр';
$string['reviewer'] = 'Пересматривающий';
$string['reviewstatus'] = 'Статус пересмотра';
$string['savechanges'] = 'Сохранить изменения';
$string['scale'] = 'Шкала';
$string['scale_help'] = 'Шкала определяет, как измеряется освоение этой компетенции. После выбора шкалы ее нужно настроить.

* Элемент, выбранный в качестве уровня «По умолчанию» — это оценка, которая выставляется при автоматическом выполнении компетенции.
* Элементы, выбранные в качестве уровня «Освоено», указывают, при выставлении каких значений компетенции будет отмечаться как освоенные.';
$string['scalevalue'] = 'Значение шкалы';
$string['search'] = 'Искать...';
$string['selectcohortstosync'] = 'Выбрать глобальные группы для синхронизации';
$string['selectcompetencymovetarget'] = 'Выберите место для перемещения этой компетенции:';
$string['selectedcompetency'] = 'Выбранная компетенция';
$string['selectuserstocreateplansfor'] = 'Выбрать пользователей для создания учебных планов для';
$string['sendallcompetenciestoreview'] = 'Отправить все компетенции на пересмотр для доказательства предыдущего обучения «{$a}»';
$string['sendcompetenciestoreview'] = 'Отправить компетенции на пересмотр';
$string['shortname'] = 'Название';
$string['sitedefault'] = '(По умолчанию для сайта)';
$string['startreview'] = 'Начать пересмотр';
$string['state'] = 'Состояние';
$string['status'] = 'Статус';
$string['stopreview'] = 'Закончить пересмотр';
$string['stopsyncingcohort'] = 'Остановить синхронизацию с глобальной группой';
$string['taxonomies'] = 'Таксономии';
$string['taxonomy_add_behaviour'] = 'Добавить поведение';
$string['taxonomy_add_competency'] = 'Добавить компетенцию';
$string['taxonomy_add_concept'] = 'Добавить концепцию';
$string['taxonomy_add_domain'] = 'Добавить домен';
$string['taxonomy_add_indicator'] = 'Добавить индикатор';
$string['taxonomy_add_level'] = 'Добавить уровень';
$string['taxonomy_add_outcome'] = 'Добавить результат';
$string['taxonomy_add_practice'] = 'Добавить практику';
$string['taxonomy_add_proficiency'] = 'Добавить умение';
$string['taxonomy_add_skill'] = 'Добавить навык';
$string['taxonomy_add_value'] = 'Добавить ценность';
$string['taxonomy_edit_behaviour'] = 'Редактировать поведение';
$string['taxonomy_edit_competency'] = 'Редактировать компетенцию';
$string['taxonomy_edit_concept'] = 'Редактировать концепцию';
$string['taxonomy_edit_domain'] = 'Редактировать домен';
$string['taxonomy_edit_indicator'] = 'Редактировать индикатор';
$string['taxonomy_edit_level'] = 'Редактировать уровень';
$string['taxonomy_edit_outcome'] = 'Редактировать результат';
$string['taxonomy_edit_practice'] = 'Редактировать практику';
$string['taxonomy_edit_proficiency'] = 'Редактировать умение';
$string['taxonomy_edit_skill'] = 'Редактировать навык';
$string['taxonomy_edit_value'] = 'Редактировать ценность';
$string['taxonomy_parent_behaviour'] = 'Родительское поведение';
$string['taxonomy_parent_competency'] = 'Родительская компетенция';
$string['taxonomy_parent_concept'] = 'Родительская концепция';
$string['taxonomy_parent_domain'] = 'Родительский домен';
$string['taxonomy_parent_indicator'] = 'Родительский индикатор';
$string['taxonomy_parent_level'] = 'Родительский уровень';
$string['taxonomy_parent_outcome'] = 'Родительский результат';
$string['taxonomy_parent_practice'] = 'Родительская практика';
$string['taxonomy_parent_proficiency'] = 'Родительское умение';
$string['taxonomy_parent_skill'] = 'Родительский навык';
$string['taxonomy_parent_value'] = 'Родительская ценность';
$string['taxonomy_selected_behaviour'] = 'Выбранное поведение';
$string['taxonomy_selected_competency'] = 'Выбранная компетенция';
$string['taxonomy_selected_concept'] = 'Выбранная концепция';
$string['taxonomy_selected_domain'] = 'Выбранный домен';
$string['taxonomy_selected_indicator'] = 'Выбранный индикатор';
$string['taxonomy_selected_level'] = 'Выбранный уровень';
$string['taxonomy_selected_outcome'] = 'Выбранный результат';
$string['taxonomy_selected_practice'] = 'Выбранная практика';
$string['taxonomy_selected_proficiency'] = 'Выбранное умение';
$string['taxonomy_selected_skill'] = 'Выбранный навык';
$string['taxonomy_selected_value'] = 'Выбранная ценность';
$string['template'] = 'Шаблон учебного плана';
$string['templatebased'] = 'Основан на шаблоне';
$string['templatecohortnotsyncedwhileduedateispassed'] = 'Глобальные группы не будут синхронизироваться, если срок выполнения шаблона уже прошел.';
$string['templatecohortnotsyncedwhilehidden'] = 'Глобальные группы не будут синхронизироваться пока этот шаблон скрыт.';
$string['templatecompetencies'] = 'Компетенции шаблона учебного плана';
$string['templatecreated'] = 'Создан шаблон ученого плана';
$string['templatename'] = 'Название';
$string['templates'] = 'Шаблоны учебного плана';
$string['templateupdated'] = 'Обновлен шаблон учебного плана';
$string['totalrequiredtocomplete'] = 'Общее количество, необходимое для завершения';
$string['unlinkcompetencycourse'] = 'Убрать связь с компетенцией «{$a}» из курса?';
$string['unlinkcompetencyplan'] = 'Убрать связь с компетенцией «{$a}» из учебного плана?';
$string['unlinkcompetencytemplate'] = 'Убрать связь с компетенцией «{$a}» из шаблона учебного плана?';
$string['unlinkplanstemplate'] = 'Убрать связь с учебными планами из их шаблона';
$string['unlinkplantemplate'] = 'Убрать связь из шаблона учебного плана';
$string['unlinkplantemplateconfirm'] = 'Убрать связь учебного плана «{$a}» с его шаблоном? Любые сделанные в шаблоне изменения больше не будут применяться к этому плану. Данное действие нельзя отменить.';
$string['uponcoursecompletion'] = 'По завершению курса:';
$string['uponcoursemodulecompletion'] = 'По завершению элемента:';
$string['usercompetencyfrozen'] = 'Эта запись сейчас заморожена. Она отражает состояние компетенции пользователя в момент, когда план был отмечен как выполненный.';
$string['userevidence'] = 'Доказательство предыдущего обучения';
$string['userevidencecreated'] = 'Создано доказательство предыдущего обучения';
$string['userevidencedescription'] = 'Описание';
$string['userevidencefiles'] = 'Файлы';
$string['userevidencename'] = 'Название';
$string['userevidencesummary'] = 'Сводка';
$string['userevidenceupdated'] = 'Обновлено доказательство предыдущего обучения';
$string['userevidenceurl'] = 'URL';
$string['userevidenceurl_help'] = 'URL должен начинаться с «http://» или «https://»';
$string['viewdetails'] = 'Показать детали';
$string['visible'] = 'Видимость';
$string['visible_help'] = 'Фреймворк компетенций может быть скрыт пока ведется его настройка или обновление до новой версии.';
$string['when'] = 'Когда';
$string['xcompetencieslinkedoutofy'] = '{$a->x} из {$a->y} компетенций связаны с курсами';
$string['xcompetenciesproficientoutofy'] = '{$a->x} из {$a->y} компетенций освоены';
$string['xcompetenciesproficientoutofyincourse'] = 'Вы освоили {$a->x} из {$a->y} компетенций в этом курсе.';
$string['xplanscompletedoutofy'] = '{$a->x} из {$a->y} учебных планов выполнено для этого шаблона';
