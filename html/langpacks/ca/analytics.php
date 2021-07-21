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
 * Strings for component 'analytics', language 'ca', version '3.11'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysisinprogress'] = 'Encara s\'està analitzant per una execució prèvia';
$string['analytics'] = 'Google Analytics';
$string['analyticsdisabled'] = 'El Google Analytics està deshabilitat. Podeu habilitar-lo a «Administració del lloc > Característiques avançades».';
$string['analyticslogstore'] = 'L\'emmagatzematge usat pel Google Analytics';
$string['analyticslogstore_help'] = 'L\'emmagatzematge que usarà l\'API del Google Analytics per llegir l\'activitat de l\'usuari.';
$string['analyticssettings'] = 'Paràmetres de l\'Analytics';
$string['analyticssiteinfo'] = 'Informació del lloc';
$string['calclifetime'] = 'Guarda els càlculs de l\'analytics per a';
$string['errorimportmissingclasses'] = 'Els components següents de l\'analytics no estan disponibles en aquest lloc: {$a->missingclasses}.';
$string['errorinvalidindicator'] = 'Indicador {$a} no vàlid';
$string['errornoindicators'] = 'Aquest model no té cap indicador.';
$string['errornoroles'] = 'No s\'han definit rols d\'estudiant o professor. Definiu-los a la pàgina de paràmetres de l\'analytics';
$string['errorunknownaction'] = 'Acció desconeguda';
$string['eventinsightsviewed'] = 'Prediccions visualitzades';
$string['fixedack'] = 'Accepta';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'El sistema ha generat algunes prediccions: <a href="{$a}">{$a}</a>.';
$string['insightinfomessageplain'] = 'El sistema ha generat algunes prediccions: {$a}';
$string['levelinstitution'] = 'Nivell d\'educació';
$string['levelinstitutionisced0'] = 'Parvulari';
$string['levelinstitutionisced1'] = 'Educació primària';
$string['levelinstitutionisced2'] = 'Educació Secundària Obligatòria (ESO)';
$string['levelinstitutionisced3'] = 'Batxillerat';
$string['levelinstitutionisced6'] = 'Grau universitari o equivalent';
$string['levelinstitutionisced7'] = 'Màster universitari o equivalent';
$string['levelinstitutionisced8'] = 'Doctorat o equivalent';
$string['modeinstruction'] = 'Modes d\'instrucció';
$string['modeinstructionblendedhybrid'] = 'Híbrid';
$string['modeinstructionfacetoface'] = 'Cara a cara';
$string['modeinstructionfullyonline'] = 'Totalment en línia';
$string['modeloutputdir'] = 'Directori de sortida dels models';
$string['modeloutputdirinfo'] = 'Directori on els processadors de prediccions emmagatzemen tota la informació d\'avaluació. Útil per descobrir errors i per la recerca.';
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
$string['onlycliinfo'] = 'Els processos de l\'analytics com ara els models d\'avaluació, l\'entrenament d\'algorismes d\'aprenentatge automàtic o l\'obtenció de prediccions poden portar força temps. S\'executen com a tasques de cron o es poden forçar per línia d\'ordres. Si es deshabilita, els processos de l\'analytics es poden executar manualment des de la interfície web.';
$string['percentonline'] = 'Percentatge en línia';
$string['percentonline_help'] = 'Si la vostra organització ofereix cursos mixtos, quin percentatge de la tasca de l\'estudiant es fa en línia al Moodle? Introduïu un nombre de 0 a 100.';
$string['predictionsprocessor'] = 'Processador de prediccions';
$string['predictionsprocessor_help'] = 'Un processador de prediccions és la dorsal d\'aprenentatge automàtic que processa els conjunts de dades generats pel càlcul dels indicadors dels models i objectius. Cada model usa un processador diferent. El que s\'especifica aquí serè';
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
$string['viewdetails'] = 'Mostra els detalls';
$string['washelpful'] = 'Això us ha semblat útil?';
