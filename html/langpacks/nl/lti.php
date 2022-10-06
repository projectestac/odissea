<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'lti', language 'nl', branch 'MOODLE_38_STABLE'
 *
 * @package   lti
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Aanvaard';
$string['accepted'] = 'Aanvaard';
$string['accept_grades'] = 'Aanvaard cijfers van de tool';
$string['accept_grades_admin'] = 'Aanvaard cijfers van de tool';
$string['accept_grades_admin_help'] = 'Specifieer of de tool provider cijfers die geassocieerd zijn met exemplaren van deze tool mag toevoegen, updaten, lezen, en verwijderen.

Sommige tool providers ondersteunen de mogelijkheid om cijfers terug te rapporteren aan Moodle op basis van acties ondernomen binnen de tool, waardoor een meer integrale ervaring wordt gecreëerd.';
$string['accept_grades_help'] = 'Specifieer of de tool provider cijfers die geassocieerd zijn met enkel deze externe instantie van de tool mag toevoegen, updaten, lezen, en verwijderen.

Sommige tool providers ondersteunen de mogelijkheid om cijfers terug te rapporteren aan Moodle op basis van acties ondernomen binnen de tool, waardoor een meer integrale ervaring wordt gecreëerd.

Merk op date deze instelling overschreven kan worden in de tool-configuratie.';
$string['action'] = 'Actie';
$string['activate'] = 'Activeer';
$string['activatetoadddescription'] = 'Je moet deze tool activeren voor je een beschrijving kan toevoegen.';
$string['active'] = 'Actief';
$string['activity'] = 'Activiteit';
$string['addnewapp'] = 'Schakel de externe applicatie in';
$string['addserver'] = 'Voeg een vertrouwde server toe';
$string['addtype'] = 'Voeg voorgeconfigureerde tool toe';
$string['allow'] = 'Sta toe';
$string['allowsetting'] = 'Sta de tool toe om 8K aan instellingen in Moodle te bewaren';
$string['always'] = 'Altijd';
$string['autoaddtype'] = 'Tool toevoegen';
$string['automatic'] = 'Automatisch, gebaseerd op de tool-URL';
$string['baseurl'] = 'Basis URL/tool registratienaam';
$string['basiclti'] = 'LTI';
$string['basicltiactivities'] = 'LTI activiteiten';
$string['basiclti_base_string'] = 'LTI OAuth Base String';
$string['basiclti_endpoint'] = 'LTI Launch Endpoint';
$string['basicltifieldset'] = 'Aangepast voorbeeld veldset';
$string['basiclti_in_new_window'] = 'Je activiteit heeft een nieuw venster geopend';
$string['basiclti_in_new_window_open'] = 'Openen in een nieuw venster';
$string['basicltiintro'] = 'Activiteitsbeschrijving';
$string['basicltiname'] = 'Naam activiteit';
$string['basiclti_parameters'] = 'LTI startparameters';
$string['basicltisettings'] = 'Basis Learning Tool Interoperability instellingen';
$string['cancel'] = 'Annuleer';
$string['cancelled'] = 'Geannuleerd';
$string['cannot_delete'] = 'Je mag deze tool configuratie niet verwijderen.';
$string['cannot_edit'] = 'Je mag deze toolconfiguratie niet bewerken.';
$string['capabilities'] = 'Mogelijkheden';
$string['capabilities_help'] = 'Kies de mogelijkheden die je wil aanbieden aan de tool provider. Er kan meer dan één mogelijkheid geselecteerd worden.';
$string['capabilitiesrequired'] = 'Deze tool vereist toegang tot de volgende gegevens om te activeren:';
$string['cleanaccesstokens'] = 'Externe gereedschapsverwijdering van verlopen toegangstokens';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Klik om verder te gaan</a>';
$string['clientidadmin'] = 'Client-ID';
$string['clientidadmin_help'] = 'De client-ID kan worden beschouwd als een unieke waarde die wordt gebruikt om een tool te identificeren.
Het wordt automatisch gemaakt voor elke tool die het JWT-beveiligingsprofiel gebruikt dat is geïntroduceerd in LTI 1.3 en zou moeten deel uitmaken van de gegevens die aan de leverancier van de tool zijn doorgegeven, zodat ze de verbinding aan het einde kunnen configureren.';
$string['comment'] = 'Opmerking';
$string['configpassword'] = 'Standaard externe tool wachtwoord';
$string['configpreferheight'] = 'Standaard voorkeurshoogte';
$string['configpreferwidget'] = 'Schakel widget in als standaard lancering';
$string['configpreferwidth'] = 'Standaard voorkeursbreedte';
$string['configresourceurl'] = 'Standaard bron URL';
$string['configtoolurl'] = 'Standaard externe tool URL';
$string['configtypes'] = 'LTI applicaties inschakelen';
$string['configured'] = 'Geconfigureerd';
$string['confirmtoolactivation'] = 'Bent je er zeker van dat je deze tool wilt activeren?';
$string['contentitem'] = 'Inhoud-item bericht';
$string['contentitem_help'] = 'Indien ingeschakeld zal de optie "Selecteer inhoud" beschikbaar zijn bij het toevoegen van een externe tool.';
$string['courseactivitiesorresources'] = 'Cursusactiviteiten en bronnen';
$string['courseid'] = 'Cursus ID nummer';
$string['courseinformation'] = 'Cursusinformatie';
$string['courselink'] = 'Ga naar cursus';
$string['coursemisconf'] = 'Cursus is slecht geconfigureerd';
$string['course_tool_types'] = 'Cursus tools';
$string['createdon'] = 'Gemaakt op';
$string['curllibrarymissing'] = 'PHP Curl moet geïnstalleerd zijn om de Externe Tool te kunnen gebruiken';
$string['custom'] = 'Eigen parameters';
$string['custom_config'] = 'Eigen tool configuratie gebruiken';
$string['custom_help'] = 'Aangepaste parameters zijn instellingen gebruikt door de tool provider. Een aangepaste parameter kan bijvoorbeeld worden gebruikt om een specifieke bron van de provider te tonen. Elke parameter moet ingegeven worden op een aparte lijn door gebruik te maken van de formate "naam=waarde", bijvoorbeeld "chapter=3"

