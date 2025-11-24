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
 * Strings for component 'cohort', language 'ro', version '4.5'.
 *
 * @package     cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Adaugă o nouă cohortă';
$string['allcohorts'] = 'Toate cohortele';
$string['anycohort'] = 'Orice';
$string['assign'] = 'Asignează';
$string['assigncohorts'] = 'Asignează membrii cohortei';
$string['assignto'] = 'Membrii cohortei \'{$a}\'';
$string['backtocohorts'] = 'Înapoi la cohorte';
$string['bulkadd'] = 'Adaugă la cohortă';
$string['bulknocohort'] = 'Nu s-au găsit cohorte disponibile';
$string['categorynotfound'] = 'Categoria <b>{$a}</ b> nu a fost găsită sau nu aveți permisiunea de a crea un grup acolo. Contextul implicit va fi folosit.';
$string['cohort'] = 'Cohortă';
$string['cohortmember'] = 'Membru cohortă';
$string['cohorts'] = 'Cohorte';
$string['cohortsin'] = '{$a}: cohorte disponibile';
$string['component'] = 'Sursă';
$string['contextcohortnotallowed'] = 'Cohorta <b>{$a}</b> nu este permisă în acest context.';
$string['contextnotfound'] = 'Contextul <b>{$a}</b> nu a fost găsit sau nu aveți permisiunea de a crea un grup acolo. Contextul implicit va fi folosit.';
$string['csvcontainserrors'] = 'Au fost găsite erori în datele CSV. Vezi detalii mai jos.';
$string['csvcontainswarnings'] = 'Au fost găsite avertismente în datele CSV. Vezi detalii mai jos.';
$string['csvextracolumns'] = 'Coloana (coloanele) <b>{$a}</b> va (vor) fi ignorate.';
$string['currentusers'] = 'Utilizatori curenţi';
$string['currentusersmatching'] = 'Utilizatori curenţi conform';
$string['defaultcontext'] = 'Context implicit';
$string['delcohort'] = 'Şterge cohortă';
$string['delcohortsconfirm'] = 'Prin această acțiune se vor șterge cohortele și datele asociate.';
$string['delcohortssuccess'] = 'Cohortele selectate au fost șterse';
$string['delconfirm'] = 'Prin această acțiune se va șterge cohorta {$a}\' și toate datele asociate acesteia.';
$string['delsuccess'] = 'Cohortă ștearsă';
$string['description'] = 'Descriere';
$string['displayedrows'] = '{$a->displayed} rânduri afișate din {$a->total}.';
$string['duplicateidnumber'] = 'Există deja o cohortă cu acest identificator';
$string['editcohort'] = 'Editează cohortă';
$string['editcohortidnumber'] = 'Editați ID cohortă';
$string['editcohortname'] = 'Editați numele cohortei';
$string['eventcohortcreated'] = 'Cohortă creată';
$string['eventcohortdeleted'] = 'Cohortă ștearsă';
$string['eventcohortmemberadded'] = 'Utilizator adăugat la cohortă';
$string['eventcohortmemberremoved'] = 'Utilizator șters din cohortă';
$string['eventcohortupdated'] = 'Cohortă actualizată';
$string['external'] = 'Cohortă externă';
$string['idnumber'] = 'Identificator cohortă';
$string['invalidtheme'] = 'Tema cohortă nu există';
$string['memberofcohort'] = 'Membru al cohortei';
$string['memberscount'] = 'Mărime cohortă';
$string['name'] = 'Nume';
$string['namecolumnmissing'] = 'Este ceva în neregulă cu formatul de fișier CSV. Vă rugăm să verificați că acesta include numele corecte ale coloanelor. Pentru a adăuga utilizatori într-o cohortă, mergeți la "Încărcați utilizatori" în Administrarea site-ului.';
$string['namefieldempty'] = 'Numele câmpului nu poate fi necompletat';
$string['newidnumberfor'] = 'Nou identificator al cohortei {$a}';
$string['newnamefor'] = 'Numele nou al cohortei {$a}';
$string['nocomponent'] = 'Creată manual';
$string['potusers'] = 'Utilizatori potenţiali';
$string['potusersmatching'] = 'Utilizatori potenţial conformi';
$string['preview'] = 'Previzualizare';
$string['privacy:metadata:cohort_members'] = 'Informații despre cohorta utilizatorului.';
$string['privacy:metadata:cohort_members:cohortid'] = 'Identificatorul cohortei';
$string['privacy:metadata:cohort_members:timeadded'] = 'Când a fost adăgat utilizatorul la cohortă.';
$string['privacy:metadata:cohort_members:userid'] = 'Identificatorul utilizatorului care este asociat cohortei';
$string['removeuserwarning'] = 'Eliminarea utilizatorilor dintr-o cohortă poate duce la anularea înscrierii utilizatorilor la cursuri, ceea ce implică ștergerea setărilor utilizatorului, notele, apartenența la un grup și alte informații ale utilizatorului de la cursurile respective.';
$string['search'] = 'Căutare';
$string['searchcohort'] = 'Căutare cohortă';
$string['selectcohort'] = 'Selectare cohortă';
$string['selectfromcohort'] = 'Selectează membri din cohortă';
$string['systemcohorts'] = 'Cohorte de sistem';
$string['unknowncohort'] = 'Cohortă necunoscută ({$a})!';
$string['uploadcohorts'] = 'Uploadează cohorte';
$string['uploadcohorts_help'] = 'Cohortele pot fi încărcate prin fișier text. Formatul fișierului ar trebui să fie după cum urmează:

* Fiecare linie a fișierului conține o înregistrare
* Fiecare înregistrare este o serie de date separate de separatorul selectat
* Prima înregistrare conține o listă de nume de câmpuri care definesc formatul restului fișierului
* Numele câmpului obligatoriu este numele
* Numele de câmpuri opționale sunt IDnumber, description, descriptionformat, visible, context, category, category_id, category_idnumber, category_path';
$string['uploadedcohorts'] = 'Cohorte încărcate {$a}';
$string['useradded'] = 'Utilizator adăugat la cohortă "{$a}"';
$string['visible'] = 'Vizibil';
$string['visible_help'] = 'Orice grup poate fi vizualizat de către utilizatorii care au capabilitatea \'moodle/cohort:view\' în contextul cohortei <br/>
Cohortele vizibile pot fi vizualizate de către utilizatori și în cursurile de bază.';
