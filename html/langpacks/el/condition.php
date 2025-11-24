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
 * Strings for component 'condition', language 'el', version '4.5'.
 *
 * @package     condition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'Προσθήκη {no} συνθηκών δραστηριότητας στη φόρμα';
$string['addgrades'] = 'Προσθήκη {no} συνθηκών βαθμολογίας στη φόρμα';
$string['adduserfields'] = 'Προσθήκη {no} προϋποθέσεων πεδίου χρήστη στην φόρμα';
$string['availabilityconditions'] = 'Περιορισμός πρόσβασης';
$string['availablefrom'] = 'Επιτρέπεται η πρόσβαση από';
$string['availablefrom_help'] = 'Η διαθεσιμότητα ημερομηνιών από/έως καθορίζει πότε οι μαθητές μπορούν να έχουν πρόσβαση στη δραστηριότητα μέσω ενός συνδέσμου στη σελίδα του μαθήματος.

Η διαφορά μεταξύ των ημερομηνιών από/προς και των ρυθμίσεων διαθεσιμότητας για τη δραστηριότητα είναι ότι εκτός των καθορισμένων ημερομηνιών, η πρόσβαση από/προς αποτρέπει την πρόσβαση εντελώς, ενώ η διαθεσιμότητα επιτρέπει στους μαθητές να δουν την περιγραφή της δραστηριότητας.';
$string['availableuntil'] = 'Επιτρέπεται η πρόσβαση έως';
$string['badavailabledates'] = 'Μη έγκυρες ημερομηνίες. Εάν οριστούν και δύο ημερομηνίες, η ημερομηνία «Επιτρέπεται η πρόσβαση από» πρέπει να είναι πριν από την ημερομηνία «Επιτρέπεται η πρόσβαση από».';
$string['badgradelimits'] = 'Εάν ορίσετε και ανώτατο και κατώτατο όριο βαθμού, το ανώτατο όριο πρέπει να είναι υψηλότερο από το κατώτατο όριο.';
$string['completion_complete'] = 'πρέπει να ολοκληρωθεί';
$string['completion_fail'] = 'πρέπει να ολοκληρωθεί με βαθμό κάτω της βάσης';
$string['completion_incomplete'] = 'πρέπει να μην ολοκληρωθεί';
$string['completion_pass'] = 'πρέπει να ολοκληρωθεί με βαθμό άνω της βάσης';
$string['completioncondition'] = 'Συνθήκη ολοκλήρωσης δραστηριότητας';
$string['completioncondition_help'] = 'Αυτή η ρύθμιση καθορίζει τις συνθήκες ολοκλήρωσης της δραστηριότητας που πρέπει να πληρούνται για να αποκτήσετε πρόσβαση στη δραστηριότητα. Να σημειωθεί ότι πρέπει πρώτα να ενεργοποιηθεί η παρακολούθηση ολοκλήρωσης πριν από τη ρύθμιση κάποιας συνθήκης ολοκλήρωσης δραστηριότητας.

Μπορούν να οριστούν πολλαπλές συνθήκες ολοκλήρωσης δραστηριότητας, εάν είναι επιθυμητό. Αν ναι, η πρόσβαση στη δραστηριότητα θα επιτρέπεται μόνο όταν πληρούνται όλες οι συνθήκες/προϋποθέσεις ολοκλήρωσης δραστηριότητας.';
$string['completionconditionsection'] = 'Προϋπόθεση ολοκλήρωσης δραστηριότητας';
$string['completionconditionsection_help'] = 'Αυτή η ρύθμιση καθορίζει τις συνθήκες ολοκλήρωσης της δραστηριότητας που πρέπει να πληρούνται για την πρόσβαση στην ενότητα. Λάβετε υπόψη ότι η παρακολούθηση ολοκλήρωσης πρέπει πρώτα να οριστεί πριν από τη ρύθμιση μιας συνθήκης/προϋπόθεσης ολοκλήρωσης δραστηριότητας.

