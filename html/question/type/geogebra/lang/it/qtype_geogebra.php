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
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'Aggiungi vincoli (condizioni) alle variabili.';
$string['addmorevarblanks'] = 'Spazi vuoti per {no} ulteriore/i variabile/i';
$string['answerinvalid'] = 'La stringa della risposta non è valida. Ciò non dovrebbe accadere.';
$string['answermissing'] = 'Risposta mancante. Probabilmente JavaScript non è attivato nel browser o si è verificato un errore sconosciuto.';
$string['answervar'] = 'Variabili per la votazione automatica';
$string['answervar_help'] = 'Per la votazione automatica: un nome di un oggetto booleano di GeoGebra che è "true" se lo studente ha risolto il quesito (parzialmente). Somma i voti relativi a tutte le variabili booleane. La risposta è corretta se ogni combinazione supera il 100%, ma c\'è almeno una combinazione che totalizza esattamente 100%. Lasciare vuoto per la votazione manuale.';
$string['applet_advanced_settings'] = 'Impostazioni avanzate...';
$string['constraints'] = 'Vincoli (condizioni)';
$string['constraints_help'] = 'Ci sono vincoli per le variabili, come ad esempio a < b, che non è stato possibile dichiarare utilizzando le opzioni dello slider? Valori delimitati da virgole. Le relazioni supportate sono: <, <=, >, >=. Per un\'uguaglianza utilizzare la stessa variabile nella creazione del foglio di lavoro di GeoGebra. Gli intervalli dinamici, cioè l\'utilizzo di variabili per definire min e max di uno slider, non sono supportati.';
$string['constraintswrongortoohard'] = '{$a->inequalities} non sono corretti o sono troppo difficili da soddisfare: sono stati fatti (forza bruta) {$a->tries} tentativi in {$a->time} secondi. Probabilmente utilizzeremo un metodo migliore in futuro...';
$string['dragndrop'] = 'Trascinare e rilasciare un file di GeoGebra in una posizione qualsiasi della sezione Applet GeoGebra';
$string['enable_label_drags'] = 'Consenti il trascinamento delle etichette';
$string['enable_right_click'] = 'Consenti clic con il tasto destro del mouse e modifiche da tastiera';
$string['enable_shift_drag_zoom'] = 'Consenti Maiusc+Trascinamento e zoom';
$string['feedback'] = 'Commento quando la variabile è "true"';
$string['feedback_help'] = 'Il commento viene automaticamente preso dalla legenda della variabile nel file di GeoGebra.';
$string['geogebraapplet'] = 'Applet GeoGebra';
$string['getvars'] = 'Ottieni dall\'applet le variabili che possono essere rese casuali';
$string['ggbfilemissing'] = 'La stringa base64 non è presente nella risposta. Probabilmente JavaScript non è attivato nel browser o si è verificato un errore sconosciuto';
$string['ggbturl'] = 'URL o ID del foglio di lavoro su GeoGebra';
$string['ggbturl_help'] = 'È possibile utilizzare il pulsante di condivisione su GeoGebra e copiare e incollare il collegamento, oppure utilizzare l\'archivio di GeoGebra. L\'applet e i parametri sono memorizzati nel database, e l\'applet non verrà ricaricata da GeoGebra se non su richiesta. È inoltre possibile indicare solo l\'ID o la chiave di condivisione dell\'applet.';
$string['ggbxmlmissing'] = 'La stringa XML non è presente nella risposta . Probabilmente JavaScript non è attivato nel browser o si è verificato un errore sconosciuto';
$string['invalidinequality'] = '{$a} non è valido';
$string['isexercise'] = 'Utilizza un esercizio di GeoGebra per la verifica della domanda';
$string['isexercise_help'] = 'L\'applet contiene strumenti definiti dall\'utente che possono essere utilizzati per la verifica automatica dell\'esercizio.\nAttenzione: le risposte indicate in seguito non sono applicabili in questo caso.';
$string['israndomized'] = 'Sono presenti delle variabili da rendere casuali?';
$string['loadapplet'] = '(Ri)carica e visualizza l\'applet';
$string['loadapplet_help'] = '(Ri)carica e visualizza l\'applet da GeoGebra e memorizza la nuova versione da GeoGebra al database.';
$string['mineqmax'] = 'I valori di Min e Max per non sono stati specificati correttamente per la variabile {$a} da rendere casuale: non sono stati specificati MIn e Max dello slider oppure l\'elemento non è uno slider. Potrebbe essere necessario dovere correggere questa situazione nel file di GeoGebra.';
$string['minplusstepgtmax'] = 'La somma di Min e dell\'Incremento è maggiore di Max per la variabile {$a}: potrebbe essere necessario dovere correggere questa situazione nel file di GeoGebra.';
$string['noappletloaded'] = 'Non è stata caricata alcuna applet. Verificare la correttezza dell\'URL e se viene visualizzata un applet dopo avere selezionato un collegamento o dopo avere (ri)caricato l\'applet';
$string['nofractionsumeq1'] = 'Almeno una combinazione di voti deve totalizzare il 100%';
$string['pluginname_help'] = 'Domande la cui soluzione può essere svolta con GeoGebra';
$string['pluginnameadding'] = 'Aggiungi una domanda GeoGebra';
$string['pluginnameediting'] = 'Modifica una domanda GeoGebra';
$string['pluginnamesummary'] = 'Una versione delle domande calcolate che utilizza GeoGebra per visualizzare la domanda e verificare la risposta durante il quiz.';
$string['randomizedbutnovars'] = 'È stata selezionata l\'opzione di rendere casuale la domanda, ma non sono state specificate le variabili da rendere casuali.';
$string['randomizedvar'] = 'Variabili da rendere casuali';
$string['randomizedvar_help'] = 'Variabili da rendere casuali (delimitate da virgole). Utilizzare le opzioni dello slider in GeoGebra per dichiarare Min, Max e Incremento. Tali variabili possono essere utilizzate anche nella domanda, racchiuse in parentesi graffe, ad esempio: {a}';
$string['show_algebra_input'] = 'Mostra la barra di inserimento';
$string['show_menu_bar'] = 'Mostra il menu';
$string['show_reset_icon'] = 'Mostra l\'icona per reimpostare la costruzione';
$string['show_tool_bar'] = 'Mostra la barra degli strumenti';
$string['stepzero'] = 'L\'incremento della variabile {$a} è 0; non è stato specificato un Incremento nello slider oppure l\'elemento non è uno slider. Potrebbe essere necessario dovere correggere questa situazione nel file di GeoGebra.';
$string['useafile'] = '... oppure utilizza un file ggb';
$string['valuecheckedfor'] = 'Oggetto booleano in GeoGebra utilizzato per verificare la correttezza.';
$string['variablenamewrong'] = 'Nel file di GeoGebra non esiste una variabile avente tale nome.';
$string['variableno'] = 'Variabile {$a}';
$string['variables'] = 'Variabili';
$string['willbereadfromfile'] = 'Verrà letto da GeoGebra... (vedere il pulsante della Guida)';
