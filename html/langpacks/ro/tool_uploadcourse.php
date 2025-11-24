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
 * Strings for component 'tool_uploadcourse', language 'ro', version '4.5'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Permiteți ștergerile';
$string['allowdeletes_help'] = 'Dacă este acceptat sau nu câmpul de ștergere.';
$string['allowrenames'] = 'Permiteți redenumiri';
$string['allowrenames_help'] = 'Dacă este acceptat sau nu câmpul de redenumire.';
$string['allowresets'] = 'Permiteți resetările';
$string['allowresets_help'] = 'Dacă este acceptat sau nu câmpul de resetare.';
$string['cachedef_helper'] = 'Ajutor în cache';
$string['cannotdeletecoursenotexist'] = 'Nu se poate șterge un curs care nu există';
$string['cannotforcelang'] = 'Nu aveți permisiunea de a forța limba pentru acest curs';
$string['cannotgenerateshortnameupdatemode'] = 'Nu se poate genera un nume scurt când sunt permise actualizările';
$string['cannotreadbackupfile'] = 'Nu se poate citi fișierul copie de rezervă';
$string['cannotrenamecoursenotexist'] = 'Nu se poate redenumi un curs care nu există';
$string['cannotrenameidnumberconflict'] = 'Nu se poate redenumi cursul, numărul de ID intră în conflict cu un curs existent';
$string['cannotrenameshortnamealreadyinuse'] = 'Nu se poate redenumi cursul, numele scurt este deja folosit';
$string['cannotupdatefrontpage'] = 'Nu aveți permisiunea să modificați pagina principală.';
$string['canonlyrenameinupdatemode'] = 'Poate redenumi un curs numai atunci când este permisă actualizarea';
$string['canonlyresetcourseinupdatemode'] = 'Poate reseta un curs numai în modul de actualizare';
$string['couldnotresolvecatgorybyid'] = 'Nu s-a putut rezolva categoria după identificator';
$string['couldnotresolvecatgorybyidnumber'] = 'Nu s-a putut rezolva categoria după numărul de identificare';
$string['couldnotresolvecatgorybypath'] = 'Nu s-a putut rezolva categoria pe cale';
$string['coursecreated'] = 'Cursul a fost creat';
$string['coursedeleted'] = 'Cursul a fost șters';
$string['coursedeletionnotallowed'] = 'Ștergerea cursului nu este permisă';
$string['coursedoesnotexistandcreatenotallowed'] = 'Cursul nu există și crearea cursului nu este permisă';
$string['courseexistsanduploadnotallowed'] = 'Cursul există și actualizarea nu este permisă';
$string['coursefile'] = 'Fișier';
$string['coursefile_help'] = 'Fișierul trebuie să fie CSV.';
$string['courseidnumberincremented'] = 'Numărul ID-ului cursului a fost incrementat {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Procesul cursului';
$string['courserenamed'] = 'Cursul redenumit';
$string['courserenamingnotallowed'] = 'Redenumirea cursului nu este permisă';
$string['coursereset'] = 'Resetarea cursului';
$string['courseresetnotallowed'] = 'Resetarea cursului este acum permisă';
$string['courserestored'] = 'Curs restaurat';
$string['coursescreated'] = 'Cursuri create: {$a}';
$string['coursesdeleted'] = 'Cursuri șterse: {$a}';
$string['courseserrors'] = 'Erori la cursuri: {$a}';
$string['courseshortnamegenerated'] = 'Numele scurt al cursului generat: {$a}';
$string['courseshortnameincremented'] = 'Creșterea numelui scurt al cursului {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Total cursuri: {$a}';
$string['coursesupdated'] = 'Cursuri actualizate: {$a}';
$string['coursetemplatename'] = 'Restaurează din acest curs după încărcare';
$string['coursetemplatename_help'] = 'Introduceți un nume scurt de curs existent pe care să îl utilizați ca șablon pentru crearea tuturor cursurilor.';
$string['coursetorestorefromdoesnotexist'] = 'Cursul sursă din care se face restaurarea nu există';
$string['courseupdated'] = 'Curs actualizat';
$string['courseuploadnotallowed'] = 'Fără permisiune de a încărca cursuri în categorie: {$a}';
$string['courseuploadupdatenotallowed'] = 'Un curs cu această denumire prescurtată există dar nu aveți permisiunea de a utiliza funcționalitatea de încărcare a cursului pentru a-l actualiza.';
$string['createall'] = 'Creați toate, incrementați numele scurt dacă este necesar';
$string['createnew'] = 'Creați numai cursuri noi, omiteți cele existente';
$string['createorupdate'] = 'Creați cursuri noi sau actualizați cursurile existente';
$string['csvdelimiter'] = 'Separator CSV';
$string['csvdelimiter_help'] = 'Caracterul care separă seria de date din fiecare înregistrare.';
$string['csvfileerror'] = 'Este ceva în neregulă cu formatul fișierului CSV. Vă rugăm să verificați numărul de coloane și potrivirea coloanelor, dacă separatorul și codificarea fișierelor sunt corecte: {$a}';
$string['csvline'] = 'Linie';
$string['customfieldinvalid'] = 'Câmpul personalizat „{$a}” este gol sau conține date care nu sunt valide';
$string['defaultvalues'] = 'Valorile implicite ale cursului';
$string['defaultvaluescustomfieldcategory'] = 'Valori implicite pentru „{$a}”';
$string['downloadcontentnotallowed'] = 'Configurarea descărcării conținutului cursului nu este permisă';
$string['encoding'] = 'Encodare';
$string['encoding_help'] = 'Encodarea fișierului CSV.';
$string['errorcannotcreateorupdateenrolment'] = 'Nu se poate crea sau actualiza metoda de înscriere „{$a}”';
$string['errorcannotdeleteenrolment'] = 'Nu se poate șterge metoda de înscriere „{$a}”';
$string['errorcannotdisableenrolment'] = 'Nu se poate dezactiva metoda de înscriere „{$a}”';
$string['errorunsupportedmethod'] = 'Metoda de înscriere \'{$a}\' nu este acceptată în csv upload';
$string['errorwhiledeletingcourse'] = 'Eroare la ștergerea cursului';
$string['errorwhilerestoringcourse'] = 'Eroare la restaurarea cursului';
$string['generatedshortnamealreadyinuse'] = 'Numele scurte generate sunt deja utilizate';
$string['generatedshortnameinvalid'] = 'Numele scurte generate nu sunt valide';
$string['id'] = 'Identificator';
$string['idnumberalreadyinuse'] = 'Numărul de identificare este utilizat deja de un curs';
$string['importoptions'] = 'Opțiuni de import';
$string['invalidbackupfile'] = 'Fișier de rezervă nu este valid';
$string['invalidcourseformat'] = 'Format de curs nu este valid';
$string['invalidcsvfile'] = 'Fișier CSV de intrare nu este valid';
$string['invaliddownloadcontent'] = 'Descărcarea valorii conținutului cursului nu este validă';
$string['invalidencoding'] = 'Codificarea nu este validă';
$string['invalideupdatemode'] = 'Modul de actualizare selectat nu este validă';
$string['invalidfullnametoolong'] = 'Câmpul denumire curs este limitat la {$a} caractere';
$string['invalidmode'] = 'Modul selectat nu este valid';
$string['invalidroles'] = 'Nume de rol nu este valid: {$a}';
$string['invalidshortname'] = 'Numele prescurtat al cursului nu este valid';
$string['invalidshortnametoolong'] = 'Câmpul denumire scurtă de curs este limitat la {$a} caractere';
$string['invalidvisibilitymode'] = 'Modul vizibil nu este valid';
$string['missingmandatoryfields'] = 'Valoare lipsă pentru câmpurile obligatorii: {$a}';
$string['missingshortnamenotemplate'] = 'Lipsește numele scurt și șablonul nume scurt nu sunt setate';
$string['mode'] = 'Mod de încărcare';
$string['mode_help'] = 'Acest lucru vă permite să specificați dacă cursurile pot fi create și / sau actualizate.';
$string['nochanges'] = 'Nu sunt schimbări';
$string['pluginname'] = 'Încărcare curs';
$string['preview'] = 'Previzualizare';
$string['privacy:metadata'] = 'Pluginul de încărcare a cursului nu stochează date personale.';
$string['reset'] = 'Resetați cursul după încărcare';
$string['reset_help'] = 'Dacă se resetează cursul după crearea / actualizarea acestuia.';
$string['restoreafterimport'] = 'Restabiliți după import';
$string['result'] = 'Rezultat';
$string['rowpreviewnum'] = 'Previzualizați rândurile';
$string['rowpreviewnum_help'] = 'Numărul de rânduri din fișierul CSV care vor fi previzualizate în pagina următoare. Această opțiune este pentru a limita dimensiunea paginii următoare.';
$string['shortnametemplate'] = 'Șablon pentru a genera un nume scurt';
$string['shortnametemplate_help'] = 'Numele scurte ale cursului sunt afișate în navigare. Puteți utiliza sintaxa șablonului aici (%f = fullname, %i = idnumber) sau introduceți o valoare inițială care este incrementată.';
$string['templatefile'] = 'Restabiliți din acest fișier după încărcare';
$string['templatefile_help'] = 'Selectați un fișier de utilizat ca șablon pentru crearea tuturor cursurilor.';
$string['unknownimportmode'] = 'Mod de import necunoscut';
$string['updatemissing'] = 'Completați elementele lipsă din datele CSV și valorile implicite';
$string['updatemode'] = 'Mod actualizare';
$string['updatemode_help'] = 'Dacă permiteți actualizarea cursurilor, trebuie să spuneți instrumentului cu ce să actualizați cursurile.';
$string['updatemodedoessettonothing'] = 'Modul de actualizare nu permite actualizarea nimicului';
$string['updateonly'] = 'Actualizați doar cursurile existente';
$string['updatewithdataonly'] = 'Actualizați numai cu date CSV';
$string['updatewithdataordefaults'] = 'Actualizați cu date și valori implicite CSV';
$string['uploadcourse:use'] = 'Folosiți instrumentul de încărcare a cursului';
$string['uploadcourses'] = 'Încărcați cursuri';
$string['uploadcourses_help'] = 'Cursurile pot fi încărcate prin fișier text. Formatul fișierului ar trebui să fie după cum urmează:

* Fiecare linie a fișierului conține o înregistrare
* Fiecare înregistrare este o serie de date separate prin separatorul selectat
* Prima înregistrare conține o listă de nume de câmp care definesc formatul restului fișierului
* Numele de câmp obligatorii sunt numele prescurtat, numele complet și categoria';
$string['uploadcoursespreview'] = 'Încărcați previzualizarea cursurilor';
$string['uploadcoursesresult'] = 'Încărcați rezultatele cursurilor';