Μπορούν να οριστούν πολλαπλές συνθήκες ολοκλήρωσης δραστηριότητας, εάν είναι επιθυμητό. Σε αυτή την περίπτωση, η πρόσβαση στην ενότητα θα επιτρέπεται μόνο όταν πληρούνται ΟΛΕΣ οι συνθήκες ολοκλήρωσης της δραστηριότητας.';
$string['configenableavailability'] = 'Εάν ενεργοποιηθεί, σας επιτρέπει να θέσετε συνθήκες (με βάση ημερομηνία, βαθμό και ολοκλήρωση) οι οποίες θα καθορίζουν εάν επιτρέπεται στους μαθητές η πρόσβαση σε μια δραστηριότητα ή έναν πόρο.';
$string['contains'] = 'περιέχει';
$string['doesnotcontain'] = 'δεν περιέχει';
$string['enableavailability'] = 'Ενεργοποίηση προσβασιμότητας υπό συνθήκες';
$string['endswith'] = 'τελειώνει με';
$string['fielddeclaredmultipletimes'] = 'Δεν μπορείτε να δηλώσετε το ίδιο πεδίο περισσότερες από μία φορές ανά δραστηριότητα.';
$string['grade_atleast'] = 'πρέπει να είναι τουλάχιστον';
$string['grade_upto'] = 'και το πολύ μέχρι';
$string['gradecondition'] = 'Συνθήκη βαθμολογίας';
$string['gradecondition_help'] = 'Αυτή η ρύθμιση καθορίζει τις προϋποθέσεις που έχουν οριστεί για κάθε βαθμό και πρέπει να πληρούνται προκειμένου να αποκτήσετε πρόσβαση στη δραστηριότητα. Μπορούν να καθοριστούν πολλαπλές προϋποθέσεις για τους βαθμούς, αν το επιθυμείτε. Στην περίπτωση αυτή, η δραστηριότητα θα επιτρέψει την πρόσβαση μόνο όταν πληρούνται ΟΛΕΣ οι προϋποθέσεις βαθμού.';
$string['gradeconditionsection'] = 'Προϋπόθεση βαθμού';
$string['gradeconditionsection_help'] = 'Αυτή η ρύθμιση καθορίζει τυχόν συνθήκες βαθμών που πρέπει να πληρούνται για την πρόσβαση στην ενότητα.

