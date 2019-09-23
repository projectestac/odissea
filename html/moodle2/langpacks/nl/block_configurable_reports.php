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
 * Strings for component 'block_configurable_reports', language 'nl', branch 'MOODLE_36_STABLE'
 *
 * @package   block_configurable_reports
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Activiteitsberichten';
$string['activityview'] = 'Activiteitsweergaven';
$string['addreport'] = 'Voeg rapport toe';
$string['anyone'] = 'Iedereen';
$string['anyone_summary'] = 'Elke gebruiker in de cursus kan dit rapport bekijken';
$string['availablemarks'] = 'Beschikbare markeringen';
$string['average'] = 'Gemiddelde';
$string['badconditionexpr'] = 'Onjuiste voorwaarde';
$string['badsize'] = 'Onjuist formaat, deze moet in % of px zijn';
$string['badtablewidth'] = 'Onjuist breedte, deze moet in % of absolute waarde zijn';
$string['bar'] = 'Staaf';
$string['barsummary'] = 'Staafdiagram';
$string['blockname'] = 'Rapport op maat';
$string['calcs'] = 'Berekeningen';
$string['categories'] = 'Categorieën';
$string['categoryfield'] = 'Categorieveld';
$string['categoryfieldorder'] = 'Volgorde categorieveld';
$string['ccoursefield'] = 'Opmaak cursusveld';
$string['cellalign'] = 'Celuitlijning';
$string['cellsize'] = 'Celgrootte';
$string['cellwrap'] = 'Tekstterugloop';
$string['column'] = 'Kolom';
$string['columnandcellproperties'] = 'Kolom- en celeigenschappen';
$string['columncalculations'] = 'Kolomberekeningen';
$string['columns'] = 'Kolommen';
$string['comp_calcs'] = 'Berekeningen';
$string['comp_calcs_help'] = '<p>Hier kun je berekeningen voor kolommen toevoegen, bijvoorbeeld: het gemiddelde aantal gebruikers dat is ingeschreven voor cursussen</p>

<p>Meer ondersteuning: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_calculations'] = 'Berekeningen';
$string['comp_calculations_help'] = '<p>Hier kun je berekeningen voor kolommen toevoegen, bijvoorbeeld: het gemiddelde aantal gebruikers dat is ingeschreven voor cursussen</p>';
$string['comp_columns'] = 'Kolommen';
$string['comp_columns_help'] = '<p>Hier kun je de verschillende kolommen van je rapport kiezen, afhankelijk van het type rapport</p>

<p>Meer hulp: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_conditions'] = 'Voorwaarden';
$string['comp_conditions_help'] = '<p> Hier kun je de voorwaarden definiëren (bijvoorbeeld, alleen cursussen uit deze categorie, alleen gebruikers uit Nederland, enz.) </ p>

<p>Je kunt een logische uitdrukking toevoegen als je meer dan één voorwaarde gebruikt. </ p>

<p> Meer hulp: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_customsql'] = 'aangepaste SQL';
$string['comp_customsql_help'] = '<p>voeg een werkende SQL query toe. gebruik niet de moodle database prefix $CFG->prefix gebruik in de plaats hiervan de "prefix_" zonder aanhalingstekens</p>
<p>Voorbeeld: SELECT * FROM prefix_course</p>

<p>Je kan veel SQL rapportages vinden: <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">ad-hoc contributed reports</a></p>

<p>Een ge-update layout van de Moodle tabellen en hun gerelateerde verbindingen: <a href="https://docs.moodle.org/dev/Database_Schema" target="_blank">Database schema</a></p>

<p>Vermits dit blok Tim Hunt\'s CustomSQL Queries Reports ondersteunt, kan je elke query gebruiken.</p>

<p>Vergeet niet een "tijdfilter" toe te voegen als je rapportages met tijdsinstellingen gaat gebruiken. </p>

<p>Voor tijdfilters kijk hier: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Creating a SQL Report Tutorial</a></p>';
$string['comp_filters'] = 'Filters';
$string['comp_filters_help'] = '<p>Hier kan je kiezen welke filters worden getoond</p>

<p>Met een filter kan een gebruiker kolommen uit het rapport kiezen om de rapportresultaten te filteren</p>

<p>Voor het gebruik van filters als je rapporttype SQL is, zie: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Creating a SQL Report Tutorial</a></p>

