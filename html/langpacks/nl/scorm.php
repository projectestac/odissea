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
 * Strings for component 'scorm', language 'nl', branch 'MOODLE_38_STABLE'
 *
 * @package   scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Activatie';
$string['activityloading'] = 'Je zult automatisch doorverwezen worden naar de activiteit in';
$string['activityoverview'] = 'Je hebt SCORM-pakketten na te kijken';
$string['activitypleasewait'] = 'Laden, even geduld aub ...';
$string['adminsettings'] = 'Beheerinstellingen';
$string['advanced'] = 'Parameters';
$string['aicchacpkeepsessiondata'] = 'AICC HACP sessiegegevens';
$string['aicchacpkeepsessiondata_desc'] = 'De tijdsduur in dagen dat de externe AICC HACP sessiedata worden bijgehouden (een hoge instelling zal de tabel vullen met oude data maar kan nuttig zijn bij het debuggen).';
$string['aicchacptimeout'] = 'AICC HACP timeout';
$string['aicchacptimeout_desc'] = 'De tijdsduur in minuten dat een externe AICC HACP sessie open kan blijven.';
$string['aiccuserid'] = 'AICC pass numeriek gebruikers id';
$string['aiccuserid_desc'] = 'De AICC-standaard voor gebruikersnamen is erg beperkend in vergelijking met Moodle. De AICC-standaard staat alfanumerieke tekens toe, het liggend streepje (-) en de underscore (_). Punten, spaties en het @-symbool zijn niet toegestaan. Indien ingeschakeld geeft Moodle gebruikerID\'s aan het AICC-pakket in plaats van gebruikersnamen.';
$string['aliasonly'] = 'Wanneer je een imsmanifest.xml bestand van een opslagruimte selecteert, moet je een alias/snelkoppeling voor dit bestand gebruiken';
$string['allowapidebug'] = 'Activeer API debug en tracing (zet het capture mask met apidebugmask)';
$string['allowtypeaicchacp'] = 'Schakel extern AICC HACP in';
$string['allowtypeaicchacp_desc'] = 'Indien ingeschakeld, staat dit AICC HACP extern communiceren toe zonder gebruikerslogin te vereisen voor post requests van het extern AICC-pakket';
$string['allowtypeexternal'] = 'Extern pakkettype inschakelen';
$string['allowtypeexternalaicc'] = 'Rechtstreekse AICC url inschakelen';
$string['allowtypeexternalaicc_desc'] = 'Indien ingeschakeld is een rechtstreekse URL naar een eenvoudig AICC-pakket toegestaan';
$string['allowtypelocalsync'] = 'Gedownload pakkettype inschakelen';
$string['apidebugmask'] = 'API debug capture mask - gebruik een eenvoudige regex op &lt;username&gt;:&lt;activityname&gt; vb. admin:.* zal enkel voor gebruiker admin debuggen';
$string['areacontent'] = 'Inhoud bestanden';
$string['areapackage'] = 'Pakketbestanden';
$string['asset'] = 'Set';
$string['assetlaunched'] = 'Set - bekeken';
$string['attempt'] = 'Poging';
$string['attempt1'] = '1 poging';
$string['attempts'] = 'Pogingen';
$string['attemptsmanagement'] = 'Pogingenbeheer';
$string['attemptstatusall'] = 'Mijn startpagina en ingangspagina';
$string['attemptstatusentry'] = 'Enkel op ingangspagina';
$string['attemptstatusmy'] = 'Enkel op Mijn startpagina';
$string['attemptsx'] = '{$a} pogingen';
$string['attr_error'] = 'Foute waarde voor attribuut ({$a->attr}) in tag {$a->tag}.';
$string['autocommit'] = 'Automatisch insturen';
$string['autocommitdesc'] = 'Automatisch SCORM-gegevens bewaren als het SCORM-pakket dat niet doet.';
$string['autocommit_help'] = 'Indien ingeschakeld zullen SCORM-gegevens automatisch bewaard worden in de databank. Nuttig voor SCORM-objecten die hun data niet regelmatig bewaren.';
$string['autocontinue'] = 'Ga automatisch verder';
$string['autocontinuedesc'] = 'Indien ingeschakeld worden opeenvolgende leerobjecten automatisch gestart. Anders moet de Ga verder-knop gebruikt worden.';
$string['autocontinue_help'] = '<p><b>Automatisch verdergaan</b></p>

<p>Als deze instelling op Ja staat, dan zal, wanneer een SCO en "close communication" methode aanroept, de volgende SCO automatisch starten.</p>

