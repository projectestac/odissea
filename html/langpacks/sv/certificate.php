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
 * Strings for component 'certificate', language 'sv', version '4.1'.
 *
 * @package     certificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addlinklabel'] = 'Lägg till ett annat alternativ för länkad aktivitet';
$string['addlinktitle'] = 'Klicka för att lägga till ett annat alternativ för länkad aktivitet';
$string['areaintro'] = 'Introduktion';
$string['awarded'] = 'Tilldelat';
$string['awardedto'] = 'Tilldelat till';
$string['back'] = 'Tillbaka';
$string['border'] = 'Ram';
$string['borderblack'] = 'Svart';
$string['borderblue'] = 'Blå';
$string['borderbrown'] = 'Brun';
$string['bordercolor'] = 'Kantlinjer';
$string['bordercolor_help'] = 'Eftersom bilder väsentligt kan öka storleken på PDF-filen kan du välja att skriva ut en kantlinje istället för att använda en bild (var säker på att alternativet Kantlinjebild är inställt på Nej). Alternativet Kantlinjer kommer att skriva ut en tunn kantlinje bestående av tre linjer av varierande bredder i den valda färgen.';
$string['bordergreen'] = 'Grön';
$string['borderlines'] = 'Linjer';
$string['borderstyle'] = 'Kantlinjebild';
$string['borderstyle_help'] = 'Alternativet Kantlinjebild låter dig välja en kantlinjebild från mappen certificate/pix/borders. Välj den kantlinjebild som du vill ha runt certifikatkanterna eller välj \'ingen kantlinje\'.';
$string['certificate'] = 'Verifiering för certifikatkod:';
$string['certificate:addinstance'] = 'Lägg till ny certifikatinstans';
$string['certificate:manage'] = 'Hantera certifikatinstans';
$string['certificate:printteacher'] = 'Listas som lärare på certifikatet om inställningen visa lärare är på';
$string['certificate:student'] = 'Hämta ett certifikat';
$string['certificate:view'] = 'Visa ceretifikat';
$string['certificatename'] = 'Namn på certifikat';
$string['certificatereport'] = 'Certifikatrapport';
$string['certificatesfor'] = 'Certifikat för';
$string['certificatetype'] = 'Typ av certifikat';
$string['certificatetype_help'] = 'Här bestämmer du layouten på certifikatet. Mappen för certifikattyp omfattar fyra standardcertifikat:

A4 Inbäddade utskrifter på papper i A4-storlek med inbäddat teckensnitt.
A4 Icke-Inbäddade utskrifter på papper i A4-storlek utan inbäddade teckensnitt.
Letter Embedded skriver ut på papper i brevstorlek med inbäddat teckensnitt.
Letter Non-Embedded skriver ut på papper i brevstorlek utan inbäddade teckensnitt.

De icke-inbäddade typerna använder typsnitten Helvetica och Times. Om du känner att dina användare inte kommer att ha dessa teckensnitt installerade på sin dator, eller om ditt språk använder tecken eller symboler som inte tillgodoses av Helvetica och Times teckensnitt, välj då en inbäddad typ. De inbäddade typerna använder teckensnitten Dejavusans och Dejavuserif. Detta kommer att göra PDF-filerna ganska stora; alltså rekommenderas det inte att använda inbäddade typsnitt om du inte behöver.

