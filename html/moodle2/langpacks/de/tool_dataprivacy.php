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
 * Strings for component 'tool_dataprivacy', language 'de', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_dataprivacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Aktivitäten und Ressourcen';
$string['addcategory'] = 'Kategorie hinzufügen';
$string['addpurpose'] = 'Zweck hinzufügen';
$string['approve'] = 'Bestätigen';
$string['approverequest'] = 'Anfrage bestätigen';
$string['cachedef_contextlevel'] = 'Zwecke und Kategorien (Kontextlevel)';
$string['cachedef_purpose'] = 'Verarbeitungszwecke';
$string['cancelrequest'] = 'Anfrage abbrechen';
$string['cancelrequestconfirmation'] = 'Wollen Sie diese Anfrage zur Bereitstellung von Daten tatsächlich abbrechen?';
$string['categories'] = 'Kategorien';
$string['categorieslist'] = 'Liste von Datenkategorien';
$string['category'] = 'Kategorie';
$string['categorycreated'] = 'Kategorie erstellt';
$string['categorydefault'] = 'Standardkategorie';
$string['categorydefault_help'] = 'Die Standardkategorie wird allen neuen Instanzen als Standardwert zugewiesen. Wenn vererben gewählt ist, wird die Datenkategorie der darüber liegenden Ebene zugewiesen. Kontexte sind (von unten nach oben): Block > Aktivitätsmodul > Kurs > Kursbereich > Nutzer/in > Website';
$string['category_help'] = 'Eine Kategorie in der Datenregistrierung beschreibt einen Datentyp/Datenkategorie. Eine neue Kategorie kann hinzugefügt werden. Wenn \'vererben\' ausgewählt ist, wird eine Kategorie von der darüberliegenden Ebene gewählt. Kontexte sind (von unten nach oben): Block > Aktivitätsmodul > Kurs > Kursbereich > Nutzer/in > Website';
$string['categoryupdated'] = 'Kategorie aktualisiert';
$string['close'] = 'Schließen';
$string['compliant'] = 'Zustimmung';
$string['confirmapproval'] = 'Wollen Sie diese Anfrage zur Bereitstellung von Daten tatsächlich bestätigen?';
$string['confirmcontextdeletion'] = 'Möchten Sie die ausgewählten Kontexte wirklich löschen? Damit werden auch alle verbundenen Nutzerdaten der Unterkontexte gelöscht.';
$string['confirmdenial'] = 'Wollen Sie diese Anfrage zur Bereitstellung von Daten tatsächlich ablehnen?';
$string['contactdataprotectionofficer'] = 'Kontakt für Datenschutzfragen';
$string['contactdataprotectionofficer_desc'] = 'Das Aktivieren dieser Funktion stellt einen Link für Nutzer/innen zur Verfügung, um sich mit Datenschutzfragen an die Systembetreiber zu wenden. Der Link wird in der Profilseite angezeigt.';
$string['contactdpoviaprivacypolicy'] = 'Richten Sie Fragen zum Datenschutz in der Plattform an unsere Ansprechpersonen.';
$string['contextlevelname10'] = 'Website';
$string['contextlevelname30'] = 'Nutzer/innen';
$string['contextlevelname40'] = 'Kurskategorien';
$string['contextlevelname50'] = 'Kurse';
$string['contextlevelname70'] = 'Aktivitätsmodule';
$string['contextlevelname80'] = 'Blöcke';
$string['contextpurposecategorysaved'] = 'Zwecke und Kategorien der Speicherung';
$string['createcategory'] = 'Datenkategorie erstellen';
$string['createpurpose'] = 'Zweck neu anlegen';
$string['datadeletion'] = 'Datenlöschung';
$string['datadeletionpagehelp'] = 'Daten, deren Speicherdatum abgelaufen ist, sind hier aufgeführt. Prüfen Sie, ob diese Daten gelöscht werden können. Nach der Bestätigung wird die Aufgabe im Hintergrund gestartet werden.';
$string['dataprivacy:makedatarequestsforchildren'] = 'Datenanfrage für Kinder erstellen';
$string['dataprivacy:managedataregistry'] = 'Datenverarbeitung verwalten';
$string['dataprivacy:managedatarequests'] = 'Datenanfragen verwalten';
$string['dataregistry'] = 'Datenregistrierung';
$string['dataregistryinfo'] = 'Die Datenregistrierung aktiviert Kategorien (für Datentypen/Datenkategorien) und Zwecke (Gründe für die Verarbeitung von Daten), die dem gesamten Inhalt der Website zugeordnet werden können. Dies kann für Personen, Kurse und bis hinunter zu einzelnen Aktivitäten und Blöcken erfolgen. Für jeden Zweck kann eine Speicherdauer festgelegt werden. Wenn die Speicherdauer abgelaufen ist, wird der Inhalt zum Löschen gekennzeichnet. Ein Administrator kann den Löschvorgang durchführen.';
$string['datarequestcreatedforuser'] = 'Datenanfrage für {$a} angelegt';
$string['datarequestemailsubject'] = 'Datenanfrage: {$a}';
$string['datarequests'] = 'Datenanfragen';
$string['daterequested'] = 'Anfragedatum';
$string['daterequesteddetail'] = 'Anfragedatum:';
$string['defaultsinfo'] = 'Standardkategorien und -zwecke, die bei allen neu angelegten Instanzen hinterlegt werden.';
$string['defaultssaved'] = 'Standardeinstellungen gespeichert';
$string['deletecategory'] = 'Kategorie \'{$a}\' löschen';
$string['deletecategorytext'] = 'Möchten Sie die Kategorie \'{$a}\' wirklich löschen?';
$string['deleteexpiredcontextstask'] = 'Abgelaufene Kontexte löschen';
$string['deletepurpose'] = 'Zweck \'{$a}\' löschen';
$string['deletepurposetext'] = 'Möchten Sie den Zweck \'{$a}\' wirklich löschen?';
$string['deny'] = 'Ablehnen';
$string['denyrequest'] = 'Anfrage ablehnen';
$string['download'] = 'Download';
$string['dporolemapping'] = 'Rollenzuordnung für Datenschutzansprechpartner';
$string['dporolemapping_desc'] = 'Wählen Sie eine oder mehrere Rollen aus, deren Mitglieder für Datenschutzfragen zuständig sind. Nutzer/innen mit diesen Rollen können Anfragen zum Datenschutz bearbeiten. Die ausgewählten Rollen müssen dazu die Berechtigung \'tool/dataprivacy:managedatarequests\' bekommen.';
$string['editcategories'] = 'Kategorien bearbeiten';
$string['editcategory'] = 'Kategorie bearbeiten';
$string['editpurpose'] = 'Zweck bearbeiten';
$string['editpurposes'] = 'Zwecke bearbeiten';
$string['effectiveretentionperiodcourse'] = '{$a} (nach dem Kursende)';
$string['effectiveretentionperioduser'] = '{$a} (seit dem letzten Zugriff der Person auf die Website)';
$string['emailsalutation'] = 'Guten Tag {$a},';
$string['errorcontexthasunexpiredchildren'] = 'Der Kontext \'{$a}\' hat Unterkontexte, die noch nicht abgelaufen sind. Es sind derzeit keine Kontexte zum Löschen gekennzeichnet.';
$string['errorinvalidrequeststatus'] = 'Ungültiger Abfragestatus!';
$string['errorinvalidrequesttype'] = 'Ungültiger Abfragetyp!';
$string['errornocapabilitytorequestforothers'] = 'Nutzer/in {$a->requestedby} hat nicht die Berechtigung, Datenanfragen im Namen einer anderen Person {$a->userid} auszulösen.';
$string['errornoexpiredcontexts'] = 'Es gibt derzeit keine Kontexte, die zum Löschen bestätigt werden müssen.';
$string['errorrequestalreadyexists'] = 'Sie haben bereits eine Anfrage gestellt, die in Bearbeitung ist.';
$string['errorrequestnotfound'] = 'Anfrage nicht gefunden';
$string['errorrequestnotwaitingforapproval'] = 'Für die Anfrage wird keine Bestätigung erwartet. Entweder ist sie noch nicht fertig oder wurde bereits bearbeitet.';
$string['errorsendingmessagetodpo'] = 'Beim Versenden einer Mitteilung an {$a} ist ein Fehler aufgetreten.';
$string['exceptionnotificationbody'] = '<p>Ausnahme beim Aufruf von <b>{\\$a->fullmethodname}</b>.<br>Das Plugin <b>{\\$a->component}</b> konnte die Verarbeitung der Daten nicht beenden. Unten finden Sie Informationen für den Pluginentwickler </p><pre>{\\$a->message}<br>\\n\\n{\\$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'Fehler beim Verarbeiten persönlicher Daten';
$string['expandplugin'] = 'Plugin auf- und zuklpappen';
$string['expandplugintype'] = 'Plugintyp auf- und zuklpappen';
$string['expiredretentionperiodtask'] = 'Aufbewahrungszeitraum abgelaufen';
$string['expiry'] = 'Ablauf';
$string['explanationtitle'] = 'Icons auf dieser Seite und ihre Bedeutung';
$string['external'] = 'Zusätzlich';
$string['externalexplanation'] = 'Ein zusätzlich installiertes Plugin';
$string['frontpagecourse'] = 'Startseitenkurs';
$string['gdpr_art_6_1_a_description'] = 'Die betroffene Person hat ihre Zustimmung zur Verarbeitung ihrer personenbezogenen Daten für einen oder mehrere bestimmte Zwecke gegeben';
$string['gdpr_art_6_1_a_name'] = 'Einwilligung (DSGVO Art 6.1(a))';
$string['gdpr_art_6_1_b_description'] = 'Die Verarbeitung ist für die Erfüllung eines Vertrags, dessen Vertragspartei die betroffene Person ist, oder zur Durchführung vorvertraglicher Maßnahmen erforderlich, die auf Anfrage der betroffenen Person erfolgen';
$string['gdpr_art_6_1_b_name'] = 'Vertrag (DSGVO Art. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = 'Die Verarbeitung ist zur Erfüllung einer rechtlichen Verpflichtung erforderlich, der der Verantwortliche unterliegt';
$string['gdpr_art_6_1_c_name'] = 'Rechtliche Verpflichtung (DSGVO Art. 6.1(c))';
$string['gdpr_art_6_1_d_description'] = 'Die Verarbeitung ist erforderlich, um lebenswichtige Interessen der betroffenen Person oder einer anderen natürlichen Person zu schützen';
$string['gdpr_art_6_1_d_name'] = 'Lebenswichtige Interessen (DSGVO Art. 6.1(d))';
$string['gdpr_art_6_1_e_description'] = 'Die Verarbeitung ist für die Wahrnehmung einer Aufgabe erforderlich, die im öffentlichen Interesse liegt oder in Ausübung öffentlicher Gewalt erfolgt, die dem Verantwortlichen übertragen wurde';
$string['gdpr_art_6_1_e_name'] = 'Öffentliches Interesse (DSGVO Art. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = 'Die Verarbeitung ist zur Wahrung der berechtigten Interessen des Verantwortlichen oder eines Dritten erforderlich, sofern nicht die Interessen oder Grundrechte und Grundfreiheiten der betroffenen Person, die den Schutz personenbezogener Daten erfordern, überwiegen, insbesondere dann, wenn es sich bei der betroffenen Person um ein Kind handelt';
$string['gdpr_art_6_1_f_name'] = 'Berechtigtes Interesse (DSGVO Art. 6.1(f))';
$string['gdpr_art_9_2_a_description'] = 'Die betroffene Person hat in die Verarbeitung der genannten personenbezogenen Daten für einen oder mehrere festgelegte Zwecke ausdrücklich eingewilligt, es sei denn, nach Unionsrecht oder dem Recht der Mitgliedstaaten kann das Verbot nach Absatz 1 durch die Einwilligung der betroffenen Person nicht aufgehoben werden';
$string['gdpr_art_9_2_a_name'] = 'Ausdrückliche Einwilligung (DSGVO Art. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = 'Die Verarbeitung ist erforderlich, damit der Verantwortliche oder die betroffene Person die ihm bzw. ihr aus dem Arbeitsrecht und dem Recht der sozialen Sicherheit und des Sozialschutzes erwachsenden Rechte ausüben und seinen bzw. ihren diesbezüglichen Pflichten nachkommen kann, soweit dies nach Unionsrecht oder dem Recht der Mitgliedstaaten oder einer Kollektivvereinbarung nach dem Recht der Mitgliedstaaten, das geeignete Garantien für die Grundrechte und die Interessen der betroffenen Person vorsieht, zulässig ist';
$string['gdpr_art_9_2_b_name'] = 'Arbeitsrecht, soziale Sicherheit, Sozialschutz (DSGVO Art. 9.2(b))';
$string['gdpr_art_9_2_c_description'] = 'Die Verarbeitung ist zum Schutz lebenswichtiger Interessen der betroffenen Person oder einer anderen natürlichen Person erforderlich und die betroffene Person ist aus körperlichen oder rechtlichen Gründen außerstande, ihre Einwilligung zu geben.';
$string['gdpr_art_9_2_c_name'] = 'Schutz lebenswichtiger Interessen (DSGVO Art. 9.2(c))';
$string['gdpr_art_9_2_d_description'] = 'Die Verarbeitung erfolgt auf der Grundlage geeigneter Garantien durch eine politisch, weltanschaulich, religiös oder gewerkschaftlich ausgerichtete Stiftung, Vereinigung oder sonstige Organisation ohne Gewinnerzielungsabsicht im Rahmen ihrer rechtmäßigen Tätigkeiten und unter der Voraussetzung, dass sich die Verarbeitung ausschließlich auf die Mitglieder oder ehemalige Mitglieder der Organisation oder auf Personen, die im Zusammenhang mit deren Tätigkeitszweck regelmäßige Kontakte mit ihr unterhalten, bezieht und die personenbezogenen Daten nicht ohne Einwilligung der betroffenen Personen nach außen offengelegt werden';
$string['gdpr_art_9_2_d_name'] = 'Stiftung, Vereinigung oder sonstige Organisation ohne Gewinnerzielungsabsicht im Rahmen ihrer rechtmäßigen Tätigkeiten(DSGVO Art. 9.2(d))';
$string['gdpr_art_9_2_e_description'] = 'Die Verarbeitung bezieht sich auf personenbezogene Daten, die die betroffene Person offensichtlich öffentlich gemacht hat';
$string['gdpr_art_9_2_e_name'] = 'Von der Person veröffentlichte Daten (DSGVO Art. 6.1(b))';
$string['gdpr_art_9_2_f_description'] = 'Die Verarbeitung ist zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen oder bei Handlungen der Gerichte im Rahmen ihrer justiziellen Tätigkeit erforderlich';
$string['gdpr_art_9_2_f_name'] = 'Rechtsansprüche oder gerichtliche Vertretung (DSGVO Art. 6.1(b))';
$string['gdpr_art_9_2_g_description'] = 'Die Verarbeitung ist auf der Grundlage des Unionsrechts oder des Rechts eines Mitgliedstaats, das in angemessenem Verhältnis zu dem verfolgten Ziel steht, den Wesensgehalt des Rechts auf Datenschutz wahrt und angemessene und spezifische Maßnahmen zur Wahrung der Grundrechte und Interessen der betroffenen Person vorsieht, aus Gründen eines erheblichen öffentlichen Interesses erforderlich';
$string['gdpr_art_9_2_g_name'] = 'Erhebliches öffentliches Interesse (DSGVO Art. 9.2(g))';
$string['gdpr_art_9_2_h_description'] = 'Die Verarbeitung ist für Zwecke der Gesundheitsvorsorge oder der Arbeitsmedizin, für die Beurteilung der Arbeitsfähigkeit des Beschäftigten, für die medizinische Diagnostik, die Versorgung oder Behandlung im Gesundheits- oder Sozialbereich oder für die Verwaltung von Systemen und Diensten im Gesundheits- oder Sozialbereich auf der Grundlage des Unionsrechts oder des Rechts eines Mitgliedstaats oder aufgrund eines Vertrags mit einem Angehörigen eines Gesundheitsberufs und vorbehaltlich der in Absatz 3 genannten Bedingungen und Garantien erforderlich.';
$string['gdpr_art_9_2_h_name'] = 'Gesundheitsvorsorge (DSGVO Art. 9.2(h))';
$string['gdpr_art_9_2_i_description'] = 'Die Verarbeitung ist aus Gründen des öffentlichen Interesses im Bereich der öffentlichen Gesundheit, wie dem Schutz vor schwerwiegenden grenzüberschreitenden Gesundheitsgefahren oder zur Gewährleistung hoher Qualitäts- und Sicherheitsstandards bei der Gesundheitsversorgung und bei Arzneimitteln und Medizinprodukten erforderlich, und zwar auf der Grundlage des Unionsrechts oder des Rechts eines Mitgliedstaats, das angemessene und spezifische Maßnahmen zur Wahrung der Rechte und Freiheiten der betroffenen Person, insbesondere des Berufsgeheimnisses, vorsieht.';
$string['gdpr_art_9_2_i_name'] = 'Öffentliche Gesundheit (DSGVO Art 9.2(i))';
$string['gdpr_art_9_2_j_description'] = 'Die Verarbeitung ist auf der Grundlage des Unionsrechts oder des Rechts eines Mitgliedstaats, das in angemessenem Verhältnis zu dem verfolgten Ziel steht, den Wesensgehalt des Rechts auf Datenschutz wahrt und angemessene und spezifische Maßnahmen zur Wahrung der Grundrechte und Interessen der betroffenen Person vorsieht, für im öffentlichen Interesse liegende Archivzwecke, für wissenschaftliche oder historische Forschungszwecke oder für statistische Zwecke gemäß Artikel 89 Absatz 1 erforderlich';
$string['gdpr_art_9_2_j_name'] = 'Öffentliches Interesse oder wissenschaftliche, historische oder statistische Zwecke (DSGVO Art 9.2(i))';
$string['hide'] = 'Alle einklappen';
$string['httpwarning'] = 'Daten, die von dieser Website heruntergeladen werden, sind evtl. nicht verschlüsselt. Nehmen Sie Kontakt mit dem Administrator auf, um SSL für diese Website zu installieren.';
$string['inherit'] = 'Vererben';
$string['lawfulbases'] = 'Rechtliche Grundlagen';
$string['lawfulbases_help'] = 'Wählen Sie mindestens eine Option aus, auf deren rechtlicher Grundlage die Verarbeitung der Daten beruht. Details finden Sie unter <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">DSGVO Art. 6.1</a>';
$string['message'] = 'Mitteilung';
$string['messagelabel'] = 'Mitteilung:';
$string['messageprovider:contactdataprotectionofficer'] = 'Datenanfragen';
$string['messageprovider:datarequestprocessingresults'] = 'Ergebnisse der Bearbeitung der Datenanfragen';
$string['messageprovider:notifyexceptions'] = 'Datenanfrage-Ausnahmebenachrichtigung';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Meine eigenen Datenanfragen';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} Kinder';
$string['newrequest'] = 'Neue Anfrage';
$string['noactivitiestoload'] = 'Keine Aktivitäten';
$string['noassignedroles'] = 'In diesem Kontext wurden keine Rollen zugeordnet';
$string['noblockstoload'] = 'Keine Blöcke';
$string['nocategories'] = 'Es gibt derzeit keine Kategorien';
$string['nocoursestoload'] = 'Keine Aktivtäten';
$string['nodatarequests'] = 'Es gibt keine Datenanfragen';
$string['noexpiredcontexts'] = 'In diesem Kontext sind keine Speicherfristen abgelaufen, für die das Löschen bestätigt werden muss.';
$string['nopersonaldatarequests'] = 'Sie haben keine persönlichen Datenanfragen';
$string['nopurposes'] = 'Es gibt derzeit keine hinterlegten Zwecke';
$string['nosubjectaccessrequests'] = 'Es gibt derzeit keine Datenanfragen, die Sie bearbeiten sollten.';
$string['nosystemdefaults'] = 'Standardeinträge der Zwecke und Kategorien wurden noch nicht hinterlegt';
$string['notset'] = 'Nicht gesetzt (Standardwert verwenden)';
$string['pluginname'] = 'Schutz persönlicher Daten';
$string['pluginname_help'] = 'Datenschutzplugin';
$string['pluginregistry'] = 'Datenschutzübersicht für Plugins';
$string['pluginregistrytitle'] = 'Datenschutzkonformität für Plugins';
$string['privacy'] = 'Privatsphäre';
$string['privacy:metadata:request'] = 'Informationen über Anfragen zur Verarbeitung  persönlicher Daten (Zugriff und Löschanfragen), die für diese Site gestellt wurden';
$string['privacy:metadata:request:comments'] = 'Alle Nuzerkommentare, die diese Anfrage betreffen.';
$string['privacy:metadata:request:dpocomment'] = 'Alle Kommentare, die von den Datenschutzzuständigen dieser Seite zu der Anfrage gemacht wurden.';
$string['privacy:metadata:request:requestedby'] = 'Die ID des anfragenden Nutzers, falls im Namen einer anderen Person erstellt';
$string['privacy:metadata:request:timecreated'] = 'Zeitstempel wann Anfrage von Nutzer erstellt wurde';
$string['privacy:metadata:request:userid'] = 'ID des anfragenden Nutzers';
$string['protected'] = 'Geschützt';
$string['protectedlabel'] = 'Die Aufbewahrung der Daten hat Vorrang vor der Anfrage des Nutzers zur Datenlöschung. Die Daten werden nach Ablauf der Aufbewahrungsfrist  gelöscht.';
$string['purpose'] = 'Zweck';
$string['purposecreated'] = 'Zweck angelegt';
$string['purposedefault'] = 'Standardwert für Zweck';
$string['purposedefault_help'] = 'Der Standardzweck wird allen neuen Instanzen als Standardwert zugewiesen. Wenn vererben gewählt wird, wird der Zweck der darüber liegenden Ebene zugewiesen. Kontexte sind von unten nach oben: Block > Aktivitätsmodul > Kurs > Kursbereich >Nutzer > Site';
$string['purpose_help'] = 'Eine Kategorie in der Datenregistrierung beschreibt einen Datentyp/Datenkategorie.  Ein Zweck beschreibt den Zweck der Verarbeitung der Daten . Ein neuer Zweck kann hinzugefügt werden oder wenn \'vererben\' ausgewählt ist wird ein Zweck von der darüberliegenden Ebene gewählt.  Kontexte sind von unten nach oben: Block > Aktivitätsmodul > Kurs > Kursbereich > Nutzer > Site';
$string['purposes'] = 'Zwecke';
$string['purposeslist'] = 'Liste der Zwecke der Datenverarbeitung';
$string['purposeupdated'] = 'Zweck aktualisiert';
$string['replyto'] = 'Antwort an';
$string['requestactions'] = 'Aktionen';
$string['requestby'] = 'Angefragt durch';
$string['requestcomments'] = 'Kommentare';
$string['requestcomments_help'] = 'Hier können Sie weitere Angaben zu Ihrer Anfrage machen.';
$string['requestemailintro'] = 'Sie haben eine Anfrage zur Auskunft über gespeicherte Daten erhalten.';
$string['requestfor'] = 'Anfrage für';
$string['requeststatus'] = 'Status';
$string['requestsubmitted'] = 'Ihre Anfrage wurde an die Ansprechpersonen für Datenschutzfragen weitergeleitet.';
$string['requesttype'] = 'Typ';
$string['requesttypedelete'] = 'Löschen aller über mich gespeicherten Daten';
$string['requesttypedeleteshort'] = 'Löschen';
$string['requesttypeexport'] = 'Export aller meiner gespeicherten persönlichen Daten';
$string['requesttypeexportshort'] = 'Export';
$string['requesttype_help'] = 'Geben Sie einen Grund für die Kontaktaufnahme ein.';
$string['requesttypeothers'] = 'Allgemeine Anfrage';
$string['requesttypeothersshort'] = 'Andere';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requiresattention'] = 'Erfordert Ihre Aufmerksamkeit';
$string['requiresattentionexplanation'] = 'Dieses Plugin unterstützt die Moodle-Datenschutz-API nicht. Falls dieses Plugin personenbezogene Daten speichert, können diese nicht in Berichte aufgenommen oder gelöscht werden.';
$string['resultdeleted'] = 'Sie haben kürzlich daraum gebeten Ihren persönlichen Nutzeraccount und alle persönlichen Daten auf {$a} zu löschen. Dieser Prozess wurde inzwischen abgeschlossen. Sie können sich nicht mehr einloggen.';
$string['resultdownloadready'] = 'Die von Ihnen angefragte Kopie aller gespeicherten persönlichen Daten in {$a} wurde nun erstellt. Klicken Sie auf den folgenden Link, um diese herunterzuladen.';
$string['retentionperiod'] = 'Aufbewahrungsfrist';
$string['retentionperiod_help'] = 'Die Speicherdauer legt fest wie lange Daten gespeichert werden sollen. Wenn die Speicherdauer abgelaufen ist, werden die Daten zum Löschen gekenzeichnet und ein Administrator kann dies bestätigen.';
$string['retentionperiodnotdefined'] = 'Eine Aufbewahrungsfrist wurde nicht definiert';
$string['retentionperiodzero'] = 'Keine Aufbewahrungsfrist';
$string['reviewdata'] = 'Daten prüfen';
$string['send'] = 'Senden';
$string['sensitivedatareasons'] = 'Gründe für die Verarbeitung besonderer Kategorien personenbezogener Daten';
$string['sensitivedatareasons_help'] = 'Wählen Sie einen oder mehrere zutreffende Gründe für die Verarbeitung besonderer Kategorien personenbezogener Daten aus. Weitere Informationen <a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">DSGVO Art. 9.2</a>';
$string['setdefaults'] = 'Standardeinstellungen';
$string['statusapproved'] = 'Bestätigt';
$string['statusawaitingapproval'] = 'Warten auf Bestätigung';
$string['statuscancelled'] = 'Abgebrochen';
$string['statuscomplete'] = 'Vollständig';
$string['statusdetail'] = 'Status';
$string['statuspending'] = 'Abwartend';
$string['statuspreprocessing'] = 'Vorverarbeitung';
$string['statusprocessing'] = 'Verarbeitung';
$string['statusrejected'] = 'Zurückgewiesen';
$string['subjectscope'] = 'Themenbereich';
$string['subjectscope_help'] = 'Liste der Rollen, die in dem Kontext zugeordnet sein können';
$string['user'] = 'Nutzer/in';
$string['viewrequest'] = 'Anfrage einsehen';
$string['visible'] = 'Alle aufklappen';
