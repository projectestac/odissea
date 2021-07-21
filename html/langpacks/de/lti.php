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
 * Strings for component 'lti', language 'de', version '3.11'.
 *
 * @package     lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Akzeptieren';
$string['accept_grades'] = 'Bewertungen aus dem Tool akzeptieren';
$string['accept_grades_admin'] = 'Bewertungen aus dem Tool akzeptieren';
$string['accept_grades_admin_help'] = 'Legen Sie fest, ob der Tool Provider Bewertungen der Instanzen des Tools hinzufügen, aktualisieren, lesen und löschen darf. Einige Tool Provider ermöglichen, dass Bewertungen aus den Aktivitäten im Tool an Moodle berichtet werden. Dadurch erscheint das Tool noch besser integriert.';
$string['accept_grades_help'] = 'Diese Option legt fest, ob der Tool-Provider Bewertungen hinzufügen, aktualisieren, lesen und löschen darf, die mit der Tool-Instanz zusammenhängen. Manche Tool-Provider ermöglichen die Übernahme von Bewertungen aus den Tool-Aktivitäten und schaffen so eine bessere Integration in Moodle.

Diese Einstellung kann in der Tool-Konfiguration überschrieben werden.';
$string['accepted'] = 'Akzeptiert';
$string['action'] = 'Aktion';
$string['activate'] = 'aktivieren';
$string['activatetoadddescription'] = 'Sie müssen das Tool aktivieren, bevor Sie eine Beschreibung hinzufügen können.';
$string['active'] = 'Aktiv';
$string['activity'] = 'Aktivität';
$string['add_ltiadv'] = 'LTI Advantage hinzufügen';
$string['add_ltilegacy'] = 'Legacy LTI hinzufügen';
$string['addnewapp'] = 'Externes Programm aktivieren';
$string['addserver'] = 'Neuen vertrauensvollen Server hinzufügen';
$string['addtype'] = 'Vorkonfiguriertes Tool hinzufügen';
$string['allow'] = 'Erlauben';
$string['allowsetting'] = 'Dem Tool erlauben, Einstellungen (8 KB) in Moodle zu speichern';
$string['always'] = 'Immer';
$string['autoaddtype'] = 'Tool hinzufügen';
$string['automatic'] = 'Automatisch, basierend auf der Tool-URL';
$string['baseurl'] = 'Basis URL / Tool Registrierungsname';
$string['basiclti'] = 'Externes Tool';
$string['basiclti_base_string'] = 'LTI OAuth base string';
$string['basiclti_endpoint'] = 'LTI launch endpoint';
$string['basiclti_in_new_window'] = 'Ihre Aktivität wurde in einem neuen Fenster geöffnet';
$string['basiclti_in_new_window_open'] = 'In einem neuen Fenster öffnen';
$string['basiclti_parameters'] = 'LTI Startparameter';
$string['basicltiactivities'] = 'LTI Aktivitäten';
$string['basicltifieldset'] = 'Angepasste Beispielwerte';
$string['basicltiintro'] = 'Beschreibung der Aktivität';
$string['basicltiname'] = 'Name der Aktivität';
$string['basicltisettings'] = 'Basiseinstellungen für Externes Tool (Learning Tool Interoperability (LTI))';
$string['cachedef_keyset'] = 'Legt die Schlüsselsatz-Informationen von Tools im Cache ab';
$string['cancel'] = 'Abbrechen';
$string['cancelled'] = 'Abgebrochen';
$string['cannot_delete'] = 'Sie sollten diese Tool-Konfiguration nicht löschen';
$string['cannot_edit'] = 'Sie können diese Tool-Konfiguration nicht löschen';
$string['capabilities'] = 'Berechtigungen';
$string['capabilities_help'] = 'Wählen Sie die Berechtigungen, die Sie dem Tool-Anbieter übergeben möchten. Sie können mehrere Optionen auswählen.';
$string['capabilitiesrequired'] = 'Dieses Tool benötigt zur Aktivierung den Zugriff auf folgende Daten:';
$string['cleanaccesstokens'] = 'Entfernen von abgelaufenen Zugriffstoken durch externes Tool';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Weiter</a>';
$string['clientidadmin'] = 'Client-ID';
$string['clientidadmin_help'] = 'Die Client-ID ist ein eindeutiger Wert, der zur Identifizierung eines Werkzeugs verwendet wird. Sie wird automatisch für jedes Tool erstellt, das das in LTI 1.3 eingeführte JWT-Sicherheitsprofil verwendet und sollte Teil der an den Tool-Provider übermittelten Details sein, damit dieser die Verbindung an seinem Ende konfigurieren kann.';
$string['comment'] = 'Kommentar';
$string['configpassword'] = 'Standardkennwort für Remote Tool';
$string['configpreferheight'] = 'Höhe (Vorgabe)';
$string['configpreferwidget'] = 'Widget als Standard zum Start setzen';
$string['configpreferwidth'] = 'Breite (Vorgabe)';
$string['configresourceurl'] = 'Standard-URL für Ressource';
$string['configtoolurl'] = 'Standard-Remote Tool URL';
$string['configtypes'] = 'LTI Anwendungen aktivieren';
$string['configured'] = 'Konfiguriert';
$string['confirmtoolactivation'] = 'Möchten Sie dieses Tool wirklich aktivieren?';
$string['contentitem'] = 'Content-Item Mitteilung';
$string['contentitem_deeplinking'] = 'Unterstützt Deep Linking (Content-Item Message)';
$string['contentitem_deeplinking_help'] = 'Bei Aktivierung wird die Option \'Select content\' verfügbar sein, wenn ein externes Tool hinzugefügt wird';
$string['contentitem_help'] = 'Bei Aktivierung wird die Option \'Select content\' verfügbar sein, wenn ein externes Tool hinzugefügt wird';
$string['contentitem_multiple_description'] = 'Die folgenden Elemente werden zu Ihrem Kurs hinzugefügt:';
$string['contentitem_multiple_graded'] = 'Bewertete Aktivität (Höchstbewertung: {$a})';
$string['course_tool_types'] = 'Kurs-Tools';
$string['courseactivitiesorresources'] = 'Kursaktivitäten oder -materialien';
$string['courseid'] = 'Kurs-ID';
$string['courseinformation'] = 'Kursinformation';
$string['courselink'] = 'Zum Kurs';
$string['coursemisconf'] = 'Kurs ist falsch konfiguriert';
$string['createdon'] = 'Erstellt am';
$string['curllibrarymissing'] = 'PHP-Extension curl ist notwendig für das externe Tool.';
$string['custom'] = 'Angepasste Parameter';
$string['custom_config'] = 'Angepasste Tool-Konfiguration verwenden';
$string['custom_help'] = 'Angepasste Parameter sind Einstellungen, die vom Tool Provider genutzt werden. Beispiel: eine Parameter kann die Nutzung einer Ressource des Providers sein.
Jeder Parameter ist in einer eigenenZeile einzugeben. Die Eingabe erfolgt nach folgender Regel: "name=value"; z.B. "chapter=3".

