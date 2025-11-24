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
 * Strings for component 'ai', language 'ro', version '4.5'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Acceptă și continuă';
$string['action'] = 'Acțiune';
$string['action_generate_image'] = 'Generează imagine';
$string['action_generate_image_desc'] = 'Generează o imagine bazată pe textul unui prompt.';
$string['action_generate_text'] = 'Generează text';
$string['action_generate_text_desc'] = 'Generează text bazat pe textul unui prompt.';
$string['action_generate_text_instruction'] = 'Veți primi un text inserat de utilizator. Sarcina ta este să generezi un text bazat pe cererea utilizatorului. Urmează aceste instrucțiuni importante:
    1. Textul returnat este doar în format text.
    2. Nu se include text formatat.';
$string['action_summarise_text'] = 'Sumarizați textul';
$string['action_summarise_text_desc'] = 'Sumarizează conținutul textului dintr-o pagină de curs.';
$string['action_summarise_text_instruction'] = 'Vei primi un text introdus de la utilizator. Sarcina ta este de a rezuma textul furnizat. Urmați aceste instrucțiuni:
 1. Condensează: scurtează pasajele lungi în puncte cheie.
 2. Simplifică: fă informațiile complexe mai ușor de înțeles, în special pentru cursanți.

Instrucțiuni importante:
 1. Returnează rezumatul numai în format text simplu.
 2. Nu include nicio formatare
 3. Concentrează-te pe claritate, concizie și accesibilitate.

