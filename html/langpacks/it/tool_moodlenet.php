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
 * Strings for component 'tool_moodlenet', language 'it', version '4.5'.
 *
 * @package     tool_moodlenet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addingaresource'] = 'Inserimento contenuto da MoodleNet';
$string['aria:enterprofile'] = 'Inserire l\'ID del proprio profilo MoodleNet';
$string['aria:footermessage'] = 'Cerca contenuti su MoodleNet';
$string['autoenablenotification'] = '<p>A partire da Moodle 4.0, l\'integrazione <a href="https://moodle.net/">MoodleNet</a> è abilitata per impostazione di default in Funzionalità avanzate. Gli utenti con i privilegi di creare e gestire attività potranno navigare su MoodleNet tramite il selettore di attività e importare risorse MoodleNet nei loro corsi.</p><p>Se lo si desidera, è possibile specificare un\'istanza MoodleNet alternativa in <a href="{$ a->settingslink}">Impostazioni in entrata di MoodleNet</a>.</p>';
$string['autoenablenotification_subject'] = 'L\'impostazione di default di MoodleNet è stata modificata.';
$string['browsecontentmoodlenet'] = 'Oppure cerca i contenuti su MoodleNet';
$string['clearsearch'] = 'Svuota ricerca';
$string['connectandbrowse'] = 'Collegati e naviga:';
$string['defaultmoodlenet'] = 'URL MoodleNet';
$string['defaultmoodlenet_desc'] = 'L\'URL dell\'istanza MoodleNet che sarà visibile nel selettore attività';
$string['defaultmoodlenetname'] = 'Nome istanza MoodleNet';
$string['defaultmoodlenetname_desc'] = 'Il nome dell\'istanza MoodleNet che sarà visibile nel selettore attività';
$string['defaultmoodlenetnamevalue'] = 'MoodleNet Centrale';
$string['enablemoodlenet'] = 'Abilita integrazione MoodleNet (in ingresso)';
$string['enablemoodlenet_desc'] = 'Se abilitato, un utente con il privilegio di creare e gestire attività può navigare su MoodleNet tramite il selettore di attività e importare risorse MoodleNet nel proprio corso. Inoltre, un utente con il privilegio di ripristinare i backup può selezionare un file di backup su MoodleNet e ripristinarlo su Moodle.';
$string['errorduringdownload'] = 'Si è verificato un errore durante lo scaricamento del file: {$a}';
$string['footermessage'] = 'Oppure cerca i contenuti su';
$string['forminfo'] = 'L\'ID del profilo MoodleNet verrà automaticamente salvato nel profilo personale su questo sito.';
$string['importconfirm'] = 'Stai per importare il contenuto "{$a->resourcename} ({$a->resourcetype})" nel corso "{$a->coursename}". Sei sicuro di continuare?';
$string['importconfirmnocourse'] = 'Stai per importare il contenuto "{$a->resourcename} ({$a->resourcetype})" nel sito. Sei sicuro di continuare?';
$string['importformatselectguidingtext'] = 'In quale formato si desidere che il contenuto "{$a->name} ({$a->type})" venga aggiunto al corso?';
$string['importformatselectheader'] = 'Seleziona il formato di visualizzazione del contenuto';
$string['inputhelp'] = 'Oppure se si è già in possesso di un account MoodleNet, copiare l\'ID dal proprio profilo MoodleNet e incollarlo qui:';
$string['instancedescription'] = 'MoodleNet è una piattaforma di social media per i formatori, pensato per cerare collezioni collaborative di risorse open.';
$string['instanceplaceholder'] = 'a1b2c3d4e5f6-example@moodle.net';
$string['invalidmoodlenetprofile'] = '$userprofile non è formattato correttamente';
$string['missinginvalidpostdata'] = 'Le informazioni sulle risorse da MoodleNet mancano o sono in un formato errato.
Se dovesse accasere ripetutamente, contattare l\'amministratore del sito.';
$string['mnetprofile'] = 'Profilo MoodleNet';
$string['mnetprofiledesc'] = '<p>Inserire i dati del proprio profilo MoodleNet per essere reindirizzati al profilo durante la visita a MoodleNet.</p>';
$string['moodlenetnotenabled'] = 'L\'integrazione con MoodleNet deve essere attivata in Amministrazione del sito / MoodleNet prima che le importazioni di risorse possano essere elaborate.';
$string['moodlenetsettings'] = 'Impostazioni MoodleNet in ingresso';
$string['notification'] = 'Stai per importare il contenuto "{$a->name} ({$a->type})" nel sito. Seleziona il corso in cui deve essere aggiunto, oppure <a href="{$a->cancellin}">annulla</a>.';
$string['pluginname'] = 'MoodleNet';
$string['privacy:metadata'] = 'Il tool MoodleNet facilita la comunicazione con MoodleNet e non memorizza dati.';
$string['profilevalidationerror'] = 'Si è verificato un problema durante la validazione del profilo MoodleNet';
$string['profilevalidationfail'] = 'Per favore inserire un ID valido del profilo MoodleNet';
$string['profilevalidationpass'] = 'Sembra OK!';
$string['removedmnetprofilenotification'] = 'A causa delle recenti modifiche apportate alla piattaforma MoodleNet, tutti gli utenti che hanno precedentemente salvato il proprio ID del profilo MoodleNet sul sito dovranno inserire un ID del profilo MoodleNet nel nuovo formato per potersi autenticare sulla piattaforma MoodleNet.';
$string['removedmnetprofilenotification_subject'] = 'Modifica del formato dell\'ID del profilo MoodleNet';
$string['saveandgo'] = 'Salva e continua';
$string['searchcourses'] = 'Cerca corsi';
$string['selectpagetitle'] = 'Seleziona pagina';
$string['uploadlimitexceeded'] = 'La dimensione del file {$a->filesize} supera il limite di caricamento dell\'utente di {$a->uploadlimit} byte.';
