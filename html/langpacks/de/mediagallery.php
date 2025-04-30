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
 * Strings for component 'mediagallery', language 'de', version '4.4'.
 *
 * @package     mediagallery
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addagallery'] = 'Eine Galerie hinzufügen';
$string['addanitem'] = 'Objekt hinzufügen';
$string['addbulkitems'] = 'Mehrere Objekte hinzufügen';
$string['addfiles'] = 'Datei(en) hinzufügen';
$string['addsamplegallery'] = 'Eine Beispielsgalerie hinzufügen';
$string['allowcomments'] = 'Kommentare zulassen';
$string['allowcomments_help'] = 'Erlaubt Kommentare von anderen Teilnehmern zu Galerien und Objekten';
$string['allowlikes'] = '\'Gefällt mir\' zulassen';
$string['allowlikes_help'] = 'Erlaubt Nutzern, Objekte in einer Galerie mit \'Gefällt mir\' zu kennzeichnen';
$string['areagallery'] = 'Galerien';
$string['areaitem'] = 'Objekte';
$string['arealowres'] = 'Niedrige Auflösung';
$string['areathumbnail'] = 'Vorschaubilder';
$string['assignedit'] = 'Aufgabe bearbeiten';
$string['assignsubmit'] = 'Aufgabe abgeben';
$string['assignsubmitted'] = 'Aufgabe abgegeben';
$string['automatic'] = 'Automatisch';
$string['beingprocessed'] = 'in Verarbeitung';
$string['bottom'] = 'Unten';
$string['broadcaster'] = 'Einreicher';
$string['broadcaster_help'] = 'Wer hat diese Arbeit eingereicht?';
$string['caption'] = 'Beschriftung';
$string['caption_help'] = 'Beschriftung für dieses Objekt in Ihrer Galerie. Diese Beschriftung wird beim Objekt angezeigt. Wenn das Feld leer bleibt, wird statt dessen der Dateiname (oder die URL) angezeigt.';
$string['captionposition'] = 'Position der Beschriftung';
$string['carousel'] = 'Karussell';
$string['choosecontent'] = 'Wählen Sie entweder eine Datei zum Hochladen oder eine URL.';
$string['close'] = 'Schließen';
$string['collection'] = 'Kollektion';
$string['collectionwasdeleted'] = 'Entschuldigung, diese Kollektion existiert nicht mehr und wurde aus dem Kurs entfernt.';
$string['collmode'] = 'Modus der Kollektion';
$string['collmode_help'] = 'Hier legen Sie fest, ob die Kollektion ausschließlich in Moodle angezeigt oder in der Box verlinkt wird. Einmal gesetzt kann dieser Wert nicht mehr geändert werden.
<ul><li>Standard: in diesem Modus wird die Kollektion mit ihren Galerien und Bildern ausschließlich in Moodle gespeichert</li></ul>';
$string['colltype'] = 'Kollektionstyp';
$string['colltype_help'] = 'Der Kollektionstyp legt die Interaktionsmöglichkeiten der Benutzer mit der Kollektion und ihrem Inhalt fest.

