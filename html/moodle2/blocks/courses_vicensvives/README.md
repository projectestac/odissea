Bloque de cursos Vicens Vives
=============================

Bloque para listar, crear y actualizar cursos a partir de lubros importados del
web service de Vicens Vives. También permite configurar automáticamente el web
service de Moodle.

Versiones de Moodle: 3.2, 3.3, 3.4, 3.5

Parámetros de configuración
---------------------------

 * **URL API**: URL del web service de Vicens Vives. Por defecto es
   `http://api.vicensvivesdigital.com/rest`.
 * **Clave compartida**: Clave compartida con el Web Service de Vicens Vives
   para obtener la información de los libros.
 * **Secreto compartido**: Secreto compartido con el Web Service de Vicens Vives
   para obtener la información de los libros.
 * **Número de cursos**: Número de cursos que se muestra en el bloque.
 * **Categoría para cursos**: Categoría por defecto para los cursos de libros de
   Vicens Vives.

Se muestra un aviso si hay algun error en conectar con el web service de Vicens
Vives o en configurar el web service de Moodle.

Configuración del web service de Moodle
---------------------------------------

En guardar los parámetros de configuración se prepara Moodle para que desde
Vicens Vives puedan llamar al web service del plugin local. Se realizan los
pasos siguientes:

 * Se habilitan los web services en Moodle.
 * Se habilita el protocolo REST.
 * Se crea un usuario con username "wsvicensvives".
 * Se crea un rol con nombre "Web Service Vicens Vives" y permisos para usar web
   services REST y editar calificaciones.
 * Se asigna el rol al usuario en contexto global.
 * Se genera un token para el usuario en el servicio Vicens Vives.
 * Se envía el token a Vicens Vives mediante una llamada a su web service.

Cliente del web service de Vicens Vives
---------------------------------------

El fichero `lib/vicensvives.php` contiene la implementación del cliente del web
service de Vicens Vives. El cliente puede devolver una de los siguientes
errores:

 * Web service no configurado: falta configurar las credenciales (clave
   compartida y secreto compartido).
 * Fallo de autenticación: no se ha podido obtener un token de autenticación con
   las credenciales configuradas.
 * Credenciales ya usadas en otro sitio: Vicens Vives no permite usar las mismas
   credenciales en más de una instancia de Moodle.
 * Error desconocido: si el web service de Vicens Vives devuelve un tipo de
   error no reconocido por el cliente.

El token de autenticación se guarda en la base de datos. Si en hacer una llamada
el web service devuelve un error de token inexistente o caducado, se vuelve a
pedir uno nueo con las credenciales configuradas.

El bloque de licencias también usa este cliente para llamar al web service.

La API del web service está documentada en http://api.vicensvivesdigital.com/

Creación de cursos
------------------

El enlace "Crear un nuevo curso" del bloque permite crear un curso a partir de
un libro seleccionado de una lista de libros disponibles.

El idnumber de los cursos creados tiene el formato `vv-BOOKID-N-SUBJECT`. BOOKID
es el ID del libro, N es un número secuencial para distinguir cursos creados a
partir del mismo libro, y SUBJECT es la materia del cursos: "mates", "lengua",
"naturales" o "sociales". Se asigna el formato de curso Vicens Vives a los
cursos.

El libro tiene una estructura de tres niveles: unidades, secciones y
recursos/actividades. En Moodle cada unidad se crea como una sección, y cada
apartado se crea como una etiqueta y (opcionalmente) una actividad LTI. Cada
recurso/actividad se crea como una actividad LTI, excepto los enlaces que son
recursos URL. Los idnumber de las actividades contienen el ID del libro, el tipo
de elemento y el ID del elemento en el libro.

En el libro | En Moodle | idnumber
------------|-----------|---------------------------
Unit        | Sección   | BOOKID_unit_UNITID
Section     | Etiqueta  | BOOKID_lebel_SECTIONID
            | LTI       | BOOKID_section_SECTIONID
Question    | LTI       | BOOKID_question_QUESTIONID
Link        | URL       | BOOKID_link_LINKID
Document    | LTI       | BOOKID_document_DOCUMENTID

La clase `courses_vicensvives_add_book` del fichero `locallib.php` implementa la
creación y actualización de cursos. Entre versiones diferentes de Moodle sólo
cambian los métodos `create_mod` y `set_num_sections`.

Actualización de cursos
-----------------------

El enlace "Ver cursos" muestra una lista de los cursos creados a partir de
libros importados. El botón "Actualizar" vuelve a importar el libro y añade los
contenidos nuevas al curso (no actualiza los contenidos ya creados). Las
unidades, secciones y actividades se añaden ordenadas según su posición en el
libro.
