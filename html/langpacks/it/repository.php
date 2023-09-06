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
 * Strings for component 'repository', language 'it', version '4.1'.
 *
 * @package     repository
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'File picker accessibile';
$string['activaterep'] = 'Repository attivi';
$string['activerepository'] = 'Repository plugin disponibili';
$string['activitybackup'] = 'Backup attività';
$string['add'] = 'Aggiungi';
$string['addfile'] = 'Aggiungi...';
$string['addfiletext'] = 'Aggiungi file';
$string['addplugin'] = 'Attivazione repository plugin';
$string['aliaseschange'] = 'Ci sono {$a} collegamenti a questo file. Se procedi, le posizioni attualmente collegate al file verranno aggiornate automaticamente per utilizzare invece una copia del file.';
$string['allowexternallinks'] = 'Consenti link esterni';
$string['areacategoryintro'] = 'Introduzione alla categoria';
$string['areacourseintro'] = 'Introduzione al corso';
$string['areacourseoverviewfiles'] = 'Immagine del corso';
$string['areamainfile'] = 'File primario';
$string['arearoot'] = 'Sistema';
$string['areauserbackup'] = 'Backup utente';
$string['areauserdraft'] = 'Bozze';
$string['areauserpersonal'] = 'File personali';
$string['areauserprofile'] = 'Profilo';
$string['attachedfiles'] = 'File allegati';
$string['attachment'] = 'Allegato';
$string['author'] = 'Autore';
$string['automatedbackup'] = 'Backup automatici';
$string['back'] = 'Back';
$string['backtodraftfiles'] = 'Torna al gestore dei file draft';
$string['cachecleared'] = 'I file in cache sono stati eliminati';
$string['cacheexpire'] = 'Permanenza in cache';
$string['cannotaccessparentwin'] = 'Se si utilizza HTTPS, il repository non viene aggiornato automaticamente. Ritornare al file picker e selezionare nuovamente il repository.';
$string['cannotdelete'] = 'Non è possibile eliminare questo file.';
$string['cannotdownload'] = 'Non è possibile scaricare il file';
$string['cannotdownloaddir'] = 'Non è possibile scaricare il folder';
$string['cannotinitplugin'] = 'La chiamata plugin_init non è andata a buon fine';
$string['cannotunzipcontentunreadable'] = 'Non è possibile decomprimere il file poiché non è stato possibile leggere il contenuto.';
$string['cannotunzipextractfileerror'] = 'Non è possibile decomprimere il file poiché alcuni file al suo interno non sono leggibili.';
$string['cannotunzipquotaexceeded'] = 'Non è possibile decomprimere il file poiché supererebbero la dimensione massima di questa area bozze.';
$string['choosealink'] = 'Scegli link...';
$string['chooselicense'] = 'Seleziona la licenza';
$string['chooselicense_help'] = 'Segui questi collegamenti per ulteriori informazioni sulle opzioni di licenza disponibili:';
$string['cleancache'] = 'Elimina i miei file dalla cache';
$string['close'] = 'Chiudi';
$string['commonrepositorysettings'] = 'Impostazioni comuni repository';
$string['configallowexternallinks'] = 'Consente agli utenti di scegliere se copiare o meno in Moodle i media esterni- Se l\'impostazione è disabilitata, i media saranno sempre copiati in Moodle (cosa generalmente preferibile per sicurezza ed integrità dei dati). Se l\'impostazione è abilitata. gli utenti potranno scegliere se copiare o meno i media ogni volta che ne aggiungeranno uno ad un testo.';
$string['configcacheexpire'] = 'La permanenza in cache, espressa in secondi, degli elenchi di file ottenuti da repository esterni.';
$string['configgetfiletimeout'] = 'Il timeout in secondi per lo scaricamento di file esterni in Moodle';
$string['configsaved'] = 'Configurazione salvata!';
$string['configsyncfiletimeout'] = 'Il timeout in secondi per la sincronizzazione della dimensione di file esterni.';
$string['configsyncimagetimeout'] = 'Il timeout in secondi per lo scaricamento di immagini da repository esterni durante la sincronizzazione.';
$string['confirmdelete'] = 'Sei sicuro di eliminare il repository {$a} ?
Se scegli "Prosegui e scarica", i file esterni collegati saranno copiati in Moodle. Tieni presente che il processo può durare molto tempo.';
$string['confirmdeletefile'] = 'Sei sicuro di eliminare questo file?';
$string['confirmdeletefilewithhref'] = 'Sei sicuro di eliminare questo file? Sono presenti {$a} collegamenti al il file. Proseguendo, i collegamenti saranno convertiti in copie del file.';
$string['confirmdeletefolder'] = 'Sei sicuro di voler eliminare questa cartella? Saranno eliminati anche i file e le cartelle ivi contenute.';
$string['confirmdeleteselectedfile'] = 'Sei sicuro di voler eliminare i file selezionati?';
$string['confirmremove'] = 'Sei sicuro di voler eliminare questo repository plugin, le sue opzioni e <strong style=color:red>tutte le sue istanze</strong> - {$a}? Se scegli "Prosegui e scarica", i file esterni collegati saranno copiati in Moodle. Tieni presente che il processo può durare molto tempo.';
$string['confirmrenamefile'] = 'Sei sicuro di voler rinominare/spostare questo file?';
$string['confirmrenamefolder'] = 'Sei sicuro di rinominare/spostare questa cartella? Tutti i collegamenti ai file contenuti nella cartella saranno convertiti in copie dei file.';
$string['continueuninstall'] = 'Prosegui';
$string['continueuninstallanddownload'] = 'Prosegui e scarica';
$string['copying'] = 'Copia in corso';
$string['coursebackup'] = 'Backup corsi';
$string['create'] = 'Crea';
$string['createfolder'] = 'Crea cartella';
$string['createfolderfail'] = 'Si è verificato un errore durante la creazione della cartella';
$string['createfoldersuccess'] = 'La cartella è stata creata correttamente';
$string['createinstance'] = 'Crea una istanza di repository';
$string['createrepository'] = 'Crea una istanza di repository';
$string['createxxinstance'] = 'Crea istanza "{$a}"';
$string['date'] = 'Data';
$string['datecreated'] = 'Creato';
$string['deleted'] = 'Repository eliminato';
$string['deleterepository'] = 'Elimina questo repository';
$string['detailview'] = 'Dettagli';
$string['dimensions'] = 'Dimensioni';
$string['disabled'] = 'Disabilitato';
$string['displayasdetails'] = 'Visualizza dettagli';
$string['displayasicons'] = 'Visualizza icone';
$string['displayastree'] = 'Visualizza albero';
$string['displaydetails'] = 'Visualizza dettagli';
$string['displayicons'] = 'Visualizza icone';
$string['displaytree'] = 'Visualizza alberatura';
$string['download'] = 'Scarica';
$string['downloadallfiles'] = 'Scarica tutti i file';
$string['downloadfolder'] = 'Scarica tutto';
$string['downloadsucc'] = 'Il file è stato scaricato correttamente';
$string['draftareanofiles'] = 'Non può essere scaricato poiché non ci sono file allegati';
$string['editrepositoryinstance'] = 'Modifica il repository';
$string['emptylist'] = 'L\'elenco è vuoto';
$string['emptytype'] = 'Non è possibile creare il tipo di repository: il nome è vuoto';
$string['enablecourseinstances'] = 'I docenti sono autorizzati ad aggiungere istanze di repository nel corso';
$string['enableuserinstances'] = 'Gli utenti sono autorizzati ad aggiungere istanze di repository nel proprio contesto';
$string['enter'] = 'Entra';
$string['entername'] = 'Inserisci il nome della cartella';
$string['enternewname'] = 'Per favore insersci il nuovo nome del file';
$string['error'] = 'Si è verificato un errore sconosciuto!';
$string['errordoublereference'] = 'Non è possibile sovrascrivere il file con un collegamento poiché  per questo file un collegamento è già esistente.';
$string['errornotyourfile'] = 'Puoi prelevare solamente i file che sono stati inseriti da te.';
$string['errorpostmaxsize'] = 'Il file caricato potrebbe essere più grande di quanto consentito dalla configurazione del server.';
$string['erroruniquename'] = 'Il nome della istanza di repository deve essere unico';
$string['errorwhilecommunicatingwith'] = 'Si è verificato un errore durante la comunicazione con il repository \'{$a}\'.';
$string['errorwhiledownload'] = 'Si è verificato un errore durante lo scaricamento del file: {$a}';
$string['existingrepository'] = 'Questo repository esiste già';
$string['federatedsearch'] = 'Ricerca federata';
$string['fileexists'] = 'Il nome del file è gia stato usato, per favore usane un altro';
$string['fileexistsdialog_editor'] = 'Un file con lo stesso nome è già stato allegato al testo che stai modificando.';
$string['fileexistsdialog_filemanager'] = 'Un file con lo stesso nome è già stato allegato';
$string['fileexistsdialogheader'] = 'Il file esiste già';
$string['filename'] = 'Nome del file';
$string['filenotnull'] = 'Devi selezionare un file da caricare.';
$string['filepicker'] = 'File picker';
$string['filesaved'] = 'Il file è stato slavato';
$string['filesizenull'] = 'Non è possibile determinare la dimensione del file';
$string['folderexists'] = 'Il nome della cartella esiste già, per favore utilizza un nome diverso';
$string['foldernotfound'] = 'La cartella non è stata trovata';
$string['folderrecurse'] = 'La cartella non può diventare una sotto cartella di se stessa.';
$string['getfile'] = 'Scegli questo file';
$string['getfiletimeout'] = 'Timeout scaricamento file';
$string['help'] = 'Aiuto';
$string['iconview'] = 'Visualizza icone';
$string['imagesize'] = '{$a->width} x {$a->height} px';
$string['instance'] = 'istanza';
$string['instancedeleted'] = 'Istanza eliminata';
$string['instances'] = 'Istanze di repository';
$string['instancesforcourses'] = '{$a} Istanze condivise a livello di corso';
$string['instancesforsite'] = '{$a} Istanze condivise a livello di sito';
$string['instancesforusers'] = '{$a} Istanze private';
$string['invalidfiletype'] = 'Non è possibile accettare il tipo di file {$a}';
$string['invalidjson'] = 'Stringa JSON non valida';
$string['invalidparams'] = 'Parametri non validi';
$string['invalidplugin'] = 'Repository plugin {$a} non valido';
$string['invalidrepositoryid'] = 'Repository ID non valido';
$string['isactive'] = 'Attivo ?';
$string['keyword'] = 'Parola chiave';
$string['lastmodified'] = 'Ultima modifica';
$string['license'] = 'Licenza';
$string['linkexternal'] = 'Link esterno';
$string['listview'] = 'visualizza come elenco';
$string['loading'] = 'Caricamento in corso...';
$string['login'] = 'Login';
$string['logintoaccount'] = 'Login con l\'account {$a}';
$string['logout'] = 'Logout';
$string['lostsource'] = 'Errore. Manca il sorgente. {$a}';
$string['makefilecontrolledlink'] = 'Crea un link al file sotto controllo';
$string['makefileinternal'] = 'Copia il file';
$string['makefilelink'] = 'Collega il file esterno';
$string['makefilereference'] = 'Crea un alias/scorciatoia al file';
$string['manage'] = 'Gestione repository';
$string['manageinstances'] = 'Gestione istanze';
$string['manageurl'] = 'Gestisci';
$string['manageuserrepository'] = 'Gestisci repository individuali';
$string['missingsourcekey'] = 'Manca la chiave di origine. Questa chiave deve essere fornita anche per recuperare il file.';
$string['moving'] = 'Spostamento in corso';
$string['name'] = 'Nome';
$string['newfolder'] = 'Nuova cartella';
$string['newfoldername'] = 'Nuovo nome cartella';
$string['noenter'] = 'Non è stato inserito niente';
$string['nofilesattached'] = 'Non sono presenti file allegati';
$string['nofilesavailable'] = 'Non sono presenti file';
$string['nofilesselected'] = 'Nessun file selezionato';
$string['nolicenses'] = 'Non ci sono licenze disponibili';
$string['nomorefiles'] = 'Non sono consentiti altri allegati';
$string['nopathselected'] = 'Il percorso di destinazione non è stato specificato. (Doppio click sul nodo per selezionarlo)';
$string['nopermissiontoaccess'] = 'Non ci sono privilegi d\'accesso al repository';
$string['norepositoriesavailable'] = 'Spiacente, nessuno dei repostory disponibili può restituire file nel formato richiesto.';
$string['norepositoriesexternalavailable'] = 'Spiacente, nessuno dei repostory disponibili può restituire file esterni.';
$string['noresult'] = 'La ricerca non ha prodotto risultati';
$string['notyourinstances'] = 'Non puoi visualizzare o modificare i repository di un altro utente';
$string['off'] = 'Abilitato ma nascosto';
$string['on'] = 'Abilitato e visibile';
$string['openpicker'] = 'Scegli un file...';
$string['operation'] = 'Operazione';
$string['original'] = 'Originale';
$string['originalextensionchange'] = 'L\'estensione del file originale è stata modificata come parte della modifica del nome del file. Cambiando l\'estensione da ". {$a->originalextension}" a ". {$a->newextension}" potrebbe risultare un file che non può essere aperto.';
$string['originalextensionremove'] = 'L\'estensione del file originale è stata rimossa come parte della modifica del nome del file. È probabile che la rimozione dell\'estensione ". {$a}" produca un file che non può essere aperto.';
$string['overwrite'] = 'Sovrascrivi';
$string['overwriteall'] = 'Sovrascrivi tutti';
$string['path'] = 'Percorso';
$string['plugin'] = 'Plugin Repository';
$string['pluginerror'] = 'Si sono verificati errori nel repository plugin';
$string['pluginname'] = 'Nome plugin repository';
$string['pluginnamehelp'] = 'Non compilando questo campo, Moodle userà il nome di default.';
$string['popup'] = 'Fai click sul pulsante "Login" per autenticarti';
$string['popupblockeddownload'] = 'La finestra di download è stata bloccata, per favore abilita le finestre popup e riprova.';
$string['preview'] = 'Anteprima';
$string['privacy:metadata:repository'] = 'La componente Repository memorizza le tipologie di repository all\'interno del sottosistema core.';
$string['privacy:metadata:repository_instances'] = 'La componente plugin Repository memorizza i dati delle repository degli utenti all\'interno del sottosistema core.';
$string['privacy:metadata:repository_instances:name'] = 'Nome personalizzato del repository.';
$string['privacy:metadata:repository_instances:password'] = 'Password facoltativa configurata per il repository.';
$string['privacy:metadata:repository_instances:timecreated'] = 'Data e ora di creazione del repository.';
$string['privacy:metadata:repository_instances:timemodified'] = 'Data e ora di modifica del repository.';
$string['privacy:metadata:repository_instances:typeid'] = 'ID del repository.';
$string['privacy:metadata:repository_instances:userid'] = 'ID dell\'utente a cui appartiene il repository.';
$string['privacy:metadata:repository_instances:username'] = 'Username facoltativo configurato per il repository.';
$string['privatefilesof'] = '{$a} file personali';
$string['readonlyinstance'] = 'Non puoi modificare o eliminare un repository a sola lettura';
$string['referencesexist'] = 'Sono presenti {$a} link a questo file';
$string['referenceslist'] = 'Collegamenti';
$string['refresh'] = 'Aggiorna';
$string['refreshnonjsfilepicker'] = 'Per favore chiudete la finestra e aggiornate il file picker non-javascript';
$string['removed'] = 'Repository eliminato';
$string['renameall'] = 'Rinomina tutti';
$string['renameto'] = 'Rinomina in "{$a}"';
$string['repositories'] = 'Repository';
$string['repository'] = 'Repository';
$string['repositorycourse'] = 'Repository di corso';
$string['repositoryerror'] = 'Il repository remoto ha restituito un errore: {$a}';
$string['repositoryicon'] = 'Icona repository';
$string['save'] = 'Salva';
$string['saveas'] = 'Salva con nome';
$string['saved'] = 'Salvato';
$string['saving'] = 'Salvataggio in corso';
$string['search'] = 'Cerca';
$string['searching'] = 'Cerca in';
$string['searchrepo'] = 'Cerca nel repository';
$string['sectionbackup'] = 'Backup sezione';
$string['select'] = 'Scegli';
$string['setmainfile'] = 'Imposta il file primario';
$string['setmainfile_help'] = 'Se la cartella contiene più file, il file principale sarà quello visualizzato nella pagine e può incorporare altri file. Il file principale è evidenziato in grassetto.';
$string['settings'] = 'Impostazioni';
$string['setupdefaultplugins'] = 'Impostazione dei repository plugin di default';
$string['siteinstances'] = 'Repository attivi nel sito';
$string['size'] = 'Dimensione';
$string['sourcekeymismatch'] = 'L\'URL di origine non corrisponde alla chiave di origine.';
$string['submit'] = 'Invia';
$string['sync'] = 'Sync';
$string['syncfiletimeout'] = 'Timeout sincronizzazione file';
$string['syncimagetimeout'] = 'Timeout sincronizzazione immagini';
$string['thumbview'] = 'Vedi come icone';
$string['title'] = 'Scegli un file...';
$string['type'] = 'Tipo';
$string['typenotvisible'] = 'Tipo non visibile';
$string['undisclosedreference'] = '(Non reso noto)';
$string['undisclosedsource'] = '(Riservate)';
$string['unknownoriginal'] = 'Sconosciuto';
$string['unknownsource'] = 'Fonte sconosciuta';
$string['unzipped'] = 'Decompresso correttamentre';
$string['upload'] = 'Carica questo file';
$string['uploading'] = 'Caricamento in corso...';
$string['uploadsucc'] = 'Il file è stato caricato correttamente';
$string['uselatestfile'] = 'Usa file più recente';
$string['usenonjsfilemanager'] = 'Apri il file manager in una nuova finestra';
$string['usenonjsfilepicker'] = 'Apri il file picker in una nuova finestra';
$string['usercontextrepositorydisabled'] = 'Nel contesto utente non puoi modificare questo repository';
$string['wrongcontext'] = 'Non puoi accedere a questo contesto';
$string['xhtmlerror'] = 'Probabilmente stai usando header XHTML strict, con i quali alcune componenti YUI non funzionano correttamente. Per favore disabilita le componenti.';
$string['ziped'] = 'La cartella è stata compressa correttamente';
