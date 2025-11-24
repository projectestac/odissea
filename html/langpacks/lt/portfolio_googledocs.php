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
 * Strings for component 'portfolio_googledocs', language 'lt', version '4.5'.
 *
 * @package     portfolio_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Kliento ID';
$string['noauthtoken'] = 'Iš „Google“ negautas autentifikavimo ženklas. Užtikrinkite, kad „Moodle“ leidžiama pasiekti jūsų „Google“ paskyrą.';
$string['nooauthcredentials'] = 'Reikalingi OAuth kredencialai.';
$string['nooauthcredentials_help'] = 'Norėdami naudoti „Google“ disko portfelio papildinį, aplanko nustatymuose turite sukonfigūruoti „OAuth“ kredencialus.';
$string['nosessiontoken'] = 'Nėra seanso atpažinimo ženklo, todėl negalima eksportuoti į „Google“.';
$string['oauthinfo'] = '<p>Jei norite naudoti šį papildinį, turite užregistruoti savo svetainę „Google“, kaip aprašyta dokumentacijoje <a href="{$a->docsurl}">„Google OAuth 2.0“ sąranka</a>.</p><p >Kaip registracijos proceso dalį turėsite įvesti šį URL kaip „Autorizuotus peradresavimo URI“:</p><p>{$a->callbackurl}</p><p>Užsiregistravę būsite pateikiamas su kliento ID ir paslaptimi, kuriuos galima naudoti konfigūruojant visus „Google“ disko papildinius.</p>';
$string['pluginname'] = '„Google“ dokumentai';
$string['privacy:metadata'] = 'Šis papildinys siunčia duomenis iš išorės į susietą „Google“ paskyrą. Jis nesaugo duomenų vietoje.';
$string['privacy:metadata:data'] = 'Asmens duomenys, perduoti iš portfelio posistemio.';
$string['secret'] = 'Paslaptis';
$string['sendfailed'] = 'Nepavyko perduoti failo {$a} į „Google“';
