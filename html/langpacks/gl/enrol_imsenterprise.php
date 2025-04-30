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
 * Strings for component 'enrol_imsenterprise', language 'gl', version '4.4'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'Unha vez gardadas os seus axustes, poderá desexar';
$string['allowunenrol'] = 'Permitir datos IMS para <strong>desmatricular</strong> alumnos/profesores';
$string['allowunenrol_desc'] = 'De estar activado, as matriculacións retiraranse cando se especifique nos datos de empresa.';
$string['basicsettings'] = 'Axustes básicos';
$string['categoryidnumber'] = 'Permitir «idnumber» por categoría';
$string['categoryidnumber_desc'] = 'Se está activado, IMS Enterprise creará categoría con «idnumber»';
$string['categoryseparator'] = 'Carácter separador de categoría';
$string['categoryseparator_desc'] = 'Requírese cando está activado o «idnumber de categoría». Carácter para separar o nome da categoría e o «idnumber».';
$string['coursesettings'] = 'Opcións dos datos do curso';
$string['createnewcategories'] = 'Crear novas (agochadas) categorías de cursos se non as atopa en Moodle';
$string['createnewcategories_desc'] = 'Se o elemento <org><orgunit> está presente en datos de entrada dun curso, o seu contido utilizarase para especificar unha categoría se o curso se está creando a partir de cero. O engadido NON reclasificará os cursos existentes.

Se non existe ningunha categoría co nome desexado, daquela crearase unha categoría agochada.';
$string['createnewcourses'] = 'Crear novos cursos (agochados) se non os atopa en Moodle';
$string['createnewcourses_desc'] = 'Se está activado, o engadido de IMS Enterprise pode crear novos cursos de calquera que atope nos datos do IMS pero non na base de datos de Moodle. Todos os cursos creados de novas están en principio agochados.';
$string['createnewusers'] = 'Crear contas para usuarios aínda non rexistrados en Moodle';
$string['createnewusers_desc'] = 'Os datos de matriculación de IMS Enterprise normalmente describen un conxunto de usuarios. Se está activado, as contas poden crearse para calquera dos usuarios que non se atopan na base de datos de Moodle.

Búscase os usuarios primeiro polo seu «idnumber», e secundariamente polo seu nome de usuario de Moodle. Os contrasinais non os importa o engadido IMS Enterprise. O uso dun engadido de autenticación recoméndase para a identificación de usuarios.';
$string['cronfrequency'] = 'Frecuencia do procesamento';
$string['deleteusers'] = 'Eliminar contas de usuario cando son especificadas en datos IMS';
$string['deleteusers_desc'] = 'Se está activado, os datos de matriculación de IMS Enterprise poden especificar a eliminación das contas de usuario (se o sinalador «recstatus» se define como 3, que representa a eliminación dunha conta). Como é estándar no Moodle, o rexistro do usuario non se elimina realmente da base de datos de Moodle, pero estabelécese un marca para sinalar a conta como eliminada.';
$string['doitnow'] = 'executar unha importación IMS Enterprise agora mesmo';
$string['emptyattribute'] = 'Deixalo baleiro';
$string['filelockedmail'] = 'O ficheiro de texto que está a utilizar para as matriculacións baseadas nos ficheiros IMS ({$a}) non pode ser eliminado polo proceso cron. Normalmente, isto significa que os permisos non son apropiados. Sinale os permisos para que Moodle poida eliminar o ficheiro, no caso contrario poderá ser procesado repetidamente.';
$string['filelockedmailsubject'] = 'Erro importante: Ficheiro de matriculacións';
$string['fixcasepersonalnames'] = 'Modificar os nomes persoais para maiúsculas no Título';
$string['fixcaseusernames'] = 'Modificar nomes de usuario para minúsculas';
$string['ignore'] = 'Ignorar';
$string['importimsfile'] = 'Importar o ficheiro de IMS Enterprise';
$string['imsenterprise:config'] = 'Configurar as instancias de categorías de IMS Enterprise';
$string['imsenterprisecrontask'] = 'Procesamento de ficheiros de matriculación';
$string['imsrolesdescription'] = 'A especificación IMS Enterprise inclúe 8 tipos diferentes de papeis. Escolla como desexa que sexan atribuídos en Moodle, tamén se calquera deles podería ser ignorado.';
$string['location'] = 'Localización do ficheiro';
$string['logtolocation'] = 'Localización da saída do ficheiro de rexistro (en branco significa sen rexistro)';
$string['mailadmins'] = 'Notificar ao administrador por correo electrónico';
$string['mailusers'] = 'Notificar aos usuarios por correo electrónico';
$string['messageprovider:imsenterprise_enrolment'] = 'Mensaxes de matriculación de IMS Enterprise';
$string['miscsettings'] = 'Varios';
$string['nestedcategories'] = 'Permitir categorías aniñadas';
$string['nestedcategories_desc'] = 'Se está activado, IMS Enterprise creará categorías aniñadas';
$string['pluginname'] = 'Ficheiro IMS Enterprise';
$string['pluginname_desc'] = 'Este método buscará repetidamente e procesará un ficheiro de texto especialmente formatado na localización que especifique. O ficheiro debe seguir as especificacións de IMS Enterprise e conter a persoa, grupo e os elementos XML de membro.';
$string['privacy:metadata'] = 'O engadido de matriculación por ficheiro IMS Enterprise non almacena ningún dato persoal.';
$string['processphoto'] = 'Engadir datos da fotografía do usuario para o perfil';
$string['processphotowarning'] = 'Advertencia: Ao procesar unha imaxe é probábel que sexa engadida unha carga significativa ao servidor. Non é recomendábel que active esta opción se hai un grande número de alumnos para ser procesados.';
$string['restricttarget'] = 'Só procesa datos se se especifica o seguinte destino';
$string['restricttarget_desc'] = 'Un ficheiro de datos de IMS Enterprise podería ser destinado a varios «destinos», distintos ou sistemas diferentes dentro dunha escola/universidade. É posíbel especificar no ficheiro do Enterprise que os datos están preparados para un ou máis sistemas de destino, nomeándoos en etiquetas <target> contidas na etiqueta <properties>.

