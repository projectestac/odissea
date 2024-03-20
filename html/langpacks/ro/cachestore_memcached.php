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
 * Strings for component 'cachestore_memcached', language 'ro', version '4.1'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Buffer scriere';
$string['bufferwrites_help'] = 'Activează sau dezactivează I/O buffer. Activarea I/O buffer face ca comenzile de stocare să fie „tampon” în loc să fie trimise. Orice acțiune care recuperează date face ca acest buffer să fie trimis la conexiunea la distanță. Închiderea conexiunii sau închiderea conexiunii va face ca datele tampon să fie împinse la conexiunea la distanță.';
$string['clustered'] = 'Activați serverele grupate';
$string['clustered_help'] = 'Aceasta este utilizată pentru a permite funcționalitatea read-one, set-multi.

Cazul de utilizare intenționat este de a crea un magazin îmbunătățit pentru configurații echilibrate în sarcină. Magazinul va prelua de la un server (de obicei localhost), dar va fi setat la mai multe (toate serverele din grupul de echilibru de încărcare). Pentru cache-urile cu rapoarte de citire foarte mari, acest lucru economisește o cantitate semnificativă de cheltuieli generale de rețea.

Când această setare este activată, serverul listat mai sus va fi utilizat pentru preluare.';
$string['clusteredheader'] = 'Divizați serverele';
$string['hash'] = 'Metoda hash';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Implicit (câte unul)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Specifică algoritmul de hash utilizat pentru cheile de element. Fiecare algoritm hash are avantajele și dezavantajele sale. Mergeți cu setarea implicită dacă nu știți sau nu vă pasă.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'Memorie cache partajată';
$string['isshared_help'] = 'Serverul dvs. memcached este utilizat și de alte aplicații?

Dacă memoria cache este partajată de alte aplicații, fiecare cheie va fi ștearsă individual pentru a se asigura că numai datele deținute de această aplicație sunt curățate (lăsând neschimbate datele cache ale aplicației externe). Acest lucru poate avea ca rezultat o performanță redusă la curățarea cache-ului, în funcție de configurația serverului.

Dacă rulați o memorie cache dedicată pentru această aplicație, atunci întreaga memorie cache poate fi spălată în condiții de siguranță, fără riscul de a distruge datele cache ale altei aplicații. Acest lucru ar trebui să aibă ca rezultat o creștere a performanței atunci când se curăță memoria cache.';
$string['pluginname'] = 'Memcached';
$string['prefix'] = 'Cheie prefix';
$string['prefix_help'] = 'Aceasta poate fi utilizată pentru a crea un „domeniu” pentru cheile dvs. de articol, permițându-vă să creați mai multe magazine memcached pe o singură instalare memcached. Nu poate depăși 16 caractere pentru a se asigura că problemele cheie de lungime nu sunt întâlnite.';
$string['prefixinvalid'] = 'Prefixul nu este valid. Puteți folosi doar  a-z A-Z 0-9-_.';
$string['privacy:metadata:memcached'] = 'Plugin-ul Memcached cachestore stochează datele pe scurt, ca parte a funcționalității sale de cache. Aceste date sunt stocate pe un server Memcache unde datele sunt eliminate în mod regulat.';
$string['privacy:metadata:memcached:data'] = 'Diferitele date stocate în cache';
$string['serialiser_igbinary'] = 'Serializer igbinary';
$string['serialiser_json'] = 'Serializer JSON';
$string['serialiser_php'] = 'Serializer PHP implicit';
$string['servers'] = 'Servere';
$string['servers_help'] = 'Aceasta setează serverele care ar trebui utilizate de acest adaptor memcached.
Serverele ar trebui să fie definite câte una pe fiecare linie și să fie compuse dintr-o adresă de server și, opțional, un port și o greutate.
Dacă nu este furnizat niciun port, atunci este utilizat portul implicit (11211).

De exemplu:
<pre>
server.url.com
ipaddress: port
servername: port: greutate
</pre>

Dacă mai jos este activat * Activare servere clusterizate *, trebuie să existe un singur server listat aici. Acesta ar fi de obicei un nume care se rezolvă întotdeauna la mașina locală, cum ar fi 127.0.0.1 sau localhost.';
$string['serversclusterinvalid'] = 'Este nevoie de exact un server, atunci când gruparea este activată.';
$string['sessionhandlerconflict'] = 'Avertisment: O instanță memcached ({$a}) a fost configurată pentru a utiliza același server memcached ca sesiunile. Ștergerea tuturor cache-urilor va duce la ștergerea sesiunilor.';
$string['setservers'] = 'Setați serverele';
$string['setservers_help'] = 'Aceasta este lista serverelor care vor fi actualizate atunci când datele sunt modificate în cache. În general, numele complet calificat al fiecărui server din pool.
** trebuie ** să includă serverul listat în * Servere * de mai sus, chiar dacă are un nume de gazdă diferit.
Serverele ar trebui să fie definite câte una pe fiecare linie și să fie compuse dintr-o adresă de server și opțional un port.
Dacă nu este furnizat niciun port, atunci este utilizat portul implicit (11211).

De exemplu:
<pre>
server.url.com
ipaddress: port
</pre>';
$string['testservers'] = 'Testați serverele';
$string['testservers_desc'] = 'Una sau mai multe șiruri de conexiune pentru care serverele memcached trebuie testate. Dacă a fost specificat un server de testare, atunci performanța memorată în memorie poate fi testată folosind pagina de performanță cache din blocul de administrare.
De exemplu: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'Vă recomandăm să vă actualizați extensia PHP Memcached la versiunea 2.0.0 sau o versiune superioară.
Versiunea extensiei Memcached PHP pe care o utilizați în prezent nu oferă funcționalitatea pe care o folosește Moodle pentru a asigura un cache sandboxed. Până când faceți actualizarea, vă recomandăm să nu configurați alte aplicații pentru a utiliza aceleași servere Memcached pentru care este este configurat Moodle.';
$string['usecompression'] = 'Utilizați compresia';
$string['usecompression_help'] = 'Activează sau dezactivează compresia sarcinii utile. Când este activat, valorile articolelor mai lungi decât un anumit prag (în prezent 100 de octeți) vor fi comprimate în timpul stocării și decomprimate în timpul recuperării în mod transparent.';
$string['useserialiser'] = 'Utilizați scrierea în serie';
$string['useserialiser_help'] = 'Specifică serializatorul de utilizat pentru serializarea valorilor non-scalare.
Serializatorii valabili sunt Memcached :: SERIALIZER_PHP sau Memcached :: SERIALIZER_IGBINARY.
Acesta din urmă este acceptat numai atunci când memcached este configurat cu opțiunea --enable-memcached-igbinary și extensia igbinary este încărcată.';
