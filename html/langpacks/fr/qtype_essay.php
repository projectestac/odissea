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
 * Strings for component 'qtype_essay', language 'fr', version '4.4'.
 *
 * @package     qtype_essay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Types de fichiers acceptés';
$string['acceptedfiletypes_help'] = 'Les types de fichiers peuvent être restreints en saisissant une liste d’extensions de fichiers. Si le champ est laissé vide, tous les types de fichiers sont autorisés.';
$string['allowattachments'] = 'Permettre des annexes';
$string['answerfiles'] = 'Fichiers de réponse';
$string['answertext'] = 'Texte de réponse';
$string['attachedfiles'] = 'Annexes : {$a}';
$string['attachmentsoptional'] = 'Les annexes sont optionnelles';
$string['attachmentsrequired'] = 'Exiger des annexes';
$string['attachmentsrequired_help'] = 'Ce réglage détermine le nombre minimal d’annexes requises pour que la réponse soit considérée comme évaluable.';
$string['err_maxminmismatch'] = 'Le nombre maximum de mots doit être plus grand que le nombre minimum';
$string['err_maxwordlimit'] = 'Le nombre maximum de mots est activé, mais pas spécifié';
$string['err_maxwordlimitnegative'] = 'Le nombre maximum de mots ne peut pas être négatif';
$string['err_minwordlimit'] = 'Le nombre minimum de mots est activé, mais pas spécifié';
$string['err_minwordlimitnegative'] = 'Le nombre minimum de mots ne peut pas être négatif';
$string['formateditor'] = 'Éditeur HTML';
$string['formateditorfilepicker'] = 'Éditeur HTML avec sélecteur de fichier';
$string['formatmonospaced'] = 'Texte pur, police monospace';
$string['formatnoinline'] = 'Pas de texte en ligne';
$string['formatplain'] = 'Texte pur';
$string['graderinfo'] = 'Information pour les évaluateurs';
$string['graderinfoheader'] = 'Information de l’évaluateur';
$string['maxbytes'] = 'Taille de fichier maximale';
$string['maxwordlimit'] = 'Nombre maximum de mots';
$string['maxwordlimit_help'] = 'Si la réponse requiert que les étudiants saisissent du texte, cette option définit le nombre maximum de mots qu’un étudiant peut envoyer.';
$string['maxwordlimitboundary'] = 'Le nombre maximum de mots pour cette question est de {$a->limit} mots et vous tentez d’envoyer {$a->count} mots. Veuillez raccourcir votre réponse et essayer encore.';
$string['minwordlimit'] = 'Nombre minimum de mots';
$string['minwordlimit_help'] = 'Si la réponse requiert que les étudiants saisissent du texte, cette option définit le nombre minimum de mots qu’un étudiant doit envoyer.';
$string['minwordlimitboundary'] = 'Le nombre minimum de mots pour cette question est de {$a->limit} mots et vous tentez d’envoyer {$a->count} mots. Veuillez développer votre réponse et essayer encore.';
$string['mustattach'] = 'Si l’option « Pas de texte en ligne » est choisie ou si les réponses sont optionnelles, vous devez autoriser au moins une annexe.';
$string['mustrequire'] = 'Si l’option « Pas de texte en ligne » est choisie ou si les réponses sont optionnelles, vous devez exiger au moins une annexe.';
$string['mustrequirefewer'] = 'Vous ne pouvez pas exiger plus d’annexes que le nombre que vous autorisez.';
$string['nlines'] = '{$a} lignes';
$string['nonexistentfiletypes'] = 'Les types de fichier suivants n’ont pas été reconnus : {$a}';
$string['pluginname'] = 'Composition';
$string['pluginname_help'] = 'Pour répondre à la question, les participants peut déposer un ou plusieurs fichiers ou écrire un texte en ligne. Un modèle de réponse peut être fourni. Les réponses doivent être évaluées manuellement.';
$string['pluginname_link'] = 'question/type/essay';
$string['pluginnameadding'] = 'Ajout d’une question de composition';
$string['pluginnameediting'] = 'Modification d’une question de composition';
$string['pluginnamesummary'] = 'Permet une réponse sous forme d’un fichier ou d’un texte en ligne. Cette question doit être évaluée manuellement.';
$string['privacy:metadata'] = 'Le plugin de type de question Composition permet aux auteurs de questions d’enregistrer des préférences par défaut.';
$string['privacy:preference:attachments'] = 'Le nombre d’annexes permises.';
$string['privacy:preference:attachmentsrequired'] = 'Le nombre d’annexes requises.';
$string['privacy:preference:defaultmark'] = 'Le nombre de points par défaut pour une question.';
$string['privacy:preference:maxbytes'] = 'Taille maximale de fichier.';
$string['privacy:preference:responsefieldlines'] = 'Le nombre de lignes indiquant la taille du champ de saisie (zone de texte).';
$string['privacy:preference:responseformat'] = 'Le format de réponse (éditeur HTML, texte pur, etc.).';
$string['privacy:preference:responserequired'] = 'Si l’étudiant doit saisir du texte ou si la saisie de texte est optionnelle.';
$string['responsefieldlines'] = 'Taille du champ de saisie';
$string['responseformat'] = 'Format de la réponse';
$string['responseisrequired'] = 'Requiert la saisie d’un texte par le participant';
$string['responsenotrequired'] = 'Saisie de texte optionnelle';
$string['responseoptions'] = 'Options de réponse';
$string['responserequired'] = 'Requiert texte';
$string['responsetemplate'] = 'Modèle de réponse';
$string['responsetemplate_help'] = 'Le texte saisi ici sera affiché dans le champ de réponse au début d’une tentative de cette question.';
$string['responsetemplateheader'] = 'Modèle de réponse';
$string['wordcount'] = 'Nombre de mots : {$a}';
$string['wordcounttoofew'] = 'Nombre de mots : {$a->count}, inférieur au nombre minimum de {$a->limit} mots.';
$string['wordcounttoomuch'] = 'Nombre de mots : {$a->count}, supérieur au nombre maximum de {$a->limit} mots.';
