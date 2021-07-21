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
 * Strings for component 'mediagallery', language 'es', version '3.11'.
 *
 * @package     mediagallery
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addagallery'] = 'Añadir una galería';
$string['addanitem'] = 'Añadir un elemento';
$string['addbulkitems'] = 'Añadir elementos en masa';
$string['addfiles'] = 'Añadir archivo(s)';
$string['addsamplegallery'] = 'Añadir una galería de muestra';
$string['allowcomments'] = 'Permitir comentarios';
$string['allowcomments_help'] = 'Pemitirle a los usuarios el comentar acerca de elementos y galerías.';
$string['allowlikes'] = 'Permitir \'me gustas\'';
$string['allowlikes_help'] = 'Permitirles a los usuarios que seleccionen \'me gusta\' en elementos de una galería.';
$string['areagallery'] = 'Galerías';
$string['areaitem'] = 'Elementos';
$string['arealowres'] = 'Baja resolución';
$string['areathumbnail'] = 'Miniaturas';
$string['assignedit'] = 'Editar tarea';
$string['assignsubmit'] = 'Enviar tarea';
$string['assignsubmitted'] = 'Tarea enviada';
$string['automatic'] = 'Automático';
$string['beingprocessed'] = 'procesándose';
$string['bottom'] = 'Fondo';
$string['broadcaster'] = 'Comunicador';
$string['broadcaster_help'] = '¿Quién fue el distribuidor que comunicó este trabajo?';
$string['caption'] = 'Título';
$string['caption_help'] = 'Leyenda o título para este elemento en su galería. Este título se mostrará junto al elemento. Si optas por dejar esto vacío, en su lugar se mostrará el nombre del archivo (o la URL) como titulo.';
$string['captionposition'] = 'Posición del título';
$string['carousel'] = 'Carrusel';
$string['choosecontent'] = 'Selecciona, un archivo para subir, o una URL en las opciones inferiores.';
$string['close'] = 'Cerrar';
$string['collection'] = 'Colección';
$string['collection_help'] = 'La colección desde la que buscar.';
$string['collectionwasdeleted'] = 'Lo siento; esta colección ya no existe y ha sido eliminada de este curso.';
$string['collmode'] = 'Modo colección';
$string['collmode_help'] = 'Esto decide si es que la colección estará en Moodle, o si estará enlazada a theBox. Una vez configurado, este valor no puede ser cambiado.

<ul><li>Estándar: En este modo, la colección, sus galerías y sus ítems, están almacenados en Moodle.</li></ul>';
$string['colltype'] = 'Tipo de colección';
$string['colltype_help'] = 'El tipo de colección determina en qué nivel los usuarios pueden interactuar con la colección y su contenido.

