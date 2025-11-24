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
 * Strings for component 'ai', language 'it', version '4.5'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Accetta e continua';
$string['action'] = 'Azione';
$string['action_generate_image'] = 'Genera immagine';
$string['action_generate_image_desc'] = 'Genera un\'immagine sulla base di un prompt testuale.';
$string['action_generate_text'] = 'Genera testo.';
$string['action_generate_text_desc'] = 'Genera un testo sulla base di un prompt testuale.';
$string['action_generate_text_instruction'] = 'Riceverai un input di testo dall\'utente. Il tuo compito è generare testo in base alla sua richiesta. Segui queste importanti istruzioni:
  1. Restituisci il riepilogo solo in testo normale.
  2. Non includere formattazione markdown, saluti o luoghi comuni.';
$string['action_summarise_text'] = 'Riassumi testo';
$string['action_summarise_text_desc'] = 'Riassume il testo presente nelle pagine del corso';
$string['action_summarise_text_instruction'] = 'Riceverai un input di testo dall\'utente. Il tuo compito è riassumere il testo fornito. Segui queste linee guida:
  1. Condensa: accorcia i passaggi lunghi in punti chiave.
  2. Semplifica: rendi le informazioni complesse più facili da comprendere, soprattutto per gli studenti.

Istruzioni importanti:
  1. Restituisci il riepilogo solo in testo normale.
  2. Non includere formattazione markdown, saluti o luoghi comuni.
  3. Concentrati su chiarezza, concisione e accessibilità.

