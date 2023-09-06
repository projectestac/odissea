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
 * Strings for component 'portfolio', language 'ca', version '4.1'.
 *
 * @package     portfolio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = 'Resoldre les exportacions actives';
$string['activeportfolios'] = 'Dossiers disponibles';
$string['addalltoportfolio'] = 'Exporta-ho tot al dossier';
$string['addnewportfolio'] = 'Afegeix un dossier nou';
$string['addtoportfolio'] = 'Exporta al dossier';
$string['alreadyalt'] = 'S\'està exportant; feu clic aquí per resoldre aquesta transferència';
$string['alreadyexporting'] = 'Ja teniu una exportació de dossier activa per aquesta sessió. Abans de continuar heu de completar-la o canceŀlar-la. Voleu continuar? (No es canceŀlarà)';
$string['availableformats'] = 'Formats d\'exportació disponibles';
$string['callbackclassinvalid'] = 'La classe callback especificada no era vàlida o no pertany a la jerarquia del portfolio_caller';
$string['callercouldnotpackage'] = 'No s\'ha pogut generar el paquet de dades per exportar: l\'error original ha estat {$a}';
$string['cannotsetvisible'] = 'Això no es pot establir com a visible; el connector ha estat desactivat completament a causa d\'una mala configuració';
$string['commonportfoliosettings'] = 'Configuració habitual del dossier';
$string['commonsettingsdesc'] = '<p>Quan una transferència es considera que pot implicar una quantitat \'Moderada\' o \'Alta\' de canvis, l\'usuari pot decidir si espera que es completi o no.</ p><p>El límit proper a \'Moderat\' vol dir que s\'executarà immediatament sense consultar l\'usuari, \'Moderat\' i \'Alt\' significa que s\'oferirà l\'opció informant l\'usuari de que pot trigar algun temps.</p><p>A més, alguns connectors del portfoli poden ignorar aquesta opció i enviar a la cua totes les tranferències.</p>';
$string['configexport'] = 'Configura les dades exportades';
$string['configplugin'] = 'Configura el connector del dossier';
$string['configure'] = 'Configura';
$string['confirmcancel'] = 'Esteu segur que voleu cancel·lar aquesta exportació?';
$string['confirmexport'] = 'Confirmeu aquesta exportació';
$string['confirmsummary'] = 'Resum de la vostra exportació';
$string['continuetoportfolio'] = 'Continueu al vostre poratfolis';
$string['deleteportfolio'] = 'Suprimeix la instància del dossier';
$string['destination'] = 'Destí';
$string['disabled'] = 'L\'exportació de dossiers no està habilitada en aquest lloc';
$string['disabledinstance'] = 'Inhabilitat';
$string['displayarea'] = 'Àrea d\'exportació';
$string['displayexpiry'] = 'El tems de transferència s\'ha esgotat';
$string['displayinfo'] = 'Informació d\'exportació';
$string['dontwait'] = 'No esperis';
$string['enabled'] = 'Habilita els dossiers';
$string['enableddesc'] = 'Si està habilitat, els usuaris poden exportar contingut, com ara els missatges als fòrums i les trameses de tasques, per exportar el contingut a <em>portfolios</em> externs o pàgines HTML.';
$string['err_uniquename'] = 'El nom del dossier ha de ser únic (per connector)';
$string['exportalreadyfinished'] = 'S\'ha completat l\'exportació del dossier';
$string['exportalreadyfinisheddesc'] = 'S\'ha completat l\'exportació del dossier';
$string['exportcomplete'] = 'S\'ha completat l\'exportació del dossier';
$string['exportedpreviously'] = 'Exportacions anteriors';
$string['exportexceptionnoexporter'] = 'S\'ha produït una portfolio_export_exception en una sessió activa però sense cap objecte exporter';
$string['exportexpired'] = 'L\'exportació del dossier ha vençut';
$string['exportexpireddesc'] = 'Heu intentat de repetir l\'exportació de certa informació, o iniciar una exportació buida. Per fer-ho correctament cal anar de nou a la ubicació original i tornar a començar. De vegades, això passa si s\'utilitza el botó de darrere després de completar una exportació o per una URL invàlida a la llista d\'adreces d\'interès.';
$string['exporting'] = 'S\'està exportant al dossier';
$string['exportingcontentfrom'] = 'Exportant el contingut de {$a}';
$string['exportingcontentto'] = 'Exportant el contingut a {$a}';
$string['exportqueued'] = 'L\'exportació del dossier s\'ha enviat amb èxit a la cua de transferència';
$string['exportqueuedforced'] = 'L\'exportació del dossier s\'ha enviat amb èxit a la cua de transferència (el sistema remot exigeix encuar les tranferències)';
$string['failedtopackage'] = 'No he pogut trobar fitxers per empaquetar';
$string['failedtosendpackage'] = 'És impossible enviar les vostres dades al sistema de dossiers seleccionat: l\'error original ha estat {$a}';
$string['filedenied'] = 'Accés denegat per aquest fitxer';
$string['filenotfound'] = 'No s\'ha trobat el fitxer';
$string['fileoutputnotsupported'] = 'La reescriptura del fitxer de sortida no està suportada per aquest format';
$string['format_document'] = 'Document';
$string['format_file'] = 'Fitxer';
$string['format_image'] = 'Imatge';
$string['format_leap2a'] = 'Format de dossiers Leap2A';
$string['format_mbkp'] = 'Format de còpia de seguretat de Moodle';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'Presentació';
$string['format_richhtml'] = 'HTML amb adjunts';
$string['format_spreadsheet'] = 'Full de càlcul';
$string['format_text'] = 'Text net';
$string['format_video'] = 'Vídeo';
$string['highdbsizethreshold'] = 'La mida de la base de dades implica una transferència alta';
$string['highdbsizethresholddesc'] = 'Nombre de registres amb els que es calcularà la quantitat de temps de la transferència';
$string['highfilesizethreshold'] = 'La mida del fitxer implica una transferència alta';
$string['highfilesizethresholddesc'] = 'Les mides dels fitxers per sobre d\'aquest límit impliquen un alt temps de transferència';
$string['insanebody'] = 'Esteu rebent aquest missatge com a administrador de {$a->sitename}.

