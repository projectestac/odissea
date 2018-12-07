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
 * Strings for component 'group', language 'fr', branch 'MOODLE_34_STABLE'
 *
 * @package   group
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Ajouté par {$a}';
$string['addgroup'] = 'Ajouter l\'utilisateur à un groupe';
$string['addgroupstogrouping'] = 'Ajouter le groupe au groupement';
$string['addgroupstogroupings'] = 'Ajouter/retirer des groupes';
$string['adduserstogroup'] = 'Ajouter/retirer des utilisateurs';
$string['allocateby'] = 'Répartir les membres';
$string['anygrouping'] = '[N\'importe quel groupement]';
$string['autocreategroups'] = 'Créer des groupes automatiquement';
$string['backtogroupings'] = 'Retour aux groupements';
$string['backtogroups'] = 'Retour aux groupes';
$string['badnamingscheme'] = 'Doit contenir exactement un caractère « @ » ou un « # »';
$string['byfirstname'] = 'Alphabétiquement par prénom, puis nom';
$string['byidnumber'] = 'Alphabétiquement par identifiant';
$string['bylastname'] = 'Alphabétiquement par nom, puis prénom';
$string['createautomaticgrouping'] = 'Créer groupement automatique';
$string['creategroup'] = 'Créer un groupe';
$string['creategrouping'] = 'Créer un groupement';
$string['creategroupinselectedgrouping'] = 'Créer un groupe dans le groupement';
$string['createingrouping'] = 'Groupement de groupes créés automatiquement';
$string['createorphangroup'] = 'Créer un groupe orphelin';
$string['databaseupgradegroups'] = 'La version des groupes est maintenant {$a}';
$string['defaultgrouping'] = 'Groupement par défaut';
$string['defaultgroupingname'] = 'Groupement';
$string['defaultgroupname'] = 'Groupe';
$string['deleteallgroupings'] = 'Supprimer tous les groupements';
$string['deleteallgroups'] = 'Supprimer tous les groupes';
$string['deletegroupconfirm'] = 'Voulez-vous vraiment supprimer le groupe « {$a} »?';
$string['deletegrouping'] = 'Supprimer groupement';
$string['deletegroupingconfirm'] = 'Voulez-vous vraiment supprimer le groupement « {$a} »? (les groupes dans ce groupement ne seront pas supprimés.)';
$string['deletegroupsconfirm'] = 'Voulez-vous vraiment supprimer les groupes suivants ?';
$string['deleteselectedgroup'] = 'Supprimer le groupe sélectionné';
$string['editgroupingsettings'] = 'Modifier les réglages du groupement';
$string['editgroupsettings'] = 'Modifier les réglages du groupe';
$string['editusersgroupsa'] = 'Modifier les groupes de {$a}';
$string['enrolmentkey'] = 'Clef d\'inscription';
$string['enrolmentkeyalreadyinuse'] = 'Cette clef d\'inscription est déjà utilisée pour un autre groupe.';
$string['enrolmentkey_help'] = 'Une clef d\'inscription permet de donner accès à un cours aux seuls utilisateurs la détenant. Si  une clef d\'inscription de groupe est spécifiée, non seulement cette clef permettra l\'accès au cours, mais elle inscrira simultanément l\'utilisateur utilisant cette clef comme membre de ce groupe.

