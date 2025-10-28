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
 * Strings for component 'chat', language 'ca', version '4.4'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Teniu sessions de xat properes';
$string['ajax'] = 'Versió Ajax';
$string['autoscroll'] = 'Desplaçament automàtic';
$string['beep'] = 'Fes sonar';
$string['bubble'] = 'Bombolla';
$string['cantlogin'] = 'No s\'ha pogut entrar a la sala de xat';
$string['chat:addinstance'] = 'Afegeix un xat nou';
$string['chat:chat'] = 'Accedeix a una sala de xat';
$string['chat:deletelog'] = 'Suprimir registres de xat';
$string['chat:exportparticipatedsession'] = 'Exporta la sessió del xat en la qual heu intervingut.';
$string['chat:exportsession'] = 'Exporta qualsevol sessió de xat';
$string['chat:readlog'] = 'Llegeix els registres de xat';
$string['chat:talk'] = 'Participar en un xat';
$string['chat:view'] = 'Visualitza l\'activitat del xat';
$string['chatintro'] = 'Descripció';
$string['chatname'] = 'Nom d\'aquesta sala de xat';
$string['chatreport'] = 'Sessions de xat';
$string['chattime'] = 'Proper dia i hora de xat';
$string['compact'] = 'Compacte';
$string['composemessage'] = 'Redacta un missatge';
$string['configmethod'] = 'El mètode normal de xat implica que els clients contactin regularment el servidor en cerca d\'actualitzacions. No necessita cap configuració i funciona enlloc, però pot crear una càrrega gran al servidor si s\'apleguen molts usuaris. Utilitzar un dimoni servidor requereix accés a l\'intèrpret d\'ordres d\'Unix, però comporta un entorn de xat ràpid i escalable.';
$string['confignormalupdatemode'] = 'El refrescament de la sala de xat se sol realitzar d\'una manera prou eficient per mitjà de la característica <em>Keep-Alive</em> de l\'HTTP 1.1, però això és bastant pesat per al servidor. Un mètode més avançat consisteix a utilitzar l\'estratègia <em>Corrent de dades</em> per enviar les actualitzacions als usuaris. L\'estratègia <em>Corrent de dades</em> és més escalable (similar al mètode chatd) però no funciona en tots els servidors.';
$string['configoldping'] = 'Després de quant de temps d\'estar en silenci cal considerar que un usuari ha marxat? Això és només un límit superior, ja que normalment les desconnexions es detecten de manera molt ràpida. Els valors més baixos seran més exigents en el vostre servidor. Si utilitzeu el mètode normal, no l\'establiu <strong>mai</strong> a un número inferior a 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Freqüència de refrescament de la sala de xat (en segons). El fet de posar aquest valor massa baix farà que la sala sembli més ràpida, però pot carregar excessivament el servidor quan hi ha molta gent parlant. Si utilitzeu actualitzacions de <em>Corrent de dades</em>, podeu seleccionar freqüències de refrescament més altes; proveu-ho amb 2.';
$string['configrefreshuserlist'] = 'Freqüència de refresc de la llista d\'usuaris (en segons)';
$string['configserverhost'] = 'El nom de l\'ordinador on hi ha el dimoni servidor';
$string['configserverip'] = 'L\'adreça IP numèrica corresponent al mateix ordinador';
$string['configservermax'] = 'Nombre màxim de clients permesos';
$string['configserverport'] = 'Número del port que pot utilitzar el dimoni';
$string['coursetheme'] = 'Tema del curs';
$string['crontask'] = 'Processament en segon pla del mòdul de xat';
$string['currentchats'] = 'Sessions de xat actives';
$string['currentusers'] = 'Usuaris actuals';
$string['deletesession'] = 'Suprimeix aquesta sessió';
$string['deletesessionsure'] = 'Confirmeu que voleu suprimir aquesta sessió?';
$string['donotusechattime'] = 'No publiquis el dia i hora dels xats';
$string['enterchat'] = 'Entra al xat';
$string['entermessage'] = 'Escriviu el vostre missatge';
$string['errornousers'] = 'No s\'ha pogut trobar cap usuari!';
$string['eventmessagesent'] = 'S\'ha enviat el missatge';
$string['eventsessionsviewed'] = 'S\'han visualitzat les sessions';
$string['explaingeneralconfig'] = 'Aquests paràmetres s\'utilitzen <strong>sempre</strong>';
$string['explainmethoddaemon'] = 'Aquests paràmetres <strong>només</strong> compten si heu seleccionat "Dimoni servidor de chat" en chat_method';
$string['explainmethodnormal'] = 'Aquests paràmetres <strong>només</strong> compten si heu seleccionat "Mètode normal" en chat_method';
$string['generalconfig'] = 'Configuració normal';
$string['idle'] = 'Inactiu';
$string['indicator:cognitivedepth'] = 'Xat cognitiu';
$string['indicator:cognitivedepthdef'] = 'Xat cognitiu';
$string['indicator:cognitivedepthdef_help'] = 'El participant ha assolit aquest percentatge de la implicació cognitiva oferta per les activitats de Xat en el decurs d\'aquest interval d\'anàlisi (Nivells = No visualització, Visualització, Enviament, Visualització de retroalimentacions, Comenaris a les retroalimentacions)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Xat social';
$string['indicator:socialbreadthdef'] = 'Xat social';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inputarea'] = 'Àrea d\'entrada de text';
$string['invalidid'] = 'No s\'ha pogut trobar aquesta sala de xat';
$string['list_all_sessions'] = 'Llista totes les sessions';
$string['list_complete_sessions'] = 'Mostra només la llista de les sessions completes.';
$string['listing_all_sessions'] = 'S\'està mostrant la llista de totes les sessions.';
$string['messagebeepseveryone'] = '{$a} ha fet bip a tothom!';
$string['messagebeepsyou'] = '{$a} t\'acaba de fer bip!';
$string['messageenter'] = '{$a} acaba d\'entrar en aquest xat';
$string['messageexit'] = '{$a} ha abandonat aquest xat';
$string['messages'] = 'Missatges';
$string['messageyoubeep'] = 'Heu fet un toc a {$a}';
$string['method'] = 'Mètode de xat';
$string['methodajax'] = 'Mètode Ajax';
$string['methoddaemon'] = 'Dimoni servidor de xat';
$string['methodnormal'] = 'Mètode normal';
$string['modulename'] = 'Xat';
$string['modulename_help'] = 'El mòdul d\'activitat de xat permet que els participants mantinguin una conversa escrita sincrònica, en temps real.

