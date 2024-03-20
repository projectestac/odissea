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
 * Strings for component 'block_xp', language 'es', version '4.1'.
 *
 * @package     block_xp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['activityoresourceis'] = 'La actividad o recurso es {$a}';
$string['addacondition'] = 'Añadir una condición';
$string['addarule'] = 'Añadir una regla';
$string['addinstructions'] = 'Añadir más información';
$string['additionalresources'] = 'Recursos adicionales';
$string['addlevel'] = 'Añadir nivel';
$string['addoninstallationerror'] = 'Hemos detectado un problema con el plugin (local_xp). No parece estar instalado correctamente. Un administrador debe finalizar su instalación.';
$string['addonnotactivated'] = 'El plugin no está activado.';
$string['addrulesformhelp'] = 'La última columna define la cantidad de puntos de experiencia  ganados cuando se cumple el criterio.';
$string['admindefaultrulesintro'] = 'Las siguientes reglas serán usadas por defecto para los cursos en los que se añada el bloque.';
$string['admindefaultsettingsintro'] = 'La configuración que aparece a continuación será usada por defecto cuando el bloque sea añadido por primera vez a un curso.';
$string['admindefaultvisualsintro'] = 'Las siguientes imágenes serán usadas por defecto cuando el bloque sea añadido por primera vez a un curso.';
$string['adminscanearnxp'] = 'Los administradores pueden ganar puntos';
$string['adminscanearnxp_desc'] = 'Por defecto, los administradores no están incluidos en el grupo de usuarios que pueden ganar puntos. Esto es porque los administradores siempre tienen el permiso _block/xp:earnxp_, que les permite conseguir puntos en cualquier sitio. Usted puede usar este ajuste para que los administradores también ganen puntos.';
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
$string['cachedef_filters'] = 'Filtros de nivel';
$string['cachedef_ruleevent_eventslist'] = 'Lista de algunos eventos';
$string['cannotbesetindefaults'] = 'Este no puede ajustarse en los valores por defecto.';
$string['cannotearnpoints'] = 'No puede ganar puntos.';
$string['cannotshowblockconfig'] = 'Normalmente mostraría la configuración de aspecto aquí, pero no puedo encontar su bloque. Para cambiar el aspecto del bloque, vuelva [aquí]({$a}) (o donde haya añadido el bloque), active edición y seleccione la opción "Configurar" en el desplegable del bloque. Si no puede encontrar el bloque, añádalo de nuevo a su curso.';
$string['cannotshowblockconfigsys'] = 'Normalmente mostraría la configuración de aspecto aquí, pero no puedo encontrar su bloque. Puede que falte de [la página principal]({$a->fp}) y del [tablero por defecto]({$a->mysys}) de sus usuarios, o que esté presente en ambos. Para editar la configuración desde aquí, asegúrese de que aparezca solamente en uno de ellos.';
$string['changelevelformhelp'] = 'Si cambia el número de niveles, las insignias de nivel personalizadas estarán deshabilitadas temporalmente a fin de evitar niveles sin insignias. Si cambia el número de niveles vaya a la página de \'Visuales\' para rehabilitar las insignias personalizadas una vez que haya guardado este formato.';
$string['cheatguard'] = 'Control de trampas';
$string['clicktoselectcm'] = 'Clicar para seleccionar una actividad o recurso';
$string['cmselector'] = 'Selector de módulo de curso';
$string['coefxp'] = 'Coeficiente del algoritmo';
$string['colon'] = '{$a->a}: {$a->b}';
$string['compatibilitycheck'] = 'Comprobación de compatibilidad';
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
$string['courselog'] = 'Registro del curso';
$string['coursereport'] = 'Informe del curso';
$string['courserules'] = 'Normas del curso';
$string['courseselectedcolon'] = 'Curso seleccionado:';
$string['coursesettings'] = 'Configuraciones del curso';
$string['coursevisuals'] = 'Visuales del curso';
$string['currencysign'] = 'Símbolo de puntos';
$string['currencysign_help'] = 'Con este ajuste usted puede cambiar el significado de los puntos. Se mostrará junto a la cantidad de puntos que tiene cada usuario como sustituto de la referencia a _puntos de experiencia_.

Elja uno de los símbolos existentes, ¡o suba los suyos!';
$string['currencysignxp'] = 'XP (puntos de experiencia)';
$string['customizelevels'] = 'Personalizar los niveles';
$string['dangerzone'] = 'Zona de peligro';
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

