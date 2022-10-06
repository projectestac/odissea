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
 * Strings for component 'attendance', language 'fr', version '3.11'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = 'A';
$string['Afull'] = 'Absent';
$string['Eacronym'] = 'E';
$string['Efull'] = 'Excusé';
$string['Lacronym'] = 'R';
$string['Lfull'] = 'Retard';
$string['Pacronym'] = 'P';
$string['Pfull'] = 'Présent';
$string['absenteereport'] = 'Rapport d\'absence';
$string['acronym'] = 'Acronyme';
$string['add'] = 'Ajouter';
$string['addedrecip'] = 'Ajout de {$a} nouveau destinataire';
$string['addedrecips'] = 'Ajout de {$a} nouveaux destinataires';
$string['addmultiplesessions'] = 'Plusieurs sessions';
$string['addsession'] = 'Ajouter une session';
$string['adduser'] = 'Ajouter un utilisateur';
$string['addwarning'] = 'Ajouter un avertissement';
$string['all'] = 'Tout';
$string['allcourses'] = 'Tous les cours';
$string['allpast'] = 'Sessions passées';
$string['allsessions'] = 'Toutes les sessions';
$string['allsessionstotals'] = 'Totaux pour les sessions sélectionnées';
$string['attendance:addinstance'] = 'Ajouter une nouvelle activité de présence';
$string['attendance:canbelisted'] = 'Apparaît dans la liste';
$string['attendance:changeattendances'] = 'Modification des présences';
$string['attendance:changepreferences'] = 'Modification des préférences';
$string['attendance:export'] = 'Rapport d\'exportation';
$string['attendance:manageattendances'] = 'Gérer les présences';
$string['attendance:managetemporaryusers'] = 'Gestion des utilisateurs temporaires';
$string['attendance:takeattendances'] = 'Prise des présences';
$string['attendance:view'] = 'Affichage des présences';
$string['attendance:viewreports'] = 'Affichage des rapports';
$string['attendance:viewsummaryreports'] = 'Voir les rapports des cours';
$string['attendance:warningemails'] = 'Peut être abonné à des courriels avec des utilisateurs absents';
$string['attendance_already_submitted'] = 'Votre présence a déjà été définie.';
$string['attendance_no_status'] = 'Aucun statut valide n\'était disponible - il est possible que vous soyez en retard pour enregistrer les présences.';
$string['attendancedata'] = 'Données de présence';
$string['attendancefile'] = 'Fichier de Présence (format CSV)';
$string['attendancefile_help'] = 'Le fichier doit être un fichier CSV avec une ligne d\'en-tête et des champs permettant d\'identifier l\'utilisateur et l\'heure à laquelle la présence a été enregistrée, par exemple (email, scantime) ou (nom d\'utilisateur, time).';
$string['attendanceforthecourse'] = 'Présence pour le cours';
$string['attendancegrade'] = 'Note de présence';
$string['attendancenotset'] = 'Vous devez renseigner votre présence';
$string['attendancenotstarted'] = 'La prise de présence n\'a pas encore commencé pour ce cours';
$string['attendancepercent'] = 'Pourcentage de présence';
$string['attendancereport'] = 'Rapport de présence';
$string['attendanceslogged'] = 'Présences enregistrées';
$string['attendancestaken'] = 'Présences prises';
$string['attendancesuccess'] = 'Les présences ont bien été enregistrées';
$string['attendanceupdated'] = 'Présences mises à jour avec succès';
$string['attforblockdirstillexists'] = 'l\'ancien répertoire « mod/attforblock » existe encore - vous devez supprimer ce répertoire de votre serveur avant de mettre à jour le plugin.';
$string['attrecords'] = 'Enregistrements des présences';
$string['autoassignstatus'] = 'Sélectionner automatiquement le statut le plus élevé disponible';
$string['autoassignstatus_help'] = 'Si cette option est sélectionnée, les élèves se verront automatiquement attribuer la note la plus élevée disponible.';
$string['automark'] = 'Marquage automatique';
$string['automark_help'] = 'Permet de compléter le marquage automatiquement.
Si « Oui », les étudiants seront automatiquement marqués en fonction de leur premier accès au cours.
Si « Définir non marqué à la fin de la session », les étudiants qui n\'ont pas marqué leur présence seront mis sur le statut non marqué sélectionné.';
$string['automarkall'] = 'Oui';
$string['automarkclose'] = 'Défini non marqué à la fin de la session';
$string['automarktask'] = 'Vérifier les sessions de présence qui nécessitent un marquage automatique.';
$string['automarkuseempty'] = 'Traitement de la disponibilité de l\'état de marquage automatique';
$string['automarkuseempty_desc'] = 'Si cette case est cochée, les éléments de statut dont le paramètre « disponible pour » est vide/non activé seront autorisés pendant le marquage automatique.';
$string['autorecorded'] = 'système d\'enregistrement automatique';
$string['averageattendance'] = 'Fréquentation moyenne';
$string['averageattendancegraded'] = 'Fréquentation moyenne';
$string['backtoparticipants'] = 'Retour à la liste des participants';
$string['below'] = 'En dessous de {$a}%';
$string['calclose'] = 'Fermer';
$string['calendarevent'] = 'Créer un événement de calendrier pour la session';
$string['calendarevent_help'] = 'Si activé, un événement de calendrier sera créé pour cette session.
Si désactivée, tout événement de calendrier existant pour cette session sera supprimé.';
$string['caleventcreated'] = 'Calendrier des événements pour la session créé avec succès';
$string['caleventdeleted'] = 'Calendrier des événements pour la session supprimé avec succès';
$string['calmonths'] = 'Janvier,Février,Mars,Avril,Mai,Juin,Juillet,Août,Septembre,Octobre,Novembre,Décembre';
$string['calshow'] = 'Choisir une date';
$string['calweekdays'] = 'Di,Lu,Ma,Me,Je,Ve,Sa';
$string['cannottakeforgroup'] = 'Vous ne pouvez pas saisir les présences pour le groupe « {$a} »';
$string['cantaddstatus'] = 'Vous devez définir un acronyme et une description lorsque vous ajoutez un nouveau statut.';
$string['categoryreport'] = 'Rapport sur les catégories de cours';
$string['changeattendance'] = 'Modifier la présence';
$string['changeduration'] = 'Modifier la durée';
$string['changesession'] = 'Modifier la session';
$string['checkweekdays'] = 'Sélectionnez la semaine qui tombe dans la plage de dates de la session sélectionnée.';
$string['closed'] = 'Cette session n\'est pas disponible actuellement pour l\'auto-marquage';
$string['column'] = 'Colonne';
$string['columnmap_help'] = 'Pour chacun des champs présentés, sélectionner la colonne correspondante dans le fichier CSV.';
$string['columns'] = 'Colonnes';
$string['commonsession'] = 'Tous les étudiants';
$string['commonsessions'] = 'Tous les étudiants';
$string['confirm'] = 'Confirmer';
$string['confirmcolumnmappings'] = 'Confirmer les mappages de colonnes';
$string['confirmdeletehiddensessions'] = 'Voulez-vous vraiment supprimer {$a->count} sessions programmées avant la date de début du cours ({$a->date}) ?';
$string['confirmdeleteuser'] = 'Voulez-vous vraiment supprimer l\'utilisateur « {$a->filename} » ({$a->email}) ? <br/> Tous leurs registres de présence seront définitivement supprimés.';
$string['copyfrom'] = 'Copier les données de présence de';
$string['countofselected'] = 'Nombre de sélections';
$string['course'] = 'Cours';
$string['coursemessage'] = 'Message aux participants du cours';
$string['courseshortname'] = 'Nom abrégé du cours';
$string['coursesummary'] = 'Rapport du cours';
$string['createmultiplesessions'] = 'Créer plusieurs sessions';
$string['createmultiplesessions_help'] = 'Cette fonction vous permet de créer plusieurs sessions en une seule étape.
Les sessions commencent à la date de la session de base et se poursuivent jusqu\'à la date de « répétition jusqu\'à ».

  * <strong> Répéter le </strong> : sélectionner les jours de la semaine où votre classe se réunira (par exemple, lundi / mercredi / vendredi).
  * <strong> Répéter tous les </strong> : permet un réglage de fréquence. Si votre classe se réunit chaque semaine, sélectionner 1; si elle se réunit toutes les deux semaines, sélectionner 2; toutes les 3 semaines, sélectionner 3, etc.
  * <strong> Répéter jusqu\'à </strong> : sélectionner le dernier jour de cours (le dernier jour auquel vous souhaitez participer).';
