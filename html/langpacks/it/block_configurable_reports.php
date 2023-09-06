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
 * Strings for component 'block_configurable_reports', language 'it', version '4.1'.
 *
 * @package     block_configurable_reports
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Attività di partecipazione';
$string['activityview'] = 'Attività di visualizzazione';
$string['addreport'] = 'Aggiungi report';
$string['anyone'] = 'Chiunque';
$string['anyone_summary'] = 'Qualsiasi utente potrà visualizzare questo report';
$string['availablemarks'] = 'Segnaposto disponibili';
$string['average'] = 'Media';
$string['badconditionexpr'] = 'L\'espressione nella condizione non è corretta';
$string['badsize'] = 'La dimensione è errata, deve essere espressa in % oppure in pixel';
$string['badtablewidth'] = 'La larghezza è errata, deve essere espressa in % oppure in pixel';
$string['bar'] = 'Barre';
$string['barsummary'] = 'Un grafico a barre';
$string['blockname'] = 'Report configurabili';
$string['calcs'] = 'Calcoli';
$string['categories'] = 'Categorie';
$string['categoryfield'] = 'Campo categoria';
$string['categoryfieldorder'] = 'Ordine del campo categoria';
$string['ccoursefield'] = 'Condizione sul campo corso';
$string['cellalign'] = 'Allineamento cella';
$string['cellsize'] = 'Dimensione cella';
$string['cellwrap'] = 'Testo nella cella';
$string['column'] = 'Colonna';
$string['columnandcellproperties'] = 'Proprietà della colonna e della cella';
$string['columncalculations'] = 'Calcoli della colonna';
$string['columns'] = 'Colonne';
$string['comp_calcs'] = 'Calcoli';
$string['comp_calcs_help'] = '<p>Consente di impostare i calcoli per le colonne, come ad esempio il numero medio degli iscritti ai corsi</p>

<p>Ulteriori informazioni: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentazione del plugin</a></p>';
$string['comp_calculations'] = 'Calcoli';
$string['comp_calculations_help'] = '<p>E\' possibile aggiungere calcoli per le colonne, come ad esempio il numero medio degli iscritti ai corsi</p>';
$string['comp_columns'] = 'Colonne';
$string['comp_columns_help'] = '<p>Consente di impostare colonne differenti in base al tipo di report</p>

<p>Ulteriori informazioni: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentazione del plugin</a></p>';
$string['comp_conditions'] = 'Condizioni';
$string['comp_conditions_help'] = '<p>Consente di impostare le condizioni (ad esempio solo i corsi di una data categoria, solo gli utenti dalla Spagna, ecc.)</p>

<p>È anche possibile aggiungere un\'espressione logica se si utilizza più di una condizione.</p>

<p>Ulteriori informazioni: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentazione del plugin</a></p>';
$string['comp_customsql'] = 'SQL personalizzato';
$string['comp_customsql_help'] = '<p>Consente di aggiungere una query SQL. Non utilizzare il prefisso delle tabelle del database moodle $CFG->prefix, utilizzare invece "prefix_"  senza virgolette</p>
<p>Esempio: SELECT * FROM prefix_course</p>

<p>Sono disponibili numerosi report SQL: <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">report ad-hoc dalla community</a></p>

<p>Poiché il blocco supporta il CustomSQL Queries Report di Tim Hunt, è possibile utilizzare anche questo tipo di query.</p>

<p>Ricordare di aggiungere un "Filtro temporale" se si desidera utilizzare i report che includono indicazioni temporali. </p>

<p>Ulteriori informazioni sull\'utilizzo dei filtri: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Tutorial: creare un report SQL</a></p>';
$string['comp_filters'] = 'Filtri';
$string['comp_filters_help'] = '<p>Consente di impostare i filtri da visualizzare</p>

<p>Un filtro consente di selezionare le colonne del report per filtrare i risultati</p>

<p>Per utilizzare i filtri se il report è di tipo SQL: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Tutorial: Creare un report SQL </a></p>

<p>Ulteriori informazioni: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentazione del plugin</a></p>';
$string['comp_ordering'] = 'Ordinamento';
$string['comp_ordering_help'] = '<p>Consente di impostare come ordinare il report utilizzando i campi e le direzioni</p>

<p>Ulteriori informazioni: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentazione del plugin</a></p>';
$string['comp_permissions'] = 'Permessi';
$string['comp_permissions_help'] = '<p>Consente di impostare chi può visualizzare un report.</p>

