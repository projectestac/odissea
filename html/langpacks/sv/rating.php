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
 * Strings for component 'rating', language 'sv', version '4.5'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Genomsnitt av betyg';
$string['aggregatecount'] = 'Antal betyg';
$string['aggregatemax'] = 'Högsta betyg';
$string['aggregatemin'] = 'Lägsta betyg';
$string['aggregatenone'] = 'Inga betyg';
$string['aggregatesum'] = 'Summa av betyg';
$string['aggregatetype'] = 'Typ av aggregation';
$string['aggregatetype_help'] = 'Aggregeringstypen definierar hur betyg kombineras för att bilda slutbetyget i betygsboken.

* Genomsnitt av betyg - Medelvärdet av alla betyg
* Antal betyg - Antalet betygssatta objekt blir slutresultatet. Observera att summan inte kan överstiga maxbetyget för aktiviteten.
* Maximum - Högsta betyg blir slutbetyget
* Minimum - Det minsta betyget blir slutbetyget
* Summa - Alla betyg läggs ihop. Observera att summan inte kan överstiga maxbetyget för aktiviteten.

Om "Inga betyg" är markerat visas inte aktiviteten i betygsboken.';
$string['allowratings'] = 'Tillåt att objekt betygsätts?';
$string['allratingsforitem'] = 'Alla inskickade betyg';
$string['capabilitychecknotavailable'] = 'Rolltillstånd kan inte visas innan aktiviteten sparats';
$string['couldnotdeleteratings'] = 'Tyvärr, det kan inte tas bort eftersom personer redan har betygsatt/gett omdömen om det.';
$string['norate'] = 'Betygsättning av objekt är inte tillåtet!';
$string['noratings'] = 'Det finns inga inskickade betyg';
$string['noviewanyrate'] = 'Du kan bara titta på resultaten för objekt som du har gjort';
$string['noviewrate'] = 'Du har inte funktionsbehörigheten som krävs att se betyg';
$string['privacy:metadata:rating'] = 'Det användarinmatade betyget lagras tillsammans med en mappning av objektet som har betygsatts.';
$string['privacy:metadata:rating:rating'] = 'Det numeriska betyget som användaren angav.';
$string['privacy:metadata:rating:timecreated'] = 'Den tid då betygsättningen först gjordes.';
$string['privacy:metadata:rating:timemodified'] = 'Den tid då betygsättningen senast uppdaterades.';
$string['privacy:metadata:rating:userid'] = 'Användaren som betygsatte.';
$string['rate'] = 'Betygssätt/avge omdömen';
$string['ratepermissiondenied'] = 'Du har inte behörighet att betygssätta/avge omdöme om det här';
$string['rating'] = 'Betyg';
$string['ratinginvalid'] = 'Betyget/omdömet är ogiltigt';
$string['ratings'] = 'Betyg';
$string['ratingtime'] = 'Begränsa betygsättning till inlägg gjorda inom följande period:';
$string['rolewarning'] = 'Roller som har behörighet att sätta betyg';
$string['rolewarning_help'] = 'För att skicka in betyg krävs funktionsbehörigheten  <code>moodle/rating:rate</code> samt alla modulspecifika funktionsbehörigheter. Användare som tilldelas följande roller bör kunna betygsätta objekt. Listan över roller kan ändras via behörighetslänken i åtgärdsmenyn eller administrationsblocket, beroende på temat.';
$string['scaleselectionrequired'] = 'När du väljer en betygsättnings-aggregattyp måste du också välja att använda antingen en skala eller ange en maxpoäng.';