<p>Meer hulp: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['componenthelp'] = 'Hulp bij dit onderdeel';
$string['comp_ordering'] = 'Sortering';
$string['comp_ordering_help'] = '<p>Hier kun je kiezen hoe je het rapport sorteert met behulp van velden en aanwijzingen</p>

<p>Meer hulp: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_permissions'] = 'Rechten';
$string['comp_permissions_help'] = '<p>Hier kun je kiezen wie een rapport kan bekijken. </ p>

<p>Je kan een logische uitdrukking toevoegen om de definitieve toestemming te berekenen als je meer dan één voorwaarde gebruikt. </ p>

<p>Meer hulp: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank"> Plugin documentation </a> </ p>';
$string['comp_plot'] = 'Teken';
$string['comp_plot_help'] = '<p>Hier kun je grafieken toevoegen aan je rapport op basis van de rapportkolommen en waarden </ p>

<p>Meer hulp: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank"> Plug-in documentatie </a> </ p>';
$string['comp_template'] = 'Sjabloon';
$string['comp_template_help'] = '<p>Je kan de lay-out van het rapport wijzigen door een sjabloon te maken </ p>

<p> Zie voor het maken van een sjabloon de joker-markeringen die je kunt gebruiken in de kop- en voettekst en voor elk rapportrecord met behulp van de helpknoppen of de informatie die op dezelfde pagina wordt weergegeven. </ p>

<p> Meer hulp: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank"> Plugin documentation </a> </ p>';
$string['conditionexpr'] = 'Voorwaarde';
$string['conditionexpr_conditions'] = 'Voorwaarde';
$string['conditionexpr_conditions_help'] = '<p>Je kunt voorwaarden combineren met een logische uitdrukking </p>

<p>Voer een geldige logische uitdrukking in met deze operatoren: and, or. </p>';
$string['conditionexprhelp'] = 'Voer een geldige voorwaarde in, bijvoorbeeld: (c1 en c2) of (c4 en c3)';
$string['conditionexpr_permissions'] = 'Voorwaarde';
$string['conditionexpr_permissions_help'] = '<p>Je kunt voorwaarden combineren met een logische uitdrukking </p>

