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
 * Strings for component 'tool_xmldb', language 'es', version '3.11'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Real';
$string['addpersistent'] = 'Agregar campos persistentes obligatorios';
$string['aftertable'] = 'Después de la tabla:';
$string['back'] = 'Atrás';
$string['backtomainview'] = 'Volver al principal';
$string['cannotuseidfield'] = 'No se puede insertar el campo "id". Es una columna autonumerada';
$string['change'] = 'Cambiar';
$string['charincorrectlength'] = 'Longitud incorrecta para campo char';
$string['check_bigints'] = 'Buscar enteros DB incorrectos';
$string['check_defaults'] = 'Buscar valores por defecto inconsistentes';
$string['check_foreign_keys'] = 'Buscar violaciones de la clave foránea';
$string['check_indexes'] = 'Busque los índices de base de datos que faltan';
$string['check_oracle_semantics'] = 'Buscar longitud de semántica incorrecta';
$string['checkbigints'] = 'Comprobar enteros';
$string['checkdefaults'] = 'Comprobar valores por defecto';
$string['checkforeignkeys'] = 'Comprobar las claves foráneas';
$string['checkindexes'] = 'Comprobar índices';
$string['checkoraclesemantics'] = 'Comprobar la semántica';
$string['completelogbelow'] = '(ver abajo el registro completo de la búsqueda)';
$string['confirmcheckbigints'] = 'Esta funcionalidad buscará <a href="http://tracker.moodle.org/browse/MDL-11038">potential wrong integer fields</a> en su servidor Moodle, generando (¡pero no ejecutando!) automáticamente las acciones SQL necesarias para tener todos los enteros de su base de datos adecuadamente definidos.<br /><br />
Una vez generados, puede copiarlas y ejecutarlas con seguridad en su interfaz SQL preferida (no olvide hacer una copia de seguridad de sus datos antes de hacerlo).<br /><br />Se recomienda ejecutar la última (+) versión de Moodle disponible (1.8, 1.9, 2.x ...) antes de llevar a cabo la búsqueda de enteros erróneos.<br /><br />Esta funcionalidad no ejecuta ninguna acción contra la BD (únicamente la lee), de modo que puede ser realizada con seguridad en cualquier momento.';
$string['confirmcheckdefaults'] = 'Esta funcionalidad buscará valores por defecto inconsistentes en su servidor Moodle, y generará (pero no ejecutará) los comandos SQL necesarios para hacer que todos los valores por defecto se definan apropiadamente.<br /><br />Una vez generados, puede copiar tales comandos y ejecutarlos con seguridad en su interfaz SQL favorita (no olvide hacer una copia de sus datos antes).<br /><br />Es muy recomendable ejecutar la última versión (+version) disponible de Moodle (1.8, 1.9, 2x...) antes de ejecutar la búsqueda de valores por defecto inconsistentes.<br /><br />
Esta funcionalidad no ejecuta ninguna acción contra la base de datos (simplemente la lee), de modo que puede ejecutarse con seguridad en cualquier momento.';
$string['confirmcheckforeignkeys'] = 'Esta funcionalidad buscará posibles violaciones de las claves externas  defindas en install.xml. (Moodle no generan actualmente restricciones de clave externa en la base de datos, por lo que datos no válidos pueden estar presentes.) <br /> <br /> Es muy recomendable que se ejecuta la última (+ versión) disponible en su versión de Moodle ( 1.8, 1.9, 2.x ...) antes de ejecutar la búsqueda de índices perdidos. <br /> <br /> Esta funcionalidad no realiza ninguna acción contra la Base de Datos (sólo lee de ella), por lo que se puede ejecutar de forma segura en cualquier momento.';
$string['confirmcheckindexes'] = 'Esta funcionalidad buscará potenciales índices ausentes en su servidor Moodle, generando (no ejecutando) automáticamente los comandos SQL necesarios para mantener todo actualizado. Una vez generados, puede copiar los comandos y ejecutarlos con seguridad con su interfaz SQL favorita.<br /><br />
Es muy recomendable ejecutar la última versión disponible de Moodle (1.8, 1.9, 2.x ...) antes de llevar a cabo la búsqueda de los índices ausentes.<br /><br />
Esta funcionalidad no ejecuta ninguna acción contra la BD (simplemente lee en ella), de modo que puede ejecutarse con seguridad en cualquier momento.';
$string['confirmcheckoraclesemantics'] = 'Esta funcionalidad buscará <a href="https://tracker.moodle.org/browse/MDL-29322">columnas Oracle varchar2 usando semántica BYTE</a> en su servidor Moodle, generando (¡pero no ejecutándose!) automáticamente las sentencias SQL necesarias para que todas las columnas se conviertan para usar semántica CHAR en su lugar (mejor para compatibilidad entre bases de datos y mayor longitud máxima de contenido).

