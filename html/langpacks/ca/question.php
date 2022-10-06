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
 * Strings for component 'question', language 'ca', branch 'MOODLE_38_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Acció';
$string['addanotherhint'] = 'Afegeix una altra pista';
$string['addcategory'] = 'Afegeix una categoria';
$string['addmorechoiceblanks'] = 'Afegeix {no} opcions més';
$string['adminreport'] = 'Informe sobre possibles problemes en la vostra base de dades de preguntes';
$string['advancedsearchoptions'] = 'Opcions de cerca';
$string['alltries'] = 'Tots els intents';
$string['answer'] = 'Resposta';
$string['answers'] = 'Respostes';
$string['answersaved'] = 'Resposta desada';
$string['attemptfinished'] = 'Intent acabat';
$string['attemptfinishedsubmitting'] = 'Envia l\'intent acabat';
$string['attemptoptions'] = 'Opcions de l\'intent';
$string['availableq'] = 'Disponible?';
$string['badbase'] = 'Base dolenta abans de **: {$a}**';
$string['behaviour'] = 'Comportament';
$string['behaviourbeingused'] = 'Comportament que s\'està utilitzant: {$a}';
$string['broken'] = 'Aquest enllaç no funciona. Apunta a un fitxer que no existeix.';
$string['byandon'] = 'per
<em>{$a->user}</em>
en
<em>{$a->time}</em>';
$string['cannotcopybackup'] = 'No s\'ha pogut copiar el fitxer de còpies de seguretat';
$string['cannotcreate'] = 'No s\'ha pogut crear una altra entrada a la taula d\'intents de la pregunta (question_attemps)';
$string['cannotcreatepath'] = 'No es pot crear el camí: {$a}';
$string['cannotdeletebehaviourinuse'] = 'No podeu esborrar aquest comportament \'{$a}\'. L\'utilitzen algunes preguntes.';
$string['cannotdeletecate'] = 'No podeu esborrar aquesta categoria, és la categoria per defecte en aquest context.';
$string['cannotdeleteneededbehaviour'] = 'No es pot esborrar el comportament de la pregunta \'{$a}\'. Hi ha altres comportaments instal·lats que depenen d\'ell.';
$string['cannotdeleteqtypeinuse'] = 'No podeu esborrar el tipus de pregunta \'{$a}\'. Encara hi ha preguntes d\'aquest tipus al banc de preguntes.';
$string['cannotdeleteqtypeneeded'] = 'No podeu esborrar el tipus de pregunta \'{$a}\'. Hi ha altres tipus de preguntes que s\'hi basen.';
$string['cannotenable'] = 'La pregunta del tipus {$a} no es pot crear directament.';
$string['cannotenablebehaviour'] = 'El comportament de la pregunta {$a} no es pot utilitzar directament. Es només per a ús intern.';
$string['cannotfindcate'] = 'No s\'ha pogut trobar el registre de la categoria';
$string['cannotfindquestionfile'] = 'No s\'han pogut trobar les dades de la pregunta al zip';
$string['cannotgetdsfordependent'] = 'No s\'ha pogut obtenir el conjunt de dades específic d\'una pregunta que depèn d\'un conjunt de dades! (pregunta: {$a->id},  element del conjunt: {$a->item})';
$string['cannotgetdsforquestion'] = 'No s\'ha pogut obtenir el conjunt de dades d\'una pregunta de resposta calculada! (pregunta: {$a})';
$string['cannothidequestion'] = 'No s\'ha pogut ocultar la pregunta';
$string['cannotimportformat'] = 'La importació d\'aquest format encara no s\'ha implementat';
$string['cannotinsertquestion'] = 'No s\'ha pogut inserir una pregunta!';
$string['cannotinsertquestioncatecontext'] = 'No s\'ha pogut inserir la categoria de pregunta nova {$a->cat} per un identificador de context erroni {$a->ctx}';
$string['cannotloadquestion'] = 'No s\'ha pogut carregar una pregunta';
$string['cannotmovequestion'] = 'No podeu utilitzar aquest script per moure preguntes que tenen associats fitxers procedents d\'àrees diverses.';
$string['cannotopenforwriting'] = 'No es pot obrir per escriure-hi: {$a}';
$string['cannotpreview'] = 'No podeu previsualitzar aquestes preguntes!';
$string['cannotread'] = 'No es pot llegir el fitxer d\'importació (o potser el fitxer és buit)';
$string['cannotretrieveqcat'] = 'No s\'ha pogut recuperar la categoria de la pregunta';
$string['cannotunhidequestion'] = 'No s\'ha pogut mostrar la pregunta.';
$string['cannotunzip'] = 'No s\'ha pogut descomprimir el fitxer zip';
$string['cannotwriteto'] = 'No es poden escriure les preguntes exportades a {$a}';
$string['categories'] = 'Categories';
$string['category'] = 'Categoria';
$string['categorycurrent'] = 'Categoria actual';
$string['categorycurrentuse'] = 'Utilitza aquesta categoria';
$string['categorydoesnotexist'] = 'Aquesta categoria no existeix';
$string['categoryinfo'] = 'Informació de la categoria';
$string['categorymove'] = 'La categoria «{$a->name}» conté {$a->count} preguntes (algunes d\'aquestes poden estar ocultes, o ser preguntes aleatòries que encara estan en ús en algun qüestionari). Escolliu a quina altra categoria voleu moure-les.';
$string['categorymoveto'] = 'Desa a la categoria';
$string['categorynamecantbeblank'] = 'El nom de la categoria no pot estar buit.';
$string['categorynamewithidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['categorynamewithidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->questioncount})';
$string['changeoptions'] = 'Canvia les opcions';
$string['changepublishstatuscat'] = 'Es canviarà l\'estat de publicació de la categoria <a href="{$a->caturl}">"{$a->name}"</a>, en el curs "{$a->coursename}", de <strong>{$a->changefrom} a {$a->changeto}</strong>.';
$string['check'] = 'Comprova';
$string['chooseqtypetoadd'] = 'Escolliu el tipus de pregunta';
$string['clearwrongparts'] = 'Buida les respostes incorrectes';
$string['clickflag'] = 'Marca la pregunta';
$string['clicktoflag'] = 'Marqueu aquesta pregunta per a una referència futura';
$string['clicktounflag'] = 'Desmarca aquesta pregunta';
$string['clickunflag'] = 'Desmarca aquesta pregunta';
$string['closepreview'] = 'Tanca la previsualització';
$string['combinedfeedback'] = 'Retroacció combinada';
$string['comment'] = 'Comentari';
$string['commented'] = 'Comentat: {$a}';
$string['commentormark'] = 'Fes un comentari o torna a puntuar';
$string['comments'] = 'Comentaris';
$string['commentx'] = 'Comentari: {$a}';
$string['complete'] = 'Completa';
$string['contexterror'] = 'No haurieu d\'haver arribat aquí fora que mogueu una categoria cap a un altre context';
$string['copy'] = 'Copia des de: {$a} i canvia enllaços';
$string['correct'] = 'Correcte';
$string['correctfeedback'] = 'Per a qualsevol resposta correcta';
$string['correctfeedbackdefault'] = 'La resposta és correcta.';
$string['created'] = 'Creació';
$string['createdby'] = 'Creada per ';
$string['createdmodifiedheader'] = 'Creació / darrera modificació';
$string['createnewquestion'] = 'Crea una nova pregunta...';
$string['cwrqpfs'] = 'Preguntes aleatòries que seleccionen preguntes de subcategories';
$string['cwrqpfsinfo'] = '<p>Durant l\'actualització a Moodle 1.9 se separaran les categories de preguntes en diferents contextos. Caldrà canviar l\'estat de publicació d\'algunes preguntes i categories de preguntes del vostre lloc. Això és necessari en casos com el vostre, quan hi ha preguntes «aleatòries» en un qüestionari definides de manera que trien preguntes de subcategories i alguna d\'aquestes subcategories té un estat de publicació diferent de l\'estat de la categoria mare on està creada la pregunta aleatòria.</p>
<p>Es canviarà l\'estat de publicació de les categories següents, d\'on treuen preguntes les preguntes «aleatòries» de categories mare, a l\'estat de publicació de la categoria que conté la pregunta aleatòria. Les preguntes afectades continuaran funcionant en tots els qüestionaris existents.</p>';
$string['cwrqpfsnoprob'] = 'El vostre lloc no conté categories afectades pel problema de les "preguntes aleatòries que seleccionen preguntes de subcategories".';
$string['decimalplacesingrades'] = 'Xifres decimals en les puntuacions';
$string['defaultfor'] = 'Categoria per defecte en {$a}';
$string['defaultinfofor'] = 'La categoria per defecte per a preguntes compartides en el context «{$a}».';
$string['defaultmark'] = 'Puntuació per defecte';
$string['defaultmarkmustbepositive'] = 'La puntuació per defecte ha de ser positiva.';
$string['deletecoursecategorywithquestions'] = ' Hi ha preguntes del banc de preguntes associades amb aquesta categoria del curs. Si procediu, s\'esborraran. Podeu desplaçar-les abans de continuar des de la interfície del banc de preguntes.';
$string['deletequestioncheck'] = 'Segur que voleu esborrar \'{$a}\'?';
$string['deletequestionscheck'] = 'Segur que voleu esborrar aquestes preguntes?
<br /><br />{$a}';
$string['deletingbehaviour'] = 'S\'esborrarà el comportament de preguntes \'{$a}\'';
$string['deletingqtype'] = 'Suprimeix el tipus de pregunta \'{$a}\'';
$string['didnotmatchanyanswer'] = '[No es troba cap resposta]';
$string['disabled'] = 'Desactivada';
$string['displayoptions'] = 'Opcions de visualització';
$string['disterror'] = 'La distribució {$a} crea problemes';
$string['donothing'] = 'No copieu ni mogueu fitxers, ni canvieu enllaços';
$string['editcategories'] = 'Edita les categories';
$string['editcategories_help'] = 'En lloc de mantenir-ho tot en una llista molt llarga, les preguntes es poden organitzar en categories i subcategories.

