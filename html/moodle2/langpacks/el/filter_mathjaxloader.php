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
 * Strings for component 'filter_mathjaxloader', language 'el', branch 'MOODLE_36_STABLE'
 *
 * @package   filter_mathjaxloader
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Επιπρόσθετοι οριοθέτες εξισώσεων';
$string['additionaldelimiters_help'] = 'Το φίλτρο MathJax αναλύει το κείμενο για εξισώσεις που περιέχονται μεταξύ χαρακτήρων οριοθέτησης.

Η λίστα των αναγνωρισμένων χαρακτήρων οριοθέτησης μπορεί να προστεθεί εδώ (π.χ. το AsciiMath χρησιμοποιεί `). Οι οριοθέτες μπορούν να περιέχουν πολλούς χαρακτήρες και οι εναλλακτικοί οριοθέτες μπορούν να διαχωριστούν με κόμματα.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'Διεύθυνση URL MathJax';
$string['httpsurl_help'] = 'Πλήρης διεύθυνση URL της βιβλιοθήκης MathJax.';
$string['localinstall'] = 'Τοπική εγκατάσταση MathJax';
$string['localinstall_help'] = 'Οι προεπιλεγμένες ρυθμίσεις του MathJax χρησιμοποιούν την έκδοση CDN του MathJax, αλλά το MathJax μπορεί να εγκατασταθεί τοπικά εάν απαιτείται.

Αυτό μπορεί να είναι χρήσιμο για οικονομία σε εύρος ζώνης ή λόγω τοπικών περιορισμών διακομιστή μεσολάβησης.

Για να χρησιμοποιήσετε μια τοπική εγκατάσταση του MathJax, κατεβάστε πρώτα την πλήρη βιβλιοθήκη MathJax από το https://www.mathjax.org/. Κατόπιν, εγκαταστήστε τη σε έναν εξυπηρετητή ιστού. Τέλος, ενημερώστε τις ρυθμίσεις φίλτρου MathJax httpurl και/ή httpsurl για να δείχνουν την τοπική διεύθυνση URL του MathJax.js.';
$string['mathjaxsettings'] = 'Ρυθμίσεις του MathJax';
$string['mathjaxsettings_desc'] = 'Οι προεπιλεγμένες ρυθμίσεις του MathJax θα πρέπει να είναι κατάλληλες για τους περισσότερους χρήστες, αλλά το MathJax είναι ιδιαίτερα διαμορφώσιμο και μπορεί να προστεθεί εδώ οποιαδήποτε από τις τυπικές επιλογές ρυθμίσεων του MathJax.';
$string['privacy:metadata'] = 'Το πρόσθετο «MathJax» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['texfiltercompatibility'] = 'Φίλτρο συμβατότητας TeX';
$string['texfiltercompatibility_help'] = 'Το φίλτρο MathJax μπορεί να χρησιμοποιηθεί ως υποκατάστατο του φίλτρου σημειογραφίας TeX. Για να υποστηρίξει όλους τους οριοθέτες που υποστηρίζονται από το φίλτρο σημειογραφίας TeX, το MathJax θα ρυθμιστεί ώστε να εμφανίζει όλες τις εξισώσεις στις ίδιες γραμμές με το κείμενο.';
