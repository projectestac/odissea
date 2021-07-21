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
 * Strings for component 'block_dedication', language 'ca', version '3.11'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_button'] = 'Eina de dedicació';
$string['access_info'] = 'Només per als professors:';
$string['connectionratiorow'] = 'Connexions per dia';
$string['dedication:addinstance'] = 'Permet d\'addició del bloc de dedicació del curs';
$string['dedication:use'] = 'Permet l\'ús de la dedicació del curs';
$string['dedication_estimation'] = 'La vostra dedicació estimada és';
$string['dedicationall'] = 'Dedicació de tots els membres del curs. Feu clic en qualsevol nom per veure la dedicació detallada d\'aquest.';
$string['dedicationgroup'] = 'Dedicació dels membres del grup <em>{$a}</em>. Trieu qualsevol membres per veure\'n la seva dedicació detallada.';
$string['dedicationrow'] = 'Dedicació del curs';
$string['form'] = 'Configuració de la dedicació del curs';
$string['form_help'] = 'El temps s\'estima amb el concepte de la durada de la Sessió d\'acord amb les entrades del registre.

<strong>Clic:</strong> Cada vegada que un usuari accedeix a una pàgina de Moodle es desa en el registre.

<strong>Sessió:</strong> interval de dos o més clics consecutius en els quals el temps entre cada parell de clics no excedeix el temps màxim establert.

<strong>Durada de la sessió:</strong> interval de temps entre el primer i el darrer clic d\'una sessió.

<strong>Temps de dedicació:</strong> la suma de la durada de totes les sessions d\'un usuari.';
$string['form_text'] = 'Trieu l\'interval de dates i el temps màxim entre clics d\'una mateixa sessió.';
$string['limit'] = 'Límit entre clics (en minuts)';
$string['limit_help'] = 'El límit entre clics defineix si dos clics són part d\'una mateixa sessió o no';
$string['maxtime'] = 'Fi del període';
$string['maxtime_help'] = 'Considera només entrades del registre abans d\'aquesta data';
$string['meandedication'] = '<strong>Dedicació mitjana:</strong> {$a}';
$string['mintime'] = 'Inici del període';
$string['mintime_help'] = 'Considera només entrades del registre després d\'aquesta data';
$string['pagetitle'] = '{$a}: dedicació del curs';
$string['period'] = 'Període des de <em>{$a->mintime}</em> a <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Elapsed time:</strong>  {$a}';
$string['perioddiffrow'] = 'Temps transcorregut';
$string['pluginname'] = 'Dedicació del curs';
$string['sessionduration'] = 'Durada';
$string['sessionstart'] = 'Inici de la sessió';
$string['show_dedication'] = 'Mostra la dedicació del temps dels estudiants';
$string['show_dedication_help'] = 'Per defecte, el temps dedicat només pot ser vist pels professors. Aquest paràmetre permet als estudiants veure la seva dedicació del curs en un bloc.';
$string['sincerow'] = 'Des de';
$string['submit'] = 'Calcula';
$string['torow'] = 'A';
$string['totaldedication'] = '<strong>Dedicació total:</strong> {$a}';
$string['userdedication'] = 'Dedicació detallada del curs de <em>{$a}</em>.';
