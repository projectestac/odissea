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
 * Strings for component 'analytics', language 'ca', version '4.4'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'No s\'ha utilitzat el {$a->analysableid} analitzable: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'L\'anàlisi {$a->analysableid} no és vàlida per a aquest objectiu: {$a->result}';
$string['analysisinprogress'] = 'Encara s\'està analitzant per una execució prèvia';
$string['analytics'] = 'Analítiques';
$string['analyticsdisabled'] = 'Les analítiques estan inhabilitades. Podeu habilitar-les a «Administració del lloc > Característiques avançades».';
$string['analyticslogstore'] = 'L\'emmagatzematge usat per a les analítiques';
$string['analyticslogstore_help'] = 'L\'emmagatzematge que usarà l\'API de les analítiques per llegir l\'activitat de l\'usuari.';
$string['analyticssettings'] = 'Paràmetres de les analítiques';
$string['analyticssiteinfo'] = 'Informació del lloc';
$string['calclifetime'] = 'Conserva els càlculs de les analítiques per a';
$string['configlcalclifetime'] = 'Especifica la durada del temps que voleu mantenir les dades de càlcul - això no suprimirà les prediccions, sinó que suprimirà les dades utilitzades per a generar les prediccions. L\'ús de l\'opció predeterminada aquí és millor, ja que manté l\'ús del disc sota control, però si esteu utilitzant taules de càlcul per a altres propòsits, és possible que vulgueu augmentar aquest valor.';
$string['defaultpredictionsprocessor'] = 'Processador de prediccions per defecte';
$string['defaultpredictoroption'] = 'Processador predeterminat ({$a})';
$string['defaulttimesplittingmethods'] = 'Intervals d\'anàlisi predeterminats per a l\'avaluació del model';
$string['defaulttimesplittingmethods_help'] = 'L\'interval d\'anàlisi defineix quan el sistema calcularà les prediccions i la porció dels registres d\'activitat que es consideraran per a aquestes prediccions. El procés d\'avaluació del model iterarà a través d\'aquests intervals d\'anàlisi tret que s\'especifiqui un interval d\'anàlisi específic.';
$string['disabledmodel'] = 'Model inhabilitat';
$string['erroralreadypredict'] = 'El fitxer {$a} ja s\'ha utilitzat per generar prediccions.';
$string['errorcannotreaddataset'] = 'El fitxer de conjunt de dades {$a} no es pot llegir.';
$string['errorcannotusetimesplitting'] = 'L\'interval d\'anàlisi proporcionat no es pot utilitzar en aquest model.';
$string['errorcannotwritedataset'] = 'El fitxer de conjunt de dades {$a} no es pot escriure.';
$string['errorexportmodelresult'] = 'El model d\'aprenentatge automàtic no es pot exportar.';
$string['errorimport'] = 'S\'ha produït un error en importar el fitxer JSON proporcionat.';
$string['errorimportmissingclasses'] = 'Els components següents de l\'analytics no estan disponibles en aquest lloc: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'El model proporcionat requereix que s\'instal·lin els connectors següents: {$a}. Tingueu en compte que les versions no necessàriament han de coincidir amb les versions instal·lades al vostre lloc. La instal·lació de la mateixa o d\'una versió més nova del connector hauria d\'anar bé en la majoria dels casos.';
$string['errorimportversionmismatches'] = 'La versió dels següents components difereix de la versió instal·lada en aquest lloc: {$a}. Podeu utilitzar l\'opció «Ignora la no concordança de versions» per a ignorar aquestes diferències.';
$string['errorinvalidcontexts'] = 'Alguns dels contexts seleccionats no es poden utilitzar en aquest objectiu.';
$string['errorinvalidindicator'] = 'Indicador {$a} no vàlid';
$string['errorinvalidtarget'] = 'L\'objectiu {$a} no és vàlid';
$string['errorinvalidtimesplitting'] = 'L\'interval d\'anàlisi no es vàlid; assegureu-vos d\'afegir el nom de la classe completament qualificada.';
$string['errornocontextrestrictions'] = 'L\'objectiu seleccionat no admet restriccions de context';
$string['errornoexportconfig'] = 'S\'ha produït un problema en exportar la configuració del model.';
$string['errornoexportconfigrequirements'] = 'Només es poden exportar models no estàtics amb un interval d\'anàlisi.';
$string['errornoindicators'] = 'Aquest model no té cap indicador.';
$string['errornopredictresults'] = 'No s\'han retornat resultats del processador de prediccions. Consulteu el contingut del directori de sortida per a més informació.';
$string['errornoroles'] = 'No s\'han definit rols d\'estudiant o professor. Definiu-los a la pàgina de paràmetres de l\'analytics';
$string['errornotarget'] = 'Aquest model no té cap objectiu.';
$string['errornotimesplittings'] = 'Aquest model no té un interval d\'anàlisi.';
$string['errorpredictioncontextnotavailable'] = 'Aquest context de predicció ja no està disponible.';
$string['errorpredictionformat'] = 'El format de càlculs de predicció és erroni';
$string['errorpredictionnotfound'] = 'No s\'ha trobat la predicció';
$string['errorpredictionsprocessor'] = 'S\'ha produït un error en el processador de prediccions: {$a}';
$string['errorpredictwrongformat'] = 'El retorn del processador de prediccions no es pot descodificar: «{$a}»';
$string['errorprocessornotready'] = 'El processador de prediccions seleccionat no està preparat: {$a}';
$string['errorsamplenotavailable'] = 'La mostra predita ja no està disponible.';
$string['errorunexistingmodel'] = 'El model {$a} no existeix';
$string['errorunexistingtimesplitting'] = 'L\'interval d\'anàlisi seleccionat no està disponible.';
$string['errorunknownaction'] = 'Acció desconeguda';
$string['eventinsightsviewed'] = 'Prediccions visualitzades';
$string['eventpredictionactionstarted'] = 'S\'ha iniciat el procés de predicció';
$string['fixedack'] = 'Accepta';
$string['incorrectlyflagged'] = 'Marcat incorrectament';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'El sistema ha generat algunes prediccions.';
$string['insightinfomessageplain'] = 'El sistema ha generat algunes prediccions: {$a}';
$string['insightmessagesubject'] = 'Informació nova per a «{$a}»';
$string['invalidanalysablefortimesplitting'] = 'No es pot analitzar utilitzant l\'interval d\'anàlisi {$a}.';
$string['invalidtimesplitting'] = 'El model amb ID {$a} necessita un interval d\'anàlisi abans que es pugui utilitzar per a l\'entrenament.';
$string['levelinstitution'] = 'Nivell d\'educació';
$string['levelinstitutionisced0'] = 'Parvulari';
$string['levelinstitutionisced1'] = 'Educació primària';
$string['levelinstitutionisced2'] = 'Educació Secundària Obligatòria (ESO)';
$string['levelinstitutionisced3'] = 'Batxillerat';
$string['levelinstitutionisced4'] = 'Educació post-secundària no terciària (pot incloure formació corporativa o comunitària/ONG)';
$string['levelinstitutionisced5'] = 'Educació terciària de cicle curt (pot incloure formació corporativa o comunitària/ONG)';
$string['levelinstitutionisced6'] = 'Grau universitari o equivalent';
$string['levelinstitutionisced7'] = 'Màster universitari o equivalent';
$string['levelinstitutionisced8'] = 'Doctorat o equivalent';
$string['modeinstruction'] = 'Modes d\'instrucció';
$string['modeinstructionblendedhybrid'] = 'Híbrid';
$string['modeinstructionfacetoface'] = 'Cara a cara';
$string['modeinstructionfullyonline'] = 'Totalment en línia';
$string['modeloutputdir'] = 'Directori de sortida dels models';
$string['modeloutputdirwithdefaultinfo'] = 'Directori on els processadors de prediccions emmagatzemen tota la informació d\'avaluació. Útil per descobrir errors i per la recerca. Si està buit, s\'usarà {$a} per defecte.';
$string['modeltimelimit'] = 'Tamps màxim d\'anàlisi per model';
$string['modeltimelimitinfo'] = 'Aquest paràmetre limita el temps que cada model empra analitzant els continguts del lloc.';
$string['neutral'] = 'Neutral';
$string['neverdelete'] = 'No esborris mai els càlculs';
$string['nocourses'] = 'No hi ha cap curs per analitzar';
$string['nodata'] = 'No hi ha dades per analitzar';
$string['noevaluationbasedassumptions'] = 'Els models basats en hipòtesis no es poden avaluar.';
$string['noinsights'] = 'No s\'ha informat de cap predicció';
$string['noinsightsmodel'] = 'Aquest model no genera prediccions';
$string['nonewdata'] = 'No hi ha noves dades disponibles. El model s\'analitzarà després del proper interval d\'anàlisi.';
$string['nonewranges'] = 'No hi ha prediccions noves encara. El model s\'analitzarà després del proper interval d\'anàlisi.';
$string['nopredictionsyet'] = 'Encara no hi ha prediccions disponibles';
$string['noranges'] = 'No hi ha prediccions encara';
$string['notapplicable'] = 'No és aplicable';
$string['notrainingbasedassumptions'] = 'Els models basats en hipòtesis no necessiten entrenament';
$string['notuseful'] = 'No és útil';
$string['novaliddata'] = 'No hi ha dades vàlides disponibles';
$string['novalidsamples'] = 'No hi ha mostres vàlides disponibles';
$string['onlycli'] = 'L\'execució de processos de l\'Analytics serà només via línia d\'ordres';
$string['onlycliinfo'] = 'Els processos de l\'analytics com ara els models d\'avaluació, l\'entrenament d\'algorismes d\'aprenentatge automàtic o l\'obtenció de prediccions poden portar força temps. S\'executen com a tasques de cron o es poden forçar per línia d\'ordres. Si s\'inhabilita, els processos de l\'analytics es poden executar manualment des de la interfície web.';
$string['percentonline'] = 'Percentatge en línia';
$string['percentonline_help'] = 'Si la vostra organització ofereix cursos mixtos, quin percentatge de la tasca de l\'estudiant es fa en línia al Moodle? Introduïu un nombre de 0 a 100.';
$string['predictionsprocessor'] = 'Processador de prediccions';
$string['predictionsprocessor_help'] = 'Un processador de prediccions és la dorsal d\'aprenentatge automàtic que processa els conjunts de dades generats pel càlcul dels indicadors dels models i objectius. Cada model usa un processador diferent. El que s\'especifica aquí serè';
$string['privacy:metadata:analytics:analyticsmodels'] = 'Models d\'anàlisi';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'L\'usuari que ha modificat el model';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'El registre utilitzat per als models analítics';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'L\'usuari que ha modificat el registre';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Càlculs de l\'indicador';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'El context';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Instant de finalització del càlcul';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'La classe de la calculadora d\'indicadors';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'L\'ID de la mostra';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'La taula origen de la mostra.';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Instant d\'inici del càlcul';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Quan es va fer la predicció';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'El valor calculat';
$string['privacy:metadata:analytics:predictionactions'] = 'Accions de predicció';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'El nom de l\'acció';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'L\'ID de la predicció';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Quan es va realitzar l\'acció de predicció';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'L\'usuari que ha fet l\'acció';
$string['privacy:metadata:analytics:predictions'] = 'Prediccions';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Càlculs de l\'indicador';
$string['privacy:metadata:analytics:predictions:contextid'] = 'El context';
$string['privacy:metadata:analytics:predictions:modelid'] = 'L\'ID del model';
$string['privacy:metadata:analytics:predictions:prediction'] = 'La predicció';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'La puntuació de predicció';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'L\'índex de l\'interval d\'anàlisi';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'L\'ID de la mostra';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Quan es va fer la predicció';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Temps de finalització dels càlculs';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Temps d\'inici dels càlculs';
$string['processingsitecontents'] = 'Processant el contingut del lloc';
$string['successfullyanalysed'] = 'S\'ha analitzat correctament';
$string['timesplittingmethod'] = 'Interval d\'anàlisi';
$string['timesplittingmethod_help'] = 'L\'interval d\'anàlisi defineix quan el sistema calcularà les prediccions i la porció dels registres d\'activitat que es consideraran per a aquestes prediccions. Per exemple, la durada del curs es pot dividir en parts, amb una predicció generada al final de cada part.';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'Tipus d\'institució';
$string['typeinstitutionacademic'] = 'Acadèmic';
$string['typeinstitutionngo'] = 'Organització no governamental (ONG)';
$string['typeinstitutiontraining'] = 'Formació corporativa';
$string['useful'] = 'Útil';
$string['viewdetails'] = 'Mostra els detalls';
$string['viewinsight'] = 'Visualitza la informació';
$string['viewinsightdetails'] = 'Mostra els detalls de la informació';
$string['viewprediction'] = 'Mostra els detalls de la predicció';
$string['washelpful'] = 'Això us ha semblat útil?';
