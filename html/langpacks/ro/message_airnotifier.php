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
 * Strings for component 'message_airnotifier', language 'ro', version '4.4'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'Gestionare dispozitive';
$string['airnotifieraccesskey'] = 'Cheie de acces Airnotifier';
$string['airnotifierappname'] = 'Denumire app Airnotifier';
$string['airnotifierfielderror'] = 'Vă rugăm să ștergeți orice spații goale sau caractere care nu sunt necesare din următorul câmp: {$a}';
$string['airnotifiermobileappname'] = 'Denumire aplicație mobilă';
$string['airnotifierport'] = 'Port Airnotifier';
$string['airnotifierurl'] = 'URL Airnotifier';
$string['checkconfiguration'] = 'Verificați și testați configurația notificărilor push';
$string['configairnotifieraccesskey'] = 'Cheia de acces pentru conectarea la serverul Airnotifier. Puteți obține o cheie de acces făcând clic pe linkul „Solicitați cheia de acces” de mai jos (numai site-uri înregistrate) sau creând un cont pe <a href="https://apps.moodle.com"> Portalul de aplicații Moodle </ a >.';
$string['configairnotifierappname'] = 'Identificatorul numelui aplicației în Airnotifier.';
$string['configairnotifiermobileappname'] = 'Identificatorul unic de aplicații mobile (de obicei, ceva de genul com.moodle.moodlemobile).';
$string['configairnotifierport'] = 'Portul utilizat pentru conectarea la serverul Airnotifier.';
$string['configairnotifierurl'] = 'Adresa URL a serverului la care vă conectați pentru a trimite notificări push.';
$string['configured'] = 'Configurat';
$string['deletecheckdevicename'] = 'Ștergeți dispozitivul dumneavoastră: {$a->name}';
$string['deletedevice'] = 'Ștergeți dispozitivul. Rețineți că o aplicație poate înregistra din nou dispozitivul. În cazul în care dispozitivul reapare, dezactivați-l.';
$string['devicetoken'] = 'Dispozitiv token';
$string['donotsendnotification'] = 'Nu trimite deloc notificări';
$string['enableprocessor'] = 'Activați notificările mobile';
$string['encryptnotifications'] = 'Criptează notificări';
$string['encryptnotifications_help'] = 'Activați criptarea end-to-end a notificărilor aplicației. Unele date pot fi eliminate din notificări dacă nu pot fi criptate.';
$string['encryptprocessing'] = 'Pentru dispozitivele care nu acceptă criptarea';
$string['encryptprocessing_desc'] = 'Notificările criptate necesită cel puțin Android 8 sau iOS 13, și Moodle App 4.2 sau versiuni ulterioare.';
$string['errorretrievingkey'] = 'A apărut o eroare la preluarea cheii de acces. Site-ul dvs. trebuie să fie înregistrat pentru a utiliza acest serviciu. Dacă site-ul dvs. este deja înregistrat, vă rugăm să încercați să vă actualizați înregistrarea. Alternativ, puteți obține o cheie de acces prin crearea unui cont pe <a href="https://apps.moodle.com"> Portalul de aplicații Moodle </a>.';
$string['keyretrievedsuccessfully'] = 'Cheia de acces a fost recuperată cu succes. Pentru a accesa statisticile de utilizare a aplicației Moodle, vă rugăm să creați un cont pe <a href="https://apps.moodle.com"> Portalul de aplicații Moodle </a>.';
$string['messageprovidersempty'] = 'Nu există notificări pentru dispozitive mobile activate în preferințele implicite de notificare.';
$string['messageproviderslow'] = 'Doar câteva notificări mobile sunt activate în preferințele implicite de notificare.';
$string['moodleappsportallimitswarning'] = 'Rețineți că numărul de dispozitive de utilizator cărora li se permite să primească notificări depinde de abonamentul la aplicația Moodle. Pentru detalii, accesați <a href="{$a}" target="_blank"> Portalul de aplicații Moodle </a>.';
$string['nodevices'] = 'Nu există dispozitive înregistrate. Dispozitivele vor apărea automat după instalarea aplicației Moodle și adăugarea acestui site.';
$string['noemailevernotset'] = '$CFG->noemailever dezactivat';
$string['noemaileverset'] = '$CFG->noemailever este activat în config.php. Trebuie să setați ca fiind fals sau sa o ștergeți.';
$string['nopermissiontomanagedevices'] = 'Nu aveți permisiunea de a gestiona dispozitivele.';
$string['notconfigured'] = 'Serverul Airnotifier nu a fost configurat, astfel încât notificările push nu pot fi trimise.';
$string['notificationsserverconfiguration'] = 'Configurare server de notificări (Airnotifier).';
$string['pluginname'] = 'Mobil';
$string['privacy:appiddescription'] = 'Acesta este un identificator al aplicației utilizate.';
$string['privacy:enableddescription'] = 'Dacă acest dispozitiv este activat pentru Airnotifier.';
$string['privacy:metadata:date'] = 'Data la care a fost trimis mesajul.';
$string['privacy:metadata:enabled'] = 'Dacă dispozitivul Airnotifier este activat.';
$string['privacy:metadata:externalpurpose'] = 'Aceste informații sunt trimise către un site extern pentru a fi livrate în cele din urmă pe dispozitivul mobil al utilizatorului.';
$string['privacy:metadata:fullmessage'] = 'Mesajul complet.';
$string['privacy:metadata:notification'] = 'Dacă acest mesaj este o notificare.';
$string['privacy:metadata:smallmessage'] = 'O secțiune a mesajului.';
$string['privacy:metadata:subject'] = 'Subiectul mesajului.';
$string['privacy:metadata:tableexplanation'] = 'Informațiile dispozitivului Airnotifier sunt stocate aici.';
$string['privacy:metadata:userdeviceid'] = 'ID-ul care leagă dispozitivul mobil al utilizatorului';
$string['privacy:metadata:userfromfullname'] = 'Numele complet al utilizatorului care a trimis mesajul.';
$string['privacy:metadata:userfromid'] = 'Identificator de utilizator al autorului mesajului.';
$string['privacy:metadata:userid'] = 'Identificatorul utilizatorului care a trimis mesajul.';
$string['privacy:metadata:username'] = 'Numele de utilizator al utilizatorului.';
$string['privacy:metadata:usersubsystem'] = 'Acest plugin este conectat la subsistemul utilizatorului.';
$string['privacy:subcontext'] = 'Mesaj Airnotifier';
$string['requestaccesskey'] = 'Solicitați cheia de acces';
$string['sendnotificationnotenc'] = 'Trimite notificări fără criptare';
$string['sendtest'] = 'Trimite notificări de tip push dispozitivelor mele';
$string['sendtestconfirmation'] = 'Va fi trimisă o notificare push de testare către dispozitivele pe care le utilizați pentru a vă conecta la acest site. Vă rugăm să vă asigurați că dispozitivele dvs. sunt conectate la Internet și că aplicația mobilă nu este deschisă (deoarece notificările push sunt afișate numai atunci când sunt primite în fundal).';
$string['serverconnectivityerror'] = 'Acest site nu se poate conecta la serverul de notificări {$a}';
$string['showhide'] = 'Activarea/dezactivarea dispozitivului.';
$string['sitemustberegistered'] = 'Pentru a utiliza instanța publică Airnotifier, site-ul dvs. trebuie să fie înregistrat. Alternativ, puteți obține o cheie de acces prin crearea unui cont pe <a href="https://apps.moodle.com"> Portalul de aplicații Moodle </a>.';
$string['unknowndevice'] = 'Dispozitiv necunoscut';
$string['userdevices'] = 'Dispozitivele utilizatorului';
$string['view_notification'] = 'Fă click pentru vizualizare';