Wenn keine direkten Hinweise des Tool Providers vorliegen, ist es am sichersten das Feld leer zu lassen.';
$string['custominstr'] = 'Angepasste Parameter';
$string['debuglaunch'] = 'Debug-Optionen';
$string['debuglaunchoff'] = 'Normaler Start';
$string['debuglaunchon'] = 'Debug-Start';
$string['default'] = 'Standardwert';
$string['default_launch_container'] = 'Standard-Startcontainer';
$string['default_launch_container_help'] = 'Der Startcontainer beeinflusst die Anzeige des Tools beim Start aus dem Kurs heraus. Einige Startcontainer generieren eine Oberfläche in der Darstellung des Tools, andere passen sich an die Oberfläche von Moodle an.

* **Standard** - Startcontainer wie in Tool-Konfiguration festgelegt verwenden.
* **Einbetten** - Das Tool wird in einem bestehenden Moodle-Fenster angezeigt, ählich wie andere Aktivitäten.
* **Eingebettet, ohne Blöcke** - Das Tool wird in einem bestehenden Moodle-Fenster ohne Blöcke, nur mit der Navigation im Kopf angezeigt.
* **Neues Fenster** - Das Tool öffnet in einem neuen Fenster und nutzt den gesamten Raum im Fenster aus. Abhängig vom Browser  wird ein neuer Tab angelegt oder ein neues Fenster geöffnet.';
$string['delegate'] = 'An Trainer/in zuweisen';
$string['delegate_tool'] = 'Wie in der Deep Linking-Definition angegeben oder an Dozierende delegieren';
$string['delete'] = 'Löschen';
$string['delete_confirmation'] = 'Möchten Sie dieses vorkonfigurierte Tool wirklich löschen?';
$string['deletetype'] = 'Vorkonfiguriertes Tool löschen.';
$string['display_description'] = 'Beschreibung bei Start anzeigen';
$string['display_description_help'] = 'Die oben eingegebene Beschreibung wird bei Aktivierung über dem Inhalt des Tools angezeigt. Die Beschreibung kann genutzt werden, um Teilnehmern zusätzliche Hinweise zugeben. Sie ist nicht unbedingt erforderlich. Wenn die Darstellung im neuen Fenster erfolgt, kann die Beschreibung nie angezeigt werden.';
$string['display_name'] = 'Aktivitätenname bei Start anzeigen';
$string['display_name_help'] = 'Der Aktivitätenname kann über dem Inhalt des Toolanbieters angezeigt werden. Es ist auch möglich, dass der Toolanbieter den Namen direkt anzeigt. Die Option kann damit eine doppelte Anzeige verhindern. Die Titelanzeige ist nicht verfügbar wenn das Tool in einem neuen Fenster geöffnet wird.';
$string['domain_mismatch'] = 'Die Domain der Tool-URL passt nicht zum Eintrag in Tool-Konfiguration';
$string['donot'] = 'Nicht senden';
$string['donotaccept'] = 'Nicht akzeptieren';
$string['donotallow'] = 'Nicht erlauben';
$string['duplicateregurl'] = 'Diese Registrierungs-URL ist bereits benutzt';
$string['dynreg_update_btn_new'] = 'Als neues externes Tool registrieren';
$string['dynreg_update_btn_update'] = 'Aktualisierung';
$string['dynreg_update_name'] = 'Name des Tools';
$string['dynreg_update_notools'] = 'Keine Tools im Kontext';
$string['dynreg_update_text'] = 'Vorhandene Tools sind an die Domain der Registrierung angehängt. Möchten Sie ein bereits installiertes externes Tool aktualisieren oder neues externes Tool erstellen?';
$string['dynreg_update_url'] = 'Basis-URL';
$string['dynreg_update_version'] = 'LTI-Version';
$string['dynreg_update_warn_dupdomain'] = 'Es wird nicht empfohlen, mehrere externe Tools unter derselben Domäne zu haben.';
$string['editdescription'] = 'Tragen Sie eine Beschreibung des Tools ein.';
$string['edittype'] = 'Vorkonfiguriertes Tool bearbeiten';
$string['embed'] = 'Eingebettet';
$string['embed_no_blocks'] = 'Eingebettet ohne Blöcke';
$string['enableemailnotification'] = 'E-Mail-Systemnachrichten senden';
$string['enableemailnotification_help'] = 'Nach der Aktivierung erhalten Teilnehmer/innen E-Mail-Systemnachrichten, wenn ihre Leistungen bewertet wurden.';
$string['enterkeyandsecret'] = 'Geben Sie Ihre Zugangskennung und den Schlüssel (secret) ein.';
$string['enterkeyandsecret_help'] = 'Fall Sie einen Consumer-Key und/oder ein Shared Secret erhalten haben, geben sie diese bitte hier ein.';
$string['errorbadurl'] = 'Die URL ist keine gültige URL für ein Tool oder ein Cartridge.';
$string['errorincorrectconsumerkey'] = 'Der Consumer Key ist falsch.';
$string['errorinvaliddata'] = 'Ungültige Daten: {$a}';
$string['errorinvalidmediatype'] = 'Ungültiger Medientyp: {$a}';
$string['errorinvalidresponseformat'] = 'Ungültiges Content-Item Response Format.';
$string['errormisconfig'] = 'Das Tool wurde falsch konfiguriert. Ihr Administrator/in kann Ihnen weiter helfen.';
$string['errortooltypenotfound'] = 'LTI Tool-Typ nicht gefunden';
$string['existing_window'] = 'Vorhandenes Fenster';
$string['extensions'] = 'LTI Extension Service';
$string['external_tool_type'] = 'Vorkonfiguriertes Tool';
$string['external_tool_type_help'] = '* **Automatisch mit Tool-URL** - Diese Einstellung ist meistens ausreichend. Moodle verwendet dann die passendste Konfiguration über die Tool-URL. Es können Tools verwendet werden, die vom Administrator vorkonfiguriert oder im Kurs angelegt wurden.
Sofern eine Start-URL definiert ist, erzeugt Moodle ein Feedback, ob dieses erkannt wird oder nicht. Sollte dieser Zugang scheitern, können Konfigurationsinformationen manuell eingetragen werden.
* **Ein spezifischer vorkonfigurierter Tool-Typ** - Die Auswahl erzwingt eine bestimmte Konfiguration zur Kommunikation mit dem Tool-Anbieter zu nutzen. Sollte die eingetragene Start-URL nicht zu dem Tool-Anbieter passen, erfolgt eine Warnung. Manchmal ist es nicht nötig eine Start-URL einzutragen falls ein spezifischer Tool-Typ verwandt wird.
* **Individuelle Konfiguration** - Die spezifische Konfiguration wird nur für die spezielle Instanz verwandt. Unter erweiterten Einstellungen können Anwenderschlüsssel und Kennwörter (shared secret) eingetragen werden. Beide werden durch den Tool Provider zur Verfügung gestellt. Falls das Tool diese Einstellungen nicht benötigt, können die Felder leer bleiben.