<ul>
<li>Trainerkollektion: Nur Benutzer, welche die Kollektion bewerten dürfen, können Inhalte hinzufügen oder bearbeiten. Dieser Typ wird vor allem für die Erstellung von Beispielskollektionen genutzt, oder für eine Sammlung von Galerien, ohne dass die Teilnehmer eigene erstellen dürfen.</li>
<li>Geteilte Kollektion: Erlaubt den Nutzern, eigene Galerien und Inhalte zu erstellen, aber die Kollektion kann nicht als Teil einer Aufgeabe genutzt werden. </li>
<li>Kollektion als Aufgabe: Benutzer können nur die Galerien sehen, die sie selbst oder ihre Gruppe (im Gruppenmodus) erstellt haben. Kann als Teil einer Aufgabenstellung verwendet werden.</li>
<li>Begutachtete Aufgabenkollektion: Nutzer können Galerien anderer Nutzer/Gruppen sehen und sie liken/kommentieren, falls diese Optionen aktiviert sind. Kann als Teil einer Aufgabenstellung verwendet werden.</li></ul>';
$string['colltypeassignment'] = 'Kollektion als Aufgabe';
$string['colltypecontributed'] = 'Geteilte Kollektion';
$string['colltypeinstructor'] = 'Trainerkollektion';
$string['colltypepeerreviewed'] = 'Begutachtete Aufgabenkollektion';
$string['colltypesingle'] = 'Einfache Kollektion';
$string['comments'] = 'Kommentare';
$string['confirmcollectiondelete'] = 'Löschen der Kollektion bestätigen';
$string['confirmgallerydelete'] = 'Löschen der Galerie bestätigen';
$string['confirmitemdelete'] = 'Löschen des Objekts bestätigen';
$string['content'] = 'Inhalt';
$string['content_help'] = 'Das Objekt, das Sie Ihrer Galerie hinzufügen möchten.';
$string['contentbulk'] = 'Inhalt';
$string['contentbulk_help'] = 'Sie können eine Zip-Datei mit mehreren Bildern auswählen, die nach dem Hochladen ins das Bilderverzeichnis entpackt wird.';
$string['contentbulkheader'] = 'Hier können Sie eine Zip-Datei mit Medien hochladen. Jede Datei in diesem Zip-Archiv wird als ein Objekt zur Galerie hinzugefügt. Stellen Sie daher vor dem Hochladen sicher, dass sich nur Dateien, die Sie verwenden wollen, im Zip-Archiv enthalten sind. Ordner innerhalb des Zip-Archivs werden ignoriert.';
$string['contentlinked'] = 'Inhalt';
$string['contentlinked_help'] = 'Wenn ein Objekt zum Inhalt in der Box verlinkt wurde, kann die verlinkte Datei nicht mehr geändert werden.';
$string['contentlinkedinfo'] = 'Dieses Objekt ist zur Datei {$a} in der Box verlinkt.';
$string['contributable'] = 'Zuordnung möglich';
$string['contributable_help'] = 'Wenn bei einer Galerie Zuordnung möglich ist, können andere Nutzer Inhalt zu Ihrer Galerie hinzufügen. Sie können nur ihre eigenen Inhalte bearbeiten. Der Ersteller der Galerie hat die Möglichkeit, Objekte aus der Galerie zu entfernen.';
$string['copyright'] = 'Copyright';
$string['copyright_help'] = 'Dies legt fest, welche Urheberrechtslizenz für alle Objekte festgelegt wird, die Sie über dieses Formular hochladen.';
$string['createdby'] = 'Erstellt von: {$a}';
$string['creator'] = 'Autor/in';
$string['datecreated'] = 'Erstelldatum';
$string['deletegallery'] = 'Galerie löschen';
$string['deleteitem'] = 'Objekt löschen';
$string['deleteitemtype'] = '{$a} löschen';
$string['deleteorremovecollection'] = 'Wenn Sie den Link zur Kollektion entfernen wollen, ohne den Inhalt zu löschen, klicken Sie auf "Absenden".
<br/><br/>
Wenn Sie den Link zur Kollektion entfernen und den Inhalt löschen wollen, schreiben Sie DELETE in das folgende Textfeld und klicken Sie auf "Absenden".';
$string['deleteorremovecollectionwarn'] = 'Ihnen ist bewusst, dass Sie durch das Löschen:<br/>
- diesen Link zur Medienkollektion entfernen<br/>
- die Kollektion und/oder alle Galerien und alle Inhalte aus der Box löschen<br/>
- alle Links von anderen Kursen auf diese Kollektion oder ihren Inhalt deaktivieren';
$string['deleteorremovegallery'] = 'Wenn Sie den Link zur Galerie entfernen wollen, ohne den Inhalt zu löschen, klicken Sie auf "Absenden".
<br/><br/>
Wenn Sie den Link zur Galerie entfernen und den Inhalt löschen wollen, schreiben Sie DELETE in das folgende Textfeld und klicken Sie auf "Absenden".';
$string['deleteorremovegallerywarn'] = 'Ihnen ist bewusst, dass Sie durch das Löschen:<br/>
- diesen Link zur Galerie entfernen<br/>
- die Galerie und alle Inhalte aus der Box löschen<br/>
- alle Links von anderen Kursen auf diese Galerie oder ihren Inhalt deaktivieren';
$string['deleteorremoveitem'] = 'Wenn Sie das Objekt aus der Galerie entfernen wollen, ohne den Inhalt zu löschen, klicken Sie auf "Absenden".
<br/><br/>
Wenn Sie den Link zur Galerie entfernen und den Inhalt löschen wollen, schreiben Sie DELETE in das folgende Textfeld und klicken Sie auf "Absenden".';
$string['deleteorremoveitemwarn'] = 'Ihnen ist bewusst, dass Sie durch das Löschen:<br/>
- diesen Link zum Medienobjekt entfernen<br/>
- das Medienobjekt aus der Box löschen<br/>
- alle Links von anderen Kursen auf dieses Medienobjekt deaktivieren';
$string['disablestandardgallery'] = 'Standardgalerien deaktivieren';
$string['displayfullcaption'] = 'Vollständigen Beschreibungstext anzeigen';
$string['download'] = 'Herunterladen';
$string['editgallery'] = 'Galerie bearbeiten';
$string['editgallerysettings'] = 'Galerieeinstellungen bearbeiten';
$string['edititem'] = 'Objekt bearbeiten';
$string['edititemtype'] = '{$a} bearbeiten';
$string['editthisgallery'] = 'Diese Galerie bearbeiten';
$string['enablethebox'] = 'Box aktivieren';
$string['enforcedefaults'] = 'Galerie-Standardwerte erzwingen';
$string['enforcedefaults_help'] = 'Wenn aktiviert, werden die vom Administrator festgelegten Galerie-Standardwerte übernommen.';
$string['errorchooseimportoption'] = 'Bitte wählen Sie eine Option für den Import';
$string['errornotyouritem'] = 'Sie können dieses Medien-Objekt nicht bearbeiten, es gehört einem anderen Benutzer.';
$string['errortheboxunavailable'] = 'Sorry, es sieht so aus, als wäre die Box gerade nicht verfügbar. Bitte versuchen Sie es später wieder.';
$string['errortoomanygalleries'] = 'Sorry, Sie oder Ihre Gruppe haben die maximale Anzahl von Galerien erreicht, die in dieser Kollektion zulässig ist ({$a}).';
$string['errortoomanyitems'] = 'Sorry, diese Galerie hat bereits die maximal zulässige Anzahl von Objekten ({$a}).';
$string['eventcollectiondeleted'] = 'Kollektion gelöscht';
$string['eventgallerycreated'] = 'Galerie erstellt';
$string['eventgallerydeleted'] = 'Galerie gelöscht';
$string['eventgalleryupdated'] = 'Galerie aktualisiert';
$string['eventgalleryviewed'] = 'Galerie angesehen';
$string['eventitemcreated'] = 'Objekt erzeugt';
$string['eventitemdeleted'] = 'Objekt gelöscht';
$string['eventitemupdated'] = 'Objekt aktualisiert';
$string['export'] = 'Exportieren';
$string['exportascsv'] = 'Exportieren als csv';
$string['exportgallery'] = 'Galerie exportieren';
$string['externalurl'] = 'Externe URL';
