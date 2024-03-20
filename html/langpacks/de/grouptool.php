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
 * Strings for component 'grouptool', language 'de', version '4.1'.
 *
 * @package     grouptool
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activated_group'] = 'Gruppe aktiviert';
$string['activated_groups'] = 'Gruppen aktiviert!';
$string['active'] = 'Aktiv';
$string['activegroups'] = 'Aktive Gruppen';
$string['add_member'] = 'Füge <strong>{$a->username}</strong> zur Gruppe <strong>{$a->groupname}</strong> hinzu.';
$string['added_member'] = '<strong>{$a->username}</strong> zur Gruppe <strong>{$a->groupname}</strong> hinzugefügt';
$string['administration'] = 'Administration';
$string['administration_alt'] = 'Gruppen und Gruppierungen erstellen, sowie Einstellungen, für die in dieser Instanz aktiven Gruppen, ändern';
$string['agroups'] = 'Aktive Gruppen';
$string['ajax_edit_size_help'] = 'Neue Größe mit &lt;Enter&gt; eintragen, mit &lt;ESC&gt; zurück, Feld leer um individuelle Größe zu löschen';
$string['all_groups_full'] = 'Teilnehmer/in mit der ID <strong>{$a}</strong> kann nicht in Gruppe eingetragen werden, da alle Gruppen voll sind!';
$string['allow_multiple'] = 'Mehrfache Anmeldungen zulassen';
$string['allow_multiple_help'] = 'Ermöglicht es Teilnehmer/innen, in mehr als 1 Gruppe zur gleichen Zeit angemeldet zu sein. Sie müssen spezifizieren wie viele Gruppen zumindest und maximal gewählt werden müssen.';
$string['allow_reg'] = 'Selbstanmeldung zulassen';
$string['allow_reg_help'] = 'Ermöglicht es Teilnehmer/innen sich selbst zu einer (oder mehrerer) der unten aktivierten Gruppen anzumelden.';
$string['allow_unreg'] = 'Abmeldung zulassen';
$string['allow_unreg_help'] = 'Ermöglicht Teilnehmer/innen sich von Gruppen ab- bzw. zu anderen Gruppen umzumelden, solange sie sich innerhalb eines (optionalen) Zeitlimits befinden.';
$string['allowed'] = 'Erlaubt';
$string['already_marked'] = 'Diese Gruppe wurde bereits zur Anmeldung markiert!';
$string['already_member'] = '<strong>{$a->username}</strong> ist bereits Mitglied von Gruppe <strong>{$a->groupname}</strong>';
$string['already_occupied'] = 'Der Gruppenplatz in Gruppe <strong>{$a->grpname}</strong> wurde bereits an eine/n Teilnehmer/in vergeben, der die Anmeldung schneller durchführte. Bitte wählen Sie eine andere Gruppe aus!';
$string['already_queued'] = '<strong>{$a->username}</strong> ist bereits in der Warteliste von Gruppe <strong>{$a->groupname}</strong>!';
$string['already_registered'] = '<strong>{$a->username}</strong> ist bereits in Gruppe <strong>{$a->groupname}</strong> registriert!';
$string['alwaysshowdescription'] = 'Beschreibung immer anzeigen';
$string['alwaysshowdescription_help'] = 'Wenn deaktiviert, wird die Beschreibung nur während des Anmeldezeitraums angezeigt.';
$string['asterisk_marks_moodle_registrations'] = 'Teilnehmer/innen mit führendem Asterisk/Stern sind bereits in den entsprechenden Moodle-Gruppen angemeldet.';
$string['availabledate'] = 'Anmeldebeginn';
$string['availabledate_help'] = 'Beginn des Anmeldezeitraums. Nach diesem Datum ist es Teilnehmer/innen möglich sich selbst zu den ausgewählten Gruppen anzumelden (falls dies zugelassen ist).';
$string['availabledateno'] = 'Immer verfügbar';
$string['calendaravailable'] = '{$a} Anmeldung gestartet';
$string['calendardue'] = '{$a} Anmeldung ist fällig';
$string['cant_enrol'] = 'Kann Nutzer/in nicht automatisch in Kurs einschreiben.';
$string['cfg_addinstanceset_head'] = 'Weitere Instanzeinstellungen';
$string['cfg_addinstanceset_head_info'] = 'Weitere Instanzeinstellungen für die Gruppenverwaltung.';
$string['cfg_admin_head'] = 'Standardeinstellungen für die Administration';
$string['cfg_admin_head_info'] = 'Standardeinstellungen für den Administrationstab der Gruppenverwaltung.';
$string['cfg_allow_multiple'] = 'Mehrfache Anmeldungen';
$string['cfg_allow_multiple_desc'] = 'Ermöglicht Teilnehmer/innen sich standardmäßig in mehr als 1 Gruppe zur gleichen Zeit zu befinden.';
$string['cfg_allow_reg'] = 'Selbstanmeldung zulassen';
$string['cfg_allow_reg_desc'] = 'Ermöglicht es Teilnehmer/innen standardmäßig sich selbst anzumelden.';
$string['cfg_allow_unreg'] = 'Abmeldung zulassen';
$string['cfg_allow_unreg_desc'] = 'Erlaubt es Teilnehmer/innen standardmäßig sich selbst, innerhalb der Deadline, von Gruppen ab- und zu anderen Gruppen umzumelden.';
$string['cfg_choose_max'] = 'Maximalanzahl zu wählender Gruppen';
$string['cfg_choose_max_desc'] = 'In wie viele Gruppen sollen Teilnehmer/innen standardmäßig maximal zeitgleich angemeldet sein dürfen?';
$string['cfg_choose_min'] = 'Mindestanzahl zu wählender Gruppen';
$string['cfg_choose_min_desc'] = 'In wie vielen Gruppen sollen Teilnehmer/innen standardmäßig minimal angemeldet sein?';
$string['cfg_force_dereg'] = 'Austragen von Gruppenverwaltung erzwingen';
$string['cfg_force_dereg_desc'] = 'Aktivieren Sie das Häkchen, wenn Sie Teilnehmer/innen sowohl von der Moodle Standardgruppe als auch von der ausgewählten Gruppe der Gruppenverwaltung austragen möchten.';
$string['cfg_force_importreg'] = 'Erzwinge Anmeldung in der Gruppenverwaltung';
$string['cfg_force_importreg_desc'] = 'Erzwingt die Anmeldung innerhalb der Gruppenverwaltungsinstanz für Teilnehmer/innen, die via Gruppenverwaltung in Moodle-Gruppen importiert wurden.';
$string['cfg_groups_queues_limit'] = 'Wartelistenplätze je Gruppe';
$string['cfg_groups_queues_limit_desc'] = 'Gibt an wie viele Teilnehmer/innen standardmäßig zeitgleich in der Warteliste einer Gruppe gereiht sein dürfen.';
$string['cfg_grpsize'] = 'Allgemeine Standardgruppengröße';
$string['cfg_grpsize_desc'] = 'Standardgruppengröße, die überall in der Gruppenverwaltung verwendet wird';
$string['cfg_ifgroupdeleted'] = 'Bei Gruppenlöschung';
$string['cfg_ifgroupdeleted_desc'] = 'Sollen in Moodle gelöschte Gruppen standardmäßig für die jeweiligen Instanzen wiederhergestellt oder aus den jeweiligen Instanzen (inkl. aller Anmeldungen & Wartelisten in der Gruppenverwaltung, etc.) entfernt werden? Man beachte: Wenn „Gruppe erneut erstellen“ ausgewählt wurde, werden die Gruppen unmittelbar nach dem Löschvorgang unter „Kurs-Administration / Teilnehmer/innen / Gruppe“ wiederhergestellt.';
$string['cfg_ifmemberadded'] = 'Bei hinzugefügtem Gruppenmitglied';
$string['cfg_ifmemberadded_desc'] = 'Sollen neue Gruppenmitglieder standardmäßig auch in der Gruppenverwaltung hinzugefügt oder ignoriert werden?';
$string['cfg_ifmemberremoved'] = 'Bei gelöschtem Gruppenmitglied';
$string['cfg_ifmemberremoved_desc'] = 'Sollen Anmeldungen entfernter Gruppenmitglieder innerhalb der Gruppenverwaltungen standardmäßig gelöscht oder ignoriert werden?';
$string['cfg_immediate_reg'] = 'Sofortige Anmeldung';
$string['cfg_immediate_reg_desc'] = 'Soll jede Anmeldung automatisch zu den Moodle-Gruppen durchgereicht werden?';
$string['cfg_importfields'] = 'Vergleichsfelder für Import und Abmeldung';
$string['cfg_importfields_desc'] = 'Gibt an mit welchen Feldern der Teilnehmer/innen-Tabelle beim Import/ beim Austragen verglichen werden soll. Die Felder werden sequenziell durchsucht, bis möglichst genau ein einziger Treffer gefunden wurde. Mögliche/Sinnvolle Werte sind z.B.: username, idnumber, email. ACHTUNG: es erfolgt keine Kontrolle auf richtige Schreibweise. Erlaubte Zeichen: a-z, A-Z und \',\'';
$string['cfg_instance_head'] = 'Standard-Instanz-Einstellungen';
$string['cfg_instance_head_info'] = 'Standardeinstellungen für neue Gruppenverwaltungsinstanzen.';
$string['cfg_max_queues'] = 'Max. Wartelistenplätze pro Teilnehmer/in';
$string['cfg_max_queues_desc'] = 'Gibt an in wie vielen Gruppen Teilnehmer/innen standardmäßig zeitgleich in der Warteliste gereiht sein dürfen.';
$string['cfg_moodlesync_head'] = 'Synchronisationsverhalten';
$string['cfg_moodlesync_head_info'] = 'Wie sich die Gruppenverwaltungsinstanz bei hinzugefügten/gelöschten Mitgliedern/Gruppen in Moodle verhalten soll';
$string['cfg_name_scheme'] = 'Standard-Namensschema';
$string['cfg_name_scheme_desc'] = 'Standard-Namensschema für Gruppenerzeugung';
$string['cfg_show_add_info'] = 'Zusätzliche Gruppeninformationen in der Selbstanmeldung anzeigen';
$string['cfg_show_add_info_desc'] = 'Zusätzliche Informationen von Moodle-Gruppen wie Beschreibungen oder Bilder bei der Anmeldung anzeigen';
$string['cfg_show_members'] = 'Zeige Gruppenmitglieder';
$string['cfg_show_members_desc'] = 'Gibt an ob Gruppenmitglieder standardmäßig angezeigt werden sollen';
$string['cfg_use_individual'] = 'Unterschiedliche Gruppengrößen festlegen';
$string['cfg_use_individual_desc'] = 'Gibt an, ob standardmäßig eine individuelle Größe pro Gruppe definiert werden soll.';
$string['cfg_use_queue'] = 'Wartelisten verwenden';
$string['cfg_use_queue_desc'] = 'Gibt an, ob standardmäßig Wartelisten bei überfüllten Gruppen verwendet werden sollen';
$string['cfg_use_size'] = 'Begrenze Gruppengrößen';
$string['cfg_use_size_desc'] = 'Gibt an, ob standardmäßig nur begrenzte Plätze pro Gruppe verfügbar sein sollen.';
$string['cfg_users_queues_limit'] = 'Wartelistenplätze je Teilnehmer/in';
$string['cfg_users_queues_limit_desc'] = 'Gibt an in wie vielen Gruppen Teilnehmer/innen standardmäßig zeitgleich in der Warteliste gereiht sein dürfen.';
$string['change_group'] = 'Gruppe wechseln';
$string['change_group_to'] = 'Soll mit Gruppenwechsel zu <strong>{$a->groupname}</strong> fortgefahren werden?';
$string['change_group_to_success'] = 'Gruppenwechsel erfolgreich! <strong>{$a->username}</strong> ist nun in der Gruppe <strong>{$a->groupname}</strong> registriert!';
$string['changes_saved'] = 'Änderungen gespeichert';
$string['checkbox_control_header'] = 'Gruppen/Gruppierungen auswählen';
$string['checkbox_control_header_help'] = '<p>Mit dieser Funktion können Sie gezielt Gruppen aus einer/ mehreren Gruppierung(en) in Ihrer Gruppenverwaltung aktivieren oder deaktivieren:
<ol>
    <li>Wählen Sie im Auswahlfeld zwischen den Varianten "Alle" (d.h. es werden alle enthaltenen Gruppen aktiviert/deaktiviert ) bzw. eine Gruppierung oder wahlweise mehrere Gruppierungen (mit dem kleinen Icon daneben auf Multiselect-umschalten und mit Strg + Klick auswählen).</li>
    <li>Nutzen Sie eine der drei Optionen "Selektieren/Deselektieren/Invertieren":
        <ul>
            <li><b>Selektieren:</b> Die Gruppe(n) der ausgewählten Gruppierung(en) aus dem Auswahlfeld wird/ werden aktiviert.</li>
            <li><b>Deselektieren:</b> Die Gruppe(n) der ausgewählten Gruppierung(en) aus dem Auswahlfeld wird/ werden deaktiviert. </li>
            <li><b>Invertieren:</b> Es werden alle Gruppen der nicht ausgewählten Gruppierung(en) aus dem Auswahlfeld markiert. </li>
        </ul>
    </li>
    <li>Übernehmen Sie Ihre Auswahl über Klick auf die Schaltfläche "Start".</li>
