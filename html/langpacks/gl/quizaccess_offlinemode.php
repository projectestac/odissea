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
 * Strings for component 'quizaccess_offlinemode', language 'gl', version '4.4'.
 *
 * @package     quizaccess_offlinemode
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerchanged'] = 'A resposta cambiou';
$string['backtothequiz'] = 'Volver ao cuestionario';
$string['changesmadereallygoaway'] = 'As súas respostas non foron gardadas no servidor. Confirma que quere abandonar este intento.';
$string['dataprocessedsuccessfully'] = 'Datos procesados satisfactoriamente ({$a}).';
$string['description'] = 'Este cuestionario usa o modo tolerante a fallos. A administración pode {$a}';
$string['descriptionlink'] = 'enviar respostas exportadas';
$string['finishattemptsafterupload'] = 'Enviar e rematar cada intento após procesar a carga';
$string['lastsaved'] = 'Último gardado: {$a}';
$string['lastsavedtotheserver'] = 'Último gardado no servidor: {$a}';
$string['lastsavedtothiscomputer'] = 'Último gardado neste computador: {$a}';
$string['loggedinaswronguser'] = 'Accedeu cunha conta distinta da que estaba tentando o cuestionario. Isto non funcionará. Prema en Continuar para acceder de novo co usuario correcto.';
$string['logindialogueheader'] = 'É posíbel que necesites acceder de novo';
$string['loginokagain'] = 'O seu acceso agora é correcto';
$string['offlinemode:uploadresponses'] = 'Enviar respostas';
$string['offlinemodeenabled'] = 'Modo experimental tolerante a fallos';
$string['offlinemodeenabled_desc'] = 'Se o modo tolerante a fallos debería estar activado de xeito predeterminado para novos cuestionarios, e tamén se debería ser uns axustes avanzados (detrás de «Amosar máis…») no formulario de axustes do cuestionario.';
$string['offlinemodeenabled_help'] = 'O obxectivo desta opción experimental é deixar que o alumnado intente un cuestionario aínda que a conexión á rede non sexa fiábel. Por exemplo, nun tren que pasa por túneles, ou só cunha mala conexión wifi. O alumnado pode moverse entre as páxinas do cuestionario aínda que o servidor non estea dispoñíbel, e todas as súas respostas son almacenadas localmente, e enviadas ao servidor cando sexa posible.';
$string['pluginname'] = 'Modo tolerante a fallos do cuestionario';
$string['privacy:metadata'] = 'O complemento de Modo tolerante a fallos de cuestionario non almacena ningún dato persoal.';
$string['privatekey'] = 'Chave privada de cifrado';
$string['privatekey_desc'] = 'Pode usar a criptografía de chave pública para protexer as respostas descargadas. Para iso, cómpre fornecer un par de chaves privada/pública. Pode xerar unha chave privada usando <code>openssl genrsa -out rsa_1024_priv.pem 1024</code> na liña de ordes (se ten instalado OpenSSL dende https://www.openssl.org/). A continuación, pegue o contido do ficheiro rsa_1024_priv.pem nesta caixa.';
$string['processingcomplete'] = 'Procesado completo';
$string['processingfile'] = 'Procesando o ficheiro {$a}';
$string['publickey'] = 'Chave pública de cifrado';
$string['publickey_desc'] = 'Isto debe corresponder á chave privada. Pode xerala a partir a chave privada usando <code>openssl rsa -pubout -in rsa_1024_priv.pem -out rsa_1024_pub.pem</code> e após pegar o contido de rsa_1024_pub.pem aquí.';
$string['responsefiles'] = 'Ficheiros de resposta';
$string['responsefiles_help'] = 'Pode cargar un ou máis ficheiros de resposta descargados usando a ligazón «Exportación da resposta de emerxencia» durante un intento de cuestionario.';
$string['reviewthisattempt'] = 'Revisar este intento';
$string['savefailed'] = 'Produciuse un fallo ao gardar. Pode continuar traballando. De cando en vez debería {$a}.';
$string['savetheresponses'] = 'gadar as respostas';
$string['savingdots'] = 'Gardando…';
$string['savingtryagaindots'] = 'Tentando de novo gardar no servidor…';
$string['submitfailed'] = 'Fallou o envío';
$string['submitfaileddownloadmessage'] = '… ou pode {$a} como un ficheiro que se pode procesar máis tarde.';
$string['submitfailedmessage'] = 'Non foi posíbel enviar as súas respostas. Pode tentalo de novo…';
$string['submitting'] = 'Enviando…';
$string['uploadfailed'] = 'Fallou o envío';
$string['uploadingresponsesfor'] = 'Enviando respostas para {$a}';
$string['uploadmoreresponses'] = 'Enviar máis respostas';
$string['uploadresponses'] = 'Enviar respostas';
$string['uploadresponsesfor'] = 'Enviar respostas para {$a}';
