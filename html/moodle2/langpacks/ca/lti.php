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
 * Strings for component 'lti', language 'ca', branch 'MOODLE_28_STABLE'
 *
 * @package   lti
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Accepta';
$string['accept_grades'] = 'Accepta qualificacions de l\'eina';
$string['accept_grades_admin'] = 'Accepta qualificacions de l\'eina';
$string['accept_grades_admin_help'] = 'Especifiqueu si el subministrador de l\'eina pot afegir, actualitzar, llegir i suprimir qualificacions associades amb les instàncies d\'aquest tipus d\'eina.

Alguns subministradors d\'eina permeten retornar informes de qualificacions a Moodle basades en accions preses dins l\'eina, amb la qual cosa es crea una experiència més integrada.';
$string['accept_grades_help'] = 'Especifiqueu si el subministrador de l\'eina pot afegir, actualitzar, llegir i suprimir qualificacions associades sols amb aquesta instància externa de l\'eina.

Alguns subministradors d\'eina permeten retornar informes de qualificacions a Moodle basades en accions preses dins l\'eina, amb la qual cosa es crea una experiència més integrada.

Fixeu-vos que aquest paràmetre pot ser sobreescrit en la configuració de l\'eina.';
$string['action'] = 'Acció';
$string['active'] = 'Activa';
$string['activity'] = 'Activitat';
$string['addnewapp'] = 'Habilita l\'aplicació externa';
$string['addserver'] = 'Afegeix un servidor confiable nou';
$string['addtype'] = 'Afegeix la configuració externa de l\'eina';
$string['allow'] = 'Permet';
$string['allowinstructorcustom'] = 'Permet als professors afegir paràmetres personalitats';
$string['allowsetting'] = 'Permet a l\'eina emmagatzemar 8K de paràmetres en Moodle';
$string['always'] = 'Sempre';
$string['automatic'] = 'Automàtic, basada en al llançament de URL';
$string['baseurl'] = 'URL base';
$string['basiclti'] = 'LTI';
$string['basicltiactivities'] = 'Activitats LTI';
$string['basiclti_base_string'] = 'Cadena base de OAuth LTI';
$string['basiclti_endpoint'] = 'Llançament del protocol endpoint LTI';
$string['basicltifieldset'] = 'Paràmetre d\'exemple personalitzat';
$string['basiclti_in_new_window'] = 'La vostra activitat ha sigut oberta en una finestra nova.';
$string['basicltiintro'] = 'Descripció de l\'activitat';
$string['basicltiname'] = 'Nom de l\'activitat';
$string['basiclti_parameters'] = 'Paràmetres de llançament LTI';
$string['basicltisettings'] = 'Paràmetres de interoperabilitat de l\'eina d\'aprenentatge bàsic';
$string['cannot_delete'] = 'No podeu suprimir aquesta configuració de l\'eina';
$string['cannot_edit'] = 'No podeu editar aquesta configuració de l\'eina';
$string['comment'] = 'Comentari';
$string['configpassword'] = 'Contrasenya de l\'eina remota per defecte';
$string['configpreferheight'] = 'Alçada preferida per defecte';
$string['configpreferwidget'] = 'Configura el giny per llaçar-se per defecte.';
$string['configpreferwidth'] = 'Amplada preferida per defecte';
$string['configresourceurl'] = 'URL per defecte';
$string['configtoolurl'] = 'URL de l\'eina remota per defecte';
$string['configtypes'] = 'Habilita aplicacions LTI';
$string['courseid'] = 'Nombre d\'ID de curs';
$string['coursemisconf'] = 'El curs està desconfigurat';
$string['course_tool_types'] = 'Tipus d\'eines al curs';
$string['createdon'] = 'Creat amb';
$string['curllibrarymissing'] = 'La biblioteca CURL de PHP cal que estigui instal·lada per utilitzar LTI';
$string['custom'] = 'Paràmetres personalitzats';
$string['custom_config'] = 'S\'està utilitzant la configuració de l\'eina personalitzada';
$string['custom_help'] = 'Els paràmetres personalitzats són paràmetres utilitzats pel proveïdor de l\'eina. Per exemple, un paràmetre personalitzat pot ser utilitzat per mostrar un recurs especific del proveïdor.

