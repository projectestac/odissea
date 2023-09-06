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
 * Strings for component 'course', language 'it', version '4.1'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Piè di pagina del selettore attività';
$string['activitychooseractivefooter_desc'] = 'Il selettore attività supporta plugin che aggiungono elementi al piè di pagina.';
$string['activitychoosercategory'] = 'Selettore attività';
$string['activitychooserhidefooter'] = 'Nessun piè di pagina';
$string['activitychooserrecommendations'] = 'Attività suggerite';
$string['activitychoosersettings'] = 'Impostazioni selettore attività';
$string['activitychoosertabmode'] = 'Schede selettore attività';
$string['activitychoosertabmode_desc'] = 'Con il selettore attività i docenti possono selezionare facilmente le attività e le risorse da aggiungere nel corso. L\'impostazione consente di definire le schede che appariranno nel selettore. Da notare che la scheda \'Preferite\' sarà visualizzata dopo l\'espressione di preferenza su almeno un\'attività. Analogamente la scheda \'Suggerite\' sarà visualizzato dopo che l\'amministratore del sito avrà indicato una o più attività come suggerite.';
$string['activitychoosertabmodeone'] = 'Preferite, Tutte, Attività, Risorse, Suggerite';
$string['activitychoosertabmodethree'] = 'Preferite, Attività, Risorse, Suggerite';
$string['activitychoosertabmodetwo'] = 'Preferite, Tutte, Suggerite';
$string['activitydate:closed'] = 'Chiuso:';
$string['activitydate:closes'] = 'Chiusura:';
$string['activitydate:opened'] = 'Aperto:';
$string['activitydate:opens'] = 'Apertura:';
$string['aria:coursecategory'] = 'Categoria di corsi';
$string['aria:courseimage'] = 'Immagine del corso';
$string['aria:coursename'] = 'Titolo del corso';
$string['aria:courseshortname'] = 'Titolo abbreviato del corso';
$string['aria:defaulttab'] = 'Attività di default';
$string['aria:favourite'] = 'Il corso è tra i preferiti';
$string['aria:favouritestab'] = 'Attività preferite';
$string['aria:modulefavourite'] = 'Rendi preferita l\'attività {$a}';
$string['aria:recommendedtab'] = 'Attività suggerite';
$string['browsecourseadminindex'] = 'Sfoglia l\'amministrazione del corso con questo indice.';
$string['browsesettingindex'] = 'Sfoglia le impostazioni con questo indice.';
$string['completion_automatic:done'] = 'Fatto:';
$string['completion_automatic:failed'] = 'Non superato:';
$string['completion_automatic:todo'] = 'Da fare:';
$string['completion_manual:aria:done'] = '{$a} è spuntato come completato. Premere per annullare.';
$string['completion_manual:aria:markdone'] = 'Spunta {$a} come svolto';
$string['completion_manual:done'] = 'Completato';
$string['completion_manual:markdone'] = 'Spunta come completato';
$string['completion_setby:auto:done'] = 'Completato: {$a->condition} (impostato da {$a->setby})';
$string['completion_setby:auto:todo'] = 'Da completare: $a->condition} (Impostato da {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} è stato spuntato da {$a->setby} come completato. Premere per annullare.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} è stato spuntato da {$a->setby} come non completato. Premere per annullare.';
$string['completionrequirements'] = 'Criteri di completamento di {$a}';
$string['courseaccess'] = 'Accesso al corso';
$string['coursealreadyfinished'] = 'Il corso è terminato';
$string['coursecontentnotification'] = 'Invia notifica della modifica';
$string['coursecontentnotification_help'] = 'Seleziona per inviare una notifica ai partecipanti, informandoli della creazione o modifica di questa attività o risorsa. Solo gli utenti che possono accedere all’attività o risorsa riceveranno la notifica.';
$string['coursecontentnotifnew'] = 'Nuovi contenuti in {$a->coursename}';
$string['coursecontentnotifnewbody'] = '<p>Nel corso <a href="{$a->courselink}">{$a->coursename}</a> è stata creata la seguente attività o risorsa:</p>
<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a></p>
<p><a href="{$a->notificationpreferenceslink}">Modifica preferenze di notifica</a></p>';
$string['coursecontentnotifupdate'] = 'Contenuti aggiornati in {$a->coursename}';
$string['coursecontentnotifupdatebody'] = '<p>Nel corso <a href="{$a->courselink}">{$a->coursename}</a> è stata modificata la seguente attività o risorsa:</p>
<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a></p>
<p><a href="{$a->notificationpreferenceslink}">Modifica preferenze di notifica</a></p>';
$string['coursenotyetfinished'] = 'Il corso non è terminato';
$string['coursenotyetstarted'] = 'Il corso non è iniziato';
$string['courseparticipants'] = 'Partecipanti al corso';
$string['coursetoolong'] = 'Il corso è troppo lungo';
$string['customfield_islocked'] = 'Bloccato';
$string['customfield_islocked_help'] = 'Il campo è bloccato, lo possono modificare solo gli utenti con il privilegio di modificare i campi personalizzati (di default il ruolo manager) nelle impostazioni del corso.';
$string['customfield_notvisible'] = 'Nessuno';
$string['customfield_visibility'] = 'Visibile a';
$string['customfield_visibility_help'] = 'L\'impostazione determina chi potrà visualizzare nell\'elenco di corsi il nome e il contenuto del campo personalizzato tramite l\'apposito filtro nella Dashboard.';
$string['customfield_visibletoall'] = 'Tutti';
$string['customfield_visibletoteachers'] = 'Docenti';
$string['customfieldsettings'] = 'Impostazioni comuni dei campi personalizzati del corso';
$string['daystakingcourse'] = 'Giorni trascorsi dalla data di inizio corso';
$string['downloadcontent'] = 'Includi nel download del contenuto del corso';
$string['downloadcontent_help'] = 'Definisce se questa attività o risorsa deve essere inclusa nel file zip del contenuto del corso disponibile per il download. File, cartelle, pagine ed etichette possono essere scaricati interamente. Per tutte le altre attività e risorse, vengono scaricati solo il nome e la descrizione. Questa impostazione richiede che il download del contenuto del corso sia abilitato nelle impostazioni del corso.

