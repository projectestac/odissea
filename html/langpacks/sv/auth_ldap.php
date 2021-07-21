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
 * Strings for component 'auth_ldap', language 'sv', version '3.11'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Det går inte att skapa ett nytt konto i den aktiva katalogen. Se till att Du uppfyller alla krav för att detta ska fungera (LDAPS connection, bind user med de rättigheter som krävs etc.)';
$string['auth_ldap_attrcreators'] = 'Lista över grupper eller sammanhang vars medlemmar har tillstånd att skapa attribut. Separera grupper med \':\'. Vanligen något i stil med \'cn=lärare,ou=personal,o=minorg\'';
$string['auth_ldap_attrcreators_key'] = 'Attribut för skapare';
$string['auth_ldap_auth_user_create_key'] = 'Skapa användare externt';
$string['auth_ldap_bind_dn'] = 'Om du vill använda <em>bind</em>-användare för att söka användare, specificera detta här. Som t.ex. <code>cn=ldapuser,ou=public,o=org</code>';
$string['auth_ldap_bind_dn_key'] = 'Unikt namn';
$string['auth_ldap_bind_pw'] = 'Lösenord för \'bind\'-användare.';
$string['auth_ldap_bind_pw_key'] = 'Lösenord';
$string['auth_ldap_bind_settings'] = 'Inställningar för \'bind\'';
$string['auth_ldap_changepasswordurl_key'] = 'URL till sida för att ändra lösenord';
$string['auth_ldap_contexts'] = 'Lista med kontext för användarna kan hittas. Separera olika kontext med \';\'.  Till exempel: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Sammanhang';
$string['auth_ldap_create_context'] = 'Om Du aktiverar \'Skapa användare\' med e-postbekräftelse så ska Du specifiera den kontext där användare skapas. Denna kontext bör vara en annan än den vanliga för att undvika säkerhetsrisker. Du behöver inte lägga till denna kontext till variabeln \'ldap_context\'. Moodle letar automatiskt efter användare från den här kontexten.<br /><b>OBS!</b> Du måste modifiera metoden \'ser_create\' i filen \'auth/ldap/auth.php för att se till att \'skapa användare\' fungerar.';
$string['auth_ldap_create_context_key'] = 'Sammanhang för nya användare';
$string['auth_ldap_create_error'] = 'Fel i samband med en användare skulle skapas i LDAP';
$string['auth_ldap_expiration_desc'] = 'Välj \'Nej\' för att inaktivera kontroll av lösenord som har gått ut eller LDAP för att läsa \'passwordexpiration time\' direkt från LDAP. Kom ihåg att fylla i namnet på attributet, nämligen \'ldap_expireattr\'.';
$string['auth_ldap_expiration_key'] = 'Giltighetstid';
$string['auth_ldap_expiration_warning_desc'] = 'Antal dagar innan det skickas en varning om att giltighetstiden för lösenordet går ut.';
$string['auth_ldap_expiration_warning_key'] = 'Varning om att giltighetstiden går ut';
$string['auth_ldap_expireattr_desc'] = 'Valfritt: Detta åsidosätter det LDAP-attribut som lagrar giltighetstiden för när lösenordet går ut.';
$string['auth_ldap_expireattr_key'] = 'Attribut för giltighetstid';
$string['auth_ldap_graceattr_desc'] = 'Valfritt: Åsidosätter LDAP-attributet  \'gracelogin\'';
$string['auth_ldap_gracelogin_key'] = 'Attribut för \'grace\' inloggning';
$string['auth_ldap_gracelogins_desc'] = 'Aktivera inloggningsstöd för LDAP grace. När lösenordet har upphört att gälla kan användaren logga in tills antalet grace-inloggningar är 0. Om du aktiverar den här inställningen visas ett grace-inloggningsmeddelande om lösenordet har upphört att gälla.';
$string['auth_ldap_gracelogins_key'] = '\'Grace\' inloggningar';
$string['auth_ldap_groupecreators'] = 'Lista över grupper eller sammanhang vars medlemmar har tillstånd att skapa grupper. Separera multipla grupper med \';\'. Vanligen något i stil med \'cn=lärare,ou=personal,o=minorg\'';
$string['auth_ldap_groupecreators_key'] = 'Grupp-skapare';
$string['auth_ldap_host_url'] = 'Ange URL till LDAP-server enligt formatet "ldap://ldap.myorg.com/" eller "ldaps://ldap.myorg.com/". Separera flera servrar med \';\' för att få stöd för redundans.';
$string['auth_ldap_host_url_key'] = 'LDAP-server';
$string['auth_ldap_ldap_encoding'] = 'Teckenkodning som används av LDAP-servern, troligtvis UTF-8. Om LDAP v2 är markerat använder Active Directory sin konfigurerade kodning, till exempel cp1252 eller cp1250.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP-teckenkodning';
$string['auth_ldap_login_settings'] = 'Inloggningsinställningar';
$string['auth_ldap_memberattribute'] = 'Valfritt: Åsidosätter medlemsattributet när användaren tillhör en grupp. Vanligtvis \'member\'';
$string['auth_ldap_memberattribute_isdn'] = 'Åsidosätter hantering av värden för medlems-attribut';
$string['auth_ldap_memberattribute_isdn_key'] = 'Medlems-attribut använder dn';
$string['auth_ldap_memberattribute_key'] = 'Medlems-attribut';
$string['auth_ldap_no_mbstring'] = 'Du behöver komplementeringen mbstring för att skapa användare i den aktiva katalogen.';
$string['auth_ldap_noconnect'] = 'Det gick inte att ansluta LDAP-modulen till server: {$a}';
$string['auth_ldap_noconnect_all'] = 'Det gick inte att ansluta LDAP-modulen till några servrar: {$a}';
$string['auth_ldap_noextension'] = 'Varning! Det verkar som om det inte finns någon PHP LDAP-modul. Vänligen säkerställ att den är installerad och aktiverad.';
$string['auth_ldap_objectclass'] = 'Valfritt: Detta åsidosätter det \'objectClass\' som används för att namnge/söka användare på \'ldap_user_type\'. Normalt sett så behöver Du inte ändra på detta.';
$string['auth_ldap_objectclass_key'] = 'Objekt-klass';
$string['auth_ldap_opt_deref'] = 'Detta avgör hur alias hanteras under sökning. Markera ett av följande värden: "Nej" = <em>LDAP_DEREF_NEVER</em> eller "Ja" = <em>LDAP_DEREF_ALWAYS</em>';
$string['auth_ldap_opt_deref_key'] = 'Alias för \'dereference\'';
$string['auth_ldap_passtype'] = 'Ange formatet på nya eller ändrade lösenord i LDAP-servern.';
$string['auth_ldap_passtype_key'] = 'Format för lösenord';
$string['auth_ldap_passwdexpire_settings'] = 'Inställningar för giltighetstiden för LDAP-lösenord';
$string['auth_ldap_preventpassindb'] = 'Markera "Ja" för att förhindra lösenord från att lagras i Moodles databas.';
$string['auth_ldap_preventpassindb_key'] = 'Förhindra cachelagring av lösenord';
$string['auth_ldap_rolecontext'] = '{$a->localname}-kontext';
$string['auth_ldap_rolecontext_help'] = 'LDAP-kontext som används för <i>{$a->localname}</i>-mappning. Separera flera grupper med \';\'. Vanligtvis något liknande som "cn={$a->shortname},ou=first-ou-with-role-groups,o=myorg; cn={$a->shortname},ou=second-ou-with-role-groups,o=myorg".';
$string['auth_ldap_search_sub'] = 'Sök användare i underkontext';
$string['auth_ldap_search_sub_key'] = 'Sök i lägre sammanhang';
$string['auth_ldap_server_settings'] = 'Inställningar för LDAP-server';
$string['auth_ldap_suspended_attribute'] = 'Valfritt: När det här attributet anges används det här attributet för att aktivera/stänga av det lokalt skapade användarkontot.';
$string['auth_ldap_suspended_attribute_key'] = 'Avstängd-attribut';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() stödjer inte den valda användartypen: \'{$a}\'';
$string['auth_ldap_update_userinfo'] = 'Uppdatera användarinformation (förnamn, efternamn, adress..) från LDAP till Moodle.  Se \'/auth/ldap/attr_mappings.php\' för mappnings-information';
$string['auth_ldap_user_attribute'] = 'Attributet som används för namn/sökning av användare. Vanligtvis \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Attribut för användare';
$string['auth_ldap_user_exists'] = 'Användarnamnet finns redan i LDAP';
$string['auth_ldap_user_settings'] = 'Inställningar för \'slå upp användare\'';
$string['auth_ldap_user_type'] = 'Välj hur användare lagras i LDAP. Den här inställningen anger också hur förfallodatum för inloggning, grace-inloggningar och användarskapande kommer att fungera.';
$string['auth_ldap_user_type_key'] = 'Typ av användare';
$string['auth_ldap_usertypeundefined'] = '\'config.user_type\' är inte definierad eller också stödjer funktionen \'ldap_expirationtime2unix\' inte den valda typen!';
$string['auth_ldap_usertypeundefined2'] = '\'config.user_type\' är inte definierad eller också stödjer funktionen \'ldap_unixi2expirationtime\' inte den valda typen!';
$string['auth_ldap_version'] = 'Detta är den version av LDAP-protokollet som din server använder.';
$string['auth_ldap_version_key'] = 'Version';
$string['auth_ldapdescription'] = 'Denna metod ger autentisering mot en extern LDAP-server. Om det givna användarnamnet och lösenordet är giltiga skapar Moodle en plats för en ny användare i databasen. Denna modul kan läsa användarattribut från LDAP och fylla i på förhand önskade fält i Moodle. Vid efterföljande inloggningar kontrolleras enbart namn och lösenord.';
$string['auth_ldapextrafields'] = 'Dessa fält är valfria. Du kan välja att på förhand fylla i några användarfält för Moodle med information från <b>LDAP-fält</b> som Du kan specificera här. <p>Om Du lämnar dessa fält tomma, så kommer inget att föras över från LDAP och standardvärden för Moodle kommer att användas istället. I vilket fall som helst, kommer användaren kunna redigera alla dessa fält efter det att de loggat in.</p>';
$string['auth_ldapnotinstalled'] = 'Det går inte att använda autentisering via LDAP. PHP-modulen för LDAP är inte installerad.';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Ställ in på ja för att försöka med Single Sign On med hjälp av NTLM-domänen. Observera att detta kräver ytterligare inställningar på servern för att fungera. Mer information finns i dokumentationen <a href="https://docs.moodle.org/en/NTLM_authentication">NTLM-autentisering</a>.';
$string['auth_ntlmsso_enabled_key'] = 'Aktivera';
$string['auth_ntlmsso_ie_fastpath'] = 'Ange att snabbspåret NTLM SSO ska aktiveras (kringgår vissa steg om användarens webbläsare är MS Internet Explorer).';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Försök använda NTLM med alla webbläsare';
$string['auth_ntlmsso_ie_fastpath_key'] = 'Snabbväg till MS IE?';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Ja, försök med NTLM, andra webbläsare';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Ja, övriga webbläsare använder standardinloggningsformuläret';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Det gick inte att extrahera användarnamnet från <code>REMOTE_USER</code>-headern. Är det angivna formatet rätt?';
$string['auth_ntlmsso_missing_username'] = 'Du måste ange minst % username% i fjärranvändarnamnsformatet';
$string['auth_ntlmsso_remoteuserformat'] = 'Om du har valt \'NTLM\' i \'Autentiseringstyp\' kan du ange fjärranvändarnamnsformatet här. Om du lämnar detta tomt används standardformatet DOMAIN\\användarnamn. Du kan använda den valfria platshållaren <b>%domain%</b> för att ange var domännamnet ska visas och den obligatoriska platshållaren <b>%username%</b> för att ange var användarnamnet ska visas. br /><br />Några vanliga format är <tt>%domain%\\%username%</tt> (MS Windows standard), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> eller bara <tt>%username%</tt> (om det inte finns någon domändel).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Fjärranvändarnamnformat';
$string['auth_ntlmsso_subnet'] = 'Om detta är inställt så kommer den bara att försöka med SSO med klienter i det här undernätet. Format: xxx.xxx.xxx.xxx/bitmask. Separera multipla undernät med \',\' (komma).';
$string['auth_ntlmsso_subnet_key'] = 'Subnät';
$string['auth_ntlmsso_type'] = 'Autentiseringsmetoden som konfigurerats på webbservern för att autentisera användarna (om du är osäker väljer du NTLM)';
$string['auth_ntlmsso_type_key'] = 'Autentiseringstyp';
$string['cannotmaprole'] = 'Det går inte att mappa rollen "{$a->rolename}" eftersom dess kortnamnet "{$a->shortname}" är för långt eller innehåller bindestreck. För att den ska kunna mappas måste kortnamnet minskas till högst {$a->charlimit} tecken och eventuella bindestreck tas bort. <a href="{$a->link}">Redigera rollen</a>';
$string['connectingldap'] = 'Ansluter till LDAP-server...';
$string['connectingldapsuccess'] = 'Anslutningen lyckades';
$string['creatingtemptable'] = 'Skapar en tillfällig tabell {$a} ';
$string['diag_contextnotfound'] = 'Kontextet {$a} finns inte eller kan inte läsas av bind DN.';
$string['diag_emptycontext'] = 'Tomt kontext hittades';
$string['diag_genericerror'] = 'LDAP-fel {$a->code} vid läsning av {$a->subject}: {$a->message}.';
$string['diag_rolegroupnotfound'] = 'Gruppen {$a->grupp} för rollen {$a->localname} finns inte eller kan inte läsas av bind DN.';
$string['diag_toooldversion'] = 'Det är mycket osannolikt att en modern LDAP-server använder LDAPv2-protokollet. Felaktiga inställningar kan skada värdena i användarfälten. Kontakta LDAP-administratören.';
$string['didntfindexpiretime'] = 'password_expire() kunde inte hitta någon utgående tid';
$string['didntgetusersfromldap'] = 'Hittade inga användare från LDAP - fel? - avslutar';
$string['gotcountrecordsfromldap'] = 'Hittade {$a} datauppgifter som kommer från LDAP';
$string['ldapnotconfigured'] = 'LDAP-värdadressen är inte konfigurerad för närvarande';
$string['morethanoneuser'] = 'Mer än en användarpost hittades i LDAP. Använder bara den första.';
$string['needbcmath'] = 'Du behöver BCMath-tillägget för att använda kontroll av förfallna lösenord för Active Directory.';
$string['needmbstring'] = 'Du behöver mbstring-tillägget för att ändra lösenord i Active Directory';
$string['nodnforusername'] = 'Fel i user_update_password(). Inget DN för: {$a->username}';
$string['noemail'] = 'Vi försökte att skicka e-post till dig men det misslyckades!';
$string['notcalledfromserver'] = 'Detta borde inte anropas från webbservern!';
$string['noupdatestobedone'] = 'Det finns inga uppdateringar att göra';
$string['nouserentriestoremove'] = 'Det finns inga inlägg från användare att ta bort';
$string['nouserentriestorevive'] = 'Det finns inga inlägg från användare att re-aktivera';
$string['nouserstobeadded'] = 'Det finns inga användarposter att lägga till';
$string['ntlmsso_attempting'] = 'Försöker med enkel inloggning via NTLM...';
$string['ntlmsso_failed'] = 'Det fungerade inte med automatisk inloggning, försök med den vanliga sidan för inloggning...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO är inaktiverat';
$string['ntlmsso_unknowntype'] = 'Okänd typ av ntlmsso!';
$string['pagedresultsnotsupp'] = 'LDAP sidvisa resultat stöds inte (antingen saknar PHP-versionen stöd, du har konfigurerat Moodle för att använda LDAP-protokoll version 2 eller Moodle kan inte kontakta din LDAP-server för att se om stöd för sidvisa resultat är tillgängligt.)';
$string['pagesize'] = 'Kontrollera att det här värdet är mindre än storleksgränsen för LDAP-serverns resultatuppsättning (det maximala antalet poster som kan returneras i en enda fråga)';
$string['pagesize_key'] = 'Sidstorlek';
$string['pluginname'] = 'LDAP';
$string['pluginnotenabled'] = 'Denna plugin har inte aktiverats!';
$string['privacy:metadata'] = 'Pluginmodulen för LDAP lagrar ingen personinformation.';
$string['renamingnotallowed'] = 'Byte av användarnamn är inte tillåtet i LDAP';
$string['rootdseerror'] = 'Det gick inte att fråga rootDSE efter Active Directory';
$string['start_tls'] = 'Använd standard LDAP-tjänst (port 389) med TLS-kryptering';
$string['start_tls_key'] = 'Använd TLS';
$string['syncroles'] = 'Synkronisera systemroller från LDAP';
$string['synctask'] = 'Synkronisera LDAP-användare';
$string['systemrolemapping'] = 'Mappning av systemroll';
$string['updatepasserror'] = 'Fel i user_update_password(). Felkod: {$a->errno}; Felsträng: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Fel i user_update_password() vid läsning av lösenordens förfallotid. Felkod: {$a->errno}; Felsträng: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Fel i user_update_password() när förfallotid och/eller graceinloggningar ändrades. Felkod: {$a->errno}; Felsträng: {$a->errstring}';
$string['updateremfail'] = 'Det gick inte att uppdatera LDAP-posten. Felkod: {$a->errno}; Felsträng: {$a->errstring}<br/>Nyckel ({$a->key}) – gammalt moodle-värde: \'{$a->ouvalue}\', nytt värde: \'{$a->nuvalue}\'.';
$string['updateremfailamb'] = 'Det gick inte att uppdatera LDAP med det tvetydiga fältet {$a->key}. gammalt moodle-värde: \'{$a->ouvalue}\', nytt värde: \'{$a->nuvalue}\'.';
$string['updateremfailfield'] = 'Det gick inte att uppdatera LDAP med det icke-existerande fältet (\'{$a->ldapkey}\'). Nyckel ({$a->key}) – gammalt Moodle-värde: \'{$a->ouvalue}\', nytt värde: \'{$a->nuvalue}\'.';
$string['updateusernotfound'] = 'Det gick inte att hitta användaren vid den externa uppdateringen. Detaljer: sökbas: \'{$a->userdn}\'; Sökfilter: \'(objectClass=*)\'; sökattribut: \'{$a->attribs}\'';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() stödjer inte den valda användartypen: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() stödjer inte den valda användartypen: {$a}';
$string['useracctctrlerror'] = 'Det gick inte att hämta <i>userAccountControl</i> för {$a}';
$string['userentriestoadd'] = 'Inlägg från användare som ska läggas till: {$a}';
$string['userentriestoremove'] = 'Inlägg från användare som ska tas bort: {$a}';
$string['userentriestorevive'] = 'Inlägg från användare som ska återaktiveras: {$a}';
$string['userentriestoupdate'] = 'Användarposter som ska uppdateras: {$a}';
$string['usernotfound'] = 'Det gick inte att hitta användaren i LDAP';
