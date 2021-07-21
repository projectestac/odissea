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
 * Strings for component 'auth', language 'sv', version '3.11'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Tillgängliga plugins för autentisering';
$string['allowaccountssameemail'] = 'Tillåt konton med samma e-postadress';
$string['allowaccountssameemail_desc'] = 'Om aktiverat kan mer än ett användarkonto dela samma e-postadress. Detta kan resultera i säkerhets- eller sekretessproblem, till exempel med bekräftelsemeddelandet vid lösenordsändring.';
$string['alternatelogin'] = 'Om du skriver in en URL här så kommer den att användas som sida för inloggning på den här webbplatsen. Sidan bör innehålla ett formulär som har egenskapen för händelse inställd till <strong>\'{$a}\'</strong><br />Var försiktig så att du inte skriver in en felaktig URL eftersom du då kan stänga dig själv ute från webbplatsen. <br />Låt den här inställningen vara tom om du vill använda standardsidan för inloggning.';
$string['alternateloginurl'] = 'Alternativ inloggnings-URL';
$string['auth_changepasswordhelp'] = 'Hjälp angående ändring av lösenord';
$string['auth_changepasswordhelp_expl'] = 'Visa det förlorade lösenordet för dem som har blivit av med sitt {$a} lösenord. Det här kommer att visas antingen som, likaväl som, eller istället för <strong>Ändra lösenord URL</strong> eller för ändring av lösenord internt i Moodle.';
$string['auth_changepasswordurl'] = 'Ändra lösenord URL';
$string['auth_changepasswordurl_expl'] = 'Ange den url som du vill skicka till de användare som har förlorat sina lösenord. Ställ in <strong>Använd standardsidan för att ändra lösenord</strong> till <strong>Nej</strong>.';
$string['auth_changingemailaddress'] = 'Du har begärt en ändring av e-postadress, från {$a->oldemail} till {$a->newemail}. Av säkerhetsskäl skickar vi dig ett e-postmeddelande till din nya adress för att försäkra att den tillhör dig. Din e-postadress kommer att uppdateras så snart du öppnar URL adressen som skickats till dig i det meddelandet.';
$string['auth_common_settings'] = 'Generella inställningar';
$string['auth_data_mapping'] = 'Datamappning';
$string['auth_fieldlock'] = 'Lås värdet';
$string['auth_fieldlock_expl'] = '<p><b>Lås värdet:</b> Om aktiverat förhindras Moodle-användare och administratörer från att redigera fältet direkt. Använd det här alternativet om du underhåller dessa data i det externa autentiseringssystemet. </p>';
$string['auth_fieldlockfield'] = 'Lås värdet ({$a})';
$string['auth_fieldlocks'] = 'Lås användarfält';
$string['auth_fieldlocks_help'] = 'Du kan låsa användarnas datafält. Detta är användbart för webbplatser där administratörerna underhåller användardata manuellt genom att redigera användarposter eller genom att använda komponenten "Ladda upp användare".  Om Du låser de fält som Moodle kräve ska Du säkerställa att Du fyller i dessa data när Du skapar användarkonton, annars kommer kontona att bli oanvändbara.
Överväg om Du ska ställa in låsningsläget till "Olåst om fältet är tomt" för att undvika detta problem.';
$string['auth_fieldmapping'] = 'Datamappning ({$a})';
$string['auth_invalidnewemailkey'] = 'Fel: om du försöker bekräfta ett byte av e-postadress kan du ha gjort ett misstag när du kopierat URL-adressen vi skickade till dig med e-post. Vänligen kopiera adressen igen och försök på nytt.';
$string['auth_multiplehosts'] = 'Du kan ange flera värdar(t ex host1.com;host2.com;host3.com)';
$string['auth_notconfigured'] = 'Autentiseringsmetoden {$a} har inte konfigurerats.';
$string['auth_outofnewemailupdateattempts'] = 'Fel: om du försöker bekräfta ett byte av e-postadress kan du ha gjort ett misstag när du kopierat URL adressen vi skickade till dig med e-post. Vänligen kopiera adressen igen och försök på nytt.';
$string['auth_passwordisexpired'] = 'Ditt lösenord har slutat gälla. Vänligen ändra det nu.';
$string['auth_passwordwillexpire'] = 'Giltighetstiden för ditt lösenord går ut om {$a} dagar. Vill du ändra ditt lösenord nu?';
$string['auth_remove_delete'] = 'Komplett internt borttagande';
$string['auth_remove_keep'] = 'Behåll internt';
$string['auth_remove_suspend'] = 'Stäng av internt';
$string['auth_remove_user'] = 'Ange vad du vill ska hända med interna användarkonton under mass-synkronisering när användare flyttas från en extern källa. Endast avstängda användare kommer att automatiskt återställas om de dyker upp igen i en extern källa.';
$string['auth_remove_user_key'] = 'Tog bort extern användare';
$string['auth_sync_script'] = 'Synkronisering av användarkonto';
$string['auth_sync_suspended'] = 'Om aktiverat kommer suspended-attributet användas för att uppdatera det lokala kontots avstängt-status.';
$string['auth_sync_suspended_key'] = 'Synkronisera lokal status för användaravstängning';
$string['auth_updatelocal'] = 'Uppdatera lokala data';
$string['auth_updatelocal_expl'] = '<p><b>Uppdatera lokala data:</b> Om detta är aktiverat så kommer fältet att uppdateras (från extern autentisering) varje gång användaren loggar in eller när det förekommer synkronisering av användare. Fält som är inställda att uppdateras lokalt bör vara låsta.</p>';
$string['auth_updatelocalfield'] = 'Uppdatera lokalt ({$a})';
$string['auth_updateremote'] = 'Uppdatera externa data';
$string['auth_updateremote_expl'] = '<p><b>Uppdatera externa data:</b> Om detta är aktiverat så kommer den externa autentiseringen att uppdateras när en användarpost uppdateras. Fält bör vara olåsta så att redigering är tillåten.</p>';
$string['auth_updateremote_ldap'] = '<p><b>OBS!</b> Om Du uppdaterar externa LDAP-data så måste Du ställa in \'binddn\' och \'bindpw\' till en \'bind-user\' med rättigheter att  redigera alla posterna för användare. F.n. bevarar detta inte attribut med flerfaldiga värden, och det tar bort extra värden vid uppdateringar.</p>';
$string['auth_updateremotefield'] = 'Uppdatera externt ({$a})';
$string['auth_user_create'] = 'Aktivera skapande av användare';
$string['auth_user_creation'] = 'Nya (anonyma) användare kan utnyttja en extern källa för autentisering och skapa användarkonton som bekräftas med e-post. Om du aktiverar detta får du inte glömma att också konfigurera de modulspecifika valmöjligheterna som användare ska kunna skapa.';
$string['auth_usernameexists'] = 'Det valda användarnamnet finns redan. Du måste välja ett annat.';
$string['auth_usernotexist'] = 'Det går inte att uppdatera en icke-existerande användare: {$a}';
$string['authenticationoptions'] = 'Autentiseringsalternativ';
$string['authinstructions'] = 'Här kan du ge instruktioner för dina användare, så att de vet vilket användarnamn och lösenord de bör använda. Texten du skriver in här kommer att visas på sidan för inloggning. Om du lämnar detta tomt så kommer inga instruktioner att visas.';
$string['authloginviaemail'] = 'Tillåt inloggning via E-post';
$string['authloginviaemail_desc'] = 'Tillåt användare att använda både användarnamn och e-postadress (om unik) för att logga in.';
$string['auto_add_remote_users'] = 'Lägg till externa användare automatiskt';
$string['cannotmapfield'] = 'Det går inte att mappa fältet "{$a->fieldname}" eftersom dess kortnamn "{$a->shortname}" är för långt. Om du vill att det ska kunna mappas måste du korta ned det till {$a->charlimit}-tecken. <a href="{$a->link}">Profilfält</a>';
$string['changepassword'] = 'URL   till sida för att ändra lösenord';
$string['changepasswordhelp'] = 'URL till sidan för återställning av förlorade lösenord, vilka skickas till användare i ett e-postmeddelande. Observera att den här inställningen inte har någon effekt om en bortglömd lösenordsadress anges i autentiseringsinställningarna.';
$string['chooseauthmethod'] = 'Välj en autentiseringsmetod';
$string['chooseauthmethod_help'] = '<p>Den här menyn låter dig ändra metoden för autentisering
   för den här specifika användaren.</p>