##Tool-Typ bearbeiten

Drei Icons erscheinen in der Liste
* **Hinzufügen** - Eine Tool-Konfiguration auf Kursebene erstellen. Alle Instanzen in diesem Kurs werden diese verwenden.
* **Bearbeiten** - Typ aus Dropdownmneu auswählen und die Details konfigurieren.
* **Löschen** - Ausgewählten Typ im Kurs löschen.';
$string['external_tool_types'] = 'Vorkonfigurierte Tools';
$string['failedtoconnect'] = 'Moodle konnte keine Kommunikation mit dem System \'{$a}\' aufbauen.';
$string['failedtocreatetooltype'] = 'Fehler beim Anlegen eines neuen Tools. Prüfen Sie die URL und versuchen Sie es noch einmal.';
$string['failedtodeletetoolproxy'] = 'Das Entfernen des Tools Registrierung ist fehlgeschlagen. Sie können auf "Manage external tool registrations" gehen und es manuell entfernen.';
$string['filter_basiclti_configlink'] = 'Konfigurieren Sie die bevorzugten Seiten und deren Kennwörter';
$string['filter_basiclti_password'] = 'Kennwort ist erforderlich';
$string['filterconfig'] = 'LTI Administration';
$string['filtername'] = 'Externes Tool';
$string['fixexistingconf'] = 'Verwenden Sie eine bestehende Konfiguration für die fehlerhafte Instanz';
$string['fixnew'] = 'Neue Konfiguration';
$string['fixnewconf'] = 'Definieren Sie eine neue Konfiguration für die fehlerhafte Instanz';
$string['fixold'] = 'Bestehende verwenden';
$string['force_ssl'] = 'SSL erzwingen';
$string['force_ssl_help'] = 'Mit dieser Funktion erzwingen Sie SSL für alle Verbindungen zu diesem Anbieter.
Dies gilt auch für alle Web Service Anfrage zu dem Anbieter.
Hierzu ist es erforderelich, dass sowohl das Moodle-System als auch der Anbieter SSL unterstützen.';
$string['forced_help'] = 'Diese Einstellung wurde systemweit oder für einen Kurs konfiguriert. Sie können diese nicht verändern.';
$string['generaltool'] = 'Allgemeines Tool';
$string['global_tool_types'] = 'Vorkonfigurierte Tools';
$string['grading'] = 'Bewertungsweiterleitung';
$string['icon_url'] = 'Icon URL';
$string['icon_url_help'] = 'Die Funktion Icon URl ermöglich es, das für die Aktivität verwandte Icon auszutauschen.  An Stelle des Standard LTI Icons kann ein Icon, das zur eingebundenen Aktivität passt, gewählt werden.';
$string['id'] = 'ID';
$string['indicator:cognitivedepth'] = 'LTI kognitiv';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die eine Person in einer LTI-Aktivität erreicht hat.';
$string['indicator:cognitivedepthdef'] = 'LTI kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Die Person hat diesen Prozentsatz des kognitiven Engagements erreicht, das die LTI-Aktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Ansicht, Ansicht, Beiträge, Feedback anzeigen).';
$string['indicator:socialbreadth'] = 'LTI sozial';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die eine Person in einer LTI-Aktivität erreicht hat.';
$string['indicator:socialbreadthdef'] = 'LTI sozial';
$string['indicator:socialbreadthdef_help'] = 'Die Person hat diesen Prozentsatz des soziale Engagements erreicht, das die LTI-Aktivitäten während dieses Analyseintervalls aufzeigen (Ebenen = Keine Teilnahme, Teilnahme allein, Teilnahme mit anderen).';
$string['initiatelogin'] = 'Anmelde-URL';
$string['initiatelogin_help'] = 'Die Tool-URL, an die Anfragen zur Initiierung eines Logins gesendet werden sollen. Diese URL ist erforderlich, bevor eine Nachricht erfolgreich an das Tool gesendet werden kann.';
$string['invalidid'] = 'LTI ID war fehlerhaft';
$string['jwtsecurity'] = 'LTI 1.3';
$string['keytype'] = 'Öffentlicher Schlüsseltyp';
$string['keytype_help'] = 'Die Authentifizierungsmethode, mit der das Tool validiert wird.';
$string['keytype_keyset'] = 'Schlüsselsatz-URL';
$string['keytype_rsa'] = 'RSA-Schlüssel';
$string['launch_in_moodle'] = 'Tool in Moodle starten';
$string['launch_in_popup'] = 'Tool in Pop-Up starten';
$string['launch_url'] = 'Tool-URL';
$string['launch_url_help'] = 'Die Tool-URL ist die Webadresse des externen Tools. Sie kann zusätzliche Informationen enthalten, z.B. welche Ressource aufgerufen werden soll. Weitere Informationen gibt der Tool-Anbieter.

Sie können eine Cartridge-URL eingeben, falls Sie darüber verfügen. Anschließend werden die übrigen Formularfelder automatisch ausgefüllt.

Wenn Sie ein vorkonfigurierten Tool ausgewählt haben, brauchen sie keine Tool-URL einzugeben. Wenn das Tool verwendet wird, um auf das Anbietersystem zuzugreifen, aber nicht eine spezielle Ressource aufrufen soll, dann wird das funktionieren.';
$string['launchinpopup'] = 'Startcontainer';
$string['launchinpopup_help'] = 'Der Startcontainer beeinflusst die Anzeige des Tools beim Start aus dem Kurs heraus. Einige Startcontainer generieren eine Oberfläche in der Darstellung des Tools, andere passen sich an die Oberfläche von Moodle an.

