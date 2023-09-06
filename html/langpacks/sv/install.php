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
 * Strings for component 'install', language 'sv', version '4.1'.
 *
 * @package     install
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'Den katalog för administration som är angiven är felaktig';
$string['admindirname'] = 'Admin-katalog';
$string['admindirsetting'] = 'Ett fåtal webbhotell använder <b>/admin</b> som en speciell URL för att t.ex. ge åtkomst till en
    kontrollpanel eller liknande. Tyvärr står detta i konflikt med standardplatsen för Moodle-administratörssidorna. Du kan åtgärda detta genom att byta namn på administratörskatalogen i installationen och ange det nya namnet här. Till exempel: <br> <br><b>moodleadmin</b><br><br>Detta kommer att korrigera administratörslänkarna i Moodle.';
$string['admindirsettinghead'] = 'Gör inställningar för katalogen admin...';
$string['admindirsettingsub'] = 'Ett fåtal webbhotell använder <b>/admin</b> som en speciell URL för att t.ex. ge åtkomst till en
    kontrollpanel eller liknande. Tyvärr står detta i konflikt med standardplatsen för Moodle-administratörssidorna. Du kan åtgärda detta genom att byta namn på administratörskatalogen i installationen och ange det nya namnet här. Till exempel: <br> <br><b>moodleadmin</b><br><br>Detta kommer att korrigera administratörslänkarna i Moodle.';
$string['availablelangs'] = 'Tillgängliga språkpaket';
$string['caution'] = 'Varning';
$string['chooselanguage'] = 'Välj ett språk';
$string['chooselanguagehead'] = 'Välj ett språk';
$string['chooselanguagesub'] = 'Vänligen välj ett språk för installationen. Du kommer att ha möjlighet att välja språk för webbplatsen och användarna på en senare skärm.';
$string['cliadminemail'] = 'Ny admin e-postadress';
$string['cliadminpassword'] = 'Nytt lösenord för användare med rättigheter som administratör';
$string['cliadminusername'] = 'Användarnamn för administratörskonto';
$string['clialreadyconfigured'] = 'Filen <em>config.php</em> finns redan. Använd <code>admin/cli/install_database.php</code> för att installera Moodle på denna server.';
$string['clialreadyinstalled'] = 'Filen <code>config.php</code> finns redan. Vänligen använd <code>admin/cli/upgrade.php</code> om du vill uppgradera Moodle på den här webbplatsen.';
$string['cliinstallfinished'] = 'Installationen slutfördes.';
$string['cliinstallheader'] = 'Kommandoradsbaserat installationsprogram för Moodle {$a}';
$string['climustagreelicense'] = 'I oövervakat läge måste du godkänna licensvillkoren genom att ange <code>--agree-license</code> växeln.';
$string['cliskipdatabase'] = 'Hoppar över databasinstallation.';
$string['clisupportemail'] = 'E-postadress till supporten';
$string['clitablesexist'] = 'Databastabellerna finns redan. CLI-installationen kan inte fortsätta.';
$string['compatibilitysettings'] = 'Kontrollerar Dina PHP-inställningar...';
$string['compatibilitysettingshead'] = 'Kontrollerar Dina PHP-inställningar...';
$string['compatibilitysettingssub'] = 'Den server bör klara alla dessa test för att Moodle ska fungera friktionsfritt.';
$string['configfilenotwritten'] = 'Skriptet för installationen kunde inte automatiskt skapa en config.php som innehåller de inställningar som du valt. Vänligen kopiera följande kod till en fil med namnet config.php i Moodles "root"-katalog.';
$string['configfilewritten'] = 'config.php har skapats framgångsrikt';
$string['configurationcomplete'] = 'Konfigurationen är  genomförd';
$string['configurationcompletehead'] = 'Konfigurationen är  genomförd';
$string['configurationcompletesub'] = 'Moodle gjorde ett försök att spara Din konfiguration i en fil i roten (root) på Din installation av Moodle.';
$string['database'] = 'Databas';
$string['databasehead'] = 'Inställningar för databas';
$string['databasehost'] = 'Databasserver';
$string['databasename'] = 'Namn på databas';
$string['databasepass'] = 'Lösenord för databas';
$string['databaseport'] = 'Databas-port';
$string['databasesocket'] = 'Unix socket';
$string['databasetypehead'] = 'Välj drivrutin för databasen';
$string['databasetypesub'] = 'Moodle stödjer ett flertal typer av databasservrar. Vänligen kontakta serveradministratören om du inte vet vilken typ du ska använda.';
$string['databaseuser'] = 'Databasanvändare';
$string['dataroot'] = 'Datakatalog';
$string['datarooterror'] = 'Datakatalogen du angav kunde inte hittas eller skapas. Ändra sökvägen eller skapa katalogen manuellt.';
$string['datarootpermission'] = 'Behörigheter för datakataloger';
$string['datarootpublicerror'] = 'Den "datakatalog" du angav är direkt tillgänglig via webben. Använd en annan katalog.';
$string['dbconnectionerror'] = 'Det gick inte att ansluta till den databas som du har angivit. Vänligen kontrollera inställningarna till din databas.';
$string['dbcreationerror'] = 'Fel (error) när databasen skulle skapas. Det gick tyvärr inte att skapa det namn (och med de inställningar) på databasen som Du har angivit';
$string['dbhost'] = 'Värd';
$string['dbpass'] = 'Lösenord';
$string['dbport'] = 'Port';
$string['dbprefix'] = 'Prefix för tabeller';
$string['dbtype'] = 'Typ';
$string['directorysettings'] = '<p> Vänligen bekräfta placeringarna av denna installation av Moodle</p>
<p><b>Webbadress</b>
Ange den fullständiga adressen till Moodle. Om din webbplats går att nå via flera (ett antal olika) URL:er så bör du välja den som är mest naturlig för dina användare (studenter etc).
Ta inte inte med något avslutande vänsterlutat snedstreck "/".</p>

