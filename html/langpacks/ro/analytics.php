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
 * Strings for component 'analytics', language 'ro', version '4.1'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Analysable {$a->analysableid} neutilizat: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Analizabil {$a->analysableid} nu este valid pentru acest obiectiv: {$a->result}';
$string['analysisinprogress'] = 'Încă analizat de o execuție anterioară';
$string['analytics'] = 'Modele analitice';
$string['analyticsdisabled'] = 'Modelele analitice sunt dezactivate. Puteți să le activați în "Administrare site > Funcţionalităţi avansate".';
$string['analyticslogstore'] = 'Magazin de jurnale folosit pentru modelele analitice';
$string['analyticslogstore_help'] = 'Magazinul de jurnale care va fi utilizat de API-ul modelelor analitice pentru a citi activitatea utilizatorilor.';
$string['analyticssettings'] = 'Setări Modele analitice';
$string['analyticssiteinfo'] = 'Informații despre site';
$string['calclifetime'] = 'Păstrați calculele modelelor analitice pentru';
$string['configlcalclifetime'] = 'Aceasta specifică durata de timp în care doriți să păstrați datele de calcul - aceasta nu va șterge predicțiile, ci șterge datele utilizate pentru a genera predicțiile. Folosirea opțiunii implicite aici este cea mai bună, deoarece vă menține utilizarea discului sub control, totuși, dacă utilizați tabele de calcul în alte scopuri, vă recomandăm să măriți această valoare.';
$string['defaultpredictionsprocessor'] = 'Procesor de predicții implicit';
$string['defaultpredictoroption'] = 'Procesor implicit  ({$a})';
$string['defaulttimesplittingmethods'] = 'Intervalele de analiză implicite pentru evaluarea modelului';
$string['defaulttimesplittingmethods_help'] = 'Intervalul de analiză definește momentul în care sistemul va calcula predicțiile și porțiunea din jurnalele de activitate care vor fi luate în considerare pentru aceste predicții. Procesul de evaluare a modelului va itera prin aceste intervale de analiză, cu excepția cazului în care este specificat un interval de analiză specific.';
$string['disabledmodel'] = 'Model dezactivat';
$string['erroralreadypredict'] = 'Fișierul {$a} a fost deja utilizat pentru a genera predicții';
$string['errorcannotreaddataset'] = 'Fișierul dataset {$a} nu poate fi citit';
$string['errorcannotusetimesplitting'] = 'Intervalul de analiză furnizat nu poate fi utilizat pe acest model.';
$string['errorcannotwritedataset'] = 'Fișierul dataset {$a} nu poate fi scris';
$string['errorexportmodelresult'] = 'Modelul de învățare automată nu poate fi exportat.';
$string['errorimport'] = 'Eroare la importul fișierului JSON furnizat.';
$string['errorimportmissingclasses'] = 'Următoarele componente modele analitice nu sunt disponibile pe acest site: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Modelul furnizat necesită instalarea următoarelor plugin-uri: {$a}. Rețineți că versiunile nu trebuie neapărat să se potrivească cu versiunile instalate pe site-ul dvs. Instalarea aceleiași versiuni sau a unei versiuni mai noi a pluginului ar trebui să fie bine în majoritatea cazurilor.';
$string['errorimportversionmismatches'] = 'Versiunea următoarelor componente diferă de versiunea instalată pe acest site: {$a}. Puteți utiliza opțiunea „Ignorați nepotrivirile de versiune” pentru a ignora aceste diferențe.';
$string['errorinvalidcontexts'] = 'Unele dintre contextele selectate nu pot fi utilizate în această țintă.';
$string['errorinvalidindicator'] = 'Indicatorul {$a} nu este valid';
$string['errorinvalidtarget'] = 'Targetu-ul {$a} nu este valid';
$string['errorinvalidtimesplitting'] = 'Intervalul de analiză nu este valid; vă rugăm să vă asigurați că adăugați numele clasei complet calificat.';
$string['errornocontextrestrictions'] = 'Ținta selectată nu acceptă restricții de context';
$string['errornoexportconfig'] = 'A apărut o problemă la exportul configurației modelului.';
$string['errornoexportconfigrequirements'] = 'Doar modelele nestatice cu un interval de analiză pot fi exportate.';
$string['errornoindicators'] = 'Acest model nu are niciun indicator';
$string['errornopredictresults'] = 'Nu s-au returnat rezultate din procesorul de predicții. Verificați conținutul directorului de ieșire pentru mai multe informații.';
$string['errornoroles'] = 'Rolurile cursantului sau profesorului nu au fost definite. Definiți-le în pagina de setări ale  modelelor analitice.';
$string['errornotarget'] = 'Acest model nu are nicio țintă.';
$string['errornotimesplittings'] = 'Acest model nu are niciun interval analitic.';
$string['errorpredictioncontextnotavailable'] = 'Acest context al predicției nu mai este disponibil.';
$string['errorpredictionformat'] = 'Format greșit de calcul al predicțiilor';
$string['errorpredictionnotfound'] = 'Predicția nu a fost găsită';
$string['errorpredictionsprocessor'] = 'Eroare procesor de predicții: {$a}';
$string['errorpredictwrongformat'] = 'Returnarea procesorului de predicții nu poate fi decodată: „{$a}”';
$string['errorprocessornotready'] = 'Procesorul de predicții selectat nu este gata: {$a}';
$string['errorsamplenotavailable'] = 'Eșantionul prezis nu mai este disponibil.';
$string['errorunexistingmodel'] = 'Model inexistent {$a}';
$string['errorunexistingtimesplitting'] = 'Intervalul de analiză selectat nu este disponibil.';
$string['errorunknownaction'] = 'Acțiune necunoscută';
$string['eventinsightsviewed'] = 'Statistici vizualizate';
$string['eventpredictionactionstarted'] = 'Procesul de predicție a început';
$string['fixedack'] = 'Acceptă';
$string['incorrectlyflagged'] = 'Marcat incorect';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'Sistemul a generat unele informații pentru dumneavoastră.';
$string['insightinfomessageplain'] = 'Sistemul a generat informații pentru dumneavoastră: {$a}';
$string['insightmessagesubject'] = 'Noi informații pentru "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'Nu poate fi analizat utilizând intervalul de analiză {$a}.';
$string['invalidtimesplitting'] = 'Modelul cu ID {$a} are nevoie de un interval de analiză înainte de a putea fi folosit pentru instruire.';
$string['levelinstitution'] = 'NIvelul de educație';
$string['levelinstitutionisced0'] = 'Educație timpurie („mai puțin decât primar” pentru realizarea educațională)';
$string['levelinstitutionisced1'] = 'Clasele primare';
$string['levelinstitutionisced2'] = 'Învățământul secundar inferior';
$string['levelinstitutionisced3'] = 'Învățământul secundar superior';
$string['levelinstitutionisced4'] = 'Educație post-secundară non-terțiară (poate include formare corporativă sau comunitară / ONG)';
$string['levelinstitutionisced5'] = 'Educație terțiară cu ciclu scurt (poate include formare corporativă sau comunitară / ONG)';
$string['levelinstitutionisced6'] = 'Nivel Licență sau nivel echivalent';
$string['levelinstitutionisced7'] = 'NIvel masteral sau echivalentul';
$string['levelinstitutionisced8'] = 'Nivel doctoral sau echivalentul';
$string['modeinstruction'] = 'Moduri de instruire';
$string['modeinstructionblendedhybrid'] = 'Combinat sau hibrid';
$string['modeinstructionfacetoface'] = 'Față în față';
$string['modeinstructionfullyonline'] = 'Integral online';
$string['modeloutputdir'] = 'Director de salvare a modele';
$string['modeloutputdirinfo'] = 'Director în care procesoarele de predicție stochează toate informațiile de evaluare. Util pentru depanare și cercetare.';
$string['modeloutputdirwithdefaultinfo'] = 'Director în care procesoarele de predicție stochează toate informațiile de evaluare. Util pentru depanare și cercetare. Dacă este gol, atunci {$a} va fi folosit ca implicit.';
$string['modeltimelimit'] = 'Limita de timp de analiză pentru model';
$string['modeltimelimitinfo'] = 'Această setare limitează timpul petrecut de fiecare model analizând conținutul site-ului.';
$string['neutral'] = 'Neutru';
$string['neverdelete'] = 'Nu șterge niciodată calculele';
$string['nocourses'] = 'Nu sunt cursuri de analizat';
$string['nodata'] = 'Nu sunt date de analizat';
$string['noevaluationbasedassumptions'] = 'Modelele bazate pe ipoteze nu pot fi evaluate.';
$string['noinsights'] = 'Nu au fost raportate statistici';
$string['noinsightsmodel'] = 'Acest model nu generează informații';
$string['nonewdata'] = 'Nu sunt date noi disponibile. Modelul va fi analizat după următorul interval de analiză.';
$string['nonewranges'] = 'Nu sunt predicții noi încă. Modelul va fi analizat după următorul interval de analiză.';
$string['nopredictionsyet'] = 'Nu sunt predicții disponibile încă';
$string['noranges'] = 'Nu sunt predicții încă';
$string['notapplicable'] = 'Nu este aplicabil';
$string['notrainingbasedassumptions'] = 'Modelele bazate pe ipoteze nu au nevoie de instruire';
$string['notuseful'] = 'Nu este util';
$string['novaliddata'] = 'Nu sunt date valabile disponibile';
$string['novalidsamples'] = 'Nu sunt exemple valide disponibile';
$string['onlycli'] = 'Modelele analitice sunt procesate numai prin execuție din linia de comandă (CLI)';
$string['onlycliinfo'] = 'Procesele analitice, cum ar fi evaluarea modelelor, instruirea algoritmilor de învățare automată sau obținerea de predicții pot dura ceva timp. Acestea rulează ca sarcini cron sau pot fi forțate prin linia de comandă. Dacă este dezactivat, procesele de analiză pot fi rulate manual prin intermediul interfeței web.';
$string['percentonline'] = 'Procentaj online';
$string['percentonline_help'] = 'Dacă organizația dvs. oferă cursuri mixte sau hibride, ce procent din munca utilizatorilor se desfășoară online în Moodle? Introduceți un număr între 0 și 100.';
$string['predictionsprocessor'] = 'Procesor de predicții';
$string['predictionsprocessor_help'] = 'Un procesor de predicții este backend-ul de învățare automată care procesează seturile de date generate prin calcularea indicatorilor și țintelor modelelor. Fiecare model poate folosi un procesor diferit. Cel specificat aici va fi implicit.';
$string['privacy:metadata:analytics:analyticsmodels'] = 'Modele Analitice';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'Utilizatorul care a modificat modelul';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'Jurnalizarea autentificărilor care a fost folosită pentru modelele analitice';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'Utilizatorul care a modificat jurnalizarea autentificărilor';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Calcule indicatori';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Contextul';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Ora de încheiere a calculului';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Clasa calculatorului indicator';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'ID-ul eșantionului';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Tabelul de origine al eșantionului';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Ora de începere a calculului';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Când a fost făcută predicția';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Valoarea calculată';
$string['privacy:metadata:analytics:predictionactions'] = 'Acțiuni de predicție';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Denumirea acțiunii';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'Id-ul predicției';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Când a fost efectuată acțiunea de predicție';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Utilizatorul care a efectuat acțiunea';
$string['privacy:metadata:analytics:predictions'] = 'Predicții';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Calculele indicatorilor';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Contextul';
$string['privacy:metadata:analytics:predictions:modelid'] = 'ID-ul modelului';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Predicția';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Scorul de predicție';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Indicele intervalului de analiză';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'ID-ul eșantionului';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Când a fost făcută predicția';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Timpul final al calculelor';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Timpul  de început al calculelor';
$string['processingsitecontents'] = 'Se procesează conținuturile site-ului';
$string['successfullyanalysed'] = 'Analizat cu succes';
$string['timesplittingmethod'] = 'Interval de analiză';
$string['timesplittingmethod_help'] = 'Intervalul de analiză definește momentul în care sistemul va calcula predicțiile și porțiunea din jurnalele de activitate care vor fi luate în considerare pentru aceste predicții. De exemplu, durata cursului poate fi împărțită în părți, cu o predicție generată la sfârșitul fiecărei părți.';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'Tipul de instituție';
$string['typeinstitutionacademic'] = 'Academic';
$string['typeinstitutionngo'] = 'Organizație non-guvernamentală (ONG)';
$string['typeinstitutiontraining'] = 'Corporate training';
$string['useful'] = 'Util';
$string['viewdetails'] = 'Corporate training';
$string['viewinsight'] = 'Vezi detaliile';
$string['viewinsightdetails'] = 'Vizualizați detaliile statisticilor';
$string['viewprediction'] = 'Vezi detaliile predicției';
$string['washelpful'] = 'A fost folositor?';
