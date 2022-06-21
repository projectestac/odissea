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
 * Strings for component 'studentquiz', language 'nl', version '3.11'.
 *
 * @package     studentquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abort_button'] = 'Afbreken';
$string['add_comment'] = 'Opmerking toevoegen';
$string['add_reply'] = 'Antwoord toevoegen';
$string['after_answering_end_date'] = 'Deze StudentQuiz is op {$a} gesloten voor beantwoorden.';
$string['after_submission_end_date'] = 'Deze StudentQuiz is op {$a} gesloten voor insturen van vragen.';
$string['anonymous_user_name'] = 'Anonieme gebruiker #{$a}';
$string['answeringndbeforestart'] = 'De deadline voor beantwoorden kan niet liggen voor de openingsdatum voor beantwoorden';
$string['api_state_change_success_content'] = 'Status/zichtbaarheid van de vraag succesvol gewijzigd';
$string['api_state_change_success_title'] = 'Succes';
$string['approve'] = 'Goedkeuren';
$string['approve_toggle'] = 'Goed-/afkeuren';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Goedgekeurd';
$string['approved_veryshort'] = 'Goed';
$string['approveselectedscheck'] = 'Weet je zeker dat je de volgende vragen wilt goed-/afkeuren><br /><br />{$a}';
$string['average_column_name'] = 'Gemiddelde';
$string['before_answering_end_date'] = 'Deze StudentQuiz sluit voor beantwoorden op {$a}.';
$string['before_answering_start_date'] = 'Open voor beantwoorden vanaf {$a}.';
$string['before_submission_end_date'] = 'Deze StudentQuiz sluit voor insturen vragen op {$a}.';
$string['before_submission_start_date'] = 'Open voor insturen vragen vanaf {$a}.';
$string['cachedef_permissionssync'] = 'Volgen StudentQuiz permissie-synchronisatie';
$string['cannotcapturecommenthistory'] = 'Kan geen opmerkingsgeschiedenisregel vastleggen';
$string['collapseall'] = 'Alle opmerkingen inklappen';
$string['collapsecomment'] = 'Opmerking inklappen';
$string['comment_author'] = 'Auteur';
$string['comment_cannot_update'] = 'Kan opmerking niet bijwerken';
$string['comment_column_name'] = 'Opmerkingen';
$string['comment_error'] = 'Plaats een opmerking';
$string['comment_error_unsaved'] = 'Wil je deze opmerking eerst bewaren?';
$string['comment_help'] = 'Schrijf een opmerking';
$string['comment_help_help'] = 'Schrijf een opmerking bij de vraag';
$string['comment_veryshort'] = 'Opm.';
$string['commenthistory'] = 'Opmerkingengeschiedenis';
$string['confirmdeletecomment'] = 'Weet je zeker dat je deze opmerking wilt verwijderen?';
$string['createnewquestion'] = 'Maak nieuwe vraag';
$string['createnewquestionfirst'] = 'Maak eerste vraag';
$string['creator_anonym_fullname'] = 'Anonieme leerling';
$string['current_of_total'] = '{$a->current} van {$a->total}';
$string['delete'] = 'Verwijderen';
$string['deletecomment'] = 'Opmerking verwijderen';
$string['deletedbyauthor'] = 'Dit bericht werd op {$a} verwijderd.';
$string['deletedbyuser'] = 'Dit bericht werd op {$a->date} verwijderd door {$a->user}.';
$string['deletedcomment'] = 'Verwijderd bericht.';
$string['deleteorphanedquestions'] = 'Verweesde vragen verwijderen';
$string['deleteorphanedquestionserrormdlquestion'] = '<font color="red">Fout</font>: Kon niet verwijderen uit tabel mdl_question. De vraag wordt waarschijnlijk op een andere plaats gebruikt.<br><font color="red">Fout</font>: Verwijderen uit mdl_studentquiz* tabellen is overgeslagen.<br>';
$string['deleteorphanedquestionserrorstudentquiz'] = '<font color="red">Fout</font>: kon niet verwijderen uit de mdl_studentquiz* tabellen.<br>';
$string['deleteorphanedquestionsfullmessage'] = 'Vragen die zijn afgekeurd/gemarkeerd voor verwijderen:<ul>{$a->fullmessage</ul>';
$string['deleteorphanedquestionsnonefound'] = '<b>Niets gevonden</b>';
$string['deleteorphanedquestionsquestioninfo'] = '<li><b>{$a->name}</b> (Vraagtype: {$a->qtype}, ID: {$a->questionid})</li>';
$string['deleteorphanedquestionssmallmessage'] = 'StudentQuiz: Taak voor verwijderen verweesde vragen heeft gelopen';
$string['deleteorphanedquestionssubject'] = 'StudentQuiz';
$string['deleteorphanedquestionssuccessmdlquestion'] = '<font color="green">Gelukt</font>: verwijderd uit de mdl_question tabel.<br>';
$string['deleteorphanedquestionssuccessstudentquiz'] = '<font color="green">Gelukt</font>: verwijderd uit de mdl_studentquiz* tabellen.<br>';
$string['describe_already_deleted'] = 'Deze opmerking is al verwijderd.';
$string['describe_not_creator'] = 'Dit is niet jouw opmerking.';
$string['describe_out_of_time_delete'] = 'Er is geen tijd meer deze opmerking te verwijderen';
$string['describe_out_of_time_edit'] = 'Er is geen tijd meer deze opmerking te bewerken';
$string['difficulty_all_column_name'] = 'Moeilijkheidsgraad gemeenschap';
$string['difficulty_level_column_name'] = 'Moeilijkheidsgraad';
$string['difficulty_title'] = 'Balk moeilijkheidsgraad';
$string['editcomment'] = 'Bewerk opmerking';
$string['editedcomment_last_edit'] = 'Laatst bewerkt:';
$string['editedcommenthistory'] = 'Bewerkt door {$a->lastesteditedcommentauthorname} op {$a->lastededitedcommenttime}';
$string['editedcommenthistorylinktext'] = 'Geschiedenis';
$string['editorplaceholder'] = 'Plaats hier je opmerking ...';
$string['emailautomationnote'] = 'Let op: Dit is een geautomatiseerd systeembericht - dit e-mailadres wordt niet gelezen.';
$string['emailcommentaddedbody'] = 'Beste {$a->recepientname},