<ul>
<li> Colección del instructor: solo los usuarios que pueden calificar la colección pueden agregar / editar contenido dentro de ella. Esto se usa principalmente para que los instructores creen colecciones de ejemplo; o un conjunto de galerías sin permitir que los usuarios creen las suyas propias. </li>
<li> Colección contribuida: permite a los usuarios crear sus propias galerías y elementos, pero la colección no se puede usar como parte de una tarea. </li>
<li> Colección de asignaciones: los usuarios solo pueden ver las galerías que ellos o su grupo (si están en modo de grupo) han creado. Se puede utilizar como parte del envío de una tarea. </li>
<li> Colección de tareas revisadas por pares: los usuarios pueden ver las galerías de otros usuarios / grupos y dar me gusta / comentar sobre ellas si esas funciones están habilitadas. Se puede utilizar como parte del envío de una tarea. </li> </ul>';
$string['colltypeassignment'] = 'Colección de asignaciones';
$string['colltypecontributed'] = 'Colección contribuída';
$string['colltypeinstructor'] = 'Colección del instructor';
$string['colltypepeerreviewed'] = 'Colección de tarea revisada por pares';
$string['colltypesingle'] = 'Colección única';
$string['comments'] = 'Comentarios';
$string['completegallery'] = 'Galería completa';
$string['configdisablestandardgallery'] = 'Impedir que los usuarios creen galerías estándar.';
$string['configenablethebox'] = 'Esto necesita ser habilitado para que los usuarios puedan crear nuevas colecciones y contenido basados en theBox. Si se deshabilita, las colecciones de theBox existentes mostrarán un mensaje que dice que la actividad está actualmente no-disponible. Las colecciones estándares no serán afectadas.';
$string['configmaxbytes'] = 'Tamaño de archivo de elemento máximo predeterminado para todas las colecciones de medios en el sitio (sujeto a los límites del curso y otras configuraciones locales)';
$string['confirmcollectiondelete'] = 'Confirmar eliminación de colección';
$string['confirmgallerydelete'] = 'Confirmar eliminación de galería';
$string['confirmitemdelete'] = 'Confirmar eliminación de elemento';
$string['content'] = 'Contenido';
$string['content_help'] = 'El elemento que quiere añadir a su galería';
$string['contentbulk'] = 'Contenido';
$string['contentbulk_help'] = 'Puedes seleccionar un archivo ZIP que contenga múltiples imágenes, el cual será extraído dentro del directorio de imágenes depués de subirlo.';
$string['contentbulkheader'] = 'Aquí puede cargar un archivo zip con sus elementos. Cada archivo dentro del archivo zip se agregará como un elemento en la galería, así que asegúrese de que solo los archivos que desea cargar estén en el archivo antes de enviarlo. Las carpetas dentro del archivo se ignoran.';
$string['contentlinked'] = 'Contenido';
$string['contentlinked_help'] = 'Una vez que un elemento está vinculado al contenido de theBox, no puede cambiar el archivo vinculado.';
$string['contentlinkedinfo'] = 'Este elemento está vinculado al archivo {$a} en theBox.';
$string['contributable'] = 'Contribuíble';
$string['contributable_help'] = 'Cuando una galería es contribuible, permite a otros usuarios agregar contenido a su galería. Solo estarán limitados a editar sus propios elementos. El creador de la galería podrá eliminar elementos de la galería.';
$string['copyright'] = 'Derechos de autor';
$string['copyright_help'] = 'Esto define qué licencia de derechos de autor se establece para todos los elementos que carga a través de este formulario.';
$string['createdby'] = 'Creado por: {$a}';
$string['creator'] = 'Creador';
$string['datecreated'] = 'Fecha de creación';
$string['deletegallery'] = 'Eliminar galería';
$string['deleteitem'] = 'Eliminar elemento';
$string['deleteitemtype'] = 'Eliminar {$a}';
$string['deleteorremovecollection'] = 'Si desea eliminar el enlace a la colección sin eliminar el contenido, haga clic en enviar. <br/> <br/>

Si desea eliminar el enlace a la colección y eliminar el contenido, escriba BORRAR en el cuadro de texto a continuación y haga clic en enviar.';
$string['deleteorremovecollectionwarn'] = 'Al eliminar, reconoce que está: <br/>
- eliminanado este enlace a la colección multimedia <br/>
- eliminando la colección y / o todas las galerías y todo el contenido de theBox <br/>
- deshabilitando todos los enlaces hechos en otros cursos a esta colección o su contenido';
$string['deleteorremovegallery'] = 'Si desea eliminar el enlace a la galería sin eliminar el contenido, haga clic en enviar. <br/> <br/>

Si desea eliminar el enlace a la galería y eliminar el contenido, escriba DELETE en el cuadro de texto a continuación y haga clic en enviar.';
$string['deleteorremovegallerywarn'] = 'Al eliminar, reconoce que está:<br/>
- quitando este enlace a la colección de medios<br/>
- eliminando la galería y  todo el contenido de laCaja<br/>
- deshabilitando todos los enlaces hechos en otros cursos hacia esta colección o su contenido';
$string['deleteorremoveitem'] = 'Si desea eliminar el elemento de la galería sin eliminar el contenido, haga clic en enviar. <br/> <br/>

