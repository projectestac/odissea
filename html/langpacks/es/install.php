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
 * Strings for component 'install', language 'es', version '3.11'.
 *
 * @package     install
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'El directorio especificado para admin es incorrecto';
$string['admindirname'] = 'Directorio Admin';
$string['admindirsetting'] = 'Muy pocos servidores web usan /admin como URL especial para permitirle acceder a un panel de control o similar. Desgraciadamente, esto entra en conflicto con la ubicación estándar de las páginas de administración de Moodle. Puede corregir esto renombrando el directorio admin en su instalación, y poniendo aquí ese nuevo nombre. Por ejemplo:  <br /> <br /><b>moodleadmin</b><br /> <br />
Así se corregirán los enlaces admin en Moodle.';
$string['admindirsettinghead'] = 'Seleccionar el directorio admin...';
$string['admindirsettingsub'] = 'Muy pocos servidores web usan /admin como URL especial para permitirle acceder
    a un panel de control o similar. Desgraciadamente, esto entra en conflicto con la ubicación estándar
    de las páginas de administración de Moodle. Usted puede corregir esto renombrando el directorio admin
    en su instalación, y poniendo aquí ese nuevo nombre. Por ejemplo: <br /> <br /><b>moodleadmin</b><br /> <br />
    Así se corregirán los enlaces admin en Moodle.';
$string['availablelangs'] = 'Paquetes de idiomas disponibles';
$string['caution'] = 'Precaución';
$string['chooselanguage'] = 'Seleccionar idioma';
$string['chooselanguagehead'] = 'Seleccionar idioma';
$string['chooselanguagesub'] = 'Por favor, seleccione un idioma para el proceso de instalación. Este idioma se usará también como idioma por defecto del sitio, si bien puede cambiarse más adelante.';
$string['cliadminemail'] = 'Nuevo correo electrónico de administrador';
$string['cliadminpassword'] = 'Nueva contraseña de usuario admin';
$string['cliadminusername'] = 'Nombre de usuario de la cuenta del administrador';
$string['clialreadyconfigured'] = 'El archivo de configuración config.php ya existe. Por favor, utilice admin/cli/install_database.php para instalar Moodle en este sitio.';
$string['clialreadyinstalled'] = 'El archivo de configuración config.php ya existe. Por favor, utilice admin/cli/install_database.php para actualizar Moodle en este sitio.';
$string['cliinstallfinished'] = 'La instalación se completo exitosamente.';
$string['cliinstallheader'] = 'Programa de instalación Moodle de línea de comando {$a}';
$string['climustagreelicense'] = 'En modo no interactivo debe aceptar la licencia especificando la opción --agree-license';
$string['cliskipdatabase'] = 'Omitiendo instalación de la base de datos.';
$string['clitablesexist'] = 'Tablas de base de datos ya existentes; la instalación CLI no puede continuar.';
$string['compatibilitysettings'] = 'Comprobando sus ajustes PHP...';
$string['compatibilitysettingshead'] = 'Comprobando sus ajustes PHP...';
$string['compatibilitysettingssub'] = 'Su servidor debería pasar todos estas comprobaciones para que Moodle pueda funcionar correctamente.';
$string['configfilenotwritten'] = '<p>El script de instalación no ha podido crear automáticamente un archivo config.php con las especificaciones elegidas. Por favor, copie el siguiente código en un archivo llamado config.php y coloque ese archivo en el directorio raíz de Moodle.</p>';
$string['configfilewritten'] = 'config.php se ha creado con éxito';
$string['configurationcomplete'] = 'Configuración finalizada';
$string['configurationcompletehead'] = 'Configuración finalizada';
$string['configurationcompletesub'] = 'Moodle ha creado su fichero de configuración. ';
$string['database'] = 'Base de datos';
$string['databasehead'] = 'Ajustes de base de datos';
$string['databasehost'] = 'Servidor de la base de datos';
$string['databasename'] = 'Nombre de la base de datos';
$string['databasepass'] = 'Contraseña de la base de datos';
$string['databaseport'] = 'Puerto de la base de datos';
$string['databasesocket'] = 'Socket Unix';
$string['databasetypehead'] = 'Seleccione el controlador de la base de datos';
$string['databasetypesub'] = 'Moodle soporta varios tipos de servidores de base de datos. Por favor, póngase en contacto con el administrador del servidor si no sabe qué tipo usar.';
$string['databaseuser'] = 'Usuario de la base de datos';
$string['dataroot'] = 'Directorio de Datos';
$string['datarooterror'] = 'El \'directorio de datos\' no pudo ser encontrado o creado. Corrija la ruta o cree el directorio manualmente.';
$string['datarootpermission'] = 'Permiso directorios de datos';
$string['datarootpublicerror'] = 'El \'directorio de datos\' que ha especificado es directamente accesible vía web, debe utilizar un directorio diferente.';
$string['dbconnectionerror'] = 'Error de conexión con la base de datos. Por favor, compruebe los ajustes de la base de datos.';
$string['dbcreationerror'] = 'Error al crear la base de datos. No se ha podido crear la base de datos con el nombre y ajustes suministrados';
$string['dbhost'] = 'Servidor';
$string['dbpass'] = 'Contraseña';
$string['dbport'] = 'Puerto';
$string['dbprefix'] = 'Prefijo de tablas';
$string['dbtype'] = 'Tipo';
$string['directorysettings'] = '<p>Por favor, confirme las direcciones de la instalación de Moodle.</p>