<p>Als dit op Nee staat, moeten de gebruikers op de "Ga verder"-knop klikken om verder te gaan.</p>';
$string['averageattempt'] = 'Gemiddelde van pogingen';
$string['badarchive'] = 'Je moet een geldig zip-bestand geven';
$string['badimsmanifestlocation'] = 'Er is een imsmanifest.xml-bestand gevonden, maar niet in de root van je zip-bestand. Hermaak je SCORM-pakket';
$string['badmanifest'] = 'Enkele belangrijke fouten: zie foutenlogboek';
$string['browse'] = 'Bekijken';
$string['browsed'] = 'Voorgeproefd';
$string['browsemode'] = 'Probeermodus';
$string['browserepository'] = 'Blader door de opslagruimte';
$string['calculatedweight'] = 'Berekende weging';
$string['calendarend'] = '{$a} sluit';
$string['calendarstart'] = '{$a} opent';
$string['cannotaccess'] = 'Je kunt dit script niet op deze manier oproepen';
$string['cannotfindsco'] = 'Kon SCO niet vinden';
$string['chooseapacket'] = 'Kies of update een SCORM/AICC-pakket';
$string['closebeforeopen'] = 'Je hebt een sluitdatum opgegeven voor de opendatum';
$string['collapsetocwinsize'] = 'Inhoudsopgave dichtklappen wanneer het venster kleiner wordt dan';
$string['collapsetocwinsizedesc'] = 'Deze instelling laat je de venstergrootte kiezen tot wanneer de inhoudsopgave automatisch ingeklapt moet blijven.';
$string['compatibilitysettings'] = 'Compatibiliteitsinstellingen';
$string['completed'] = 'Volledig';
$string['completionscorerequired'] = 'Vereiste minimumscore';
$string['completionscorerequireddesc'] = 'Maximale score van {$a} vereist voor voltooiing.';
$string['completionscorerequired_help'] = 'Het inschakelen van deze instelling zal er voor zorgen dat een gebruiker minstens de minimumscore moet behalen om deze SCORM-activiteit als voltooid te markeren, samen met eventuele andere vereisten voor Voltooide Activiteit.';
$string['completionstatusallscos'] = 'Vereis alle scos om hun voltooiingsstatus te melden';
$string['completionstatusallscos_help'] = 'Somige SCORM-pakketten bevatten meerdere onderdelen of "scos" - wanneer dit is ingeschakeld moeten alle scos in het pakket hun relevante lesson_status voor deze activiteit als voltooid markeren.';
$string['completionstatus_completed'] = 'Voltooid';
$string['completionstatus_passed'] = 'Geslaagd';
$string['completionstatusrequired'] = 'Vereist status';
$string['completionstatusrequireddesc'] = 'Leerling moet minstens één van volgende statussen bereiken: {$a}';
$string['completionstatusrequired_help'] = 'Het controleren van één of meerdere statussen zal er voor zorgen dat en gebruiker minstens één gecontroleerde status moet bereiken om deze SCORM-activiteit als voltooid te markeren, samen met eventuele andere vereisten voor Voltooide Activiteit.';
$string['confirmloosetracks'] = 'WAARSCHUWING: Dit pakket is blijkbaar gewijzigd of aangepast. Als de pakketstructuur is gewijzigd, dan zou het afgelegde leerpad van sommige gebruikers zou kunnen verloren gegaan zijn tijdens het updateproces.';
$string['contents'] = 'Inhoud';
$string['coursepacket'] = 'Cursuspakket';
$string['coursestruct'] = 'Cursusstructuur';
$string['crontask'] = 'Achtergrondverwerking voor SCORM';
$string['currentwindow'] = 'Huidig venster';
$string['datadir'] = 'Fout van het bestandssysteem: de gegevensfolder van de cursus kan niet gemaakt worden';
$string['defaultdisplaysettings'] = 'Standaard scherminstellingen';
$string['defaultgradesettings'] = 'Standaard cijferinstellingen';
$string['defaultothersettings'] = 'Andere standaardinstellingen';
$string['deleteallattempts'] = 'Verwijder alle SCORM pogingen';
$string['deleteattemptcheck'] = 'Weet je zeker dat je al deze pogingen volledig wil verwijderen?';
$string['deleteselected'] = 'Verwijder geselecteerde pogingen';
$string['deleteuserattemptcheck'] = 'Weet je zeker dat je al jouw pogingen volledig wil verwijderen?';
$string['details'] = 'SCO opvolgdetails';
$string['directories'] = 'Toon de links naar mappen';
$string['disabled'] = 'Uitgeschakeld';
$string['display'] = 'Toon';
$string['displayactivityname'] = 'Activiteitsnaam tonen';
$string['displayactivityname_help'] = 'Al dan niet de activiteitsnaam boven de SCORM-speler tonen';
$string['displayattemptstatus'] = 'Toon pogingstatus';
$string['displayattemptstatusdesc'] = 'Of een samenvatting van de pogingen van de gebruiker getoond moeten worden op het cursusoverzichtsblok op Mijn startpagina en/of de startpagina van het SCORM-pakket.';
$string['displayattemptstatus_help'] = 'Hiermee wordt een samenvatting van de pogingen van de gebruiker getoond in het cursusoverzichtsblok in Mijn startpagina en/of de SCORM ingangspagina.';
$string['displaycoursestructure'] = 'Toon cursusstructuur op startpagina';
$string['displaycoursestructuredesc'] = 'Deze instelling regelt de standaardinstelling voor het tonen van de inhoudsopgave op de startpagina van het SCORM-pakket.';
$string['displaycoursestructure_help'] = 'Indien ingeschakeld zal de inhoudsopgave getoond worden op de SCORM beschrijvingspagina';
$string['displaydesc'] = 'Of SCORM-pakketten in een nieuw venster getoond moeten worden.';
$string['displaysettings'] = 'Scherminstellingen';
$string['dnduploadscorm'] = 'Voeg een SCORM-pakket toe';
$string['domxml'] = 'DOMXML externe bibliotheek';
$string['duedate'] = 'Klaar tegen';
$string['element'] = 'Element';
$string['enter'] = 'Start';
$string['entercourse'] = 'Begin de SCORM/AICC-cursus';
$string['errorlogs'] = 'Foutenlogboek';
$string['eventattemptdeleted'] = 'Poging verwijderd';
$string['eventinteractionsviewed'] = 'Interacties bekeken';
$string['eventreportviewed'] = 'Rapport bekeken';
$string['eventscolaunched'] = 'Sco gestart';
$string['eventscorerawsubmitted'] = 'Ingestuurde ruwe SCORM-score';
$string['eventstatussubmitted'] = 'Ingestuurde SCORM-status';
$string['eventtracksviewed'] = 'Tracks bekeken';
$string['eventuserreportviewed'] = 'Gebruikersrapport bekeken';
$string['everyday'] = 'Elke dag';
$string['everytime'] = 'Elke keer wanneer gebruikt';
$string['exceededmaxattempts'] = 'Je hebt het maximale aantal pogingen bereikt.';
$string['exit'] = 'Verlaat de cursus';
$string['exitactivity'] = 'Stop';
$string['expired'] = 'Sorry, deze activiteit is op {$a} gesloten en is niet langer beschikbaar';
$string['external'] = 'Timing update externe pakketten';
$string['failed'] = 'Mislukt';
$string['finishscorm'] = 'Je bent klaar met het bekijken van deze bron, {$a}';
$string['finishscormlinkname'] = 'klik hier om terug te keren naar de cursuspagina';
$string['firstaccess'] = 'Eerste toegang';
$string['firstattempt'] = 'Eerste poging';
$string['floating'] = 'Zwevend';
$string['forceattemptalways'] = 'Altijd';
$string['forceattemptoncomplete'] = 'Wanneer vorige poging voltooid, geslaagd of niet geslaagd is';
$string['forcecompleted'] = 'Verplichte poging voltooid';
$string['forcecompleteddesc'] = 'Deze instelling regelt de standaard waarde voor het verplicht voltooien';
$string['forcecompleted_help'] = 'Indien ingeschakeld wordt de status van de huidige poging naar voltooid gezet. (Deze instelling is enkel toepasbaar op SCORM 1.2-pakketten.)';
$string['forcejavascript'] = 'Verplicht gebruikers om JavaScript in te schakelen';
$string['forcejavascript_desc'] = 'Indien ingeschakeld (aanbevolen) verhindert dit toegang tot SCORM-objecten wanneer JavaScript niet is ondersteund/ingeschakeld in de browser van een gebruiker.  Indien uitgeschakeld, dan kan de gebruiker de SCORM bekijken, maar de API-communicatie zal niet werken en er zal geen cijferinformatie bewaard worden.';
$string['forcejavascriptmessage'] = 'JavaScript is vereist om dit object te kunnen bekijken. Schakel JavaScript in in je browser en probeer opnieuw.';
$string['forcenewattempts'] = 'Verplicht nieuwe poging';
$string['forcenewattempts_help'] = 'Er zijn 3 opties:

* Nee - Als een vorige poging voltooid is, geslaagd of niet geslaagd zal de leerling de optie krijgen om de poging te herbekijken of een nieuwe poging te starten.
*Wanneer vorige poging voltooid, geslaagd of niet geslaagd is - Dit steunt op de status van de instelling voltooid, geslaagd of niet geslaagd van het SCORM-pakket.
* Altijd - Elke nieuwe toegang tot het SCORM-pakket zal een nieuwe poging genereren en de leerling zal niet terug gestuurd worden naar hetzelfde punt dat die bereikt had bij de vorige poging.';
$string['found'] = 'Manifest gevonden';
$string['frameheight'] = 'Met deze instelling kies je de hoogte van het frame of venster.';
$string['framewidth'] = 'Deze voorkeurinstelling is de standaardbreedte van het frame of venster.';
$string['fromleft'] = 'Van links';
$string['fromtop'] = 'Van boven';
$string['fullscreen'] = 'Toon op volledig scherm';
$string['general'] = 'Algemene gegevens';
$string['gradeaverage'] = 'Gemiddeld cijfer';
$string['gradeforattempt'] = 'Beoordeling van de poging';
$string['gradehighest'] = 'Hoogste cijfer';
$string['grademethod'] = 'Beoordelingsmethode';
$string['grademethoddesc'] = 'De beoordelingsmethode definieert hoe het cijfer voor één enkele poging van de activiteit wordt bepaald.';
$string['grademethod_help'] = 'De beoordelingsmethode legt vast hoe de score voor elke aparte poging van de activiteit wordt bepaald.

Er zijn vier beoordelingsmethodes:
* Leerobjecten - Het aantal voltooide/geslaagde leerobjecten
* Hoogste cijfer - De hoogste score behaald hebben op alle voorbije leerobjecten
*Gemiddelde cijfer - Het gemiddelde van alle scores
*Opgeteld cijfer - De som van alle scores';
$string['gradereported'] = 'Beoordeling gerapporteerd';
$string['gradescoes'] = 'Leerobjecten';
$string['gradesettings'] = 'Cijferinstellignen';
$string['gradesum'] = 'Totaalcijfer';
$string['height'] = 'Hoogte';
$string['hidden'] = 'Verborgen';
$string['hidebrowse'] = 'Verberg voorproeven';
$string['hidebrowsedesc'] = 'Met de voorbeeldmodus kan een leerling de activiteit bekijken voor hij die probeert.';
$string['hidebrowse_help'] = '<p>Als deze optie op ja wordt gezet, dan zal de leerling niet de mogelijkheid hebben een SCORM/AICC pakket in voorproefmodus te bekijken.</p>

