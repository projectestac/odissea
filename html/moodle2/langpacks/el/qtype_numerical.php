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
 * Strings for component 'qtype_numerical', language 'el', branch 'MOODLE_34_STABLE'
 *
 * @package   qtype_numerical
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Αποδεκτό σφάλμα';
$string['addmoreanswerblanks'] = 'Κενά πεδία για {no} ακόμα απαντήσεις';
$string['addmoreunitblanks'] = 'Κενά πεδία για {no} ακόμα μονάδες';
$string['answercolon'] = 'Απάντηση:';
$string['answererror'] = 'Σφάλμα';
$string['answermustbenumberorstar'] = 'Η απάντηση πρέπει να είναι αριθμός, π.χ. -1.234 ή 3e8, ή «*».';
$string['answerno'] = 'Απάντηση {$a}';
$string['decfractionofquestiongrade'] = 'ως κλάσμα (0-1) από τον βαθμό της ερώτησης';
$string['decfractionofresponsegrade'] = 'ως κλάσμα (0-1) από τον βαθμό της απάντησης';
$string['decimalformat'] = 'δεκαδικά ψηφία';
$string['editableunittext'] = 'το στοιχείο εισαγωγής κειμένου';
$string['errornomultiplier'] = 'Πρέπει να ορίσετε έναν πολλαπλασιαστή για αυτή τη μονάδα.';
$string['errorrepeatedunit'] = 'Δεν μπορείτε να έχετε δύο μονάδες με το ίδιο όνομα.';
$string['geometric'] = 'Γεωμετρικός';
$string['invalidnumber'] = 'Πρέπει να εισάγετε έναν έγκυρο αριθμό.';
$string['invalidnumbernounit'] = 'Πρέπει να εισάγετε έναν έγκυρο αριθμό. Μην περιλάβετε μονάδα μέτρησης στην απάντησή σας.';
$string['invalidnumericanswer'] = 'Μια από τις απαντήσεις που δώσατε δεν ήταν έγκυρος αριθμός.';
$string['invalidnumerictolerance'] = 'Μια από τις ανοχές που δώσατε δεν ήταν έγκυρος αριθμός.';
$string['leftexample'] = 'στα αριστερά, για παράδειγμα $1.00 ή £1.00';
$string['manynumerical'] = 'Οι μονάδες μέτρησης είναι προαιρετικές. Αν εισαχθεί μονάδα μέτρησης, χρησιμοποιείται για να μετατρέψει την απάντηση στην μονάδα μέτρησης 1 πριν βαθμολογηθεί.';
$string['multiplier'] = 'Πολλαπλασιαστής';
$string['nominal'] = 'Ονομαστικός';
$string['noneditableunittext'] = 'ΜΗ επεξεργάσιμο κείμενο της Μονάδας Νο1';
$string['nonvalidcharactersinnumber'] = 'Μη έγκυροι χαρακτήρες σε αριθμό';
$string['notenoughanswers'] = 'Πρέπει να εισάγετε τουλάχιστον μια απάντηση.';
$string['nounitdisplay'] = 'Δεν βαθμολογείται η μονάδα';
$string['numericalmultiplier'] = 'Πολλαπλασιαστής';
$string['numericalmultiplier_help'] = 'Ο πολλαπλασιαστής είναι ο συντελεστής με τον οποίο η σωστή αριθμιτική απάντηση θα πολλαπλασιαστεί. Η πρώτη μονάδα (Μονάδα 1) έχει προεπιλεγμένο πολλαπλασιαστή 1. Έτσι αν η σωστή αριθμιτική απάντηση είναι 5500 και έχετε ορίσει W ως μονάδα στην Μονάδα 1 που έχει 1 σαν προεπιλεγμένο πολλαπλασιαστή, η σωστή απάντηση είναι 5500 W. Αν προσθέσετε την μονάδα kW με πολλαπλασιαστή 0.001, αυτό θα εμφανίσει ως σωστή απάντηση 5.5 kW. Αυτό σημαίνει ότι οι απαντήσεις 5500W ή 5.5kW θα θεωρηθούν σωστές. Σημειώστε ότι το περιθώριο λάθους πολλαπλασιάζεται επίσης, έτσι αν επιτρέπεται λάθος 100W θα γίνει λάθος 0.1kW.';
$string['oneunitshown'] = 'Η μονάδα 1 εμφανίζεται αυτόματα δίπλα στο πλαίσιο απάντησης.';
$string['onlynumerical'] = 'Μονάδες που δεν χρησιμοποιούνται καθόλου. Μόνο η αριθμιτική τιμή βαθμολογείται.';
$string['pleaseenterananswer'] = 'Εισαγάγετε μια απάντηση.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Παρακαλούμε, πληκτρολογήστε την απάντησή σας χωρίς να χρησιμοποιήσετε διαχωριστή χιλιάδων ({$a}).';
$string['pluginname'] = 'Αριθμητική';
$string['pluginnameadding'] = 'Προσθήκη μιας Αριθμητικής ερώτησης';
$string['pluginnameediting'] = 'Τροποποίηση μιας Αριθμητικής ερώτησης';
$string['pluginname_help'] = 'Από την πλευρά του μαθητή, μια αριθμητική ερώτηση μοιάζει ακριβώς με μια ερώτηση σύντομης απάντησης. Η διαφορά είναι ότι οι αριθμητικές απαντήσεις επιτρέπεται να έχουν ένα αποδεκτό σφάλμα. Αυτό επιτρέπει την αξιολόγηση μιας σταθερής σειράς απαντήσεων ως μία απάντηση. Για παράδειγμα, αν η απάντηση είναι 10 με αποδεκτό σφάλμα 2, τότε οποιοσδήποτε αριθμός μεταξύ 8 και 12 θα γίνει αποδεκτός ως σωστός.';
$string['pluginnamesummary'] = 'Επιτρέπει μια αριθμητική απάντηση, εν δυνάμει με μονάδες, η οποία βαθμολογείται σε σύγκριση με διάφορες πρότυπες απαντήσεις, με δυνατότητα ανοχών.';
$string['privacy:metadata'] = 'Το πρόσθετο «Ερωτήσεις αριθμητικού τύπου» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['relative'] = 'Σχετικός';
$string['rightexample'] = 'στα δεξιά, για παράδειγμα 1.00cm ή 1.00km';
$string['selectunit'] = 'Επιλογή μιας μονάδας';
$string['selectunits'] = 'Επιλογή μονάδων';
$string['studentunitanswer'] = 'Οι μονάδες καταχωρούνται χρησιμοποιώντας';
$string['tolerancetype'] = 'Τύπος ανοχής';
$string['unit'] = 'Μονάδα';
$string['unitappliedpenalty'] = 'Αυτοί οι βαθμοί περιλαμβάνουν ποινή {$a} για κακή μονάδα.';
$string['unitchoice'] = 'πολλαπλές επιλογές';
$string['unitedit'] = 'Επεξεργασία μονάδας';
$string['unitgraded'] = 'Η μονάδα πρέπει να δίνεται και θα βαθμολογείται.';
$string['unithandling'] = 'Χειρισμός μονάδας μέτρησης';
$string['unitincorrect'] = 'Δεν δώσατε την σωστή μονάδα.';
$string['unitmandatory'] = 'Υποχρεωτικό';
$string['unitmandatory_help'] = '* Η απόκριση θα βαθμολογηθεί χρησιμοποιώντας τη μονάδα που γράφτηκε.

