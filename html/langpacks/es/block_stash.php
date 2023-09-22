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
 * Strings for component 'block_stash', language 'es', version '4.1'.
 *
 * @package     block_stash
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Aceptar';
$string['add'] = 'Añadir';
$string['additem'] = 'Añadir un artículo';
$string['addnewdrop'] = 'Añadir nueva localización';
$string['addnewtradeitem'] = 'Añadir nuevo artículo a este intercambio';
$string['addtoinventory'] = 'Agrega un artículo al inventario.';
$string['addtrade'] = 'Agregar un widget de comercio';
$string['addtradeitem'] = 'Añadir artículo de intercambio';
$string['advancedreset'] = 'Reseteo avanzado';
$string['aftercreatinglocationhelp'] = 'Una vez creado el artículo y la localización usted tiene que añadir un fragmento de código a su curso para que se muestre el artículo. Tras personalizar cómo se mostrará el artículo a sus estudiantes, copie el fragmento de código que hay al pie y péguelo en su contenido, por ejemplo, en la descripción de una tarea.';
$string['appearance'] = 'Apariencia';
$string['backtostart'] = 'Volver a la pantalla principal';
$string['buttontext'] = 'Texto del botón';
$string['completed'] = 'Completado';
$string['configurationtitle'] = 'Título del inventario';
$string['copypaste'] = 'Copie y pegue esto en un editor en distintas actividades de su curso.';
$string['copytoclipboard'] = 'Copiar al portapapeles';
$string['cost'] = 'Coste';
$string['createtrade'] = 'Crear una solicitud de intercambio';
$string['decline'] = 'Rechazar';
$string['delete'] = 'Borrar';
$string['deletedrop'] = 'Borrar {$a}';
$string['deleteitem'] = 'Borrar {$a}';
$string['deleteswap'] = 'Borrar intercambio';
$string['deleteuseritem'] = 'Borrar {$a} de este usuario';
$string['details'] = 'Detalles';
$string['dropa'] = 'Localización "{$a}"';
$string['dropname'] = 'Localización';
$string['dropname_help'] = 'El nombre de la localización sólo sirve para su organización. No se muestra a sus estudiantes.';
$string['drops'] = 'Localizaciones';
$string['drops_help'] = '<p>Las localizaciones son las ubicaciones de sus artículos en el <em>mundo virtual</em>.  Sin una <em>localización</em> un artículo no puede ser recogido por un estudiante.</p>
<p>Las localizaciones vienen con algunas opciones, incluyendo la cantidad de veces que un solo alumno puede recogerlo, y con qué frecuencia reaparecerá tras haber sido recogido.</p>
<p>Por ejemplo, si sus estudiantes necesitan un <em>artículo esencial</em> para acceder a una actividad, usted probablemente lo configurará para que sus alumnos solamente puedan recogerlo una vez en esa localización.</p>
<p>Pero si necesitan <em>5 monedas</em> para acceder a otro, usted puede configurar esta moneda para que reaparezca cada día para animarles a visitar el curso a diario.</p>
<p>Nota: Los artículos no aparecen mágicamente en su curso. Usted tendrá que añadir un código especial a su contenido para que cada artículo aparezca.</p>';
$string['dropslist'] = 'Lista de locallizaciones';
$string['dropsnippet'] = 'Fragmento de código para "{$a}"';
$string['dropsummary'] = 'Resúmen de localizaciones';
$string['edit'] = 'Editar';
$string['editdrop'] = 'Editar localización "{$a}"';
$string['edititem'] = 'Editar elemento "{$a}"';
$string['edittrade'] = 'Editar widget de intercambio "{$a}"';
$string['edittradeitem'] = 'Editar artículo de intercambio "{$a}"';
$string['eginthecastle'] = 'P.ej.: En el castillo';
$string['enabled'] = 'Disponible';
$string['eventitemacquired'] = 'Se ha adquirido un artículo.';
$string['eventswapaccepted'] = 'Se ha aceptado una solicitud de intercambio.';
$string['eventswapcreated'] = 'Se ha creado un intercambio de usuario.';
$string['filtershortcodesnotactive'] = 'El plugin de filtro de Shortcodes está instalado pero no disponible para este curso. Visite <a href="{$a->activeurl}" target="_blank">esta página</a> para habilitarlo para este curso.';
$string['filtershortcodesnotenabled'] = 'El plugin de filtro de Shortcodes está instalado pero no <a href="{$a->enableurl}" target="_blank">disponible</a> aún.';
$string['filtershortcodesnotinstalled'] = 'Recomendamos que instale y habilite el <a href="{$a->installurl}" target="_blank">plugin de filtro de Shortcodes</a>. Facilita el uso de los fragmentos de código y lo hace más fiable. También habilita el comercio.';
$string['filterstashdeprecated'] = 'Usted está usando el antiguo plugin de filtros Stash que ya no tiene soporte. Le recomendamos ahora que instale y habilite el <a href="{$a->installurl}" target="_blank">filtro Shortcodes</a> en su lugar. También habilita el comercio.';
$string['filterstashnotactive'] = 'El plugin de filtros está instalado pero no habilitado para este curso. Visite <a href="{$a->activeurl}" target="_blank">esta página</a> para habilitarlo para este curso.';
$string['filterstashnotenabled'] = 'El plugin de filtro está instalado pero no está <a href="{$a->enableurl}" target="_blank">habilitado</a> aún.';
$string['filterstashnotinstalled'] = 'Recomendamos que instale y habilite el <a href="{$a->installurl}" target="_blank">plugin de filtro para Stash</a>. Facilita usar los fragmentos de código y es más fiable. También habilita el comercio.';
$string['filterstashwrongversion'] = 'El plugin de filtro que ha instalado es una versión anterior y no funciona para el comercio. Por favor, visite <a href="{$a}" target="_blank">esta página</a> para conseguir la última versión.';
$string['from'] = 'De';
$string['gain'] = 'Gana';
$string['gainloss'] = 'Gana o pierde';
$string['gaintitle'] = 'Título de la ganancia';
$string['gaintitle_help'] = 'Título de la columna de artículos que el usuario adquirirá en este intercambio.';
$string['grouponly'] = 'Sólo permitir intercambios entre estudiantes de un mismo grupo.';
$string['image'] = 'Imagen';
$string['imageandbutton'] = 'Imagen y botón';
$string['item'] = 'Artículo';
$string['itemamountlimit'] = 'Cantidad límite';
$string['itemamountlimit_help'] = 'Esta es la cantidad máxima de este artículo escaso disponible para todos los estudiantes de este curso.';
$string['itemamountupdate'] = 'La cantidad de este artículo se ha actualizado';
$string['itemdeleted'] = 'El artículo ha sido eliminado.';
$string['itemdetail'] = 'Detalles';
$string['itemdetail_help'] = 'Detalles sobre el artículo.';
$string['itemimage'] = 'Imagen';
$string['itemimage_help'] = 'Esta imagen su usará para mostrar el artículo. El tamaño recomendado es 100x100 píxels.';
$string['itemname'] = 'Nombre del artículo';
$string['itemname_help'] = 'El nombre del artículo. Lo verán los estudiantes.';
$string['items'] = 'Artículos';
$string['itemslist'] = 'Lista de artículos';
$string['locations'] = 'Localizaciones';
$string['loss'] = 'Pierdes';
$string['losstitle'] = 'Título de la pérdida';
$string['losstitle_help'] = 'Título de la columna de artículos que el usuario perderá en este intercambio.';
$string['maxnumber'] = 'Máximo conseguible';
$string['maxpickup'] = 'Suministros';
$string['maxpickup_help'] = 'La cantidad de veces que cada alumno puede recoger el artículo en esta localización. Por ejemplo, si lo configura a "1" el artículo sólo estará disponible una vez para cada estudiante. Si lo configura a "5", cada estudiante puede obtener el artículo cinco veces en esta localización. Es mejor usar valor distinto de "1" en combinación con el "Intervalo de recogida".';
$string['myitems'] = 'Mi inventario';
$string['myrequests'] = 'Mis solicitudes a otros';
$string['navdrops'] = 'Localizaciones';
$string['navinventory'] = 'Artículos de inventario';
$string['navitems'] = 'Artículos';
$string['navreport'] = 'Informe';
$string['navtrade'] = 'Comercio';
$string['new'] = 'Nuevo';
$string['noitems'] = 'No se han seleccionado artículos';
$string['noitemstotrade'] = 'No tienes artículos para intercambiar';
$string['nomorescarceitems'] = 'Se ha alcanzado la cantidad máxima de este artículo. Considere aumentar la cantidad de este artículo escaso.';
$string['none'] = 'Ninguno';
$string['notrecorded'] = 'No grabado';
$string['number'] = 'Número';
$string['offerdetail'] = 'Has solicitado un intercambio de los siguientes artículos con este estudiante.';
$string['offereditems'] = 'Artículos ofrecidos';
$string['offers'] = 'Ofertas';
$string['offers:zero'] = 'Sin ofertas';
$string['offersdetail:zero'] = 'Ve al centro de negocios para comenzar un intercambio, o espera a que alguien te haga una oferta.';
$string['participantswithitem'] = 'Participantes con este artículo';
$string['pickupa'] = 'Recoge \'{$a}\'';
$string['pickupinterval'] = 'Intervalo de recogida';
$string['pickupinterval_help'] = 'Esto define el tiempo necesario para que el elemento vuelva a aparecer a los estudiantes que ya lo recogieron. Por ejemplo, si creó un artículo \'pastel\', podría establecer su intervalo de recolección en 24 horas para simular el tiempo que le toma al panadero hornear otro. Es importante tener en cuenta que los estudiantes no se ven afectados por las recogidas de otros estudiantes. Esta configuración no tiene efecto cuando \'Suministros\' se establece en \'1\'.';
$string['pluginname'] = 'Inventario';
$string['privacy:metadata:pickup'] = 'Un registro de los artículos recogidos en un lugar determinado.';
$string['privacy:metadata:pickup:dropid'] = 'El ID de la ubicación.';
$string['privacy:metadata:pickup:lastpickup'] = 'La hora a la que se produjo la última recogida.';
$string['privacy:metadata:pickup:pickupcount'] = 'La cantidad recogida en ese lugar.';
$string['privacy:metadata:pickup:timecreated'] = 'La hora en que se creó el registro.';
$string['privacy:metadata:pickup:timemodified'] = 'La hora a la que se modificó el registro por última vez.';
$string['privacy:metadata:pickup:userid'] = 'La identificación del usuario que recogió hizo la recogida';
$string['privacy:metadata:swap'] = 'Un registro de intercambios entre usuarios';
$string['privacy:metadata:swap:initiator'] = 'La persona que hizo la oferta';
$string['privacy:metadata:swap:message'] = 'Un mensaje relacionado con el intercambio';
$string['privacy:metadata:swap:messageformat'] = 'Un formato en el que está el mensaje';
$string['privacy:metadata:swap:receiver'] = 'La persona que recibe la oferta';
$string['privacy:metadata:swap:stashid'] = 'La instancia de la que forma parte este intercambio';
$string['privacy:metadata:swap:status'] = 'El estado del intercambio';
$string['privacy:metadata:swap:timecreated'] = 'El momento en que se hizo esta oferta de intercambio';
$string['privacy:metadata:swap:timemodified'] = 'Cualquier momento en que la oferta de intercambio se actualiza';
$string['privacy:metadata:useritem'] = 'Un registro de los artículos propiedad de un usuario/a';
$string['privacy:metadata:useritem:itemid'] = 'El ID del artículo.';
$string['privacy:metadata:useritem:quantity'] = 'La cantidad poseída.';
$string['privacy:metadata:useritem:timecreated'] = 'La hora en que se creó el registro.';
$string['privacy:metadata:useritem:timemodified'] = 'La hora a la que se modificó el registro por última vez.';
$string['privacy:metadata:useritem:userid'] = 'El ID de la usuario propietaria del artículo.';
$string['quantity'] = 'Cantidad';
$string['reallydeletedrop'] = '¿Está seguro de que desea eliminar esta ubicación?';
$string['reallydeleteitem'] = '¿Seguro que quiere eliminar este artículo?';
$string['reallyresetstashof'] = '¿Seguro que quiere resetear completamente el inventario de {$a}?';
$string['received'] = 'Recibido';
$string['removeswapdetails'] = '¿Quiere eliminar los detalles de este intercambio?';
$string['report'] = 'Informe';
$string['reportadditional'] = 'Gestión avanzada de elementos de usuario';
$string['requestdetail'] = 'Este estudiante ha solicitado el siguiente intercambio.';
$string['requesteditems'] = 'Artículos solicitados';
$string['requestsent'] = 'Se ha enviado una solicitud.';
$string['requestsforme'] = 'Solicitudes para mí';
$string['requestswap'] = 'Hacer una oferta';
$string['resetstashof'] = 'Restablecer el inventario de {$a}';
$string['saveandnext'] = 'Guardar y siguiente';
$string['savechanges'] = 'Guardar cambios';
$string['savequantity'] = 'Guardar la cantidad del artículo {$a}';
$string['scarceitem'] = 'Artículo escaso';
$string['scarceitem_help'] = 'Solo una cantidad limitada de este artículo está disponible. Si limita este elemento a 5, entonces solo existen cinco elementos en este curso.';
$string['searchitems'] = 'Buscar artículos';
$string['selectanitem'] = 'Seleccionar un artículo';
$string['selectauser'] = 'Seleccionar un usuaio';
$string['sendtraderequest'] = 'Enviar solicitud de intercambio';
$string['sent'] = 'Enviar';
$string['settings'] = 'Configuraciones';
$string['setup'] = 'Configuración';
$string['shortcode:stashdrop'] = 'Muestra un artículo para que lo recoja una usuario.';
$string['shortcode:stashtrade'] = 'Muestra el widget comercio';
$string['snippet'] = 'Fragmento de código';
$string['stash'] = 'Inventario';
$string['stash:acquireitems'] = 'La/el usuario/a puede adquirir artículos';
$string['stash:addinstance'] = 'Agregar un bloque a una página';
$string['stash:view'] = 'Ver el inventario y su contenido';
$string['stashdisabled'] = 'El inventario no está habilitado. ¿Se agregó el bloque al curso?';
$string['swapnolongerpossible'] = 'Esta oferta ya no es posible, probablemente porque o tú o el otro participante ya no tenéis estos artículos.';
$string['text'] = 'Texto';
$string['thedrophasbeendeleted'] = 'La ubicación \'{$a}\' ha sido eliminada';
$string['theiritems'] = 'Sus artículos';
$string['theitemhasbeendeleted'] = 'El artículo \'{$a}\' ha sido eliminado';
$string['thestashofhasbeenreset'] = 'Se ha restablecido el inventario de {$a}';
$string['thetradehasbeendeleted'] = 'El widget comercio \'{$a}\' ha sido eliminado';
$string['thetradeitemhasbeendeleted'] = 'El artículo del comercio ha sido eliminado';
$string['tidyswap'] = 'Eliminar todas las solicitudes de intercambio que se han completado.';
$string['title'] = 'Título';
$string['to'] = 'A';
$string['trade'] = 'Comercio';
$string['tradecenter'] = 'Centro de negocios';
$string['tradecenter:zero'] = 'Seleccionar un artículo o un usuario de arriba';
$string['tradecenterdetail:zero'] = 'Encontrar un artículo le dará una lista de usuarios con esos artículos para comenzar a negociar. Seleccionar un usuario mostrará una lista de sus artículos para hacer intercambios.';
$string['tradecreated'] = 'Comercio creado \'{$a}\'';
$string['tradedetails'] = 'Detalles del intercambio';
$string['tradeitem'] = 'Artículo para comercio';
$string['tradeitems'] = 'artículos para el comercio';
$string['tradelist'] = 'Lista de widgets comerciales';
$string['tradename'] = 'Nombre del comercio';
$string['tradename_help'] = 'El nombre del widget comercial, esto se puede mostrar a los estudiantes.';
$string['tradesnotenabled'] = 'No se han habilitado los intercambios';
$string['tradestatusapproved'] = 'Intercambio aprobado';
$string['tradestatuscompleted'] = 'Intercambio completado';
$string['tradestatusdeclined'] = 'Intercambio rechazado';
$string['tradestatusviewed'] = 'Intercambio visto';
$string['tradewidget'] = 'Creando un comercio.';
$string['tradewidget_help'] = '<p>Este widget de comercio permite obtener elementos de la columna de la izquierda a cambio de perder elementos de la columna de la derecha.</p><p>Haga clic en el símbolo + en la parte inferior del cuadro para agregar elementos a esa columna.</p ><p>La cantidad de un artículo debe ser un número positivo.</p>';
$string['unlimited'] = 'Ilimitado';
$string['useritemswap'] = 'Permitir a los estudiantes intercambiar artículos entre ellos.';
$string['view'] = 'ver';
$string['whataredrops'] = '¿Qué son las localizaciones?';
$string['whatisadrophelp'] = 'Una ubicación es un lugar donde tiene la intención de mostrar su artículo.';
$string['whatisatradedrophelp'] = 'Una ubicación es un lugar donde tiene la intención de mostrar su widget comercial.';
$string['whatisthisthing'] = '¿Qué es esto? ¡Seguro que puedes encontrarle uso!';
$string['whatsnext'] = '¿Y ahora qué?';
$string['whatsthis'] = '¿Qué es esto?';
$string['yourinventoryisempty'] = 'Tu inventario está vacio.';
