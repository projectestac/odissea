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
 * Strings for component 'attendance', language 'ca', version '4.5'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'A';
$string['Afull'] = 'Absent';
$string['Eacronym'] = 'J';
$string['Efull'] = 'Justificat';
$string['Lacronym'] = 'T';
$string['Lfull'] = 'Tard';
$string['Pacronym'] = 'P';
$string['Pfull'] = 'Present';
$string['absenteereport'] = 'Informe d\'absentisme';
$string['acronym'] = 'Acrònim';
$string['add'] = 'Afegeix';
$string['addedrecip'] = 'S\'ha afegit {$a} destinatari nou';
$string['addedrecips'] = 'S\'han afegit {$a} destinataris nous';
$string['addmultiplesessions'] = 'Afegeix múltiples sessions';
$string['addsession'] = 'Afegeix una sessió';
$string['adduser'] = 'Afegeix un usuari';
$string['addwarning'] = 'Afegeix un advertiment';
$string['all'] = 'Tots';
$string['allcourses'] = 'Tots els cursos';
$string['allowupdatestatus'] = 'Permetre als estudiants actualitzar la seva pròpia assistència';
$string['allowupdatestatus_desc'] = 'Si està marcada, els estudiants podran actualitzar la seva assistència una sessió després d\'haver-la registrat.';
$string['allowupdatestatus_help'] = 'Si està marcada, els estudiants podran actualitzar la seva assistència una sessió després d\'haver-la registrat.';
$string['allpast'] = 'Tots els passats';
$string['allsessions'] = 'Totes les sessions';
$string['allsessionstotals'] = 'Total de les sessions seleccionades';
$string['attendance:addinstance'] = 'Afegeix una activitat d\'assistència nova';
$string['attendance:canbelisted'] = 'Apareix a la llista';
$string['attendance:changeattendances'] = 'S\'estan modificant les assistències';
$string['attendance:changepreferences'] = 'S\'estan modificant les preferències';
$string['attendance:export'] = 'Exportació d\'informes';
$string['attendance:import'] = 'Importar sessions des d\'un fitxer (csv)';
$string['attendance:manageattendances'] = 'Gestiona les assistències';
$string['attendance:managetemporaryusers'] = 'Gestiona usuaris temporals';
$string['attendance:manualautomark'] = 'Permetre el procés d\'autoregistre manual';
$string['attendance:takeattendances'] = 'Prenent l\'assistència';
$string['attendance:view'] = 'S\'estan visualitzant les assistències';
$string['attendance:viewreports'] = 'S\'estan visualitzant els informes';
$string['attendance:viewsummaryreports'] = 'Visualitza els informes de resum del curs';
$string['attendance:warningemails'] = 'Es pot subscriure a correus electrònics amb usuaris absents';
$string['attendance_already_submitted'] = 'No podeu registrar l\'assistència que ja s\'ha establert.';
$string['attendance_no_status'] = 'No hi ha cap estat vàlid disponible. És possible que sigui massa tard per registrar l\'assistència.';
$string['attendancedata'] = 'Dades d\'assistència';
$string['attendancefile'] = 'Fitxer d\'assistència (format csv)';
$string['attendancefile_help'] = 'El fitxer ha de ser un fitxer CSV amb una fila de capçalera i camps per identificar l\'usuari i l\'hora en què es va registrar l\'assistència, per exemple (correu electrònic, hora d\'escaneig) o (nom d\'usuari, hora).';
$string['attendancegrade'] = 'Qualificació de l\'assistència';
$string['attendancenotset'] = 'Heu d\'establir la vostra assistència';
$string['attendancenotstarted'] = 'L\'assistència no ha començat encara per aquest curs';
$string['attendancepercent'] = 'Percentatge d\'assistència';
$string['attendancereport'] = 'Informe d\'assistència';
$string['attendanceslogged'] = 'Les assistències s\'han registrat';
$string['attendancestaken'] = 'Les assistències s\'han marcat';
$string['attendancesuccess'] = 'L\'assistència s\'ha pres correctament';
$string['attendanceupdated'] = 'L\'assistència s\'ha actualitzat correctament';
$string['attendanceuserreport'] = 'Informe d\'assistència';
$string['attforblockdirstillexists'] = 'El directori vell mod/attforblock encara existeix; heu d\'esborrar aquest directori del servidor abans d\'actualitzar.';
$string['attrecords'] = 'Registres d\'assistències';
$string['autoassignstatus'] = 'Seleccioneu automàticament l\'estat més alt disponible';
$string['autoassignstatus_help'] = 'Si se selecciona, els estudiants s\'assignaran automàticament al grau més alt disponible.';
$string['automark'] = 'Marcatge automàtic';
$string['automark_help'] = 'Permet que el marcatge es completi automàticament.
Si es configura com a «Sí», els estudiants es marcaran automàticament en funció del primer accés al curs.
Si es configura com a «Estableix sense marcar al final de la sessió», els estudiants que no hagin marcat la seva assistència s\'establiran a l\'estat sense marcar seleccionat.';
$string['automarkall'] = 'Sí';
$string['automarkclose'] = 'Estableix sense marcar al final de la sessió';
$string['automarkingcomplete'] = 'Marcatge automàtic complet';
$string['automarkingnotavailableyet'] = 'Aquesta sessió està utilitzant el marcatge automàtic al tancament de la sessió i la sessió encara no s\'ha acabat.';
$string['automarkingnotenabled'] = 'El marcatge automàtic no està activat en aquesta sessió';
$string['automarktask'] = 'Comproveu si hi ha sessions d\'assistència que requereixen marcatge automàtic';
$string['automarkuseempty'] = 'Gestió de la disponibilitat de l\'estat de registres automàtics';
$string['automarkuseempty_desc'] = 'Si està marcada, els elements d\'estat amb l\'opció "disponible per a" buida/desactivada es permetran durant el marcatge automàtic.';
$string['autorecorded'] = 'el sistema s\'ha enregistrat automàticament';
$string['availability'] = 'Disponibilitat de l\'autoregistre';
$string['availability_help'] = 'Restringeix la disponibilitat d\'aquest estat. <br> Si l\'opció "Limitada" està seleccionada, proporcioneu el nombre de minuts que aquest estat està disponible després de l\'inici de la sessió. Això és aplicable quan els estudiants marquen la seva pròpia assistència.';
$string['availabilityalways'] = 'Sempre';
$string['availabilitylimitedtime'] = 'Temps limitat';
$string['availablebeforesession'] = 'Disponible abans que la sessió comenci';
$string['availablebeforesession_help'] = 'Quan els estudiants estan marcant la seva pròpia assistència, permetre que es triï aquest estat abans de començar la sessió. Si no es tria cap de les opcions, totes estaran disponibles.';
$string['averageattendance'] = 'Assistència mitjana';
$string['averageattendancegraded'] = 'Grau d\'assistència mitjana';
$string['backtoparticipants'] = 'Torna a la llista de participants';
$string['below'] = 'Per sota del {$a}%';
$string['calclose'] = 'Tanca';
$string['calendarevent'] = 'Crea un esdeveniment de calendari per a la sessió';
$string['calendarevent_help'] = 'Si està habilitat, es crearà un esdeveniment de calendari per a aquesta sessió.
Si està inhabilitat, se suprimirà qualsevol esdeveniment del calendari existent per a aquesta sessió.';
$string['caleventcreated'] = 'S\'ha creat amb èxit l\'esdeveniment del calendari per a la sessió';
$string['caleventdeleted'] = 'S\'ha esborrat amb èxit l\'esdeveniment del calendari per a la sessió';
$string['calmonths'] = 'Gener,Febrer,Març,Abril,Maig,Juny,Juliol,Agost,Setembre,Octubre,Novembre,Desembre';
$string['calshow'] = 'Escolliu data';
$string['calweekdays'] = 'Dg,Dl,Dm,Dc,Dj,Dv,Ds';
$string['cannottakeforgroup'] = 'No podeu registrar l\'assistència del grup «{$a}»';
$string['cannottakethisgroup'] = 'No sou membre del grup de curs al qual es refereix aquesta sessió d\'assistència, no s\'ha registrat la vostra assistència.';
$string['cantaddstatus'] = 'Heu d\'establir un acrònim i una descripció quan s\'afegeixi un estat nou.';
$string['canthidestatus'] = 'No podeu amagar aquest estat perquè ja s\'utilitza dins d\'aquesta activitat d\'assistència';
$string['categoryreport'] = 'Informe de categoria de curs';
$string['changeattendance'] = 'Modifica l\'assistència';
$string['changeduration'] = 'Modifica la durada';
$string['changesession'] = 'Modifica la sessió';
$string['checkweekdays'] = 'Seleccioneu els dies laborables que es trobin dins de l\'interval de dates de la sessió seleccionada.';
$string['closed'] = 'Aquesta sessió no està disponible actualment per a l\'autocontrol';
$string['column'] = 'columna';
$string['columnmap'] = 'Mapatge de columnes';
$string['columnmap_help'] = 'Per a cadascun dels camps presentats, seleccioneu la columna corresponent al fitxer csv.';
$string['columns'] = 'columnes';
$string['commonsession'] = 'Tots els estudiants';
$string['commonsessions'] = 'Tots els estudiants';
$string['confirm'] = 'Confirma';
$string['confirmcolumnmappings'] = 'Confirma les assignacions de columnes';
$string['confirmdeletehiddensessions'] = 'Confirmeu que voleu suprimir {$ a-> count} sessions programades abans de la data d\'inici del curs ({$ a-> date})?';
$string['confirmdeleteuser'] = 'Confirmeu que voleu eliminar l\'usuari «{$ a-> fullname}» ({$ a-> email})? <br/> Tots els seus registres d\'assistència s\'eliminaran de manera permanent.';
$string['copyfrom'] = 'Còpia les dades d\'assistència de';
$string['countofselected'] = 'Nombre de seleccionats';
$string['course'] = 'Curs';
$string['coursemessage'] = 'Missatges dels usuaris del curs';
$string['courseshortname'] = 'Nom curt de l\'aula';
$string['coursesummary'] = 'Informe de resum del curs';
$string['createmultiplesessions'] = 'Crea múltiples sessions';
$string['createmultiplesessions_help'] = 'Aquesta funció permet crear diverses sessions en un sol pas.
Les sessions comencen a la data de la sessió base i continuen fins a la data indicada a «repetir fins a» (inclosa).