* Εάν το πεδίο της μονάδας είναι άδειο, θα εφαρμοστεί η ποινή της μονάδας';
$string['unitnotselected'] = 'Πρέπει να επιλέξετε μία μονάδα.';
$string['unitonerequired'] = 'Πρέπει να δώσετε τουλάχιστον μία μονάδα.';
$string['unitoptional'] = 'Προαιρετική μονάδα';
$string['unitoptional_help'] = '* Εάν το πεδίο μονάδας δεν είναι άδειο, η απόκριση θα βαθμολογηθεί χρησιμοποιώντας αυτή τη μονάδα.

* Εάν η μονάδα είναι άσχημα γραμμένη ή άγνωστη, η απόκριση θα θεωρείται μη έγκυρη.';
$string['unitpenalty'] = 'Ποινή μονάδας';
$string['unitpenalty_help'] = 'Η ποινή εφαρμόζεται αν

* το λάθος όνομα μονάδας εισαχθεί στην καταχώρηση μονάδας, ή
* η μονάδα εισαχθεί στο κουτί καταχώρησης της τιμής';
$string['unitposition'] = 'Οι μονάδες πηγαίνουν';
$string['units'] = 'Μονάδες';
$string['unitselect'] = 'ένα πτυσσόμενο μενού';
$string['unitx'] = 'Μονάδες {no}';
$string['validnumberformats'] = 'Μορφότυποι έγκυρων αριθμών';
$string['validnumberformats_help'] = '* τακτικοί αριθμοί 13500.67, 13 500.67, 13500,67 ή 13 500,67

* αν οι ρυθμίσεις του πακέτου της γλώσσας σας (αρχείο langconfig.php) χρησιμοποιούν το κόμμα (,) ως διαχωριστικό των χιλιάδων να βάζετε *πάντα* το δεκαδικό σημείο (.) ως 3,500.67 : 13,500.

* για μορφή εκθέτη, για παράδειγμα 1.350067 * 10<sup>4</sup>, χρησιμοποιήστε 1.350067 E4 : 1.350067 E04';
$string['validnumbers'] = '13500.67, 13 500.67, 13,500.67, 13500,67, 13 500,67, 1.350067 E4 or 1.350067 E04';
$string['xmustbenumeric'] = '{$a} πρέπει να είναι ένας αριθμός.';
$string['xmustnotbenumeric'] = '{$a} δεν μπορεί να είναι ένας αριθμός.';
$string['youmustenteramultiplierhere'] = 'Πρέπει να εισάγετε έναν πολλαπλασιαστή εδώ.';
