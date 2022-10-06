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
 * Strings for component 'enrol_lti', language 'nl', version '3.11'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'Opmerking: je kunt het best de site-beheerinstelling \'Inbedden in frame\' op toestaan zetten, zodat tools getoond worden in een frame in plaats van in een nieuw venster.';
$string['authltimustbeenabled'] = 'Opmerking: deze plugin vereist dat de LTI authenticatieplugin ook ingeschakeld is.';
$string['cartridgeurl'] = 'Cartridge URL';
$string['couldnotestablishproxy'] = 'Kon geen proxy met verbruiker opzetten';
$string['deletedactivity'] = 'Verwijderde activiteit';
$string['deletedactivityalt'] = 'De gedeelde activiteit is verwijderd';
$string['deletedactivitydescription'] = 'De activiteit die door deze instantie is gedeeld, is verwijderd. Je kunt een andere activiteit selecteren om te delen door deze instantie te bewerken of, als het niet langer nodig is, deze instantie verwijderen. Het verwijderen van deze instantie zal geassocieerde gebruikersaanmeldingen verwijderen.';
$string['enrolenddate'] = 'Einddatum';
$string['enrolenddate_help'] = 'Indien ingeschakeld hebben gebruikers enkel tot die dag toegang.';
$string['enrolenddateerror'] = 'Aanmelding -en einddatum kunnen niet vroeger zijn dan startdatum';
$string['enrolisdisabled'] = 'De plugin "Publiceer als LTI" is uitgeschakeld.';
$string['enrolmentfinished'] = 'Aanmelding beëindigd.';
$string['enrolmentnotstarted'] = 'Aanmeldingen zijn nog niet begonnen.';
$string['enrolperiod'] = 'Aanmeldingsduur';
$string['enrolperiod_help'] = 'De tijdsduur waarvoor de aanmelding geldig is. Deze start op het moment dat een gebruiker zichzelf aanmeldt vanaf het externe systeem. Indien uitgeschakeld zal de aanmeldingsduur onbeperkt zijn.';
$string['enrolstartdate'] = 'Startdatum';
$string['enrolstartdate_help'] = 'Indien ingeschakeld kunnen gebruikers slechts vanaf deze datum toegang krijgen.';
$string['failedrequest'] = 'Mislukte aanvraag. Reden: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Volg onderstaande link om toegang te krijgen tot de tool.';
$string['gradesync'] = 'Cijfersynchronisatie';
$string['gradesync_help'] = 'Of cijfers van de tool naar het externe systeem (LTI gebruiker) gestuurd worden.';
$string['incorrecttoken'] = 'Het token was fout. Controleer de URL en probeer opnieuw of neem contact op met de beheerder van deze tool.';
$string['invalidrequest'] = 'Ongeldige aanvraag';
$string['invalidtoolconsumer'] = 'Ongeldige tool-gebruiker.';
$string['launchdetails'] = 'Opstartdetails';
$string['launchdetails_help'] = 'Een cartridge URL (ook wel configuratie URL) plus een geheim zijn vereist voor het configureren van deze tool.';
$string['launchurl'] = 'Start URL';
$string['lti:config'] = 'Configureer \'Publiceer als LTI-tool\'-instanties';
$string['lti:unenrol'] = 'Gebruikers afmelden van de cursus';
$string['maxenrolled'] = 'Maximaal aantal aangemelde gebruikers';
$string['maxenrolled_help'] = 'Het maximale aantal externe gebruikers die toegang krijgen tot de tool. Indien je dit op nul zet zal het aantal aangemelde gebruikers onbeperkt zijn.';
$string['maxenrolledreached'] = 'Het maximale aantal externe gebruikers die toegelaten worden tot de tool is bereikt.';
$string['membersync'] = 'Gebruikerssynchronisatie';
$string['membersync_help'] = 'Of een geplande taak aangemelde gebruikers in het externe systeem synchroniseert met aanmeldingen in deze cursus, waarbij een account voor elke gebruiker wordt gemaakt indien nodig en gebruikers aangemeld en afgemeld worden zoals vereist door het externe systeem.

Indien dit op nee gezet wordt, dan zal er een account gemaakt worden en die zal aangemeld worden wanneer een externe gebruiker de tool gebruikt.';
$string['membersyncmode'] = 'Gebruikerssynchronisatiemodus';
$string['membersyncmode_help'] = 'Of externe gebruikers moeten worden aangemeld en/of afgemeld van deze cursus.';
$string['membersyncmodeenrolandunenrol'] = 'Nieuwe gebruikers aanmelden en ontbrekende gebruikers afmelden';
$string['membersyncmodeenrolnew'] = 'Nieuwe gebruikers aanmelden';
$string['membersyncmodeunenrolmissing'] = 'Ontbrekende gebruikers afmelden';
$string['notoolsprovided'] = 'Geen tools beschikbaar';
$string['opentool'] = 'Open tool';
$string['pluginname'] = 'Publiceer als LTI-tool';
$string['pluginname_desc'] = 'De \'Publiceer als LTI-tool\'-plugin, samen met de LTI authenticatieplugin  maakt het voor externe gebruikers mogelijk om toegang te krijgen tot geselecteerde cursussen en activiteiten. Met andere woorden: Moodle werkt als een LTI-tool-provider.';
$string['privacy:metadata:enrol_lti_users'] = 'De lijst van gebruikers die aangemeld zijn via een LTI-provider';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'Het tijdstip waarop de gebruiker laatst toegang had tot de cursus';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'Het laatste cijfer dat van de gebruiker bewaard is';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'Het tijdstip waarop de gebruiker aangemeld is';
$string['privacy:metadata:enrol_lti_users:userid'] = 'De ID van de gebruiker';
$string['registration'] = 'Gepubliceerder toolregistratie';
$string['registrationurl'] = 'Registratie-URL';
$string['registrationurl_help'] = 'Indien er een registratie-URL (ook wel proxy URL) wordt gebruikt, wordt deze tool automatisch geconfigureerd.';
$string['remotesystem'] = 'Extern systeem';
$string['requirecompletion'] = 'Vereis cursus of activiteit voltooid voor synchronisatie van cijfers';
$string['returnurlnotset'] = 'De terugkeer-URL is niet ingesteld';
$string['roleinstructor'] = 'Rol voor leraar';
$string['roleinstructor_help'] = 'De rol in de tool toegewezen aan de externe leraar.';
$string['rolelearner'] = 'Rol voor leerling';
$string['rolelearner_help'] = 'De rol in de tool toegewezen aan de externe leerling.';
$string['secret'] = 'Geheim';
$string['secret_help'] = 'Een string met tekens die gedeeld wordt met het externe systeem (LTI verbruiker) om toegang te verschaffen tot de tool.';
$string['sharedexternaltools'] = 'Gepubliceerd als LTI tools';
$string['successfulregistration'] = 'Registratie gelukt';
$string['tasksyncgrades'] = 'Publiceer als LTI-tool met gesynchroniseerde cijfers';
$string['tasksyncmembers'] = 'Publiceer als LTI-tool met gesynchroniseerde gebruikers';
$string['toolsprovided'] = 'Gepubliceerde tools';
$string['toolsprovided_help'] = 'Een tool kan gedeeld worden met een andere site door startdetails door te geven of met een registratie-URL.';
$string['tooltobeprovided'] = 'Te publiceren tool';
$string['toolurl'] = 'Tool URL';
$string['userdefaultvalues'] = 'Standaard waarden gebruikers';