* **Standard** - Startcontainer wie in Tool-Konfiguration festgelegt verwenden.
* **Einbetten** - Das Tool wird in einem bestehenden Moodle-Fenster angezeigt, ähnlich wie andere Aktivitäten.
* **Eingebettet, ohne Blöcke** - Das Tool wird in einem bestehenden Moodle-Fenster ohne Blöcke, nur mit der Navigation im Kopf angezeigt.
* **Neues Fenster** - Das Tool öffnet in einem neuen Fenster und nutzt den gesamten Raum im Fenster aus. Abhängig vom Browser  wird ein neuer Tab angelegt oder ein neues Fenster geöffnet.';
$string['launchoptions'] = 'Startoptionen';
$string['leaveblank'] = 'Lassen Sie dies leer, wenn Sie die Angaben nicht brauchen.';
$string['lti'] = 'Externes Tool';
$string['lti:addcoursetool'] = 'Kursspezifisch LTI Aktivitäten konfigurieren';
$string['lti:addinstance'] = 'Neue Aktivität \'Externes Tool\' hinzufügen';
$string['lti:addmanualinstance'] = 'Manuell konfiguriertes Tool hinzufügen';
$string['lti:addpreconfiguredinstance'] = 'Vorkonfiguriertes Tool hinzufügen';
$string['lti:admin'] = 'Tool als Administrator/in ausführen';
$string['lti:grade'] = 'Bewertungen vom ext. Tool anzeigen';
$string['lti:manage'] = 'Als Trainer/in auf das ext. Tool zugreifen';
$string['lti:requesttooladd'] = 'Externes Tool zur systemweiten Nutzung anfragen';
$string['lti:view'] = 'Aktivität Externes Tool aufrufen';
$string['lti_administration'] = 'Vorkonfiguriertes Tool bearbeiten';
$string['lti_errormsg'] = 'Das Tool gab folgende Fehlermeldung zurück: \'{$a}\'';
$string['lti_launch_error'] = 'Beim Start des externen Tools trat ein Fehler auf:';
$string['lti_launch_error_tool_request'] = '<p>Zum Versand einer Anfrage an Administrator/innen zur Vervollständigung der Tool-Konfiguration klicken Sie <a href="{$a->admin_request_url}" target="_top">hier</a>. </p>';
$string['lti_launch_error_unsigned_help'] = '<p>Der Fehler kann seine Ursache in einem fehlenden Anwenderschlüssel und Sicherheitseinstellungen für den Toolanbieter haben</p><p>Wenn Sie einen Anwenderschlüssel und Daten für die Sicherheitskonfiguration haben, geben Sie diese bei den Einstellungen für das externe Tool  ein. Beachten Sie auch die erweiterten Einstelloptionen.<br />Alternativ können Sie auch eine kursweite Konfiguration für den Tool-Anbieter anlegen. Klicken Sie dazu
<a href="{$a->course_tool_editor}">hier</a>. </p>';
$string['lti_tool_request_added'] = 'Die Konfigurationsanfrage wurde erfolgreich weitergeleitet. Kontakten Sie die Administrator/innen nun, um den Prozess abzuschließen.';
$string['lti_tool_request_existing'] = 'Für die Domain wurde bereits eine Konfiguration beauftragt.';
$string['ltisettings'] = 'LTI Einstellungen';
$string['ltiunknownserviceapicall'] = 'Unbekannter API-Aufruf für externes Tool';
$string['ltiversion'] = 'LTI Version';
$string['ltiversion_help'] = 'Die Version von LTI, die zum Signieren von Nachrichten und Dienstanforderungen verwendet wird: LTI 1.0 / 1.1 und LTI 2.0 verwenden das Sicherheitsprofil OAuth 1.0A. LTI 1.3.0 verwendet JWTs.';
$string['main_admin'] = 'Allgemeine Hilfe';
$string['main_admin_help'] = 'Externe Tools ermöglichen es Moodle Nutzern nahtlos mit externen Lernanwendungen zu arbeiten und Daten auszutauschen. Durch ein spezielles Start-Protokoll erhält das externe Tool Zugriff auf bestimmte Daten des Nutzers. Dies können sein: Institutionsbezeichnung, Kurs-ID, Nutzer-ID, Nutzername oder E-Mail.

Die Tools auf dieser Seite sind in drei unterschiedliche Typen klassifiziert:

* ** Aktiv** - Diese Toolanbieter wurden durch eine/n Administrator/in geprüft und konfiguriert. Sie können in jedem Kurs genutzt werden. Wenn ein Anwenderschlüssel und ein Kennwort eingegeben werden, wird eine geschützte Verbindung zwischen Moodle und dem Toolanbieter aufgebaut.
* **Abwarten** - Diese Tool Anbieter wurden im Rahmen eines Paketimports im System hinterlegt. Sie sind noch nicht von einer/m Administrator/in konfiguriert worden. Trainer können diese Tools verwenden, wenn sie selber über einen Anwenderschlüssel und ein Kennwort verfügen, oder dies nicht erforderlich ist.
* **Gesperrt** - Diese Toolanbieter sind von Administrator/innen nicht zur systemweiten Nutzung freigegeben worden. Trainer können die Tools dennoch nutzen, wenn sie über einen Anwenderschlüssel und ein Kennwort für dieses Tool verfügen, oder dies nicht erforderlich ist.';
$string['manage_external_tools'] = 'Tools verwalten';
$string['manage_tool_proxies'] = 'Registrierung von externen Tools verwalten';
$string['manage_tools'] = 'Vorkonfigurierte Tools verwalten';
$string['manuallyaddtype'] = 'Alternativ können Sie ein <a href="{$a}">Tool manuell konfigurieren</a>.';
$string['miscellaneous'] = 'Verschiedenes';
$string['misconfiguredtools'] = 'Fehlerhaft konfigurierte Instanzen entdeckt';
$string['missingparameterserror'] = 'Diese Seite ist falsch konfiguriert: \'{$a}\'';
$string['module_class_type'] = 'Moodle Modultyp';
$string['modulename'] = 'Externes Tool';
$string['modulename_help'] = 'Mit der Schnittstelle \'Externe Tools\' geben Sie den Teilnehmer/innen direkten Zugriff auf Lernprogramme außerhalb von Moodle.

Die Teilnehmer/innen benötigen kein zusätzliches Login. Die Verbindung zwischen Moodle und dem externen Lernprogramm erfolgt über den LTI-Standard, den das andere Lernprogramm unterstützen muss. Sie erhalten vom Anbieter einen Link und Zugangsschlüssel.

