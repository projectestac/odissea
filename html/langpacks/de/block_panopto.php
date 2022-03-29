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
 * Strings for component 'block_panopto', language 'de', version '3.11'.
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
$string['attempt_provision_course'] = 'Versuche einen Panopto Ordner mit der externen ID {$a} anzulegen.';
$string['attempt_sync_user'] = 'Versuche Nutzer/in mit einer ID von {$a} mit Panopto zu synchronisieren.';
$string['attempt_sync_user_server'] = 'Der Zielserver der verursachten Synchronisierung ist {$a}.';
$string['attempt_unprovision_course'] = 'Versuche die Bereitstellung eines Panopto Ordners mit einer externen ID von {$a} aufzuheben.';
$string['attempted_import_course_id'] = 'Moodle ID des Quell-Importkurses';
$string['attempted_moodle_course_id'] = 'Versuchte Moodle Kurs ID';
$string['attempted_panopto_server'] = 'Versuchter Panopto Dienst';
$string['attempted_provisioning_personal_folder'] = 'Der Versuch, einen personalisierten Ordner bereitzustellen, wird derzeit nicht von Panopto unterstützt. Bitte ordnen Sie den Kurs über die Blockinstanz-Konfiguration einem anderen Ordner zu und versuchen Sie die Bereitstellung erneut.';
$string['attempted_target_course_id'] = 'Moodle ID des Zielkurses';
$string['attribute_ensure_branch_failed'] = 'Fehler in der Verzweigung sicherstellen';
$string['attribute_ensured_branch'] = 'Sichergestellte Zweig-Hierarchie';
$string['attribute_target_branch_leaf'] = 'Kategoriename des Zielzweig Blattknotens';
$string['back_to_config'] = 'Zurück zur Konfiguration';
$string['back_to_course'] = 'Zurück zum Kurs';
$string['begin_building_category_structure'] = 'Starte mit dem Bau einer Kategoriestruktur';
$string['begin_reinitializing_imports'] = 'Beginnen Sie mit der Reinitialisierung von Importen.';
$string['block_edit_error'] = 'Blockinstanz kann nicht konfiguriert werden, da Globale Konfiguration unvollständig ist. Bitte wenden Sie sich an Ihren Systemadministrator.';
$string['block_edit_header'] = 'Wählen Sie den Panopto-Kursordner aus, der in diesem Block angezeigt werden soll.';
$string['block_edit_header_help'] = 'Wählen Sie einen vorhandenen Panopto Kursordner aus oder stellen Sie einen neuen Panopto Kursordner für diesen Block bereit.';
$string['block_global_add_courses'] = 'Fügen Sie Moodle-Kurse zu Panopto hinzu.';
$string['block_global_application_key'] = 'Anwendungsschlüssel';
$string['block_global_application_key_desc'] = 'Geben Sie den Anwendungsschlüssel von der Seite der Panopto Identitätsanbieter ein.';
$string['block_global_build_category_structure'] = 'Synchronisiere alle Moodle-Kategorien mit Panopto.';
$string['block_global_hostname'] = 'Hostname des Panopto Servers';
$string['block_global_hostname_desc'] = 'Geben Sie den FQDN Ihres Panopto-Servers ein. Zum Beispiel: demo.example.panopto.com';
$string['block_global_instance_desc'] = 'Geben Sie den Instanznamen von der Seite des Panopto Idendity Providers ein.';
$string['block_global_instance_name'] = 'Name der Moodle Instanz';
$string['block_global_reinitialize_all_imports'] = 'Initialisiere alle Panopto Ordner neu.';
$string['block_global_unprovision_courses'] = 'Hebe die Bereitstellung der Panopto Ordner in den Moodle Kursen auf';
$string['block_global_upgrade_all_folders'] = 'Aktualisiere alle vorhandenen Ordner und Importe';
$string['block_panopto_any_creator_can_view_folder_settings'] = 'Erlauben Sie allen Nutzer/innen, die Erstellerrollen besitzen, Links zu den Panopto Ordnereinstellungen anzuzeigen.';
$string['block_panopto_any_creator_can_view_folder_settings_desc'] = 'Standardmäßig können nur Trainer/innen des Kurses den Link zu den Kurseinstellungen sehen. Wenn Sie möchten, dass alle Ersteller/innen diesen Link sehen können, wählen Sie diese Option.';
$string['block_panopto_anyone_view_recorder_links'] = 'Erlauben Sie allen, die Recorder-Download-Links anzuzeigen.';
$string['block_panopto_anyone_view_recorder_links_desc'] = 'Standardmäßig können nur Nutzer/innen, die einen Ersteller- oder Bereitstellungszugriff auf einen Ordner besitzen, den Download-Link sehen. Wenn Sie möchten, dass Nutzer/innen den Download-Link auch sehen, aktivieren Sie diese Option.';
$string['block_panopto_async_tasks'] = 'Aktivierung von asynchronen Synchronisierungsaufgaben (nicht empfohlen)';
$string['block_panopto_async_tasks_desc'] = 'Wenn diese Option ausgewählt ist, werden die Aufgaben Anmeldung, Einschreibung, Abmeldung, Anwendung der Kategorien und Löschen von Nutzer/innen asynchron ausgeführt. Wenn diese Option deaktiviert ist, erfolgen diese Vorgänge im Event-Handler synchron. Da es schwierig ist, einen Fehler rechtzeitig zu erkennen, empfehlen wir diese Option nicht.';
$string['block_panopto_auto_provision'] = 'Neu erstellte Kurse automatisch bereitstellen.';
$string['block_panopto_auto_provision_desc'] = 'Aktivieren Sie diese Option, um einen Panopto Kursordner automatisch bereitzustellen, wenn ein Kurs erstellt wird.';
$string['block_panopto_auto_sync_imports'] = 'Beim Importieren eines Kurses wird automatisch eine Berechtigung erteilt.';
$string['block_panopto_auto_sync_imports_desc'] = 'Aktivieren Sie diese Option, damit Panopto beim Importieren eines Kurses automatisch eine Viewer-Berechtigung erteilen kann.';
$string['block_panopto_automatic_operation_target_server'] = 'Automatischer Betrieb des Zielserver';
$string['block_panopto_automatic_operation_target_server_desc'] = 'Dies ist der Panopto-Server, der für die Aufgaben \'Neue Kurse automatisch bereitstellen\', \'Nutzer/innen bei der Anmeldung synchronisieren\' und \'Kategoriestruktur durchsetzen\' vorgesehen ist.';
$string['block_panopto_check_server_status'] = 'Überprüfung des Serverzustandes vor dem Laden.';
$string['block_panopto_check_server_status_desc'] = 'Es wird überprüft, ob der Ziel-Panopto-Server verfügbar ist, um möglich lange Timeout-Aufrufe zu vermeiden, wenn der Server nicht erreichbar ist. Dies ist standardmäßig auf "false" gesetzt, da Plattform-/Betriebssystemabhängige Funktionen verwendet werden. Die Einstellungen sollten nur dann auf "Wahr" gesetzt werden, wenn der Panopto-Support dies empfiehlt.';
$string['block_panopto_creator_mapping'] = 'Zuordnung der Erstellerrolle.';
$string['block_panopto_creator_mapping_desc'] = 'Wählen Sie aus, welche Kursrollen als Erstellerrollen in neuen Panopto-Kursordnern festgelegt werden sollen.';
$string['block_panopto_enforce_category_after_course_provision'] = 'Erstellen von Kategorieordnern bei der (Wieder-)Bereitstellung von Kursen.';
$string['block_panopto_enforce_category_after_course_provision_desc'] = 'Wenn diese Option aktiviert ist, wird durch die (erneute) Bereitstellung nicht nur der Kursordner erstellt, sondern auch Ordner für die Kategorien, in denen sich der Kurs befindet.';
$string['block_panopto_enforce_category_structure'] = 'Neue und verschobene Kategorien mit Panopto synchronisieren.';
$string['block_panopto_enforce_category_structure_desc'] = 'Wenn diese Option beim Erstellen oder Verschieben einer Kategorie aktiviert ist, wird ihre Kategoriestruktur in Panopto wiedergespiegelt.';
$string['block_panopto_enforce_https_on_wsdl'] = 'HTTPS bei Panopto-API-Aufrufen fordern.';
$string['block_panopto_enforce_https_on_wsdl_desc'] = 'HTTPS-Endpunkte werden für Panopto-API-Aufrufe durchgesetzt (für jeden empfohlen).';
$string['block_panopto_folder_name_style'] = 'Panopto-Ordnernamen-Stil';
$string['block_panopto_folder_name_style_desc'] = 'Verwenden Sie diese Option, um den visuellen Namensstil zu wählen, den Sie für Ihren neuen Panopto-Ordner haben möchten.';
$string['block_panopto_non_editing_teacher_provision'] = 'Erlauben Sie Trainer/innen (ohne Schreibrecht) die Bereitstellung.';
$string['block_panopto_non_editing_teacher_provision_desc'] = 'Aktivieren Sie diese Option, um Trainer/innen (ohne Schreibrecht) die Bereitstellung von Panopto-Kursordnern zu ermöglichen.';
$string['block_panopto_print_log_to_file'] = 'Fehlerprotokolle in eine Textdatei umleiten.';
$string['block_panopto_print_log_to_file_desc'] = 'Diese Option leitet jedes Panopto-Logging aus dem PHP error_log in eine PanoptoLogs.txt-Datei innerhalb des Moodle Basisverzeichnisses um. Sie sollte nur dann auf "Wahr" gesetzt werden, wenn die Panopto-Unterstützung dies empfiehlt.';
$string['block_panopto_print_verbose_logs'] = 'Ausführliche Protokolle drucken';
$string['block_panopto_print_verbose_logs_desc'] = 'Diese Option fügt weitere Protokolle zum Panopto-php error_log hinzu. Dies sollte nur zu Debugging-Zwecken eingeschaltet werden.';
$string['block_panopto_publisher_mapping'] = 'Rollenzuordnung für Herausgeber/in.';
$string['block_panopto_publisher_mapping_desc'] = 'Wählen Sie aus, welche Kursrollen als Herausgeber/innen in neuen Panopto-Kursordnern festgelegt werden.';
$string['block_panopto_publisher_system_role_mapping'] = 'Systemrollen mit Bereitstellungsberechtigung.';
$string['block_panopto_publisher_system_role_mapping_desc'] = 'Wählen Sie aus, welche System Rollen neue Panopto Kursordner bereitstellen können. Das Hinzufügen von Rollen kann Auswirkungen auf die Leistung von größeren Systemen haben.';
$string['block_panopto_server_number_desc'] = 'Klicken Sie auf \'Änderungen speichern\', um die Anzahl der Server zu aktualisieren.';
$string['block_panopto_server_number_name'] = 'Anzahl der Panopto Server';
$string['block_panopto_sso_sync_type'] = 'Panopto SSO Synchronisierungs-Verhalten';
$string['block_panopto_sso_sync_type_desc'] = 'Wählen Sie das Verhalten für die Synchronisierung von Nutzer/innen beim Zugriff auf Panopto-Inhalte. Nutzer/innen können gleichzeitig mit der Anmeldung bei Panopto synchronisiert werden oder im Hintergrund mit einer asynchronen Aufgabe, nachdem sie sich erfolgreich angemeldet haben.';
$string['block_panopto_sync_after_login'] = 'Authentifizierung und Synchronisierung mit Panopto beim Moodle-Login (nicht empfohlen)';
$string['block_panopto_sync_after_login_desc'] = 'Wenn diese Option aktiviert ist, werden die Nutzer/innen bei Panopto authentifiziert und ihre Berechtigungen synchronisiert, wenn sie sich in Moodle anmelden. Normalerweise werden die Authentifizierung und die Synchronisierung der Berechtigungen durchgeführt, wenn ein/e Nutzer/in im Kurs auf Panopto zugreift. Und daher empfehlen wir, dass Organisationen diese Einstellung nur aktivieren, wenn sie den Panopto-Block in Moodle nicht bereitstellen (nicht empfohlen). Außerdem wird sich die Anmeldezeit verlängern, wenn diese Option aktiviert ist.';
$string['block_panopto_sync_after_provisioning'] = 'Synchronisierung der angemeldeten Nutzer/innen nach erfolgreicher Bereitstellung (nicht empfohlen)';
$string['block_panopto_sync_after_provisioning_desc'] = 'Wenn diese Option ausgewählt ist, werden alle in einem Kurs angemeldeten Nutzer/innen nach der Bereitstellung synchronisiert. Wenn ein/e Nutzer/in auf den Panopto-Block in einem Kurs zugreift, erfolgt normalerweise die Authentifizierung und die Synchronisierung der Berechtigungen für diesen Kurs. Wir empfehlen daher, dass Organisationen diese Einstellung nur aktivieren, wenn sie den Panopto-Block in Moodle nicht bereitstellen (nicht empfohlen).';
$string['block_panopto_sync_on_enrolment'] = 'Synchronisierung der Nutzer/innen nach der Kurseinschreibung (optional)';
$string['block_panopto_sync_on_enrolment_desc'] = 'Synchronisiert die Berechtigung, wenn ein/e Teilnehmer/in in einen Kurs mit einem gültigen Panopto Ordner eingeschrieben wird. Wenn diese Option deaktiviert ist, werden die Nutzer/innen mit Panopto synchronisiert, wenn der/die Nutzer/in auf den Panopto-Block zugreift. Diese Funktion kann aktiviert werden, wenn Sie nicht beabsichtigen, den Block in einem Kurs zu verwenden, oder wenn ein Kurs Panopto-Inhalte direkt auf der Kurs-Hauptseite eingebettet hat (in diesem Fall werden die Inhalte vor der Synchronisierung des Blocks geladen). Beachten Sie, dass die Aktivierung dieser Funktion zu einer Leistungsverlangsamung bei der Einschreibung von Nutzer/innen führen kann.';
$string['block_panopto_wsdl_proxy_host'] = 'WSDL Proxy Host';
$string['block_panopto_wsdl_proxy_host_desc'] = 'Die Host-Adresse, die als Proxy für jede WDSL des Panopto Dienstes verwendet wird (Optional).';
$string['block_panopto_wsdl_proxy_port'] = 'WSDL Proxy Anschluss';
$string['block_panopto_wsdl_proxy_port_desc'] = 'Der als Proxy für jeden Panopto WDSL Dienst verwendete Anschluss. (Optional)';
$string['categories_need_newer_panopto'] = 'Kategorieaufrufe benötigen eine Panopto Serverversion von {$a->requiredpanoptoversion} um erfolgreich zu sein, die Zielversion des Panopto Servers ist {$a->activepanoptoversion}.';
$string['cli_category_invalid_arguments'] = 'Bitte führen Sie den Befehl mit den folgenden Argumenten aus \'build_category_structure.php <panoptoservername> <applicationkey>\'';
$string['cli_heading_build_category_structure'] = 'Alle Moodle Kategorien mit Panopto synchronisieren';
$string['completed_recordings'] = 'Abgeschlossene Aufnahmen';
$string['course'] = 'Kurs';
$string['course_already_provisioned'] = 'Dieser Kurs wurde bereits für einen Ordner mit einer öffentlichen ID verwendet: {$a}.';
$string['course_has_invalid_panopto_data'] = 'Der Moodle Zielkurs ist nicht mit gültigen Panopto Ordnerdaten verknüpft.';
$string['course_name'] = 'Kursname';
$string['course_settings'] = 'Kurseinstellungen';
$string['creator'] = 'Ersteller/in';
$string['creator_help'] = 'Ersteller/innen können Inhalte in Panopto erstellen und bearbeiten.';
$string['creators'] = 'Ersteller/innen';
$string['download_recorder'] = 'Recorder herunterladen';
$string['error_invalid_category_information'] = 'Die Zielkategorie enthielt keine gültigen Informationen.';
$string['error_retrieving'] = 'Fehler beim Abrufen des Panopto Kursordners.';
$string['existing_course'] = 'Wählen Sie einen vorhandenen Panopto Ordner, der derzeit keinem anderen Kurs zugeordnet ist:';
$string['fetching_content'] = 'Panopto-Inhalt abrufen ...';
$string['folder_not_found_error'] = 'Der derzeit für den Ziel Moodle Kurs bereitgestellte Ordner auf dem Panopto Server konnte nicht gefunden werden, wurde er gelöscht? Die Bereitstellung wird fortgesetzt, indem eine Verknüpfung zum Standard Moodle Ordner hergestellt wird oder ein solcher Ordner erstellt wird, falls er noch nicht vorhanden ist.';
$string['get_provisioning_info'] = 'Versuch, Informationen über die Bereitstellung eines Kurses mit der Moodle-ID zu erhalten: {$a}.';
$string['import_access_error'] = 'Der Zielkurs wird in einem Ordner bereitgestellt, auf den der Benutzer keinen Zugriff hat.';
$string['import_error'] = 'Fehler beim Kursimport. Stellen Sie sicher, dass der Moodle Kurs und der Panopto Ordner, der importiert wird, noch vorhanden ist.';
$string['import_not_mapped'] = 'Der importierte Kurs wurde nicht in einem Panopto Ordner bereitgestellt! (no session_group_id set in block_panopto_foldermap)';
$string['import_status'] = 'Status des Importversuchs';
$string['import_success'] = 'Kurs erfolgreich importiert.';
$string['init_import_source'] = 'Versuchte Import der Quelle mit der Moodle Kurs ID: {$a}.';
$string['init_import_target'] = 'Versuchte Import mit dem Ziel der Moodle Kurs ID: {$a}.';
$string['links'] = 'Links';
$string['live_sessions'] = 'Live Sitzungen';
$string['missing_moodle_required_version'] = 'Für den Panopto Block ist eine Moodle Version erforderlich, die neuer ist als {$a->requiredversion} ihre aktuelle Moodle Version: {$a->currentversion}';
$string['missing_required_version'] = 'Der API-Aufruf hat keine Antwort zurückgegeben. Dies könnte daran liegen, dass der Panopto Server, den Sie verwendeten, nicht die erforderlichen Mindestanforderungen zur Unterstützung dieser Version des Moodle Panopto Blocks erfüllt. Dies könnte auch dadurch verursacht werden, dass der Server nicht verfügbar ist.';
$string['moodle_course_not_exist'] = 'Verschieben der Zeile in die alten Ordnerkarte. Kurs existierte in Moodle nicht.';
$string['name_style_combination'] = '[short name]: [full name]';
$string['name_style_fullname'] = '[full name]';
$string['name_style_shortname'] = '[short name]';
$string['no_access'] = 'Sie haben keinen Zugriff auf diesen Panopto Ordner.';
$string['no_completed_recordings'] = 'Keine abgeschlossenen Aufzeichnungen.';
$string['no_course_selected'] = 'Kein Panopto Kursordner ausgewählt.';
$string['no_creators'] = 'Keine Ersteller/innen.';
$string['no_folder_associated_with_moodle_id'] = 'Es wurde bisher kein Panopto-Verzeichnis mit dem Moodlekurs (ID {$a}) in Verbindung gebracht.';
$string['no_live_sessions'] = 'Keine Live Sitzungen';
$string['no_publishers'] = 'Keine Herausgeber.';
$string['no_server'] = 'Es sind keine Server für die Bereitstellung eingerichtet. Bitte wenden Sie sich an einen Systemadministrator.';
$string['no_users_synced_desc'] = 'Die unten aufgeführten Benutzer werden mit Panopto synchronisiert, sobald sie versuchen, den Panopto Block im Kurs anzuzeigen.';
$string['no_viewers'] = 'Keine Zuschauer.';
$string['or'] = 'Oder';
$string['panopto:addinstance'] = 'Einen neuen Panopto Block hinzufügen';
$string['panopto:myaddinstance'] = 'Einen neuen Panopto Block zu meiner Seite hinzufügen';
$string['panopto:provision_aspublisher'] = 'Bereitstellung als Herausgeber';
$string['panopto:provision_asteacher'] = 'Bereitstellung als Lehrender';
$string['panopto:provision_course'] = 'Bereiststellung eines Kurses';
$string['panopto:provision_multiple'] = 'Bereitstellung mehrerer Kurse auf einmal';
$string['panopto_server_error'] = 'Panopto server {$a} mit einem Serverfehler zurückgekommen, wird beim nächsten Anmelden erneut versucht.';
$string['pluginname'] = 'Panopto';
$string['podcast_audio'] = 'Audio Podcast';
$string['podcast_feeds'] = 'Podcast Feeds';
$string['podcast_video'] = 'Video Podcast';
$string['privacy:metadata:block_panopto'] = 'Um sich in einen Panopto Dienst zu integrieren, müssen Benutzerdaten mit diesem Dienst ausgetauscht werden.';
$string['privacy:metadata:block_panopto:email'] = 'Ihre Email wurde an Panopto gesendet, um die Nutzung der Email Funktionen von Panopto zu ermöglichen.';
$string['privacy:metadata:block_panopto:firstname'] = 'Ihr Vorname wurde an Panopto gesendet, sodass der wirkliche Name des Benutzers in der Panopto Nuteroberfläche angezeigt werden kann.';
$string['privacy:metadata:block_panopto:lastname'] = 'Ihr Nachname wurde an Panopto gesendet, sodass der wirkliche Name des Benutzers in der Panopto Nuteroberfläche angezeigt werden kann.';
$string['privacy:metadata:block_panopto:username'] = 'Ihr Benutzername wird an Panopto gesendet, damit ein Panopto Konto mit dem Moodle Benutzernamen als Panopto Benutzernamen erstellt werden kann.';
$string['provision'] = 'Bereitstellung';
$string['provision_access_error'] = 'Kurs bereits in einem Panopto Ordner bereitgestellt und der aktuelle Benutzer hat keinen Zugriff, um Operationen in diesem Ordner durchzuführen (Benutzer benötigt zumindest einen Viewer Zugriff für den Panopto Ordner).';
$string['provision_course_link_text'] = 'Kurs provisionieren / Kurs bereitstellen';
$string['provision_courses'] = 'Kurse provisionieren / Kurse bereitstellen';
$string['provision_error'] = 'Fehler bei der Bereitstellung eines Kurses.';
$string['provision_successful'] = 'Erfolgreiche Bereitstellung des Kurses der ID: {$a}';
$string['provisioncourseselect'] = 'Kurse zur Bereitstellung auswählen.';
$string['provisioncourseselect_help'] = 'Mehrfachauswahlen sind möglich durch Drücken der Strg-Taste (Windows) oder der Cmd-Taste (Mac).';
$string['publisher'] = 'Herausgeber';
$string['publisher_help'] = 'Ein Herausgeber kann die von Ersteller/innen eingereichten Inhalte genehmigen.';
$string['publishers'] = 'Herausgeber/innen';
$string['reinitialize_import_finished'] = 'Neuinitialisierung des Import abgeschlossen.';
$string['reinitialize_import_started'] = 'Beginn der Neuinitialisierung des Imports.';
$string['removed_panopto_adhoc_tasks'] = 'Alle bestehenden Panopto Ad-hoc Aufgaben wurden gelöscht.';
$string['require_panopto_version_title'] = 'Für diese Version des Panopto Blocks ist eine Mindestversion von Panopto erfoderlich.';
$string['result'] = 'Ergebnis';
$string['role_map_header'] = 'Panopto Rollenzuordnungen ändern';
$string['role_map_header_help'] = 'Wählen Sie, wie Moodle Rollen auf Panopto Rollen abgebildet werden sollen. Nicht zugeordneten Moodle Rollen wird die Viewer Rolle in Panopto zugewiesen.';
$string['select_server'] = 'Wählen Sie einen Panopto Server';
$string['select_server_help'] = 'Wählen Sie den Panopto Server, auf dem der Kurs bereitgestellt werden soll.';
$string['server_info_not_valid'] = 'Der Servername oder der Anwendungsschlüssel sind nicht gültig, unten sehen Sie die versuchten Werte.';
$string['server_name'] = 'Server name';
$string['server_not_available'] = 'Der Panopto Server {$a} wurde nicht erreicht. Der Server ist eventuell inaktiv.';
$string['show_all'] = 'Zeige Alles';
$string['show_less'] = 'Zeige weniger';
$string['synced_user_info'] = 'Synchronisierte Benutzerinformationen';
$string['take_notes'] = 'Notizen machen';
$string['target_invalid_panopto_data'] = 'Die Panopto Daten, die in der Foldermap Tabelle implementiert sind und mit dem Zielverlauf des Imports verknüpft sind, waren entweder beschädigt oder existieren nicht mehr. Die Panopto Beziehung wurde entfernt.';
$string['target_moodle_course_deleted'] = 'Der Kurs, mit dem dieser Import verbunden war, existiert nicht mehr, sodass die Panotpot Beziehung wegfällt.';
$string['unconfigured'] = 'Globale Konfiguration unvollständig. Bitte wenden Sie sich an einen Systemadministrator.';
$string['unknown_provisioning_error'] = 'Ein unbekannter Fehler ist aufgetreten.';
$string['unprovision'] = 'Bereitstellung enfernen';
$string['unprovision_courses'] = 'Bereitgestellten Panopto Ordner für diesen Kurs entfernen';
$string['unprovision_error'] = 'Das Entfernen der Bereitstellung stieß auf einen Fehler und war nicht erfolgreich.';
$string['unprovision_from_moodle'] = 'Bereitstellung des Panopto Ordner für diesen Kurs enfernen.';
$string['unprovision_requires_newer_server'] = 'Für die Entfernung der Bereitstellung ist eine Panopto Server Version von mindestens 7.0.0 erforderlich.';
$string['unprovision_successful'] = 'Das Entfernen der Bereitstellung war ein Erfolg.';
$string['unprovisioncourseselect'] = 'Wählen Sie aus, für welche Kurse Sie die Bereitstellung von Panopto Ordnern entfernen möchten.';
$string['unprovisioncourseselect_help'] = 'Mehrfachauswahlen sind durch Drücken der Strg-Taste (Windows) oder der Cmd-Taste (Mac) möglich.';
$string['unprovisioned'] = 'Dieser Kurs wurde noch nicht bereitgestellt.';
$string['upgrade_panopto_required_version'] = 'Ein Panopto Server, den Sie verwenden, erfüllt nicht die erforderliche Mindestversion, um diese Version des Moodle Panopto Blocks zu unterstützen. Das Upgrade wird solange blockiert, bis alle eingesetzen Panopto Server die Mindestanforderungen erfüllen.';
$string['users_have_been_synced'] = 'Die unten aufgeführten Nutzer wurden synchronisiert und sollten bereit sein, Panopto zu verwenden.';
$string['viewers'] = 'Zuschauer';
$string['watch_live'] = 'Live zuschauen';
