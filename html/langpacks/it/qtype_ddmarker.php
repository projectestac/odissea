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
 * Strings for component 'qtype_ddmarker', language 'it', version '4.1'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Aggiungi {no} indicatori';
$string['alttext'] = 'Testo alternativo';
$string['answer'] = 'Risposta';
$string['bgimage'] = 'Immagine di sfondo';
$string['clearwrongparts'] = 'Sposta gli indicatori posizionati erroneamente nella loro posizione di default sotto l\'immagine';
$string['coords'] = 'Coordinate';
$string['correctansweris'] = 'La risposta corretta è: {$a}';
$string['draggableimage'] = 'Elemento trascinabile';
$string['draggableitem'] = 'Elemento trascinabile';
$string['draggableitemheader'] = 'Elemento trascinabile {$a}';
$string['draggableitemtype'] = 'Tipo';
$string['draggableword'] = 'Testo trascinabile';
$string['dropbackground'] = 'Immagine di sfondo dove trascinare gli indicatori';
$string['dropzone'] = 'Area di rilascio {$a}';
$string['dropzoneheader'] = 'Aree di rilascio';
$string['dropzones'] = 'Aree di rilascio';
$string['dropzones_help'] = 'Le aree di rilascio vengono definite inserendo le coordinate.  Durante l\'inserimento, l\'anteprima verrà aggiornata in tempo reale facilitando il posizionamento degli elementi.

* Cerchio: centro_x, centro_y; raggio<br>Esempio: <code>80, 100; 50</code>
* Poligono: x1, y1; x2, y2; ...; xn, yn<br>Esempio: <code>20, 60; 100, 60; 20, 100</code>
* Rettangolo: sinistra, alto, larghezza, altezza<br>Esempio: <code>20, 60; 80, 40</code>';
$string['followingarewrong'] = 'I seguenti indicatori sono stati posizionati in un\'area sbagliata: {$a}.';
$string['followingarewrongandhighlighted'] = 'I seguenti indicatori non sono stati posizionati correttamente: {$a}. Gli indicatori evidenziati sono ora visualizzati nelle posizioni corrette.<br />Fai click su un marker per evidenziare l\'area corrispondente.';
$string['formerror_nobgimage'] = 'Devi selezionare l\'immagine da utilizzare come sfondo per l\'area dove trascinare e rilasciare.';
$string['formerror_noitemselected'] = 'È stata definita un\'area di rilascio ma non è stato selezionato l\'indicatore da trascinarci.';
$string['formerror_nosemicolons'] = 'Nelle coordinate inserite non sono presenti punti e virgola. Le coordinate per la forma {$a->shape} devono essere inserite nel seguente modo: {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Nell\'etichetta di un indicatore è consentito solamente il tag "{$a}".';
$string['formerror_onlyusewholepositivenumbers'] = 'Per definire coordinate x/y e/o altezze/larghezze delle forme possono essere utilizzati solamente numeri interi positivi. Le coordinate della forma {$a->shape} devono essere inserite nel seguente modo: {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'La forma poligono richiede la definizione di almeno tre punti. Le coordinate per la forma {$a->shape} devono essere inserite nel seguente modo: {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Sono state inserite due volte le stesse coordinate, per favore eliminare la duplicazione. Le coordinate per la forma {$a->shape} devono essere inserite nel seguente modo: {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'È stata definita una forma che eccede le dimensioni dell\'immagine';
$string['formerror_toomanysemicolons'] = 'Nelle coordinate inserite sono presenti troppi punti e virgola. Le coordinate per la forma {$a->shape} devono essere inserite nel seguente modo: {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'Non è possibile individuare la larghezza l\'altezza. Le coordinate della forma {$a->shape} devono essere inserite nel seguente modo: {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Non è possibile individuare le coordinate x,y. Le coordinate della forma {$a->shape} devono essere inserite nel seguente modo: {$a->coordsstring}.';
$string['infinite'] = 'Illimitato';
$string['marker'] = 'Indicatore';
$string['marker_n'] = 'Indicatore {no}';
$string['markers'] = 'Indicatori';
$string['nolabel'] = 'Senza etichetta di testo';
$string['noofdrags'] = 'Numero';
$string['pleasedragatleastonemarker'] = 'La risposta non è completa, devi posizionare almeno un indicatore sull\'immagine.';
$string['pluginname'] = 'Trascina e rilascia indicatori';
$string['pluginname_help'] = 'Seleziona un\'immagine di sfondo, inserisci le etichette di testo per gli indicatori e definisci  sull\'immagine di sfondo le zone di rilascio degli indicatori.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'Inserimento domanda Trascina e rilascia indicatori';
$string['pluginnameediting'] = 'Inserimento domanda Trascina e rilascia indicatori';
$string['pluginnamesummary'] = 'Gli indicatori verranno trascinati e rilasciati su un\'immagine di sfondo.

Da notare che questo tipo di domanda non è accessibile.';
$string['previewareaheader'] = 'Anteprima';
$string['previewareamessage'] = 'Seleziona un\'immagine di sfondo, inserisci le etichette di testo per gli indicatori e definisci  sull\'immagine di sfondo le zone di rilascio degli indicatori.';
$string['privacy:metadata'] = 'Il plugin Tipo di domande \'Trascina e rilascia indicatori\' non memorizza dati personali.';
$string['privacy:preference:defaultmark'] = 'Punteggio di default di una specifica domanda.';
$string['privacy:preference:shuffleanswers'] = 'Randomizzazione automatica delle risposte.';
$string['refresh'] = 'Aggiorna anteprima';
$string['shape'] = 'Forma';
$string['shape_circle'] = 'Cerchio';
$string['shape_circle_coords'] = 'x,y;r (dove x,y sono le coordinate xy del centro del cerchio ed r il raggio)';
$string['shape_circle_lowercase'] = 'cerchio';
$string['shape_polygon'] = 'Poligono';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4....(dove x1, y1 sono le coordinate x,y del primo vertice, x2, y2 sono le coordinate x,y del secondo, ecc.  Per chiudere il poligono non occorre ripetere le coordinate delle primo vertice.)';
$string['shape_polygon_lowercase'] = 'poligono';
$string['shape_rectangle'] = 'Rettangolo';
$string['shape_rectangle_coords'] = 'x,y;w,h (dove x,y sono le coordinate xy dell\'angolo superiore sinistro del rettangolo, w e h sono la larghezza e l\'altezza del rettangolo)';
$string['shape_rectangle_lowercase'] = 'rettangolo';
$string['showmisplaced'] = 'Evidenzia le aree di rilascio dove non sono stati rilasciati gli indicatori corretti';
$string['shuffleimages'] = 'Rimescola gli elementi trascinabili ad ogni tentativo di risposta';
$string['stateincorrectlyplaced'] = 'Evidenzia gli indicatori in posizione non corretta';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Zona di rilascio {$a}';
$string['ytop'] = 'Alto';
