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
 * Strings for component 'enrol_self', language 'el', branch 'MOODLE_32_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortnonmemberinfo'] = 'Μόνο μέλη της ομάδας χρηστών \'{$a}\' μπορούν να αυτο-εγγραφούν.';
$string['cohortonly'] = 'Μόνο μέλη ομάδας χρηστών';
$string['cohortonly_help'] = 'Η αυτο-εγγραφή μπορεί να περιορίζεται στα μέλη μόνο μιας συγκεκριμένης ομάδας. Σημειώστε ότι η αλλαγή αυτής της ρύθμισης δεν έχει καμία επίδραση στις υπάρχουσες εγγραφές.';
$string['customwelcomemessage'] = 'Προσαρμοσμένο μήνυμα καλωσορίσματος';
$string['customwelcomemessage_help'] = 'Ένα προσαρμοσμένο μήνυμα καλωσορίσματος μπορεί να προστεθεί ως απλό κείμενο ή μορφή Moodle-auto, που μπορεί να περιλαμβάνει ετικέτες HTML και ετικέτες multi-lang.

Τα παρακάτω σύμβολα υποκατάστασης (placeholders) μπορούν να περιλαμβάνονται στο μήνυμα:

* Όνομα μαθήματος {$a->coursename}
* Σύνδεσμος στη σελίδα του προφίλ του χρήστη {$a->profileurl}
* Email χρήστη{$a->email}
* Πλήρες όνομα χρήστη {$a->fullname}';
$string['defaultrole'] = 'Προεπιλεγμένη ανάθεση ρόλου';
$string['defaultrole_desc'] = 'Επιλέξτε τον ρόλο, ο οποίος θα πρέπει να ανατεθεί στους χρήστες κατά τη διάρκεια της αυτό-εγγραφής';
$string['enrolenddate'] = 'Ημερομηνία Λήξης';
$string['enrolenddaterror'] = 'Η ημερομηνία λήξης εγγραφών δεν μπορεί να είναι νωρίτερα από την ημερομηνία έναρξης';
$string['enrolme'] = 'Εγγραφή';
$string['enrolperiod'] = 'Διάρκεια εγγραφής';
$string['enrolstartdate'] = 'Ημερομηνία έναρξης';
$string['expiredaction_help'] = 'Επιλέξτε την ενέργεια που θα εκτελεστεί όταν λήξει η εγγραφή του χρήστη. Παρακαλώ σημειώστε ότι ορισμένα δεδομένα χρήστη και ρυθμίσεις εκκαθαρίζονται από το μάθημα κατά την ακύρωση εγγραφής στο μάθημα.';
$string['groupkey'] = 'Χρήση ομαδικών κλειδιών εγγραφής';
$string['groupkey_desc'] = 'Χρησιμοποιήστε ομαδικά κλειδιά εγγραφής από προεπιλογή.';
$string['longtimenosee'] = 'Εγγραφή ανενεργή μετά από';
$string['longtimenosee_help'] = 'Αν οι χρήστες δεν έχουν πρόσβαση σε ένα μάθημα για μεγάλο χρονικό διάστημα, τότε απεγγράφονται αυτόματα. Αυτή η παράμετρος καθορίζει την προθεσμία αυτή.';
$string['maxenrolled'] = 'Μέγιστος αριθμός εγγεγραμμένων χρηστών';
$string['maxenrolled_help'] = 'Καθορίζει τον μέγιστο αριθμό χρηστών που μπορούν να αυτό-εγγραφούν. Το 0 σημαίνει ότι δεν υπάρχει όριο.';
$string['nopassword'] = 'Δεν χρειάζεται κλειδί εγγραφής.';
$string['password'] = 'Κλειδί εγγραφής';
$string['passwordinvalid'] = 'Εσφαλμένο κλειδί εγγραφής. Παρακαλώ προσπαθήστε ξανά';
$string['passwordinvalidhint'] = 'Αυτό το κλειδί εγγραφής ήταν λάθος, παρακαλώ δοκιμάστε ξανά';
$string['pluginname'] = 'Αυτό-εγγραφή';
$string['pluginname_desc'] = 'Η πρόσθετη λειτουργία της αυτό-εγγραφής επιτρέπει στους χρήστες να επιλέξουν σε ποιά μαθήματα επιθυμούν να συμμετέχουν. Τα μαθήματα μπορεί να προστατεύονατι από ένα κλειδί εγγραφής. Εσωτερικά η εγγραφή γίνεται μέσω της πρόσθετης λειτουργίας χειροκίνητης εγγραφής, η οποία πρέπει να ενεργοποιηθεί στο ίδιο μάθημα.';
$string['requirepassword'] = 'Απαιτείται κλειδί εγγραφής';
$string['requirepassword_desc'] = 'Απαιτείται κλειδί εγγραφής στα νέα μαθήματα και αποτρέπεται η αφαίρεση του κλειδιού εγγραφής από τα υπάρχοντα μαθήματα.';
$string['self:config'] = 'Παραμετροποίηση περιπτώσεων αυτό-εγγραφής';
$string['self:manage'] = 'Διαχείρηση εγγεγραμένων χρηστών';
$string['self:unenrol'] = 'Ακύρωση εγγραφής χρηστών στο μάθημα';
$string['self:unenrolself'] = 'Ακύρωση εγγραφής στο μάθημα';
$string['sendcoursewelcomemessage'] = 'Αποστολή μηνύματος καλωσορίσματος σε επίπεδο μαθήματος';
$string['sendcoursewelcomemessage_help'] = 'Εάν ενεργοποιηθεί, οι χρήστες λαμβάνουν ένα μήνυμα καλωσορίσματος όταν εγγράφονται μόνοι τους σε ένα μάθημα.';
$string['showhint'] = 'Εμφάνιση υπόδειξης';
$string['showhint_desc'] = 'Εμφάνιση πρώτου γράμματος από το κλειδί πρόσβασης επισκέπτη.';
$string['status_help'] = 'Αν είναι ενεργοποιημένη μαζί με την επιλογή \'Να επιτρέπονται νέες εγγραφές\', μόνο χρήστες που έχουν εγγραφεί από μόνοι τους προηγουμένως μπορούν να έχουν πρόσβαση στο μάθημα. Αν απενεργοποιηθεί, αυτή η μέθοδος εγγραφής απενεργοποιείται στην πράξη, αφού όλες οι υπάρχουσες εγγραφές αναστέλλονται και δεν μπορούν να εγγραφούν από μόνοι τους νέοι χρήστες.';
$string['unenrol'] = 'Ακύρωση εγγραφής χρήστη';
$string['unenrolselfconfirm'] = 'Είστε βεβαιοι ότι θέλετε να ακυρώσετε την εγγραφή σας στο μάθημα "{$a}";';
$string['unenroluser'] = 'Είστε βεβαιοι ότι θέλετε να ακυρώσετε την εγγραφή του χρήστη "{$a->user}" στο μάθημα "{$a}";';
$string['usepasswordpolicy'] = 'Χρήση πολιτικής κωδικού πρόσβασης';
$string['usepasswordpolicy_desc'] = 'Χρησιμοποιήστε το πρότυπο της πολιτικής κωδικού πρόσβασης για τα κλειδιά εγγραφής.';
$string['welcometocourse'] = 'Καλωσήλθατε στο {$a}';
$string['welcometocoursetext'] = 'Καλώς ήρθατε στο {$a->coursename}!

Ένα από τα πρώτα πράγματα που θα πρέπει να κάνετε είναι να επεξεργαστείτε τη σελίδα
με το προφίλ σας μέσα σε αυτό το μάθημα ώστε να μάθουμε περισσότερα για εσάς:

  {$a->profileurl}';
