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
 * Strings for component 'data', language 'nl', branch 'MOODLE_38_STABLE'
 *
 * @package   data
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Actie';
$string['add'] = 'Item toevoegen';
$string['addcomment'] = 'Voeg notitie toe';
$string['addentries'] = 'Items goedkeuren';
$string['addtemplate'] = 'Item toevoegen';
$string['advancedsearch'] = 'Geavanceerd zoeken';
$string['allowcomments'] = 'Commentaar toevoegen toelaten';
$string['alttext'] = 'Alternatieve tekst';
$string['approvalstatus'] = 'Goedkeuringsstatus';
$string['approve'] = 'Goedkeuren';
$string['approved'] = 'Goedgekeurd';
$string['areacontent'] = 'Velden';
$string['ascending'] = 'Oplopend';
$string['asearchtemplate'] = 'Sjabloon voor geavanceerd zoeken';
$string['atmaxentry'] = 'Je hebt het maximale aantal items ingevoegd';
$string['authorfirstname'] = 'Voornaam auteur';
$string['authorlastname'] = 'Achternaam auteur';
$string['autogenallforms'] = 'Genereer alle standaardsjablonen';
$string['autolinkurl'] = 'Maak automatisch links van URL\'s';
$string['availablefromdate'] = 'Beschikbaar van';
$string['availabletags'] = 'Beschikbare tags';
$string['availabletags_help'] = '<p align="center"><strong>Beschikbare tags</strong></p>
<p>Tags houden een plaats vrij in een sjabloon, die later vervangen zal worden door velden of knoppen wanneer de items bewerkt of bekeken worden.</p>
<p>Velden maak je met volgende opmaak: [[veldnaam]]</p>
<p>Knoppen maak je met volgende opmaak: ##eenknop##</p>
<p>Enkel de tags die je terugvindt in de "Beschikbare tags" lijst kunnen voor het huidige sjabloon gebruikt worden.</p>';
$string['availabletodate'] = 'Beschikbaar tot';
$string['availabletodatevalidation'] = 'De \'beschikbaar tot\'-datum kan niet voor de \'beschikbaar vanaf\'-datum liggen.';
$string['blank'] = 'Leeg';
$string['buttons'] = 'Acties';
$string['bynameondate'] = 'door {$a->name} - {$a->date}';
$string['calendarend'] = '{$a} sluit';
$string['calendarstart'] = '{$a} opent';
$string['cancel'] = 'Annuleer';
$string['cannotaccesspresentsother'] = 'Je mag de sjablonen van andere gebruikers niet gebruiken';
$string['cannotadd'] = 'Kan geen items toevoegen!';
$string['cannotdeletepreset'] = 'Fout bij het verwijderen van een sjabloon';
$string['cannotoverwritepreset'] = 'Fout bij overschrijving sjabloon';
$string['cannotunziptopreset'] = 'Kan het sjabloon niet unzippen in de map';
$string['checkbox'] = 'Keuzevakjes';
$string['chooseexportfields'] = 'Kies de velden die je wil exporteren';
$string['chooseexportformat'] = 'Kies het formaat waarnaar je wil exporteren';
$string['chooseorupload'] = 'Kies bestand';
$string['closebeforeopen'] = 'Je hebt een einddatum opgegeven voor de startdatum';
$string['columns'] = 'Kolommen';
$string['comment'] = 'Commentaar';
$string['commentdeleted'] = 'Commentaar verwijderd';
$string['commentempty'] = 'Commentaar was leeg';
$string['comments'] = 'Commentaren';
$string['commentsaved'] = 'Notitie bewaard';
$string['commentsn'] = '{$a} notitie(s)';
$string['commentsoff'] = 'De commentaarfunctie is niet ingeschakeld.';
$string['completionentries'] = 'Items invoeren vereist';
$string['completionentriescount'] = 'Aantal items';
$string['completionentriesdesc'] = 'Minimaal aantal ingevoerde items vereist: {$a}';
$string['configenablerssfeeds'] = 'Met deze knop kun je RSS-feeds toelaten voor alle databanken. Je zult nog wel manueel de RSS-feeds moeten inschakelen voor elke databank.';
$string['confirmdeletefield'] = 'Je gaat dit veld verwijderen. Ben je zeker?';
$string['confirmdeleterecord'] = 'Je gaat deze record verwijderen. Ben je zeker?';
$string['confirmdeleterecords'] = 'Weet je zeker dat je deze items wil verwijderen?';
$string['csstemplate'] = 'CSS';
$string['csvfailed'] = 'Kon de gegevens niet ut het CSV-bestand halen';
$string['csvfile'] = 'CSV-bestand';
$string['csvimport'] = 'Imorteer CSV-bestand';
$string['csvimport_help'] = '<p align="center"><strong>Importeren met een CSV bestand</strong></p>

