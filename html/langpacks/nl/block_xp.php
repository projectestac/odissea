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
 * Strings for component 'block_xp', language 'nl', version '4.1'.
 *
 * @package     block_xp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acties';
$string['activityoresourceis'] = 'De activiteit of bron is {$a}';
$string['addacondition'] = 'Voeg een conditie toe';
$string['addarule'] = 'Voeg een regel toe';
$string['addinstructions'] = 'Voeg meer informatie toe';
$string['additionalresources'] = 'Extra bronnen';
$string['addlevel'] = 'Level toevoegen';
$string['addoninstallationerror'] = 'We detecteren een probleem met de add-on (local_xp), deze lijkt niet correct te zijn geïnstalleerd. Een beheerder moet de installatie voltooien.';
$string['addonnotactivated'] = 'De add-on is niet geactiveerd.';
$string['addrulesformhelp'] = 'De laatste kolom bepaalt de hoeveelheid ervaringspunten wanneer er voldaan is aan een criterium.';
$string['admindefaultrulesintro'] = 'De volgende regels worden standaard gebruikt voor cursussen waarin het blok is toegevoegd.';
$string['admindefaultsettingsintro'] = 'De onderstaande instellingen worden standaard gebruikt wanneer het blok nieuw wordt toegevoegd aan een cursus. Sommige instellingen kunnen worden vergrendeld, in welk geval hun waarde strikt wordt afgedwongen in alle gevallen van de plug-in.';
$string['admindefaultvisualsintro'] = 'Het volgende wordt standaard gebruikt wanneer het blok nieuw wordt toegevoegd aan een cursus.';
$string['adminscanearnxp'] = 'Beheerder kan punten verdienen';
$string['adminscanearnxp_desc'] = 'Beheerders worden standaard niet opgenomen in de groep gebruikers die punten kunnen verdienen. Dit komt omdat beheerders altijd de rechten hebben _block/xp:earnxp_, waardoor ze overal doorlopend punten kunnen verzamelen. U kunt deze instelling gebruiken om beheerders ook punten te laten verdienen.';
$string['anonymity'] = 'Anonimiteit';
$string['anonymity_help'] = 'Deze instelling bepaalt of deelnemers elkaars naam en avatar kunnen zien.';
$string['apply'] = 'Pas toe';
$string['awardaxpwhen'] = '<strong>{$a}</strong> punten worden verdiend wanneer:';
$string['badgeaward'] = 'Badge om uit te reiken';
$string['badgeawarddesc'] = 'Een badge om toe te kennen wanneer de gebruiker het level bereikt.';
$string['basepoints'] = 'Basis punten';
$string['basepointslineardesc'] = 'De minimale stap tussen elk level.';
$string['basepointsrelativedesc'] = 'Het aantal punt om mee te beginnen.';
$string['basexp'] = 'Algoritmebasis';
$string['blockappearance'] = 'Uiterlijk van het blok';
$string['blockappearancemovedtopluginsettings'] = 'De instellingen voor het uiterlijk van het blok zijn verplaatst naar de instellingenpagina van de plug-in.';
$string['cachedef_filters'] = 'Level filters';
$string['cachedef_ruleevent_eventslist'] = 'Lijst van gebeurtenissen';
$string['cannotbesetindefaults'] = 'Deze kan niet op standaardwaarde worden gezet.';
$string['cannotearnpoints'] = 'Kan geen punten verdienen.';
$string['cannotshowblockconfig'] = 'Normaal gesproken zou ik hier de weergave-instellingen weergeven, maar ik kon je blok niet vinden. Om het uiterlijk van het blok te wijzigen, ga terug [hier]({$a}) (of waar je het blok hebt toegevoegd), schakel de bewerkingsmodus in en volg de optie "Configureren" in de vervolgkeuzelijst van het blok. Als je het blok niet kunt vinden, voeg het dan opnieuw toe aan je cursus.';
$string['cannotshowblockconfigsys'] = 'Normaal gesproken zou ik hier de weergave-instellingen weergeven, maar ik kon je blok niet vinden. Het kan ontbreken op de [frontpage]({$a->fp}) en het [default dashboard]({$a->mysys}) van uw gebruikers, of in beide aanwezig zijn. Om de instellingen vanaf hier te bewerken, zorg er dan voor dat deze slechts in één van beide wordt weergegeven.';
$string['changelevelformhelp'] = 'Als je het aantal levels aanpast, zullen de standaard level badges tijdelijk uitgeschakeld worden om er voor te zorgen dat er geen levels zonder badges ontstaan. Als je het aantal levels wilt aan passen, ga dan naar de pagina \'Visuals (Visueel)\' om de custom badges weer aan te zetten na het op slaan van dit formulier.';
$string['cheatguard'] = 'Valsspeelbeveiliging';
$string['clicktoselectcm'] = 'Klik om een activiteit of bron te selecteren';
$string['cmselector'] = 'Selector voor cursusmodules';
$string['coefxp'] = 'Algoritmecoëfficient';
$string['colon'] = '{$a->a}: {$a->b}';
$string['compatibilitycheck'] = 'Controle van de compatibiliteit';
$string['configblockrankingsnapshot'] = 'Momentopname van scorebord weergeven';
$string['configblockrankingsnapshot_help'] = 'De momentopname van het scorebord geeft de rang van de gebruiker weer. Het zal ook proberen de twee mensen om de gebruiker heen weer te geven. Deze functie vereist dat het scorebord is ingeschakeld en dat de rangen worden weergegeven.';
$string['configdescription'] = 'Introductie';
$string['configdescription_help'] = 'Een kort introductiebericht dat in het blok wordt weergegeven. Studenten hebben de mogelijkheid om het bericht te negeren, in welk geval ze het niet meer zien.';
$string['configheader'] = 'Instellingen';
$string['configrecentactivity'] = 'Laat recente beloningen zien';
$string['configrecentactivity_help'] = 'Indien ingeschakeld, toont het blok een korte lijst met recente gebeurtenissen die de student met punten hebben beloond.';
$string['configtitle'] = 'Titel';
$string['configtitle_help'] = 'De titel van het blok';
$string['congratulationsyouleveledup'] = 'Gefeliciteerd!';
$string['coolthanks'] = 'Cool, bedankt!';
$string['courselog'] = 'Cursus log';
$string['coursereport'] = 'Cursusverslag';
$string['courserules'] = 'Cursusregels';
$string['courseselectedcolon'] = 'Geselecteerde cursus';
$string['coursesettings'] = 'Cursusinstellingen';
$string['coursevisuals'] = 'Cursus visueel';
$string['currencysign'] = 'Punten symbool';
$string['currencysign_help'] = 'Met deze instelling kun je de betekenis van de punten wijzigen. Het wordt weergegeven naast het aantal punten dat elke gebruiker heeft als vervanging voor de verwijzing naar _ervaringspunten_. Kies een van de meegeleverde symbolen of upload je eigen symbolen!';
$string['currencysignxp'] = 'XP (Ervaringspunten)';
$string['customizelevels'] = 'Pas de levels aan';
$string['dangerzone'] = 'Gevarenzone';
$string['defaultlevels'] = 'Standaard levels';
$string['defaultrules'] = 'Standaardregels';
$string['defaultrulesformhelp'] = 'Dit zijn de standaard regels van deze plugin. Ze geven automatisch exerpience punten en negeren wat onbelangrijke gebeurtenissen. Regels die je zelf aanmaakt overstijgen deze standaard regels.';
$string['defaultsettings'] = 'Standaard instellingen';
$string['defaultvisuals'] = 'Standaard visueel';
$string['deletecondition'] = 'Verwijder conditie';
$string['deleterule'] = 'Verwijder regel';
$string['description'] = 'Beschrijving';
$string['difference'] = 'Diff.';
$string['difficulty'] = 'Punt reken methode';
$string['difficultyflat'] = 'Gelijk';
$string['difficultyflatdesc'] = 'Alle niveaus vereisen hetzelfde aantal punten om te behalen.';
$string['difficultylinear'] = 'Toenemend';
$string['difficultylineardesc'] = 'Niveaus duren geleidelijk langer om te bereiken.';
$string['difficultylinearincrdesc'] = 'Het aantal punten dat wordt gebruikt voor de progressieve moeilijkheidsgraad.';
$string['difficultypointincrease'] = 'Punten verhogen';
$string['difficultyrelative'] = 'Sneeuwbal effect';
$string['difficultyrelativedesc'] = 'Levels worden exponentieel moeilijker te bereiken.';
$string['difficultyrelativeincrdesc'] = 'Het percentage van punten dat moet worden verhoogd ten opzichte van het vorige level.';
$string['discoverlevelupplus'] = 'Ontdek Level Up XP+';
$string['dismissnotice'] = 'Sluit deze melding';
$string['displayeveryone'] = 'Laat iedereen zien';
$string['displaynneighbours'] = 'Toon {$a}  buren';
$string['displayoneneigbour'] = 'Toon één buur';
$string['displayparticipantsidentity'] = 'Toon deelnemers identiteit';
$string['displayrank'] = 'Toon rang';
$string['displayrelativerank'] = 'Toon een relatieve rang';
$string['documentation'] = 'Documentatie';
$string['drops'] = 'Drops';
$string['drops_help'] = 'In videogames kunnen sommige personages items of ervaringspunten op de grond _laten vallen_ die de speler kan oprapen. Deze items en punten worden gewoonlijk drops genoemd.

