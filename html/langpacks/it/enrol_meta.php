<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'enrol_meta', language 'it', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol_meta
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Inserisci nel gruppo';
$string['coursesort'] = 'Ordinamento elenco corsi';
$string['coursesort_help'] = 'Consente di impostare l\'ordinamento dell\'elenco dei corsi da collegare: l\'ordinamento predefinito impostato in \'Amministrazione del sito > Corsi > Gestione corsi e categorie\' oppure l\'ordinamento alfabetico basato sulle impostazioni dei corsi.';
$string['creategroup'] = 'Crea gruppo';
$string['defaultgroupnametext'] = '{$a->name} corso {$a->increment}';
$string['enrolmetasynctask'] = 'Sincronizzazione iscrizioni meta corso';
$string['linkedcourse'] = 'Corso da collegare';
$string['meta:config'] = 'Configurare istanze plugin iscrizione collegamento meta corso';
$string['meta:selectaslinked'] = 'Selezionare un meta corso da collegare';
$string['meta:unenrol'] = 'Disiscrivere utenti sospesi';
$string['nosyncroleids'] = 'Ruoli non sincronizzati';
$string['nosyncroleids_desc'] = 'Di default tutte le assegnazioni di ruolo a livello di corso vengono sincronizzate dal corso padre al corso figlio. E\' possibile selezionare i ruoli che non si desidera sincronizzare. I ruoli saranno aggiornati al prossimo elaboarazione del cron.';
$string['pluginname'] = 'Collegamento meta corso';
$string['pluginname_desc'] = 'Il plugin di iscrizione collegamento meta corso sincronizza le iscrizioni e i ruoli in due corsi diversi.';
$string['privacy:metadata:core_group'] = 'Il plugin di iscrizione "Collegamento meta corso" può creare un nuovo gruppo o usare un gruppo esistente dove inserire i gli iscritti al corso collegato.';
$string['syncall'] = 'Sincronizza tutti gli utenti iscritti';
$string['syncall_desc'] = 'Consente di sincronizzare tutti gli utenti, anche se privi di ruolo nel corso padre. In alternativa saranno sincronizzati nei corsi figli solo gli utenti con almeno un ruolo.';