<p>Als deze optie op nee wordt gezet, zal de leerling er voor kunnen kiezen om in voorproefmodus de activiteit te bekijken zonder registratie van zijn resultaten of de activiteit te starten met registratie.</p>

<p>Wanneer een leerobject volledig is bekeken in voorproefmodus, dan wordt het gemarkeerd met een <img src="<?php echo $CFG->wwwroot.\'/mod/scorm/pix/browsed.gif\' ?>" alt="<?php print_string(\'browsed\',\'scorm\') ?>" title="<?php print_string(\'browsed\',\'scorm\') ?>" /> Activiteit bekeken-icoon.</p>';
$string['hideexit'] = 'Verberg de uitgang-link';
$string['hidereview'] = 'Verberg de knop voor herzien';
$string['hidetoc'] = 'Weergave cursusstructuur';
$string['hidetocdesc'] = 'Deze instelling regelt hoede inhoudsopgave in de SCORM-speler getoond wordt.';
$string['hidetoc_help'] = 'Deze instelling bepaalt hoe de inhoudstabel getoond wordt in de SCORM-speler.';
$string['highestattempt'] = 'Beste poging';
$string['identifier'] = 'Vraagidentificatie';
$string['incomplete'] = 'Onvolledig';
$string['indicator:cognitivedepth'] = 'SCORM cognitief';
$string['indicator:cognitivedepthdef'] = 'SCORM cognitief';
$string['indicator:cognitivedepthdef_help'] = 'De deelnemer heeft dit percentage van de cognitieve betrokkenheid van de SCORM-activiteiten bereikt tijdens dit analyse-interval (Niveaus = Geen weergave, Bekijken, Verzenden, Feedback bekijken)';
$string['indicator:cognitivedepth_help'] = 'Deze indicator is gebaseerd op de door de leerling bereikte cognitieve diepte in een SCORM activiteit.';
$string['indicator:socialbreadth'] = 'SCORM sociaal';
$string['indicator:socialbreadthdef'] = 'SCORM sociaal';
$string['indicator:socialbreadthdef_help'] = 'De deelnemer heeft dit percentage van de sociale betrokkenheid van de SCORM-activiteiten tijdens dit analyse-interval bereikt (Niveaus = Geen deelname, alleen deelnemer)';
$string['indicator:socialbreadth_help'] = 'Deze indicator is gebaseerd op de door de leerling behaalde sociale breedte in een SCORM activiteit.';
$string['info'] = 'Info';
$string['interactions'] = 'Interacties';
$string['invalidactivity'] = 'Fout in SCORM-activiteit';
$string['invalidhacpsession'] = 'Ongeldige HACP-sessie';
$string['invalidmanifestname'] = 'Enkel imsmanifest.xml of zip-bestanden mogen geselecteerd worden';
$string['invalidmanifestresource'] = 'Waarschuwing: volgende bronnen hebben een referentie in je manifest maar konden niet gevonden worden:';
$string['invalidstatus'] = 'Ongeldige status';
$string['invalidurl'] = 'Ongeldige URL opgegeven';
$string['invalidurlhttpcheck'] = 'Ongeldige URL opgegeven. Foutopsporingsbericht: <pre>{$a->cmsg}</pre>';
$string['last'] = 'Laatst bekeken op';
$string['lastaccess'] = 'Laatst bekeken';
$string['lastattempt'] = 'Laatste voltooide poging';
$string['lastattemptlock'] = 'Blokkeer na laatste poging';
$string['lastattemptlockdesc'] = 'Indien ingeschakeld kan een leerling de SCORM-speler niet starten nadat hij alle pogingen opgebruikt heeft.';
$string['lastattemptlock_help'] = 'Indien dit is ingeschakeld, kan de leerling de SCORM-speler niet meer starten als het aantal toegestane pogingen bereikt is.';
$string['location'] = 'Toon locatiebalk';
$string['masteryoverride'] = 'Slaagscore overschrijvingsstatus';
$string['masteryoverridedesc'] = 'Deze instelling zet de standaard voor de slaagscore overschrijvingsinstelling';
$string['masteryoverride_help'] = 'Indien ingeschakeld en de slagscore is gegeven, wanneer LMSFinish wordt aangeroepen en een ruwe score gegeven is, dan zal de status herberekend worden door gebruik te maken van de ruwe score en de slaagscore. Dan zal elke status die de SCORM geeft (ook "niet klaar") overschreven worden.';
$string['max'] = 'Max score';
$string['maximumattempts'] = 'Aantal pogingen';
$string['maximumattemptsdesc'] = 'Deze instelling regelt het maximale aantal pogingen voor een activiteit';
$string['maximumattempts_help'] = 'Deze instelling beperkt het aantal pogingen. Het werkt enkle voor SCORM 1.2 en AICC-pakketten';
$string['maximumgradedesc'] = 'Deze instelling regelt het standaard maximumcijfer voor een activiteit';
$string['menubar'] = 'Toon menubalk';
$string['min'] = 'Minimumscore';
$string['missing_attribute'] = 'Attribuut ontbreekt {$a->attr} in tag {$a->tag}';
$string['missingparam'] = 'Een vereiste parameter ontbreekt of is fout';
$string['missing_tag'] = 'Ontbrekende tag {$a->tag}';
$string['mode'] = 'Modus';
$string['modulename'] = 'SCORM-pakket';
$string['modulename_help'] = 'Een SCORM-pakket is een verzameling bestanden die verpakt zijn volgens een afgesproken standaard voor leerobjecten. De SCORM-activiteit maakt het mogelijk om SCORM of AICC-pakketten te uploaden als zip-bestanden en aan een cursus toegevoegd te worden.

