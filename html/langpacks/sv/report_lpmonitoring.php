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
 * Strings for component 'report_lpmonitoring', language 'sv', version '4.4'.
 *
 * @package     report_lpmonitoring
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedfilter'] = 'Avancerat filter';
$string['apply'] = 'Använd';
$string['atleastonecomment'] = 'Studieplaner med minst en kommentar';
$string['atleasttwoplans'] = 'Användare med minst två studieplaner';
$string['bordercolour'] = 'Färg på kantlinje';
$string['bordercolourdesc'] = 'Färg att använda för sidans kantlinje';
$string['bulkdefaultrating'] = 'Massbedömning för alla studenter och alla kompetenser';
$string['colorconfiguration'] = 'Färger för kompetensskala';
$string['colorsforscale'] = 'Färger för: {$a}';
$string['colorsforscalesaved'] = 'Färgerna för {$a} sparades.';
$string['comment'] = 'Kommentar';
$string['comments'] = 'Kommentarer';
$string['commentsedit'] = 'Visa eller lägg till kommentarer';
$string['commentseditshort'] = 'Visa/lägg till';
$string['commentsnumber'] = '<strong>({$a})</strong> kommentarer';
$string['contd'] = 'forts.';
$string['course'] = 'Kurs';
$string['dategenerated'] = 'Genererad rapport: {$a}';
$string['donotapplybulk'] = 'Massbedöm ej denna kompetens';
$string['emptytemplate'] = 'Hittade inga studieplaner';
$string['errormanagetags'] = 'Kunde inte spara etikettredigeringsformuläret';
$string['eventusercompetencyresetted'] = 'Användarkompetens återställd.';
$string['evidence_reset'] = 'Kompetensbedömningen återställdes i studieplan "{$a}".';
$string['filter'] = 'Filter';
$string['filterboth'] = 'Båda';
$string['filterby'] = 'Filtrera efter';
$string['filterbyscalevalue'] = 'Filtrera efter skalvärde';
$string['filtercourse'] = 'I kursen';
$string['filtermodule'] = 'I kursaktiviteten';
$string['finalrating'] = 'Slutgiltig bedömning';
$string['finalratingcourse'] = 'Bedömning i kurs';
$string['finalratingcoursemodule'] = 'Bedömning i aktivitet';
$string['forcerating'] = 'Tvinga ny bedömning av tidigare bedömda användare';
$string['incms'] = 'i aktiviteterna';
$string['incourses'] = 'i kurserna';
$string['invalidframework'] = 'Ogiltigt kompetensramverk';
$string['invalidscaleconfiguration'] = 'Ogiltig betygsskala';
$string['learningplan'] = 'Studieplan';
$string['learningplancompetencies'] = 'Studieplankompetenser: {$a}';
$string['learningplanswithtag'] = 'Studieplaner med den etiketten';
$string['linkedcms'] = 'Länkade aktiviteter';
$string['linkedusers'] = 'Länkade användare';
$string['moodleuserid'] = 'Moodle användar-ID';
$string['nextuser'] = 'Nästa användare';
$string['nocompetenciesforusererror'] = 'Hittade inga kompetenser för studieplaner associerade med användare med ID: {$a}';
$string['nocompetenciesintemplate'] = 'Inga kompetenser länkade till studieplansmallen';
$string['nodataavailable'] = 'Inga data';
$string['nolearningplanavailable'] = 'Ingen studieplan';
$string['nomatchingrecords'] = 'Inga matchande poster hittades';
$string['nopermissionsplanview'] = 'Du har inte behörighet att visa studieplan för {$a}';
$string['nopermissionsusercompetencyview'] = 'Du har inte behörighet att visa användarkompetens för {$a}';
$string['noplansforusererror'] = 'Hittade inga studieplaner för användare med ID: {$a}';
$string['noscaleavailable'] = 'Ingen skala';
$string['notemplateselected'] = 'Ingen mall vald';
$string['noticebulkrating'] = 'Redan bedömda studenter påverkas ej. För att påtvinga bedömningar, markera <em>"Tvinga ny bedömning av tidigare bedömda användare"</em>';
$string['notproficient'] = 'Ej kunnig';
$string['notproficientcompetencies'] = 'Kompetenser - Ej kunnig';
$string['notrated'] = 'Ej bedömd';
$string['notratedcompetencies'] = 'Kompetenser ej bedömda';
$string['nouserselected'] = 'Inga användare valda';
$string['pdfreporttitle'] = '{$a} - Sammanfattning av kompetenser i Moodle';
$string['plansnumber'] = '<strong>({$a})</strong> studieplaner';
$string['pluginname'] = 'Bevakning av studieplaner';
$string['previoususer'] = 'Föregående användare';
$string['privacy:metadata'] = 'Pluginmodulen Bevakning av studieplaner lagrar ingen personinformation.';
$string['proficient'] = 'Kunnig';
$string['proficientcompetencies'] = 'Kompetenser - Kunnig';
$string['profilefieldnotuniqueerror'] = 'Fel i get_userid_frpm_profile_field: hittade {$a} resultat.';
$string['rated'] = 'Bedömd';
$string['ratingnumber'] = '<strong>({$a})</strong> bedömning';
$string['resetallratings'] = 'Återställ alla bedömningar';
$string['resetallratings_confirmation'] = 'Återställer alla kompetensbedömningarna för den här studieplanen. Bedömningarna återställs till <em>"Ej bedömd"</em>, men bevisen bevaras. Den här åtgärden går inte att ångra. Vill du fortsätta?';
$string['resetallratings_help'] = 'Återställ alla kompetenserna i denna studieplan (de återställs till <em>"Ej bedömd"</em> men bevisen bevaras)';
$string['resetonecompetency'] = 'Återställ den här kompetensen (den återställs till <em>"Ej bedömd"</em> men beviset bevaras)';
$string['resetonecompetency_confirmation'] = 'Återställer kompetensbedömningen för den här kompetensen. Bedömningen återställs till <em>"Ej bedömd"</em>, men beviset bevaras. Den här åtgärden går inte att ångra. Vill du fortsätta?';
$string['scalefilterby'] = 'Filtrera skalor efter';
$string['scalesfortemplate'] = 'Skalor för den här mallen';
$string['searchincompetencies'] = 'Sök i kompetenser';
$string['searchincourses'] = 'Sök i kurser';
$string['searchincoursesactivities'] = 'Sök i kurser/aktiviteter';
$string['searchplaceholder'] = 'Sök';
$string['selectframework'] = 'Välj kompetensramverk';
$string['selectlearningplan'] = 'Välj studieplan';
$string['selectlearningplantemplate'] = 'Välj studieplansmall';
$string['selecttag'] = 'Välj etikett';
$string['selectuser'] = 'Välj användare';
$string['statslearningplan'] = 'Studieplansstatistik';
$string['studentid'] = 'Student-ID';
$string['studentidmapping'] = 'Mappning för Student-ID';
$string['successtaskmsg'] = 'Utvärderingar genomförs snart';
$string['tabdetail'] = 'Detaljer';
$string['tabreport'] = 'Rapport';
$string['tabsummary'] = 'Sammanfattning';
$string['tag'] = 'Etikett';
$string['tagarea_competency_plan'] = 'Studieplaner';
$string['tags'] = 'Etiketter';
$string['tagsedit'] = 'Redigera etiketter';
$string['tagseditshort'] = 'Redigera';
$string['taskratingrunning'] = 'Utvärdering pågår, vänligen vänta på att den blir klar innan du påbörjar en ny';
$string['totalnumberrating'] = 'Totalt antal bedömningar';
$string['totalnumberratingincms'] = 'Totalt antal bedömningar i aktiviteter';
$string['totalnumberratingincourses'] = 'Totalt antal bedömningar i kurser';
$string['totalusers'] = 'Totalt antal användare';
$string['usersfromtemplate'] = 'Användare från denna mall';
