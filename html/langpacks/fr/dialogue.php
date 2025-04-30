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
 * Strings for component 'dialogue', language 'fr', version '4.4'.
 *
 * @package     dialogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['ago'] = 'depuis';
$string['attachment'] = 'Pièce-jointe';
$string['attachments'] = 'Pièces-jointes';
$string['bulkopener'] = 'Ouverture massive';
$string['bulkopenrule'] = 'Règle d’ouverture massive';
$string['bulkopenrulenotifymessage'] = '<strong>Note :</strong><br/>Lors de l’utilisation de l’ouverture massive, les conversations ne sont pas ouvertes immédiatement. L’ouverture aura lieu à l’exécution de la tâche cron du système, habituellement toutes les 30 minutes.';
$string['bulkopenrules'] = 'Règles d’ouverture massive';
$string['cachedef_params'] = 'Paramètres - interface utilisateur';
$string['cachedef_participants'] = 'Id des participants (informations de base)';
$string['cachedef_unreadcounts'] = 'Nombre de messages non-lus par les utilisateurs dans les conversations';
$string['cachedef_userdetails'] = 'Détails utilisateur rapide, tous les utilisateurs inscrits';
$string['cannotclosedraftconversation'] = 'Vous ne pouvez pas fermer une converstion n’ayant pas démarrer !';
$string['cannotdeleteopenconversation'] = 'Vous ne pouvez pas effacer une conversation ouverte';
$string['closeconversation'] = 'Fermer la conversation';
$string['closed'] = 'Fermé';
$string['completed'] = 'Complété';
$string['configmaxattachments'] = 'Nombre de pièces-jointes maximal autorisé par post.';
$string['configmaxbytes'] = 'Taille maximum par défaut des pièces-joints pour tous les dialogues du site (soumis à la limite du cours et autres réglages locaux)';
$string['configtrackunread'] = 'Trouver les messages de dialogues non-lus sur la page d’accueil du cours';
$string['configviewconversationsbyrole'] = 'Expérimental : voir les conversations par rôle, organiser la liste des conversations par rôle d’auteur';
$string['configviewstudentconversations'] = 'Expérimental : liste des étudiants avec les conversations dans lesquelles ils sont impliqués';
$string['conversationcloseconfirm'] = 'Voulez-vous vraiment fermer la conversation {$a} ?';
$string['conversationclosed'] = 'La conversation {$a} a été fermée';
$string['conversationdeleteconfirm'] = 'Voulez-vous vraiment supprimer la conversation {$a} ? Cette action est définitive.';
$string['conversationdeleted'] = 'La conversation {$a} a été supprimée';
$string['conversationdiscarded'] = 'Conversation écartée';
$string['conversationlistdisplayheader'] = 'Affichage {$a->show} {$a->state} conversations {$a->groupname}';
$string['conversationopened'] = 'La converation a été ouverte';
$string['conversationopenedcron'] = 'Les conversations seront ouvertes automatiquement';
$string['conversationopenedwith'] = '<strong>1</strong> conversationouverte avec :';
$string['conversations'] = 'Conversations';
$string['conversationsopenedwith'] = '<strong>{$a}</strong> conversations ouvertes avec :';
$string['cutoffdate'] = 'Date butoir';
$string['datefullyear'] = '{$a->datefull} <small>({$a->time})</small>';
$string['dateshortyear'] = '{$a->dateshort} <small>({$a->time})</small';
$string['day'] = 'jour';
$string['days'] = 'jours';
$string['deleteconversation'] = 'Effacer la conversation';
$string['deletereply'] = 'Effacer la réponse';
$string['dialogue:addinstance'] = 'Ajouter un dialogue';
$string['dialogue:bulkopenrulecreate'] = 'Créer une règle d’ouverture massive';
$string['dialogue:bulkopenruleeditany'] = 'Autoriser les utilisateurs à modifier toutes les règles (utile pour les administrateurs)';
$string['dialogue:close'] = 'Fermer une conversation';
$string['dialogue:closeany'] = 'Fermer tout';
$string['dialogue:delete'] = 'Supprimer personnel';
$string['dialogue:deleteany'] = 'supprimer tout';
$string['dialogue:open'] = 'Ouvrir une conversation';
$string['dialogue:receive'] = 'Recevoir, qui peut être le destinataire à l’ouverture d’une conversation.';
$string['dialogue:reply'] = 'Répondre';
$string['dialogue:replyany'] = 'Répondre à tous';
$string['dialogue:viewany'] = 'Voir tous';
$string['dialogue:viewbyrole'] = 'Voir la liste des conversations par rôle, expérimental';
$string['dialoguecron'] = 'Cron Dialogue';
$string['dialogueintro'] = 'Description';
$string['dialoguename'] = 'Nom du dialogue';
$string['displaybystudent'] = 'Afficher par étudiant';
$string['displayconversationsheading'] = 'Afficher {$a} conversations';
$string['displaying'] = 'Afficher';
$string['draft'] = 'Brouillon';
$string['draftconversation'] = 'Conversation brouillon';
$string['draftconversationtrashed'] = 'Conversations brouillons supprimées';
$string['draftlistdisplayheader'] = 'Afficher mes brouillons';
$string['draftreply'] = 'Réponses brouillons';
$string['draftreplytrashed'] = 'Réponses brouillons supprimées';
$string['drafts'] = 'Brouillons';
$string['errorcutoffdateinpast'] = 'La date butoir ne peut être définie à une date passée';
$string['erroremptymessage'] = 'Le message ne peut pas être vide';
$string['erroremptysubject'] = 'Le sujet ne peut pas être vide';
$string['errornoparticipant'] = 'Vous devez ouvrir un dialogue avec quelqu’un';
$string['eventconversationclosed'] = 'Conversation fermée';
$string['eventconversationcreated'] = 'Conversation créée';
$string['eventconversationdeleted'] = 'Conversation effacée';
$string['eventconversationviewed'] = 'Conversation vue';
$string['eventreplycreated'] = 'Réponse créée';
$string['everybody'] = 'Tout le monde (accessible à tous)';
$string['everyone'] = 'Tout le monde';
$string['everyones'] = 'À tout le monde';
$string['firstname'] = 'Prénom';
$string['fullname'] = 'Nom complet';
$string['groupmodenotifymessage'] = 'Cette activité fonctionne en groupe, ceci affectera avec qui vous pouvez démarrer une conversation et quelles conversations sont affichées.';
$string['hasnotrun'] = 'N’a pas encore démarré';
$string['hour'] = 'heure';
$string['hours'] = 'heures';
$string['includefuturemembers'] = 'Inclure les futurs membres';
$string['ingroup'] = 'en groupe {$a}';
$string['justmy'] = 'juste mon';
$string['lastname'] = 'Nom de famille';
$string['lastranon'] = 'Dernière éxécution à';
$string['latest'] = 'Dernier';
$string['listpaginationheader'] = '{$a->start}-{$a->end} sur {$a->total}';
$string['matchingpeople'] = 'Personnes correspondant à ({$a})';
$string['maxattachments'] = 'Nombre maximum de pièces-jointes';
$string['maxattachments_help'] = 'Ce règlage définit le nombre de maximum de fichiers pouvant être attachés à un message de dialogue.';
$string['maxattachmentsize'] = 'Taille de pièce-jointe maximale';
$string['maxattachmentsize_help'] = 'Ce règlage définit la taille maximale des fichiers pouvant être attachés à un message de dialogue.';
$string['message'] = 'Message';
$string['messageapibasicmessage'] = '<p>{$a->userfrom} a posté un nouveau message dans une conversation à laquelle vous participez avec comme sujet : <i>{$a->subject}</i>
<br/><br/><a href="{$a->url}">Voir dans Moodle</a></p>';
$string['messageapismallmessage'] = '{$a} a posté un nouveau message dans une conversation à laquelle vous participez';
$string['messageprovider:post'] = 'Notifications de dialogue';
$string['messages'] = 'messages';
$string['mine'] = 'Personnel';
$string['minute'] = 'minute';
$string['minutes'] = 'minutes';
$string['modulename'] = 'Dialogue';
$string['modulename_help'] = 'Les dialogues permet aux étudiants et aux enseignants de démarrer des conversations avec d’autres personnes. Il s’agit d’activités de cours pouvant être utiles lorsque l’enseignant à besoin d’un espace pour donner un feedbacks personnalisé à un étudiant sur ses activités. Par exemple, si un étudiant participe à un forum de langage et fait une faute de grammaire que l’enseignant veut corriger sans embarrasser l’étudiant, un dialogue est l’endroit parfait pour cela. Une activité dialogue pourrait aussi être un excellent moyen pour des conseillers  au sein d’une institution d’interagir avec les étudiants - toutes les activités sont enregistrées et les adresses électroniques ne sont pas nécessairement requises.';
$string['modulenameplural'] = 'Dialogues';
$string['month'] = 'mois';
$string['months'] = 'mois';
$string['nobulkrulesfound'] = 'Pas d’envoi en masse trouvé !';
$string['noconversationsfound'] = 'Pas de conversations trouvées !';
$string['nodraftsfound'] = 'Pas de brouillons trouvés !';
$string['nomatchingpeople'] = 'Aucune personne correspondant à « {$a} »';
$string['nopermissiontoclose'] = 'Vous n’avez pas la permission de clore cette conversation !';
$string['nopermissiontodelete'] = 'Vous n’avez pas la permission de supprimer !';
$string['nosubject'] = '[pas de sujet]';
$string['numberattachments'] = '{$a} annexes';
$string['numberunread'] = '{$a} non-lu';
$string['oldest'] = 'Plus ancien';
$string['onlydraftscanbetrashed'] = 'Seuls les brouillons peuvent-être mis à la corbeille';
$string['open'] = 'Ouvert';
$string['openedbyfullyear'] = '<small>Ouvert par</small> <strong>{$a->fullname}</strong> <small>le</small> {$a->datefull} <small>({$a->time})</small>';
$string['openedbyshortyear'] = '<small>Ouvert par</small> <strong>{$a->fullname}</strong> <small>le</small> {$a->dateshort} <small>({$a->time})</small>';
$string['openedbytoday'] = '<small>Ouvert par</small> <strong>{$a->fullname}</strong> <small>à</small> {$a->time} <small>({$a->timepast}) passé</small>';
$string['openwith'] = 'Ouvrir avec';
$string['participants'] = 'participants';
$string['people'] = 'Personnes';
$string['pluginadministration'] = 'Administration de dialogue';
$string['pluginname'] = 'Dialogue';
$string['repliedby'] = '<strong>{$a->fullname}</strong> <small>a répondu</small> {$a->timeago}';
$string['repliedbyfullyear'] = '<strong>{$a->fullname}</strong> <small>a répondu le</small> {$a->datefull} <small>({$a->time})</small>';
$string['repliedbyshortyear'] = '<strong>{$a->fullname}</strong> <small>a répondu le</small> {$a->dateshort} <small>({$a->time})</small>';
$string['repliedbytoday'] = '<strong>{$a->fullname}</strong> <small>a répondu à</small> {$a->time} <small>({$a->timepast}) ago</small>';
$string['reply'] = 'Répondre';
$string['replydeleteconfirm'] = 'Voulez-vous vraiment répondre ?';
$string['replydeleted'] = 'La réponse a été supprimée';
$string['replysent'] = 'Votre réponse a été envoyée';
$string['runsuntil'] = 'Disponible jusqu’à';
$string['savedraft'] = 'Sauvegarder brouillon';
$string['searchpotentials'] = 'Recherches potentielles…';
$string['second'] = 'seconde';
$string['seconds'] = 'secondes';
$string['send'] = 'Envoyer';
$string['senton'] = '<small><strong>Envoyé le : </strong></small>';
$string['sortedby'] = 'Classé par : {$a}';
$string['studenttostudent'] = 'Étudiant à étudiant';
$string['subject'] = 'Sujet';
$string['teachertostudent'] = 'Enseignant à étudiant';
$string['trashdraft'] = 'Supprimer les brouillons';
$string['unread'] = 'Non-lu';
$string['unreadmessages'] = 'Messages non-lus';
$string['unreadmessagesnumber'] = '{$a} messages non-lus';
$string['unreadmessagesone'] = '1 message non-lu';
$string['usecoursegroups'] = 'Utiliser les groupes du cours';
$string['usecoursegroups_help'] = 'Si le cours possède des groupes une restriction supplémentaire sera ajoutée concernant avec qui il est possible d’ouvrir un dialogue. Les dialogues peuvent uniquement être ouverts entre membres du même groupe à moins que la personne ouvrant le dialogue aie la capacité "Accès à tous les groupes" de définie.';
$string['usesearch'] = 'Utiliser la recherche pour trouver une personne avec qui commencer un dialogue';
$string['viewconversations'] = 'Voir les conversations';
$string['viewconversationsbyrole'] = 'Voir les conversations par rôle';
$string['week'] = 'semaine';
$string['weeks'] = 'semaines';
$string['year'] = 'an';
$string['years'] = 'ans';
