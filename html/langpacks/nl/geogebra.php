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
 * Strings for component 'geogebra', language 'nl', version '4.5'.
 *
 * @package     geogebra
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclosed'] = 'Deze activiteit is gesloten';
$string['activitynotopened'] = 'Deze activiteit is nog niet beschikbaar';
$string['attempt'] = 'Poging';
$string['attempts'] = 'Pogingen';
$string['attemptsremaining'] = 'Resterende pogingen voor deze activiteit:';
$string['autograde'] = 'Activiteit zelf beoordelen';
$string['availabledate'] = 'Beschikbaar vanaf';
$string['average'] = 'Gemiddelde';
$string['choosescripttype'] = 'Selecteer script type';
$string['comment'] = 'Opmerking';
$string['contentheader'] = 'Inhoud';
$string['coursewithoutstudents'] = 'Cursus zonder leerlingen';
$string['datestudent'] = 'Laatst gewijzigd (inzending)';
$string['dateteacher'] = 'Laatst gewijzigd (cijfer)';
$string['deleteallattempts'] = 'Alle pogingen wissen';
$string['description'] = 'Beschrijving';
$string['discardchanges'] = 'Wijzigingen verwerpen en terugkeren';
$string['duedate'] = 'Uiterste inleverdatum';
$string['duration'] = 'Duur';
$string['enableLabelDrags'] = 'Labels slepen inschakelen';
$string['enableRightClick'] = 'Rechtermuisklik inschakelen';
$string['errorattempt'] = 'Fout: poging kon niet worden bewaard.';
$string['event_course_module_viewed'] = 'Cursusmodule bekeken';
$string['event_instances_list_viewed'] = 'Lijst instanties bekeken';
$string['expired'] = 'Helaas is deze activiteit op {$a} gesloten en niet langer beschikbaar';
$string['extractedfromggb'] = 'bestanden uitgepakt uit ggb';
$string['filename'] = 'Bestandsnaam';
$string['filenotfound'] = 'Gespecificeerd bestand bestaat niet';
$string['filetype'] = 'Type';
$string['filetype_help'] = 'Deze instelling bepaalt hoe de GeoGebra activiteit wordt getoond in de cursus. Er zijn 2 opties:

* Geüploade GeoGebra - hiermee kan een geldig ".ggb" bestand worden gekozen in de bestandenkiezer.
* Externe URL - hiermee kan een URL worden ingevoerd. Let op: De URL moet beginnen met http(s) of www en dient een geldig ".ggb" bestand te bevatten.';
$string['filetypeexternal'] = 'Externe URL';
$string['filetypelocal'] = 'Geüpload bestand';
$string['firstattempt'] = 'Eerste poging';
$string['for'] = 'voor';
$string['functionalityoptionsgrp'] = 'Functionaliteit';
$string['geogebra:addinstance'] = 'GeoGebra toevoegen';
$string['geogebra:grade'] = 'GeoGebra beoordelen';
$string['geogebra:submit'] = 'GeoGebra insturen';
$string['geogebra:view'] = 'GeoGebra bekijken';
$string['geogebrafile'] = 'GeoGebra bestand';
$string['geogebrafile_help'] = 'Het .ggb bestand';
$string['geogebraurl'] = 'URL';
$string['geogebraurl_help'] = 'Met deze instelling ingeschakeld kan er een URL voor het GeoGebra bestand worden ingevoerd, in plaats van een bestand te kiezen via de bestandenkiezer.';
$string['grade'] = 'Cijfer';
$string['gradeit'] = 'Cijfer';
$string['grademethod'] = 'Beoordelingsmethode';
$string['height'] = 'Hoogte';
$string['highestattempt'] = 'Hoogste cijfer';
$string['httpnotallowed'] = 'Op het moment is het niet toegestaan externe bestanden te gebruiken';
$string['interfaceoptionsgrp'] = 'Gebruikersinterface';
$string['invalidgeogebrafile'] = 'Ongeldige GeoGebra opgegeven. Deze moet de bestandsextensie ".ggb" hebben.';
$string['invalidurl'] = 'Ongeldige URL opgegeven. Deze moet beginnen met http(s) en moet een geldig ".ggb" bestand bevatten.';
$string['language'] = 'Taal';
$string['lastattempt'] = 'Laatste poging';
$string['lastattemptremaining'] = 'Dit is je laatste poging voor deze activiteit';
$string['lastmodifiedgrade'] = 'Laatst gewijzigd (cijfer)';
$string['lastmodifiedsubmission'] = 'Laatst gewijzigd (inzending)';
$string['lowestattempt'] = 'Laagste poging';
$string['manualgrade'] = 'Is een handmatig cijfer?';
$string['maxattempts'] = 'Maximum aantal pogingen';
$string['modulename'] = 'GeoGebra';
$string['modulename_help'] = '<p><a href="http://www.geogebra.org" target="_blank">GeoGebra</a> is een gratis, multi-platform, dynamische wiskunde-software voor alle onderwijsniveaus, waarin geometrie, algebra, tabellen, grafen, statistiek en rekenen zijn samengevoegd in een gemakkelijk te gebruiken applicatie.
</p>
<p>Hiervoor heeft het <a href="http://www.gencat.cat/ensenyament/" target="_blank">Catalaanse ministerie van Onderwijs</a> in samenwerking met de <a href="http://acgeogebra.cat/" target="_blank">Catalaanse Associatie voor GeoGebra</a> (ACG) en het GeoGebra ontwikkelteam deze module geïmplementeerd waarmee GeoGebra activiteiten in Moodle kunnen worden toegevoegd. De belangrijkste kenmerken zijn:
<ul>
<li>Eenvoudig GeoGebra activiteiten toevoegen in een Moodle cursus.</li>
<li>Faciliteert opvolgen van leerlingen door score, datum, duur en constructie van iedere poging van gebruikers bij te houden.</li>
<li>Leerlingen kunnen de toestand van de activiteiten opslaan om er later mee verder te gaan.</li>
</ul>
</p>';
$string['modulenameplural'] = 'GeoGebra';
$string['msg_noattempts'] = 'Je hebt deze activiteit een maximaal aantal keren gedaan';
$string['msg_nosessions'] = 'Deze GeoGebra activiteit heeft nog geen sessie';
$string['name'] = 'Naam';
$string['noattempts'] = '-';
$string['nograding'] = 'Geen cijfer';
$string['nomoreattempts'] = 'Er zijn geen resterende pogingen voor deze activiteit';
$string['notopenyet'] = 'Helaas is deze activiteit niet beschikbaar tot {$a}';
$string['pluginadministration'] = 'Beheer GeoGebra';
$string['pluginname'] = 'GeoGebra';
$string['preview_geogebra'] = 'GeoGebra activiteit voorvertonen';
$string['previewtab'] = 'Voorvertoning';
$string['privacy'] = 'Privacy voor resultaten';
$string['privacy:metadata:geogebra_attempts'] = 'Informatie over de resultaten in pogingen van de gebruiker voor een bepaalde GeoGebra activiteit';
$string['privacy:metadata:geogebra_attempts:datestudent'] = 'De datum/tijd wanneer de leerling de poging beëindigde';
$string['privacy:metadata:geogebra_attempts:dateteacher'] = 'De datum/tijd wanneer de leraar de poging beëindigde';
$string['privacy:metadata:geogebra_attempts:finished'] = 'De datum/tijd wanneer de gebruiker de poging beëindigde';
$string['privacy:metadata:geogebra_attempts:geogebra'] = 'Het ID van de gekozen activiteit';
$string['privacy:metadata:geogebra_attempts:gradecomment'] = 'De opmerking bij het cijfer voor de poging van de GeoGebra activiteit.';
$string['privacy:metadata:geogebra_attempts:userid'] = 'Het ID van de gebruiker die deze GeoGebra activiteit beantwoordt';
$string['privacy:metadata:geogebra_attempts:vars'] = 'Het ID van de optie die de gebruiker heeft geselecteerd.';
$string['redirecttocourse'] = 'De activiteit is bewaard. Teruggaan naar de cursusvoorpagina';
$string['report'] = 'Rapport van';
$string['results'] = 'Resultaten';
$string['resultstab'] = 'Resultaten';
$string['resumeattempt'] = 'Niet beëindigde poging hervatten';
$string['review'] = 'Nakijken van';
$string['reviewtab'] = 'Nakijken';
$string['savechanges'] = 'Bewaar wijzigingen';
$string['savewithoutsubmitting'] = 'Bewaren zonder insturen';
$string['settings'] = 'Instellingen';
$string['showAlgebraInput'] = 'Invoerbalk tonen';
$string['showMenuBar'] = 'Menubalk tonen';
$string['showResetIcon'] = 'Icoon voor resetten constructie tonen';
$string['showToolBar'] = 'Toolbar tonen';
$string['showToolBarHelp'] = 'Hulp voor toolbar tonen';
$string['showsubmit'] = 'Instuurknop tonen';
$string['status'] = 'Estat';
$string['submitandfinish'] = 'Insturen en beëindigen';
$string['timing'] = 'Tijd';
$string['total'] = 'Totaal';
$string['unfinished'] = 'Niet beëindigd';
$string['ungraded'] = 'Niet beoordeeld';
$string['unlimitedattempts'] = 'Onbeperkt aantal pogingen voor deze activiteit';
$string['urledit'] = 'GeoGebra bestand';
$string['urledit_help'] = 'Het ".ggb" bestand waar je de GeoGebra activiteit kunt vinden.';
$string['useBrowserForJS'] = 'Gebruik JavaScript vanuit:';
$string['useBrowserForJS_geogebra'] = 'GeoGebra bestand (niet waar)';
$string['useBrowserForJS_html'] = 'HTML (waar)';
$string['view'] = 'Bekijken';
$string['viewattempt'] = 'Bekijken';
$string['viewattempts'] = 'Pogingen bekijken';
$string['viewattempttab'] = 'Poging bekijken';
$string['viewtab'] = 'Bekijken';
$string['weight'] = 'Gewicht';
$string['width'] = 'Breedte';
