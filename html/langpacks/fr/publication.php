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
 * Strings for component 'publication', language 'fr', version '4.1'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Ajouter des fichiers';
$string['allfiles'] = 'Tous les fichiers';
$string['allowedfiletypes'] = 'Types de fichiers acceptés';
$string['allowedfiletypes_err'] = 'Valeur incorrecte ! Extensions ou séparateurs non valides';
$string['allowedfiletypes_help'] = 'Les types de fichiers acceptés peuvent être limités en entrant une liste de mimetypes séparée par des virgules (par exemple : « video/mp4, audio/mp3, image/png, image/jpeg ») ou une liste d’extension de fichier avec le point (par exemple : « .png, .jpg »). Si le champs est laissé vide, tous les type sont autorisés.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Les détails et formulaire d’envoi du devoir seront disponibles depuis <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Date d’ouverture';
$string['allowsubmissionsfromdate_import'] = 'Approbation depuis';
$string['allowsubmissionsfromdate_upload'] = 'Possibilité de dépôt depuis';
$string['allowsubmissionsfromdateh'] = 'Intervalle de temps pour Dépôt/Approbation';
$string['allowsubmissionsfromdateh_help'] = 'Vous pouvez déterminer la période durant laquelle les étudiants peuvent déposer des fichiers ou donner leur approbation pour la publication de leurs fichiers. Durant cette période, les étudiants peuvent modifier leurs fichiers et peuvent aussi retirer leur approbation pour publication.';
$string['allowsubmissionsfromdatesummary'] = 'Le devoir acceptera des dépôts depuis <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Toujours montrer la description';
$string['alwaysshowdescription_help'] = 'Si désactivé, la Description du devoir ci-dessus ne deviendra visible que dès la date "Autoriser dépôts depuis".';
$string['approval_timeover'] = 'Vous ne pouvez modifier votre approbation que durant la période de modification';
$string['approvalchange'] = 'Statut d’approbation modifié';
$string['approved'] = 'Approuvé';
$string['approveusers'] = 'rendre visibles pour tous';
$string['assignment'] = 'Devoir';
$string['assignment_help'] = 'Choisissez le devoir duquel importer les fichiers. Actuellement, les devoirs de groupe ne sont pas supportés et ne sont donc pas sélectionnables.';
$string['assignment_notfound'] = 'Le devoir depuis lequel les fichiers ont été importés ne peut plus être trouvé.';
$string['assignment_notset'] = 'Aucun devoir n’a été choisi';
$string['autoimport'] = 'Synchroniser automatiquement avec le Devoir';
$string['autoimport_help'] = 'Si activé, les nouveaux dépôts de travaux dans le Devoir correspondant seront importés automatiquement dans cette activité. Optionnellement, l’approbation de l’étudiant doit être obtenue à nouveau pour les nouveaux fichiers.';
$string['availability'] = 'Intervalle de temps pour le dépôt et l’approbation';
$string['choose'] = 'veuillez sélectionner…';
$string['configautoimport'] = 'Si vous préférez que les nouveaux devoirs soient automatiquement importés dans les instances du Partage de fichiers. Cette fonctionnalité peut être activée/désactivée pour chaque instance de l’activité.';
$string['configmaxbytes'] = 'Taille maximale par défaut des fichiers dans un partage de fichiers.';
$string['configmaxfiles'] = 'Nombre maximal par défaut de fichiers permis par utilisateur.';
$string['configobtainstudentapproval'] = 'Les documents sont visibles après approbation de l’étudiant.';
$string['configobtainteacherapproval'] = 'Les documents des étudiants sont par défaut visibles pour les autres participants.';
$string['configrequiremodintro'] = 'Désactivez cette option si vous ne voulez pas forcer les utilisateurs à entrer une description pour chaque activité';
$string['courseuploadlimit'] = 'Limite de dépôt pour le cours';
$string['cutoffdate'] = 'Date de fin';
$string['cutoffdate_help'] = 'Si défini, le devoir n’acceptera pas de fichiers après cette date sans une prolongation.';
$string['cutoffdate_import'] = 'Approbation possible jusqu’à';
$string['cutoffdate_upload'] = 'Dernier dépôt possible jusqu’à';
$string['cutoffdatefromdatevalidation'] = 'La date de fin doit être postérieure à la date depuis laquelle les envois sont autorisés.';
$string['cutoffdatevalidation'] = 'La date de fermeture ne peut être antérieure à la date d’échéance';
$string['details'] = 'Détails';
$string['downloadall'] = 'Tout télécharger en ZIP';
$string['duedate'] = 'Date d’échéance';
$string['duedate_help'] = 'Les envois seront toujours acceptés après cette date, mais seront marqués comme en retard. Pour ne pas autoriser les envois après une certaine date, utilisez la date de fin.';
$string['duedate_import'] = 'Approbation jusqu’à';
$string['duedate_upload'] = 'Dépôt possible jusqu’à';
$string['duedatevalidation'] = 'La date d’échéance ne peut être antérieure à la date depuis laquelle les envois sont autorisés.';
$string['edit_timeover'] = 'Les fichiers ne peuvent être modifiés que durant la période de modification.';
$string['edit_uploads'] = 'modifier/déposer des fichiers';
$string['emailstudentsmail'] = '{$a->username} a modifié le statut d’approbation de « {$a->filename} » pour « {$a->publication} » à {$a->apstatus} approuvé, le {$a->dayupdated} à {$a->timeupdated}. Il est disponible ici : {$a->url}';
$string['emailstudentsmailhtml'] = '{$a->username} a modifié le statut d’approbation de « {$a->filename} » pour <i>« {$a->publication} »</i> à <b>{$a->apstatus} approuvé</b> le {$a->dayupdated} à {$a->timeupdated}</i><br /><br /> Il est <a href="{$a->url}">disponible ici</a>.';
$string['emailteachermail'] = '---------------------------------------------------------------------\\n{$a->username} a déposé le fichier « {$a->filename} » pour « {$a->publication} » le {$a->dayupdated} à {$a->timeupdated}.