* <strong>Repetir el</strong>: Seleccioneu els dies de la setmana en què es reunirà la vostra classe (per exemple, dilluns/dimecres/divendres).
* <strong>Repetir cada</strong>: Això permet configurar la freqüència. Si la vostra classe es reunirà cada setmana, seleccioneu 1; si es reunirà cada dues setmanes, seleccioneu 2; cada tres setmanes, seleccioneu 3, etc.
* <strong>Repetir fins a</strong>: Seleccioneu l\'últim dia de classe (l\'últim dia que voleu prendre nota de l\'assistència).';
$string['createonesession'] = 'Crea una sessió per al curs';
$string['csvdelimiter'] = 'Delimitador CSV';
$string['currentlyselectedusers'] = 'Usuaris seleccionats actualment';
$string['customexportfields'] = 'Exporta camps de perfil d\'usuari personalitzats';
$string['customexportfields_help'] = 'Camps de perfil d\'usuari personalitzats addicionals per exposar a l\'informe d\'exportació.';
$string['customfields'] = 'Camps de sessió personalitzats';
$string['date'] = 'Data';
$string['days'] = 'Dia';
$string['defaultdisplaymode'] = 'Visualització per defecte';
$string['defaults'] = 'Per defecte';
$string['defaultsessionsettings'] = 'Configuració de sessió predeterminada';
$string['defaultsessionsettings_help'] = 'Aquesta configuració defineix els valors predeterminats per a totes les sessions noves';
$string['defaultsettings'] = 'Paràmetres d\'assistència per defecte';
$string['defaultsettings_help'] = 'Aquesta configuració defineix els valors predeterminats per a totes les assistències noves';
$string['defaultstatus'] = 'Configuració de l\'estat per defecte';
$string['defaultsubnet'] = 'Adreça de xarxa predeterminada';
$string['defaultsubnet_help'] = 'L\'enregistrament d\'assistència es pot restringir a subxarxes particulars especificant una llista d\'adreces IP, parcials o completes, separada per comes. Aquest és el valor predeterminat que s\'utilitza quan es creen sessions noves.';
$string['defaultview'] = 'Vista predeterminada en iniciar sessió';
$string['defaultview_desc'] = 'Aquesta és la visualització predeterminada que es mostra als professors en el primer inici de sessió.';
$string['defaultwarnings'] = 'Conjunt d\'advertiments predeterminat';
$string['defaultwarningsettings'] = 'Configuració predeterminada d\'advertiments';
$string['defaultwarningsettings_help'] = 'Aquesta configuració defineix els valors predeterminats per a tots els advertiments nous';
$string['delete'] = 'Esborra';
$string['deletecheckfull'] = 'Confirmeu que voleu suprimir completament {$a}, incloses totes les dades d\'usuari?';
$string['deletedgroup'] = 'S\'ha eliminat el grup associat a aquesta sessió';
$string['deletehiddensessions'] = 'Esborra totes les sessions amagades';
$string['deletelogs'] = 'Esborra les dades d\'assistència';
$string['deleteselected'] = 'Esborra el seleccionat';
$string['deletesession'] = 'Esborra la sessió';
$string['deletesessions'] = 'Esborra totes les sessions';
$string['deleteuser'] = 'Esborra l\'usuari';
$string['deletewarningconfirm'] = 'Confirmeu que voleu suprimir aquest advertiment?';
$string['deletingsession'] = 'Esborra la sessió del curs';
$string['deletingstatus'] = 'Esborra l\'estat del curs';
$string['description'] = 'Descripció';
$string['display'] = 'Visualització';
$string['displaymode'] = 'Mode de visualització';
$string['donotusepaging'] = 'No utilitzis paginació';
$string['downloadexcel'] = 'Descarrega en format Excel';
$string['downloadooo'] = 'Descarrega en format OpenOffice';
$string['downloadtext'] = 'Descarrega en format de text';
$string['duration'] = 'Durada';
$string['editsession'] = 'Edita la sessió';
$string['edituser'] = 'Edita l\'usuari';
$string['emailcontent'] = 'Contingut del correu electrònic';
$string['emailcontent_default'] = 'Hola, %userfirstname%,
La vostra assistència a %coursename% %attendancename% ha baixat per sota del %warningpercent% i, actualment, és del %percent%; esperem que estigueu bé!