És segur deixar aquest camp sense canvis llevat que el canvi el dugui el proveïdor de l\'eina.';
$string['custominstr'] = 'Paràmetres personalitzats.';
$string['debuglaunch'] = 'Opció de depuració';
$string['debuglaunchoff'] = 'Llançament normal';
$string['debuglaunchon'] = 'Llançament amb depuració';
$string['default'] = 'Per defecte';
$string['default_launch_container'] = 'Contenidor de llançament per defecte';
$string['default_launch_container_help'] = 'El contenidor de llançament afecta la visualització de l\'eina quan es llança des del curs. Alguns contenidors de llançament proporcionen més pantalles reals de l\'eina, i d\'altres proporcionen una sensació més integrada amb Moodle.

* **Per defecte** — Utilitza el contenidor de llançament especificat en l\'eina de configuració.

* **Incrustat** — L\'eina es mostra amb la finestra de Moodle, de forma semblant a altres tipus d\'activitats.

* **Incrustat, sense blocs** — L\'eina es mostra dins la finestra de Moodle, amb els controls a la part superior de la pàgina.

* **Finestra nova** — L\'eina s\'obre en una finestra nova, i ocupa tot l\'espai disponible.

Depenent del navegador, es pot obrir una finestra emergent o una pestanya.

És possible que alguns navegadors bloquegin l\'obertura de finestres noves.';
$string['delegate'] = 'Delega al professor';
$string['delete'] = 'Suprimeix';
$string['delete_confirmation'] = 'Esteu segurs de voler suprimir aquesta configuració externa de l\'eina ?';
$string['deletetype'] = 'Suprimeix la configuració externa de l\'eina';
$string['display_description'] = 'Mostra la descripció de l\'activitat quan es llanci.';
$string['display_description_help'] = 'Si s\'habilita, la descripció de l\'activitat  mostrarà amunt el contingut del proveïdor de l\'eina.

La descripció pot ser utilitzada per proporcionar instruccions addicionals als llançadors de l\'eina, però no cal fer-ho obligatòriament.

La descripció mai es mostra quan el contenidor de llançament de l\'eina està en una finestra nova.';
$string['display_name'] = 'Mostra el nom de l\'activitat quan es llanci.';
$string['display_name_help'] = 'Si s\'habilita el nom de l\'activitat es mostrarà dalt del contingut del proveïdor de l\'eina.

Es possible que el proveïdor de l\'eina mostri el títol. Aquesta opció pot impedir que el títol de l\'activitat es mostri dues vegades.

El títol mai es mostra quan el llançador de l\'activitat està en una finestra nova.';
$string['domain_mismatch'] = 'El llançador de dominis de URL no concorda amb la configuració de l\'eina.';
$string['donot'] = 'No enviïs';
$string['donotaccept'] = 'No acceptis';
$string['donotallow'] = 'No permetis';
$string['edittype'] = 'Edita la configuració externa de l\'eina.';
$string['embed'] = 'Incrustada';
$string['embed_no_blocks'] = 'Incrustada sense blocs';
$string['enableemailnotification'] = 'Envia qualificacions per correu';
$string['enableemailnotification_help'] = 'Si s\'habilita, els alumnes rebran un correu amb els enviaments qualificats.';
$string['errormisconfig'] = 'Eina no configurada. Demaneu a l\'administrador de Moodle que arregli la configuració de l\'eina.';
$string['extensions'] = 'Serveis d\'extensió LTI';
$string['external_tool_type'] = 'Tipus d\'eina externa';
$string['external_tool_type_help'] = 'El propòsit principal de la configuració de l\'eina és establir un canal de comunicació segur entre Moodle i el proveïdor de l\'eina. També proporciona l\'oportunitat de configurar les opcions per defecte i els possibles serveis addicionals de l\'eina.

