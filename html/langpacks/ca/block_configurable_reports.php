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
 * Strings for component 'block_configurable_reports', language 'ca', version '4.4'.
 *
 * @package     block_configurable_reports
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Publicacions d\'activitat';
$string['activityview'] = 'Vistes d\'activitat';
$string['add'] = 'Afegeix';
$string['addreport'] = 'Afegeix un informe';
$string['anyone'] = 'Qualsevol';
$string['anyone_summary'] = 'Qualsevol usuari del campus podrà visualitzar aquest informe';
$string['availablemarks'] = 'Qualificacions disponibles';
$string['average'] = 'Mitjana';
$string['badconditionexpr'] = 'Expressió de condició incorrecta';
$string['badsize'] = 'Mida incorrecta, ha de ser en percentatge (%) o píxels (px)';
$string['badtablewidth'] = 'Amplada incorrecta, ha de ser en percentatge (%) o valor absolut';
$string['bar'] = 'Barra';
$string['barsummary'] = 'Diagrama de barres';
$string['blockname'] = 'Informes configurables';
$string['calcs'] = 'Càlculs';
$string['categories'] = 'Categories';
$string['categoryfield'] = 'Camp de categoria';
$string['categoryfieldorder'] = 'Ordre dels camps de categoria';
$string['ccoursefield'] = 'Condició del camp del curs';
$string['cellalign'] = 'Alineació de la cel·la';
$string['cellsize'] = 'Mida de la cel·la';
$string['cellwrap'] = 'Ajustament de la cel·la';
$string['column'] = 'Columna';
$string['columnandcellproperties'] = 'Propietats de les columnes i les cel·les';
$string['columncalculations'] = 'Càlculs de columna';
$string['columns'] = 'Columnes';
$string['comp_calcs'] = 'Calculadores';
$string['comp_calcs_help'] = '<p>Aquí podeu afegir càlculs per columnes. Per exemple: mitjana d\'usuaris matriculats als cursos</p>

<p>Més ajuda: <a href="http://docs.moodle.org/ca/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_calculations'] = 'Calculadores';
$string['comp_calculations_help'] = '<p>Aquí podeu afegir càlculs per columnes. Per exemple: mitjana d\'usuaris matriculats als cursos</p>';
$string['comp_columns'] = 'Columnes';
$string['comp_columns_help'] = '<p>Aquí podeu triar les diferents columnes de l\'informe segons el tipus d\'informe</p>

<p>Per a més ajuda, podeu consultar: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">documentació del connector</a></p>';
$string['comp_conditions'] = 'Condicions';
$string['comp_conditions_help'] = '<p>Aquí podeu definir les condicions (és a dir, només cursos d\'aquesta categoria, només usuaris d\'Espanya, etc.).</p>

<p>Podeu afegir-hi una expressió lògica, si feu servir més d\'una condició.</p>

<p>Per a més ajuda, podeu consultar: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">documentació del connector</a></p>';
$string['comp_customsql'] = 'Consulta SQL personalitzada';
$string['comp_customsql_help'] = '<p>Afegeix una consulta SQL operativa. No s\'ha de fer servir el prefix de la base de dades moodle $CFG-> prefix; en lloc d\'això, s\'ha d\'usar «prefix_» sense cometes</ p>
<p>Exemple: SELECT * FROM prefix_course</p>

<p>Podeu trobar molts informes SQL aquí: <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank"> contribucions d\'informes ad-hoc</a></p>

<p>Un disseny actualitzat de les taules de Moodle i les seves relacions interconnectades: <a href="https://docs.moodle.org/dev/Database_Schema" target="_blank"> Esquema de bases de dades</a></p>

