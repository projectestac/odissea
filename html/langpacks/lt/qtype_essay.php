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
 * Strings for component 'qtype_essay', language 'lt', version '4.5'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Priimami failų tipai';
$string['acceptedfiletypes_help'] = 'Priimami failų tipai gali būti apribojami įvedant leidžiamų failų plėtinių sąrašą. Jei laukas tuščias, tada leidžiami visi failų tipai.';
$string['allowattachments'] = 'Leisti įkelti failų';
$string['answerfiles'] = 'Atsakymų failai';
$string['answertext'] = 'Atsakymo tekstas';
$string['attachedfiles'] = 'Priedai: {$a}';
$string['attachmentsoptional'] = 'Priedai yra neprivalomi';
$string['attachmentsrequired'] = 'Reikalauti priedų';
$string['attachmentsrequired_help'] = 'Ši parinktis nurodo mažiausią priedų skaičių, kurio reikia, kad atsakymas būtų vertinamas.';
$string['err_maxminmismatch'] = 'Maksimalus žodžių skaičius turi būti didesnis už minimalų žodžių skaičių';
$string['err_maxwordlimit'] = 'Maksimalus žodžių apribojimas įjungtas, bet nenustatytas';
$string['err_maxwordlimitnegative'] = 'Maksimalus žodžių apribojimas negali būti neigiamas skaičius';
$string['err_minwordlimit'] = 'Minimalus žodžių apribojimas įjungtas, bet nenustatytas';
$string['err_minwordlimitnegative'] = 'Minimali žodžių riba negali būti neigiamas skaičius';
$string['formateditor'] = 'HTML rengyklė';
$string['formateditorfilepicker'] = 'HTML rengyklė su failų pasirinkimu';
$string['formatmonospaced'] = 'Paprastas tekstas, vienodu šriftu';
$string['formatnoinline'] = 'Nėra internetinio teksto';
$string['formatplain'] = 'Paprastas tekstas';
$string['graderinfo'] = 'Informacija vertintojams';
$string['graderinfoheader'] = 'Vertintojo informacija';
$string['maxbytes'] = 'Maksimalus failo dydis';
$string['maxwordlimit'] = 'Maksimali žodžių riba';
$string['maxwordlimit_help'] = 'Jei atsakydami besimokantieji turi įvesti tekstą, tai yra didžiausias žodžių skaičius, kurį kiekvienas studentas galės pateikti.';
$string['maxwordlimitboundary'] = 'Šio klausimo žodžių limitas yra {$a->limit} žodžiai, o jūs bandote pateikti {$a->count} žodžius. Sutrumpinkite atsakymą ir bandykite dar kartą.';
$string['minwordlimit'] = 'Minimali žodžių riba';
$string['minwordlimit_help'] = 'Jei atsakydami mokiniai turi įvesti tekstą, tai yra minimalus žodžių skaičius, kurį kiekvienas studentas galės pateikti.';
$string['minwordlimitboundary'] = 'Šis klausimas reikalauja bent {$a->limit} žodžių atsakymo, o jūs bandote pateikti {$a->count} žodžius. Išplėskite atsakymą ir bandykite dar kartą.';
$string['mustattach'] = 'Kai pasirinkta „Nėra internetinio teksto“ arba teksto įvedimas yra neprivalomas, turite leisti bent vieną priedą.';
$string['mustrequire'] = 'Kai pasirinkta „Nėra internetinio teksto“ arba teksto įvedimas yra neprivalomas, turite reikalauti bent vieno priedo.';
$string['mustrequirefewer'] = 'Jūs negalite reikalauti daugiau priedų nei leidžiate.';
$string['nlines'] = '{$a} eilučių';
$string['nonexistentfiletypes'] = 'Nebuvo atpažinti šių failų tipai: {$a}';
$string['pluginname'] = 'Esė';
$string['pluginname_help'] = 'Atsakydamas į klausimą, respondentas gali įkelti vieną ar daugiau failų ir (arba) įvesti tekstą internete. Gali būti pateiktas atsakymo šablonas. Atsakymai turi būti vertinami rankiniu būdu.';
$string['pluginname_link'] = 'question/type/essay';
$string['pluginnameadding'] = 'Įtraukiamas Esė klausimas';
$string['pluginnameediting'] = 'Redaguoti Esė klausimą';
$string['pluginnamesummary'] = 'Leidžia atsakyti į klausimą failo įkėlimu ir (arba) internetiniu tekstu. Klausimas vertinamas rankiniu būdu.';
$string['privacy:metadata'] = 'Esė klausimo tipo papildinys leidžia klausimo autoriams nustatyti numatytąsias parinktis kaip naudotojo nuostatas.';
$string['privacy:preference:attachments'] = 'Leidžiamų priedų skaičius.';
$string['privacy:preference:attachmentsrequired'] = 'Būtinų priedų skaičius.';
$string['privacy:preference:defaultmark'] = 'Numatytasis nurodyto klausimo balas.';
$string['privacy:preference:maxbytes'] = 'Maksimalus failo dydis.';
$string['privacy:preference:responsefieldlines'] = 'Eilučių skaičius, nurodantis įvesties laukelio (teksto srities) dydį.';
$string['privacy:preference:responseformat'] = 'Koks yra atsakymo formatas (HTML rengyklė, paprastas tekstas ir kt.)?';
$string['privacy:preference:responserequired'] = 'Ar besimokantysis turi įvesti tekstą, ar teksto įvestis yra neprivaloma.';
$string['responsefieldlines'] = 'Įvedimo lauko dydis';
$string['responseformat'] = 'Atsakymo formatas';
$string['responseisrequired'] = 'Reikalauti, kad besimokantysis įvestų tekstą';
$string['responsenotrequired'] = 'Teksto įvedimas yra neprivalomas';
$string['responseoptions'] = 'Atsakymo nustatymai';
$string['responserequired'] = 'Reikalauti teksto';
$string['responsetemplate'] = 'Atsakymo šablonas';
$string['responsetemplate_help'] = 'Bet koks čia įvestas tekstas bus rodomas atsakymo įvesties laukelyje, kai prasidės naujas bandymas atsakyti į klausimą.';
$string['responsetemplateheader'] = 'Atsakymo šablonas';
$string['wordcount'] = 'Žodžių skaičius: {$a}';
$string['wordcounttoofew'] = 'Žodžių skaičius: {$a->count}, mažiau nei reikalaujama {$a->limit} žodžių.';
$string['wordcounttoomuch'] = 'Žodžių skaičius: {$a->count}, daugiau nei reikalaujama {$a->limit} žodžių.';
