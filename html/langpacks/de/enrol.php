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
 * Strings for component 'enrol', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   enrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Verfügbare Einschreibeplugins';
$string['addinstance'] = 'Methode hinzufügen';
$string['addinstanceanother'] = 'Neue Methode hinzufügen und weitere anlegen';
$string['ajaxnext25'] = 'Weitere 25...';
$string['ajaxoneuserfound'] = '1 Person gefunden';
$string['ajaxxmoreusersfound'] = 'Mehr als {$a} Nutzer/innen gefunden';
$string['ajaxxusersfound'] = '{$a} Personen gefunden';
$string['assignnotpermitted'] = 'Sie haben nicht das Recht, in diesem Kurs Rollen zuzuweisen.';
$string['bulkuseroperation'] = 'Nutzerverarbeitung (Bulk)';
$string['configenrolplugins'] = 'Aktivieren Sie bitte alle notwendigen Plugins und ordnen Sie sie in der bevorzugten Reihenfolge an.';
$string['custominstancename'] = 'Eigene Bezeichnung vergeben';
$string['defaultenrol'] = 'Plugin zu neuen Kursen hinzufügen';
$string['defaultenrol_desc'] = 'Es ist möglich, dieses Plugin zu allen neuen Kursen hinzuzufügen.';
$string['deleteinstanceconfirm'] = 'Möchten Sie die Einschreibemethode \'{$a->name}\' und alle verbundenen Daten wirklich aus der Datenbank löschen? Alle {$a->users} Eingeschreibungen werden ausgetragen und deren Bewertungen, Mitgliedschaft in Gruppen, Forumsabonnements sowie kursbezogene Daten gelöscht.';
$string['deleteinstanceconfirmself'] = 'Möchten Sie wirklich die Instanz \'{$a->name}\' löschen, mit der Sie Zugriff auf den Kurs haben? Es könnte sein, dass Sie danach keinen Zugriff mehr haben.';
$string['deleteinstancenousersconfirm'] = 'Möchten Sie die Einschreibemethode \'{$a->name}\' wirklich löschen?';
$string['disableinstanceconfirmself'] = 'Möchten Sie wirklich die Instanz \'{$a->name}\' deaktivieren, mit der Sie Zugriff auf den Kurs haben? Es könnte sein, dass Sie danach keinen Zugriff mehr haben.';
$string['durationdays'] = '{$a} Tage';
$string['editenrolment'] = 'Einschreibung bearbeiten';
$string['edituserenrolment'] = 'Einschreibung von {$a} bearbeiten';
$string['enrol'] = 'Einschreiben';
$string['enrolcandidates'] = 'Nichteingeschriebene Nutzer/innen';
$string['enrolcandidatesmatching'] = 'Passende nichteingeschriebene Nutzer/innen';
$string['enrolcohort'] = 'Globale Gruppe einschreiben';
$string['enrolcohortusers'] = 'Nutzer/innen einschreiben';
$string['enroldetails'] = 'Einschreibedetails';
$string['enrollednewusers'] = 'Erfolgreich {$a} neue Nutzer/innen eingeschrieben';
$string['enrolledusers'] = 'Eingeschriebene Nutzer/innen';
$string['enrolledusersmatching'] = 'Passende eingeschriebene Nutzer/innen';
$string['enrolme'] = 'Mich in diesem Kurs einschreiben';
$string['enrolmentinstances'] = 'Einschreibemethoden';
$string['enrolmentmethod'] = 'Einschreibemethode';
$string['enrolmentnew'] = 'Neue Anmeldung in {$a}';
$string['enrolmentnewuser'] = '{$a->user} hat sich im Kurs "{$a->course}" eingeschrieben';
$string['enrolmentoptions'] = 'Einschreibeoptionen';
$string['enrolments'] = 'Einschreibung';
$string['enrolnotpermitted'] = 'Sie haben nicht das Recht, in diesem Kurs jemanden einzuschreiben.';
$string['enrolperiod'] = 'Teilnahmedauer';
$string['enroltimecreated'] = 'Einschreibung erstellt';
$string['enroltimeend'] = 'Einschreibeende';
$string['enroltimeendinvalid'] = 'Das Einschreibeende muss nach dem Einschreibebeginn liegen.';
$string['enroltimestart'] = 'Einschreibebeginn';
$string['enrolusage'] = 'Einschreibungen';
$string['enrolusers'] = 'Nutzer/innen einschreiben';
$string['enrolxusers'] = '{$a} Nutzer/innen einschreiben';
$string['errajaxfailedenrol'] = 'Fehler bei der Nutzereinschreibung';
$string['errajaxsearch'] = 'Fehler bei der Nutzersuche';
$string['erroreditenrolment'] = 'Bei der Bearbeitung der Nutzereinschreibung ist ein Fehler aufgetreten';
$string['errorenrolcohort'] = 'Fehler bei der Einschreibesynchronisation von globalen Gruppen in diesem Kurs';
$string['errorenrolcohortusers'] = 'Fehler bei der Einschreibung von globalen Gruppen in diesem Kurs';
$string['errorthresholdlow'] = 'Die Systemnachricht muss mindestens einen Tag vor Teilnahmeende erfolgen';
$string['errorwithbulkoperation'] = 'Fehler bei der Nutzerverarbeitung (Bulk)';
$string['eventenrolinstancecreated'] = 'Instanz für Einschreibeverfahren wurde erstellt';
$string['eventenrolinstancedeleted'] = 'Instanz für Einschreibeverfahren wurde gelöscht';
$string['eventenrolinstanceupdated'] = 'Instanz für Einschreibeverfahren wurde aktualisiert';
$string['eventuserenrolmentcreated'] = 'Nutzer/in in Kurs eingeschrieben';
$string['eventuserenrolmentdeleted'] = 'Nutzer/in aus Kurs ausgeschrieben';
$string['eventuserenrolmentupdated'] = 'Nutzereinschreibung aktualisiert';
$string['expirynotify'] = 'Benachrichtigung bevor Teilnahme endet';
$string['expirynotifyall'] = 'Einschreibender und eingeschriebene Nutzer/innen';
$string['expirynotifyenroller'] = 'Nur Einschreibender';
$string['expirynotify_help'] = 'Die Einstellung legt fest, ob vor Ablauf der Teilnahmedauer eine Systemnachricht erfolgen soll.';
$string['expirynotifyhour'] = 'Stunde zum Versand der Ablaufnachricht';
$string['expirythreshold'] = 'Benachrichtigungsgrenze';
$string['expirythreshold_help'] = 'Wie lange vor dem Ablauf sollen Nutzer/innen benachrichtigt werden?';
$string['extremovedaction'] = 'Externer Abmeldevorgang';
$string['extremovedaction_help'] = 'Wählen Sie eine auszuführende Aktion, wenn eine Nutzereinschreibung von einer externen Einschreibequelle erlischt. Bitte beachten Sie, dass einige Nutzerdaten und -einstellungen bei der Kursausschreibung aus dem Kurs gelöscht werden.';
$string['extremovedkeep'] = 'Nutzer/in eingeschrieben lassen';
$string['extremovedsuspend'] = 'Kurseinschreibung deaktivieren';
$string['extremovedsuspendnoroles'] = 'Kurseinschreibung deaktivieren und Rollen entfernen';
$string['extremovedunenrol'] = 'Nutzer/in aus dem Kurs ausschreiben';
$string['finishenrollingusers'] = 'Nutzereinschreibung beenden';
$string['foundxcohorts'] = 'Globale Gruppen gefunden {$a}';
$string['instanceadded'] = 'Methode hinzugefügt';
$string['instanceeditselfwarning'] = 'Warnung:';
$string['instanceeditselfwarningtext'] = 'Sie sind über diese Einschreibemethode in den Kurs eingeschrieben. Änderungen könnten sich auf Ihren Zugriff zum Kurs auswirken.';
$string['invalidenrolduration'] = 'Ungültige Einschreibedauer';
$string['invalidenrolinstance'] = 'Falsche Einschreibung';
$string['invalidrequest'] = 'Ungültige Anfrage';
$string['invalidrole'] = 'Falsche Rolle';
$string['manageenrols'] = 'Übersicht';
$string['manageinstance'] = 'Verwalten';
$string['migratetomanual'] = 'Auf manuelle Einschreibung ändern';
$string['nochange'] = 'Ohne Änderung';
$string['noexistingparticipants'] = 'Keine existierenden Teilnehmer/innen';
$string['nogroup'] = 'Keine Gruppe';
$string['noguestaccess'] = 'Melden Sie sich für den Zugriff auf diesen Kurs an.';
$string['none'] = 'Keine';
$string['notenrollable'] = 'Sie können sich nicht selbst in diesen Kurs einschreiben.';
$string['notenrolledusers'] = 'Weitere Nutzer/innen';
$string['otheruserdesc'] = 'Folgende Nutzer/innen sind nicht in diesem Kurs eingeschrieben, aber sie besitzen hier zugewiesene oder vererbte Rollen. ';
$string['participationactive'] = 'Aktiv';
$string['participationnotcurrent'] = 'Inaktiv';
$string['participationstatus'] = 'Status';
$string['participationsuspended'] = 'Inaktiv';
$string['periodend'] = 'bis {$a}';
$string['periodnone'] = 'eingeschrieben {$a}';
$string['periodstart'] = 'ab {$a}';
$string['periodstartend'] = 'von {$a->start} bis {$a->end}';
$string['privacy:metadata:user_enrolments'] = 'Einschreibungen';
$string['privacy:metadata:user_enrolments:enrolid'] = 'Instanz des Einschreibeplugins';
$string['privacy:metadata:user_enrolments:modifierid'] = 'ID des Nutzers, der zuletzt die Einschreibung des Nutzers geändert hat';
$string['privacy:metadata:user_enrolments:status'] = 'Status der Nutzereinschreibung im Kurs';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Die Einschreibeverwaltung speichert die eingeschriebenen Nutzer';
$string['privacy:metadata:user_enrolments:timecreated'] = 'Zeitpunkt, zu dem die Nutzereinschreibung erstellt wurde';
$string['privacy:metadata:user_enrolments:timeend'] = 'Zeitpunkt, zu dem die Nutzereinschreibung abläuft';
$string['privacy:metadata:user_enrolments:timemodified'] = 'Zeitpunkt, zu dem die Nutzereinschreibung bearbeitet wurde';
$string['privacy:metadata:user_enrolments:timestart'] = 'Zeitpunkt, zu dem die Nutzereinschreibung beginnt';
$string['privacy:metadata:user_enrolments:userid'] = 'ID des Nutzers';
$string['proceedtocourse'] = 'Weiter zum Kurs';
$string['recovergrades'] = 'Alte Nutzerbewertungen falls möglich wiederherstellen';
$string['rolefromcategory'] = '{$a->role} (vererbt vom Kursbereich)';
$string['rolefrommetacourse'] = '{$a->role} (vererbt aus Kurszuordnung)';
$string['rolefromsystem'] = '{$a->role} (zugewiesen für die Website)';
$string['rolefromthiscourse'] = '{$a->role} (zugewiesen in diesem Kurs)';
$string['sendfromcoursecontact'] = 'Vom Kurskontakt';
$string['sendfromkeyholder'] = 'Vom Einschreibeschlüssel-Halter';
$string['sendfromnoreply'] = 'Von der Nicht-Antworten-Adresse';
$string['startdatetoday'] = 'Heute';
$string['synced'] = 'synchronisiert';
$string['testsettings'] = 'Einstellungen prüfen';
$string['testsettingsheading'] = 'Einschreibeeinstellungen prüfen - {$a}';
$string['totalenrolledusers'] = '{$a} eingeschriebene Nutzer/innen';
$string['totalotherusers'] = '{$a} weitere Nutzer/innen';
$string['totalunenrolledusers'] = '{$a} ausgeschriebene Nutzer/innen';
$string['unassignnotpermitted'] = 'Sie haben nicht das Recht, in diesem Kurs Rollenzuweisungen zu ändern.';
$string['unenrol'] = 'Ausschreiben';
$string['unenrolconfirm'] = 'Möchten Sie wirklich "{$a->user}" (eingeschrieben über "{$a->enrolinstancename}") aus dem Kurs "{$a->course}" ausschreiben?';
$string['unenrolme'] = 'Ausschreiben aus \'{$a}\'';
$string['unenrolnotpermitted'] = 'Sie haben nicht das Recht, diese/n Nutzer/in aus dem Kurs auszuschreiben';
$string['unenrolroleusers'] = 'Nutzer/innen ausschreiben';
$string['uninstallmigrating'] = '"{$a}" Einschreibungen werden übertragen';
$string['unknowajaxaction'] = 'Unbekannter Funktionsaufruf';
$string['unlimitedduration'] = 'Unbegrenzt';
$string['userremovedfromselectiona'] = 'Nutzer/in \'{$a}\' wurde aus der Auswahl entfernt.';
$string['usersearch'] = 'Suchen';
$string['withselectedusers'] = 'Mit ausgewählten Nutzer/innen';
$string['youenrolledincourse'] = 'Sie sind in den Kurs eingeschrieben';
$string['youunenrolledfromcourse'] = 'Sie wurden aus dem Kurs "{$a}" ausgeschrieben';
