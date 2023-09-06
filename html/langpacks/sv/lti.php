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
 * Strings for component 'lti', language 'sv', version '4.1'.
 *
 * @package     lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Acceptera';
$string['accept_grades'] = 'Acceptera betyg från verktyget';
$string['accept_grades_admin'] = 'Acceptera betyg från verktyget';
$string['accept_grades_admin_help'] = 'Ange om verktygsleverantören kan lägga till, uppdatera, läsa och ta bort resultat som är associerade med instanser av det här verktyget.

Vissa verktygsleverantörer stöder återrapportering av betyg till Moodle baserat på åtgärder som vidtas inom verktyget. Detta kan skapa en mer integrerad upplevelse.';
$string['accept_grades_help'] = 'Ange om verktygsleverantören kan lägga till, uppdatera, läsa och ta bort resultat som bara associeras med den här externa verktygsinstansen.

Vissa verktygsleverantörer stöder återrapportering av betyg tillbaka till Moodle baserat på åtgärder som vidtas inom verktyget. Detta kan skapa en mer integrerad upplevelse.

Observera att den här inställningen kan åsidosättas i verktygskonfigurationen.';
$string['accepted'] = 'Accepterad';
$string['action'] = 'Åtgärd';
$string['activate'] = 'Aktivera';
$string['activatetoadddescription'] = 'Du måste aktivera detta verktyg innan lägga till en beskrivning.';
$string['active'] = 'Aktiv';
$string['activity'] = 'Aktivitet';
$string['add_ltiadv'] = 'Lägg till LTI Advantage';
$string['add_ltilegacy'] = 'Lägg till äldre LTI';
$string['addnewapp'] = 'Aktivera extern applikation';
$string['addserver'] = 'Ny betrodd server';
$string['addtype'] = 'Lägg till förkonfigurerat verktyg';
$string['allow'] = 'Tillåt';
$string['allowsetting'] = 'Tillåt verktyg att lagra 8K med inställningar i Moodle';
$string['always'] = 'Alltid';
$string['autoaddtype'] = 'Lägg till verktyg';
$string['automatic'] = 'Automatiskt, baserat på verktygswebbadress';
$string['baseurl'] = 'Bas-URL/namn för verktygsregistrering';
$string['basiclti'] = 'LTI';
$string['basiclti_base_string'] = 'LTI OAuth bassträng';
$string['basiclti_endpoint'] = 'LTI startadress';
$string['basiclti_in_new_window'] = 'Aktiviteten har öppnats i ett nytt fönster';
$string['basiclti_in_new_window_open'] = 'Öppna i nytt fönster';
$string['basiclti_parameters'] = 'LTI startparametrar';
$string['basicltiactivities'] = 'LTI-aktiviteter';
$string['basicltifieldset'] = 'Anpassad exempelfältuppsättning';
$string['basicltiintro'] = 'Aktivitetsbeskrivning';
$string['basicltiname'] = 'Aktivitetsnamn';
$string['basicltisettings'] = 'Grundläggande Learning Tool Interoperability (LTI)-inställningar';
$string['cachedef_keyset'] = 'Cachar nyckelsamlingsinformation för verktyg';
$string['cancel'] = 'Avbryt';
$string['cancelled'] = 'Avbruten';
$string['cannot_delete'] = 'Du kan inte ta bort denna verktygskonfiguration.';
$string['cannot_edit'] = 'Du kan inte redigera denna verktygskonfiguration';
$string['capabilities'] = 'Funktionsbehörigheter';
$string['capabilities_help'] = 'Välj de funktionsbehörigheter som du vill erbjuda verktygsleverantören. Mer än en funktionsbehörighet kan väljas.';
$string['capabilitiesrequired'] = 'Detta verktyg kräver tillgång till följande data för att kunna aktiveras:';
$string['cleanaccesstokens'] = 'Borttagning av förfallna åtkomsttoken med externt verktyg';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Klicka för att fortsätta</a>';
$string['clientidadmin'] = 'Klient-ID';
$string['clientidadmin_help'] = 'Klient-ID är ett unikt värde som används för att identifiera ett verktyg. Det skapas automatiskt för varje verktyg som använder JWT-säkerhetsprofilen (introducerades i LTI 1.3) och bör vara en del av uppgifterna som skickas till verktygsleverantören. Detta för att de ska kunna konfigurera anslutningen på deras sida.';
$string['comment'] = 'Kommentar';
$string['configpassword'] = 'Standardlösenord för externt verktyg';
$string['configpreferheight'] = 'Förinställd standardhöjd';
$string['configpreferwidget'] = 'Ange widget som standard';
$string['configpreferwidth'] = 'Förinställd standardbredd';
$string['configresourceurl'] = 'Standard-URL för resurs';
$string['configtoolurl'] = 'Standard-URL för externt verktyg';
$string['configtypes'] = 'Aktivera LTI-applikationer';
$string['configured'] = 'Konfigurerad';
$string['confirmtoolactivation'] = 'Är du säker på att du vill aktivera detta verktyg?';
$string['contentitem'] = 'Innehållsobjekt-meddelande';
$string['contentitem_deeplinking'] = 'Stödjer djuplänkning (Innehållsobjekt-meddelande)';
$string['contentitem_deeplinking_help'] = 'Om markerad kommer alternativet \'Välj innehåll\' vara tillgängligt då man lägger till ett externt verktyg.';
$string['contentitem_help'] = 'Om markerad kommer alternativet \'Välj innehåll\' vara tillgängligt då man lägger till ett externt verktyg.';
$string['contentitem_multiple_description'] = 'Följande objekt kommer att läggas till i kursen:';
$string['contentitem_multiple_graded'] = 'Betygsatt aktivitet (Maxbetyg: {$a})';
$string['course_tool_types'] = 'Kursverktyg';
$string['courseactivitiesorresources'] = 'Kursaktiviteter eller resurser';
$string['courseid'] = 'Kurs-ID';
$string['courseinformation'] = 'Kursinformation';
$string['courselink'] = 'Gå till kurs';
$string['coursemisconf'] = 'Kursen är felkonfigurerad';
$string['createdon'] = 'Skapad';
$string['curllibrarymissing'] = 'PHP cURL-tillägget krävs för Externa verktyg.';
$string['custom'] = 'Anpassade parametrar';
$string['custom_config'] = 'Använder anpassad verktygskonfiguration.';
$string['custom_help'] = 'Anpassade parametrar är inställningar som används av verktygsleverantören. En anpassad parameter kan t.ex. användas för att visa en specifik resurs från tjänsteleverantören. Varje parameter ska anges på en separat rad i formatet "name=value"; till exempel "chapter=3".