{$a->actorname} heeft op {$a->timestamp} een opmerking geplaatst bij je vraag \'{$a->questionname}\' in StudentQuiz activiteit \'{$a->modulename}\' in de cursus \'{$a->coursename}\'.

De opmerking: \'{$a->commenttext}\'

Je kunt deze vraag bekijken via {$a->questionurl}.';
$string['emailcommentaddedsmall'] = '{$a->actorname} heeft een opmerking geplaatst bij je vraag \'{$a->questionname}\'.';
$string['emailcommentaddedsubject'] = 'Er is een opmerking geplaatst bij vraag: {$a->questionname}';
$string['emailcommentdeletedbody'] = 'Beste {$a->recepientname},

De opmerking op {$a->commenttime} op je vraag \'{$a->questionname}\' in de StudentQuiz \'{$a->modulename}\' in cursus \'{$a->coursename}\' is verwijderd door {$a->actorname} op {$a->timestamp}.

De opmerking was: \'{$a->commenttext}\'

Je kunt deze vraag hier nakijken: {$a->questionurl}';
$string['emailcommentdeletedsmall'] = 'De opmerking bij jouw vraag \'{$a->questionname}\' is verwijderd door {$a->actorname}.';
$string['emailcommentdeletedsubject'] = 'Opmerking verwijderd bij de vraag: {$a->questionname}';
$string['emaildigestbody'] = 'Je {$a->digesttype} meldingenoverzicht voor de <b>{$a->modulename}</b> activiteit is hier beschikbaar:';
$string['emaildigestbody_section_content'] = 'Jouw vraag <b>{$a->questionname}</b> is <b>{$a->actiontype}</b> door <b>{$a->actorname}</b>';
$string['emaildigestbody_section_title'] = 'Melding {$a->seq}, {$a->timestamp}';
$string['emaildigestsubject'] = 'Overzichtsmelding StudentQuiz';
$string['emailminecommentdeletedbody'] = 'Beste {$a->recepientname},

Je opmerking op \'{$a->commenttime}\' bij de vraag \'{$a->questionname}\' in de StudentQuiz activiteit \'{$a->modulename}\' in de cursus \'{$a->coursename}\' is verwijderd door {$a->actorname} op {$a->timestamp}.

De opmerking was: \'{$a->commenttext}\'

