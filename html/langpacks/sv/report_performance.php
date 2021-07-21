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
 * Strings for component 'report_performance', language 'sv', version '3.11'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'Automatisk säkerhetskopiering';
$string['check_backup_comment_disable'] = 'Prestanda kan påverkas under säkerhetskopieringsprocessen. Säkerhetskopieringar bör schemaläggas att köra under mindre intensiva tider.';
$string['check_backup_comment_enable'] = 'Prestanda kan påverkas under säkerhetskopieringsprocessen. Säkerhetskopieringar bör schemaläggas att köra under mindre intensiva tider.';
$string['check_backup_details'] = 'Om automatiserad säkerhetskopiering aktiveras kommer säkerhetskopiering av alla kurser på servern göras vid den tidpunkt du angav. <p>Under den här processen kommer den att förbruka fler serverresurser och det kan påverka prestandan.</p>';
$string['check_cachejs_comment_disable'] = 'Om aktiverad kan detta öka prestandan vid sidladdning.';
$string['check_cachejs_comment_enable'] = 'Om inaktiverad kan det hända att sidor laddas långsamt.';
$string['check_cachejs_details'] = 'Javascript-cachelagring och komprimering förbättrar sidinläsningen avsevärt. Det rekommenderas starkt för produktionsplatser.';
$string['check_debugmsg_comment_developer'] = 'Om satt till ett annat värde än DEVELOPER kan prestandan förbättras en aning.';
$string['check_debugmsg_comment_nodeveloper'] = 'Om satt till DEVELOPER kan prestandan påverkas en aning.';
$string['check_debugmsg_details'] = 'Det finns sällan någon fördel i att gå över till Developer-läge, om det inte efterfrågats av en utvecklare. <p>När du väl du har fått felmeddelandet, och kopierat och klistrat in det någonstans, är det STARKT REKOMMENDERAT att ställa tillbaka Debug till NONE. Felsökningsmeddelanden kan avslöja ledtrådar till en hackare om installationen av din webbplats och kan påverka prestandan.</p>';
$string['check_enablestats_comment_disable'] = 'Prestanda kan påverkas av statistikbearbetningar. Om aktiverad bör statistikinställningar anges med försiktighet.';
$string['check_enablestats_comment_enable'] = 'Prestanda kan påverkas av statistikbearbetning. Statistikinställningar bör ställas in med försiktighet.';
$string['check_enablestats_details'] = 'Om detta aktiverad kommer loggarna bearbetas av cron och samla in statistik. Beroende på mängden trafik på din webbplats kan detta ta en stund. <p>Under den här processen kommer den att förbruka fler serverresurser och det kan påverka prestandan.</p>';
$string['check_themedesignermode_comment_disable'] = 'Om det är aktiverat kommer bilder och formatmallar inte att cachelagras vilket resulterar i betydande prestandaförsämring.';
$string['check_themedesignermode_comment_enable'] = 'Om det är inaktiverat cachelagras bilder och formatmallar vilket ger betydande prestandaförbättringar.';
$string['check_themedesignermode_details'] = 'Detta är ofta orsaken till långsamma Moodle-webbplatser. <p>I genomsnitt kan det ta minst dubbelt så mycket CPU att köra en Moodle-webbplats med temadesignerläget aktiverat.</p>';
$string['comments'] = 'Kommentarer';
$string['disabled'] = 'Inaktiverad';
$string['edit'] = 'Redigera';
$string['enabled'] = 'Aktiverad';
$string['issue'] = 'Problem';
$string['morehelp'] = 'ytterligare hjälp';
$string['performance:view'] = 'Visa prestandarapport';
$string['performancereportdesc'] = 'Rapporten listar problem som kan påverka prestandan hos webbplatsen {$a}';
$string['pluginname'] = 'Prestandaöversikt';
$string['privacy:metadata'] = 'Plugin-modulen Prestandaöversikt lagrar ingen personlig information.';
$string['value'] = 'Värde';
