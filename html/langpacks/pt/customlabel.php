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
 * Strings for component 'customlabel', language 'pt', version '4.5'.
 *
 * @package     customlabel
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addatype'] = 'Adicionar tipo';
$string['addvalue'] = 'Adicionar valor';
$string['adminmetadata'] = 'Configuração dos classificadores';
$string['apparence'] = 'Aparência';
$string['category'] = 'Categoria';
$string['changetypeadvice'] = 'Está prestes a alterar a estrutura de dados interna deste elemento. O conteúdo antigo não pode ser mantido. Pretende continuar?';
$string['choose'] = 'Escolha';
$string['classification'] = 'Classificação';
$string['classificationconstrainttable'] = 'Tabela de restrições';
$string['classificationconstrainttable_help'] = 'Esta tabela é capaz de mapear os pares de valores que não são compatíveis.';
$string['classificationmodel'] = 'Modelo de classificação';
$string['classificationtypetable'] = 'Dimensões da classificação e tabela de filtros';
$string['classificationtypetable_help'] = 'Esta tabela fornece domínios de classificação. Um domínio possui um conjunto de valores.';
$string['classificationvalues'] = 'Valores';
$string['classificationvaluetable'] = 'Tabela de valores da classificação';
$string['classificationvaluetable_help'] = 'Esta tabela fornece todos os valores para todos os classificadores definidos na tabela de tipos.';
$string['classificationvaluetypekey'] = 'classificador tipo campo';
$string['classificationvaluetypekey_help'] = 'Serve para definir o nome da coluna da tabela que é usado para ajustar o tipo de propriedade dos valores.';
$string['classifiers'] = 'Classificadores';
$string['classifierstypes'] = 'Tipo de classificadores';
$string['cleararea'] = 'Limpar área';
$string['code'] = 'Código';
$string['coloredstyle'] = 'Títulos com cor';
$string['commands'] = 'Comandos';
$string['configclassificationconstrainttable'] = 'Tabela de restrição';
$string['configclassificationconstrainttable_desc'] = 'Esta tabela contém as restrições entre os diferentes tipos envolvidos na classificação.';
$string['configclassificationtypetable'] = 'Tabela para tipos de classificadores';
$string['configclassificationtypetable_desc'] = 'Um tipo de classificador contém um conjunto de valores na tabela de valores.';
$string['configclassificationvaluetable'] = 'Tabela de valores de classificação';
$string['configclassificationvaluetable_desc'] = 'Tabela onde encontrar os valores de metadados';
$string['configclassificationvaluetypekey'] = 'Indique o nome da chave na tabela de valores';
$string['configclassificationvaluetypekey_desc'] = 'Nome do campo que serve como chave externa do tipo de dados para qualificar o valor';
$string['configcoursemetadatacoursekey'] = 'Nome da chave da disciplina no ficheiro de metadados';
$string['configcoursemetadatacoursekey_desc'] = 'Nome do campo que serve como chave externa da disciplina na tabela de metadados. O conteúdo deste campo deve ser um ID válido de COURSE.';
$string['configcoursemetadatatable'] = 'Tabela para ligação de metadados';
$string['configcoursemetadatatable_desc'] = 'Esta tabela liga a relação entre um registo da disciplina e qualquer metadados apontado por um id AB. Os metadados devem "residir" na seguinte tabela de valor de metadados.';
$string['configcoursemetadatavaluekey'] = 'O nome da chave de valor no ligador de metadados';
$string['configcoursemetadatavaluekey_desc'] = 'Nome do campo que serve como chave externa do valor dos dados na tabela de metadados.';
$string['configmetadatabinding'] = 'Esquema da ligação de metadados';
$string['configmetadatabinding_desc'] = '<p>O indexador da disciplina depende da capacidade de indexar disciplinas com alguns metadados e classificadores. O modelo do índice da disciplina usa 4 tabelas para alcançar este objetivo e permite vincular estas tabelas a partir de qualquer implementação que o integrador precise. A ligação predefinida usa o módulo Elementos da disciplina e o seu conjunto de entrada da tabela de classificação. Mas o índice da disciplina pode-se ligar a qualquer outro modelo que respeite as seguintes definições:</p>
<ul>
<li>Existe uma tabela para armazenar os valores de metadados do domínio</li>
<li>Os valores de metadados são introduzidos. Existe uma tabela para armazenar os tipos de metadados aos quais os valores se referem.</li>
<li>Os tipos de metadados são combinados através de uma tabela de restrições, que prevê combinações válidas de valores.</li>
<li>Existe uma tabela que vincula uma disciplina a um valor de metadados (etiquetagem)</li>
</ul>';
$string['constraints'] = 'Restrições';
$string['content'] = 'Conteúdo';
$string['coursefilter'] = 'Filtrar disciplina';
$string['coursemetadatacoursekey'] = 'Chave de marcação da disciplina (ligação disciplina para metadados)';
$string['coursemetadatacoursekey_help'] = 'Deve definir um nome de coluna na base de dados que mapeia um registo para um ID da disciplina.';
$string['coursemetadatatable'] = 'Tabela de marcação dos metadados da disciplina';
$string['coursemetadatatable_help'] = 'Esta tabela guarda as ligações da disciplina aos metadados.';
$string['coursemetadatavaluekey'] = 'Campo de marcação para valores (ligação de metadados a valores)';
$string['coursemetadatavaluekey_help'] = 'Deve definir um nome de coluna na base de dados que mapeia um registo para um valor de metadados.';
$string['customlabel:addinstance'] = 'Pode adicionar uma instância';
$string['customlabel:fullaccess'] = 'Total acesso a todos os campos';
$string['customlabel:managemetadata'] = 'Gerir metadados';
$string['customlabelplugins'] = 'Módulos';
$string['customlabeltools'] = 'Ferramentas de massa para etiquetas personalizadas';
$string['customlabeltypepluginname'] = 'Nome do tipo de etiquetas personalizadas';
$string['defaultstyle'] = 'Definir ícone predefinido';
$string['disabledsubtypes'] = 'Desativar subtipos';
$string['disabledsubtypes_desc'] = 'Qualquer subtipo mencionado neste campo será desativado globalmente para todo o site.';
$string['doupdate'] = 'Atualizar!!';
$string['down'] = 'Baixo';
$string['editclass'] = 'Atualizar a classe do classificador ';
$string['editvalues'] = 'Editar valores';
$string['elementtitle'] = 'Identificador do elemento';
$string['errorclassloading'] = 'Erro ao carregar: classe nula';
$string['errorfailedloading'] = 'Ocorreu um erro ao carregar a classe para a etiqueta personalizada \'{$a}\'. A reverter para etiqueta personalizada "texto".';
$string['errorinsertvalue'] = 'Não foi possível atdicionar um novo valor';
$string['errorreservedname'] = '"TYPE" é um nome reservado e não pode ser usado como código.';
$string['errorupdatevalue'] = 'Não foi possível atualizar um novo valor';
$string['exclude'] = 'Excluir';
$string['exportdata'] = 'Exportar para XML';
$string['familygeneric'] = 'Elementos genéricos';
$string['familymeta'] = 'Elementos Meta-Pedagógicos';
$string['familypedagogic'] = 'Elementos pedagógicos';
$string['familyspecial'] = 'Elementos especiais';
$string['familystructure'] = 'Elementos estruturais';
$string['filter'] = 'Filtro';
$string['hideshow'] = 'Mostrar/Ocultar';
$string['include'] = 'Incluir';
$string['labelclass'] = 'Tipos de etiquetas';
$string['labelclasses'] = 'Classes dos elementos';
$string['labelupdater'] = 'Ferramenta de regeneração \'{$a}\'';
$string['languages'] = 'Idioma';
$string['lockedsample'] = 'Amostra de campo bloqueado';
$string['lpclassificationhdr'] = 'Disciplinas classificadas';
$string['managecustomlabeltypeplugins'] = 'Gerir módulos de etiquetas personalizadas';
$string['metadata'] = 'Valores de metadados';
$string['metadataset'] = 'Valores de classificação';
$string['missingfields'] = 'Os campos obrigatórios não foram definidos';
$string['model'] = 'Modelo de dados';
$string['modulename'] = 'Elementos da disciplina';
$string['modulename_help'] = 'O módulo <strong>Elementos da disciplina</strong> fornece módulos pedagógicos que são criados já com aparência para servir algumas necessidades pedagógicas de alto nível. O \'Elementos da disciplina\' possui subtipos que abordam ações comuns da aprendizagem: trabalhos para fazer, soluções, ver também (referência opcional), objetivos, lembretes e alguns auxiliares editoriais, como por exemplo, o nome das disciplinas. O administrador pode integrar modelos específicos com valor editorial adicional, como o uso de imagens pré-instaladas ou atribuindo etiquetas às disciplinas.
É necessário inserir os dados apropriados em cada módulo.';
$string['modulenameplural'] = 'Elementos da disciplina';
$string['name'] = 'Etiqueta';
$string['noclassifiers'] = 'Sem classificação';
$string['nocontentforthislanguage'] = 'Nenhum conteúdo disponível para este idiopma<br/>';
$string['none'] = 'Não definido';
$string['notypes'] = 'Sem tipo de classificador';
$string['novalues'] = 'Sem valores registados';
$string['pluginadministration'] = 'Administração de Elementos da disciplina';
$string['pluginname'] = 'Elementos da disciplina';
$string['qualifiers'] = 'Avaliadores';
$string['regenerate'] = 'Regenerar';
$string['regeneration'] = 'Regeneração em massa de conteúdo';
$string['resourcetypecustomlabel'] = 'Elementos da disciplina';
$string['roleaccesstoelements'] = 'Acesso por papel';
$string['sametypes'] = 'Não pode restringir duas vezes o mesmo tipo';
$string['settings'] = 'Configurações das etiquetas personalizadas';
$string['show'] = 'Mostrar&ensp;';
$string['specifics'] = 'Tipo específico';
$string['storage'] = 'Modelo de armazenamento';
$string['templatenotfound'] = 'Não foi encontrado o modelo \'{$a}\'';
$string['text'] = 'Texto';
$string['title'] = 'Nome do elemento';
$string['typecode'] = 'Código';
$string['typecode_help'] = '<p>Ajuda para combinar dados com sistemas externos ao extrair dados com consultas personalizadas em blocos do tipo Relatórios personalizados ou Painel do utilizador.</p>