* **Automàtica, basada en l\'URL de llançament** — Aquest paràmetre pot ser utilitzat en la majoria de casos. Moodle seleccionarà la configuració més adequada per a l\'eina basada en l\'URL de llançament. S\'utilitzaran tant eines configurades per un administrador com dins d\'aquest curs.
Quan s\'especifica l\'URL de llançament, Moodle informa si el reconeix o no. Si Moodle no reconeix l\'URL de llançament, haureu d\'introduir els detalls de configuració de l\'eina de forma manual.

* **Un tipus específic d\'eina** — Si seleccioneu un tipus específic d\'eina, podeu imposar a Moodle una configuració de l\'eina quan es comuniqui amb el proveïdor extern de l\'eina. Si l\'URL de llançament no sembla pertànyer al proveïdor de l\'eina es mostrarà un missatge d\'avís. En alguns casos no cal introduir un URL de llançament quan es defineix un tipus d\'eina específic (sempre que no es llanci un recurs particular dins del proveïdor de l\'eina).

* **Configuració personalitzada** — Per a una configuració personalitzada de l\'eina només en aquesta instància, visualitzeu les Opcions avançades i introduïu la clau de consumidor i el secret compartit. Si no teniu una clau de consumidor i un secret compartit, els hauríeu de poder sol·licitar al proveïdor de l\'eina.
No totes les eines requereixen una clau de consumidor i un secret compartit, casos en els quals es poden deixar en blanc aquests camps.

### Edició de tipus d\'eina

Es mostraran tres icones després del menú desplegable de Tipus d\'eina externa:

* **Afegeix** — Crea una configuració d\'eina al nivell del curs. Totes les instàncies d\'eina externa en aquest curs podran utilitzar la configuració de l\'eina.
* **Edita** — Seleccioneu en la llista un tipus d\'eina del nivell del curs i després premeu aquesta icona. Els detalls de la configuració de l\'eina es poden editar.
* **Suprimeix** — Suprimeix el tipus d\'eina del nivell del curs.';
$string['external_tool_types'] = 'Tipus d\'eines externes';
$string['failedtoconnect'] = 'Moodle no pot comunicar-se amb el sistema «{$a}»';
$string['filter_basiclti_configlink'] = 'Configureu els vostres llocs favorits i les contrasenyes.';
$string['filter_basiclti_password'] = 'La contrasenya és obligatòria';
$string['filterconfig'] = 'Administració de LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Utilitzeu una configuració ja existent per la instància sense configurar';
$string['fixnew'] = 'Configuració nova';
$string['fixnewconf'] = 'Definiu una configuració nova per la instància sense configurar';
$string['fixold'] = 'Usa l\'existent';
$string['forced_help'] = 'Aquest paràmetre es obligatori en aquest curs o configuració d\'eina. No podeu canviar-lo amb aquesta interfície.';
$string['force_ssl'] = 'Força SSL';
$string['force_ssl_help'] = 'Quan seleccioneu aquesta opció, imposeu que tots els llançaments amb aquesta eina utilitzin SSL.

A més a més, totes les peticions de serveis web des del proveïdor de l\'eina utilitzaran SSL.

Si escolliu aquesta opció, confirmeu que el lloc web Moodle i el proveïdor de l\'eina admeten SSL.';
$string['generaltool'] = 'Eina general';
$string['global_tool_types'] = 'Tipus d\'eina globals';
$string['grading'] = 'Encaminament de la qualificació';
$string['icon_url'] = 'URL de l\'icona';
$string['icon_url_help'] = 'L\'URL de la icona permet a la icona mostrar el llistat del curs per a aquesta activitat per a ser modificat. En lloc d\'utilitzar la icona per defecte, es mostrarà una icona que transporta el tipus d\'activitat.';
$string['id'] = 'id';
$string['invalidid'] = 'La identificació de LTI és incorrecta';
$string['launch_in_moodle'] = 'Llança l\'eina a Moodle';
$string['launchinpopup'] = 'Llança contenidor';
$string['launch_in_popup'] = 'Llança eina emergent';
$string['launchinpopup_help'] = 'El contenidor de llançament afecta la visualització de l\'eina quan es llança des del curs. Alguns contenidors de llançament proporcionen més pantalles d\'estat a l\'eina, i d\'altres proporcionen una sensació més integrada amb Moodle.