Het is veilig om dit veld ongewijzigd te laten tenzij op vraag van de tool provider.';
$string['custominstr'] = 'Aangepaste parameters';
$string['debuglaunch'] = 'Debug optie';
$string['debuglaunchoff'] = 'Normale lancering';
$string['debuglaunchon'] = 'Debug lancering';
$string['default'] = 'Standaard';
$string['default_launch_container'] = 'Standaard lanceringscontainer';
$string['default_launch_container_help'] = 'De lanceringscontainer beïnvloedt de opmaak van de tool wanneer die wordt gelanceerd vanuit de cursus. Sommige lanceringscontainers gunnen meer ruimte op het scherm aan de tool, andere geven een meer geïntegreerd beeld binnen de Moodle omgeving.

* **Standaard** - Gebruik de lanceringscontainer die wordt gespecifieerd in de tool configuratie.
* **Embed** - De tool wordt getoond binnen het bestaande Moodle venster, op een gelijkaardige manier als de meeste andere activiteitstypes.
* **Embed, zonder blokken** - De tool wordt getoond binnen het bestaande Moodle venster, met enkel de navigatie bediening bovenaan de pagina.
* **Nieuw venster** - De tool opent in een nieuw venster, en neemt de volledige ruimte in. Afhankelijk van de browser zal het openen in een nieuwe tab of in een pop-upvenster. De kans bestaat dat browsers het openen van een nieuw venster zullen verhinderen.';
$string['delegate'] = 'Delegeer aan leraar';
$string['delete'] = 'Verwijder';
$string['delete_confirmation'] = 'Ben je zeker dat je deze voorgeconfigureerde tool wil verwijderen?';
$string['deletetype'] = 'Verwijder de voorgeconfigureerde tool';
$string['display_description'] = 'Toon de activiteitsbeschrijving bij lancering';
$string['display_description_help'] = 'Indien geselecteerd, dan zal de activiteitsbeschrijving (hierboven vermeld) getoond worden boven de hoofdinhoud van de tool provider.

De beschrijving kan worden gebruikt om aanvullende instructies te geven aan diegenen die de tool lanceren, maar dit is geen vereiste.

De beschrijving wordt nooit getoond wanneer de lanceringscontainer van de tool opent in een nieuw venster.';
$string['display_name'] = 'Toon de activiteitsnaam bij lancering';
$string['display_name_help'] = 'Indien geselecteerd, dan zal de activiteitsnaam (hierboven vermeld) getoond worden boven de hoofdinhoud van de tool provider.

Het is mogelijk dat ook de tool provider  de titel toont. Deze optie laat toe te vermijden dat de activiteitstitel twee keer wordt getoond

De titel wordt nooit getoond wanneer de lanceringscontainer van de tool opent in een nieuw venster.';
$string['domain_mismatch'] = 'Het domein van de URL komt niet overeen met de tool-configuratie.';
$string['donot'] = 'Verstuur dit niet';
$string['donotaccept'] = 'Aanvaard dit niet';
$string['donotallow'] = 'Sta dit niet toe';
$string['duplicateregurl'] = 'De registratie-URL is al in gebruik';
$string['editdescription'] = 'Klik hier om deze tool een beschijving te geven';
$string['edittype'] = 'Bewerk voorgeconfigureerde tool';
$string['embed'] = 'Embed';
$string['embed_no_blocks'] = 'Embed, zonder blokken';
$string['enableemailnotification'] = 'Verstuur e-mails met meldingen';
$string['enableemailnotification_help'] = 'Indien ingeschakeld, zullen de leerlingen een e-mailmelding ontvangen wanneer hun tool opdrachten beoordeeld werden.';
$string['enterkeyandsecret'] = 'Geef je consumer key en shared secret';
$string['enterkeyandsecret_help'] = 'Als je een verbruikerssleutel en/of gedeeld geheim gekregen hebt, geeft het dan hier in';
$string['errorbadurl'] = 'URL is geen geldige tool URL of cartridge';
$string['errorincorrectconsumerkey'] = 'Verbruikerssleutel is niet juist.';
$string['errorinvaliddata'] = 'Ongeldige gegevens: {$a}';
$string['errorinvalidmediatype'] = 'Ongeldig mediatype: {$a}';
$string['errorinvalidresponseformat'] = 'Ongeldige inhoud-item antwoordopmaak.';
$string['errormisconfig'] = 'Fout geconfigureerde tool. Vraag uw Moodle beheerder om de configuratie van de tool te wijzigen.';
$string['errortooltypenotfound'] = 'LTI tool-type niet gevonden.';
$string['existing_window'] = 'Bestaand venster';
$string['extensions'] = 'LTI extensie services';
$string['external_tool_type'] = 'Voorgeconfigureerde tool';
$string['external_tool_type_help'] = '* **Automatisch, gebaseerd op de tool-URL** - De beste tool-configuratie wordt automatisch geselecteerd. Als de tpol-URL niet automatisch wordt herkent, zul je de details van de tool configuratie manueel moeten invoeren.
* **Een specifiek tool type** - De tool-configuratie voor een bepaalde tool zal gebruikt worde tijdens de communicatie met de externe tool provider. Als de tool-URL niet bij de tool provider hoort, dan wordt een waarschuwing getoond. Het is niet altijd nodig om een tool-URL in te voeren.
* **Aangepaste configuratie** - Er moet waarschijnlijk manueel een consumer key en de shared secret ingevoerd worden. Die kun je ontvangen van de tool provider.
Niet alle tools vereisen een consumer key en een shared secret;. In dit geval kun je de velden open laten.

###Bewerken van tool type

Er zijn drie icoontjes beschikbaar in de externe tool-type rolmenu:

* **Toevoegen** - Maak een tool-configuratie aan op cursusniveau. Alle externe tool-instanties in deze cursus kunnen de tool-configuratie gebruiken.
* **Bewerken** - Selecteer een tool-type op cursusniveau in het rolmenu en klik dan op dit icoontje. De details van de tool-configuratie kunnen worden bewerkt.
* **Verwijderen** - Verwijder het geselecteerde tool-type op cursusniveau.';
$string['external_tool_types'] = 'Voorgeconfigureerde tools';
$string['failedtoconnect'] = 'Moodle was niet in staat om te communiceren met het "{$a}" systeem';
$string['failedtocreatetooltype'] = 'Nieuwe tool maken mislukt. Controleer de url en probeer opnieuw.';
$string['failedtodeletetoolproxy'] = 'Toolregistratie verwijderen mislukt. Bezoek de "Beheer externe toolregistraties" en verwijder het manueel.';
$string['filter_basiclti_configlink'] = 'Configureer je favoriete sites en hun wachtwoorden';
$string['filter_basiclti_password'] = 'Wachtwoord is verplicht';
$string['filterconfig'] = 'LTI administratie';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Gebruik een bestaande configuratie voor een fout geconfigureerde instantie';
$string['fixnew'] = 'Nieuwe configuratie';
$string['fixnewconf'] = 'Definieer een nieuwe configuratie voor de fout geconfigureerde instantie';
$string['fixold'] = 'Gebruik bestaande';
$string['forced_help'] = 'Deze instelling werd opgelegd in een tool configuratie op niveau van de cursus of de site. Je kunt dit niet veranderen vanuit deze interface.';
$string['force_ssl'] = 'Dwing SSL af';
$string['force_ssl_help'] = 'Door de keuze voor deze optie wordt  het gebruik van SSL verplicht bij alle lanceringen naar deze tool provider.

Bijkomend zullen ook alle web service verzoeken van de tool provider gebruik maken van SSL.

Indien je voor deze optie kiest, ga dan eerst na of de Moodle site en de tool provider SSL ondersteunen.';
$string['generaltool'] = 'Algemene tool';
$string['global_tool_types'] = 'Globale voorgeconfigureerde tools';
$string['grading'] = 'Cijferlijst routing';
$string['icon_url'] = 'URL icoontje';
$string['icon_url_help'] = 'Deze icoon-URL maakt het mogelijk om het icoontje dat deze activiteit aanduidt in de cursuslijst te wijzigen. In plaats van gebruik te maken van het standaard LTI icoon, kan een icoontje worden gespecifieerd dat het type activiteit aanduidt.';
$string['id'] = 'ID';
$string['indicator:cognitivedepth'] = 'LTI cognitief';
$string['indicator:cognitivedepthdef'] = 'LTI cognitief';
$string['indicator:cognitivedepthdef_help'] = 'De deelnemer heeft dit percentage van de cognitieve betrokkenheid van de LTI-activiteiten tijdens dit analyse-interval bereikt (Niveaus = Geen weergave, Bekijken, Verzenden, Feedback bekijken)';
$string['indicator:cognitivedepth_help'] = 'Deze indicator is gebaseerd op de door de leerling bereikte cognitieve diepte in een LTI activiteit.';
$string['indicator:socialbreadth'] = 'LTI sociaal';
$string['indicator:socialbreadthdef'] = 'LTI sociaal';
$string['indicator:socialbreadthdef_help'] = 'De deelnemer heeft dit percentage van de maatschappelijke betrokkenheid van de LTI-activiteiten tijdens dit analyse-interval bereikt (Niveaus = Geen deelname, alleen deelnemer, deelnemer met anderen)';
$string['indicator:socialbreadth_help'] = 'Deze indicator is gebaseerd op de door de leerling behaalde sociale breedte in een LTI activiteit.';
$string['initiatelogin'] = 'Inlog-URL initiëren';
$string['initiatelogin_help'] = 'De tool-URL waarnaar aanvragen voor het starten van een login moeten worden verzonden. Deze URL is vereist voordat een bericht met succes naar de tool kan worden verzonden.';
$string['invalidid'] = 'LTI ID was foutief';
$string['jwtsecurity'] = 'LTI 1.3';
$string['launch_in_moodle'] = 'Starttool in Moodle';
$string['launchinpopup'] = 'Container voor lancering';
$string['launch_in_popup'] = 'Tool voor lancering in een pop-up';
$string['launchinpopup_help'] = 'De container voor lancering beïnvloedt de wijze waarop de tool wordt getoond wanneer de lancering vanuit de cursus gebeurt. Sommige containers voor lancering bieden meer ruimte aan de tool op het scherm, andere zorgen voor een meer geïntegreerd geheel in de Moodle omgeving.

* **Standaard** - Gebruik de container voor lancering die gespecificeerd staat in de tool configuratie.
* **Embed** - De tool wordt getoond binnen het open Moodle venster, zoals bij de meeste andere activiteitstypes gebeurt.
* **Embed, zonder blokken** - De tool wordt getoond binnen het open Moodle venster, met enkel de navigatie bediening bovenaan de pagina.
* **Nieuw venster** - De tool opent in een nieuw venster, waar het alle beschikbare ruimte inneemt.
Afhankelijk van de browser zal het openen in een nieuwe tab of in een pop-up venster. Het is mogelijk dat de browser het openen van een nieuw venster verhindert.';
$string['launchoptions'] = 'Opties voor lancering';
$string['launch_url'] = 'Tool-URL';
$string['launch_url_help'] = 'De tool-URL geeft het webadres aan van de Externe Tool, en kan ook bijkomende informatie bevatten, zoals de te tonen bron. Als je niet zeker bent welke URL van lancering je moet invoeren, contacteer dan de tool provider voor meer informatie.

Je kunt een cartridge URL ingeven als je die hebt, dan zal de rest van het formulier automatisch ingevuld worden.

