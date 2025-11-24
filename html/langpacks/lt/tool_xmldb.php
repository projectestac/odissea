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
 * Strings for component 'tool_xmldb', language 'lt', version '4.5'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Faktiškas';
$string['addpersistent'] = 'Pridėti privalomus nuolatinius laukus';
$string['aftertable'] = 'Po lentelės';
$string['back'] = 'Atgal';
$string['backtomainview'] = 'Atgal į pagrindinį';
$string['cannotuseidfield'] = 'Negalima įterpti "id" lauko. Tai automatiškai numeruojamas stulpelis';
$string['change'] = 'Pakeisti';
$string['charincorrectlength'] = 'Neteisingas lauko ilgis';
$string['check_bigints'] = 'Tikrinti neteisingas DB sveikų skaičių reikšmes';
$string['check_defaults'] = 'Tikrinti nenuseklių numatytų reikšmių';
$string['check_foreign_keys'] = 'Tikrinti svetimų raktų neatitikimų';
$string['check_indexes'] = 'Tikrinti nerastų DB indeksų';
$string['check_oracle_semantics'] = 'Ieškoti neteisingų ilgių semantikų';
$string['checkbigints'] = 'Patikrinti didelius sveikuosius skaičius';
$string['checkdefaults'] = 'Patikrinti numatytas reikšmes';
$string['checkforeignkeys'] = 'Patikrinti svetimus raktus';
$string['checkindexes'] = 'Patikrinti indeksus';
$string['checkoraclesemantics'] = 'Patikrinti semantikas';
$string['completelogbelow'] = '(žiūrėkite visą paieškos ataskaitą žemiau)';
$string['confirmcheckbigints'] = 'Ši funkcija ieškos <a href="https://tracker.moodle.org/browse/MDL-11038">galimų neteisingų sveikųjų skaičių laukų</a> jūsų Moodle serveryje ir automatiškai generuos (bet nevykdys!) reikalingas SQL užklausas, kad visi jūsų DB sveikieji skaičiai būtų tinkamai apibrėžti.

Sugeneravę tokias užklausas galite nukopijuoti ir saugiai jas vykdyti naudodami mėgstamą SQL sąsają (prieš tai darydami nepamirškite pasidaryti atsarginės duomenų kopijos).

Prieš atliekant neteisingų sveikųjų skaičių paiešką, labai rekomenduojama paleisti naujausią (+ versiją) jūsų Moodle versiją.

Ši funkcija neatlieka jokių veiksmų DB (tik nuskaito iš jos), todėl gali būti saugiai vykdoma bet kuriuo metu.';
$string['confirmcheckdefaults'] = 'Ši funkcija ieškos neteisingų numatytų reikšmių jūsų Moodle serveryje generuojant (bet ne vykdant) automatiškai reikalingas SQL užklausas norint turėti visus sveikuosius skaičius teisingai aprašytus duomenų bazėje<br /><br />Kai viskas bus sugeneruota jūs galite kopijuoti tokias užklausas ir jas paleisti norimame SQL interfeise (nepamirškite pasidaryti atsarginių kopijų)<br /><br />Rekomenduojama naudoti naujausią Moode išleistą versiją, prieš paleidžiant kodą.<br /><br />Ši funkcija nenaudos jokių veiksmų prieš DB (tik skaitys iš jos), todėl galite naudoti betkada';
$string['confirmcheckforeignkeys'] = 'Ši funkcija ieškos galimų pašalinių raktų, apibrėžtų install.xml apibrėžimuose, pažeidimų. (Moodle šiuo metu duomenų bazėje negeneruoja faktinių išorinio rakto apribojimų, todėl gali būti neteisingų duomenų.)

Prieš pradedant ieškoti galimų išorinių raktų pažeidimų, labai rekomenduojama paleisti naujausią (+ versiją) jūsų Moodle versiją.

