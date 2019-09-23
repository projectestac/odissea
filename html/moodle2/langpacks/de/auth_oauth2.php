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
 * Strings for component 'auth_oauth2', language 'de', branch 'MOODLE_36_STABLE'
 *
 * @package   auth_oauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'Es existiert bereits ein Nutzer mit diesem Benutzernamen. Falls es sich dabei um Ihren Nutzeraccount handelt, melden Sie sich bitte mit Ihrem Benutzernamen und Kennwort an und fügen Sie ihn über Ihre Favoritenseite als verbundenen Login hinzu.';
$string['alreadylinked'] = 'Dieser externe Account ist bereits mit einem Nutzerkonto auf dieser Seite verknüpft.';
$string['auth_oauth2description'] = 'OAuth 2 Standard-basierte Authentifizierung';
$string['auth_oauth2settings'] = 'Einstellungen zur OAuth 2 Authentifizierung';
$string['confirmaccountemail'] = 'Guten Tag {$a->fullname},

auf \'{$a->sitename}\' wurde ein neuer Account mit Ihrer E-Mailadresse angelegt.

Bitte folgen Sie diesem Link, um das neue Profil zu bestätigen:

{$a->link}

In den meisten Mailprogrammen sollte dieser Link in blau angezeigt werden, sodass Sie ihn anklicken können. Sollte dies nicht der Fall sein, kopieren Sie bitte den Link und fügen Ihn in der Adresszeile Ihres Browserfensters ein.

Falls Sie Hilfe benötigen, kontaktieren Sie bitte den Seitenadministrator,
{$a->admin}

Ihr E-Learning-Team';
$string['confirmaccountemailsubject'] = '{$a}: Bestätigung für das Nutzerkonto';
$string['confirmationinvalid'] = 'Der Bestätigungslink ist ungültig oder bereits abgelaufen. Starten Sie den Anmeldevorgang erneut, um eine neue Bestätigungs-E-Mail zu erhalten.';
$string['confirmationpending'] = 'Dieses Nutzerkonto wartet auf eine E-Mail-Bestätiging.';
$string['confirmlinkedloginemail'] = 'Guten Tag {$a->fullname},

unter Angabe Ihrer E-Mail-Adresse wurde eine Anfrage gestellt, das {$a->issuername}-Login \'{$a->linkedemail}\' mit Ihrem Nutzerkonto auf \'{$a->sitename}\' zu verbinden.

Bestätigen Sie über diesen Link die Anfrage zum Verbinden mit Ihrem Nutzerkonto:

{$a->link}

In den meisten E-Mail-Programmen sollte dieser Link in blau angezeigt werden und anklickbar sein. Sollte dies nicht der Fall sein, kopieren Sie bitte den Link und fügen Ihn in der Adresszeile Ihres Browserfensters ein.

Falls Sie Hilfe benötigen, kontaktieren Sie bitte Administrator der Website,
{$a->admin}

Ihr E-Learning-Team';
$string['confirmlinkedloginemailsubject'] = '{$a}: Bestätigung für ein weiteres Login';
$string['createaccountswarning'] = 'Dieses Authentifizierungsplugin ermöglicht es Nutzer/innen, ein Nutzerkonto auf Ihrer Seite anzulegen. Wenn Sie dieses Plugin verwenden, sollten Sie die Einstellung \'authpreventaccountcreation\' aktivieren.';
$string['createnewlinkedlogin'] = 'Neues Nutzerkonto ({$a}) verlinken';
$string['emailconfirmlink'] = 'Ihre Nutzerkonten verlinken';
$string['emailconfirmlinksent'] = '<p>Zu dieser E-Mail-Adresse wurde ein bereits existierendes Nutzerkonto  gefunden, das jedoch bisher noch nicht verlinkt ist.</p>
<p>Die Nutzerkonten müssen verlinkt werden, bevor Sie sich einloggen können.</p>
<p>Eine E-Mail sollte an Ihre Emailadresse bei <b>{$a}</b> versandt worden sein.</p>
<p>Diese E-Mail enthält einfache Anweisungen, wie Sie Ihre Nutzerkonten miteinander verbinden.</p>
 <p>Kontaktieren Sie den Administrator der Website, falls Probleme auftreten.</p>';
$string['info'] = 'Externes Nutzerkonto';
$string['issuer'] = 'OAuth 2 Service';
$string['issuernologin'] = 'Der Aussteller kann nicht als Login verwendet werden';
$string['linkedlogins'] = 'Weitere Logins';
$string['linkedloginshelp'] = 'Hilfe für weitere Logins';
$string['loginerror_authenticationfailed'] = 'Der Authentifizierungsvorgang ist fehlgeschlagen.';
$string['loginerror_cannotcreateaccounts'] = 'Ein Nutzerkonto mit dieser E-Mail-Adresse konnte nicht gefunden werden.';
$string['loginerror_invaliddomain'] = 'Die E-Mail-Adresse ist für diese Website nicht erlaubt.';
$string['loginerror_nouserinfo'] = 'Es wurden keine Nutzerinformationen zurückgeliefert. Der OAth 2 Service ist möglicherweise falsch konfiguriert.';
$string['loginerror_userincomplete'] = 'Die zurückgelieferte Nutzerinformation enthielt keinen Nutzernamen und keine E-Mail-Adresse. Der OAuth 2 Service ist möglicherweise falsch konfiguriert.';
$string['noissuersavailable'] = 'Keiner der konfigurierten OAuth2 services erlaubt Ihnen die Verknüpfung von Login-Accounts.';
$string['notenabled'] = 'Das Plugin zur OAuth 2 Authentifizierung ist leider nicht aktiviert.';
$string['notloggedindebug'] = 'Der Login-Versuch ist fehlgeschlagen. {$a}';
$string['notwhileloggedinas'] = 'Weitere Logins können nicht verwaltet werden, wenn Sie mit einem anderen Nutzerkonto eingeloggt sind.';
$string['oauth2:managelinkedlogins'] = 'Weitere eigene verlinkte Nutzerkonten verwalten';
$string['plugindescription'] = 'Dieses Authentifizierungs-Plugin zeigt auf der Anmeldeseite eine Liste der konfigurierten Identity Provider. Mit der Auswahl des Identity Provider können Nutzer/innen sich mit ihren Anmeldedaten eines OAuth 2 Providers anmelden.';
$string['pluginname'] = 'OAuth 2';
$string['privacy:metadata:auth_oauth2'] = 'OAuth2 Authentifizierung';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'Dieses Plugin ist mit dem Authentifizierungs-Subsystem verbunden.';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'Der Bestätigungs-Token';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'Zeitstempel für Ablauf des Bestätigungs-Token hin';
$string['privacy:metadata:auth_oauth2:email'] = 'Externe E-Mail-Adresse, die mit diesem Account verbunden ist';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'ID des OAuth2-Ausstellers für dieses OAuth2-Login';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'OAuth2-Accounts, die mit einem Moodle-Nutzeraccount verbunden sind.';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'Zeitstempel mit dem der Nutzer mit dem OAuth2-Login verknüpft wurde';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'Zeitstempel wann der Datensatz verändert wurde';
$string['privacy:metadata:auth_oauth2:userid'] = 'ID der Person, mit der dieser OAuth2-Login verknüpft ist.';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'ID des Nutzers, der diesen Account bearbeitet hat.';
$string['privacy:metadata:auth_oauth2:username'] = 'Der externe  Nutzername, der mit diesem Account verbunden ist';
