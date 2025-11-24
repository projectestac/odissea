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
 * Strings for component 'portfolio_mahara', language 'sv', version '4.5'.
 *
 * @package     portfolio_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Aktivera Leap2A-portföljstöd (kräver Mahara 1.3 eller senare)';
$string['err_invalidhost'] = 'Ogiltig MNet-värd';
$string['err_invalidhost_help'] = '';
$string['err_networkingoff'] = 'MNet är avstängt';
$string['err_networkingoff_help'] = 'MNet-autentisering är för närvarande inaktiverat. Aktivera det innan du försöker konfigurera den här pluginmodulen. Alla instanser av denna plugin har dolts tills MNet är aktiverat. De måste sedan ställas in manuellt för att synas igen.';
$string['err_nomnetauth'] = 'Autentiseringsmodulen MNet är du inaktiverad';
$string['err_nomnetauth_help'] = 'MNet-autentiseringspluginmodulen är inaktiverad, men krävs för den här tjänsten';
$string['err_nomnethosts'] = 'Beror på MNet';
$string['err_nomnethosts_help'] = 'Denna pluginmodul förlitar sig på MNet-peers med SSO IDP publicerad, SSO SP prenumererad, portföljtjänster publicerade <b>och</b> prenumererade samt MNet-autentiseringspluginmodulen. Alla instanser av denna pluginmodul har dolts tills dessa villkor är uppfyllda. De behöver sedan manuellt ställa in dem för att synas igen.';
$string['failedtojump'] = 'Det gick inte att få igång någon kommunikation med distansservern';
$string['failedtoping'] = 'Det gick inte att få igång någon kommunikation med distansservern: {$a}';
$string['mnet_nofile'] = 'Hittade ingen fil i överföringsobjektet - märkligt fel.';
$string['mnet_nofilecontents'] = 'Hittade filen i överföringsobjektet men kunde inte hämta dess innehåll - märkligt fel: {$a}';
$string['mnet_noid'] = 'Det gick inte att hitta den matchande överföringsposten för detta token';
$string['mnet_notoken'] = 'Kunde inte hitta ett matchande token för denna överföring';
$string['mnet_wronghost'] = 'Fjärrvärden matchade inte överföringsposten för detta token';
$string['mnethost'] = 'MNet-värd';
$string['pf_description'] = 'Tillåt användare att pusha Moodle-innehåll till denna värd<br />Prenumerera på <b>och</b> Publicera den här tjänsten för att tillåta autentiserade användare på din webbplats att pusha innehåll till {$a}<br /><ul><li><em>Beroende</em>: Du måste också <strong>publicera</strong> SSO-tjänsten till {$a}.</li><li><em>Beroende</em>: Du måste också <strong>prenumerera</strong> SSO-tjänsten på {$a}</li><li><em>Beroende</em>: Du måste också aktivera MNet-autentiseringsmodulen.</li></ul><br />';
$string['pf_name'] = 'Portfolio-tjänster';
$string['pluginname'] = 'Mahara ePortfolio';
$string['privacy:metadata'] = 'Denna pluginmodul skickar data externt till en länkad Mahara-applikation. Den lagrar inte data lokalt.';
$string['privacy:metadata:data'] = 'Personuppgifter som överförs från portföljens delsystem.';
$string['senddisallowed'] = 'Det går f n inte att överföra filer till Mahara';
$string['url'] = 'URL';