Hinweis zum Datenschutz: Häufig werden Namen und E-Mail-Adressen Ihrer Teilnehmer/innen an den externen Anbieter übertragen. Fragen Sie den Anbieter.

Externe Tool-Aktivitäten unterscheiden sich in einigen Punkten von URL-Ressourcen:

* Externe Tools sind kontextabhängig, d.h. sie haben Zugriff auf Informationen über den Benutzer, der das Tool gestartet hat, wie z.B. Institution, Kurs und Name.
* Externe Tools unterstützen das Lesen, Aktualisieren und Löschen von Bewertungen, die mit der Aktivitätsinstanz verbunden sind
* Konfigurationen von externen Tools schaffen eine wechselseitige Beziehung zwischen Ihrer Website und dem Werkzeuganbieter und ermöglichen eine sichere Kommunikation zwischen ihnen.';
$string['modulenameplural'] = 'Externe Tools';
$string['modulenamepluralformatted'] = 'LTI Instanzen';
$string['name'] = 'Name';
$string['never'] = 'Nie';
$string['new_window'] = 'Neues Fenster';
$string['no_lti_configured'] = 'Keine aktiven externen Tools konfiguriert';
$string['no_lti_pending'] = 'Keine anstehenden externen Tools';
$string['no_lti_rejected'] = 'Keine zurückgewiesenen externen Tools';
$string['no_lti_tools'] = 'Es gibt keine vorkonfigurierten Tools.';
$string['no_tp_accepted'] = 'Die Registrierungen beim externen Tool wurden nicht akzeptiert.';
$string['no_tp_cancelled'] = 'Es gibt keine abgebrochenen Registrierungen für externe Tools.';
$string['no_tp_configured'] = 'Es sind keine externen Tools konfiguriert, die nicht registriert wurden.';
$string['no_tp_pending'] = 'Es gibt keine ausstehenden Registrierungen für externe Tools.';
$string['no_tp_rejected'] = 'Es gibt keine zurückgewiesenen Registrierungen für externe Tools.';
$string['noattempts'] = 'Es gibt noch keine Versuche in dieser Tool-Instanz';
$string['noltis'] = 'Keine Instanzen mit externen Tools';
$string['noprofileservice'] = 'Der Profilservice wurde nicht gefunden.';
$string['noservers'] = 'Keine Server gefunden';
$string['notypes'] = 'Es sind zur Zeit keine LTI Tools in Moodle angelegt. Mit dem Installieren-Link können diese jetzt angelegt werden.';
$string['noviewusers'] = 'Keine Nutzer mit diesem Recht gefunden.';
$string['oauthsecurity'] = 'LTI 1.0/1.1';
$string['opensslconfiginvalid'] = 'Für LTI 1.3 muss eine gültige openssl.cnf konfiguriert sein und Ihrem Webserver zur Verfügung stehen. Wenden Sie sich an den/die Website-Administrator/in, um openssl für diese Site zu konfigurieren und zu aktivieren.';
$string['optionalsettings'] = 'Optionale Einstellungen';
$string['organization'] = 'Organisationsdetails';
$string['organizationdescr'] = 'Beschreibung der Institution';
$string['organizationid'] = 'Organisations-ID';
$string['organizationid_default'] = 'Standard-Organisations-ID';
$string['organizationid_default_help'] = 'Der Standardwert, der für die Organisation verwendet wird. Über die Website-ID wird diese Installation von Moodle identifiziert.';
$string['organizationid_help'] = 'Eindeutige Identifizierung für diese Moodle-Instanz. Üblicherweise wird der DNS-Name der Institution verwendet. Wenn das Feld leer ist, wird der Host-Name des Moodle-Systems als Standardwert benutzt.';
$string['organizationidguid'] = 'Organisations-ID';
$string['organizationidguid_help'] = 'Ein eindeutiger Identifikator für diese Moodle-Instanz, der als Plattform-Instanz-GUID an das Tool übergeben wird.

Bleibt dieses Feld leer, wird der Standardwert verwendet.';
$string['organizationurl'] = 'URL der Institution';
$string['organizationurl_help'] = 'Basis URL der Moodle-Instanz. Bleibt das Feld leer wird der Wert aus der Moodle-Installation verwandt.';
$string['pagesize'] = 'Zahl der Leistungen pro Seite';
$string['parameter'] = 'Tool-Parameter';
$string['parameter_help'] = 'Tool-Parameter sind Einstellungen zur Datenübertragung über einen Proxy des Tool-Providers.';
$string['password'] = 'Öffentliches Kennwort';
$string['password_admin'] = 'Öffentliches Kennwort';
$string['password_admin_help'] = 'Das Kennwort wird für die Authentifizierung genutzt. Es wird mit dem Anwenderschlüssel vom Tool-Anbieter zur Verfügung gestellt.
Tools, die keine sichere Datenübertragung oder keine zusätzlichen Dienste (wie Bewertungen) anbieten, können auf Kennwörter verzichten.';
$string['password_help'] = 'Für vorkonfigurierte Tools ist es nicht erforderlich ein Kenwort einzugeben. Dies erfolgte schon während der Tool Konfiguration.

Das Feld ist jedoch auszufüllen, falls eine Verbindung zu einem Anbieter geschaffen werden soll, die noch nicht existiert.  Falls das Tool mehrfach genutzt werden soll ist es zu empfehlen, diese Einstellungen in der Kurs Konfiguration vorzunehmen, um sich mehrfache Arbeit zu ersparen.

Das Kennwort wird für eine Authentifizierung beim externen Tool verwandt. Es wird meist zusammen mit dem Anwenderschlüsel vergeben.

