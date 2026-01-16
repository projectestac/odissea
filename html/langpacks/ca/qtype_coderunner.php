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
 * Strings for component 'qtype_coderunner', language 'ca', version '4.5'.
 *
 * @package     qtype_coderunner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['HIDE'] = 'Amaga';
$string['HIDE_IF_FAIL'] = 'Amaga si falla';
$string['HIDE_IF_SUCCEED'] = 'Amaga si és correcte';
$string['SHOW'] = 'Mostra';
$string['aborted'] = 'La prova s\'ha interromput a causa d\'un error.';
$string['ace-language'] = 'Llenguatge Ace';
$string['ace_aria_label'] = 'Editor de codi: introduïu el vostre codi aquí.';
$string['ace_gapfillerui_ui_source_descr'] = '«globalextra» per agafar el codi a mostrar del camp globalextra o «test0» per agafar-lo del camp testcode de la primera prova';
$string['ace_ui_notready'] = 'L\'editor Ace no està preparat. Potser podeu provar de tornar a carregar la pàgina.';
$string['aceui_auto_switch_light_dark_descr'] = 'Permet que una preferència del navegador o del SO per a temes foscos sobreescrigui el tema clar d\'Ace predefinit.';
$string['aceui_font_size_descr'] = 'Mida de la lletra de l\'editor Ace.';
$string['aceui_import_from_scratchpad_descr'] = 'Vertader per permetre que l\'editor Ace rebi la resposta en el format JSON que fa servir la interfície d\'usuari (IU) del bloc de notes i n\'extregui el codi de la resposta. Facilita canviar d\'IU. Deixeu-ho com a vertader a no ser que vulgueu que l\'Ace editi objectes JSON amb una clau «answer_code».';
$string['aceui_live_autocompletion_descr'] = 'Activa el mode de compleció automàtica en directe de l\'editor Ace.';
$string['aceui_theme_descr'] = 'Tema de l\'editor Ace. Per defecte és el tema clar «textmate». Un tema fosc alternatiu és «tomorrow_night». El tema clar pot ser sobreescrit per les preferències d\'usuari (vegeu auto_switch_dark).';
$string['addingcoderunner'] = 'S\'està afegint una pregunta CodeRunner nova';
$string['advanced_customisation'] = 'Personalització avançada';
$string['ajax_error'] = '*** ERROR D\'AJAX. NO DESEU ELS CANVIS! ***';
$string['allok'] = 'S\'han passat totes les proves!';
$string['allornone'] = 'El codi de prova ha de ser subministrat per a tots els casos de prova o per a cap.';
$string['allornothing'] = 'Qualificació «tot o res»';
$string['allornothing_help'] = 'Si s\'ha activat la qualificació «tot o res», tots els casos de prova s\'han de satisfer per obtenir una puntuació. D\'altra manera, la puntuació s\'obté sumant les puntuacions de tots els casos de prova que són correctes i s\'expressen com una fracció de la puntuació màxima possible.

Els punts per cas de prova poden ser especificats només si la qualificació «tot o res» està desactivada.

Si es fa servir una plantilla de qualificació que atorga punts als casos de prova, la qualificació «tot o res» generalment hauria d\'estar desactivada.';
$string['allowattachments'] = 'Permet fitxers adjunts';
$string['allowattachments_help'] = 'Aquest paràmetre especifica si es permet que els estudiants afegeixin fitxers adjunts i, posat cas que això es permeti, quants. Els fitxers adjunts es copien al directori d\'execució i es proporciona una llista dels noms dels fitxers adjunts separats per comes a la variable Twig {{ ATTACHMENTS }}. Atenció: permetre fitxers adjunts pot tenir implicacions de rendiment o d\'espai al disc per als servidors de Moodle i Jobe amb cursos i/o fitxers adjunts grossos. El servidor de Moodle i els servidors de Jobe anteriors al mes de febrer de 2019 emmagatzemen tots els fitxers adjunts de manera indefinida.';
$string['allowedfilenames'] = 'Noms de fitxer permesos';
$string['allowedfilenames_help'] = 'Tots els noms de fitxer han de satisfer l\'expressió regular PHP (Perl) donada, si no és buida. Per exemple, feu servir \'.+\\\\.cpp\' per permetre qualsevol fitxer C++ o \'(?!Prog)\\\\.java\' per permetre qualsevol fitxer Java excepte \'Prog.java\'. Addicionalment, els noms de fitxer només poden contenir caràcters alfanumèrics i guions baixos, guions i punts, no poden començar per doble guió baix (\'\\_\\_\') i no poden tenir cap conflicte amb els noms dels fitxers de suport. La Descripció és un missatge de text que es mostra a l\'estudiant i on s\'explica quin(s) fitxer(s) s\'esperen. Deixeu-lo en blanc per mostrar l\'expressió regular. Deixeu-los tots dos en blanc per no comprovar els noms de fitxer amb expressió regular.';
$string['allowedfilenamesregex'] = 'Noms de fitxer permesos (expressió regular)';
$string['allowmultiplestdins'] = 'Permet múltiples entrades estàndard (stdin)';
$string['answer'] = 'Resposta';
$string['answer_help'] = 'Es pot introduir una resposta d\'exemple aquí per fer-la servir perquè l\'autor de la pregunta pugui fer comprovacions i per mostrar-la opcionalment als estudiants durant la revisió. També la fa servir l\'script de comprovació en massa. La correcció d\'una resposta no buida és comprovada en desar la pregunta tret que «Valida en desar» estigui desactivat.';
$string['answerbox_group'] = 'Quadre de resposta';
$string['answerbox_group_help'] = 'Estableix el nombre de files del quadre de resposta. Això defineix l\'alçària mínima de l\'element de la interfície d\'usuari (p. ex., Ace) que controla el quadre de resposta. L\'amplària s\'estableix per ocupar la finestra. Si la resposta és més gran que el quadre verticalment o horitzontalment, es mostraran barres de desplaçament.';
$string['answerboxlines'] = 'Files';
$string['answerpreload'] = 'Contingut precarregat del quadre de resposta';
$string['answerpreload_help'] = 'El text definit aquí es precarregarà al quadre de resposta de l\'estudiant.';
$string['answerprompt'] = 'Resposta:';
$string['answerrequired'] = 'Heu d\'escriure una resposta no buida';
$string['answertooshort'] = 'La resposta és massa curta. Ha de ser de com a mínim {$a} caràcters.';
$string['answerunchanged'] = 'Heu de completar o editar la resposta precarregada.';
$string['asolutionis'] = 'Amaga/mostra la solució de l\'autor de la pregunta:';
$string['atleastonetest'] = 'Heu d\'indicar com a mínim un cas de prova per a aquesta pregunta.';
$string['attachmentoptions'] = 'Opcions dels fitxers adjunts';
$string['attachmentsoptional'] = 'Els fitxers adjunts són opcionals';
$string['attachmentsrequired'] = 'Els fitxers adjunts són obligatoris';
$string['attachmentsrequired_help'] = 'Aquesta opció especifica la quantitat mínima de fitxers adjunts necessaris per avaluar una resposta.';
$string['autotagbycategoryindextitle'] = 'Etiquetador automàtic de preguntes de CodeRunner';
$string['autotagbycategorytitle'] = 'Etiqueta automàtica de CodeRunner per categoria';
$string['backtobulktestindex'] = 'Torna a la pàgina d\'índex de proves massives.';
$string['bad_dotdotdot'] = 'Ús incorrecte de \'...\'. S\'ha de fer servir al final, després de dues penalitzacions numèriques incrementals';
$string['bad_empty_splitter'] = 'El separador de proves no pot ser buit si es fa servir una plantilla combinada';
$string['bad_new_prototype_name'] = 'Nom il·legal per al prototipus nou: ja està en ús';
$string['badacelangstring'] = 'El llenguatge de l\'Ace és incorrecte';
$string['badcputime'] = 'El temps de CPU ha d\'estar buit o ser un nombre enter superior a zero';
$string['bademptyprecheck'] = 'La precomprovació ha fallat amb la sortida inesperada següent.';
$string['badfilenamesregex'] = 'Expressió regular incorrecta';
$string['badfiles'] = 'Nom(s) de fitxer no permesos: {$a}';
$string['badjson'] = 'Sortida JSON incorrecta de l\'avaluador combinat. La sortida ha estat: {$a->output}';
$string['badjsonfunc'] = 'Funció JSON desconeguda ({$a->func})';
$string['badmemlimit'] = 'El límit de memòria ha d\'estar buit o ser un nombre no negatiu';
$string['badpenalties'] = 'El règim de penalitzacions ha de ser una llista de nombres en el rang [0, 100] separada per comes';
$string['badquestion'] = 'Error a la pregunta';
$string['badrandomintarg'] = 'Argument erroni a la funció JSON @randomint';
$string['badrandompickarg'] = 'Argument erroni a la funció JSON @randompic';
$string['badsandboxparams'] = 'El camp «Altres» (paràmetres de la zona de proves) ha d\'estar buit o ser un registre JSON vàlid';
$string['badtemplateparams'] = 'Els paràmetres de la plantilla han d\'estar en blanc o ser un registre JSON vàlid. Obtingut: <pre class="templateparamserror">{$a}</pre>';
$string['baduiparams'] = 'Els paràmetres de la interfície d\'usuari (IU) han d\'estar en blanc o ser un registre JSON vàlid.';
$string['brokencombinator'] = 'S\'esperaven {$a->numtests} resultats de proves; se n\'han obtingut {$a->numresults}. Potser els resultats obtinguts són excessius o hi ha errors a la pregunta?';
$string['brokentemplategrader'] = 'Dades incorrectes del qualificador: {$a->output}. L\'execució del programa es pot haver interromput (p. ex., perquè s’ha excedit el límit de temps o el de l\'ús de la memòria).';
$string['bulkquestiontester'] = 'L\'<a href="{$a->link}">script de comprovació en massa</a> comprova que les respostes d\'exemple de totes les preguntes en el context actual siguin correctes. És útil quan s\'afegeixen preguntes amb respostes d\'exemple; la instal·lació inicial no en té cap.';
$string['bulktestallcachenotclearedmessage'] = '<b>Nota:</b> La memòria cau de qualificacions no s\'ha esborrat; feu-ho des d\'Administració |Desenvolupament | Purga les memòries cau, si realment voleu esborrar la memòria cau de tots els cursos!';
$string['bulktestallincontext'] = 'Prova-ho tot';
$string['bulktestalltitle'] = 'Provant TOTES les preguntes del lloc web.';
$string['bulktestclearcachefirstexplanation'] = 'Això esborrarà tota la memòria cau de qualificacions del curs que s\'està avaluant. Aneu amb compte, perquè perdreu tota la memòria cau de qualificacions de tots els intents dels estudiants en totes les preguntes del curs! Aquesta opció és útil quan es canvien/actualitzen els servidors de treball, per exemple, per garantir que es generin nous resultats.';
$string['bulktestclearcachefirstlabel'] = 'Esborra primer la memòria cau de qualificacions del curs:';
$string['bulktestcontinuefromhere'] = 'Torna a executar o reprèn, a partir d\'aquí';
$string['bulktestindextitle'] = 'Comprovació en massa del CodeRunner';
$string['bulktestnumrunsexplanation'] = 'Quantes vegades es provarà cada pregunta inclosa. Les repeticions dependran de la configuració de <emph>Repeteix només les aleatòries</emph>.';
$string['bulktestnumrunslabel'] = 'Nombre de repeticions per pregunta:';
$string['bulktestoverallresults'] = 'Resultats generals';
$string['bulktestrandomseedexplanation'] = 'Si es defineix com un enter positiu, la llavor aleatòria del PHP es defineix a aquest valor abans d\'executar les proves per a cada pregunta que tingui <emph>random</emph> al seu nom.<br>
Si no definiu la llavor aleatòria, cada vegada que feu una prova massiva obtindreu seqüències aleatòries d\'instàncies de preguntes, cosa que pot significar que la memòria cau de qualificacions no sigui tan útil i que s\'hagin d\'executar més preguntes al servidor Jobe (segons com d\'aleatòries siguin les vostres preguntes).<br>
Per a una llavor determinada, la seqüència d\'instàncies de preguntes aleatòries hauria de ser la mateixa (suposant que la vostra plantilla de pregunta utilitzi la llavor aleatòria que es proporciona correctament).
Definir la llavor aleatòria vos permet recrear una seqüència específica d\'instàncies de preguntes aleatòries (per exemple, podríeu fer 100 execucions amb 1 sent la llavor inicial, després provar 100 execucions amb 200 sent la llavor, etc., amb l\'esperança d\'obtenir més cobertura).';
$string['bulktestrandomseedlabel'] = 'Llavor aleatòria:';
$string['bulktestrepeatrandomonlyexplanation'] = 'Limita les repeticions a preguntes amb el text <emph>random</emph> als seus noms.';
$string['bulktestrepeatrandomonlylabel'] = 'Repeteix només les aleatòries:';
$string['bulktestrun'] = 'Executa tots els casos de prova per a totes les respostes en el sistema (lent, només per a administradors)';
$string['bulktesttitle'] = 'S\'estan provant les preguntes a {$a}';
$string['cannotrunprototype'] = 'Això és un prototipus i no pot executar-se. Si voleu fer servir aquest prototipus, creeu una pregunta nova amb aquest tipus de pregunta.';
$string['coderunner'] = 'Codi del programa';
$string['coderunner:sandboxwsaccess'] = 'Permet l\'accés a la zona de proves del Jobe a través de serveis web';
$string['coderunner:viewhiddentestcases'] = 'Mostra els casos de prova ocults en revisar les preguntes';
$string['coderunner_help'] = 'En resposta a una pregunta, que és l\'especificació d\'un fragment de programa, funció o el programa sencer, l\'estudiant introdueix codi font en un llenguatge de programació indicat que satisfà l\'especificació.';
$string['coderunner_install_testsuite_failures'] = 'Proves que han fallat';
$string['coderunner_install_testsuite_intro'] = 'Aquesta pàgina us permet comprovar que les preguntes CodeRunner amb respostes d\'exemple funcionen correctament.';
$string['coderunner_install_testsuite_noanswer'] = 'Preguntes sense respostes d\'exemple';
$string['coderunner_install_testsuite_title'] = 'Un conjunt de proves per a les respostes d\'exemple del CodeRunner';
$string['coderunner_install_testsuite_title_desc'] = 'L\'<a href="{$a->link}">script de comprovació de respostes d\'exemple</a> verifica que les preguntes amb respostes d\'exemple funcionen correctament.';
$string['coderunner_link'] = 'question/type/coderunner';
$string['coderunner_question_type'] = 'Tipus de pregunta CodeRunner:';
$string['coderunnercategories'] = 'Categories amb preguntes CodeRunner';
$string['coderunnercontexts'] = 'Contextos amb preguntes CodeRunner';
$string['coderunnersettings'] = 'Configuració del CodeRunner';
$string['coderunnersummary'] = 'La Resposta és el codi d\'un programa que s\'executa en el context d\'un conjunt de casos de prova per determinar-ne la correcció.';
$string['coderunnertype'] = 'Tipus de pregunta';
$string['coderunnertype_help'] = 'Selecciona el llenguatge de programació i el tipus de pregunta. Una vegada s\'ha seleccionat un tipus de pregunta, els detalls es poden veure al panell de detalls del Tipus de pregunta a continuació.';
$string['coderunnerwssettings'] = 'Configuració del servei web de la zona de proves';
$string['columncontrols'] = 'Taula de resultats';
$string['columncontrols_help'] = 'Les caselles de comprovació seleccionen quines columnes de la taula de resultats s\'haurien de mostrar a l\'estudiant després d\'haver fet la seva tramesa';
$string['confirm_proceed'] = 'Si deseu aquesta pregunta amb «Personalitza» sense marcar, tota personalització que hàgiu fet es perdrà. Voleu continuar?';
$string['confirmreset'] = 'Voleu descartar tota la feina que heu fet en aquesta pregunta i reiniciar el quadre de resposta al contingut precarregat?';
$string['corruptuiparams'] = 'Els paràmetres de la IU d\'aquesta pregunta o aquest prototipus són incorrectes. Aneu amb compte.';
$string['cputime'] = 'Límit de temps (segons)';
$string['customisation'] = 'Personalització';
$string['customisationcontrols'] = 'Personalització';
$string['customise'] = 'Personalitza';
$string['datafiles'] = 'Fitxers de suport';
$string['datafiles_help'] = 'Qualsevol fitxer que es pugi aquí s\'afegirà al directori de treball quan s\'executi el programa de la plantilla expandida. Això permet afegir de manera còmoda una gran quantitat de dades o fitxers de suport.';
$string['default_penalty_regime'] = 'Règim de penalització per defecte';
$string['default_penalty_regime_desc'] = 'El règim de penalització per defecte a aplicar a totes les preguntes noves, que consisteix en una llista de percentatges de penalització separada per comes, acabant opcionalment en ", ..." per simbolitzar una progressió aritmètica.';
$string['display'] = 'Mostra';
$string['downloadquizattempts'] = 'Baixa els intents del qüestionari';
$string['downloadquizattemptshelp'] = 'Fes clic al curs adient i/o al botó de baixada
        per baixar el qüestionari o el curs que vulguis. Els nombres entre parèntesis
        després dels cursos són la quantitat de qüestionaris al curs amb un intent
        com a mínim. Els nombres entre parèntesis després del nom del qüestionari
        són la quantitat d\'intents.';
