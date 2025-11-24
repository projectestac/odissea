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
 * Strings for component 'block_configurable_reports', language 'sv', version '4.5'.
 *
 * @package     block_configurable_reports
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Aktivitetsposter';
$string['activityview'] = 'Aktivitetsvyer';
$string['add'] = 'Lägg till';
$string['addreport'] = 'Ny rapport';
$string['anyone'] = 'Alla';
$string['anyone_summary'] = 'Alla kan se denna rapport';
$string['availablemarks'] = 'Tillgängliga betyg';
$string['average'] = 'Medelvärde';
$string['badconditionexpr'] = 'Felaktigt villkorsuttryck';
$string['badsize'] = 'Felaktig storlek. Den måste anges i % eller px';
$string['badtablewidth'] = 'Felaktig bredd. Den måste anges i % eller som ett specifikt värde';
$string['bar'] = 'Stapel';
$string['barsummary'] = 'Stapeldiagram';
$string['blockname'] = 'Konfigurerbara rapporter';
$string['calcs'] = 'Beräkningar';
$string['categories'] = 'Kategorier';
$string['categoryfield'] = 'Kategorifält';
$string['categoryfieldorder'] = 'Sorteringsordning';
$string['ccoursefield'] = 'Kursfältsvillkor';
$string['cellalign'] = 'Celljustering';
$string['cellsize'] = 'Cellstorlek';
$string['cellwrap'] = 'Radbrytning';
$string['checksql_execution'] = 'Blockera SQL-kodkörning för konfigurerbara rapporter';
$string['checksql_execution_details'] = 'Genom att tillåta SQL-kodkörning finns det ett potentiellt säkerhetsproblem i att användare kan lägga till godtycklig kod. SQL-kodkörning bör inaktiveras för att endast tillåta SQL-frågor för läsning av data. SQL-körning kan inaktiveras i .php genom att sätta <code>$CFG->block_configurable_reports_enable_sql_execution</code> till 0';
$string['checksql_execution_ok'] = 'SQL-kodkörning inaktiverad.';
$string['checksql_execution_warning'] = 'Det är rekommenderat att inaktivera SQL-kodkörning för att undvika att godtycklig SQL-kod körs på servern.';
$string['cohorts'] = 'Kohorter';
$string['column'] = 'Kolumn';
$string['columnandcellproperties'] = 'Kolumn- och cellegenskaper';
$string['columncalculations'] = 'Kolumnberäkningar';
$string['columns'] = 'Kolumner';
$string['comp_calcs'] = 'Formler';
$string['comp_calcs_help'] = '<p>Här kan du lägga till beräkningar för kolumner, dvs: genomsnittligt antal användare som är registrerade i kurser</p>

<p>Mer hjälp: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin dokumentation</a></p>';
$string['comp_calculations'] = 'Formler';
$string['comp_calculations_help'] = '<p>Här kan du lägga till beräkningar för kolumner, dvs: genomsnittligt antal användare som är registrerade i kurser</p>';
$string['comp_columns'] = 'Kolumner';
$string['comp_columns_help'] = '<p>Här kan du välja de olika kolumnerna i din rapport beroende på typ av rapport</p>

<p>Mer hjälp: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin dokumentation</a></p>';
$string['comp_conditions'] = 'Villkor';
$string['comp_conditions_help'] = '<p>Här kan du definiera villkoren (t.ex. endast kurser från denna kategori, endast användare från Spanien osv.</p>

<p>Du kan lägga till ett logiskt uttryck om du använder mer än ett villkor.</p>

<p>Mer hjälp: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin dokumentation</a></p>';
$string['comp_customsql'] = 'Anpassad SQL';
$string['comp_customsql_help'] = '<p>Lägg till en SQL-fråga. Använd inte moodle databasprefix ($CFG->prefix). Använd istället "prefix_" utan citationstecken</p>
<p>Exempel: SELECT * FROM prefix_course</p>

<p>Du kan hitta många SQL-rapporter här: <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">Ad-hoc rapporter</a></p>

