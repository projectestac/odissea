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
 * Strings for component 'enrol_meta', language 'it', version '4.4'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Inserisci nel gruppo';
$string['coursesort'] = 'Ordinamento dell\'elenco dei corsi di origine';
$string['coursesort_help'] = 'Specifica come devono essere ordinati i corsi di origine quando si collega il corso di origine al corso di destinazione.';
$string['creategroup'] = 'Crea gruppo';
$string['defaultgroupnametext'] = '{$a->name} corso {$a->increment}';
$string['enrolmetasynctask'] = 'Sincronizzazione iscrizioni meta corso';
$string['linkedcourse'] = 'Corso da collegare';
$string['meta:config'] = 'Configurare istanze plugin iscrizione collegamento meta corso';
$string['meta:selectaslinked'] = 'Selezionare un meta corso da collegare';
$string['meta:unenrol'] = 'Disiscrivere utenti sospesi';
$string['nosyncroleids'] = 'Ruoli non sincronizzati';
$string['nosyncroleids_desc'] = 'Selezionare i ruoli che non devono essere sincronizzati tra il corso di origine e quello di destinazione.';
$string['pluginname'] = 'Collegamento meta corso';
$string['pluginname_desc'] = 'Il corso meta link sincronizza le iscrizioni e i ruoli dal corso di origine al corso di destinazione.';
$string['privacy:metadata:core_group'] = 'Il plugin di iscrizione Collegamento meta corso può creare un nuovo gruppo o usare un gruppo esistente dove inserire gli iscritti al corso di origine.';
$string['samemetacourse'] = 'Non puoi aggiungere un meta collegamento allo stesso corso.';
$string['syncall'] = 'Sincronizza tutti gli utenti iscritti';
$string['syncall_desc'] = 'Consente di sincronizzare tutti gli utenti, anche se privi di ruolo nel corso di origine. In alternativa saranno sincronizzati nei corsi di destinazione solo gli utenti con almeno un ruolo.';
$string['unknownmetacourse'] = 'il titolo abbreviato del meta corso è sconosciuto';
$string['wscannotcreategroup'] = 'Non ci sono autorizzazioni alla creazione di gruppi nel corso collegato con id = {$a}.';
$string['wsinvalidcourse'] = 'Il corso con ID = {$a} non esiste o non ci sono autorizzazioni per il collegamento alle iscrizioni meta corso.';
$string['wsinvalidmetacourse'] = 'Il meta corso con id ID = {$a}  non esiste o non ci sono autorizzazioni per aggiungere istanze di metodi di iscrizione.';
$string['wsnoinstancesspecified'] = 'Non sono state specificate istanze';