Algunes instàncies dels connectors de dossier han estat automàticament inhabilitades a causa de males configuracions. Això significa que els usuaris no poden actualment exportar res a aquests dossiers.

La llista dels connectors de dossier que han estat inhabilitats és:

{$a->textlist}

Això s\'hauria de corregir al més aviat possible, visiteu {$a->fixurl}.';
$string['insanebodyhtml'] = '<p>Esteu rebent aquest missatge com a administrador de {$a->sitename}.</p><p>Algunes instàncies dels connectors de dossier han estat automàticament inhabilitades a causa de males configuracions. Això significa que els usuaris no poden actualment exportar res a aquests dossiers.</p><p>La llista dels connectors de dossier que han estat inhabilitats és:</p>
{$a->htmllist}
<p>Això s\'hauria de corregir al més aviat possible, visiteu <a href="{$a->fixurl}"> les pàgines de configuració del dossier</a></p>';
$string['insanebodysmall'] = 'Esteu rebent aquest missatge com a administrador de {$a->sitename}. Algunes instàncies dels connectors de dossier han estat automàticament inhabilitades a causa de males configuracions. Això significa que els usuaris no poden actualment exportar res a aquests dossiers. Això s\'hauria de corregir al més aviat possible, visitant {$a->fixurl}.';
$string['insanesubject'] = 'S\'han inhabilitat automàticament algunes instàncies de dossier';
$string['instancedeleted'] = 'S\'ha suprimit el dossier amb èxit';
$string['instanceismisconfigured'] = 'La instància del dossier està mal configurada, i s\'ometrà. L\'error ha estat: {$a}';
$string['instancenotdelete'] = 'No s\'ha pogut suprimir el dossier';
$string['instancenotsaved'] = 'No s\'ha pogut desar el dossier';
$string['instancesaved'] = 'El dossier s\'ha desat amb èxit';
$string['intro'] = 'El contingut que heu creat, com ara les trameses de tasques, els missatges de fòrums i les entrades de blog es poden exportar a <em>portfolio</em> o descarregar. <br>
Qualsevol <em>portfolio</em> que no vulgueu usar es pot amagar, per això no està enumerat com una opció per exportar-hi contingut.';
$string['invalidaddformat'] = 'No és vàlid el format per afegir passat al portfolio_add_button. ({$a}) Ha de ser PORTFOLIO_ADD_XXX';
$string['invalidbuttonproperty'] = 'No s\'ha pogut trobar la propietat ({$a}) de portfolio_button';
$string['invalidconfigproperty'] = 'No s\'ha pogut trobar la propietat de configuració ({$a->property}) de {$a->class})';
$string['invalidexportproperty'] = 'No s\'ha pogut trobar la propietat d\'exportació ({$a->property}) de {$a->class})';
$string['invalidfileareaargs'] = 'No són vàlids els arguments de l\'àrea de fitxers passat a set_file_and_format_data - ha de contenir el número ID del context, el component, l\'àrea de fitxers i el número ID de l\'element';
$string['invalidformat'] = 'Alguna cosa s\'està exportant en un format no vàlid, {$a}';
$string['invalidinstance'] = 'No s\'ha pogut tronat la instància del dossier';
$string['invalidpreparepackagefile'] = 'No és vàlida la crida a prepare_package_file - s\'ha d\'establir un o múltiples fitxers';
$string['invalidproperty'] = 'No s\'ha pogut trobar la propietat ({$a->property}) de {$a->class})';
$string['invalidsha1file'] = 'No és vàlida la crida a get_sha1_file - s\'ha d\'establir un o múltiples fitxers';
$string['invalidtempid'] = 'No és vàlid el número ID de l\'exportació. Potser ha vençut';
$string['invaliduserproperty'] = 'No s\'ha pogut trobar la propietat de configuració d\'usuari ({$a->property}) de {$a->class})';
$string['leap2a_emptyselection'] = 'No s\'ha seleccionar un valor necessari';
$string['leap2a_entryalreadyexists'] = 'Heu provat d\'afegir una entrada Leap2A amb un número ID ({$a}) que ja existeix';
$string['leap2a_feedtitle'] = 'Exportació Leap2A de Moodle per {$a}';
$string['leap2a_filecontent'] = 'S\'ha tractat d\'establir el contingut d\'una entrada de Leap2A a un fitxer, enlloc d\'utilitzar la subclasse fitxer';
$string['leap2a_invalidentryfield'] = 'Heu tractat d\'establir un camp d\'entrada que no existia ({$a}) o que vós no podeu establir directament';
$string['leap2a_invalidentryid'] = 'Heu tractat d\'accedir a una entrada amb un número ID que no existia ({$a})';
$string['leap2a_missingfield'] = 'Camp d\'entrada Leap2A necessari {$a} desconegut';
$string['leap2a_nonexistantlink'] = 'Una entrada Leap2A ({$a->from}) ha provat d\'enllaçar una entrada inexistent ({$a->to}) amb rel {$a->rel}';
$string['leap2a_overwritingselection'] = 'Sobreescrivint el tious d\'entrada original ({$a}) a la selecció en make_selection';
$string['leap2a_selflink'] = 'Una entrada Leap2A ({$a->id}) ha provat d\'enllaçar-se si mateixa amb rel {$a->rel}';
$string['logs'] = 'Registres de transferències';
$string['logsummary'] = 'Transferències anteriors amb èxit';
$string['manageportfolios'] = 'Gestiona els dossiers';
$string['manageyourportfolios'] = 'Gestioneu els vostres dossiers';
$string['mimecheckfail'] = 'El connector de dossier {$a->plugin} no suporta el tipus MIME {$a->mimetype}';
$string['missingcallbackarg'] = 'S\'ha perdut l\'argument de la crida de retorn {$a->arg} per la classe {$a->class}';
$string['moderatedbsizethreshold'] = 'Mida de base de dades de transferència moderada';
$string['moderatedbsizethresholddesc'] = 'Nombre de registres de la base de dades a partir dels quals es considera que prenen un temps moderat de transferència';
$string['moderatefilesizethreshold'] = 'Mida de fitxer de transferència moderada';
$string['moderatefilesizethresholddesc'] = 'Mida del fitxer per damunt d\'aquest llindar es considera que prenen un temps moderat de transferència';
$string['multipleinstancesdisallowed'] = 'S\'està intentant crear una altra instància del connector que ha rebutjat múltiples instàncies ({$a})';
$string['mustsetcallbackoptions'] = 'Cal que configureu les retrocridades ja sigui al constructor portfolio_add_button o utilitzant el mètode set_callback_options';
$string['noavailableplugins'] = 'No hi ha dossiers disponibles per exportar-hi';
$string['nocallbackclass'] = 'No es troba la classe de la crida de retorn a utilitzar ({$a})';
$string['nocallbackcomponent'] = 'No es pot trobar el component especificat {$a}.';
$string['nocallbackfile'] = 'Alguna cosa en el mòdul que esteu tractant d\'exportar està trencada; no s\'ha trobat el fitxer <em>portfolio</em> que cal';
$string['noclassbeforeformats'] = 'Us cal configurar la classe de la crida de retorn abans de cridar set_formats al portfolio_button';
$string['nocommonformats'] = 'No hi ha cap format comú entre els connectors de dossier disponibles i el lloc interlocutor {$a->location} (l\'interlocutor admet {$a->formats})';
$string['noinstanceyet'] = 'No han estat seleccionats';
$string['nologs'] = 'No hi ha registres per mostrar!';
$string['nomultipleexports'] = 'La destinació del dossier ({$a->plugin}) no admet exportacions múltiples simultànies. <a href="{$a->link}">Acabeu-ne primer l\'actual</a> i torneu a intentar-ho.';
$string['nonprimative'] = 'Un valor no simple s\'ha passat com argument d\'una crida de retorn al portfolio_add_button. S\'esta rebutjant continuar. La clau ha estat {$a->key} i el valor ha estat {$a->value}';
$string['nopermissions'] = 'No teniu els permisos necessaris per a exportar fitxers des d\'aquesta zona.';
$string['notexportable'] = 'El tipus de document que intenteu exportar no és exportable.';
$string['notimplemented'] = 'Esteu intentant exportar contingut en un format que encara no està implementat ({$a})';
$string['notyetselected'] = 'No s\'ha seleccionat encara';
$string['notyours'] = 'Esteu tractant de reprendre una exportació de dossier que no us pertany!';
$string['nouploaddirectory'] = 'No es pot crear un directori temporal per a empaquetar-hi les vostres dades.';
$string['off'] = 'Habilitat i ocult';
$string['on'] = 'Habilitat i visible';
$string['plugin'] = 'Connector de dossier';
$string['plugincouldnotpackage'] = 'Ha hagut un error a l\'empaquetar les vostres dades per exportar-les: L\'error original ha estat {$a}';
$string['pluginismisconfigured'] = 'El connector de dossier està mal configurat. S\'ometrà. L\'error ha estat: {$a}';
$string['portfolio'] = 'Dossier';
$string['portfolios'] = 'Dossiers';
$string['queuesummary'] = 'Transferències actuals a la cua';
$string['returntowhereyouwere'] = 'Torneu on éreu';
$string['save'] = 'Desa';
$string['selectedformat'] = 'Trieu el format d\'exportació';
$string['selectedwait'] = 'Triat per esperar?';
$string['selectplugin'] = 'Trieu una destinació';
$string['showhide'] = 'Mostra / Amaga';
$string['singleinstancenomultiallowed'] = 'Només hi ha disponible una única instància del connector de dossiers, no admet exportacions múltiples per sessió i la sessió actual ja té una exportació activa  usant aquest connector!';
$string['somepluginsdisabled'] = 'S\'han inhabilitat  connectors sencers de dossier per estar mal configurats o perquè es basen en aquestes altres coses:';
$string['sure'] = 'Esteu completament segurs de voler suprimir \'{$a}\'? Aquesta acció no es podrà desfer.';
$string['thirdpartyexception'] = 'Durant l\'exportació del dossier ({$a}) s\'ha produït una excepció d\'una tercera part. S\'ha capturat i rellançat, però caldria arreglar-ho';
$string['transfertime'] = 'Temps de transferència';
$string['unknownplugin'] = 'Desconegut (pot haver estar suprimit per l\'administrador)';
$string['wait'] = 'Espereu';
$string['wanttowait_high'] = 'No es recomana que espereu fins que aquesta transferència es completi, però podeu fer-ho si esteu segur i sabeu el que esteu fent';
$string['wanttowait_moderate'] = 'Voleu esperar per a aquesta transferència? Pot trigar uns minuts';
