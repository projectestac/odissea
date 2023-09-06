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
 * Strings for component 'filter_poodll', language 'de', version '4.1'.
 *
 * @package     filter_poodll
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activate'] = 'Poodll aktivieren?';
$string['alwayshtml5'] = 'HTML5 benutzen';
$string['audiotranscode'] = 'Automatische Umwandlung zu MP3';
$string['audiotranscodedetails'] = 'Konvertiert die aufgenommenen bzw. hochgeladenen Audio-Dateien ins MP3-Format bevor diese in Moodle abgelegt werden. Das funktioniert für Aufnahmen, die auf tokyo.poodll.com gemacht wurden oder hochgeladene Aufnahmen, falls FFMPEG genutzt wird.';
$string['autotryports'] = 'Versuchen Sie, verschiedene Ports zu nutzen, wenn sich nicht mit dem Server verbunden werden kann.';
$string['awsregion'] = 'Cloud Region (AWS)';
$string['awsregion_desc'] = 'Einige Poodll-Services verwenden eine Umwandlung und Text-to-Speech Funktionen mittels Cloud-Services. Wählen Sie die nächstgelegene Region zu Ihrem Moodle-Server für die beste Performance und um für Sie geltende Datenschutzbestimmungen zu erfüllen.';
$string['bandwidth'] = 'Verbindungsrate der Teilnehmer (Bytes/Sekunde). Dies beeinträchtigt die Qualität der Webcams.';
$string['bgtranscode_audio'] = 'Umwandlung zu MP3 im Hintergrund';
$string['bgtranscode_video'] = 'Umwandlung zu MP4 im Hintergrund';
$string['bgtranscodedetails_audio'] = 'Dies ist verlässlicher als die Konvertierung durchzuführen, währen die Nutzer warten. Allerdings werden die Nutzer nicht auf ihre Audio-Aufnahmen zugreifen können, solange CRON nicht gelaufen ist. Funktioniert nur, wenn FFMPEG und Moodle 2.7 oder höher im Einsatz ist. Für Aufnahmen im MP3-Format mittels MP3-Recorder findet die Konvertierung im Browser statt, nicht auf dem Server. Daher wird in diesem Fall keine serverseitige Konvertierung (FFMPEG) benötigt.';
$string['bgtranscodedetails_video'] = 'Dies ist verlässlicher als die Konvertierung durchzuführen, währen die Nutzer warten. Allerdings werden die Nutzer nicht auf ihre Audio-Aufnahmen zugreifen können, solange CRON nicht gelaufen ist. Funktioniert nur, wenn FFMPEG und Moodle 2.7 oder höher im Einsatz ist.';
$string['bmr_recorder'] = 'Burnt Rose';
$string['bundle'] = 'Paket';
$string['burntrose_recorder'] = 'Burnt Rose';
$string['cameraback'] = 'hinten';
$string['camerafront'] = 'vorne';
$string['cancel'] = 'Abbrechen';
$string['capturefps'] = 'Bildrate für Videoaufnahmen (FPS)';
$string['captureheight'] = 'Höhe des Videorecorders';
$string['capturewidth'] = 'Größe des Videorecorders';
$string['cleartemplate'] = 'Vorlage löschen';
$string['cpapi_heading'] = 'Poodll-Api-Einstellungen';
$string['cpapisecret'] = 'Poodle-API-Secret';
$string['cpapisecret_details'] = 'Dieses kann aus dem API-Cred Tab in Ihrem Mitgliedsbereich auf Poodll.com übernommen werden.';
$string['cpapiuser'] = 'Poodll-API-Nutzername';
$string['cpapiuser_details'] = 'Dieser ist identisch mit Ihrem Nutzernamen auf Poodll.com';
$string['dataset'] = 'Datensatz';
$string['dataset_desc'] = 'Poodll e erlaubt es, einen Datensatz aus der Datenbank für die Verwendung in Ihrem Template zu ziehen. Dies ist ein erweitertes Feature. Geben Sie hier den SQL-Teil eines $ DB-> get_records_sql-Aufrufs ein.';
$string['datasetvars'] = 'Datensatz Variablen';
$string['debug_enable'] = 'Debugging aktivieren';
$string['debug_enable_details'] = 'Wenn aktiviert, werden Informationen über die Aufnahmen in den Moodle Logs gespeichert. Dies soll Ihnen bei der Lösung von Problemen und der Unterstützung durch den Poodll Helpdesk helfen. Schalten Sie es aus, wenn nicht benötigt oder wenn Sie unnützen Schrott in Ihrem Moodle Log finden.';
$string['debug_heading'] = 'Poodll Debugging';
$string['default_camera'] = 'Standardkamera';
$string['defaultwhiteboard'] = 'Standardmäßiges Whiteboard';
$string['expired'] = 'PoodLL wird nicht angezeigt, weil die Registrierung abgelaufen ist. Bitten Sie Ihren Lehrer/Administrator, die Registrierung bei PoodLL.com zu erneuern.';
$string['exportdiagnostics'] = 'Export';
$string['extensions'] = 'Dateiendungen';
$string['extensionsettings'] = 'Einstellungen Dateiendung';
$string['ffmpeg'] = 'Hochgeladene Medien mit FFMPEG konvertieren';
$string['ffmpeg_details'] = 'FFMPEG muss auf Ihrem Moodle-Server im System-Pfad installiert sein. Dies wird benötigt, um die Konvertierung ins MP3-Format zu unterstützen. Bitte testen Sie dies zunächst auf mittels Kommandozeile, z.B. ffmpeg -i somefile.flv somefile.mp3 . Dies ist im Moment noch *experimentell*';
$string['filter_poodll_audioplayer_heading'] = 'Einstellungen Audioplayer';
$string['filter_poodll_camera_heading'] = 'Einstellungen Webkamera (nur Flash)';
$string['filter_poodll_flashcards_heading'] = 'Einstellungen Flashcards';
$string['filter_poodll_html5recorder_heading'] = 'Einstellungen HTML5 Rekorder';
$string['filter_poodll_mic_heading'] = 'Einstellungen Mikrofon (nur Flash)';
$string['filter_poodll_mp3recorder_heading'] = 'Einstellungen MP3 Rekorder (nur Flash)';
$string['filter_poodll_network_heading'] = 'Einstellungen Red5 Poodll Server';
$string['filter_poodll_registration_explanation'] = 'PoodLL 3 benötigt einen Registrierungsschlüssel. Wenn Sie noch keinen haben, gehen Sie auf poodll.com, um einen zu erhalten.';
$string['filter_poodll_registration_heading'] = 'Registrieren Sie Ihr Poodll';
$string['filter_poodll_videogallery_heading'] = 'Einstellungen Videogalerie';
$string['filter_poodll_videoplayer_heading'] = 'Einstellungen Videoplayer';
$string['filter_poodll_whiteboard_heading'] = 'Einstellungen Whiteboard';
$string['filtername'] = 'Poodll Filter';
$string['generalsettings'] = 'Allgemeine Einstellungen';
$string['gold_recorder'] = 'Single Button';
$string['highquality'] = 'hoch';
$string['insert'] = 'Einfügen';
$string['jumpcat_heading'] = 'Poodll Filtereinstellungen';
$string['lowquality'] = 'niedrig';
$string['mediumquality'] = 'mittel';
$string['miccanpause'] = 'Pause erlauben (nur MP3-Aufnahmen)';
$string['micecho'] = 'Mikrofon-Echo';
$string['micgain'] = 'Mikrofon-Verstärkung';
$string['micloopback'] = 'Mikrofon-Rückkopplung';
$string['micrate'] = 'Mikrofon-Abtastrate';
$string['micsilencelevel'] = 'Mikrofon-Silence-Level';
$string['mobile_audio_quality'] = 'Audioqualität';
$string['mobile_os_version_warning'] = '<p>Ihre Version des Betriebssystems ist zu niedrig</p>
<p>für Android benötigen Sie wenigstens Version 4.</p>
<p>iOS benötigt Version 6 oder höher.</p>';
$string['mobile_show'] = 'Auf Mobilgerät anzeigen';
$string['mobile_video_quality'] = 'Vidoequalität';
$string['mobileandwebkit'] = 'Mobile Geräte und Webkit-Browser (Safari, Chrome etc.)';
$string['mobileonly'] = 'Nur mobile Geräte';
$string['mobilesettings'] = 'Einstellungen IOS App';
$string['mp3_nocloud'] = 'Keine Cloud';
$string['mp3opts'] = 'Optionen zur MP3-Umwandlung mittels FFMPEG';
$string['mp3opts_details'] = 'Lassen Sie dies frei, wenn Sie FFMPEG die Entscheidungen überlassen möchten. Alles, was Sie hier eintragen, wird zwischen [ffmpeg -i myfile.xx] und [myfile.mp3] erscheinen';
$string['mp4opts'] = 'Optionen zur MP4-Umwandlung mittels FFMPEG';
$string['mp4opts_details'] = 'Lassen Sie dies frei, wenn Sie FFMPEG die Entscheidungen überlassen möchten. Alles, was Sie hier eintragen, wird zwischen [ffmpeg -i myfile.xx] und [myfile.mp4] erscheinen';
$string['neverhtml5'] = 'HTML5 nicht benutzen';
$string['picqual'] = 'Webcam-Qualität einstellen (1 - 10)';
$string['pluginname'] = 'PoodLL Filter';
$string['poodll:candownloadmedia'] = 'Darf Medium herunterladen';
$string['recui_audiogain'] = 'Verstärkung des Audio-Signals';
$string['recui_audiorate'] = 'Abtastrate des Audio-Signals';
$string['recui_awaitingconfirmation'] = 'Wartet auf Bestätigung';
$string['recui_awaitingconversion'] = 'Wartet auf Umwandlung';
$string['recui_btnupload'] = 'Aufnehmen oder Datei auswählen';
$string['recui_cancelsnapshot'] = 'Abbrechen';
$string['recui_close'] = 'Schließen';
$string['recui_continue'] = 'Fortfahren';
$string['recui_converting'] = 'wird umgewandelt';
$string['recui_echo'] = 'Echo unterdrücken';
$string['recui_finished'] = 'Beendet';
$string['recui_inaudibleerror'] = 'Wir können Sie nicht hören. Bitte überprüfen Sie die Einstellungen für Flash und für Ihren Browser.';
$string['recui_loopback'] = 'Rückkopplung';
$string['recui_off'] = 'Aus';
$string['recui_ok'] = 'OK';
$string['recui_on'] = 'An';
$string['recui_pause'] = 'Pause';
$string['recui_play'] = 'Abspielen';
$string['recui_playing'] = 'Abspielen:';
$string['recui_ready'] = 'Fertig';
$string['recui_record'] = 'Aufnehmen';
$string['recui_recording'] = 'Aufnahme:';
$string['recui_recordorchoose'] = 'Aufnehmen oder wählen';
$string['recui_restart'] = 'Neustart';
$string['recui_save'] = 'Hochladen';
$string['recui_silencelevel'] = 'Silence-Level';
$string['recui_stop'] = 'Stop';
$string['recui_takesnapshot'] = 'Bild aufnehmen';
$string['recui_time'] = 'Zeit:';
$string['recui_timeouterror'] = 'Fehler: Der Request führte zu einer Zeitüberschreitung.';
$string['recui_uploadafile'] = 'Datei hochladen';
$string['recui_uploaderror'] = 'Ein Fehler trat auf und Ihre Datei wurde NICHT hochgeladen.';
$string['recui_uploading'] = 'wird hochgeladen';
$string['recui_uploadsuccess'] = 'Erfolgreich hochgeladen';
$string['serverhttpport'] = 'HTTP-Port des Poodll-Red5-Servers';
$string['serverid'] = 'ID des PoodLL-Servers';
$string['servername'] = 'Adresse des PoodLL-Servers';
$string['serverport'] = 'RTMP-Port des PoodLL-Servers';
$string['settings'] = 'Einstellungen PoodLL-Filter';
$string['showdownloadicon'] = 'Download-Icon unter Player anzeigen';
$string['split_recorder'] = 'Teilen';
$string['studentcam'] = 'Bevorzugter Gerätename der Kamera';
$string['studentmic'] = 'Bevorzugter Gerätename des Mikorphons';
$string['transcode_heading'] = 'Einstellungen zur Audio- und Video-Umwandlung';
$string['videotranscode'] = 'Automatische Umwandlung in MP4';
$string['videotranscodedetails'] = 'Konvertiert die aufgenommenen bzw. hochgeladenen Video-Dateien ins MP4-Format bevor diese in Moodle abgelegt werden. Das funktioniert für Aufnahmen, die auf tokyo.poodll.com gemacht wurden oder hochgeladene Aufnahmen, falls FFMPEG genutzt wird.';
$string['wboardautosave'] = 'Automatisch sichern (Millisekunden)';
$string['wboardautosave_details'] = 'Sichert die Zeichnung, wenn der Nutzer für X Millisekungen mit dem Zeichnen pausiert. (0 = keine automatische Speicherung)';
$string['wboardheight'] = 'Standardmäßige Höhe des Whiteboards';
$string['wboardwidth'] = 'Standardmäßige Breite des Whiteboards';
$string['whiteboardsave'] = 'Bild sichern';
