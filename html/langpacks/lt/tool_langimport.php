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
 * Strings for component 'tool_langimport', language 'lt', version '4.5'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Nepavyko prisijungti prie atsisiuntimo serverio. Automatiškai įdiegti ar atnaujinti kalbos paketų neįmanoma. Atsisiųskite atitinkamą (-us) ZIP failą (-us) iš <a href="{$a->src}">{$a->src}</a> ir rankiniu būdu išpakuokite juos į duomenų katalogą <code>{$a- >dest}</code>';
$string['install'] = 'Diegti pasirinktą kalbos paketą';
$string['installedlangs'] = 'Įdiegti kalbų paketai';
$string['installfailed'] = 'Kalbos paketų diegimas nepavyko!';
$string['installfinished'] = 'Kalbos paketų diegimas baigtas.';
$string['installpending'] = 'Netrukus bus įdiegti šie kalbų paketai: {$a}.';
$string['installscheduled'] = 'Kalbų paketai suplanuoti įdiegti.';
$string['langimport'] = 'Kalbos importavimo įrankis';
$string['langimportdisabled'] = 'Kalbos importavimas buvo išjungtas. Jūs turi atnaujinti juos rankiniu būdu failų sistemos lygyje. Nepamirškite išvalyti eilučių talpyklos po atnaujinimo.';
$string['langpackinstalled'] = 'Kalbos paketas "{$a}" buvo sėkmingai įdiegtas';
$string['langpackinstalledevent'] = 'Kalbos paketas įdiegtas';
$string['langpacknotremoved'] = 'Įvyko klaida; kalbos paketas „{$a}“ nėra visiškai pašalintas. Patikrinkite failo leidimus.';
$string['langpackremoved'] = 'Kalbos paketas "{$a}" buvo ištrintas';
$string['langpackremovedevent'] = 'Kalbos paketas išinstaliuotas';
$string['langpackupdated'] = 'Kalbos paketas \'{$a}\' buvo sėkmingai atnaujintas';
$string['langpackupdatedevent'] = 'Kalbos paketas atnaujintas';
$string['langpackupdateskipped'] = 'Kalbos "{$a}" atnaujinimas buvo praleistas';
$string['langpackuptodate'] = 'Kalbos paketas "{$a}" yra atnaujintas';
$string['langunsupported'] = '<p>Panašu, kad jūsų serveris visiškai nepalaiko šių kalbų:</p><ul>{$a->missinglocales}</ul><p>Vietoj to, visuotinė lokalė ({$a->globallocale}) bus naudojami tam tikroms eilutėms, pvz., datoms ar skaičiams, formatuoti.</p>';
$string['langupdatecomplete'] = 'Kalbos paketo atnaujinimas yra baigtas';
$string['missingcfglangotherroot'] = 'Praleista konfigūracijos reikšmė $CFG->langotherroot';
$string['missinglangparent'] = 'Praleista tėvinė kalba <em>{$a->parent}</em> of <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'Anglų kalbos paketas negali būti išinstaliuotas.';
$string['noenglishuninstalltitle'] = 'Negalima išdiegti';
$string['nolangupdateneeded'] = 'Visi jūsų kalbų paketai yra atnaujinti, naujinimo nereikia';
$string['pluginname'] = 'Kalbos paketai';
$string['privacy:metadata'] = 'Kalbos paketų papildinys nesaugo jokių asmeninių duomenų.';
$string['purgestringcaches'] = 'Išvalyti kalbų talpyklas';
$string['search'] = 'Ieškoti galimų kalbų paketų';
$string['selectlangs'] = 'Pasirinkti kalbas išinstaliavimui';
$string['uninstall'] = 'Išinstaliuoti pasirinktą(us) kalbos paketą(us)';
$string['uninstallconfirm'] = 'Jūs ketinate visiškai pašalinti šiuos kalbų paketus: <strong>{$a}</strong>. Ar Jūs tuo tikras?';
$string['updatelangs'] = 'Atnaujinti visus įdiegtus kalbų paketus';
$string['updatelangsnote'] = 'Visų įdiegtų kalbų paketų atnaujinimas spustelėjus mygtuką gali užtrukti ilgai ir baigtis skirtuoju laiku. Vietoj to rekomenduojama naudoti suplanuotą užduotį „{$a->taskname}“ (kuri pagal numatytuosius nustatymus vykdoma kiekvieną dieną).';
