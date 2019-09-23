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
 * Strings for component 'webservice', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   webservice
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Access Control Exception';
$string['actwebserviceshhdr'] = 'Webservice-Protokolle aktivieren';
$string['addaservice'] = 'Service hinzufügen';
$string['addcapabilitytousers'] = 'Nutzerrechte prüfen';
$string['addcapabilitytousersdescription'] = 'Nutzer/innen brauchen zwei Rechte: \'webservice:createtoken\' und ein zum jeweiligen Webservice-Protokoll passendes Recht (\'webservice/rest:use\', \'webservice/soap:use\', ...). <br />Zur Konfiguration ist es sinnvoll, eine neue Rolle \'Webservice\' mit dem Recht \'webservice:createtoken\' und mehreren Protokollrechten anzulegen und anschließend diese Rolle dem Webservice-Nutzer zuzuweisen.';
$string['addfunction'] = 'Funktion hinzufügen';
$string['addfunctionhelp'] = 'Funktion auswählen, um sie dem Service hinzuzufügen';
$string['addfunctions'] = 'Funktionen hinzufügen';
$string['addfunctionsdescription'] = 'Notwendige Funktionen für den neuen Service auswählen';
$string['addrequiredcapability'] = 'Notwendiges Recht hinzufügen / löschen';
$string['addservice'] = 'Neuen Service hinzufügen: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Funktionen zum Service \'{$a}\' hinzufügen';
$string['allusers'] = 'Alle Nutzer/innen';
$string['apiexplorer'] = 'API Explorer';
$string['apiexplorernotavalaible'] = 'API Explorer bisher nicht verfügbar';
$string['arguments'] = 'Argumente';
$string['authmethod'] = 'Authentifizierung';
$string['callablefromajax'] = 'Abrufbar von AJAX';
$string['cannotcreatetoken'] = 'Keine Berechtigung. Das Webservice-Token für \'{$a}\' kann nicht erzeugt werden.';
$string['cannotgetcoursecontents'] = 'Kursinhalte können nicht geladen werden.';
$string['checkusercapability'] = 'Nutzerrecht prüfen';
$string['checkusercapabilitydescription'] = 'Ein Webservice-Nutzer muss die zu den benutzten Webservice-Protokollen passendes Rechte besitzen: (\'webservice/rest:use\', \'webservice/soap:use\', ...). <br />Zur Konfiguration ist es sinnvoll, eine neue Rolle \'Webservice\' mit dem Recht \'webservice:createtoken\' und mehreren Protokollrechten anzulegen und anschließend diese Rolle dem Webservice-Nutzer zuzuweisen.';
$string['configwebserviceplugins'] = 'Zur Sicherheit sollten nur wirklich benutzte Protokolle aktiviert werden.';
$string['context'] = 'Kontext';
$string['createservicedescription'] = 'Ein Service beinhaltet mehrere Webservice-Funktionen. Sie müssen Personen erlauben, auf den neuen Service zuzugreifen. Auf der Seite <strong>Service hinzufügen</strong> markieren Sie \'Aktivieren\' und \'Berechtigte Personen\'. Wählen Sie \'Keine notwendigen Rechte\' aus.';
$string['createserviceforusersdescription'] = 'Ein Service beinhaltet mehrere Webservice-Funktionen. Sie müssen Personen erlauben, auf den neuen Service zuzugreifen. Auf der Seite <strong>Service hinzufügen</strong> markieren Sie \'Aktivieren\' und markieren Sie nicht \'Berechtigte Personen\'. Wählen Sie \'Keine notwendigen Rechte\' aus.';
$string['createtoken'] = 'Token erzeugen';
$string['createtokenforuser'] = 'Nutzer-Token erzeugen';
$string['createtokenforuserdescription'] = 'Nutzer-Token für den Webservice erzeugen';
$string['createuser'] = 'Webservice-Nutzer anlegen';
$string['createuserdescription'] = 'Sie müssen einen speziellen Webservice-Nutzer für das System anlegen, das Moodle steuern soll';
$string['criteriaerror'] = 'Fehlende Rechte für die Kriteriensuche';
$string['default'] = 'Standardmäßig für \'{$a}\'';
$string['deleteaservice'] = 'Service löschen';
$string['deleteservice'] = 'Service löschen: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Wenn ein Webservice gelöscht wird, werden auch alle damit verbundenen Token gelöscht. Möchten Sie wirklich den externen Service \'{$a}\' löschen?';
$string['deletetokenconfirm'] = 'Möchten Sie wirklich das Nutzer-Token von \'{$a->user}\' für den Webservice \'{$a->service}\' löschen?';
$string['disabledwarning'] = 'Alle Webservice-Protokolle sind deaktiviert. Die Einstellung \'Webservice aktivieren\' befindet sich bei \'Zusatzoptionen\'';
$string['doc'] = 'Dokumentation';
$string['docaccessrefused'] = 'Sie sind nicht berechtigt, die Dokumentation für dieses Token zu sehen.';
$string['documentation'] = 'Webservice-Dokumentation';
$string['downloadfiles'] = 'Dateien herunterladen';
$string['downloadfiles_help'] = 'Nach der Aktivierung können alle Nutzer Dateien mit ihrem Sicherheitsschlüssel herunterladen. Dies gilt nur für die Dateien für die sie eine Berechtigung haben.';
$string['editaservice'] = 'Service bearbeiten';
$string['editservice'] = 'Service bearbeiten: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Aktiviert';
$string['enabledocumentation'] = 'Entwicklerdokumentation aktivieren';
$string['enabledocumentationdescription'] = 'Eine ausführliche Webservicedokumentation ist für die aktivierten Protokolle verfügbar.';
$string['enableprotocols'] = 'Protokolle aktivieren';
$string['enableprotocolsdescription'] = 'Mindestens ein Protokoll muss aktiviert sein. Aus Sicherheitsgründen sollten nur tatsächlich benutzte Protokolle aktiviert werden.';
$string['enablews'] = 'Webservices aktivieren';
$string['enablewsdescription'] = 'Webservices müssen in den \'Zusatzoptionen\' aktiviert werden.';
$string['entertoken'] = 'Sicherheitsschlüssel/Token eingeben:';
$string['error'] = 'Fehler: {$a}';
$string['errorcatcontextnotvalid'] = 'Sie dürfen keine Funktionen im Bereichskontext (Kursbereichs-ID: {$a->courseid}) ausführen. Die Fehlermeldung war: {$a->message}';
$string['errorcodes'] = 'Fehlermeldung';
$string['errorcoursecontextnotvalid'] = 'Sie dürfen keine Funktionen im Kurskontext (course id: {$a->courseid}) ausführen. Die Fehlermeldung war: {$a->message}';
$string['errorinvalidparam'] = 'Ungültiger Parameter \'{$a}\'';
$string['errornotemptydefaultparamarray'] = 'Der Webservice-Parameter \'{$a}\' hat eine Single- oder Multiple-Struktur. Standardmäßig darf er nur ein leeres Array sein. Prüfen Sie die Webservice-Beschreibung.';
$string['erroroptionalparamarray'] = 'Der Webservice-Parameter \'{$a}\' hat eine Single- oder Multiple-Struktur. Er kann nicht als VALUE_OPTIONAL gesetzt werden. Prüfen Sie die Webservice-Beschreibung.';
$string['eventwebservicefunctioncalled'] = 'Webservice-Funktion aufgerufen';
$string['eventwebserviceloginfailed'] = 'Webservice-Login fehlgeschlagen';
$string['eventwebserviceservicecreated'] = 'Webservice-Dienst angelegt';
$string['eventwebserviceservicedeleted'] = 'Dienst für Webservice gelöscht';
$string['eventwebserviceserviceupdated'] = 'Webservice-Dienst aktualisiert';
$string['eventwebserviceserviceuseradded'] = 'Webservice-Dienstnutzer angelegt';
$string['eventwebserviceserviceuserremoved'] = 'Webservice-Dienstnutzer entfernt';
$string['eventwebservicetokencreated'] = 'Webservice-Token angelegt';
$string['eventwebservicetokensent'] = 'Webservice-Token gesendet';
$string['execute'] = 'Ausführen';
$string['executewarnign'] = 'Achtung: Wenn Sie \'Ausführen\' drücken, so wird Ihre Datenbank verändert. Die Änderungen können nicht automatisch zurückgenommen werden!';
$string['externalservice'] = 'Externer Service';
$string['externalservicefunctions'] = 'Externe Servicefunktionen';
$string['externalservices'] = 'Externe Services';
$string['externalserviceusers'] = 'Externe Servicenutzer';
$string['failedtolog'] = 'Fehler beim Schreiben von Logdaten';
$string['filenameexist'] = 'Dateiname existiert bereits: {$a}';
$string['forbiddenwsuser'] = 'Sie können keine Token erzeugen, wenn Nutzerinnen unbestätigt, gelöscht, gesperrt oder Gäste sind.';
$string['function'] = 'Funktion';
$string['functions'] = 'Funktionen';
$string['generalstructure'] = 'Allgemeine Struktur';
$string['information'] = 'Information';
$string['installexistingserviceshortnameerror'] = 'Ein Webservice mit dem Kurznamen "{$a}" existiert bereits. Sie können keinen weiteren Webservice mit dem gleichen Namen installieren.';
$string['installserviceshortnameerror'] = 'Codierungsfehler: Der Kurzname des Webservice "{$a}" darf ausschließlich Buchstaben, Zahlen und _-.. enthalten';
$string['invalidextparam'] = 'Ungültiger externer API-Parameter: {$a}';
$string['invalidextresponse'] = 'Ungültige externe API-Antwort: {$a}';
$string['invalidiptoken'] = 'Ungültiges Token - Ihre IP-Adresse wird nicht unterstützt';
$string['invalidtimedtoken'] = 'Ungültiges Token - Token ist abgelaufen';
$string['invalidtoken'] = 'Ungültiges Token - Token wurde nicht gefunden';
$string['iprestriction'] = 'IP-Beschränkung';
$string['iprestriction_help'] = 'Der Webservice kann nur von einer der gelisteten IP-Adressen aufgerufen werden.';
$string['key'] = 'Schlüssel';
$string['keyshelp'] = 'Die Schlüssel werden benutzt, um mit externen Programmen auf Ihr Moodlekonto zugreifen zu können';
$string['loginrequired'] = 'Nur für eingeloggte Nutzer/innen';
$string['manageprotocols'] = 'Protokolle verwalten';
$string['managetokens'] = 'Token verwalten';
$string['missingcaps'] = 'Fehlende Rechte';
$string['missingcaps_help'] = 'Liste der notwendigen, aber bisher fehlenden Rechte für die Nutzung des Webservices. Sie müssen diese Rechte an den Nutzer vergeben, damit er den Webservice nutzen kann.
';
$string['missingpassword'] = 'Fehlendes Passwort';
$string['missingrequiredcapability'] = 'Das Recht \'{$a}\' ist notwendig.';
$string['missingusername'] = 'Anmeldename fehlt';
$string['missingversionfile'] = 'Codierungsfehler: Für die Komponente "{$a}" fehlt die Datei version.php';
$string['nameexists'] = 'Der Name wird bereits für einen anderen Webservice verwendet.';
$string['nocapabilitytouseparameter'] = 'Die Person besitzt nicht die notwendigen Rechte, um die Parameter verwenden \'{$a}\'';
$string['nofunctions'] = 'Dieser Service hat keine Funktion.
';
$string['norequiredcapability'] = 'Keine notwendige Rechte';
$string['notoken'] = 'Die Token-Liste ist leer.';
$string['onesystemcontrolling'] = 'Externem System die Kontrolle erlauben';
$string['onesystemcontrollingdescription'] = 'Die folgenden Schritte helfen Ihnen, den Webservice für ein externes System zu konfigurieren, das mit Moodle Daten austauscht. Dabei wird auch das Erzeugen des Token (Sicherheitsschlüssel) zur Authentifizierung gezeigt.';
$string['onlyseecreatedtokens'] = 'Nur die Token, die Ihnen gehören oder die von Ihnen erzeugt wurden, können gesehen werden. Sie können weiterhin andere Token löschen.';
$string['operation'] = 'Vorgang';
$string['optional'] = 'Optional';
$string['passwordisexpired'] = 'Das Kennwort ist abgelaufen';
$string['phpparam'] = 'XMLRPC (PHP-Struktur)';
$string['phpresponse'] = 'XMLRPC (PHP-Struktur)';
$string['postrestparam'] = 'PHP-Code für REST (POST request)';
$string['potusers'] = 'Unberechtigte Personen';
$string['potusersmatching'] = 'Passende unberechtigte Personen';
$string['print'] = 'Alles drucken';
$string['privacy:metadata:serviceusers'] = 'Liste von Nutzern, die bestimmten externen Service nutzen können';
$string['privacy:metadata:serviceusers:iprestriction'] = 'IPs, die Service nicht nutzen dürfen';
$string['privacy:metadata:serviceusers:timecreated'] = 'Datum an dem Datensatz erstellt wurde';
$string['privacy:metadata:serviceusers:userid'] = 'ID des Nutzers';
$string['privacy:metadata:serviceusers:validuntil'] = 'Datum zu dem Autorisierung endet';
$string['privacy:metadata:tokens'] = 'Aufzeichnung von Tokens zur Interaktion mit Moodle über Webservices oder Mobile-Apps.';
$string['privacy:metadata:tokens:creatorid'] = 'ID des Nutzers, der Token erstellt hat';
$string['privacy:metadata:tokens:iprestriction'] = 'IP, für die die Nutzung des Tokens beschränkt ist';
$string['privacy:metadata:tokens:lastaccess'] = 'Datum an dem Token zuletzt genutzt wurde';
$string['privacy:metadata:tokens:privatetoken'] = 'Ein vertrauliches Token wird gelegentlich verwendet, um bestimmte Vorgänge wie z.B. SSO zu validieren.';
$string['privacy:metadata:tokens:timecreated'] = 'Datum an dem Token erstellt wurde';
$string['privacy:metadata:tokens:token'] = 'Nutzertoken';
$string['privacy:metadata:tokens:tokentype'] = 'Tokentyp';
$string['privacy:metadata:tokens:userid'] = 'ID des Nutzers, dem Token gehört';
$string['privacy:metadata:tokens:validuntil'] = 'Datum, an dem Token ungültig wird';
$string['privacy:request:notexportedsecurity'] = 'Aus Sicherheitsgründen nicht exportiert';
$string['protocol'] = 'Protokoll';
$string['removefunction'] = 'Entfernen';
$string['removefunctionconfirm'] = 'Möchten Sie wirklich die Funktion \'{$a->function}\' aus dem Service \'{$a->service}\' entfernen?';
$string['requireauthentication'] = 'Diese Methode benötigt die Authentifizierung mit xxx Berechtigungen.';
$string['required'] = 'Notwendig';
$string['requiredcapability'] = 'Notwendige Rechte';
$string['requiredcapability_help'] = 'Wenn die Option aktiviert ist, können ausschließlich Nutzer/innen mit den notwendigen Rechten diesen Webservice nutzen.';
$string['requiredcaps'] = 'Notwendige Fähigkeiten';
$string['resettokenconfirm'] = 'Wollen Sie den Webserviceschlüssel für <strong>{$a->user}</strong> zurücksetzen? Service: <strong>{$a->service}</strong>.';
$string['resettokenconfirmsimple'] = 'Wollen Sie den Schlüssel wirklich zurücksetzen? Alle gespeicherten Links mit dem alten Schlüssel werden dann nicht mehr funktionieren. ';
$string['response'] = 'Antwort';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Für das wiederhergestellte Konto muss ein neues Kennwort gesetzt werden, bevor ein Token erzeugt wird';
$string['restparam'] = 'REST (POST Parameter)';
$string['restrictedusers'] = 'Nur berechtigte Personen';
$string['restrictedusers_help'] = 'Diese Option legt fest, ob alle Personen mit dem Recht \'moodle/webservice:createtoken\' ein Token für diesen Webservice auf der Seite \'Sicherheitsschlüssel\' erstellen dürfen oder ob dies nur berechtigte Personen tun können.';
$string['securitykey'] = 'Sicherheitsschlüssel (Token)';
$string['securitykeys'] = 'Sicherheitsschlüssel';
$string['selectauthorisedusers'] = 'Berechtigte Personen auswählen';
$string['selectedcapability'] = 'Ausgewählt';
$string['selectedcapabilitydoesntexit'] = 'Die aktuell gesetzte und notwendige Fähigkeit ({$a})  gibt es nicht mehr. Bitte ändern und speichern Sie dies.';
$string['selectservice'] = 'Service auswählen';
$string['selectspecificuser'] = 'Spezielle/n Nutzer/in auswählen';
$string['selectspecificuserdescription'] = 'Den Webservice-Nutzer als autorisierten Nutzer hinzufügen';
$string['service'] = 'Service';
$string['servicehelpexplanation'] = 'Ein Webservice ist ein Set von Funktionen. Er kann von allen oder ausschließlich von speziell ausgewählten Nutzern verwendet werden. ';
$string['servicename'] = 'Name des Service';
$string['servicenotavailable'] = 'WebService ist nicht verfügbar (er existiert nicht oder ist gesperrt).';
$string['servicerequireslogin'] = 'Web-Service ist nicht verfügbar. Sie wurden abgemeldet oder die Session ist abgelaufen.';
$string['servicesbuiltin'] = 'Integrierte Services';
$string['servicescustom'] = 'Spezifische Services';
$string['serviceusers'] = 'Berechtigte Personen';
$string['serviceusersettings'] = 'Nutzer/innen-Einstellungen';
$string['serviceusersmatching'] = 'Passende berechtigte Personen';
$string['serviceuserssettings'] = 'Einstellungen für berechtigte Personen ändern';
$string['shortnametaken'] = 'Der Kurzname wird bereits für einen anderen Dienst verwendet ({$a})';
$string['simpleauthlog'] = 'Login mit einfacher Authentifizierung';
$string['step'] = 'Schritt';
$string['supplyinfo'] = 'Weitere Details';
$string['testauserwithtestclientdescription'] = 'Simulieren Sie einen externen Dienstzugriff mit dem Webservice-Testclient. Loggen Sie sich zuerst als Nutzer/in mit der Berechtigung "moodle/webservice:createtoken" ein. Suchen Sie die Option \'Sicherheitsschlüssel\' (Token) auf der Nutzerseite \'Einstellungen\'. Verwenden Sie das Token im Testclient. Wählen Sie im Testclient ein aktiviertes Protokoll mit Token-Authentifizierung. <strong>Achtung: Die getesteten Funktionen werden für dieses Nutzerkonto tatsächlich ausgeführt. Seien Sie deswegen vorsichtig mit der Auswahl Ihrer Tests.</strong>';
$string['testclient'] = 'Webservice-Testrechner';
$string['testclientdescription'] = '* Der Webservice-TestClient <strong>führt die Funktionen tatsächlich aus </strong>. Testen Sie keine Funktionen, die Ihnen unbekannt sind.<br />
* Die Webservice-Funktionen sind bisher noch nicht alle in den TestClient implementiert.<br />
* Um zu prüfen, dass ein Nutzer auf manche Funktionen nicht zugreifen kann, geben Sie auch einige Funktionen an, die Sie nicht zugelassen haben.<br />
* Um aussagekräftigere Fehlermeldungen zu bekommen, setzen Sie den Debugmodus auf <strong>{$a->mode}</strong> unter {$a->atag}.';
$string['testwithtestclient'] = 'Service testen';
$string['testwithtestclientdescription'] = 'Simulation des externen Zugriffs mit dem Webservice Testclient. Verwenden Sie ein aktiviertes Protokoll mit Token-Authentifizierung. <strong>Warnung: Die Funktionen, die Sie testen, WERDEN AUSGEFÜHRT. Seien Sie also vorsichtig, mit dem, was Sie testen.</strong>';
$string['token'] = 'Token';
$string['tokenauthlog'] = 'Token Authentifizierung';
$string['tokencreatedbyadmin'] = 'Kann ausschließlich vom Administrator zurückgesetzt werden (*)';
$string['tokencreator'] = 'Ersteller';
$string['unknownoptionkey'] = 'Unbekannter optionaler Schlüssel ({$a})';
$string['unnamedstringparam'] = 'Unbenannter Textparameter';
$string['updateusersettings'] = 'Update';
$string['uploadfiles'] = 'Dateien hochladen';
$string['uploadfiles_help'] = 'Wenn diese Option aktiviert ist, können alle Nutzer/innen Dateien unter Verwendung ihrer Sicherheitsschlüssel in \'Meine Dateien\' oder in einen Entwurfsbereich hochladen. Alle Dateiquotas gelten.';
$string['userasclients'] = 'Nutzer als Clients mit Token';
$string['userasclientsdescription'] = 'Die folgenden Schritte helfen Ihnen, den Webservice für Nutzer/innen als Clients zu konfigurieren. Dabei wird auch das Erzeugen des empfohlenen Sicherheitsschlüssels (Token) zur Authentifizierung gezeigt. Im Anwendungsfall erzeugen Nutzer/innen selber ihr persönliches Token über die Option \'Sicherheitsschlüssel\' auf ihrer Nutzerseite \'Einstellungen\'.';
$string['usermissingcaps'] = 'Fehlende Fähigkeiten: {$a}';
$string['usernameorid'] = 'Anmeldename/Nutzer-ID';
$string['usernameorid_help'] = 'Anmeldename oder Nutzer-ID eingeben';
$string['usernameoridnousererror'] = 'Es wurde kein Nutzerkonto mit diesem Anmeldenamen oder dieser Nutzer-ID gefunden.';
$string['usernameoridoccurenceerror'] = 'Es wurde mehrere Nutzerkonten mit diesem Anmeldenamen gefunden. Geben Sie die Nutzer-ID ein.';
$string['usernotallowed'] = 'Das Nutzerkonto ist nicht für diesen Service zugelassen. Zuerst müssen Sie das Nutzerkonto in die Nutzeradministration für {$a} eintragen.';
$string['userservices'] = 'Nutzerservices: {$a}';
$string['usersettingssaved'] = 'Nutzereinstellungen gespeichert';
$string['validuntil'] = 'Gültig bis';
$string['validuntil_help'] = 'Der Service wird für Nutzer deaktiviert nach dem eingegeben Datum ';
$string['webservice'] = 'Webservice';
$string['webservices'] = 'Webservices';
$string['webservicesoverview'] = 'Übersicht';
$string['webservicetokens'] = 'Webservice-Tokens';
$string['wrongusernamepassword'] = 'Falscher Anmeldename oder falsches Kennwort';
$string['wsaccessuserdeleted'] = 'Webservicezugriff für gelöschtes Nutzerkonto verweigert: {$a}';
$string['wsaccessuserexpired'] = 'Webservicezugriff für Nutzerkonto mit abgelaufenem Kennwort verweigert: {$a}';
$string['wsaccessusernologin'] = 'Webservicezugriff für gesperrtes Nutzerkonto verweigert: {$a}';
$string['wsaccessusersuspended'] = 'Webservicezugriff für gesperrtes Nutzerkonto verweigert: {$a}';
$string['wsaccessuserunconfirmed'] = 'Webservicezugriff für unbestätigtes Nutzerkonto verweigert: {$a}';
$string['wsclientdoc'] = 'Webservice-Client-Dokumentation';
$string['wsdocapi'] = 'API Dokumentation';
$string['wsdocumentation'] = 'Webservice-Dokumentation';
$string['wsdocumentationdisable'] = 'Die Webservice-Dokumentation ist deaktiviert.';
$string['wsdocumentationintro'] = 'Zum Erstellen eines Clients finden Sie folgende Hinweise: {$a->doclink}';
$string['wsdocumentationlogin'] = 'oder geben Sie die Webservice-Anmeldedaten ein:';
$string['wspassword'] = 'Webservice-Kennwort';
$string['wsusername'] = 'Webservice-Anmeldename';
