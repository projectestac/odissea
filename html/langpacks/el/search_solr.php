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
 * Strings for component 'search_solr', language 'el', version '4.1'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'Ο εξυπηρετητής Solr (πλατφόρμα αναζήτησης) δεν είναι διαθέσιμος ή ο δείκτης που αναφέρθηκε δεν υπάρχει.';
$string['connectionsettings'] = 'Ρυθμίσεις σύνδεσης';
$string['errorcreatingschema'] = 'Σφάλμα κατά τη δημιουργία του σχήματος Solr (πλατφόρμα αναζήτησης): {$a}';
$string['errorsolr'] = 'Η μηχανή αναζήτησης Solr ανέφερε ένα σφάλμα: {$a}';
$string['errorvalidatingschema'] = 'Σφάλμα κατά την επικύρωση του σχήματος Solr (πλατφόρμα αναζήτησης): το πεδίο {$a->fieldname} δεν υπάρχει. Παρακαλούμε <a href="{$a->setupurl}">ακολουθήστε αυτό τον σύνδεσμο</a> για να ρυθμίσετε τα απαιτούμενα πεδία.';
$string['extensionerror'] = 'Η PHP επέκταση του εξυπηρετητή Apache, με όνομα Solr (πλατφόρμα αναζήτησης) δεν έχει εγκατασταθεί. Παρακαλούμε ελέγξτε την τεκμηρίωση.';
$string['fileindexing'] = 'Ενεργοποιήστε την ευρετηρίαση αρχείων';
$string['fileindexing_help'] = 'Αν η εγκατάσταση του Solr το επιτρέπει, αυτό το χαρακτηριστικό επιτρέπει στο Moodle να στέλνει αρχεία για να συμπεριληφθούν τα περιεχόμενά τους σε ευρετήρια.<br />
Θα πρέπει να αναδημιουργήσετε το ευρετήριο για όλα τα περιεχόμενα του ιστοτόπου, αφού ενεργοποιήσετε αυτή την επιλογή, ώστε να ευρετηριασθούν όλα τα αρχεία.';
$string['fileindexsettings'] = 'Ρυθμίσεις ευρετηρίασης αρχείων';
$string['maxindexfilekb'] = 'Μέγιστο μέγεθος αρχείου προς ευρετηρίαση (σε kB)';
$string['maxindexfilekb_help'] = 'Αρχεία μεγαλύτερα από αυτόν τον αριθμό kilobytes δεν θα συμπεριληφθούν στη ευρετηρίαση αναζήτησης. Αν οριστεί σε μηδέν, θα ευρετηριαστούν τα αρχεία οποιουδήποτε μεγέθους.';
$string['minimumsolr4'] = 'Solr 4.0 είναι η ελάχιστη απαιτούμενη έκδοση για το Moodle.';
$string['missingconfig'] = 'Η πλατφόρμα αναζήτησης Solr του εξυπηρετητή Apache δεν έχει ρυθμιστεί ακόμα στο Moodle.';
$string['multivaluedfield'] = 'Το πεδίο «{$a}» επέστρεψε έναν πίνακα αντί για μια κλιμακωτή τιμή (αριθμό). Παρακαλούμε διαγράψτε το τρέχων ευρετήριο, δημιουργήστε ένα νέο και εκτελέστε το setup_schema.php πριν ευρετηριάσετε δεδομένα στο Solr.';
$string['nodatafromserver'] = 'Δεν υπάρχουν δεδομένα από τον εξυπηρετητή';
$string['pluginname'] = 'Solr (πλατφόρμα αναζήτησης)';
$string['privacy:metadata'] = 'Αυτό το πρόσθετο στέλνει δεδομένα εξωτερικά σε μια συνδεδεμένη μηχανή αναζήτησης Solr. Δεν αποθηκεύει δεδομένα τοπικά.';
$string['privacy:metadata:data'] = 'Προσωπικά δεδομένα που διαβιβάστηκαν από το υποσύστημα αναζήτησης.';
$string['schemafieldautocreated'] = 'Το πεδίο «{$a}» υπάρχει ήδη στο σχήμα Solr. Έχετε πιθανώς ξεχάσει να εκτελέσετε αυτό το σενάριο πριν από την ευρετηρίαση των δεδομένων και τα πεδία δημιουργήθηκαν αυτόματα από την Solr. Παρακαλούμε, διαγράψτε το τρέχον ευρετήριο, δημιουργήστε ένα νέο και εκτελέστε ξανά το setup_schema.php πριν κάνετε ευρετηρίαση δεδομένων στο Solr.';
$string['schemasetupfromsolr5'] = 'Η έκδοση του εξυπηρετητή Solr είναι μικρότερη από 5.0. Αυτό το σενάριο μπορεί να ορίσει το σχήμα σας μόνο εάν η έκδοση Solr είναι 5.0 ή μεγαλύτερη. Πρέπει να ρυθμίσετε χειροκίνητα τα πεδία στο σχήμα σύμφωνα με το \\search_solr\\document::get_default_fields_definition().';
$string['searchinfo'] = 'Ερωτήματα αναζήτησης';
$string['searchinfo_help'] = 'Το πεδίο προς αναζήτηση μπορεί να προσδιοριστεί με την προσθήκη στο ερώτημα αναζήτησης ως πρόθεμα των «title:», «content:», «name:» ή «intro:». Για παράδειγμα, η αναζήτηση για «title:ειδήσεις» θα επιστρέψει αποτελέσματα με τη λέξη «ειδήσεις» στον τίτλο. Μπορούν να χρησιμοποιηθούν λογικοί τελεστές («AND» [=και], «OR» [=ή], «NOT» [=όχι]) για να συνδυάσουν ή να εξαιρέσουν λέξεις-κλειδιά. Οι χαρακτήρες μπαλαντέρ («*» ή «?») Μπορούν να χρησιμοποιηθούν για να αναπαραστήσουν (οποιουσδήποτε) χαρακτήρες(α) στο ερώτημα αναζήτησης.';
$string['setupok'] = 'Το σχήμα είναι έτοιμο για χρήση.';
$string['solrauthpassword'] = 'Κωδικός πρόσβασης αυθεντικοποίησης HTTP';
$string['solrauthuser'] = 'Όνομα χρήστη αυθεντικοποίησης HTTP';
$string['solrhttpconnectionport'] = 'Θύρα (Port)';
$string['solrhttpconnectiontimeout'] = 'Λήξη χρονικού ορίου';
$string['solrhttpconnectiontimeout_desc'] = 'Το χρονικό όριο σύνδεσης HTTP είναι ο μέγιστος χρόνος σε δευτερόλεπτα που επιτρέπεται για τη λειτουργία μεταφοράς δεδομένων HTTP.';
$string['solrindexname'] = 'Όνομα ευρετηρίου';
$string['solrinfo'] = 'Solr (πλατφόρμα αναζήτησης)';
$string['solrnotselected'] = 'Η μηχανή της πλατφόρμας αναζήτησης Solr δεν είναι η επιλεγμένη.';
$string['solrsecuremode'] = 'Ασφαλής κατάσταση λειτουργία';
$string['solrserverhostname'] = 'Όνομα (φιλοξενούντος) Η/Υ';
$string['solrserverhostname_desc'] = 'Όνομα τομέα του εξυπηρετητή Solr.';
$string['solrsetting'] = 'Ρυθμίσεις της πλατφόρμας αναζήτησης Solr';
$string['solrsslcainfo'] = 'Όνομα πιστοποιητικού SSL CA';
$string['solrsslcainfo_desc'] = 'Το όνομα αρχείου που περιέχει ένα ή περισσότερα πιστοποιητικά CA για την επαλήθευση ομότιμου';
$string['solrsslcapath'] = 'Μονοπάτι πιστοποιητικών SSL CA';
$string['solrsslcapath_desc'] = 'Μονοπάτι φακέλου που περιέχει πολλαπλά πιστοποιητικά CA για την επαλήθευση ισότιμων.';
$string['solrsslcert'] = 'Πιστοποιητικό SSL';
$string['solrsslcert_desc'] = 'Όνομα αρχείου σε ιδιωτικό πιστοποιητικό μορφοποίησης PEM';
$string['solrsslkey'] = 'Κλειδί SSL';
$string['solrsslkey_desc'] = 'Όνομα αρχείου προς ένα ιδιωτικό κλειδί μορφότυπου PEM';
$string['solrsslkeypassword'] = 'Κωδικός πρόσβασης κλειδιού SSL';
$string['solrsslkeypassword_desc'] = 'Κωδικός πρόσβασης για αρχείο ιδιωτικού κλειδιού με μορφότυπο PEM';