Si desea eliminar el enlace a la galería y eliminar el contenido, escriba DELETE en el cuadro de texto a continuación y haga clic en enviar.';
$string['deleteorremoveitemwarn'] = 'Al eliminar, reconoce que Usted está:<br/>
- quitando este enlace a la galería de medios<br/>
- eliminando la galería de medios y todo el contenido de laCaja<br/>
- deshabilitando todos los enlaces hechos en otros cursos hacia esta galería de medios o su contenido';
$string['disablestandardgallery'] = 'Deshabilitar galerías estándar';
$string['displayfullcaption'] = 'Mostrar texto completo';
$string['download'] = 'Descargar';
$string['editgallery'] = 'Editar galería';
$string['editgallerysettings'] = 'Editar configuraciones de la galería';
$string['edititem'] = 'Editar elemento';
$string['edititemtype'] = 'Editar {$a}';
$string['editthisgallery'] = 'Editar esta galería';
$string['enablethebox'] = 'Habilitar theBox';
$string['enforcedefaults'] = 'Aplicar los valores predeterminados de la galería';
$string['enforcedefaults_help'] = 'Si está habilitado, se aplican los valores predeterminados de la galería determinados por el instructor.';
$string['errorchooseimportoption'] = 'Por favor, seleccione una opción para importar';
$string['errornotyouritem'] = 'Usted no puede editar este elemento, pertenece a otro usuario.';
$string['errortheboxunavailable'] = 'Lo siento, parece que theBox no está disponible en este momento. Por favor, inténtelo de nuevo más tarde.';
$string['errortoomanygalleries'] = 'Lo sentimos, usted o su grupo excedió el número máximo de galerías permitidas en esta colección ({$a}).';
$string['errortoomanyitems'] = 'Lo sentimos, esta galería ya tiene la cantidad máxima de elementos permitidos ({$a}).';
$string['eventcollectiondeleted'] = 'Colección eliminada';
$string['eventgallerycreated'] = 'Galería creada';
$string['eventgallerydeleted'] = 'Galería eliminada';
$string['eventgalleryupdated'] = 'Galería actualizada';
$string['eventgalleryviewed'] = 'Galería vista';
$string['eventitemcreated'] = 'Elemento creado';
$string['eventitemdeleted'] = 'Elemento elimninado';
$string['eventitemupdated'] = 'Elemento actualizado';
$string['exifmissing'] = 'Sin esto, los archivos .jpg/tiff no pueden ser rotados a la orientación correcta en las colecciones.';
$string['export'] = 'Exportar';
$string['exportascsv'] = 'Exportar como CSV';
$string['exportgallery'] = 'Exportar galería';
$string['externalurl'] = 'URL externa';
$string['externalurl_help'] = 'Actualmente se admiten enlaces a imágenes y videos de YouTube.';
$string['filename'] = 'Nombre del archivo';
$string['filesize'] = 'Tamaño del archivo';
$string['foundxresults'] = 'Se encontraron {$a} resultado(s):';
$string['gallery'] = 'Galería';
$string['galleryfocus'] = 'Enfoque de la galería';
$string['galleryfocus_help'] = 'El enfoque por defecto de la galería (determina que tipos_de_archivos están presentes como el enfoque de la galería). Si se configura como una galería YouTube, el enfoque está bloqueado a Video.';
$string['galleryname'] = 'Nombre de la galería';
$string['gallerythumbnail'] = 'Usar como miniatura';
$string['gallerythumbnail_help'] = 'Si se selecciona, la miniatura para este elemento será usada como la miniatura para la galería.';
$string['galleryviewoptions'] = 'Opciones para vista de galería';
$string['galleryviewoptions_help'] = 'Determina las opciones de vista de galería que están disponible para los estudiantes.';
$string['gridview'] = 'Vista en cuadrícula';
$string['gridviewcolumns'] = 'Columnas en vista de cuadrícula';
$string['gridviewcolumns_help'] = 'En vista de cuadrícula, el número de columnas mostradas.';
$string['gridviewrows'] = 'Filas en vista de cuadrícula';
$string['gridviewrows_help'] = 'En vista de cuadrícula, número de filas mostradas.';
$string['group'] = 'Grupo';
$string['group_help'] = 'Como eres miembro de varios grupos (o tiene permiso para gestionar grupos en este curso), este es el grupo con el cual deseas asociar esta galería.';
$string['information'] = 'Información';
$string['itemdisplay'] = 'Visualización del elemento';
$string['itemdisplay_help'] = 'Incluir este elemento en la vista de la galería (por ejemplo, carrusel).';
$string['like'] = 'Me gusta';
$string['likedby'] = 'Le gusta a';
$string['maxbytes'] = 'Tamaño máximo por elemento';
$string['maxgalleries'] = 'Número máximo de galerías por usuario/grupo';
$string['maxgalleries_help'] = 'El número máximo de galerías que un usuario (o grupo, al usar modos de grupos) puede crear en esta colección.