Det är säkert att lämna det här fältet orört om inte verktygsleverantören meddelat något annat.';
$string['custominstr'] = 'Anpassade parametrar';
$string['debuglaunch'] = 'Debug-alternativ';
$string['debuglaunchoff'] = 'Normal start';
$string['debuglaunchon'] = 'Start i debugläge';
$string['default'] = 'Förvalt';
$string['default_launch_container'] = 'Förvald startbehållare';
$string['default_launch_container_help'] = 'Uppstartsbehållaren påverkar visningen av verktyget när det startas från kursen. Vissa startbehållare ger mer skärmutrymme åt verktyget, och andra ger en mer integrerad känsla i förhållande till Moodle-miljön.

* **Standard** - Använd inställningarna som anges i verktygskonfigurationen.
* **Bädda in** - Verktyget visas i det befintliga Moodle-fönstret, på ett sätt som liknar de flesta andra aktivitetstyper.
* **Bädda in, utan block** - Verktyget visas i det befintliga Moodle-fönstret, med bara navigeringskontrollerna
        högst upp på sidan.
* **Nytt fönster** - Verktyget öppnas i ett nytt fönster och upptar allt tillgängligt utrymme.
        Beroende på webbläsaren öppnas den i en ny flik eller i ett popup-fönster.
        Det är möjligt att vissa webbläsare kommer att förhindra att det nya fönstret öppnas.';
$string['delegate'] = 'Delegera till lärare';
$string['delegate_tool'] = 'Som anges i definitionen för Djuplänkning eller Delegera till lärare';
$string['delete'] = 'Ta bort';
$string['delete_confirmation'] = 'Är du säker på att du vill ta bort detta förkonfigurerade verktyg?';
$string['deletetype'] = 'Ta bort förkonfigurerat verktyg';
$string['display_description'] = 'Visa aktivitetsbeskrivning vid start';
$string['display_description_help'] = '';
$string['display_name'] = 'Visa aktivitetsnamn vid start';
$string['display_name_help'] = 'Om det här alternativet väljs visas aktivitetsnamnet (angivet ovan) ovanför innehållet som visas av verktyget.

Det är möjligt att verktyget också kan visa titeln. Det här alternativet kan förhindra att aktivitetsrubriken
visas två gånger.

Titeln visas aldrig när verktygets startbehållare är i ett nytt fönster.';
$string['domain_mismatch'] = 'Verktygsadressens domän matchar inte verktygskonfigurationen.';
$string['donot'] = 'Skicka inte';
$string['donotaccept'] = 'Acceptera inte';
$string['donotallow'] = 'Tillåt inte';
$string['duplicateregurl'] = 'Den här registreringsadressen används redan';
$string['dynreg_update_btn_new'] = 'Registrera som nytt externt verktyg';
$string['dynreg_update_btn_update'] = 'Uppdatera';
$string['dynreg_update_name'] = 'Verktygsnamn';
$string['dynreg_update_notools'] = 'Inga verktyg i kontexten.';
$string['dynreg_update_text'] = 'Det finns befintliga verktyg kopplade till registreringens domän. Vill du uppdatera ett redan installerat externt verktyg eller skapa ett nytt externt verktyg?';
$string['dynreg_update_url'] = 'Bas-URL';
$string['dynreg_update_version'] = 'LTI-version';
$string['dynreg_update_warn_dupdomain'] = 'Vi rekommenderar inte att du har flera externa verktyg under samma domän.';
$string['editdescription'] = 'Klicka här för att ge verktyget en beskrivning';
$string['edittype'] = 'Redigera förinställt verktyg';
$string['embed'] = 'Bädda in';
$string['embed_no_blocks'] = 'Bädda in utan block';
$string['enableemailnotification'] = 'Skicka e-postnotiser';
$string['enableemailnotification_help'] = 'Om aktiverat kommer elever motta notiser via e-post när deras verktygsinlämningar har betygsatts.';
$string['enterkeyandsecret'] = 'Ange konsumentnyckel och delad hemlighet';
$string['enterkeyandsecret_help'] = 'Om du fick en konsumentnyckel och/eller en delad hemlighet, mata in dem här';
$string['errorbadurl'] = 'URL är inte en giltig verktygsadress eller cartridge.';
$string['errorincorrectconsumerkey'] = 'Konsumentnyckel inkorrekt';
$string['errorinvaliddata'] = 'Ogiltig data: {$a}';
$string['errorinvalidmediatype'] = 'Ogiltig medietyp: {$a}';
$string['errorinvalidresponseformat'] = 'Ogiltigt format för Innehåll-Objekt svar.';
$string['errormisconfig'] = 'Felkonfigurerat verktyg. Be din Moodleadministratör att rätta till konfigurationen av verktyget.';
$string['errortooltypenotfound'] = 'Det går inte att hitta LTI-verktygstypen.';
$string['existing_window'] = 'Befintligt fönster';
$string['extensions'] = 'LTI-tilläggstjänster';
$string['external_tool_type'] = 'Förkonfigurerat verktyg';
$string['external_tool_type_help'] = '* **Automatisk, baserad på verktygsadress** - Den bästa verktygskonfigurationen väljs automatiskt. Om verktygsadressen inte känns igen kan verktygskonfigurationsinformationen behöva anges manuellt.
* **Ett specifikt förkonfigurerat verktyg** - Verktygskonfigurationen för det angivna verktyget kommer att användas när du kommunicerar med den externa verktygsleverantören. Om verktygsadressen inte verkar tillhöra verktygsleverantören visas en varning. Det är inte alltid nödvändigt att ange en verktygs-URL.
* **Anpassad konfiguration** - En konsumentnyckel och delad hemlighet kan behöva anges manuellt. Konsumentnyckeln och den delade hemligheten kan erhållas från verktygsleverantören. Alla verktyg kräver dock inte en konsumentnyckel och en delad hemlighet, i vilket fall kan fälten lämnas tomma.

