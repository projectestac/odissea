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
 * Strings for component 'enrol_imsenterprise', language 'ca', branch 'MOODLE_36_STABLE'
 *
 * @package   enrol_imsenterprise
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'Després de desar els paràmetres, potser voldreu';
$string['allowunenrol'] = 'Permet que les dades IMS <strong>cancel·lin les inscripcions</strong> d\'estudiants i/o professors';
$string['allowunenrol_desc'] = 'Si s\'habilita, la inscripció dels cursos s\'esborrarà quan s\'especifiqui a les dades del connector Enterprise.';
$string['basicsettings'] = 'Paràmetres bàsics';
$string['categoryidnumber'] = 'Permet codi (idnumber) de categoria';
$string['categoryidnumber_desc'] = 'Si s\'habilita, l\'IMS Enterprise crearà la categoria amb el codi (idnumber)';
$string['categoryseparator'] = 'Caràcter de separació de categoria';
$string['categoryseparator_desc'] = 'És preceptiu quan s\'habilita l\'opció';
$string['coursesettings'] = 'Opcions de les dades de cursos';
$string['createnewcategories'] = 'Crea noves categories de cursos (ocultes) si no existeixen a Moodle';
$string['createnewcategories_desc'] = 'Si l\'<org><orgunit>element és present a les dades inicials del curs, els seus continguts s\'utilitzaran per especificar una categoria si el curs s\'ha creat des de zero. El connector NO canviarà de categoria els cursos que ja existeixen.

Si no existeix cap categoria amb el nom desitjat, es crearà una categoria oculta.';
$string['createnewcourses'] = 'Crea nous cursos (ocults) si no existeixen a Moodle';
$string['createnewcourses_desc'] = 'Si s\'habilita, el connector d\'inscripció IMS Enterprise podrà crear cursos nous per a qualsevol que trobi a les dades IMS, però no en la base de dades de Moodle. Qualsevol curs nou creat estarà inicialment ocult.';
$string['createnewusers'] = 'Crea comptes d\'usuari per a usuaris no registrats a Moodle';
$string['createnewusers_desc'] = 'La inscripció de dades IMS Enterprise descriu de forma típica un conjunt d\'usuaris. Si està habilitada, es poden crear comptes d\'usuaris per a usuaris que no es troben a la base de dades de Moodle.

Els usuaris se cerquen primer pel «número ID» i després, pel nom d\'usuari de Moodle. Les contrasenyes no s\'importen amb el connector IMS Enterprise. Es recomana l\'ús d\'un connector d\'autenticació  per autenticar usuaris.';
$string['cronfrequency'] = 'Freqüència de processament';
$string['deleteusers'] = 'Suprimeix comptes d\'usuari quan ho especifiquin les dades IMS';
$string['deleteusers_desc'] = 'Si s\'habilita, les dades d\'inscripció IMS Enterprise poden especificar la supressió de comptes d\'usuari (si l\'indicador «recstatus» es configura a l\'estat 3, que representa la supressió d\'un compte d\'usuari). Com és estàndard a Moodle, les dades de l\'usuari no s\'esborren realment de la base de dades, però s\'establirà un indicador que marca el compte com a esborrat.';
$string['doitnow'] = 'executar ara una importació IMS Enterprise';
$string['emptyattribute'] = 'Deixa-ho buit';
$string['filelockedmail'] = 'El procés del cron no pot suprimir el fitxer que esteu utilitzant per a inscripcions basades en IMS Enterprise ({$a}). Generalment això vol dir que té permisos erronis. Arregleu els permisos de manera que Moodle pugui suprimir aquest fitxer, o en cas contrari podria processar-se repetidament.';
$string['filelockedmailsubject'] = 'Error important: fitxer d\'inscripcions';
$string['fixcasepersonalnames'] = 'Canvia a majúscules les inicials dels noms de persones';
$string['fixcaseusernames'] = 'Canvia a minúscules els noms d\'usuari';
$string['ignore'] = 'Ignora';
$string['importimsfile'] = 'Importa fitxer IMS Enterprise';
$string['imsenterprise:config'] = 'Configura les instàncies d\'inscripció IMS Enterprise';
$string['imsenterprisecrontask'] = 'Processament del fitxer d\'inscripcions';
$string['imsrolesdescription'] = 'L\'especificació IMS Enterprise inclou vuit tipus de rol distints. Trieu com voleu que s\'assignin a Moodle, i si preferiu ignorar-ne cap.';
$string['location'] = 'Ubicació del fitxer';
$string['logtolocation'] = 'Ubicació del fitxer de registre (en blanc si no voleu registre)';
$string['mailadmins'] = 'Notifica a l\'administrador per correu electrònic';
$string['mailusers'] = 'Notifica als usuaris per correu electrònic';
$string['messageprovider:imsenterprise_enrolment'] = 'Missatges d\'inscripcions mitjançant IMS Enterprise';
$string['miscsettings'] = 'Miscel·lània';
$string['nestedcategories'] = 'Permet categories niades';
$string['nestedcategories_desc'] = 'Si s\'habilita, l\'IMS Enterprise crearà categories niades';
$string['pluginname'] = 'Fitxer IMS Enterprise';
$string['pluginname_desc'] = 'Aquest mètode comprovarà de forma cíclica en un procés  un fitxer de text formatat en la localització que heu indicat. El fitxer seguirà les especificacions IMS Enterprise i contindrà  els elements XML  persona, grup i categoria.';
$string['processphoto'] = 'Afegeix la foto de l\'usuari al perfil';
$string['processphotowarning'] = 'Avís: el processament d\'imatges probablement afegirà una càrrega significativa al vostre servidor. Se us recomana no activar aquesta opció si espereu que es processi un gran nombre d\'estudiants.';
$string['restricttarget'] = 'Processa les dades només si s\'especifica l\'objectiu següent';
$string['restricttarget_desc'] = 'Un fitxer de dades IMS Enterprise pot preveure\'s per a diferents «objectius» —diferents entorns virtuals d\'aprenentatge, o diferents sistemes dins d\'un centre educatiu/universitat. És possible especificar al fitxer IMS Enterprise que les dades estiguin previstes per un o més sistemes amb nom posant aquest nom en etiquetes <target> contingudes dins de l\'etiqueta <properties>.

