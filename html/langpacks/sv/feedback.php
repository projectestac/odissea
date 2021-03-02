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
 * Strings for component 'feedback', language 'sv', version '3.8'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Lägg till fråga';
$string['add_pagebreak'] = 'Lägg till en sidbrytning';
$string['adjustment'] = 'Justering';
$string['after_submit'] = 'Efter inlämning';
$string['allowfullanonymous'] = 'Tillåt full anonymitet';
$string['analysis'] = 'Analys';
$string['anonymous'] = 'Anonym';
$string['anonymous_edit'] = 'Anonymitet';
$string['anonymous_entries'] = 'Anonyma inlägg';
$string['anonymous_user'] = 'Anonym användare';
$string['answerquestions'] = 'Svara på frågorna';
$string['append_new_items'] = 'Lägg till nya komponenter';
$string['autonumbering'] = 'Numrera frågor automatiskt';
$string['autonumbering_help'] = 'Aktiverar eller inaktiverar automatiska nummer för varje fråga';
$string['average'] = 'Medel';
$string['bold'] = 'Fet';
$string['calendarend'] = '{$a} stänger';
$string['calendarstart'] = '{$a} öppnar';
$string['cannotaccess'] = 'Du kan bara komma åt denna feedback från en kurs';
$string['cannotsavetempl'] = 'Det är inte tillåtet att spara mallar';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Captcha är inte inställt';
$string['check'] = 'Flervalsfråga - flera svar';
$string['check_values'] = 'Kryssrutor - fyll i alternativ att välja mellan';
$string['checkbox'] = 'Flervalsfrågor - flera tillåtna svar (kryssrutor)';
$string['choosefile'] = 'Välj en fil';
$string['chosen_feedback_response'] = 'Valt återkopplingssvar';
$string['closebeforeopen'] = 'Slutdatumet ligger före startdatumet.';
$string['complete_the_form'] = 'Besvara frågorna';
$string['completed'] = 'Slutförd';
$string['completed_feedbacks'] = 'Fullföljda enkäter';
$string['completedon'] = 'Slutförd den {$a}';
$string['completionsubmit'] = 'Visa som slutförd om återkopplingen redan är inskickad';
$string['configallowfullanonymous'] = 'Om det här alternativet är inställt till \'ja\' så går det att fullfölja enkät utan att först logga in. Det påverkar bara förekomster av enkät på ingångssidan.';
$string['confirmdeleteentry'] = 'Är du säker på att du vill ta bort det här inlägget?';
$string['confirmdeleteitem'] = 'Är du säker på att du vill ta bort den här komponenten?';
$string['confirmdeletetemplate'] = 'Är du säker på att du vill ta bort den här mallen?';
$string['confirmusetemplate'] = 'Är du säker på att du vill använda den här mallen?';
$string['continue_the_form'] = 'Fortsätt fylla i';
$string['count_of_nums'] = 'Räkning av tal';
$string['courseid'] = 'Kurs-ID';
$string['creating_templates'] = 'Spara de här frågorna som ny mall';
$string['delete_entry'] = 'Ta bort detta svar';
$string['delete_item'] = 'Ta bort fråga';
$string['delete_old_items'] = 'Ta bort gamla objekt';
$string['delete_pagebreak'] = 'Ta bort sidbrytning';
$string['delete_template'] = 'Ta bort mall';
$string['delete_templates'] = 'Ta bort mall...';
$string['depending'] = 'Beroenden';
$string['depending_help'] = 'Möjligheten att använda "beroende komponenter" tillåter dig att visa olika komponenter eller vissa komponenter på olika sätt, detta beroende på andra, föregående, komponenters värden. <br /><strong)Här finns ett ett exempel på hur man kan använda detta:</strong><br /><ul><li>Börja med att skapa en komponent med värden som andra, efterföljande komponenter är beroende av.</li><li>Lägg sedan till en sidbrytning.</li><li>Ange sedan att den följande komponenten ska vara beroende av värdet på en föregående komponent.<br />
Välj sedan, i formuläret för att skapa komponenter, denna komponent i listan över "beroende komponenter" och mata in det aktuella, nödvändiga värdet i i textrutan "beroende-värde".</li>
</ul>
<strong>Strukturen bör se ut så här:</strong>
<ol>
<li>Komponent 1 F(råga): Har du en bil? S(var): Ja/Nej</li>
<li>Sidbrytning</li>
<li>Komponent 2 F: Vilken färg har din bil?<br />
(den här komponenten är beroende av att komponent 1 har värdet= Ja)</li>
<li>Komponent 3 F: Varför har du ingen bil?<br />
(den här komponenten är beroende av att komponent 1 har värdet=Nej)</li>
<li> ... övriga komponenter</li>
</ol>
Det var det hela. Mycket nöje!';
$string['dependitem'] = 'Beroende objektet';
$string['dependvalue'] = 'Beroende värde';
$string['description'] = 'Beskrivning';
$string['do_not_analyse_empty_submits'] = 'Analysera inte tomma svar';
$string['downloadresponseas'] = 'Ladda ned alla svar som:';
$string['drop_feedback'] = 'Ta bort från den här kursen';
$string['dropdown'] = 'Flerval, kortsvar är tillåtna (nedrullningsmeny)';
$string['dropdown_values'] = 'Svar';
$string['dropdownlist'] = 'Flervalsfrågor - ett  svar (Nedrullningslista)';
$string['dropdownrated'] = 'Nedrullningsmeny';
$string['edit_item'] = 'Redigera fråga';
$string['edit_items'] = 'Redigera frågor';
$string['email_notification'] = 'Notiser via e-post';
$string['email_notification_help'] = 'Om aktiverad får administratorer e-post om att ett nytt svar har lagts in.';
$string['emailteachermail'] = '{$a->username} har fullgjort en återkoppling enligt: \'{$a->feedback}\' Du kan se den här: {$a->url}';
$string['emailteachermailhtml'] = '{$a->username} har fullgjort en återkoppling enligt: <i>\'{$a->feedback}\'</i><br /><br /> Du kan se den: <a href="{$a->url}">här</a>.';
$string['entries_saved'] = 'Dina svar har sparats. Tack.';
$string['eventresponsedeleted'] = 'Svar borttaget';
$string['eventresponsesubmitted'] = 'Svar inlämnat';
$string['export_questions'] = 'Exportera frågor';
$string['export_to_excel'] = 'Exportera till Excel';
$string['feedback:addinstance'] = 'Lägg till ny återkoppling';
$string['feedback:complete'] = 'Slutför återkoppling';
$string['feedback:createprivatetemplate'] = 'Skapa en privat mall';
$string['feedback:createpublictemplate'] = 'Skapa en offentlig mall';
$string['feedback:deletesubmissions'] = 'Ta bort slutförda inlämningar';
$string['feedback:deletetemplate'] = 'Ta bort mall';
$string['feedback:edititems'] = 'Redigera objekt';
$string['feedback:mapcourse'] = 'Koppla kurser till globala återkopplingar';
$string['feedback:receivemail'] = 'Ta emot notiser via e-post';
$string['feedback:view'] = 'Visa återkoppling';
$string['feedback:viewanalysepage'] = 'Visa analyssidan efter återkoppling';
$string['feedback:viewreports'] = 'Visa rapporter';
$string['feedback_is_not_for_anonymous'] = 'Återkoppling är inte för anonyma';
$string['feedback_is_not_open'] = 'Enkäten är inte öppen';
$string['feedbackclose'] = 'Stäng enkäten vid denna tid';
$string['feedbackcompleted'] = '{$a->username} slutförde {$a->feedbackname}';
$string['feedbackopen'] = 'Öppna enkäten vid den här tiden';
$string['file'] = 'Fil';
$string['filter_by_course'] = 'Filtrera per kurs';
$string['handling_error'] = 'Ett fel uppstod i återkopplingsmodulens hantering av händelser';
$string['hide_no_select_option'] = 'Dölj alternativet "Inget svar"';
$string['horizontal'] = 'Vågrät';
$string['import_questions'] = 'Importera frågor';
$string['import_successfully'] = 'Importen lyckades';
$string['importfromthisfile'] = 'Importera från den här filen';
$string['indicator:cognitivedepth'] = 'Återkoppling kognitiv';
$string['indicator:cognitivedepth_help'] = 'Denna indikator baseras på det kognitiva djup som uppnåtts av studenten i en Återkopplingsaktivitet.';
$string['indicator:cognitivedepthdef'] = 'Återkoppling kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Deltagaren har nått denna procentandel av det kognitiva engagemang som erbjuds av Återkopplings-aktiviteterna under detta analysintervall (Nivåer = Ingen visning, Visa, Skicka in)';
$string['indicator:socialbreadth'] = 'Återkoppling social';
$string['indicator:socialbreadth_help'] = 'Denna indikator baseras på den sociala bredd som uppnåtts av studenten i en Återkopplingsaktivitet.';
$string['indicator:socialbreadthdef'] = 'Återkoppling social';
$string['indicator:socialbreadthdef_help'] = 'Deltagaren har nått denna procentandel av det sociala engagemanget som erbjuds av Återkopplingsaktiviteterna under detta analysintervall (Nivåer = Inget deltagande, Deltagaren ensamt, Deltagaren tillsammans med andra)';
$string['info'] = 'Kursinformation';
$string['infotype'] = 'Typ av information';
$string['insufficient_responses'] = 'otillräckliga svar';
$string['insufficient_responses_for_this_group'] = 'Det finns inte tillräckligt många svar för den här gruppen.';
$string['insufficient_responses_help'] = 'Svaren för den här gruppen är otillräckliga. För att bibehålla denna enkät som anonym så måste minst 2 svar ha lämnats.';
$string['item_label'] = 'Etikett';
$string['item_name'] = 'Namn på komponent';
$string['label'] = 'Etikett';
$string['mapcourse'] = 'Koppla återkoppling till kurser';
$string['mapcourse_help'] = 'Som standard, formulär för återkoppling som skapats på din hemsida finns tillgängliga på hela webbplatsen och kommer att visas i alla kurser med feedback blocket. Du kan tvinga feedback-formuläret att visas genom att göra det till en "klibbig" block eller begränsa de kurser i vilka ett enkät-formulär kommer att visas genom att mappa den till specifika kurser.';
$string['mapcourseinfo'] = 'Det här är en en typ av universell återkoppling som finns tillgänglig för alla kurser som använder blocket för återkoppling. Du kan emellertid begränsa dess användning till vissa kurser genom att markera och välja ut just dem. Leta rätt på kursen och koppla den till den här återkopplingen.';
$string['mapcoursenone'] = 'Inga kurser har "mappats". Återkoppling är tillgänglig för alla kurser.';
$string['mapcourses'] = '"Mappa" enkät till kurser';
$string['mappedcourses'] = '"Mappade" kurser';
$string['maximal'] = 'maximal';
$string['messageprovider:message'] = 'Påminnelse om återkoppling';
$string['messageprovider:submission'] = 'Notiser om återkoppling';
$string['minimal'] = 'Minimal';
$string['mode'] = 'Metod';
$string['modulename'] = 'Återkoppling';
$string['modulename_help'] = 'Modulen för återkoppling gör det möjligt att utforma enkäter så som man själv vill ha dem. Det finns olika frågetyper att välja emellan, t.ex. flervalsfrågor och ja/nej-frågor.