<p>È possibile aggiungere un\'espressione logica per determinare il permesso finale se si sta utilizzando più di una condizione.</p>

<p>Ulteriori informazioni: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentazione del plugin</a></p>';
$string['comp_plot'] = 'Grafico';
$string['comp_plot_help'] = '<p>Consente aggiungere grafici al report basandosi sui valori presenti nelle colonne del report</p>

<p>Ulteriori informazioni: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentazione del plugin</a></p>';
$string['comp_template'] = 'Modello';
$string['comp_template_help'] = '<p>Consente di modificare il layout del report creando un modello</p>

<p>Per creare un modello sono disponibili segnaposto utilizzabili  nell\'intestazione, nel piè pagina e nel report. Approfondisci i segnaposto  utilizzando i pulsanti di aiuto o le informazioni disponibili nella pagina.</p>

<p>Ulteriori informazioni: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentazione del plugin</a></p>';
$string['componenthelp'] = 'Aiuto sul componente';
$string['conditionexpr'] = 'Condizione';
$string['conditionexpr_conditions'] = 'Condizione';
$string['conditionexpr_conditions_help'] = '<p>E\' possibile combinare condizioni usando espressioni logiche</p>

<p>Inserire un\'espressione logica valida usando gli operatori AND e OR.</p>';
$string['conditionexpr_permissions'] = 'Condizione';
$string['conditionexpr_permissions_help'] = '<p>E\' possibile combinare condizioni usando espressioni logiche</p>

