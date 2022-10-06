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
 * Strings for component 'blog', language 'de', branch 'MOODLE_38_STABLE'
 *
 * @package   blog
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewentry'] = 'Neuer Beitrag';
$string['addnewexternalblog'] = 'Externen Blog registrieren';
$string['assocdescription'] = 'Wenn Sie zu einen Kurs und/oder über eine Aktivität schreiben, dann wählen Sie dies bitte hier aus.';
$string['associated'] = 'Verbunden: {$a}';
$string['associatewithcourse'] = 'Blog zum Kurs {$a->coursename}';
$string['associatewithmodule'] = 'Blog zu {$a->modtype}: {$a->modname}';
$string['association'] = 'Verbindung';
$string['associations'] = 'Verbindungen';
$string['associationunviewable'] = 'Dieser Beitrag kann nicht von anderen angesehen werden, bis ein Kurs damit verbunden oder das Feld \'Veröffentlichen für\' geändert wird';
$string['autotags'] = 'Diese Tags hinzufügen';
$string['autotags_help'] = 'Geben Sie lokale Tags an (getrennt durch Kommas), mit denen automatisch jeder Beitrag markiert werden soll, der von einem externen Blog in Ihren lokalen Blog übertragen wird.';
$string['backupblogshelp'] = 'Mit der Aktivierung dieser Funktion werden die Blogs in das automatische Backup der Website einbezogen.';
$string['blockexternalstitle'] = 'Externe Blogs';
$string['blog'] = 'Blog';
$string['blogaboutthis'] = 'Blog zu {$a->type}';
$string['blogaboutthiscourse'] = 'Beitrag zu diesem Kurs hinzufügen';
$string['blogaboutthismodule'] = 'Beitrag zu {$a} hinzufügen';
$string['blogadministration'] = 'Blogadministration';
$string['blogdeleteconfirm'] = 'Diesen Blogeintrag (\'{$a}\') löschen?';
$string['blogdisable'] = 'Blogs sind deaktiviert!';
$string['blogentries'] = 'Blogeinträge';
$string['blogentriesabout'] = 'Blogeinträge zu {$a}';
$string['blogentriesbygroupaboutcourse'] = 'Blogeinträge zu {$a->course} von {$a->group}';
$string['blogentriesbygroupaboutmodule'] = 'Blogeinträge zu {$a->mod} von {$a->group}';
$string['blogentriesbyuseraboutcourse'] = 'Blogeinträge zu {$a->course} von {$a->user}';
$string['blogentriesbyuseraboutmodule'] = 'Blogeinträge zu {$a->mod} von {$a->user}';
$string['blogentrybyuser'] = 'Blogeinträge von {$a}';
$string['blogpreferences'] = 'Blogeinstellungen';
$string['blogs'] = 'Blogs';
$string['blogscourse'] = 'Kursblogs';
$string['blogssite'] = 'Blogs der Website';
$string['blogtags'] = 'Blog-Tags';
$string['cannotviewcourseblog'] = 'Sie haben nicht die erforderlichen Rechte, um Blogs in diesem Kurs zu sehen';
$string['cannotviewcourseorgroupblog'] = 'Sie haben nicht die erforderlichen Rechte, um Blogs in diesem Kurs oder in dieser Gruppe zu sehen';
$string['cannotviewsiteblog'] = 'Sie haben nicht die erforderlichen Rechte, um alle Blogs dieser Website zu sehen';
$string['cannotviewuserblog'] = 'Sie haben nicht die erforderlichen Rechte, um Blogs aller Nutzer zu lesen';
$string['configexternalblogcrontime'] = 'Häufigkeit, mit der externe Blogs auf neue Beiträge hin geprüft werden';
$string['configmaxexternalblogsperuser'] = 'Anzahl der externen Blogs, die maximal im persönlichen Moodle-Blog verlinkt sein dürfen';
$string['configuseblogassociations'] = 'Verbindung von Blogeinträgen mit Kursen und Kursmodulen erlauben';
$string['configuseexternalblogs'] = 'Hinzufügen von externen Blogfeeds erlauben. Moodle prüft die Blogfeeds und kopiert neue Beiträge in den persönlichen Moodle-Blog.';
$string['courseblog'] = 'Kursblog: {$a}';
$string['courseblogdisable'] = 'Blogfunktion ist nicht aktiviert';
$string['courseblogs'] = 'Blogs von anderen im Kurs';
$string['deleteblogassociations'] = 'Blogverbindungen löschen';
$string['deleteblogassociations_help'] = 'Wenn diese Option aktiviert wird, sind Blogeinträge nicht länger mit diesem Kurs, einer Kursaktivität oder einem Kursmaterial verbunden. Die Blogeinträge selber werden nicht gelöscht.';
$string['deleteentry'] = 'Eintrag löschen';
$string['deleteexternalblog'] = 'Diesen externen Blog trennen';
$string['deleteotagswarn'] = 'Möchten Sie diese Tags wirklich aus allen Blogeinträgen und aus dem System entfernen?';
$string['description'] = 'Beschreibung';
$string['description_help'] = 'Fassen SIe den Inhalt Ihres externen Blogs kurz zusammen. Falls keine Beschreibung angegeben wird, wird die Beschreibung aus dem externen Blog übernommen.';
$string['donothaveblog'] = 'Sie haben zur Zeit keinen persönlichen Blog.';
$string['editentry'] = 'Blogeintrag bearbeiten';
$string['editexternalblog'] = 'Externen Blog bearbeiten';
$string['emptybody'] = 'Der Eingabetext darf nicht leer sein';
$string['emptyrssfeed'] = 'Die URL zeigt nicht auf einen gültigen RSS Feed';
$string['emptytitle'] = 'Der Titel darf nicht leer sein';
$string['emptyurl'] = 'Sie müssen eine URL zu einem RSS Feed angeben';
$string['entrybody'] = 'Eingabetext';
$string['entrybodyonlydesc'] = 'Beschreibung';
$string['entryerrornotyours'] = 'Dies ist kein eigener Beitrag';
$string['entrysaved'] = 'Beitrag wurde gespeichert';
$string['entrytitle'] = 'Titel';
$string['eventblogassociationadded'] = 'Blogverknüpfung angelegt';
$string['eventblogassociationdeleted'] = 'Blogverbindung gelöscht';
$string['eventblogentriesviewed'] = 'Blogeinträge angezeigt';
$string['eventblogexternaladded'] = 'Externer Blog verbunden';
$string['eventblogexternalremoved'] = 'Externer Blog unverbunden';
$string['eventblogexternalupdated'] = 'Externer Blog aktualisiert';
$string['evententryadded'] = 'Blogeintrag hinzugefügt';
$string['evententrydeleted'] = 'Blogeintrag gelöscht';
$string['evententryupdated'] = 'Beitrag aktualisiert';
$string['eventexternalblogsviewed'] = 'Extern verbundene Blogs angezeigt';
$string['externalblogcrontime'] = 'Cronjob für externe Blogs';
$string['externalblogdeleteconfirm'] = 'Diesen externen Blog abmelden?';
$string['externalblogdeleted'] = 'Externer Blog ist nicht registriert';
$string['externalblogs'] = 'Externe Blogs';
$string['feedisinvalid'] = 'RSS Feed ist nicht gültig';
$string['feedisvalid'] = 'RSS Feed ist gültig';
$string['filterblogsby'] = 'Filtereinträge von ...';
$string['filtertags'] = 'Externe Tags';
$string['filtertags_help'] = 'Mit dieser Option können Sie die Beiträge filtern. Wenn Sie hierbei Tags angeben (getrennt durch Kommas), werden ausschließlich Beiträge mit diesen Tags vom externen Blog kopiert.';
$string['groupblog'] = 'Gruppenblog: {$a}';
$string['groupblogdisable'] = 'Gruppenblogs sind nicht aktiviert';
$string['groupblogentries'] = 'Blogeinträge mit \'{$a->coursename}\' und Gruppe \'{$a->groupname}\' verbunden';
$string['groupblogs'] = 'Blogs von anderen in einer Gruppe';
$string['incorrectblogfilter'] = 'Falscher Blogfilter ausgewählt';
$string['intro'] = 'Der RSS Feed wurde automatisch von einem oder mehreren Blogs erstellt.';
$string['invalidgroupid'] = 'Ungültige Gruppen-ID';
$string['invalidurl'] = 'URL ist nicht erreichbar';
$string['linktooriginalentry'] = 'Zum ursprünglichen Blogeintrag verlinken';
$string['maxexternalblogsperuser'] = 'Maximale Anzahl externer Blogs pro Nutzer/in';
$string['myprofileuserblogs'] = 'Alle Blogbeiträge anzeigen';
$string['name'] = 'Name';
$string['name_help'] = 'Geben Sie einen beschreibenden Namen für Ihren externen Blog an. Falls kein Name eingetragen ist, wird der Titel des externen Blogs benutzt.';
$string['noentriesyet'] = 'Keine sichtbaren Beiträge';
$string['noguestpost'] = 'Gäste dürfen keine Blogeinträge schreiben.';
$string['nopermissionstodeleteentry'] = 'Sie haben nicht die erforderliche Rechte zum Löschen dieses Blogeintrags';
$string['norighttodeletetag'] = 'Sie dürfen diesen Tag nicht löschen: {$a}';
$string['nosuchentry'] = 'Kein solcher Blogeintrag vorhanden';
$string['notallowedtoedit'] = 'Sie haben nicht das Recht, diesen Beitrag zu bearbeiten.';
$string['numberofentries'] = 'Einträge: {$a}';
$string['numberoftags'] = 'Zahl der angezeigten Tags';
$string['page-blog-edit'] = 'Blogbearbeitungsseiten';
$string['page-blog-index'] = 'Bloganzeigeseiten';
$string['page-blog-x'] = 'Jede Blogseite';
$string['pagesize'] = 'Zahl der Blogeinträge pro Seite';
$string['permalink'] = 'Dauerlink';
$string['personalblogs'] = 'Nach Anmeldung nur eigener Blog sichtbar';
$string['preferences'] = 'Blogeinstellungen';
$string['privacy:metadata:core_comments'] = 'Kommentare, bezogen auf Blogbeiträge';
$string['privacy:metadata:core_files'] = 'Dateien, angehängt an Blogbeiträge';
$string['privacy:metadata:core_tag'] = 'Tags, bezogen auf Blogbeiträge';
$string['privacy:metadata:external'] = 'Link zu einem externen RSS-Feed';
$string['privacy:metadata:external:description'] = 'Beschreibung des RSS-Feeds';
$string['privacy:metadata:external:filtertags'] = 'Liste von Tags, um Blogbeiträge zu filtern';
$string['privacy:metadata:external:name'] = 'Name des RSS-Feeds';
$string['privacy:metadata:external:timefetched'] = 'Datum, an dem der RSS-Feed zuletzt abgerufen wurde';
$string['privacy:metadata:external:timemodified'] = 'Datum, an dem der Verbund zuletzt geändert wurde';
$string['privacy:metadata:external:url'] = 'URL des RSS-Feeds';
$string['privacy:metadata:external:userid'] = 'Nutzer-ID, von dem der externe Blogbeitrag hinzugefügt wurde';
$string['privacy:metadata:post'] = 'Informationen, bezogen auf Blogbeiträge';
$string['privacy:metadata:post:content'] = 'Inhalt eines externen Blogbeitrags';
$string['privacy:metadata:post:created'] = 'Datum, an dem der Blogbeitrag erstellt wurde';
$string['privacy:metadata:post:lastmodified'] = 'Datum, an dem der Blogbeitrag zuletzt geändert wurde';
$string['privacy:metadata:post:publishstate'] = 'Sichtbarkeit des Blogbeitrags für andere';
$string['privacy:metadata:post:subject'] = 'Titel des Blogbeitrags';
$string['privacy:metadata:post:summary'] = 'Blogbeitrag';
$string['privacy:metadata:post:uniquehash'] = 'Eindeutige ID für einen externen Blogbeitrag, normalerweise eine URL';
$string['privacy:metadata:post:userid'] = 'Nutzer-ID von dem der Blogbeitrag hinzugefügt wurde';
$string['privacy:metadata:post:usermodified'] = 'Nutzer-ID, mit der der Blogbeitrag zuletzt geändert';
$string['privacy:path:blogassociations'] = 'In Verbindung stehende Blogbeiträge';
$string['privacy:unknown'] = 'Unbekannt';
$string['publishto'] = 'Veröffentlichen für';
$string['publishtocourse'] = 'Mitglieder in gemeinsamen Kursen';
$string['publishtocourseassoc'] = 'Mitglieder des verbundenen Kurses';
$string['publishtocourseassocparam'] = 'Mitglieder von {$a}';
$string['publishtogroup'] = 'Mitglieder in gemeinsamer Gruppe';
$string['publishtogroupassoc'] = 'Mitglieder in gemeinsamer Gruppe im verbundenen Kurs';
$string['publishtogroupassocparam'] = 'Mitglieder in gemeinsamer Gruppe in {$a}';
$string['publishto_help'] = 'Es gibt 3 Optionen für Blogveröffentlichungen:

* Persönlich - Nur Sie und die Administration können diesen Beitrag lesen
* Alle auf dieser Website - Alle auf dieser Website registrieren Personen können den Beitrag lesen
* Weltweit öffentlich - Alle können den Beitrag lesen (auch Gäste und Suchmaschinen)';
$string['publishtonoone'] = 'Persönlich';
$string['publishtosite'] = 'Alle auf dieser Website';
$string['publishtoworld'] = 'Weltweit öffentlich';
$string['readfirst'] = 'Bitte lesen';
$string['relatedblogentries'] = 'Ähnliche Blogeinträge';
$string['retrievedfrom'] = 'Wiederhergestellt von';
$string['rssfeed'] = 'RSS Feed für diesen Blog';
$string['searchterm'] = 'Suche: {$a}';
$string['settingsupdatederror'] = 'Fehler: Die Blogeinstellungen konnten nicht aktualisiert werden.';
$string['siteblogdisable'] = 'Website-Blogs wurden nicht aktiviert';
$string['siteblogheading'] = 'Website-Blog';
$string['siteblogs'] = 'Nach Anmeldung auf der Website sichtbar';
$string['tagdatelastused'] = 'Letzte Nutzung des Tags';
$string['tagparam'] = 'Tag: {$a}';
$string['tags'] = 'Tags';
$string['tagsort'] = 'Tags sortieren nach';
$string['tagtext'] = 'Tag-Text';
$string['timefetched'] = 'Letzte Synchronisation';
$string['timewithin'] = 'Tags anzeigen, die in dieser Zeit verwendet wurden';
$string['updateentrywithid'] = 'Eintrag aktualisieren';
$string['url'] = 'URL für RSS Feed';
$string['url_help'] = 'Geben Sie die URL zum RSS Feed des externen Blogs an.';
$string['useblogassociations'] = 'Blogverbindungen erlauben';
$string['useexternalblogs'] = 'Externe Blogs erlauben';
$string['userblog'] = 'Nutzerblog: {$a}';
$string['userblogentries'] = 'Blogeinträge von {$a}';
$string['valid'] = 'Gültig';
$string['viewallblogentries'] = 'Alle Beiträge zu {$a}';
$string['viewallmodentries'] = 'Alle Beiträge zu {$a->type}';
$string['viewallmyentries'] = 'Meine Beiträge';
$string['viewblogentries'] = 'Beiträge zu {$a->type}';
$string['viewblogsfor'] = 'Alle Beiträge zu ...';
$string['viewcourseblogs'] = 'Alle Beiträge zum Kurs';
$string['viewentriesbyuseraboutcourse'] = 'Beiträge zum Kurs von {$a}';
$string['viewgroupblogs'] = 'Alle Beiträge für Gruppe ...';
$string['viewgroupentries'] = 'Gruppenbeiträge';
$string['viewmodblogs'] = 'Alle Beiträge zu ...';
$string['viewmodentries'] = 'Modulbeiträge';
$string['viewmyentries'] = 'Meine Beiträge';
$string['viewmyentriesaboutcourse'] = 'Meine Beiträge zum Kurs';
$string['viewmyentriesaboutmodule'] = 'Meine Beiträge zu {$a}';
$string['viewsiteentries'] = 'Alle Beiträge';
$string['viewuserentries'] = 'Alle Beiträge von {$a}';
$string['worldblogs'] = 'Ohne Anmeldung weltweit für alle sichtbar';
$string['wrongexternalid'] = 'Falsche externe Blog-ID';
$string['wrongpostid'] = 'Falsche Blogeintrag-ID';
