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
 * Strings for component 'qtype_calculated', language 'ro', version '4.5'.
 *
 * @package     qtype_calculated
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'Adaugă item';
$string['addmoreanswerblanks'] = 'Adaugă un alt răspuns blanc.';
$string['addsets'] = 'Adaugă set(uri)';
$string['answerdisplay'] = 'Afișare răspuns';
$string['answerformula'] = 'Formula pentru răspunsul {$a}';
$string['answerhdr'] = 'Răspuns';
$string['answerstoleranceparam'] = 'Parametrii de toleranță ai răspunsului';
$string['answerwithtolerance'] = '{$a->answer} (±{$a->tolerance} {$a->tolerancetype})';
$string['anyvalue'] = 'Orice valoare';
$string['atleastoneanswer'] = 'Trebuie să furnizaţi cel puţin un răspuns.';
$string['atleastonerealdataset'] = 'Ar trebui să existe cel puțin un set real de date în textul întrebării';
$string['atleastonewildcard'] = 'Ar trebui să existe cel puțin un caracter de tip wild card în formula de răspuns sau textul întrebării';
$string['calcdistribution'] = 'Distribuție';
$string['calclength'] = 'Zecimale';
$string['calcmax'] = 'Maxim';
$string['calcmin'] = 'Minim';
$string['choosedatasetproperties'] = 'Alegeți proprietățile caracterelor de tip wild card (metacaractere) al setului de date';
$string['choosedatasetproperties_help'] = 'Un set de date este un set de valori introduse în locul unui metacaracter. Puteţi crea un set de date privat pentru o întrebare specifică, sau un set de date partajat care poate fi folosit și pentru alte întrebări calculate din cadrul categoriei.';
$string['correctanswerformula'] = 'Formula corectă de răspuns';
$string['correctanswershows'] = 'Răspunsul corect este vizibil';
$string['correctanswershowsformat'] = 'Format';
$string['correctfeedback'] = 'Pentru orice răspuns corect';
$string['dataitemdefined'] = 'cu {$a} valori numerice deja definite este disponibil';
$string['datasetrole'] = 'Caracterele de tip wild card (metacaractere) <strong> {x..} </strong> vor fi înlocuite cu o valoare numerică din setul lor de date';
$string['decimals'] = 'cu {$a}';
$string['deleteitem'] = 'Șterge element';
$string['deletelastitem'] = 'Șterge ultimul element';
$string['distributionoption'] = 'Selectați opțiunea distribuției';
$string['editdatasets'] = 'Editați metacaracterele setului de date';
$string['editdatasets_help'] = 'Valorile metacaracterelor pot fi create prin introducerea unui număr în fiecare câmp a metacaracterelor, apoi făcând click pe butonul Adaugă. Pentru a genera automat 10 sau mai multe valori, selectaţi numărul de valori necesare înainte de a apăsa pe butonul Adaugă. O distribuție uniformă va însemna că este la fel de probabil să se genereze orice valoare cuprinsă între limite; o distribuţie logaritmică va însemna că sunt mai probabile valorile către limita inferioară.';
$string['editdatasets_link'] = 'question/type/calculated';
$string['existingcategory1'] = 'va folosi un set de date partajat deja existent';
$string['existingcategory2'] = 'un fișier dintr-un set deja existent de fișiere care sunt utilizate și de alte întrebări din această categorie';
$string['existingcategory3'] = 'un link dintr-un set deja existent de link-uri care sunt utilizate și de alte întrebări din această categorie';
$string['forceregeneration'] = 'regenerare forțată';
$string['forceregenerationall'] = 'regenerare forțată a tuturor metacaracterelor';
$string['forceregenerationshared'] = 'regenerare forțată numai a metacaracterelor nepartajate';
$string['functiontakesatleasttwo'] = 'Funcția {$a} trebuie să aibă cel puțin două argumente';
$string['functiontakesnoargs'] = 'Funcția {$a} nu ia niciun argument';
$string['functiontakesonearg'] = 'Funcția {$a} trebuie să aibă exact un argument';
$string['functiontakesoneortwoargs'] = 'Funcția {$a} trebuie să aibă unul sau două argument';
$string['functiontakestwoargs'] = 'Funcția {$a} trebuie să aibă exact două argumente';
$string['generatevalue'] = 'Generează o nouă valoare între';
$string['getnextnow'] = 'Obțineți acum un „Element de adăugat” nou';
$string['hexanotallowed'] = 'Setul de date <strong> {$a->name} </strong> valoare de format hexazecimal {$a->value} nu este permis';
$string['illegalformulasyntax'] = 'Sintaxa formulelor incorecte care începe cu „{$a}”';
$string['incorrectfeedback'] = 'Pentru orice răspuns incorect';
$string['itemno'] = 'Element {$a}';
$string['itemscount'] = 'Items<br />Count';
$string['itemtoadd'] = 'Element pentru a fi adăugat';
$string['keptcategory1'] = 'va folosi același set de date partajat existent ca înainte';
$string['keptcategory2'] = 'un fișier din aceeași categorie reutilizabil set de fișiere ca înainte';
$string['keptcategory3'] = 'un link din aceeași categorie reutilizabil set de linkuri ca înainte';
$string['keptlocal1'] = 'va folosi același set de date private existente ca înainte';
$string['keptlocal2'] = 'un fișier din același set privat de fișiere de întrebare ca înainte';
$string['keptlocal3'] = 'un link din aceeași întrebare set privat de linkuri ca înainte';
$string['lengthoption'] = 'Selectați opțiunea de lungime';
$string['loguniform'] = 'Loguniform';
$string['loguniformbit'] = 'cifre, dintr-o distribuție loguniformă';
$string['makecopynextpage'] = 'Pagina următoare (întrebare nouă)';
$string['mandatoryhdr'] = 'Metacaractere obligatorii prezente în răspunsuri';
$string['max'] = 'max';
$string['min'] = 'Min';
$string['minmax'] = 'Interval de valori';
$string['missingformula'] = 'Lipsește formula';
$string['missingname'] = 'Lipsește denumirea întrebării';
$string['missingquestiontext'] = 'Lipsește textul întrebării';
$string['mustenteraformulaorstar'] = 'Trebuie să inserați o formulă sau \'*\'.';
$string['newcategory1'] = 'va folosi un nou set de date partajat';
$string['newcategory2'] = 'un fișier dintr-un nou set de fișiere care poate fi folosit și de alte întrebări din această categorie';
$string['newcategory3'] = 'un link dintr-un nou set de linkuri care poate fi folosit și de alte întrebări din această categorie';
$string['newlocal1'] = 'va folosi un nou set de date privat';
$string['newlocal2'] = 'un fișier dintr-un nou set de fișiere care va fi utilizat numai de această întrebare';
$string['newlocal3'] = 'un link dintr-un nou set de linkuri care va fi utilizat numai de această întrebare';
$string['newsetwildcardvalues'] = 'set (uri) noi de valori de metacaracter(e)';
$string['nextitemtoadd'] = 'Următorul "Element de adăugat"';
$string['nextpage'] = 'Pagina următoare';
$string['nocoherencequestionsdatyasetcategory'] = 'Pentru ID-ul întrebării {$a->qid}, ID-ul categoriei {$a->qcat} nu este identic cu metacaracterul partajat {$a->name} ID-ul categoriei {$a->sharedcat}. Editați întrebarea.';
$string['nocommaallowed'] = 'Caracterul virgulă "," nu poate fi utilizat, utilizați caracterul punct "." precum ]n acest exemplu 0.013 sau 1.3e-2';
$string['nodataset'] = 'nimic - nu este un metacaracter';
$string['nosharedwildcard'] = 'Niciun metacaracter comun în această categorie';
$string['notvalidnumber'] = 'Valoarea metacaracterului nu este un număr valid';
$string['oneanswertrueansweroutsidelimits'] = 'Cel puțin un răspuns corect în afara valorilor reale. <br /> Modificați setările de toleranță ale răspunsurilor disponibile ca parametri avansați';
$string['param'] = 'Param {<strong>{$a}</strong>}';
$string['partiallycorrectfeedback'] = 'Pentru orice răspuns parțial corect';
$string['pluginname'] = 'Calculat';
$string['pluginname_help'] = 'Întrebările calculate permit crearea întrebărilor individuale numerice folosind metacaractere în acolade, care vor fi înlocuite cu valori individuale, atunci când se va completa testul. De exemplu, la întrebarea "Care este aria unui dreptunghi de Lungimea {lung} şi Lăţimea {lat}?" răspunsul corect ar fi "{lung} * {lat}" ( unde * denotă multiplicare ).';
$string['pluginname_link'] = 'question/type/calculated';
$string['pluginnameadding'] = 'Adăugarea unei întrebări de tip calculat';
$string['pluginnameediting'] = 'Editarea unei întrebări de tip calculat';
$string['pluginnamesummary'] = 'Întrebările de tip calculat sunt ca întrebările numerice, dar cu numerele folosite selectate aleatoriu dintr-un set de date atunci când testul este susținut.';
$string['possiblehdr'] = 'Posibile metacaractere prezente numai în textul întrebării';
$string['privacy:metadata'] = 'Pluginul Întrebare de tip calculat nu stochează date personale.';
$string['questiondatasets'] = 'Setul de date al întrebării';
$string['questiondatasets_help'] = 'Seturile de date ale întrebărilor cu metacaractere care vor fi folosite în fiecare întrebare individuală.';
$string['questionstoredname'] = 'Numele stocat al întrebării';
$string['replacewithrandom'] = 'Înlocuiți cu o valoare aleatorie';
$string['reuseifpossible'] = 'refolosiți valoarea anterioară, dacă este disponibilă';
$string['setno'] = 'Set {$a}';
$string['setwildcardvalues'] = 'set(uri) de valori de metacaracter(e)';
$string['sharedwildcard'] = 'Metacaracter partajat {<strong>{$a}</strong>}';
$string['sharedwildcardname'] = 'Metacaracter partajat';
$string['sharedwildcards'] = 'Metacaractere partajat';
$string['showitems'] = 'Afișează';
$string['significantfigures'] = 'cu {$a}';
$string['significantfiguresformat'] = 'cifre semnificative';
$string['synchronize'] = 'Sincronizați datele din seturile de date partajate cu alte întrebări într-un test';
$string['synchronizeno'] = 'Nu sincroniza';
$string['synchronizeyes'] = 'Sincronizează';
$string['synchronizeyesdisplay'] = 'Sincronizați și afișați numele seturilor de date partajate ca prefix al numelui întrebării';
$string['tolerance'] = 'Toleranță ±';
$string['tolerancetype'] = 'Tip';
$string['trueanswerinsidelimits'] = 'Răspuns corect: {$a->correct} în limitele valorii adevărate {$a->true}';
$string['trueansweroutsidelimits'] = '<span class = "error"> EROARE Răspuns corect: {$a->correct} în afara limitelor valori adevărate {$a->true} </span>';
$string['uniform'] = 'Uniform';
$string['uniformbit'] = 'zecimale, dintr-o distribuție uniformă';
$string['unsupportedformulafunction'] = 'Funcția {$a} nu este acceptată';
$string['updatecategory'] = 'Actualizează categoria';
$string['updatedatasetparam'] = 'Actualizați parametrii seturilor de date';
$string['updatetolerancesparam'] = 'Actualizați parametrii de toleranță a răspunsurilor';
$string['updatewildcardvalues'] = 'Actualizați valorile metacaracterului';
$string['useadvance'] = 'Utilizați butonul avansat pentru a vedea erorile';
$string['usedinquestion'] = 'Folosit în Întrebarea';
$string['wildcard'] = 'Metacaracter {<strong>{$a}</strong>}';
$string['wildcardparam'] = 'Parametrii metacaracterului folosiți pentru a genera valorile';
$string['wildcardrole'] = 'Metacaracterele <strong>{x..}</strong> vor fi înlocuite cu o valoare numerică din valorile generate';
$string['wildcards'] = 'Metacaractere {a}...{z}';
$string['wildcardvalues'] = 'Valori metacaractere';
$string['wildcardvaluesgenerated'] = 'Valorile metacaracterelor generate';
$string['youmustaddatleastoneitem'] = 'Trebuie să adăugați cel puțin un element de set de date înainte de a putea salva această întrebare.';
$string['youmustaddatleastonevalue'] = 'Trebuie să adăugați cel puțin un set de valori pentru metacaractere înainte de a putea salva această întrebare.';
$string['zerosignificantfiguresnotallowed'] = 'Răspunsul corect nu poate avea zero cifre semnificative!';
