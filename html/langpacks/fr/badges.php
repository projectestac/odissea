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
 * Strings for component 'badges', language 'fr', version '4.4'.
 *
 * @package     badges
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['activate'] = 'Activer l’accès';
$string['activatesuccess'] = 'L’accès aux badges a été activé.';
$string['addalignment'] = 'Ajouter une aptitude externe ou un standard';
$string['addbadge'] = 'Ajouter des badges';
$string['addbadge_help'] = 'Sélectionner tous les badges devant être ajoutés comme requis pour obtenir ce badge. Utilisez la touche CTRL ou CMD pour sélectionner plusieurs éléments.';
$string['addbadgecriteria'] = 'Ajouter un critère de badge';
$string['addcohort'] = 'Ajouter une cohorte';
$string['addcohort_help'] = 'Sélectionner toutes les cohortes à ajouter à ce critère de badge. Les sélections multiples sont possibles.';
$string['addcompetency'] = 'Ajouter une compétence';
$string['addcompetency_help'] = 'Sélectionner toutes les compétences qui doivent être ajoutées aux exigences pour ce badge. Il est possible de sélectionner plusieurs éléments.';
$string['addcourse'] = 'Ajouter des cours';
$string['addcourse_help'] = 'Sélectionner tous les cours à ajouter à ce critère de badge. Les sélections multiples sont possibles.';
$string['addcriteria'] = 'Ajouter des critères';
$string['addcriteriatext'] = 'Pour ajouter des critères, veuillez sélectionner une des options du menu déroulant.';
$string['addedtobackpack'] = 'Badge ajouté au sac à badges';
$string['addrelated'] = 'Ajouter un badge associé';
$string['addtobackpack'] = 'Ajouter au sac à badges';
$string['adminonly'] = 'L’accès à cette page est restreint aux administrateurs du site.';
$string['after'] = 'après la date de la remise.';
$string['aggregationmethod'] = 'Méthode de combinaison';
$string['alignment'] = 'Recouvrement';
$string['all'] = 'Tout';
$string['allmethod'] = 'Toutes les conditions sélectionnées sont satisfaites';
$string['allmethodactivity'] = 'Toutes les activités sélectionnées sont achevées';
$string['allmethodbadges'] = 'Tous les badges sélectionnés doivent avoir été obtenus';
$string['allmethodcohort'] = 'Appartenance à toutes les cohortes sélectionnées';
$string['allmethodcompetencies'] = 'Toutes les compétences sélectionnées doivent être acquises';
$string['allmethodcourseset'] = 'Tous les cours sélectionnés sont achevés';
$string['allmethodmanual'] = 'Tous les rôles sélectionnés délivrent le badge';
$string['allmethodprofile'] = 'Tous les champs de profil sélectionnés ont été renseignés';
$string['allowcoursebadges'] = 'Activer les badges de cours';
$string['allowcoursebadges_desc'] = 'Autoriser la création et la remise de badges dans le contexte des cours.';
$string['allowexternalbackpack'] = 'Connexion de sac à badges externe';
$string['allowexternalbackpack_desc'] = 'Si ce réglage est activé, les utilisateurs peuvent se connecter à un sac à badges externe à partir de ce site. Les utilisateurs peuvent également choisir d’afficher sur leur page de profil n’importe quel badge d’une collection publique de leur sac à badges externe. Il est recommandé de ne pas activer cette option si le site est ne peut pas être atteint depuis Internet.';
$string['any'] = 'Une';
$string['anymethod'] = 'Une des conditions sélectionnées est satisfaite';
$string['anymethodactivity'] = 'Une des activités sélectionnées est achevée';
$string['anymethodbadges'] = 'Au moins un des badges sélectionnés doit avoir été obtenu';
$string['anymethodcohort'] = 'Appartenance à l’une des cohortes sélectionnées';
$string['anymethodcompetencies'] = 'Au moins une des compétences sélectionnées doit être acquise';
$string['anymethodcourseset'] = 'Un des cours sélectionnés est achevé';
$string['anymethodmanual'] = 'Un des rôles sélectionnés délivre le badge';
$string['anymethodprofile'] = 'Un des champs de profil sélectionnés a été renseigné';
$string['apiversion'] = 'Version de l’API prise en charge';
$string['archivebadge'] = 'Voulez-vous supprimer le badge « {$a} », tout en conservant les badges déjà délivrés ?';
$string['archiveconfirm'] = 'Supprimer et conserver les badges délivrés';
$string['archivehelp'] = '<p>Cette option signifie que le badge sera marqué comme « retiré » et n’apparaîtra plus dans la liste des badges. Les utilisateurs ne pourront plus obtenir ce badge, mais ceux à qui il a déjà été délivré seront toujours capables de l’afficher sur leur page de profil et de l’exporter dans un sac à badge externe.</p>
<p>Si vous souhaitez que les utilisateurs conservent un accès aux badges qu’ils ont déjà obtenus, il est important de choisir cette option, et pas celle qui supprime complètement le badge</p>';
$string['attachment'] = 'Joindre le badge à un courriel';
$string['attachment_help'] = 'Si ce réglage est activé, un badge délivré sera joint au courriel du destinataire pour téléchargement (pour pouvoir utiliser cette option, les annexes de courriel doivent être activées sous Administration du site / Serveur / Courriel / Configuration du courriel sortant).';
$string['award'] = 'Délivrer le badge';
$string['awardedto'] = 'Délivré à {$a}';
$string['awardedtoyou'] = 'Délivré à moi';
$string['awardoncron'] = 'L’accès aux badges a été activé. Trop d’utilisateurs peuvent obtenir ce badge instantanément. Pour préserver la performance du site, cette action prendra un certain temps.';
$string['awards'] = 'Détenteurs';
$string['backpackapiurl'] = 'URL API sac à badges';
$string['backpackavailability'] = 'Vérification externe des badges';
$string['backpackavailability_help'] = 'Afin que les utilisateurs qui reçoivent des badges puissent démontrer qu’ils ont obtenus leurs badges sur ce site, un service de sac à badges externe doit pouvoir accéder à votre site et vérifier les badges y étant délivrés. Votre site semble actuellement ne pas pouvoir être atteint, ce qui a pour conséquence que les badges que vous avez délivrés ou que vous délivrerez ne peuvent pas être vérifiés.

**Pourquoi ce message est-il affiché ?**

Il se peut que votre pare-feu empêche l’accès à des utilisateurs en dehors de votre réseau, que votre site soit protégé par un mot de passe ou que votre site tourne sur un ordinateur qui ne peut pas être atteint depuis Internet (par exemple sur une machine de développement).