El xat pot ser una activitat d\'una sola vegada o es pot repetir a la mateixa hora cada dia o cada setmana. Les sessions de xat es desen i es poden posar a disposició de tothom per llegir-les o es poden restringir als usuaris amb la capacitat de veure els registres de sessions de xat.

Els xats són especialment útils quan el grup no es pot trobar presencialment. Exemples:

* Reunions periòdiques d\'estudiants que participen en cursos en línia, de manera que puguin compartir experiències amb altres participants del mateix curs però que no resideixen al mateix lloc.
* Un estudiant que temporalment no pot assistir en persona pot parlar així amb el professor per mantenir-se al corrent de la feina.
* Els estudiants més joves poden utilitzar el xat des de casa fora de l\'horari escolar com una forma (controlada) d\'iniciació al món de les xarxes socials.
* Una sessió de preguntes i respostes amb un expert convidat.
* Sessions per a ajudar els estudiants a preparar-se per als exàmens, en les quals el professor o altres estudiants posen exemples de preguntes.';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'Xats';
$string['neverdeletemessages'] = 'No suprimeixis mai els missatges';
$string['no_complete_sessions_found'] = 'No s\'han trobat sessions completades.';
$string['nochat'] = 'No es troba el xat';
$string['noguests'] = 'El xat no està obert a visitants';
$string['nomessages'] = 'No hi ha missatges encara';
$string['nopermissiontoseethechatlog'] = 'No teniu permisos per veure el registre de xats.';
$string['normalkeepalive'] = 'Keep-Alive';
$string['normalstream'] = 'Corrent de dades';
$string['noscheduledsession'] = 'No hi ha cap sessió programada';
$string['notallowenter'] = 'No teniu permesa l\'entrada a la sala de xat.';
$string['notlogged'] = 'No heu entrat!';
$string['oldping'] = 'Temps límit de desconnexió';
$string['page-mod-chat-x'] = 'Qualsevol pàgina del mòdul de xat';
$string['pastchats'] = 'Sessions de xat anteriors';
$string['pastsessions'] = 'Sessions anteriors';
$string['pluginadministration'] = 'Administració del xat';
$string['pluginname'] = 'Xat';
$string['privacy:metadata:chat_messages_current'] = 'Sessió de xat actual. Aquestes dades són temporals i s\'eliminen després d\'eliminar la sessió de xat';
$string['privacy:metadata:chat_users'] = 'Fa el seguiment de quins usuaris es troben en quines sales de xat';
$string['privacy:metadata:chat_users:firstping'] = 'Hora del primer accés a la sala de xat';
$string['privacy:metadata:chat_users:ip'] = 'IP de l\'usuari';
$string['privacy:metadata:chat_users:lang'] = 'Idioma de l\'usuari';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Hora de l\'últim missatge en aquesta sala de xat';
$string['privacy:metadata:chat_users:lastping'] = 'Hora de l\'últim accés a la sala de xat';
$string['privacy:metadata:chat_users:userid'] = 'L\'identificador de l\'usuari';
$string['privacy:metadata:messages'] = 'Registre dels missatges enviats durant una sessió de xat';
$string['privacy:metadata:messages:message'] = 'El missatge';
$string['privacy:metadata:messages:timestamp'] = 'L\'hora en què s\'ha enviat el missatge.';
$string['privacy:metadata:messages:userid'] = 'L\'ID d\'usuari de l\'autor del missatge';
$string['refreshroom'] = 'Refresca la sala';
$string['refreshuserlist'] = 'Refresca la llista d\'usuaris';
$string['removemessages'] = 'Suprimeix tots els missatges';
$string['repeatdaily'] = 'A la mateixa hora cada dia';
$string['repeatnone'] = 'No es repeteix; publica només la data i hora especificades';
$string['repeattimes'] = 'Repeteix/publica els horaris de les sessions';
$string['repeatweekly'] = 'El mateix dia a la mateixa hora cada setmana';
$string['saidto'] = 'dit a';
$string['savemessages'] = 'Desa les sessions anteriors';
$string['search:activity'] = 'Xat: informació de l\'activitat';
$string['seesession'] = 'Visualitza aquesta sessió';
$string['send'] = 'Envia';
$string['sending'] = 'S\'està enviant';
$string['serverhost'] = 'Nom del servidor';
$string['serverip'] = 'Adreça IP del servidor';
$string['servermax'] = 'Nombre màxim d\'usuaris';
$string['serverport'] = 'Port del servidor';
$string['sessions'] = 'Sessions de xat';
$string['sessionstartsin'] = 'La propera sessió de xat començarà en {$a}.';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Tothom pot veure les sessions anteriors';
$string['studentseereports_help'] = 'Si es configura en No, només els usuaris amb la capacitat mod/chat:readlog poden veure els registres del xat';
$string['talk'] = 'Parla';
$string['updatemethod'] = 'Mètode d\'actualització';
$string['updaterate'] = 'Freqüència d\'actualització:';
$string['userlist'] = 'Llista d\'usuaris/àries';
$string['usingchat'] = 'Ús del xat';
$string['usingchat_help'] = 'p>El mòdul de xat té algunes característiques que fan una mica més agradables les tertúlies.</p>

<dl>

  <dt><b>Emoticones</b></dt>

  <dd>Totes les emoticones que es poden teclejar en altres parts de Moodle també es poden teclejar als xats i es visualitzaran correctament. Per exemple: :-) = <img alt="" src="pix/s/smiley.gif" />

  </dd>


  <dt><b>Enllaços</b></dt>

  <dd>Les adreces d\'Internet es transformen automàticament en enllaços.</dd>

  <dt><b>Emocions</b></dt>

  <dd>Podeu començar una línia amb «/me» o «:» per expressar emocions. Per exemple, si el vostre nom és Joan i escriviu «:riu!» o «/me riu!» aleshores tothom veurà «Joan riu!»</dd>

  <dt><b>Bips</b></dt>

  <dd>Podeu enviar un so a una altra persona prement l\'enllaç «bip» del costat del seu nom. Una drecera útil per fer bip a tothom alhora és escriure «beep all».</dd>

<dt><b>HTML</b></dt>

  <dd>Si sabeu una mica de codi HTML, el podeu utilitzar per fer coses com ara inserir imatges en el text, fer sons o crear text de mides i colors diversos.</dd>

</dl>';
$string['viewreport'] = 'Sessions de xat anteriors';
