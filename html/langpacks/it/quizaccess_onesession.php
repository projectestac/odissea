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
 * Strings for component 'quizaccess_onesession', language 'it', version '3.11'.
 *
 * @package     quizaccess_onesession
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anothersession'] = 'Stai cercando di accedere al tentativo da un computer, dispositivo o browser diverso da quello utilizzato per iniziare il quiz. Se hai accidentalmente chiuso il tuo browser, per favore, contatta il docente.';
$string['eventattemptblocked'] = 'Il tentativo dello studente di continuare il tentativo usando un differente dispositivo è stato bloccato';
$string['eventattemptunlocked'] = 'Lo studente è stato autorizzato a continuare il tentativo usando un dispositivo differente';
$string['onesession'] = 'Blocca connessioni simultanee';
$string['onesession:unlockattempt'] = 'Sblocca tentativo';
$string['onesession_help'] = 'Se abilitato, gli utenti possono continuare il proprio tentativo solo nella stessa sessione del browser. Qualsiasi tentativo di aprire lo stesso tentativo usando un differente computer, dispositivo o browser sarà bloccato. Questo potrebbe essere utile per essere sicuri che nessuno possa aiutare lo studente aprendo lo stesso quiz da un altro computer.';
$string['pluginname'] = 'Regola di accesso quiz Blocco sessioni simultanee';
$string['studentinfo'] = 'Attenzione! È proibito cambiare il dispositivo durante l\'esecuzione del quiz. Dopo l\'inizio del tentativo qualsiasi connessione al quiz effettuata da un differente computer, dispositivo o browser sarà bloccata. Non chiudere la finestra del browser fino al termine del tentativo, altrimenti non sarai in grado di completarlo.';
$string['unlockthisattempt'] = 'Permetti allo studente di continuare questo tentativo usando un differente dispositivo.';
$string['unlockthisattempt_header'] = 'Blocca connessioni simultanee';
