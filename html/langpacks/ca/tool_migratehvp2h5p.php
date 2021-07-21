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
 * Strings for component 'tool_migratehvp2h5p', language 'ca', version '3.11'.
 *
 * @package     tool_migratehvp2h5p
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attempted'] = 'Usuaris amb intents';
$string['cannot_migrate'] = 'No es pot migrar l\'activitat';
$string['contenttype'] = 'Tipus de contingut';
$string['copy2cb'] = 'Caldria afegir aquests continguts al banc de contingut?';
$string['copy2cb_no'] = 'No, s\'haurien de crear només en l\'activitat';
$string['copy2cb_yeswithlink'] = 'Sí, i caldria utilitzar un enllaç a aquests fitxers en l\'activitat';
$string['copy2cb_yeswithoutlink'] = 'Sí, però s\'utilitzarà una còpia en l\'activitat (els canvis en el banc de contingut no es veuran reflectits en l\'activitat)';
$string['error_contenttypeh5p_disabled'] = 'El tipus de contingut H5P està deshabilitat. Cal habilitar-lo per a migrar activitats des del mod_hvp i afegir-les també al banc de contingut. Podeu habilitar aquest tipus de contingut des de l\'«Administració del lloc | Connectors | Banc de contingut | Gestiona els tipus de contingut» o executar de nou l\'eina de migració i triar «No, s\'haurien de crear només en l\'activitat» (o bé «copy2cb=0» si esteu executant CLI) per a evitar crear fitxers en el banc de contingut.';
$string['error_modh5pactivity_disabled'] = 'L\'activitat H5P està deshabilitada. Cal habilitar-la per a migrar activitats des del mod_hvp';
$string['event_hvp_migrated'] = 'S\'ha migrat mod_hvp a mod_h5pactivity';
$string['graded'] = 'Usuaris qualificats';
$string['hvpactivities'] = 'Activitats mod_hvp pendents';
$string['id'] = 'Id';
$string['keeporiginal'] = 'Trieu què fer amb l\'activitat original una vegada migrada';
$string['keeporiginal_delete'] = 'Suprimeix l\'activitat original';
$string['keeporiginal_hide'] = 'Oculta l\'activitat original';
$string['keeporiginal_nothing'] = 'Deixa l\'activitat original com està';
$string['migrate'] = 'Migra';
$string['migrate_fail'] = 'S\'ha produït un error durant la migració de l\'activitat hvp amb id {$a}';
$string['migrate_gradesoverridden'] = 'S\'ha migrat amb èxit l\'activitat mod_hvp original «{$a->name}», amb id {$a->id}. Tanmateix, hi ha informació de qualificació sobreescrita, com ara comentaris, que no s\'han migrat perquè l\'activitat original està configurada amb una qualificació màxima invàlida (ha de ser major que 0 per a migrar-se al butlletí de qualificacions).';
$string['migrate_gradesoverridden_notdelete'] = 'S\'ha migrat amb èxit l\'activitat mod_hvp original «{$a->name}», amb id {$a->id}. Tanmateix, hi ha informació de qualificació sobreescrita, com ara comentaris, que no s\'han migrat perquè l\'activitat original està configurada amb una qualificació màxima invàlida (ha de ser major que 0 per a migrar-se al butlletí de qualificacions).
L\'activitat original s\'ha amagat en comptes d\'eliminar-la.';
$string['migrate_success'] = 'L\'activitat hvp amb id {$a} s\'ha migrat amb èxit.';
$string['nohvpactivities'] = 'No hi ha activitats mod_hvp per a migrar a mod_h5pactivity.';
$string['pluginname'] = 'Migra contingut des de mod_hvp a mod_h5pactivity';
$string['privacy:metadata'] = 'Migrar contingut des de mod_hvp a mod_h5pactivity no emmagatzema cap dada personal';
$string['savedstate'] = 'Desa l\'estat';
$string['selecthvpactivity'] = 'Tria l\'activitat mod_hvp {$a}';
$string['settings'] = 'Paràmetres de la migració';
