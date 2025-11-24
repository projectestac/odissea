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
 * Strings for component 'auth_db', language 'lt', version '4.5'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'Nepavyksta prisijungti prie išorinės duomenų bazės.';
$string['auth_dbcannotreadtable'] = 'Neįmanoma nuskaityti išorinės lentelės.';
$string['auth_dbcantconnect'] = 'Nepavyko prisijungti prie nurodytos autentifikavimo duomenų bazės...';
$string['auth_dbchangepasswordurl_key'] = 'Slaptažodžio keitimo URL';
$string['auth_dbcolumnlist'] = 'Išorinėje lentelėje yra šie stulpeliai:<br />{$a}';
$string['auth_dbdebugauthdb'] = 'Derinti „ADOdb“';
$string['auth_dbdebugauthdbhelp'] = 'Derinti „ADOdb“ ryšį su išorine duomenų baze – naudokite, jei prisijungdami gaunate tuščią puslapį. Netinka gamybos svetainėms.';
$string['auth_dbdeleteuser'] = 'Panaikinto naudotojo {$a->name} ID {$a->id}';
$string['auth_dbdeleteusererror'] = 'Klaida trinant naudotoją {$a}';
$string['auth_dbdescription'] = 'Šis metodas naudoja išorinę duomenų bazę pateikto naudotojo vardo ir slaptažodžio tinkamui patikrinti. Jei paskyra yra nauja, tada kitų laukų informacija taip pat gali būti nukopijuota į „Moodle“.';
$string['auth_dbextencoding'] = 'Išorinės duomenų bazės kodavimas';
$string['auth_dbextencodinghelp'] = 'Išorinėje duomenų bazėje naudojamas kodavimas';
$string['auth_dbextrafields'] = 'Šie laukai yra pasirinktiniai. Galite iš anksto užpildyti kai kuriuos „Moodle“ naudotojų laukus informacija iš <b>išorinės duomenų bazės laukų</b>, nurodytų čia. <p>Jei paliksite tuščią, bus naudojamos numatytosios reikšmės.</p><p>Bet kuriuo atveju naudotojas prisijungęs galės redaguoti visus šiuos laukus.</p>';
$string['auth_dbfieldpass'] = 'Lauko su slaptažodžiais pavadinimas';
$string['auth_dbfieldpass_key'] = 'Slaptažodžio laukas';
$string['auth_dbfielduser'] = 'Lauko, kuriame yra naudotojo vardai, pavadinimas. Šis laukas turi būti įvairių tipų.';
$string['auth_dbfielduser_key'] = 'Naudotojo vardo laukas';
$string['auth_dbhost'] = 'Kompiuteris, kuriame yra duomenų bazės serveris. Jei naudojate ODBC, naudokite sistemos DSN įrašą. Jei naudojate SKVN, naudokite SKVN DSN įrašą.';
$string['auth_dbhost_key'] = 'Pagrindinis kompiuteris';
$string['auth_dbinsertuser'] = 'Įterpto naudotojo {$a->name} ID {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'Klaida įterpiant naudotoją {$a->username} – naudotojas su šiuo naudotojo vardu jau buvo sukurtas naudojant „{$a->auth}“ papildinį.';
$string['auth_dbinsertusererror'] = 'Klaida įterpiant naudotoją {$a}';
$string['auth_dbname'] = 'Pačios duomenų bazės pavadinimas. Palikite tuščią, jei naudojate ODBC DSN. Palikite tuščią, jei jūsų SKVN DSN jau yra duomenų bazės pavadinimas.';
$string['auth_dbname_key'] = 'Duomenų bazės pavadinimas';
$string['auth_dbnoexttable'] = 'Išorinė lentelė nenurodyta.';
$string['auth_dbnouserfield'] = 'Išorinis naudotojo laukas nenurodytas.';
$string['auth_dbpass'] = 'Slaptažodis, atitinkantis aukščiau pateiktą naudotojo vardą';
$string['auth_dbpass_key'] = 'Slaptažodis';
$string['auth_dbpasstype'] = '<p>Nurodykite formatą, kurį naudoja slaptažodžio laukas.</p> <p>Jei norite, kad išorinė duomenų bazė tvarkytų naudotojų vardus ir el. pašto adresus, o „Moodle“ – slaptažodžius, naudokite „vidinį“. Jei naudojate „vidinį“, išorinėje duomenų bazėje turite pateikti užpildytą el. pašto adreso lauką ir įgalinti suplanuotą užduotį \\auth_db\\task\\sync_users. Moodle naujiems naudotojams išsiųs el. laišką su laikinu slaptažodžiu.</p>';
$string['auth_dbpasstype_key'] = 'Slaptažodžio formatas';
$string['auth_dbreviveduser'] = 'Atkurto naudotojo {$a->name} ID {$a->id}';
$string['auth_dbrevivedusererror'] = 'Klaida bandant atkurti naudotoją {$a}';
$string['auth_dbsaltedcrypt'] = 'Kripto vienpusė eilutės maiša';
$string['auth_dbsetupsql'] = 'SQL nustatymo komanda';
$string['auth_dbsetupsqlhelp'] = 'SQL komanda specialiam duomenų bazės nustatymui atlikti, dažnai naudojama nustatyti ryšio kodavimą, pvz., „MySQL“ ir „PostgreSQL“: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Sulaikyto naudotojo {$a->name} ID {$a->id}';
$string['auth_dbsuspendusererror'] = 'Klaida bandant sulaikyti naudotoją {$a}';
$string['auth_dbsybasequoting'] = 'Naudoti „Sybase“ kabutes';
$string['auth_dbsybasequotinghelp'] = '„Sybase“ stiliaus vienguba kabutė: reikalinga „Oracle“, MS SQL ir kai kuriose kitose duomenų bazėse. Nenaudoti „MySQL“!';
$string['auth_dbsyncuserstask'] = 'Sinchronizuoti naudotojo užduotį';
$string['auth_dbtable'] = 'Duomenų bazės lentelės pavadinimas';
$string['auth_dbtable_key'] = 'Lentelė';
$string['auth_dbtableempty'] = 'Išorinė lentelė tuščia.';
$string['auth_dbtype'] = 'Duomenų bazės tipas (daugiau informacijos ieškokite <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">„ADOdb - Database Abstraction Layer for PHP“</a> dokumentacijoje).';
$string['auth_dbtype_key'] = 'Duomenų bazė';
$string['auth_dbupdateerror'] = 'Klaida atnaujinant išorinę duomenų bazę.';
$string['auth_dbupdateusers'] = 'Atnaujinti naudotojus';
$string['auth_dbupdateusers_description'] = 'Be naujų naudotojų įterpimo, atnaujinti esamus naudotojus.';
$string['auth_dbupdatinguser'] = 'Naujinamas naudotojo {$a->name} ID {$a->id}';
$string['auth_dbuser'] = 'Naudotojo vardas, kuriam suteikta duomenų bazės skaitymo prieiga';
$string['auth_dbuser_key'] = 'Duomenų bazės naudotojas';
$string['auth_dbuserstoadd'] = 'Įtrauktini naudotojų įrašai: {$a}';
$string['auth_dbuserstoremove'] = 'Šalintini naudotojų įrašai: {$a}';
$string['pluginname'] = 'Tiesioginiai žurnalai';
$string['privacy:metadata'] = 'Išorinės duomenų bazės autentifikavimo papildinys nesaugo jokių asmeninių duomenų.';