<p>En uppdaterad layout av Moodles tabeller och deras relationer: <a href="https://docs.moodle.org/dev/Database_Schema" target="_blank">Databasschema</a></p>

<p>Eftersom detta block stöder Tim Hunts CustomSQL-frågerapporter kan du använda valfri fråga.</p>

<p>Lägg till ett "Tidsfilter" om du ska använda rapporter med tidstoken.</p>

<p>För att använda filter se självstudiekursen: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Skapa en SQL-rapport</a></p>';
$string['comp_filters'] = 'Filter';
$string['comp_filters_help'] = '<p>Här kan du välja vilka filter som ska visas</p>

<p>Ett filter låter en användare välja kolumner från rapporten för att filtrera rapportresultaten</p>

<p>För att använda filter om din rapporttyp är SQL se självstudiekursen: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Skapa en SQL-rapport</a></p>

<p>Mer hjälp: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin dokumentation</a></p>';
$string['comp_ordering'] = 'Sortering';
$string['comp_ordering_help'] = '<p>Här kan du välja hur du ska sortera rapporten med hjälp av fält och sorteringsordning</p>

<p>Mer hjälp: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin dokumentation</a></p>';
$string['comp_permissions'] = 'Rättigheter';
$string['comp_permissions_help'] = '<p>Här kan du välja vem som kan se en rapport.</p>

<p>Du kan lägga till ett logiskt uttryck för att beräkna den slutgiltiga behörigheten om du använder mer än ett villkor.</p>

<p>Mer hjälp: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin dokumentation</a></p>';
$string['comp_plot'] = 'Plot';
$string['comp_plot_help'] = '<p>Här kan du lägga till grafer i din rapport baserat på rapportkolumnerna och värdena</p>

<p>Mer hjälp: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin dokumentation</a></p>';
$string['comp_template'] = 'Mall';
$string['comp_template_help'] = '<p>Du kan ändra rapportens layout genom att skapa en mall</p>

<p>För att skapa en mall se platshållarna du kan använda i sidhuvud, sidfot och för varje rapportpost med hjälp knapparna eller den information som visas på samma sida.</p>

<p>Mer hjälp: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin dokumentation</a></p>';
$string['competencyframeworks'] = 'Kompetensramverk';
$string['competencytemplates'] = 'Kompetensmallar';
$string['componenthelp'] = 'Komponenthjälp';
$string['conditionexpr'] = 'Villkor';
$string['conditionexpr_conditions'] = 'Villkor';
$string['conditionexpr_conditions_help'] = '<p>Du kan kombinera villkor med hjälp av ett logiskt uttryck</p>

<p>Ange ett giltigt uttryck med dessa operatorer: and, or.</p>';
$string['conditionexpr_permissions'] = 'Villkor';
$string['conditionexpr_permissions_help'] = '<p>Du kan kombinera villkor med hjälp av ett logiskt uttryck</p>