<p> Vänligen lägg märke till att detta i hög grad beror  på vilken metod för autentisering du har valt för den här webbplatsen och vilka inställningar den använder.</p>
<p>En felaktig ändring här kan göra det omöjligt för användare att logga in eller
 t.o.m. ta bort deras konton helt och hållet så du bör bara genomföra detta om du vet vad du gör.</p>';
$string['createpassword'] = 'Generera lösenord och meddela användare';
$string['createpasswordifneeded'] = 'Skapa lösenord om det behövs och skicka det via e-post';
$string['emailchangecancel'] = 'Avbryt ändring av e-postadress';
$string['emailchangepending'] = 'Aktivera ändringen av din e-postadress. Öppna länken som du har fått i {$a->preference_newemail}.';
$string['emailnowexists'] = 'Den e-postadress som du försökte lägga till till din profil har tilldelats någon annan efter din ursprungliga begäran. Denna begäran har härmed avbrutits men du kan pröva igen med en annan adress.';
$string['emailupdate'] = 'Uppdatering av e-postadress';
$string['emailupdatemessage'] = 'Hej {$a->fullname},
du har begärt en ändring av din e-postadress för ditt användarkonto på {$a->site}. För att ändringen ska gälla behöver du bekräfta den genom att öppna länken nedan i din webbläsare.