Ši funkcija neatlieka jokių veiksmų DB (tik nuskaito iš jos), todėl gali būti saugiai vykdoma bet kuriuo metu.';
$string['confirmcheckindexes'] = 'Ši funkcija ieškos nerastų indeksų Moodle serveryje generuojant (bet ne vykdant) automatiškai reikalingas SQL užklausas norint turėti visus sveikuosius skaičius teisingai aprašytus duomenų bazėje<br /><br />Kai viskas bus sugeneruota jūs galite kopijuoti tokias užklausas ir jas paleisti norimame SQL interfeise (nepamirškite pasidaryti atsarginių kopijų)<br /><br />Rekomenduojama naudoti naujausią Moode išleistą versiją, prieš paleidžiant kodą.<br /><br />Ši funkcija nenaudos jokių veiksmų prieš DB (tik skaitys iš jos), todėl galite naudoti betkada';
$string['confirmcheckoraclesemantics'] = 'Ši funkcija ieškos <a href="https://tracker.moodle.org/browse/MDL-29322">Oracle varchar2 stulpelių naudodama BYTE semantiką</a> jūsų Moodle serveryje, automatiškai generuodama (bet nevykdydama!) reikalingus SQL sakinius, kad visi stulpeliai būtų konvertuoti į CHAR semantiką (geresniam suderinamumui su įvairiais db ir padidinus maksimalų turinio ilgį).

Sugeneravę tokius teiginius galite nukopijuoti ir saugiai juos vykdyti naudodami mėgstamą SQL sąsają (prieš tai darydami nepamirškite pasidaryti atsarginės duomenų kopijos).

Prieš atliekant BYTE semantikos paiešką, labai rekomenduojama paleisti naujausią (+ versiją) turimą Moodle leidimą.