Mappar för nya certifikattyper kan läggas till i mappen med certifikat/typ. Namnet på mappen och eventuella nya språksträngar för den nya typen måste läggas till i certifikatets språkfil.';
$string['certify'] = 'Härmed intygas att';
$string['code'] = 'Kod';
$string['completiondate'] = 'Slutförande av kurs';
$string['course'] = 'För';
$string['coursegrade'] = 'Kursbetyg';
$string['coursename'] = 'Kurs';
$string['coursetimereq'] = 'Nödvändiga minuter i kursen';
$string['coursetimereq_help'] = 'Ange här den minsta tid, i minuter, som en deltagare måste vara inloggad på kursen innan de kommer att kunna ta emot certifikatet.';
$string['credithours'] = 'Kredit timmar';
$string['customtext'] = 'Anpassad text';
$string['customtext_help'] = 'Om du vill att certifikatet ska skriva ut andra namn för läraren än de som är tilldelade rollen som lärare i kursen, välj inte Skriv ut lärare eller någon signaturbild förutom linjen för underskriften. Ange lärarnamnen i den här textrutan som du vill att de ska visas. Som standard placeras den här texten i nedre vänstra delen av certifikatet. Följande html-taggar finns: &lt;br&gt;, &lt;p&gt;, &lt;b&gt;, &lt;i&gt;, &lt;u&gt;, &lt;img&gt; (src and width (or height) are mandatory), &lt;a&gt; (href är obligatoriskt), &lt;font&gt; (möjliga attribut är: color, (hex color code), face, (arial, times, courier, helvetica, symbol)).';
$string['date'] = 'Den';
$string['datefmt'] = 'Datumformat';
$string['datefmt_help'] = 'Välj ett datumformat om du vill skriva ut datumet på certifikatet. Eller, välj det sista alternativet för att få datumet tryckt i formatet för användarens valda språk.';
$string['datehelp'] = 'Datum';
$string['deletissuedcertificates'] = 'Ta bort utfärdade certifikat';
$string['delivery'] = 'Leverans';
$string['delivery_help'] = 'Välj här hur du skulle vilja att dina elever får sitt certifikat.
Öppna i webbläsare: Öppnar certifikatet i ett nytt webbläsarfönster.
Tvinga nedladdning: Öppnar fönstret för nedladdning av webbläsarfil.
E-postcertifikat: Om du väljer det här alternativet skickas certifikatet till deltagaren som en e-postbilaga.
Efter att en användare fått sitt certifikat, om de klickar på certifikatet länken från kursen hemsida, kommer de att se det datum de fick sitt certifikat och kommer att kunna granska sina mottagna certifikat.';
$string['designoptions'] = 'Utseende';
$string['download'] = 'Tvinga nedladdning';
$string['emailcertificate'] = 'E-post';
$string['emailothers'] = 'Övriga mottagare';
$string['emailothers_help'] = 'Ange e-postadresserna här, åtskilda av ett kommatecken, till de som ska få ett e-postmeddelande när eleverna får ett certifikat.';
$string['emailstudenttext'] = 'Bifogat finner du ditt certifikat för {$a->course}.';
$string['emailteachermail'] = '{$a->student} har erhållit sitt certifikat: \'{$a->certificate}\'
för {$a->course}.

Du kan granska det här:

    {$a->url}';
$string['emailteachermailhtml'] = '{$a->student} har erhållit sitt certifikat: \'<i>{$a->certificate}</i>\'
för {$a->course}.

Du kan granska det här::

    <a href="{$a->url}">Certifikatrapport</a>.';
$string['emailteachers'] = 'Skicka E-post till handledare';
$string['emailteachers_help'] = 'Om aktiverat får handledare i kurser e-post när en kursdeltagare';
$string['entercode'] = 'Ange certifikatkod för att verifiera:';
$string['grade'] = 'Betyg';
$string['gradedate'] = 'Betygsdatum';
$string['gradefmt'] = 'Betygsformat';
$string['gradefmt_help'] = 'Det finns tre tillgängliga format om du väljer att skriva ut ett resultat på certifikatet:
Procentuellt betyg: Skriver ut resultatet i procent.
Poänggrad: Skriver ut betygets poängvärde.
Bokstavsbetyg: Skriver ut procentbetyget som en bokstav.';
$string['gradeletter'] = 'Bokstavsbetyg';
$string['gradepercent'] = 'Procentuellt betyg';
$string['gradepoints'] = 'Poängbetyg';
$string['imagetype'] = 'Bildtyp';
$string['incompletemessage'] = 'För att kunna ladda ner ditt certifikat måste du först slutföra alla aktiviteter som krävs. Var god och återvänd till kursen för att slutföra ditt kursarbete.';
$string['intro'] = 'Introduktion';
$string['issued'] = 'Utfärdat';
$string['issueddate'] = 'Datum för utfärdande';
$string['issueoptions'] = 'Alternativ för utfärdande';
$string['landscape'] = 'Liggande';
$string['lastviewed'] = 'Förra gången du erhöll detta certifikat var:';
$string['letter'] = 'Letter';
$string['lockingoptions'] = 'Alternativ för låsning';
$string['modulename'] = 'Certifikat';
$string['modulename_help'] = 'Denna modul möjliggör dynamiskt skapade certifikat utifrån villkor uppsatta av handledaren.';
$string['modulename_link'] = 'Certificate_module';
$string['modulenameplural'] = 'Certifikat';
$string['mycertificates'] = 'Mina certifikat';
$string['nocertificates'] = 'Inga certifikat';
$string['nocertificatesissued'] = 'Det finns inga utfärdade certifikat';
$string['nocertificatesreceived'] = 'har inte erhållit några certifikat.';
$string['nofileselected'] = 'Måste välja fil att ladda upp!';
$string['nogrades'] = 'Inga betyg';
$string['notapplicable'] = 'N/A';
$string['notfound'] = 'Certifikatnumret kunde inte valideras.';
$string['notissued'] = 'Ej utfärdat';
$string['notissuedyet'] = 'Ännu ej utfärdat';
$string['notreceived'] = 'Du har inte erhållit detta certifikat';
$string['openbrowser'] = 'Öppna i nytt fönster';
$string['opendownload'] = 'Klicka på knappen nedan för att hämta ner certifikatet till din dator.';
