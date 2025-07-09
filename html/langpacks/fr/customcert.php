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
 * Strings for component 'customcert', language 'fr', version '4.4'.
 *
 * @package     customcert
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity'] = 'Activité';
$string['addcertpage'] = 'Ajouter une page';
$string['addelement'] = 'Ajouter un élément';
$string['aligncenter'] = 'Centré';
$string['alignleft'] = 'Alignement gauche';
$string['alignment'] = 'Alignement';
$string['alignment_help'] = 'Cette propriété définit l’alignement horizontal de l’élément. Certains éléments peuvent ne pas prendre en charge cela, alors que le comportement d’autres éléments peut différer.';
$string['alignright'] = 'Alignement droit';
$string['awardedto'] = 'Décerné à';
$string['cannotverifyallcertificates'] = 'Vous n’avez pas le droit de vérifier l’ensemble des certificats.';
$string['certificate'] = 'Certificat';
$string['certificateexecutionperiod'] = 'Période de traitement des certificats';
$string['certificateexecutionperiod_desc'] = 'Si la valeur est différente de 0, la tâche ne traitera pas les certificats dont le cours est inactif ou dont la dernière émission est antérieure au délai configuré. Cela peut contribuer à améliorer les performances de la tâche programmée.';
$string['certificatesperrun'] = 'Nombre de certificats par exécution';
$string['certificatesperrun_desc'] = 'Saisir le nombre de certificats à traiter par exécution de tâche programmée, où 0 signifie que tous les certificats seront traités dans la même tâche.';
$string['code'] = 'Code de contrôle';
$string['copy'] = 'Copier';
$string['coursetimereq'] = 'Temps passé requis (min)';
$string['coursetimereq_help'] = 'Saisir le temps minimum requis, en minutes, que l’étudiant devra passer dans le cours avant de pouvoir obtenir le certificat.';
$string['createtemplate'] = 'Créer un modèle';
$string['customcert:addinstance'] = 'Ajouter une instance de certificat';
$string['customcert:manage'] = 'Modifier un certificat';
$string['customcert:manageemailothers'] = 'Gérer les paramètres des courriels aux autres';
$string['customcert:manageemailstudents'] = 'Gérer les paramètres des courriels aux étudiants';
$string['customcert:manageemailteachers'] = 'Gérer les paramètres des courriels aux enseignants';
$string['customcert:managelanguages'] = 'Gérer la langue du le formulaire de modification';
$string['customcert:manageprotection'] = 'Gérer les paramètres de protection';
$string['customcert:managerequiredtime'] = 'Gérer les paramètres de temps requis';
$string['customcert:manageverifyany'] = 'Gérer les paramètres de vérification';
$string['customcert:receiveissue'] = 'Recevoir le certificat';
$string['customcert:verifyallcertificates'] = 'Vérifier l’ensemble des certificats';
$string['customcert:verifycertificate'] = 'Vérifier le certificat';
$string['customcert:view'] = 'Afficher le certificat';
$string['customcert:viewallcertificates'] = 'Visualiser les certificats';
$string['customcert:viewreport'] = 'Visualiser le rapport du cours';
$string['customcertsettings'] = 'Paramètres de certificats personnalisés';
$string['deletecertpage'] = 'Supprimer la page';
$string['deleteconfirm'] = 'Confirmation de la suppression';
$string['deleteelement'] = 'Supprimer l’élément';
$string['deleteelementconfirm'] = 'Voulez-vous vraiment supprimer cet élément ?';
$string['deleteissueconfirm'] = 'Voulez-vous vraiment supprimer ce certificat émis ?';
$string['deleteissuedcertificates'] = 'Supprimer les certificats émis';
$string['deletepageconfirm'] = 'Voulez-vous vraiment supprimer cette page du certificat ?';
$string['deletetemplateconfirm'] = 'Voulez-vous vraiment supprimer ce modèle du certificat ?';
$string['deliveryoptiondownload'] = 'Envoyer au navigateur et forcer le téléchargement du fichier';
$string['deliveryoptioninline'] = 'Envoyer le fichier en ligne au navigateur';
$string['deliveryoptions'] = 'Option de remise';
$string['description'] = 'Description';
$string['downloadallissuedcertificates'] = 'Télécharger tous les certificats émis';
$string['downloadallsitecertificates'] = 'Télécharger tous les certificats du site';
$string['downloadallsitecertificatesdesc'] = 'Cela téléchargera tous les certificats du site dans un fichier zip.';
$string['duplicate'] = 'Doublon';
$string['duplicateconfirm'] = 'Doublon de confirmation';
$string['duplicatetemplateconfirm'] = 'Voulez-vous vraiment dupliquer ce modèle de certificat ?';
$string['editcustomcert'] = 'Modifier le certificat';
$string['editelement'] = 'Modifier l’élément';
$string['edittemplate'] = 'Modifier le modèle';
$string['elementheight'] = 'Hauteur';
$string['elementheight_help'] = 'Spécifier la hauteur de l’élément. Si « 0 » est autorisé, la hauteur est automatiquement calculée.';
$string['elementname'] = 'Nom de l’élément';
$string['elementname_help'] = 'Ce nom sera utilisé pour identifier cet élément lors de l’édition d’un certificat. Remarque : ce nom ne sera pas affiché sur le PDF.';
$string['elementplugins'] = 'Plugins des éléments';
$string['elements'] = 'Éléments';
$string['elements_help'] = 'La liste des éléments qui s’afficheront sur le certificat.

