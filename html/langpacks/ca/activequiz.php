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
 * Strings for component 'activequiz', language 'ca', version '4.5'.
 *
 * @package     activequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activequiz:seeresponses'] = 'Consulta les respostes d\'altres estudiants per puntuar-les';
$string['activequizintro'] = 'Introducció';
$string['addtoquiz'] = 'Afegeix';
$string['anonymoususer'] = 'Usuari anònim';
$string['assessed'] = 'Avaluada';
$string['assessed_help'] = 'Marqueu aquesta casella per avaluar el vostre qüestionari';
$string['attempts'] = 'Intents';
$string['attemptview'] = 'Visualitza l\'intent';
$string['closesession'] = 'Tanca la sessió';
$string['closingsession'] = 'S\'està tancant la sessió...';
$string['defaultquestiontime'] = 'Temps per respondre la pregunta per defecte';
$string['defaultquestiontime_help'] = 'El temps per defecte durant el qual es mostrarà cada pregunta.<br />
Les preguntes individuals poden substituir-lo.';
$string['edit'] = 'Edita el qüestionari';
$string['endquestion'] = 'Pregunta final';
$string['eventattemptviewed'] = 'S\'ha mostrat l\'intent';
$string['eventquestionmanuallygraded'] = 'S\'ha qualificat la pregunta de manera manual';
$string['firstsession'] = 'Primera sessió';
$string['gatheringresults'] = 'Recollint resultats...';
$string['gotosession'] = 'Ves a la sessió en curs';
$string['grademethod'] = 'Mètode d\'avaluació de la sessió';
$string['grademethod_help'] = 'Aquest és el mètode que s\'utilitza en qualificar. Aquest mètode serveix per obtenir la qualificació quan hi ha diverses sessions en un mateix qüestionari';
$string['gradesettings'] = 'Configuració de les qualificacions';
$string['groupattendance'] = 'Permetre l\'assistència en grup';
$string['groupattendance_help'] = 'Si aquesta casella està activada, l\'estudiant que fa el qüestionari pot seleccionar quins alumnes del seu grup hi assisteixen.';
$string['groupmembership'] = 'Pertinença al grup';
$string['groupworksettings'] = 'Configuració del grup';
$string['hide_correct_answer'] = 'Amaga la resposta correcta';
$string['hidenotresponded'] = 'Amaga les preguntes sense resposta';
$string['hidestudentresponses'] = 'Amaga les respostes';
$string['highestsessiongrade'] = 'La nota més alta de la sessió';
$string['instructorquizinst'] = '<p>Espereu en aquesta pàgina fins que els estudiants s\'hagin connectat. Un cop s\'ha fet clic a <b>Inicia el qüestionari</b>, el qüestionari començarà la primera pregunta</p>
    <p>