Assicurati che il riepilogo sia facile da leggere e trasmetta in modo efficace i punti principali del testo originale.';
$string['action_translate_text'] = 'Traduci testo';
$string['action_translate_text_desc'] = 'Traduce il testo fornito in un\'altra lingua.';
$string['actionsettingprovider'] = 'impostazioni azione {$a}';
$string['actionsettingprovider_desc'] = 'Queste impostazioni controllano il modo in cui {$a->providername} esegue l\'azione {$a->actionname}.';
$string['ai'] = 'IA';
$string['aiplacements'] = 'Posizionamenti IA';
$string['aiproviders'] = 'Provider IA';
$string['aiusagepolicy'] = 'Politica di utilizzo IA';
$string['availableplacements'] = 'Selezionare dove saranno disponibili le azioni IA';
$string['availableplacements_desc'] = 'I posizionamenti definiscono come e dove le azioni IA possono essere utilizzate nel sito. Tramite le impostazioni è possibile selezionare quali azioni sarannodisponibili per ciascun posizionamento.';
$string['availableproviders'] = 'Gestione i provider IA connessi all\'LMS';
$string['availableproviders_desc'] = 'I provider di IA aggiungono funzionalità di intelligenza artificiale al sito tramite le \'azioni\', come riepiloghi di testo o generazione di immagini.<br/>
È possibile gestire le azioni di ciascun provider nelle rispettive impostazioni.';
$string['contentwatermark'] = 'Generato dalla IA';
$string['declineaipolicy'] = 'Rifiuta';
$string['manageaiplacements'] = 'Gestione posizionamenti IA';
$string['manageaiproviders'] = 'Gestione provider IA';
$string['noproviders'] = 'Questa azione non è disponibile. Nessun <a href="{$a}">provider IA</a> è stato configurato per questa azione.';
$string['placement'] = 'Posizonamento';
$string['placementactionsettings'] = 'Azioni';
$string['placementactionsettings_desc'] = 'Azioni AI disponibili per questo posizionamento.';
$string['placementsettings'] = 'Impostazioni specifiche del posizionamento';
$string['placementsettings_desc'] = 'Queste impostazioni controllano il modo in cui questo posizionamento AI si connette al servizio AI e alle operazioni correlate.';
$string['privacy:metadata:ai_action_generate_image'] = 'Tabella in cui vengono memorizzate le richieste di generazione delle immagini effettuate dagli utenti.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'Rapporto di forma delle immagini generate.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'Numero di immagini generate';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'Prompt della richiesta di generazione dell\'immagine';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'Qualità dell\'immagine generata.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'Prompt rivisto delle immagini generate.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'URL di origine delle immagini generate.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'Stile delle immagini generate.';
$string['privacy:metadata:ai_action_generate_text'] = 'Tabella in cui vengono memorizzate le richieste di generazione di testo effettuate dagli utenti.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'Token di completamento utilizzati per generare il testo.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'Hash univoco che rappresenta lo stato/versione del modello e del contenuto.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'testo effettivamente generato dal modello di IA in base al prompt di input.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'Prompt della richiesta di generazione di testo.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'Token del prompt utilizzati per generare il testo.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'ID della risposta.';
$string['privacy:metadata:ai_action_register'] = 'Tabella in cui vengono memorizzate le richieste di azioni effettuate dagli utenti.';
$string['privacy:metadata:ai_action_register:actionid'] = 'ID della richiesta di azione.';
$string['privacy:metadata:ai_action_register:actionname'] = 'nome della richiesta di azione';
$string['privacy:metadata:ai_action_register:provider'] = 'Nome del provider che ha gestito la richiesta.';
$string['privacy:metadata:ai_action_register:success'] = 'Stato della richiesta di azione.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'Orario di completamento della richiesta.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'Orario di creazione della richiesta.';
$string['privacy:metadata:ai_action_register:userid'] = 'ID dell\'utente che ha effettuato la richiesta.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Tabella in cui vengono memorizzate le richieste di riassunto di testo effettuate dagli utenti.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Token di completamento utilizzati per riassumere il testo.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'Hash univoco che rappresenta lo stato/versione del modello e del contenuto.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'testo effettivamente generato dal modello di IA in base al prompt di input.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'Prompt della richiesta di riassunto di testo.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'Token del prompt utilizzati per riassumere il testo.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'ID della risposta.';
$string['privacy:metadata:ai_policy_register'] = 'Tabella che memorizza lo stato di accettazione della policy IA per ciascun utente.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'ID del contesto i cui dati sono stati salvati.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'Orario in cui l\'utente ha accettato la policy sull\'IA.';
$string['privacy:metadata:ai_policy_register:userid'] = 'ID dell\'utente i cui dati sono stati salvati.';
$string['provider'] = 'Provider';
$string['provideractionsettings'] = 'Azioni';
$string['provideractionsettings_desc'] = 'Selezionare e configurare le azioni che {$a} potrà eseguire sul sito.';
$string['providers'] = 'Provider';
$string['providersettings'] = 'Impostazioni';
$string['userpolicy'] = '<h4><strong>Benvenuti alla nuova funzionalità IA!</strong></h4>
<p>Questa funzionalità di Intelligenza Artificiale (IA) si basa su Large Language Model (LLM) esterni per migliorare l\'esperienza di apprendimento e insegnamento. Prima di iniziare a utilizzare questi servizi IA, leggere la politica di utilizzo.</p>
<h4><strong>Precisione dei contenuti generati dall\'IA</strong></h4>
<p>L\'IA può fornire suggerimenti e informazioni utili, ma la sua accuratezza può variare. Si raccomanda sempre ricontrollare le informazioni fornite per assicurarsi che siano accurate, complete e adatte alla situazione specifica.</p>

<h4><strong>Come vengono elaborati i dati personali</strong></h4>
<p>La funzionalità IA è fornita da LLM esterni di terze parti. Se si sceglie di utilizzare questa funzionalità, tutti gli input o i dati personali inviati verranno elaborati in conformità con la politica sulla privacy del servizio di terze parti. Si raccomanda di rivedere la privacy dell\'LLM per comprendere come verranno gestiti i dati personali. Inoltre, un registro delle interazioni con le funzionalità IA potrà essere conservato all\'interno di questo sito.</p>
<p>Se hai domande su come vengono elaborati i dati personali, contattare i docenti o l\'organizzazione che organizza i corsi.</p>

<p>Continuando, riconosci di aver compreso e accettato questa politica.</p>';
