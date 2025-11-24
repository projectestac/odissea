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
 * Strings for component 'antivirus_clamav', language 'gl', version '4.5'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'Neste momento existe un problema co escaneo do AntiVirus. O seu ficheiro {$a->item} non foi cargado. Ténteo de novo máis tarde.';
$string['clamfailed'] = 'Non foi posíbel executar Clam AV. A mensaxe de erro devolvida foi «{$a}». Esta é a saída de Clam:';
$string['clamfailureonupload'] = 'Produciuse un fallo en ClamAV';
$string['configclamactlikevirus'] = 'Tratar ficheiros como virus';
$string['configclamdonothing'] = 'Tratar ficheiros como bos';
$string['configclamfailureonupload'] = 'Se escolle «Tratar os ficheiros como bos», os ficheiros moveranse ao directorio de destino. Se se selecciona «Rexeitar o envío, ténteo de novo», pediráselle ao usuario que o tente de novo máis tarde. Se escolle «Tratar os ficheiros como virus», os ficheiros serán movidos á área de corentena ou eliminados. Advertencia: Con esta opción, se por algunha razón clam non se executa (xeralmente debido a unha ruta a clam non válida), entón todos os ficheiros enviados serán movidos á área de corentena indicada ou eliminados.';
$string['configclamtryagain'] = 'Rexeitar o envío, ténteo de novo';
$string['errorcantopensocket'] = 'A conexión ao conectador de dominio Unix deu como resultado un erro {$a}';
$string['errorclamavnoresponse'] = 'ClamAV non responde; verifique o estado de execución do servizo.';
$string['errornounixsocketssupported'] = 'Non se admite o transporte de socket de dominio Unix neste sistema. Use a opción da liña de ordes.';
$string['invalidpathtoclam'] = 'A ruta para ClamAV, {$a}, non é correcta.';
$string['pathtoclam'] = 'Liña de ordes';
$string['pathtoclamdesc'] = 'Se o método de execución está configurado como «liña de ordes», introduza a ruta a ClamAV aquí. En Linux isto será /usr/bin/clamscan ou /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Conectador do dominio Unix';
$string['pathtounixsocketdesc'] = 'Se o método de execución está configurado en "«Socket» do dominio Unix", introduza a ruta ao «socket» ClamAV Unix aquí. En Debian Linux este será /var/run/clamav/clamd.ctl. Asegúrese de que o servizo clamav teña acceso de lectura aos ficheiros cargados, o xeito máis sinxelo é engadir o usuario «clamav» ao grupo do seu servidor web («www-data» en Debian Linux).';
$string['pluginname'] = 'Antivirus ClamAV';
$string['privacy:metadata'] = 'O complemento de Antivirus ClamAV non almacena ningún dato persoal.';
$string['quarantinedir'] = 'Directorio de corentena';
$string['runningmethod'] = 'Método de execución';
$string['runningmethodcommandline'] = 'Liña de ordes';
$string['runningmethoddesc'] = 'Método de execución do ClamAV. A liña de ordes úsase de xeito predeterminado, mais en sistemas Unix pódese obter un mellor desenvolvemento mediante o uso de «sockets» do sistema.';
$string['runningmethodtcpsocket'] = 'Conectador TCP';
$string['runningmethodunixsocket'] = 'Conectador do dominio Unix';
$string['tcpsockethost'] = 'Nome do servidor do conectador TCP';
$string['tcpsockethostdesc'] = 'Nome de dominio do servidor ClamAV';
$string['tcpsocketport'] = 'Porto do conectador TCP';
$string['tcpsocketportdesc'] = 'O porto a usar ao conectar ao ClamAV';
$string['tries'] = 'Intentos de escaneo';
$string['tries_desc'] = 'Número de intentos realizados por ClamAV se hai un erro durante o proceso de escaneo.';
$string['tries_notice'] = 'O escaneo de Clamav tentouse {$a-> tries} vez(ces).
{$a->notice}';
$string['unknownerror'] = 'Produciuse un erro descoñecido con Clam.';