* **Per defecte** — Utilitza el contenidor de llançament especificat per la configuració de l\'eina.

* **Incrustat** — L\'eina es mostra dins la finestra de Moodle, de forma semblant a altres activitats de Moodle.

* **Incrustada sense blocs** — L\'eina es mostra dins la finestra de Moodle, amb els controls de navegació a la part superior de la pàgina.

* **Finestra nova** — L\'eina s\'obre en una finestra nova, i ocupa tot l\'espai disponible.

Depenent del navegador, es pot obrir una finestra emergent o una pestanya.

És possible que alguns navegadors bloquegin l\'obertura de finestres noves.';
$string['launchoptions'] = 'Opcions de llançament';
$string['launch_url'] = 'URL de llançament';
$string['launch_url_help'] = 'L\'URL de llançament indica l\'adreça web de l\'eina externa, i pot contenir informació addicional, com ara algun recurs per mostrar.

Si no esteu segurs de què heu d\'introduir per a l\'URL de llançament, consulteu el proveïdor de l\'eina per a més informació.

Si heu seleccionat un tipus específic d\'eina, pot ser no us cal introduir un URL de llançament. Probablement es doni el cas que l\'enllaç de l\'eina només s\'utilitzi per executar-se en el sistema del proveïdor de l\'eina, i no per anar a un recurs específic.';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Qualifica activitats LTI';
$string['lti:addinstance'] = 'Afegeix una activitat LTI nova';
$string['lti_administration'] = 'Gestió LTI';
$string['lti_errormsg'] = 'L\'eina ha retornat el següent missatge d\'error: "{$a}"';
$string['lti:grade'] = 'Qualifica activitats LTI';
$string['lti_launch_error'] = 'Ha succeït un error quan es llançava l\'eina externa.';
$string['lti_launch_error_tool_request'] = '<p> Per enviar una petició a un administrador completeu la configuració de l\'eina, premeu<a href="{$a->admin_request_url}" target="_top">aquí</a>. </p>';
$string['lti_launch_error_unsigned_help'] = '<p>Aquest error pot ser resultat de la manca d\'una clau de consumidor i una contrasenya secreta compartida per al proveïdor de l\'eina.</p>
<p>Si teniu la clau de consumidor i la contrasenya secreta compartida, cal que l\'introduïu quan editeu la instància de l\'eina externa (comproveu que les opcions avançades són visibles).</p>
<p>De forma alternativa, podeu crear una configuració de proveïdor de l\'eina al nivell del curs <a href="{$a->course_tool_editor}">aquí</a>.</p>';
$string['lti:manage'] = 'Esdevingues professor quan l\'eina es llanci';
$string['lti:requesttooladd'] = 'Envia una eina als admins per configurar';
$string['lti_tool_request_added'] = 'La petició de configuració de l\'eina ha sigut enviat amb èxit. Podeu contactar amb l\'administrador per completar la configuració de l\'eina.';
$string['lti_tool_request_existing'] = 'Una configuració d\'eina per al domini de l\'eina ha sigut enviat.';
$string['ltiunknownserviceapicall'] = 'Crida API a servei de LTI desconegut';
$string['lti:view'] = 'Llança activitats d\'eines externes';
$string['main_admin'] = 'Ajuda general';
$string['main_admin_help'] = 'Les eines externes permeten als usuaris de Moodle interaccionar de forma fluida amb recursos d\'aprenentatge allotjats de manera remota. Mitjançant un protocol de llançament especial, l\'eina remota té accés a informació general sobre l\'usuari que l\'executa; per exemple, el nom de la institució, l\'ID del curs, l\'ID de l\'usuari, i altres informacions com el nom de l\'usuari o l\'adreça de correu electrònic.