$string['createonesession'] = 'Créer une session pour le cours';
$string['csvdelimiter'] = 'Délimiteur CSV';
$string['currentlyselectedusers'] = 'Utilisateurs actuellement sélectionnés';
$string['customexportfields'] = 'Exporter les champs de profil utilisateur personnalisés';
$string['customexportfields_help'] = 'Champs de profil utilisateur personnalisés supplémentaires à afficher dans le rapport d\'exportation.';
$string['date'] = 'Date';
$string['days'] = 'Jours';
$string['defaultdisplaymode'] = 'Mode d\'affichage par défaut';
$string['defaults'] = 'Valeurs par défaut';
$string['defaultsessionsettings'] = 'Paramètres de session par défaut';
$string['defaultsessionsettings_help'] = 'Ces paramètres définissent les valeurs par défaut des nouvelles sessions';
$string['defaultsettings'] = 'Paramètres des présences par défaut';
$string['defaultsettings_help'] = 'Ces paramètres définissent les valeurs par défaut des nouvelles présences';
$string['defaultstatus'] = 'Statut par défaut défini';
$string['defaultsubnet'] = 'Adresse réseau par défaut';
$string['defaultsubnet_help'] = 'L\'enregistrement de présence peut être limité à des sous-réseaux particuliers en spécifiant une liste séparée par des virgules d\'adresses IP partielles ou complètes. C\'est la valeur par défaut utilisée lors de la création de nouvelles sessions.';
$string['defaultview'] = 'Affichage par défaut lors de la connexion';
$string['defaultview_desc'] = 'C\'est la vue par défaut montrée aux enseignants lors de la première connexion.';
$string['defaultwarnings'] = 'Réglage de l\'avertissement par défaut';
$string['defaultwarningsettings'] = 'Paramètres d\'avertissement par défaut';
$string['defaultwarningsettings_help'] = 'Ces paramètres définissent les valeurs par défaut de tous les nouveaux avertissements.';
$string['delete'] = 'Supprimer';
$string['deletecheckfull'] = 'Voulez-vous vraiment supprimer définitivement {$a} en incluant toutes les données utilisateur ?';
$string['deletedgroup'] = 'Le groupe associé à cette session a été supprimé';
$string['deletehiddensessions'] = 'Supprimer toutes les sessions masquées';
$string['deletelogs'] = 'Supprimer les données de présence';
$string['deleteselected'] = 'Supprimer la sélection';
$string['deletesession'] = 'Supprimer la session';
$string['deletesessions'] = 'Supprimer toutes les sessions';
$string['deleteuser'] = 'Supprimer l\'utilisateur';
$string['deletewarningconfirm'] = 'Voulez-vous vraiment supprimer cet avertissement ?';
$string['deletingsession'] = 'Supprimer la session pour le cours';
$string['deletingstatus'] = 'Supprimer le staut pour le cours';
$string['description'] = 'Description';
$string['display'] = 'Affichage';
$string['displaymode'] = 'Mode d\'affichage';
$string['donotusepaging'] = 'Ne pas utiliser la pagination';
$string['downloadexcel'] = 'Télécharger en format Excel';
$string['downloadooo'] = 'Télécharger en format OpenOffice';
$string['downloadtext'] = 'Télécharger en format texte';
$string['duration'] = 'Durée (heure - minute)';
$string['editsession'] = 'Éditer la session';
$string['edituser'] = 'Modifier l\'utilisateur';
$string['emailcontent'] = 'Contenu des courriels';
$string['emailcontent_default'] = 'Bonjour %userfirstname%,
Votre assiduité à %coursename% %attendancename% a chuté en dessous de %warningpercent% et est actuellement de %percent% - nous espérons que vous êtes ok !

