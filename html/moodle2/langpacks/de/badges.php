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
 * Strings for component 'badges', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   badges
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aktivitäten';
$string['activate'] = 'Zugriff aktivieren';
$string['activatesuccess'] = 'Zugriff auf die Badges wurde erfolgreich aktiviert.';
$string['addalignment'] = 'Kompetenz hinzufügen';
$string['addbadge'] = 'Badges hinzufügen';
$string['addbadgecriteria'] = 'Kriterium hinzufügen';
$string['addbadge_help'] = 'Wählen Sie alle Badges aus, die als Voraussetzung für dieses Badge hinzugefügt werden sollen. (Mehrfachauswahl möglich)';
$string['addcohort'] = 'Globale Gruppe hinzufügen';
$string['addcohort_help'] = 'Wählen Sie alle globalen Gruppen aus, die als Voraussetzung für dieses Badge hinzugefügt werden sollen. (Mehrfachauswahl möglich)';
$string['addcourse'] = 'Kurse hinzufügen';
$string['addcourse_help'] = 'Wählen Sie alle Kurse, die als Voraussetzung für dieses Badge hinzugefügt werden sollen. (Mehrfachauswahl möglich)';
$string['addcriteria'] = 'Kriterium hinzufügen';
$string['addcriteriatext'] = 'Um mit einem Kriterium für ein Badge zu beginnen, wählen Sie zuerst eine Option aus dem Auswahlmenü.';
$string['addrelated'] = 'Badges zuweisen';
$string['addtobackpack'] = 'Zum Backpack hinzufügen';
$string['adminonly'] = 'Diese Seite ist nur für Administrator/innen erlaubt!';
$string['after'] = 'nach der Verleihung';
$string['aggregationmethod'] = 'Methode der Zusammenfassung';
$string['alignment'] = 'Kompetenz';
$string['all'] = 'Alle';
$string['allmethod'] = 'Alle gewählten Bedingungen sind erfüllt';
$string['allmethodactivity'] = 'Alle gewählten Aktivitäten sind abgeschlossen';
$string['allmethodbadges'] = 'Alle gewählten Badges wurden erworben';
$string['allmethodcohort'] = 'Mitglied in allen gewählten globalen Gruppen';
$string['allmethodcourseset'] = 'Alle gewählten Kurse sind abgeschlossen';
$string['allmethodmanual'] = 'Alle ausgewählten Rollen verleihen den Badge';
$string['allmethodprofile'] = 'Alle gewählten Nutzerprofilfelder sind vollständig';
$string['allowcoursebadges'] = 'Kursbezogene Badges erlauben';
$string['allowcoursebadges_desc'] = 'Diese Option erlaubt, kursbezogene Badges zu erstellen und zu verleihen.';
$string['allowexternalbackpack'] = 'Verbindung zu externen Backpacks erlauben';
$string['allowexternalbackpack_desc'] = 'Diese Option erlaubt Nutzer/innen, die Verbindung zu externen Backpack-Diensten einzurichten und ihre externen Badges anzeigen.

Hinweis: Diese Einstellung sollte deaktiviert sein, wenn die Website aus dem Internet nicht erreichbar ist (z.B. hinter einer Firewall, in einem lokalen Moodle).';
$string['any'] = 'Einer von diesen';
$string['anymethod'] = 'Eine der gewählten Bedingungen ist erfüllt';
$string['anymethodactivity'] = 'Eine der gewählten Aktivitäten ist abgeschlossen';
$string['anymethodbadges'] = 'Einer der gewählten Badges wurde erworben';
$string['anymethodcohort'] = 'Mitglied in mindestens einer der gewählten globalen Gruppen';
$string['anymethodcourseset'] = 'Einer der gewählten Kurse ist abgeschlossen';
$string['anymethodmanual'] = 'Eine der gewählten Rollen verleiht den Badge';
$string['anymethodprofile'] = 'Eines der gewählten Nutzerprofilfelder ist vollständig';
$string['archivebadge'] = 'Möchten Sie den Badge \'{$a}\' löschen, aber verliehene Badges erhalten?';
$string['archiveconfirm'] = 'Löschen und verliehene Badges erhalten';
$string['archivehelp'] = '<p>Mit dieser Option wird der Badge \'zurückgezogen\' und erscheint nicht mehr in der Liste der Badges. Der Badge kann nicht mehr neu erworben werden. Alle diejenigen, die den Badge bereits erworben haben, können ihn weiterhin auf ihrer Profilseite anzeigen und in ihren externen Backpack exportieren.</p><p>Wenn Sie möchten, dass Nutzer/innen ihre erworbenen Badges behalten sollen, müssen Sie diese Option wählen, anstatt den Badge vollständig zu löschen.</p>';
$string['attachment'] = 'Badge an die Mitteilung anhängen';
$string['attachment_help'] = 'Wenn aktiviert, wird ein verliehener Badge zum Download an die E-Mail angehängt. Für die Verwendung dieser Option müssen E-Mail-Anhänge in der \'Website-Administration > Server > E-Mails > Ausgehende E-Mails\' aktiviert sein.';
$string['award'] = 'Badge verleihen';
$string['awardedtoyou'] = 'An mich verliehen';
$string['awardoncron'] = 'Der Zugriff auf die Badges wurde erfolgreich aktiviert. Zu viele Nutzer/innen können dieses Badge jetzt sofort erwerben. Um die Leistung der Website sicherzustellen, wird der Vorgang einige Zeit dauern.';
$string['awards'] = 'Empfänger/innen';
$string['backpackavailability'] = 'Externe Verifizierung der Badges';
$string['backpackavailability_help'] = 'Für die Verifizierung von Badges müssen externe Backpack-Dienste auf die Website zugreifen. Im Moment scheint diese Verbindung nicht möglich zu sein, so dass verliehene Badges der Website nicht von extern verifiziert werden können.

**Warum sehe ich diese Mitteilung?**

Eventuell verhindert eine Firewall, dass jemand von außerhalb zugreifen kann. Möglicherweise ist die Website kennwortgeschützt oder ist nicht über das Internet erreichbar (z.B. ein lokales Moodle).

**Ist das ein Problem?**

Auf einer produktiven Website sollten Sie das Problem lösen. Andernfalls können Nutzer/innen nicht nachweisen, dass ein Badge auf der Website verliehen wurde.

**Was muss ich tun, wenn nicht die gesamte Website öffentlich erreichbar sein soll?**

