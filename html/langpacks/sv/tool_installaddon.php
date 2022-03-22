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
 * Strings for component 'tool_installaddon', language 'sv', version '3.11'.
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
$string['installaddons'] = 'Installera pluginmoduler';
$string['installfromrepo'] = 'Installera från Moodles pluginkatalog';
$string['installfromrepo_help'] = 'Du kommer att omdirigeras till Moodles pluginkatalog för att söka efter och installera en plugin. Observera att din webbplats fullständiga namn, URL och Moodle version också kommer att skickas med, för att göra installationsprocessen lättare för dig.';
$string['installfromzip'] = 'Installera pluginmodul från ZIP-fil';
$string['installfromzip_help'] = 'Ett alternativ till att installera en plugin direkt från Moodles plugin-katalog är att ladda upp ett ZIP-paket med plugin-modulen. ZIP-paketet ska ha samma struktur som ett paket som laddas ner från Moodles plugin-katalog.';
$string['installfromzipfile'] = 'ZIP-fil';
$string['installfromzipfile_help'] = 'ZIP-filen med pluginmodulen får bara innehålla <em>en</em> katalog, med ett namn som överensstämmer med namnet på pluginmodulen. ZIP-filen kommer att extraheras till en lämplig plats för plugintypen. Om filen har laddats ner från Moodles pluginkatalog kommer den att ha denna struktur.';
$string['installfromzipinvalid'] = 'ZIP-filen med pluginmodulen får bara innehålla <em>en</em> katalog, med ett namn som överensstämmer med namnet på pluginmodulen. Filen som tillhandahålls är inte en giltig ZIP-fil för en pluginmodul.';
$string['installfromziprootdir'] = 'Döp om rotkatalogen';
$string['installfromziprootdir_help'] = 'Vissa ZIP-paket, till exempel de som genereras av Github, kan innehålla ett felaktigt rotkatalognamn. Om så är fallet, kan det korrekta namnet anges här.';
$string['installfromzipsubmit'] = 'Installera pluginmodul från ZIP-fil';
$string['installfromziptype'] = 'Plugintyp';
$string['installfromziptype_help'] = 'För plugins som korrekt deklarerar sitt komponentnamn, kan installationsprogrammet upptäcka plugin-typen automatiskt. Om auto-identifieringen misslyckas, välj rätt typ av plugin manuellt. Varning: Installationsproceduren kan misslyckas helt om en felaktig plugin-typ anges.';
$string['permcheck'] = 'Kontrollera att rotplatsen för plugintypen är skrivbar för webbserver-processen.';
$string['permcheckerror'] = 'Fel vid kontroll av skrivbehörighet';
$string['permcheckprogress'] = 'Kontrollerar skrivbehörighet...';
$string['permcheckrepeat'] = 'Kontrollera igen';
$string['permcheckresultno'] = 'Platsen för plugin-typen <em>({$a->path})</em> är inte skrivbar';
$string['permcheckresultyes'] = 'Platsen för plugin-typen <em>({$a->path})</em> är skrivbar';
$string['pluginname'] = 'Installera pluginmodul';
$string['privacy:metadata'] = 'Plugin-installeraren lagrar ingen personlig information.';
$string['remoterequestalreadyinstalled'] = 'Det finns en begäran om att installera pluginmodulen {$a->name} ({$a->component}), version {$a->version}, från Moodles pluginkatalog på denna webbplats. Dock är denna pluginmodul <strong>redan installerad</strong> på webbplatsen.';
$string['remoterequestconfirm'] = 'Det finns en begäran om att installera pluginmodulen <strong>{$a->name}</strong> ({$a->component}), version {$a->version}, från Moodles pluginkatalog på denna webbplats. Om du fortsätter kommer ZIP-paketet med pluginmodulen laddas ned för validering. Ingenting kommer att installeras ännu.';
$string['remoterequestinvalid'] = 'Det finns en begäran om att installera en plugin från Moodles plugin-katalog på denna webbplats. Tyvärr är begäran inte giltig så pluginen kan inte installeras.';
$string['remoterequestnoninstallable'] = 'Det finns en begäran om att installera pluginmodulen {$a->name} ({$a->component}), version {$a->version}, från Moodles pluginkatalog på denna webbplats. Dock misslyckades förvalideringen av installationen (orsakskod: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Det finns en begäran om att installera pluginmodulen {$a->name} ({$a->component}), version {$a->version}, från Moodles pluginkatalog på denna webbplats. Platsen för <strong>{$a->typepath}</strong> är <strong>inte skrivbar</strong>. Du måste ge skrivåtkomst för webbserver-användaren till platsen, tryck sedan på fortsätt-knappen för att upprepa kontrollen.';
$string['remoterequestpluginfoexception'] = 'Oj... Ett fel uppstod när information om pluginmodulen {$a->name} ({$a->component}) version {$a->version} skulle hämtas. Det går inte att installera pluginmodulen. Aktivera felsökningsläget för att se feldetaljer.';
$string['typedetectionfailed'] = 'Det går inte att identifiera plugin-typen. Vänligen välj plugin-typ manuellt.';
$string['typedetectionmismatch'] = 'Den valda plugintypen matchar inte den som deklarerats av pluginmodulen: {$a}';