Veuillez noter que les éléments sont rendu en ordre. L’ordre peut être modifié en utilisant les flèches à droite de chacun des éléments.';
$string['elementwidth'] = 'Largeur';
$string['elementwidth_help'] = 'Spécifier la largeur de l’élément - \'0\' signifie qu’il n’y a aucune contrainte.';
$string['emailnonstudentbody'] = 'Ci-joint le certificat « {$a->certificatename} » de « {$a->userfullname} » pour le cours « {$a->coursefullname} ».';
$string['emailnonstudentbodyplaintext'] = 'Ci-joint le certificat « {$a->certificatename} » de « {$a->userfullname} » pour le cours « {$a->coursefullname} ».';
$string['emailnonstudentcertificatelinktext'] = 'Visualiser le rapport du certificat';
$string['emailnonstudentgreeting'] = 'Bonjour';
$string['emailnonstudentsubject'] = '{$a->coursename} : {$a->certificatename}';
$string['emailothers'] = 'Envoyer une copie du certificat par courriel à d’autres';
$string['emailothers_help'] = 'Si ce champ est renseigné, il enverra par courriel aux adresses indiquées ici (séparées par une virgule) une copie du certificat lorsqu’il sera disponible. <strong>Avertissement</strong> : définir ce champ avant d’avoir fini de créer le certificat enverra aux adresses un certificat incomplet.';
$string['emailstudentbody'] = 'Ci-joint votre certificat « {$a->certificatename} » pour le cours « {$a->coursefullname} ».';
$string['emailstudentbodyplaintext'] = 'Ci-joint votre certificat « {$a->certificatename} » pour le cours « {$a->coursefullname} ».';
$string['emailstudentcertificatelinktext'] = 'Visualiser le certificat';
$string['emailstudentgreeting'] = 'Cher, chère {$a}';
$string['emailstudents'] = 'Envoyer une copie du certificat par courriel aux étudiants';
$string['emailstudents_help'] = 'Si cette option est définie, les étudiants recevront par courriel une copie du certificat lorsqu’il sera disponible. <strong>Avertissement</strong> : si vous définissez cette option sur « Oui » avant d’avoir fini de créer le certificat, vous enverrez à l’étudiant un certificat incomplet.';
$string['emailstudentsubject'] = '{$a->coursename} : {$a->certificatename}';
$string['emailteachers'] = 'Envoyer un courriel aux enseignants';
$string['emailteachers_help'] = 'Si cette option est définie, les enseignants recevront par courriel une copie du certificat lorsqu’il sera disponible. <strong>Avertissement</strong> : si vous définissez cette option sur « Oui » avant d’avoir fini de créer le certificat, vous enverrez à l’enseignant un certificat incomplet.';
$string['eventelementcreated'] = 'Élément de certificat personnalisé créé';
$string['eventelementdeleted'] = 'Élément de certificat personnalisé supprimé';
$string['eventelementupdated'] = 'Élément de certificat personnalisé mis à jour';
$string['eventpagecreated'] = 'Page de certificat personnalisé créée';
$string['eventpagedeleted'] = 'Page de certificat personnalisé supprimée';
$string['eventpageupdated'] = 'Page de certificat personnalisé mise à jour';
$string['eventtemplatecreated'] = 'Modèle de certificat personnalisé créé';
$string['eventtemplatedeleted'] = 'Modèle de certificat personnalisé supprimé';
$string['eventtemplateupdated'] = 'Modèle de certificat personnalisé mis à jour';
$string['exampledatawarning'] = 'Certaines de ces valeurs sont fournies à titre d’exemple afin de vérifier que le positionnement des éléments est possible.';
$string['font'] = 'Police';
$string['font_help'] = 'La police utilisée pour cet élément.';
$string['fontcolour'] = 'Couleur';
$string['fontcolour_help'] = 'La couleur de la police.';
$string['fontsize'] = 'Taille de police';
$string['fontsize_help'] = 'La taille de la police en points.';
$string['getcustomcert'] = 'Afficher le certificat';
$string['gradeoutcome'] = 'Objectifs';
$string['height'] = 'Hauteur';
$string['height_help'] = 'La hauteur du certificat PDF en mm. Comme référence, une feuille de papier A4 est 297mm de haut et une lettre est 279mm de haut.';
$string['includeinnotvisiblecourses'] = 'Inclut les certificats des cours cachés';
$string['includeinnotvisiblecourses_desc'] = 'Les certificats des cours cachés ne sont pas traités par défaut. Si vous souhaitez les inclure, activez ce paramètre.';
$string['invalidcode'] = 'Le code fourni est non valide.';
$string['invalidcolour'] = 'La couleur choisie est non valide, veuillez saisir un nom de couleur HTML valide, ou une couleur hexadécimale à 3 ou 6 caractères.';
$string['invalidelementwidthorheightnotnumber'] = 'Veuillez saisir un nombre valide.';
$string['invalidelementwidthorheightzeroallowed'] = 'Veuillez saisir un nombre supérieur ou égal à 0.';
$string['invalidelementwidthorheightzeronotallowed'] = 'Veuillez saisir un nombre supérieur à 0.';
$string['invalidheight'] = 'La hauteur doit être un nombre valide plus grand que 0.';
$string['invalidmargin'] = 'La marge doit être un nombre valide plus grand que 0.';
$string['invalidposition'] = 'Veuillez choisir un nombre positif pour la position {$a}.';
$string['invalidwidth'] = 'La largeur doit être un nombre plus grand que 0.';
$string['landscape'] = 'Arrière plan';
$string['languageoptions'] = 'Imposer la langue du certificat';
$string['leftmargin'] = 'Marge de gauche';
$string['leftmargin_help'] = 'La marge de gauche du certificat en mm.';
$string['listofissues'] = 'Destinataires : {$a}';
$string['load'] = 'Charger';
$string['loadtemplate'] = 'Choisir un modèle';
$string['loadtemplatemsg'] = 'Voulez-vous vraiment charger ce modèle ? Vos pages et vos éléments personnalisés seront supprimés.';
$string['managetemplates'] = 'Administration des modèles';
$string['managetemplatesdesc'] = 'Ce lien vous mènera à un nouvel écran, dans l’administration du site, où vous pourrez gérer les modèles utilisés par l’activité « Certificat personnalisé » dans les cours.';
$string['modify'] = 'Modifier';
$string['modulename'] = 'Certificat personnalisé';
$string['modulename_help'] = 'Ce module permet la génération dynamique de certificat en format PDF.';
$string['modulename_link'] = 'Custom_certificate_module';
$string['modulenameplural'] = 'Certificats personnalisés';
$string['mycertificates'] = 'Mes certificats';
$string['mycertificatesdescription'] = 'Vous trouverez ici les certificats qui vous ont été délivrés par courriel ou que vous avez téléchargés.';
$string['name'] = 'Nom';
$string['nametoolong'] = 'Vous avez dépassé le maximum de caractères permis pour le nom';
$string['nocustomcerts'] = 'Il n’y a pas de certificat personnalisé pour ce cours';
$string['noimage'] = 'Aucune image';
$string['norecipients'] = 'Aucun destinataire';
$string['notemplates'] = 'Aucun modèle';
$string['notissued'] = 'Non attribué';
$string['notverified'] = 'Non vérifié';
$string['numbersuffix_nd_as_in_second'] = 'ème';
$string['numbersuffix_rd_as_in_third'] = 'ème';
$string['numbersuffix_st_as_in_first'] = 'er';
$string['options'] = 'Options';
$string['page'] = 'Page {$a}';
$string['pluginadministration'] = 'Administration du certificat personnalisé';
$string['pluginname'] = 'Certificat personnalisé';
$string['portrait'] = 'Portrait';
$string['posx'] = 'Position X';
$string['posx_help'] = 'La position en mm sur l’axe des x (en partant du coin haut gauche) où vous désirez que le point de référence de l’élément se positionne.';
$string['posy'] = 'Position Y';
$string['posy_help'] = 'La position en mm sur l’axe des y (en partant du coin haut gauche) où vous désirez que le point de référence de l’élément se positionne.';
$string['preventcopy'] = 'Empêcher la copie';
$string['preventcopy_desc'] = 'Activer la protection contre les copies.';
$string['preventmodify'] = 'Empêcher la modification';
$string['preventmodify_desc'] = 'Activer la protection contre les modifications.';
$string['preventprint'] = 'Empêcher l’impression';
$string['preventprint_desc'] = 'Activer la protection contre l’impression.';
$string['print'] = 'Imprimer';
$string['privacy:metadata:customcert_issues'] = 'Liste des certificats émis';
$string['privacy:metadata:customcert_issues:code'] = 'Code appartenant au certificat';
$string['privacy:metadata:customcert_issues:customcertid'] = 'L’ID du certificat';
$string['privacy:metadata:customcert_issues:emailed'] = 'Indique si le certificat a été envoyé par courriel';
$string['privacy:metadata:customcert_issues:timecreated'] = 'La date et l’heure d’émission du certificat';
$string['privacy:metadata:customcert_issues:userid'] = 'L’ID de l’utilisateur qui a émis le certificat';
$string['rearrangeelements'] = 'Repositionner les éléments';
$string['rearrangeelementsheading'] = 'Glisser et déposer les éléments pour changer leur position sur le certificat.';
$string['receiveddate'] = 'Attribué le';
$string['refpoint'] = 'Point de référence de la position';
$string['refpoint_help'] = 'Le point de référence est l’emplacement d’un élément duquel les coordonnées x et y sont déterminées. Il est indiqué par un \'+\' qui apparaît à un coin ou au centre d’un élément.';
$string['replacetemplate'] = 'Remplacer';
$string['requiredtimenotmet'] = 'Vous devez passer au minimum {$a->requiredtime} minutes dans le cours avant de pouvoir accéder au certificat.';
$string['rightmargin'] = 'Marge de droite';
$string['rightmargin_help'] = 'La marge de droite du certificat en mm.';
$string['save'] = 'Enregistrer';
$string['saveandclose'] = 'Enregistrer et fermer';
$string['saveandcontinue'] = 'Enregistrer et continuer';
$string['savechanges'] = 'Enregistrer';
$string['savechangespreview'] = 'Enregistrer et prévisualiser';
$string['savetemplate'] = 'Enregistrer le modèle';
$string['scheduledtaskconfigdesc'] = 'Configurer les paramètres de la tâche planifiée qui traite les certificats.';
$string['scheduledtaskconfigheading'] = 'Configuration des tâches planifiées';
$string['search:activity'] = 'Certificat personnalisé - information de l’activité';
$string['setprotection'] = 'Régler une protection';
$string['setprotection_help'] = 'Choisir les actions sur le certificat que vous souhaitez interdire à vos utilisateurs.';
$string['showposxy'] = 'Afficher la position X et Y';
$string['showposxy_desc'] = 'Cela affichera la position X et Y lors de l’édition d’un élément, permettant à l’utilisateur de spécifier avec précision l’emplacement.