<p>Inserire un\'espressione logica valida usando gli operatori AND e OR.</p>';
$string['conditionexprhelp'] = 'Inserire una condizione valida. Ad esempio (c1 and c2) or (c4 and c3)';
$string['conditions'] = 'Condizioni';
$string['configurable_reports:addinstance'] = 'Aggiungere blocco Report configurabili';
$string['configurable_reports:manageownreports'] = 'Gestire i propri report';
$string['configurable_reports:managereports'] = 'Gestire i report';
$string['configurable_reports:managesqlreports'] = 'Gestire i report SQL';
$string['configurable_reports:myaddinstance'] = 'Aggiungere blocco Report configurabil nella pagina My home';
$string['configurable_reports:viewreports'] = 'Visualizzare i report';
$string['confirmdeletereport'] = 'Sei sicuro di eliminare questo report?';
$string['coursecategories'] = 'Filtra per categoria di corso';
$string['coursecategory'] = 'Corso nella categoria';
$string['coursechild'] = 'Corsi che sono figli di';
$string['coursededicationtime'] = 'Tempo speso nel corso';
$string['coursefield'] = 'Campo corso';
$string['coursefieldorder'] = 'Ordinamento del campo corso';
$string['coursemodules'] = 'Modulo del corso';
$string['courseparent'] = 'Corsi il cui genitore è';
$string['courses'] = 'Corsi';
$string['coursestats'] = 'Statistiche del corso';
$string['cron'] = 'Esegui automaticamente ogni giorno';
$string['cron_help'] = 'Pianifica l\'esecuzione quotidiana di questa query durante la notte';
$string['crondescription'] = 'Pianifica l\'esecuzione quotidiana di questa query durante la notte';
$string['crrepository'] = 'Repository dei report';
$string['crrepositoryinfo'] = 'Repository remoto condiviso contenente esempi di report funzionanti';
$string['currentreportcourse'] = 'Report del corso in uso';
$string['currentreportcourse_summary'] = 'Il corso nel quale è stato creato il report';
$string['currentuser'] = 'Utente che visualizza il report';
$string['currentuser_summary'] = 'L\'utente che visualizza il report';
$string['currentusercourses'] = 'Corsi nei quali è iscritto l\'utente che visualizza il report';
$string['currentusercourses_summary'] = 'Un elenco dei corsi visibili all\'utente che visualizza il report';
$string['currentuserfinalgrade'] = 'Valutazione finale del corso dell\'utente che visualizza il report';
$string['currentuserfinalgrade_summary'] = 'La colonna visualizza la valutazione finale dell\'utente nella riga-corso';
$string['cuserfield'] = 'Condizione sul campo utente';
$string['custom'] = 'Personalizzato';
$string['customdateformat'] = 'Formato data personalizzato';
$string['customsql'] = 'SQL personalizzato';
$string['datatables'] = 'Abilita la libreria JS DataTables';
$string['datatables_emptytable'] = 'Nessun dato disponibile nella tabella';
$string['datatables_first'] = 'Primo';
$string['datatables_info'] = 'Visualizzazione da _START_ a _END_ di _TOTAL_ record';
$string['datatables_infoempty'] = 'Visualizzazione da 0 a 0 di 0 record';
$string['datatables_infofiltered'] = '(filtrati da _MAX_ record totali)';
$string['datatables_last'] = 'Ultimo';
$string['datatables_lengthmenu'] = 'Visualizza _MENU_ record';
$string['datatables_loadingrecords'] = 'Caricamento in corso...';
$string['datatables_next'] = 'Prossimo';
$string['datatables_previous'] = 'Precedente';
$string['datatables_processing'] = 'Elaborazione in corso...';
$string['datatables_search'] = 'Cerca:';
$string['datatablesinfo'] = 'Libreria JS DataTables (ordinamento colonna, intestazione fissa, ricerca, paginazione, ...)';
$string['date'] = 'Data';
$string['dateformat'] = 'Formato della data';
$string['dbhost'] = 'Host DB';
$string['dbhostinfo'] = 'Nome dell\'host del database remoto (nel quale verranno eseguite le query SQL)';
$string['dbname'] = 'Nome DB';
$string['dbnameinfo'] = 'Nome del database remoto (nel quale verranno eseguite le query SQL)';
$string['dbpass'] = 'Password del DB';
$string['dbpassinfo'] = 'Password del database remoto (dell\'utente indicato sopra)';
$string['dbuser'] = 'Nome utente DB';
$string['dbuserinfo'] = 'Nome utente database remoto (deve avere i privilegi di SELECT nel DB indicato sopra)';
$string['direction'] = 'Direzione';
$string['disabled'] = 'Disabilitato';
$string['displayglobalreports'] = 'Visualizza report globali';
$string['displayreportslist'] = 'Visualizza report nel corpo del blocco';
$string['donotshowtime'] = 'Non visualizzare le informazioni sulla data';
$string['download'] = 'Scarica';
$string['downloadreport'] = 'Scarica il report';
$string['email_message'] = 'Messaggio';
$string['email_send'] = 'Invia';
$string['email_subject'] = 'Oggetto';
$string['enabled'] = 'Abilitato';
$string['enableglobal'] = 'Report globale accessibile da qualsiasi corso';
$string['enablejsordering'] = 'Abilita ordinamento JavaScript';
$string['enablejspagination'] = 'Abilita paginazione JavaScript';
$string['endtime'] = 'Data di fine';
$string['enrolledstudents'] = 'Studenti iscritti';
$string['error_field'] = 'Campo non consentito';
$string['error_operator'] = 'Operatore non consentito';
$string['error_value_expected_integer'] = 'Era atteso un valore intero';
$string['executeat'] = 'Esegui alle';
$string['executeatinfo'] = 'Il cron di Moodle eseguirà quotidianamente le query SQL pianificate dopo l\'orario indicato';
$string['export_csv'] = 'Esporta in formato CSV';
$string['export_ods'] = 'Esporta in formato ODS';
$string['export_xls'] = 'Esporta in formato XLS';
$string['exportoptions'] = 'Opzioni di esportazione';
$string['exportreport'] = 'Formato di esportazione';
$string['fcoursefield'] = 'Filtra per campo corso';
$string['field'] = 'Campo';
$string['filter'] = 'Filtro';
$string['filter_all'] = 'Tutti';
$string['filter_apply'] = 'Applica';
$string['filter_searchtext'] = 'Testo da cercare';
$string['filter_searchtext_summary'] = 'Filtra per testo libero';
$string['filtercategories'] = 'Filtra categorie';
$string['filtercategories_summary'] = 'Filtraggio per categoria';
$string['filtercoursecategories'] = 'Filtra per il campo categoria';
$string['filtercoursecategories_summary'] = 'Filtra i corsi per qualsiasi categoria superiore d\'appartenenza';
$string['filtercoursemodules'] = 'Modulo del corso';
$string['filtercoursemodules_summary'] = 'Filtra per modulo del corso';
$string['filtercourses'] = 'Corsi';
$string['filtercourses_summary'] = 'Questo filtro visualizza un elenco di corsi. Può essere selezionato solamente un corso per volta';
$string['filterenrolledstudents'] = 'Studenti iscritti al corso';
$string['filterenrolledstudents_summary'] = 'Filtra un utente (per id) dagli iscritti al corso';
$string['filterrole'] = 'ruolo';
$string['filterrole_summary'] = 'Filtra per ruolo di sistema (Docente, Studente, ...)';
$string['filters'] = 'Filtri';
$string['filtersemester'] = 'Semestre (Ebraico)';
$string['filterstartendtime_summary'] = 'Filtra per data Inizio / Fine';
$string['filtersubcategories'] = 'Categoria (include le sotto categorie)';
$string['filtersubcategories_summary'] = 'Usa: FILTER_CATEGORIES %%: %% mdl_course_category.path';
$string['filteruser'] = 'Corso in uso dall\'utente';
$string['filteruser_summary'] = 'Filtra un utente (per id) dagli utenti del corso in uso';
$string['filterusers'] = 'Utente di sistema';
$string['filterusers_summary'] = 'Filtra un utente (per id) dall\'elenco degli utenti di sistema';
$string['filteryearhebrew'] = 'Anno (Ebraico)';
$string['filteryearhebrew_summary'] = 'Il filtro sta utilizzando gli anni Ebraici (תשעג,...)';
$string['filteryearnumeric'] = 'Anno (Numerico)';
$string['filteryearnumeric_summary'] = 'Il filtro sta utilizzando gli anni numerici (2013, ...)';
$string['filteryears'] = 'Anno (numerico)';
$string['filteryears_list'] = '2010,2011,2012,2013,2014,2015';
$string['filteryears_summary'] = 'Filtra per anno (rappresentazione numerica, 2012, ...)';
$string['finalgradeincurrentcourse'] = 'Valutazione finale nel corso in uso';
$string['fixeddate'] = 'Data fissa';
$string['footer'] = 'Piè di pagina';
$string['forcemidnight'] = 'Forza la mezzanotte';
$string['fuserfield'] = 'Filtra per campo utente';
$string['global'] = 'Report globale';
$string['global_help'] = 'I report globali sono accessibili da qualsiasi corso posponendo il suffisso &courseid=ID_DEL_CORSO nell\'URL del report';
$string['globalstatsshouldbeenabled'] = 'Le statistiche del sito devono essere abilitate. Per abilitarle, recati in Amministrazione del sito -> Funzionalità avanzate';
$string['groupseries'] = 'Raggruppa serie';
$string['groupvalues'] = 'Raggruppa valori uguali (somma)';
$string['header'] = 'Intestazione';
$string['importfromrepository'] = 'Importa report dal repository';
$string['importreport'] = 'Importa report';
$string['includesubcats'] = 'Includi sottocategorie';
$string['jsordering'] = 'Ordinamento JavaScript';
$string['jsordering_help'] = 'L\'ordinamento JavaScript consente di ordinare la tabella del report senza ricaricare la pagina';
$string['lastexecutiontime'] = 'Tempo di esecuzione = {$a} (Sec)';
$string['legacylognotenabled'] = 'Il log legacy deve essere abilitato. Per abilitarlo, recati in Amministrazione del sito -> Plugin -> Logging -> Log legacy e spunta l\'impostazione Registra nel log legacy.';
$string['line'] = 'Grafico a linee';
$string['linesummary'] = 'Un grafico a linee con più serie di dati';
$string['listofsqlreports'] = 'Per attivare l\'editing a schermo intero, premere F11 quando il cursore è all\'interno dell\'editor. Per uscire dalla modalità a schermo intero, premere Esc.<br/><br/><a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">Elenco dei report SQL</a>';
$string['managereports'] = 'Gestione report';
$string['max'] = 'Massimo';
$string['min'] = 'Minimo';
$string['missingcolumn'] = 'È richiesta una colonna';
$string['module'] = 'Modulo';
$string['newreport'] = 'Nuovo report';
$string['nocalcsyet'] = 'Al momento non ci sono calcoli';
$string['nocolumnsyet'] = 'Al momento non ci sono colonne';
$string['noconditionsyet'] = 'Al momento non ci sono condizioni';
$string['noexplicitprefix'] = 'Non ci sono prefissi espliciti';
$string['nofiltersyet'] = 'Al momento non ci sono filtri';
$string['nofilteryet'] = 'Al momento non ci sono filtri';
$string['noorderingyet'] = 'Al momento non ci sono ordinamenti';
$string['nopermissionsyet'] = 'Al momento non ci sono autorizzazioni';
$string['noplotyet'] = 'Al momento non sono presenti grafici';
$string['norecordsfound'] = 'Non è stato trovato nessun record';
$string['noreportsavailable'] = 'Non è disponibile nessun report';
$string['norowsreturned'] = 'Non è stata restituita nessuna riga';
$string['nosemicolon'] = 'Non ci sono virgole';
$string['notallowedwords'] = 'Parole non consentite';
$string['operator'] = 'Operatore';
$string['ordering'] = 'Ordinamento';
$string['pagination'] = 'Paginazione';
$string['pagination_help'] = 'Numero di record visualizzati in ciascuna pagina. Impostare a zero per  nessuna paginazione';
$string['parentcategory'] = 'Categoria superiore';
$string['permissions'] = 'Autorizzazioni';
$string['pie'] = 'Torta';
$string['pieareaname'] = 'Nome';
$string['pieareavalue'] = 'Valore';
$string['piesummary'] = 'Un grafico a torta';
$string['plot'] = 'Grafici';
$string['pluginname'] = 'Report configurabili';
$string['previousdays'] = 'Giorni precedenti';
$string['previousend'] = 'Fine precedente';
$string['previousstart'] = 'Inizio precedente';
$string['printreport'] = 'Stampa report';
$string['puserfield'] = 'Valore del campo utente';
$string['puserfield_summary'] = 'Utente con il valore selezionato nel campo selezionato';
$string['queryfailed'] = 'Query non riuscita';
$string['querysql'] = 'Query SQL';
$string['remote'] = 'Esegui in un DB remoto';
$string['remote_help'] = 'La query verrà eseguita in un DB remoto';
$string['remotedescription'] = 'La query verrà eseguita in un DB remoto';
$string['remotequerysql'] = 'Query SQL';
$string['report'] = 'Report';
$string['report_categories'] = 'Report di categoria';
$string['report_courses'] = 'Report di corso';
$string['report_sql'] = 'Report SQL';
$string['report_timeline'] = 'Report Timeline';
$string['report_users'] = 'Report utenti';
$string['reportcategories'] = '1) Scegli una categoria di report remoti';
$string['reportcolumn'] = 'Altra colonna del report';
$string['reportcreated'] = 'Report creato correttamente';
$string['reportlimit'] = 'Limite di righe del report';
$string['reportlimitinfo'] = 'Limita il numero massimo di righe visualizzate nella tabella del report (per default sono 5.000 righe. È preferibile impostare un limite in modo che gli utenti non sovraccarichino il DB)';
$string['reports'] = 'Report';
$string['reportscapabilities'] = 'Privilegi dei report';
$string['reportscapabilities_summary'] = 'Utenti con il privilegio moodle/site:viewreports abilitato';
$string['reportsincategory'] = '2) Scegli un report';
$string['reporttable'] = 'Tabella del report';
$string['reporttable_help'] = '<p>La larghezza della tabella contenente i record del report.</p>

