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
 * Strings for component 'simplecertificate', language 'es', version '3.11'.
 *
 * @package     simplecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allusers'] = 'Todos los usuarios';
$string['awardedsubject'] = 'Aviso de certificado otorgado: {$a->certificate} emitido a {$a->student}';
$string['awardedto'] = 'Otorgado a';
$string['bulkaction'] = 'Elija una operación masiva';
$string['bulkbuttonlabel'] = 'Enviar';
$string['bulkview'] = 'Operaciones masivas';
$string['cantdeleteissue'] = 'Error al eliminar certificados emitidos';
$string['cantissue'] = 'El certificado no puede ser emitido, porque el usuario no ha cumplido las condiciones de la actividad';
$string['certificatecopy'] = 'COPIA';
$string['certificateimage'] = 'Archivo de imagen de certificado';
$string['certificateimage_help'] = 'Esta es la imagen que se utilizará en el certificado';
$string['certificatename'] = 'Nombre de certificado';
$string['certificatename_help'] = 'Nombre de certificado';
$string['certificatenot'] = 'Instancia de Certificado Simple no encontrada';
$string['certificatetext'] = 'Texto del certificado';
$string['certificatetext_help'] = 'Este es el texto que se usará en el reverso del certificado, algunas palabras especiales se reemplazarán con variables como el nombre del curso, el nombre del estudiante, la calificación...
Estas son:
<ul>
<li>{USERNAME} -> Nombre completo del usuario</li>
<li>{COURSENAME} -> Nombre completo del curso (o un nombre del curso alternativo definido)</li>
<li>{GRADE} -> Calificación con formato</li>
<li>{DATE} -> Fecha con formato</li>
<li>{OUTCOME} -> Competencias</li>
<li>{TEACHERS} -> Lista de profesores</li>
<li>{IDNUMBER} -> Número ID del usuario</li>
<li>{FIRSTNAME} -> Nombre del usuario</li>
<li>{LASTNAME} -> Apellidos del usuario</li>
<li>{EMAIL} -> E-mail  del usuario</li>
<li>{ICQ} -> ICQ del usuario</li>
<li>{SKYPE} -> Skype del usuario</li>
<li>{YAHOO} -> Yahoo del usuario</li>
<li>{AIM} -> AIM  del usuario</li>
<li>{MSN} -> MSN del usuario</li>
<li>{PHONE1} -> 1er número de teléfono del usuario</li>
<li>{PHONE2} -> 2º número de teléfono del usuario</li>
<li>{INSTITUTION} -> Institución del usuario</li>
<li>{DEPARTMENT} -> Departamento del usuario</li>
<li>{ADDRESS} -> Dirección del usuario</li>
<li>{CITY} -> Población del usuario</li>
<li>{COUNTRY} -> País del usuario</li>
<li>{URL} -> Página web del usuario</li>
<li>{CERTIFICATECODE} -> Texto del código de certificado único </li>
<li>{USERROLENAME} -> Rol del usuario en el curso</li>
<li>{TIMESTART} -> Fecha de matrícula del usuario en el curso</li>
<li>{USERIMAGE} -> Imagen del perfil del usuario</li>
<li>{USERRESULTS} -> User results (grade) in others course activities</li>
<li>{PROFILE_xxxx} -> Campos personalizados del perfil de usuario</li>
</ul>
Para usar campos personalizados debe utilizar el prefijo "PROFILE_", por ejemplo: si ha creado un campo personalizado con el nombre corto "cumpleaños", el texto a utilizar en el certificado debe ser {PROFILE_CUMPLEAÑOS]

