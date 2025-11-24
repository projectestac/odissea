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
 * Strings for component 'tool_moodlenet', language 'ro', version '4.5'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'Adăugarea de conținut de pe MoodleNet';
$string['aria:enterprofile'] = 'Inserați identificatorul profilului dumneavoastră MoodleNet';
$string['aria:footermessage'] = 'Căutați conținut pe MoodleNet';
$string['autoenablenotification'] = 'Se pare că certificatul HTTPS este autosemnat sau nu este de încredere. Aplicația mobilă va funcționa numai cu site-uri de încredere. Vă rugăm să utilizați orice verificator SSL online pentru a diagnostica problema. Dacă acesta indică faptul că certificatul dvs. este OK, puteți ignora acest avertisment.';
$string['autoenablenotification_subject'] = 'Setările implicite MoodleNet au fost modificate';
$string['browsecontentmoodlenet'] = 'Sau căutați conținut pe MoodleNet';
$string['clearsearch'] = 'Ștergeți căutarea';
$string['connectandbrowse'] = 'Conectați-vă și navigați:';
$string['defaultmoodlenet'] = 'Adresa URL MoodleNet';
$string['defaultmoodlenet_desc'] = 'Adresa URL a instanței MoodleNet disponibilă prin selectorul de activități.';
$string['defaultmoodlenetname'] = 'Denumirea instanței MoodleNet';
$string['defaultmoodlenetname_desc'] = 'Numele instanței MoodleNet disponibil prin selectorul de activități.';
$string['defaultmoodlenetnamevalue'] = 'MoodleNet Central';
$string['enablemoodlenet'] = 'Activează integrarea MoodleNet (inbound)';
$string['enablemoodlenet_desc'] = 'Dacă este activat, un utilizator cu capabilitatea de a crea și gestiona activități poate naviga pe MoodleNet prin selectorul de activități și importa resursele MoodleNet în cursul său. În plus, un utilizator cu capabilitatea de a restaura copii de siguranță poate selecta un fișier de rezervă pe MoodleNet și îl poate restabili în Moodle.';
$string['errorduringdownload'] = 'A apărut o eroare la descărcarea fișierului: {$a}';
$string['footermessage'] = 'Sau căutați conținut pe';
$string['forminfo'] = 'Identificatorul profilului dumneavoastră MoodleNet va fi salvat automat în profilul dumneavoastră de pe acest site.';
$string['importconfirm'] = 'Sunteți pe cale să importați conținutul „{$a->resourcename} ({$a->resourcetype})” în cursul „{$a->coursename}”. Ești sigur că vrei să continui?';
$string['importconfirmnocourse'] = 'Sunteți pe cale să importați conținutul „{$a->resourcename} ({$a->resourcetype})” în site-ul dvs. Sunteți sigur ca vreți să continuați?';
$string['importformatselectguidingtext'] = 'În ce format doriți conținutul „{$a->name} ({$a->type})” să fie adăugat în cursul dvs.?';
$string['importformatselectheader'] = 'Alegeți formatul de afișare a conținutului';
$string['inputhelp'] = 'Sau dacă aveți deja un cont MoodleNet, copiați identificatorul din profilul dumneavoastră MoodleNet și lipiți-l aici:';
$string['instancedescription'] = 'MoodleNet este o platformă socială deschisă pentru educatori, cu accent pe organizarea în colaborare a colecțiilor de resurse deschise.';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-example@moodle.net';
$string['invalidmoodlenetprofile'] = '$userprofile nu este formatat corect';
$string['missinginvalidpostdata'] = 'Informațiile despre resurse de la MoodleNet lipsesc sau sunt într-un format incorect.
Dacă acest lucru se întâmplă în mod repetat, vă rugăm să contactați administratorul site-ului.';
$string['mnetprofile'] = 'Profil MoodleNet';
$string['mnetprofiledesc'] = '<p> Introduceți aici detaliile profilului MoodleNet pentru a fi redirecționat către profilul dvs. în timp ce vizitați MoodleNet. </p>';
$string['moodlenetnotenabled'] = 'Integrarea MoodleNet trebuie activată în administrarea site-ului / MoodleNet înainte ca importurile de resurse să poată fi procesate.';
$string['moodlenetsettings'] = 'Setări MoodleNet inbound';
$string['notification'] = 'Sunteți pe cale să importați conținutul „{$a->name} ({$a->type})” în site-ul dvs. Selectați cursul în care doriți să fie adăugat sau <a href="{$a->cancelink} "> anulați </a> acest import.';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'Instrumentul MoodleNet facilitează comunicarea doar cu MoodleNet. Nu stochează date.';
$string['profilevalidationerror'] = 'A apărut o problemă la încercarea de validare a identificatorului profilului dumneavoastră MoodleNet';
$string['profilevalidationfail'] = 'Vă rugăm să inserați un identificator de profil MoodleNet valid';
$string['profilevalidationpass'] = 'Toate caracteristicile sunt bune!';
$string['removedmnetprofilenotification'] = 'Conform modificărilor recente de pe platforma MoodleNet, orice utilizator care și-a salvat anterior identificatorul de profil MoodleNet pe site va trebui să insereze un identificator de profil MoodleNet în noul format pentru a se autentifica pe platforma MoodleNet.';
$string['removedmnetprofilenotification_subject'] = 'Modificarea formatului identificatorului profilului MoodleNet';
$string['saveandgo'] = 'Salvați și continuați';
$string['searchcourses'] = 'Caută cursuri';
$string['selectpagetitle'] = 'Selectați pagina';
$string['uploadlimitexceeded'] = 'Dimensiunea fișierului {$a->filesize} depășește limita de încărcare a utilizatorului care este de {$a->uploadlimit} octeți.';