Die einzige URL, die für die Verifizierung benötigt wird, ist [website]/badges/assertion.php. Wenn die Firewall so konfiguriert ist, dass sie den Zugriff auf dieses Skript erlaubt, funktioniert die Verifizierung von Badges.';
$string['backpackbadges'] = 'Sie haben {$a->totalbadges} Badge(s), angezeigt aus {$a->totalcollections} Collection(s). <a href="mybackpack.php">Backpack konfigurieren</a>.';
$string['backpackcannotsendverification'] = 'Eine Bestätigungsmitteilung konnte nicht gesendet werden.';
$string['backpackconnection'] = 'Verbindung zum Backpack';
$string['backpackconnectioncancelattempt'] = 'Verwenden Sie zum Verbinden eine andere E-Mail-Adresse.';
$string['backpackconnectionconnect'] = 'Zum Backpack verbinden';
$string['backpackconnection_help'] = 'Auf dieser Seite können Sie Verbindungen zu externen Backpack-Diensten konfigurieren. Eine Verbindung zu einem externen Backpack-Dienst erlaubt, externe Badges in Moodle anzuzeigen und in Moodle erworbene Badges in das externe Backpack zu exportieren.

Derzeit wird nur der Backpack-Dienst <a href="http://backpack.openbadges.org">Mozilla OpenBadges Backpack</a> unterstützt. Sie müssen sich erst bei einem externen Backpack-Dienst anmelden, bevor Sie die zugehörige Verbindung konfigurieren können.';
$string['backpackconnectionresendemail'] = 'Bestätigungsmitteilung erneut senden';
$string['backpackconnectionunexpectedresult'] = 'Problem bei der Verbindung zum Backpack. Versuchen Sie es noch einmal.<br><br>Falls dieses Problem dauerhaft besteht, melden Sie sich beim Administrator der Website.';
$string['backpackdetails'] = 'Backpack konfigurieren';
$string['backpackemail'] = 'E-Mail-Adresse';
$string['backpackemail_help'] = 'E-Mail-Adresse, die mit Ihrem Backpack-Dienst verknüpft ist.

Wenn eine Verbindung zum Backpack-Dienst besteht, werden alle Badges dieser Website an diese E-Mail-Adresse zugeordnet.';
$string['backpackemailverificationpending'] = 'Bestätigung ausstehend';
$string['backpackemailverifyemailbody'] = 'Guten Tag,

unter Verwendung Ihrer E-Mail-Adresse wurde von \'{$a->sitename}\' eine neue Verbindung zu Ihrem Badges-Backpack angefordert. Um die Verbindung zu prüfen und zu aktivieren, klicken Sie bitte auf den nachfolgenden Link.

{$a->link}

In den meisten E-Mail-Programmen sollte dieser Link blau und anklickbar sein. Falls das nicht funktioniert, kopieren Sie die Adresse vollständig und fügen Sie sie in die Adresszeile Ihres Webbrowsers ein.

Wenn Sie Hilfe benötigen, wenden Sie sich an die Administrator/innen der Website, {$a->admin}

Ihr E-Learning-Team';
$string['backpackemailverifyemailsubject'] = '{$a}: E-Mail-Bestätigung für Badges-Backpack';
$string['backpackemailverifypending'] = 'Eine Bestätigungsmitteilung wurde an <strong>{$a}</strong> versendet. Klicken Sie auf den Bestätigungslink in der E-Mail, um die Backpack-Verbindung zu aktivieren.';
$string['backpackemailverifysuccess'] = 'Danke für die Bestätigung Ihrer E-Mail-Adresse. Sie sind jetzt mit Ihrem Backpack verbunden.';
$string['backpackemailverifytokenmismatch'] = 'Das Token im angeklickten Link stimmt nicht mit dem gespeicherten Token überein. Prüfen Sie, ob Sie wirklich den Link in der aktuellsten E-Mail angeklickt haben.';
$string['backpackimport'] = 'Importeinstellungen';
$string['backpackimport_help'] = 'Wenn die Verbindung zum Backpack erfolgreich hergestellt ist, können Badges aus Ihrem Backpack auf der Seite \'Meine Badges\' und in Ihrem Nutzerprofil angezeigt werden.

An dieser Stelle können Sie die Badge Collections auswählen, die Sie in Ihrem Profil anzeigen möchten.';
$string['badgedetails'] = 'Grundeinstellungen';
$string['badgeimage'] = 'Bild';
$string['badgeimage_help'] = 'Dieses Bild wird verwendet, wenn der Badge verliehen wird.

Fügen Sie ein Bild hinzu. Das Bild wird quadratisch beschnitten und automatisch auf eine geeignete Größe skaliert.';
$string['badgeprivacysetting'] = 'Privatsphäre für Badges';
$string['badgeprivacysetting_help'] = 'Sie können erworbene Badges in Ihren Nutzerprofil anzeigen lassen. Diese Einstellung legt fest, ob neue Badges automatisch sichtbar werden.

Sie können die Sichtbarkeit eines Badge jederzeit auf der Seite \'Meine Badges\' ändern.';
$string['badgeprivacysetting_str'] = 'Meine Badges automatisch im Nutzerprofil anzeigen';
$string['badges'] = 'Badges';
$string['badgesalt'] = 'Hash-Salt für Empfänger-E-Mail-Adresse';
$string['badgesalt_desc'] = 'Mit Verwendung des Hash können Backpack-Dienste die Empfänger/innen eines Badge bestätigen, ohne deren E-Mail-Adresse zu kennen. Der Hash Salt ist eine zusätzliche Sicherung, die dem Hash hinzugefügt wird. Verwenden Sie für den Salt ausschließlich Ziffern und Buchstaben.