Una vez generadas, puede copiar dichas declaraciones y ejecutarlas de forma segura con su interfaz SQL favorita (no olvide hacer una copia de seguridad de sus datos antes de hacerlo).

Se recomienda encarecidamente ejecutar la última (+ versión) disponible de su versión de Moodle antes de ejecutar la búsqueda de la semántica de BYTE.

Esta funcionalidad no realiza ninguna acción contra la base de datos (solo la lee), por lo que se puede ejecutar de forma segura en cualquier momento.';
$string['confirmdeletefield'] = '¿Está totalmente seguro que quiere eliminar el campo:';
$string['confirmdeleteindex'] = '¿Está totalmente seguro de que quiere eliminar el índice:';
$string['confirmdeletekey'] = '¿Está totalmente seguro de que quiere eliminar la clave:';
$string['confirmdeletetable'] = '¿Está totalmente seguro de que quiere eliminar la tabla:';
$string['confirmdeletexmlfile'] = '¿Está totalmente seguro de que quiere eliminar el archivo:';
$string['confirmrevertchanges'] = '¿Está totalmente seguro de que quiere revertir los cambios realizados sobre:';
$string['create'] = 'Crear';
$string['createtable'] = 'Crear tabla:';
$string['defaultincorrect'] = 'Valor por defecto incorrecto';
$string['delete'] = 'Eliminar';
$string['delete_field'] = 'Eliminar campo';
$string['delete_index'] = 'Eliminar índice';
$string['delete_key'] = 'Eliminar clave';
$string['delete_table'] = 'Eliminar tabla';
$string['delete_xml_file'] = 'Eliminar archivo XML';
$string['doc'] = 'Doc';
$string['docindex'] = 'Índice de la documentación:';
$string['documentationintro'] = 'Esta documentación es generada automáticamente a partir de la definición de la base de datos XMLDB. Sólo está disponible en inglés.';
$string['down'] = 'Abajo';
$string['duplicate'] = 'Duplicar';
$string['duplicatefieldname'] = 'Ya existe otro campo con ese nombre';
$string['duplicatefieldsused'] = 'Campos duplicados usados';
$string['duplicateindexname'] = 'Duplicar nombre del índice';
$string['duplicatekeyname'] = 'Ya existe otra clave con ese nombre';
$string['duplicatetablename'] = 'Ya existe otra tabla con ese nombre';
$string['edit'] = 'Edición';
$string['edit_field'] = 'Editar campo';
$string['edit_field_save'] = 'Guardar campo';
$string['edit_index'] = 'Editar índice';
$string['edit_index_save'] = 'Guardar índice';
$string['edit_key'] = 'Editar clave';
$string['edit_key_save'] = 'Guardar clave';
$string['edit_table'] = 'Editar tabla';
$string['edit_table_save'] = 'Guardar tabla';
$string['edit_xml_file'] = 'Editar archivo XML';
$string['enumvaluesincorrect'] = 'Valores incorrectos para el campo enum';
$string['expected'] = 'Esperado';
$string['extensionrequired'] = 'Lo sentimos, la extensión de PHP \'{$a}\' es necesaria para esta acción. Instale la extensión si desea utilizar esta función.';
$string['extraindexesfound'] = 'Se encontraron índices adicionales';
$string['field'] = 'Campo';
$string['fieldnameempty'] = 'Nombre del campo vacío';
$string['fields'] = 'Campos';
$string['fieldsnotintable'] = 'El campo no existe en la tabla';
$string['fieldsusedinindex'] = 'Este campo se usa como índice.';
$string['fieldsusedinkey'] = 'Este campo se usa como clave.';
$string['filemodifiedoutfromeditor'] = 'Atención: El archivo se ha modificado localmente usando el editor de XMLDB. Guardar sobrescribirá los cambios locales.';
$string['filenotwriteable'] = 'Archivo no editable';
$string['fkunknownfield'] = 'La clave foránea {$a->keyname} de la tabla {$a->tablename} apunta a un campo inexistente {$a->reffield} en la tabla referenciada {$a->reftable}.';
$string['fkunknowntable'] = 'La clave forántea {$a->keyname} de la tabla {$a->tablename} apunta a una tabla que no existe {$a->reftable}.';
$string['fkviolationdetails'] = 'La clave foránea {$a->keyname} de la tabla {$a->tablename} es violada por {$a->numviolations} de un total de {$a->numrows} filas.';
$string['float2numbernote'] = 'Aviso: A pesar de que los campos "float" están completamente soportados por XMLDB, se recomienda migrar a campos de tipo "número" en su lugar.';
$string['floatincorrectdecimals'] = 'Número incorrecto de decimales del campo float';
$string['floatincorrectlength'] = 'Longitud incorrecta del campo float';
$string['generate_all_documentation'] = 'Toda la documentación';
$string['generate_documentation'] = 'Documentación';
$string['gotolastused'] = 'Ir al último archivo usado';
$string['incorrectfieldname'] = 'Nombre incorrecto';
$string['incorrectindexname'] = 'Nombre del índice incorrecto';
$string['incorrectkeyname'] = 'Nombre de la clave incorrecto';
$string['incorrecttablename'] = 'Nombre de la tabla incorrecto';
$string['index'] = 'Índice';
$string['indexes'] = 'Índices';
$string['indexnameempty'] = 'Nombre del índice vacío.';
$string['integerincorrectlength'] = 'Longitud incorrecta del campo integer';
$string['key'] = 'Clave';
$string['keynameempty'] = 'El nombre clave no puede estar vacío.';
$string['keys'] = 'Claves';
$string['listreservedwords'] = 'Lista de palabras reservadas <br />(utilizada para mantener <a href="https://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">palabras reservadas de XMLDB </a> actualizadas)';
$string['load'] = 'Cargar';
$string['main_view'] = 'Vista principal';
$string['masterprimaryuniqueordernomatch'] = 'Los campos de la clave externa deben aparecer en el mismo orden en que se enumeran en la CLAVE ÚNICA de la tabla de referencia.';
$string['missing'] = 'Falta';
$string['missingindexes'] = 'Se han encontrado índices que faltan';
$string['mustselectonefield'] = '¡Debe seleccionar un campo para ver las acciones relacionadas con el campo!';
$string['mustselectoneindex'] = '¡Debe seleccionar un índice para ver las acciones relacionadas con el índice!';
$string['mustselectonekey'] = '¡Debe seleccionar una clave para ver las acciones relacionadas con la clave!';
$string['new_table_from_mysql'] = 'Nueva tabla desde MySQL';
$string['newfield'] = 'Nuevo campo';
$string['newindex'] = 'Nuevo índice';
$string['newkey'] = 'Nueva clave';
$string['newtable'] = 'Nueva tabla';
$string['newtablefrommysql'] = 'Nueva tabla desde MySQL';
$string['nofieldsspecified'] = 'No se ha especificado ningún campo';
$string['nomasterprimaryuniquefound'] = 'La(s) columna(s) a las que hace referencia su clave externa deben ser incluidas en una clave principal o única en la tabla de referencia. Tenga en cuenta que la columna que está en un índice único no es suficientemente buena.';
$string['nomissingorextraindexesfound'] = 'No se han encontrado índices faltantes o adicionales, por lo que no es necesario realizar ninguna otra acción.';
$string['noreffieldsspecified'] = 'No se han especificado campos de referencia';
$string['noreftablespecified'] = 'La tabla de referencia especificada no se encontró';
$string['noviolatedforeignkeysfound'] = 'No se han encontrado claves foráneas violadas';
$string['nowrongdefaultsfound'] = 'No se han encontrado valores por defecto inconsistentes, su base de datos no necesita acciones adicionales.';
$string['nowrongintsfound'] = 'No se han encontrado enteros erróneos, su base de datos no necesita acciones adicionales.';
$string['nowrongoraclesemanticsfound'] = 'No se han encontrado columnas Oracle que utilicen la semántica BYTE. Su base de datos no necesita acciones adicionales.';
$string['numberincorrectdecimals'] = 'Número incorrecto de decimales en el campo numérico';
$string['numberincorrectlength'] = 'Longitud incorrecta para campo numérico';
$string['numberincorrectwholepart'] = 'Parte entera del número demasiado grande para el campo numérico';
$string['pendingchanges'] = 'Nota: Ha realizado cambios en este archivo. Se pueden guardar en cualquier momento.';
$string['pendingchangescannotbesaved'] = '¡Hay cambios en este archivo pero no se pueden guardar! Verifique que tanto el directorio como el archivo "install.xml" dentro de él tengan permisos de escritura para el servidor web.';
$string['pendingchangescannotbesavedreload'] = '¡Hay cambios en este archivo pero no se pueden guardar! Verifique que tanto el directorio como el archivo "install.xml" dentro de él tengan permisos de escritura para el servidor web. Luego, vuelva a cargar esta página y debería poder guardar esos cambios.';
$string['persistentfieldscomplete'] = 'Se han añadido los siguientes campos:';
$string['persistentfieldsconfirm'] = 'Quiere añadir los siguientes campos:';
$string['persistentfieldsexist'] = 'Los siguientes campos ya existen:';
$string['pluginname'] = 'Editor XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'Las claves primarias no pueden ser nulas';
$string['privacy:metadata'] = 'El complemento de editor XMLDB no almacena ningún dato personal.';
$string['reserved'] = 'Reservado';
$string['reservedwords'] = 'Palabras reservadas';
$string['revert'] = 'Revertir';
$string['revert_changes'] = 'Revertir cambios';
$string['save'] = 'Guardar';
$string['searchresults'] = 'Resultados de la búsqueda';
$string['selectaction'] = 'Seleccionar acción:';
$string['selectdb'] = 'Seleccionar base de datos:';
$string['selectfieldkeyindex'] = 'Seleccionar campo/clave/índice:';
$string['selectonecommand'] = 'Por favor, seleccione una acción de la lista para ver el código PHP';
$string['selectonefieldkeyindex'] = 'Por favor, seleccione un campo/clave/índice de la lista para ver el código PHP';
$string['selecttable'] = 'Seleccionar tabla:';
$string['table'] = 'Tabla';
$string['tablenameempty'] = 'El nombre de la tabla no puede estar vacío';
$string['tables'] = 'Tablas';
$string['unknownfield'] = 'Hace referencia a un campo desconocido';
$string['unknowntable'] = 'Hace referencia a una tabla desconocida';
$string['unload'] = 'Descargar';
$string['up'] = 'Arriba';
$string['view'] = 'Ver';
$string['view_reserved_words'] = 'Ver palabras reservadas';
$string['view_structure_php'] = 'Ver estructura PHP';
$string['view_structure_sql'] = 'Ver estructura SQL';
$string['view_table_php'] = 'Ver tabla PHP';
$string['view_table_sql'] = 'Ver tabla SQL';
$string['viewedited'] = 'Ver editados';
$string['vieworiginal'] = 'Ver original';
$string['viewphpcode'] = 'Ver código PHP';
$string['viewsqlcode'] = 'Ver código SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Claves externas violadas';
$string['violatedforeignkeysfound'] = 'Se han encontrado claves externas violadas';
$string['violations'] = 'Violaciones';
$string['wrong'] = 'Erróneo';
$string['wrongdefaults'] = 'Se encontraron valores por defecto erróneos';
$string['wrongints'] = 'Se han encontrado enteros erróneos';
$string['wronglengthforenum'] = 'Longitud incorrecta del campo enum';
$string['wrongnumberofreffields'] = 'Número incorrecto de campos de referencia';
$string['wrongoraclesemantics'] = 'Se ha encontrado semántica incorrecta de Oracle BYTE';
$string['wrongreservedwords'] = 'Palabras reservadas utilizadas actualmente <br /> (tenga en cuenta que los nombres de las tablas no son importantes si se usa el prefijo $CFG->)';
$string['yesextraindexesfound'] = 'Se encontraron los siguientes índices adicionales.';
$string['yesmissingindexesfound'] = '<p>Se han detectado que faltan algunos índices en su base de datos. Aquí están sus detalles y las instrucciones SQL necesarias para ser ejecutadas con su interfaz SQL favorita para crear todos. ¡Recuerde hacer antes una copia de seguridad de sus datos!</p>
<p>Después de hacer eso, es muy recomendable ejecutar esta utilidad de nuevo para verificar que no se encuentren más índices que falten.</p>';
$string['yeswrongdefaultsfound'] = 'En su base de datos se han encontrado algunos valores por defecto inconsistentes. Aquí se presentan los detalles y las acciones SQL que deben ejecutarse en su interfaz SQL favorita para crearlos (no olvide hacer una copia de seguridad de sus datos).<br /><br />Una vez realizado, se recomienda ejecutar de nuevo esta utilidad para comprobar que no se encuentran más valores por defecto inconsistentes.';
$string['yeswrongintsfound'] = 'Se han encontrado algunos enteros erróneos en su BD. Aquí se presentan los detalles y las acciones SQL que deben ejecutarse en su interfaz SQL favorita para crearlos (no olvide hacer una copia de seguridad de sus datos).<br /><br />Una vez realizado, se recomienda ejecutar de nuevo esta utilidad para comprobar que no se encuentran más enteros erróneos.';
$string['yeswrongoraclesemanticsfound'] = '<p>Se han encontrado algunas columnas de Oracle que utilizan semántica BYTE en su base de datos. Aquí están sus detalles y las declaraciones SQL necesarias para ser ejecutadas con su interfaz SQL favorita para convertirlas todas. ¡Recuerde hacer una copia de seguridad de sus datos antes!</p>
<p>Después de hacer eso, es muy recomendable ejecutar esta utilidad nuevamente para verificar que no se encuentren más semánticas incorrectas.</p>';