Per treure el màxim profit d\'aquest curs, haureu de millorar la vostra assistència. Poseu-vos en contacte amb nosaltres si necessiteu ajuda.';
$string['emailcontent_help'] = 'Quan s\'envia un advertiment a un estudiant, s\'agafa el contingut del correu electrònic d\'aquest camp. Es poden utilitzar els comodins següents:
<ul>
<li>%coursename%</li>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%userid%</li>
<li>%warningpercent%</li>
<li>%attendancename%</li>
<li>%cmid%</li>
<li>%numtakensessions%</li>
<li>%points%</li>
<li>%maxpoints%</li>
<li>%percent%</li>
</ul>';
$string['emailsubject'] = 'Assumpte de correu electrònic';
$string['emailsubject_default'] = 'Advertiment d\'assistència';
$string['emailsubject_help'] = 'Quan s\'envia un advertiment a un estudiant, s\'agafa l\'assumpte del correu electrònic d\'aquest camp.';
$string['emailuser'] = 'Usuari de correu electrònic';
$string['emailuser_help'] = 'Si està marcada, s\'enviarà un advertiment a l\'estudiant.';
$string['emptyacronym'] = 'No es permeten les sigles buides. El registre d\'estat no s\'actualitzarà.';
$string['emptydescription'] = 'No es permeten descripcions buides. El registre d\'estat no s\'actualitzarà.';
$string['enablecalendar'] = 'Crea esdeveniments de calendari';
$string['enablecalendar_desc'] = 'Si està habilitat, es crearà un esdeveniment del calendari per a cada sessió d\'assistència. Després de canviar aquesta configuració, hauríeu d\'executar l\'informe del calendari.';
$string['enablewarnings'] = 'Habilita els advertiments';
$string['enablewarnings_desc'] = 'Això permet definir un conjunt d\'advertiments per a una assistència i notificacions per correu electrònic als usuaris quan l\'assistència cau per sota del llindar configurat. <br/>
<strong>ATENCIÓ: aquesta és una funció nova i no s\'ha provat de manera exhaustiva. Utilitzeu-la sota el vostre propi risc; si creieu que funciona bé, comenteu-ho als fòrums de Moodle. </strong>';
$string['encoding'] = 'Codificació';
$string['encoding_help'] = 'Es refereix al tipus de codificació de codi de barres utilitzat a la targeta d\'identificació dels estudiants. Els tipus típics d\'esquemes de codificació de codis de barres inclouen Codi-39, Codi-128 i UPC-A.';
$string['endofperiod'] = 'Final del període';
$string['endtime'] = 'Final de la sessió';
$string['enrolmentend'] = 'La inscripció de l\'usuari finalitza el {$a}';
$string['enrolmentstart'] = 'La inscripció de l\'usuari comença el {$a}';
$string['enrolmentsuspended'] = 'Inscripció suspesa';
$string['enterpassword'] = 'Introduïu la contrasenya';
$string['error:coursehasnoattendance'] = 'El curs amb el nom curt {$ a} no té cap activitat d\'assistència.';
$string['error:coursenotfound'] = 'No es pot trobar cap curs amb el nom curt {$a}.';
$string['error:sessioncourseinvalid'] = 'Una sessió del curs és no vàlida. S\'està ometent.';
$string['error:sessiondateinvalid'] = 'Una data de sessió és no vàlida. S\'està ometent.';
$string['error:sessionendinvalid'] = 'El temps de finalització d\'una sessió és no vàlid. S\'està ometent.';
$string['error:sessionstartinvalid'] = 'El temps d\'inici d\'una sessió és no vàlid. S\'està ometent.';
$string['errorgroupsnotselected'] = 'Seleccioneu un o més grups';
$string['errorinaddingsession'] = 'Error en afegir la sessió';
$string['erroringeneratingsessions'] = 'Error en generar les sessions';
$string['eventdurationupdated'] = 'Durada de la sessió actualitzada';
$string['eventreportviewed'] = 'S\'ha visualitzat l\'informe d\'assistència';
$string['eventscreated'] = 'Els esdeveniments de calendari s\'han creat';
$string['eventsdeleted'] = 'Els esdeveniments del calendari s\'han esborrat';
$string['eventsessionadded'] = 'Sessió afegida';
$string['eventsessiondeleted'] = 'Sessió esborrada';
$string['eventsessionipshared'] = 'Assignació d\'autocontrol de conflictes IP';
$string['eventsessionsimported'] = 'Les sessions s\'han importat';
$string['eventsessionupdated'] = 'Sessió actualitzada';
$string['eventstatusadded'] = 'Estat afegit';
$string['eventstatusupdated'] = 'Estat actualitzat';
$string['eventstudentattendancesessionsupdated'] = 'Informe de sessió actualitzat';
$string['eventstudentattendancesessionsviewed'] = 'S\'ha vist l\'informe de la sessió';
$string['eventtaken'] = 'Assistència presa';
$string['eventtakenbystudent'] = 'Assistència registrada per l\'alumne';
$string['export'] = 'Exporta';
$string['extrarestrictions'] = 'Restriccions addicionals';
$string['formattexttype'] = 'Formatació';
$string['from'] = 'de:';
$string['gradebookexplanation'] = 'Qualifica en el llibre de notes';
$string['gradebookexplanation_help'] = 'El mòdul d\'Assistència mostra la vostra qualificació d\'assistència actual, basada en el nombre de punts que heu obtingut fins aquest moment i el nombre de punts que podríeu haver obtingut fins avui; no inclou, emperò, els períodes de classes futures. Al llibre de qualificacions, la vostra qualificació d\'assistència es basa en el percentatge d\'assistència actual i el nombre de punts que es poden guanyar al llarg de tota la durada del curs, inclosos els períodes de classes futures. Així, les vostres qualificacions d\'assistència que apareixen al mòdul d\'Assistència i al llibre de qualificacions poden no ser el mateix nombre de punts, però sí que són el mateix percentatge.

