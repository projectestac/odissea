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
 * Strings for component 'mlbackend_python', language 'it', version '4.1'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'La configurazione del server non è completa.';
$string['errorserver'] = 'Errore del server: {$a}';
$string['host'] = 'Host';
$string['hostdesc'] = 'Host';
$string['packageinstalledshouldbe'] = 'Il pacchetto python "moodlemlbackend" deve essere aggiornato.  La versione richiesta è "{$a->required}" mentre la versione installata è "{$a->installed}"';
$string['packageinstalledtoohigh'] = 'Il pacchetto Python moodlemlbackend non è compatibile con questa versione di Moodle. La versione richiesta è "{$a->required}" o superiore purché sia compatibile con le API. La versione installata "{$a->installed}" è troppo alta.';
$string['password'] = 'Password';
$string['passworddesc'] = 'La password per consentire la comunicazione tra il server Moodle e il server Python';
$string['pluginname'] = 'Backend Python di machine learning';
$string['port'] = 'Porta';
$string['portdesc'] = 'Porta';
$string['privacy:metadata'] = 'Il plugin \'Backend Python di machine learning\' non memorizza dati personali.';
$string['pythonpackagenotinstalled'] = 'Il pacchetto python "moodlemlbackend" non è installato oppure è presente un problema. Lanciare "{$a}" dalla linea di comando per ulteriori informazioni.';
$string['pythonpathnotdefined'] = 'Il percorso dell\'eseguibile binario Python non è configurato. Per configurarlo: "{$a}"';
$string['secure'] = 'Utilizza HTTPS';
$string['securedesc'] = 'Consente di scegliere la comunicazione in HTTP o HTTPS';
$string['serversettingsinfo'] = 'Per visualizzare le impostazioni + necessario selezionare \'Utilizza server esterno\'.';
$string['tensorboardinfo'] = 'È possibile lanciare TensorBoard dalla linea di comando digitando tensorboard --logdir=\'{$a}\'.';
$string['username'] = 'Username';
$string['usernamedesc'] = 'Lo username per consentire la comunicazione tra il server Moodle e il server Python';
$string['useserver'] = 'Utilizza server esterno';
$string['useserverdesc'] = 'Consente di utilizzare un server esterno per il backend Python di machine learning.';