Els tipus d\'eines enumerades en aquesta pàgina es divideixen en tres categories:

* **Activa** —Aquests proveïdors d\'eines han estat aprovats i configurats per un administrador. Es poden utilitzar des de dins de qualsevol curs en aquesta instància de Moodle. Si s\'introdueixen una clau de consumidor i una contrasenya secreta compartida, s\'estableix una relació de confiança entre aquesta instància de Moodle i l\'eina remota, de manera que es proporciona un canal de comunicació segur.
* **Pendent** —Aquests proveïdors d\'eines han entrat a través de la importació d\'un paquet, però no han estat configurats per un administrador.
Amb tot, els professors poden emprar eines d\'aquests proveïdors si tenen una clau de consumidor i una contrasenya secreta compartida, o si no en cal cap.
* **Rebutjada** —Aquests proveïdors d\'eines han estat marcats com aquells que un administrador no té intenció de posar a disposició de tota la instància Moodle.
Amb tot, els professors poden emprar eines d\'aquests proveïdors si tenen una clau de consumidor i una contrasenya secreta compartida, o si no en cal cap.';
$string['miscellaneous'] = 'Miscel·lania';
$string['misconfiguredtools'] = 'S\'han detectat instàncies d\'eina sense configurar.';
$string['missingparameterserror'] = 'Aquesta pàgina no està configurada: "{$a}"';
$string['module_class_type'] = 'Tipus de mòdul de Moodle';
$string['modulename'] = 'Eina externa';
$string['modulename_help'] = 'Les eines externes permeten als usuaris de Moodle interactuar amb recursos d\'aprenentatge i activitats d\'altres llocs web. Per exemple, una eina externa pot proporcionar accés  a un tipus d\'activitat nou o a materials d\'aprenentatge d\'un editor.

Per configurar una instància d\'eina externa d\'un proveïdor d\'eines cal que admeti LTI (interoperabilitat d\'eines d\'aprenentatge). Si trobeu un proveïdor d\'eines que admeti LTI, us proporcionarà instruccions per configurar l\'eina externa. A més a més, els tipus d\'eina configurats per un administrador de lloc també estaran disponibles per al seu ús.

Les eines externes diferiran en els recursos URL en alguns aspectes:
* **Informació de context** — Les eines externes tenen accés a informació sobre l\'usuari que llança l\'eina, com ara la institució, el curs, el nom i altres informacions.

* **Integració avançada** — Les eines externes permeten llegir, actualitzar i suprimir qualificacions associades amb l\'activitat de què es tracti. Es planegen més punts d\'integració en versions futures.

* **Seguretat** — Les configuracions de les eines externes creen relacions de confiança entre Moodle i  l\'eina; permeten una comunicació segura entre aquests.';
$string['modulenameplural'] = 'LTIs bàsics';
$string['modulenamepluralformatted'] = 'Instàncies';
$string['never'] = 'Mai';
$string['new_window'] = 'Finestra nova';
$string['noattempts'] = 'No s\'han fet intents amb aquest eina';
$string['no_lti_configured'] = 'No hi ha eines externes actives configurades.';
$string['no_lti_pending'] = 'No hi ha eines externes pendents.';
$string['no_lti_rejected'] = 'No hi ha eines externes rebutjades.';
$string['noltis'] = 'No hi ha instàncies LTI';
$string['noservers'] = 'No s\'han trobat servidors';
$string['notypes'] = 'No hi ha eines LTI configurades actualment a Moodle. Feu clic a l\'enllaç d\'instal·lació i afegiu-ne alguna.';
$string['noviewusers'] = 'No s\'han trobat usuaris amb permís per utilitzar aquesta eina.';
$string['optionalsettings'] = 'Paràmetres opcionals';
$string['organization'] = 'Detalls de l\'organització';
$string['organizationdescr'] = 'Descripció de l\'organització';
$string['organizationid'] = 'ID de l\'organització';
$string['organizationid_help'] = 'Un únic identificador per a aquesta instància de Moodle. De forma típica s\'utilitza el nom de DNS de l\'organització.

