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
 * Strings for component 'enrol', language 'de', version '3.11'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Verfügbare Einschreibeplugins';
$string['addinstance'] = 'Methode hinzufügen';
$string['addinstanceanother'] = 'Methode hinzufügen und eine weitere anlegen';
$string['ajaxnext25'] = 'Weitere 25...';
$string['ajaxoneuserfound'] = '1 Person gefunden';
$string['ajaxxmoreusersfound'] = 'Mehr als {$a} Personen gefunden';
$string['ajaxxusersfound'] = '{$a} Personen gefunden';
$string['assignnotpermitted'] = 'Sie haben nicht das Recht, in diesem Kurs Rollen zuzuweisen.';
$string['bulkuseroperation'] = 'Nutzerverarbeitung (Bulk)';
$string['configenrolplugins'] = 'Aktivieren Sie bitte die notwendigen Plugins und ordnen Sie sie in der bevorzugten Reihenfolge an.';
$string['custominstancename'] = 'Nutzerdefinierter Name';
$string['defaultenrol'] = 'Plugin zu neuen Kursen hinzufügen';
$string['defaultenrol_desc'] = 'Es ist möglich, dieses Plugin standardmäßig zu neuen Kursen hinzuzufügen.';
$string['deleteinstanceconfirm'] = 'Möchten Sie wirklich die Einschreibemethode \'{$a->name}\' und alle verbundenen Daten löschen? Alle {$a->users} Nutzer/innen, die über diese Methode eingeschrieben sind, werden abgemeldet und deren Bewertungen, Gruppenmtgliedschaften, Forenabonnements sowie kursbezogene Daten werden gelöscht.';
$string['deleteinstanceconfirmself'] = 'Möchten Sie wirklich die Einschreibemethode \'{$a->name}\' löschen, mit der Sie Zugriff auf diesen Kurs haben? Es könnte passieren, dass Sie danach keinen Zugriff mehr haben.';
$string['deleteinstancenousersconfirm'] = 'Möchten Sie wirklich die Einschreibemethode \'{$a->name}\' löschen?';
$string['disableinstanceconfirmself'] = 'Möchten Sie wirklich die Einschreibemethode \'{$a->name}\' deaktivieren, mit der Sie Zugriff auf diesen Kurs haben? Es könnte passieren, dass Sie danach keinen Zugriff mehr haben.';
$string['durationdays'] = '{$a} Tage';
$string['editenrolment'] = 'Einschreibung bearbeiten';
$string['edituserenrolment'] = 'Einschreibung von {$a} bearbeiten';
$string['enrol'] = 'Einschreiben';
$string['enrolcandidates'] = 'Nichteingeschriebene Nutzer/innen';
$string['enrolcandidatesmatching'] = 'Nichteingeschriebene passende Nutzer/innen';
$string['enrolcohort'] = 'Globale Gruppe einschreiben';
$string['enrolcohortusers'] = 'Nutzer/innen einschreiben';
$string['enroldetails'] = 'Einschreibedetails';
$string['enrollednewusers'] = 'Erfolgreich {$a} neue Nutzer/innen eingeschrieben';
$string['enrolledusers'] = 'Eingeschriebene Nutzer/innen';
$string['enrolledusersmatching'] = 'Eingeschriebene passende Nutzer/innen';
$string['enrolme'] = 'Mich in diesem Kurs einschreiben';
$string['enrolmentinstances'] = 'Einschreibemethoden';
$string['enrolmentmethod'] = 'Einschreibemethode';
$string['enrolmentnew'] = 'Neue Einschreibung in {$a}';
$string['enrolmentnewuser'] = '{$a->user} hat sich im Kurs "{$a->course}" eingeschrieben';
$string['enrolmentoptions'] = 'Einschreibeoptionen';
$string['enrolments'] = 'Einschreibung';
$string['enrolmentupdatedforuser'] = 'Die Einschreibung für \'{$a->fullname}\' wurde aktualisiert.';
$string['enrolnotpermitted'] = 'Sie haben kein Recht, jemanden in diesen Kurs einzuschreiben.';
$string['enrolperiod'] = 'Dauer der Einschreibung';
$string['enroltimecreated'] = 'Einschreibung erstellt';
$string['enroltimeend'] = 'Ende der Einschreibung';
$string['enroltimeendinvalid'] = 'Das Einschreibeende muss nach dem Einschreibebeginn liegen.';
$string['enroltimestart'] = 'Beginn der Einschreibung';
$string['enrolusage'] = 'Einschreibungen';
$string['enrolusers'] = 'Nutzer/innen einschreiben';
$string['enrolxusers'] = '{$a} Nutzer/innen einschreiben';
$string['errajaxfailedenrol'] = 'Fehler bei der Nutzereinschreibung';
$string['errajaxsearch'] = 'Fehler bei der Nutzersuche';
$string['erroreditenrolment'] = 'Fehler bei der Bearbeitung der Nutzereinschreibung';
$string['errorenrolcohort'] = 'Fehler bei der Einschreibesynchronisation von globalen Gruppen in diesem Kurs';
$string['errorenrolcohortusers'] = 'Fehler bei der Einschreibung von globalen Gruppen in diesem Kurs';
$string['errorthresholdlow'] = 'Die Systemnachricht muss mindestens einen Tag vor Teilnahmeende erfolgen';
$string['errorwithbulkoperation'] = 'Fehler bei der Nutzerverarbeitung (Bulk)';
$string['eventenrolinstancecreated'] = 'Einschreibungmethode wurde erstellt';
$string['eventenrolinstancedeleted'] = 'Einschreibungmethode wurde gelöscht';
$string['eventenrolinstanceupdated'] = 'Einschreibungmethode wurde bearbeitet';
$string['eventuserenrolmentcreated'] = 'Nutzer/in in Kurs eingeschrieben';
$string['eventuserenrolmentdeleted'] = 'Nutzer/in vom Kurs abgemeldet';
$string['eventuserenrolmentupdated'] = 'Nutzereinschreibung aktualisiert';
$string['expirynotify'] = 'Benachrichtigung vor Ende der Einschreibung';
$string['expirynotify_help'] = 'Die Einstellung legt fest, ob vor Ablauf der Teilnahmedauer eine Systemnachricht erfolgen soll.';
$string['expirynotifyall'] = 'Einschreibende Person und eingeschriebene Nutzer/innen';
$string['expirynotifyenroller'] = 'Nur einschreibende Person';
$string['expirynotifyhour'] = 'Stunde zum Versand der Ablaufnachricht';
$string['expirythreshold'] = 'Zeitpunkt für Benachrichtigung';
$string['expirythreshold_help'] = 'Wie lange vor dem Ablauf sollen Nutzer/innen benachrichtigt werden?';
$string['extremovedaction'] = 'Externer Abmeldevorgang';
$string['extremovedaction_help'] = 'Wählen Sie, welche Aktion ausgeführt werden soll, wenn die Nutzereinschreibung aus der externen Einschreibequelle verschwindet. Beachten Sie bitte, dass bei der Kursabmeldung Nutzerdaten und -einstellungen gelöscht werden.';
$string['extremovedkeep'] = 'Nutzer/in eingeschrieben lassen';
$string['extremovedsuspend'] = 'Kurseinschreibung deaktivieren';
$string['extremovedsuspendnoroles'] = 'Kurseinschreibung deaktivieren und Rollen entfernen';
$string['extremovedunenrol'] = 'Nutzer/in vom Kurs abmelden';
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
$string['noguestaccess'] = 'Gäste können auf diesen Kurs nicht zugreifen. Melden Sie sich bitte an.';
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
$string['privacy:metadata:user_enrolments:modifierid'] = 'ID der Person, der zuletzt die Nutzereinschreibung geändert hat';
$string['privacy:metadata:user_enrolments:status'] = 'Status der Nutzereinschreibung im Kurs';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Die Einschreibeverwaltung speichert die eingeschriebenen Nutzer/innen.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'Zeitpunkt, zu dem die Nutzereinschreibung erstellt wurde';
$string['privacy:metadata:user_enrolments:timeend'] = 'Zeitpunkt, zu dem die Nutzereinschreibung abläuft';
$string['privacy:metadata:user_enrolments:timemodified'] = 'Zeitpunkt, zu dem die Nutzereinschreibung bearbeitet wurde';
$string['privacy:metadata:user_enrolments:timestart'] = 'Zeitpunkt, zu dem die Nutzereinschreibung beginnt';
$string['privacy:metadata:user_enrolments:userid'] = 'Nutzer-ID';
$string['proceedtocourse'] = 'Weiter zum Kurs';
$string['recovergrades'] = 'Alte Nutzerbewertungen falls möglich wiederherstellen';
$string['rolefromcategory'] = '{$a->role} (vererbt vom Kursbereich)';
$string['rolefrommetacourse'] = '{$a->role} (vererbt aus Kurszuordnung)';
$string['rolefromsystem'] = '{$a->role} (zugewiesen für die Website)';
$string['rolefromthiscourse'] = '{$a->role} (zugewiesen in diesem Kurs)';
$string['sendfromcoursecontact'] = 'Vom Kurskontakt';
$string['sendfromkeyholder'] = 'Von der Person mit dem Einschreibeschlüssel';
$string['sendfromnoreply'] = 'Von der Nicht-Antworten-Adresse';
$string['startdatetoday'] = 'Heute';
$string['synced'] = 'synchronisiert';
$string['testsettings'] = 'Einstellungen prüfen';
$string['testsettingsheading'] = 'Einschreibeeinstellungen prüfen - {$a}';
$string['totalenrolledusers'] = '{$a} eingeschriebene Nutzer/innen';
$string['totalotherusers'] = '{$a} weitere Nutzer/innen';
$string['totalunenrolledusers'] = '{$a} abgemeldete Nutzer/innen';
$string['unassignnotpermitted'] = 'Sie haben kein Recht, Rollenzuweisungen in diesem Kurs zu ändern.';
$string['unenrol'] = 'Abmelden';
$string['unenrolconfirm'] = 'Möchten Sie wirklich \'{$a->user}\' (eingeschrieben über \'{$a->enrolinstancename}\') vom Kurs \'{$a->course}\' abmelden?';
$string['unenrolleduser'] = 'Nutzer/in \'{$a->fullname}\' wurde vom Kurs abgemeldet';
$string['unenrolme'] = 'Selbst vom Kurs \'{$a}\' abmelden';
$string['unenrolnotpermitted'] = 'Sie haben kein Recht, diese Person vom Kurs abzumelden.';
$string['unenrolroleusers'] = 'Nutzer/innen abmelden';
$string['uninstallmigrating'] = '"{$a}" Einschreibungen werden übertragen';
$string['unknowajaxaction'] = 'Unbekannter Funktionsaufruf';
$string['unlimitedduration'] = 'Unbegrenzt';
$string['userremovedfromselectiona'] = 'Nutzer/in \'{$a}\' wurde aus der Auswahl entfernt.';
$string['usersearch'] = 'Suchen';
$string['withselectedusers'] = 'Mit ausgewählten Nutzer/innen';
$string['youenrolledincourse'] = 'Sie sind in den Kurs eingeschrieben';
$string['youunenrolledfromcourse'] = 'Sie wurden vom Kurs \'{$a}\' abgemeldet.';
