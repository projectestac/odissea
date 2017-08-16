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
 * Strings for component 'tool_filetypes', language 'it', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_filetypes
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Aggiungi un tipo di file';
$string['corestring'] = 'Stringa di lingua alternativa';
$string['corestring_help'] = 'Consente di utilizzare una stringa di lingua diversa da quella fornita dal file di lingua mimetypes.php. Di solito può non è necessario impostarla. Per i tipi personalizzati, utilizzare i campo descrizione.';
$string['defaulticon'] = 'Icona di default per il tipo MIME';
$string['defaulticon_help'] = 'Se sono presenti più estensioni con lo stesso tipo MIME, selezionare questa opzione per una delle estensioni affinché l\'icona associata venga utilizzata come icona del tipo MIME';
$string['deletea'] = 'Elimina {$a}';
$string['delete_confirmation'] = 'Sei sicuro di rimuovere <strong>.{$a}</strong>?';
$string['deletefiletypes'] = 'Elimina un tipo di file';
$string['description'] = 'Descrizione personalizzata';
$string['description_help'] = 'Una descrizione breve del tipo di file, ad esempio &lsquo;Kindle ebook&rsquo;. Se il sito supporta più lingue ed utilizza il filtro multilingua, è possibile inserire nel campo dei tag multi lingua per ottenere la descrizione in diverse lingue.';
$string['descriptiontype'] = 'Descrizione del tipo';
$string['descriptiontype_custom'] = 'Descrizione personalizzata da inserire nel campo sottostante';
$string['descriptiontype_default'] = 'Default (tipo MIME o la stringa di lingua corrispondente, se disponibile)';
$string['descriptiontype_help'] = 'Sono disponibili tre modalità per la descrizione.

* Il comportamento di default è l\'utilizzo del tipo MIME. Se in mimetypes.php è presente una stringa di lingua corrispondente, tale stringa sarà utilizzata per questo tipo MIME.
* E\' possibile specificare in questo form una descrizione personalizzata.
* E\' possibile specificare nel file mimetypes.php la stringa da utilizzare per il nome al posto de tipo MIME.';
$string['descriptiontype_lang'] = 'Stringa di lingua alternativa (da mimetypes.php)';
$string['displaydescription'] = 'Descrizione';
$string['editfiletypes'] = 'Modifica un tipo di file già esistente';
$string['emptylist'] = 'Non sono stati definiti tipi di file';
$string['error_addentry'] = 'L\'estensione del tipo di file, la descrizione, il tipo MIME e l\'icona non devono contenere caratteri "a capo" o "punto e virgola"';
$string['error_defaulticon'] = 'Un\'estensione di file con lo stesso tipo MIME è già selezionata come icona di default.';
$string['error_extension'] = 'L\'estensione <strong>{$a}</strong> esiste già oppure non è valida. Le estensioni devono essere univoche e non devono contenere caratteri speciali.';
$string['error_notfound'] = 'Non è possibile trovare Il tipo di file con estensione {$a}';
$string['extension'] = 'Estensione';
$string['extension_help'] = 'L\'estensione del nome del file, senza il punto. Ad esempio ‘mobi’';
$string['groups'] = 'Tipologia';
$string['groups_help'] = 'Elenco facoltativo delle tipologie alle quali appartiene il tipo di file. Si tratta di tipologie generiche come ad esempio &lsquo;document&rsquo; and &lsquo;image&rsquo;.';
$string['icon'] = 'Icona del file';
$string['icon_help'] = 'Nome del file dell\'icona.

L\'elenco delle icone è tratto dalla cartella /pix/f, presente nella installazione di Moodle. Se lo si desidera, nella cartella è possibile aggiungere icone personalizzate.';
$string['mimetype'] = 'Tipo MIME';
$string['mimetype_help'] = 'Il MIME associato al tipo di file, ad esempio &lsquo;application/x-mobipocket-ebook&rsquo;';
$string['pluginname'] = 'Tipi di file';
$string['revert'] = 'Ripristina {$a} ai default di Moodle';
$string['revert_confirmation'] = 'Sei sicuro di ripristinare <strong>.{$a}</strong> al default di Moodle, perdendo le modifiche effettuate?';
$string['revertfiletype'] = 'Ripristina un tipo di file';
$string['source'] = 'Tipo';
$string['source_custom'] = 'Personalizzato';
$string['source_deleted'] = 'Eliminato';
$string['source_modified'] = 'Modificato';
$string['source_standard'] = 'Standard';