Pour tirer le meilleur parti de ce cours, vous devez améliorer votre assiduité. N\'hésitez pas à nous contacter si vous avez besoin d\'aide.';
$string['emailcontent_help'] = 'Lorsqu\'un avertissement est envoyé à un étudiant, le contenu de l\'e-mail est extrait de ce champ. Les caractères génériques suivants peuvent être utilisés :
<ul>
<li>%coursename%</li>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%userid%</li>
<li>%warningpercent%</li>
<li>%attendancename%</li>
<li>%cmid%</li>
<li>%numtakensessions%</li>
<li>%points%</li>
<li>%maxpoints%</li>
<li>%percent%</li>
</ul>';
$string['emailsubject'] = 'Sujet du courriel';
$string['emailsubject_default'] = 'Avertissement de présence';
$string['emailsubject_help'] = 'Lorsqu\'un avertissement est envoyé à un étudiant, le sujet du courriel est extrait de ce champ.';
$string['emailuser'] = 'Notifier l\'utilisateur';
$string['emailuser_help'] = 'Si ce réglage est activé, un avertissement sera envoyé à l\'étudiant.';
$string['emptyacronym'] = 'Le champ Acronyme ne peut rester vide. L\'enregistrement n\'a pas eu lieu.';
$string['emptydescription'] = 'Le champ Description ne peut rester vide. L\'enregistrement n\'a pas eu lieu.';
$string['enablecalendar'] = 'Créer des événements de calendrier';
$string['enablecalendar_desc'] = 'Si activé, un événement de calendrier sera créé pour chaque session de présence. Après modification de ce réglage, vous devriez exécuter la réinitialisation du rapport de calendrier.';
$string['enablewarnings'] = 'Activer les avertissements';
$string['enablewarnings_desc'] = 'Cela permet de définir un ensemble d\'avertissement pour une participation et d\'envoyer des notifications par courrier électronique aux utilisateurs lorsque la participation tombe en dessous du seuil configuré. <br/><strong> ATTENTION : il s\'agit d\'une nouvelle fonctionnalité qui n\'a pas été testée de manière approfondie. Utilisez-le à vos propres risques et indiquez des frais de retour dans les forums moodle si vous estimez que cela fonctionne bien. </strong>';
$string['encoding'] = 'Encodage';
$string['encoding_help'] = 'Fait référence au type d\'encodage des code-barres utilisé sur la carte d\'identité des étudiants. Les types caractéristiques de schémas d\'encodage de code-barres incluent Code-39, Code-128 et UPC-A.';
$string['endofperiod'] = 'Fin de la période';
$string['endtime'] = 'Heure de fin de session';
$string['enrolmentend'] = 'Fin d\'inscription de l\'utilisateur {$a}';
$string['enrolmentstart'] = 'Début d\'inscription de l\'utilisateur {$a}';
$string['enrolmentsuspended'] = 'Inscription suspendue';
$string['enterpassword'] = 'Entrez le mot de passe';
$string['error:coursehasnoattendance'] = 'Le cours avec le nom abrégé {$a} n\'a pas d\'activité Présence.';
$string['error:coursenotfound'] = 'Un cours avec le nom abrégé {$a} n\'a pas pu être trouvé.';
$string['error:qrcode'] = 'L\'autorisation pour les étudiants d\'enregistrer leur propre présence doit être activée pour utiliser le code QR ! Ignoré.';
$string['error:sessioncourseinvalid'] = 'Une session de cours n\'est pas valide ! Elle sera ignorée.';
$string['error:sessiondateinvalid'] = 'Une date de session n\'est pas valide ! Elle sera ignorée.';
$string['error:sessionendinvalid'] = 'Une heure de fin de session n\'est pas valide ! Elle sera ignorée.';
$string['error:sessionstartinvalid'] = 'Une heure de début de session n\'est pas valide ! Elle sera ignorée.';
$string['error:statusnotfound'] = 'Utilisateur : {$a->extuser} a une valeur de statut introuvable : {$a->status}';
$string['error:userduplicate'] = 'L\'utilisateur {$a} a été trouvé deux fois lors de l\'importation. Veuillez n\'inclure qu\'un seul enregistrement par utilisateur.';
$string['error:usernotfound'] = 'Un utilisateur avec le {$a->userfield} défini sur {$a->extuser} est introuvable';
$string['errorgroupsnotselected'] = 'Sélectionner 1 ou plusieurs groupes';
$string['errorinaddingsession'] = 'Erreur d\'ajout de session';
$string['erroringeneratingsessions'] = 'Erreur de génération de sessions';
$string['eventdurationupdated'] = 'Durée de la session modifiée';
$string['eventreportviewed'] = 'Rapport de présence consulté';
$string['eventscreated'] = 'Événements créés';
$string['eventsdeleted'] = 'Événements supprimés';
$string['eventsessionadded'] = 'Session ajoutée';
$string['eventsessiondeleted'] = 'Session supprimée';
$string['eventsessionipshared'] = 'Conflit d\'adresse IP dans l\'auto-marquage des présences';
$string['eventsessionsimported'] = 'Session importée';
$string['eventsessionupdated'] = 'Session modifiée';
$string['eventstatusadded'] = 'Statut ajouté';
$string['eventstatusupdated'] = 'Statut mise à jour';
$string['eventstudentattendancesessionsupdated'] = 'Rapport de session mis à jour';
$string['eventstudentattendancesessionsviewed'] = 'Rapport de session consulté';
$string['eventtaken'] = 'Statut de présence renseigné';
$string['eventtakenbystudent'] = 'Statut de présence renseigné par l\'étudiant';
$string['export'] = 'Exportation';
$string['extrarestrictions'] = 'Restrictions supplémentaires';
$string['formattexttype'] = 'Formatage';
$string['from'] = 'De :';
$string['gradebookexplanation'] = 'Noter dans le carnet de notes';
$string['gradebookexplanation_help'] = 'Le module de présence affiche votre note de fréquentation basée sur le nombre de points que vous avez accumulés à ce jour et le nombre de points qui auraient pu être gagnés à ce jour, il ne comprend pas les périodes des cours qui n\'ont pas encore eu lieu. Dans le carnet de notes, votre note de présence est calculée en pourcentage de présence en cours avec le nombre de points qui peuvent être gagnés pendant toute la durée du cours, y compris pour les périodes cours à venir. Ainsi, la note de présence affichée dans le module de présence et la note affichée dans le carnet de notes peut avoir un nombre de points différent, mais elles auront le même pourcentage.

