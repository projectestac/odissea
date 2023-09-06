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
 * Strings for component 'block_completion_progress', language 'it', version '4.1'.
 *
 * @package     block_completion_progress
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completed_colour'] = '#73A839';
$string['completed_colour_descr'] = 'Codice colore HTML per gli elementi che sono stati completati';
$string['completed_colour_title'] = 'Colore per attività completata';
$string['completion_not_enabled'] = 'Il tracciamento del completamento non è abilitato.';
$string['completion_not_enabled_course'] = 'Il tracciamento del completamento non è abilitato in questo corso.';
$string['completion_progress:addinstance'] = 'Aggiungere blocco Stato di completamento';
$string['completion_progress:myaddinstance'] = 'Aggiungere blocco Stato di completamento alla Dashboard';
$string['completion_progress:overview'] = 'Visualizzare la panoramica dello Stato di Completamento di tutti gli studenti';
$string['completion_progress:showbar'] = 'Visualizzare la barra nel blocco Stato di Completamento';
$string['config_activitiesincluded'] = 'Attività incluse';
$string['config_activitycompletion'] = 'Tutte le attività con completamento impostato';
$string['config_default_title'] = 'Stato di Completamento';
$string['config_group'] = 'Visibile soltanto al gruppo';
$string['config_header_monitored'] = 'Monitorato';
$string['config_icons'] = 'Usa icone nella barra';
$string['config_longbars'] = 'Modalità di visualizzazione delle barre orizzontali';
$string['config_orderby'] = 'Ordina le attività nella barra per';
$string['config_orderby_course_order'] = 'Ordine attività nel corso';
$string['config_orderby_due_time'] = 'Utilizza la data "{$a}"';
$string['config_percentage'] = 'Visualizza la percentuale agli studenti';
$string['config_scroll'] = 'Con scorrimento';
$string['config_selectactivities'] = 'Attività selezionate';
$string['config_selectedactivities'] = 'Attività selezionate';
$string['config_squeeze'] = 'Compresse';
$string['config_title'] = 'Titolo alternativo';
$string['config_wrap'] = 'A capo automatico';
$string['coursenametoshow'] = 'Titolo del corso da visualizzare nella Dashboard';
$string['defaultlongbars'] = 'Presentazione di default per le barre orizzontali';
$string['forceiconsinbar'] = 'Forza le icone nella barra di avanzamento';
$string['fullname'] = 'Titolo  del corso';
$string['futureNotCompleted_colour'] = '#025187';
$string['futureNotCompleted_colour_descr'] = 'Codice colore HTML per attività successive che non sono ancora state completate';
$string['futureNotCompleted_colour_title'] = 'Colori per le attività successive non completate';
$string['how_activitiesincluded_works'] = 'Come funziona l\'inclusione delle attività';
$string['how_activitiesincluded_works_help'] = '<p>Di default, tutte le attività con l\'impostazione di completamento sono presenti nella barra.</p><p>Si possono selezionare manualmente le attività da includere.</p>';
$string['how_group_works'] = 'Funzionamento della visualizzazione per i gruppi';
$string['how_group_works_help'] = '<p>Il blocco sarà visibile solo al gruppo selezionato.</p>';
$string['how_longbars_works'] = 'Visualizzazione delle barre orizzontali';
$string['how_longbars_works_help'] = '<p>Quando le barre eccedono per lunghezza, possono essere visualizzate nei seguenti modi.</p><ul><li>Compresse nella barra orizzontale</li><li>Con scorrimento laterale per visualizzare la parte eccedente</li><li>A capo automatico per visualizzare tutte le linee o i segmenti di barra</li></ul><p>Nota che quando la barra è a capo automatico, l\'indicatore ADESSO non sarà visualizzato.</p>';
$string['how_ordering_works'] = 'Funzionamento dell\'ordinamento delle attività';
$string['how_ordering_works_help'] = '<p>Ci sono due modi per ordinare le attività nel blocco dello Stato di Completamento.</p><ul><li><em>Utilizzando la data "Completamento atteso entro il" </em> (default)<br />Le date previste per il completamento delle attività/risorse sono usate per ordinare la disposizione delle attività nella barra. Quando le attività/risorse non hanno una data prevista per il completamento, si usa l\'ordine attività nel corso. Con l\'opzione Utilizza la data "Completamento atteso entro il", l\'indicatore ADESSO è visibile.</li><li><em>Ordinamento attività nel corso</em><br />Le attività/risorse sono visualizzate nello stesso ordine in cui sono visibili sulla pagina del corso. Quando si usa questa opzione, non sono considerate le date previste per il completamento e l\'indicatore ADESSO non è visibile.</li></ul>';
$string['how_selectactivities_works'] = 'Funzionamento della selezione delle attività';
$string['how_selectactivities_works_help'] = '<p>Per selezionare manualmente le attività da includere nella barra, assicurarsi che "Attività incluse" sia impostata su "Attività selezionate".</p><p>Solo incluse solo le attività per cui è stata attività l\'impostazione Completamento attività.</p><p>Premi il tasto CTRL per selezionare più attività.</p>';
$string['lastonline'] = 'Ultimo utente online';
$string['mouse_over_prompt'] = 'Passa sulla barra con il mouse per avere informazioni.';
$string['no_activities_config_message'] = 'Non ci sono attività o risorse con Completamento attività impostato o nessuna attività o risorse sono state selezionate. Imposta il completamento dell\'attività per attività o risorse poi configura questo blocco.';
$string['no_activities_message'] = 'Nessuna attività o risorsa è monitorata. Usa la configurazione del blocco per impostare il monitoraggio.';
$string['no_blocks'] = 'Nessun blocco Stato di Completamento è stato impostato per il corso.';
$string['no_courses'] = 'L\\\'utente non è iscritto in nessun corso. Sarà visualizzata solo la barra per i corsi dove l\\\'utente è iscritto.';
$string['no_visible_activities_message'] = 'Nessuna delle attività monitorare è ora visibile.';
$string['notCompleted_colour'] = '#C71C22';
$string['notCompleted_colour_descr'] = 'Codice colore HTML per gli elementi correnti che non sono stati ancora completati';
$string['notCompleted_colour_title'] = 'Colore per le attività non completate';
$string['not_all_expected_set'] = 'Non tutte le attività con il completamento hanno un "{$a}" alla data prefissata.';
$string['now_indicator'] = 'ADESSO';
$string['overview'] = 'Panoramica studenti';
$string['pluginname'] = 'Stato di completamento';
$string['privacy:metadata'] = 'Il blocco "Stato di completamento" visualizza solo dati di completamento già esistenti.';
$string['progress'] = 'Stato';
$string['progressbar'] = 'Stato di completamento';
$string['selectitem'] = 'Seleziona \'{$a}\'';
$string['shortname'] = 'Titolo abbreviato del corso';
$string['showallinfo'] = 'Visualizza tutte le informazioni';
$string['showinactive'] = 'Visualizza studenti inattivi nella Panoramica';
$string['showlastincourse'] = 'Visualizza nella panoramica l\'ultimo accesso dello studente al corso nella overview';
$string['submitted'] = 'Inviato';
$string['submittednotcomplete_colour'] = '#FFCC00';
$string['submittednotcomplete_colour_descr'] = 'Codice colore HTML per gli elementi che sono stati inviati, ma non ancora completati';
$string['submittednotcomplete_colour_title'] = 'Colore per attività inviate non completate';
$string['time_expected'] = 'Previsto';
$string['why_set_the_title'] = 'Perché impostare un titolo al blocco?';
$string['why_set_the_title_help'] = '<p>Possono esserci varie istanze del blocco Stato di Completamento. Si possono usare differenti blocchi per lo Stato di Completamento per monitorare differenti gruppi di attività o risorse. Per esempio si può seguire l\'avanzamento dei compiti in un blocco o quello dei quiz in un altro. Per questo motivo si può modificare il titolo di default e impostare un titolo di blocco più appropriato per ogni attività.</p>';
$string['why_show_precentage'] = 'Perché visualizzare agli studenti la percentuale di avanzamento?';
$string['why_show_precentage_help'] = '<p>è possibile far visualizzare una percentuale complessiva dell\'avanzamento agli studenti.</p><p>Viene calcolata come numero delle attività completate sul totale di attività incluse nella barra.</p><p>La percentuale di avanzamento è visualizzata fino a quando lo studente muove il mouse sugli elementi della barra.</p>';
$string['why_use_icons'] = 'Perché usare le icone?';
$string['why_use_icons_help'] = '<p>Si possono usare icone nello Stato di Completamento per rendere questo blocco più accessibile agli studenti daltonici.</p><p>Si può rendere il significato del blocco più chiaro se si ritiene che i colori non siano intuitivi, anche per ragioni culturali o personali.</p>';
$string['wrapafter'] = 'Quando si utilizza la visualizzazione A capo automatico, limita il numero delle righe a';
