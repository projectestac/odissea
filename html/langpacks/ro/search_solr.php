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
 * Strings for component 'search_solr', language 'ro', version '4.5'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'Serverul Solr specificat nu este disponibil sau indexul specificat nu există';
$string['connectionsettings'] = 'Setări ale conexiunii';
$string['errorcreatingschema'] = 'Eroare la crearea schemei Solr: {$a}';
$string['errorsolr'] = 'Motorul de căutare Solr a raportat o eroare: {$a}';
$string['errorvalidatingschema'] = 'Eroare la validarea schemei Solr: câmpul {$a->fieldname} nu există. Vă rugăm să <a href="{$a->setupurl} "> urmați acest link </a> pentru a configura câmpurile obligatorii.';
$string['extensionerror'] = 'Extensia Apache Solr PHP nu este instalată. Vă rugăm să verificați documentația.';
$string['fileindexing'] = 'Activați indexarea fișierului';
$string['fileindexing_help'] = 'Dacă instalarea Solr o acceptă, această caracteristică permite Moodle să trimită fișiere care să fie indexate. <br/>
Va trebui să reindexați tot conținutul site-ului după ce activați această opțiune pentru toate fișierele care trebuie adăugate.';
$string['fileindexsettings'] = 'Setări pentru indexarea fișierului';
$string['maxindexfilekb'] = 'Dimensiunea maximă a fișierului de indexat (kB)';
$string['maxindexfilekb_help'] = 'Fișierele mai mari decât acest număr de kilobyți nu vor fi incluse în indexarea căutării. Dacă este setat la zero, fișierele de orice dimensiune vor fi indexate.';
$string['minimumsolr4'] = 'Solr 4.0 este versiunea minimă necesară pentru Moodle.';
$string['missingconfig'] = 'Serverul dvs. Apache Solr nu este configurat încă în Moodle.';
$string['multivaluedfield'] = 'Câmpul „{$a}” a returnat o matrice în loc de un scalar. Ștergeți indexul curent, creați unul nou și rulați setup_schema.php înainte de indexarea datelor în Solr.';
$string['nodatafromserver'] = 'Nu există date de la server';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Acest plugin trimite date extern către un motor de căutare Solr conectat. Nu stochează date local.';
$string['privacy:metadata:data'] = 'Datele personale trecute din subsistemul de căutare.';
$string['schemafieldautocreated'] = 'Câmpul „{$a}” există deja în schema Solr. Probabil că ați uitat să rulați acest script înainte ca datele de indexare și câmpurile să fie create automat de Solr. Ștergeți indexul curent, creați unul nou și rulați din nou setup_schema.php înainte de indexarea datelor în Solr.';
$string['schemasetupfromsolr5'] = 'Versiunea serverului dvs. Solr este mai mică decât 5.0. Acest script vă poate seta schema numai dacă versiunea Solr este 5.0 sau mai mare. Trebuie să setați manual câmpurile din schema dvs. în conformitate cu  \\search_solr\\document::get_default_fields_definition().';
$string['searchinfo'] = 'Interogări de căutare';
$string['searchinfo_help'] = 'Câmpul care trebuie căutat poate fi specificat prin prefixarea interogării de căutare cu \'title:\', \'content:\', \'name:\' sau \'intro:\'. De exemplu, căutarea „titlu: știri” ar întoarce rezultate cu cuvântul „știri” în titlu.

Operatorii booleeni („ȘI”, „SAU”, „NU”) pot fi folosiți pentru a combina sau exclude cuvinte cheie.

Caracterele comodine („*” sau „?”) Pot fi folosite pentru a reprezenta caractere în interogarea de căutare.';
$string['setupok'] = 'Schema este gata de utilizare.';
$string['solrauthpassword'] = 'Parolă pentru autentificarea HTTP';
$string['solrauthuser'] = 'Numele de utilizator de autentificare HTTP';
$string['solrhttpconnectionport'] = 'Port';
$string['solrhttpconnectiontimeout'] = 'Timeout';
$string['solrhttpconnectiontimeout_desc'] = 'Timpul de expirare a conexiunii HTTP este timpul maxim în secunde permis pentru operațiunea de transfer de date HTTP.';
$string['solrindexname'] = 'Numele indexului';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Motorul Solr nu este motorul de căutare configurat';
$string['solrsecuremode'] = 'Mod safe';
$string['solrserverhostname'] = 'Numele gazdei';
$string['solrserverhostname_desc'] = 'Numele domeniului pe serverul Solr';
$string['solrsetting'] = 'Setări Solr';
$string['solrsslcainfo'] = 'Numele certificatelor SSL CA';
$string['solrsslcainfo_desc'] = 'Numele fișierului care deține unul sau mai multe certificate CA pentru a verifica peer cu';
$string['solrsslcapath'] = 'Calea certificatelor SSL CA.';
$string['solrsslcapath_desc'] = 'Calea directorului care deține mai multe certificate CA pentru a verifica peer cu';
$string['solrsslcert'] = 'Certificat SSL';
$string['solrsslcert_desc'] = 'Numele fișierului către un certificat privat formatat de PEM';
$string['solrsslkey'] = 'Cheie SSL';
$string['solrsslkey_desc'] = 'Numele fișierului către o cheie privată formatată PEM';
$string['solrsslkeypassword'] = 'Parola SSL key';
$string['solrsslkeypassword_desc'] = 'Parola pentru fișierul cu cheie privată formatat PEM';