En general no heu de preocupar-vos d\'això. Deixeu el paràmetre en blanc i Moodle processarà sempre les dades del fitxer, tant si s\'especifica un <target> com si no. Altrament, poseu dins de l\'etiqueta <target> el nom exacte que s\'extraurà.';
$string['roles'] = 'Rols';
$string['settingfullname'] = 'Etiqueta de descripció IMS per al nom complet del curs';
$string['settingfullnamedescription'] = 'El nom complet és un camp obligatori del curs, així que heu de definir l\'etiqueta de descripció seleccionada en el fitxer IMS Enterprise';
$string['settingshortname'] = 'Etiqueta de descripció IMS per al nom curt del curs';
$string['settingshortnamedescription'] = 'El nom curt és un camp obligatori del curs, així que heu de definir l\'etiqueta de descripció seleccionada en el fitxer IMS Enterprise';
$string['settingsummary'] = 'Etiqueta de descripció IMS per al resum del curs';
$string['settingsummarydescription'] = 'És un camp opcional, seleccioneu «Deixa-ho buit» si no voleu especificar un resum del curs.';
$string['sourcedidfallback'] = 'Utilitza el "sourcedid" com a userid si el camp "userid" no hi és';
$string['sourcedidfallback_desc'] = 'A les dades IMS, el camp <sourcedid> representa la identificació persistent per a una persona utilitzada per la font del sistema. El camp <userid> és un camp separat que conté el codi d\'identificació utilitzat per l\'usuari quan inicia sessió al sistema. En molt casos aquests dos codis poden ser el mateix, però no sempre és així.

Alguns sistemes d\'informació d\'estudiants tenen errors en obtenir el camp <userid>. Si aquest és el cas, és recomanable que habiliteu aquest paràmetre per permetre utilitzar <sourcedid> com a identificació de l\'usuari a Moodle. En cas contrari, deixeu aquest paràmetre inhabilitat.';
$string['truncatecoursecodes'] = 'Trunca els codis de curs a aquesta longitud';
$string['truncatecoursecodes_desc'] = 'En algunes situacions podeu tenir codis de cursos que voleu truncar a una determinada longitud abans de processar-los. Si és aquest el cas, introduïu el nombre de caràcters en aquest quadre. En cas contrari, deixeu el quadre buit i no es truncarà res.';
$string['updatecourses'] = 'Actualitza el curs';
$string['updatecourses_desc'] = 'Si s\'habilita, el connector IMS Enterprise pot actualitzar els noms curt i complet del curs (si la bandera «recstatus» té el valor 2, la qual cosa significa una actualització).';
$string['updateusers'] = 'Actualitza els comptes dels usuaris quan s\'especifiqui a les dades IMS';
$string['updateusers_desc'] = 'Si s\'habilita, les dades d\'inscripció de l\'IMS Enterprise poden especificar canvis als comptes d\'usuari (si la bandera «recstatus» té el valor 2, la qual cosa significa una actualització).';
$string['usecapitafix'] = 'Activeu aquest quadre si esteu utilitzant "Capita" (el seu format XML és lleugerament erroni)';
$string['usecapitafix_desc'] = 'El sistema de dades de l\'estudiant produïdes per Capita ha trobat un error lleu en aquesta sortida XML. Si esteu utilitzant Capita hauríeu d\'habilitar aquest paràmetre; en cas contrari, deixeu-lo inhabilitat.';
$string['usersettings'] = 'Opcions de les dades d\'usuari';
$string['zeroisnotruncation'] = '0 indica no truncar';
