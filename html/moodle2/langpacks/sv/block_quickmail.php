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
 * Strings for component 'block_quickmail', language 'sv', branch 'MOODLE_26_STABLE'
 *
 * @package   block_quickmail
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_all'] = 'Lägg till alla';
$string['add_button'] = 'Lägg till';
$string['additional_emails'] = 'Andra e-postadresser';
$string['additional_emails_help'] = 'Andra e-postadresser som du vill att meddelandet ska skickas till. Om du vill skicka till flera, separera enskilda adresser med ett komma eller semikolon. Exempel: email1@example.com, email2@example.com';
$string['admin_email_send_receipt'] = 'Admin e-mail skicka kvitto';
$string['allowstudents'] = 'Tillåt att studenter kan använda Quickmail';
$string['allowstudentsdesc'] = 'Tillåt att studenter kan använda Quickmail. Om du väljer "aldrig" kan blocket inte konfigureras på kursnivå (för att ge studenter tillgång)';
$string['all_sections'] = 'Alla grupper';
$string['alternate'] = 'Alternativ e-post adress';
$string['alternate_body'] = '<p>
{$a->fullname} har lagt till {$a->address} som en alternativ e-post adress för {$a->course}. </p>

<p>
Syftet med denna e-post var att kontrollera att adressen existerar, och ägaren av denna adress har rätt behörigheter i Moodle. </p>

<p>
Om du vill slutföra verifieringsprocessen, fortsätt genom att rikta din webbläsare till följande adress: {$a->url}. </p>

<p>
Om beskrivningen av denna e-post inte ger någon mening för dig, då du kan ha fått det av misstag. Ignorera helt enkelt  det här meddelandet. </p>

