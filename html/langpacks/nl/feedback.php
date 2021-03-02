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
 * Strings for component 'feedback', language 'nl', version '3.8'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Voeg een vraag toe';
$string['add_pagebreak'] = 'Voeg een paginascheiding in';
$string['adjustment'] = 'Aanpassing';
$string['after_submit'] = 'Na inzenden';
$string['allowfullanonymous'] = 'Volledig anoniem toestaan';
$string['analysis'] = 'Analyse';
$string['anonymous'] = 'Anoniem';
$string['anonymous_edit'] = 'Gebruikersnamen bijhouden';
$string['anonymous_entries'] = 'Anoniem ingevulde formulieren ({$a})';
$string['anonymous_user'] = 'Anonieme gebruiker';
$string['answerquestions'] = 'Beantwoord de vragen';
$string['append_new_items'] = 'Nieuwe items toevoegen';
$string['autonumbering'] = 'Nummer vragen automatisch';
$string['autonumbering_help'] = 'Automatisch nummeren van vragen inschakelen of uitschakelen';
$string['average'] = 'Gemiddelde';
$string['bold'] = 'Vet';
$string['calendarend'] = '{$a} sluit';
$string['calendarstart'] = '{$a} opent';
$string['cannotaccess'] = 'Je hebt alleen toegang tot deze feedback vanuit een cursus';
$string['cannotsavetempl'] = 'Bewaren van sjablonen is niet toegelaten';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Captcha is niet ingesteld';
$string['check'] = 'Meerkeuze - meerdere antwoorden';
$string['check_values'] = 'Checkbox-waarden';
$string['checkbox'] = 'Checkbox';
$string['choosefile'] = 'Kies een bestand';
$string['chosen_feedback_response'] = 'Gekozen feedback-antwoord';
$string['closebeforeopen'] = 'Je hebt een einddatum opgegeven voor de startdatum.';
$string['complete_the_form'] = 'Beantwoord de vragen';
$string['completed'] = 'Voltooid';
$string['completed_feedbacks'] = 'Ingevulde antwoorden';
$string['completedon'] = 'Voltooid op {$a}';
$string['completionsubmit'] = 'Bekijk als voltooid als de feedback verstuurd is';
$string['configallowfullanonymous'] = 'Als deze optie op ja staat, dan kan de feedback op de startpagina ingevuld worden zonder aangemeld te zijn.';
$string['confirmdeleteentry'] = 'Ben je zeker dat je dit wil verwijderen?';
$string['confirmdeleteitem'] = 'Ben je zeker dat je dit element wil verwijderen?';
$string['confirmdeletetemplate'] = 'Ben je zeker dat je dit sjabloon wil verwijderen?';
$string['confirmusetemplate'] = 'Ben je zeker dat je dit sjabloon wil gebruiken?';
$string['continue_the_form'] = 'Ga verder met het beantwoorden van de vragen';
$string['count_of_nums'] = 'Aantal';
$string['courseid'] = 'Cursus ID';
$string['creating_templates'] = 'Bewaar deze vragen als een nieuw sjabloon';
$string['delete_entry'] = 'Invoer wissen';
$string['delete_item'] = 'Vraag wissen';
$string['delete_old_items'] = 'Verwijder oude items';
$string['delete_pagebreak'] = 'Verwijder paginascheiding';
$string['delete_template'] = 'Sjabloon wissen';
$string['delete_templates'] = 'Sjablonen wissen...';
$string['depending'] = 'Afhankelijke vragen';
$string['depending_help'] = 'Met afhankelijke vragen kun je vragen tonen die afhankelijk zijn van antwoorden op andere vragen.

Een voorbeeld om te tonen hoe het werkt:
* Maak een vraag waarvan andere vragen zullen afhankelijk zijn.
* Voeg een paginascheiding toe.
* Voeg dan de vragen toe die afhankelijk zijn van het antwoord op de vorige vraag.
Kies in het formulier waarmee je de vraag maakt de vraag in de lijst "afhankelijke vraag" en zet de benodigde waarde in het tekstvak "afhankelijke waarde".