<p>CSV betekent Comma-Separated-Values en is een algemeen gebruikte bestandsopmaak voor het uitwisselen van informatie.</p>

<p>De verwachte bestandsopmaak is een tekstbestand met een lijst met veldnamen op de eerste regel. Daarna volgen dan de gegevens, één record per lijn.</p>

<p>Het scheidingsteken tussen de velden is standaard een komma en het insluiten van velden is standaard niet ingesteld (met insluiten van velden wordt bedoeld dat er tekens voor en na elk veld staan). </p>

<p>Record worden gescheiden door ze op een nieuwe regel te zetten (door op de enter-toets te drukken in een tekst editor). Tabs kunnen gespecifieeerd worde door t te gebruiken en nieuwe regels kun je specifieren met n.</p>

<p>Voorbeeld:

<pre>
  naam,grootte,gewicht
  Kai,180cm,80kg
  Kim,170cm,60kg
  Koo,190cm,20kg
</pre>
</p>

<p>Waarschuwing: sommige veldtypes worden niet ondersteund.</p>';
$string['csvwithselecteddelimiter'] = '<acronym title="Comma Separated Values">CSV</acronym> tekst met het gekozen scheidingsteken:';
$string['data:addinstance'] = 'Voeg een nieuwe databank toe';
$string['data:approve'] = 'Keur nieuwe items goed en verwerp goedgekeurde items';
$string['data:comment'] = 'Schrijf commentaar';
$string['data:exportallentries'] = 'Exporteer alle databankitems';
$string['data:exportentry'] = 'Exporteer een databankitem';
$string['data:exportownentry'] = 'Exporteer je databankitem';
$string['data:exportuserinfo'] = 'Exporteer gebruikersinformatie';
$string['data:managecomments'] = 'Beheer commentaren';
$string['data:manageentries'] = 'Beheer items';
$string['data:managetemplates'] = 'Beheer sjablonen';
$string['data:manageuserpresets'] = 'Alle sjabloonsets beheren';
$string['data:rate'] = 'Items beoordelen';
$string['data:readentry'] = 'Lees items';
$string['data:view'] = 'Bekijk databankactiviteit';
$string['data:viewallratings'] = 'Bekijk alle gegeven beoordelingen';
$string['data:viewalluserpresets'] = 'Bekijk sjabloonsets';
$string['data:viewanyrating'] = 'Bekijk de gekregen totalen van beoordelingen ';
$string['data:viewentry'] = 'Bekijk items';
$string['data:viewrating'] = 'Bekijk de totaalbeoordeling die je gekregen hebt';
$string['data:writeentry'] = 'Voeg nieuw item toe';
$string['date'] = 'Datum';
$string['dateentered'] = 'Datum';
$string['defaultfielddelimiter'] = '(standaardinstelling is een komma)';
$string['defaultfieldenclosure'] = '(standaardinstelling is geen)';
$string['defaultsortfield'] = 'Standaard sorteerveld';
$string['delcheck'] = 'Selectievakje voor bulk verwijderen';
$string['delete'] = 'Verwijder';
$string['deleteallentries'] = 'Verwijder alle items';
$string['deletecomment'] = 'Weet je zeker dat je deze commentaar wil verwijderen?';
$string['deleted'] = 'verwijderd';
$string['deletefield'] = 'Verwijder een bestaand veld';
$string['deletenotenrolled'] = 'Verwijder items van niet aangemelde gebruikers';
$string['deletewarning'] = 'Ben je zeker dat je deze sjabloonset wil verwijderen?';
$string['descending'] = 'Aflopend';
$string['directorynotapreset'] = '{$a->directory} Geen sjabloon: bestanden ontbreeken:
{$a->missing_files}';
$string['disapprove'] = 'Verwerp';
$string['download'] = 'Download';
$string['edit'] = 'Bewerk';
$string['editcomment'] = 'Bewerk commentaar';
$string['editentry'] = 'Bewerk item';
$string['editordisable'] = 'Editor uitschakelen';
$string['editorenable'] = 'Editor inschakelen';
$string['emptyadd'] = 'Het sjabloon voor toevoegen is leeg. Standaard formulier aan het genereren...';
$string['emptyaddform'] = 'Je hebt geen velden ingevuld!';
$string['enabletemplateeditorcheck'] = 'Weet je zeker dat je de editor wil inschakelen? Dit kan als gevolg hebben dat de inhoud gewijzigd wordt wanneer het sjabloon bewaard wordt.';
$string['entries'] = 'Items';
$string['entrieslefttoadd'] = 'Je moet {$a->entriesleft} meer item(s) ingeven voor je de items van anderen kunt zien.';
$string['entrieslefttoaddtoview'] = 'je moet {$a->entrieslefttoview} items meer toevoegen voor je de items van anderen kan zien.';
$string['entry'] = 'Item';
$string['entrysaved'] = 'Gegevens bewaard.';
$string['errormustbeteacher'] = 'Je moet leraar zijn om deze pagina te kunnen gebruiken';
$string['errormustsupplyvalue'] = 'Je moet hier een waarde geven.';
$string['errorpresetexists'] = 'Er bestaat al een preset met de gekozen naam';
$string['eventfieldcreated'] = 'Veld gemaakt';
$string['eventfielddeleted'] = 'Veld verwijderd';
$string['eventfieldupdated'] = 'Veld aangepast';
$string['eventrecordcreated'] = 'Rapport gemaakt';
$string['eventrecorddeleted'] = 'Rapport verwijderd';
$string['eventrecordupdated'] = 'Rapport aangepast';
$string['eventtemplateupdated'] = 'Sjabloon aangepast';
$string['eventtemplateviewed'] = 'Sjablonen bekeken';
$string['example'] = 'Voorbeeld van een databankmodule';
$string['excel'] = 'Excel';
$string['expired'] = 'Deze activiteit is gesloten op {$a} en is niet langer beschikbaar';
$string['export'] = 'Exporteer';
$string['exportaszip'] = 'Exporteer als zip';
$string['exportaszip_help'] = '<p align="center"><strong>Exporteren als Zip</strong></p>
<p>Hiermee kun je de sjabloonsets downloaden naar je computer, van waar je ze later terug kunt uploaden naar een andere database met de Importeren van Zip mogelijkheid.</p>';
$string['exportedtozip'] = 'Geëxporteerd naar tijdelijke zip ...';
$string['exportentries'] = 'Exporteer items';
$string['exportownentries'] = 'Exporteer alleen je eigen items?
({$a->mine}/{$a->all})';
$string['failedpresetdelete'] = 'Fout bij het verwijderen van een sjabloon';
$string['fieldadded'] = 'Veld toegevoegd';
$string['fieldallowautolink'] = 'Automatisch linken toegelaten';
$string['fielddeleted'] = 'Veld verwijderd';
$string['fielddelimiter'] = 'Veldscheidingsteken';
$string['fielddescription'] = 'Veldbeschrijving';
$string['fieldenclosure'] = 'Veldinsluiting';
$string['fieldheight'] = 'Hoogte';
$string['fieldheightlistview'] = 'Hoogte in lijstscherm';
$string['fieldheightsingleview'] = 'Hoogte in scherm per lijn';
$string['fieldids'] = 'Veld identiteit';
$string['fieldmappings'] = 'Veldverwijzingen';
$string['fieldmappings_help'] = 'Met dit menu kun je data behouden van een bestaande databank. Om de data van een veld te bewaren, moet je deze verwijzen naar een nieuw veld, waar de data dan zal terecht komen. Elk veld kan ook leeg gelaten worden als je er geen gegevens wil naar toe kopiëren. De gegevens uit een oud veld dat niet naar een nieuw veld verwezen wordt, zullen verloren gaan.
Je kunt alleen velden van hetzelfde type naar elkaar laten verwijzen, dus elk dropdownmenu zal andere velden bevatten. Je moet er ook voor opletten om een oud veld niet naar meer dan één nieuwe velden te laten verwijzen.';
$string['fieldname'] = 'Veldnaam';
$string['fieldnotmatched'] = 'Volgende velden in je bestand zijn niet bekend in de databank: {$a}';
$string['fieldoptions'] = 'Opties (Eén per lijn)';
$string['fields'] = 'Velden';
$string['fieldupdated'] = 'Veld geüpdatet';
$string['fieldwidth'] = 'Breedte';
$string['fieldwidthlistview'] = 'Breedte in lijstscherm';
$string['fieldwidthsingleview'] = 'Breedte in scherm per lijn';
$string['file'] = 'Bestand';
$string['fileencoding'] = 'Codering';
$string['filesnotgenerated'] = 'Niet alle bestanden werden aangemaakt: {$a}';
$string['filtername'] = 'Databank automatisch linken';
$string['footer'] = 'Voettekst';
$string['forcelinkname'] = 'Geforceerde naam voor de link';
$string['foundnorecords'] = 'Geen records gevonden (<a href="{$a->reseturl}">Reset filters</a>)';
$string['foundrecords'] = 'Gevonden records: {$a->num}/{$a->max} (<a href="{$a->reseturl}">Reset filters</a>)';
$string['fromfile'] = 'Importeer met zip-bestand';
$string['fromfile_help'] = '<p align=\'center\'><strong>Sjabloonsets importeren vanuit Zip</strong></p>
<p>Gebruik dit om sjabloonsets die je op je computer bewaard hebt met de exportfunctie te uploaden .</p>';
$string['generateerror'] = 'Niet alle bestanden gegenereerd!';
$string['header'] = 'Koptekst';
$string['headeraddtemplate'] = 'Definieert de interface voor het toevoegen of bewerken van items';
$string['headerasearchtemplate'] = 'Definieert de interface voor geavanceerd zoeken';
$string['headercsstemplate'] = 'Definieer locale CSS-stijlen voor de andere sjablonen';
$string['headerjstemplate'] = 'Definieert eigen Javascript voor het manipuleren hoe elementen getoond worden, in de lijst, enkel of voeg sjablonen toe';
$string['headerlisttemplate'] = 'Definieer de interface voor het bladeren door meerdere items';
$string['headerrsstemplate'] = 'Definieer hoe items verschijnen in RSS-feeds';
$string['headersingletemplate'] = 'Definieer de interface voor het bladeren per item';
$string['importentries'] = 'Importeer items';
$string['importsuccess'] = 'De sjabloonset is met succes toegepast';
$string['includeapproval'] = 'Goedkeuringsstatus mee opnemen';
$string['includetags'] = 'Inclusief tags';
$string['includetime'] = 'Tijd toegevoegd/gewijzigd mee opnemen';
$string['includeuserdetails'] = 'Gebruikersdetails mee opnemen';
$string['indicator:cognitivedepth'] = 'Databank cognitief';
$string['indicator:cognitivedepthdef'] = 'Database cognitief';
$string['indicator:cognitivedepthdef_help'] = 'De deelnemer heeft dit percentage van de cognitieve betrokkenheid van de database-activiteiten bereikt tijdens dit analyse-interval (Niveaus = Geen weergave, Bekijken, Verzenden)';
$string['indicator:cognitivedepth_help'] = 'Deze indicator is gebaseerd op de door de leerling bereikte cognitieve diepte in een Databank activiteit.';
$string['indicator:socialbreadth'] = 'Databank sociaal';
$string['indicator:socialbreadthdef'] = 'Database sociaal';
$string['indicator:socialbreadthdef_help'] = 'De deelnemer heeft dit percentage van de sociale betrokkenheid van de database-activiteiten bereikt tijdens dit analyse-interval (niveaus = geen deelname, alleen deelnemer)';
$string['indicator:socialbreadth_help'] = 'Deze indicator is gebaseerd op de door de leerling behaalde sociale breedte in een Databank activiteit.';
$string['insufficiententries'] = 'meer items nodig om deze databank te kunnen bekijken';
$string['intro'] = 'Beschrijving';
$string['invalidaccess'] = 'Deze pagina is niet correct opgevraagd';
$string['invalidfieldid'] = 'Veld ID is fout';
$string['invalidfieldname'] = 'Kies een andere naam voor dit veld';
$string['invalidfieldtype'] = 'Veldtype is fout';
$string['invalidid'] = 'Data ID is fout';
$string['invalidpreset'] = '{$a} is geen sjabloon.';
$string['invalidrecord'] = 'Record fout';
$string['invalidurl'] = 'De URL die je net gaf is niet geldig';
$string['jstemplate'] = 'Javascript sjabloon';
$string['latitude'] = 'Breedtegraad';
$string['latlong'] = 'Breedtegraad/lengtegraad';
$string['latlongboth'] = 'Zowel de breedtegraad als de lengtegraad zijn vereist.';
$string['latlongdownloadallhint'] = 'Downloadlink voor alle items als KML';
$string['latlongkmllabelling'] = 'Hoe items labelen als KML-bestanden (Google Earth)';
$string['latlonglinkservicesdisplayed'] = 'Te tonen services';
$string['latlongotherfields'] = 'Andere velden';
$string['list'] = 'Lijstweergave';
$string['listtemplate'] = 'Lijstsjabloon';
$string['longitude'] = 'Lengtegraad';
$string['manageapproved'] = 'Bewerken van goedgekeurde items toestaan';
$string['manageapproved_help'] = 'Indien uitgeschakeld kunnen goedgekeurde items niet meer bewerkt of verwijderd worden door degene die ze toegevoegd heeft. Deze instelling heeft geen effect, tenzij \'Goedkeuring vereist\' is ingeschakeld.';
$string['mapexistingfield'] = 'Koppel aan {$a}';
$string['mapnewfield'] = 'Maak een nieuw veld';
$string['mappingwarning'] = 'All oude velden die niet naar een nieuw veld verplaatst worden, zullen verloren gaan en alle gegevens in die velden zullen verwijderd worden';
$string['maxentries'] = 'Maximale aantal items';
$string['maxentries_help'] = 'Het maximale aantal items dat een leerling mag insturen voor deze activiteit';
$string['maxsize'] = 'Maximale grootte';
$string['menu'] = 'Menu';
$string['menuchoose'] = 'Kies...';
$string['missingdata'] = 'Data ID of object moet opgegeven worden aan field class';
$string['missingfield'] = 'Programmatiefout: je moet een veld en of gegevens specifiëren wanneer je een field class definieert.';
$string['modulename'] = 'Databank';
$string['modulename_help'] = 'De databank activiteitsmodule maakt het voor deelnemers mogelijk om gegevensbank te maken, te onderhouden en te doorzoeken. De opmaak en structuur ervan wordt bepaald door de leraar door het maken van een aantal velden. Deze velden kunnen keuzevakjes, selectierondjes, rolmenu\'s, tekst zone\'s, URL\'s, afbeeldingen en een geüpload bestand zijn.

