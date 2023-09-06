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
 * Strings for component 'tool_customlang', language 'it', version '4.1'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Salva le stringhe nel language pack';
$string['checkout'] = 'Apri il language pack per modificarlo';
$string['checkoutdone'] = 'Caricamento del language pack completato';
$string['checkoutinprogress'] = 'Caricamento del language pack in corso';
$string['cliexportheading'] = 'Avvio della esportazione dei file della lingua.';
$string['cliexportstartexport'] = 'Esportazione lingua {$a}';
$string['cliexportzipdone'] = 'Zip creato: {$a}';
$string['cliexportzipfail'] = 'Non è possibile creare lo zip {$a}';
$string['clifiles'] = 'File da importare su {$a}';
$string['climissingfiles'] = 'File validi mancanti';
$string['climissinglang'] = 'Lingua mancante';
$string['climissingmode'] = 'Modalità mancante o non valida (modalità valide: all, new, update)';
$string['climissingsource'] = 'File o cartella mancante';
$string['clinolog'] = 'Non ci sono elementi da importare in {$a}';
$string['confirmcheckin'] = 'Stai per salvare le modifiche nel language pack locale. Le stringhe modificate saranno esportate dal translator e salvate nelle cartella moodledata per consentire a Moodle di utilizzarle. Premi il tasto "Continua" per eseguire il salvataggio.';
$string['customlang:edit'] = 'Modificare traduzione locale';
$string['customlang:export'] = 'Esportare traduzione locale';
$string['customlang:view'] = 'Visualizzare traduzione locale';
$string['editlangpack'] = 'Modifica language pack';
$string['export'] = 'Esporta stringhe personalizzate';
$string['exportfilter'] = 'Selezionare i componenti da esportare';
$string['exportzipfilename'] = 'customlang-export-{$a->lang}.zip';
$string['filter'] = 'Filtra stringhe';
$string['filtercomponent'] = 'Visualizza le stringhe delle seguenti componenti';
$string['filtercustomized'] = 'Solo stringhe personalizzate';
$string['filtermodified'] = 'Modifiche effettuate durante la sessione corrente';
$string['filteronlyhelps'] = 'Stringhe di help';
$string['filtershowstrings'] = 'Visualizza stringhe';
$string['filterstringid'] = 'Identificativo stringa';
$string['filtersubstring'] = 'Solo le stringhe contenenti';
$string['headingcomponent'] = 'Componente';
$string['headinglocal'] = 'Personalizzazione locale';
$string['headingstandard'] = 'Testo standard';
$string['headingstringid'] = 'Stringa';
$string['import'] = 'Importa stringhe personalizzate';
$string['import_all'] = 'Crea i aggiorna tutte le stringhe dai componenti';
$string['import_mode'] = 'Modalità di importazione';
$string['import_new'] = 'Crea solo le stringhe senza personalizzazioni locali';
$string['import_update'] = 'Aggiorna solo le stringhe con personalizzazioni locali';
$string['importfile'] = 'Importa file';
$string['langpack'] = 'Componenti lingua';
$string['markinguptodate'] = 'Contrassegno la personalizzazione come aggiornata';
$string['markinguptodate_help'] = 'Le traduzioni personalizzate possono diventare obsolete se la traduzione inglese o la traduzione master sono state cambiate dopo le personalizzazioni. Puoi rivedere le personalizzazioni e se ritieni che siano corrette fai click su "contrassegna come aggiornato", altrimenti aggiornale.';
$string['markuptodate'] = 'contrassegna come aggiornata';
$string['modifiedno'] = 'Non sono presenti stringhe modificate da salvare';
$string['modifiednum'] = 'Sono presenti {$a} stringhe modificate. Vuoi memorizzare i cambiamenti nel language pack locale?';
$string['nolocallang'] = 'Non sono stati trovate stringhe locali.';
$string['nostringsfound'] = 'Non sono state trovate stringhe, per favore modifica le impostazioni di filtraggio';
$string['notice_ignorenew'] = 'La stringa {$a->component}/{$a->stringid} è stata ignorata poiché non è personalizzata.';
$string['notice_ignoreupdate'] = 'La stringa {$a->component}/{$a->stringid} è stata ignorata poiché è già definita.';
$string['notice_inexitentstring'] = 'La stringa {$a->component}/{$a->stringid} non è stata trovata.';
$string['notice_missingcomponent'] = 'Il componente {$a->component} è mancante.';
$string['notice_success'] = 'La stringa {$a->component}/{$a->stringid} è stata aggiornata correttamente.';
$string['placeholder'] = 'Segna posto';
$string['placeholder_help'] = 'I segna posto sono elementi speciali presenti in una stringa, come ad esempio `{$a}` o `{$a->something}`. Questi elementi vengono sostituiti dinamicamente al momento della visualizzazione.

È fondamentale copiarli esattamente come appaiono nella stringa originale.  Non devono essere tradotti né cambiata la direzione sinistra-destra.';
$string['placeholderwarning'] = 'la stringa contiene un segna posto';
$string['pluginname'] = 'Personalizzazione lingua';
$string['privacy:metadata'] = 'Il plugin \'Personalizzazione lingua\' non memorizza dati personali.';
$string['savecheckin'] = 'Salva le modifiche nel language pack';
$string['savecontinue'] = 'Applica le modifiche e continua a modificare';
