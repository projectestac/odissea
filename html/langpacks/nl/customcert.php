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
 * Strings for component 'customcert', language 'nl', version '3.11'.
 *
 * @package     customcert
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcertpage'] = 'Voeg pagina toe';
$string['addelement'] = 'Voeg element toe';
$string['awardedto'] = 'Uitgereikt aan';
$string['cannotverifyallcertificates'] = 'Je hebt geen toestemming om alle certificaten op deze site te verificeren.';
$string['certificate'] = 'Certificaat';
$string['code'] = 'Code';
$string['copy'] = 'Kopie';
$string['coursetimereq'] = 'Aantal verplichte minuten in de cursus';
$string['coursetimereq_help'] = 'Vul hier het minimum aantal minuten in dat een leerling in de cursus moet bezig zijn, voordat ze een certificaat mogen ontvangen.';
$string['createtemplate'] = 'Maak sjabloon';
$string['customcert:addinstance'] = 'Voeg een nieuwe aangepaste certificaatinstantie toe';
$string['customcert:manage'] = 'Beheer een aangepaste certificaat';
$string['customcert:manageemailothers'] = 'Beheer de andere instellingen van e-mail';
$string['customcert:manageemailstudents'] = 'Beheer de instellingen van e-mail leerlingen';
$string['customcert:manageemailteachers'] = 'Beheer de instellingen van e-mail leraren';
$string['customcert:manageprotection'] = 'Beheer veiligheidsinstellingen';
$string['customcert:managerequiredtime'] = 'Beheer de instellingen van tijd in cursus';
$string['customcert:manageverifyany'] = 'Beheer de verificatie-instellingen';
$string['customcert:receiveissue'] = 'Bekijk een certificaat';
$string['customcert:verifyallcertificates'] = 'Verifieer alle certificaten op de site';
$string['customcert:verifycertificate'] = 'Verifieer een certificaat';
$string['customcert:view'] = 'Bekijk een aangepaste certificaat';
$string['customcert:viewallcertificates'] = 'Bekijk alle certificaten';
$string['customcert:viewreport'] = 'Bekijk een cursusrapport';
$string['customcertsettings'] = 'Aangepaste certificaat instellingen';
$string['deletecertpage'] = 'Verwijder pagina';
$string['deleteconfirm'] = 'Verwijder bevestiging';
$string['deleteelement'] = 'Verwijder element';
$string['deleteelementconfirm'] = 'Weet je zeker dat je dit element wilt verwijderen?';
$string['deleteissueconfirm'] = 'Weet je zeker dat je dit uitgeven certificaat wilt verwijderen?';
$string['deleteissuedcertificates'] = 'Verwijder uitgegeven certificaten';
$string['deletepageconfirm'] = 'Weet je zeker dat je deze certificaatpagina wilt verwijderen?';
$string['deletetemplateconfirm'] = 'Weet je zeker dat je dit certificaatsjabloon wilt verwijderen?';
$string['description'] = 'Omschrijving';
$string['duplicate'] = 'Dupliceren';
$string['duplicateconfirm'] = 'Dupliceer bevestiging';
$string['duplicatetemplateconfirm'] = 'Weet je zeker dat je dit certificaat wilt dupliceren?';
$string['editcustomcert'] = 'Bewerk certificaat';
$string['editelement'] = 'Bewerk element';
$string['edittemplate'] = 'Bewerk sjabloon';
$string['elementname'] = 'Elementnaam';
$string['elementname_help'] = 'Dit is de naam die gebruikt kan worden om dit element te identificeren wanneer je een certificaat bewerkt. Notitie: de naam wordt niet getoond op de PDF.';
$string['elementplugins'] = 'Element plugins';
$string['elements'] = 'Elementen';
$string['elements_help'] = 'Deze lijst van elementen wordt getoond op het certificaat.