Μπορούν να οριστούν πολλαπλές συνθήκες βαθμών εάν είναι επιθυμητό. Αν ναι, η ενότητα θα επιτρέψει την πρόσβαση μόνο όταν πληρούνται ΟΛΕΣ οι συνθήκες βαθμών.';
$string['gradeitembutnolimits'] = 'Πρέπει να εισαγάγετε ένα ανώτατο ή κατώτατο όριο ή και τα δύο.';
$string['gradelimitsbutnoitem'] = 'Πρέπει να επιλέξετε ένα στοιχείο βαθμού.';
$string['gradesmustbenumeric'] = 'Οι ελάχιστοι και οι μέγιστοι βαθμοί πρέπει να είναι αριθμητικοί (ή κενοί).';
$string['groupingnoaccess'] = 'Δεν ανήκετε αυτήν την στιγμή σε μια ομάδα που έχει πρόσβαση σε αυτήν την ενότητα.';
$string['isempty'] = 'είναι άδειο';
$string['isequalto'] = 'είναι ίσο με';
$string['isnotempty'] = 'δεν είναι κενό';
$string['none'] = '(τίποτα)';
$string['notavailableyet'] = 'Δεν είναι ακόμα διαθέσιμο';
$string['requires_completion_0'] = 'Μη διαθέσιμο εκτός και αν η δραστηριότητα <strong>{$a}</strong> δεν έχει ολοκληρωθεί.';
$string['requires_completion_1'] = 'Μη διαθέσιμο μέχρι η δραστηριότητα <strong>{$a}</strong> να ολοκληρωθεί.';
$string['requires_completion_2'] = 'Μη διαθέσιμο μέχρι η δραστηριότητα <strong>{$a}</strong> να ολοκληρωθεί επιτυχώς.';
$string['requires_completion_3'] = 'Μη διαθέσιμο εκτός και αν η δραστηριότητα <strong>{$a}</strong> έχει ολοκληρωθεί ανεπιτυχώς.';
$string['requires_date'] = 'Μη διαθέσιμο πριν από τις {$a}.';
$string['requires_date_before'] = 'Μη διαθέσιμο μετά τις {$a}.';
$string['requires_date_both'] = 'Διαθέσιμο από {$a->from} έως {$a->until}.';
$string['requires_date_both_single_day'] = 'Διαθέσιμο στις {$a}.';
$string['requires_grade_any'] = 'Μη διαθέσιμο μέχρι να βαθμολογηθείτε στο <strong>{$a}</strong>.';
$string['requires_grade_max'] = 'Μη διαθέσιμο μέχρι να βαθμολογηθείτε κατάλληλα στο <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'Μη διαθέσιμο μέχρι να βαθμολογηθείτε κατάλληλα στο <strong>{$a}</strong>.';
$string['requires_grade_range'] = 'Μη διαθέσιμο μέχρι να βαθμολογηθείτε κατάλληλα στο <strong>{$a}</strong>.';
$string['requires_grouping'] = 'Διαθέσιμο μόνο για την ομαδοποίηση <strong>{$a}</strong>.';
$string['requires_user_field_contains'] = 'Δεν είναι διαθέσιμο εκτός εάν το δικό σας πεδίο <strong>{$a->field}</strong> περιέχει <strong>{$a->value}</strong>.';
$string['requires_user_field_doesnotcontain'] = 'Δεν είναι διαθέσιμο εάν το δικό σας πεδίο <strong>{$a->field}</strong> περιέχει <strong>{$a->value}</strong>.';
$string['requires_user_field_endswith'] = 'Δεν είναι διαθέσιμο εκτός εάν το δικό σας πεδίο <strong>{$a->field}</strong> τελειώνει με <strong>{$a->value}</strong>.';
$string['requires_user_field_isempty'] = 'Δεν είναι διαθέσιμο εκτός εάν το δικό σας πεδίο <strong>{$a->field}</strong> είναι κενό.';
$string['requires_user_field_isequalto'] = 'Δεν είναι διαθέσιμο εκτός εάν το δικό σας πεδίο <strong>{$a->field}</strong> ισούται με <strong>{$a->value}</strong>.';
$string['requires_user_field_isnotempty'] = 'Δεν είναι διαθέσιμο εάν το δικό σας πεδίο <strong>{$a->field}</strong> είναι κενό.';
$string['requires_user_field_startswith'] = 'Δεν είναι διαθέσιμο εκτός εάν το δικό σας πεδίο <strong>{$a->field}</strong> ξεκινά με <strong>{$a->value}</strong>.';
$string['showavailability'] = 'Ενώ εμποδίζεται η πρόσβαση';
$string['showavailability_hide'] = 'Πλήρης απόκρυψη δραστηριότητας στο μάθημα και το βαθμολόγιο';
$string['showavailability_show'] = 'Εμφάνιση ως μη διαθέσιμης, με πληροφορίες';
$string['showavailabilitysection'] = 'Πριν επιτραπεί η πρόσβαση στην ενότητα';
$string['showavailabilitysection_hide'] = 'Πλήρης απόκρυψη ενότητας';
$string['showavailabilitysection_show'] = 'Εμφάνιση ενότητας γκριζαρισμένης, με πληροφορίες περιορισμού';
$string['startswith'] = 'ξεκινάει με';
$string['userfield'] = 'Πεδίο χρήστη';
$string['userfield_help'] = 'Μπορείτε να περιορίσετε την πρόσβαση βάσει οποιουδήποτε πεδίου από το προφίλ χρήστη.';
$string['userrestriction_hidden'] = 'Περιορισμένη (εντελώς κρυμμένη, χωρίς μήνυμα): {$a}';
$string['userrestriction_visible'] = 'Περιορισμένη: {$a}';
