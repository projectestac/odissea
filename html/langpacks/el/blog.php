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
 * Strings for component 'blog', language 'el', branch 'MOODLE_38_STABLE'
 *
 * @package   blog
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Προσθήκη νέας καταχώρησης';
$string['addnewexternalblog'] = 'Καταχώρηση εξωτερικού ιστολογίου';
$string['assocdescription'] = 'Αν γράφετε σχετικά με αρθρώματα μαθήματος και/ή δραστηριοτήτων, επιλέξτε τα εδώ.';
$string['associated'] = 'Συσχετισμένο {$a}';
$string['associatewithcourse'] = 'Ιστολόγιο σχετικά με το μάθημα {$a->coursename}';
$string['associatewithmodule'] = 'Ιστολόγιο σχετικά με {$a->modtype}: {$a->modname}';
$string['association'] = 'Συσχέτιση';
$string['associations'] = 'Συσχετίσεις';
$string['associationunviewable'] = 'Αυτή η καταχώρηση δεν μπορεί να προβληθεί από άλλους μέχρις ότου ένα μάθημα συσχετιστεί με αυτό ή το πεδίο «Δημοσίευση σε» έχει αλλάξει';
$string['autotags'] = 'Προσθέστε αυτές τις ετικέτες';
$string['autotags_help'] = 'Εισάγετε μία ή περισσότερες τοπικές ετικέτες (χωρισμένες με κόμμα) που επιθυμείτε να προσθέσετε αυτόματα σε κάθε καταχώρηση ιστολογίου που αντιγράφεται από το εξωτερικό ιστολόγιο στο τοπικό σας ιστολόγιο.';
$string['backupblogshelp'] = 'Αν ενεργοποιηθεί, τα ιστολόγια θα συμπεριλαμβάνονται στα αυτόματα αντίγραφα ασφαλείας του ΙΣΤΟΤΟΠΟΥ';
$string['blockexternalstitle'] = 'Εξωτερικά ιστολόγια';
$string['blog'] = 'Ιστολόγιο';
$string['blogaboutthis'] = 'Ιστολόγιο για τον τύπο {$a->type}';
$string['blogaboutthiscourse'] = 'Προσθέστε μια καταχώρηση για αυτό το μάθημα';
$string['blogaboutthismodule'] = 'Προσθέστε μια καταχώρηση για αυτό (το άρθρωμα) {$a}';
$string['blogadministration'] = 'Διαχείριση ιστολογίου';
$string['blogdeleteconfirm'] = 'Διαγραφή της ανάρτησης ιστολογίου «{$a}»;';
$string['blogdisable'] = 'Η χρήση ιστολογίων έχει απενεργοποιηθεί!';
$string['blogentries'] = 'Αναρτήσεις ιστολογίου';
$string['blogentriesabout'] = 'Αναρτήσεις ιστολογίου για {$a}';
$string['blogentriesbygroupaboutcourse'] = 'Αναρτήσεις ιστολογίου για το μάθημα {$a->course} από την ομάδα {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'Αναρτήσεις ιστολογίου για το άρθρωμα {$a->mod} από την ομάδα {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'Αναρτήσεις ιστολογίου για το μάθημα {$a->course} από τον χρήστη {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'Αναρτήσεις ιστολογίου για το άρθρωμα {$a->mod} από τον χρήστη {$a->user}';
$string['blogentrybyuser'] = 'Αναρτήσεις ιστολογίου από {$a}';
$string['blogpreferences'] = 'Προτιμήσεις ιστολογίων';
$string['blogs'] = 'Ιστολόγια';
$string['blogscourse'] = 'Ιστολόγια μαθήματος';
$string['blogssite'] = 'Ιστολόγια ιστοτόπου';
$string['blogtags'] = 'Ετικέτες ιστολογίου';
$string['cannotviewcourseblog'] = 'Δεν έχετε τα απαιτούμενα δικαιώματα για να δείτε τα ιστολόγια αυτού του μαθήματος';
$string['cannotviewcourseorgroupblog'] = 'Δεν έχετε τα απαιτούμενα δικαιώματα για να δείτε τα ιστολόγια αυτού του μαθήματος/αυτής της ομάδας';
$string['cannotviewsiteblog'] = 'Δεν έχετε τα απαιτούμενα δικαιώματα για να δείτε όλα τα ιστολόγια του ιστοτόπου';
$string['cannotviewuserblog'] = 'Δεν έχετε τα απαιτούμενα δικαιώματα για να δείτε ιστολόγια χρηστών';
$string['configexternalblogcrontime'] = 'Πόσο συχνά ελέγχει το Moodle τα εξωτερικά ιστολόγια για νέες αναρτήσεις.';
$string['configmaxexternalblogsperuser'] = 'Πόσα εξωτερικά ιστολόγια επιτρέπεται κάθε χρήστης να συνδέσει με το ιστολόγιό του στο Moodle.';
$string['configuseblogassociations'] = 'Επιτρέπει την συσχέτιση αναρτήσεων ιστολογίου με μαθήματα και ενότητες μαθημάτων.';
$string['configuseexternalblogs'] = 'Επιτρέπει σε κάθε χρήστη να καθορίσει feeds εξωτερικών ιστολογίων. Το Moodle τακτικά ελέγχει αυτά τα feeds ιστολογίων και αντιγράφει νέες αναρτήσεις στο τοπικό ιστολόγιο αυτού του χρήστη.';
$string['courseblog'] = 'Ιστολόγιο μαθήματος: {$a}';
$string['courseblogdisable'] = 'Τα ιστολόγια μαθήματος δεν είναι ενεργοποιημένα';
$string['courseblogs'] = 'Οι χρήστες μπορούν να δουν μόνο τα ιστολόγια ατόμων που παρακολουθούν ένα κοινό μάθημα';
$string['deleteblogassociations'] = 'Διαγραφή συσχετίσεων ιστολογίων';
$string['deleteblogassociations_help'] = 'Αν επιλεγεί τότε οι αναρτήσεις ιστολογίων δεν θα συσχετίζονται πλέον με αυτό το μάθημα ή οποιαδήποτε δραστηριότητα ή πόρο του μαθήματος. Οι ίδιες οι αναρτήσεις δεν θα διαγραφούν.';
$string['deleteentry'] = 'Διαγραφή καταχώρησης';
$string['deleteexternalblog'] = 'Διαγραφή από αυτό το εξωτερικό ιστολόγιο';
$string['deleteotagswarn'] = 'Θέλετε σίγουρα να αφαιρέσετε αυτές τις ετικέτες από όλες τις αναρτήσεις ιστολογίων και να τις διαγράψετε από το σύστημα;';
$string['description'] = 'Περιγραφή';
$string['description_help'] = 'Εισάγετε μία ή δύο προτάσεις συνοψίζοντας το περιεχόμενο του εξωτερικού σας ιστολογίου. (Αν δεν παρέχεται περιγραφή, θα χρησιμοποιηθεί η περιγραφή που καταγράφεται στο εξωτερικό σας ιστολόγιο).';
$string['donothaveblog'] = 'Λυπάμαι, αλλά δεν έχετε προσωπικό ιστολόγιο.';
$string['editentry'] = 'Επεξεργαστείτε μια ανάρτηση ιστολογίου';
$string['editexternalblog'] = 'Επεξεργαστείτε αυτό το εξωτερικό ιστολόγιο';
$string['emptybody'] = 'Το σώμα μιας ανάρτησης ιστολογίου δεν μπορεί να είναι κενό';
$string['emptyrssfeed'] = 'Η διεύθυνση URL που καταχωρήσατε δεν δείχνει μια έγκυρη τροφοδοσία RSS';
$string['emptytitle'] = 'Ο τίτλος μιας ανάρτησης ιστολογίου δεν μπορεί να είναι κενός';
$string['emptyurl'] = 'Πρέπει να καθορίσετε μια διεύθυνση URL προς μια έγκυρη τροφοδοσία RSS';
$string['entrybody'] = 'Σώμα ανάρτησης ιστολογίου';
$string['entrybodyonlydesc'] = 'Περιγραφή ανάρτησης';
$string['entryerrornotyours'] = 'Αυτή η ανάρτηση δεν είναι δική σας';
$string['entrysaved'] = 'Η ανάρτησή σας έχει αποθηκευτεί';
$string['entrytitle'] = 'Τίτλος ανάρτησης';
$string['eventblogassociationadded'] = 'Η συσχέτιση ιστολογίου δημιουργήθηκε';
$string['eventblogassociationdeleted'] = 'Η συσχέτιση ιστολογίου διαγράφηκε';
$string['eventblogentriesviewed'] = 'Αναγνωσμένες αναρτήσεις ιστολογίου';
$string['eventblogexternaladded'] = 'Το εξωτερικό ιστολόγιο καταχωρήθηκε';
$string['eventblogexternalremoved'] = 'Η καταχώρηση εξωτερικού ιστολογίου διαγράφηκε';
$string['eventblogexternalupdated'] = 'Το εξωτερικό ιστολόγιο ενημερώθηκε';
$string['evententryadded'] = 'Η ανάρτηση προστέθηκε';
$string['evententrydeleted'] = 'Η ανάρτηση διαγράφηκε';
$string['evententryupdated'] = 'Η ανάρτηση ενημερώθηκε';
$string['eventexternalblogsviewed'] = 'Αναγνωσμένα εξωτερικά καταχωρημένα ιστολόγια';
$string['externalblogcrontime'] = 'Χρονοδιάγραμμα (της εντολής χρονο-προγραμματισμού) cron, εξωτερικού ιστολογίου';
$string['externalblogdeleteconfirm'] = 'Διαγραφή της καταχώρησης του εξωτερικού ιστολογίου;';
$string['externalblogdeleted'] = 'Η καταχώρηση του εξωτερικού ιστολογίου διαγράφηκε';
$string['externalblogs'] = 'Εξωτερικά ιστολόγια';
$string['feedisinvalid'] = 'Αυτή η ροή δεν είναι έγκυρη';
$string['feedisvalid'] = 'Αυτή η ροή είναι έγκυρη';
$string['filterblogsby'] = 'Φιλτράρισμα των καταχωρήσεων με ...';
$string['filtertags'] = 'Φίλτρο ετικετών';
$string['filtertags_help'] = 'Μπορείτε να χρησιμοποιήσετε αυτή τη δυνατότητα για να φιλτράρετε τις καταχωρήσεις που θέλετε να χρησιμοποιήσετε. Αν ορίσετε ετικέτες εδώ (χωρισμένες με κόμμα) τότε μόνο οι καταχωρήσεις με αυτές τις ετικέτες θα πρέπει να αντιγραφούν από το εξωτερικό ιστολόγιο.';
$string['groupblog'] = 'Ιστολόγιο ομάδας: {$a}';
$string['groupblogdisable'] = 'Τα ιστολόγια ομάδων είναι απενεργοποιημένα';
$string['groupblogentries'] = 'Αναρτήσεις ιστολογίου συσχετισμένες με το μάθημα {$a->coursename} από την ομάδα {$a->groupname}';
$string['groupblogs'] = 'Οι χρήστες μπορούν να δουν μόνο τα ιστολόγια των ατόμων της ομάδας τους';
$string['incorrectblogfilter'] = 'Εσφαλμένη επιλογή είδους φίλτρου ιστολογίου';
$string['intro'] = 'Αυτή η τροφοδοσία RSS δημιουργήθηκε αυτόματα από ένα ή περισσότερα ιστολόγια.';
$string['invalidgroupid'] = 'Μη έγκυρο αναγνωριστικό ομάδας';
$string['invalidurl'] = 'Αυτή η διεύθυνση URL δεν είναι προσβάσιμη';
$string['linktooriginalentry'] = 'Σύνδεσμος με την αρχική ανάρτηση ιστολογίου';
$string['maxexternalblogsperuser'] = 'Μέγιστος αριθμός εξωτερικών ιστολογίων ανά χρήστη';
$string['myprofileuserblogs'] = 'Εμφάνιση όλων των αναρτήσεων ιστολογίου';
$string['name'] = 'Όνομα';
$string['name_help'] = 'Εισάγετε ένα περιγραφικό όνομα για το εξωτερικό σας ιστολόγιο. (Αν δεν εισάγετε όνομα, θα χρησιμοποιηθεί ο τίτλος του εξωτερικού σας ιστολογίου).';
$string['noentriesyet'] = 'Δεν υπάρχουν ορατές καταχωρήσεις ακόμα';
$string['noguestpost'] = 'Οι επισκέπτες δεν μπορούν να κάνουν ανάρτηση σε ιστολόγια!';
$string['nopermissionstodeleteentry'] = 'Δεν έχετε τα απαιτούμενα δικαιώματα για να διαγράψετε αυτή την καταχώρηση ιστολογίου';
$string['norighttodeletetag'] = 'Δεν έχετε το δικαίωμα διαγραφής αυτής της ετικέτας - {$a}';
$string['nosuchentry'] = 'Ανύπαρκτη ανάρτηση ιστολογίου';
$string['notallowedtoedit'] = 'Δεν μπορείτε να επεξεργαστείτε αυτή την ανάρτηση';
$string['numberofentries'] = 'Αναρτήσεις: {$a}';
$string['numberoftags'] = 'Πλήθος ετικετών προς εμφάνιση';
$string['page-blog-edit'] = 'Σελίδες επεξεργασίας ιστολογίων';
$string['page-blog-index'] = 'Σελίδες απαρίθμησης ιστολογίων';
$string['page-blog-x'] = 'Όλες οι σελίδες ιστολογίου';
$string['pagesize'] = 'Αριθμός αναρτήσεων ανά σελίδα';
$string['permalink'] = 'Μόνιμος σύνδεσμος';
$string['personalblogs'] = 'Οι χρήστες μπορούν να δουν μόνο το δικό τους ιστολόγιο';
$string['preferences'] = 'Προτιμήσεις ιστολογίου';
$string['privacy:metadata:core_comments'] = 'Σχόλια που συσχετίζονται με καταχωρήσεις ιστολογίου';
$string['privacy:metadata:core_files'] = 'Αρχεία που συνδέονται με καταχωρήσεις ιστολογίου';
$string['privacy:metadata:core_tag'] = 'Ετικέτες που συσχετίζονται με καταχωρήσεις ιστολογίου';
$string['privacy:metadata:external'] = 'Ένας σύνδεσμος προς μια εξωτερική τροφοδοσία RSS';
$string['privacy:metadata:external:description'] = 'Περιγραφή της τροφοδοσίας';
$string['privacy:metadata:external:filtertags'] = 'Η λίστα των ετικετών για να φιλτράρετε με αυτές, τις καταχωρήσεις';
$string['privacy:metadata:external:name'] = 'Το όνομα της τροφοδοσίας';
$string['privacy:metadata:external:timefetched'] = 'Ημερομηνία κατά την οποία λήφθηκε τελευταία η τροφή';
$string['privacy:metadata:external:timemodified'] = 'Η ώρα κατά την οποία η συσχέτιση τροποποιήθηκε τελευταία φορά';
$string['privacy:metadata:external:url'] = 'Η διεύθυνση URL της τροφοδοσίας';
$string['privacy:metadata:external:userid'] = 'Το αναγνωριστικό του χρήστη που πρόσθεσε την εξωτερική καταχώρηση ιστολογίου.';
$string['privacy:metadata:post'] = 'Οι πληροφορίες που σχετίζονται με αναρτήσεις ιστολογίου';
$string['privacy:metadata:post:content'] = 'Το περιεχόμενο μιας εξωτερικής καταχώρησης ιστολογίου.';
$string['privacy:metadata:post:created'] = 'Ημερομηνία κατά την οποία δημιουργήθηκε η καταχώρηση.';
$string['privacy:metadata:post:lastmodified'] = 'Ημερομηνία κατά την οποία η καταχώρηση τροποποιήθηκε τελευταία.';
$string['privacy:metadata:post:publishstate'] = 'Εάν η καταχώρηση θα είναι ορατή σε άλλους ή όχι';
$string['privacy:metadata:post:subject'] = 'Τίτλος καταχώρησης στο ιστολόγιο';
$string['privacy:metadata:post:summary'] = 'Καταχώρηση στο ιστολόγιο.';
$string['privacy:metadata:post:uniquehash'] = 'Ένα μοναδικό αναγνωριστικό για μια εξωτερική καταχώρηση, συνήθως μια διεύθυνση URL.';
$string['privacy:metadata:post:userid'] = 'Το αναγνωριστικό του χρήστη που πρόσθεσε την καταχώρηση του ιστολογίου.';
$string['privacy:metadata:post:usermodified'] = 'Ο χρήστης που τροποποίησε τελευταίος την καταχώρηση';
$string['privacy:path:blogassociations'] = 'Συσχετισμένες αναρτήσεις ιστολογίου';
$string['privacy:unknown'] = 'Άγνωστος';
$string['publishto'] = 'Δημοσίευση σε';
$string['publishtocourse'] = 'Χρήστες που μοιράζονται ένα μάθημα μαζί σας';
$string['publishtocourseassoc'] = 'Μέλη του συσχετισμένου μαθήματος';
$string['publishtocourseassocparam'] = 'Μέλη του {$a}';
$string['publishtogroup'] = 'Χρήστες που μοιράζονται μια ομάδα μαζί σας';
$string['publishtogroupassoc'] = 'Τα μέλη της ομάδας σας στο συσχετισμένο μάθημα';
$string['publishtogroupassocparam'] = 'Τα μέλη της ομάδας σας στο {$a}';
$string['publishto_help'] = 'Υπάρχουν 3 επιλογές:

* Στον εαυτό σας (προσχέδιο) - Μόνο εσείς και οι διαχειριστές μπορείτε να δείτε αυτή την καταχώρηση
* Οποιοσδήποτε σε αυτόν τον ιστότοπο - Όποιος είναι εγγεγραμμένος σε αυτόν τον ιστότοπο μπορεί να διαβάσει αυτή την καταχώρηση
* Οποιοσδήποτε στον κόσμο - Οποιοσδήποτε, συμπεριλαμβανομένων των επισκεπτών, μπορεί να διαβάσει αυτή την καταχώρηση';
$string['publishtonoone'] = 'Στον εαυτό σας (προσχέδιο)';
$string['publishtosite'] = 'Οποιοσδήποτε σε αυτόν τον ιστότοπο';
$string['publishtoworld'] = 'Οποιοσδήποτε στον κόσμο';
$string['readfirst'] = 'Διαβάστε πρώτα αυτό';
$string['relatedblogentries'] = 'Σχετικές αναρτήσεις ιστολογίου';
$string['retrievedfrom'] = 'Ανακτήθηκε από';
$string['rssfeed'] = 'Τροφοδοσία RSS Ιστολογίου';
$string['searchterm'] = 'Αναζήτηση: {$a}';
$string['settingsupdatederror'] = 'Παρουσιάστηκε κάποιο σφάλμα. Η ρύθμιση προτίμησης ιστολογίου δεν μπόρεσε να ενημερωθεί.';
$string['siteblogdisable'] = 'Το ιστολόγιο ιστοτόπου είναι απενεργοποιημένο';
$string['siteblogheading'] = 'Ιστολόγιο ιστοτόπου';
$string['siteblogs'] = 'Όλοι οι χρήστες του ιστοτόπου μπορούν να δουν όλα τα ιστολόγια';
$string['tagdatelastused'] = 'Η ετικέτα ημερομηνίας χρησιμοποιήθηκε τελευταία';
$string['tagparam'] = 'Ετικέτα: {$a}';
$string['tags'] = 'Ετικέτες';
$string['tagsort'] = 'Ταξινόμηση ετικετών ανά';
$string['tagtext'] = 'Κείμενο ετικέτας';
$string['timefetched'] = 'Χρόνος τελευταίου συγχρονισμού';
$string['timewithin'] = 'Εμφάνιση ετικετών που χρησιμοποιήθηκαν τις Ν τελευταίες μέρες';
$string['updateentrywithid'] = 'Ανανέωση εγγραφής';
$string['url'] = 'Διεύθυνση URL τροφοδοσίας RSS';
$string['url_help'] = 'Εισάγετε τη διεύθυνση URL της RSS τροφοδοσίας για το εξωτερικό σας ιστολόγιο.';
$string['useblogassociations'] = 'Ενεργοποίηση συσχετίσεων ιστολογίου';
$string['useexternalblogs'] = 'Ενεργοποίηση εξωτερικών ιστολογίων';
$string['userblog'] = 'Ιστολόγιο χρήστη: {$a}';
$string['userblogentries'] = 'Αναρτήσεις ιστολογίου από {$a}';
$string['valid'] = 'Έγκυρος';
$string['viewallblogentries'] = 'Όλες οι αναρτήσεις σχετικά με αυτό (το ιστολόγιο) {$a}';
$string['viewallmodentries'] = 'Δείτε όλες τις καταχωρήσεις σχετικά με αυτό (το άρθρωμα) {$a->type}';
$string['viewallmyentries'] = 'Εμφάνιση όλων των καταχωρήσεων μου';
$string['viewblogentries'] = 'Ενδείξεις σχετικά με αυτό (το ιστολόγιο) {$a->type}';
$string['viewblogsfor'] = 'Δείτε όλες τις καταχωρήσεις για...';
$string['viewcourseblogs'] = 'Δείτε όλες τις καταχωρήσεις για αυτό το μάθημα';
$string['viewentriesbyuseraboutcourse'] = 'Εμφάνιση καταχωρήσεων σχετικά με αυτό το μάθημα από {$a}';
$string['viewgroupblogs'] = 'Δείτε τις καταχωρήσεις για την ομάδα...';
$string['viewgroupentries'] = 'Καταχωρήσεις ομάδας';
$string['viewmodblogs'] = 'Δείτε τις καταχωρήσεις για το άρθρωμα...';
$string['viewmodentries'] = 'Καταχωρήσεις αρθρώματος';
$string['viewmyentries'] = 'Οι καταχωρήσεις μου';
$string['viewmyentriesaboutcourse'] = 'Δείτε τις καταχωρήσεις μου για αυτό το μάθημα';
$string['viewmyentriesaboutmodule'] = 'Δείτε τις καταχωρήσεις μου για αυτό (το άρθρωμα) {$a}';
$string['viewsiteentries'] = 'Εμφάνιση όλων των καταχωρήσεων';
$string['viewuserentries'] = 'Δείτε όλες τις καταχωρήσεις του/της {$a}';
$string['worldblogs'] = 'Ο κόσμος μπορεί να δει καταχωρήσεις που έχουν οριστεί ως προσβάσιμες από τον κόσμο';
$string['wrongexternalid'] = 'Λανθασμένο αναγνωριστικό εξωτερικού ιστολογίου';
$string['wrongpostid'] = 'Ανύπαρκτη ανάρτηση ιστολογίου';
