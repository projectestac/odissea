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
 * Strings for component 'condition', language 'gl', version '4.1'.
 *
 * @package     condition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'Engadir {no} condicións de actividade ao formulario';
$string['addgrades'] = 'Engadir {no} condicións de cualificación ao formulario';
$string['adduserfields'] = 'Engadir {no} condicións de campo de usuario ao formulario';
$string['availabilityconditions'] = 'Restrinxir acceso';
$string['availablefrom'] = 'Permitir o acceso dende';
$string['availablefrom_help'] = 'As datas de acceso dende/ata determinan cando o alumnado pode acceder á actividade a través dunha ligazón na páxina do curso.

A diferenza entre as datas de acceso dende/ata e os axustes de dispoñibilidade para a actividade é que fóra das datas definidas, o acceso dente/ata impide completamente o acceso, mentres que a dispoñibilidade permite ao alumnado ver a descrición da actividade.';
$string['availableuntil'] = 'Permitir o acceso ata';
$string['badavailabledates'] = 'Datas non válidas. Se define ambas as datas, a data «Permitir o acceso dende» debería estar antes da data «ata».';
$string['badgradelimits'] = 'Se define un límite de cualificación superior e un inferior, o límite superior debe ser superior ao límite inferior.';
$string['completion_complete'] = 'debe marcarse como completado';
$string['completion_fail'] = 'debe estar completado con cualificación de suspenso';
$string['completion_incomplete'] = 'non debe marcarse como completado';
$string['completion_pass'] = 'debe estar completado con cualificación de aprobado';
$string['completioncondition'] = 'Condición de completado da actividade';
$string['completioncondition_help'] = 'Este axuste determina calquera condición de completado da actividade que se deba cumprir para poder acceder á actividade. Teña en conta que primeiro debe definirse o seguimento do completado antes de que se poida definir unha condición de completado da actividade.

Pódense definir múltiples condicións de completado da actividade se se desexa.  De ser así, o acceso á actividade só estará permitido cando se cumpran todas as condicións de completado da actividade.';
$string['completionconditionsection'] = 'Condición de completado da actividade';
$string['completionconditionsection_help'] = 'Este axuste determina calquera condición de completado da actividade que se deba cumprir para poder acceder á actividade. Teña en conta que primeiro debe definirse o seguimento do completado antes de que se poida definir unha condición de completado da actividade.

Pódense definir múltiples condicións de completado da actividade se se desexa.  De ser así, o acceso á actividade só estará permitido cando se cumpran todas as condicións de completado da actividade.';
$string['configenableavailability'] = 'Cando se activa, isto permítelle definir condicións (baseadas na data, cualificación ou completado) que controlen se se pode acceder a unha actividade ou recurso.';
$string['contains'] = 'contén';
$string['doesnotcontain'] = 'non contén';
$string['enableavailability'] = 'Activar o acceso condicional';
$string['endswith'] = 'remata con';
$string['fielddeclaredmultipletimes'] = 'Non pode declarar o mesmo campo máis dunha vez por actividade.';
$string['grade_atleast'] = 'debe ser, como mínimo,';
$string['grade_upto'] = 'e menos de';
$string['gradecondition'] = 'Condición de cualificación';
$string['gradecondition_help'] = 'Este axuste determina as posíbeis condicións de cualificación que se deben cumprir para poder acceder á actividade.

Pódense definir varias condicións de cualificación se se desexa. De ser así, a actividade só permitirá acceder cando se cumpran todas as condicións de cualificación.';
$string['gradeconditionsection'] = 'Condición de cualificación';
$string['gradeconditionsection_help'] = 'Este axuste determina as posíbeis condicións de cualificación que se deben cumprir para poder acceder á sección.