<p>Ange ett giltigt uttryck med dessa operatorer: and, or.</p>';
$string['conditionexprhelp'] = 'Ange ett giltigt villkor, t.ex. (c1 och c2) eller (c4 och c3)';
$string['conditions'] = 'Villkor';
$string['configurable_reports:addinstance'] = 'Lägg till block för Konfigurerbara rapporter';
$string['configurable_reports:manageownreports'] = 'Hantera egna rapporter';
$string['configurable_reports:managereports'] = 'Hantera rapporter';
$string['configurable_reports:managesqlreports'] = 'Hantera SQL-rapporter';
$string['configurable_reports:myaddinstance'] = 'Lägga till ett nytt konfigurerbar rapport-block till översiktssidan';
$string['configurable_reports:viewreports'] = 'Visa rapporter';
$string['confirmdeletereport'] = 'Är du säker på att du vill ta bort denna rapport?';
$string['coursecategories'] = 'Kurskategorier';
$string['coursecategory'] = 'Kurser i kategorin';
$string['coursechild'] = 'Underordnade kurser för';
$string['coursededicationtime'] = 'Tillbringad tid i kurs';
$string['coursefield'] = 'Kursfält';
$string['coursefieldorder'] = 'Sorteringsordning';
$string['coursemodules'] = 'Kursmodul';
$string['courseparent'] = 'Kurser vars överordnade är';
$string['courses'] = 'Kurser';
$string['coursestats'] = 'Kursstatistik';
$string['cron'] = 'Kör dagligen';
$string['cron_help'] = 'Schemalägg körning av denna fråga varje dag (på natten)';
$string['crondescription'] = 'Schemalägg körning av denna fråga varje dag (på natten)';
$string['crrepository'] = 'Lagringsplats för rapporter';
$string['crrepositoryinfo'] = 'Externa lagringsplats med fullt fungerande exempelrapporter (Namn på GitHub-kontoägare + snedstreck + databasnamn)';
$string['currentreportcourse'] = 'Aktuell kurs för rapporten';
$string['currentreportcourse_summary'] = 'Kursen där rapporten skapats';
$string['currentuser'] = 'Aktuell användare';
$string['currentuser_summary'] = 'Användaren som visar rapporten';
$string['currentusercourses'] = 'Aktuella kursregistreringar';
$string['currentusercourses_summary'] = 'Lista med aktuella kurser för användaren (endast synliga kurser)';
$string['currentuserfinalgrade'] = 'Slutbetyg för aktuell användare';
$string['currentuserfinalgrade_summary'] = 'Den här kolumnen visar slutbetyget för den aktuella användaren i rad-kursen';
$string['cuserfield'] = 'Användarfältsvillkor';
$string['custom'] = 'Anpassad';
$string['customdateformat'] = 'Anpassat datumformat';
$string['customsql'] = 'Anpassad SQL';
$string['datatables'] = 'Aktivera DataTables JS-biblioteket';
$string['datatables_emptytable'] = 'Tabellen innehåller inga data';
$string['datatables_first'] = 'Första';
$string['datatables_info'] = 'Visar _START_ till _END_ av _TOTAL_ poster';
$string['datatables_infoempty'] = 'Visar 0 till 0 av 0 poster';
$string['datatables_infofiltered'] = '(filtrerat från totalt _MAX_ poster)';
$string['datatables_last'] = 'Sista';
$string['datatables_lengthmenu'] = 'Visa _MENU_ poster';
$string['datatables_loadingrecords'] = 'Laddar...';
$string['datatables_next'] = 'Nästa';
$string['datatables_previous'] = 'Föregående';
$string['datatables_processing'] = 'Bearbetar...';
$string['datatables_search'] = 'Sök:';
$string['datatables_sortascending'] = ': aktivera för att sortera kolumn stigande';
$string['datatables_sortdescending'] = ': aktivera för att sortera kolumn fallande';
$string['datatables_zerorecords'] = 'Inga poster hittades';
$string['datatablesinfo'] = 'DataTables JS-bibliotek (Kolumnsortering, fasta rubriker, sökning, sidbrytning...)';
$string['date'] = 'Datum';
$string['dateformat'] = 'Datumformat';
$string['dbhost'] = 'Databasserver';
$string['dbhostinfo'] = 'Databasserver-namn (på vilken vi kommer att köra våra SQL-frågor)';
$string['dbname'] = 'Databasnamn';
$string['dbnameinfo'] = 'Databasnamn (på vilken vi kommer att köra våra SQL-frågor)';
$string['dbpass'] = 'Lösenord';
$string['dbpassinfo'] = 'Lösenord (för ovanstående användarnamn)';
$string['dbuser'] = 'Användarnamn';
$string['dbuserinfo'] = 'Användarnamn för databasen (måste ha SELECT-rättigheter i ovanstående databas)';
$string['decimals'] = 'Antal decimaler';
$string['description'] = 'Beskrivning';
$string['description_help'] = 'Text som används för att beskriva filtret som visas i översikten på filtersidan.';
$string['direction'] = 'Riktning';
$string['disabled'] = 'Inaktiverad';
$string['displayglobalreports'] = 'Visa globala rapporter';
$string['displayreportslist'] = 'Visa rapportlista i blocket';
$string['donotshowtime'] = 'Visa inte datuminformation';
$string['download'] = 'Ladda ned';
$string['downloadreport'] = 'Ladda ned rapport';
$string['email_message'] = 'Meddelande';
$string['email_send'] = 'Skicka';
$string['email_subject'] = 'Ämne';
$string['enabled'] = 'Aktiverad';
$string['enableglobal'] = 'Detta är en global rapport (tillgänglig från alla kurser)';
$string['enablejsordering'] = 'Aktivera JavaScript-sortering';
$string['enablejspagination'] = 'Aktivera JavaScript-sidbrytning';
$string['endtime'] = 'Slutdatum';
$string['enrolledstudents'] = 'Registrerade studenter';
$string['error_field'] = 'Fält ej tillåtet';
$string['error_operator'] = 'Operator ej tillåten';
$string['error_value_expected_integer'] = 'Ett heltal förväntades';
$string['excludedeletedusers'] = 'Exkludera borttagna användare (endast för SQL-rapporter)';
$string['executeat'] = 'Kör';
$string['executeatinfo'] = 'Moodle CRON kommer att köra schemalagda SQL-frågor vid den valda tidpunkten, en gång per dygn.';
$string['export_csv'] = 'Exportera som CSV';
$string['export_json'] = 'Exportera som JSON';
$string['export_ods'] = 'Exportera som ODS';
$string['export_xls'] = 'Exportera som XSL';
$string['exportoptions'] = 'Exportalternativ';
$string['exportreport'] = 'Exportera rapport';
$string['fcoursefield'] = 'Kursfältsfilter';
$string['field'] = 'Fält';
$string['filter'] = 'Filter';
$string['filter_all'] = 'Alla';
$string['filter_apply'] = 'Tillämpa';
$string['filter_searchtext'] = 'Söktext';
$string['filter_searchtext_summary'] = 'Fritextfilter';
$string['filtercategories'] = 'Filterkategorier';
$string['filtercategories_summary'] = 'Att filtrera på kategori';
$string['filtercohorts'] = 'Kohorter';
$string['filtercohorts_summary'] = 'Använd: %%FILTER_COHORTS:prefix_cohort.id%%';
$string['filtercompetencyframeworks'] = 'Kompetensramverk';
$string['filtercompetencyframeworks_summary'] = 'Använd: %%FILTER_COMPETENCYFRAMEWORKS:prefix_competency_framework.id%%';
$string['filtercompetencytemplates'] = 'Kompetensmallar';
$string['filtercompetencytemplates_summary'] = 'Använd: %%FILTER_COMPETENCYTEMPLATES:prefix_competency_template.id%%';
$string['filtercoursecategories'] = 'Kurskategori';
$string['filtercoursecategories_summary'] = 'Filtrera kurser på valfri överordnad kategori';
$string['filtercoursemodules'] = 'Kursmodul';
$string['filtercoursemodules_summary'] = 'Filtrera kursmoduler';
$string['filtercourses'] = 'Kurser';
$string['filtercourses_summary'] = 'I det här filtret visas en lista över kurser. Endast en kurs åt gången kan väljas';
$string['filterenrolledstudents'] = 'Registrerade studenter';
$string['filterenrolledstudents_summary'] = 'Filtrera användare (på ID) från registrerade studenter på kursen';
$string['filterrole'] = 'roll';
$string['filterrole_summary'] = 'Filtrera systemroller (Lärare, Student, osv.)';
$string['filters'] = 'Filter';
$string['filtersemester'] = 'Termin (hebreiska)';
$string['filtersemester_list'] = 'סמסטר א,סמסטר ב,סמסטר ג,סמינריון';
$string['filtersemester_summary'] = 'מאפשר סינון לפני סמסטרים (בעברית, למשל: סמסטר א,סמסטר ב)';
$string['filterstartendtime_summary'] = 'Start-/slutdatum';
$string['filtersubcategories'] = 'Kategori (inkludera underkategorier)';
$string['filtersubcategories_summary'] = 'Använd: %%FILTER_SUBCATEGORIES:mdl_course_category.path%%';
$string['filteruser'] = 'Aktuell användare';
$string['filteruser_summary'] = 'Filtrera ut en användare (ID) från aktuella kursanvändare';
$string['filterusers'] = 'Systemanvändare';
$string['filterusers_summary'] = 'Filtrera användare (på ID) från listan med systemanvändare';
$string['filteryearhebrew'] = 'År (hebreiska)';
$string['filteryearhebrew_list'] = 'תשע,תשעא,תשעב,תשעג,תשעד,תשעה';
$string['filteryearhebrew_summary'] = 'Filtret använder Hebreiska år (תשעג,...)';
$string['filteryearnumeric'] = 'År (numeriskt)';
$string['filteryearnumeric_summary'] = 'Filtret använder numeriska år (2021, ...)';
$string['filteryears'] = 'År (numeriskt)';
$string['filteryears_list'] = '2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021,2022';
$string['filteryears_summary'] = 'Filtrera på år (numerisk representation, 2021, ...)';
$string['finalgradeincurrentcourse'] = 'Slutbetyg i aktuell kurs';
$string['fixeddate'] = 'Fast datum';
$string['footer'] = 'Sidfot';
$string['forcemidnight'] = 'Tvinga midnatt';
$string['fsearchuserfield'] = 'Sökruta för användarfält';
$string['fuserfield'] = 'Filter för användarfält';
$string['generalcolorpalette'] = 'Tillgängliga färger';
$string['generalcolorpalette_help'] = 'Hexadecimala färgkoder för generell användning i tårtbitsdiagram. Färgerna ska separeras med radbrytningar och anges i den ordning du vill att de ska användas i diagrammet.';
$string['generalcolorpaletteheader'] = 'Generell färgpalett';
$string['global'] = 'Global rapport';
$string['global_help'] = 'Globala rapporter kan nås från alla kurser på webbplatsen genom att lägga till <code>&courseid=KURS_ID</code> till rapport-URL:en.';
$string['globalstatsshouldbeenabled'] = 'Webbplatsstatistik måste vara aktiverad. Gå till <em>Administrera webbplats &#10132; Server &#10132; Statistik</em>';
$string['groupseries'] = 'Gruppera serier';
$string['groupvalues'] = 'Gruppera lika värde (summa)';
$string['head_color'] = 'Bakgrundsfärg för graf';
$string['head_data'] = 'Grafdata';
$string['head_size'] = 'Grafstorlek';
$string['header'] = 'Rubrik';
$string['height'] = 'Höjd';
$string['idnumber'] = 'ID-nummer';
$string['idnumber_help'] = 'Används för att skilja mellan filter av samma typ. Skiftlägeskänsligt. Exempelanvändning:
<code>%%FILTER_SEARCHTEXT_username:u.username:~%%</code>';
$string['importfromrepository'] = 'Importera rapport från lagringsplats';
$string['importreport'] = 'Importera rapport';
$string['includesubcats'] = 'Inkludera underkategorier';
$string['invalidcolorcode'] = 'Ogiltig färgkod';
$string['jsordering'] = 'JavaScript-sortering';
$string['jsordering_help'] = 'JavaScript-sortering låter dig sortera rapporttabellen utan att behöva ladda om sidan';
$string['label'] = 'Etikett';
$string['label_field'] = 'Ettikettfält';
$string['label_field_help'] = 'Fältet som namnger objekt i grafen';
$string['label_help'] = 'Text som används för att beskriva filtret som visas på rapportsidan';
$string['lastexecutiontime'] = 'Körningstid = {$a} (sek)';
$string['legacylognotenabled'] = 'Loggning i det gamla formatet måste vara aktiverad. Gå till <em>Administrera webbplats &#10132; Pluginmoduler &#10132; Loggning &#10132; Äldre loggformat &#10132; Logga i äldre format</em>';
$string['legendheader'] = 'Använda färger';
$string['legendheaderdesc'] = 'Koppla färgkoder till specifika nycklar i förklaringen till diagrammet.';
$string['limitcategories'] = 'Begränsa antalet kategorier i en graf';
$string['line'] = 'Linjegraf';
$string['linesummary'] = 'En linjegraf med flera dataserier';
$string['listofsqlreports'] = 'Tryck på F11 när markören är i redigeraren för att växla till redigering i helskärmsläge. Esc-tangenten kan användas för att avsluta redigering i helskärmsläge.<br/><br/> <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">Lista med SQL-rapporter</a>';
$string['managereports'] = 'Hantera rapporter';
$string['max'] = 'Max';
$string['min'] = 'Min';
$string['missingcolumn'] = 'Kolumn krävs';
$string['module'] = 'Modul';
$string['newreport'] = 'Ny rapport';
$string['nocalcsyet'] = 'Inga beräkningar ännu';
$string['nocolumnsyet'] = 'Inga kolumner ännu';
$string['noconditionsyet'] = 'Inga villkor ännu';
$string['noexplicitprefix'] = 'Inget uttalat prefix';
$string['nofiltersyet'] = 'Inga filter ännu';
$string['nofilteryet'] = 'Inga filter ännu';
$string['noorderingyet'] = 'Ingen sortering ännu';
$string['nopermissionsyet'] = 'Inga rättigheter ännu';
$string['noplotyet'] = 'Inga plottar ännu';
$string['norecordsfound'] = 'Inga poster funna';
$string['noreportsavailable'] = 'Inga rapporter';
$string['norowsreturned'] = 'Inga rader returnerades';
$string['nosemicolon'] = 'Inget semikolon';
$string['notallowedwords'] = 'Ej tillåtna ord';
$string['operator'] = 'Operator';
$string['ordering'] = 'Sorteringsordning';
$string['others'] = 'Övriga';
$string['pagination'] = 'Sidbrytning';
$string['pagination_help'] = 'Antal poster att visa på varje sida. Noll innebär \'ingen sidbrytning\'.';
$string['parentcategory'] = 'Överliggande kategori';
$string['percent'] = 'Procent';
$string['permissions'] = 'Behörigheter';
$string['pie'] = 'Tårtbit';
$string['pieareaname'] = 'Namn';
$string['pieareavalue'] = 'Värde';
$string['piechart_add_colors'] = 'Lägg till färg';
$string['piechart_label'] = 'Nyckel - {$a}';
$string['piechart_label_color'] = 'Färg - {$a}';
$string['piesummary'] = 'Tårtbitsdiagram';
$string['plot'] = 'Plottar - Grafer';
$string['pluginname'] = 'Konfigurerbara rapporter';
$string['previousdays'] = 'Föregående dagar';
$string['previousend'] = 'Föregående slut';
$string['previousstart'] = 'Föregående start';
$string['printreport'] = 'Skriv ut rapport';
$string['privacy:metadata:block_configurable_reports'] = 'Blocket Konfigurerbara rapporter innehåller anpassningsbara kursrapporter.';
$string['privacy:metadata:block_configurable_reports:components'] = 'Rapportkonfigurationen. Den innehåller frågan, filtren, m.m.';
$string['privacy:metadata:block_configurable_reports:courseid'] = 'Kurs-ID';
$string['privacy:metadata:block_configurable_reports:global'] = 'Om rapporten är tillgänglig från alla kurser, eller ej.';
$string['privacy:metadata:block_configurable_reports:lastexecutiontime'] = 'Tiden det tog att köra denna rapport förra gången (i millisekunder).';
$string['privacy:metadata:block_configurable_reports:name'] = 'Rapportnamn';
$string['privacy:metadata:block_configurable_reports:ownerid'] = 'Användar-ID för den som skapade rapporten';
$string['privacy:metadata:block_configurable_reports:summary'] = 'Rapportbeskrivningen';
$string['privacy:metadata:block_configurable_reports:type'] = 'Rapporttypen';
$string['privacy:metadata:block_configurable_reports:visible'] = 'Om rapporten är synlig, eller ej.';
$string['puserfield'] = 'Värde på användrafält';
$string['puserfield_summary'] = 'Användare med det valda värdet i det valda fältet';
$string['queryfailed'] = 'Frågan misslyckades <code><pre>{$a}</pre></code>';
$string['querysql'] = 'SQL-fråga';
$string['remote'] = 'Kör på extern server';
$string['remote_help'] = 'Vill du köra denna fråga på den externa servern?';
$string['remotedescription'] = 'Vill du köra denna fråga på den externa servern?';
$string['remotequerysql'] = 'SQL-fråga';
$string['report'] = 'Rapport';
$string['report_categories'] = 'Kategorirapport';
$string['report_courses'] = 'Kursrapport';
$string['report_sql'] = 'SQL-rapport';
$string['report_timeline'] = 'Tidslinje';
$string['report_users'] = 'Användarrapport';
$string['reportcategories'] = '1) Välj rapportkategorier för extern rapport';
$string['reportcolumn'] = 'Övrig rapportkolumn';
$string['reportcreated'] = 'Rapporten skapades';
$string['reportlimit'] = 'Begränsning av antalet rader i rapporten';
$string['reportlimitinfo'] = 'Begränsa antalet rader som visas i rapporttabellen (Standard är 5000 rader. Det rekommenderas att sätta en begränsning så att inte databasservern riskerar att överbelastas)';
$string['reports'] = 'Rapporter';
$string['reportscapabilities'] = 'Funktionsbehörigheter för rapport';
$string['reportscapabilities_summary'] = 'Användare med funktionsbehörigheten <code>moodle/site:viewreports</code>';
$string['reportsincategory'] = '2) Välj en rapport i listan';
$string['reporttable'] = 'Rapporttabell';
$string['reporttable_help'] = '<p>Detta är bredden på tabellen som ska visa rapportposterna.</p>