Indien je een voorgeconfigureerde tool hebt gekozen, kan het onnodig zijn om een tool-URL te geven. Dit is meestal het geval wanneer de tool-link enkel wordt gebruikt voor het starten van de tool in het systeem van de tool provider, en niet om naar een specifieke bron te gaan.';
$string['leaveblank'] = 'Laat leeg als je ze niet nodig hebt';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Voeg cursusspecifieke tool-configuraties toe';
$string['lti:addinstance'] = 'Voeg een nieuwe externe tool-activiteit toe';
$string['lti:admin'] = 'Wordt beheerder wanneer de tool wordt gestart';
$string['lti_administration'] = 'Bewerk voorgeconfigureerde tool';
$string['lti_errormsg'] = 'De tool zond de volgende foutmelding terug: "{$a}"';
$string['lti:grade'] = 'Bekijk cijfers die door de externe tool gegeven zijn';
$string['lti_launch_error'] = 'Er is een fout opgetreden bij het starten van de externe tool:';
$string['lti_launch_error_tool_request'] = 'Indien je een verzoek wil richten aan een beheerder om de tool configuratie te vervolledigen, klik <a href="{$a->admin_request_url}" target="_top">hier</a>.';
$string['lti_launch_error_unsigned_help'] = '<p>Deze fout is waarschijnlijk het resultaat van een ontbrekende consumentensleutel en gedeeld geheim voor de tool provider.
</p><p>
Indien je een consumentensleutel en een gedeeld geheim hebt, kun je deze invoeren wanneer je de externe tool instantie bewerkt (zorg ervoor dat de geavanceerde opties zichtbaar zijn).</p>
<p>Een andere mogelijkheid is om <a href="{$a->course_tool_editor}">een tool provider configuratie op cursus niveau aan te maken</a>.
</p>';
$string['lti:manage'] = 'Wordt leraar wanneer de tool wordt gestart';
$string['lti:requesttooladd'] = 'Vraag om een tool site-breed te configureren';
$string['ltisettings'] = 'LTI instellingen';
$string['lti_tool_request_added'] = 'Het verzoek tot tool configuratie werd succesvol ingediend. Het is misschien nodig om een beheerder  te contacteren om de toolconfiguratie te voltooien.';
$string['lti_tool_request_existing'] = 'Een tool configuratie voor het tool domein werd al eerder ingediend.';
$string['ltiunknownserviceapicall'] = 'LTI onbekende service API call';
$string['ltiversion'] = 'LTI-versie';
$string['ltiversion_help'] = 'De versie van LTI die wordt gebruikt voor het ondertekenen van berichten en serviceverzoeken: LTI 1.0 / 1.1 en LTI 2.0 gebruiken het beveiligingsprofiel OAuth 1.0A; LTI 1.3.0 maakt gebruik van JWT\'s.';
$string['lti:view'] = 'Start externe tool-activiteiten';
$string['main_admin'] = 'Algemene hulp';
$string['main_admin_help'] = 'Externe tools laten Moodle gebruikers toe om probleemloos om te gaan met leermiddelen die extern gehost worden.  Via een speciaal lanceringsprotocol zal de externe tool toegang hebben tot bepaalde algemene informatie over de gebruiker die de tool lanceert. Bijvoorbeeld de naam van de instelling, cursus ID, gebruikers ID, en andere informatie zoals de naam of het e-mailadres van de gebruiker.

De tool types op deze pagina worden in drie categorieën onderverdeeld:

* **Actief** - Deze tool providers werden goedgekeurd en ingesteld door de beheerder. Ze kunnen gebruikt worden vanuit elke cursus in deze Moodle instantie.
Indien een consumentensleutel en gedeeld geheim worden ingevoerd, ontstaat er een vertrouwensrelatie tussen deze Moodle instantie en de externe tool, en wordt er een veilig communicatiekanaal voorzien.
* **In behandeling** - Deze tool providers werden aangebracht via een package invoer, maar werden nog niet geconfigureerd door de beheerder.
Leraars kunnen toch gebruik maken van de tools van deze providers indien ze in het bezit zijn van een consumentensleuten en gedeeld geheim, of indien deze niet worden vereist.
* **Geweigerd** - Deze zijn gevlagd als tool providers die de beheerder niet wenst beschikbaar te maken voor de volledige Moodle instantie. Leraars kunnen toch gebruik maken van de tools van deze providers indien ze in het bezit zijn van een consumentensleuten en gedeeld geheim, of indien deze niet worden vereist.';
$string['manage_external_tools'] = 'Beheer tools';
$string['manage_tool_proxies'] = 'Beheer externe tool registraties';
$string['manage_tools'] = 'Beheer voorgeconfigureerde tools';
$string['manuallyaddtype'] = 'Je kunt ook <a href="{$a}">een tool manueel configureren</a>.';
$string['miscellaneous'] = 'Divers';
$string['misconfiguredtools'] = 'Er werden fout geconfigureerde tool-exemplaren aangetroffen';
$string['missingparameterserror'] = 'Deze pagina is fout geconfigureerd: "{$a}"';
$string['module_class_type'] = 'Moodle module type';
$string['modulename'] = 'Externe tool';
$string['modulename_help'] = 'De externe tool-activiteitsmodule maakt het voor leerlingen mogelijk om te interageren met bronnen en activiteiten op andere websites. Een externe tool kan bijvoorbeeld toegang geven tot een nieuw activiteitstype of leermateriaal van een uitgever.

Om een externe toolactiviteit te maken, is een tool provider nodig die LTI (Learning Tools Interoperability) ondersteunt. Een leraar kan een externe tool-activiteit maken of er één gebruiken die door de site beheerder gemaakt is.

Externe tool-activiteiten verschillen van URL-bronnen op verschillende manieren:

*Externe tools zijn contextbewust - ze hebben toegang tot informatie over wie de tool gestart heeft, zoals instituut, cursus en naam
* Externe tools ondersteunen lezen, aanpassen en verwijderen van cijfers die aan de activiteit gelinkt zijn
* Externe tool configuraties maken een vertrouwensrelatie tussen jouw site en de tool provider, waardoor een beveiligde communicatie tussen de twee mogelijk is';
$string['modulenameplural'] = 'Externe tools';
$string['modulenamepluralformatted'] = 'LTI-exemplaren';
$string['name'] = 'Naam';
$string['never'] = 'Nooit';
$string['new_window'] = 'Nieuw venster';
$string['noattempts'] = 'Er werden geen pogingen ondernomen op deze tool instantie.';
$string['no_lti_configured'] = 'Er zijn geen actieve externe tools geconfigureerd.';
$string['no_lti_pending'] = 'Er zijn geen externe tools in behandeling.';
$string['no_lti_rejected'] = 'Er zijn geen externe tools verworpen.';
$string['noltis'] = 'Er zijn geen LTI-exemplaren.';
$string['no_lti_tools'] = 'Er zijn geen externe tools geconfigureerd.';
$string['noprofileservice'] = 'Profielservice niet gevonden';
$string['noservers'] = 'Er werden geen servers aangetroffen.';
$string['no_tp_accepted'] = 'Er zijn geen aanvaarde externe tool registraties.';
$string['no_tp_cancelled'] = 'Er zijn geen geannuleerde externe tool registraties.';
$string['no_tp_configured'] = 'Er zijn geen ongeregistreerde externe tool registraties geconfigureerd.';
$string['no_tp_pending'] = 'Er zijn geen wachtende externe tool registraties.';
$string['no_tp_rejected'] = 'Er zijn geen verworpen extrerne tool registraties.';
$string['notypes'] = 'Er zijn op dit ogenblik geen LTI tools ingesteld in Moodle. Klik op de installatie link hierboven om er toe te voegen.';
$string['noviewusers'] = 'Er werden geen gebruikers aangetroffen die toestemming hebben om deze tool te gebruiken.';
$string['oauthsecurity'] = 'LTI 1.0/1.1';
$string['opensslconfiginvalid'] = 'LTI 1.3 vereist een geldige openssl.cnf die moet worden geconfigureerd en beschikbaar is voor uw webserver. Neem contact op met de sitebeheerder om openssl voor deze site te configureren en in te schakelen.';
$string['optionalsettings'] = 'Optionele instellingen';
$string['organization'] = 'Details van de organisatie';
$string['organizationdescr'] = 'Beschrijving van de organisatie';
$string['organizationid'] = 'ID van de organisatie';
$string['organizationid_help'] = 'Een unieke identificatie voor deze Moodle instantie. Gewoonlijk wordt de DNS naam van de organisatie gebruikt.

Indien je dit veld leeg laat, zal  de hostnaam van de Moodle site worden gebruikt als standaardwaarde.';
$string['organizationurl'] = 'Organisatie-URL';
$string['organizationurl_help'] = 'De basis URL van deze Moodle instantie.

Indien je dit veld leeg laat, zal een standaardwaarde worden gebruikt gebaseerd op de configuratie van de site.';
$string['pagesize'] = 'Inzendingen getoond per pagina';
$string['parameter'] = 'Tool parameter';
$string['parameter_help'] = 'Tool parameters zijn instellingen die gevraagd worden dor de tool provider in de aanvaarde tool proxy';
$string['password'] = 'Gedeeld geheim';
$string['password_admin'] = 'Gedeeld geheim';
$string['password_admin_help'] = 'Het gedeeld geheim kan beschouwd worden als een paswoord dat de toegang tot de tool authenticeert. Het moet samen met de consumentensleutel door de tool provider worden verstrekt.

Voor tools die geen beveiligde communicatie met Moodle vereisen en die geen bijkomende diensten verstrekken (zoals rapportering van cijfers) heb je vermoedelijk geen gedeeld geheim nodig.';
$string['password_help'] = 'Voor vooraf geconfigureerde tools is het niet nodig om hier een gedeeld geheim in te voeren, want dit zal al zijn voorzien als onderdeel van het configuratie proces.

Dit veld moet worden ingevuld indien een link wordt gemaakt met een tool provider die nog niet geconfigureerd is. Indien de tool provider meer dan één keer zal gebruikt worden in deze cursus, dan is het een goed idee om een tool configuratie op cursus niveau toe te voegen.

Het gedeeld geheim kan beschouwd worden als een paswoord dat de toegang tot de tool authenticeert. Het moet samen met de consumentensleutel door de tool provider worden verstrekt.

