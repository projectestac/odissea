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
 * Strings for component 'tool_xmldb', language 'sv', version '3.8'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Faktisk';
$string['addpersistent'] = 'Lägg till beständiga obligatoriska fält';
$string['aftertable'] = 'Efter tabell:';
$string['back'] = 'Tillbaka';
$string['backtomainview'] = 'Tillbaka';
$string['cannotuseidfield'] = 'Det går inte att infoga \'id\'-fältet. Det är en självuppräknande kolumn.';
$string['change'] = 'Ändra';
$string['charincorrectlength'] = 'Felaktig längd på fält av typen tecken';
$string['check_bigints'] = 'Leta efter felaktiga DB-heltal';
$string['check_defaults'] = 'Leta efter inkonsekventa standardvärden';
$string['check_foreign_keys'] = 'Leta efter felaktiga främmande nycklar';
$string['check_indexes'] = 'Leta efter saknade DB-index';
$string['check_oracle_semantics'] = 'Leta efter ogiltig semantiklängd';
$string['checkbigints'] = 'Kontrollera heltal';
$string['checkdefaults'] = 'Kontrollera standardvärden';
$string['checkforeignkeys'] = 'Kontrollera främmande nycklar';
$string['checkindexes'] = 'Kontrollera index';
$string['checkoraclesemantics'] = 'Kontrollera semantik';
$string['completelogbelow'] = '(se den kompletta loggen för sökningen här nedan)';
$string['confirmcheckbigints'] = 'Den här funktionaliteten kommer att söka efter <a href="http://tracker.moodle.org/browse/MDL-11038"> potentiellt felaktiga fält för heltal (integer) </a> på Din Moodle-server som automatiskt genererar (men inte utför!) de nödvändiga SQL-satser (statements) som innehåller alla de korrekt definierade heltalen (integers) i Din DB. <br /><br />När de väl har genererats kan Du kopiera sådana satser säkert och utföra dem genom det gränssnitt för SQL som Du trivs bäst med (glöm inte att säkerhetskopiera Dina data innan Du gör det).<br /><br />Vi rekommenderar starkt att Du kör den senaste  tillgängliga versionen av Moodle innan du utför sökningen av felaktiga heltal (integers).<br /><br />Den här funktionaliteten utför inga åtgärder i förhållande till databasen (den bara läser den) så Du kan använda den när Du vill på ett säkert sätt.';
$string['confirmcheckdefaults'] = 'Den här funktionen söker efter inkonsekventa standardvärden på Moodle-servern och genererar (men kör inte!) de SQL-uttryck som behövs för att alla standardvärden ska definieras korrekt.

När du har genererat kan du kopiera uttrycken och köra dem via ditt favorit SQL-gränssnitt (glöm inte att säkerhetskopiera dina data innan du gör det).

Vi rekommenderar starkt att du kör den senaste (+ versionen) som är tillgänglig för moodle-versionen innan du kör sökningen efter inkonsekventa standardvärden.

Den här funktionen utför ingen åtgärd i databasen (den läser enbart från den), så det är säkert att köra den närsomhelst.';
$string['confirmcheckforeignkeys'] = 'Den här funktionen söker efter potentiella överträdelser av de främmande nycklar som definieras i install.xml. (Moodle genererar för närvarande inte faktiska begränsningar för främmande nyckel i databasen, varför ogiltiga data kan finnas.)

Vi rekommenderar starkt att du kör den senaste (+ versionen) som är tillgänglig för moodle-versionen innan du utför sökningen efter potentiella överträdelser av de främmande nycklarna.

Den här funktionen utför ingen åtgärd i databasen (den läser enbart från den), så det är säkert att köra den närsomhelst.';
$string['confirmcheckindexes'] = 'Den här funktionaliteten kommer att söka efter potentiellt felaktiga index på Din Moodle-server, som automatiskt genererar (men inte utför!) de SQL-satser (statements) som är nödvändiga för att allt ska bevaras uppdaterat. <br /><br />När de väl har genererats kan Du kopiera sådana satser säkert och utföra dem genom det gränssnitt för SQL som Du trivs bäst med (glöm inte att säkerhetskopiera Dina data innan Du gör det).<br /><br />Vi rekommenderar starkt att Du kör den senaste tillgängliga versionen av Moodle innan du utför sökningen index som saknas.<br /><br />Den här funktionaliteten utför inga åtgärder i förhållande till databasen (den bara läser den) så Du kan använda den när Du vill på ett säkert sätt.';
$string['confirmcheckoraclesemantics'] = 'Den här funktionen söker efter <a href="https://tracker.moodle.org/browse/MDL-29322">Oracle varchar2 kolumner som använder BYTE semantics</a> på din Moodle-server och genererar (men kör inte!) de SQL-uttryck som behövs för att alla kolumner ska konverteras till CHAR istället.

