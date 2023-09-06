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
 * Strings for component 'qtype_essay', language 'it', version '4.1'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Tipi di file accettati';
$string['acceptedfiletypes_help'] = 'È possibile limitare i tipi di file accettati inserendo un elenco di estensioni. Lasciando il campo vuoto saranno accettati tutti i tipi di file.';
$string['allowattachments'] = 'Consenti allegati';
$string['answerfiles'] = 'File della risposta';
$string['answertext'] = 'Testo della risposta';
$string['attachedfiles'] = 'Allegati: {$a}';
$string['attachmentsoptional'] = 'Gli allegati sono facoltativi';
$string['attachmentsrequired'] = 'Allegati richiesti';
$string['attachmentsrequired_help'] = 'Imposta il numero minimo di allegati richiesti affinché la risposta sia valutabile.';
$string['err_maxminmismatch'] = 'Il numero massimo di parole deve essere maggiore del numero minimo';
$string['err_maxwordlimit'] = 'Il numero massimo di parole è abilitato ma non è stato impostato';
$string['err_maxwordlimitnegative'] = 'Il numero massimo di parole non può essere un numero negativo';
$string['err_minwordlimit'] = 'Il numero minimo di parole è abilitato ma non è stato impostato';
$string['err_minwordlimitnegative'] = 'Il numero massimo di parole non può essere un numero negativo';
$string['formateditor'] = 'Editor HTML';
$string['formateditorfilepicker'] = 'Editor HTML con file picker';
$string['formatmonospaced'] = 'Testo semplice con carattere a spaziatura fissa';
$string['formatnoinline'] = 'Senza testo online';
$string['formatplain'] = 'Testo semplice';
$string['graderinfo'] = 'Informazioni per i valutatori';
$string['graderinfoheader'] = 'Informazioni per la valutazione';
$string['maxbytes'] = 'Dimensione massima del file';
$string['maxwordlimit'] = 'Limite massimo parole';
$string['minwordlimit'] = 'Limite minimo parole';
$string['mustattach'] = 'Se si seleziona "Senza testo online" oppure se le riposte sono facoltative, è necessario consentire almeno un allegato.';
$string['mustrequire'] = 'Se si seleziona "Senza testo online" oppure se le riposte sono facoltative, è necessario richiedere almeno un allegato.';
$string['mustrequirefewer'] = 'Non è possibile richiedere più allegati di quanti nei siano consentiti.';
$string['nlines'] = '{$a} linee';
$string['nonexistentfiletypes'] = 'I seguenti tipi di file non sono stati accettati: {$a}';
$string['pluginname'] = 'Componimento';
$string['pluginname_help'] = 'In risposta a una domanda lo studente potrà caricare uno o più file e/o redigere un testo online. È possibile fornire un modello di risposta. Le risposte dovranno essere valutate manualmente.';
$string['pluginname_link'] = 'question/type/essay';
$string['pluginnameadding'] = 'Creazione domanda Componimento';
$string['pluginnameediting'] = 'Modifica domanda Componimento';
$string['pluginnamesummary'] = 'Consente la creazione di domande la cui risposta  può essere il caricamento di o più file e/o la redazione di un testo online. La risposta dovrà essere valutata manualmente.';
$string['privacy:metadata'] = 'Il plugin Tipi di domande \'Componimento\' non memorizza dati personali.';
$string['privacy:preference:attachments'] = 'Numero di allegati consentiti.';
$string['privacy:preference:attachmentsrequired'] = 'Numero di allegati richiesti.';
$string['privacy:preference:defaultmark'] = 'Punteggio di default impostato per una specifica domanda.';
$string['privacy:preference:maxbytes'] = 'Dimensione massima del file.';
$string['privacy:preference:responsefieldlines'] = 'Numero di linee del riquadro di input (Area di testo)';
$string['privacy:preference:responseformat'] = 'Formato della risposta (HTML editor, plain text, ecc.).';
$string['responsefieldlines'] = 'Dimensione del riquadro di input';
$string['responseformat'] = 'Formato risposta';
$string['responseisrequired'] = 'L\'inserimento di testo è obbligatorio';
$string['responsenotrequired'] = 'L\'inserimento di testo è facoltativo';
$string['responseoptions'] = 'Opzioni della risposta';
$string['responserequired'] = 'Inserimento testo';
$string['responsetemplate'] = 'Modello di risposta';
$string['responsetemplate_help'] = 'Ad ogni nuovo tentativo, il testo inserito sarà visualizzato nel riquadro della risposta';
$string['responsetemplateheader'] = 'Modello di risposta';
$string['wordcount'] = 'Numero parole: {$a}';
$string['wordcounttoofew'] = 'Numero parole: {$a->count}, inferiore al limite minimo di {$a->limit} parole';
$string['wordcounttoomuch'] = 'Numero parole: {$a->count}, superiore al limite massimo di {$a->limit} parole';
