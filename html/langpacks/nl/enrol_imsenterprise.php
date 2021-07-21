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
 * Strings for component 'enrol_imsenterprise', language 'nl', version '3.11'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'Als je instellingen bewaard zijn, wil je misschien';
$string['allowunenrol'] = 'Laat IMS data toe om leraars en leerlingen <strong>af te melden</strong>';
$string['allowunenrol_desc'] = 'Indien ingeschakeld, zullen aanmeldingen in cursussen verwijderd worden wanneer dit opgegeven is in de Enterprise Data';
$string['basicsettings'] = 'Basisinstellingen';
$string['categoryidnumber'] = 'Categorie ID-nummer toestaan';
$string['categoryidnumber_desc'] = 'Indien ingeschakeld zal IMS Enterprice een categorie maken met een ID-nummer';
$string['categoryseparator'] = 'Teken voor categoriescheiding';
$string['categoryseparator_desc'] = 'Vereist wanneer "categorienummer" ingeschakeld is. een teken om de categorienaam en het ID-nummer van elkaar te scheiden';
$string['coursesettings'] = 'Data opties van de cursus';
$string['createnewcategories'] = 'Maak nieuwe (verborgen) cursuscategorieën indien niet gevonden in Moodle';
$string['createnewcategories_desc'] = 'Als het  &lt;org&gt;&lt;orgunit&gt;  element in de binnenkomende gegevens van een cursus zit, dan zal de inhoud daarvan gebruikt worden om een categorie te kiezen als een cursus volledig van scratch opgebouwd wordt. De plugin zal geen bestaande cursussen in andere categorieën zetten.

Als er geen categorie met de gewenste naam bestaat, dan zal er een verborgencategorie aangemaakt worden.';
$string['createnewcourses'] = 'Maak nieuwe (verborgen) cursussen indien niet gevonden in Moodle';
$string['createnewcourses_desc'] = '<p>De IMS Enterprise aanmeldingsplugin kan nieuwe cursussen maken als die ze vind in de IMS-gegevens en niet in de databank van Moodle en als je de optie ingeschakeld hebt.</p>

<p>Cursussen worden eerst gezocht op hun "IDnummer" - een alfanummeriek veld in de course tabel van Moodle, dat gebruikt kan worden om de cursus te identificeren in een Leerling Informatie Systeem bijvoorbeeld. Als dat niet gevonden wordt, dan wordt de course tabel doorzocht naar de "Korte beschrijving", die in Moodle gebruikt wordt voor het broodkruimelpad enz. (Bijde velden kunnen identiek zijn) Enkel wanneer dat zoeken mislukt, kan de plugin optioneel een nieuwe cursus creëren.</p>
<p>Alle nieuw gegenereerde cursussen worden VERBORGEN gecreëerd. Dit om te verhinderen dat leerlingen ronddwalen in een lege cursus waarvan de leraar misschien zelfs niet weet dat die bestaat.</p>';
$string['createnewusers'] = 'Maak gebruikersaccounts voor gebruikers die nog niet geregistreerd zijn in Moodle';
$string['createnewusers_desc'] = '<p>IMS Enterprise aanmeldingsgegevens beschrijven een set gebruikers. Als deze instelling ingeschakeld wordt, dan kunnen accounts die niet in de databank van Moodle gevonden worden, automatisch aangemaakt worden.</p>

<p>Gebruikers worden eerst gezocht op "idnummer", en dan op Moodle gebruikersnaam.</p>


<p>wachtwoorden woden niet geïmporteerd door de IMS Enterprise plugin. We raden aan om Moodle\'s authenticatieplugins te gebruiken om gebruikers te authenticeren</p>';
$string['cronfrequency'] = 'Frequentie van verwerken';
$string['deleteusers'] = 'Verwijder gebruikersaccounts indien gespecifieerd in IMS data';
$string['deleteusers_desc'] = '<p>Met IMS Enterprise aanmeldingsgegevens kun je het verwijderen van gebruikersaccounts aangeven (als de "recstatus"-vlag op 3 gezet wordt, wat staat voor het verwijderen van een account), als deze instelling aangezet wordt.</p>