En xeral, non se preocupe diso. Deixe en branco a opción e Moodle procesará o ficheiro de datos, non importa se o destino está especificado ou non. En caso contrario, cubra o nome exacto que estará na saída da etiqueta <target>.';
$string['roles'] = 'Roles';
$string['settingfullname'] = 'Etiqueta de descrición IMS para o nome completo do curso';
$string['settingfullnamedescription'] = 'O nome completo é un campo requirido do curso, de modo que ten que definir a etiqueta de descrición no seu ficheiro IMS';
$string['settingshortname'] = 'A etiqueta de descrición IMS para o nome abreviado do curso';
$string['settingshortnamedescription'] = 'O nome abreviado é un campo requirido do curso así que ten que definir a etiqueta de descrición seleccionada no seu ficheiro IMS Enterprise';
$string['settingsummary'] = 'A etiqueta de descrición IMS para o resumo do curso';
$string['settingsummarydescription'] = 'É un campo opcional, seleccione «Deixalo baleiro» se non quere especificar un resumo do curso';
$string['sourcedidfallback'] = 'Utilice o «sourcedid» para o id de usuario da persoa se non é atopado o campo «userid»';
$string['sourcedidfallback_desc'] = 'Nos datos do IMS, o campo <sourcedid> campo o código persistente de identificación dunha persoa que utiliza o sistema orixe. O campo <userid> é un campo separado que debe conter o código de identificación utilizado polo usuario cando inicia sesión. En moitos casos, estes dous códigos poden ser os mesmos, mais non sempre.

Algúns sistemas de información dos alumnos fallan ao emitir o <userid> campo. Se este é o caso, ten que activar este axuste para permitir o uso do <sourcedid> como o ID de usuario Moodle. Se non, deixe esta opción desactivada.';
$string['truncatecoursecodes'] = 'Truncar os códigos do curso para este período';
$string['truncatecoursecodes_desc'] = 'Nalgunhas situacións pode ter códigos de curso que desexa truncar a un tamaño determinado antes do procesamento. De ser o caso, introduza o número de caracteres nesta caixa. Doutra maneira deixe a caixa en branco e non se producirá ningún truncamento.';
$string['updatecourses'] = 'Actualizar o curso';
$string['updatecourses_desc'] = 'Se está activado, o engadido de matriculación de IMS Enterprise pode actualizar os nomes completo e curto (se o sinal «recstatus» está definida en 2, o que representa unha actualización).';
$string['updateusers'] = 'Actualizar as contas de usuario cando son especificadas en datos IMS';
$string['updateusers_desc'] = 'Se está activado, os datos de matriculación de IMS Enterprise poden especificar cambios nas contas de usuario (se o sinal «recstatus» está definida en 2, o que representa unha actualización).';
$string['usecapitafix'] = 'Marque esta caixa se utiliza «Capita» (o seu formato XML está algo errado)';
$string['usecapitafix_desc'] = 'No sistema de datos de alumnos producidos por «Capita» atopouse un lixeiro erro na súa saída XML. De estar a usar «Capita», debería activar esta opción, senón déixea desmarcada.';
$string['usersettings'] = 'Opcións de datos do usuario';
$string['zeroisnotruncation'] = '0 indica que non hai acción de truncar';