De structuur zou er dan als volgt moeten uitzien:
* Vraag 1: Heb je een auto? Ja/Nee
* Paginascheiding
* Vraag 2: Welke kleur heeft jouw auto? (deze vraag hangt af van vraag 1 met antwoord=Ja)
* Vraag 3: Waarom heb je geen auto? (deze vraag hangt af van vraag 1 met antwoord=Nee)
* ... andere vragen';
$string['dependitem'] = 'Hangt af van vraag';
$string['dependvalue'] = 'Hangt af van waarde';
$string['description'] = 'Beschrijving';
$string['do_not_analyse_empty_submits'] = 'Analyseer geen lege inzendingen';
$string['downloadresponseas'] = 'Download alle antwoorden als:';
$string['drop_feedback'] = 'Verwijder uit deze cursus';
$string['dropdown'] = 'Meerkeuzevraag - één antwoord toegelaten (rolmenu)';
$string['dropdown_values'] = 'Antwoorden';
$string['dropdownlist'] = 'Meerkeuzevraag - één antwoord (rolmenu)';
$string['dropdownrated'] = 'Rolmenu (beoordeeld)';
$string['edit_item'] = 'Bewerk vraag';
$string['edit_items'] = 'Bewerk vragen...';
$string['email_notification'] = 'Stuur e-mailnotificaties voor inzendingen';
$string['email_notification_help'] = 'Indien ingeschakeld krijgen leraars een melding via wanneer er een formulier is ingestuurd.';
$string['emailteachermail'] = '{$a->username} heeft het feedbackformulier \'{$a->feedback}\' ingevuld en opgestuurd.

Je kunt het hier bekijken:

{$a->url}';
$string['emailteachermailhtml'] = '<p>{$a->username} heeft het feedbackformulier <i>\'{$a->feedback}\'</i> ingevuld en opgestuurd.</p><p>
Je kunt het <a href="{$a->url}">hier</a> bekijken.<p>';
$string['entries_saved'] = 'Je antwoorden zijn bewaard.';
$string['eventresponsedeleted'] = 'Antwoord verwijderd';
$string['eventresponsesubmitted'] = 'Antwoord ingestuurd';
$string['export_questions'] = 'Exporteer vragen';
$string['export_to_excel'] = 'Exporteren naar Excel';
$string['feedback:addinstance'] = 'Voeg een nieuwe feedback toe';
$string['feedback:complete'] = 'Feedback invullen';
$string['feedback:createprivatetemplate'] = 'Maak een privé sjabloon';
$string['feedback:createpublictemplate'] = 'Maak een publiek sjabloon';
$string['feedback:deletesubmissions'] = 'Verwijder ingevulde inzendingen';
$string['feedback:deletetemplate'] = 'Verwijder sjabloon';
$string['feedback:edititems'] = 'Bewerk items';
$string['feedback:mapcourse'] = 'Koppel cursussen aan globale feedbacks';
$string['feedback:receivemail'] = 'E-mailnotificatie ontvangen';
$string['feedback:view'] = 'Feedback bekijken';
$string['feedback:viewanalysepage'] = 'Bekijk de analysepagina na insturen';
$string['feedback:viewreports'] = 'Rapporten bekijken';
$string['feedback_is_not_for_anonymous'] = 'Feedback is niet anoniem';
$string['feedback_is_not_open'] = 'De feedback is niet open';
$string['feedbackclose'] = 'Antwoorden toestaan tot';
$string['feedbackcompleted'] = '{$a->username} heeft {$a->feedbackname} voltooid';
$string['feedbackopen'] = 'Antwoorden toestaan van';
$string['file'] = 'Bestand';
$string['filter_by_course'] = 'Filter op cursus';
$string['handling_error'] = 'Er is een fout opgetreden bij de verwerking door de feedback';
$string['hide_no_select_option'] = 'Verberg de "Niets gekozen"-optie';
$string['horizontal'] = 'Horizontaal';
$string['import_questions'] = 'Importeer vragen';
$string['import_successfully'] = 'Import gelukt';
$string['importfromthisfile'] = 'Importeer van dit bestand';
$string['includeuserinrecipientslist'] = 'Neem {$a} op in de lijst met ontvangers';
$string['indicator:cognitivedepth'] = 'Feedbackformulier cognitief';
$string['indicator:cognitivedepth_help'] = 'Deze indicator is gebaseerd op de door de leerling bereikte cognitieve diepte in een Feedbackformulier activiteit.';
$string['indicator:cognitivedepthdef'] = 'Feedback cognitief';
$string['indicator:cognitivedepthdef_help'] = 'De deelnemer heeft dit percentage van de cognitieve betrokkenheid van de Feedback-activiteiten tijdens dit analyse-interval bereikt (Niveaus = Geen weergave, Bekijken, Verzenden)';
$string['indicator:socialbreadth'] = 'Feedbackformulier sociaal';
$string['indicator:socialbreadth_help'] = 'Deze indicator is gebaseerd op de door de leerling behaalde sociale breedte in een Feedbackformulier activiteit.';
$string['indicator:socialbreadthdef'] = 'Feedback sociaal';
$string['indicator:socialbreadthdef_help'] = 'De deelnemer heeft dit percentage van de sociale betrokkenheid van de Feedback-activiteiten tijdens dit analyse-interval bereikt (Niveaus = Geen deelname, Alleen deelnemer, Deelnemer met anderen)';
$string['info'] = 'Informatie';
$string['infotype'] = 'Informatietype';
$string['insufficient_responses'] = 'Onvoldoende antwoorden';
$string['insufficient_responses_for_this_group'] = 'Er zijn onvoldoende antwoorden voor deze groep';
$string['insufficient_responses_help'] = 'Om feedback anoniem te houden, moeten er minimaal 2 antwoorden gegeven zijn.';
$string['item_label'] = 'Label';
$string['item_name'] = 'Vraag';
$string['label'] = 'Label';
$string['labelcontents'] = 'Inhoud';
$string['mapcourse'] = 'Koppel feedback aan cursussen';
$string['mapcourse_help'] = 'Standaard zijn feedback formulieren die op je startpagina gemaakt worden beschikbaar voor heel de site en zullen verschijnen in alle cursussen wanneer je het feedbackblok gebruikt. Je kunt het feedbackformulier vastzetten door er een permanent blok van te maken of het aantal cursussen waarin het blok verschijnt limiteren door het te koppelen aan specifieke cursussen.';
$string['mapcourseinfo'] = 'Dit is een feedbackformulier dat beschikbaar is voor alle cursussen van de hele site die het feedback blok gebruiken. Je kunt echter de cursussen waar de feedback zal verschijnen beperken door het te koppelen aan bepaalde cursussen. Zoek de cursus en koppel die aan dit feedbackformulier.';
$string['mapcoursenone'] = 'Er zijn geen cursussen gekoppeld. De feedback staat open voor alle cursussen';
$string['mapcourses'] = 'Koppel feedback aan cursussen';
$string['mappedcourses'] = 'Gekoppelde cursussen';
$string['mappingchanged'] = 'Cursusverwijzing is gewijzigd';
$string['maximal'] = 'Maximum';
$string['messageprovider:message'] = 'Feedback herinnering';
$string['messageprovider:submission'] = 'Feedback meldingen';
$string['minimal'] = 'Minimaal';
$string['mode'] = 'Modus';
$string['modulename'] = 'Feedbackformulier';
$string['modulename_help'] = 'Met de feedback module kan een leraar enquêtes maken om feedback van leerlingen te krijgen. Hiervoor staan verschillende vraagtypes ter beschikking, zoals meerkeuze, ja/nee of invoer van tekst.

De antwoorden kunnen anoniem zijn indien gewenst en de resultaten kunnen al dan niet aan de deelnemers getoond worden. Feedbackformulieren op de startpagina van de site, kunnen eventueel ingevuld worden door niet-aangemelde gebruikers.

Feedback kan gebruikt worden