Il est disponible ici :

{$a->url}---------------------------------------------------------------------\\n';
$string['emailteachermailhtml'] = '{$a->username} a déposé le fichier « {$a->filename} » pour <i> « {$a->publication} » le {$a->dayupdated} à {$a->timeupdated}</i><br /><br /> Il est <a href="{$a->url}">disponible ici</a>.';
$string['entiresperpage'] = 'Nombre de participants à afficher par page';
$string['eventpublicationapprovalchanged'] = 'L’approbation du fichier a changé';
$string['eventpublicationduedateextended'] = 'La date de rendue de la publication a été étendue';
$string['eventpublicationfiledeleted'] = 'Le fichier de la publication a été supprimé';
$string['eventpublicationfileimported'] = 'Un fichier a été importé';
$string['eventpublicationfileuploaded'] = 'Un fichier a été déposé';
$string['extensionduedate'] = 'Date de prolongation';
$string['extensionnotafterduedate'] = 'La date de prolongation doit être postérieure à la date d’échéance';
$string['extensionnotafterfromdate'] = 'La date de prolongation doit être postérieure à la date depuis laquelle les envois sont autorisés.';
$string['extensionto'] = 'Prolongation jusqu’à';
$string['filedetails'] = 'Détails';
$string['filesofthesetypes'] = 'Ces types de fichier sont autorisés :';
$string['go'] = 'Envoyer';
$string['grantextension'] = 'accorder/modifier une prolongation';
$string['groupapprovalmode'] = 'Mode d’approbation pour les groupes';
$string['groupapprovalmode_all'] = 'TOUS les membres du groupe doivent approuver';
$string['groupapprovalmode_help'] = 'Définit si l’approbation de tous les membres du groupe ou d’au moins un membre est nécessaire pour rendre les fichiers visibles.';
$string['groupapprovalmode_single'] = 'au moins UN membre doit approuver';
$string['guideline'] = 'visible par tous :';
$string['hidden'] = 'masqué';
$string['importfrom_err'] = 'Vous devez choisir un devoir depuis lequel importer des fichiers';
$string['maxbytes'] = 'Taille maximale de chaque fichier';
$string['maxfiles'] = 'Nombre maximal de fichiers par utilisateur/groupe';
$string['messageprovider:publication_updates'] = 'Notifications de publication';
$string['mode'] = 'Mode de fonctionnement';
$string['mode_help'] = 'Définit si les étudiants déposent des fichiers dans l’activité, ou si les travaux rendus dans une activité Devoir sont utilisés.';
$string['modeimport'] = 'utiliser les travaux rendus d’une activité Devoir';
$string['modeupload'] = 'les étudiants déposent des fichiers';
$string['modulename'] = 'Partage de fichiers';
$string['modulename_help'] = 'Le partage de fichiers permet les fonctionnements suivants :

