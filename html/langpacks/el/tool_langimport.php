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
 * Strings for component 'tool_langimport', language 'el', version '4.1'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'Δεν είναι εφικτή η σύνδεση με τον εξυπηρετητή λήψεων. Δεν είναι εφικτή η αυτόματη εγκατάσταση ή ενημέρωση των πακέτων γλώσσας. Παρακαλούμε κάντε λήψη των κατάλληλων συμπιεσμένων αρχείων zip από το <a href="{$a->src}">{$a->src}</a> και αποσυμπιέστε τα χειροκίνητα στον κατάλογο δεδομένων <code>{$a->dest}</code>';
$string['install'] = 'Εγκατάσταση επιλεγμένου/-ων πακέτων γλώσσας';
$string['installedlangs'] = 'Εγκατεστημένα πακέτα γλώσσας<br /><small><i>Ειδικά για λάθη στο ελληνικό πακέτο, παρακαλούμε δείτε <a href="https://moodle.org/mod/glossary/view.php?id=8542&mode=letter&hook=ALL&sortkey&sortorder=asc&fullsearch=0&page=-1">εδώ</a>.</i></small>';
$string['installfailed'] = 'Η εγκατάσταση πακέτων γλώσσας απέτυχε!';
$string['installfinished'] = 'Η εγκατάσταση πακέτων γλώσσας ολοκληρώθηκε.';
$string['installpending'] = 'Τα ακόλουθα πακέτα γλώσσας θα εγκατασταθούν σύντομα: {$a}.';
$string['installscheduled'] = 'Πακέτα γλώσσας προγραμματισμένα προς εγκατάσταση.';
$string['langimport'] = 'Εισαγωγή γλωσσικού πακέτου';
$string['langimportdisabled'] = 'Η δυνατότητα εισαγωγής γλώσσας έχει απενεργοποιηθεί. Πρέπει να ενημερώσετε τα πακέτα γλώσσας σας χειροκίνητα σε επίπεδο αρχείων συστήματος. Μην ξεχάσετε να εκκαθαρίσετε τις κρυφές μνήμες αλφαριθμητικών αφού το κάνετε.';
$string['langpackinstalled'] = 'Το πακέτο γλώσσας «{$a}» εγκαταστάθηκε επιτυχώς.';
$string['langpackinstalledevent'] = 'Το πακέτο γλώσσας εγκαταστάθηκε.';
$string['langpacknotremoved'] = 'Παρουσιάστηκε κάποιο σφάλμα! Το πακέτο γλώσσας «{$a}» δεν έχει απεγκατασταθεί πλήρως. Παρακαλούμε ελέγξτε τα δικαιώματα αρχείων.';
$string['langpackremoved'] = 'Το πακέτο γλώσσας «{$a}» απεγκαταστάθηκε.';
$string['langpackremovedevent'] = 'Το πακέτο γλώσσας απεγκαταστάθηκε.';
$string['langpackupdated'] = 'Το πακέτο γλώσσας «{$a}» ενημερώθηκε με επιτυχία.';
$string['langpackupdatedevent'] = 'Το πακέτο γλώσσας ενημερώθηκε.';
$string['langpackupdateskipped'] = 'Παράλειψη ενημέρωσης πακέτου γλώσσας «{$a}».';
$string['langpackuptodate'] = 'Το πακέτο γλώσσας «{$a}» είναι ενημερωμένο.';
$string['langunsupported'] = '<p>Ο εξυπηρετητής σας δεν φαίνεται να υποστηρίζει πλήρως τις ακόλουθες γλώσσες:</p><ul>{$a->missinglocales}</ul><p>Αντ\' αυτού, η γενική τοπική ρύθμιση ({$a->globallocale}) θα χρησιμοποιηθεί για τη διαμόρφωση ορισμένων συμβολοσειρών, όπως ημερομηνιών ή αριθμών.</p>';
$string['langupdatecomplete'] = 'Η ενημέρωση του/των πακέτων γλώσσας ολοκληρώθηκε.';
$string['missingcfglangotherroot'] = 'Λείπει η τιμή $CFG->langotherroot στις ρυθμίσεις.';
$string['missinglangparent'] = 'Απούσα γλώσσα-γονέας <em>{$a->parent}</em> του <em>{$a->lang}</em>.';
$string['noenglishuninstall'] = 'Δεν είναι εφικτή η απεγκατάσταση του πακέτου Αγγλικής γλώσσας.';
$string['nolangupdateneeded'] = 'Όλα τα πακέτα γλώσσας είναι ενημερωμένα, δεν απαιτείται ενημέρωση.';
$string['pluginname'] = 'Πακέτα γλώσσας';
$string['privacy:metadata'] = 'Το πρόσθετο «Πακέτα γλώσσας» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['purgestringcaches'] = 'Εκκαθάριση κρυφών μνημών συμβολοσειρών';
$string['search'] = 'Αναζήτηση διαθέσιμων πακέτων γλώσσας';
$string['selectlangs'] = 'Επιλογή γλωσσών για απεγκατάσταση';
$string['uninstall'] = 'Απεγκατάσταση επιλεγμένου/-ων πακέτων γλώσσας';
$string['uninstallconfirm'] = 'Πρόκειται να απεγκαταστήσετε πλήρως αυτά τα πακέτα γλώσσας: <strong>{$a}</strong>. Είστε σίγουροι;';
$string['updatelangs'] = 'Ενημέρωση όλων των εγκατεστημένων πακέτων γλώσσας';
$string['updatelangsnote'] = 'Η ενημέρωση όλων των εγκατεστημένων πακέτων γλώσσας κάνοντας κλικ στο κουμπί μπορεί να διαρκέσει πολύ και να οδηγήσει σε υπέρβαση χρονικών ορίων. Συνιστάται αντί αυτού να κάνετε χρήση της προγραμματισμένης εργασίας «{$a->taskname}» (η οποία εκτελείται από προεπιλογή κάθε μέρα).';
