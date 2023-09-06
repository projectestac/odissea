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
 * Strings for component 'tool_xmldb', language 'pt', version '4.1'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Atual';
$string['addpersistent'] = 'Adicionar campos persistentes obrigatórios';
$string['aftertable'] = 'Após tabela:';
$string['back'] = 'Voltar';
$string['backtomainview'] = 'Voltar à página principal XMLDB';
$string['cannotuseidfield'] = 'Não é possível inserir o campo "ID". É uma coluna autonumerada';
$string['change'] = 'Alterar';
$string['charincorrectlength'] = 'Tamanho incorreto para o campo de texto';
$string['check_bigints'] = 'Procurar inteiros incorretos na BD';
$string['check_defaults'] = 'Procurar valores predefinidos inconsistentes';
$string['check_foreign_keys'] = 'Procurar violações de chaves estrangeiras';
$string['check_indexes'] = 'Procurar índices da BD em falta';
$string['check_oracle_semantics'] = 'Procurar por semânticas de comprimento errado';
$string['checkbigints'] = 'Verificar inteiros';
$string['checkdefaults'] = 'Verificar predefinições';
$string['checkforeignkeys'] = 'Verificar chaves estrangeiras';
$string['checkindexes'] = 'Verificar índices';
$string['checkoraclesemantics'] = 'Verificar semântica';
$string['completelogbelow'] = '(ver abaixo o registo completo da pesquisa)';
$string['confirmcheckbigints'] = 'Esta funcionalidade vai procurar <a href="https://tracker.moodle.org/browse/MDL-11038">campos inteiros potencialmente errados</a> no seu servidor Moodle, gerando (mas não executando!) automaticamente os comandos SQL necessários para ter todos os campos inteiros da sua BD definidos corretamente.

Uma vez gerados, pode copiar estes comandos e executá-los de forma segura no seu interface SQL preferido (não se esqueça de fazer uma cópia de segurança dos seus dados antes de executar o comando).

É altamente recomendado que esteja a executar a atualização mais recente disponível para a sua versão do Moodle antes de executar a pesquisa de inteiros errados.

Esta funcionalidade não realiza nenhuma ação na BD (apenas lê a partir desta) e, por isso, pode ser executada com segurança em qualquer momento.';
$string['confirmcheckdefaults'] = 'Esta funcionalidade vai procurar valores predefinidos inconsistentes na BD do seu servidor Moodle, gerando (mas não executando!) automaticamente os comandos SQL necessários para ter todos os valores predefinidos da sua BD definidos corretamente.

Uma vez gerados, pode copiar estes comandos e executá-los de forma segura no seu interface SQL preferido (não se esqueça de fazer uma cópia de segurança dos seus dados antes de executar o comando).

É altamente recomendado que esteja a executar a atualização mais recente disponível para a sua versão do Moodle antes de executar a pesquisa de valores predefinidos errados.

Esta funcionalidade não realiza nenhuma ação na BD (apenas lê a partir desta) e, por isso, pode ser executada com segurança em qualquer momento.';
$string['confirmcheckforeignkeys'] = 'Esta funcionalidade irá procurar potenciais violações das chaves estrangeiras definidas no ficheiro install.xml. (O Moodle atualmente não gera restrições de chaves estrangeiras na base de dados, pelo que é possível existir informação inválida.)

É altamente recomendado que esteja a executar a atualização mais recente disponível para a sua versão do Moodle antes de executar a pesquisa de potenciais violações de chaves estrangeiras.

Esta funcionalidade não realiza qualquer ação na base de dados (apenas lê a partir desta) e, por isso, pode ser executada com segurança em qualquer momento.';
$string['confirmcheckindexes'] = 'Esta funcionalidade vai procurar índices em falta no seu servidor Moodle, gerando (mas não executando!) automaticamente os comandos SQL necessários para ter tudo atualizado.

Uma vez gerados, pode copiar estes comandos e executá-los de forma segura no seu interface SQL preferido (não se esqueça de fazer uma cópia de segurança dos seus dados antes de executar o comando).

É altamente recomendado que esteja a executar a atualização mais recente disponível para a sua versão do Moodle antes de executar a pesquisa de índices em falta.

Esta funcionalidade não realiza nenhuma ação na BD (apenas lê a partir desta) e, por isso, pode ser executada com segurança em qualquer momento.';
$string['confirmcheckoraclesemantics'] = 'Esta funcionalidade vai procurar <a href="https://tracker.moodle.org/browse/MDL-29322">colunas varchar2 do Oracle usando semântica BYTE</a> no seu servidor Moodle, gerando (mas não executando!) automaticamente os comandos SQL necessários para usar semântica CHAR (melhor para compatibilidade entre BDs e limites superiores de dimensão do conteúdo).