<p>Se utilizzi un modello, questa opzione non avrà effetto</p>';
$string['reporttableui'] = 'UI della tabella del report';
$string['reporttableuiinfo'] = 'Visualizza la tabella del report come: tabella HTML semplice, jQuery con ordinamento per colonna oppure libreria JS DataTables (ordinamento per colonna, intestazione fissa, ricerca, paginazione...)';
$string['repository'] = 'Repository dei report';
$string['repository_help'] = 'È possibile importare report di esempio da un repository pubblico.

Da notare che esiste un limite giornaliero alle richieste effettuabili verso il repository .

Se la connessione al repository non è disponibile è possibile scaricare manualmente un report recandosi su <a href="https://github.com/jleyva/moodle-configurable_reports_repository" target="_blank">https://github.com/jleyva/moodle-configurable_reports_repository</a>  e poi importandolo tramite la funzione "Importa report" visualizzata sotto.';
$string['role'] = 'Ruolo';
$string['roleincourse'] = 'Utente con il ruolo/ruoli selezionato nell\'attuale report di corso';
$string['roleusersn'] = 'Numero utenti con ruolo...';
$string['searchtext'] = 'Cerca testo';
$string['semester'] = 'Semestre (Ebraico)';
$string['serieid'] = 'Serie colonna';
$string['setcourseid'] = 'Imposta il courseid';
$string['sharedsqlrepository'] = 'Repository SQL condiviso';
$string['sharedsqlrepositoryinfo'] = 'Nome del proprietario dell\'account GitHub + slash + nome del repository';
$string['sqlsecurity'] = 'Sicurezza SQL';
$string['sqlsecurityinfo'] = 'Disabilitare per eseguire query SQL che prevedano l\'inserimento di dati (Nome del proprietario dell\'account GitHub + slash + nome del deposito)';
$string['sqlsyntaxhighlight'] = 'Evidenzia sintassi SQL';
$string['sqlsyntaxhighlightinfo'] = 'Evidenzia sintassi SQL nell\'editor di codice (libreria CodeMirror JS)';
$string['startendtime'] = 'Filtra per data Inizio / Fine';
$string['starttime'] = 'Data inizio';
$string['stat'] = 'Statistiche';
$string['statsactiveenrolments'] = 'Iscrizioni attive (ultima settimana)';
$string['statslogins'] = 'Autenticazioni nella piattaforma';
$string['statstotalenrolments'] = 'Totale iscrizioni';
$string['student'] = 'Studente';
$string['subcategories'] = 'Categoria (incluse le sottocategorie)';
$string['sum'] = 'Somma';
$string['tablealign'] = 'Allineamento della tabella';
$string['tablecellpadding'] = 'Padding cella della tabella';
$string['tablecellspacing'] = 'Spacing cella della tabella';
$string['tableclass'] = 'Classe della tabella';
$string['tablewidth'] = 'Larghezza della tabella';
$string['template'] = 'Modello';
$string['template_marks'] = 'Segnaposto per i modelli';
$string['template_marks_help'] = '<p>È possibile utilizzare i seguenti segnaposto:</p>

