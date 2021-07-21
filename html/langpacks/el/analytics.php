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
 * Strings for component 'analytics', language 'el', version '3.11'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Το προς ανάλυση στοιχείο με αναγνωριστικό {$a->analysableid} δεν χρησιμοποιήθηκε: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Το προς ανάλυση στοιχείο με αναγνωριστικό {$a->analysableid} δεν είναι έγκυρο για αυτόν τον στόχο: {$a->result}';
$string['analysisinprogress'] = 'Γίνεται ακόμη η ανάλυση από μια προηγούμενη εκτέλεση';
$string['analytics'] = 'Αναλυτική';
$string['analyticsdisabled'] = 'Η αναλυτική είναι απενεργοποιημένη. Μπορείτε να την ενεργοποιήσετε στην «Διαχείριση ιστοτόπου > Προχωρημένα χαρακτηριστικά»';
$string['analyticslogstore'] = 'Αποθήκη καταγραφής που θα χρησιμοποιείται για την αναλυτική';
$string['analyticslogstore_help'] = 'Η αποθήκη καταγραφών που θα χρησιμοποιηθεί από το API αναλυτικής για την ανάγνωση της δραστηριότητας των χρηστών.';
$string['analyticssettings'] = 'Ρυθμίσεις αναλυτικής';
$string['analyticssiteinfo'] = 'Πληροφορίες ιστοτόπου';
$string['calclifetime'] = 'Διατήρηση υπολογισμών αναλυτικής για';
$string['configlcalclifetime'] = 'Αυτό καθορίζει το επιθυμητό χρονικό διάστημα διατήρησης των δεδομένων υπολογισμού - αυτό δεν θα διαγράψει τις προβλέψεις, αλλά θα διαγράψει τα δεδομένα που χρησιμοποιήθηκαν για τη δημιουργία των προβλέψεων. Η χρήση της προεπιλεγμένης επιλογής εδώ είναι καλύτερη καθώς διατηρεί την χρήση του δίσκου σας υπό έλεγχο, ωστόσο εάν χρησιμοποιείτε πίνακες υπολογισμού για άλλους σκοπούς, ίσως θέλετε να αυξήσετε αυτήν την τιμή.';
$string['defaultpredictionsprocessor'] = 'Προεπιλεγμένος επεξεργαστής προβλέψεων';
$string['defaultpredictoroption'] = 'Προεπιλεγμένος επεξεργαστής ({$a})';
$string['defaulttimesplittingmethods'] = 'Προκαθορισμένα διαστήματα ανάλυσης για την αξιολόγηση του μοντέλου';
$string['defaulttimesplittingmethods_help'] = 'Το διάστημα ανάλυσης ορίζει πότε θα υπολογίζει προβλέψεις το σύστημα και την ποσότητα των καταγραφών δραστηριοτήτων που θα λαμβάνονται υπόψη για αυτές τις προβλέψεις. Η διαδικασία αξιολόγησης του μοντέλου θα επαναληφθεί για όλα αυτά τα διαστήματα ανάλυσης, εκτός εάν καθοριστεί συγκεκριμένο διάστημα ανάλυσης.';
$string['disabledmodel'] = 'Απενεργοποιημένο μοντέλο';
$string['erroralreadypredict'] = 'Το αρχείο {$a} χρησιμοποιήθηκε ήδη για να δημιουργηθούν προβλέψεις';
$string['errorcannotreaddataset'] = 'Δεν είναι δυνατή η ανάγνωση του αρχείου συνόλου δεδομένων {$a}.';
$string['errorcannotusetimesplitting'] = 'Το παρεχόμενο διάστημα ανάλυσης δεν μπορεί να χρησιμοποιηθεί σε αυτό το μοντέλο.';
$string['errorcannotwritedataset'] = 'Δεν είναι δυνατή η εγγραφή στο αρχείο συνόλου δεδομένων {$a}.';
$string['errorexportmodelresult'] = 'Το μοντέλο μηχανικής μάθησης δεν μπορεί να εξαχθεί.';
$string['errorimport'] = 'Σφάλμα κατά την εισαγωγή του αρχείου JSON που δόθηκε.';
$string['errorimportmissingclasses'] = 'Τα ακόλουθα στοιχεία αναλυτικής δεν είναι διαθέσιμα σε αυτόν τον ιστότοπο: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Το παρεχόμενο μοντέλο απαιτεί την εγκατάσταση των ακόλουθων πρόσθετων: {$a}. Σημειώστε ότι οι εκδόσεις δεν χρειάζεται απαραίτητα να ταιριάζουν με τις εκδόσεις που είναι εγκατεστημένες στον ιστότοπό σας. Η εγκατάσταση της ίδιας ή νεότερης έκδοσης του πρόσθετου θα πρέπει να είναι αρκετή στις περισσότερες περιπτώσεις.';
$string['errorimportversionmismatches'] = 'Η έκδοση των παρακάτω στοιχείων λογισμικού διαφέρει από την έκδοση που είναι εγκατεστημένη σε αυτόν τον ιστότοπο: {$a}. Μπορείτε να χρησιμοποιήσετε την επιλογή «Παράβλεψη αναντιστοιχιών εκδόσεων» για να αγνοήσετε αυτές τις διαφορές.';
$string['errorinvalidcontexts'] = 'Κάποια από τα επιλεγμένα πλαίσια συμφραζομένων δεν μπορούν να χρησιμοποιηθούν για αυτόν τον στόχο.';
$string['errorinvalidindicator'] = 'Άκυρος {$a} δείκτης';
$string['errorinvalidtarget'] = 'Μη έγκυρος στόχος {$a}';
$string['errorinvalidtimesplitting'] = 'Μη έγκυρο διάστημα ανάλυσης· παρακαλούμε βεβαιωθείτε ότι προσθέσατε το πλήρες όνομα της κλάσης.';
$string['errornocontextrestrictions'] = 'Ο επιλεγμένος στόχος δεν υποστηρίζει περιορισμούς ανάλογα με τα συμφραζόμενα';
$string['errornoexportconfig'] = 'Παρουσιάστηκε ένα πρόβλημα κατά την εξαγωγή των ρυθμίσεων του μοντέλου.';
$string['errornoexportconfigrequirements'] = 'Μπορούν να εξάγονται μόνο μη στατικά μοντέλα με διάστημα ανάλυσης.';
$string['errornoindicators'] = 'Αυτό το μοντέλο δεν έχει καθόλου δείκτες.';
$string['errornopredictresults'] = 'Ο επεξεργαστής προβλέψεων δεν επέστρεψε κανένα αποτέλεσμα. Ελέγξτε τα περιεχόμενα του φακέλου εξόδου για περισσότερες πληροφορίες.';
$string['errornoroles'] = 'Δεν έχουν οριστεί ρόλοι μαθητών ή διδασκόντων. Ορίστε τους στην σελίδα ρυθμίσεων της αναλυτικής.';
$string['errornotarget'] = 'Αυτό το μοντέλο δεν έχει καθόλου στόχους.';
$string['errornotimesplittings'] = 'Αυτό το μοντέλο δεν έχει καθόλου διάστημα ανάλυσης.';
$string['errorpredictioncontextnotavailable'] = 'Αυτό το πλαίσιο πρόβλεψης δεν είναι πλέον διαθέσιμο.';
$string['errorpredictionformat'] = 'Λανθασμένος μορφότυπος υπολογισμών πρόβλεψης';
$string['errorpredictionnotfound'] = 'Η πρόβλεψη δεν βρέθηκε';
$string['errorpredictionsprocessor'] = 'Σφάλμα επεξεργαστή προβλέψεων: {$a}';
$string['errorpredictwrongformat'] = 'Το αποτέλεσμα του επεξεργαστή προβλέψεων δεν μπορεί να αποκωδικοποιηθεί: «{$a}»';
$string['errorprocessornotready'] = 'Ο επιλεγμένος επεξεργαστής προβλέψεων δεν είναι έτοιμος: {$a}';
$string['errorsamplenotavailable'] = 'Το δείγμα πρόβλεψης δεν είναι πλέον διαθέσιμο.';
$string['errorunexistingmodel'] = 'Μη υπαρκτό μοντέλο {$a}';
$string['errorunexistingtimesplitting'] = 'Το επιλεγμένο διάστημα ανάλυσης δεν είναι διαθέσιμο.';
$string['errorunknownaction'] = 'Άγνωστη ενέργεια';
$string['eventinsightsviewed'] = 'Ενοράσεις που εμφανίστηκαν';
$string['eventpredictionactionstarted'] = 'Η διαδικασία πρόβλεψης άρχισε';
$string['fixedack'] = 'Αποδεκτό';
$string['incorrectlyflagged'] = 'Μη ορθή σημαιοδότηση';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'Το σύστημα δημιούργησε μια ενόραση για εσάς.';
$string['insightinfomessageplain'] = 'Το σύστημα δημιούργησε μια ενόραση για εσάς: {$a}';
$string['insightmessagesubject'] = 'Νέα ενόραση για «{$a}»';
$string['invalidanalysablefortimesplitting'] = 'Δεν μπορεί να αναλυθεί με χρήση του διαστήματος ανάλυσης {$a}.';
$string['invalidtimesplitting'] = 'Το μοντέλο με αναγνωριστικό {$a} χρειάζεται ένα διάστημα ανάλυσης πριν να μπορεί να χρησιμοποιηθεί προς εκπαίδευση.';
$string['levelinstitution'] = 'Επίπεδο εκπαίδευσης';
$string['levelinstitutionisced0'] = 'Αγωγή πρώιμης παιδικής ηλικίας («κατώτερη από πρωτοβάθμια εκπαίδευση» για εκπαιδευτικά επιτεύγματα) [Σταθμοί προσχολικής αγωγής, Νηπιαγωγείο]';
$string['levelinstitutionisced1'] = 'Πρωτοβάθμια εκπαίδευση [Δημοτικό Σχολείο]';
$string['levelinstitutionisced2'] = 'Κατώτερη δευτεροβάθμια εκπαίδευση [Γυμνάσιο]';
$string['levelinstitutionisced3'] = 'Ανώτερη δευτεροβάθμια εκπαίδευση [Λύκειο]';
$string['levelinstitutionisced4'] = 'Μεταδευτεροβάθμια μη τριτοβάθμια εκπαίδευση (μπορεί να περιλαμβάνει κατάρτιση εταιρειών ή κοινότητας/ΜΚΟ) [ΙΕΚ/ΚΕΚ]';
$string['levelinstitutionisced5'] = 'Ανώτερη εκπαίδευση σύντομης διάρκειας (μπορεί να περιλαμβάνει κατάρτιση εταιριών ή κοινότητας/ΜΚΟ)';
$string['levelinstitutionisced6'] = 'Πρώτο πτυχίο ανώτατης εκπαίδευσης ή ισοδύναμο επίπεδο';
$string['levelinstitutionisced7'] = 'Μεταπτυχιακό ή ισοδύναμο επίπεδο';
$string['levelinstitutionisced8'] = 'Διδακτορικό ή ισοδύναμο επίπεδο';
$string['modeinstruction'] = 'Τρόποι κατάρτισης';
$string['modeinstructionblendedhybrid'] = 'Μικτή ή υβριδική';
$string['modeinstructionfacetoface'] = 'Πρόσωπο με πρόσωπο';
$string['modeinstructionfullyonline'] = 'Πλήρως εντός σύνδεσης';
$string['modeloutputdir'] = 'Φάκελος εξόδου μοντέλων';
$string['modeloutputdirinfo'] = 'Φάκελος όπου οι επεξεργαστές προβλέψεων αποθηκεύουν όλες τις πληροφορίες αξιολόγησης. Χρήσιμο για αποσφαλμάτωση και έρευνα.';
$string['modeloutputdirwithdefaultinfo'] = 'Κατάλογος όπου οι επεξεργαστές πρόβλεψης αποθηκεύουν όλες τις πληροφορίες αξιολόγησης. Χρήσιμο για εντοπισμό σφαλμάτων και έρευνα. Εάν είναι κενό, τότε θα χρησιμοποιηθεί ως προεπιλογή ο {$a}.';
$string['modeltimelimit'] = 'Όριο χρόνου ανάλυσης ανά μοντέλο';
$string['modeltimelimitinfo'] = 'Η ρύθμιση αυτή περιορίζει τον χρόνο ανάλυσης των περιεχομένων του ιστοτόπου από κάθε μοντέλο.';
$string['neutral'] = 'Ουδέτερο';
$string['neverdelete'] = 'Να μην διαγράφονται ποτέ υπολογισμοί';
$string['nocourses'] = 'Δεν υπάρχουν μαθήματα για να αναλυθούν';
$string['nodata'] = 'Δεν υπάρχουν δεδομένα για να αναλυθούν';
$string['noevaluationbasedassumptions'] = 'Τα μοντέλα που βασίζονται σε υποθέσεις δεν μπορούν να αξιολογηθούν';
$string['noinsights'] = 'Δεν αναφέρθηκαν ενοράσεις';
$string['noinsightsmodel'] = 'Αυτό το μοντέλο δεν δημιουργεί ενοράσεις';
$string['nonewdata'] = 'Δεν υπάρχουν διαθέσιμα νέα δεδομένα. Το μοντέλο θα αναλυθεί μετά το επόμενο διάστημα ανάλυσης.';
$string['nonewranges'] = 'Δεν υπάρχουν νέες προβλέψεις ακόμη. Το μοντέλο θα αναλυθεί μετά το επόμενο διάστημα ανάλυσης.';
$string['nopredictionsyet'] = 'Δεν υπάρχουν ακόμα διαθέσιμες προβλέψεις';
$string['noranges'] = 'Δεν υπάρχουν προβλέψεις ακόμη';
$string['notapplicable'] = 'Δεν εφαρμόζεται';
$string['notrainingbasedassumptions'] = 'Τα μοντέλα που βασίζονται σε υποθέσεις δεν χρειάζονται εκπαίδευση';
$string['notuseful'] = 'Μη χρήσιμο';
$string['novaliddata'] = 'Δεν υπάρχουν έγκυρα δεδομένα διαθέσιμα';
$string['novalidsamples'] = 'Δεν υπάρχουν έγκυρα δείγματα διαθέσιμα';
$string['onlycli'] = 'Εκτέλεση διεργασιών αναλυτικής μέσω γραμμής εντολών μόνο';
$string['onlycliinfo'] = 'Οι διαδικασίες αναλυτικής, όπως τα μοντέλα αξιολόγησης, η εκπαίδευση αλγορίθμων μηχανικής μάθησης ή η λήψη προβλέψεων, ενδέχεται να διαρκέσουν αρκετό χρόνο. Εκτελούνται ως εργασίες cron ή μη αυτόματα μέσω γραμμής εντολών. Εάν απενεργοποιηθεί, οι διεργασίες αναλυτικής μπορούν να εκτελεστούν χειροκίνητα μέσω της διεπαφής ιστού.';
$string['percentonline'] = 'Ποσοστό εντός σύνδεσης';
$string['percentonline_help'] = 'Εάν ο οργανισμός σας προσφέρει μικτά ή υβριδικά μαθήματα, τι ποσοστό της εργασίας των μαθητών πραγματοποιείται εντός σύνδεσης στο Moodle; Δώστε έναν αριθμό μεταξύ 0 και 100.';
$string['predictionsprocessor'] = 'Επεξεργαστής προβλέψεων';
$string['predictionsprocessor_help'] = 'Ένας επεξεργαστής προβλέψεων είναι το παρασκήνιο (back-end) μηχανικής μάθησης που επεξεργάζεται τα σύνολα δεδομένων που παράγονται από τον υπολογισμό των δεικτών και των στόχων των μοντέλων. Κάθε μοντέλο μπορεί να χρησιμοποιήσει διαφορετικό επεξεργαστή. Αυτός που καθορίζεται εδώ θα είναι ο προεπιλεγμένος.';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Υπολογισμοί δεικτών';
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
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Ο δείκτης του διαστήματος ανάλυσης';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Το αναγνωριστικό του δείγματος';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Πότε έγινε η πρόβλεψη';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Χρόνος λήξης υπολογισμών';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Χρόνος έναρξης υπολογισμών';
$string['processingsitecontents'] = 'Επεξεργασία περιεχομένου ιστοτόπου';
$string['successfullyanalysed'] = 'Αναλύθηκε με επιτυχία';
$string['timesplittingmethod'] = 'Διάστημα ανάλυσης';
$string['timesplittingmethod_help'] = 'Το διάστημα ανάλυσης καθορίζει πότε το σύστημα θα υπολογίσει τις προβλέψεις και την ποσότητα των καταγραφών δραστηριοτήτων που θα ληφθεί υπόψη για αυτές τις προβλέψεις. Π.χ. η διάρκεια του μαθήματος μπορεί να διαιρεθεί σε μέρη και να δημιουργηθεί μια πρόβλεψη στο τέλος κάθε μέρους.';
$string['timesplittingmethod_link'] = 'Μέθοδοι διαίρεσης χρόνου';
$string['typeinstitution'] = 'Τύπος ιδρύματος';
$string['typeinstitutionacademic'] = 'Ακαδημαϊκό';
$string['typeinstitutionngo'] = 'Μη κυβερνητική οργάνωση (ΜΚΟ)';
$string['typeinstitutiontraining'] = 'Εταιρική κατάρτιση';
$string['useful'] = 'Χρήσιμο';
$string['viewdetails'] = 'Εμφάνιση λεπτομερειών';
$string['viewinsight'] = 'Εμφάνιση ενόρασης';
$string['viewinsightdetails'] = 'Εμφάνιση λεπτομερειών ενόρασης';
$string['viewprediction'] = 'Εμφάνιση λεπτομερειών πρόβλεψης';
$string['washelpful'] = 'Βοήθησε αυτό;';
