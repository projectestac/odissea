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
 * Strings for component 'simplecertificate', language 'nl', version '4.5'.
 *
 * @package     simplecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allusers'] = 'Alle gebruikers';
$string['awardedsubject'] = 'Uitgereikte certifcaat melding:  {$a->certificate} uitgegeven aan{$a->student}';
$string['awardedto'] = 'Uitgereikt aan:';
$string['bulkaction'] = 'Kies een bulk operatie:';
$string['bulkbuttonlabel'] = 'Verstuur';
$string['bulkview'] = 'Bulk opvragen';
$string['cantdeleteissue'] = 'Foutmelding bij het verwijderen uitgegeven certficaten';
$string['cantissue'] = 'Dit certificaat kan niet uitgegeven worden, omdat de gebruiker niet de juiste voorwaarden heeft.';
$string['certificatecopy'] = 'Kopie';
$string['certificateimage'] = 'Certificaat afbeeldingsbestand';
$string['certificateimage_help'] = 'Dit is de afbeelding die gebruikt wordt voor het certficaat.';
$string['certificatename'] = 'Certificaat naam';
$string['certificatename_help'] = 'Certificaat naam';
$string['certificatenot'] = 'Simpel certficaat niet gevonden';
$string['certificatetext'] = 'Certificaat tekst';
$string['certificatetext_help'] = 'Dit is de tekst die gebruikt kan worden op de certificaat achterkant, sommige woorden zullen veranderd worden, zoals cursusnaam, cursistnaam, cijfer...

De meeste velden zijn afkomst uit het PROFIEL van de gebruiker.

