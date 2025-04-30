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
 * Strings for component 'tool_mobile', language 'ca', version '4.4'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'La depuració ADOdb està habilitada. Hauria d\'estar deshabilitada a la configuració del connector d\'autenticació de base de dades externa o del d\'inscripció des de base de dades externa.';
$string['androidappid'] = 'Identificador únic de l\'app d\'Android';
$string['androidappid_desc'] = 'Aquest paràmetre es pot deixar per defecte si no teniu una app d\'Android personalitzada.';
$string['apppolicy'] = 'URL de la política d\'aplicacions';
$string['autologinkeygenerationlockout'] = 'La generació de la clau per a l\'inici de sessió automàtic s\'ha blocat a causa de les múltiples peticions en una hora.';
$string['autologinnotallowedtoadmins'] = 'No es permet l\'inici de sessió automàtic en aquest lloc.';
$string['autologout'] = 'Apliqueu el tancament automàtic de sessió per als vostres usuaris';
$string['autologout_desc'] = 'Per raons de seguretat, podeu aplicar el tancament automàtic de la sessió dels vostres usuaris quan surten o tanquen l\'aplicació, o bé quan es posa en segon pla. Els usuaris hauran de tornar a iniciar sessió quan tornin a l\'aplicació.';
$string['autologoutcustom'] = 'Temps personalitzat després que els usuaris abandonin o tanquin l\'aplicació';
$string['autologoutinmediate'] = 'Immediatament després que els usuaris abandonin o tanquin l\'aplicació';
$string['autologouttime'] = 'Temporitzador de tancament automàtic';
$string['cachedef_plugininfo'] = 'Això emmagatzema la llista de connectors amb els complements mòbils.';
$string['cachedef_subscriptiondata'] = 'Això desa la informació de la subscripció a l\'aplicació Moodle';
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
$string['custommenuitems_desc'] = 'Es poden afegir elements addicionals al menú principal de l\'aplicació especificant-los aquí. Introduïu cada element de menú personalitzat en una línia nova amb el format: text de l\'element, URL de l\'enllaç, mètode d\'obertura d\'enllaç i codi d\'idioma (opcional, per mostrar l\'element només als usuaris de l\'idioma especificat), separats per caràcters de barra.

Els mètodes d\'obertura d\'enllaços són: app (per enllaçar a una activitat compatible amb l\'aplicació), inappbrowser (per obrir un enllaç en un navegador sense sortir de l\'aplicació), navegador (per obrir l\'enllaç al navegador predeterminat del dispositiu fora de l\'aplicació) i incrustat (per mostrar l\'enllaç en un iframe en una pàgina nova de l\'aplicació).

Quan els elements no disposen d\'una traducció per a un idioma determinat, faran servir altres idiomes com a alternativa tret que s\'afegeixi "_only" al codi d\'idioma.

Per exemple:
<pre>
Ajuda de l\'aplicació|https://someurl.xyz/help|inappbrowser
Les meves qualificacions|https://someurl.xyz/local/mygrades/index.php|embedded|ca
Mis calificaciones|https://someurl.xyz/local/mygrades/index.php|embedded|es
Només ho veureu en anglès|https://someurl.xyz/english|browser|en_only
</pre>';
$string['darkmode'] = 'Mode fosc';
$string['disabledfeatures'] = 'Les característiques s\'han inhabilitat';
$string['disabledfeatures_desc'] = 'Trieu aquí les característiques que voleu inhabilitar a l\'app Mobile per al vostre lloc. Fixeu-vos que algunes característiques enumerades aquí podrien estar ja inhabilitades a través d\'altres paràmetres del lloc. Haureu de tancar la sessió i iniciar-la una altra vegada a l\'app per a veure els canvis.';
$string['displayerrorswarning'] = 'La visualització dels missatges de depuració (debugdisplay) està habilitada. Hauria d\'estar desactivada.';
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
$string['launchviasiteinbrowser'] = 'Llança a través del lloc al navegador del sistema';
$string['loginintheapp'] = 'A través de l\'app';
$string['logininthebrowser'] = 'A través d\'una finestra del navegador (per als connectors SSO)';
$string['loginintheembeddedbrowser'] = 'A través d\'un navegador incrustat (per als connectors SSO)';
$string['logoutconfirmation'] = 'Esteu segur que voleu tancar la sessió de l\'aplicació mòbil als vostres dispositius mòbils? En tancar la sessió, haureu de tornar a introduir el vostre nom d\'usuari i contrasenya a l\'aplicació mòbil en tots els dispositius on tingueu l\'aplicació instal·lada.';
$string['mainmenu'] = 'Menú principal';
$string['managefiletypes'] = 'Gestiona els tipus de fitxers';
$string['minimumversion'] = 'Si s\'especifica una versió d\'aplicació (3.8.0 o superior), es demanarà a tots els usuaris que facin servir una versió anterior de l\'aplicació que actualitzin la seva aplicació abans de poder accedir al lloc.';
$string['minimumversion_key'] = 'Versió mínima requerida de l\'aplicació';
$string['mobileapp'] = 'Aplicació per a dispositius mòbils';
$string['mobileappearance'] = 'Aparença de Moodle Mobile';
$string['mobileappenabled'] = 'Aquest lloc té habilitat l\'accés amb l\'aplicació mòbil. <br /><a href="{$a}">Descarrega l\'aplicació per a dispositius mòbils</a>.';
$string['mobileappsubscription'] = 'Subscripció a l\'aplicació Moodle';
$string['mobileauthentication'] = 'Identificació de Moodle Mobile';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Característiques de Moodle Mobile';
$string['mobilenotificationsdisabledwarning'] = 'Les notificacions mòbils no estan habilitades. Haurien d\'estar habilitades a la configuració de les notificacions.';
$string['mobilesettings'] = 'Paràmetres de Moodle Mobile';
$string['moodleappsportalfeatureswarning'] = 'Tingueu en compte que algunes funcions poden estar restringides en funció de la vostra subscripció a l\'aplicació Moodle. Per obtenir més informació, visiteu el <a href="{$a}" target="_blank">Portal d\'aplicacions de Moodle</a>.';
$string['notifications'] = 'Notificacions';
$string['notificationsactivedevices'] = 'Dispositius actius';
$string['notificationscurrentactivedevices'] = 'Dispositius que reben notificacions aquest mes';
$string['notificationsignorednotifications'] = 'Notificacions no enviades';
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