Uma vez gerados, pode copiar estes comandos e executá-los de forma segura no seu interface SQL preferido (não se esqueça de fazer uma cópia de segurança dos seus dados antes de executar o comando).

É altamente recomendado que esteja a executar a atualização mais recente disponível para a sua versão do Moodle antes de executar a pesquisa de semânticas BYTE.

Esta funcionalidade não realiza nenhuma ação na BD (apenas lê a partir desta) e, por isso, pode ser executada com segurança em qualquer momento.';
$string['confirmdeletefield'] = 'Tem a certeza absoluta de que pretende apagar o campo:';
$string['confirmdeleteindex'] = 'Tem a certeza absoluta de que pretende apagar o índice:';
$string['confirmdeletekey'] = 'Tem a certeza absoluta de que pretende apagar a chave:';
$string['confirmdeletetable'] = 'Tem a certeza absoluta de que pretende apagar a tabela:';
$string['confirmdeletexmlfile'] = 'Tem a certeza absoluta de que pretende apagar o ficheiro:';
$string['confirmrevertchanges'] = 'Tem a certeza absoluta de que pretende reverter as alterações realizadas:';
$string['create'] = 'Criar';
$string['createtable'] = 'Criar tabela:';
$string['defaultincorrect'] = 'Predefinição incorreta';
$string['delete'] = 'Apagar';
$string['delete_field'] = 'Apagar campo';
$string['delete_index'] = 'Apagar índice';
$string['delete_key'] = 'Apagar chave';
$string['delete_table'] = 'Apagar tabela';
$string['delete_xml_file'] = 'Apagar ficheiro XML';
$string['doc'] = 'Doc';
$string['docindex'] = 'Índice da documentação:';
$string['documentationintro'] = 'Esta documentação é gerada automaticamente a partir das definições XMLDB da base de dados. Está disponível apenas em Inglês.';
$string['down'] = 'Para baixo';
$string['duplicate'] = 'Duplicar';
$string['duplicatefieldname'] = 'Existe outro campo com esse nome';
$string['duplicatefieldsused'] = 'Duplicar campos utilizados';
$string['duplicateindexname'] = 'Nome de índice duplicado';
$string['duplicatekeyname'] = 'Existe outra chave com esse nome';
$string['duplicatetablename'] = 'Existe outra tabela com esse nome';
$string['edit'] = 'Editar';
$string['edit_field'] = 'Editar campo';
$string['edit_field_save'] = 'Guardar campo';
$string['edit_index'] = 'Editar índice';
$string['edit_index_save'] = 'Guardar índice';
$string['edit_key'] = 'Editar chave';
$string['edit_key_save'] = 'Guardar chave';
$string['edit_table'] = 'Editar tabela';
$string['edit_table_save'] = 'Guardar tabela';
$string['edit_xml_file'] = 'Editar ficheiro XML';
$string['enumvaluesincorrect'] = 'Valores incorretos para o campo enum';
$string['expected'] = 'Esperado';
$string['extensionrequired'] = 'Lamentamos - a extensão PHP \'{$a}\' é necessária para esta ação. Instale esta extensão se pretende usar esta funcionalidade.';
$string['extraindexesfound'] = 'Índices extras encontrados';
$string['field'] = 'Campo';
$string['fieldnameempty'] = 'Nome do campo em branco';
$string['fields'] = 'Campos';
$string['fieldsnotintable'] = 'Campo inexistente na tabela';
$string['fieldsusedinindex'] = 'Este campo é usado como índice';
$string['fieldsusedinkey'] = 'Este campo é usado como chave.';
$string['filemodifiedoutfromeditor'] = 'Aviso: ficheiro modificado localmente ao usar o Editor XMLDB. Guardar irá substituir alterações locais.';
$string['filenotwriteable'] = 'Ficheiro sem permissões de escrita';
$string['fkunknownfield'] = 'Chave estrangeira {$a->keyname} na tabela {$a->tablename} aponta para um ficheiro inexistente {$a->reffield} na tabela referenciada {$a->reftable}.';
$string['fkunknowntable'] = 'Chave estrangeira {$a->keyname} na tabela {$a->tablename} aponta para uma tabela inexistente {$a->reftable}.';
$string['fkviolationdetails'] = 'Chave externa {$a->keyname} na tabela {$a->tablename} tem {$a->numviolations} violações em {$a->numrows} registos.';
$string['float2numbernote'] = 'Advertência: Embora os campos "float" sejam 100% suportados pelo XMLDB, é recomendado migrar estes campos para "number".';
$string['floatincorrectdecimals'] = 'N.º incorreto de decimais para o campo "float"';
$string['floatincorrectlength'] = 'Tamanho incorreto para o campo "float"';
$string['generate_all_documentation'] = 'Toda a documentação';
$string['generate_documentation'] = 'Documentação';
$string['gotolastused'] = 'Ir para o último campo utilizado';
$string['incorrectfieldname'] = 'Nome incorreto';
$string['incorrectindexname'] = 'Nome de índice incorreto';
$string['incorrectkeyname'] = 'Nome da chave incorreta';
$string['incorrecttablename'] = 'Nome da tabela incorreto';
$string['index'] = 'Índice';
$string['indexes'] = 'Índices';
$string['indexnameempty'] = 'Nome de índice está em branco';
$string['integerincorrectlength'] = 'Tamanho incorreto para campo inteiro';
$string['key'] = 'Chave';
$string['keynameempty'] = 'O nome da chave não pode ficar em branco';
$string['keys'] = 'Chaves';
$string['listreservedwords'] = 'Lista de palavras reservadas<br />(usada para manter atualizada a <a href="https://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">lista de palavras reservadas do editor XMLDB</a>)';
$string['load'] = 'Carregar';
$string['main_view'] = 'Página principal XMLDB';
$string['masterprimaryuniqueordernomatch'] = 'Os campos na sua chave externa devem estar na mesma ordem que estão na UNIQUE KEY na tabela referênciada.';
$string['missing'] = 'Em falta';
$string['missingindexes'] = 'Encontrados índices em falta';
$string['mustselectonefield'] = 'Deve selecionar um campo para ver as ações relacionadas!';
$string['mustselectoneindex'] = 'Deve selecionar um índice para ver as ações relacionadas!';
$string['mustselectonekey'] = 'Deve selecionar uma chave para ver as ações relacionadas!';
$string['new_table_from_mysql'] = 'Nova tabela do MySQL';
$string['newfield'] = 'Novo campo';
$string['newindex'] = 'Novo índice';
$string['newkey'] = 'Nova chave';
$string['newtable'] = 'Nova tabela';
$string['newtablefrommysql'] = 'Nova tabela do MySQL';
$string['nofieldsspecified'] = 'Não foram especificados campos';
$string['nomasterprimaryuniquefound'] = 'A(s) coluna(s) que a chave externa referencia deve(m) estar incluída(s) numa chave primária ou única na tabela referenciada. Tenha em atenção que a coluna estar num índice único não é suficiente.';
$string['nomissingorextraindexesfound'] = 'Nenhum índice extra ou em falta foi encontrado, por isso, não são necessárias mais ações.';
$string['noreffieldsspecified'] = 'Não existem campos de referência especificados';
$string['noreftablespecified'] = 'Tabela de referência especificada não encontrada';
$string['noviolatedforeignkeysfound'] = 'Não foram encontradas violações de chaves estrangeiras';
$string['nowrongdefaultsfound'] = 'Não foram encontradas predefinições inconsistentes. A sua base de dados não requer ações subsequentes.';
$string['nowrongintsfound'] = 'Não foram encontrados inteiros errados. A sua BD não necessita de ações subsequentes.';
$string['nowrongoraclesemanticsfound'] = 'Não foram encontradas colunas Oracle usando semânticas BYTE. A sua BD não necessita de ações subsequentes.';
$string['numberincorrectdecimals'] = 'Número incorreto de decimais para campo numérico';
$string['numberincorrectlength'] = 'Tamanho incorreto para campo numérico';
$string['numberincorrectwholepart'] = 'Parte de número inteiro muito grande para o campo de número';
$string['pendingchanges'] = 'Nota: Fez alterações a este ficheiro. Estas podem ser guardadas a qualquer momento.';
$string['pendingchangescannotbesaved'] = 'Existem alterações a este ficheiro mas não podem ser guardadas! Verifique que tanto a diretoria como o ficheiro "install.xml" têm permissões de escrita para o servidor web.';
$string['pendingchangescannotbesavedreload'] = 'Existem alterações a este ficheiro mas não podem ser guardadas! Verifique que tanto a diretoria como o ficheiro "install.xml" têm permissões de escrita para o servidor web. Em seguida, atualize/recarregue esta página e deverá estar em condições de poder guardar as alterações.';
$string['persistentfieldscomplete'] = 'Foram adicionados os seguintes campos:';
$string['persistentfieldsconfirm'] = 'Pretende adicionar os seguintes campos:';
$string['persistentfieldsexist'] = 'Já existem os campos seguintes:';
$string['pluginname'] = 'Editor XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'As chaves primárias não podem ser nulas';
$string['privacy:metadata'] = 'O módulo Editor XMLDB não armazena dados pessoais.';
$string['reconcile_files'] = 'Procurar ficheiros XMLDB que presisam de reconciliação';
$string['reconcile_files_intro'] = 'Esta funcionalidade examina o conteúdo de todos os ficheiros XMLDB para verificar se eles correspondem aos resultados caso fossem gerados a partir do Editor XMLDB.

