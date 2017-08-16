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
 * Strings for component 'tool_filetypes', language 'nl', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_filetypes
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Voeg een nieuw bestandstype toe';
$string['corestring'] = 'Alternatieve taalstring.';
$string['corestring_help'] = 'Deze instelling kan gebruikt worden om een andere taalstring te kiezen uit het mimetypes.php-bestand. Normaal moet dit leeg gelaten worden. Gebruik voor aangepaste types het beschrijvingsveld.';
$string['defaulticon'] = 'Standaard icoontje voor MIME-type';
$string['defaulticon_help'] = 'Er zijn meerdere bestands-extenties met hetzelfde MIME-type. Selecteer deze optie voor één van de extenties zodat dit icoontje gebruikt zal worden bij het bepalen van het icoon van het MIME-type';
$string['deletea'] = 'Verwijder {$a}';
$string['delete_confirmation'] = 'Weet je zeker dat je  <strong>.{$a}</strong> wil verwijderen?';
$string['deletefiletypes'] = 'Verwijder een bestandstype';
$string['description'] = 'Aangepaste beschrijving';
$string['description_help'] = 'Eenvoudige beschrijving van het bestandstype, vb &lsquo;Kindle ebook&rsquo;. Als je site meerdere talen ondersteund en de multi-languagefilter gebruikt, dan kun je multi-lang-tags in dit veld gebruiken om een beschrijving in verschillende talen te voorzien.';
$string['descriptiontype'] = 'Beschrijvingstype';
$string['descriptiontype_custom'] = 'Aangepaste beschrijving, gespecificeerd in dit formulier';
$string['descriptiontype_default'] = 'Standaard (MIME-type of overeenkomstige taalstring indien beschikbaar)';
$string['descriptiontype_help'] = 'Er zijn drie mogelijke manieren om een beschrijving te specificeren:

* Standaardgedrag gebruikt het MIME-type. Als er een taalstring in mimetypes.php overeenkomt met dat MIME-type, dan zal dat gebruikt worden; anders wordt het MIME-type zelf aan de gebruikers getoond.
* Je kunt een aangepaste beschrijving geven in dit formulier.
* Je kunt de naam van een taalstring in mimetypes.php geven om te gebruiken in plaats van het MIME-type.';
$string['descriptiontype_lang'] = 'Alternatieve taalstring (van mimetypes.php)';
$string['displaydescription'] = 'Beschrijving';
$string['editfiletypes'] = 'Bewerk een bestaand bestandstype';
$string['emptylist'] = 'Er zijn geen bestandstypes gedefinieerd.';
$string['error_addentry'] = 'De extentie van het bestandstype, de beschrijving, het MIME-type en het icoon mogen geen nieuw regel en punt-komma-tekens bevatten.';
$string['error_defaulticon'] = 'Een andere bestandsextentie met hetzelfde MIME-type is al aangeduid als het standaard-icoon.';
$string['error_extension'] = 'De bestandstype-extentie &lsquo;Kindle ebook&rsquo;. bestaat al of is niet geldig. Bestandsextenties moeten uniek zijn en mogen geen speciale tekens bevatten.';
$string['error_notfound'] = 'Het bestandstype met extentie  {$a} kan niet gevonden worden.';
$string['extension'] = 'Extentie';
$string['extension_help'] = 'Bestandsnaamextentie zonder punt, vb &lsquo;mobi&rsquo;';
$string['groups'] = 'Type groepen';
$string['groups_help'] = 'Optionele lijst met bestandstypegroepen waartoe dit type behoort. Deze zijn algemene categorieën zoals&lsquo;document&rsquo; en &lsquo;afbeelding&rsquo;.';
$string['icon'] = 'Bestandsicoon';
$string['icon_help'] = 'Icoon bestandsnaam.

De lijst met icoontjes is genomen uit de map /pix/f van je Moodle-installatie. Je kunt aangepaste icoontjes toevoegen in die map indien nodig.';
$string['mimetype'] = 'MIME-type';
$string['mimetype_help'] = 'Het MEME-type geassocieerd met dit bestandstype, vb. &lsquo;application/x-mobipocket-ebook&rsquo;';
$string['pluginname'] = 'Bestandstypes';
$string['revert'] = 'Zet {$a} terug op Moodle-standaarden';
$string['revert_confirmation'] = 'Weet je zeker dat je <strong>.{$a}</strong> terug naar Moodle-standaarden wil terugzetten en je eigen wijzigingen verwerpen?';
$string['revertfiletype'] = 'Zet een bestandstype terug';
$string['source'] = 'Type';
$string['source_custom'] = 'Aangepast';
$string['source_deleted'] = 'Verwijderd';
$string['source_modified'] = 'Gewijzigd';
$string['source_standard'] = 'Standaard';
