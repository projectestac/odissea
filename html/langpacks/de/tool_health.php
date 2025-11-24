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
 * Strings for component 'tool_health', language 'de', version '4.5'.
 *
 * @package     tool_health
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['category_loop_parents'] = 'Die folgenden Kategorien bilden eine Schleife der Elternebene:';
$string['category_missing_parents'] = 'In den folgenden Kategorien fehlen die Eltern:';
$string['healthnoproblemsfound'] = 'Keine Probleme gefunden!';
$string['healthproblemsdetected'] = 'Probleme bei der Serverumgebung entdeckt!';
$string['healthproblemsolution'] = 'Problemlösung für Serverumgebung';
$string['healthreturntomain'] = 'Weiter';
$string['healthsolution'] = 'Lösung';
$string['pluginname'] = 'Analyse der Serverumgebung';
$string['privacy:metadata'] = 'Das Plugin \'Tool Health Center\' speichert keine personenbezogenen Daten.';
$string['problem_000002_description'] = 'Ihre Moodle-Konfigurationsdatei config.php oder eine andere Bibliotheksdatei, enthält einige Zeichen nach dem abschließenden PHP-Tag (?>). Dies führt dazu, dass Moodle verschiedene Probleme aufweist (z. B. defekte heruntergeladene Dateien) und muss behoben werden.';
$string['problem_000002_solution'] = 'Sie müssen {$a}/config.php bearbeiten und alle Zeichen (einschließlich Leerzeichen und Zeilenumbrüche) nach dem abschließenden ?> Tag entfernen. Diese beiden Zeichen sollten die allerletzten in dieser Datei sein. Die zusätzlichen Leerzeichen am Ende können auch in anderen PHP-Dateien enthalten sein, die von lib/setup.php eingebunden werden.';
$string['problem_000002_title'] = 'Zusätzliche Zeichen am Ende von config.php oder anderen Bibliotheksfunktionen';
$string['problem_000003_description'] = 'In Ihrer config.php steht, dass Ihr "Daten-Verzeichnis" {$a} ist. Dieses Verzeichnis existiert jedoch entweder nicht oder kann von Moodle nicht beschrieben werden. Das bedeutet, dass eine Reihe von Problemen auftritt, wie z.B. dass sich Benutzer nicht anmelden und keine Dateien hochladen können. Sie müssen dieses Problem unbedingt beheben, damit Moodle korrekt funktioniert.';
$string['problem_000003_solution'] = 'Stellen Sie zunächst sicher, dass das Verzeichnis {$a} existiert. Wenn das Verzeichnis existiert, dann müssen Sie sicherstellen, dass Moodle in dieses Verzeichnis schreiben kann. Wenden Sie sich an Ihren Webserver-Administrator und bitten Sie ihn, dem Benutzer, unter dem der Webserver-Prozess läuft, Schreibrechte für dieses Verzeichnis zu erteilen.';
$string['problem_000003_title'] = '$CFG->dataroot existiert nicht oder hat keine Schreibrechte';
$string['problem_000004_description'] = 'Das cron.php-Wartungsskript wurde nicht im erwarteten Intervall ausgeführt, das Intervall kann über $CFG->expectedcronfrequency definiert werden. Dies bedeutet wahrscheinlich, dass Ihr Server nicht so konfiguriert ist, dass dieses Skript automatisch in regelmäßigen Abständen ausgeführt wird. Wenn dies der Fall ist, wird Moodle größtenteils so funktionieren, wie es sollte, aber einige Vorgänge (insbesondere das Versenden von E-Mails an Benutzer) werden überhaupt nicht ausgeführt.';
$string['problem_000004_link_cron'] = 'Cron - MoodleDocs';
$string['problem_000004_solution'] = 'Detaillierte Anweisungen zur Aktivierung von Cron finden Sie unter den folgenden Links.';
$string['problem_000004_title'] = 'cron.php ist nicht für die automatische Ausführung eingerichtet';
$string['problem_000005_description'] = 'Ihre PHP-Konfiguration enthält eine aktivierte Einstellung, session.auto_start, die deaktiviert werden muss, damit Moodle korrekt funktioniert. Zu den auffälligen Anzeichen für diese Fehlkonfiguration gehören schwerwiegende Fehler und/oder leere Seiten, wenn Sie versuchen, sich einzuloggen.';
$string['problem_000005_solution'] = 'Es gibt zwei Möglichkeiten, wie Sie dieses Problem lösen können:';
$string['problem_000005_solution_step_one'] = 'Wenn Sie Zugang zu Ihrer Hauptdatei php.ini haben, suchen Sie die Zeile, die wie folgt aussieht: "session.auto_start = 1" und ändern Sie sie in "session.auto_start = 0" und starten Sie dann Ihren Webserver neu. Seien Sie gewarnt, dass diese Änderung, wie jede andere PHP-Einstellung, andere auf dem Server laufende Webanwendungen beeinträchtigen kann.';
$string['problem_000005_solution_step_two'] = 'Möglicherweise können Sie diese Einstellung für Ihre Website ändern, indem Sie die Datei {$a}/.htaccess erstellen oder bearbeiten, so dass sie diese Zeile enthält: "php_value session.auto_start 0"';
$string['problem_000005_title'] = 'PHP: session.auto_start ist aktiviert';
$string['problem_000007_description'] = 'Ihre PHP-Konfiguration enthält eine deaktivierte Einstellung, file_uploads, die aktiviert werden muss, damit Moodle seine volle Funktionalität bieten kann. Solange diese Einstellung nicht aktiviert ist, ist es nicht möglich, Dateien in Moodle hochzuladen. Dazu gehören z.B. Kursinhalte und Benutzerbilder.';
$string['problem_000007_solution'] = 'Es gibt zwei Möglichkeiten, wie Sie dieses Problem lösen können:';
$string['problem_000007_solution_step_one'] = 'Wenn Sie Zugang zu Ihrer Hauptdatei php.ini haben, suchen Sie die Zeile, die wie folgt aussieht: "file_uploads = Off" und ändern Sie sie in "file_uploads = On" und starten Sie dann Ihren Webserver neu. Seien Sie gewarnt, dass diese Änderung, wie jede andere PHP-Einstellung, andere auf dem Server laufende Webanwendungen beeinträchtigen kann.';
$string['problem_000007_solution_step_two'] = 'Sie können diese Einstellung auch für Ihre Website ändern, indem Sie die Datei {$a}/.htaccess erstellen oder bearbeiten und diese Zeile einfügen: "php_value file_uploads On"';
$string['problem_000007_title'] = 'PHP: file_uploads ist deaktiviert';
$string['problem_000008_description'] = 'Die Einstellungen für PHP auf Ihrem Server lassen es nicht zu, dass ein Skript während seiner Ausführung mehr Speicher anfordert. Das bedeutet, dass es für jedes Skript eine feste Grenze von {$a} gibt. Es ist möglich, dass bestimmte Vorgänge in Moodle mehr als diese Menge benötigen, um erfolgreich abgeschlossen zu werden, insbesondere wenn viele Daten verarbeitet werden müssen.';
$string['problem_000008_solution'] = 'Es wird empfohlen, dass Sie sich an Ihren Webserver-Administrator wenden, um dieses Problem zu beheben.';
$string['problem_000008_title'] = 'PHP: memory_limit kann nicht von Moodle kontrolliert werden';
$string['problem_000009_description'] = 'Das Benutzerkonto, mit dem Sie sich mit dem Datenbankserver verbinden, ist ohne Passwort eingerichtet. Dies ist ein sehr großes Sicherheitsrisiko und wird nur etwas gemildert, wenn Ihre Datenbank so konfiguriert ist, dass sie keine Verbindungen von anderen Hosts als dem Server, auf dem Moodle läuft, akzeptiert. Wenn Sie kein sicheres Passwort für die Verbindung zur Datenbank verwenden, riskieren Sie den unbefugten Zugriff auf Ihre Daten und deren Manipulation.';
$string['problem_000009_description_root'] = 'Dies ist besonders alarmierend, da ein solcher Zugriff auf die Datenbank als Superuser (root) erfolgen würde!';
$string['problem_000009_solution'] = 'Sie sollten das Passwort des Benutzers {$a} sowohl in Ihrer Datenbank als auch in Ihrer Moodle config.php sofort ändern!';
$string['problem_000009_solution_root'] = 'Es empfiehlt sich auch, das Benutzerkonto von root in ein anderes zu ändern, da dies die Auswirkungen im Falle einer Kompromittierung Ihrer Datenbank ohnehin verringern würde.';
$string['problem_000009_title'] = 'SQL: Konto ohne Passwort verwendet';
$string['problem_000012_description'] = 'Bei Zufallsfragen sollte question.parent gleich question.id sein. Es gibt einige Fragen in Ihrer Datenbank, bei denen dies nicht der Fall ist. Dies könnte beispielsweise bei Zufallsfragen der Fall sein, die vor der Behebung von MDL-5482 aus einem Backup wiederhergestellt wurden.';
$string['problem_000012_solution'] = 'Aktualisieren Sie auf Moodle 1.9.1 oder höher oder führen Sie das SQL manuell aus';
$string['problem_000012_title'] = 'Zufallsfragen Datenkonsistenz';
$string['problem_000014_description'] = 'Sie haben Fragen in Ihrer Datenbank, die hiergegen verstoßen. Sie müssen untersuchen, wie das passiert ist.';
$string['problem_000014_link_cron'] = 'Quiz-Forum';
$string['problem_000014_solution'] = 'Es ist unmöglich, eine Lösung zu finden, ohne mehr darüber zu wissen, wie das Problem verursacht wurde. Vielleicht können Sie im Quiz-Forum Hilfe erhalten.';
$string['problem_000014_title'] = 'Nur Fragen mit mehreren Antworten und Zufallsfragen sollten einer anderen Frage übergeordnet sein.';
$string['problem_000016_description'] = 'Wenn eine Fragekategorie die Elternkategorie einer anderen ist, dann sollten beide zum selben Kontext gehören. Dies gilt nicht für die folgenden Kategorien:';
$string['problem_000016_description_child'] = 'Kategorie Kind';
$string['problem_000016_description_context'] = 'Kontext-ID';
$string['problem_000016_description_id'] = 'ID';
$string['problem_000016_description_name'] = 'Name';
$string['problem_000016_description_parent'] = 'Eltern Kategorie';
$string['problem_000016_link_cron'] = 'Quiz-Forum';
$string['problem_000016_solution'] = 'Eine automatische Lösung ist schwierig. Es hängt davon ab, ob sich die übergeordnete oder die untergeordnete Kategorie am falschen Ort befindet. Vielleicht können die Leute im Quiz-Forum helfen.';
$string['problem_000016_title'] = 'Fragekategorien sollten zum selben Kontext gehören wie ihre Eltern Kategorie';
$string['problem_000017_description'] = 'Die Fragekategorien sollten nach dem Feld question_categories.parent in einer Baumstruktur angeordnet werden. Manchmal gerät diese Baumstruktur durcheinander.';
$string['problem_000017_solution'] = 'Führen Sie die folgenden SQL-Abfragen aus. Diese beheben das Problem, indem sie einige Kategorien auf die oberste Ebene verschieben.';
$string['problem_000017_title'] = 'Baumstruktur der Fragenkategorien';
$string['problem_000018_description'] = 'Die Kurskategorien sollten nach dem Feld course_categories.parent in einer Baumstruktur angeordnet werden. Manchmal gerät diese Baumstruktur durcheinander.';
$string['problem_000018_solution'] = 'Führen Sie die folgenden SQL-Abfragen aus. Diese beheben das Problem, indem sie einige Kategorien auf die oberste Ebene verschieben.';
$string['problem_000018_title'] = 'Baumstruktur der Kurskategorien';
