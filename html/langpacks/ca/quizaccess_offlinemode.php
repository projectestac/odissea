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
 * Strings for component 'quizaccess_offlinemode', language 'ca', version '4.5'.
 *
 * @package     quizaccess_offlinemode
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerchanged'] = 'S\'ha canviat la resposta';
$string['backtothequiz'] = 'Torna al qüestionari';
$string['changesmadereallygoaway'] = 'Les vostres respostes no s\'han desat al servidor. Confirmeu que voleu deixar aquest intent?';
$string['dataprocessedsuccessfully'] = 'Les dades s\'han processat amb èxit ({$a}).';
$string['description'] = 'Aquest qüestionari utilitza el mode a prova d\'errors. Els administradors poden {$a}';
$string['descriptionlink'] = 'penjar les respostes exportades';
$string['finishattemptsafterupload'] = 'Tramet i acaba cada intent després de processar la càrrega';
$string['lastsaved'] = 'Desat per darrera vegada: {$a}';
$string['lastsavedtotheserver'] = 'Desat per darrera vegada al servidor: {$a}';
$string['lastsavedtothiscomputer'] = 'Desat per darrera vegada en aquest ordinador: {$a}';
$string['loggedinaswronguser'] = 'Heu iniciat sessió amb un compte diferent del compte que intentava resoldre el qüestionari. Això no funcionarà. Feu clic a Continua per iniciar sessió de nou com l\'usuari correcte.';
$string['logindialogueheader'] = 'Potser us caldrà iniciar sessió de nou';
$string['loginokagain'] = 'El vostre inici de sessió ara és correcte.';
$string['offlinemode:uploadresponses'] = 'Penja les respostes';
$string['offlinemodeenabled'] = 'Mode experimental a prova d\'errors';
$string['offlinemodeenabled_desc'] = 'Activeu el mode experimental a prova d\'errors si és recomanable que estigui habilitat per defecte per a qüestionaris nous, i també si és recomanable que sigui un dels paràmetres avançats (després de «Mostra\'n més...») al formulari dels paràmetres del qüestionari.';
$string['offlinemodeenabled_help'] = 'El propòsit d\'aquesta opció experimental és permetre que els estudiants intentin resoldre un qüestionari encara que la connexió de la xarxa no sigui fiable: per exemple, dins un tren que passa per túnels o, senzillament, amb una Wi-Fi defectuosa. Els estudiants es poden desplaçar per les pàgines del qüestionari encara que el servidor no estigui disponible, i totes les seves respostes s\'emmagatzemaran localment, i s\'enviaran al servidor quan sigui possible.';
$string['pluginname'] = 'Qüestionari en mode a prova d\'errors';
$string['privatekey'] = 'Clau privada d\'encriptació';
$string['privatekey_desc'] = 'Podeu utilitzar criptografia de clau pública per protegir les respostes descarregades. Per fer-ho, cal que proporcioneu una parella pública/privada de claus. Podeu generar una clau privada utilitzant <code>openssl genrsa -out rsa_1024_priv.pem 1024</code> a la línia d\'ordres (si teniu OpenSSL instal·lat des de https://www.openssl.org/). Després, enganxeu el contingut del fitxer rsa_1024_priv.pem en aquest quadre.';
$string['processingcomplete'] = 'Processament finalitzat';
$string['processingfile'] = 'El fitxer {$a} s\'està processant';
$string['publickey'] = 'Clau pública d\'encriptació';
$string['publickey_desc'] = 'S\'ha de correspondre amb la clau privada. Podeu generar-la a partir de la clau privada utilitzant <code>openssl rsa -pubout -in rsa_1024_priv.pem -out rsa_1024_pub.pem</code>; després, enganxeu aquí els continguts de rsa_1024_pub.pem.';
$string['responsefiles'] = 'Fitxers de resposta';
$string['responsefiles_help'] = 'Podeu penjar un o més fitxers de resposta baixats utilitzant l\'enllaç «Exportació de resposta d\'emergència» durant un intent de resoldre el qüestionari.';
$string['reviewthisattempt'] = 'Revisa aquest intent';
$string['savefailed'] = 'Ha fallat el desament. Podeu continuar treballant. De tant en tant és recomanable {$a}.';
$string['savetheresponses'] = 'desar les respostes';
$string['savingdots'] = 'S\'està desant...';
$string['savingtryagaindots'] = 'S\'està intentant una altra vegada desar al servidor...';
$string['submitfailed'] = 'Ha fallat la tramesa';
$string['submitfaileddownloadmessage'] = '...o podeu {$a} com un fitxer que es pot processar més endavant.';
$string['submitfailedmessage'] = 'Les vostres respostes no es poden trametre. Podeu tornar a intentar-ho...';
$string['submitting'] = 'S\'està trametent...';
$string['uploadfailed'] = 'La càrrega ha fallat';
$string['uploadingresponsesfor'] = 'S\'estan carregant les respostes per a {$a}';
$string['uploadmoreresponses'] = 'Carrega més respostes';
$string['uploadresponses'] = 'Carrega les respostes';
$string['uploadresponsesfor'] = 'Carrega respostes per a {$a}';
