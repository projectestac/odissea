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
 * Strings for component 'tool_filetypes', language 'sv', version '4.5'.
 *
 * @package     tool_filetypes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Lägg till ny';
$string['corestring'] = 'Alternativ språksträng';
$string['corestring_help'] = 'Den här inställningen kan användas för att välja en annan språksträng från systemspråkfilen mimetypes.php. Generellt bör det lämnas tomt. För anpassade typer använder du beskrivningsfältet.';
$string['defaulticon'] = 'Standardikon för MIME-typ';
$string['defaulticon_help'] = 'Om det finns flera filtillägg med samma MIME-typ väljer du det här alternativet för ett av tilläggen. Ikonen för detta tillägg kommer att användas när ikonen fastställs från MIME-typen.';
$string['delete_confirmation'] = 'Är du helt säker på att du vill ta bort <strong>.{$a}</strong>?';
$string['deletea'] = 'Ta bort {$a}';
$string['deletefiletypes'] = 'Ta bort filtyp';
$string['description'] = 'Anpassad beskrivning';
$string['description_help'] = 'Enkel filtypsbeskrivning, t.ex.\'Kindle ebook\'. Om webbplatsen stöder flera språk och använder filtret för flera språk kan du ange taggar med flera språk i det här fältet för att ge en beskrivning på olika språk.';
$string['descriptiontype'] = 'Typ av beskrivning';
$string['descriptiontype_custom'] = 'Anpassad beskrivning i detta formulär';
$string['descriptiontype_default'] = 'Standard';
$string['descriptiontype_help'] = 'Det finns tre möjliga sätt att ange en beskrivning.

* \'Standard\' - Standardbeteende använder MIME-typen. Om det finns en språksträng i mimetypes.php som motsvarar den MIME-typen kommer den att användas. Annars kommer själva MIME-typen att visas för användarna.
* \'Anpassad beskrivning\' - Du kan ange en anpassad beskrivning i detta formulär.
* \'Alternativ språksträng\' - Du kan ange namnet på en språksträng i mimetypes.php att använda i stället för MIME-typen.';
$string['descriptiontype_lang'] = 'Alternativ språksträng';
$string['displaydescription'] = 'Beskrivning';
$string['editfiletypes'] = 'Redigera befintlig filtyp';
$string['emptylist'] = 'Det finns inga filtyper definierade';
$string['error_addentry'] = 'Filtillägget, beskrivningen, MIME-typen och ikonen får inte innehålla radbyten eller semikolon.';
$string['error_defaulticon'] = 'Ett annat filtillägg med samma MIME-typ är redan markerad som standardikon.';
$string['error_extension'] = 'Filtillägget <strong>{$a}</strong> finns redan eller är ogiltigt. Filtillägg måste vara unika och får inte innehålla specialtecken.';
$string['error_notfound'] = 'Filtypen med filtillägget {$a} kan inte hittas.';
$string['extension'] = 'Filtillägg';
$string['extension_help'] = 'Filtillägget utan punkt, t.ex. \'doc\'';
$string['groups'] = 'Typgrupper';
$string['groups_help'] = 'Valfri lista över filtypsgrupper som den här filtypen tillhör. Det är allmänna kategorier som "dokument" eller "bild".';
$string['icon'] = 'Filikon';
$string['icon_help'] = 'Ikonfilsnamn

Listan över ikoner är hämtad från katalogen /pix/f i din Moodle-installation. Du kan lägga till egna ikonfiler i den här mappen om det behövs.';
$string['mimetype'] = 'MIME-typ';
$string['mimetype_help'] = 'MIME-typ som är associerad med denna filtyp, t.ex. \'application/vnd.ms-excel\'';
$string['pluginname'] = 'Filtyper';
$string['privacy:metadata'] = 'Pluginmodulen Filtyper lagrar ingen personinformation.';
$string['revert'] = 'Återställ {$a} till Moodles standardvärden';
$string['revert_confirmation'] = 'Är du säker på att du vill överge dina ändringar och återställa <strong>.{ $a}</strong> till Moodles standardvärden?';
$string['revertfiletype'] = 'Återställ filtyp';
$string['source'] = 'Typ';
$string['source_custom'] = 'Anpassad';
$string['source_deleted'] = 'Borttagen';
$string['source_modified'] = 'Ändrad';
$string['source_standard'] = 'Standard';
