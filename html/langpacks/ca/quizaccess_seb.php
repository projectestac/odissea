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
 * Strings for component 'quizaccess_seb', language 'ca', version '4.4'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientrequiresseb'] = 'Aquest qüestionari s\'ha configurat per emprar el Navegador d\'examen segur amb la configuració del client.';
$string['filemanager_sebconfigfile'] = 'Carrega el fitxer de configuració del Navegador d\'examen segur';
$string['filemanager_sebconfigfile_help'] = 'Carregueu el vostre propi fitxer de configuració del Navegador d\'examen segur per a aquest qüestionari.';
$string['httplinkbutton'] = 'Baixa la configuració';
$string['seb'] = 'Navegador d\'examen segur';
$string['seb:manage_seb_allowcapturecamera'] = 'Canvia el paràmetre del qüestionari del Navegador d\'examen segur: Permet l\'accés del navegador a la càmera';
$string['seb:manage_seb_allowcapturemicrophone'] = 'Canvia el paràmetre del qüestionari del Navegador d\'examen segur: Permet l\'accés del navegador al micròfon';
$string['seb_activateurlfiltering'] = 'Habilita el filtratge d\'URL';
$string['seb_activateurlfiltering_help'] = 'Si s\'habilita, els URL es filtraran quan es carreguin les pàgines web. El conjunt de filtres s\'ha de definir a sota.';
$string['seb_allowcapturecamera'] = 'Permet l\'accés del navegador a la càmera';
$string['seb_allowcapturemicrophone'] = 'Permet l\'accés del navegador al micròfon';
$string['seb_allowedbrowserexamkeys'] = 'Claus de l\'examen permeses per al navegador';
$string['seb_allowedbrowserexamkeys_help'] = 'En aquest camp podeu introduir les claus de l\'examen permeses per al navegador per a les versions del Navegador d\'examen segur que tenen permís per accedir a aquest qüestionari. Si no se n\'introdueix cap, aleshores no es comproven les claus de l\'examen permeses per al navegador.';
$string['seb_allowreloadinexam'] = 'Habilita l\'actualització de la pàgina durant l\'examen';
$string['seb_allowreloadinexam_help'] = 'Si s\'habilita, es permet actualitzar la pàgina (botó d\'actualització a la barra de tasques del Navegador d\'examen segur, barra d\'eines del navegador, menú lliscant lateral d\'iOS, drecera de teclat F5/cmd+R).
Tingueu en compte que la memòria cau fora de línia pot no funcionar de manera correcta si un usuari intenta actualitzar una pàgina sense connexió a Internet.';
$string['seb_allowspellchecking'] = 'Habilita la verificació ortogràfica';
$string['seb_allowspellchecking_help'] = 'Si s\'habilita, es permet la verificació ortogràfica al Navegador d\'examen segur.';
$string['seb_allowuserquitseb'] = 'Habilita la sortida del Navegador d\'examen segur';
$string['seb_allowuserquitseb_help'] = 'Si s\'habilita, els usuaris poden sortir del Navegador d\'examen segur amb el botó «Surt» a la barra de tasques del Navegador d\'examen segur, o pitjant les tecles Ctrl-Q o clicant el botó de tancament de la finestra principal del navegador.';
$string['seb_enableaudiocontrol'] = 'Habilita els controls d\'àudio';
$string['seb_enableaudiocontrol_help'] = 'Si s\'habilita, es mostrarà la icona de control d\'àudio a la barra de tasques del Navegador d\'examen segur.';
$string['seb_expressionsallowed'] = 'Expressions permeses';
$string['seb_expressionsallowed_help'] = 'Un camp de text que conté les expressions de filtratge permeses per als URL permesos. S\'hi pot utilitzar el caràcter comodí «\\*». Exemples d\'expressions: «exemple.com» o «exemple.com/dallonses/\\*». «exemple.com» coincideix amb «exemple.com», «www.exemple.com» i «www.mail.exemple.com». «exemple.com/dallonses/\\*» coincideix amb totes les sol·licituds a qualsevol subdomini d\'«exemple.com» que tingui «dallonses» com a primer segment de la ruta.';
$string['seb_expressionsblocked'] = 'Expressions blocades';
$string['seb_expressionsblocked_help'] = 'Un camp de text que conté les expressions de filtratge permeses per als URL blocats. S\'hi pot utilitzar el caràcter comodí «\\*». Exemples d\'expressions: «exemple.com» o «exemple.com/dallonses/\\*». «exemple.com» coincideix amb «exemple.com», «www.exemple.com» i «www.mail.exemple.com». «exemple.com/dallonses/\\*» coincideix amb totes les sol·licituds a qualsevol subdomini d\'«exemple.com» que tingui «dallonses» com a primer segment de la ruta.';
$string['seb_filterembeddedcontent'] = 'Filtra també el contingut incrustat';
$string['seb_filterembeddedcontent_help'] = 'Si s\'habilita, els recursos incrustats també es filtraran emprant-hi el conjunt de filtres.';
$string['seb_linkquitseb'] = 'Mostra el botó Surt del Navegador d\'examen segur, configurat amb aquest enllaç de sortida';
$string['seb_linkquitseb_help'] = 'En aquest camp podeu introduir l\'enllaç per sortir del Navegador d\'examen segur. S\'utilitzarà al botó «Surt del Navegador d\'examen segur» a la pàgina que apareix després que s\'hagi tramès l\'examen. Quan es cliqui al botó o l\'enllaç situat on vulgueu posar-lo, es podrà sortir del Navegador d\'examen segur sense haver-hi d\'introduir una contrasenya de sortida. Si no s\'introdueix cap enllaç, aleshores no apareix el botó «Surt del Navegador d\'examen segur» ni hi ha cap enllaç configurat per sortir del Navegador d\'examen segur.';
$string['seb_muteonstartup'] = 'En silenci al començament';
$string['seb_muteonstartup_help'] = 'Si s\'habilita, l\'àudio se silencia al principi quan s\'inicia el Navegador d\'examen segur.';
$string['seb_quitpassword'] = 'Contrasenya de sortida';
$string['seb_quitpassword_help'] = 'Aquesta contrasenya es demana quan els usuaris intenten sortir del Navegador d\'examen segur amb el botó «Surt», Ctrl-Q o el botó de tancament a la finestra principal del navegador. Si no s\'estableix cap contrasenya de sortida, aleshores el Navegador d\'examen segur només demana «Confirmeu que voleu sortir del Navegador d\'examen segur?';
$string['seb_regexallowed'] = 'Expressions regulars permeses';
$string['seb_regexallowed_help'] = 'Un camp de text que conté les expressions de filtratge per als URL permesos amb un format d\'expressió regular (Regex).';
$string['seb_regexblocked'] = 'Expressions regulars blocades';
$string['seb_regexblocked_help'] = 'Un camp de text que conté les expressions de filtratge per als URL blocats amb un format d\'expressió regular (Regex).';
$string['seb_requiresafeexambrowser'] = 'Requereix l\'ús del Navegador d\'examen segur';
$string['seb_requiresafeexambrowser_help'] = 'Si s\'habilita, els estudiants només podran intentar fer el qüestionari emprant el Navegador d\'examen segur.
Les opcions disponibles són les següents:

* No
<br/>El Navegador d\'examen segur no es requereix per intentar fer el qüestionari.
* Sí. Utilitza una plantilla existent
<br/>Es pot emprar una plantilla per configurar el Navegador d\'examen segur. Les plantilles es gestionen a l\'administració del lloc. La vostra configuració manual sobreescriu la configuració de la plantilla.
* Sí. Configura-ho de manera manual
<br/>No s\'hi empra cap plantilla per configurar el Navegador d\'examen segur. Podeu configurar el Navegador d\'examen segur de manera manual.
* Sí. Carrega la meva pròpia configuració
<br/>Podeu carregar el vostre propi fitxer de configuració del Navegador d\'examen segur. S\'hi desactivaran totes les configuracions manuals i l\'ús de plantilles.
* Sí. Utilitza la configuració de client del Navegador d\'examen segur
<br/>No hi ha cap configuració del Navegador d\'examen segur a Moodle. Es pot intentar fer el qüestionari amb qualsevol configuració del Navegador d\'examen segur.';
$string['seb_showkeyboardlayout'] = 'Mostra la disposició del teclat';
$string['seb_showkeyboardlayout_help'] = 'Si s\'habilita, la disposició del teclat actual es mostrarà a la barra de tasques del Navegador d\'examen segur. Aquesta opció us permet canviar a altres disposicions del teclat que s\'hagin habilitat al sistema operatiu.';
$string['seb_showreloadbutton'] = 'Mostra el botó d\'actualització de la pàgina';
$string['seb_showreloadbutton_help'] = 'Si s\'habilita, a la barra de tasques del Navegador d\'examen segur es mostra un botó d\'actualització de la pàgina que permet recarregar la pàgina web actual.';
$string['seb_showsebdownloadlink'] = 'Mostra el botó de descàrrega del Navegador d\'examen segur';
$string['seb_showsebdownloadlink_help'] = 'Si s\'activa, es mostrarà un botó de descàrrega del Navegador d\'examen segur a la pàgina d\'inici del qüestionari.';
$string['seb_showsebtaskbar'] = 'Mostra la barra de tasques del Navegador d\'examen segur';
$string['seb_showsebtaskbar_help'] = 'Si s\'habilita, apareix una barra de tasques a la part inferior de la finestra del Navegador d\'examen segur. La barra de tasques és necessària per mostrar elements com ara el control de la Wi-Fi, el botó d\'actualització de la pàgina, l\'hora i la distribució del teclat.';
$string['seb_showtime'] = 'Mostra l\'hora';
$string['seb_showtime_help'] = 'Si s\'habilita, l\'hora actual es mostra a la barra de tasques del Navegador d\'examen segur.';
$string['seb_showwificontrol'] = 'Mostra el control de la Wi-Fi';
$string['seb_showwificontrol_help'] = 'Si s\'habilita, apareixerà un botó de control de la Wi-Fi a la barra de tasques del Navegador d\'examen segur. Aquest botó permet que els usuaris es tornin a connectar a xarxes de Wi-Fi amb les quals s\'hagin connectat anteriorment.';
$string['seb_use_client'] = 'Sí. Utilitza la configuració de client del Navegador d\'examen segur';
$string['seb_use_manually'] = 'Sí. Configura-ho de manera manual';
$string['seb_use_template'] = 'Sí. Utilitza una plantilla existent';
$string['seb_use_upload'] = 'Sí. Carrega la meva pròpia configuració';
$string['seb_userconfirmquit'] = 'Demana a l\'usuari que confirmi que vol sortir';
$string['seb_userconfirmquit_help'] = 'Si s\'activa, quan es detecta un enllaç de sortida els usuaris han de confirmar que volen sortir del Navegador d\'examen segur.';
$string['sebdownloadbutton'] = 'Baixa el Navegador d\'examen segur';
$string['seblinkbutton'] = 'Executa el Navegador d\'examen segur';
$string['sebrequired'] = 'El qüestionari s\'ha configurat de tal manera que l\'estudiant només pot intentar respondre\'l fent servir el Navegador d\'examen segur.';
$string['settingsfrozen'] = 'A causa del fet que hi ha almenys un intent del qüestionari, la configuració del Navegador d\'examen segur ja no es pot actualitzar.';
