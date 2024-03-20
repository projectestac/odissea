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
 * Strings for component 'url', language 'ro', version '4.1'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Alegeți o variabilă...';
$string['clicktoopen'] = 'Dați click pe {$a} pentru a deschide resursa.';
$string['configdisplayoptions'] = 'Selectați toate opțiunile care ar trebui să fie disponibile, setările existente nu sunt modificate. Țineți apăsată tasta CTRL pentru a selecta mai multe câmpuri.';
$string['configframesize'] = 'Când o pagină web sau un fișier încărcat este afișat într-un cadru, această valoare este înălțimea (în pixeli) a cadrului superior (care conține navigarea).';
$string['configrolesinparams'] = 'Denumirile de rol personalizate (din setările cursului) ar trebui să fie disponibile ca variabile pentru parametrii URL?';
$string['configsecretphrase'] = 'Această frază secretă este utilizată pentru a produce o valoare codată criptată care poate fi trimisă unor servere ca parametru. Codul criptat este produs de o valoare md5 a adresei IP a utilizatorului curent concatenată cu fraza secretă. adică cod = md5 (IP.secretphrase). Vă rugăm să rețineți că acest lucru nu este fiabil, deoarece adresa IP se poate modifica și este adesea partajată de diferite computere.';
$string['contentheader'] = 'Conținut';
$string['createurl'] = 'Creați un URL';
$string['displayoptions'] = 'Opțiuni de afișare disponibile';
$string['displayselect'] = 'Afișare';
$string['displayselect_help'] = 'Această setare, împreună cu tipul de fișier al Legăturii și dacă browserul permite încorporarea, determină modul în care este afișată adresa URL. Opțiunile pot include:

* Automat - Cea mai bună opțiune de afișare pentru adresa Legăturii este selectată automat
* Încorporat - Legătura este afișată în pagina de sub bara de navigare împreună cu descrierea Legăturii și orice alte blocuri
* Deschis - Numai adresa Legăturii este afișată în fereastra browserului
* În fereastră pop-up - Adresa Legăturii este afișată într-o fereastră nouă a browserului fără meniuri sau bară de adrese
* În cadru - Legătura este afișată într-un cadru sub bara de navigare împreună cu descrierea adresei Legăturii
* Fereastră nouă - Legătura este afișată într-o fereastră nouă a browserului cu meniuri și o bară de adrese';
$string['displayselectexplain'] = 'Alegeți tipul de afișare, din păcate nu toate tipurile sunt potrivite pentru toate Legăturile.';
$string['externalurl'] = 'Legătură externă';
$string['framesize'] = 'Înălțimea cadrului';
$string['indicator:cognitivedepth'] = 'Legătură cognitivă';
$string['indicator:cognitivedepth_help'] = 'Acest indicator se bazează pe profunzimea cognitivă atinsă de student într-o resursă de tip Legătură.';
$string['indicator:cognitivedepthdef'] = 'Legătură cognitivă';
$string['indicator:cognitivedepthdef_help'] = 'Participantul a atins acest procent din implicarea cognitivă oferită de resursele URL în timpul acestui interval de analiză (Nivele = Fără vizualizare, Vizualizare)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Legătură socială';
$string['indicator:socialbreadth_help'] = 'Acest indicator se bazează pe lățimea socială atinsă de cursant într-o  resursă de tip Legătură';
$string['indicator:socialbreadthdef'] = 'Legătură socială';
$string['indicator:socialbreadthdef_help'] = 'Participantul a atins acest procent din implicarea socială oferită de resursele Legătură în timpul acestui interval de analiză (niveluri = Fără participare, participant doar)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'Nu se poate afișa resursa, Legătura nu este validă';
$string['invalidurl'] = 'Legătura inserată nu este validă';
$string['modulename'] = 'Legătură';
$string['modulename_help'] = 'Resursa de tip Legătura permite profesorului să furnizeze o Legătură web ca resursă de curs. Orice lucru disponibil gratuit online, cum ar fi documente sau imagini, poate fi conectat la; adresa Legăturii nu trebuie să fie neapărat pagina de pornire a unui site web. Adresa Legăturii unei anumite pagini web poate fi copiată și lipită sau un profesor poate folosi selectorul de fișiere și poate alege o Legătură dintr-un depozit, cum ar fi Flickr, YouTube sau Wikimedia (în funcție de ce depozite sunt activate pentru site).

Există o serie de opțiuni de afișare pentru adresa Legăturii, cum ar fi încorporarea sau deschiderea într-o fereastră nouă și opțiuni avansate pentru transmiterea informațiilor, cum ar fi numele unui cursant, la adresa Legăturii, dacă este necesar.

Rețineți că adresele Legăturilor pot fi adăugate la orice altă resursă sau tip de activitate prin intermediul editorului de text.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'Legături';
$string['name'] = 'Denumire';
$string['name_help'] = 'Acesta va servi drept text de legătură pentru adresa URL.

Introduceți un text semnificativ care descrie concis scopul adresei URL.

Evitați să folosiți cuvântul „link”. Acest lucru va ajuta utilizatorii cititorilor de ecran, deoarece cititorii de ecran anunță linkuri (de exemplu, „Moodle.org, link”), astfel încât nu este nevoie să includeți cuvântul „link” în câmpul de nume.';
$string['page-mod-url-x'] = 'Orice pagină a modulului Legătură';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'Variabile Legătură';
$string['parametersheader_help'] = 'Această secțiune vă permite să transmiteți informații interne ca parte a adresei URL. Acest lucru este util dacă adresa URL este o pagină web interactivă care preia parametri și doriți să transmiteți ceva precum numele utilizatorului curent, de exemplu. Introduceți numele parametrului URL-ului în caseta de text, apoi selectați variabila de site corespunzătoare.';
$string['pluginadministration'] = 'Administrare modul Legătură';
$string['pluginname'] = 'Legătură';
$string['popupheight'] = 'Înălțime pop-up (în pixeli)';
$string['popupheightexplain'] = 'Specifică înălțimea implicită a ferestrelor pop-up.';
$string['popupwidth'] = 'Lățime width (în pixeli)';
$string['popupwidthexplain'] = 'Specifică lățimea implicită a ferestrelor pop-up.';
$string['printintro'] = 'Afișează descriere Legătură';
$string['printintroexplain'] = 'Afișați descrierea Legăturii ub conținut? Este posibil ca unele tipuri de afișare să nu afișeze descrierea chiar dacă sunt activate.';
$string['privacy:metadata'] = 'Plugin-ul Legătură nu stochează date personale.';
$string['rolesinparams'] = 'Denumirea rolurilor ca variabile URL';
$string['search:activity'] = 'Legătură';
$string['serverurl'] = 'Legătură server';
$string['url:addinstance'] = 'Adăugați o nouă resursă Legătură';
$string['url:view'] = 'Vizualizare Legătură';
