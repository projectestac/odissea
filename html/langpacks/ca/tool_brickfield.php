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
 * Strings for component 'tool_brickfield', language 'ca', version '4.5'.
 *
 * @package     tool_brickfield
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessibility'] = 'Accessibilitat';
$string['accessibilitydisabled'] = 'El conjunt d\'eines d\'accessibilitat Brickfield no està habilitat en aquest servidor. Contacteu amb l\'administració del servidor per activar-lo.';
$string['accessibilityreport'] = 'Conjunt d\'eines d\'accessibilitat';
$string['accessibilitytool'] = 'Eina d\'accessibilitat Brickfield';
$string['accessibilitytools'] = 'Eines d\'accessibilitat Brickfield';
$string['activate'] = 'Activa';
$string['activated'] = 'El connector està activat i a punt per ser utilitzat.';
$string['activationform'] = 'Registre Brickfield';
$string['activationheader'] = 'Activació Brickfield';
$string['activationinfo'] = '<p>Per tal d\'utilitzar aquest connector, heu de proporcionar claus vàlides per al lloc en aquest formulari.</p><p> <a href="{$a}" data-action="send_info" target="_blank">Registreu-vos al portal Brickfield (s\'obre en una finestra nova)</a> per rebre aquestes claus si encara no les teniu. </p><p>Una vegada activat, les vostres claus es validaran a través de les tasques programades del cron.</p>';
$string['activityresults:pluginname'] = 'Informe de l\'eina d\'accessibilitat d\'anàlisi d\'activitat';
$string['activityresults:toolname'] = 'Resum d\'anàlisi d\'activitat';
$string['activityresults:toolshortname'] = 'Anàlisi d\'activitat';
$string['advanced:pluginname'] = 'Informe avançat de l\'eina d\'accessibilitat';
$string['advanced:toolname'] = 'Resum avançat';
$string['advanced:toolshortname'] = 'Avançat';
$string['allcourses'] = 'Tots els cursos revisats ({$a})';
$string['allcoursescat'] = 'Tots els cursos revisats per categoria {$a->catname} ({$a->count})';
$string['analysis:byrequest'] = 'Per petició';
$string['analysis:disabled'] = 'Inhabilitat';
$string['analysistype'] = 'Habilita la sol·licitud d\'anàlisi';
$string['analysistype_desc'] = 'Permet la sol·licitud de l\'anàlisi d\'accessibilitat del contingut';
$string['analysistypedisabled'] = 'L\'anàlisi del contingut està inhabilitada';
$string['bannercontentone'] = 'El conjunt d\'eines d\'accessibilitat per a l\'empresa té un conjunt de funcionalitats que ajudaran la vostra organització a millorar l\'accessibilitat dels vostres cursos.  <a href="{$a}">Contacteu amb Brickfield Education Labs</a> per reservar una demostració gratuïta de les característiques avançades.';
$string['bannercontenttwo'] = 'Construïu una plataforma d\'ensenyament i aprenentatge inclusiva trobant contingut que no segueix les pautes, arreglant els problemes i garantint el futur del contingut del curs de Moodle amb fitxers accessibles, l\'editor i característiques millorades.';
$string['bannerheadingone'] = 'Actualitza al conjunt d\'eines d\'accessibilitat per a l\'empresa';
$string['batch'] = 'Límit per tanda';
$string['brickfield'] = 'Conjunt d\'eines Brickfield';
$string['brickfield:viewcoursetools'] = 'Mostra els informes per cursos';
$string['brickfield:viewsystemtools'] = 'Mostra els informes per a tots els cursos';
$string['buttonone'] = 'Obtén una demostració gratuïta';
$string['cachepending'] = 'S\'estan compilant les dades de resum';
$string['checkdesc:alinksdontopennewwindow'] = 'Els enllaços que s\'obrin en una finestra nova haurien d\'avisar els usuaris amb antelació.';
$string['checkdesc:amustcontaintext'] = 'Un enllaç necessita contenir text per ser detectable.';
$string['checkdesc:areadontopennewwindow'] = 'Les àrees, utilitzades en mapes d\'imatges, que s\'obrin en una finestra nova haurien d\'avisar els usuaris amb antelació.';
$string['checkdesc:areahasaltvalue'] = 'A les àrees, utilitzades en mapes d\'imatges, no els hauria de faltar el text alternatiu (alt), similar a les imatges.';
$string['checkdesc:asuspiciouslinktext'] = 'El text de l\'enllaç hauria de ser descriptiu i proporcionar context sobre la seva destinació.';
$string['checkdesc:basefontisnotused'] = 'Els elements «basefont» (tradicionalment emprats per formatar) no són accessibles i no s\'haurien d\'usar.';
$string['checkdesc:blinkisnotused'] = 'Els elements «blink», que parpellegen, no són accessibles i no s\'haurien d\'usar.';
$string['checkdesc:boldisnotused'] = 'Els elements «bold» (b) no s\'haurien d\'usar per a la negreta; en lloc d\'això, s\'hi hauria d\'usar «strong».';
$string['checkdesc:contenttoolong'] = 'L\'extensió total del contingut de la pàgina no hauria d\'excedir les 500 paraules.';
$string['checkdesc:csstexthascontrast'] = 'El color de contrast entre el text i el fons és massa baix.';
$string['checkdesc:embedhasassociatednoembed'] = 'Als elements «embed» (per incrustar multimèdia) no els haurien de faltar els elements corresponents «noembed».';
$string['checkdesc:headerh3'] = 'Els encapçalaments després de l\'H3 (l\'opció més gran de l\'editor) no haurien de trencar la jerarquia d\'encapçalament de la pàgina.';
$string['checkdesc:headershavetext'] = 'Un encapçalament necessita contenir text per ser detectable.';
$string['checkdesc:iisnotused'] = 'Els elements «italic» (i) no s\'haurien d\'usar per a la cursiva; en lloc d\'això, s\'hi hauria d\'usar «em».';
$string['checkdesc:imgaltisdifferent'] = 'El text d\'imatge alternatiu (alt) no hauria de ser el nom del fitxer de la imatge.';
$string['checkdesc:imgaltistoolong'] = 'Assegureu-vos que el text alternatiu (atribut alt) de la imatge sigui prou concís per descriure-la.';
$string['checkdesc:imgaltnotemptyinanchor'] = 'El text d\'imatge alternatiu (alt) no hauria d\'estar buit, especialment quan la imatge té un enllaç que porta a alguna part.';
$string['checkdesc:imgaltnotplaceholder'] = 'El text d\'imatge alternatiu (alt) no hauria de ser un simple marcador de text, com ara «imatge».';
$string['checkdesc:imghasalt'] = 'El text d\'imatge alternatiu (alt) no hauria de faltar en els elements d\'imatge, tret que sigui purament decoratiu, sense significat.';
$string['checkdesc:imgwithmaphasusemap'] = 'Els mapes d\'imatges, amb àrees clicables, han d\'associar els elements «usemap» i «map».';
$string['checkdesc:legendtextnotempty'] = 'Els elements «legend», emprats per als elements del conjunt de camps de peus o llegendes, haurien de contenir text.';
$string['checkdesc:marqueeisnotused'] = 'Els elements «marquee» (per al desplaçament automàtic) no són accessibles i no s\'haurien d\'usar.';
$string['checkdesc:noheadings'] = 'L\'absència d\'encapçalaments fa el contingut menys estructurat i més difícil de llegir.';
$string['checkdesc:objectmusthaveembed'] = 'Als elements «object» (per incrustar recursos externs) no els haurien de faltar els elements corresponents «embed».';
$string['checkdesc:objectmusthavetitle'] = 'Als elements «object» (per incrustar recursos externs) no els haurien de faltar les descripcions corresponents «title».';
$string['checkdesc:objectmusthavevalidtitle'] = 'Als elements «object» (per incrustar recursos externs) els haurien de correspondre els «titles» amb text.';
$string['checkdesc:strikeisnotused'] = 'Els elements «strike» no s\'haurien d\'usar per ratllar text; en lloc d\'això, s\'hauria d\'usar «del» (suprimit).';
$string['checkdesc:tabledatashouldhaveth'] = 'A les taules, idealment, no haurien de faltar els encapçalaments.';
$string['checkdesc:tablesummarydoesnotduplicatecaption'] = 'Els resums de taula i els peus no haurien de ser idèntics.';
$string['checkdesc:tabletdshouldnotmerge'] = 'Les taules, idealment, no haurien de tenir cel·les amb marges.';
$string['checkdesc:tablethshouldhavescope'] = 'L\'«scope» de fila o columna d\'una taula (utilitzat per mapar fila i columna a cada cel·la) s\'hauria de declarar.';
$string['checkidvalidation'] = 'Tasca per comprovar per a cada «checkID» no vàlid';
$string['checkscompleted'] = 'Comprovacions completades: {$a}';
$string['checktype'] = 'Grup de comprovació';
$string['checktype:form'] = 'Formulari';
$string['checktype:image'] = 'Imatge';
$string['checktype:layout'] = 'Disposició';
$string['checktype:link'] = 'Enllaç';
$string['checktype:media'] = 'Mèdia';
$string['checktype:table'] = 'Taula';
$string['checktype:text'] = 'Text';
$string['checktyperesults:pluginname'] = 'Informe de l\'eina d\'accessibilitat per tipus de contingut';
$string['checktyperesults:toolname'] = 'Resum dels tipus de contingut';
$string['checktyperesults:toolshortname'] = 'Tipus de contingut';
$string['cmpercent'] = 'Percentatge global d\'activitats';
$string['cmpercenterrors'] = 'Percentatge global d\'errors';
$string['cmpercenttitle'] = 'Desglossament del percentatge total d\'activitats vs errors';
$string['confirmationmessage'] = 'S\'ha programat l\'anàlisi d\'aquest curs. L\'anàlisi es completarà com a molt aviat a partir de les {$a}. Torneu a comprovar-la després.';
$string['contactadmin'] = 'Poseu-vos en contacte amb l\'administrador per completar el registre.';
$string['contactus'] = 'Contacteu amb nosaltres';
$string['contentfive'] = 'Corregeix automàticament les etiquetes HTML obsoletes.';
$string['contentfour'] = 'Identifica quines activitats presenten més problemes d’accessibilitat per tal de prioritzar els esforços.';
$string['contentone'] = 'Avalua automàticament el contingut i les activitats d\'avaluació del vostre curs per detectar problemes d\'accessibilitat.';
$string['contentsix'] = 'Proporciona orientacions a temps al professorat per crear contingut millor.';
$string['contentthree'] = 'Proporciona als estudiants contingut en formats accessibles, com ara àudio, ePub i Braille electrònic.';
$string['contenttwo'] = 'Actualitza en massa el text poc clar o inexistent dels enllaços web, les descripcions d\'imatges i els subtítols de vídeos.';
$string['contenttypeerrors'] = 'Resultats totals de les comprovacions del contingut d’activitat per curs i per tipus de contingut.';
$string['contentyperesults'] = 'Total de comprovacions superades/no superades per àrees de contingut i per curs.';
$string['contextid'] = 'Contextid';
$string['core_course'] = 'Curs';
$string['core_question'] = 'Bancs de preguntes';
$string['country'] = 'País';
$string['country_help'] = 'País del lloc web';
$string['coursecount'] = 'Nombre de cursos';
$string['deletehistoricaldata'] = 'Esborra els resultats històrics de les comprovacions';
$string['dependency'] = 'Depenent de';
$string['emptycategory'] = 'No s’ha trobat cap curs per a la categoria {$a}';
$string['emptytagcourses'] = 'No s’ha trobat cap resultat per als cursos amb etiquetes configurades';
$string['enableaccessibilitytools'] = 'Habilita les eines d’accessibilitat';
$string['enableaccessibilitytools_desc'] = 'El conjunt d’eines d’accessibilitat ajuda a identificar problemes d’accessibilitat als cursos.';
$string['error:nocoursespecified'] = 'L’informe resum requereix d\'un identificador de curs vàlid. Accediu al conjunt d’eines d’accessibilitat des de dins d’un curs.';
$string['errorlink'] = 'Edita la instància de l’error per a {$a}';
$string['errors'] = 'Errors: {$a}';
$string['errors:pluginname'] = 'Llista d’errors de l’eina d’accessibilitat';
$string['errors:toolname'] = 'Resum de la llista d’errors';
$string['errors:toolshortname'] = 'Llista d’errors';
$string['eventanalysis_requested'] = 'S’ha sol·licitat l’anàlisi del contingut';
$string['eventanalysis_requesteddesc'] = 'S’ha sol·licitat l’anàlisi del contingut per al curs {$a}.';
$string['eventreport_downloaded'] = 'S’ha descarregat el resum d’accessibilitat';
$string['eventreport_downloadeddesc'] = 'S’ha descarregat el resum d’accessibilitat per al curs amb identificador {$a}.';
$string['eventreport_viewed'] = 'S\'ha mostrat l\'informe d\'accessibilitat';
$string['eventreport_vieweddesc'] = 'S’ha consultat l’informe d’accessibilitat per al curs amb identificador {$a->course}, categoria {$a->category}, pestanya {$a->tab}.';
$string['failed'] = 'No superades';
$string['failedcount'] = 'No superades: {$a}';
$string['footerheading'] = 'Secció del peu de pàgina';
$string['fullcachedone'] = 'Desactiveu-lo per tornar a executar la memòria cau';
$string['hashcorrect'] = 'El codi introduït és correcte.';
$string['hashincorrect'] = 'El codi introduït no és correcte.';
$string['headingfive'] = 'Correccions HTML';
$string['headingfour'] = 'Centra l’esforç';
$string['headingone'] = 'Avalua el contingut';
$string['headingsix'] = 'Suport al rendiment';
$string['headingthree'] = 'Formats de fitxer accessibles';
$string['headingtwo'] = 'Correcció';
$string['hideshow'] = 'Oculta/Mostra';
$string['icon:analytics-custom'] = 'Icona d\'analítiques';
$string['icon:file-edit-custom'] = 'Icona d\'edició del fitxer';
$string['icon:hands-helping-custom'] = 'Icona de mans que ajuden';
$string['icon:search-plus-custom'] = 'Icona de cerca';
$string['icon:tools-custom'] = 'Icona d\'eines';
$string['icon:wand-magic-custom'] = 'Icona de vareta màgica';
$string['inactive'] = 'El connector està inactiu i no es pot utilitzar. Introduïu claus de registre vàlides i premeu «Activa».';
$string['innercontextid'] = 'Identificador de context intern';
$string['installed'] = 'S\'ha instal·lat el connector';
$string['installedcli'] = 'S\'ha instal·lat el connector a través de la línia de comandaments';
$string['installeddescription'] = 'S’ha instal·lat el connector. Redirigiu-vos al formulari d’activació.';
$string['invalidaccessibilitytool'] = 'S’ha sol·licitat un subconnector d’accessibilitat invàlid.';
$string['invalidcategoryid'] = 'La categoria no és vàlida, reviseu la vostra entrada';
$string['invalidcourseid'] = 'El curs no és vàlid, reviseu la vostra entrada';
$string['invalidlinkphrases'] = 'feu clic|feu clic aquí|aquí|més|més aquí|info|info aquí|informació|informació aquí|llegiu més|llegiu més aquí|informació addicional|informació addicional aquí|detalls addicionals|detalls addicionals aquí';
$string['language'] = 'Idioma';
$string['language_help'] = 'Idioma del lloc web';
$string['messageprovider:warningcheckid'] = 'Avís d’identificadors de comprovació invàlids';
$string['mobileservice'] = 'S’han habilitat els serveis mòbils ({$a})';
$string['module'] = 'Mòdul';
$string['modulename'] = 'Nom';
$string['moreinfo'] = 'Més informació';
$string['newwindowphrases'] = 'nova finestra|nova-finestra|nova_finestra';
$string['noerrorsfound'] = 'No s’han trobat errors d’accessibilitat comuns segons els paràmetres de cerca. Enhorabona!';
$string['norecords'] = 'No s’han trobat registres rellevants segons els paràmetres de cerca.';
$string['notregistered'] = 'Cal registrar el vostre conjunt d’eines d’accessibilitat.';
$string['notvalidated'] = 'El vostre conjunt d’eines d’accessibilitat és funcional mentre es troba en procés de validació.';
$string['numcourses'] = 'Nombre de cursos ({$a})';
$string['numfactivities'] = 'Nombre d’activitats ({$a})';
$string['numfiles'] = 'Nombre de fitxers ({$a})';
$string['numinstances'] = 'Nombre d’instàncies';
$string['numusers'] = 'Nombre d’usuaris ({$a})';
$string['pagedesc:checktype'] = '<p>Per tal de resumir i analitzar els resultats de les diverses comprovacions realitzades, aquestes comprovacions s\'agrupen en diferents tipus de contingut. Així, tots els resultats de comprovacions d\'accessibilitat relacionats amb imatges es troben al grup de tipus de contingut «Imatge», tots els relacionats amb la disposició es troben al grup «Disposició», i així successivament.</p>
<p>Les activitats s\'inclouen com a activitats, recursos o àrees de contingut relacionades amb els propis cursos.</p>
<p>La pàgina del gràfic de tipus de contingut mostra el desglossament d\'errors per grup de tipus de contingut: Imatge, Disposició, Enllaç, Mèdia, Taula i Text.</p>';
$string['pagedesc:pertarget'] = '<p>Per tal de resumir i analitzar els resultats de les comprovacions per activitat, aquests resultats s\'agrupen segons les diferents activitats detectades.</p>
<p>Les activitats s\'inclouen com a activitats, recursos o altres àrees de contingut relacionades amb els mateixos cursos. Cada activitat sense errors detectats es comptabilitza com a superada, i cada activitat amb un o més errors detectats es comptabilitza com a no superada. Posteriorment, es mostra la proporció d\'activitats superades respecte a les no superades.</p>
<p>La pàgina del gràfic de desglossament per activitat mostra la proporció d\'instàncies superades i no superades en total, per activitat (com ara tasques), cursos, etiquetes, etc.</p>';
$string['passed'] = 'Superat';
$string['passedcount'] = 'Superat: {$a}';
$string['passrate'] = 'Taxa de superació: {$a}%';
$string['pdf:filename'] = 'Brickfield_Summaryreport_CourseID-{$a}';
$string['percheckerrors'] = 'Nombre de comprovacions específiques i errors per comprovació i per curs';
$string['perpage'] = 'Elements a mostrar per pàgina';
$string['pluginname'] = 'Eines d\'accessibilitat';
$string['printable:downloadpdf'] = 'Descarrega el pdf';
$string['printable:pluginname'] = 'Informe resum del conjunt d’eines d’accessibilitat';
$string['printable:printreport'] = 'Informe per imprimir';
$string['printable:toolname'] = 'Informe resum';
$string['printable:toolshortname'] = 'Informe resum';
$string['privacy:metadata'] = 'El connector d’informe de comprovacions d’accessibilitat no emmagatzema cap dada personal.';
$string['processanalysisrequests'] = 'Processa les peticions d’anàlisi de contingut';
$string['registernow'] = 'Registreu-vos ara.';
$string['registration'] = 'Formulari de registre';
$string['registrationinfo'] = '<p>Aquest procés de registre permet utilitzar la versió inicial del conjunt d\'eines d’accessibilitat de Brickfield per al Moodle registrat.</p>
<p>El seu ús està subjecte als <a href="{$a}" target="_blank">termes i condicions de Brickfield Education Labs (s\'obre en una finestra nova)</a>, amb els quals esteu d\'acord si utilitzeu aquest producte.</p>';
$string['release'] = 'Versió del Moodle ({$a})';
$string['remaining'] = '(Queden {$a} errors)';
$string['response:0'] = 'L’enllaç proporcionat no és vàlid';
$string['response:404'] = 'No s’ha trobat la pàgina d’aquest URL';
$string['schedule:blocknotscheduled'] = '<p>Encara no s’ha programat l’anàlisi d’aquest curs per detectar problemes d’accessibilitat comuns.</p>';
$string['schedule:notscheduled'] = '<p>Encara no s\'ha programat l\'anàlisi d’aquest curs per detectar problemes d\'accessibilitat comuns.</p><p>En fer clic al botó «Envia per analitzar», confirmeu que voleu que tot el contingut HTML rellevant del curs, com ara les descripcions de les seccions del curs, les descripcions de les activitats, preguntes, pàgines i altres, es programen per a l\'anàlisi.</p><p>Aquesta anàlisi realitzarà diverses comprovacions comunes d\'accessibilitat sobre el contingut HTML del curs, i els resultats es mostraran en les pàgines d\'informes del conjunt d\'eines d\'accessibilitat. L\'anàlisi s\'executarà en segon pla mitjançant tasques programades, de manera que la velocitat de finalització dependrà de la programació i execució d\'aquestes tasques.</p>';
$string['schedule:requestanalysis'] = 'Envia per analitzar';
$string['schedule:scheduled'] = 'S\'ha programat l\'anàlisi d\'aquest curs';
$string['schedule:sitenotscheduled'] = '<p>Encara no s’ha programat l\'anàlisi del contingut global (independent del curs) per detectar problemes d\'accessibilitat comuns.</p>
<p>En fer clic al botó «Envia per analitzar», confirmeu que voleu que tot el vostre contingut global rellevant (independent del curs) es programi per a l\'anàlisi.</p>
<p>Aquesta anàlisi durà a terme diverses comprovacions comunes d\'accessibilitat sobre el contingut, i els resultats es mostraran en les pàgines d\'informe del conjunt d’eines d\'accessibilitat. L\'anàlisi s\'executarà en segon pla mitjançant tasques programades, de manera que la rapidesa amb què es completi dependrà de la programació i execució d\'aquestes tasques.</p>';
$string['schedule:sitescheduled'] = 'S’ha programat l’anàlisi del contingut global (independent del curs).';
$string['secretkey'] = 'Clau API';
$string['secretkey_help'] = 'Aquest codi s’envia per correu electrònic després del registre.';
$string['sendfollowinginfo'] = '<p>La informació següent s’enviarà periòdicament només per contribuir a les estadístiques generals. No es farà pública en cap llistat central.</p> {$a}';
$string['settings'] = 'Paràmetres del conjunt d’eines d’accessibilitat';
$string['sitehash'] = 'Clau secreta';
$string['sitehash_help'] = 'Aquest codi s’envia per correu electrònic després de registrar-se.';
$string['taberrors'] = 'Comprova els errors';
$string['targetavetitle'] = 'Mitjana d’errors per activitat';
$string['targetpercentage'] = 'Percentatge d’instàncies superades i no superades per activitat';
$string['targetratio'] = 'Ràtio de superació d’activitats';
$string['tblcheck'] = 'Comprova';
$string['tblcheckexample'] = 'Exemple';
$string['tblcheckfailed'] = 'Comprovacions no superades';
$string['tblchecksummary'] = 'Resum';
$string['tbledit'] = 'Edita';
$string['tblerrorcount'] = 'Errors';
$string['tblhtmlcode'] = 'Codi HTML existent';
$string['tblinstance'] = 'Instància';
$string['tblline'] = 'Línia';
$string['tbloverallpercentage'] = '% total d\'errors';
$string['tblpercentage'] = 'Percentatge';
$string['tblpreview'] = 'Previsualització';
$string['tbltarget'] = 'Activitat';
$string['tblupdateto'] = 'Actualitza a';
$string['titleactivityresultsall'] = 'Resultats per activitat: total de cursos revisats ({$a->count} cursos)';
$string['titleactivityresultspartial'] = 'Resultats per activitat: curs {$a->name}';
$string['titleall'] = 'Detalls dels errors: total de cursos revisats ({$a->count} cursos';
$string['titlechecktyperesultsall'] = 'Resultats per tipus de contingut: total de cursos revisats ({$a->count} cursos)';
$string['titlechecktyperesultspartial'] = 'Resultats per tipus de contingut: curs {$a->name}';
$string['titleerrorsall'] = 'Detalls dels errors: total de cursos revisats ({$a->count} cursos)';
$string['titleerrorscount'] = 'Detalls dels errors: (es mostren els primers {$a} errors)';
$string['titleerrorspartial'] = 'Detalls dels errors: curs {$a->name}';
$string['titlepartial'] = 'Detalls dels errors: curs {$a->name}';
$string['titleprintableall'] = 'Curs {$a->name}';
$string['titleprintablepartial'] = 'Curs {$a->name}';
$string['tools'] = 'Informes';
$string['toperrors'] = 'Errors més freqüents';
$string['toptargets'] = 'Activitats no superades';
$string['totalactivities'] = 'Total d’activitats';
$string['totalactivitiescount'] = 'Total d’activitats: {$a}';
$string['totalareas'] = 'Total d\'àrees';
$string['totalerrors'] = 'Total d\'errors';
$string['totalgrouperrors'] = 'Total (suma) d’errors per tipus de contingut';
$string['updatesummarydata'] = 'Actualitza el resum de dades del lloc';
$string['usersmobileregistered'] = 'Nombre d’usuaris amb dispositius mòbils registrats ({$a})';
$string['validationerror'] = 'La validació de la clau de registre ha fallat. Comproveu que l\'URL del lloc registrat i les claus siguin correctes.';
$string['warningcheckidbody'] = 'Hi ha un problema amb una comprovació de Brickfield que està activa però no figura a la base de dades. L\'hauríeu d\'investigar.';
$string['warningcheckidsubject'] = 'Avís del comprovador de l\'identificador del conjunt d\'eines Brickfield';
