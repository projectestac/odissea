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
 * Strings for component 'blog', language 'el', branch 'MOODLE_34_STABLE'
 *
 * @package   blog
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Προσθήκη νέας καταχώρησης';
$string['addnewexternalblog'] = 'Καταχώρηση εξωτερικού ιστολογίου';
$string['associatewithcourse'] = 'Ιστολόγιο σχετικά με το μάθημα {$a->coursename}';
$string['associatewithmodule'] = 'Ιστολόγιο σχετικά με {$a->modtype}: {$a->modname}';
$string['autotags'] = 'Προσθέστε αυτές τις ετικέτες';
$string['autotags_help'] = 'Εισάγετε μία ή περισσότερες τοπικές ετικέτες (χωρισμένες με κόμμα) που επιθυμείτε να προσθέσετε αυτόματα σε κάθε καταχώρηση ιστολογίου που αντιγράφεται από το εξωτερικό ιστολόγιο στο τοπικό σας ιστολόγιο.';
$string['backupblogshelp'] = 'Αν ενεργοποιηθεί, τα ιστολόγια θα συμπεριλαμβάνονται στα αυτόματα αντίγραφα ασφαλείας του ΙΣΤΟΤΟΠΟΥ';
$string['blockexternalstitle'] = 'Εξωτερικά ιστολόγια';
$string['blocktitle'] = 'Τίτλος του μπλοκ Ετικέτες ιστολογίων';
$string['blog'] = 'Ιστολόγιο';
$string['blogaboutthis'] = 'Ιστολόγιο για τον τύπο {$a->type}';
$string['blogaboutthiscourse'] = 'Προσθέστε μια καταχώρηση για αυτό το μάθημα';
$string['blogadministration'] = 'Διαχείριση ιστολογίου';
$string['blogdeleteconfirm'] = 'Διαγραφή αυτής της ανάρτησης;';
$string['blogdisable'] = 'Η χρήση ιστολογίων έχει απενεργοποιηθεί!';
$string['blogentries'] = 'Αναρτήσεις (ιστολογίου)';
$string['blogentriesabout'] = 'Αναρτήσεις (ιστολογίου) για {$a}';
$string['blogentriesbygroupaboutcourse'] = 'Αναρτήσεις (ιστολογίου) για το μάθημα {$a->course} από την ομάδα {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'Αναρτήσεις (ιστολογίου) για την ενότητα {$a->mod} από την ομάδα {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'Αναρτήσεις (ιστολογίου) για το μάθημα {$a->course} από τον χρήστη {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'Αναρτήσεις (ιστολογίου) για την ενότητα {$a->mod} από τον χρήστη {$a->user}';
$string['blogentrybyuser'] = 'Αναρτήσεις (ιστολογίου) από {$a}';
$string['blogpreferences'] = 'Ρυθμίσεις ιστολογίου';
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
$string['configuseblogassociations'] = 'Επιτρέπει την συσχέτηση αναρτήσεων (ιστολογίου) με μαθήματα και ενότητες μαθημάτων.';
$string['configuseexternalblogs'] = 'Επιτρέπει σε κάθε χρήστη να καθορίσει feeds εξωτερικών ιστολογίων. Το Moodle τακτικά ελέγχει αυτά τα feeds ιστολογίων και αντιγράφει νέες αναρτήσεις στο τοπικό ιστολόγιο αυτού του χρήστη.';
$string['courseblog'] = 'Ιστολόγιο μαθήματος: {$a}';
$string['courseblogdisable'] = 'Τα ιστολόγια μαθήματος δεν είναι ενεργοποιημένα';
$string['courseblogs'] = 'Οι χρήστες μπορούν να δουν μόνο τα ιστολόγια ατόμων που παρακολουθούν το ίδιο μάθημα';
$string['deleteblogassociations'] = 'Διαγραφή συσχετισμών ιστολογίων';
$string['deleteblogassociations_help'] = 'Αν επιλεγεί τότε οι αναρτήσεις ιστολογίων δεν θα συσχετίζονται πλέον με αυτό το μάθημα ή οποιαδήποτε δραστηριότητα ή πόρο του μαθήματος. Οι ίδιες οι αναρτήσεις δεν θα διαγραφούν.';
$string['deleteexternalblog'] = 'Διαγραφή από αυτό το εξωτερικό ιστολόγιο';
$string['deleteotagswarn'] = 'Θέλετε σίγουρα να αφαιρέσετε αυτές τις ετικέτες από όλες τις αναρτήσεις ιστολογίων και να τις διαγράψετε από το σύστημα;';
$string['description'] = 'Περιγραφή';
$string['description_help'] = 'Εισάγετε μία ή δύο προτάσεις συνοψίζοντας το περιεχόμενο του εξωτερικού σας ιστολογίου. (Αν δεν παρέχεται περιγραφή, θα χρησιμοποιηθεί η περιγραφή που καταγράφεται στο εξωτερικό σας ιστολόγιο).';
$string['donothaveblog'] = 'Λυπάμαι, αλλά δεν έχετε προσωπικό ιστολόγιο.';
$string['editentry'] = 'Επεξεργαστείτε μια ανάρτηση ιστολογίου';
$string['editexternalblog'] = 'Επεξεργαστείτε αυτό το εξωτερικό ιστολόγιο';
$string['emptybody'] = 'Το σώμα μιας ανάρτησης ιστολογίου δεν μπορεί να είναι κενό';
$string['emptytitle'] = 'Ο τίτλος μιας ανάρτησης ιστολογίου δεν μπορεί να είναι κενός';
$string['entrybody'] = 'Σώμα ανάρτησης ιστολογίου';
$string['entrybodyonlydesc'] = 'Περιγραφή δημοσίευσης';
$string['entryerrornotyours'] = 'Αυτή η δημοσίευση δεν είναι δική σας';
$string['entrysaved'] = 'Η δημοσίευσή σας έχει αποθηκευτεί';
$string['entrytitle'] = 'Τίτλος δημοσίευσης';
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
$string['externalblogcrontime'] = '(Χρονο)προγραμματισμός (cron) εξωτερικού ιστολογίου';
$string['externalblogdeleteconfirm'] = 'Διαγραφή της καταχώρησης του εξωτερικού ιστολογίου;';
$string['externalblogdeleted'] = 'Η καταχώρηση του εξωτερικού ιστολογίου διαγράφηκε';
$string['externalblogs'] = 'Εξωτερικά ιστολόγια';
$string['filtertags'] = 'Φίλτρο ετικετών';
$string['filtertags_help'] = 'Μπορείτε να χρησιμοποιήσετε αυτή τη δυνατότητα για να φιλτράρετε τις καταχωρήσεις που θέλετε να χρησιμοποιήσετε. Αν ορίσετε ετικέτες εδώ (χωρισμένες με κόμμα) τότε μόνο οι καταχωρήσεις με αυτές τις ετικέτες θα πρέπει να αντιγραφούν από το εξωτερικό ιστολόγιο.';
$string['groupblog'] = 'Ιστολόγιο ομάδας: {$a}';
$string['groupblogdisable'] = 'Τα ιστολόγια ομάδων είναι απενεργοποιημένα';
$string['groupblogentries'] = 'Αναρτήσεις ιστολογίου συσχετισμένες με το μάθημα  {$a->coursename} από την ομάδα {$a->groupname}';
$string['groupblogs'] = 'Οι χρήστες μπορούν να δουν μόνο τα ιστολόγια των ατόμων της ομάδας τους';
$string['incorrectblogfilter'] = 'Εσφαλμένη επιλογή είδους φίλτρου ιστολογίου';
$string['intro'] = 'Αυτό το RSS δημιουργήθηκε αυτόματα από ένα ή περισσότερα ιστολόγια.';
$string['linktooriginalentry'] = 'Σύνδεσμος με την αρχική ανάρτηση (ιστολογίου)';
$string['maxexternalblogsperuser'] = 'Μέγιστος αριθμός εξωτερικών ιστολογίων ανά χρήστη';
$string['myprofileuserblogs'] = 'Προβολή όλων των αναρτήσεων (ιστολογίου)';
$string['name'] = 'Όνομα';
$string['name_help'] = 'Εισάγετε ένα περιγραφικό όνομα για το εξωτερικό σας ιστολόγιο. (Αν δεν εισάγετε όνομα, θα χρησιμοποιηθεί ο τίτλος του εξωτερικού σας ιστολογίου).';
$string['noentriesyet'] = 'Δεν υπάρχουν δημοσιεύσεις ακόμα';
$string['noguestpost'] = 'Οι επισκέπτες δεν μπορούν να κάνουν ανάρτηση σε ιστολόγια!';
$string['nopermissionstodeleteentry'] = 'Δεν έχετε τα απαιτούμενα δικαιώματα για να διαγράψετε αυτή την καταχώρηση ιστολογίου';
$string['norighttodeletetag'] = 'Δεν έχετε το δικαίωμα διαγραφής αυτής της ετικέτας - {$a}';
$string['nosuchentry'] = 'Ανύπαρκτη ανάρτηση ιστολογίου';
$string['notallowedtoedit'] = 'Δεν μπορείτε να επεξεργαστείτε αυτή την δημοσίευση';
$string['numberofentries'] = 'Δημοσιεύσεις: {$a}';
$string['numberoftags'] = 'Πλήθος ετικετών προς εμφάνιση';
$string['page-blog-edit'] = 'Σελίδες επεξεργασίας ιστολογίων';
$string['page-blog-index'] = 'Σελίδες απαρίθμησης ιστολογίων';
$string['page-blog-x'] = 'Όλες οι σελίδες ιστολογίου';
$string['pagesize'] = 'Αριθμός αναρτήσεων ανά σελίδα';
$string['permalink'] = 'Μόνιμος σύνδεσμος';
$string['personalblogs'] = 'Οι χρήστες μπορούν να δουν μόνο το δικό τους ιστολόγιο';
$string['preferences'] = 'Προτιμήσεις ιστολογίου';
$string['publishto'] = 'Δημοσίευση σε';
$string['publishto_help'] = '<p align="center"><b>Δημοσίευση προς</b></p>

<p>Υπάρχουν τρείς πιθανές ρυθμίσεις εδώ</p>

<p><b>Σε εσάς (Πρόχειρο)</b> - Μόνο εσείς και ο διαχειριστής μπορεί να δει αυτή την δημοσίευση.</p>

<p><b>Σε οποιονδήποτε στο Moodle</b> - Καθένας που εγγράφεται σε αυτό το Moodle μπορεί να διαβάσει αυτήν την δημοσίευση.</p>

<p><b>Σε οποιονδήποτε στο κόσμο</b> - Καθένας, συμπεριλαμβανομένων των επισκεπτών θα μπορεί να διαβάσει αυτήν την δημοσίευση.</p>';
$string['publishtonoone'] = 'Στον εαυτό σου (πρόχειρο)';
$string['publishtosite'] = 'Οποιονδήποτε στη σελίδα';
$string['publishtoworld'] = 'Οποιονδήποτε στον κόσμο';
$string['relatedblogentries'] = 'Σχετικές αναρτήσεις (ιστολογίου)';
$string['rssfeed'] = 'RSS feed Ιστολογίου';
$string['searchterm'] = 'Αναζήτηση: {$a}';
$string['settingsupdatederror'] = 'Σφάλμα κατά την ενημέρωση ρύθμισης ιστολογίου';
$string['siteblogdisable'] = 'Το ιστολόγιο ιστοτόπου είναι απενεργοποιημένο';
$string['siteblogheading'] = 'Ιστολόγιο ιστοτόπου';
$string['siteblogs'] = 'Όλοι οι χρήστες του ιστοτόπου μπορούν να δουν όλα τα ιστολόγια';
$string['tagdatelastused'] = 'Η ετικέτα ημερομηνίας χρησιμοποιήθηκε τελευταία';
$string['tags'] = 'Ετικέτες';
$string['tagsort'] = 'Ταξινόμηση ετικετών ανά';
$string['tagtext'] = 'Κείμενο ετικέτας';
$string['timewithin'] = 'Εμφάνιση ετικετών που χρησιμοποιήθηκαν τις Ν τελευταίες μέρες';
$string['updateentrywithid'] = 'Ανανέωση εγγραφής';
$string['url'] = 'URL τροφοδοσίας RSS';
$string['url_help'] = 'Εισάγετε τo URL του RSS feed για το εξωτερικό σας ιστολόγιο.';
$string['useblogassociations'] = 'Ενεργοποίηση συσχετίσεων ιστολογίου';
$string['useexternalblogs'] = 'Ενεργοποίηση εξωτερικών ιστολογίων';
$string['userblog'] = 'Ιστολόγιο χρήστη: {$a}';
$string['userblogentries'] = 'Αναρτήσεις από {$a}';
$string['viewallmyentries'] = 'Προβολή όλων των καταχωρήσεων μου';
$string['viewcourseblogs'] = 'Δείτε όλες τις καταχωρήσεις για αυτό το μάθημα';
$string['viewmyentries'] = 'Προβολή των εγγραφών μου';
$string['viewmyentriesaboutcourse'] = 'Δείτε τις καταχωρήσεις μου για αυτό το μάθημα';
$string['viewsiteentries'] = 'Προβολή όλων των εγγραφών';
$string['worldblogs'] = 'Ο κόσμος μπορεί να δει καταχωρήσεις που έχουν οριστεί ως προσβάσιμες από τον κόσμο';
$string['wrongexternalid'] = 'Λανθασμένο αναγνωριστικό εξωτερικού ιστολογίου';
$string['wrongpostid'] = 'Ανύπαρκτη ανάρτηση ιστολογίου';
