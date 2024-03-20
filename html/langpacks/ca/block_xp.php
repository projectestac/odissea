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
 * Strings for component 'block_xp', language 'ca', version '4.1'.
 *
 * @package     block_xp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addacondition'] = 'Afegeix una condició';
$string['addarule'] = 'Afegeix una regla';
$string['cachedef_filters'] = 'Filtres de nivell';
$string['configdescription'] = 'Introducció';
$string['configdescription_help'] = 'Es mostra una breu introducció al bloc, per sota del nivell dels estudiants. Els estudiants poden descartar el missatge; en aquest cas, no el tornaran a visualitzar.';
$string['configheader'] = 'Configuració';
$string['configtitle'] = 'Títol';
$string['configtitle_help'] = 'El títol del bloc.';
$string['congratulationsyouleveledup'] = 'Enhorabona!';
$string['courselog'] = 'Registre del curs';
$string['defaultrulesformhelp'] = 'Aquestes són les regles per defecte que proporciona el connector. Donen punts d\'experiència automàticament i ignoren alguns esdeveniments redundants. Les regles personalitzades tenen preferència sobre aquestes.';
$string['deletecondition'] = 'Esborra condició';
$string['deleterule'] = 'Esborra regla';
$string['description'] = 'Descripció';
$string['discoverlevelupplus'] = 'Descobreix Puja de nivell! Plus';
$string['errorlevelsincorrect'] = 'El nombre mínim de nivells és 2';
$string['errorunknownevent'] = 'Error: esdeveniment desconegut';
$string['errorunknownmodule'] = 'Error: mòdul desconegut';
$string['eventis'] = 'L\'esdeveniment és {$a}';
$string['eventname'] = 'Nom de l\'esdeveniment';
$string['infos'] = 'Informació';
$string['ladder'] = 'Classificació';
$string['ladderadditionalcols'] = 'Columnes addicionals';
$string['level'] = 'Nivell';
$string['levels'] = 'Nivells';
$string['levelup'] = 'Puja de nivell!';
$string['levelx'] = 'Nivell #{$a}';
$string['name'] = 'Nom';
$string['navinfos'] = 'Informació';
$string['navladder'] = 'Classificació';
$string['navlevels'] = 'Nivells';
$string['navlog'] = 'Registre';
$string['navreport'] = 'Informe';
$string['navsettings'] = 'Configuració';
$string['participant'] = 'Participant';
$string['participatetolevelup'] = 'Participa en el curs per guanyar punts d\'experiència (xp) i pujar de nivell!';
$string['pluginname'] = 'Puja de nivell!';
$string['progress'] = 'Progrés';
$string['recentrewards'] = 'Recompenses recents';
$string['rule'] = 'Regla';
$string['ruleset:all'] = 'TOTES les condicions són certes';
$string['ruleset:any'] = 'QUALSEVOL de les condicions és certa';
$string['ruleset:none'] = 'CAP de les condicions és certa';
$string['rulesformhelp'] = '<p>Aquest connector fa ús dels esdeveniments per atribuir punts d\'experiència a les accions que fan els estudiants. Podeu usar el següent formulari per afegir les vostres pròpies regles i visualitzar les que hi ha per defecte.</p>
<p>S\'aconsella comprovar el <a href="{$a->log}">registre</a> del connector per tal d\'identificar quins esdeveniments s\'activen a mesura que feu accions en el curs, així com llegir més sobre els esdeveniments mateixos: <a href="{$a->list}">llista de tots els esdeveniments</a>, <a href="{$a->doc}">documentació del desenvolupador</a>.</p>
<p>Finalment, sapigueu que el connector ignora sempre:
<ul>
  <li>Les accions que fan els administradors, convidats o usuaris que no han iniciat sessió.</li>
  <li>Les accions que fan els usuaris que no tenen la capacitat <em>block/xp:earnxp</em>.</li>
  <li>Accions repetides dins un interval curt de temps, per tal d\'evitar la còpia.</li>
  <li>Esdeveniments que estan senyalats com a <em>anònim</em>; p. ex., a una retroacció anònima.</li>
  <li>I els esdeveniments d\'un nivell educatiu diferent a <em>Participant</em>.</li>
</ul>
</p>';
$string['someoneelse'] = 'Algú més';
$string['xp'] = 'Punts d\'experiència';
$string['xptogo'] = 'Falten [[{$a}]]';
$string['yourownrules'] = 'Les teves regles';
