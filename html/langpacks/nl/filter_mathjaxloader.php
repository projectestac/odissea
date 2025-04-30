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
 * Strings for component 'filter_mathjaxloader', language 'nl', version '4.4'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'Extra vergelijking scheidingstekens';
$string['additionaldelimiters_help'] = 'MathJax filter ontleedt tekst voor vergelijkingen opgenomen tussen scheidingstekens. De lijst van erkende scheidingstekens kan hier worden toegevoegd (bijv. AsciiMath gebruikt `). Er kunnen meerdere tekens gebruikt worden, ze kunnen met komma\'s worden gescheiden.';
$string['filtername'] = 'MathJax';
$string['httpsurl'] = 'MathJax URL';
$string['httpsurl_help'] = 'Volledige URL naar MathJax-bibliotheek.';
$string['localinstall'] = 'Lokale MathJax-installatie';
$string['localinstall_help'] = 'De standaard MathJax-configuratie gebruikt de CDN versie van MathJax, maar MathJax kan lokaal worden geïnstalleerd indien nodig.

Dit kan nuttig zijn om bandbreedte te besparen of vanwege lokale proxy- beperkingen.

Om een lokale installatie van MathJax te gebruiken, download je eerst de volledige MathJax bibliotheek https://www.mathjax.org/. Vervolgens installeer je ze op een webserver. Pas dan de MathJax filterinstellingen httpurl en / of httpsurl aan om te verwijzen naar de lokale MathJax.js-URL.';
$string['mathjaxsettings'] = 'MathJax-configuratie';
$string['mathjaxsettings_desc'] = 'De standaard MathJax-configuratie zou goed moeten zijn voor de meeste gebruikers, maar MathJax kan verregaand geconfigureerd worden. Veel van de standaard MathJax configuratie-opties kunnen hier toegevoegd worden.';
$string['privacy:metadata'] = 'De Matjaxplugin bewaart geen persoonlijke gegevens.';
$string['texfiltercompatibility'] = 'TeX-filtercompatibiliteit';
$string['texfiltercompatibility_help'] = 'De MathJax filter kan gebruikt worden als vervanging van de TeX filter.

Om alle scheidingstekens die door de TeX-filter ondersteund worden te kunnen weergeven, zal MathJax geconfigureerd worden om alle vergelijkingen "inline" te tonen met de tekst.';
