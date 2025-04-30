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
 * Strings for component 'enrol_lti', language 'nl', version '4.4'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontent'] = 'Voeg inhoud toe';
$string['adddeployment:deploymentid'] = 'Deployment-ID';
$string['adddeployment:deploymentid_help'] = 'Elke uitrol van de tool (deze site) in een platform zal een Deploymentl-ID krijgen die uniek is voor de registratie. De Deployment-ID moet geregistreerd worden in de tool (deze site) voor het starten van de tool-uitrol zal toegestaan worden.';
$string['adddeployment:invaliddeploymentiderror'] = 'Ongeldige Deployment-ID. De deployment-ID bestaat al voor deze app-registratie.';
$string['adddeployment:name'] = 'Uitrolnaam';
$string['addtocourse'] = 'Voeg toe aan cursus';
$string['addtogradebook'] = 'Voeg toe aan cijferlijst';
$string['allowframeembedding'] = 'Opmerking: je kunt het best de site-beheerinstelling \'Inbedden in frame\' op toestaan zetten, zodat tools getoond worden in een frame in plaats van in een nieuw venster.';
$string['authltimustbeenabled'] = 'Opmerking: deze plugin vereist dat de LTI authenticatieplugin ook ingeschakeld is.';
$string['cartridgeurl'] = 'Cartridge URL';
$string['cookiesarerequired'] = 'Jouw browser blokkeert cookies';
$string['cookiesarerequiredinfo'] = 'Deze tool kan niet gestart worden omdat je browser cookies van derden blokkeert.<br><br>
Om deze tool te kunnen gebruiken, moet je proberen de instellingen van je browser te wijzigen of een ander browser te gebruiken.';
$string['copiedtoclipboard'] = '{$a} gekopieerd naar klembord';
$string['copytoclipboard'] = 'Kopieer naar klembord';
$string['couldnotestablishproxy'] = 'Kon geen proxy met verbruiker opzetten';
$string['customproperties'] = 'Aangepaste eigenschappen';
$string['deeplinkingurl'] = 'Deep link URL';
$string['deletedactivity'] = 'Verwijderde activiteit';
$string['deletedactivityalt'] = 'De gedeelde activiteit is verwijderd';
$string['deletedactivitydescription'] = 'De activiteit die door deze instantie is gedeeld, is verwijderd. Je kunt een andere activiteit selecteren om te delen door deze instantie te bewerken of, als het niet langer nodig is, deze instantie verwijderen. Het verwijderen van deze instantie zal geassocieerde gebruikersaanmeldingen verwijderen.';
$string['deploymentadd'] = 'Voeg toe aan uitrol';
$string['deploymentaddnotice'] = 'Uitrol toegevoegd';
$string['deploymentdelete'] = 'Verwijder uitrol';
$string['deploymentdeleteconfirm'] = 'Waarschuwing: deze instantie verwijderen zal er voor zorgen dat alle gebruikers die een link volgen naar deze tool in het platform, geen toegang meer hebben. Lidmaatschap en cijfersynchronisatieservices zullen ook verwijderd worden voor deze bronnen. Weet je zeker dat je deployment-ID \'{$a}\' wil verwijderen?';
$string['deploymentdeletenotice'] = 'Uitrol verwijderd';
$string['deploymentid'] = 'Deployment-ID';
$string['deployments'] = 'Uitrol';
$string['deploymentsinfo'] = 'Er wordt een Deployment ID gegenereerd door het platform wanneer de tool beschikbaar is gemaakt in een context. Dit kan gebeuren op het moment van registratie, of later, wanneer de tool beschikbaar is gekomen voor een specifieke cursus of categorie. Het Deployment ID moet hier worden ingevoerd voordat het lanceren van deze tool is toegestaan.';
$string['details'] = 'Details';
$string['editplatformdetails'] = 'Bewerk details over platform';
$string['endpointltiversionnotice'] = 'De tool eindpunten hier onder zijn enkel voor het manueel instellen van LTI 1.3. Voor vroegere versies (1.1/1.2) kunnen details voor consumenten gevonden worden op de \'Publiceer als LTI-tools\'-pagina, die je vindt via de cursusnavigatie.';
$string['enrolenddate'] = 'Einddatum';
$string['enrolenddate_help'] = 'Indien ingeschakeld hebben gebruikers enkel tot die dag toegang.';
$string['enrolenddateerror'] = 'Aanmelding -en einddatum kunnen niet vroeger zijn dan startdatum';
$string['enrolisdisabled'] = 'De plugin "Publiceer als LTI" is uitgeschakeld.';
$string['enrolltiversionincorrect'] = 'De bron is niet ingesteld voor gebruik via verouderde LTI (versies 1.1/2.0). Neem contact op met de beheerder van deze tool.';
$string['enrolmentfinished'] = 'Aanmelding beëindigd.';
$string['enrolmentnotstarted'] = 'Aanmeldingen zijn nog niet begonnen.';
$string['enrolperiod'] = 'Aanmeldingsduur';
$string['enrolperiod_help'] = 'De tijdsduur waarvoor de aanmelding geldig is. Deze start op het moment dat een gebruiker zichzelf aanmeldt vanaf het externe systeem. Indien uitgeschakeld zal de aanmeldingsduur onbeperkt zijn.';
$string['enrolstartdate'] = 'Startdatum';
$string['enrolstartdate_help'] = 'Indien ingeschakeld kunnen gebruikers slechts vanaf deze datum toegang krijgen.';
$string['existingregistrationerror'] = 'Er bestaat al een registratie voor deze uitgever en client-ID';
$string['failedrequest'] = 'Mislukte aanvraag. Reden: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Volg onderstaande link om toegang te krijgen tot de tool.';
$string['gradesync'] = 'Cijfersynchronisatie';
$string['gradesync_help'] = 'Of cijfers van de tool naar het externe systeem (LTI gebruiker) gestuurd worden.';
$string['incorrecttoken'] = 'Het token was fout. Controleer de URL en probeer opnieuw of neem contact op met de beheerder van deze tool.';
$string['invalidexpiredregistrationurl'] = 'Ongeldige of vervallen registratie-URL. Genereer een nieuwe URL en probeer opnieuw.';
$string['invalidrequest'] = 'Ongeldige aanvraag';
$string['invalidtoolconsumer'] = 'Ongeldige tool-gebruiker.';
$string['jwksurl'] = 'JWKS-URL';
$string['launchdetails'] = 'Opstartdetails';
$string['launchdetails_help'] = 'Een cartridge URL (ook wel configuratie URL) plus een geheim zijn vereist voor het configureren van deze tool.';
$string['launchurl'] = 'Start URL';
$string['loginurl'] = 'Initieer login URL';
$string['lti13'] = 'LTI Advantage';
$string['lti13launchdetails'] = 'Lanceerdetails';
$string['lti13launchdetails_help'] = 'De start-URL en aangepaste eigenschappen zijn alleen vereist bij het handmatig configureren van een bronlink in het platform. Waar mogelijk moeten leraren de voorkeur geven aan het proces van inhoudselectie (deeplinking) voor het maken van koppelingen naar bronnen.';
$string['lti:config'] = 'Configureer \'Publiceer als LTI-tool\'-instanties';
$string['lti:unenrol'] = 'Gebruikers afmelden van de cursus';
$string['ltiadvdynregerror:invalidopenidconfigjson'] = 'Er is een probleem opgetreden bij het ophalen van de OpenID-configuratie van het platform. Het resultaat was geen geldige JSON. Dit kan ook worden veroorzaakt door geblokkeerde hosts-configuratie. Zorg ervoor dat uw site is geconfigureerd om verbinding te maken met het platformdomein en probeer het opnieuw met een nieuwe registratie-URL.';
$string['ltiadvlauncherror:invaliddeployment'] = 'Ongeldige startgegevens of toolconfiguratie. De implementatie kan niet worden gevonden (deployment_id: {$a}).';
$string['ltiadvlauncherror:invalidid'] = 'Ongeldige startgegevens. De bron \'{$a}\' is niet beschikbaar of bestaat niet.';
$string['ltiadvlauncherror:invalidregistration'] = 'Ongeldige startgegevens of toolconfiguratie. Er is geen platformregistratie gevonden (uitgever: {$a->platform}, client-id: {$a->clientid}).';
$string['ltiadvlauncherror:missingid'] = 'Ongeldige startgegevens. Het aangepaste claimveld \'id\' is vereist om een activiteit of bron te starten via LTI Advantage.';
$string['ltilegacy'] = 'Verouderde LTI (1.1/2.0)';
$string['ltilegacydeprecatednotice'] = 'Verouderde LTI-tools (1.1/2.0) zijn verouderd. Inhoud moet nu worden gedeeld met LTI Advantage.';
$string['ltiversion'] = 'LTI-versie';
$string['ltiversion_help'] = 'De versie van LTI die wordt gebruikt om toegang te krijgen tot de gepubliceerde inhoud.