In Level Up XP zijn drops shortcodes (bijv. \'[xpdrop abcdef]\') die een instructeur in reguliere Moodle-content kan plaatsen. Wanneer een gebruiker deze drops tegenkomt, worden deze drops -opgepakt- en wordt er een bepaald aantal punten toegekend.

Op dit moment zijn drops onzichtbaar voor de gebruiker en worden passief punten toegekend wanneer ze voor het eerst worden aangetroffen.

Drops kunnen worden gebruikt om op een slimme manier punten toe te kennen wanneer een bepaald type inhoud door een student wordt bekeken. Hier zijn enkele ideeën:

-Plaats een drop in de feedback van een quiz (test) die alleen zichtbaar is bij perfecte scores;
- Plaats een drop diep verstopt in de inhoud om het bekijken te belonen;
- Plaats een drop in een interessante forumdiscussie;
- Plaats een drop op een moeilijk bereikbare bladzijde in een lesmodule.

[Meer info] (https://docs.levelup.plus/xp/docs/how-to/use-drops?ref=blockxp_help)';
$string['dropsintro'] = 'Drops zijn codefragmenten die rechtstreeks in inhoud worden geplaatst en die punten toekennen wanneer ze door een gebruiker worden aangetroffen.';
$string['editingdefaultsettingsinwholesitemodenotice'] = '**Let op!** U wijzigt momenteel de actieve instellingen niet, maar de standaardwaarden. Aangezien Level Up XP voor de hele site wordt gebruikt, is de kans groot dat u de instellingen voor de hele site wijzigt. [Navigeer here] ({$a->url}) om deze instellingen te wijzigen, of volg de link "Instellingen" van het XP-blok.';
$string['editinstructions'] = 'Bewerk informatie';
$string['enablecheatguard'] = 'Beveilig valsspelen';
$string['enablecheatguard_help'] = 'De bewaker valsspelen biedt een eenvoudig, goedkoop mechanisme om te voorkomen dat studenten het systeem misbruiken met behulp van voor de hand liggende technieken, zoals het eindeloos verversen van dezelfde pagina of het steeds opnieuw herhalen van dezelfde actie.';
$string['enableinfos'] = 'Activeer informatiepagina';
$string['enableinfos_help'] = 'Wanneer dit op "Nee" staat, kunnen studenten de informatiepagina niet benaderen.';
$string['enableladder'] = 'Activeer de ladder';
$string['enableladder_help'] = 'Wanneer dit op "Nee" staat, kunnen studenten niet de ladder benaderen.';
$string['enablelevelupnotif'] = 'Activeer level up notificatie';
$string['enablelevelupnotif_help'] = 'Wanneer dit op "Ja" staat, zullen studenten een popup krijgen met een felicitatie wanneer ze een level omhoog gaan.';
$string['enablelogging'] = 'Activeer logs';
$string['enablexpgain'] = 'Activeer XP verkrijgen';
$string['enablexpgain_help'] = 'Wanner dit op "Nee" staat, zal niemand in de cursus experience punten krijgen. Dit is nuttig om het aantal experience punten te bevriezen, of om het te activeren op gegeven tijdstip.

Dit kan iets preciezer gecontroleerd worden door te configureren via \'blockxp:earnxp\'';
$string['entersearchterm'] = 'Voer een zoekterm in';
$string['errorcontextcoursemismatchforwholesite'] = 'De URL van deze <em>Level Up XP</em> pagina komt niet overeen met de huidige plug-inconfiguratie. Uw huidige configuratie verklaart dat <em>Level Up XP</em> wordt gebruikt \'Voor de hele site\', terwijl deze pagina verwachtte dat het \'Per cursus\' werd gebruikt. Klik hier om naar de juiste pagina te navigeren. Zoek naar de beheerinstelling \'block_xp_context\' als u uw configuratie wilt wijzigen.';
$string['errorcontextcoursemismatchpercourse'] = 'De URL van deze <em>Level Up XP</em> pagina komt niet overeen met de huidige plug-inconfiguratie. Uw huidige configuratie verklaart dat <em>Level Up XP</em> wordt gebruikt \'Per cursus\', maar deze pagina verwachtte dat het werd gebruikt \'Voor de hele site\'. Het komt hoogstwaarschijnlijk van een <em>blok</em> dat aan het dashboard of de startpagina is toegevoegd terwijl het in een andere configuratie stond. U moet het blok van de laatstgenoemde pagina\'s verwijderen en alleen het blok gebruiken binnen individuele cursussen.';
$string['errorformvalues'] = 'Er zijn wat problemen in de formulier waarden, fix dit alsjeblieft.';
$string['errorlevelsincorrect'] = 'Het minimale aantal levels is 2';
$string['errornotalllevelsbadgesprovided'] = 'Niet alle level badges zijn aangeleverd. De volgende missen:{$a}';
$string['errorunknownevent'] = 'Fout: onbekende gebeurtenis';
$string['errorunknownmodule'] = 'Fout: onbekende module';
$string['errorxprequiredlowerthanpreviouslevel'] = 'De XP nodig is lager of gelijk aan die van het vorige level.';
$string['event_user_leveledup'] = 'Gebruiker is een level omhoog gegaan';
$string['eventis'] = 'De gebeurtenis is {$a}';
$string['eventname'] = 'Gebeurtenis naam';
$string['eventproperty'] = 'Gebeurtenis eigenschap';
$string['eventsrules'] = 'Gebeurtenis regels';
$string['eventsrules_help'] = 'Deze plug-in maakt gebruik van gebeurtenissen om punten toe te kennen aan acties die door de studenten worden uitgevoerd.
U kunt het onderstaande formulier gebruiken om uw eigen regels toe te voegen en de standaardregels aan te passen.

Het is raadzaam om de _Log_ pagina van de plug-in te controleren om te identificeren welke gebeurtenissen worden geactiveerd wanneer studenten acties uitvoeren in de cursus.

Extra bronnen:

- [Hoe worden ervaringspunten berekend?](https://docs.levelup.plus/xp/docs/getting-started/points-calculation?ref=blockxp_help)
- [Problemen oplossen met regels](https://docs.levelup.plus/xp/docs/troubleshooting/event-rule-not-working?ref=blockxp_help)';
$string['eventsrulesintro'] = 'Observeren van acties en punten toekennen aan studenten terwijl ze deze uitvoeren.';
$string['eventtime'] = 'Gebeurtenis tijd';
$string['filterbyuser'] = 'Filteren op gebruiker';
$string['filtermodules'] = 'Filter modules';
$string['for1day'] = 'Voor 1 dag';
$string['for1month'] = 'Voor een maand';
$string['for1week'] = 'Voor een week';
$string['for3days'] = 'Voor 3 dagen';
$string['forever'] = 'Voor altijd';
$string['forthewholesite'] = 'Voor de gehele site';
$string['give'] = 'geef';
$string['gotofullladder'] = 'Ga naar volledige ranglijst';
$string['graderules'] = 'Beoordelingsregels';
$string['graderules_help'] = 'Studenten zullen zoveel punten verdienen als hun cijfer.
Een cijfer van 5/10 en een cijfer van 5/100 zullen beide de student 5 punten opleveren.
Wanneer het cijfer van een student meerdere keren verandert, verdienen ze punten gelijk aan het hoogste cijfer dat ze hebben ontvangen.
Er worden nooit punten afgetrokken van studenten en negatieve cijfers worden genegeerd.

Voorbeeld: Alice dient een opdracht in en krijgt het cijfer 40/100. In _Level Up XP_ ontvangt Alice 40 punten voor haar cijfer.
Alice probeert haar opdracht opnieuw, maar dit keer wordt haar cijfer verlaagd naar 25/100. De punten van Alice in _Level Up XP_ veranderen niet.
Bij haar laatste poging haalt Alice 60/100, ze verdient 20 extra punten in _Level Up XP_, haar totaal aantal verdiende punten is 60.

[Meer informatie in de _Level Up XP_ documentatie](https://docs.levelup.plus/xp/docs/how-to/grade-based-rewards?ref=blockxp_help)';
$string['graderulesintro'] = 'De beoordelingsregels stellen gebruikers in staat punten te ontvangen die gelijk zijn aan de behaalde cijfers.';
$string['grid'] = 'Raster';
$string['hasbadgeaward'] = 'Badge om toe te kennen ingesteld';
$string['hasdescription'] = 'Beschrijving ingesteld';
$string['hasname'] = 'Naam ingesteld';
$string['hasnobadgeaward'] = 'Geen badge om toe te kennen';
$string['hasnodescription'] = 'Geen beschrijving';
$string['hasnoname'] = 'Geen naam';
$string['hasnopopupmessage'] = 'Geen popup-bericht';
$string['haspopupmessage'] = 'Popup-bericht ingesteld';
$string['hideparticipantsidentity'] = 'De identiteit van de deelnemers verbergen';
$string['hiderank'] = 'Rang verbergen';
$string['importpoints'] = 'Punten importeren';
$string['importpoints_help'] = 'De import kan worden gebruikt om de punten van studenten te _verhogen_, of om ze te _overschrijven_ met de gegeven waarde.

Let op dat de import __niet__ dezelfde indeling gebruikt als het geëxporteerde rapport. De vereiste indeling wordt beschreven in de [documentatie](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help), waar een [voorbeeldbestand](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help#sample-file) beschikbaar is.';
$string['importpointsintro'] = 'Importeer punten uit een CSV-bestand en stuur optioneel een bericht naar de ontvanger.';
$string['incourses'] = 'In cursussen';
$string['ineffective'] = 'Ineffectief';
$string['infos'] = 'Informatie';
$string['installed'] = 'Geïnstalleerd';
$string['instructions'] = 'Meer informatie';
$string['invalidxp'] = 'Ongeldige XP waarde';
$string['keeplogs'] = 'Behoud logs';
$string['ladder'] = 'Ladder';
$string['ladderadditionalcols'] = 'Extra kolommen';
$string['ladderadditionalcols_help'] = 'Deze instelling bepaalt welke extra kolommen worden weergegeven op het scorebord. Houd de CTRL- of CMD-toets ingedrukt terwijl u klikt om meer dan één kolom te selecteren of om een geselecteerde kolom af te deselecteren.';
$string['ladderempty'] = 'Het scorebord is momenteel leeg. Kom later terug!';
$string['learnmore'] = 'Lees meer';
$string['level'] = 'Level';
$string['levelbadges'] = 'Level badges';
$string['levelbadges_help'] = 'Upload afbeeldingen om het uiterlijk van individuele niveaus te vervangen.

De bestanden moeten worden genoemd als [niveau].[bestandsextensie], bijvoorbeeld 1.png, 2.jpg, enz.

We raden afbeeldingen aan van 100x100 pixels, in een van de volgende typen: GIF, JPEG, PNG en SVG.';
$string['levelbadgesformhelp'] = 'Benoem de bestanden [level].[file extension], bijvoorbeeld: 1.png, 2.png, etc... De aanbevolen resolutie is: 100x100.';
$string['levelcount'] = 'Aantal levels';
$string['leveldesc'] = 'Level beschrijving';
$string['leveldesc_help'] = 'Een korte beschrijving van het niveau, dit wordt weergegeven op de informatiepagina naast het niveau zelf. U kunt dit gebruiken om een beloning voor leerlingen te beschrijven die het niveau behalen, instructies toe te voegen over hoe ze naar dit niveau kunnen werken, het niveau op een speelse manier te beschrijven (bijv. _Alleen de dapperste zielen hebben dit niveau weten te bereiken_), enz.';
$string['leveldescriptiondesc'] = 'Een korte beschrijving van het niveau, weergegeven aan studenten op de informatiepagina.';
$string['levelname'] = 'Naam van het level';
$string['levelname_help'] = 'Een korte naam om weer te geven in plaats van de standaard _Niveau #1_, _Niveau #2_, enz. die soms wordt weergegeven. Als u namen geeft aan sommige niveaus, raden we aan om aan alle niveaus een naam te geven!';
$string['levelpointslength'] = 'Lengte';
$string['levelpointsstart'] = 'Start';
$string['levels'] = 'Levels';
$string['levelsappearance'] = 'Uiterlijk van levels';
$string['levelssaved'] = 'De levels zijn opgeslagen.';
$string['levelswillbereset'] = 'Waarschuwing! Dit formulier opslaan herberekend de levels van iedereen!';
$string['levelup'] = 'Level omhoog!';
$string['levelupoptionsunavailableforlevelone'] = 'Opties met betrekking tot het behalen van het niveau zijn niet beschikbaar voor het eerste niveau.';
$string['levelupplus'] = 'Level Up XP+';
$string['levelx'] = 'Level #{$a}';
$string['likenotice'] = '<strong>Bevalt deze pluging?</strong> Neem alsjeblieft een momentje om <a href="{$a->moodleorg}" target="_blank"> deze plugin toe te voegen aan je favorieten op Moodle.org</a> of <a href="{$a->github}" target="_blank">star het op Github</a>';
$string['limitparticipants'] = 'Deelnemers beperken';
$string['limitparticipants_help'] = 'Deze instelling controleert wie er wordt weergegeven in het scorebord. Buren zijn de deelnemers die boven en onder de huidige gebruiker gerangschikt zijn. Bijvoorbeeld, bij het kiezen van \'Toon 2 buren\', worden alleen de twee deelnemers weergegeven die direct hoger en lager gerangschikt zijn dan de huidige gebruiker.';
$string['list'] = 'Lijst';
$string['logging'] = 'Loggen';
$string['manually'] = 'Handmatig';
$string['maxactionspertime'] = 'Maximale acties in tijd frame.';
$string['maxactionspertime_help'] = 'Het maximale aantal acties die mee tellen voor XP binnen de opgegeven tijd. Alle acties daarbuiten worden genegeerd.';
$string['maxlevelexcl'] = 'max level!';
$string['menu'] = 'Menu';
$string['missing'] = 'Ontbrekend';
$string['movecondition'] = 'Verplaats conditie';
$string['moverule'] = 'Verplaats regel';
$string['name'] = 'Naam';
$string['navbardisplay'] = 'Weergeven in navigatiebalk';
$string['navbardisplay_desc'] = 'Wanneer ingeschakeld, wordt het niveau van de gebruiker weergegeven in de bovenste navigatiebalk. Als de plug-in "Per cursussen" wordt gebruikt, wordt dit alleen weergegeven in cursussen. Houd er rekening mee dat deze functionaliteit sterk afhankelijk is van het thema en mogelijk niet goed werkt, of helemaal niet, met thema\'s van derden. [Meer informatie](https://docs.levelup.plus/xp/docs/navbar-display)';
$string['navdrops'] = 'Drops';
$string['naveventrules'] = 'Gebeurtenisregels';
$string['navgraderules'] = 'Beoordelingsregels';
$string['navimport'] = 'Importeren';
$string['navinfos'] = 'Informatie';
$string['navladder'] = 'Ladder';
$string['navlevels'] = 'Levels';
$string['navlevelssetup'] = 'Instellingen';
$string['navlog'] = 'Log';
$string['navpoints'] = 'Punten';
$string['navpromo'] = 'XP+';
$string['navreport'] = 'Verslag';
$string['navrules'] = 'Regels';
$string['navsettings'] = 'Instellingen';
$string['navvisuals'] = 'Visueel';
$string['nextlevelin'] = 'volgend level in';
$string['nodescription'] = 'Geen beschrijving';
$string['noissuesidentified'] = 'een problemen geïdentificeerd';
$string['nologsrecordedyet'] = 'Er zijn nog geen logs opgenomen.';
$string['noname'] = 'Geen naam';
$string['notecompatibilityissues'] = 'Let op de compatibiliteitsproblemen die hieronder worden geïdentificeerd:';
$string['notesomesettingslocked'] = 'Merk op dat sommige instellingen mogelijk niet bewerkbaar zijn als ze zijn vergrendeld door een beheerder.';
$string['numberoflevels'] = 'Aantal levels';
$string['occasionally'] = 'Af en toe';
$string['outofsync'] = 'Niet gesynchroniseerd';
$string['outofsyncexcessive'] = 'Overmatig uit synchronisatie';
$string['outofsyncexcessiveinfo'] = 'XP+ is aanzienlijk ouder dan XP, wat kan leiden tot onverwachte problemen. Om storingen te voorkomen, kan XP+ zichzelf in de toekomst automatisch uitschakelen.';
$string['outofsyncinfo'] = 'De XP-plug-ins zijn niet compatibel met elkaar, wat kan leiden tot onverwachte problemen.';
$string['participant'] = 'Deelnemer';
$string['participants'] = 'Deelnemers';
$string['participatetolevelup'] = 'Neem deel aan de cursus om experience points te krijgen en levels omhoog te gaan!';
$string['perpagecolon'] = 'Per pagina:';
$string['pickaconditiontype'] = 'Kies een conditie type';
$string['pluginavailabilityxpdesc'] = 'Deze plug-in stelt instructeurs in staat om de toegang tot activiteiten te beperken op basis van de niveaus van studenten.';
$string['pluginenrolxpdesc'] = 'Deze plug-in maakt automatische inschrijving in cursussen mogelijk op basis van het niveau van een student in een andere cursus.';
$string['pluginname'] = 'Level omhoog!';
$string['pluginshortcodesdesc'] = 'Deze plug-in stelt instructeurs in staat om hun materiaal aan te passen door XP-gerelateerde elementen (punten, niveau, scorebord, ...) op te nemen in de inhoud, evenals het verbergen of tonen van inhoud op basis van het niveau van een student.';
$string['pluginsoutofsync'] = '__De plugins zijn niet gesynchroniseerd!__

Dit betekent dat je _Level Up XP_ hebt geüpgraded maar niet _Level Up XP+_. Hoewel we ons best doen om eventuele problemen te voorkomen, kunnen sommige functies mogelijk niet meer goed werken, inclusief in _Level Up XP_ zelf. We raden aan om _Level Up XP+_ te upgraden naar de nieuwste versie. [Lees meer]({$a->url})';
$string['pluginxmaybeincompatible'] = 'Deze versie van {$a->name} ({$a->component}) is mogelijk niet compatibel met Moodle {$a->version}.';
$string['pointsintimelinker'] = 'per';
$string['pointsperlevel'] = 'Punten per level';
$string['pointsrequired'] = 'Vereiste punten';
$string['popupnotificationmessage'] = 'Popup notificatie';
$string['popupnotificationmessagedesc'] = 'Optioneel bericht dat wordt weergegeven in de pop-upmelding waarmee de gebruiker wordt gefeliciteerd met het behalen van het level.';
$string['potentialmoodleincompatibility'] = 'Mogelijke Moodle-incompatibiliteit';
$string['privacy:metadata:log'] = 'Slaat een log op van gebeurtenissen';
$string['privacy:metadata:log:eventname'] = 'De naam van de gebeurtenis';
$string['privacy:metadata:log:time'] = 'De datum waarop het gebeurde';
$string['privacy:metadata:log:userid'] = 'De deelnemer die de punten heeft verdiend';
$string['privacy:metadata:log:xp'] = 'De punten toegekend voor de gebeurtenis';
$string['privacy:metadata:prefintro'] = 'Registreert of de gebruiker de introductie van de blok heeft weggeklikt';
$string['privacy:metadata:prefladderpagesize'] = 'De voorkeurspaginaformaat van de gebruiker bij het bekijken van het klassement';
$string['privacy:metadata:preflevelup'] = 'Registreert of de gebruiker de melding van het bereiken van het niveau moet zien';
$string['privacy:metadata:prefnotices'] = 'Registreert of de gebruiker de ondersteuningsmelding heeft gesloten';
$string['privacy:metadata:prefseenpromo'] = 'Registreert wanneer de gebruiker de promotiepagina heeft bekeken';
$string['privacy:metadata:xp'] = 'Slaat de punten en het niveau van gebruikers op';
$string['privacy:metadata:xp:lvl'] = 'Het level van de gebruiker';
$string['privacy:metadata:xp:userid'] = 'De deelnemer';
$string['privacy:metadata:xp:xp'] = 'De punten van de deelnemer';
$string['privacy:path:addon'] = 'Add-on';
$string['privacy:path:level'] = 'Level';
$string['privacy:path:logs'] = 'Logs';
$string['progress'] = 'Vooruitgang';
$string['progressbar'] = 'Voortgangsbalk';
$string['promocheatguard'] = 'Deze cheat guard is niet ontworpen om lange tijdsperiodes te bestrijken. Overweeg om te upgraden naar <em>Level Up XP+</em> om langere tijdsspannes en andere functies te ontgrendelen. <a href="{$a->url}">Lees hier meer</a>.';
$string['promocontactintro'] = 'Neem contact met ons op voor meer informatie. We bijten niet en we antwoorden snel!';
$string['promocontactus'] = 'Neem contact op';
$string['promoemailusat'] = 'E-mail ons op _levelup@branchup.tech_.';
$string['promoerrorsendingemail'] = 'Oeps! We konden het bericht niet verzenden... stuur ons alstublieft rechtstreeks een e-mail naar: {$a}. Bedankt!';
$string['promogetnow'] = 'Neem nu XP+!';
$string['promoifpreferemailusat'] = 'Psst! Als je wilt, e-mail ons dan rechtstreeks op _{$a}_.';
$string['promointro'] = 'Word de gamemeester! Ontgrendel extra functies en breng gamification naar een heel nieuw niveau met Level Up XP+!';
$string['promointroinstalled'] = 'De add-on _Level Up XP+_ is geïnstalleerd op je systeem en al zijn functies zijn ingeschakeld.';
$string['promorulesdidyouknow'] = 'Wist je dat met <em>Level Up XP+</em> studenten punten kunnen ontvangen voor het <em>voltooien van cursussen</em> en <em>activiteiten</em>, of zelfs punten kunnen ontvangen op basis van hun <em>cijfers</em>? <a href="{$a->url}">Ontdek hier meer</a>.';
$string['promoyourmessagewassent'] = 'Bedankt, je bericht is verzonden. We zullen heel binnenkort bij je terugkomen.';
$string['property:action'] = 'Gebeurtenis actie';
$string['property:component'] = 'Gebeurtenis onderdeel';
$string['property:crud'] = 'Gebeurtenis CRUD';
$string['property:eventname'] = 'Gebeurtenis naam';
$string['property:target'] = 'Gebeurtenis doel';
$string['questreleasenotice'] = '🎉 We zijn verheugd om onze **nieuwe gamification-plugin** genaamd **Level Up Quest** 🥳 aan te kondigen. Verander je cursussen in **spannende avonturen**, vol met **strategieën voor herbetrokkenheid** en **vieringen** 🤯! Bekijk de [website van Quest]({$a->questurl}) en ons [lanceringsbericht hier]({$a->questblogurl}). 👈';
$string['quickeditpoints'] = 'Snel punten bewerken';
$string['rank'] = 'Rang';
$string['ranking'] = 'Ranking';
$string['ranking_help'] = 'De rang is de absolute positie van de huidige gebruiker in de ranglijst. De relatieve rang is het verschil in ervaringspunten tussen een gebruiker en zijn buren.';
$string['reallydeleteuserstate'] = 'Een gebruiker verwijderen is alleen nuttig om ze uit de ranglijst te verwijderen. Voor alle andere redenen raden we aan om in plaats daarvan hun punten op 0 in te stellen. Let op dat het verwijderen van hen geen invloed heeft op hun vermogen om in de toekomst punten te verdienen.

Belangrijk is dat wanneer je _Level Up XP_ voor de hele site gebruikt, het verwijderen van hen ervoor zorgt dat ze verdwijnen uit het rapport, waardoor je ze geen punten meer kunt toewijzen. Als je echter _Level Up XP_ per cursus gebruikt, kan de student nog steeds in het rapport verschijnen als ze zijn ingeschreven voor de cursus.

Wil je echt de punten van deze gebruiker verwijderen?';
$string['reallydeleteuserstateandlogs'] = 'Door een gebruiker te verwijderen, worden ze uit de ranglijst verwijderd en worden al hun bijbehorende logs verwijderd.

Het verwijderen van logs kan een gebruiker in staat stellen om punten opnieuw te verdienen voor eerdere acties. Als je alleen hun punten wilt resetten, raden we aan om in plaats daarvan hun punten op 0 in te stellen. Let op dat het verwijderen van een gebruiker geen invloed heeft op hun vermogen om in de toekomst punten te verdienen.

Belangrijk is dat wanneer je _Level Up XP_ voor de hele site gebruikt, het verwijderen van hen ervoor zorgt dat ze verdwijnen uit het rapport, waardoor je ze geen punten meer kunt toewijzen. Als je echter _Level Up XP_ per cursus gebruikt, kan de student nog steeds in het rapport verschijnen als ze zijn ingeschreven voor de cursus.

Wil je echt de punten en logs van deze gebruiker verwijderen?';
$string['reallyresetallcoursestodefaults'] = 'Wil je echt alle cursusregels terugzetten naar de standaardregels? Deze actie is niet ongedaan te maken.';
$string['reallyresetcourselevelstodefaults'] = 'Wil je echt de cursusniveaus terugzetten naar de standaardniveaus? Deze actie is niet ongedaan te maken.';
$string['reallyresetcourserulestodefaults'] = 'Wil je echt de cursusregels terugzetten naar de standaardregels? Deze actie is niet ongedaan te maken.';
$string['reallyresetcoursevisualstodefaults'] = 'Wil je echt het uiterlijk van de cursusniveaus terugzetten naar het standaarduiterlijk? Deze actie is niet ongedaan te maken.';
$string['reallyresetdata'] = 'Weet je zeker dat je alle levels en experience points wilt resetten voor iedereen in deze cursus?';
$string['reallyresetgroupdata'] = 'Weet je zeker dat je alle levels en experience points wilt resetten voor iedereen in deze groep?';
$string['reallyreverttopluginsdefaults'] = 'Echt de standaardregels resetten naar de standaardinstellingen die door de plug-in zijn voorgesteld? Deze actie kan niet ongedaan worden gemaakt.';
$string['recentrewards'] = 'Recente beloningen';
$string['recommended'] = 'Aanbevolen';
$string['recommendedplugins'] = 'Aanbevolen plug-ins';
$string['releasenotes'] = 'Release-notities';
$string['remaining'] = 'resterend';
$string['removefilter'] = 'Filter verwijderen';
$string['reportisempty'] = 'Het rapport is leeg, studenten hebben nog geen punten verdiend.';
$string['reportisemptyenrolstudents'] = 'Het rapport is leeg, zijn studenten ingeschreven voor deze cursus?';
$string['requires'] = 'Vereist';
$string['resetallcoursestodefaults'] = 'Alle cursussen terugzetten naar standaardwaarden';
$string['resetallcoursestodefaultsintro'] = 'Klik op de onderstaande knop om alle cursussen terug te zetten naar de bovenstaande standaardwaarden.';
$string['resetcoursedata'] = 'Reset de cursus data';
$string['resetcourserulestodefaults'] = 'Cursusregels terugzetten naar standaardwaarden';
$string['resetgroupdata'] = 'Reset de groep data';
$string['resetlevelstodefaults'] = 'Niveaus terugzetten naar standaardwaarden';
$string['resetvisualstodefaults'] = 'Uiterlijk terugzetten naar standaardwaarden';
$string['resultsfilteredforn'] = 'Resultaten gefilterd voor {$a}.';
$string['reverttopluginsdefaults'] = 'Terugzetten naar de standaardinstellingen van de plug-in';
$string['reverttopluginsdefaultsintro'] = 'Gebruik de onderstaande knop als u de bovenstaande standaardinstellingen wilt terugzetten naar de standaardinstellingen van de plug-in. Dit heeft geen invloed op de regels in bestaande cursussen.';
$string['reward'] = 'Beloning';
$string['rule'] = 'Regel';
$string['rule:contains'] = 'bevat';
$string['rule:eq'] = 'is gelijk aan';
$string['rule:eqs'] = 'is precies gelijk aan';
$string['rule:gt'] = 'is groter dan';
$string['rule:gte'] = 'is groter dan of gelijk aan';
$string['rule:lt'] = 'is kleiner dan';
$string['rule:lte'] = 'is kleiner dan of gelijk aan';
$string['rule:regex'] = 'is gelijk aan de regex';
$string['rulecm'] = 'Activiteit of bron';
$string['rulecm_help'] = 'Deze voorwaarde is vervuld wanneer het evenement plaatsvindt in de gespecificeerde activiteit of bron.';
$string['rulecmdesc'] = 'De activiteit of bron is \'{$a->contextname}\'.';
$string['rulecmdescwithcourse'] = 'De activiteit of bron is: \'{$a->contextname}\' in \'{$a->coursename}\'.';
$string['rulecminfo'] = 'Deze voorwaarde vereist dat de actie plaatsvindt in een specifieke activiteit of bron.';
$string['ruleevent'] = 'Specifieke gebeurtenis';
$string['ruleeventdesc'] = 'De gebeurtenis is {$a->eventname}';
$string['ruleeventinfo'] = 'Kies de actie die gebruikers moeten uitvoeren uit een samengestelde lijst van gebeurtenissen.';
$string['ruleproperty'] = 'Gebeurtenis eigenschap';
$string['rulepropertydesc'] = 'De eigenschap \'{$a->property}\' {$a->compare}\'{$a->value}\'.';
$string['rulepropertyinfo'] = 'Deze voorwaarde is voor gevorderde gebruikers met een technisch begrip van de gebeurtenissen en hun eigenschappen.';
$string['ruleset'] = 'Set van condities';
$string['ruleset:all'] = 'Als voldaan is aan ALLE condities';
$string['ruleset:any'] = 'Als voldaan is aan tenminste één van de condities';
$string['ruleset:none'] = 'Als voldaan is aan GEEN van de condities';
$string['rulesetinfo'] = 'Combineer meerdere voorwaarden tot één.';
$string['rulesformhelp'] = '<p> Deze plugin gebruikt de gebeurtenissen om experience points aan acties gedaan door studenten te koppelen. Je kunt het formulier hier beneden gebruiken om je eigen regels toe te voegen en de standaard regels te bekijken. </p>
<p>It is advised to check the plugin\'s <a href="{$a->log}">log</a> to identify what events are triggered as you perform actions in the course, and also to read more about events themselves: <a href="{$a->list}">list of all events</a>, <a href="{$a->doc}">developer documentation</a>.</p>
<p> Tot slot, de plugin negeert altijd:
<ul>
 <li> De acties gedaan door administrators, gasten of gebruikers die niet ingelogd zijn. </li>
<li>De acties gedaan door gebruikers die niet het block/xp:earnxp mogen bekijken </li>
<li> Herhaalde acties in een korte tijd, om valsspelen te voorkomen</li>
<li> Gebeurtenissen die gemarkeerd zijn als anoniem, in een anonieme feedback bijvoorbeeld</li>
<li> En alle gebeurtenissen van gebruikers die niet deelnemen </li>
</ul>
</p>';
$string['searchandselectcourse'] = 'Zoek en selecteer een cursus';
$string['searchandselectmodule'] = 'Zoek en selecteer een activiteit of bron';
$string['send'] = 'Versturen';
$string['setpoints'] = 'Punten instellen';
$string['shortcode:xpbadge'] = 'De badge die overeenkomt met het huidige niveau van de gebruiker.';
$string['shortcode:xpiflevel'] = 'Toon de inhoud wanneer het niveau van de huidige gebruiker overeenkomt.';
$string['shortcode:xpiflevel_help'] = 'Raadpleeg de onderstaande voorbeelden om deze shortcode te formatteren. Wanneer een niveau strikt is gespecificeerd, wordt de inhoud weergegeven ongeacht de andere regels.
De _groter dan_ en _kleiner dan_ regels moeten allemaal overeenkomen voor de inhoud kan worden weergegeven. Let op, dit kan er soms toe leiden dat de inhoud nooit wordt weergegeven!
Let op dat docenten, of anders gebruikers met bewerkingsmogelijkheden, altijd alles zullen zien.

```
[xpiflevel 1 3 5]
    Displayed if the user\\\'s level is exactly 1, 3 or 5.
[/xpiflevel]

[xpiflevel >3]
    Displayed if the user\\\'s level is greater than 3.
[/xpiflevel]

[xpiflevel >=3]
    Displayed if the user\\\'s level is greater or equal to 3.
[/xpiflevel]

[xpiflevel >=10 <20 30]
    Displayed if the user\\\'s level is greater or equal to 10 AND is strictly less than 20
    OR is exactly equal to 30.
[/xpiflevel]

[xpiflevel <=10 >=20]
    Never displayed because the user\\\'s level can never be less or equal to 10 AND more or equal to 20.
[/xpiflevel]
```

Merk op dat deze shortcodes NIET genest kunnen worden binnen elkaar.';
$string['shortcode:xpladder'] = 'Toon een gedeelte van het klassement.';
$string['shortcode:xpladder_help'] = 'Standaard wordt een gedeelte van het klassement rondom de huidige gebruiker weergegeven.

```
[xpladder]
```

Om in plaats daarvan de top 10 studenten weer te geven in plaats van de buren van de huidige gebruiker, stelt u de parameter `top` in. U kunt optioneel het aantal weer te geven gebruikers instellen als volgt `top=20`.

```
[xpladder top]
[xpladder top=15]
```

Een link naar het volledige klassement wordt automatisch weergegeven onder de tabel. Als u een dergelijke link niet wilt weergeven, voegt u het argument `hidelink` toe.

```
[xpladder hidelink]
```

Standaard bevat de tabel de voortgangskolom niet die de voortgangsbalk weergeeft. Als een dergelijke kolom is geselecteerd in de aanvullende kolommen in de instellingen van het klassement, kunt u het argument `withprogress` gebruiken om het weer te geven.

```
[xpladder withprogress]
```

Merk op dat wanneer een cursus groepen gebruikt, het klassement zal proberen te raden welke groep het klassement moet tonen.';
$string['shortcode:xplevelname'] = 'Toon de level naam.';
$string['shortcode:xplevelname_help'] = 'Toont standaard de tag de naam van het huidige niveau van de gebruiker.
Als alternatief kunt u het argument `level` gebruiken om de naam van een specifiek niveau weer te geven.

```
[xplevelname]
[xplevelname level=5]
```

Als het `level`-argument wordt opgegeven en het niveau bestaat niet, wordt er niets weergegeven.';
$string['shortcode:xppoints'] = 'Toon een aantal punten opgemaakt als ervaringspunten.';
$string['shortcode:xppoints_help'] = 'Standaard toont dit het aantal punten van de huidige gebruiker. Je kunt ook een getal opgeven om deze waarde te overschrijven.

De opmaak van de punten is afhankelijk van of er een willekeurige waarde wordt weergegeven of de punten van de huidige gebruiker. Het argument `plain` kan worden gebruikt om alle opmaak te verwijderen.

```
[xppoints]
[xppoints 500]
[xppoints 123 plain]
```';
$string['shortcode:xpprogressbar'] = 'De voortgangsbalk van de huidige gebruiker naar het volgende niveau.';
$string['somefeaturesrequireotherplugins'] = 'Sommige functies vereisen dat er extra plugins geïnstalleerd zijn.';
$string['someoneelse'] = 'Iemand anders';
$string['somethinghappened'] = 'Er is iets gebeurd';
$string['taskcollectionloggerpurge'] = 'Logs van verzameling wissen';
$string['taskusagereport'] = 'Gebruiksrapprot';
$string['thankyou'] = 'Dank je!';
$string['timebetweensameactions'] = 'Benodigde tijd tussen gelijke acties';
$string['timebetweensameactions_help'] = 'In seconden, de minimale tijd die verstreken moet zijn tussen twee gelijke acties om beiden te laten tellen. Een actie is gelijk wanneer deze geplaatst is in het zelfde object of in de zelfde context. Het lezen van een forum post is een gelijke actie als dezelfde post nog een keer gelezen wordt.';
$string['timeformaxactions'] = 'Tijdsbestek voor maximale acties.';
$string['timeformaxactions_help'] = 'Aantal seconden waarin een gebruiker niet het maximale aantal acties moet overschrijden.';
$string['tinytimedays'] = '{$a}d';
$string['tinytimehours'] = '{$a}u';
$string['tinytimeminutes'] = '{$a}m';
$string['tinytimenow'] = 'nu';
$string['tinytimeolderyearformat'] = '%b %Y';
$string['tinytimeseconds'] = '{$a}s';
$string['tinytimeweeks'] = '{$a}w';
$string['tinytimewithinayearformat'] = '%b %e';
$string['total'] = 'Totaal';
$string['unknownbadgea'] = 'Onbekende badge ({$a})';
$string['unknowneventa'] = 'Onbekend evenement ({$a})';
$string['unlockfeaturewithxpplus'] = 'Ontgrendel deze functie met XP+. <a href="{$a}">Lees meer</a>';
$string['updateandpreview'] = 'Update en laat zien';
$string['upgradingplugins'] = 'Upgraden van de plugins';
$string['urlaccessdeprecated'] = 'Toegang via deze URL is verouderd, update alstublieft uw links.';
$string['usagereport'] = 'Gebruiksrapprot delen';
$string['usagereport_desc'] = 'Periodiek anonieme gebruiksgegevens delen met de plugin-ontwikkelaars. Deze informatie helpt bij het begrijpen van hoe de plugin wordt gebruikt en zal invloed hebben op de ontwikkeling ervan. De gedeelde informatie bevat basisinformatie over de Moodle-site (URL, versie), en gebruiksinformatie over de plugin (aantal gebruikers dat punten verdient, instellingenoverzicht, gebruikte regels, ...).';
$string['usealgo'] = 'Gebruik algoritme';
$string['usecustomlevelbadges'] = 'Gebruik aangepaste badges';
$string['usecustomlevelbadges_help'] = 'Wanneer ingesteld op Ja, moet je voor elk level een afbeelding aanleveren.';
$string['usingalgo'] = 'Algoritme gebruiken';
$string['value'] = 'Waarde';
$string['valuessaved'] = 'De waarden zijn succesvol opgeslagen.';
$string['viewas'] = 'Bekijk als';
$string['viewlogs'] = 'Bekijk logs';
$string['viewtheladder'] = 'Bekijk de ladder';
$string['visualsintro'] = 'Pas het uiterlijk van de niveaus aan en de betekenis van de punten.';
$string['wewillreplyat'] = 'We zullen antwoorden op: _{$a}_.';
$string['when'] = 'Wanneer';
$string['wherearexpused'] = 'Wanneer worden experience points gebruikt?';
$string['wherearexpused_desc'] = 'Wanneer';
$string['whoops'] = 'Oeps!';
$string['xp'] = 'Experience points';
$string['xp:addinstance'] = 'Voeg nieuw XP blok toe';
$string['xp:earnxp'] = 'Experience points verdienen';
$string['xp:manage'] = 'Beheer alle aspecten van ervaringspunten';
$string['xp:myaddinstance'] = 'Voeg het blok aan mijn dashboard toe.';
$string['xp:view'] = 'Laat het blok en gerelateerde pagina\'s zien';
$string['xp:viewlogs'] = 'Bekijk de logs';
$string['xp:viewreport'] = 'Bekijk het rapport';
$string['xpgaindisabled'] = 'XP verdienen uitgeschakeld.';
$string['xpplusrequired'] = 'XP+ vereist';
$string['xprequired'] = 'XP vereist.';
$string['xptogo'] = 'Nog [[{$a}]] te gaan';
$string['youleveledupexcl'] = 'Je bent een level omhoog gegaan!';
$string['youreachedlevel'] = 'Je hebt het level bereikt:\'';
$string['youreachedlevela'] = 'Je hebt level {$a} behaald!';
$string['yourmessage'] = 'Je bericht';
$string['yourownrules'] = 'Je eigen regels.';