Tools die keine sichere Kommunikation mit Moodle erfordern, benötigen meist auch kein Kennwort.';
$string['pending'] = 'Wartend';
$string['pluginadministration'] = 'Administration des externen Tools';
$string['pluginname'] = 'Externes Tool';
$string['preferheight'] = 'Höhe (bevorzugt)';
$string['preferwidget'] = 'Widget Start (bevorzugt)';
$string['preferwidth'] = 'Breite (bevorzugt)';
$string['press_to_submit'] = 'Klicken zum Start der Aktivität';
$string['privacy'] = 'Datenschutz';
$string['privacy:metadata:coursefullname'] = 'Vollständiger Name des Kurses aus dem der Nutzer den LTI Consumer aufgerufen hat';
$string['privacy:metadata:courseid'] = 'ID des Kurses aus dem der Nutzer den LTI Consumer aufgerufen hat';
$string['privacy:metadata:courseidnumber'] = 'ID-Nummer des Kurses aus dem der Nutzer den LTI Consumer aufgerufen hat';
$string['privacy:metadata:courseshortname'] = 'Kurzbezeichnung des Kurses, aus dem der Nutzer den LTI Consumer aufgerufen hat';
$string['privacy:metadata:createdby'] = 'Nutzer, der Datensatz erzeugt hat';
$string['privacy:metadata:email'] = 'E-Mail-Adresse des Nutzers, der den LTI Consumer aufgerufen hat';
$string['privacy:metadata:externalpurpose'] = 'Der LTI Consumer hält Nutzer und Kontextinformationen für den LTI Toolprovider vor';
$string['privacy:metadata:firstname'] = 'Vorname des Nutzers Nutzer der den LTI Consumer aufgerufen hat';
$string['privacy:metadata:fullname'] = 'Vollständiger Name des Nutzers, der den LTI Consumer aufgerufen hat';
$string['privacy:metadata:lastname'] = 'Vollständiger Name des Nutzers, der den LTI Consumer aufgerufen hat';
$string['privacy:metadata:lti_submission'] = 'LTI-Abgabe';
$string['privacy:metadata:lti_submission:datesubmitted'] = 'Zeitstempel wann Abgabe erfolgte';
$string['privacy:metadata:lti_submission:dateupdated'] = 'Zeitpunkt wann Abgabe geändert wurde';
$string['privacy:metadata:lti_submission:gradepercent'] = 'Bewertung des Nutzers in Prozent';
$string['privacy:metadata:lti_submission:originalgrade'] = 'Originalbewertung für den Nutzer';
$string['privacy:metadata:lti_submission:userid'] = 'ID des Nutzers der die LTI-Aktivität bearbeitete';
$string['privacy:metadata:lti_tool_proxies'] = 'LTI Proxies';
$string['privacy:metadata:lti_tool_proxies:name'] = 'LTI Proxyname';
$string['privacy:metadata:lti_types'] = 'LTI Typen';
$string['privacy:metadata:lti_types:name'] = 'LTI Typname';
$string['privacy:metadata:role'] = 'Rolle im Kurs für den  Nutzer, der den LTI Consumer aufgerufen hat';
$string['privacy:metadata:timecreated'] = 'Zeitpunkt an dem der Datensatz erstellt wurde';
$string['privacy:metadata:timemodified'] = 'Zeitpunkt an dem Datensatz verändert wurde';
$string['privacy:metadata:userid'] = 'ID des Nutzers, der den LTI Consumer aufgerufen hat';
$string['privacy:metadata:useridnumber'] = 'ID-Nummer des Nutzers, der den LTI Consumer aufgerufen hat';
$string['privacy:metadata:username'] = 'Nutzername des Nutzers, der den LTI Consumer aufgerufen hat';
$string['publickey'] = 'Öffentlicher Schüssel';
$string['publickey_help'] = 'Der vom Tool bereitgestellte öffentliche Schlüssel (im PEM-Format), mit dem die Signaturen eingehender Nachrichten und Dienstanforderungen überprüft werden können.';
$string['publickeyset'] = 'Öffentlicher Schlüsselsatz';
$string['publickeyset_help'] = 'Aus dem öffentlichen Schlüsselsatz bezieht diese Site den öffentlichen Schlüssel des Tools, mit dem Signaturen eingehender Nachrichten und Serviceanfragen verifiziert werden können.';
$string['quickgrade'] = 'Direktbewertung zulassen';
$string['quickgrade_help'] = 'Nach der Aktivierung können mehrere Tools auf einer Seite bewertet werden. Bewertungen und Kommentare eintragen und dann den \'Speichern aller Feedbacks\' Button drücken.';
$string['redirect'] = 'Sie werden in ein paar Sekunden weitergeleitet. Andernfalls den Button anklicken.';
$string['redirectionuris'] = 'Umleitungs-URI(s)';
$string['redirectionuris_help'] = 'Eine Liste von URIs (eine pro Zeile), die das Tool für Autorisierungsanfragen verwendet. Mindestens eine muss registriert sein, bevor eine Nachricht erfolgreich an das Tool gesendet werden kann.';
$string['register'] = 'Registrieren';
$string['register_warning'] = 'Die Registrierungsseite benötigt einige Zeit zum Öffnen. Sollte sie nicht erscheinen, prüfen Sie die eingegebene URL in den Konfigurationseinstellungen. Wenn Moodle https nutzt, stellen Sie sicher, dass das konfigurierte Tool https unterstützt und dass Sie in der URL https nutzen.';
$string['registertype'] = 'Konfiguration eines neu registrierten externen Tools';
$string['registration_options'] = 'Registierungsoptionen';
$string['registrationname'] = 'Name des Toolanbieters';
$string['registrationname_help'] = 'Geben Sie den Namen des Toolproviders an, dessen Angebot Sie registrieren.';
$string['registrationurl'] = 'Registrierungs-URL';
$string['registrationurl_help'] = 'Die Registrierungs-URL wird Ihnen vom Tool-Anbieter zur Verfügung gestellt. An diese URL werden Registrierungsanfragen gesandt.';
$string['reject'] = 'Zurückweisen';
$string['rejected'] = 'Zurückgewiesen';
$string['resource'] = 'Ressource';
$string['resourcekey'] = 'Anwenderschlüssel';
$string['resourcekey_admin'] = 'Anwenderschlüssel';
$string['resourcekey_admin_help'] = 'Der Anwenderschlüssel ist eine Art Nutzername zur Authentifizierung gegenüber dem externen Tool. Es wird vom Tool-Anbieter vergeben,um das Moodle System eindeutig zu identifizieren

Der Anwenderschlüssel wird vom Tool-Anbieter bereitgestellt. Dies kann automatisch oder nach Kontaktaufnahme mit dem Anbieter erfolgen.

Tools, die keine sichere Kommunikation von Moodle erfordern oder keine zusätzlichen Dienste (z. B: Bewertungen zurück liefern) anbieten verzichten häufig auf Anwenderschlüssel.';
$string['resourcekey_help'] = 'Für vorkonfigurierte Tools ist es nicht notwendig einen Ressourcen Schlüssel einzugeben. Der Anwenderschlüssel wird bereits bei der Konfiguration eingegeben.