De inhoud wordt meestal getoond op meerdere pagina\'s met navigatie tussen de pagina\'s. Er zijn verschillende opties om de inhoud in een pop-upvenster te tonen, met een inhoudsopgave, met navigatieknoppen enz. SCORM-activiteiten bevatten dikwijls vragen, waarvan de resultaten opgenomen zullen worden in de cijferlijst.

SCORM-activiteiten kunnen gebruikt worden

* om multimedia-inhoud en animaties te tonen
* als een beoordelingstool';
$string['modulenameplural'] = 'SCORM-pakketten';
$string['myaiccsessions'] = 'Mijn AICC-sessies';
$string['myattempts'] = 'Mijn pogingen';
$string['nav'] = 'Toon navigatie';
$string['navdesc'] = 'Deze instelling bepaalt of de navigatieknoppen en hun positie getoond worden.';
$string['nav_help'] = 'Deze instelling bepaalt of navigatieknoppen al dan niet getoond moeten worden en hun positie.

Er zijn 3 opties:

* Nee - Toon geen navigatieknoppen.
* Onder inhoud - Toon de navigatieknoppen onder de inhoud van je SCORM-pakket.
* Zwevend - Navigatieknoppen worden zwevend getoond, met de positie van boven en van links bepaald door het pakket.';
$string['navigation'] = 'Navigatie';
$string['navpositionleft'] = 'Positie van de navigatieknoppen in pixels van links';
$string['navpositiontop'] = 'Positie van de navigatieknoppen in pixels van boven.';
$string['networkdropped'] = 'De SCORM-speler heeft bepaald dat je internetverbinding onbetrouwbaar is of onderbroken is. Als je verder gaat met deze SCORM-activiteit, dan zal je vooruitgang niet bewaard worden. <br />
Je kunt het beste de activiteit nu verlaten en terugkeren wanneer je een betrouwbare verbinding hebt.';
$string['newattempt'] = 'Begin een nieuwe poging';
$string['next'] = 'Volgende';
$string['noactivity'] = 'Niets te melden';
$string['noattemptsallowed'] = 'Aantal toegelaten pogingen';
$string['noattemptsmade'] = 'Aantal pogingen die je gedaan hebt';
$string['no_attributes'] = 'Tag {$a->tag} moet attributen hebben';
$string['no_children'] = 'Tag {$a->tag} moet children hebben';
$string['nolimit'] = 'Onbeperkt aantal pogingen';
$string['nomanifest'] = 'Fout bestandspakket - ontbrekend imsmanifest.xml of AICC-structuur';
$string['noprerequisites'] = 'Sorry, maar je hebt nog niet genoeg voltooid om toegang te krijgen tot dit leerobject';
$string['noreports'] = 'Er is geen rapport om te tonen';
$string['normal'] = 'Activiteit starten';
$string['noscriptnoscorm'] = 'Je browser ondersteunt geen javascript of javascript staat uitgeschakeld. Dit SCORM-pakket zal niet juist afspelen en gegevens niet juist bewaren.';
$string['notattempted'] = 'Niet geprobeerd';
$string['not_corr_type'] = 'Typfout voor tag {$a->tag}';
$string['notopenyet'] = 'Sorry, deze activiteit is niet beschikbaar tot {$a}';
$string['objectives'] = 'Objectieven';
$string['openafterclose'] = 'Je hebt een startdatum na de einddatum opgegeven';
$string['optallstudents'] = 'alle gebruikers';
$string['optattemptsonly'] = 'enkel gebruikers met pogingen';
$string['options'] = 'Opties (niet mogelijk in sommige browsers)';
$string['optionsadv'] = 'Opties (Geavanceerd)';
$string['optionsadv_desc'] = 'Indien ingeschakeld zullen de hoogte en breedte als geavanceerde opties getoond worden.';
$string['optnoattemptsonly'] = 'enkel gebruikers zonder pogingen';
$string['organization'] = 'Organisatie';
$string['organizations'] = 'Organisaties';
$string['othersettings'] = 'Bijkomende instellingen';
$string['package'] = 'Verpakkingsbestand';
$string['packagedir'] = 'Fout van het bestandssysteem: kan geen map voor het pakket maken';
$string['packagefile'] = 'Je hebt geen bestand met een pakket gespecifieerd';
$string['packagehdr'] = 'Pakket';
$string['package_help'] = '<p><b>Pakketbestand</b></p>

