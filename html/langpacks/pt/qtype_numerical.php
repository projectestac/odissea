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
 * Strings for component 'qtype_numerical', language 'pt', version '3.11'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Erro aceite';
$string['addmoreanswerblanks'] = 'Adicionar mais {no} opções de resposta';
$string['addmoreunitblanks'] = 'Adicionar mais {no} campos para unidades';
$string['answercolon'] = 'Resposta:';
$string['answererror'] = 'Erro';
$string['answermustbenumberorstar'] = 'A resposta deve ser um número. Por exemplo: -1234 ou 3e8 ou \'*\'.';
$string['answerno'] = 'Resposta {$a}';
$string['decfractionofquestiongrade'] = 'como parte decimal (0 a 1) da nota da pergunta';
$string['decfractionofresponsegrade'] = 'como parte decimal (0 a 1) da nota obtida na resposta';
$string['decimalformat'] = 'casas decimais';
$string['editableunittext'] = 'Com o valor numérico';
$string['errornomultiplier'] = 'Deve especificar um multiplicador para esta unidade.';
$string['errorrepeatedunit'] = 'Não pode ter duas unidades com o mesmo nome.';
$string['geometric'] = 'Geométrico';
$string['invalidnumber'] = 'Deve inserir um número válido.';
$string['invalidnumbernounit'] = 'Deve inserir um número válido. Não inclua a unidade na sua resposta.';
$string['invalidnumericanswer'] = 'Uma das respostas que inseriu não é um número válido.';
$string['invalidnumerictolerance'] = 'Uma das tolerâncias que inseriu não é um número válido.';
$string['leftexample'] = 'Esquerda (exemplo: $1.00)';
$string['manynumerical'] = 'A unidade é opcional. Se introduzida, é usada para converter a resposta para a unidade 1 antes de ser avaliada.';
$string['multiplier'] = 'Multiplicador';
$string['nominal'] = 'Nominal';
$string['noneditableunittext'] = 'Texto não editável da Unidade 1';
$string['nonvalidcharactersinnumber'] = 'Número com caracteres inválidos';
$string['notenoughanswers'] = 'Tem que introduzir pelo menos uma resposta.';
$string['nounitdisplay'] = 'Sem avaliação de Unidades';
$string['numericalmultiplier'] = 'Multiplicador';
$string['numericalmultiplier_help'] = 'O multiplicador é o fator pelo qual a resposta correta será multiplicada.

A primeira unidade (Unidade 1) tem um multiplicador predefinido de 1. Assim, se a resposta correta for 5500 e configurar W como unidade na Unidade 1, que tem 1 como multiplicador predefinido, a resposta correta é 5500 W.

Se adicionar a unidade kW com o multiplicador de 0.001, isto irá tornar igualmente correta a resposta 5.5 kW. Significa assim, que a resposta 5500 W ou 5.5 kW são ambas consideradas corretas.

Tenha em atenção que o erro aceite é também multiplicado. Um erro aceite de 100 W equivale a um erro de 0.1 kW.';
$string['oneunitshown'] = 'A Unidade 1 será exibida automaticamente junto da caixa destinada à resposta numérica.';
$string['onlynumerical'] = 'Não se usam as unidades. Apenas é pedida e avaliada a resposta numérica.';
$string['pleaseenterananswer'] = 'Por favor, insira uma resposta.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Por favor, insira a sua resposta sem usar o separador dos milhares ({$a}).';
$string['pluginname'] = 'Numérica';
$string['pluginname_help'] = 'Da perspetiva do aluno a pergunta numérica é idêntica a uma pergunta de resposta curta, no entanto as numéricas permitem definir uma margem de erro. Isto permite que uma opção de resposta contemple um conjunto de respostas possíveis. Por exemplo, se a resposta for 10 com um erro aceite de 2, os números entre 8 e 12 serão aceites como corretos.';
$string['pluginname_link'] = 'pergunta/tipo/numérica';
$string['pluginnameadding'] = 'A adicionar pergunta numérica';
$string['pluginnameediting'] = 'A editar pergunta numérica';
$string['pluginnamesummary'] = 'Aceita uma resposta numérica, eventualmente com unidades, a qual é avaliada comparando com várias respostas modelo, com eventuais margens de erro.';
$string['privacy:metadata'] = 'O módulo Pergunta do tipo Numérica não armazena dados pessoais.

