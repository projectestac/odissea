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
 * Strings for component 'block_panopto', language 'de', version '4.5'.
 *
 * @package     block_panopto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_a_panopto_server'] = 'Nicht vorhanden - Um fortzufahren fügen Sie bitte einen Panopto Server und Anwendungsschlüssel hinzu';
$string['add_to_panopto'] = 'Synchronisieren Sie diesen Kurs mit Panopto';
$string['api_manager_unavailable'] = 'Der {$a} API Managment Client konnte nicht erzeugt werden! (Ist der Panopto Server erreichbar, falls ja sind der Instanzname und Anwendungsschlüssel korrekt?)';
$string['application_key'] = 'Anwendungsschlüssel';
$string['async_wait_warning'] = 'Async-Aufgaben verursachen eine Verzögerung vor der Synchronisierung der Nutzer/innen. Diese beträgt normalerweise 5-15 Minuten, kann sich aber von Moodle zu Moodle konfiguration unterscheiden.';
$string['attempt_provision_course'] = 'Versuch, einen Panopto-Ordner mit der externen ID {$a} anzulegen';
$string['attempt_sync_user'] = 'Versuch, Nutzer/in mit einer ID von {$a} mit Panopto zu synchronisieren';
$string['attempt_sync_user_server'] = 'Der Zielserver der versuchten Synchronisierung ist {$a}.';
$string['attempt_unprovision_course'] = 'Versuch, die Provisionierung eines Panopto-Ordners mit einer externen ID von {$a} aufzuheben.';
$string['attempted_import_course_id'] = 'Moodle ID des Quell-Importkurses';
$string['attempted_moodle_course_id'] = 'Versuchte Moodle Kurs ID';
$string['attempted_panopto_server'] = 'Versuchter Panopto Dienst';
$string['attempted_provisioning_personal_folder'] = 'Versuch, einen persönlichen Ordner bereitzustellen, wird derzeit nicht von Panopto unterstützt. Bitte ordnen Sie den Kurs über die Blockinstanz-Konfiguration einem anderen Ordner zu und versuchen Sie die Provisionierung erneut.';
$string['attempted_target_course_id'] = 'Moodle ID des Zielkurses';
$string['attribute_ensure_branch_failed'] = 'Fehler in der Verzweigung sicherstellen';
$string['attribute_ensured_branch'] = 'Sichergestellte Zweig-Hierarchie';
$string['attribute_new_name'] = 'Neuer Ordnername';
$string['attribute_original_name'] = 'Ursprünglicher Ordnername';
$string['attribute_target_branch_leaf'] = 'Bereichsname des Zielzweig Blattknotens';
$string['attribute_target_panopto_server'] = 'Panopto-Zielserver';
$string['autoprovision_new_courses'] = 'Neue Kurse automatisch provisionieren';
$string['autoprovision_off'] = 'Neue Kurse nicht provisionieren';
$string['autoprovision_on_block_view'] = 'Automatisch provisionieren, wenn der Panopto-Block das erste Mal aufgerufen wird';
$string['back_to_config'] = 'Zurück zur Konfiguration';
$string['back_to_course'] = 'Zurück zum Kurs';
$string['begin_building_category_structure'] = 'Mit dem Bau einer Bereichsstruktur beginnen';
$string['begin_reinitializing_imports'] = 'Mit der Reinitialisierung von Importen beginnen';
$string['block_edit_error'] = 'Blockinstanz kann nicht konfiguriert werden, da Globale Konfiguration unvollständig ist. Bitte wenden Sie sich an Ihren Systemadministrator.';
$string['block_edit_error_inherited_permissions'] = 'Dieser Ordner erbt seine Freigabeberechtigungen von einem übergeordneten Ordner und kann daher nicht an einen Kurs gebunden werden. Bitte passen Sie die Freigabeeinstellungen an, um die geerbten Einstellungen zu entfernen.';
$string['block_edit_header'] = 'Wählen Sie den Panopto-Kursordner aus, der in diesem Block angezeigt werden soll.';
$string['block_edit_header_help'] = 'Wählen Sie einen vorhandenen Panopto Kursordner aus oder stellen Sie einen neuen Panopto Kursordner für diesen Block bereit.';
$string['block_global_add_courses'] = 'Moodle-Kurse zu Panopto hinzufügen';
$string['block_global_application_key'] = 'Anwendungsschlüssel';
$string['block_global_application_key_desc'] = 'Geben Sie den Anwendungsschlüssel von der Seite der Panopto Identitätsanbieter ein.';
$string['block_global_build_category_structure'] = 'Alle Moodle-Kursbereiche mit Panopto synchronisieren';
$string['block_global_hostname'] = 'Hostname des Panopto Servers';
$string['block_global_hostname_desc'] = 'Geben Sie den FQDN Ihres Panopto-Servers ein. Zum Beispiel: demo.example.panopto.com';
$string['block_global_instance_desc'] = 'Geben Sie den Instanznamen von der Seite des Panopto Idendity Providers ein.';
$string['block_global_instance_name'] = 'Name der Moodle Instanz';
$string['block_global_panopto_bulk_and_batch_tools'] = 'Tools für Massen- und Batchoperationen';
$string['block_global_panopto_folder_and_category_options'] = 'Optionen für Ordner und Kursbereiche';
$string['block_global_panopto_http_and_debug_settings'] = 'Http und Debugging-Optionen';
$string['block_global_panopto_role_options'] = 'Panopto Rollenoptionen';
$string['block_global_panopto_server_config'] = 'Panopto Serverkonfiguration';
$string['block_global_panopto_syncing_options'] = 'Panopto Synchronisationsoptionen';
$string['block_global_reinitialize_all_imports'] = 'Alle Panopto-Ordnerimporte neu initialisieren';
$string['block_global_rename_all_folders'] = 'Alle Ordnernamen aktualisieren';
$string['block_global_unprovision_courses'] = 'Die Bereitstellung der Panopto-Ordner in Moodlekursen aufheben';
$string['block_global_upgrade_all_folders'] = 'Alle vorhandenen Ordner und Importe aktualisieren';
$string['block_panopto_any_creator_can_view_folder_settings'] = 'Allen Nutzer/innen mit Erstellerzugang einen Link zu den Panopto-Ordnereinstellungen im Block anzeigen';
$string['block_panopto_any_creator_can_view_folder_settings_desc'] = 'Wenn aktiviert, können Benutzer/innen mit einer Erstellerrolle in dem Ordner den Link zu den Einstellungen sehen. Standardmäßig können nur Trainer den Link zu den Kurseinstellungen sehen.';
$string['block_panopto_anyone_view_recorder_links'] = 'Allen Rollen gestatten, die Recorder-Download-Links zu sehen';
$string['block_panopto_anyone_view_recorder_links_desc'] = 'Wenn aktiviert, können Betrachter/innen die Download-Links des Rekorders anzeigen.
Standardmäßig können nur Benutzer/innen mit Ersteller- und/oder Provisionierungszugriff auf einen Ordner die Download-Links sehen.';
$string['block_panopto_async_tasks'] = 'Aktivierung von asynchronen Synchronisierungsaufgaben (nicht empfohlen)';
$string['block_panopto_async_tasks_desc'] = 'Wenn aktiviert, werden die Aufgaben Anmeldung, Einschreibung, Abmeldung, Anwendung der Bereiche und Löschen von Nutzer/innen asynchron ausgeführt. Wenn diese Option deaktiviert ist, erfolgen diese Vorgänge im Event-Handler synchron. Da es schwierig ist, einen Fehler rechtzeitig zu erkennen, empfehlen wir diese Option nicht.';
$string['block_panopto_auto_add_block_to_new_courses'] = 'Automatisches Hinzufügen eines Panopto-Blocks zu neuen Kursen';
$string['block_panopto_auto_add_block_to_new_courses_desc'] = 'Wenn aktiviert, wird automatisch ein Panopto-Block in alle neuen Moodlekursen eingefügt.';
$string['block_panopto_auto_insert_lti_link_to_new_courses'] = 'Automatisch einen LTI-Kursordner für neue Kurse erstellen';
$string['block_panopto_auto_insert_lti_link_to_new_courses_desc'] = 'Wenn aktiviert, wird im ersten verfügbaren Abschnitt Ihrer Moodle-Kursseite automatisch ein Link zum Panopto-LTI-Kursordner eingefügt.';
$string['block_panopto_auto_provision'] = 'Neu erstellte Kurse automatisch provisionieren';
$string['block_panopto_auto_provision_desc'] = 'Aktivieren Sie diese Option, um einen Panopto Kursordner automatisch bereitzustellen, wenn ein Kurs erstellt wird.';
$string['block_panopto_auto_sync_imports'] = 'Beim Importieren eines Kurses wird automatisch eine Betrachter-Berechtigung erteilt.';
$string['block_panopto_auto_sync_imports_desc'] = 'Wenn aktiviert, erteilt Panopto beim Importieren eines Kurses automatisch eine Betrachterberechtigung.';
$string['block_panopto_automatic_operation_target_server'] = 'Automatischer Betrieb des Zielservers';
$string['block_panopto_automatic_operation_target_server_desc'] = 'Dies ist der Panopto-Server, der für die Aufgaben \'Neue Kurse automatisch provisionieren\', \'Nutzer/innen bei der Anmeldung synchronisieren\' und \'Kursbereich-Struktur durchsetzen\' vorgesehen ist.';
$string['block_panopto_check_server_interval'] = 'Intervall für die Überprüfung des Serverzustands';
$string['block_panopto_check_server_interval_desc'] = 'Wie oft der Server Health Check versuchen soll, eine Verbindung zum Panopto-Server herzustellen. Das Ergebnis wird gespeichert und bis zum nächsten Check zwischengespeichert.';
$string['block_panopto_check_server_status'] = 'Überprüfung des Serverzustandes vor dem Laden.';
$string['block_panopto_check_server_status_desc'] = 'Es wird überprüft, ob der Ziel-Panopto-Server verfügbar ist, um möglich lange Timeout-Aufrufe zu vermeiden, wenn der Server nicht erreichbar ist. Dies ist standardmäßig auf "false" gesetzt, da Plattform-/Betriebssystemabhängige Funktionen verwendet werden. Die Einstellungen sollten nur dann auf "Wahr" gesetzt werden, wenn der Panopto-Support dies empfiehlt.';
$string['block_panopto_copy_provision'] = 'Provisionierung durch Kurskopie';
$string['block_panopto_copy_provision_desc'] = 'Mit dieser Option können Sie festlegen, welcher Kurs oder welche Kurse beim Kopieren oder Importieren bereitgestellt werden sollen.';
$string['block_panopto_creator_mapping'] = 'Zuordnung der Erstellerrolle.';
$string['block_panopto_creator_mapping_desc'] = 'Wählen Sie aus, welche Kursrollen als Erstellerrollen in neuen Panopto-Kursordnern festgelegt werden sollen.';
$string['block_panopto_enforce_category_after_course_provision'] = 'Erstellen von Kursbereichsordnern bei der (Wieder-)Bereitstellung von Kursen';
$string['block_panopto_enforce_category_after_course_provision_desc'] = 'Wenn diese Option aktiviert ist, wird durch die (erneute) Bereitstellung nicht nur der Kursordner erstellt, sondern auch Ordner für die Kursbereiche, in denen sich der Kurs befindet.';
$string['block_panopto_enforce_category_structure'] = 'Neue und verschobene Kursbereiche mit Panopto synchronisieren';
$string['block_panopto_enforce_category_structure_desc'] = 'Wenn diese Option ausgewählt ist, wird die Struktur eines Kursbereichs bei jeder Erstellung oder Verschiebung auf der Panopto-Website gespiegelt.';
$string['block_panopto_enforce_https_on_wsdl'] = 'HTTPS bei Panopto-API-Aufrufen fordern.';
$string['block_panopto_enforce_https_on_wsdl_desc'] = 'HTTPS-Endpunkte werden für Panopto-API-Aufrufe durchgesetzt (für jeden empfohlen).';
$string['block_panopto_folder_name_style'] = 'Panopto-Ordnernamen-Stil';
$string['block_panopto_folder_name_style_desc'] = 'Verwenden Sie diese Option, um den visuellen Namensstil zu wählen, den Sie für Ihren neuen Panopto-Ordner haben möchten.';
$string['block_panopto_non_editing_teacher_provision'] = 'Erlauben Sie Trainer/innen (ohne Schreibrecht) die Bereitstellung.';
$string['block_panopto_non_editing_teacher_provision_desc'] = 'Aktivieren Sie diese Option, um Trainer/innen (ohne Schreibrecht) die Bereitstellung von Panopto-Kursordnern zu ermöglichen.';
$string['block_panopto_panopto_connection_timeout'] = 'Panopto Verbindungs-Timeout';
$string['block_panopto_panopto_connection_timeout_desc'] = 'Dies ist die Timeout-Länge für die Verbindung zu Panopto in Sekunden. Dieser Wert sollte nur auf Anraten des Panopto-Supports geändert werden.';
$string['block_panopto_panopto_socket_timeout'] = 'Panopto Socket Zeitüberschreitung';
$string['block_panopto_panopto_socket_timeout_desc'] = 'Die Zeitspanne in Sekunden, die das Plugin nach der Verbindung auf Panopto wartet, um eine Aufgabe abzuschließen. Dieser Wert sollte nur auf Anraten des Panopto-Supports geändert werden.';
$string['block_panopto_print_log_to_file'] = 'Fehlerprotokolle in eine Textdatei umleiten.';
$string['block_panopto_print_log_to_file_desc'] = 'Diese Option leitet jedes Panopto-Logging aus dem PHP error_log in eine PanoptoLogs.txt-Datei innerhalb des Moodle Basisverzeichnisses um. Sie sollte nur dann auf "Wahr" gesetzt werden, wenn die Panopto-Unterstützung dies empfiehlt.';
$string['block_panopto_print_verbose_logs'] = 'Ausführliche Protokolle drucken';
$string['block_panopto_print_verbose_logs_desc'] = 'Diese Option fügt weitere Protokolle zum Panopto-php error_log hinzu. Dies sollte nur zu Debugging-Zwecken eingeschaltet werden.';
$string['block_panopto_publisher_mapping'] = 'Rollenzuordnung für Veröffentlicher/in.';
$string['block_panopto_publisher_mapping_desc'] = 'Wählen Sie aus, welche Kursrollen als Veröffentlicher/in neuen Panopto-Kursordnern festgelegt werden.';
$string['block_panopto_publisher_system_role_mapping'] = 'Systemrollen mit Provisionierungsberechtigung';
$string['block_panopto_publisher_system_role_mapping_desc'] = 'Wählen Sie aus, welche Systemrollen neue Panopto Kursordner bereitstellen können. Das Hinzufügen von Rollen kann Auswirkungen auf die Leistung von größeren Systemen haben.';
$string['block_panopto_server_number_desc'] = 'Klicken Sie auf \'Änderungen speichern\', um die Anzahl der Server zu aktualisieren.';
$string['block_panopto_server_number_name'] = 'Anzahl der Panopto Server';
$string['block_panopto_sso_sync_type'] = 'Panopto SSO Synchronisierungs-Verhalten';
$string['block_panopto_sso_sync_type_desc'] = 'Wählen Sie das Verhalten für die Synchronisierung von Nutzer/innen beim Zugriff auf Panopto-Inhalte. Nutzer/innen können gleichzeitig mit der Anmeldung bei Panopto synchronisiert werden oder im Hintergrund mit einer asynchronen Aufgabe, nachdem sie sich erfolgreich angemeldet haben.';
$string['block_panopto_sync_after_login'] = 'Authentifizierung und Synchronisierung mit Panopto beim Moodle-Login (nicht empfohlen)';
$string['block_panopto_sync_after_login_desc'] = 'Wenn diese Option aktiviert ist, werden die Nutzer/innen bei Panopto authentifiziert und ihre Berechtigungen synchronisiert, wenn sie sich in Moodle anmelden. Normalerweise werden die Authentifizierung und die Synchronisierung der Berechtigungen durchgeführt, wenn ein/e Nutzer/in im Kurs auf Panopto zugreift. Und daher empfehlen wir, dass Organisationen diese Einstellung nur aktivieren, wenn sie den Panopto-Block in Moodle nicht bereitstellen (nicht empfohlen). Außerdem wird sich die Anmeldezeit verlängern, wenn diese Option aktiviert ist.';
$string['block_panopto_sync_after_provisioning'] = 'Synchronisierung der angemeldeten Nutzer/innen nach erfolgreicher Bereitstellung (nicht empfohlen)';
$string['block_panopto_sync_after_provisioning_desc'] = 'Wenn diese Option ausgewählt ist, werden alle in einem Kurs angemeldeten Nutzer/innen nach der Bereitstellung synchronisiert. Wenn ein/e Nutzer/in auf den Panopto-Block in einem Kurs zugreift, erfolgt normalerweise die Authentifizierung und die Synchronisierung der Berechtigungen für diesen Kurs. Wir empfehlen daher, dass Organisationen diese Einstellung nur aktivieren, wenn sie den Panopto-Block in Moodle nicht bereitstellen (nicht empfohlen).';
$string['block_panopto_sync_on_enrolment'] = 'Synchronisierung der Nutzer/innen nach der Kurseinschreibung (optional)';
$string['block_panopto_sync_on_enrolment_desc'] = 'Synchronisiert die Berechtigung, wenn ein/e Teilnehmer/in in einen Kurs mit einem gültigen Panopto Ordner eingeschrieben wird.
Wenn deaktiviert, werden die Nutzer/innen mit Panopto synchronisiert, wenn der/die Nutzer/in auf den Panopto-Block zugreift. Diese Funktion kann aktiviert werden, wenn Sie nicht beabsichtigen, den Block in einem Kurs zu verwenden, oder wenn ein Kurs Panopto-Inhalte direkt auf der Kurs-Hauptseite eingebettet hat (in diesem Fall werden die Inhalte vor der Synchronisierung des Blocks geladen).
Beachten Sie, dass die Aktivierung dieser Funktion zu einer Leistungsverlangsamung bei der Einschreibung von Nutzer/innen führen kann.';
$string['block_panopto_wsdl_proxy_host'] = 'WSDL Proxy Host';
$string['block_panopto_wsdl_proxy_host_desc'] = 'Die Host-Adresse, die als Proxy für jede WDSL des Panopto Dienstes verwendet wird (Optional).';
$string['block_panopto_wsdl_proxy_port'] = 'WSDL Proxy Anschluss';
$string['block_panopto_wsdl_proxy_port_desc'] = 'Der als Proxy für jeden Panopto WDSL Dienst verwendete Anschluss. (Optional)';
$string['build_category_structure_start'] = 'Beginn der Zuordnung aller Moodle-Bereiche zu {$a}';
$string['bulk_remove_all_adhoc_task'] = 'Entfernen aller in der Warteschlange stehenden Panopto Adhoc-Aufgaben';
$string['bulk_rename_single_failed'] = 'Aktualisierung des Ordnernamens für einen mit der Moodle-Kurs-ID {$a} verbundenen Ordner fehlgeschlagen';
$string['bulk_rename_single_success'] = 'Erfolgreich umbenannter Ordner für Moodle-Kurs ID {$a->moodleid}. Ursprünglicher Name: {$a->oldname}, Neuer Name: {$a->newname}';
$string['bulk_rename_single_unnecessary'] = 'Umbenennen ist nicht nötig, der Ordner entspricht bereits dem Kursnamen {$a}';
$string['bulk_rename_start_button'] = 'Mit dem Umbenennen von Ordnern beginnen';
$string['bulk_rename_start_renaming'] = 'Beginn der Aktualisierung aller Ordnernamen';
$string['bulk_reprovision_begin_reprovision'] = 'Überprüfte Kurse neu provisionieren';
$string['bulk_reprovision_start'] = 'Alle Panopto-Ordner aktualisieren';
$string['bulk_reprovision_start_button'] = 'Beginnen der Ordneraktualisierung';
$string['bulk_task_access_error'] = 'BULK TASK BLOCKED: Der Benutzer {$a} hat keinen Zugriff auf einen provisionierten Panopto-Kursordner. Der arbeitende Benutzer muss für Massenoperationen mindestens Betrachter-Zugriff auf alle Panopto-Kursordner haben. Es wird dringend empfohlen, dass der arbeitende Benutzer ein Administrator bei Panopto ist.';
$string['bulk_task_contact_support'] = 'Öffnen Sie bitte ein Panopto Supportticket, wenn Sie Fragen haben.';
$string['bulk_task_new_step'] = 'Jetzt mit diesem Schritt beginnen: {$a}';
$string['bulk_task_reached_count'] = 'Gewünschte Ordneranzahl erreicht, weiter zum nächsten Schritt';
$string['bulk_task_removing_bad_folder_row'] = ':Der Eintrag im Foldermapping scheint beschädigt zu sein. Verschieben Sie den Eintrag in die old_foldermap als Referenz für den Benutzer. Beschädigte Zeile für Kurs mit Moodle Id verwendet: {$a}';
$string['bulk_task_rename_cli_command'] = 'php -f rename_all_folders_cli.php';
$string['bulk_task_rename_warning'] = 'Dieser Vorgang benennt alle Panopto-Ordner um, die für einen Moodle-Kurs provisioniert wurden, wenn sich der Name des Moodle-Kurses seit der ursprünglichen Bereitstellung geändert hat. Sobald dieser Vorgang ausgeführt wurde, kann er nicht mehr rückgängig gemacht werden. Dieser Vorgang kann eine Weile dauern, wenn Sie eine große Anzahl von Kursen haben. Vielleicht möchten Sie diesen Vorgang über die Befehlszeile ausführen, um eine Zeitüberschreitung in Ihrem Browser zu vermeiden. Verbinden Sie sich dazu mit Ihrer Moodle-Umgebung und führen Sie den folgenden Befehl aus dem Verzeichnis /lib/cli aus:';
$string['bulk_task_reprovision_cli_command'] = 'php -f upgrade_all_folders_cli.php';
$string['bulk_task_reprovision_warning'] = 'Bei diesem Vorgang werden alle Ihre Moodle-Kurse in Panopto neu erstellt. Dieser Vorgang kann eine Weile dauern, wenn Sie eine große Anzahl von Kursen haben. Vielleicht möchten Sie diesen Vorgang über die Befehlszeile ausführen, um eine Zeitüberschreitung in Ihrem Browser zu vermeiden. Verbinden Sie sich dazu mit Ihrer Moodle-Umgebung und führen Sie den folgenden Befehl aus dem Verzeichnis /lib/cli aus:';
$string['bulk_task_skipping_folder'] = 'Überspringen des Ordners {$a}';
$string['bulk_task_update_progress'] = 'Verarbeitung Ordner {$a->currentprogress} von {$a->totalitems}';
$string['bulk_task_version_error'] = 'Panopto Bulk Operation Error - Panopto Server benötigt eine neuere Version';
$string['bulk_task_working_count'] = 'Beginn mit Ordner {$a->beginningindex} und Verarbeitung bis zu Ordner {$a->endingindex}';
$string['categories_need_newer_panopto'] = 'Bereichsaufrufe benötigen eine Panopto Serverversion von {$a->requiredpanoptoversion} um erfolgreich zu sein, die Zielversion des Panopto Servers ist {$a->activepanoptoversion}.';
$string['cli_category_invalid_arguments'] = 'Bitte führen Sie den Befehl mit den folgenden Argumenten aus \'build_category_structure.php <panoptoservername> <applicationkey>\'';
$string['cli_heading_build_category_structure'] = 'Alle Moodle Kursbereiche mit Panopto synchronisieren';
$string['completed_recordings'] = 'Abgeschlossene Aufnahmen';
$string['copy_access_error'] = 'Der Benutzer/in hat keinen Zugriff auf den Panopto-Ordner, der mit dem importierten Quellkurs mit der Id {$a->importedcourseid} verknüpft ist.';
$string['copy_api_error'] = 'Fehler beim Importieren eines Kurses mit der Id {$a->importedcourseid}. Bitte sehen Sie sich die Panopto PHP-Fehlerprotokolle für weitere Details an.';
$string['copy_api_error_auth'] = 'Fehler bei der Autorisierung mit dem Panopto-Server {$a}.';
$string['copy_api_error_response'] = 'Antwort zum Kopieren fehlgeschlagen: {$a}';
$string['copy_course_init'] = 'Kurskopie wurde initialisiert, Auftrag zum Kopieren von Inhalten aus dem Panopto-Ordner, der dem Moodle-Kurs mit der Id {$a->SourceCourseContexts[0]} zugeordnet ist, in einen Panopto-Ordner, der dem Moodle-Kurs mit der Id {$a->TargetCourseContext} zugeordnet ist, wird in die Warteschlange gestellt.';
$string['course'] = 'Kurs';
$string['course_already_provisioned'] = 'Dieser Kurs wurde bereits für einen Ordner mit einer öffentlichen ID verwendet: {$a}.';
$string['course_has_invalid_panopto_data'] = 'Der Moodle Zielkurs ist nicht mit gültigen Panopto Ordnerdaten verknüpft.';
$string['course_name'] = 'Kursname';
$string['course_settings'] = 'Kurseinstellungen';
$string['creator'] = 'Ersteller/in';
$string['creator_help'] = 'Ersteller/innen können Inhalte in Panopto erstellen und bearbeiten.';
$string['creators'] = 'Ersteller/innen';
$string['current_version'] = 'Aktuelle Version: {$a}';
$string['current_version_attr'] = 'Aktuelle Version';
$string['download_recorder'] = 'Rekorder herunterladen';
$string['ensure_category_branch_failed'] = 'Der Aufruf zur Sicherstellung der Bereichsverzweigung war nicht erfolgreich. Weitere Einzelheiten entnehmen Sie bitte dem Panopto-Protokoll.';
$string['ensure_category_branch_start'] = 'Beginnen mit der Sicherstellung der Bereichsverzweigung für die Blattkategorie: {$a->categoryname} auf Panopto-Server {$a->targetserver}.';
$string['ensure_category_branch_success'] = 'Breichsverzweigung mit der folgenden Struktur gewährleistet: \\n {$a}';
$string['error_invalid_category_information'] = 'Der Zielbereich enthielt keine gültigen Informationen.';
$string['error_no_admin_account_found'] = 'Fehler: Es wurde kein Admin-Konto gefunden';
$string['error_retrieving'] = 'Fehler beim Abrufen des Panopto Kursordners';
$string['existing_course'] = 'Wählen Sie einen vorhandenen Panopto Ordner, der derzeit keinem anderen Kurs zugeordnet ist:';
$string['existing_course_help'] = 'Bitte beachten Sie, dass wir keine Zuordnungen zu Aufgabenordnern oder Ordner mit geerbten Berechtigungen vornehmen können.';
$string['fetching_content'] = 'Panopto-Inhalt abrufen ...';
$string['folder_not_found_error'] = 'Der derzeit für den Ziel Moodle Kurs bereitgestellte Ordner auf dem Panopto Server konnte nicht gefunden werden, wurde er gelöscht? Die Bereitstellung wird fortgesetzt, indem eine Verknüpfung zum Standard Moodle Ordner hergestellt wird oder ein solcher Ordner erstellt wird, falls er noch nicht vorhanden ist.';
$string['get_provisioning_info'] = 'Versuch, Informationen über die Bereitstellung eines Kurses mit der Moodle-ID zu erhalten: {$a}.';
$string['groups_getting_synced'] = 'Gruppen, die mit diesem Aufruf synchronisiert werden sollen: {$a}';
$string['impacted_server'] = 'Betroffener Server: {$a}';
$string['impacted_server_attr'] = 'Betroffener Server';
$string['import_access_error'] = 'Der Zielkurs wird in einem Ordner bereitgestellt, auf den der Benutzer / die Benutzerin keinen Zugriff hat.';
$string['import_error'] = 'Fehler beim Importieren eines Kurses mit der Id {$a->importedcourseid}.
Hier ist die Fehlermeldung: {$a->Fehlermeldung}';
$string['import_not_mapped'] = 'Der importierte Kurs wurde nicht provisioniert (no session_group_id set in block_panopto_foldermap)';
$string['import_status'] = 'Status des Importversuchs';
$string['import_success'] = 'Kurs erfolgreich importiert';
$string['init_import_source'] = 'Versuchter Import des Quellkurses in Moodle mit folgender ID: {$a}';
$string['init_import_target'] = 'Versuchter Import für den Zielkurs in Moodle mit folgender ID: {$a}';
$string['invalid_folder_information'] = 'Die Panopto-Informationen für diesen Kurs sind ungültig. Bitte provisionieren Sie diesen Kurs erneut.';
$string['links'] = 'Links';
$string['live_sessions'] = 'Live Sitzungen';
$string['minimum_required_version'] = 'Erforderliche Mindestversion: {$a}';
$string['minimum_required_version_attr'] = 'Erforderliche Mindestversion';
$string['missing_moodle_required_version'] = 'Für den Panopto Block ist eine Moodle Version erforderlich, die neuer ist als {$a->requiredversion}. Ihre aktuelle Moodle Version: {$a->currentversion}';
$string['missing_required_version'] = 'Der API-Aufruf hat keine Antwort zurückgegeben. Dies könnte daran liegen, dass der Panopto Server, den Sie verwendeten, nicht die erforderlichen Mindestanforderungen zur Unterstützung dieser Version des Moodle Panopto Blocks erfüllt. Dies könnte auch dadurch verursacht werden, dass der Server nicht verfügbar ist.';
$string['moodle_course_not_exist'] = 'Verschieben der Zeile in das alte Ordnermapping. Kurs existierte in Moodle nicht.';
$string['name_style_combination'] = '[Kurzname]: [Vollname]';
$string['name_style_fullname'] = '[Vollname]';
$string['name_style_shortname'] = '[Kurzname]';
$string['no_access'] = 'Sie haben keinen Zugriff auf diesen Panopto Ordner.';
$string['no_completed_recordings'] = 'Keine abgeschlossenen Aufzeichnungen';
$string['no_course_selected'] = 'Kein Panopto Kursordner ausgewählt';
$string['no_creators'] = 'Keine Ersteller/innen';
$string['no_folder_associated_with_moodle_id'] = 'Es wurde bisher kein Panopto-Ordner mit dem Moodlekurs (ID {$a}) in Verbindung gebracht.';
$string['no_live_sessions'] = 'Keine Live Sitzungen';
$string['no_publishers'] = 'Keine Veröffentlicher/innen.';
$string['no_server'] = 'Es sind keine Server für die Provisionierung eingerichtet. Bitte wenden Sie sich an einen Systemadministrator.';
$string['no_users_synced_desc'] = 'Die unten aufgeführten Benutzer/innen werden mit Panopto synchronisiert, sobald sie versuchen, den Panopto Block im Kurs anzuzeigen.';
$string['no_viewers'] = 'Keine Betrachter/innen';
$string['or'] = 'Oder';
$string['panopto:addinstance'] = 'Einen neuen Panopto Block hinzufügen';
$string['panopto:myaddinstance'] = 'Einen neuen Panopto Block zu meiner Seite hinzufügen';
$string['panopto:provision_aspublisher'] = 'Provisionierung als Veröffentlicher/in';
$string['panopto:provision_asteacher'] = 'Provisionierung als Lehrende/r';
$string['panopto:provision_course'] = 'Provisionierung eines Kurses';
$string['panopto:provision_multiple'] = 'Provisionierung mehrerer Kurse auf einmal';
$string['panopto_course_tool'] = 'Panopto LTI Kursordner';
$string['panopto_server_error'] = 'Panopto Server {$a} ist mit einem Serverfehler zurückgekommen, wird beim nächsten Anmelden erneut versucht.';
$string['pluginname'] = 'Panopto';
$string['podcast_audio'] = 'Audio Podcast';
$string['podcast_feeds'] = 'Podcast Feeds';
$string['podcast_video'] = 'Video Podcast';
$string['privacy:metadata:block_panopto'] = 'Um sich in einen Panopto Dienst zu integrieren, müssen Benutzerdaten mit diesem Dienst ausgetauscht werden.';
$string['privacy:metadata:block_panopto:email'] = 'Ihre Email wurde an Panopto gesendet, um die Nutzung der Email Funktionen von Panopto zu ermöglichen.';
$string['privacy:metadata:block_panopto:firstname'] = 'Ihr Vorname wurde an Panopto gesendet, sodass der wirkliche Name des Benutzers in der Panopto Nuteroberfläche angezeigt werden kann.';
$string['privacy:metadata:block_panopto:lastname'] = 'Ihr Nachname wurde an Panopto gesendet, sodass der wirkliche Name des Benutzers in der Panopto Nuteroberfläche angezeigt werden kann.';
$string['privacy:metadata:block_panopto:username'] = 'Ihr Nutzername wird an Panopto gesendet, so dass ein Panopto Konto mit dem Moodle Nutzernamen als Panopto Nutzernamen erstellt werden kann.';
$string['provision'] = 'Bereitstellung';
$string['provision_access_error'] = 'Kurs bereits in einem Panopto Ordner provisioniert und der aktuelle Benutzer hat keinen Zugriff, um Operationen in diesem Ordner durchzuführen (Benutzer benötigt zumindest einen Betrachter-Zugriff für den Panopto Ordner).';
$string['provision_both_on_copy'] = 'Kurse während der Kursduplizierung und dem Importprozess provisionieren.';
$string['provision_course_link_text'] = 'Kurs provisionieren';
$string['provision_courses'] = 'Kurse provisionieren';
$string['provision_error'] = 'Fehler bei der Kursprovisionierung, bitte prüfen Sie die Logs für weitere Details.';
$string['provision_only_target_on_copy'] = 'Den Zielkurs während eines Duplizierungs- oder Importvorgangs nur dann provisionieren, solange der Quellkurs bereits provisioniert wurde.';
$string['provision_successful'] = 'Erfolgreiche Provisionierung des Kurses folgender ID: {$a}';
$string['provisioncourseselect'] = 'Kurse zur Provisionierung auswählen';
$string['provisioncourseselect_help'] = 'Mehrfachauswahl ist über Halten der Strg-Taste (Windows) oder der Cmd-Taste (Mac) möglich.';
$string['publisher'] = 'Veröffentlicher/in';
$string['publisher_help'] = 'Ein/e Veröffentlicher/in kann die von Ersteller/innen eingereichten Inhalte genehmigen.';
$string['publishers'] = 'Veröffentlicher/innen';
$string['reinitialize_import_finished'] = 'Neuinitialisierung des Import abgeschlossen';
$string['reinitialize_import_started'] = 'Beginn der Neuinitialisierung des Imports';
$string['removed_panopto_adhoc_tasks'] = 'Alle bestehenden Panopto Ad-hoc Aufgaben wurden gelöscht.';
$string['require_panopto_version_title'] = 'Für diese Version des Panopto Blocks ist eine Mindestversion von Panopto erfoderlich.';
$string['result'] = 'Ergebnis';
$string['role_map_header'] = 'Panopto Rollenzuordnungen ändern';
$string['role_map_header_help'] = 'Wählen Sie, wie Moodle Rollen auf Panopto Rollen abgebildet werden sollen.
Nicht zugeordneten Moodle Rollen wird die Betrachter-Rolle in Panopto zugewiesen.';
$string['select_server'] = 'Wählen Sie einen Panopto Server';
$string['select_server_help'] = 'Wählen Sie den Panopto Server, auf dem der Kurs bereitgestellt werden soll.';
$string['server_info_not_valid'] = 'Der Servername oder der Anwendungsschlüssel sind nicht gültig, unten sehen Sie die versuchten Werte.';
$string['server_name'] = 'Server name';
$string['server_not_available'] = 'Der Panopto Server {$a} wurde nicht erreicht. Der Server ist eventuell inaktiv.';
$string['show_all'] = 'Alles anzeigen';
$string['show_less'] = 'Weniger anzeigen';
$string['sso_invalid_authcode'] = 'Ungültiger Authentifizierungscode';
$string['sso_invalid_server'] = 'Ungültiger Panopto Server. Der Server muss vor der Verwendung in der Panopto-Blockkonfiguration konfiguriert werden.';
$string['sso_type_asyncsync'] = 'Asynchrone Synchronisationsaufgabe bei der Anmeldung in Panopto erstellen';
$string['sso_type_nosync'] = 'Bei Panopto-Anmeldung nicht synchronisieren';
$string['sso_type_sync'] = 'Bei Panopto-Anmeldung synchronisieren';
$string['synced_user_info'] = 'Synchronisierte Benutzerinformationen';
$string['take_notes'] = 'Notizen machen';
$string['target_invalid_panopto_data'] = 'Die Panopto Daten, die in der Foldermap-Tabelle implementiert sind und mit dem Zielverlauf des Imports verknüpft sind, waren entweder beschädigt oder existieren nicht mehr. Die Panopto-Verknüpfung wurde entfernt.';
$string['target_moodle_course_deleted'] = 'Der Kurs, mit dem dieser Import verbunden war, existiert nicht mehr, die Panopto-Verknüpfung wurde entfernt.';
$string['unconfigured'] = 'Globale Konfiguration unvollständig. Bitte wenden Sie sich an einen Systemadministrator.';
$string['unknown_provisioning_error'] = 'Ein unbekannter Fehler ist aufgetreten.';
$string['unprovision'] = 'Provisionierung enfernen';
$string['unprovision_courses'] = 'Provisionierung von Panopto Ordnern entfernen';
$string['unprovision_error'] = 'Das Entfernen der Provisionierung stieß auf einen Fehler und war nicht erfolgreich.';
$string['unprovision_from_moodle'] = 'Provisionierung des Panopto Ordner für diesen Kurs enfernen';
$string['unprovision_requires_newer_server'] = 'Für die Entfernung der Provisionierung st eine Panopto Server Version von mindestens 7.0.0 erforderlich.';
$string['unprovision_successful'] = 'Das Entfernen der Provisionierung  war ein Erfolg.';
$string['unprovisioncourseselect'] = 'Wählen Sie aus, für welche Kurse Sie die Provisionierung von Panopto Ordnern entfernen möchten.';
$string['unprovisioncourseselect_help'] = 'Mehrfachauswahl ist durch Halten der Strg-Taste (Windows) oder der Cmd-Taste (Mac) möglich.';
$string['unprovisioned'] = 'Dieser Kurs wurde noch nicht bereitgestellt.';
$string['upgrade_panopto_required_version'] = 'Ein Panopto Server, den Sie verwenden, erfüllt nicht die erforderliche Mindestversion, um diese Version des Moodle Panopto Blocks zu unterstützen. Das Upgrade wird solange blockiert, bis alle eingesetzen Panopto Server die Mindestanforderungen erfüllen.';
$string['users_have_been_synced'] = 'Die unten aufgeführten Nutzer/innen wurden synchronisiert und sollten bereit sein, Panopto zu verwenden.';
$string['users_will_be_synced_custom'] = 'Künftige Benutzer/innen werden automatisch gemäß Ihren individuellen Panopto-Einstellungen synchronisiert.';
$string['verifying_permission'] = 'Berechtigung prüfen';
$string['viewers'] = 'Betrachter/innen';
$string['watch_live'] = 'Live zuschauen';
