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
 * Strings for component 'tool_lp', language 'de', version '3.11'.
 *
 * @package     tool_lp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aktionen';
$string['activities'] = 'Aktivitäten';
$string['addcohorts'] = 'Globale Gruppen hinzufügen';
$string['addcohortstosync'] = 'Globale Gruppen zur Synchronisation hinzufügen';
$string['addcompetency'] = 'Kompetenz hinzufügen';
$string['addcoursecompetencies'] = 'Kompetenzen zum Kurs hinzufügen';
$string['addcrossreferencedcompetency'] = 'Querverwiesene Kompetenz hinzufügen';
$string['addingcompetencywillresetparentrule'] = 'Das Hinzufügen einer neuen Kompetenz wird die Liste von Regel von \'{$a}\' entfernen. Möchten Sie weitermachen?';
$string['addnewcompetency'] = 'Neue Kompetenz hinzufügen';
$string['addnewcompetencyframework'] = 'Neuen Kompetenzrahmen hinzufügen';
$string['addnewplan'] = 'Neuen Lernplan hinzufügen';
$string['addnewtemplate'] = 'Neue Lernplanvorlage hinzufügen';
$string['addnewuserevidence'] = 'Neuen Beleg hinzufügen';
$string['addtemplatecompetencies'] = 'Kompetenzen zur Lernplanvorlage hinzufügen';
$string['aisrequired'] = '\'{$a}\' ist erforderlich';
$string['aplanswerecreated'] = '{$a} Lernpläne sind neu angelegt worden.';
$string['aplanswerecreatedmoremayrequiresync'] = '{$a} Lernpläne sind neu angelegt worden und weitere werden bei der nächsten Synchronisation folgen.';
$string['assigncohorts'] = 'Globale Gruppen zuweisen';
$string['averageproficiencyrate'] = 'Der durchschnittliche Fähigkeitsgrad für abgeschlossene Lernpläne, die auf dieser Vorlage basieren, beträgt {$a}%.';
$string['cancelreviewrequest'] = 'Überprüfungsanfrage abbrechen';
$string['cannotaddrules'] = 'Diese Kompetenz kann nicht konfiguriert werden.';
$string['cannotcreateuserplanswhentemplateduedateispassed'] = 'Neue Lernpläne können nicht angelegt werden. Das Fälligkeitsdatum für diese Vorlage ist abgelaufen oder wird in Kürze ablaufen.';
$string['cannotcreateuserplanswhentemplatehidden'] = 'Neue Lernpläne können nicht angelegt werden, solange diese Vorlage verborgen ist.';
$string['category'] = 'Kursbereich';
$string['chooserating'] = 'Wertung auswählen...';
$string['cohortssyncedtotemplate'] = 'Globale Gruppen wurden zur Lernplanvorlage synchronisiert';
$string['competenciesforframework'] = 'Kompetenzen für {$a}';
$string['competenciesmostoftennotproficient'] = 'Meist ungeübte Kompetenzen in abgeschlossenen Lernplänen';
$string['competenciesmostoftennotproficientincourse'] = 'Meist ungeübte Kompetenzen in diesem Kurs';
$string['competencycannotbedeleted'] = 'Die Kompetenz \'{$a}\' kann nicht gelöscht werden.';
$string['competencycreated'] = 'Kompetenz angelegt';
$string['competencycrossreferencedcompetencies'] = '{$a} querverwiesene Kompetenzen';
$string['competencyframework'] = 'Kompetenzrahmen';
$string['competencyframeworkcreated'] = 'Kompetenzrahmen angelegt';
$string['competencyframeworkname'] = 'Name';
$string['competencyframeworkroot'] = 'Top-Level-Kompetenz (keine übergeordnete)';
$string['competencyframeworks'] = 'Kompetenzrahmen';
$string['competencyframeworksrepository'] = 'Repository für Kompetenzrahmen';
$string['competencyframeworkupdated'] = 'Kompetenzrahmen aktualisiert';
$string['competencyoutcome_complete'] = 'Als vollständig markieren';
$string['competencyoutcome_evidence'] = 'Beleg anhängen';
$string['competencyoutcome_none'] = 'Keine';
$string['competencyoutcome_recommend'] = 'Kompetenz empfehlen';
$string['competencypicker'] = 'Kompetenzenauswahl';
$string['competencyrule'] = 'Kompetenzregel';
$string['competencyupdated'] = 'Kompetenz aktualisiert';
$string['completeplan'] = 'Diesen Lernplan abschließen';
$string['completeplanconfirm'] = 'Möchten Sie den Lernplan \'{$a}\' wirklich abschließen? Beim Abschließen eines Lernplans werden die Kompetenzen aller Teilnehmer/innen erfasst und der Lernplan kann nur noch angesehen werden.';
$string['configurecoursecompetencysettings'] = 'Kurskompetenzen konfigurieren';
$string['configurescale'] = 'Skalen konfigurieren';
$string['coursecompetencies'] = 'Kurskompetenzen';
$string['coursecompetencyratingsarenotpushedtouserplans'] = 'Kompetenzbewertungen in diesem Kurs beeinflussen keine Lernpläne.';
$string['coursecompetencyratingsarepushedtouserplans'] = 'Kompetenzbewertungen in diesem Kurs werden sofort in den Lernplänen aktualisiert.';
$string['coursecompetencyratingsquestion'] = 'Wenn eine Kurskompetenz bewertet wird, verbessert diese Bewertung dann die Kompetenz in den Lernplänen oder wird die Bewertung nur auf den Kurs angewendet?';
$string['coursesusingthiscompetency'] = 'Mit dieser Kompetenz verlinkte Kurse';
$string['coveragesummary'] = '{$a->competenciescoveredcount} von {$a->competenciescount} Komptenzen sind abgedeckt ( {$a->coveragepercentage} % )';
$string['createlearningplans'] = 'Lernpläne anlegen';
$string['createplans'] = 'Lernpläne anlegen';
$string['crossreferencedcompetencies'] = 'Querverwiesene Kompetenzen';
$string['default'] = 'Automatisch';
$string['deletecompetency'] = 'Kompetenz \'{$a}\' löschen?';
$string['deletecompetencyframework'] = 'Kompetenzrahmen \'{$a}\' löschen?';
$string['deletecompetencyparenthasrule'] = 'Kompetenz \'{$a}\' löschen? Sie entfernen auch Regeln, die für die übergeordnete Ebene gesetzt wurden.';
$string['deleteplan'] = 'Lernplan \'{$a}\' löschen?';
$string['deleteplans'] = 'Lernpläne löschen?';
$string['deletetemplate'] = 'Lernplanvorlage \'{$a}\' löschen?';
$string['deletetemplatewithplans'] = 'Diese Vorlage ist mit Lernplänen verbunden. Sie müssen angeben, wie diese Pläne behandelt werden sollen.';
$string['deletethisplan'] = 'Diesen Lernplan löschen?';
$string['deletethisuserevidence'] = 'Diesen Beleg löschen?';
$string['deleteuserevidence'] = 'Beleg über Vorkenntnisse \'{$a}\' löschen?';
$string['description'] = 'Beschreibung';
$string['duedate'] = 'Fälligkeitsdatum';
$string['duedate_help'] = 'Bis zu diesem Termin sollte der Lernplan abgeschlossen sein.';
$string['editcompetency'] = 'Kompetenz bearbeiten';
$string['editcompetencyframework'] = 'Kompetenzrahmen bearbeiten';
$string['editplan'] = 'Lernplan bearbeiten';
$string['editrating'] = 'Wertung bearbeiten';
$string['edittemplate'] = 'Lernplanvorlage bearbeiten';
$string['editthisplan'] = 'Diesen Lernplan bearbeiten';
$string['editthisuserevidence'] = 'Diesen Beleg bearbeiten';
$string['edituserevidence'] = 'Beleg bearbeiten';
$string['evidence'] = 'Beleg';
$string['filterbyactivity'] = 'Kompetenzen nach Material oder Aktivität filtern';
$string['findcourses'] = 'Kurse finden';
$string['frameworkcannotbedeleted'] = 'Der Kompetenzrahlen \'{$a}\' kann nicht gelöscht werden.';
$string['hidden'] = 'Verborgen';
$string['hiddenhint'] = '(verborgen)';
$string['idnumber'] = 'ID-Nummer';
$string['inheritfromframework'] = 'Vom Kompetenzrahmen übernehmen (Standard)';
$string['itemstoadd'] = 'Hinzuzufügende Werte';
$string['jumptocompetency'] = 'Zur Kompetenz';
$string['jumptouser'] = 'Zu Nutzer/in springen';
$string['learningplancompetencies'] = 'Kompetenzen des Lernplans';
$string['learningplans'] = 'Lernpläne';
$string['levela'] = 'Level {$a}';
$string['linkcompetencies'] = 'Kompetenzen verlinken';
$string['linkcompetency'] = 'Kompetenz verlinken';
$string['linkedcompetencies'] = 'Verlinkte Kompetenzen';
$string['linkedcourses'] = 'Verlinkte Kurse';
$string['linkedcourseslist'] = 'Verlinkte Kurse:';
$string['listcompetencyframeworkscaption'] = 'Liste von Kompetenzrahmen';
$string['listofevidence'] = 'Liste von Belegen';
$string['listplanscaption'] = 'Liste von Lernplänen';
$string['listtemplatescaption'] = 'Liste von Lernplanvorlagen';
$string['loading'] = 'Laden...';
$string['locatecompetency'] = 'Kompetenz lokalisieren';
$string['managecompetenciesandframeworks'] = 'Kompetenzen und Rahmen verwalten';
$string['modcompetencies'] = 'Kurskompetenzen';
$string['modcompetencies_help'] = 'Kurskompetenzen, die mit dieser Aktivität verlinkt sind';
$string['move'] = 'Verschieben';
$string['movecompetency'] = 'Kompetenz bewegen';
$string['movecompetencyafter'] = 'Kompetenz nach \'{$a}\' bewegen';
$string['movecompetencyframework'] = 'Kompetenzrahmen bewegen';
$string['movecompetencytochildofselfwillresetrules'] = 'Das Verschieben der Kompetenz entfernt Regeln, die zugeordnet wurden, mit der oberen Ebene verknüpft sind und mit dem Ziel in Zusammenhang stehen. Wollen Sie fortsetzen?';
$string['movecompetencywillresetrules'] = 'Das Verschieben der Kompetenz entfernt Rollen, die mit der oberen Ebene verknüpft sind und mit dem Ziel in Zusammenhang stehen. Wollen Sie fortsetzen?';
$string['moveframeworkafter'] = 'Kompetenzrahmen nach \'{$a}\' bewegen';
$string['movetonewparent'] = 'Verschieben';
$string['myplans'] = 'Meine Lernpläne';
$string['nfiles'] = '{$a} Datei(en)';
$string['noactivities'] = 'Keine Aktivitäten';
$string['nocompetencies'] = 'Für diesen Kompetenzrahmen wurden keine Kompetenzen angelegt.';
$string['nocompetenciesinactivity'] = 'Es wurden keine Kompetenzen mit dieser Aktivität oder diesem Material verknüpft.';
$string['nocompetenciesincourse'] = 'Für diesen Kurs sind keine Kompetenzen verlinkt.';
$string['nocompetenciesinevidence'] = 'Zu diesem Nachweis wurden keine Kompetenzen verlinkt.';
$string['nocompetenciesinlearningplan'] = 'Zu diesem Lernplan wurden keine Kompetenzen verlinkt.';
$string['nocompetenciesinlist'] = 'Es wurden keine Kompetenzen ausgewählt.';
$string['nocompetenciesintemplate'] = 'Für diese Lernplanvorlage sind keine Kompetenzen verlinkt.';
$string['nocompetencyframeworks'] = 'Bisher sind keine Kompetenzrahmen angelegt.';
$string['nocompetencyselected'] = 'Keine Kompetenzen ausgewählt';
$string['nocrossreferencedcompetencies'] = 'Keine anderen Kompetenzen wurden zu dieser Kompetenz referiert.';
$string['noevidence'] = 'Keine Belege';
$string['nofiles'] = 'Keine Dateien';
$string['nolinkedcourses'] = 'Zu dieser Kompetenz sind keine Kurse verlinkt.';
$string['noparticipants'] = 'Keine Teilnehmer gefunden';
$string['noplanswerecreated'] = 'Bisher sind keine Lernpläne angelegt.';
$string['notemplates'] = 'Bisher sind keine Lernplanvorlagen angelegt.';
$string['nourl'] = 'Keine URL';
$string['nouserevidence'] = 'Bisher sind keine Belege über Vorkenntnisse angelegt.';
$string['nouserplans'] = 'Bisher sind keine Lernpläne angelegt.';
$string['oneplanwascreated'] = 'Ein Lernplan wurde angelegt.';
$string['outcome'] = 'Ergebnis';
$string['parentcompetency'] = 'Übergeordnet';
$string['parentcompetency_edit'] = 'Übergeordnete Einträge bearbeiten';
$string['parentcompetency_help'] = 'Legen Sie fest welcher Kompetenz derEintrag untergeordnet werden soll. Dies kann eine andere Kompetenz innerhalb des Rahmenwerks sein. Wenn es auf oberster Ebene angelegt wird, handelt es sich um eine Top-Level-Kompetenz, der andere untergeordnet werden können.';
$string['path'] = 'Pfad:';
$string['planapprove'] = 'Aktivieren';
$string['plancompleted'] = 'Lernplan abgeschlossen';
$string['plancreated'] = 'Lernplan angelegt';
$string['plandescription'] = 'Beschreibung';
$string['planname'] = 'Name';
$string['plantemplate'] = 'Lernplanvorlage auswählen';
$string['plantemplate_help'] = 'Ein Lernplan, der mit einer Vorlage erstellt wurde, enthält eine Liste von Kompetenzen, die zur Vorlage passen. Updates der Vorlage werden auch in den entsprechenden Lernplänen gemacht.';
$string['planunapprove'] = 'Auf Entwurf zurücksetzen';
$string['planupdated'] = 'Lernplan aktualisiert';
$string['pluginname'] = 'Lernpläne';
$string['points'] = 'Punkte';
$string['pointsgivenfor'] = 'Für \'{$a}\' vergebene Punkte';
$string['privacy:metadata'] = 'Das Plugin \'Lernpläne\' speichert keine personenbezogenen Daten.';
$string['proficient'] = 'Wählbar';
$string['progress'] = 'Fortschritt';
$string['rate'] = 'Wertung';
$string['ratecomment'] = 'Hinweise zum Beleg';
$string['rating'] = 'Wertung';
$string['ratingaffectsonlycourse'] = 'Das Bewerten einer Kompetenz aktualisiert nur die Kompetenz in diesem Kurs';
$string['ratingaffectsuserplans'] = 'Die Bewertung einer Kompetenz aktualisiert die Kompetenz in allen Lernplänen';
$string['reopenplan'] = 'Diesen Lernplan neu öffnen';
$string['reopenplanconfirm'] = 'Möchten Sie den Lernplan \'{$a}\' wirklich wieder starten? Wenn der Lernplan wieder aktiv wird, dann werden die bisher erfassten Kompetenzen der Teilnehmer wieder  gelöscht.';
$string['requestreview'] = 'Überprüfung anfordern';
$string['reviewer'] = 'Beurteiler';
$string['reviewstatus'] = 'Überprüfungsstatus';
$string['savechanges'] = 'Änderungen speichern';
$string['scale'] = 'Skala';
$string['scale_help'] = 'Die Skala legt fest, wie die jeweilige Kompetenz ausgeprägt ist. Nach der Auswahl einer Skala muss diese konfiguriert werden.