O módulo Pergunta do tipo Resposta curta permite que os autores das perguntas definam opções predefinidas como preferências do utilizador.';
$string['privacy:preference:defaultmark'] = 'A avaliação predefinida para uma determinada pergunta.';
$string['privacy:preference:multichoicedisplay'] = 'Se as unidades são exibidas como o elemento de entrada de texto, seleção de múltipla escolha ou um menu pendente.';
$string['privacy:preference:penalty'] = 'A penalização para cada tentativa incorreta quando o comportamento das é o \'Interativo com múltiplas tentativas\' ou \'Modo adaptável \'.';
$string['privacy:preference:unitgradingtypes'] = 'Se a penalização da unidade aplica-se como uma fração (0-1) da nota da resposta ou da nota da pergunta.';
$string['privacy:preference:unitpenalty'] = 'Qual fração (0-1) da nota da resposta ou da nota da pergunta que deve ser aplicada?';
$string['privacy:preference:unitrole'] = 'Se a unidade é obrigatória, opcional ou não esperada.';
$string['privacy:preference:unitsleft'] = 'Se a unidade é mostrada à esquerda (ex. $, £) ou à direita (ex. kg, km, cm).';
$string['relative'] = 'Relativa';
$string['rightexample'] = 'Direita (exemplo: 1.00 km)';
$string['selectunit'] = 'Selecione uma unidade';
$string['selectunits'] = 'Selecione unidades';
$string['studentunitanswer'] = 'Unidade da resposta é introduzida';
$string['tolerancetype'] = 'Tipo de tolerância';
$string['unit'] = 'Unidade';
$string['unitappliedpenalty'] = 'Estas notas incluem penalização de {$a} porque a unidade não foi indicada ou está incorreta.';
$string['unitchoice'] = 'Escolha múltipla';
$string['unitedit'] = 'Editar unidade';
$string['unitgraded'] = 'A unidade deve ser introduzida e será avaliada.';
$string['unithandling'] = 'Unidade a usar';
$string['unitincorrect'] = 'Não inseriu uma unidade correta.';
$string['unitmandatory'] = 'Obrigatório';
$string['unitmandatory_help'] = '* A resposta será avaliada de acordo com a unidade selecionada.

* A penalização da unidade será aplicada se o campo da unidade não for preenchido';
$string['unitnotselected'] = 'Nenhuma unidade selecionada';
$string['unitonerequired'] = 'Tem de inserir pelo menos uma unidade.';
$string['unitoptional'] = 'Unidade opcional';
$string['unitoptional_help'] = '* Se o campo da unidade não está vazio, a resposta será avaliada de acordo com esta unidade.


* Se a unidade estiver escrita incorretamente ou for desconhecida, a resposta será considerada como inválida.';
$string['unitpenalty'] = 'Penalização da unidade';
$string['unitpenalty_help'] = 'A penalização é aplicada se:

* Uma unidade inválida for inserida no campo de resposta da unidade ou
* Um nome para a unidade for inserido no campo para o elemento numérico da resposta';
$string['unitposition'] = 'Posição da unidade';
$string['units'] = 'Unidades';
$string['unitselect'] = 'Caixa de seleção';
$string['unitx'] = 'Unidade {no}';
$string['validnumberformats'] = 'Formatos numéricos válidos';
$string['validnumberformats_help'] = '* números regulares  13500.67 : 13 500.67 : 13500,67: 13 500,67

* se as configurações do seu pacote linguístico (langconfig.php file) usarem uma vírgula [,] como separador dos milhares, introduza SEMPRE o ponto [.] como separador decimal, tal como: 13,500.67 : 13,500.

* para formas exponenciais, por exemplo 1,350067 * 10<sup>4</sup>,  use
 1,350067 E4 : 1,350067 E04';
$string['validnumbers'] = '13500.67, 13 500.67, 13,500.67, 13500,67, 13 500,67, 1.350067 E4 ou 1.350067 E04';
$string['xmustbenumeric'] = '{$a} tem de ser um número.';
$string['xmustnotbenumeric'] = '{$a} não pode ser um número.';
$string['youmustenteramultiplierhere'] = 'Tem que introduzir um multiplicador aqui';