De zichtbare layout van de informatie bij het maken van lijsten, bekijken of bewerken van de databank-items wordt geregeld door databanksjablonen. Databank-activiteiten kunnen gedeeld worden tussen cursussen  via sjablonen en een leraar kan de inhoud van een  databank importeren en exporteren.

Als de filter databank automatisch linken is ingeschakeld, dan zullen items in de databank  automatisch gelinkt worden aan woorden en zinnen die in de cursus voorkomen.

Een leraar kan opmerkingen bij databank-items toestaan. Databank-items kunnen ook beoordeeld worden door leraren of leerlingen (peer-evaluatie). Beoordelingen kunnen samengeteld worden om een eindbeoordeling te vormen die in de cijferlijst opgeslagen wordt.

Databank-activiteiten kunnen voor heel veel zaken gebruikt worden, zoals

* Samenwerken aan een collectie links, boekbesprekingen, logboek, enz.
* Voor het tonen van door leerlingen gemaakte foto\'s, posters, websites, gedichten, ... voor peer commentaar en beoordeling.';
$string['modulenameplural'] = 'Databanken';
$string['more'] = 'Meer';
$string['moreurl'] = 'Meer URL';
$string['movezipfailed'] = 'Kan Zip niet verplaatsen';
$string['multientry'] = 'Herhaald invoeren';
$string['multimenu'] = 'Menu (meerdere selecties)';
$string['multipletags'] = 'Meerdere tags gevonden! Sjabloon niet bewaard';
$string['newentry'] = 'Nieuw item';
$string['newfield'] = 'Maak een nieuw veld';
$string['newfield_help'] = 'Een veld maakt het invoeren van gegevens mogelijk. Elk item in een databank-activiteit kan meerdere velden bevatten en die velden kunnen verschillende types zijn, zoals bijvoorbeeld een datumveld waarmee deelnemers een dag, maand en jaar uit een rolmenu kunnen kiezen, een afbeeldingsveld waarin deelnemers een afbeeldingsbestand kunnen uploaden, of een selectieveld waarmee gebruikers één of meerdere opties kunnen kiezen.

