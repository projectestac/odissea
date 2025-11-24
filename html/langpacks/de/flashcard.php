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
 * Strings for component 'flashcard', language 'de', version '4.5'.
 *
 * @package     flashcard
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addone'] = 'Eine neue Frage hinzufügen';
$string['addthree'] = 'Drei neue Fragen hinzufügen';
$string['answer'] = 'Antworten';
$string['answersmediatype'] = 'Medientyp für die Antworten';
$string['audiostart'] = 'Audio automatisch starten';
$string['autodowngrade'] = 'Automatisches Zurücklegen';
$string['autodowngrade_help'] = 'Diese Option ermöglicht ein automatisches Abstufen von Karten. Ein Spiel wird abgestuft, wenn Teilnehmer/innen das Spiel für eine gewisse Zeit nicht überprüfen (Zeiten siehe unten). Karten, die in den Paketen zu alt sind, werden schwieriger und in den ersten Stapel zurückgegeben. Die Abstufung hängt von der Einstellung verschiedenen Verzögerungen für den jeweiligen Stapel ab.';
$string['avgaccess'] = 'Durchschnittliche Zeit pro Karte';
$string['backside'] = 'Rückseite Flashkarte';
$string['backtocourse'] = 'Zurück zum Kurs';
$string['backtodecks'] = 'Zurück zum Spieltisch';
$string['badcards'] = 'Abgelehnte Karte(n):';
$string['bothmodels'] = 'Leitner und Freies Training';
$string['bycards'] = 'Nach Karten';
$string['byusers'] = 'Nach Nutzer/innen';
$string['card'] = 'Karte';
$string['cardback'] = 'Bild Kartenrückseite';
$string['cardfront'] = 'Bild Kartenvorderseite';
$string['cardsep'] = 'Kartenseparator im Text-Import';
$string['cardsindeck'] = 'Rest: {$a} Karte(n)';
$string['cardsread'] = 'Karte(n) gelesen:';
$string['cardsremaining'] = 'Verbleibende Karten';
$string['completionallgoodenabled'] = 'Teilnehmer/in muss alle Karten im letzten Stapel abgelegt haben, um abzuschließen';
$string['completionallgoodgroup'] = 'Alle Karten müssen bekannt sein';
$string['completionallgoodhelp'] = 'Alle Karten müssen abgelegt sein, um abzuschließen';
$string['completionallviewed'] = 'Teilnehmer/in muss alle Karten einmal gesehen haben oder zumindest ein bestimmte Anzahl (von Karten):';
$string['completionallviewedgroup'] = 'Alle Karten müssen angesehen sein';
$string['completiondiscussionshelp'] = 'Alle Karten müssen mindesten einmal angesehen sein';
$string['confirm'] = 'Bestätigen:';
$string['counters'] = 'Zähler';
$string['crontask'] = 'Cron Task für FlashCards';
$string['customisationfiles'] = 'Dateien zur Kartenanpassung';
$string['deck'] = 'Stapel';
$string['deck1_delay'] = 'Antwortzeit (Stapel 1)';
$string['deck2_delay'] = 'Antwortzeit (Stapel 2)';
$string['deck2_release'] = 'Zeit für automatische Abstufung (Stapel 2)';
$string['deck3_delay'] = 'Antwortzeit (Stapel 3)';
$string['deck3_release'] = 'Zeit für automatische Abstufung (Stapel 3)';
$string['deck4_delay'] = 'Antwortzeit (Stapel 4)';
$string['deck4_release'] = 'Zeit für automatische Abstufung (Stapel 4)';
$string['deck_delay'] = 'Antwortzeiten';
$string['deck_delay_help'] = 'Einstellbare Zeit in Stunden, nach der ein Stapel zur Durcharbeitung markiert wird.';
$string['deck_release'] = 'Automatisches Zurückstufen';
$string['deck_release_help'] = 'Zeit in Stunden, nach der die Karten zurück in den vorderen Stapel gehen. Jeder Stapel kann unterschiedlich eingestellt werden.';
$string['decks'] = 'Stapel';
$string['decks_help'] = 'Diese Option ermöglicht die Wahl von 2, 3 oder 4 Stapeln.