Ši funkcija neatlieka jokių veiksmų prieš DB (tik nuskaito iš jos), todėl gali būti saugiai vykdoma bet kuriuo metu.';
$string['confirmdeletefield'] = 'Ar jūs tikras, kad norite ištrinti šį lauką:';
$string['confirmdeleteindex'] = 'Ar jūs tikras, kad norite ištrinti šį indeksą:';
$string['confirmdeletekey'] = 'Ar jūs tikras, kad norite ištrinti šį raktą:';
$string['confirmdeletetable'] = 'Ar jūs tikras, kad norite ištrinti šią lentelę:';
$string['confirmdeletexmlfile'] = 'Ar jūs tikras, kad norite ištrinti šį failą:';
$string['confirmrevertchanges'] = 'Ar jūs tikras, kad norite atstatyti veiksmus atliktus ankščiau:';
$string['create'] = 'Kurti';
$string['createtable'] = 'Kurti lentelę';
$string['defaultincorrect'] = 'Neteisinga numatyta reikšmė';
$string['delete'] = 'Ištrinti';
$string['delete_field'] = 'Ištrinti lauką';
$string['delete_index'] = 'Ištrinti indeksą';
$string['delete_key'] = 'Ištrinti raktą';
$string['delete_table'] = 'Ištrinti lentelę';
$string['delete_xml_file'] = 'Ištrinti XML failą';
$string['doc'] = 'Doc';
$string['docindex'] = 'Dokumentacijos indeksas:';
$string['documentationintro'] = 'Dokumentacija generuojama automatiškai iš XMLDB duomenyų bazės aprašymo. Ji prieinama tik angliškai';
$string['down'] = 'Žemyn';
$string['duplicate'] = 'Dublikuoti';
$string['duplicatefieldname'] = 'Dar veinas laukas su tokiu pavadinimu jau egzistuoja';
$string['duplicatefieldsused'] = 'Besidubliuojantys laukai naudojami';
$string['duplicateindexname'] = 'Dubliuoti indekso pavadinimą';
$string['duplicatekeyname'] = 'Dar veinas laukas su tokiu raktu jau egzistuoja';
$string['duplicatetablename'] = 'Dar veinas laukas su tokiu pavadinimu jau egzistuoja';
$string['edit'] = 'Redaguoti';
$string['edit_field'] = 'Redaguoti lauką';
$string['edit_field_save'] = 'Išsaugoti lauką';
$string['edit_index'] = 'Redaguoti indeksą';
$string['edit_index_save'] = 'Išsaugoti indeksą';
$string['edit_key'] = 'Redaguoti raktą';
$string['edit_key_save'] = 'Išsaugoti raktą';
$string['edit_table'] = 'Redaguoti lentelę';
$string['edit_table_save'] = 'Išsaugoti lentelę';
$string['edit_xml_file'] = 'Redaguoti XML failą';
$string['enumvaluesincorrect'] = 'Neteisinigos lauko reikšmės';
$string['expected'] = 'Tikėtinas';
$string['extensionrequired'] = 'Atleiskite - PHP plėtinys \'{$a}\' reikalingas šiam veiksmui. Prašome suinstaliuoti plėtinį jei norite naudotis šiomis galimybėmis';
$string['extraindexesfound'] = 'Rasti papildomi indeksai';
$string['field'] = 'Laukas';
$string['fieldnameempty'] = 'Lauko pavadinimas tuščias';
$string['fields'] = 'Laukai';
$string['fieldsnotintable'] = 'Laukai neegzistuoja lentelėje';
$string['fieldsusedinindex'] = 'Šis laukas naudojamas kaip indeksas';
$string['fieldsusedinkey'] = 'Laukas naudojamas kaip raktas';
$string['filemodifiedoutfromeditor'] = 'Įspėjimas: naudojant XMLDB rengyklę failas buvo pakeistas vietoje. Išsaugojus bus perrašyti vietiniai pakeitimai.';
$string['filenotwriteable'] = 'Laukas neredaguojamas';
$string['fkunknownfield'] = 'Svetimas raktas {$a->keyname} lentelėje {$a->tablename} nukreipia į neegzistuojantį lauką {$a->reffield} nurodytoje lentelėje {$a->reftable}.';
$string['fkunknowntable'] = 'Svetimas raktas {$a->keyname} lentelėje {$a->tablename} nurodo neegzistuojančią lentelę {$a->reftable}.';
$string['fkviolationdetails'] = 'Svetimas raktas {$a->keyname} lentelėje {$a->tablename} pažeidžiamas {$a->numviolations} iš {$a->numrows} eilutės.';
$string['float2numbernote'] = 'Pastaba: Nors "float" laukai yra 100% palaikomi XMLDB, rekomenduojama migruoti į "number" lauką';
$string['floatincorrectdecimals'] = 'Netikslus dešimčių skaičius, realių skaičių tipo laukui';
$string['floatincorrectlength'] = 'Netirkus realių skaičių lauko ilgis';
$string['generate_all_documentation'] = 'Visa dokumentacija';
$string['generate_documentation'] = 'Dokumentacija';
$string['gotolastused'] = 'Eiti į paskutinį naudotą failą';
$string['incorrectfieldname'] = 'Neteisingas vardas';
$string['incorrectindexname'] = 'Neteisingas indekso pavadinimas';
$string['incorrectkeyname'] = 'Neteisingas rakto pavadinimas';
$string['incorrecttablename'] = 'Neteisingas lentelės pavadinimas';
$string['index'] = 'Indeksas';
$string['indexes'] = 'Indeksai';
$string['indexnameempty'] = 'Indekso pavadinimas yra tuščias';
$string['integerincorrectlength'] = 'Netikslus sveikų skaičių lauko ilgis';
$string['key'] = 'Raktas';
$string['keynameempty'] = 'Rakto pavadinimas negali būti tuščias';
$string['keys'] = 'Raktai';
$string['listreservedwords'] = 'Rezervuotų žodžių sąrašas<br /> (naudojamas <a href="https://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB rezervuotų žodžių</a> atnaujinimui)';
$string['load'] = 'Užkrauti';
$string['main_view'] = 'Pagrindinis vaizdas';
$string['masterprimaryuniqueordernomatch'] = 'Laukai jūsų svetimame rakte turi būti tokia pačia tvarka kaip ir unikalių raktų lentelėje';
$string['missing'] = 'Nerastas';
$string['missingindexes'] = 'Nerasti indeksai rasti';
$string['mustselectonefield'] = 'Jūs turite pasirinkti vieną lauką, kad matyti susijusius veiksmus';
$string['mustselectoneindex'] = 'Jūs turite pasirinkti vieną indeksą, kad matytumėte indeksų susijusius veiksmus';
$string['mustselectonekey'] = 'Jūs turite pasirinkti vieną raktą, kad matytumėte su raktais susijusius veiksmus';
$string['new_table_from_mysql'] = 'Nauja MySQL lentelė';
$string['newfield'] = 'Naujas laukas';
$string['newindex'] = 'Naujas indeksas';
$string['newkey'] = 'Naujas raktas';
$string['newtable'] = 'Nauja lentelė';
$string['newtablefrommysql'] = 'Nauja MySQL lentelė';
$string['nofieldsspecified'] = 'Laukai nenurodyti';
$string['nomasterprimaryuniquefound'] = 'Stulpelis (-iai), į kurį (-iuos) nurodo jūsų išorinio rakto nuorodas, turi būti įtrauktas (-i) į pirminį arba unikalų KEY nurodytą lentelę. Atminkite, kad stulpelis, esantis UNIKALIOJI RODYKLĖJE, nėra pakankamai geras.';
$string['nomissingorextraindexesfound'] = 'Nerasta jokių trūkstamų ar papildomų indeksų, todėl nereikia imtis jokių veiksmų.';
$string['noreffieldsspecified'] = 'Nuorodos laukai nenurodyti';
$string['noreftablespecified'] = 'Nurodyta nuorodų lentelė nerasta';
$string['noviolatedforeignkeysfound'] = 'Nerasta pažeistų raktų';
$string['nowrongdefaultsfound'] = 'Nerasta nenuoseklių numatytų veiksmų, jūsų duomenų bazei nereikia papildomų veiksmų';
$string['nowrongintsfound'] = 'Nerasta jokių blogų sveikų skaičių, jūsų duomenų bazei nereikia papildomų veiksmų';
$string['nowrongoraclesemanticsfound'] = 'Nerasta Oracle stulpelių naudojančių BYTE semantiką, jūsų duomenų bazei nereikia papildomų veiksmų';
$string['numberincorrectdecimals'] = 'Neteisingas laukui nurodytas dešimčių skaičius';
$string['numberincorrectlength'] = 'Neteisingas skaičių lauko ilgis';
$string['numberincorrectwholepart'] = 'Per didelė sveikojo skaičiaus dalis skaičiaus lauke';
$string['pendingchanges'] = 'Pastabas: Jūs padarėte pakeitimus šiam failui. Jie gali būti išsaugoti betkuriuo metu.';
$string['pendingchangescannotbesaved'] = 'Yra pakeitimų faile, bet jie negali būti išsaugoti. Įsitikinkite, kad tiek direktorija tiek "install.xml" failai turi rašymo teises';
$string['pendingchangescannotbesavedreload'] = 'Yra pakeitimų faile, bet jie negali būti išsaugoti. Įsitikinkite, kad tiek direktorija tiek "install.xml" failai turi rašymo teises. Po to perkraukite šį puslapį ir galėsite išsaugoti pakeitimus';
$string['persistentfieldscomplete'] = 'Buvo pridėti šie laukai:';
$string['persistentfieldsconfirm'] = 'Ar norite pridėti šiuos laukus:';
$string['persistentfieldsexist'] = 'Šie laukai jau egzistuoja:';
$string['pluginname'] = 'XMLDB rengyklė';
$string['primarykeyonlyallownotnullfields'] = 'Pirminiai raktai negali būti nuliniai';
$string['privacy:metadata'] = 'XMLDB rengyklės papildinys nesaugo jokių asmeninių duomenų.';
$string['reconcile_files'] = 'Ieškokite XMLDB failų, kuriuos reikia suderinti';
$string['reconcile_files_intro'] = 'Ši funkcija peržiūri visų XMLDB failų turinį, kad patikrintų, ar jie atitinka jų generavimo iš XMLDB rengyklės rezultatus.

