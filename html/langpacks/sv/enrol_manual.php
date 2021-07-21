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
 * Strings for component 'enrol_manual', language 'sv', version '3.11'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'Avancerat';
$string['alterstatus'] = 'Ändra status';
$string['altertimeend'] = 'Ändra sluttid';
$string['altertimestart'] = 'Ändra starttid';
$string['assignrole'] = 'Tilldela roll';
$string['assignroles'] = 'Tilldela roller';
$string['browsecohorts'] = 'Bläddra genom kohorter';
$string['browseusers'] = 'Bläddra genom användare';
$string['confirmbulkdeleteenrolment'] = 'Vill du verkligen ta bort dessa användarregistreringar?';
$string['defaultperiod'] = 'Standardvaraktighet för registrering';
$string['defaultperiod_desc'] = 'Standarvaraktighet för registreringens giltighet. 0 = obegränsad.';
$string['defaultperiod_help'] = 'Standarvaraktighet för registreringens giltighet. 0 = obegränsad.';
$string['defaultstart'] = 'Standardvärde för då registreringen startar';
$string['deleteselectedusers'] = 'Ta bort valda användarregistreringar';
$string['editselectedusers'] = 'Redigera valda användarregistreringar';
$string['enrolledincourserole'] = 'Registrerad på "{$a->course}" som "{$a->role}"';
$string['enrolusers'] = 'Registrera användare';
$string['enroluserscohorts'] = 'Registrera valda användare och kohorter';
$string['expiredaction'] = 'Åtgärd vid förfallen registrering';
$string['expiredaction_help'] = 'Välj den åtgärd som ska utföras då registreringen förfaller. Vänligen tänk på att viss användardata och vissa inställningar tas bort från kursen vid avregistreringen.';
$string['expirymessageenrolledbody'] = 'Hej {$a->user},

Din registrering på kursen \'{$a->course}\' kommer att upphöra {$a->timeend}.

Behöver du hjälp, kontakta gärna {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notis om förfallen kursregistrering';
$string['expirymessageenrollerbody'] = 'Registreringen på kursen \'{$a->course}\' upphör inom de kommande {$a->threshold} för följande användare:

{$a->users}

För att förlänga deras registrering, gå till  {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notis om förfallen kursregistrering';
$string['manual:config'] = 'Konfigurera instanser för manuell kursregistrering';
$string['manual:enrol'] = 'Registrera användare';
$string['manual:manage'] = 'Hantera användarregistreringar';
$string['manual:unenrol'] = 'Avregistrera användare från kursen';
$string['manual:unenrolself'] = 'Avregistrera dig själv från kursen';
$string['manualpluginnotinstalled'] = 'Pluginmodulen "Manuell kursregistrering" har inte installerats ännu';
$string['messageprovider:expiry_notification'] = 'Notiser om förfallna manuella kursregistreringar';
$string['now'] = 'Nu';
$string['pluginname'] = 'Manuell kursregistrering';
$string['pluginname_desc'] = 'Pluginmodulen för manuella kursregistreringar tillåter att användare registreras manuellt via en länk i kursinställningarna av en användare med lämpliga behörigheter. Pluginmodulen bör normalt vara aktiverad eftersom vissa andra registreringsplugin-moduler, såsom självregistrering, kräver det.';
$string['privacy:metadata'] = 'Pluginmodulen Manuell kursregistrering lagrar ingen personlig information.';
$string['selectcohorts'] = 'Välj kohorter';
$string['selection'] = 'Urval';
$string['selectusers'] = 'Välj användare';
$string['sendexpirynotificationstask'] = 'Skicka notiser om förfallna manuella kursregistreringar';
$string['status'] = 'Tillåt manuell registrering';
$string['status_desc'] = 'Tillåt kursåtkomst för internt registrerade användare. Detta alternativ bör vara aktiverat i de flesta fall.';
$string['status_help'] = 'Denna inställning bestämmer om användare kan läggas till manuellt, via en länk i kursen, av exempelvis kursansvarig eller andra med sådana rättigheter.';
$string['statusdisabled'] = 'Inaktiverad';
$string['statusenabled'] = 'Aktiverad';
$string['syncenrolmentstask'] = 'Synkronisera manuella kursregistreringar';
$string['unenrol'] = 'Avregistrera användare';
$string['unenrolselectedusers'] = 'Avregistrera valda användare';
$string['unenrolselfconfirm'] = 'Vill du verkligen avregistrera dig själv från kursen "{$a}"?';
$string['unenroluser'] = 'Vill du verkligen avregistrera "{$a->user}" från kursen "{$a->course}"?';
$string['unenrolusers'] = 'Avregistrera användare';
$string['wscannotenrol'] = 'Det gick inte att manuellt registrera en användare i kursen med id = {$a->courseid}';
$string['wsnoinstance'] = 'Instansen för manuella kursregistreringar finns inte eller är inaktiverad i kursen (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Du har inte behörighet att tilldela rollen ({$a->roleid}) till användaren ({$a->userid}) i den här kursen ({$a->courseid}).';