Si deixeu aquest camp en blanc s\'utilitzarà el nom del servidor del vostre lloc Moodle per defecte.';
$string['organizationurl'] = 'URL de l\'organització';
$string['organizationurl_help'] = 'L\'URL base per a aquesta instància de Moodle.

Si deixeu aquest camp en blanc, s\'utilitzarà el valor per defecte en la configuració del lloc.';
$string['pagesize'] = 'Enviaments mostrats a la pàgina';
$string['password'] = 'Contrasenya';
$string['password_admin'] = 'Contrasenya (admin)';
$string['password_admin_help'] = 'La contrasenya s\'utilitza per autenticar l\'usuari en l\'accés a l\'eina. Se sol proporcionar amb una clau per al proveïdor de l\'eina.

Les eines que no demanen comunicació segura amb Moodle i no proporcionen serveis addicionals (com els informes de qualificacions) poden no exigir una contrasenya.';
$string['password_help'] = 'Per a les eines preconfigurades, no cal introduir una contrasenya secreta compartida, ja que aquesta es proporcionarà com a part del procés de configuració.

Aquest camp s\'hauria d\'introduir si es crea un enllaç a un proveïdor d\'eina que no s\'ha configurat ja.
Si el proveïdor de l\'eina s\'ha d\'utilitzar més d\'una vegada en aquest curs, és una bona idea afegir una configuració d\'eina per al curs.

Podem considerar la contrasenya secreta compartida com una contrasenya emprada per autenticar l\'accés a l\'eina. El proveïdor de l\'eina l\'hauria de proporcionar juntament amb la clau de consumidor.

Potser que a les eines que no requereixen una comunicació segura amb Moodle i que no proporcionen serveis addicionals (com els informes de qualificacions) no els calgui la contrasenya secreta compartida.';
$string['pending'] = 'Pendent';
$string['pluginadministration'] = 'Gestió de LTI';
$string['pluginname'] = 'LTI';
$string['preferheight'] = 'Altura preferida';
$string['preferwidget'] = 'Llança el giny preferit';
$string['preferwidth'] = 'Amplada preferida';
$string['press_to_submit'] = 'Prem per llaçar aquesta activitat';
$string['privacy'] = 'Privacitat';
$string['quickgrade'] = 'Permet la qualificació fàcil';
$string['quickgrade_help'] = 'Si s\'habilita, es podran qualificar múltiples eines en cada pàgina. Afegiu qualificacions i comentaris i llavors premeu el botó "Desa tota la meva retroacció" per desar tots els canvis de la pàgina.';
$string['redirect'] = 'Sereu redireccionat en pocs segons. Si no sou redireccionat, premeu el botó.';
$string['reject'] = 'Rebutja';
$string['rejected'] = 'Rebutjat';
$string['resource'] = 'Recurs';
$string['resourcekey'] = 'Clau';
$string['resourcekey_admin'] = 'Clau (admin)';
$string['resourcekey_admin_help'] = 'La clau permet a l\'usuari autenticar-se per accedir a l\'eina. Pot utilitzar-se sols per identificar el lloc Moodle des del qual els usuaris llancen l\'eina.

La clau serà proporcionada pel proveïdor de l\'eina. El mètode d\'obtenció d\'una clau varia entre els proveïdors d\'eines. Pot ser un procés automatitzat, o pot caldre el diàleg amb el proveïdor de l\'eina.

A les eines que no utilitzen la comunicació segura amb Moodle i no proporcionen serveis addicionals (com els informes de qualificacions) no els cal l\'ús de la clau.';
$string['resourcekey_help'] = 'Per a les eines preconfigurades no cal introduir aquí una clau de recurs, ja que la clau de consumidor es proporcionarà com a part del procés de configuració.