<p><b>Katalogen för Moodle</b>
Ange den fullständiga sökvägen till den här installationen. Kontrollera att det stämmer med sådant som är skiftlägeskänsligt (stor/liten bokstav).
</p>
<p><b>Katalogen för data</b>
Du behöver ett utrymme där Moodle kan spara uppladdade filer. Till denna katalog bör det finnas läs- OCH SKRIV-rättigheter för användaren av webbservern (vanligtvis \'nobody\' eller  \'apache\') men katalogen bör inte vara tillgänglig direkt via webben.';
$string['directorysettingshead'] = 'Vänligen bekräfta platsen för denna Moodle-installation.';
$string['directorysettingssub'] = '<b>Webbadress:</b> Ange den fullständiga webbadressen till Moodle. Om det går att nå Din via flerfaldiga URLer så ska Du välja den som det ligger närmast till hands för Dina studenter att använda. Ta inte med något högerlutat snedstreck. <br /> <br /> <b>Katalogen för Moodle:</b> Ange den fullständiga sökvägen till den här installationen. Se till att hänsyn tas till stor/liten bokstav. <br /> <br /> <b>Katalogen för data:</b> Du behöver en plats där Moodle kan lagra de filer som laddas upp till systemet. Denna katalog bör vara läs- och SKRIVBAR för användaren av webbservern (vanligen \'nobody\' eller \'apache\'), men denna katalog bör inte vara tillgänglig direkt via webben.';
$string['dirroot'] = 'Moodle-katalog';
$string['dirrooterror'] = 'Inställningarna för "Moodle-katalog" tycks vara felaktiga - det går inte att hitta någon installation av Moodle där. Värdet här nedan har återställts.';
$string['download'] = 'Ladda ned';
$string['downloadlanguagebutton'] = 'Ladda ner språkpaketet "{$a}"';
$string['downloadlanguagehead'] = 'Ladda ner språkpaket';
$string['downloadlanguagenotneeded'] = 'Du kan fullfölja installationsprocessen samtidigt som Du använder standardpaketet för språk, "{$a}".';
$string['downloadlanguagesub'] = 'Du har nu möjligheten att ladda ner ett språkpaket och fortsätta installationen av det här språket.<br /><br />Om Du inte kan ladda ner språkpaketet så kommer installationen att fortsätta på engelska. Så snart installationen är klar så kan Du ladda ner och installera ytterligare språkpaket.';
$string['doyouagree'] = 'Accepterar Du? (ja/nej)';
$string['environmenthead'] = 'Kontrollerar miljön...';
$string['environmentsub'] = 'Vi kontrollerar om de olika komponenterna i Ditt system svarar upp mot systemkraven.';
$string['environmentsub2'] = 'Varje Moodleversion har ett lägsta PHP-versionskrav samt krav på ett antal obligatoriska PHP-tillägg.
En fullständig kontroll av miljön görs före varje installation och uppgradering. Kontakta serveradministratören om du inte vet hur du installerar en ny version eller aktiverar PHP-tillägg.';
$string['errorsinenvironment'] = 'Kontrollen av miljön misslyckades';
$string['fail'] = 'Misslyckas';
$string['fileuploads'] = 'Filuppladdningar';
$string['fileuploadserror'] = 'Detta bör vara aktiverat (on)';
$string['fileuploadshelp'] = '<p>Uppladdning av filer verkar vara inaktiverat på din server.</p>
<p>Det kan fortfarande vara så att Moodle är installerat, men utan denna funktionalitet så kommer du inte att kunna ladda upp kursfiler eller nya bilder till användarprofilerna. </p>
<p>För att aktivera uppladdning av filer så måste du (eller din systemadministratör) redigera den övergripande php.ini-filen på Ert system och ändra inställningen för <b>uppladdning av filer (file uploads)</b> till \'1\'.</p>';
$string['inputdatadirectory'] = 'Datakatalog:';
$string['inputwebadress'] = 'Webbadress:';
$string['inputwebdirectory'] = 'Moodle-katalog:';
$string['installation'] = 'Installation';
$string['invaliddbprefix'] = 'Ogiltigt prefix. Prefixet kan bara bestå av gemener och understreck.';
$string['langdownloaderror'] = 'Språket "{$a}" gick tyvärr inte att ladda ner. Installationen kommer att fullföljas på engelska.';
$string['langdownloadok'] = 'Språket "{$a}" installerades framgångsrikt. Installationen kommer att fullföljas på detta språk.';
$string['memorylimit'] = 'Minnesgräns';
$string['memorylimiterror'] = 'Minnesbegränsningen för PHP på Din server är f n inställt till ett ganska lågt värde... Detta kan leda till problem senare.';
$string['memorylimithelp'] = '<p>PHP-minnesgränsen för servern är för närvarande inställd på {$a}.</p>

<p>Detta kan leda till att Moodle får minnesproblem senare, särskilt om du har många moduler aktiverade och/eller många användare.</p>

<p>Vi rekommenderar att du konfigurerar PHP med en högre gräns om möjligt, till exempel 40M.
   Det finns flera sätt som du kan prova att göra detta på:</p>
<ol>
<li>Om du kan, kompilera om PHP med <code>--enable-memory-limit</code>.
    Detta gör det möjligt för Moodle att själv ställa in minnesgränsen.</li>
<li>Om du har tillgång till din php.ini fil kan du ändra <code>memory_limit</code>
    inställningen till t.ex. 40M.  Om du inte har åtkomst kan du be administratören göra detta åt dig.</li>
<li>På vissa PHP-servrar kan du skapa en HTACCESS-fil i Moodle-katalogen
    som innehåller denna rad:
    <blockquote><div>php_value memory_limit 40M</div></blockquote>
<p>Dock kan detta för vissa servrar resultera i att <b>alla</b> PHP-sidor slutar fungera (du får felmeddelande då du försöker visa dem). I dessa fall behöver du ta bort .htaccess-filen.</p></li>
</ol>';
$string['mysqliextensionisnotpresentinphp'] = 'PHP har inte blivit korrekt konfigurerat tillsammans med MySQLi-tillägget för att det ska kommunicera med MySQL. Vänligen kontrollera din php.ini fil eller kompilera om PHP.';
$string['nativeauroramysql'] = 'Aurora MySQL (native/auroramysql)';
$string['nativeauroramysqlhelp'] = '<p>Databasen är där de flesta av Moodles inställningar och data lagras och den måste konfigureras här.</p>
<p>Databasens namn, användarnamn och lösenord är obligatoriska fält; tabellprefixet är valfritt.</p>
<p>Databasens namn får endast innehålla alfanumeriska tecken, dollar ($) och understreck (_).</p>
<p>Om databasen för närvarande inte finns, och användaren du anger har behörighet, kommer Moodle att försöka skapa en ny databas med rätt behörigheter och inställningar.</p>
<p>Denna drivrutin är inte kompatibel med äldre versioner av MyISAM.</p>';
$string['nativemariadb'] = 'MariaDB (native/mariadb)';
$string['nativemariadbhelp'] = '<p>Databasen är där de flesta av Moodles inställningar och data lagras och den måste konfigureras här.</p>
<p>Databasens namn, användarnamn och lösenord är obligatoriska fält; tabellprefixet är valfritt.</p>
<p>Databasens namn får endast innehålla alfanumeriska tecken, dollar ($) och understreck (_).</p>
<p>Om databasen för närvarande inte finns, och användaren du anger har behörighet, kommer Moodle att försöka skapa en ny databas med rätt behörigheter och inställningar.</p>
<p>Denna drivrutin är inte kompatibel med äldre versioner av MyISAM.</p>';
$string['nativemysqli'] = 'Förbättrad MySQL (native/mysqli)';
$string['nativemysqlihelp'] = '<p>Databasen är där de flesta av Moodles inställningar och data lagras och den måste konfigureras här.</p>
<p>Databasens namn, användarnamn och lösenord är obligatoriska fält; tabellprefixet är valfritt.</p>
<p>Databasens namn får endast innehålla alfanumeriska tecken, dollar ($) och understreck (_).</p>
<p>Om databasen för närvarande inte finns, och användaren du anger har behörighet, kommer Moodle att försöka skapa en ny databas med rätt behörigheter och inställningar.</p>';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativeocihelp'] = 'Nu måste Du konfigurera databasen där större delen av Moodles data kommer att lagras. Du måste först skapa databasen liksom ett användarnamn och ett lösenord för att få tillgång till den. Ett prefix för tabeller är obligatoriskt. ';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = '<p>Databasen är där de flesta av Moodles inställningar och data lagras och den måste konfigureras här.</p>
<p>Databasens namn, användarnamn, lösenord och tabellprefix är obligatoriska fält.</p>
<p>Databasen måste redan finnas och användaren måste ha behörighet att både läsa, och skriva till den.</p>';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Nu måste Du konfigurera databasen där större delen av Moodles data kommer att lagras. Du måste först skapa databasen liksom ett användarnamn och ett lösenord för att få tillgång till den. Ett prefix för tabeller är obligatoriskt. ';
$string['nativesqlsrvnodriver'] = 'Microsoft-drivrutiner för SQL Server för PHP är inte installerade eller inte korrekt konfigurerade.';
$string['ociextensionisnotpresentinphp'] = 'PHP har inte konfigurerats på rätt sätt med tillägget OCI8. Därför kan det inte kommunicera med Oracle. Vänligen kontrollera din php.ini-fil eller kompilera om PHP.';
$string['pass'] = 'Pass';
$string['paths'] = 'Sökvägar';
$string['pathserrcreatedataroot'] = 'Installationsprogrammet kan inte skapa datakatalogen <code>{$a->dataroot}</code>.';
$string['pathshead'] = 'Bekräfta sökvägar';
$string['pathsrodataroot'] = 'Det går inte att skriva till dataroot-katalogen.';
$string['pathsroparentdataroot'] = 'Överliggande katalog ({$a->parent}) är inte skrivbar. Installationsprogrammet kan inte skapa dataroot-katalogen ({$a->dataroot}).';
$string['pathssubadmindir'] = 'Ett fåtal webbhotell använder <var>/admin</var> som en speciell URL för att ge möjlighet att komma åt en
kontrollpanel eller liknande. Tyvärr står detta i konflikt med standardplatsen för Moodle-administratörssidorna.  Du kan åtgärda detta genom att
byta namn på administratörskatalogen i installationen och ange det nya namnet här. Till exempel: <var>moodleadmin</var>. Detta kommer att korrigera administratörslänkarna i Moodle.';
$string['pathssubdataroot'] = '<p>En katalog där Moodle lagrar allt filinnehåll som laddas upp av användare.</p>
<p>Den här katalogen ska vara både skriv- och läsbar av webbserveranvändaren (vanligtvis "www-data", "nobody" eller "apache").</p>
<p>Den får inte vara direkt tillgängligt över internet.</p>
<p>Om katalogen inte finns kommer installationsprogrammet försöka skapa den.</p>';
$string['pathssubdirroot'] = '<p>Fullständig sökväg till katalogen som innehåller Moodle-koden.</p>';
$string['pathssubwwwroot'] = '<p>Den fullständiga webadressen där Moodle finns, dvs. adressen som användarna kommer att ange i adressfältet i sin webbläsare för att komma åt Moodle.</p>
<p>Det går inte att komma åt Moodle med flera adresser. Om din webbplats är tillgänglig via flera adresser väljer du den enklaste och ställer in en permanent omdirigering för var och en av de andra adresserna.</p>
<p>Om webbplatsen är tillgänglig både från Internet och från ett internt nätverk (kallas ibland intranät) använder du den publika adressen här.</p>
<p>Om den aktuella adressen inte är korrekt ändrar du URL:en i webbläsarens adressfält och startar om installationen.</p>';
$string['pathsunsecuredataroot'] = 'Platsen för dataroot är inte säker';
$string['pathswrongadmindir'] = 'Admin-katalogen saknas';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP har inte konfigurerats på rätt sätt med tillägget PGSQL. Därför kan det inte kommunicera med PostgreSQL. Vänligen kontrollera din php.ini-fil eller kompilera om PHP.';
$string['phpextension'] = '{$a} PHP-tillägg';
$string['phpversion'] = 'PHP-version';
$string['phpversionhelp'] = '<p>Moodle kräver minst PHP-version 5.6.5 eller 7.1 (7.0.x har vissa motorbegränsningar).</p>
<p>Du använder för närvarande version {$a}.</p>
<p>Du måste uppgradera PHP eller flytta till en server med en nyare version av PHP.</p>';
$string['releasenoteslink'] = 'För information om den här versionen av Moodle, läs viktig information vid {$a}';
$string['safemode'] = 'Felsäkert läge';
$string['safemodeerror'] = 'Moodle kan få problem om \'säkert läge\' (safe mode) är aktiverat';
$string['safemodehelp'] = '<p>Moodle kan uppvisa en mängd olika problem om säkert läge är påslaget. Sannolikt kommer det t.ex. inte vara tillåtet att skapa filer.</p>