Remarque : le réglage pour les clefs d\'inscription de groupe doit être également activé dans les réglages d\'auto-inscription, et une clef d\'inscription doit en outre être spécifiée pour le cours.';
$string['erroraddremoveuser'] = 'Erreur lors de l\'ajout ou du retrait de l\'utilisateur {$a} du groupe';
$string['erroreditgroup'] = 'Erreur lors de la création ou de la modification du groupe {$a}';
$string['erroreditgrouping'] = 'Erreur lors de la création ou de la modification du groupement {$a}';
$string['errorinvalidgroup'] = 'Groupe {$a} non valide';
$string['errorremovenotpermitted'] = 'Vous n\'avez pas les droits d\'accès requis pour retirer le membre du groupe {$a} ajouté automatiquement';
$string['errorselectone'] = 'Veuillez ne sélectionner qu\'un groupe avant de choisir cette option';
$string['errorselectsome'] = 'Veuillez sélectionner un ou plusieurs groupes avant de choisir cette option';
$string['evenallocation'] = 'Remarque : pour obtenir une répartition équilibrée des groupes, le nombre réel des membres par groupe a été adapté. Il différera du nombre que vous avez indiqué.';
$string['eventgroupcreated'] = 'Groupe créé';
$string['eventgroupdeleted'] = 'Groupe supprimé';
$string['eventgroupingcreated'] = 'Groupement créé';
$string['eventgroupingdeleted'] = 'Groupement supprimé';
$string['eventgroupinggroupassigned'] = 'Groupe attribué à un groupement';
$string['eventgroupinggroupunassigned'] = 'Groupe retiré d\'un groupement';
$string['eventgroupingupdated'] = 'Groupement modifié';
$string['eventgroupmemberadded'] = 'Membre ajouté à un groupe';
$string['eventgroupmemberremoved'] = 'Membre retiré d\'un groupe';
$string['eventgroupupdated'] = 'Groupe modifié';
$string['existingmembers'] = 'Membres actuels : {$a}';
$string['filtergroups'] = 'Filtrer les groupes par :';
$string['group'] = 'Groupe';
$string['groupaddedsuccesfully'] = 'Le groupe {$a} a été ajouté';
$string['groupaddedtogroupingsuccesfully'] = 'Groupe {$a->groupname} ajouté au groupement {$a->groupingname}';
$string['groupby'] = 'Création automatique basée sur';
$string['groupdescription'] = 'Description du groupe';
$string['groupinfo'] = 'Information sur le groupe sélectionné';
$string['groupinfomembers'] = 'Information sur les membres sélectionnés';
$string['groupinfopeople'] = 'Information sur les personnes sélectionnées';
$string['grouping'] = 'Groupement';
$string['groupingaddedsuccesfully'] = 'Groupement {$a} ajouté';
$string['groupingdescription'] = 'Description du groupement';
$string['grouping_help'] = 'Un groupement est un ensemble de groupes dans un cours. Si un groupement est sélectionné, les utilisateurs dans les groupes du groupement pourront travailler ensemble.';
$string['groupingname'] = 'Nom du groupement';
$string['groupingnameexists'] = 'Le nom de groupement « {$a} » existe déjà dans ce cours. Veuillez en choisir un autre.';
$string['groupings'] = 'Groupements';
$string['groupingsection'] = 'Accès au groupement';
$string['groupingsection_help'] = 'Un groupement est un ensemble de groupes d\'un cours. Si un groupement est sélectionné ici, seuls les participants faisant partie de groupes dans ce groupement auront accès à cette section.';
$string['groupingsonly'] = 'Groupements seuls';
$string['groupmember'] = 'Membre du groupe';
$string['groupmemberdesc'] = 'Rôle par défaut pour un membre d\'un groupe.';
$string['groupmembers'] = 'Membres du groupe';
$string['groupmemberssee'] = 'Voir les membres du groupe';
$string['groupmembersselected'] = 'Membres du groupe sélectionné';
$string['groupmode'] = 'Mode de groupe';
$string['groupmodeforce'] = 'Imposer le mode de groupe';
$string['groupmodeforce_help'] = 'Lorsque le type des groupes est imposé, le type des groupes défini dans le cours est appliqué à chaque activité du cours. Le type des groupes défini dans les activités est ignoré.';
$string['groupmode_help'] = 'Ce réglage a trois options :

* Pas de groupe ;
* Groupes séparés - chaque membre du groupe ne peut voir que son propre groupe, les autres groupes étant invisibles ;
* Groupes visibles - chaque membre du groupe travaille uniquement dans son propre groupe, mais peut aussi voir les autres groupes.

Le mode de groupe défini au niveau du cours est le type par défaut pour toutes les activités du cours. Chaque activité qui supporte les groupes peut définir son propre mode de groupe. Toutefois, si dans le cours le paramètre « Imposer le mode des groupes » a été choisi, le mode des groupes défini dans les activités sera ignoré.';
$string['groupmy'] = 'Mon groupe';
$string['groupname'] = 'Nom du groupe';
$string['groupnameexists'] = 'Le nom de groupe « {$a} » existe déjà dans ce cours. Veuillez en choisir un autre.';
$string['groupnotamember'] = 'Désolé, vous n\'êtes pas membre de ce groupe';
$string['groups'] = 'Groupes';
$string['groupscount'] = 'Groupes ({$a})';
$string['groupsettingsheader'] = 'Groupes';
$string['groupsgroupings'] = 'Groupes &amp; groupements';
$string['groupsinselectedgrouping'] = 'Groupes dans';
$string['groupsnone'] = 'Aucun groupe';
$string['groupsonly'] = 'Seulement les groupes';
$string['groupspreview'] = 'Prévisualisation des groupes';
$string['groupsseparate'] = 'Groupes séparés';
$string['groupsvisible'] = 'Groupes visibles';
$string['grouptemplate'] = 'Groupe @';
$string['hidepicture'] = 'Cacher l\'image';
$string['importgroups'] = 'Importer des groupes';
$string['importgroups_help'] = 'Les groupes peuvent être importés depuis un fichier texte. Le format de ce fichier doit être le suivant :