De tekst velden zijn:
<ul>
<li>{USERNAME} -> Gebruiker volledige naam</li>
<li>{COURSENAME} -> Cursus naam of het gekozen alternatief</li>
<li>{GRADE} -> Het cijfer</li>
<li>{DATE} ->De datum</li>
<li>{OUTCOME} -> Resultaten</li>
<li>{TEACHERS} -> Docenten lijst</li>
<li>{IDNUMBER} -> Gebruikers ID nummer</li>
<li>{FIRSTNAME} -> Gebruikers voornaam</li>
<li>{LASTNAME} -> Gebruikers achternaam</li>
<li>{EMAIL} -> Gebruikers e-mail</li>
<li>{ICQ} -> Gebruikers ICQ</li>
<li>{SKYPE} -> Gebruikers Skype</li>
<li>{YAHOO} -> Gebruikers yahoo messenger</li>
<li>{AIM} -> Gebruikers AIM</li>
<li>{MSN} -> GebruikersMSN</li>
<li>{PHONE1} -> Gebruikers 1° telefoonnummer</li>
<li>{PHONE2} -> Gebruikers 2° telefoonnummer</li>
<li>{INSTITUTION} -> Bedrijfsnaam</li>
<li>{DEPARTMENT} -> Afdeling</li>
<li>{ADDRESS} -> Adres</li>
<li>{CITY} -> User city</li>
<li>{COUNTRY} -> Land</li>
<li>{URL} -> Gebruikers website</li>
<li>{CERTIFICATECODE} -> Unieke certificaat code tekst</li>
<li>{USERROLENAME} -> Gebruikers rol in de cursus</li>
<li>{TIMESTART} -> Enrolldatum van de gebruiker in de cursus</li>
<li>{USERIMAGE} -> Gebruikersfoto</li>
<li>{USERRESULTS} -> Gebruikers resultaten in andere cursus activiteiten</li>
<li>{PROFILE_xxxx} -> Gebruikers aangepaste profielvelden</li>
</ul>
Wanneer je aangepaste en/of toegevoegde profielvelden wilt gebruiken moet je  "PORFILE_" prefix gebruik. Bijvoorbeeld: : je hebt een profielveld toegevoegd voor een geboortedatum, met als verkorte tekst "birthday". Het tekstveld wordt dan: {PROFILE_BIRTHDAY}.
De tekst kan basis html, fonts, tables bevatten, maar vermeid positie vermeldingen.';
$string['certificatetextx'] = 'Certificaat Tekst horizontale positie';
$string['certificatetexty'] = 'Certificaat Tekst vertificale posite';
$string['certificateverification'] = 'Verificatie certificaat';
$string['certlifetime'] = 'Bewaar uitgegeven certificaten voor:  (in maanden)';
$string['certlifetime_help'] = 'Hier geef je aan hoelang je uitgegeven certificaten wilt bewaren. Uitgegeven certificaten die ouder zijn dan de aangegeven periode, zullen automatisch verwijderd worden.';
$string['code'] = 'Code';
$string['codex'] = 'Certificate QR Code Horizontale positie';
$string['codey'] = 'Certificaat QR Code Vertifcale positie';
$string['completedusers'] = 'Gebruikers die de voorwaarden bereikt hebben';
$string['completiondate'] = 'Cursus voltooid';
$string['coursegrade'] = 'Cursus cijfer';
$string['coursename'] = 'Alternatieve cursus naam';
$string['coursename_help'] = 'Alternatieve cursus naam';
$string['coursenotfound'] = 'Cursus niet gevonden';
$string['coursestartdate'] = 'Cursus startdatum';
$string['coursetimereq'] = 'Verplicht aantal minuten in de cursus';
$string['coursetimereq_help'] = 'Geef hier de minimale tijd, in minuten, dat een cursist ingelogd moet zijn in een cursus voordat hij/zij het certificaat mag ontvangen.';
$string['datefmt'] = 'Datum format';
$string['datefmt_help'] = 'Geeft hier een valide PHP datum format (<a href="http://www.php.net/manual/en/function.strftime.php"> Date Formats</a>). Of, laat dit leeg en gebruik het standaard format van de gebruikers taal instelling.';
$string['defaultcertificatetextx'] = 'Standaard horizontale tekst positie';
$string['defaultcertificatetexty'] = 'Standaard verticale tekst positie';
$string['defaultcodex'] = 'Standaard horizontale QR code positie';
$string['defaultcodey'] = 'Standaard Verticale QR code positie';
$string['defaultheight'] = 'Standaard hoogte';
$string['defaultperpage'] = 'Per pagina';
$string['defaultperpage_help'] = 'Aantal certificaten tonen per pagina (maximaal 200)';
$string['defaultwidth'] = 'Standaard breedte';
$string['deleteall'] = 'Verwijder alles';
$string['deleteselected'] = 'Verwijder geselecteerde';
$string['deletissuedcertificates'] = 'Verwijderde uitgegeven certificaten';
$string['delivery'] = 'Levering';
$string['delivery_help'] = 'Kies hier hoe je wilt dat je student het certificaat ontvangt. Je hebt de volgende mogelijkheden:
<ul>
<li> Nieuw browser: opent het certificaat in een nieuw browser scherm.</li>
<li> Dwing downloaden: opent het certificaat in een bestand download scherm.</li>
<li>E-mail certificaat: Kies deze optie om het certificaat te laten mailen naar de cursis als een e-mail bestand.</li>
<li>Wanneer een cursist het certificaat ontvangen heeft, wanneer ze op de link klikken op de cursuspagina, kunnen ze zien welke datum ze hun certificaat hebben ontvangen en kunnen ze het certificaat op nieuwe ontvangen.</li>
</ul>';
$string['designoptions'] = 'Ontwerp opties';
$string['download'] = 'Downloaden afdwingen';
$string['emailcertificate'] = 'E-mail';
$string['emailfrom'] = 'E-mail naam afzender:';
$string['emailfrom_help'] = 'Alternatief e-mailadres afzender:';
$string['emailothers'] = 'E-mail naar andere:';
$string['emailothers_help'] = 'Geef hier de e-mailadres(sen) op die een "waarschuwing" moeten ontvangen als een cursist een certificaat ontvangt.  De ingegeven e-mailadressen moeten gescheiden zijn door een komma.';
$string['emailsent'] = 'De e-mails zijn verstuurd.';
$string['emailstudentsubject'] = 'Jouw certficaat voor {$a->course}';
$string['emailstudenttext'] = 'Hallo {$a->username},

Bijgaand tref je jouw certificaat voor {$a->course}.


Dit is een automatisch gegeneerde e-mail. A.u.b. niet op reageren.';
$string['emailteachermail'] = '{$a->student} heeft zijn/haar certificaat ontvangen: \'{$a->certificate}\'
van {$a->course}.