Tack.';
$string['alternate_from'] = 'Moodle: Quickmail';
$string['alternate_new'] = 'Lägg till alternativ e-post adress';
$string['alternate_subject'] = 'Bekräfta alternativ e-post adress i Moodle';
$string['approved'] = 'Godkänd';
$string['are_you_sure'] = 'Är du säker på att du vill radera {$a->title}? Den här åtgärden kan inte ångras.';
$string['attachment'] = 'Bilagor';
$string['backup_history'] = 'Inkludera Quickmail historia';
$string['body'] = 'Body';
$string['composenew'] = 'Skriv nytt e-post';
$string['config'] = 'inställningar';
$string['courseferpa'] = 'Respektera kursläge';
$string['courselayout'] = 'Kurs layout';
$string['courselayout_desc'] = '';
$string['default_flag'] = 'Standard';
$string['delete_confirm'] = 'Är du säker på att du vill radera meddelandet med följande detaljer: {$a}';
$string['delete_failed'] = 'Kunde inte radera e-post';
$string['download_all'] = 'Ladda ner allt';
$string['drafts'] = 'Visa utkast';
$string['draftssuccess'] = 'Utkast';
$string['email'] = 'E-post';
$string['email_error'] = 'Det gick inte att skicka e-post: {$a->firstname} {$a->lastname} ({$a->email})';
$string['email_error_field'] = 'Kan inte ha en tom: {$a}';
$string['entry_activated'] = 'Alternativ e-post adress {$a->address} kan nu användas i {$a->course}.';
$string['entry_failure'] = 'Ett e-post kunde inte skickas till {$a->address}. Kontrollera att {$a->address} existerar, och försök igen.';
$string['entry_key_not_valid'] = 'Aktiveringslänk är inte längre giltiga {$a->address}. Fortsätt att skicka aktiveringslänk.';
$string['entry_saved'] = 'Alternativ e-post adress {$a->address} har sparats.';
$string['entry_success'] = 'Ett e-post har skickats till {$a->address} för att kontrollera att adressen är giltig. Instruktioner om hur du aktiverar adressen finns i dess innehåll.';
$string['failed_to_send_to'] = 'misslyckats med att skicka till';
$string['ferpa'] = 'FERPA Läge';
$string['ferpa_desc'] = 'Tillåter systemet att bete sig antingen efter inställningen enligt kursens gruppinställningar, ignorerar inställningen för grupper men separerar grupper, eller ignorerar grupper helt och hållet.';
$string['from'] = 'Från';
$string['history'] = 'Historik';
$string['log'] = 'Historik';
$string['logsuccess'] = 'alla meddelanden skickades';
$string['message'] = 'Meddelande';
$string['message_body_as_follows'] = 'meddelandetext enligt följande';
$string['message_failure'] = 'vissa användare fick inte meddelandet';
$string['messageprovider:broadcast'] = 'Skicka broadcast-meddelanden med hjälp av Admin Email.';
$string['message_sent_to'] = 'Meddelande skickades till';
$string['moodle_attachments'] = 'Moodle bilagor ({$a})';
$string['no_alternates'] = 'Inga alternativa e-postmeddelanden hittade för {$a->fullname}. Fortsätt att göra en.';
$string['no_course'] = 'Ogiltig Kurs med id {$a}';
$string['no_drafts'] = 'Du har inga e-post utkast.';
$string['no_email'] = 'Det gick inte att skicka e-post till {$a->firstname} {$a->lastname}.';
$string['no_email_address'] = 'Det gick inte att skicka e-post till {$a}';
$string['noferpa'] = 'Ingen grupp Respekt';
$string['no_filter'] = 'Inget filter';
$string['no_log'] = 'Du har ingen e-post historia ännu.';
$string['no_permission'] = 'Du har inte behörighet att skicka e-post med Quickmail.';
$string['noreply'] = 'Nej-svar';
$string['no_section'] = 'Inte i en grupp';
$string['no_selected'] = 'Du måste välja användare för att kunna skicka e-post.';
$string['no_subject'] = 'Du måste ha ett ämne';
$string['not_valid'] = 'Detta är inte en giltig e-postlogg visningtyp: {$a}';
$string['not_valid_action'] = 'Du måste ange en giltig åtgärd: {$a}';
$string['not_valid_typeid'] = 'Du måste ange en giltig e-postadress för {$a}';
$string['not_valid_user'] = 'Du kan inte visa andra e-post historia.';
$string['no_type'] = '{$a} inte är i den godkända typ visaren. Vänligen använd applikationen fullständigt.';
$string['no_usergroups'] = 'Det finns inga användare i din grupp som kan skickas e-post till';
$string['no_users'] = 'Det finns inga användare som kan skickas e-post till';
$string['overwrite_history'] = 'Skriv över Quickmail Historia';
$string['pluginname'] = 'Quickmail';
$string['potential_sections'] = 'Potentiella Grupper';
$string['potential_users'] = 'Potentiella mottagare';
$string['prepend_class'] = 'Inled med kursnamn';
$string['prepend_class_desc'] = 'Inled med kursens kortnamn i ämnet för e-post.';
$string['qm_contents'] = 'Ladda ner fil innehåll';
$string['quickmail:addinstance'] = 'Lägg till en ny Quickmail block till en kurssida';
$string['quickmail:allowalternate'] = 'Tillåter användare att lägga till en alternativ e-post adress till kurser.';
$string['quickmail:canconfig'] = 'Tillåter användare att konfigurera Quickmail inställningar';
$string['quickmail:candelete'] = 'Tillåter användare att ta bort e-post från historien.';
$string['quickmail:canimpersonate'] = 'Tillåter användare att logga in som andra användare och se historiken';
$string['quickmail:cansend'] = 'Tillåter användare att skicka e-post via Quickmail';
$string['quickmail:myaddinstance'] = 'Lägg till en ny Quickmail block till sidan';
$string['receipt'] = 'Skicka kopia till Dig själv';
$string['receipt_help'] = 'Ta emot en kopia av e-post som skickades';
$string['remove_all'] = 'Ta bort alla';
$string['remove_button'] = 'Ta bort';
$string['required'] = 'Fyll i de obligatoriska fälten';
$string['reset'] = 'Återställ till grundinställningar';
$string['restore_history'] = 'Återställ Quickmail historia';
$string['role_filter'] = 'Filtrera roller';
$string['save_draft'] = 'Spara utkast';
$string['seconds'] = 'sekunder';
$string['selected'] = 'Mottagare';
$string['select_groups'] = 'Välj grupp/er...';
$string['select_roles'] = 'Roller för att filtrera efter';
$string['select_users'] = 'Välj användare ...';
$string['sendadmin'] = 'Skicka admin e-post';
$string['send_again'] = 'Skicka igen';
$string['send_email'] = 'Skicka e-post';
$string['sent_success'] = 'alla meddelanden har skickats';
$string['sent_successfully_to_the_following_users'] = 'skickats till följande användare:';
$string['sig'] = 'Signatur';
$string['signature'] = 'Signaturer';
$string['something_broke'] = 'Det ser ut som om e-post hanteringen är avaktiverad eller något annat är väldigt fel';
$string['status'] = 'status';
$string['strictferpa'] = 'Alltid separata (olika) grupper';
$string['subject'] = 'Ämne';
$string['sure'] = 'Är du säker på att du vill radera {$a->address}? Den här åtgärden kan inte ångras.';
$string['time_elapsed'] = 'Förfluten tid:';
$string['title'] = 'Titel';
$string['user'] = 'användare';
$string['users'] = 'användare';
$string['valid'] = 'Aktiveringsstatus';
$string['waiting'] = 'Väntar';
$string['warnings'] = 'Varningar';