* chaque ligne du fichier contient un enregistrement ;
* chaque enregistrement est une série de données séparées par des virgules ;
* le premier enregistrement contient la liste des noms des champs définissant le format du reste du fichier ;
* le seul champ requis est groupname ;
* les champs optionnels sont description, enrolmentkey, picture, hidepicture ;
* les noms des champs ne doivent pas être traduits.';
$string['includeonlyactiveenrol'] = 'N\'inclure que les inscription actives';
$string['includeonlyactiveenrol_help'] = 'Si ce réglage est activé, les utilisateurs suspendus ne seront pas inclus dans les groupes.';
$string['javascriptrequired'] = 'Cette page requiert l\'activation de Javascript.';
$string['members'] = 'Membres par groupe';
$string['membersofselectedgroup'] = 'Membres de :';
$string['mygroups'] = 'Mes groupes';
$string['namingscheme'] = 'Schéma de dénomination';
$string['namingscheme_help'] = 'Le caractère arobase (@) peut être utilisé pour créer des groupes contenant des lettres. Par exemple, « Groupe @ » générera des groupes nommés « Groupe A », « Groupe B », « Groupe C », etc.

Le caractère dièse (#) peut être utilisé pour créer des groupes contenant des nombres. Par exemple, « Groupe # » générera des groupes nommés « Groupe 1 », « Groupe 2 », « Groupe 3 », etc.';
$string['newgrouping'] = 'Nouveau groupement';
$string['newpicture'] = 'Nouvelle image';
$string['newpicture_help'] = 'Sélectionnez une image en format JPG ou PNG.  L\'image sera redimensionnée en un carré de 100x100 pixels.';
$string['noallocation'] = 'Pas d\'attribution';
$string['nogroup'] = 'Aucun groupe';
$string['nogrouping'] = 'Pas de groupement';
$string['nogroups'] = 'Il n\'y a pas encore de groupes dans ce cours';
$string['nogroupsassigned'] = 'Aucun groupe n\'a été attribué';
$string['nopermissionforcreation'] = 'Impossible de créer le groupe « {$a} », car vous n\'avez pas les droits d\'accès requis';
$string['nosmallgroups'] = 'Empêcher un petit groupe pour terminer';
$string['notingroup'] = 'Ignorer les utilisateurs dans des groupes';
$string['notingrouping'] = '[Dans aucun groupement]';
$string['notingrouplist'] = '[Membre d\'aucun groupe]';
$string['nousersinrole'] = 'Il n\'y a pas d\'utilisateur adéquat dans le rôle sélectionné';
$string['number'] = 'Nombre de groupes/membres';
$string['numgroups'] = 'Nombre de groupes';
$string['nummembers'] = 'Membres par groupe';
$string['othergroups'] = 'Autres groupes';
$string['overview'] = 'Vue d\'ensemble';
$string['potentialmembers'] = 'Membres potentiels : {$a}';
$string['potentialmembs'] = 'Membres potentiels';
$string['printerfriendly'] = 'Affichage pour impression';
$string['privacy:metadata:groups'] = 'Un enregistrement des affiliations à des groupes.';
$string['privacy:metadata:groups:groupid'] = 'L\'identifiant du groupe.';
$string['privacy:metadata:groups:timeadded'] = 'L\'horodatage de l\'ajout de l\'utilisateur au groupe.';
$string['privacy:metadata:groups:userid'] = 'L\'identifiant de l\'utilisateur qui est affilié au groupe.';
$string['random'] = 'Aléatoirement';
$string['removefromgroup'] = 'Retirer un utilisateur du groupe {$a}';
$string['removefromgroupconfirm'] = 'Voulez-vous vraiment retirer l\'utilisateur « {$a->user} » du groupe « {$a->group} »?';
$string['removegroupfromselectedgrouping'] = 'Retirer le groupe du groupement';
$string['removegroupingsmembers'] = 'Retirer tous les groupes des groupements';
$string['removegroupsmembers'] = 'Retirer tous les membres des groupes';
$string['removeselectedusers'] = 'Retirer les utilisateurs sélectionnés';
$string['selectfromgroup'] = 'Sélectionner les membres du groupe';
$string['selectfromgrouping'] = 'Sélectionner les membres du groupement';
$string['selectfromrole'] = 'Sélectionnez des utilisateurs avec le rôle';
$string['showgroupsingrouping'] = 'Afficher les groupes du groupement';
$string['showmembersforgroup'] = 'Afficher les membres du groupe';
$string['toomanygroups'] = 'Il n\'y a pas assez d\'utilisateurs pour répartir ce nombre de groupes. Il n\'y a que {$a} utilisateurs ayant le rôle sélectionné.';
$string['usercount'] = 'Nombre d\'utilisateurs';
$string['usercounttotal'] = 'Nombre d\'utilisateurs ({$a})';
$string['usergroupmembership'] = 'Groupes dont l\'utilisateur sélectionné fait partie :';
