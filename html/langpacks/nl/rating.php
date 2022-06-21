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
 * Strings for component 'rating', language 'nl', version '3.11'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Gemiddelde van de beoordelingen';
$string['aggregatecount'] = 'Aantal beoordelingen';
$string['aggregatemax'] = 'Maximum beoordeling';
$string['aggregatemin'] = 'Minimumbeoordeling';
$string['aggregatenone'] = 'Geen beoordelingen';
$string['aggregatesum'] = 'Som van beoordelingen';
$string['aggregatetype'] = 'Aggregatietype';
$string['aggregatetype_help'] = 'Het aggregatietype bepaalt hoe beoordelingen gecombineerd worden om tot het uiteindelijke cijfer in de cijferlijst te komen.

* Gemiddelde van de beoordelingen - Het gemiddelde van alle beoordelingen
* Het aantal beoordelingen - Het aantal beoordeelde items wordt het eindcijfer. Merk op dat het totaal aantal niet hoger kan zijn dan het maximumcijfer voor de activiteit.
* Maximum - De hoogst behaalde beoordeling wordt het eindcijfer.
* Minimum - De laagst behaalde beoordeling wordt het eindcijfer.

Indien "Geen beoordelingen" is geselecteerd, dan zal de activiteit niet in de cijferlijst verschijnen.';
$string['allowratings'] = 'Toelaten dat items beoordeeld worden?';
$string['allratingsforitem'] = 'Alle ingestuurde beoordelingen';
$string['capabilitychecknotavailable'] = 'Controle mogelijkheid niet beschikbaar tot de activiteit bewaard is';
$string['couldnotdeleteratings'] = 'Dit kan niet verwijderd worden omdat het al beoordeeld is';
$string['norate'] = 'Beoordelen van items niet toegelaten!';
$string['noratings'] = 'Geen beoordelingen ingestuurd';
$string['noviewanyrate'] = 'Je kan alleen de resultaten bekijken voor items die jij gemaakt hebt';
$string['noviewrate'] = 'Je hebt het recht niet om beoordelingen van items te bekijken';
$string['privacy:metadata:rating'] = 'De door de gebruiker ingevoerde beoordeling wordt samen met een koppeling naar het beoordeelde item bewaard.';
$string['privacy:metadata:rating:rating'] = 'De numerieke beoordeling die een gebruiker heeft ingevoerd.';
$string['privacy:metadata:rating:timecreated'] = 'Het tijdstip waarop de beoordeling eerst was gemaakt.';
$string['privacy:metadata:rating:timemodified'] = 'Het tijdstip waarop de beoordeling laatst was aangepast.';
$string['privacy:metadata:rating:userid'] = 'De gebruiker die de beoordeling gemaakt heeft.';
$string['rate'] = 'Beoordeel';
$string['ratepermissiondenied'] = 'Je hebt het recht niet om dit item te beoordelen';
$string['rating'] = 'Beoordeling';
$string['ratinginvalid'] = 'Beoordeling niet geldig';
$string['ratings'] = 'Beoordelingen';
$string['ratingtime'] = 'Beperk beoordelingen tot items met een datum in dit bereik:';
$string['rolewarning'] = 'Rollen met het recht om te beoordelen';
$string['rolewarning_help'] = 'Rollen met het recht om te beoordelen zijn rollen met de mogelijkheid moodle/rating:rate  en soms module specifieke mogelijkheden. Je kunt meerdere rollen rechten geven via de rechtenpagina.';
$string['scaleselectionrequired'] = 'Bij het selecteren van een beoordelingsaggregaat type moet je er ook voor kiezen om ofwel een schaal te gebruiken of om  een maximum aantal punten in te stellen.';
