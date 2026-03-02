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
 * Strings for component 'tiny_c4l', language 'ca', version '4.5'.
 *
 * @package     tiny_c4l
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalhtml'] = 'Pàgina d\'administració de l\'HTML addicional';
$string['aimedatstudents'] = 'Adreçats als estudiants';
$string['aimedatstudents_desc'] = 'Per defecte, només els components seleccionats estaran disponibles per als usuaris amb capacitats d\'estudiant en emprar l\'editor. Per modificar la configuració per defecte, activeu o desactiveu els components que preferiu.';
$string['aiuseallowed'] = 'Ús d\'IA permès';
$string['aiusenotallowed'] = 'Ús d\'IA no permès';
$string['aiusereported'] = 'S\'ha notificat l\'ús d\'IA';
$string['align-center'] = 'Alinea al centre';
$string['align-left'] = 'Alinea a l\'esquerra';
$string['align-right'] = 'Alinea a la dreta';
$string['allpurposecard'] = 'Requadre multipropòsit';
$string['attention'] = 'Atenció';
$string['button_c4l'] = 'C4L';
$string['c4l:use'] = 'Utilitza TinyMCE C4L';
$string['c4l:viewplugin'] = 'Visualitza el connector C4L';
$string['caption'] = 'Citació';
$string['comfort-reading'] = 'Lectura de confort';
$string['conceptreview'] = 'Revisió del concepte';
$string['contextual'] = 'Contextuals';
$string['custom'] = 'Personalitzat';
$string['customcompcode'] = 'Component de codi HTML {$a}';
$string['customcompcodedesc'] = 'La paraula <code>{{CUSTOMCLASS}}</code> és una classe obligatòria que ha d\'estar al costat de les classes CSS dels components principals. <br />
Exemple de codi:
<pre>
&lt;div class="{{CUSTOMCLASS}} &lt;!-- Afegiu aquí les classes CSS principals --&gt;"&gt;
    &lt;p&gt;{{PLACEHOLDER}}&lt;/p&gt;