Par exemple, si vous avez gagné 8 des 10 points à ce jour (80% de participation) et si la fréquentation pour l\'ensemble du cours vaut 50 points, le module de présence affichera 8/10 et le carnet de notes affichera 40/50. Vous n\'avez pas encore gagné 40 points, mais 40 est la valeur du point équivalent à votre pourcentage de participation actuel de 80%. La valeur du point que vous avez gagné dans le module de présence ne peut jamais diminuer, car il ne repose que sur la participation à ce jour. Cependant, la valeur du point de présence indiquée dans le carnet de notes peut augmenter ou diminuer en fonction de votre participation future, car elle est basée sur l\'assiduité pour l\'ensemble du cours.';
$string['graded'] = 'Sessions notées';
$string['gridcolumns'] = 'Colonnes de la grille';
$string['group'] = 'Groupe';
$string['groups'] = 'Groupes';
$string['groupsession'] = 'Groupe d\'étudiants';
$string['groupsessionsby'] = 'Regrouper les sessions par';
$string['hiddensessions'] = 'Sessions masquées';
$string['hiddensessions_help'] = 'Les sessions sont masquées si la date du début du cours est postérieure à la date des sessions.

Vous pouvez utiliser cette fonction pour cacher d\'anciennes sessions au lieu de les supprimer. Mais rappelez-vous que seules les sessions visibles sont prises en compte dans le carnet de notes.';
$string['hiddensessionsdeleted'] = 'Toutes les sessions masquées ont été supprimées';
$string['hideextrauserdetails'] = 'Masquer les détails de l\'utilisateur';
$string['hidensessiondetails'] = 'Masquer le détail de la session';
$string['identifyby'] = 'Identifier l\'étudiant par';
$string['import'] = 'Importer';
$string['importfile'] = 'Importer fichier';
$string['importfile_help'] = 'Importer fichier';
$string['importsessions'] = 'Importer des sessions';
$string['importstatus'] = 'Champ de statut';
$string['importstatus_help'] = 'Cela permet d\'inclure une valeur de statut dans l\'importation - par exemple des valeurs telles que P, L ou A';
$string['includeabsentee'] = 'Inclure la session dans le calcul du rapport d\'absence';
$string['includeabsentee_help'] = 'Si sélectionnée, cette session sera incluse dans les calculs du rapport d\'absence.';
$string['includeall'] = 'Sélectionner toutes les sessions';
$string['includedescription'] = 'Inclure la description de la session';
$string['includenottaken'] = 'Inclure les sessions non renseignées';
$string['includeqrcode'] = 'Inclure un code QR';
$string['includeremarks'] = 'Inclure des remarques';
$string['incorrectpassword'] = 'Vous avez saisi un mot de passe incorrect et votre présence n\'a pas été enregistrée. Merci d\'entrer le mot de passe correct.';
$string['incorrectpasswordshort'] = 'Mot de passe incorrect, la présence n\'a pas été enregistrée.';
$string['indetail'] = 'Détails…';
$string['indicator:cognitivedepth'] = 'Présence cognitive';
$string['indicator:cognitivedepth_help'] = 'Cet indicateur est basé sur la profondeur cognitive atteinte par l\'élève dans une activité Présence.';
$string['indicator:cognitivedepthdef'] = 'Présence cognitive';
$string['indicator:socialbreadthdef_help'] = 'Le participant a atteint ce pourcentage de l\'engagement social offert par l\'activité Présence pendant cet intervalle d\'analyse (Niveaux = Pas de participation, Participant seul)';
$string['invalidaction'] = 'Vous devez choisir une action a effectuer';
$string['invalidemails'] = 'Les utilisateurs suivants n\'ont pas d\'adresse de courriel: {$a}';
$string['invalidimportfile'] = 'Format de fichier invalide';
$string['invalidsessionenddate'] = 'Cette date ne peut être antérieure à la date de la session.';
$string['invalidsessionendtime'] = 'L\'heure de fin doit être postérieure à l\'heure de début';
$string['invalidstatus'] = 'Vous avez sélectionner un statut invalide, merci de réessayer';
$string['iptimemissing'] = 'Minutes non valides pour la libération';
$string['jumpto'] = 'Aller à';
$string['keepsearching'] = 'Continuer la recherche';
$string['marksessionimportcsvhelp'] = 'Ce formulaire vous permet de télécharger un fichier CSV contenant un identifiant d\'utilisateur et un statut - le champ de statut peut être l\'acronyme du statut ou l\'heure à laquelle la présence a été enregistrée pour cet utilisateur. Si une valeur de temps est transmise, il essaiera d\'attribuer la valeur de statut avec la note la plus élevée disponible à ce moment-là.';
$string['maxpossible'] = 'Maximum possible';
$string['maxpossible_help'] = 'Affiche le score que chaque utilisateur peut atteindre s\'ils reçoivent le maximum de points dans chaque session non prise (passé et futur) :
    <ul>
    <li><strong>Points</strong> : les points maximum auxquels chaque utilisateur peut accéder à toutes les sessions. </li>
    <li><strong>Pourcentage</strong> : pourcentage maximal chaque utilisateur peut atteindre toutes les sessions. </li>
    </ul>';
$string['maxpossiblepercentage'] = 'Pourcentage maximum possible';
$string['maxpossiblepoints'] = 'Point maximum possible';
$string['maxwarn'] = 'Nombre maximal de notifications par courriel';
$string['maxwarn_help'] = 'Nombre maximal d\'envoi de notifications (une seule notification par session est envoyée)';
$string['mergeuser'] = 'Fusionner l\'utilisateur';
$string['mobilesessionfrom'] = 'Afficher les sessions plus anciennes que la précédente';
$string['mobilesessionfrom_help'] = 'Permet de restreindre la liste des sessions lors du marquage dans l\'application - affiche uniquement les sessions qui ont commencé depuis cette valeur';
$string['mobilesessionto'] = 'Afficher les sessions à venir';
$string['mobilesessionto_help'] = 'Permet de restreindre la liste des sessions pour n\'afficher qu\'un petit nombre de sessions futures.';
$string['mobilesettings'] = 'Paramètres de l\'application mobile';
$string['mobilesettings_help'] = 'Ces paramètres contrôlent le comportement de l\'application mobile Moodle';
$string['modulename'] = 'Présence';
$string['modulename_help'] = 'Le module d\'activité présence permet à un enseignant d\'enregistrer les présences aux cours et permet aux étudiants de visualiser leurs présences.

L\'enseignant peut créer plusieurs sessions et noter les participations comme « Présent », « Absent », « Retard » ou « Excusé » et modifier les statuts si besoin.