Hinweis: Vermeiden Sie bei der Absicherung der Badge-Verifikation unbedingt, nachträglich den Salt zu ändern, wenn bereits Badges verliehen wurden.';
$string['badgesdisabled'] = 'Badges sind auf dieser Moodle-Site nicht aktiviert.';
$string['badgesearned'] = 'Anzahl der erworbenen Badges: {$a}';
$string['badgesettings'] = 'Einstellungen';
$string['badgestatus_0'] = 'Nicht verfügbar für Nutzer/innen';
$string['badgestatus_1'] = 'Verfügbar für Nutzer/innen';
$string['badgestatus_2'] = 'Nicht verfügbar für Nutzer/innen';
$string['badgestatus_3'] = 'Verfügbar für Nutzer/innen';
$string['badgestatus_4'] = 'Archiviert';
$string['badgestoearn'] = 'Anzahl der verfügbaren Badges: {$a}';
$string['badgesview'] = 'Kursbezogene Badges';
$string['badgeurl'] = 'Link zum verliehenen Badge';
$string['balignment'] = 'Kompetenzen ({$a})';
$string['bawards'] = 'Empfänger/innen ({$a})';
$string['bcriteria'] = 'Kriterien';
$string['bdetails'] = 'Einstellungen';
$string['bendorsement'] = 'Bestätigung';
$string['bmessage'] = 'Mitteilung';
$string['boverview'] = 'Überblick';
$string['brelated'] = 'Zugeordnete Badges ({$a})';
$string['bydate'] = 'abgeschlossen bis';
$string['claim'] = 'Leitsatz (Claim)';
$string['claimcomment'] = 'Kommentar zur Anerkennung';
$string['claimid'] = 'Leitsatz (URL)';
$string['clearsettings'] = 'Einstellungen löschen';
$string['completioninfo'] = 'Dieser Badge wurde verliehen für den Abschluss:';
$string['completionnotenabled'] = 'Die Abschlussverfolgung ist für diesen Kurs nicht aktiviert. Deshalb kann der Kursabschluss nicht als Kriterium zur Verleihung eines Badge verwendet werden. Aktivieren Sie die Abschlussverfolgung in den Kurseinstellungen.';
$string['configenablebadges'] = 'Wenn diese Option aktiviert ist, können Sie Badges erstellen und an Nutzer/innen der Website vergeben.';
$string['configuremessage'] = 'Mitteilung';
$string['connect'] = 'Verbinden';
$string['connected'] = 'Verbunden';
$string['connecting'] = 'Wird verbunden ...';
$string['contact'] = 'Kontakt';
$string['contact_help'] = 'Tragen Sie hier die E-Mail-Adresse des Verleihers des Badge ein.';
$string['copyof'] = 'Kopie von {$a}';
$string['coursebadges'] = 'Badges';
$string['coursebadgesdisabled'] = 'Kursbezogene Badges sind nicht aktiviert.';
$string['coursecompletion'] = 'Teilnehmer/innen müssen diesen Kurs abschließen.';
$string['create'] = 'Neuer Badge';
$string['createbutton'] = 'Badge anlegen';
$string['creatorbody'] = '<p>{$a->user} hat alle Kriterien erfüllt und den den Badge verliehen bekommen. Sie können den Badge auf der Seite {$a->link} ansehen. </p>';
$string['creatorsubject'] = '\'{$a}\' wurde ausgezeichnet!';
$string['criteria_0'] = 'Dieser Badge wird verliehen, wenn ...';
$string['criteria_1'] = 'Aktivitätsabschluss';
$string['criteria_1_help'] = 'Dieses Kriterium ermöglicht es, die Verleihung eines Badge daran zu knüpfen, dass bestimmte Aktivitäten im Kurs abgeschlossen sind.';
$string['criteria_2'] = 'Manuelle Verleihung über eine bestimmte Rolle';
$string['criteria_2_help'] = 'Dieses Kriterium erlaubt es, einen Badge manuell durch Personen zu verleihen, die eine bestimmte Rolle auf der Website oder in einem Kurs haben.';
$string['criteria_3'] = 'Soziale Beteiligung';
$string['criteria_3_help'] = 'Sozial';
$string['criteria_4'] = 'Kursabschluss';
$string['criteria_4_help'] = 'Dieses Kriterium ermöglicht es, dass der Badge an Teilnehmer/innen verliehen wird, die den Kurs abgeschlossen haben. Bei diesem Kriterium können Sie zusätzliche Parameter festlegen, z.B. eine Mindestbewertung, die im Kurs erreicht werden muss, oder ein Datum, an dem der Kurs abgeschlossen wird.';
$string['criteria_5'] = 'Mehrere Kurse abschließen';
$string['criteria_5_help'] = 'Dieses Kriterium ermöglicht es, dass der Badge an Nutzer/innen verliehen wird, die mehrere Kurse abgeschlossen haben. Für jeden dieser Kurse können Sie zusätzliche Parameter festlegen, z.B. eine Mindestbewertung, die im Kurs erreicht werden muss, oder ein Datum, an dem der Kurs abgeschlossen wird.';
$string['criteria_6'] = 'Vervollständigung des Nutzerprofils';
$string['criteria_6_help'] = 'Dieses Kriterium ermöglicht es, die Verleihung eines Badge daran zu knüpfen, dass bestimmte Profilfelder im Nutzerprofil vervollständigt wurden. Das können Standardprofilfelder oder selbst definierte Profilfelder sein.';
$string['criteria_7'] = 'Verliehene Badges';
$string['criteria_7_help'] = 'Der Badge kann nur an Personen verliehen werden, die vorher bereits andere Badges erworben haben.';
$string['criteria_8'] = 'Mitgliedschaft in globaler Gruppe';
$string['criteria_8_help'] = 'Der Badge kann nur an Mitglieder in bestimmten globalen Gruppen verliehen werden.';
$string['criteriacreated'] = 'Kriterium für Badge angelegt';
$string['criteriadeleted'] = 'Kriterium für Badge gelöscht';
$string['criteria_descr'] = 'Nutzer/innen erhalten den Badge, wenn sie folgende Bedingung erfüllen:';
$string['criteria_descr_0'] = 'Nutzer/innen erhalten den Badge, wenn sie <strong>{$a}</strong> folgenden Bedingungen erfüllen:';
$string['criteria_descr_1'] = '<strong>{$a}</strong> folgenden Aktivitäten sind abgeschlossen:';
$string['criteria_descr_2'] = 'Dieser Badge muss von Nutzer/innen mit <strong>{$a}</strong> Rollen verliehen werden:';
$string['criteria_descr_4'] = 'Teilnehmer/innen müssen den Kurs abschließen.';
$string['criteria_descr_5'] = '<strong>{$a}</strong> folgenden Kurse müssen abgeschlossen sein:';
$string['criteria_descr_6'] = '<strong>{$a}</strong> folgenden Nutzerprofilfelder müssen vervollständigt sein:';
$string['criteria_descr_7'] = '<strong>{$a}</strong> aus den folgenden Badges müssen erworben werden:';
$string['criteria_descr_8'] = 'Mitgliedschaft in <strong>{$a}</strong> von folgenden globalen Gruppen ist notwendig:';
$string['criteria_descr_bydate'] = ' bis <em>{$a}</em>';
$string['criteria_descr_grade'] = 'mit minimaler Bewertung von <em>{$a}</em>';
$string['criteria_descr_short0'] = 'Abschließen <strong>{$a}</strong>: ';
$string['criteria_descr_short1'] = 'Abschließen <strong>{$a}</strong>: ';
$string['criteria_descr_short2'] = 'Verliehen durch <strong>{$a}</strong>:';
$string['criteria_descr_short4'] = 'Kurs abschließen';
$string['criteria_descr_short5'] = 'Abschließen <strong>{$a}</strong>: ';
$string['criteria_descr_short6'] = 'Abschließen <strong>{$a}</strong>: ';
$string['criteria_descr_short7'] = 'Abschließen <strong>{$a}</strong>: ';
$string['criteria_descr_short8'] = 'Mitglied in globaler Gruppe <strong>{$a}</strong> von:';
$string['criteria_descr_single_1'] = 'Die folgende Aktivität muss beendet werden:';
$string['criteria_descr_single_2'] = 'Dieser Badge muss von Nutzer/innen mit folgender Rolle verliehen werden:';
$string['criteria_descr_single_4'] = 'Teilnehmer/innen müssen den Kurs abschließen';
$string['criteria_descr_single_5'] = 'Der folgende Kurs muss abgeschlossen werden:';
$string['criteria_descr_single_6'] = 'Das folgende Nutzerprofilfeld muss vervollständigt sein:';
$string['criteria_descr_single_7'] = 'Der folgende Badge muss erworben werden:';
$string['criteria_descr_single_8'] = 'Mitgliedschaft in folgender globaler Gruppe ist notwendig:';
$string['criteria_descr_single_short1'] = 'Abschließen:';
$string['criteria_descr_single_short2'] = 'Verliehen durch:';
$string['criteria_descr_single_short4'] = 'Kurs abschließen';
$string['criteria_descr_single_short5'] = 'Abschließen:';
$string['criteria_descr_single_short6'] = 'Abschließen:';
$string['criteria_descr_single_short7'] = 'Abschließen:';
$string['criteria_descr_single_short8'] = 'Mitglied in:';
$string['criteriasummary'] = 'Zusammenfassung der Kriterien';
$string['criteriaupdated'] = 'Kriterium für Badge aktualisiert';
$string['criterror'] = 'Parameterprobleme';
$string['criterror_help'] = 'Die Übersicht zeigt alle Parameter, die ursprünglich mit diesem Badge verbunden waren, aber nicht mehr verfügbar sind. Diese Parameter sollten deaktiviert werden, damit Nutzer/innen diesen Badge in Zukunft überhaupt erlangen können.';
$string['currentimage'] = 'Aktuelles Bild';
$string['currentstatus'] = 'Aktueller Status';
$string['dateawarded'] = 'Verleihdatum';
$string['dateearned'] = 'Datum: {$a}';
$string['day'] = 'Tag(e)';
$string['deactivate'] = 'Zugriff verhindern';
$string['deactivatesuccess'] = 'Der Zugriff auf den Badge wurde erfolgreich deaktiviert.';
$string['defaultissuercontact'] = 'Kontakt des standardmäßigen Verleihers';
$string['defaultissuercontact_desc'] = 'Tragen Sie hier eine E-Mail-Adresse ein, die standardmäßig mit dem Verleiher von Badges auf der Website verknüpft ist.';
$string['defaultissuername'] = 'Standardmäßiger Verleiher';
$string['defaultissuername_desc'] = 'Tragen Sie hier einen Namen ein, der Verleiher von Badges auf der Website verwendet wird (z.B. den Namen der verleihenden Institution).';
$string['delbadge'] = 'Möchten Sie wirklich den Badge \'{$a}\' und alle verliehenen Instanzen löschen?';
$string['delconfirm'] = 'Löschen und verliehene Badges entfernen';
$string['delcritconfirm'] = 'Möchten Sie dieses Kriterium wirklich löschen?';
$string['deletehelp'] = '<p>Vollständiges Löschen von Badges führt dazu, dass alle verliehenen Badges verschwinden und nicht mehr verfügbar sind. Löschen bedeutet, sie endgültig zu entfernen.</p><p>Hinweis: Wenn Nutzer/innen vor dem Löschen einen Badge exportiert haben, bleibt dieser erhalten. Der Link zur Prüfseite, wo der Badge herkommt, wird jedoch beim Löschen entfernt und kann nicht mehr genutzt werden.</p>';
$string['delparamconfirm'] = 'Möchten Sie diesen Parameter wirklich löschen?';
$string['description'] = 'Beschreibung';
$string['disconnect'] = 'Verbindung aufheben';
$string['donotaward'] = 'Derzeit ist der Badge nicht verfügbar, d.h. er kann nicht an Nutzer/innen verliehen werden. Wenn Sie den Badge verleihen wollen, müssen Sie ihn aktivieren. Klicken Sie dazu auf die Taste \'\'Zugriff erlauben\'\'.';
$string['editsettings'] = 'Einstellungen bearbeiten';
$string['enablebadges'] = 'Badges aktivieren';
$string['endorsement'] = 'Bestätigung';
$string['error:backpackdatainvalid'] = 'Die vom Backpack gelieferten Daten sind ungültig!';
$string['error:backpackemailnotfound'] = 'Die E-Mail \'{$a}\' ist nicht mit einem Backpack verbunden. Sie müssen sich für dieses Konto ein <a href="http://backpack.openbadges.org">Backpack anlegen</a> oder sich mit einer anderen E-Mail-Adresse anmelden.';
$string['error:backpackloginfailed'] = 'Sie konnten nicht mit einem externen Backpack verbunden werden: {$a}';
$string['error:backpacknotavailable'] = 'Die Website ist nicht aus dem Internet erreichbar. Die Badges, die auf dieser Website verliehen werden, können von externen Backpack-Diensten nicht verifiziert werden.';
$string['error:backpackproblem'] = 'Die Verbindung zu Ihrem Backpack-Provider ist fehlgeschlagen. Versuchen Sie es später noch einmal.';
$string['error:badgeawardnotfound'] = 'Der Badge kann nicht verifiziert werden. Möglicherweise wurde er zurückgezogen.';
$string['error:badgenotfound'] = 'Badge nicht gefunden';
$string['error:badjson'] = 'Der Verbindungsversuch hat ungültige Daten geliefert.';
$string['error:cannotact'] = 'Der Badge kann nicht aktiviert werden.';
$string['error:cannotawardbadge'] = 'Der Badge kann nicht an Nutzer/in verliehen werden.';
$string['error:cannotdeletecriterion'] = 'Das Kriterium kann nicht gelöscht werden.';
$string['error:cannotrevokebadge'] = 'Das Badge kann von Nutzer/in nicht zurückgezogen werden.';
$string['error:clone'] = 'Der Badge kann nicht dupliziert werden.';
$string['error:connectionunknownreason'] = 'Die Verbindung ist fehlgeschlagen, aber es wurde kein Grund angegeben.';
$string['error:duplicatename'] = 'Ein Badge mit diesem Namen existiert bereits im System.';
$string['error:externalbadgedoesntexist'] = 'Badge nicht gefunden';
$string['error:guestuseraccess'] = 'Sie sind im Moment als Gast angemeldet. Um Badges zu sehen, müssen Sie sich mit Ihren Nutzerdaten anmelden.';
$string['error:invalidbadgeurl'] = 'Unzugültiges URL-Format. Die URL muss mit http:// oder https:// beginnen.';
$string['error:invalidcriteriatype'] = 'Unzugültiger Kriteriumstyp';
$string['error:invalidexpiredate'] = 'Das Ablaufdatum muss in der Zukunft liegen.';
$string['error:invalidexpireperiod'] = 'Der Ablaufdauer kann nicht negativ oder gleich Null sein.';
$string['error:invalidparambadge'] = 'Der Badge existiert nicht.';
$string['error:invalidparamcohort'] = 'Die globale Gruppe existiert nicht.';
$string['error:noactivities'] = 'In diesem Kurs wurde für keine Aktivität ein Aktivitätsabschluss konfiguriert.';
$string['error:noassertion'] = 'Eine Bestätigung von Persona wurde nicht geliefert. Eventuell haben Sie den Dialog abgebrochen, bevor das Login abgeschlossen war.';
$string['error:nobadges'] = 'Keine Kurs- oder Website-Badges verfügbar, deren Zugriff aktiviert ist, um sie als Kriterium hinzufügen zu können.';
$string['error:nocohorts'] = 'Keine globalen Gruppen';
$string['error:nocourses'] = 'Die Abschlussverfolgung ist für keinen Kurs der Website aktiviert. Deshalb wird kein Kurs zur Auswahl angezeigt. Sie können die Abschlussverfolgung in den Kurseinstellungen aktivieren.';
$string['error:nogroups'] = '<p>Keine öffentlichen Sammlungen von Badges in Ihrem Backpack. </p> <p>Nur öffentliche Sammlungen werden angezeigt, <a href="http://backpack.openbadges.org">gehen Sie zu Ihrem Backpack</a> und legen Sie mindestens eine öffentliche Sammlung an.</p>';
$string['error:nopermissiontoview'] = 'Sie haben kein Recht, Empfänger/innen mit dem Badge zu sehen.';
$string['error:nosuchbadge'] = 'Der Badge mit der ID {$a} existiert nicht.';
$string['error:nosuchcohort'] = 'Warnung: Diese globale Gruppe ist nicht länger verfügbar.';
$string['error:nosuchcourse'] = 'Warnung: Dieser Kurs existiert nicht mehr.';
$string['error:nosuchfield'] = 'Warnung: Dieses Nutzerprofilfeld existiert nicht mehr.';
$string['error:nosuchmod'] = 'Warnung: Diese Aktivität existiert nicht mehr.';
$string['error:nosuchrole'] = 'Warnung: Diese Rolle existiert nicht mehr.';
$string['error:nosuchuser'] = 'Die Person mit dieser E-Mail-Adresse hat kein Nutzerkonto beim aktuellen Backpack-Dienst.';
$string['error:notifycoursedate'] = 'Warnung: Badges, die mit dem Abschluss von Aktivitäten bzw. Kursen verbunden sind, können nicht verliehen werden, bevor der Kurs startet.';
$string['error:parameter'] = 'Warnung: Mindestens ein Parameter sollte gewählt werden, damit die Verleihung des Badge reibungslos funktioniert.';
$string['error:personaneedsjs'] = 'Für die Verbindung zu Ihrem Backpack ist Javascript notwendig. Aktivieren Sie Javascript  in Ihrem Browser und laden Sie die Seite neu.';
$string['error:relatedbadgedoesntexist'] = 'Es gibt für diese ID kein öffentliches Badge';
$string['error:requesterror'] = 'Die Verbindung ist fehlgeschlagen (Fehlercode {$a}).';
$string['error:requesttimeout'] = 'Die Verbindung ist fehlgeschlagen (Timeout).';
$string['error:save'] = 'Der Badge kann nicht gesichert werden.';
$string['error:userdeleted'] = '{$a->user} (Dieses Nutzerkonto wurde in {$a->site} gelöscht)';
$string['eventbadgearchived'] = 'Badge archiviert';
$string['eventbadgeawarded'] = 'Badge verliehen';
$string['eventbadgecreated'] = 'Badge angelegt';
$string['eventbadgecriteriacreated'] = 'Kriterien für Badge angelegt';
$string['eventbadgecriteriadeleted'] = 'Kriterien für Badge gelöscht';
$string['eventbadgecriteriaupdated'] = 'Kriterien für Badge aktualisiert';
$string['eventbadgedeleted'] = 'Badge gelöscht';
$string['eventbadgedisabled'] = 'Badge deaktiviert';
$string['eventbadgeduplicated'] = 'Badge dupliziert';
$string['eventbadgeenabled'] = 'Badge aktiviert';
$string['eventbadgelistingviewed'] = 'Liste der Badges angezeigt';
$string['eventbadgerevoked'] = 'Badge zurückgezogen';
$string['eventbadgeupdated'] = 'Badge aktualisiert';
$string['eventbadgeviewed'] = 'Badge angezeigt';
$string['evidence'] = 'Evidenz';
$string['existingrecipients'] = 'Vorhandene Empfänger/innen';
$string['expired'] = 'Abgelaufen';
$string['expiredate'] = 'Diese  Badge verfällt am {$a}.';
$string['expireddate'] = 'Dieser Badge ist am {$a} verfallen.';
$string['expireperiod'] = 'Dieser Badge verfällt {$a} Tag(e) nach der Verleihung.';
$string['expireperiodh'] = 'Dieser Badge verfällt {$a} Stunde(n) nach der Verleihung.';
$string['expireperiodm'] = 'Dieser Badge verfällt {$a} Minute(n) nach der Verleihung.';
$string['expireperiods'] = 'Dieser Badge verfällt {$a} Sekunde(n) nach der Verleihung.';
$string['expirydate'] = 'Ablaufdatum';
$string['expirydate_help'] = 'Optional können Badges zu einem bestimmten Termin verfallen oder nur eine vorgegebene Zeit nach der Verleihung gültig sein.';
$string['externalbadges'] = 'Meine Badges von anderen Websites';
$string['externalbadges_help'] = 'Dieser Bereich zeigt Badges aus Ihrem externen Backpack.';
$string['externalbadgesp'] = 'Badges von anderen Websites:';
$string['externalconnectto'] = 'Um Ihre externen Badges anzeigen zu können, müssen Sie eine <a href="{$a}">Verbindung zu einem Backpack</a> herstellen.';
$string['fixed'] = 'Fester Termin';
$string['hiddenbadge'] = 'Keine Informationen zum Badge verfügbar';
$string['imageauthoremail'] = 'E-Mail des Bildautors';
$string['imageauthoremail_help'] = 'Wenn angegeben, wird die E-Mail-Adresse des Bildautors auf der Badge-Seite angezeigt.';
$string['imageauthorname'] = 'Name des Bildautors';
$string['imageauthorname_help'] = 'Wenn angegeben, wird der Name des Bildautors auf der Badge-Seite angezeigt.';
$string['imageauthorurl'] = 'Autor des Bildes';
$string['imageauthorurl_help'] = 'Wenn angegeben, wird ein Link zur Website des Bildautors auf der Badge-Seite angezeigt. Die URL muss mit http:// oder https:// beginnen.';
$string['imagecaption'] = 'Bildtitel';
$string['imagecaption_help'] = 'Wenn ein Bildtitel angegeben ist, wird er auf Badge-Seite angezeigt.';
$string['invalidurl'] = 'Ungültige URL';
$string['issuancedetails'] = 'Ablaufdatum';
$string['issuedbadge'] = 'Information zum verliehenen Badge';
$string['issuerdetails'] = 'Verleiher/in';
$string['issueremail'] = 'E-Mail';
$string['issueremail_help'] = 'E-Mail-Kontakt der Organisation, die die Unterstützung liefert.';
$string['issuername'] = 'Verleiher/in';
$string['issuername_endorsement'] = 'Ausstellername';
$string['issuername_endorsement_help'] = 'Name des/der Bestätigenden';
$string['issuername_help'] = 'Tragen Sie hier den Namen des Verleihers oder der verleihenden Institution ein.';
$string['issuerurl'] = 'URL des Verleihers';
$string['issuerurl_help'] = 'Die Website der ausstellenden Organisation. Die URL muss mit http:// oder https:// beginnen.';
$string['language'] = 'Sprache';
$string['language_help'] = 'Sprache, die auf der Badge-Seite verwendet wird.';
$string['localbadges'] = 'Meine Badges von der Website {$a}';
$string['localbadgesh'] = 'Meine Badges von dieser Website';
$string['localbadgesh_help'] = 'Diese Seite zeigt alle Badges, die Ihnen auf dieser Website für den Abschluss von Kursen, Aktivitäten oder anderer Kriterien verliehen wurden.

