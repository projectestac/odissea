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
 * Strings for component 'analytics', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   analytics
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Το προς ανάλυση στοιχείο με αναγνωριστικό {$a->analysableid} δεν χρησιμοποιήθηκε: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Το προς ανάλυση στοιχείο με αναγνωριστικό {$a->analysableid} δεν είναι έγκυρο για αυτόν τον στόχο: {$a->result}';
$string['analysisinprogress'] = 'Γίνεται ακόμη η ανάλυση από μια προηγούμενη εκτέλεση';
$string['analytics'] = 'Αναλυτική';
$string['analyticslogstore'] = 'Αποθήκη καταγραφής που θα χρησιμοποιείται για την αναλυτική';
$string['analyticslogstore_help'] = 'Η αποθήκη καταγραφών που θα χρησιμοποιείται από το API της αναλυτικής για την ερμηνεία των ενεργειών των χρηστών';
$string['analyticssettings'] = 'Ρυθμίσεις αναλυτικής';
$string['coursetoolong'] = 'Το μάθημα είναι πολύ μεγάλο';
$string['defaultpredictionsprocessor'] = 'Προεπιλεγμένος επεξεργαστής προβλέψεων';
$string['defaultpredictoroption'] = 'Προεπιλεγμένος επεξεργαστής ({$a})';
$string['disabledmodel'] = 'Απενεργοποιημένο μοντέλο';
$string['enabledtimesplittings'] = 'Μέθοδοι διαίρεσης χρόνου';
$string['erroralreadypredict'] = 'Το αρχείο {$a} χρησιμοποιήθηκε ήδη για να δημιουργηθούν προβλέψεις';
$string['errorcannotreaddataset'] = 'Δεν είναι δυνατή η ανάγνωση του συνόλου δεδομένων {$a}';
$string['errorcannotwritedataset'] = 'Δεν είναι δυνατή η εγγραφή στο σύνολο δεδομένων {$a}';
$string['errorendbeforestart'] = 'Η ημερομηνία λήξης ({$a}) προηγείται της ημερομηνίας έναρξης του μαθήματος';
$string['errorinvalidindicator'] = 'Άκυρος {$a} δείκτης';
$string['errorinvalidtimesplitting'] = 'Μη έγκυρη διαίρεση χρόνου· παρακαλούμε βεβαιωθείτε ότι προσθέσατε το πλήρες όνομα της κλάσης.';
$string['errornoindicators'] = 'Αυτό το μοντέλο δεν έχει καθόλου δείκτες.';
$string['errornopredictresults'] = 'Ο επεξεργαστής προβλέψεων δεν επέστρεψε κανένα αποτέλεσμα. Ελέγξτε τα περιεχόμενα του φακέλου εξόδου για περισσότερες πληροφορίες.';
$string['errornoroles'] = 'Δεν έχουν οριστεί ρόλοι μαθητών ή διδασκόντων. Ορίστε τους στην σελίδα ρυθμίσεων της αναλυτικής.';
$string['errornotarget'] = 'Αυτό το μοντέλο δεν έχει καθόλου στόχους.';
$string['errornotimesplittings'] = 'Αυτό το μοντέλο δεν έχει καθόλου μεθόδους διαίρεσης χρόνου.';
$string['errorpredictioncontextnotavailable'] = 'Αυτό το πλαίσιο πρόβλεψης δεν είναι πλέον διαθέσιμο.';
$string['errorpredictionformat'] = 'Λανθασμένος μορφότυπος υπολογισμών πρόβλεψης';
$string['errorpredictionnotfound'] = 'Η πρόβλεψη δεν βρέθηκε';
$string['errorpredictionsprocessor'] = 'Σφάλμα επεξεργαστή προβλέψεων: {$a}';
$string['errorpredictwrongformat'] = 'Το αποτέλεσμα του επεξεργαστή προβλέψεων δεν μπορεί να αποκωδικοποιηθεί: «{$a}»';
$string['errorprocessornotready'] = 'Ο επιλεγμένος επεξεργαστής προβλέψεων δεν είναι έτοιμος: {$a}';
$string['errorsamplenotavailable'] = 'Το δείγμα πρόβλεψης δεν είναι πλέον διαθέσιμο';
$string['errorunexistingmodel'] = 'Μη υπαρκτό μοντέλο {$a}';
$string['errorunexistingtimesplitting'] = 'Η επιλεγμένη μέθοδος διαίρεσης χρόνου δεν είναι διαθέσιμη.';
$string['errorunknownaction'] = 'Άγνωστη ενέργεια';
$string['eventinsightsviewed'] = 'Ενοράσεις που εμφανίστηκαν';
$string['eventpredictionactionstarted'] = 'Η διαδικασία πρόβλεψης άρχισε';
$string['fixedack'] = 'Αναγνωρίστηκε';
$string['insightinfomessage'] = 'Το σύστημα δημιούργησε κάποιες διοράσεις για εσάς: {$a}';
$string['insightinfomessagehtml'] = 'Το σύστημα δημιούργησε κάποιες διοράσεις για εσάς: <a href="{$a}">{$a}</a>.';
$string['insightmessagesubject'] = 'Νέες διοράσεις για «{$a->contextname}»: {$a->insightname}';
$string['invalidanalysablefortimesplitting'] = 'Δεν μπορεί να αναλυθεί με χρήση της μεθόδου διαίρεσης χρόνου {$a}.';
$string['invalidtimesplitting'] = 'Το μοντέλο με αναγνωριστικό {$a} χρειάζεται μια μέθοδο διαίρεσης χρόνου πριν να μπορεί να χρησιμοποιηθεί για εκπαίδευση.';
$string['modeloutputdir'] = 'Φάκελος εξόδου μοντέλων';
$string['modeloutputdirinfo'] = 'Φάκελος όπου οι επεξεργαστές προβλέψεων αποθηκεύουν όλες τις πληροφορίες αξιολόγησης. Χρήσιμο για αποσφαλμάτωση και έρευνα.';
$string['modeltimelimit'] = 'Όριο χρόνου ανάλυσης ανά μοντέλο';
$string['modeltimelimitinfo'] = 'Η ρύθμιση αυτή περιορίζει τον χρόνο ανάλυσης των περιεχομένων του ιστοτόπου από κάθε μοντέλο.';
$string['nocourses'] = 'Δεν υπάρχουν μαθήματα για να αναλυθούν';
$string['nodata'] = 'Δεν υπάρχουν δεδομένα για να αναλυθούν';
$string['noevaluationbasedassumptions'] = 'Τα μοντέλα που βασίζονται σε υποθέσεις δεν μπορούν να αξιολογηθούν';
$string['noinsights'] = 'Δεν αναφέρθηκαν ενοράσεις';
$string['noinsightsmodel'] = 'Αυτό το μοντέλο δεν δημιουργεί ενοράσεις';
$string['nonewdata'] = 'Δεν υπάρχουν νέα δεδομένα διαθέσιμα';
$string['nonewranges'] = 'Δεν υπάρχουν νέες προβλέψεις ακόμη';
$string['nonewtimeranges'] = 'Δεν υπάρχουν νέα χρονικά όρια· δεν υπάρχει τίποτα για να προβλεφθεί.';
$string['nopredictionsyet'] = 'Δεν υπάρχουν ακόμα διαθέσιμες προβλέψεις';
$string['noranges'] = 'Δεν υπάρχουν προβλέψεις ακόμη';
$string['notrainingbasedassumptions'] = 'Τα μοντέλα που βασίζονται σε υποθέσεις δεν χρειάζονται εκπαίδευση';
$string['notuseful'] = 'Μη χρήσιμο';
$string['novaliddata'] = 'Δεν υπάρχουν έγκυρα δεδομένα διαθέσιμα';
$string['novalidsamples'] = 'Δεν υπάρχουν έγκυρα δείγματα διαθέσιμα';
$string['onlycli'] = 'Εκτέλεση διεργασιών αναλυτικής μέσω γραμμής εντολών μόνο';
$string['onlycliinfo'] = 'Οι διαδικασίες της αναλυτικής, όπως τα μοντέλα αξιολόγησης, η εκπαίδευση αλγορίθμων μηχανικής μάθησης ή οι προβλέψεις μπορούν να διαρκέσουν αρκετό χρονικό διάστημα, θα εκτελεστούν ως χρονο-προγραμματισμένες μέσω της εντολής cron εργασίες και μπορεί να επιβάλλεται χρήση αποκλειστικά μέσω της γραμμής εντολών. Απενεργοποιήστε αυτή τη ρύθμιση εάν θέλετε οι διαχειριστές του ιστοτόπου σας να μπορούν να εκτελούν αυτές τις διαδικασίες και χειροκίνητα μέσω διεπαφής ιστού.';
$string['predictionsprocessor'] = 'Επεξεργαστής προβλέψεων';
$string['predictionsprocessor_help'] = 'Ένας επεξεργαστής προβλέψεων είναι το παρασκήνιο (back-end)  μηχανικής μάθησης που επεξεργάζεται τα σύνολα δεδομένων που παράγονται από τον συνυπολογισμό των δεικτών και στόχων των μοντέλων. Κάθε μοντέλο μπορεί να χρησιμοποιήσει διαφορετικό επεξεργαστή. Αυτός που καθορίζεται εδώ θα είναι ο προεπιλεγμένος.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Συνυπολογισμοί δεικτών';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Το πλαίσιο';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Χρόνος λήξης υπολογισμού';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Η κλάση υπολογισμού δείκτη';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'Το αναγνωριστικό δείγματος';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Ο πίνακας προέλευσης του δείγματος';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Χρόνος έναρξης υπολογισμού';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Πότε έγινε η πρόβλεψη';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Η τιμή που υπολογίστηκε';
$string['privacy:metadata:analytics:predictionactions'] = 'Ενέργειες πρόβλεψης';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Το όνομα της ενέργειας';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'Το αναγνωριστικό της ενέργειας';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Πότε εκτελέστηκε η ενέργεια της πρόβλεψης';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Ο χρήστης που έκανε την ενέργεια';
$string['privacy:metadata:analytics:predictions'] = 'Προβλέψεις';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Υπολογισμοί δεικτών';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Το πλαίσιο';
$string['privacy:metadata:analytics:predictions:modelid'] = 'Το αναγνωριστικό του μοντέλου';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Η πρόβλεψη';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Το σκορ της πρόβλεψης';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Ο δείκτης της μεθόδου διαίρεσης χρόνου';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Το αναγνωριστικό του δείγματος';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Πότε έγινε η πρόβλεψη';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Χρόνος λήξης υπολογισμών';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Χρόνος έναρξης υπολογισμών';
$string['processingsitecontents'] = 'Επεξεργασία περιεχομένου ιστοτόπου';
$string['successfullyanalysed'] = 'Αναλύθηκε με επιτυχία';
$string['timesplittingmethod'] = 'Μέθοδος διαίρεσης χρόνου';
$string['timesplittingmethod_help'] = 'Η μέθοδος διαίρεσης χρόνου διαιρεί τη διάρκεια του μαθήματος σε μέρη· ο μηχανισμός προβλέψεων θα τρέξει στο τέλος αυτών των μερών. Συνιστάται να ενεργοποιείτε μόνο τις μεθόδους διαίρεσης χρόνου που ίσως σας ενδιαφέρει να χρησιμοποιήσετε. Η διαδικασία αξιολόγησης θα επαναληφθεί για όλες τις διαθέσιμες μεθόδους διαίρεσης χρόνου, έτσι ώστε όσο περισσότερες ενεργοποιούνται, τόσο πιο αργή θα είναι η διαδικασία αξιολόγησης.';
$string['viewprediction'] = 'Εμφάνιση λεπτομερειών πρόβλεψης';
