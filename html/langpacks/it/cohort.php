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
 * Strings for component 'cohort', language 'it', version '4.1'.
 *
 * @package     cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Aggiungi gruppo globale';
$string['allcohorts'] = 'Tutti i gruppi globali';
$string['anycohort'] = 'Qualsiasi';
$string['assign'] = 'Assegna';
$string['assigncohorts'] = 'Assegna membri del gruppo globale';
$string['assignto'] = 'Membri del gruppo globale \'{$a}\'';
$string['backtocohorts'] = 'Torna all\'elenco dei gruppi globali';
$string['bulkadd'] = 'Aggiungi al gruppo globale';
$string['bulknocohort'] = 'Non sono stati trovati gruppi globali disponibili';
$string['categorynotfound'] = 'La categoria <b>{$a}</b> non esiste oppure in quella categoria non sei autorizzato a creare gruppi globali. Verrà usato il contesto di default.';
$string['cohort'] = 'Gruppo globale';
$string['cohortmember'] = 'Membro del gruppo globale';
$string['cohorts'] = 'Gruppi globali';
$string['cohortsin'] = '{$a}: gruppi globali disponibili';
$string['component'] = 'Provenienza';
$string['contextnotfound'] = 'Il contesto <b>{$a}</b> non esiste oppure in quel contesto non sei autorizzato a creare gruppi globali. Verrà usato il contesto di default.';
$string['csvcontainserrors'] = 'Sono stati riscontrati errori nel file CSV. Di seguito i dettagli.';
$string['csvcontainswarnings'] = 'Sono stati riscontrati avvertimenti nel file CSV. Di seguito i dettagli.';
$string['csvextracolumns'] = 'Le colonne <b>{$a}</b> saranno ignorate.';
$string['currentusers'] = 'Già membri';
$string['currentusersmatching'] = 'Membri corrispondenti';
$string['defaultcontext'] = 'Contesto di default';
$string['delcohort'] = 'Elimina gruppo globale';
$string['delconfirm'] = 'Vuoi eliminare il gruppo globale \'{$a}\'?';
$string['description'] = 'Descrizione';
$string['displayedrows'] = 'Visualizzate {$a->displayed} righe su un totale di {$a->total}.';
$string['duplicateidnumber'] = 'Un gruppo globale con la stessa ID è già presente';
$string['editcohort'] = 'Modifica gruppo globale';
$string['editcohortidnumber'] = 'Modifica codice identificativo del gruppo globale';
$string['editcohortname'] = 'Modifica nome del gruppo globale';
$string['eventcohortcreated'] = 'Creazione gruppo globale';
$string['eventcohortdeleted'] = 'Eliminazione gruppo globale';
$string['eventcohortmemberadded'] = 'Inserimento utente in gruppo globale';
$string['eventcohortmemberremoved'] = 'Rimozione utente dal gruppo globale';
$string['eventcohortupdated'] = 'Aggiornamento gruppo globale';
$string['external'] = 'Gruppo globale esterno';
$string['idnumber'] = 'Codice identificativo gruppo globale';
$string['invalidtheme'] = 'Il tema del gruppo globale non esiste';
$string['memberofcohort'] = 'Membro del gruppo globale';
$string['memberscount'] = 'Dimensione gruppo globale';
$string['name'] = 'Nome';
$string['namecolumnmissing'] = 'Sono stati riscontrati problemi sul formato del file CSV. Verificare che il file includa i nomi delle colonne. Per aggiungere utenti ad un gruppo globale, utilizzare il \'Caricamento utenti\' disponibile nell\'Amministrazione del sito.';
$string['namefieldempty'] = 'Il nome del campo non può essere lasciato vuoto';
$string['newidnumberfor'] = 'Nuovo codice identificativo del gruppo globale {$a}';
$string['newnamefor'] = 'Nuovo nome del gruppo globale {$a}';
$string['nocomponent'] = 'Creato a mano';
$string['potusers'] = 'Membri potenziali';
$string['potusersmatching'] = 'Membri potenziali corrispondenti';
$string['preview'] = 'Anteprima';
$string['privacy:metadata:cohort_members'] = 'Informazioni sul gruppo globale dell\'utente.';
$string['privacy:metadata:cohort_members:cohortid'] = 'ID del gruppo globale';
$string['privacy:metadata:cohort_members:timeadded'] = 'Marca temporale che indica quando l\'utente è stato aggiunto al gruppo globale';
$string['privacy:metadata:cohort_members:userid'] = 'ID dell\'utente che appartiene al gruppo globale';
$string['removeuserwarning'] = 'Rimuovere utenti da un gruppo globale comporta la rimozione degli utenti dai corsi e la relativa eliminazione delle impostazioni personali, voti, appartenenza ai gruppi. eccetera.';
$string['search'] = 'Cerca';
$string['searchcohort'] = 'Cerca gruppo globale';
$string['selectfromcohort'] = 'Seleziona membri dal gruppo globale';
$string['systemcohorts'] = 'Gruppi globali a livello di sistema';
$string['unknowncohort'] = 'Il gruppo globale ({$a}) è sconosciuto!';
$string['uploadcohorts'] = 'Caricamento gruppi globali';
$string['uploadcohorts_help'] = 'È possibile caricare gruppi globali tramite file di testo. Il formato del file deve rispettare le seguenti regole:

* Ciascuna linea rappresenta un record
* Ciascun record contiene una serie di dati separati dal separatore selezionato
* il primo record deve contenere l\'elenco dei nomi dei campi che definiscono il formato del dati presenti nel resto del file
* Il nome è un campo obbligatorio
* I seguenti campi sono facoltativi: codice identificativo (idnumber), descrizione (description), formato descrizione (descriptionformat), contesto (context), categoria (category), id della categoria (category_id), codice identificativo della categoria (category_idnumber), percorso della categoria (category_path).';
$string['uploadedcohorts'] = 'Gruppi globali caricati: {$a}';
$string['useradded'] = 'L\'utente è stato aggiunto al gruppo globale "{$a}"';
$string['visible'] = 'Visibile';
$string['visible_help'] = 'I gruppi globali possono essere visualizzati dai ruoli con il privilegio \'moodle/cohort:view\' nel contesto di riferimento. I gruppi globali visibili possono essere visti anche da utenti nei corsi sottostanti al contesto di appartenenza,';
