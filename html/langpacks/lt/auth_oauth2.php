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
 * Strings for component 'auth_oauth2', language 'lt', version '4.5'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Šioje svetainėje jau yra naudotojas su šiuo naudotojo vardu. Jei tai jūsų paskyra, prisijunkite įvesdami savo naudotojo vardą ir slaptažodį ir pridėkite jį kaip susietą prisijungimo vardą savo nuostatų puslapyje.';
$string['alreadylinked'] = 'Ši išorinė paskyra jau susieta su paskyra šioje svetainėje';
$string['auth_oauth2description'] = 'Laikas, kai įvyko veiksmas.';
$string['auth_oauth2settings'] = 'OAuth 2 autentifikavimo nustatymai.';
$string['confirmaccountemail'] = 'Sveiki, {$a->fullname},

Gautas paskyros prašymas „{$a->sitename}“
naudodojantis Jūsų el. pašto adresu.

Norėdami patvirtinti naują paskyrą, eikite į šiuo adresu:

{$a->link}

Daugelyje pašto programų tai turėtų būti mėlyna nuoroda,
kurią galite tiesiog spustelėti. Jei tai neveikia,
tada nukopijuokite adresą į adreso eilutę
interneto naršyklės lango viršuje.

Jei jums reikia pagalbos, susisiekite su svetainės administratoriumi
{$a->admin}

Jei neteikėte užklausos, kažkas kitas gali bandyti įsilaužti į jūsų paskyrą.
Nedelsdami susisiekite su svetainės administratoriumi.';
$string['confirmaccountemailsubject'] = '{$a}: paskyros patvirtinimas';
$string['confirmationinvalid'] = 'Patvirtinimo nuoroda yra netinkama arba pasibaigė. Prašome vėl pradėti prisijungimo procesą, kad sugeneruotumėte naują patvirtinimo el. laišką.';
$string['confirmationpending'] = 'Laukiama šios paskyros patvirtinimo el. paštu.';
$string['confirmlinkedloginemail'] = 'Sveiki, {$a->fullname},

Buvo pateikta užklausa susieti {$a->issuername} prisijungimo duomenis
{$a->linkedemail} su jūsų paskyrą adresu „{$a->sitename}“
naudojant jūsų el. pašto adresą.

Norėdami patvirtinti šią užklausą ir susieti šiuos prisijungimus, eikite šiuo interneto adresu:

{$a->link}


Daugumoje pašto programų tai turėtų būti rodoma kaip mėlyna nuoroda,
kurią galite tiesiog spustelėti. Jei tai neveikia,
tada iškirpkite ir įklijuokite adresą į adreso
eilutę interneto naršyklės lango viršuje.

Jei reikia pagalbos, susisiekite su svetainės administratoriumi,
{$a->admin}

Jei neteikėte užklausos, kažkas kitas gali bandyti įsilaužti į jūsų paskyrą.
Nedelsdami susisiekite su svetainės administratoriumi.';
$string['confirmlinkedloginemailsubject'] = '{$a}: susieto prisijungimo patvirtinimas';
$string['createaccountswarning'] = 'Šis autentifikavimo papildinys leidžia naudotojams kurti paskyras jūsų svetainėje. Jei naudojate šį papildinį, galbūt norėsite įjungti nustatymą „authpreventaccountcreation“.';
$string['createnewlinkedlogin'] = 'Susieti naują paskyrą ({$a})';
$string['emailconfirmlink'] = 'Susieti savo paskyras';
$string['emailconfirmlinksent'] = '<p>Su šiuo el. pašto adresu rasta esama paskyra, bet ji dar nesusieta.</p>
    <p>Prieš prisijungiant, paskyros turi būti susietos.</p>
    <p>Jūsų adresu <b>{$a}</b> turėjo būti išsiųstas el. laiškas.</p>
    <p>Jame pateikiamos paprastos instrukcijos, kaip susieti paskyras.</p>
    <p>Jei kyla sunkumų, susisiekite su svetainės administratoriumi.</p>';
$string['emailpasswordchangeinfo'] = 'Sveiki, {$a->firstname},