Elk veld moet een unieke veldnaam hebben. De beschrijving is optioneel.';
$string['noaccess'] = 'Je hebt geen toegang tot deze pagina';
$string['nodefinedfields'] = 'Nieuw sjabloon heeft geen gedefiniëerde velden';
$string['nofieldcontent'] = 'Veldinhoud niet gevonden';
$string['nofieldindatabase'] = 'Er zijn nog geen velden gedefinieerd voor deze databank. Voeg er enkele toe.';
$string['nolisttemplate'] = 'Lijstsjabloon is nog niet gedefinieerd';
$string['nomatch'] = 'Geen overeenkomende items gevonden';
$string['nomaximum'] = 'Geen maximum';
$string['norecords'] = 'Geen items in de databank';
$string['nosingletemplate'] = 'Sjabloon voor itemweergave is niet gedefinieerd';
$string['notapproved'] = 'Item is nog niet goedgekeurd';
$string['notinjectivemap'] = 'Geen injectieve koppeling';
$string['notopenyet'] = 'Deze actieviteit is niet beschikbaar tot {$a}';
$string['number'] = 'Getal';
$string['numberrssarticles'] = 'Items in de RSS-feed';
$string['numnotapproved'] = 'Wachtend';
$string['numrecords'] = '{$a} records';
$string['ods'] = '<acronym title="OpenDocument SRekenblad">ODS</acronym> (OpenOffice)';
$string['openafterclose'] = 'Je hebt een startdatum opgegeven na de einddatum';
$string['optionaldescription'] = 'Korte beschrijving (optioneel)';
$string['optionalfilename'] = 'Bestandsnaam (optioneel)';
$string['other'] = 'Andere';
$string['overrwritedesc'] = 'Overschrijf de preset als die al bestaat';
$string['overwrite'] = 'Overschrijf';
$string['overwritesettings'] = 'Overschrijf met huidige instellingen';
$string['page-mod-data-x'] = 'Elke databankactiviteit';
$string['pagesize'] = 'Items per pagina';
$string['participants'] = 'Deelnemers';
$string['picture'] = 'Afbeelding';
$string['pleaseaddsome'] = 'Kies instellingen hieronder of <a href="{$a}"> kies een voorgedefinieerd sjabloon</a> om te starten.';
$string['pluginadministration'] = 'Databank activiteitsbeheer';
$string['pluginname'] = 'Databank';
$string['portfolionotfile'] = 'Exporteer naar een portfolio, niet naar een bestand (enkel CSV en Leap2A)';
$string['presetinfo'] = 'Bewaren als sjabloonset zal dit sjabloon publiceren. Andere gebruikers kunnen dit dan gebruiken in hun databanken.';
$string['presets'] = 'Sjabloonsets';
$string['privacy:metadata:commentpurpose'] = 'Opmerkingen op databankgegevens.';
$string['privacy:metadata:data_content'] = 'Stelt één antwoord voor in één veld van de databank activiteitsmodule';
$string['privacy:metadata:data_content:content'] = 'Inhoud';
$string['privacy:metadata:data_content:content1'] = 'Bijkomende inhoud 1';
$string['privacy:metadata:data_content:content2'] = 'Bijkomende inhoud 2';
$string['privacy:metadata:data_content:content3'] = 'Bijkomende inhoud 3';
$string['privacy:metadata:data_content:content4'] = 'Bijkomende inhoud 4';
$string['privacy:metadata:data_content:fieldid'] = 'Velddefinitie-ID';
$string['privacy:metadata:datafieldnpluginsummary'] = 'Velden voor de databank activiteitsmodule';
$string['privacy:metadata:data_records'] = 'Representeert gegevens in de databank activiteitsmodule';
$string['privacy:metadata:data_records:approved'] = 'Goedkeuringsstatus';
$string['privacy:metadata:data_records:groupid'] = 'Groep';
$string['privacy:metadata:data_records:timecreated'] = 'Tijdstip waarop het gegeven gemaakt is';
$string['privacy:metadata:data_records:timemodified'] = 'Tijdstip waarop het gegeven laatst gewijzigd is';
$string['privacy:metadata:data_records:userid'] = 'Gebruiker die het gegeven gemaakt heeft';
$string['privacy:metadata:filepurpose'] = 'Bestand als bijlage bij het databankgegeven';
$string['privacy:metadata:ratingpurpose'] = 'Beoordelingen om datbankgegevens';
$string['privacy:metadata:tagpurpose'] = 'Tags op databankgegevens';
$string['radiobutton'] = 'Keuzeknoppen';
$string['recordapproved'] = 'Item goedgekeurd';
$string['recorddeleted'] = 'Record verwijderd';
$string['recorddisapproved'] = 'Item verworpen';
$string['recordsnotsaved'] = 'Er werd geen record bewaard. Controleer de opmaak van het geüploade bestand.';
$string['recordssaved'] = 'record(s) bewaard';
$string['removealldatatags'] = 'Verwijder alle database-tags';
$string['requireapproval'] = 'Goedkeuring nodig';
$string['requireapproval_help'] = '<p align="center"><strong>Goedkeuring vereist</strong></p>

