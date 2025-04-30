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
 * Strings for component 'tool_xmldb', language 'fr', version '4.4'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Valeur actuelle';
$string['addpersistent'] = 'Ajouter des champs persistants obligatoires';
$string['aftertable'] = 'Après la table';
$string['back'] = 'Retour';
$string['backtomainview'] = 'Retour à la vue d’ensemble';
$string['cannotuseidfield'] = 'Impossible d’insérer le champ « id ». Il s’agit d’une colonne numérique automatique';
$string['change'] = 'Modifier';
$string['charincorrectlength'] = 'Longueur du champ caractère incorrecte';
$string['check_bigints'] = 'Recherche des entiers incorrects dans la base de données';
$string['check_defaults'] = 'Recherche des valeurs par défaut incohérentes';
$string['check_foreign_keys'] = 'Recherche des violations de clefs étrangères';
$string['check_indexes'] = 'Recherche des index manquants de la base de données';
$string['check_oracle_semantics'] = 'Recherche des sémantiques de longueur incorrecte';
$string['checkbigints'] = 'Vérifier les entiers';
$string['checkdefaults'] = 'Vérifier les valeurs par défaut';
$string['checkforeignkeys'] = 'Vérifier les clefs étrangères';
$string['checkindexes'] = 'Vérifier les index';
$string['checkoraclesemantics'] = 'Vérifier les sémantiques';
$string['completelogbelow'] = '(voir le journal de recherche complet ci-dessous)';
$string['confirmcheckbigints'] = 'Cette fonctionnalité recherche les <a href="https://tracker.moodle.org/browse/MDL-11038">champs de type entier potentiellement faux</a> dans votre serveur Moodle, et génère automatiquement (mais n’exécute pas) les instructions SQL nécessaires pour définir correctement les entiers de votre base de données.

Vous pouvez copier alors ces instructions et les lancer avec votre interface SQL préférée. N’oubliez pas d’effectuer une sauvegarde de la base de données avant de lancer ces commandes.

Il est vivement recommandé d’avoir la dernière version (version +) disponible pour votre version de Moodle avant de lancer la recherche des mauvais entiers.

Cette fonctionnalité n’effectue aucune modification de la base de données (elle ne fait que la lire), et peut donc être lancée à tout instant.';
$string['confirmcheckdefaults'] = 'Cette fonctionnalité recherche les valeurs par défaut incohérentes dans votre serveur Moodle, et génère automatiquement (mais n’exécute pas) les instructions SQL nécessaires pour définir correctement ces valeurs par défaut.

Vous pouvez copier alors ces instructions et les lancer avec votre interface SQL préférée. N’oubliez pas d’effectuer une sauvegarde de la base de données avant de lancer ces commandes.

Il est vivement recommandé d’avoir la dernière version (version +) disponible pour votre version de Moodle avant de lancer la recherche des valeurs par défaut incohérentes.

Cette fonctionnalité n’effectue aucune modification de la base de données (elle ne fait que la lire), et peut donc être lancée à tout instant.';
$string['confirmcheckforeignkeys'] = 'Cette fonctionnalité recherche les violations potentielles des clefs étrangères définies dans le fichier de définitions install.xml. (Moodle ne génère actuellement dans sa base de données aucune contrainte sur les clefs étrangères, raison pour laquelle des données non valides peuvent être présentes.)

Il est vivement recommandé d’avoir la dernière version (version +) disponible pour votre version de Moodle avant de lancer la recherche des éventuelles violations.

Cette fonctionnalité n’effectue aucune modification de la base de données (elle ne fait que la lire), et peut donc être lancée à tout instant.';
$string['confirmcheckindexes'] = 'Cette fonctionnalité recherche les index potentiellement manquants dans votre serveur Moodle, et génère automatiquement (mais n’exécute pas) les instructions SQL nécessaires pour tout mettre à jour.

Vous pouvez copier alors ces instructions et les lancer avec votre interface SQL préférée. N’oubliez pas d’effectuer une sauvegarde de la base de données avant de lancer ces commandes.

