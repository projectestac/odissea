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
 * Strings for component 'enrol_credit', language 'it', version '4.1'.
 *
 * @package     enrol_credit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'L\'iscrizione è disabilitata o non è attiva';
$string['canntenrolearly'] = 'Non è ancora possibile iscriversi; l\'inizio delle iscrizioni è il {$a}.';
$string['canntenrollate'] = 'Non è più possibile iscriversi, il termine delle iscrizioni era il {$a}.';
$string['checkout'] = 'Saranno prelevati {$a->credit_cost} crediti dal tuo bilancio attuale di {$a->user_credits} crediti.';
$string['cohortnonmemberinfo'] = 'Solo i membri del gruppo globale \'{$a}\' possono iscriversi.';
$string['cohortonly'] = 'Solo membri del gruppo globale';
$string['cohortonly_help'] = 'L\'iscrizione può essere riservata ai membri di una gruppo globale. Eventuali cambiamenti dell\'impostazione non avranno effetti sugli iscritti già esistenti.';
$string['confirmbulkdeleteenrolment'] = 'Sei sicuro di eliminare questi iscritti?';
$string['credit:config'] = 'Configurare le istanze di iscrizione con crediti al corso';
$string['credit:manage'] = 'Gestire gli utenti iscritti';
$string['credit:unenrol'] = 'Disiscrivere utenti dal corso';
$string['credit_cost'] = 'Costo in crediti';
$string['credit_cost_help'] = 'Il numero di crediti  che saranno detratti agli utenti che si iscrivono.';
$string['customwelcomemessage'] = 'Messaggio di benvenuto personalizzato';
$string['insufficient_credits'] = 'Non hai crediti sufficienti per l\'iscrizione. Sono richiesti {$a->credit_cost} crediti, il tuo bilancio è di {$a->user_credits} crediti.';
