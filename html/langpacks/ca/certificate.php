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
 * Strings for component 'certificate', language 'ca', version '4.4'.
 *
 * @package     certificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlinklabel'] = 'Afegeix una altra opció d\'activitat vinculada';
$string['addlinktitle'] = 'Feu clic per afegir una altra opció d\'activitat vinculada';
$string['areaintro'] = 'Introducció del Certificat';
$string['awarded'] = 'Concedit';
$string['awardedto'] = 'Concedit a';
$string['back'] = 'Tornar';
$string['border'] = 'Vora';
$string['borderblack'] = 'Negre';
$string['borderblue'] = 'Blau';
$string['borderbrown'] = 'Marró';
$string['bordercolor'] = 'Línies de vora';
$string['bordercolor_help'] = 'Atès que les imatges poden fer augmentar considerablement la mida del fitxer PDF, podeu optar per imprimir una vora de línies en lloc d\'utilitzar una imatge de vora (assegureu-vos que l\'opció Imatge de vora s\'estableix en No). L\'opció Línies de vora imprimirà una bonica vora de tres línies de diferents amples en el color escollit.';
$string['bordergreen'] = 'Verd';
$string['borderlines'] = 'Línies';
$string['borderstyle'] = 'Imatge de vora';
$string['borderstyle_help'] = 'L\'opció d\'imatge de vora us permet triar una imatge de vora de la carpeta certificate/pix/borders. Seleccioneu la imatge de vora que voleu a les vores del certificat o seleccioneu sense vora.';
$string['certificate'] = 'Verificació de codi de certificat:';
$string['certificate:addinstance'] = 'Afegir una instància de certificat';
$string['certificate:manage'] = 'Gestiona una instància de certificat';
$string['certificate:printteacher'] = 'Aparèixer com a professor en el certificat si l\'opció «imprimir professor» es troba activada';
$string['certificate:student'] = 'Recupera un certificat';
$string['certificate:view'] = 'Veure un certificat';
$string['certificatename'] = 'Nom del certificat';
$string['certificatereport'] = 'Informe de certificats';
$string['certificatesfor'] = 'Certificats per';
$string['certificatetype'] = 'Tipus de certificat';
$string['certificatetype_help'] = 'Aquí és on es determina la disposició del certificat. La carpeta tipus de certificat inclou quatre certificats per defecte:
«A4 Embedded» imprimeix en paper de mida A4 amb fonts incrustades.
A4 Non-Embedded» Imprimeix en paper de mida A4 sense fonts incrustades.
«Letter Embedded» imprimeix en paper de mida carta amb fonts incrustades.
«Letter Non-Embedded» imprimeix en paper mida carta sense fonts incrustades.

Els tipus «sense fonts incrustades» utilitzen les fonts Helvetica i Times. Si creieu que els vostres usuaris no tindran aquestes fonts en el seu equip o si el seu vostre utilitza caràcters o símbols que no estan inclosos a les fonts Helvetica i Times, aleshores escolliu un tipus amb fonts incrustades. Aquests darrers utilitzen les fonts DejaVuSans i DejaVuSerif. Això farà que l\'arxiu pdf sigui bastant més gran; per aquest motiu no es recomana l\'ús d\'un tipus incrustat llevat que que sigui realment necessari.

