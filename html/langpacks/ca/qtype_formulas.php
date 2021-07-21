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
 * Strings for component 'qtype_formulas', language 'ca', version '3.11'.
 *
 * @package     qtype_formulas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abserror'] = 'Error absolut';
$string['addmorepartsblanks'] = 'Espais en blanc per {no} parts més';
$string['algebraic_formula'] = 'Fórmula algebraica';
$string['answer'] = 'Resposta*';
$string['answer_help'] = '**Necessari**.
cal que sigui una llista de nombres, o una llista de cadenes en funció del tipus de resposta escollida. Quan només hi ha una resposta, un nombre o una cadena de nombres es poden afegir directament. Cal tenir en compte que el nombre d\'elements de la llista defineix la quantitat de possibles respostes en aquesta part.


<pre class="prettyprint">123<br>[1, 0, 0, 1]<br>a<br>[1, a, b]<br>"exp(-a t)"<br>["vx t","vy t - 0.5 a t^2"]</pre>';
$string['answercombinedunitmulti'] = 'Resposta i unitat per a la part {$a->part}';
$string['answercombinedunitsingle'] = 'Resposta i unitat';
$string['answercoordinatemulti'] = 'Resposta per a la part {$a->part} i coordenada {$a->numanswer}';
$string['answercoordinatesingle'] = 'Resposta per a la coordenada {$a->numanswer}';
$string['answermark'] = 'puntuació de la part*';
$string['answermark_help'] = '**Necessari**.
La puntuació per a la resposta d\'aquesta part, que hauria de ser superior a zero. La puntuació per defecte de la pregunta sencera és la suma de totes les puntuacions de les seves parts.

Nota: Si el camp de la puntuació d\'aquesta part es deixa en blanc, la part s\'eliminarà en desar la pregunta.';
$string['answermulti'] = 'Resposta per a la part {$a->part}';
$string['answerno'] = 'Part {$a}';
$string['answersingle'] = 'Resposta';
$string['answertype'] = 'Tipus de resposta';
$string['answertype_help'] = 'Hi ha quatre tipus de resposta.

Les respostes de tipus nombre, numèric i fórmula numèrica demanen un nombre o una llista de nombres com a resposta.

La fórmula algebraica necessita una cadena o una llista de cadenes com a resposta.

Els diferents tipus de respostes imposaran diferents restriccions quan s\'introdueixin les respostes, per tant cal que els alumnes sàpiguen com ho han d\'escriure. La comprovació de format en el codi de la pregunta també els dirà mentre escriuen si alguna cosa és errònia. Llegiu la documentació per a saber-ne més.';
$string['answerunitmulti'] = 'Unitat per a la part {$a->part}';
$string['answerunitsingle'] = 'Unitat';
$string['checkvarshdr'] = 'Comprova la instanciació de variables';
$string['choiceno'] = 'No';
$string['choiceyes'] = 'Sí';
$string['commonsiunit'] = 'Unitat corrent del SI';
$string['correctansweris'] = 'Una resposta correcta possible és: {$a}';
$string['correctfeedback'] = 'Per a qualsevol resposta correcta';
$string['correctfeedback_help'] = 'Aquesta retroacció es mostrarà als estudiants que no obtenen la nota màxima en aquesta opció. Podeu incloure variables globals i locals que seran substituïdes pels seus valors';
$string['correctness'] = 'Criteris de puntuació*';
$string['correctness_help'] = '**Necessari**. Podeu escollir tant error relatiu com error absolut amb la corresponent escala. L\'error relatiu no es pot emprar si la resposta és algebraica.

