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
 * Strings for component 'url', language 'it', version '4.1'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Scegli una variabile...';
$string['clicktoopen'] = 'Per aprire la risorsa fai click sul link {$a}';
$string['configdisplayoptions'] = 'Seleziona le opzioni che desideri rendere disponibili. Le impostazioni già in essere non saranno modificate. Per selezionare più opzioni tenere premuti il tasto CTRL.';
$string['configframesize'] = 'Se si desidera visualizzare un URL usando i frame, è possibile specificare la dimensione in pixel del frame superiore che conterrà l\'intestazione di pagina con l\'interfaccia di navigazione del sito.';
$string['configrolesinparams'] = 'Rende possibile utilizzare i nomi personalizzati dei ruoli nell\'elenco dei parametri.';
$string['configsecretphrase'] = 'La chiave viene utilizzata per generare il codice criptato utilizzato per inviare dati dalle risorse che fanno uso di parametri. Il codice criptato è generato tramite la funzione md5 concatenando l\'indirizzo IP dell\'utente con la chiave. Ad esempio: code = md5(IP.secretphrase). Tenere presente che il tutto potrebbe non essere affidabile in quanto gli indirizzi IP cambiano e sono spesso condivisi tra più computer.';
$string['contentheader'] = 'Contenuto';
$string['createurl'] = 'Aggiungi un URL';
$string['displayoptions'] = 'Opzioni di visualizzazione disponibili';
$string['displayselect'] = 'Visualizzazione';
$string['displayselect_help'] = 'L\'impostazione, assieme al tipo di URL e ciò che supporta il browser, determina la visualizzazione dell\'URL. Opzioni disponibili:

* Automatica - La visualizzazione migliore sarà scelta automaticamente
* Incorpora - L\'URL sarà visualizzato all\'interno della pagina sotto la barra di navigazione assieme alla descrizione ed ai blocchi laterali
* Apri - Nel browser sarà visualizzata solamente l\'URL
* Popup - L\'URL sarà visualizzata in una nova finestra priva di barre dei menu e di navigazione.
* Frame - L\'URL sarà visualizzato utilizzando un frame sotto la barra di navigazione e la descrizione dell\'URL stessa
* Nuova finestra - L\'URL sarà visualizzato in una nuova finestra completa di barre dei menu e di navigazione.';
$string['displayselectexplain'] = 'Imposta il tipo di visualizzazione di default. Tenere presente che i vari tipi di URL potrebbero consentire solo alcuni tipi di visualizzazione.';
$string['externalurl'] = 'URL';
$string['framesize'] = 'Altezza frame';
$string['indicator:cognitivedepth'] = 'URL cognitivo';
$string['indicator:cognitivedepth_help'] = 'L\'indicatore è basato sulla profondità cognitiva toccata dallo studente con risorse URL.';
$string['indicator:cognitivedepthdef'] = 'URL cognitivo';
$string['indicator:cognitivedepthdef_help'] = 'Durante l\'intervallo di analisi, il partecipante ha raggiunto questa percentuale di coinvolgimento cognitivo offerto dalla risorsa URL (Livelli: Nessuna visualizzazione, Visualizzazione)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'URL sociale';
$string['indicator:socialbreadth_help'] = 'L\'indicatore è basato sulla dimensione sociale raggiunta dallo studente con risorse URL.';
$string['indicator:socialbreadthdef'] = 'URL sociale';
$string['indicator:socialbreadthdef_help'] = 'Durante l\'intervallo di analisi, il partecipante ha raggiunto questa percentuale di coinvolgimento sociale offerto dalle risorse URL (Livelli: Nessuna partecipazione, Partecipazione da solo)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'Non è possibile visualizzare la risorsa, l\'URL non è valida';
$string['invalidurl'] = 'L\'URL inserito non è valido';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'Il modulo URL consente ai docenti di inserire link web come risorse del corso. È possibile creare link verso qualsiasi URL liberamente disponibile online, copiando ed incollando l\'URL, oppure scegliendo un file da repository come Flickr, youtube o Wikimedia tramite il file picker (in funzione del repository attivi nel sito).

Sono disponibili molte opzioni di visualizzazione per aprire l\'URL, ad esempio in una finestra popup oppure incorporandola, ed anche opzioni avanzate per inviare all\'URL parametri come il nome dello studente.

Da notare che è possibile aggiungere URL ad altri tipi di risorse o attività tramite l\'editor di testo.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'URL';
$string['name'] = 'Nome';
$string['page-mod-url-x'] = 'Qualsiasi pagina con modulo URL';
$string['parameterinfo'] = '&amp;parametro=variabile';
$string['parametersheader'] = 'Parametri URL';
$string['parametersheader_help'] = 'È possibile posporre automaticamente all\'URL alcune variabili interne di Moodle. LA funzione è particolarmente utile se l\'URL è una pagina interattiva in grado di accettare parametri come ad esempio il nome dell\'utente. Inserire il nome del parametro nel campo di testo e a fianco selezionare la variabile di Moodle desiderata.';
$string['pluginadministration'] = 'Gestione URL';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Altezza popup (in pixel)';
$string['popupheightexplain'] = 'Altezza di default per le finestre popup.';
$string['popupwidth'] = 'Larghezza popup (in pixel)';
$string['popupwidthexplain'] = 'Larghezza di default per le finestre popup.';
$string['printintro'] = 'Visualizza la descrizione dell\'URL';
$string['printintroexplain'] = 'Consente di visualizzare la descrizione dell\'URL sotto il contenuto. enere presente che alcuni tipi di visualizzazione potrebbero non rispettare questa impostazione.';
$string['privacy:metadata'] = 'Il plugin risorsa "URL" non memorizza dati personali.';
$string['rolesinparams'] = 'Includi nei parametri i nomi dei ruoli';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'URL server';
$string['url:addinstance'] = 'Aggiungere URL';
$string['url:view'] = 'Visualizzare URL';