<p>Tenha em atenção que alguns códigos estão implicitamente vinculados a algumas características especiais de indexação da disciplina usando o subtipo Classificador de disciplinas. O subtipo de classificador de disciplinas é um utilitário classificador que ajuda alguns outros componentes como o Índice da disciplina a apresentar um catálogo multicategorizado de disciplinas pesquisável.</p>
<ul>
<li>LEVEL0 (NÍVEL 0): use este código para definir uma dimensão do primeiro classificador no classificador da disciplina.</li>
<li>LEVEL1 (NÍVEL 1): use este código para definir uma segunda dimensão do classificador no classificador da disciplina.</li>
<li>LEVEL2 (NÍVEL 2): use este código para definir uma terceira dimensão do classificador no classificador da disciplina.</li>
<li>PEOPLE (UTILIZADORES): use este código para definir um filtro de público-alvo.</li>
</ul>

</p>Para o subtipo Work To do:</p>
<ul>
<li> WORKEFFORT: Qualifica o esforço de aprendizagem</li>
<li> WORKTYPE: Qualifica a natureza do trabalho </li>
<li> WORKMODE: Qualifica o perímetro social da tarefa</li>
</ul>';
$string['typename'] = 'Nome';
$string['typetype'] = 'Tipo';
$string['typetype_help'] = '<p>O tipo de tipo pode ser:</p>
<ul>
<li>Uma categoria: uma categoria interage com as implementações do catálogo de disciplinas para construir uma taxonomia multicritério de disciplinas.</li>
<li>Um filtro: uma etiqueta simples que alguns subtipos de Elementos da disciplina podem usar</p>
<li>Um filtro de disciplinas: uma etiqueta que pode ser usada por algumas implementações do catálogo de disciplinas</p>
</ul>';
$string['up'] = 'Cima';
$string['updateall'] = 'Atualizar todas as instâncias';
$string['updatelabels'] = 'Regenerar a instância de {$a}';
$string['updatescope'] = 'A atualizar o âmbito';
$string['usedas'] = 'Usar como&ensp;';
$string['usesafestorage'] = 'Usar armazenamento seguro para o conteúdo (base64)';
$string['value'] = 'Valor';