Il est vivement recommandé d’avoir la dernière version (version +) disponible pour votre version de Moodle avant de lancer la recherche des index manquants.

Cette fonctionnalité n’effectue aucune modification de la base de données (elle ne fait que la lire), et peut donc être lancée à tout instant.';
$string['confirmcheckoraclesemantics'] = 'Cette fonctionnalité va rechercher des <a href="https://tracker.moodle.org/browse/MDL-29322">colonnes Oracle varchar2 utilisant la sémantique BYTE</a> sur votre serveur Moodle et générer automatiquement (sans les lancer !) les instructions SQL permettant de convertir ces colonnes de sorte qu’elles utilisent la sémantique CHAR (meilleur pour la compatibilité et pouvant accepter des contenus de longueur plus grande).

Vous pourrez copier ces instructions et les lancer depuis votre interface SQL préférée (n’oubliez pas de sauvegarder vos données avant de le faire).

Il est vivement recommandé de disposer de la version la plus récente (version +) disponible pour votre version de Moodle avant de lancer la recherche.

Cette fonctionnalité n’effectue aucune action sur votre base de données et peut donc être lancée à tout moment.';
$string['confirmdeletefield'] = 'Voulez-vous vraiment supprimer le champ';
$string['confirmdeleteindex'] = 'Voulez-vous vraiment supprimer l’index :';
$string['confirmdeletekey'] = 'Voulez-vous vraiment supprimer la clef :';
$string['confirmdeletetable'] = 'Voulez-vous vraiment supprimer la table :';
$string['confirmdeletexmlfile'] = 'Voulez-vous vraiment supprimer le fichier :';
$string['confirmrevertchanges'] = 'Voulez-vous vraiment revenir à la version antérieure, en supprimant toutes les modifications :';
$string['create'] = 'Créer';
$string['createtable'] = 'Créer la table';
$string['defaultincorrect'] = 'Valeur par défaut incorrecte';
$string['delete'] = 'Supprimer';
$string['delete_field'] = 'Supprimer le champ';
$string['delete_index'] = 'Supprimer l’index';
$string['delete_key'] = 'Supprimer la clef';
$string['delete_table'] = 'Supprimer la table';
$string['delete_xml_file'] = 'Supprimer le fichier XML';
$string['doc'] = 'Doc';
$string['docindex'] = 'Index de documentation :';
$string['documentationintro'] = 'Cette documentation est générée automatiquement à partir de la définition XMLDB de la base de données. C’est pourquoi elle n’est disponible qu’en anglais.';
$string['down'] = 'Descendre';
$string['duplicate'] = 'Doublon';
$string['duplicatefieldname'] = 'Un autre champ de ce nom existe déjà';
$string['duplicatefieldsused'] = 'Champs en doublon';
$string['duplicateindexname'] = 'Nom d’index à double';
$string['duplicatekeyname'] = 'Une autre clef de ce nom existe déjà';
$string['duplicatetablename'] = 'Une table de ce nom existe déjà';
$string['edit'] = 'Modifier';
$string['edit_field'] = 'Modifier le champ';
$string['edit_field_save'] = 'Enregistrer champ';
$string['edit_index'] = 'Modifier l’index';
$string['edit_index_save'] = 'Enregistrer l’index';
$string['edit_key'] = 'Modifier la clef';
$string['edit_key_save'] = 'Enregistrer la clef';
$string['edit_table'] = 'Modifier la table';
$string['edit_table_save'] = 'Enregistrer la table';
$string['edit_xml_file'] = 'Modifier le fichier XML';
$string['enumvaluesincorrect'] = 'Valeur incorrecte du champ énumération';
$string['expected'] = 'Valeur attendue';
$string['extensionrequired'] = 'L’extension PHP « {$a} » est requise pour cette action. Veuillez l’installer si vous voulez utiliser cette fonctionnalité.';
$string['extraindexesfound'] = 'Index supplémentaires trouvés';
$string['field'] = 'Champ';
$string['fieldnameempty'] = 'Nom du champ vide';
$string['fields'] = 'Champs';
$string['fieldsnotintable'] = 'Le champ n’existe pas dans la table';
$string['fieldsusedinindex'] = 'Ce champ est utilisé comme index';
$string['fieldsusedinkey'] = 'Ce champ est utilisé comme clef.';
$string['filemodifiedoutfromeditor'] = 'Attention ! Fichier modifié localement à l’aide de l’éditeur XMLDB. L’enregistrement écrasera les modifications locales.';
$string['filenotwriteable'] = 'Fichier non atteignable en écriture';
$string['fkunknownfield'] = 'La clef étrangère {$a->keyname} sur la table {$a->tablename} fait référence à un champ inexistant {$a->reffield} dans la table référencée {$a->reftable}.';
$string['fkunknowntable'] = 'La clef étrangère {$a->keyname} sur la table {$a->tablename} fait référence à une table inexistante {$a->reftable}.';
$string['fkviolationdetails'] = 'La clef étrangère {$a->keyname} sur la table {$a->tablename} subit {$a->numviolations} violations sur un total de {$a->numrows} rangées.';
$string['float2numbernote'] = 'Remarque : bien que les champs « float » soient pris en charge à 100% par XMLDB, il est recommandé de les convertir en champs « number ».';
$string['floatincorrectdecimals'] = 'Nombre de décimales incorrect pour champ virgule flottante';
$string['floatincorrectlength'] = 'Longueur incorrecte du champ virgule flottante';
$string['generate_all_documentation'] = 'Toute la documentation';
$string['generate_documentation'] = 'Documentation';
$string['gotolastused'] = 'Retour au dernier fichier utilisé';
$string['incorrectfieldname'] = 'Nom incorrect';
$string['incorrectindexname'] = 'Nom d’index incorrect';
$string['incorrectkeyname'] = 'Nom de clef incorrect';
$string['incorrecttablename'] = 'Nom de table incorrect';
$string['index'] = 'Index';
$string['indexes'] = 'Index';
$string['indexnameempty'] = 'Nom d’index vide';
$string['integerincorrectlength'] = 'Longueur incorrecte du champ entier';
$string['key'] = 'Clef';
$string['keynameempty'] = 'Le nom de clef ne peut pas être vide';
$string['keys'] = 'Clefs';
$string['listreservedwords'] = 'Liste des mots réservés<br />(utilisée pour tenir à jour <a href="https://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB_reserved_words</a>)';
$string['load'] = 'Charger';
$string['main_view'] = 'Vue d’ensemble';
$string['masterprimaryuniqueordernomatch'] = 'Les champs dans votre clef étrangère doivent être listés dans le même ordre que la UNIQUE KEY dans la table référencée.';
$string['missing'] = 'Manquant(s)';
$string['missingindexes'] = 'Index manquants trouvés';
$string['mustselectonefield'] = 'Pour voir les actions possibles sur un champ, vous devez d’abord en sélectionner un !';
$string['mustselectoneindex'] = 'Pour voir les actions possibles sur un index, vous devez d’abord en sélectionner un !';
$string['mustselectonekey'] = 'Pour voir les actions possibles sur une clef, vous devez d’abord en sélectionner une !';
$string['new_table_from_mysql'] = 'Nouvelle table depuis MySQL';
$string['newfield'] = 'Nouveau champ';
$string['newindex'] = 'Nouvel index';
$string['newkey'] = 'Nouvelle clef';
$string['newtable'] = 'Nouvelle table';
$string['newtablefrommysql'] = 'Nouvelle table depuis MySQL';
$string['nofieldsspecified'] = 'Aucun champ spécifié';
$string['nomasterprimaryuniquefound'] = 'La (les) colonne(s) référencées par votre clef étrangère doit(vent) être incluses dans une clef (KEY) primaire ou unique de la table référencée. Il ne suffit pas que la colonne soit dans un UNIQUE INDEX.';
$string['nomissingorextraindexesfound'] = 'Aucun index manquant ou supplémentaire n’a été trouvé. Aucune action n’est requise.';
$string['noreffieldsspecified'] = 'Aucun champ de référence spécifié';
$string['noreftablespecified'] = 'Table de référence spécifiée non trouvée';
$string['noviolatedforeignkeysfound'] = 'Aucune violation de clef étrangère n’a été trouvée.';
$string['nowrongdefaultsfound'] = 'Aucune valeur par défaut incohérente n’a été trouvée. Votre base de données ne nécessite aucune manipulation.';
$string['nowrongintsfound'] = 'Aucun entier incorrectement défini n’a été trouvé. Votre base de données ne nécessite aucune manipulation.';
$string['nowrongoraclesemanticsfound'] = 'Aucune colonne Oracle varchar2 utilisant la sémantique BYTE n’a été trouvée. Aucune intervention n’est nécessaire sur votre base de données.';
$string['numberincorrectdecimals'] = 'Nombre de décimales incorrect pour champ numérique';
$string['numberincorrectlength'] = 'Longueur incorrecte du champ numérique';
$string['numberincorrectwholepart'] = 'Nombre entier trop grand pour le champ nombre';
$string['pendingchanges'] = 'Remarque ! Vous avez effectué des modifications dans ce fichier. Vous pouvez l’enregistrer quand cela vous convient.';
$string['pendingchangescannotbesaved'] = 'Ce fichier comprend des modifications, mais ne peut pas être enregistré ! Veuillez vérifier que le dossier, ainsi que le fichier « install.xml » qu’il contient, disposent des droits d’accès en écriture par le serveur web.';
$string['pendingchangescannotbesavedreload'] = 'Ce fichier comprend des modifications, mais ne peut pas être enregistré ! Veuillez vérifier que le dossier, ainsi que le fichier « install.xml » qu’il contient, disposent des droits d’accès en écriture par le serveur web. Rafraîchissez ensuite l’affichage de cette page, et vous pourrez alors enregistrer les modifications.';
$string['persistentfieldscomplete'] = 'Les champs suivants ont été ajoutés :';
$string['persistentfieldsconfirm'] = 'Voulez-vous vraiment ajouter les champs suivants :';
$string['persistentfieldsexist'] = 'Les champs suivants existent déjà :';
$string['pluginname'] = 'Éditeur XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'Les clefs primaires ne peuvent pas être nulles';
$string['privacy:metadata'] = 'Le plugin Éditeur XMLDB n’enregistre aucune donnée personnelle.';
$string['reconcile_files'] = 'Rechercher des fichiers XMLDB nécessitant régénération';
$string['reconcile_files_intro'] = 'Cette fonctionnalité vérifie si les fichiers XMLDB actuels correspondent aux résultats de leur génération par l’éditeur XMLDB.

