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
 * Strings for component 'tool_task', language 'lt', version '4.5'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'Ad hoc';
$string['adhocempty'] = 'Ad hoc užduočių eilė tuščia';
$string['adhocqueueold'] = 'Seniausia neapdorota užduotis yra {$a->age}, kuri yra daugiau nei {$a->max}';
$string['adhocqueuesize'] = 'Ad hoc užduočių eilėje yra {$a} užduotis';
$string['adhoctaskid'] = 'Ad hoc užduoties ID: {$a}';
$string['adhoctaskrun'] = 'Ad hoc užduoties vykdymas pradėtas';
$string['adhoctasks'] = 'Ad hoc užduotys';
$string['adhoctasksfailed'] = 'Ad hoc užduotys nepavyko';
$string['adhoctasksfuture'] = 'Būsimos ad hoc užduotys';
$string['adhoctasksrunning'] = 'Vykdomos ad hoc užduotys';
$string['asap'] = '<abbr title="Kaip galima greičiau">ASAP</abbr>';
$string['backtoadhoctasks'] = 'Grįžti prie ad hoc užduočių';
$string['backtoscheduledtasks'] = 'Grįžti į suplanuotas užduotis';
$string['blocking'] = 'Blokavimas';
$string['cannotfindthepathtothecli'] = 'Nepavyko rasti kelio į PHP CLI vykdomąjį failą, todėl užduoties vykdymas buvo nutrauktas. Svetainės administravimas / serveris / sistemos keliai nustatykite parametrą „Kelias į PHP CLI“.';
$string['checkadhocqueue'] = 'Ad hoc užduočių eilė';
$string['checkcronrunning'] = '„Cron“ veikla';
$string['checklongrunningtaskcount'] = 'Ilgai vykdomos užduotys: {$a}';
$string['checklongrunningtasks'] = 'Ilgai vykdomos užduotys';
$string['checkmaxfaildelay'] = 'Maksimalus užduočių nesėkmės delsimas';
$string['classname'] = 'Klasės pavadinimas';
$string['clearfaildelay_confirm'] = 'Ar tikrai norite išvalyti užduoties „{$a}“ nesėkmės delsą? Išvalius delsą, užduotis bus vykdoma pagal įprastą tvarkaraštį.';
$string['component'] = 'Komponentas';
$string['corecomponent'] = 'Branduolys';
$string['crondisabled'] = '„Cron“ išjungtas. Naujos užduotys nebus pradėtos. Sistema neveiks tinkamai, kol jis vėl nebus įjungtas.';
$string['cronok'] = '„Cron“ veikia dažnai';
$string['default'] = 'Numatytasis';
$string['defaultx'] = 'Numatytasis: {$a}';
$string['disabled'] = 'Išjungtas';
$string['disabled_help'] = 'Išjungtos suplanuotos užduotys nevykdomos iš „cron“, tačiau jas vis tiek galima vykdyti rankiniu būdu naudojant CLI įrankį.';
$string['edittaskschedule'] = 'Redaguoti užduočių tvarkaraštį: {$a}';
$string['enablerunnow'] = 'Suplanuotoms užduotims leisti „Vykdyti dabar“.';
$string['enablerunnow_desc'] = 'Leidžia administratoriams iš karto vykdyti vieną suplanuotą užduotį, o ne laukti, kol ji bus vykdoma kaip numatyta. Šiai funkcijai reikia, kad sistemos keliuose būtų nustatytas „Path to PHP CLI“ (pathtophp). Užduotis vykdoma žiniatinklio serveryje, todėl galbūt norėsite išjungti šią funkciją, kad išvengtumėte galimų našumo problemų.';
$string['faildelay'] = 'Nesėkmės delsa';
$string['failed'] = 'Nepavyko';
$string['fromcomponent'] = 'Iš komponento: {$a}';
$string['hostname'] = 'Prieglobos pavadinimas';
$string['lastcronstart'] = 'Laikas nuo paskutinio „cron“ paleidimo: {$a}';
$string['lastruntime'] = 'Paskutinis vykdymas';
$string['lastupdated'] = 'Paskutinį kartą atnaujinta {$a}.';
$string['nextruntime'] = 'Sekantis vykdymas';
$string['noclassname'] = 'Klasės pavadinimas nenurodytas';
$string['notasks'] = 'Nėra užduočių, kurias reikia vykdyti';
$string['payload'] = 'Naudinga apkrova';
$string['pid'] = 'PID';
$string['plugindisabled'] = 'Papildinys išjungtas';
$string['pluginname'] = 'Suplanuotos užduoties konfigūracija';
$string['privacy:metadata'] = 'Planuojamų užduočių konfigūracijos papildinys nesaugo jokių asmeninių duomenų.';
$string['resettasktodefaults'] = 'Iš naujo nustatyti užduočių tvarkaraštį į numatytuosius nustatymus';
$string['resettasktodefaults_help'] = 'Taip bus atmesti visi vietiniai pakeitimai, o šios užduoties tvarkaraštis bus grąžintas į pradinius nustatymus.';
$string['run_adhoctasks'] = 'Vykdyti ad hoc užduotis';
$string['runadhoc'] = 'Dabar vykdyti ad hoc užduotis?';
$string['runadhoc_confirm'] = 'Užduotys bus vykdomos žiniatinklio serveryje ir gali užtrukti šiek tiek laiko.';
$string['runadhoctask'] = 'Vykdyti \'{$a->task}\' užduoties ID {$a->taskid}';
$string['runadhoctasks'] = 'Vykdyti visas „{$a}“ užduotis';
$string['runadhoctasksfailed'] = 'Vykdyti nepavykusias „{$a}“ užduotis';
$string['runagain'] = 'Vykdyti vėl';
$string['runclassname'] = 'Vykdyti visus';
$string['runclassnamefailedonly'] = '„Paleisti viską“ nepavyko';
$string['runningalltasks'] = 'Visų užduočių vykdymas';
$string['runningfailedtasks'] = 'Nepavykusių užduočių vykdymas';
$string['runningtasks'] = 'Užduotys vykdomos dabar';
$string['runnow'] = 'Vykdyti dabar';
$string['runnow_confirm'] = 'Ar tikrai norite dabar vykdyti šią užduotį „{$a}“? Užduotis bus vykdoma interneto serveryje ir gali užtrukti šiek tiek laiko.';
$string['runpattern'] = 'Vykdymo modelis';
$string['scheduled'] = 'Suplanuota';
$string['scheduledtaskchangesdisabled'] = 'Moodle konfigūracijoje buvo užkirstas kelias suplanuotų užduočių sąrašo pakeitimams';
$string['scheduledtasks'] = 'Suplanuotos užduotys';
$string['showall'] = 'Rodyti viską';
$string['showfailedonly'] = 'Nepavyko tik rodyti';
$string['showsummary'] = 'Rodyti ad hoc užduočių santrauką';
$string['slowtask'] = 'Užduotis buvo vykdoma ilgiau nei {$a}';
$string['started'] = 'Pradėta';
$string['taskage'] = 'Vykdymo laikas';
$string['taskdetails'] = 'Užduotys, vykdomos ilgiau nei {$a->time} (maks. {$a->maxtime}): {$a->count}';
$string['taskdisabled'] = 'Užduotis išjungta';
$string['taskfailures'] = '{$a} užduotis (-ys) nepavyko';
$string['taskid'] = 'Užduoties ID';
$string['tasklogs'] = 'Užduočių žurnalai';
$string['tasknofailures'] = 'Nėra užduočių, kurios nepavyko';
$string['taskrunningtime'] = '{$a} užduotis buvo vykdoma';
$string['taskscheduleday'] = 'Diena';
$string['taskscheduleday_help'] = 'Mėnesio dienos laukas užduočių tvarkaraščiui. Lauke naudojamas tas pats formatas kaip „unix cron“. Kai kurie pavyzdžiai:

* <strong>*</strong> Kiekvieną dieną
* <strong>*/2</strong> Kas 2 dieną
* <strong>1</strong> Kiekvieno mėnesio pirmoji
* <strong>1, 15</strong> Kiekvieno mėnesio pirmą ir penkioliktą dieną';
$string['taskscheduledayofweek'] = 'Savaitės diena';
$string['taskscheduledayofweek_help'] = 'Užduočių tvarkaraščio savaitės dienos laukas. Lauke naudojamas tas pats formatas kaip „unix cron“. Kai kurie pavyzdžiai:

* <strong>*</strong> Kiekvieną dieną
* <strong>0</strong> Kiekvieną sekmadienį
* <strong>6</strong> Kiekvieną šeštadienį
* <strong>1,5</strong> Kiekvieną pirmadienį ir penktadienį';
$string['taskschedulehour'] = 'Valanda';
$string['taskschedulehour_help'] = 'Valandų laukas užduočių tvarkaraščiui. Lauke naudojamas tas pats formatas kaip „unix cron“. Kai kurie pavyzdžiai:

* <strong>*</strong> Kas valandą
* <strong>*/2</strong> Kas 2 valandas
* <strong>2–10</strong> Kas valandą nuo 2 iki 10 val. (imtinai)
* <strong>2,6,9</strong> 2 val., 6 val. ir 9 val.';
$string['taskscheduleminute'] = 'Minutė';
$string['taskscheduleminute_help'] = 'Minutės laukas užduočių tvarkaraščiui. Lauke naudojamas tas pats formatas kaip „unix cron“. Kai kurie pavyzdžiai:

* <strong>*</strong> Kas minutę
* <strong>*/5</strong> Kas 5 minutes
* <strong>2–10</strong> Kas minutę nuo 2 iki 10 po valandos (imtinai)
* <strong>2,6,9</strong> 2, 6 ir 9 minutės po valandos';
$string['taskschedulemonth'] = 'Mėnuo';
$string['taskschedulemonth_help'] = 'Mėnesio laukas užduočių tvarkaraščiui. Lauke naudojamas tas pats formatas kaip „unix cron“. Kai kurie pavyzdžiai:

* <strong>**</strong> Kiekvieną mėnesį
* <strong>*/2</strong> Kas antrą mėnesį
* <strong>1</strong> Kiekvieną sausį
* <strong>1,5</strong> Kiekvieną sausį ir gegužę';
$string['viewlogs'] = 'Peržiūrėti {$a} žurnalus';
