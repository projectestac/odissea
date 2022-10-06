<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_numerical', language 'ca', branch 'MOODLE_38_STABLE'
 *
 * @package   qtype_numerical
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Error acceptat';
$string['addmoreanswerblanks'] = 'Nombre d\'espais en blanc addicionals per a opcions de resposta: {no}';
$string['addmoreunitblanks'] = 'Espais per a {no} unitats més';
$string['answercolon'] = 'Resposta:';
$string['answererror'] = 'Error';
$string['answermustbenumberorstar'] = 'La resposta ha de ser un nombre, per exemple -1,234 o 3e8, o \'*\'.';
$string['answerno'] = 'Resposta {$a}';
$string['decfractionofquestiongrade'] = 'com una fracció decimal (0-1) de la qualificació de la pregunta';
$string['decfractionofresponsegrade'] = 'com una fracció decimal (0-1) de la qualificació de la resposta';
$string['decimalformat'] = 'decimals';
$string['editableunittext'] = 'la caixa d\'entrada de text';
$string['errornomultiplier'] = 'Heu d\'especificar un multiplicador per a aquesta unitat.';
$string['errorrepeatedunit'] = 'No podeu tenir dues unitats amb el mateix nom.';
$string['geometric'] = 'Geomètric';
$string['invalidnumber'] = 'Cal que introduïu un nombre vàlid.';
$string['invalidnumbernounit'] = 'Cal que introduïu un nombre vàlid. No incloeu unitats en la resposta.';
$string['invalidnumericanswer'] = 'Una de les respostes que heu introduït no és un nombre vàlid.';
$string['invalidnumerictolerance'] = 'Una de les toleràncies que heu introduït no és un nombre vàlid.';
$string['leftexample'] = 'ESQUERRA com a $1,00 o £1,00';
$string['manynumerical'] = 'Les unitats són opcionals. Si introduïu una unitat, s\'utilitza per convertir la resposta a la Unitat 1 abans de qualificar.';
$string['multiplier'] = 'Multiplicador';
$string['nominal'] = 'Nominal';
$string['noneditableunittext'] = 'Text NO editable de la Unitat No.1';
$string['nonvalidcharactersinnumber'] = 'Caràcters NO vàlids al número';
$string['notenoughanswers'] = 'Heu d\'introduir almenys una resposta.';
$string['nounitdisplay'] = 'No es qualifiquen les unitats';
$string['numericalmultiplier'] = 'Multiplicador';
$string['numericalmultiplier_help'] = 'El multiplicador és el factor pel qual es multiplicarà la resposta numèrica correcta.

La primera unitat (Unitat 1) té un multiplicador per defecte d\'1. Així, si la resposta numèrica correcta és 5500 i establiu W com a unitat a la Unitat 1, que té l\'1 com a multiplicador per defecte, aleshores la resposta correcta és 5500 W.

Si afegiu la unitat kW amb un multiplicador de 0.001, això afegirà una resposta correcta de 5.5 kW. Això significa que tant la resposta 5500W com la de 5.5kW es marcaran com a correctes.

Fixeu-vos que també es multiplica l\'error acceptat, per la qual cosa un error acceptat de 100W esdevindrà un error de 0.1kW.';
$string['oneunitshown'] = 'La unitat 1 és mostrarà de forma automàtica a la vora de la caixa de respostes';
$string['onlynumerical'] = 'No s\'utilitzen per a res les unitats. Només es qualificarà la RESPOSTA NUMÈRICA';
$string['pleaseenterananswer'] = 'Introduïu una resposta.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Introduïu una resposta sense utilitzar el separador de milers ({$a}).';
$string['pluginname'] = 'Numèrica';
$string['pluginnameadding'] = 'S\'està afegint una pregunta numèrica';
$string['pluginnameediting'] = 'S\'està editant una pregunta numèrica';
$string['pluginname_help'] = 'Des del punt de vista de l\'estudiant, una pregunta numèrica és com una pregunta de resposta breu. La diferència és que les respostes numèriques poden permetre un cert marge d\'error. Això permet considerar  un interval de respostes com a una resposta única. Per exemple, si la resposta és 10 amb un error acceptat de 2, aleshores s\'acceptarà com a correcte qualsevol nombre entre 8 i 12.';
$string['pluginnamesummary'] = 'Permet una resposta numèrica, possiblement acompanyada d\'unitats, que es qualifica comparant-la amb diversos models de resposta, possiblement amb toleràncies.';
$string['relative'] = 'Relativa';
$string['rightexample'] = 'DRETA com a 1,00cm o 1,00km';
$string['selectunit'] = 'Escolliu una unitat';
$string['selectunits'] = 'Escolliu les unitats';
$string['studentunitanswer'] = 'Les unitats s\'introdueixen usant';
$string['tolerancetype'] = 'Tipus de tolerància';
$string['unit'] = 'Unitat';
$string['unitappliedpenalty'] = 'Aquests valors inclouen una penalització de {$a} per tenir malament la unitat.';
$string['unitchoice'] = 'una selecció d\'opció múltiple';
$string['unitedit'] = 'Edita la unitat';
$string['unitgraded'] = 'Cal introduir la unitat, i aquesta es qualificarà.';
$string['unithandling'] = 'Tractament de les unitats';
$string['unitincorrect'] = 'No heu posat la resposta correcta';
$string['unitmandatory'] = 'Obligatori';
$string['unitmandatory_help'] = '* La resposta serà qualificada utilitzant la resposta escrita.

* Es penalitzarà si el camp està buit.';
$string['unitnotselected'] = 'Cal que seleccioneu una unitat.';
$string['unitonerequired'] = 'Cal que introduïu almenys una unitat';
$string['unitoptional'] = 'Pregunta opcional';
$string['unitoptional_help'] = '* Si el camp no està buit, la resposta es qualificarà utilitzant aquesta resposta.

* Si la resposta està mal escrita o es desconeguda, la resposta serà considerada com no vàlida.';
$string['unitpenalty'] = 'Penalització per resposta errònia';
$string['unitpenalty_help'] = 'La penalització s\'aplica si

* el nom erroni de la unitat s\'introdueix en l\'entrada de la unitat, o
* una unitat s\'introdueix en la caixa d\'entrada de valors numèrics';
$string['unitposition'] = 'Posició de les unitats';
$string['units'] = 'Unitats';
$string['unitselect'] = 'un menú desplegable';
$string['unitx'] = 'Unitat {no}';
$string['validnumberformats'] = 'Formats numèrics vàlids';
$string['validnumberformats_help'] = '* números normals 13500.67; 13 500.67; 13500,67 o 13 500,67

* Si els paràmetres del vostre paquet d\'idioma (fitxer langconfig.php) estableixen la coma (,) com a separador dels milers, aleshores poseu *SEMPRE* el punt decimal com en 13,500.67 : 13,500.

* per a formes exponencials com el nombre 1,350067 * 10<sup>4</sup>, utilitzeu 1,350067 E4 : 1,350067 E04';
$string['validnumbers'] = '13500.67; 13 500.67; 13,500.67; 13500,67; 13 500,67; 1.350067 E4 o bé 1.350067 E04';
$string['xmustbenumeric'] = 'Cal que {$a} sigui un número.';
$string['xmustnotbenumeric'] = '{$a} no pot ser un número.';
$string['youmustenteramultiplierhere'] = 'Aquí heu d\'introduir un multiplicador';