Typischerweise verwendet das Leitner-System 3 Decks. 4 Decks vergrößern den Auswendiglernzyklus, so dass schwierigere oder größere Kartensätze erlernt werden können. 2 Decks eignen sich für einfache Anwendungen.';
$string['deckstates'] = 'Stand der Stapel';
$string['deleteselected'] = 'Ausgewählte Karten löschen';
$string['deleteselection'] = 'Auswahl löschen';
$string['difficultcards'] = 'Schwierig';
$string['easycards'] = 'Leicht';
$string['edit'] = 'Karten bearbeiten';
$string['editingcards1'] = 'Flashcard-Satz bearbeiten';
$string['editingcards2'] = 'Flashcard-Satz bearbeiten';
$string['emptydeck'] = 'Bild für leeren Stapel';
$string['emptyset'] = 'Flashcard-Satz ist leer';
$string['endtime'] = 'Zeit abgelaufen';
$string['erroraddcard'] = 'Es konnte keine Karte zum Stapel hinzugefügt werden';
$string['errorbindcard'] = 'Die Karte konnte nicht zum Stapel von {$a} hinzugefügt werden';
$string['errordeletecard'] = 'Die Karten konnten nicht aus dem Stapel gelöscht werden.';
$string['errorupdatecard'] = 'Die Karte konnte nicht aktualisiert werden.';
$string['extracss'] = 'Extra CSS';
$string['fieldsep'] = 'Feld-Trenner:';
$string['flashcard:addinstance'] = 'Eine Flashcard hinzufügen';
$string['flashcard:canplayfree'] = 'Freies Spiel';
$string['flashcard:manage'] = 'Karten verwalten';
$string['flashcardneedsreview'] = 'Flashcard benötigt Überarbeitung';
$string['flipdeck'] = 'Fragen und Antworten vertauschen';
$string['flipdeck_help'] = 'Diese Option erlaubt das Umkehren der Karten. Wenn aktiviert, werden die Fragen auf die Kartenrückseite geschrieben, als wären es Antworten und umgekehrt.';
$string['forcereload'] = 'Neuladen der Fragen erzwingen';
$string['forcereload_help'] = 'Nachladen des Kartensatzes erzwingen

Wenn Sie diese Option aktivieren, wird der Kartensatz mit Daten aus der ausgewählten übereinstimmenden Frage neu geladen.

Alle zuvor aufgezeichneten Teilnehmerdaten werden gelöscht und alle Konten zurückgesetzt.';
$string['freegame'] = 'Freies Spiel';
$string['freeplayinstructions'] = 'Betrachten Sie jede Karte im Deck. Wenn Sie glauben zu wissen, was der präsentierte Begriff bedeutet, klicken Sie auf die Karte und überprüfen Sie Ihre Antwort. Wenn Sie es richtig gemacht haben, klicken Sie auf "Entfernen", um die Karte aus dem Deck zu entfernen. Wenn Sie die Antwort nicht kennen oder falsch liegen, gehen Sie zur nächsten Karte. Wenn Sie alle Karten durchgesehen haben, lesen Sie die Informationen, die Sie noch nicht kennen, und versuchen Sie diese Karten erneut.';
$string['freeuse'] = 'Freies Training';
$string['frontside'] = 'Vorderseite Flashcard';
$string['goodcards'] = 'Gültige Karte(n):';
$string['havetologin'] = 'Sie müssen sich anmelden, bevor Sie Ihre Wahl einreichen können.';
$string['ifailed'] = 'Ich lag falsch!';
$string['igotit'] = 'Ich hab`s gewusst!';
$string['image'] = 'Bild';
$string['imageplussound'] = 'Bild + Ton';
$string['import'] = 'Import';
$string['import_help'] = 'Sie können innerhalb von FlashCards viele Frage-Antwort-Paare auf einmal importieren, indem Sie die Karten-Massenimportfunktion verwenden. Dieser Import kann nur für Text-/Text-Karten benutzt werden.

Sie müssen dafür eine Datei mit einer Liste von Fragen/Antworten erstellen und den Inhalt dieser Datei in den Textbereich des Imports einfügen.

Sie können entscheiden, diese Datei mit gängigen Trennzeichen zu kodieren. Die häufigste Art dürfte "ein Paar pro Zeile" sein, mit \';\' oder Komma als Trenner zwischen Fragen und Antworten.

Fragen werden immer zuerst gestellt und müssen eine Antwort haben. Leere Zeilen werden ignoriert, auch solche, die mit einem # oder einem Schrägstrich (/) beginnen.

Der Import führt eine schnelle Überprüfung des Textes durch, den Sie importieren möchten. Wenn die Textsequenz nicht richtig formatiert ist, erhalten Sie eine Mitteilung, wie viele Paare in der Datei falsch sind und zurückgewiesen werden.

Da der Import alle bisherigen Daten aus den Decks, aber auch die der Teilnehmer/innen löscht, muss eine Bestätigung aktiviert werden, um den Import zu erzwingen.';
$string['importadvice'] = 'Beim Importieren eines neuen Kartensatzes entfernen Sie alle alten Kartensets zusammen mit den vorherigen Infos über die Spiele aller Nutzer/innen.';
$string['imported'] = 'Import';
$string['importingcards'] = 'Karten importieren';
$string['importreport'] = '<b>Flashcard hat neue Karten importiert:</b>';
$string['instructions'] = 'Klicken Sie auf die Karte, um sie umzudrehen und die andere Seite zu sehen';
$string['lastaccessed'] = 'Letzter Zugriff';
$string['leitner'] = 'Leitner Training';
$string['leitnergame'] = 'Leitner Spiel';
$string['matchingquestion'] = 'Passende Frage aus der Fragensammlung';
$string['maxaccess'] = 'Mehr angesehene Karten';
$string['mediatypes'] = 'Medientyp';
$string['mediatypes_help'] = 'Diese Liste definiert die Medienarten, die für Fragen verwendet werden.

