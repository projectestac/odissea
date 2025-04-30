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
 * Strings for component 'oublog', language 'fr', version '4.4'.
 *
 * @package     oublog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Désolé, vous n’avez pas accès à cette page.';
$string['accordion_closed'] = 'fermé';
$string['accordion_open'] = 'ouvert';
$string['activeblogs'] = 'actif';
$string['addcomment'] = 'Ajouter un commentaire';
$string['addlink'] = 'Ajouter un lien';
$string['addpost'] = 'Ajouter un article';
$string['advancedoptions'] = 'Options avancées';
$string['afterendcomment'] = 'Impossible de poster un commentaire ?; fin des commentaires : {$a}.';
$string['afterendcommentcapable'] = 'Les étudiants pouvaient commenter les articles jusqu’à {$a}. Vous pouvez commenter après cette date.';
$string['afterendpost'] = 'Vous ne pouvez plus créer d’articles. Fin de la création des pages le {$a}.';
$string['afterendpostcapable'] = 'Les étudiants pouvaient créer leurs propres articles jusqu’à {$a}. Vous pouvez créer des articles après ce temps.';
$string['allowcomments'] = 'Autoriser les commentaires';
$string['allowcommentsmax'] = 'Commentaires autorisés (si ce paramètre est défini)';
$string['allowimport'] = 'L’import d’articles est autorisé';
$string['allowimport_help'] = 'Permet à tous les utilisateurs d’importer des pages depuis d’autres activités de blog auxquels ils ont accès';
$string['allowimport_invalid'] = 'L’importation d’article n’est autorisée que lorsque l’activité est en mode individuel';
$string['alpha'] = 'De A à Z';
$string['atom'] = 'Atom';
$string['atomfeed'] = 'Flux Atom';
$string['attachments'] = 'Attachements';
$string['attachments_help'] = 'Vous pouvez lier un ou plusieurs fichiers à une page du blog. Si vous liez une image elle sera affichée après le message.';
$string['beforeendcomment'] = '.Vous pouvez commenter un article seulement jusqu’à {$a},';
$string['beforeendcommentcapable'] = 'Les étudiants peuvent commenter les pages du blog jusqu’à {$a}. Vous avez accès aux commentaires après cette heure.';
$string['beforeendpost'] = 'Vous pouvez seulement créer un article jusqu’à {$a}.';
$string['beforeendpostcapable'] = 'Les étudiants peuvent créer leurs articles jusqu’à {$a}.
<br/> Vous pouvez créer des articles après cette date.';
$string['beforestartcomment'] = 'Vous ne pouvez pas créer de commentaires maintenant. Les commentaires seront autorisés à partir de {$a}.';
$string['beforestartcommentcapable'] = 'Les étudiants ne peuvent pas ajouter de commentaires jusqu’à {$a}.
<br/> Vous pouvez commenter avant cette date.';
$string['beforestartpost'] = 'Vous ne pouvez pas créer d’articles maintenant. La création d’artcles sera permise à partir de {$a}';
$string['beforestartpostcapable'] = 'Les étudiants ne peuvent pas ajouter leurs propres articles jusqu’à {$a}.
<br/> Vous pouvez publier des articles avant cette date.';
$string['blogfeed'] = '{$a} flux';
$string['bloginfo'] = 'Informations';
$string['blogname'] = 'Titre du Blog';
$string['blogoptions'] = 'Options du blog';
$string['blogsummary'] = 'Résumé du blog';
$string['cancel'] = 'Annuler';
$string['comment'] = 'Ajouter votre commentaire';
$string['commentfrom'] = 'Les commentaires sont autorisés à partir du';
$string['commentonby'] = 'Commentaire de l’article <u>{$a->title}</u> {$a->date} par <u>{$a->author}</u>';
$string['commentonbyusers'] = 'Commentaire <u>{$a->commenttitle}</u> de l’article <u>{$a->posttitle}</u> <br> par <u>{$a->author}</u>';
$string['commentposts'] = 'Articles les plus commentés';
$string['commentposts_info_alltime'] = 'Articles avec le plus grand nombre de commentaires';
$string['commentposts_info_thismonth'] = 'Articles avec le plus grand nombre de commentaires ajoutés le mois passé';
$string['commentposts_info_thisyear'] = 'Articles avec le plus grand nombre de commentaires ajoutés l’année passée';
$string['comments'] = 'Commentaires';
$string['comments_info_alltime'] = '{$a}s avec le plus de commentaires';
$string['comments_info_thismonth'] = '{$a}s avec le plus de commentaires ajoutés le mois passé';
$string['comments_info_thisyear'] = '{$a}s avec le plus de commentaires ajoutés l’année passée';
$string['commentsby'] = 'Commentaires de {$a}';
$string['commentsfeed'] = 'Commentaires seulement';
$string['commentsnotallowed'] = 'Les commentaires ne sont pas autorisés';
$string['commentuntil'] = 'Les commentaires sont autorisés seulement jusque';
$string['completioncomments'] = 'L’utilisateur doit commenter les articles du blog:';
$string['completioncommentsgroup'] = 'Les commentaires sont obligatoires';
$string['completioncommentsgroup_help'] = 'En activant cette option, l’activité de ce blog sera considérée comme achevée lorsqu’un étudiant aura déposé le nombre requis de commentaires';
$string['completionposts'] = 'L’utilisateur doit publier des articles';
$string['completionpostsgroup'] = 'Des articles sont requis';
$string['completionpostsgroup_help'] = 'Si vous activez cette option, le blog sera considéré comme achevé pour un étudiant qui aura publié le nombre requis d’articles';
$string['configmaxattachments'] = 'Nombre maximum de fichiers joints par article';
$string['configmaxbytes'] = 'Taille maximum par défaut des fichiers attachés pour chaque blog du site (voir les limites définies pour le cours et d’autres paramètres locaux)';
$string['configremoteserver'] = 'Adresse racine (wwwroot) du serveur distant à utiliser pour importer des articles. Les blogs de ce serveur seront affichés en plus de ceux du serveur local durant l’importation des articles.';
$string['configremotetoken'] = 'Jeton d’accès de l’utilisateur du service Web d’oublog pour l’importation depuis le serveur distant';
$string['confirmdeletecomment'] = 'Voulez-vous vraiment supprimer ce commentaire ?';
$string['confirmdeletelink'] = 'Voulez-vous vraiment supprimer ce lien ?';
$string['confirmdeletepost'] = 'Voulez-vous vraiment supprimer cer article ?';
$string['contribution'] = 'Activité';
$string['contribution_all'] = 'Activité - depuis le début';
$string['contribution_from'] = 'Activité - depuis {$a}';
$string['contribution_fromto'] = 'Activité - depuis {$a->start} Jusqu’à {$a->end}';
$string['contribution_to'] = 'Activité - jusqu’à {$a}';
$string['copytoself'] = 'Envoyez une copie à vous-même';
$string['couldnotaddcomment'] = 'L’ajout de commentaire est impossible';
$string['couldnotaddlink'] = 'Impossible d’ajouter un lien';
$string['defaultpersonalblogname'] = '{$a->displayname} {$a->name}';
$string['delete'] = 'Supprimer';
$string['deleteandemail'] = 'Supprimer et envoyer';
$string['deletedblogpost'] = 'Article sans titre';
$string['deletedby'] = 'Supprimé par {$a->fullname}, le {$a->timedeleted}';
$string['deleteemailpostbutton'] = 'Supprimer et envoyer';
$string['deleteemailpostdescription'] = 'Sélectionner pour supprimer cet article ou pour supprimer l’article et envoyer un courriel personnalisé de notification.';
$string['deleteglobalblog'] = 'Vous ne pouvez pas supprimer l’ensemble du blog';
$string['details'] = 'Détails';
$string['displayname_default'] = 'blog';
$string['displayversion'] = 'Version de OU Blog <strong>{$a}</strong>';
$string['downloadas'] = 'Télécharger les données et les enregistrer sous';
$string['downloadcsv'] = 'CSV, document tableur au format texte (, => séparateur de texte)';
$string['edit'] = 'Modifier';
$string['editlink'] = 'Modifier le lien';
$string['editonsummary'] = 'Modifié le {$a->editdate}';
$string['editpost'] = 'Modifier cette page';
$string['editsummary'] = 'Modifié par {$a->editby}, le {$a->editdate}';
$string['emailerror'] = 'Une erreur s’est produite pendant l’envoi du courriel';
$string['emailmessage'] = 'Message';
$string['end'] = 'À';
$string['error_alreadyapproved'] = 'Commentaire déjà approuvé ou rejeté';
$string['error_grouppubliccomments'] = 'Vous ne pouvez pas autoriser les commentaires publiques quand le blog est en mode de groupe';
$string['error_moderatednotallowed'] = 'Les commentaires, même après modération, ne sont plus autorisés sur ce blog ou sur cet article du blog';
$string['error_noconfirm'] = 'Entrer exactement le texte en gras au dessus dans cette boite';
$string['error_toomanycomments'] = 'Vous avez fait trop de commentaires durant la dernière heure à partir de cette adresse internet. Veuillez patienter un peu et essayer à nouveau.';
$string['error_unspecified'] = 'Le système ne peut pas réaliser la requête parce que une erreur s’est produite {$a})';
$string['error_wrongkey'] = 'Clé de commentaire incorrecte';
$string['event:commentapproved'] = 'Commentaire approuvé';
$string['event:commentcreated'] = 'Commentaire créé';
$string['event:commentdeleted'] = 'Commentaire supprimé';
$string['event:participationviewed'] = 'Cette participation a été vue';
$string['event:postcreated'] = 'Article créé';
$string['event:postdeleted'] = 'Article supprimé';
$string['event:postimported'] = 'Article importé';
$string['event:postupdated'] = 'Article mis à jour';
$string['event:postviewed'] = 'Article lu';
$string['export:header'] = 'Exporter';
$string['export:header_author'] = 'Auteur';
$string['export:header_date_posted'] = 'Date de publication';
$string['export:header_tags'] = 'Mots-clés';
$string['export:header_title'] = 'Titre';
$string['export:title'] = 'Exporter';
$string['export:type'] = 'Type d’exportation';
$string['exportedpost'] = 'Article exporté';
$string['exportpostscomments'] = 'Tous les articles actuellement visibles et leurs commentaires.';
$string['exportuntitledpost'] = 'Un article sans titre';
$string['externaldashboardadd'] = 'Ajouter le blog à mon tableau de bord';
$string['externaldashboardremove'] = 'Supprimer le blog de mon tableau de bord';
$string['extra_emails_help'] = 'Entrer une ou plusieurs adresses électroniques séparées par des espaces ou des points-virgules';
$string['extranavolderposts'] = 'Articles précédents : {$a->from}-{$a->to}';
$string['extranavtag'] = 'Filtre : {$a}';
$string['feedhelp'] = 'Flux';
$string['feedhelp_help'] = '\'Si vous utilisez les flux de diffusion vous pouvez ajouter les liens ATOM ou RSS dans le but de recevoir les notifications des mises à jour.
<br> La plupart des navigateurs supportent les flux Atom ou RSS.
<br> Si les commentaires sont activés, il existe aussi des flux d’information les concernant uniquement.';
$string['feeds'] = 'Flux d’information';
$string['feedsnotenabled'] = 'Les flux de suivi (RSS ou Atom) ne sont pas activés';
$string['filter'] = 'Filtre:';
$string['filter-tooltip'] = 'Cliquer pour supprimer le filtrage par mot-clé';
$string['globalblogmissing'] = 'Il n’y a pas de blog global';
$string['group'] = 'Groupe';
$string['import'] = 'Importer';
$string['import_notallowed'] = 'L’importation d’articles est déactivée pour ce {$a}.';
$string['import_step0_blog'] = 'Importer un blog';
$string['import_step0_inst'] = 'À partir de la liste ci-dessous, vous pouvez importer tout le blog ou des articles sélectionnés';
$string['import_step0_nonefound'] = 'Vous n’avez accès à aucune des activités à partir desquelles l’importation d’articles est possible.';
$string['import_step0_numposts'] = '({$a} articles)';
$string['import_step0_selected_posts'] = 'Importer les articles sélectionnés';
$string['import_step1_all'] = 'Tout sélectionner';
$string['import_step1_from'] = 'Importer depuis :';
$string['import_step1_include_label'] = 'Importer l’article - {$a}';
$string['import_step1_inst'] = 'Sélectionner les articles à importer';
$string['import_step1_table_posted'] = 'Date de publication';
$string['import_step1_table_tags'] = 'Mots-clés (tags)';
$string['import_step1_table_title'] = 'Titre';
$string['import_step2_cancel_submit'] = 'Ne pas importer les articles dupliqués';
$string['import_step2_conflicts_submit'] = 'Importer les articles dupliqués';
$string['import_step2_inst'] = 'Importation des articles:';
$string['import_step2_none'] = 'Aucun article sélectionné poiur l’importation';
$string['import_step2_prog'] = 'Importation en cours';
$string['individualblogs'] = 'Blogs individuels';
$string['info'] = 'Activité durant la période sélectionnée';
$string['introonpost'] = 'Afficher la présentation pendant la publication';
$string['invalidblog'] = 'L’identifiant du blog est non valide';
$string['invalidcomment'] = 'L’identifiant du commentaire est non valide';
$string['invalidformat'] = 'Le format des flux doit être atom ou rss';
$string['invalidlink'] = 'L’identifiant du lien est non valide';
$string['invalidpost'] = 'L’identifiant de l’article est non valide';
$string['lastmodified'] = 'Dernier article : {$a}';
$string['maxattachments'] = 'Nombre maximum d’attachements';
$string['maxattachments_help'] = 'Ce paramètre définit le nombre maximum de fichiers qui peuvent être joints à un article du blog';
$string['maxattachmentsize'] = 'Taille maximum d’un fichier attaché';
$string['maxattachmentsize_help'] = 'Ce paramètre définit la taille maximum pour l’utilisation d’une image dans le blog.';
$string['message'] = 'Message';
$string['moderated_addedcomment'] = 'Merci d’avoir ajouté votre commentaire qui a été bien reçu. Ce commentaire ne sera affiché que lorsque l’auteur de l’article l’aura approuvé.';
$string['moderated_approve'] = 'Approuver ce commentaire';
$string['moderated_authorname'] = 'Votre nom';
$string['moderated_awaiting'] = 'Commentaires en attente d’approbation';
$string['moderated_confirm'] = 'Confirmation';
$string['moderated_confirminfo'] = 'Veuillez saisir <strong>yes</strong> dans la boite ci-dessous pour confirmer que vous êtes une personne.';
$string['moderated_confirmvalue'] = 'oui';
$string['moderated_reject'] = 'Refuser ce commentaire';
$string['moderated_rejectedon'] = 'Refusé {$a}:';
$string['moderated_restrictpage'] = 'Empêcher les commentaires';
$string['moderated_restrictpost'] = 'Empêcher les commentaires de ce';
$string['moderated_submitted'] = 'En attente de modération';
$string['modulename'] = 'OU blog';
$string['modulenameplural'] = 'Ou blogs';
$string['myparticipation'] = 'Résumé de mon activité';
$string['ncomments'] = '{$a} commentaires';
$string['newblogposts'] = 'Nouveaux articles du blog';
$string['newcomment'] = 'Nouveau commentaire';
$string['newerposts'] = 'Nouveaux articles';
$string['newpost'] = 'Nouvel article de {$a}';
$string['no'] = 'Non';
$string['no_blogtogetheroringroups'] = 'Non (le blog est commun ou par groupe)';
$string['noblogposts'] = 'Aucun article';
$string['nocomments'] = 'Les commentaires ne sont pas autorisés';
$string['numbercomments'] = '{$a} commentaires';
$string['numberofposts'] = 'Nombre d’articles par page';
$string['numberofposts_help'] = 'Définit le nombre d’articles à afficher pour une page dans un blog';
$string['numberposts'] = '{$a} articles';
$string['numberviews'] = '{$a} vues';
$string['numposts'] = '{$a} articles';
$string['official'] = 'Définir';
$string['olderposts'] = 'Articles précédents';
$string['onecomment'] = '{$a} commentaire';
$string['onepending'] = '{$a} commentaire en attente d’approbation';
$string['onependingafter'] = ', {$a} en attente d’approbation';
$string['onlyworkspersonal'] = 'Ne fonctionne que lorsque les blogs sont ind';
$string['order'] = 'Ordre :';
$string['oublog'] = 'OU blog';
$string['oublog:addinstance'] = 'Ajouter une nouvelle activité OU blog';
$string['reportingemail'] = 'Rapport des adresses électroniques';
$string['restricttags'] = 'Options des mots-clés';
$string['restricttags_default'] = 'Ajouter les mots-clés par défaut';
$string['restricttags_req'] = 'Vous devez choisir des mots-clés';
$string['restricttags_req_set'] = 'Vous devez choisir seulement des mots-clés prédéfinis';
$string['restricttags_set'] = 'Seuls les mots-clés prédéfinis sont autorisés';
$string['restricttagslist'] = 'Vous ne pouvez utiliser que les mots-clés qui ont été prédéfinis';
$string['rss'] = 'RSS';
$string['rssfeed'] = 'Flux RSS';
$string['savefailtitle'] = 'Cet article ne peut pas être enregistré';
$string['savegrades'] = 'Enregistrer les "grades"';
$string['search:activity'] = 'OU blog - Information sur l’activité';
$string['search:comments'] = 'Ou blog - commentaires des articles';
$string['search:post'] = 'OU blog - articles';
$string['searchthisblog'] = 'rechercher : {$a}';
$string['sendanddelete'] = 'Envoyer et supprimer';
$string['separateindividual'] = 'Les individus sont séparés';
$string['separateindividualblogs'] = 'Blogs individuels séparés';
$string['share'] = 'Partager cetr article';
$string['sharedblog'] = 'Blog partagé';
$string['sharedblog_error'] = 'Erreur - aucun blog ne possède cet identifiant';
$string['sharedblog_existed'] = 'C’est l’identifiant d’un blog "enfant"';
$string['sharedblog_invalid'] = 'Aucun numéro d’identifiant ne correspond';
$string['sharedblog_invalid_morethan1'] = 'Plus d’un identifiant correspond';
$string['sharedblog_mastered'] = 'Ce blog est déjà un blog parent';
$string['strftimerecent'] = '%d %B %y, %H:%M';
$string['subscribefeed'] = 'Souscrire à un flux (nécessite un logiciel approprié) afin de recevoir les notifications quand ce contenu ({$a}) est mis à jour';
$string['summary'] = 'Résumé';
$string['tags'] = 'Mots-clés (Tags)';
$string['tags_help'] = 'Les mots-clés (tags) facilitent la recherche et le classement des articles';
$string['tagsfield'] = 'Mots-clés (tags), séparés par une virgule';
$string['tagupdatefailed'] = 'Impossible de mettre à jour les mots-clés';
$string['teachergrading'] = 'L’enseignant définit le "grade" des étudiants';
$string['timefilter_alltime'] = 'Toute la durée';
$string['timefilter_close'] = 'Masquer les options';
$string['timefilter_label'] = 'Période';
$string['timefilter_open'] = 'Montrer les options';
$string['timefilter_submit'] = 'Mettre à jour';
$string['timefilter_thismonth'] = 'Le mois dernier';
$string['timefilter_thisyear'] = 'L’année passée';
$string['timestartenderror'] = 'La date de la fin de la sélection ne peut être antérieure à la date de démarrage';
$string['title'] = 'Titre';
$string['tweet'] = 'Tweet';
$string['untitledcomment'] = 'Commentaire sans titre';
$string['untitledpost'] = 'Article sans titre';
$string['url'] = 'Adresse web complète';
$string['use'] = 'Le plus utilisé';
$string['usergrade'] = 'Niveau de l’utilisateur';
$string['userparticipation'] = 'Activité de l’utilisateur';
$string['usersparticipation'] = 'Activité de tous les utulisateurs';
$string['viewallparticipation'] = 'Voir toute l’activité';
$string['viewallusers'] = 'Voir tous les utiliaturs';
$string['viewallusersingroup'] = 'Voir tous les utilisateurs du groupe';
$string['viewblogdetails'] = 'Voir les détails du blog';
$string['viewblogposts'] = 'Retour au blog';
$string['viewmyparticipation'] = 'Voir mon activité';
$string['views'] = 'Total des visites de {$a}:';
$string['visibility'] = 'Qui peut lire ceci ?';
$string['visibleblogusers'] = 'Visible seulement par les participants à ce blog';
$string['visiblecourseusers'] = 'Visible par les participants à ce cours';
$string['visibleindividualblogs'] = 'Blogs personnels visibles';
$string['visibleloggedinusers'] = 'Visible par les utilisateurs authentifiés';
$string['visiblepublic'] = 'Visible par tous les internautes';
$string['visibleyou'] = 'Seulement visible par le propriétaire du blog';
$string['visits'] = 'Le plus visité';
$string['visits_info_alltime'] = '{$a}s avec le plus grand nombre de visites';
$string['yes'] = 'Oui';