Aquest camp s\'hauria d\'introduir si es crea un enllaç a un proveïdor d\'eina que no s\'ha configurat ja. Si el proveïdor d\'eina s\'ha d\'utilitzar més d\'una vegada en aquest curs, és una bona idea afegir una configuració d\'eina per al curs.

Podem considerar la clau de consumidor com un nom d\'usuari emprat per autenticar l\'accés a l\'eina. El proveïdor de l\'eina el pot emprar per identificar especialment el lloc Moodle des del qual els usuaris executen l\'eina.

El proveïdor de l\'eina ha de proporcionar la clau de consumidor. El mètode d\'obtenció d\'una clau de consumidor varia entre proveïdors d\'eina. Pot ser un procés automatitzat, o pot caldre un diàleg amb el proveïdor de l\'eina.

És possible que les eines que no requereixen una comunicació segura amb Moodle i que no proporcionen serveis addicionals (com els informes de qualificacions) no necessitin una clau de recurs.';
$string['resourceurl'] = 'URL del recurs';
$string['return_to_course'] = 'Prem <a href="{$a->link}" target="_top">aquí</a> per tornar al curs.';
$string['saveallfeedback'] = 'Desa totes les meves realimentacions';
$string['secure_icon_url'] = 'Icona d\'URL segura';
$string['secure_icon_url_help'] = 'Semblant a la icona d\'URL, però utilitzada quan l\'usuari accedeix a Moodle mitjançant SSL. El propòsit principal d\'aquest camp és evitar que el navegador avisi l\'usuari si s\'ha accedit a la pàgina subjacent amb SSL, però demanant-li si vol mostrar una imatge insegura.';
$string['secure_launch_url'] = 'URL de llançament segur';
$string['secure_launch_url_help'] = 'Semblant al llançament d\'URL, però utilitzat quan el llançament d\'alta seguretat és obligatori. Moodle utilitzarà el llançament d\'URL segur en lloc del llançament d\'URL si s\'accedeix al lloc Moodle amb SSL, o si l\'eina de configuració està configurada per llançar sempre mitjançant SSL.

El llançament d\'URL es pot configurar també cap a una adreça https de forma obligatòria, i aquest camp es deixarà en blanc.';
$string['send'] = 'Envia';
$string['setupoptions'] = 'Opcions de configuració';
$string['share_email'] = 'Comparteix el llançador de correus electrònics amb l\'eina';
$string['share_email_admin'] = 'Comparteix el llançador de correus electrònics amb l\'eina (admin)';
$string['share_email_admin_help'] = 'Especifica de quina forma l\'adreça de correu de l\'usuari que llança l\'eina serà compartida amb el proveïdor de l\'eina.
L\'eina pot necessitar adreces de correu dels usuaris per distingir usuaris amb el mateix nom a la UI o enviar correus electrònics als usuaris basades en les accions de l\'eina.';
$string['share_email_help'] = 'Especifica de quina forma l\'adreça de correu de l\'usuari que llança l\'eina serà compartida amb el proveïdor de l\'eina.
L\'eina pot necessitar adreces de correu dels usuaris per distingir usuaris amb el mateix nom  o enviar correus electrònics als usuaris basades en les accions de l\'eina.

Fixeu-vos que aquesta paràmetre pot ser sobreescrit en la configuració de l\'eina.';
$string['share_name'] = 'Comparteix el noms dels llançadors amb l\'eina';
$string['share_name_admin'] = 'Comparteix el noms dels llançadors amb l\'eina';
$string['share_name_admin_help'] = 'Especifica de quina forma el nom complet de l\'usuari que llança l\'eina serà compartida amb el proveïdor de l\'eina.
L\'eina pot necessitar els noms dels llançadors per mostrar informació significativa dins de l\'eina.';
$string['share_name_help'] = 'Especifica de quina forma el nom complet de l\'usuari que llança l\'eina serà compartida amb el proveïdor de l\'eina. L\'eina pot necessitar els noms dels llançadors per mostrar informació significativa dins de l\'eina.