Sie können für Ihre Badges einstellen, welche in Ihrem Nutzerprofil angezeigt werden sollen und welche nicht.

Sie können alle oder einzelne Badges herunterladen und auf Ihrem Computer speichern. Heruntergeladene Badges können zu externen Backpack-Diensten hinzugefügt werden.';
$string['localbadgesp'] = 'Badges von {$a}:';
$string['localconnectto'] = 'Um die Badges außerhalb dieser Website zu teilen, müssen Sie eine <a href="{$a}">Verbindung zu einem Backpack</a> herstellen.';
$string['makeprivate'] = 'nicht anzeigen';
$string['makepublic'] = 'anzeigen';
$string['managebadges'] = 'Badges verwalten';
$string['message'] = 'Mitteilung';
$string['messagebody'] = '<p>Sie haben den Badge "%badgename%" verliehen bekommen!</p>
<p>Weitere Informationen zu diesem Badge finden Sie unter %badgelink%.</p>
<p>Sie können den Badge über die Seite {$a} verwalten und herunterladen.</p>';
$string['messagesubject'] = 'Glückwunsch! Sie haben einen Badge erworben!';
$string['method'] = 'Dieses Kriterium ist erfüllt, wenn ...';
$string['mingrade'] = 'Mindestbewertung notwendig';
$string['month'] = 'Monat(e)';
$string['mybackpack'] = 'Einstellungen für mein Backpack';
$string['mybadges'] = 'Meine Badges';
$string['never'] = 'Nie';
$string['newbadge'] = 'Neuen Badge anlegen';
$string['newimage'] = 'Neues Bild';
$string['noalignment'] = 'Für diesen Badge sind keine Kompetenzen angegeben.';
$string['noawards'] = 'Dieser Badge wurde bisher nicht verliehen.';
$string['nobackpack'] = 'Mit diesem Nutzerkonto ist kein Backpack-Dienst verbunden.<br/>';
$string['nobackpackbadges'] = 'Kein Badge in der ausgewählten Collection. <a href="mybackpack.php">Weitere Collections hinzufügen</a>.';
$string['nobackpackcollections'] = 'Keine Badge Collection ausgewählt. <a href="mybackpack.php">Collections hinzufügen</a>.';
$string['nobadges'] = 'Keine Badges verfügbar';
$string['nocriteria'] = 'Badge-Kriterien sind bisher nicht festgelegt.';
$string['noendorsement'] = 'Für das Badge wurde keine Bestätigung erteilt.,';
$string['noexpiry'] = 'Dieser Badge hat kein Ablaufdatum.';
$string['noparamstoadd'] = 'Es gibt keine weiteren Parameter, die zu diesem Badge-Kriterium hinzugefügt werden können.';
$string['norelated'] = 'Dieser Badge hat keine zugeordneten Badges.';
$string['notacceptedrole'] = 'Sie haben derzeit keine Rolle, die diesen Badge manuell verleihen darf.<br/>
Personen, die diesen Badge bisher erworben haben, können Sie auf der Seite {$a} sehen.';
$string['notconnected'] = 'Nicht verbunden';
$string['notealignment'] = 'Es können externe Kompetenzen, Fertigkeiten oder Standards festgelegt werden, für die der Badge gilt. Die Kompetenzen werden auf der Badge-Seite angezeigt.';
$string['noteendorsement'] = 'Die Ausstellung über Dritte kann verwendet werden, um dem Badge einen Mehrwert zu verleihen. Beispielsweise ist ein Badge wertvoller, wenn er von einer Institution statt von einer Einzelperson ausgestellt wurde. So ist auch ein Badge bedeutsamer, wenn er von einer überregionalen oder nationalen Organisation statt von einer lokalen Institution ausgestellt wurde.';
$string['noterelated'] = 'Badges mit einer Verbindung können als verwandt gekennzeichnet sein. Beispielsweise können alle Badges mit gleichem Kriterium, die in verschiedenen Sprachen angezeigt werden, als verwandt gekennzeichnet werden. Alle verwandten Badges werden auf der Badge-Seite angezeigt.';
$string['nothingtoadd'] = 'Es sind keine Kriterien verfügbar.';
$string['notification'] = 'Ersteller/in benachrichtigen';
$string['notification_help'] = 'Diese Einstellung legt fest, wie Ersteller/innen benachrichtigt werden, wenn der Badge verliehen wird.