<p>Säkert läge är vanligtvis endast aktiverat av paranoida offentliga webbhotell, så du kan eventuellt behöva hitta en ny webbplatsleverantör.</p>

<p>Du kan försöka fortsätta med installationen om du vill, men du kan förvänta dig problem framöver.</p>';
$string['sessionautostart'] = 'Automatisk sessionsstart';
$string['sessionautostarterror'] = 'De här bör vara inställt till \'off\'.';
$string['sessionautostarthelp'] = '<p>Moodle kräver stöd för sessioner och kommer inte att fungera utan det.</p>
<p>Sessioner kan vara aktiverade i php.ini-filen... kontrollera parametern för session.auto_start. </p>';
$string['sqliteextensionisnotpresentinphp'] = 'PHP har inte konfigurerats korrekt med tillägget för SQLite. Vänligen kontrollera din php.ini-fil för att kompilera om PHP.';
$string['upgradingqtypeplugin'] = 'Uppgraderar frågetyp-plugin';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Du ser denna sida eftersom installationen av <strong>{$a->packname} {$a->packversion}</strong>-paketet lyckades.';
$string['welcomep30'] = 'Den här versionen av <strong>{$a->installername}</strong> innehåller program för att skapa en miljö där <strong>Moodle</strong> kommer att fungera, nämligen:';
$string['welcomep40'] = 'I paketet ingår även <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Användningen av alla applikationer i detta paket regleras av deras respektive licenser. Det fullständiga <strong>{$a->installername}</strong>-paketet är baserat på <a href="https://www.opensource.org/docs/definition_plain.html">öppen källkod</a> och distribueras under <a href="https://www.gnu.org/copyleft/gpl.html">GPL</a>-licens.';
$string['welcomep60'] = 'Följande sidor leder dig genom några enkla steg för att konfigurera och installera <strong>Moodle</strong> på din dator. Du kan acceptera standardinställningarna eller, alternativt, modifiera dem för att passa dina egna behov.';
$string['welcomep70'] = 'Klicka på "Nästa" här nedan för att fortsätta installationen av <strong>Moodle</strong>.';
$string['wwwroot'] = 'Webbadress';
$string['wwwrooterror'] = 'Webbadressen verkar inte vara giltig - den här installationen av Moodle verkar inte att finnas där.
Värdet nedan har återställts.';