Cada categoria pertany a un context que determina on es poden utilitzar les preguntes de la categoria:

* Context d\'activitat - Les preguntes només estan disponibles dins del mòdul de l\'activitat.
* Context del curs - Les preguntes estan disponibles en tots els mòduls d\'activitats del curs.
* Context de la categoria del curs - Les preguntes estan disponibles en tots els mòduls d\'activitats i cursos en la categoria de cursos.
 * Context de sistema - Les preguntes queden disponibles en tots els cursos i totes les activitats del lloc.

Les categories també es poden utilitzar per preparar qüestionaris de preguntes aleatòries, com amb les preguntes triades d\'una categoria en particular.';
$string['editcategory'] = 'Edita la categoria';
$string['editingcategory'] = 'S\'està editant una categoria';
$string['editingquestion'] = 'S\'està editant una pregunta';
$string['editquestion'] = 'Edita la pregunta';
$string['editquestions'] = 'Edita les preguntes';
$string['editthiscategory'] = 'Edita aquesta categoria';
$string['emptyxml'] = 'Error desconegut  - imsmanifest.xml buit';
$string['enabled'] = 'Activada';
$string['erroraccessingcontext'] = 'Error: no hi ha accés al context';
$string['errordeletingquestionsfromcategory'] = 'Error en intentar esborrar les preguntes de la categoria {$a}';
$string['errorduringpost'] = 'Error durant el postprocessat!';
$string['errorduringpre'] = 'Error durant el preprocessat!';
$string['errorduringproc'] = 'Error durant el procés!';
$string['errorduringregrade'] = 'No es pot requalificar la pregunta {$a->quid}, es passa a l\'estat {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Error: no s\'ha pogut copiar el fitxer {$a}.';
$string['errorfilecannotbemoved'] = 'Error: no s\'ha pogut moure el fitxer {$a}.';
$string['errorfileschanged'] = 'Error: alguns fitxers enllaçats en les preguntes han canviat des de la visualització del formulari.';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'La pregunta ({$a}) apareix diverses vegades amb diferents ponderacions en diferents llocs del qüestionari. L\'informe estadístic no ho permet i podria reduir la  fiabilitat de les estadístiques d\'aquesta pregunta.';
$string['errormanualgradeoutofrange'] = 'La qualificació {$a->grade} no està entre 0 i {$a->maxgrade} a la pregunta [$a->name}. La puntuació i el comentari no s\'han desat.';
$string['errormovingquestions'] = 'Error en moure les preguntes amb identificador {$a}.';
$string['errorpostprocess'] = 'Error durant el postprocessat!';
$string['errorpreprocess'] = 'Error durant el preprocessat!';
$string['errorprocess'] = 'Error durant el procés!';
$string['errorprocessingresponses'] = 'S\'ha produït un error mentre es processaven les respostes ({$a}). Feu clic a continuar per tornar a la pàgina on éreu i torneu a provar-ho.';
$string['errorsavingcomment'] = 'S\'ha produït un error en desar el comentari a la pregunta {$a->name} a la base de dades.';
$string['errorsavingflags'] = 'S\'ha produït un error en desar l\'estat de l\'indicador';
$string['errorupdatingattempt'] = 'Error en actualitzar l\'intent {$a->id} a la base de dades.';
$string['eventquestioncategorycreated'] = 'Categoria de preguntes creada';
$string['export'] = 'Exporta';
$string['exportcategory'] = 'Exporta categoria';
$string['exportcategory_help'] = '<p>Aquest paràmetre determina la categoria de la qual s\'exportaran les preguntes.</p>
<p>Alguns formats d\'importació, com ara el GIFT i XML de Moodle, permeten copiar la categoria i el context al fitxer exportat, i això permet (opcionalment) recrear-los en una importació. Si cal, és recomanable que marqueu els quadres de selecció adequats.';
$string['exporterror'] = 'Errors durant l\'exportació!';
$string['exportfilename'] = 'preguntes';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportquestions'] = 'Exporta preguntes a un fitxer';
$string['exportquestions_help'] = 'Aquesta funció habilita l\'exportació d\'una categoria completa de preguntes (i les seves subcategories) en un fitxer. Tingueu en compte que, en funció del format de fitxer escollit, algunes dades de les preguntes i certs tipus de preguntes possiblement no s\'exportaran.';
$string['feedback'] = 'Retroacció';
$string['filecantmovefrom'] = 'Els fitxers de preguntes no es poden desplaçar perquè no teniu prou permisos per eliminar fitxers al lloc on ho intenteu.';
$string['filecantmoveto'] = 'Els fitxers de preguntes no es poden desplaçar o copiar perquè no teniu prou permisos per afegir fitxers al lloc on ho intenteu.';
$string['fileformat'] = 'Format del fitxer';
$string['filesareacourse'] = 'l\'àrea de fitxers del curs';
$string['filesareasite'] = 'l\'àrea de fitxers del lloc';
$string['filestomove'] = 'Voleu copiar o moure els fitxers a {$a}?';
$string['fillincorrect'] = 'Emplena amb les respostes correctes';
$string['firsttry'] = 'Primer intent';
$string['flagged'] = 'Marcada';
$string['flagthisquestion'] = 'Marca aquesta pregunta';
$string['formquestionnotinids'] = 'El formulari contenia preguntes que no troben els identificadors';
$string['fractionsnomax'] = 'Una de les respostes ha de tenir una puntuació del 100%, de manera que sigui possible aconseguir tots els punts en aquesta pregunta.';
$string['generalfeedback'] = 'Retroacció general';
$string['generalfeedback_help'] = 'La retroacció general es mostra a l\'alumnat després que hagi intentat contestar una pregunta. A diferència de la retroacció específica, que depèn del tipus de pregunta i de la resposta que l\'alumnat doni, es mostra el mateix text de retroacció general a tot l\'alumnat.