Je kunt het hier bekijken:

{$a->url}';
$string['emailteachermailhtml'] = '{$a->student} heeft zijn/haar certificaat ontvangen: \'<i>{$a->certificate}</i>\'
van {$a->course}.

Je kunt het hier bekijken:

    <a href="{$a->url}">Certificaat</a>.';
$string['emailteachers'] = 'E-mail docenten';
$string['emailteachers_help'] = 'Wanneer ingesteld kunnen docenten/trainers een e-mail ontvangen wanneer een certificaat is uitgereikt';
$string['enablesecondpage'] = 'Certificaat achterkant pagina aanzetten';
$string['enablesecondpage_help'] = 'Aanzetten maakt het mogelijk om de certificaat achterkant pagina mogelijk te maken. Wanneer dit niet ingesteld is, dan is het alleen mogelijk om een Certificaat QR code op de achterkant te printen (wanneer dit gewenst is)';
$string['eventcertificate_verified'] = 'Certificaat geverifeerd';
$string['eventcertificate_verified_description'] = 'De gebruiker met id {$a->userid} heeft het certificaat met ID  {$a->certificateid} gevalideerd, en uitgeven aan gebruiker met ID {$a->certiticate_userid}.';
$string['filenotfound'] = 'Bestand niet gevonden';
$string['getcertificate'] = 'Ontvang certificaat';
$string['grade'] = 'Cijfer';
$string['gradefmt'] = 'Cijfer format';
$string['gradefmt_help'] = 'Er zijn drie format opties voor het printen van een cijfer op een certificaat:
<ul>
<li>Percentage cijfer: toont het cijfer in percentages bv 99%.</li>
<li>Punten cijfer: print de punten waarden van het cijfer bv 10.</li>
<li>Letter cijfer: print het behaalde percentage als een cijfer. </li>
</ul>';
$string['gradeletter'] = 'Letter cijfer';
$string['gradepercent'] = 'Percentage cijfer';
$string['gradepoints'] = 'Punten cijfer';
$string['height'] = 'Certificaat hoogte';
$string['hours'] = 'uren';
$string['intro'] = 'Introductie/beschrijving';
$string['invalidcode'] = 'Foutieve certificaat code';
$string['issued'] = 'Uitgegeven';
$string['issuedcertificatenotfound'] = 'Uitgegeven certificaat niet gevonden';
$string['issueddate'] = 'Datum uitgegeven';
$string['issueddownload'] = 'Uitgegeven certificaat [id: {$a}]  gedownload';
$string['issuedview'] = 'Uitgegeven certificaten';
$string['issueoptions'] = 'Uitgave opties';
$string['keywords'] = 'Certificaten, cursus, pdf, moodle';
$string['modulename'] = 'Simpel certificaat';
$string['modulename_help'] = 'De simpel certificaat module is bedoeld om docenten de mogelijkheid te geven om een standaard ontworpen certificaat uit te reiken aan cusisten. Het certificaat kan uitgereikt worden aan de cursist nadat deze aan de eisen van de trainer heeft voldaan.';
$string['modulenameplural'] = 'Simpel certificaat';
$string['multipdf'] = 'Download certificaten in een zip bestand';
$string['neverdeleteoption'] = 'Never verwijderen';
$string['nocertificatesissued'] = 'Er zijn geen certificaten uitgegeven';
$string['nodelivering'] = 'Geen uitgifte, cursist ontvangt het certificaat op een andere manier';
$string['notreceived'] = 'Geen uitgebracht certificaat';
$string['onepdf'] = 'Download certificaat in 1 pdf bestand';
$string['openbrowser'] = 'Open in een nieuw scherm';
$string['opendownload'] = 'Klik op de onderstaande knop om je certificaat op de computer te bewaren.';
$string['openemail'] = 'Klik op de onderstaande knop en je certificaat wilt je toegezonden als een e-mail bestand.';
$string['openwindow'] = 'Klik op de onderstaande knop om je certificaat in een nieuwe scherm te openen.';
$string['pluginadministration'] = 'Beheer certificaat';
$string['pluginname'] = 'Simpel Certificaat';
$string['printdate'] = 'Print datum';
$string['printdate_help'] = 'De datum dat geprint wordt, is de datum die geselecteerd wordt. Als je kiest voor de cursus voltooiïngsdatum, maar de cursist heeft de cursus nog niet voldoet, wordt de datum van ontvangst geprint. Je kunt ook kiezen voor de datum waarop de activiteit een cijfer heeft behaald. Wanneer het certificaat wordt uitgereikt, voordat er een cijfer is gegeven voor de activiteit wordt de datum van ontvangst geprint.';
$string['printgrade'] = 'Print cijfer';
$string['printgrade_help'] = 'Je kunt elke uitkomst uit het puntenboek - bv een specifiek item - laten printen op het certificaat. De cijferitems worden getoond op dezelfde wijze als in het puntenboek. Kies hier het format van het onderstaande cijfer.';
$string['printoutcome'] = 'Print uitkomst';
$string['printoutcome_help'] = 'Je kunt elke cursus uitkomst op het certificaat laten printen. Een voorbeeld: Opdracht uitkomst Voldoende.';
$string['printqrcode'] = 'Print certificaat QR code';
$string['printqrcode_help'] = 'Print (of niet) certificaat QR code';
$string['qrcodefirstpage'] = 'Print QR code op de eerste pagina';
$string['qrcodefirstpage_help'] = 'Print QR code op de eerste pagina';
$string['qrcodeposition'] = 'Certificaat QR COde positie';
$string['qrcodeposition_help'] = 'DIt zijn de XY coördinaten (in mm) van de certificaat QR code';
$string['receiveddate'] = 'Ontvangst datum:';
$string['report'] = 'Raport';
$string['requiredtimenotmet'] = 'Je moest op z\'n minst {$a->requiredtime} in deze cursus zitten om een certificaat te ontvangen.';
$string['secondimage'] = 'Certificaat achterkant afbeeldingsbestand';
$string['secondimage_help'] = 'Dit is de afbeelding die gebruikt wordt voor de achterkant van het certificaat';
$string['secondpageoptions'] = 'Certificaat achterkant pagina';
$string['secondpagetext'] = 'Certificaat achterkant tekst';
$string['secondpagex'] = 'Certificaat achterkant horizontale tekst positie';
$string['secondpagey'] = 'Certificaat achterkant verticale tekst positie';
$string['secondtextposition'] = 'Certificaat achterkant tekst positie';
$string['secondtextposition_help'] = 'Dit zijn de XY coördinaten (in mm) van de certificaat achterkant tekst pagina';
$string['sendtoemail'] = 'Stuur naar gebruikers e-mailadres';
$string['showusers'] = 'Tonen';
$string['simplecertificate:addinstance'] = 'Toevoegen Simpel Certificaat activiteit';
$string['simplecertificate:manage'] = 'Beheer Simpel Certificaat activiteit';
$string['simplecertificate:view'] = 'Bekijk Simpel Certificaat activiteit';
$string['size'] = 'Certificaat grootte';
$string['size_help'] = 'Dit zijn de breedte en hoogte (in mm) van het certificaat. standaard A4 Liggend.';
$string['standardview'] = 'Uitgegeven test certificaat';
$string['summaryofattempts'] = 'Opsomming van eerder ontvangen certificaten';
$string['textposition'] = 'Certificaat tekst positie';
$string['textposition_help'] = 'Dit zijn de XY coördinaten (in mm) van de certificaat tekst';
$string['timestartdatefmt'] = 'Enroll startdatum format';
$string['timestartdatefmt_help'] = 'Vul een valide PHP datum format patroon in  (<a href="http://www.php.net/manual/en/function.strftime.php"> klik hier voor datum formats</a>). Of laat leeg om door de gebruiker taal format te gebruiken.';
$string['upgradeerror'] = 'Probleem tijdens upgrade $a';
$string['usercontextnotfound'] = 'Gebruikerscontext niet gevonden';
$string['userdateformat'] = 'Gebruikers taal datum format';
$string['usernotfound'] = 'Cursist niet gevonden';
$string['variablesoptions'] = 'Andere opties';
$string['verifycertificate'] = 'Verifeer certificaat';
$string['viewcertificateviews'] = 'Bekijk {$a} uitgegeven certificaten';
$string['width'] = 'Certificaat breedte';