A lista dos ficheiros que precisam de ser reconciliados (regenerados) será exibida e poderá usar o Editor XMLDB para corrigi-los.';
$string['reconcile_files_no'] = 'Todos os ficheiros estão em conformidade. Nenhuma ação de reconciliação é necessária.';
$string['reconcile_files_yes'] = 'Ficheiros encontrados para reconciliar:&nbsp;';
$string['reconcilefiles'] = 'Reconciliar ficheiros XMLDB';
$string['reserved'] = 'Reservada';
$string['reservedwords'] = 'Palavras reservadas';
$string['revert'] = 'Reverter';
$string['revert_changes'] = 'Reverter alterações';
$string['save'] = 'Guardar';
$string['searchresults'] = 'Pesquisar resultados';
$string['selectaction'] = 'Selcionar ações:';
$string['selectdb'] = 'Selecionar base de dados:';
$string['selectfieldkeyindex'] = 'Selecionar campo/chave/índice:';
$string['selectonecommand'] = 'Selecione uma ação da lista para ver o código PHP';
$string['selectonefieldkeyindex'] = 'Selecione um campo/chave/índice da lista para ver o código PHP';
$string['selecttable'] = 'Selecione a tabela:';
$string['table'] = 'Tabela';
$string['tablenameempty'] = 'O nome da tabela não pode estar em branco';
$string['tables'] = 'Tabelas';
$string['unknownfield'] = 'Refere-se a um campo desconhecido';
$string['unknowntable'] = 'Refere-se a uma tabela desconhecida';
$string['unload'] = 'Anular carregamento';
$string['up'] = 'Para cima';
$string['view'] = 'Ver';
$string['view_reserved_words'] = 'Ver palavras reservadas';
$string['view_structure_php'] = 'Ver estrutura PHP';
$string['view_structure_sql'] = 'Ver estrutura SQL';
$string['view_table_php'] = 'Ver tabela PHP';
$string['view_table_sql'] = 'Ver tabela SQL';
$string['viewedited'] = 'Ver editado';
$string['vieworiginal'] = 'Ver original';
$string['viewphpcode'] = 'Ver código PHP';
$string['viewsqlcode'] = 'Ver código SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Chaves estrangeiras violadas';
$string['violatedforeignkeysfound'] = 'Chaves estrangeiras violadas encontradas';
$string['violations'] = 'Violações';
$string['wrong'] = 'Erros';
$string['wrongdefaults'] = 'Foram encontradas predefinições incorretas';
$string['wrongints'] = 'Inteiros errados encontrados';
$string['wronglengthforenum'] = 'Tamanho incorreto para campo enum';
$string['wrongnumberofreffields'] = 'Número errado de campos de referência';
$string['wrongoraclesemantics'] = 'Semânticas BYTE do Oracle encontradas';
$string['wrongreservedwords'] = 'Palavras reservadas utilizadas<br />(tenha em atenção que os nomes das tabelas não são importantes se usarem $CFG->prefix)';
$string['yesextraindexesfound'] = 'Foram encontrados os seguintes índices adicionais.';
$string['yesmissingindexesfound'] = '<p>Foram encontrados índices em falta na sua BD. Aqui estão os detalhes e os comandos SQL de execução necessária com a sua interface SQL favorita para os criar todos (não se esqueça de fazer primeiro uma cópia de segurança dos seus dados).</p>
<p>Depois de executar os comandos é altamente recomendado que execute esta funcionalidade novamente para verificar que não existem mais índices em falta.</p>';
$string['yeswrongdefaultsfound'] = '<p>Foram encontradas predefinições erradas na sua base de dados. Aqui estão os detalhes e os comandos SQL de execução necessária com a sua interface SQL favorita para os criar todos (não se esqueça de fazer primeiro uma cópia de segurança dos seus dados).</p>
<p>Depois de executar os comandos é altamente recomendado que execute esta funcionalidade novamente para verificar que não existem mais índices em falta.</p>';
$string['yeswrongintsfound'] = '<p>Foram encontrados números inteiros errados na sua BD. Aqui estão os detalhes e os comandos SQL de execução necessária com a sua interface SQL favorita para os corrigir. Não se esqueça de fazer uma cópia de segurança da sua informação antes de o fazer.</p>
<p>Depois de os corrigir, é altamente recomendado que execute esta funcionalidade novamente para verificar que não existem mais números inteiros errados.';
$string['yeswrongoraclesemanticsfound'] = 'Foram encontradas colunas Oracle usando semânticas BYTE na sua BD. Aqui estão os detalhes e os comandos SQL de execução necessária com a sua interface SQL escolhida para os criar todos (não se esqueça de fazer uma cópia de segurança da sua informação antes de os executar).<p/>Depois de executar os comandos é altamente recomendado que execute esta funcionalidade novamente para verificar que não existem mais semânticas erradas.';