En Level Up XP, los "drops" son fragmentos de código ( p.ej. `[xpdrop abcdef]`) que un docente puede colocar en contenido habitual de Moodle. Cuando se los encuentra un usuario, estos "drops" se _recogerán_ y se conseguirá un cierto número de puntos.

Actualmente, los "drops" son invisibles para el usuario y el usuario los consigue de forma pasiva la primera vez que los encuentra.

Los "drops" se pueden usar para dar puntos de forma inteligente cuando un estudiante accede a un determinado contenido. Algunas ideas:

- Coloque un "drop" en la retroalimentación de un cuestionario que sólo sea visible cuando se hace perfectamente.
- Coloque un "drop" en contenido profundo para premiar su lectura.
- Coloque un "drop" en una discusión de foro interesante.
- Coloque un "drop" en una página a la que sea difícil llegar en un módulo "lección".

[Más información](https://docs.levelup.plus/xp/docs/how-to/use-drops?ref=blockxp_help)';
$string['dropsintro'] = 'Los "drops" son fragmentos de código que se colocan directamente en un contenido que dé puntos cuando lo encuentre un usuario.';
$string['editingdefaultsettingsinwholesitemodenotice'] = '**¡Atención!** Usted no está modificando la configuración activa actualmente, sino que está editando los valores por defecto. Como Level Up XP se usa en todo el sitio, su intención probablemente es cambiar los ajustes de todo el sitio. [Venga aquí]({$a->url}) para cambiar esos ajustes, o siga el enlace "Ajustes" del propio bloque XP.';
$string['editinstructions'] = 'Editar información';
$string['enablecheatguard'] = 'Activar medidas contra trampas';
$string['enablecheatguard_help'] = 'Las medidas contra trampas son un mecanismo sencillo para evitar que los estudiantes abusen del sistema usando trucos obvios, como refrescar la misma página sin parar, o repetir la misma accción una y otra vez.';
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
$string['errorcontextcoursemismatchforwholesite'] = 'La URL de esta página <em>Level Up XP</em> no coincide con la configuración actual del plugin. Su configuración actual dice que <em>Level Up XP</em> se usa "Para todo el sitio". Sin embargo, esta página espera usarlo "Por curso". Por favor, <a href="{$a->nexturl}">clique aquí</a> para navegar a la página correcta. Busque el ajuste "block_xp_context" si desea cambiar su configuración.';
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

- [¿Cómo se calculan puntos de experiencia?](https://docs.levelup.plus/xp/docs/getting-started/points-calculation?ref=blockxp_help)
- [Solución de problemas de reglas](https://docs.levelup.plus/xp/docs/troubleshooting/event-rule-not-working?ref=blockxp_help)';
$string['eventsrulesintro'] = 'Observe acciones y dé puntos a los estudiantes cuando las realizan.';
$string['eventtime'] = 'Hora del evento';
$string['filterbyuser'] = 'Filtrar por usuario';
$string['filtermodules'] = 'Filtrar módulos';
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
A los estudiantes nunca se les quitan npuntos, y se ignoran las calificaciones negativas.

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
$string['importpoints_help'] = 'La importación puede usarse para _aumentar_ la puntuación de los estudiantes, no para _sobreescribirla_ con el valor dado.

Observe que la importación _no_ usa el mismo formato que el informe exportado. El formato requerido se describe en la [documentación](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help), donde hay un [archivo de ejemplo](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help#sample-file) disponible.';
$string['importpointsintro'] = 'Importar puntos desde un archivo CSV, y opcionalmente enviar un mensaje al receptor.';
$string['incourses'] = 'En los cursos';
$string['ineffective'] = 'Sin efecto';
$string['infos'] = 'información';
$string['installed'] = 'Instalado';
$string['instructions'] = 'Más información';
$string['invalidxp'] = 'Valor de puntuación  inválida';
$string['keeplogs'] = 'Mantener registros';
$string['ladder'] = 'Ranking';
$string['ladderadditionalcols'] = 'Columnas adicionales';
$string['ladderadditionalcols_help'] = 'Este ajuste determina qué columnas adicionales se muestran en el ranking. Pulse las teclas CTRL o CMD mientras clica para seleccionar más de una columna, o para quitar la selección de una columna previamente seleccionada.';
$string['ladderempty'] = 'Actualmente el ranking está vacío. ¡Vuelve más tarde!';
$string['learnmore'] = 'Aprender más';
$string['level'] = 'Nivel';
$string['levelbadges'] = 'Insignias de nivel';
$string['levelbadges_help'] = 'Suba imágenes para reemplazar el aspecto de niveles individuales.

Los archivos deben llamarse [nivel].[extensión de archivo], por ejemplo 1.png, 2.jpg, etc.

Recomendamos imágenes de 100x100 píxeles, en cualquiera de los siguientes formatos: GIF, JPEG, PNG and SVG.';
$string['levelbadgesformhelp'] = 'Nombre los archivos [nivel].[extensión del archivo],por ejemplo: 1.png, 2.jpg, etc... El tamaño recomendado de imagen es 100x100.';
$string['levelcount'] = 'Número de niveles';
$string['leveldesc'] = 'Descripción del nivel';
$string['leveldesc_help'] = 'Una breve descripción del nivel. Esto se muestra en la página de información junto al nivel mismo. Puede usarlo para describir una recompensa a estudiantes que hayan alcanzado el nivel, para incluir instrucciones sobre cómo trabajar para conseguir este nivel, para describir el nivel de forma lúdia (p.ej.: _Sólo los más intrépidos han llegado a conseguir este nivel_), etc.';
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
$string['likenotice'] = '<strong>¿Le gusta el plugin?</strong> Por favor, dedique un momento a <a href="{$a->moodleorg}" target="_blank">añadirlo a sus favoritos</a> en Moodle.org and <a href="{$a->github}" target="_blank">darle una estrella en GitHub</a>.';
$string['limitparticipants'] = 'Limitar participantes';
$string['limitparticipants_help'] = 'Este ajuste controla quién sale en el ranking. Los vecinos son los participantes que aparecen encima y debajo del usuario actual. Por ejemplo, cuando se muestra "Mostrando 2 vecinos", sólo se mostrarán los dos participantes con puntuación inmediatamente superior e inferior que el usuario actual.';
$string['list'] = 'Lista';
$string['logging'] = 'Accediendo';
$string['manually'] = 'Manualmente';
$string['maxactionspertime'] = 'Máximo de acciones en el lapso de tiempo';
$string['maxactionspertime_help'] = 'El número máximo de acciones que contarán para puntuar durante el lapso de tiempo dado. Cualquier acción subsiguiente se ignorará.';
$string['maxlevelexcl'] = '¡Nivel máximo!';
$string['menu'] = 'Menú';
$string['missing'] = 'Falta';
$string['movecondition'] = 'Mover condición';
$string['moverule'] = 'Mover regla';
$string['name'] = 'Nombre';
$string['navbardisplay'] = 'Mostrar en barra de navegación';
$string['navbardisplay_desc'] = 'Cuando se habilita, el nivel del usuario se mostrará en la barra de navegación superior. Si el plugin se usa "por cursos", sólo aparecerá en cursos. Por favor, observe que esta funcionalidad es altamente dependiente del tema y puede no funcionar bien, o no funcionar en absoluto, con temas de terceros. [Saber más](https://docs.levelup.plus/xp/docs/navbar-display)';
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
$string['nextlevelin'] = 'próximo nivel en';
$string['nodescription'] = 'Sin descripción';
$string['noissuesidentified'] = 'No se han identificado problemas';
$string['nologsrecordedyet'] = 'No se han guardado los registros aún.';
$string['noname'] = 'Sin nombre';
$string['notecompatibilityissues'] = 'Por favor, tenga en cuenta los problemas de compatibilidad identificados a continuación:';
$string['notesomesettingslocked'] = 'Algunos de los ajustes pueden no ser editables si un administrador los ha bloqueado.';
$string['numberoflevels'] = 'Número de niveles';
$string['occasionally'] = 'Ocasionalmente';
$string['outofsync'] = 'Fuera de sincronización';
$string['outofsyncexcessive'] = 'Excesivamente fuera de sincronización';
$string['outofsyncexcessiveinfo'] = 'XP+ es excesivamente más antiguo que XP y puede llevar a problemas inesperados. Para evitar mal funcionamiento, puede que XP+ se desactive automáticamente en el futuro.';
$string['outofsyncinfo'] = 'Los plugins XP no son compatibles uno con otro, lo que puede llevar a problemas inesperados.';
$string['participant'] = 'Participante';
$string['participants'] = 'Participantes';
$string['participatetolevelup'] = '¡Participa en el curso para ganar puntos de experiencia y subir de nivel!';
$string['perpagecolon'] = 'Por página:';
$string['pickaconditiontype'] = 'Elija un tipo de condición';
$string['pluginavailabilityxpdesc'] = 'Este plugin permite a los instructores restringir el acceso a actividades según los niveles de los estudiantes.';
$string['pluginenrolxpdesc'] = 'Este plugin permite matriculación automática a cursos según el nivel de un alumno en otro curso.';
$string['pluginname'] = '¡Sube de nivel XP!';
$string['pluginshortcodesdesc'] = 'Este plugin permite a los instructores personalizar su material incluyendo elementos relacionados con XP (puntos, nivel, ranking...) en en contenido, así como ocultar o mostrar contenido según el nivel del estudiante.';
$string['pluginsoutofsync'] = '__¡Los plugins no están sincronizados!__

Esto supone que ha subido la versión de _Level Up XP_ pero no _Level Up XP+_. Aunque hacemos lo posible por prevenir problemas, algunas características puede que ya no funcionen correctamente en _Level Up XP_. Le recomendamos subir _Level Up XP+_ a su versión más reciente. [Leer más]({$a->url})';
$string['pluginxmaybeincompatible'] = 'Esta versión de {$a->name} ({$a->component}) puede ser incompatible con Moodle {$a->version}.';
$string['pointsintimelinker'] = 'por';
$string['pointsperlevel'] = 'Puntos por nivel';
$string['pointsrequired'] = 'Puntos requeridos';
$string['popupnotificationmessage'] = 'Mensaje emergente de notificación';
$string['popupnotificationmessagedesc'] = 'Mensaje opcional a mostrar dentro de la notificación emergente que felicita al usuario por alcanzar el nivel.';
$string['potentialmoodleincompatibility'] = 'Potencial incompatibilidad de Moodle';
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
$string['questreleasenotice'] = '🎉 Nos emociona anunciar **nuestro nuevo plugin de gamificación** llamado **Level Up Quest** 🥳. Convierta sus cursos en **aventuras emocionantes**, llenas de **estrategias de reenganche** y **festejos** 🤯! Mire la [web de Quest]({$a->questurl}) y nuestro [post de lanzamiento aquí]({$a->questblogurl}). 👈';
$string['quickeditpoints'] = 'Edición rápida de puntos';
$string['rank'] = 'Ranking';
$string['ranking'] = 'Ranking';
$string['ranking_help'] = 'El ranking es la posición absoluta del usuario actual en el tablero de ranking. El ranking relativo es la diferencia en puntos de experiencia entre un usuario y sus vecinos.';
$string['reallydeleteuserstate'] = 'Borrar un usuario solamente es útil para borrarlo del tablero. Para otros casos, recomendamos poner sus puntos a 0 en vez de borrarlo. Borrar usuarios no afecta su posibilidad de ganar puntos en el futuro.

Importante: Cuando se usa _¡Sube de nivel!_ para todo el sitio, borrarlos hará que desaparezcan del informe, en cuyo caso usted no podrá volver a darles puntos. Sin embargo, si está usando _¡Sube de nivel!_ por curso, el estudiante aún podrá aparecer en el informe si aún está matriculado.

¿Seguro que quiere borrar los puntos de este usuario?';
$string['reallydeleteuserstateandlogs'] = 'Borrar un usuario lo elimina del tablero y borra todos los registros asociados.

Borrar registros puede permitir a un usuario volver a ganar puntos por acciones previas. Si su intención es sólo resetear sus puntos, recomendamos poner sus puntos a 0 en vez de borrar. Borrar un usuario no afecta su capacidad de ganar puntos en el futuro.

Importante: Cuando se usa _¡Sube de nivel!_ para todo el sitio, borrarlos hará que desaparezcan del informe, en cuyo caso usted no podrá volver a darles puntos. Sin embargo, si está usando _¡Sube de nivel!_ por curso, el estudiante aún podrá aparecer en el informe si aún está matriculado.

¿Seguro que quiere borrar los puntos y registros de este usuario?';
$string['reallyresetallcoursestodefaults'] = '¿Seguro que quiere resetear todas las reglas de cursos a las reglas por defecto? Esta acción no es reversible.';
$string['reallyresetcourselevelstodefaults'] = '¿Seguro que quiere resetear los niveles a los niveles por defecto? Esta acción no es reversible.';
$string['reallyresetcourserulestodefaults'] = '¿Seguro que quiere resetear todas las reglas de cursos a las reglas por defecto? Esta acción no es reversible.';
$string['reallyresetcoursevisualstodefaults'] = '¿Seguro que quiere resetear el aspecto de los niveles a su aspecto por defecto? Esta acción no es reversible.';
$string['reallyresetdata'] = '¿Realmente desea reiniciar los niveles y puntos de experiencia de todos en este curso?';
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
$string['resetallcoursestodefaults'] = 'Resetear todos los cursos a opciones por defecto';
$string['resetallcoursestodefaultsintro'] = 'Clique el botón siguiente para resetear todos los cursos a los valores por defecto anteriores.';
$string['resetcoursedata'] = 'Reiniciar datos del curso';
$string['resetcourserulestodefaults'] = 'Resetear reglas de curso a valores por defecto';
$string['resetgroupdata'] = 'Resetear datos de grupo';
$string['resetlevelstodefaults'] = 'Resetear niveles al estado por defecto';
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
$string['rulecm'] = 'Actividad o recurso';
$string['rulecm_help'] = 'Esta condición se cumple cuando el evento ocurre en la actividad o recurso especificado.';
$string['rulecmdesc'] = 'La actividad o recurso es "{$a->contextname}".';
$string['rulecmdescwithcourse'] = 'La actividad o recurso es "{$a->contextname}" en "{$a->coursename}".';
$string['rulecminfo'] = 'Esta condición requiere que la acción tenga lugar en una actividad o recurso específico.';
$string['ruleevent'] = 'Evento específico';
$string['ruleeventdesc'] = 'El evento es "{$a->eventname}"';
$string['ruleeventinfo'] = 'Elija la acción que los usuarios deben realizar de una lista seleccionada de eventos.';
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
$string['searchandselectcourse'] = 'Buscar y seleccionar un curso';
$string['searchandselectmodule'] = 'Buscar y seleccionar una actividad o recurso';
$string['send'] = 'Enviar';
$string['setpoints'] = 'Conjunto de puntos';
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
$string['somefeaturesrequireotherplugins'] = 'Algunas características requieren la instalación de plugins adicionales.';
$string['someoneelse'] = 'Otra persona';
$string['somethinghappened'] = 'Algo ha pasado';
$string['taskcollectionloggerpurge'] = 'Purgar registros guardados';
$string['taskusagereport'] = 'Informe de uso';
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
$string['unknownbadgea'] = 'Insignia ({$a}) desconocida';
$string['unknowneventa'] = 'Evento desconocido ({$a})';
$string['unlockfeaturewithxpplus'] = 'Desbloquee esta característica con XP+. <a href="{$a}">Saber más</a>';
$string['updateandpreview'] = 'Subir y previsualizar';
$string['upgradingplugins'] = 'Actualizando los plugins';
$string['urlaccessdeprecated'] = 'El acceso mediante esta URL está obsoleto. Por favor, actualice sus enlaces.';
$string['usagereport'] = 'Compartir informe de uso';
$string['usagereport_desc'] = 'Intercambiar periódicamente información de uso anónima con los desarrolladores del plugin. Esta información ayudará a comprender mejor cómo se está usando el plugin e influirá en su desarrollo. La información compartida contiene información básica sobre el sitio Moodle (URL, versión) e información de uso del plugin (número de usuarios ganando puntos, configuración, reglas usadas...).';
$string['usealgo'] = 'Usar el algoritmo';
$string['usecustomlevelbadges'] = 'Usar insignias de nivel personalizadas';
$string['usecustomlevelbadges_help'] = 'Cuando configura a SI, debe proporcionar una imagen para cada nivel.';
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
$string['wherearexpused_desc'] = 'Cuando se ajusta a "En cursos", los puntos obtenidos sólo contarán para el curso en el que se haya añadido el bloque. Cuando se ajusta a "Para todo el sitio", un usuario puede "subir de nivel" en el sitio en vez de independientemente por curso, todos los puntos obtenidos a través del sitio se computarán.';
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
