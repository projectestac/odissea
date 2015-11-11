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
 * Strings for component 'qtype_ddmarker', language 'it', branch 'MOODLE_28_STABLE'
 *
 * @package   qtype_ddmarker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Aggiungi {no} indicatori';
$string['alttext'] = 'Testo alternativo';
$string['answer'] = 'Risposta';
$string['bgimage'] = 'Immagine di sfondo';
$string['clearwrongparts'] = 'Sposta gli indicatori posizionati erroneamente nella loro posizione di default sotto l\'immagine';
$string['confirmimagetargetconversion'] = 'Stai per convertire le domande \'image target\' in domande di tipo \'Trascina e rilascia indicatori\'.';
$string['convertingimagetargetquestion'] = 'Domanda "{$a->name}" convertita';
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
$string['dropzones_help'] = 'Le aree di rilascio vengono definite digitando le coordinate.  Durante la digitazione, l\'anteprima verrà aggiornata in tempo reale facilitando la posizione degli elementi.

* Cerchio: centro_x, centro_y; raggio<br>Esempio: <code>80, 100; 50</code>
* Poligono: x1, y1; x2, y2; ...; xn, yn<br>Esempio: <code>20, 60; 100, 60; 20, 100</code>
* Rettangolo: sinistra, alto, larghezza, altezza<br>Esempio: <code>20, 60; 80, 40</code>';
$string['followingarewrong'] = 'I seguenti indicatori sono stati posizionati in un\'area sbagliata: {$a}.';
$string['followingarewrongandhighlighted'] = 'I seguenti indicatori non sono stati posizionati correttamente: {$a}. Gli indicatori evidenziati sono ora visualizzati nelle posizioni corrette.<br />Fai click su un marker per evidenziare l\'area corrispondente.';
$string['formerror_nobgimage'] = 'Devi selezionare l\'immagine da utilizzare come sfondo per l\'area dove trascinare e rilasciare.';
$string['formerror_noitemselected'] = 'Hai definito un\'area di rilascio ma non hai selezionato l\'indicatore da trascinarci.';
$string['formerror_nosemicolons'] = 'Nelle coordinate inserite non sono presenti punti e virgola. Le coordinate per la forma {$a->shape} devono essere inserite nel seguente modo: {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Nell\'etichetta di un indicatore è consentito solamente il tag "{$a}"';
$string['formerror_onlyusewholepositivenumbers'] = 'Per definire coordinate x/y e/o altezze/larghezze delle forme possono essere utilizzati solamente numeri interi positivi. Le coordinate per la forma {$a->shape} devono essere inserite nel seguente modo: {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'La forma poligono richiede la definizione di almeno tre punti. Le coordinate per la forma {$a->shape} devono essere inserite nel seguente modo: {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Hai inserito le stesse coordinate due volte, per favore elimina la duplicazione. Le coordinate per la forma {$a->shape} devono essere inserite nel seguente modo: {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'Hai definito una forma che eccede le dimensioni dell\'immagine';
$string['formerror_toomanysemicolons'] = 'Nelle coordinate inserite sono presenti troppi punti e virgola. Le coordinate per la forma {$a->shape} devono essere inserite nel seguente modo: {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'Non è possibile individuare la larghezza l\'altezza. Le coordinate per la forma {$a->shape} devono essere inserite nel seguente modo: {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'Non è possibile individuare le coordinate x,y. Le coordinate per la forma {$a->shape} devono essere inserite nel seguente modo: {$a->coordsstring}.';
$string['imagetargetconverter'] = 'Converti le domande \'image target\' in domande di tipo \'Trascina e rilascia indicatori\'.';
$string['infinite'] = 'Illimitato';
$string['listitemconfirmcategory'] = 'In procinto di convertire tutte le domande \'image target\' presenti nella categoria "{$a->name}" (sono presenti {$a->qcount} domande \'image target\')';
$string['listitemconfirmcontext'] = 'In procinto di convertire tutte le domande \'image target\' presenti nel contesto "{$a->name}" (sono presenti {$a->qcount} domande \'image target\')';
$string['listitemconfirmquestion'] = 'In procinto di convertire la domanda "{$a->name}"';
$string['listitemlistallcategory'] = 'Seleziona tutte le domande \'image target\' presenti nella categoria "{$a->name}" (sono presenti {$a->qcount} domande \'image target\')';
$string['listitemlistallcontext'] = 'Seleziona tutte le domande \'image target\' presenti nel contesto "{$a->name}" (sono presenti {$a->qcount} domande \'image target\')';
$string['listitemlistallquestion'] = 'Seleziona domanda "{$a->name}"';
$string['listitemprocessingcategory'] = 'E\' in corso la conversione di tutte le domande \'image target\' presenti nella categoria "{$a->name}" (sono presenti {$a->qcount} domande \'image target\')';
$string['listitemprocessingcontext'] = 'E\' in corso la conversione di tutte le domande \'image target\' presenti nel contesto "{$a->name}" (sono presenti {$a->qcount} domande \'image target\')';
$string['listitemprocessingquestion'] = 'Domanda "{$a->name}" convertita';
$string['marker'] = 'Indicatore';
$string['marker_n'] = 'Indicatore {no}';
$string['markers'] = 'Indicatori';
$string['nolabel'] = 'Senza etichetta di testo';
$string['noofdrags'] = 'Numero';
$string['noquestionsfound'] = 'Non ci sono domande da convertire.';
$string['pleasedragatleastonemarker'] = 'La tua risposta non è completa, devi posizionare almeno un indicatore sull\'immagine.';
$string['pluginname'] = 'Trascina e rilascia indicatori';
$string['pluginnameadding'] = 'Inserimento domanda Trascina e rilascia indicatori';
$string['pluginnameediting'] = 'Inserimento domanda Trascina e rilascia indicatori';
$string['pluginname_help'] = 'seleziona un\'immagine di sfondo, inserisci le etichette di testo per gli indicatori e definisci  sull\'immagine di sfondo le zone di rilascio degli indicatori.';
$string['pluginnamesummary'] = 'Gli indicatori sono trascinati e rilasciati su un\'immagine di sfondo.';
$string['previewareaheader'] = 'Anteprima';
$string['previewareamessage'] = 'Seleziona un\'immagine di sfondo, inserisci le etichette di testo per gli indicatori e definisci  sull\'immagine di sfondo le zone di rilascio degli indicatori.';
$string['refresh'] = 'Aggiorna anteprima';
$string['shape'] = 'Forma';
$string['shape_circle'] = 'Cerchio';
$string['shape_circle_coords'] = 'x,y;r (dove x,y sono le coordinate xy del centro del cerchio ed r il raggio)';
$string['shape_circle_lowercase'] = 'cerchio';
$string['shape_polygon'] = 'Poligono';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4....(dove x1, y1 sono le coordinate x,y del primo vertice, x2, y2 sono le coordinate x,y del secondo, ecc.  Per chiudere il poligono non occorre ripetere le coordinate delle primo vertice)';
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