* Les participants peuvent déposer des fichiers, qui sont rendus disponibles immédiatement ou après l’approbation de l’enseignant.
* Un devoir peut être utilisé comme source pour les fichiers, l’enseignant décidant quels fichiers sont visibles à tous les participants.

L’enseignant peut aussi décider de laisser aux participants de définir la visibilité de leurs fichiers.';
$string['modulenameplural'] = 'Partages de fichiers';
$string['myfiles'] = 'Mes fichiers';
$string['mygroupfiles'] = 'Fichiers de mon groupe';
$string['name'] = 'Nom du partage de fichiers';
$string['noentries'] = 'Aucun élément';
$string['nofiles'] = 'Aucun fichier disponible';
$string['nofilestozip'] = 'Aucun fichier à zipper';
$string['nonexistentfiletypes'] = 'Les fichiers suivants n’ont pas été reconnus: {$a}';
$string['nopublicationsincourse'] = 'Il n’existe aucune instance de partage de fichiers dans ce cours.';
$string['nothing_to_show_groups'] = 'rien à afficher - aucun groupe disponible';
$string['nothing_to_show_users'] = 'rien à afficher - aucun étudiant disponible';
$string['nothingtodisplay'] = 'Aucun élément à afficher';
$string['notice'] = 'Information :';
$string['notice_groupimportrequireallapproval'] = 'Décidez si vos fichiers doivent être visibles par tour. Tous les membres du groupe doivent donner leur approbation pour que les fichiers soient visibles.';
$string['notice_groupimportrequireoneapproval'] = 'Décidez si vos fichiers doivent être visibles par tour. L’approbation d’un membre du groupe est suffisance pour que les fichiers soient visibles. Veuillez discuter au sein de votre groupe de la visibilité de vos fichiers avant de donner votre approbation ici !';
$string['notice_importnoapproval'] = 'Les fichiers suivants sont visibles par tous.';
$string['notice_importrequireapproval'] = 'Définissez si vos fichiers sont visibles par tous';
$string['notice_uploadnoapproval'] = 'Tous les fichiers seront immédiatement visibles par tous dès leur envoi. L’enseignant peut toutefois masquer tout fichier à tout moment.';
$string['notice_uploadrequireapproval'] = 'Tous les fichiers déposés sont rendus visibles après approbation par l’enseignant';
$string['notifications'] = 'Notifications';
$string['notifystudents'] = 'Notifier les étudiants des changements approuvés';
$string['notifystudents_help'] = 'Si ce paramètre est activé, les étudiants recevront un message dès que le statut d’approbation d’un de leur document est modifié. Les méthodes de message sont paramétrables.';
$string['notifyteacher'] = 'Notifier les évaluateurs des nouveaux fichiers déposés';
$string['notifyteacher_help'] = 'Si ce paramètre est activé, les évaluateurs recevront un message quand un étudiant dépose un fichier. Les méthodes de message sont paramétrables.';
$string['obtainstudentapproval'] = 'Obtenir l’approbation';
$string['obtainstudentapproval_help'] = 'L’approbation des étudiants est-elle nécessaire ?
<br>
<ul>
<li> oui - les fichiers ne seront visibles par tous qu’après l’approbation de l’étudiant. L’enseignant peut demander l’approbation d’étudiants ou de fichiers individuels.</li>
<li> non - la visibilité des fichiers est déterminée par l’enseignant uniquement.</li>
</ul>';
$string['obtainteacherapproval'] = 'Approuvé par défaut';
$string['obtainteacherapproval_help'] = 'Les fichiers sont-ils rendus visibles immédiatement après leur dépôt ?
<br>
<ul>
<li> oui - tous les fichiers sont rendus visibles immédiatement</li>
<li> non - les fichiers ne sont rendus visibles qu’après l’approbation de l’enseignant</li>
</ul>';
$string['optionalsettings'] = 'Options';
$string['pending'] = 'En attente';
$string['pluginadministration'] = 'Administration du partage de fichiers';
$string['pluginname'] = 'Partage de fichiers';
$string['privacy:metadata:approval'] = 'Indique si le membre du groupe a approuvé ou rejeté le fichier';
$string['privacy:metadata:contenthash'] = 'Hachage SHA1 du contenu du fichier, utilisé pour déterminer si le fichier a changé';
$string['privacy:metadata:extduedates'] = 'Stocke des information sur des échéances modifiées/prolongées pour mod_publication.';
$string['privacy:metadata:extensionduedate'] = 'La date d’échéance effective pour l’utilisateur, par effet de l’octroi d’une exception/prolongation.';
$string['privacy:metadata:fileid'] = 'Identifiant du fichier';
$string['privacy:metadata:filename'] = 'Le nom du fichier';
$string['privacy:metadata:files'] = 'Stocke des informations (identifiant, propriétaire, provenance, hachage du contenu, nom du fichier et si approuvé par l’enseignant et/ou l’étudiant) sur les fichiers déposés ou importés dans mod_publication.';
$string['privacy:metadata:groupapproval'] = 'Stocke des informations sur les approbations/rejets par les membres de groupes de fichiers importés par le groupe.';
$string['privacy:metadata:publicationfileexplanation'] = 'Les fichiers et textes en ligne convertis utilisés par ce module sont stockés par l’API de stockage de fichiers de Moodle.';
$string['privacy:metadata:publicationperpage'] = 'Combien d’entrées afficher par page';
$string['privacy:metadata:studentapproval'] = 'Indique si l’étudiant a approuvé ou rejeté le fichier.';
$string['privacy:metadata:teacherapproval'] = 'Indique si l’enseignant a approuvé ou rejeté le fichier.';
$string['privacy:metadata:timecreated'] = 'L’heure et la date de création de l’enregistrement de données.';
$string['privacy:metadata:timemodified'] = 'L’heure et la date de la modification la plus récente de l’enregistrement de données.';
$string['privacy:metadata:type'] = 'Indique l’origine du fichier (déposé par l’étudiant, importé depuis un devoir de type fichier ou de type texte en ligne).';
$string['privacy:metadata:userid'] = 'Identifiant de l’utilisateur.';
$string['privacy:path:files'] = 'fichiers';
$string['privacy:path:resources'] = 'ressources';
$string['privacy:type:import'] = 'fichier importé';
$string['privacy:type:onlinetext'] = 'texte en ligne importé';
$string['privacy:type:upload'] = 'fichier déposé';
$string['publication:addinstance'] = 'Ajouter un nouveau partage de fichiers';
$string['publication:approve'] = 'Décider si les fichiers doivent être visibles par tous les étudiants';
$string['publication:grantextension'] = 'Accorder une prolongation';
$string['publication:receiveteachernotification'] = 'Recevoir des notifications pour les enseignants';
$string['publication:upload'] = 'Déposer des fichiers dans un partage de fichiers';
$string['publication:view'] = 'Voir le partage de fichiers';
$string['publicfiles'] = 'Fichiers publics';
$string['published_aftercheck'] = 'non, seulement après approbation par un enseignant';
$string['published_immediately'] = 'oui, immédiatement et sans approbation par un enseignant';
$string['rejected'] = 'Rejeté';
$string['rejectusers'] = 'Rendre non visible pour tous';
$string['requiremodintro'] = 'Exiger une description de l’activité';
$string['reset'] = 'Annuler';
$string['reset_userdata'] = 'Toutes les données';
$string['resetstudentapproval'] = 'Réinitialiser le statut';
$string['save_changes'] = 'Enregistrer les modifications';
$string['saveapproval'] = 'Enregistrer l’approbation';
$string['savestudentapprovalwarning'] = 'Voulez-vous vraiment enregistrer ces modifications ? Vous ne pourrez pas modifier le statut une fois celui-ci enregistré.';
$string['saveteacherapproval'] = 'Enregistrer approbation';
$string['search:activity'] = 'Partage de fichiers - informations sur l’activité';
$string['show_details'] = 'Montrer détails';
$string['status'] = 'Statut';
$string['status:approved'] = 'approuvé';
$string['status:approvednot'] = 'rejeté';
$string['student_approve'] = 'approuver';
$string['student_approved'] = 'approuvé';
$string['student_pending'] = 'non visible (non approuvé)';
$string['student_reject'] = 'rejeter';
$string['student_rejected'] = 'rejeté';
$string['studentapproval'] = 'Statut';
$string['studentapproval_help'] = 'Représente l’état de l’approbation par l’étudiant :