De elementen worden getoond in deze volgorde. De volgorde kan gewijzigd worden met behulp van de pijltjes voor elk element.';
$string['elementwidth'] = 'Breedte';
$string['elementwidth_help'] = 'Specificeer de breedte van het element - \'0\' betekent dat er geen breedtebeperking is.';
$string['emailnonstudentbody'] = 'Bijgevoegd is het certificaat \'{$a->certificatename}\' voor \'{$a->userfullname}\' voor de cursus \'{$a->coursefullname}\'.';
$string['emailnonstudentbodyplaintext'] = 'Bijgevoegd is het certificaat \'{$a->certificatename}\' voor \'{$a->userfullname}\' voor de cursus \'{$a->coursefullname}\'.';
$string['emailnonstudentcertificatelinktext'] = 'Bekijk certificaatrapport';
$string['emailnonstudentgreeting'] = 'Hallo';
$string['emailnonstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailothers'] = 'E-mail anderen';
$string['emailothers_help'] = 'Indien ingesteld, zal dit de e-mailadressen die hier worden vermeld (gescheiden door een komma) e-mailen met een kopie van het certificaat wanneer het beschikbaar komt.';
$string['emailstudentbody'] = 'Bijgevoegd is uw certificaat {$a->certificatename} voor de cursus {$a->coursefullname}.';
$string['emailstudentbodyplaintext'] = 'Bijgevoegd is jouw certificaat {$a->certificatename} voor de cursus {$a->coursefullname}.';
$string['emailstudentcertificatelinktext'] = 'Bekijk certificaat';
$string['emailstudentgreeting'] = 'Beste {$a}';
$string['emailstudents'] = 'E-mail leerlingen';
$string['emailstudents_help'] = 'Wanneer dit is ingesteld ontvangen leerlingen een kopie van het certificaat zodra het beschikbaar is.';
$string['emailstudentsubject'] = '{$a->coursefullname}: {$a->certificatename}';
$string['emailteachers'] = 'E-mail docenten';
$string['emailteachers_help'] = 'Wanneer dit is ingesteld ontvangen docenten een kopie van het certificaat wanneer het beschikbaar komt.';
$string['exampledatawarning'] = 'Sommige van deze waarde zijn slechts voorbeelden waarmee je zeker weet dat de elementen op de juiste positie staan.';
$string['font'] = 'Lettertype';
$string['font_help'] = 'Het lettertype dat wordt gebruikt bij het genereren van dit element.';
$string['fontcolour'] = 'Kleur';
$string['fontcolour_help'] = 'De kleur van het lettertype';
$string['fontsize'] = 'Grootte';
$string['fontsize_help'] = 'De grootte van het lettertype in punten.';
$string['getcustomcert'] = 'Bekijk certificaat';
$string['height'] = 'Hoogte';
$string['height_help'] = 'Dit is de hoogte van het certificaat pdf in mm. Ter referentie: een vel A4-papier is 297 mm hoog en een brief is 279 mm hoog.';
$string['invalidcode'] = 'Ongeldige code opgegeven.';
$string['invalidcolour'] = 'Ongeldige kleur gekozen. Voer een geldige HTML-kleurnaam in, of een zescijferige of driecijferige hexadecimale kleur.';
$string['invalidelementwidth'] = 'Voer een positief getal in.';
$string['invalidheight'] = 'De hoogte moet een geldig getal zijn groter dan 0.';
$string['invalidmargin'] = 'De marge moet een geldig getal zijn groter dan 0.';
$string['invalidposition'] = 'Selecteer een positief getal voor positie {$a}.';
$string['invalidwidth'] = 'De breedte moet een geldig getal zijn groter dan 0.';
$string['landscape'] = 'Liggend';
$string['leftmargin'] = 'Linkermarge';
$string['leftmargin_help'] = 'Dit is de linkermarge van de certificaat-pdf in mm.';
$string['listofissues'] = 'Ontvangers: {$a}';
$string['load'] = 'Laad';
$string['loadtemplate'] = 'Laad sjabloon';
$string['loadtemplatemsg'] = 'Weet u zeker dat je deze sjabloon wilt laden? Hiermee worden alle bestaande pagina\'s en elementen voor dit certificaat verwijderd.';
$string['managetemplates'] = 'Beheer sjablonen';
$string['managetemplatesdesc'] = 'Deze link brengt je naar een nieuw scherm waar je sjablonen kunt beheren die worden gebruikt door aangepaste certificaatactiviteiten in cursussen.';
$string['modify'] = 'Aanpassen';
$string['modulename'] = 'Custom certificaat';
$string['modulename_help'] = 'Deze module maakt het mogelijk om dynamisch PDF-certificaten te genereren.';
$string['modulenameplural'] = 'Custom certificaten';
$string['mycertificates'] = 'Mijn certificaten';
$string['mycertificatesdescription'] = 'Dit zijn de certificaten die u hebt gekregen via e-mail of handmatig downloaden.';
$string['name'] = 'Naam';
$string['nametoolong'] = 'U heeft de maximaal toegestane lengte voor de naam overschreden';
$string['nocustomcerts'] = 'Er zijn geen certificaten voor deze cursus';
$string['noimage'] = 'Geen afbeelding';
$string['norecipients'] = 'Geen ontvangers';
$string['notemplates'] = 'Geen sjablonen';
$string['notissued'] = 'Niet toegekend';
$string['notverified'] = 'Niet geverifieerd';
$string['options'] = 'Opties';
$string['page'] = 'Pagina {$a}';
$string['pluginadministration'] = 'Custom certificaat beheer';
$string['pluginname'] = 'Custom certificaat';
$string['portrait'] = 'Staand';
$string['posx'] = 'Positie X';
$string['posx_help'] = 'Dit is de positie in mm vanaf de linkerbovenhoek waarvan u wilt dat het referentiepunt van het element zich in de x-richting bevindt.';
$string['posy'] = 'Positie Y';
$string['posy_help'] = 'Dit is de positie in mm vanaf de linkerbovenhoek waarvan je wilt dat het referentiepunt van het element zich in de y-richting bevindt.';
$string['preventcopy'] = 'Voorkom kopiëren';
$string['preventcopy_desc'] = 'Schakel bescherming tegen kopiëren  in.';
$string['preventmodify'] = 'Voorkom wijzigen';
$string['preventmodify_desc'] = 'Schakel bescherming tegen wijzigingen in.';
$string['preventprint'] = 'Voorkom afdrukken';
$string['preventprint_desc'] = 'Schakel bescherming tegen afdrukken in.';
$string['print'] = 'Print';
$string['privacy:metadata:customcert_issues'] = 'De lijst met uitgegeven certificaten';
$string['privacy:metadata:customcert_issues:code'] = 'De code die bij het certificaat hoort';
$string['privacy:metadata:customcert_issues:customcertid'] = 'De ID van het certificaat';
$string['privacy:metadata:customcert_issues:emailed'] = 'Of het certificaat al dan niet is gemaild';
$string['privacy:metadata:customcert_issues:timecreated'] = 'Het tijdstip waarop het certificaat is afgegeven';
$string['privacy:metadata:customcert_issues:userid'] = 'De ID van de gebruiker die het certificaat heeft gekregen';
$string['rearrangeelements'] = 'Verplaats elementen';
$string['rearrangeelementsheading'] = 'Elementen slepen en neerzetten om te wijzigen waar ze op het certificaat worden geplaatst.';
$string['receiveddate'] = 'Ontvangen datum';
$string['refpoint'] = 'Locatie referentiepunt';
$string['refpoint_help'] = 'Het referentiepunt is de locatie van een element waarvan de x en y coördinaten zijn vastgesteld. De \'+\'  die in het midden of in de hoeken van het element getoond wordt, is de indicatie.';
$string['replacetemplate'] = 'Vervang';
$string['requiredtimenotmet'] = 'Je moest tenminste {$a->requiredtime} minuten in de cursus bezig zijn geweest voor je toegang krijgt tot dit certificaat.';
$string['rightmargin'] = 'Rechtermarge';
$string['rightmargin_help'] = 'Dit is de rechtermarge van het PDF-certificaat in mm.';
$string['save'] = 'Bewaren';
$string['saveandclose'] = 'Bewaar en sluit';
$string['saveandcontinue'] = 'Bewaar en ga verder';
$string['savechangespreview'] = 'Bewaar wijzigen en bekijk';
$string['savetemplate'] = 'Bewaar sjabloon';
$string['search:activity'] = 'Aangepast certificaat - activiteit informatie';
$string['setprotection'] = 'Stel beveiliging in';
$string['setprotection_help'] = 'Kies hier de acties die gebruiker niet mogen uitvoeren op dit certificaat';
$string['showposxy'] = 'Toon positie X en Y';
$string['showposxy_desc'] = 'Dit zal posities X en Y tonen wanneer het element is ingesteld, zodat de positie accuraat door de gebruiker ingesteld kan worden.

