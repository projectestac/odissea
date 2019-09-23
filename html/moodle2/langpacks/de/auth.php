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
 * Strings for component 'auth', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Aktive Plugins zur Authentifizierung';
$string['allowaccountssameemail'] = 'Nutzerkonten mit gleicher E-Mail-Adresse erlauben';
$string['allowaccountssameemail_desc'] = 'Wenn diese Option aktiviert ist, können mehrere Nutzerkonten die gleiche E-Mail-Adresse verwenden. Dies könnte Probleme hinsichtlich Sicherheit oder Privatsphäre entstehen lassen, z.B. bei der Bestätigungsnachricht zur Kennwortänderung.';
$string['alternatelogin'] = 'Bei der Eingabe einer URL wird diese als alternative Login-Seite verwandt. Die Seite sollte ein Formular enthalten, dessen Aktionsfunktion auf <strong>\'{$a}\'</strong> gesetzt ist und außerdem Eingabefelder für den <strong>Anmeldenamen</strong> und das <strong>Kennwort</strong> zurück liefert.<br />Seien Sie sehr sorgfältig bei der Eingabe der URL, denn mit einer falschen URL schließen Sie sich vom Zugriff zur Website aus.<br />Lassen Sie das Feld leer, um die standardmäßige Anmeldeseite zu verwenden.';
$string['alternateloginurl'] = 'URL für alternatives Login';
$string['auth_changepasswordhelp'] = 'Hilfe zur Kennwortänderung';
$string['auth_changepasswordhelp_expl'] = 'Nutzerhilfe für vergessene {$a} Kennwörter anzeigen. Diese Hilfe wird neben oder statt der <strong>URL zur Kennwortänderung</strong> oder der Moodle internen Kennwortänderung angezeigt.';
$string['auth_changepasswordurl'] = 'URL zur Kennwortänderung';
$string['auth_changepasswordurl_expl'] = 'Tragen Sie hier eine URL ein, unter der ein neues Kennwort für \'{$a}\' angefordert werden kann. Wenn Sie diese Option nutzen, sollten Sie die Einstellung "Standardseite zur Kennwortänderung benutzen" auf "Nein" setzen.';
$string['auth_changingemailaddress'] = 'Sie möchten Ihre E-Mail-Adresse von {$a->oldemail} nach {$a->newemail} ändern. Aus Sicherheitsgründen wird eine Nachricht an Ihre neue E-Mail-Adresse gesendet. Ihre E-Mail-Adresse wird erst geändert, wenn Sie die in der Nachricht enthaltene URL aufrufen und damit die Änderung bestätigen.';
$string['auth_common_settings'] = 'Allgemein';
$string['auth_data_mapping'] = 'Datenzuordnung';
$string['authenticationoptions'] = 'Authentifizierungsoptionen';
$string['auth_fieldlock'] = 'Feld sperren';
$string['auth_fieldlock_expl'] = '<p><b>Feld sperren:</b> Wenn diese Option aktiviert ist, verhindert Moodle die Änderung des Feldinhalts. Dies ist sinnvoll, wenn die Daten in einer externen Datenbank verwaltet werden. </p>';
$string['auth_fieldlockfield'] = 'Feld sperren ({$a})';
$string['auth_fieldlocks'] = 'Nutzerdatenfelder sperren';
$string['auth_fieldlocks_help'] = '<p>Sie können Datenfelder im Nutzerprofil sperren. Dies ist sinnvoll, wenn die Nutzerdaten von Administratoren gepflegt werden, manuell angelegt oder im Bulkupload (Hochladen über Textdatei) hochgeladen werden. Falls Sie von Moodle benötigte Datenfelder sperren, müssen Sie sicher stellen, dass diese Datenfelder beim Anlegen der Nutzerprofile sinnvoll belegt werden.</p><p>Um Probleme zu vermeiden, achten Sie darauf, dass die Einstellung auf "Bearbeitbar (wenn leer)" gesetzt ist.</p>';
$string['auth_fieldmapping'] = 'Daten übernehmen ({$a})';
$string['authinstructions'] = 'Wenn dieses Textfeld leer ist, wird auf der Anmeldeseite der Standardtext angezeigt. Falls Sie eine eigene Anleitung anbieten möchten, welche Anmeldenamen und Kennwörter verwendet werden sollen, schreiben Sie hier Ihren Text.';
$string['auth_invalidnewemailkey'] = 'Fehler: Falls Sie versuchen, die Änderung Ihrer E-Mail-Adresse zu bestätigen, haben Sie eventuell einen Fehler beim Kopieren der zugesandten URL gemacht. Bitte kopieren Sie die URL noch einmal und versuchen es erneut.';
$string['authloginviaemail'] = 'Anmeldung mit E-Mail erlauben';
$string['authloginviaemail_desc'] = 'Nutzer/innen erlauben, sich mit dem Anmeldenamen oder mit der E-Mail-Adresse anzumelden, falls die E-Mail-Adresse eindeutig ist.';
$string['auth_multiplehosts'] = 'Mehrere Adressen können angegeben werden (z.B. host1.com;host2.de;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'Die Authentifizierung ‘{$a}\' ist nicht konfiguriert.';
$string['auth_outofnewemailupdateattempts'] = 'Sie haben die zulässige Zahl von Versuchen überschritten, Ihre E-Mail-Adresse zu ändern. Der Änderungsvorgang wurde abgebrochen.';
$string['auth_passwordisexpired'] = 'Ihr Kennwort ist abgelaufen. Ändern Sie das Kennwort!';
$string['auth_passwordwillexpire'] = 'Ihr Kennwort wird in {$a} Tagen ablaufen. Möchten Sie Ihr Kennwort jetzt ändern?';
$string['auth_remove_delete'] = 'Intern löschen';
$string['auth_remove_keep'] = 'Nur intern zugänglich';
$string['auth_remove_suspend'] = 'Intern sperren';
$string['auth_remove_user'] = 'Legen Sie fest, was mit einem internen Nutzerprofil passieren soll, wenn bei einer Massensynchronisierung dieser Account im externen System entfernt wurde.  Nur gesperrte Nutzer werden automatisch reaktiviert, wenn sie in der externen Quelle wieder erscheinen.';
$string['auth_remove_user_key'] = 'Entfernte externe Nutzer';
$string['auth_sync_script'] = 'Synchronisierung von Nutzerkonten';
$string['auth_sync_suspended'] = 'Die Option legt fest, dass das Ausblendemerkmal bei der Synchronisation von lokalen Nutzerkonten verwendet wird.';
$string['auth_sync_suspended_key'] = 'Status von lokalen Nutzerkonten synchronisieren';
$string['auth_updatelocal'] = 'Lokal aktualisieren';
$string['auth_updatelocal_expl'] = '<p><b>Lokal aktualisieren:</b> Wenn diese Option aktiviert ist, wird das Feld jedes Mal von extern (external auth) aktualisiert, wenn der Teilnehmer sich einloggt oder eine Nutzersynchronisation erfolgt. Dateneinträge sollten gesperrt sein, wenn sie lokal aktualisiert werden.</p>';
$string['auth_updatelocalfield'] = 'Lokal aktualisieren ({$a})';
$string['auth_updateremote'] = 'Extern aktualisieren';
$string['auth_updateremote_expl'] = '<p><b>Extern aktualisieren:</b> Wenn diese Option aktiviert ist, wird die externe Datenbank aktualisiert, sobald der Nutzerdatensatz aktualisiert wird. Die Felder sollten bearbeitbar bleiben, um Datenänderungen zuzulassen.</p>';
$string['auth_updateremotefield'] = 'Extern aktualisieren ({$a})';
$string['auth_updateremote_ldap'] = '<p><b>Anmerkung:</b> Das Update externer LDAP-Daten erfordert die Einstellung \'binddn\' und \'bindpw\' für einen Bind-Nutzer mit Schreibrechten für alle Nutzerdatensätze. Aktuell werden mehrfach gesetzte Eigenschaften nicht unterstützt und die zusätzlichen Werte bei einem Update entfernt.</p>';
$string['auth_user_create'] = 'Nutzererstellung aktivieren';
$string['auth_user_creation'] = 'Neue (anonyme) Nutzer können Nutzerkonten außerhalb der Authentifizierungsquelle erstellen und per E-Mail bestätigen. Wenn Sie diese Option aktivieren, müssen Sie außerdem modulspezifische Optionen zur Erstellung neuer Nutzerkonten konfigurieren.';
$string['auth_usernameexists'] = 'Der Anwendername existiert bereits. Bitte ändern Sie Ihre Eingabe.';
$string['auth_usernotexist'] = 'Nicht existierender Nutzer {$a} kann nicht aktualisiert werden';
$string['auto_add_remote_users'] = 'Automatisches Hinzufügen externer Nutzer';
$string['cannotmapfield'] = 'Das Profilfeld \'{$a->fieldname}\' kann nicht zugeordnet werden, da sein Kurzname \'{$a->shortname}\' zu lang ist. Um die Zuordnung aktivieren zu können, darf der Kurzname des Profilfelds nur {$a->charlimit} Zeichen haben. <a href="{$a->link}">Profilfelder bearbeiten</a>';
$string['changepassword'] = 'URL zur Kennwortänderung';
$string['changepasswordhelp'] = 'Hier können Sie eine Adresse angeben, über die die Nutzer ihren Anmeldenamen erfahren und ihr Kennwort zurücksetzen können, sofern sie diese Daten vergessen haben. Diese Option wird als Schaltfläche auf der Anmeldungsseite angeboten. Wenn Sie dieses Feld leer lassen, wird die Option nicht angeboten.';
$string['chooseauthmethod'] = 'Authentifizierung';
$string['chooseauthmethod_help'] = 'Diese Einstellung legt die Authentifizierung für das Nutzerkonto fest. Falls Sie hier eine deaktivierte Authentifizierung auswählen, kann sich diese Person nicht mehr anmelden. Um ein Nutzerkonto vorübergehend zu sperren, wählen Sie die Authentifizierung "Kein Login".';
$string['createpassword'] = 'Kennwort erzeugen und Nutzer/in benachrichtigen';
$string['createpasswordifneeded'] = 'Kennwort erzeugen und per E-Mail zusenden, falls erforderlich';
$string['emailchangecancel'] = 'E-Mail-Änderung abbrechen';
$string['emailchangepending'] = 'Die Änderung ist noch nicht abgeschlossen. Öffnen Sie den zugesandten Link in {$a->preference_newemail}';
$string['emailnowexists'] = 'Die E-Mail-Adresse, die Sie in Ihrem Nutzerprofil eintragen möchten, wird bereits von jemand anders verwendet. Der Änderungsvorgang wird abgebrochen, aber Sie können die Eingabe einer weiteren Adresse versuchen.';
$string['emailupdate'] = 'Änderung der E-Mail-Adresse';
$string['emailupdatemessage'] = 'Guten Tag {$a->fullname},

