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
 * Strings for component 'tool_analytics', language 'ro', version '4.1'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'Acuratețe';
$string['actionexecutedgroupedusefulness'] = 'Acțiuni grupate';
$string['actions'] = 'Acțiuni';
$string['actionsexecutedbyusers'] = 'Acțiuni executate de utilizatori';
$string['actionsexecutedbyusersfor'] = 'Acțiuni executate de utilizatori pentru modelul „{$a}”';
$string['allpredictions'] = 'Toate predicțiile';
$string['alltimesplittingmethods'] = 'Toate intervalele de analiză';
$string['analysingsitedata'] = 'Se analizează site-ul';
$string['analysis'] = 'Analiză';
$string['analyticmodels'] = 'Modele analitice';
$string['bettercli'] = 'Evaluarea modelelor și generarea de predicții pot implica prelucrări grele. Este recomandat să executați aceste acțiuni din linia de comandă.';
$string['cantguessenddate'] = 'Nu pot estima data de încheiere';
$string['cantguessstartdate'] = 'Nu pot estima data de începere';
$string['classdoesnotexist'] = 'Clasa {$a} nu există';
$string['clearmodelpredictions'] = 'Sigur doriți să ștergeți toate predicțiile „{$a}”?';
$string['clearpredictions'] = 'Șterge previziuni';
$string['clienablemodel'] = 'Puteți activa modelul selectând un interval de analiză după ID-ul acestuia. Rețineți că îl puteți activa și ulterior folosind interfața web („none” pentru a ieși).';
$string['clievaluationandpredictions'] = 'Un proces (CLI) planificat iterează prin modele activate și face predicții. Evaluarea modelelor prin interfața web este dezactivată. Puteți permite ca aceste procese să fie executate manual prin interfața web dezactivând setarea  <a href="{$a}"> „Numai CLI” </a> pentru modele analitice.';
$string['clievaluationandpredictionsnoadmin'] = 'O sarcină planificată iterează prin modele activate și primește predicții. Evaluarea modelelor prin interfața web este dezactivată. Poate fi activat de un administrator de site.';
$string['component'] = 'Componentă';
$string['componentcore'] = 'Nucleu';
$string['componentselect'] = 'Selectați toate modelele furnizate de componenta „{$a}”';
$string['componentselectnone'] = 'Deselectează tot';
$string['contexts'] = 'Contexte';
$string['contexts_help'] = 'Modelul va fi limitat la acest set de contexte. Nu se vor aplica restricții de context dacă nu sunt selectate contexte.';
$string['createmodel'] = 'Creați model';
$string['currenttimesplitting'] = 'Intervalul de analiză curentă';
$string['delete'] = 'Șterge';
$string['deletemodelconfirmation'] = 'Sigur doriți să ștergeți „{$a}”? Aceste modificări nu pot fi anulate.';
$string['disabled'] = 'Dezactivat';
$string['editmodel'] = 'Editați modelul „{$a}”';
$string['edittrainedwarning'] = 'Acest model a fost deja instruit. Rețineți că modificarea indicatorilor sau a intervalului de analiză va șterge predicțiile sale anterioare și va începe să genereze noi predicții.';
$string['enabled'] = 'Activat';
$string['errorcantenablenotimesplitting'] = 'Trebuie să selectați un interval de analiză înainte de a activa modelul';
$string['errornoenabledandtrainedmodels'] = 'Nu există modele activate și instruite pentru a prezice.';
$string['errornoenabledmodels'] = 'Nu există modele activate pentru antrenament.';
$string['errornoexport'] = 'Doar modelele instruite pot fi exportate';
$string['errornostaticevaluated'] = 'Modelele bazate pe ipoteze nu pot fi evaluate. Ele sunt întotdeauna 100% corecte în funcție de modul în care au fost definite.';
$string['errornostaticlog'] = 'Modelele bazate pe ipoteze nu pot fi evaluate deoarece nu există un jurnal de performanță.';
$string['erroronlycli'] = 'Executarea este permisă numai prin linia de comandă';
$string['errortrainingdataexport'] = 'Datele de instruire model nu au putut fi exportate';
$string['evaluate'] = 'Evaluează';
$string['evaluatemodel'] = 'Evaluează modelul';
$string['evaluationinbatches'] = 'Conținutul site-ului este calculat și stocat în loturi. Procesul de evaluare poate fi oprit în orice moment. Data viitoare când va fi rulată, va continua din momentul în care a fost oprită.';
$string['evaluationmode'] = 'Mod de evaluare';
$string['evaluationmode_help'] = 'Există două moduri de evaluare:

* Model instruit - datele site-ului sunt utilizate ca date de testare pentru a evalua acuratețea modelului instruit.
* Configurare - Datele site-ului sunt împărțite în date de instruire și testare, atât pentru a antrena, cât și pentru a testa acuratețea configurației modelului.

Modelul instruit este disponibil numai dacă un model instruit a fost importat pe site și nu a fost încă re-instruit folosind datele site-ului.';
$string['evaluationmodecolconfiguration'] = 'Configurare';
$string['evaluationmodecoltrainedmodel'] = 'Model antrenat';
$string['evaluationmodeconfiguration'] = 'Evaluează configurația modelului';
$string['evaluationmodeinfo'] = 'Acest model a fost importat pe site. Puteți evalua fie performanța modelului, fie puteți evalua performanța configurației modelului folosind datele site-ului.';
$string['evaluationmodetrainedmodel'] = 'Evaluează modelul instruit';
$string['executescheduledanalysis'] = 'Executați analize programate';
$string['export'] = 'Export';
$string['exportincludeweights'] = 'Includeți greutățile modelului antrenat';
$string['exportmodel'] = 'Exportă configurația';
$string['exporttrainingdata'] = 'Exportă date de instruire';
$string['extrainfo'] = 'Informații';
$string['generalerror'] = 'Eroare de evaluare. Cod de stare {$a}';
$string['goodmodel'] = 'Acesta este un model bun pentru a utiliza pentru a obține predicții. Activați-l pentru a începe să obțineți predicții.';
$string['ignoreversionmismatches'] = 'Ignoră nepotrivirile de versiune';
$string['ignoreversionmismatchescheckbox'] = 'Ignoră diferențele dintre această versiune a site-ului și versiunea originală a site-ului.';
$string['importedsuccessfully'] = 'Modelul a fost importat cu succes.';
$string['importmodel'] = 'Model de import';
$string['indicators'] = 'Indicatori';
$string['indicators_help'] = 'Indicatorii sunt ceea ce credeți că va duce la o predicție exactă a țintei.';
$string['indicators_link'] = 'Indicators';
$string['indicatorsnum'] = 'Număr de indicatori: {$a}';
$string['info'] = 'Informații';
$string['insights'] = 'Perspective';
$string['insightsreport'] = 'Raport Perspective';
$string['invalidanalysables'] = 'Elemente de site nevalide';
$string['invalidanalysablesinfo'] = 'Această pagină listează elemente analizabile care nu pot fi utilizate de acest model de predicție. Elementele enumerate nu pot fi utilizate nici pentru a antrena modelul de predicție, nici modelul de predicție nu poate obține predicții pentru acestea.';
$string['invalidanalysablestable'] = 'Tabel de elemente analizate site nevalid';
$string['invalidcurrenttimesplitting'] = 'Intervalul de analiză curent nu este valid pentru ținta acestui model. Vă rugăm să selectați un alt interval.';
$string['invalidindicatorsremoved'] = 'A fost adăugat un nou model. Indicatorii care nu funcționează cu ținta selectată au fost eliminați automat.';
$string['invalidprediction'] = 'Nu se pot obține predicții';
$string['invalidtimesplitting'] = 'Intervalul de analiză selectat nu este valid pentru ținta selectată.';
$string['invalidtimesplittinginmodels'] = 'Intervalul de analiză utilizat de unele dintre modele este nevalid. Vă rugăm să selectați un interval diferit pentru următoarele modele: {$a}';
$string['invalidtraining'] = 'Nu se poate antrena modelul';
$string['loginfo'] = 'Înregistrați informații suplimentare';
$string['missingmoodleversion'] = 'Fișierul importat nu definește un număr de versiune';
$string['modelid'] = 'Identificator model';
$string['modelinvalidanalysables'] = 'Elemente analizate nevalide pentru modelul „{$a}”';
$string['modelname'] = 'Denumirea modelului';
$string['modelresults'] = '{$a} rezultate';
$string['modeltimesplitting'] = 'Interval de analiză';
$string['newmodel'] = 'Model nou';
$string['nextpage'] = 'Pagina următoare';
$string['noactionsfound'] = 'Utilizatorii nu au executat nicio acțiune asupra statisticilor generate.';
$string['nodatatoevaluate'] = 'Nu există date care să evalueze modelul';
$string['nodatatopredict'] = 'Nu există elemente noi pentru a obține predicții.';
$string['nodatatotrain'] = 'Nu există date noi care să poată fi utilizate pentru instruire.';
$string['noinvalidanalysables'] = 'Acest site nu conține niciun element analizabil nevalid.';
$string['notdefined'] = 'Nu este definit încă';
$string['pluginname'] = 'Modele analitice';
$string['predictionprocessfinished'] = 'Procesul de predicție s-a încheiat';
$string['predictionresults'] = 'Rezultate de predicție';
$string['predictmodels'] = 'Modele de predicție';
$string['predictorresultsin'] = 'Predictor a înregistrat informații în directorul {$a}';
$string['previouspage'] = 'Pagina precedentă';
$string['privacy:metadata'] = 'Pluginul pentru modele analitice nu stochează date personale.';
$string['restoredefault'] = 'Restabiliți modelele implicite';
$string['restoredefaultempty'] = 'Vă rugăm să selectați modelele care vor fi restaurate.';
$string['restoredefaultinfo'] = 'Aceste modele implicite lipsesc sau s-au schimbat de la instalare. Puteți restaura modelele implicite selectate.';
$string['restoredefaultnone'] = 'Au fost create toate modelele implicite furnizate de pluginurile de bază și instalate. Nu s-au găsit modele noi; nu este nimic de restaurat.';
$string['restoredefaultsome'] = 'S-au recreat cu succes {$a->count} noi modele.';
$string['restoredefaultsubmit'] = 'Restaurare selectată';
$string['sameenddate'] = 'Data de încheiere actuală este bună';
$string['samestartdate'] = 'Data de începere actuală este bună';
$string['scheduledanalysisresults'] = 'Rezultate folosind intervalul de analiză {$a->name}';
$string['scheduledanalysisresultscli'] = 'Rezultate folosind intervalul de analiză {$a->name} (id: {$a->id})';
$string['selecttimesplittingforevaluation'] = 'Selectați intervalul de analiză pe care doriți să îl utilizați pentru a evalua configurația modelului.';
$string['target'] = 'Target';
$string['target_help'] = 'Ținta este ceea ce va prezice modelul.';
$string['target_link'] = 'Targets';
$string['timesplittingnotdefined'] = 'Nu este definit niciun interval de analiză.';
$string['timesplittingnotdefined_help'] = 'Trebuie să selectați un interval de analiză înainte de a activa modelul.';
$string['trainandpredictmodel'] = 'Model de instruire și calculul predicțiilor';
$string['trainingprocessfinished'] = 'Procesul de instruire s-a încheiat';
$string['trainingresults'] = 'Rezultatele antrenamentului';
$string['trainmodels'] = 'Antrenare Modele analitice';
$string['versionnotsame'] = 'Fișierul importat provenea dintr-o altă versiune ({$a->importedversion}) decât cea curentă ({$a->version})';
$string['viewlog'] = 'Jurnal de evaluare';
$string['weeksenddateautomaticallyset'] = 'Data de încheiere este setată automat pe baza datei de începere și a numărului de secțiuni';
$string['weeksenddatedefault'] = 'Data de încheiere calculată automat de la data de începere a cursului.';