### Förkonfigurerad verktygsredigering

Tre ikoner är tillgängliga efter den förkonfigurerade verktygsmenyn:

* **Lägg till** - Skapa en verktygskonfiguration på kursnivå. Alla externa verktygsinstanser i den här kursen kan använda verktygskonfigurationen.
* **Redigera** - Välj ett kursnivåverktyg på den nedrullningsbara menyn och klicka sedan på den här ikonen. Informationen om verktygskonfigurationen kan redigeras.
* **Ta bort** - Ta bort det valda kursnivåverktyget.';
$string['external_tool_types'] = 'Förkonfigurerade verktyg';
$string['failedtoconnect'] = 'Moodle kunde inte kommunicera med "{$a}" systemet';
$string['failedtocreatetooltype'] = 'Det gick inte att skapa ett nytt verktyg. Kontrollera webbadressen och försök igen.';
$string['failedtodeletetoolproxy'] = 'Det gick inte att ta bort verktygsregistreringen. Du kan behöva gå till "Hantera verktyg" under "Externt verktyg" och ta bort det manuellt.';
$string['filter_basiclti_configlink'] = 'Konfigurera dina önskade webbplatser och deras lösenord';
$string['filter_basiclti_password'] = 'Lösenord krävs';
$string['filterconfig'] = 'LTI-administration';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Använd en existerande konfiguration för den felkonfigurerade instansen';
$string['fixnew'] = 'Ny konfiguration';
$string['fixnewconf'] = 'Definiera en ny konfiguration för den felkonfigurerade instansen';
$string['fixold'] = 'Använd befintlig';
$string['force_ssl'] = 'Tvinga SSL';
$string['force_ssl_help'] = 'Om valt tvingas alla publicerare av detta verktyg att använda SSL.

Som tillägg, alla webservice förfrågningar från verktygsleverantören kommer använda SSL.

Om detta alternativ används kontrollera att denna Moodleplats och verktygsleverantören stödjer SSL.';
$string['forced_help'] = 'Denna inställning har tvingats i en kursnivå eller webbplatsnivå konfiguration för verktyg. Du kan inte ändra den från detta gränssnitt.';
$string['generaltool'] = 'Generellt verktyg';
$string['global_tool_types'] = 'Förinställda verktyg';
$string['grading'] = 'Routning av betyg';
$string['icon_url'] = 'Ikon-URL';
$string['icon_url_help'] = 'Med ikonadressen kan ikonen som visas i kurslistan för den här aktiviteten ändras. I stället för att använda standard LTI-ikonen, kan en ikon som förmedlar typen av aktivitet anges.';
$string['id'] = 'ID';
$string['indicator:cognitivedepth'] = 'LTI kognitiv';
$string['indicator:cognitivedepth_help'] = 'Denna indikator baseras på det kognitiva djup som uppnåtts av studenten i en LTI-aktivitet.';
$string['indicator:cognitivedepthdef'] = 'LTI kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Deltagaren har nått denna procentandel av det kognitiva engagemang som erbjuds av LTI-aktiviteterna under detta analysintervall (Nivåer = Ingen visning, Visa, Skicka in, Visa återkoppling)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'LTI social';
$string['indicator:socialbreadth_help'] = 'Denna indikator baseras på den sociala bredd som uppnåtts av studenten i en LTI-aktivitet.';
$string['indicator:socialbreadthdef'] = 'LTI social';
$string['indicator:socialbreadthdef_help'] = 'Deltagaren har nått denna procentandel av det sociala engagemanget som erbjuds av LTI-aktiviteterna under detta analysintervall (Nivåer = Inget deltagande, Deltagaren ensamt, Deltagaren tillsammans med andra)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['initiatelogin'] = 'Påbörja inloggning-URL';
$string['initiatelogin_help'] = 'Verktygsadressen till vilken begäran om att initiera en inloggning ska skickas.  Den här URL:en krävs innan ett meddelande kan skickas till verktyget.';
$string['invalidid'] = 'Ogiltigt LTI-ID';
$string['jwtsecurity'] = 'LTI 1.3';
$string['keytype'] = 'Publik nyckeltyp';
$string['keytype_help'] = 'Autentiseringsmetoden som används för att validera verktyget.';
$string['keytype_keyset'] = 'URL till nyckeluppsättning';
$string['keytype_rsa'] = 'RSA-nyckel';
$string['launch_in_moodle'] = 'Öppna i Moodle';
$string['launch_in_popup'] = 'Öppna i pop-up fönster';
$string['launch_url'] = 'Verktygs-URL';
$string['launch_url_help'] = 'Verktygs-URL:en anger webbadressen till det externa verktyget och kan innehålla ytterligare information, till exempel den resurs som ska visas.
Om du är osäker på vad du ska ange för verktygsadressen, kontrollera med verktygsleverantören för mer information.

Du kan ange en Cartridge-URL om du har en, och resten av formulärinformationen fylls i automatiskt.

Om du har valt ett förkonfigurerat verktyg behöver du kanske inte ange en verktygsadress. Om verktygslänken används för att bara starta
i verktygsleverantörens system och inte gå till en specifik resurs, kommer detta sannolikt att vara fallet.';
$string['launchinpopup'] = 'Startbehållare';
$string['launchinpopup_help'] = 'Uppstartsbehållaren påverkar visningen av verktyget när det startas från kursen. Vissa typer tillhandahåller ett större skärmutrymme för verktyget medan andra ger en mer integrerad upplevelse i Moodle-miljön.