<p>Het pakket is een bestand met extentie <b>zip</b> (of pif) dat een reeks geldige AICC of SCORM vakdefinitiebestanden bevat.</p>

<p>Een <b>SCORM</b>-pakket moet in de root een zipbestand bevatten met de naam <b>imsmanifest.xml</b> dat de SCORM vakstructuur, de locatie van de bronnen en veel andere dingen definieert.</p>

<p>Een <b>AICC</b> wordt door verschillende bestanden gedefinieerd (van 4 tot 7) met vastgelegde extenties. De betekenis van die extenties is:</p>
   <ul>
	<li>CRS - Course Description file (verplicht)</li>
	<li>AU  - Assignable Unit file (verplicht)</li>
	<li>DES - Descriptor file (verplicht)</li>
	<li>CST - Course Structure file (verplicht)</li>
	<li>ORE - Objective Relationship file (optioneel)</li>
	<li>PRE - Prerequisites file (optioneel)</li>
	<li>CMP - Completition Requirements file (optioneel)</li>
   </ul>';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Met deze instelling kun je een URL voor een SCORM-pakket opgeven, eerder dan een bestand selecteren via de bestandskiezer.';
$string['page-mod-scorm-x'] = 'Elke SCORM-module pagina';
$string['pagesize'] = 'Paginagrootte';
$string['passed'] = 'Geslaagd';
$string['php5'] = 'PHP 5 (DOMXML native library)';
$string['pluginadministration'] = 'Beheer SCORM-pakket';
$string['pluginname'] = 'SCORM-pakket';
$string['popup'] = 'Open de huidige SCORM/AICC in een nieuw venster';
$string['popuplaunched'] = 'Dit scormpakket is gestart in een popup-venster. Als je klaar bent met het bekijken van deze bron, klik dan hier om naar de cursuspagina terug te keren.';
$string['popupmenu'] = 'In een rolmenu';
$string['popupopen'] = 'Open het pakket in een nieuw venster';
$string['popupsblocked'] = 'Blijkbaar zijn pop-upvensters geblokkeerd, waardoor dit SCORM-pakket niet kan afspelen. Controleer je browserinstellingen voor je verder gaat.';
$string['position_error'] = 'De {$a->tag} kan geen child zijn van {$a->parent} tag';
$string['preferencespage'] = 'Voorkeuren enkel voor deze pagina';
$string['preferencesuser'] = 'Voorkeuren voor dit rapport';
$string['prev'] = 'Vorige';
$string['privacy:metadata:aicc:data'] = 'Persoonlijke gegevens die doorgegeven worden via het AICC/SCORM subsysteem.';
$string['privacy:metadata:aicc:externalpurpose'] = 'Deze plugin stuurt extern gegevens uit via AICC HACP.';
$string['privacy:metadata:aicc_session:lessonstatus'] = 'De status van de op te volgen les';
$string['privacy:metadata:aicc_session:scormmode'] = 'De modus van het op te volgen element';
$string['privacy:metadata:aicc_session:scormstatus'] = 'De status van het op te volgen element';
$string['privacy:metadata:aicc_session:sessiontime'] = 'De op te volgen sessietijd';
$string['privacy:metadata:aicc_session:timecreated'] = 'Het tijdstip waarop het op te volgen element was gemaakt';
$string['privacy:metadata:attempt'] = 'Het pogingnummer';
$string['privacy:metadata:scoes_track:element'] = 'De naam van het op te volgen element';
$string['privacy:metadata:scoes_track:value'] = 'De waarde van het gegeven element';
$string['privacy:metadata:scorm_aicc_session'] = 'De sessie-informatie over de AICC HACP';
$string['privacy:metadata:scorm_scoes_track'] = 'De opgevolgde gegevesn van de SCOes die bij de activiteit horen';
$string['privacy:metadata:timemodified'] = 'De tijd waarop het op te volgen element laatst was gewijzigd';
$string['privacy:metadata:userid'] = 'De ID van de gebruiker die toegang had tot de SCORM-activiteit';
$string['protectpackagedownloads'] = 'Bescherm pakketdownloads';
$string['protectpackagedownloads_desc'] = 'Indien ingeschakeld zullen SCORM-pakketten enkel gedownload kunnen worden als de gebruiker de course:manageactivities mogelijkheid heeft. Indien uitgeschakeld kunnen SCORM-pakketten aldijd gedownload worden (mobiel of op andere manieren).';
$string['raw'] = 'Ruwe score';
$string['regular'] = 'Normaal manifest';
$string['report'] = 'Rapport';
$string['reportcountallattempts'] = '{$a->nbattempts} pogingen voor {$a->nbusers} gebruikers, van {$a->nbresults} resultaten';
$string['reportcountattempts'] = '{$a->nbresults} resultaten ({$a->nbusers} gebruikers)';
$string['reports'] = 'Rapporten';
$string['repositorynotsupported'] = 'Deze opslagruimte ondersteunt het rechtstreeks linken naar een imsmanifest.xml-bestand niet.';
$string['response'] = 'Antwoord';
$string['result'] = 'Resultaat';
$string['results'] = 'Resultaten';
$string['review'] = 'Herzien';
$string['reviewmode'] = 'Nalezen';
$string['rightanswer'] = 'Juist antwood';
$string['scoes'] = 'Leerobjecten';
$string['score'] = 'Score';
$string['scorm:addinstance'] = 'Voeg een nieuw SCORM-pakket toe';
$string['scormclose'] = 'Beschikbaar tot';
$string['scormcourse'] = 'Leercursus';
$string['scorm:deleteownresponses'] = 'Eigen pogingen verwijderen';
$string['scorm:deleteresponses'] = 'Verwijder SCORM pogingen';
$string['scormloggingoff'] = 'API loggen staat uit';
$string['scormloggingon'] = 'API loggen staat aan';
$string['scormopen'] = 'Beschikbaar van';
$string['scormresponsedeleted'] = 'Verwijderde gebruikerspoging';
$string['scorm:savetrack'] = 'Bewaar spoor';
$string['scorm:skipview'] = 'Overzicht overslaan';
$string['scormstandard'] = 'SCORM standaardmodus';
$string['scormstandarddesc'] = 'Wanneer uitgeschakeld zal Moodle SCORM 1.2-pakketten toestaan om meer te bewaren dan de specificatie toestaat en zal de volledige naam instelling van Moodle gebruiken wanneer de gebruikersnaam doorgegeven wordt aan het SCORM-pakket.';
$string['scormtype'] = 'Type';
$string['scormtype_help'] = 'Deze instelling bepaalt hoe het pakket wordt opgenomen in de cursus. Er zijn vijf opties:

* Upload van pakket - Staat toe om een SCORM pakket te kiezen via de file picker
* Extern SCORM manifest - Staat toe om een imsmanifest.xml URL te specifiëren. Nota: Indien de URL een andere domeinnaam heeft dan jouw site, dan is \'Download van pakket\' een betere optie, want anders worden de beoordelingscijfers niet bewaard.
* Download van pakket - Staat toe om een pakket URL te specifiëren. Dit pakket zal worden unzipped, lokaal bewaard, en bijgewerkt wanneer het externe SCORN pakket wordt bijgewerkt.
* Lokale IMS content opslagruimte - Staat toe om een pakket te selecteren vanuit een IMS opslagruimte
* Externe AICC URL - Deze URL is de lancerings URL voor één enkele AICC activiteit. Een pseudo pakket zal hierrond worden opgetrokken.';
$string['scorm:viewreport'] = 'Bekijk rapporten';
$string['scorm:viewscores'] = 'Bekijk resultaten';
$string['scrollbars'] = 'Laat rollen door het venster toe';
$string['search:activity'] = 'SCORM-pakket - activiteitsinformatie';
$string['selectall'] = 'Selecteer alles';
$string['selectnone'] = 'Selecteer niets';
$string['show'] = 'Toon';
$string['sided'] = 'Aan de zijkant';
$string['skipview'] = 'Leerlingen slaan inhoudspagina over';
$string['skipviewdesc'] = 'Deze instelling bepaalt de standaard voor wanneer inhoudsstructuur van een pagina moet overgeslagen worden';
$string['skipview_help'] = '<p>Als je een pakketje toevoegd met maar één leerobject er in, dan kun je er voor kiezen om automatisch de inhoudsopgave niet te tonen..</p>

<p>Je kunt kiezen uit:
   <ul>
       <li><strong>Nooit</strong> - de inhoudsopgave nooit overslaan</li>
       <li><strong>Eerste toegang</strong> enkel de eerste keer de inhoudsopgave overslaan</li>
       <li><strong>Always</strong> - de inhoudsopgave altijd overslaan</li>
   </ul>
