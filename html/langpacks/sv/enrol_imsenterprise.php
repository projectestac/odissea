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
 * Strings for component 'enrol_imsenterprise', language 'sv', version '4.4'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'När du väl har sparat dina inställningar så kanske du vill';
$string['allowunenrol'] = 'Tillåt IMS data att <strong>avregistrera</strong> lärande och lärare';
$string['allowunenrol_desc'] = 'Om det här alternativet är aktiverat tas kursregistreringar bort när de anges i Enterprise-data.';
$string['basicsettings'] = 'Grundläggande inställlningar';
$string['categoryidnumber'] = 'Tillåt id-nummer för kategori';
$string['categoryidnumber_desc'] = 'Om aktiverat skapar IMS Enterprise kategori med idnumber';
$string['categoryseparator'] = 'Kategoriavgränsare';
$string['categoryseparator_desc'] = 'Obligatoriskt när "Kategori-idnummer" är aktiverat. Tecken för att separera kategorinamnet och idnumber.';
$string['coursesettings'] = 'Alternativ för kursdata';
$string['createnewcategories'] = 'Skapa nya (dolda) kurskategorier om det inte går att hitta några i Moodle.';
$string['createnewcategories_desc'] = 'Om elementet &lt;org&gt;&lt;orgunit&gt; finns i en kurs inkommande data används dess innehåll för att ange en kategori om kursen ska skapas från grunden. Pluginmodulen kommer INTE att kategorisera om befintliga kurser.

Om det inte finns någon kategori med önskat namn skapas en dold kategori.';
$string['createnewcourses'] = 'Skapa nya (dolda) kurser om det inte går att hitta några i Moodle.';
$string['createnewcourses_desc'] = 'Om aktiverat kan pluginmodulen för registrering av IMS Enterprise skapa nya kurser för alla som hittas i IMS data men inte i Moodles databas. Alla nyskapade kurser är initialt dolda.';
$string['createnewusers'] = 'Skapa användarkonton för användare som ännu inte är registrerade i Moodle.';
$string['createnewusers_desc'] = 'IMS Enterprise-registreringsdata beskriver vanligtvis en uppsättning användare. Om det här alternativet är aktiverat kan konton skapas för alla användare som inte finns i Moodles databas.

Användare söks i första hand via deras "idnumber" och i andra hand via deras Moodle-användarnamn. Lösenord importeras inte av pluginmodulen IMS Enterprise. Användning av en autentiseringsplugin rekommenderas för autentisera användare.';
$string['cronfrequency'] = 'Hur ofta cron processas';
$string['deleteusers'] = 'Ta bort användarkonton när detta är angivet i IMS data.';
$string['deleteusers_desc'] = 'Om det här alternativet är aktiverat kan IMS Enterprise-registreringsdata ange borttagning av användarkonton (om flaggan "recstatus" är inställd på 3, vilket innebär borttagning av ett konto). Som standard i Moodle tas användarposten faktiskt inte bort från Moodles databas, men en flagga ställs in för att markera kontot som borttaget.';
$string['doitnow'] = 'importera en IMS Enterprise nu';
$string['emptyattribute'] = 'Lämnas tomt';
$string['filelockedmail'] = 'Det går inte att radera den textfil (som baserar sig på en IMS-fil) och som du använder för registreringar ({$a}) med hjälp av processen för cron. Detta innebär vanligtvis att det är något problem med rättigheterna. Vänligen ställ in rättigheterna så att Moodle kan ta bort filen annars kan den komma att processas upprepade gånger.';
$string['filelockedmailsubject'] = 'Viktigt fel: fil för registreringar';
$string['fixcasepersonalnames'] = 'Använd kamelnotation för personnamn';
$string['fixcaseusernames'] = 'Ändra användarnamn till små bokstäver';
$string['ignore'] = 'Ignorera';
$string['importimsfile'] = 'Importera IMS Enterprise-fil';
$string['imsenterprise:config'] = 'Konfigurera IMS Enterprise registreringsinstanser';
$string['imsenterprisecrontask'] = 'Bearbeta kursregistreringsfil';
$string['imsrolesdescription'] = 'Specifikationen för IMS Enterprise inkluderar 8 olika specifika typer av roller. Vänligen välj hur du vill att de ska tilldelas i Moodle, inklusive huruvida någon av dem inte ska användas.';
$string['location'] = 'Sökväg till fil';
$string['logtolocation'] = 'Loggfil för placering av output (tom om det inte finns några loggar)';
$string['mailadmins'] = 'Meddela administratören via e-post';
$string['mailusers'] = 'Meddela användarna via e-post';
$string['messageprovider:imsenterprise_enrolment'] = 'IMS Enterprise registreringsneddelanden';
$string['miscsettings'] = 'Övrigt';
$string['nestedcategories'] = 'Tillåt nästlade kategorier';
$string['nestedcategories_desc'] = 'Om aktiverat kommer IMS Enterprise skapa nästlade kategorier';
$string['pluginname'] = 'IMS Enterprise-fil';
$string['pluginname_desc'] = 'Den här metoden kommer upprepade gånger att söka efter och bearbeta en specialformaterad textfil på den plats som du anger. Filen måste följa IMS Enterprise-specifikationerna som innehåller XML-element för person, grupp och medlemskap.';
$string['privacy:metadata'] = 'Pluginmodulen IMS Enterprise filregistrering lagrar ingen personinformation.';
$string['processphoto'] = 'Läggt till data för användarfoto till profilen';
$string['processphotowarning'] = 'Varning! Att behandla bilder kommer sannolikt att innebära stor belastning på servern. Därför rekommenderar vi dig att inte aktivera det här alternativet om det är troligt att du kommer att behandla många studenter/elever/deltagare/lärande.';
$string['restricttarget'] = 'Behandla data bara om det följande målet är angivet';
$string['restricttarget_desc'] = 'En IMS Enterprise-datafil kan vara avsedd för flera "mål" - olika LMS:er eller olika system inom en skola / universitet. Det är möjligt att i Enterprise-filen ange att data är avsedda för ett eller flera namngivna målsystem, genom att namnge dem i <target>-taggar som finns i <properties>-taggen.

