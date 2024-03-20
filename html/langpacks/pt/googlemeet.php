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
 * Strings for component 'googlemeet', language 'pt', version '4.1'.
 *
 * @package     googlemeet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkweekdays'] = 'Selecione os dias da semana que se enquadram no intervalo de datas selecionado.';
$string['date'] = 'Data';
$string['duration'] = 'Duração';
$string['earlierto'] = 'A data do evento não pode ser anterior à data de início da disciplina ({$a}).';
$string['emailcontent'] = 'Conteúdo do e-mail';
$string['emailcontent_default'] = '<p>Olá %userfirstname%,</p>
<p>Esta mensagem é para lembrar-lhe de que haverá um evento do Google Meet na disciplina \'%coursename%\'</p>
<p><b>%googlemeetname%</b></p>
<p>Quando: %eventdate% %duration% %timezone%</p>
<p>Hiperligação de acesso: %url%</p>';
$string['emailcontent_help'] = 'Quando uma notificação é enviada a um aluno, o conteúdo do e-mail é obtido a partir destes campos. Podem ser usadas os seguintes caracteres especiais:
<ul>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%coursename%</li>
<li>%googlemeetname%</li>
<li>%eventdate%</li>
<li>%duration%</li>
<li>%timezone%</li>
<li>%url%</li>
<li>%cmid%</li>
</ul>';
$string['entertheroom'] = 'Indique a sala';
$string['eventdate'] = 'Data do evento';
$string['from'] = 'de';
$string['googlemeet:addinstance'] = 'Adicionar novo Google Meet™ para Moodle';
$string['googlemeet:editrecording'] = 'Editar gravações';
$string['googlemeet:removerecording'] = 'Eliminar gravações';
$string['googlemeet:syncgoogledrive'] = 'Sincronizar com o Google Drive';
$string['googlemeet:view'] = 'Ver o conteúdo do Google Meet™ para Moodle';
$string['hide'] = 'Ocultar';
$string['invalideventenddate'] = 'Esta data não pode ser anterior à "Data do evento"';
$string['invalideventendtime'] = 'A hora de fim tem der ser posterior à hora de início';
$string['invalidstoredurl'] = 'Não é possível exibir este recurso. O URL do Google Meet é inválido.';
$string['jstableinfo'] = 'A mostrar {start} a {end} de {rows} gravações';
$string['jstableinfofiltered'] = 'A mostrar {start} a {end} de {rows} gravações  (filtrado de {rowsTotal} gravações)';
$string['jstableloading'] = 'A carregar...';
$string['jstablenorows'] = 'Nenhuma gravação encontrada';
$string['jstableperpage'] = '{select} gravações por página';
$string['jstablesearch'] = 'Pesquisar...';
$string['lastsync'] = 'Última sincronização:';
$string['loading'] = 'A carregar';
$string['messageprovider:notification'] = 'Lembrete de início de evento do Google Meet';
$string['minutesbefore'] = 'Minutos antes';
$string['minutesbefore_help'] = 'Minutos antes do início do evento a que deve ser enviada a notificação.';
$string['modulename'] = 'Google Meet™ para Moodle';
$string['modulename_help'] = 'O módulo Google Meet™ para Moodle permite ao professor criar uma sala de reunião do Google Meet como recurso da disciplina e, após as reuniões, disponibilizar as gravações aos alunos, guardadas no Google Drive.
<p>©2018 Google LLC Todos os direitos reservados.<br/>
Google Meet e o logótipo Google Meet são marcas registadas da Google LLC.</p>';
$string['modulenameplural'] = 'Instâncias de Google Meet™ para Moodle';
$string['multieventdateexpanded'] = 'Recorrência da data do evento expandida';
$string['multieventdateexpanded_desc'] = 'Ao criar uma nova sala, mostrar as configurações expandidas de "Recorrência da data do evento", por predefinição.';
$string['name'] = 'Nome';
$string['never'] = 'Nunca';
$string['notification'] = 'Notificação';
$string['notificationexpanded'] = 'Notificação expandida';
$string['notify'] = 'Enviar notificação ao aluno';
$string['notify_help'] = 'Se ativar, uma notificação será enviada ao aluno sobre a data de início do evento.';
$string['notifycationexpanded_desc'] = 'Mostrar as configurações da "Notificação" expandidas, por predefinição, ao criar uma nova sala.';
$string['notifytask'] = 'Notificação do Google Meet™ para Moodle';
$string['or'] = 'ou';
$string['play'] = 'Reproduzir';
$string['pluginadministration'] = 'Administração do Google Meet™ para Moodle';
$string['pluginname'] = 'Google Meet™ para Moodle';
$string['privacy:metadata:googlemeet_notify_done'] = 'Regista as notificações enviadas aos utilizadores sobre o início dos eventos. Estes dados são temporários e são apagados após a data de início do evento.';
$string['privacy:metadata:googlemeet_notify_done:eventid'] = 'O ID do evento';
$string['privacy:metadata:googlemeet_notify_done:timesent'] = 'O timestamp de quando o utilizador recebeu uma notificação';
$string['privacy:metadata:googlemeet_notify_done:userid'] = 'O ID do utilizador';
$string['recording'] = 'Gravação';
$string['recordings'] = 'Gravações';
$string['recordingswiththename'] = 'Gravações com o nome:';
$string['recurrenceeventdate'] = 'Recorrência da data do evento';
$string['recurrenceeventdate_help'] = 'Esta função permite criar múltiplas recorrências a partir da data do evento.
<br>* <strong>Repetir</strong>: os dias da semana em que a reunião ocorrerá (por exemplo: segunda-feira / quarta-feira / sexta-feira)
<br>* <strong>Repetir a cada</strong>: permite uma configuração de periodicidade. Se a reunião ocorrer em todas as semanas, selecione 1; se for a cada duas semanas, selecione 2; a cada 3 semanas, selecione 3, etc.
<br>* <strong>Repetir até</strong>: o último dia da reunião (o dia que pretende que seja o fim da repetição do evento).';
$string['repeatasfollows'] = 'Repetir a data do evento com a configuração abaixo';
$string['repeatevery'] = 'Repetir a cada';
$string['repeaton'] = 'Repetir';
$string['repeatuntil'] = 'Repetir até';
$string['roomcreator'] = 'Criador da sala:';
$string['roomname'] = 'Nome da sala';
$string['roomurl'] = 'URL da sala';
$string['roomurlexpanded'] = 'URL da sala expandido';
$string['roomurlexpanded_desc'] = 'Ao criar uma nova sala, mostrar as configurações do "URL da sala" expandidas por predefinição.';
$string['show'] = 'Mostrar';
$string['strftimedm'] = '%a. %d %b.';
$string['strftimedmy'] = '%a. %d %b. %Y';
$string['strftimedmyhm'] = '%a. %d %b. %Y às %H:%M';
$string['strftimehm'] = '%H:%M';
$string['syncwithgoogledrive'] = 'Sincronizar com o Google Drive';
$string['thereisnorecordingtoshow'] = 'Nenhuma gravação para mostrar.';
$string['timeahead'] = 'Não é possível criar múltiplas recorrências da data do evento que excedam um ano. Por favor, ajuste as datas de início e de fim.';
$string['timedate'] = '%d/%m/%Y às %H:%M';
$string['to'] = 'até';
$string['today'] = 'Hoje';
$string['upcomingevents'] = 'Próximos eventos';
$string['url_failed'] = 'É necessário um URL válido do Google Meet';
$string['visible'] = 'Visível';
$string['week'] = 'Semana(s)';
