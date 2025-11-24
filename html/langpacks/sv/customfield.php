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
 * Strings for component 'customfield', language 'sv', version '4.5'.
 *
 * @package     customfield
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Åtgärd';
$string['addingnewcustomfield'] = 'Lägger till ny(tt) {$a}';
$string['addnewcategory'] = 'Ny kategori';
$string['afterfield'] = 'Efter fältet {$a}';
$string['categorynotfound'] = 'Hittade inte kategorin';
$string['checked'] = 'Markerad';
$string['commonsettings'] = 'Allmänt';
$string['componentsettings'] = 'Komponentinställningar';
$string['confirmdeletecategory'] = 'Vill du ta bort den här kategorin? Alla fält inne i kategorin kommer också att tas bort tillsammans med alla data som är associerad med dem. Den här åtgärden kan inte ångras.';
$string['confirmdeletefield'] = 'Vill du ta bort det här fältet och alla tillhörande data? Den här åtgärden kan inte ångras.';
$string['createnewcustomfield'] = 'Nytt anpassat fält';
$string['customfield'] = 'Anpassat fält';
$string['customfielddata'] = 'Data för anpassat fält';
$string['customfields'] = 'Anpassade fält';
$string['defaultvalue'] = 'Standardvärde';
$string['description'] = 'Beskrivning';
$string['description_help'] = 'Beskrivningen visas nedanför fältet i formuläret.';
$string['edit'] = 'Redigera';
$string['editcategoryname'] = 'Redigera kategorinamn';
$string['editingfield'] = 'Uppdaterar {$a}';
$string['errorfieldtypenotfound'] = 'Fälttypen {$a} kunde inte hittas';
$string['erroruniquevalues'] = 'Detta värde används redan.';
$string['eventcategorycreated'] = 'Kategori för anpassat fält skapad';
$string['eventcategorydeleted'] = 'Kategori för anpassat fält borttagen';
$string['eventcategoryupdated'] = 'Kategori för anpassat fält uppdaterad';
$string['eventfieldcreated'] = 'Anpassat fält skapat';
$string['eventfielddeleted'] = 'Anpassat fält borttaget';
$string['eventfieldupdated'] = 'Anpassat fält uppdaterat';
$string['fieldname'] = 'Namn';
$string['fieldnotfound'] = 'Fältet kunde inte hittas';
$string['fieldshortname'] = 'Kortnamn';
$string['formfieldcheckshortname'] = 'Kortnamnet finns redan';
$string['invalidshortnameerror'] = 'Kortnamnet får enbart innehålla alfanumeriska gemener och understreck (_).';
$string['isdataunique'] = 'Unikt värde';
$string['isdataunique_help'] = 'Denna inställning anger om det inmatade värdet måste vara unikt och inte förekommande sedan tidigare.';
$string['isfieldrequired'] = 'Obligatoriskt';
$string['isfieldrequired_help'] = 'Ett obligatoriskt fält är ett fält som behöver vara ifyllt innan formuläret sparas.';
$string['link'] = 'Länk';
$string['linktarget'] = 'Målsida för länk';
$string['modify'] = 'Ändra';
$string['movecategory'] = 'Flytta ”{$a}”';
$string['movefield'] = 'Flytta ”{$a}”';
$string['no'] = 'Nej';
$string['nocategories'] = 'Det finns inga anpassade fält och kategorier.';
$string['nopermissionconfigure'] = 'Du saknar behörighet att konfigurera fält här.';
$string['notchecked'] = 'Ej markerad';
$string['otherfields'] = 'Övriga fält';
$string['otherfieldsn'] = 'Övriga fält {$a}';
$string['privacy:metadata:customfield_data'] = 'Representerar data i ett anpassat fält sparad i en kontext';
$string['privacy:metadata:customfield_data:charvalue'] = 'Datavärde när det är ett tecken';
$string['privacy:metadata:customfield_data:contextid'] = 'ID för den kontext där data sparades';
$string['privacy:metadata:customfield_data:decvalue'] = 'Datavärde när det är ett decimaltal';
$string['privacy:metadata:customfield_data:fieldid'] = 'Fältets definitions-ID';
$string['privacy:metadata:customfield_data:instanceid'] = 'Instans-ID relaterad till data';
$string['privacy:metadata:customfield_data:intvalue'] = 'Datavärde när det heltal';
$string['privacy:metadata:customfield_data:shortcharvalue'] = 'Datavärde när det är ett ”short”-värde';
$string['privacy:metadata:customfield_data:timecreated'] = 'Tidpunkt få data skapades';
$string['privacy:metadata:customfield_data:timemodified'] = 'Tidpunkt för senaste ändringen av data';
$string['privacy:metadata:customfield_data:value'] = 'Datavärde när det är en text';
$string['privacy:metadata:customfield_data:valueformat'] = 'Värdets format då det är en text';
$string['privacy:metadata:customfieldpluginsummary'] = 'Fält för diverse komponenter';
$string['privacy:metadata:filepurpose'] = 'Fil som är bifogad till det anpassade fältets data';
$string['shortname'] = 'Kortnamn';
$string['shortname_help'] = 'Kortnamnet får enbart innehålla alfanumeriska gemener och understreck (_). Det visas inte någonstans på webbplatsen, men det kan användas för synkronisering med externa system och webbtjänster.';
$string['showdate'] = 'Visa datum';
$string['specificsettings'] = 'Specifika inställningar';
$string['therearenofields'] = 'Det finns inga fält i denna kategori';
$string['totopofcategory'] = 'Överst i kategorin {$a}';
$string['type'] = 'Typ';
$string['unknownhandler'] = 'Kunde inte hitta hanterare för anpassat fält för komponenten {$a->component} och area {$a->area}.';
$string['yes'] = 'Ja';
