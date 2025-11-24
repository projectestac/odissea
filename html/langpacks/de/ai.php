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
 * Strings for component 'ai', language 'de', version '4.5'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Annehmen und weiter';
$string['action'] = 'Aktion';
$string['action_generate_image'] = 'Bild generieren';
$string['action_generate_image_desc'] = 'Generiert ein Bild basierend auf einem Textprompt';
$string['action_generate_text'] = 'Text generieren';
$string['action_generate_text_desc'] = 'Generiert Text basierend auf einem Textprompt';
$string['action_generate_text_instruction'] = 'Sie erhalten eine Texteingabe vom Benutzer. Ihre Aufgabe ist es, auf der Grundlage seiner Anfrage Text zu generieren. Befolgen Sie diese wichtigen Anweisungen:
1. Geben Sie die Zusammenfassung nur im Klartext zurück.
2. Fügen Sie keine Markdown-Formatierung, Grüße oder Plattitüden ein.';
$string['action_summarise_text'] = 'Text zusammenfassen';
$string['action_summarise_text_desc'] = 'Fasst den Textinhalt einer Kursseite zusammen.';
$string['action_summarise_text_instruction'] = 'Sie erhalten eine Texteingabe vom Benutzer. Ihre Aufgabe ist es, den bereitgestellten Text zusammenzufassen. Befolgen Sie diese Richtlinien:
1. Verdichten: Kürzen Sie lange Passagen auf die wichtigsten Punkte.
2. Vereinfachen: Machen Sie komplexe Informationen verständlicher, insbesondere für Lernende.

Wichtige Anweisungen:
1. Geben Sie die Zusammenfassung nur im Klartext zurück.
2. Fügen Sie keine Markdown-Formatierung, Grüße oder Plattitüden ein.
3. Konzentrieren Sie sich auf Klarheit, Prägnanz und Zugänglichkeit.

