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
 * Strings for component 'qtype_random', language 'fr', version '4.5'.
 *
 * @package     qtype_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configselectmanualquestions'] = 'Le type de question aléatoire peut-il choisir des questions évaluées manuellement lorsqu’il tire aléatoirement une question d’une catégorie ?';
$string['includingsubcategories'] = 'Sous-catégories incluses';
$string['pluginname'] = 'Aléatoire';
$string['pluginname_help'] = 'Une question aléatoire n’est pas un véritable type de question, mais un moyen d’insérer, dans une activité, une question tirée aléatoirement d’une catégorie.';
$string['pluginnameediting'] = 'Modification d’une question aléatoire';
$string['privacy:metadata'] = 'Le plugin de type de question Aléatoire n’enregistre aucune donnée personnelle.';
$string['randomqname'] = 'Aléatoire ({$a})';
$string['randomqnamefromtop'] = 'Question aléatoire erronée. Veuillez supprimer cette question.';
$string['randomqnamefromtoptags'] = 'Mauvaise question aléatoire  ! Veuillez la supprimer.';
$string['randomqnametags'] = 'Aléatoire ({$a->category}, tags : {$a->tags})';
$string['randomqplusname'] = 'Aléatoire ({$a} et sous-catégories)';
$string['randomqplusnamecourse'] = 'Aléatoire (n’importe quelle catégorie de ce cours)';
$string['randomqplusnamecoursecat'] = 'Aléatoire (n’importe quelle catégorie de la catégorie de cours {$a})';
$string['randomqplusnamecoursecattags'] = 'Aléatoire (toute catégorie dans la catégorie de cours {$a->category}, tags : {$a->tags})';
$string['randomqplusnamecoursetags'] = 'Aléatoire (toute catégorie dans ce cours, tags : {$a->tags})';
$string['randomqplusnamemodule'] = 'Aléatoire (n’importe quelle catégorie de ce test)';
$string['randomqplusnamemoduletags'] = 'Aléatoire (toute catégorie de ce test, tags : {$a->tags})';
$string['randomqplusnamesystem'] = 'Aléatoire (n’importe quelle catégorie système)';
$string['randomqplusnamesystemtags'] = 'Aléatoire (toute catégorie au niveau du site, tags : {$a->tags})';
$string['randomqplusnametags'] = 'Aléatoire ({$a->category} et sous-catégories, tags : {$a->tags})';
$string['selectedby'] = '{$a->questionname} sélectionné par {$a->randomname}';
$string['selectmanualquestions'] = 'Les questions aléatoires peuvent utiliser les questions évaluées manuellement';
$string['taskunusedrandomscleanup'] = 'Supprimer les questions aléatoires non utilisées';