**Est-ce que c’est un problème ?**

Vous devez régler ce problème si votre site et en production et que vous planifiez d’y délivrer des badges. Sans cela, les utilisateurs qui reçoivent des badges ne pourront pas prouver qu’ils ont obtenu leurs badges sur ce site. Si votre site n’est pas encore en production, vous pouvez créer et délivrer des badges de test. L’important est que le site soit atteignable quand vous partez en production.

**Que faire si je ne peux pas rendre le site publiquement accessible ?**

La seule URL requise pour la vérification est <votre-URL-de-site>/badges/assertion.php. Si vous pouvez donc modifier les réglages de votre pare-feu pour permettre l’accès externe à ce fichier, la vérification des badges fonctionnera.';
$string['backpackbadgessettings'] = 'Modifier les réglages du sac à badges';
$string['backpackbadgessummary'] = 'Vous avez {$a->totalbadges} badge(s) affichés, tirés de {$a->totalcollections} collection(s).';
$string['backpackcannotsendverification'] = 'Impossible d’envoyer le courriel de vérification';
$string['backpackconnected'] = 'Le sac a badges est connecté';
$string['backpackconnection'] = 'Se connecter à un sac à badges';
$string['backpackconnection_connected'] = 'Votre sac à badges';
$string['backpackconnection_help'] = 'Enregistrer et partager vos badges obtenus sur ce site et afficher des badges publics d’autres sites sur votre profil utilisateur.';
$string['backpackconnectioncancelattempt'] = 'Se connecter avec une adresse de courriel différente';
$string['backpackconnectionconnect'] = 'Se connecter au sac à badges';
$string['backpackconnectionnottested'] = 'La connexion à ce sac à badges ne peut pas être testée : seuls les sacs à badges Open Badges v2.0 le permettent.';
$string['backpackconnectionok'] = 'Connexion au sac à badges établie avec succès';
$string['backpackconnectionresendemail'] = 'Envoyer à nouveau le courriel de vérification';
$string['backpackconnectionunexpectedmessage'] = 'Le sac à badges a renvoyé l’erreur : « {$a} ».';
$string['backpackconnectionunexpectedresult'] = 'Un problème est survenu lors de la connexion à votre sac à badges. Votre fournisseur de sac à badges a retourné ce message : « {$a} ».';
$string['backpackdetails'] = 'Réglages du sac à badges';
$string['backpackdisconnected'] = 'Le sac a badges est déconnecté';
$string['backpackemail'] = 'Adresse de courriel';
$string['backpackemail_help'] = 'Adresse de courriel associée à votre sac à badges. Lorsque vous êtes connecté, tous les badges reçus sur ce site seront associés à cette adresse de courriel.';
$string['backpackemail_required'] = 'L’adresse de courriel ne peut pas être vide';
$string['backpackemailverificationpending'] = 'Vérification en attente';
$string['backpackemailverifyemailbody'] = 'Bonjour,

La connexion à votre sac à badges sur « {$a->sitename} » est presque terminée.

Pour terminer la connexion à votre sac à badges, veuillez vérifier votre adresse de courriel en cliquant sur ce bouton

{$a->buttonlink}

Si le bouton ne fonctionne pas, copiez et collez l’URL ci-dessous dans votre navigateur web :
{$a->link}

Si vous n’avez pas entrepris cette démarche, vous pouvez ignorer ce message.

Pour plus d’aide, veuillez contacter l’assistance de votre site,
{$a->admin}';
$string['backpackemailverifyemailsubject'] = '{$a} : vérification de courriel sac à badges';
$string['backpackemailverifypending'] = 'Nous avons envoyé un message à l’adresse <strong>{$a}</strong>. Cliquer sur le lien de vérification de ce message pour activer la connexion à votre sac à badge.';
$string['backpackemailverifysuccess'] = 'Vous êtes maintenant connecté à votre sac à badges.';
$string['backpackemailverifytokenmismatch'] = 'Le jeton dans le lien que vous avez cliqué ne correspond pas au jeton enregistré. Assurez-vous de cliquer sur le lien indiqué dans le courriel le plus récent que vous avez reçu.';
$string['backpackexporterror'] = 'Impossible d’exporter le badge dans le sac à badges';
$string['backpackexporterrorwithinfo'] = 'Impossible d’exporter le badge « {$a->badgename} » vers le sac à badges. Erreur : {$a->error}';
$string['backpackimport'] = 'Réglages d’importation de badges';
$string['backpackimport_help'] = 'Une fois établie la connexion à votre sac à badges, les badges de votre sac à badges peuvent être affichés sur votre page de badges et sur votre page de profil.

Vous pouvez sélectionner ici les collections de badges de votre sac à badges que vous désirez afficher dans votre profil.';
$string['backpackprovider'] = 'Fournisseur de sac à badges';
$string['backpacksettings'] = 'Réglages sac à badges';
$string['backpackweburl'] = 'URL sac à badges';
$string['badgedetails'] = 'Description du badge';
$string['badgeimage'] = 'Image';
$string['badgeimage_help'] = 'L’image doit avoir une taille d’au moins 300 x 300 pixels. Elle sera affichée en 300 x 300 px sur la page du badge et en 100 x 100 px sur la page de profil de l’utilisateur.';
$string['badgeissued'] = 'Badge délivré';
$string['badgeprivacysetting'] = 'Réglages de confidentialité des badges';
$string['badgeprivacysetting_help'] = 'Les badges que vous recevez peuvent être affichés sur votre page de profil. Ce réglage détermine si les nouveaux badges obtenus sont automatiquement visibles.

Vous pouvez régler la confidentialité de chaque badge sur votre page de badges.';
$string['badgeprivacysetting_str'] = 'Afficher automatiquement mes nouveaux badges sur ma page de profil.';
$string['badges'] = 'Badges';
$string['badgesalt'] = 'Sel de hachage pour l’adresse de courriel du destinataire';
$string['badgesalt_desc'] = 'L’utilisation d’un sel de hachage permet aux services de sacs à badges de confirmer le détenteur du badge sans exposer son adresse de courriel. Ce champ ne doit comporter que des chiffres et des lettres.

