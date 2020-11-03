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
 * Strings for component 'tool_installaddon', language 'ca', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_installaddon
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Acceptació';
$string['acknowledgementtext'] = 'Entenc que és responsabilitat meva fer còpies de seguretat completes d\'aquest lloc abans d\'instal·lar complements. Accepto i entenc que els complements (especialment els no oficials, però no sols els de fonts no oficials) poden contenir forats de seguretat, poden fer que el lloc estigui no disponible, o provocar filtracions o pèrdua de dades privades.';
$string['featuredisabled'] = 'L\'instal·lador d\'aquest connector està inhabilitat en aquest lloc.';
$string['installaddon'] = 'Instal·la un complement!';
$string['installaddons'] = 'Instal·la complements!';
$string['installfromrepo'] = 'Instal·la complements des del directori de connectors de Moodle';
$string['installfromrepo_help'] = 'Sereu redirigits al directori de connectors de Moodle per cercar i instal·lar un complement. Fixeu-vos que s\'enviarà el nom complet del vostre lloc, l\'URL i la versió de Moodle per facilitar-vos-en la instal·lació.';
$string['installfromzip'] = 'Instal·la un complement des d\'un fitxer ZIP';
$string['installfromzipfile'] = 'Paquet ZIP';
$string['installfromzipfile_help'] = 'El paquet ZIP del connector ha de contenir un directori anomenat amb el nom del connector. El fitxer ZIP s\'extraurà en la localització adequada per al tipus de connector. Si el paquet ha estat baixat des del directori de connectors de Moodle tindrà aquesta estructura.';
$string['installfromzip_help'] = 'Una alternativa per instal·lar complements directament des del directori de complements de Moodle és carregar un paquet ZIP del complement. L\'estructura ZIP ha de tenir la mateixa estructura que el paquet baixat des del directori de connectors de Moodle.';
$string['installfromzipinvalid'] = 'El paquet ZIP del complement ha de tindre sols un directori anomenat amb el nom del complement. El fitxer proporcionat no és vàlid com a paquet ZIP de complement.';
$string['installfromziprootdir'] = 'Canvia el nom del directori arrel';
$string['installfromziprootdir_help'] = 'Alguns paquets ZIP, com els generats per GitHub, poden contenir un nom incorrecte per al directori arrel. Si passa això, podeu introduir-ne el nom correcte aquí.';
$string['installfromzipsubmit'] = 'Instal·la un complement des d\'un fitxer ZIP';
$string['installfromziptype'] = 'Tipus de connector';
$string['installfromziptype_help'] = 'Escolliu el tipus correcte de connector que aneu a instal·lar. Avís: El procediment d\'instal·lació pot anar molt malament si especifiqueu un tipus incorrecte de connector.';
$string['permcheck'] = 'Comproveu que el directori arrel del tipus de connector té permisos d\'escriptura per al procés del servidor web.';
$string['permcheckerror'] = 'Error mentre s\'estaven comprovant els permisos d\'escriptura';
$string['permcheckprogress'] = 'S\'està comprovant el permís d\'escriptura...';
$string['permcheckrepeat'] = 'Comprova de nou';
$string['permcheckresultno'] = 'No es pot escriure en la ubicació del connector <em>{$a->path}</em>';
$string['permcheckresultyes'] = 'Sí es pot escriure en la ubicació del connector <em>{$a->path}</em>';
$string['pluginname'] = 'Instal·lador del complement';
$string['remoterequestalreadyinstalled'] = 'Hi ha una petició per instal·lar el complement {$a->name} ({$a->component}) amb versió {$a->version} des del directori de connectors de Moodle en aquest lloc. Tanmateix, el connector <strong>ja està instal·lat</strong> en aquest lloc.';
$string['remoterequestconfirm'] = 'Hi ha una petició per instal·lar el complement {$a->name} ({$a->component}) amb versió {$a->version} des del directori de connectors de Moodle en aquest lloc. Si continueu, el ZIP amb el complement es baixarà per ser validat. No s\'instal·larà res encara.';
$string['remoterequestinvalid'] = 'Hi ha una petició per instal·lar un complement des del directori de connectors de Moodle en aquest lloc. Desafortunadament la petició no és vàlida i per això no es pot instal·lar el complement.';
$string['remoterequestnoninstallable'] = 'Hi ha una petició per instal·lar el complement {$a->name} ({$a->component}) amb versió {$a->version} des del directori de connectors de Moodle en aquest lloc. De totes maneres, la preverificació de la instal·lació del complement ha fallat (codi de raó: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Hi ha una petició per instal·lar el complement {$a->name} ({$a->component}) amb versió {$a->version} des del directori de connectors de Moodle en aquest lloc. Tanmateix, la ubicació del connector <strong>{$a->typepath}</strong> no té <strong>permís d\'escriptura</strong>. Us cal donar permís d\'escriptura a l\'usuari del servidor web per a la ubicació del connector, després premeu el botó continua per reprendre la comprovació.';
$string['remoterequestpluginfoexception'] = 'Vaja vaja, ha succeït un error quan es provava d\'obtindre informació sobre el complement {$a->name} ({$a->component})  amb versió  {$a->version}. El complement no es pot instal·lar. Activeu el mode depuració per mirar els detalls de l\'error.';
$string['typedetectionfailed'] = 'No es pot detectar el tipus de complement. Trieu de forma manual el tipus de complement.';
$string['typedetectionmismatch'] = 'El tipus de complement seleccionat no concorda amb el declarat pel complement: {$a}';
