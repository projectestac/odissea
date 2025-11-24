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
 * Strings for component 'ai', language 'ru', version '4.5'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Принять и продолжить';
$string['action'] = 'Действие';
$string['action_generate_image'] = 'Создание изображения';
$string['action_generate_image_desc'] = 'Создает изображение на основе текстовой подсказки.';
$string['action_generate_text'] = 'Создание текста';
$string['action_generate_text_desc'] = 'Генерирует текст на основе текстовой подсказки.';
$string['action_generate_text_instruction'] = 'Вы получите исходный текст от пользователя. Ваша задача — сгенерировать текст на основе его запроса. Следуйте этим важным инструкциям:
1. Создайте резюме только в виде обычного текста.
2. Не используйте форматирование markdown, приветствия или банальности.';
$string['action_summarise_text'] = 'Краткое изложение текста';
$string['action_summarise_text_desc'] = 'Обобщает текстовый контент на странице курса.';
$string['action_summarise_text_instruction'] = 'Вы получите исходный текст от пользователя. Ваша задача — резюмировать предоставленный текст. Следуйте этим рекомендациям:
1. Сжимайте: Сокращайте длинные отрывки до ключевых моментов.
2. Упрощайте: Сделайте сложную информацию более понятной, особенно для учащихся.

Важные инструкции:
1. Создайте резюме только в виде обычного текста.
2. Не используйте никакого форматирования markdown, приветствий или банальностей.
3. Сосредоточьтесь на ясности, краткости и доступности.

Убедитесь, что резюме легко читается и эффективно передает основные моменты исходного текста.';
$string['action_translate_text'] = 'Перевод текста';
$string['action_translate_text_desc'] = 'Переводит предоставленный текст с одного языка на другой.';
$string['actionsettingprovider'] = 'Настройки действия - {$a}';
$string['actionsettingprovider_desc'] = 'Эти настройки управляют тем, как {$a->providername} выполняет действие {$a->actionname}.';
$string['ai'] = 'Искусственный интеллект (ИИ)';
$string['aiplacements'] = 'Размещения ИИ';
$string['aiproviders'] = 'Поставщики ИИ';
$string['aiusagepolicy'] = 'Политика использования искусственного интеллекта';
$string['availableplacements'] = 'Выберите, где доступны действия ИИ';
$string['availableplacements_desc'] = 'Размещения определяют, как и где действия ИИ могут быть использованы на вашем сайте. С помощью настроек вы можете выбрать, какие действия доступны в каждом размещении.';
$string['availableproviders'] = 'Управление поставщиками ИИ, подключенными к вашей системе управления обучением';
$string['availableproviders_desc'] = 'Поставщики ИИ добавляют возможности ИИ на ваш сайт с помощью «действий», таких как резюмирование текста или создание изображений.<br/>
Вы можете управлять действиями для каждого поставщика в его настройках.';
$string['contentwatermark'] = 'Создано ИИ';
$string['declineaipolicy'] = 'Отклонить';
$string['manageaiplacements'] = 'Управление размещением ИИ';
$string['manageaiproviders'] = 'Управление поставщиками ИИ';
$string['noproviders'] = 'Это действие недоступно. Для этого действия не определены <a href="{$a}">поставщики ИИ</a>';
$string['placement'] = 'Размещение';
$string['placementactionsettings'] = 'Действия';
$string['placementactionsettings_desc'] = 'Действия ИИ, доступные для этого размещения.';
$string['placementsettings'] = 'Настройки конкретного размещения';
$string['placementsettings_desc'] = 'Эти настройки управляют тем, как размещение ИИ подключается к службе ИИ и связанными с этим операциями.';
$string['privacy:metadata:ai_action_generate_image'] = 'Таблица, в которой хранятся запросы пользователей на создание изображений.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'Соотношение сторон создаваемых изображений.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'Количество созданных изображений.';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'Подсказка для запроса на создание изображения.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'Качество создаваемых изображений.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'Измененная подсказка созданных изображений.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'Исходный URL-адрес создаваемых изображений.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'Стиль создаваемых изображений.';
$string['privacy:metadata:ai_action_generate_text'] = 'Таблица, в которой хранятся запросы пользователей на создание текста.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'Токены завершения, используемые для создания текста.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'Уникальный хэш, представляющий состояние/версию модели и контента.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'Фактический текст, сгенерированный моделью ИИ на основе введенной подсказки.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'Подсказка для запроса на создание текста.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'Токены подсказок, используемых для создания текста.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'ID ответа.';
$string['privacy:metadata:ai_action_register'] = 'Таблица, в которой хранятся действия запросов, сделанныхпользователями.';
$string['privacy:metadata:ai_action_register:actionid'] = 'ID действия запроса.';
$string['privacy:metadata:ai_action_register:actionname'] = 'Название действия запроса.';
$string['privacy:metadata:ai_action_register:provider'] = 'Имя поставщика, обработавшего запрос.';
$string['privacy:metadata:ai_action_register:success'] = 'Состояние выполнения запроса.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'Время выполнения запроса.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'Время создания запроса.';
$string['privacy:metadata:ai_action_register:userid'] = 'ID пользователя, сделавшего запрос.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Таблица, в которой хранятся запросы пользователей на резюме текста.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Токены завершения, используемые для резюмирования текста.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'Уникальный хэш, представляющий состояние/версию модели и контента.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'Фактический текст, сгенерированный моделью ИИ на основе введенной подсказки.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'Подсказка для запроса на текст резюме.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'Токены подсказок, используемых для резюмирования текста.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'ID ответа.';
$string['privacy:metadata:ai_policy_register'] = 'Таблица, в которой хранится статус принятия политики ИИ для каждого пользователя.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'ID контекста, данные которого были сохранены.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'Время, когда пользователь принял политику ИИ.';
$string['privacy:metadata:ai_policy_register:userid'] = 'ID пользователя, чьи данные были сохранены.';
$string['provider'] = 'Поставщик';
$string['provideractionsettings'] = 'Действия';
$string['provideractionsettings_desc'] = 'Выберите и настройте действия, которые {$a} может выполнять на вашем сайте.';
$string['providers'] = 'Поставщики';
$string['providersettings'] = 'Настройки';
$string['userpolicy'] = '<h4><strong>Добро пожаловать в новую возможность ИИ!</strong></h4>
<p>Эта функция искусственного интеллекта (ИИ) основана исключительно на внешних больших языковых моделях (LLM - Large Language Models) для улучшения вашего опыта обучения и преподавания. Перед началом применения служб ИИ, пожалуйста, ознакомьтесь с политикой их использования.</p>
<h4><strong>Точность контента, созданного ИИ</strong></h4>
<p>ИИ может предоставлять полезные предложения и информацию, но его точность может меняться. Вам всегда следует дважды проверять предоставленную информацию, чтобы убедиться, что она точна, полна и подходит для вашей конкретной ситуации.</p>
<h4><strong>Как обрабатываются ваши данные</strong></h4>
<p>Эта функция ИИ предоставляется внешними сторонними LLM. Если вы решите использовать эту функцию, любые вводимые вами данные или персональные данные будут обрабатываться в соответствии с политикой конфиденциальности сторонней службы. Мы рекомендуем вам ознакомиться с их политикой конфиденциальности, чтобы понять, как будут обрабатываться ваши данные. Кроме того, запись вашего взаимодействия с функциями ИИ может быть сохранена на сайте.</p>
<p>Если у вас возникнут вопросы по этому поводу, обратитесь к своим учителям или управляющим учебным процессом.</p>
<p>Продолжая, вы подтверждаете, что понимаете эту политику и соглашаетесь с ней.</p>';