Per exemple, si heu obtingut 8 dels 10 punts fins avui (80% d\'assistència) i l\'assistència per a tot el curs val 50 punts, el mòdul d\'Assistència mostrarà 8/10 i el llibre de qualificacions mostrarà 40/50. Encara no heu obtingut 40 punts, però aquest és el valor de punts equivalent al vostre percentatge de participació actual del 80%. El valor dels punts que s\'han guanyat al mòdul d\'Assistència mai no pot disminuir, ja que es basa només en l\'assistència fins avui. No obstant això, el valor dels punts d\'assistència que es mostren al llibre de qualificacions pot augmentar o disminuir en funció de la vostra assistència futura, ja que es basa en l\'assistència durant tot el curs.';
$string['graded'] = 'Sessions qualificades';
$string['gridcolumns'] = 'Columnes de la graella';
$string['group'] = 'Grup';
$string['groups'] = 'Grups';
$string['groupsession'] = 'Grup';
$string['groupsessionsby'] = 'Sessions de grup per';
$string['hiddensessions'] = 'Sessions ocultes';
$string['hiddensessions_help'] = 'La sessió és oculta si  la data d\'inici de la sessió és més antiga que la data d\'inici del curs.

Podeu utilitzar aquesta funció per ocultar sessions anteriors en lloc d\'esborrar-les. Recordeu que només les sessions visibles s\'utilitzen al llibre de qualificacions.';
$string['hiddensessionsdeleted'] = 'S\'han eliminat totes les sessions ocultes';
$string['hideextrauserdetails'] = 'Amaga les dades addicionals de l\'usuari';
$string['hidensessiondetails'] = 'Amaga els detalls de la sessió';
$string['identifyby'] = 'Identifica l\'estudiant per';
$string['import'] = 'Importa';
$string['importfile'] = 'Importa el fitxer';
$string['importfile_help'] = 'Importa el fitxer';
$string['importsessions'] = 'Importa les sessions';
$string['importstatus'] = 'Camp d\'estat';
$string['importstatus_help'] = 'Això permet incloure un valor d\'estat a la importació, per exemple, valors com P, T o A';
$string['includeabsentee'] = 'Inclou les sessions en calcular l\'informe d\'absentisme';
$string['includeabsentee_help'] = 'Si està marcada, aquesta sessió s\'inclourà en els càlculs de l\'informe d\'absentisme.';
$string['includeall'] = 'Selecciona totes les sessions';
$string['includedescription'] = 'Inclou la descripció de la sessió';
$string['includenottaken'] = 'Inclou les sessions no realitzades';
$string['includeqrcode'] = 'Inclou el codi QR';
$string['includeremarks'] = 'Inclou comentaris';
$string['incorrectpassword'] = 'Heu introduït una contrasenya incorrecta i la vostra assistència no s\'ha registrat; introduïu la contrasenya correcta.';
$string['incorrectpasswordshort'] = 'Contrasenya incorrecta; l\'assistència no s\'ha registrat.';
$string['indetail'] = 'En detall...';
$string['indicator:cognitivedepth'] = 'Assistència cognitiva';
$string['indicator:cognitivedepth_help'] = 'Aquest indicador es basa en la profunditat cognitiva aconseguida per l\'alumne en una activitat presencial.';
$string['indicator:cognitivedepthdef'] = 'Assistència cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participant ha assolit aquest percentatge del compromís cognitiu que ofereix l\'Assistència durant aquest interval d\'anàlisi (Nivells = Sense visualització, Visualització)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Assistència social';
$string['indicator:socialbreadth_help'] = 'Aquest indicador es basa en l\'abast social assolit per l\'alumne en una activitat presencial.';
$string['indicator:socialbreadthdef'] = 'Assistència social';
$string['indicator:socialbreadthdef_help'] = 'El participant ha assolit aquest percentatge del compromís social que ofereix l\'assistència durant aquest interval d\'anàlisi (Nivells = Sense participació, Participant sol)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidaction'] = 'Heu de seleccionar una acció';
$string['invalidemails'] = 'Heu d\'especificar adreces dels comptes d\'usuari existents, no s\'ha trobat: {$a}';
$string['invalidimportfile'] = 'El format del fitxer no és vàlid.';
$string['invalidsessionenddate'] = 'La data de finalització de la sessió no pot ser anterior a la data d\'inici de la sessió.';
$string['invalidsessionendtime'] = 'El temps de finalització ha de ser superior a l\'hora d\'inici';
$string['invalidstatus'] = 'Heu seleccionat un estat no vàlid, torneu-ho a provar';
$string['iptimemissing'] = 'Minuts no vàlids per alliberar';
$string['jumpto'] = 'Salta a';
$string['keepsearching'] = 'Segueix buscant';
$string['manualtriggerauto'] = 'Activar manualment el registre automàtic';
$string['marksessionimportcsvhelp'] = 'Aquest formulari us permet pujar un fitxer csv que conté un identificador d\'usuari i un estat; el camp d\'estat pot ser l\'acrònim d\'estat o l\'hora en què es va registrar l\'assistència d\'aquest usuari. Si es passa un valor de temps, s\'intentarà assignar el valor d\'estat amb la nota més alta disponible en aquell moment.';
$string['maxpossible'] = 'Màxim possible';
$string['maxpossible_help'] = 'Mostra la puntuació que pot assolir cada usuari si reben els punts màxims de cada sessió que encara no s\'ha cursat (passat i futur):
 <ul>
    <li><strong>Points</strong>: la puntuació màxima que cada usuari pot assolir en totes les sessions.</li>
    <li><strong>Percentage</strong>: percentatge màxim que cada usuari pot assolir en totes les sessions.</li>
    </ul>';
$string['maxpossiblepercentage'] = 'Percentatge màxim possible';
$string['maxpossiblepoints'] = 'Puntuació màxima possible';
$string['maxwarn'] = 'Nombre màxim d\'advertències per correu electrònic';
$string['maxwarn_help'] = 'El nombre màxim de vegades que s\'ha d\'enviar un avís (només s\'envia una advertiment per sessió)';
$string['mergeuser'] = 'Fusiona l\'usuari';
$string['messagedselecteduserfailed'] = 'No s\'ha pogut enviar un missatge a un o més usuaris. Si us plau, activeu la depuració per obtenir més informació.';
$string['mobilesessionfrom'] = 'Mostra les sessions més antigues que l\'anterior';
$string['mobilesessionfrom_help'] = 'Permet restringir la llista de sessions quan es marca a l\'aplicació; només es mostren les sessions que s\'han iniciat des d\'aquest valor';
$string['mobilesessionto'] = 'Mostra les pròximes sessions';
$string['mobilesessionto_help'] = 'Permet restringir la llista de sessions per mostrar només un petit nombre de sessions futures.';
$string['mobilesettings'] = 'Configuració de l\'aplicació mòbil';
$string['mobilesettings_help'] = 'Aquesta configuració controla el comportament de l\'aplicació mòbil de Moodle';
$string['modulename'] = 'Assistència';
$string['modulename_help'] = 'El mòdul d\'activitat d\'assistència permet que un professor registri l\'assistència a les classes i que els estudiants vegin el seu propi registre d\'assistència.