Folgende Optionen sind möglich:

* **Nie**: Keine Nachrichten.

* **Jederzeit**: Nachricht, sobald der Badge verliehen wird.

* **Täglich**: Nachricht einmal täglich.

* **Wöchentlich**: Nachricht einmal wöchentlich.

* **Monatlich**: Nachricht einmal monatlich.';
$string['notifydaily'] = 'Täglich';
$string['notifyevery'] = 'Jederzeit';
$string['notifymonthly'] = 'Monatlich';
$string['notifyweekly'] = 'Wöchentlich';
$string['numawards'] = 'Dieser Badge wurde an <a href="{$a->link}">{$a->count}</a> Person(en) verliehen.';
$string['numawardstat'] = 'Dieser Badge wurde an {$a} Person(en) verliehen.';
$string['overallcrit'] = 'gewählten Kriterien sind erfüllt.';
$string['personaconnection'] = 'Melden Sie sich mit Ihrer E-Mail-Adresse an';
$string['personaconnection_help'] = 'Persona ist ein System, um Personen über Websitegrenzen hinaus über deren E-Mail-Adresse zu identifizieren. Der OpenBadges-Backpack verwendet Persona als Login-System. Um sich mit einem Backpack verbinden zu können, müssen Sie ein Persona-Konto anlegen.