Il est important de ne pas modifier ce réglage une fois l’émission de badges initiée.';
$string['badgesdisabled'] = 'Les badges ne sont pas activés sur ce site.';
$string['badgesearned'] = 'Nombre de badges obtenus : {$a}';
$string['badgesettings'] = 'Réglages des badges';
$string['badgestatus_0'] = 'Non disponible';
$string['badgestatus_1'] = 'Disponible';
$string['badgestatus_2'] = 'Non disponible (critère verrouillé)';
$string['badgestatus_3'] = 'Disponible (critère verrouillé)';
$string['badgestatus_4'] = 'Archivé';
$string['badgestoearn'] = 'Nombre de badges disponibles : {$a}';
$string['badgesview'] = 'Badges de cours';
$string['badgetags'] = 'Tags de badge';
$string['badgeurl'] = 'Lien du badge délivré';
$string['balignment'] = 'Recouvrements ({$a})';
$string['bawards'] = 'Détenteurs ({$a})';
$string['bcriteria'] = 'Critères';
$string['bdetails'] = 'Modifier la description';
$string['bendorsement'] = 'Approbation';
$string['bmessage'] = 'Message';
$string['boverview'] = 'Vue d’ensemble';
$string['brelated'] = 'Badges associés ({$a})';
$string['bydate'] = ' obtenue avant le';
$string['claim'] = 'Revendication';
$string['claimcomment'] = 'Commentaire d’approbation';
$string['claimid'] = 'URL de revendication';
$string['clearsettings'] = 'Effacer les réglages';
$string['completioninfo'] = 'Ce badge a été délivré pour l’achèvement :';
$string['completionnotenabled'] = 'L’achèvement de cours n’est pas activé dans ce cours, et ne peut donc pas être inclus comme critère de badge. L’achèvement de cours peut être activé dans les réglages du cours.';
$string['configenablebadges'] = 'Si ce réglage est activé, vous pouvez créer des badges et les délivrer à des utilisateurs du site.';
$string['configuremessage'] = 'Message de badge';
$string['connect'] = 'Connecter';
$string['connected'] = 'Connecté';
$string['connecting'] = 'Connexion…';
$string['contact'] = 'Contact';
$string['contact_help'] = 'Une adresse de courriel associée à l’émetteur de badge.';
$string['copy'] = 'Copier';
$string['copyof'] = 'Copie de {$a}';
$string['course'] = 'Cours : {$a}';
$string['coursebadges'] = 'Badges';
$string['coursebadgesdisabled'] = 'Les badges de cours ne sont pas activés sur ce site.';
$string['coursebadgetitle'] = 'Badge de cours {$a}';
$string['coursecompletion'] = 'Les participants doivent achever ce cours.';
$string['create'] = 'Nouveau badge';
$string['createbutton'] = 'Créer un badge';
$string['creatorbody'] = '<p>{$a->user} a satisfait tous les critères requis pour obtenir le badge, qui lui a été délivré. Le badge délivré peut être consulté ici {$a->link}</p>';
$string['creatorsubject'] = '« {$a} » a été délivré !';
$string['criteria_0'] = 'Ce badge est délivré lorsque…';
$string['criteria_1'] = 'Achèvement d’activité';
$string['criteria_1_help'] = 'Permet de délivrer un badge sur la base de l’achèvement d’un ensemble d’activités d’un cours.';
$string['criteria_2'] = 'Attribution manuelle par rôle';
$string['criteria_2_help'] = 'Permet de délivrer un badge manuellement, par des utilisateurs ayant un rôle déterminé dans le site ou dans un cours.';
$string['criteria_3'] = 'Participation sociale';
$string['criteria_3_help'] = 'Social';
$string['criteria_4'] = 'Achèvement de cours';
$string['criteria_4_help'] = 'Permet de délivrer un badge à des utilisateurs qui ont achevé le cours. Ce critère peut avoir d’autres paramètres, tels que l’obtention d’une note minimale ou une date pour l’achèvement du cours.';
$string['criteria_5'] = 'Achèvement d’un ensemble de cours';
$string['criteria_5_help'] = 'Permet de délivrer un badge à des utilisateurs qui ont achevé un ensemble de cours. Chaque cours peut avoir d’autres paramètres, tels que l’obtention d’une note minimale ou une date pour l’achèvement du cours.';
$string['criteria_6'] = 'Renseignement du profil';
$string['criteria_6_help'] = 'Permet de délivrer un badge à des utilisateurs qui ont renseigné certains champs de leur profil. Il est possible de sélectionner parmi les champs par défaut ou personnalisés disponibles.';
$string['criteria_7'] = 'Badges délivrés';
$string['criteria_7_help'] = 'Permet de délivrer un badge à des utilisateurs sur la base d’autres badges qu’ils ont déjà obtenus.';
$string['criteria_8'] = 'Appartenance à une cohorte';
$string['criteria_8_help'] = 'Permet de délivrer un badge à des utilisateurs sur la base de leur appartenance à une cohorte.';
$string['criteria_9'] = 'Compétences';
$string['criteria_9_help'] = 'Permet de délivrer un badge à des utilisateurs sur la base de compétences qu’ils ont acquises.';
$string['criteria_descr'] = 'Les participants se voient délivrer ce badge lorsqu’ils satisfont les critères suivants :';
$string['criteria_descr_0'] = 'Terminer <strong>{$a}</strong> parmi les critères listés.';
$string['criteria_descr_1'] = '<strong>{$a}</strong> des activités suivantes sont terminées :';
$string['criteria_descr_2'] = 'Ce badge doit être délivré par les utilisateurs ayant <strong>{$a}</strong> des rôles suivants :';
$string['criteria_descr_4'] = 'Les participants doivent achever le cours';
$string['criteria_descr_5'] = '<strong>{$a}</strong> des cours suivants doivent être terminés :';
$string['criteria_descr_6'] = '<strong>{$a}</strong> des champs du profil utilisateur doivent être renseignés :';
$string['criteria_descr_7'] = '<strong>{$a}</strong> des badges suivants doit avoir été obtenu :';
$string['criteria_descr_8'] = 'L’appartenance à <strong>{$a}</strong> des cohortes suivantes est requise :';
$string['criteria_descr_9'] = '<strong>{$a}</strong> des compétences suivantes ont été acquises :';
$string['criteria_descr_bydate'] = ' avant le <em>{$a}</em>';
$string['criteria_descr_grade'] = ' avec une note minimale de <em>{$a}</em>';
$string['criteria_descr_short0'] = 'Achever <strong>{$a}</strong> parmi :';
$string['criteria_descr_short1'] = 'Achever <strong>{$a}</strong> parmi :';
$string['criteria_descr_short2'] = 'Délivré par <strong>{$a}</strong> parmi :';
$string['criteria_descr_short4'] = 'Achever le cours';
$string['criteria_descr_short5'] = 'Achever <strong>{$a}</strong> parmi :';
$string['criteria_descr_short6'] = 'Renseigner <strong>{$a}</strong> parmi :';
$string['criteria_descr_short7'] = 'Achever <strong>{$a}</strong> parmi :';
$string['criteria_descr_short8'] = 'Appartenance à <strong>{$a}</strong> cohorte parmi :';
$string['criteria_descr_short9'] = 'Acquérir <strong>{$a}</strong> parmi :';
$string['criteria_descr_single_1'] = 'L’activité suivante doit être terminée :';
$string['criteria_descr_single_2'] = 'Ce badge doit être délivré par un utilisateur avec le rôle suivant :';
$string['criteria_descr_single_4'] = 'Les participants doivent achever le cours';
$string['criteria_descr_single_5'] = 'Le cours suivant doit être terminé :';
$string['criteria_descr_single_6'] = 'Le champ du profil utilisateur suivant doit être renseigné :';
$string['criteria_descr_single_7'] = 'Le badge suivant doit avoir été obtenu :';
$string['criteria_descr_single_8'] = 'L’appartenance à la cohorte suivante est requise :';
$string['criteria_descr_single_9'] = 'Les compétences suivantes doivent être acquises :';
$string['criteria_descr_single_short1'] = 'Achevé :';
$string['criteria_descr_single_short2'] = 'Délivré par :';
$string['criteria_descr_single_short4'] = 'Terminer le cours';
$string['criteria_descr_single_short5'] = 'Achevé :';
$string['criteria_descr_single_short6'] = 'Renseigné :';
$string['criteria_descr_single_short7'] = 'Achevé :';
$string['criteria_descr_single_short8'] = 'Membre de :';
$string['criteria_descr_single_short9'] = 'Acquises :';
$string['criteriacreated'] = 'Critère de badge créé';
$string['criteriadeleted'] = 'Critère de badge supprimé';
$string['criteriasummary'] = 'Résumé des critères';
$string['criteriaupdated'] = 'Critère de badge modifié';
$string['criterror'] = 'Problèmes des paramètres actuels';
$string['criterror_help'] = 'Ce champ montre tous les paramètres initialement ajoutés à ce critère de badge qui ne sont actuellement plus disponibles. Il est recommandé de désactiver ces paramètres, afin de vous assurer que les participants pourront obtenir ce badge.';
$string['currentimage'] = 'Image actuelle';
$string['currentstatus'] = 'Statut actuel :';
$string['dateawarded'] = 'Date de remise';
$string['dateearned'] = 'Date : {$a}';
$string['day'] = 'Jour(s)';
$string['deactivate'] = 'Désactiver l’accès';
$string['deactivatesuccess'] = 'L’accès aux badges a été désactivé.';
$string['defaultissuercontact'] = 'Adresse de courriel de l’émetteur de badge';
$string['defaultissuercontact_desc'] = 'Une adresse de courriel associée à l’émetteur du badge. Pour un sac à badges Open Badges v2.0, elle sera utilisée pour l’authentification lors du transfert de badges vers un sac à badges.';
$string['defaultissuername'] = 'Nom de l’émetteur de badge';
$string['defaultissuername_desc'] = 'Nom de la personne ou de l’entité émettrice';
$string['defaultissuerpassword'] = 'Mot de passe de l’émetteur de badge';
$string['defaultissuerpassword_help'] = 'Un compte avec l’adresse de courriel identique à celle indiquée comme adresse de courriel de l’émetteur de badges dans l’Administration du site > Badges > Réglages des badges est nécessaire sur le site du sac à badges. Le mot de passe de ce compte doit être saisi ici.';
$string['delbadge'] = 'Voulez-vous supprimer le badge « {$a} » et supprimer également tous les badges déjà délivrés ?';
$string['delconfirm'] = 'Supprimer et retirer les badges délivrés';
$string['delcritconfirm'] = 'Voulez-vous vraiment supprimer ce critère ?';
$string['deletehelp'] = '<p>La suppression complète d’un badge effacera tous ses éléments (informations, critères, etc.). Les utilisateurs ayant reçu le badge ne pourront plus y accéder, ni l’afficher sur leur page de profil.</p>
<p>Remarque : les utilisateurs ayant reçu ce badge et l’ayant enregistré sur leur sac à badges externe conserveront le badge dans leur sac à badges. Ils ne pourront cependant plus accéder aux critères, ni aux preuves renvoyant vers ce site web.<p>';
$string['delexternalbackpack'] = 'Supprimer le sac à badge de site';
$string['delexternalbackpackconfirm'] = 'Supprimer le site de sac à badges « {$a} » ?';
$string['delparamconfirm'] = 'Voulez-vous vraiment supprimer ce paramètre ?';
$string['description'] = 'Description';
$string['disconnect'] = 'Déconnecter';
$string['donotaward'] = 'Ce badge n’est actuellement pas actif et ne peut donc pas être délivré à des utilisateurs. Si vous voulez le délivrer, veuillez changer son statut à actif.';
$string['enablebadges'] = 'Activer les badges';
$string['endorsement'] = 'Approbation';
$string['error:backpackdatainvalid'] = 'Les données retournées par le sac à badges ne sont pas valides.';
$string['error:backpackemailnotfound'] = 'L’adresse de courriel « {$a} » n’est pas associée à un sac à badges. Vous devez <a href="http://backpack.openbadges.org">créer un sac à badges</a> pour ce compte ou vous connecter avec une autre adresse de courriel.';
$string['error:badgeawardnotfound'] = 'Impossible de vérifier le badge délivré. Ce badge a peut-être été révoqué.';
$string['error:badgenotfound'] = 'Badge non trouvé';
$string['error:cannotact'] = 'Impossible d’activer le badge.';
$string['error:cannotawardbadge'] = 'Impossible de délivrer le badge à un utilisateur.';
$string['error:cannotdeletecriterion'] = 'Ce critère ne peut pas être supprimé.';
$string['error:cannotrevokebadge'] = 'Impossible de révoquer le badge pour un utilisateur';
$string['error:cannotsendtobackpack'] = '<strong>Impossible d’ajouter le badge au sac à badges</strong><br />
Votre fournisseur de sac à badges envoie ce message : « {$a} ».<br /><br />
Vous pouvez essayer de télécharger le badge et de l’ajouter manuellement à votre sac à badges, ou ré-essayer plus tard.';
$string['error:clone'] = 'Impossible de dupliquer le badge.';
$string['error:connectionunknownreason'] = 'La connexion a échoué sans qu’aucune raison ne soit donnée.';
$string['error:duplicatename'] = 'Un badge de ce nom existe déjà dans le système.';
$string['error:externalbadgedoesntexist'] = 'Badge introuvable';
$string['error:guestuseraccess'] = 'Vous consultez ce site comme utilisateur anonyme. Pour consulter les badges, veuillez vous connecter avec votre compte utilisateur.';
$string['error:invalidcriteriatype'] = 'Type de critère non valide';
$string['error:invalidexpiredate'] = 'La date d’échéance doit se situer dans le futur.';
$string['error:invalidexpireperiod'] = 'La période avant échéance ne peut pas être nulle ou négative.';
$string['error:invalidparambadge'] = 'Le badge n’existe pas.';
$string['error:invalidparamcohort'] = 'La cohorte n’existe pas.';
$string['error:noactivities'] = 'Il n’y a pas d’activité avec des critères d’achèvement dans ce cours.';
$string['error:nobadges'] = 'Il n’y a actuellement pas de badge à ajouter comme critère. Un badge de site ne peut avoir comme critère que d’autres badges de site. Un badge de cours peut avoir comme critère des badges d’autres cours ou du site.';
$string['error:nocohorts'] = 'Aucune cohorte.';
$string['error:nocourses'] = 'L’achèvement de cours n’est activé pour aucun cours de ce site. Aucun cours n’est donc affiché ici. L’achèvement de cours peut être activé dans les réglages du cours.';
$string['error:nogroupslink'] = '<p>Seules les collections publiques sont affichées. Veuillez <a href="{$a}" target="_blank" rel="nofollow">visiter votre sac à badges</a> pour créer une collection publique.</p>';
$string['error:nogroupssummary'] = '<p>Il n’y a pas de collection publique de badges disponible dans votre sac à badges.</p>';
$string['error:nopermissiontoview'] = 'Vous n’avez pas les permissions requises pour voir les détenteurs du badge';
$string['error:nosuchbadge'] = 'Le badge d’identifiant {$a} n’existe pas.';
$string['error:nosuchcohort'] = 'Attention ! Cette cohorte n’est plus disponible.';
$string['error:nosuchcourse'] = 'Attention ! Ce cours n’est plus disponible.';
$string['error:nosuchfield'] = 'Attention ! Ce champ de profil utilisateur n’est plus disponible.';
$string['error:nosuchmod'] = 'Attention ! Cette activité n’est plus disponible.';
$string['error:nosuchrole'] = 'Attention ! Ce rôle n’est plus disponible.';
$string['error:nosuchuser'] = 'L’utilisateur possédant cette adresse de courriel n’a pas de compte chez le fournisseur actuel de sacs à badges.';
$string['error:notifycoursedate'] = 'Attention ! Les badges associés à des achèvements de cours ou d’activité ne seront pas délivrés avant la date de début du cours.';
$string['error:parameter'] = 'Attention ! Au moins un paramètre doit être sélectionné pour assurer un processus correct pour l’émission du badge.';
$string['error:relatedbadgedoesntexist'] = 'Il n’y a pas de badge public avec cet identifiant';
$string['error:requesterror'] = 'La requête de connexion a échoué (erreur {$a}).';
$string['error:requesttimeout'] = 'La requête de connexion est arrivée à échéance avant de pouvoir se terminer.';
$string['error:save'] = 'Impossible d’enregistrer le badge';
$string['error:userdeleted'] = '{$a->user} (ce compte utilisateur n’existe plus dans {$a->site})';
$string['eventbadgearchived'] = 'Badge archivé';
$string['eventbadgeawarded'] = 'Badge délivré';
$string['eventbadgecreated'] = 'Badge créé';
$string['eventbadgecriteriacreated'] = 'Critère de badge créé';
$string['eventbadgecriteriadeleted'] = 'Critère de badge supprimé';
$string['eventbadgecriteriaupdated'] = 'Critère de badge modifié';
$string['eventbadgedeleted'] = 'Badge supprimé';
$string['eventbadgedisabled'] = 'Badge désactivé';
$string['eventbadgeduplicated'] = 'Badge dupliqué';
$string['eventbadgeenabled'] = 'Badge activé';
$string['eventbadgelistingviewed'] = 'Liste des badges consultée';
$string['eventbadgerevoked'] = 'Badge révoqué';
$string['eventbadgeupdated'] = 'Badge modifié';
$string['eventbadgeviewed'] = 'Badge consulté';
$string['existingrecipients'] = 'Détenteurs de badges';
$string['existsinbackpack'] = 'Le badge est déjà présent dans le sac à badges';
$string['expired'] = 'Échu';
$string['expiredate'] = 'Ce badge arrive à échéance le {$a}.';
$string['expireddate'] = 'Ce badge est arrivé à échéance le {$a}.';
$string['expiredin'] = 'Échu le {$a}';
$string['expireperiod'] = 'Ce badge arrive à échéance {$a} jour(s) après avoir été délivré.';
$string['expireperiodh'] = 'Ce badge arrive à échéance {$a} heures(s) après avoir été délivré.';
$string['expireperiodm'] = 'Ce badge arrive à échéance {$a} minutes(s) après avoir été délivré.';
$string['expireperiods'] = 'Ce badge arrive à échéance {$a} secondes(s) après avoir été délivré.';
$string['expiresin'] = 'Arrive à échéance le {$a}';
$string['expirydate'] = 'Date d’échéance';
$string['expirydate_help'] = 'Optionnellement, les badges peuvent arriver à échéance à une date spécifique, ou la date d’échéance peut être calculée sur la base de la date à laquelle il a été délivré.';
$string['externalbackpack_required'] = 'Le fournisseur de sac à badges ne peut pas être vide';
$string['externalbadges'] = 'Mes badges d’autres sites web';
$string['externalbadges_help'] = 'Cette zone présente les badges de votre sac à badges externe.';
$string['externalbadgesp'] = 'Badges d’autres sites web :';
$string['externalconnectto'] = 'Pour afficher des badges externes, veuillez <a href="{$a}">vous connecter à un sac à badges</a>.';
$string['fixed'] = 'Date fixe';
$string['hidden'] = 'Caché';
$string['hiddenbadge'] = 'Le détenteur du badge n’a malheureusement pas rendu disponible cette information.';
$string['hostedurl'] = 'URL externe';
$string['hostedurldescription'] = 'L’URL externe du site où le badge est hébergé';
$string['imageauthoremail'] = 'Courriel de l’auteur de l’image';
$string['imageauthoremail_help'] = 'Si spécifié, l’adresse de courriel de l’auteur de l’image du badge est affichée sur la page du badge.';
$string['imageauthorname'] = 'Nom de l’auteur de l’image';
$string['imageauthorname_help'] = 'Si spécifié, le nom de l’auteur de l’image du badge est affiché sur la page du badge.';
$string['imageauthorurl'] = 'URL de l’auteur de l’image';
$string['imageauthorurl_help'] = 'Si spécifié, un lien vers le site web de l’auteur de l’image est affiché sur la page du badge. L’URL doit avoir un préfixe http:// ou https://.';
$string['imagecaption'] = 'Légende de l’image';
$string['imagecaption_help'] = 'Si spécifié, une légende d’image est affichée sur la page du badge.';
$string['includeauthdetails'] = 'Inclure les informations d’authentification avec le sac à badges';
$string['invalidurl'] = 'URL non valide';
$string['issuancedetails'] = 'Échéance du badge';
$string['issuedbadge'] = 'Information de remise du badge';
$string['issuedby'] = 'Délivré par {$a}';
$string['issuedon'] = 'Délivré le {$a}';
$string['issuerdetails'] = 'Informations sur l’émetteur';
$string['issueremail'] = 'Courriel';
$string['issueremail_help'] = 'Une adresse de courriel de contact de l’organisation qui émet l’approbation.';
$string['issuername'] = 'Nom de l’émetteur';
$string['issuername_endorsement'] = 'Nom de l’approbateur';
$string['issuername_endorsement_help'] = 'Nom de la personne qui a approuvé';
$string['issuername_help'] = 'Nom de l’agent ou de l’autorité qui délivre';
$string['issuerurl'] = 'URL de l’émetteur';
$string['issuerurl_help'] = 'La page d’accueil de l’organisation qui émet l’approbation. L’URL doit avoir un préfixe http:// ou https://.';
$string['language'] = 'Langue';
$string['language_help'] = 'La langue utilisée sur la page du badge.';
$string['listbackpacks'] = 'Liste de sacs à badges';
$string['localbadges'] = 'Mes badges du site web {$a}';
$string['localbadgesh'] = 'Mes badges de ce site web';
$string['localbadgesh_help'] = 'Tous les badges obtenus sur ce site web en achevant des cours, des activités de cours ou remplissant d’autres conditions.