* Text: Der eingegebene Text ist auf der Karten sichtbare Text..
* Bild: Der eingegebene Text ist die URL einer Bilddatei, die in den Kursdateien liegt.
* Audio: Der eingegebene Text ist die URL einer Audiodatei, die in den Kursdateien liegt.
* Video: Der eingegebene Text ist die URL einer Videodatei, die in den Kursdateien liegt.';
$string['mediumeffortcards'] = 'Mittlere Anstrengung';
$string['minaccess'] = 'Weniger angesehene Karten';
$string['missingimage'] = '(fehlendes Bild)';
$string['missingsound'] = '(fehlende Audiodatei)';
$string['missingvid'] = '(fehlende Videodatei)';
$string['models'] = 'Gameplay';
$string['models_help'] = 'Gameplay-Modelle aktivieren oder deaktivieren';
$string['modulename'] = 'FlashCards';
$string['modulenameplural'] = 'FlashCards';
$string['next'] = 'Nächste Karte';
$string['nocards'] = 'Keine Karten definiert.';
$string['noflashcards'] = 'Keine Flashcards in diesem Kurs.';
$string['nomorecards'] = 'Keine Karten mehr.';
$string['nosubquestions'] = 'Fehler. Fehlende Unterfragen für diese Frage!';
$string['notifications'] = 'Benachrichtigungen';
$string['notify_review_html_tpl'] = '<p>Hallo <%%FULLNAME%%></p>

<p>Eine Flashcard-Aktivität erfordert Ihre Aufmerksamkeit. Sie haben einige Karten im Kurs <b><%%COURSE%%></b> zur erneuten Durcharbeitung : </p>

<a href="<%%URL%%>"><%%URL%%></a>';
$string['notify_review_tpl'] = 'Hallo <%%FULLNAME%%>

Eine Flashcard-Aktivität erfordert Ihre Aufmerksamkeit. Sie haben eineige Karten im Kurs <%%COURSE%%> zur erneuten Durcharbeitung:

<%%URL%%>';
$string['notinitialized'] = 'Teilnehmer/in hat diese Flashcard noch nie genutzt.';
$string['nousers'] = 'Keine Teilnehmer/innen in diesem Kurs.';
$string['num'] = 'Nr.';
$string['numericrequired'] = 'Ein Zahl ist erforderlich.';
$string['outoftimerange'] = 'Dieses Modul ist wegen Zeitüberschreitung geschlossen. Sie können es jetzt nicht benutzen.';
$string['playwithme'] = 'Lernen Sie mit diesem Stapel';
$string['pluginadministration'] = 'Administration Flashcard';
$string['pluginname'] = 'Flashcard';
$string['previous'] = 'Vorherige Karte';
$string['privacy:metadata:flashcard_card'] = 'Speichert den Stapelinhalt für den Teilnehmer';
$string['privacy:metadata:flashcard_card:deck'] = 'ID des aktuellen Kartenstapels, in dem sich der Karteneintrag für diese Person befindet';
$string['privacy:metadata:flashcard_card:entryid'] = 'ID der Karte im Kartenstapel';
$string['privacy:metadata:flashcard_card:flashcardid'] = 'ID der FlashCard';
$string['privacy:metadata:flashcard_card:lastaccessed'] = 'Zeitpunkt, zu dem diese Person zuletzt auf den Karteneintrag zugegriffen hat';
$string['privacy:metadata:flashcard_card:userid'] = 'Nutzer-ID der Person, die die Karten verwendet';
$string['privacy:metadata:flashcard_userdeck_state:flashcardid'] = 'ID der FlashCard';
$string['question'] = 'Fragen';
$string['questionid'] = 'Zu importierende Frage';
$string['questionsmediatype'] = 'Medientyp der Frage';
$string['reinforce'] = 'Diesen Stapel erneut bearbeiten';
$string['remindusers'] = 'Teilnehmer/innen erinnern';
$string['removecard'] = 'Karte entfernen';
$string['reset'] = 'Kartensatz zurücksetzen';
$string['resetflashcardstates'] = 'Alle FlashCard-Zustände zurücksetzen';
$string['sound'] = 'Ton';
$string['sourcequestion'] = 'zu importierende Frage';
$string['starttime'] = 'Startzeit';
$string['stylesheet'] = 'Stylesheet holen';
$string['styling'] = 'Anpassung';
$string['sumaccess'] = 'Insgesamt angesehene Karten';
$string['summary'] = 'Zusammenfassung Flashcard-Satz';
$string['teachersummary'] = 'Zusammenfassung';
$string['text'] = 'Text';
$string['timetoreview'] = '{$a} Tage verbleiben bis zur Neubearbeitung';
$string['trivialcards'] = 'Einfache Karten';
$string['undefinedquestionset'] = 'Keine passende Frage für dieses FlashCard-Set ausgewählt';
$string['userdecks'] = 'Teilnehmerstapel';
$string['userdecksummary'] = 'Stapel {$a->deckid}: {$a->count} Karten ({$a->cardcount} Treffer insgesamt im Stapel)';
$string['video'] = 'Video';
$string['viewed'] = 'Angesehen';
