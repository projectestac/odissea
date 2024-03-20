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
 * Strings for component 'antivirus', language 'ro', version '4.1'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Activați plugin-uri antivirus';
$string['antiviruscommonsettings'] = 'Setări obișnuite ale antivirusului';
$string['antiviruses'] = 'Plugin-uri antivirus';
$string['antivirussettings'] = 'Administrați plugin-uri antivirus';
$string['configantivirusplugins'] = 'Vă rugăm să alegeți plugin-urile antivirus pe care doriți să le utilizați și să le aranjați în ordinea în care vor fi aplicate.';
$string['dataerrordesc'] = 'A apărut o eroare la colectarea datelor.';
$string['dataerrorname'] = 'Eroare la colectarea datelor';
$string['datainfecteddesc'] = 'S-au detectat date compromise';
$string['datainfectedname'] = 'Date compromise';
$string['datastream'] = 'Date';
$string['emailadditionalinfo'] = 'Detalii suplimentare returnate de la motorul antivirus:';
$string['emailauthor'] = 'Încărcat de:';
$string['emailcontenthash'] = 'Hash-ul conținutului:';
$string['emailcontenttype'] = 'Tipul de conținut';
$string['emaildate'] = 'Data la care a fost încărcat';
$string['emailfilename'] = 'Denumirea fișierului:';
$string['emailfilesize'] = 'Dimensiunea fișierului:';
$string['emailgeoinfo'] = 'Geolocație:';
$string['emailinfectedfiledetected'] = 'S-a detectat un fișier infectat';
$string['emailipaddress'] = 'Adresa IP:';
$string['emailreferer'] = 'Referent:';
$string['emailreport'] = 'Raport:';
$string['emailscanner'] = 'Scanner:';
$string['emailscannererrordetected'] = 'A apărut o eroare la scaner';
$string['emailsubject'] = '{$a} :: Notificare antivirus';
$string['enablequarantine'] = 'Activați carantina';
$string['enablequarantine_help'] = 'Dacă este activată, toate fișierele detectate ca viruși vor fi plasate într-un folder de carantină ([dataroot] / {$a}) pentru inspecție ulterioară. Încărcarea în Moodle nu va reuși. Dacă aveți la dispoziție o scanare antivirus la nivel de sistem de fișiere, dosarul de carantină trebuie exclus din verificarea antivirus pentru a evita detectarea fișierelor din carantină.';
$string['fileerrordesc'] = 'A apărut o eroare la citirea fișierului.';
$string['fileerrorname'] = 'Eroare la citirea fișierului';
$string['fileinfecteddesc'] = 'S-a detectat un fișier infectat.';
$string['fileinfectedname'] = 'Fișier infectat';
$string['notifyemail'] = 'E-mail de notificare de alertă antivirus';
$string['notifyemail_help'] = 'Adresa de e-mail pentru notificările când este detectat un virus. Dacă este lăsat necompletat, atunci tuturor administratorilor site-ului li se vor trimite notificări.';
$string['notifylevel'] = 'Nivel de notificare';
$string['notifylevel_help'] = 'Diferite niveluri de informație despre care doriți să fiți notificat';
$string['notifylevelerror'] = 'Amenințări detectate și erori de scanare';
$string['notifylevelfound'] = 'Doar amenințările detectate';
$string['privacy:metadata'] = 'Sistemul Antivirus nu stochează date personale.';
$string['quarantinedfiles'] = 'Fișiere puse în carantină de antivirus';
$string['quarantinedisabled'] = 'Carantina este dezactivată. Fișierul nu este stocat.';
$string['quarantinetime'] = 'Timp maxim de carantină';
$string['quarantinetime_desc'] = 'Fișierele în carantină mai vechi de perioada specificată vor fi eliminate.';
$string['taskcleanup'] = 'Curățați fișierele în carantină.';
$string['threshold'] = 'Prag pentru verificarea stării';
$string['threshold_desc'] = 'Cât de mult să căutați în urmă pentru a verifica rezultatele anterioare pentru erori etc., conform raportării în {$a}.';
$string['unknown'] = 'Necunoscut';
$string['virusfound'] = '{$a->item} a fost scanat și s-a găsit virus!';