Vous pouvez gérer ici vos badges, en les rendant publics ou privés (sur votre page de profil).

Vous pouvez télécharger tous vos badges ou chaque badge séparément et les enregistrer sur votre ordinateur. Les badges téléchargés peuvent être ajoutés à votre sac à badges sur un service externe.';
$string['localbadgesp'] = 'Badges de {$a} :';
$string['localconnectto'] = 'Pour partager ces badges sur un site web externe, vous devez vous <a href="{$a}">connecter à un sac à badges</a>.';
$string['loginbackpacktitle'] = '<strong>Se connecter au sac à badges</strong>';
$string['makeprivate'] = 'Rendre privé';
$string['makepublic'] = 'Rendre public';
$string['managebackpacks'] = 'Gérer les sacs à badges';
$string['managebadges'] = 'Gérer les badges';
$string['message'] = 'Corps du message';
$string['messagebody'] = '<p>On vous a délivré le badge « %badgename% »!</p>
<p>Plus d’information sur ce badge est disponible ici : %badgelink%.</p>
<p>Vous pouvez gérer et télécharger le badge sur votre page {$a}.</p>';
$string['messagesubject'] = 'Félicitations ! Vous venez de recevoir un badge !';
$string['method'] = 'Ce critère est satisfait quand…';
$string['mingrade'] = 'Note minimale requise';
$string['month'] = 'Mois';
$string['moredetails'] = 'Plus d’info';
$string['mybackpack'] = 'Mes réglages de badge';
$string['mybadges'] = 'Mes badges';
$string['namewithlink'] = 'Nom avec lien';
$string['never'] = 'Jamais';
$string['newbackpack'] = 'Ajouter un nouveau sac à badges';
$string['newbadge'] = 'Ajouter un badge';
$string['newimage'] = 'Nouvelle image';
$string['noalignment'] = 'Ce badge n’a pas d’aptitude externe ni de standard spécifié.';
$string['noawards'] = 'Ce badge n’a pas encore été délivré';
$string['nobackpack'] = 'Il n’y a pas de service de sac à badges connecté à ce compte.<br />';
$string['nobackpackbadgessummary'] = 'Il n’y a pas de badge dans les collections que vous avez sélectionnées.';
$string['nobackpackcollectionssummary'] = 'Aucune collection de badge n’a été sélectionnée.';
$string['nobackpacks'] = 'Il n’y a pas de sac à badges disponible';
$string['nobadges'] = 'Il n’y a pas actuellement aucun badge à obtenir pour les utilisateurs.';
$string['nocompetencies'] = 'Aucune compétence sélectionnée';
$string['nocriteria'] = 'Aucun critère n’a encore été défini pour ce badge.';
$string['noendorsement'] = 'Ce badge n’a pas d’approbation.';
$string['noexpiry'] = 'Ce badge n’a pas de date d’échéance.';
$string['nomatchingawards'] = 'Aucun utilisateur trouvé n’a encore obtenu ce badge.';
$string['nomatchingbadges'] = 'Aucun badge trouvé pour être obtenu par les utilisateurs.';
$string['noparamstoadd'] = 'Il n’y a pas de paramètre supplémentaire à ajouter à cette condition de badge.';
$string['norelated'] = 'Ce badge n’a aucun badge associé.';
$string['notacceptedrole'] = 'Le rôle qui vous est actuellement attribué ne permet pas de délivrer manuellement ce badge.<br/>Si vous voulez consulter la liste des utilisateurs ayant déjà reçu ce badge, vous pouvez visiter la page {$a}.';
$string['notconnected'] = 'Non connecté';
$string['notealignment'] = 'Des aptitudes externes ou standards recouverts par le badge peuvent être indiqués. Toutes les aptitudes externes ou standards sont affichés sur la page du badge.';
$string['noteendorsement'] = 'Une approbation d’une tierce partie peut être utilisée pour ajouter de la valeur au badge. Par exemple, un badge délivré par un enseignant peut être approuvé par l’école, ou un badge délivré par une autorité locale peut être approuvé par un organe national.';
$string['noterelated'] = 'Des badges ayant un rapport entre eux peuvent être marqués comme associés. Par exemple, des badges avec les mêmes critères, mais affichés dans des langues différentes peuvent être marqués comme associés. Tous les badges associés sont affichés sur la page du badge.';
$string['nothingtoadd'] = 'Il n’y a pas de critère valable à ajouter.';
$string['notification'] = 'Informer le créateur du badge';
$string['notification_help'] = 'Ce réglage gère les notifications envoyées au créateur d’un badge pour l’informer quand le badge a été délivré.

