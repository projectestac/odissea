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
 * Strings for component 'tool_oauth2', language 'ro', version '4.4'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrisk'] = 'Înțeleg că dezactivarea verificării e-mailului poate reprezenta o problemă de securitate.';
$string['acceptrisk_help'] = 'Dezactivarea verificării email-ului poate permite unui potențial utilizator să se autentifice ca alt utilizator.';
$string['authconfirm'] = 'Această acțiune va acorda acces API permanent la Moodle pentru contul autentificat. Acesta este destinat să fie folosit ca un cont de sistem pentru gestionarea fișierelor deținute de Moodle.';
$string['authconnected'] = 'Contul de sistem este acum conectat pentru acces offline';
$string['authnotconnected'] = 'Contul de sistem nu a fost conectat pentru acces offline';
$string['clever_service'] = 'Inteligent';
$string['configured'] = 'Configurat';
$string['configuredstatus'] = 'Configurat';
$string['connectsystemaccount'] = 'Conectare la un cont din sistem';
$string['createfromtemplate'] = 'Creează un serviciu cu OAuth 2 dintr-un șablon';
$string['createfromtemplatedesc'] = 'Alegeți unul dintre șabloanele de servicii OAuth 2 de mai jos pentru a crea un serviciu OAuth cu o configurație validă pentru unul dintre tipurile de servicii cunoscute. Aceasta va crea serviciul OAuth 2, cu toate punctele finale (end points) și parametrii corecți necesari pentru autentificare, deși va trebui totuși să introduceți ID-ul clientului și jetonul secret pentru noul serviciu înainte de a putea fi utilizat.';
$string['createnewendpoint'] = 'Creați un nou punct final pentru emitent „{$a}”';
$string['createnewservice'] = 'Creează serviciu nou:';
$string['createnewuserfieldmapping'] = 'Creați o nouă mapare a câmpului utilizatorului pentru emitentul „{$a}”';
$string['custom_service'] = 'Particularizare';
$string['deleteconfirm'] = 'Sigur doriți să ștergeți emitentul de identitate „{$a}”? Orice plugin care se bazează pe acest emitent nu va mai funcționa.';
$string['deleteendpointconfirm'] = 'Sigur doriți să ștergeți punctul final „{$a->endpoint}” pentru emitent „{$a->issuer}”? Orice plugin care se bazează pe acest punct final nu va mai funcționa.';
$string['deleteuserfieldmappingconfirm'] = 'Sigur doriți să ștergeți maparea câmpului utilizatorului pentru emitentul „{$a}”?';
$string['discovered'] = 'Descoperirea serviciului a reușit';
$string['discovered_help'] = 'Descoperirea înseamnă că punctele finale OAuth 2 ar putea fi determinate automat din URL-ul de bază pentru serviciul OAuth. Nu toate serviciile trebuie să fie „descoperite”, dar dacă nu sunt, atunci punctele finale și informațiile de mapare ale utilizatorilor vor trebui introduse manual.';
$string['discoverystatus'] = 'Descoperire';
$string['editendpoint'] = 'Editați punctul final: {$a->endpoint} pentru emitent {$a->issuer}';
$string['editendpoints'] = 'Configurați punctele finale';
$string['editissuer'] = 'Editați emitentul de identitate: {$a}';
$string['edituserfieldmapping'] = 'Editați maparea câmpului utilizatorului pentru emitent {$a}';
$string['edituserfieldmappings'] = 'Configurați mapările câmpului utilizatorului';
$string['endpointdeleted'] = 'Punctul final a fost șters';
$string['endpointname'] = 'Nume';
$string['endpointname_help'] = 'Cheia utilizată pentru a căuta acest punct final. Trebuie să se încheie cu „_endpoint”.';
$string['endpointsforissuer'] = 'Puncte finale pentru emitent: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'Adresa URL pentru acest punct final. Trebuie să utilizați protocolul https://.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Open Badges';
$string['issueralloweddomains'] = 'Domenii de autentificare';
$string['issueralloweddomains_help'] = 'Dacă este setată, această setare este o listă de domenii separate prin virgulă la care datele de conectare vor fi restricționate la utilizarea acestui furnizor.';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = 'Adresa URL de bază a serviciului';
$string['issuerbaseurl_help'] = 'Adresa URL de bază utilizată pentru a accesa serviciul.';
$string['issuerclientid'] = 'ID client';
$string['issuerclientid_help'] = 'ID-ul client OAuth pentru acest emitent.';
$string['issuerclientsecret'] = 'Jetonul secret al clientului';
$string['issuerclientsecret_help'] = 'Jetonul secret al clientului OAuth pentru acest emitent.';
$string['issuerdeleted'] = 'Emitentul de identitate a fost șters';
$string['issuerdisabled'] = 'Emitentul de identitate este dezactivat';
$string['issuerenabled'] = 'Emitent de identitate a fost activat';
$string['issuerimage'] = 'Logo URL';
$string['issuerimage_help'] = 'O adresă URL a imaginii utilizată pentru a afișa o siglă pentru acest emitent. Poate fi afișat pe pagina de autentificare.';
$string['issuerloginpagename'] = 'Numele afișat pe pagina de autentificare';
$string['issuerloginpagename_help'] = 'Dacă se specifică acest lucru, acest nume va fi utilizat pe pagina de autentificare în loc de denumirea serviciului.';
$string['issuerloginparams'] = 'Parametri suplimentari incluși într-o cerere de autentificare.';
$string['issuerloginparams_help'] = 'Unele sisteme necesită parametri suplimentari pentru o cerere de autentificare pentru a citi profilul de bază al utilizatorului.';
$string['issuerloginparamsoffline'] = 'Parametri suplimentari incluși într-o cerere de conectare pentru acces offline.';
$string['issuerloginparamsoffline_help'] = 'Fiecare sistem OAuth definește un mod diferit de a solicita acces offline. De exemplu. Google necesită parametrii suplimentari: „access_type = offline & prompt = consent”. Acești parametri trebuie să fie în formatul parametrilor de interogare URL.';
$string['issuerloginscopes'] = 'Domenii de aplicare incluse într-o cerere de autentificare.';
$string['issuerloginscopes_help'] = 'Unele sisteme necesită domenii suplimentare pentru o cerere de autentificare pentru a citi profilul de bază al utilizatorului. Domeniile standard pentru un sistem compatibil cu OpenID Connect sunt „e-mailuri de profil openid”.';
$string['issuerloginscopesoffline'] = 'Domenii de aplicare incluse într-o cerere de conectare pentru acces offline.';
$string['issuerloginscopesoffline_help'] = 'Fiecare sistem OAuth definește un mod diferit de a solicita acces offline. De exemplu. Microsoft necesită un domeniu suplimentar „offline_access”.';
$string['issuername'] = 'Nume';
$string['issuername_help'] = 'Numele emitentului de identitate. Poate fi afișat pe pagina de autentificare.';
$string['issuerrequireconfirmation'] = 'Solicitați verificarea prin e-mail';
$string['issuerrequireconfirmation_help'] = 'Solicitați tuturor utilizatorilor să-și verifice adresa de e-mail înainte de a se putea conecta cu OAuth. Acest lucru se aplică conturilor nou create ca parte a procesului de autentificare sau când un cont Moodle existent este conectat la o autentificare OAuth prin adrese de e-mail potrivite.';
$string['issuers'] = 'Emitenți';
$string['issuersetup'] = 'Instrucțiuni detaliate despre configurarea serviciilor comune OAuth 2';
$string['issuersetuptype'] = 'Instrucțiuni detaliate despre configurarea furnizorului {$a} OAuth 2';
$string['issuershowonloginpage'] = 'Afișați pe pagina de autentificare';
$string['issuershowonloginpage_help'] = 'Dacă pluginul de autentificare OAuth 2 este activat, acest emitent de autentificare va fi listat pe pagina de autentificare pentru a permite utilizatorilor să se conecteze cu conturi de la acest emitent.';
$string['issuersservicesallow'] = 'Permite serviciile';
$string['issuersservicesnotallow'] = 'Nu permite serviciile';
$string['issuerusedforinternal'] = 'Servicii interne';
$string['issuerusedforlogin'] = 'Autentificare';
$string['issuerusein'] = 'Acest serviciu va fi folosit';
$string['issuerusein_help'] = 'Serviciile OAuth 2 pot fi folosite pentru servicii interne, pe pagina de autentificare, sau pe ambele, dacă este necesar.';
$string['issueruseineverywhere'] = 'Pagina de autentificare și servicii interne';
$string['issueruseininternalonly'] = 'Doar servicii interne';
$string['issueruseinloginonly'] = 'Doar pagina de login';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Afișează pe pagina de autentificare ca';
$string['loginissuer'] = 'Permiteți autentificarea';
$string['microsoft_service'] = 'Microsoft';
$string['moodlenet_service'] = 'MoodleNet';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Neconfigurat';
$string['notdiscovered'] = 'Descoperirea serviciului nu a reușit';
$string['notloginissuer'] = 'Nu permiteți autentificarea';
$string['pluginname'] = 'Servicii OAuth 2';
$string['privacy:metadata'] = 'Pluginul pentru servicii OAuth 2 nu stochează date personale.';
$string['savechanges'] = 'Salvează modificările';
$string['serviceshelp'] = 'Instrucțiuni de configurare a furnizorului de servicii.';
$string['systemaccountconnected'] = 'Cont de sistem conectat';
$string['systemaccountconnected_help'] = 'Conturile de sistem sunt utilizate pentru a oferi funcționalități avansate pentru pluginuri. Nu sunt necesare numai pentru funcționalitatea de conectare, dar alte pluginuri care utilizează serviciul OAuth pot oferi un set redus de caracteristici dacă contul de sistem nu a fost conectat. De exemplu, depozitele nu pot accepta „legături controlate” fără un cont de sistem pentru a efectua operațiuni de fișier.';
$string['systemaccountnotconnected'] = 'Contul de sistem nu este conectat';
$string['systemauthstatus'] = 'Cont de sistem conectat';
$string['usebasicauth'] = 'Autentificați solicitările de jetoane prin anteturi HTTP';
$string['usebasicauth_help'] = 'Utilizați schema de autentificare HTTP de bază atunci când trimiteți ID-ul clientului și parola cu o cerere de reîmprospătare a simbolului. Recomandat de standardul OAuth 2, dar este posibil să nu fie disponibil la unii emitenți.';
$string['userfieldexternalfield'] = 'Numele câmpului extern';
$string['userfieldexternalfield_error'] = 'Acest câmp nu poate conține HTML.';
$string['userfieldexternalfield_help'] = 'Numele câmpului furnizat de sistemul extern OAuth.';
$string['userfieldinternalfield'] = 'Numele câmpului intern';
$string['userfieldinternalfield_help'] = 'Numele câmpului de utilizator Moodle care ar trebui mapat din câmpul extern.';
$string['userfieldmappingdeleted'] = 'Maparea câmpului utilizatorului a fost ștearsă';
$string['userfieldmappingsforissuer'] = 'Maparea câmpului utilizatorului pentru emitent: {$a}';