Ceci n’est pas nécessaire si vous prévoyez d’utiliser uniquement l’interface de glisser-déposer à cette fin.';
$string['subplugintype_customcertelement'] = 'Élément';
$string['subplugintype_customcertelement_plural'] = 'Éléments';
$string['taskemailcertificate'] = 'S’occupe d’envoyer par courriel les certificats.';
$string['taskissuecertificate'] = 'Tâche d\'émission des certificats';
$string['templatename'] = 'Nom du modèle';
$string['templatenameexists'] = 'Ce nom de modèle est déjà utilisé, veuillez en choisir un autre.';
$string['topcenter'] = 'Centre';
$string['topleft'] = 'En haut à gauche';
$string['topright'] = 'En haut à droite';
$string['type'] = 'Type';
$string['uploadimage'] = 'Déposer une image';
$string['uploadimagedesc'] = 'Ce lien vous mènera à un nouvel écran où vous pourrez télécharger des images. Les images téléchargées ainsi seront disponibles sur votre cours pour tous les utilisateurs qui peuvent créer un certificat personnalisé.';
$string['useadhoc'] = 'Utiliser la tâche ad hoc pour l’envoi par courriel du certificat';
$string['useadhoc_desc'] = 'Si ce réglage est activé, les courriels liés aux certificats seront envoyés immédiatement via une tâche ad hoc créée pour chaque activité. Sinon, les courriels seront gérés par la tâche programmée.