<p>Voer een geldige logische uitdrukking in met deze operatoren: and, or. </p>';
$string['conditions'] = 'Voorwaarden';
$string['configurable_reports:addinstance'] = 'Voeg een nieuw configureerbaar rapportblok toe';
$string['configurable_reports:manageownreports'] = 'Beheer eigen rapporten';
$string['configurable_reports:managereports'] = 'Beheer rapporten';
$string['configurable_reports:managesqlreports'] = 'Beheer SQL-rapporten';
$string['configurable_reports:myaddinstance'] = 'Voeg een nieuw configureerbaar rapportblok toe aan Mijn Startpagina';
$string['configurable_reports:viewreports'] = 'Bekijk rapporten';
$string['confirmdeletereport'] = 'Weet je zeker dat je dit rapport wilt verwijderen?';
$string['coursecategories'] = 'Cursuscategoriefilter';
$string['coursecategory'] = 'Cursus in categorie';
$string['coursechild'] = 'Cursussen die onderdeel zijn van';
$string['coursededicationtime'] = 'Cursus toewijdingstijd';
$string['coursefield'] = 'Cursusveld';
$string['coursefieldorder'] = 'Cursusveldvolgorde';
$string['coursemodules'] = 'Cursusmodule';
$string['courseparent'] = 'Cursussen waarvan de bovenliggende cursus is';
$string['courses'] = 'Cursussen';
$string['coursestats'] = 'Cursusstatistieken';
$string['cron'] = 'Automatisch dagelijks uitvoeren';
$string['crondescription'] = 'Plan deze query zodat hij elke dag wordt uitgevoerd (\'s nachts)';
$string['cron_help'] = 'Plan deze query zodat hij elke dag wordt uitgevoerd (\'s nachts)';
$string['crrepository'] = 'Rapporten opslagplaats';
$string['crrepositoryinfo'] = 'Extern gedeelde opslagplaats met voorbeeldrapporten die volledig functioneel zijn (naam van eigenaar GitHub-account + slash + naam opslagplaats)';
$string['currentreportcourse'] = 'Actueel cursusverslag';
$string['currentreportcourse_summary'] = 'De cursus waar het rapport is gemaakt';
$string['currentuser'] = 'Huidige gebruiker';
$string['currentusercourses'] = 'Ingeschreven cursussen van huidige gebruiker';
$string['currentusercourses_summary'] = 'Een lijst van huidige gebruikers van de cursus (alleen in cursus zichtbaar)';
$string['currentuserfinalgrade'] = 'Uiteindelijke cijfer van de huidige gebruiker in de cursus';
$string['currentuserfinalgrade_summary'] = 'Deze kolom toont het eindcijfer van de huidige gebruiker in de rij-cursus';
$string['currentuser_summary'] = 'De gebruiker die dit rapport bekijkt';
$string['cuserfield'] = 'Gebruikersveldconditie';
$string['custom'] = 'Op maat';
$string['customdateformat'] = 'Vrije datumweergave';
$string['customsql'] = 'SQL op maat';
$string['datatables'] = 'DataTables JS library aanzetten';
$string['datatables_emptytable'] = 'Geen data beschikbaar in de tabel';
$string['datatables_first'] = 'Eerste';
$string['datatablesinfo'] = 'DataTables JS library (kolommen sorteren, vastgezette koppen, zoeken, paginering...)';
$string['datatables_info'] = 'Laat _START_ to _END_ of _TOTAL_ regels zien';
$string['datatables_infoempty'] = 'Laat 0 tot 0 van 0 regels zien';
$string['datatables_infofiltered'] = '(gefilterd van _MAX_ total entries)';
$string['datatables_last'] = 'Laatste';
$string['datatables_lengthmenu'] = 'Laat _MENU_ regels zien';
$string['datatables_loadingrecords'] = 'Laden....';
$string['datatables_next'] = 'Volgende';
$string['datatables_previous'] = 'Vorige';
$string['datatables_processing'] = 'Verwerken....';
$string['datatables_search'] = 'Zoeken:';
$string['datatables_sortascending'] = ': activeer om de kolom oplopend te sorteren';
$string['datatables_sortdescending'] = ': activeer om de kolom aflopend te sorteren';
$string['datatables_zerorecords'] = 'Geen regels gevonden';
$string['date'] = 'Datum';
$string['dateformat'] = 'Datumformat';
$string['dbhost'] = 'DB host';
$string['dbhostinfo'] = 'Externe database hostnaam (waarop we onze SQL-query\'s uitvoeren)';
$string['dbname'] = 'DB naam';
$string['dbnameinfo'] = 'Externe databasenaam (waarop we onze SQL-query\'s zullen uitvoeren)';
$string['dbpass'] = 'DB wachtwoord';
$string['dbpassinfo'] = 'Wachtwoord externe database (voor bovenstaande gebruikersnaam)';
$string['dbuser'] = 'DB gebruikersnaam';
$string['dbuserinfo'] = 'Gebruikersnaam externe database (moet beschikken over SELECT rechten in de bovengenoemd database)';
$string['decimals'] = 'Aantal decimalen';
$string['direction'] = 'Richting';
$string['disabled'] = 'Uitgeschakeld';
$string['displayglobalreports'] = 'Laat algemene rapporten zien';
$string['displayreportslist'] = 'Toon de rapportenlijst in het blok';
$string['donotshowtime'] = 'Geen datuminformatie weergeven';
$string['download'] = 'Download';
$string['downloadreport'] = 'Download rapport';
$string['email_message'] = 'Bericht';
$string['email_send'] = 'Verzend';
$string['email_subject'] = 'Onderwerp';
$string['enabled'] = 'Aanzetten';
$string['enableglobal'] = 'Dit is een globaal rapport (toegankelijk vanuit elke cursus)';
$string['enablejsordering'] = 'JavaScript-sortering inschakelen';
$string['enablejspagination'] = 'JavaScript-paginering inschakelen';
$string['endtime'] = 'Einddatum';
$string['enrolledstudents'] = 'Ingeschreven leerlingen';
$string['error_field'] = 'Veld niet toegestaan';
$string['error_operator'] = 'Oparator niet toegestaan';
$string['error_value_expected_integer'] = 'Verwachtte waarde';
$string['excludedeletedusers'] = 'Verwijderde gebruikers uitsluiten (alleen voor SQL-rapporten)';
$string['executeat'] = 'Uitvoeren op';
$string['executeatinfo'] = 'Moodle CRON voert geplande SQL-query\'s uit na de geselecteerde tijd. Eenmaal in de 24 uur';
$string['export_csv'] = 'Exporteer in CSV formaat';
$string['export_json'] = 'Exporteer in JSON formaat';
$string['export_ods'] = 'Exporteer in ODS formaat';
$string['exportoptions'] = 'Exporteeropties';
$string['exportreport'] = 'Exporteer rapport';
$string['export_xls'] = 'Exporteer in XLS formaat';
$string['fcoursefield'] = 'Cursusveld filter';
$string['field'] = 'Veld';
$string['filter'] = 'Filter';
$string['filter_all'] = 'Alles';
$string['filter_apply'] = 'Toepassen';
$string['filtercategories'] = 'Filtercategorieën';
$string['filtercategories_summary'] = 'Filteren op categorie';
$string['filtercoursecategories'] = 'Cursuscategorie filter';
$string['filtercoursecategories_summary'] = 'Filter cursussen op basis van alle bovenliggende categorie';
$string['filtercoursemodules'] = 'Cursusmodule';
$string['filtercoursemodules_summary'] = 'Filter cursusmodule';
$string['filtercourses'] = 'Cursus';
$string['filtercourses_summary'] = 'Dit filter toont een lijst met cursussen. Er kan slechts één cursus tegelijkertijd worden geselecteerd';
$string['filterenrolledstudents'] = 'Ingeschreven cursisten';
$string['filterenrolledstudents_summary'] = 'Filter een gebruiker (op id) van ingeschreven cursisten';
$string['filterrole'] = 'rol';
$string['filterrole_summary'] = 'Filter systeemrollen (leraar, leerling, ....)';
$string['filters'] = 'Filters';
$string['filter_searchtext'] = 'Zoektekst';
$string['filter_searchtext_summary'] = 'Vrije tekstfilters';
$string['filtersemester'] = 'Semester (Hebreeuws)';
$string['filtersemester_list'] = 'Semester 1, Semester 2, Semester 3, Cursus';
$string['filtersemester_summary'] = 'Sta filteren toe voor semesters (in het Hebreeuws, bijvoorbeeld: semester 1, semester 2)';
$string['filterstartendtime_summary'] = 'Start- / einddatum filter';
$string['filtersubcategories'] = 'Categorie (inclusief subcategorieën)';
$string['filtersubcategories_summary'] = 'Gebruik: %%FILTER_SUBCATEGORIES:mdl_course_category.path%%';
$string['filteruser'] = 'Gebruiker huidige cursus';
$string['filterusers'] = 'Systeemgebruiker';
$string['filterusers_summary'] = 'Filter een gebruiker (op id) uit de systeemgebruikerslijst';
$string['filteruser_summary'] = 'Filter een gebruiker (id) van huidige cursisten';
$string['filteryearhebrew'] = 'Jaar (Hebreeuws)';
$string['filteryearhebrew_list'] = 'Negen, Negen, Negen, Negen, Negen, Negen, Negen';
$string['filteryearhebrew_summary'] = 'Filter gebruikt Hebreeuwse jaren (תשעג, ...)';
$string['filteryearnumeric'] = 'Jaar (numeriek)';
$string['filteryearnumeric_summary'] = 'Filter gebruikt numerieke jaren (2013, ...)';
$string['filteryears'] = 'Jaar (numeriek)';
$string['filteryears_list'] = '2010,2011,2012,2013,2014,2015';
$string['filteryears_summary'] = 'Filter op jaar (numerieke weergave, 2012 ...)';
$string['finalgradeincurrentcourse'] = 'Eindcijfer in huidige cursus';
$string['fixeddate'] = 'Vaste datum';
$string['footer'] = 'Voettekst';
$string['forcemidnight'] = 'Forceer middernacht';
$string['fsearchuserfield'] = 'Profielveld zoekvenster';
$string['fuserfield'] = 'Profielveldfilter';
$string['global'] = 'Globale rapportage';
$string['global_help'] = 'Globaal rapport kan worden geopend vanuit elke cursus op het platform die wordt toegevoegd op basis van &courseid=MY_COURSE_ID in de rapportage-URL';
$string['globalstatsshouldbeenabled'] = 'Sitestatistieken moeten zijn ingeschakeld. Ga naar Sitebeheer -> Geavanceerd';
$string['groupseries'] = 'Groepserie';
$string['groupvalues'] = 'Groepeer gelijke waarden (som)';
$string['head_color'] = 'Grafiek achtergrondkleur';
$string['head_data'] = 'Grafiekdata';
$string['header'] = 'Koptekst';
$string['head_size'] = 'Grafiekgrootte';
$string['height'] = 'Hoogte';
$string['importfromrepository'] = 'Import rapportage uit de bibliotheek';
$string['importreport'] = 'Importeer rapportage';
$string['includesubcats'] = 'Inclusief subcategorieën';
$string['jsordering'] = 'JavaScript sortering';
$string['jsordering_help'] = 'Met JavaScript-sorteren kun je de rapporttabel sorteren zonder de pagina opnieuw te laden';
$string['label_field'] = 'Labelveld';
$string['label_field_help'] = 'Het veld dat namen geeft aan de zaken die in de grafiek worden weergegeven.';
$string['lastexecutiontime'] = 'Uitvoeringstijd = {$a} (Sec)';
$string['legacylognotenabled'] = 'Oude logs moeten zijn ingeschakeld.
Ga naar Sitebeheer / Plug-ins / Logging Schakel het oude logboek in en controleer in de loginstellingen de oude loggegevens';
$string['limitcategories'] = 'Beperk aantal categorieën in een grafiek';
$string['line'] = 'Lijngrafiek';
$string['linesummary'] = 'Een lijngrafiek met meerdere datagroeperingen';
$string['listofsqlreports'] = 'Gebruik F11 als de cursor in het editor is om naar volledig scherm te gaan. Gebruik ESC om volledig scherm te beeindigen.<br/><br/><a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">List of SQL Contributed reports</a>';
$string['managereports'] = 'Beheer rapporten';
$string['max'] = 'Maximum';
$string['min'] = 'Minimum';
$string['missingcolumn'] = 'Een kolom is vereist';
$string['module'] = 'Module';
$string['newreport'] = 'Nieuw rapport';
$string['nocalcsyet'] = 'Nog geen berekeningen';
$string['nocolumnsyet'] = 'Nog geen kolommen';
$string['noconditionsyet'] = 'Nog geen voorwaarden';
$string['noexplicitprefix'] = 'Geen expliciet voorvoegsel';
$string['nofiltersyet'] = 'Nog geen filters';
$string['nofilteryet'] = 'Nog geen filters';
$string['noorderingyet'] = 'Nog geen sortering';
$string['nopermissionsyet'] = 'Nog geen toestemmingen';
$string['noplotyet'] = 'Nog geen plots.';
$string['norecordsfound'] = 'Geen regels gevonden';
$string['noreportsavailable'] = 'Geen rapporten beschikbaar';
$string['norowsreturned'] = 'Geen regels geretourneerd';
$string['nosemicolon'] = 'Geen puntkomma';
$string['notallowedwords'] = 'Niet toegestane woorden';
$string['operator'] = 'Operator';
$string['ordering'] = 'Sortering';
$string['others'] = 'Andere';
$string['pagination'] = 'Paginering';
$string['pagination_help'] = 'Aantal regels per pagina. NUL betekent geen paginering';
$string['parentcategory'] = 'Bovenliggende categorie';
$string['percent'] = 'Percentage';
$string['permissions'] = 'Toestemmingen';
$string['pie'] = 'Taart';
$string['pieareaname'] = 'Naam';
$string['pieareavalue'] = 'Waarde';
$string['piesummary'] = 'Taartdiagram';
$string['plot'] = 'Plot - Grafieken';
$string['pluginname'] = 'Rapportages op maat';
$string['previousdays'] = 'Voorgaande dagen';
$string['previousend'] = 'Vorige einde';
$string['previousstart'] = 'Vorige start';
$string['printreport'] = 'Print rapport';
$string['privacy:metadata:block_configurable_reports'] = 'Het configureerbare rapportblok bevat aanpasbare cursusrapporten.';
$string['privacy:metadata:block_configurable_reports:components'] = 'De configuratie van het rapport. Het bevat de zoekopdracht, filters ...';
$string['privacy:metadata:block_configurable_reports:courseid'] = 'CursusID';
$string['privacy:metadata:block_configurable_reports:global'] = 'Of het rapport toegankelijk is vanuit alle cursussen';
$string['privacy:metadata:block_configurable_reports:lastexecutiontime'] = 'De tijd die dit rapport nodig had om de laatste keer te worden uitgevoerd, in milliseconden.';
$string['privacy:metadata:block_configurable_reports:name'] = 'Naam van het rapport';
$string['privacy:metadata:block_configurable_reports:ownerid'] = 'De ID van de gebruiker die het rapport heeft gemaakt';
$string['privacy:metadata:block_configurable_reports:summary'] = 'De beschrijving van het rapport';
$string['privacy:metadata:block_configurable_reports:type'] = 'Het type rapport';
$string['privacy:metadata:block_configurable_reports:visible'] = 'Zichtbaarheid van het rapport';
$string['puserfield'] = 'Gebruikersvelden';
$string['puserfield_summary'] = 'Gebruiker met de gesleceteerde waarde in het geselecteerde veld';
$string['queryfailed'] = 'Zoekopdracht is mislukt <code><pre>{$a}</pre></code>';
$string['querysql'] = 'SQL-query';
$string['remote'] = 'Voer uit op externe db';
$string['remotedescription'] = 'Wil je deze zoekopdracht uitvoeren op een externe db';
$string['remote_help'] = 'Wil je deze zoekopdracht uitvoeren op een externe db';
$string['remotequerysql'] = 'SQL-query';
$string['report'] = 'Rapport';
$string['reportcategories'] = '1) Kies een externe rapportcategorie';
$string['report_categories'] = 'Categorieënrapport';
$string['reportcolumn'] = 'Andere rapportkolom';
$string['report_courses'] = 'Cursusrapport';
$string['reportcreated'] = 'Rapport succesvol aangemaakt';
$string['reportlimit'] = 'Rapport rijlimiet';
$string['reportlimitinfo'] = 'Beperk het aantal rijen dat getoond wordt in de rapporttabel (Standaard is 500 rijen. Het heeft de voorkeur de rijen te limiteren om de database niet te veel te belasten)';
$string['reports'] = 'Rapporten';
$string['reportscapabilities'] = 'Rapportagemogelijkheden';
$string['reportscapabilities_summary'] = 'Gebruikers met de mogelijkheid moodle / site: viewreports ingeschakeld';
$string['reportsincategory'] = '2) Kies een rapport uit de lijst';
$string['report_sql'] = 'SQL-rapport';
$string['reporttable'] = 'Rapporttabel';
$string['reporttable_help'] = '<p>Dit is de breedte van de tabel die de rapportrecords zal weergeven.</p>

