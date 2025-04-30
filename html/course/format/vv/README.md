Formato de curso para Vicens Vives
==================================

Formato de cursos basado en el formato por temas. Muestra la estructura del
curso organizada por temas, apartados y actividades. El tema gráfico tiene un
color asignado según la materia del curso.

Los ficheros de Javscript (format.js) y CSS (styles.css) son iguales en todas
las versiones de Moodle.

Versiones de Moodle: 4+

Estructura
----------

Las actividades se organizan en un árbol con tres niveles: temas, apartados y
actividades. La apartados no tienen equivalencia en Moodle, sólo son una forma
de agrupar actividades usando etiquetas como título y separador. Por ejemplo, un
tema de Moodle tiene las actividades siguientes:

- Tema 1
  - Foro
  - Etiqueta 1
  - Página 1
  - Tarea 1
  - Etiqueta 2
  - Página 2
  - Tarea 2
  - Etiqueta 3
  - Cuestionario 1

Se mostrará con esta estructura:

- Tema 1
    - Foro
    - Etiqueta 1
        - Página 1
        - Tarea 1
    - Etiqueta 2
        - Página 2
        - Tarea 2
    - Etiqueta 3
        - Cuestionario 1

Los temas y secciones están inicialmente colapsados.

Numeración apartados
--------------------

Los apartados están numerados con un número o letra, que debe indicarse en el
nombre de la etiqueta con el formato "[X] Nombre de la etiqueta". La X es el
número o letra que se mostrará en el recuadro de la numeración.

Color
-----

Para determinar el color del tema gráfico se usa el campo idnumber del curso.
Este campo tiene el formato "vv-ID_BOOK-RANDOM-SUBJECT". El color depende del
SUBJECT, que puede ser puede ser "mates", "lengua", "naturales" o "sociales".

Iconos
------

Las actividades de los libros importados tienen iconos personalizados. Se usa el
idnumber para determinar el icono de cada actividad. El idnumber debe contener
*unit*, *section*, *document*, *question* o *link*. Si el idnumber no cumple el
formato se muestra el icono estándar de la actividad.

Mover actividades
-----------------

No se muestra el botón para mover una actividad en las actividades importadas.
Las creadas manualmente se pueden mover normalmente.
