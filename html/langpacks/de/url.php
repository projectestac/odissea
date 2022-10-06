<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'url', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   url
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Variable auswählen ...';
$string['clicktoopen'] = 'Klicken Sie auf \'{$a}\', um die Ressource zu öffnen';
$string['configdisplayoptions'] = 'Wählen Sie alle Optionen, die möglich sein sollen. Bestehende Einstellungen werden dabei nicht verändert. Zur Mehrfachauswahl drücken Sie die Taste strg.';
$string['configframesize'] = 'Wenn eine Webseite oder eine hochgeladene Datei in einem Frame angezeigt wird, dann ist dieser Wert die Höhe (in Pixeln) des Top-Frames mit der Navigation';
$string['configrolesinparams'] = 'Wenn diese Option aktiviert ist, werden die lokalisierten Rollennamen in die Liste der verfügbaren Parametervariablen übernommen';
$string['configsecretphrase'] = 'Dieser Sicherheitstext wird benutzt, um einen verschlüsselten Code zu generieren und als Parameter an andere Server zu übermitteln. Der verschlüsselte Code wird über einen md5-Wert der aktuellen IP-Adresse in Verbindung mit dem Sicherheitstext erzeugt, d.h. code = md5(IP.secretphrase). Bitte beachten Sie, dass dies nicht zuverlässig ist, weil die IP-Adresse wechseln oder an andere Computer weitergegeben werden kann.';
$string['contentheader'] = 'Inhalt';
$string['createurl'] = 'Link/URL einbinden';
$string['displayoptions'] = 'Mögliche Anzeigeoptionen';
$string['displayselect'] = 'Anzeigen';
$string['displayselectexplain'] = 'Anzeigetyp auswählen, aber leider nicht sind nicht alle Typen für alle URLs geeignet';
$string['displayselect_help'] = 'Die Darstellung des verlinkten Inhalts hängt von verschiedenen Faktoren ab:
* gewählte Einstellung
* Dateityp auf den verlinkt wird
* Browser des Nutzers, der die Seite aufruft

Folgende Einstelloptionen sind möglich:

* Automatisch - Die beste Anzeigeoption für die URL wird automatisch ausgewählt
* Eingebettet - Die URL wird innerhalb der Seite unterhalb der Navigationsleiste angezeigt, zusammen mit der Beschreibung und allen Blöcken
* Öffnen - Die URL wird alleine im Browserfenster angezeigt
* Als Popup - Die URL wird in einem Popup-Fenster ohne Menüs und ohne Adressleiste angezeigt
* Im Frame - Die URL wird in einem Frame unterhalb der Navigationsleiste angezeigt, zusammen mit der URL-Beschreibung
* Neues Fenster - Die URL wird in einem neuen Browserfenster mit Menüs und mit Adressleiste angezeigt';
$string['externalurl'] = 'Externe URL';
$string['framesize'] = 'Frame-Höhe';
$string['indicator:cognitivedepth'] = 'URL kognitiv';
$string['indicator:cognitivedepthdef'] = 'URL kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Die Person hat diesen Prozentsatz des kognitiven Engagements erreicht, das die URL-Ressoucen während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht).';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die eine Person bei einer URL-Ressource erreicht hat.';
$string['indicator:socialbreadth'] = 'URL sozial';
$string['indicator:socialbreadthdef'] = 'URL sozial';
$string['indicator:socialbreadthdef_help'] = 'Die Person hat diesen Prozentsatz des soziale Engagements erreicht, das die URL-Ressourcen während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein).';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die eine Person bei einer URL-Ressource erreicht hat.';
$string['invalidstoredurl'] = 'Das Material kann nicht angezeigt werden, weil die URL ungültig ist';
$string['invalidurl'] = 'Ungültige URL';
$string['modulename'] = 'Link/URL';
$string['modulename_help'] = 'Mit einer URL verlinken Sie auf vorhandene Seiten im Internet. Damit lenken Sie Ihre Teilnehmer/innen direkt zu geeigneten Informationsquellen und Lernmaterialien. Die Verlinkung vermeidet urheberrechtliche Probleme beim Kopieren von Inhalten.

Legen Sie fest, ob die verlinkte Seite in einem neuen Fenster geöffnet oder in die Kursumgebung eingebettet werden soll.

Hinweis: Verlinkungen und URLs können mit dem Texteditor auch in jede andere Seite oder Aktivität integriert werden.';
$string['modulenameplural'] = 'Links/URLs';
$string['page-mod-url-x'] = 'Jede URL-Seite';
$string['parameterinfo'] = '&amp;parameter=variable';
$string['parametersheader'] = 'URL Variablen';
$string['parametersheader_help'] = 'Einige interne Moodle-Variablen können automatisch an die URL angehängt werden. Tragen Sie den Parameternamen ein Textfeld ein und wählen Sie anschließend die entsprechend zu verknüpfende Variable.';
$string['pluginadministration'] = 'URL-Administration';
$string['pluginname'] = 'Link/URL';
$string['popupheight'] = 'Popup-Höhe (Pixel)';
$string['popupheightexplain'] = 'Standardhöhe von Popup-Fenstern festlegen';
$string['popupwidth'] = 'Popup-Breite (Pixel)';
$string['popupwidthexplain'] = 'Standardbreite von Popup-Fenstern festlegen';
$string['printintro'] = 'Beschreibung anzeigen';
$string['printintroexplain'] = 'Beschreibung unterhalb des Inhalts anzeigen? Einige Anzeigetypen können die Beschreibung nicht anzeigen, selbst wenn diese Option aktiviert ist.';
$string['privacy:metadata'] = 'Das Plugin \'Link/URL\' speichert keine personenbezogenen Daten.';
$string['rolesinparams'] = 'Rollennamen als Parameter einbeziehen';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'Server-URL';
$string['url:addinstance'] = 'Neue URL hinzufügen';
$string['url:view'] = 'URL sehen';