* ? - en attente
* ✓ - approuvé
* ✖ - rejeté';
$string['teacher_approved'] = 'visible (approuvé)';
$string['teacher_pending'] = 'confirmation en attente';
$string['teacher_rejected'] = 'rejeté';
$string['teacherapproval'] = 'Approbation';
$string['total'] = 'total';
$string['updatefiles'] = 'Mettre à jour les fichiers';
$string['updatefileswarning'] = 'Les fichiers de chaque étudiant seront mis à jour avec leur travail rendu dans l’activité Devoir. Les fichiers déjà visibles ici seront remplacés aussi, s’ils ont été supprimés ou modifiés. Les réglages de visibilité (approbation) de l’étudiant ne seront pas modifiés.';
$string['uploaded'] = 'Déposé';
$string['visibility'] = 'visible par tous';
$string['visible'] = 'visible';
$string['visibleforstudents'] = 'visible par tous';
$string['visibleforstudents_no'] = 'Ce fichier n’est PAS visible par les étudiants';
$string['visibleforstudents_yes'] = 'Ce fichier est visible par les étudiants';
$string['warning_changefromobtainstudentapproval'] = 'Si vous effectuez cette modifications, vous seul pourrez décider quels fichiers sont visibles par tous les étudiants. L’approbation des étudiants ne sera pas demandée. Tous les fichiers marqués comme approuvés deviendront visibles par tous les étudiants, sans prendre en compte les décisions des étudiants.';
$string['warning_changefromobtainteacherapproval'] = 'Après l’activation de ce réglage, tous les fichiers déposés seront visibles par les autres participants. Vous pourrez rendre les fichiers invisibles à certains étudiants manuellement.';
$string['warning_changetoobtainstudentapproval'] = 'Si vous effectuez cette modification, l’approbation des étudiants sera nécessaire pour tous les fichiers marqués comme visibles. Ces fichiers ne deviendront visibles qu’après l’approbation des étudiants.';
$string['warning_changetoobtainteacherapproval'] = 'Après désactivation de ce réglage, les fichiers déposés ne seront plus visibles par les autres participants automatiquement. Vous devrez déterminer quels fichiers doivent être visibles. Les fichiers déjà visibles ne le seront plus.';
$string['withselected'] = 'Avec la sélection :';
$string['zipusers'] = 'Télécharger en ZIP';
