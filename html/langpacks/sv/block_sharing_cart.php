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
 * Strings for component 'block_sharing_cart', language 'sv', version '3.11'.
 *
 * @package     block_sharing_cart
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_string'] = 'Aktivitet:';
$string['backup'] = 'Kopiera till resursvagnen';
$string['backup_heavy_load_warning_message'] = 'Om sektionen innehåller flera objekt blir bearbetningstiden längre.';
$string['bulkdelete'] = 'Massradera';
$string['clicktomove'] = 'Klicka för att flytta hit';
$string['clipboard'] = 'Kopierar denna delade aktivitet/resurs';
$string['confirm_backup'] = 'Vill du kopiera detta objekt till resursvagnen?';
$string['confirm_backup_section'] = 'Vill du kopiera denna sektion och dess objekt till resursvagnen?';
$string['confirm_delete'] = 'Är du säker att du vill radera?';
$string['confirm_delete_selected'] = 'Är du säker att du ta bort dessa valda aktiviteter/resurser?';
$string['confirm_restore'] = 'Vill du kopiera detta till kursen?';
$string['confirm_userdata'] = 'Vill du ta med användardata i kopian av aktiviteten?';
$string['conflict_description'] = 'Vill du skriva över sektionsinformationen till kursen?';
$string['conflict_description_note'] = '*Sektionssammanfattning (typsnittsfärg, bilder, etc.) och tillgänglighetsinställningar kommer att skrivas över då de kopieras till kursen.';
$string['conflict_no_overwrite'] = 'Behåll den nuvarande sektionens namn och inställningar <strong>"{$a}"</strong>';
$string['conflict_overwrite_title'] = 'Ersätt den nuvarande sektionens namn och inställningar med <strong>"{$a}"</strong>';
$string['conflict_submit'] = 'Fortsätt';
$string['copy_section'] = 'Kopiera sektion';
$string['copy_section_title'] = 'Kopiera vald sektion';
$string['copyhere'] = 'Kopiera här';
$string['define_required_capabilities'] = 'Definiera de nödvändiga behörigheterna';
$string['delete_folder'] = 'och allt dess innehåll';
$string['drop_here'] = 'Släpp här...';
$string['folder_string'] = 'Mapp:';
$string['forbidden'] = 'Du har inget tillstånd att använda denna delade resurs/aktivitet';
$string['inprogess_pleasewait'] = 'Vänligen vänta...';
$string['invalidoperation'] = 'En felaktig åtgärd upptäcktes';
$string['label_image_replaced_text'] = '(Etikett: Bild)';
$string['missing_capabilities'] = 'Nödvändiga behörigheter saknas: {$a}';
$string['missing_capability'] = 'Nödvändig behörighet saknas: {$a}';
$string['modal_bulkdelete_confirm'] = 'Radera valda';
$string['modal_bulkdelete_title'] = 'Är du säker på att du vill radera';
$string['modal_checkbox'] = 'Vill du kopiera användardata? (T.ex. forum, ordlista, wiki, databasposter. Detta blir i så fall anonymiserat.)';
$string['modal_confirm_backup'] = 'Bekräfta';
$string['modal_confirm_delete'] = 'Radera';
$string['movedir'] = 'Flytta till mapp';
$string['no_backup_support'] = 'Denna modul saknar stöd för backup';
$string['notarget'] = 'Målet fanns ej';
$string['pluginname'] = 'Resursvagn';
$string['recordnotfound'] = 'Delat objekt hittades inte';
$string['requireajax'] = 'Resursvagnen behöver AJAX';
$string['requirejs'] = 'Resursvagnen kräver att JavaScript är påslaget i din browser.';
$string['restore'] = 'Kopiera till kurs';
$string['restore_heavy_load_warning_message'] = 'Laddningstiden är längre, då mer än 10 objekt processas.';
$string['section_name_conflict'] = 'Sektionskonflikt';
$string['settings:add_to_sharing_cart'] = 'Lägg till i Resurvagnen';
$string['settings:add_to_sharing_cart_desc'] = 'Välj mellan dra och släpp eller klicka för att lägga till metod för att lägga till objekt och sektioner i resursvagnen. - Metoden \'Klicka för att lägga till\' är standarden i resursvagnen, där du måste klicka på korgikonen innan den läggs till i resursvagnen. - "Dra och släpp" låter dig dra och släppa resurser/aktiviteter och sektioner i resursvagnsblocket eller i korgikonen i sidfoten. Observera att detta endast stöds för Moodle 4.0+';
$string['settings:click_to_add'] = 'Klicka för att lägga till';
$string['settings:drag_and_drop'] = 'Drag och släpp';
$string['settings:userdata_copyable_modtypes'] = 'Kopierbara modultyper med användardata';
$string['settings:userdata_copyable_modtypes_desc'] = 'Under en kopiering av en aktivitet till resursvagnen visas ett alternativ om användardata ska kopieras eller inte. Om detta väljs ovan och handhavande har <strong>moodle/backup:userinfo</strong>,
<strong>moodle/backup:anonymise</strong> och <strong>moodle/restore:userinfo</strong> tillstånd.
(Endast administratörer har vanligtvis dessa tillstånd.)';
$string['settings:workaround_qtypes'] = 'Speciallösning för frågetyper';
$string['settings:workaround_qtypes_desc'] = 'Speciallösningen för frågetyper utförs om frågetyp är markerad. Om frågorna som ska återskapas redan existerar kan information verka inkonsekvent. Speciallösningen försöker skapa kopior istället för att använda befintlig information.
Det kan vara bra att undvika fel som <i>error_question_match_sub_missing_in_db</i>.';
$string['sharing_cart'] = 'Resursvagn';
$string['sharing_cart:addinstance'] = 'Lägg till blocket Resursvagn';
$string['sharing_cart_help'] = '<div> <strong>Kopiera från kurs till resursvagn</strong> <p>Du kommer att märka en liten "Kopiera till resursvagn"-ikon som visas efter varje resurs eller aktivitet i en kurs. Klicka på den ikonen för att skicka en kopia av den resursen/aktiviteten till Resursvagnen. Endast själva aktiviteten, utan användardata, kommer att klonas.</p> <strong>Kopiera från resursvagn till kurs</strong> <p>Klicka på ikonen "Kopiera till kurs" i resursvagnen och välj en av målmarkörerna i varje sektion. Eller klicka på ikonen "Avbryt" som är ovanför dessa.</p> <strong>Skapa mappar i resursvagn</strong> <p>Klicka på ikonen "Flytta till mapp" i ett objekt i delningsvagnen. En inmatningsruta för nytt mappnamn visas om det inte finns någon mapp. Eller så kan du välja en befintlig mapp i rullgardinsmenyn, som kommer att ersättas med en inmatningsruta om du klickar på ikonen "Redigera".</p> </div>';
$string['unexpectederror'] = 'Ett oväntat fel inträffade.';
$string['uninstalled_plugin_warning_title'] = 'Detta plugin är avinstallerat. Försök att återställa denna utan att ominstallera pluginnet {$a} kommer att orsaka fel. Återställning är inaktiverad.';
$string['variouscourse'] = 'från olika kurser';