$string['duplicateprototype'] = 'La pregunta s\'havia definit de tipus «{$a->crtype}», però el prototipus no és únic a les preguntes següents: {$a->outputstring} Esborreu-les totes tret d\'una instància, o trieu un altre tipus de pregunta.';
$string['editingcoderunner'] = 'S\'està editant una pregunta CodeRunner';
$string['empty_new_prototype_name'] = 'El nou tipus de pregunta no pot ser buit';
$string['emptypenaltyregime'] = 'El règim de penalització ha d\'estar definit (des de la versió 3.1)';
$string['emptysandboxlanguage'] = 'El llenguatge de la zona de proves no pot ser buit en crear un prototipus.';
$string['enable'] = 'Activa';
$string['enable_diff_check'] = 'Activa el botó «Mostra les diferències»';
$string['enable_diff_check_desc'] = 'Mostra als estudiants el botó «Mostra les diferències» si la seva resposta no és correcta i es fa servir un validador de coincidència exacta';
$string['enable_sandbox_desc'] = 'Permet fer servir la zona de proves especificada per executar les trameses dels estudiants';
$string['enable_sandbox_ws'] = 'Activa el servei web de la zona de proves';
$string['enable_sandbox_ws_desc'] = 'Activa el servei web permetent accés directe a la zona de proves (normalment Jobe). CARACTERÍSTICA EXPERIMENTAL.';
$string['enablecombinator'] = 'Activa la plantilla combinada';
$string['enablegradecache'] = 'Activa llegir/escriure els parells (execució,resultat) des de i cap a la memòria cau d\'avaluacions del CodeRunner.';
$string['enablegradecache_desc'] = 'Experimental. La memòria cau és una memòria cau local de Moodle (actualment una memòria cau de fitxers) que emmagatzema els resultats de les avaluacions de les preguntes. Es fa servir principalment per accelerar l\'acció de tornar a avaluar fent servir resultats a la memòria cau per a execucions de Jobe en què la mateixa tramesa ja ha estat avaluada. Actualment, les execucions de servei web (p. ex., quadres de prova-ho i execucions del bloc de proves) no fan servir mai la memòria cau. NOTA: si desactiveu fer servir la memòria cau normalment és bo que buideu la memòria cau de CodeRunner abans de tornar-la a activar, de manera que l\'estat de la memòria cau sigui conegut. També hauríeu de buidar la memòria cau si feu canvis al servidor Jobe (p. ex., si hi instal·leu una versió nova de Python), ja que els resultats podrien ser diferents dels que hi ha a la memòria cau.';
$string['enter_to_submit'] = 'Premeu la tecla de retorn per trametre-ho...';
$string['equalitygrader'] = 'Coincidència exacta';
$string['error_access_denied'] = 'S\'ha denegat l\'accés al servidor de la zona de proves';
$string['error_excessive_output'] = 'Resultats excessius';
$string['error_jobe_unknown'] = 'Error desconegut del servidor Jobe';
$string['error_json_params'] = 'Els paràmetres no segueixen un format JSON correcte';
$string['error_loading_prototype'] = 'S\'ha produït un error en carregar el prototipus. Potser hi ha problemes de xarxa o el servidor ha caigut?';
$string['error_loading_ui_descr'] = 'S\'ha produït un error en carregar la descripció de la IU. Potser hi ha problemes de xarxa o el servidor ha caigut?';
$string['error_memory_limit'] = 'S\'ha excedit el límit de memòria';
$string['error_sandbox_server_overload'] = 'El servidor Jobe està sobrecarregat';
$string['error_submission_limit_reached'] = 'S\'ha arribat al límit de trameses a la zona de proves Jobe';
$string['error_timeout'] = 'S\'ha excedit el límit de temps d\'execució';
$string['error_unknown_language'] = 'Llenguatge sol·licitat desconegut';
$string['error_unknown_runtime'] = 'Error en temps d\'execució desconegut';
$string['erroroninit'] = '*** ERROR EN INICIALITZAR LA PREGUNTA ***<br>{$a->error}<br>';
$string['errorstring-accessdenied'] = 'S\'ha denegat l\'accés a la zona de proves';
$string['errorstring-autherror'] = 'No autoritzat a fer servir la zona de proves';
$string['errorstring-blocked-url'] = 'L\'URL ha estat bloquejat. Comprova l\'URL del Jobe i la configuració de seguretat HTTP del Moodle.';
$string['errorstring-duplicate-name'] = 'Canvia el nom de la classe; aquest nom té un conflicte amb els fitxers de suport d\'aquesta pregunta.';
$string['errorstring-jobe-failed'] = 'La petició al servidor Jobe ha fallat.';
$string['errorstring-jobe400'] = 'Error des del servidor de la zona de proves Jobe:';
$string['errorstring-ok'] = 'OK';
$string['errorstring-overload'] = 'L\'execució no ha pogut dur-se a terme a causa de la sobrecàrrega del servidor. Potser podeu tornar-ho a provar d\'aquí a poc?';
$string['errorstring-pastenotfound'] = 'S\'està demanant l\'estat d\'una execució no existent';
$string['errorstring-submissionfailed'] = 'La tramesa a la zona de proves ha fallat';
$string['errorstring-submissionlimitexceeded'] = 'S\'ha arribat al límit de trameses a la zona de proves';
$string['errorstring-unknown'] = 'S\'ha produït un error inesperat en executar el vostre codi. El servidor de la zona de proves pot haver caigut o estar sobrecarregat. Potser podeu tornar-ho a provar d\'aquí a poc?';
$string['errorstring-wronglangid'] = 'S\'ha demanat un llenguatge no existent';
$string['event_sandboxwebserviceexec'] = 'Execució de la zona de proves del CR';
$string['event_sandboxwebserviceexec_desc'] = 'Una execució s\'ha dut a terme a través del servei web de la zona de proves del CodeRunner.';
$string['exit_fullscreen'] = 'Surt de la pantalla completa';
$string['expand'] = 'Amplia';
$string['expandtitle'] = 'Mostra les categories de preguntes';
$string['expected'] = 'Resultat esperat';
$string['expected_help'] = 'El resultat esperat del cas de prova. Disponible a la plantilla com a {{TEST.expected}}.';
$string['expectedcolhdr'] = 'Esperat';
$string['exportthisquestion'] = 'Exporta aquesta pregunta';
$string['exportthisquestion_help'] = 'Això crearà un fitxer d\'exportació XML de Moodle que contindrà només aquesta pregunta. Un exemple en què això és útil és si creieu que aquesta pregunta és un error a CodeRunner que voldríeu notificar als desenvolupadors.';
$string['extra'] = 'Dades addicionals de la plantilla';
$string['extra_help'] = 'Unes dades addicionals que de vegades són útils a la plantilla, s\'hi accedeix com a {{TEST.extra}}';
$string['extractcodefromjson'] = 'És compatible amb Ace / bloc de proves';
$string['fail'] = 'Falla';
$string['failedhidden'] = 'El vostre codi ha fallat en una o més proves ocultes.';
$string['failedntests'] = 'Nombre de proves en què ha fallat: {$a->numerrors}';
$string['failedtesting'] = 'Les proves han fallat.';
$string['fails'] = 'errors';
$string['feedback'] = 'Retroacció';
$string['feedback_help'] = 'Trieu «Definida pel qüestionari» per permetre que les opcions de revisió del qüestionari (de manera concreta, l\'opció «Retroacció específica») controlin la visualització de la taula de resultats, «Imposa\'n la visualització» per mostrar la taula de resultats en qualsevol cas i «Imposa\'n l\'ocultació» per amagar-la en qualsevol cas';
$string['feedback_hide'] = 'Imposa\'n l\'ocultació';
$string['feedback_quiz'] = 'Definida pel qüestionari';
$string['feedback_show'] = 'Imposa\'n la visualització';
$string['fileheader'] = 'Fitxers de suport';
$string['filenamesexplain'] = 'Descripció';
$string['filenamesregex'] = 'Expressió regular';
$string['filloutoneanswer'] = 'Heu d\'introduir codi font que satisfaci l\'especificació. El codi que introduïu serà executat per determinar-ne la correcció i qualificar-lo en conseqüència.';
$string['firstfailure'] = 'Primer cas de prova erroni: {$a}';
$string['forexample'] = 'Per exemple';
$string['fullscreen'] = 'Pantalla completa';
$string['gapfillerui_delimiters_descr'] = 'Una matriu de 2 elements amb les cadenes utilitzades per obrir i tancar la descripció de l\'interval';
$string['gapfillerui_sync_interval_secs_descr'] = 'L\'interval de temps en segons entre les crides per sincronitzar els continguts de la IU amb la resposta de la pregunta. 0 per no fer la sincronització automàtica.';
$string['gapfillerui_ui_source_descr'] = '«globalextra» per fer que l\'HTML mostri el camp globalextra o «test0» per fer que mostri el codi de prova del primer cas de prova';
$string['giveup'] = 'Botó d\'aturar';
$string['giveup_aftermaxmarks'] = 'Disponible una vegada la puntuació no pot ser millorada';
$string['giveup_always'] = 'Sempre disponible';
$string['giveup_help'] = 'Si s\'activa aquesta opció, els estudiants podran veure un botó per deixar d\'interactuar amb la pregunta i en comptes d\'això mostrar la retroacció general.

El botó d\'«Atura i llegeix la retroacció final» pot mostrar-se des del principi o només quan un estudiant no pugui millorar la seva puntuació, a causa del règim de penalització.';
$string['giveup_never'] = 'Mai disponible';
$string['globalextra'] = 'Dades addicionals globals';
$string['globalextra_help'] = 'Un camp de text d\'ús general perquè el facin servir els autors de les plantilles, com el camp addicional de cada cas de prova, però global a tots els casos de prova. Disponible per a l\'autor de la plantilla com a {{ QUESTION.globalextra }}.';
$string['goodemptyprecheck'] = 'Correcte';
$string['gotcolhdr'] = 'Obtingut';
$string['grader'] = 'Qualificador';
$string['grading'] = 'S\'està qualificant';
$string['gradingcontrols'] = 'Controls de qualificació';
$string['gradingcontrols_help'] = 'El qualificador per defecte «coincidència exacta»
dona punts només si la sortida de l\'execució coincideix exactament amb el valor esperat definit
pel cas de prova. S\'elimina l\'espai en blanc al final de totes les línies, així com qualsevol línia
en blanc al final, abans de dur a terme la prova d\'igualtat.

El qualificador «coincidència gairebé exacta» és semblant, tret del fet que
també condensa espais i tabuladors múltiples en un sol espai, elimina totes les línies
en blanc i posa les cadenes en minúscules.

El qualificador «expressió regular» fa servir el camp «esperat» del cas de prova
com una expressió regular (sense cap delimitador tipus PERL) i comprova si el valor
esperat pot trobar-se en algun lloc de la sortida obtinguda. Per exemple,
un valor esperat «ab.*z» trobaria qualsevol sortida que contingui els caràcters
«ab» a qualsevol lloc de la sortida i un caràcter «z» en algun lloc posterior.
Per imposar la coincidència de la sortida sencera, comença l\'expressió regular amb
«\\A» i «\\Z», respectivament. L\'operació de coincidència de l\'expressió regular fa servir
les opcions MULTILINE i DOTALL.

El qualificador «plantilla d\'avaluació» assumeix que la sortida de l\'execució
és ja un resultat d\'avaluació, és a dir, que la plantilla prova *i avalua* la resposta de
l\'estudiant. L\'única sortida vàlida d\'aquestes plantilles és un registre codificat en
JSON.

