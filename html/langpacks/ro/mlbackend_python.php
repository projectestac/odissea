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
 * Strings for component 'mlbackend_python', language 'ro', version '4.5'.
 *
 * @package     mlbackend_python
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['errornoconfigdata'] = 'Configurarea serverului nu este completă.';
$string['errorserver'] = 'Eroare de server {$a}';
$string['host'] = 'Gazdă';
$string['hostdesc'] = 'Gazdă';
$string['packageinstalledshouldbe'] = 'Pachetul moodlemlbackend Python trebuie actualizat. Versiunea necesară este „{$a->required}”, iar versiunea instalată este „{$a->installed}”.';
$string['packageinstalledtoohigh'] = 'Pachetul moodlemlbackend Python nu este compatibil cu această versiune de Moodle. Versiunea necesară este „{$a->required}” sau mai mare, atâta timp cât este compatibilă cu API-ul. Versiunea instalată „{$a->installed}” este prea mare.';
$string['password'] = 'Parola';
$string['passworddesc'] = 'Șir de caractere utilizate ca parolă pentru a comunica între serverul Moodle și serverul Python.';
$string['pluginname'] = 'Backend de învățare automată Python';
$string['port'] = 'Port';
$string['portdesc'] = 'Port';
$string['privacy:metadata'] = 'Plugin-ul de învățare automată Python nu stochează date personale.';
$string['pythonpackagenotinstalled'] = 'Pachetul moodlemlbackend Python nu este instalat sau există o problemă cu acesta. Executați „{$a}” din interfața liniei de comandă pentru mai multe informații.';
$string['pythonpathnotdefined'] = 'Calea către binarul Python executabil nu a fost definită. Vă rugăm să accesați „{$a}” pentru a o seta.';
$string['secure'] = 'Folosiți HTTPS';
$string['securedesc'] = 'Dacă se folosește HTTP sau HTTPS.';
$string['serversettingsinfo'] = 'Dacă „Utilizați un server” este activat, setările serverului vor fi afișate.';
$string['tensorboardinfo'] = 'Lansați TensorBoard din linia de comandă tastând tensorboard --logdir = \'{$a}\' pe serverul dvs. web.';
$string['username'] = 'Nume de utilizator';
$string['usernamedesc'] = 'Șir de caractere utilizate ca nume de utilizator pentru a comunica între serverul Moodle și serverul Python.';
$string['useserver'] = 'Folosiți un server';
$string['useserverdesc'] = 'Pachetul Python de backend de învățare automată nu este instalat pe serverul web, ci pe un alt server.';
