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
 * Strings for component 'block_xp', language 'es', version '4.5'.
 *
 * @package     block_xp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['activityname'] = 'Nombre de la actividad';
$string['activityname_help'] = 'El texto que el nombre de la actividad debe contener o al que debe ser igual. No distingue mayúsculas y minúsculas.';
$string['activityoresourceis'] = 'La actividad o recurso es {$a}';
$string['addacondition'] = 'Añadir una condición';
$string['addarule'] = 'Añadir una regla';
$string['addinstructions'] = 'Añadir más información';
$string['additionalresources'] = 'Recursos adicionales';
$string['addlevel'] = 'Añadir nivel';
$string['addondeactivated'] = 'XP+ deshabilitado';
$string['addondeactivatedinfo'] = 'Los plugins XP son incompatibles entre ellos, por lo que se ha deshabilitado XP+. Se espera la versión {$a->localxpversion} de Level Up XP+ (local_xp).';
$string['addoninstallationerror'] = 'Hemos detectado un problema con el plugin (local_xp). No parece estar instalado correctamente. Un administrador debe finalizar su instalación.';
$string['addonnotactivated'] = 'El plugin no está activado.';
$string['addrulesformhelp'] = 'La última columna define la cantidad de puntos de experiencia  ganados cuando se cumple el criterio.';
$string['admindefaultrulesintro'] = 'Las siguientes reglas serán usadas por defecto para los cursos en los que se añada el bloque.';
$string['admindefaultsettingsintro'] = 'La configuración que aparece a continuación será usada por defecto cuando el bloque sea añadido por primera vez a un curso.';
$string['admindefaultvisualsintro'] = 'Las siguientes imágenes serán usadas por defecto cuando el bloque sea añadido por primera vez a un curso.';
$string['adminnoticeaddondeactivatedmessage'] = '¡Se ha deshabilitado Level Up XP+!

Está recibiendo este aviso porque Level Up XP+ se ha deshabilitado para evitar posibles problemas. Los dos plugins Level Up (block_xp) y Level Up XP+ (local_xp) actualmente son incopatibles entre ellos. Esto sucede cuando XP se ha actualizado a una versión superior mientras que XP+ sigue sin actualizarse.

Este desajuste puede llevar a pérdida de funcionalidad, errores y otras consecuencias inesperadas. Para resolver esto, debe actualizar Level Up XP+.

- Level Up XP (block_xp) versión: {$a->blockxpversion}
- Level Up XP+ (local_xp) versión: {$a->localxpversion}
- Level Up XP+ versión esperada: {$a->localxpversionexpected}

Recursos adicionales:

- [Documentación de actualización](https://docs.levelup.plus/xp/docs/upgrade)
- [Documentación de desactivación de XP+](https://docs.levelup.plus/xp/docs/addon-deactivated)
- [Documentación de compatibilidad](https://docs.levelup.plus/xp/docs/requirements-compatibility)';
$string['adminnoticeaddondeactivatedsubject'] = '¡Plugin XP+ deshabilitado!';
$string['adminnoticeoutofsyncmessage'] = '¡Aviso de incompatibilidad de Level Up XP y Level Up XP+!

Está recibiendo este aviso porque los dos plugins Level Up XP (block_xp) y Level Up XP+ (local_xp) actualmente están fuera de sincronización y son incompatibles el uno con el otro. Este problema ocurre cuando se ha actualizado XP a una nueva versión superior mientras que XP+ sigue sin actualizarse.

Esta falta de conexión puede llevar a pérdida de funcionalidad, errores, y otras consecuencias inesperadas. Para resolver esto, debe actualizar Level Up XP+.

**¡Importante!** En el futuro, si estos plugins no están sincronizados, Level Up XP+ se deshabilitará automáticamente. Para evitar esto, asegúrese de no subir Level Up XP a una nueva versión superior sin subir también Level Up XP+.

- Level Up XP versión (block_xp): {$a->blockxpversion}
- Level Up XP+ versión (local_xp): {$a->localxpversion}
- Level Up XP+ versión esperada: {$a->localxpversionexpected}

Recursos adicionales:

- [Documentación de actualizacioń](https://docs.levelup.plus/xp/docs/upgrade)
- [Documentación de compatbilidad](https://docs.levelup.plus/xp/docs/requirements-compatibility)

--

Este anuncio se ha enviado a todos los administradores. Para deshabilitar los avisos de admiistrador, por favor visite los ajustes de administrador de Level Up XP.';
$string['adminnoticeoutofsyncsubject'] = '¡Aviso de incompatibilidad de plugins XP!';
$string['adminnotices'] = 'Avisos de administrador';
$string['adminnotices_desc'] = 'Cuando se habilita, los administradores del sitio pueden recibir ocasionalmente avisos importantes sobre compatibilidad, seguridad y la disponibilidad de versiones más recientes de Level Up XP+.';
$string['adminscanearnxp'] = 'Los administradores pueden ganar puntos';
$string['adminscanearnxp_desc'] = 'Por defecto, los administradores no están incluidos en el grupo de usuarios que pueden ganar puntos. Esto es porque los administradores siempre tienen el permiso _block/xp:earnxp_, que les permite conseguir puntos en cualquier sitio. Usted puede usar este ajuste para que los administradores también ganen puntos.';
$string['allcoursesreset'] = 'Se han reseteado todos los cursos.';
$string['anonymity'] = 'Anonimato';
$string['anonymity_help'] = 'Esta configuración controla si los participantes pueden ver el nombre de otros participantes y su imagen de perfil.';
$string['apply'] = 'Aplicar';
$string['awardaxpwhen'] = 'Se ganan <strong>{$a}</strong> puntos cuando:';
$string['badgeaward'] = 'Insignia para premiar';
$string['badgeawarddesc'] = 'Una insignia para premiar cuando el usuario alcanza el nivel.';
$string['basepoints'] = 'Puntos base';
$string['basepointslineardesc'] = 'El incremento mínimo entre cada nivel.';
$string['basepointsrelativedesc'] = 'El número de puntos con los que se comienza.';
$string['basexp'] = 'Base del algoritmo';
$string['blockappearance'] = 'Apariencia del bloque';
$string['blockappearancemovedtopluginsettings'] = 'La configuración del aspecto del bloque se ha movido a la página de configuración del plugin.';
$string['cachedef_block_count'] = 'Bloquear la cuenta de instancias';
$string['cachedef_filters'] = 'Filtros de nivel';
$string['cachedef_metadata'] = 'Metadatos';
$string['cachedef_ruleevent_eventslist'] = 'Lista de algunos eventos';
$string['canjoinfromdatex'] = 'Usted podrá unirse desde {$a}.';
$string['cannotbesetindefaults'] = 'Este no puede ajustarse en los valores por defecto.';
$string['cannotearnpoints'] = 'No puede ganar puntos.';
$string['cannotshowblockconfig'] = 'Normalmente mostraría la configuración de aspecto aquí, pero no puedo encontar su bloque. Para cambiar el aspecto del bloque, vuelva [aquí]({$a}) (o donde haya añadido el bloque), active edición y seleccione la opción "Configurar" en el desplegable del bloque. Si no puede encontrar el bloque, añádalo de nuevo a su curso.';
$string['cannotshowblockconfigsys'] = 'Normalmente mostraría la configuración de aspecto aquí, pero no puedo encontrar su bloque. Puede que falte de [la página principal]({$a->fp}) y del [tablero por defecto]({$a->mysys}) de sus usuarios, o que esté presente en ambos. Para editar la configuración desde aquí, asegúrese de que aparezca solamente en uno de ellos.';
$string['changecourse'] = 'Cambiar curso';
$string['changelevelformhelp'] = 'Si cambia el número de niveles, las insignias de nivel personalizadas estarán deshabilitadas temporalmente a fin de evitar niveles sin insignias. Si cambia el número de niveles vaya a la página de \'Visuales\' para rehabilitar las insignias personalizadas una vez que haya guardado este formato.';
$string['changetocourse'] = 'Cambiar a curso';
$string['changetositewide'] = 'Volver a todo el sitio';
$string['cheatguard'] = 'Control de trampas';
$string['cheatguardsettingsmovednotice'] = 'Los ajustes de trampas se han movido a [event rules page]({$a->url}).';
$string['checkaddoncompatibility'] = 'Compatbilidad de extensión Level Up XP';
$string['chooseacondition'] = 'Elegir una condición';
$string['clearfilter'] = 'Limpiar filtro';
$string['clicktoselectcm'] = 'Clicar para seleccionar una actividad o recurso';
$string['cmselector'] = 'Selector de módulo de curso';
$string['coefxp'] = 'Coeficiente del algoritmo';
$string['colon'] = '{$a->a}: {$a->b}';
$string['comparisonmethod'] = 'Método de comparación';
$string['compatibilitycheck'] = 'Comprobación de compatibilidad';
$string['completionrules'] = 'Reglas de finalización';
$string['completionrules_help'] = 'Las reglas de finalización se separan en tres categorías: finalización de actividad, finalización de sección y finalización de curso. Añadir condiciones a las categorías determinará cuándo y cuántos puntos se consiguen.

Las reglas se evalúan en el orden en que se presentan en pantalla. Tan pronto como se cumpla una condición se conseguirán los puntos correspondientes y no se seguirán evaluando las reglas restantes.

[Para saber más](https://docs.levelup.plus/xp/docs/completion-rules?ref=blockxp_help)';
$string['completionrulesintro'] = 'Atribuir puntos a los estudiantes según vayan completando actividades, secciones o cursos.';
$string['completionruleslegacyusednotice'] = 'Usted tiene "reglas de evento" que usan condiciones de finalización. Recomendamos encarecidamente que las elimine en favor de los métodos siguientes ya que las "reglas de evento" y las "reglas de finalización" podrían duplicar la puntuación obtenida.';
$string['condition'] = 'Condición';
$string['configblockrankingsnapshot'] = 'Mostrar el tablero de ranking';
$string['configblockrankingsnapshot_help'] = 'El tablero de ranking muestra el nivel del usuario. Puede intentar mostrar también las dos personas vecinas. Esta característica requiere que se active el ranking y que se muestren los niveles.';
$string['configdescription'] = 'Introducción';
$string['configdescription_help'] = 'Un mensaje introductorio breve a mostrar en el bloque. Los estudiantes tienen la posibilidad de omitir el mensaje, en cuyo caso no lo volverán a ver.';
$string['configheader'] = 'Ajustes';
$string['configrecentactivity'] = 'Mostrar últimas recompensas';
$string['configrecentactivity_help'] = 'Cuando está activado, el bloque mostrará una breve lista de eventos recientes que le hayan dado puntos al estudiante.';
$string['configtitle'] = 'Título';
$string['configtitle_help'] = 'El título del bloque.';
$string['congratulationsyouleveledup'] = '¡Felicidades!';
$string['coolthanks'] = '¡Genial, gracias!';
$string['copiedexcl'] = '¡Copiado!';
$string['coursea'] = 'Curso "{$a}"';
$string['courselog'] = 'Registro';
$string['courselogintro'] = 'El registro muestra las acciones observadas, y cuántos puntos se les han otorgado.';
$string['coursereport'] = 'Informe';
$string['coursereportintro'] = 'El informe da detalles de cada participantes y permite actuar sobre ellos tanto individual como colectivamente.';
$string['courserules'] = 'Normas del curso';
$string['courseselectedcolon'] = 'Curso seleccionado:';
$string['coursesettings'] = 'Configuraciones del curso';
$string['coursevisuals'] = 'Visuales del curso';
$string['currencysign'] = 'Símbolo de puntos';
$string['currencysign_help'] = 'Con este ajuste usted puede cambiar el significado de los puntos. Se mostrará junto a la cantidad de puntos que tiene cada usuario como sustituto de la referencia a _puntos de experiencia_.

Elija uno de los símbolos existentes, ¡o suba los suyos!';
$string['currencysignxp'] = 'XP (puntos de experiencia)';
$string['customizelevels'] = 'Personalizar los niveles';
$string['dangerzone'] = 'Zona de peligro';
$string['dataformat'] = 'Formato';
$string['defaultlevels'] = 'Niveles por defecto';
$string['defaultrules'] = 'Reglas por defecto';
$string['defaultrulesformhelp'] = 'Estas son las reglas por defecto proporcionadas por el plugin; automáticamente dan puntos de experiencia por defecto e ignoran algunos eventos redundantes. Las reglas personalizadas tienen prioridad sobre ellas.';
$string['defaultsettings'] = 'Configuración por defecto';
$string['defaultvisuals'] = 'Aspecto por defecto';
$string['deletecondition'] = 'Borrar condición';
$string['deleterule'] = 'Borrar regla';
$string['description'] = 'Descripción';
$string['difference'] = 'Dif.';
$string['difficulty'] = 'Método de cálculo de puntos';
$string['difficultyflat'] = 'Igual';
$string['difficultyflatdesc'] = 'Todos los niveles requieren la consecución del mismo número de puntos.';
$string['difficultylinear'] = 'Incrementando';
$string['difficultylineardesc'] = 'Se aumenta progresivamente lo que cuesta alcanzar los niveles.';
$string['difficultylinearincrdesc'] = 'El número de puntos usado para la dificultad progresiva.';
$string['difficultypointincrease'] = 'Incremento de puntos';
$string['difficultyrelative'] = 'Bola de nieve';
$string['difficultyrelativedesc'] = 'Los niveles se vuelven exponencialmente más difíciles de alcanzar.';
$string['difficultyrelativeincrdesc'] = 'El porcentaje de puntos a incrementar desde el nivel anterior.';
$string['discoverlevelupplus'] = '¡Descubre Level up XP+!';
$string['dismissnotice'] = 'Descartar aviso';
$string['displayeveryone'] = 'Mostrar todos';
$string['displaynneighbours'] = 'Mostrar {$a} vecinos';
$string['displayoneneigbour'] = 'Mostrar un vecino';
$string['displayparticipantsidentity'] = 'Mostrar la identidad de los participantes';
$string['displayrank'] = 'Mostrar el nivel';
$string['displayrelativerank'] = 'Mostrar un nivel relativo';
$string['documentation'] = 'Documentación';
$string['drops'] = 'Soltar (drops)';
$string['drops_help'] = 'En videojuegos, algunos personajes pueden _soltar_ artículos o puntos de experiencia en el suelo para que el jugador los recoja. Estos artículos y puntos se suelen llamar "drops".

En Level Up XP, los "drops" son fragmentos de código ( p.ej. `[xpdrop id=1 secret=abcdef]`) que un docente puede colocar en contenido habitual de Moodle. Cuando se los encuentra un usuario, estos "drops" se _recogerán_ y se conseguirá un cierto número de puntos.

Actualmente, los "drops" son invisibles para el usuario y el usuario los consigue de forma pasiva la primera vez que los encuentra.

Los "drops" se pueden usar para dar puntos de forma inteligente cuando un estudiante accede a un determinado contenido. Algunas ideas:

- Coloque un "drop" en la retroalimentación de un cuestionario que sólo sea visible cuando se hace perfectamente.
- Coloque un "drop" en contenido profundo para premiar su lectura.
- Coloque un "drop" en una discusión de foro interesante.
- Coloque un "drop" en una página a la que sea difícil llegar en un módulo "lección".

[Más información](https://docs.levelup.plus/xp/docs/how-to/use-drops?ref=blockxp_help)';
$string['dropsintro'] = 'Los "drops" son fragmentos de código que se colocan directamente en un contenido que dé puntos cuando lo encuentre un usuario.';
$string['editcondition'] = 'Editar condición';
$string['editingdefaultsettingsincoursemodenotice'] = '**¡Atención!** No está modificando la configuración actual, sino que están editando los valores por defecto. Para cambiar la configuración de un curso, vaya al enlace "Configuración" del propio bloque XP.';
$string['editingdefaultsettingsinwholesitemodenotice'] = '**¡Atención!** Usted no está modificando la configuración activa actualmente, sino que está editando los valores por defecto. Como Level Up XP se usa en todo el sitio, su intención probablemente es cambiar los ajustes de todo el sitio. [Venga aquí]({$a->url}) para cambiar esos ajustes, o siga el enlace "Ajustes" del propio bloque XP.';
$string['editinstructions'] = 'Editar información';
$string['embedleaderboard'] = 'Incrustar tabla de líderes';
$string['enablecheatguard'] = 'Activar medidas contra trampas';
$string['enablecheatguard_help'] = 'Las medidas contra trampas son un mecanismo sencillo para evitar que los estudiantes abusen del sistema usando trucos obvios, como refrescar la misma página sin parar, o repetir la misma acción una y otra vez.';
$string['enableinfos'] = 'Habilitar página de información';
$string['enableinfos_help'] = 'Cuando se configura a "No", los estudiantes no podrán ver la página de información.';
$string['enableladder'] = 'Habilitar el ranking';
$string['enableladder_help'] = 'Cuando se configura a \'No\', los estudiantes no podrán ver el ranking.';
$string['enablelevelupnotif'] = 'Habilitar notificación de subida de nivel';
$string['enablelevelupnotif_help'] = 'Cuando se configura a \'Si\', a los estudiantes se les mostrará una ventana emergente felicitándolos por el nuevo nivel alcanzado.';
$string['enablelogging'] = 'Habilitar registro';
$string['enablexpgain'] = 'Habilitar ganancia de experiencia';
$string['enablexpgain_help'] = 'Cuando se configura como NO, nadie podrá ganar puntos en el curso. Esto es útil para congelar por un tiempo los puntos obtenidos o para habilitarlos en un momento tiempo limitado.

Por favor, tenga en cuenta que también puede controlarse con mayor precisión usando el permiso _block/xp:earnxp_.';
$string['entersearchterm'] = 'Introducir un término de búsqueda';
$string['envcheckaddonincompatibilitymessage'] = 'El plugin Level Up XP+ (local_xp) es incompatible con Level Up XP (block_xp). Esto hace que XP+ se deshabilite. Para evitar esto, por favor, actualice ambos plugins. Para más información, por favor, visite https://docs.levelup.plus/xp/docs/compatibility.';
$string['erroraddondeactivated'] = 'Se ha deshabilitado Level Up XP+. Por favor, consulte la  [documentación]({$a->docsurl}) para más información.';
$string['errorcontextcoursemismatchforwholesite'] = 'La URL de esta página <em>Level Up XP</em> no coincide con la configuración actual del plugin. Su configuración actual dice que <em>Level Up XP</em> se usa "Para todo el sitio". Sin embargo, esta página espera usarlo "Por curso". Por favor, <a href="{$a->nexturl}">clique aquí</a> para navegar a la página correcta. Busque el ajuste de administración "block_xp_context" si desea cambiar su configuración.';
$string['errorcontextcoursemismatchpercourse'] = 'La URL de esta página <em>Level Up XP</em> no coincide con la configuración actual del plugin. Su configuración actual dice que <em>Level Up XP</em> se usa "Por curso". Sin embargo, esta página espera usarlo "Para todo el sitio".  Probablemente sea porque se añadió un <em>bloque</em> al tablero de la página principal cuando tenía otra configuración. Debe eliminar el bloque de las páginas anteriores y usarlo solamente en cursos individuales.';
$string['errorformvalues'] = 'Hay algunos problemas en los valores del formato, por favor arréglelos.';
$string['errorlevelsincorrect'] = 'El número mínimo de niveles es 2';
$string['errornotalllevelsbadgesprovided'] = 'No se han proporcionado todas las insignias. Faltan: {$a}';
$string['errorunknownevent'] = 'Error: evento desconocido';
$string['errorunknownmodule'] = 'Error: módulo desconocido';
$string['errorxprequiredlowerthanpreviouslevel'] = 'Los puntos requeridos son más o los mismos que el nivel anterior.';
$string['event_user_leveledup'] = 'El usuario subió de nivel';
$string['eventis'] = 'El evento es {$a}';
$string['eventname'] = 'Nombre del evento';
$string['eventproperty'] = 'Propiedad del evento';
$string['eventsrules'] = 'Reglas de evento';
$string['eventsrules_help'] = 'Este plugin está usando los eventos para otorgar puntos a acciones realizadas por los estudiantes.
Puede usar el formulario siguiente para añadir sus propias reglas y modificar las reglas por defecto.

Se recomienda comprobar la página de _log_  del plugin para identificar eventos que se disparan cuando los estudiantes realizar acciones en el curso.

Recursos adicionales:

- [¿Cómo se calculan puntos de experiencia?](https://docs.levelup.plus/xp/docs/getting-started/points-calculation?ref=blockxp_help)
- [Solución de problemas de reglas](https://docs.levelup.plus/xp/docs/troubleshooting/event-rule-not-working?ref=blockxp_help)';
$string['eventsrulesintro'] = 'Observe acciones y dé puntos a los estudiantes cuando las realizan.';
$string['eventtime'] = 'Hora del evento';
$string['export'] = 'Exportar';
$string['exportdata'] = 'Datos de exportación';
$string['filterbyuser'] = 'Filtrar por usuario';
$string['filterellipsis'] = 'Filtrar...';
$string['filtermodules'] = 'Filtrar módulos';
$string['filterparticipants'] = 'Filtrar participantes';
$string['for1day'] = 'Por 1 día';
$string['for1month'] = 'Por 1 mes';
$string['for1week'] = 'Por 1 semana';
$string['for3days'] = 'Por 3 días';
$string['forever'] = 'Para siempre';
$string['forthewholesite'] = 'Para el sitio completo';
$string['give'] = 'dar';
$string['gotofullladder'] = 'Ir al ranking completo';
$string['graderules'] = 'Reglas de calificación';
$string['graderules_help'] = 'Los estudiantes ganarán tantos puntos como su calificación.
Tanto una calificación de 5/10 como una de 5/100 le darán al estudiante 5 puntos.
Cuando la calificación de un estudiante varíe varias veces, ganarán puntos equivalentes a la calificación máxima que hayan recibido.
A los estudiantes nunca se les quitan puntos, y se ignoran las calificaciones negativas.

Ejemplo: Alicia entrega una tarea y recibe una calificación de 40/100. En _Level Up XP_, Alicia recibe 40 puntos por su calificación.
Alicia hace un nuevo intento en la misma tarea, pero esta vez su calificación baja a 25/100. Los puntos de Alicia en _Level Up XP_ no varían.
En su intento final, Alicia consigue 60/100, y gana 20 puntos adicionales en _Level Up XP_: el total de puntos obtenidos es 60.

[Más en la documentación de _Level Up XP_](https://docs.levelup.plus/xp/docs/how-to/grade-based-rewards?ref=blockxp_help)';
$string['graderulesintro'] = 'Las reglas de calificación permiten a los usuarios recibir puntos equivalentes a las calificaciones que obtienen.';
$string['grid'] = 'Cuadro';
$string['hasbadgeaward'] = 'Insignia para premiar el set';
$string['hasdescription'] = 'Descripción del set';
$string['hasname'] = 'Nombre del set';
$string['hasnobadgeaward'] = 'Sin inignia para premiar';
$string['hasnodescription'] = 'Sin descripción';
$string['hasnoname'] = 'Sin nombre';
$string['hasnopopupmessage'] = 'Sin mensaje emergente';
$string['haspopupmessage'] = 'Configuración de mensaje emergente';
$string['hideparticipantsidentity'] = 'Ocultar identidad de los participantes';
$string['hiderank'] = 'Esconder posición';
$string['importpoints'] = 'Importar puntos';
$string['importpoints_help'] = 'La importación puede usarse para _aumentar_ la puntuación de los estudiantes, o para _sobreescribirla_ con el valor dado.

Observe que la importación _no_ usa el mismo formato que el informe exportado. El formato requerido se describe en la [documentación](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help), donde hay un [archivo de ejemplo](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help#sample-file) disponible.';
$string['importpointsintro'] = 'Importar puntos desde un archivo CSV, y opcionalmente enviar un mensaje al receptor.';
$string['incourses'] = 'En los cursos';
$string['ineffective'] = 'Sin efecto';
$string['infos'] = 'información';
$string['infos_help'] = 'La página de información da a los estudiantes un resumen de los niveles y de los puntos necesarios para alcanzarlos. También muestra el nombre de cada nivel, así como su descripción.';
$string['infosintro'] = 'La página de información muestra el listado de niveles, y algunos de sus detalles.';
$string['installed'] = 'Instalado';
$string['instructions'] = 'Instrucciones';
$string['instructions_help'] = 'Las instrucciones se mostrarán en la página de información. Puede usarlas para compartir información e instrucciones sobre los niveles, cómo obtener puntos, etc.';
$string['invalidxp'] = 'Valor de puntuación  inválida';
$string['join'] = 'Unirse';
$string['joinleadeboardconfirmnote'] = '¡Fantástico, estamos emocionados de tenerte de nuevo a bordo!

Por favor, ten en cuenta que una vez que te unas hay un periodo de espera antes de poder salir de la tabla de ranking si cambias de opinión.';
$string['joinleadeboardlockednote'] = 'No puedes unirte a la tabla de ranking.';
$string['joinleaderboard'] = 'Unirse a la tabla de ranking';
$string['keeplogs'] = 'Mantener registros';
$string['ladder'] = 'Ranking';
$string['ladder_help'] = 'El tablero ordena estudiantes basándose en su puntuación. Cuando se usa en un curso con grupos, puede crear un ranking para cada grupo de estudiantes.

Hay disponibles varias opciones para personalizar el tablero y la experiencia que dará a los participantes.';
$string['ladderadditionalcols'] = 'Columnas adicionales';
$string['ladderadditionalcols_help'] = 'Este ajuste determina qué columnas adicionales se muestran en el ranking. Pulse las teclas CTRL o CMD mientras clica para seleccionar más de una columna, o para quitar la selección de una columna previamente seleccionada.';
$string['ladderempty'] = 'Actualmente el ranking está vacío. ¡Vuelve más tarde!';
$string['ladderintro'] = 'El tablero muestra un ranking de individuos basado en sus puntuaciones totales.';
$string['ladderiso'] = 'Aislar participantes';
$string['ladderiso_help'] = 'Cree tableros separados para distintos grupos de personas.

- Por defecto (modo de grupo): Sigue el modo de grupo del curso para crear tableros para cada grupo.
- Mediante cohortes: Sólo aparecerán en el tablero de una persona los miembros de su misma cohorte.

[Más información](https://docs.levelup.plus/xp/docs/leaderboard-isolation)';
$string['ladderisocohorts'] = 'Usando cohortes';
$string['ladderisodefault'] = 'Predeterminado (modo de grupo)';
$string['ladderparticipation'] = 'Participación';
$string['ladderparticipation_help'] = 'Define si se espera que los usuarios participen en la tabla de ranking, o si pueden unirse o salirse según su preferencia.

- Automático, no opcional: Todos los usuarios se unen automáticamente a la tabla de ranking y no pueden abandonarla.
- Automático, exclusión voluntaria disponible: Todos los usuarios se unen automáticamente a la tabla de rankign pero pueden optar por salirse de ella.
- Opcional, al elegirlo: Todos los usuarios deben unirse expresamente a la tabla de ranking para participar en ella.

Los usuarios pueden cambiar de opinión y salir o volver a unirse después de haber elegido lo uno o lo otro. Sin embargo, para evitar cambios no intencionados, los usuarios que se hayan unido no podán salirse durante 3 días.

[Más información](https://docs.levelup.plus/xp/docs/leaderboard-opt-out)';
$string['ladderparticipationforced'] = 'Automático, no opcional';
$string['ladderparticipationoptin'] = 'Opcional, al elegirlo';
$string['ladderparticipationoptout'] = 'Automático, exclusión voluntaria disponible';
$string['ladderparticipationreset'] = 'Borrar los estados de participación grabados de todos.';
$string['ladderparticipationreset_help'] = 'Cuando se selecciona, se borrará el estado de participación de todos los usuarios, y todos los usuarios tendrán que elegir si participan o no.';
$string['laddersettingsmovednotice'] = 'Los ajustes de tablero se han movido a [leaderboard page]({$a->url}).';
$string['learnmore'] = 'Aprender más';
$string['leave'] = 'Salir';
$string['leaveleadeboardconfirmnote'] = '¿Seguro que quieres abandonar la tabla de ranking?';
$string['leaveleadeboardlockednote'] = 'Usted no puede abandonar la tabla de ranking';
$string['leaveleadeboardlockeduntilnote'] = 'Usted no puede abandonar de la tabla de ranking hasta {$a}.';
$string['leaveleaderboard'] = 'Salir de la tabla de ranking';
$string['level'] = 'Nivel';
$string['levelbadge'] = 'Insignia de nivel';
$string['levelbadges'] = 'Insignias de nivel';
$string['levelbadges_help'] = 'Suba imágenes para reemplazar el aspecto de niveles individuales.

Los archivos deben llamarse [nivel].[extensión de archivo], por ejemplo 1.png, 2.jpg, etc.

Recomendamos imágenes de 100x100 píxeles, en cualquiera de los siguientes formatos: GIF, JPEG, PNG and SVG.';
$string['levelbadgesformhelp'] = 'Nombre los archivos [nivel].[extensión del archivo],por ejemplo: 1.png, 2.jpg, etc... El tamaño recomendado de imagen es 100x100.';
$string['levelcount'] = 'Número de niveles';
$string['leveldesc'] = 'Descripción del nivel';
$string['leveldesc_help'] = 'Una breve descripción del nivel. Esto se muestra en la página de información junto al nivel mismo. Puede usarlo para describir una recompensa a estudiantes que hayan alcanzado el nivel, para incluir instrucciones sobre cómo trabajar para conseguir este nivel, para describir el nivel de forma lúdica (p.ej.: _Sólo los más intrépidos han llegado a conseguir este nivel_), etc.';
$string['leveldescriptiondesc'] = 'Breve descripción del nivel, mostrada a los estudiantes en la página de información.';
$string['levelname'] = 'Nombre del nivel';
$string['levelname_help'] = 'Un nombre corto para mostrar en vez del _Nivel #1_, _Nivel #2_, etc que aparece por defecto a veces. ¡Si da nombre a algunos niveles, recomendamos que dé nombre a todos!';
$string['levelpointslength'] = 'Longitud';
$string['levelpointsstart'] = 'Comenzar';
$string['levels'] = 'Niveles';
$string['levelsappearance'] = 'Aspecto de niveles';
$string['levelssaved'] = 'Se han guardado los niveles.';
$string['levelswillbereset'] = '¡Advertencia! Al guardar este formato se recalcularán los niveles para todos!';
$string['levelup'] = '¡Subes de nivel!';
$string['levelupoptionsunavailableforlevelone'] = 'Las opciones relacionadas con alcanzar el nivel no están disponibles para el primer nivel.';
$string['levelupplus'] = '¡Sube de nivel XP+!';
$string['levelx'] = 'Nivel #{$a}';
$string['likenotice'] = '¿Le gusta Level Up XP? Por favor, tómese un momento para <a href="{$a->moodleorg}" target="_blank">añadirlo a sus plugins favoritos</a> en Moodle.org.';
$string['limitparticipants'] = 'Limitar participantes';
$string['limitparticipants_help'] = 'Este ajuste controla quién sale en el ranking. Los vecinos son los participantes que aparecen encima y debajo del usuario actual. Por ejemplo, cuando se muestra "Mostrando 2 vecinos", sólo se mostrarán los dos participantes con puntuación inmediatamente superior e inferior que el usuario actual.';
$string['list'] = 'Lista';
$string['logging'] = 'Accediendo';
$string['manually'] = 'Manualmente';
$string['maxactionspertime'] = 'Máximo de acciones en el lapso de tiempo';
$string['maxactionspertime_help'] = 'El número máximo de acciones que contarán para puntuar durante el lapso de tiempo dado. Cualquier acción subsiguiente se ignorará. Cuando este valor esta vacío o es igual a cero "0", no aplicará.';
$string['maxlevelexcl'] = '¡Nivel máximo!';
$string['menu'] = 'Menú';
$string['messageprovider:adminnotice'] = 'Aviso de administrador';
$string['missing'] = 'Falta';
$string['movecondition'] = 'Mover condición';
$string['moverule'] = 'Mover regla';
$string['name'] = 'Nombre';
$string['namecontains'] = 'Contiene "{$a}"';
$string['nameequalsto'] = 'Es igual a "{$a}"';
$string['navbardisplay'] = 'Mostrar en barra de navegación';
$string['navbardisplay_desc'] = 'Cuando se habilita, el nivel del usuario se mostrará en la barra de navegación superior. Si el plugin se usa "por cursos", sólo aparecerá en cursos. Por favor, observe que esta funcionalidad es altamente dependiente del tema y puede no funcionar bien, o no funcionar en absoluto, con temas de terceros. [Saber más](https://docs.levelup.plus/xp/docs/navbar-display)';
$string['navcompletionrules'] = 'Finalización';
$string['navdrops'] = '"Drops"';
$string['naveventrules'] = 'Reglas de evento';
$string['navgraderules'] = 'Reglas de calificación';
$string['navimport'] = 'Importar';
$string['navinfos'] = 'Información';
$string['navladder'] = 'Ranking';
$string['navlevels'] = 'Niveles';
$string['navlevelssetup'] = 'Configuración';
$string['navlog'] = 'Registro';
$string['navpoints'] = 'Puntos';
$string['navpromo'] = 'XP+';
$string['navreport'] = 'Reporte';
$string['navrules'] = 'Reglas';
$string['navsettings'] = 'Configuraciones';
$string['navvisuals'] = 'Aspecto';
$string['newversioninstallednotice'] = '¡Se ha instalado una nueva versión! Descubra qué hay nuevo en las  [notas de lanzamiento]({$a->releasenotesurl}).';
$string['nextlevelin'] = 'próximo nivel en';
$string['noconditionsyet'] = '¡Aún sin condiciones!';
$string['noconditionsyetintro'] = 'Comience añadiendo una condición.';
$string['nodescription'] = 'Sin descripción';
$string['noissuesidentified'] = 'No se han identificado problemas';
$string['nologsrecordedyet'] = 'No se han guardado los registros aún.';
$string['noname'] = 'Sin nombre';
$string['noneareavailable'] = 'Nada disponible.';
$string['notecompatibilityissues'] = 'Por favor, tenga en cuenta los problemas de compatibilidad identificados a continuación:';
$string['notesomesettingslocked'] = 'Algunos de los ajustes pueden no ser editables si un administrador los ha bloqueado.';
$string['nothingmatchesfilter'] = 'Nada coincide con el filtro.';
$string['notparticipating'] = 'Sin participación';
$string['notranked'] = 'Sin raking';
$string['numberoflevels'] = 'Número de niveles';
$string['occasionally'] = 'Ocasionalmente';
$string['onlyparticipantscanaccessranking'] = 'Sólo quienes participan en la tabla de ranking pueden acceder a los rankings.';
$string['outofsync'] = 'Incompatibilidad de plugins XP';
$string['outofsyncexcessive'] = 'Excesivamente fuera de sincronización';
$string['outofsyncexcessiveinfo'] = 'XP+ es excesivamente más antiguo que XP y puede llevar a problemas inesperados. En el futuro, XP+ se desactivará automáticamente.';
$string['outofsyncinfo'] = 'Los plugins XP no son compatibles uno con otro, lo que puede llevar a problemas inesperados. En el futuro, XP+ se desactivará automáticamente. Se espera la versión {$a->localxpversion} de Level Up XP+ (local_xp).';
$string['pagecurrentnotvisibletoviewers'] = 'Esta página actualmente no es visible para los estudiantes.';
$string['pagecurrentvisibletoviewers'] = 'Esta página actualmente está visible para los estudiantes.';
$string['pagesettings'] = 'Ajustes de página';
$string['participant'] = 'Participante';
$string['participants'] = 'Participantes';
$string['participatesinleaderboard'] = 'Participa en la tabla de ranking.';
$string['participatesnotinleaderboard'] = 'No participa en la tabla de ranking.';
$string['participatetolevelup'] = '¡Participa en el curso para ganar puntos de experiencia y subir de nivel!';
$string['participating'] = 'Participando.';
$string['perpagecolon'] = 'Por página:';
$string['pickaconditiontype'] = 'Elija un tipo de condición';
$string['pluginavailabilityxpdesc'] = 'Este plugin permite a los instructores restringir el acceso a actividades según los niveles de los estudiantes.';
$string['pluginenrolxpdesc'] = 'Este plugin permite matriculación automática a cursos según el nivel de un alumno en otro curso.';
$string['pluginname'] = '¡Sube de nivel XP!';
$string['pluginshortcodesdesc'] = 'Este plugin permite a los instructores personalizar su material incluyendo elementos relacionados con XP (puntos, nivel, ranking...) en en contenido, así como ocultar o mostrar contenido según el nivel del estudiante.';
$string['pluginshortcodesrequiredtousefeature'] = 'Se debe instalar y habiltar el plugin [Shortcodes](https://docs.levelup.plus/xp/docs/getting-started/installation/recommended-plugins) para usar esta característica.';
$string['pluginsoutofsync'] = '__¡Los plugins no están sincronizados!__

Hay problemas de compatibilidad entre Level Up XP y Level Up XP+. En el futuro, Level Up XP+ se desactivará automáticamente si no es compatible. Para evitar esto, por favor, contacte con el administrador de su sitio. [Leer más]({$a->url})';
$string['pluginxmaybeincompatible'] = 'Esta versión de {$a->name} ({$a->component}) puede ser incompatible con Moodle {$a->version}.';
$string['pointsintimelinker'] = 'por';
$string['pointsperlevel'] = 'Puntos por nivel';
$string['pointsrequired'] = 'Puntos requeridos';
$string['pointstoaward'] = 'Puntos a otorgar';
$string['pointstoaward_help'] = 'El número de puntos a otorgar cuando se cumplan las condiciones.';
$string['popupnotificationmessage'] = 'Mensaje emergente de notificación';
$string['popupnotificationmessagedesc'] = 'Mensaje opcional a mostrar dentro de la notificación emergente que felicita al usuario por alcanzar el nivel.';
$string['potentialmoodleincompatibility'] = 'Potencial incompatibilidad de Moodle';
$string['previewpopupnotification'] = 'Vista previa de notificación';
$string['privacy:metadata:log'] = 'Guarda un registro de eventos';
$string['privacy:metadata:log:eventname'] = 'El nombre del evento';
$string['privacy:metadata:log:time'] = 'La fecha en que ocurrió';
$string['privacy:metadata:log:userid'] = 'El usuario que consiguió los puntos';
$string['privacy:metadata:log:xp'] = 'Los puntos otorgados por el evento';
$string['privacy:metadata:prefintro'] = 'Registros sobre si el usuario omitió la introducción del bloque';
$string['privacy:metadata:prefladderpagesize'] = 'Tamaño preferido por el usuario para ver el ranking';
$string['privacy:metadata:preflevelup'] = 'Registros sobre si el usuario debería ver la notificación de sube de nivel';
$string['privacy:metadata:prefnotices'] = 'Registros sobre si el usuario cerró el aviso de soporte';
$string['privacy:metadata:prefseenpromo'] = 'Los registros de cuando el usuario vió la página de promo';
$string['privacy:metadata:xp'] = 'Guarda los puntos y niveles de los usuarios';
$string['privacy:metadata:xp:lvl'] = 'El nivel del usuario';
$string['privacy:metadata:xp:userid'] = 'El usuario';
$string['privacy:metadata:xp:xp'] = 'Los puntos del usuario';
$string['privacy:path:addon'] = 'Plugin añadido';
$string['privacy:path:level'] = 'Nivel';
$string['privacy:path:logs'] = 'Registros';
$string['progress'] = 'Progreso';
$string['progressbar'] = 'Barra de progreso';
$string['promocheatguard'] = 'Esta medida antitrampas no está diseñada para cubrir largos lapsos de tiempo. Por favor, considere subir de versión a <em>Level Up XP+</em> para desbloquear lapsos mayores y otras características. <a href="{$a->url}">Leer más aquí</a>.';
$string['promocontactintro'] = 'Contacte con nosotros para más información. ¡No mordemos y respondemos rápido!';
$string['promocontactus'] = 'Mantenerse en contacto';
$string['promoemailusat'] = 'Escríbanos a  _levelup@branchup.tech_.';
$string['promoerrorsendingemail'] = '¡Vaya! No pudimos enviar el mensaje... Por favor, escríbanos directamente a: {$a}. ¡Gracias!';
$string['promogetnow'] = '¡Obtenga XP+ ahora!';
$string['promoifpreferemailusat'] = '¡Eh! Si lo prefiere, escríbanos directamente a _{$a}_.';
$string['promointro'] = '¡Conviértase en el maestro del juego! ¡Desbloquee características adicionales y lleve la gamifiación a un nivel completamente nuevo con Level Up XP+!';
$string['promointroinstalled'] = 'El plugin añadido _Level Up XP+_ está instalado en su sistema y todas sus características están disponibles.';
$string['promorulesdidyouknow'] = '¿Sabía que con <em>Level Up XP+</em> los estudiantes pueden recibir puntos por <em>completing courses</em> y <em>activities</em>, o incluso recibir puntos según sus <em>calificaciones</em>? <a href="{$a->url}">Descubra más aquí</a>.';
$string['promoyourmessagewassent'] = 'Gracias, se ha enviado su mensaje. Contactaremos con usted pronto.';
$string['property:action'] = 'Acción del evento';
$string['property:component'] = 'Componente del evento';
$string['property:crud'] = 'Evento CRUD';
$string['property:eventname'] = 'Nombre del evento';
$string['property:target'] = 'Meta del evento';
$string['provisionstates'] = 'Disposición automática de usuario';
$string['provisionstates_desc'] = 'Por defecto, los usuarios sólo aparecen en la tabla de ranking (y en el informe en modo de todo el sitio), tras haber sido detectados por XP. La disposición de usuario es una característica avanzada que crea automáticamente entradas para los usuarios que faltan vagamente identificados por su rol. Esto se hace periodicamente mediante una tarea programada que se ejecuta diariamente por defecto.  [Saber más](https://docs.levelup.plus/xp/docs/automatic-user-provisioning)';
$string['questpromonotice'] = 'Lleve la gamificación al siguiente nivel, descubra [Level Up Quest]({$a->questurl}).';
$string['questreleasenotice'] = 'Lleve la gamifiación al siguiente nivel, descubra **Level Up Quest** 🥳. Convierta sus cursos en **aventuras emocionantes**, llenas de **estrategias de reenganche** y **celebraciones** 🤯! Compruebe [Quest\'s website]({$a->questurl}) y nuestro [post de lanzamiento aquí]({$a->questblogurl}). 👈';
$string['quickeditpoints'] = 'Edición rápida de puntos';
$string['rank'] = 'Ranking';
$string['ranked'] = 'En raking';
$string['ranking'] = 'Ranking';
$string['ranking_help'] = 'El rank es la posición absoluta del usuario actual en el tablero de ranking. El ranking relativo es la diferencia en puntos de experiencia entre un usuario y sus vecinos.';
$string['reallydeleteuserstate'] = 'Borrar un usuario solamente es útil para borrarlo del tablero. Para otros casos, recomendamos poner sus puntos a 0 en vez de borrarlo. Borrar usuarios no afecta su posibilidad de ganar puntos en el futuro.

Importante: Cuando se usa _Level Up XP_ para todo el sitio, borrarlos hará que desaparezcan del informe, en cuyo caso usted no podrá volver a darles puntos. Sin embargo, si está usando _Level Up XP_ por curso, el estudiante aún podrá aparecer en el informe si aún está matriculado.

¿Seguro que quiere borrar los puntos de este usuario?';
$string['reallydeleteuserstateandlogs'] = 'Borrar un usuario lo elimina del tablero y borra todos sus registros asociados.

Borrar registros puede permitir a un usuario volver a ganar puntos por acciones previas. Si su intención es sólo resetear sus puntos, recomendamos poner sus puntos a 0 en vez de borrar. Borrar un usuario no afecta su capacidad de ganar puntos en el futuro.

Importante: Cuando se usa _Level Up XP_ para todo el sitio, borrarlos hará que desaparezcan del informe, en cuyo caso usted no podrá volver a darles puntos. Sin embargo, si está usando _Level Up XP_ por curso, el estudiante aún podrá aparecer en el informe si aún está matriculado.

¿Seguro que quiere borrar los puntos y registros de este usuario?';
$string['reallyresetallcourselevelstodefaults'] = '¿Seguro que quiere resetear TODOS los niveles de cursos a sus valores por defecto? Esta acción no es reversible.';
$string['reallyresetallcoursessettingstodefaults'] = '¿Seguro que quiere resetear TODOS los cursos a su configuración por defecto? Esta acción no es reversible.';
$string['reallyresetallcoursestodefaults'] = '¿Seguro que quiere resetear TODAS las reglas de cursos a las reglas por defecto? Esta acción no es reversible.';
$string['reallyresetallcoursevisualstodefaults'] = '¿Seguro que quiere resetear el aspecto de TODOS los niveles de cursos a su aspecto por defecto? Esta acción no es reversible.';
$string['reallyresetcourselevelstodefaults'] = '¿Seguro que quiere resetear los niveles a los niveles por defecto? Esta acción no es reversible.';
$string['reallyresetcourserulestodefaults'] = '¿Seguro que quiere resetear todas las reglas de cursos a las reglas por defecto? Esta acción no es reversible.';
$string['reallyresetcoursevisualstodefaults'] = '¿Seguro que quiere resetear el aspecto de los niveles a su aspecto por defecto? Esta acción no es reversible.';
$string['reallyresetdata'] = '¿Realmente desea reiniciar los niveles y puntos de experiencia de todos en este curso? Esta acción no es reversible.';
$string['reallyresetgroupdata'] = '¿Realmente desea resetear los niveles y puntos de todos en este grupo?';
$string['reallyreverttopluginsdefaults'] = '¿Realmente desea resetear las reglas al estado por defecto sugerido por el plugin? Esta acción no es reversible.';
$string['recentrewards'] = 'Premios recientes';
$string['recommended'] = 'Recomendado';
$string['recommendedplugins'] = 'Plugins recomendados';
$string['releasenotes'] = 'Notas de la versión';
$string['remaining'] = 'quedan';
$string['removefilter'] = 'Quitar filtro';
$string['reportisempty'] = 'El informe está vacío. Los estudiantes aún tienen que ganar puntos.';
$string['reportisemptyenrolstudents'] = 'El informe está vacío. ¿Hay estudiantes matriculados en este curso?';
$string['requires'] = 'Requiere';
$string['resetallcoursessettingstodefaults'] = 'Siga este enlace para [resetear todos los cursos a la configuración por defecto]({$a->url}). Si ha hecho algún cambio, deben salvarse antes. Tenga en cuenta que esto sobreescribirá la configuración de todos los cursos y no es reversible. Esto no afecta a los niveles por defecto, aspecto y reglas. Para resetear esos, por favor, consulte las páginas de administración correspondientes.';
$string['resetallcoursestodefaults'] = 'Resetear todos los cursos a opciones por defecto';
$string['resetallcoursestodefaultsintro'] = 'Clique el botón siguiente para resetear todos los cursos a los valores por defecto anteriores.';
$string['resetcoursedata'] = 'Reiniciar datos del curso';
$string['resetcourserulestodefaults'] = 'Resetear reglas de curso a valores por defecto';
$string['resetcourses'] = 'Resetear cursos';
$string['resetgroupdata'] = 'Resetear datos de grupo';
$string['resetladderparticiptionofeveryone'] = 'Resetear el estado de participación de todos';
$string['resetlevelstodefaults'] = 'Resetear niveles al estado por defecto';
$string['resettodefaults'] = 'Resetear a predeterminados';
$string['resetvisualstodefaults'] = 'Resetear aspecto al estado por defecto';
$string['resultsfilteredforn'] = 'Resultados filtrados para {$a}.';
$string['reverttopluginsdefaults'] = 'Volver a los valores por defecto del plugin.';
$string['reverttopluginsdefaultsintro'] = 'Use el siguiente botón si quiere revertir los valores por defecto anteriores a los del plugin. Esto no afectará las reglas de los cursos existentes.';
$string['reward'] = 'Premio';
$string['rule'] = 'Regla';
$string['rule:contains'] = 'contiene';
$string['rule:eq'] = 'es igual a';
$string['rule:eqs'] = 'es estrictamente igual a';
$string['rule:gt'] = 'es mayor que';
$string['rule:gte'] = 'es mayor o igual a';
$string['rule:lt'] = 'es menor que';
$string['rule:lte'] = 'es menor o igual a';
$string['rule:regex'] = 'coincide con el regex';
$string['ruleadded'] = 'Se ha añadido la condición.';
$string['rulecm'] = 'Actividad o recurso';
$string['rulecm_help'] = 'Esta condición se cumple cuando el evento ocurre en la actividad o recurso especificado.';
$string['rulecmdesc'] = 'La actividad o recurso es "{$a->contextname}".';
$string['rulecmdescwithcourse'] = 'La actividad o recurso es "{$a->contextname}" en "{$a->coursename}".';
$string['rulecminfo'] = 'Esta condición requiere que la acción tenga lugar en una actividad o recurso específico.';
$string['ruleevent'] = 'Evento específico';
$string['ruleeventdesc'] = 'El evento es "{$a->eventname}"';
$string['ruleeventinfo'] = 'Elija la acción que los usuarios deben realizar de una lista seleccionada de eventos.';
$string['rulefilterany'] = 'Cualquiera';
$string['rulefilteranycm'] = 'Cualquier actividad';
$string['rulefilteranycmdesc'] = 'Esta condición coincidirá con cualquier actividad.';
$string['rulefilteranycourse'] = 'Cualquier curso';
$string['rulefilteranycoursedesc'] = 'Esta condición coincidirá con cualquier curso.';
$string['rulefilteranydesc'] = 'Esta condición coincide con cualquier cosa.';
$string['rulefilteranysection'] = 'Cualquier sección';
$string['rulefilteranysectiondesc'] = 'Esta condición coincidirá con cualquier sección.';
$string['rulefiltercm'] = 'Actividad específica';
$string['rulefiltercmdesc'] = 'Elija una actividad o recurso específico en el curso.';
$string['rulefiltercmname'] = 'Nombre de la actividad';
$string['rulefiltercmnamedesc'] = 'Condición basada en el nombre de la actividad.';
$string['rulefilternone'] = 'Nada';
$string['rulefiltersection'] = 'Sección específica';
$string['rulefiltersectiondesc'] = 'Elija una sección específica del curso.';
$string['rulefilterthiscourse'] = 'Este curso';
$string['rulefilterthiscoursedesc'] = 'Elija el curso actual';
$string['ruleproperty'] = 'Propiedad del evento';
$string['rulepropertydesc'] = 'La propiedad es "{$a->property}" {$a->compare} "{$a->value}".';
$string['rulepropertyinfo'] = 'Esta condición es para usuarios avanzados con comprensión técnica de los eventos y sus propiedades.';
$string['ruleset'] = 'Conjunto de condiciones';
$string['ruleset:all'] = 'TODAS las condiciones se cumplen';
$string['ruleset:any'] = 'CUALQUIERA de las condiciones se cumple';
$string['ruleset:none'] = 'NINGUNA de las condiciones se cumple';
$string['rulesetinfo'] = 'Combinar múltiples condiciones en una.';
$string['rulesformhelp'] = '<p>Este plugin hace uso de EVENTOS para otorgar puntos de experiencia en acciones llevadas a cabo por los estudiantes. Puede utilizar la siguiente forma para agregar sus propias reglas y ver las que vienen por defecto.</p>
<p>Se aconseja que compruebe el <a href="{$a->log}">log</a> del plugin para identificar que eventos se lanzan cuando se llevan a cabo ciertas acciones en el curso y también para leer más sobre eventos: <a href="{$a->list}">lista de todos los eventos</a>, <a href="{$a->doc}">Documentos del desarrollador</a>.</p>
<p>Finalmente, queremos dejar claro que el plugin ignora:
<ul>
<li>Las acciones llevadas a cabo por el administrador, invitados y usuarios que no han iniciado sesión.</li>
<li>Las acciones llevadas a cabo por usuarios sin privilegios (habilidad) <em>block/xp:earnxp</em>.</li>
<li>Acciones repetidas en poco intervalo de tiempo a fin de prevenir trampas.</li>
<li>Eventos etiquetados como <em>anónimos</em>, por ejemplo en un caso de retroalimentación anónima.</li>
<li>Eventos a nivel educativo que no sean<em>participativos</em>.</li>
</li>
</ul>
</p>';
$string['rulesscope'] = 'Alcance';
$string['rulesscope_help'] = 'El alcance de las reglas determina cuándo se aplicarán.

Las reglas se pueden crear con dos alcances: para todo el sitio o específicas para un curso. Cuando sea posible, se evaluarán primero las reglas de curso, seguidas de las reglas de sitio. Esto permite a los educadores crear reglas más amplias aplicables a todo el sitio y ajustarlas para cursos individual.

- Para todo el sitio: Estas reglas son efectivas para todo el sitio, excepto cuando haya reglas específicas para cursos.
- Para el curso: Estas reglas se aplican sólo en un curso específico. Tienen prioridad sobre las reglas de todo el sitio.';
$string['ruletypecmcompletion'] = 'Finalización de actividad';
$string['ruletypecmcompletiondesc'] = 'Otorgar puntos cuando una actividad se ha marcado como completada.';
$string['ruletypecoursecompletion'] = 'Finalización de curso';
$string['ruletypecoursecompletiondesc'] = 'Otorga puntos cuando un curso se marca como completado.';
$string['ruletypesectioncompletion'] = 'Finalización de sección';
$string['ruletypesectioncompletiondesc'] = 'Otorga puntos cuando una sección de curso se ha marcado como finalizada.';
$string['searchandselectcourse'] = 'Buscar y seleccionar un curso';
$string['searchandselectmodule'] = 'Buscar y seleccionar una actividad o recurso';
$string['selectcourse'] = 'Seleccionar curso';
$string['send'] = 'Enviar';
$string['setpoints'] = 'Conjunto de puntos';
$string['settingsoutdatedxppnotice'] = 'Si está viendo ajustes a continuación, esto significa que tiene instalada una versión antigua de XP+. Por favor, pida a su administrdor que resuelva el problema instalando la versión más reciente.';
$string['shortcode:xpbadge'] = 'La condecoración que equivale al nivel actual del usuario.';
$string['shortcode:xpiflevel'] = 'Muestra el contenido cuando coincide el nivel del usuario actual.';
$string['shortcode:xpiflevel_help'] = 'Vea los ejemplos siguientes para dar formato a este atajo de código. Cuando se especifica estrictamente un nivel, el contenido se mostrará independientemente de otras reglas.
Todas las reglas _mayor_ y _menor que_ deben coincidir para que el contenido se muestre.
¡Fíjese en que a eso puede hacer que el contenido nunca se muestre!
Tenga en cuenta que los profesores, y otros usuarios con permisos de edición, siempre lo verán todo.

```
[xpiflevel 1 3 5]
    Se muestra si el nivel del usuario es exactamente 1, 3 or 5.
[/xpiflevel]

[xpiflevel >3]
    Se muestra si el nivel del usuario es mayor que 3.
[/xpiflevel]

[xpiflevel >=3]
    Se muestra si el nivel del usuario es mayor o igual a 3.
[/xpiflevel]

[xpiflevel >=10 <20 30]
    Se muestra si el nivel del usuario es mayor o igual a 10 Y SI es estrictamente menor que 20
O SI es exactamente igual a 30.
[/xpiflevel]

[xpiflevel <=10 >=20]
    Nunca se muestra porque el nivel del usuario nunca puede ser menor o igual a 10 Y mayor o igual a 20.
[/xpiflevel]
```

Tenga en cuenta que estos atajos de código NO pueden enlazarse entre ellos.';
$string['shortcode:xpladder'] = 'Mostrar una parte del ranking.';
$string['shortcode:xpladder_help'] = 'Por defecto se mostrará una parte del tablero de ranking alrededor del actual usuario.

```
[xpladder]
```

Para mostrar los 10 estudiantes superiores en vez de los vecinos del usuario actual, seleccione el parámetro `top`. Opcionalmente puede seleccionar el número de usuarios a mostrar con algo así como `top=20`.

```
[xpladder top]
[xpladder top=15]
```

Se mostrará un enlace al tablero de ranking completo bajo la tabla. Si no quiere mostrar tal enlace, añada el argumento `hidelink`.

```
[xpladder hidelink]
```

Por defecto la tabla no incluye la columna de progreso que muestra la barra de progreso. Si se ha seleccionado esa columna en la configuración del tablero de ranking, puede usar el argumento `withprogress` para mostrarla.

```
[xpladder withprogress]
```

Tenga en cuenta que cuando un curso usa grupos el tablero de ranking averiguará mejor qué grupo debe mostrar el tablero de ranking.';
$string['shortcode:xplevelname'] = 'Mostrar el nombre del nivel.';
$string['shortcode:xplevelname_help'] = 'Por defecto la etiqueta muestra el nombre del nivel del usuario actual.
Alternativamente puede usar el argumento `level` para mostrar el nombre de un nivel específico.

```
[xplevelname]
[xplevelname level=5]
```

Si se da el argumento`level` y no existe el nivel, no se mostrará nada.';
$string['shortcode:xppoints'] = 'Muestra un número de puntos formateados como puntos de experiencia.';
$string['shortcode:xppoints_help'] = 'Por defecto esto muestra el número de puntos del usuario actual. Alternativamente usted puede especificar un número para sobreescribir este valor.

El estilo de los puntos dependerá de si se muestra un valor arbitrario o los puntos actuales del usuario. El argumento `plain` puede usarse para eliminar cualquier estilo.

```
[xppoints]
[xppoints 500]
[xppoints 123 plain]
```';
$string['shortcode:xpprogressbar'] = 'La barra de progreso del usuario actual hacia el siguiente nivel.';
$string['shortcodeinactiveleaderboarddisabled'] = 'La tabla de líderes está deshabilitada en este momento, el código abreviado estará inactivo. Puede activar la tabla de líderes en su configuración.';
$string['shortcodexpladderembedintro'] = 'Con el siguiente código abreviado, se puede incrustar la tabla de líderes en cualquier parte de este sitio. Se puede encontrar más información y opciones en la [documentación](https://docs.levelup.plus/xp/docs/how-to/use-shortcodes).';
$string['shortcodexpteamladderembedintro'] = 'Con el siguiente código abreviado, se puede incrustar la tabla de líderes en cualquier parte de este sitio. Se puede encontrar más información y opciones en la [documentación](https://docs.levelup.plus/xp/docs/how-to/use-shortcodes).';
$string['sitewide'] = 'Para todo el sitio';
$string['somefeaturesrequireotherplugins'] = 'Algunas características requieren la instalación de plugins adicionales.';
$string['someoneelse'] = 'Otra persona';
$string['somethinghappened'] = 'Algo ha pasado';
$string['taskadminnotices'] = 'Avisos de administrador';
$string['taskcollectionloggerpurge'] = 'Purgar registros guardados';
$string['taskstateprovisioner'] = 'Disposición de estado';
$string['taskusagereport'] = 'Informe de uso';
$string['teamleaderboard'] = 'Tablero por equipos';
$string['teamleaderboard_help'] = 'El tablero de ranking de equipos se basa en el total de los puntos acumulados por sus miembros.

Los equipos pueden hacerse de cursos o de cohortes. Las opciones también están para acomodar distitnos tamaños de equipos.

[Saber más](https://docs.levelup.plus/xp/docs/how-to/setup-team-leaderboard/team-leaderboard?ref=blockxp_help)';
$string['teamleaderboardintro'] = 'El tablero por equipos es un ranking de equipos basado en los puntos de sus miembros';
$string['teams'] = 'Equipos';
$string['thankyou'] = '¡Gracias!';
$string['timebetweensameactions'] = 'El tiempo requerido entre acciones idénticas';
$string['timebetweensameactions_help'] = 'El mínimo tiempo requerido antes de que una acción que ya haya sucedido anteriormente se acepte de nuevo. Una acción se considera idéntica si ocurrió en el mismo objeto y contexto; leer un post de un foro se considerará idéntico si se lee el mismo post otra vez. Cuando el valor está vacío, o es igual a cero, no es aplicable.';
$string['timeformaxactions'] = 'Lapso de tiempo para máximo de acciones';
$string['timeformaxactions_help'] = 'El lapso de tiempo (en segundos) durante el que el usuario no debe exceder un máximo número de acciones.';
$string['tinytimedays'] = '{$a}d';
$string['tinytimehours'] = '{$a}h';
$string['tinytimeminutes'] = '{$a}m';
$string['tinytimenow'] = 'ahora';
$string['tinytimeolderyearformat'] = '%b %Y';
$string['tinytimeseconds'] = '{$a}s';
$string['tinytimeweeks'] = '{$a}w';
$string['tinytimewithinayearformat'] = '%b %e';
$string['total'] = 'Total';
$string['tryme'] = 'Pruébeme';
$string['unavailable'] = 'No disponible';
$string['unknownactivitya'] = 'Actividad desconocida ({$a})';
$string['unknownbadgea'] = 'Insignia ({$a}) desconocida';
$string['unknownconditiona'] = 'Condición desconocida ({$a})';
$string['unknowneventa'] = 'Evento desconocido ({$a})';
$string['unknownsectiona'] = 'Sección desconocida ({$a})';
$string['unknowntypea'] = 'Tipo desconocido ({$a})';
$string['unlockfeaturewithxpplus'] = 'Desbloquee esta característica con XP+. <a href="{$a}">Saber más</a>';
$string['unstableversioninstalled'] = 'Versión instalada inestable';
$string['unstableversioninstalledinfo'] = 'Esta versión de Level Up XP (block_xp) todavía está en desarrollo y se considera inestable. Por favor, use una versión oficial.';
$string['updateandpreview'] = 'Subir y previsualizar';
$string['upgradingplugins'] = 'Actualizando los plugins';
$string['urlaccessdeprecated'] = 'El acceso mediante esta URL está obsoleto. Por favor, actualice sus enlaces.';
$string['usagereport'] = 'Compartir informe de uso';
$string['usagereport_desc'] = 'Intercambiar periódicamente información de uso anónima con los desarrolladores del plugin. Esta información ayudará a comprender mejor cómo se está usando el plugin e influirá en su desarrollo. La información compartida contiene información básica sobre el sitio Moodle (URL, versión) e información de uso del plugin (número de usuarios ganando puntos, configuración, reglas usadas...).';
$string['usealgo'] = 'Usar el algoritmo';
$string['usecustomlevelbadges'] = 'Usar insignias de nivel personalizadas';
$string['usecustomlevelbadges_help'] = 'Cuando configura a SI, debe proporcionar una imagen para cada nivel.';
$string['userladderparticipation'] = 'Participación en la tabla de ranking';
$string['userladderparticipation_help'] = 'Determina si el usuario está participando actualmente en la tabla de ranking. Esto no afecta a la tabla de ranking de equipo.';
$string['userladderparticipationlocked'] = 'Bloquear participación hasta';
$string['userladderparticipationlocked_help'] = 'La fecha desde la que el usuario es libre de modificar su preferencia de participación.';
$string['usingalgo'] = 'Usar algoritmo';
$string['value'] = 'Valor';
$string['valuessaved'] = 'Los valores se han guardado correctamente.';
$string['viewas'] = 'Ver como';
$string['viewlogs'] = 'Ver los registros';
$string['viewtheladder'] = 'Ver ranking';
$string['visualsintro'] = 'Suba imágenes para personalizar la apariencia de los niveles y el significado de los puntos.';
$string['wewillreplyat'] = 'Responderemos en: _{$a}_.';
$string['when'] = 'Cuando';
$string['wherearexpused'] = '¿Dónde se usan los puntos?';
$string['wherearexpused_desc'] = 'Cuando se ajusta a "En cursos", los puntos obtenidos sólo contarán para el curso en el que se haya añadido el bloque. Cuando se ajusta a "Para todo el sitio" en vez de selectivamente por curso, se usarán todos los puntos obtenidos a través del sitio.';
$string['whoops'] = '¡Vaya!';
$string['xp'] = 'Puntos de experiencia';
$string['xp:addinstance'] = 'Agregar un nuevo bloque';
$string['xp:earnxp'] = 'Ganar puntos';
$string['xp:manage'] = 'Administrar todos los aspectos de puntos de experiencia';
$string['xp:myaddinstance'] = 'Añadir el bloque a mi tablero';
$string['xp:view'] = 'Ver el bloque y sus páginas relacionadas';
$string['xp:viewlogs'] = 'Ver los registros';
$string['xp:viewreport'] = 'Ver el informe';
$string['xpgaindisabled'] = 'Ganancia de puntos deshabilitada';
$string['xpplusrequired'] = 'XP+ requeridos';
$string['xprequired'] = 'XP (experiencia) requerida';
$string['xptogo'] = '[[{$a}]] para subir';
$string['youleveledupexcl'] = '¡Subiste de nivel!';
$string['youreachedlevel'] = 'Has alcanzado el nivel:';
$string['youreachedlevela'] = '¡Alcanzaste el nivel {$a}!';
$string['yourmessage'] = 'Su mensaje';
$string['yourownrules'] = 'Tus propias reglas';