Fixeu-vos que aquest paràmetre pot ser sobreescrit en la configuració de l\'eina.';
$string['share_roster'] = 'Permet a l\'eina l\'accés a aquesta llista del curs';
$string['share_roster_admin'] = 'L\'eina pot accedir a la llista del curs';
$string['share_roster_admin_help'] = 'Especifica de quina forma l\'eina pot accedir a la llista d\'usuaris inscrits al curs des que l\'eina es llançada.';
$string['share_roster_help'] = 'Especifica de quina forma l\'eina pot accedir a la llista d\'usuaris inscrits  a aquest curs.

Fixeu-vos que aquest paràmetre pot ser sobreescrit en la configuració de l\'eina.';
$string['show_in_course'] = 'Mostra el tipus d\'eina quan es creïn instàncies d\'eina.';
$string['show_in_course_help'] = 'Si ho seleccioneu, aquesta configuració d\'eina apareixerà en el desplegable "Tipus d\'eina externa" quan els professors configuren eines externes dins dels seus cursos.

En molts casos, aquesta opció no cal que sigui seleccionada. Els professors poden utilitzar la configuració d\'eina basada en el llançament de URL cercant l\'eina basada en URL, la qual és el mètode preferit.

El únic cas en el qual aquesta opció hauria de ser seleccionada és si la configuració de l\'eina es fa sols per una mostra. Per exemple, si tots els llançaments de l\'eina porten l\'usuari a una pàgina de prova en lloc de a un recurs especific.';
$string['size'] = 'Mida dels parametres';
$string['submission'] = 'Submissió';
$string['submissions'] = 'Trameses';
$string['submissionsfor'] = 'Trameses per a  {$a}';
$string['subplugintype_ltisource'] = 'Font LTI';
$string['subplugintype_ltisource_plural'] = 'Fonts LTI';
$string['toggle_debug_data'] = 'Commuta dades de depuració';
$string['tool_config_not_found'] = 'La configuració de l\'eina no s\'ha trobat per aquesta URL';
$string['tool_settings'] = 'Configuració de l\'eina';
$string['toolsetup'] = 'Configuració de l\'eina externa';
$string['toolurl'] = 'URL base de l\'eina';
$string['toolurl_help'] = 'L\'URL base de l\'eina s\'utilitza per cercar URL de llançament d\'eines per configurar correctament l\'eina.
Posar el prefix amb http(s) és opcional.

A més a més, l\'URL base s\'utilitza com a URL de llançament si l\'URL de llançament no està especificat en la instància de l\'eina externa.

 <table>
<thead>
<tr>
<td>
<b>URL base</b>
 </td>
 <td>
<b>Cerques</b>
 </td>
 </tr>
</thead>
<tbody>
<tr>
<td> tool.com </td>
 <td> tool.com, tool.com/quizzes, tool.com/quizzes/quiz.php?id=10, www.tool.com/quizzes </td>
 </tr>
 <tr>
<td> www.tool.com/quizzes
</td>
<td> tool.com/quizzes, tool.com/quizzes/take.php?id=10, www.tool.com/quizzes
</td>
</tr>
<tr>
<td> quiz.tool.com
</td>
<td> quiz.tool.com, quiz.tool.com/take.php?id=10
</td>
 </tr>
</tbody>
 </table>

Si dues configuracions d\'eines tenen el mateix domini, s\'usarà la cerca més específica.';
$string['typename'] = 'Nom de l\'eina';
$string['typename_help'] = 'El nom de l\'eina s\'utilitza per identificar el proveïdor de l\'eina dins Moodle.  El nom introduït serà visible per als professors quan afegeixin eines externes dins els cursos.';
$string['types'] = 'Tipus';
$string['update'] = 'Actualitza';
$string['using_tool_configuration'] = 'S\'està utilitzant la configuració de l\'eina:';
$string['validurl'] = 'Una URL vàlida cal que comenci amb http(s)://';
$string['viewsubmissions'] = 'Mostra enviaments i qualificacions a la pantalla';