Met LTI Advantage kan inhoud worden gepubliceerd op vooraf geregistreerde platforms zonder dat wijzigingen op het platform hoeven te worden aangebracht wanneer nieuwe inhoud wordt gepubliceerd. Het beveiligingscontract is tussen het platform en de tool.

Verouderde versies (1.1 en 2.0) vereisen dat een nieuwe tool-registratie bij de consument wordt gemaakt voor elk stuk nieuw gepubliceerde inhoud, omdat elk stuk gepubliceerde inhoud zijn eigen beveiligingscontract heeft met de consumenten-site en item per item moet worden ingesteld.';
$string['managedeployments'] = 'Implementaties beheren';
$string['maxenrolled'] = 'Maximaal aantal aangemelde gebruikers';
$string['maxenrolled_help'] = 'Het maximale aantal externe gebruikers die toegang krijgen tot de tool. Indien je dit op nul zet zal het aantal aangemelde gebruikers onbeperkt zijn.';
$string['maxenrolledreached'] = 'Het maximale aantal externe gebruikers die toegelaten worden tot de tool is bereikt.';
$string['membersync'] = 'Gebruikerssynchronisatie';
$string['membersync_help'] = 'Of een geplande taak aangemelde gebruikers in het externe systeem synchroniseert met aanmeldingen in deze cursus, waarbij een account voor elke gebruiker wordt gemaakt indien nodig en gebruikers aangemeld en afgemeld worden zoals vereist door het externe systeem.