I allmänhet behöver du inte tänka på detta. Lämna inställningen tom och Moodle kommer alltid att bearbeta datafilen, oavsett om ett mål har angetts eller inte. Annars fyller du i det exakta namnet som kommer att matas ut i <target>-taggen.';
$string['roles'] = 'Roller';
$string['settingfullname'] = 'Beskrivande IMS-tagg för det fullständiga kursnamnet';
$string['settingfullnamedescription'] = 'Det fullständiga namnet är ett obligatoriskt kursfält och du måste definiera den valda beskrivningstaggen i din IMS Enterprise-fil';
$string['settingshortname'] = 'Beskrivande IMS-tagg för kursens kortnamn';
$string['settingshortnamedescription'] = 'Kortnamnet är ett obligatoriskt kursfält och du måste definiera den valda beskrivningstaggen i din IMS Enterprise-fil';
$string['settingsummary'] = 'Beskrivande IMS-tagg för kurssammanfattningen';
$string['settingsummarydescription'] = 'Är ett valfritt fält. Välj \'Lämnas tomt\' om du inte vill ange en kurssammanfattning';
$string['sourcedidfallback'] = 'Använd <em>\'sourcedid\'</em> som användarens användar-ID om inte fältet <em>\'userid\'</em> finns';
$string['sourcedidfallback_desc'] = 'I IMS-data representerar fältet <code><sourceid></code> den beständiga ID-koden för en person som används i källsystemet. <code><userid></code>-fältet är ett separat fält som ska innehålla den ID-kod som används av användaren när hen loggar in. I många fall kan dessa två koder vara desamma - men inte alltid.

Vissa studentinformationssystem kan inte visa <code><userid></code>-fältet. Om så är fallet bör du aktivera den här inställningen för att tillåta användning av <code><sourceid></code> som Moodle användar-ID. Annars lämnar du den här inställningen inaktiverad.';
$string['truncatecoursecodes'] = 'Trunkera kurskoderna till den här längden';
$string['truncatecoursecodes_desc'] = '<p>I vissa situationer kan du vilja trunkera kurskoder till en angiven längd innan du behandlar dem. I så fall ska du mata in antalet tecken i den här boxen. Om inte så kan du låta boxen förbli tom och då sker ingen trunkering.</p>';
$string['updatecourses'] = 'Uppdatera kurs';
$string['updatecourses_desc'] = 'Om det här alternativet är aktiverat kan pluginmodulen för kursregistrering via IMS Enterprise uppdatera fullständiga- och kortnamn (om flaggan "recstatus" är inställd på 2, vilket representerar en uppdatering).';
$string['updateusers'] = 'Uppdatera användarkonton när de anges i IMS-data';
$string['updateusers_desc'] = 'Om det här alternativet är aktiverat kan pluginmodulen för kursregistrering via IMS Enterprise ange förändringar av användarkonton (om flaggan "recstatus" är inställd på 2, vilket representerar en uppdatering).';
$string['usecapitafix'] = 'Markera den här kryssrutan om du använder <em>Capita</em> (deras XML-format är något annorlunda)';
$string['usecapitafix_desc'] = '<p>Det system för studentdata som Capita har producerat har visat sig ha ett litet fel i sin XML-output. Om du använder Capita så bör du aktivera det här alternativet - om inte - lämna det omarkerat.</p>';
$string['usersettings'] = 'Alternativ för användardata';
$string['zeroisnotruncation'] = '0 innebär att det inte ska vara någon trunkering';
