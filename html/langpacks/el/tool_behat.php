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
 * Strings for component 'tool_behat', language 'el', version '4.1'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Αυτό το διαχειριστικό εργαλείο βοηθά τους διαχειριστές και τους δημιουργούς δοκιμών να δημιουργήσουν αρχεία .feature που περιγράφουν τις λειτουργίες του Moodle να τις εκτελούν αυτόματα. Λίστα με τους διαθέσιμους ορισμούς βημάτων που χρησιμοποιούνται στα αρχεία .feature παρατίθεται παρακάτω.';
$string['allavailablesteps'] = 'Όλοι οι διαθέσιμοι ορισμοί βημάτων';
$string['errorbehatcommand'] = 'Σφάλμα κατά την εκτέλεση της εντολής behat από τη γραμμή εντολών. Δοκιμάστε να εκτελέσετε «{$a} --help» χειροκίνητα από τη γραμμή εντολών για να μάθετε περισσότερα σχετικά με το πρόβλημα.';
$string['errorcomposer'] = 'Δεν υπάρχουν εγκατεστημένες εξαρτήσεις συνθέτη.';
$string['errordataroot'] = '$CFG->behat_dataroot δεν ορίστηκε ή έχει άκυρη τιμή.';
$string['errorsetconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix και $CFG->behat_wwwroot πρέπει να οριστούν στο config.php.';
$string['erroruniqueconfig'] = 'Οι τιμές $CFG->behat_dataroot, $CFG->behat_prefix και $CFG->behat_wwwroot πρέπει να είναι διαφορετικές από τις τιμές $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot και $CFG->phpunit_prefix.';
$string['fieldvalueargument'] = 'Παράμετροι τιμής πεδίου';
$string['fieldvalueargument_help'] = 'Αυτό το όρισμα πρέπει να συμπληρωθεί με μια τιμή πεδίου. Υπάρχουν πολλοί τύποι πεδίων, που συμπεριλαμβάνουν απλούς όπως πλαίσια επιλογής, επιλογές ή περιοχές κειμένου και πολύπλοκους, όπως επιλογείς ημερομηνίας. Μπορείτε να δείτε την τεκμηρίωση ανάπτυξης λογισμικού για τις <a href="https://docs.moodle.org/dev/Acceptance_testing" target="_blank">Δοκιμές αποδοχής</a> για λεπτομέρειες σχετικά με τις αναμενόμενες τιμές πεδίου.';
$string['giveninfo'] = 'Δεδομένο. Διεργασίες για τη ρύθμιση του περιβάλλοντος';
$string['infoheading'] = 'Πληροφορίες';
$string['installinfo'] = 'Διαβάστε {$a} για πληροφορίες εγκατάστασης και εκτέλεσης δοκιμών';
$string['newstepsinfo'] = 'Διαβάστε {$a} για πληροφορίες σχετικά με το πως να προσθέσετε νέους ορισμούς βημάτων';
$string['newtestsinfo'] = 'Διαβάστε {$a} για πληροφορίες σχετικά με το πως να δημιουργήσετε νέες δοκιμές';
$string['nostepsdefinitions'] = 'Δεν υπάρχουν ορισμοί βημάτων που να ταιριάζουν σε αυτά τα φίλτρα';
$string['pluginname'] = 'Δοκιμή αποδοχής';
$string['privacy:metadata'] = 'Το πρόσθετο «Δοκιμές αποδοχής» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['stepsdefinitionscomponent'] = 'Περιοχή';
$string['stepsdefinitionscontains'] = 'Περιλαμβάνει';
$string['stepsdefinitionsfilters'] = 'Ορισμοί βημάτων';
$string['stepsdefinitionstype'] = 'Τύπος';
$string['theninfo'] = 'Τότε. Έλεγχοι για εξασφάλιση ότι τα αποτελέσματα είναι τα αναμενόμενα';
$string['unknownexceptioninfo'] = 'Εμφανίστηκε ένα πρόβλημα με το Selenium ή τον περιηγητή σας. Παρακαλούμε βεβαιωθείτε ότι χρησιμοποιείτε την τελευταία έκδοση του Selenium. Σφάλμα:';
$string['viewsteps'] = 'Φίλτρο';
$string['warndirrootconfigfound'] = 'Βρέθηκε ένα αρχείο ρυθμίσεων στο {$a}. Αυτό το αρχείο δεν ενημερώνεται αυτόματα και μπορεί να γίνει ακατάλληλο για χρήση. Σας συνιστούμε να καταργήσετε αυτό το αρχείο.';
$string['wheninfo'] = 'Όταν. Ενέργεια που προκαλεί ένα γεγονός';
$string['wrongbehatsetup'] = 'Κάτι συμβαίνει με τη ρύθμιση behat και έτσι δεν μπορούν να εισαχθούν ορισμοί βημάτων: <b>{$a->errormsg}</b><br/><br/>Παρακαλούμε, ελέγξτε:<ul>
<li>$CFG->behat_dataroot, $CFG->behat_prefix and $CFG->behat_wwwroot ορίζονται στο config.php με διαφορετικές τιμές από $CFG->dataroot, $CFG->prefix και $CFG->wwwroot.</li>
<li>Έχετε εκτελέσει «{$a->behatinit}» από τον ριζικό κατάλογο Moodle.</li>
<li>Οι εξαρτήσεις εγκαθίστανται στον προμηθευτή / και το αρχείο {$a->behatcommand} έχει δικαιώματα εκτέλεσης.</li></ul>';