<p>Zoals het in Moodle standaard is, wordt de gebruikersrecord niet verwijderd, maar wordt er een vlag gezet om aan te geven dat de account verwijderd is.</p>';
$string['doitnow'] = 'Doe nu een IMS Enterprise import';
$string['emptyattribute'] = 'Laat het leeg';
$string['filelockedmail'] = 'Het tekstbestand dat je gebruikt voor je IMS-bestand gebaseerde aanmeldingen ({$a}) kan door het cronproces niet verwijderd worden. Dit betekent gewoonlijk dat de rechten van dat bestand slecht ingesteld staan. Zet de rechten zo dat Moodle het bestand kan verwijderen, anders zal het herhaaldelijk verwerkt proberen te worden.';
$string['filelockedmailsubject'] = 'Belangrijke fout: Aanmeldingsbestand';
$string['fixcasepersonalnames'] = 'Begin namen met Hoofdletters';
$string['fixcaseusernames'] = 'Wijzig gebruikersnamen naar kleine letters';
$string['ignore'] = 'Negeer';
$string['importimsfile'] = 'Importeer IMS Enterprise bestand';
$string['imsenterprise:config'] = 'Configureer IMS Enterprise aanmeldingsinstanties';
$string['imsenterprisecrontask'] = 'Verwerken aanmeldingsbestand';
$string['imsrolesdescription'] = 'De IMS Enterprise specificatie bevat 8 verschillende rollen. Geef aan hoe je ze in Moodle wil toewijzen en eventueel welke genegeerd mogen worden.';
$string['location'] = 'Bestandslocatie';
$string['logtolocation'] = 'Locatie logbestand (niets invullen voor geen logbestand)';
$string['mailadmins'] = 'Waarschuw beheerder via e-mail';
$string['mailusers'] = 'Waarschuw gebruikers via e-mail';
$string['messageprovider:imsenterprise_enrolment'] = 'Aanmeldingsberichten IMS-Enterprise';
$string['miscsettings'] = 'Diverse';
$string['nestedcategories'] = 'Geneste categorieën toestaan';
$string['nestedcategories_desc'] = 'Indien ingeschakeld zal IMS Enterprice geneste categorieën maken';
$string['pluginname'] = 'IMS Enterprise bestand';
$string['pluginname_desc'] = 'Via deze aanmeldingswijze zal er herhaaldelijk gezocht worden naar een speciaal opgemaakt tekstbestand op de plaats die je hier opgeeft. Het bestand moet voldoen aan de IMS Enterprise specificaties en moet personen, groep en lidmaatschap XML-elementen bevatten.';
$string['privacy:metadata'] = 'De IMS Enterprise bestand aanmeldingsplugin bewaart geen persoonlijke gegevens.';
$string['processphoto'] = 'Voeg een gebruikersfoto toe aan het profiel';
$string['processphotowarning'] = 'Waarschuwing: bewerken van afbeeldingen kan je server behoorlijk belasten. Aangeraden wordt om deze optie niet te gebruiken wanneer je grote aantallen leerlingen wil verwerken.';
$string['restricttarget'] = 'Verwerk alleen datea als volgend doel ie opgegeven';
$string['restricttarget_desc'] = '<p>Een IMS Enterprise data bestand kan voor meerdere doelen gemaakt worden, bijvoorbeeld verschillende  ELO\'s of verschillende andere systemen binnen een school of universiteit. Het is mogelijk om in het bestand te specifiëren dat de data voor één of meer doelsystemen opgesteld zijn door ze te noemen in &lt;target&gt; tags binnen de &lt;properties&gt; tag.</p>

<p>In de meeste gevallen moet je je geen zorgen hierover maken. Laat de config-instelling leeg en Moodle zal het gegevensbestand verwerken, of er nu een doel is opgegeven of niet.
Anders geef je de exacte naam op in de &lt;target&gt; tag.
</p>';
$string['roles'] = 'Rollen';
$string['settingfullname'] = 'IMS beschrijvingstag voor de volledige naam van de cursus';
$string['settingfullnamedescription'] = 'De volledige naam is een vereist cursusveld. Je moet de geselecteerde beschrijvings-tag definiëren in je IMS Enterprise-bestand';
$string['settingshortname'] = 'IMS beschrijvings-tag voor de korte cursusnaam';
$string['settingshortnamedescription'] = 'De korte naam is een vereist cursusveld, dus je moet de geselecteerde beschrijvingstag definiëren in je IMS Enterprise-bestand';
$string['settingsummary'] = 'IMS beschrijvingstag voor de cursussamenvatting';
$string['settingsummarydescription'] = 'Dit is een optioneel veld. Selecteer \'laat dit leeg" als je geen cursussamenvatting wil geven.';
$string['sourcedidfallback'] = 'Gebruik het \'sourcedid\' als gebruikersid als het \'gebruikersID\'-veld niet gevonden kan worden';
$string['sourcedidfallback_desc'] = 'IN IMS-gegevens stelt het veld  <sourcedid> de ID-code voor voor een persoon zoals gebruikt in het bronsysteem. Het veld <userid> is een apart veld dat de ID-code moet bevatten die de gebruiker nodig heeft om in te loggen. In veel gevallen zullen beide codes gelijk zijn, maar niet altijd.

Sommige leerlinginformatiesystemen kunnen geen veld <userid> leveren. Als dit het geval is, dan moet je deze instelling inschakelen om het veld <sourcedid> te gebruiken als Moodle gebruikersnaam. Als dit niet nodig is, schakel deze instelling dan niet in.';
$string['truncatecoursecodes'] = 'Verkort cursuscodes tot deze lengte';
$string['truncatecoursecodes_desc'] = '<p>In sommige situaties wil je misschien de cursuscodes afkorten tot een bepaalde lengte voor je ze verwerkt. Indien je dat wil, geeft je hier het aantal karakters op. Anders laat je dit tekstvak leeg en zal er niet afgekort worden.</p>';
$string['updatecourses'] = 'Cursussen aanpassen';
$string['updatecourses_desc'] = 'Indien ingeschakeld kan de IMS Enterprise aanmeldingsplugin de korte naam en de volledige naam van een cursus aanpassen (als de "recstatus"-vlag op 2 gezet is, wat staat voor een update).';
$string['updateusers'] = 'Gebruikersaccounts met specifieke IMS-gegevens aanpassen';
$string['updateusers_desc'] = 'Indien ingeschakeld kan IMS aanmeldgegevens wijzigingen uitvoeren aan gebruikersaccounts (als de "recstatus"-vlag op 2 gezet is, wat staat voor een update).';
$string['usecapitafix'] = 'Zet hier een vinkje als je Capita gebruikt (hun XML-formaat wijkt een klein beetje af)';
$string['usecapitafix_desc'] = '<p>Het leerlinggegevenssysteem door Capita gemaakt, heeft een kleine fout in zijn XML output. Als je Capita gebruikt, zou je deze optie moeten activeren - anders plaats je geen vinkje.</p>';
$string['usersettings'] = 'Opties voor gebruikersgegevens';
$string['zeroisnotruncation'] = '0 betekent niet verkorten';