Indien dit op nee gezet wordt, dan zal er een account gemaakt worden en die zal aangemeld worden wanneer een externe gebruiker de tool gebruikt.';
$string['membersyncmode'] = 'Gebruikerssynchronisatiemodus';
$string['membersyncmode_help'] = 'Of externe gebruikers moeten worden aangemeld en/of afgemeld van deze cursus.';
$string['membersyncmodeenrolandunenrol'] = 'Nieuwe gebruikers aanmelden en ontbrekende gebruikers afmelden';
$string['membersyncmodeenrolnew'] = 'Nieuwe gebruikers aanmelden';
$string['membersyncmodeunenrolmissing'] = 'Ontbrekende gebruikers afmelden';
$string['moodle'] = 'Moodle';
$string['nodeployments'] = 'Geen tool-implementaties gevonden';
$string['nopublishedcontent'] = 'Er zijn nog geen bronnen of activiteiten gepubliceerd';
$string['noregisteredplatforms'] = 'Geen geregistreerde platformen';
$string['notoolsprovided'] = 'Geen tools beschikbaar';
$string['opensslconfiginvalid'] = 'Voor LTI 1.3 moet een geldige openssl.cnf worden geconfigureerd en beschikbaar zijn voor uw webserver. Neem contact op met de sitebeheerder om openssl voor deze site te configureren en in te schakelen.';
$string['opentool'] = 'Open tool';
$string['platformdetails'] = 'Details over platform';
$string['platformdetailsinfo'] = 'Wanneer de tool ingesteld is op het platform, moeten de details over het platform hier opgenomen worden om de registratie te voltooien.
<ul>
<li>Voor dynamische registraties zal deze informatie automatisch ingesteld worden en zijn er geen verdere wijzigingen nodig.</li>
<li>Voor manuele registraties moet deze informatie manueel van het platform gekopieerd worden.</li>
</ul>';
$string['pluginname'] = 'Publiceer als LTI-tool';
$string['pluginname_desc'] = 'De \'Publiceer als LTI-tool\'-plugin, samen met de LTI authenticatieplugin  maakt het voor externe gebruikers mogelijk om toegang te krijgen tot geselecteerde cursussen en activiteiten. Met andere woorden: Moodle werkt als een LTI-tool-provider.';
$string['privacy:metadata:enrol_lti_users'] = 'De lijst van gebruikers die aangemeld zijn via een LTI-provider';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Het tijdstip waarop de gebruiker laatst toegang had tot de cursus';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Het laatste cijfer dat van de gebruiker bewaard is';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Het tijdstip waarop de gebruiker aangemeld is';
$string['privacy:metadata:enrol_lti_users:userid'] = 'De ID van de gebruiker';
$string['provisioningmode'] = 'Inrichtingsmodus';
$string['provisioningmode_help'] = 'Deze instelling bepaalt hoe accounts worden behandeld bij de eerste keer opstarten. Verschillende modi worden ondersteund:
<ul>
<li>Alleen nieuwe accounts (automatisch). Accounts worden automatisch aangemaakt voor gebruikers die vanaf het platform starten. Dit is de standaardinstelling voor lanceringen door leerlingen.</li>
<li>Bestaande en nieuwe accounts (prompt). De gebruiker krijgt de keuze wat hij moet doen. Die kan besluiten een bestaand account te koppelen, of een nieuw account voor hen aan te laten maken. Dit is de meest flexibele optie en de standaard voor het starten van leraren.</li>
<li>Alleen bestaande accounts (prompt). De gebruiker wordt gevraagd om een bestaand account te koppelen en heeft geen toegang tot de toolbronnen zonder dit te doen.</li>
</ul>';
$string['provisioningmodestudentlaunch'] = 'Leerling start eerst de inrichtingsmodus';
$string['provisioningmodeteacherlaunch'] = 'Leraar start eerst de inrichtingsmodus';
$string['publishedcontent'] = 'Gepubliceerde inhoud';
$string['publishedcontent_help'] = 'Een gepubliceerde bron of activiteit kan worden gebruikt in geregistreerde platforms via de inhoudselectie (deeplinking) stroom. Bovendien kan een bron-link handmatig in het platform worden gemaakt met behulp van de start-URL en de verstrekte aangepaste eigenschappen.';
$string['registeredplatforms'] = 'Geregistreerde platforms';
$string['registeredplatformsltiversionnotice'] = 'Onderstaande platforms zijn geregistreerd voor LTI 1.3 communicatie. Voor eerdere versies is consumentenregistratie niet vereist.';
$string['registerplatform:accesstokenurl'] = 'Toegangstoken-URL';
$string['registerplatform:accesstokenurl_help'] = 'De URL waarnaar verzoeken om toegangstokens worden verzonden door de tool. Wordt geleverd door het platform.';
$string['registerplatform:authrequesturl'] = 'URL voor authenticatieverzoek';
$string['registerplatform:authrequesturl_help'] = 'De URL waarnaar OpenID Connect-verificatieverzoeken door de tool worden verzonden. Wordt geleverd door het platform.';
$string['registerplatform:clientid'] = 'Client-ID';
$string['registerplatform:clientid_help'] = 'Een tekenreeks die wordt gebruikt om de tool-registratie op het platform te identificeren. Wordt geleverd door het platform.';
$string['registerplatform:duplicateregistrationerror'] = 'Ongeldige Client-ID. Deze Client-ID is al geregistreerd voor de opgegeven Platform-ID.';
$string['registerplatform:invalidurlerror'] = 'Ongeldige URL. Heb je http:// of https:// opgenomen?';
$string['registerplatform:jwksurl'] = 'URL van openbare sleutelset';
$string['registerplatform:jwksurl_help'] = 'De openbare sleutelset of JWKS-URL, die wordt gebruikt om de openbare sleutel van het platform op te halen. Wordt geleverd door het platform.';
$string['registerplatform:name'] = 'Platformnaam';
$string['registerplatform:name_help'] = 'Een korte naam om het platform te beschrijven. Dit kan op ieder moment worden aangepast.';
$string['registerplatform:platformid'] = 'Platform-ID (uitgever)';
$string['registerplatform:platformid_help'] = 'De URL die het leerplatform van derden identificeert. Wordt geleverd door het platform.';
$string['registerplatformadd'] = 'Registreer een platform';
$string['registerplatformaddnotice'] = 'Platformregistratie toegevoegd';
$string['registerplatformdelete'] = 'Platformregistratie verwijderen';
$string['registerplatformdeleteconfirm'] = 'Weet je zeker dat je de registratie voor het platform \'{$a}\' wilt verwijderen? Hiermee worden ook alle tool-implementaties verwijderd die zijn opgeslagen voor deze registratie.';
$string['registerplatformdeletenotice'] = 'Platformregistratie verwijderd';
$string['registerplatformedit'] = 'Registratie bewerken';
$string['registerplatformeditnotice'] = 'Platformregistratie bijgewerkt';
$string['registration'] = 'Gepubliceerder toolregistratie';
$string['registrationdeeplinklabel'] = 'Inhoud toevoegen van {$a}';
$string['registrationdynamic'] = 'Dynamische registratie';
$string['registrationmanual'] = 'Handmatige registratie';
$string['registrationresourcelinklabel'] = 'Start inhoud van {$a}';
$string['registrationstatus'] = 'Status';
$string['registrationstatusactive'] = 'Actief';
$string['registrationstatuspending'] = 'In afwachting';
$string['registrationurl'] = 'Registratie-URL';
$string['registrationurl_help'] = 'Indien er een registratie-URL (ook wel proxy URL) wordt gebruikt, wordt deze tool automatisch geconfigureerd.';
$string['registrationurlinfomessage'] = 'Als het platform dynamische registratie ondersteunt, gebruik dan onderstaande registratie-URL.   Lees voor meer informatie over dynamische registratie de documentatie <a href="{$a}">Publiceren als LTI-tool</a>.';
$string['remotesystem'] = 'Extern systeem';
$string['requirecompletion'] = 'Vereis cursus of activiteit voltooid voor synchronisatie van cijfers';
$string['returnurlnotset'] = 'De terugkeer-URL is niet ingesteld';
$string['roleinstructor'] = 'Rol voor leraar';
$string['roleinstructor_help'] = 'De rol in de tool toegewezen aan de externe leraar.';
$string['rolelearner'] = 'Rol voor leerling';
$string['rolelearner_help'] = 'De rol in de tool toegewezen aan de externe leerling.';
$string['secret'] = 'Geheim';
$string['secret_help'] = 'Een string met tekens die gedeeld wordt met het externe systeem (LTI verbruiker) om toegang te verschaffen tot de tool.';
$string['sharedexternaltools'] = 'Gepubliceerd als LTI tools';
$string['successfulregistration'] = 'Registratie gelukt';
$string['tasksyncgrades'] = 'Publiceer als LTI-tool met gesynchroniseerde cijfers';
$string['tasksyncmembers'] = 'Publiceer als LTI-tool met gesynchroniseerde gebruikers';
$string['tooldetails'] = 'Details over tool';
$string['toolsprovided'] = 'Gepubliceerde tools';
$string['toolsprovided_help'] = 'Een tool kan gedeeld worden met een andere site door startdetails door te geven of met een registratie-URL.';
$string['tooltobeprovided'] = 'Te publiceren tool';
$string['toolurl'] = 'Tool URL';
$string['userdefaultvalues'] = 'Standaard waarden gebruikers';
$string['viewplatformdetails'] = 'Bekijk details over platform';
$string['viewtoolendpoints'] = 'Bekijk endpoints van tool';