Les options suivantes sont disponibles :

* **Jamais** – Ne pas envoyer de notification.
* **Chaque fois** – Envoyer une notification chaque fois qu’un badge est délivré.
* **Une fois par jour** – Envoyer les notifications une fois par jour.
* **Une fois par semaine** – Envoyer les notifications une fois par semaine.
* **Une fois par mois** – Envoyer les notifications une fois par mois.';
$string['notifydaily'] = 'Une fois par jour';
$string['notifyevery'] = 'Chaque fois';
$string['notifymonthly'] = 'Une fois par mois';
$string['notifyweekly'] = 'Une fois par semaine';
$string['numawards'] = 'Ce badge a été délivré à <a href="{$a->link}">{$a->count}</a> utilisateur(s).';
$string['numawardstat'] = 'Ce badge a été délivré à {$a} utilisateur(s).';
$string['oauth2issuer'] = 'Services OAuth 2';
$string['openbadgesv1'] = 'Open Badges v1.0';
$string['openbadgesv2'] = 'Open Badges v2.0';
$string['openbadgesv2p1'] = 'Open Badges v2.1';
$string['othernavigation'] = 'Autre navigation…';
$string['overallcrit'] = 'des critères sélectionnés sont remplis.';
$string['password_required'] = 'Le mot de passe ne peut pas être vide';
$string['potentialrecipients'] = 'Détenteurs potentiels du badge';
$string['preferences'] = 'Préférences des badges';
$string['privacy:metadata:backpack'] = 'Une liste des sacs à badges de l’utilisateur';
$string['privacy:metadata:backpack:backpackuid'] = 'L’identifiant unique du sac à badges';
$string['privacy:metadata:backpack:email'] = 'L’adresse de courriel associé au sac à badges';
$string['privacy:metadata:backpack:externalbackpackid'] = 'L’identifiant du sac à badges';
$string['privacy:metadata:backpack:userid'] = 'L’identifiant de l’utilisateur à qui appartient le sac à badges';
$string['privacy:metadata:backpackoauth2'] = 'Informations OAuth 2 lors de la connexion d’un utilisateur à un sac à badges externe';
$string['privacy:metadata:backpackoauth2:issuerid'] = 'Identifiant du service OAuth 2';
$string['privacy:metadata:backpackoauth2:scope'] = 'Liste des champs d’application de la connexion au sac à badges';
$string['privacy:metadata:backpackoauth2:token'] = 'Jeton de connexion au sac à badges';
$string['privacy:metadata:backpackoauth2:userid'] = 'L’identifiant de connexion utilisateur au sac à badges';
$string['privacy:metadata:backpackoauth2:usermodified'] = 'L’identifiant de connexion utilisateur modifié au sac à badges';
$string['privacy:metadata:badge'] = 'Une collection de badges';
$string['privacy:metadata:badge:timecreated'] = 'La date et l’heure à laquelle le badge a été créé';
$string['privacy:metadata:badge:timemodified'] = 'La date et l’heure à laquelle le badge a été modifié pour la dernière fois';
$string['privacy:metadata:badge:usercreated'] = 'L’identifiant de l’utilisateur qui a créé le badge';
$string['privacy:metadata:badge:usermodified'] = 'L’identifiant de l’utilisateur qui a modifié le badge';
$string['privacy:metadata:criteriamet'] = 'Une collection de critères qui ont été remplis';
$string['privacy:metadata:criteriamet:datemet'] = 'La date et l’heure à laquelle les critères ont été remplis';
$string['privacy:metadata:criteriamet:userid'] = 'L’identifiant de l’utilisateur qui a rempli les critères';
$string['privacy:metadata:external:backpacks'] = 'Informations partagées lorsque les utilisateurs envoient leurs badges vers un sac à badges externe';
$string['privacy:metadata:external:backpacks:badge'] = 'Le nom du badge';
$string['privacy:metadata:external:backpacks:description'] = 'La description du badge';
$string['privacy:metadata:external:backpacks:image'] = 'L’image du badge';
$string['privacy:metadata:external:backpacks:issuer'] = 'Des informations sur l’émetteur du badge';
$string['privacy:metadata:external:backpacks:url'] = 'L’URL Moodle à laquelle les informations du badge mis peuvent être consultées';
$string['privacy:metadata:issued'] = 'Une liste des badges délivrés';
$string['privacy:metadata:issued:dateexpire'] = 'La date à laquelle le badge arrive à échéance';
$string['privacy:metadata:issued:dateissued'] = 'La date et l’heure à laquelle le badge a été délivré';
$string['privacy:metadata:issued:userid'] = 'L’identifiant de l’utilisateur à qui a été délivré un badge';
$string['privacy:metadata:manualaward'] = 'Une liste des badges délivrés manuellement';
$string['privacy:metadata:manualaward:datemet'] = 'La date et l’heure à laquelle l’utilisateur a reçu le badge';
$string['privacy:metadata:manualaward:issuerid'] = 'L’identifiant de l’utilisateur qui délivré le badge';
$string['privacy:metadata:manualaward:issuerrole'] = 'Le rôle de l’utilisateur qui délivre le badge';
$string['privacy:metadata:manualaward:recipientid'] = 'L’identifiant de l’utilisateur à qui a été délivré manuellement un badge';
$string['recipient'] = 'Détenteur du badge';
$string['recipients'] = 'Détenteurs du badge';
$string['recipientvalidationproblem'] = 'Cet utilisateur ne peut pas être vérifié comme détenteur de ce badge.';
$string['relatedbages'] = 'Badges associés';
$string['relative'] = 'Date relative';
$string['requiredbadge'] = 'Au moins un badge doit être ajouté comme critère.';
$string['requiredcohort'] = 'Au moins une cohorte doit être ajoutée au critère de cohorte.';
$string['requiredcompetency'] = 'Au moins une compétence doit être ajoutée au critère de compétence.';
$string['requiredcourse'] = 'Au moins un cours devrait être ajouté au critère de l’ensemble de cours.';
$string['reviewbadge'] = 'Modifications de l’accès au badge';
$string['reviewconfirm'] = '<p>Cette action rendra le badge visible pour les utilisateurs et leur permettra d’essayer de l’obtenir.</p>

