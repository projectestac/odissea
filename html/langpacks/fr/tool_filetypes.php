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
 * Strings for component 'tool_filetypes', language 'fr', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_filetypes
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'Ajouter un type de fichier';
$string['corestring'] = 'Chaîne de caractères de langue alternative';
$string['corestring_help'] = 'Ce réglage peut être utilisé pour sélectionner une langue différente dans le fichier de langue réinstallé mimetypes.php. Le champ doit être en principe laissé vide. Pour des types personnalisés, utilisez le champ de description.';
$string['defaulticon'] = 'Icône par défaut des types MIME';
$string['defaulticon_help'] = 'Si plusieurs extensions de fichier utilisent le même type MIME, choisissez cette option pour une des extensions, de sorte que l\'icône sera utilisée pour l\'affichage de l\'icône des fichiers à partir du type MIME.';
$string['deletea'] = 'Supprimer {$a}';
$string['delete_confirmation'] = 'Voulez-vous vraiment supprimer le type <strong>.{$a}</strong> ?';
$string['deletefiletypes'] = 'Supprimer un type de fichier';
$string['description'] = 'Description personnalisée';
$string['description_help'] = 'Description brève d\'un type de fichier, par exemple « Livre ePUB ». Si votre plateforme est proposée en plusieurs langues et utilise le filtre multilingue, vous pouvez utiliser ici la syntaxe multilingue pour indiquer des descriptions en plusieurs langues.';
$string['descriptiontype'] = 'Type de description';
$string['descriptiontype_custom'] = 'Description personnalisée indiquée dans ce formulaire';
$string['descriptiontype_default'] = 'Défaut (type MIME ou chaîne de caractère de langue, si disponible)';
$string['descriptiontype_help'] = 'Trois moyens sont possibles pour indiquer une description.

* Par défaut, le type MIME est utilisé. Si une chaîne de caractères existe dans le fichier mimetypes.php du paquetage de langue pour ce type MIME, cette chaîne sera utilisée ; sinon le type MIME sera affiché.
* Il est possible d\'indiquer une description personnalisée dans ce formulaire.
* On peut aussi indiquer une chaîne de caractères du fichier mimetypes.php du paquetage de langue à utiliser au lieu du type MIME.';
$string['descriptiontype_lang'] = 'Chaîne alternative du paquetage de langue (fichier mimetypes.php).';
$string['displaydescription'] = 'Description';
$string['editfiletypes'] = 'Modifier un type de fichier';
$string['emptylist'] = 'Aucun type n\'est défini.';
$string['error_addentry'] = 'L\'extension, la description, le type MIME et l\'icône du fichier ne doivent pas contenir de retour de chariot, ni de point-virgule.';
$string['error_defaulticon'] = 'Une autre extension de fichier avec le même type MIME est déjà marquée comme icône par défaut.';
$string['error_extension'] = 'L\'extension de fichier <strong>{$a}</strong> existe déjà ou n\'est pas valide. Les extensions de fichier doivent être uniques et ne contenir aucun caractère spécial.';
$string['error_notfound'] = 'Le type de fichier d\'extension {$a} est introuvable.';
$string['extension'] = 'Extension';
$string['extension_help'] = 'L\'extension du nom de fichier, sans le point, par exemple : « epub ».';
$string['groups'] = 'Groupes de types';
$string['groups_help'] = 'Une liste optionnelle de groupes de types auxquels ce type appartient. Ces groupes sont des catégories génériques, comme « document » ou « image ».';
$string['icon'] = 'Icône de fichier';
$string['icon_help'] = 'Nom de fichier';
$string['mimetype'] = 'Type MIME';
$string['mimetype_help'] = 'Le type MIME associé à ce type de fichier, par exemple « application/epub+zip »';
$string['pluginname'] = 'Types de fichier';
$string['privacy:metadata'] = 'Le plugin Types de fichier n\'enregistre aucune donnée personnelle.';
$string['revert'] = 'Revenir à la définition par défaut de {$a}';
$string['revert_confirmation'] = 'Voulez-vous vraiment revenir à la définition par défaut du type <strong>.{$a}</strong>, en supprimant toutes vos modifications ?';
$string['revertfiletype'] = 'Restaurer un type de fichier';
$string['source'] = 'Type';
$string['source_custom'] = 'Personnalisé';
$string['source_deleted'] = 'Supprimé';
$string['source_modified'] = 'Modifié';
$string['source_standard'] = 'Standard';