{$a->url}

{$a->supportemail}';
$string['emailupdatesuccess'] = 'Användaren <em>{$a->fullname}</em>s e-postadress har uppdaterats till <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Bekräftelse av uppdatering av e-postadress vid {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'Lösenord måste ha som mest {$a} på varandra följande identiska tecken.';
$string['errorminpassworddigits'] = 'Lösenord måste innehålla minst {$a} siff/ror';
$string['errorminpasswordlength'] = 'Lösenord måste innehålla minst {$a} tecken';
$string['errorminpasswordlower'] = 'Lösenord måste innehålla minst {$a} små bokstäver';
$string['errorminpasswordnonalphanum'] = 'Lösenord måste innehålla minst {$a} icke-alfanumeriska tecken, som t.ex. *, -, eller #.';
$string['errorminpasswordupper'] = 'Lösenord måste innehålla minst {$a} stora bokstäver.';
$string['errorpasswordreused'] = 'Lösenordet har redan använts tidigare och får inte återanvändas';
$string['errorpasswordupdate'] = 'Det uppstod ett fel i samband med uppdatering av lösenord. Lösenordet ändrades inte.';
$string['eventuserloggedin'] = 'Användaren har loggat in';
$string['eventuserloggedinas'] = 'Användaren är inloggad som en annan användare';
$string['eventuserloginfailed'] = 'Inloggning misslyckades';
$string['forcechangepassword'] = 'Tvinga fram ändring av lösenord';
$string['forcechangepassword_help'] = 'Tvinga användare att byta lösenord nästa gång de loggar in på Moodle.';
$string['forcechangepasswordfirst_help'] = 'Tvinga användare att byta lösenord första gången som de loggar in på Moodle.';
$string['forgottenpassword'] = 'Om du anger en URL här kommer den att användas som återställningssida för förlorade lösenord för den här webbplatsen. Detta är avsett för webbplatser där lösenord hanteras helt utanför Moodle. Lämna detta tomt om du vill använda standardfunktionen för återställning av lösenord.';
$string['forgottenpasswordurl'] = 'URL för förlorade lösenord';
$string['getrecaptchaapi'] = 'För att använda reCAPTCHA måste du hämta en API-nyckel från <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Knapp för gästinloggning';
$string['incorrectpleasetryagain'] = 'Fel. Vänligen försök igen.';
$string['infilefield'] = 'Det måste finnas ett fält i filen';
$string['informminpassworddigits'] = 'minst {$a} siffra/or';
$string['informminpasswordlength'] = 'minst {$a} tecken';
$string['informminpasswordlower'] = 'minst {$a} små bokstäver';
$string['informminpasswordnonalphanum'] = 'minst {$a} icke-alfanumeriska tecken, som t.ex. *, - eller #.';
$string['informminpasswordreuselimit'] = 'Lösenord får återanvändas efter {$a} ändringar';
$string['informminpasswordupper'] = 'minst {$a} stora bokstäver';
$string['informpasswordpolicy'] = 'Lösenordet måste innehålla {$a}';
$string['instructions'] = 'Instruktioner';
$string['internal'] = 'Intern';
$string['limitconcurrentlogins'] = 'Begränsa samtidiga inloggningar';
$string['limitconcurrentlogins_desc'] = 'Om aktiverat är antalet samtidiga webbinloggningar för enskilda användare begränsat. Den äldsta sessionen avslutas efter att tidsgränsen uppnåtts. Observera att användarna kan förlora allt arbete som inte sparats. Den här inställningen är inte kompatibel med pluginmoduler för single sign-on (SSO)-autentisering.';
$string['locked'] = 'Låst';
$string['md5'] = 'MD5-hash';
$string['nopasswordchange'] = 'Det går inte att ändra lösenordet';
$string['nopasswordchangeforced'] = 'Du kan inte gå vidare utan att ändra ditt lösenord, men det finns inte någon sida tillgänglig för att ändra det. V.g. kontakta din Moodle-administratör.';
$string['noprofileedit'] = 'Det går inte att redigera profilen';
$string['ntlmsso_attempting'] = 'Försöker med single sign-on via NTLM...';
$string['ntlmsso_failed'] = 'Den automatiska inloggningen misslyckades. Försök med den vanliga inloggningssidan...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO är inaktiverat';
$string['passwordhandling'] = 'Administration av fält för lösenord';
$string['plaintext'] = 'Ren text';
$string['pluginnotenabled'] = 'Pluginmodulen "{$a}" för autentisering är inte aktiverad.';
$string['pluginnotinstalled'] = 'Plugin "{$a}" för autentisering är inte installerad.';
$string['potentialidps'] = 'Logga in med:';
$string['privacy:metadata:userpref:createpassword'] = 'Indikerar att ett lösenord ska genereras för användaren';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Indikerar om användaren behöver byta lösenord vid inloggning';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Antalet misslyckade inloggningar';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Antalet misslyckade inloggningar sedan senast lyckade inloggning';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Datum då det senaste inloggningsförsöket misslyckades';
$string['privacy:metadata:userpref:loginlockout'] = 'Om användarens konto är låst på grund av misslyckade inloggningsförsök samt datum då kontot låstes';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Indikerar att användarens konto aldrig får låsas';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Om låst är detta hemligheten användaren måste använda för att låsa upp sitt konto';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA används för att förhindra missbruk av automatiserade program. Följ anvisningarna för att verifiera att du är en person. Det kan vara en ruta att markera, tecken som visas i en bild som du måste ange eller en uppsättning bilder att välja mellan.