<p><b>Dirección Web:</b>
Especifique la dirección web completa en la que se accederá a Moodle. Si su sitio web es accesible a través de varias URLs, seleccione la que resulte de acceso más natural a sus estudiantes.  No incluya la diagonal invertida final (/).</p>

<p><b>Directorio de Moodle:</b>
Especifique la ruta completa de esta instalación. Asegúrese de que las mayúsculas/minúsculas son correctas.

<p><b>Directorio de datos:</b>
Usted necesita un lugar en el que Moodle pueda guardar los archivos subidos. Este directorio debe ser leíble Y ESCRIBIBLE por el usuario del servidor web (normalmente \'nobody\', \'apache\', \'www-data\'), pero no debería ser directamente accesible desde la web. El instalador tratará crearlo si no existe.</p>';
$string['directorysettingshead'] = 'Por favor, confirme las siguientes direcciones de la instalación de Moodle';
$string['directorysettingssub'] = '<b>Dirección Web:</b>
Especifique la dirección web completa en la que se accederá a Moodle.
Si su sitio es accesible desde diferentes URLs entonces elija
la más natural que sus estudiantes deberían utilizar. No incluya la diagonal invertida final ().
<br />
<br />
<b>Directorio Moodle:</b>
Especifique la ruta completa de esta instalación. Asegúrese de que las mayúsculas/minúsculas son correctas.
<br />
<br />
<b>Directorio de Datos:</b>
Usted necesita un espacio donde Moodle puede guardar los archivos subidos. En este directorio debe poder LEER y ESCRIBIR el usuario del servidor web (por lo general \'nobody\',  \'apache\' o \'www-data\'), pero no debe poderse acceder a esta carpeta directamente a través de la web. El instalador tratará de crearla si no existe.';
$string['dirroot'] = 'Directorio de Moodle';
$string['dirrooterror'] = 'El \'Directorio de Moodle\' parece incorrecto, no se puede encontrar una instalación de Moodle. El valor ha sido restablecido.';
$string['download'] = 'Descargar';
$string['downloadlanguagebutton'] = 'Descargar el paquete de idioma "{$a}"';
$string['downloadlanguagehead'] = 'Descargar paquete de idioma';
$string['downloadlanguagenotneeded'] = 'Puede continuar el proceso de instalación con el idioma por defecto, "{$a}".';
$string['downloadlanguagesub'] = 'Ahora tiene la opción de descargar su paquete de idioma y continuar con el proceso de instalación en ese idioma.<br /><br />Si no es posible la descarga el proceso de instalación continuará en inglés (una vez que la instalación haya finalizado, tendrá la oportunidad de descargar e instalar otros idiomas adicionales).';
$string['doyouagree'] = '¿Está de acuerdo? (sí/no):';
$string['environmenthead'] = 'Comprobando su entorno';
$string['environmentsub'] = 'Estamos comprobando si los diferentes componentes de su servidor cumplen con los requerimientos mínimos de sistema';
$string['environmentsub2'] = 'Cada versión de Moodle tiene algún requisito mínimo de la versión de PHP y un número obligatorio de extensiones de PHP.
Una comprobación del entorno completo se realiza antes de cada instalación y actualización. Por favor, póngase en contacto con el administrador del servidor si no sabes cómo instalar la nueva versión o habilitar las extensiones PHP.';
$string['errorsinenvironment'] = '¡La comprobación del entorno fallo!';
$string['fail'] = 'Fallo';
$string['fileuploads'] = 'Subidas de archivos';
$string['fileuploadserror'] = 'Debe estar activado';
$string['fileuploadshelp'] = '<p>La subida de archivos parece estar desactivada en su servidor.</p>

<p>Moodle aún puede ser instalado, pero sin esta funcionalidad, usted no podrá subir archivos a los cursos ni imágenes nuevas de perfil de usuario.</p>

<p>Para habilitar la subida de archivos, usted (o el administrador del sistema) necesitará editar el archivo php.ini principal y cambiar el ajuste de <b>file_uploads</b> a \'1\'.</p>';
$string['inputdatadirectory'] = 'Directorio de datos:';
$string['inputwebadress'] = 'Dirección Web:';
$string['inputwebdirectory'] = 'Directorio Moodle:';
$string['installation'] = 'Instalación';
$string['invaliddbprefix'] = 'Prefijo inválido. El prefijo solamente puede contener letras minúsculas y guiones bajos.';
$string['langdownloaderror'] = 'El idioma "{$a}" no pudo ser descargado. El proceso de instalación continuará en Inglés.';
$string['langdownloadok'] = 'El idioma "{$a}" ha sido instalado correctamente. El proceso de instalación continuará en este idioma.';
$string['memorylimit'] = 'Límite de memoria';
$string['memorylimiterror'] = 'El límite de memoria PHP esta fijado demasiado bajo... Puede tener problemas más tarde.';
$string['memorylimithelp'] = '<p>El límite de memoria PHP en su servidor es actualmente {$a}.</p>

<p>Esto puede ocasionar que Moodle tenga problemas de memoria más adelante, especialmente si usted tiene activados muchos módulos y/o muchos usuarios.</p>

<p>Recomendamos que configure PHP si es posible con un límite más alto, como 40M.
Puede probar varias formas de hacer esto:</p>
<ol>
<li>Si puede hacerlo, recopile PHP con <i>--enable-memory-limit</i>.
Esto hace que Moodle fije por sí mismo el límite de memoria.</li>
<li>Si tiene acceso al archivo "php.ini", puede cambiar el ajuste <b>memory_limit</b>
a, digamos, 40M. Si no tiene acceso, puede pedir a su administrador que lo haga por usted.</li>
<li>En algunos servidores PHP puede crear en el directorio Moodle un archivo .htaccess que contenga esta línea:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Sin embargo, en algunos servidores esto hace que <b>todas</b> las páginas PHP dejen de funcionar
(podrá ver los errores cuando mire las páginas) de modo que tendrá que eliminar el archivo ".htaccess".</p></li>
</ol>';
$string['mysqliextensionisnotpresentinphp'] = 'PHP no ha sido configurado adecuadamente con la extensión MySQLi de forma que se pueda comunicar con MySQL. Por favor, compruebe su archivo php.ini o recompile PHP.';
$string['nativeauroramysql'] = 'Aurora MySQL (native/auroramysql)';
$string['nativeauroramysqlhelp'] = '<p>La base de datos es donde se almacenan la mayoría de las configuraciones y los datos de Moodle y debe estar configurada aquí.</p>
<p>El nombre de la base de datos, nombre de usuario y contraseña de la base de datos son campos obligatorios; el prefijo de la tabla es opcional.</p>
<p>El nombre de la base de datos solamente puede contener caracteres alfanuméricos, el símbolo del dólar ($) y el guión bajo (_).</p>
<p>Si actualmente no existiera la base de datos y el usuario que indica tuviera permiso, Mooodle intentará crear una nueva base de datos con los permisos y configuraciones correctos.</p>
<p>Este driver no es compatible con el motor antiguo MyISAM.</p>';
$string['nativemariadb'] = 'MariaDB (nativo/mariadb)';
$string['nativemariadbhelp'] = '<p>La base de datos es donde la mayor parte de la configuración y datos de Moodle están almacenados y deben ser configurados aquí. </p>
<p>El nombre de la base de datos, nombre de usuario, y contraseña son campos obligatorios; el prefijo de las tablas es opcional.</p>
<p>El nombre de la base de datos debe contener sólo caracteres alfanuméricos, símbolos de dólar ($) y guiones bajos (_).</p>
<p>Si la base de datos no existe actualmente, y el usuario que especifica tiene permiso, Moodle tratará de crear una nueva base de datos con los permisos y configuración correctos.</p>
<p> Este controlador no es compatible con el antiguo motor MyISAM.</p>';
$string['nativemysqli'] = 'MySQL mejorado (native/mysqli)';
$string['nativemysqlihelp'] = '<p>La base de datos es donde se almacenan la mayoría de las configuraciones y los datos de Moodle y debe estar configurada aquí.</p>
<p>El nombre de la base de datos, nombre de usuario y contraseña de la base de datos son campos obligatorios; el prefijo de la tabla es opcional.</p>
<p>El nombre de la base de datos solamente puede contener caracteres alfanuméricos, el símbolo del dólar ($) y el guión bajo (_).</p>
<p>Si actualmente no existiera la base de datos y el usuario que indica tuviera permiso, Mooodle intentará crear una nueva base de datos con los permisos y configuraciones correctos.</p>';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativeocihelp'] = 'Ahora tiene que configurar la base de datos donde se almacenarán la mayoría de los datos de Moodle. Esta base de datos debe estar creada previamente, al igual que un nombre de usuario y su contraseña, para poder acceder a ella. El prefijo de la tabla es obligatorio.';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = '<p>La base de datos es donde la mayor parte de la configuración y datos de Moodle están almacenados, y deben ser configurados aquí. </p>
<p>El nombre de la base de datos, nombre de usuario, y contraseña son campos obligatorios; el prefijo de las tablas es opcional.</p>
<p>La base de datos debe existir y el usuario ha de tener autorización para leer y escribir en la misma.</p>';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Ahora tiene que configurar la base de datos donde se almacenarán la mayoría de los datos de Moodle. Esta base de datos debe estar creada previamente, al igual que un nombre de usuario y su contraseña, para poder acceder a ella. El prefijo de la tabla es obligatorio.';
$string['nativesqlsrvnodriver'] = 'Los drivers Microsoft del servidor SQL para PHP no están instalados o configurados adecuadamente.';
$string['ociextensionisnotpresentinphp'] = 'PHP no ha sido adecuadamente configurado con la extensión OCI8 de modo que pueda comunicarse con Oracle. Por favor, compruebe el archivo php.ini o vuelva a compilar PHP.';
$string['pass'] = 'Correcto';
$string['paths'] = 'Rutas';
$string['pathserrcreatedataroot'] = 'El directorio de los datos ({$a->dataroot}) no puede ser creado por el instalador.';
$string['pathshead'] = 'Confirme las rutas';
$string['pathsrodataroot'] = 'El directorio dataroot no tiene permisos de escritura.';
$string['pathsroparentdataroot'] = 'El directorio padre ({$a->parent}) no tiene permisos de escritura. El directorio de los datos ({$a->dataroot}) no puede ser creado por el instalador.';
$string['pathssubadmindir'] = 'Muy pocos servidores web usan /admin como un URL especial para acceder a un
panel de control o algo similar. Lamentablemente, esto entra en conflicto con la ubicación estándar para las páginas de administración de Moodle. Usted puede solucionar este problema, renombrando el directorio admin en su instalación Moodle, poniendo un nuevo nombre aquí. Por ejemplo: <em> moodleadmin </em>. Esto solucionará los enlaces de administración en instalación Moodle.';
$string['pathssubdataroot'] = '<p>Un directorio en el que Moodle puede guardar los archivos subidos por usuarios.</p>
<p>En este directorio el usuario del servidor web  (por lo general \'nobody\',  \'apache\' o \'www-data\') debe poder leer y escribir.</p>
<p>No debe poderse acceder a esta carpeta directamente a través de la web.</p>
<p>Si el directorio no existe, el instalador tratará de crearlo.</p>';
$string['pathssubdirroot'] = '<p>Ruta completa del directorio que contiene el código de  Moodle.</p>';
$string['pathssubwwwroot'] = '<p>Dirección web completa para acceder a Moodle, es decir, la dirección que los usuarios escribirán en la barra de búsqueda del navegador para acceder a Moodle.</p>
<p>No es posible acceder a Moodle utilizando múltiples direcciones. Si su portal tiene varias direcciones debe configurar la más sencilla y configurar un redireccionamiento permanente desde las otras.</p>
<p>Si su portal es accesible desde internet, y desde una ret interna (llamada intranet), entonces use la dirección pública aquí.</p>
<p>Si la dirección actual no es correcta, por favor, cambie el URL en la barra de búsqueda de su navegador y reinicie la instalación.</p>';
$string['pathsunsecuredataroot'] = 'La ubicación de dataroot no es segura';
$string['pathswrongadmindir'] = 'El directorio admin no existe';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP no ha sido adecuadamente configurado con la extensión PGSQL de modo que pueda comunicarse con PostgreSQL. Por favor, compruebe el archivo php.ini o vuelva a compilar PHP.';
$string['phpextension'] = 'Extensión PHP {$a}';
$string['phpversion'] = 'Versión PHP';
$string['phpversionhelp'] = '<p>Moodle requiere una versión de PHP que sea al menos la 5.6.5 o 7.1 (7.0.x tiene algunas limitaciones del motor).</p>
<p>En este momento está ejecutando la versión {$a}.</p>
<p>Debe actualizar PHP o trasladarse a otro servidor con una versión más reciente de PHP.</p>';
$string['releasenoteslink'] = 'Para obtener información acerca de esta versión de Moodle, consulte las notas de la versión en {$a}';
$string['safemode'] = 'Modo Seguro';
$string['safemodeerror'] = 'Moodle puede tener problemas con Modo Seguro (\'safe mode\') activado';
$string['safemodehelp'] = '<p>Moodle puede tener varios problemas con el  Modo Seguro (\'safe mode\') activado, y probablemente no pueda crear nuevos archivos.</p>

<p>Normalmente el Modo Seguro (\'safe mode\') sólo es activado por servidores web públicos paranoides, así que lo que puede que deba encontrar otra compañía para su sitio Moodle.</p>

<p>Si lo desea, puede seguir con la instalación, pero experimentará problemas más adelante.</p>';
$string['sessionautostart'] = 'Inicio automático de sesión';
$string['sessionautostarterror'] = 'Esto debe estar desactivado';
$string['sessionautostarthelp'] = '<p>Moodle requiere apoyo de sesión y no funcionará sin él.</p>

<p>Las sesiones deben estar activadas en el archhivo php.ini para el parámetro session.auto_start.</p>';
$string['sqliteextensionisnotpresentinphp'] = 'PHP no ha sido adecuadamente configurado con la extensión SQLite. Por favor, compruebe su archivo php.ini o recompile PHP.';
$string['upgradingqtypeplugin'] = 'Actualizando el plugin pregunta/tipo';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Si está viendo esta página es porque ha podido ejecutar el paquete <strong>{$a->packname} {$a->packversion}</strong> satisfactoriamente en su ordenador. ¡Enhorabuena!';
$string['welcomep30'] = 'Esta versión de <strong>{$a->installername}</strong> incluye las
    aplicaciones necesarias para que <strong>Moodle</strong> funcione en su ordenador,
    principalmente:';
$string['welcomep40'] = 'El paquete también incluye <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'El uso de todas las aplicaciones del paquete está supeditado a sus respectivas licencias. El programa <strong>{$a->installername}</strong> es <a href="http://www.opensource.org/docs/definition_plain.html">de código abierto</a> y se distribuye bajo licencia <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.';
$string['welcomep60'] = 'Las siguientes páginas le guiarán a través de algunos sencillos pasos para configurar y ajustar <strong>Moodle</strong> en su ordenador. Puede utilizar los valores por defecto sugeridos o, de forma opcional, modificarlos para que se ajusten a sus necesidades.';
$string['welcomep70'] = 'Pulse en el botón "Siguiente" para continuar con la configuración de <strong>Moodle</strong>.';
$string['wwwroot'] = 'Dirección Web';
$string['wwwrooterror'] = 'La \'Dirección Web\' parece incorrecta. No se pudo encontrar una instalación de Moodle. El valor ha sido cambiado por el original.';