* Das als \'Standard\' markierte Element wird verwendet, wenn eine Kompetenz automatisch fertiggestellt wird.
* Elemente, die als \'geübt\' markiert werden, geben die Varianten zur Einstufung vor, wenn die Kompentenz geübt ist.';
$string['scalevalue'] = 'Skalenwert';
$string['search'] = 'Suchen...';
$string['selectcohortstosync'] = 'Globale Gruppen für Synchronisierung auswählen';
$string['selectcompetencymovetarget'] = 'Wählen Sie einen Ort aus, zu dem diese Kompetenz bewegt werden soll:';
$string['selectedcompetency'] = 'Ausgewählte Kompetenz';
$string['selectuserstocreateplansfor'] = 'Nutzer/innen auswählen, um für sie Lernpläne anzulegen';
$string['sendallcompetenciestoreview'] = 'Alle Kompetenzen aus der Belegüberprüfung über Vorkenntnisse \'{$a}\' senden?';
$string['sendcompetenciestoreview'] = 'Kompetenzen zur Überprüfung senden';
$string['shortname'] = 'Name';
$string['sitedefault'] = '(Site-Standard)';
$string['startreview'] = 'Überprüfung beginnen';
$string['state'] = 'Land';
$string['status'] = 'Status';
$string['stopreview'] = 'Überprüfung beenden';
$string['stopsyncingcohort'] = 'Synchronisierung der Globalen Gruppe stoppen';
$string['taxonomies'] = 'Taxonomien';
$string['taxonomy_add_behaviour'] = 'Verhalten hinzufügen';
$string['taxonomy_add_competency'] = 'Kompetenz hinzufügen';
$string['taxonomy_add_concept'] = 'Konzept hinzufügen';
$string['taxonomy_add_domain'] = 'Domain hinzufügen';
$string['taxonomy_add_indicator'] = 'Indikator hinzufügen';
$string['taxonomy_add_level'] = 'Level hinzufügen';
$string['taxonomy_add_outcome'] = 'Ergebnis hinzufügen';
$string['taxonomy_add_practice'] = 'Praxisaufgabe hinzufügen';
$string['taxonomy_add_proficiency'] = 'Fähigkeitsgrad hinzugügen';
$string['taxonomy_add_skill'] = 'Fähigkeit hinzufügen';
$string['taxonomy_add_value'] = 'Wert hinzufügen';
$string['taxonomy_edit_behaviour'] = 'Verhalten bearbeiten';
$string['taxonomy_edit_competency'] = 'Kompetenz bearbeiten';
$string['taxonomy_edit_concept'] = 'Konzept bearbeiten';
$string['taxonomy_edit_domain'] = 'Domain bearbeiten';
$string['taxonomy_edit_indicator'] = 'Indikator bearbeiten';
$string['taxonomy_edit_level'] = 'Level bearbeiten';
$string['taxonomy_edit_outcome'] = 'Ergebnis bearbeiten';
$string['taxonomy_edit_practice'] = 'Praxisaufgabe bearbeiten';
$string['taxonomy_edit_proficiency'] = 'Fähigkeitsgrad bearbeiten';
$string['taxonomy_edit_skill'] = 'Fähigkeit bearbeiten';
$string['taxonomy_edit_value'] = 'Wert bearbeiten';
$string['taxonomy_parent_behaviour'] = 'Verhalten der übergeordneten Einträge';
$string['taxonomy_parent_competency'] = 'Übergeordnete Kompetenz';
$string['taxonomy_parent_concept'] = 'Hierarchisches Konzept';
$string['taxonomy_parent_domain'] = 'Übergeordnete Domäne';
$string['taxonomy_parent_indicator'] = 'Übergeordneter Indikator';
$string['taxonomy_parent_level'] = 'Übergeordnetes Level';
$string['taxonomy_parent_outcome'] = 'Übergeordnetes Ergebnis';
$string['taxonomy_parent_practice'] = 'Hauptaufgabe (übergeordnet)';
$string['taxonomy_parent_proficiency'] = 'Übergeordneter Fähigkeitsgrad';
$string['taxonomy_parent_skill'] = 'Übergeordnete Fähigkeit';
$string['taxonomy_parent_value'] = 'Übergeordneter Wert';
$string['taxonomy_selected_behaviour'] = 'Ausgewähltes Verhalten';
$string['taxonomy_selected_competency'] = 'Kompetenz auswählen';
$string['taxonomy_selected_concept'] = 'Ausgewähltes Konzept';
$string['taxonomy_selected_domain'] = 'Ausgewählte Domain';
$string['taxonomy_selected_indicator'] = 'Ausgewählter Indikator';
$string['taxonomy_selected_level'] = 'Ausgewähltes Level';
$string['taxonomy_selected_outcome'] = 'Ergebnis auswählen';
$string['taxonomy_selected_practice'] = 'Ausgewählte Praxisaufgabe';
$string['taxonomy_selected_proficiency'] = 'Fähigkeitsgrad auswählen';
$string['taxonomy_selected_skill'] = 'Fähigkeit auswählen';
$string['taxonomy_selected_value'] = 'Ausgewählter Wert';
$string['template'] = 'Lernplanvorlage';
$string['templatebased'] = 'Vorlagenbasiert';
$string['templatecohortnotsyncedwhileduedateispassed'] = 'Globale Gruppen werden nicht synchronisiert, wenn das Fälligkeitsdatum für die Vorlage abgelaufen ist.';
$string['templatecohortnotsyncedwhilehidden'] = 'Globale Gruppen werden nicht synchronisiert, solange diese Vorlage verborgen ist.';
$string['templatecompetencies'] = 'Kompetenzen der Lernplanvorlage';
$string['templatecreated'] = 'Lernplanvorlage angelegt';
$string['templatename'] = 'Name';
$string['templates'] = 'Lernplanvorlagen';
$string['templateupdated'] = 'Lernplanvorlage aktualisiert';
$string['totalrequiredtocomplete'] = 'Für Abschluss erforderliche Summe';
$string['unlinkcompetencycourse'] = 'Kompetenz \'{$a}\' vom Kurs lösen?';
$string['unlinkcompetencyplan'] = 'Kompetenz \'{$a}\' vom Lernplan lösen?';
$string['unlinkcompetencytemplate'] = 'Kompetenz \'{$a}\' von der Lernplanvorlage lösen?';
$string['unlinkplanstemplate'] = 'Lernpläne von ihrer Vorlage lösen';
$string['unlinkplantemplate'] = 'Von der Lernplanvorlage lösen';
$string['unlinkplantemplateconfirm'] = 'Diesen Lernplan \'{$a}\' von der Vorlage trennen? Änderungen an der Vorlage werden dann nicht mehr auf den Lernplan übertragen. Diese Aktion kann nicht rückgängig gemacht werden.';
$string['uponcoursecompletion'] = 'Bei Kursabschluss:';
$string['uponcoursemodulecompletion'] = 'Bei Aktivitätsabschluss';
$string['usercompetencyfrozen'] = 'Dieser Eintrag ist jetzt festgehalten. Er bezeichnet den Stand der Kompetenzen des Lerners zu dem Zeitpunkt, wenn der Lernplan als vollständig festgelegt wurde.';
$string['userevidence'] = 'Beleg über Vorkenntnisse';
$string['userevidencecreated'] = 'Beleg über Vorkenntnisse angelegt';
$string['userevidencedescription'] = 'Beschreibung';
$string['userevidencefiles'] = 'Dateien';
$string['userevidencename'] = 'Name';
$string['userevidencesummary'] = 'Zusammenfassung';
$string['userevidenceupdated'] = 'Beleg über Vorkenntnisse aktualisiert';
$string['userevidenceurl'] = 'URL';
$string['userevidenceurl_help'] = 'Die URL muss mit \'http://\' oder \'https://\' beginnen.';
$string['viewdetails'] = 'Details anzeigen';
$string['visible'] = 'Sichtbar';
$string['visible_help'] = 'Ein Kompetenzrahmen kann verborgen werden, indem er angelegt oder auf eine neue Version aktualisiert wird.';
$string['when'] = 'Wenn';
$string['xcompetencieslinkedoutofy'] = '{$a->x} von {$a->y} Kompetenzen sind mit Kursen verlinkt';
$string['xcompetenciesproficientoutofy'] = '{$a->x} von {$a->y} Kompetenzen sind eingeübt';
$string['xcompetenciesproficientoutofyincourse'] = 'Sie sind in {$a->x} von {$a->y} Kompetenzen geübt.';
$string['xplanscompletedoutofy'] = '{$a->x} von {$a->y} Lernplänen sind für diese Vorlage fertiggestellt';