Sie möchten die E-Mail-Adresse für Ihr Nutzerkonto auf {$a->site} ändern. Bitte öffnen Sie die folgende URL in Ihrem Browser, um die Änderung zu bestätigen.

Wenn Sie Fragen haben, kontaktieren Sie den Support: {$a->supportemail}

{$a->url}

Ihr E-Learning-Team';
$string['emailupdatesuccess'] = 'Die E-Mail-Adresse von <em>{$a->fullname}</em> wurde erfolgreich aktualisiert: <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Bestätigung der E-Mail-Änderung bei {$a->site}';
$string['enterthenumbersyouhear'] = 'Geben Sie die gehörten Zahlen ein';
$string['enterthewordsabove'] = 'Geben Sie die gezeigten Wörter ein';
$string['errormaxconsecutiveidentchars'] = 'Kennwörter dürfen maximal {$a} aufeinander folgende identische Zeichen besitzen.';
$string['errorminpassworddigits'] = 'Kennwörter müssen mindestens {$a} Ziffer(n) enthalten.';
$string['errorminpasswordlength'] = 'Kennwörter müssen mindestens {$a} Zeichen lang sein.';
$string['errorminpasswordlower'] = 'Kennwörter müssen mindestens {$a} Kleinbuchstaben enthalten.';
$string['errorminpasswordnonalphanum'] = 'Kennwörter müssen mindestens {$a} Sonderzeichen enthalten, z.B. *, -, oder #.';
$string['errorminpasswordupper'] = 'Kennwörter müssen mindestens {$a} Großbuchstaben enthalten.';
$string['errorpasswordreused'] = 'Dieses Kennwort wurde bereits benutzt und kann nicht erneut verwendet werden.';
$string['errorpasswordupdate'] = 'Fehler: Kennwort konnte nicht geändert werden!';
$string['eventuserloggedin'] = 'Nutzer/in ist angemeldet';
$string['eventuserloggedinas'] = 'Nutzer/in ist als andere Person angemeldet';
$string['eventuserloginfailed'] = 'Nutzeranmeldung fehlgeschlagen';
$string['forcechangepassword'] = 'Kennwortänderung fordern';
$string['forcechangepasswordfirst_help'] = 'Nutzer/innen werden aufgefordert, ihr Kennwort beim ersten Anmelden zu ändern.';
$string['forcechangepassword_help'] = 'Nutzer/innen werden aufgefordert, ihr Kennwort beim nächsten Anmelden zu ändern.';
$string['forgottenpassword'] = 'Wenn hier eine URL eintragen ist, wird eine Anfrage zur Kennwortrücksetzung zur angegebenen Adresse weitergeleitet, z.B. wenn die Kennwörter außerhalb von Moodle verwaltet werden. Lassen Sie das Feld leer, damit die Moodle-Standardfunktion für diesen Zweck verwendet wird.';
$string['forgottenpasswordurl'] = 'URL für vergessene Kennwörter';
$string['getanaudiocaptcha'] = 'Audio-Captcha laden';
$string['getanimagecaptcha'] = 'Bild-Captcha laden';
$string['getanothercaptcha'] = 'Neues Captcha laden';
$string['getrecaptchaapi'] = 'Um reCAPTCHA verwenden zu können, müssen Sie einen API-Schlüssel von <a href=\'https://www.google.com/recaptcha/admin\'> https://www.google.com/recaptcha/admin</a> anfordern.';
$string['guestloginbutton'] = 'Login für Gäste';
$string['incorrectpleasetryagain'] = 'Leider falsch! Probieren Sie es nochmal.';
$string['infilefield'] = 'Erforderliches Feld in Datei';
$string['informminpassworddigits'] = '{$a} Ziffer(n)';
$string['informminpasswordlength'] = 'mindestens {$a} Zeichen';
$string['informminpasswordlower'] = '{$a} Kleinbuchstabe(n)';
$string['informminpasswordnonalphanum'] = '{$a} Sonderzeichen, z.B. *, -, oder #.';
$string['informminpasswordreuselimit'] = 'Kennwörter können nach {$a} Änderungen erneut benutzt werden.';
$string['informminpasswordupper'] = '{$a} Großbuchstabe(n)';
$string['informpasswordpolicy'] = 'Kennwortregeln: <br />{$a}';
$string['instructions'] = 'Anleitung';
$string['internal'] = 'Intern';
$string['limitconcurrentlogins'] = 'Gleichzeitige Anmeldungen begrenzen';
$string['limitconcurrentlogins_desc'] = 'Wenn diese Option aktiviert ist, wird die Anzahl der Anmeldungen für jeden Benutzer eingeschränkt. Die älteste Sitzung wird beim Erreichen der Grenze beendet, alle nicht gespeicherten Daten gehen verloren. Diese Einstellung ist nicht mit einer Authentifizierung über Single-Sign-On (SSO) kompatibel.';
$string['locked'] = 'Gesperrt';
$string['md5'] = 'MD5-Verschlüsselung';
$string['nopasswordchange'] = 'Kennwort kann nicht geändert werden';
$string['nopasswordchangeforced'] = 'Ohne die Änderung des Kennworts können Sie nicht weitermachen. Falls die Seite zur Änderung des Kennworts nicht verfügbar ist, wenden Sie sich an den Administrator der Website.';
$string['noprofileedit'] = 'Das Profil darf nicht bearbeitet werden';
$string['ntlmsso_attempting'] = 'Single-Sign-On über NTLM versuchen ...';
$string['ntlmsso_failed'] = 'Die automatische Anmeldung ist fehlgeschlagen. Versuchen Sie das normale Login ...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO ist deaktiviert.';
$string['passwordhandling'] = 'Nutzung des Kennwortfeldes';
$string['plaintext'] = 'Unformatierter Text';
$string['pluginnotenabled'] = 'Authentifizierungsplugin \'{$a}\' ist nicht aktiviert.';
$string['pluginnotinstalled'] = 'Authentifizierungsplugin \'{$a}\' ist nicht installiert.';
$string['potentialidps'] = 'Verwenden Sie Ihr Nutzerkonto bei:';
$string['privacy:metadata:userpref:createpassword'] = 'Legt fest, dass ein Kennwort für den Nutzer erstellt werden soll';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Legt fest, ob ein Nutzer beim Login das Kennwort ändern soll';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Anzahl der Fehllogins des Nutzers';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Anzahl der Fehllogins des Nutzers nach seinem letzten erfolgreichen Login';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Das Datum, an dem der letzte Loginversuch erfolgte';
$string['privacy:metadata:userpref:loginlockout'] = 'Kennzeichnet, ob ein Nutzeraccount geblockt ist weil er vergebliche Loginversuche hatte und zu welchem Zeitpunkt der Account geblockt wurde';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Kennzeichnet, dass ein Nutzeraccount niemals geblockt werden soll.';
$string['privacy:metadata:userpref:loginlockoutsecret'] = '\'Kennzeichen\' mit dem ein geblockter Nutzer den Account entsperren kann.';
$string['recaptcha'] = 'ReCaptcha';
$string['recaptcha_help'] = 'Das Captcha dient dazu, Missbrauch durch automatisierte Programme zu verhindern. Befolgen Sie die Anleitung zur Bestätigung, dass Sie kein Roboter sind. Verschiedene Dinge sind möglich, z.B. eine Box zum Markieren, Buchstaben in einem angezeigten Bild oder eine Reihe zur Auswahl angezeigte Bilder.