Si la plantilla s\'executa per a cada cas de prova (és a dir, no és combinada), la
sortida JSON ha de descriure una fila de la taula de resultats i ha de contenir,
com a mínim, un camp «fraction», que és multiplicat per TEST.mark per decidir
quants punts dona aquest cas de prova. Normalment també hauria de contenir
un camp «got», que és el valor mostrat a la columna «Obtingut» de la taula de
resultats. Les altres columnes de la taula de resultats (testcode, stdin, expected)
també poden ser definides pel programa avaluador de la plantilla i es faran servir
en comptes dels valors del cas de prova. Per exemple, si la sortida del programa
és el text
<code>{"fraction":0.5, "got": "La meitat de les respostes són correctes!"}</code>,
es donarien la meitat dels punts per a aquest cas de prova i la columna «Obtingut» mostraria el text «La meitat de les respostes són correctes!». Les altres columnes
poden afegir-se a la taula de resultats afegint atributs addicionals al registre JSON
i també al camp de la pregunta Columnes de resultat.

Si la plantilla és combinada, el text JSON generat per la plantilla d\'avaluació
també hauria de contenir un camp «fraction», aquesta vegada per a la puntuació
total, i pot contenir zero o més dels camps «prologuehtml», \'testresults»,
«epiloguehtml», «columnformats», «showoutputonly», «showdifferences»
i «graderstate».
Els camps «prologuehtml» i «epiloguehtml» contenen codi HTML que es mostra,
respectivament, abans i després de la taula de resultats (i aquesta és opcional).
El camp «testresults», si s\'especifica, és una llista de llistes que es fa servir per
mostrar una taula de resultats. La primera fila conté la fila de capçaleres i
les altres files defineixen el cos de la taula. Hi ha dues capçaleres de columna
especials: «iscorrect» i «ishidden». Les columnes «iscorect» es fan servir per mostrar
creus o marques de verificació per als valors 0 i 1, respectivament. La columna
«ishidden» no es mostra, però els valors 0 i 1 a aquesta columna es fan servir
per marcar si la columna s\'ha d\'amagar o s\'ha de mostrar. Els estudiants no
poden veure les files amagades, però els tutors i altres educadors sí que poden fer-ho. Si s\'especifica
una taula «testresults», també es pot especificar el camp opcional «columnformats».
Aquest hauria de contenir una llista de textos, un per a cada columna, tret del cas de les
columnes «iscorrect» i «ishidden». Els textos especifiquen el format que es fa servir
per a mostrar els valors de les cel·les; actualment només s\'admeten els formats
«%s\'» per a text en general (que és netejat i envoltat en un element «pre») i «%h» per a
valors HTML que s\'haurien de mostrar directament.
El botó «showdifferences» fa que es mostri el botó «Mostra les diferències»
després de la taula de resultats si la puntuació obtinguda no és 1.0.
El camp «showoutputonly», si és cert, s\'utilitza quan la pregunta s\'ha de fer servir només per mostrar la sortida i potser imatges d\'una execució, sense puntuació.
La variable «graderstate» és un valor de text que l\'autor de la pregunta pot fer servir
per passar informació de l\'avaluació entre els intents de la pregunta. Si s\'inclou a la
resposta d\'avaluació d\'una tramesa, estarà disponible a la tramesa següent a la
variable Twig «QUESTION.stepinfo.graderstate».';
$string['graph_ui_invalidserialisation'] = 'GraphUI: serialització no vàlida';
$string['graphhelp'] = '- Feu doble clic a un espai en blanc per crear un node/estat nou.
- Feu doble clic a un node existent per «marcar-lo», p. ex., com a estat d\'acceptació a màquines d\'estat finites. Feu doble clic una altra vegada per desmarcar-lo.
- Cliqueu i arrossegueu per moure un node.
- Feu Alt-clic (o Ctrl-Alt-clic) i arrossegueu per moure un (sub)graf.
- Feu Maj-clic dins un node i arrossegueu cap a un altre node per crear un enllaç.
- Feu Maj-clic a un espai en blanc, arrosegueu cap a un enllaç d\'entrada (només a màquines d\'estats finits).
- Cliqueu i arrossegueu un enllaç per alterar-ne la corba.
- Cliqueu a un enllaç o node per canviar-ne el text.
- Cliqueu al text d\'un enllaç i arrossegueu per moure\'l.
- Escriviu _ seguit d\'un nombre per escriure\'l en subíndex.
- Escriviu \\epsilon per escriure el caràcter èpsilon (i semblant amb \\alpha, \\beta, etc.).
- Feu clic a un enllaç o node i després premeu la tecla de supressió per esborrar-lo (o tecla de funció-tecla de supressió en un Mac).
- Feu Ctrl-Z per desfer i Ctrl-Shift-Z per refer canvis.';
$string['graphui_fontsize_descr'] = 'La mida de la lletra en punts que es fa servir per a les etiquetes dels nodes i arestes.';
$string['graphui_helpmenutext_descr'] = 'Text que, si no és buit, substitueix el menú d\'ajuda estàndard definit a les cadenes d\'idioma de CodeRunner';
$string['graphui_isdirected_descr'] = 'Cert si les arestes són dirigides';
$string['graphui_isfsm_descr'] = 'Cert si el graf representa una màquina d\'estats finits, en aquest cas conté una aresta d\'entrada des d\'enlloc (l\'aresta d\'inici) i pot tenir nodes d\'«acceptació»';
$string['graphui_lockedgelabels_descr'] = 'Cert per impedir que l\'estudiant editi les etiquetes de les arestes. Això també impedeix que cap aresta nova tingui etiquetes.';
$string['graphui_lockedgepositions_descr'] = 'Si és cert impedeix que l\'estudiant arrossegui arestes per canviar-ne la curvatura. Possiblement és útil si el quadre de resposta està precarregat amb un graf en el qual l\'estudiant ha de fer anotacions canviant les etiquetes dels nodes o arestes, o afegint-hi o eliminant-ne arestes. També assegura que les arestes afegides per un estudiant siguin rectes, per exemple, per dibuixar un polígon a partir d\'un conjunt de punts donats. Teniu en compte que encara es poden afegir i eliminar arestes. Vegeu lockedgeset.';
$string['graphui_lockedgeset_descr'] = 'Si és cert impedeix que l\'estudiant afegeixi o elimini arestes.';
$string['graphui_locknodelabels_descr'] = 'Si és cert, impedeix que l\'estudiant editi les etiquetes dels nodes. Això també impedeix que els nodes nous tinguin etiquetes no buides.';
$string['graphui_locknodepositions_descr'] = 'Si és cert, impedeix que l\'estudiant mogui nodes. És útil quan el quadre de resposta està precarregat amb un graf en el qual l\'estudiant ha de fer anotacions canviant les etiquetes de nodes o arestes, o afegint-hi o esborrant-ne arestes. Tingueu en compte que encara es poden afegir i esborrar nodes. Vegeu locknodeset.';
$string['graphui_locknodeset_descr'] = 'Si és cert, impedeix que l\'estudiant afegeixi o elimini nodes o canviï el tipus del node des de o cap a acceptadors.';
$string['graphui_noderadius_descr'] = 'El radi d\'un node en píxels';
$string['graphui_textoffset_descr'] = 'El desplaçament en píxels de l\'etiqueta d\'un enllaç des de l\'enllaç (obsolet - feu servir arrossegar).';
$string['hidden'] = 'Amagat';
$string['hidecheck'] = 'Amaga la comprovació';
$string['hidedetails'] = 'Amaga els detalls';
$string['hidedifferences'] = 'Amaga les diferències';
$string['hiderestiffail'] = 'Amaga la resta si falla';
$string['hoisttemplateparams'] = 'Eleva els paràmetres de la plantilla';
$string['howtogetmore'] = 'Per obtenir informació més detallada, deseu la pregunta amb la casella «Valida en desar» desmarcada i comproveu-ho manualment';
$string['htmlui_enable_in_editor_descr'] = 'Si és cert, fa servir la IU per mostrar la resposta d\'exemple i la resposta precarregada definides al formulari d\'edició de la pregunta, en comptes de la versió serialitzada. Establiu-ho a fals si voleu fer servir Twig en el camp HTML src.';
$string['htmlui_html_src_descr'] = 'Estableix el camp src per al codi HTML. Ha de ser o «globalextra» o «prototypeextra».';
$string['htmlui_sync_interval_secs_descr'] = 'L\'interval de temps en segons entre crides per sincronitzar els continguts de la IU amb la resposta de la pregunta. 0 per a no sincronitzar automàticament.';
$string['htmluiloadfail'] = 'El connector d\'IU HTML no ha pogut inicialitzar-se. Probablement la cadena d\'estat JSON és no vàlida.';
$string['ideone_pass'] = 'Contrasenya del servidor Ideone';
$string['ideone_pass_desc'] = 'La contrasenya a fer servir en connectar amb el servidor Ideone desfasat (si la zona de proves Ideone està activada)';
$string['ideone_user'] = 'Usuari del servidor Ideone';
$string['ideone_user_desc'] = 'El nom d\'inici de sessió a fer servir en connectar amb el servidor Ideone desfasat (si la zona de proves Ideone està activada)';
$string['illegalformat'] = 'Format il·legal ({$a->format}) a columnformats';
$string['illegaluiparamname'] = 'No són paràmetres vàlids per a la IU {$a->uiname} els següents:';
$string['info_unavailable'] = 'La informació del tipus de pregunta no està disponible per a preguntes personalitzades.';
$string['inputcolhdr'] = 'Entrada';
$string['insufficientattachments'] = 'No hi ha prou fitxers adjunts, se\'n requereixen {$a}.';
$string['is_prototype'] = 'Fes servir com a prototipus';
$string['iscombinatortemplate'] = 'És una plantilla combinada';
$string['jobe_apikey'] = 'Clau de l\'API del Jobe';
$string['jobe_apikey_desc'] = 'La clau API s\'inclourà a totes les peticions REST cap al servidor Jobe (si és necessari). Màxim 20 caràcters. Deixeu-la en blanc per ometre la clau API de les peticions';
$string['jobe_canterbury_html'] = '<p style=\'color:gray; font-style:italic; font-size:smaller\'>Executat al servidor Jobe de la Universitat de Canterbury.</p>';
$string['jobe_host'] = 'Servidor Jobe';
$string['jobe_host_desc'] = 'El nom d\'amfitrió del servidor Jobe, amb el número de port si és diferent de 80, p. ex. jobe.nomservidor.edu:4010. L\'URL per a les peticions a Jobe s\'obté per defecte prefixant aquest text amb http:// i afegint-hi /jobe/index.php/restapi/<REST_METHOD>. Podeu especificar el protocol https:// davant del nom del servidor (p. ex. https://jobe.nomservidor.edu) si el servidor Jobe està darrere un servidor intermediari (proxy) invers que fa de terminació SSL. Es poden indicar múltiples servidors Jobe, separats per un punt i coma, per gestionar càrregues superiors: se\'n triarà un aleatòriament.';
$string['jobe_host_ws'] = 'Servidor Jobe a fer servir per a serveis web';
$string['jobe_host_ws_desc'] = 'El servidor de la zona de proves per a serveis web farà servir qualsevol zona de proves configurada per al llenguatge especificat. Això és sempre virtualment un servidor Jobe, i el servidor Jobe específic que es farà servir és configurat a través de la interfície d\'administració (a dalt).
Amb tot, per tenir una millor seguretat amb el servei web, és millor fer servir un servidor Jobe alternatiu, definit per aquest camp. És possible definir múltiples servidors Jobe, separats per un punt i coma, per gestionar càrregues superiors: se\'n tria un de manera aleatòria. Deixeu-lo en blanc per fer servir el servidor per defecte.';
$string['jobe_warning_html'] = '<p style=\'background-color:yellow\'>Executat al servidor Jobe de la Universitat de Canterbury. Només és per fer proves inicials. Establiu el vostre propi servidor Jobe al més aviat possible. Vegeu <a href=\'https://github.com/trampgeek/moodle-qtype_coderunner/blob/master/Readme.md#sandbox-configuration\' target=\'_blank\'>això</a>.</p>';
$string['language'] = 'Llenguatge de la zona de proves';
$string['languages'] = 'Llenguatges';
$string['languages_help'] = 'El llenguatge de la zona de proves és el llenguatge de programació que es fa servir
per executar la tramesa. Normalment, no hauria de ser necessari canviar el valor
que hi ha a la plantilla mare; canvieu-lo sota el vostre risc.

El llenguatge de l\'Ace és el llenguatge que fa servir l\'editor de codi Ace (si està activat) per escriure la resposta de l\'estudiant.
Per defecte és el mateix que el llenguatge de la zona de proves; introduïu un valor diferent
només si el llenguatge de la plantilla és diferent del llenguatge en el qual
s\'espera que l\'estudiant escrigui la seva solució (p. ex.: si es fa servir una plantilla en Python
per preprocessar el programa d\'un estudiant a C i llavors executar-lo a un subprocés).