* voor cursus-evaluatie, om zo de cursus te verbeteren voor latere deelnemers
* om deelnemer te laten intekenen voor cursusmodules, activiteiten enz.
* voor onderzoek naar cursuskeuze, schoolbeleid enz.
* voor anti-pest onderzoek waar leerlingen anoniem incidenten kunnen rapporteren.';
$string['modulenameplural'] = 'Feedbackformulieren';
$string['move_item'] = 'Verplaats deze vraag';
$string['multichoice'] = 'Meerkeuze';
$string['multichoice_values'] = 'Meerkeuzewaarden';
$string['multichoiceoption'] = '<span class="weight">({$a->weight}) </span>{$a->name}';
$string['multichoicerated'] = 'Meerkeuze (beoordeling)';
$string['multichoicetype'] = 'Meerkeuze type';
$string['multiplesubmit'] = 'Meerdere inzendingen toestaan';
$string['multiplesubmit_help'] = 'Indien er gekozen is voor anonieme onderzoeken, dan kunnen gebruikers een onbeperkt aantal keer het formulier insturen';
$string['name'] = 'Naam';
$string['name_required'] = 'Naam verplicht';
$string['nameandlabelformat'] = '({$a->label}) {$a->name}';
$string['next_page'] = 'Volgende pagina';
$string['no_handler'] = 'Er is geen actionhandler voor';
$string['no_itemlabel'] = 'Geen label';
$string['no_itemname'] = 'Geen itemnaam';
$string['no_items_available_yet'] = 'Er zijn nog geen vragen toegevoegd';
$string['no_templates_available_yet'] = 'Nog geen sjablonen beschikbaar';
$string['non_anonymous'] = 'De gebruikersnamen zullen bewaard worden en samen met de antwoorden getoond worden';
$string['non_anonymous_entries'] = 'Niet-anonieme items  ({$a})';
$string['non_respondents_students'] = 'Leerlingen die niet ingestuurd hebben ({$a})';
$string['not_completed_yet'] = 'Nog niet ingevuld';
$string['not_selected'] = 'Niets geselecteerd';
$string['not_started'] = 'Niet begonnen';
$string['numberoutofrange'] = 'Aantal buiten bereik';
$string['numeric'] = 'Numeriek antwoord';
$string['numeric_range_from'] = 'Bereik van';
$string['numeric_range_to'] = 'Bereik tot';
$string['of'] = 'van';
$string['oldvaluespreserved'] = 'Alle oude vragen en antwoorden zullen bewaard worden';
$string['oldvalueswillbedeleted'] = 'De huidige vragen en alle antwoorden van je gebruikers zullen verwijderd worden.';
$string['only_one_captcha_allowed'] = 'Slechts één captcha is toegelaten in een feedback';
$string['openafterclose'] = 'Je hebt een startdatum opgegeven na de sluitdatum';
$string['overview'] = 'Overzicht';
$string['page'] = 'Pagina';
$string['page-mod-feedback-x'] = 'Elke feedback modulepagina';
$string['page_after_submit'] = 'Bericht na voltooien';
$string['pagebreak'] = 'Paginascheiding';
$string['pluginadministration'] = 'Feedback beheer';
$string['pluginname'] = 'Feedbackformulier';
$string['position'] = 'Positie';
$string['previous_page'] = 'Vorige pagina';
$string['privacy:metadata:completed'] = 'Gegevens over de inzendingen voor de feedback';
$string['privacy:metadata:completed:anonymousresponse'] = 'Of de inzending anoniem gebruikt moet worden.';
$string['privacy:metadata:completed:timemodified'] = 'De laatste wijzigingstijd van de inzending.';
$string['privacy:metadata:completed:userid'] = 'De ID van de gebruiker die de feedbackactiviteit ingevuld heeft.';
$string['privacy:metadata:completedtmp'] = 'Gegevens over de inzendingen die nog bezig zijn.';
$string['privacy:metadata:value'] = 'Gegevens over het antwoord op een vraag.';
$string['privacy:metadata:value:value'] = 'Het gekozen antwoord.';
$string['privacy:metadata:valuetmp'] = 'Gegevens over het antwoord op een vraag in een inzending die nog bezig is.';
$string['public'] = 'Publiek';
$string['question'] = 'Vraag';
$string['questionandsubmission'] = 'Vraag- en instuuropties';
$string['questions'] = 'Vragen';
$string['questionslimited'] = 'Toont enkel de eerste  {$a} vragen, bekijk individuele antwoorden of download de tabelgegevens om alles te bekijken.';
$string['radio'] = 'Meerkeuzevraag - één antwoord';
$string['radio_values'] = 'Antwoorden';
$string['ready_feedbacks'] = 'Ingevulde feedbackformulieren';
$string['required'] = 'Verplicht';
$string['resetting_data'] = 'Verwijder alle antwoorden';
$string['resetting_feedbacks'] = 'Feedback naar standaardinstellingen';
$string['response_nr'] = 'Antwoordnummer';
$string['responses'] = 'Antwoorden';
$string['responsetime'] = 'Reactietijden';
$string['save_as_new_item'] = 'Bewaar als nieuwe vraag';
$string['save_as_new_template'] = 'Opslaan als nieuw sjabloon';
$string['save_entries'] = 'Verzend je antwoorden';
$string['save_item'] = 'Bewaar vraag';
$string['saving_failed'] = 'Opslaan mislukt';
$string['search:activity'] = 'Feedback - activiteitsinformatie';
$string['search_course'] = 'Zoek cursus';
$string['searchcourses'] = 'Zoek cursussen';
$string['searchcourses_help'] = 'Zoek de code of naam van de cursus(sen) die je wil associëren met dit feedbackformulier.';
$string['selected_dump'] = 'De geselecteerde indexen van $SESSION variable staan hier gedumpt:';
$string['send'] = 'Stuur';
$string['send_message'] = 'Stuur bericht';
$string['show_all'] = 'Toon alle';
$string['show_analysepage_after_submit'] = 'Toon analysepagina';
$string['show_entries'] = 'Toon antwoorden';
$string['show_entry'] = 'Toon antwoord';
$string['show_nonrespondents'] = 'Niet geantwoord';
$string['site_after_submit'] = 'Site na insturen';
$string['sort_by_course'] = 'Sorteer op cursus';
$string['started'] = 'Gestart';
$string['startedon'] = 'Gestart op {$a}';
$string['subject'] = 'Onderwerp';
$string['switch_item_to_not_required'] = 'Wijzig naar antwoord niet verplicht';
$string['switch_item_to_required'] = 'Wijzig naar antwoord verplicht';
$string['template'] = 'Sjabloon';
$string['template_deleted'] = 'Sjabloon verwijderd';
$string['template_saved'] = 'Sjabloon bewaard';
$string['templates'] = 'Sjablonen';
$string['textarea'] = 'Langer tekstantwoord';
$string['textarea_height'] = 'Aantal regels';
$string['textarea_width'] = 'Breedte';
$string['textfield'] = 'Kort tekstantwoord';
$string['textfield_maxlength'] = 'Maximale aantal tekens';
$string['textfield_size'] = 'Breedte tekstveld';
$string['there_are_no_settings_for_recaptcha'] = 'Er zijn geen instellingen voor captcha';
$string['this_feedback_is_already_submitted'] = 'Je hebt dit feedbackformulier al ingestuurd.';
$string['typemissing'] = 'Ontbrekende waarde "type"';
$string['update_item'] = 'Bewaar de wijzigingen';
$string['url_for_continue'] = 'Link naar volgende activiteit';
$string['url_for_continue_help'] = 'Nadat een feedback is ingestuurd wordt standaard de cursuspagina getoond. Je kunt hier een andere doel-URL opgeven voor deze ga verder knop.';
$string['use_one_line_for_each_value'] = 'Gebruik één regel per antwoord!';
$string['use_this_template'] = 'Gebruik dit sjabloon';
$string['using_templates'] = 'Gebruik een sjabloon';
$string['vertical'] = 'Verticaal';
