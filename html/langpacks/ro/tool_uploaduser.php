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
 * Strings for component 'tool_uploaduser', language 'ro', version '4.4'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Permite ștergeri';
$string['allowrenames'] = 'Permite redenumiri';
$string['allowsuspends'] = 'Permiteți suspendarea și activarea conturilor';
$string['assignedsysrole'] = 'Rol de sistem atribuit {$a}';
$string['clidefault'] = 'Mod implicit:';
$string['clierrorargument'] = 'Valoare pentru argument - {$a->name} nu este validă. Valori permise: {$a->values}';
$string['clifile'] = 'Calea către fișierul CSV cu datele utilizatorului. Necesar.';
$string['clifilenotreadable'] = 'Fișierul {$a} nu există sau nu poate fi citit';
$string['clihelp'] = 'Imprimați acest ajutor.';
$string['climissingargument'] = 'Argument - este necesar {$a}';
$string['clititle'] = 'Instrumentul de încărcare a liniei de comandă.';
$string['clivalidationerror'] = 'Eroare de validare:';
$string['csvdelimiter'] = 'Separator CSV';
$string['defaultvalues'] = 'Valori implicite';
$string['deleteerrors'] = 'Șterge erori';
$string['duplicateemail'] = 'S-au găsit mai mulți utilizatori cu email-ul {$a}';
$string['encoding'] = 'Codare';
$string['errormnetadd'] = 'Nu se pot adăuga utilizatori la distanță';
$string['errorprefix'] = 'Eroare:';
$string['errors'] = 'Erori';
$string['examplecsv'] = 'Exemplu de fișier text';
$string['examplecsv_help'] = 'Pentru a utiliza exemplul de fișier text, descărcați-l, apoi deschideți-l cu un editor de text sau foaie de calcul. Lăsați prima linie neschimbată, apoi editați următoarele linii (înregistrări) și adăugați datele dvs. de utilizator, adăugând mai multe linii după cum este necesar. Salvați fișierul ca CSV, apoi încărcați-l.

Exemplul de fișier text poate fi folosit și pentru testare, deoarece puteți previzualiza datele utilizatorului și puteți alege să anulați acțiunea înainte de crearea conturilor de utilizator.';
$string['infoprefix'] = 'Informații:';
$string['invalidtheme'] = 'Tema „{$a}” nu este instalată și va fi ignorată.';
$string['invalidupdatetype'] = 'Această opțiune nu poate fi selectată cu tipul de încărcare ales.';
$string['invaliduserdata'] = 'Date nevalide detectate pentru utilizatorul {$a} și au fost curățate automat.';
$string['invaliduserdatavalues'] = 'Date incorecte ({$a->values}) găsite pentru utilizatorul {$a->username}. Aceste date au fost corectate sau au fost șterse.';
$string['linex'] = 'Linia {$a}';
$string['matchemail'] = 'Adresa de email corespunde';
$string['nochanges'] = 'Nicio schimbare';
$string['notheme'] = 'Nu este definită nicio temă pentru acest utilizator.';
$string['pluginname'] = 'Încărcare de utilizator';
$string['privacy:metadata'] = 'Pluginul de încărcare a utilizatorului nu stochează date personale.';
$string['renameerrors'] = 'Redenumire erori';
$string['requiredtemplate'] = 'Necesar. Aici puteți utiliza sintaxa șablonului (%l = lastname, %f = firstname, %u = username). Consultați ajutorul pentru detalii și exemple.';
$string['rowpreviewnum'] = 'Afişează rânduri';
$string['unassignedsysrole'] = 'Rolul de sistem neatribuit {$a}';
$string['uploadpicture_baduserfield'] = 'Atributul utilizator specificat nu este corect. Vă rugăm specificaţi din nou un atribut.';
$string['uploadpicture_cannotmovezip'] = 'Fişierul arhivă nu poate fi transferat în directorul temporar.';
$string['uploadpicture_cannotprocessdir'] = 'Nu se pot procesa fişierele aflate în interiorul unei arhive.';
$string['uploadpicture_cannotsave'] = 'Imaginea utilizatorului {$a} nu a putut fi salvată. Verificaţi fişierul original care conţinea imaginea.';
$string['uploadpicture_cannotunzip'] = 'Arhiva cu imagini nu a putut fi deschisă.';
$string['uploadpicture_invalidfilename'] = 'Numele fişierului imagine {$a} conţine caractere incorecte, nu va fi utilizat.';
$string['uploadpicture_overwrite'] = 'Suprascrie imagini utilizator existente?';
$string['uploadpicture_userfield'] = 'Atribut utilizator ce va fi folosit la atribuirea imaginilor:';
$string['uploadpicture_usernotfound'] = 'Nu există un utilizator cu o valoare \'{$a->userfield}\' a \'{$a->uservalue}\'. Se omite.';
$string['uploadpicture_userskipped'] = 'Imaginea pentru utilizatorul {$a} nu a fost actualizată (imagine existentă)';
$string['uploadpicture_userupdated'] = 'Imagine actualizată pentru utilizatorul {$a}.';
$string['uploadpictures'] = 'Încarcă avatare utilizator';
$string['uploadpictures_help'] = 'Imaginile utilizatorilor pot fi încărcate și ca fișiere împachetate (zip). Fișierele de imagine ar trebui numite utilizator-atribut.extensie, de ex. utilizator1234.jpg pentru un utilizator cu numele utilizator1234.';
$string['uploaduser:uploaduserpictures'] = 'Încarcă imagini de utilizator';
$string['uploadusers'] = 'Încarcă utilizatori';
$string['uploadusers_help'] = 'Utilizatorii pot fi încărcați (și opțional înscriși la cursuri) prin fișier text. Formatul fișierului ar trebui să fie astfel:

* Fiecare linie a fișierului conține o înregistrare
* Fiecare înregistrare este o serie de date delimitate prin separatorul selectat
* Prima înregistrare conține o listă de nume de câmp care definesc formatul restului fișierului
* Numele de câmp obligatorii sunt numele de utilizator, parola, prenumele, prenumele, adresa de e-mail';
$string['uploadusers_link'] = 'admin/tool/uploaduser/index';
$string['uploaduserspreview'] = 'Încarcă previzualizare utilizatori';
$string['uploadusersresult'] = 'Încarcă rezultate utilizatori';
$string['useraccountupdated'] = 'Cont utilizator actualizat';
$string['useraccountuptodate'] = 'Utilizator actualizat';
$string['userdeleted'] = 'Cont utilizator șters';
$string['userrenamed'] = 'Utilizator redenumit';
$string['userscreated'] = 'Conturi utilizator create';
$string['usersdeleted'] = 'Conturi utilizator șterse';
$string['usersrenamed'] = 'Conturi utilizatori redenumite';
$string['usersskipped'] = 'Conturi utilizator omise';
$string['usersupdated'] = 'Conturi utilizator actualizate';
$string['usersweakpassword'] = 'Utilizatori cu parole slabe';
$string['userthemesnotallowed'] = 'Temele de utilizator nu sunt activate, astfel încât toate cele incluse în fișierul de încărcare a utilizatorilor vor fi ignorate.';
$string['uubulk'] = 'Selectați pentru acțiunile în bloc cu utilizatorul';
$string['uubulkall'] = 'Toţi utilizatorii';
$string['uubulknew'] = 'Utilizatori noi';
$string['uubulkupdated'] = 'Utilizatori actualizaţi';
$string['uucsvline'] = 'Linie CSV';
$string['uulegacy1role'] = '(Student iniţial) typeN=1';
$string['uulegacy2role'] = '(Profesor iniţial) typeN=2';
$string['uulegacy3role'] = '(Profesor inţial fără drepturi de editare) typeN=3';
$string['uunoemailduplicates'] = 'Previne duplicarea adreselor de email';
$string['uuoptype'] = 'Tip încărcare';
$string['uuoptype_addinc'] = 'Adaugă pe toţi, ataşează contor la numele de utilizator în caz că este nevoie';
$string['uuoptype_addnew'] = 'Adaugă numai utilizatori noi, ignoră utilizatorii existenţi';
$string['uuoptype_addupdate'] = 'Adaugă utilizator nou şi actualizează înregistrări utilizatorii existenţi';
$string['uuoptype_update'] = 'Actualizează doar utilizatori existenţi';
$string['uupasswordcron'] = 'Generat în cron';
$string['uupasswordnew'] = 'Noua parolă utilizator';
$string['uupasswordold'] = 'Parolă utilizator curentă';
$string['uustandardusernames'] = 'Standardizați numele de utilizator';
$string['uuupdateall'] = 'Suprascrie cu fişier şi parametri impliciţi';
$string['uuupdatefromfile'] = 'Anulează cu fişier';
$string['uuupdatemissing'] = 'Completează valorile lipsă cu valori din fişier şi parametri impliciţi';
$string['uuupdatetype'] = 'Detalii despre utilizator existente';
$string['uuusernametemplate'] = 'Șablon de nume de utilizator';
$string['warningprefix'] = 'Avertizare:';
