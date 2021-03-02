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
 * Strings for component 'workshopallocation_random', language 'el', version '3.8'.
 *
 * @package     workshopallocation_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'Προσθέστε αυτο-αξιολογήσεις';
$string['allocationaddeddetail'] = 'Νέα αξιολόγηση: Ο/Η <strong>{$a->reviewername}</strong> είναι εξεταστής του <strong>{$a->authorname}</strong>';
$string['allocationdeallocategraded'] = 'Δεν είναι δυνατή η ακύρωση εκχώρησης της ήδη βαθμολογημένης αξιολόγησης... εξεταστής: <strong>{$a->reviewername}</strong>, συγγραφέας υποβολής: <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'Επαναχρησιμοποίηση αξιολόγησης: Ο/Η <strong>{$a->reviewername}</strong> διατηρήθηκε ως εξεταστής του <strong>{$a->authorname}</strong>';
$string['allocationsettings'] = 'Ρυθμίσεις εκχώρησης';
$string['assessmentdeleteddetail'] = 'Ακύρωση εκχώρησης αξιολόγησης: Ο/Η <strong>{$a->reviewername}</strong> δεν είναι πλέον εξεταστής του/της <strong>{$a->authorname}</strong>';
$string['assesswosubmission'] = 'Οι συμμετέχοντες μπορούν να αξιολογήσουν χωρίς να έχουν υποβάλει τίποτα';
$string['confignumofreviews'] = 'Προεπιλεγμένος αριθμός υποβολών που εκχωρούνται τυχαία';
$string['excludesamegroup'] = 'Αποτρέψτε την εξέταση από ομότιμους (συναδέλφους) από την ίδια ομάδα';
$string['noallocationtoadd'] = 'Καμία εκχώρηση για να προστεθεί';
$string['nogroupusers'] = '<p>Προειδοποίηση: Εάν το εργαστήριο βρίσκεται σε λειτουργία «ορατές ομάδες» ή «ξεχωριστές ομάδες», τότε οι χρήστες ΠΡΕΠΕΙ να είναι μέρος τουλάχιστον μιας ομάδας για να τους εκχωρηθούν αξιολογήσεις από ομότιμους χρήστες με αυτό το εργαλείο. Οι χρήστες που δεν είναι μέλη ομάδας μπορούν πάντως να λάβουν νέες αυτο-αξιολογήσεις ή να καταργήσουν υπάρχουσες αξιολογήσεις.</p>
<p>Αυτοί οι χρήστες δεν βρίσκονται αυτήν τη στιγμή σε ομάδα: {$a}</p>';
$string['numofdeallocatedassessment'] = 'Ακύρωση εκχώρησης {$a} αξιολογήσεων/-όγησης';
$string['numofrandomlyallocatedsubmissions'] = 'Τυχαία ανάθεση {$a} εκχωρήσεων...';
$string['numofreviews'] = 'Αριθμός αξιολογήσεων';
$string['numofselfallocatedsubmissions'] = 'Αυτο-εκχώρηση {$a} υποβολών (-ής)...';
$string['numperauthor'] = 'ανά υποβολή';
$string['numperreviewer'] = 'ανά εξεταστή';
$string['pluginname'] = 'Τυχαία εκχώρηση';
$string['privacy:metadata'] = 'Το πρόσθετο «Τυχαία εκχώρηση» δεν αποθηκεύει κανένα προσωπικό δεδομένο. Τα πραγματικά προσωπικά δεδομένα σχετικά με το ποιος πρόκειται να αξιολογήσει ποιόν, αποθηκεύονται από το ίδιο το άρθρωμα Εργαστηρίου και αποτελούν βάση για την εξαγωγή των λεπτομερειών αξιολόγησης.';
$string['randomallocationdone'] = 'Η τυχαία εκχώρηση ολοκληρώθηκε';
$string['removecurrentallocations'] = 'Ακύρωση τρεχουσών εκχωρήσεων';
$string['resultnomorepeers'] = 'Δεν υπάρχουν άλλοι διαθέσιμοι ομότιμοι';
$string['resultnomorepeersingroup'] = 'Δεν υπάρχουν άλλοι ομότιμοι χρήστες διαθέσιμοι σε αυτή τη χωριστή ομάδα';
$string['resultnotenoughpeers'] = 'Δεν υπάρχουν αρκετοί διαθέσιμοι ομότιμοι';
$string['resultnumperauthor'] = 'Προσπάθεια εκχώρησης {$a} αξιολογήσεων ανά συγγραφέα...';
$string['resultnumperreviewer'] = 'Προσπάθεια εκχώρησης {$a} αξιολογήσεων ανά εξεταστή...';
$string['stats'] = 'Στατιστικά τρεχουσών εκχωρήσεων';
