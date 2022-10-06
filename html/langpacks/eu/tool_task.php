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
 * Strings for component 'tool_task', language 'eu', version '3.8'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'Ahal bezain laster (ASAP)';
$string['backtoscheduledtasks'] = 'Itzuli programatutako atazetara';
$string['blocking'] = 'Blokeoak';
$string['cannotfindthepathtothecli'] = 'Ez da aurkitu PHP CLI exekutagarriaren bidea eta ondorioz atazaren exekuzioa bertan behera utzi da. Zehaztu \'PHP CLIrako bidea\' ezarpena Gunearen kudeaketa / Zerbitzaria / Sistemaren bideak atalean.';
$string['clearfaildelay_confirm'] = 'Ziur zaude \'{$a}\' atazaren huts egitearen ondoriozko atzerapena garbitu nahi duzula?';
$string['component'] = 'Osagaia';
$string['corecomponent'] = 'Sistema';
$string['default'] = 'Lehenetsitakoa';
$string['disabled'] = 'Desgaituta';
$string['disabled_help'] = 'Desgaitutako programatutako atazak ez dira cron-ean exekutatzen, baina CLI erremintaren bitartez exekutatzen jarrai daiteke.';
$string['edittaskschedule'] = 'Editatu atazaren programazioa: {$a}';
$string['enablerunnow'] = 'Baimendu \'Exekutatu orain\' programatutako atazetarako';
$string['enablerunnow_desc'] = 'Baimendu kudeatzaileek ataza bat edozein unetan exekutatzea, programatutako unean exekutatu arte itxaron behar izan beharrean. Funtzio honek Sistemaren bideak ataleko \'PHP CLIrako bidea\' (pathtophp) ezarpena zehaztuta egotea behar du. Ataza web-zerbitzarian exekutatzen da, eta hori dela eta agian funtzionalitate hau desgaitu nahiko duzu errendimendu arazo potentzialak ekiditeko.';
$string['faildelay'] = 'Huts egitearen ondoriozko atzerapena';
$string['lastruntime'] = 'Azken exekuzioa';
$string['nextruntime'] = 'Hurrengo exekuzioa';
$string['plugindisabled'] = 'Plugina desgaituta dago';
$string['pluginname'] = 'Programatutako zereginen ezarpenak';
$string['privacy:metadata'] = 'Programatutako zereginen ezarpenak pluginak ez du datu pertsonalik biltzen.';
$string['resettasktodefaults'] = 'Berrabiarazi programatutako ataza lehenetsitako balioetara';
$string['resettasktodefaults_help'] = 'Honek lokalki egindako edozein aldaketa baztertu eta ataza honen programazioa bere jatorrizko balioetara itzuliko du.';
$string['runnow'] = 'Exekutatu orain';
$string['runnow_confirm'] = 'Ziur zaude \'{$a}\' ataza orain exekutatu nahi duzula? Ataza web-zerbitzarian exekutatuko da eta denbora bat eman dezake osatu arte.';
$string['runpattern'] = 'Exekuzio-patroia';
$string['scheduledtaskchangesdisabled'] = 'Moodleko konfigurazioan programatutako atazen zerrendari aldaketak egitea ekidin da.';
$string['scheduledtasks'] = 'Programatutako zereginak';
$string['taskdisabled'] = 'Ataza desgaituta';
$string['tasklogs'] = 'Atazen erregistroak';
$string['taskscheduleday'] = 'Eguna';
$string['taskscheduleday_help'] = 'Programatutako atazetarako hileko egunentzako eremua. Eremuak unix cron-aren formatu bera erabiltzen du. Hauek dira adibide batzuk:

* <strong>*</strong> Egunero
* <strong>*</strong> Bi egunean behin
* <strong>*</strong> Hileko lehen egunean
* <strong>*</strong> Hileko lehen eta 15. egunean';
$string['taskscheduledayofweek'] = 'Asteko eguna';
$string['taskscheduledayofweek_help'] = 'Programatutako zereginerako asteko egunentzako eremua. Eremuak unix cron-aren formau bera erabiltzen du. Hauek dira adibide batzuk:

<strong>*</strong> Egunero
<strong>0</strong> Igandero
<strong>6</strong> Larunbatero
<strong>1,5</strong> Astelehen eta ostiralero';
$string['taskschedulehour'] = 'Ordua';
$string['taskschedulehour_help'] = 'Programatutako zereginerako orduentzako eremua. Eremuak unix cron-aren formau bera erabiltzen du. Hauek dira adibide batzuk:

<strong>*</strong> Orduro
<strong>*/2</strong> Bi orduan behin
<strong>2-10</strong> Orduro 2:00etatik 10:00ak bitartean (biak barne)
<strong>2,6,9</strong> 2:00etan, 06:00etan eta 9:00etan';
$string['taskscheduleminute'] = 'Minutua';
$string['taskscheduleminute_help'] = 'Programatutako zereginerako minutuentzako eremua. Eremuak unix cron-aren formau bera erabiltzen du. Hauek dira adibide batzuk:

<strong>*</strong> Minuturo
<strong>*/5</strong> 5 minutuan behin
<strong>2-10</strong> Minuturo orduko 2. eta 10. minutuaren artean (biak barne)
<strong>2,6,9</strong> Orduko 2. miinutuan, 6. minutuan eta 9. minutuan';
$string['taskschedulemonth'] = 'Hilabetea';
$string['taskschedulemonth_help'] = 'Programatutako zereginerako hilabeteentzako eremua. Eremuak unix cron-aren formau bera erabiltzen du. Hauek dira adibide batzuk:

<strong>*</strong> Hilabetero
<strong>*/2</strong> Bi hilean behin
<strong>1</strong> Urtarrila guztietan
<strong>1,5</strong> Urtarrilean eta maiatza guztietan';
$string['viewlogs'] = 'Ikusi {$a}(e)rako erregistroak';