<p>Om du använder en Mall har det här alternativet ingen effekt</p>';
$string['reporttableui'] = 'Användargränssnitt för rapporttabell';
$string['reporttableuiinfo'] = 'Visa rapporttabellen som: Enkel rullningsbar HTML-tabell, jQuery med kolumnsortering eller DataTables JS-bibliotek (Kolumnsortering, fast sidhuvud, sökning, personsökning...)';
$string['repository'] = 'Lagringsplats för rapporter';
$string['repository_help'] = 'Du kan importera exempelrapporter från en publikt delad lagringsplats.

Vänligen lägg märke till att det finns en daglig gräns för antalet anrop till lagringsplatsen.

Om anslutningen till databasen inte fungerar kan du ladda ner en rapport manuellt här <a href="https://github.com/jleyva/moodle-configurable_reports_repository" target="_blank">https://github.com/jleyva/moodle-configurable_reports_repository</a> och sedan importera den med hjälp av funktionen "Importera rapport" som visas nedanför.';
$string['role'] = 'Roll';
$string['roleincourse'] = 'Användare med de valda rollerna i den aktuella kursrapporten.';
$string['roleusersn'] = 'Antal användare med rollen...';
$string['searchtext'] = 'Sök text';
$string['semester'] = 'Termin (hebreiska)';
$string['serieid'] = 'Kolumnserie';
$string['sessionlimittime'] = 'Tidsgräns mellan klick (i minuter)';
$string['sessionlimittime_help'] = 'Tidsgränsen mellan klick avgör om två klick är del i samma session, eller ej.';
$string['setcourseid'] = 'Angivet kurs-ID';
$string['sharedsqlrepository'] = 'Lagringsplats för delade SQL-frågor';
$string['sharedsqlrepositoryinfo'] = 'Namn för ägaren av GitHub-kontot + snedstreck + namn på lagringsplats';
$string['sqlsecurity'] = 'SQL-säkerhet';
$string['sqlsecurityinfo'] = 'Inaktivera för körning av SQL-frågor med uttryck som infogar data';
$string['sqlsyntaxhighlight'] = 'Markera SQL-syntax';
$string['sqlsyntaxhighlightinfo'] = 'Markera SQL-syntax i kodredigerare (CodeMirror JS-biblioteket)';
$string['startendtime'] = 'Filter för Start-/Slutdatum';
$string['starttime'] = 'Startdatum';
$string['stat'] = 'Statistik';
$string['statsactiveenrolments'] = 'Aktiva (förra veckan) registreringar';
$string['statslogins'] = 'Antal inloggningar';
$string['statstotalenrolments'] = 'Totalt antal registreringar';
$string['student'] = 'Student';
$string['subcategories'] = 'Kategori (inkludera underkategorier)';
$string['sum'] = 'Summa';
$string['tablealign'] = 'Tabelljustering';
$string['tablecellpadding'] = 'Cellutfyllnad i tabell';
$string['tablecellspacing'] = 'Cellavstånd i tabell';
$string['tableclass'] = 'Tabellklass';
$string['tablewidth'] = 'Tabellbredd';
$string['template'] = 'Mall';
$string['template_marks'] = 'Platshållare i mall';
$string['template_marks_help'] = '<p>Du kan använda någon av dessa platshållare:</p>

