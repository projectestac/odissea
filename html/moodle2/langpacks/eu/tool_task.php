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
 * Strings for component 'tool_task', language 'eu', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_task
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'Ahal bezain laster (ASAP)';
$string['backtoscheduledtasks'] = 'Itzuli programatutako zereginetara';
$string['blocking'] = 'Blokeoak';
$string['component'] = 'Osagaia';
$string['corecomponent'] = 'Sistema';
$string['default'] = 'Lehenetsitakoa';
$string['disabled'] = 'Desgaituta';
$string['disabled_help'] = 'Desgaitutako programatutako zereginak ez dira cron-ean exekutatzen, baina CLI erremintaren bitartez exekutatzen jarrai daiteke.';
$string['edittaskschedule'] = 'Editatu zereginaren programazioa: {$a}';
$string['enablerunnow'] = 'Baimendu \'Exekutatu orain\' programatutako zereginetarako';
$string['enablerunnow_desc'] = 'Baimendu kudeatzaileek zeregin bat edozein unetan exekutatzea, programatutako unean exekutatu arte itxaron behar izan beharrean. Zeregina web-zerbitzarian exekutatzen da, eta beraz kasu batzuetan funtzionalitate hau desgaitu nahiko duzu errendimendu arazo potentzialak ekiditeko.';
$string['faildelay'] = 'Huts egitearen ondoriozko atzerapena';
$string['lastruntime'] = 'Azken exekuzioa';
$string['nextruntime'] = 'Hurrengo exekuzioa';
$string['plugindisabled'] = 'Plugina desgaituta dago';
$string['pluginname'] = 'Programatutako zereginen ezarpenak';
$string['privacy:metadata'] = 'Programatutako zereginen ezarpenak pluginak ez du datu pertsonalik biltzen.';
$string['resettasktodefaults'] = 'Berrabiarazi programatutako zeregina lehenetsitako balioetara';
$string['resettasktodefaults_help'] = 'Honek lokalki egindako edozein aldaketa baztertu eta zeregin honen programazioa bere jatorrizko balioetara itzuliko du.';
$string['runnow'] = 'Exekutatu orain';
$string['runnow_confirm'] = 'Ziur zaude \'{$a}\' zeregina orain exekutatu nahi duzula? Zeregina web-zerbitzarian exekutatuko da eta denbora bat eman dezake osatu arte.';
$string['scheduledtaskchangesdisabled'] = 'Moodle-ko konfigurazioan programatutako zereginen zerrendari aldaketak egitea ekidin da.';
$string['scheduledtasks'] = 'Programatutako zereginak';
$string['taskdisabled'] = 'Ataza desgaituta';
$string['taskscheduleday'] = 'Eguna';
$string['taskscheduleday_help'] = 'Programatutako zereginerako hileko egunentzako eremua. Eremuak unix cron-aren formau bera erabiltzen du. Hauek dira adibide batzuk:
<br/>
<ul>
<li><strong>*</strong> Egunero</li>
<li><strong>*/2</strong> Bi egunean behin</li>
<li><strong>1</strong> Hileko lehen egunean</li>
<li><strong>1,15</strong> Hileko lehen eta 15. egunean</li>
</ul>';
$string['taskscheduledayofweek'] = 'Asteko eguna';
$string['taskscheduledayofweek_help'] = 'Programatutako zereginerako asteko egunentzako eremua. Eremuak unix cron-aren formau bera erabiltzen du. Hauek dira adibide batzuk:
<br/>
<ul>
<li><strong>*</strong> Egunero</li>
<li><strong>0</strong> Igandero</li>
<li><strong>6</strong> Larunbatero</li>
<li><strong>1,5</strong> Astelehen eta ostiralero</li>
</ul>';
$string['taskschedulehour'] = 'Ordua';
$string['taskschedulehour_help'] = 'Programatutako zereginerako orduentzako eremua. Eremuak unix cron-aren formau bera erabiltzen du. Hauek dira adibide batzuk:
<br/>
<ul>
<li><strong>*</strong> Orduro</li>
<li><strong>*/2</strong> Bi orduan behin</li>
<li><strong>2-10</strong> Orduro 2:00etatik 10:00ak bitartean (biak barne)</li>
<li><strong>2,6,9</strong> 2:00etan, 06:00etan eta 9:00etan</li>
</ul>';
$string['taskscheduleminute'] = 'Minutua';
$string['taskscheduleminute_help'] = 'Programatutako zereginerako minutuentzako eremua. Eremuak unix cron-aren formau bera erabiltzen du. Hauek dira adibide batzuk:
<br/>
<ul>
<li><strong>*</strong> Minuturo</li>
<li><strong>*/5</strong> 5 minutuan behin</li>
<li><strong>2-10</strong> Minuturo orduko 2. eta 10. minutuaren artean (biak barne)</li>
<li><strong>2,6,9</strong> Orduko 2. miinutuan, 6. minutuan eta 9. minutuan</li>
</ul>';
$string['taskschedulemonth'] = 'Hilabetea';
$string['taskschedulemonth_help'] = 'Programatutako zereginerako hilabeteentzako eremua. Eremuak unix cron-aren formau bera erabiltzen du. Hauek dira adibide batzuk:
<br/>
<ul>
<li><strong>*</strong> Hilabetero</li>
<li><strong>*/2</strong> Bi hilean behin</li>
<li><strong>1</strong> Urtarrila guztietan</li>
<li><strong>1,5</strong> Urtarrilean eta maiatza guztietan</li>
</ul>';