Weitere Information: <a href="https://login.persona.org/about">https://login.persona.org/about</a>.';
$string['potentialrecipients'] = 'Mögliche Empfänger/innen';
$string['preferences'] = 'Badges konfigurieren';
$string['privacy:metadata:backpack'] = 'Datensatz von Nutzer-Backpacks (Badges)';
$string['privacy:metadata:backpack:backpackuid'] = 'Eindeutiger Identifier des Backpacks';
$string['privacy:metadata:backpack:backpackurl'] = 'URL des Backpacks';
$string['privacy:metadata:backpack:email'] = 'E-Mail-Adresse, die mit dem Backpack verbunden ist';
$string['privacy:metadata:backpack:userid'] = 'ID der Person, deren Backpack das ist';
$string['privacy:metadata:badge'] = 'Badge Collection';
$string['privacy:metadata:badge:timecreated'] = 'Zeit, zu der der Badge erstellt wurde';
$string['privacy:metadata:badge:timemodified'] = 'Zeit, zu der der Badge zuletzt bearbeitet wurde';
$string['privacy:metadata:badge:usercreated'] = 'ID der Person, die den Badge erstellt hat';
$string['privacy:metadata:badge:usermodified'] = 'ID der Person, die den Badge bearbeitet hat';
$string['privacy:metadata:criteriamet'] = 'Liste von Kriterien, die erreicht wurden';
$string['privacy:metadata:criteriamet:datemet'] = 'Das Datum, an dem das Kriterium erfüllt wurde';
$string['privacy:metadata:criteriamet:userid'] = 'ID der Person, die die Kriterien erfüllt hat';
$string['privacy:metadata:external:backpacks'] = 'Geteilte Daten, wenn eine Person Ihre Badges an ein externes Backpack überträgt';
$string['privacy:metadata:external:backpacks:badge'] = 'Name des Badge';
$string['privacy:metadata:external:backpacks:description'] = 'Beschreibung des Badge';
$string['privacy:metadata:external:backpacks:image'] = 'Bild des Badge';
$string['privacy:metadata:external:backpacks:issuer'] = 'Information zum Verleiher';
$string['privacy:metadata:external:backpacks:url'] = 'Moodle-URL, unter der verliehene Badge angezeigt werden kann';
$string['privacy:metadata:issued'] = 'Liste der ausgestellten Badges';
$string['privacy:metadata:issued:dateexpire'] = 'Zeit, zu der der Badge abläuft';
$string['privacy:metadata:issued:dateissued'] = 'Zeitpunkt der Verleihung';
$string['privacy:metadata:issued:userid'] = 'ID der Person, die den Badge erworben hat';
$string['privacy:metadata:manualaward'] = 'Liste manuell verliehener Badges';
$string['privacy:metadata:manualaward:datemet'] = 'Zeit, zu der der Badge verliehen wurde';
$string['privacy:metadata:manualaward:issuerid'] = 'ID der Person, die den Badge verleiht';
$string['privacy:metadata:manualaward:issuerrole'] = 'Rolle der Person, die den Badge verleiht';
$string['privacy:metadata:manualaward:recipientid'] = 'ID der Person, die den Badge manuell verliehen bekommen hat';
$string['recipientdetails'] = 'Empfängerdetails';
$string['recipientidentificationproblem'] = 'Empfänger/in für diesen Badge kann unter den vorhandenen Nutzer/innen nicht gefunden werden.';
$string['recipients'] = 'Empfänger/innen';
$string['recipientvalidationproblem'] = 'Nutzer/in kann nicht als Empfänger/in des Badge verifiziert werden.';
$string['relatedbages'] = 'Zugeordnete Badges';
$string['relative'] = 'Relative Zeit';
$string['requiredbadge'] = 'Mindestens ein Badge muss zum Kriterium hinzugefügt werden.';
$string['requiredcohort'] = 'Mindestens eine globale Gruppe muss zum Kriterium hinzugefügt werden.';
$string['requiredcourse'] = 'Mindestens ein Kurs muss zum Kriterium hinzugefügt werden.';
$string['reviewbadge'] = 'Änderungen beim Zugriff zum Badge';
$string['reviewconfirm'] = '<p>Hiermit machen Sie Ihren Badge für Nutzer/innen sichtbar und erlauben ihnen den Erwerb.</p>