El professor pot crear diverses sessions i pot marcar l\'estat d\'assistència com a «Present», «Absent», «Tard», o «Justificat», o modificar els estats per adaptar-los a les seves necessitats.

Els informes estan disponibles per a tota la classe o per als estudiants individualment.';
$string['modulenameplural'] = 'Assistència';
$string['months'] = 'Mesos';
$string['moreattendance'] = 'L\'assistència s\'ha pres correctament per aquesta pàgina';
$string['moveleft'] = 'Mou a l\'esquerra';
$string['moveright'] = 'Mou a la dreta';
$string['multisessionexpanded'] = 'S\'han ampliat diverses sessions';
$string['multisessionexpanded_desc'] = 'Mostra la configuració de "Diverses sessions" expandida de manera predeterminada quan es creen sessions noves.';
$string['mustselectusers'] = 'Cal seleccionar usuaris per exportar';
$string['name'] = 'Nom';
$string['newdate'] = 'Data nova';
$string['newduration'] = 'Durada nova';
$string['newstatusset'] = 'Conjunt nou d\'estats';
$string['noabsentstatusset'] = 'L\'estat establert en ús no té estat per ser utilitzat quan no està marcat.';
$string['noattendanceusers'] = 'No és possible exportar dades, ja que no hi ha estudiants matriculats al curs.';
$string['noattforuser'] = 'No existeix cap registre de l\'assitència per aquest usuari';
$string['noautomark'] = 'Inhabilitat';
$string['nocapabilitytotakethisattendance'] = 'Heu provat de canviar l\'assistència a una sessió amb el cmid: {$a} que no teniu permís per modificar.';
$string['nodescription'] = 'Sessió de classe regular';
$string['noeventstoreset'] = 'No hi ha esdeveniments del calendari que requereixin una actualització.';
$string['nogroups'] = 'No podeu afegir sessions de grup. No hi ha cap grup en aquest curs.';
$string['noguest'] = 'Els visitants no poden visualitzar l\'assistència';
$string['noofdaysabsent'] = 'Nombre d\'absències';
$string['noofdaysexcused'] = 'Nombre d\'absències justificades';
$string['noofdayslate'] = 'Nombre de retards';
$string['noofdayspresent'] = 'Nombre d\'assistències';
$string['nosessiondayselected'] = 'No s\'ha seleccionat cap dia de sessió';
$string['nosessionexists'] = 'No existeixen sessions per aquest curs';
$string['nosessionsselected'] = 'Cap sessió seleccionada';
$string['notfound'] = 'No s\'ha trobat l\'activitat d\'assistència en aquest curs!';
$string['notifytask'] = 'Envieu avisos als usuaris';
$string['notmember'] = 'not&nbsp;membre';
$string['notset'] = 'no establert';
$string['nounmarkedstatusset'] = 'No s\'ha configurat cap estat sense marcar per a aquesta sessió (id:{$a->sessionid}), per solucionar aquesta actualització, el <a href="{$a->url}">Status set</a>';
$string['noupgradefromthisversion'] = 'El mòdul d\'assistència no pot actualitzar-se des de la versió «attforblock» ja instal·lada. Elimineu «attforblock» o actualitzeu-lo a l\'última versió abans d\'instal·lar el nou mòdul d\'assistència';
$string['numsessions'] = 'Nombre de sessions';
$string['numsessionstaken'] = 'Nombre de sessions realitzades';
$string['olddate'] = 'Data antiga';
$string['onactivitycompletion'] = 'En finalitzar l\'activitat';
$string['onlyselectedusers'] = 'Exporta només els usuaris seleccionats';
$string['overallsessions'] = 'En totes les sessions';
$string['overallsessions_help'] = 'Mostra estadístiques de totes les sessions, incloses aquelles que encara no s\'han cursat (passat i futur):
  <ul>
    <li><strong>Sessions</strong>: nombre total de sessions.</li>
    <li><strong>Points</strong>: punts atorgats en funció de les sessions registrades.</li>
    <li><strong>Percentage</strong>: percentatge de punts atorgats al màxim de punts possibles per a totes les sessions.</li>
    </ul>';
$string['oversessionstaken'] = 'Durant les sessions realitzades';
$string['oversessionstaken_help'] = 'Mostra estadístiques de les sessions on s\'ha registrat l\'assistència:
    <ul>
    <li><strong>Sessions</strong>: nombre de sessions ja registrades.</li>
    <li><strong>Points</strong>: punts atorgats en funció de les sessions registrades.</li>
    <li><strong>Percentage</strong>: percentatge de punts atorgats al màxim de punts possibles per a totes les sessions.</li>
    </ul>';
