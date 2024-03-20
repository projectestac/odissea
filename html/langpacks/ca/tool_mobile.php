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
 * Strings for component 'tool_mobile', language 'ca', version '4.1'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['androidappid'] = 'Identificador únic de l\'app d\'Android';
$string['androidappid_desc'] = 'Aquest paràmetre es pot deixar per defecte si no teniu una app d\'Android personalitzada.';
$string['autologinkeygenerationlockout'] = 'La generació de la clau per a l\'inici de sessió automàtic s\'ha blocat a causa de les múltiples peticions en una hora.';
$string['autologinnotallowedtoadmins'] = 'No es permet l\'inici de sessió automàtic en aquest lloc.';
$string['cachedef_plugininfo'] = 'Això emmagatzema la llista de connectors amb els complements mòbils.';
$string['clickheretolaunchtheapp'] = 'Feu clic aquí si l\'app no s\'obre automàticament.';
$string['configmobilecssurl'] = 'Un fitxer CSS per a personalitzar la vostra interfície d\'aplicacions mòbils.';
$string['customlangstrings'] = 'Cadenes d\'idioma personalitzades';
$string['customlangstrings_desc'] = 'Les paraules i frases que es mostren a l\'app es poden personalitzar des d\'aquí. Introduïu cada cadena d\'idioma personalitzada en una línia nova amb format: identificador de cadena, cadena d\'idioma personalitzada i codi d\'idioma, separats per barres verticals. P. ex.:
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
Per a una llista completa d\'identificadors de cadenes, vegeu la documentació.';
$string['custommenuitems'] = 'Elements de menú personalitzats';
$string['custommenuitems_desc'] = 'Es poden afegir elements addicionals al menú principal de l\'app especificant-los aquí. Introduïu cada element del menú personalitzat en una línia nova amb el format: text de l\'element, enllaç URL, mètode d\'apertura de l\'enllaç (inappbrowser, navegador web o incrustat), separats per barres verticals (pleques). P. ex.
<pre>
App\'s help | https://someurl.xyz/help | inappbrowser | en
Visit our SIS | https://someurl.xyz | browser | en
My grades | https://someurl.xyz/local/mygrades/index.php | embedded | en
Mis calificaciones | https://someurl.xyz/local/mygrades/index.php | embedded | es
</pre>
Utilitzeu <em>inappbrowser</em> quan vulgueu obrir l\'enllaç en un navegador sense abandonar l\'app; utilitzeu <em>navegador</em> per obrir l\'enllaç en el navegador web per defecte del dispositiu, i <em>incrustat</em> si voleu mostrar l\'enllaç incrustat en una pàgina nova a l\'app.';
$string['disabledfeatures'] = 'Les característiques s\'han inhabilitat';
$string['disabledfeatures_desc'] = 'Trieu aquí les característiques que voleu inhabilitar a l\'app Mobile per al vostre lloc. Fixeu-vos que algunes característiques enumerades aquí podrien estar ja inhabilitades a través d\'altres paràmetres del lloc. Haureu de tancar la sessió i iniciar-la una altra vegada a l\'app per a veure els canvis.';
$string['downloadcourse'] = 'Descarrega el curs';
$string['downloadcourses'] = 'Descarrega els cursos';
$string['enablesmartappbanners'] = 'Habilita els bàners de l\'app';
$string['enablesmartappbanners_desc'] = 'Això mostrarà un bàner que promocioni l\'app Moodle Mobile quan es visiti el lloc en un navegador mòbil.';
$string['forcedurlscheme'] = 'Si voleu permetre que només l\'app personalitzada amb la vostra marca s\'obri a través d\'una finestra del navegador, especifiqueu l\'esquema de l\'URL aquí; altrament, deixeu el camp buit.';
$string['forcedurlscheme_key'] = 'Esquema de l\'URL';
$string['forcelogout'] = 'Força la sortida';
$string['forcelogout_desc'] = 'Si s\'habilita, l\'opció de l\'app «Canvia el lloc» es reemplaça per «Tanca sessió». Hauran de tornar a introduir la contrasenya la propera vegada que vulguen accedir al lloc.';
$string['getmoodleonyourmobile'] = 'Instal·leu l’aplicació mòbil';
$string['httpsrequired'] = 'Cal HTTPS';
$string['invalidprivatetoken'] = 'El testimoni (<em>token</em>) privat no és vàlid. El testimoni no hauria d\'estar buit o haver passat a través del paràmetre GET.';
$string['iosappid'] = 'Identificador únic de l\'app d\'IOS';
$string['iosappid_desc'] = 'Aquest paràmetre es pot deixar per defecte si no teniu una app IOS personalitzada.';
$string['loginintheapp'] = 'A través de l\'app';
$string['logininthebrowser'] = 'A través d\'una finestra del navegador (per als connectors SSO)';
$string['loginintheembeddedbrowser'] = 'A través d\'un navegador incrustat (per als connectors SSO)';
$string['mainmenu'] = 'Menú principal';
$string['mobileapp'] = 'Aplicació per a dispositius mòbils';
$string['mobileappconnected'] = 'Aplicació mòbil connectada';
$string['mobileappearance'] = 'Aparença de Moodle Mobile';
$string['mobileappenabled'] = 'Aquest lloc té habilitat l\'accés amb l\'aplicació mòbil. <br /><a href="{$a}">Descarrega l\'aplicació per a dispositius mòbils</a>.';
$string['mobileauthentication'] = 'Identificació de Moodle Mobile';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Característiques de Moodle Mobile';
$string['mobilesettings'] = 'Paràmetres de Moodle Mobile';
$string['pluginname'] = 'Eines de Moodle Mobile';
$string['pluginnotenabledorconfigured'] = 'El connector no està habilitat o configurat.';
$string['qrcodedisabled'] = 'L\'accés mitjançant codi QR està inhabilitat';
$string['qrcodeformobileappaccess'] = 'Codi QR per a accedir amb l\'aplicació mòbil';
$string['qrcodeformobileapploginabout'] = 'Escaneja el codi QR amb l\'aplicació mòbil i s\'iniciarà sessió automàticament amb el teu usuari. El codi QR caducarà en {$a} minuts.';
$string['qrcodeformobileappurlabout'] = 'Escanegeu el codi QR amb la vostra aplicació mòbil per emplenar l\'URL del lloc a la vostra aplicació.';
$string['qrcodetype'] = 'Accés amb codi QR';
$string['qrcodetype_desc'] = 'Es pot proporcionar un codi QR per a què els usuaris d’aplicacions mòbils puguin escanejar-lo. Es pot utilitzar per emplenar l\'URL del lloc, o bé on el lloc està protegit mitjançant HTTPS, per tal d\'iniciar la sessió de l\'usuari automàticament sense haver d\'introduir el seu nom d\'usuari i contrasenya.';
$string['qrcodetypelogin'] = 'Codi QR amb inici de sessió automàtic';
$string['qrcodetypeurl'] = 'Codi QR amb l\'URL del lloc';
$string['qrsiteadminsnotallowed'] = 'Per motius de seguretat, no es permet iniciar la sessió mitjançant codi QR als administradors del lloc, o si ja heu iniciat la sessió amb un altre usuari.';
$string['remoteaddons'] = 'Complements remots';
$string['scanqrcode'] = 'Escaneja el codi QR';
$string['smartappbanners'] = 'Bàners de l\'app';
$string['subscriptionerrorrequest'] = 'S\'ha produït un error en provar de recuperar la vostra informació de subscripció de l\'app de Moodle.';
$string['typeoflogin'] = 'Tipus d\'inici de sessió';
$string['typeoflogin_desc'] = 'Si el lloc utilitza un mètode d\'identificació SSO, trieu a través d\'una finestra del navegador o d\'un navegador incrustat. Un navegador incrustat proporciona una millor experiència d\'usuari, tot i que no funciona amb tots els connectors SSO. Si utilitzeu SSO, l\'inici de sessió de visitants hauria d\'estar inhabilitat.';
$string['viewqrcode'] = 'Mostra\'m el codi QR';