Kažkas (tikriausiai jūs) paprašė naujo jūsų paskyros slaptažodžio svetainėje „{$a->sitename}“.

Tačiau slaptažodžio iš naujo nustatyti negalima, nes prisijungdami kitoje svetainėje naudojate savo paskyrą.

Prisijunkite kaip anksčiau, naudodami prisijungimo puslapyje esančią nuorodą.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: slaptažodžio keitimo informacija';
$string['info'] = 'Išorinė paskyra';
$string['issuer'] = 'Paslauga „OAuth 2“';
$string['issuernologin'] = 'Šis išdavėjas negali būti naudojamas prisijungimui';
$string['key'] = 'Raktas';
$string['linkedlogins'] = 'Susieti prisijungimai';
$string['linkedloginshelp'] = 'Pagalba su susietais prisijungimais';
$string['loggedin'] = 'Naudotojas sėkmingai autentifikuotas su teikėju.';
$string['loginerror_authenticationfailed'] = 'Autentifikavimo procesas nepavyko.';
$string['loginerror_cannotcreateaccounts'] = 'Nepavyko rasti paskyros su jūsų el. pašto adresu.';
$string['loginerror_invaliddomain'] = 'El. pašto adresas šioje svetainėje neleidžiamas.';
$string['loginerror_nouserinfo'] = 'Jokia naudotojo informacija nebuvo grąžinta. „OAuth 2“ paslauga gali būti sukonfigūruota neteisingai.';
$string['loginerror_userincomplete'] = 'Pateiktoje naudotojo informacijoje nebuvo naudotojo vardo ir el. pašto adreso. „OAuth 2“ paslauga gali būti sukonfigūruota neteisingai.';
$string['noconfiguredidps'] = 'Nėra sukonfigūruotų OAuth2 teikėjų.';
$string['noissuersavailable'] = 'Nė viena iš sukonfigūruotų „OAuth 2“ paslaugų neleidžia susieti prisijungimo paskyrų.';
$string['notenabled'] = 'Atsiprašome, OAuth 2 autentifikavimo papildinys neįjungtas';
$string['notloggedindebug'] = 'Bandymas prisijungti nepavyko. Priežastis: {$a}';
$string['notwhileloggedinas'] = 'Susietų prisijungimų negalima valdyti, kai esate prisijungę kaip kitas naudotojas.';
$string['oauth2:managelinkedlogins'] = 'Tvarkyti savo susietas prisijungimo paskyras';
$string['plugindescription'] = 'Šis autentifikavimo papildinys prisijungimo puslapyje rodo sukonfigūruotų tapatybės teikėjų sąrašą. Pasirinkę tapatybės teikėją, naudotojai gali prisijungti naudodami savo kredencialus iš OAuth 2 teikėjo.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'OAuth 2 autentifikavimas';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Šis papildinys yra prijungtas prie autentifikavimo posistemio.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'Patvirtinimo prieigos raktas.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'Laiko žyma, kai baigiasi patvirtinimo prieigos rakto galiojimo laikas.';
$string['privacy:metadata:auth_oauth2:email'] = 'Išorinis el. pašto adresas, susietas su šia paskyra.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'OAuth 2 išdavėjo ID šiam OAuth 2 prisijungimui';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = '„OAuth 2“ paskyros, susietos su naudotojo „Moodle“ paskyra.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Laiko žyma, kai naudotojo paskyra buvo susieta su OAuth 2 prisijungimu.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'Laiko žyma, kai šis įrašas buvo modifikuotas.';
$string['privacy:metadata:auth_oauth2:userid'] = 'Naudotojo paskyros, su kuria susietas OAuth 2 prisijungimas, ID.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'Naudotojo, pakeitusio šią paskyrą, ID.';
$string['privacy:metadata:auth_oauth2:username'] = 'Išorinis naudotojo vardas, susietas su šia paskyra.';
$string['testidplogin'] = 'Išbandyti prisijungimą su:';
$string['userinfo'] = 'Naudotojo duomenys iš teikėjo:';
$string['value'] = 'Vertė';
