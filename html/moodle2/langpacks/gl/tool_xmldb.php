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
 * Strings for component 'tool_xmldb', language 'gl', branch 'MOODLE_32_STABLE'
 *
 * @package   tool_xmldb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Real';
$string['aftertable'] = 'Despois da táboa:';
$string['back'] = 'Volver';
$string['backtomainview'] = 'Volver ao principal';
$string['cannotuseidfield'] = 'Non é posible inserir o campo "id". É unha columna de numeración automática';
$string['change'] = 'Modificar';
$string['charincorrectlength'] = 'Lonxitude incorrecta para un campo de caracteres';
$string['checkbigints'] = 'Comprobar enteiros';
$string['check_bigints'] = 'Buscar enteiros BD incorrectos';
$string['checkdefaults'] = 'Comprobar os valores predeterminados';
$string['check_defaults'] = 'Buscar valores predeterminados inconsistentes';
$string['checkforeignkeys'] = 'Comprobar as chaves externas';
$string['check_foreign_keys'] = 'Buscar vulneracións da chave externa';
$string['checkindexes'] = 'Comprobar índices';
$string['check_indexes'] = 'Buscar índices BD ausentes';
$string['checkoraclesemantics'] = 'Revisar semántica';
$string['check_oracle_semantics'] = 'Buscar semántica de lonxitude incorrecta';
$string['completelogbelow'] = '(ver abaixo o rexistro completo da busca)';
$string['confirmcheckbigints'] = 'Esta funcionalidade buscará <a href="http://tracker.moodle.org/browse/MDL-11038">posíbeis campos enteiros errados</a> no seu servidor Moodle, xerando (pero non executando!) automaticamente as sentencias SQL necesarias para ter todos os enteiros da súa base de datos adecuadamente definidos

Unha vez xerados, pode copiar as ordes e executalas con seguridade na súa interface SQL favorita (non esqueza facer copias de seguridade dos seus datos antes de facer iso).

Recoméndase executar a última versión dispoñible de Moodle (1.8, 1.9, 2.x ...) antes de realizar a busca dos enteiros errados.

Esta funcionalidade non executa ningunha acción contra a BD (simplemente le nela), de maneira que pode executarse con seguridade en calquera momento.';
$string['confirmcheckdefaults'] = 'Esta funcionalidade buscará valores predeterminados inconsistentes no seu servidor Moodle, xerando (non executando) as ordes SQL precisas para manter os valores predeterminados adecuadamente definidos.

Unha vez xerados, pode copiar as ordes e executalas con seguridade na súa interface SQL favorita (non esqueza facer copias de seguridade dos seus datos antes de facer iso).

Recoméndase executar a última versión dispoñible de Moodle (1.8, 1.9, 2.x ...) antes de realizar a busca dos valores predeterminados inconsistentes.

Esta funcionalidade non executa ningunha acción contra a BD (simplemente le nela), de maneira que pode executarse con seguridade en calquera momento.';
$string['confirmcheckforeignkeys'] = 'Esta funcionalidade buscará posíbeis vulneracións das chaves externas  definidas en install.xml. (Moodle non xera actualmente restricións de chave externa na base de datos, polo que poden estar presentes datos non válidos.)

Recoméndase executar a última versión dispoñible de Moodle (1.8, 1.9, 2.x ...) antes de realizar a busca dos valores predeterminados inconsistentes.

Esta funcionalidade non executa ningunha acción contra a BD (simplemente le nela), de maneira que pode executarse con seguridade en calquera momento.';
$string['confirmcheckindexes'] = 'Esta funcionalidade buscará potenciais índices ausentes no seu servidor Moodle, xerando (non executando) automaticamente os comandos SQL precisos para manter todo actualizado. Unha vez xerados, pode copiar os comandos e executalos con seguridade na súa interface SQL favorita.<br /><br />
Recoméndase executar a última versión dispoñible de Moodle (1.8, 1.9, 2.x ...) antes de realizar a busca dos índices ausentes.<br /><br />
Esta funcionalidade non executa ningunha acción contra a BD (simplemente le nela), de maneira que pode executarse con seguridade en calquera momento.';
$string['confirmcheckoraclesemantics'] = 'Esta funcionalidade buscará <a href="http://tracker.moodle.org/browse/MDL-29322">Oracle varchar2 columnas usando semánticas BYTE </a> no seu servidor Moodle, xerando, (pero non executando!) automaticamente as instrucións SQL necesarias para que todas as columnas se convertan a semánticas CHAR no seu lugar (o que é mellor para a compatibilidade entre bases de datos e maiores contidos  max. length)

