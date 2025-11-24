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
 * Strings for component 'antivirus_clamav', language 'lt', version '4.5'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'Šiuo metu yra antivirusinės programos nuskaitymo problema. Jūsų failas {$a->item} nebuvo įkeltas. Pabandykite dar kartą vėliau.';
$string['clamfailed'] = 'Nepavyko vykdyti „ClamAV“. Pateiktas klaidos pranešimas {$a}. „Clam“ išvestis:';
$string['clamfailureonupload'] = 'Dėl ClamAV gedimo';
$string['configclamactlikevirus'] = 'Elkitės su failais kaip su virusais';
$string['configclamdonothing'] = 'Failus traktuoti kaip GERAI';
$string['configclamfailureonupload'] = 'Jei pasirinkta „Failus traktuoti kaip GERAI“, failai bus perkelti į paskirties katalogą. Jei pasirinkta „Atmesti įkėlimą, bandyti dar kartą“, naudotojas bus paragintas bandyti dar kartą vėliau. Jei pasirinkta „Traktuoti failus kaip virusus“, failai bus perkelti į karantino sritį arba ištrinti. Įspėjimas: naudojant šią parinktį, jei dėl kokių nors priežasčių clam nepavyksta paleisti (dažniausiai dėl netinkamo pathtoclam), VISI įkelti failai bus perkelti į nurodytą karantino sritį arba ištrinti.';
$string['configclamtryagain'] = 'Atsisakyti įkėlimo, bandyti dar kartą';
$string['errorcantopensocket'] = 'Jungiantis prie Unix domeno lizdo įvyko klaida {$a}';
$string['errorclamavnoresponse'] = 'ClamAV neatsako; patikrinkite daemon veikimo būseną.';
$string['errornounixsocketssupported'] = 'Unix domeno lizdo perdavimas šioje sistemoje nepalaikomas. Vietoj to naudokite komandinės eilutės parinktį.';
$string['invalidpathtoclam'] = '„Moodle“ sukonfigūruota vykdyti antivirusinę programą įkeliant failus, bet „ClamAV“ pateiktas netinkamas kelias {$a}.';
$string['pathtoclam'] = 'Komandinė eilutė';
$string['pathtoclamdesc'] = 'Jei paleidimo metodas nustatytas kaip „komandų eilutė“, čia įveskite kelią į ClamAV. Linux sistemoje tai bus /usr/bin/clamscan arba /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Unix domeno lizdas';
$string['pathtounixsocketdesc'] = 'Jei veikimo metodas nustatytas kaip „Unix domeno lizdas“, įveskite kelią į ClamAV Unix socket čia. „Debian Linux“ sistemoje tai bus /var/run/clamav/clamd.ctl. Įsitikinkite, kad "clamav daemon" turi skaitymo prieigą prie įkeltų failų. Lengviausias būdas tai užtikrinti yra įtraukti \'clamav\' vartotoją į savo žiniatinklio serverių grupę ("www-data" Debian Linux).';
$string['pluginname'] = 'ClamAV antivirusinė programa';
$string['privacy:metadata'] = '„ClamAV“ antivirusinės papildinys nesaugo jokių asmeninių duomenų.';
$string['quarantinedir'] = 'Karantino aplankas';
$string['runningmethod'] = 'Veikimo metodas';
$string['runningmethodcommandline'] = 'Komandinė eilutė';
$string['runningmethoddesc'] = 'ClamAV paleidimo būdas. Komandų eilutė naudojama pagal numatytuosius nustatymus, tačiau Unix sistemose geresnį našumą galima pasiekti naudojant sistemos lizdus.';
$string['runningmethodtcpsocket'] = 'TCP lizdas';
$string['runningmethodunixsocket'] = 'Unix domeno lizdas';
$string['tcpsockethost'] = 'TCP lizdo prieglobos pavadinimas';
$string['tcpsockethostdesc'] = 'ClamAV serverio domeno pavadinimas';
$string['tcpsocketport'] = 'TCP lizdo prievadas';
$string['tcpsocketportdesc'] = 'Prievadas, naudojamas jungiantis prie ClamAV';
$string['tries'] = 'Nuskaitymo bandymai';
$string['tries_desc'] = 'ClamAV bandymų skaičius, jei nuskaitymo proceso metu įvyko klaida.';
$string['tries_notice'] = 'Clamavo nuskaitymas buvo išbandytas {$a->tries} kart.
{$a->notice}';
$string['unknownerror'] = 'Įvyko nežinoma antivirusinės programos klaida.';