<p>Moeten toegevoegde items eerst door een leraar goedgekeurd worden voor ze gezien kunnen worden door leerlingen? Dit kan nuttig zijn om inhoud te modereren die misschien beledigend of ongeschikt is.</p>';
$string['required'] = 'Vereist';
$string['requiredentries'] = 'Vereiste items voor voltooien (oud)';
$string['requiredentries_help'] = 'Indien ingesteld wordt er een bericht getoond met het aantal items die een leerling verplicht moet invoeren vóór de activiteit als voltooid wordt beschouwd. Merk op dat deze instelling niet verbonden is met activiteitsvoltooiing.

Voor items die vereist zijn voor activiteitsvoltooiing moet je de nieuwe instelling \'Vereiste items\' gebruiken. Om deze instelling volledig te verwijderen moet je ze om \'geen\' zetten en de wijzigingen bewaren. Gebruik de vereiste items velden in de sectie activiteitsvoltooiing .';
$string['requiredentriestoview'] = 'Items vereist voor bekijken';
$string['requiredentriestoview_help'] = 'Het aantal items een leerling moet invoeren voor hij de andere items in deze databank mag zien.

Opmerking: deze functie kan niet gebruikt worden samen met de autolink filter voor de databank, omdat het niet mogelijk is voor de databank autolink filter om te bepalen of een gebruiker het vereiste aantal items al ingestuurd heeft.';
$string['requiredentrieswarning'] = 'Deze instelling is vervangen door de activiteitsvoltooiingsinstelling "Vereiste items"';
$string['requiredfield'] = 'Vereist veld';
$string['resetsettings'] = 'Reset filters';
$string['resettemplate'] = 'Reset sjabloon';
$string['resizingimages'] = 'Tumbnails van afbeeldingen herschalen';
$string['rows'] = 'rijen';
$string['rssglobaldisabled'] = 'Uitgeschakeld. Controleer de configuratievariabelen van de site';
$string['rsstemplate'] = 'RSS';
$string['rsstitletemplate'] = 'RSS titelsjabloon';
$string['save'] = 'Bewaar';
$string['saveandadd'] = 'Bewaar en voeg nog één toe';
$string['saveandview'] = 'Bewaar en bekijk';
$string['saveaspreset'] = 'Bewaar als sjabloonset';
$string['saveaspreset_help'] = '<p align="center"><strong>Bewaar als sjabloonset</strong></p>
<p>Dit publiceert de nu gebruikte sjablonen als een sjabloonset, die iedereen op de site kan zien en gebruiken. Deze zal verschijnen in de lijst met sjabloonsets. Wanneer je wil, kun je deze zet natuurlijk verwijderen.</p>';
$string['savesettings'] = 'Bewaar instellingen';
$string['savesuccess'] = 'Bewaren gelukt. Je sjabloonset zal nu voor de hele site beschikbaar zijn.';
$string['savetemplate'] = 'Bewaar sjabloon';
$string['search'] = 'Zoek';
$string['search:activity'] = 'Informatie databank-activiteit';
$string['search:entry'] = 'Databank - inhoud';
$string['selectedrequired'] = 'Alle geselecteerde vereist';
$string['showall'] = 'Toon alles';
$string['single'] = 'Itemweergave';
$string['singletemplate'] = 'Itemweergave';
$string['subplugintype_datafield'] = 'Databank veldtype';
$string['subplugintype_datafield_plural'] = 'Databank veldtypes';
$string['subplugintype_datapreset'] = 'Voorinstelling';
$string['subplugintype_datapreset_plural'] = 'Sjabloonsets';
$string['tagarea_data_records'] = 'Data records';
$string['tags'] = 'Tags';
$string['tagsdeleted'] = 'Database-tags zijn verwijderd';
$string['teachersandstudents'] = '{$a->teachers} en {$a->students}';
$string['templates'] = 'Sjablonen';
$string['templatesaved'] = 'Sjabloon bewaard';
$string['text'] = 'Tekst';
$string['textarea'] = 'Tekstgebied';
$string['timeadded'] = 'Toegevoegd op';
$string['timemodified'] = 'Gewijzigd op';
$string['todatabase'] = 'naar deze database';
$string['type'] = 'Veldtype';
$string['undefinedprocessactionmethod'] = 'Geen methode gedefiniëerd in Data_Preset om de actie "{$a}" af te handelen.';
$string['unsupportedexport'] = '({$a->fieldtype}) kan niet geëxporteerd worden.';
$string['updatefield'] = 'Update een bestaand veld';
$string['uploadfile'] = 'Upload bestand';
$string['uploadrecords'] = 'Upload records uit een bestand';
$string['uploadrecords_help'] = 'Items kunnen geüploaded worden via een tekstbestand. De opmaak van dat bestand moet als volgt zijn:

* Elke lijn van het bestand bevat één record
* Elke record is een reeks gegevens, gescheiden door komma\'s (of andere scheidingstekens)
* De eerste record bevat een lijst met veldnamen die de opmaak van de rest van het bestand bepalen.

De velden kunnen ingesloten worden door een teken in elk veld van elke record, maar dit kan ook weggelaten worden.';
$string['url'] = 'URL';
$string['usedate'] = 'Ook zoeken';
$string['usestandard'] = 'gebruik een sjabloonset';
$string['usestandard_help'] = '<p align="center"><strong>Gebruik sjabloonsets</strong></p>
<p> Gebruik een sjabloon dat beschikbaar gemaakt is voor de hele site.</p>
<p> Als de sjabloonset aan de bibliotheek is toegevoegd met de funcitie \'Bewaar als sjabloonset\', dan kun je die hier verwijderen.</p>';
$string['viewfromdate'] = 'Alleen lezen vanaf';
$string['viewtodate'] = 'Alleen lezen tot';
$string['viewtodatevalidation'] = 'De \'Enkel lezen tot\'-datum kan niet voor de \'Enkel lezen vanaf\'-datum liggen.';
$string['wrongdataid'] = 'Verkeerd data-ID opgegeven';