Unha vez xerados, pode copiar as ordes e executalas con seguridade na súa interface SQL favorita (non esqueza facer copias de seguridade dos seus datos antes de facer iso) .

Recoméndase executar a última versión dispoñible de Moodle (1.8, 1.9, 2.x ...) antes de realizar a busca de semánticas BYTE.

Esta funcionalidade non executa ningunha acción contra a BD (simplemente le nela), de maneira que pode executarse con seguridade en calquera momento.';
$string['confirmdeletefield'] = 'Está realmente certo de que desexa eliminar o campo:';
$string['confirmdeleteindex'] = 'Está realmente certo de que desexa eliminar o índice:';
$string['confirmdeletekey'] = 'Está realmente certo de que desexa eliminar a chave:';
$string['confirmdeletetable'] = 'Está realmente certo de que desexa eliminar a táboa:';
$string['confirmdeletexmlfile'] = 'Está realmente certo de que desexa eliminar o ficheiro:';
$string['confirmrevertchanges'] = 'Está realmente certo de que desexa desfacer as modificacións:';
$string['create'] = 'Crear';
$string['createtable'] = 'Crear táboa:';
$string['defaultincorrect'] = 'Omisión incorrecta';
$string['delete'] = 'Eliminar';
$string['delete_field'] = 'Eliminar campo';
$string['delete_index'] = 'Eliminar índice';
$string['delete_key'] = 'Eliminar chave';
$string['delete_table'] = 'Eliminar táboa';
$string['delete_xml_file'] = 'Eliminar ficheiro XML';
$string['doc'] = 'Doc.';
$string['docindex'] = 'Índice da documentación:';
$string['documentationintro'] = 'Esta documentación xerase automaticamente a partir da definición da base de datos XMLDB. Só está dispoñíbel en inglés.';
$string['down'] = 'Baixar';
$string['duplicate'] = 'Duplicar';
$string['duplicatefieldname'] = 'Hai outro campo con ese nome';
$string['duplicatefieldsused'] = 'Estanse a usar campos duplicados';
$string['duplicateindexname'] = 'O nome do índice está duplivado';
$string['duplicatekeyname'] = 'Hai outra chave con ese nome';
$string['duplicatetablename'] = 'Hai outra táboa con ese nome';
$string['edit'] = 'Editar';
$string['edit_field'] = 'Editar campo';
$string['edit_field_save'] = 'Gardar campo';
$string['edit_index'] = 'Editar índice';
$string['edit_index_save'] = 'Gardar índice';
$string['edit_key'] = 'Editar chave';
$string['edit_key_save'] = 'Gardar chave';
$string['edit_table'] = 'Editar táboa';
$string['edit_table_save'] = 'Gardar táboa';
$string['edit_xml_file'] = 'Editar ficheiro XML';
$string['enumvaluesincorrect'] = 'Valores incorrectos para un campo enum';
$string['expected'] = 'Agardando';
$string['extensionrequired'] = 'Vaites!, requírese a extensión de PHP «{$a}» para esta acción. Instale a extensión se quere empregar esta característica.';
$string['field'] = 'Campo';
$string['fieldnameempty'] = 'Campo de nome baleiro';
$string['fields'] = 'Campos';
$string['fieldsnotintable'] = 'O campo non existe na táboa';
$string['fieldsusedinindex'] = 'Este campo usase como índice';
$string['fieldsusedinkey'] = 'Este campo usase como chave.';
$string['filemodifiedoutfromeditor'] = 'Aviso: O ficheiro foi modificado localmente mentres se empregaba o editor XMLDB. Se o garda sobrescribiranse os cambios locais.';
$string['filenotwriteable'] = 'Ficheiro non escribible';
$string['fkunknownfield'] = 'Chave externa {$a->keyname} na táboa {$a->tablename}, que apunta cara un campo inexistente {$a->reffield} na táboa referenciada {$a->reftable}.';
$string['fkunknowntable'] = 'Chave externa {$a->keyname} na táboa {$a->tablename}, que apunta cara unha táboa inexistente {$a->reftable}.';
$string['fkviolationdetails'] = 'A chave externa {$a->keyname} na táboa {$a->tablename} é vulnerada por {$a->numviolations} dun total de {$a->numrows} filas.';
$string['float2numbernote'] = 'Aviso: A pesar de que os campos «float» (flotante) con compatíbeis ao 100% por XMLDB, recomendase migrar a campos «number» (número) no seu lugar.';
$string['floatincorrectdecimals'] = 'Número incorrecto de decimais para un campo flotante';
$string['floatincorrectlength'] = 'Lonxitude incorrecta para un campo flotante';
$string['generate_all_documentation'] = 'Toda a documentación';
$string['generate_documentation'] = 'Documentación';
$string['gotolastused'] = 'Ir ao último ficheiro usado';
$string['incorrectfieldname'] = 'Nome incorrecto';
$string['incorrectindexname'] = 'Nome incorrecto do índice';
$string['incorrectkeyname'] = 'Nome incorrecto da chave';
$string['incorrecttablename'] = 'Nome incorrecto da táboa';
$string['index'] = 'Índice';
$string['indexes'] = 'Índices';
$string['indexnameempty'] = 'O nome do índice está baleiro';
$string['integerincorrectlength'] = 'Lonxitude incorrecta para un campo enteiro';
$string['key'] = 'Chave';
$string['keynameempty'] = 'O nome da chave non pode estar baleiro.';
$string['keys'] = 'Chaves';
$string['listreservedwords'] = 'Lista de palabras reservadas<br/>(utilizado para manter <a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB_reserved_words</a> actualizado)';
$string['load'] = 'Cargar';
$string['main_view'] = 'Vista principal';
$string['masterprimaryuniqueordernomatch'] = 'Os campos da chave externa deben aparecer na mesma orden na que se enumeran na CHAVE ÚNICA da táboa de referencia.';
$string['missing'] = 'Ausente';
$string['missingindexes'] = 'Atopáronse índices ausentes';
$string['mustselectonefield'] = 'Para ver as accións relacionadas cun campo, seleccióneo!';
$string['mustselectoneindex'] = 'Para ver as accións relacionadas cun índice, seleccióneo!';
$string['mustselectonekey'] = 'Para ver as accións relacionadas cunha chave, selecciónea!';
$string['newfield'] = 'Novo campo';
$string['newindex'] = 'Novo índice';
$string['newkey'] = 'Nova chave';
$string['newtable'] = 'Nova táboa';
$string['newtablefrommysql'] = 'Nova táboa de MySQL';
$string['new_table_from_mysql'] = 'Nova táboa de MySQL';
$string['nofieldsspecified'] = 'Non se especificaron campos';
$string['nomasterprimaryuniquefound'] = 'A(s) columna(s) das súas referencias de chave externa deben ser incluídas nunha chave principal ou única na táboa de referencia. Teña en conta que a columna que está nun índice único non é boa de abondo.';
$string['nomissingindexesfound'] = 'Non se atoparon índices ausentes: a súa BD non require accións adicionais.';
$string['noreffieldsspecified'] = 'Non se especificaron campos de referencia';
$string['noreftablespecified'] = 'Non se atopou a táboa de referencia especificada';
$string['noviolatedforeignkeysfound'] = 'Non se atoparon chaves externas vulneradas';
$string['nowrongdefaultsfound'] = 'Non se atoparon valores predeterminados inconsistentes, a súa BD non require accións adicionais.';
$string['nowrongintsfound'] = 'Non se atoparon enteiros errados; a súa BD non require accións adicionais.';
$string['nowrongoraclesemanticsfound'] = 'Non se atoparon columnas de Oracle que empregaran semánticas BYTE; a súa BD non require accións adicionais.';
$string['numberincorrectdecimals'] = 'Número incorrecto de decimais para un campo numérico';
$string['numberincorrectlength'] = 'Lonxitude incorrecta para un campo numérico';
$string['pendingchanges'] = 'Nota: Realizou cambios neste ficheiro. Pode gardalos en calquera momento.';
$string['pendingchangescannotbesaved'] = 'Hai cambios neste ficheiro mais non é posíbel gardalos. Comprobe que o directorio e o «install.xml» que hai dentro teñen permisos de escritura para o servidor web.';
$string['pendingchangescannotbesavedreload'] = 'Hai cambios neste ficheiro mais non é posíbel gardalos. Comprobe que o directorio e o «install.xml» que hai dentro teñen permisos de escritura para o servidor web. A seguir, cargue de novo esta páxina e xa poderá gardar os cambios.';
$string['pluginname'] = 'Editor XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'As chaves primarias non poden ser nulas';
$string['reserved'] = 'Reservadas';
$string['reservedwords'] = 'Palabras reservadas';
$string['revert'] = 'Desfacer';
$string['revert_changes'] = 'Desfacer modificacións';
$string['save'] = 'Gardar';
$string['searchresults'] = 'Buscar resultados';
$string['selectaction'] = 'Seleccionar unha acción:';
$string['selectdb'] = 'Seleccionar unha base de datos:';
$string['selectfieldkeyindex'] = 'Seleccionar un campo/chave/índice:';
$string['selectonecommand'] = 'Seleccione unha acción da lista para ver o código PHP';
$string['selectonefieldkeyindex'] = 'Seleccione un campo/chave/índice da lista para ver o código PHP';
$string['selecttable'] = 'Seleccione unha táboa:';
$string['table'] = 'Táboa';
$string['tablenameempty'] = 'O nome da táboa non pode estar baleiro.';
$string['tables'] = 'Táboas';
$string['unknownfield'] = 'Refírese a un campo descoñecido';
$string['unknowntable'] = 'Refírese a unha táboa descoñecida';
$string['unload'] = 'Descargar';
$string['up'] = 'Arriba';
$string['view'] = 'Ver';
$string['viewedited'] = 'Ver editado';
$string['vieworiginal'] = 'Ver orixinal';
$string['viewphpcode'] = 'Ver código PHP';
$string['view_reserved_words'] = 'Ver as palabras reservadas';
$string['viewsqlcode'] = 'Ver código SQL';
$string['view_structure_php'] = 'Ver estrutura PHP';
$string['view_structure_sql'] = 'Ver estrutura SQL';
$string['view_table_php'] = 'Ver táboa PHP';
$string['view_table_sql'] = 'Ver táboa SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Chaves externas vulneradas';
$string['violatedforeignkeysfound'] = 'Atopáronse chaves externas vulneradas';
$string['violations'] = 'Vulneracións';
$string['wrong'] = 'Erroneo';
$string['wrongdefaults'] = 'Atopáronse valores predeterminados errados';
$string['wrongints'] = 'Atopáronse enteiros errados';
$string['wronglengthforenum'] = 'Lonxitude incorrecta para un campo enum';
$string['wrongnumberofreffields'] = 'Número errado de campos de referencia';
$string['wrongoraclesemantics'] = 'Atopouse semántica de Oracle BYTE errada';
$string['wrongreservedwords'] = 'Palabras reservadas actualmente utilizadas<br />(Os nomes das táboas non son importantes cando se emprega un $CFG->prefix)';
$string['yesmissingindexesfound'] = 'Na súa BD atopáronse algúns índices ausentes. Aquí pode ver os seus detalles, así como os comandos SQL para executar coa súa interface SQL favorita para crealos.<br /><br />Unha vez feito isto, recoméndase que execute de novo esta utilidade para comprobar que non se atopan máis índices ausentes.';
$string['yeswrongdefaultsfound'] = '<p>Na súa BD atopáronse algúns valores predeterminados inconsistentes. Aquí pode ver os seus detalles, así como os comandos SQL para executar coa súa interface SQL favorita para arranxalos. Lémbrese de facer antes unha copia de seguridade</p>
<p>Unha vez feito isto, recoméndase que execute de novo esta utilidade para comprobar que non se atopan máis valores predeterminados inconsistentes.</p>';
$string['yeswrongintsfound'] = '<p>Na súa BD atopáronse algúns enteiros errados. Aquí pode ver os seus detalles, así como os comandos SQL para executar coa súa interface SQL favorita para crealos. Lémbrese de facer antes unha copia de seguridade</p>
<p>Unha vez feito isto, recoméndase que execute de novo esta utilidade para comprobar que non se atopan máis enteiros errados.</p>';
$string['yeswrongoraclesemanticsfound'] = '<p>Na súa BD atopáronse algunhas columnas de Oracle que empregan semánticas de BYTE erradas. Aquí pode ver os seus detalles, así como os comandos SQL para executar coa súa interface SQL favorita para crealos. Lémbrese de facer antes unha copia de seguridade</p>
<p>Unha vez feito isto, recoméndase que execute de novo esta utilidade para comprobar que non se atopan máis columnas de Oracle que empregan semánticas de BYTE erradas.</p>';
