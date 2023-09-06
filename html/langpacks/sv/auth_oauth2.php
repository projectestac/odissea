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
 * Strings for component 'auth_oauth2', language 'sv', version '4.1'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Det finns redan en användare på denna webbplats med detta användarnamn. Om detta är ditt konto, logga in genom att ange ditt användarnamn och lösenord och lägg till det som en kopplad inloggning via din profilsida.';
$string['alreadylinked'] = 'Det externa kontot är redan kopplat till ett konto på denna webbplats';
$string['auth_oauth2description'] = 'OAuth 2-baserad autentisering';
$string['auth_oauth2settings'] = 'Inställningar för OAuth 2-baserad autentisering';
$string['confirmaccountemail'] = 'Hej {$a->fullname},

En förfrågan om nytt konto har gjorts på \'{$a->sitename}\'
med hjälp av din e-postadress.

Bekräfta ditt nya konto genom att gå till denna webadress:

{$a->link}

I de flesta e-post program syns länken ovan som en blå länk du kan klicka på. Om så inte är fallet kan du istället kopiera adressen och klistra in den i din webbläsare.

Om du behöver hjälp kan du kontakta administratören,
{$a->admin}

Om det inte är du som begärt detta konto kan det vara så att någon annan än du försöker logga in på ditt konto. Kontakta i så fall administratören omedelbart.';
$string['confirmaccountemailsubject'] = '{$a}: kontoinformation';
$string['confirmationinvalid'] = 'Bekräftelselänken är antingen ogiltig eller gammal. Vänligen logga in på nytt för att generera ett nytt bekräftelsemail.';
$string['confirmationpending'] = 'Kontot väntar på e-postbekräftelse.';
$string['confirmlinkedloginemail'] = 'Hej {$a->fullname},

En förfrågan om att länka {$a->issuername}-inloggningen till ditt konto på \'{$a->sitename}\' med hjälp av din e-postadress har gjorts.

Bekräfta ditt nya konto genom att gå till denna webadress:

{$a->link}

I de flesta e-post program syns länken ovan som en blå länk du kan klicka på. Om så inte är fallet kan du istället kopiera adressen och klistra in den i din webbläsare.

Om du behöver hjälp kan du kontakta administratören,
{$a->admin}

Om det inte är du som begärt detta konto kan det vara så att någon annan än du försöker logga in på ditt konto. Kontakta i så fall administratören omedelbart.';
$string['confirmlinkedloginemailsubject'] = '{$a}: bekräftade länkad inloggningsinformation';
$string['createaccountswarning'] = 'Denna pluginmodul gör det möjligt för användare att skapa konton på din webbplats. Du kanske vill aktivera inställningen "Förhindra att konto skapas vid autentisering" om du använder den här pluginmodulen.';
$string['createnewlinkedlogin'] = 'Länka ett nytt konto ({$a})';
$string['emailconfirmlink'] = 'Länka dina konton';
$string['emailconfirmlinksent'] = '<p>An existing account was found with this email address but it is not linked yet.</p>
   <p>The accounts must be linked before you can log in.</p>
   <p>An email should have been sent to your address at <b>{$a}</b>.</p>
   <p>It contains easy instructions to link your accounts.</p>
   <p>If you have any difficulty, contact the site administrator.</p>';
$string['emailpasswordchangeinfo'] = 'Hej {$a->firstname},

Någon (antagligen du) har begärt ett nytt lösenord för ditt konto på \'{$a->sitename}\'.

Men, ditt lösenord kan inte återställas eftersom du använder ditt konto på en annan webbplats för att logga in.

Vänligen logga in som tidigare genom att använda länken på inloggningssidan.

/{$a->admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: information om byte av lösenord';
$string['info'] = 'Externt konto';
$string['issuer'] = 'OAuth 2 Service';
$string['issuernologin'] = 'Denna utfärdare kan inte användas för att logga in';
$string['key'] = 'Nyckel';
$string['linkedlogins'] = 'Länkade konton';
$string['linkedloginshelp'] = 'Hjälp med länkade konton';
$string['loggedin'] = 'Användaren autentiserades av utfärdaren.';
$string['loginerror_authenticationfailed'] = 'Autentisering misslyckades';
$string['loginerror_cannotcreateaccounts'] = 'Hittade inte konto med din e-postadress.';
$string['loginerror_invaliddomain'] = 'E-postadressen är inte tillåten på denna webbplats.';
$string['loginerror_nouserinfo'] = 'Ingen användarinformation returnerades. OAuth 2-tjänsten kanske inte är korrekt konfigurerad.';
$string['loginerror_userincomplete'] = 'Användarinformationen som returnerades innehöll inget användarnamn eller e-postadress. OAuth 2-tjänsten kanske inte är korrekt konfigurerad.';
$string['noconfiguredidps'] = 'Inga OAuth2-utfärdare har konfigurerats';
$string['noissuersavailable'] = 'Ingen av de konfigurerade OAuth 2-tjänsterna tillåter att du länkar inloggningskonton';
$string['notenabled'] = 'OAuth 2 autentiserings-pluginen är inte aktiverad';
$string['notloggedindebug'] = 'Inloggningsförsöket misslyckades. Orsak: {$a}';
$string['notwhileloggedinas'] = 'Länkade konton kan inte hanteras när du är inloggad som annan användare.';
$string['oauth2:managelinkedlogins'] = 'Hantera dina länkade konton';
$string['plugindescription'] = 'Denna plugin för autentisering visar en lista över de konfigurerade identitetsleverantörerna på inloggningssidan. Om du väljer en identitetsleverantör kan användare logga in med sina autentiseringsuppgifter från en OAuth 2-leverantör.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'OAuth 2-autentisering';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Denna pluginmodul är kopplad till autentiseringssystemet';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'Bekräftelsetoken';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'Tidstämpel för när bekräftelsetoken löper ut';
$string['privacy:metadata:auth_oauth2:email'] = 'Externt konto som är kopplat till detta konto.';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'ID:t för OAuth 2-utfärdaren för denna OAuth 2-inloggning.';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'OAuth 2-konton länkade till en användares Moodle-konto.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Tidstämpel för när användarkontot länkades till OAuth 2-inloggningen.';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'Tidstämpel för när denna post ändrades.';
$string['privacy:metadata:auth_oauth2:userid'] = 'ID:t för användarkontot som OAuth 2-inloggningen är länkad till.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'ID:t för användaren som ändrade detta konto.';
$string['privacy:metadata:auth_oauth2:username'] = 'Externt användarnamn kopplat till detta konto.';
$string['testidplogin'] = 'Testa att logga in med:';
$string['userinfo'] = 'Användarinformation från utfärdaren:';
$string['value'] = 'Värde';
