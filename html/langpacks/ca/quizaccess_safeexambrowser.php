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
 * Strings for component 'quizaccess_safeexambrowser', language 'ca', version '3.11'.
 *
 * @package     quizaccess_safeexambrowser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedbrowserkeys'] = 'Claus de navegador permeses';
$string['allowedbrowserkeys_help'] = 'En aquest quadre podeu introduir les claus de navegador permeses del navegador d\'exàmens (Safe Exam Browser) que estan autoritzades a accedir a aquest qüestionari. Si no s\'introdueix cap clau, aleshores no es requereix SEB per a aquest qüestionari.';
$string['allowedbrowserkeysdistinct'] = 'Totes les claus han de ser diferents.';
$string['allowedbrowserkeyssyntax'] = 'Heu d\'introduir les claus permeses; una per línia. Convé que una clau sigui una cadena hexadecimal de 64 caràcters.';
$string['allowedkeys_adv'] = 'Les claus són un paràmetre avançat';
$string['allowedkeys_adv_desc'] = 'Si aquesta opció està activada, la llista de claus de navegador permeses és un camp avançat al formulari de configuració del qüestionari.';
$string['safebrowserdownloadurl'] = 'URL de baixada del navegador d\'exàmens (Safe Exam Browser)';
$string['safebrowserdownloadurl_desc'] = 'Si proporcioneu un URL aquí, aleshores es dirà als usuaris que poden descarregar aquí la versió requerida del navegador d\'exàmens (Safe Exam Browser).';
$string['safebrowsermustbeused'] = 'Heu d\'utilitzar una versió aprovada de navegador d\'exàmens (Safe Exam Browser) per contestar aquest qüestionari.';
$string['safebrowsermustbeusedwithlink'] = 'Heu d\'utilitzar una versió aprovada de navegador d\'exàmens (Safe Exam Browser) per contestar aquest qüestionari. Es pot descarregar de l\'enllaç següent: {$a->link}.';
$string['safeexambrowser:exemptfromcheck'] = 'Exempt de verificació del navegador d\'examen (Safe Exam Browser)';
