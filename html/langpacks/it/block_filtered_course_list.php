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
 * Strings for component 'block_filtered_course_list', language 'it', version '4.1'.
 *
 * @package     block_filtered_course_list
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcourses'] = 'Un manager visualizza tutti i corsi';
$string['blockname'] = 'Elenco dei corsi filtrato';
$string['catrubrictpl'] = 'Modello per la rubrica di categoria';
$string['catseparator'] = 'Separatore di categorie';
$string['completedcourses'] = 'Corsi completati';
$string['configcatrubrictpl'] = 'Usa questa impostazione per configurare il modello da utilizzare per il nome della rubrica quando si filtra per categoria. I token utilizzabili sono: NAME, IDNUMBER, PARENT e ANCESTRY. Puoi decidere di troncare il testo aggiungendo la lunghezza massima desiderata all\'interno di parentesi graffe (es. NAME{20}). Il testo sarà quindi completato da puntini di sospensione.<br /><br />Dettagli ulteriori possono essere visualizzati su <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki</a>.';
$string['configcatseparator'] = 'Il separatore da utilizzare quando nel template con rubrica di categoria si utilizza la categoria ANCESTRY.';
$string['configcoursenametpl'] = 'Usa questa impostazione per configurare il modello da utilizzare per il nome del corso. I token utilizzabili sono: FULLNAME, SHORTNAME, IDNUMBER e CATEGORY. Puoi decidere di troncare il testo aggiungendo la lunghezza massima desiderata all\'interno di parentesi graffe (es. NAME{20}). Il testo sarà quindi completato da puntini di sospensione.<br /><br />Dettagli ulteriori possono essere visualizzati su <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki</a>.';
$string['configexternalfilters'] = 'Usa l\'identificatore in parentesi per fare riferimento al filtro esterno all\'interno dell\'area di testo di configurazione del filtro. Per informazioni sulla configurazione disponibile per i filtro esterno, fare riferimento al plugin che lo mette a disposizione.';
$string['configfilters'] = 'Inserisci un filtro per linea, usando la barra verticale | come separatore degli elementi. I tipi di filtro sono <i>category</i>, <i>shortname</i>, <i>regex</i>, <i>idnumber</i>, <i>completion</i>, <i>starred</i>, <i>enrolment</i> e <i>generic</i>. <br /><br />Dettagli ulteriori possono essere visualizzati su <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax</a>.';
$string['confighideallcourseslink'] = 'Nascondi il link "Tutti i corsi" presente alla fine del blocco. <br>Nascondere il link non influisce sulla vista del manager.';
$string['confighidefromguests'] = 'Nascondi il blocco agli ospiti e ai visitatori anonimi.';
$string['confighideothercourses'] = 'Nascondi nel blocco la rubrica "Altri corsi", che contiene tutti i corsi non filtrati.';
$string['configmanagerview'] = 'Cosa deve visualizzare il manager nel blocco? Nota che i manager che non sono iscritti a nessun corso vedranno comunque una lista generica.';
$string['configmaxallcourse'] = 'In un sito con una sola categoria, i manager e gli ospiti vedranno tutti i corsi, ma sopra al numero impostato vedranno invece solo il link alla categoria.<br />[Scegli in numero intero tra 0 e 999]';
$string['configpersistentexpansion'] = 'Ricorda gli stati di espansione delle rubriche all\'interno della sessione del browser.';
$string['configprimarysort'] = 'All\'interno di una rubrica i corsi saranno primariamente ordinati in base a questo campo. Scegli "Ordinamento predefinito" per avere lo stesso ordinamento originale dei corsi nella categoria.';
$string['configsecondarysort'] = 'All\'interno di una rubrica i corsi saranno secondariamente ordinati in base a questo campo.';
$string['configtitle'] = 'Titolo del blocco';
$string['coursenametpl'] = 'Template per il nome dei corsi';
$string['courses'] = 'Corsi';
$string['courseswithxenrolment'] = 'Corsi con {$a} iscrizioni';
$string['defaultfilters'] = 'category | collapsed | 0 (primo livello) | 0 (tutti i discendenti)';
$string['externalfilters'] = 'Filtri esterni';
$string['filtered_course_list:addinstance'] = 'Aggiungere un nuovo blocco Lista filtrata di corsi';
$string['filtered_course_list:myaddinstance'] = 'Aggiungere un nuovo blocco Lista filtrata di corsi alla Dashboard';
$string['filters'] = 'Configurazione del filtro';
$string['filters_help'] = 'Inserisci un filtro per linea, usando la barra verticale | come separatore degli elementi. I tipi di filtro sono <i>category</i>, <i>shortname</i>, <i>regex</i>, <i>idnumber</i>, <i>completion</i>, <i>starred</i>, <i>enrolment</i> e <i>generic</i>. <br /><br />Dettagli ulteriori possono essere visualizzati su <a href="https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax">https://github.com/CLAMP-IT/moodle-blocks_filtered_course_list/wiki/Filter-syntax</a>.';
$string['hideallcourseslink'] = 'Nascondi il link "Tutti i corsi"';
$string['hidefromguests'] = 'Nascondi agli ospiti';
$string['hideothercourses'] = 'Nascondi gli altri corsi';
$string['managerview'] = 'Vista del manager';
$string['maxallcourse'] = 'Massimo per una singola categoria';
$string['othercourses'] = 'Altri corsi';
$string['owncourses'] = 'Un manager visualizza i propri corsi';
$string['persistentexpansion'] = 'Ricorda espansioni';
$string['pluginname'] = 'Lista filtrata di corsi';
$string['primarysort'] = 'Ordinamento principale';
$string['primaryvector'] = 'Tipo di ordinamento principale';
$string['privacy:metadata'] = 'Il blocco "Lista filtrata di corsi" visualizza le informazioni sui corsi a cui si è iscritti ma non memorizza alcuna informazione. Tutte le iscrizioni sono gestite dagli altri sistemi di Moodle.';
$string['secondarysort'] = 'Ordinamento secondario';
$string['secondaryvector'] = 'Tipo di ordinamento secondario';
$string['starredcourses'] = 'Corsi preferiti';
$string['top'] = 'Top';
