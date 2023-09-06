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
 * Strings for component 'qtype_random', language 'it', version '4.1'.
 *
 * @package     qtype_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configselectmanualquestions'] = 'Consente di stabilire se le domande con valutazione manuale possono essere utilizzate in quiz che prevedano domande scelte casualmente da una categoria';
$string['includingsubcategories'] = 'sotto categorie incluse';
$string['pluginname'] = 'Casuale';
$string['pluginname_help'] = 'Una domanda casuale, pur non essendo un vero e proprio tipo di domanda, consente di inserire in una attività una domanda scelta casualmente da una determinata categoria di domande.';
$string['pluginnameediting'] = 'Modifica domanda casuale';
$string['privacy:metadata'] = 'Il plugin Tipo di domande \'Casuale\' non memorizza dati personali.';
$string['randomqname'] = 'Casuale ({$a})';
$string['randomqnamefromtop'] = 'Domanda casuale difettosa. Per favore eliminare questa domanda.';
$string['randomqnamefromtoptags'] = 'Domanda casuale difettosa. Per favore eliminare questa domanda.';
$string['randomqnametags'] = '({$a->category} casuale, tag: {$a->tags})';
$string['randomqplusname'] = 'Casuale ({$a} e sotto categorie)';
$string['randomqplusnamecourse'] = 'Casuale (qualsiasi categoria presente nel corso)';
$string['randomqplusnamecoursecat'] = 'Casuale (qualsiasi categoria presente nella categoria {$a})';
$string['randomqplusnamecoursecattags'] = 'Casuale (Qualsiasi categoria sottostante la categoria del corso {$a->category}, tag: {$a->tags})';
$string['randomqplusnamecoursetags'] = 'Casuale (Qualsiasi categoria del corso, tag: {$a->tags})';
$string['randomqplusnamemodule'] = 'Casuale (qualsiasi categoria presente nel quiz)';
$string['randomqplusnamemoduletags'] = 'Casuale (Qualsiasi categoria di questo quiz, tag: {$a->tags})';
$string['randomqplusnamesystem'] = 'Casuale (qualsiasi categoria a livello di sistema)';
$string['randomqplusnamesystemtags'] = 'Casuale (Qualsiasi categoria a livello di sistema, tag: {$a->tags})';
$string['randomqplusnametags'] = 'Casuale (Categoria {$a->category} e relative sottocategoria tag: {$a->tags})';
$string['selectedby'] = '{$a->questionname} scelte da {$a->randomname}';
$string['selectmanualquestions'] = 'Le domande casuali possono usare domande con valutazione manuale';
$string['taskunusedrandomscleanup'] = 'Rimozione domande casuali non utilizzate';
