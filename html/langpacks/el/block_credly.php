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
 * Strings for component 'block_credly', language 'el', version '4.5'.
 *
 * @package     block_credly
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewbadge'] = 'Προσθήκη νέου διακριτικού';
$string['apikey'] = 'Κλειδί API';
$string['apikeydesc'] = 'Το κλειδί API όπως παρέχεται από το credly';
$string['apipassword'] = 'Κωδικός πρόσβασης';
$string['apisecret'] = 'Μυστικό API';
$string['apisecretdesc'] = 'Το μυστικό API όπως παρέχεται από το Credly';
$string['apiuser'] = 'Όνομα χρήστη';
$string['badgeimage'] = 'Εικόνα διακριτικού';
$string['created_at'] = 'Ημερομηνία δημιουργίας';
$string['createnewbadge'] = 'Δημιουργία ενός νέου διακριτικού';
$string['credly:addinstance'] = 'Προσθήκη ενός νέου μπλοκ Credly';
$string['credly:grantbadge'] = 'Απονομή ενός διακριτικού Credly σε έναν χρήστη';
$string['credlybadges'] = 'Διακριτικά Credly';
$string['credlyerrorresponse'] = 'Ο εξυπηρετητής Credly αποκρίθηκε με το ακόλουθο σφάλμα: {$a}';
$string['criteria'] = 'Κριτήρια';
$string['criteria_help'] = 'Κριτήρια για το νέο διακριτικό (μέχρι 500 χαρακτήρες)';
$string['description'] = 'Περιγραφή';
$string['description_help'] = 'Μια πλήρης περιγραφή για το νέο διακριτικό (μέχρι 500 χαρακτήρες)';
$string['editbadge'] = 'Επεξεργασία ενός διακριτικού';
$string['errorfetchingbadgeinfo'] = 'Το σύστημα αντιμετώπισε ένα σφάλμα κατά την προσπάθεια εύρεσης/ανάκτησης των πληροφοριών διακριτικού από το Credly.';
$string['expires_in'] = 'Λήγει μετά από τόσα δευτερόλεπτα';
$string['expires_in_help'] = 'Αριθμός δευτερολέπτων έως τη λήξη του διακριτικού από τη στιγμή έκδοσής του. Η τιμή 0 σημαίνει ποτέ.';
$string['fetcherror'] = 'Το σύστημα αντιμετώπισε σφάλμα κατά την ανάκτηση των πληροφοριών του διακριτικού.';
$string['grantbadge'] = 'Απονομή ενός διακριτικού';
$string['grantbadgerequired'] = 'Απαιτείται να επιλέξετε ένα διακριτικό προς απονομή.';
$string['grantedtouser'] = 'Το διακριτικό εκδόθηκε και ο χρήστης ειδοποιήθηκε μέσω ηλε.ταχυδρομείου Credly. Ο χρήστης ενδέχεται ακόμα να χρειαστεί να αποδεχτεί το διακριτικό ανάλογα με τις ρυθμίσεις λογαριασμού του χρήστη στο Credly.';
$string['granterror'] = 'Το σύστημα αντιμετώπισε σφάλμα κατά την προσπάθεια απονομής του διακριτικού.';
$string['granttocandidates'] = 'Όλοι οι μαθητές';
$string['granttocandidatesmatching'] = 'Μαθητές που ταιριάζουν με «{$a}»';
$string['grantuserrequired'] = 'Απαιτείται να επιλέξετε έναν χρήστη για να του εκδώσετε ένα διακριτικό.';
$string['id'] = 'Αναγνωριστικό';
$string['image_preview'] = 'Προεπισκόπηση εικόνας';
$string['image_preview_current'] = 'Προεπισκόπηση τρέχουσας εικόνας';
$string['image_url'] = 'Διεύθυνση URL εικόνας';
$string['is_claimable'] = 'Μπορεί να ζητηθεί';
$string['is_giveable'] = 'Μπορούν άλλοι να δώσουν αυτό το διακριτικό;';
$string['is_giveable_help'] = 'Εάν το νέο διακριτικό μπορεί να δοθεί από άλλα μέλη του Credly εκτός από τον δημιουργό';
$string['issuebadge'] = 'Έκδοση διακριτικού';
$string['managebadges'] = 'Διαχείριση διακριτικών';
$string['missingbadgeimage'] = 'Απαιτείται μια εικόνα διακριτικού';
$string['missingtitle'] = 'Απαιτείται τίτλος';
$string['mybadges'] = 'Τα διακριτικά μου';
$string['noearnedbadges'] = 'Δεν έχετε αποκτήσει κανένα διακριτικό ακόμη.';
$string['orgid'] = 'Αναγνωριστικό οργανισμού';
$string['pluginname'] = 'Credly';
$string['selectbadgeaward'] = 'Επιλογή διακριτικού προς απονομή';
$string['short_description'] = 'Σύντομη περιγραφή';
$string['short_description_help'] = 'Μια σύντομη περιγραφή για το νέο διακριτικό (μέχρι 128 χαρακτήρες)';
$string['showinglatest'] = 'Τα {$a} τελευταία διακριτικά σας.';
$string['shownumlabel'] = 'Πόσα διακριτικά να εμφανιστούν';
$string['thumbnail'] = 'Μικρογραφία';
$string['title'] = 'Τίτλος';
$string['title_help'] = 'Ο τίτλος του νέου διακριτικού (μέχρι 128 χαρακτήρες)';
$string['usecache'] = 'Χρήση κρυφής μνήμης';
$string['usecachedesc'] = 'Εάν θα ενεργοποιηθεί η κρυφή μνήμη (24 ώρες) αποτελεσμάτων του API στη βάση δεδομένων. Αυτό δεν είναι συνήθως απαραίτητο, καθώς το Credly παρέχει ήδη επαρκή όρια. Αυτό βρίσκεται εδώ κυρίως ως μέρος κώδικα παλαιότερης έκδοσης.';
$string['viewallmy'] = 'Εμφάνιση όλων των διακριτικών μου';
$string['viewbadge'] = 'Εμφάνιση διακριτικού';
$string['viewincredly'] = 'Εμφάνιση στο Credly';
