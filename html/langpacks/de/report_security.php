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
 * Strings for component 'report_security', language 'de', version '4.4'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_antivirus_details'] = 'Dieser Status überprüft, ob ein kürzlich aufgetretener Fehler erkannt wurde, basierend auf dem in den Antivirus-Einstellungen festgelegten Schwellenwert.';
$string['check_antivirus_error'] = 'Im letzten {$a->lookback} wurden {$a->errors} Fehler erkannt.';
$string['check_antivirus_info'] = 'Aktuell sind keine Antivirus-Scanner aktiviert.';
$string['check_antivirus_logstore_not_supported'] = 'Der Status der Antiviren-Scanner kann aufgrund des ausgewählten Logdaten-Typs nicht überprüft werden';
$string['check_antivirus_name'] = 'Antivirus';
$string['check_antivirus_ok'] = '{$a->scanners} Antivirus-Scanner aktiviert, im letzten {$a->lookback} wurden keine Probleme festgestellt.';
$string['check_configrw_details'] = '<p>Nach der Installation sollten die Zugriffsrechte für die Datei config.php so gesetzt werden, dass der Webserver diese Datei nicht mehr verändern kann. Bitte beachten Sie, dass dieser Schritt die Server-Sicherheit nicht entscheidend verbessert, aber dass generelle Angriffe behindert und in ihrer Wirkung begrenzt werden könnten.</p>';
$string['check_configrw_name'] = ' config.php';
$string['check_configrw_ok'] = 'PHP-Skripte können die config.php nicht verändern';
$string['check_configrw_warning'] = 'PHP-Skripte könnten die Datei config.php verändern';
$string['check_cookiesecure_details'] = '<p> Wenn die Kommunikation über https aktiviert ist, sollte auch das Senden sicherer Cookies aktiviert sein. Sie sollten eine Weiterleitung von http zu https haben und idealerweise auch HSTS-Header bedienen.</p>';
$string['check_cookiesecure_error'] = 'Aktivieren Sie bitte sichere Cookies';
$string['check_cookiesecure_http'] = 'Sie müssen HTTPS aktivieren um sichere Cookies nutzen zu können';
$string['check_cookiesecure_name'] = 'Sichere Cookies';
$string['check_cookiesecure_ok'] = 'Sichere Cookies aktiviert';
$string['check_crawlers_details'] = '<p>Die Einstellung \'Offen für Google\' erlaubt es Google und anderen Suchmaschinen, alle für Gäste ohne Kennwort offenen Kurse zu durchsuchen. Es ist nicht sinnvoll, diese Funktion zu aktivieren, wenn der Gastzugang deaktiviert ist.</p>';
$string['check_crawlers_error'] = 'Der Zugriff für Suchmaschinen ist aktiviert, wobei aber der Gastzugang deaktiviert ist.';
$string['check_crawlers_info'] = 'Suchmaschinen können auf Kursinhalte als Gäste zugreifen.';
$string['check_crawlers_name'] = 'Offen für Google';
$string['check_crawlers_ok'] = 'Gastzugang für Suchmaschinen nicht aktiv.';
$string['check_defaultuserrole_details'] = '<p>Alle angemeldeten Nutzer/innen haben zunächst Rechte aus der Standardrolle für Nutzer/innen. Für diese Rolle sollten keine riskanten Berechtigungen vergeben worden sein.</p>
<p>Die einzige Rolle, für die das zunächst zutrifft, ist die Rolle <em>authentifizierte/r Nutzer/in</em>. Das Recht \'Kurse anzeigen\' muss nicht aktiviert sein.</p><p>Prüfen Sie bitte, ob die Option für die automatische Löschanfrage von Daten (tool_dataprivacy | automaticdatadeletionapproval) aktiviert ist. Nutzer/innen können Löschungen anfordern, die große Mengen von Daten entfernen.  </p>';
$string['check_defaultuserrole_error'] = 'Eine falsche Definition der Standardrolle wurde festgestellt! "{$a}"';
$string['check_defaultuserrole_name'] = 'Standardrolle für alle Nutzer/innen';
$string['check_defaultuserrole_notset'] = 'Die Standardrolle ist nicht gesetzt.';
$string['check_defaultuserrole_ok'] = 'Standardrolle für alle Nutzer/innen sind richtig definiert.';
$string['check_dirindex_info'] = 'Der Verzeichnisindex sollte nicht aktiviert sein';
$string['check_displayerrors_details'] = '<p>Die Aktivierung der PHP-Einstellung <code>display_errors</code> wird auf produktiven Websites nicht empfohlen, weil die Fehlermeldungen u. U. sensible Informationen zu Ihrem Server preisgeben könnten. Setzen Sie also <code>display_errors=off</code>.</p>';
$string['check_displayerrors_error'] = 'Die PHP-Einstellung für die Anzeige von Fehlern ist aktiviert. Es wird empfohlen, dies zu deaktivieren';
$string['check_displayerrors_name'] = 'Anzeige von PHP-Fehlern';
$string['check_displayerrors_ok'] = 'Die Anzeige von PHP-Fehlern ist deaktiviert';
$string['check_dotfiles_info'] = 'Keine Punktdatei außer /.well-known/* sollte öffentlich sein';
$string['check_emailchangeconfirmation_details'] = '<p>Es wird empfohlen, eine E-Mail-Bestätigung einzufordern, wenn Nutzer/innen ihre E-Mail-Adresse im Nutzerprofil ändern. Falls diese Einstellung deaktiviert ist, könnten Spammer versuchen, den Webserver zum Versenden von Spam zu missbrauchen.</p>
<p></p>';
$string['check_emailchangeconfirmation_error'] = 'Es dürfen beliebige E-Mail-Adressen eingetragen werden';
$string['check_emailchangeconfirmation_info'] = 'Es dürfen ausschließlich E-Mail-Adressen von zugelassenen Domains eingetragen werden';
$string['check_emailchangeconfirmation_name'] = 'E-Mail-Adressänderungen';
$string['check_emailchangeconfirmation_ok'] = 'Änderungen von E-Mail-Adressen müssen bestätigt werden';
$string['check_embed_details'] = '<p>Die uneingeschränkte Nutzung von Objekteinbettungen ist äußerst gefährlich, weil registrierte Nutzer/innen den Server über Cross-Website-Scripting (XSS) angreifen könnten. Diese Einstellung sollte auf produktiven Servern deaktiviert sein.</p>';
$string['check_embed_error'] = 'Die uneingeschränkte Nutzung von EMBED/OBJECT ist aktiviert. Diese Einstellung ist für die meisten Webserver sehr gefährlich.';
$string['check_embed_name'] = 'EMBED/OBJECT';
$string['check_embed_ok'] = 'Die uneingeschränkte Nutzung von EMBED/OBJECT ist nicht erlaubt.';
$string['check_frontpagerole_details'] = '<p>Die standardmäßige Rolle für die Startseite erhalten alle angemeldeten Nutzer/innen für Aktivitäten auf der Startseite. Beachten Sie, dass für die Startseite keine bedenklichen Rechte vergeben werden dürfen.</p>
<p>Es wird empfohlen, immer eine Rolle neu anzulegen und keine vorgegebene Rolle zu verändern.</p>';
$string['check_frontpagerole_error'] = 'Die Rolle für die Startseite \'{$a}\' ist falsch definiert!';
$string['check_frontpagerole_name'] = 'Rolle für die Startseite';
$string['check_frontpagerole_notset'] = 'Keine Rolle für die Startseite angelegt';
$string['check_frontpagerole_ok'] = 'Die Rolle für die Startseite ist in Ordnung.';
$string['check_guestrole_details'] = '<p>Die Gastrolle wird für Gäste, nichteingeloggte Nutzer/innen und den temporären Gastzugang zu Kursen verwendet. Achten Sie unbedingt darauf, keine unsicheren Berechtigungen für diese Rolle zuzulassen.<p>
</p>Der unterstützte Legacytyp für die Gastrolle ist <em>Gast</em>.</p>';
$string['check_guestrole_error'] = 'Die Definition der Gastrolle "{$a}" ist fehlerhaft!';
$string['check_guestrole_name'] = 'Gastrolle';
$string['check_guestrole_notset'] = 'Die Gastrolle ist nicht eingestellt..';
$string['check_guestrole_ok'] = 'Die Definition der Gastrolle ist in Ordnung.';
$string['check_nodemodules_details'] = '<p>Das Verzeichnis <em>{$a->path}</em> enthält Node.js-Module und deren Abhängigkeiten, die normalerweise vom NPM-Dienstprogramm installiert werden. Diese Module werden möglicherweise für die lokale Moodle-Entwicklung benötigt, zum Beispiel für die Verwendung des Grunt-Frameworks. Sie werden nicht benötigt, um eine Moodle-Seite in der Produktion auszuführen, und sie können potenziell gefährliche Codes enthalten, die Ihre Website externen Angriffen aussetzen. Es wird dringend empfohlen, das Verzeichnis zu entfernen, wenn die Seite über eine öffentliche URL verfügbar ist, oder zumindest den Webzugriff darauf in Ihrer Webserver-Konfiguration zu verbieten.</p>';
$string['check_nodemodules_info'] = 'Das Verzeichnis node_modules sollte nicht auf öffentlichen Websites vorhanden sein.';
$string['check_nodemodules_name'] = 'Node.js-Modulverzeichnis';
$string['check_openprofiles_details'] = 'Öffentlich sichtbare Nutzerprofile können von Spammern missbraucht werden. Aktivieren Sie am besten die Einstellung \'Anmeldung notwendig\'  bzw. \'Anmeldung notwendig, um Profile zu sehen\'.';
$string['check_openprofiles_error'] = 'Jeder kann zurzeit Nutzerprofile sehen, ohne sich zuvor einzuloggen.';
$string['check_openprofiles_name'] = 'Offene Nutzerprofile';
$string['check_openprofiles_ok'] = 'Ein Login ist erforderlich, um Nutzerprofile sehen zu können.';
$string['check_passwordpolicy_details'] = '<p>Kennwortregeln sollten unbedingt festgelegt werden. Oft ist es ziemlich einfach, Kennwörter zu erraten und unberechtigten Zugang zu Systemen zu bekommen. Die Regeln sollten aber nicht zu kompliziert sein. Besonders strenge Regeln führen nämlich häufig dazu, dass Nutzer/innen sich die Kennwörter nicht merken können und diese daher vergessen oder sie aufschreiben.</p>';
$string['check_passwordpolicy_error'] = 'Die Kennwortregeln sind nicht eingerichtet.';
$string['check_passwordpolicy_name'] = 'Kennwortregeln';
$string['check_passwordpolicy_ok'] = 'Die Kennwortregeln sind aktiviert.';
$string['check_preventexecpath_details'] = '<p>Zulassen, dass ausführbare Pfade über die Admin-GUI festgelegt werden können, ist umfassende Rechteausweitung. Dies muss ausdrücklich in der config.php freigegeben werden:</p><p><code>$CFG->preventexecpath = true;</code></p>';
$string['check_preventexecpath_name'] = 'Pfade zu ausführbaren Programmen';
$string['check_preventexecpath_ok'] = 'Pfade zu ausführbaren Programmen einstellbar über config.php';
$string['check_preventexecpath_warning'] = 'Pfade zu ausführbaren Programmen einstellbar über Admin GUI';
$string['check_publicpaths_403'] = '(Rückgabe 403 - dies sollte besser 404 sein)';
$string['check_publicpaths_generic'] = '{$a} Dateien sollten nicht öffentlich sein';
$string['check_publicpaths_name'] = 'Alle öffentlichen / privaten Pfade prüfen';
$string['check_publicpaths_ok'] = 'Alle internen Pfade sind nicht öffentlich zugänglich.';
$string['check_publicpaths_warning'] = 'Manche internen Pfade sind öffentlich zugänglich.';
$string['check_riskadmin_detailsok'] = '<p>Bitte prüfen Sie die folgende Liste von Serveradministrator/innen:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Prüfen Sie bitte die folgende Liste von Serveradministrator/innen:</p>{$a->admins}
<p>Es wird empfohlen, die Rolle "Administrator/innen" nur auf Systemebene zu vergeben. Die folgenden Nutzer verfügen über nicht unterstützte Zuweisungen zur Rolle "Administrator/innen":</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Administrator/innen';
$string['check_riskadmin_ok'] = '{$a} Serveradministrator/innen gefunden';
$string['check_riskadmin_unassign'] = 'Rollenzuweisung überprüfen bei <a href="{$a->url}">{$a->fullname} ({$a->email})</a>';
$string['check_riskadmin_warning'] = '{$a->admincount} Serveradministrator/innen und {$a->unsupcount} nicht unterstützte Zuweisung(en) zur Administrationsrolle gefunden.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Diese aktivierten Änderungen geben Nutzern/innen die Möglichkeit, auch Nutzerdaten in eine Kurssicherung einzubeziehen. Prüfen Sie bitte, ob diese Berechtigung nötig ist.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Die folgenden Systemrollen erlauben es aktuell, Nutzerdaten in eine Kurssicherung einzubeziehen. Prüfen Sie bitte, ob diese Berechtigung nötig ist.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>Mit den obigen Rollen oder lokalen Rollenänderungen haben folgende Nutzerkonten die Berechtigung, personenbezogene Daten von allen in ihren Kursen eingetragenen Nutzern/innen in Kurssicherungen einzubeziehen. Stellen Sie unbedingt sicher, dass diese Konten (a) vertrauenswürdig und (b) mit sicheren Kennwörtern gesichert sind:</p> {$a}';
$string['check_riskbackup_detailsok'] = 'Keine Rolle erlaubt das Sichern von Nutzerdaten. Beachten Sie aber, dass Admins mit der Berechtigung "doanything" (alles tun) auch weiterhin dazu befähigt sind.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} in {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Sicherung von Nutzerdaten';
$string['check_riskbackup_ok'] = 'Keine Rolle erlaubt das Sichern von Nutzerdaten';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->contextname})</a>';
$string['check_riskbackup_warning'] = '{$a->rolecount} Rolle(n), {$a->overridecount} Rollenänderung(en) und {$a->usercount} Nutzer mit der Möglichkeit zur Sicherung von Nutzerdaten gefunden.';
$string['check_riskxss_details'] = '<p>RISK_XSS bezeichnet alle bedenklichen Berechtigungen, die ausschließlich nur absolut vertrauenswürdige Nutzer/innen ausführen dürfen.</p>
<p>Prüfen Sie bitte die folgende Nutzerliste und stellen Sie sicher, dass Sie ihnen voll trauen können:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS-vertrauenswürdige Nutzer/innen';
$string['check_riskxss_warning'] = 'RISK_XSS - {$a} Nutzer/innen gefunden, denen bezüglich Cross-Website-Scripting (XSS) vertraut werden muss!';
$string['check_unsecuredataroot_details'] = '<p>Das Verzeichnis \'dataroot\' sollte nicht aus dem Internet aufrufbar sein. Am besten legen Sie es außerhalb des öffentlich zugänglichen Verzeichnisses an, beim Webserver Apache also üblicherweise außerhalb von \'htdocs\'.</p>
<p>Wenn Sie das Verzeichnis \'dataroot\' verschieben, müssen Sie auch unbedingt den Eintrag <code>$CFG->dataroot</code> in der Datei  <code>config.php</code> entsprechend anpassen.</p>';
$string['check_unsecuredataroot_error'] = 'Ihr Verzeichnis \'dataroot\'  liegt an der falschen Stelle <code>{$a}</code> und ist aus dem Web aufrufbar!';
$string['check_unsecuredataroot_name'] = 'dataroot';
$string['check_unsecuredataroot_ok'] = 'Das Verzeichnis \'dataroot\' ist nicht aus dem Web erreichbar.';
$string['check_unsecuredataroot_warning'] = 'Ihr moodledata-Verzeichnis <code>{$a}</code> liegt an der falschen Stelle. Es sollte nicht aus dem Web aufrufbar sein.';
$string['check_vendordir_details'] = '<p>Das Verzeichnis <em>{$a->path}</em> enthält verschiedene Bibliotheken von Drittanbietern und deren Abhängigkeiten, die normalerweise vom PHP Composer installiert werden. Diese Bibliotheken werden möglicherweise für die lokale Moodle-Entwicklung benötigt, zum Beispiel für die Installation des PHPUnit-Frameworks. Sie werden nicht benötigt, um eine Moodle-Seite in der Produktion auszuführen und sie können potenziell gefährliche Codes enthalten, die Ihre Website externen Angriffen aussetzen. Es wird dringend empfohlen, das Verzeichnis zu entfernen, wenn die Seite über eine öffentliche URL verfügbar ist, oder zumindest den Webzugriff darauf in Ihrer Webserver-Konfiguration zu verbieten.</p>';
$string['check_vendordir_info'] = 'Das externe Verzeichnis darf nicht auf öffentlichen Seiten vertreten sein.';
$string['check_vendordir_name'] = 'Externes Verzeichnis';
$string['check_webcron_details'] = '<p>Die Ausführung von Cron im Webbrowser könnte vertrauliche Informationen anzeigen. Die Ausführung von Cron im Webbrowser könnte vertrauliche Informationen anzeigen. Sie sollten deswegen Cron ausschließlich über die Befehlszeile erlauben oder im Webbrowser zusätzlich ein Cron-Kennwort zu verlangen.</p>';
$string['check_webcron_name'] = 'Web cron';
$string['check_webcron_ok'] = 'Nur autorisierte Personen dürfen auf cron zugreifen.';
$string['check_webcron_warning'] = 'Beliebige Personen können auf cron zugreifen.';
$string['configuration'] = 'Konfiguration';
$string['description'] = 'Beschreibung';
$string['details'] = 'Details';
$string['eventreportviewed'] = 'Sicherheitsbericht angezeigt';
$string['issue'] = 'Ausgabe';
$string['pluginname'] = 'Sicherheitsprüfung';
$string['privacy:metadata'] = 'Das Sicherheits-Übersichts-Plugin speichert keine personenbezogenen Daten.';
$string['security:view'] = 'Sicherheitsbericht anzeigen';
$string['timewarning'] = 'Haben Sie bitte Geduld, denn die Bearbeitung kann etwas länger dauern ...';
