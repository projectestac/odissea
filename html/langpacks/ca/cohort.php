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
 * Strings for component 'cohort', language 'ca', version '4.1'.
 *
 * @package     cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Afegeix una cohort nova';
$string['allcohorts'] = 'Totes les cohorts';
$string['anycohort'] = 'Qualsevol';
$string['assign'] = 'Assigna';
$string['assigncohorts'] = 'Assigna membres a la cohort';
$string['assignto'] = 'Membres de la cohort \'{$a}';
$string['backtocohorts'] = 'Torna a cohorts';
$string['bulkadd'] = 'Afegeix a la cohort';
$string['bulknocohort'] = 'No s\'han trobat cohorts disponibles';
$string['categorynotfound'] = 'No s\'ha trobat la categoria <b>{$a}</b> o bé no teniu permís per per a crear-hi una cohort. Es farà servir el context per defecte.';
$string['cohort'] = 'Cohort';
$string['cohorts'] = 'Cohorts';
$string['cohortsin'] = 'Cohorts disponibles: {$a}';
$string['component'] = 'Font';
$string['contextnotfound'] = 'No s\'ha trobat la categoria <b>{$a}</b> o bé no teniu permís per per a crear-hi una cohort. Es farà servir el context per defecte.';
$string['csvcontainserrors'] = 'S\'han trobat errors al fitxer CSV. Mireu els detalls a sota.';
$string['csvcontainswarnings'] = 'S\'han trobat alertes al fitxer CSV. Mireu els detalls a sota.';
$string['csvextracolumns'] = 'La/les columna/es <b>{$a}</b> s\'ignorarà/an.';
$string['currentusers'] = 'Usuaris actuals';
$string['currentusersmatching'] = 'Usuaris actuals que concorden';
$string['defaultcontext'] = 'Context per defecte';
$string['delcohort'] = 'Suprimeix cohort';
$string['delconfirm'] = 'De veritat voleu suprimir la cohort  \'{$a}\'?';
$string['description'] = 'Descripció';
$string['displayedrows'] = 'Es mostren {$a->displayed} files d\'un total de {$a->total}.';
$string['duplicateidnumber'] = 'Ja existeix una cohort amb el mateix nombre ID';
$string['editcohort'] = 'Edita la cohort';
$string['editcohortidnumber'] = 'Edita l\'ID de la cohort';
$string['editcohortname'] = 'Edita el nom de la cohort';
$string['eventcohortcreated'] = 'S\'ha creat la cohort';
$string['eventcohortdeleted'] = 'S\'ha suprimit la cohort';
$string['eventcohortmemberadded'] = 'S\'ha afegit un usuari a la cohort';
$string['eventcohortmemberremoved'] = 'S\'ha tret un usuari de la cohort';
$string['eventcohortupdated'] = 'S\'ha actualitzat la cohort';
$string['external'] = 'Cohort externa';
$string['idnumber'] = 'ID de la cohort';
$string['memberscount'] = 'Mida de la cohort';
$string['name'] = 'Nom';
$string['namecolumnmissing'] = 'S\'ha detectat un problema amb el format del fitxer CSV. Comproveu que inclou els noms de les columnes.';
$string['namefieldempty'] = 'El nom del camp no pot estar buit';
$string['newidnumberfor'] = 'Nou número ID per la cohort {$a}';
$string['newnamefor'] = 'Nou nom per la cohort {$a}';
$string['nocomponent'] = 'Creat de forma manual';
$string['potusers'] = 'Usuaris potencials';
$string['potusersmatching'] = 'S\'estan cercant usuaris potencials';
$string['preview'] = 'Previsualització';
$string['removeuserwarning'] = 'Treure usuaris d\'una cohort pot esdevenir una desmatriculació d\'usuaris de múltiples cursos, que inclou l\'eliminació de la configuració de l\'usuari, les qualificacions, la pertinença a grups i una altra informació de l\'usuari dels cursos afectats.';
$string['search'] = 'Cerca';
$string['searchcohort'] = 'Cerca cohort';
$string['selectfromcohort'] = 'Selecciona membres de la cohort';
$string['systemcohorts'] = 'Cohorts de sistema';
$string['unknowncohort'] = 'Cohort desconeguda ({$a})!';
$string['uploadcohorts'] = 'Carrega cohorts';
$string['uploadcohorts_help'] = 'Les cohorts poden actualitzar-se mitjançant fitxers de text. El format del fitxer ha de ser com segueix:

* Cada línia conté un registre.
* Cada registre és una sèrie de dades separades per comes (o altres delimitadors).
* El primer registre conté una llista de noms de camp que defineixen el format de la resta del fitxer.
* Cal posar nom al nom del camp.
* Alguns noms de camp opcionals són:  idnumber, description, descriptionformat, visible, context, category, category_id, category_idnumber, category_path';
$string['uploadedcohorts'] = 'S\'han carregat {$a} cohorts';
$string['useradded'] = 'Usuari afegit a la cohort «{$a}»';
$string['visible'] = 'Visible';
$string['visible_help'] = 'Els usuaris amb la capacitat «moodle/cohort:view» en el context de cohort poden visualitzar qualsevol cohort.<br />
Les cohorts visibles també poden ser visualitzades pels usuaris dels cursos on pertanyen.';