Je kunt deze vraag hier opnieuw bekijken: {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = 'Je opmerking op de vraag \'{$a->questionname}\' is verwijderd door {$a->actorname}.';
$string['emailminecommentdeletedsubject'] = 'Opmerking is verwijderd bij vraag: {$a->questionname}';
$string['emailsalutation'] = 'Beste {$a},';
$string['emailsinglebody'] = 'Je vraag <b>{$a->questionname}</b> in StudentQuiz activiteit <b>{$a->modulename}</b> in cursus <b>{$a->coursename}</b> is {$a->eventname} door <b>{$a->actorname}</b> op <b>{$a->timestamp}</b>.';
$string['emailsinglebody_reviewlink'] = 'Je kunt deze vraag hier nalezen:';
$string['error_form_validation'] = '{$a}';
$string['error_sendalert'] = 'Er is een fout opgetreden bij het versturen van je rapport aan {$a}.
Het rapport kon niet worden verstuurd.';
$string['expandall'] = 'Alle opmerkingen uitklappen';
$string['expandcomment'] = 'Opmerking uitklappen';
$string['filter'] = 'Filteren';
$string['filter_advanced_element'] = '{$a}(Geavanceerd element)';
$string['filter_comment_label_date'] = 'Datum';
$string['filter_comment_label_forename'] = 'Voornaam';
$string['filter_comment_label_sort_by'] = 'Sorteren op';
$string['filter_comment_label_sort_toggle'] = 'Sorteer op {$a->field} {$a->type}';
$string['filter_comment_label_surname'] = 'Achternaam';
$string['filter_ishigher'] = 'Is hoger';
$string['filter_islower'] = 'Is lager';
$string['filter_label_approved'] = 'Goedgekeurde vragen';
$string['filter_label_comment'] = 'Opmerkingen';
$string['filter_label_createdate'] = 'Aanmaakdatum';
$string['filter_label_difficulty_level'] = 'Moeilijkheidsgraad';
$string['filter_label_fast_filters'] = 'Snelfilter voor vragen';
$string['filter_label_myattempts'] = 'Mijn pogingen';
$string['filter_label_mydifficulty'] = 'Mijn moeilijkheidsgraad';
$string['filter_label_mylastattempt'] = 'Mijn laatste poging';
$string['filter_label_myrate'] = 'Mijn beoordeling';
$string['filter_label_onlyapproved'] = 'Goedgekeurd';
$string['filter_label_onlyapproved_help'] = 'Vragen goedgekeurd door je leraar';
$string['filter_label_onlydifficult'] = 'Moeilijk voor iedereen';
$string['filter_label_onlydifficult_help'] = 'Vraag met een gemiddelde moeilijkheidsgraad van meer dan {$a} %';
$string['filter_label_onlydifficultforme'] = 'Moeilijk voor mij';
$string['filter_label_onlydifficultforme_help'] = 'Vraag met mijn moeilijkheidsgraad van meer dan {$a} %';
$string['filter_label_onlygood'] = 'Goed';
$string['filter_label_onlygood_help'] = 'Vraag met een gemiddelde beoordeling van ten minste {$a} sterren';
$string['filter_label_onlymine'] = 'Van mij';
$string['filter_label_onlymine_help'] = 'Vragen die je hebt aangemaakt';
$string['filter_label_onlynew'] = 'Onbeantwoord';
$string['filter_label_onlynew_help'] = 'Vragen die je nog niet eerder hebt beantwoord';
$string['filter_label_question'] = 'Vraagtitel';
$string['filter_label_question_creation_item'] = '{$a->creationtext} {$a->rowtext} {$a->inputtext}';
$string['filter_label_question_creation_item_inputtext'] = '{$a->inputtext} {$a->inputtype}';
$string['filter_label_questiontext'] = 'Vraaginhoud';
$string['filter_label_rates'] = 'Beoordeling';
$string['filter_label_show_mine'] = 'Mijn vragen';
$string['filter_label_tags'] = 'Tag';
$string['finish_button'] = 'Beëindigen';
$string['image_placeholder'] = '[image]';
$string['invalidcomment'] = 'ongeldige opmerking';
$string['invalidemail'] = 'Dit e-mailadres is ongeldig. Voer een enkel e-mailadres in.';
$string['lastattempt_right'] = '✓';
$string['lastattempt_right_label'] = 'Laatste poging juist';
$string['lastattempt_wrong'] = '✗';
$string['lastattempt_wrong_label'] = 'Laatste poging onjuist';
$string['latest_column_name'] = 'Laatste';
$string['manager_anonym_fullname'] = 'Anonieme beheerder';
$string['message'] = 'Bericht';
$string['messageprovider:commentadded'] = 'Melding opmerking toegevoegd';
$string['messageprovider:commentdeleted'] = 'Melding opmerking verwijderd';
$string['messageprovider:deleteorphanedquestions'] = 'Melding vraag verwijderd';
$string['messageprovider:minecommentdeleted'] = 'Melding mijn opmerking verwijderd';
$string['messageprovider:questionchanged'] = 'Melding vraaggebeurtenis';
$string['migrate_already_done'] = 'Er is niets gedaan omdat deze activiteit al is gemigreerd!';
$string['migrate_ask'] = 'De snelheid van StudentQuiz is in versie 3.2.1 verbeterd, maar deze vraag is nog steeds gebaseerd op een eerdere versie.
Vragen en quizzen zullen sneller laden als je deze migratie voor versnellen uitvoert. Je zult enkel het sneller laden ervaren, verder verandert er niets.';
$string['migrate_studentquiz'] = 'StudentQuiz vragen ouder dan versie 3.2.1 migreren naar de snellere versie met geaggregeerde waardes';
$string['migrate_studentquiz_short'] = 'Deze vragenset versnellen';
$string['migrated_successful'] = 'Deze activiteit is met succes gemigreerd!';
$string['mine_column_name'] = 'Van mij';
$string['missingparam'] = 'Een vereiste parameter ontbreekt of is onjuist';
$string['moderator'] = 'Moderator';
$string['modulename'] = 'StudentQuiz';
$string['modulename_help'] = 'Met StudentQuiz kunnen leerlingen vragen toevoegen voor hun gemeenschap. In het overzicht van StudentQuiz kunnen leerlingen vragen filteren. Ze kunnen bovendien deze gefilterde vragen gebruiken om mee te oefenen. De leraar heeft de mogelijkheid de kolom \'Gemaakt door\' te anonimiseren.
<br><br>De activiteit StudentQuiz beloont de leerlingen met punten om ze aan te sporen meer vragen toe te voegen en te oefenen. De punten worden weergegeven in een rangschikkingstabel.';
$string['modulenameplural'] = 'StudentQuizzen';
$string['more'] = 'Meer';
$string['myattempts_column_name'] = 'Mijn pogingen';
$string['mydifficulty_column_name'] = 'Mijn moeilijkheidsgraad';
$string['mylastattempt_column_name'] = 'Mijn laatste pogingen';
$string['myrate_column_name'] = 'Mijn beoordeling';
$string['nav_export'] = 'Exporteren';
$string['nav_import'] = 'Importeren';
$string['nav_question_no'] = 'Vraag {$a->current} van {$a->total}';
$string['needtoallowatleastoneqtype'] = 'Je moet ten minste een vraagtype toestaan';
$string['next_button'] = 'Volgende';
$string['no_comment'] = 'n.v.t.';
$string['no_comments'] = 'Geen opmerkingen';
$string['no_difficulty_level'] = 'n.v.t.';
$string['no_myattempts'] = 'n.v.t.';
$string['no_mylastattempt'] = 'n.v.t.';
$string['no_mylastattempt_label'] = 'Er zijn geen pogingen voor deze vraag';
$string['no_questions_add'] = 'Er zijn nog geen vragen in deze StudentQuiz. Voeg er gerust een aantal toe.';
$string['no_questions_filter'] = 'Er zijn geen vragen die overeenkomen met jouw filtercriteria. Stel het filter opnieuw in om alles te bekijken.';
$string['no_questions_selected_message'] = 'Selecteer ten minste een vraag om de quiz te starten.';
$string['no_rates'] = 'n.v.t.';
$string['no_tags'] = 'n.v.t.';
$string['nocommenthistoryexist'] = 'Er is nog geen geschiedenis voor deze opmerking.';
$string['not_approved'] = '✗';
$string['notshowratingcomment'] = 'Let op: Beoordeling en opmerkingen plaatsen is niet beschikbaar in de voorbeeldmodus voor je eigen vraag';
$string['num_questions'] = '{$a} vragen';
$string['number_column_name'] = 'Aantal';
$string['numberreply'] = '{$a} antwoorden';
$string['onlyrootcommentcanreply'] = 'Alleen het eerste niveau van opmerkingen kan een antwoord zijn';
$string['pagesize'] = 'Paginagrootte:';
$string['please_enrole_message'] = 'Meld je aan voor deze cursus om je persoonlijke voortgang te zien';
$string['pluginadministration'] = 'StudentQuiz beheer';
$string['pluginname'] = 'StudentQuiz';
$string['previous_button'] = 'Vorige';
$string['privacy:metadata:mod_studentquiz_comment_sort'] = 'Een gebruikersvoorkeur voor het opmerkingenfilter.';
$string['privacy:metadata:studentquiz_attempt'] = 'Vertegenwoordigt de poging van een gebruiker een set vragen te beantwoorden.';
$string['privacy:metadata:studentquiz_attempt:categoryid'] = 'ID van de categorie.';
$string['privacy:metadata:studentquiz_attempt:questionusageid'] = 'ID van het vraaggebruik.';
$string['privacy:metadata:studentquiz_attempt:studentquizid'] = 'ID van de StudentQuiz';
$string['privacy:metadata:studentquiz_attempt:userid'] = 'ID van de gebruiker.';
$string['privacy:metadata:studentquiz_comment'] = 'Bewaart opmerkingen voor vragen.';
$string['privacy:metadata:studentquiz_comment:comment'] = 'Opmerking voor de vraag.';
$string['privacy:metadata:studentquiz_comment:created'] = 'Tijdstip opmerking gemaakt.';
$string['privacy:metadata:studentquiz_comment:deleted'] = 'Tijdstip opmerking verwijderd.';
$string['privacy:metadata:studentquiz_comment:deleteuserid'] = 'ID van gebruiker die opmerking verwijderde.';
$string['privacy:metadata:studentquiz_comment:edited'] = 'Tijdstip opmerking bewerkt.';
$string['privacy:metadata:studentquiz_comment:edituserid'] = 'ID van gebruiker die opmerking bewerkte.';
$string['privacy:metadata:studentquiz_comment:parentid'] = 'ID van bovenliggende opmerking. 0: hoogste niveau opmerking.';
$string['privacy:metadata:studentquiz_comment:questionid'] = 'ID van de vraag.';
$string['privacy:metadata:studentquiz_comment:status'] = 'Status van de opmerking';
$string['privacy:metadata:studentquiz_comment:timemodified'] = 'Tijdstip opmerking gewijzigd';
$string['privacy:metadata:studentquiz_comment:userid'] = 'ID van de gebruiker.';
$string['privacy:metadata:studentquiz_comment:usermodified'] = 'ID van gebruiker die opmerking wijzigde';
$string['privacy:metadata:studentquiz_comment_history'] = 'Bewaart de geschiedenis van opmerkingen';
$string['privacy:metadata:studentquiz_comment_history:action'] = 'Type geschiedenis 0 - Aanmaken | 1 - Bewerken | 2 - Verwijderen';
$string['privacy:metadata:studentquiz_comment_history:commentid'] = 'ID van opmerking';
$string['privacy:metadata:studentquiz_comment_history:content'] = 'Inhoud opmerkingsgeschiedenis';
$string['privacy:metadata:studentquiz_comment_history:timemodified'] = 'Tijdstip opmerking gewijzigd';
$string['privacy:metadata:studentquiz_comment_history:userid'] = 'ID van gebruiker die opmerking bewerkte';
$string['privacy:metadata:studentquiz_notification'] = 'Wachtrij meldingen';
$string['privacy:metadata:studentquiz_notification:content'] = 'Inhoud melding';
$string['privacy:metadata:studentquiz_notification:recipientid'] = 'Ontvanger ID';
$string['privacy:metadata:studentquiz_notification:status'] = 'Status van de melding';
$string['privacy:metadata:studentquiz_notification:studentquizid'] = 'StudentQuiz ID';
$string['privacy:metadata:studentquiz_notification:timetosend'] = 'Tijdstip voor versturen melding';
$string['privacy:metadata:studentquiz_progress'] = 'Bewaart voortgangsinformatie van de leerling met deze vraag.';
$string['privacy:metadata:studentquiz_progress:attempts'] = 'Aantal pogingen om deze vraag te beantwoorden.';
$string['privacy:metadata:studentquiz_progress:correctattempts'] = 'Aantal juiste antwoorden.';
$string['privacy:metadata:studentquiz_progress:lastanswercorrect'] = '0: laatste antwoord was onjuist of niet gedefinieerd, 1: laatste antwoord was juist.';
$string['privacy:metadata:studentquiz_progress:questionid'] = 'ID van de vraag.';
$string['privacy:metadata:studentquiz_progress:studentquizid'] = 'ID van de StudentQuiz.';
$string['privacy:metadata:studentquiz_progress:userid'] = 'ID van de gebruiker.';
$string['privacy:metadata:studentquiz_rate'] = 'Bewaart de beoordelingen van vragen.';
$string['privacy:metadata:studentquiz_rate:questionid'] = 'ID van de vraag.';
$string['privacy:metadata:studentquiz_rate:rate'] = 'Beoordeling voor de vraag.';
$string['privacy:metadata:studentquiz_rate:userid'] = 'ID van de gebruiker.';
$string['progress_bar_caption'] = 'Jouw voortgang in deze StudentQuiz activiteit';
$string['questionsinuse'] = '(* Vragen gemarkeerd met een asterisk worden al in een of meerdere quizzen gebruikt.)';
$string['ranking_block_title'] = 'Rangschikking';
$string['ranking_block_title_anonymised'] = 'Rangschikking (geanonimiseerd)';
$string['rate_all_column_name'] = 'Gemeenschapsbeoordeling';
$string['rate_column_name'] = 'Beoordeling';
$string['rate_error'] = 'Geef een beoordeling';
$string['rate_help'] = 'Beoordeel deze vraag';
$string['rate_help_help'] = 'Beoordeel deze vraag.<br />1 ster is zeer slecht, 5 sterren is zeer goed.';
$string['rate_multi_stars_desc'] = '{$a} sterren geselecteerd';
$string['rate_one_star_desc'] = '1 ster geselecteerd';
$string['rate_points'] = 'Punten';
$string['rate_title'] = 'Beoordelen';
$string['ratingbar_title'] = 'Beoordelingsbalk';
$string['remove_comment'] = 'Verwijderen';
$string['remove_comment_label'] = 'Opmerking verwijderen';
$string['replies'] = 'Reacties';
$string['reply'] = 'Reactie';
$string['replycomment'] = 'Plaats reactie';
$string['report_comment_condition1'] = 'Het is beledigend';
$string['report_comment_condition2'] = 'Het bevat pestgedrag';
$string['report_comment_condition3'] = 'Het bevat aanstootgevende inhoud zoals pornografie';
$string['report_comment_condition4'] = 'Het is lasterlijk';
$string['report_comment_condition5'] = 'Het bevat een inbreuk op auteursrechten';
$string['report_comment_condition6'] = 'Het is om een andere reden tegen de regels';
$string['report_comment_condition_more'] = 'Overige informatie (optioneel)';
$string['report_comment_emailappendix'] = 'Je ontvangt deze e-mail omdat je e-mailadres wordt gebruikt in de StudentQuiz voor het rapporteren van onaanvaardbare opmerkingen.';
$string['report_comment_emailpreface'] = 'Er is een opmerking gerapporteerd door {$a->fullname} ({$a->username}),
({$a->email}).';
$string['report_comment_emailsubject'] = 'Rapport opmerking {$a-commentid}: {$a->coursename} {$a->studentquizname}';
$string['report_comment_feedback'] = 'Je melding is met succes verstuurd. Een medewerker zal verder onderzoek doen.';
$string['report_comment_info'] = 'De functie \'Rapporteren\' kan deze opmerking naar een medewerker sturen voor onderzoek. <strong>Gebruik deze functie alleen wanneer je van mening bent dat deze opmerking in strijd is met de regels</strong>.';
$string['report_comment_invalid'] = 'Je moet een reden aangeven om deze opmerking te melden.';
$string['report_comment_invalid_checkbox'] = 'Je moet ten minste een van de keuzevakjes aanvinken.';
$string['report_comment_link_text'] = 'Bekijk hier een voorbeeld';
$string['report_comment_not_available'] = 'De functie voor rapporteren van opmerkingen is niet beschikbaar.';
$string['report_comment_pagename'] = 'Een opmerking melden als onaanvaardbaar';
$string['report_comment_reasons'] = 'Redenen om de opmerking te rapporteren';
$string['report_comment_reporter_detail'] = '{$a->fullname} ({$a->username}; {$a->email}; {$a->ip})';
$string['report_comment_reporter_info'] = '<strong>Gegevens van melder</strong>:';
$string['report_comment_submit'] = 'Rapport versturen';
$string['reportcomment'] = 'Rapport';
$string['reportcomment_title'] = 'Opmerking melden als onaanvaardbaar';
$string['reportquiz_admin_title'] = 'Leerlingstatistieken';
$string['reportquiz_stats_all_last_attempt_correct'] = 'Gemeenschapsgemiddelde van laatste juiste antwoorden';
$string['reportquiz_stats_all_last_attempt_incorrect'] = 'Gemeenschapsgemiddelde van laatste onjuiste antwoorden';
$string['reportquiz_stats_all_percentage_correct_answers'] = 'Gemeenschapspercentage juiste antwoorden';
$string['reportquiz_stats_all_percentage_correct_answers_help'] = 'Som van juiste antwoorden / som van alle antwoorden.';
$string['reportquiz_stats_all_progress'] = 'Gemiddelde voortgang van gemeenschap';
$string['reportquiz_stats_all_progress_help'] = 'Gemiddelde voortgang van gemeenschap gebaseerd op alle leden.';
$string['reportquiz_stats_all_question_attempts_correct'] = 'Gemeenschapsgemiddelde van juiste antwoorden';
$string['reportquiz_stats_all_question_attempts_incorrect'] = 'Gemeenschapsgemiddelde van onjuiste antwoorden';
$string['reportquiz_stats_all_questions_answered'] = 'Gemeenschapsgemiddelde van alle antwoorden';
$string['reportquiz_stats_all_questions_answered_help'] = 'Gemiddeld aantal antwoorden gegeven door alle leden.';
$string['reportquiz_stats_all_questions_approved'] = 'Aantal goedgekeurde vragen';
$string['reportquiz_stats_all_questions_approved_help'] = 'Leraren kunnen vragen goedkeuren om de juistheid te verifiëren. Dit is het aantal goedgekeurde vragen in deze StudentQuiz.';
$string['reportquiz_stats_all_questions_created'] = 'Aantal vragen in deze StudentQuiz';
$string['reportquiz_stats_all_questions_created_help'] = 'Aantal door de gemeenschap gemaakte vragen';
$string['reportquiz_stats_all_rates_average'] = 'Gemiddelde beoordeling van alle vragen';
$string['reportquiz_stats_all_rates_average_help'] = 'De beoordeling van iedere vraag is het gemiddeld aantal sterren gekregen van de gemeenschap. Bijvoorbeeld: De gemeenschap maakte 4 vragen. Als vraag A 3 sterren van de gemeenschap kreeg, vraag B er 4, vraag C er 2 en vraag D er 5 kregen, is de gemiddelde beoordeling voor alle vragen 3,5.';
$string['reportquiz_stats_own_last_attempt_correct'] = 'Je aantal laatste juiste antwoorden';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'Je aantal laatste onjuiste antwoorden';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'Je percentage juiste antwoorden';
$string['reportquiz_stats_own_percentage_correct_answers_help'] = 'Percentage van al je juiste antwoorden uit de set van al je gegeven antwoorden in deze StudentQuiz. Gedeeltelijk juiste antwoorden tellen als onjuiste antwoorden.';
$string['reportquiz_stats_own_progress'] = 'Jouw voortgang';
$string['reportquiz_stats_own_progress_help'] = 'Percentage van al je laatste juiste antwoorden uit de set van alle vragen in deze StudentQuiz. Gedeeltelijk juiste antwoorden tellen als onjuiste antwoorden.';
$string['reportquiz_stats_own_question_attempts_correct'] = 'Totaal van jouw juiste antwoorden';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'Totaal van jouw onjuiste antwoorden';
$string['reportquiz_stats_own_questions_answered'] = 'Totaal van jouw antwoorden';
$string['reportquiz_stats_own_questions_answered_help'] = 'Aantal door jou gegeven antwoorden in deze StudentQuiz.';
$string['reportquiz_stats_own_questions_approved'] = 'Aantal goedgekeurde vragen van jou';
$string['reportquiz_stats_own_questions_approved_help'] = 'Leraren kunnen vragen goedkeuren om de juistheid te verifiëren. Dit is het aantal goedgekeurde vragen van jou binnen deze StudentQuiz.';
$string['reportquiz_stats_own_questions_created'] = 'Aantal vragen die je hebt bijgedragen';
$string['reportquiz_stats_own_questions_created_help'] = 'Aantal vragen die je hebt bijgedragen aan deze StudentQuiz';
$string['reportquiz_stats_own_rates_average'] = 'Jouw gemiddelde ontvangen beoordeling';
$string['reportquiz_stats_own_rates_average_help'] = 'De beoordeling van iedere vraag is het gemiddeld aantal sterren gekregen van de gemeenschap. Bijvoorbeeld: Je hebt vragen A en B gemaakt. Als je vraag A 3 sterren van de gemeenschap kreeg en en vraag B kreeg er 4, dan is je ontvangen gemiddelde beoordeling 3,5.';
$string['reportquiz_stats_title'] = 'Statistieken';
$string['reportquiz_total_attempt'] = 'Aantal keren dat gebruiker de quiz deed';
$string['reportquiz_total_obtained_marks'] = 'Totaalcijfer';
$string['reportquiz_total_questions_answered'] = 'Totaal aantal antwoorden';
$string['reportquiz_total_questions_right'] = 'Totaal aantal juiste antwoorden';
$string['reportquiz_total_questions_wrong'] = 'Onjuiste antwoorden';
$string['reportquiz_total_users'] = 'Aantal deelnemers';
$string['reportrank_table_column_approvedquestions'] = 'Punten voor goedgekeurde vragen';
$string['reportrank_table_column_communitystatus'] = 'Statistieken van gemeenschap';
$string['reportrank_table_column_correctanswers'] = 'Juiste antwoorden';
$string['reportrank_table_column_countquestions'] = 'Punten voor gepubliceerde vragen';
$string['reportrank_table_column_description'] = 'Beschrijving';
$string['reportrank_table_column_factor'] = 'Factor';
$string['reportrank_table_column_fullname'] = 'Volledige naam';
$string['reportrank_table_column_incorrectanswers'] = 'Onjuiste antwoorden';
$string['reportrank_table_column_lastcorrectanswers'] = 'Punten voor laatste juiste pogingen';
$string['reportrank_table_column_lastincorrectanswers'] = 'Punten voor laatste onjuiste pogingen';
$string['reportrank_table_column_points'] = 'Punten';
$string['reportrank_table_column_progress'] = 'Persoonlijke voortgang';
$string['reportrank_table_column_quantifier_name'] = 'Naam';
$string['reportrank_table_column_rank'] = 'Rang';
$string['reportrank_table_column_summeanrates'] = 'Punten voor ontvangen sterren';
$string['reportrank_table_column_total_points'] = 'Totaal punten';
$string['reportrank_table_column_value'] = 'Waarde';
$string['reportrank_table_column_yourstatus'] = 'Persoonlijke statistieken';
$string['reportrank_table_quantifier_caption'] = 'Hoe je punten worden berekend';
$string['reportrank_table_title'] = 'Rangschikking leerlingen - Top 10';
$string['reportrank_table_title_for_manager'] = 'Rangschikking leerlingen';
$string['reportrank_title'] = 'Rangschikking';
$string['review_button'] = 'Nalezen';
$string['savechanges'] = 'Bewaar wijzigingen';
$string['scheduled_task_send_digest_notification'] = 'Overzichtsmelding versturen';
$string['setting_question_publishing'] = 'Vragen publiceren';
$string['setting_question_publishing_automatic'] = 'Nieuwe vragen automatisch publiceren';
$string['setting_question_publishing_help'] = 'Gepubliceerde vragen worden getoond in de vragenpool zodat andere leerlingen ze kunnen proberen. Sta toe dat de vragen ofwel automatisch worden gepubliceerd, of vereis goedkeuring voordat ze gepubliceerd worden.
<br>Dit is enkel van toepassing op nieuw aangemaakte vragen.';
$string['setting_question_publishing_require_approval'] = 'Goedkeuring vereisen voor publiceren';
$string['settings_allowallqtypes'] = 'Alle vraagtypes toestaan';
$string['settings_allowedqtypes'] = 'Toegestane vraagtypes';
$string['settings_allowedqtypes_help'] = 'Beperk de toegestane vraagtypes tot de geselecteerde types';
$string['settings_anonymous'] = 'Leerlingen anonimiseren';
$string['settings_anonymous_help'] = 'Leerlingen kunnen elkaars namen niet zien.';
$string['settings_anonymous_label'] = 'Maak leerlingen anoniem';
$string['settings_approvedquantifier'] = 'Factor goedgekeurde vraag';
$string['settings_approvedquantifier_help'] = 'Punten voor iedere goedgekeurde vraag';
$string['settings_approvedquantifier_label'] = 'Punten voor iedere goedgekeurde vraag';
$string['settings_availability_close_answering_from'] = 'Gesloten voor beantwoorden vanaf';
$string['settings_availability_close_submission_from'] = 'Gesloten voor insturen vragen vanaf';
$string['settings_availability_open_answering_from'] = 'Open voor beantwoorden vanaf';
$string['settings_availability_open_submission_from'] = 'Open voor insturen vragen vanaf';
$string['settings_comment_editor_toolbar'] = 'Configuratie knoppen editor opmerkingen';
$string['settings_comment_editor_toolbar_des'] = 'De lijst plugins en de volgorde waarin ze worden weergegeven kan hier worden geconfigureerd';
$string['settings_commentdeletionperiod'] = 'Periode voor bewerken / verwijderen opmerkingen (minuten)';
$string['settings_commentdeletionperiod_help'] = 'Stel de tijdsperiode (in minuten) in dat de Bewerk / Verwijder knop beschikbaar is voor leerlingen om hun eigen opmerking (of antwoord daarop) te bewerken of verwijderen nadat deze geplaatst is. Waardes tussen 0-60 minuten zijn toegestaan. Als de periode voor verwijderen is ingesteld op 0, kunnen leerlingen hun eigen opmerkingen niet verwijderen. Leraren en beheerders kunnen de opmerkingen van leerlingen altijd bewerken / verwijderen, en kunnen ook de inhoud van verwijderde opmerkingen zien.';
$string['settings_email_digest_first_day'] = 'Eerste dag van de week?';
$string['settings_email_digest_first_day_help'] = 'Als je kiest voor een wekelijks overzicht, geeft deze optie je de mogelijkheid de eerste dag van een zevendaagse periode te definiëren (te beginnen op 00h:00m:00s van die dag). Dit is vooral nuttig wanneer de activiteit halverwege de week begint, bijvoorbeeld.';
$string['settings_email_digest_type'] = 'Type overzichtsmail';
$string['settings_email_digest_type_daily_digest'] = 'Dagelijks overzicht';
$string['settings_email_digest_type_help'] = 'StudentQuiz beschikt over verschillende meldingen die je kunt inschakelen, zoals om de leerling vraagmaker te informeren over een statuswijziging (bijv. een leraar heeft een van zijn of haar vragen goedgekeurd). Je kunt deze instelling gebruiken om de frequentie voor het versturen van deze meldingen te specificeren. Overzichtsmails worden alleen verstuurd wanneer er ten minste een melding is binnen de ingestelde periode.';
$string['settings_email_digest_type_no_digest'] = 'Geen overzichtsmail (een e-mail per actie)';
$string['settings_email_digest_type_weekly_digest'] = 'Wekelijks overzicht';
$string['settings_excluderoles'] = 'Rollen uitsluiten in rangschikking';
$string['settings_excluderoles_help'] = 'Geselecteerde rollen worden verborgen in de rangschikking, aangemelde gebruikers met deze rollen kunnen nog wel normaal deelnemen aan de activiteit';
$string['settings_excluderoles_label'] = 'Rollen in rangschikking om uit te sluiten';
$string['settings_forcecommenting'] = 'Opmerkingen plaatsen afdwingen';
$string['settings_forcecommenting_help'] = 'Opmerkingen plaatsen in vraagpoging afdwingen';
$string['settings_forcerating'] = 'Beoordelen afdwingen';
$string['settings_forcerating_help'] = 'Beoordelen in vraagpoging afdwingen';
$string['settings_lastcorrectanswerquantifier'] = 'Factor laatste juiste antwoord';
$string['settings_lastcorrectanswerquantifier_help'] = 'Punten voor ieder juist antwoord in de laatste poging';
$string['settings_lastcorrectanswerquantifier_label'] = 'Punten voor laatste juiste antwoorden';
$string['settings_lastincorrectanswerquantifier'] = 'Factor laatste onjuiste antwoord';
$string['settings_lastincorrectanswerquantifier_help'] = 'Punten voor ieder onjuist of gedeeltelijk juist antwoord in de laatste poging';
$string['settings_lastincorrectanswerquantifier_label'] = 'Punten voor laatste onjuiste antwoorden';
$string['settings_notification'] = 'Instellingen meldingen';
$string['settings_questionquantifier'] = 'Factor gepubliceerde vraag';
$string['settings_questionquantifier_help'] = 'Punten voor iedere gepubliceerde vraag';
$string['settings_questionquantifier_label'] = 'Punten voor iedere gepubliceerde vraag';
$string['settings_ratequantifier'] = 'Beoordelingsfactor';
$string['settings_ratequantifier_help'] = 'Punten voor iedere ontvangen ster.';
$string['settings_ratequantifier_label'] = 'Multiplicator voor het gemiddelde aantal sterren ontvangen voor een vraag';
$string['settings_removeqbehavior'] = 'Plugin StudentQuiz vraaggedrag verwijderen';
$string['settings_removeqbehavior_help'] = 'Deze informatie verschijnt enkel tijdens een update. We melden je hierbij dat de plugin StudentQuiz vraaggedrag is geïnstalleerd. Deze plugin is niet meer vereist en dus proberen we deze automatisch te verwijderen. Als je deze instelling nog steeds ziet, probeer dan <a href="{$a}">hier</a> de plugin StudentQuiz vraaggedrag handmatig te verwijderen.';
$string['settings_removeqbehavior_label'] = 'Plugin StudentQuiz vraaggedrag verwijderen';
$string['settings_reportingemail'] = 'E-mailadres voor rapporteren aanstootgevende opmerkingen';
$string['settings_reportingemail_help'] = 'Als hier een e-mailadres is ingevuld, verschijnt er een link voor Rapporteren naast iedere opmerking. Gebruikers kunnen op de link klikken om aanstootgevende opmerkingen te rapporteren. De informatie zal naar dit adres worden verstuurd.

Als dit veld niet wordt ingevuld, wordt de functie Rapporteren niet weergegeven (tenzij er een e-mailadres voor rapporteren op siteniveau is ingesteld).

Er kunnen meer dan een e-mailadressen worden ingevoerd, zolang deze gescheiden worden door een puntkomma.';
$string['settings_section_description_default'] = 'Deze waardes definiëren de standaardwaardes wanneer je een nieuwe activiteit StudentQuiz aanmaakt.';
$string['settings_section_header_comment_rating'] = 'Instellingen opmerkingen en beoordelingen';
$string['settings_section_header_question'] = 'Vraaginstellingen';
$string['settings_section_header_ranking'] = 'Instellingen rangschikking';
$string['settingsdeleteorphaned'] = 'Verweesde vragen verwijderen';
$string['settingsdeleteorphaned_help'] = 'Activeert een geplande taak die iedere dag zal lopen om alle verweesde / afgekeurde vragen uit de database te verwijderen.';
$string['settingsdeleteorphanedtime1y'] = '1 jaar';
$string['settingsdeleteorphanedtime2y'] = '2 jaar';
$string['settingsdeleteorphanedtime3y'] = '3 jaar';
$string['settingsdeleteorphanedtime6m'] = '6 maanden';
$string['settingsdeleteorphanedtimelimit'] = 'Tijdgrens voor verwijderen verweesde vraag';
$string['settingsdeleteorphanedtimelimit_help'] = 'Stel de tijdsgrens in voor de verwijdering van verweesde / afgekeurde vragen. Vragen die ouder zijn worden verwijderd.';
$string['show_less'] = 'Toon minder';
$string['show_more'] = 'Toon meer';
$string['slot_of_slot'] = 'Vraag {$a->slot} van {$a->slots} in deze set';
$string['start_quiz_button'] = 'Start quiz';
$string['state_approved'] = 'Goedgekeurd';
$string['state_change_tooltip_approved'] = 'Vraag is goedgekeurd. Klik hier om de status van deze vraag te wijzigen';
$string['state_change_tooltip_changed'] = 'Vraag is gewijzigd. Klik hier om de status van deze vraag te wijzigen';
$string['state_change_tooltip_disapproved'] = 'Vraag is afgekeurd. Klik hier om de status van deze vraag te wijzigen';
$string['state_change_tooltip_new'] = 'Vraag is nieuw. Klik hier om de status van deze vraag te wijzigen';
$string['state_changed'] = 'Gewijzigd';
$string['state_column_name'] = 'Status';
$string['state_column_name_veryshort'] = 'S';
$string['state_disapproved'] = 'Afgekeurd';
$string['state_new'] = 'Nieuw';
$string['state_toggle'] = 'Status wijzigen';
$string['statistic_block_approvals'] = 'Goedgekeurde vragen';
$string['statistic_block_created'] = 'Aangemaakte vragen';
$string['statistic_block_disapprovals'] = 'Afgekeurde vragen';
$string['statistic_block_new_changed'] = 'Nieuwe / gewijzigde vragen';
$string['statistic_block_progress_available'] = 'Beschikbare vragen';
$string['statistic_block_progress_last_attempt_correct'] = 'Laatste poging juist';
$string['statistic_block_progress_last_attempt_incorrect'] = 'Laatste poging onjuist';
$string['statistic_block_progress_never'] = 'Nog nooit beantwoorde vragen';
$string['statistic_block_title'] = 'Mijn voortgang';
$string['studentquiz'] = 'studentquiz';
$string['studentquiz:addinstance'] = 'Een nieuwe StudentQuiz toevoegen';
$string['studentquiz:canselfratecomment'] = 'Beoordelen en opmerkingen plaatsen in voorbeeld';
$string['studentquiz:changestate'] = 'Status van een vraag in StudentQuiz instellen';
$string['studentquiz:emailnotifyapproved'] = 'Melding vraag goedgekeurd';
$string['studentquiz:emailnotifychanged'] = 'Melding vraag gewijzigd';
$string['studentquiz:emailnotifycommentadded'] = 'Melding opmerking toegevoegd';
$string['studentquiz:emailnotifycommentdeleted'] = 'Melding opmerking verwijderd';
$string['studentquiz:emailnotifyquestion'] = 'Gebruiker ontvangt melding per e-mail van zijn of haar vragen';
$string['studentquiz:manage'] = 'Vragen bewerken en verwijderen in StudentQuiz';
$string['studentquiz:organize'] = 'Vragen naar categorieën verplaatsen in StudentQuiz';
$string['studentquiz:previewothers'] = 'Vragen van anderen vooraf bekijken in StudentQuiz';
$string['studentquiz:submit'] = 'Vragen in StudentQuiz maken';
$string['studentquiz:systemnotifytaskdeleteorphanedquestions'] = 'Melding verwijderde verweesde vragen';
$string['studentquiz:unhideanonymous'] = 'Kan echte namen zien wanneer anonimiseren actief is';
$string['studentquiz:view'] = 'Vragen in StudentQuiz bekijken en gebruiken';
$string['studentquizname'] = 'Naam StudentQuiz';
$string['studentquizname_help'] = 'De naam van deze StudentQuiz';
$string['submissionendbeforestart'] = 'De deadline voor antwoorden kan niet gespecificeerd zijn voor de datum vanaf wanneer kan worden geantwoord';
$string['tags'] = 'Tags';
$string['unapprove'] = 'Afkeuren';
