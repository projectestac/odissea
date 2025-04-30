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
 * Strings for component 'qtype_calculatedmulti', language 'ro', version '4.4'.
 *
 * @package     qtype_calculatedmulti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answeroptions'] = 'Opțiuni';
$string['answeroptions_help'] = 'Formula de alegere sugerată este  ...<strong>{={x}+..}</strong>...';
$string['pluginname'] = 'Întrebare de tip calculat cu alegere multiplă';
$string['pluginname_help'] = 'Întrebările calculate cu variante multiple de răspuns sunt ca întrebările obișnuite de acest tip dar care însă pot conține variante de răspuns cu formule numerice care folosesc metacaractere în acolade. Metacaracterle pot fi înlocuite cu valori individuale atunci când testul va fi parcurs. De exemplu, dacă întrebarea este "Care este aria unui dreptunghi de lungime (lung) şi lăţime (lat)?" atunci una din variante va fi {= {lung} * {lat}}  (unde * denotă multiplicare).';
$string['pluginname_link'] = 'question/type/calculatedmulti';
$string['pluginnameadding'] = 'Adaugă întrebare de tip calculat cu alegere multiplă';
$string['pluginnameediting'] = 'Editare întrebare de tip calculat cu alegere multiplă';
$string['pluginnamesummary'] = 'Întrebările de tip calculat cu alegere multiplă sunt ca întrebările cu alegere multiplă, ale căror elemente de alegere pot include rezultatele formulei din valorile numerice care sunt selectate aleatoriu dintr-un set atunci când testul este parcurs.';
$string['privacy:metadata'] = 'Întrebare de tip calculat cu alegere multiplă nu stochează date personale.';
