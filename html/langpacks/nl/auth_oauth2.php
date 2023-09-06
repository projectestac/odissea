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
 * Strings for component 'auth_oauth2', language 'nl', version '4.1'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Er bestaat al een gebruiker op deze site met deze gebruikersnaam. Als dit jouw account is, log dan in met je gebruikersnaam een wachtwoord en voeg het toe als gekoppelde login via je voorkeurenpagina.';
$string['alreadylinked'] = 'Deze externe account is al gekoppeld aan een account op deze site';
$string['auth_oauth2description'] = 'OAuth 2 standaarden gebaseerde authenticatie';
$string['auth_oauth2settings'] = 'OAuth 2 authenticatie-instellingen';
$string['confirmaccountemail'] = 'Hallo {$a->fullname},

Er is een nieuwe account voor jou aangevraagd op \'{$a->sitename}\' met jouw e-mailadres.

Ga naar volgend webadres om je account te bevestigen:

{$a->link}

In de meeste e-mailprogramma\'s zou dit als een blauwe link moeten verschijnen waarop je gewoon kan klikken. Als dat niet werkt, knip en plak het adres dan in de adresbalk bovenaan je webbrowser.

Als je hulp nodig hebt, contacteer dan de site-beheerder,
{$a->admin}

Als je geen nieuwe account hebt aangevraagd, dan is het mogelijk dat iemand misbruik wil maken van je account. Contacteer dan onmiddellijk de site-beheerder.';
$string['confirmaccountemailsubject'] = '{$a}: accountbevestiging';
$string['confirmationinvalid'] = 'De bevestigingslink is ongeldig of verlopen. Start het login proces opnieuw om een nieuwe bevestigingslnk te genereren.';
$string['confirmationpending'] = 'Deze account wacht op bevestiging via e-mail';
$string['confirmlinkedloginemail'] = 'Hallo {$a->fullname},

Er is gevraagd om de account {$a->issuername} te koppelen aan jouw account {$a->linkedemail} op \'{$a->sitename}\' met jouw e-mailadres.

Ga om deze vraag te te bevestigen en deze accounts te koppelen naar volgend webadres:

{$a->link}

In de meeste e-mailprogramma\'s zou dit als een blauwe link moeten verschijnen waarop je gewoon kan klikken. Als dat niet werkt, knip en plak het adres dan in de adresbalk bovenaan je webbrowser.

Als je hulp nodig hebt, contacteer dan de site-beheerder,
{$a->admin}

Als je geen nieuwe account hebt aangevraagd, dan is het mogelijk dat iemand misbruik wil maken van je account. Contacteer dan onmiddellijk de site-beheerder.';
$string['confirmlinkedloginemailsubject'] = '{$a}: bevestiging gekoppelde aanmelding';
$string['createaccountswarning'] = 'Met deze authenticatieplugin kunnen gebruikers zelf een account maken op jouw site. Misschien wil je de instelling "authpreventaccountcreation" inschakelen om dit te voorkomen wanneer je deze plugin gebruikt.';
$string['createnewlinkedlogin'] = 'Koppel een nieuwe account ({$a})';
$string['emailconfirmlink'] = 'Koppel je accounts';
$string['emailconfirmlinksent'] = '<p>Er is een bestaande account gevonden met dit e-mailadres, maar die is nog niet gekoppeld.</p>
   <p>De accounts moeten gekoppeld worden voor je kan aanmelden.</p>
   <p>Er is een e-mail verzonden naar jouw adres: <b>{$a}</b>.</p>
   <p>Die bevat eenvoudige instructies om je accounts te koppelen</p>
   <p>Als je moeilijkheden hebt, neem dan contact op met je site-beheerder.</p>';
$string['emailpasswordchangeinfo'] = 'Hallo {$a->firstname},

Iemand (waarschijnlijk jij) heeft een nieuw wachtwoord voor je account aangevraagd op \'{$a->sitename}\'.

Uw wachtwoord kan echter niet worden gereset omdat u uw account gebruikt.

Meld u alstublieft aan zoals eerder, via de link op de inlogpagina.
{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: Informatie over wachtwoordwijziging';
$string['info'] = 'Externe account';
$string['issuer'] = 'OAuth 2 service';
$string['issuernologin'] = 'Deze uitgever kan niet gebruikt worden om in te loggen';
$string['key'] = 'Sleutel';
$string['linkedlogins'] = 'Gekoppelde logins';
$string['linkedloginshelp'] = 'Hulp bij gekoppelde logins';
$string['loggedin'] = 'Authenticatie van de gebruiker met de provider is gelukt.';
$string['loginerror_authenticationfailed'] = 'Het authenticatieproces is mislukt';
$string['loginerror_cannotcreateaccounts'] = 'Er is geen account met jouw e-mailadres gevonden.';
$string['loginerror_invaliddomain'] = 'Het e-mailadres is niet toegestaan op deze site.';
$string['loginerror_nouserinfo'] = 'Er is geen gebruikersinformatie teruggegeven. De OAuth 2 service is misschien niet juist geconfigureerd.';
$string['loginerror_userincomplete'] = 'De teruggekregen gebruikersinformatie bevat geen gebruikersnaam en e-mailadres. De OAuth 2 service is misschien niet juist geconfigureerd.';
$string['noconfiguredidps'] = 'Er zijn geen OAuth2-providers.';
$string['noissuersavailable'] = 'Geen van de geconfigureerde OAuth2 services staat je toe om accounts te koppelen.';
$string['notenabled'] = 'Sorry, de OAuth2 authenticatieplugin is niet ingeschakeld';
$string['notloggedindebug'] = 'De loginpoging is mislukt. Reden {$a}';
$string['notwhileloggedinas'] = 'Gekoppelde logins kunnen niet beheerd worden terwijl je aangemeld bent als een andere gebruiker.';
$string['oauth2:managelinkedlogins'] = 'Beheer eigen gekoppelde accounts';
$string['plugindescription'] = 'Deze authenticatieplugin toont een lijst met de geconfigureerde identiteitsproviders om de loginpagina. Door een identiteitsprovider te kiezen kunnen gebruikers aanmelden met hun gebruikersnaam en wachtwoord van een OAuth 2 provider.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'OAuth2 authenticatie';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Deze plugin is verbonden aan het authenticatie subsysteem';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'Het bevestigingstoken.';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'Het tijdstip waarop het bevestigingstoken verloopt.';
$string['privacy:metadata:auth_oauth2:email'] = 'De externe e-mail die gekoppeld is aan deze account.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'De ID van de OAuth2 uitgever voor deze OAuth2 login';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'OAuth2 accounts, gelinkt aan de Moodle-account van een gebruiker.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Het tijdstip waarop de gebruikersaccount aan de OAuth2 gelinkt werd.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'Het tijdstip waarop deze record aangepast werd.';
$string['privacy:metadata:auth_oauth2:userid'] = 'De gebruikersID van de gebruikersaccount waar deze OAuth2-login aan gelinkt is.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'De ID van de gebruiker die deze account gewijzigd heeft.';
$string['privacy:metadata:auth_oauth2:username'] = 'De externe gebruikersnaam die aan deze account gekoppeld is.';
$string['testidplogin'] = 'Test login met:';
$string['userinfo'] = 'Gebruikersgegevens van provider:';
$string['value'] = 'Waarde';
