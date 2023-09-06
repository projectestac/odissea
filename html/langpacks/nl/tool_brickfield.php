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
 * Strings for component 'tool_brickfield', language 'nl', version '4.1'.
 *
 * @package     tool_brickfield
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessibility'] = 'Toegankelijkheid';
$string['accessibilitydisabled'] = 'De Brickfield toegankelijkheidstool is niet ingeschakeld op deze site. Contacteer je systeembeheerder om die in te schakelen.';
$string['accessibilityreport'] = 'Toegankelijkheid beoordelingstool';
$string['accessibilitytool'] = 'Brickfield toegankelijkheidstool';
$string['accessibilitytools'] = 'Brickfield toegankelijkheidstools';
$string['activate'] = 'Activeer';
$string['activated'] = 'De plugin is geactiveerd en klaar om te gebruiken.';
$string['activationform'] = 'Brickfield registratie';
$string['activationheader'] = 'Brickfield activatie';
$string['activationinfo'] = '<p>Om deze plugin te kunnen gebruiken moet je geldige sleutels voor deze site ingeven in dit formulier.</p><p><a href="{$a}" data-action="send_info" target="_blank">Registreer je op de  Brickfield Portal (opent in een nieuw venster)</a> om deze sleutels te ontvangen mocht je ze nog niet hebben. </p><p>Als ze geactiveerd zijn, zullen ze automatisch gevalideerd worden via een geplande cron taak.</p>';
$string['activityresults:pluginname'] = 'Opgesplitst toegankelijkheidsrapport voor activiteiten';
$string['activityresults:toolname'] = 'Opgesplitste samenvatting voor activiteiten';
$string['activityresults:toolshortname'] = 'Activiteiten opgesplitst';
$string['advanced:pluginname'] = 'Geavanceerd toegankelijkheidsrapport';
$string['advanced:toolname'] = 'Geavanceerde samenvatting';
$string['advanced:toolshortname'] = 'Geavanceerd';
$string['allcourses'] = 'Alle beoordeelde cursussen ({$a})';
$string['allcoursescat'] = 'Alle beoordeelde cursussen voor categorie {$a->catname} ({$a->count})';
$string['analysis:byrequest'] = 'Op aanvraag';
$string['analysis:disabled'] = 'Uitgeschakeld';
$string['analysistype'] = 'Analyse-aanvragen inschakelen';
$string['analysistype_desc'] = 'Toestaan dat analyse van de toegankelijkheid van inhoud wordt aangevraagd';
$string['analysistypedisabled'] = 'Inhoudsanalyse is uitgeschakeld';
$string['bannercontentone'] = 'De Enterprise Accessibility Toolkit heeft een volledige set functies om uw organisatie te helpen de toegankelijkheid van uw cursussen te verbeteren. <a href="{$a}"> Neem contact op met Brickfield Education Labs</a> om een gratis demo van de geavanceerde functies te boeken.';
$string['bannercontenttwo'] = 'Bouw een effectief en inclusief onderwijs- en leerplatform door inhoud te vinden die niet aan de richtlijnen voldoet, de problemen op te lossen en de inhoud van uw Moodle-cursus toekomstbestendig te maken met toegankelijke bestanden, editor en verbeterde functies.';
$string['bannerheadingone'] = 'Upgrade naar de Enterprise Accessibility Toolkit';
$string['batch'] = 'Batch limiet';
$string['brickfield'] = 'Brickfield-toolkit';
$string['brickfield:viewcoursetools'] = 'Bekijk rapporten per cursus';
$string['brickfield:viewsystemtools'] = 'Bekijk rapporten voor alle cursussen';
$string['bulkprocesscaches'] = 'Verwerk bulkcaching';
$string['bulkprocesscourses'] = 'Verwerk de toegankelijkheidscontrole van bulkbatches';
$string['buttonone'] = 'Vraag een gratis demo aan';
$string['cachepending'] = 'De samenvattende gegevens worden samengesteld';
$string['checkdesc:alinksdontopennewwindow'] = 'Links die in een nieuw venster openen, moeten gebruikers van tevoren waarschuwen.';
$string['checkdesc:amustcontaintext'] = 'Een link moet tekst bevatten om waarneembaar te zijn.';
$string['checkdesc:areadontopennewwindow'] = 'Gebieden die in afbeeldingskaarten worden gebruikt en die in een nieuw venster worden geopend, moeten gebruikers van tevoren waarschuwen.';
$string['checkdesc:areahasaltvalue'] = 'Gebieden die in afbeeldingskaarten worden gebruikt, mogen geen alt (alternatieve) tekst missen, vergelijkbaar met afbeeldingen.';
$string['checkdesc:asuspiciouslinktext'] = 'Linktekst moet beschrijvend zijn en context bieden over de bestemming.';
$string['checkdesc:basefontisnotused'] = 'Basefont-elementen (traditioneel gebruikt voor opmaak) zijn niet toegankelijk en mogen niet worden gebruikt.';
$string['checkdesc:blinkisnotused'] = 'Knipperelementen die aan en uit knipperen, zijn niet toegankelijk en mogen niet worden gebruikt.';
$string['checkdesc:boldisnotused'] = 'Vetgedrukte (b) elementen mogen niet worden gebruikt; In plaats daarvan moet "strong" worden gebruikt.';
$string['checkdesc:contenttoolong'] = 'De totale lengte van de pagina-inhoud mag niet langer zijn dan 500 woorden.';
$string['checkdesc:csstexthascontrast'] = 'Het kleurcontrast tussen de tekst en de achtergrond is te laag.';
$string['checkdesc:embedhasassociatednoembed'] = 'Embed-elementen (voor het invoegen van multimedia) moeten hun overeenkomstige "noembed"-elementen hebben.';
$string['checkdesc:headerh3'] = 'Kopteksten die volgen op H3-kopteksten (de optie voor grote kopteksten van de editor) mogen de hiërarchie van de paginakoppen niet onderbreken.';
$string['checkdesc:headershavetext'] = 'Een koptekst moet tekst bevatten om waarneembaar te zijn.';
$string['checkdesc:iisnotused'] = 'Cursief (i) elementen mogen niet worden gebruikt; "em" moet in plaats daarvan worden gebruikt.';
$string['checkdesc:imgaltisdifferent'] = 'Afbeelding alt (alternatieve) tekst mag niet de bestandsnaam van de afbeelding zijn.';
$string['checkdesc:imgaltistoolong'] = 'Afbeelding alt (alternatieve) tekst mag niet meer zijn dan de maximaal toegestane (125) tekens.';
$string['checkdesc:imgaltnotemptyinanchor'] = 'Afbeelding alt (alternatieve) tekst mag niet leeg zijn, vooral als de afbeelding een link heeft die ergens anders heen gaat.';
$string['checkdesc:imgaltnotplaceholder'] = 'Afbeelding alt (alternatieve) tekst mag geen eenvoudige tijdelijke aanduiding voor tekst zijn, zoals "afbeelding".';
$string['checkdesc:imghasalt'] = 'De alt (alternatieve) tekst voor afbeeldingen mag niet ontbreken bij afbeeldingselementen, tenzij die echt decoratief zijn en geen betekenis hebben.';
$string['checkdesc:imgwithmaphasusemap'] = 'Afbeeldingen met aanklikbare zones moeten overeenkomstige "usemap" en "map" -elementen hebben.';
$string['checkdesc:legendtextnotempty'] = '"Legend"-elementen die voor de titel van "fieldset"-elementen gebruikt worden, moeten tekst bevatten.';
$string['checkdesc:marqueeisnotused'] = 'Marquee-elementen (automatisch scrollen) zijn niet toegankelijke en zouden niet gebruikt mogen worden.';
$string['checkdesc:noheadings'] = 'Geen gebruik maken van koppen maakt inhoud minder gestructureerd en moeilijker om te lezen.';
$string['checkdesc:objectmusthaveembed'] = '"Object"-elementen (voor het invoegen van externe bronnen) moeten de bijhorende "embed"-elementen bevatten.';
$string['checkdesc:objectmusthavetitle'] = '"Object"-elementen (voor het invoegen van externe bronnen) moeten de bijhorende "title"-beschrijvingen bevatten.';
$string['checkdesc:objectmusthavevalidtitle'] = '"Object"-elementen (voor het invoegen van externe bronnen) moeten de bijhorende "titels" bevatten met tekst.';
$string['checkdesc:strikeisnotused'] = '"Strike"-elementen (doorhalen) worden beter niet gebruikt; je kunt beter "del" (verwijderd) gebruiken.';
$string['checkdesc:tabledatashouldhaveth'] = 'Tabellen zouden tabelkoppen moeten hebben.';
$string['checkdesc:tablesummarydoesnotduplicatecaption'] = 'Tabel "summary" en "caption" zouden niet identiek mogen zijn.';
$string['checkdesc:tabletdshouldnotmerge'] = 'Tabellen kunnen beter geen samengevoegde cellen bevatten.';
$string['checkdesc:tablethshouldhavescope'] = 'Tabelrijen of kolommen zouden het "scope"- element moeten bevatten om rijen en kolommen aan elke cel te koppelen.';
$string['checkidvalidation'] = 'Taak om te controleren op ongeldige checkID\'s';
$string['checkscompleted'] = 'Voltooide controles: {$a}';
$string['checktype'] = 'Controleer groep';
$string['checktype:form'] = 'Formulier';
$string['checktype:image'] = 'Afbeelding';
$string['checktype:layout'] = 'Lay-out';
$string['checktype:link'] = 'Link';
$string['checktype:media'] = 'Media';
$string['checktype:table'] = 'Tabel';
$string['checktype:text'] = 'Tekst';
$string['checktyperesults:pluginname'] = 'Inhoudstypes rapport toegankelijkheidstool';
$string['checktyperesults:toolname'] = 'Inhoudstypes samenvatting';
$string['checktyperesults:toolshortname'] = 'Inhoudstypes';
$string['cmpercent'] = 'Algemeen percentage activiteiten';
$string['cmpercenterrors'] = 'Algemeen percentage fouten';
$string['cmpercenttitle'] = 'Algemeen % activiteiten tegenover fouten';
$string['confirmationmessage'] = 'Deze cursus is ingepland voor analyse. De analyse zal ten vroegste klaar zijn tegen {$a}.';
$string['contactadmin'] = 'Neem contact op met je systeembeheerder om de registratie te voltooien.';
$string['contactus'] = 'Contacteer ons';
$string['contentfive'] = 'Herstel automatisch verouderde HTML-tags';
$string['contentfour'] = 'Zoek welke activiteiten de meeste toegankelijkheidsproblemen hebben om prioriteiten te kiezen.';
$string['contentone'] = 'Evalueer automatisch je cursusinhoud en beoordelingen voor toegankelijkheidsproblemen.';
$string['contentsix'] = 'Geef leraren tips om betere inhoud te maken.';
$string['contentthree'] = 'Geef je leerlingen inhoud in een toegankelijk formaat, zoals als audio, ePub en elektronische braille.';
$string['contenttwo'] = 'Bulk aanpassen van onduidelijke of ontbrekende tekst voor web links, afbeeldingsbeschrijvingen en ondertitels voor video.';
$string['contenttypeerrors'] = 'Totaalresultaten van het testen van activiteitsinhoud per cursus en per inhoudstype.';
$string['contentyperesults'] = 'Totaal gelukt/mislukt voor inhoudszones per cursus.';
$string['contextid'] = 'ContekstID';
$string['core_course'] = 'Cursus';
$string['core_question'] = 'Vragenpool';
$string['count'] = 'Aantal';
$string['country'] = 'Land';
$string['country_help'] = 'Land van de site';
$string['coursecount'] = 'Aantal cursussen';
$string['deletehistoricaldata'] = 'Verwijder historische controleresultaten';
$string['dependency'] = 'Afhankelijk van';
$string['emptycategory'] = 'Geen cursussen gevonden in categorie {$a}';
$string['emptytagcourses'] = 'Geen resultaten gevonden voor cursussen met de geconfigureerde tags';
$string['enableaccessibilitytools'] = 'Schakel toegankelijkheidstools in';
$string['enableaccessibilitytools_desc'] = 'De toegankelijkheidstoolkit helpt bij het zoeken naar toegankelijkheidsproblemen in cursussen.';
$string['error:nocoursespecified'] = 'Voor dit samenvattend rapport is een geldig cursus-ID vereist. Ga naar de toegankelijkheidstoolkit vanuit een cursus.';
$string['errorlink'] = 'Bewerkfout voor {$a}';
$string['errors'] = 'Fouten: {$a}';
$string['errors:pluginname'] = 'Foutenlijst toegankelijkheidstool';
$string['errors:toolname'] = 'Samenvatting foutenlijst';
$string['errors:toolshortname'] = 'Foutenlijst';
$string['eventanalysis_requested'] = 'Inhoudsanalyse gevraagd';
$string['eventanalysis_requesteddesc'] = 'Inhoudsanalyse werd gevraagd voor cursus {$a}.';
$string['eventreport_downloaded'] = 'Toegankelijkheidssamenvatting gedownload.';
$string['eventreport_downloadeddesc'] = 'Toegankelijkheidssamenvatting is gedownload voor cursus-ID {$a}';
$string['eventreport_viewed'] = 'Toegankelijkheidsrapport bekeken';
$string['eventreport_vieweddesc'] = 'Er is een toegankelijkheidsrapport bekeken voor cursus-ID {$a->course}, categorie-ID {$a->category}, tab {$a->tab}.';
$string['failed'] = 'Mislukt';
$string['failedcount'] = 'Mislukt: {$a}';
$string['footerheading'] = 'Voettekst';
$string['fullcachedone'] = 'Cache opnieuw laden uitschakelen';
$string['hashcorrect'] = 'De ingegeven code is juist.';
$string['hashincorrect'] = 'De ingegeven code is fout.';
$string['headingfive'] = 'HTML herstellingen';
$string['headingfour'] = 'Focus inspannigen';
$string['headingone'] = 'Evalueer inhoud';
$string['headingsix'] = 'Performantierapport';
$string['headingthree'] = 'Toegankelijke bestandsformaten';
$string['headingtwo'] = 'Remediëring';
$string['hideshow'] = 'Verberg/toon';
$string['icon:analytics-custom'] = 'Analytics-pictogram';
$string['icon:file-edit-custom'] = 'Bestandspictogram bewerken';
$string['icon:hands-helping-custom'] = 'Helpende handen pictogram';
$string['icon:search-plus-custom'] = 'Zoekpictogram';
$string['icon:tools-custom'] = 'Hulpprogramma pictogram';
$string['icon:wand-magic-custom'] = 'Toverstaf pictogram';
$string['inactive'] = 'De plugin is uitgeschakeld en kan niet gebruikt worden. Geef geldige registratiesleutels in en klik op "Activeer".';
$string['innercontextid'] = 'interne context-ID';
$string['installed'] = 'Plugin geïnstalleerd';
$string['installedcli'] = 'Plugin geïnstalleerd via commandline';
$string['installeddescription'] = 'De plugin is geïnstalleerd, herleiden naar activatieformulier.';
$string['invalidaccessibilitytool'] = 'Ongeldige toegankelijkheid sub-plugin gevraagd.';
$string['invalidcategoryid'] = 'Ongeldige categorie, controleer je input.';
$string['invalidcourseid'] = 'Ongeldige cursus, controleer je input.';
$string['invalidlinkphrases'] = 'klik hier|klik|hier|meer|meer hier|meer info|info hier|informatie|informatie hier|lees meer|lees meer hier|lees hier meer|verdere info|meer details|meer details hier';
$string['language'] = 'Taal';
$string['language_help'] = 'Site-taal';
$string['messageprovider:warningcheckid'] = 'Waarschuwing voor ongeldige checkID\'s';
$string['mobileservice'] = 'Mobiele diensten ingeschakeld ({$a})';
$string['module'] = 'Module';
$string['modulename'] = 'Naam';
$string['moreinfo'] = 'Meer informatie';
$string['noerrorsfound'] = 'Er zijn geen veel voorkomende toegankelijkheidsfouten gevonden in jouw zoekparameters. Proficiat!';
$string['norecords'] = 'Geen relevante records gevonden in jouw zoekparameters.';
$string['notregistered'] = 'Je toegankelijkheids-toolkit moet geregistreerd worden.';
$string['notvalidated'] = 'Je toegankelijkheids-toolkit werkt terwijl die gevalideerd wordt.';
$string['numcourses'] = 'Aantal cursussen ({$a})';
$string['numfactivities'] = 'Aantal activiteiten ({$a})';
$string['numfiles'] = 'Aantal bestanden ({$a})';
$string['numinstances'] = 'Aantal instanties ({$a})';
$string['numusers'] = 'Aantal gebruikers ({$a})';
$string['pagedesc:checktype'] = '<p>Om de resultaten van de verschillende uitgevoerde controles samen te vatten en te analyseren, groeperen we deze controles in verschillende inhoudstypes. Zo zullen alle afbeeldingsgerelateerde controles in de afbeeldings-inhoudsgroep terecht komen, alle lay-out gerelateerde toegankelijkheidscontroles in de lay-out-inhoudsgroep en zo verder.</p><p>Activiteiten worden mee opgenomen ofwel als activiteiten, bronnen of inhoudszones gerelateerd aan de cursussen.</p><p>De inhoudstype-kaart toont de opsplitsing van de fouten per inhoudsgroep: afbeelding, lay-out, link, media, tabel en tekst.</p>';
$string['pagedesc:pertarget'] = '<p>Om de resultaten van de verschillende uitgevoerde controles samen te vatten en te analyseren per activiteit, groeperen we deze controles volgens de verschillende gedetecteerde activiteiten.</p><p>Activiteiten worden mee opgenomen ofwel als activiteiten, bronnen of inhoudszones gerelateerd aan de cursussen. Elke activiteit zonder gevonden fouten wordt als geslaagd aanzien, elke activiteit met één of meer gevonden fouten wordt als mislukt beschouwd. De verhouding geslaagd tot mislukt wordt dan getoond.</p><p>De activiteitsopsplitsingskaart toont de verhouding van geslaagde tot mislukte instanteis in totaal, per activiteit, zoals opdracht, cursus, label enz.</p>';
$string['pagedesctitle:checktype'] = 'Inhoudstypes uitgelegd';
$string['pagedesctitle:pertarget'] = 'Activiteit opdelen uitgelegd';
$string['passed'] = 'Geslaagd';
$string['passedcount'] = 'Geslaagd: {$a}';
$string['passrate'] = 'Slaagcijfer {$a}%';
$string['pdf:filename'] = 'Brickfield_samenvattingsrapport_cursus_ID-{$a}';
$string['percheckerrors'] = 'Aantal specifieke testen en fouten per controle per cursus.';
$string['perpage'] = 'Aantal te tonen items per pagina';
$string['pluginname'] = 'Toegankelijkheids-toolkit';
$string['printable:downloadpdf'] = 'Download PDF';
$string['printable:pluginname'] = 'Samenvattend toegankelijkheidsrapport';
$string['printable:printreport'] = 'Afdrukbaar rapport';
$string['printable:toolname'] = 'Samenvattingsrapport';
$string['printable:toolshortname'] = 'Samenvattingsrapport';
$string['privacy:metadata'] = 'De plugin voor het toegankelijkheidscontrolerapport bewaart geen persoonlijke gegevens.';
$string['processanalysisrequests'] = 'Verwerk aanvragen inhoudsanalyse';
$string['registernow'] = 'Registreer nu.';
$string['registration'] = 'Registratieformulier';
$string['registrationinfo'] = '<p>Na dit registratieproces kun je de Brickfield toegankelijkheidstoolkit starter-versie voor jouw geregistreerde Moodle-site gebruiken.</p><p>Dit gebruik is onderworpen aan de <a href="{$a}" target="_blank">Brickfield Education Labs terms and conditions (opent in nieuw venster)</a> waar je akkoord mee gaat door dit product te gebruiken.</p>';
$string['release'] = 'Moodle-versie ({$a})';
$string['remaining'] = '({$a} fouten blijven over)';
$string['response:0'] = 'Deze URL verwijst nergens naar.';
$string['response:404'] = 'Deze URL-pagina is niet gevonden';
$string['schedule:blocknotscheduled'] = '<p>Deze cursus is niet ingepland voor analyse om algemene toegankelijkheidsproblemen te vinden.</p>';
$string['schedule:notscheduled'] = '<p>Deze cursus is nog niet ingepland om onderzocht te worden op toegankelijkheidsproblemen.</p><p>Door te klikken op de "Stuur in voor analyse"-knop bevestig je dat je al je relevante HTML cursusinhoud, zoals cursus sectiebeschrijvingen, activiteitsbeschrijvingen, vragen, pagina\'s enz. wil inplannen om te analyseren.</p><p>Deze analyse zal meerdere toegankelijkheidscontrole\'s uitvoeren op de HTML-inhoud van je cursus en die resultaten zullen dan getoond worden op de reportagepagina\'s van de toeganklijkeheids-toolkit. De analyse zal op de achtergrond uitgevoerd worden door een geplande taak. Wanneer die klaar is hangt af van de starttijd van de taak en hoe vaak die taak loopt.</p>';
$string['schedule:requestanalysis'] = 'Insturen voor analyse';
$string['schedule:scheduled'] = 'Deze cursus is ingepland voor analyse.';
$string['schedule:sitenotscheduled'] = '<p>De globale (cursus onafhankleiljke) inhoud is nog niet ingepland om onderzocht te worden op toegankelijkheidsproblemen.</p><p>Door te klikken op de "Stuur in voor analyse"-knop bevestig je dat je al je relevante globale (cursus onafhankelijke HTML wil inplannen om te analyseren.</p><p>Deze analyse zal meerdere toegankelijkheidscontrole\'s uitvoeren op deze inhoud en die resultaten zullen dan getoond worden op de reportagepagina\'s van de toegankelijkheids-toolkit. De analyse zal op de achtergrond uitgevoerd worden door een geplande taak. Wanneer die klaar is hangt af van de starttijd van de taak en hoe vaak die taak loopt.</p>';
$string['schedule:sitescheduled'] = 'De globale (cursusonafhankelijke) inhoud is ingepland voor analyse.';
$string['secretkey'] = 'API-sleutel';
$string['secretkey_help'] = 'Deze code krijg je via e-mail na registratie.';
$string['sendfollowinginfo'] = '<p>Volgende informatie zal periodiek verstuurd worden enkel om statistieken bij te houden. De gegevens zullen niet openbaar gemaakt worden via een centrale lijst</p> {$a}';
$string['settings'] = 'Toegankelijkheids-toolkit instellingen';
$string['sitehash'] = 'Geheime sleutel';
$string['sitehash_help'] = 'De code wordt na registratie via e-mail ontvangen.';
$string['taberrors'] = 'Controleer op fouten';
$string['targetavetitle'] = 'Gemiddeld aantal fouten per activiteit';
$string['targetpercentage'] = 'Percentage van instanties ok/niet ok per activiteit';
$string['targetratio'] = 'Ratio activiteiten ok';
$string['tblcheck'] = 'Controle';
$string['tblcheckexample'] = 'Voorbeeld';
$string['tblcheckfailed'] = 'Controle mislukt';
$string['tblchecksummary'] = 'Samenvatting';
$string['tbledit'] = 'Bewerk';
$string['tblerrorcount'] = 'Fouten';
$string['tblhtmlcode'] = 'Bestaande HTML-code';
$string['tblinstance'] = 'Instantie';
$string['tblline'] = 'Lijn';
$string['tbloverallpercentage'] = 'Algemene fouten %';
$string['tblpercentage'] = 'Percentage';
$string['tblpreview'] = 'Voorbeeld';
$string['tbltarget'] = 'Activiteit';
$string['tblupdateto'] = 'Updaten naar';
$string['titleactivityresultsall'] = 'Resultaten per activiteit: alle gecontroleerde cursussen ({$a->count} courses)';
$string['titleactivityresultspartial'] = 'Resultaten per activiteit: cursus {$a->name}';
$string['titleall'] = 'Foutendetails: alle gecontroleerde cursussen ({$a->count} courses)';
$string['titlechecktyperesultsall'] = 'Resultaten per inhoudstype: alle gecontroleerde cursussen ({$a->count} courses)';
$string['titlechecktyperesultspartial'] = 'Resultaten per inhoudstype: cursus {$a->name}';
$string['titleerrorsall'] = 'Foutendetails; alle gecontroleerde cursussen ({$a->count} courses)';
$string['titleerrorscount'] = 'Foutendetails:  (toont de eerste {$a} fouten)';
$string['titleerrorspartial'] = 'Foutendetails: cursus {$a->name}';
$string['titlepartial'] = 'Foutendetails: cursus {$a->name}';
$string['titleprintableall'] = 'Cursus {$a->name}';
$string['titleprintablepartial'] = 'Cursus {$a->name}';
$string['tools'] = 'Rapporten';
$string['toperrors'] = 'Top fouten';
$string['toptargets'] = 'Mislukte activiteiten';
$string['totalactivities'] = 'Totaal aantal activiteiten';
$string['totalactivitiescount'] = 'Totaal aantal activiteiten: {$a}';
$string['totalareas'] = 'Totaal aantal zones';
$string['totalerrors'] = 'Totaal aantal fouten';
$string['totalgrouperrors'] = 'Totaal (som- fouten per inhoudstype';
$string['updatesummarydata'] = 'Site samenvattingsgegevens aanpassen';
$string['usersmobileregistered'] = 'Aantal gebruikers met geregistreerde mobiele toestellen  ({$a})';
$string['validationerror'] = 'Validatie van de registratiesleutel is mislukt. Controleer of je geregistreerde site-URL en je sleutels juist zijn.';
$string['warningcheckidbody'] = 'Er is een probleem met een Brickfield-controle die actief is, maar niet in de databank staat. Onderzoek dit aub.';
$string['warningcheckidsubject'] = 'Brickfield toolkit controle ID waarschuwing';
