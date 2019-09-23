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
 * Strings for component 'tool_dbtransfer', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_dbtransfer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'Διαθέσιμα προγράμματα οδήγησης βάσεων δεδομένων για τη μετεγκατάσταση (μεταφορά/μετατροπή)';
$string['cliheading'] = 'Μετεγκατάσταση (μεταφορά/μετατροπή) βάσης δεδομένων - βεβαιωθείτε ότι κανένας δεν έχει πρόσβαση στον εξυπηρετητή κατά τη διάρκεια της μετεγκατάστασης!';
$string['climigrationnotice'] = 'Η μετεγκατάσταση (μεταφορά/μετατροπή) βάσης δεδομένων βρίσκεται σε εξέλιξη, περιμένετε μέχρι να ολοκληρωθεί η μετεγκατάσταση και ο διαχειριστής του εξυπηρετητή να ενημερώσει τις ρυθμίσεις και να διαγράψει το αρχείο $CFG->dataroot/climaintenance.html.';
$string['convertinglogdisplay'] = 'Μετατροπή ενεργειών εμφάνισης αρχείου καταγραφής';
$string['dbexport'] = 'Εξαγωγή βάσης δεδομένων';
$string['dbtransfer'] = 'Μετεγκατάσταση (μεταφορά/μετατροπή) βάσης δεδομένων';
$string['enablemaintenance'] = 'Ενεργοποίηση κατάστασης λειτουργίας συντήρησης';
$string['enablemaintenance_help'] = 'Αυτή η επιλογή ενεργοποιεί την κατάσταση συντήρησης κατά τη διάρκεια και μετά τη μετεγκατάσταση (μεταφορά/μετατροπή) της βάσης δεδομένων και αποτρέπει την πρόσβαση όλων των χρηστών μέχρι να ολοκληρωθεί η μετεγκατάσταση. Σημειώστε ότι ο διαχειριστής πρέπει να διαγράψει χειροκίνητα το αρχείο $CFG->dataroot/climaintenance.html μετά την ενημέρωση των ρυθμίσεων στο config.php για να επανέλθει η κανονική κατάσταση λειτουργίας.';
$string['exportdata'] = 'Εξαγωγή δεδομένων';
$string['notargetconectexception'] = 'Λυπούμαστε, αδυναμία σύνδεσης στη βάση-προορισμό.';
$string['options'] = 'Επιλογές';
$string['pluginname'] = 'Μεταφορά Βάσης Δεδομένων';
$string['privacy:metadata'] = 'Το πρόσθετο «Μεταφορά Βάσης Δεδομένων» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['targetdatabase'] = 'Η βάση δεδομένων στόχος';
$string['targetdatabasenotempty'] = 'Η βάση δεδομένων στόχος δεν πρέπει να περιέχει πίνακες με το συγκεκριμένο πρόθεμα που δίνεται!';
$string['transferdata'] = 'Μεταφορά δεδομένων';
$string['transferdbintro'] = 'Αυτό το σενάριο θα μεταφέρει ολόκληρο το περιεχόμενο αυτής της βάσης δεδομένων σε άλλο εξυπηρετητή βάσης δεδομένων. Χρησιμοποιείται συχνά για τη μετεγκατάσταση (μεταφορά/μετατροπή) δεδομένων σε διαφορετικούς τύπους βάσεων δεδομένων.';
$string['transferdbtoserver'] = 'Μεταφορά αυτής της Moodle βάσης σε άλλο εξυπηρετητή';
$string['transferringdbto'] = 'Γίνεται μεταφορά της {$a->dbtype} βάσης στην {$a->dbname} βάση {$a->dbname} στον Η/Υ {$a->dbhost}';