Es poden afegir noves carpetes amb tipus a la carpeta certificate/type. El nom de la carpeta i les noves cadenes d\'idioma per al nou tipus s\'han d\'agregar a l\'arxiu d\'idioma del certificat.';
$string['certify'] = 'Aquest document certifica que';
$string['code'] = 'Codi';
$string['completiondate'] = 'Compleció del curs';
$string['course'] = 'Per';
$string['coursegrade'] = 'Qualificació del curs';
$string['coursename'] = 'Curs';
$string['coursetimereq'] = 'Minuts obligatoris en el curs';
$string['coursetimereq_help'] = 'Introduïu aquí la quantitat mínima de temps, en minuts, que l\'estudiant ha d\'estar inscrit al curs abans que pugui rebre el certificat.';
$string['credithours'] = 'Hores de crèdit';
$string['customtext'] = 'Text personalitzat';
$string['customtext_help'] = 'Si voleu que el certificat imprimeixi diferents noms per al professor que els que tenen assignats en el rol de professor, no seleccioneu l\'opció «Imprimir Professor» ni cap imatge de signatura excepte l\'opció «línia».  Escriviu els noms dels professors en aquest quadre de text tal com voleu que apareguin.  Per defecte, aquest text es col·loca en la part inferior esquerra del certificat. Les següents etiquetes HTML estan disponibles: <br>, <p>, <b>, <i>, <u>, <img> (els paràmetres «src» i «width» (o «height») són obligatoris), <a> (href és obligatori), <font> (alguns possibles atributs són: color, (hex color code), face, (arial, times, courier, helvetica, symbol)).';
$string['date'] = 'El';
$string['datefmt'] = 'Format de data';
$string['datefmt_help'] = 'Trieu un format de data per imprimir la data en el certificat. O bé, seleccioneu l\'última opció per tenir la data impresa en el format de l\'idioma escollit per l\'usuari.';
$string['datehelp'] = 'Data';
$string['deletissuedcertificates'] = 'Elimina els certificats emesos';
$string['delivery'] = 'Lliurament';
$string['delivery_help'] = 'Trieu aquí com us agradaria que els vostres estudiants obtinguessin el seu certificat.
Obrir en navegador: Obre el certificat en una nova finestra del navegador.
Forçar la descàrrega: Obre la finestra de descàrrega d\'arxius del navegador.
Per correu electrònic: En triar aquesta opció s\'enviarà el certificat a l\'estudiant com un arxiu adjunt a un correu electrònic..
Quan un usuari rep el certificat, si fan clic a l\'enllaç del certificat de la pàgina principal del curs, veurà la data en què va rebre el seu certificat i podrà revisar el certificat que ha rebut.';
$string['designoptions'] = 'Opcions de disseny';
$string['download'] = 'Força la descàrrega';
$string['emailcertificate'] = 'Correu electrònic';
$string['emailothers'] = 'Envia correu-e a tercers';
$string['emailothers_help'] = 'Introduïu les adreces de correu electrònic aquí, separades per una coma, dels qui han de ser avisats amb un correu electrònic cada vegada que els estudiants reben un certificat.';
$string['emailstudenttext'] = 'Trobareu adjunt el vostre certificat de {$a->course}.';
$string['emailteachermail'] = '{$a->student} ha rebut el seu certificat: «{$a->certificate}»
de {$a->course}.

Podeu revisar-lo aquí:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->student} ha rebut el seu certificat: «<i>{$a->certificate}</i>»
per a {$a->course}.

Podeu revisar-lo aquí:

    <a href="{$a->url}">Informe de Certificat</a>.';
$string['emailteachers'] = 'Envia correu-e als professors';
$string['emailteachers_help'] = 'Si està habilitat, llavors els professors són alertats amb un correu electrònic cada vegada que els estudiants reben un certificat.';
$string['entercode'] = 'Introdueix el codi de certificat per verificar:';
$string['fontsans'] = 'Família de tipus de lletra Sans-serif';
$string['fontsans_desc'] = 'Família de tipus de lletra Sans-serif per als certificats amb fonts incrustades';
$string['fontserif'] = 'Família de tipus de lletra Serif';
$string['fontserif_desc'] = 'Família de tipus de lletra Serif per als certificats amb fonts incrustades';
$string['getcertificate'] = 'Descarregueu el vostre certificat';
$string['grade'] = 'Qualificació';
$string['gradedate'] = 'Data de la qualificació';
$string['gradefmt'] = 'Format de la qualificació';
$string['gradefmt_help'] = 'Hi ha tres formats disponibles si decidiu imprimir la qualificació en el certificat:

Qualificació en percentatge: Imprimeix la qualificació com un percentatge.
Qualificació en punts: Imprimeix el valor en punts de la qualificació.
Qualificació en text: Imprimeix el percentatge de la qualificació com una lletra.';
$string['gradeletter'] = 'Qualificació en text';
$string['gradepercent'] = 'Qualificació en percentatge';
$string['gradepoints'] = 'Qualificació en punts';
$string['imagetype'] = 'Tipus d\'imatge';
$string['incompletemessage'] = 'Per descarregar el vostre certificat, heu de completar primer totes les activitats requerides. Si us plau torneu al curs per completar les feines del curs.';
$string['intro'] = 'Introducció';
$string['issued'] = 'Emès';
$string['issueddate'] = 'Data d\'emissió';
$string['issueoptions'] = 'Opccions d\'emissió';
$string['landscape'] = 'Apaïsat';
$string['lastviewed'] = 'Vau rebre aquest certificat per darrera vegada el:';
$string['letter'] = 'Carta';
$string['lockingoptions'] = 'Opcions de bloqueig';
$string['modulename'] = 'Certificat';
$string['modulename_link'] = 'Certificate_module';
$string['modulenameplural'] = 'Certificats';
$string['mycertificates'] = 'Els meus certificats';
$string['nocertificates'] = 'No hi ha certificats';
$string['nocertificatesissued'] = 'No hi ha certificats que s\'hagin emès';
$string['nocertificatesreceived'] = 'no s\'ha rebut cap certificat del curs.';
$string['nofileselected'] = 'Heu de triar un arxiu per carregar!';
$string['nogrades'] = 'No hi ha qualificacions disponibles';
$string['notapplicable'] = 'N/D';
$string['notfound'] = 'El número del certificat podria no estar validat.';
$string['notissued'] = 'No s\'ha emès';
$string['notissuedyet'] = 'No emès encara';
$string['notreceived'] = 'No heu rebut aquest certificat';
$string['openbrowser'] = 'Obrir en una finestra nova';
$string['opendownload'] = 'Feu clic al botó de sota per guardar el certificat en l\'equip.';
$string['openemail'] = 'Feu clic al botó de baix i el certificat us serà enviat com un arxiu adjunt de correu electrònic.';
$string['openwindow'] = 'Feu clic al botó de sota per obrir el certificat en una nova finestra del navegador.';
$string['or'] = 'O';
$string['orientation'] = 'Orientació';
$string['orientation_help'] = 'Seleccioneu si voleu que l\'orientació del certificat sigui vertical o apaïsat.';
$string['pluginadministration'] = 'Administració dels certificats';
$string['pluginname'] = 'Certificat';
$string['portrait'] = 'Vertical';
$string['printdate'] = 'Imprimeix la data';
$string['printdate_help'] = 'Aquesta és la data que serà impresa, si es selecciona una data d\'impressió. Si es selecciona la data de la finalització del curs, però l\'estudiant no ha completat el curs, s\'imprimirà la data de recepció. També podeu optar per imprimir la data en funció de quan es va qualificar una activitat. Si un certificat s\'emet abans que l\'activitat s\'hagi qualificat, la data de recepció serà impresa.';
$string['printerfriendly'] = 'Pàgina per imprimir';
$string['printgrade'] = 'Imprimeix la qualificació';
$string['printgrade_help'] = 'Podeu triar qualsevol element de qualificació disponible del llibre de qualificacions per imprimir en el certificat la qualificació obtinguda per l\'usuari en aquest element.  Els elements de qualificació s\'enumeren en l\'ordre en què apareixen en el llibre de qualificacions. Escolliu al dessota el format de la qualificació.';
$string['printhours'] = 'Imprimeix les hores de crèdit';
$string['printhours_help'] = 'Introduïu aquí el nombre d\'hores de crèdit que s\'imprimirà en el certificat.';
$string['printnumber'] = 'Imprimeix un codi';
$string['printnumber_help'] = 'Es pot imprimir al certificat un codi únic de 10 dígits de lletres i números aleatoris. Aquest número pot ser verificat per comparació amb el número de codi que apareix a l\'informe dels certificats.';
$string['printoutcome'] = 'Imprimeix una competència';
$string['printoutcome_help'] = 'Podeu triar qualsevol competència per imprimir-ne el nom del resultat i el resultat rebut per l\'usuari en el certificat. Un exemple podria ser: «Aprenentatge autònom: B»';
$string['printseal'] = 'Imatge del segell o logotip';
$string['printseal_help'] = 'Aquesta opció us permet seleccionar un segell o logotip per imprimir en el certificat de la carpeta certificate/pix/seals. Per defecte, aquesta imatge es col·loca en la cantonada inferior dreta del certificat.';
$string['printsignature'] = 'Imatge de la signatura';
$string['printsignature_help'] = 'Aquesta opció us permet imprimir una imatge de la signatura de la carpeta certificate/pix/signatures.  Podeu imprimir una representació gràfica d\'una signatura, o imprimir una línia per a una signatura manuscrita. Per defecte, aquesta imatge es col·loca en la part inferior esquerra del certificat.';
$string['printteacher'] = 'Imprimeix el nom del(s) professor(s)';
$string['printteacher_help'] = 'Per imprimir el nom del professor en el certificat, establiu el rol del professor en el nivell del mòdul. Feu això si, per exemple, teniu més d\'un professor per al curs o si teniu més d\'un certificat en el curs i voleu imprimir diferents noms de professors a cada certificat. Feu clic per editar el certificat, feu clic a la pestanya de rols assignats localment. A continuació, assigneu el rol del professor (professor editor) per al certificat (que NO CAL que sigui professor del curs - es pot assignar aquesta funció a qualsevol). Aquests noms s\'imprimiran en el certificat per al professor.';
$string['printwmark'] = 'Imatge de marca d\'aigua';
$string['printwmark_help'] = 'Un arxiu de marca d\'aigua es pot col·locar com a imatge de fons en el certificat. Una marca d\'aigua és un gràfic atenuat. Una marca d\'aigua podria ser un logotip, segell, cresta, text, o el que vulgueu utilitzar com un fons gràfic.';
$string['receivedcerts'] = 'Certificats rebuts';
$string['receiveddate'] = 'Data de recepció';
$string['removecert'] = 'Certificats emesos eliminats';
$string['report'] = 'Informe';
$string['reportcert'] = 'Informa dels certificats';
$string['reportcert_help'] = 'Si escolliu sí, aleshores la data de recepció d\'aquest certificat, número de codi, i el nom del curs apareixeran en els informes del certificat d\'usuari. Si decidiu imprimir una qualificació en aquest certificat, llavors aquesta qualificació també es mostrarà en l\'informe certificat';
$string['requiredtimenotmet'] = 'Heu de passar almenys un mínim de {$a->requiredtime} minuts en el curs abans de poder accedir a aquest certificat';
$string['requiredtimenotvalid'] = 'El temps que es requereix ha de ser un número vàlid més gran que 0';
$string['reviewcertificate'] = 'Comproveu el vostre certificat';
$string['savecert'] = 'Desa els certificats';
$string['savecert_help'] = 'Si trieu aquesta opció, aleshores es guardarà una còpia del fitxer pdf del certificat de cada usuari en l\'espai de fitxers del certificat. En l\'informe dels certificats es mostrarà un enllaç a cada certificat d\'usuari guardat.';
$string['seal'] = 'Segell';
$string['sigline'] = 'línia';
$string['signature'] = 'Signatura';
$string['statement'] = 'ha completat el curs';
$string['summaryofattempts'] = 'Resum dels certificats rebuts prèviament';
$string['textoptions'] = 'Opcions de text';
$string['title'] = 'CERTIFICAT D\'ASSOLIMENT';
$string['to'] = 'Es concedeix a';
$string['typeA4_embedded'] = 'A4 incrustades';
$string['typeA4_non_embedded'] = 'A4 No-incrustades';
$string['typeletter_embedded'] = 'Carta incrustades';
$string['typeletter_non_embedded'] = 'Carta No-incrustades';
$string['unsupportedfiletype'] = 'El fitxer ha de ser un fitxer jpeg o png';
$string['uploadimage'] = 'Puja una imatge';
$string['uploadimagedesc'] = 'Aquest botó us portarà a una nova pantalla des d\'on podreu pujar imatges.';
$string['userdateformat'] = 'Format de la data en l\'idioma de l\'usuari';
$string['validate'] = 'Verifica';
$string['verifycertificate'] = 'Verifica un certificat';
$string['viewcertificateviews'] = 'Veure {$a} certificats emesos';
$string['viewed'] = 'Heu rebut aquest certificat el:';
$string['viewtranscript'] = 'Veure els certificats';
$string['watermark'] = 'Marca d\'aigua';