Per a una  definició més precisa sobre l’error relatiu i l’error absolut quan hi ha més d’un camp de resposta, consulteu la documentació.';
$string['correctnessexpert'] = 'Expert';
$string['correctnesssimple'] = 'Simple';
$string['defaultanswermark'] = 'Puntuació per defecte de les parts';
$string['defaultanswermark_desc'] = 'Puntuació per defecte per a les parts de les preguntes noves';
$string['defaultanswertype'] = 'Tipus de resposta per defecte';
$string['defaultanswertype_desc'] = 'Tipus de resposta per defecte per a les parts de les preguntes noves';
$string['defaultcorrectness'] = 'Criteris de puntuació per defecte';
$string['defaultcorrectness_desc'] = 'Criteris de puntuació per defecte per a les parts de les preguntes noves';
$string['defaultunitpenalty'] = 'Penalització per defecte per unitat';
$string['defaultunitpenalty_desc'] = 'Penalització per defecte per cada unitat incorrecte (0-1)';
$string['error_algebraic_var'] = 'Error de sintaxi en definir la variable algebraica.';
$string['error_answer_missing'] = 'No s\'ha definit cap resposta.';
$string['error_answerbox_duplicate'] = 'Cada camp de resposta només es pot fer servir una vegada en cada part.';
$string['error_answertype_mistmatch'] = 'Discordança en el tipus de resposta: el tipus de resposta numèrica demana un nombre i el tipus de resposta algebraica demana una cadena';
$string['error_criterion'] = 'El criteri de qualificació ha de donar un sol nombre en avaluar-se.';
$string['error_eval_numerical'] = 'Algunes expressions no es poden avaluar numèricament.';
$string['error_fixed_range'] = 'Error de sintaxi d\'un interval fix.';
$string['error_forbid_char'] = 'La fórmula o l\'expressió té algun caràcter o operador no permès.';
$string['error_forloop'] = 'Error de sintaxi del bucle for.';
$string['error_forloop_expression'] = 'L\'expressió del bucle for ha de ser una llista.';
$string['error_forloop_var'] = 'La variable del bucle for té alguns errors.';
$string['error_func_param'] = 'Nombre o tipus de paràmetres incorrecte per a la funció {$a}()';
$string['error_mark'] = 'La puntuació de la resposta ha de ser més gran que 0.';
$string['error_no_answer'] = 'Es requereix almenys una resposta.';
$string['error_placeholder_format'] = 'Format incorrecte del marcador o caràcters prohibits.';
$string['error_placeholder_main_duplicate'] = 'Marcador de posició duplicat al text de la pregunta principal.';
$string['error_placeholder_missing'] = 'Falta el marcador de posició al text de la pregunta principal.';
$string['error_placeholder_sub_duplicate'] = 'Aquest marcador de posició ja s\'ha definit en alguna altra part.';
$string['error_placeholder_too_long'] = 'La longitud del marcador de posició està limitada a 40 caràcters.';
$string['error_randvars_set_size'] = 'El nombre d\'elements generables del conjunt ha de ser superior a 1.';
$string['error_randvars_type'] = 'Tots els elements del conjunt han de ser exactament del mateix tipus i de la mateixa mida.';
$string['error_rule'] = 'Error en analitzar la regla.';
$string['error_ruleid'] = 'No hi ha cap regla amb aquest ID/nom.';
$string['error_subexpression_empty'] = 'Una subexpressió és buida.';
$string['error_syntax'] = 'Error de sintaxi.';
$string['error_unit'] = 'Error en analitzar la unitat.';
$string['error_unitpenalty'] = 'La penalització ha de ser un nombre entre 0 i 1.';
$string['error_validation_eval'] = 'Error en intentar l’avaluació!';
$string['error_vars_array_index_nonnumeric'] = 'Un valor no numèric no es pot fer servir com a índex d\'una llista.';
$string['error_vars_array_index_out_of_range'] = 'Índex de la llista fora de rang!!!';
$string['error_vars_array_size'] = 'La mida de la llista cal que sigui entre 1 i 1000.';
$string['error_vars_array_type'] = 'Els elements de la mateixa llista han de ser del mateix tipus, ja siguin un número o una cadena.';
$string['error_vars_array_unsubscriptable'] = 'La variable no es pot subscriure.';
$string['error_vars_bracket_mismatch'] = 'El claudàtor no coincideix.';
$string['error_vars_end_separator'] = 'Falta un separador de tasques al final.';
$string['error_vars_name'] = 'La sintaxi del nom de la variable és incorrecta.';
$string['error_vars_reserved'] = 'La funció {$a}() està reservada i no es pot fer servir com a variable.';
$string['error_vars_string'] = 'Error! O bé és una cadena sense tancar les cometes dobles, o bé és l\'ús de caràcters no acceptats, com ara \'.';
$string['error_vars_undefined'] = 'La variable «{$a}» no s\'ha definit.';
$string['feedback'] = 'Retroacció general de la part';
$string['feedback_help'] = 'Aquesta retroacció de la part es mostrarà a tots els estudiants. Pot incloure variables globals i locals que seran substituïdes pels seus valors';
$string['functiontakesatleasttwo'] = 'La funció {$a} ha de tenir dos arguments com a mínim';
$string['functiontakesnoargs'] = 'La funció {$a} no accepta cap argument';
$string['functiontakesonearg'] = 'La funció {$a} ha de tenir exactament un argument';
$string['functiontakesoneortwoargs'] = 'La funció {$a} ha de tenir un o dos arguments';
$string['functiontakestwoargs'] = 'La funció {$a} ha de tenir exactament dos arguments';
$string['globaloptions'] = '[Global] -';
$string['globalvarshdr'] = 'Variables';
$string['illegalformulasyntax'] = 'Sintaxi il·legal a la fórmula que comença amb {$a}';
$string['incorrectfeedback'] = 'Per a qualsevol resposta incorrecta';
$string['incorrectfeedback_help'] = 'Aquesta retroacció es mostrarà als estudiants que no obtenen cap puntuació en aquesta part. Pot incloure variables globals i locals que seran substituïdes pels seus valors';
$string['instantiate'] = 'Instancia';
$string['mainq'] = 'Pregunta principal';
$string['modelanswer'] = 'Resposta model';
$string['none'] = 'Cap';
$string['number'] = 'Número';
$string['number_unit'] = 'Número i unitat';
$string['numdataset'] = 'Nombre de conjunt de dades';
$string['numeric'] = 'Numèric';
$string['numeric_unit'] = 'Numèric i unitat';
$string['numerical_formula'] = 'Fórmula numèrica';
$string['numerical_formula_unit'] = 'Fórmula numèrica i unitat';
$string['otherrule'] = 'Altres regles';
$string['otherrule_help'] = 'Aquí el creador de la pregunta pot definir regles de conversió addicionals per a altres unitats base acceptades. Consulteu la documentació per als usos avançats.';
$string['partiallycorrectfeedback'] = 'Per a qualsevol resposta parcialment correcta';
$string['partiallycorrectfeedback_help'] = 'Aquesta retroacció es mostrarà als estudiants que no obtinguin la nota màxima en aquesta part. Pot incloure variables globals i locals que seran substituïdes pels seus valors';
$string['placeholder'] = 'Nom del marcador de posició';
$string['placeholder_help'] = 'Un marcador de posició s’utilitza per identificar la ubicació del text de la pregunta principal que serà substituït pel contingut de la part. És una cadena de caràcters alfanumèrics amb el prefix "** # **", com ara # 1, # 2a, # 2b i #A.