Voor tools die geen beveiligde communicatie met Moodle vereisen en die geen bijkomende diensten verstrekken (zoals rapportering van cijfers) heb je vermoedelijk geen gedeeld geheim nodig.';
$string['pending'] = 'In behandeling';
$string['pluginadministration'] = 'Externe tool-beheer';
$string['pluginname'] = 'Externe tool';
$string['preferheight'] = 'Voorkeurhoogte';
$string['preferwidget'] = 'Verkies lancering van widget';
$string['preferwidth'] = 'Voorkeurbreedte';
$string['press_to_submit'] = 'Druk om deze activiteit te starten';
$string['privacy'] = 'Privacy';
$string['privacy:metadata:coursefullname'] = 'De volledige naam van de cursus waarvan de gebruiker toegang krijgt tot de LTI Consumer';
$string['privacy:metadata:courseid'] = 'De ID van de cursus waarvan de gebruiker toegang krijgt tot de LTI Consumer';
$string['privacy:metadata:courseidnumber'] = 'Het ID-nummer van de cursus waarvan de gebruiker toegang krijgt tot de LTI Consumer';
$string['privacy:metadata:courseshortname'] = 'De korte naam van de cursus waarvan de gebruiker toegang krijgt tot de LTI Consumer';
$string['privacy:metadata:createdby'] = 'De gebruiker die het record aanmaakte';
$string['privacy:metadata:email'] = 'Het e-mailadres van de gebruiker die toegang kreeg tot de LTI Consumer';
$string['privacy:metadata:externalpurpose'] = 'De LTI Consumer geeft gebruikersinformatie en context aan de LTI Tool Provider';
$string['privacy:metadata:firstname'] = 'De voornaam van de gebruiker die toegang kreeg tot de LTI Consumer';
$string['privacy:metadata:fullname'] = 'De volledige naam van de gebruiker die toegang kreeg tot de LTI Consumer';
$string['privacy:metadata:lastname'] = 'De achternaam van de gebruiker die toegang kreeg tot de LTI Consumer';
$string['privacy:metadata:lti_submission'] = 'LTI inzending';
$string['privacy:metadata:lti_submission:datesubmitted'] = 'Het tijdstip waarop de inzending gebeurde';
$string['privacy:metadata:lti_submission:dateupdated'] = 'Het tijdstip waarop de inzending gewijzigd werd';
$string['privacy:metadata:lti_submission:gradepercent'] = 'Het cijfer voor de gebruiker als percentage';
$string['privacy:metadata:lti_submission:originalgrade'] = 'Het originele cijfer voor de gebruiker';
$string['privacy:metadata:lti_submission:userid'] = 'De ID van de gebruiker die een inzending maakte voor de LTI activiteit';
$string['privacy:metadata:lti_tool_proxies'] = 'LTI-proxies';
$string['privacy:metadata:lti_tool_proxies:name'] = 'LTI-proxy-naam';
$string['privacy:metadata:lti_types'] = 'LTI-types';
$string['privacy:metadata:lti_types:name'] = 'LTI-typenaam';
$string['privacy:metadata:role'] = 'De cursusrol van de gebruiker die toegang kreeg tot de LTI-Consumer';
$string['privacy:metadata:timecreated'] = 'Het tijdstip waarop de record gemaakt werd';
$string['privacy:metadata:timemodified'] = 'Het tijdstip waarop de record gewijzigd werd';
$string['privacy:metadata:userid'] = 'De ID van de gebruiker doe toegang kreeg tot de LTI-Consumer';
$string['privacy:metadata:useridnumber'] = 'D ID-nummer van de gebruiker die toegang kreeg tot de LTI-Consumer';
$string['privacy:metadata:username'] = 'De gebruikersnaam van de gebruiker die toegang kreeg tot de LTI-Consumer';
$string['publickey'] = 'Publieke sleutel';
$string['publickey_help'] = 'De openbare sleutel (in PEM-indeling) die de tool biedt om handtekeningen van inkomende berichten en serviceverzoeken te verifiëren.';
$string['quickgrade'] = 'Snel beoordelen toestaan';
$string['quickgrade_help'] = 'Indien ingeschakeld kunnen meerdere tools beoordeeld worden op één pagina. Voeg cijfers en commentaren toe en klik dan op de "Bewaar al mijn feedback"-knop om alle wijzigingen voor die pagina te bewaren.';
$string['redirect'] = 'Je zult binnen enkele seconden doorverwezen worden. Indien niet, klik dan op de knop.';
$string['redirectionuris'] = 'Redirect URI (\'s).';
$string['redirectionuris_help'] = 'Een lijst met URI\'s (één per regel) die de tool gebruikt bij het maken van autorisatieverzoeken. Ten minste één moet worden geregistreerd voordat een bericht met succes naar de tool kan worden verzonden.';
$string['register'] = 'Registreer';
$string['registertype'] = 'Configureer een nieuwe externe tool registratie';
$string['register_warning'] = 'De registratiepagina lijkt nogal wat tijd te nemen om te openen. Als ze niet verschijnt, controleer dan of je de juiste URL in de configuratie hebt ingegeven. Wanneer Moodle https gebruikt, verzeker je dan ervan dat de tool je configureert https ondersteunt en dat je https gebruikt in de URL.';
$string['registrationname'] = 'Tool provider naam';
$string['registrationname_help'] = 'Geef de naam van de geregistreerde tool provider';
$string['registration_options'] = 'Registratie-opties';
$string['registrationurl'] = 'Registratie-URL';
$string['registrationurl_help'] = 'De registratie-URL heb je gekregen van de tool provider en is de plaats waar registratieaanvragen naar verstuurd moeten worden.';
$string['reject'] = 'Verwerp';
$string['rejected'] = 'Verworpen';
$string['resource'] = 'Bron';
$string['resourcekey'] = 'Consumentensleutel';
$string['resourcekey_admin'] = 'Consumentensleutel';
$string['resourcekey_admin_help'] = 'De consumentensleutel kan beschouwd worden als een gebruikersnaam die de toegang tot een tool authenticeert. Een tool provider kan deze gebruiken om de Moodle site van waaruit de gebruikers de tool lanceren, uniek te identificeren.

De consumentensleutel moet door de tool provider worden verstrekt. De methode om een consumentensleutel te verkrijgen, verschilt naargelang de tool provider. Het kan een automatisch proces zijn, of het kan een dialoog met de tool provider vereisen.

Voor tools die geen beveiligde communicatie met Moodle vereisen en die geen bijkomende diensten verstrekken (zoals rapportering van cijfers) heb je waarschijnlijk geen consumentensleutel nodig.';
$string['resourcekey_help'] = 'Voor vooraf geconfigureerde tools is het niet nodig om hier een consumentensleutel in te voeren, want deze zal al zijn voorzien als onderdeel van het configuratie proces.

Dit veld moet worden ingevuld indien een link wordt gemaakt met een tool provider die nog niet geconfigureerd is. Indien de tool provider meer dan één keer zal gebruikt worden in deze cursus, dan is het een goed idee om een tool configuratie op cursus niveau toe te voegen.

De consumentensleutel kan beschouwd worden als een gebruikersnaam die de toegang tot een tool authenticeert. Een tool provider kan deze gebruiken om de Moodle site van waaruit de gebruikers de tool lanceren, uniek te identificeren.

De consumentensleutel moet door de tool provider worden verstrekt. De methode om een consumentensleutel te verkrijgen, verschilt naargelang de tool provider. Het kan een automatisch proces zijn, of het kan een dialoog met de tool provider vereisen.