</ol></p>';
$string['choose'] = 'Auswählen...';
$string['choose_group'] = 'Sie müssen eine Zielgruppe auswählen!';
$string['choose_max'] = 'Maximalanzahl zu wählender Gruppen';
$string['choose_max_text'] = 'Sie dürfen nicht mehr als <strong>{$a}</strong> Gruppe(n) auswählen!';
$string['choose_min'] = 'Mindestanzahl zu wählender Gruppen';
$string['choose_min_max_text'] = 'Sie müssen zwischen <strong>{$a->min}</strong> und <strong>{$a->max}</strong> Gruppen auswählen!';
$string['choose_min_text'] = 'Sie müssen mindestens <strong>{$a}</strong> Gruppe(n) auswählen!';
$string['choose_minmax_title'] = 'Gruppenanzahl';
$string['choose_targetgroup_import'] = 'Import in Gruppe(n)';
$string['choose_targetgroup_unregister'] = 'Austragen aus Gruppe(n)';
$string['chooseactivity'] = 'Sie müssen eine Aktivität auswählen, bevor Daten angezeigt werden können!';
$string['completiondetail:register'] = 'Anmelden in Gruppen: {$a}';
$string['completionregister'] = 'Teilnehmer/in muss in Gruppen angemeldet sein:';
$string['condition_prevent_access'] = 'Die derzeitigen Umstände erlauben Ihnen keinen Zugriff auf die Gruppenverwaltung!';
$string['confirm_delete'] = 'Sie sind dabei, diese Gruppe komplett zu löschen. Dies wird alle bisherigen Mitglieder unwiederbringlich aus der Gruppe entfernen. Sind Sie SICHER, dass Sie fortfahren möchten?';
$string['confirm_delete_title'] = 'Wollen Sie dieses Element wirklich löschen?';
$string['copied_grade_feedback'] = 'Gruppenbewertung<br />
+Abgabe von: <strong>{$a->student}</strong><br />
+Note von: <strong>{$a->teacher}</strong><br />
+Original Datum/Zeit: <strong>{$a->date}</strong><br />
+Kommentar: <strong>{$a->feedback}</strong>';
$string['copy'] = 'Übertragen';
$string['copy_chosen'] = 'Übertrage Gewählte';
$string['copy_grade_confirm'] = 'Sind Sie sich wirklich SICHER?';
$string['copy_grade_overwrite_confirm'] = 'Sind Sie sich wirklich SICHER? Existierende Bewertungen werden überschrieben!';
$string['copy_grades_confirm'] = 'Sind Sie sich wirklich SICHER?';
$string['copy_grades_errors'] = 'Zumindest 1 Fehler trat während des Übertragens der Bewertungen auf:';
$string['copy_grades_overwrite_confirm'] = 'Sind Sie sich wirklich SICHER? Existierende Bewertungen werden überschrieben!';
$string['copy_grades_success'] = 'Die folgenden Bewertungen wurden erfolgreich aktualisiert:';
$string['copy_refgrades_feedback'] = 'Referenzbewertungen und Kommentar der gewählten Gruppen auf andere Gruppenmitglieder übertragen';
$string['copygrade'] = 'Bewertung kopieren';
$string['could_not_add'] = 'Konnte <strong>{$a->username}</strong> nicht zu Gruppe <strong>{$a->groupname}</strong> hinzufügen!';
$string['couldnt_move_down'] = 'Gruppe konnte nicht nach unten verschoben werden!';
$string['couldnt_move_up'] = 'Gruppe konnte nicht nach oben verschoben werden!';
$string['createGroups'] = 'Gruppen erstellen';
$string['create_1_person_groups'] = '1-Personen-Gruppen erstellen';
$string['create_1_person_groups_help'] = '1-Personen-Gruppen erzeugen - Hier wird für jede/n ausgewählte/n Teilnehmer/in eine Gruppe erzeugt. Zusätzlich zu # und @ können Sie hier folgende Tags für das Namensschema benutzen:
<ul>
<li>[username] - der Benutzername</li>
<li>[firstname] - der Vorname</li>
<li>[lastname] - der Familienname</li>
<li>[idnumber] - die ID-Nummer</li>
</ul>
Wenn Daten für eine/n Teilnehmer/in nicht vorhanden sind, wird der Tag durch TagnameXX ersetzt (wobei XX für die laufende Gruppennummer steht).';
$string['create_assign_groupings'] = 'Gruppierungen erstellen/zuweisen';
$string['create_fromto_groups'] = 'Gruppen von X bis Y erstellen (z.B. von 34 bis 89), <strong>ohne automatische Zuordnung</strong> von Mitgliedern.';
$string['create_fromto_groups_help'] = 'Erzeuge Gruppen in einem bestimmten Intervall (z.B. von 34 bis 89) - Mit diesem Modus ist es möglich (fehlende) Gruppen nachträglich zu erzeugen (z.B. Gruppe 4, Gruppe 5, Gruppe 6). Hierfür müssen einfach die Grenzen (von-bis) eingetragen werden und angegeben werden wie viele Stellen für kleine Zahlen genutzt werden sollen (werden mit führenden Nullen aufgefüllt, z.B. 1, 01, 001 oder 0001...). Mittels der "Mitgliederanzahl M" können Sie eine individuelle Gruppengröße einstellen.  Dabei wird <strong>keine automatische Zuordnung</strong> von Mitgliedern vorgenommen.';
$string['create_groupings_confirm'] = 'Gruppierungen erstellen, wie in der Vorschau gezeigt?';
$string['create_groupings_confirm_problem'] = 'Zumindest 1 Fehler ist aufgetreten (siehe Vorschau)!';
$string['create_groups_confirm'] = 'Gruppen erstellen, wie in der Vorschau gezeigt?';
$string['create_groups_confirm_problem'] = 'Beim Versuch die neuen Gruppen anhand des vorgegebenen Namenschemas anzulegen sind Konflikte aufgetreten - siehe Vorschau - Moodle Gruppen müssen eineindeutige Namen haben. Der Konflikt kann an bereits bestehenden Gruppen mit gleichem Namen oder einem Syntaxfehler im Namensschema (z.B. leer, fehlendes #-Symbol, ...) liegen.';
$string['create_n_m_groups'] = 'N Gruppen mit M Mitgliedern erstellen, <strong>ohne automatische Zuordnung</strong> von Mitgliedern.';
$string['create_n_m_groups_help'] = 'N Gruppen mit M Mitgliedern erstellen - Erstellen Sie mit diesem Modus eine bestimmte Anzahl von Gruppen (N Gruppen) mit Platz für eine bestimmte Zahl an Mitgliedern (M), z.B.: sieben Gruppen, mit Platz für jeweils drei Mitglieder. Dabei wird <strong>keine automatische Zuordnung</strong> von Mitgliedern vorgenommen.';
$string['createinsertgrouping'] = 'Zu Gruppierung hinzufügen';
$string['deactivated_group'] = 'Gruppe deaktiviert';
$string['deactivated_groups'] = 'Gruppen deaktiviert!';
$string['define_amount_groups'] = 'Gruppenanzahl N festlegen';
$string['define_amount_groups_help'] = 'Definiere Gruppenanzahl N - Es wird ausgewählt aus welcher Rolle Teilnehmer/innen für die Gruppenerzeugung benutzt werden sollen und die gewünschte Anzahl an Gruppen im Textfeld angegeben. Im Namenschema wird das Schema für die Gruppennamen angegeben. Dabei können folgende Tags verwendet werden:
<ul>
<li># (wird durch die Gruppennummer ersetzt)</li>
<li>@ (wird durch eine Buchstabenrepräsentation der Gruppennummer ersetzt)</li>
</ul>
Die betroffenen Teilnehmer/innen werden automatisch auf die angegebene Anzahl an Gruppen verteilt.';
$string['define_amount_members'] = 'Mitgliederanzahl M festlegen';
$string['define_amount_members_help'] = 'Definiere Mitgliederanzahl M - Hier werden die ideale Gruppenmitgliedsanzahl sowie Namensschema und Rolle für die Teilnehmer/innen-auswahl angegeben. Die benötigte Gruppenanzahl wird automatisch errechnet. Wahlweise können kleine Gruppen (entspricht weniger als 70 % Füllung) auf die anderen Gruppen aufgeteilt werden.';
$string['delete_reference'] = 'Lösche aus der Gruppenverwaltung';
$string['description'] = 'Beschreibung';
$string['deselect'] = 'Deselektieren';
$string['determinismerror'] = 'Das Anmeldeende, darf nicht vor dem Anmeldebeginn oder in der Vergangenheit liegen!';
$string['digits'] = 'Mindestanzahl Stellen';
$string['disabled'] = 'Deaktiviert';
$string['drag'] = 'Verschieben';
$string['due'] = 'Gruppenverwaltung Deadline';
$string['duedate'] = 'Anmeldeende';
$string['duedate_help'] = 'Ende des Anmeldezeitraums. Nach diesem Datum können sich Teilnehmer/innen nicht mehr selbstständig anmelden und Trainer/innen erhalten u.a. Zugriff auf die Wartelistenauflösung.';
$string['duedateno'] = 'Keine Deadline';
$string['early'] = '{$a} rechtzeitig';
$string['error_activating_group'] = 'Fehler beim Aktivieren der Gruppe <strong>{$a->groupid}</strong> in der Gruppenverwaltung <strong>{$a->grouptoolid}</strong>!';
$string['error_at'] = 'Fehler bei';
$string['error_deactivating_group'] = 'Fehler beim Deaktivieren der Gruppe <strong>{$a->groupid}</strong> in der Gruppenverwaltung <strong>{$a->grouptoolid}</strong>!';
$string['error_getting_data'] = 'Fehler beim Auslesen der Gruppendaten! Entweder keine oder mehrere Gruppen wurden zurückgegeben!';
$string['error_saving_new_order'] = 'Fehler, beim Speichern der neuen Reihenfolge für Gruppen: <strong>{$a}</strong>';
$string['eventagrpcreated'] = 'Aktive Gruppe erstellt';
$string['eventagrpdeleted'] = 'Aktive Gruppe gelöscht';
$string['eventagrpsupdated'] = 'Aktive Gruppen aktualisiert';
$string['eventdequeuingstarted'] = 'Wartelistenauflösung gestartet';
$string['eventgroupcreationstarted'] = 'Gruppenerstellung gestartet';
$string['eventgroupgraded'] = 'Gruppe benotet';
$string['eventgroupingscreated'] = 'Gruppierungen erstellt';
$string['eventgrouprecreated'] = 'Gruppe wiedererstellt';
$string['eventoverviewexported'] = 'Exportierte Überblick';
$string['eventqueueentrycreated'] = 'Wartelisteneintrag erstellt';
$string['eventqueueentrydeleted'] = 'Wartelisteneintrag gelöscht';
$string['eventregistrationcreated'] = 'Anmeldung erstellt';
$string['eventregistrationdeleted'] = 'Anmeldung gelöscht';
$string['eventregistrationpushstarted'] = 'Registrierungsübertragung gestartet';
$string['eventuserimported'] = 'Teilnehmer/innen importiert';
$string['eventuserlistexported'] = 'Exportierte Teilnehmer/innenliste';
$string['eventusermoved'] = 'Teilnehmer/in verschoben';
$string['exceedgroupqueuelimit'] = 'Wartelistengröße der Gruppe überschritten!';
$string['exceedgroupsize'] = 'Gruppengröße überschritten!';
$string['exceeduserqueuelimit'] = 'Maximale Anzahl der Wartelistenplätze der Teilnehmerin/ des Teilnehmers überschritten!';
$string['exceeduserreglimit'] = 'Maximale Anzahl an Anmeldungen der Teilnehmerin/ des Teilnehmers überschritten!';
$string['feedbackplural'] = 'Rückmeldungen';
$string['filters_legend'] = 'Filtere Daten';
$string['filterunoccupied'] = 'Nur Gruppen mit freien Plätzen anzeigen';
$string['followchanges'] = 'Folge Änderungen';
$string['forceregistration'] = 'Anmeldung in Gruppenverwaltung erzwingen';
$string['forceregistration_help'] = 'Beachten Sie, dass die Gruppen der Gruppenverwaltung sich grundlegend von den Moodle Standardgruppen des Kurses unterscheiden. Aktivieren Sie das Häckchen, wenn Sie Teilnehmer/innen sowohl in die Moodle Standardgruppe als auch in die ausgewählte Gruppe der Gruppenverwaltung importieren möchten.';
$string['found_multiple'] = 'Kann Teilnehmer/in nicht einwandfrei identifizieren, mehrere Treffer:';
$string['free'] = 'Frei';
$string['fromgttoerror'] = 'Bis-Wert muss größer oder gleich dem Von-Wert sein';
$string['fullgroup'] = 'Gruppe ist voll';
$string['general_information'] = 'Allgemeine Informationen';
$string['general_registration_exception'] = 'Eine allgemeine Anmeldungs-Ausnahme trat auf und wir können den Fehler nicht automatisch näher bestimmen.!';
$string['global_userstats'] = '<strong>{$a->reg_users}</strong> von <strong>{$a->users}</strong> Teilnehmer/innen sind angemeldet. <strong>{$a->notreg_users}</strong> (noch) ohne Anmeldung.';
$string['grading'] = 'Bewertung';
$string['grading_activity_title'] = 'Aktivität';
$string['grading_alt'] = 'Werkzeuge zum Kopieren von Bewertungen von 1 Gruppenmitglied zu (allen) anderen Gruppenmitgliedern entweder für 1 oder mehrere Gruppen.';
$string['grading_filter_select_title'] = 'Gruppe(n)';
$string['grading_filter_select_title_help'] = 'Auswählen welche Gruppe bzw. Gruppen bearbeitet werden:<ul><li>konfliktfrei - Alle Gruppen, bei denen nur 1 Gruppenmitglied eine Bewertung für die ausgewählte Aktivität erhalten hat.</li><li>Alle - Alle Gruppen</li><li>"Gruppenname" - nur die jeweils ausgewählte Gruppe</li></ul>';
$string['grading_grouping_select_title'] = 'Nach Gruppierung filtern';
$string['group_administration'] = 'Gruppen verwalten';
$string['group_administration_alt'] = '(aktive) Gruppen und Gruppierungen verwalten';
$string['group_assign_error'] = 'Kann nicht zu Gruppe hinzufügen!';
$string['group_assign_error_prev'] = 'Kann nicht zu Gruppe hinzufügen!';
$string['group_creation'] = 'Gruppen erstellen';
$string['group_creation_alt'] = 'Gruppen erstellen';
$string['group_creation_failed'] = 'Gruppenerstellung fehlgeschlagen!';
$string['group_creation_success'] = 'Gruppen erfolgreich erstellt!';
$string['group_not_found'] = 'Gruppe <strong>{$a->groupid}</strong> konnte in Gruppenverwaltungsinstanz <strong>{$a->grouptoolid}</strong> nicht gefunden werden!';
$string['group_not_in_grouping'] = 'Gewählte Gruppe ist nicht in gewählter Gruppierung!';
$string['group_or_member_count'] = 'Gruppen- bzw. Mitgliederanzahl';
$string['group_places'] = 'Gruppenplätze';
$string['group_places_help'] = 'Das Feld "Gruppenplätze" informiert (durch Schrägstrich getrennt) erstens über die Anzahl der gesamt verfügbaren Plätze, zweitens über die Anzahl der freien Gruppenplätze sowie drittens über die Anzahl jener Plätze, die bereits zum Zeitpunkt des Seitenaufrufs belegt waren.';
$string['groupchange_from_non_unique_reg'] = 'Gruppenwechsel nicht möglich, da Ursprungsgruppe nicht eindeutig!';
$string['groupcreation'] = 'Gruppen erstellen';
$string['groupcreationmode'] = 'Modus';
$string['groupfromtodigits'] = 'Von, Bis &amp; Stellen im Namen:';
$string['groupinfo'] = 'Gruppeninformationen';
$string['grouping_assign_error'] = 'Konnten nicht zur Gruppierung hinzugefügt werden:';
$string['grouping_assign_error_prev'] = 'Können nicht zur Gruppierung hinzugefügt werden:';
$string['grouping_assign_success'] = 'Wurden erfolgreich hinzugefügt:';
$string['grouping_assign_success_prev'] = 'Können erfolgreich hinzugefügt werden:';
$string['grouping_creation_error'] = 'Konnte Gruppierung nicht anlegen!';
$string['grouping_creation_error_prev'] = 'Kann Gruppierung nicht anlegen!';
$string['grouping_creation_only_success'] = 'Gruppierung erfolgreich angelegt!';
$string['grouping_creation_only_success_prev'] = 'Gruppierung kann erfolgreich angelegt werden!';
$string['grouping_creation_success'] = 'Gruppierung erfolgreich angelegt und Gruppe <strong>{$a}</strong> hinzugefügt!';
$string['grouping_creation_success_prev'] = 'Gruppierung kann erfolgreich angelegt und Gruppe <strong>{$a}</strong> hinzugefügt werden!';
$string['grouping_exists_error'] = 'Konnte Gruppierung nicht anlegen, da bereits eine Gruppierung mit diesem Namen existiert!';
$string['grouping_exists_error_prev'] = 'Kann Gruppierung nicht anlegen, da bereits eine Gruppierung mit diesem Namen existiert!';
$string['groupings_created_and_groups_added'] = 'Gruppierung(en) erstellt und Gruppe(n) hinzugefügt!';
$string['groupingscreation'] = 'Gruppierung(en) erstellen/zuweisen';
$string['groupingselect'] = 'Gruppierung für ausgewählte Gruppen';
$string['groupingselect_help'] = 'Gruppierungen für ausgewählte Gruppen erstellen:<ul>
<li>für ausgewählte Gruppen EINE neue gemeinsame Gruppierung anlegen. Name der Gruppierung kann selbst gewählt werden.</li>
<li>für jede ausgewählte Gruppe eine Gruppierung PRO Gruppe anlegen. Name der Gruppierung ist gleich der Name der Gruppe.</li>
<li>ausgewählte Gruppen in eine bestehende Gruppierung hinzufügen.</li></ul>';
$string['groupoverview'] = 'Gruppenübersicht';
$string['groups_created'] = 'Gruppen erfolgreich erstellt!';
$string['groups_queues_limit'] = 'Wartelistenplätze je Gruppe';
$string['groups_queues_limit_help'] = 'Beschränkt - wenn aktiviert - die Anzahl an verfügbaren Wartelistenplätzen je Gruppe';
$string['groupselection'] = 'Gruppenauswahl';
$string['groupselection_help'] = 'Wählen Sie durch Selektieren der jeweiligen Kontrollkästchen jene Gruppen aus, für welche Sie die Übertragung der Referenzbewertungen sowie der Feedbacks durchführen möchten. Im Falle, dass nur 1 Gruppe angezeigt wird, bestimmen Sie die Quelle für den Kopiervorgang durch Auswahl eines der rechts angezeigten Buttons.';
$string['groupsize'] = 'Gruppengröße';
$string['groupsize_gets_enabled'] = 'Wenn Sie fortfahren wird die Gruppengröße automatisch aktiviert. Sie können dies verhindern, indem Sie 0 für <strong>{$a->field}</strong> einstellen.';
$string['groupsize_individual_gets_enabled'] = 'Wenn Sie fortfahren wird die individuelle Gruppengröße automatisch aktiviert. Sie können dies verhindern, indem Sie für <strong>{$a->field}</strong> entweder 0 (um die Gruppengröße gar nicht zu benutzen) oder <strong>{$a->globalsize}</strong> (um die globale Gruppengröße zu nutzen) einstellen!';
$string['groupstatus'] = 'Status';
$string['groupstatus_help'] = 'Der Status der Gruppe ist farbig:<ul><li>Grün - aktive Gruppe. Die Gruppe ist dieser Gruppenverwaltung zugeordnet und steht Teilnehmer/innen (bei aktivierter Selbstanmeldung) zur Anmeldung zur Verfügung.</li><li>Grau - inaktive Gruppe. Die Gruppe wird in dieser Gruppenverwaltung nicht verwendet.</li></ul>Mit Klick auf das Symbol können Sie den Status der Gruppe direkt ändern.';
$string['grouptool'] = 'Gruppenverwaltung';
$string['grouptool:addinstance'] = 'Erstelle eine Gruppenverwaltungsinstanz im Kurs';
$string['grouptool:administrate_groups'] = 'Verwalte (aktive) Gruppen und Gruppierungen';
$string['grouptool:create_groupings'] = 'Erstelle Gruppierungen mit Hilfe der Gruppenverwaltung.';
$string['grouptool:create_groups'] = 'Erstelle Gruppen mit Hilfe der Gruppenverwaltung';
$string['grouptool:export'] = 'Exportiere Gruppen und Anmeldungen zu verschiedenen Formaten';
$string['grouptool:grade'] = 'Kopiere Bewertungen von einem Gruppenmitglied auf andere';
$string['grouptool:grade_own_group'] = 'Kopiere Bewertungen von einem Gruppenmitglied auf andere, sofern die ursprüngliche Bewertung von mir stammt.';
$string['grouptool:move_students'] = 'Verschiebe Teilnehmer/innen in andere Gruppen.';
$string['grouptool:register'] = 'Selbstanmeldung in aktiver Gruppe mit Hilfe der Gruppenverwaltung';
$string['grouptool:register_students'] = 'Melde andere Teilnehmer/innen in aktiven Gruppen unter Zuhilfenahme der Gruppenverwaltung an. (Wird auch zum Auflösen von Wartelisten benötigt)';
$string['grouptool:unregister_students'] = 'Teilnehmer/innen von Gruppen unter Zuhilfenahme der Gruppenverwaltung austragen.';
$string['grouptool:view_description'] = 'Zeige Gruppenverwaltungsbeschreibung';
$string['grouptool:view_groups'] = 'Zeige aktive Gruppen';
$string['grouptool:view_own_registration'] = 'Zeige eigene Registrierung(en) an';
$string['grouptool:view_registrations'] = 'Zeige wer in welcher aktiven Gruppe angemeldet/in der Warteliste gereiht ist.';
$string['grouptool:view_regs_course_overview'] = 'Zeige eine Teilnehmer/innen-Liste mit der Information, wer in welcher aktiven Gruppe angemeldet/in der Warteliste gereiht ist.';
$string['grouptool:view_regs_course_view'] = 'Zeige eine Teilnehmer/innen-Liste mit der Information, wer in welcher aktiven Gruppe angemeldet/in der Warteliste gereiht ist.';
$string['grouptool:view_regs_group_overview'] = 'Zeige eine nach Gruppen gegliederte Liste, wer in welcher aktiven Gruppe angemeldet/in der Warteliste gereiht ist.';
$string['grouptool:view_regs_group_view'] = 'Zeige eine nach Gruppen gegliederte Liste, wer in welcher aktiven Gruppe angemeldet/in der Warteliste gereiht ist.';
$string['grouptoolfieldset'] = 'Instanzeinstellungen';
$string['grouptoolname'] = 'Name der Gruppenverwaltung';
$string['grouptoolname_help'] = 'Der Name der zu erstellenden/bearbeitenden Gruppenverwaltungs-Instanz';
$string['groupuser_import'] = 'Importiere Gruppenmitglieder';
$string['groupuser_unregister'] = 'Gruppenmitglieder austragen';
$string['grp_marked'] = 'Zur Anmeldung markiert';
$string['grpsizezeroerror'] = 'Gruppengröße muss größer oder gleich 1 sein. Buchstaben oder Zeichen sind nicht erlaubt.';
$string['ifgroupdeleted'] = 'Wenn Kursgruppen gelöscht werden';
$string['ifgroupdeleted_help'] = 'Sollen gelöschte Kursgruppen für die Gruppenverwaltung wiederhergestellt oder alle Referenzen (aktive Gruppe/Anmeldungen/Warteliste) gelöscht werden? Man beachte: Wenn „Gruppe erneut erstellen“ ausgewählt wurde, werden die Gruppen unmittelbar nach dem Löschvorgang unter „Kurs-Administration / Teilnehmer/innen / Gruppe“ wiederhergestellt.';
$string['ifmemberadded'] = 'Wenn Mitglieder hinzugefügt werden';
$string['ifmemberadded_help'] = 'Sollen neue Gruppenmitglieder in die aktive Gruppe der Gruppenverwaltung übernommen oder ignoriert werden?';
$string['ifmemberremoved'] = 'Wenn Mitglieder gelöscht werden';
$string['ifmemberremoved_help'] = 'Sollen die Anmeldungen in den aktiven Gruppen gelöscht oder die Änderung ignoriert werden?';
$string['ignorechanges'] = 'Änderungen ignorieren';
$string['ignored_not_found_users'] = 'Zumindest 1 Teilnehmer/in konnte nicht zur Gruppe hinzugefügt werden!';
$string['ignored_not_found_users_unregister'] = 'Zumindest 1 Nutzer/in konnte nicht gefunden werden!';
$string['ignoring_not_found_users'] = 'Zumindest 1 Teilnehmer/in kann nicht gefunden werden! Alle nicht gefundenen Teilnehmer/innen werden ignoriert!';
$string['immediate_reg'] = 'Sofortige Anmeldung';
$string['immediate_reg_help'] = 'Wenn aktiviert, werden An-/Abmeldungen sofort in die Moodle-Gruppen übernommen. Wenn nicht aktiviert, können die Anmeldungen per Knopfdruck in die Moodle-Gruppen übernommen werden!';
$string['import'] = 'Import';
$string['import_conflict_user_queued'] = 'Teilnehmer/in <strong>{$a->fullname}</strong> ist bereits in der Warteliste der Gruppe <strong>{$a->groupname}</strong>!';
$string['import_desc'] = 'Importiere Teilnehmer/innen per Liste von ID-Nummern in bestimmte Gruppe.';
$string['import_in_inactive_group_rejected'] = 'Die Anmeldung im Grouptool wurde für die inaktive Gruppe <strong>{$a}</strong> zurückgewiesen. Aktivieren Sie die Gruppe im Grouptool um die Anmeldung zu ermöglichen.';
$string['import_in_inactive_group_warning'] = 'Achtung: Die Gruppe <strong>{$a}</strong> ist derzeit in der Gruppenverwaltung inaktiv und wird deshalb nicht angezeigt.';
$string['import_progress_completed'] = 'Import abgeschlossen';
$string['import_progress_import'] = 'Importiere Teilnehmer/in';
$string['import_progress_preview_completed'] = 'Importvorschau abgeschlossen';
$string['import_progress_search'] = 'Suche Teilnehmer/in';
$string['import_progress_start'] = 'Starte Import';
$string['import_skipped'] = 'Teilnehmer/in <strong>{$a->fullname}</strong> wurde für Gruppe <strong>{$a->groupname}</strong> übersprungen!';
$string['import_user'] = 'Importieren von <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) in Gruppe <strong>{$a->groupname}</strong> erfolgreich.';
$string['import_user_prev'] = 'Importiere <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) in Gruppe <strong>{$a->groupname}</strong>.';
$string['import_user_problem'] = 'Fehler beim Importieren von <strong>{$a->fullname}</strong> (ID-Nummer: <strong>{$a->idnumber}</strong>) in Gruppe <strong>{$a->groupname}</strong>.';
$string['importbutton'] = 'Teilnehmer/innen hinzufügen';
$string['inactive'] = 'Inaktiv';
$string['inactivegroups'] = 'Inaktive Gruppen';
$string['inactivegroups_hide'] = 'Inaktive Gruppen verbergen';
$string['inactivegroups_show'] = 'Inaktive Gruppen anzeigen';
$string['includedeleted'] = 'auch gelöschte Teilnehmer/Innen';
$string['includedeleted_help'] = 'Wenn aktiviert werden gelöschte Teilnehmer/innen nicht aus der Liste herausgefiltert. Gelöschte Teilnehmer/innen-Accounts können während des Import-Prozesses NICHT automatisch in den Kurs eingeschrieben werden.';
$string['includeonlyactiveenrol'] = 'Nur aktive Einschreibungen einbeziehen';
$string['includeonlyactiveenrol_help'] = 'Diese Option legt fest, dass gesperrte Nutzer/innen keiner Gruppe zugeteilt werden.';
$string['incomplete_only_label'] = 'Zeige nur Gruppen mit fehlenden Bewertungen';
$string['incorrect_tab'] = 'Falsches Register, dieses Register ist nicht verfügbar!';
$string['individual_size_info'] = '* Gruppengröße aus Gruppenverwaltungseinstellungen';
$string['intro'] = 'Beschreibung';
$string['invert'] = 'Invertieren';
$string['landscape'] = 'Querformat';
$string['late'] = '{$a} zu spät';
$string['limit'] = 'beschränken';
$string['loading'] = 'Lade...';
$string['max_queues_reached'] = 'Maximale Wartelistenplätze erreicht!';
$string['max_regs_reached'] = 'Maximale Anmeldungen erreicht!';
$string['maxmembers'] = 'Globale Gruppengröße';
$string['messageprovider:grouptool_moveupreg'] = 'Anmeldung durch Nachrücken in der Warteliste';
$string['missing_source_selection'] = 'Keine Quelle ausgewählt!';
$string['modulename'] = 'Gruppenverwaltung';
$string['modulename_help'] = 'Die Gruppenverwaltung umfasst mehrere Aufgabenbereiche in Verbindung mit Gruppen:<ul><li>Sie erlaubt es Gruppen auf verschiedene Art und Weise (Angabe von Anzahl an Gruppen/Gruppenmitgliedern, 1-Personen-Gruppen) sowie Gruppierungen für jede Kursgruppe zu erzeugen.</li><li>Weiters kann sie benutzt werden um es Teilnehmer/innen zu ermöglichen sich selbst innerhalb eines gewissen Zeitraumes zu Gruppen anzumelden.</li><li>Mit ihrer Hilfe lassen sich Gruppenbenotungen durchführen, d.h. eine Aktivitätsbenotung von einer Teilnehmerin/einem Teilnehmer auf andere Gruppenmitglieder zu übertragen.</li><li>Es ist auch möglich Gruppen schnell zu befüllen, indem Teilnehmer/innen mittels Liste mit Matrikelnummern in eine bestimmte Gruppe importiert werden. Ebenfalls ist auf diese Weise das Austragen von Teilnehmer/innen aus Gruppen möglich.</li><li>Überblick über alle Gruppen sowie deren Anmeldungen/Wartelisten/etc in verschiedene Formate (PDF/XLSX/ODS/TXT) exportierbar.</li><li>Exportierbare Liste aller im Kurs eingeschriebener Teilnehmer/innen mit ihren Gruppenanmeldungen, Wartelistenplätzen, etc. (ebenfalls exportierbar).</li></ul><p>(!) Beachten Sie, dass die Gruppen der Gruppenverwaltung sich grundlegend von den Moodle Standardgruppen des Kurses unterscheiden. Um Konsistenz zwischen den Standardgruppen und den Gruppenverwaltungsgruppen zu bewahren, stellen Sie alle Parameter unter dem Abschnitt „Verhalten bei Änderungen in Moodle-Gruppen“ mit Hilfe des Drop Down Menüs auf „Folge Änderungen“ ein.</p>';
$string['modulenameplural'] = 'Gruppenverwaltungen';
$string['moodlesync'] = 'Verhalten bei Änderungen in Moodle-Gruppen';
$string['moodlesync_help'] = 'Wie sich die Gruppenverwaltung verhalten soll, wenn Gruppenmitglieder/Gruppen in Moodle hinzugefügt/entfernt werden';
$string['moreregsthanpossible'] = 'Die für die Abschlussvefolgung erforderliche Anzahl an Anmeldungen kann nicht höher als die maximal erlaubten Anmeldungen sein.';
$string['move_user'] = 'Verschiebe von Warteliste in Gruppe';
$string['movedown'] = 'Nach unten verschieben';
$string['moveup'] = 'Nach oben verschieben';
$string['multiple'] = 'Gruppenmitglieder verwalten';
$string['multiple_desc'] = 'Multiple Verwaltung von Gruppenmitgliedern über Import und Austragen';
$string['must_specify_groupingname'] = 'Sie müssen einen Namen für die Gruppierung angeben!';
$string['mustbegt0'] = 'Mindestanzahl zu wählender Gruppen muss größer oder gleich 0 sein. Buchstaben oder Zeichen sind nicht erlaubt.';
$string['mustbegtoeqmin'] = 'Muss größer als das oder gleich dem Minimum sein!';
$string['mustbeposint'] = 'Maximalanzahl zu wählender Gruppen muss größer oder gleich 0 sein. Buchstaben oder Zeichen sind nicht erlaubt.';
$string['mygroups_only_label'] = 'Zeige nur Quellen, die ich bewertet habe';
$string['myoverview_registrations_missing'] = 'Anmeldungen fehlen';
$string['name_scheme_tags'] = '<span class="tag firstname">[firstname]</span>
<span class="tag lastname">[lastname]</span>
<span class="tag idnumber">[idnumber]</span>
<span class="tag username">[username]</span>
<span class="tag alpha">@</span>
<span class="tag number">#</span>';
$string['nameschemenotunique'] = 'Gruppennamen, die aus diesem Namensschema erzeugt werden, sind nicht einzigartig (<strong>{$a}</strong>). Bitte wählen Sie ein anderes Namensschema oder benutzen Sie # (laufende Nummer) oder @ (alphabetische Repräsentation) um eindeutige Gruppennamen zu erzeugen.';
$string['namingscheme'] = 'Namensschema';
$string['namingscheme_help'] = '<p>Das Namensschema definiert, wie Gruppen beim Erstellen automatisch benannt werden. </p>
<p>Hierbei ist folgendes zu beachten:<br />
<ol><li>Der Gruppenname muss immer einzigartig in Ihrem Kurs sein (d.h. es können nicht mehrere Gruppen idente Namen tragen).</li>
<li>Sollen mehrere Gruppen hinzugefügt werden, müssen zwingend "Tags" verwendet werden, die die Gruppen eindeutig bezeichnen.</li></ol></p>
<p>Jeder "Tag" wird für die Gruppennamen durch Teilnehmer/innen-Informationen ersetzt. Die Tags in [] sind mit Teilnehmer/innen-Daten verknüpft und die # und @ werden durch eine laufende Nummer bzw. alphabetische Repräsentation dieser ersetzt. Wenn JavaScript aktiviert ist, können Sie durch Klicken auf die Tags, diese dem Namensschema anhängen. Bitte beachten Sie, dass jeder Gruppenname innerhalb des Kurses einzigartig sein muss und ändern Sie bei entsprechenden Problemen das Namensschema!</p>';
$string['no_conflictfree_to_display'] = 'Keine konfliktfreien Gruppen anzuzeigen. Stattdessen alle angezeigt!';
$string['no_data_to_display'] = 'Keine Gruppendaten anzuzeigen!';
$string['no_grades_present'] = 'Keine Bewertungen anzuzeigen';
$string['no_groupmembers_to_display'] = 'Keine Gruppenmitglieder zum Anzeigen vorhanden, stattdessen werden alle Gruppen angezeigt!';
$string['no_groups_to_display'] = 'Keine Gruppe(n) anzuzeigen!';
$string['no_queues_to_resolve'] = 'Keine Warteliste aufzulösen!';
$string['no_registrations'] = 'Keine Anmeldungen';
$string['no_target_selected'] = 'Es wurde kein Ziel für den Kopiervorgang gewählt! Es muss zumindest 1 Ziel gewählt werden!';
$string['no_users_to_display'] = 'Keine Teilnehmer/innen anzuzeigen!';
$string['noaccess'] = 'Sie haben keinen Zugriff auf dieses Modul! Es ist möglich, dass Sie nicht zur richtigen Gruppe gehören.';
$string['nobody_queued'] = 'Keine Wartelisteneinträge';
$string['nodeletion'] = 'Löschen dieser Gruppe ist deaktiviert, da zumindest eine Gruppenverwaltungsinstanz in diesem Kurs eingestellt ist, gelöschte Gruppen wiederherzustellen!';
$string['nogroupingselected'] = 'Es wurde(n) keine Gruppierung(en) ausgewählt!';
$string['nogroups'] = 'In diesem Kurs sind aktuell keine Gruppen vorhanden.';
$string['nogroupsactive'] = 'In dieser Gruppenverwaltung sind aktuell keine aktiven Gruppen vorhanden.';
$string['nogroupschoose'] = 'Zur Gruppenauswahl';
$string['nogroupscreate'] = 'Gruppen erstellen';
$string['nogroupsinactive'] = 'In dieser Gruppenverwaltung sind aktuell keine inaktiven Gruppen vorhanden.';
$string['nogrouptools'] = 'Es gibt keine Gruppenverwaltungen!';
$string['nonconflicting'] = 'Konfliktfrei';
$string['noregistrationdue'] = 'unbeschränkt';
$string['nosmallgroups'] = 'Verhindere kleine Gruppen';
$string['nosmallgroups_help'] = 'Wenn aktiviert, wird sichergestellt, dass jede Gruppe zumindest zu 70% der angegebenen Größe gefüllt ist! Die Teilnehmer/innen der unter Umständen vorhandenen letzten kleineren Gruppe, werden auf die übrigen Gruppen aufgeteilt. Es kann daher vorkommen, dass diese Gruppen mehr Mitglieder als spezifiziert haben!';
$string['not_allowed_to_show_members'] = 'Sie haben keine Berechtigung diese Information anzuzeigen!';
$string['not_graded_by_me'] = 'Von jemand anders bewertet';
$string['not_in_queue_or_registered'] = '<strong>{$a->username}</strong> ist weder in der Gruppe <strong>{$a->groupname}</strong> angemeldet noch in deren Warteliste gereiht.';
$string['not_permitted'] = 'Nicht erlaubt';
$string['not_registered'] = 'Sie sind noch nirgends angemeldet!';
$string['not_synced_reg_present'] = 'nichtsynchronisierte Anmeldungen vorhanden';
$string['notenoughregs'] = 'Minimale Anzahl an Anmeldungen der Teilnehmerin/ des Teilnehmers noch nicht erreicht!';
$string['nothing_to_push'] = 'Nichts zu übernehmen!';
$string['notification:group_recreated'] = 'Die Gruppe <a href="{$a->groupurl}" title="{$a->groupname}">{$a->groupname}</a> wurde durch die Gruppenverwaltung <a href="{$a->grouptoolurl}" title="{$a->grouptoolname}">{$a->grouptoolname}</a> wiederhergestellt, da in dieser Gruppenverwaltung eingestellt wurde, gelöschte Gruppen wiederherzustellen.';
$string['notification:registrations_recreated'] = 'Die Gruppenmitglieder der Gruppe  <a href="{$a->groupurl}" title="{$a->groupname}">{$a->groupname}</a> wurden wiederhergestellt, da in der Gruppenverwaltung <a href="{$a->grouptoolurl}" title="{$a->grouptoolname}">$a->grouptoolname}</a> eingestellt wurde, gelöschte Gruppen wiederherzustellen. Die Gruppe selbst wurde von einer anderen Gruppenverwaltungsinstanz wiederhergestellt.';
$string['nowhere_queued'] = 'Keine Wartelisteneinträge';
$string['number_of_groups'] = 'Gruppenanzahl N';
$string['number_of_members'] = 'Mitgliederanzahl M';
$string['number_of_students'] = 'Anzahl an Teilnehmer/innen';
$string['occupied'] = 'Belegt';
$string['onenewgrouping'] = 'In EINER neuen Gruppierung';
$string['onenewgroupingpergroup'] = 'Eine Gruppierung PRO Gruppe';
$string['open_group_message'] = 'Gruppenmitteilungen öffnen';
$string['orientation'] = 'PDF-Ausrichtung';
$string['outdated'] = 'weicht ab';
$string['overflowwarning'] = 'Wenn Sie fortfahren wird die Gruppengröße in der Instanz <strong>{$a->instancename}</strong> überschritten!';
$string['overview'] = 'Überblick';
$string['overview_alt'] = 'Überblick über Gruppen und deren Anmeldungen';
$string['overview_tab'] = 'Gruppenübersicht';
$string['overview_tab_alt'] = 'Öffne Gruppenübersicht';
$string['overwrite_label'] = 'Überschreibe vorhandene Bewertungen';
$string['place_allocated_in_group_success'] = 'Gruppe <strong>{$a->groupname}</strong> wurde erfolgreich zur Anmeldung markiert';
$string['pluginadministration'] = 'Gruppenverwaltungs Administration';
$string['pluginname'] = 'Gruppenverwaltung';
$string['portrait'] = 'Hochformat';
$string['preview'] = 'Vorschau';
$string['privacy:metadata:agrpid'] = 'ID der Repräsentation der Moodle Gruppe in der jeweiligen Gruppenverwaltung.';
$string['privacy:metadata:enrolexplanation'] = 'Die Gruppenverwaltung schreibt noch nicht eingeschriebene Teilnehmer/innen in den Kurs ein, damit diese beim Import einer Gruppe hinzugefügt werden können.';
$string['privacy:metadata:gradesexplanation'] = 'Die Gruppenverwaltung kann die Bewertungen von Teilnehmer/innen auf deren ganze Gruppe kopieren.';
$string['privacy:metadata:groupexplanation'] = 'Die Gruppenverwaltung verwaltet Mitglieder von Moodle Gruppen.';
$string['privacy:metadata:messageexplanation'] = 'Die Gruppenverwaltung verschickt Nachrichten an Teilnehmer/innen, wenn diese in einer Gruppe angemeldet werden indem sie von der Warteliste nachrücken.';
$string['privacy:metadata:mod_grouptool_group_filter'] = 'Nach welcher Gruppe gefiltert werden soll.';
$string['privacy:metadata:mod_grouptool_mygroups_only'] = 'Sollen nur die eigenen Gruppen berücksichtigt/ angezeigt werden.';
$string['privacy:metadata:modified_by'] = 'Enthält die ID der bearbeitenden Person, falls nicht selbst angemeldet wurde.';
$string['privacy:metadata:queued'] = 'Enthält alle Wartelisteneinträge.';
$string['privacy:metadata:registered'] = 'Enthält alle Anmeldungen und Vormerkungen zur Anmeldung.';
$string['privacy:metadata:timestamp'] = 'Zeitpunkt der letzten Änderung des Datensatzes.';
$string['privacy:metadata:userid'] = 'Teilnehmer-ID';
$string['queue'] = 'Warteliste';
$string['queue_and_multiple_reg_title'] = 'Wartelisten und mehrfache Anmeldungen';
$string['queue_in_group'] = 'Trage <strong>{$a->username}</strong> in Warteliste der Gruppe <strong>{$a->groupname}</strong> ein?';
$string['queue_in_group_success'] = '<strong>{$a->username}</strong> erfolgreich in Warteliste der Gruppe <strong>{$a->groupname}</strong> eingetragen!';
$string['queue_you_in_group'] = 'Wollen Sie in die Warteliste der Gruppe <strong>{$a->groupname}</strong> eingetragen werden?';
$string['queue_you_in_group_success'] = 'Sie wurden erfolgreich in die Warteliste der Gruppe <strong>{$a->groupname}</strong> eingetragen!';
$string['queued'] = 'In Warteliste';
$string['queued_in_group_info'] = '<strong>{$a->username}</strong> in Warteliste von <strong>{$a->groupname}</strong>';
$string['queued_on_rank'] = 'In Warteliste auf Platz #{$a}';
$string['queueing_is'] = 'Wartelisten sind';
$string['queues'] = 'Wartelisten';
$string['queues_max'] = 'Max. gleichzeitige Plätze in Wartelisten je Teilnehmer/in';
$string['queuesgrp'] = 'Wartelisten und maximale Anzahl an Wartelistenplätze';
$string['queuesgrp_help'] = 'Wenn Wartelisten aktiviert sind, werden Teilnehmer/innen, die sich in einer vollen Gruppe anmelden wollen, auf deren Warteliste gesetzt bis sie durch die Abmeldung eines anderen in die Gruppe nachrücken. Nach der Deadline, kann der/die Trainer/in die Wartelisten auflösen, wobei die Gruppen in der Reihenfolge der Sortierung in der Gruppenliste mit den restlichen Wartelisteneinträgen aufgefüllt werden. Man kann die gleichzeitigen Wartelistenplätze für Teilnehmer/innen begrenzen.<br />Begrenzt die gleichzeitig einnehmbaren Plätze in Wartelisten pro Teilnehmer/in in dieser Gruppenverwaltung.';
$string['queuesizeerror'] = 'Wartelistenplätze müssen größer oder gleich 0 sein. Buchstaben oder Zeichen sind nicht erlaubt.';
$string['queuespresent'] = 'Es sind bereits Teilnehmer/innen in Wartelisten eingetragen! Diese werden gelöscht, wenn Sie fortfahren. Speichern Sie erneut um fortzufahren!';
$string['queuespresenterror'] = 'Es sind bereits Teilnehmer/innen in Wartelisten eingetragen. Sie können diese nicht deaktivieren, bis die Wartelisten aufgelöst wurden.';
$string['rank'] = 'Rang';
$string['recreate_group'] = 'Gruppe erneut erstellen';
$string['reference_grade_feedback'] = 'Referenzbewertung / Feedback';
$string['refresh_table_button'] = 'Vorschau aktualisieren';
$string['reg_in_full_group'] = 'Anmeldung von <strong>{$a->username}</strong> in Gruppe <strong>{$a->groupname}</strong> nicht möglich, da diese bereits voll ist!';
$string['reg_not_open'] = 'Die Anmeldung ist derzeit nicht möglich. Vielleicht ist der Anmeldezeitraum vorbei oder es war nie erlaubt.';
$string['reg_you_in_full_group'] = 'Anmeldung in Gruppe <strong>{$a->groupname}</strong> nicht möglich, da diese bereits voll ist!';
$string['register'] = 'Anmelden';
$string['register_in_group'] = 'Sind Sie sicher, dass Sie <strong>{$a->username}</strong> in Gruppe <strong>{$a->groupname}</strong> anmelden möchten?';
$string['register_in_group_success'] = 'Anmeldung von <strong>{$a->username}</strong> in Gruppe <strong>{$a->groupname}</strong> war erfolgreich!';
$string['register_you_in_group'] = 'Sind Sie sicher, dass Sie sich zu Gruppe <strong>{$a->groupname}</strong> anmelden möchten?';
$string['register_you_in_group_success'] = 'Sie wurden erfolgreich in Gruppe <strong>{$a->groupname}</strong> angemeldet!';
$string['register_you_in_group_successmail'] = 'Sie wurden erfolgreich in Gruppe <strong>{$a->groupname}</strong> angemeldet!';
$string['register_you_in_group_successmailhtml'] = 'Sie wurden erfolgreich in Gruppe <strong>{$a->groupname}</strong> angemeldet!';
$string['registered'] = 'Angemeldet';
$string['registered_in_group_info'] = '<strong>{$a->username}</strong> in Gruppe <strong>{$a->groupname}</strong> angemeldet';
$string['registered_on_rank'] = 'Angemeldet auf Platz #{$a}';
$string['registration_missing'] = '1 Anmeldung fehlt';
$string['registration_period_end'] = 'Ende der Anmeldung für';
$string['registration_period_start'] = 'Beginn der Anmeldung für';
$string['registrationdue'] = 'Anmeldeende';
$string['registrationnotification'] = '{$a->course->shortname} -> {$a->modulenameplural} -> {$a->grouptoolname}
----------------------------------------------------------
{$a->message}
----------------------------------------------------------';
$string['registrations'] = 'Anmeldungen';
$string['registrations_missing'] = '{$a} Anmeldungen fehlen';
$string['regpresent'] = 'Teilnehmer/in ist bereits {$a}';
$string['rename_failed'] = 'Umbenennung fehlgeschlagen!';
$string['renamed_group'] = 'Umbenennung erfolgreich!';
$string['require_registration'] = 'Anmeldungen notwendig';
$string['require_registration_help'] = 'Die Aktivität wird als abgeschlossen markiert, wenn Teilnehmer/innen zumindest in der definierten Anzahl von Gruppen angemeldet sind. Registrierungen in Wartelisten werden von der Regel nicht berücksichtigt. Wenn die Zahl höher als 1 ist, muss "Mehrfache Anmeldungen zulassen" aktiviert sein und "Maximalanzahl zu wählender Gruppen" muss höher oder gleich diesem Wert sein.';
$string['reset_agrps'] = 'Setze aktive Gruppen zurück';
$string['reset_agrps_help'] = 'Setzt alle Kursgruppen inaktiv für die Gruppenverwaltungen und löscht jede Registrierung und jeden Wartelisteneintrag in den Gruppenverwaltungen des Kurses!';
$string['reset_queues'] = 'Setze Wartelisten zurück';
$string['reset_queues_help'] = 'Wartelisten werden automatisch gelöscht, wenn aktive Gruppen zurückgesetzt werden.';
$string['reset_registrations'] = 'Setze Anmeldungen zurück';
$string['reset_registrations_help'] = 'Anmeldungen werden automatisch gelöscht, wenn aktive Gruppen zurückgesetzt werden.';
$string['reset_transparent_unreg'] = 'Trage Teilnehmer/innen aus Moodle-Gruppen aus';
$string['reset_transparent_unreg_help'] = 'Melde alle Moodle-Gruppen-Mitglieder ab, wenn Sie in entsprechenden aktiven Gruppen angemeldet sind.';
$string['resize'] = 'Größe ändern';
$string['resized_group'] = 'Gruppengröße geändert!';
$string['resolve_queue'] = 'Wartelisten auflösen';
$string['resolve_queue_legend'] = 'Löse Wartelisten auf';
$string['resolve_queue_title'] = 'Löse Wartelisten auf';
$string['search:activity'] = 'Gruppenverwaltung - Aktivitätsinformation';
$string['select'] = 'Selektieren';
$string['selected'] = 'Ausgewählt';
$string['selectfromcohort'] = 'Mitglieder aus globaler Gruppe wählen';
$string['selectfromgroup'] = 'Mitglieder aus Gruppe wählen';
$string['selectfromgroup_help'] = 'Nur Mitglieder der ausgewählten Gruppe werden neu erstellten Gruppen zugeordnet';
$string['selectfromgrouping'] = 'Mitglieder aus Gruppierung wählen';
$string['selectfromgrouping_help'] = 'Nur Mitglieder der ausgewählten Gruppierung werden neu erstellten Gruppen zugeordnet';
$string['selectmultiple'] = 'Mehrere auswählen';
$string['selectsingle'] = 'Einzelne auswählen';
$string['selfregistration'] = 'Anmeldung';
$string['selfregistration_alt'] = 'Selbstanmeldung zu einer oder mehreren Gruppen';
$string['setactive'] = 'Aktivieren';
$string['setinactive'] = 'Deaktivieren';
$string['settingspage'] = 'Gruppe bearbeiten';
$string['show_members'] = 'Gruppenmitglieder anzeigen';
$string['show_members_help'] = 'Ermöglicht es Teilnehmer/innen (unter gewissen Umständen) zu sehen, wer sich bereits in Gruppen registriert hat.<br />
<ul>
    <li><strong>Nein:</strong> zeige keine Gruppenmitglieder</li>
    <li><strong>Alle - nach Ablauf des Anmeldeendes:</strong> zeige Mitglieder aller Gruppen nach Ablauf des Anmeldeendes</li>
    <li><strong>Nur eigene - nach Ablauf des Anmeldeendes:</strong> zeige die Mitglieder der eigenen Gruppe(n) nach Ablauf des Anmeldeendes</li>
    <li><strong>Nur eigene - nach eigener Anmeldung:</strong> zeige die Mitglieder der eigenen Gruppe(n) nach der Anmeldung</li>
    <li><strong>Ja:</strong> zeige alle Mitglieder der Gruppen</li>
