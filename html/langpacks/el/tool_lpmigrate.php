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
 * Strings for component 'tool_lpmigrate', language 'el', version '3.11'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'Μαθήματα που επιτρέπονται';
$string['allowedcourses_help'] = 'Επιλέξτε μαθήματα για μετεγκατάσταση (μεταφορά/μετατροπή) στο νέο πλαίσιο. Εάν δεν έχει καθοριστεί κανένα μάθημα, τότε όλα τα μαθήματα θα μετεγκατασταθούν.';
$string['continuetoframeworks'] = 'Συνέχεια στα πλαίσια';
$string['coursecompetencymigrations'] = 'Μετεγκαταστάσεις (μεταφορά/μετατροπή) προσόντων μαθήματος';
$string['coursemodulecompetencymigrations'] = 'Μετεγκαταστάσεις (μεταφορά/μετατροπή) δραστηριοτήτων και πόρων προσόντων μαθήματος';
$string['coursemodulesfound'] = 'Δραστηριότητες ή πόροι μαθήματος που βρέθηκαν';
$string['coursesfound'] = 'Μαθήματα που βρέθηκαν';
$string['coursestartdate'] = 'Ημερομηνία έναρξης μαθημάτων';
$string['coursestartdate_help'] = 'Αν ενεργοποιηθεί, τα μαθήματα με ημερομηνία έναρξης πριν από την καθορισμένη ημερομηνία δεν θα μετεγκατασταθούν (μεταφορά/μετατροπή).';
$string['disallowedcourses'] = 'Μαθήματα που δεν επιτρέπονται';
$string['disallowedcourses_help'] = 'Επιλέξτε οποιαδήποτε μαθήματα τα οποία ΔΕΝ πρέπει να μετεγκατασταθούν (μεταφορά/μετατροπή) στο νέο πλαίσιο.';
$string['errorcannotmigratetosameframework'] = 'Δεν είναι δυνατή η μετεγκατάσταση (μεταφορά/μετατροπή) από και προς το ίδιο πλαίσιο (λογισμικού).';
$string['errorcouldnotmapcompetenciesinframework'] = 'Δεν είναι δυνατή η αντιστοίχιση με κάποιο προσόν σε αυτό το πλαίσιο.';
$string['errors'] = 'Σφάλματα';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Σφάλμα κατά τη μετεγκατάσταση (μεταφορά/μετατροπή) ενός προσόντος μαθήματος: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Σφάλμα κατά τη μετεγκατάσταση (μεταφορά/μετατροπή) ενός προσόντος δραστηριότητας ή πόρου: {$a}';
$string['excludethese'] = 'Αποκλεισμός των';
$string['explanation'] = 'Το εργαλείο αυτό μπορεί να χρησιμοποιηθεί για ενημέρωση ενός πλαισίου προσόντων σε μια νέα έκδοση. Αναζητά προσόντα σε μαθήματα και δραστηριότητες χρησιμοποιώντας το παλαιότερο πλαίσιο, και ενημερώνει τους συνδέσμους να δείχνουν προς το νέο πλαίσιο. Δεν συνιστάται η επεξεργασία του παλαιού συνόλου προσόντων απευθείας, καθώς αυτό θα τροποποιούσε όλα τα προσόντα που έχουν ήδη προστεθεί στα σχέδια μάθησης των χρηστών. Τυπικά θα κάνατε εισαγωγή της νέας έκδοσης ενός πλαισίου, θα κρύβατε το παλαιό πλαίσιο και μετά θα χρησιμοποιούσατε αυτό το εργαλείο για τη μετεγκατάσταση (μεταφορά/μετατροπή) νέων μαθημάτων στο νέο πλαίσιο.';
$string['findingcoursecompetencies'] = 'Εύρεση προσόντων μαθήματος';
$string['findingmodulecompetencies'] = 'Εύρεση προσόντων δραστηριοτήτων και πόρων';
$string['frameworks'] = 'Πλαίσια';
$string['limittothese'] = 'Συμπερίληψη μόνο των';
$string['lpmigrate:frameworksmigrate'] = 'Μετεγκατάσταση πλαισίων';
$string['migrateframeworks'] = 'Μετεγκατάσταση πλαισίων';
$string['migratefrom'] = 'Μετεγκατάσταση από';
$string['migratefrom_help'] = 'Επιλέξτε το παλαιότερο πλαίσιο που χρησιμοποιείται σήμερα.';
$string['migratemore'] = 'Μετεγκατάσταση (μεταφορά/μετατροπή) και άλλων';
$string['migrateto'] = 'Μετεγκατάσταση σε';
$string['migrateto_help'] = 'Επιλέξτε τη νεότερη έκδοση του πλαισίου. Είναι δυνατό να επιλέξετε ένα πλαίσιο μόνο αν δεν είναι κρυφό.';
$string['migratingcourses'] = 'Μετεγκατάσταση (μεταφορά/μετατροπή) μαθημάτων';
$string['missingmappings'] = 'Αντιστοιχίσεις που λείπουν';
$string['performmigration'] = 'Εκτέλεση μετεγκατάστασης';
$string['pluginname'] = 'Εργαλείο μετεγκατάστασης προσόντων';
$string['privacy:metadata'] = 'Το πρόσθετο «Εργαλείο μετεγκατάστασης προσόντων» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['results'] = 'Αποτελέσματα';
$string['startdatefrom'] = 'Ημερομηνία έναρξης από';
$string['unmappedin'] = 'Κατάργηση αντιστοίχισης σε {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'Το προσόν μαθήματος δεν μπορεί να διαγραφεί.';
$string['warningcouldnotremovemodulecompetency'] = 'Το προσόν δραστηριότητας ή πόρου δεν μπορεί να διαγραφεί.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'Το προσόν μαθήματος προορισμού υπάρχει ήδη.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'Το προσόν δραστηριότητας ή πόρου προορισμού υπάρχει ήδη.';
$string['warnings'] = 'Προειδοποιήσεις';