Nota: para colecciones del instructor, esto es siempre ilimitado.';
$string['maxgalleriesreached'] = 'Número máximo de galerías añadidas';
$string['maxitems'] = 'Número máximo de elementos por galería';
$string['maxitems_help'] = 'La cantidad máxima de elementos que un usuario puede colocar en una galería en esta colección.

Nota: para las colecciones de Instructor, esto siempre es ilimitado.';
$string['maxitemsreached'] = 'Cantidad máxima de elementos añadidos';
$string['mediagallery'] = 'Colección multimedia';
$string['mediagallery:addinstance'] = 'Añadir una instancia de la colección multimedia';
$string['mediagallery:comment'] = 'Comentar sobre una galería o elemento';
$string['mediagallery:grade'] = 'Calificar la galería';
$string['mediagallery:like'] = 'Posibilidad de dar me gusta a los elementos de una colección multimedia.';
$string['mediagallery:manage'] = 'Administrar una instancia de la colección multimedia';
$string['mediagallery:viewall'] = 'Posibilidad de ver todas las galerías en una colección multimedia';
$string['mediagalleryfieldset'] = 'Conjunto de campos de ejemplo personalizado';
$string['mediagalleryname'] = 'Nombre de la colección multimedia';
$string['mediagalleryname_help'] = 'El nombre que quieres darle a la colección multimedia';
$string['mediainformation'] = 'Información';
$string['mediasize'] = 'Tamaño';
$string['mediasizelg'] = 'Grande';
$string['mediasizemd'] = 'Mediano';
$string['mediasizesm'] = 'pequeño';
$string['mediatype'] = 'Tipo de elemento multimedia';
$string['medium'] = 'Medio';
$string['medium_help'] = 'El medio utilizado para crear la obra (es decir, pintura, fotografía, sonido, etc.).';
$string['metainfobulkheader'] = 'Los valores siguientes se utilizarán como metadatos iniciales para cada uno de los elementos agregados anteriormente.';
$string['mode'] = 'Tipo de galería';
$string['mode_help'] = 'Esto define el tipo de contenido que admite la galería. Una vez establecido, este valor no se puede cambiar.

<ul> <li> Estándar: en este modo, los usuarios pueden agregar cualquier tipo de contenido multimedia que deseen. </li>
<li> YouTube: en este modo, solo se pueden agregar videos de YouTube a la galería. </li> </ul>';
$string['modestandard'] = 'Estándar';
$string['modethebox'] = 'theBox';
$string['modeyoutube'] = 'YouTube';
$string['modulename'] = 'Colección multimedia';
$string['modulename_help'] = 'Utiliza el módulo de colección multimedia para crear galerías de contenido multimedia.

Los usuarios pueden crear sus propias galerías de imágenes, video o audio, ya sea por su cuenta o en grupos.

El contenido cargado se presentará en formato carrusel o cuadrícula como miniaturas. Haz clic en cualquiera de las miniaturas, eso te permite navegar por la galería. Los usuarios pueden dar a "Me gusta" y comentar el contenido que pueden ver en sus propias galerías y en otras.';
$string['modulenameplural'] = 'Colecciones multimedia';
$string['moralrights'] = 'Derechos morales';
$string['moralrights_help'] = '¿ Desea hacer valer sus derechos morales ?

