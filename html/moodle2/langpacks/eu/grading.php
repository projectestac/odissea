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
 * Strings for component 'grading', language 'eu', branch 'MOODLE_36_STABLE'
 *
 * @package   grading
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' metodoa dago aukeratuta kalifikazio-metodo gisa \'{$a->area}\' eremuan';
$string['activemethodinfonone'] = '\'{$a->method}\' metodoa dago aukeratuta kalifikazio-metodo gisa \'{$a->area}\' eremuan';
$string['changeactivemethod'] = 'Aldatu kalifikazio-metodoa beste honetara';
$string['clicktoclose'] = 'egin klik ixteko';
$string['exc_gradingformelement'] = 'Ezin da kalifikazio-formularioa sortu';
$string['formnotavailable'] = 'Kalifikazio-metodo aurreratu bat erabiltzea aukeratu da baina kalifikazio-formularioa ez dago eskuragarri. Aurretik hori definitu beharko zenuke ekintza-menuko edo kudeaketa blokeko esteka erabilita.';
$string['gradingformunavailable'] = 'Kontuan izan, mesedez: une honetan kalifikazio aurreraturako formularioa ez dago prest. Kalifikazio arrunta metodoa erabiliko da formularioa modu egokian konfiguratuta egon arte.';
$string['gradingmanagement'] = 'Kalifikazio aurreratua';
$string['gradingmanagementtitle'] = 'Kalifikazio aurreratua: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Kalifikazio-metodoa';
$string['gradingmethod_help'] = 'Aukeratu testuinguru honetako kalifikazioak kalkulatzeko erabiliko den kalifikazio-metodo aurreratua.

Kalifikazio aurreratua desgaitu eta lehenetsitako kalifikazio metodoa berriz erabiltzeko, aukeratu \'Kalifikazio zuzen arrunta\'.';
$string['gradingmethodnone'] = 'Kalifikazio zuzen arrunta';
$string['gradingmethods'] = 'Kalifikazio-metodoak';
$string['manageactionclone'] = 'Sortu beste kalifikazio-formulario bat txantiloi batetik';
$string['manageactiondelete'] = 'Ezabatu definitutako formularioa';
$string['manageactiondeleteconfirm'] = '\'{$a->formname}\' kalifikazio-formularioa eta \'{$a->component} ({$a->area})\'-(r)ekin erlazionaturiko informazio guztia ezabatzera zoaz. Mesedez ziurtatu hurrengo ondorioak ulertzen dituzula:

* Ekintza honek ez dauka atzera bueltarik.
* Beste kalifikazio-metodo bat aukera dezakezu, \'Kalifikazio zuzen arrunta\' barne, formulario hau ezabatu gabe.
* Kalifikazio-formularioak nola bete azaltzen duen informazio guztia galduko da.
* Kalifikazio-liburuan kalkulaturiko kalifikazioek ez dute eraginik izango. Dena den, nola kalkulatu diren deskribatzen duen azalpena ez da eskuragarri egongo.
* Ekintza honek ez dauka eraginik beste jardueratan egindako formulario honen kopietan.';
$string['manageactiondeletedone'] = 'Formularioa ondo ezabatu da';
$string['manageactionedit'] = 'Editatu oraingo formularioaren definizioa';
$string['manageactionnew'] = 'Zehaztu beste kalifikazio-formulario bat hasieratik';
$string['manageactionshare'] = 'Argitaratu formularioa txantiloi berri gisa';
$string['manageactionshareconfirm'] = '\'{$a}\' kalifikazio-formularioaren kopia bat txantiloi publiko gisa gordetzera zoaz. Zure guneko beste erabiltzaileek txantiloi hori erabiliz kalifikazio-formulario berriak sortzeko aukera izango dute.';
$string['manageactionsharedone'] = 'Formularioa ondo gorde da txantiloi berri gisa';
$string['noitemid'] = 'Ezin da kalifikatu. Kalifikatzeko elementua ez da existitzen.';
$string['nosharedformfound'] = 'Ez da txantiloirik aurkitu';
$string['privacy:metadata:grading_definitions'] = 'Kalifikagarria den eremu batean definitutako kalifikazio aurreraturako formularioaren inguruko oinarrizko informazioa.';
$string['privacy:metadata:grading_definitions:areaid'] = 'Kalifikazio aurreraturako formularioa definituta dagoen eremuaren IDa.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'Hau kopiatu zeneko kalifikazio-definizioaren IDa.';
$string['privacy:metadata:grading_definitions:description'] = 'Kalifikazio aurreraturako metodoaren deskribapena.';
$string['privacy:metadata:grading_definitions:method'] = 'Definizioaren arduraduna den kalifikazio metodoa.';
$string['privacy:metadata:grading_definitions:name'] = 'Kalifikazio aurreraturako definizioaren izena.';
$string['privacy:metadata:grading_definitions:options'] = 'Kalifikazio-definizio honen ezarpen batzuk.';
$string['privacy:metadata:grading_definitions:status'] = 'Kalifikazio aurreraturako definizio honen egoera.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'Kalifikazio-definizioa kopiatu zeneko unea.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'Kalifikazio-definizioa sortu zeneko unea.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'Kalifikazio-definizioa azkenengoz aldatu zeneko unea.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'Kalifikazio-definizioa sortu zuen erabiltzailearen IDa.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'Kalifikazio-definizioa azkenengoz aldatu zuen erabiltzailearen IDa.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Kalifikazio-metodoarentzako datuak.';
$string['privacy:metadata:grading_instances'] = 'Ebaluatzaile batek elementu kalifikagarri bakoitzari emandako ebaluazioaren erregistroa.';
$string['privacy:metadata:grading_instances:feedback'] = 'Erabiltzaileak emandako feedbacka.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'Erabiltzaileak emandako feedbackaren testu-formatua';
$string['privacy:metadata:grading_instances:raterid'] = 'Kalifikazio-instantzia ebaluatu zuen erabiltzailearen IDa.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'Kalifikazio-instantziaren kalifikazioa.';
$string['privacy:metadata:grading_instances:status'] = 'Kalifikazio-instantzia honen egoera.';
$string['privacy:metadata:grading_instances:timemodified'] = 'Kalifikazio-instantzia azkenengoz aldatu zeneko unea.';
$string['searchownforms'] = 'bilatu nire formularioetan ere';
$string['searchtemplate'] = 'Bilatu kalifikazio-formularioak';
$string['searchtemplate_help'] = 'Hemen kalifikazio-formulario bat bilatu eta txantiloi gisa erabil dezakezu. Idatzi formularioaren izenean agertu beharko liratekeen hitzak, bere deskribapena edo formularioaren edukiak. Esaldi bat bilatzeko. idatz ezazu kontsulta osoa komatxo bikoitzen barruan.

Modu lehenetsian, partekatutako txantiloi gisa gordetako kalifikazio-formularioak bakarrik agertuko dira bilaketaren emaitzetan. Zure kalifikazio-formularioak ere bilaketaren emaitzetan gehi ditzakezu. Modu honetan, zure kalifikazio-formularioak partekatu gabe berrerabil ditzakezu. Modu honetan \'Erabiltzeko prest\' bezala gordetako formularioak bakarrik berrerabil daitezke.';
$string['statusdraft'] = 'Zirroborroa';
$string['statusready'] = 'Erabiltzeko prest';
$string['templatedelete'] = 'Ezabatu';
$string['templatedeleteconfirm'] = 'Partekatutako \'{$a}\' txantiloia ezabatzera zoaz. Txantiloia ezabatzeak ez die horretan oinarrituriko formularioei eragiten.';
$string['templateedit'] = 'Editatu';
$string['templatepick'] = 'Erabili txantiloi hau';
$string['templatepickconfirm'] = '\'{$a->formname}\' izeneko kalifikazio-formularioa txantiloi gisa erabili nahi duzu \'{$a->component} ({$a->area})\'-ko kalifikazio-formulariorako?';
$string['templatepickownform'] = 'Erabili formulario hau txantiloi gisa';
$string['templatesource'] = 'Kokapena: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Norberaren formularioa';
$string['templatetypeshared'] = 'Partekatutako txantiloia';