<p>Möglicherweise haben Nutzer/innen bereits früher die Kriterien für den Badge erfüllt. Ihnen wird der Badge nun umgehend zugewiesen.</p>

<p>Sobald der Badge einmal verliehen wurde, wird er <strong>gesperrt</strong>.</p>

<p>Möchten Sie für den Badge \'{$a}\' nun den Zugriff aktivieren?</p>';
$string['revoke'] = 'Badge zurückziehen';
$string['save'] = 'Speichern';
$string['searchname'] = 'Nach Name suchen';
$string['selectaward'] = 'Wählen Sie die Rolle, die diesen Badge verleihen darf:';
$string['selectgroup_end'] = 'Nur öffentliche Sammlungen werden angezeigt. <a href="http://backpack.openbadges.org">Gehen Sie zu Ihrem Backpack</a> und legen Sie eine öffentliche Sammlung an.';
$string['selectgroup_start'] = 'Wählen Sie Collections aus Ihrem Backpack, um sie auf dieser Seite anzuzeigen:';
$string['selecting'] = 'Mit den gewählten Badges ...';
$string['setup'] = 'Verbindung konfigurieren';
$string['signinwithyouremail'] = 'Melden Sie sich mit Ihrer E-Mail-Adresse an';
$string['sitebadges'] = 'Website-Badges';
$string['sitebadges_help'] = 'Website-Badges können nur für systemweite Leistungen verliehen werden, wie z.B. das Abschließen mehrerer Kurse oder die Vervollständigung des Nutzerprofils. Website-Badges können auch manuell von einer Person an eine andere verliehen werden.

