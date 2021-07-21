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
 * Strings for component 'cachestore_redis', language 'el', version '3.11'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['compressor_none'] = 'Καμία συμπίεση.';
$string['compressor_php_gzip'] = 'Χρήση συμπίεσης gzip.';
$string['compressor_php_zstd'] = 'Χρήση συμπίεσης Zstandard.';
$string['password'] = 'Κωδικός πρόσβασης';
$string['password_help'] = 'Εδώ ορίζεται ο κωδικός πρόσβασης του εξυπηρετητή Redis (γρήγορη βάση δεδομένων στην κύρια μνήμη).';
$string['pluginname'] = 'Redis';
$string['prefix'] = 'Βασικό πρόθεμα';
$string['prefix_help'] = 'Το πρόθεμα αυτό χρησιμοποιείται για όλα τα ονόματα κλειδιών στον εξυπηρετητή Redis.<br />
* Αν έχετε μόνο μια εγκατάσταση Moodle που χρησιμοποιεί αυτόν τον εξυπηρετητή, τότε μπορείτε να διατηρήσετε την προεπιλεγμένη τιμή.<br />
* Λόγω περιορισμών μήκους κλειδιών, επιτρέπονται το πολύ 5 χαρακτήρες.';
$string['prefixinvalid'] = 'Μη έγκυρο πρόθεμα. Μπορείτε να χρησιμοποιήσετε μόνο τα a-z A-Z 0-9 -_.';
$string['privacy:metadata:redis'] = 'Το πρόσθετο αποθήκευσης κρυφής μνήμης (cachestore) Redis αποθηκεύει δεδομένα για λίγο ως μέρος της λειτουργικότητάς του ως κρυφής μνήμης. Αυτά τα δεδομένα αποθηκεύονται σε έναν εξυπηρετητή Redis όπου τα δεδομένα διαγράφονται τακτικά.';
$string['privacy:metadata:redis:data'] = 'Τα διάφορα δεδομένα που αποθηκεύονται στην κρυφή μνήμη';
$string['serializer_igbinary'] = 'Ο σειριοποιητής igbinary (PHP serializer).';
$string['serializer_php'] = 'Ο προεπιλεγμένος PHP σειριοποιητής (serializer).';
$string['server'] = 'Εξυπηρετητής';
$string['server_help'] = 'Εδώ ορίζεται το όνομα κεντρικού Η/Υ (hostname) ή η διεύθυνση IP του εξυπηρετητή Redis που χρησιμοποιείται.';
$string['test_password'] = 'Κωδικός πρόσβασης εξυπηρετητή δοκιμών';
$string['test_password_desc'] = 'Κωδικός πρόσβασης εξυπηρετητή δοκιμών Redis.';
$string['test_serializer'] = 'Σειριοποιητής';
$string['test_serializer_desc'] = 'Σειριοποιητής προς χρήση για δοκιμές.';
$string['test_server'] = 'Εξυπηρετητής δοκιμών';
$string['test_server_desc'] = 'Εξυπηρετητής Redis που θα χρησιμοποιείται για δοκιμές.';
$string['usecompressor'] = 'Χρήση συμπιεστή';
$string['usecompressor_help'] = 'Καθορίζει τον συμπιεστή προς χρήση μετά την σειριοποίηση. Γίνεται σε επίπεδο API κρυφής μνήμης Moodle και όχι σε επίπεδο php-redis.';
$string['useserializer'] = 'Χρήση σειριοποιητή';
$string['useserializer_help'] = 'Καθορίζει τον σειριοποιητή που θα χρησιμοποιηθεί για τη σειριοποίηση.
Οι έγκυροι σειριοποιητές είναι Redis::SERIALIZER_PHP ή Redis::SERIALIZER_IGBINARY.
Το τελευταίο υποστηρίζεται μόνο όταν το phpredis έχει ρυθμιστεί με την επιλογή --enable-redis-igbinary και η igbinary επέκταση είναι φορτωμένη.';