* **Standard** - Använd inställningarna som tillhandahålls i verktygskonfigurationen.
* **Bädda in** - Verktyget visas i det befintliga Moodle-fönstret, på ett sätt som liknar de flesta andra aktivitetstyper.
* **Bädda in, utan block** - Verktyget visas i det befintliga Moodle-fönstret, med enbart navigeringskontrollerna högst upp på sidan.
* **Nytt fönster** - Verktyget öppnas i ett nytt fönster och upptar allt tillgängligt utrymme.
        Beroende på webbläsaren öppnas det i en ny flik eller i ett popup-fönster.
        Det är möjligt att vissa webbläsare kommer att förhindra att det nya fönstret öppnas.';
$string['launchoptions'] = 'Startalternativ';
$string['leaveblank'] = 'Lämna tomt om du inte behöver dem';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Lägg till kursspecifika verktygskonfigurationer';
$string['lti:addinstance'] = 'Nytt externt verktyg';
$string['lti:addmanualinstance'] = 'Lägg till manuellt konfigurerat verktyg';
$string['lti:addpreconfiguredinstance'] = 'Lägg till förkonfigurerat verktyg';
$string['lti:admin'] = 'Agera administratör när det externa verktyget startas';
$string['lti:grade'] = 'Visa betyg som returnerats av det externa verktyget';
$string['lti:manage'] = 'Agera instruktör när verktyget startas';
$string['lti:requesttooladd'] = 'Begär att ett verktyg konfigureras för webbplatsen';
$string['lti:view'] = 'Starta aktiviteter i externt verktyg';
$string['lti_administration'] = 'Redigera förinställt verktyg';
$string['lti_errormsg'] = 'Verktyget returnerade följande felmeddelande: "{$a}"';
$string['lti_launch_error'] = 'Ett fel inträffade vid uppstarten av det externa verktyget:';
$string['lti_launch_error_tool_request'] = '<p>
Om du vill skicka en begäran om att en administratör ska slutföra verktygskonfigurationen klickar du <a href="{$a->admin_request_url}" target="_top">här</a>.
</p>';
$string['lti_launch_error_unsigned_help'] = '<p>Felet kan bero på en saknad konsumentnyckel eller delad hemlighet för verktygsleverantören.</p>
<p>Om du har en konsumentnyckel och en delad hemlighet kan du ange den när du redigerar den externa verktygsinstansen (se till att avancerade alternativ är synliga).</p>
<p>Alternatively kan du <a href="{$a->course_tool_editor}">skapa en verktygskonfiguration på kursnivå</a>.</p>';
$string['lti_tool_request_added'] = 'Begäran om verktygskonfiguration har skickats. Du kan behöva kontakta en administratör för att slutföra verktygskonfigurationen.';
$string['lti_tool_request_existing'] = 'En verktygskonfiguration för verktygsdomänen har redan skickats.';
$string['ltisettings'] = 'LTI-inställningar';
$string['ltiunknownserviceapicall'] = 'Okänt API-anrop till LTI-tjänst.';
$string['ltiversion'] = 'LTI-version';
$string['ltiversion_help'] = 'Den version av LTI som används för signering av meddelanden och tjänstförfrågningar: LTI 1.0/1.1 och LTI 2.0 använder säkerhetsprofilen OAuth 1.0A; LTI 1.3.0 använder JWTs.';
$string['main_admin'] = 'Allmän hjälp';
$string['main_admin_help'] = 'Externa verktyg gör det möjligt för Moodle-användare att interagera med utbildningsresurser som finns externt. Genom ett speciellt uppstartsprotokoll har fjärrverktyget tillgång till allmän information om startanvändaren. Till exempel institutionens namn, kurs-ID, användar-ID och annan information, till exempel användarens namn eller e-postadress.

Verktygen på den här sidan är indelade i tre kategorier:

* **Aktiva** - Dessa verktygsleverantörer har godkänts och konfigurerats av en administratör. De kan användas inifrån vilken kurs som helst på denna webbplats. Om en konsumentnyckel och en delad hemlighet anges upprättas en förtroenderelation mellan den här webbplatsen och fjärrverktyget, vilket ger en säker kommunikationskanal.
* **Väntande** - Dessa verktygsleverantörer kom in genom en paketimport, men har inte konfigurerats av en administratör. Lärare kan fortfarande använda verktyg från dessa leverantörer om de har en konsumentnyckel och delad hemlighet, eller om ingen krävs.
* **Avvisade** - Dessa verktygsleverantörer flaggas som sådana som en administratör inte har för avsikt att göra tillgängliga på webbplatsen. Lärare kan fortfarande använda verktyg från dessa leverantörer om de har en konsumentnyckel och delad hemlighet, eller om ingen krävs.';
$string['manage_external_tools'] = 'Hantera verktyg';
$string['manage_tool_proxies'] = 'Hantera externa verktygsregistreringar';
$string['manage_tools'] = 'Hantera förinställda verktyg';
$string['manuallyaddtype'] = 'Alternativt kan du <a href="{$a}">konfigurera ett verktyg manuellt</a>.';
$string['miscellaneous'] = 'Övrigt';
$string['misconfiguredtools'] = 'Felkonfigurerade verktygsinstanser upptäcktes';
$string['missingparameterserror'] = 'Sidan är felkonfigurerad: "{$a}"';
$string['module_class_type'] = 'Moodle-modultyp';
$string['modulename'] = 'Externt verktyg';
$string['modulename_help'] = 'Modulen <em>Externt verktyg</em> gör det möjligt för eleverna att interagera med utbildningsresurser och aktiviteter på andra webbplatser. Ett externt verktyg kan till exempel ge åtkomst till en ny aktivitetstyp eller utbildningsmaterial från en utgivare.

För att skapa en extern verktygsaktivitet krävs en verktygsleverantör som stöder LTI (Learning Tools Interoperability). En lärare kan skapa en extern verktygsaktivitet eller använda ett verktyg som konfigurerats av webbplatsadministratören.

