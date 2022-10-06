<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'gradingform_guide', language 'nl', branch 'MOODLE_38_STABLE'
 *
 * @package   gradingform_guide
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Voeg frequent gebruikte opmerking toe';
$string['addcriterion'] = 'Voeg criterium toe';
$string['additionalcomments'] = 'Bijkomende opmerkingen';
$string['additionalcommentsforcriterion'] = 'Aanvullende opmerkingen voor criterium, {$a}';
$string['alwaysshowdefinition'] = 'Toon de beoordelingshulp aan leerlingen';
$string['backtoediting'] = 'Terug naar bewerken';
$string['clicktocopy'] = 'Klik om deze tekst in het criterium feedback te kopiëren';
$string['clicktoedit'] = 'Klik om te bewerken';
$string['clicktoeditname'] = 'Klik om de naam van het criterium te bewerken';
$string['comment'] = 'Opmerking';
$string['commentpickerforcriterion'] = 'Veelgebruikte opmerkingenkiezer voor {$a} aanvullende opmerkingen';
$string['comments'] = 'Frequent gebruikte opmerkingen';
$string['commentsdelete'] = 'Verwijder opmerking';
$string['commentsempty'] = 'Klik om de opmerking te bewerken';
$string['commentsmovedown'] = 'Verplaats omlaag';
$string['commentsmoveup'] = 'Verplaats omhoog';
$string['confirmdeletecriterion'] = 'Weet je zeker dat je dit item wil verwijderen?';
$string['confirmdeletelevel'] = 'Weet je zeker dat je dit niveau wil verwijderen';
$string['criterion'] = 'Criteriumnaam';
$string['criteriondelete'] = 'Verwijder criterium';
$string['criterionempty'] = 'Klik om het criterium te bewerken';
$string['criterionmovedown'] = 'Verplaats omlaag';
$string['criterionmoveup'] = 'Verplaats omhoog';
$string['criterionname'] = 'Naam criterium';
$string['criterionremark'] = '{$a} criterium opmerking';
$string['definemarkingguide'] = 'Definieer beoordelingshulp';
$string['description'] = 'Beschrijving';
$string['descriptionmarkers'] = 'Beschrijving voor beoordelaars';
$string['descriptionstudents'] = 'Beschrijving voor leerlingen';
$string['err_maxscoreisnegative'] = 'De maximale score is niet geldig, negatieve waarden zijn niet toegestaan';
$string['err_maxscorenotnumeric'] = 'Criterium maximumscore moet numeriek zijn.';
$string['err_nocomment'] = 'Opmerking kan niet leeg zijn';
$string['err_nodescription'] = 'Leerlingbeschrijving kan niet leeg zijn';
$string['err_nodescriptionmarkers'] = 'Beoordelaarsbeschrijving kan niet leeg zijn';
$string['err_nomaxscore'] = 'Criterium maximumscore kan niet leeg zijn.';
$string['err_noshortname'] = 'Criterium naam kan niet leeg zijn';
$string['err_scoreinvalid'] = 'De score, gegeven aan {$a->criterianame} is niet geldig, de maximumscore is: {$a->maxscore}';
$string['err_scoreisnegative'] = 'De score, gegeven aan \'{$a->criterianame}\' is niet geldig. Negatieve waarden worden niet toegestaan';
$string['err_shortnametoolong'] = 'Criteriumnaam moet minder dan 256 tekens zijn';
$string['gradingof'] = '{$a} beoordeling';
$string['guide'] = 'Beoordelingsgids';
$string['guidemappingexplained'] = 'WAARSCHUWING: je beoordelingshulp heeft een maximumcijfer van <b>{$a->maxscore} punten</b> maar het maximumcijfer van je activeit is {$a->modulegrade}. Het maximumcijfer van je beoordelingshulp zal geschaald worden naar het maximumcijfer van de activiteitsmodule.<br />
Tussenresultaten zullen geconverteerd en afgerond worden.';
$string['guidenotcompleted'] = 'Geef een geldig cijfer voor elk criterium';
$string['guideoptions'] = 'Opties beoordelingshulp';
$string['guidestatus'] = 'Status';
$string['hidemarkerdesc'] = 'Verberg gemarkeerde criteriumbeschrijvingen';
$string['hidestudentdesc'] = 'Verberg criteriumbeschrijving voor leerlingen';
$string['informationforcriterion'] = '{$a} informatie';
$string['insertcomment'] = 'Voeg frequent gebruikte opmerkingen toe';
$string['maxscore'] = 'Maximumcijfer';
$string['name'] = 'Naam';
$string['needregrademessage'] = 'De beoordelingshulp is gewijzigd nadat deze leerling beoordeeld werd. De leerling kan zijn beoordeling niet zien tot je de beoordelingshulp controleert en het cijfer aanpast.';
$string['outof'] = 'Cijfer van de {$a}';
$string['pluginname'] = 'Beoordelingshulp';
$string['previewmarkingguide'] = 'Voorbeeld beoordelingshulp';
$string['privacy:metadata:criterionid'] = 'Een identificatie voor een criterium voor geavanceerde markering.';
$string['privacy:metadata:fillingssummary'] = 'Bewaart informatie over het cijfer van een gebruiker en feedback voor de markeringsgids.';
$string['privacy:metadata:instanceid'] = 'Een identificatie voor een cijfer dat door een activiteit wordt gebruikt.';
$string['privacy:metadata:preference:showmarkerdesc'] = 'Of beschrijvingscriteria worden weergegeven';
$string['privacy:metadata:preference:showstudentdesc'] = 'Of beschrijvingen van leerlingencriteria moeten worden getoond';
$string['privacy:metadata:remark'] = 'Opmerkingen met betrekking tot dit cijfercriterium.';
$string['privacy:metadata:score'] = 'Een score voor dit cijfer criterium.';
$string['regrademessage1'] = 'Je gaat wijzigingen aanbrengen in een boordelingshulp die al gebruikt geweest is om te beoordelen. Geef aan of bestaande cijfers moeten nagekeken worden. Als je dit inschakelt, dan zal de beoordelingshulp verborgen worden tot het werk van de leerling opnieuw nagekeken is.';
$string['regrademessage5'] = 'Je gaat grote wijzigingen aanbrengen aan een beoordelingshulp die al gebruikt geweest is om mee te beoordelen. Het cijfer in de cijferlijst zal niet wijzigen, maar de beoordelingshulp zal voor de leerlingen verborgen blijven tot hun werk opnieuw nagekeken is.';
$string['regradeoption0'] = 'Niet markeren voor opnieuw beoordelen';
$string['regradeoption1'] = 'Markeer om opnieuw te boordelen';
$string['restoredfromdraft'] = 'OPMERKING: de laatste poging om deze leerling te beoordelen is niet behoorlijk bewaard, dus zijn de als klad bewaarde punten teruggezet. Als je deze wijzigingen wil annuleren, klik dan op \'annuleren\' onderaan';
$string['save'] = 'Bewaar';
$string['saveguide'] = 'Bewaar de beoordelingshulp en maak die klaar voor gebruik';
$string['saveguidedraft'] = 'Bewaar als klad';
$string['score'] = 'cijfer';
$string['scoreforcriterion'] = '{$a} score';
$string['score_help'] = 'Voer een score in voor {$a->criterion} tussen 0 en {$a->maxscore}.';
$string['showmarkerdesc'] = 'Toon beoordeler de criterium beschrijvingen';
$string['showmarkspercriterionstudents'] = 'Toon cijfers per criterium aan leerlingen';
$string['showstudentdesc'] = 'Toon leerling criterium beschrijvingen';