</p>';
$string['slashargs'] = 'WAARSCHUWING: slash arguments is uitgeschakeld op deze site. Daardoor kunnen sommige objecten niet werken zoals verwacht!';
$string['stagesize'] = 'Frame- / venstergrootte';
$string['stagesize_help'] = '<p>Deze twee instellingen bepalen hoe groot het venster zal zijn waarin het leerobject getoond wordt.</p>';
$string['started'] = 'Gestart op';
$string['status'] = 'Status';
$string['statusbar'] = 'Toon statusbalk';
$string['student_response'] = 'Antwoord';
$string['subplugintype_scormreport'] = 'Rapport';
$string['subplugintype_scormreport_plural'] = 'Rapporten';
$string['suspended'] = 'Onderbroken';
$string['syntax'] = 'Syntaxisfout';
$string['tag_error'] = 'Onbekende tag ({$a->tag}) met deze inhoud: {$a->value}';
$string['time'] = 'Tijd';
$string['title'] = 'Titel';
$string['toc'] = 'Inhoudsopgave';
$string['toolbar'] = 'Toon knoppenbalk';
$string['too_many_attributes'] = 'Tag {$a->tag} heeft te veel attributen';
$string['too_many_children'] = 'Tag {$a->tag} heeft teveel children';
$string['totaltime'] = 'Totale tijd';
$string['trackcorrectcount'] = 'Juist aantal';
$string['trackcorrectcount_help'] = 'Aantal juiste resultaten voor de vraag';
$string['trackid'] = 'ID';
$string['trackid_help'] = 'Dit is de identificatie, ingesteld door je SCORM-pakket, voor deze vraag. De SCORM-specificatie staat niet toe om de volledige vraagtekst hier te gebruiken.';
$string['trackingloose'] = 'WAARSCHUWING: de gegevens voor opvolging van dit SCORM/AICC-pakket zullen verloren gaan';
$string['tracklatency'] = 'Vertraging';
$string['tracklatency_help'] = 'De tijd die verlopen is tussen het beschikbaar maken <br />van de interactie voor de leerling en <br />het moment van het eerste antwoord.';
$string['trackpattern'] = 'Patroon';
$string['trackpattern_help'] = 'Dit is wat een juist antwoord op deze vraag zou zijn. Dit toont het antwoord van de leerling niet.';
$string['trackresponse'] = 'Antwoord';
$string['trackresponse_help'] = 'Dit is het antwoord dat de leerling gaf op deze vraag';
$string['trackresult'] = 'Resultaat';
$string['trackresult_help'] = 'Resultaat gebaseerd op het antwoord van de leerling <br /> en het juiste resultaat';
$string['trackscoremax'] = 'Maximale score';
$string['trackscoremax_help'] = 'Maximale waarde in het bereik van de ruwe score';
$string['trackscoremin'] = 'Minimale score';
$string['trackscoremin_help'] = 'Minimumwaarde in het bereik van de ruwe score';
$string['trackscoreraw'] = 'Ruwe score';
$string['trackscoreraw_help'] = 'Getal dat de performantie van de leerling weergeeft<br />relatief tot het bereik aangegeven door de minimum- en maximumwaarde';
$string['tracksuspenddata'] = 'Pauzegegevens';
$string['tracksuspenddata_help'] = 'Maakt plaats om gegevens te bewaren en op te vragen <br />tussen twee sessies.';
$string['tracktime'] = 'Tijd';
$string['tracktime_help'] = 'Moment waarop de poging was gestart';
$string['tracktype'] = 'Type';
$string['tracktype_help'] = 'Vraagtype, bijvoorbeeld "meerkeuze" of "kort antwoord".';
$string['trackweight'] = 'Weging';
$string['trackweight_help'] = 'Weging toegekend aan het element';
$string['type'] = 'Type';
$string['typeaiccurl'] = 'Externe AICC URL';
$string['typeexternal'] = 'Extern SCORM manifest';
$string['typelocal'] = 'Geüpload pakket';
$string['typelocalsync'] = 'Gedownload pakket';
$string['undercontent'] = 'Onder inhoud';
$string['unziperror'] = 'Er is een fout opgetreden bij het uitpakken van het pakket';
$string['updatefreq'] = 'Frequentie automatisch updaten';
$string['updatefreqdesc'] = 'Dze instelling bepaalt de standaard auto-updatefrequentie van een activiteit';
$string['updatefreq_error'] = 'Automatisch aanpassen kan enkel ingeschakeld worden als het pakketbestand extern gehost wordt.';
$string['updatefreq_help'] = 'Hiermee kan een extern pakket automatisch gedownload en geüpdated worden.';
$string['validateascorm'] = 'Valideer een SCORM-pakket';
$string['validation'] = 'Bevestigingsresultaat';
$string['validationtype'] = 'Deze instelling maakt dat de DOMXML-bibliotheek gebruikt wordt voor de validatie van het SCORM MAnifest. Als je twijfelt laat dan de geselecteerde keuze staan.';
$string['value'] = 'Waarde';
$string['versionwarning'] = 'De versie van het Manifest is ouder dan 1.3, waarschuwing bij tag {$a->tag}';
$string['viewallreports'] = 'Bekijk de rapporten voor {$a} pogingen';
$string['viewalluserreports'] = 'Bekijk de rapporten voor {$a} gebruikers';
$string['whatgrade'] = 'Te beoordelen pogingen';
$string['whatgradedesc'] = 'Of de hoogste, gemiddelde, eerste of laatste volledige poging in de cijferlijst bewaard wordt wanneer meerdere pogingen toegestaan zijn.';
$string['whatgrade_help'] = 'Wanneer je meerdere pogingen toelaat, kun je via deze instelling specifiëren of de hoogste score, de gemiddelde score, of die van de eerste of laatste voltooide poging in de cijferlijst opgenomen zal worden. Met de laatste voltooide poging worden geen pogingen die opgenomen die de "niet geslaagd"-status hebben.

Behandeling van meerdere pogingen

* De optie om een nieuwe poging op te starten, gebeurt via een aankruisvakje dat zich boven de Enter knop op de inhoudsstructuurpagina bevindt; zorg er dus voor dat toegang tot die pagina beschikbaar is indien je meer dan een poging wil toestaan.
* Sommige scorm pakketten gaan intelligent om met nieuwe pogingen, vele andere niet. Dit betekent dat, wanneer de gebruiker een bestaande poging heropent en de scorm content  niet over een interne logica beschikt om te beletten dat ze wordt overschreven, de eerdere poging overschreven kan worden zelfs al was ze \'volledig\' of \'voorbij\'.
* De instellingen "Forceer voltooiing", "Forceer nieuwe poging" en "Vergrendel na laatste poging" bieden verdere mogelijkheden tot management van meerdere pogingen.';
$string['width'] = 'Breedte';
$string['window'] = 'Frame/venster';
$string['youmustselectastatus'] = 'Je moet een vereiste status selecteren';