Si aquest camp es deixa buit, la part s\'afegirà al final del text de la pregunta principal.';
$string['pleaseputananswer'] = 'Poseu una resposta a cada camp d\'entrada.';
$string['pluginname'] = 'Fórmules';
$string['pluginname_help'] = 'Per començar a fer servir aquest tipus de pregunta, aneu a <a href="https://moodleformulas.org/">moodleformulas.org</a>.

Per a possibles preguntes, aneu a <a href="https://moodleformulas.org/">moodleformulas.org</a>.

Per a les opcions del formulari d’edició següent, aneu a <a href="https://moodleformulas.org/">moodleformulas.org</a>

Per obtenir la documentació completa, aneu a <a href="https://moodleformulas.org/">moodleformulas.org</a>';
$string['pluginnameadding'] = 'S\'està afegint una pregunta de fórmules';
$string['pluginnameediting'] = 'S\'està editant una pregunta de fórmules';
$string['pluginnamesummary'] = 'Tipus de pregunta amb valors aleatoris i respostes múltiples.
Els camps de resposta es poden col·locar en qualsevol lloc, de manera que es poden crear preguntes relacionades amb diverses estructures, com ara vectors, polinomis i matriu.
Altres funcions, com ara la comprovació d’unitats i les preguntes sobre diverses parts, també s’integren de forma sòlida i fàcil d’utilitzar.';
$string['postunit'] = 'Unitat';
$string['postunit_help'] = 'Podeu especificar la unitat aquí. Aquest tipus de pregunta està dissenyada per a unitats del SI, de manera que un espai en blanc representa el «producte» de la «unitat base» diferent i <tt> ^ </tt> es fa servir per als exponents.
A més, <tt> / </tt> es pot utilitzar per a un exponent invers. Qualsevol permutació de la unitat base es tracta igual.

Els estudiants han d’utilitzar el mateix format d’entrada. Per exemple,

<pre class="prettyprint">1 m<br>0.1 m^2<br>20 m s^(-1)<br>400 kg m/s<br>100 kW</pre>';
$string['privacy:metadata'] = 'El connector de tipus de pregunta Fórmules no emmagatzema cap dada personal.';
$string['qtextpreview'] = 'Vista prèvia mitjançant el conjunt de dades';
$string['questiontext'] = 'Text de la pregunta';
$string['questiontext_help'] = 'A més del text de la pregunta normal, també podeu utilitzar variables globals i marcadors de posició.

Les variables globals se substituiran pels seus valors i els marcadors de posició se substituiran per parts.
    Un exemple senzill amb variables <tt> A, B, C </tt> i marcadors de posició <tt> #1, #2, #3 </tt> és el següent:

<pre class = "prettyprint"> Quin és el resultat de {A} + {B}? <br> {#1} <br> Quin és el resultat de {A} - {B}? <br> {#2 } <br> Quin és el resultat de {C} / {B}? <br> {#3} </pre>';
$string['relerror'] = 'Error relatiu';
$string['renew'] = 'Actualitza';
$string['ruleid'] = 'Regles bàsiques de conversió';
$string['ruleid_help'] = 'Aquest tipus de pregunta té un sistema de conversió d’unitat integrat i regles bàsiques de conversió.

La més bàsica són les regles de les «Unitats del SI», que convertiran les unitats estàndard,
com ara les unitats de longitud; per exemple: km, m, cm i mm. Aquesta opció no té cap efecte si no s\'hi ha utilitzat cap unitat.';
$string['settingusepopup'] = 'Fes servir consells d\'eina';
$string['settingusepopup_desc'] = 'Mostra la resposta correcta i la retroacció en una finestra emergent';
$string['subqoptions'] = 'Opcions extra';
$string['subqtext'] = 'Text de la part';
$string['subqtext_help'] = 'Aquí es poden especificar el text de la part i els camps de respostes. Els marcadors de posició que es poden utilitzar per especificar els camps de resposta són els següents:

<pre class="prettyprint">{_0}<br>{_1}<br>{_2}<br>...<br>{_u}</pre>

Els <tt> {_0}, {_1}, {_2} </tt> són els camps d\'entrada de coordenades i <tt> {_u} </tt> és el camp d\'entrada per a la unitat.

Tots els camps que falten s\'afegeixen de manera automàtica al final del text de la part. Un cas especial seria el de <tt> {_0}, {_u} </tt>, que, si s’especifica de manera consecutiva, i només hi ha una coordenada i una unitat, per exemple, <tt> {_0}{_u} </tt>, es fusionaran en un únic camp de resposta d\'entrada llarg per a la resposta i la unitat.';
$string['unit'] = 'Unitat';
$string['unitpenalty'] = 'Penalització per error en les unitats (0-1)*';
$string['unitpenalty_help'] = 'Aquesta opció especifica la puntuació amb la qual es vol penalitzar l\'error per una unitat incorrecta.

Pren valors compresos entre 0 i 1. Si pren el valor 1, cal que tant la unitat com el valor siguin correctes per obtenir la puntuació. La unitat i la resposta es tracten com una sola entitat.
D\'altra banda, si es pren el valor 0, els alumnes poden obtenir la puntuació màxima amb només la resposta correcta, totes les cadenes aleatòries no tindran cap efecte al final de la resposta.

Per tant, es recomana utilitzar el valor 1 sempre que la resposta no tingui cap unitat associada.';
$string['unsupportedformulafunction'] = 'La funció {$a} no s\'admet';
$string['vars1'] = 'Variables locals';
$string['vars1_help'] = 'Podeu definir les variables locals aquí, de la mateixa manera que les variables globals s\'han definit al nivell de la pregunta.
Les variables definides aquí es poden emprar tant en la resposta de la part com en la retroacció, i el seu abast de visibilitat es limita a la part.';
$string['vars2'] = 'Variables de qualificació';
$string['vars2_help'] = 'Totes les variables locals, així com les respostes dels alumnes, es poden emprar aquí. Consulteu la documentació per a usos avançats.';
$string['varsdata'] = 'Conjunt de dades instanciades';
$string['varsglobal'] = 'Variables globals';
$string['varsglobal_help'] = 'Aquí es poden especificar fórmules per manipular les variables aleatòries instanciades
(totes les variables aleatòries estan disponibles aquí). La llista completa de funcions matemàtiques i operadors es dona a la documentació.

<pre class="prettyprint">a = 1.11111;<br>b = exp(3);<br>c = A + a + b;<br>d = sin(1.5*pi()) + c;<br>e = round(a, 0);<br>f = [0,1,2,3][A];<br>g = ["zero","one","two","three"][A];<br>distance = sqrt(a*a + b*b);</pre>';
$string['varsrandom'] = 'Variables aleatòries';
$string['varsrandom_help'] = 'Es generen valors aleatoris nous a l\'inici de cada intent. Es pot fer definint un conjunt d\'elements per triar:

<pre class="prettyprint">A = {1,2,3};<br>C = {[1,-1], [2,-2], [3,-3]};<br>E = {10:100:10, 100, 1000};</pre>

Els elements poden ser nombres, cadenes o llistes de nombres. A l\'inici de cada intent s\'agafarà un valor del conjunt i s\'assignarà a la variable de l\'esquerra. A més, per a un conjunt de nombres, podeu emprar una notació de l\'estil 10:100:10 (vegeu-ne l\'exemple E més amunt). </p>';
$string['varsstatistics'] = 'Estadístiques';
$string['yougotnright'] = 'Heu respost correctament {$a->num} part(s) d\'aquesta pregunta.';
