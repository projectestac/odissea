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
 * Strings for component 'tool_filetypes', language 'lt', version '4.5'.
 *
 * @package     tool_filetypes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Pridėti naują failo tipą';
$string['corestring'] = 'Alternatyvi kalbos eilutė';
$string['corestring_help'] = 'Šį nustatymą galima naudoti norint pasirinkti kitą kalbos eilutę iš pagrindinio mimetypes.php kalbos failo. Paprastai jis turėtų būti paliktas tuščias. Pasirinktiniams tipams naudokite aprašymo lauką.';
$string['defaulticon'] = 'Numatytoji MIME tipo piktograma';
$string['defaulticon_help'] = 'Jei yra keli failų plėtiniai su tuo pačiu MIME tipu, pasirinkite šią parinktį vienam iš plėtinių, kad jo piktograma būtų naudojama nustatant piktogramą iš MIME tipo.';
$string['delete_confirmation'] = 'Ar esate visiškai tikras, kad norite pašalinti <strong>.{$a}</strong>?';
$string['deletea'] = 'Panaikinti {$a}';
$string['deletefiletypes'] = 'Panaikinti failo tipą';
$string['description'] = 'Pasirinktinis aprašymas';
$string['description_help'] = 'Paprastas failo tipo aprašymas, pvz. „Kindle ebook“. Jei jūsų svetainė palaiko kelias kalbas ir naudoja kelių kalbų filtrą, šiame lauke galite įvesti kelių kalbų žymas, kad pateiktumėte aprašą skirtingomis kalbomis.';
$string['descriptiontype'] = 'Aprašymo tipas';
$string['descriptiontype_custom'] = 'Šioje formoje nurodytas tinkintas aprašymas';
$string['descriptiontype_default'] = 'Numatytasis (MIME tipas arba atitinkamos kalbos eilutė, jei yra)';
$string['descriptiontype_help'] = 'Yra trys galimi aprašymo nurodymo būdai.

* Numatytoji veikla naudoja MIME tipą. Jei mimetypes.php yra kalbos eilutė, atitinkanti tą MIME tipą, ji bus naudojama; kitu atveju naudotojams bus rodomas pats MIME tipas.
* Šioje formoje galite nurodyti individualų aprašymą.
* Galite nurodyti mimetypes.php kalbos eilutės pavadinimą, kurį naudosite vietoj MIME tipo.';
$string['descriptiontype_lang'] = 'Alternatyvios kalbos eilutė (iš mimetypes.php)';
$string['displaydescription'] = 'Aprašymas';
$string['editfiletypes'] = 'Redaguoti egzistuojantį failo tipą';
$string['emptylist'] = 'Nėra apibrėžtų failo tipų.';
$string['error_addentry'] = 'Failo tipo plėtinyje, apraše, MIME tipe ir piktogramoje negali būti eilutės tiekimo ir kabliataškio simbolių.';
$string['error_defaulticon'] = 'Kitas failo plėtinys su tuo pačiu MIME tipu jau pažymėtas kaip numatytoji piktograma.';
$string['error_extension'] = 'Failo tipo plėtinys <strong>{$a}</strong> jau yra arba netinkamas. Failų plėtiniai turi būti unikalūs ir juose neturi būti specialiųjų simbolių.';
$string['error_notfound'] = 'The file type with extension {$a} cannot be found.';
$string['extension'] = 'Plėtinys';
$string['extension_help'] = 'Failo vardo plėtinys be taško, pvz. "mobi"';
$string['groups'] = 'Tipų grupės';
$string['groups_help'] = 'Failų tipų grupių, kurioms šis tipas priklauso, pasirenkamas sąrašas. Tai bendros kategorijos, pvz., „dokumentas“ ir „paveikslėlis“.';
$string['icon'] = 'Failo ikona';
$string['icon_help'] = 'Piktogramos failo pavadinimas.

Piktogramų sąrašas paimtas iš /pix/f katalogo jūsų Moodle diegimo viduje. Jei reikia, prie šio aplanko galite pridėti pasirinktinių piktogramų.';
$string['mimetype'] = 'MIME tipas';
$string['mimetype_help'] = 'MIME tipas, susietas su šiuo failo tipu, pvz. „application/x-mobipocket-ebook“';
$string['pluginname'] = 'Failo tipas';
$string['privacy:metadata'] = 'Failo tipo papildinys nesaugo jokių asmeninių duomenų.';
$string['revert'] = 'Atkurti {$a} į Moodle numatytuosius nustatymus';
$string['revert_confirmation'] = 'Ar tikrai norite atkurti <strong>.{$a}</strong> numatytuosius Moodle nustatymus ir atmesti pakeitimus?';
$string['revertfiletype'] = 'Atkurti failo tipą';
$string['source'] = 'Tipas';
$string['source_custom'] = 'Pasirinktinis';
$string['source_deleted'] = 'Panaikintas';
$string['source_modified'] = 'Pakeistas';
$string['source_standard'] = 'Standartinis';
