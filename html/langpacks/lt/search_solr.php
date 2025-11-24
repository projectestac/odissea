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
 * Strings for component 'search_solr', language 'lt', version '4.5'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'Nurodytas Solr serveris nepasiekiamas arba nurodyto indekso nėra';
$string['connectionsettings'] = 'Connection settings';
$string['errorcreatingschema'] = 'Klaida kuriant Solr schemą: {$a}';
$string['errorsolr'] = 'Solr paieškos variklis pranešė apie klaidą: {$a}';
$string['errorvalidatingschema'] = 'Klaida tikrinant Solr schemą: laukas {$a->fieldname} neegzistuoja. Jei norite nustatyti reikiamus laukus, <a href="{$a->setupurl}">sekite šią nuorodą</a>.';
$string['extensionerror'] = '„Apache Solr“ PHP plėtinys neįdiegtas. Patikrinkite dokumentus.';
$string['fileindexing'] = 'Įgalinti failų indeksavimą';
$string['fileindexing_help'] = 'Jei jūsų „Solr“ diegimas tai palaiko, ši funkcija leidžia „Moodle“ siųsti failus, kurie turi būti indeksuojami.<br/>
Įjungę šią parinktį, norėdami pridėti visus failus, turėsite iš naujo indeksuoti visą svetainės turinį.';
$string['fileindexsettings'] = 'Failo indeksavimo nustatymai';
$string['maxindexfilekb'] = 'Maksimalus indekso failo dydis (kB)';
$string['maxindexfilekb_help'] = 'Failai, didesni nei šis kilobaitų skaičius, nebus įtraukti į paieškos indeksavimą. Jei nustatyta į nulį, bet kokio dydžio failai bus indeksuojami.';
$string['minimumsolr4'] = 'Solr 4.0 yra minimali Moodle reikalinga versija';
$string['missingconfig'] = 'Jūsų „Apache Solr“ serveris dar nesukonfigūruotas „Moodle“.';
$string['multivaluedfield'] = 'Laukas „{$a}“ grąžino masyvą, o ne skaliarą. Ištrinkite dabartinį indeksą, sukurkite naują ir paleiskite setup_schema.php prieš indeksuodami duomenis Solr.';
$string['nodatafromserver'] = 'Nėra duomenų iš serverio';
$string['pluginname'] = 'Solr';
$string['privacy:metadata'] = 'Šis papildinys siunčia duomenis iš išorės į susietą Solr paieškos variklį. Jis nesaugo duomenų vietoje.';
$string['privacy:metadata:data'] = 'Asmens duomenys, perduoti iš paieškos posistemės.';
$string['schemafieldautocreated'] = 'Laukas „{$a}“ jau yra Solr schemoje. Tikriausiai pamiršote paleisti šį scenarijų, kol Solr automatiškai nesukūrė duomenų ir laukų indeksavimo. Ištrinkite dabartinį indeksą, sukurkite naują ir dar kartą paleiskite setup_schema.php prieš indeksuodami duomenis Solr.';
$string['schemasetupfromsolr5'] = 'Jūsų Solr serverio versija yra senesnė nei 5.0. Šis scenarijus gali nustatyti jūsų schemą, tik jei jūsų Solr versija yra 5.0 arba naujesnė. Turite rankiniu būdu nustatyti laukus savo schemoje pagal \\search_solr\\document::get_default_fields_definition().';
$string['searchinfo'] = 'Paieškos užklausos';
$string['searchinfo_help'] = 'Lauką, kuriame reikia ieškoti, galima nurodyti prieš paieškos užklausą įrašius „antraštė:“, „turinys:“, „pavadinimas:“ arba „įvadas:“. Pavyzdžiui, ieškant „pavadinimas:naujienos“ būtų pateikti rezultatai, kurių pavadinime būtų žodis „naujienos“.

Būlio operatoriai („AND“, „ARBA“, „NE“) gali būti naudojami raktiniams žodžiams derinti arba išskirti.

Pakaitos simboliai („*“ arba „?“) gali būti naudojami simboliams paieškos užklausoje atvaizduoti.';
$string['setupok'] = 'Schema paruošta naudoti.';
$string['solrauthpassword'] = 'HTTP autentifikavimo slaptažodis';
$string['solrauthuser'] = 'HTTP autentifikavimo naudotojo vardas';
$string['solrhttpconnectionport'] = 'Prievadas';
$string['solrhttpconnectiontimeout'] = 'Laikas baigėsi';
$string['solrhttpconnectiontimeout_desc'] = 'HTTP ryšio skirtasis laikas yra maksimalus laikas sekundėmis, leidžiamas HTTP duomenų perdavimo operacijai.';
$string['solrindexname'] = 'Indekso pavadinimas';
$string['solrinfo'] = 'Solr';
$string['solrnotselected'] = 'Solr variklis nėra sukonfigūruotas paieškos variklis';
$string['solrsecuremode'] = 'Saugus režimas';
$string['solrserverhostname'] = 'Prieglobos pavadinimas';
$string['solrserverhostname_desc'] = '„Solr“ serverio domeno pavadinimas.';
$string['solrsetting'] = 'Solr nustatymai';
$string['solrsslcainfo'] = 'SSL CA sertifikatų pavadinimas';
$string['solrsslcainfo_desc'] = 'Failo pavadinimas, turintis vieną ar daugiau CA sertifikatų, kuriais galima patikrinti lygiavertį ryšį';
$string['solrsslcapath'] = 'SSL CA sertifikatų kelias';
$string['solrsslcapath_desc'] = 'Katalogo kelias, kuriame yra keli CA sertifikatai, kuriais galima patikrinti lygiavertį ryšį';
$string['solrsslcert'] = 'SSL sertifikatas';
$string['solrsslcert_desc'] = 'PEM formato privataus sertifikato failo pavadinimas';
$string['solrsslkey'] = 'SSL raktas';
$string['solrsslkey_desc'] = 'PEM formato privataus rakto failo pavadinimas';
$string['solrsslkeypassword'] = 'SSL rakto slaptažodis';
$string['solrsslkeypassword_desc'] = 'PEM formato privataus rakto failo slaptažodis';