Externa verktygsaktiviteter skiljer sig åt från URL-resurser på några olika sätt:

* Externa verktyg är kontextmedvetna, dvs. de har tillgång till information om den användare som startade verktyget, till exempel institution, kurs och namn
* Externa verktyg stöder läsning, uppdatering och borttagning av resultat som är associerade med aktivitetsinstansen
* Externa verktygskonfigurationer skapar en förtroenderelation mellan din webbplats och verktygsleverantören, vilket möjliggör säker kommunikation mellan dem';
$string['modulename_link'] = 'mod/lti/view';
$string['modulenameplural'] = 'Externa verktyg';
$string['modulenamepluralformatted'] = 'LTI-instanser';
$string['name'] = 'Namn';
$string['never'] = 'Aldrig';
$string['new_window'] = 'Nytt fönster';
$string['no_lti_configured'] = 'Inga aktiva externa verktyg har konfigurerats.';
$string['no_lti_pending'] = 'Det finns inga väntande externa verktyg.';
$string['no_lti_rejected'] = 'Det finns inga avvisade externa verktyg.';
$string['no_lti_tools'] = 'Inga externa verktyg har konfigurerats.';
$string['no_tp_accepted'] = 'Det finns inga accepterade externa verktygsregistreringar.';
$string['no_tp_cancelled'] = 'Det finns inga annullerade externa verktygsregistreringar.';
$string['no_tp_configured'] = 'Inga oregistrerade externa verktygsregistreringar har konfigurerats.';
$string['no_tp_pending'] = 'Det finns inga väntande externa verktygsregistreringar.';
$string['no_tp_rejected'] = 'Det finns inga avvisade externa verktygsregistreringar.';
$string['noattempts'] = 'Inga försök har gjorts på den här verktygsinstansen';
$string['noltis'] = 'Det finns inga externa verktygsinstanser.';
$string['noprofileservice'] = 'Profiltjänst kunde inte hittas';
$string['noservers'] = 'Hittade inga servrar';
$string['notypes'] = 'Det finns för närvarande inga LTI-verktyg konfigurerade i Moodle. Klicka på länken Installera ovan om du vill lägga till några.';
$string['noviewusers'] = 'Inga användare med behörighet att använda det här verktyget hittades';
$string['oauthsecurity'] = 'LTI 1.0/1.1';
$string['opensslconfiginvalid'] = 'LTI 1.3 kräver att en giltig openssl.cnf konfigureras och är tillgänglig för webbservern. Kontakta webbplatsadministratören för att konfigurera och aktivera openssl för den här webbplatsen.';
$string['optionalsettings'] = 'Valfria inställningar';
$string['organization'] = 'Organisationsdetaljer';
$string['organizationdescr'] = 'Organisationsbeskrivning';
$string['organizationid_default'] = 'Förinställt Organisations-ID';
$string['organizationid_default_help'] = 'Standardvärdet som ska användas för organisations-ID. Plats-ID identifierar den här installationen av Moodle.';
$string['organizationidguid'] = 'Organisations-ID';
$string['organizationidguid_help'] = 'En unik identifierare för den här Moodle-instansen som skickas till verktyget som instansens <em>Platform Instance GUID</em>.

Om det här fältet lämnas tomt används standardvärdet.';
$string['organizationurl'] = 'Organisations-URL';
$string['organizationurl_help'] = 'Bas-URL:en för moodle-instansen.

Om det här fältet lämnas tomt används ett standardvärde baserat på platskonfigurationen.';
$string['pagesize'] = 'Inlämningar som visas per sida';
$string['parameter'] = 'Verktygsparametrar';
$string['parameter_help'] = 'Verktygsparametrar är inställningar som verktygsleverantören i den accepterade verktygsproxyn förväntas skicka.';
$string['password'] = 'Delad hemlighet';
$string['password_admin'] = 'Delad hemlighet';
$string['password_admin_help'] = 'Den delade hemligheten kan betraktas som ett lösenord som används för att autentisera åtkomst till verktyget. Den tillhandahålls, tillsammans med konsumentnyckeln, av verktygsleverantören.

Verktyg som inte kräver säker kommunikation från Moodle och inte tillhandahåller ytterligare tjänster (t.ex. betygsrapportering)
kanske inte kräver en delad hemlighet.';
$string['password_help'] = 'För förkonfigurerade verktyg är det inte nödvändigt att ange en delad hemlighet här eftersom den delade hemligheten kommer att tillhandahållas som en del i konfigurationsprocessen.

Det här fältet bör anges om du skapar en länk till en verktygsleverantör som inte redan är konfigurerad.
Om verktygsleverantören ska användas mer än en gång i den här kursen är det en bra idé att lägga till en kursverktygskonfiguration.

Den delade hemligheten kan betraktas som ett lösenord som används för att autentisera åtkomst till verktyget. Den tillhandahålls, tillsammans med konsumentnyckeln, av verktygsleverantören.

