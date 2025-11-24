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
 * Strings for component 'quizaccess_onesession', language 'de', version '4.5'.
 *
 * @package     quizaccess_onesession
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anothersession'] = 'Sie versuchen, von einem anderen Computer, Gerät oder Browser als dem, mit dem Sie den Test begonnen haben, auf den Testversuch zuzugreifen. Wenn Sie Ihren Browser versehentlich geschlossen haben, wenden Sie sich bitte an die Trainer/innen.';
$string['eventattemptblocked'] = 'Ein Testversuch wurde blockiert, weil der Versuch nicht durchgängig mit einem Gerät oder Browser durchgeführt wurde.';
$string['eventattemptunlocked'] = 'Es wurde erlaubt, diesen Versuch mit einem anderen Gerät oder Browser fortzusetzen.';
$string['onesession'] = 'Gleichzeitige Verbindungen blockieren';
$string['onesession:unlockattempt'] = 'Testversuch freischalten';
$string['onesession_help'] = 'Wenn diese Option aktiviert ist, können Teilnehmer/innen einen Testversuch nur in einer einzigen Browsersitzung durchführen. Alle Versuche, denselben Testversuch mit einem anderen Computer, Gerät oder Browser zu öffnen, werden blockiert. Dies kann nützlich sein, um sicherzugehen, dass niemand hilft, indem sie/er denselben Testversuch auf einem anderen Computer öffnet.';
$string['pluginname'] = 'Zugriffsregel: Gleichzeitige Verbindungen blockieren';
$string['privacy:metadata'] = 'Das Plugin speichert den Hash der Zeichenfolge, die zur Identifizierung der Client-Sitzung verwendet wird. Obwohl die ursprüngliche Zeichenfolge die IP-Adresse des Clients und den vom Browser des Clients gesendeten User-Agent-Header enthält, erlaubt der Hash nicht, diese Informationen zu extrahieren. Der Hash wird unmittelbar nach dem Ende der Test-Session automatisch gelöscht.';
$string['studentinfo'] = 'Vorsicht! Es ist nicht erlaubt, das Gerät oder den Browser zu wechseln, während Sie diesen Test versuchen. Bitte beachten Sie, dass nach Beginn des Testversuchs alle Verbindungen zu diesem Test mit anderen Computern, Geräten und Browsern blockiert werden. Schließen Sie das Browserfenster erst nach Beendigung des Versuchs, da Sie diesen Test sonst nicht abschließen können.';
$string['unlockthisattempt'] = 'Einer Person erlauben, diesen Versuch mit einem anderen Gerät fortzusetzen.';
$string['unlockthisattempt_header'] = 'Gleichzeitige Verbindungen blockieren';
$string['whitelist'] = 'Netzwerke ohne IP-Überprüfung';
$string['whitelist_desc'] = 'Diese Option ist dazu gedacht, False Positives zu verringern, wenn Nutzer/innen die Tests über mobile Netzwerke durchführen, bei denen sich die IP-Adressen während des Tests geändern könnten. In den meisten Situationen ist das nicht notwendig. Sie können eine kommagetrennte Liste von Subnetzen angeben (z. B. 88.0.0.0/8, 77.77.0.0/16). Befindet sich die IP-Adresse in solchen Netzen, wird sie nicht geprüft. Um die IP-Adress-Prüfung vollständig zu deaktivieren, können Sie den Wert 0.0.0.0/0 angeben.';
