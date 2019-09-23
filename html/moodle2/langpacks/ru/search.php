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
 * Strings for component 'search', language 'ru', branch 'MOODLE_36_STABLE'
 *
 * @package   search
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Расширенный поиск';
$string['all'] = 'Всё';
$string['allareas'] = 'Все области';
$string['allcourses'] = 'Все курсы';
$string['allusers'] = 'Все пользователи';
$string['author'] = 'Автор';
$string['authorname'] = 'Имя автора';
$string['back'] = 'Назад';
$string['beadmin'] = 'Вы должны быть администратором, чтобы использовать эту страницу.';
$string['checkdb'] = 'Проверить базу данных';
$string['checkdbadvice'] = 'Проверить базу данных на предмет наличия проблемм.';
$string['checkdir'] = 'Проверить папку';
$string['checkdiradvice'] = 'Удостоверьтесь, что папка данных существует и доступна для записи.';
$string['commenton'] = 'Комментарий к';
$string['confirm_delete'] = 'Вы уверены, что хотите удалить индекс для {$a}? Пока область поиска не будет проиндексирована, пользователи не смогут получить результаты поиска из этой области.';
$string['confirm_deleteall'] = 'Вы уверены, что хотите сейчас удалить всё проиндексированное содержимое? Пока сайт не будет снова проиндексирован, пользователи не смогут получить результаты поиска.';
$string['confirm_indexall'] = 'Вы уверены, что хотите сейчас обновить всё проиндексированное содержимое? Если нужно индексировать большой объем контента, это может занять длительное время. Для рабочих серверов обычно Вы должны оставлять индексирование запланированной задаче «Построение глобального поискового индекса».';
$string['confirm_reindexall'] = 'Вы уверены, что хотите сейчас переиндексировать всё содержимое сайта? Если Ваш сайт содержит большой объем контента, это может занять длительное время и пользователи не будут получать полные результаты поиска до завершения переиндексации.';
$string['createanindex'] = 'создать индекс';
$string['createdon'] = 'Создан';
$string['database'] = 'База данных';
$string['databasestate'] = 'Состояние индексирования базы данных';
$string['datadirectory'] = 'Папка данных';
$string['deleteindex'] = 'Удалить индекс {$a}';
$string['deletionsinindex'] = 'Удаления в индексах';
$string['docmodifiedon'] = 'Последнее изменение - {$a}';
$string['doctype'] = 'Тип документа';
$string['doctypenotsupported'] = 'Указанный тип документа пока не поддерживается';
$string['documents'] = 'документы';
$string['documentsfor'] = 'Документы для';
$string['documentsindatabase'] = 'Документы в базе данных';
$string['documentsinindex'] = 'Документы в индексе';
$string['duration'] = 'Длительность';
$string['emptydatabaseerror'] = 'Таблица базы данных не предоставлена или не содержит индексных записей.';
$string['enginenotfound'] = 'Поисковая машина «{$a}» не найдена.';
$string['enginenotinstalled'] = 'Поисковая машина «{$a}» не установлена.';
$string['enginenotselected'] = 'Вы не выбрали ни одну поисковую систему.';
$string['engineserverstatus'] = 'Поисковая машина не доступна. Пожалуйста, свяжитесь с вашим администратором.';
$string['enteryoursearchquery'] = 'Введите ваш поисковый запрос';
$string['errorareanotavailable'] = 'Область поиска «{$a}» не доступна.';
$string['error_indexing'] = 'Во время индексации произошла ошибка';
$string['errors'] = 'Ошибки';
$string['everywhere'] = 'В любом месте, куда у вас есть доступ';
$string['filesinindexdirectory'] = 'Файлы в индексной папке';
$string['filterheader'] = 'Фильтр';
$string['fromtime'] = 'Изменено после';
$string['globalsearch'] = 'Глобальный поиск';
$string['globalsearchdisabled'] = 'Глобальный поиск не включен.';
$string['gradualreindex'] = 'Частичная переиндексация {$a}';
$string['gradualreindex_confirm'] = 'Вы уверены, что хотите переиндексировать {$a}? Это может занять определенное время, хотя существующие данные будут доступны во время переиндексации.';
$string['gradualreindex_queued'] = 'Переиндексация была запрошена для {$a->name} ({$a->count} контекстов). Эта индексация будет выполняться запланированной задачей «Построение глобального поискового индекса».';
$string['incourse'] = 'в курсе «{$a}»';
$string['index'] = 'Индекс';
$string['invalidindexerror'] = 'Папка индекса содержит не корректный индекс или пуста';
$string['ittook'] = 'Принято';
$string['matchingfile'] = 'Совпадения из файла <span class="filename">{$a}</span>';
$string['matchingfiles'] = 'Совпадения из файлов:';
$string['next'] = 'Следующий';
$string['noindexmessage'] = 'Администратор: Здесь нет поисковых индексов.';
$string['noresults'] = 'Нет результатов';
$string['normalsearch'] = 'Обычный поиск';
$string['notitle'] = 'Нет заголовка';
$string['openedon'] = 'открыто';
$string['optimize'] = 'Оптимизировать';
$string['order'] = 'Сортировка результатов';
$string['order_location'] = 'Приоритет результатов, связанных с {$a}';
$string['order_relevance'] = 'Наиболее релевантные результаты первыми';
$string['priority'] = 'Приоритет';
$string['priority_normal'] = 'Обычный';
$string['priority_reindexing'] = 'Переиндексация';
$string['privacy:metadata'] = 'Подсистема поиска не хранит никаких персональных данных.';
$string['progress'] = 'Прогресс';
$string['queryerror'] = 'Введенный Вами запрос не может быть проанализирован поисковой машиной: {$a}';
$string['queueheading'] = 'Дополнительная очередь индексирования (элементов: {$a})';
$string['resultsreturnedfor'] = 'результаты возвращены для';
$string['runindexer'] = 'Запустить индексирование';
$string['runindexertest'] = 'Запустить тест индексирования';
$string['schemanotupdated'] = 'Схема поиска устарела.';
$string['schemaversionunknown'] = 'Поисковая машина не знает о текущей версии схемы.';
$string['score'] = 'Очки';
$string['search'] = 'Поиск';
$string['searcharea'] = 'Область поиска';
$string['searching'] = 'Поиск в...';
$string['search:message_received'] = 'Полученные сообщения';
$string['search:message_sent'] = 'Отправленные сообщения';
$string['search:mycourse'] = 'Мои курсы';
$string['searchnotpermitted'] = 'Вам не разрешено использовать поиск';
$string['search:section'] = 'Разделы курса';
$string['searchsetupdescription'] = 'Следующие шаги помогут Вам настроить глобальный поиск в Moodle.';
$string['search:user'] = 'Пользователи';
$string['searchwithin'] = 'Искать в';
$string['seconds'] = 'секунд';
$string['solutions'] = 'Решения';
$string['statistics'] = 'Статистика';
$string['step'] = 'Шаг';
$string['thesewordshelpimproverank'] = 'Эти слова помогают повысить релевантность';
$string['thesewordsmustappear'] = 'Эти слова должны встречаться';
$string['thesewordsmustnotappear'] = 'Эти слова не должны встречаться';
$string['title'] = 'Заголовок';
$string['tofetchtheseresults'] = 'для получения этих результатов';
$string['totalsize'] = 'Суммарный размер';
$string['totime'] = 'Изменено до';
$string['type'] = 'Тип';
$string['uncompleteindexingerror'] = 'Индексирование не было завершено, пожалуйста перезапустите его.';
$string['versiontoolow'] = 'Извините, для глобального поиска требуеся PHP 5.0.0 или поздней версии';
$string['viewresultincontext'] = 'Показать этот результат в контексте';
$string['wordsintitle'] = 'Слова в заголовке';