Verktyg som inte kräver säker kommunikation från Moodle och inte tillhandahåller ytterligare tjänster (t.ex. betygsrapportering)
kanske inte kräver en delad hemlighet.';
$string['pending'] = 'Väntande';
$string['pluginadministration'] = 'Extern verktygsadministration';
$string['pluginname'] = 'Externt verktyg';
$string['preferheight'] = 'Föredragen höjd';
$string['preferwidget'] = 'Föredra widget-ippstart';
$string['preferwidth'] = 'Föredragen bredd';
$string['press_to_submit'] = 'Tryck för att starta den här aktiviteten';
$string['privacy'] = 'Integritet';
$string['privacy:metadata:coursefullname'] = 'Det fullständiga namnet på kursen användaren får tillgång till LTI Consumer från';
$string['privacy:metadata:courseid'] = 'ID för kurs från vilken användaren använder LTI-konsumenten';
$string['privacy:metadata:courseidnumber'] = 'ID-nummer för kurs från vilken användaren använder LTI-konsumenten';
$string['privacy:metadata:courseshortname'] = 'Kortnamn för kurs från vilken användaren använder LTI-konsumenten';
$string['privacy:metadata:createdby'] = 'Användaren som skapade posten';
$string['privacy:metadata:email'] = 'E-post för användaren som använder LTI-konsumenten';
$string['privacy:metadata:externalpurpose'] = 'LTI-konsumenten tillhandahåller användarinformation och kontext för LTI-verktygsleverantören.';
$string['privacy:metadata:firstname'] = 'Förnamn för användaren som använder LTI-konsumenten';
$string['privacy:metadata:fullname'] = 'Fullständigt namn för användaren som använder LTI-konsumenten';
$string['privacy:metadata:lastname'] = 'Efternamn för användaren som användaren som använder LTI-konsumenten';
$string['privacy:metadata:lti_submission'] = 'LTI-inlämning';
$string['privacy:metadata:lti_submission:datesubmitted'] = 'Tidstämpel för när inlämningen gjordes';
$string['privacy:metadata:lti_submission:dateupdated'] = 'Tidstämpel för när inlämningen ändrades';
$string['privacy:metadata:lti_submission:gradepercent'] = 'Användarens betyg som procent';
$string['privacy:metadata:lti_submission:originalgrade'] = 'Användarens ursprungsbetyg';
$string['privacy:metadata:lti_submission:userid'] = 'ID för användaren som lämnade in till LTI-aktiviteten';
$string['privacy:metadata:lti_tool_proxies'] = 'LTI-proxys';
$string['privacy:metadata:lti_tool_proxies:name'] = 'LTI-Proxynamn';
$string['privacy:metadata:lti_types'] = 'LTI-typer';
$string['privacy:metadata:lti_types:name'] = 'LTI-typnamn';
$string['privacy:metadata:role'] = 'Roll i kursen för användaren som använder LTI-konsumenten';
$string['privacy:metadata:timecreated'] = 'Tidpunkt då posten skapades';
$string['privacy:metadata:timemodified'] = 'Tidpunkt då posten ändrades';
$string['privacy:metadata:userid'] = 'ID för användaren som använder LTI-konsumenten';
$string['privacy:metadata:useridnumber'] = 'ID-nummer för användaren som använder LTI-konsumenten';
$string['privacy:metadata:username'] = 'Användarnamn för användaren som använder LTI-konsumenten';
$string['publickey'] = 'Publik nyckel';
$string['publickey_help'] = 'Den publika nyckeln (i PEM-format) som tillhandahållits av verktyget för att möjliggöra signering av inkommande meddelanden och tjänsteförfrågningar.';
$string['publickeyset'] = 'Publik nyckeluppsättning';
$string['publickeyset_help'] = 'Offentliga nycklar från där den här webbplatsen hämtar verktygets offentliga nyckel för att tillåta att signaturer av inkommande meddelanden och tjänstbegäranden verifieras.';
$string['quickgrade'] = 'Tillåt snabbedömning';
$string['quickgrade_help'] = 'Om det här alternativet är aktiverat kan flera verktyg bedömas på en sida. Lägg till resultat och kommentarer och klicka sedan på knappen "Spara all min återkoppling" för att spara alla ändringar för sidan.';
$string['redirect'] = 'Du omdirigeras inom några sekunder. Om inte, tryck på knappen.';
$string['redirectionuris'] = 'Omdirigerings-URI';
$string['redirectionuris_help'] = 'En lista över webbadresser (en per rad) som verktyget använder när du gör auktoriseringsbegäranden. Minst en måste registreras innan ett meddelande kan skickas till verktyget.';
$string['register'] = 'Registrera';
$string['register_warning'] = 'Registreringssidan verkar ta ett tag att öppna. Om den inte visas kontrollerar du att du har angett rätt URL i konfigurationsinställningarna. Om Moodle använder https, se till att verktyget du konfigurerar stöder https och att du använder https i URL:en.';
$string['registertype'] = 'Konfigurera en ny extern verktygsregistrering';
$string['registration_options'] = 'Registreringsalternativ';
$string['registrationname'] = 'Namn på verktygsleverantör';
$string['registrationname_help'] = 'Ange namnet på den verktygsleverantör som registreras.';
$string['registrationurl'] = 'Registrerings-URL';
$string['registrationurl_help'] = 'Registreringsadressen ska vara tillgänglig från verktygsleverantören som den plats dit registreringsbegäranden ska skickas.';
$string['reject'] = 'Avvisa';
$string['rejected'] = 'Avvisad';
$string['resource'] = 'Resurs';
$string['resourcekey'] = 'Konsumentnyckel';
$string['resourcekey_admin'] = 'Konsumentnyckel';
$string['resourcekey_admin_help'] = 'Konsumentnyckeln kan betraktas som ett användarnamn som används för att autentisera åtkomst till verktyget.
Det kan användas av verktygsleverantören för att unikt identifiera Moodle-webbplatsen från vilken användaren öppnar verktyget.

Konsumentnyckeln måste tillhandahållas av verktygsleverantören. Metoderna för att erhålla en konsumentnyckel varierar mellan
verktygsleverantörer. Det kan vara en automatiserad process, eller så kan det krävas en dialog med verktygsleverantören.

Verktyg som inte kräver säker kommunikation från Moodle och inte tillhandahåller ytterligare tjänster (t.ex. betygsrapportering)
kanske inte kräver en resursnyckel.';
$string['resourcekey_help'] = 'För förkonfigurerade verktyg är det inte nödvändigt att ange en resursnyckel här eftersom konsumentnyckeln kommer att tillhandahållas som en del av konfigurationsprocessen.

Det här fältet bör anges om du skapar en länk till en verktygsleverantör som inte redan är konfigurerad.
Om verktygsleverantören ska användas mer än en gång i den här kursen är det en bra idé att lägga till en kursverktygskonfiguration.

Konsumentnyckeln kan betraktas som ett användarnamn som används för att autentisera åtkomst till verktyget.
Det kan användas av verktygsleverantören för att unikt identifiera Moodle-webbplatsen från vilken användaren öppnar verktyget.