Om du inte är säker på vad bilderna föreställer kan du prova att få en annan CAPTCHA eller en ljud-CAPTCHA.';
$string['security_question'] = 'Säkerhetsfråga';
$string['selfregistration'] = 'Själv-registrering';
$string['selfregistration_help'] = 'Om en pluginmodul för autentisering, till exempel e-postbaserad självregistrering, väljs, blir det möjligt för potentiella användare att registrera sig och skapa konton. Detta resulterar i möjligheten att spammare skapar konton för att använda foruminlägg, blogginlägg etc. för skräppost. För att undvika denna risk bör självregistrering inaktiveras eller begränsas via inställningen <em>Tillåtna e-postdomäner</em>.';
$string['settingmigrationmismatch'] = 'Värden som inte matchar upptäcktes då plugin-inställningsnamnen korrigerades! Autentiseringsmodulen \'{$a->plugin}\' hade inställningen \'{$a->setting}\' satt till \'{$a->legacy}\' under det äldre namnet och till \'{$a->current}\' under det aktuella namnet. Det senare värdet har angetts som det giltiga, men du bör kontrollera och bekräfta att detta är det som förväntas.';
$string['sha1'] = 'SHA-1 grind (hash)';
$string['showguestlogin'] = 'Du kan gömma eller visa knappen för inloggning för gäster på sidan för inloggning.';
$string['stdchangepassword'] = 'Använd standardsidan för att byta lösenord';
$string['stdchangepassword_expl'] = 'Om det externa autentiseringssystemet tillåter lösenordsändringar via Moodle anger du den här inställningen till "Ja". Den här inställningen åsidosätter inställningen under "URL till sida för att ändra lösenord".';
$string['stdchangepassword_explldap'] = 'OBS! Det är rekommenderat att använda LDAP över en SSL-krypterad tunnel (ldaps://) om LDAP-servern är extern.';
$string['suspended'] = 'Avstängt konto';
$string['suspended_help'] = 'Avstängda användarkonton kan inte användas för inloggning eller för att använda webbplatsen samt att alla utgående meddelanden förkastas.';
$string['testsettings'] = 'Testa inställningar';
$string['testsettingsheading'] = 'Testa autentiseringsinställningarna - {$a}';
$string['unlocked'] = 'Olåst';
$string['unlockedifempty'] = 'Olåst om det är tomt';
$string['update_never'] = 'Aldrig';
$string['update_oncreate'] = 'Vid skapande';
$string['update_onlogin'] = 'Vid varje inloggning';
$string['update_onupdate'] = 'Vid uppdatering';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() stödjer inte vald användartyp: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() stödjer inte vald användartyp (..ännu)';
$string['username'] = 'Användarnamn';
$string['username_help'] = 'Tänk på att vissa autentiseringsplugin inte tillåter att du ändrar användarnamnet.';
