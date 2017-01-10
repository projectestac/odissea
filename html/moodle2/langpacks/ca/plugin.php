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
 * Strings for component 'plugin', language 'ca', branch 'MOODLE_31_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Accions';
$string['availability'] = 'Disponibilitat';
$string['cancelinstallall'] = 'Cancel·la les instal·lacions noves ({$a})';
$string['cancelinstallhead'] = 'S\'està cancel·lant la instal·lació dels connectors';
$string['cancelinstallinfo'] = 'Els connectors següents no estan encara totalment instal·lats, per la qual cosa la seva instal·lació es pot cancel·lar. Per fer això, cal esborrar la carpeta del connector des del servidor ara. Assegureu-vos que això és realment el que voleu fer per evitar la pèrdua accidental de dades (com ara les vostres pròpies modificacions del codi).';
$string['cancelinstallinfodir'] = 'Carpeta a esborrar: {$a}';
$string['cancelinstallone'] = 'Cancel·la aquesta instal·lació';
$string['cancelupgradeall'] = 'Cancel·la les actualitzacions ({$a})';
$string['cancelupgradehead'] = 'S\'està restaurant la versió prèvia dels connectors';
$string['cancelupgradeone'] = 'Cancel·la aquesta actualització';
$string['checkforupdates'] = 'Comprova les actualitzacions disponibles';
$string['checkforupdateslast'] = 'Darrera comprovació feta el {$a}';
$string['dependencyavailable'] = 'Disponible';
$string['dependencyfails'] = 'Errades';
$string['dependencyinstall'] = 'Instal·la';
$string['dependencyinstallhead'] = 'S\'estan instal·lant les dependències perdudes';
$string['dependencyinstallmissing'] = 'S\'estan instal·lant les dependències perdudes ({$a})';
$string['dependencymissing'] = 'Perduda';
$string['dependencyunavailable'] = 'No disponible';
$string['dependencyupload'] = 'Penja';
$string['dependencyuploadmissing'] = 'Càrrega dels fitxers ZIP';
$string['detectedmisplacedplugin'] = 'El connector  "{$a->component}" està instal·lat en la localització incorrecta "{$a->current}", quan s\'esperava que estigués aquí "{$a->expected}"';
$string['displayname'] = 'Nom del connector';
$string['err_response_curl'] = 'No s\'han pogut obtenir dades d\'actualitzacions disponibles. S\'ha produït un error inesperat de cURL.';
$string['err_response_format_version'] = 'Versió inesperada del format de resposta. Si us plau, intenteu tornar a comprovar si hi ha actualitzacions disponibles.';
$string['err_response_http_code'] = 'No s\'han pogut obtenir les dades d\'actualitzacions disponibles. Codi de resposta HTTP inesperat.';
$string['filterall'] = 'Mostra tot';
$string['filtercontribonly'] = 'Mostra només els connectors addicionals';
$string['filterupdatesonly'] = 'Mostra només actualitzables';
$string['misdepinfoplugin'] = 'Informació del connector';
$string['misdepinfoversion'] = 'Informació de la versió';
$string['misdepsavail'] = 'Dependències perdudes disponibles';
$string['misdepsunavail'] = 'No estan disponibles les dependències perdudes';
$string['misdepsunavaillist'] = 'No s\'ha trobat cap versió per complir amb els requisits de les dependències: {$a}.';
$string['misdepsunknownlist'] = 'No és al directori dels connectors: <strong>{$a}</strong>.';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'No hi ha connectors d\'aquest tipus instal·lats';
$string['notdownloadable'] = 'No es pot baixar el paquet';
$string['notdownloadable_help'] = 'El paquet ZIP amb l\'actualització no es pot baixar de forma automàtica. Per a més ajuda consulteu la documentació.';
$string['notes'] = 'Anotacions';
$string['notwritable'] = 'Els fitxers del connector són només de lectura.';
$string['notwritable_help'] = 'Heu habilitat el desplegament automàtic d\'actualitzacions i hi ha una actualització disponible per a aquest connector. No obstant això, els fitxers del connector del servidor web són només de lectura, de manera que l\'actualització no es pot instal·lar en aquest moment.

