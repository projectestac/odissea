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
 * Strings for component 'customcert', language 'sv', version '4.5'.
 *
 * @package     customcert
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity'] = 'Aktivitet';
$string['addcertpage'] = 'Lägg till sida';
$string['addelement'] = 'Lägg till element';
$string['awardedto'] = 'Tilldelas till';
$string['certificate'] = 'Certifikat';
$string['code'] = 'Kod';
$string['copy'] = 'Kopiera';
$string['coursetimereq'] = 'Krav på minuter i kurs';
$string['coursetimereq_help'] = 'Ange här den minsta tid, i minuter, som en student måste vara inloggad i kursen innan de kan ta emot certifikatet.';
$string['customcert:addinstance'] = 'Lägg till ett nytt certifikat';
$string['customcert:manage'] = 'Hantera certifikat';
$string['customcert:manageemailothers'] = 'Hantera email (övriga)';
$string['customcert:manageemailstudents'] = 'Hantera email (student)';
$string['customcert:manageemailteachers'] = 'Hantera email (instruktör)';
$string['customcert:manageprotection'] = 'Hantera säkerhetsinställningar';
$string['customcert:managerequiredtime'] = 'Hantera krav på nedlagd tid';
$string['customcert:manageverifyany'] = 'Hantera verifiering';
$string['customcert:verifyallcertificates'] = 'Visa alla certifikat på sidan';
$string['customcert:verifycertificate'] = 'Verifiera ett certifikat';
$string['customcert:view'] = 'Visa certifikat';
$string['customcert:viewallcertificates'] = 'Visa alla certifikat';
$string['customcert:viewreport'] = 'Visa kursrapport';
$string['customcertsettings'] = 'Inställningar för certifikat';
$string['deletecertpage'] = 'Ta bort sida';
$string['deleteconfirm'] = 'Ta bort verifiering';
$string['deleteelement'] = 'Ta bort element';
$string['deleteelementconfirm'] = 'Är du säker på att du vill ta bort detta element?';
$string['deleteissueconfirm'] = 'Är du säker på att du vill ta bort denna certifikatsverifiering?';
$string['deleteissuedcertificates'] = 'Ta bort certifikat';
$string['deletepageconfirm'] = 'Är du säker på att du vill ta bort certifikatsidan?';
$string['description'] = 'Beskrivning';
$string['duplicate'] = 'Duplicera';
$string['duplicateconfirm'] = 'Duplicera bekräftelse';
$string['editcustomcert'] = 'Redigera certifikat';
$string['editelement'] = 'Redigera element';
$string['elementname'] = 'Element namn';
$string['elementname_help'] = 'Detta är namnet som används för att identifiera detta element när du redigerar ett certifikat. Obs: detta visas inte på PDF-filen.';
$string['elements'] = 'Element';
$string['elements_help'] = 'Detta är listan över element som kommer att visas på certifikatet.

Observera: Elementen återges i denna ordning. Ordningen kan ändras med hjälp av pilarna bredvid varje element.';
$string['elementwidth'] = 'Bredd';
$string['elementwidth_help'] = 'Ange bredden på elementet - \'0\' betyder att det inte finns någon breddbegränsning.';
$string['emailnonstudentbody'] = 'Bifogat är certifikatet  \'{$a->certificatename}\' till \'{$a->userfullname}\' för kursen \'{$a->coursefullname}\'.';
$string['emailnonstudentbodyplaintext'] = 'Bifogat är certifikatet \'{$a->certificatename}\' till \'{$a->userfullname}\' för kursen \'{$a->coursefullname}\'.';
$string['emailnonstudentcertificatelinktext'] = 'Visa certifikatrapport';
$string['emailnonstudentgreeting'] = 'Hej';
$string['emailnonstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailothers'] = 'Maila andra';
$string['emailothers_help'] = 'Om inställd kommer ett mail skickas till e-postadresserna som anges här (åtskilda med ett komma) med en kopia av certifikatet när det blir tillgängligt';
$string['emailstudentbody'] = 'Bifogat är certifikatet \'{$a->certificatename}\' för kursen \'{$a->coursefullname}\'.';
$string['emailstudentbodyplaintext'] = 'Bifogat är ditt certifikat \'{$a->certificatename}\' för kursen \'{$a->coursefullname}\'.';
$string['emailstudentcertificatelinktext'] = 'Visa certifikat';
$string['emailstudentgreeting'] = 'Hej {$a}';
$string['emailstudents'] = 'Maila kursdeltagare';
$string['emailstudents_help'] = 'Om inställd kommer ett mail av certifikatet skickas till eleverna när det blir tillgängligt.';
$string['emailstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailteachers'] = 'Maila instruktörer';
$string['emailteachers_help'] = 'Om inställd kommer ett mail skickas med en kopia av certifikatet till instruktörerna i kursen när det blir tillgängligt';
$string['exampledatawarning'] = 'Några av dessa värden kan bara vara ett exempel för att säkerställa att elementen kan placeras.';
$string['font'] = 'Typsnitt';
$string['font_help'] = 'Typsnitt som används när det här elementet skapas.';
$string['fontcolour'] = 'Färg';
$string['fontcolour_help'] = 'Färgen på framsidan';
$string['fontsize'] = 'Storlek';
$string['fontsize_help'] = 'Storleken på typsnittet i pt';
$string['getcustomcert'] = 'Visa certifikat';
$string['height'] = 'Höjd';
$string['height_help'] = 'Detta är höjden på certifikatets i mm. Som referens är ett A4-papper 297 mm högt och ett brev är 279 mm högt.';
$string['invalidcode'] = 'Felaktig kod angiven';
$string['invalidcolour'] = 'Ogiltig färg vald, ange ett giltigt HTML-färgnamn eller en sex- eller tresiffrig hexadecimal färg.';
$string['invalidheight'] = 'Höjden måste vara ett giltigt tal större än 0.';
$string['invalidmargin'] = 'Marginalen måste vara ett giltigt tal större än 0.';
$string['invalidposition'] = 'Välj ett positivt tal för position {$a}.';
$string['invalidwidth'] = 'Bredden måste vara ett giltigt tal större än 0.';
$string['landscape'] = 'Landskap';
$string['leftmargin'] = 'Vänstermarginal';
$string['leftmargin_help'] = 'Detta är den vänstra marginalen för certifikatet.';
$string['listofissues'] = 'Mottagare';
$string['load'] = 'Ladda';
$string['modify'] = 'Redigera';
$string['modulename'] = 'Certifikat';
$string['modulename_help'] = 'Denna modul möjliggör dynamisk generering av PDF-certifikat.';
$string['modulename_link'] = 'Custom_certificate_module';
$string['modulenameplural'] = 'Certifikat';
$string['mycertificates'] = 'Mina certifikat';
$string['mycertificatesdescription'] = 'Det här är de certifikat du har utfärdat via antingen e-post eller nedladdning manuellt.';
$string['save'] = 'Spara';
$string['saveandcontinue'] = 'Spara och fortsätt';
$string['uploadimage'] = 'Ladda upp bild';