Das Feld sollte ausgefüllt werden falls noch keine Konfiguration für das Tool erstellt wurde. Falls das Angebot dieses Anbieters mehrfach genutzt werden soll, ist die Kurs Konfiguration sinnvoll, um dich mehrfache Arbeit zu ersparen.

Der Anwenderschlüssel ist eine Art Nutzername zur Authentifizierung gegenüber dem externen Tool. Es wird vom Tool-Anbieter vergeben,um das Moodle System eindeutig zu identifizieren

Der Anwenderschlüssel wird vom Tool-Anbieter bereitgestellt. Dies kann automatisch oder nach Kontaktaufnahme mit dem Anbieter erfolgen.

Tools, die keine sichere Kommunikation von Moodle erfordern oder keine zusätzlichen Dienste (z. B: Bewertungen zurück liefern) anbieten verzichten häufig auf Anwenderschlüssel.';
$string['resourceurl'] = 'Ressource-URL';
$string['return_to_course'] = 'Klicken Sie <a href="{$a->link}" target="_top">hier</a> um zum Kurs zurückzukommen.';
$string['saveallfeedback'] = 'Alle Feedbacks speichern';
$string['search:activity'] = 'Externes Tool - Aktivitätsinfo';
$string['secure_icon_url'] = 'Sichere Icon-URL';
$string['secure_icon_url_help'] = 'Ähnlich wie die Icon-URL. Die Funktion wird bei verschlüsselter Datenübertragung genutzt, um einen Warnhinweis zu verhindern, falls ein Icon unverschlüsselt aufgerufen wird.';
$string['secure_launch_url'] = 'Sichere Tool-URL';
$string['secure_launch_url_help'] = 'Ähnlich wie Tool URL. Wird verwendet um höhere Sicherheistanforderungen umzusetzen. Moodle verwendet die sichere Start URL anstelle der Standard URL, falls die Moodleseite über SSL abegrufen wird oder wenn die Tool Konfiguration auf immer über SSL starten gestellt ist.

Es kann auch die Standard Start URL mit einem https:// versehen werden um über SSL zu starten. Dann kann dieses Feld leer bleiben';
$string['selectcontent'] = 'Inhalt auswählen';
$string['send'] = 'Senden';
$string['services'] = 'Services';
$string['services_help'] = 'Wählen Sie die Services, die an den Tool-Anbieter übertragen werden sollen. Es können mehrere ausgewählt werden.';
$string['setupoptions'] = 'Setup-Optionen';
$string['share_email'] = 'E-Mail des Anwenders an Tool übergeben';
$string['share_email_admin'] = 'E-Mail des Anwenders an Tool übergeben';
$string['share_email_admin_help'] = 'Legen Sie fest, ob die E-Mail Adresse des Nutzers übergeben werden soll. Dies kann notwendig sein, um bestimmte Informationen im Tool anzuzeigen, oder aufgrund von Aktivitäten im externen Tool E-Mails zu versenden.';
$string['share_email_help'] = 'Diese Option legt fest, ob die Nutzer-E-Mail-Adresse an den Tool-Provider übergeben wird, wenn die Tool-Instanz verwendet wird. Nutzer/innen können so bei einem wiederholten Zugriff wiedererkannt werden und personalisierte Informationen per E-Mails erhalten.

Diese Einstellung kann in der Tool-Konfiguration überschrieben werden.';
$string['share_name'] = 'Anwendername an Tool übergeben';
$string['share_name_admin'] = 'Anwendername an Tool übergeben';
$string['share_name_admin_help'] = 'Festlegen, ob der Name des Anwenders an den Anbieter des Tools übergeben werden soll. Dies kann erforderlich sein, um im Tool bestimmte  Informationen anzeigen zu können.';
$string['share_name_help'] = 'Diese Option legt fest, ob der vollständige Nutzername an den Tool-Provider übergeben wird, wenn die Tool-Instanz verwendet wird. Nutzer/innen können so bei einem wiederholten Zugriff wiedererkannt werden und personalisierte Informationen erhalten.

Diese Einstellung kann in der Tool-Konfiguration überschrieben wreden.';
$string['share_roster'] = 'Tool Zugriff auf Teilnehmerliste geben';
$string['share_roster_admin'] = 'Tool kann auf Teilnehmerliste zugreifen.';
$string['share_roster_admin_help'] = 'Festlegen, ob das Tool auf die Liste der Teilnehmer derjenigen Kurse zugreifen darf, in denen das Tool gestartet wurde.';
$string['share_roster_help'] = 'Diese Option legt fest, ob das Tool auf die Teilnehmerliste des Kurses zugreifen darf.

Diese Einstellung kann in der Tool-Konfiguration überschrieben werden.';
$string['show_in_course_activity_chooser'] = 'In Aktivitätsauswahl als vorkonfiguriertes Tool anzeigen.';
$string['show_in_course_lti1'] = 'Verwendung der Toolkonfiguration';
$string['show_in_course_lti1_help'] = 'Dieses Tool kann in der Aktivitätsauswahl für Trainer/innen angezeigt werden, um es zu einem Kurs hinzuzufügen. Alternativ kann es ist im vorkonfigurierten Tool-Menü angezeigt werden, wenn ein externes Tool zu einem Kurs hinzugefügt wird. Des Weiteren kann die Tool-Konfiguration auch verwendet werden, um die genaue Tool-URL zu erfahren, wenn ein externes Tool zu einem Kurs hinzugefügt wird.';
$string['show_in_course_lti2'] = 'Verwendung der Toolkonfiguration';
$string['show_in_course_lti2_help'] = 'Dieses Tool kann für Trainer/innen in der Aktivitätsauswahl angezeigt werden, um es zu einem Kurs hinzuzufügen. Alternativ kann es ist im vorkonfigurierten Tool-Menü angezeigt werden, wenn ein externes Tool zu einem Kurs hinzugefügt wird.';
$string['show_in_course_no'] = 'Nicht anzeigen. Nur verwenden, wenn eine passende Start URL eingetragen ist';
$string['show_in_course_preconfigured'] = 'Als vorkonfiguriertes Tool anzeigen, wenn ein externes Tool hinzugefügt wird';
$string['sitehost'] = 'Website-Hostname';
$string['siteid'] = 'Website-ID';
$string['size'] = 'Größenparameter';
$string['submission'] = 'Leistungen';
$string['submissions'] = 'Einträge';
$string['submissionsfor'] = 'Einreichungen für {$a}';
$string['subplugintype_ltiresource'] = 'LTI Service Ressource';
$string['subplugintype_ltiresource_plural'] = 'LTI Service Ressourcen';
$string['subplugintype_ltiservice'] = 'LTI Service';
$string['subplugintype_ltiservice_plural'] = 'LTI Services';
$string['subplugintype_ltisource'] = 'LTI Quelle';
$string['subplugintype_ltisource_plural'] = 'LTI Quellen';
$string['successfullycreatedtooltype'] = 'Neues Tool erfolgreich angelegt!';
$string['successfullyfetchedtoolconfigurationfromcontent'] = 'Tool-Konfiguration aus dem gewählten Inhalt erfolgreich übernommen.';
$string['toggle_debug_data'] = 'Debug-Modus umschalten';
$string['tool_config_not_found'] = 'Tool-Konfiguration für diese URL nicht gefunden';
$string['tool_settings'] = 'Tool-Einstellungen';
$string['tooldescription'] = 'Tool-Beschreibung';
$string['tooldescription_help'] = 'Die Beschreibung des Tools, die Trainer/innen in der Aktivitätsliste angezeigt wird.