<p>Controls:</p>
    <ul>
        <li>
            Torna a enquestar la pregunta
            <ul>
                <li>
                    Permet a l\'instructor tornar a enquestar la pregunta actual o l\'anterior (disponible durant la revisió d\'una pregunta).
                </li>
            </ul>
        </li>
        <li>
            Següent pregunta
            <ul>
                <li>
                    Continueu amb la pregunta següent (disponible durant la revisió d\'una pregunta).
                </li>
            </ul>
        </li>
        <li>
            Pregunta final
            <ul>
                <li>
                    Finalitza la pregunta actual. També permet que l\'instructor finalitzi una pregunta programada abans d\'hora (disponible mentre s\'executa una pregunta). <i>Si la pregunta no té límit de temps, l\'instructor haurà de fer clic a <b>finalitzar la pregunta.</b></i>
                </li>
            </ul>
        </li>
        <li>
            Ves a la pregunta
            <ul>
                <li>
                    Obriu un quadre de diàleg per dirigir tots els usuaris a una pregunta específica del qüestionari (disponible durant la revisió d\'una pregunta).
                </li>
            </ul>
        </li>
        <li>
            Tanca sessió
            <ul>
                <li>
                    Tanca la sessió actual, així com tots els intents dels alumnes. Això qualificarà automàticament tots els intents (disponible en qualsevol moment).
                </li>
            </ul>
        </li>
        <li>
            Torna a carregar els resultats
            <ul>
                <li>
                    Torneu a carregar les respostes dels estudiants al quadre d\'informació. Permet a l\'instructor veure quants estudiants o grups han respost i quants encara no han respost (disponible durant la revisió d\'una pregunta).
                </li>
            </ul>
        </li>
        <li>
            Amaga/Mostra No s\'ha respost
            <ul>
                <li>
                    Amaga o mostra el quadre d\'informació que mostra quants estudiants o grups han respost i quins estudiants o grups encara no han respost (disponible quan la pregunta està en procés).
                </li>
            </ul>
        </li>
        <li>
            Mostra la resposta correcta
            <ul>
                <li>
                    Proporciona a l\'instructor una visió de la pregunta amb la resposta correcta seleccionada (disponible durant la revisió d\'una pregunta). Això no mostrarà la resposta correcta per als tipus de preguntes qualificades manualment, com ara assaigs o preguntes de dibuix.
                </li>
            </ul>
        </li>
    </ul>
</p>';
$string['instructorsessionsgoing'] = 'Ja hi ha una sessió en curs. Cliqueu el botó de sota per anar-hi';
$string['invalid_indvquestiontime'] = 'El temps de les preguntes ha de ser un enter igual o superior a 0';
$string['invalid_numberoftries'] = 'El nombre d\'intents ha de ser un enter igual o superior a 1';
$string['invalid_points'] = 'Els punts són obligatoris i ha de ser un número superior a 0';
$string['invalidattemptaccess'] = 'No teniu permís per accedir a aquest intent';
$string['invalidgroupid'] = 'Cal un identificador de grup vàlid per als estudiants';
$string['isanonymous'] = 'Totes les respostes a aquest qüestionari són anònimes';
$string['joinquiz'] = 'Uneix-me al qüestionari';
$string['joinquizinstructions'] = 'Feu clic a continuació per unir-vos al qüestionari';
$string['jumptoquesetioninstructions'] = 'Seleccioneu una pregunta a la qual vulgueu anar:';
$string['jumptoquestion'] = 'Ves a la pregunta';
$string['lastsession'] = 'Darrera sessió';
$string['loading'] = 'Iniciant el qüestionari';
$string['manualcomment'] = 'Comentari manual';
$string['manualcomment_help'] = 'El comentari que els professors poden afegir quan avaluen un intent';
$string['marks'] = 'Qualificacions';
$string['marks_help'] = 'La qualificació numèrica de cada pregunta i la puntuació global de l\'intent';
$string['modulename'] = 'Qüestionari actiu';
$string['modulename_help'] = '<p>L\'activitat de qüestionari actiu permet a un instructor crear i administrar qüestionaris en temps real. Tots els tipus de preguntes de qüestionari habituals es poden utilitzar al qüestionari actiu.</p>
<p>El qüestionari actiu permet la participació individual o en grup. L\'assistència en grup és possible, de manera que els punts donats durant el qüestionari només s\'aplicaran als participants que van assistir a la sessió. Les preguntes es poden configurar per permetre múltiples intents. Es pot establir un límit de temps per finalitzar automàticament la pregunta o l\'instructor pot finalitzar la pregunta manualment i passar a la següent. L\'instructor també té la capacitat de saltar a diferents preguntes mentre executa la sessió. Els instructors poden controlar la participació individual o grupal, les respostes en temps real dels participants i la pregunta que està en procés.</p>
<p>Cada intent de qüestionari es marca automàticament com un qüestionari normal (a excepció de les preguntes d\'assaig i de PoodLL) i la nota es desa al llibre de qualificacions. La qualificació per a la participació del grup es pot fer automàticament transferint la qualificació de l\'únic que respon a la resta de membres del grup. </p>
<p>L\'instructor té opcions per mostrar suggeriments, fer comentaris i mostrar les respostes correctes als estudiants en acabar el qüestionari.</p>
<p>Els qüestionaris actius es poden utilitzar com a vehicle per oferir aprenentatge basat en equip dins del Moodle.</p>';
$string['modulenameplural'] = 'Qüestionaris actius';
$string['nextquestion'] = 'Pregunta següent';
$string['nochangegroups'] = 'No podeu canviar de grup després de crear sessions o no hi ha agrupacions definides per a aquest curs.';
$string['nochangegroups_label'] = '&nbsp;';
$string['nofeedback'] = 'No hi ha comentaris per a aquesta pregunta';
$string['nosession'] = 'No hi ha cap sessió oberta';
$string['notime'] = 'Sense límit de temps';
$string['notime_help'] = 'Marqueu aquest camp per no tenir temporitzador en aquesta pregunta. <p>L\'instructor haurà de fer clic al botó de finalització de la pregunta perquè acabi la pregunta</p>';
$string['notries'] = 'No vos queden intents per a aquesta pregunta';
$string['numberoftries'] = 'Nombre d\'intents';
$string['numberoftries_help'] = 'Nombre d\'intents que té un usuari per respondre una pregunta. Els estudiants encara estaran subjectes al límit de temps per respondre les preguntes';
$string['overallgrade'] = 'Nota global: {$a->overallgrade} / {$a->scale}';
$string['points_help'] = 'El nombre de punts que voldríeu que valgui aquesta pregunta';
$string['qdeleteerror'] = 'No s\'ha pogut suprimir la pregunta';
$string['qdeletesucess'] = 'La pregunta s\'ha suprimit correctament';
$string['qmoveerror'] = 'No s\'ha pogut moure la pregunta';
$string['qmovesuccess'] = 'La pregunta s\'ha mogut correctament';
$string['question'] = 'Pregunta';
$string['questiondelete'] = 'Suprimeix la pregunta {$a}';
$string['questionedit'] = 'Edita la pregunta';
$string['questionfinished'] = 'Pregunta acabada, esperant els resultats';
$string['questionlist'] = 'Llista de preguntes';
$string['questionmovedown'] = 'Mou la pregunta {$a} cap avall';
$string['questionmoveup'] = 'Mou la pregunta {$a} cap amunt';
$string['quiznotrunning'] = 'El qüestionari no s\'està executant en aquest moment; espereu que el vostre professor l\'iniciï. Utilitzeu el botó de tornar a carregar per tornar a carregar aquesta pàgina i comprovar-ho de nou';
$string['regradeallgrades'] = 'Torna a qualificar tots els resultats';
$string['reload_results'] = 'Tornar a carregar els resultats';
$string['responses'] = 'Mostra les respostes';
$string['reviewafter'] = 'Després de tancar les sessions';
$string['reviewoptionsettings'] = 'Opcions de revisió';
$string['savequestion'] = 'Desa la pregunta';
$string['scale'] = 'Qualificació màxima';
$string['select_group'] = 'Seleccioneu el vostre grup';
$string['selectsession'] = 'Seleccioneu la sessió per visualitzar:&nbsp;&nbsp;&nbsp;&nbsp;';
$string['sessionaverage'] = 'Mitjana de la sessió';
$string['sessionclosed'] = 'Ara la sessió està tancada';
$string['sessionname'] = 'Nom de la sessió';
$string['sessionname_required'] = 'El nom de la sessió és necessari';
$string['sessionnametext'] = '<span style="font-weight: bold">Sessió: </span>';
$string['show_correct_answer'] = 'Mostra la resposta correcta';
$string['showhistoryduringquiz'] = 'Mostra l\'historial de respostes';
$string['showhistoryduringquiz_help'] = 'Mostra l\'historial de respostes de l\'alumne/grup per a aquesta pregunta mentre es revisen les respostes a una pregunta durant un qüestionari.';
$string['start_session'] = 'Comença la sessió';
$string['startquiz'] = 'Comença el qüestionari';
$string['studentquizinst'] = '<p>Espereu que l\'instructor comenci el qüestionari. Un cop hagi començat, veureu un temporitzador amb un compte enrere per al començament de la primera pregunta.</p>';
$string['successregrade'] = 'El qüestionari s\'ha requalificat correctament';
$string['teacherjoinquizinstruct'] = 'Utilitzeu-ho si voleu provar un qüestionari vosaltres mateixos<br />(també haureu d\'iniciar-lo en una finestra independent)';
$string['theattempt'] = 'L\'intent';
$string['timecompleted'] = 'Temps completat';
$string['timemodified'] = 'Temps modificat';
$string['timertext'] = 'La vostra pregunta finalitzarà i s\'enviarà automàticament en:';
$string['trycount'] = 'Et queden {$a->tries} intents.';
$string['unabletocreate_session'] = 'No es pot crear la sessió';
$string['view'] = 'Mostra el qüestionari';
$string['viewstats'] = 'Mostra les estadístiques del qüestionari';
$string['waitforquestiontime'] = 'Espera abans que comenci el temps per respondre la pregunta';
$string['waitforrevewingend'] = 'Actualment, l\'instructor està revisant la pregunta anterior. Espereu que comenci la pregunta següent';
