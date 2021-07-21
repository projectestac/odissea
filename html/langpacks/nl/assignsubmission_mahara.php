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
 * Strings for component 'assignsubmission_mahara', language 'nl', version '3.11'.
 *
 * @package     assignsubmission_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assign_submission_mahara_description'] = 'Mahara functies gebruikt in het inzendingstype Mahara portfolio.<br />Deze service publiceren op een Moodle site heeft geen effect. Schrijf in op deze service als je opdrachten wilt kunnen gebruiken met {$a}.<br />';
$string['assign_submission_mahara_name'] = 'Services voor inzendingstype Mahara';
$string['collectionsby'] = 'Collecties van {$a}';
$string['defaultlockpages'] = 'Standaard "{$a}"';
$string['defaultlockpages_help'] = 'Standaardinstelling te gebruiken voor de instelling "{$a}" bij nieuwe Mahara opdrachten.';
$string['defaulton'] = 'Standaard ingeschakeld';
$string['defaulton_help'] = 'Indien ingesteld, wordt dit inzendingstype standaard ingeschakeld voor alle nieuwe opdrachten.';
$string['defaultsite'] = 'Standaard "{$a}"';
$string['defaultsite_help'] = 'Standaardinstelling te gebruiken voor de instelling "{$a}" bij nieuwe Mahara opdrachten.';
$string['emptysubmission'] = 'Je hebt geen pagina gekozen om in te sturen.';
$string['enabled'] = 'Mahara portfolio';
$string['enabled_help'] = 'Indien ingeschakeld kunnen leerlingen Mahara pagina\'s indienen voor beoordeling in Moodle. De Mahara site moet al geconfigureerd zijn voor netwerken via MNet met deze Moodle site.';
$string['errorinvalidhost'] = 'Ongeldige host id geselecteerd';
$string['errorinvalidstatus'] = 'Foutmelding voor ontwikkelaars: Ongeldige inzendingsstatus verzonden naar assign_submission_mahara::set_mahara_submission_status()';
$string['errormnetrequest'] = 'Poging tot versturen van een MNet verzoek veroorzaakte een fout: {$a}';
$string['errorvieworcollectionalreadysubmitted'] = 'De geselecteerde Mahara view of collectie kon niet worden ingestuurd. Kies een andere.';
$string['eventassessableuploaded'] = 'Er is een Mahara pagina of collectie ingestuurd.';
$string['lockpages'] = 'Vergrendel ingestuurde pagina\'s';
$string['lockpages_help'] = 'Als "Ja, maar laat vergrendeld" is geselecteerd, blijven vanuit Mahara ingestuurde pagina\'s en collecties vergrendeld voor bewerken na de beoordeling. Als "Ja, maar ontgrendelen na beoordeling" is geselecteerd, wordt de pagina of collectie na de beoordeling vrijgegeven, of samen met de cijfers vrijgegeven bij gebruik van de beoordelingsworkflow.';
$string['mahara'] = 'Mahara portfolio';
$string['nomaharahostsfound'] = 'Er zijn geen Mahara hosts gevonden.';
$string['noneselected'] = 'Niets geselecteerd';
$string['noviewscreated'] = 'Je hebt geen beschikbare Mahara pagina\'s of collecties. <a target="_blank" href="{$a->jumpurl}">Klik hier</a> om naar "{$a->name}" te gaan een en nieuwe pagina of collectie te maken.';
$string['option_collections'] = 'Collecties';
$string['option_views'] = 'Views';
$string['outputforlog'] = '{$a->remotehostname}: {$a->viewtitle} (view id: {$a->viewid})';
$string['outputforlognew'] = 'Nieuwe {$a} inzending';
$string['pluginname'] = 'Mahara portfolio';
$string['previousattemptsnotvisible'] = 'Eerdere pogingen met het inzendingstype Mahara zijn niet zichtbaar.';
$string['privacy:metadata:assignment'] = 'Het id van de Opdracht';
$string['privacy:metadata:assignsubmission_mahara'] = 'Bewaart informatie over Mahara pagina\'s en collecties ingestuurd naar Opdrachten.';
$string['privacy:metadata:iscollection'] = 'Is deze inzending een pagina of collectie';
$string['privacy:metadata:submission'] = 'Het id van de inzending';
$string['privacy:metadata:viewid'] = 'Het id van de Mahara pagina of collectie';
$string['privacy:metadata:viewstatus'] = 'De status van de Mahara pagina of collectie';
$string['privacy:metadata:viewtitle'] = 'De titel van de Mahara pagina of collectie';
$string['privacy:metadata:viewurl'] = 'De url van de Mahara pagina of collectie';
$string['privacy:path'] = 'Mahara pagina\'s en collecties';
$string['selectmaharaview'] = 'Selecteer een van je beschikbare portfoliopagina\'s of -collecties uit onderstaande lijst, of <a target="_blank" href="{$a->jumpurl}">klik hier</a> om naar "{$a->name}" te gaan en een nieuwe te maken.';
$string['site'] = 'Site';
$string['site_help'] = 'Met deze instelling selecteer je vanaf welke Mahara site je leerlingen hun pagina\'s kunnen insturen.';
$string['viewsby'] = 'Pagina\'s van {$a}';
$string['yeskeeplocked'] = 'Ja, laat vergrendeld';
$string['yesunlock'] = 'Ja, maar ontgrendelen na beoordeling';