$string['pageof'] = 'Pàgina {$a->page} de {$a->numpages}';
$string['participant'] = 'Participant';
$string['password'] = 'Contrasenya';
$string['passwordgrp'] = 'Contrasenya de l\'estudiant';
$string['passwordgrp_help'] = 'Si s\'estableix, els estudiants hauran d\'introduir aquesta contrasenya abans que puguin establir el seu propi estat d\'assistència per a la sessió. Si està buit, no cal una contrasenya.';
$string['passwordheader'] = 'Utilitzeu la contrasenya que es mostra a continuació per registrar la vostra assistència';
$string['passwordrequired'] = 'Heu d\'introduir la contrasenya de la sessió abans de poder enviar la vostra assistència';
$string['percentage'] = 'Percentatge';
$string['percentageallsessions'] = 'Percentatge sobre totes les sessions';
$string['percentagesessionscompleted'] = 'Percentatge sobre les sessions realitzades';
$string['pluginadministration'] = 'Administració de l\'assistència';
$string['pluginname'] = 'Assistència';
$string['points'] = 'Punts';
$string['pointsallsessions'] = 'Punts sobre totes les sessions';
$string['pointssessionscompleted'] = 'Punts sobre les sessions realitzades';
$string['preferences_desc'] = 'Els canvis en els conjunts d\'estat afectaran les sessions d\'assistència existents i poden afectar la classificació.';
$string['preventsharederror'] = 'S\'ha desactivat l\'autocontrol per a una sessió perquè sembla que aquest dispositiu s\'ha utilitzat per registrar l\'assistència d\'un altre estudiant.';
$string['preventsharedip'] = 'Evita que els estudiants comparteixin una adreça IP';
$string['preventsharedip_help'] = 'Impedeix que els estudiants utilitzin el mateix dispositiu (identificat mitjançant l\'adreça IP) per registrar l\'assistència d\'altres estudiants.';
$string['preventsharediptime'] = 'Temps per permetre la reutilització de l\'adreça IP (minuts)';
$string['preventsharediptime_help'] = 'Permetre que es reutilitzi una adreça IP per prendre assistència en aquesta sessió després d\'haver transcorregut aquest temps.';
$string['preview'] = 'Previsualització del fitxer';
$string['previewhtml'] = 'Previsualització del format HTML';
$string['priorto'] = 'La data de la sessió és anterior a la data d\'inici del curs ({$a}), perquè les noves sessions programades abans d\'aquesta data quedaran ocultes (no accessibles). Podeu canviar la data d\'inici del curs en qualsevol moment (consulteu la configuració del curs) per poder accedir a sessions anteriors. <br> <br> Canvieu la data de la sessió o simplement feu clic de nou al botó «Afegeix una sessió» per confirmar.';
$string['privacy:metadata:attendancelog'] = 'Registre d\'assistències d\'usuaris gravat.';
$string['privacy:metadata:attendancesessions'] = 'Sessions a les quals es registrarà l\'assistència.';
$string['privacy:metadata:attendancewarningdone'] = 'Registre de les advertències enviades als usuaris sobre el seu registre d\'assistència.';
$string['privacy:metadata:duration'] = 'Durada de la sessió en segons';
$string['privacy:metadata:groupid'] = 'ID de grup associat a la sessió.';
$string['privacy:metadata:ipaddress'] = 'S\'ha registrat l\'assistència per adreça IP.';
$string['privacy:metadata:lasttaken'] = 'Marca de temps del darrer cop en què es va produir l\'assistència a la sessió.';
$string['privacy:metadata:lasttakenby'] = 'ID d\'usuari de l\'últim usuari que va registrar l\'assistència en aquesta sessió';
$string['privacy:metadata:notifyid'] = 'S\'ha associat amb la ID de l\'avís de la sessió d\'assistència.';
$string['privacy:metadata:remarks'] = 'Comentaris sobre l\'assistència de l\'usuari.';
$string['privacy:metadata:sessdate'] = 'Marca de temps de quan comença la sessió.';
$string['privacy:metadata:sessionid'] = 'ID de la sessió d\'assistència';
$string['privacy:metadata:statusid'] = 'ID de l\'estat d\'assistència de l\'estudiant.';
$string['privacy:metadata:statusset'] = 'Estat configurat per saber quina ID d\'estat pertany.';
$string['privacy:metadata:studentid'] = 'ID de l\'estudiant que tingui assistència registrada.';
$string['privacy:metadata:takenby'] = 'ID d\'usuari de l\'usuari que va registrar l\'assistència de l\'estudiant.';
$string['privacy:metadata:timemodified'] = 'Marca de temps de quan la sessió va ser modificada per última vegada';
$string['privacy:metadata:timesent'] = 'Marca de temps de quan es va enviar l\'avís.';
$string['privacy:metadata:timetaken'] = 'Marca de temps de quan es va registrar l\'assistència per part de l\'estudiant.';
$string['privacy:metadata:userid'] = 'ID d\'usuari per enviar avisos.';
$string['processingfile'] = 'Tramitació de fitxer';
$string['qr_cookie_error'] = 'El QR de la sessió ha caducat.';
$string['qr_pass_wrong'] = 'El codi QR ha caducat, si us plau, torneu a escanejar-lo.';
$string['qrcode'] = 'Codi QR';
$string['qrcodeandpasswordheader'] = 'Escaneja el codi QR que hi ha a continuació o utilitza la contrasenya que es mostra a continuació per registrar la teva assistència';
$string['qrcodeheader'] = 'Escaneja el codi QR a continuació per registrar la teva assistència';
$string['qrcodevalidafter'] = 'segons';
$string['qrcodevalidbefore'] = 'Codi QR vàlid per a:';
$string['randompassword'] = 'Contrasenya aleatòria';
$string['remark'] = 'Observacions per: {a}';
$string['remarks'] = 'Observacions';
$string['repeatasfollows'] = 'Repeteix la sessió anterior de la manera següent';
$string['repeatevery'] = 'Repeteix cada';
$string['repeaton'] = 'Repeteix en';
$string['repeatuntil'] = 'Repeteix fins (inclòs)';
$string['report'] = 'Informe';
$string['reportsessiondate'] = 'Data de la sessió';
$string['reportsessionduration'] = 'Durada de la sessió';
$string['reportsessionlasttaken'] = 'Hora de l\'última sessió (professor)';
$string['required'] = 'Requerit*';
$string['requiredentries'] = 'Els registres temporals sobreescriuen els registres d\'assistència dels participants';
$string['requiredentry'] = 'Guia d\'ajuda de fusió d\'usuari temporal';
$string['requiredentry_help'] = '<p align="center"><b>Àssitència</b></p>
<p align="left"><strong>Fusiona comptes</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Usuari de Moodle</th>
<th>Usuari temporal</th>
<th>Acció</th>
</tr>
<tr>
<td>Dades d\'assistència</td>
<td>Dades d\'assistència</td>
<td>L\'usuari temporal anul·larà l\'usuari de Moodle</td>
</tr>
<tr>
<td>No hi ha dades d\'assistència</td>
<td>Dades d\'assitència</td>
<td>L\'assistència de l\'usuari temporal serà transferida a l\'usuari de Moodle</td>
</tr>
<tr>
<td>Dades d\'assistència</td>
<td>No hi ha dades d\'assistència</td>
<td>S\'eliminarà l\'usuari temporal</td>
</tr>
<tr>
<td>No hi ha dades d\'assistència</td>
<td>NNo hi ha dades d\'assistència</td>
<td>S\'eliminarà l\'usuari temporal</td>
</tr>
</table>