Les rapports sont disponibles pour la classe entière ou individuellement pour chaque étudiant.';
$string['modulenameplural'] = 'Présences';
$string['months'] = 'Mois';
$string['moreattendance'] = 'Les présences ont bien été enregistrées';
$string['moveleft'] = 'Déplacer à gauche';
$string['moveright'] = 'Déplacer à droite';
$string['multisessionexpanded'] = 'Plusieurs sessions dépliées';
$string['multisessionexpanded_desc'] = 'Affiche le réglage « Plusieurs sessions » comme déplié par défaut lors de la création de nouvelles sessions.';
$string['mustselectusers'] = 'Vous devez sélectionner des utilisateurs à exporter';
$string['newdate'] = 'Nouvelle date';
$string['newduration'] = 'Nouvelle durée';
$string['newstatusset'] = 'Nouvelle série de statuts';
$string['noabsentstatusset'] = 'L\'état défini n\'a pas une valeur à utiliser s\'il n\'est pas marqué.';
$string['noattendanceusers'] = 'Impossible d\'exporter les données puisqu\'il n\'y a aucun utilisateur inscrit dans ce cours.';
$string['noattforuser'] = 'Aucun enregistrement de présence pour l\'utilisateur';
$string['noautomark'] = 'Désactivé';
$string['nocapabilitytotakethisattendance'] = 'Vous avez essayé de modifier la participation à une session avec le cmid : {$a} que vous n\'êtes pas autorisé à modifier.';
$string['nodescription'] = 'Session régulière de cours';
$string['noeventstoreset'] = 'Aucun événement de calendrier ne requiert une mise à jour.';
$string['nogroups'] = 'Cette activité a été configurée pour utiliser des groupes, mais aucun groupe n\'existe dans le cours.';
$string['noguest'] = 'Les invités ne peuvent voir les présences';
$string['noofdaysabsent'] = 'Nombre de jours noté comme absent';
$string['noofdaysexcused'] = 'Nombre de jours noté comme excusé';
$string['noofdayslate'] = 'Nombre de jours noté comme en retard';
$string['noofdayspresent'] = 'Nombre de jours noté comme présent';
$string['nosessiondayselected'] = 'Pas de jour de session sélectionné';
$string['nosessionexists'] = 'Aucune session n\'existe pour ce cours';
$string['nosessionsselected'] = 'Pas de session sélectionnée';
$string['notfound'] = 'Aucune activité Présence dans ce cours !';
$string['notifytask'] = 'Envoyer des notifications aux utilisateurs';
$string['notmember'] = 'non membre';
$string['notset'] = 'non défini';
$string['noupgradefromthisversion'] = 'Le module de présence « Attendance » ne peut pas mettre à niveau l\'ancienne version « attforblock » vous avez installée. Veuillez supprimer l\'ancien module « attforblock » ou mettre à niveau vers la dernière version avant d\'installer le nouveau module de présence « Attendance »';
$string['numsessions'] = 'Nombre de sessions';
$string['olddate'] = 'Ancienne date';
$string['onactivitycompletion'] = 'A la fin de l\'activité';
$string['onlyselectedusers'] = 'Exportation d\'utilisateurs spécifiques';
$string['overallsessions'] = 'Sur toutes les sessions';
$string['overallsessions_help'] = 'Affiche les statistiques pour toutes les sessions, y compris celles qui n\'ont pas encore été prises (passé et futur) :
    <ul>
    <li> <strong>Sessions</strong> : nombre total de sessions. </li>
    <li> <strong>Points</strong> : points attribués en fonction des séances prises. </li>
    <li> <strong>Pourcentage</strong> : pourcentage de points attribués sur le maximum de points possibles pour toutes les sessions. </li>
    </ul>';
$string['oversessionstaken'] = 'Au cours des séances prises';
$string['oversessionstaken_help'] = 'Affiche les statistiques pour les sessions où la participation a été prise :
    <ul>
    <li> <strong>Sessions</strong> : nombre de sessions déjà prises. </li>
    <li> <strong>Points</strong> : points attribués en fonction des séances prises.</li>
    <li> <strong>Pourcentage</strong> : pourcentage de points attribués sur le maximum des points possibles des sessions prises. </li>
    </ul>';