Konsumentnyckeln måste tillhandahållas av verktygsleverantören. Metoderna för att erhålla en konsumentnyckel varierar mellan
verktygsleverantörer. Det kan vara en automatiserad process, eller så kan det krävas en dialog med verktygsleverantören.

Verktyg som inte kräver säker kommunikation från Moodle och inte tillhandahåller ytterligare tjänster (t.ex. betygsrapportering)
kanske inte kräver en resursnyckel.';
$string['resourceurl'] = 'Resurs-URL';
$string['return_to_course'] = 'Klicka <a href="{$a->link}" target="_top">här</a> för att återgå till kursen.';
$string['saveallfeedback'] = 'Spara all återkoppling';
$string['search:activity'] = 'Externt verktyg - aktivitetsinformation';
$string['secure_icon_url'] = 'Ikon vid säker URL';
$string['secure_icon_url_help'] = 'Liknar ikon-URL: en, men används när webbplatsen nås säkert via SSL. Det här fältet används för att förhindra att webbläsaren visar en varning om en osäker bild.';
$string['secure_launch_url'] = 'Säker URL till verktyget';
$string['secure_launch_url_help'] = 'Liknar verktygsadressen, men används i stället för den vanliga verktygsadressen om hög säkerhet krävs. Moodle kommer att använda webbadressen till det säkra verktyget i stället för den vanliga verktygsadressen om Moodle-webbplatsen nås via SSL, eller om verktygskonfigurationen är inställd på att alltid starta via SSL.

Verktygs-URL:en kan också ställas in på en https-adress för att tvinga fram start via SSL varvid det här fältet kan lämnas tomt.';
$string['selectcontent'] = 'Välj innehåll';
$string['send'] = 'Skicka';
$string['services'] = 'Tjänster';
$string['services_help'] = 'Välj de tjänster som du vill erbjuda verktygsleverantören. Mer än en tjänst kan väljas.';
$string['setupoptions'] = 'Setup-alternativ';
$string['share_email'] = 'Dela användarens e-post med verktyget';
$string['share_email_admin'] = 'Dela användarens e-post med verktyg';
$string['share_email_admin_help'] = 'Ange om e-postadressen för den användare som startar verktyget ska delas med verktygsleverantören.
Verktygsleverantören kan behöva användarnas e-postadresser för att skilja användare med samma namn i användargränssnittet åt eller skicka e-post
till användare baserat på åtgärder i verktyget.';
$string['share_email_help'] = 'Ange om e-postadressen för den användare som startar verktyget ska delas med verktygsleverantören.

Verktygsleverantören kan behöva användarnas e-postadresser för att skilja användare med samma namn åt eller skicka e-postmeddelanden till användare baserat på åtgärder i verktyget.

Observera att den här inställningen kan åsidosättas i verktygskonfigurationen.';
$string['share_name'] = 'Dela användarens namn med verktyget';
$string['share_name_admin'] = 'Dela användarens namn med verktyg';
$string['share_name_admin_help'] = 'Ange om det fullständiga namnet på den användare som startar verktyget ska delas med verktygsleverantören.
Verktygsleverantören kan behöva användarens namn för att visa meningsfull information i verktyget.';
$string['share_name_help'] = 'Ange om det fullständiga namnet på den användare som startar verktyget ska delas med verktygsleverantören.

Verktygsleverantören kan behöva användarens namn för att visa meningsfull information i verktyget.

Observera att den här inställningen kan åsidosättas i verktygskonfigurationen.';
$string['share_roster'] = 'Tillåt verktyget att komma åt kursens deltagarförteckning';
$string['share_roster_admin'] = 'Verktyg har åtkomst till deltagarförteckning';
$string['share_roster_admin_help'] = 'Ange om verktyget kan komma åt listan över användare som är registrerade i kurser från vilka det här verktyget startas.';
$string['share_roster_help'] = 'Ange om verktyget kan komma åt listan över användare som är registrerade i den här kursen.

Observera att den här inställningen kan åsidosättas i verktygskonfigurationen.';
$string['show_in_course_activity_chooser'] = 'Visa i aktivitetsväljaren och som ett förkonfigurerat verktyg';
$string['show_in_course_lti1'] = 'Användning av verktygskonfiguration';
$string['show_in_course_lti1_help'] = 'Det här verktyget kan visas i aktivitetsväljaren och vara möjligt för en lärare att välja att lägga till i en kurs. Alternativt kan det visas i den förkonfigurerade verktygsmenyn när du lägger till ett externt verktyg i en kurs. Ett annat alternativ är att verktygskonfigurationen endast ska användas om den exakta verktygsadressen anges när ett externt verktyg läggs till i en kurs.';
$string['show_in_course_lti2'] = 'Användning av verktygskonfiguration';
$string['show_in_course_lti2_help'] = 'Det här verktyget kan visas i aktivitetsväljaren och vara möjligt för en lärare att välja att lägga till i en kurs. Alternativt kan det visas i den förkonfigurerade verktygsmenyn när du lägger till ett externt verktyg i en kurs.';
$string['show_in_course_no'] = 'Visa inte. Använd endast när en matchande verktygs-URL anges.';
$string['show_in_course_preconfigured'] = 'Visa som förkonfigurerat verktyg när du lägger till ett externt verktyg';
$string['sitehost'] = 'Webbplatsnamn';
$string['siteid'] = 'Webbplats-ID';
$string['size'] = 'Storleksparametrar';
$string['submission'] = 'Inlämning';
$string['submissions'] = 'Inlämningar';
$string['submissionsfor'] = 'Inlämningar för {$a}';
$string['subplugintype_ltiresource'] = 'LTI-tjänsteresurs';
$string['subplugintype_ltiresource_plural'] = 'LTI-tjänsteresurser';
$string['subplugintype_ltiservice'] = 'LTI-tjänst';
$string['subplugintype_ltiservice_plural'] = 'LTI-tjänster';
$string['subplugintype_ltisource'] = 'LTI-källa';
$string['subplugintype_ltisource_plural'] = 'LTI-källor';
$string['successfullycreatedtooltype'] = 'Skapade nytt verktyg!';
$string['successfullyfetchedtoolconfigurationfromcontent'] = 'Verktygskonfigurationen har hämtats från det valda innehållet.';
$string['toggle_debug_data'] = 'Växla felsökningsinformation av/på';
$string['tool_config_not_found'] = 'Verktygskonfigurationen hittades inte för denna URL.';
$string['tool_settings'] = 'Verktygsinställningar';
$string['tooldescription'] = 'Beskrivning';
$string['tooldescription_help'] = 'Beskrivningen av verktyget som ska visas för lärare i aktivitetslistan.