&lt;/div&gt;
</pre>
Heu de tenir en compte que qualsevol codi Javascript o CSS en línia s\'eliminarà abans de dur a terme el renderitzat.';
$string['customcompcount'] = 'Nombre de components personalitzats';
$string['customcompcountdesc'] = 'Nombre de components personalitzats que es crearan';
$string['customcompenable'] = 'Habilita el component {$a}';
$string['customcompenabledesc'] = 'Si està habilitat, aquest component estarà disponible.';
$string['customcompicon'] = 'Icona del component {$a}';
$string['customcompicondesc'] = 'Icona opcional pel component. Mida recomanada: 18x18 píxels.';
$string['customcompname'] = 'Component de botó de text {$a}';
$string['customcompnamedesc'] = 'Text que es mostra dins el botó';
$string['customcomponents'] = 'Components personalitzats';
$string['customcompsortorder'] = 'Component d\'ordre de classificació {$a}';
$string['customcompsortorderdesc'] = 'Estableix la posició del component a la interfície d\'usuari.';
$string['customcomptext'] = 'Component de text de marcador de posició {$a}';
$string['customcomptextdesc'] = 'Text que es mostrarà com a marcador de posició al component. Inseriu la paraula <code>{{PLACEHOLDER}}</code> al codi.';
$string['customcomptitle'] = 'Component personalitzat {$a}';
$string['customcompvariant'] = 'Habilita el component de variants {$a}';
$string['customcompvariantdesc'] = 'Si està habilitat, la variant d\'amplada completa estarà disponible per a aquest component.';
$string['customimagesbank'] = 'Banc d\'imatges';
$string['customimagesbankdesc'] = 'Per inserir qualsevol de les imatges carregades al vostre codi, afegiu aquesta línia:<br />
<code>&lt;img src="{{filename.extension}}" alt="Imatge personalitzada"&gt;</code>';
$string['custompreviewcss'] = 'Codi CSS';
$string['custompreviewcssdesc'] = 'CSS utilitzat per previsualitzar els components dins l\'editor.
<p>Qualsevol codi CSS afegit aquí també s\'ha d\'incloure al vostre tema o dins de les etiquetes d\'estil <code>&lt;style&gt;...&lt;style&gt;</code> i desar-lo a la configuració <strong>additionalhtmlhead</strong> a {$a};
en cas contrari, els vostres estils no s\'aplicaran als vostres components quan es renderitzin.</p>';
$string['do-card'] = 'Requadre correcte';
$string['docs'] = 'Quan s\'ha d\'usar?';
$string['docs_aiuseallowed_desc'] = 'Indica que es permet l\'ús d’eines d’intel·ligència artificial per a una activitat o avaluació específica.';
$string['docs_aiuseallowed_use1'] = 'Les eines d\'IA es poden utilitzar com a part del procés d\'aprenentatge.';
$string['docs_aiuseallowed_use2'] = 'Es vol reduir l\'ambigüitat sobre si l\'ús d\'IA és acceptable.';
$string['docs_aiusenotallowed_desc'] = 'Estableix clarament que l\'ús d\'eines d\'intel·ligència artificial està prohibit per a una activitat o avaluació específica.';
$string['docs_aiusenotallowed_use1'] = 'L\'avaluació requereix un treball independent.';
$string['docs_aiusenotallowed_use2'] = 'L\'objectiu d\'aprenentatge implica demostrar competència individual.';
$string['docs_aiusenotallowed_use3'] = 'La tasca es realitza en condicions controlades o d\'examen.';
$string['docs_aiusereported_desc'] = 'Indica que es permet l\'ús d\'eines d\'intel·ligència artificial, però que l\'estudiant n\'ha de declarar explícitament l\'ús.';
$string['docs_aiusereported_use1'] = 'L\'ús d\'IA està permès, però s\'ha de documentar.';
$string['docs_aiusereported_use2'] = 'La transparència i l\'ús responsable de la IA són objectius d\'aprenentatge.';
$string['docs_aiusereported_use3'] = 'S\'espera que els estudiants reflexionin críticament respecte l\'ús que facin de les eines d\'IA.';
$string['docs_aiusereported_use4'] = 'La normativa institucional requereix informar de l\'assistència d\'IA.';
$string['docs_allpurposecard_desc'] = 'Proporciona un fragment de contingut amb un context visual propi, per fer-lo específic o diferent.';
$string['docs_allpurposecard_use1'] = 'En continguts teòrics, estableix un context separat del fil principal.';
$string['docs_allpurposecard_use2'] = 'En qüestionaris o altres entorns d\'avaluació o pràctica que inclouen teoria i pràctica, es pot utilitzar com a contenidor de la teoria.';
$string['docs_attention_desc'] = 'Atreu l\'atenció de l\'estudiant sobre algun aspecte o alguna informació rellevants.';
$string['docs_attention_use1'] = 'Per advertir l\'estudiant d\'algun aspecte rellevant que ha de tenir en compte en relació amb un tema d\'estudi.';
$string['docs_attention_use2'] = 'En el context d\'un flux d\'aprenentatge predefinit, atreu l\'atenció de l\'estudiant cap a una manera recomanada (o esperada) de procedir en un context determinat.';
$string['docs_conceptreview_desc'] = 'Recupera un concepte après prèviament que pot ser útil de cara al fet que l\'estudiant entengui millor un concepte nou que s\'està introduint.';
$string['docs_conceptreview_use1'] = 'Ajuda l\'estudiant a recordar la rellevància d\'un concepte après prèviament, amb la qual cosa fa que sigui més conscient del seu paper dins el recorregut d\'aprenentatge global.';
$string['docs_conceptreview_use2'] = 'Quan es treballa amb contingut nou que implica una càrrega cognitiva elevada, permet a l\'educador proporcionar un accés ràpid als coneixements previs.';
$string['docs_dodontcards_desc'] = 'Presentació comparativa en la qual l\'estudiant pot trobar les maneres correctes i incorrectes de fer alguna cosa o de concebre una idea concreta en un mateix context visual.';
$string['docs_dodontcards_use1'] = 'En un context pràctic (habitualment), per aclarir la manera correcta o incorrecta de fer alguna cosa.';
$string['docs_dodontcards_use2'] = 'En un context teòric, per ajudar l\'estudiant a apreciar les diferències entre un enfocament correcte i un d\'erroni sobre un concepte o una idea concrets.';
$string['docs_duedate_desc'] = 'Mostra la data límit en què s\'espera que l\'estudiant completi una tasca.';
$string['docs_duedate_use1'] = 'Per destacar visualment la data límit i facilitar que l\'estudiant la tingui present.';
$string['docs_estimatedtime_desc'] = 'Mostra el temps estimat que l\'estudiant necessita per realitzar una activitat.';
$string['docs_estimatedtime_use1'] = 'En un context teòric, per ajudar l\'estudiant a calcular la durada aproximada d\'un contingut concret.';
$string['docs_estimatedtime_use2'] = 'En un context pràctic, per establir el temps òptim o necessari per dur a terme una tasca.';
$string['docs_example_desc'] = 'Mostra un cas significatiu que ajuda l\'estudiant a comprendre un concepte o una idea explicats en el contingut.';
$string['docs_example_use1'] = 'Per mostrar un exemple que requereix un cert grau d\'elaboració.';
$string['docs_example_use2'] = 'En un context pràctic, per mostrar una demostració d\'una manera concreta de resoldre el problema.';
$string['docs_expectedfeedback_desc'] = 'Proporciona a l\'estudiant retroacció o informació relacionada amb una tasca concreta.';
$string['docs_expectedfeedback_use1'] = 'Per proporcionar a l\'estudiant retroacció relacionada amb la tasca actual.';
$string['docs_expectedfeedback_use2'] = 'Si no s\'ofereix retroacció en aquell moment, per indicar quan la rebrà l\'estudiant.';
$string['docs_expectedfeedback_use3'] = 'Si no s\'ofereix retroacció en aquell moment, per especificar com serà la retroacció i/o els requisits per rebre-la.';
$string['docs_figure_desc'] = 'Integra una imatge dins del flux del contingut, i permet afegir-hi una nota a peu de pàgina i l\'atribució de la font.';
$string['docs_figure_use1'] = 'Per il·lustrar un concepte esmentat en el contingut.';
$string['docs_figure_use2'] = 'Per afegir precisió o detall a un concepte o una idea concrets.';
$string['docs_figure_use3'] = 'Per ajudar a reduir la complexitat d\'un concepte que requereix un nivell d\'abstracció elevat per ser comprès.';
$string['docs_furtherreading_desc'] = 'Una llista de recursos complementaris seleccionats que permeten a l\'estudiant aprofundir, ampliar o reforçar el contingut.';
$string['docs_furtherreading_use1'] = 'Per oferir recursos opcionals als estudiants que vulguin explorar un tema amb més profunditat.';
$string['docs_furtherreading_use2'] = 'Per complementar el contingut principal amb perspectives, explicacions o formats alternatius.';
$string['docs_furtherreading_use3'] = 'Per donar suport a diferents preferències d\'aprenentatge proporcionant recursos diversos.';
$string['docs_furtherreading_use4'] = 'Per apuntar a materials de referència que reforcin les idees clau.';
$string['docs_gradingvalue_desc'] = 'Mostra el valor relatiu de la qualificació d\'una tasca concreta.';
$string['docs_gradingvalue_use1'] = 'Pensat únicament per a contextos pràctics, estableix el valor parcial de la tasca actual respecte a la qualificació total.';
$string['docs_inlinetag_desc'] = 'Permet fer referència a una categoria o a altres taxonomies dins d\'un paràgraf.';
$string['docs_inlinetag_use1'] = 'Quan una categoria o taxonomia s\'ha establert mitjançant el component Etiqueta, s\'utilitza l\'etiqueta en línia per fer-hi referència dins d\'un text.';
$string['docs_inlinetag_use2'] = 'Per a categories implícites relacionades amb l\'estat del contingut; per exemple, per indicar que un article s\'ha afegit recentment amb una etiqueta de «Nou».';
$string['docs_keyconcept_desc'] = 'Destaca un concepte o una idea.';
$string['docs_keyconcept_use1'] = 'Definició concisa d\'un concepte rellevant.';
$string['docs_keyconcept_use2'] = 'Síntesi breu d\'un concepte concret que s\'ha explicat anteriorment.';
$string['docs_keyconcept_use3'] = 'En materials científics, per mostrar fórmules o resultats matemàtics abstractes.';
$string['docs_learningoutcomes_desc'] = 'Mostra els resultats d\'aprenentatge que s\'espera que l\'estudiant adquireixi després de completar un curs o una activitat.';
$string['docs_learningoutcomes_use1'] = 'Per mostrar els objectius d\'aprenentatge (els resultats globals previstos d\'un curs o programa).';
$string['docs_learningoutcomes_use2'] = 'Per mostrar els objectius d\'aprenentatge específics (allò que s\'espera que l\'estudiant adquireixi després de participar en una activitat concreta).';
$string['docs_nodocsavailable_desc'] = 'No hi ha documentació disponible per a aquest component.';
$string['docs_proceduralcontext_desc'] = 'Proporciona a l\'estudiant una descripció detallada d\'un procediment que cal seguir en un context determinat.';
$string['docs_proceduralcontext_use1'] = 'Per convidar l\'estudiant a dur a terme una acció concreta.';
$string['docs_proceduralcontext_use2'] = 'Per mantenir informat l\'estudiant sobre el punt del seu itinerari d\'aprenentatge en què es troba en aquell moment.';
$string['docs_proceduralcontext_use3'] = 'En un context pràctic, per detallar les característiques d\'un resultat esperat.';
$string['docs_quote_desc'] = 'Destaca una citació textual d\'un autor o d\'una obra externa al contingut.';
$string['docs_quote_use1'] = 'Per emfatitzar un concepte o una idea concrets, ressaltant-ne la importància o ajudant l\'estudiant a comprendre\'n el significat i les implicacions.';
$string['docs_quote_use2'] = 'Per mostrar un punt de vista experimentat sobre una qüestió concreta.';
$string['docs_quote_use3'] = 'Per aportar context a un tema concret.';
$string['docs_quote_use4'] = 'Per mostrar judicis informats d\'autors destacats o personatges històrics.';
$string['docs_readingcontext_desc'] = 'Proporciona un context visual adequat per a la lectura, aplicable a fragments de text del contingut principal.';
$string['docs_readingcontext_use1'] = 'Per fer un text més llegible o fàcilment identificable com a literari o especialitzat.';
$string['docs_readingcontext_use2'] = 'Per transmetre la sensació d\'un context separat en el qual predomina l\'acció de llegir.';
$string['docs_readingcontext_use3'] = 'Per mostrar una citació considerablement més llarga que les citacions d\'una sola frase, per a les quals el component Citació és més adequat.';
$string['docs_reminder_desc'] = 'Recupera un concepte concret que pot ajudar l\'estudiant a comprendre millor el tema que està aprenent.';
$string['docs_reminder_use1'] = 'Quan s\'introdueix un concepte nou que requereix uns coneixements previs concrets.';
$string['docs_reminder_use2'] = 'Després d\'explicar un concepte complex, per resumir la part essencial que es vol que l\'estudiant recordi.';
$string['docs_reminder_use3'] = 'Per refrescar la memòria de l\'estudiant amb relació a un concepte teòric necessari per resoldre un exercici.';
$string['docs_tag_desc'] = 'Estableix un entorn contextual pel que fa al tipus de matèria, categoria o taxonomies similars.';
$string['docs_tag_use1'] = 'Per mostrar contingut sota una taxonomia específica seguint una lògica diferent de la jerarquia principal de títols.';
$string['docs_tag_use2'] = 'En un context pràctic, per separar àmbits entre les diferents competències requerides durant la seva implementació.';
$string['docs_tip_desc'] = 'Ofereix un consell, un suggeriment o una pista.';
$string['docs_tip_use1'] = 'Per oferir consells o orientacions (sobre el contingut en si, no sobre aspectes procedimentals relacionats amb l\'aprenentatge).';
$string['docs_tip_use2'] = 'Per desambiguar un concepte.';
$string['docs_tip_use3'] = 'Per ajudar a prevenir un error habitual (un concepte o una idea concrets que sovint s\'entenen malament o generen confusió).';
$string['docs_usecases'] = 'Casos d\'ús';
$string['dodontcards'] = 'Requadres correcte/incorrecte';
$string['dont-card'] = 'Requadre incorrecte';
$string['dont-card-only'] = 'Només requadre incorrecte';
$string['duedate'] = 'Data límit';
$string['enabledocs'] = 'Habilita la documentació';
$string['enabledocs_desc'] = 'Si està activat, es mostra un panell de documentació al costat de la previsualització.';
$string['enablepreview'] = 'Activa la previsualització';
$string['enablepreview_desc'] = 'Si s\'activa, es mostrarà una previsualització de cada component en passar-hi el cursor per damunt.';
$string['estimatedtime'] = 'Temps estimat';
$string['evaluative'] = 'Avaluatius';
$string['example'] = 'Exemple';
$string['expectedfeedback'] = 'Retroacció esperada';
$string['figure'] = 'Figura';
$string['full-width'] = 'Amplada completa';
$string['furtherreading'] = 'Lectures complementàries';
$string['generalsettings'] = 'General';
$string['gradingvalue'] = 'Valor de la qualificació';
$string['helper'] = 'Ajudant';
$string['helplinktext'] = 'Ajudant de Components per a l\'aprenentatge (C4L)';
$string['inlinetag'] = 'Etiqueta en línia (inline)';
$string['keyconcept'] = 'Concepte clau';
$string['learningoutcomes'] = 'Resultats d\'aprenentage';
$string['menuitem_c4l'] = 'Components per a l\'aprenentatge (C4L)';
$string['min'] = 'min';
$string['notintendedforstudents'] = 'No adreçats als estudiants';
$string['notintendedforstudents_desc'] = 'Per defecte, l\'ús dels components avaluatius i procedimentals en l\'editor no està dirigit a usuaris amb capacitats d\'estudiant. Per canviar aquest valor establert per defecte, trieu quins components voleu que passin a estar disponibles per als estudiants.';
$string['ordered-list'] = 'Llista numerada';
$string['pluginname'] = 'Components per a l\'aprenentatge (C4L)';
$string['preview'] = 'Previsualització';
$string['previewdefault'] = 'Col·loca el cursor sobre els components per veure\'n la previsualització.';
$string['previewdocsdefault'] = 'Col·loca el cursor sobre qualsevol component per veure\'n els casos d\'ús recomanats.';
$string['privacy:preference:components_variants'] = 'Variants preferides de cada component';
$string['procedural'] = 'Procedimentals';
$string['proceduralcontext'] = 'Context procedimental';
$string['quote'] = 'Citació';
$string['readingcontext'] = 'Context de lectura';
$string['reminder'] = 'Recordatori';
$string['tag'] = 'Etiqueta';
$string['textplaceholder'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
$string['tip'] = 'Consell';