$string['pageof'] = 'Page {$a->page} sur {$a->numpages}';
$string['participant'] = 'Participant';
$string['password'] = 'Mot de passe';
$string['passwordgrp'] = 'Mot de passe étudiant';
$string['passwordgrp_help'] = 'Si défini, les étudiants devront entrer ce mot de passe avant qu\'ils puissent définir leur propre statut de présence pour la session. Si vide, aucun mot de passe n\'est nécessaire.';
$string['passwordrequired'] = 'Vous devez entrer le mot de passe de la session avant de pouvoir valider votre présence';
$string['percentage'] = 'Pourcentage';
$string['percentageallsessions'] = 'Pourcentage de toutes les sessions';
$string['percentagesessionscompleted'] = 'Pourcentage des sessions prises';
$string['pluginadministration'] = 'Administration de Présence';
$string['pluginname'] = 'Présence';
$string['points'] = 'Points';
$string['pointsallsessions'] = 'Points de toutes les sessions';
$string['pointssessionscompleted'] = 'Points sur les sessions prises';
$string['preferences_desc'] = 'Les changements aux statuts peuvent affecter les sessions en cours et les notes qui y sont attribuées.';
$string['preventsharederror'] = 'L\'auto-marquage a été désactivé pour une session car cet appareil semble avoir été utilisé pour enregistrer la présence d\'un autre étudiant.';
$string['preventsharedip'] = 'Empêcher les étudiants de partager des adresses IP';
$string['preventsharedip_help'] = 'Empêcher les étudiants d\'utiliser un même appareil (identifié par l\'utilisation d\'une adresse IP) pour noter la présence d\'autres étudiants.';
$string['preventsharediptime'] = 'Temps nécessaire pour permettre la réutilisation de l\'adresse IP (en minutes)';
$string['preventsharediptime_help'] = 'Autoriser une adresse IP à être réutilisée pour prendre une présence à cette session une fois ce délai écoulé.';
$string['preview'] = 'Aperçu du fichier';
$string['previewhtml'] = 'Aperçu du format HTML';
$string['priorto'] = 'La date de la session est antérieure à la date de début du cours ({$a}). Les nouvelles sessions programmées avant cette date seront par conséquent cachées (non accessibles). Vous pouvez changer la date de début du cours à tout moment (voir les paramètres de cours) afin d\'avoir accès à des sessions antérieures. <br> Merci de changer la date de la session ou cliquez simplement sur le bouton « Ajouter une session » pour confirmer.';
$string['privacy:metadata:attendancelog'] = 'Journal des présences des utilisateurs enregistrées.';
$string['privacy:metadata:attendancesessions'] = 'Sessions auxquelles la participation sera enregistrée.';
$string['privacy:metadata:attendancewarningdone'] = 'Journal des avertissements envoyés aux étudiants sur leur fiche de présence.';
$string['privacy:metadata:duration'] = 'Durée en secondes de la session';
$string['privacy:metadata:groupid'] = 'Identifiant du groupe associé à la session.';
$string['privacy:metadata:ipaddress'] = 'Adresse IP depuis laquelle la présence a été marquée.';
$string['privacy:metadata:lasttaken'] = 'Horodatage de la dernière prise de présence à la session.';
$string['privacy:metadata:lasttakenby'] = 'Identifiant du dernier utilisateur à avoir noté une présence à cette session';
$string['privacy:metadata:notifyid'] = 'Identifiant de la session à laquelle l\'avertissement est associé.';
$string['privacy:metadata:remarks'] = 'Commentaires sur la présence de l\'utilisateur.';
$string['privacy:metadata:sessdate'] = 'Horodatage du début de la session.';
$string['privacy:metadata:sessionid'] = 'Identifiant de la session.';
$string['privacy:metadata:statusid'] = 'Identifiant de l\'état de présence de l\'étudiant.';
$string['privacy:metadata:statusset'] = 'État défini auquel l\'identifiant de l\'état fait partie.';
$string['privacy:metadata:studentid'] = 'Identifiant de l\'étudiant ayant enregistré la présence.';
$string['privacy:metadata:takenby'] = 'Identifiant de l\'utilisateur qui a pris la présence de l\'étudiant.';
$string['privacy:metadata:timemodified'] = 'Horodatage de la dernière modification de la session';
$string['privacy:metadata:timesent'] = 'Horodatage de l\'envoi de l\'avertissement.';
$string['privacy:metadata:timetaken'] = 'Horodatage de la prise de présence pour l\'étudiant.';
$string['privacy:metadata:userid'] = 'Identifiant de l\'utilisateur à qui envoyer l\'avertissement.';
$string['processingfile'] = 'Traitement du fichier';
$string['qr_cookie_error'] = 'La session QR a expiré.';
$string['qr_pass_wrong'] = 'Le mot de passe QR est incorrect ou a expiré.';
$string['qrcode'] = 'Code QR';
$string['randompassword'] = 'Mot de passe aléatoire';
$string['remark'] = 'Remarque pour : {$a}';
$string['remarks'] = 'Remarques';
$string['repeatasfollows'] = 'Répéter la session au-dessus de la manière suivante';
$string['repeatevery'] = 'Répéter tous les';
$string['repeaton'] = 'Répéter le';
$string['repeatuntil'] = 'Répéter juqu\'au';
$string['report'] = 'Rapport';
$string['required'] = 'Requis*';
$string['requiredentries'] = 'Les enregistrements de l\'utilisateur temporaire remplacent les enregistrements de présence du participant fusionné';
$string['requiredentry'] = 'Aide sur la fusion d\'utilisateur temporaire';
$string['requiredentry_help'] = '<p align="center"><b>Présence</b></p>
<p align="left"><strong>Fusion de comptes</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Participant</th>
<th>Utilisateur temporaire</th>
<th>Action</th>
</tr>
<tr>
<td>Données de présence</td>
<td>Données de présence</td>
<td>L\'utilisateur temporaire remplace le Participant</td>
</tr>
<tr>
<td>Pas de données de présence</td>
<td>Données de présence</td>
<td>La présence de l\'utilisateur temporaire sera transférée au Participant</td>
</tr>
<tr>
<td>Données de présence</td>
<td>Pas de données de présence</td>
<td>L\'utilisateur temporaire sera supprimé</td>
</tr>
<tr>
<td>Pas de données de présence</td>
<td>Pas de données de présence</td>
<td>L\'utilisateur temporaire sera supprimé</td>
</tr>
</table>