Al elegir \'Si\', estás dando consentimiento para que potencialmente, este elemento pueda usarse como una muestra de trabajo.';
$string['noitemsadded'] = 'No se han añadido elementos a esta galería';
$string['noitemsfound'] = 'No se encontraron elementos';
$string['noitemsselected'] = 'No se han seleccionado elementos para exportar';
$string['originalauthor'] = 'Autor original';
$string['originalauthor_help'] = 'El autor original del elemento';
$string['other'] = 'otro';
$string['otherfiles'] = 'Otros archivos';
$string['others'] = 'otros';
$string['pluginadministration'] = 'Administración de colección multimedia';
$string['pluginname'] = 'Colección multimedia';
$string['privacy:metadata:core_comments'] = 'Comentarios asociados con galerías de colecciones multimedia o elementos.';
$string['privacy:metadata:core_files'] = 'asociados con galerías de colecciones multimedia o elementos.';
$string['privacy:metadata:core_tag'] = 'Etiquetas asociadas con galerías de colecciones multimedia o elementos.';
$string['privacy:metadata:mediagallery'] = 'Información sobre las galerías multimedia que ha creado un usuario.';
$string['privacy:metadata:mediagallery:id'] = 'El ID de la colección multimedia.';
$string['privacy:metadata:mediagallery:name'] = 'Nombre de la colección multimedia.';
$string['privacy:metadata:mediagallery:userid'] = 'El ID del usuario que creó / es propietario de la actividad de colección multimedia.';
$string['privacy:metadata:mediagallery_gallery'] = 'Información sobre las galerías multimedia que ha creado un usuario.';
$string['privacy:metadata:mediagallery_gallery:groupid'] = 'El ID del grupo del que crearon la galería como parte.';
$string['privacy:metadata:mediagallery_gallery:instanceid'] = 'El ID del elemento de la galería multimedia para el que el usuario está proporcionando comentarios.';
$string['privacy:metadata:mediagallery_gallery:name'] = 'El nombre de la galería.';
$string['privacy:metadata:mediagallery_gallery:userid'] = 'El ID del usuario que creó la galería.';
$string['privacy:metadata:mediagallery_item'] = 'Información sobre los elementos multimedia que ha creado un usuario.';
$string['privacy:metadata:mediagallery_item:broadcaster'] = 'Difusor de la obra.';
$string['privacy:metadata:mediagallery_item:caption'] = 'El título que el usuario dio al elemento.';
$string['privacy:metadata:mediagallery_item:description'] = 'La descripción que el usuario dio al elemento.';
$string['privacy:metadata:mediagallery_item:externalurl'] = 'La URL externa, si la hay, a la que hace referencia el elemento.';
$string['privacy:metadata:mediagallery_item:galleryid'] = 'El ID de la galería a la que pertenece el elemento.';
$string['privacy:metadata:mediagallery_item:medium'] = 'Medio utilizado para crear la obra.';
$string['privacy:metadata:mediagallery_item:moralrights'] = 'Si el usuario reclamó sus derechos morales sobre el elemento.';
$string['privacy:metadata:mediagallery_item:originalauthor'] = 'Autor/creador original de la obra.';
$string['privacy:metadata:mediagallery_item:productiondate'] = 'Fecha y hora en que se creó.';
$string['privacy:metadata:mediagallery_item:publisher'] = 'Editor/editorial de la obra.';
$string['privacy:metadata:mediagallery_item:reference'] = 'Referencia a la colección a la que pertenece la obra.';
$string['privacy:metadata:mediagallery_item:timecreated'] = 'La hora en que el usuario creó el elemento.';
$string['privacy:metadata:mediagallery_item:userid'] = 'El ID del usuario que creó el elemento.';
$string['privacy:metadata:mediagallery_userfeedback'] = 'Información sobre los comentarios del usuario sobre un elemento determinado de la galería multimedia';
$string['privacy:metadata:mediagallery_userfeedback:itemid'] = 'El ID del elemento de la galería multimedia para el que el usuario está proporcionando comentarios.';
$string['privacy:metadata:mediagallery_userfeedback:liked'] = 'Si al usuario "le gustó" el elemento.';
$string['privacy:metadata:mediagallery_userfeedback:rating'] = 'Qué valoración le dio el usuario al elemento (no implementado).';
$string['privacy:metadata:mediagallery_userfeedback:userid'] = 'Usuario/a que realizó el " feedback".';
$string['privacy:metadata:preference:mediasize'] = 'Que tamaño de visualización prefieres para ver los elementos multimedia.';
$string['productiondate'] = 'Fecha de producción';
$string['productiondate_help'] = 'La fecha en que se produjo la obra original.';
$string['publisher'] = 'Editor/editorial';
$string['publisher_help'] = 'El editor/Editorial (si lo hubiera) de la obra.';
$string['readonlyfrom'] = 'Lectura solo desde';
$string['readonlyto'] = 'Lectura solo hasta';
$string['reference'] = 'Referencia';
$string['reference_help'] = 'Referencia a la colección (si la hay) de la que proviene la obra.';
$string['removecollectionconfirm'] = '¿Estás seguro de que deseas eliminar el enlace a esta colección?';
$string['removefromcollection'] = 'Quitar de la colección';
$string['removefromgallery'] = 'Quitar de la galería';
$string['removegalleryconfirm'] = '¿Estás seguro de que deseas eliminar el enlace a esta galería?';
$string['removeitemconfirm'] = '¿Estás seguro de que deseas eliminar el enlace a este elemento?';
$string['removethecollection'] = 'Quitar/eliminar la colección';
$string['restrictavailableinfo'] = 'Para restringir las fechas entre las que está disponible esta actividad, use la sección Restringir el acceso a continuación.';
$string['sample'] = 'Ejemplo';
$string['search'] = 'Buscar';
$string['search_help'] = 'Escribe las palabras clave que desea buscar.';
$string['searchcourseonly'] = 'Solamente este curso';
$string['searchcourseonly_help'] = '¿Solo querías buscar elementos en las galerías multimedia dentro de este curso?';
$string['searchdisplayxtoyofzresults'] = 'Se encontraron {$a->total} resultado(s). Mostrando {$a->from}-{$a->to}:';
$string['searchresults'] = 'Resultados de la búsqueda';
$string['searchtitle'] = 'Búsqueda de colección multimedia';
$string['selection'] = 'Selección';
$string['settingsavailability'] = 'Disponibilidad';
$string['settingsdisplay'] = 'Mostrar lista';
$string['settingsgallery'] = 'Valores por defecto de la galería';
$string['settingsgallerydisplay'] = 'Visualización de la galería';
$string['settingsvisibility'] = 'Visibilidad';
$string['showall'] = 'Mostrar todo';
$string['storagereport'] = 'Almacén de colección multimedia';
$string['storagetotalusage'] = 'Uso total de almacenamiento en el sitio: {$a}.';
$string['submittedforgrading'] = 'Enviado para calificarse';
$string['synclastcompleted'] = 'Última sincronización completada';
$string['syncwiththebox'] = 'Sincronizar desde theBox';
$string['tags'] = 'Etiquetas';
$string['theboxisnotenabled'] = 'Desafortunadamente, esta colección actualmente no es accesible porque está ligada a theBox, que actualmente no está habilitada.';
$string['thumbnail'] = 'Miniatura';
$string['thumbnail_help'] = 'Puedes seleccionar una imagen para usar como miniatura en la galería para este elemento.