<p>Com que aquest bloc admet els informes de Consultes CustomSQL de Tim Hunt (Tim Hunt\'s CustomSQL Reports), podeu utilitzar qualsevol consulta.</p>

<p>Recordeu afegir-hi un «filtre de temps» (<i>«Time filter»</i>) si voleu utilitzar informes amb testimonis (<i>tokens</i>) temporals.</p>

<p>Per utilitzar els filtres, consulteu: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank"> Creació d\'un tutorial d\'informes SQL</a></p>';
$string['comp_filters'] = 'Filtres';
$string['comp_filters_help'] = '<p>Aquí podeu escollir quins filtres es mostraran</p>

<p>Un filtre permet que un usuari triï columnes de l\'informe per filtrar els resultats de l\'informe</p>

<p>Per utilitzar filtres, si el vostre tipus d\'informe és SQL, consulteu: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank"> Creació d\'un tutorial d\'informe SQL</a></p>

<p>Més ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank"> documentació del connector</a></p>';
$string['comp_ordering'] = 'Petició';
$string['comp_ordering_help'] = '<p>Aquí podeu triar com sol·licitar l\'informe mitjançant camps i adreces</p>

<p>Més ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank"> documentació del connector</a></p>';
$string['comp_permissions'] = 'Permisos';
$string['comp_permissions_help'] = '<p>Aquí podeu triar qui pot veure un informe.</p>

<p>Podeu afegir-hi una expressió lògica per calcular el permís final, si feu servir més d\'una condició.</p>

<p>Més ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank"> documentació del connector</a></p>';
$string['comp_plot'] = 'Argument';
$string['comp_plot_help'] = '<p>Aquí podeu afegir gràfics a l\'informe segons les columnes i els valors de l\'informe</p>

<p>Més ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank"> documentació del connector</a></p>';
$string['comp_template'] = 'Plantilla';
$string['comp_template_help'] = '<p>Podeu modificar el disseny de l\'informe creant una plantilla</p>

<p>Per crear una plantilla, vegeu les marques de reemplaçament que podeu utilitzar a la capçalera, el peu de pàgina i per a cada registre de l\'informe mitjançant els botons d\'ajuda o la informació que es mostra a la mateixa pàgina.</p>

<p>Més ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank"> documentació del connector</a></p>';
$string['componenthelp'] = 'Ajuda del component';
$string['conditionexpr'] = 'Condició';
$string['conditionexpr_conditions'] = 'Condició';
$string['conditionexpr_conditions_help'] = '<p>Podeu combinar condicions emprant una expressió lògica</p>

<p>Introduïu una expressió lògica vàlida amb aquests operadors: and, or (i, o).</p>';
$string['conditionexpr_permissions'] = 'Condició';
$string['conditionexpr_permissions_help'] = '<p>Podeu combinar condicions emprant una expressió lògica</p>

<p>Introduïu una expressió lògica vàlida amb aquests operadors: and, or (i, o).</p>';
$string['conditionexprhelp'] = 'Introduïu una condició vàlida, p. ex.: (c1 and c2) or (c4 and c3)';
$string['conditions'] = 'Condicions';
$string['configurable_reports:addinstance'] = 'Afegeix un bloc d\'informes configurables nou';
$string['configurable_reports:manageownreports'] = 'Gestiona els informes propis';
$string['configurable_reports:managereports'] = 'Gestiona els informes';
$string['configurable_reports:managesqlreports'] = 'Gestiona els informes SQL';
$string['configurable_reports:myaddinstance'] = 'Afegeix un bloc d\'informes configurable nou a la meva pàgina d\'INICI';
$string['configurable_reports:viewreports'] = 'Visualitza els informes';
$string['confirmdeletereport'] = 'Confirmeu que voleu suprimir aquest informe?';
$string['coursecategories'] = 'Filtre de curs per categoria';
$string['coursecategory'] = 'Curs a la categoria';
$string['coursechild'] = 'Cursos fills de';
$string['coursededicationtime'] = 'Temps de dedicació al curs';
$string['coursefield'] = 'Camp del curs';
$string['coursefieldorder'] = 'Ordre del camp del curs';
$string['coursemodules'] = 'Mòdul del curs';
$string['courseparent'] = 'Cursos el pare dels quals és';
$string['courses'] = 'Cursos';
$string['coursestats'] = 'Estadístiques del curs';
$string['cron'] = 'S\'executa diàriament de manera automàtica';
$string['cron_help'] = 'Programa aquesta consulta per executar-la cada dia (a la nit)';
$string['crondescription'] = 'Programa aquesta consulta per executar-la cada dia (a la nit)';
$string['crrepository'] = 'Repositori d\'informes';
$string['crrepositoryinfo'] = 'Dipòsit compartit remot amb informes d\'exemple completament funcionals (Nom del propietari del compte de GitHub + barra inclinada + nom del repositori)';
$string['currentreportcourse'] = 'Informe del curs actual';
$string['currentreportcourse_summary'] = 'El curs on s\'ha creat l\'informe';
$string['currentuser'] = 'Usuari actual';
$string['currentuser_summary'] = 'L\'usuari que està veient l\'informe';
$string['currentusercourses'] = 'Cursos en els quals està inscrit l\'usuari actual';
$string['currentusercourses_summary'] = 'Una llista dels cursos d\'usuaris actuals (només cursos visibles)';
$string['currentuserfinalgrade'] = 'Nota final de l\'usuari actual al curs';
$string['currentuserfinalgrade_summary'] = 'Aquesta columna mostra la nota final de l\'usuari a la fila del curs';
$string['cuserfield'] = 'Condició del camp d\'usuari';
$string['custom'] = 'Personalitza';
$string['customdateformat'] = 'Format de data personalitzat';
$string['customsql'] = 'SQL personalitzada';
$string['datatables'] = 'Habilita la llibreria DataTables JS';
$string['datatables_emptytable'] = 'No hi ha cap dada disponible a la taula';
$string['datatables_first'] = 'Primer';
$string['datatables_infoempty'] = 'S\'estan mostrant 0 a 0 de 0 entrades';
$string['datatables_infofiltered'] = '(filtrat des de _MAX_ entrades totals)';
$string['datatables_last'] = 'Última';
$string['datatables_lengthmenu'] = 'Mostra les entrades de _MENU_';
$string['datatables_loadingrecords'] = 'S\'està carregant...';
$string['datatables_next'] = 'Següent';
$string['datatables_previous'] = 'Anterior';
$string['datatables_processing'] = 'S\'està processant...';
$string['datatables_search'] = 'Cerca:';
$string['datatables_sortascending'] = ': activa per ordenar la columna en sentit ascendent';
$string['datatables_sortdescending'] = ': activa per ordenar la columna en sentit descendent';
$string['datatables_zerorecords'] = 'No s\'ha trobat cap registre que coincideixi amb la cerca';
$string['datatablesinfo'] = 'DataTables JS library (classe de columna, encapçalament fix, cerca, paginació...)';
$string['date'] = 'Data';
$string['dateformat'] = 'Format de la data';
$string['dbhost'] = 'Servidor de la base de dades (DB Host)';
$string['dbhostinfo'] = 'Nom del servidor de base de dades remot (en el qual executarem les nostres consultes SQL)';
$string['dbname'] = 'Nom de la base de dades (DB)';
$string['dbnameinfo'] = 'Nom de la base de dades remota (en la qual executarem les nostres consultes SQL)';
$string['dbpass'] = 'Contrasenya de la base de dades (DB)';
$string['dbpassinfo'] = 'Contrasenya remota de la base de dades (per al nom d\'usuari anterior)';
$string['dbuser'] = 'Nom d\'usuari de la base de dades (DB Username)';
$string['dbuserinfo'] = 'Nom d\'usuari de la base de dades remota (hauria de tenir privilegis SELECCIONATS a la base de dades anterior (<i>above DB</i>))';
$string['decimals'] = 'Nombre de decimals';
$string['direction'] = 'Direcció';
$string['disabled'] = 'Inhabilitat';
$string['displayglobalreports'] = 'Mostra els informes globals';
$string['displayreportslist'] = 'Mostra la llista d\'informes al cos del bloc';
$string['donotshowtime'] = 'No mostris informació de la data';
$string['download'] = 'Descarrega';
$string['downloadreport'] = 'Descarrega l\'informe';
$string['email_message'] = 'Missatge';
$string['email_send'] = 'Envia';
$string['email_subject'] = 'Tema';
$string['enabled'] = 'Habilitat';
$string['enableglobal'] = 'Aquest és un informe global (accessible des de qualsevol curs)';
$string['enablejsordering'] = 'Habilita JavaScript ordering';
$string['enablejspagination'] = 'Habilita JavaScript Pagination';
$string['endtime'] = 'Data de finalització';
$string['enrolledstudents'] = 'Estudiants inscrits';
$string['error_field'] = 'El camp no està permès';
$string['error_operator'] = 'No es permet l\'operador';
$string['error_value_expected_integer'] = 'S\'esperava un valor enter';
$string['excludedeletedusers'] = 'Exclou els usuaris suprimits (només per a informes SQL)';
$string['executeat'] = 'Executa a';
$string['executeatinfo'] = 'Moodle CRON executarà consultes SQL programades després de l\'hora seleccionada. Una vegada cada 24 hores';
$string['export_csv'] = 'Exporta en format CSV';
$string['export_json'] = 'Exporta en format JSON';
$string['export_ods'] = 'Exporta en format ODS';
$string['export_xls'] = 'Exporta en format XLS';
$string['exportoptions'] = 'Opcions d\'exportació';
$string['exportreport'] = 'Exporta l\'informe';
$string['fcoursefield'] = 'Filtre del camp del curs';
$string['field'] = 'Camp';
$string['filter'] = 'Filtre';
$string['filter_all'] = 'Tot';
$string['filter_apply'] = 'Aplica';
$string['filter_searchtext'] = 'Cerca text';
$string['filter_searchtext_summary'] = 'Filtre de text lliure';
$string['filtercategories'] = 'Filtre de categories';
$string['filtercategories_summary'] = 'Filtra per categoria';
$string['filtercoursecategories'] = 'Filtre per categoria del curs';
$string['filtercoursecategories_summary'] = 'Filtra els cursos per qualsevol de les seves categories mare';
$string['filtercoursemodules'] = 'Mòdul del curs';
$string['filtercoursemodules_summary'] = 'Filtra per mòduls del curs';
$string['filtercourses'] = 'Cursos';
$string['filtercourses_summary'] = 'Aquest filtre mostra una llista de cursos. Només es pot seleccionar un curs alhora';
$string['filterenrolledstudents'] = 'Estudiants inscrits als cursos';
$string['filterenrolledstudents_summary'] = 'Filtra un usuari (per id) dels estudiants inscrits a cursos';
$string['filterrole'] = 'rol';
$string['filterrole_summary'] = 'Sistema de filtres per rols (professor, estudiant...)';
$string['filters'] = 'Filtres';
$string['filtersemester'] = 'Semestre (hebreu)';
$string['filtersemester_list'] = 'Semestre 1, Semestre 2, Semestre 3, Seminari';
$string['filtersemester_summary'] = 'Permet filtrar abans dels semestres (en hebreu, per exemple: semestre 1, semestre 2)';
$string['filterstartendtime_summary'] = 'Filtre de data d\'inici / de finalització';
$string['filtersubcategories'] = 'Categoria (inclou subcategories)';
$string['filtersubcategories_summary'] = 'Feu servir: %%FILTER_SUBCATEGORIES:mdl_course_category.path%%';
$string['filteruser'] = 'Usuari del curs actual';
$string['filteruser_summary'] = 'Filtra un usuari (id) dels usuaris del curs actual';
$string['filterusers'] = 'Usuari del sistema';
$string['filterusers_summary'] = 'Filtra un usuari (per id) de la llista d\'usuaris del sistema';
$string['filteryearhebrew'] = 'Any (hebreu)';
$string['filteryearhebrew_summary'] = 'El filtre està utilitzant anys hebreus (תשעג, ...)';
$string['filteryearnumeric'] = 'Any (numèric)';
$string['filteryearnumeric_summary'] = 'El filtre està utilitzant anys numèrics (2013, ...)';
$string['filteryears'] = 'Any (numèric)';
$string['filteryears_list'] = '2010,2011,2012,2013,2014,2015';
$string['filteryears_summary'] = 'Filtra per anys (representació numèrica, 2012...)';
$string['finalgradeincurrentcourse'] = 'Nota final al curs actual';
$string['fixeddate'] = 'Data fixada';
$string['footer'] = 'Peu';
$string['forcemidnight'] = 'Força a la mitjanit';
$string['fsearchuserfield'] = 'Quadre de cerca del camp d\'usuari';
$string['fuserfield'] = 'Filtre del camp d\'usuari';
$string['global'] = 'Informe global';
$string['global_help'] = 'Es pot accedir a l\'informe global des de qualsevol curs de la plataforma només afegint &courseid=MY_COURSE_ID a l\'URL de l\'informe';
$string['globalstatsshouldbeenabled'] = 'Les estadístiques del lloc han d\'estar activades. Aneu a Administració -> Servidor -> Estadístiques';
$string['groupseries'] = 'Agrupa les sèries';
$string['groupvalues'] = 'Agrupa els mateixos valors (suma)';
$string['head_color'] = 'Color de fons del gràfic';
$string['head_data'] = 'Dades del gràfic';
$string['head_size'] = 'Mida del gràfic';
$string['header'] = 'Capçalera';
$string['height'] = 'Alçària';
$string['idnumber'] = 'Número ID';
$string['importfromrepository'] = 'Importa un informe del repositori';
$string['importreport'] = 'Importa un informe';
$string['includesubcats'] = 'Inclou les subcategories';
$string['jsordering_help'] = 'JavaScript Ordering us permet ordenar la taula d\'informes sense tornar a carregar la pàgina';
$string['label_field'] = 'Camp de l\'etiqueta';
$string['label_field_help'] = 'El camp que proporciona noms per a les coses representades al gràfic';
$string['lastexecutiontime'] = 'Temps d\'execució = {$a} (Sec)';
$string['legacylognotenabled'] = 'Els registres en format antic han d\'estar habilitats (<i>legacy logs</i>).
Aneu a l\'Administració del lloc / Connectors / Registre. Habiliteu el registre en format antic (<i>Legacy log</i>) i, dins de la configuració del registre, marqueu l\'opoció Enregistra dades en format antic';
$string['limitcategories'] = 'Limita les categories en un gràfic';
$string['line'] = 'Gràfic de línia';
$string['linesummary'] = 'Un gràfic de línia amb diverses sèries de dades';
$string['listofsqlreports'] = 'Premeu F11 quan el cursor es troba a l\'editor per activar/desactivar l\'edició en pantalla completa. Esc també es pot utilitzar per sortir de l\'edició en pantalla completa. <br/><br/><a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">Llista d\'informes SQL aportats</a>';
$string['managereports'] = 'Gestiona els informes';
$string['max'] = 'Màxim';
$string['min'] = 'Mínim';
$string['missingcolumn'] = 'Cal una columna';
$string['module'] = 'Mòdul';
$string['newreport'] = 'Informe nou';
$string['nocalcsyet'] = 'Encara no hi ha cap càlcul';
$string['nocolumnsyet'] = 'Encara no hi ha cap columna';
$string['noconditionsyet'] = 'Encara no hi ha cap condició';
$string['noexplicitprefix'] = 'Sense prefix explícit';
$string['nofiltersyet'] = 'Encara no hi ha cap filtre';
$string['nofilteryet'] = 'Encara no hi ha cap filtre';
$string['noorderingyet'] = 'Encara no hi ha cap petició';
$string['nopermissionsyet'] = 'Encara no hi ha cap permís';
$string['noplotyet'] = 'Encara no hi ha cap argument';
$string['norecordsfound'] = 'No s\'ha trobat cap registre';
$string['noreportsavailable'] = 'No hi ha cap informe disponible';
$string['norowsreturned'] = 'No s\'ha retornat cap fila';
$string['nosemicolon'] = 'Sense punt i coma';
$string['notallowedwords'] = 'Paraules no permeses';
$string['operator'] = 'Operador';
$string['others'] = 'Altres';
$string['pagination'] = 'Paginació';
$string['pagination_help'] = 'Nombre de registres que es mostraran a cada pàgina. Zero significa sense paginació';
$string['parentcategory'] = 'Categoria mare';
$string['permissions'] = 'Permisos';
$string['pie'] = 'Circular';
$string['pieareaname'] = 'Nom';
$string['pieareavalue'] = 'Valor';
$string['piesummary'] = 'Un gràfic circular (de pastís)';
$string['plot'] = 'Argument - Gràfics';
$string['pluginname'] = 'Informes configurables';
$string['previousdays'] = 'Dies anteriors';
$string['previousend'] = 'Finalització prèvia';
$string['previousstart'] = 'Inici previ';
$string['printreport'] = 'Imprimeix un informe';
$string['privacy:metadata:block_configurable_reports'] = 'El bloc d\'informes configurables conté informes de cursos personalitzats';
$string['privacy:metadata:block_configurable_reports:components'] = 'La configuració de l\'informe. Conté la consulta, els filtres...';
$string['privacy:metadata:block_configurable_reports:courseid'] = 'ID del curs';
$string['privacy:metadata:block_configurable_reports:global'] = 'Si l\'informe és accessible des de tots els cursos, o no';
$string['privacy:metadata:block_configurable_reports:lastexecutiontime'] = 'El temps en què aquest informe es va executar l\'última vegada que es va executar, en mil·lisegons.';
$string['privacy:metadata:block_configurable_reports:name'] = 'El nom de l\'informe';
$string['privacy:metadata:block_configurable_reports:ownerid'] = 'L\'ID de l\'usuari que va crear l\'informe';
$string['privacy:metadata:block_configurable_reports:summary'] = 'La descripció de l\'informe';
$string['privacy:metadata:block_configurable_reports:type'] = 'El tipus de l\'informe';
$string['privacy:metadata:block_configurable_reports:visible'] = 'Si l\'informe és visible, o no';
$string['puserfield'] = 'Valor del camp d\'usuari';
$string['puserfield_summary'] = 'Usuari amb el valor seleccionat al camp seleccionat';
$string['queryfailed'] = 'Error de consulta <code><pre>{$a}</pre></code>';
$string['querysql'] = 'Consulta SQL';
$string['remote'] = 'Executa en una base de dades (db) remota';
$string['remote_help'] = 'Voleu executar aquesta consulta a la base de dades (db) remota?';
$string['remotedescription'] = 'Voleu executar aquesta consulta a la base de dades (db) remota?';
$string['remotequerysql'] = 'Consulta SQL';
$string['report'] = 'Informe';
$string['report_categories'] = 'Informe de categories';
$string['report_courses'] = 'Informe de cursos';
$string['report_sql'] = 'Informe SQL';
$string['report_timeline'] = 'Informe de cronologia';
$string['report_users'] = 'Informe d\'usuaris';
$string['reportcategories'] = '1) Tria les categories d\'informes remots';
$string['reportcolumn'] = 'Una altra columna de l\'informe';
$string['reportcreated'] = 'S\'ha creat l\'informe correctament';
$string['reportlimit'] = 'Indica el límit de la fila';
$string['reportlimitinfo'] = 'Limita el nombre de files que es mostren a la taula d\'informes (el valor predeterminat és de 5000 files. És millor tenir algun límit, de manera que els usuaris no carreguin més el motor de la base de dades (DB))';
$string['reports'] = 'Informes';
$string['reportscapabilities'] = 'Capacitats de l\'informe';
$string['reportscapabilities_summary'] = 'Usuaris amb la capacitat moodle/site:viewrepots habilitada';
$string['reportsincategory'] = '2) Tria un informe de la llista';
$string['reporttable'] = 'Taula d\'informes';
$string['reporttable_help'] = '<p>Aquesta és l\'amplària de la taula que mostrarà els registres de l\'informe.</p>

<p>Si utilitzeu una plantilla, aquesta opció no té efecte</p>';
$string['reporttableui'] = 'Taula d\'informe UI';
$string['reporttableuiinfo'] = 'Mostra la taula d\'informes com: taula HTML simple amb desplaçament (<i>scrollable</i>), jQuery amb ordenació de columnes o DataTables JS library (classificació de columnes, encapçalament fix, cerca, paginació...)';
$string['repository'] = 'Repositori d\'informes';
$string['repository_help'] = 'Podeu importar informes d\'exemple des d\'un dipòsit compartit públic.

Tingueu en compte que hi ha un límit diari de trucades al dipòsit.

Si la connexió al dipòsit no funciona, podeu descarregar aquí manualment <a href="https://github.com/jleyva/moodle-configurable_reports_repository" target="_blank">https://github.com/jleyva/moodle-configurable_reports_repository</a> un informe, i, després, importar-lo usant la funció «Importa un informe», que es mostra a continuació';
$string['role'] = 'Rol';
$string['roleincourse'] = 'Usuari amb el rol o els rols seleccionats a l\'informe de curs actual';
$string['roleusersn'] = 'Nombre d\'usuaris amb el rol...';
$string['searchtext'] = 'Cerca el text';
$string['semester'] = 'Semestre (Hebreu)';
$string['serieid'] = 'Columna de la sèrie';
$string['sessionlimittime'] = 'Límit entre clics (en minuts)';
$string['sessionlimittime_help'] = 'El límit entre clics defineix si dos clics formen part de la mateixa sessió, o no';
$string['setcourseid'] = 'Estableix courseid';
$string['sharedsqlrepository'] = 'Repositori SQL compartit';
$string['sharedsqlrepositoryinfo'] = 'Nom del propietari del compte de GitHub + barra inclinada + nom del dipòsit';
$string['sqlsecurity'] = 'Seguretat SQL';
$string['sqlsecurityinfo'] = 'Desactiva per executar consultes SQL amb expressions per inserir dades';
$string['sqlsyntaxhighlight'] = 'Ressalta la sintaxi SQL (<i>SQL syntax</i>)';
$string['sqlsyntaxhighlightinfo'] = 'Ressalta la sintaxi SQL a l\'editor de codi (CodeMirror JS library)';
$string['startendtime'] = 'Filtre de data d\'inici / de finalització';
$string['starttime'] = 'Data d\'inici';
$string['stat'] = 'Estadístiques';
$string['statsactiveenrolments'] = 'Inscripcions actives (la setmana passada)';
$string['statslogins'] = 'Inicis de sessió a la plataforma';
$string['statstotalenrolments'] = 'Inscripcions totals';
$string['student'] = 'Estudiant';
$string['subcategories'] = 'Categoria (inclou subcategories)';
$string['sum'] = 'Suma';
$string['tablealign'] = 'Alineació de la taula';
$string['tablecellpadding'] = 'Tabulació de taules';
$string['tablecellspacing'] = 'Espai de les cel·les de la taula';
$string['tableclass'] = 'Tipus de taula';
$string['tablewidth'] = 'Amplària de la taula';
$string['template'] = 'Plantilla';
$string['template_marks'] = 'Marques de la plantilla';
$string['template_marks_help'] = '<p>Podeu utilitzar qualsevol d\'aquestes marques de substitució:</p>

<ul>
<li>##reportname## - Per incloure el nom de l\'informe</li>
<li>##reportsummary## - Per incloure el resum dels informes</li>
<li>##graphs## - Per incloure els gràfics</li>
<li>##exportoptions## - Per incloure les opcions d\'exportació</li>
<li>##calculationstable## - Per incloure la taula de càlculs</li>
<li>##pagination## - Per incloure la paginació</li>

</ul>';
$string['templaterecord'] = 'Plantilla de registre';
$string['timeinterval'] = 'Interval de temps';
$string['timeline'] = 'Cronologia';
$string['timemode'] = 'Mode horari';
$string['totalrecords'] = 'Compte total de registres = {$a->totalrecords}';
$string['type'] = 'Tipus d\'informes';
$string['typeofreport'] = 'Tipus d\'informe';
$string['typeofreport_help'] = 'Trieu el tipus d\'informe que voleu crear.
Per seguretat, l\'informe SQL requereix una capacitat addicional';
$string['user'] = 'Usuari del curs (id)';
$string['usercompletion'] = 'Estat de finalització del curs d\'un usuari';
$string['usercompletionsummary'] = 'Estat de finalització del curs';
$string['userfield'] = 'Camp del perfil d\'usuari';
$string['userfieldorder'] = 'Ordre del camp d\'usuari';
$string['usermodactions'] = 'Accions del mòdul d\'usuari';
$string['usermodoutline'] = 'El mòdul d\'usuari conté estadístiques';
$string['users'] = 'Usuari del sistema (id)';
$string['usersincohorts'] = 'Usuari que és membre d\'una / de diverses cohorts';
$string['usersincohorts_summary'] = 'Només els usuaris que són membres de les cohorts seleccionades';
$string['usersincoursereport'] = 'Qualsevol usuari en l\'informe del curs actual';
$string['usersincoursereport_summary'] = 'Qualsevol usuari en l\'informe del curs actual';
$string['usersincurrentcourse'] = 'Usuaris a l\'informe del curs actual';
$string['usersincurrentcourse_summary'] = 'Usuaris amb el rol / els rols seleccionats a l\'informe del curs';
$string['userstats'] = 'Estadístiques de l\'usuari';
$string['value'] = 'Valor';
$string['value_fields'] = 'Camps del valor';
$string['value_fields_help'] = 'Camps que s\'han de representar al gràfic. Ctrl + clic (Cmd + clic a Mac) per seleccionar-ne diversos. Si seleccioneu el camp Etiqueta o un camp amb valors no numèrics, s\'ignorarà';
$string['viewreport'] = 'Mostra l\'informe';
$string['width'] = 'Amplària';
$string['xandynotequal'] = 'Els eixos X i Y han de ser diferents';
$string['xaxis'] = 'Eix X';
$string['yaxis'] = 'Eix Y';
$string['yearhebrew'] = 'Any (hebreu)';
$string['yearnumeric'] = 'Any (numèric)';
$string['years'] = 'Any (numèric)';
$string['youmustselectarole'] = 'Es requereix, com a mínim, un rol';