<p>Il est possible que certains utilisateurs remplissent déjà les conditions requises pour l’obtenir. Le badge leur sera délivré immédiatement après activation.</p>

<p>Dès que le badge aura été délivré, il sera <strong>verrouillé</strong>. Certains réglages, y compris les critères d’obtention et la date d’échéance ne pourront plus être modifiés.</p>

<p>Voulez-vous vraiment rendre disponible le badge « {$a} » ?</p>';
$string['revoke'] = 'Révoquer le badge';
$string['save'] = 'Enregistrer';
$string['searchname'] = 'Rechercher par nom';
$string['selectaward'] = 'Veuillez choisir le rôle que vous voulez utiliser pour délivrer ce badge :';
$string['selectgroup_end'] = 'Seules les collections publiques sont affichées. Visitez <a href="{$a}">votre sac à badges</a> pour créer d’autres collections publiques.';
$string['selectgroup_start'] = 'Choisissez dans votre sac à badges des collections à afficher sur ce site :';
$string['selecting'] = 'Avec les badges sélectionnés…';
$string['setup'] = 'Configurer la connexion';
$string['sitebackpackdeleted'] = 'Le sac à badge de site a été supprimé.';
$string['sitebackpacknotdeleted'] = 'Ce sac à badge n’a pas pu être supprimé, car c’est le sac à badges par défaut du site.';
$string['sitebackpackwarning'] = 'Impossible de se connecter au sac à badges.<br /><br />Vérifiez que le réglage « Adresse de courriel de l’émetteur de badge » est bien une adresse de courriel valide d’un compte sur le site web de sac à badges.<br /><br />Vérifiez encore que le réglage « Mot de passe de l’émetteur de badge » sur la <a href="{$a->url}">page des réglages du site de sac à badges</a> est le mot de passe correct pour le compte sur le site de sac à badges.<br /><br />Le sac à badges à répondu : « {$a->warning} ».';
$string['sitebadges'] = 'Badges de site';
$string['sitebadges_help'] = 'Les badges de site ne peuvent être délivrés que pour des activités en lien avec le site. Ceci inclut l’achèvement d’un ensemble de cours ou de renseignement de parties du profil utilisateur. Les badges de site peuvent aussi être délivrés manuellement à un utilisateur par un autre.