Asigură-te că rezumatul este ușor de citit și transmite în mod eficient punctele principale ale textului original.';
$string['action_translate_text'] = 'Traduceți textul';
$string['action_translate_text_desc'] = 'Traduceți textul furnizat dintr-o limbă în alta.';
$string['actionsettingprovider'] = '{$a} setări acțiune';
$string['actionsettingprovider_desc'] = 'Aceste setări controlează modul în care {$a->providername} execută acțiunea {$a->actionname}.';
$string['ai'] = 'AI';
$string['aiplacements'] = 'Locații AI';
$string['aiproviders'] = 'Furnizori AI';
$string['aiusagepolicy'] = 'Politica de utilizare a AI';
$string['availableplacements'] = 'Alege unde sunt disponibile acțiunile AI';
$string['availableplacements_desc'] = 'Locațiile definesc cum și unde acțiunile AI pot fi folosite în platformă. Poți alege care acțiuni sunt disponibile în fiecare locație prin setări.';
$string['availableproviders'] = 'Administrează furnizorii de AI conectați cu platforma';
$string['availableproviders_desc'] = 'Furnizorii AI adaugă funcționalități AI în platformă prin \'acțiuni\' cum sunt sumarizarea textului și generarea de imagini.<br/>
Poți administra acțiunile pentru fiecare furnizor în setări.';
$string['contentwatermark'] = 'Generat de AI';
$string['declineaipolicy'] = 'Refuză';
$string['manageaiplacements'] = 'Administrare locații AI';
$string['manageaiproviders'] = 'Administrare furnizori AI';
$string['noproviders'] = 'Această acțiune este indisponibilă. Niciunul din <a href="{$a}">furnizorii AI</a> nu este configurat pentru această acțiune.';
$string['placement'] = 'Locație';
$string['placementactionsettings'] = 'Acțiuni';
$string['placementactionsettings_desc'] = 'Acțiunile AI disponibile pentru această locație.';
$string['placementsettings'] = 'Setări specifice ale locației';
$string['placementsettings_desc'] = 'Aceste setări controlează modalitatea în care Ai placements se conectează la serviciile Ai și operațiunile conexe.';
$string['privacy:metadata:ai_action_generate_image'] = 'Un tabel care stochează cererile de generare de imagini făcute de utilizatori.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'Aspectul imaginilor generate.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'Numărul de imagini generate';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'Promptul pentru cererile de generare de imagini.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'Calitatea imaginilor generate.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'Promptul revizuit al imaginilor generate.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'Sursa URL a imaginilor generate.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'Stilul imaginilor generate';
$string['privacy:metadata:ai_action_generate_text'] = 'Un tabel care stochează cererile de generare de text făcute de utilizatori.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'Jetoane de finalizare utilizate pentru a genera text.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'Cheia de securitate unică reprezentând statusul/versiunea modelului și conținutului.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'Textul generat de modelul AI bazat pe promptul utilizatorului.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'Promptul pentru generarea textului.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'Jetoanele promptului folosite pentru a genera textul.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'ID-ul răspunsului';
$string['privacy:metadata:ai_action_register'] = 'Un tabel care stochează cererile de acțiuni făcute de utilizatori.';
$string['privacy:metadata:ai_action_register:actionid'] = 'ID-ul acțiunii de solicitare.';
$string['privacy:metadata:ai_action_register:actionname'] = 'Denumirea acțiunii de solicitare.';
$string['privacy:metadata:ai_action_register:provider'] = 'Denumirea furnizorului care a gestionat cererea.';
$string['privacy:metadata:ai_action_register:success'] = 'Status-ul acțiunii de solicitare.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'Timpul de finalizare a cererii.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'Data și oră creării solicitării.';
$string['privacy:metadata:ai_action_register:userid'] = 'ID-ul utilizatorului care a făcut solicitării.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Un tabel care stochează cererile sumarizate făcute de utilizatori.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Jetoanele de finalizare utilizate pentru a sumariza textul.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'Cheia de securitate unică reprezentând statusul/versiunea modelului și conținutului.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'Textul generat de modelul AI bazat pe promptul introdus.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'Promptul pentru cererile sumarizate.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'Jetoanele promptului utilizate pentru a rezuma textul.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'ID-ul răspunsului';
$string['privacy:metadata:ai_policy_register'] = 'Un tabel care stochează statusul acceptării politicii AI pentru fiecare utilizator.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'ID-ul contextului ale cărui date au fost salvate.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'Data și ora când utilizatorul a acceptat politica AI.';
$string['privacy:metadata:ai_policy_register:userid'] = 'ID-ul utilizatorului ale cărui date au fost salvate.';
$string['provider'] = 'Furnior';
$string['provideractionsettings'] = 'Acțiuni';
$string['provideractionsettings_desc'] = 'Alegeți și configurați acțiunile pe care {$a} le poate efectua pe site.';
$string['providers'] = 'Furnizori';
$string['providersettings'] = 'Setări';
$string['userpolicy'] = '<h4><strong>Bine ai venit la noua funcție AI!</strong></h4>
<p>Această funcție de Inteligență Artificială (AI) se bazează exclusiv pe modele externe de limbaje mari (LLM) pentru a vă îmbunătăți experiența de învățare și predare. Înainte de a începe să utilizați aceste servicii AI, vă rugăm să citiți această politică de utilizare.</p>
<h4><strong>Acuratețea conținutului generat de AI</strong></h4>
<p>AI poate oferi sugestii și informații utile, dar precizia sa poate varia. Ar trebui să verificați întotdeauna informațiile furnizate pentru a vă asigura că sunt exacte, complete și potrivite pentru situația dvs. specifică.</p>
<h4><strong>Cum sunt procesate datele dvs.</strong></h4>
<p>Această funcție AI folosește modele externe de limbaje mari (LLM). Dacă utilizați această funcție, orice informații sau date personale pe care le distribuiți vor fi tratate conform politicii de confidențialitate a acelor LLM-uri. Vă recomandăm să citiți politica lor de confidențialitate pentru a înțelege cum vor trata datele dvs. În plus, pe acest site poate fi salvată o înregistrare a interacțiunilor dvs. cu funcțiile AI.</p>
<p>Dacă aveți întrebări despre modul în care sunt procesate datele dvs., vă rugăm să vă adresați profesorilor sau organizației în care învățați..</p>
<p>Continuând, confirmați că înțelegeți și sunteți de acord cu această politică.</p>';