Les preguntes de multillenguatge, aquelles en les quals els estudiants poden respondre en
més d\'un llenguatge, s\'activen establint el llenguatge de l\'Ace a una llista de llenguatges separada per comes.
Als estudiants se\'ls mostra un menú desplegable per triar el llenguatge
en què volen escriure la seva resposta. Si exactament un dels llenguatges
té un asterisc (\'\\*\') afegit, aquest és el llenguatge que es tria per defecte,
que se selecciona com a estat inicial del menú desplegable. Per exemple,
un valor de llenguatge d\'Ace "C,C++,Java\\*,Python3" permetria als estudiants enviar en
C, C++, Java o Python3, però el menú desplegable mostraria inicialment Java, que
seria l\'opció per defecte. Si no s\'especifica cap opció per defecte l\'estat
inicial de la llista desplegable és buit i l\'estudiant ha de triar un llenguatge.
Les preguntes multillenguatge necessiten una plantilla especial que faci servir la variable de plantilla {{ANSWER\\_LANGUAGE}} per controlar com executar el codi de l\'estudiant. Vegeu el tipus de
pregunta predefinida multillenguatge. La variable {{ANSWER\\_LANGUAGE}} es defineix
<i> només</i> a les preguntes multillenguatge.

Si l\'autor de la pregunta vol subministrar una resposta d\'exemple a una pregunta multillenguatge,
s\'ha d\'escriure en el llenguatge per defecte, si s\'ha especificat, o en el
primer de la llista de llenguatges permesos, si no.';
$string['languageselectlabel'] = 'Llenguatge';
$string['legacyuiparams'] = 'Els paràmetres de la IU ja no es poden definir al camp de paràmetres de la plantilla. Moveu el contingut següent al camp de paràmetres de la IU:';
$string['legacyuiparams2'] = 'Els paràmetres de la IU ja no es poden definir al camp de paràmetres de la plantilla. Moveu el contingut següent al camp de paràmetres de la IU, i esborreu el prefix «{$a->uiname}_»:';
$string['listprototypeduplicates'] = 'ID de la pregunta: {$a->id} <ul><li>Nom: {$a->name}</li><li>Categoria: {$a->category}</li></ul>';
$string['loadprototypeerror'] = 'S\'ha tornat al tipus de pregunta: «{$a->oldtype}» <br>No s\'ha pogut carregar el tipus de pregunta «{$a->crtype}» perquè el prototipus no és únic a les preguntes següents:</p>{$a->outputstring}';
$string['mark'] = 'Puntuació';
$string['marking'] = 'Assignació de punts';
$string['markinggroup'] = 'Puntuació';
$string['markinggroup_help'] = 'Si «Tot o res» està seleccionat, tots els casos de prova s\'han de complir
perquè la tramesa pugui rebre una puntuació. Si no, la puntuació s\'obté
sumant les puntuacions de tots els casos de prova que tenen èxit
dividit entre la puntuació màxima possible.
La puntuació per cada cas de prova pot especificar-se només si «Tot o res»
no està seleccionat. Si es fa servir una plantilla de qualificació que atorga
punts parcials a casos de prova, «Tot o res» hauria d\'estar generalment desmarcat.

El règim de penalització és obligatori i és una llista separada per comes de penalitzacions (en percentatge)
a aplicar a trameses successives. Són absolutes, no acumulatives. Com a
cas especial, la darrera penalització pot ser «...» per expressar «amplia les dues
penalitzacions anteriors a una progressió aritmètica fins a 100». Per exemple,
<code>0,5,10,30,...</code> és equivalent a <code>0,5,10,30,50,70,90,100</code>.
Si hi ha més trameses que penalitzacions definides, es fa servir el darrer valor.
Es poden fer servir espais en lloc de comes com a separadors.

Un administrador del sistema pot establir el règim de penalització per defecte a tot el lloc fent servir Administració del lloc > Connectors > Tipus de preguntes > CodeRunner.

Cal establir el règim de penalització a «0» perquè les trameses no tinguin cap penalització.

El règim de penalització és ignorat i no s\'apliquen penalitzacions si el qüestionari
està configurat amb el mode de comportament «Adaptatiu (sense penalitzacions)».';
$string['maxfilesize'] = 'Mida màxima de fitxer (bytes)';
$string['maxfilesize_help'] = 'Selecciona la mida màxima dels fitxers adjunts (en bytes). Permetre carregar fitxers grossos amb classes grosses pot tenir un impacte en el rendiment i l\'ús de disc als servidors de Moodle i Jobe.';
$string['memorylimit'] = 'Límit de memòria (MB)';
$string['missinganswers'] = 'falten respostes';
$string['missingorbadfraction'] = 'La fracció és errònia o falta a la sortida de la plantilla de qualificació. La sortida ha estat: {$a->output}';
$string['missingoutput'] = 'Heu d\'indicar la sortida esperada d\'aquest cas de prova.';
$string['missingprototype'] = 'Aquesta pregunta s\'havia definit de tipus «{$a->crtype}», però el prototipus no existeix o no està disponible en aquest context. Hauríeu de cancel·lar i provar de (re)instal·lar el prototipus.
Continueu només si sabeu què esteu fent.';
$string['missingprototypes'] = 'Falten prototipus';
$string['missingprototypewhenrunning'] = 'La pregunta és incorrecta (el prototipus «{$a->crtype}» falta o està duplicat). No es pot executar.';
$string['missinguiparams'] = 'Els paràmetres següents de la IU són necessaris, però no estan definits:';
$string['morehidden'] = 'Alguns casos de prova ocults han fallat també.';
$string['multipledefaults'] = 'Com a molt es pot seleccionar un llenguatge per defecte';
$string['multipleprototypes'] = 'S\'han trobat múltiples prototipus per «{$a->crtype}»';
$string['mustrequirefewer'] = 'No podeu demanar més adjunts dels que permeteu.';
$string['nearequalitygrader'] = 'Coincidència gairebé exacta';
$string['negativeorzeromark'] = 'La puntuació ha de ser superior a zero';
$string['nodetailsavailable'] = 'Seleccioneu un tipus de pregunta per veure l\'ajuda detallada.';
$string['noerrorsallowed'] = 'El vostre codi ha de passar totes les proves per obtenir una puntuació. Torneu-ho a intentar.';
$string['nolanguage'] = 'Seleccioneu un llenguatge abans';
$string['nonnumericmark'] = 'Puntuació no numèrica';
$string['nooutput'] = '< No hi ha sortida! >';
$string['noqtype'] = 'No s\'ha seleccionat cap tipus de pregunta';
$string['nosampleanswer'] = 'No hi ha cap resposta d\'exemple';
$string['nouiparameters'] = 'La IU {$a->uiname} no accepta paràmetres.';
$string['options'] = 'Opcions';
$string['ordering'] = 'Ordenació';
$string['outputdisplayarea_invalid_json'] = 'Error en analitzar JSON. Sortida de l\'embolcall:';
$string['outputdisplayarea_invalid_mode'] = 'Mode de mostrar sortida no vàlid:';
$string['outputdisplayarea_missing_image_extension'] = 'No es pot mostrar la imatge, incloeu l\'extensió al nom del fitxer:';
$string['outputdisplayarea_missing_json_fields'] = 'Al JSON per mostrar la sortida hi manquen camps necessaris:';
$string['overloadoninit'] = 'Una sobrecàrrega del servidor de la zona de proves ha impedit la inicialització de la pregunta';
$string['pass'] = 'Èxit';
$string['passes'] = 'té èxit';
$string['penaltyregime'] = '(règim de penalització: {$a} %)';
$string['penaltyregimelabel'] = 'Règim de penalització:';
$string['pluginname'] = 'CodeRunner';
$string['pluginname_help'] = 'Fes servir el menú desplegable «Tipus de pregunta» per seleccionar el llenguatge de programació i tipus de pregunta que es farà servir per executar la tramesa de l\'estudiant.
Especifica el problema pel qual l\'estudiant ha d\'escriure el codi, llavors defineix un conjunt de casos de prova per provar la tramesa de l\'estudiant';
$string['pluginname_link'] = 'question/type/coderunner';
$string['pluginnameadding'] = 'S\'està afegint una pregunta de CodeRunner';
$string['pluginnameediting'] = 'S\'està editant una pregunta de CodeRunner';
$string['pluginnamesummary'] = 'CodeRunner: executa codi tramès per l\'estudiant en una zona de proves';
$string['precheck'] = 'Precomprovació';
$string['precheck_all'] = 'Tots';
$string['precheck_disabled'] = 'Desactivat';
$string['precheck_empty'] = 'Buit';
$string['precheck_examples'] = 'Exemples';
$string['precheck_help'] = 'Estableix quin botó està disponible perquè els estudiants trametin respostes. Normalment es mostra com a mínim un botó de «Comprova», però aquest es pot amagar (p. ex.: en fer servir contextos de retroalimentació diferida) si se selecciona <i>Amaga la comprovació</i>.

Si s\'activa «Precomprovació», els estudiants tindran un botó addicional a l\'esquerra del botó habitual de «Comprova» per donar-los una opció per comprovar, sense penalitzacions, el seu codi amb un subconjunt dels casos de prova. Llavors,<ul>
<li>Si se selecciona «Buit», es farà una sola execució
amb la comprovació per cas de prova fent servir un cas de prova en què tots els
camps (testcode, stdin, expected, etc.) són la cadena buida. Una sortida no buida
s\'interpreta com un error de la precomprovació. Feu-ho servir amb compte:
alguns tipus de pregunta no gestionen això correctament: p. ex., preguntes que demanen escriure un programa que generi sortida.
</li><li>Si se selecciona «Exemples», el codi es comprovarà
amb els casos de prova que s\'han marcat amb «fes servir com a exemple».
</li><li>Si se selecciona «Seleccionat», s\'afegirà un element addicional a la IU a cada cas de prova
per permetre que l\'autor seleccioni un subconjunt específic de casos de prova.
</li><li>Si se selecciona «Tot», el codi es comprovarà amb tots els casos de prova (tot i que el seu comportament
pot ser diferent de la comprovació normal, si el codi de la plantilla tria fer-ho així).
</ul>
La plantilla pot comprovar si l\'execució és una precomprovació fent servir el paràmetre Twig {{ IS_PRECHECK }}, que serà «1» a execucions de precomprovació i «0» altrament.';
$string['precheck_only'] = 'Només precomprovació';
$string['precheck_selected'] = 'Seleccionat';
$string['precheckingemptyset'] = 'S\'estan precomprovant exemples, però no n\'hi ha cap!';
$string['privacy:metadata'] = 'El connector del tipus de pregunta CodeRunner no desa cap dada personal.';
$string['proceed_at_own_risk'] = 'Editeu un prototipus de pregunta predefinit!? Continueu sota la vostra responsabilitat!';
$string['prototypeQ'] = 'És un prototipus?';
$string['prototype_duplicate_alert'] = 'Prototipus duplicat: hi ha {$a} prototipus duplicats. Només se\'n pot carregar un.';
$string['prototype_error'] = '*** HA FALLAT LA CÀRREGA DE PROTOTIPUS. NO DESEU AIXÒ! ***';
$string['prototype_load_failure'] = 'S\'ha produït un error en carregar el prototipus:';
$string['prototype_missing_alert'] = 'Falta el prototipus: comprova si el prototipus {$a} existeix en aquest context.';
$string['prototypecontrols'] = 'Prototipatge';
$string['prototypecontrols_help'] = 'Si «És un prototipus» és cert, aquesta pregunta esdevé un prototipus per a altres preguntes. Després de desar-la, el nom d\'aquesta pregunta apareixerà a la llista desplegable de tipus de preguntes. Les preguntes noves basades en aquest tipus heretaran per defecte tots els atributs personalitzats indicats per a aquesta pregunta. Els canvis posteriors que es facin en aquesta pregunta també afectaran les preguntes que se\'n derivin, tret que estiguin també personalitzades, la qual cosa romprà la connexió.

L\'herència basada en el prototipus només té un nivell: aquesta pregunta, en ser desada com a prototipus, perd la connexió amb el tipus de pregunta en la qual es basa, amb la qual cosa n\'esdevé un tipus base nou en si mateixa. Teniu en compte que en exportar preguntes derivades heu d\'assegurar-vos que aquesta pregunta també s\'inclogui en l\'exportació, o la pregunta derivada quedarà òrfena en ser importada en un altre sistema. Així mateix, si sou responsable de mantenir quines preguntes feu servir com a prototipus, és molt recomanable que canvieu el nom de la pregunta a alguna cosa com «PROTOTIPUS_per_al_meu_tipus_nou_de_pregunta» per facilitar-ne el manteniment posterior.';
$string['prototypeexists'] = 'És un prototipus; no es pot canviar el tipus de pregunta.';
$string['prototypeextra'] = 'Dades addicionals del prototipus';
$string['prototypeextra_help'] = 'És un camp de text de propòsit general que poden fer servir els autors de tipus de preguntes, com les dades addicionals globals, però que és part de l\'estat del prototipus. Es troba disponible per a l\'autor de la plantilla com a {{ QUESTION.prototypeextra }}.';
$string['prototypeusage'] = 'Ús del prototipus de pregunta CodeRunner per al curs {$a}';
$string['prototypeusageindex'] = 'Cursos disponibles';
$string['qWrongBehaviour'] = 'Feu servir el Mode adaptatiu per a totes les preguntes CodeRunner o el rendiment es veurà afectat. Per exemple, totes les preguntes d\'una pàgina s\'hauran de tornar a qualificar quan la pàgina es torna a mostrar.';
$string['qtype_c_function'] = '<p>Un tipus de pregunta per a preguntes d\'escriure una funció en C.
S\'espera que la resposta de l\'estudiant sigui una funció en C completa, però opcionalment
pot estar precedida per un altre codi en C autocontingut com a directives de preprocessador i
funcions de suport.</p>
<p>El codi de prova per a aquestes preguntes típicament crida la funció de l\'estudiant amb
alguns arguments de prova i n\'imprimeix el resultat, com ara
<pre>printf("%d\\n", algunaFuncioInt(blah1, blah2))</pre>
El camp <i>Esperat</i> dels casos de prova conté la sortida esperada del cas de prova.</p>
<p>Si no hi ha cap entrada estàndard subministrada a cap dels casos de prova,
es construeix un únic programa de prova, que consisteix en:</p>
<ol>
<li>Les inclusions estàndard següents (#include): stdlib.h, ctype.h, string.h, stdbool.h, math.h</li>
<li>La resposta de l\'estudiant.</li>
<li>Una seqüència de blocs envoltats de claus per a cadascun dels casos de prova.
Cada bloc conté només el codi de prova del cas de prova. També s\'afegeix una sentència <i>printf</i>
entre blocs de codi per imprimir un separador especial que es fa servir
per dividir la sortida en els casos de prova individuals.</li>
</ol>
<p>No obstant això, si cap dels casos de prova té una entrada estàndard no buida, s\'executen programes de prova múltiples, un per cada cas de prova.
</p><p>El camp <i>addicional</i> dels casos de prova s\'ignora.</p>';
$string['qtype_c_program'] = '<p>Es fa servir per a preguntes d\'escriure un programa en C, on no hi ha un codi per cada cas de prova, i les diferents proves consisteixen a fer servir diferents dades per a l\'entrada estàndard (stdin). S\'espera que la resposta de l\'estudiant sigui un programa complet que pugui executar-se, i és executat sense cap modificació per CodeRunner, una vegada per a cada cas de prova. Els valors dels camps de codi de prova i addicional de cada cas de prova són ignorats.</p><p>Si necessiteu definir arguments especials per a la compilació o l\'enllaçat per a aquesta pregunta, podeu personalitzar-la (feu clic a l\'opció
Personalitza), obriu la secció <i>Personalització avançada</i> i especifiqueu
els valors necessaris al camp <i>Zona de proves &gt; Paràmetres</i>. Per exemple<pre>{"linkargs":["-lm"]}</pre>per enllaçar amb la biblioteca matemàtica.</p>';
$string['qtype_cpp_function'] = '<p>Un tipus de pregunta per a preguntes d\'escriure una funció en C++.
S\'espera que la resposta de l\'estudiant sigui una funció C++ completa, però opcionalment
pot estar precedida per altre codi C++ autocontingut com directives de preprocessador i
funcions de suport.</p>
<p>A cada cas de prova, el codi de prova per a aquestes preguntes típicament crida la funció de l\'estudiant amb
alguns arguments de prova i n\'imprimeix el resultat, com
<pre>cout << someIntFunction(blah1, blah2))</pre>
El camp <i>Esperat</i> dels casos de prova conté la sortida esperada del cas de prova.</p>
<p>Si no hi ha entrada estàndard subministrada a cap dels casos de prova,
es construeix un únic programa de prova, que consisteix en:</p>
<ol>
<li>Els següents #include estàndard: iostream, fstream, string, math, vector i algorithm</li>
<li><code>using namespace std;</code></li>
<li>La resposta de l\'estudiant.</li>
<li>Una seqüència de blocs envoltats de claus per cadascun dels casos de prova.
Cada bloc conté el camp addicional del cas de prova (habitualment buit)
seguit del camp del codi de prova. També s\'afegeix una sentència <i>printf</i>
entre blocs de codi per imprimir un separador especial que es fa servir
per dividir la sortida en els casos de prova individuals.</li>
</ol>
<p>Però, si cap dels casos de prova té una entrada estàndard no buida, s\'executen múltiples programes, un per cada cas de prova.
</p>';
$string['qtype_cpp_program'] = '<p>Es fa servir per a preguntes d\'escriure un programa en C++, on
no hi ha un codi per cada cas de prova, i les diferents proves consisteixen a fer servir diferents
dades per a l\'entrada estàndard (stdin). S\'espera que la resposta de l\'estudiant sigui un programa complet
que pugui executar-se, i s\'executa sense cap modificació per part de CodeRunner,
una vegada per cada cas de prova. Els valors dels camps de codi de prova i addicional de cada
cas de prova són ignorats.</p>';
$string['qtype_directed_graph'] = '<p>Un tipus de pregunta en Python3 que demana a l\'estudiant que dibuixi
un graf dirigit que satisfaci alguna especificació. L\'autor de la pregunta ha d\'escriure el codi Python3 necessari per comprovar el graf resultant.</p><p>Tingueu en compte que no és realment necessari fer servir aquest tipus de pregunta per a grafs dirigits, ja que la funcionalitat és subministrada principalment pel connector GraphUI. Si el preprocessament del graf dut a terme per aquest tipus de pregunta no satisfà les vostres necessitats, podeu fer servir una pregunta Python3 normal (o en un altre llenguatge), establir la IU a GraphUI i analitzar la versió serialitzada del graf en JSON (la variable Twig STUDENT_ANSWER).
De totes maneres, aquest tipus de pregunta dona un exemple de com es fa servir el connector GraphUI. Feu clic a <i<Personalitza</i> per veure el codi de la plantilla.</p>
<p>L\'especificació demanarà a l\'estudiant que dibuixi un graf dirigit que satisfaci uns requisits concrets. Per exemple, podria ser un DFA (autòmat d\'estat finit determinista) o una màquina de Turing. El cas de prova i/o el camp addicional es faran servir per analitzar el graf i imprimir un missatge per a l\'estudiant, com ara «D\'acord» si el graf és correcte o un missatge d\'error adient si no ho és.</p>
<p>La plantilla per a aquesta pregunta analitza el graf serialitzat en JSON i n\'extrau la topologia a través del diccionari d\'adjacència <i>graph</i>. Aquesta variable està disponible als camps de codi de prova i addicional del cas de prova. Les claus del diccionari són noms de nodes, si en tenen, o etiquetes identificadores arbitràries en la forma #1, #2, etc, si no. Els valors del diccionari són llistes d\'arestes sortints, ordenades pel nom del node veí o el seu identificador, cada aresta és una tupla (idVeí, etiquetaAresta).</p><p>Cada entrada a la llista d\'adjacència és una tupla (nomOIdNode, veïns) on veïns és una llista de tuples (nomOIdNodeVeí, etiquetaAresta). Si es dona nom als nodes, aquests es fan servir com a identificadors de nodes, altrament es fan servir els noms #1, #2, etc. La llista d\'adjacència i la llista de veïns s\'ordenen segons el nom o l\'identificador dels nodes.</p>
<p>La plantilla és combinada: el <i>codi de prova<i> i
<i>addicional</i> s\'executen per a cada cas de prova.</p><p>Com a exemple
senzill, si l\'especificació només demanés «Dibuixeu un graf dirigit amb dos nodes etiquetats A i B, amb una aresta d\'A a B», un cas de prova adient (tot i que sense missatges d\'error que ajudin gaire) podria ser:</p><pre>
if set(graph.keys()) == {\'A\', \'B\'} and len(graph[\'A\']) == 1 and len(graph[\'B\']) == 0 and graph[\'A\'][0][0] == \'B\':
    print(\'OK\')
else:
    print(\'Nope\')
</pre>
<p>Alternativament, hi podria haver un conjunt de casos de prova, cadascun dels quals comprovés un dels aspectes de l\'especificació. Per exemple, el primer cas de prova podria imprimir les claus ordenades i esperaria obtenir \'A\', \'B\'. El segon cas de prova podria imprimir les arestes sortints des de node \'A\', etc.</p>';
$string['qtype_java_class'] = '<p>Una pregunta per a escriure una classe Java, on l\'estudiant envia
una classe completa a la seva resposta. Cada prova típicament instancia un objecte de la classe
especificada i el fa servir per a una o més proves. No és un tipus de pregunta combinada, això vol dir que
cada cas de prova es duu a terme en una execució independent a la zona de proves.
</p><p>El programa generat per a cada cas de prova consisteix en la resposta de l\'estudiant, amb
l\'atribut&nbsp;<i>public</i> eliminat si hi era present. Aquesta (ara local)
definició de classe és seguida d\'una classe&nbsp;pública&nbsp;<i>__Tester__</i> que
té un mètode&nbsp;<i>main</i> que instancia la classe <i>__Tester__</i> i en crida
el seu mètode&nbsp;<i>runTests</i>. El mètode&nbsp;<i>runTests</i> simplement conté el
codi del cas de prova. Vegeu la plantilla per tenir-ne més detalls.</p><p>Tingueu en compte que
l\'algorisme que es fa servir per eliminar l\'atribut <i>public</i> de la classe enviada per l\'estudiant
és simple; només funciona si les paraules <i>public class</i> existeixen exactament
una vegada en el codi de l\'estudiant, separades per un sol espai.</p>
<p>El camp addicional del cas de prova és ignorat.</p>
<p>Aquest tipus de pregunta és ineficient si hi ha molts casos de prova, ja que s\'envia
un procés de compilació i execució a la zona de proves per a cadascun. Això es podria
resoldre escrivint un tipus de pregunta combinada. Vegeu la documentació
de CodeRunner (coderunner.org.nz) per a més informació.</p>';
$string['qtype_java_method'] = '<p> Es fa servir per a preguntes d\'escriure un mètode en Java, on es demana
a l\'estudiant que escrigui un mètode que és essencialment una funció independent.
El codi de prova típicament conté una o dues línies de codi que
(aparentment) criden el mètode enviat per l\'estudiant, com a C. Internament, la
plantilla construeix una classe principal que conté el mètode enviat per l\'estudiant
(i qualsevol altre mètode de suport, si en fan cap) més un mètode&nbps;<i>runTests</i>
que conté els casos de prova. El mètode principal de la classe construeix una
instància de la classe principal i n\'executa el mètode <i>runTests</i>. Vegeu el codi de la plantilla per a més detalls.</p>';
$string['qtype_java_program'] = '<p>Una pregunta d\'escriure un programa en Java, on l\'estudiant
envia un programa complet a la seva resposta. El programa és compilat i
executat per a cada cas de prova.
El codi de prova no es fa servir; només es tenen en compte les dades d\'entrada de cada cas de prova. El camp addicional tampoc no es fa servir.</p>
<p>Aquest tipus de pregunta pot esdevenir molt ineficient si hi ha molts casos de prova, ja que
cadascun necessita un cicle complet de compilació i execució al servidor Jobe. És
possible incloure tots els casos de prova en un sol script Python que s\'envia al
servidor de la zona de proves, compila el programa una sola vegada i l\'executa per a cada cas de prova.
Per a més detalls sobre aquesta tècnica, vegeu el fòrum d\'autors de preguntes a coderunner.org.nz.</p>';
$string['qtype_multilanguage'] = '<p>Una pregunta d\'escriure un programa
en la qual l\'estudiant pot enviar una resposta en qualsevol dels diversos llenguatges diferents.
Els llenguatges C, C++, Java, Python3, PHP i JavaScript (nodejs) es troben disponibles
per defecte als servidors Jobe i haurien de funcionar directament. Aquest tipus
de pregunta també permet fer servir perl, ruby, golang i C#, però és necessari
instal·lar compiladors i/o intèrprets addicionals al servidor Jobe.
Per exemple, <code>sudo apt-get install mono-mcs</code> per instal·lar
el compilador mono C#, mcs.</p>
<p>Si l\'autor de la pregunta indica una resposta d\'exemple, poden especificar el llenguatge
de la seva resposta en una de tres maneres. <ol><li>Afegint un paràmetre de la plantilla
com <code>{"answer_language": "cpp"}</code> per especificar quin llenguatge fan servir.</li>
<li>Fent servir el llenguatge per defecte, si s\'ha establert. El llenguatge per defecte es marca
amb un asterisc després del nom del llenguatge al camp «Llenguatge de l\'Ace» al
tauler Personalització avançada, si l\'autor fa servir una pregunta personalitzada.
Si no, no hi ha cap llenguatge per defecte.</li>
<li>Fent servir el primer llenguatge enumerat al camp «Llenguatge de l\'Ace» al tauler Personalització avançada; per defecte és C.</li></p>
<p>Es poden afegir llenguatges addicionals, si són admesos pel servidor Jobe,
afegint el nom de llenguatge al camp «Llenguatge de l\'Ace» al formulari d\'edició
de la pregunta i ampliant la plantilla per gestionar aquest llenguatge nou.</p>
<p>El programa enviat és executat sense cap canvi per a cada cas de prova.
Els camps de codi de prova i addicional de cada cas de prova són ignorats.</p>';
$string['qtype_nodejs'] = '<p>Un tipus de pregunta en JavaScript, executat fent servir nodejs.
El programa que s\'executa comença amb la resposta de l\'estudiant.
A això s\'afegeix cadascun dels codis dels casos de prova, entre cadascun dels qual s\'imprimeix un separador. Amb tot, si hi ha cap cas de prova que faci servir una entrada estàndard,
es durà a terme una execució independent per a cada cas de prova.</p><p>
Si hi ha cap risc d\'efectes col·llaterals d\'un cas de prova que n\'afecti un de posterior,
podeu afegir una entrada estàndard a qualsevol cas de prova per imposar que
s\'executin els casos de prova independentment.</p>';
$string['qtype_octave_function'] = '<p>Un tipus de pregunta que especifica una funció en Octave,
la qual l\'estudiant ha de trametre completament. Cada cas de prova típicament crida
la funció de l\'estudiant amb arguments de prova i imprimeix el resultat o un
valor derivat d\'aquest. Si cap cas de prova té entrada estàndard, s\'executa un
programa que conté la resposta de l\'estudiant, la sentència <code>format free</code>
i el cas de prova de cada cas de prova, amb una sentència <i>disp</i> per
imprimir un separador entre les sortides dels casos de prova.</p><p>Si hi ha algun cas de prova que té entrada estàndard, cada cas de prova s\'executa per separat.</p>';
$string['qtype_pascal_function'] = '<p>Un tipus de pregunta en Pascal en què l\'estudiant
ha d\'escriure un procediment o una funció. El programa a executar consisteix en
la resposta de l\'estudiant seguida del codi de prova en un bloc <code>begin ... end.</code>.<br>
Aquest no és un tipus de pregunta combinada, així que es durà a terme una execució per a cada cas de prova.</p>';
$string['qtype_pascal_program'] = '<p>Un tipus de pregunta en Pascal en què l\'estudiant
ha d\'escriure un programa en Pascal complet. El programa és compilat i executat
una vegada per a cada cas de prova; s\'hi fa servir el camp d\'entrada estàndard
especificat a cada cas de prova i s\'ignoren els camps <i>testcode</i> i <i>extra</i>.</p>';
$string['qtype_php'] = '<p>Un tipus de pregunta en php en la qual l\'estudiant envia codi php.
En el cas més simple, el codi de l\'estudiant començarà amb <code>&lt;?php</code>
però <i>no tancarà l\'etiqueta PHP</i>. És important que aquesta etiqueta no es
tanqui: si inspeccioneu la plantilla veureu que la resposta de l\'estudiant és seguida
pels codis de prova dels casos de prova. Si voleu que l\'estudiant acabi el seu codi
tancant l\'etiqueta PHP, hauríeu d\'editar la plantilla per tornar a obrir l\'etiqueta PHP
abans de la seqüència de casos de prova.
</p><p>La sortida de cada cas de prova, que hauria de coincidir amb el camp <i>expected</i> de cada cas de prova, serà la sortida del codi PHP de l\'estudiant
(hi inclourà qualsevol contingut excepte les etiquetes &lt;?php...?&gt;) més la sortida
del codi de prova.</p><p>Inspeccioneu el codi de la plantilla
(fent clic a <i>Personalitza</i> per entendre tot això.</p>';
$string['qtype_python2'] = '<p>Un tipus de pregunta per a Python2, que admet preguntes del tipus
escriure una funció, escriure una classe o escriure un programa.
Per a cada cas de prova, la resposta de l\'estudiant és seguida del codi de prova.
Llavors, per exemple, si es demana a l\'estudiant que escrigui la definició d\'una
funció, la seva definició s\'executarà primer, seguida del codi de prova,
que típicament cridarà la funció i imprimirà el resultat o algun valor derivat d\'aquest.</p>
<p>Si no hi ha cap entrada estàndard a cap cas de prova, la pregunta engloba tots
els casos de prova en una sola execució, i imprimeix un separador entre les sortides
dels casos de prova. Teniu en compte que això no és necessàriament el mateix
que executar cada cas de prova per separat. Per exemple, si hi ha variables globals
definides al codi de l\'estudiant, aquestes retindran els valors entre execucions.
Si això pot ser un problema, el més senzill és definir entrada estàndard a un
dels casos de prova. Això imposarà que CodeRunner executi cada cas de prova per separat.</p>';
$string['qtype_python3'] = '<p>Un tipus de pregunta per a Python3, que admet preguntes del tipus
escriure una funció, escriure una classe o escriure un programa.
Per a cada cas de prova, la resposta de l\'estudiant és seguida del codi de prova.
Llavors, per exemple, si es demana a l\'estudiant que escrigui la definició d\'una
funció, la seva definició s\'executarà primer, seguida del codi de prova,
que típicament cridarà la funció i imprimirà el resultat o algun valor derivat d\'aquest.</p>
<p>Si no hi ha cap entrada estàndard a cap cas de prova, la pregunta engloba tots
els casos de prova en una sola execució, i imprimeix un separador entre les sortides
dels casos de prova. Teniu en compte que això no és necessàriament el mateix
que executar cada cas de prova per separat. Per exemple, si hi ha variables globals
definides al codi de l\'estudiant, aquestes retindran els valors entre execucions.
Si això pot ser un problema, el més senzill és definir entrada estàndard a un
dels casos de prova. Això imposarà que CodeRunner executi cada cas de prova per separat.</p>';
$string['qtype_python3_w_input'] = '<p>Un tipus de pregunta per a Python3, que admet preguntes del tipus
escriure una funció, escriure una classe o escriure un programa.
Es diferencia del tipus de pregunta lleugerament més senzill <i>python3</i> en el fet que
la funció <i>input</i> ha estat substituïda per una versió personalitzada que
repeteix l\'entrada estàndard a la sortida estàndard a mesura que és consumida.
Això fa que la sortida s\'assembli al que habitualment veuen els estudiants quan
proven el seu codi amb entrada per teclat.
Es recomana a comptes del tipus de pregunta <i>python3</i> a qualsevol
pregunta que faci servir <i>input</i> a cursos introductoris de programació,
en què és més probable que els estudiants es confonguin si no es mostra l\'entrada
estàndard en obtenir-la d\'un fitxer.</p><p>Un petit inconvenient d\'aquest tipus
de pregunta en comparació amb el tipus de pregunta <i>python3</i> és que els
missatges d\'error al codi de l\'estudiant tindran nombres de línies confosos, ja que
la funció que substitueix <i>input</i> s\'insereix abans del codi de l\'estudiant.</p>
<p>Per a cada cas de prova, la resposta de l\'estudiant és seguida del codi de prova.
Llavors, per exemple, si es demana a l\'estudiant que escrigui la definició d\'una
funció, la seva definició s\'executarà primer, seguida del codi de prova,
que típicament cridarà la funció i imprimirà el resultat o algun valor derivat d\'aquest.</p>
<p>Si no hi ha cap entrada estàndard a cap cas de prova, la pregunta engloba tots
els casos de prova en una sola execució, i imprimeix un separador entre les sortides
dels casos de prova. Teniu en compte que això no és necessàriament el mateix
que executar cada cas de prova per separat. Per exemple, si hi ha variables globals
definides al codi de l\'estudiant, aquestes retindran els valors entre execucions.
Si això pot ser un problema, el més senzill és definir entrada estàndard a un
dels casos de prova. Això imposarà que CodeRunner executi cada cas de prova per separat.</p>';
$string['qtype_sql'] = '<p>Un tipus de pregunta SQL, que fa servir sqlite3, executat des de Python3.
sqlite3 ha d\'estar instal·lat al servidor Jobe perquè aquest tipus de pregunta funcioni.</p>
<p>Se cerca al directori de treball un fitxer amb l\'extensió «.db». Si només
se\'n troba un, es fa servir com a base de dades sqlite3 per a tots els casos de prova.
Si n\'hi ha més d\'un, es mostrarà un missatge d\'error; una possible extensió és
fer servir fitxers db diferents per a cada prova, per exemple, per ordre.</p>
<p>Per a cada cas de prova, s\'executa un script sqlite3 d\'aquesta forma:</p>
 <pre>.mode column<br>.headers on<br>&lt;codi en el camp addicional&gt;<br>&lt;resposta de l\'estudiant&gt;<br>&lt;codi de prova&gt;</pre>
<p>Es fa servir una còpia nova del fitxer db a cada cas de prova.</p>
<p>El paràmetre de la plantilla <i>columnwidths</i> pot fer-se servir per establir
l\'amplària de les columnes de l\'informe. Per defecte, sqlite3 estableix l\'amplària
de cada columna al màxim de tres nombres: 10, l\'amplària de la capçalera i
l\'amplària de la primera fila de dades.
Si s\'especifica això als paràmetres de la plantilla,</p><pre><code>{"columnwidths": [10, 50, 10, 5]}
</code></pre>
<p>en comptes d\'això es faran servir amplàries de columna 10, 50, 10 i 5
per a les primeres quatre columnes.</p>';
$string['qtype_undirected_graph'] = '<p>Un tipus de pregunta a Python3 que demana a l\'estudiant que dibuixi
un graf no dirigit que satisfaci alguna especificació. </p>
<h4>Paràmetre de la plantilla</h4>
<p><b>extra</b>: es pot establir a <i>pretest</i> o <i>posttest</i>per tenir el codi <i>extra</i>
executat abans/després del codi de prova, respectivament. Per defecte: <i>posttest</i>, per a compatibilitat amb versions anteriors (originàriament el codi extra sempre s\'executava després del  codi de prova).</p>
<h4>Informació d\'ús</h4>
<p>L\'autor de la pregunta ha d\'escriure
el codi Python3 necessari per comprovar el graf resultant.</p><p>Tingueu en compte que no és realment necessari fer servir aquest tipus de pregunta per a grafs no dirigits, ja que la funcionalitat
és subministrada principalment pel connector GraphUI. Si el preprocessament del graf
dut a terme per aquest tipus de pregunta no satisfà les vostres necessitats, podeu fer servir una pregunta Python3 normal (o en un altre llenguatge), establir la IU a GraphUI i analitzar la versió serialitzada del graf en JSON (la variable Twig STUDENT_ANSWER).
De totes maneres, aquest tipus de pregunta dona un exemple de com fer servir
el connector GraphUI. Feu clic a <i<Personalitza</i> per veure el codi de la plantilla.</p>
<p>L\'especificació demanarà a l\'estudiant que dibuixi un graf no dirigit que satisfaci
uns requisits concrets: per exemple, un graf que representi un conjunt de ciutats
connectades per carreteres de doble sentit. El cas de prova i/o el camp addicional es
faran servir per analitzar el graf i imprimir un missatge per a l\'estudiant, com ara «OK» si el
graf és correcte o un missatge d\'error adient si no ho és.</p>
<p>La plantilla per a aquesta pregunta analitza el graf serialitzat en JSON i n\'extrau la topologia a través del diccionari d\'adjacència <i>graph</i>. Aquesta
variable es troba disponible als camps de codi de prova i addicional del cas de prova. Les claus
del diccionari són noms de nodes, si en tenen, o etiquetes identificadores arbitràries
en la forma #1, #2, etc., si no. Els valors del diccionari són llistes d\'arestes,
ordenades pel nom del node veí o el seu identificador; cada aresta és una tupla
(idVeí, etiquetaAresta).</p><p>Cada entrada a la llista d\'adjacència és una tupla
(nomOIdNode, veïns) on «veïns» és una llista de tuples
(nomOIdNodeVeí, etiquetaAresta). Si es dona nom als nodes, aquests es fan servir
com a identificadors de nodes; altrament es fan servir els noms #1, #2, etc. La llista
d\'adjacència i la llista de veïns s\'ordenen segons el nom o identificador dels nodes.</p>
<p>La plantilla és combinada: el <i>codi de prova<i> i
<i>addicional</i> s\'executen per a cada cas de prova. Amb el codi <i>extra</i> que, per defecte, s\'executa després del cas de prova (posttest).</p>
<p>Com a exemple
senzill, si l\'especificació només demanés «Dibuixeu un graf no dirigit amb dos nodes
etiquetats A i B, amb una aresta entre els dos nodes», un cas de prova adient (tot i que
sense missatges d\'error que ajudin gaire) podria ser:</p><pre>
if set(graph.keys()) == {\'A\', \'B\'} and len(graph[\'A\']) == 1 and len(graph[\'B\']) == 0 and graph[\'A\'][0][0] == \'B\':
    print(\'OK\')
else:
    print(\'Nope\')
</pre>
<p>De manera alternativa, hi podria haver un conjunt de casos de prova en què cadascun comprovaria un dels aspectes de l\'especificació. Per exemple, el primer cas de prova podria imprimir les claus ordenades i esperaria obtenir «A», «B». El segon cas de prova podria imprimir les arestes que connecten el node «A», etc.</p>';
$string['qtypehelp'] = 'Ajuda amb el tipus de pregunta';
$string['question_type_changed'] = 'S\'està canviant el tipus de pregunta. Feu clic a «OK» per actualitzar els camps de personalització, i a «Cancel·la» per mantenir les personalitzacions existents.';
$string['questioncheckboxes'] = 'Personalització';
$string['questioncheckboxes_help'] = 'Per personalitzar el tipus de pregunta, per exemple, per editar
la plantilla de la pregunta, els paràmetres de la interfície d\'usuari o de la zona de proves,
feu clic al botó «Personalitza» i llegiu l\'ajuda disponible als elements que es mostren
ara per a més informació.

Si s\'activa la casella de selecció de depuració de la plantilla, el programa generat que
s\'executa a la zona de proves Jobe es mostrarà a la sortida.';
$string['questionloaderror'] = 'No s\'ha pogut carregar la pregunta';
$string['questionpreview'] = 'Previsualització de la pregunta';
$string['questiontype'] = 'Tipus de pregunta';
$string['questiontype_help'] = 'Seleccioneu el tipus de pregunta.

Aquest quadre combinat us permet triar un dels tipus predefinits, que admeten
un llenguatge en particular i, en alguns casos, la zona de proves en la qual
s\'executaran els programes. Cada tipus de pregunta té una plantilla que defineix
com es construeix el programa executable a partir de les dades dels casos
de prova i de la resposta de l\'estudiant.

La plantilla pot visualitzar-se i personalitzar-se opcionalment fent clic al botó «Personalitza».

Si la casella de selecció de depuració de la plantilla està marcada, el programa
generat per a cada cas de prova es mostrarà a la sortida.';
$string['questiontype_required'] = 'Heu de triar el tipus de pregunta';
$string['questiontypedetails'] = 'Detalls del tipus de pregunta';
$string['regexgrader'] = 'Expressió regular';
$string['replacedollarscount'] = 'Aquesta categoria conté {$a} preguntes CodeRunner.';
$string['replaceexpectedwithgot'] = 'Feu clic al botó &lt;&lt; per canviar la sortida esperada d\'aquest cas de prova amb la sortida obtinguda.';
$string['reset'] = 'Reinicia la resposta';
$string['resethover'] = 'Descarta els canvis i reinicia la resposta al valor precarregat original';
$string['resultcolumnheader'] = 'Resultat';
$string['resultcolumns'] = 'Columnes de resultat';
$string['resultcolumns_help'] = 'Per defecte, la taula de resultats mostra columnes per al codi de prova, l\'entrada
estàndard, la sortida esperada i la sortida obtinguda, si les columnes no són buides.
Podeu canviar les columnes per defecte, i/o les capçaleres d\'aquestes columnes
establint un valor per a resultcolumns (deixeu-ho en blanc per al comportament per defecte).

Si s\'especifica, el camp resultcolumns ha de ser una llista codificada en JSON
d\'especificacions de columna. Cada especificador de columna és una llista,
típicament amb dos o tres elements. El primer element és la capçalera de la
columna, el segon element és el camp de l\'objecte TestResult que es mostrarà
a la columna i el tercer element (opcional) és el format sprintf que es fa servir
per mostrar el camp.

Els camps disponibles a l\'objecte
TestResult estàndard són: testcode, stdin, expected, got, extra, awarded i mark.
testcode, stdin, expected i extra són els camps del cas de prova, mentre que got és
la sortida que s\'ha obtingut i awarded i mark són respectivament la puntuació
obtinguda i la puntuació màxima per a aquest cas de prova.

Les plantilles de qualificació per cas de prova poden afegir els seus propis camps,
que també poden seleccionar-se per mostrar. També és possible combinar
múltiples camps en una columna afegint camps addicionals a l\'especificador:
aquests han de precedir el format sprintf, que llavors esdevé obligatori.
Per exemple, per mostrar la puntuació com a fracció en una columna de la forma
0.74/1.00, es podria fer servir una especificació de columna del tipus [«Fracció de la puntuació», «awarded», «mark», «%.2f/%.2f»].

Com a cas especial, el format %h es fa servir quan el valor del camp del resultat
s\'ha de fer servir directament com a HTML i no s\'hauria de processar
addicionalment; això és només útil en plantilles de qualificació personalitzades
que generen sortida HTML, com ara els gràfics SVG.

El valor per defecte de resultcolumns és
[["Prova", "testcode"],["Entrada", "stdin"], ["Esperat", "expected"], ["Obtingut", "got"]].

Establir el camp resultcolumns no té efecte si es fa servir una plantilla combinada. L\'autor de la pregunta és responsable de formatar la taula de resultats
de la manera que vulgui.';
$string['resultcolumnsnotjson'] = 'El camp resultcolumns no és una cadena JSON vàlida';
$string['resultcolumnsnotlist'] = 'El camp resultcolumns ha de ser una llista d\'especificadors de columnes codificada en JSON';
$string['resultcolumnspecbad'] = 'El camp resultcolumns és incorrecte: cada element ha de ser una llista de dues o més cadenes';
$string['resultstring-abnormaltermination'] = 'Terminació anormal';
$string['resultstring-compilationerror'] = 'Error de compilació';
$string['resultstring-illegalsyscall'] = 'Crida de funció il·legal';
$string['resultstring-internalerror'] = 'Error de CodeRunner (IE): aviseu un tutor';
$string['resultstring-memorylimit'] = 'S\'ha excedit el límit de memòria';
$string['resultstring-norun'] = 'No s\'ha executat';
$string['resultstring-outputlimit'] = 'Sortida excessiva';
$string['resultstring-runtimeerror'] = 'Error d\'execució';
$string['resultstring-sandboxoverload'] = 'Servidor de la zona de proves sobrecarregat. Proveu-ho més tard.';
$string['resultstring-sandboxpending'] = 'Error de CodeRunner (PD): aviseu un tutor';
$string['resultstring-sandboxpolicy'] = 'Error de CodeRunner (BP): aviseu un tutor';
$string['resultstring-success'] = 'OK';
$string['resultstring-timelimit'] = 'S\'ha excedit el límit de temps';
$string['run_failed'] = 'S\'han produït errors en fer les comprovacions';
$string['sampleanswerattachments'] = 'Fitxers adjunts de la resposta d\'exemple';
$string['sampleanswerattachments_help'] = 'Si la resposta d\'exemple necessita fitxers adjunts, pugeu-los aquí';
$string['sandboxcontrols'] = 'Zona de proves';
$string['sandboxcontrols_help'] = 'Totes les proves s\'executen a la zona de proves Jobe, que imposa
límits en l\'ús de memòria, el temps de CPU, la sortida de fitxers, etc.
Aquí podeu ajustar aquests límits.

«Límit de temps (segons)» defineix la quantitat màxima de temps en segons
que es permet per cada execució a la zona de proves i «Límit de memòria (MB)»
defineix la quantitat màxima de memòria que el programa pot fer servir.
Un valor en blanc fa servir el valor per defecte de la zona de proves (típicament
5 segons per al temps d\'execució i una quantitat de memòria que depèn
del llenguatge), però els defectes poden no ser adequats per a programes
que fan un ús intens de recursos. Un valor de zero per a la quantitat màxima
de memòria fa que no s\'estableixin límits a l\'ús de memòria. La quantitat de
memòria definida aquí és el total de memòria necessària per a l\'execució;
s\'hi inclouen totes les biblioteques, els intèrprets, les màquines virtuals, etc.

El camp «Paràmetres» es fa servir per passar més dades específiques a la
zona de proves, com ara opcions de compilació i claus d\'API. Generalment es pot
deixar en blanc, però si s\'especifica un valor, aquest ha de ser un registre JSON vàlid.
En el cas de la zona de proves Jobe, els atributs disponibles inclouen disklimit,
streamsize, numprocs, compileargs, linkargs i interpreterargs.
Per exemple, <code>{"compileargs":["-std=c89"]}</code> per a una pregunta en C
forçaria l\'estàndard C89 i cap altra opció de C es faria servir. Vegeu la documentació
de Jobe per a més detalls. Algunes zones de proves (per exemple, la zona de proves
obsoleta Ideone) poden ignorar silenciosament alguns d\'aquests valors o tots.

És possible definir un servidor Jobe diferent establint el paràmetre «jobeserver» i, també, opcionalment, una «jobeapikey». Per exemple, si el camp «Paràmetres» s\'estableix a <code>{"jobeserver": "myspecialjobe.com"}</code>, l\'execució
es durà a terme al servidor «myspecialjobe.com».';
$string['sandboxerror'] = 'Error de la zona de proves [{$a->sandbox}]: {$a->message}';
$string['sandboxparams'] = 'Paràmetres';
$string['scratchpad_ui_bad_api_keys'] = 'El camp scratchpad-direct s\'ha configurat malament. La longitud de la llista de claus d\'API ha de ser igual que la dels servidors Jobe.';
$string['scratchpad_ui_badrunwrappersrc'] = 'Embolcall d\'execució no vàlid; contacteu amb l\'autor de la pregunta.';
$string['scratchpad_ui_error'] = 'Ha fallat la petició XML HTTP. Error de xarxa o CORS.';
$string['scratchpad_ui_invalidserialisation'] = 'La serialització JSON subministrada és no vàlida; heu d\'incloure un camp \\"answer_code\\".';
$string['scratchpad_ui_no_protocol'] = 'El nom del servidor Jobe ha de començar per http:// o https://.';
$string['scratchpad_ui_request_failed'] = 'Ha fallat la petició al servidor de la zona de proves.';
$string['scratchpad_ui_templateloadfail'] = 'No s\'ha pogut carregar la plantilla de la IU Scratchpad; recarregueu la pàgina. Informeu d\'això si persisteix.';
$string['scratchpadui_api_keys_descr'] = 'Una llista de claus d\'API per fer servir amb els jobe_servers (si s\'han definit). Si és buida, no es fan servir claus d\'API. EXPERIMENTAL i potencialment insegur.';
$string['scratchpadui_button_name_descr'] = 'Text del botó d\'execució.';
$string['scratchpadui_close_delimiter_descr'] = 'El delimitador de finalització que es fa servir en inserir una resposta o codi Scratchpad a l\'embolcall. Substituirà el valor per defecte «|}».';
$string['scratchpadui_def_button_name'] = 'Executa';
$string['scratchpadui_def_help_text'] = '<p>Podeu introduir codi en aquest panell i fer clic a «Executa» per executar-lo.</p>
<p>Per defecte, el codi en aquest panell és prefixat pels continguts del quadre de resposta, la qual cosa us dona una manera fàcil de provar el vostre codi.</p>
<p>Podeu desmarcar la casella de selecció «Prefixa amb resposta» per executar el codi en aquest panell independentment, per exemple, per explorar la manera com es comporten els fragments de codi petits.</p>';
$string['scratchpadui_def_prefix_name'] = 'Prefixa amb resposta';
$string['scratchpadui_def_scratchpad_name'] = 'Scratchpad';
$string['scratchpadui_disable_scratchpad_descr'] = 'Desactiva l\'Scratchpad; això fa que la IU torni a ser l\'Ace per a l\'estudiant.';
$string['scratchpadui_escape_descr'] = 'Tracta els caràcters especials (elimina el caràcter " del principi i del final del JSON)
d\'ANSWER_CODE i SCRATCHPAD_CODE abans d\'inserir-los a l\'embolcall. Útil quan
s\'insereix codi en un text. COMPTE: les cometes simples \' NO es tracten.';
$string['scratchpadui_help_text_descr'] = 'El text d\'ajuda a mostrar.';
$string['scratchpadui_invert_prefix_descr'] = 'Inverteix el significat de la serialització de prefix_ans: \'1\' vol dir no marcat
i al contrari. Es pot fer servir per invertir l\'estat per defecte.';
$string['scratchpadui_jobe_servers_descr'] = 'Una llista de servidors Jobe, un dels quals es triarà aleatòriament com a objectiu
directe de les peticions AJAX, en comptes de passar per Moodle. EXPERIMENTAL
i potencialment insegur.';
$string['scratchpadui_open_delimiter_descr'] = 'El delimitador d\'inici que es fa servir en inserir una resposta o codi Scratchpad a l\'embolcall. Substituirà el valor per defecte \'{|\'.';
$string['scratchpadui_output_display_mode_descr'] = 'Controla com la sortida del programa es mostra a les execucions,
hi ha tres modes principals:
    <ul>
        <li>text: Mostra la sortida com a text, HTML tractat. (per defecte)<li>
        <li>json: Mostra programes que generen JSON, útil per capturar l\'stdin i mostrar imatges. (recomanat)</li>
        <ul>
            <li>Accepta JSON a l\'execució amb els camps:</li>
            <ul>
                <li>returncode: codi de sortida del programa executat.</li>
                <li>stdout: sortida estàndard del programa executat.</li>
                <li>stderr: sortida d\'error del programa executat.</li>
                <li>files: Un objecte que conté els noms de fitxers relacionats amb imatges codificades en base64. Es mostraran davall de qualsevol sortida estàndard.</li>
            </ul>
            <li>Quan el returncode és 42, s\'afegirà un camp HTML input després de la darrera sortida obtinguda. Quan es premi la tecla de retorn dins aquest input, el seu valor s\'afegeix a l\'entrada estàndard i el programa s\'executa una altra vegada amb aquesta entrada actualitzada. Això es repeteix fins que el returncode sigui diferent de 42.</li>
        </ul>
        <li>html: Mostra la sortida del programa directament com a HTML a l\'element de sortida. (avançat)</li>
        <ul>
            <li>Es pot fer servir per mostrar imatges i inserir un altre HTML.</li>
            <li>Si es dona la classe coderunner-run-input a un element &lt;input&gt;, s\'afegirà un esdeveniment: quan es premi la tecla de retorn dins aquest input, el seu valor s\'afegirà a l\'entrada estàndard i el programa s\'executarà una altra vegada amb aquesta entrada actualitzada.</li>
        </ul>
    </ul>';
$string['scratchpadui_params_descr'] = 'Paràmetres per al servei web de la zona de proves';
$string['scratchpadui_prefix_name_descr'] = 'Text de la casella de selecció per prefixar amb la resposta';
$string['scratchpadui_run_lang_descr'] = 'Llenguatge que es fa servir per executar el codi quan el botó d\'execució es fa servir,
hauria de ser el llenguatge en el qual el vostre embolcall s\'ha escrit (si s\'escau).';
$string['scratchpadui_scratchpad_name_descr'] = 'Nom que es fa servir per a l\'Scratchpad, es fa servir per amagar o mostrar l\'Scratchpad.';
$string['scratchpadui_wrapper_src_descr'] = 'Ubicació de l\'embolcall a fer servir en prémer el botó d\'execució: si s\'estableix a \'globalextra\', es farà servir el text al camp addicional global, si s\'estableix a \'prototypeextra\' es farà servir el camp addicional del prototipus.';
$string['seethisquestioninthequestionbank'] = 'Visualitza aquesta pregunta al banc de preguntes.';
$string['showcolumns'] = 'Mostra les columnes:';
$string['showcolumns_help'] = 'Selecciona quines columnes de la taula de resultats s\'haurien de mostrar
als estudiants. Les columnes buides s\'amagaran en qualsevol cas.
Els valors per defecte són adients en la majoria dels casos.';
$string['showdetails'] = 'Mostra els detalls';
$string['showdifferences'] = 'Mostra les diferències';
$string['showsource'] = 'Depuració de la plantilla';
$string['sourcecodeallruns'] = 'Depuració: codi font de totes les execucions de prova';
$string['stdin'] = 'Entrada estàndard';
$string['stdin_help'] = 'L\'entrada estàndard per a la prova. Disponible a la plantilla com {{TEST.stdin}}';
$string['student_answer'] = 'Resposta de l\'estudiant';
$string['submitbuttons'] = 'Botons de tramesa';
$string['supportscripts'] = 'Scripts de suport';
$string['syntax_errors'] = 'Error(s) de sintaxi';
$string['table_ui_invalidjson'] = 'IU taula: serialització JSON no vàlida.';
$string['table_ui_invalidserialisation'] = 'IU taula: serialització no vàlida.';
$string['table_ui_missingparams'] = 'La IU taula necessita els paràmetres num_colums i num_rows.';
$string['tableui_column_headers_descr'] = 'Una llista de textos per a les capçaleres de les columnes.';
$string['tableui_column_width_percents_descr'] = 'Una llista de nombres reals que especifiquen el percentatge de l\'amplària disponible de la taula per posar-hi les columnes, inclosa la columna amb les etiquetes de les files, si hi és present.';
$string['tableui_dynamic_rows_descr'] = 'Si és cert, i el botó «Afegeix una fila» s\'especifica per a permetre als usuaris afegir files a la taula.';
$string['tableui_lines_per_cell_descr'] = 'La quantitat de files de text a cada textarea o cel·la.';
$string['tableui_locked_cells_descr'] = 'Una llista de llistes de dos elements que especifica les coordenades (començant per 0) de les cel·les que l\'usuari no pot alterar. Les coordenades no inclouen una possible fila de capçaleres de columna o una columna d\'etiquetes de fila.';
$string['tableui_num_columns_descr'] = 'La quantitat de columnes de la taula, sense comptar la columna de més a l\'esquerra si es donen etiquetes de files. Requerit.';
$string['tableui_num_rows_descr'] = 'La quantitat (inicial) de files de la taula, sense comptar la fila de capçaleres si es donen capçaleres. Requerit.';
$string['tableui_row_labels_descr'] = 'Una llista de textos per a les etiquetes de les files, és a dir, els valors a la columna 0.';
$string['tableui_sync_interval_secs_descr'] = 'L\'interval de temps en segons entre crides per sincronitzar els continguts de la IU amb la resposta de la pregunta. 0 per no sincronitzar-los de manera automàtica.';
$string['template'] = 'Plantilla';
$string['template_changed'] = 'S\'ha modificat la plantilla per al cas de prova. Voleu desactivar la plantilla combinada? [«Cancel·la» la deixa activada.]';
$string['template_help'] = 'La plantilla defineix el programa o programes que s\'executen a la zona de proves per a una
resposta de l\'estudiant donada i la prova o les proves. Hi ha dos tipus de plantilles:

* una plantilla per cas de prova, que defineix un programa que s\'executarà per a un sol cas de prova i,
* una plantilla combinada, que defineix un programa que combina tots els casos de prova en una sola execució.

La casella de selecció \'És una plantilla combinada\' es deixa sense seleccionar a les plantilles per cas de prova i se selecciona a les plantilles combinades. La resta
d\'aquest panell d\'ajuda suposa que feu servir una plantilla per cas de prova; vegeu
la documentació completa per fer servir plantilles combinades.

La plantilla es processa amb el motor de plantilles Twig
(vegeu http://twig.sensiolabs.org) en un context en el qual STUDENT_ANSWER és la
resposta de l\'estudiant i TEST.testcode és el codi per al cas de prova actual.
Aquests valors (i altres valors del cas de prova com TEST.expected, TEST.stdin,
TEST.mark) poden inserir-se a la plantilla si s\'envolten en claus dobles, per exemple
<code>{{TEST.testcode}}</code>. Per fer-los servir en cadenes literals, convé aplicar-los
una funció de neteja: per exemple, <code>{{STUDENT_ANSWER | e(\'py\')}}</code> és
adient per fer-los servir a cadenes de cometes triples de Python. Altres funcions de
neteja són <code>e(\'c\')</code>, <code>e(\'java\')</code>, <code>e(\'matlab\')</code>.
El programa que genera Twig es compila i s\'executa en el llenguatge del tipus
de pregunta predefinit triat i s\'estableix l\'stdin a TEST.stdin. La sortida d\'aquesta
execució es passa a l\'avaluador seleccionat. Per a més informació sobre això vegeu l\'ajuda que hi ha sota els «Controls de qualificació».

Teniu en compte que si es fa servir una plantilla per cas de prova personalitzada,
s\'enviaran a la zona de proves tasques de compilar-i-executar per a cada cas de prova,
mentre que la majoria de tipus de pregunta predefinits fan servir una plantilla
combinada que combina tots els casos de prova en una sola execució.

Si se selecciona la depuració de la plantilla, el programa generat per a cada execució a la zona de proves es mostrarà a la sortida.';
$string['templatecontrols'] = 'Controls de la plantilla';
$string['templatecontrols_help'] = 'El fet de marcar la casella de selecció «És una plantilla combinada» especifica que la plantilla és
combinada, que combina (o intenta combinar) la resposta de l\'estudiant amb tots
els casos de prova en una sola execució de la plantilla. Si se selecciona aquesta
casella, també haureu de definir el valor del camp test_splitter_re, que és l\'expressió
regular PHP que es fa servir per separar la sortida de la plantilla en el conjunt de
respostes individuals de cada cas de prova. Amb tot, no heu de definir això si també
feu servir una plantilla d\'avaluació, ja que en aquest cas la plantilla mateixa és la
responsable de dividir la sortida i qualificar-la.

Les plantilles combinades no reben una variable Twig TEST. En comptes d\'això,
reben una variable TESTCASES, que és una llista de tots els casos de prova de la
pregunta. S\'assumeix que el programa generat per la plantilla combina
l\'STUDENT_ANSWER i tots els TESTCASES en un sol programa que, quan és executat,
imprimeix els resultats de cada cas de prova, separats per un text únic.
El text separador és definit per una expressió regular donada pel camp del
formulari \'test_splitter_re\'.

De totes maneres, si els casos de prova tenen entrada estàndard, les plantilles combinades
esdevenen problemàtiques. Si la plantilla construeix un únic programa, quina
hauria de ser la seva entrada estàndard? La solució més simple (i per defecte) és
executar els casos de prova un a un, fent servir la plantilla combinada per
construir cada programa, passant-los la variable TESTCASES que conté una
sola prova. Aquest «truc» permet que la plantilla combinada compleixi un rol doble:
es comporta com una plantilla per cas de prova (amb una matriu TESTCASES d\'un
sol element) quan l\'autor de la pregunta hi especifica entrada estàndard, però
altrament es comporta com una autèntica plantilla combinada (amb una matriu TESTCASES de n elements). Per canviar aquest comportament, de manera que la plantilla rebi tots els casos
de prova, fins i tot quan l\'stdin és present, seleccioneu la casella «Permet múltiples stdins».

Si l\'execució d\'una plantilla combinada genera alguna sortida a stderr, s\'interpreta
que és un error d\'execució. Per assegurar que l\'estudiant obté puntuació per tants
casos de prova com sigui possible, el sistema es comporta com quan hi ha entrada
estàndard, executant cada cas de prova per separat. Això no s\'aplica a les plantilles
d\'avaluació, que s\'espera que gestionin tots els errors d\'execució i sempre han
de produir un resultat JSON vàlid.';
$string['templateerror'] = 'ERROR DE PLANTILLA';
$string['templategrader'] = 'Plantilla d\'avaluació';
$string['templateparams'] = 'Paràmetres de la plantilla';
$string['templateparams_help'] = 'Si no és en blanc, el camp de paràmetres de la plantilla ha d\'avaluar un
registre en format JSON. En la seva forma més simple el camp <i>és</i> un camp
JSON que defineix un conjunt de variables que s\'afegeixen a l\'entorn de la plantilla
Twig quan el sistema expandeix la plantilla (i altres camps si «Aplica Twig a tot» està seleccionat).

Si s\'especifica un preprocessador a la secció de Control de paràmetres de la plantilla,
els paràmetres de la plantilla es processen abans amb el llenguatge especificat per
obtenir el registre JSON. Vegeu
<a href="https://coderunner.org.nz/mod/url/view.php?id=199">la documentació</a>
per a més detalls.

<b>Atenció!:</b> el fet de fer servir un preprocessador diferent de Twig pot tenir efectes
importants en el rendiment si la casella de selecció Avalua per estudiant està
seleccionada, que s\'ha de fer servir per aleatoritzar o personalitzar les preguntes
per a cada estudiant. El preprocessament s\'ha de fer abans de poder mostrar una
pregunta i, tret de per a Twig, es duu a terme al servidor de la zona de proves Jobe.
Cada intent de cada estudiant a cada pregunta d\'aquest tipus farà que s\'enviï una tasca a aquest servidor. Això pot provocar milers de tasques a la vegada a
l\'inici d\'una prova o un examen, la qual cosa probablement el sobrecarregui. Caveat Emptor!';
$string['templateparamsevalpertry'] = 'Avalua per estudiant';
$string['templateparamslang'] = 'Preprocessador';
$string['templateparamsusingsandbox'] = 'Els preprocessadors diferents de Twig fan servir el servidor de la zona de proves.
Si «Avalua per estudiant» també està seleccionat, quan un estudiant comenci un qüestionari totes les preguntes iniciaran una execució a la zona de proves abans
que la pregunta es pugui tan sols mostrar. En una prova o un examen això pot
sobrecarregar el servidor. Caveat emptor!';
$string['testallincategory'] = 'Comprova totes les preguntes d\'aquesta categoria';
$string['testalltitle'] = 'Comprova totes les preguntes d\'aquest context';
$string['testcase'] = 'Cas de prova {$a}';
$string['testcasecontrols'] = 'Propietats del cas de prova:';
$string['testcasecontrols_help'] = 'Si «Fes servir com a exemple» està seleccionat, aquest cas de prova s\'inclourà de manera automàtica a la taula de resultats «Per exemple:».

La casella de selecció «Mostra» determina quan es mostra aquest cas de prova a l\'estudiant a la taula de resultats.

Si «Amaga la resta si falla» està seleccionat i aquest cas de prova falla, tots els casos de prova s\'amagaran a l\'estudiant, independentment del valor de «Mostra».

«Puntuació» estableix el valor d\'aquest cas de prova; només és útil si no és una pregunta del tipus «Tot o res».

«Ordenació» pot ser fet servir per canviar l\'ordre dels casos de prova quan la pregunta ja s\'ha desat: els casos s\'ordenen segons aquest camp.';
$string['testcases'] = 'Casos de prova';
$string['testcode'] = 'Codi de prova';
$string['testcode_help'] = 'El codi per a aquest cas de prova. Disponible a la plantilla com a {{TEST.testcode}}';
$string['testcolhdr'] = 'Prova';
$string['testingquestion'] = 'S’està comprovant la pregunta {$a}';
$string['testsplitterre'] = 'Separador de casos de prova (expressió regular)';
$string['testtype'] = 'Tipus de precomprovació del cas de prova';
$string['testtype_both'] = 'Les dues';
$string['testtype_help'] = 'Si la precomprovació s\'activa i s\'estableix a «seleccionat», aquesta opció controla si el cas de prova es fa servir només en una execució normal, només en una execució de precomprovació o a ambdues.
Si la precomprovació s\'estableix a qualsevol altra cosa que no sigui «seleccionat», aquesta opció s’ignora.';
$string['testtype_normal'] = 'Només comprovació';
$string['testtype_precheck'] = 'Només precomprovació';
$string['tooshort'] = 'La resposta és massa curta per tenir significat i s\'ha ignorat sense penalització';
$string['twigall'] = 'Aplica Twig a tot';
$string['twigcontrols'] = 'Control dels paràmetres de la plantilla';
$string['twigcontrols_help'] = 'Tradicionalment, s\'ha fet referència als paràmetres de la plantilla durant l\'expansió de Twig en la forma {{QUESTION.parameters.algunparametre}} . No obstant això, si la casella de selecció «Eleva els paràmetres de la plantilla» està seleccionada, els paràmetres s\'inclouen a l\'espai de noms global de Twig i es poden referenciar com a {{algunparametre}}.

El compliment d’Ace/Scratchpad permet assegurar el canvi transparent entre les IU Ace i Scratchpad. Deixeu-lo marcat tret que vulgueu que Ace pugui editar una cadena de text JSON amb una clau «answer_code»", que s\'enviaria a una serialització de l\'Scratchpad.


Si Aplica Twig a tot està seleccionat, l\'expansió de macros Twig s\'aplica al text de la pregunta, la resposta d\'exemple, la resposta precarregada, els paràmetres de la IU i tots els camps dels casos de prova fent servir els paràmetres de la plantilla com a entorn. Habitualment haureu d\'activar Aplica Twig a tot si feu servir aleatorització en els paràmetres de la plantilla. Tingueu en compte que aquesta expansió d\'Aplica Twig a tot ocorre quan la pregunta s\'inicialitza per primera vegada, mentre que l\'expansió Twig de la plantilla ocorre molt de temps després, quan l\'estudiant tramet una resposta.
L\'entorn per expandir la plantilla inclou la variable Twig QUESTION (un subconjunt de tot el registre de la pregunta), alguns camps del qual poden haver estat expandits com a resultat d\'Aplica Twig a tot.

El text al camp de paràmetres de la plantilla ha de ser o bé un text JSON o ha d\'avaluar un text JSON quan és preprocessat pel preprocessador especificat.
Aneu amb compte perquè si feu servir un preprocessador diferent de Twig, això farà que s\'enviï una tasca a la zona de proves Jobe abans que la pregunta ni tan sols es pugui mostrar. Vegeu
<a href="https://coderunner.org.nz/mod/url/view.php?id=199">la documentació</a>
per saber com escriure un preprocessador diferent de Twig.

Si feu servir un preprocessador diferent de Twig, normalment és necessari trametre una tasca a la zona de proves Jobe per a cada pregunta per a cada estudiant quan comencen el qüestionari. Si <i>Avalua per estudiant</i> està sense seleccionar, es trametrà una sola tasca quan la pregunta es desi; això és una operació amb un cost baix, però no és normalment útil, ja que essencialment impedeix fer servir cap classe d\'aleatorització per estudiant. Així i tot, pot ser útil per generar el contingut de la pregunta en alguns casos.';
$string['twigerror'] = 'Error de Twig {$a}';
$string['twigerrorintest'] = 'Error de Twig en processar aquesta prova {$a}';
$string['type_header'] = 'Tipus de pregunta CodeRunner';
$string['typename'] = 'Tipus de pregunta';
$string['typerequired'] = 'Seleccioneu el tipus de pregunta (llenguatge, format, etc.)';
$string['ui_fallback'] = 'S\'està fent servir un quadre de text en brut de manera alternativa.';
$string['uichanged'] = 'La IU ha canviat. Deseu i recarregueu la pàgina per veure i editar els paràmetres de la IU disponibles (si n\'hi ha cap).';
$string['uicontrols'] = 'IU d\'entrada';
$string['uicontrols_help'] = 'Seleccioneu els controladors de la interfície d\'usuari per a la resposta de l\'estudiant i la plantilla de l\'autor de la pregunta.

El quadre combinat de la resposta de l\'estudiant conté una llista dels connectors disponibles. L\'editor Ace s’utilitza de manera habitual per a les preguntes de programació,.
El valor «Cap» es pot seleccionar per fer servir un quadre de text en brut.

El valor «Graf» proporciona a l\'usuari una interfície d\'usuari simple amb la qual pot dibuixar grafs que es poden emprar en aquelles preguntes que demanin a l\'estudiant que dibuixi un graf d’acord amb alguna especificació, com ara les preguntes que habitualment tenen un únic cas de prova, amb una plantilla que analitza la representació serialitzada
del graf i imprimeix un missatge com ara «OK» si la resposta és correcta o, altrament, un missatge informatiu adient.

L\'element d\'interfície d\'usuari «Taula», mostra una taula de quadres de text perquè l\'estudiant els empleni. Es fa servir al tipus de pregunta «python3_program_testing»,
que es troba disponible a les preguntes d\'exemple a GitHub.

Les interfícies d\'usuari «Gapfiller» i «Html» es troben documentades a la documentació principal de CodeRunner a https://github.com/trampgeek/moodle-qtype_coderunner#code-runner.

Els estudiants amb problemes de visió o els autors que vulguin inspeccionar les serialitzacions (per exemple, per entendre la representació feta servir per la IU Graf) poden activar i desactivar l\'ús de tots els connectors d\'IU a la pàgina actual amb
Ctrl-Alt-M.

Sigui quin sigui el valor triat per a la resposta de l\'estudiant, també es farà servir al formulari d\'edició per als camps de la resposta d\'exemple i la resposta precarregada.

Si «La plantilla fa servir Ace» s’ha seleccionat, l\'editor de codi Ace es farà servir tant als quadres de la plantilla com als dels paràmetres de la plantilla. Altrament, es farà servir un quadre de text en brut.';
$string['uiparamdefault'] = 'Per defecte';
$string['uiparamdesc'] = 'Descripció';
$string['uiparametergroup'] = 'Paràmetres de la IU';
$string['uiparametergroup_help'] = 'Un text JSON que defineix els valors dels paràmetres de la interfície d\'usuari que requereixen el connector de la IU o que sobreescriuen els valors per defecte.
Per exemple, per dibuixar nodes més grossos en fer servir la GraphUI: \'{"noderadius": 30}\'';
$string['uiparameters'] = 'Paràmetres de la IU (JSON)';
$string['uiparametertablehead'] = 'La IU {$a->uiname} admet els paràmetres següents:';
$string['uiparamname'] = 'Nom';
$string['unauthorisedbulktest'] = 'No teniu accés a cap pregunta CodeRunner';
$string['unauthoriseddbaccess'] = 'No teniu permís per executar aquest script';
$string['unknowncombinatorgraderfield'] = 'Nom de camp desconegut ({$a->fieldname}) a la sortida de la plantilla d\'avaluació';
$string['unknownerror'] = 'S\'ha produït un error inesperat. La zona de proves pot no estar disponible. Torneu a intentar-ho d\'aquí a una estona.';
$string['unknownuiplugin'] = 'S\'ha demanat informació sobre el connector desconegut següent: ({$a->pluginname}).';
$string['unserializefailed'] = 'No s\'han pogut desserialitzar els resultats emmagatzemats. Voleu provar de requalificar?';
$string['useace'] = 'La plantilla fa servir Ace';
$string['useasexample'] = 'Fes servir com a exemple';
$string['validateonsave'] = 'Valida en desar';
$string['wrongnumberofformats'] = 'La quantitat de formats de columna dels resultats de les proves és errònia. S\'esperava {$a->expected}, s\'ha obtingut {$a->got}';
$string['wsbadjson'] = 'Els paràmetres i els paràmetres dels fitxers han d\'estar en blanc o ser un registre JSON vàlid';
$string['wscputimeexcess'] = 'El temps de CPU excedeix el temps de CPU màxim';
$string['wsdisabled'] = 'El servei web de la zona de proves està desactivat. Parleu amb l\'administrador del sistema';
$string['wsloggingenable'] = 'Registra l\'ús del servei web de la zona de proves';
$string['wsloggingenable_desc'] = 'Si aquesta opció està seleccionada, s\'enregistraran totes les execucions a través del servei web de la zona de proves. Aquesta opció ha d\'estar activada perquè funcioni la limitació per usuari.';
$string['wsmaxcputime'] = 'Màxim temps de CPU (segons)';
$string['wsmaxcputime_desc'] = 'Limita el temps màxim de CPU que l\'execució en un servei web pot fer servir, encara que estableixi el paràmetre de la zona de proves de temps de CPU.';
$string['wsmaxhourlyrate'] = 'Quantitat màxima de trameses per hora';
$string['wsmaxhourlyrate_desc'] = 'Si un usuari intenta sobrepassar aquesta quantitat de trameses en una hora, no es permetrà que en faci més. 0 per no limitar-les.';
$string['wsnoaccess'] = 'Només els usuaris registrats i no-visitants poden accedir a aquesta funcionalitat';
$string['wsnolanguage'] = 'El llenguatge «{$a}» no es coneix';
$string['wssubmissionrateexceeded'] = 'Heu excedit la quantitat màxima de trameses per hora «Prova-ho!». Accés denegat.';
$string['xmlcoderunnerformaterror'] = 'Error de format XML a la pregunta CodeRunner';