Bus rodomas failų, kuriuos reikia suderinti (regeneruoti), sąrašas ir, kad juos pataisyti galima naudoti XMLDB rengyklę.';
$string['reconcile_files_no'] = 'Visi failai yra GERI. Nereikia suderinti.';
$string['reconcile_files_yes'] = 'Rasti failai, kuriuos reikia suderinti:';
$string['reconcilefiles'] = 'Suderinti XMLDB failus';
$string['reserved'] = 'Rezervuota';
$string['reservedwords'] = 'Rezervuoti žodžiai';
$string['revert'] = 'Sugražinti';
$string['revert_changes'] = 'Sugražinti pakeitimus';
$string['save'] = 'Išsaugoti';
$string['searchresults'] = 'Paieškos rezultatai';
$string['selectaction'] = 'Pasirinkite veiksmą:';
$string['selectdb'] = 'Pasirinkite duomenų bazę:';
$string['selectfieldkeyindex'] = 'Pasirinkite lauką/raktą/indeksą:';
$string['selectonecommand'] = 'Pasirinkite vieną veiksmą iš PHP kodo';
$string['selectonefieldkeyindex'] = 'Pasirinkite vieną laiką/raktą/indeksą iš PHP kodo';
$string['selecttable'] = 'Pasirinkite lentelę:';
$string['table'] = 'Lentelė';
$string['tablenameempty'] = 'Lentelės pavadinimas negali būti tuščias';
$string['tables'] = 'Lentelės';
$string['unknownfield'] = 'Nurodo nežinomą lauką';
$string['unknowntable'] = 'Nurodo nežinomą lentelę';
$string['unload'] = 'Iškrauti';
$string['up'] = 'Aukštyn';
$string['view'] = 'Peržiūrėti';
$string['view_reserved_words'] = 'Peržiūrėti rezervuotus žodžius';
$string['view_structure_php'] = 'Peržiūrėti PHP struktūrą';
$string['view_structure_sql'] = 'Peržiūrėti SQL struktūrą';
$string['view_table_php'] = 'Peržiūrėti PHP lentelę';
$string['view_table_sql'] = 'Peržiūrėti SQL lentelę';
$string['viewedited'] = 'Peržiūrėti redaguotis';
$string['vieworiginal'] = 'Peržiūrėti orginalą';
$string['viewphpcode'] = 'Peržiūrėti PHP kodą';
$string['viewsqlcode'] = 'Peržiūrėti SQL kodą';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Pažeisti svetimi raktai';
$string['violatedforeignkeysfound'] = 'Rasti pažeisti svetimi raktai';
$string['violations'] = 'Pažeidimai';
$string['wrong'] = 'Neteisinga';
$string['wrongdefaults'] = 'Rasti neteisingi standartai';
$string['wrongints'] = 'Rasti neteisingi sveikieji skaičiai';
$string['wronglengthforenum'] = 'Neteisingas lauko ilgis';
$string['wrongnumberofreffields'] = 'Netinkamas nuorodos laukų skaičius';
$string['wrongoraclesemantics'] = 'Rasta neteisinga Oracle BYTE semantika';
$string['wrongreservedwords'] = 'Šiuo metu naudojami rezervuoti žodžiai<br />(pastaba: lentelių vardai nėra svarbūs jei naudojate $CFG->prefix)';
$string['yesextraindexesfound'] = 'Buvo rasti šie papildomi indeksai.';
$string['yesmissingindexesfound'] = 'Rasta nerastų indexu jūsų DB. Čia yra jų detalės ir reikalinga SQL formuluotė norint paleisti su norimu SQL intefeisu (nepamirškite prieš tai pasidaryti atsarginių kopijų)<br /><br />Visa tai padarius, rekomenuodjame paleistį šį įrankį dar kartą, norint įsitikinti, kad tikrai nėra nerastų indeksų.';
$string['yeswrongdefaultsfound'] = 'Rasta nenuoseklių numatytų reikšmių jūsų DB. Čia yra jų detalės ir reikalinga SQL formuluotė norint paleisti su norimu SQL intefeisu (nepamirškite prieš tai pasidaryti atsarginių kopijų)<br /><br />Visa tai padarius, rekomenuodjame paleistį šį įrankį dar kartą, norint įsitikinti, kad tikrai nėra nenuoseklių numatytų reikšmių.';
$string['yeswrongintsfound'] = '<p>Jūsų duomenų bazėje buvo rasti keli neteisingi sveikieji skaičiai. Čia yra jų informacija ir reikalingi SQL teiginiai, kuriuos reikia atlikti naudojant mėgstamą SQL sąsają, kad juos ištaisytumėte. Nepamirškite pirmiausia sukurti atsarginės duomenų kopijos!</p>
<p>Pataisius juos, labai rekomenduojama dar kartą paleisti šią priemonę, kad patikrintumėte, ar nerasta daugiau neteisingų sveikųjų skaičių.</p>';
$string['yeswrongoraclesemanticsfound'] = '<p>Jūsų duomenų bazėje buvo rasti kai kurie „Oracle“ stulpeliai, naudojantys BYTE semantiką. Čia yra jų informacija ir reikalingi SQL sakiniai, kurie turi būti vykdomi naudojant mėgstamą SQL sąsają, kad būtų galima juos visus konvertuoti. Nepamirškite pirmiausia sukurti atsarginės duomenų kopijos!</p>
<p>Tai padarius, labai rekomenduojama dar kartą paleisti šią priemonę, kad patikrintumėte, ar nerasta daugiau klaidingos semantikos.</p>';