Sollten Sie nicht sicher sein, wie sie antworten sollen, versuchen Sie es noch einmal mit einem neuen Captcha oder mit einem Audio-Captcha.';
$string['security_question'] = 'Sicherheitsfrage';
$string['selfregistration'] = 'Selbstregistrierung';
$string['selfregistration_help'] = 'Wenn die Selbstregistrierung (z.B. \'E-Mail basiert\') aktiviert ist, können sich alle Personen selbst registrieren und ein Nutzerkonto anlegen. Auf diese Weise könnten aber auch Spammer ein Nutzerkonto erhalten und Einträge in Foren, Blogs oder Profilen  missbrauchen. Um dieses Risiko zu vermeiden, können Sie die Selbstregistrierung ausschalten oder auf bestimmte E-Mail-Domains (z.B. meinefirma.de) beschränken.';
$string['settingmigrationmismatch'] = 'Fehlende Übereinstimmungen, die bei der Korrektur der Namen in den Plugin-Einstellungen erkannt wurden! Beim Authentifizierungs-Plugin \'{$a->plugin}\' war die Einstellung \'{$a->setting}\' konfiguriert mit dem veralteten Namen \'{$a->legacy}\' und dem aktuellen Namen \'{$a->current}\'. Der letztere Wert wurde als gültig gesetzt, aber Sie sollten dies noch einmal überprüfen.';
$string['sha1'] = 'SHA-1 hash';
$string['showguestlogin'] = 'Sie können auf der Anmeldeseite die Taste zum Gast-Login anzeigen oder verbergen. Wenn die Taste verborgen ist, ist ein Gast-Login für die Website nicht erlaubt.';
$string['stdchangepassword'] = 'Standardseite zur Kennwortänderung nutzen';
$string['stdchangepassword_expl'] = 'Stellen Sie \'Ja\' ein, wenn das externe Authentifizierungssystem eine Änderung des Kennwortes durch Moodle zulässt. Die Einstellungen überschreiben \'URL zur Kennwortänderung\'';
$string['stdchangepassword_explldap'] = 'Warnung: LDAP sollte unbedingt SSL-verschlüsselt sein (ldaps://), wenn der LDAP-Server extern betrieben wird.';
$string['suspended'] = 'Gesperrtes Nutzerkonto';
$string['suspended_help'] = 'Gesperrte Nutzer/innen können sich nicht einloggen und auch keine Webservices benutzen. Alle ausgehenden Mitteilungen werden gelöscht.';
$string['testsettings'] = 'Einstellungen prüfen';
$string['testsettingsheading'] = 'Authentifizierungseinstellungen prüfen - {$a}';
$string['unlocked'] = 'Bearbeitbar';
$string['unlockedifempty'] = 'Bearbeitbar (wenn leer)';
$string['update_never'] = 'Nie';
$string['update_oncreate'] = 'Beim Anlegen';
$string['update_onlogin'] = 'Bei jedem Login';
$string['update_onupdate'] = 'Bei Aktualisierung';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() unterstützt den ausgewählten Nutzertyp nicht: \'{$a}\'';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() unterstützt den ausgewählten Nutzertyp nicht: \'{$a}\'';
$string['username'] = 'Anmeldename';
$string['username_help'] = 'Beachten Sie, dass einige Authentifizierungsplugins die nachträgliche Änderung des Anmeldenamens nicht erlauben.';