Olika inställningar finns för hur svaren ska visas: helt anonyma eller synliga bara för lärare eller för alla deltagare.

En återkoppling på ingångssidan kan även fyllas i av oinloggade användare.';
$string['modulenameplural'] = 'Enkät';
$string['move_item'] = 'Flytta den här frågan';
$string['multichoice'] = 'Flerval';
$string['multichoice_values'] = 'Flerval - värden';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Flerval med poäng';
$string['multichoicetype'] = 'Flerval - typ';
$string['multiplesubmit'] = 'Tillåt ett flertal inlämningar';
$string['multiplesubmit_help'] = 'Om det är aktiverat för anonyma återkopplingar kan användarna skicka svar ett obegränsat antal gånger.';
$string['name'] = 'Namn';
$string['name_required'] = 'Namn är obligatoriskt';
$string['next_page'] = 'Nästa sida';
$string['no_handler'] = 'Det finns ingen hanterare av handlingar för';
$string['no_itemlabel'] = 'Ingen etikett';
$string['no_itemname'] = 'Inget namn för komponent';
$string['no_items_available_yet'] = 'Det finns inga tillgängliga enheter ännu';
$string['no_templates_available_yet'] = 'Det finns inga tillgängliga mallar ännu';
$string['non_anonymous'] = 'Användarens namn kommer att loggas och visas tillsammans med svaren';
$string['non_anonymous_entries'] = 'Inga anonyma bidrag';
$string['non_respondents_students'] = 'Studenter som inte har lämnat några svar';
$string['not_completed_yet'] = 'Inte ifylld ännu';
$string['not_selected'] = 'Inte vald';
$string['not_started'] = 'Inte påbörjad';
$string['numberoutofrange'] = 'Värdet ligger utanför intervallet';
$string['numeric'] = 'Numeriskt svar';
$string['numeric_range_from'] = 'Omfattning från';
$string['numeric_range_to'] = 'Omfattning till';
$string['of'] = 'av';
$string['oldvaluespreserved'] = 'Alla gamla frågor och de tilldelade svar kommer att bevaras';
$string['oldvalueswillbedeleted'] = 'De aktuella frågorna och alla användarnas svar kommer att tas bort';
$string['only_one_captcha_allowed'] = 'Det är bara tillåtet med en captcha i en återkoppling';
$string['overview'] = 'Översikt';
$string['page'] = 'Sida';
$string['page-mod-feedback-x'] = 'Valfri återkopplingssida';
$string['page_after_submit'] = 'Bekräftelsemeddelande';
$string['pagebreak'] = 'Sidbrytning';
$string['pluginadministration'] = 'Administrera återkoppling';
$string['pluginname'] = 'Enkät';
$string['position'] = 'Position';
$string['previous_page'] = 'Föregående sida';
$string['public'] = 'Offentlig';
$string['question'] = 'Fråga';
$string['questionandsubmission'] = 'Inställningar för fråga och inlämning';
$string['questions'] = 'Frågor';
$string['radio'] = 'Flerval - ett  svar';
$string['radio_values'] = 'Radioknappar - fyll i alternativ att välja bland';
$string['ready_feedbacks'] = 'Färdiga återkopplingar';
$string['required'] = 'Obligatorisk fråga';
$string['resetting_data'] = 'Återställ svar för återkoppling';
$string['resetting_feedbacks'] = 'Återställer återkopplingar';
$string['response_nr'] = 'Svar nummer';
$string['responses'] = 'Svar';
$string['responsetime'] = 'Svarstider';
$string['save_as_new_item'] = 'Spara som en ny fråga';
$string['save_as_new_template'] = 'Spara som en ny mall';
$string['save_entries'] = 'Skicka in dina svar';
$string['save_item'] = 'Spara fråga';
$string['saving_failed'] = 'Det gick inte att spara';
$string['search:activity'] = 'Återkoppling- aktivitetsinformation';
$string['search_course'] = 'Sök kurs';
$string['searchcourses'] = 'Sök kurser';
$string['searchcourses_help'] = 'Sök efter koden eller namnet på kursen (er) som du vill associera med denna återkoppling.';
$string['selected_dump'] = 'Valda index av en variabel av typ $SESSION har dumpats här nedan:';
$string['send'] = 'Skicka';
$string['send_message'] = 'Skicka meddelande';
$string['show_all'] = 'Visa allt';
$string['show_analysepage_after_submit'] = 'Visa analyssida';
$string['show_entries'] = 'Visa svar';
$string['show_entry'] = 'Visa svar';
$string['show_nonrespondents'] = 'Visa de som inte har svarat';
$string['site_after_submit'] = 'Gå till denna adress efter inskickning';
$string['sort_by_course'] = 'Sortera efter kurs';
$string['started'] = 'startad';
$string['startedon'] = 'Startade den {$a}';
$string['subject'] = 'Rubrik';
$string['switch_item_to_not_required'] = 'Ange som ej obligatorisk';
$string['switch_item_to_required'] = 'Ange som obligatorisk';
$string['template'] = 'Mall';
$string['template_deleted'] = 'Mall borttagen';
$string['template_saved'] = 'Mallen har sparats';
$string['templates'] = 'Mallar';
$string['textarea'] = 'Större textfält';
$string['textarea_height'] = 'Antal rader';
$string['textarea_width'] = 'Antal tecken bred';
$string['textfield'] = 'Mindre textfält';
$string['textfield_maxlength'] = 'Max.antal av tecken';
$string['textfield_size'] = 'Bredd på textfält';
$string['there_are_no_settings_for_recaptcha'] = 'Det finns inga inställningar för captcha';
$string['this_feedback_is_already_submitted'] = 'Du har redan fullföljt den här enkäten';
$string['typemissing'] = 'det saknas ett värde "type"';
$string['update_item'] = 'uppdatera komponent';
$string['url_for_continue'] = 'Länk till nästa aktivitet';
$string['url_for_continue_help'] = 'När återkopplingen är inskickad visas knappen "fortsätt" som leder till din institutions Moodle-hemsida. Du kan definiera här ett annat mål/länk för  knappen "Fortsätt".';
$string['use_one_line_for_each_value'] = 'Använd en rad för varje svar.';
$string['use_this_template'] = 'Använd den här mallen';
$string['using_templates'] = 'Använd en mall';
$string['vertical'] = 'Lodrät';
