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
 * Strings for component 'antivirus_clamav', language 'gl', version '4.1'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Non foi posíbel executar Clam AV. A mensaxe de erro devolvida foi «{$a}». Esta é a saída de Clam:';
$string['clamfailureonupload'] = 'Produciuse un fallo en ClamAV';
$string['configclamactlikevirus'] = 'Tratar ficheiros como virus';
$string['configclamdonothing'] = 'Tratar ficheiros como bos';
$string['configclamfailureonupload'] = 'Se configurou o clam para comprobar ficheiros transferidos, mais a configuración é incorrecta ou hai un erro de execución por calquera motivo, que debe facer? Se escolle «Tratar ficheiros como virus», estes ficheiros serán enviados para a área de corentena ou serán eliminados. Se escolle «Tratar ficheiros como bos» os ficheiros serán enviados para o directorio de destino. De calquera xeito, cando falle o clam avisarase aos administradores. Se escolle «Tratar ficheiros como virus» e por algunha razón o clam continúa fallando (porque introduciu unha ruta de acceso a clam incorrecta), TODOS os ficheiros enviados moveranse para a área de corentena ou serán eliminados. Teña coidado á hora de escoller un destes axustes.';
$string['errorcantopensocket'] = 'A conexión ao «socket» de dominio Unix deu como resultado un erro {$a}';
$string['errorclamavnoresponse'] = 'ClamAV non responde; verifique o estado de execución do servizo.';
$string['errornounixsocketssupported'] = 'Non se admite o transporte de socket de dominio Unix neste sistema. Use a opción da liña de ordes.';
$string['invalidpathtoclam'] = 'A ruta a ClamAV, {$a}, é incorrecta.';
$string['pathtoclam'] = 'Liña de ordes';
$string['pathtoclamdesc'] = 'Se o método de execución está configurado como «liña de ordes», introduza a ruta a ClamAV aquí. En Linux isto será /usr/bin/clamscan ou /usr/bin/clamdscan.';
$string['pathtounixsocket'] = '«Socket» do dominio Unix';
$string['pathtounixsocketdesc'] = 'Se o método de execución está configurado en "«Socket» do dominio Unix", introduza a ruta ao «socket» ClamAV Unix aquí. En Debian Linux este será /var/run/clamav/clamd.ctl. Asegúrese de que o servizo clamav teña acceso de lectura aos ficheiros cargados, o xeito máis sinxelo é engadir o usuario «clamav» ao grupo do seu servidor web («www-data» en Debian Linux).';
$string['pluginname'] = 'Antivirus ClamAV';
$string['privacy:metadata'] = 'O engadido de Antivirus ClamAV non almacena ningún dato persoal.';
$string['quarantinedir'] = 'Directorio de corentena';
$string['runningmethod'] = 'Método de execución';
$string['runningmethodcommandline'] = 'Liña de ordes';
$string['runningmethoddesc'] = 'Método de execución do ClamAV. A liña de ordes úsase de xeito predeterminado, mais en sistemas Unix pódese obter un mellor desenvolvemento mediante o uso de «sockets» do sistema.';
$string['runningmethodunixsocket'] = '«Socket» do dominio Unix';
$string['unknownerror'] = 'Produciuse un erro descoñecido con ClamAV.';