Detta bör beskriva vad verktyget är till för och vad det gör och eventuell ytterligare information som läraren kan behöva veta.';
$string['tooldetailsaccesstokenurl'] = 'URL för åtkomsttoken';
$string['tooldetailsauthrequesturl'] = 'URL för autentisering';
$string['tooldetailsclientid'] = 'Klient-ID';
$string['tooldetailsdeploymentid'] = 'Publicerings-ID';
$string['tooldetailsmailtosubject'] = 'LTI verktygskonfiguration';
$string['tooldetailsmodalemail'] = 'E-post';
$string['tooldetailsmodallink'] = 'Visa detaljerad konfiguration';
$string['tooldetailsmodaltitle'] = 'Konfigurationsdetaljer';
$string['tooldetailsplatformid'] = 'Plattforms-ID';
$string['tooldetailspublickeyseturl'] = 'URL till publik nyckeluppsättning';
$string['toolisbeingused'] = 'Detta verktyg används {$a} gånger';
$string['toolisnotbeingused'] = 'Detta verktyg har inte använts ännu';
$string['toolproxy'] = 'Externa verktygsregistreringar';
$string['toolproxy_help'] = 'Externa verktygsregistreringar gör att Moodle-webbplatsadministratörer kan konfigurera externa verktyg från en verktygsproxy som erhållits från en verktygsleverantör som stöder LTI 2.0. En registrerings-URL som tillhandahålls av verktygsleverantören är allt som krävs för att initiera processen. De funktioner och tjänster som erbjuds verktygsleverantören väljs vid konfigurering av en ny registrering.

Verktygsregistreringar som anges på denna sida är uppdelade i fyra kategorier:

* **Konfigurerade** - Dessa verktygsregistreringar har ställts in men registreringsprocessen har ännu inte startats.
* **Väntande** - Registreringsprocessen för dessa verktygsregistreringar har startats men inte slutförts. Öppna och spara inställningarna för att flytta den tillbaka till kategorin \'Konfigurerad\'.
* **Accepterad** - Dessa verktygsregistreringar har godkänts; de resurser som anges i verktygsproxyn kommer att visas på sidan för förkonfigurerade verktyg med en initial status \'Väntande\'.
* **Avvisad** - Dessa verktygsregistreringar är sådana som avvisades under registreringsprocessen. Öppna och spara inställningarna för att flytta den tillbaka till kategorin \'Konfigurerad\' så att registreringsprocessen kan startas på nytt.';
$string['toolproxyregistration'] = 'Extern verktygsregistrering';
$string['toolregistration'] = 'Extern verktygsregistrering';
$string['toolsetup'] = 'Konfiguration för externt verktyg';
$string['tooltypeadded'] = 'Förinställt verktyg tillagt';
$string['tooltypedeleted'] = 'Förinställt verktyg borttaget';
$string['tooltypenotdeleted'] = 'Kunde inte ta bort förinställt verktyg';
$string['tooltypes'] = 'Verktyg';
$string['tooltypeupdated'] = 'Förinställt verktyg uppdaterat';
$string['toolurl'] = 'Verktygs-URL';
$string['toolurl_contentitemselectionrequest'] = 'URL för val av innehåll';
$string['toolurl_contentitemselectionrequest_help'] = 'URL:en för innehållsval används för att starta innehållsvalssidan från verktygsleverantören. Om den är tom används verktygs-URL:en';
$string['toolurl_help'] = 'Verktygs-URL:en används för att matcha verktygsadresser med rätt verktygskonfiguration. Det är valfritt att föregå URL:en med http/s.

Dessutom används bas-URL:en som verktygsadress om en verktygsadress inte anges i den externa verktygsinstansen.

En basadress som *tool.com* matchar till exempel följande:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=10
* www.tool.com/quizzes

En bas-URL som *www.tool.com/quizzes* matchar följande:

* www.tool.com/quizzes
* tool.com/quizzes
* tool.com/quizzes/take.php?id=10

En bas-URL som *quiz.tool.com* matchar följande:

* quiz.tool.com
* quiz.tool.com/take.php?id=10

Om två olika verktygskonfigurationer matchar samma domän används den mest specifika matchningen.

Du kan också infoga en patron-URL om du har en och informationen för verktyget fylls i automatiskt.';
$string['toolurlplaceholder'] = 'Verktygs-URL...';
$string['typename'] = 'Verktygsnamn';
$string['typename_help'] = 'Verktygsnamnet används för att identifiera verktygsleverantören inom Moodle. Det angivna namnet visas för lärare när externa verktyg används i kurserna.';
$string['types'] = 'Typer';
$string['unabletocreatetooltype'] = 'Kan inte skapa verktyg';
$string['unabletofindtooltype'] = 'Kunde inte hitta verktyg för {$a->id}';
$string['unknownstate'] = 'Okänt tillstånd';
$string['update'] = 'Uppdatera';
$string['useraccountinformation'] = 'Information om användarkonto';
$string['userpersonalinformation'] = 'Personlig användarinformation';
$string['using_tool_cartridge'] = 'Använder verktygskassett';
$string['using_tool_configuration'] = 'Använder verktygskonfiguration:';
$string['validurl'] = 'En giltig URL måste börja med http:// eller https://';
$string['viewsubmissions'] = 'Visa inlämnings- och bedömningsskärm';
