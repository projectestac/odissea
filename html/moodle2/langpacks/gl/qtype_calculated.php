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
 * Strings for component 'qtype_calculated', language 'gl', branch 'MOODLE_31_STABLE'
 *
 * @package   qtype_calculated
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'Engadir elemento';
$string['addmoreanswerblanks'] = 'Engadir outra resposta en branco.';
$string['addsets'] = 'Engadir conxunto(s)';
$string['answerdisplay'] = 'Presentar a resposta';
$string['answerformula'] = 'Fórmula {$a} de resposta';
$string['answerhdr'] = 'Resposta';
$string['answerstoleranceparam'] = 'Parámetros de tolerancia nas respostas';
$string['answerwithtolerance'] = '{$a->answer} (±{$a->tolerance} {$a->tolerancetype})';
$string['anyvalue'] = 'Calquera valor';
$string['atleastoneanswer'] = 'Ten que fornecer polo menos unha resposta.';
$string['atleastonerealdataset'] = 'Debe haber polo menos un conxunto de datos reais no texto da pregunta';
$string['atleastonewildcard'] = 'Debe haber polo menos un comodín na fórmula de resposta ou texto da pregunta';
$string['calcdistribution'] = 'Distribución';
$string['calclength'] = 'Posicións decimais';
$string['calcmax'] = 'Máximo';
$string['calcmin'] = 'Mínimo';
$string['choosedatasetproperties'] = 'Escolla as propiedades do conxunto de datos dos comodíns';
$string['choosedatasetproperties_help'] = 'Un conxunto de datos é un conxunto de valores que substitúen un comodín. Pode crear un conxunto de datos privado para unha pregunta determinada ou un conxunto de datos compartido que pode ser utilizado noutras preguntas calculadas dentro da categoría.';
$string['correctanswerformula'] = 'Fórmula correcta para calcular a resposta';
$string['correctanswershows'] = 'A resposta correcta amosa';
$string['correctanswershowsformat'] = 'Formato';
$string['correctfeedback'] = 'Para calquera resposta correcta';
$string['dataitemdefined'] = 'con {$a} valores numéricos xa definidos como dispoñíbeis';
$string['datasetrole'] = 'Os comodíns <strong>{x..} </strong> substituiranse por valores numéricos de entre o seu conxunto de datos';
$string['decimals'] = 'con {$a}';
$string['deleteitem'] = 'Eliminar elemento';
$string['deletelastitem'] = 'Eliminar o último elemento';
$string['distributionoption'] = 'Seleccione a opción de distribución';
$string['editdatasets'] = 'Editar o conxunto de datos dos comodíns';
$string['editdatasets_help'] = 'Os valores comodín poden crearse mediante a introdución dun número en cada campo «comodín» e premendo no botón engadir. Para xerar automaticamente 10 ou máis valores, seleccione o número de valores necesarios antes de premer no botón engadir. Unha «distribución uniforme» significa que calquera valor entre os límites estabelecidos teñen a mesma probabilidade de que se xere;  unha «distribución log-uniforme» significa que os valores situados cara o límite inferior teñen máis probabilidade.';
$string['editdatasets_link'] = 'question/type/calculated';
$string['existingcategory1'] = 'usará un conxunto de datos compartidos xa existente';
$string['existingcategory2'] = 'un ficheiro dun conxunto existente de ficheiros que tamén son usados por outras preguntas desta categoría';
$string['existingcategory3'] = 'unha ligazón dun conxunto existente de ligazóns que tamén son usadas por outras preguntas desta categoría';
$string['forceregeneration'] = 'forzar a rexeneración';
$string['forceregenerationall'] = 'forzar a rexeneración de todos os comodíns';
$string['forceregenerationshared'] = 'forzar a rexeneración soamente de comodíns non compartidos';
$string['functiontakesatleasttwo'] = 'A función {$a} debe ter polo menos dous argumentos';
$string['functiontakesnoargs'] = 'A función {$a} non toma ningún argumento';
$string['functiontakesonearg'] = 'A función {$a} debe ter exactamente un argumento';
$string['functiontakesoneortwoargs'] = 'A función {$a} debe ter un ou dous argumentos';
$string['functiontakestwoargs'] = 'A función {$a} debe ter exactamente dous argumentos';
$string['generatevalue'] = 'Xerar un novo valor entre';
$string['getnextnow'] = 'Obter un novo «Elemento para engadir» agora';
$string['hexanotallowed'] = 'O valor en formato hexadecimal {$a->value} do conxunto de datos <strong>{$a->name}</strong> non está permitido';
$string['illegalformulasyntax'] = 'Sintaxe incorrecta da fórmula que comeza «{$a}»';
$string['incorrectfeedback'] = 'Para calquera resposta incorrecta';
$string['itemno'] = 'Elemento: {$a}';
$string['itemscount'] = 'Número de<br />elementos';
$string['itemtoadd'] = 'Elemento para engadir';
$string['keptcategory1'] = 'usará o mesmo conxunto de datos compartidos ca antes';
$string['keptcategory2'] = 'un ficheiro da mesma categoría de conxunto de datos reutilizábel ca antes';
$string['keptcategory3'] = 'unha ligazón da mesma categoría de conxunto de ligazóns reutilizábel ca antes';
$string['keptlocal1'] = 'usará o mesmo conxunto de datos privado ca antes';
$string['keptlocal2'] = 'un ficheiro do mesmo conxunto privado de ficheiros de preguntas ca antes';
$string['keptlocal3'] = 'unha ligazón do mesmo conxunto privado de ligazóns ca antes';
$string['lengthoption'] = 'Seleccione a opción de longo';
$string['loguniform'] = 'Log-uniforme';
$string['loguniformbit'] = 'díxitos, dunha distribución log-uniforme';
$string['makecopynextpage'] = 'Páxina seguinte (nova pregunta)';
$string['mandatoryhdr'] = 'Comodíns obrigatorios presentes nas respostas';
$string['max'] = 'Máx.';
$string['min'] = 'Mín.';
$string['minmax'] = 'Intervalo de valores';
$string['missingformula'] = 'Falta a formula';
$string['missingname'] = 'Falta o nome da pregunta';
$string['missingquestiontext'] = 'Falta o texto da pregunta';
$string['mustenteraformulaorstar'] = 'Debe introducir unha fórmula ou un asterisco «*»';
$string['newcategory1'] = 'usará un novo conxunto de datos compartido';
$string['newcategory2'] = 'un ficheiro dun novo conxunto de ficheiros que tamén poden ser usados por outras preguntas desta categoría';
$string['newcategory3'] = 'unha ligazón dun novo conxunto de ligazóns que tamén poden ser usadas por outras preguntas desta categoría';
$string['newlocal1'] = 'usará un novo conxunto de datos privado';
$string['newlocal2'] = 'un ficheiro dun novo conxunto de ficheiros que unicamente será usado nesta pregunta';
$string['newlocal3'] = 'unha ligazón dun novo conxunto de ligazóns que unicamente será usada nesta pregunta';
$string['newsetwildcardvalues'] = 'novo(s) conxunto(s) de valores para o(s) comodín(s)';
$string['nextitemtoadd'] = 'Seguinte «Elemento para engadir»';
$string['nextpage'] = 'Páxina seguinte';
$string['nocoherencequestionsdatyasetcategory'] = 'Para a pregunta co ID  {$a->qid}, o ID da categoría {$a->qcat} non é idéntico ao ID da categoría {$a->sharedcat} do comodín compartido {$a->name}. Edite a pregunta.';
$string['nocommaallowed'] = 'Non pode usarse a «,»; use o «.» como en 0.013 ou 1.3e-2';
$string['nodataset'] = 'nada - non é un comodín';
$string['nosharedwildcard'] = 'Ningún comodín compartido nesta categoría';
$string['notvalidnumber'] = 'O valor do comodín non é un número admitido';
$string['oneanswertrueansweroutsidelimits'] = 'Polo menos unha resposta correcta fora dos límites de valor verdadeiro.<br />Modifique os valores dos axustes da tolerancia nas respostas dispoñíbeis en Parámetros avanzados';
$string['param'] = 'Parámetro {<strong> {$a} </strong>}';
$string['partiallycorrectfeedback'] = 'Para calquera resposta parcialmente correcta';
$string['pluginname'] = 'Calculada';
$string['pluginnameadding'] = 'Engadindo unha pregunta calculada';
$string['pluginnameediting'] = 'Editando unha pregunta calculada';
$string['pluginname_help'] = 'As preguntas calculadas permiten crear preguntas numéricas utilizando comodíns dentro de chaves «{}» que se substitúen por valores concretos cando se realiza a proba. Por exemplo, a pregunta «Cal é a área dun rectángulo de lonxitude {I} e longo {w}?» tería como resposta correcta a fórmula «{l} * {w}» (onde «*» é o signo de multiplicación).';
$string['pluginname_link'] = 'question/type/calculated';
$string['pluginnamesummary'] = 'As preguntas calculadas son similares a preguntas numéricas pero con números seleccionados ao chou dun conxunto cando se intenta facer a proba.';
$string['possiblehdr'] = 'Posíbeis comodíns presentes só no texto da pregunta';
$string['questiondatasets'] = 'Conxunto de datos da pregunta';
$string['questiondatasets_help'] = 'Conxunto de datos de comodíns que se usarán en cada pregunta individual';
$string['questionstoredname'] = 'Nome gardado da pregunta';
$string['replacewithrandom'] = 'Substituír cun valor ao chou';
$string['reuseifpossible'] = 'reutilizar o valor anterior se estiver dispoñíbel';
$string['setno'] = 'Conxunto {$a}';
$string['setwildcardvalues'] = 'conxunto(s) de valores para o(s) comodín(s)';
$string['sharedwildcard'] = 'Comodín compartido {<strong>{$a}</strong>}';
$string['sharedwildcardname'] = 'Comodín compartido';
$string['sharedwildcards'] = 'Comodíns compartidos';
$string['showitems'] = 'Presentar';
$string['significantfigures'] = 'con {$a}';
$string['significantfiguresformat'] = 'cifras significativas';
$string['synchronize'] = 'Sincronizar os datos de conxuntos de datos compartidos con outras preguntas dentro dunha proba';
$string['synchronizeno'] = 'Non sincronizar';
$string['synchronizeyes'] = 'Sincronizar';
$string['synchronizeyesdisplay'] = 'Sincronizar e amosar o nome dos conxuntos de datos compartidos como prefixo do nome da pregunta';
$string['tolerance'] = 'Tolerancia &plusmn;';
$string['tolerancetype'] = 'Tipo';
$string['trueanswerinsidelimits'] = 'Resposta correcta: {$a->correct} dentro dos límites de valor verdadeiro {$a->true}';
$string['trueansweroutsidelimits'] = '<span class="error">ERRO Resposta correcta: {$a->correct} fora dos límites de valor verdadeiro {$a->true}</span>';
$string['uniform'] = 'Uniforme';
$string['uniformbit'] = 'decimais, dunha distribución uniforme';
$string['unsupportedformulafunction'] = 'A función {$a} non está admitida';
$string['updatecategory'] = 'Actualizar a categoría';
$string['updatedatasetparam'] = 'Actualizar os parámetros do conxunto de datos';
$string['updatetolerancesparam'] = 'Actualizar os parámetros de tolerancia das respostas';
$string['updatewildcardvalues'] = 'Actualizar os valores dos comodíns';
$string['useadvance'] = 'Utilice o botón avanzar para ver os erros';
$string['usedinquestion'] = 'Usada en Pregunta';
$string['wildcard'] = 'Comodín {<strong>{$a}</strong>}';
$string['wildcardparam'] = 'Parámetros dos comodíns usados para xerar os valores';
$string['wildcardrole'] = 'Os comodíns <strong>{x..} </strong> substituiranse por valores numéricos de entre os valores xerados';
$string['wildcards'] = 'Comodíns {a}...{z}';
$string['wildcardvalues'] = 'Valores dos comodíns';
$string['wildcardvaluesgenerated'] = 'Valores dos comodíns xerados';
$string['youmustaddatleastoneitem'] = 'Debe engadir polo menos un conxunto de datos antes de que poida gardar esta pregunta.';
$string['youmustaddatleastonevalue'] = 'Debe engadir polo menos un conxunto de valores para os comodíns antes de que poida gardar esta pregunta.';
$string['zerosignificantfiguresnotallowed'] = 'A resposta correcta non pode ter cero cifras significativas!';
