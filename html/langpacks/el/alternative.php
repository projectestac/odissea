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
 * Strings for component 'alternative', language 'el', version '3.11'.
 *
 * @package     alternative
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alternative'] = 'εναλλακτική';
$string['alternativename'] = 'Όνομα δραστηριότητας';
$string['alternativeoptions'] = 'Επιλογές για αυτή την εναλλακτική';
$string['alternativeoptions_help'] = 'Κάθε εναλλακτική δείχνει στον χρήστη αρκετές επιλογές.
Αυτές οι επιλογές περιγράφονται σε αυτή τη φόρμα.
Αν ο τίτλος δεν έχει οριστεί, η επιλογή δεν θα δημιουργηθεί (αλλά θα διαγραφεί αν υπήρχε).
Μπορείτε να προσθέσετε νέες επιλογές με το πλήκτρο, μετά από αυτά τα σύνολα πεδίων.';
$string['changeallowed'] = 'Επιτρέπεται αλλαγή';
$string['changeallowed_help'] = 'Εάν δεν επιλεγεί, ο χρήστης δεν θα είναι σε θέση να αλλάξει την επιλογή του.
Διδάσκοντες, και όλοι οι ρόλοι που έχουν την δυνατότητα «alternatives:forceregistration» (εναλλακτικές: επιβολή καταχώρησης), θα είναι σε θέση να αλλάξουν την επιλογή οποιουδήποτε.';
$string['chooseteammembers'] = 'Παρακαλώ επιλέξτε τα μέλη της ομάδας σας';
$string['chooseuser'] = 'Παρακαλώ επιλέξτε το χρήστη προς καταχώρηση';
$string['csv'] = 'Εισαγωγή CSV';
$string['csv2ndfield'] = 'Το 2ο πεδίο (θέσεις) θα πρέπει να είναι αριθμητικό· 0 = δεν υπάρχει όριο.';
$string['csv_help'] = 'Κάθε γραμμή αποτελείται από Τίτλο ; Μέρη ; Ημερομηνία ; Περιγραφή';
$string['csvbadfieldnb'] = 'Λάθος αριθμός πεδίων: {$a} αντί για 4.';
$string['csvunableopen'] = 'Αδυναμία ανοίγματος αρχείου CSV.';
$string['datecomment'] = 'Ημερομηνία';
$string['datecomment_help'] = 'Αυτό το πεδίο μπορεί να περιέχει οποιοδήποτε κείμενο, αλλά προορίζεται για μια ημερομηνία ή ένα διάστημα ημερομηνιών.';
$string['displaycompact'] = 'Συμπαγής προβολή';
$string['displaycompact_help'] = 'Εάν δεν επιλεγεί, κάθε επιλογή θα εμφανιστεί σε πολλές γραμμές, με μια ρητή περιγραφή.
Εάν σημειωθεί, κάθε επιλογή θα εμφανιστεί σε μία γραμμή, με μια αναδιπλωμένη περιγραφή.';
$string['fieldsetcsv'] = 'Εισαγωγή επιλογών από αρχείο CSV';
$string['fieldsetmultiple'] = 'Ρυθμίσεις για πολλαπλές καταχωρήσεις';
$string['fieldsetteam'] = 'Ρυθμίσεις για ομάδες';
$string['forceregister'] = 'Επιβολή καταχωρήσεων';
$string['groupdependent'] = 'Εξαρτάται από την ομάδα';
$string['groupdependent_help'] = 'Εάν είναι επιλεγμένο αυτό το πλαίσιο, η εμφάνιση του κειμένου σε κάθε χρήστη θα εξαρτάται από την ομάδα του.';
$string['individual'] = 'Άτομο';
$string['instructionsforcereg'] = 'Δεν μπορείτε να καταχωρήσετε τον εαυτό σας, αλλά ο ρόλος σας σάς επιτρέπει να καταχωρείτε μαθητές σε οποιαδήποτε επιλογή.';
$string['instructionsgeneral'] = '';
$string['instructionsmultiple'] = 'Πρέπει να επιλέξετε από {$a->multiplemin} μέχρι {$a->multiplemax} επιλογές.';
$string['instructionsmultiplenomax'] = 'Πρέπει να επιλέξετε τουλάχιστον {$a->multiplemin} επιλογές.';
$string['instructionsnochange'] = 'Αφού αποθηκευτεί μια επιλογή, δεν επιτρέπεται αλλαγή.';
$string['instructionsteam'] = 'Μπορείτε να καταχωρηθείτε ως μια ομάδα. Μια ομάδα πρέπει να έχει μεταξύ {$a->teammin} και {$a->teammax} μέλη.
Καθώς εσείς κάνατε την καταχώρηση των άλλων μελών της ομάδας σας, θα είστε ο επικεφαλής της ομάδας.';
$string['messageprovider:reminder'] = 'άρθρωμα/εναλλακτική υπενθύμιση μαθητή';
$string['modulename'] = 'Εναλλακτική';
$string['modulename_help'] = 'Το άρθρωμα εναλλακτικής επιτρέπει στους μαθητές να καταχωρούν μία ή περισσότερες επιλογές σε μια λίστα που παρατίθεται.';
$string['modulenameplural'] = 'εναλλακτικές';
$string['multiple'] = 'Πολλαπλά';
$string['multipleenable'] = 'Ενεργοποιήστε αυτές τις ρυθμίσεις';
$string['multipleenable_help'] = 'Κάθε χρήστης πρέπει να καταχωρήσει πολλές επιλογές, μεταξύ του ελάχιστου και μέγιστου αριθμού.';
$string['multiplemax'] = 'Μέγιστος αριθμός καταχωρήσεων χρήστη';
$string['multiplemin'] = 'Ελάχιστος αριθμός καταχωρήσεων χρήστη';
$string['noselectedoption'] = 'Πρέπει να διαλέξετε μια επιλογή';
$string['noselectedusers'] = 'Δεν επιλέχθηκε κανένας χρήστης';
$string['option'] = 'Επιλογή';
$string['optionintro'] = 'Περιγραφή';
$string['optionname'] = 'Τίτλος';
$string['options'] = 'Επιλογές';
$string['places'] = 'Θέσεις';
$string['placesavail'] = 'Διαθέσιμες θέσεις';
$string['pluginadministration'] = 'Διαχείριση αρθρώματος εναλλακτικής';
$string['pluginname'] = 'εναλλακτική';
$string['potentialteammembers'] = 'Δυνητικά μέλη ομάδας';
$string['private'] = 'Ιδιωτικά';
$string['public'] = 'Δημόσια';
$string['publicreg'] = 'Δημόσιες καταχωρήσεις';
$string['publicreg_help'] = 'Οι καταχωρήσεις μπορεί να γίνουν:<dl>
<dt>δημόσια</dt>
<dd>δημόσια σε όλους,</dd><dt>δημόσια στην ίδια ομάδα</dt><dd>δημόσια για χρήστες που μοιράζονται τουλάχιστον μια ομάδα</dd>
<dt>ιδιωτικά</dt><dd>ιδιωτικά εκτός από τους χρήστες με αυξημένες δυνατότητες(διδάσκοντες, κλπ).</dd>
</dl>';
$string['register'] = 'Καταχώρηση';
$string['registrationforbidden'] = 'Δεν μπορείτε να καταχωρηθείτε εδώ.';
$string['registrations'] = 'Καταχωρήσεις';
$string['registrationsaved'] = 'Η επιλογή καταχώρησής σας έχει αποθηκευτεί.';
$string['regteams'] = 'Καταχωρημένες ομάδες';
$string['remains'] = 'Υπόλοιπα';
$string['reminderBefore'] = 'πριν [[AlterUntil]]';
$string['reminderFull'] = 'Πρέπει να κάνετε μια επιλογή στη δραστηριότητα «[[AlterName]]»';
$string['reminderFullHtml'] = 'Πρέπει να κάνετε μια επιλογή στη δραστηριότητα «<i>[[AlterName]]</i>»';
$string['reminderSmall'] = 'Πρέπει να κάνετε μια επιλογή στη δραστηριότητα «[[AlterName]]»';
$string['reminderSubject'] = 'Υπενθύμιση: θα πρέπει να διαλέξετε ανάμεσα σε εναλλακτικές επιλογές';
$string['sendReminder'] = 'Αποστολή υπενθύμισης';
$string['separator'] = 'Διαχωριστικό';
$string['students'] = 'Μαθητές';
$string['synthesis'] = 'Σύνθεση';
$string['synthfree'] = 'Ελεύθερο';
$string['synthlimitplaces'] = 'Επιλογές περιορισμένων θέσεων (ατομικά)';
$string['synthlimitteamplaces'] = 'Επιλογές περιορισμένων θέσεων (ομάδας)';
$string['synthplaces'] = 'Θέσεις (ατομικά)';
$string['synthpotential'] = 'Πιθανοί μαθητές';
$string['synthregistered'] = 'Καταχωρημένοι μαθητές';
$string['synthreserved'] = 'Δεσμευμένες (μεταξύ περιορισμένων)';
$string['synthteamplaces'] = 'Θέσεις (ομάδας)';
$string['synthunlimitplaces'] = 'Επιλογές απεριόριστων θέσεων (ατομικά)';
$string['synthunlimitteamplaces'] = 'Επιλογές απεριόριστων θέσεων (ομάδα)';
$string['synthunregistered'] = 'Μη καταχωρημένοι μαθητές';
$string['team'] = 'Ομάδα';
$string['teamenable'] = 'Ενεργοποίηση ρυθμίσεων ομάδας';
$string['teamenable_help'] = 'Καθορίστε το ελάχιστο και μέγιστο μέγεθος των ομάδων.';
$string['teamleader'] = 'Αρχηγός ομάδας';
$string['teamleadernotamember'] = 'Ο αρχηγός της ομάδας δεν πρέπει να είναι μέλος της ομάδας του.';
$string['teammax'] = 'Μέγιστο μέγεθος ομάδας';
$string['teammin'] = 'Ελάχιστο μέγεθος ομάδας';
$string['teamplaces'] = 'Θέσεις ομάδας';
$string['teamplacesavail'] = 'Διαθέσιμες θέσεις για ομάδες';
$string['teams'] = 'Ομάδες';
$string['unique'] = 'Μοναδικό';
$string['unregister'] = 'Κατάργηση καταχώρησης';
$string['unregisterLeader'] = 'Προσοχή: Κατάργηση καταχώρησης ενός αρχηγού θα οδηγήσει σε κατάργηση καταχώρησης όλης της ομάδας.';
$string['uploadoverwrites'] = 'Προσοχή: ανεβάζοντας ένα νέο αρχείο διαγράφονται όλες τις προηγούμενες καταχωρήσεις και επιλογές.';
$string['userinfo'] = 'Έχει καταχωρηθεί σε {$a} επιλογές.';
$string['usersnotreg'] = 'Μη καταχωρημένοι χρήστες';
$string['usersreg'] = 'Καταχωρημένοι χρήστες';
$string['viewallregistrations'] = 'Εμφάνιση καταγραφών';
$string['viewallusersnotreg'] = 'Εμφάνιση μη καταχωρημένων χρηστών';
$string['viewallusersreg'] = 'Εμφάνιση καταχωρημένων χρηστών';
$string['viewsynthesis'] = 'Εμφάνιση σύνθεσης';
$string['viewteams'] = 'Εμφάνιση ομάδων';
$string['wrongteamsize'] = 'Το μέγεθος της ομάδας σας δεν είναι μεταξύ των επιτρεπόμενων ορίων.';
