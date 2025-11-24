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
 * Strings for component 'mlbackend_python', language 'lt', version '4.5'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'Serverio konfigūracija nebaigta.';
$string['errorserver'] = 'Serverio klaida {$a}';
$string['host'] = 'Priegloba';
$string['hostdesc'] = 'Priegloba';
$string['packageinstalledshouldbe'] = 'Moodlemlbackend Python paketas turėtų būti atnaujintas. Reikiama versija yra „{$a->required}“, o įdiegta versija yra „{$a->installed}“.';
$string['packageinstalledtoohigh'] = 'Moodlemlbackend Python paketas nesuderinamas su šia Moodle versija. Būtina versija yra „{$a->required}“ arba naujesnė, jei ji suderinama su API. Įdiegta versija „{$a->installed}“ yra per aukšta.';
$string['password'] = 'Slaptažodis';
$string['passworddesc'] = 'Simbolių eilutė, naudojama kaip slaptažodis palaikyti ryšį tarp Moodle serverio ir Python serverio.';
$string['pluginname'] = 'Python mašininio mokymosi foninė programa';
$string['port'] = 'Portas';
$string['portdesc'] = 'Portas';
$string['privacy:metadata'] = 'Python mašininio mokymosi foninis papildinys nesaugo jokių asmeninių duomenų.';
$string['pythonpackagenotinstalled'] = 'Moodlemlbackend Python paketas neįdiegtas arba su juo yra problemų. Norėdami gauti daugiau informacijos, komandų eilutės sąsajoje paleiskite „{$a}“.';
$string['pythonpathnotdefined'] = 'Kelias į jūsų vykdomąjį Python dvejetainį failą neapibrėžtas. Norėdami jį nustatyti, apsilankykite „{$a}“.';
$string['secure'] = 'Naudoti HTTPS';
$string['securedesc'] = 'Ar naudoti HTTP ar HTTPS.';
$string['serversettingsinfo'] = 'Jei įjungta „Naudoti serverį“, bus rodomi serverio nustatymai.';
$string['tensorboardinfo'] = 'Paleiskite TensorBoard iš komandinės eilutės, žiniatinklio serveryje įvesdami tensorboard --logdir=\'{$a}\'.';
$string['username'] = 'Naudotojo vardas';
$string['usernamedesc'] = 'Simbolių eilutė, naudojama kaip naudotojo vardas palaikyti ryšį tarp Moodle serverio ir Python serverio.';
$string['useserver'] = 'Naudoti serverį';
$string['useserverdesc'] = 'Mašininio mokymosi „Python“ paketas įdiegtas ne interneto serveryje, o kitame serveryje.';