Dit is niet nodig wanneer je van plan bent om alleen de sleep en neerzet interface te gebruiken.';
$string['taskemailcertificate'] = 'Verwerkt het e-mailen van certificaten.';
$string['templatename'] = 'Sjabloonnaam';
$string['templatenameexists'] = 'De sjabloonnaam is al in gebruik, kies een nieuwe naam.';
$string['topcenter'] = 'Middelpunt';
$string['topleft'] = 'Linksboven';
$string['topright'] = 'Rechtsboven';
$string['type'] = 'Type';
$string['uploadimage'] = 'Afbeelding uploaden';
$string['uploadimagedesc'] = 'Deze link brengt je naar een nieuw scherm waar je afbeeldingen kunt uploaden. Afbeeldingen geüpload met deze methode zijn overal op je site beschikbaar voor alle gebruikers die een certificaat kunnen aanmaken.';
$string['verified'] = 'Geverifieerd';
$string['verify'] = 'Verifiëren';
$string['verifyallcertificates'] = 'Sta verificatie van alle certificaten toe';
$string['verifyallcertificates_desc'] = 'Als deze instelling is ingeschakeld, kan elke persoon (inclusief niet-ingelogde gebruikers) de link \'{$a}\' bezoeken om elk certificaat op de site te verifiëren, in plaats van voor elk certificaat naar de verificatielink te moeten gaan.

Let op - dit is alleen van toepassing op certificaten waarbij in de certificaatinstellingen \'Sta iedereen toe om een certificaat te verifiëren\'op \'Ja\' is ingesteld .';
$string['verifycertificate'] = 'Verifieer certificaat';
$string['verifycertificateanyone'] = 'Sta toe dat iemand het certificaat verifieert.';
$string['verifycertificateanyone_help'] = 'Met deze instelling kan iedereen met de certificaatverificatielink (inclusief gebruikers die niet zijn aangemeld) een certificaat verifiëren.';
$string['verifycertificatedesc'] = 'Deze link brengt je naar een nieuw scherm waar je certificaten op de site kunt verifiëren';
$string['width'] = 'Breedte';
$string['width_help'] = 'Dit is de breedte van de certificaat-pdf in mm. Ter referentie: een vel A4-papier is 210 mm breed en een brief is 216 mm breed.';
