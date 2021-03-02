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
 * Strings for component 'editor_atto', language 'el', version '3.8'.
 *
 * @package     editor_atto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autosavefailed'] = 'Δεν ήταν δυνατή η σύνδεση με τον εξυπηρετητή. Αν υποβάλετε αυτή τη σελίδα τώρα, οι αλλαγές ενδέχεται να χαθούν.';
$string['autosavefrequency'] = 'Συχνότητα αυτόματης αποθήκευσης';
$string['autosavefrequency_desc'] = 'Αυτός είναι ο αριθμός των δευτερολέπτων μεταξύ των προσπαθειών αυτόματης αποθήκευσης. Ο επεξεργαστής κειμένου atto θα αποθηκεύσει αυτόματα το κείμενο στον επεξεργαστή κειμένου σύμφωνα με αυτή τη ρύθμιση, έτσι ώστε το κείμενο να μπορεί να επαναφερθεί αυτόματα όταν ο ίδιος χρήστης επιστρέφει στην ίδια φόρμα.';
$string['autosaves'] = 'Πληροφορίες αυτόματης αποθήκευσης επεξεργαστή κειμένου';
$string['autosavesucceeded'] = 'Το προσχέδιο αποθηκεύτηκε.';
$string['editor_command_keycode'] = 'Cmd + {$a}';
$string['editor_control_keycode'] = 'Ctrl + {$a}';
$string['errorcannotparseline'] = 'Η γραμμή «{$a}» δεν έχει το σωστό μορφότυπο.';
$string['errorgroupisusedtwice'] = 'Η ομάδα «{$a}» ορίζεται δύο φορές· τα ονόματα ομάδων πρέπει να είναι μοναδικά.';
$string['errornopluginsorgroupsfound'] = 'Δεν βρέθηκαν πρόσθετα ή ομάδες συμμετεχόντων· παρακαλούμε προσθέστε μερικά πρόσθετα και ομάδες συμμετεχόντων.';
$string['errorpluginisusedtwice'] = 'Το πρόσθετο «{$a}» χρησιμοποιείται δύο φορές· τα πρόσθετα μπορούν να οριστούν μόνο μία φορά.';
$string['errorpluginnotfound'] = 'Το πρόσθετο «{$a}» δεν μπορεί να χρησιμοποιηθεί· δεν φαίνεται να έχει εγκατασταθεί.';
$string['errortextrecovery'] = 'Δυστυχώς δεν ήταν δυνατή η επαναφορά της έκδοσης προσχεδίου.';
$string['infostatus'] = 'Πληροφορίες';
$string['plugin_title_shortcut'] = '{$a->title} [{$a->shortcut}]';
$string['pluginname'] = 'Επεξεργαστής HTML Atto';
$string['privacy:metadata:database:atto_autosave'] = 'Αποθηκεύτηκαν αυτόματα προσχέδια του επεξεργαστή κειμένου.';
$string['privacy:metadata:database:atto_autosave:drafttext'] = 'Το κείμενο που αποθηκεύτηκε.';
$string['privacy:metadata:database:atto_autosave:timemodified'] = 'Πότε τροποποιήθηκε το περιεχόμενο.';
$string['privacy:metadata:database:atto_autosave:userid'] = 'Το αναγνωριστικό του χρήστη του οποίου τα δεδομένα αποθηκεύτηκαν.';
$string['recover'] = 'Ανάκτηση';
$string['settings'] = 'Ρυθμίσεις της γραμμής εργαλείων Atto';
$string['subplugintype_atto'] = 'Πρόσθετο Atto';
$string['subplugintype_atto_plural'] = 'Πρόσθετα Atto';
$string['taskautosavecleanup'] = 'Διαγραφή των αυτόματα αποθηκευμένων προσχεδίων που έχουν λήξει';
$string['textrecovered'] = 'Μια έκδοση προσχεδίου αυτού του κειμένου επαναφέρθηκε αυτόματα.';
$string['toolbarconfig'] = 'Ρυθμίσεις γραμμής εργαλείων';
$string['toolbarconfig_desc'] = 'Η λίστα των πρόσθετων και η σειρά που εμφανίζονται μπορούν να ρυθμιστούν εδώ. Η ρύθμιση αποτελείται από ομάδες (μία ανά γραμμή) ακολουθούμενη από την διατεταγμένη λίστα των πρόσθετων ((με τη σειρά που θέλουμε)) για αυτήν την ομάδα. Η ομάδα διαχωρίζεται από τις προσθήκες με ένα σήμα ισότητας και τα πρόσθετα χωρίζονται με κόμματα. Τα ονόματα ομάδων πρέπει να είναι μοναδικά και πρέπει να εκφράζουν τα κοινά χαρακτηριστικά των κουμπιών. Τα ονόματα των κουμπιών και των ομάδων δεν πρέπει να επαναλαμβάνονται και μπορεί να περιέχουν μόνο αλφαριθμητικούς χαρακτήρες.';
$string['warningstatus'] = 'Προειδοποίηση';