När du har genererat kan du kopiera dessa uttryck och köra dem via ditt favorit SQL-gränssnitt (glöm inte att säkerhetskopiera dina data innan du gör det).

Vi rekommenderar starkt att du kör den senaste (+ versionen) som är tillgänglig för moodle-versionen innan du utför sökningen av BYTE-semantik.

Den här funktionen utför ingen åtgärd i databasen (den läser enbart från den), så det är säkert att köra den närsomhelst.';
$string['confirmdeletefield'] = 'Är du helt säker på att du vill ta bort fältet:';
$string['confirmdeleteindex'] = 'Är du helt säker på att du vill ta bort indexet:';
$string['confirmdeletekey'] = 'Är du helt säker på att du vill ta bort nyckeln:';
$string['confirmdeletetable'] = 'Är du helt säker på att du vill ta bort tabellen:';
$string['confirmdeletexmlfile'] = 'Är du helt säker på att du vill ta bort filen:';
$string['confirmrevertchanges'] = 'Är du helt säker på att du vill återställa ändringar som har genomförts under perioden:';
$string['create'] = 'Skapa';
$string['createtable'] = 'Skapa tabell';
$string['defaultincorrect'] = 'Felaktigt standardvärde';
$string['delete'] = 'Ta bort';
$string['delete_field'] = 'Ta bort fält';
$string['delete_index'] = 'Ta bort index';
$string['delete_key'] = 'Ta bort nyckel';
$string['delete_table'] = 'Ta bort tabell';
$string['delete_xml_file'] = 'Ta bort XML-fil';
$string['doc'] = 'Dok';
$string['docindex'] = 'Dokumentationsindex:';
$string['documentationintro'] = 'Den här dokumentationen genereras automatiskt från XMLDB-databasdefinitionen. Den är endast tillgänglig på engelska.';
$string['down'] = 'Ner';
$string['duplicate'] = 'Dubblett';
$string['duplicatefieldname'] = 'Det finns redan ett fält med det namnet';
$string['duplicatefieldsused'] = 'Dubblettfält används';
$string['duplicateindexname'] = 'Duplicerat indexnamn';
$string['duplicatekeyname'] = 'Det finns en befintlig nyckel med det där namnet';
$string['duplicatetablename'] = 'En annan tabell med detta namn finns redan';
$string['edit'] = 'Redigera';
$string['edit_field'] = 'Redigera fält';
$string['edit_field_save'] = 'Spara fält';
$string['edit_index'] = 'Redigera index';
$string['edit_index_save'] = 'Spara index';
$string['edit_key'] = 'Redigera nyckel';
$string['edit_key_save'] = 'Spara nyckel';
$string['edit_table'] = 'Redigera tabell';
$string['edit_table_save'] = 'Spara tabell';
$string['edit_xml_file'] = 'Redigera XML-fil';
$string['enumvaluesincorrect'] = 'Felaktiga värden för fält av typ \'enum\'';
$string['expected'] = 'Förväntad';
$string['extensionrequired'] = 'PHP-tillägget \'{$a}\' krävs för denna åtgärd. Installera tillägget om du vill använda denna funktion.';
$string['field'] = 'Fält';
$string['fieldnameempty'] = 'Namnfältet är tomt';
$string['fields'] = 'Fält';
$string['fieldsnotintable'] = 'Det finns inget sådant fält i tabellen';
$string['fieldsusedinindex'] = 'Detta fält är ett indexfält';
$string['fieldsusedinkey'] = 'Fältet används som nyckel';
$string['filemodifiedoutfromeditor'] = 'Varning! Filen ändrades lokalt samtidigt som den ändrades i XMLDB-redigeraren. Om filen sparas kommer detta skriva över de lokala ändringarna.';
$string['filenotwriteable'] = 'Det går inte att skriva till fältet';
$string['fkunknownfield'] = 'Den främmande nyckeln {$a->keyname} i tabellen {$a->tablename} pekar på ett icke-existerande fält {$a->reffield} i refererad tabell {$a->reftable}.';
$string['fkunknowntable'] = 'Den främmande nyckeln {$a->keyname} i tabellen {$a->tablename} pekar på en icke-existerande tabell {$a->reftable}.';
$string['fkviolationdetails'] = 'Den främmande nyckeln {$a->keyname} till tabellen {$a->tablename} har felanvänts  {$a->numviolations} i {$a->numrows} rader.';
$string['float2numbernote'] = 'Tips: Även om "float"-fält stöds till 100% av XMLDB är det rekommenderat att migrera till "number".';
$string['floatincorrectdecimals'] = 'Felaktigt antal decimaler i float-fält';
$string['floatincorrectlength'] = 'Felaktig längd för float-fält';
$string['generate_all_documentation'] = 'All dokumentation';
$string['generate_documentation'] = 'Dokumentation';
$string['gotolastused'] = 'Gå till den senast använda filen';
$string['incorrectfieldname'] = 'Felaktigt namn';
$string['incorrectindexname'] = 'Felaktigt indexnamn';
$string['incorrectkeyname'] = 'Felaktigt nyckelnamn';
$string['incorrecttablename'] = 'Felaktigt tabellnamn';
$string['index'] = 'Index';
$string['indexes'] = 'Index';
$string['indexnameempty'] = 'Indexnamn är tomt';
$string['integerincorrectlength'] = 'Felaktig längd på heltalsfält';
$string['key'] = 'Nyckel';
$string['keynameempty'] = 'Nyckelnamnet får inte vara tomt';
$string['keys'] = 'Nycklar';
$string['listreservedwords'] = 'Lista över reserverade ord<br/>(används för att hålla dem <a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB_reserverade_ord</a> uppdaterade)';
$string['load'] = 'Ladda';
$string['main_view'] = 'Huvudvy';
$string['masterprimaryuniqueordernomatch'] = 'Fälten i den främmande nyckeln måste visas i samma ordning som de visas i den UNIKA NYCKELN i den refererade tabellen.';
$string['missing'] = 'Saknas';
$string['missingindexes'] = 'De saknade indexen har hittats';
$string['mustselectonefield'] = 'Du måste välja ett fält för att se de åtgärder som berör fält.';
$string['mustselectoneindex'] = 'Du måste välja ett index för att se de åtgärder som berör index.';
$string['mustselectonekey'] = 'Du måste välja en nyckel för att se de åtgärder som berör nycklar.';
$string['new_table_from_mysql'] = 'Ny tabell från MySQL';
$string['newfield'] = 'Nytt fält';
$string['newindex'] = 'Nytt index';
$string['newkey'] = 'Ny nyckel';
$string['newtable'] = 'Ny tabell';
$string['newtablefrommysql'] = 'Ny tabell från MySQL';
$string['nofieldsspecified'] = 'Inga fält angivna';
$string['nomasterprimaryuniquefound'] = 'De kolumner som dina främmande nyckel refererar till måste inkluderas i en primär eller unik NYCKEL i den refererade tabellen. Observera att kolumnen som finns i ett UNIKT INDEX inte är tillräcklig.';
$string['nomissingindexesfound'] = 'Det gick inte att hitta några saknade index så Du behöver inte göra något mer med Din databas.';
$string['noreffieldsspecified'] = 'Inga referensfält angivna';
$string['noreftablespecified'] = 'Angiven referenstabell kunde inte hittas';
$string['noviolatedforeignkeysfound'] = 'Det fanns inga främmande nycklar som har felanvänts';
$string['nowrongdefaultsfound'] = 'Inga inkonsekventa standardvärden har hittats. Databasen kräver inga ytterligare åtgärder.';
$string['nowrongintsfound'] = 'Det gick inte att hitta några felaktiga heltal  (integers) så Du behöver inte göra något mer med Din databas.';
$string['nowrongoraclesemanticsfound'] = 'Inga Oracle-kolumner med BYTE-semantik har hittats. Databasen kräver inga ytterligare åtgärder.';
$string['numberincorrectdecimals'] = 'Felaktigt antal decimaler för fält av typen \'tal\'.';
$string['numberincorrectlength'] = 'Felaktig längd på fält av typen tal';
$string['numberincorrectwholepart'] = 'För stor heltalsdel för nummerfält';
$string['pendingchanges'] = 'OBS! Du har gjort ändringar i den här filen. Det går att spara dem när som helst. ';
$string['pendingchangescannotbesaved'] = 'Det finns ändringar i den här filen men de kan inte sparas! Kontrollera att både katalogen och "install.xml" i den är skrivbara för webbservern.';
$string['pendingchangescannotbesavedreload'] = 'Det finns ändringar i den här filen men de kan inte sparas! Kontrollera att både katalogen och "install.xml" i den är skrivbara för webbservern. Ladda sedan om den här sidan och du bör kunna spara ändringarna.';
$string['persistentfieldscomplete'] = 'Följande fält har lagts till:';
$string['persistentfieldsconfirm'] = 'Vill du lägga till följande fält:';
$string['persistentfieldsexist'] = 'Följande fält finns redan:';
$string['pluginname'] = 'XMLDB-redigerare';
$string['primarykeyonlyallownotnullfields'] = 'Primärnycklar får inte vara null';
$string['privacy:metadata'] = 'Pluginmodulen XMLDB-redigerare lagrar ingen personlig information.';
$string['reserved'] = 'Reserverat';
$string['reservedwords'] = 'Reserverade ord';
$string['revert'] = 'Ångra';
$string['revert_changes'] = 'Ångra ändringar';
$string['save'] = 'Spara';
$string['searchresults'] = 'Sökresultat';
$string['selectaction'] = 'Välj åtgärd:';
$string['selectdb'] = 'Välj databas:';
$string['selectfieldkeyindex'] = 'Välj fält/nyckel/index:';
$string['selectonecommand'] = 'Välj en åtgärd i listan för att visa PHP-koden.';
$string['selectonefieldkeyindex'] = 'Vänligen välj ett fält/nyckel/index i listan för att se PHP-koden.';
$string['selecttable'] = 'Välj tabell:';
$string['table'] = 'Tabell';
$string['tablenameempty'] = 'Tabellnamnet får inte vara tomt';
$string['tables'] = 'Tabeller';
$string['unknownfield'] = 'Refererar till ett okänt fält';
$string['unknowntable'] = 'Refererar till en okänd tabell';
$string['unload'] = 'Ta bort';
$string['up'] = 'Upp';
$string['view'] = 'Visa';
$string['view_reserved_words'] = 'Visa reserverade ord';
$string['view_structure_php'] = 'Visa PHP-struktur';
$string['view_structure_sql'] = 'Visa SQL-struktur';
$string['view_table_php'] = 'Visa tabell för PHP';
$string['view_table_sql'] = 'Visa tabell för SQL';
$string['viewedited'] = 'Visa redigerad';
$string['vieworiginal'] = 'Visa ursprunglig';
$string['viewphpcode'] = 'Visa PHP-kod';
$string['viewsqlcode'] = 'Visa SQL-kod';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Främmande nycklar som har felanvänts';
$string['violatedforeignkeysfound'] = 'Det finns felanvändning av främmande nycklar';
$string['violations'] = 'Exempel på felanvändning';
$string['wrong'] = 'Fel';
$string['wrongdefaults'] = 'Felaktiga standardinställningar hittades';
$string['wrongints'] = 'Felaktiga heltal (integers) har hittats';
$string['wronglengthforenum'] = 'Felaktig längd för fält av typen \'enum\'';
$string['wrongnumberofreffields'] = 'Felaktigt antal referensfält';
$string['wrongoraclesemantics'] = 'Felaktig Oracle BYTE-semantik';
$string['wrongreservedwords'] = 'Reseverade ord som för närvarande används<br />(lägg märke till att tabellnamn inte är viktiga om $CFG-prefix är i bruk).';
$string['yesmissingindexesfound'] = 'En del saknade index återfanns i Din databas. Här hittar Du detaljerad information om dem och även de SQL-satser som är nödvändiga (och som du kan utföra med hjälp av det gränssnitt för SQL som Du föredrar) i och för att skapa dem (de saknade indexen). Glöm inte att säkerhetskopiera Dina data innan Du gör detta.  <br /><br />Efter det att Du har gjort det så rekommenderar vi starkt att Du använder den här funktionen igen för att kontrollera att det inte saknas ännu fler index.';
$string['yeswrongdefaultsfound'] = '<p>Några inkonsekventa standardvärden har hittats i din DB. Här är information om vilka och de nödvändiga SQL-satserna som ska köras för att fixa dem alla. Kom ihåg att säkerhetskopiera dina data först!</p> <p>Efter att du har gjort det rekommenderas det starkt att du kör det här verktyget igen för att kontrollera att inga fler inkonsekventa standardvärden hittas.</p>';
$string['yeswrongintsfound'] = 'En del felaktiga heltal återfanns i Din databas. Här hittar Du detaljerad information om dem och även de SQL-satser som är nödvändiga (och som du kan utföra med hjälp av det gränssnitt för SQL som Du föredrar) i och för att skapa dem (de saknade indexen). löm inte att säkerhetskopiera Dina data innan Du gör detta.<br /><br />Efter det att Du har gjort det så rekommenderar vi starkt att Du använder den här funktionen igen för att kontrollera att det inte finns ännu fler felaktiga heltal (integers).';
$string['yeswrongoraclesemanticsfound'] = '<p>Några Oracle-kolumner med BYTE-semantik har hittats i din DB. Här är information om vilka och de nödvändiga SQL-satserna som ska köras för att konvertera dem alla. Kom ihåg att säkerhetskopiera dina data först!</p> <p>Efter att du har gjort det rekommenderas det starkt att du kör det här verktyget igen för att kontrollera att inga fler felaktiga kolumner hittas.</p>';
