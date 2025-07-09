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
 * Strings for component 'filter_embedquestion', language 'eu', version '4.4'.
 *
 * @package     filter_embedquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptoptions'] = 'Saiakeren aukerak';
$string['authorizedsecrets'] = 'Baimendutako sekretuak';
$string['authorizedsecrets_desc'] = 'Gehitu itzazu hemen beste zerbitzarietako sekretuak, errenkada bakoitzean bat, inportatutako galdera txertatuek ondo funtzionatu dezaten.<br/><br/>Zerbitzari honen sekretua <code>{$a}</code> da.';
$string['chooserandomly'] = 'Aukeratu ausaz txertatzeko galdera bat kategoria honetatik';
$string['corruptattempt'] = 'Hemengo galdera bateko zure aurreko saiakeraren funtzionamendua eten egin da. Jarraitzen baduzu aurreko saiakera ezabatu eta berri bat sortuko da.';
$string['corruptattemptwithreason'] = 'Hemengo galdera bateko zure aurreko saiakerak funtzionatzeari utzi dio. ({$a}) Jarraitu estekan klik eginez gero, aurreko saiakera ezabatu eta saiakera berri bat sortuko da.';
$string['defaultsheading'] = 'Galderak txertatzeko lehenetsitako aukerak';
$string['defaultsheading_desc'] = 'Hauek dira txertatutako galderak erakutsi eta funtzionatzeko lehenetsitako aukerak. Balio hauek erabiliko dira galdera bat txertatzean aukeraren bat zehazten ez bada.';
$string['defaultx'] = 'Lehenetsitakoa ({$a})';
$string['displayoptions'] = 'Erakusteko aukerak';
$string['embedquestion'] = 'Galdera txertatua';
$string['errormaxmarknumber'] = 'Gehieneko kalifikazioa zenbakizkoa izan behar da.';
$string['errornopermissions'] = 'Ez duzu galdera hau txertatzeko baimenik.';
$string['errorunknownquestion'] = 'Ezezaguna, edo partekatu ezin den galdera.';
$string['errorvariantformat'] = 'Zenbaki aldakorra zenbaki oso positiboa izan behar da.';
$string['errorvariantoutofrange'] = 'Zenbaki aldakorra gehienez {$a} den zenbaki oso positiboa izan behar da.';
$string['filtername'] = 'Galdera txertatuak';
$string['generalfeedback_desc'] = 'Modu lehenetsian galdera txertatuetan feedback orokorra erakutsi behar den edo ez.';
$string['howquestionbehaves'] = 'Galderaren jokaera';
$string['howquestionbehaves_desc'] = 'Galdera txertatuetan erabiltzeko jokaera lehenetsia';
$string['iframedescription'] = 'Iframe-aren deskribapena';
$string['iframedescription_help'] = 'Deskribapen honek orrian nabigatzeko pantaila-irakurleak erabiltzen dituztenei laguntzen die orri berean hainbat galdera txertatzen badituzu.
Irisgarritasuna hobetu egingo da txertatutako galdera bakoitza ezberdintzeko moduan deskribatzen badituzu. Kontuan izan sistemak automatikoki "Galdera txertatua [[n]]" gisa erakutsiko duela, non \'n\' sistemak automatikoki kalkulatutako zenbaki bat izango den.
Deskribapen-testuak gehienez 100 karaktere izan ditzake.';
$string['iframedescriptionmaxlengthwarning'] = 'Deskribapenak gehienez 100 karaktere izan ditzake.';
$string['iframedescriptionminlengthwarning'] = 'Deskribapenak gutxienez 3 karaktere izan behar ditu.';
$string['iframetitle'] = 'Galdera txertatua';
$string['iframetitleauto'] = 'Galdera txertatua {$a}';
$string['invalidcategory'] = '"{$a->contextname}" testuinguruan ez da "{$a->catid}" ID zenbakia duen kategoria existitzen.';
$string['invalidemptycategory'] = '"{$a->contextname}" testuinguruko "{$a->catname}" kategoriak ez dauka txertatu daitekeen galderarik.';
$string['invalidquestion'] = '"{$a->catname}" kategorian ez da "{$a->qid}" ID zenbakia duen galderarik existitzen [{$a->catidnumber}]".';
$string['invalidrandomquestion'] = 'Ezin da "{$a}" galdera-kategoriako ausazko galderarik sortu.';
$string['invalidtoken'] = 'Txertatutako galdera hau ez dago ondo konfiguratuta.';
$string['markdp_desc'] = 'Galdera txertatuen kalifikazioak erakustean erabili beharreko hamartar kopurua.';
$string['markedoutof'] = 'Honela puntuatu';
$string['marks_desc'] = 'Modu lehenetsian galdera txertatuetan kalifikazio numerikoa erakutsi behar den edo ez.';
$string['nameandcount'] = '{$a->name} ({$a->count})';
$string['nameandidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['nameidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->count})';
$string['noguests'] = 'Gonbidatuek ez dute galdera txertatuekin interakziorik izateko baimenik.';
$string['notyourattempt'] = 'Hau ez da zure saiakera.';
$string['pluginname'] = 'Galdera txertatuak';
$string['previousattempts'] = 'Aurretiko saiakerak';
$string['privacy:metadata'] = 'Galdera txertatuak iragazkiak ez du inolako datu pertsonalik biltzen.';
$string['questionbank'] = 'Galdera bankua';
$string['questionidnumber'] = 'Galderaren ID zenbakia';
$string['questionidnumberchanged'] = 'Hemen erantzuten saiatu den galderak dagoeneko ez dauka {$a} ID zenbakia.';
$string['questionnolongerhasidnumber'] = 'Hemen erantzuten saiatu den galderak dagoeneko ez dauka ID zenbakirik.';
$string['questionnolongerincategory'] = 'Hemen erantzuten saiatu den galdera dagoeneko ez dago {$a} ID zenbakia duen kategorian.';
$string['responsehistory_desc'] = 'Modu lehenetsian galdera txertatuen erantzunen historia-taula erakutsiko den edo ez.';
$string['restart'] = 'Hasi berriz';
$string['rightanswer_desc'] = 'Modu lehenetsian galdera txertatuetan erantzun zuzena erakutsiko den edo ez. Aukera hau ez erabiltzea gomendatzen da, eta horren ordez galderaren egileak feedback orokorrean erantzun zuzena azaldu dezaten sustatzea.';
$string['securityheading'] = 'Segurtasun ezarpenak';
$string['specificfeedback_desc'] = 'Modu lehenetsian galdera txertatuetan ikaslearen erantzunaren araberako feedback zehatza erakutsiko den edo ez.';
$string['taskcleanup'] = 'Garbitu galdera txertatuen saiakera zaharrak';
$string['title'] = 'Galdera txertatua';
$string['warningfilteroffglobally'] = 'Kontuz: galdera txertatuen iragazkia desgaituta dago gune-mailako iragazkien ezarpenetan.';
$string['warningfilteroffhere'] = 'Kontuz: galdera txertatuen iragazkia itzalita dago ikastaro honetako iragazkien ezarpenetan.';
$string['whethercorrect_desc'] = 'Modu lehenetsian galdera txertatuetan ikasleari erantzuna asmatu duen adieraziko zaion edo ez. Ezarpen honek testuzko deskribapenentzat (\'Zuzena\', \'Partzialki zuzena\' edo \'Ez zuzena\') eta informazio horretan oinarritutako kolore bidezko nabarmentzeei eragiten die.';
$string['whichquestion'] = 'Galdera';
