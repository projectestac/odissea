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
 * Strings for component 'enrol_meta', language 'el', version '3.8'.
 *
 * @package     enrol_meta
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Προσθήκη σε ομάδα';
$string['coursesort'] = 'Ταξινόμηση λίστας μαθημάτων';
$string['coursesort_help'] = 'Αυτό καθορίζει αν η λίστα με τα μαθήματα που μπορούν να συνδεθούν θα είναι ταξινομημένη με σειρά (π.χ. την σειρά που ορίζεται στη Διαχείριση ιστοτόπου > Μαθήματα > Διαχείριση μαθημάτων και κατηγοριών) ή την αλφαβητική σειρά των μαθημάτων.';
$string['creategroup'] = 'Δημιουργία νέας ομάδας';
$string['defaultgroupnametext'] = '{$a->name} μάθημα {$a->increment}';
$string['enrolmetasynctask'] = 'Εργασία συγχρονισμού μετα-εγγραφών';
$string['linkedcourse'] = 'Σύνδεση μαθήματος';
$string['meta:config'] = 'Παραμετροποίηση meta enroll περιπτώσεων';
$string['meta:selectaslinked'] = 'Επιλογή μαθήματος ως μετα-συνδεδεμένου';
$string['meta:unenrol'] = 'Ακύρωση εγγραφής χρηστών σε αναστολή';
$string['nosyncroleids'] = 'Ρόλοι που δεν είναι συγχρονισμένοι';
$string['nosyncroleids_desc'] = 'Από προεπιλογή όλες οι αναθέσεις ρόλων επιπέδου μαθήματος συγχρονίζονται από τα μαθήματα γονείς στα μαθήματα παιδιά. Οι ρόλοι που έχουν επιλεγεί εδώ δεν θα συμπεριληφθούν στη διαδικασία συγχρονισμού. Οι ρόλοι που είναι διαθέσιμοι για συγχρονισμό θα ενημερωθούν στην επόμενη εκτέλεση της εντολής χρονο-προγραμματισμού cron.';
$string['pluginname'] = 'Σύνδεση με επόμενο μάθημα (meta course)';
$string['pluginname_desc'] = 'Η πρόσθετη λειτουργία εγγραφής σε meta course συγχρονίζει εγγραφές και ρόλους σε δύο διαφορετικά μαθήματα.';
$string['privacy:metadata:core_group'] = 'Το πρόσθετο μετα-εγγραφών μπορεί να δημιουργήσει μια νέα ομάδα ή να χρησιμοποιήσει μια υπάρχουσα ομάδα για να προσθέσει όλους τους συμμετέχοντες στο συνδεδεμένο μάθημα.';
$string['syncall'] = 'Συγχρονισμός όλων των εγγεγραμμένων χρηστών';
$string['syncall_desc'] = 'Εάν ενεργοποιηθεί, όλοι οι εγγεγραμμένοι χρήστες συγχρονίζονται, ακόμη και αν δεν έχουν κανένα ρόλο στο γονικό μάθημα. Εάν απενεργοποιηθεί, μόνο οι χρήστες που έχουν τουλάχιστον ένα συγχρονισμένο ρόλο, εγγράφονται στο παιδικό μάθημα.';