El texto puede usar HTML básico, tipos de letra (fonts) básicos, tablas, pero evite cualquier definición de posición.';
$string['certificatetextx'] = 'Posición horizontal del texto del certificado';
$string['certificatetexty'] = 'Posición vertical del texto del certificado';
$string['certificateverification'] = 'Verificación del certificado';
$string['certlifetime'] = 'Mantener los certificados emitidos durante: (en meses)';
$string['certlifetime_help'] = 'Especifica el periodo de tiempo durante el que desea mantener los certificados emitidos. Los certificados emitidos de antigüedad mayor a la especificada se borrarán automáticamente.';
$string['code'] = 'Código';
$string['codex'] = 'Posición horizontal del código QR';
$string['codey'] = 'Posición vertical del código QR';
$string['completedusers'] = 'Usuarios que cumplen las condiciones de la actividad';
$string['completiondate'] = 'Finalización del curso';
$string['coursegrade'] = 'Calificación del curso';
$string['coursename'] = 'Nombre alternativo del curso';
$string['coursename_help'] = 'Nombre alternativo del curso';
$string['coursenotfound'] = 'Curso no encontrado';
$string['coursestartdate'] = 'Fecha de inicio del curso';
$string['coursetimereq'] = 'Minutos requeridos en el curso';
$string['coursetimereq_help'] = 'Introduzca aquí el mínimo total de tiempo, en minutos, que un estudiante debe haber estado conectado en el curso antes de que pueda recibir el certificado.';
$string['datefmt'] = 'Formato de fecha';
$string['datefmt_help'] = 'Elija un formato de fecha PHP válido (http://www.php.net/manual/en/function.strftime.php). O déjelo vacío para usar el formato del idioma elegido por el usuario';
$string['defaultcertificatetextx'] = 'Posición horizontal por defecto del texto';
$string['defaultcertificatetexty'] = 'Posición vertical por defecto del texto';
$string['defaultcodex'] = 'Posición horizontal por defecto del código QR';
$string['defaultcodey'] = 'Posición vertical por defecto del código QR';
$string['defaultheight'] = 'Altura por defecto';
$string['defaultperpage'] = 'Por página';
$string['defaultperpage_help'] = 'Número de certificados a mostrar por página (Máx. 200)';
$string['defaultwidth'] = 'Anchura por defecto';
$string['deleteall'] = 'Borrar todo';
$string['deleteselected'] = 'Eliminar seleccionados';
$string['deletissuedcertificates'] = 'Eliminar certificados emitidos';
$string['delivery'] = 'Entrega';
$string['delivery_help'] = 'Elija aquí cómo quiere que sus estudiantes obtengan su certificado:
<ul>
<li>Abrir en Navegador: Abre el certificado en una ventana nueva del navegador de Internet.</li>
<li>Forzar descarga: Abre la ventana del navegador para descargar un archivo.</li>
<li>Certificado por correo electrónico: Al elegir esta opción se envía el certificado al estudiante mediante un adjunto a un mensaje de correo.</li>
<li>Después de que un usuario haya recibido su certificado, si pulsa sobre el enlace del certificado dentro de la página del curso, verá la fecha en que recibió dicho certificado y podrá verlo de nuevo.</li>
</ul>';
$string['designoptions'] = 'Opciones de diseño';
$string['download'] = 'Forzar descarga';
$string['emailcertificate'] = 'Correo';
$string['emailfrom'] = 'Nombre del remitente del correo';
$string['emailfrom_help'] = 'Nombre alternativo del formulario de correo';
$string['emailoncompletion'] = 'Enviar correo al finalizar el curso';
$string['emailothers'] = 'Enviar correo a otros';
$string['emailothers_help'] = 'Introduzca aquí las direcciones Email, separadas por comas, de quienes deben ser avisados con un email cada vez que un estudiante reciba un certificado.';
$string['emailsent'] = 'Los correos han sido enviados';
$string['emailstudentsubject'] = 'Tu certificado para {$a->course}';
$string['emailstudenttext'] = 'Se adjunta el certificado de {$a->course}.';
$string['emailteachermail'] = '{$a->student} ha recibido su certificado: \'{$a->certificate}\' del curso {$a->course}.

Puede verlo aquí: {$a->url}';
$string['emailteachermailhtml'] = '{$a->student} ha recibido su certificado: \'<i>{$a->certificate}\' del curso {$a->course}\'</i>.

