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
 * Strings for component 'repository_googledocs', language 'nl', branch 'MOODLE_34_STABLE'
 *
 * @package   repository_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Intern en extern';
$string['cachedef_folder'] = 'Google bestand ID\'s voor mappen in de systeemaccount';
$string['clientid'] = 'Client ID';
$string['configplugin'] = 'Configuratie Google Drive plugin';
$string['defaultreturntype'] = 'Standaard teruggegeven type';
$string['docsformat'] = 'Standaard importeerformaat van documenten';
$string['drawingformat'] = 'Standaard importeerformaat van tekeningen';
$string['external'] = 'Extern (enkel links worden bewaard in Moodle)';
$string['fileoptions'] = 'De types en standaarden voor teruggegeven bestanden zijn hier configureerbaar. Merk op dat alle extern gelinkte bestanden aangepast zullen worden zodat de eigenaar de Moodle systeemaccount is.';
$string['googledocs:view'] = 'Bekijk Google Drive opslagruimte';
$string['importformat'] = 'Configureer de standaard importformaten van Google';
$string['internal'] = 'Intern (bestanden bewaard in Moodle)';
$string['issuer'] = 'OAuth 2 service';
$string['issuer_help'] = 'Selecteer de OAuth 2 service die geconfigureerd is om met de Google Drive API te communiceren. Als de service niet bestaat, dan zul je die moeten maken.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link naar OAuth 2 service configuratie">OAuth 2 service configuratie</a>';
$string['oauthinfo'] = '<p>Om deze plugin te kunnen gebruiken, moet je je site registreren bij Google, zoals beschreven in de documentatie op <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p>Als deel van het registratieproces, zul je volgende URL\'s als \'Authorized Redirect URL\'s moeten ingeven:</p><p>{$a->callbackurl}</p>Als je geregistreerd bent, dan krijg je een clientID en geheim, die gebruikt kunnen worden om alle Google Drive en Picasa plugins te configureren.</p><p>Merk op dat je ook de service \'Drive api\' moet inschakelen\'.</p>';
$string['owner'] = 'Eigenaar:  {$a}';
$string['pluginname'] = 'Google Drive';
$string['presentationformat'] = 'Standaard importformaat presentaties';
$string['privacy:metadata:repository_googledocs'] = 'De Google Drive opslagruimte-plugin bewaart geen persoonlijke gegevens, maar stuurt deze door van Moodle naar het externe systeem.';
$string['privacy:metadata:repository_googledocs:email'] = 'Het e-mailadres van de gebruiker van de Google drive opslagruimte.';
$string['privacy:metadata:repository_googledocs:searchtext'] = 'De zoektekst van de gebruiker van de Google drive opslagruimte.';
$string['searchfor'] = 'Zoek naar  {$a}';
$string['secret'] = 'Geheim';
$string['servicenotenabled'] = 'Toegang niet geconfigureerd. Zorg ervoor dat de service \'Drive API\' ingeschakeld is.';
$string['spreadsheetformat'] = 'Standaard importformaat rekenblad';
$string['supportedreturntypes'] = 'Ondersteunde bestanden';