Si no proporcionas uno, se generará uno a partir del recurso cargado (para imágenes) o un icono de tipo de archivo utilizado (para otros archivos).';
$string['thumbnailsperpage'] = 'Miniaturas por página';
$string['thumbnailsperrow'] = 'Miniaturas por fila';
$string['togglefullscreen'] = 'Alternar pantalla completa';
$string['togglesidebar'] = 'Alternar barra lateral';
$string['toomany'] = 'Demasiadas galerías; por favor elimine o cambie el tipo de colección';
$string['top'] = 'Arriba';
$string['typeall'] = 'Todos los archivos';
$string['typeaudio'] = 'Audio';
$string['typeimage'] = 'Imagen';
$string['typevideo'] = 'Video';
$string['unlike'] = 'No me gusta';
$string['uploader'] = 'Cargador';
$string['viewgallery'] = 'Ver galería';
$string['visibleinstructor'] = 'Visible para los instructores solo después';
$string['visibleinstructor_help'] = 'Defina la galería como visible para los instructores del curso después de la fecha especificada. Esto puede resultar útil para permitir que los instructores accedan antes que todos los demás usuarios. Los administradores del curso con los permisos adecuados siempre podrán ver la galería.';
$string['visibleother'] = 'Visible para todos en el curso después de';
$string['visibleother_help'] = 'Defina la galería como visible para otros usuarios después de la fecha especificada. Los administradores del curso con los permisos adecuados siempre podrán ver la galería.';
$string['you'] = 'Tú';
$string['youmusttypedelete'] = 'Debes escribir DELETE para confirmar la eliminación.';
$string['youtubeurl'] = 'URL de YouTube';