Pódense definir varias condicións de cualificación se se desexa. De ser así, a sección só permitirá acceder cando se cumpran todas as condicións de cualificación.';
$string['gradeitembutnolimits'] = 'Debe introducir un límite superior ou inferior, ou ambos.';
$string['gradelimitsbutnoitem'] = 'Debe escoller un elemento de cualificación.';
$string['gradesmustbenumeric'] = 'As cualificacións mínimas e máximas deben ser numéricas (ou en branco).';
$string['groupingnoaccess'] = 'Neste momento non pertence a ningún grupo que teña acceso a esta sección.';
$string['isempty'] = 'está baleiro';
$string['isequalto'] = 'é igual a';
$string['isnotempty'] = 'non está baleiro';
$string['none'] = '(ningunha)';
$string['notavailableyet'] = 'Aínda non está dispoñíbel';
$string['requires_completion_0'] = 'Non está dispoñíbel a non ser que a actividade <strong>{$a}</strong> estea incompleta.';
$string['requires_completion_1'] = 'Non está dispoñíbel ata que a actividade <strong>{$a}</strong> estea marcada como completada.';
$string['requires_completion_2'] = 'Non está dispoñible dispoñíbel ata que a actividade <strong>{$a}</strong> estea completada e aprobada.';
$string['requires_completion_3'] = 'Non está dispoñíbel a non ser que a actividade <strong>{$a}</strong> estea completada e suspensa.';
$string['requires_date'] = 'Dispoñíbel dende {$a}.';
$string['requires_date_before'] = 'Dispoñíbel ata {$a}.';
$string['requires_date_both'] = 'Dispoñíbel dende {$a->de} ata {$a->ata}.';
$string['requires_date_both_single_day'] = 'Dispoñíbel en {$a}.';
$string['requires_grade_any'] = 'Non dispoñíbel ata que teña unha cualificación en <strong>{$a}</strong>.';
$string['requires_grade_max'] = 'Non está dispoñíbel a non ser que obteña unha puntuación axeitada en <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'Non está dispoñible ata que obteña a puntuación requirida en <strong>{$a}</strong>.';
$string['requires_grade_range'] = 'Non está dispoñíbel a non ser que obteña unha puntuación particular en <strong>{$a}</strong>.';
$string['requires_grouping'] = 'Dispoñíbel só para o agrupamento <strong>{$a}</strong>.';
$string['requires_user_field_contains'] = 'Non está dispoñíbel a non ser que o seu <strong>{$a->field}</strong> conteña <strong>{$a->value}</strong>.';
$string['requires_user_field_doesnotcontain'] = 'Non está dispoñible se o seu <strong>{$a->field}</strong> contén <strong>{$a->value}</strong>.';
$string['requires_user_field_endswith'] = 'Non está dispoñible a non ser que o seu <strong>{$a->field}</strong> termine con <strong>{$a->value}</strong>.';
$string['requires_user_field_isempty'] = 'Non está dispoñíbel a non ser que o seu <strong>{$a->field}</strong> estea baleiro.';
$string['requires_user_field_isequalto'] = 'Non está dispoñíbel a non ser que o seu <strong>{$a->field}</strong> sexa igual a <strong>{$a->value}</strong>.';
$string['requires_user_field_isnotempty'] = 'Non está dispoñíbel se o seu <strong>field {$a->}</strong> está baleiro.';
$string['requires_user_field_startswith'] = 'Non está dispoñíbel a non ser que o seu <strong>{$a->field}</strong> comece con <strong>{$a->value}</strong>.';
$string['showavailability'] = 'Mentres se impide o acceso';
$string['showavailability_hide'] = 'Agochar a actividade integramente no curso e no libro de cualificacións';
$string['showavailability_show'] = 'Amosar a actividade esborrallada, con información sobre restricións';
$string['showavailabilitysection'] = 'Antes de que se poida acceder á sección';
$string['showavailabilitysection_hide'] = 'Agochar a sección por completo';
$string['showavailabilitysection_show'] = 'Amosar a sección esborrallada, con información sobre restricións';
$string['startswith'] = 'comeza con';
$string['userfield'] = 'Campo do usuario';
$string['userfield_help'] = 'Pode restrinxir o acceso en función de calquera campo dende o perfil dos usuarios.';
$string['userrestriction_hidden'] = 'Restrinxido (completamente agochado, sen mensaxe): {$a}';
$string['userrestriction_visible'] = 'Restrinxido: {$a}';
