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
 * Strings for component 'tool_lpmigrate', language 'it', version '4.1'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Corsi ammessi';
$string['allowedcourses_help'] = 'Seleziona i corsi da migrare nel nuovo quadro di competenze. Nel caso in cui nessun corso sia stato selezionato, saranno migrati tutti i corsi.';
$string['continuetoframeworks'] = 'Torna ai quadri';
$string['coursecompetencymigrations'] = 'MIgrazione competenze corso';
$string['coursemodulecompetencymigrations'] = 'Migrazione delle competenze delle attività e delle risorse';
$string['coursemodulesfound'] = 'Trovate attività e risorse';
$string['coursesfound'] = 'Corsi trovati';
$string['coursestartdate'] = 'Data di inizio del corso';
$string['coursestartdate_help'] = 'Se abilitata, i corsi con una data di inizio precedente a quella specificata non verranno migrati.';
$string['disallowedcourses'] = 'Corsi non ammessi';
$string['disallowedcourses_help'] = 'Seleziona i corsi che NON devono essere migrati al nuovo quadro';
$string['errorcannotmigratetosameframework'] = 'Non è possibile migrare un quadro su se stesso.';
$string['errorcouldnotmapcompetenciesinframework'] = 'Non è stato possibile mappare nessuna competenza in questo quadro,';
$string['errors'] = 'Errori';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Si è verificato un errore durante la migrazione della competenza del corso: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Si è verificato un errore durante la migrazione della dell\'attività o della risorsa: {$a}';
$string['excludethese'] = 'Corsi da escludere';
$string['explanation'] = 'Lo strumento può essere utilizzato per aggiornare un quadro di competenze. Lo strumento cercherà le competenze del quadro da aggiornare che sono collegate ai corsi ed alle attività e aggiornerà le competenze per utilizzare il nuovo quadro.

Si raccomanda di non modificare le competenze del vecchio quadro manualmente poiché verrebbero modificate competenze già raggiunte dagli utenti che hanno completato i loro piani formativi.

Si suggerisce di importare il nuovo quadro di competenze, nascondere il vecchio e successivamente utilizzare lo strumento per migrare i corsi al nuovo quadro.';
$string['findingcoursecompetencies'] = 'Individuazione delle competenze del corso';
$string['findingmodulecompetencies'] = 'Individuazione delle competenze delle attività e delle risorse';
$string['frameworks'] = 'Quadri';
$string['limittothese'] = 'Corsi da elaborare';
$string['lpmigrate:frameworksmigrate'] = 'Migrare quadri';
$string['migrateframeworks'] = 'Migrazione quadri';
$string['migratefrom'] = 'Migra da';
$string['migratefrom_help'] = 'Seleziona il quadro di partenza.';
$string['migratemore'] = 'Ulteriore migrazione';
$string['migrateto'] = 'a';
$string['migrateto_help'] = 'Seleziona il quadro di destinazione della migrazione. Il quadro deve essere visibile, altrimenti non potrà essere selezionato.';
$string['migratingcourses'] = 'La migrazione dei corsi è in svolgimento';
$string['missingmappings'] = 'Mappature mancanti';
$string['performmigration'] = 'Esegui la migrazione';
$string['pluginname'] = 'Strumento di migrazione delle competenze';
$string['privacy:metadata'] = 'Il plugin "Strumento di migrazione delle competenze" non memorizza dati personali.';
$string['results'] = 'Risultati';
$string['startdatefrom'] = 'Data di inizio del corso';
$string['unmappedin'] = 'Non mappati in {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'Non è stato possibile rimuovere la competenza del corso.';
$string['warningcouldnotremovemodulecompetency'] = 'Non è stato possibile rimuovere la competenza dell\'attività o della risorsa.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'La competenza è già esistente nel corso destinazione.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'La competenza è già esistente nella risorsa o attività destinazione.';
$string['warnings'] = 'Avvertenze';