<ul>
<li>##reportname## - Rapportnamnet</li>
<li>##reportsummary## - Visar rapportsammanfattning</li>
<li>##graphs## - Visar graferna</li>
<li>##exportoptions## - Visar exportalternativen</li>
<li>##calculationstable## - Visar beräkningstabellen</li>
<li>##pagination## - Visar sidbrytningen</li>

</ul>';
$string['templaterecord'] = 'Postmall';
$string['timeinterval'] = 'Tidsintervall';
$string['timeline'] = 'Tidslinje';
$string['timemode'] = 'Tidsläge';
$string['totalrecords'] = 'Totalt antal poster = {$a->totalrecords}';
$string['type'] = 'Rapporttyp';
$string['typeofreport'] = 'Rapporttyp';
$string['typeofreport_help'] = 'Välj typen av rapport du vill skapa.
Av säkerhetsskäl så kräver SQL-rapporter ytterligare behörighet';
$string['user'] = 'Kursanvändare (ID)';
$string['usercompletion'] = 'Slutförandestatus för användaren';
$string['usercompletionsummary'] = 'Slutförandestatus för kurs';
$string['userfield'] = 'Användarprofilsfält';
$string['userfieldorder'] = 'Sorteringsordning för användarfält';
$string['usermodactions'] = 'Användarens modulåtgärder';
$string['usermodoutline'] = 'Översiktlig modulstatistik för användaren';
$string['users'] = 'Systemanvändare (ID)';
$string['usersincohorts'] = 'Användare som är medlem i en eller flera kohorter';
$string['usersincohorts_summary'] = 'Enbart användare som är medlemmar i valda kohorter';
$string['usersincoursereport'] = 'Valfri användare i aktuell rapport-kurs';
$string['usersincoursereport_summary'] = 'Valfri användare i aktuell rapport-kurs';
$string['usersincurrentcourse'] = 'Användare i aktuell rapport-kurs';
$string['usersincurrentcourse_summary'] = 'Användare med valda roller i rapport-kursen';
$string['userstats'] = 'Användarstatistik';
$string['value'] = 'Värde';
$string['value_fields'] = 'Värdefält';
$string['value_fields_help'] = 'Fält som ska representeras i grafen. <kbd>Ctrl+klick </kbd> (Cmd+klick på Mac) för att välja flera. Om du väljer Etikettfältet eller ett fält med icke-numeriska värden kommer det att ignoreras';
$string['viewreport'] = 'Visa rapport';
$string['width'] = 'Bredd';
$string['xandynotequal'] = 'X- och Y-axlarna måste skilja sig åt';
$string['xaxis'] = 'X-axel';
$string['yaxis'] = 'Y-axel';
$string['yearhebrew'] = 'År (hebreiska)';
$string['yearnumeric'] = 'År (numeriskt)';
$string['years'] = 'År (numeriskt)';
$string['youmustselectarole'] = 'Åtminstone en roll krävs';