L’activation de cette option peut améliorer les performances en déchargeant le traitement d’envoi des courriels vers les tâches ad hoc.';
$string['userlanguage'] = 'Utiliser les préférences utilisateur';
$string['userlanguage_help'] = 'Vous pouvez forcer la langue du certificat pour remplacer les préférences linguistiques de l’utilisateur.';
$string['verified'] = 'Vérifié';
$string['verify'] = 'Vérifier';
$string['verifyallcertificates'] = 'Autoriser la vérification de l’ensemble des certificats';
$string['verifyallcertificates_desc'] = 'Si ce réglage est activé, n’importe quel utilisateur (y compris les utilisateurs non connectés) peut visiter le lien « {$a} » afin de vérifier n’importe quel certificat sur le site, plutôt que de devoir suivre le lien pour chaque certificat.

Remarque : ceci ne s’applique qu’aux certificats pour lesquels « Permettre à quiconque de vérifier un certificat » a été activé dans les réglages du certificat.';
$string['verifycertificate'] = 'Vérifier le certificat';
$string['verifycertificateanyone'] = 'Permettre à quiconque de vérifier un certificat';
$string['verifycertificateanyone_help'] = 'Ce paramètre permet à quiconque possédant le lien de vérification de certificat (y compris les utilisateurs qui ne sont pas connectés) de vérifier un certificat.';
$string['verifycertificatedesc'] = 'Ce lien vous mènera à un nouvel écran vous permettant de vérifier les certificats sur le site';
$string['width'] = 'Largeur';
$string['width_help'] = 'La largeur du certificat PDF en mm. Comme référence, une feuille de papier A4 est 297mm de haut et une lettre est 279mm de haut.';