</p>
<p align="left"><strong>L\'usuari temporal serà eliminat en tot els casos després de dur a terme la fusió</strong></p>';
$string['requiresubnet'] = 'Requereix una adreça de xarxa';
$string['requiresubnet_help'] = 'L\'enregistrament d\'assistència es pot restringir a subxarxes particulars especificant una llista separada per comes d\'adreces IP parcials o completes.';
$string['resetcaledarcreate'] = 'Els esdeveniments del calendari s\'han habilitat, però una sèrie de sessions existents no tenen esdeveniments. Voleu crear esdeveniments de calendari per a totes les sessions existents?';
$string['resetcaledardelete'] = 'Els esdeveniments del calendari s\'han desactivat, però una sèrie de sessions existents tenen esdeveniments que s\'han d\'eliminar. Voleu eliminar tots els esdeveniments existents?';
$string['resetcalendar'] = 'Restableix el calendari';
$string['resetdescription'] = 'Recordeu que la supressió de les dades d\'assistència esborrarà la informació de la base de dades. Podeu amagar sessions antigues simplement canviant la data d\'inici del curs!';
$string['resetstatuses'] = 'Restableix estats per defecte';
$string['restoredefaults'] = 'Restaura els valors predeterminats';
$string['resultsperpage'] = 'Resultats per pàgina';
$string['resultsperpage_desc'] = 'Nombre d\'estudiants mostrats per pàgina';
$string['rotateqrcode'] = 'Torna a generar el codi QR rotativament';
$string['rotateqrcode_cleartemppass_task'] = 'Tasca per esborrar les contrasenyes temporals generades per la funció de rotació del codi QR.';
$string['rotateqrcodeexpirymargin'] = 'Gira el marge de caducitat del codi QR/de la contrasenya (segons)';
$string['rotateqrcodeexpirymargin_desc'] = 'Interval de temps (segons) per permetre el codi QR/contrasenya caducat.';
$string['rotateqrcodeinterval'] = 'Gira l\'interval de codi QR/contrasenya (segons)';
$string['rotateqrcodeinterval_desc'] = 'Interval de temps (segons) per girar el codi QR/la contrasenya.';
$string['save'] = 'Desa l\'assistència';
$string['saveandshownext'] = 'Desa i mostra la següent pàgina';
$string['scantime'] = 'Temps d\'escaneig';
$string['scantime_help'] = 'Això permet incloure una marca de temps al fitxer d\'importació: intentarà convertir la marca de temps que s\'ha passat mitjançant la funció PHP strtotime i després utilitzarà la configuració d\'estat d\'assistència per decidir quin estat establirà per a l\'usuari.';
$string['search:activity'] = 'Assistència: informació de l\'activitat';
$string['selectactivity'] = 'Seleccioneu l\'activitat';
$string['session'] = 'Sessió';
$string['session_help'] = 'Sessió';
$string['sessionadded'] = 'Sessió afegida correctament';
$string['sessionalreadyexists'] = 'Ja existeix una sessió per aquesta data';
$string['sessiondate'] = 'Data de sessió';
$string['sessiondays'] = 'Dies de sessió';
$string['sessiondeleted'] = 'Sessió esborrada correctament';
$string['sessiondescription'] = 'Descripció de la sessió';
$string['sessionduplicate'] = 'Hi ha una sessió duplicada per al curs: assistència a {$ a->course}: {$ a->activity}';
$string['sessionexist'] = 'La sessió no s\'ha afegit (ja existeix)';
$string['sessiongenerated'] = 'S\'ha generat una sessió amb èxit';
$string['sessions'] = 'Sessions';
$string['sessionsallcourses'] = 'Tots els cursos';
$string['sessionsbyactivity'] = 'Exemple d\'assistència';
$string['sessionsbycourse'] = 'Curs';
$string['sessionsbydate'] = 'Setmana';
$string['sessionscompleted'] = 'Sessions cursades';
$string['sessionscurrentcourses'] = 'Curs actual';
$string['sessionsgenerated'] = 'Sessions generades correctament';
$string['sessionsids'] = 'IDs de les sessions:';
$string['sessionsnotfound'] = 'No hi ha sessions en l\'interval de temps seleccionat';
$string['sessionstartdate'] = 'Data d\'inici de la sessió';
$string['sessionstotal'] = 'Nombre total de sessions';
$string['sessionsupdated'] = 'Sessions actualitzades';
$string['sessiontype'] = 'Tipus de sessió';
$string['sessiontype_help'] = 'Podeu afegir sessions per a tots els estudiants o per a un grup d\'estudiants. La possibilitat d\'afegir diferents tipus de sessions depèn del mode d\'activitats en grup.