Stellen Sie sicher, dass die Zusammenfassung leicht zu lesen ist und die wichtigsten Punkte des Originaltexts effektiv vermittelt.';
$string['action_translate_text'] = 'Text übersetzen';
$string['action_translate_text_desc'] = 'Übersetzt einen Bereitgestellten Text von einer Sprache in eine andere';
$string['actionsettingprovider'] = 'Einstellungen für {$a} Aktion';
$string['actionsettingprovider_desc'] = 'Diese Einstellungen steuern, wie {$a->providername} die Aktion {$a->actionname} ausführt.';
$string['ai'] = 'KI';
$string['aiplacements'] = 'KI-Platzierung';
$string['aiproviders'] = 'KI-Provider';
$string['aiusagepolicy'] = 'KI-Nutzungsregeln';
$string['availableplacements'] = 'Auswählen, wo KI-Aktionen verfügbar sind';
$string['availableplacements_desc'] = 'Platzierungen legen fest, wie und wo KI-Aktionen auf Ihrer Website verwendet werden können. Über die Einstellungen können Sie auswählen, welche Aktionen in den einzelnen Platzierungen verfügbar sind.';
$string['availableproviders'] = 'KI-Provider verwalten, die mit Ihrem LMS verbunden sind';
$string['availableproviders_desc'] = 'KI-Provider fügen Ihrer Website eine KI-Funktionalität durch "Aktionen" wie Textzusammenfassung oder Bildgenerierung hinzu.<br/>
Sie können die Aktionen für jeden Provider in seinen Einstellungen verwalten.';
$string['contentwatermark'] = 'Generiert von KI';
$string['declineaipolicy'] = 'Ablehnen';
$string['manageaiplacements'] = 'KI-Platzierungen verwalten';
$string['manageaiproviders'] = 'KI-Provider verwalten';
$string['noproviders'] = 'Diese Aktion ist nicht verfügbar. Für diese Aktion sind keine <a href="{$a}"> Provider </a> konfiguriert.';
$string['placement'] = 'Platzierung';
$string['placementactionsettings'] = 'Aktionen';
$string['placementactionsettings_desc'] = 'Das sind die für diese Platzierung verfügbaren KI-Aktionen.';
$string['placementsettings'] = 'Platzierungsspezifische Einstellungen';
$string['placementsettings_desc'] = 'Diese Einstellungen steuern, wie die KI-Platzierung eine Verbindung zum KI-Dienst herstellt, außerdem zugehörige Vorgänge.';
$string['privacy:metadata:ai_action_generate_image'] = 'Tabelle, in der die Nutzeranfragen zur Bildgenerierung gespeichert werden.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'Seitenverhältnis der generierten Bilder';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'Anzahl der generierten Bilder';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'Prompt für die Anfrage zur Bildgenerierung';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'Qualität der generierten Bilder';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'Überarbeiteter Prompt für die generierten Bilder';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'Quell-URL der generierten Bilder';
$string['privacy:metadata:ai_action_generate_image:style'] = 'Style der generierten Bilder';
$string['privacy:metadata:ai_action_generate_text'] = 'Tabelle, in der die Nutzeranfragen zur Textgenerierung gespeichert werden.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'Vervollständigungstoken, die zur Textgenerierung verwendet wurden.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'Eindeutiger Hash, der den Status bzw. die Version von Modell und Inhalt darstellt.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'Tatsächlicher Text, der vom KI-Modell basierend auf dem Prompt generiert wird.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'Prompt für die Anfrage zur Textgenerierung';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'Prompttoken, die zur Textgenerierung verwendet wurden';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'ID der Antwort';
$string['privacy:metadata:ai_action_register'] = 'Tabelle, in der die von Nutzer/innen gestellten Aktionsanfragen gespeichert werden.';
$string['privacy:metadata:ai_action_register:actionid'] = 'ID der Aktionsanfrage';
$string['privacy:metadata:ai_action_register:actionname'] = 'Aktionsname der Anfrage';
$string['privacy:metadata:ai_action_register:provider'] = 'Name des Providers, der die Anfrage bearbeitet hat';
$string['privacy:metadata:ai_action_register:success'] = 'Status der Aktionsanfrage';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'Ausführungszeit der Anfrage';
$string['privacy:metadata:ai_action_register:timecreated'] = 'Erstellungszeit der Anfrage';
$string['privacy:metadata:ai_action_register:userid'] = 'ID der Person, die die Anfrage gestellt hat';
$string['privacy:metadata:ai_action_summarise_text'] = 'Tabelle, in der die Nutzeranfragen zur Textzusammenfassung gespeichert werden.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Vervollständigungstoken, die zur Textzusammenfassung verwendet wurden.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'Eindeutiger Hash, der den Status bzw. die Version von Modell und Inhalt darstellt';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'Tatsächlicher Text, der vom KI-Modell basierend auf dem Prompt generiert wird.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'Prompt der Anfrage zur Textzusammenfassung';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'Prompttoken, das zur Textzusammenfassung verwendet wurde.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'ID der Anfrage';
$string['privacy:metadata:ai_policy_register'] = 'Tabelle, in der der Status der Zustimmung zu den KI-Bedingungen für jede einzelne Person gespeichert werden.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'ID des Kontextes, dessen Daten gespeichert wurden';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'Zeit, zu der die Person die KI-Bedingungen akzeptiert hat';
$string['privacy:metadata:ai_policy_register:userid'] = 'ID der Person, deren Daten gespeichert wurden';
$string['provider'] = 'Provider';
$string['provideractionsettings'] = 'Aktionen';
$string['provideractionsettings_desc'] = 'Wählen und konfigurieren Sie die Aktionen, die {$a} auf Ihrer Website ausführen kann.';
$string['providers'] = 'Provider';
$string['providersettings'] = 'Einstellungen';
$string['userpolicy'] = '<h4>Willkommen bei der neuen KI-Funktion!</h4>
<p>Diese Funktion für künstliche Intelligenz (KI) basiert ausschließlich auf externen Large Language Models (LLM), um Ihr Lern- und Lehrerlebnis zu verbessern. Bevor Sie diese KI-Dienste nutzen, lesen Sie bitte diese Nutzungsrichtlinie.</p>
<h4>Genauigkeit von KI-generierten Inhalten</h4>
<p>KI kann nützliche Vorschläge und Informationen liefern, ihre Genauigkeit kann jedoch variieren. Sie sollten die bereitgestellten Infos immer überprüfen und sicherstellen, dass sie korrekt, vollständig und für Ihre spezifische Situation geeignet sind.</p>
<h4>Wie Ihre Daten verarbeitet werden</h4>
<p>Diese KI-Funktion verwendet externe "Large Language Models" (LLM). Wenn Sie diese Funktion benutzen, werden alle von Ihnen übermittelten Eingaben oder personenbezogenen Daten gemäß der Datenschutzrichtlinie dieser LLMs verarbeitet. Wir empfehlen Ihnen, die Datenschutzrichtlinie des LLMs zu lesen, um zu verstehen, wie mit Ihren personenbezogenen Daten umgegangen wird.
Darüber hinaus können Ihre Interaktionen mit den KI-Funktionen auf dieser Website aufgezeichnet und gespeichert werden. Wenn Sie Fragen hierzu haben, wenden Sie sich bitte an Ihre Trainer/innen oder die Lernorganisation.</p>
<p>Wenn Sie fortfahren, erkennen Sie an, dass Sie diese Richtlinie verstehen und ihr zustimmen.</p>';
