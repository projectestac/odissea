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
 * Strings for component 'repository', language 'ca', branch 'MOODLE_38_STABLE'
 *
 * @package   repository
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'Selector de fitxers accessible';
$string['activaterep'] = 'Repositoris actius';
$string['activerepository'] = 'Connectors de repositori disponibles';
$string['activitybackup'] = 'Còpia de seguretat d\'activitat';
$string['add'] = 'Afegeix';
$string['addfile'] = 'Afegeix...';
$string['addfiletext'] = 'Afegeix un fitxer';
$string['addplugin'] = 'Afegeix un connector de repositori';
$string['allowexternallinks'] = 'Permet enllaços externs';
$string['areacategoryintro'] = 'Introducció a la categoria';
$string['areacourseintro'] = 'Introducció al curs';
$string['areacourseoverviewfiles'] = 'Imatge del curs';
$string['areamainfile'] = 'Fitxer principal';
$string['arearoot'] = 'Sistema';
$string['areauserbackup'] = 'Còpia de seguretat de l\'usuari';
$string['areauserdraft'] = 'Esborrany';
$string['areauserpersonal'] = 'Fitxers privats';
$string['areauserprofile'] = 'Perfil';
$string['attachedfiles'] = 'Fitxers adjunts';
$string['attachment'] = 'Adjunció';
$string['author'] = 'Autor';
$string['automatedbackup'] = 'Còpies de seguretat automatitzades';
$string['back'] = 'Enrere';
$string['backtodraftfiles'] = 'Torna al gestor d\'esborranys';
$string['cachecleared'] = 'Els fitxers en memòria cau s\'han eliminat';
$string['cacheexpire'] = 'Venciment de la memòria cau';
$string['cannotaccessparentwin'] = 'Quan s\'empra HTTPS, el repositori no es refresca automàticament. En lloc d\'això, cal que torneu enrere cap al selector de fitxers i seleccioneu el repositori de bell nou.';
$string['cannotdelete'] = 'No es pot esborrar aquest fitxer.';
$string['cannotdownload'] = 'No es pot baixar aquest fitxer';
$string['cannotdownloaddir'] = 'No es pot baixar aquesta carpeta';
$string['cannotinitplugin'] = 'Crida a plugin_init fallada';
$string['cannotunzipcontentunreadable'] = 'No s\'ha pogut descomprimir aquest arxiu atès que no se\'n pot llegir el contingut.';
$string['cannotunzipquotaexceeded'] = 'No s\'ha pogut descomprimir aquest arxiu atès que s\'ultrapassaria la capacitat màxima permesa en aquesta àrea d\'esborranys.';
$string['choosealink'] = 'Escull un enllaç...';
$string['chooselicense'] = 'Tria una llicència';
$string['cleancache'] = 'Esborra els fitxers de la memòria cau';
$string['close'] = 'Tanca';
$string['commonrepositorysettings'] = 'Paràmetres comuns dels repositoris';
$string['configallowexternallinks'] = 'Aquesta opció permet als usuaris triar si les memòries  externes es copien a Moodle o no. Si està desactivat llavors les memòries externes sempre es copiaran a Moodle (això és el millor per a la integritat de dades en general i la seguretat). Si aquesta opció està habilitada l\'usuari podrà triar cada vegada que s\'afegeix un medi si s\'importa el text.';
$string['configcacheexpire'] = 'Temps (en segons) que es mantenen a la memòria cau les llistes de fitxers quan s\'exploren repositoris externs.';
$string['configgetfiletimeout'] = 'Temps d\'espera en segons per baixar un fitxer extern en el Moodle.';
$string['configsaved'] = 'Configuració desada!';
$string['configsyncfiletimeout'] = 'Temps d\'espera en segons per a sincronitzar la mida del fitxer extern.';
$string['configsyncimagetimeout'] = 'Temps d\'espera en segons per a baixar el fitxer d\'imatge des d\'un repositori extern durant la sincronització.';
$string['confirmdelete'] = 'Confirmeu que voleu suprimir aquest repositori: {$a}? Si trieu «Continua i descarrega», les referències del fitxer a continguts externs es descarregaran a Moodle, però podria ser molt llarg de processar.';
$string['confirmdeletefile'] = 'Esteu segur que voleu suprimir el fitxer?';
$string['confirmdeletefilewithhref'] = 'Confirmeu que voleu suprimir el fitxer? Hi ha {$a} àlies o accessos directes de fitxer que utilitzen aquest fitxer com a font. Si procediu a fer-ho, aquests àlies es convertiran en còpies autèntiques.';
$string['confirmdeletefolder'] = 'Esteu segur que voleu suprimir la carpeta? Es suprimiran tots els fitxers i les subcarpetes.';
$string['confirmremove'] = 'Confirmeu que voleu suprimir aquest connector de repositori, les seves opcions i <strong>totes les seves instàncies</strong>: {$a}? Si trieu «Continua i descarrega», les referències del fitxer a continguts externs es descarregaran a Moodle, però podria ser molt llarg de processar.';
$string['confirmrenamefile'] = 'Confirmeu que voleu moure el fitxer o canviar-li el nom? Hi ha {$a} àlies o accessos directes de fitxer que utilitzen aquest fitxer com a font. Si procediu a fer-ho, aquests àlies es convertiran en còpies autèntiques.';
$string['confirmrenamefolder'] = 'Confirmeu que voleu moure la carpeta o canviar-li el nom? Qualsevol àlies o accés directe de fitxers que faci referència a fitxers d\'aquesta carpeta es convertiran en còpies autèntiques.';
$string['continueuninstall'] = 'Continua';
$string['continueuninstallanddownload'] = 'Continua i descarrega';
$string['copying'] = 'S\'està copiant';
$string['coursebackup'] = 'Còpies de seguretat de cursos';
$string['create'] = 'Crea';
$string['createfolder'] = 'Crea una carpeta';
$string['createfolderfail'] = 'Error en crear aquesta carpeta';
$string['createfoldersuccess'] = 'S\'ha creat la carpeta amb èxit';
$string['createinstance'] = 'Crea una instància de repositori';
$string['createrepository'] = 'Crea la instància del repositori';
$string['createxxinstance'] = 'Crea una instància del tipus "{$a}"';
$string['date'] = 'Data';
$string['datecreated'] = 'Creat';
$string['deleted'] = 'S\'ha esborrat el repositori';
$string['deleterepository'] = 'Suprimeix aquest repositori';
$string['detailview'] = 'Visualitza els detalls';
$string['dimensions'] = 'Dimensions';
$string['disabled'] = 'Inhabilitat';
$string['displayasdetails'] = 'Mostra com a detalls del fitxer';
$string['displayasicons'] = 'Mostra com a icones del fitxer';
$string['displayastree'] = 'Mostra com a arbre del fitxer';
$string['displaydetails'] = 'Mostra la carpeta amb el detalls dels fitxers';
$string['displayicons'] = 'Mostra la carpeta amb les icones del fitxers';
$string['displaytree'] = 'Mostra la carpeta amb l\'arbre dels fitxers';
$string['download'] = 'Descarrega';
$string['downloadallfiles'] = 'Descarrega tots els fitxers';
$string['downloadfolder'] = 'Descarrega-ho tot';
$string['downloadsucc'] = 'El fitxer ha estat baixat amb èxit';
$string['draftareanofiles'] = 'No es pot baixar perquè no s\'ha adjuntat cap fitxer';
$string['editrepositoryinstance'] = 'Edita la instància del repositori';
$string['emptylist'] = 'Llista buida';
$string['emptytype'] = 'No es pot crear el tipus de repositori: el nom del tipus està buit';
$string['enablecourseinstances'] = 'Permet als usuaris afegir una instància del repositori al curs';
$string['enableuserinstances'] = 'Permet als usuaris afegir una instància del repositori en el context de l\'usuari';
$string['enter'] = 'Introdueix';
$string['entername'] = 'Introduïu el nom de la carpeta';
$string['enternewname'] = 'Introduïu el nom del fitxer nou';
$string['error'] = 'Ha succeït un error desconegut!';
$string['errordoublereference'] = 'No es pot sobreescriure el fitxer amb una drecera/àlies perquè ja existeixen dreceres a aquest fitxer.';
$string['errornotyourfile'] = 'No podeu triar un fitxer que no heu afegit.';
$string['errorpostmaxsize'] = 'El fitxer que heu provat de pujar és massa gros per ser processat pel servidor.';
$string['erroruniquename'] = 'El nom de la instància del repositori cal que sigui únic';
$string['errorwhilecommunicatingwith'] = 'S\'ha produït un error durant la comunicació amb el repositori \'{$a}\'.';
$string['errorwhiledownload'] = 'S\'ha produït un error tot baixant el fitxer {$a}';
$string['existingrepository'] = 'Aquest repositori ja existeix';
$string['federatedsearch'] = 'Cerca federada';
$string['fileexists'] = 'El nom ja està sent utilitzat, utilitzeu un altre nom';
$string['fileexistsdialog_editor'] = 'Ja s\'ha adjuntat un fitxer amb aquest nom al text que esteu editant';
$string['fileexistsdialog_filemanager'] = 'Ja s\'ha adjuntat un fitxer amb aquest nom';
$string['fileexistsdialogheader'] = 'El fitxer existeix';
$string['filename'] = 'Nom de fitxer';
$string['filenotnull'] = 'Cal que seleccioneu un fitxer per carregar';
$string['filepicker'] = 'Selector de fitxers';
$string['filesaved'] = 'El fitxer s\'ha desat';
$string['filesizenull'] = 'No es pot determinar la dimensió del fitxer';
$string['folderexists'] = 'El nom de la carpeta ja s\'està utilitzant, utilitzeu un altre nom';
$string['foldernotfound'] = 'No s\'ha trobat la carpeta';
$string['folderrecurse'] = 'La carpeta no es pot moure a la seva pròpia subcarpeta';
$string['getfile'] = 'Seleccioneu aquest fitxer';
$string['getfiletimeout'] = 'Temps d\'espera per a obtenir el fitxer';
$string['help'] = 'Ajuda';
$string['iconview'] = 'Mostra com a icones';
$string['imagesize'] = '{$a->width} x {$a->height} px';
$string['instance'] = 'instància';
$string['instancedeleted'] = 'Instància suprimida';
$string['instances'] = 'Instàncies del repositori';
$string['instancesforcourses'] = 'Instàncie(s) comunes de curs {$a}';
$string['instancesforsite'] = 'Instàncie(s) comunes de lloc {$a}';
$string['instancesforusers'] = 'Instàncie(s) privades d\'usuari {$a}';
$string['invalidfiletype'] = 'El tipus de fitxer {$a} no pot ser acceptat';
$string['invalidjson'] = 'Cadena JSON invàlida';
$string['invalidparams'] = 'Paràmetres invàlids';
$string['invalidplugin'] = 'El connector del repositori {$a} no és vàlid';
$string['invalidrepositoryid'] = 'ID de repositori invàlida';
$string['isactive'] = 'Actiu?';
$string['keyword'] = 'Paraula clau';
$string['lastmodified'] = 'Darrera modificació';
$string['license'] = 'Llicència';
$string['linkexternal'] = 'Lloc extern';
$string['listview'] = 'Visualitza com a llista';
$string['loading'] = 'S\'està carregant...';
$string['login'] = 'Inicieu la sessió al vostre compte';
$string['logintoaccount'] = 'Inicieu la sessió al vostre compte {$a}';
$string['logout'] = 'Tanca la sessió';
$string['lostsource'] = 'Error. No es troba la font. {$a}';
$string['makefilecontrolledlink'] = 'Crea un enllaç amb accés controlat al fitxer';
$string['makefileinternal'] = 'Fes una còpia del fitxer';
$string['makefilelink'] = 'Enllaça el fitxer directament';
$string['makefilereference'] = 'Crear un àlies o accés directe al fitxer';
$string['manage'] = 'Gestiona els repositoris';
$string['manageinstances'] = 'Gestiona les instàncies';
$string['manageurl'] = 'Gestiona';
$string['manageuserrepository'] = 'Gestiona el repositori individual';
$string['missingsourcekey'] = 'Manca la clau d\'origen. Cal que proporcioneu aquesta clau per tal de recuperar el fitxer.';
$string['moving'] = 'S\'està movent';
$string['name'] = 'Nom';
$string['newfolder'] = 'Carpeta nova';
$string['newfoldername'] = 'Nom de la nova carpeta';
$string['noenter'] = 'No s\'ha introduït res';
$string['nofilesattached'] = 'No s\'ha adjuntat cap fitxer';
$string['nofilesavailable'] = 'Cap fitxer disponible';
$string['nomorefiles'] = 'No es permeten més adjuncions';
$string['nopathselected'] = 'No s\'ha seleccionat cap camí a la destinació (feu doble clic al node per seleccionar-lo)';
$string['nopermissiontoaccess'] = 'No teniu permís per accedir a aquest repositori';
$string['norepositoriesavailable'] = 'Cap dels vostres repositoris actuals pot retornar fitxers del format requerit.';
$string['norepositoriesexternalavailable'] = 'Cap dels vostres repositoris actuals pot retornar fitxers externs.';
$string['noresult'] = 'Cap resultat a la recerca';
$string['notyourinstances'] = 'No podeu veure/editar instàncies del repositori d\'altres usuaris';
$string['off'] = 'Habilitat però ocult';
$string['on'] = 'Habilitat i visible';
$string['openpicker'] = 'Tria un fitxer...';
$string['operation'] = 'Operació';
$string['original'] = 'Original';
$string['overwrite'] = 'Sobreescriu';
$string['overwriteall'] = 'Sobreescriu tot';
$string['path'] = 'Camí';
$string['plugin'] = 'Connectors de repositori';
$string['pluginerror'] = 'Errors al connector del repositori';
$string['pluginname'] = 'Nom del connector de repositori';
$string['pluginnamehelp'] = 'Si ho deixeu buit el nom per defecte serà l\'utilitzat';
$string['popup'] = 'Cliqueu al botó «Inicia la sessió» per iniciar la sessió';
$string['popupblockeddownload'] = 'La finestra de baixada està blocada; habiliteu la finestra emergent i torneu a intentar-ho.';
$string['preview'] = 'Previsualització';
$string['privacy:metadata:repository'] = 'El component «Repositori» emmagatzema els tipus de repositoris disponibles en el nucli del sistema.';
$string['privacy:metadata:repository_instances'] = 'El component de connectors de Repositori emmagatzema les dades d\'instàncies de repositoris d\'usuari en el nucli del sistema.';
$string['privacy:metadata:repository_instances:name'] = 'El nom particularitzat de la instància del repositori.';
$string['privacy:metadata:repository_instances:password'] = 'La contrasenya opcional configurada per la instància del repositori.';
$string['privacy:metadata:repository_instances:timecreated'] = 'La data/hora de creació de la instància del repositori.';
$string['privacy:metadata:repository_instances:timemodified'] = 'La data/hora de modificació de la instància del repositori.';
$string['privacy:metadata:repository_instances:typeid'] = 'El tipus ID de la instància del repositori.';
$string['privacy:metadata:repository_instances:userid'] = 'L\'ID de l\'usuari propietari de la instància del repositori.';
$string['privacy:metadata:repository_instances:username'] = 'El nom d\'usuari opcional configurat per la instància del respositori.';
$string['privatefilesof'] = '{$a} fitxers privats';
$string['readonlyinstance'] = 'No podeu editar/suprimir una instància de sols lectura.';
$string['referencesexist'] = 'Hi ha {$a} àlies o accessos directes de fitxer que utilitzen aquest fitxer com a font';
$string['referenceslist'] = 'Àlies o accessos directes';
$string['refresh'] = 'Refresca';
$string['refreshnonjsfilepicker'] = 'Tanqueu aquesta finestra i refresqueu el selector de fitxers no-javascript';
$string['removed'] = 'Repositori suprimit';
$string['renameall'] = 'Canvia el nom de tot';
$string['renameto'] = 'Canvia el nom a "{$a}"';
$string['repositories'] = 'Repositoris';
$string['repository'] = 'Repositori';
$string['repositorycourse'] = 'Repositori del curs';
$string['repositoryerror'] = 'El repositori remot ha retornat l\'error: {$a}';
$string['repositoryicon'] = 'Icona del repositori';
$string['save'] = 'Desa';
$string['saveas'] = 'Anomena i desa';
$string['saved'] = 'Desat';
$string['saving'] = 'S\'està desant';
$string['search'] = 'Cerca';
$string['searching'] = 'Cerca a';
$string['searchrepo'] = 'Cerca repositori';
$string['sectionbackup'] = 'Còpies de seguretat de la secció';
$string['select'] = 'Selecciona';
$string['setmainfile'] = 'Configura el fitxer principal';
$string['setmainfile_help'] = 'Si hi ha múltiples fitxers a la carpeta, el fitxer principal és el que apareix en la pàgina de visualització. Altres fitxers com ara imatges o vídeos poden aparèixer incrustats en la pàgina. En el gestor de fitxers, s\'indica quin és el fitxer principal amb el títol en negreta.';
$string['settings'] = 'Configuració';
$string['setupdefaultplugins'] = 'Configuració dels connectors de repositori per defecte';
$string['siteinstances'] = 'Instàncies de repositori del lloc';
$string['size'] = 'Mida';
$string['sourcekeymismatch'] = 'L\'URL de la font no concorda amb la clau font.';
$string['submit'] = 'Envia';
$string['sync'] = 'Sync';
$string['syncfiletimeout'] = 'Temps d\'espera per a la sincronització del fitxer';
$string['syncimagetimeout'] = 'Temps d\'espera per a la sincronització de la imatge';
$string['thumbview'] = 'Vista d\'icones';
$string['title'] = 'Tria un fitxer...';
$string['type'] = 'Tipus';
$string['typenotvisible'] = 'Tipus no visible';
$string['undisclosedreference'] = '(No revelat)';
$string['undisclosedsource'] = '(No revelat)';
$string['unknownoriginal'] = 'Desconegut';
$string['unknownsource'] = 'Font desconeguda';
$string['unzipped'] = 'Descomprimit amb èxit';
$string['upload'] = 'Penja aquest fitxer';
$string['uploading'] = 'S\'està carregant...';
$string['uploadsucc'] = 'El fitxer s\'ha carregat amb èxit';
$string['uselatestfile'] = 'Utilitza el fitxer més recent';
$string['usenonjsfilemanager'] = 'Obre el gestor de fitxers en una altra finestra';
$string['usenonjsfilepicker'] = 'Obre el selector de fitxers en una altra finestra';
$string['usercontextrepositorydisabled'] = 'No podeu editar aquest repositori en el context de l\'usuari';
$string['wrongcontext'] = 'No podeu accedir a aquest context';
$string['xhtmlerror'] = 'Probablement esteu utilitzant les capçaleres en mode XHTML estricte. Alguns components YUI no poden treballar en aquest mode; inhabiliteu-lo a Moodle.';
$string['ziped'] = 'La carpeta s\'ha comprimit amb èxit';