Une liste des fichiers nécessitant d’être régénérés sera affichée, et l’éditeur XMLDB peut être utilisé pour corriger les problèmes.';
$string['reconcile_files_no'] = 'Tous les fichiers sont en ordre ; aucune action de régénération n’est nécessaire.';
$string['reconcile_files_yes'] = 'Fichiers nécessitant régénération';
$string['reconcilefiles'] = 'Régénérer les fichiers XMLDB';
$string['reserved'] = 'Réservé';
$string['reservedwords'] = 'Mots réservés';
$string['revert'] = 'Annuler';
$string['revert_changes'] = 'Annuler les modifications';
$string['save'] = 'Enregistrer';
$string['searchresults'] = 'Résultats de recherche';
$string['selectaction'] = 'Choisir une action :';
$string['selectdb'] = 'Sélectionner une base de données :';
$string['selectfieldkeyindex'] = 'Choisir un champ/une clef/un index :';
$string['selectonecommand'] = 'Veuillez sélectionner une action dans la liste pour voir le code PHP';
$string['selectonefieldkeyindex'] = 'Veuillez sélectionner un champ/une clef/un index dans la liste pour voir le code PHP';
$string['selecttable'] = 'Choisir une table :';
$string['table'] = 'Table';
$string['tablenameempty'] = 'Le nom de la table ne peut pas être vide';
$string['tables'] = 'Tables';
$string['unknownfield'] = 'Fait référence à un champ inconnu';
$string['unknowntable'] = 'Fait référence à une table inconnue';
$string['unload'] = 'Enlever';
$string['up'] = 'Monter';
$string['view'] = 'Afficher';
$string['view_reserved_words'] = 'Afficher les mots réservés';
$string['view_structure_php'] = 'Afficher la structure PHP';
$string['view_structure_sql'] = 'Afficher la structure SQL';
$string['view_table_php'] = 'Afficher la table PHP';
$string['view_table_sql'] = 'Afficher la table SQL';
$string['viewedited'] = 'Afficher les modifications';
$string['vieworiginal'] = 'Afficher l’original';
$string['viewphpcode'] = 'Afficher le code PHP';
$string['viewsqlcode'] = 'Afficher le code SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Clefs étrangères subissant des violations';
$string['violatedforeignkeysfound'] = 'Clefs étrangères trouvées subissant des violations';
$string['violations'] = 'Violations';
$string['wrong'] = 'Incorrect';
$string['wrongdefaults'] = 'Valeurs par défaut incorrectes';
$string['wrongints'] = 'Entiers incorrects trouvés';
$string['wronglengthforenum'] = 'Longueur incorrecte du champ énumération';
$string['wrongnumberofreffields'] = 'Nombre incorrect de champs de référence';
$string['wrongoraclesemantics'] = 'Sémantiques Oracle BYTE incorrectes trouvées';
$string['wrongreservedwords'] = 'Mots réservés utilisés actuellement<br />(les noms des tables ne sont pas importants si vous utilisez $CFG->prefix)';
$string['yesextraindexesfound'] = 'Les index supplémentaires suivants ont été trouvés.';
$string['yesmissingindexesfound'] = '<p>Des index manquants ont été trouvés dans votre base de données. Voici des informations détaillées et les instructions SQL à exécuter avec votre interface SQL préférée pour les créer. N’oubliez pas d’effectuer une sauvegarde de la base de données avant de lancer ces commandes.</p>
<p>Après les avoir exécutés, il vous est vivement recommandé de lancer cet utilitaire une nouvelle fois afin de vérifier qu’il ne reste plus d’index manquant.</p>';
$string['yeswrongdefaultsfound'] = '<p>Certaines valeurs par défaut incohérentes ont été trouvées dans votre base de données. Voici des informations détaillées et les instructions SQL à exécuter avec votre interface SQL préférée pour les corriger. N’oubliez pas d’effectuer une sauvegarde de la base de données avant de lancer ces commandes.</p>
<p>Après les avoir exécutées, il vous est vivement recommandé de lancer cet utilitaire une nouvelle fois afin de vérifier qu’il ne reste plus de valeurs par défaut incohérentes.</p>';
$string['yeswrongintsfound'] = '<p>Des entiers incorrectement définis ont été trouvés dans votre base de données. Voici des informations détaillées et les instructions SQL à exécuter avec votre interface SQL préférée pour les corriger. N’oubliez pas d’effectuer une sauvegarde de la base de données avant de lancer ces commandes.</p>
<p>Après les avoir corrigés, il vous est vivement recommandé de lancer cet utilitaire une nouvelle fois pour vérifier qu’il ne reste plus d’entiers incorrectement définis.</p>';
$string['yeswrongoraclesemanticsfound'] = '<p>Des colonnes Oracle utilisant la sémantique BYTE ont été trouvées dans votre base de données. Voici des informations détaillées et les instructions SQL à lancer depuis votre interface SQL préférée pour toutes les convertir. N’oubliez pas de sauvegarder vos données avant de le faire !</p>
<p>Il est vivement recommandé d’effectuer une nouvelle fois cette recherche après avoir lancé ces commandes, afin de vous assurer qu’il ne reste plus de sémantiques incorrectes.</p>';