</p>
<p align="left"><strong>L\'utilisateur temporaire sera supprimé dans tous les cas après l\'action de fusion.</strong></p>';
$string['requiresubnet'] = 'Exiger une adresse réseau';
$string['requiresubnet_help'] = 'L\'enregistrement des présences peut être limitée à des sous-réseaux particuliers en spécifiant une liste d\'IP complètes ou partielles séparées par des virgules.';
$string['resetcaledarcreate'] = 'Les événements de calendrier ont été activés, mais certaines sessions n\'ont pas d\'événements. Voulez-vous créer des événements pour toutes les sessions?';
$string['resetcaledardelete'] = 'Les événements de calendrier ont été désactivés, mais certaines sessions ont des événements qui devraient être supprimés. Voulez-vous supprimer tous les événements correspondant à toutes les sessions?';
$string['resetcalendar'] = 'Réinitialiser le calendrier';
$string['resetdescription'] = 'Rappelez-vous que la suppression des données sur la fréquentation va effacer ces informations de base de données. Vous pouvez simplement cacher les anciennes sessions en changeant la date de début du cours !';
$string['resetstatuses'] = 'Restaurer les statuts par défaut';
$string['restoredefaults'] = 'Restaurer les valeurs par défaut';
$string['resultsperpage'] = 'Résultats par page';
$string['resultsperpage_desc'] = 'Nombre d\'étudiants affichés sur une page';
$string['rotateqrcode'] = 'Code QR rotatif';
$string['rotateqrcode_cleartemppass_task'] = 'Tâche visant à effacer les mots de passe temporaires générés par la fonctionnalité de code QR rotatif.';
$string['rotateqrcodeexpirymargin'] = 'Intervalle de la marge d\'échéance de rotation du QR code/mot de passe (secondes)';
$string['rotateqrcodeexpirymargin_desc'] = 'Intervalle de temps (secondes) pour permettre d\'utiliser un QR code/mot de passe échu.';
$string['rotateqrcodeinterval'] = 'Intervalle de rotation du QR code/mot de passe (secondes)';
$string['rotateqrcodeinterval_desc'] = 'Intervalle de temps (secondes) pour faire tourner le code QR/mot de passe.';
$string['save'] = 'Enregistrer les présences';
$string['scantime'] = 'Durée de l\'analyse';
$string['scantime_help'] = 'Cela permet d\'inclure un horodatage dans le fichier d\'importation - il tentera de convertir l\'horodatage passé à l\'aide de la fonction PHP strtotime, puis utilisera les paramètres de statut de Présence pour décider quel statut définir pour l\'utilisateur';
$string['search:activity'] = 'Présence - information sur l\'activité';
$string['selectactivity'] = 'Sélectionner une activité';
$string['session'] = 'Session';
$string['session_help'] = 'Session';
$string['sessionadded'] = 'Session ajoutée avec succès';
$string['sessionalreadyexists'] = 'La session existe déjà pour cette date';
$string['sessiondate'] = 'Date';
$string['sessiondays'] = 'Jours de session';
$string['sessiondeleted'] = 'Session supprimée avec succès';
$string['sessionduplicate'] = 'Une autre session existe dans le cours {$a->course}, dans l\'activité Présence {$a->activity}, {$a->date}';
$string['sessionexist'] = 'Session non ajoutée (existe déjà) !';
$string['sessiongenerated'] = 'Une session a été générée avec succès';
$string['sessions'] = 'Sessions';
$string['sessionsallcourses'] = 'Tous les cours';
$string['sessionsbyactivity'] = 'Instance de Présence';
$string['sessionsbycourse'] = 'Cours';
$string['sessionsbydate'] = 'Semaine';
$string['sessionscompleted'] = 'Sessions prises';
$string['sessionscurrentcourses'] = 'Cours actuels';
$string['sessionsgenerated'] = '{$a} sessions ont été créées avec succès';
$string['sessionsids'] = 'ID des sessions :';
$string['sessionsnotfound'] = 'Il n\'y a pas de sessions dans la période sélectionnée';
$string['sessionstartdate'] = 'Date de début de session';
$string['sessionstotal'] = 'Nombre total de sessions';
$string['sessionsupdated'] = 'Sessions mises à jour';
$string['sessiontype'] = 'Type';
$string['sessiontype_help'] = 'Vous pouvez ajouter des sessions pour tous les étudiants ou pour un groupe d\'étudiants. La possibilité d\'ajouter différents types dépend du mode de groupe de l\'activité.

* En mode groupe « Aucun groupe », vous ne pouvez ajouter que des sessions pour tous les étudiants.
* En mode groupe « Groupes séparés », vous ne pouvez ajouter que des sessions pour un groupe d\'étudiants.
* En mode groupe « Groupes visibles », vous pouvez ajouter les deux types de sessions.';
$string['sessiontypeshort'] = 'Type';
$string['sessionunknowngroup'] = 'Une session spécifie un(des) groupe(s) inconnu(s) : {$a}';
$string['sessionupdated'] = 'Session enregistrée avec succès';
$string['set_by_student'] = 'Renseigné par l\'étudiant';
$string['setallstatuses'] = 'Définir le statut pour';
$string['setallstatusesto'] = 'Définir le statut pour « {$a} »';
$string['setperiod'] = 'Durée spécifiée en minutes pour libérer l\'adresse IP';
$string['settings'] = 'Paramètres';
$string['setunmarked'] = 'Valeur par défaut lorsque le marquage automatique est activé';
$string['setunmarked_help'] = 'Si le marquage automatique est activé dans les paramètres de la session, sélectionnez la valeur par défaut qui sera attribuée à l\'étudiant si celui-ci omet d\'entrer sa présence.';
$string['showdefaults'] = 'Afficher les valeurs par défaut';
$string['showduration'] = 'Afficher la durée';
$string['showextrauserdetails'] = 'Afficher plus de détails';
$string['showqrcode'] = 'Afficher le code QR';
$string['showsessiondescriptiononreport'] = 'Montrer la description de la session dans le rapport';
$string['showsessiondescriptiononreport_desc'] = 'Montrer la description de la session dans la liste des rapports';
$string['showsessiondetails'] = 'Afficher le détail de la session';
$string['somedisabledstatus'] = '(Certaines options ont été supprimées lorsque la session a débuté).';
$string['sortedgrid'] = 'Tri en grille';
$string['sortedlist'] = 'Tri en liste';
$string['startofperiod'] = 'Début de la période';
$string['starttime'] = 'Heure de début';
$string['status'] = 'Statut';
$string['statusall'] = 'tous';
$string['statusdeleted'] = 'Statut supprimé';
$string['statuses'] = 'Statuts';
$string['statusset'] = 'Série de statut {$a}';
$string['statussetsettings'] = 'Statut défini';
$string['statusunselected'] = 'désélectionné';
$string['strftimedm'] = '%d %m';
$string['strftimedmw'] = '<nobr>%a %d %b</nobr>';
$string['strftimedmy'] = '%d %m %Y';
$string['strftimedmyhm'] = '%d.%m.%Y %H:%M';
$string['strftimedmyw'] = '%d.%m.%y (%a)';
$string['strftimeh'] = '%H:%M';
$string['strftimehm'] = '%H:%M';
$string['strftimeshortdate'] = '%d.%m.%Y';
$string['studentavailability'] = 'Disponible pour les étudiants (minutes)';
$string['studentavailability_help'] = 'Lorsque les élèves marquent leur propre participation, le nombre de minutes après la session commence à indiquer que ce statut est disponible.
 <br/>Si vide, ce statut sera toujours disponible. S\'il est réglé sur 0, il sera toujours caché aux élèves.';