L\'impostazione non ha alcun effetto sul download dei contenuti delle app per dispositivi mobili per l\'utilizzo offline.';
$string['downloadcourseconfirmation'] = 'Stai per scaricare lo zip con i contenuti del corso (con esclusione degli elementi che non possono essere scaricati e i file più grandi di {$a}).';
$string['downloadcoursecontent'] = 'Scaricamento contenuti del corso';
$string['downloadcoursecontent_help'] = 'Abilita la possibilità di scaricare il contenuto del corso da parte degli utenti il cui ruolo ha il privilegio di farlo (di default il ruolo studente e docente).';
$string['enabledownloadcoursecontent'] = 'Abilita scaricamento contenuti del corso';
$string['errorendbeforestart'] = 'La data di fine ({$a}) è antecedente alla data di inizio.';
$string['favourite'] = 'Corso preferito';
$string['gradetopassnotset'] = 'Il corso non ha una valutazione minima per superarlo. È possibile impostarla nel registro delle valutazioni.';
$string['informationformodule'] = 'Informazioni sull\'attività {$a}';
$string['module'] = 'Attività';
$string['namewithlink'] = 'Nome della categoria con link';
$string['noaccesssincestartinfomessage'] = 'Gentile {$a->userfirstname},
<p>Alcuni studenti non hanno mai acceduto il corso {$a->coursename}.</p>';
$string['nocourseactivity'] = 'Nel corso non sono presenti un numero sufficiente di attività tra la data di inizio e la data di fine del corso stesso.';
$string['nocourseendtime'] = 'Il corso non ha una data di fine';
$string['nocoursesections'] = 'Non ci cono sezioni del corso';
$string['nocoursestudents'] = 'Non ci sono studenti';
$string['norecentaccessesinfomessage'] = 'Gentile {$a->userfirstname},
<p>Nel corso  {$a->coursename} ci sono studenti che non accedono da tempo.</p>';
$string['noteachinginfomessage'] = 'Gentile {$a->userfirstname},
<p>Ci sono corsi in partenza la prossima settimana che non hanno docenti né studenti iscritti.</p>';
$string['participants:perpage'] = 'Numero di partecipanti per pagina';
$string['participants:perpage_help'] = 'Il numero di utenti che sarà visualizzato nella pagina dei partecipanti del corso.';
$string['participantsnavigation'] = 'Navigazione terziaria dei partecipanti.';
$string['privacy:completionpath'] = 'Completamento corso';
$string['privacy:favouritespath'] = 'Informazioni sui corsi preferiti';
$string['privacy:metadata:activityfavouritessummary'] = 'Il sistema corso contiene informazioni sugli elementi del selettore attività che sono i preferiti degli utenti.';
$string['privacy:metadata:completionsummary'] = 'Il corso contiene informazioni sul completamento relative all\'utente.';
$string['privacy:metadata:favouritessummary'] = 'Il corso contiene informazioni relative al corso che l\'utente ha inserito fra i preferiti.';
$string['privacy:perpage'] = 'Numero di corsi da visualizzare sulla pagina.';
$string['recommend'] = 'Suggerisci';
$string['recommendcheckbox'] = 'Attività suggerita: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} dopo l\'inizio del corso';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} prima dell\'inizio del corso';
$string['searchactivitiesbyname'] = 'Cerca attività per nome';
$string['searchresults'] = 'Risultati della ricerca: {$a}';
$string['studentsatriskincourse'] = 'Studenti a rischio nel corso {$a}';
$string['studentsatriskinfomessage'] = 'Gentile {$a->userfirstname},
<p>Nel corso  {$a->coursename} ci sono studenti a rischio.</p>';
$string['submitsearch'] = 'Invia ricerca';
$string['target:coursecompetencies'] = 'Studenti a rischio di non raggiungere le competenze assegnate al corso';
$string['target:coursecompetencies_help'] = 'L\'obiettivo descrive se lo studente rischia di non raggiungere le competenze assegnate al corso. L\'obiettivo considera che tutte le competenze assegnate al corso dovranno essere raggiunte prima della fine del coso.';
$string['target:coursecompletion'] = 'Studenti a rischio di non soddisfare i criteri di completamento del corso';
$string['target:coursecompletion_help'] = 'L\'obiettivo descrive se lo studente rischia di non soddisfare i criteri di completamento del corso';
$string['target:coursedropout'] = 'Studenti a rischio di abbandono';
$string['target:coursedropout_help'] = 'L\'obiettivo descrive se lo studente è a rischio di abbandono.';
$string['target:coursegradetopass'] = 'Studenti a rischio di non raggiungere il punteggio minimo per superare il corso';
$string['target:coursegradetopass_help'] = 'L\'obiettivo descrive se lo studente rischia di non raggiungere il punteggio minimo per superare il corso.';
$string['target:noaccesssincecoursestart'] = 'Studenti che non hanno mai acceduto al corso';
$string['target:noaccesssincecoursestart_help'] = 'L\'obiettivo descrive se sono presenti studenti che non hanno mai acceduto al corso dove sono iscritti.';
$string['target:noaccesssincecoursestartinfo'] = 'I seguenti studenti sono iscritti in un corso che è iniziato ma non lo hanno mai acceduto.';
$string['target:norecentaccesses'] = 'Studenti che non hanno acceduto al corso recentemente';
$string['target:norecentaccesses_help'] = 'L\'obiettivo descrive se sono presenti studenti che durante l\'intervallo di analisi non hanno acceduto al corso dove sono iscritti (di default il mese scorso).';
$string['target:norecentaccessesinfo'] = 'I seguenti studenti non hanno mai acceduto un corso al quale sono iscritti durante l\'intervallo di analisi impostato (di default il mese scorso)';
$string['target:noteachingactivity'] = 'Corsi a rischio di non iniziare';
$string['target:noteachingactivity_help'] = 'L\'obiettivo descrive se il corso che inizierà la prossima settimana avrà attività di docenza.';
$string['target:noteachingactivityinfo'] = 'I seguenti corsi in partenza nei prossimi giorni rischiano di non partire poiché non hanno docenti né studenti iscritti.';
$string['targetlabelstudentcompetenciesno'] = 'Studenti che probabilmente raggiungeranno le competenze assegnate al corso';
$string['targetlabelstudentcompetenciesyes'] = 'Studenti a rischio di non raggiungere le competenze assegnate al corso';
$string['targetlabelstudentcompletionno'] = 'Studenti che probabilmente soddisfaranno i criteri di completamento del corso';
$string['targetlabelstudentcompletionyes'] = 'Studenti a rischio di non soddisfare i criteri di completamento del coso';
$string['targetlabelstudentdropoutno'] = 'Non a rischio';
$string['targetlabelstudentdropoutyes'] = 'Studenti a rischio di abbandono';
$string['targetlabelstudentgradetopassno'] = 'Studenti che probabilmente raggiungeranno la valutazione per necessaria per completare il corso.';
$string['targetlabelstudentgradetopassyes'] = 'Studenti a rischio di non raggiungere il punteggio minimo per superare il corso.';
$string['targetlabelteachingno'] = 'Corsi a rischio di non iniziare';
$string['targetlabelteachingyes'] = 'Docenti che hanno acceduto al corso';