* Si el mode de grup és «Sense grups» només podeu afegir sessions per a tots els estudiants.
* Si el mode de grup és «Grups visibles» podeu afegir ambdós tipus de sessions.
* Si el mode de grup és «Grups separats» només podeu afegir sessions per a un grup d\'estudiants.';
$string['sessiontypeshort'] = 'Tipus';
$string['sessionunknowngroup'] = 'Una sessió especifica grup/s desconegut/s: {$a}';
$string['sessionupdated'] = 'Sessió actualitzada correctament';
$string['set_by_student'] = 'Autoregistrat (estudiant/a)';
$string['setallstatuses'] = 'Estableix l\'estat per a tots els usuaris';
$string['setallstatusesto'] = 'Estableix l\'estat per a tots els usuaris a  «{$a}»';
$string['setperiod'] = 'Temps especificat en minuts per alliberar la IP';
$string['settings'] = 'Editar estats';
$string['setunmarked'] = 'Estableix automàticament quan no està marcat';
$string['setunmarked_help'] = 'Si està habilitat a la sessió, estableix aquest estat si un estudiant no ha marcat la seva pròpia assistència.';
$string['showdefaults'] = 'Mostra valors predeterminats';
$string['showduration'] = 'Durada de la sessió';
$string['showextrauserdetails'] = 'Mostra detalls d\'usuari addicionals';
$string['showqrcode'] = 'Mostra codi QR';
$string['showsessiondescriptiononreport'] = 'Mostra la descripció de la sessió a l\'informe';
$string['showsessiondescriptiononreport_desc'] = 'Mostra la descripció de la sessió a la llista d\'informes d\'assistència.';
$string['showsessiondetails'] = 'Mostra els detalls de la sessió';
$string['somedisabledstatus'] = 'S\'han eliminat algunes opcions a mesura que la sessió ha començat).';
$string['sortedgrid'] = 'Graella ordenada';
$string['sortedlist'] = 'Llista ordenada';
$string['startofperiod'] = 'Inici del període';
$string['starttime'] = 'Hora d\'inici';
$string['status'] = 'Estat';
$string['statusall'] = 'tots';
$string['statusdeleted'] = 'Estat esborrat';
$string['statuses'] = 'Estats';
$string['statusset'] = 'Estat configurat {$a}';
$string['statussetsettings'] = 'Estats';
$string['statustotalcount'] = 'Estat {$a} - Recompte total';
$string['statustotalcountcurrentweek'] = 'Estat {$a}: recompte total de la setmana actual';
$string['statustotalcountpreviousweek'] = 'Estat {$a}: recompte total de la setmana anterior';
$string['statusunselected'] = 'no seleccionat';
$string['strftimedm'] = '%d.%m';
$string['strftimedmy'] = '%d.%m.%Y';
$string['strftimedmyhm'] = '%d.%m.%Y %H.%M';
$string['strftimedmyw'] = '%d.%m.%y (%a)';
$string['strftimehm'] = '%H:%M';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentid'] = 'ID de l\'estudiant';
$string['studentmarked'] = 'S\'ha registrat la vostra assistència en aquesta sessió.';
$string['studentmarking'] = 'Enregistrament de l\'estudiant';
$string['studentpassword'] = 'Contrasenya de l\'estudiant';
$string['studentrecordingexpanded'] = 'Enregistrament expandit de l\'estudiant';
$string['studentrecordingexpanded_desc'] = 'Mostra les configuracions d\'«Enregistrament de l\'estudiant» com a expandides per defecte en crear sessions noves.';
$string['studentscanmark'] = 'Permet que els alumnes registrin l\'assistència personalment';
$string['studentscanmark_desc'] = 'Si està marcada, els professors podran permetre que els estudiants marqui la seva pròpia assistència.';
$string['studentscanmark_help'] = 'Si està marcada, els estudiants podran canviar el seu propi estat d\'assistència per a la sessió.';
$string['studentscanmarksessiontime'] = 'Els alumnes registren l\'assistència durant el temps de la sessió';
$string['studentscanmarksessiontime_desc'] = 'Si està marcada, els estudiants només poden registrar la seva assistència durant la sessió.';
$string['studentscanmarksessiontimeend'] = 'Final de sessió (minuts)';
$string['studentscanmarksessiontimeend_desc'] = 'Si la sessió no té un temps de finalització, quants minuts hauria d\'estar disponible la sessió perquè els estudiants registrin la seva assistència.';
$string['studentsearlyopentime'] = 'Obertura anticipada de la sessió per registrar l\'assistència';
$string['studentsearlyopentime_help'] = 'Això permet als professors obrir la sessió amb antelació, permetent registrar l\'assistència abans de l\'hora real d\'inici.';
$string['submit'] = 'Presentar';
$string['submitattendance'] = 'Tramet l\'assistència';
$string['submitattendancefuture'] = 'Informar d\'una futura absència';
$string['submitpassword'] = 'Envieu la contrasenya';
$string['subnet'] = 'Subxarxa';
$string['subnetactivitylevel'] = 'Permet la configuració de subxarxa a nivell d\'activitat';
$string['subnetactivitylevel_desc'] = 'Si està habilitat, els professors poden substituir la subxarxa predeterminada en el nivell d\'activitat quan es crea una assistència. En cas contrari, s\'utilitzarà el lloc predeterminat quan es crea una sessió.';
$string['subnetwrong'] = 'L\'assistència només es pot registrar des de determinats llocs, i aquest ordinador no es troba a la llista de permisos.';
$string['summary'] = 'Resum';
$string['tablerenamefailed'] = 'Ha fallat el canvi de nom de la antiga taula attforblock a attendance';
$string['tactions'] = 'Acció';
$string['takeattendance'] = 'Registra l\'assistència';
$string['takensessions'] = 'Sessions registrades';
$string['tcreated'] = 'Creat';
$string['tempaddform'] = 'Afegeix un usuari temporal';
$string['tempexists'] = 'Ja hi ha un usuari temporal amb aquesta adreça de correu electrònic';
$string['temptable'] = 'Llista d\'usuaris temporals';
$string['tempuser'] = 'Usuari temporal';
$string['tempusermerge'] = 'Fusiona usuari temporal';
$string['tempusers'] = 'Usuaris temporals';
$string['tempusersedit'] = 'Edita usuaris temporals';
$string['tempuserslist'] = 'Usuaris temporals';
$string['thirdpartyemails'] = 'Notifica altres usuaris';
$string['thirdpartyemails_help'] = 'Llista d\'altres usuaris que seran notificats. (requereix la capacitat mod / attendance:viewreports)';
$string['thirdpartyemailsubject'] = 'Advertència d\'assistència';
$string['thirdpartyemailtext'] = '{$a->firstname} {$a->lastname} assistència dins {$a->coursename} {$a->aname} és menor que {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = 'Ho esteu rebent perquè el professor d\'aquest curs ha afegit el vostre correu electrònic a la llista del destinatari';
$string['thiscourse'] = 'Aquest curs';
$string['time'] = 'Temps';
$string['timeahead'] = 'No es poden crear sessions múltiples que superin un any, ajusteu les dates d\'inici i finalització.';
$string['timemodified'] = 'Temps modificat';
$string['timetaken'] = 'Temps de registre de l\'assistència';
$string['to'] = 'a:';
$string['todate'] = 'fins a';
$string['totalnumsessions'] = 'Número total de sessions';
$string['triggered'] = 'Notificat primerament';
$string['tuseremail'] = 'Correu electrònic';
$string['tusername'] = 'Nom complet';
$string['ungraded'] = 'Sessions sense qualificació';
$string['unknowngroup'] = 'Grup desconegut';
$string['unknownstatus'] = 'Identificador d\'estat desconegut: {$a}';
$string['update'] = 'Actualitza';
$string['updateattendance'] = 'Actualitzar l\'assistència';
$string['uploadattendance'] = 'Puja l\'assistència amb un fitxer CSV';
$string['usedefaultsubnet'] = 'Ús per defecte';
$string['usemessageform'] = 'o utilitzeu el següent formulari per enviar un missatge als estudiants seleccionats';
$string['userexistingstatus'] = 'La teva assistència ja s\'ha marcat com a: <strong>{$a}</strong>, utilitza el formulari següent per canviar-ho si cal.';
$string['userexists'] = 'Ja hi ha un usuari real amb aquesta adreça de correu electrònic';
$string['users'] = 'Usuaris per exportar';
$string['usersessiongrade'] = 'Qualificació de la sessió per usuari';
$string['usestatusset'] = 'S\'ha configurat l\'estat';
$string['variable'] = 'variable';
$string['variablesupdated'] = 'Variables actualitzades correctament';
$string['versionforprinting'] = 'versió per imprimir';
$string['viewmode'] = 'Mode de visualització';
$string['warnafter'] = 'Nombre de sessions cursades abans de l\'avís';
$string['warnafter_help'] = 'Les advertències només s\'activaran quan l\'usuari hagi registrat l\'assistència en almenys aquest nombre de sessions.';
$string['warningdeleted'] = 'S\'ha eliminat l\'avís';
$string['warningdesc'] = 'Aquestes advertències s\'afegiran automàticament a qualsevol nova activitat d\'assistència. Si s\'activa més d\'una advertència al mateix temps, només s\'enviarà l\'avís amb el llindar d\'advertència més baix.';
$string['warningdesc_course'] = 'Els llindars d\'avís aquí afectats afecten l\'informe d\'absentisme i permeten que els estudiants i tercers es notifiquin. Si s\'activa més d\'una advertència al mateix temps, només s\'enviarà l\'avís amb el llindar d\'advertència més baix.';
$string['warningfailed'] = 'No podeu crear una advertència que utilitzi el mateix percentatge i nombre de sessions.';
$string['warningpercent'] = 'Fes un advertiment si el percentatge cau per sota';
$string['warningpercent_help'] = 'Es generarà una advertència quan el percentatge global caigui per sota d\'aquest número.';
$string['warnings'] = 'Configura l\'advertència';
$string['warningthreshold'] = 'Llindar d\'advertència';
$string['warningupdated'] = 'Advertències actualitzades';
$string['week'] = 'setmana(es)';
$string['weekcommencing'] = 'Setmana que comença';
$string['weeks'] = 'Setmanes';
$string['youcantdo'] = 'No podeu fer res';