Podeu utilitzar la retroacció general per donar a l\'alumnat una resposta més completa o potser un enllaç amb més informació que puguin utilitzar si no entenen les preguntes.';
$string['getcategoryfromfile'] = 'Agafa la categoria del fitxer';
$string['getcontextfromfile'] = 'Agafa el context del fitxer';
$string['hintn'] = 'Pista {no}';
$string['hintnoptions'] = 'Opcions de la pista {no}';
$string['hinttext'] = 'Text de la pista';
$string['howquestionsbehave'] = 'Com es comporten les preguntes';
$string['howquestionsbehave_help'] = 'Els estudiants poden interactuar amb les preguntes del qüestionari de diverses maneres. Per exemple, potser vulgueu que els estudiants donin una resposta a cada pregunta i després enviïn el qüestionari complet, abans que sigui qualificat o rebi retroacció. Aquest mode és la «retroacció diferida».

Alternativament, podeu voler que els estudiants responguin cada pregunta i obtinguin una retroacció immediata i, si no contesten correctament de manera immediata, tinguin una altra oportunitat amb menor puntuació. Aquest mode seria «interactiu amb diversos intents».

Aquests probablement són els dos modes de comportament usats més comunament.';
$string['idnumber'] = 'Nombre ID';
$string['idnumber_help'] = 'Si l\'utilitzeu, el nombre ID ha de ser únic dins de cada categoria de preguntes. Ofereix una manera alternativa d\'identificar la pregunta que us pot ser útil, però que usualment podeu deixar en blanc.';
$string['ignorebroken'] = 'Ignora enllaços trencats';
$string['import'] = 'Importa';
$string['importcategory'] = 'Importació d\'una categoria';
$string['importcategory_help'] = '<p>Aquest paràmetre determina la categoria cap a on aniran les preguntes importades.</p>
<p>Alguns formats d\'importació, com ara el GIFT i XML de Moodle poden incloure la categoria i el context en el fitxer d\'importació. Per utilitzar aquesta informació, en lloc de la categoria seleccionada, cal haver marcat els quadres de selecció pertinents. Si les categories al fitxer d\'importació no es troben, se\'n crearan de noves.';
$string['importerror'] = 'S\'ha produït un error en el procés d\'importació.';
$string['importerrorquestion'] = 'Error en importar la pregunta.';
$string['importfromcoursefiles'] = '... o escolliu un fitxer de curs per importar.';
$string['importfromupload'] = 'Seleccioneu un fitxer per penjar ...';
$string['importingquestions'] = 'S\'importaran {$a} preguntes del fitxer';
$string['importparseerror'] = 'S\'han trobat error(s) en analitzar el fitxer d\'importació. No s\'ha importat cap pregunta. Per importar les preguntes ben formatades del fitxer, torneu-ho a intentar amb el paràmetre «Atura si es produeix un error» desactivat.';
$string['importquestions'] = 'Importació de preguntes des d\'un fitxer';
$string['importquestions_help'] = 'Aquesta funció activa la importació de preguntes de formats diversos via un fitxer de text. El fitxer ha d\'estar codificat amb l\'UTF-8.';
$string['importwrongfiletype'] = 'El tipus de fitxer que heu triat ({$a->actualtype}) no s\'acorda al tipus esperat per aquest format d\'importació ({$a->expectedtype}).';
$string['impossiblechar'] = 'Un caràcter inviable {$a} detectat com a caràcter de parèntesis.';
$string['includesubcategories'] = 'Mostra també les preguntes de les subcategories.';
$string['incorrect'] = 'Incorrecte';
$string['incorrectfeedback'] = 'Per a qualsevol resposta incorrecta';
$string['incorrectfeedbackdefault'] = 'La resposta és incorrecta.';
$string['information'] = 'Informació';
$string['invalidanswer'] = 'Resposta no vàlida o incompleta';
$string['invalidarg'] = 'Arguments proporcionats invàlids o configuració incorrecta del servidor';
$string['invalidcategoryidforparent'] = 'Identificador de la categoria invàlid per a la categoria contenidora!';
$string['invalidcategoryidtomove'] = 'Identificador de la categoria invàlid per desplaçar!';
$string['invalidconfirm'] = 'La cadena de confirmació és incorrecta';
$string['invalidcontextinhasanyquestions'] = 'El context passat a question_context_has_any_question és invàlid.';
$string['invalidgrade'] = 'Les qualificacions no casen amb les opcions de qualificació - es salta la pregunta.';
$string['invalidpenalty'] = 'Penalització incorrecta';
$string['invalidwizardpage'] = 'Incorrecte o pàgina auxiliar no especificada!';
$string['lastmodifiedby'] = 'Última modificació feta per ';
$string['lasttry'] = 'Darrer intent';
$string['linkedfiledoesntexist'] = 'El fitxer enllaçat {$a} no existeix';
$string['makechildof'] = 'Fes-la filla de: «{$a}»';
$string['makecopy'] = 'Fes-ne una còpia';
$string['maketoplevelitem'] = 'Mou al primer nivell';
$string['manualgradeinvalidformat'] = 'Aquest no és un nombre vàlid.';
$string['manualgradeoutofrange'] = 'Aquesta puntuació queda fora del rang vàlid.';
$string['manuallygraded'] = 'Puntuat manualment {$a->mark} amb un comentari: {$a->comment}';
$string['mark'] = 'Puntua';
$string['markedoutof'] = 'Puntuat sobre ';
$string['markedoutofmax'] = 'Puntuat sobre {$a}';
$string['markoutofmax'] = 'Puntuació {$a->mark} sobre {$a->max}';
$string['marks'] = 'Puntuacions';
$string['matchgrades'] = 'Qualificacions coincidents';
$string['matchgradeserror'] = 'Error si la qualificació no és a la llista';
$string['matchgrades_help'] = 'Les qualificacions importades han de coincidir amb algun dels valors de la llista fixa de qualficacions vàlides: 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0  (els valors negatius també són permesos). Pels valors que no coincideixin exactament amb la llista anterior, hi ha dues opcions:

* Error si no és a la llista - Si una pregunta conté qualificacions que no es troben a la llista, la pregunta no s\'importa i es visualitza un missatge d\'error.

* Valor més proper si no és a la llista - Si es troba una qualificació que no és a la llista, se substitueix pel valor més pròxim de la llista.';
$string['matchgradesnearest'] = 'Qualificació més propera si no és a la llista.';
$string['missingcourseorcmid'] = 'Cal el courseid o cmid per imprimir la pregunta.';
$string['missingcourseorcmidtolink'] = 'Cal el courseid o cmid per al get_question_edit_link.';
$string['missingimportantcode'] = 'A aquest tipus de pregunta li falta un codi important: {$a}.';
$string['missingoption'] = 'A la pregunta de buits {$a} li falten les opcions';
$string['modified'] = 'Darrera modificació';
$string['move'] = 'Mou des de: {$a} i canvia enllaços';
$string['movecategory'] = 'Mou la categoria';
$string['movedquestionsandcategories'] = 'S\'han desplaçat les preguntes i les categories de preguntes des de {$a->oldplace} a {$a->newplace}.';
$string['movelinksonly'] = 'No copiïs ni moguis fitxers, només canvia la destinació dels enllaços';
$string['moveq'] = 'Mou pregunta/es';
$string['moveqtoanothercontext'] = 'Mou la pregunta a un altre context';
$string['moveto'] = 'Mou a >>';
$string['movingcategory'] = 'S\'està movent la categoria';
$string['movingcategoryandfiles'] = 'Segur que voleu moure la categoria {$a->name}, i totes les categories que en són filles, al context "{$a->contextto}"?<br />S\'han detectat {$a->urlcount} fitxers enllaçats des de preguntes en {$a->fromareaname}. Voleu copiar o moure aquests fitxers a {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Segur que voleu moure la categoria {$a->name}, i totes les categories que en són filles, al context "{$a->contextto}"?';
$string['movingquestions'] = 'S\'estan movent les preguntes i fitxers';
$string['movingquestionsandfiles'] = 'Segur que voleu moure les preguntes {$a->questions} al context <strong>"{$a->tocontext}"</strong>?<br />S\'han detectat {<strong>{$a->urlcount} fitxers</strong> enllaçats des d\'aquestes preguntes en {$a->fromareaname}. Voleu copiar o moure aquests fitxers a {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Segur que voleu moure les preguntes {$a->questions} al context <strong>"{$a->tocontext}"</strong>?<br />No s\'ha detectat <strong>cap fitxer</strong> enllaçat des d\'aquestes preguntes en {$a->fromareaname}.';
$string['needtochoosecat'] = 'Heu de triar una categoria on moure aquesta pregunta o cancel·lar.';
$string['nocate'] = 'No es troba la categoria {$a} (!)';
$string['nopermissionadd'] = 'No teniu permís per a afegir preguntes aquí.';
$string['nopermissionmove'] = 'No teniu permisos per desplaçar preguntes des d\'aquí. Heu de desar la pregunta en aquesta categoria o desar-la com a pregunta nova.';
$string['noprobs'] = 'No s\'han trobat problemes en la vostra base de dades de preguntes.';
$string['noquestions'] = 'No s\'han trobat preguntes que puguin ser exportades. Assegureu-vos que seleccioneu una categoria d\'exportació que contingui preguntes.';
$string['noquestionsinfile'] = 'No hi ha preguntes en el fitxer';
$string['noresponse'] = '[Sense resposta]';
$string['notagfiltersapplied'] = 'No hi ha cap filtre d\'etiqueta aplicat';
$string['notanswered'] = 'No s\'ha respost';
$string['notchanged'] = 'No ha canviat des de l\'últim intent';
$string['notenoughanswers'] = 'Aquest tipus de pregunta necessita almenys {$a} resposta/respostes';
$string['notenoughdatatoeditaquestion'] = 'No s\'han especificat l\'identificador de la pregunta, ni el de la categoria i el tipus de pregunta.';
$string['notenoughdatatomovequestions'] = 'Heu de proporcionar els identificadors de les preguntes que voleu moure.';
$string['notflagged'] = 'Desmarcada';
$string['notgraded'] = 'Sense qualificar';
$string['notshown'] = 'No es mostra';
$string['notyetanswered'] = 'No s\'ha respost encara';
$string['notyourpreview'] = 'Aquesta previsualització no us pertany';
$string['novirtualquestiontype'] = 'No es disposa d\'un tipus virtual de pregunta per a la pregunta {$a}';
$string['numqas'] = 'Nombre d\'intents de pregunta';
$string['numquestions'] = 'Cap pregunta';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} ocultes)';
$string['options'] = 'Opcions';
$string['page-question-category'] = 'Pàgina de categories de preguntes';
$string['page-question-edit'] = 'Pàgina d\'edició de preguntes';
$string['page-question-export'] = 'Pàgina d\'exportació de preguntes';
$string['page-question-import'] = 'Pàgina d\'importació de preguntes';
$string['page-question-x'] = 'Qualsevol pàgina de preguntes';
$string['parent'] = 'Mare';
$string['parentcategory'] = 'Categoria mare';
$string['parentcategory_help'] = 'La categoria mare és la que contindrà la categoria nova. "Dalt de tot" significa que aquesta categoria no queda continguda dins de cap altra. Els contextos de les categories apareixen en negreta. Hi ha d\'haver com a mínim una categoria en cada context.';
$string['parenthesisinproperclose'] = 'El parèntesi d\'abans de ** no queda ben tancat a {$a}**';
$string['parenthesisinproperstart'] = 'El parèntesi de després de ** no queda ben obert a {$a}**.';
$string['parsingquestions'] = 'Analitza i inclou preguntes d\'un fitxer d\'importació.';
$string['partiallycorrect'] = 'Parcialment correcte';
$string['partiallycorrectfeedback'] = 'Per a qualsevol resposta parcialment correcta';
$string['partiallycorrectfeedbackdefault'] = 'La resposta és parcialment correcta.';
$string['penaltyfactor'] = 'Factor de penalització';
$string['penaltyfactor_help'] = '<p>Podeu especificar quina fracció de la puntuació aconseguida cal restar per cada resposta incorrecta. Això només és rellevant si el qüestionari funciona en mode adaptatiu, de manera que l\'estudiant pugui donar respostes repetides a una pregunta. El factor de penalització ha de ser un número entre 0 i 1. Un factor de penalització d\'1 vol dir que l\'estudiant ha d\'aconseguir la resposta correcta la primera vegada per tal d\'obtenir-hi crèdit. Un factor de penalització de 0 vol dir que l\'estudiant pot provar tantes vegades com vulgui i encara obté la puntuació completa.
</p';
$string['penaltyforeachincorrecttry'] = 'Penalització per a cada intent incorrecte';
$string['penaltyforeachincorrecttry_help'] = 'Quan feu respondre les preguntes fent servir el comportament «Mode adaptatiu» o «Interactiu amb intents múltiples», a fi que l\'alumne disposi de diversos intents per respondre-les bé, aleshores aquesta opció controla la penalització per cada intent incorrecte.