</ul>';
$string['showafterdue'] = 'Alle - nach Ablauf des Anmeldeendes';
$string['showownafterdue'] = 'Nur eigene - nach Ablauf des Anmeldeendes';
$string['showownafterreg'] = 'Nur eigene - nach eigener Anmeldung';
$string['size'] = 'Gruppengröße';
$string['size_grp'] = 'Globale Gruppengrößeneinstellung';
$string['size_grp_help'] = 'Wenn Gruppengröße verwendet wird, wird die maximale Anzahl an Gruppenanmeldungen für jede Gruppe begrenzt (für diese Instanz). Wenn zusätzlich die "individuelle Größe" aktiviert ist, wird die Gruppengröße für jede Gruppe gesondert festgelegt.';
$string['skip_user_import'] = 'Überspringe beim Import';
$string['skipped'] = 'Übersprungen';
$string['sortlist_no_data'] = 'In diesem Kurs sind aktuell keine Gruppen vorhanden.';
$string['source'] = 'Quelle';
$string['source_missing'] = 'Es gibt keine Quellen, von denen kopiert werden kann!';
$string['sources_missing'] = 'Es existiert zumindest 1 Gruppe, bei der keine Quelle ausgewählt wurde!';
$string['start'] = 'Start';
$string['status'] = 'Status';
$string['status_help'] = '<ul>
<li><span style="font-weight:bold">✔</span> angemeldet in Moodle-Gruppe und Gruppenverwaltung</li>
<li><span style="font-weight:bold">?</span> angemeldet in Moodle-Gruppe, nicht aber in der Gruppenverwaltung</li>
<li><span style="font-weight:bold">+</span> angemeldet in der Gruppenverwaltung, nicht aber in Moodle-Gruppe</li>
<li><span style="font-weight:bold">1, 2, 3...</span> auf Warteliste in der Gruppenverwaltung</li>
</ul>';
$string['successfully_deleted_groups'] = 'Gruppen erfolgreich gelöscht!';
$string['swapped_groups'] = 'Gruppen <strong>{$a->a}</strong> (Reihenfolge <strong>{$a->aorder}</strong>) und <strong>{$a->b}</strong> (Reihenfolge <strong>{$a->border}</strong>) wurde getauscht!';
$string['switched_to_all_groups'] = 'Ändere Gruppenfilter zu "Alle"!';
$string['target'] = 'Ziel';
$string['too_many_queue_places'] = 'Kann <strong>{$a->username}</strong> nicht in Warteliste der Gruppe <strong>{$a->groupname}</strong> eintragen, weil <strong>{$a->username}</strong> bereits in zu vielen Wartelisten eingetragen ist!';
$string['too_many_regs'] = 'Teilnehmer/in ist bereits in zu vielen Gruppen angemeldet!';
$string['toolessregspresent'] = 'Zumindest 1 Teilnehmer/in ist in zu wenigen Gruppen angemeldet, daher kann die minimale Anzahl zu wählender Gruppen nicht größer als {$a} eingestellt werden.';
$string['toomanyregs'] = 'Achtung! In mindestens einer der Gruppen wird die eingetragene Gruppengröße bereits überschritten.<br />Bevor Sie die neuen Einstellungen der Gruppengröße speichern können, reduzieren Sie die Anzahl der angemeldeten Teilnehmer/innen in den Gruppen.';
$string['toomanyregspresent'] = 'Zumindest 1 Teilnehmer/in ist in zu vielen Gruppen angemeldet, daher kann die maximale Anzahl zu wählender Gruppen nicht geringer als {$a} eingestellt werden.';
$string['total'] = 'Gesamt';
$string['unqueue'] = 'Aus Warteliste austragen';
$string['unqueue_from_group'] = 'Wirklich mit Austragen von <strong>{$a->username}</strong> aus Warteliste der Gruppe <strong>{$a->groupname}</strong> fortfahren?';
$string['unqueue_from_group_success'] = 'Austragen von <strong>{$a->username}</strong> aus Warteliste der Gruppe <strong>{$a->groupname}</strong> erfolgreich!';
$string['unqueue_you_from_group'] = 'Wollen Sie sich wirklich aus der Warteliste der Gruppe <strong>{$a->groupname}</strong> austragen?';
$string['unqueue_you_from_group_success'] = 'Sie wurden erfolgreich aus der Warteliste der Gruppe <strong>{$a->groupname}</strong> ausgetragen!';
$string['unreg'] = 'Abmelden';
$string['unreg_from_group'] = 'Mit Austragen von <strong>{$a->username}</strong> aus Gruppe <strong>{$a->groupname}</strong> fortfahren?';
$string['unreg_from_group_success'] = 'Austragen von <strong>{$a->username}</strong> aus Gruppe <strong>{$a->groupname}</strong> erfolgreich!';
$string['unreg_is'] = 'Abmeldung';
$string['unreg_not_allowed'] = 'Abmeldung ist nicht gestattet!';
$string['unreg_you_from_group'] = 'Mit Ihrer Abmeldung aus Gruppe <strong>{$a->groupname}</strong> fortfahren?';
$string['unreg_you_from_group_success'] = 'Ihre Abmeldung aus Gruppe <strong>{$a->groupname}</strong> war erfolgreich!';
$string['unregfrommgroups'] = 'Austragen von Gruppenverwaltung erzwingen';
$string['unregfrommgroups_help'] = 'Aktivieren Sie das Häkchen, wenn Sie Teilnehmer/innen sowohl von der Moodle Standardgruppe als auch von der ausgewählten Gruppe der Gruppenverwaltung abmelden möchten.';
$string['unregister'] = 'Austragen';
$string['unregister_conflict_user_not_in_group'] = 'Teilnehmer/in <strong>{$a->fullname}</strong> ist nicht in Gruppe <strong>{$a->groupname}</strong>!';
$string['unregister_desc'] = 'Trage Teilnehmer/innen per Liste von ID-Nummern aus bestimmten Gruppen aus.';
$string['unregister_from_inactive_group_warning'] = 'Achtung: Die Gruppe <strong>{$a}</strong> ist derzeit in der Gruppenverwaltung inaktiv und wird deshalb nicht angezeigt.';
$string['unregister_in_inactive_group_warning'] = 'Achtung: Die Gruppe <strong>{$a}</strong> ist derzeit in der Gruppenverwaltung inaktiv und wird deshalb nicht angezeigt.';
$string['unregister_progress_completed'] = 'Austragen abgeschlossen';
$string['unregister_progress_preview_completed'] = 'Austragenvorschau abgeschlossen';
$string['unregister_progress_start'] = 'Starte Austragen';
$string['unregister_progress_unregister'] = 'Teilnehmer/innen austragen';
$string['unregister_skipped'] = 'Teilnehmer/in <strong>{$a->fullname}</strong> wurde für Gruppe <strong>{$a->groupname}</strong> übersprungen!';
$string['unregister_user'] = 'Abmeldung von <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) aus Gruppe <strong>{$a->groupname}</strong> erfolgreich.';
$string['unregister_user_from_moodle_group'] = 'Abmeldung von <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) aus Moodle-Gruppe <strong>{$a->groupname}</strong> erfolgreich.';
$string['unregister_user_not_in_group'] = 'Teilnehmer/in <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) ist nicht in Gruppe <strong>{$a->groupname}</strong>!';
$string['unregister_user_only_in_moodle_group'] = 'Nutzer/in <strong>{$a->fullname}</strong> ist nur in der Moodle-Gruppe <strong>{$a->groupname}</strong> registriert, aber nicht in der Gruppe der Gruppenverwaltung!';
$string['unregister_user_prev'] = 'Austragen von <strong>{$a->fullname}</strong> (<strong>{$a->idnumber}</strong>) aus Gruppe <strong>{$a->groupname}</strong>.';
$string['unregisterbutton'] = 'Teilnehmer/innen austragen';
$string['update_grouplist_success'] = 'Aktive Gruppen erfolgreich aktualisiert!';
$string['updatemdlgrps'] = 'Anmeldungen in Moodle-Gruppen übertragen';
$string['uptodate'] = 'aktuell';
$string['use_all_or_chosen'] = 'Alle/Ausgewählte';
$string['use_all_or_chosen_help'] = 'Wenn alle ausgewählt, wird eine Gruppierung für jede Kursgruppe erstellt. Bei "Ausgewählte" wird eine Gruppierung nur für in der Liste ausgewählte Gruppen erstellt.';
$string['use_individual'] = 'Benutze individuelle Gruppengrößen';
$string['use_individual_help'] = 'Überschreibe globale Gruppengröße mit individuellen Werten für jede Gruppe. Diese werden per Gruppenliste weiter unten gesetzt.';
$string['use_queue'] = 'Wartelisten verwenden';
$string['use_queue_help'] = 'Teilnehmer/innen können sich selbst für bereits volle Gruppen in einer Warteliste registrieren. Diese Einstellung kann nur verwendet werden, wenn die Selbstanmeldung zugelassen und eine Gruppengröße gesetzt wurde.';
$string['use_size'] = 'Aktivieren';
$string['user'] = 'Nutzer/in';
$string['user_has_too_less_regs'] = 'Abmeldung ist nicht möglich, da Teilnehmer/in <strong>{$a->username}</strong> in zu wenigen Gruppen angemeldet ist!';
$string['user_is_deleted'] = 'Der gefundene Teilnehmer/innen-Account (ID <strong>{$a->id}</strong>, Name <strong>{$a->fullname}</strong>) ist bereits gelöscht. Eine Einschreibung ist deshalb nicht möglich.';
$string['user_move_prev'] = '<strong>{$a->user}</strong> wird von der Warteliste von Gruppe <strong>{$a->from_group}</strong> zur Gruppe <strong>{$a->to_group}</strong> verschoben!';
$string['user_moved'] = '<strong>{$a->user}</strong> wurde von der Warteliste von Gruppe <strong>{$a->from_group}</strong> zur Gruppe <strong>{$a->to_group}</strong> verschoben!';
$string['user_not_found'] = 'Teilnehmer/in <strong>{$a}</strong> wurde nicht gefunden!';
$string['userlist'] = 'Teilnehmer/innenliste';
$string['userlist_alt'] = 'Zeige Liste aller Teilnehmer/innen und deren Anmeldungen. Exportiere Daten über Teilnehmer/innen und deren Gruppen in verschiedene Formate (PDF, plain text, Excel, etc.).';
$string['userlist_help'] = 'Liste von ID-Nummern durch eines oder mehrere der folgenden Zeichen getrennt<ul><li>[,] Beistrich</li><li>[;] Strichpunkt</li><li>[ ] Leerzeichen</li><li>[\\n] Zeilensprung</li><li>[\\r] Wagenrücklauf</li><li>[\\t] Tabulator</li></ul>';
$string['userlist_tab'] = 'Kursübersicht';
$string['userlist_tab_alt'] = 'Öffne Kursübersicht';
$string['users_queues_limit'] = 'Wartelistenplätze je Teilnehmer/in';
$string['users_queues_limit_help'] = 'Beschränkt - wenn aktiviert - die Anzahl an einnehmbaren Wartelistenplätzen je Teilnehmer/in';
$string['users_tab'] = 'Teilnehmer/innen';
$string['users_tab_alt'] = 'Öffne Teilnehmer/innen';
$string['view_registrations'] = 'Anmeldungen anzeigen';
$string['viewmoodlegroups'] = 'Zu den Moodle Gruppen';
$string['with_selection'] = 'Mit Auswahl...';
$string['you_are_already_marked'] = 'Sie haben die Gruppe <strong>{$a->groupname}</strong> bereits erfolgreich zur Anmeldung markiert!';
$string['you_are_already_queued'] = 'Sie sind bereits in der Warteliste von Gruppe <strong>{$a->groupname}</strong>!';
$string['you_are_already_registered'] = 'Sie sind bereits in der Gruppe <strong>{$a->groupname}</strong> registriert!';
$string['you_are_not_in_queue_or_registered'] = 'Sie sind weder in der Gruppe <strong>{$a->groupname}</strong> angemeldet noch in deren Warteliste gereiht.';
$string['you_change_group_to_success'] = 'Ihr Gruppenwechsel war erfolgreich! Sie sind nun in der Gruppe <strong>{$a->groupname}</strong> registriert!';
$string['you_have_too_less_regs'] = 'Eine Abmeldung ist nicht möglich, weil Sie in zu wenigen Gruppen angemeldet sind';
$string['you_have_too_many_queue_places'] = 'Kann Sie nicht in Warteliste der Gruppe <strong>{$a->groupname}</strong> eintragen, weil Sie bereits in zu vielen Wartelisten eingetragen sind!';
$string['your_place_allocated_in_group_success'] = 'Sie haben die Gruppe <strong>{$a->groupname}</strong> erfolgreich zur Anmeldung markiert.';
