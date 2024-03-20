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
 * Strings for component 'tool_installaddon', language 'ro', version '4.1'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Confirmare';
$string['acknowledgementtext'] = 'Înțeleg că este responsabilitatea mea să fac backup-uri complete ale acestui site înainte de a instala pluginuri suplimentare. Accept și înțeleg că pluginurile (în special, dar nu numai cele originare din surse neoficiale) pot conține găuri de securitate, pot face site-ul indisponibil sau pot provoca scurgeri sau pierderi de date private.';
$string['featuredisabled'] = 'Instalatorul de pluginuri este dezactivat pe acest site.';
$string['installaddon'] = 'Instalați pluginul!';
$string['installaddons'] = 'Instalați pluginuri';
$string['installfromrepo'] = 'Instalați pluginuri din directorul de plugin-uri Moodle';
$string['installfromrepo_help'] = 'Veți fi redirecționat către directorul de plugin-uri Moodle pentru a căuta și instala un plugin. Rețineți că numele complet al site-ului dvs., adresa URL și versiunea Moodle vor fi trimise, de asemenea, pentru a vă facilita procesul de instalare.';
$string['installfromzip'] = 'Instalați pluginul din fișierul ZIP';
$string['installfromzip_help'] = 'O alternativă la instalarea unui plugin direct din directorul de plugin-uri Moodle este încărcarea unui pachet ZIP al pluginului. Pachetul ZIP ar trebui să aibă aceeași structură ca un pachet descărcat din directorul de plugin-uri Moodle.';
$string['installfromzipfile'] = 'Pachet ZIP';
$string['installfromzipfile_help'] = 'Pachetul ZIP pentru plugin trebuie să conțină un singur director, numit pentru a se potrivi cu numele pluginului. ZIP-ul va fi extras într-o locație adecvată pentru tipul de plugin. Dacă pachetul a fost descărcat din directorul de plugin-uri Moodle, atunci acesta va avea această structură.';
$string['installfromzipinvalid'] = 'Pachetul ZIP pentru plugin trebuie să conțină un singur director, numit pentru a se potrivi cu numele pluginului. Fișierul furnizat nu este un pachet ZIP valid pentru plugin.';
$string['installfromziprootdir'] = 'Redenumiți directorul rădăcină';
$string['installfromziprootdir_help'] = 'Unele pachete ZIP, precum cele generate de Github, pot conține un nume de director rădăcină incorect. Dacă da, numele corect poate fi introdus aici.';
$string['installfromzipsubmit'] = 'Instalați pluginul din fișierul ZIP';
$string['installfromziptype'] = 'Tipul de plugin';
$string['installfromziptype_help'] = 'Pentru pluginurile care își declară corect numele componentei, programul de instalare poate detecta automat tipul de plugin. Dacă detectarea automată eșuează, alegeți tipul corect de plugin manual. Atenție: procedura de instalare poate eșua grav dacă este specificat un tip de plugin incorect.';
$string['installfromziptype_link'] = 'Development:Plugins';
$string['permcheck'] = 'Asigurați-vă că locația rădăcină a tipului de plugin poate fi scrisă prin procesul serverului web.';
$string['permcheckerror'] = 'Eroare la verificarea permisiunii de scriere';
$string['permcheckprogress'] = 'Se verifică permisiunea de scriere ...';
$string['permcheckrepeat'] = 'Verifică din nou';
$string['permcheckresultno'] = 'Locația tipului de plugin <em> {$a->path} </em> nu poate fi scrisă';
$string['permcheckresultyes'] = 'Locația tipului de plugin <em> {$a->path} </em> se poate scrie';
$string['pluginname'] = 'Instalator de pluginuri';
$string['privacy:metadata'] = 'Pluginul de instalare a pluginului nu stochează date personale.';
$string['remoterequestalreadyinstalled'] = 'Există o cerere de instalare a pluginului {$a->name} ({$a->component}) versiunea {$a->version} din directorul de plugin-uri Moodle de pe acest site. Cu toate acestea, acest plugin este <strong> deja instalat </strong> pe site.';
$string['remoterequestconfirm'] = 'Există o solicitare de instalare a pluginului <strong> {$a->name} </strong> ({$a->component}) versiunea {$a- version} din directorul de plugin-uri Moodle de pe acest site. Dacă continuați, pachetul ZIP pentru plugin va fi descărcat pentru validare. Nimic nu va fi instalat încă.';
$string['remoterequestinvalid'] = 'Există o cerere de instalare a unui plugin din directorul de plugin-uri Moodle de pe acest site. Din păcate, solicitarea nu este validă, astfel încât pluginul nu poate fi instalat.';
$string['remoterequestnoninstallable'] = 'Există o cerere de instalare a pluginului {$a->name} ({$a->component}) versiunea {$a->version} din directorul de plugin-uri Moodle de pe acest site. Cu toate acestea, verificarea prealabilă a instalării pluginului nu a reușit (cod motiv: {$a->reason}).';
$string['remoterequestpermcheck'] = 'Există o solicitare de instalare a pluginului {$a->name} ({$a->component}) versiunea {$a->version} din directorul de plugin-uri Moodle de pe acest site. Cu toate acestea, locația <strong> {$a->typepath} </strong> nu poate fi <strong> scrisă </strong>. Trebuie să acordați accesul de scriere utilizatorului serverului web la locație, apoi apăsați butonul Continuare pentru a repeta verificarea.';
$string['remoterequestpluginfoexception'] = 'Hopa ... A apărut o eroare la încercarea de a obține informații despre pluginul {$a->name} ({$a->component}) versiunea {$a->version}. Pluginul nu poate fi instalat. Activați modul de depanare pentru a vedea detalii despre eroare.';
$string['typedetectionfailed'] = 'Nu s-a putut detecta tipul de plugin. Vă rugăm să alegeți tipul de plugin manual.';
$string['typedetectionmismatch'] = 'Tipul de plugin selectat nu se potrivește cu cel declarat de plugin: {$a}';
