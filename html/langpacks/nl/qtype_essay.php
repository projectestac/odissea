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
 * Strings for component 'qtype_essay', language 'nl', version '4.5'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Geaccepteerde bestandstypes';
$string['acceptedfiletypes_help'] = 'Geaccepteerde bestandstypes kunnen worden beperkt door een lijst met bestandsextensies in te voeren. Wanneer dit veld leeg wordt gelaten, zijn alle bestandstypes toegestaan.';
$string['allowattachments'] = 'Bijlagen toestaan';
$string['answerfiles'] = 'Antwoordbestanden';
$string['answertext'] = 'Antwoordtekst';
$string['attachedfiles'] = 'Bijlage: {$a}';
$string['attachmentsoptional'] = 'Bijlagen zijn optioneel';
$string['attachmentsrequired'] = 'Bijlagen vereist';
$string['attachmentsrequired_help'] = 'Deze optie regelt het minimum aantal vereiste bijlagen voor een antwoord als beoordeelbaar wordt beschouwd.';
$string['err_maxminmismatch'] = 'De maximale woordenlimiet moet groter zijn dan de minimale woordlimiet';
$string['err_maxwordlimit'] = 'De maximale woordlimiet is ingeschakeld, maar is niet ingesteld';
$string['err_maxwordlimitnegative'] = 'De maximale woordlimiet mag geen negatief getal zijn';
$string['err_minwordlimit'] = 'Minimale woordlimiet is ingeschakeld, maar niet ingesteld';
$string['err_minwordlimitnegative'] = 'De minimale woordlimiet mag geen negatief getal zijn';
$string['formateditor'] = 'HTML-editor';
$string['formateditorfilepicker'] = 'HTML-editor met bestandszoeker';
$string['formatmonospaced'] = 'Platte tekst, monospaced lettertype';
$string['formatnoinline'] = 'Geen inline tekst';
$string['formatplain'] = 'Platte tekst';
$string['graderinfo'] = 'Informatie voor beoordelaars';
$string['graderinfoheader'] = 'Beoordelersinformatie';
$string['maxbytes'] = 'Maximale bestandsgrootte';
$string['maxwordlimit'] = 'Maximum woordlimiet';
$string['maxwordlimit_help'] = 'Als het antwoord vereist dat leerlingen tekst invoeren, is dit het maximale aantal woorden dat elke leerling mag indienen.';
$string['maxwordlimitboundary'] = 'De woordlimiet voor deze vraag is {$a->limit}  woorden en je probeert {$a->count} woorden in te dienen. Kort je antwoord in en probeer het opnieuw.';
$string['minwordlimit'] = 'Minimale woordlimiet';
$string['minwordlimit_help'] = 'Als het antwoord vereist dat leerlingen tekst invoeren, is dit het minimum aantal woorden dat elke leerling mag inleveren.';
$string['minwordlimitboundary'] = 'Deze vraag vereist een antwoord van ten minste {$a->limit} woorden en u probeert {$a->count} woorden in te dienen. Breid je antwoord uit en probeer het opnieuw.';
$string['mustattach'] = 'Wanneer "geen inline tekst" is geselecteerd of antwoorden zijn optioneel, dan moet je minstens één bijlage toestaan.';
$string['mustrequire'] = 'Wanneer "geen inline tekst" is geselecteerd of antwoorden zijn optioneel, dan moet je minstens één bijlage eisen.';
$string['mustrequirefewer'] = 'Je kunt niet meer bijlagen eisen dan je toestaat.';
$string['nlines'] = '{$a} lijnen';
$string['nonexistentfiletypes'] = 'De volgende bestandstypes werden niet herkend: {$a}';
$string['pluginname'] = 'Open vraag';
$string['pluginname_help'] = 'Als antwoord op de vraag kan de respondent één of meer bestanden uploaden en/of een antwoord online noteren. Er kan een antwoordsjabloon voorzien worden.
De antwoorden moeten manueel beoordeeld worden.';
$string['pluginname_link'] = 'question/type/essay';
$string['pluginnameadding'] = 'Open vraag toevoegen';
$string['pluginnameediting'] = 'Open vraag bewerken';
$string['pluginnamesummary'] = 'Hiermee kun je een antwoord laten geven dat bestaat uit enkele zinnen of paragrafen. Deze antwoorden moeten manueel beoordeeld worden.';
$string['privacy:metadata'] = 'Het vraagtype Open vraag  laat vraag-auteurs standaardopties en gebruikersvoorkeuren instellen.';
$string['privacy:preference:attachments'] = 'Aantal toegestane bijlagen.';
$string['privacy:preference:attachmentsrequired'] = 'Aantal vereiste bijlagen.';
$string['privacy:preference:defaultmark'] = 'De standaardbeoordeling voor een bepaalde vraag.';
$string['privacy:preference:maxbytes'] = 'Maximale bestandsgrootte.';
$string['privacy:preference:responsefieldlines'] = 'Aantal lijnen';
$string['privacy:preference:responseformat'] = 'Welke antwoordvorm (HTML-editor, platte tekst, enz.)?';
$string['privacy:preference:responserequired'] = 'Moet de leerling tekst ingeven of is het ingeven van tekst optioneel?';
$string['responsefieldlines'] = 'Grootte invoerveld';
$string['responseformat'] = 'Antwoord formaat';
$string['responseisrequired'] = 'Eis van de leerling dat die tekst invoert';
$string['responsenotrequired'] = 'Tekst invoeren is optioneel';
$string['responseoptions'] = 'Antwoordopties';
$string['responserequired'] = 'Tekst vereist';
$string['responsetemplate'] = 'Antwoordsjabloon';
$string['responsetemplate_help'] = 'Alle tekst die hier gezet wordt, zal getoond worden in de antwoordbox wanneer een nieuwe poging voor het beantwoorden van de vraag begint.';
$string['responsetemplateheader'] = 'Antwoordsjabloon';
$string['wordcount'] = 'Aantal woorden: {$a}';
$string['wordcounttoofew'] = 'Aantal woorden: {$a->count}. Dit is minder dan de vereiste {$a->limit} woorden.';
$string['wordcounttoomuch'] = 'Aantal woorden: {$a->count}. Dit is meer dan de limiet van {$a->limit} woorden.';
