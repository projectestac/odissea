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
 * Strings for component 'block_activity_results', language 'el', version '4.5'.
 *
 * @package     block_activity_results
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_results:addinstance'] = 'Προσθήκη νέου μπλοκ αποτελεσμάτων δραστηριότητας';
$string['bestgrade'] = 'Ο υψηλότερος βαθμός:';
$string['bestgrades'] = 'Οι {$a} υψηλότεροι βαθμοί:';
$string['bestgroupgrade'] = 'Η ομάδα με τον υψηλότερο μέσο όρο:';
$string['bestgroupgrades'] = 'Οι {$a} ομάδες με τον υψηλότερο μέσο όρο:';
$string['config_decimalplaces'] = 'Δεκαδικές θέσεις προς εμφάνιση';
$string['config_format_absolute'] = 'Απόλυτοι αριθμοί';
$string['config_format_fraction'] = 'Κλάσματα';
$string['config_format_percentage'] = 'Ποσοστά';
$string['config_grade_format'] = 'Εμφάνιση βαθμών ως';
$string['config_name_format'] = 'Ιδιωτικότητα αποτελεσμάτων';
$string['config_names_anon'] = 'Ανώνυμα αποτελέσματα';
$string['config_names_full'] = 'Εμφάνιση πλήρων ονομάτων';
$string['config_names_id'] = 'Εμφάνιση μόνο αναγνωριστικών αριθμών';
$string['config_no_activities_in_course'] = 'Δεν υπάρχουν ακόμη δραστηριότητες σε αυτό το μάθημα.';
$string['config_select_activity'] = 'Από ποια δραστηριότητα θα εμφανίζει αποτελέσματα αυτό το μπλοκ;';
$string['config_show_best'] = 'Πόσοι από τους υψηλότερους βαθμούς να εμφανίζονται (0 για απενεργοποίηση);';
$string['config_show_worst'] = 'Πόσοι από τους χαμηλότερους βαθμούς να εμφανίζονται (0 για απενεργοποίηση);';
$string['config_use_groups'] = 'Εμφάνιση ομάδων αντί για μαθητές (μόνο αν η δραστηριότητα υποστηρίζει ομάδες);';
$string['configuredtoshownothing'] = 'Αυτή τη στιγμή, οι ρυθμίσεις αυτού του μπλοκ δεν επιτρέπουν την εμφάνιση οποιωνδήποτε αποτελεσμάτων.';
$string['defaultdecimalplaces'] = 'Δεκαδικές θέσεις';
$string['defaultdecimalplaces_desc'] = 'Αριθμός δεκαδικών θέσεων για εμφάνιση από προεπιλογή';
$string['defaultgradedisplay'] = 'Εμφάνιση βαθμών ως';
$string['defaultgradedisplay_desc'] = 'Πώς πρέπει να εμφανίζονται οι βαθμοί από προεπιλογή;';
$string['defaulthighestgrades'] = 'Προεπιλογή υψηλότερων βαθμών που θα εμφανίζονται';
$string['defaulthighestgrades_desc'] = 'Πόσοι από τους υψηλότερους βαθμούς να εμφανίζονται από προεπιλογή;';
$string['defaultlowestgrades'] = 'Οι προεπιλεγμένοι χαμηλότεροι βαθμοί εμφανίζονται';
$string['defaultlowestgrades_desc'] = 'Πόσοι από τους χαμηλότερους βαθμούς να εμφανίζονται από προεπιλογή;';
$string['defaultnameoptions'] = 'Ιδιωτικότητα αποτελεσμάτων';
$string['defaultnameoptions_desc'] = 'Πώς πρέπει να αναγνωρίζονται οι μαθητές από προεπιλογή;';
$string['defaultshowgroups'] = 'Προεπιλογή εμφάνισης ομάδων';
$string['defaultshowgroups_desc'] = 'Εμφάνιση ομάδων αντί για μαθητές από προεπιλογή (μόνο αν η δραστηριότητα υποστηρίζει ομάδες)';
$string['error_emptyactivityid'] = 'Παρακαλούμε, ρυθμίστε αυτό το μπλοκ και επιλέξτε από ποια δραστηριότητα θα εμφανίζονται τα αποτελέσματα.';
$string['error_emptyactivityrecord'] = 'Σφάλμα: η επιλεγμένη δραστηριότητα δεν υπάρχει στη βάση δεδομένων.';
$string['error_nogroupsexist'] = 'Σφάλμα: το μπλοκ έχει οριστεί για να εμφανίζει βαθμούς σε κατάσταση λειτουργίας ομάδας, αλλά δεν έχουν οριστεί ομάδες.';
$string['error_unsupportedgradetype'] = 'Σφάλμα: Η επιλεγμένη δραστηριότητα χρησιμοποιεί μια μέθοδο βαθμολόγησης που δεν υποστηρίζεται από αυτό το μπλοκ.';
$string['notyetgraded'] = 'Δεν έχει βαθμολογηθεί ακόμα';
$string['pluginname'] = 'Αποτελέσματα δραστηριότητας';
$string['privacy:metadata'] = 'Το μπλοκ αποτελεσμάτων Δραστηριότητας εμφανίζει μόνο δεδομένα που έχουν αποθηκευτεί σε άλλες τοποθεσίες.';
$string['unknown'] = 'Άγνωστη κλίμακα';
$string['worstgrade'] = 'Ο χαμηλότερος βαθμός:';
$string['worstgrades'] = 'Οι {$a} χαμηλότεροι βαθμοί:';
$string['worstgroupgrade'] = 'Η ομάδα με τον χαμηλότερο μέσο όρο:';
$string['worstgroupgrades'] = 'Οι {$a} ομάδες με τον χαμηλότερο μέσο όρο:';
