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
 * Strings for component 'block_course_overview_campus', language 'ca', version '3.11'.
 *
 * @package     block_course_overview_campus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['academicyear_desc'] = 'Any acadèmic (el calendari anual no està dividit)';
$string['activityoverview'] = 'En teniu {$a} que necessiten la vostra atenció';
$string['all'] = 'Tots';
$string['appearancesettingheading'] = 'Aparença';
$string['blocktitle'] = 'Títol del bloc';
$string['blocktitle_desc'] = 'Aquest nom de pantalla es mostra com el títol del bloc';
$string['category'] = 'Categoria mare';
$string['categorycoursefilter'] = 'Activa el filtre de categoria mare';
$string['categorycoursefilter_desc'] = 'Permet que els usuaris filtrin cursos per categoria mare';
$string['categorycoursefilterdisplayname'] = 'Nom de visualització per al filtre de categoria mare';
$string['categorycoursefilterdisplayname_desc'] = 'Aquest nom de visualització es mostra per sobre del filtre de categoria mare<br /> <em>Aquesta funció només es processa quan s\'activa el filtre de categoria mare</em>';
$string['categorycoursefiltersettingheading'] = 'Filtre de categoria mare: activació del filtre';
$string['course_overview_campus:addinstance'] = 'Afegeix un bloc nou de llista dels cursos del campus';
$string['course_overview_campus:myaddinstance'] = 'Afegeix un bloc nou de llista dels cursos del campus al tauler';
$string['defaultterm'] = 'Utilitza el terme per defecte';
$string['defaultterm_desc'] = 'Si la persona usuària no ha seleccionat un període per filtrar períodes, el període és escollit per ella. La primera tria és el període actual. Si la persona usuària no està inscrita a cap dels cursos del període actual, l\'anterior més proper és l\'escollit.<br /><em> Aquesta funció només es processa quan el filtre periode està activat.';
$string['enablehidecourses'] = 'Activa l\'ocultació de cursos';
$string['enablehidecourses_desc'] = 'Activa l\'ocultació de cursos, que permet que els usuaris amaguin els cursos de la llista general de cursos';
$string['firstrowcoursename'] = 'Primera fila: Estil del nom del curs';
$string['firstrowcoursename_desc'] = 'Mostra el nom complet del curs o el nom curt del curs a la primera fila de l\'entrada de la llista general de cursos';
$string['hiddencourses'] = 'Cursos ocults';
$string['hidecourse'] = 'Oculta el curs a la llista general de cursos';
$string['hidecoursessettingheading'] = 'Oculta cursos';
$string['listentriessettingheading'] = 'Llista general de cursos: Entrades';
$string['managehiddencourses'] = 'Gestiona cursos ocults';
$string['mergehomonymouscategories'] = 'Combina categories mare homònimes';
$string['mergehomonymouscategories_desc'] = 'Si hi ha diversos cursos amb categories mare diferents, però amb el mateix nom de categoria mare, el filtre de categoria mare s\'emplenarà amb múltiples categories amb el mateix nom per defecte. Això pot ser confús per a l\'usuari. Si voleu combinar totes les categories mare homònimes en una categoria quan s\'utilitza el filtre de categories mare, activeu aquest paràmetre <br /> <em>Aquesta funció només es processa quan s\'activa el filtre de categoria mare</em>';
$string['mergehomonymouscategoriessettingheading'] = 'Filtre de categoria mare: combina categories mare homònimes';
$string['nocourses'] = 'Actualment, no esteu inscrit/a en cap curs.';
$string['noteacher'] = 'No s\'ha inscrit cap professor';
$string['noteachertext'] = 'Text quan no hi ha cap professor inscrit';
$string['noteachertext_desc'] = 'Aquest text es mostra en comptes dels noms dels professors si no n\'hi ha cap d\'inscrit al curs. Si no voleu que aparegui un text de marcador de posició, esborreu aquest text aquí <br /> <em>Aquesta funció només es processa quan s\'activa l\'opció de mostrar el nom del professor</em>';
$string['ordersettingheading'] = 'Llista general de cursos: Ordre';
$string['other'] = 'Altres';
$string['pluginname'] = 'Resum de cursos al campus';
$string['prioritizemyteachedcourses'] = 'Dóna prioritat als cursos on jo ensenyo';
$string['prioritizemyteachedcourses_desc'] = 'Els cursos en què la persona usuària té un paper docent es mostren primer a la llista general de cursos';
$string['secondrowhideonphones'] = 'Segona fila: oculta els telèfons';
$string['secondrowhideonphones_desc'] = 'Oculta la segona fila amb telèfons mòbils per estalviar espai';
$string['secondrowshowcategoryname'] = 'Segona fila: mostra el nom de la categoria mare';
$string['secondrowshowcategoryname_desc'] = 'Mostra el nom de la categoria mare del curs en una segona fila de l\'entrada de la llista general de cursos';
$string['secondrowshowshortname'] = 'Segona fila: Mostra\'n nom curt';
$string['secondrowshowshortname_desc'] = 'Mostra el nom curt del curs en una segona fila de l\'entrada de la llista general de cursos';
$string['secondrowshowteachername'] = 'Segona fila: Mostra el nom del professor';
$string['secondrowshowteachername_desc'] = 'Mostra el nom dels professors en la segona fila de l\'entrada de la llista general de cursos. Si hi ha més d\'un professor, els noms s\'ordenaran primer per <a href="/admin/roles/manage.php">ordre global de rols</a> i després pels cognoms dels professors';
$string['secondrowshowteachernamestyle'] = 'Segona fila: estil del nom del professor';
$string['secondrowshowteachernamestyle_desc'] = 'Defineix com es mostraran els noms dels professors a la segona fila de l\'entrada de la llista general de cursos<br /><em>Aquesta funció sols es processa quan s\'activa la visualització del nom del professor</em>';
$string['secondrowshowtermname'] = 'Segona fila: Mostra el nom del període';
$string['secondrowshowtermname_desc'] = 'Mostra el nom del període del curs en una segona fila de l\'entrada de la llista general de cursos';
$string['secondrowshowtoplevelcategoryname'] = 'Segona fila: mostra el nom de la categoria superior';
$string['secondrowshowtoplevelcategoryname_desc'] = 'Mostra el nom de la categoria superior de cursos a la segona fila de l\'entrada de la llista general de cursos.';
$string['semester_desc'] = 'Semestre (el calendari anual es divideix en dos períodes)';
$string['settingspage_categoryfilter'] = 'Filtre de categoria mare';
$string['settingspage_courseoverviewlist'] = 'Llista general de cursos';
$string['settingspage_general'] = 'General';
$string['settingspage_hidecourses'] = 'Oculta cursos';
$string['settingspage_teacherfilter'] = 'Filtre de professor';
$string['settingspage_teacherroles'] = 'Rols dels professors';
$string['settingspage_termfilter'] = 'Filtre de períodes';
$string['settingspage_toplevelcategoryfilter'] = 'Filtre de categoria superior';
$string['showcourse'] = 'Mostra el curs';
$string['stopmanaginghiddencourses'] = 'Aturar la gestió dels cursos ocults.';
$string['submitfilter'] = 'Filtrar els meus cursos!';
$string['teachercoursefilter'] = 'Activa el filtre de professor';
$string['teachercoursefilter_desc'] = 'Permet que les persones usuàries filtrin cursos per professor';
$string['teachercoursefilterdisplayname'] = 'Mostra el nom del filtre de professor';
$string['teachercoursefilterdisplayname_desc'] = 'Aquest nom es mostra per sobre del filtre de professor<br /> <em>Aquesta funció només es processa quan s\'activa el filtre de professort</em>';
$string['teachercoursefiltersettingheading'] = 'Filtre de professor: Filtre d\'activació';
$string['teachernamestylefirstname'] = 'Nom';
$string['teachernamestylefullname'] = 'Nom i cognom';
$string['teachernamestylefullnamedisplay'] = 'L\'estil del nom del professor d\'acord amb el paràmetre de Moodle «fullnamedisplay</em>» (actualment configurat com a «{$a}»)';
$string['teachernamestylelastname'] = 'Cognom';
$string['teacherroles'] = 'Els rols del professor';
$string['teacherroles_desc'] = 'Definiu els rols que aquest connector ha de gestionar com els rols del professor <br /> <em>Aquesta funció només es processa quan s\'activa l\'opció de mostrar el nom del professors, quan s\'activa el filtre de professor o quan s\'activa la priorització de cursos en què jo ensenyo</em>';
$string['teacherroleshidesuspended'] = 'Oculta els professors no inscrits';
$string['teacherroleshidesuspended_desc'] = 'Quan se cerquen professors amb els rols especificats, no sols es comprova si un professor té un dels rols determinats al curs, sinó també si la inscripció és activa (per exemple, la inscripció del professor en el curs està activa + la data actual es troba dins de les dates d\'inici i fi del mètode d\'inscripció  del professor + mètode d\'inscripció del professor està habilitat al curs). Els professors amb una inscripció al curs no activa no es consideraran professors del curs.<br /><em> Aquesta funció sols es processa quan s\'activa el filtre de professor. </em><br /><em>AVÍS: Si activeu aquesta funció, la càrrega de la base de dades per crear la llista de cursos s\'incrementarà a causa de les comprovacions addicionals. Per això, habiliteu aquesta funció sols si la necessiteu.</em>';
$string['teacherrolesparent'] = 'Inclou els rols dels professors en un context pare';
$string['teacherrolesparent_desc'] = 'Quan se cerquen professors amb rols de professors específics, s\'inclouen els professors que tenen el seu rol assignat en un context pare (categoria del curs o nivell del sistema)<br /><em>Aquesta funció sols es processa quan està activat que es mostri el nom del professor o quan el filtre de professor està actiu.</em><br /><em> AVÍS: Si poseu «NO» o «Depèn de la capacitat de l\'usuari moodle/course:reviewotherusers» la funció «Prioritza el cursos en què ensenyo» també hi estarà influenciada i no prioritzarà els cursos en què l\'usuari tingui el rol de professor assignat en contextos pare.</em>';
$string['teacherrolesparentcapability'] = 'Depèn de la capacitat dels usuaris moodle/course:reviewotheruser';
$string['teacherrolessettingheading'] = 'Els rols del professor';
$string['term'] = 'Període';
$string['term1'] = 'Període 1';
$string['term1name'] = 'Nom del període 1';
$string['term1name_desc'] = 'Nom descriptiu per al període 1; canvieu-ne el nom d\'acord amb la terminologia del vostre campus (o deixeu-lo en blanc si voleu utilitzar només números anuals en mode d\'any acadèmic) <br /> <em>Aquesta funció només es processa quan s\'activa el filtre de professor</em>';
$string['term1startday'] = 'Dia d\'inici del període 1';
$string['term1startday_desc'] = 'Dia i mes d\'inici del període 1<br /> <em>Aquesta funció només es processa quan s\'activa el filtre per-íode</em>';
$string['term2'] = 'Període 2';
$string['term2name'] = 'Nom del període 2';
$string['term2name_desc'] = 'Nom descriptiu per al període 2; canvieu-ne el nom d\'acord amb la terminologia del vostre campus (o deixeu-lo en blanc si voleu utilitzar només números anuals en mode d\'any acadèmic) <br /> <em>Aquesta funció només es processa quan s\'activa el filtre de professor</em>';
$string['term2startday'] = 'Dia d\'inici del període 2';
$string['term2startday_desc'] = 'Dia i mes d\'inici del període 2<br /> <em>Aquesta funció només es processa quan s\'activa el filtre per-íode</em>';
$string['term3'] = 'Període 3';
$string['term3name'] = 'Nom del període 3';
$string['term3name_desc'] = 'Nom descriptiu per al període 3; canvieu-ne el nom d\'acord amb la terminologia del vostre campus (o deixeu-lo en blanc si voleu utilitzar només números anuals en mode d\'any acadèmic) <br /> <em>Aquesta funció només es processa quan s\'activa el filtre de professor</em>';
$string['term3startday'] = 'Dia d\'inici del període 3';
$string['term3startday_desc'] = 'Dia i mes d\'inici del període 3<br /> <em>Aquesta funció només es processa quan s\'activa el filtre de període i quan el període es configura com a «Trimestral» o «Trimestre»</em>';
$string['term4'] = 'Període 4';
$string['term4name'] = 'Nom del període 4';
$string['term4name_desc'] = 'Nom descriptiu per al període 4; canvieu-ne el nom d\'acord amb la terminologia del vostre campus (o deixeu-ho en blanc si voleu utilitzar només números anuals en mode d\'any acadèmic)<br /> <em>Aquesta funció només es processa quan s\'activa el filtre de període i quan el període es configura com a «Trimestre»</em>';
$string['term4startday'] = 'Dia d\'inici del període 4';
$string['term4startday_desc'] = 'Dia i mes d\'inici del període 4<br /> <em>Aquesta funció només es processa quan s\'activa el filtre de període i quan el període es configura com a «Trimestre»</em>';
$string['termbehavioursettingheading'] = 'Filtre període: Comportament període';
$string['termcoursefilter'] = 'Activa filtre període';
$string['termcoursefilter_desc'] = 'Permet les persones usuàries que filtrin per període';
$string['termcoursefilterdisplayname'] = 'Mostra nom per al filtre període';
$string['termcoursefilterdisplayname_desc'] = 'Aquest nom es mostra per sobre del filtre període <br /> <em>Aquesta funció només es processa quan s\'activa el filtre període</em>';
$string['termcoursefiltersettingheading'] = 'Filtre període: Activació del filtre';
$string['termmode'] = 'Mode període';
$string['termmode_desc'] = 'Ajusta el mode de període per al filtre període <br /> <em>Aquesta funció només es processa quan s\'activa el filtre període</em>';
$string['termnamesettingheading'] = 'Filtre període: Noms del període';
$string['termsettingerror'] = 'Les dates de configuració del període són incoherents. Si us plau, verifiqueu que el període 2 comença després del període 1 i així successivament. El filtre de període no estarà disponible per als usuaris fins que ho corregiu.';
$string['termsettingheading'] = 'Filtre període: Definició del període';
$string['termyearpos'] = 'Posició del període dins de l\'any';
$string['termyearpos_desc'] = 'Defineix si l\'any del període ha de ser afegit com a sufix o prefix al nom del període <br /> <em>Aquesta funció només es processa quan s\'activa el filtre de professor</em>';
$string['termyearposprefixnospace_desc'] = 'L\'any s\'agrega com a prefix al nom del període sense espai (Exemple: "2013S")';
$string['termyearposprefixspace_desc'] = 'L\'any s\'agrega com a prefix al nom del període amb l\'espai (Exemple: "2013 període estiu)';
$string['termyearpossuffixnospace_desc'] = 'L\'any s\'agrega com a sufix al nom del període sense espai (Exemple: "S2013")';
$string['termyearpossuffixspace_desc'] = 'L\'any s\'agrega com a sufix al nom del període amb l\'espai (Exemple: "període estiu 2013)';
$string['termyearseparation'] = 'Nom del segon període separació de l\'any';
$string['termyearseparation_desc'] = 'Si l\'interval del període inclou el dia de Cap d\'Any, definiu com s\'ha de separar aquest segon any del primer<br /><em>Aquesta funció només es processa quan s\'activa el filtre de període</em>';
$string['termyearseparationhyphen_desc'] = 'Separa amb un guió (Exemple: "2013-2014")';
$string['termyearseparationnosecondyear_desc'] = 'No afegeixis el 2n any (Exemple:"2013")';
$string['termyearseparationslash_desc'] = 'Separa amb una barra (Exemple:"2013/2014")';
$string['termyearseparationunderscore_desc'] = 'Separa amb un guió baix (Exemple:"2013_2014")';
$string['tertial_desc'] = 'Trimestral (el calendari anual es divideix en tres períodes)';
$string['timelesscourses'] = 'Cursos sense terminis';
$string['timelesscourses_desc'] = 'Activa el suport per als cursos sense terminis al filtre de període. Els cursos sense terminis apareixen no associats a cap període específic<br /> <em>Aquesta funció només es processa quan s\'activa el filtre de període</em>';
$string['timelesscoursesname'] = 'Nom per als cursos sense terminis';
$string['timelesscoursesname_desc'] = 'Aquest nom es mostra al filtre període per a cursos que són intemporals <br /> <em>Aquesta funció només es processa quan s\'activa el filtre període i quuan s\'activen els cursos sense terminis</em>';
$string['timelesscoursessettingheading'] = 'Filtre període: Cursos sense terminis';
$string['timelesscoursesthreshold'] = 'Llindar dels cursos sense terminis';
$string['timelesscoursesthreshold_desc'] = 'Defineix els cursos amb un any d\'inici abans (i no és igual a) com a cursos sense terminis <br /> <em>Aquesta funció només es processa quan s\'activa el filtre període i quan els cursos sense terminis s\'activen</em>';
$string['toplevelcategory'] = 'Categoria superior';
$string['toplevelcategorycoursefilter'] = 'Activa el filtre de categoria superior';
$string['toplevelcategorycoursefilter_desc'] = 'Permet que els usuaris filtrin cursos per categoria superior';
$string['toplevelcategorycoursefilterdisplayname'] = 'Mostra el nom del filtre de categoria superior';
$string['toplevelcategorycoursefilterdisplayname_desc'] = 'La visualització del nom es mostra sobre el filtre de categoria superior<br /><em>Aquesta funció sols es processa quan s\'activa el filtre de categoria superior</em>';
$string['toplevelcategorycoursefiltersettingheading'] = 'Filtre de categoria superior: activació del filtre';
$string['trimester_desc'] = 'Quadrimestral (el calendari anual es divideix en quatre períodes)';
$string['youhave'] = 'Teniu';
