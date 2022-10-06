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
 * Strings for component 'qtype_randomsamatch', language 'it', branch 'MOODLE_38_STABLE'
 *
 * @package   qtype_randomsamatch
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insufficientoptions'] = 'Non ci sono opzioni suffcienti per questa domanda, pertanto non può essere usata nel quiz. Per favore informa il docente.';
$string['nosaincategory'] = 'Non ci sono domande a risposta breve nella categoria scelta \'<b>{$a->catname}</b>\'. Scegli un\'altra categoria o inserisce qualche domanda in questa categoria.';
$string['notenoughsaincategory'] = 'Ci sono solo {$a->nosaquestions}<domande a risposta breve nella categoria "{$a->catname}". Scegli un\'altra categoria, aggiungi alcune domande in questa categoria o riduci il numero di domande.';
$string['pluginname'] = 'Corrispondenze con domande a Risposta breve casuale';
$string['pluginnameadding'] = 'Aggiunta di domanda a Corrispondenze con domande a Risposta breve casuale';
$string['pluginnameediting'] = 'Modifica di domanda a Corrispondenze con domande a Risposta breve casuale';
$string['pluginname_help'] = 'Dal punto di vista dello studente questo tipo di domanda è analogo alla domanda a corrispondenza, tuttavia l\'elenco delle corrispondenze viene tratto casualmente dalle domande a risposta breve presenti nella categoria di domande in uso. Nella categoria di domande deve essere disponibile un numero sufficiente di domande a risposta breve, in caso contrario verrà visualizzato un messaggio di errore.';
$string['pluginnamesummary'] = 'Simile ad una domanda a corrispondenza dove l\'elenco delle corrispondenze viene tratto casualmente dalle domande a risposta breve presenti in una specifica categoria di domande.';
$string['privacy:metadata'] = 'Il plugin Tipo di domande \'Corrispondenze con domande a Risposta breve casuale\' non memorizza dati personali.';
$string['randomsamatch'] = 'Corrispondenze con domande a Risposta breve casuale';
$string['randomsamatchintro'] = 'Per ciascuna delle seguenti domande, scegli la riposta corrispondete dal menu.';
$string['randomsamatchnumber'] = 'Numero di domande da selezionare';
$string['subcats'] = 'Includi sotto categorie';
$string['subcats_help'] = 'Consente di includere domande presenti in sotto categorie.';
