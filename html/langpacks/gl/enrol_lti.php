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
 * Strings for component 'enrol_lti', language 'gl', version '3.11'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'Nota: Recoméndase que o axuste da administración do sitio «Permitir cadros integrados» estea activada, de xeito que as ferramentas estean amosadas dentro dun cadro e non nunha xanela nova.';
$string['authltimustbeenabled'] = 'Nota: Este engadido tamén require que o engadido de autenticación LTI estea activado.';
$string['cartridgeurl'] = 'URL de cartucho';
$string['couldnotestablishproxy'] = 'Non foi posíbel estabelecer o proxy co consumidor.';
$string['enrolenddate'] = 'Data final';
$string['enrolenddate_help'] = 'De estar activado, os usuarios soamente poden acceder ata esta data.';
$string['enrolenddateerror'] = 'A data final de matriculación non pode ser anterior á data inicial';
$string['enrolisdisabled'] = 'O engadido «Publicar como unha ferramenta LTI» está desactivado.';
$string['enrolmentfinished'] = 'Rematou a matriculación';
$string['enrolmentnotstarted'] = 'Non comezou a matriculación.';
$string['enrolperiod'] = 'Duración da matriculación';
$string['enrolperiod_help'] = 'Duración de tempo predeterminada durante a que a matriculación é válida, a partir do momento no que o usuario se matricula dende o sistema remoto. De estar desactivada, a duración da matrícula é ilimitada.';
$string['enrolstartdate'] = 'Data de inicio';
$string['enrolstartdate_help'] = 'Se está activado, os usuarios só poderán acceder dende esta data.';
$string['failedrequest'] = 'Solicitude errada. Razón: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Para acceder á ferramenta, siga a seguinte ligazón.';
$string['gradesync'] = 'Sincronización da cualificación';
$string['gradesync_help'] = 'Se as cualificacións da ferramenta son enviadas ao sistema remoto (Consumidor LTI).';
$string['incorrecttoken'] = 'A marca era incorrecta. Verifique o URL e tente de novo ou contacte co administrador desta ferramenta.';
$string['invalidrequest'] = 'Solicitude incorrecta';
$string['invalidtoolconsumer'] = 'Consumidor de ferramenta incorrecto.';
$string['launchdetails'] = 'Detalles do inicio';
$string['launchdetails_help'] = 'Para configurar a ferramenta son necesarios un URL de cartucho (tamén chamado URL de configuración) máis un segredo ou un URL de inicio.';
$string['launchurl'] = 'URL de inicio';
$string['lti:config'] = 'Configurar as instancias de «Publicar como unha ferramenta LTI»';
$string['lti:unenrol'] = 'Desmatricular usuarios do curso';
$string['maxenrolled'] = 'Máximo de usuarios matriculados';
$string['maxenrolled_help'] = 'O número máximo de usuarios remotos que poden acceder á ferramenta. Se se estabelece en cero, o número de usuarios inscritos é ilimitado.';
$string['maxenrolledreached'] = 'Xa se acadou o número máximo de usuarios remotos permitidos para acceder á ferramenta.';
$string['membersync'] = 'Sincronización do usuario';
$string['membersync_help'] = 'Se unha tarefa programada sincroniza os usuarios matriculados no sistema remoto con matriculacións neste curso, crea unha conta para cada usuario remoto segundo sexa necesario e matricúlaos ou desmatricúlaos segundo corresponda.

Se está definido como non, no momento en que un usuario remoto accede á ferramenta, crearase unha conta para eles e matricularanse automaticamente.';
$string['membersyncmode'] = 'Modo de sincronización do usuario';
$string['membersyncmode_help'] = 'Se os usuarios remotos deben estar ou non matriculados neste curso.';
$string['membersyncmodeenrolandunenrol'] = 'Matricula novos usuarios e desmatricula os usuarios desaparecidos';
$string['membersyncmodeenrolnew'] = 'Matricular novos usuarios';
$string['membersyncmodeunenrolmissing'] = 'Desmatricular usuarios desaparecidos';
$string['notoolsprovided'] = 'Non se fornecen ferramentas';
$string['opentool'] = 'Abrir a ferramenta';
$string['pluginname'] = 'Publicar como unha ferramenta LTI';
$string['pluginname_desc'] = 'O engadido «Publicar como unha ferramenta LTI», xunto co engadido de autenticación LTI, permite aos usuarios remotos acceder a cursos e actividades seleccionadas. Noutras palabras, Moodle funciona como un provedor de ferramentas LTI.';
$string['privacy:metadata:enrol_lti_users'] = 'A lista de usuarios matriculados a través dun provedor LTI';
$string['privacy:metadata:enrol_lti_users:lastaccess'] = 'A data na que se matriculou o usuario';
$string['privacy:metadata:enrol_lti_users:lastgrade'] = 'A última cualificación que o usuario ten rexistrada, de tela tido';
$string['privacy:metadata:enrol_lti_users:timecreated'] = 'A data na que se matriculou o usuario';
$string['privacy:metadata:enrol_lti_users:userid'] = 'O ID do usuario';
$string['registration'] = 'Rexistro de ferramentas publicadas';
$string['registrationurl'] = 'URL de rexistro';
$string['registrationurl_help'] = 'Se se usa un URL de rexistro (tamén chamado URL proxy), a ferramenta configúrase automaticamente.';
$string['remotesystem'] = 'Sistema remoto';
$string['requirecompletion'] = 'Require completar curso ou actividade antes da sincronización da cualificación';
$string['returnurlnotset'] = 'Non se estabeleceu o URL de retorno.';
$string['roleinstructor'] = 'Rol para o profesor';
$string['roleinstructor_help'] = 'O rol asignado na ferramenta ao profesor remoto.';
$string['rolelearner'] = 'Rol para alumno';
$string['rolelearner_help'] = 'O rol asignado na ferramenta ao alumno remoto.';
$string['secret'] = 'Segredo';
$string['secret_help'] = 'Unha cadea de caracteres que se comparten co sistema remoto (Consumidor LTI) para fornecer acceso á ferramenta.';
$string['sharedexternaltools'] = 'Publicado como ferramentas LTI';
$string['successfulregistration'] = 'Rexistro satisfactorio';
$string['tasksyncgrades'] = 'Publicar como sincronización de cualificacións de ferramenta LTI';
$string['tasksyncmembers'] = 'Publicar como sincronización de usuarios de ferramenta LTI';
$string['toolsprovided'] = 'Ferramentas publicadas';
$string['toolsprovided_help'] = 'Unha ferramenta pode ser compartida con outro sitio ofrecendo detalles de inicio ou un URL de rexistro.';
$string['tooltobeprovided'] = 'Ferramenta a publicar';
$string['toolurl'] = 'URL base da ferramenta';
$string['userdefaultvalues'] = 'Valores predeterminados do usuario';