Puede verlo aquí: <a href="{$a->url}">Informe de Certificado</a>.';
$string['emailteachers'] = 'Correos de los profesores';
$string['emailteachers_help'] = 'Si se habilita, los profesores serán avisados con un correo cada vez que un estudiante reciba un certificado.';
$string['enablesecondpage'] = 'Habilitar página del reverso del certificado';
$string['enablesecondpage_help'] = 'Habilita la edición del reverso del certificado; si estuviera deshabilitada, solamente se imprimiría el código QR en la página del reverso (si el código QR está habilitado)';
$string['eventcertificate_verified'] = 'Certificado verificado';
$string['eventcertificate_verified_description'] = 'El usuario con id {$a->userid} comprobó el certificado con id {$a->certificateid}, emitido para el usuario con id {$a->certiticate_userid}.';
$string['filenotfound'] = 'Archivo no encontrado: {$a}';
$string['getcertificate'] = 'Obtener certificado';
$string['grade'] = 'Calificación';
$string['gradefmt'] = 'Formato de la calificación';
$string['gradefmt_help'] = 'Hay tres formatos disponibles si decide imprimir una calificación en el certificado:
<ul>
<li>Calificación en Porcentaje: Imprime la calificación como un porcentaje.</li>
<li>Calificación en Puntos: Imprime el valor en puntos de la calificación.</li>
<li>Calificación en Letra: Imprime la calificación de porcentaje como una letra.</li></ul>';
$string['gradeletter'] = 'Calificación en Letra';
$string['gradepercent'] = 'Calificación en Porcentaje';
$string['gradepoints'] = 'Calificación en Puntos';
$string['height'] = 'Altura del certificado';
$string['hours'] = 'horas';
$string['intro'] = 'Introducción';
$string['invalidcode'] = 'Código de certificado no válido';
$string['issued'] = 'Emitido';
$string['issuedcertificatenotfound'] = 'Certificado emitido no encontrado';
$string['issueddate'] = 'Fecha de emisión';
$string['issueddownload'] = 'Certificado emitido [id: {$a}] descargado';
$string['issuedview'] = 'Certificados emitidos';
$string['issueoptions'] = 'Opciones de emisión';
$string['keywords'] = 'certificado, curso, PDF, Moodle';
$string['modulename'] = 'Certificado Simple';
$string['modulename_help'] = 'El módulo de actividad \'Certificado Simple\' permite al profesor crear certificados personalizados que pueden ser emitidos a los alumnos que han completado los requisitos que ha especificado el profesor.';
$string['modulenameplural'] = 'Certificados simples';
$string['multipdf'] = 'Descargar certificados en un fichero zip';
$string['neverdeleteoption'] = 'No eliminar nunca';
$string['nocertificatesissued'] = 'No hay certificados emitidos';
$string['nodelivering'] = 'Sin envio, el usuario recibirá su certificado mediante otras vías';
$string['notreceived'] = 'Certificado no emitido';
$string['onepdf'] = 'Descargar certificados en un fichero PDF';
$string['openbrowser'] = 'Abrir en una nueva ventana';
$string['opendownload'] = 'Pulse en el botón inferior para guardar su certificado en su ordenador.';
$string['openemail'] = 'Pulse en el botón inferior y su certificado se le enviará como un archivo adjunto a un correo electrónico.';
$string['openwindow'] = 'Pulse en el botón inferior para abrir su certificado en una nueva ventana del navegador.';
$string['pluginadministration'] = 'Administración del certificado';
$string['pluginname'] = 'Certificado Simple';
$string['printdate'] = 'Fecha de impresión';
$string['printdate_help'] = 'Esta es la fecha que se va a imprimir, si ha decidido imprimir una fecha. Si se selecciona la fecha de la finalización del curso, pero el estudiante no ha completado el curso, se imprimirá la fecha de recepción. También puede imprimir la fecha en función de cuándo se haya calificado una actividad. Si se emite un certificado antes de que se haya calificado la actividad, se imprimirá la fecha de recepción.';
$string['printgrade'] = 'Imprimir calificación';
$string['printgrade_help'] = 'Puede elegir cualquiera de los elementos de calificación del curso disponibles en el libro de calificaciones para imprimirla en el certificado como calificación obtenida por el usuario. Los elementos de calificación se enumeran en el orden en el que aparecen en el libro de calificaciones. Elija el formato de la nota a continuación.';
$string['printoutcome'] = 'Imprimir competencia';
$string['printoutcome_help'] = 'Puede elegir cualquier competencia del curso para imprimir en el certificado el nombre de dicha competencia y los resultados obtenidos por el usuario. Un ejemplo sería: Competencia en Tarea: Apto.';
$string['printqrcode'] = 'Imprimir Código QR del certificado';
$string['printqrcode_help'] = 'Imprimir (o no) Código QR del certificado';
$string['qrcodefirstpage'] = 'Imprimir Código QR en la primera página';
$string['qrcodefirstpage_help'] = 'Imprimir Código QR en la primera página';
$string['qrcodeposition'] = 'Posición del código QR en el Certificado';
$string['qrcodeposition_help'] = 'Estas son las coodenadas XY (en milímetros) del código QR del certificado.';
$string['receiveddate'] = 'Fecha de recepción';
$string['report'] = 'Informe';
$string['requiredtimenotmet'] = 'Debe haber utilizado al menos {$a->requiredtime} minutos en este curso para emitir este certificado';
$string['secondimage'] = 'Archivo de imagen del reverso del certificado';
$string['secondimage_help'] = 'Esta es la imagen que se usará en el reverso del certificado';
$string['secondpageoptions'] = 'Página del reverso del certificado';
$string['secondpagetext'] = 'Texto del reverso del certificado';
$string['secondpagex'] = 'Posición horizontal del texto del reverso del certificado';
$string['secondpagey'] = 'Posición vertical del texto del reverso del certificado';
$string['secondtextposition'] = 'Posición del texto del reverso del certificado';
$string['secondtextposition_help'] = 'Estas son las coordenadas XY (en milímetros) del texto de la página de reverso del certificado';
$string['sendtoemail'] = 'Enviar al correo electrónico del usuario';
$string['showusers'] = 'Mostrar';
$string['simplecertificate:addinstance'] = 'Añadir Actividad Certificado Simple';
$string['simplecertificate:manage'] = 'Gestionar Actividad Certificado Simple';
$string['simplecertificate:view'] = 'Visualizar Actividad de Certificado Simple';
$string['size'] = 'Tamaño del certificado';
$string['size_help'] = 'Estos son el ancho y alto del certificado en milímetros. El tamaño por defecto es A4 apaisado (297 * 210 mm).';
$string['standardview'] = 'Emitir un certificado de prueba';
$string['summaryofattempts'] = 'Resumen de certificados recibidos anteriormente';
$string['textposition'] = 'Posición del texto del certificado';
$string['textposition_help'] = 'Estas son las coordenadas XY (en milímetros) del texto del certificado';
$string['timestartdatefmt'] = 'Formato de fecha de la matriculación';
$string['timestartdatefmt_help'] = 'Introduzca un formato de fecha válido de PHP (<a href="http://www.php.net/manual/en/function.strftime.php"> Formatos de Fecha</a>). O, déjelo vacío para utilizar el formato del idioma que el usuario haya seleccionado.';
$string['upgradeerror'] = 'Error actualizando $a';
$string['usercontextnotfound'] = 'Contexto de usuario no encontrado';
$string['userdateformat'] = 'Formato de fecha del idioma del usuario';
$string['usernotfound'] = 'Usuario no encontrado';
$string['variablesoptions'] = 'Otras Opciones';
$string['verifycertificate'] = 'Verificar certificado';
$string['viewcertificateviews'] = 'Ver {$a} certificados emitidos';
$string['width'] = 'Anchura del certificado';