Les badges pour des activités de cours doivent être créés au niveau du cours. Les badges de cours peuvent être trouvés sous Administration du cours > Badges.';
$string['sitebadgetitle'] = 'Badge de site {$a}';
$string['status'] = 'Statut du badge';
$string['status_help'] = 'Le statut d’un badge détermine son comportement :

* **Disponible** – Le badge peut être délivré aux utilisateurs. Lorsqu’un badge est disponible, ses critères ne peuvent pas être modifiés.

* **Non disponible** – Le badge ne peut pas être délivré aux utilisateurs. Si un tel badge n’a pas encore été délivré, ses critères peuvent être modifiés.

* **Verrouillé** – Une fois qu’un badge a été délivré à au moins un utilisateur, son statut devient automatiquement **verrouillé**. Les badges verrouillés peuvent être délivrés aux utilisateurs, mais leurs critères ne peuvent plus être modifiés. Si vous devez modifier la description du badge ou les critères d’un badge verrouillé, vous pouvez le dupliquer et effectuer les modifications désirées.

###Pourquoi les badges sont-ils verrouillés ?

Il est essentiel de s’assurer que tous les utilisateurs remplissent les mêmes conditions pour recevoir un badge. Il n’est pas possible actuellement de révoquer des badges. S’il était permis de modifier les critères à tout moment, il arriverait probablement que des utilisateurs obtiennent des badges en remplissant des conditions totalement différentes.';
$string['statusmessage_0'] = 'Ce badge n’est actuellement pas disponible pour les utilisateurs. Activez son accès si vous voulez que des utilisateurs puissent obtenir ce badge.';
$string['statusmessage_1'] = 'Ce badge est actuellement disponible pour les utilisateurs. Désactivez son accès pour effectuer des modifications.';
$string['statusmessage_2'] = 'Ce badge n’est actuellement pas disponible pour les utilisateurs et ses critères sont verrouillés. Activez son accès si vous voulez que des utilisateurs puissent obtenir ce badge.';
$string['statusmessage_3'] = 'Ce badge est actuellement disponible pour les utilisateurs, et ses critères sont verrouillés.';
$string['statusmessage_4'] = 'Ce badge est actuellement archivé.';
$string['subject'] = 'Sujet du message';
$string['tagarea_badge'] = 'Badges';
$string['tags'] = 'Tags';
$string['targetcode'] = 'Code';
$string['targetcode_help'] = 'Un identifiant textuel unique pour référencer l’aptitude externe ou le standard dans son référentiel.';
$string['targetdescription'] = 'Description';
$string['targetdescription_help'] = 'Brève description de l’aptitude externe ou du standard.';
$string['targetframework'] = 'Référentiel';
$string['targetframework_help'] = 'Le nom du référentiel de compétences de l’aptitude externe ou du standard.';
$string['targetname'] = 'Nom';
$string['targetname_help'] = 'L’aptitude externe ou le standard que le badge recouvre.';
$string['targeturl'] = 'URL';
$string['targeturl_help'] = 'Un lien vers la page décrivant l’aptitude externe ou le standard. L’URL doit avoir un préfixe http:// ou https://.';
$string['testbackpack'] = 'Tester le sac à badges « {$a} »';
$string['testsettings'] = 'Tester les réglages';
$string['type'] = 'Type';
$string['userbadges'] = 'Badges utilisateur';
$string['variablesubstitution'] = 'Substitution de variables dans les messages.';
$string['variablesubstitution_help'] = 'Dans les messages de badges, certaines variables peuvent être insérées dans l’objet et/ou le corps du message, et sont remplacées par des valeurs adéquates lorsque le message est envoyé. Ces variables doivent être insérées dans le texte exactement comme elles sont présentées ci-dessous. Les variables suivantes peuvent être utilisées :

%badgename%
: Sera remplacé par le nom du badge

%username%
: Sera remplacé par le nom de l’utilisateur qui a reçu le badge.

%badgelink%
: Sera remplacé par l’URL publique vers la description du badge délivré.';
$string['verifyemail'] = 'Vérifier l’adresse de courriel';
$string['version'] = 'Version';
$string['version_help'] = 'Le champ version peut être utilisé pour conserver la trace de l’évolution du badge. Si spécifiée, la version est affichée sur la page du badge.';
$string['viewbadge'] = 'Afficher le badge délivré';
$string['visible'] = 'Visible';
$string['warnexpired'] = ' (Ce badge est arrivé à échéance !)';
$string['year'] = 'Année(s)';
