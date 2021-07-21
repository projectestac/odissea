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
 * Strings for component 'block_dedication', language 'el', version '3.11'.
 *
 * @package     block_dedication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_button'] = 'Εργαλείο αφοσίωσης';
$string['access_info'] = 'Μόνο για διδάσκοντες:';
$string['connectionratiorow'] = 'Συνδέσεις ανά ημέρα';
$string['dedication:addinstance'] = 'Δυνατότητα προσθήκης μπλοκ αφοσίωσης';
$string['dedication:use'] = 'Να επιτρέπεται η χρήση αφοσίωσης μαθήματος';
$string['dedication_estimation'] = 'Ο εκτιμώμενος χρόνος αφοσίωσης είναι';
$string['dedicationall'] = 'Εμφάνιση της αφοσίωσης όλων των μελών του μαθήματος. Κάντε κλικ σε ένα όνομα για λεπτομέρειες αφοσίωσης μαθήματος.';
$string['dedicationgroup'] = 'Εμφάνιση αφοσίωσης όλων των μελών του group <em>{$a}</em>. Επιλέξτε κάποιο μέλος για λεπτομέρειες αφοσίωσης μαθήματος.';
$string['dedicationrow'] = 'Αφοσίωση μαθήματος';
$string['form'] = 'Ρυθμίσεις αφοσίωσης μαθήματος';
$string['form_help'] = 'Ο χρόνος προσδιορίζεται με βάση τις έννοιες της Συνόδου και τις Διάρκειας συνόδου που εφαρμόζεται στις καταχωρήσεις καταγραφών.

<strong>Κλικ:</strong> Κάθε φορά που ένας χρήστης επισκέπτεται μια σελίδα στο Moodle, αποθηκεύεται μια καταχώρηση στις καταγραφές. <strong>Σύνοδος:</strong> σύνολο δύο ή περισσότερων διαδοχικών κλικ στο οποίο ο χρόνος μεταξύ του ζεύγους των κλικ δεν ξεπερνά ένα καθορισμένο μέγιστο χρόνο. <strong>Διάρκεια συνόδου:</strong> ο χρόνος μεταξύ του πρώτου και του τελευταίου κλικ της συνόδου. <strong>Χρόνος αφοσίωσης:</strong> το σύνολο που προκύπτει αν προστεθούν όλες οι διάρκειες συνόδου για έναν χρήστη.';
$string['form_text'] = 'Επιλέξτε το εύρος των ημερομηνιών και το μέγιστο χρόνο μεταξύ των κλικ της ίδιας συνόδου.';
$string['limit'] = 'Όριο μεταξύ κλικ (σε λεπτά)';
$string['limit_help'] = 'Το όριο μεταξύ κλικ ορίζει το αν 2 κλικ είναι μέρος της ίδιας συνόδου ή όχι';
$string['maxtime'] = 'Τέλος περιόδου';
$string['maxtime_help'] = 'Να λαμβάνονται υπόψη μόνο καταχωρήσεις του ημερολογίου καταγραφής που τελειώνουν πριν από αυτήν την ημερομηνία';
$string['meandedication'] = '<strong>Μέση αφοσίωση:</strong> {$a}';
$string['mintime'] = 'Αρχή περιόδου';
$string['mintime_help'] = 'Να λαμβάνονται υπόψη μόνο καταχωρήσεις του ημερολογίου καταγραφής μετά από αυτήν την ημερομηνία';
$string['pagetitle'] = '{$a}: αφοσίωση μαθήματος';
$string['period'] = 'Περίοδος από <em>{$a->mintime}</em> έως <em>{$a->maxtime}</em>';
$string['perioddiff'] = '<strong>Χρόνος που πέρασε:</strong> {$a}';
$string['perioddiffrow'] = 'Χρόνος που πέρασε';
$string['pluginname'] = 'Αφοσίωση μαθήματος';
$string['sessionduration'] = 'Διάρκεια';
$string['sessionstart'] = 'Αρχή συνόδου';
$string['show_dedication'] = 'Εμφάνιση χρόνου αφοσίωσης στους μαθητές';
$string['show_dedication_help'] = 'Εξ\'ορισμού, ο χρόνος αφοσίωσης μπορεί να εμφανιστεί μόνο στους καθηγητές. Η ρύθμιση αυτή επιτρέπει στους μαθητές να δουν το χρόνο αφοσίωσής τους στο μπλοκ.';
$string['sincerow'] = 'Από';
$string['submit'] = 'Υπολογισμός';
$string['torow'] = 'Έως';
$string['totaldedication'] = '<strong>Συνολική αφοσίωση:</strong> {$a}';
$string['userdedication'] = 'Λεπτομέρειες αφοσίωσης μαθήματος του <em>{$a}</em>.';