<p>Als je een sjabloon gebruikt, heeft deze optie geen effect.</p>';
$string['reporttableui'] = 'Rapporttabel UI';
$string['reporttableuiinfo'] = 'Geef de rapporttabel weer als: Eenvoudige scrollbare HTML-tabel, jQuery met kolom sortering of DataTables JS-bibliotheek (Kolom sorteren, vaste kop, zoeken, paging ...)';
$string['report_timeline'] = 'Tijdslijnrapport';
$string['report_users'] = 'Gebruikersrapport';
$string['repository'] = 'Rapporten opslagruimte';
$string['repository_help'] = 'Je kunt voorbeeldrapporten uit een openbare gedeelde opslagruimte importeren.

Merk op dat er een dagelijkse limiet is voor oproepen naar de opslagruimte.

Als de verbinding met de opslagruimte niet werkt, kun je die hier <a href="https://github.com/jleyva/moodle-configurable_reports_repository" target="_blank">https://github.com/jleyva/moodle-configurable_reports_repository</a> een rapport handmatig downloaden en importeer het vervolgens met de functie "Rapport importeren" die hieronder wordt weergegeven';
$string['role'] = 'Rol';
$string['roleincourse'] = 'Gebruikers met de geselecteerde rol(len) in het huidige cursusrapport';
$string['roleusersn'] = 'Aantal gebruikers met de rol...';
$string['searchtext'] = 'Zoek tekst';
$string['semester'] = 'Semester (Hebreeuws)';
$string['serieid'] = 'Serie kolom';
$string['sessionlimittime'] = 'Limiet tussen klikken (in minuten)';
$string['sessionlimittime_help'] = 'De limiet tussen klikken bepaalt of twee klikken deel uitmaken van dezelfde sessie of niet';
$string['setcourseid'] = 'Stel cursusID in';
$string['sharedsqlrepository'] = 'Gedeelde sql-opslagruimte';
$string['sharedsqlrepositoryinfo'] = 'Naam van GitHub-accounteigenaar + slash + naam opslagruimte';
$string['sqlsecurity'] = 'SQL Veiligheid';
$string['sqlsecurityinfo'] = 'Uitschakelen voor het uitvoeren van SQL-query\'s met instructies voor het invoegen van gegevens';
$string['sqlsyntaxhighlight'] = 'Markeer SQL-syntaxis';
$string['sqlsyntaxhighlightinfo'] = 'Markeer SQL-syntaxis in code-editor (CodeMirror JS-bibliotheek)';
$string['startendtime'] = 'Start- / einddatumfilter';
$string['starttime'] = 'Startdatum';
$string['stat'] = 'Statistisch';
$string['statsactiveenrolments'] = 'Actieve aanmeldingen (afgelopen week)';
$string['statslogins'] = 'Aantal logins op het platform';
$string['statstotalenrolments'] = 'Totaal aantal aanmeldingen';
$string['student'] = 'Leerling';
$string['subcategories'] = 'Categorie (inclusief subcategorieën)';
$string['sum'] = 'Som';
$string['tablealign'] = 'Tabeluitlijning';
$string['tablecellpadding'] = 'Tabel celvulling';
$string['tablecellspacing'] = 'Tabel celafstand';
$string['tableclass'] = 'Tabel class';
$string['tablewidth'] = 'Tabelbreedte';
$string['template'] = 'Sjabloon';
$string['template_marks'] = 'Opmerkingensjabloon';
$string['template_marks_help'] = '<p>Je kunt elk van deze placeholders gebruiken:</p>

