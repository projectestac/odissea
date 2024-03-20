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
 * Strings for component 'block_sharing_cart', language 'nl', version '4.1'.
 *
 * @package     block_sharing_cart
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_string'] = 'Activiteit:';
$string['backup'] = 'Kopieer naar Kopieermachine';
$string['backup_heavy_load_warning_message'] = 'Indien secties meerdere activiteiten bevatten, zal de verwerkingstijd langer zijn.';
$string['bulkdelete'] = 'Verwijderen in bulk';
$string['clicktomove'] = 'Klik om hiernaar te verplaatsen';
$string['clipboard'] = 'Kopieren van dit gedeelde onderdeel';
$string['confirm_backup'] = 'Weet je zeker dat je deze activiteit / bron wil kopiëren naar de Kopieermachine?';
$string['confirm_backup_section'] = 'Wil je deze cursus sectie en de activiteiten / bronnen kopiëren naar de Kopieermachine?';
$string['confirm_delete'] = 'Weet je zeker dat je wilt verwijderen?';
$string['confirm_delete_selected'] = 'Weet je zeker dat je alle geselecteerde onderdelen wilt verwijderen?';
$string['confirm_restore'] = 'Weet je zeker dat je dit onderdeel wilt kopiëren naar de cursus?';
$string['confirm_userdata'] = 'Wil jij gebruikersdata meenemen in de kopie van deze activiteit / bron?
OK - Kopieer *met* gebruikersdata
Annuleer - Kopieer *zonder* gebruikersdata';
$string['conflict_description'] = 'Wil je de sectie informatie overschrijven naar de cursus?';
$string['conflict_description_note'] = '*Sectie samenvatting instellingen (kleur letter, afbeeldingen etc.) en instelling voor Beperk toegang zullen overschreven worden wanneer je kopieert naar de cursus.';
$string['conflict_no_overwrite'] = 'Bewaar de huidige sectie naam en instellingen <strong>"{$a}"</strong>';
$string['conflict_overwrite_title'] = 'Overschrijf sectie naam en instellingen naar <strong>"{$a}"</strong>';
$string['conflict_submit'] = 'Ga verder';
$string['copy_section'] = 'Kopieer sectie';
$string['copy_section_title'] = 'Kopieer geselecteerde sectie';
$string['copyhere'] = 'Kopieer hier';
$string['define_required_capabilities'] = 'Bepaal de benodigde rechten';
$string['delete_folder'] = 'en al de inhoud';
$string['drop_here'] = 'Plaats hier..';
$string['folder_string'] = 'Folder:';
$string['forbidden'] = 'Je hebt geen recht om dit gedeelde onderdeel te benaderen';
$string['inprogess_pleasewait'] = 'Even geduld...';
$string['invalidoperation'] = 'Ongeldige handeling gedetecteerd';
$string['label_image_replaced_text'] = '(Label: Afbeelding)';
$string['missing_capabilities'] = 'Benodigde rechten ontbreken: {$a}';
$string['missing_capability'] = 'Benodigd recht ontbreekt: {$a}';
$string['modal_bulkdelete_confirm'] = 'Verwijder geselecteerde';
$string['modal_bulkdelete_title'] = 'Weet je zeker dat je wilt verwijderen';
$string['modal_checkbox'] = 'Wil je gebruikersdata kopiëren? (Bijvoorbeeld: Woordenlijst, Wiki, Database)';
$string['modal_confirm_backup'] = 'Bevestig';
$string['modal_confirm_delete'] = 'Verwijder';
$string['movedir'] = 'Verplaats naar folder';
$string['no_backup_support'] = 'Voor deze activiteit wordt de backup niet ondersteunt';
$string['notarget'] = 'Doel niet gevonden';
$string['pluginname'] = 'Kopieermachine';
$string['privacy:metadata:block_sharing_cart'] = 'Hier wordt Kopieermachine data opgeslagen';
$string['privacy:metadata:block_sharing_cart:ctime'] = 'Tijd aangemaakt';
$string['privacy:metadata:block_sharing_cart:modicon'] = 'Activiteit module icoon';
$string['privacy:metadata:block_sharing_cart:modname'] = 'Naam van de activiteitsmodule';
$string['privacy:metadata:block_sharing_cart:modtext'] = 'Titel van de activiteitsmodule';
$string['privacy:metadata:block_sharing_cart:tree'] = 'De titel van de kopieermachine folder die toont in het block';
$string['privacy:metadata:block_sharing_cart:userid'] = 'Het ID van de gebruiker';
$string['privacy:metadata:block_sharing_cart:weight'] = 'Volgorde van onderdelen, gesorteerd in aflopende volgorde';
$string['privacy:metadata:block_sharing_cart_plugins'] = 'Kopieermachine plugin data wordt hier opgeslagen';
$string['privacy:metadata:block_sharing_cart_plugins:data'] = 'Kopieermachine plugin data';
$string['privacy:metadata:block_sharing_cart_plugins:plugin'] = 'De naam van de plugin';
$string['privacy:metadata:block_sharing_cart_plugins:userid'] = 'Het ID van de gebruiker';
$string['recordnotfound'] = 'Gedeeld onderdeel niet gevonden';
$string['requireajax'] = 'Kopieermachine vereist AJAX';
$string['requirejs'] = 'Kopieermachine vereist het kunnen uitvoeren van JavaScript in je browser';
$string['restore'] = 'Kopieer naar cursus';
$string['restore_heavy_load_warning_message'] = 'Laadtijd is langer, omdat er meer dan activiteiten / bronnen verwerkt worden.';
$string['section_name_conflict'] = 'Sectie conflict';
$string['settings:add_to_sharing_cart'] = 'Voeg toe aan kopieermachine';
$string['settings:add_to_sharing_cart_desc'] = 'Kies tussen drag en drop of klikken als methode om modules en secties aan de kopieermachine toe te voegen. -
\'Klikken om toe te voegen\' is de standaard methode in de kopieermachine, waarbij je op het \'mand\' icoon moet klikken om iets toe te voegen.
De \'drag en drop\' methode staat je toe om modules / activiteiten en secties te slepen naar het \'mand\' icoon in de footer van de pagina. Dit is alleen ondersteunt vanaf Moodle 4.0+';
$string['settings:click_to_add'] = 'Klik om toe te voegen';
$string['settings:drag_and_drop'] = 'Sleep en zet neer';
$string['settings:show_copy_section_in_block'] = 'Toon de \'Kopieer sectie\' optie in het block';
$string['settings:show_copy_section_in_block_desc'] = 'Toon de \'Kopieer sectie\' optie in het kopieermachine block, onder alle modules / activiteiten';
$string['settings:userdata_copyable_modtypes'] = 'Module types met kopieerbare gebruikersdata';
$string['settings:userdata_copyable_modtypes_desc'] = 'Bij het kopiëren van een activiteit in de Kopieermachine,
wordt een optie getoond of je gebruikersdata mee wilt kopiëren of niet,
indien die activiteit hierboven is aangevinkt en de gebruiker heeft <strong>moodle/backup:userinfo</strong>,
<strong>moodle/backup:anonymise</strong> and <strong>moodle/restore:userinfo</strong> als recht.
(Standaard heeft alleen de Manager rol deze rechten)';
$string['settings:workaround_qtypes'] = 'Workaround voor vraag types';
$string['settings:workaround_qtypes_desc'] = 'De workaround voor het terugzetten van vragen zal worden uitgevoerd indien het vraagtype is aangevinkt.
Wanneer de vraag die teruggezet wordt al bestaat kan de data inconsistent lijken,
deze workaround doet een poging om een nieuwe kopie te maken in plaats van het hergebruik van bestaande data.
Het kan nuttig zijn om enkele terugzet fouten te voorkomen, zoals <i>error_question_match_sub_missing_in_db</i>.';
$string['sharing_cart'] = 'Kopieermachine';
$string['sharing_cart:addinstance'] = 'Voeg een nieuw Kopieermachine block toe';
$string['sharing_cart_help'] = '<div>
    <strong>Kopiëren van cursus naar Kopieermachine</strong>
        <p>Je ziet een klein icoon "Kopieer naar Kopieermachine" icon naast elke
            bron of activiteit in een cursus.
            Klik op dat icoon om een kopie van die bron / activiteit in de Kopieermachine te plaatsen.
            Alleen de activiteit zelf, zonder gebruikersdata, zal gekopieerd worden.</p>
    <strong>Kopiëren van Kopieermachine naar cursus</strong>
        <p>Klik op een "Kopieer naar cursus" icoon in de Kopieermachine en selecteer één van de gemarkeerde secties in de cursus.
            Of klik "Annuleer" boven de markering.</p>
    <strong>Maak folders in de Kopieermachine</strong>
        <p>Klik op het "Verplaats naar folder" icoon bij een onderdeel in de Kopieermachine.
            Voer de folder naam in indien er nog geen folder bestaat.
            Of selecteer een bestaande folder vanuit de lijst.
            Deze zal worden vervangen met een invoer veld wanneer je op het wijzig icoon klikt.</p>
</div>';
$string['unexpectederror'] = 'Er trad een onverwachte fout op';
$string['uninstalled_plugin_warning_title'] = 'Deze plugin is gedeïnstalleerd. Poging om dit te herstellen zonder de plugin {$a} te installeren zal fouten opleveren. Terugzetten is uitgeschakeld.';
$string['variouscourse'] = 'vanuit verschillende cursussen';