Die Beschreibung sollte darstellen, wofür das Tool ist und was es tut. Außerdem sollte sie alle zusätzlichen Information enthalten, die die Trainer/innen kennen müssen.';
$string['tooldetailsaccesstokenurl'] = 'URL für Zugriffstoken';
$string['tooldetailsauthrequesturl'] = 'URL der Authentifizierungsanforderung';
$string['tooldetailsclientid'] = 'Client-ID';
$string['tooldetailsdeploymentid'] = 'Deployment-ID';
$string['tooldetailsmailtosubject'] = 'LTI Tool-Konfiguration';
$string['tooldetailsmodalemail'] = 'E-Mail';
$string['tooldetailsmodallink'] = 'Konfigurationsdetails anzeigen';
$string['tooldetailsmodaltitle'] = 'Konfigurationsdetails';
$string['tooldetailsplatformid'] = 'Plattform-ID';
$string['tooldetailspublickeyseturl'] = 'URL des öffentlichen Schlüsselbundes';
$string['toolisbeingused'] = 'Dieses Tool wurde {$a} Mal verwendet.';
$string['toolisnotbeingused'] = 'Dieses Tool wurde bisher nicht verwendet.';
$string['toolproxy'] = 'Registrierung von externen Tools';
$string['toolproxy_help'] = 'Administrator/innen können hier externe Tools registrieren, die den LTI 2.0 Standard bereitstellen. Für den Beginn ist nur eine URL des Anbieters des Tools erforderlich. Die Berechtigungen und Service-Zugänge werden dann beim Anlegen einer neuen Aktivität festgelegt.

Die registrierten Tools  werden in vier Kategorien angezeigt:

* **Konfiguriert** - Das Tool wurde angelegt, der Registrierungsprozess wurde jedoch noch nicht begonnen.
* **Wartend** - Der Registrierungsprozess wurde begonnen, jedoch noch nicht abgeschlossen. Verschieben Sie die Einstellungen zurück zu \'konfiguriert\' und speichern Sie sie erneut.
* **Akzeptiert** - Die Tool-Einstellungen wurden bestätigt. Die Ressourcen erscheinen unter Wartend.
* **Zurückgewiesen** - Die Registrierung wurde vom Anbieter abgewiesen. Prüfen Sie die Einstellungen und verschieben Sie sie zurück in die Kategorie \'Konfiguriert\', damit der Prozess erneut starten kann.';
$string['toolproxyregistration'] = 'Registrierung eines externen Tools';
$string['toolregistration'] = 'Registrierung eines externen Tools';
$string['toolsetup'] = 'Konfiguration eines externes Tools';
$string['tooltypeadded'] = 'Vorkonfiguriertes Tool hinzugefügt';
$string['tooltypedeleted'] = 'Vorkonfiguriertes Tool gelöscht';
$string['tooltypenotdeleted'] = 'Das vorkonfigurierte Tool kann nicht gelöscht werden.';
$string['tooltypes'] = 'Tools';
$string['tooltypeupdated'] = 'Vorkonfiguriertes Tool aktualisiert';
$string['toolurl'] = 'Tool URL';
$string['toolurl_contentitemselectionrequest'] = 'Inhalts-URL';
$string['toolurl_contentitemselectionrequest_help'] = 'Die Inhalts URL wird verwendet, um die Inhalts-Auswahlsseite des Tool-Anbieters aufzurufen. Wenn der Eintrag leer ist, wird die Tool-URL genutzt.';
$string['toolurl_help'] = 'Die Basis-URL des Tools wird verwendet um die Start URLs mit der korrekten Konfiguration zu verknüpfen. Die Verwendung von http(s) am Beginn ist optional.

Die Basis-URL wird auch verwendet wenn das Tool keine separate Start-URL zur Verfügung stellt.

Die Basis-URL von *tool.com* passt beispielsweise für folgendes:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=20
* www.tool.com/quizzes

Die Basis-URL von *www.tool.com/quizzes* hingegen passt für folgendes:

* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=20
* www.tool.com/quizzes


Die Basis-URL von *quiz.tool.com* hingegen passt für folgendes:

* quiz.tool.com/
* quiz.tool.com/take.php?id=20

Wenn es zwei unterschiedliche Tool-Konfigurationen für die gleiche Domain gibt, wird die spezifischere benutzt.

Sie können, falls vorhanden, auch eine cartridge URL eintragen. Die Details für das Tool werden dann automatisch eingefügt.';
$string['toolurlplaceholder'] = 'Tool-URL...';
$string['typename'] = 'Name des Tools';
$string['typename_help'] = 'Die Toolbezeichnung wird verwendet, um den Toolanbieter in Moodle zu identifizieren. Die Bezeichnung wird Trainer/innen gezeigt, wenn sie externe Tools in ihren Kursen einbinden.';
$string['types'] = 'Typen';
$string['unabletocreatetooltype'] = 'Das Tool kann nicht angelegt werden.';
$string['unabletofindtooltype'] = 'Das Tool für {$a->id} kann nicht gefunden werden.';
$string['unknownstate'] = 'Unbekannter Status';
$string['update'] = 'Update';
$string['useraccountinformation'] = 'Angaben zum Nutzerkonto';
$string['userpersonalinformation'] = 'Persönliche Angaben';
$string['using_tool_cartridge'] = 'Tool Cartridge verwenden';
$string['using_tool_configuration'] = 'Tool-Konfiguration verwenden:';
$string['validurl'] = 'Eine gültige URL muss mit http(s):// beginnen';
$string['viewsubmissions'] = 'Leistungen und Bewertungsbildschirm anzeigen';