$string['studentid'] = 'ID Étudiant';
$string['studentmarked'] = 'Votre présence à cette session a été enregistrée.';
$string['studentmarking'] = 'Saisie par l\'étudiant';
$string['studentpassword'] = 'Mot de passe étudiant';
$string['studentrecordingexpanded'] = 'Enregistrement des étudiants déplié';
$string['studentrecordingexpanded_desc'] = 'Affiche le paramètre « Enregistrement étudiant » déplié par défaut lors de la création de nouvelles sessions.';
$string['studentscanmark'] = 'Permettre aux étudiants de renseigner eux-mêmes leur présence';
$string['studentscanmark_desc'] = 'Si coché, les enseignants pourront autoriser les étudiants à enregistrer eux-mêmes leur présence.';
$string['studentscanmark_help'] = 'Cette option permet aux étudiants de renseigner eux-mêmes leur statut de présence';
$string['studentscanmarksessiontime'] = 'Les étudiants enregistrent la présence pendant le temps de la session';
$string['studentscanmarksessiontime_desc'] = 'Si cochée, les étudiants ne peuvent enregistrer leur présence qu\'au cours de la session.';
$string['studentscanmarksessiontimeend'] = 'Fin de la session (minutes)';
$string['studentscanmarksessiontimeend_desc'] = 'Si la session n\'a pas d\'heure de fin, combien de minutes la session devrait-elle être disponible pour que les élèves puissent enregistrer leur présence.';
$string['submit'] = 'Envoyer';
$string['submitattendance'] = 'Envoyer le statut de présence';
$string['submitpassword'] = 'Envoyer le mot de passe';
$string['subnet'] = 'Sous-réseau';
$string['subnetactivitylevel'] = 'Autoriser la configuration de sous-réseau au niveau activité';
$string['subnetactivitylevel_desc'] = 'Si activé, les enseignants pourront remplacer le sous-réseau par défaut au niveau de l\'activité lors de la création d\'une présence. Sinon, la valeur par défaut du site sera utilisée lors de la création d\'une session.';
$string['subnetwrong'] = 'La présence ne peut être enregistrée qu\'à partir de certains emplacements, et cet ordinateur n\'est pas sur la liste autorisée.';
$string['summary'] = 'Résumé';
$string['tablerenamefailed'] = 'Le renommage de la table de l\'ancien module attforblock par attendance a échoué.';
$string['tactions'] = 'Action';
$string['takeattendance'] = 'Prendre les présences';
$string['takensessions'] = 'Sessions prises';
$string['tcreated'] = 'Créé';
$string['tempaddform'] = 'Ajouter un utilisateur temporaire';
$string['tempexists'] = 'Il y a déjà un utilisateur temporaire avec le même courriel';
$string['temptable'] = 'Liste des utilisateurs temporaires';
$string['tempuser'] = 'Utilisateur temporaire';
$string['tempusermerge'] = 'Fusionner l\'utilisateur temporaire';
$string['tempusers'] = 'Utilisateurs temporaires';
$string['tempusersedit'] = 'Modifier l\'utilisateur temporaire';
$string['tempuserslist'] = 'Utilisateurs temporaires';
$string['thirdpartyemails'] = 'Notifier les autres utilisateurs';
$string['thirdpartyemails_help'] = 'Liste des autres utilisateurs qui seront notifiés. (nécessite la capacité mod/attendance:viewreports)';
$string['thirdpartyemailsubject'] = 'Avertissement de présence';
$string['thirdpartyemailtext'] = 'La présence de {$a->firstname} {$a->lastname} au cours {$a->coursename} {$a->aname} est inférieure à {$a->warningpercent} ({$a->percent})';
$string['thirdpartyemailtextfooter'] = 'Vous recevez ceci car l\'enseignant du cours a ajouté votre adresse de courriel à la liste des destinataires';
$string['thiscourse'] = 'Ce cours';
$string['time'] = 'Horaire';
$string['timeahead'] = 'Les sessions multiples qui excèdent 1 année ne peuvent pas être crées, merci d\'ajuster les dates de début et de fin.';
$string['to'] = 'à :';
$string['triggered'] = 'Première notification';
$string['tuseremail'] = 'Courriel';
$string['tusername'] = 'Nom complet';
$string['ungraded'] = 'Sessions non notées';
$string['unknowngroup'] = 'Groupe inconnu';
$string['unknownstatus'] = 'Identifiant de statut inconnu : {$a}';
$string['update'] = 'Enregistrer';
$string['uploadattendance'] = 'Déposer les présences en CSV';
$string['usedefaultsubnet'] = 'Utiliser le réglage par défaut';
$string['usemessageform'] = 'ou utiliser le formulaire ci-dessous pour envoyer un message aux étudiants sélectionnés';
$string['userexists'] = 'Il y a déjà un utilisateur inscrit avec le même courriel';
$string['userid'] = 'Identifiant utilisateur';
$string['userimportfield'] = 'Champ utilisateur externe';
$string['userimportfield_help'] = 'Champ du CSV téléchargé contenant l\'identifiant de l\'utilisateur';
$string['userimportto'] = 'Champ utilisateur Moodle';
$string['userimportto_help'] = 'Champ Moodle qui correspond aux données de l\'export CSV';
$string['users'] = 'Utilisateurs à exporter';
$string['usestatusset'] = 'Série de statuts';
$string['variable'] = 'Variable';
$string['variablesupdated'] = 'Variables mises à jour';
$string['versionforprinting'] = 'Version pour impression';
$string['viewmode'] = 'Mode d\'affichage';
$string['warnafter'] = 'Nombre de sessions suivies avant l\'avertissement';
$string['warnafter_help'] = 'Les avertissements ne seront déclenchés que lorsque l\'utilisateur aura noté sa présence pendant au moins ce nombre de sessions.';
$string['warningdeleted'] = 'Avertissement supprimé';
$string['warningdesc'] = 'Ces avertissements seront automatiquement ajoutés à toute nouvelle activité présence. Si plusieurs avertissements sont déclenchés en même temps, seul l\'avertissement avec le seuil d\'avertissement le plus bas sera envoyé.';
$string['warningdesc_course'] = 'Les seuils d’avertissements définis ici affectent le rapport d’absence et permettent aux étudiants et aux tiers d’être notifiés. Si plusieurs avertissements sont déclenchés en même temps, seul l\'avertissement avec le seuil d\'avertissement le plus bas sera envoyé.';
$string['warningfailed'] = 'Vous ne pouvez pas créer un avertissement qui utilise le même pourcentage et le même nombre de sessions.';
$string['warningpercent'] = 'Avertir si le pourcentage passe sous';
$string['warningpercent_help'] = 'Un avertissement sera déclenché lorsque le pourcentage global passera en dessous de ce nombre.';
$string['warnings'] = 'Avertissements';
$string['warningthreshold'] = 'Seuil d\'avertissement';
$string['warningupdated'] = 'Avertissements mis à jour';
$string['week'] = 'semaine(s)';
$string['weekcommencing'] = 'Le début de la semaine';
$string['weeks'] = 'Semaines';
$string['youcantdo'] = 'Vous ne pouvez rien faire';