Badges für kursbezogene Leistungen müssen für den jeweiligen Kurs angelegt werden. Sie finden die entsprechenden kursbezogenen Badges unter \'Kurs-Administration > Badges\'.';
$string['status'] = 'Status';
$string['status_help'] = 'Der Status eines Badge legt fest, wie er verwendet werden kann:

* **Verfügbar**: Der Badge kann von Nutzer/innen erworben werden. Während ein Badge verfügbar ist, können keine Änderungen an den Kriterien vorgenommen werden.

* **Nicht verfügbar**: Der Badge kann nicht erworben und auch nicht manuell verliehen werden. Solange ein Badge nicht verliehen wurde, können seine Kriterien verändert werden.

Sobald ein Badge einmal verliehen wurde, wird er automatisch **gesperrt**. Gesperrte Badges können weiterhin erworben werden, die Kriterien sind aber nicht mehr änderbar. Falls Sie Details oder Kriterien eines gesperrten Badges bearbeiten möchten, können Sie den Badge duplizieren und dann alle Einstellungen vornehmen.

*Warum werden Badges gesperrt?*

Wir möchten sicherstellen, dass immer dieselbe Leistung erbracht werden muss, um den Badge zu erwerben. Derzeit ist es nicht möglich, einmal erworbene Badges zurückzuziehen. Wenn die Kriterien für Badges nachträglich geändert werden könnten, würden Nutzer/innen mit dem gleichen Badge möglicherweise ganz andere Anforderungen erfüllt haben.';
$string['statusmessage_0'] = 'Dieser Badge ist derzeit für Nutzer/innen nicht verfügbar. Klicken Sie auf \'\'Zugriff aktivieren\'\', damit der Badge von Nutzer/innen erworben werden kann.';
$string['statusmessage_1'] = 'Dieser Badge ist derzeit für Nutzer/innen verfügbar. Klicken Sie auf \'\'Zugriff verhindern\'\', wenn Sie Änderungen vornehmen möchten.';
$string['statusmessage_2'] = 'Dieser Badge ist derzeit für Nutzer/innen nicht verfügbar und seine Kriterien sind gesperrt. Klicken Sie auf \'\'Zugriff aktivieren\'\', damit er wieder von Nutzer/innen erworben werden kann.';
$string['statusmessage_3'] = 'Dieser Badge ist derzeit für Nutzer/innen verfügbar und seine Kriterien sind gesperrt.';
$string['statusmessage_4'] = 'Dieser Badge ist derzeit archiviert.';
$string['subject'] = 'Betreff';
$string['targetcode'] = 'Code';
$string['targetcode_help'] = 'Eine eindeutige Text-ID, um die Kompetenz innerhalb ihres Frameworks zu referenzieren.';
$string['targetdescription'] = 'Beschreibung';
$string['targetdescription_help'] = 'Kurze Beschreibung des Orientierungssziels.';
$string['targetframework'] = 'Framework';
$string['targetframework_help'] = 'Der Name des Kometen-Frameworks';
$string['targetname'] = 'Kompetenzname';
$string['targetname_help'] = 'Kompetenz, Fertigkeit oder Standard, wofür der Badge gilt.';
$string['targeturl'] = 'URL';
$string['targeturl_help'] = 'Ein Link zur Beschreibung, die die Kompetenz, die Fertigkeit oder den Standard darstellt. Die URL muss mit http:// oder https:// beginnen.';
$string['type'] = 'Typ';
$string['variablesubstitution'] = 'Variablenersetzung in Mitteilungen';
$string['variablesubstitution_help'] = 'In der Mitteilung, die an Badge-Empfänger/innen versendet wird, stehen verschiedene Platzhalter im Text bzw. im Betreff. Diese Platzhalter werden automatisch durch geeignete Werte ersetzt, wenn die Mitteilung erzeugt und versendet wird. Das funktioniert jedoch nur, wenn die Syntax genau so wie nachfolgend beschrieben verwendet wird:

%badgename%
: An dieser Stelle wird der Name des Badge eingesetzt.

%username%
: An dieser Stelle wird der vollständige Name der Person eingesetzt, die den Badge erworben hat.

%badgelink%
: An dieser Stelle wird die öffentliche URL zu einer Seite eingesetzt, die Informationen zum Badge anzeigt.';
$string['version'] = 'Version';
$string['version_help'] = 'Das Versionsfeld kann verwendet werden, um die Badge-Entwicklung zu verfolgen. Wenn angegeben, wird die Version auf der Badge-Seite angezeigt.';
$string['viewbadge'] = 'Verliehenen Badge anzeigen';
$string['visible'] = 'Sichtbar';
$string['warnexpired'] = '(Dieser Badge ist abgelaufen!)';
$string['year'] = 'Jahr(e)';