La penalització és una proporció del valor total de la pregunta: si la pregunta val 3 punts i la penalització és de 0.3333333, l\'alumne tindrà 3 punts si la completa bé la primera vegada; 2 si la completa al segon intent; i 1 si la respon bé al tercer intent.';
$string['permissionedit'] = 'Edita aquesta pregunta';
$string['permissionmove'] = 'Mou aquesta pregunta';
$string['permissionsaveasnew'] = 'Desa com a pregunta nova';
$string['permissionto'] = 'Teniu permís per a:';
$string['previewquestion'] = 'Previsualitza la pregunta: {$a}';
$string['published'] = 'pública';
$string['qtypeveryshort'] = 'T';
$string['questionaffected'] = 'La pregunta <a href="{$a->qurl}">"{$a->name}" ({$a->qtype})</a> es troba en aquesta categoria, però també és utilitzada al qüestionari <a href="{$a->qurl}">"{$a->quizname}"</a> d\'un altre curs ("{$a->coursename}").';
$string['questionbank'] = 'Banc de preguntes';
$string['questionbehaviouradminsetting'] = 'Paràmetres del comportament de la pregunta';
$string['questionbehavioursdisabled'] = 'Comportaments de preguntes per desactivar';
$string['questionbehavioursdisabledexplained'] = 'Escriviu una llista separada per comes dels comportaments que no voleu que apareguin al menú de selecció.';
$string['questionbehavioursorder'] = 'Ordre dels comportaments de les preguntes';
$string['questionbehavioursorderexplained'] = 'Escriviu una llista separada per comes amb els comportaments de preguntes en l\'ordre que voleu que apareguin al menú de selecció.';
$string['questioncategory'] = 'Categoria de preguntes';
$string['questioncatsfor'] = 'Categories de preguntes en «{$a}»';
$string['questiondoesnotexist'] = 'Aquesta pregunta no existeix';
$string['questionidmismatch'] = 'Identificadors de preguntes desajustats';
$string['questionname'] = 'Nom de la pregunta';
$string['questionnamecopy'] = '{$a} (còpia)';
$string['questionno'] = 'Pregunta {$a}';
$string['questionpreviewdefaults'] = 'Valors per defecte de la previsualització de les preguntes';
$string['questionpreviewdefaults_desc'] = 'Aquests valors per defecte s\'utilitzen quan un usuari primer visualitza una pregunta al banc de preguntes. Una vegada que un usuari ha previsualitzat una pregunta, les seves preferències personals s\'emmagatzemen com preferències d\'usuari.';
$string['questions'] = 'Preguntes';
$string['questionsaveerror'] = 'S\'ha produït un error en desar la pregunta - {{$a}}';
$string['questionsinuse'] = '(* Les preguntes marcades amb un asterisc s\'utilitzen en algun qüestionari. No s\'hi poden eliminar, només es poden treure de la llista de la categoria.)';
$string['questionsmovedto'] = 'Una pregunta en ús s\'ha desplaçat a "{$a} a la categoria mare del curs.';
$string['questionsrescuedfrom'] = 'Preguntes desades del context {$a}.';
$string['questionsrescuedfrominfo'] = 'Aquestes preguntes (alguna de les quals pot haver-se ocultat) s\'han desat quan el context «{$a}» s\'ha esborrat, perquè encara les ulititzen alguns qüestionaris o altres activitats.';
$string['questiontext'] = 'Text de la pregunta';
$string['questiontype'] = 'Tipus de pregunta';
$string['questionuse'] = 'Usa pregunta en aquesta activitat';
$string['questionvariant'] = 'Variant de la pregunta';
$string['questionx'] = 'Pregunta {$a}';
$string['requiresgrading'] = 'Cal puntuar';
$string['responsehistory'] = 'Historial de les respostes';
$string['restart'] = 'Torna a començar';
$string['restartwiththeseoptions'] = 'Torna a començar amb aquestes opcions';
$string['reviewresponse'] = 'Revisa la resposta';
$string['rightanswer'] = 'Resposta correcta';
$string['rightanswer_help'] = 'un resum generat automàticament de la resposta correcta. Això es pot limitar, per la qual cosa potser vulgueu considerar explicar la solució correcta en la retroacció general de la pregunta i desactivar aquesta opció.';
$string['save'] = 'Desa';
$string['savechangesandcontinueediting'] = 'Desa el canvis i continua editant';
$string['saved'] = 'Desada: {$a}';
$string['saveflags'] = 'Desa l\'estat dels marcadors';
$string['selectacategory'] = 'Tria una categoria:';
$string['selectaqtypefordescription'] = 'Seleccioneu un tipus de pregunta per veure\'n la descripció.';
$string['selectcategoryabove'] = 'Selecciona una categoria';
$string['selectquestionsforbulk'] = 'Seleccioneu les preguntes per aplicar-hi accions de conjunt';
$string['settingsformultipletries'] = 'Intents múltiples';
$string['shareincontext'] = 'Publica en el context {$a}';
$string['showhidden'] = 'Mostra també les preguntes antigues';
$string['showmarkandmax'] = 'Mostra la puntuació i el màxim';
$string['showmaxmarkonly'] = 'Mostra només la puntuació màxima';
$string['shown'] = 'Mostrat';
$string['shownumpartscorrect'] = 'Mostra el nombre de respostes correctes';
$string['shownumpartscorrectwhenfinished'] = 'Mostra el nombre de respostes correctes';
$string['showquestiontext'] = 'Mostra el text de la pregunta a la llista de preguntes';
$string['specificfeedback'] = 'Retroacció específica';
$string['specificfeedback_help'] = 'Retroacció que depèn de la resposta donada per  l\'estudiant.';
$string['started'] = 'Iniciat';
$string['state'] = 'Estat';
$string['step'] = 'Pas';
$string['stoponerror'] = 'Atura si es produeix un error';
$string['stoponerror_help'] = 'Aquest paràmetre determina si el procés d\'importació s\'atura quan es detecta un error, i no s\'importa cap pregunta; o si s\'ignoren les preguntes amb errors i s\'importen les completes.';
$string['submissionoutofsequence'] = 'Sortiu fora de la seqüència. No feu clic per anar enrere quan treballeu en preguntes de qüestionaris.';
$string['submissionoutofsequencefriendlymessage'] = 'Heu introduït dades fora de la seqüència normal. Això pot passar si feu servir els controls d\'avançar i retrocedir del navegador d\'Internet; no els feu servir mentre completeu el test. També podria passar si feu clic en algun punt quan es carrega una pàgina. Feu clic a <strong>Continua</strong> per reprendre.';
$string['submit'] = 'Envia';
$string['submitandfinish'] = 'Envia i acaba';
$string['submitted'] = 'Tramet: {$a}';
$string['tagarea_question'] = 'Preguntes';
$string['technicalinfo'] = 'Informació tècnica';
$string['technicalinfo_help'] = 'Aquesta informació tècnica és, probablement, només útil per a desenvolupadors que treballen en nous tipus de pregunta. També pot ser útil quan es tracta de diagnosticar problemes amb les preguntes.';
$string['technicalinfomaxfraction'] = 'Fracció màxima: {$a}';
$string['technicalinfominfraction'] = 'Fracció mínima: {$a}';
$string['technicalinfoquestionsummary'] = 'Resum de la pregunta: {$a}';
$string['technicalinforesponsesummary'] = 'Resum de respostes: {$a}';
$string['technicalinforightsummary'] = 'Resum de la resposta correcta: {$a}';
$string['technicalinfostate'] = 'Estat de la pregunta: {$a}';
$string['technicalinfovariant'] = 'Variant de pregunta: {$a}';
$string['tofilecategory'] = 'Inclou la categoria al fitxer';
$string['tofilecontext'] = 'Inclou el context al fitxer';
$string['uninstallbehaviour'] = 'Desinstal·la aquest comportament de preguntes.';
$string['uninstallqtype'] = 'Desinstal·la aquest tipus de pregunta';
$string['unknown'] = 'Desconegut';
$string['unknownbehaviour'] = 'Comportament desconegut: {$a}.';
$string['unknownorunhandledtype'] = 'Tipus de pregunta desconegut o no utilitzable: {$a}';
$string['unknownquestion'] = 'Pregunta desconeguda: {$a}.';
$string['unknownquestioncatregory'] = 'Categoria de preguntes desconeguda: {$a}.';
$string['unknownquestiontype'] = 'Tipus de pregunta desconegut: {$a}.';
$string['unknowntolerance'] = 'Tipus de tolerància {$a} desconegut ';
$string['unpublished'] = 'no pública';
$string['unusedcategorydeleted'] = 'S\'ha suprimit aquesta categoria perquè, després de suprimir el curs, les seves preguntes ja no eren utilitzades en cap altre curs.';
$string['updatedisplayoptions'] = 'Actualitza les opcions de visualització';
$string['upgradeproblemcategoryloop'] = 'S\'ha detectat un problema en actualitzar una categoria de preguntes. Hi ha un salt en l\'arbre de categories. Els identificadors de categories afectats són {$a}.';
$string['upgradeproblemcouldnotupdatecategory'] = 'No es pot actualitzar la categoria de preguntes {$a->name} ({$a->id})';
$string['upgradeproblemunknowncategory'] = 'S\'ha detectat un problema en actualitzar les categories de preguntes. La categoria {$a->id} es refereix a una categoria mare, {$a->parent},inexistent. Es canvia la categoria mare per arreglar el problema';
$string['whethercorrect'] = 'Si és correcte';
$string['whethercorrect_help'] = 'Això es refereix tant a la descripció textual \'Correcte\', \'Parcialment correcte\' i \'Incorrecte\', com a qualsevol ressaltat de color que transmet la mateixa informació.';
$string['whichtries'] = 'Quins intents';
$string['withselected'] = 'Amb el que s\'ha seleccionat';
$string['wrongprefix'] = 'Nom de prefix mal format ({$a})';
$string['xoutofmax'] = '{$a->mark} sobre {$a->max}';
$string['yougotnright'] = 'Heu seleccionat correctament {$a->num}.';
$string['youmustselectaqtype'] = 'Cal que trieu el tipus de pregunta';
$string['yourfileshoulddownload'] = 'El fitxer d\'exportació hauria de començar a descarregar-se immediatament. Si això no passa, feu clic <a href="{$a}">aquí</a>.';