Voor tools die geen beveiligde communicatie met Moodle vereisen en die geen bijkomende diensten verstrekken (zoals rapportering van cijfers) heb je waarschijnlijk geen consumentensleutel nodig.';
$string['resourceurl'] = 'Bron-URL';
$string['return_to_course'] = 'Klik op <a href="{$a->link}" target="_top">hier</a> om terug naar de cursus te keren.';
$string['saveallfeedback'] = 'Bewaar al mijn feedback';
$string['search:activity'] = 'Externe tool - activiteitsinformatie';
$string['secure_icon_url'] = 'URL voor beveiligd icoontje';
$string['secure_icon_url_help'] = 'Zoals het icoon-URL, maar gebruikt als de gebruiker veilig Moodle bezoekt via SSL. Dit veld is om te voorkomen dat de browser de gebruiker waarschuwt voor een onbeveiligde afbeelding.';
$string['secure_launch_url'] = 'Veilige tool-URL';
$string['secure_launch_url_help'] = 'Gelijkaardig aan de tool-URL, maar gebruikt in plaats van de tool-url als hoge beveiliging vereist is. Moodle zal de beveiligde tool-url gebruiken in plaats van de gewone tool-url als de Moodle-site via SSL aangesproken wordt of als de tool-configuratie is ingesteld om altijd SSL te gebruiken.

Je kunt de tool-URL ook als https-adres plaatsen om  te dwingen via SSL te starten. Dit veld mag dan leeg gelaten worden.';
$string['selectcontent'] = 'Selecteer inhoud';
$string['send'] = 'Verstuurd';
$string['services'] = 'Diensten';
$string['services_help'] = 'Kies die diensten die je wil aanbieden aan de tool provider. Er kan meer dan één dienst geselecterd worden.';
$string['setupoptions'] = 'Instellingsopties';
$string['share_email'] = 'Deel de e-mail van de starter met de tool';
$string['share_email_admin'] = 'Deel de e-mail van de starter met de tool';
$string['share_email_admin_help'] = 'Geef op of het e-mailadres van de gebruiker die de tool start gedeeld zal worden met de tool-provider.
De tool-provider heeft misschien het e-mailadres van de starter nodig om gebruikers met dezelfde naam te onderscheiden of om ze e-mails te sturen, gebaseerd op acties binnnen de tool.';
$string['share_email_help'] = 'Geef op of het e-mailadres van de gebruiker die de tool start gedeeld zal worden met de tool-provider.

De tool-provider heeft misschien het e-mailadres van de starter nodig om gebruikers met dezelfde naam te onderscheiden of om ze e-mails te sturen, gebaseerd op acties binnen de tool.

Merk op dat deze instelling overschreven kan worden in de tool-configuratie';
$string['share_name'] = 'Deel de naam van de starter met de tool';
$string['share_name_admin'] = 'Deel de naam van de starter met de tool';
$string['share_name_admin_help'] = 'Geef op of de volledig naam van de gebruiker die de tool start moet gedeeld worden met de tool-provider.
De tool-provider heeft misschien de naam nodig om betekenisvolle informatie te tonen binnen de tool.';
$string['share_name_help'] = 'Geef op of de volledig naam van de gebruiker die de tool start moet gedeeld worden met de tool-provider.

De tool-provider heeft misschien de naam nodig om betekenisvolle informatie te tonen binnen de tool.

Merk op dat deze instelling overschreven kan worden in de tool-configuratie';
$string['share_roster'] = 'Geef de tool toegang tot de deelnemerslijst van de cursus';
$string['share_roster_admin'] = 'De tool heeft toegang tot de deelnemerslijst van de cursus';
$string['share_roster_admin_help'] = 'Geef op of de tool de gebruikerslijst kan opvragen van gebruikers die aangemeld zijn in cursussen vanwaar deze tool wordt gestart.';
$string['share_roster_help'] = 'Geef op of de tool de gebruikerslijst kan opvragen van gebruikers die aangemeld zijn in deze cursus.
Merk op dat deze instelling overschreven kan worden in de tool-configuratie.';
$string['show_in_course_activity_chooser'] = 'Toon in de activiteitskiezer als een voorgeconfigureerde tool';
$string['show_in_course_lti1'] = 'Tool-configuratie gebruik';
$string['show_in_course_lti1_help'] = 'Deze tool kan getoond worden in de activiteitskiezer zodat leraren kunnen kiezen om die toe te voegen aan een cursus. Als alternatief kan het getoond worden in het rolmenu met voorgeconfigureerde tools wanneer je een externe tool toevoegt aan een cursus. Een andere optie is om de tool-configuratie enkel te gebruiken wanneer de juiste tool-URL ingegeven wordt bij het toevoegen van een externe tool aan een cursus.';
$string['show_in_course_lti2'] = 'Tool-configuratie gebruik';
$string['show_in_course_lti2_help'] = 'Deze tool kan getoond worden in de activiteitenkiezer zodat een leraar die kan kiezen om aan een cursus toe te voegen in een rolmenu voor voorgeconfigureerde tools.';
$string['show_in_course_no'] = 'Niet weergeven, alleen gebruiken wanneer een juiste tool-URL wordt ingegeven';
$string['show_in_course_preconfigured'] = 'Toon als voorgeconfigureerde tool wanneer een externe tool toegevoegd wordt.';
$string['size'] = 'Parameters afmetingen';
$string['submission'] = 'Inzending';
$string['submissions'] = 'Inzendingen';
$string['submissionsfor'] = 'Inzendingen voor {$a}';
$string['subplugintype_ltiresource'] = 'LTI dienstenbron';
$string['subplugintype_ltiresource_plural'] = 'LTI dienstenbronnen';
$string['subplugintype_ltiservice'] = 'LTI dienst';
$string['subplugintype_ltiservice_plural'] = 'LTI diensten';
$string['subplugintype_ltisource'] = 'LTI bron';
$string['subplugintype_ltisource_plural'] = 'LTI bronnen';
$string['successfullycreatedtooltype'] = 'Nieuwe tool met succes aangemaakt!';
$string['successfullyfetchedtoolconfigurationfromcontent'] = 'Tool-configuratie met succes opgehaald uit de geselecteerde inhoud.';
$string['toggle_debug_data'] = 'Debug-data aan-/uitschakelen';
$string['tool_config_not_found'] = 'Tool-configuratie niet gevonden voor deze URL';
$string['tooldescription'] = 'Toolbeschrijving';
$string['tooldescription_help'] = 'De beschrijving van de tool zal aan leraren getoond worden in de activiteitenlijst.
Die zou moeten beschrijven waarvoor de tool dient, wat het doet en alle andere bijkomende informatie die een leraar zou kunnen nodig hebben.';
$string['tooldetailsaccesstokenurl'] = 'Toegang token URL';
$string['tooldetailsauthrequesturl'] = 'Verificatie-aanvraag URL';
$string['tooldetailsclientid'] = 'Verificatie-aanvraag URL';
$string['tooldetailsdeploymentid'] = 'Implementatie-ID';
$string['tooldetailsmailtosubject'] = 'LTI-toolconfiguratie';
$string['tooldetailsmodalemail'] = 'E-mail';
$string['tooldetailsmodallink'] = 'Bekijk configuratiegegevens';
$string['tooldetailsmodaltitle'] = 'Details gereedschapsconfiguratie';
$string['tooldetailsplatformid'] = 'Platform-ID';
$string['tooldetailspublickeyseturl'] = 'Publieke sleutelset URL';
$string['toolisbeingused'] = 'Deze tool is {$a} keer gebruikt';
$string['toolisnotbeingused'] = 'Deze tool is nog niet gebruikt';
$string['toolproxy'] = 'Externe tool registraties';
$string['toolproxy_help'] = 'Met Externe Tool-registraties kunnen Moodle site-beheerders externe tools configureren van een tool proxy die je krijgt van een provider die LTI 2.0 ondersteunt. Een registratie-URL die je van de tool-provider krijgt is het het enige wat je nodig hebt om het proces te starten. De mogelijkheden en diensten die aan de tool-provider aangeboden worden, worden geselecteerd tijdens het configureren van een nieuwe registratie.