Doneu permisos d\'escriptura a la carpeta del connector i a tot el seu contingut per a poder instal·lar l\'actualització disponible de forma automàtica.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Tots els connectors';
$string['overviewext'] = 'Connectors addicionals';
$string['overviewupdatable'] = 'Actualitzacions disponibles';
$string['packagesdebug'] = 'La sortida de depuració està habilitada';
$string['packagesdownloading'] = 'S\'està descarregant {$a}';
$string['packagesextracting'] = 'S\'està extraient {$a}';
$string['packagesvalidating'] = 'S\'està validant {$a}';
$string['packagesvalidatingfailed'] = 'Instal·lació interrompuda a causa d\'un error de validació';
$string['packagesvalidatingok'] = 'Validació feta amb èxit; la instal·lació pot continuar';
$string['plugincheckall'] = 'Tots els connectors';
$string['plugincheckattention'] = 'Hi ha connectors que requereixen la vostra atenció';
$string['pluginchecknone'] = 'No cal que presteu atenció ara a cap connector';
$string['pluginchecknotice'] = 'Aquesta pàgina mostra els connectors que poden requerir la vostra atenció durant l\'actualització. Els elements ressaltats inclouen nous connectors que seran instal·lats ara, connectors que seran actualitzats ara i connectors que falten. Els complements es destaquen si hi ha disponibles versions més recents. Us recomanem que comproveu si hi ha versions més recents dels connectors i que actualitzeu el seu codi font abans de continuar amb aquesta actualització de Moodle.';
$string['plugindisable'] = 'Desactiva';
$string['plugindisabled'] = 'Desactivat';
$string['pluginenable'] = 'Activa';
$string['pluginenabled'] = 'Activat';
$string['release'] = 'Versió';
$string['requiredby'] = 'Requerit per: {$a}';
$string['requires'] = 'Requereix';
$string['rootdir'] = 'Directori';
$string['settings'] = 'Paràmetres';
$string['source'] = 'Font';
$string['sourceext'] = 'Complement';
$string['sourcestd'] = 'Estàndard';
$string['status'] = 'Estat';
$string['status_delete'] = 'Se suprimirà';
$string['status_downgrade'] = 'Hi ha instal·lada una versió superior!';
$string['status_missing'] = 'Falta al disc';
$string['status_new'] = 'S\'instal·larà';
$string['status_nodb'] = 'Cap base de dades';
$string['status_upgrade'] = 'S\'actualitzarà';
$string['status_uptodate'] = 'Instal·lat';
$string['supportedmoodleversions'] = 'Versions compatibles de Moodle';
$string['systemname'] = 'Identificador';
$string['type_antivirus'] = 'Connector antivirus';
$string['type_antivirus_plural'] = 'Connectors antivirus';
$string['type_auth'] = 'Mètode d\'autenticació';
$string['type_auth_plural'] = 'Connectors d\'autenticació';
$string['type_availability'] = 'Restricció de disponibilitat';
$string['type_availability_plural'] = 'Restriccions de disponibilitat';
$string['type_block'] = 'Bloc';
$string['type_block_plural'] = 'Blocs';
$string['type_cachelock'] = 'Controlador de bloqueig de memòria cau';
$string['type_cachelock_plural'] = 'Controladors de bloqueig de memòria cau';
$string['type_cachestore'] = 'Magatzem de memòria cau';
$string['type_cachestore_plural'] = 'Magatzems de memòria cau';
$string['type_calendartype'] = 'Tipus de calendari';
$string['type_calendartype_plural'] = 'Tipus de calendaris';
$string['type_coursereport'] = 'Informe del curs';
$string['type_coursereport_plural'] = 'Informes del curs';
$string['type_dataformat'] = 'Format de les dades';
$string['type_dataformat_plural'] = 'Formats de les dades';
$string['type_editor'] = 'Editor';
$string['type_editor_plural'] = 'Editors';
$string['type_enrol'] = 'Mètode d\'inscripció';
$string['type_enrol_plural'] = 'Mètodes d\'inscripció';
$string['type_filter'] = 'Filtre';
$string['type_filter_plural'] = 'Filtres de text';
$string['type_format'] = 'Format de curs';
$string['type_format_plural'] = 'Formats de curs';
$string['type_gradeexport'] = 'Mètode d\'exportació de qualificacions';
$string['type_gradeexport_plural'] = 'Mètodes d\'exportació de qualificacions';
$string['type_gradeimport'] = 'Mètode d\'importació de qualificacions';
$string['type_gradeimport_plural'] = 'Mètodes d\'importació de qualificacions';
$string['type_gradereport'] = 'Informe de qualificacions';
$string['type_gradereport_plural'] = 'Informes de qualificacions';
$string['type_gradingform'] = 'Mètode de qualificacions avançada';
$string['type_gradingform_plural'] = 'Mètodes de qualificacions avançades';
$string['type_local'] = 'Connector local';
$string['type_local_plural'] = 'Connectors locals';
$string['type_message'] = 'Sortida de missatgeria';
$string['type_message_plural'] = 'Sortides de missatgeria';
$string['type_mnetservice'] = 'Servei MNet';
$string['type_mnetservice_plural'] = 'Serveis MNet';
$string['type_mod'] = 'Mòdul d\'activitat';
$string['type_mod_plural'] = 'Mòduls d\'activitat';
$string['type_plagiarism'] = 'Connector de prevenció de plagi';
$string['type_plagiarism_plural'] = 'Connectors de prevenció de plagi';
$string['type_portfolio'] = 'Portfoli';
$string['type_portfolio_plural'] = 'Portfolis';
$string['type_profilefield'] = 'Tipus de camp del perfil';
$string['type_profilefield_plural'] = 'Tipus de camp del perfil';
$string['type_qbehaviour'] = 'Pregunta de comportament';
$string['type_qbehaviour_plural'] = 'Comportaments de pregunta';
$string['type_qformat'] = 'Format d\'importació/exportació de preguntes';
$string['type_qformat_plural'] = 'Formats d\'importació/exportació de preguntes';
$string['type_qtype'] = 'Tipus de pregunta';
$string['type_qtype_plural'] = 'Tipus de preguntes';
$string['type_report'] = 'Informe del lloc';
$string['type_report_plural'] = 'informes';
$string['type_repository'] = 'Repositori';
$string['type_repository_plural'] = 'Repositoris';
$string['type_search'] = 'Motor de cerca';
$string['type_search_plural'] = 'Motors de cerca';
$string['type_theme'] = 'Tema';
$string['type_theme_plural'] = 'Temes';
$string['type_tool'] = 'Eina d\'administració';
$string['type_tool_plural'] = 'Eines d\'administració';
$string['type_webservice'] = 'Protocol de serveis web';
$string['type_webservice_plural'] = 'Protocols de serveis web';
$string['uninstall'] = 'Desinstal·la';
$string['uninstallconfirm'] = 'Ara desinstal·lareu el connector <em>{$a->name}</em>. Això suprimirà completament de la base de dades tot allò relacionat amb aquest connector, inclosa la seva configuració, els registres, els fitxers d\'usuari gestionats pel connector, etc. No hi ha cap manera de desfer els canvis i Moodle no crearà cap còpia de seguretat de recuperació. CONFIRMEU que voleu continuar?';
$string['uninstalldelete'] = 'Totes les dades associades amb el connector <em>{$a->name}</em> han estat suprimides de la base de dades. Per a impedir que el connector pugui reinstal·lar-se automàticament, heu de esborrar ara manualment en el servidor la seva carpeta <em>{$a->rootdir}</em>. Moodle no pot esborrar aquesta carpeta a causa dels permisos d\'escriptura.';
$string['uninstalldeleteconfirm'] = 'Totes les dades associades amb el connector <em>{$a->name}</em> han estat suprimides de la base de dades. Per a impedir que el connector pugui reinstal·lar-se automàticament, cal esborrar ara en el servidor la seva capeta <em>{$a->rootdir}</em>. Voleu esborrar ara la carpeta del connector?';
$string['uninstalldeleteconfirmexternal'] = 'Sembla que la versió actual del connector ha estat obtinguda mitjançant el sistema de gestió de codi font ({$a}). Si suprimiu la carpeta del connector, podeu perdre modificacions locals importants del codi. Assegureu-vos que voleu suprimir la carpeta del connector abans de continuar.';
$string['uninstallextraconfirmblock'] = 'Hi ha {$a->instances} instàncies d\'aquest bloc';
$string['uninstallextraconfirmenrol'] = 'Hi ha {$a->enrolments} inscripcions d\'usuaris';
$string['uninstallextraconfirmmod'] = 'Hi ha  {$a->instances} instàncies d\'aquest mòdul en {$a->courses} cursos.';
$string['uninstalling'] = 'S\'està desinstal·lant {$a->name}';
$string['updateavailable'] = 'Hi ha una nova versió disponible {$a}!';
$string['updateavailable_moreinfo'] = 'Més informació...';
$string['updateavailable_release'] = 'Llançament {$a}';
$string['updatepluginconfirm'] = 'Confirmació de l\'actualització del connector';
$string['updatepluginconfirmexternal'] = 'Sembla que la versió actual del connector s\'ha obtingut a través del sistema de gestió de codi font ({$a}). Si instal·leu aquesta actualització, ja no podreu obtenir les actualitzacions del connector des del sistema de gestió de codi font. Si us plau assegureu-vos completament que voleu actualitzar el connector abans de continuar.';
$string['updatepluginconfirminfo'] = 'Ara instal·lareu una nova versió del connector <strong>{$a->name}</strong>. Podeu baixar un paquet zip amb la versió {$a->version} del connector a l\'adreça <a href="{$a->url}">{$a->url}</a> i descomprimir-lo a la vostra instal·lació de Moodle per a efectuar-ne l\'actualització.';
$string['updatepluginconfirmwarning'] = 'Teniu en compte que Moodle no farà automàticament una còpia de seguretat de la base de dades abans de l\'actualització. Es recomana que feu una còpia de seguretat completa ara, per fer front al risc que eventualment el nou codi tingui errors que impedeixin que el lloc funcioni, o fins i tot que es corrompi la base de dades. Continueu sota la vostra responsabilitat.';
$string['validationmsg_componentmatch'] = 'Nom complet del component';
$string['validationmsg_componentmismatchname'] = 'Error en el nom del complement';
$string['validationmsg_componentmismatchname_help'] = 'Alguns paquets ZIP, com els generats per Github, poden contenir un nom del directori arrel incorrecte. Us caldrà esmenar el nom del directori arrel per tal que concordi amb el nom declarat del complement.';
$string['validationmsg_componentmismatchname_info'] = 'El complement declara que el seu nom és  «{$a}» però això no concorda amb el nom del directori arrel.';
$string['validationmsg_componentmismatchtype'] = 'El tipus del complement no concorda';
$string['validationmsg_componentmismatchtype_info'] = 'Heu seleccionat el tipus «{$a->expected}» però el complement declare que el tipus és «{$a->found}».';
$string['validationmsg_filenotexists'] = 'No s\'ha trobat el fitxer extret';
$string['validationmsg_filesnumber'] = 'No s\'han trobat suficients fitxers en el paquet';
$string['validationmsg_filestatus'] = 'No es poden extraure tots els fitxers';
$string['validationmsg_filestatus_info'] = 'S\'estava intentant extraure el fitxer {$a->file} i ha succeït un error «{$a->status}».';
$string['validationmsg_foundlangfile'] = 'S\'ha trobat un fitxer d\'idioma';
$string['validationmsglevel_debug'] = 'Depuració';
$string['validationmsglevel_error'] = 'Error';
$string['validationmsglevel_info'] = 'D\'acord';
$string['validationmsglevel_warning'] = 'Avís';
$string['validationmsg_maturity'] = 'Nivell de maduresa declarat';
$string['validationmsg_maturity_help'] = 'El complement pot declarar el seu nivell de maduresa. Si el mantenidor considera el complement estable, la nivell de maduresa serà MATURITY_STABLE. Tots els altres nivells de maduresa (alfa o beta) s\'haurien de considerar inestables i generen un avís.';
$string['validationmsg_missingcomponent'] = 'El connector no declara el nom dels components';
$string['validationmsg_missingcomponent_help'] = 'Tots els connectors han de proporcionar el nom complet dels components mitjançant la declaració `$plugin->component` al fitxer version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'El nom anglès del fitxer no concorda';
$string['validationmsg_missingexpectedlangenfile_info'] = 'El tipus de complement no conté el fitxer de llengua anglesa esperat {$a}.';
$string['validationmsg_missinglangenfile'] = 'No s\'ha trobat el fitxer de llengua anglesa';
$string['validationmsg_missinglangenfolder'] = 'No s\'ha trobat la carpeta d\'idioma anglès';
$string['validationmsg_missingversion'] = 'El complement no declara la seva versió';
$string['validationmsg_missingversionphp'] = 'No s\'ha trobat el fitxer version.php';
$string['validationmsg_multiplelangenfiles'] = 'S\'ha trobat múltiples fitxers d\'idioma anglès';
$string['validationmsg_onedir'] = 'Estructura invàlida al paquet ZIP';
$string['validationmsg_onedir_help'] = 'El paquet ZIP ha de contenir un directori arrel que conté el codi del complement. El nom del directori arrel ha de tenir el mateix nom que el connector.';
$string['validationmsg_pathwritable'] = 'Comprovació del permís d\'escriptura.';
$string['validationmsg_pluginversion'] = 'Versió del complement.';
$string['validationmsg_release'] = 'Versió del connector';
$string['validationmsg_requiresmoodle'] = 'Versió de Moodle requerida';
$string['validationmsg_rootdir'] = 'Nom del plugin que s\'instal·larà';
$string['validationmsg_rootdir_help'] = 'El nom del directori arrel al paquet ZIP forma el nom del complement a instal·lar. Si el nom no és correcte, hauríeu de canviar el nom del directori arrel al ZIP abans d\'instal·lar el complement.';
$string['validationmsg_rootdirinvalid'] = 'Nom de plugin no vàlid';
$string['validationmsg_rootdirinvalid_help'] = 'El nom del directori arrel en el paquet ZIP viola els requeriments formals de sintaxi. Alguns paquets ZIP, com els generats per Github, poden contenir un nom de directori arrel incorrecte. Heu de corregir el nom del directori arrel per a fer-lo coincidir amb el nom del connector.';
$string['validationmsg_targetexists'] = 'La ubicació de destinació ja existeix';
$string['validationmsg_targetexists_help'] = 'El directori en el qual s\'instal·la el connector no ha d\'existir encara.';
$string['validationmsg_targetnotdir'] = 'La ubicació de l\'objectiu està ocupada per un fitxer';
$string['validationmsg_unknowntype'] = 'Tipus de plugin desconegut';
$string['validationmsg_versionphpsyntax'] = 'S\'ha detectat sintaxi no admesa al fitxer version.php';
$string['version'] = 'Versió';
$string['versiondb'] = 'Versió actual';
$string['versiondisk'] = 'Nova versió';
