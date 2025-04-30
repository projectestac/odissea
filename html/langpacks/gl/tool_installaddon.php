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
 * Strings for component 'tool_installaddon', language 'gl', version '4.4'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Recoñecemento';
$string['acknowledgementtext'] = 'Entendo que é a miña responsabilidade ter copias de seguridade completas deste sitio, antes de instalar engadidos adicionais. Acepto e entendo que os engadidos (especialmente, aínda que non limitado a, aqueles orixinarios de fontes non oficiais) poden conter buratos de seguridade, poden facer que o sitio non estea dispoñíbel, ou causar fugas ou perdas de datos privados.';
$string['featuredisabled'] = 'O instalador de engadidos está desactivado neste sitio.';
$string['installaddon'] = 'Instalar o engadido!';
$string['installaddons'] = 'Instalar engadidos';
$string['installfromrepo'] = 'Instalar engadidos dende o directorio de engadidos de Moodle';
$string['installfromrepo_help'] = 'Vai ser redirixido cara ao directorio de engadidos de Moodle para buscar e instalar un engadido. Tome nota de que o nome completo do seu sitio, URL e versión principal serán enviados, para facerlle máis sinxelo o proceso de instalación';
$string['installfromzip'] = 'Instalar engadido dende arquivo ZIP';
$string['installfromzip_help'] = 'Unha alternativa a instalar directamente un engadido dende o directorio de engadidos de Moodle, é cargar un paquete ZIP do engadido. Este paquete ZIP debería ter a mesma estrutura que un paquete descargado dende o directorio de engadidos de Moodle.';
$string['installfromzipfile'] = 'Paquete Zip';
$string['installfromzipfile_help'] = 'O paquete ZIP do engadido debe conter exactamente un directorio que coincida co nome do engadido. O ZIP será extraído cara á localización apropiada para o tipo de engadido. Se o paquete foi descargado dende o directorio de engadidos de Moodle, entón terá esta estrutura.';
$string['installfromzipinvalid'] = 'O paquete ZIP do engadido debe conter exactamente un directorio, cun nome que coincida co nome do engadido. O arquivo fornecido non é un paquete ZIP de engadido admitido.';
$string['installfromziprootdir'] = 'Renomear o directorio raíz';
$string['installfromziprootdir_help'] = 'Algúns paquetes ZIP, tales como os xerados por Github, poden conter un nome incorrecto do directorio raíz. Se for así, pode escribir aquí o nome correcto.';
$string['installfromzipsubmit'] = 'Instalar engadido dende o arquivo ZIP';
$string['installfromziptype'] = 'Tipo de engadido';
$string['installfromziptype_help'] = 'Para os engadidos que declaran correctamente os nomes dos seus compoñentes, o instalador pode detectar automaticamente o tipo de engadido. Se falla a detección automática, escolla manualmente o tipo correcto de engadido. Advertencia: O proceso de instalación pode fallar se especifica un tipo incorrecto de engadido.';
$string['installfromziptype_link'] = 'Desenvolvemento:Engadidos';
$string['permcheck'] = 'Asegúrese de que a localización da raíz do tipo de engadido sexa escribíbel polo proceso do servidor web';
$string['permcheckerror'] = 'Produciuse un erro ao revisar os permisos de escritura';
$string['permcheckprogress'] = 'Revisando os permisos de escritura ...';
$string['permcheckrepeat'] = 'Revisar outra vez';
$string['permcheckresultno'] = 'A localización do tipo de engadido <em>{$a->path}</em> non é escribíbel';
$string['permcheckresultyes'] = 'A localización do tipo de engadido <em>{$a->path}</em> é escribíbel';
$string['pluginname'] = 'Instalador de engadidos';
$string['privacy:metadata'] = 'O engadido instalador de engadidos non almacena ningún dato persoal.';
$string['remoterequestalreadyinstalled'] = 'Hai unha solicitude para instalar o engadido {$a->name} ({$a->component}) versión {$a->version} dende o directorio de engadidos de Moodle cara a este sitio. Porén, este engadido <strong>xa está instalado</strong> neste sitio.';
$string['remoterequestconfirm'] = 'Hai unha solicitude para instalar o engadido <strong>{$a->name}</strong> ({$a->component}) versión {$a->version} dende o directorio de engadidos de Moodle cara a este sitio. Se continúa, o paquete ZIP do engadido será descargado para validación. Aínda non se instalará nada.';
$string['remoterequestinvalid'] = 'Hai unha solicitude para instalar un engadido dende o directorio de engadidos de Moodle cara a este sitio. Desafortunadamente, esta solicitude non é correcta, polo que o engadido non pode ser instalado.';
$string['remoterequestnoninstallable'] = 'Hai unha solicitude para instalar o engadido {$a->name} ({$a->component}) versión {$a->version} dende o directorio de engadidos de Moodle cara a este sitio. Porén, fallou a revisión previa á instalación do engadido (código da razón: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Hai unha solicitude para instalar o engadido {$a->name} ({$a->component}) versión {$a->version} dende o directorio de engadidos de Moodle cara a este sitio. Porén, a localización do tipo de engadido <strong>{$a->typepath}</strong> é <strong> non escribíbel</strong>. Necesita darlle acceso para escritura ao usuario do servidor web na localización do tipo do engadido. Unha vez que se outorgue o acceso de escritura, prema no botón de continuar para repetir a revisión.';
$string['remoterequestpluginfoexception'] = 'Ouh! ... Produciuse un erro ao tentar obter información sobre o engadido {$a->name} ({$a->component}) versión {$a->version}. Non é posíbel instalar o engadido. Active o modo de depuración para ver os detalles do erro.';
$string['typedetectionfailed'] = 'Non é posíbel detectar o tipo de engadido. Escolla manualmente o tipo de engadido.';
$string['typedetectionmismatch'] = 'O tipo do engadido seleccionado non coincide co tipo declarado polo engadido: {$a}';