Tool-registraties die op deze pagina staan, vallen in vier categorieën

***Geconfigureerd*** - Deze tool-registraties zijn geconfigureerd, maar het registratieproces is nog niet gestart.
***Wachtend*** - Het registratieproces is gestart, maar is nog niet afgerond. Open en bewaar de instellingen om deze terug in de categorie \'Geconfigureerd\' te zetten.
***Aanvaard*** - Deze tool-registraties zijn aanvaard; de bronnen die in de tool-proxy opgegeven zijn zullen verschijnen op de pagina\'s  van de externe tools met als initiële status \'Wachtend\'.
***Verworpen*** - Deze tool-registraties zijn verworpen tijdens het registratieproces. Open en bewaar de instellingen om ze terug naar de categorie \'Geconfigureerd\' te verplaatsen, zodat het registratieproces opnieuw gestart kan worden.';
$string['toolproxyregistration'] = 'Externe tool registratie';
$string['toolregistration'] = 'Externe tool registratie';
$string['tool_settings'] = 'Tool instellingen';
$string['toolsetup'] = 'Configuratie externe tool';
$string['tooltypeadded'] = 'Voorgeconfigureerde tool toegevoegd';
$string['tooltypedeleted'] = 'Voorgeconfigureerde tool verwijderd';
$string['tooltypenotdeleted'] = 'Kon voorgeconfigureerde tool niet verwijderen';
$string['tooltypes'] = 'Tools';
$string['tooltypeupdated'] = 'Voorgeconfigureerde tool aangepast';
$string['toolurl'] = 'Tool-URL';
$string['toolurl_contentitemselectionrequest'] = 'Toestemmingsselectie-URL';
$string['toolurl_contentitemselectionrequest_help'] = 'De toestemmingsselectie-URL zal gebruikt worden om de inhoudsselectiepagina van de toolprovider te openen. Als die leeg is, dan zal de Tool-URL gebruikt worden';
$string['toolurl_help'] = 'De tool-URL wordt gebruikt om de juiste tool-URL\'s te koppelen aan de juiste tool configuratie. Het voorvoegsel http(s) in de URL is optioneel.

Bijkomend wordt de basis URL gebruikt als tool-URL als er geen tool-URL is opgegeven in de configuratie van de externe tool.

Een basis-URL als *tool.com* komt overeen met:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=10
* www.tool.com/quizzes

Een basis-URL als  *www.tool.com/quizzes* zou met het volgende overeenkomen:

* www.tool.com/quizzes
* tool.com/quizzes
* tool.com/quizzes/take.php?id=10

Een basis-URL als  *quiz.tool.com* zou met het volgende overeenkomen:

* quiz.tool.com
* quiz.tool.com/take.php?id=10

Als er twee verschillende tool-configuraties voor hetzelfde domein zijn, dan zal de best passende gebruikt worden.';
$string['toolurlplaceholder'] = 'Tool URL...';
$string['typename'] = 'Tool-naam';
$string['typename_help'] = 'De tool-naam wordt gebruikt om de tool-provider te identificeren binnen Moodle. De gegeven naam zal zichtbaar zijn voor leraren wanneer ze externe tool toevoegen aan cursussen.';
$string['types'] = 'Types';
$string['unabletocreatetooltype'] = 'Kon tool niet maken';
$string['unabletofindtooltype'] = 'Kon tool niet vinden voor {$a->id}';
$string['unknownstate'] = 'Onbekende status';
$string['update'] = 'Update';
$string['useraccountinformation'] = 'Informatie gebruikersaccount';
$string['userpersonalinformation'] = 'Persoonlijke gebruikersinformatie';
$string['using_tool_cartridge'] = 'Tool cartridge gebruiken';
$string['using_tool_configuration'] = 'Tool configuratie gebruiken:';
$string['validurl'] = 'Een geldige URL moet beginnen met http(s):';
$string['viewsubmissions'] = 'Bekijk inzendingen en beoordelingsscherm';