<ul>
<li>##reportname## - Include il nome del report</li>
<li>##reportsummary## - Include la descrizione del report</li>
<li>##graphs## - Include grafici</li>
<li>##exportoptions## - Includere le opzioni di esportazione</li>
<li>##calculationstable## - Includere le tabelle di calcolo</li>
<li>##pagination## - Include la paginazione</li>
</ul>';
$string['templaterecord'] = 'Modello per il record';
$string['timeinterval'] = 'Intervallo di tempo';
$string['timeline'] = 'Timeline';
$string['timemode'] = 'Modalità temporale';
$string['totalrecords'] = 'Record totali = {$a->totalrecords}';
$string['type'] = 'Tipo di report';
$string['typeofreport'] = 'Tipo di report';
$string['typeofreport_help'] = 'Il tipo di report da creare. Per motivi di sicurezza i report SQL richiedono un privilegio aggiuntivo';
$string['user'] = 'Utente del corso (id)';
$string['usercompletion'] = 'Stato di completamento del corso per l\'utente';
$string['usercompletionsummary'] = 'Stato di completamento del corso';
$string['userfield'] = 'Campo profilo utente';
$string['userfieldorder'] = 'Ordinamento per campo dell\'utente';
$string['usermodactions'] = 'Azioni utente del modulo';
$string['usermodoutline'] = 'Statistiche utente del modulo';
$string['users'] = 'Utente di sistema (id)';
$string['usersincohorts'] = 'Utenti che appartengono a uno o più gruppi globali';
$string['usersincohorts_summary'] = 'Solo gli utenti che appartengono ai gruppi globali selezionati';
$string['usersincoursereport'] = 'Qualsiasi utente nel report del corso in uso';
$string['usersincoursereport_summary'] = 'Qualsiasi utente nel report del corso in uso';
$string['usersincurrentcourse'] = 'Utenti nel report del corso in uso';
$string['usersincurrentcourse_summary'] = 'Utenti con il ruolo/ruoli selezionati nel report di corso';
$string['userstats'] = 'Statistiche dell\'utente';
$string['value'] = 'Valore';
$string['viewreport'] = 'Visualizza report';
$string['xaxis'] = 'Asse X';
$string['yaxis'] = 'Asse Y';
$string['yearhebrew'] = 'Anno (Ebraico)';
$string['yearnumeric'] = 'Anno (Numerico)';
$string['years'] = 'Anno (Numerico)';
$string['youmustselectarole'] = 'È richiesto almeno un ruolo';
