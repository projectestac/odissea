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
 * Strings for component 'report_performance', language 'el', version '4.4'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Αυτοματοποιημένη δημιουργία αντιγράφων ασφαλείας';
$string['check_backup_comment_disable'] = 'Η απόδοση ενδέχεται να επηρεαστεί κατά τη διάρκεια της διαδικασίας δημιουργίας αντιγράφων ασφαλείας. Εάν ενεργοποιηθεί, τα αντίγραφα ασφαλείας πρέπει να χρονοπρογραμματιστούν για ώρες εκτός αιχμής.';
$string['check_backup_comment_enable'] = 'Η απόδοση ενδέχεται να επηρεαστεί κατά τη διάρκεια της διαδικασίας δημιουργίας αντιγράφων ασφαλείας. Τα αντίγραφα ασφαλείας πρέπει να χρονοπρογραμματιστούν για ώρες εκτός αιχμής.';
$string['check_backup_details'] = 'Η ενεργοποίηση του αυτοματοποιημένου αντιγράφου ασφαλείας θα δημιουργήσει αυτόματα αρχεία όλων των μαθημάτων του εξυπηρετητή τη στιγμή που καθορίσατε.
<p>Κατά τη διάρκεια αυτής της διαδικασίας, θα καταναλώνονται περισσότεροι πόροι εξυπηρετητή και ενδέχεται να επηρεάζεται η απόδοση.</p>';
$string['check_cachejs_comment_disable'] = 'Αν ενεργοποιηθεί, βελτιώνεται η ταχύτητα φόρτωσης σελίδας';
$string['check_cachejs_comment_enable'] = 'Αν απενεργοποιηθεί, η σελίδα ενδέχεται να φορτώνεται αργά.';
$string['check_cachejs_details'] = 'Η αποθήκευση σε κρυφή μνήμη και η συμπίεση της Javascript βελτιώνει σημαντικά την ταχύτητα φόρτωσης σελίδας. Συνιστάται ένθερμα για ιστοτόπους παραγωγής.';
$string['check_dbschema_errors'] = 'Το σχήμα βάσης δεδομένων δεν είναι ευθυγραμμισμένο.';
$string['check_dbschema_name'] = 'Έλεγχος σχήματος βάσης δεδομένων';
$string['check_dbschema_ok'] = 'Το σχήμα βάσης δεδομένων είναι σωστό.';
$string['check_debugmsg_comment_developer'] = 'Εάν έχει οριστεί τιμή διαφορετική από DEVELOPER, η απόδοση μπορεί να βελτιωθεί ελαφρά.';
$string['check_debugmsg_comment_nodeveloper'] = 'Εάν έχει οριστεί σε DEVELOPER, η απόδοση ενδέχεται να επηρεάζεται ελαφρώς.';
$string['check_debugmsg_details'] = 'Σπάνια υπάρχει κάποιο πλεονέκτημα στο να πηγαίνετε στο επίπεδο προγραμματιστή, εκτός αν ζητηθεί από έναν προγραμματιστή.<p>Μόλις λάβετε το μήνυμα σφάλματος και αντιγράψετε και επικολλήσετε κάπου, ΣΥΝΙΣΤΑΤΑΙ ΙΔΙΑΙΤΕΡΑ να επιστρέψετε την επιλογή Debug (αποσφαλμάτωση) στο NONE (καμία). Τα μηνύματα αποσφαλμάτωσης (εντοπισμού σφαλμάτων) μπορούν να δώσουν ενδείξεις σε έναν χάκερ (εισβολέα) ως προς τις ρυθμίσεις του ιστοτόπου σας και ενδέχεται να επηρεάσουν την απόδοση.</p>';
$string['check_enablestats_comment_disable'] = 'Η απόδοση μπορεί να επηρεαστεί από την επεξεργασία στατιστικών. Εάν ενεργοποιηθεί, οι ρυθμίσεις στατιστικών θα πρέπει να ρυθμιστούν με προσοχή.';
$string['check_enablestats_comment_enable'] = 'Η απόδοση μπορεί να επηρεαστεί από την επεξεργασία στατιστικών. Οι ρυθμίσεις στατιστικών θα πρέπει να ρυθμίζονται με προσοχή.';
$string['check_enablestats_details'] = 'Αν ενεργοποιηθεί, θα γίνει επεξεργασία των καταγραφών στην χρονο-προγραμματισμένη μέσω της εντολής cron εργασία
και θα συγκεντρωθούν κάποια στατιστικά. Ανάλογα με το φορτίο του ιστοτόπου, αυτό μπορεί να διαρκέσει αρκετά.
<p>Κατά τη διάρκεια αυτής της διαδικασίας, θα απαιτηθούν περισσότεροι πόροι του εξυπηρετητή και ίσως επηρεαστεί η απόδοση.</p>';
$string['check_themedesignermode_comment_disable'] = 'Εάν ενεργοποιηθεί, οι εικόνες και τα φύλλα στυλ δεν θα αποθηκεύονται σε κρυφή μνήμη, με αποτέλεσμα σημαντική υποβάθμιση της απόδοσης.';
$string['check_themedesignermode_comment_enable'] = 'Αν απενεργοποιηθεί, οι εικόνες και τα φύλλα στυλ θα αποθηκεύονται σε κρυφή μνήμη, με αποτέλεσμα σημαντικές βελτιώσεις στην απόδοση.';
$string['check_themedesignermode_details'] = 'Αυτή είναι συχνά η αιτία αργών ιστοτόπων Moodle. <p>Κατά μέσο όρο μπορεί να χρειαστεί τουλάχιστον διπλάσιος χρόνος επεξεργαστή (CPU) για την επεξεργασία ενός ιστοτόπου Moodle με ενεργοποιημένη τη λειτουργία σχεδιασμού αισθητικού θέματος.</p>';
$string['comments'] = 'Σχόλια';
$string['disabled'] = 'Ενεργοποιημένη';
$string['edit'] = 'Επεξεργασία';
$string['enabled'] = 'Ενεργοποιημένο';
$string['issue'] = 'Ζήτημα';
$string['morehelp'] = 'περισσότερη βοήθεια';
$string['performance:view'] = 'Εμφάνιση αναφοράς απόδοσης';
$string['performancereportdesc'] = 'Αυτή η αναφορά παραθέτει ζητήματα τα οποία ενδέχεται να επηρεάζουν την απόδοση του ιστοτόπου {$a}';
$string['pluginname'] = 'Επισκόπηση απόδοσης';
$string['privacy:metadata'] = 'Το πρόσθετο «Επισκόπηση επιδόσεων» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['value'] = 'Τιμή';