<ul>
<li>##reportname## - Om de rapportagenaam op te nemen</li>
<li>##reportsummary## - Om de rapportagesamenvatting op te nemen</li>
<li>##graphs## - Om de grafieken op te nemen</li>
<li>##exportoptions## - Om de exportopties op te nemen</li>
<li>##calculationstable## - Om de berekenende tabellen op te nemen</li>
<li>##pagination## - Om de paginering op te nemen </li>';
$string['templaterecord'] = 'Sjabloon';
$string['timeinterval'] = 'Tijdsinterval';
$string['timeline'] = 'Tijdslijn';
$string['timemode'] = 'Tijdsmodus';
$string['totalrecords'] = 'Totaal aantal regels';
$string['type'] = 'Soort rapport';
$string['typeofreport'] = 'Soort rapport';
$string['typeofreport_help'] = 'Kies het type rapport dat je wilt maken.
Voor de beveiliging heeft SQL Report een extra functie nodig';
$string['user'] = 'Cursusgebruiker (id)';
$string['usercompletion'] = 'Status cursusvoltooiing van de gebruiker';
$string['usercompletionsummary'] = 'Status cursusvoltooiing';
$string['userfield'] = 'Gebruikersprofielveld';
$string['userfieldorder'] = 'Gebruikersveld volgorde';
$string['usermodactions'] = 'Gebruikersmodule acties';
$string['usermodoutline'] = 'Gebruikersmodule overzichtsstatistieken';
$string['users'] = 'Systeemgebruiker (id)';
$string['usersincohorts'] = 'Gebruiker die lid is van een of meerdere cohorten/site-groepen';
$string['usersincohorts_summary'] = 'Alleen de gebruikers die lid zijn van de geselecteerde cohorten/site-groepen';
$string['usersincoursereport'] = 'Elke gebruiker in het huidige cursusrapport';
$string['usersincoursereport_summary'] = 'Elke gebruiker in het huidige cursusrapport';
$string['usersincurrentcourse'] = 'Gebruikers in het huidige cursusrapport';
$string['usersincurrentcourse_summary'] = 'Gebruikers met de geselecteerde rollen in het cursusrapport';
$string['userstats'] = 'Gebruikersstatistieken';
$string['value'] = 'Waarde';
$string['value_fields'] = 'Waardevelden';
$string['value_fields_help'] = 'Velden die in de grafiek moeten worden weergegeven. Houd Ctrl ingedrukt en klik (Cmd + klik op Mac) om meerdere te selecteren. Als je het veld Label of een veld met niet-numerieke waarden selecteert, wordt dit genegeerd';
$string['viewreport'] = 'Bekijk rapport';
$string['width'] = 'Breedte';
$string['xandynotequal'] = 'X en y-as moeten verschillend zijn';
$string['xaxis'] = 'X-as';
$string['yaxis'] = 'Y-as';
$string['yearhebrew'] = 'Jaar (Hebreeuws)';
$string['yearnumeric'] = 'Jaar (Numeriek)';
$string['years'] = 'Jaar (Numeriek)';
$string['youmustselectarole'] = 'Ten minste een rol is vereist';
