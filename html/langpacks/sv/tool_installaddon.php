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
 * Strings for component 'tool_installaddon', language 'sv', version '3.8'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Erkännanden';
$string['acknowledgementtext'] = 'Jag förstår att det är mitt ansvar att ha fullständiga säkerhetskopior av denna webbplats innan jag installerar ytterligare plugins. Jag accepterar och förstår att plugins (särskilt men inte bara de som har sitt ursprung i inofficiella källor) kan innehålla säkerhetshål, kan göra webbplatsen otillgänglig, eller orsaka privata dataläckor eller förlust.';
$string['featuredisabled'] = 'Plugin-installeraren är inaktiverad på denna webbplats.';
$string['installaddon'] = 'Installera plugin!';
$string['installaddons'] = 'Installera plugin-moduler';
$string['installfromrepo'] = 'Installera plugin-moduler från Moodles pluginkatalog';
$string['installfromrepo_help'] = 'Du kommer att omdirigeras till Moodles pluginkatalog för att söka efter och installera en plugin. Observera att din webbplats fullständigt namn, URL och Moodle version också kommer att skickas med, för att göra installationsprocessen lättare för dig.';
$string['installfromzip'] = 'Installera plugin från ZIP-fil';
$string['installfromzip_help'] = 'Ett alternativ till att installera en plugin direkt från Moodles plugin-katalog är att ladda upp ett ZIP-paket med plugin-modulen. ZIP-paketet ska ha samma struktur som ett paket som laddas ner från Moodles plugin-katalog.';
$string['installfromzipfile'] = 'ZIP-paket';
$string['installfromzipfile_help'] = 'Plugin ZIP-paketet måste innehålla bara en katalog, med ett namn som överensstämmer med pluginnamnet. ZIP-paketet kommer att extraheras till en lämplig plats för plugin-typen. Om paketet har laddats ner från Moodles pluginkatalog så kommer det att ha denna struktur.';
$string['installfromzipinvalid'] = 'Plugin ZIP-paketet måste innehålla bara en katalog, som har ett namn som överensstämmer med plugin-namnet. Filen som tillhandahålls är inte ett giltigt plugin ZIP-paket.';
$string['installfromziprootdir'] = 'Döp om rotkatalogen';
$string['installfromziprootdir_help'] = 'Vissa ZIP-paket, till exempel de som genereras av Github, kan innehålla ett felaktigt rotkatalognamn. Om så är fallet, kan det korrekta namnet anges här.';
$string['installfromzipsubmit'] = 'Installera en plugin från ZIP-filen';
$string['installfromziptype'] = 'Typ av plugin';
$string['installfromziptype_help'] = 'För plugins som korrekt deklarerar sitt komponentnamn, kan installationsprogrammet upptäcka plugin-typen automatiskt. Om auto-identifieringen misslyckas, välj rätt typ av plugin manuellt. Varning: Installationsproceduren kan misslyckas helt om en felaktig plugin-typ anges.';
$string['permcheck'] = 'Kontrollera att rotplatsen för plugin-typen är skrivbar för webbserver-processen.';
$string['permcheckerror'] = 'Fel vid kontroll av skrivbehörighet';
$string['permcheckprogress'] = 'Kontrollerar skrivbehörighet...';
$string['permcheckrepeat'] = 'Kontrollera igen';
$string['permcheckresultno'] = 'Platsen för plugin-typen <em>({$a->path})</em> är inte skrivbar';
$string['permcheckresultyes'] = 'Platsen för plugin-typen <em>({$a->path})</em> är skrivbar';
$string['pluginname'] = 'Plugin-installerare';
$string['privacy:metadata'] = 'Plugin-installeraren lagrar ingen personlig information.';
$string['remoterequestalreadyinstalled'] = 'Det finns en begäran om att installera plugin {$a->name} ({$a->component}) version {$a->version} från Moodles plugin-katalog på denna webbplats. Dock är denna plugin <strong>redan installerad</strong> på webbplatsen.';
$string['remoterequestconfirm'] = 'Det finns en begäran om att installera plugin <strong>{$a->name}</strong> ({$a->component}) version {$a->version} från Moodles plugin-katalog på denna webbplats. Om du fortsätter kommer plugin ZIP-paketet att laddas ner för validering. Ingenting kommer att installeras ännu.';
$string['remoterequestinvalid'] = 'Det finns en begäran om att installera en plugin från Moodles plugin-katalog på denna webbplats. Tyvärr är begäran inte giltig så pluginen kan inte installeras.';
$string['remoterequestnoninstallable'] = 'Det finns en begäran om att installera plugin {$a->name} ({$a->component}) version {$a->version} från Moodles plugin-katalog på denna webbplats. Förhandskontrollen av plugin-installationen misslyckades dock (orsakskod: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Det finns en begäran om att installera plugin {$a->name} ({$a->component}) version {$a->version} från Moodles plugin-katalog på denna webbplats. Platsen för <strong>{$a->typepath}</strong> är <strong>inte skrivbar</strong>. Du måste ge skrivåtkomst för webbserver-användaren till platsen, tryck sedan på fortsätt-knappen för att upprepa kontrollen.';
$string['remoterequestpluginfoexception'] = 'Oj... Ett fel uppstod när du försökte få fram information om plugin-versionen {$a->name} ({$a->component}) {$a->version}. Det går inte att installera insticksprogrammet. Aktivera felsökningsläget för att se detaljer om felet.';
$string['typedetectionfailed'] = 'Det går inte att identifiera plugin-typen. Vänligen välj plugin-typ manuellt.';
$string['typedetectionmismatch'] = 'Den valda plugin-typen matchar inte den som deklarerats av insticksprogrammet: {$a}';
