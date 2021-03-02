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
 * Strings for component 'condition', language 'sv', version '3.8'.
 *
 * @package     condition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'Lägg till {no} villkor för aktivitet i formuläret';
$string['addgrades'] = 'Lägg till {no} villkor för betyg i formuläret';
$string['adduserfields'] = 'Lägg till {no} användarfältvillkor formuläret';
$string['availabilityconditions'] = 'Begränsa tillgänglighet';
$string['availablefrom'] = 'Tillgänglig fr o m';
$string['availablefrom_help'] = 'Tillgänglighetsdatum anger när kursdeltagaren kan komma åt aktiviteten. Skillnaden mellan denna inställning och aktivitetens vanliga tillgänglighetsinställningar är att denna inställning helt förhindrar tillgång till aktiviteten, medan de vanliga inställningarna låter kursdeltagaren gå in och titta på aktiviteten.';
$string['availableuntil'] = 'Tillgänglig t o m';
$string['badavailabledates'] = 'Ogiltiga datum. Om du anger både start- och slutdatum, ska startdatumet ligga före slutdatumet.';
$string['badgradelimits'] = 'Om du anger både övre och undre betygsgränser måste den övre vara högre än den undre.';
$string['completion_complete'] = 'måste vara markerad som slutförd';
$string['completion_fail'] = 'måste vara slutförd och <strong>underkänd</strong>';
$string['completion_incomplete'] = 'får inte vara markerad som slutförd';
$string['completion_pass'] = 'måste vara slutförd och godkänd';
$string['completioncondition'] = 'Villkor för slutförande av aktivitet';
$string['completioncondition_help'] = 'Denna inställning avgör det/de villkor som som ska uppfyllas för att kursdeltagare ska komma åt aktiviteten.
Observera att Aktivitetsmarkering först måst aktiveras i kursens inställningar innan dessa villkor kan anges.
Multipla villkor kan anges, och om så görs måste alla dessa vara uppfyllda innan aktiviteten kan genomföras.';
$string['completionconditionsection'] = 'Villkor för slutförande av aktivitet';
$string['configenableavailability'] = 'När denna är aktiverad kan du ange villkor (ex vis datum, resultat eller slutförande) som styr åtkomsten till aktiviteten.';
$string['contains'] = 'innehåller';
$string['doesnotcontain'] = 'innehåller inte';
$string['enableavailability'] = 'Aktivera villkorad tillgänglighet';
$string['endswith'] = 'slutar med';
$string['grade_atleast'] = 'måste vara åtminstone';
$string['grade_upto'] = 'och mindre än';
$string['gradecondition'] = 'Villkor för betyg';
$string['gradecondition_help'] = 'Denna inställning avgör vilket resultat som måste uppnås för att kursdeltagaren ska komma åt aktiviteten. Flera olika villkor kan sättas om så önskas, och då kommer kursdeltagaren åt aktiviteten först då samtliga villkor är uppfyllda.';
$string['gradeconditionsection'] = 'Villkor för betyg';
$string['gradeitembutnolimits'] = 'Du måste ange en övre eller undre gräns, eller både och.';
$string['gradelimitsbutnoitem'] = 'Du måste välja ett betygsobjekt';
$string['gradesmustbenumeric'] = 'Lägsta och högsta betyg måste vara numeriskt  (eller tomt).';
$string['groupingnoaccess'] = 'Du tillhör inte en grupp som har tillgång till detta avsnitt.';
$string['isempty'] = 'är tom';
$string['isequalto'] = 'är lika med';
$string['isnotempty'] = 'är inte tom';
$string['none'] = '(inga)';
$string['notavailableyet'] = 'Inte tillgänglig ännu';
$string['requires_completion_0'] = 'Tillgänglig om aktiviteten <strong>{$a}</strong> inte är slutförd.';
$string['requires_completion_1'] = 'Ej tillgänglig innan aktiviteten  <strong>{$a}</strong> är markerad som slutförd.';
$string['requires_completion_2'] = 'Ej tillgänglig innan aktiviteten <strong>{$a}</strong> är genomförd och godkänd.';
$string['requires_completion_3'] = 'Bara tillgänglig om aktiviteten <strong>{$a}</strong> är genomförd och underkänd.';
$string['requires_date'] = 'Tillgänglig från {$a}.';
$string['requires_date_before'] = 'Tillgänglig till {$a}.';
$string['requires_date_both'] = 'Tillgänglig från {$a->from} till {$a->until}.';
$string['requires_date_both_single_day'] = 'Tillgänglig på {$a}.';
$string['requires_grade_any'] = 'Bara tillgänglig då du har ett resultat för <strong>{$a}</strong>.';
$string['requires_grade_max'] = 'Bara tillgänglig när du har uppnått tillräckligt resultat i <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'Bara tillgänglig när du har uppnått begärt resultat i <strong>{$a}</strong>.';
$string['requires_grade_range'] = 'Bara tillgänglig när du har uppnått ett specifikt resultat i <strong>{$a}</strong>.';
$string['requires_grouping'] = 'Endast tillgängligt för gruppindelningen  <strong>{$a}</strong>.';
$string['requires_user_field_contains'] = 'Endast tillgängligt om  <strong>{$a->field}</strong> Innehåller <strong>{$a->value}</strong>.';
$string['requires_user_field_doesnotcontain'] = 'Ej tillgängligt om  <strong>{$a->field}</strong> Innehåller <strong>{$a->value}</strong>.';
$string['requires_user_field_endswith'] = 'Endast tillgängligt om  <strong>{$a->field}</strong> slutar med <strong>{$a->value}</strong>.';
$string['requires_user_field_isempty'] = 'Endast tillgängligt om  <strong>{$a->field}</strong> är tomt.';
$string['requires_user_field_isequalto'] = 'Endast tillgängligt om  <strong>{$a->field}</strong> är lika med <strong>{$a->value}</strong>.';
$string['requires_user_field_isnotempty'] = 'Ej tillgängligt om  <strong>{$a->field}</strong> är tomt.';
$string['requires_user_field_startswith'] = 'Endast tillgängligt om  <strong>{$a->field}</strong> börjar med <strong>{$a->value}</strong>.';
$string['showavailability'] = 'Medan tillgången är förhindrad';
$string['showavailability_hide'] = 'Dölj denna aktivitet helt och hållet';
$string['showavailability_show'] = 'Visa aktiviteten som grå tillsammans, med information om åtkomstvillkor.';
$string['showavailabilitysection'] = 'Innan avsnittet kan nås';
$string['showavailabilitysection_hide'] = 'Dölj avsnittet helt';
$string['showavailabilitysection_show'] = 'Visa avsnittet som grått tillsammans med information om åtkomstvillkor.';
$string['startswith'] = 'inleds med';
$string['userfield'] = 'Användarfält';
$string['userrestriction_hidden'] = 'Begränsat (helt dold, gömd, inget meddelande): ‘{$a}’';
$string['userrestriction_visible'] = 'Begränsad tillgång: {$a}';
