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
 * Strings for component 'tool_dataprivacy', language 'fr', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_dataprivacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Activités et ressources';
$string['addcategory'] = 'Ajouter une catégorie';
$string['addpurpose'] = 'Ajouter une finalité';
$string['approve'] = 'Approuver';
$string['approverequest'] = 'Approuver la demande';
$string['cachedef_contextlevel'] = 'Niveaux de contexte des catégories et finalités';
$string['cachedef_purpose'] = 'Finalité des données';
$string['cancelrequest'] = 'Annuler la demande';
$string['cancelrequestconfirmation'] = 'Voulez-vous vraiment annuler cette demande de données ?';
$string['categories'] = 'Catégories';
$string['categorieslist'] = 'Liste des catégories de données';
$string['category'] = 'Catégorie';
$string['categorycreated'] = 'Catégorie créée';
$string['categoryupdated'] = 'Catégorie modifiée';
$string['close'] = 'Fermer';
$string['compliant'] = 'Conforme';
$string['confirmapproval'] = 'Voulez-vous vraiment approuver cette demande de données ?';
$string['confirmcontextdeletion'] = 'Voulez-vous vraiment confirmer la suppression des contextes sélectionnés ? Ceci supprimera également toutes les données des utilisateurs des sous-contextes concernés.';
$string['confirmdenial'] = 'Voulez-vous vraiment refuser cette demande de données ?';
$string['contactdataprotectionofficer'] = 'Contacter le délégué à la protection des données';
$string['contactdataprotectionofficer_desc'] = 'L\'activation de cette fonctionnalité fournira un lien aux utilisateurs, permettant de contacter le délégué à la protection des données de ce site. Ce lien sera affiché sur leur profil ainsi que sur la page de la politique de confidentialité. Le lien conduit à un formulaire grâce auquel l\'utilisateur peut faire une demande de données auprès du délégué à la protection des données.';
$string['contactdpoviaprivacypolicy'] = 'Veuillez contacter le délégué à la protection des données du site, conformément à la politique de confidentialité.';
$string['contextlevelname10'] = 'Site';
$string['contextlevelname30'] = 'Utilisateurs';
$string['contextlevelname40'] = 'Catégories de cours';
$string['contextlevelname50'] = 'Cours';
$string['contextlevelname70'] = 'Modules d\'activité';
$string['contextlevelname80'] = 'Bloc';
$string['contextpurposecategorysaved'] = 'Finalité et catégorie enregistrées.';
$string['createcategory'] = 'Créer une catégorie de données';
$string['createpurpose'] = 'Créer une finalité de données';
$string['datadeletion'] = 'Suppression de données';
$string['datadeletionpagehelp'] = 'Les données dont la période de conservation est échue sont énumérées ici. Veuillez vérifier et confirmer la suppression des données, qui sera effectuée lors du prochain lancement de la tâche programmée « Supprimer les contextes échus ».';
$string['dataprivacy:makedatarequestsforchildren'] = 'Faire une demande de données pour enfants';
$string['dataprivacy:managedataregistry'] = 'Gérer le registre des données';
$string['dataprivacy:managedatarequests'] = 'Gérer les demandes de données';
$string['dataregistry'] = 'Registre des données';
$string['dataregistryinfo'] = 'Le registre des données permet de définir des catégories (types de données) et des finalités (les raisons du traitement des données) pour tous les contenus du site — depuis les utilisateurs et les cours jusqu\'aux activités et aux blocs. Pour chaque finalité, une période de conservation peut être fixée. Lorsqu\'une période de conservation est échue, les données sont marquées et listées pour suppression, dans l\'attente d\'une confirmation de l\'administrateur.';
$string['datarequestcreatedforuser'] = 'Demande de données créée pour {$a}';
$string['datarequestemailsubject'] = 'Demande de données : {$a}';
$string['datarequests'] = 'Demandes de données';
$string['daterequested'] = 'Données demandées';
$string['daterequesteddetail'] = 'Données demandées :';
$string['defaultsinfo'] = 'Les catégories et finalités par défaut sont appliquées à toutes les instances nouvellement créées.';
$string['defaultssaved'] = 'Réglages par défaut enregistrés';
$string['deletecategory'] = 'Supprimer la catégorie « {$a} »';
$string['deletecategorytext'] = 'Voulez-vous vraiment supprimer la catégorie « {$a} »?';
$string['deleteexpiredcontextstask'] = 'Supprimer les contextes échus';
$string['deletepurpose'] = 'Supprimer la finalité « {$a} »';
$string['deletepurposetext'] = 'Voulez-vous vraiment supprimer la finalité « {$a} »?';
$string['deny'] = 'Refuser';
$string['denyrequest'] = 'Refuser la demande';
$string['download'] = 'Télécharger';
$string['dporolemapping'] = 'Correspondance du rôle de Délégué à la protection des données';
$string['dporolemapping_desc'] = 'Le Délégué à la protection des données peut gérer les demandes de données. La capacité tool/dataprivacy:managedatarequests doit être autorisée pour un rôle, afin de pouvoir le mettre en correspondance avec le rôle de Délégué à la protection des données.';
$string['editcategories'] = 'Modifier les catégories';
$string['editcategory'] = 'Modifier la catégorie';
$string['editpurpose'] = 'Modifier la finalité';
$string['editpurposes'] = 'Modifier les finalités';
$string['effectiveretentionperiodcourse'] = '{$a} (après la date de fin du cours)';
$string['effectiveretentionperioduser'] = '{$a} (depuis le dernier accès de l\'utilisateur au site)';
$string['emailsalutation'] = 'Cher {$a},';
$string['errorcontexthasunexpiredchildren'] = 'Le contexte « {$a} » comporte des sous-contextes qui ne sont pas encore échus. Aucun contexte n\'a été confirmé pour suppression.';
$string['errorinvalidrequeststatus'] = 'Statut de la demande non valide !';
$string['errorinvalidrequesttype'] = 'Type de demande non valide !';
$string['errornoexpiredcontexts'] = 'Il n\'y a pas de contexte échu à traiter';
$string['errorrequestalreadyexists'] = 'Vous avez déjà une demande en cours.';
$string['errorrequestnotfound'] = 'Demande non trouvée';
$string['errorrequestnotwaitingforapproval'] = 'La demande n\'est pas en attente d\'approbation. Soit elle n\'est pas encore prête, soit elle n\'a pas encore été traitée.';
$string['errorsendingmessagetodpo'] = 'Une erreur est survenue lors de l\'envoi d\'un message à {$a}.';
$string['expandplugin'] = 'Développer et replier le plugin.';
$string['expandplugintype'] = 'Développer et replier le type de plugin.';
$string['expiredretentionperiodtask'] = 'Durée de conservation échue';
$string['expiry'] = 'Échéance';
$string['explanationtitle'] = 'Icônes utilisées sur cette page et leur signification.';
$string['external'] = 'Additionnel';
$string['externalexplanation'] = 'Un plugin additionnel a été installé sur ce site.';
$string['frontpagecourse'] = 'Cours page d\'accueil';
$string['gdpr_art_6_1_a_description'] = 'La personne concernée a consenti au traitement de ses données à caractère personnel pour une ou plusieurs finalités spécifiques';
$string['gdpr_art_6_1_a_name'] = 'Consentement (RGPD Art. 6.1(a))';
$string['gdpr_art_6_1_b_description'] = 'Le traitement est nécessaire à l\'exécution d\'un contrat auquel la personne concernée est partie ou à l\'exécution de mesures précontractuelles prises à la demande de celle-ci';
$string['gdpr_art_6_1_b_name'] = 'Contrat (RGPD Art. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = 'Le traitement est nécessaire au respect d\'une obligation légale à laquelle le responsable du traitement est soumis';
$string['gdpr_art_6_1_c_name'] = 'Obligation légale (RGPD Art 6.1(c))';
$string['gdpr_art_6_1_d_description'] = 'Le traitement est nécessaire à la sauvegarde des intérêts vitaux de la personne concernée ou d\'une autre personne physique';
$string['gdpr_art_6_1_d_name'] = 'Intérêts vitaux (RGPD Art. 6.1(d))';
$string['gdpr_art_6_1_e_description'] = 'Le traitement est nécessaire à l\'exécution d\'une mission d\'intérêt public ou relevant de l\'exercice de l\'autorité publique dont est investi le responsable du traitement';
$string['gdpr_art_6_1_e_name'] = 'Mission d\'intérêt public (RGPD Art. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = 'Le traitement est nécessaire aux fins des intérêts légitimes poursuivis par le responsable du traitement ou par un tiers, à moins que ne prévalent les intérêts ou les libertés et droits fondamentaux de la personne concernée qui exigent une protection des données à caractère personnel, notamment lorsque la personne concernée est un enfant';
$string['gdpr_art_6_1_f_name'] = 'Intérêts légitimes (RGPD Art. 6.1(f))';
$string['gdpr_art_9_2_a_description'] = 'La personne concernée a donné son consentement explicite au traitement de ces données à caractère personnel pour une ou plusieurs finalités spécifiques, sauf lorsque le droit de l\'Union ou le droit de l\'État membre prévoit que l\'interdiction visée au paragraphe 1 ne peut pas être levée par la personne concernée';
$string['gdpr_art_9_2_a_name'] = 'Consentement explicite (RGPD Art. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = 'Le traitement est nécessaire aux fins de l\'exécution des obligations et de l\'exercice des droits propres au responsable du traitement ou à la personne concernée en matière de droit du travail, de la sécurité sociale et de la protection sociale, dans la mesure où ce traitement est autorisé par le droit de l\'Union, par le droit d\'un État membre ou par une convention collective conclue en vertu du droit d\'un État membre qui prévoit des garanties appropriées pour les droits fondamentaux et les intérêts de la personne concernée';
$string['gdpr_art_9_2_b_name'] = 'Droit du travail, de la sécurité/de la protection sociale (RGPD Art. 9.2(b))';
$string['gdpr_art_9_2_c_description'] = 'Le traitement est nécessaire à la sauvegarde des intérêts vitaux de la personne concernée ou d\'une autre personne physique, dans le cas où la personne concernée se trouve dans l\'incapacité physique ou juridique de donner son consentement';
$string['gdpr_art_9_2_c_name'] = 'Sauvegarde des intérêts vitaux  (RGPD Art. 9.2(c))';
$string['gdpr_art_9_2_d_description'] = 'Le traitement est effectué, dans le cadre de leurs activités légitimes et moyennant les garanties appropriées, par une fondation, une association ou tout autre organisme à but non lucratif et poursuivant une finalité politique, philosophique, religieuse ou syndicale, à condition que ledit traitement se rapporte exclusivement aux membres ou aux anciens membres dudit organisme ou aux personnes entretenant avec celui-ci des contacts réguliers en liaison avec ses finalités et que les données à caractère personnel ne soient pas communiquées en dehors de cet organisme sans le consentement des personnes concernées';
$string['gdpr_art_9_2_d_name'] = 'Activités légitimes par une fondation, une association ou tout autre organisme à but non lucratif (RGPD Art. 9.2(d))';
$string['gdpr_art_9_2_e_description'] = 'Le traitement porte sur des données à caractère personnel qui sont manifestement rendues publiques par la personne concernée';
$string['gdpr_art_9_2_e_name'] = 'Données à caractère personnel rendues publiques par la personne concernée (RGPD Art. 9.2(e))';
$string['gdpr_art_9_2_f_description'] = 'Le traitement est nécessaire à la constatation, à l\'exercice ou à la défense d\'un droit en justice ou chaque fois que des juridictions agissent dans le cadre de leur fonction juridictionnelle';
$string['gdpr_art_9_2_f_name'] = 'Constatation, exercice et défense d\'un droit en justice (RGPD Art. 9.2(f))';
$string['gdpr_art_9_2_g_description'] = 'Le traitement est nécessaire pour des motifs d\'intérêt public important, sur la base du droit de l\'Union ou du droit d\'un État membre qui doit être proportionné à l\'objectif poursuivi, respecter l\'essence du droit à la protection des données et prévoir des mesures appropriées et spécifiques pour la sauvegarde des droits fondamentaux et des intérêts de la personne concernée';
$string['gdpr_art_9_2_g_name'] = 'Intérêt public important (RGPD Art. 9.2(g))';
$string['gdpr_art_9_2_h_description'] = 'Le traitement est nécessaire aux fins de la médecine préventive ou de la médecine du travail, de l\'appréciation de la capacité de travail du travailleur, de diagnostics médicaux, de la prise en charge sanitaire ou sociale, ou de la gestion des systèmes et des services de soins de santé ou de protection sociale sur la base du droit de l\'Union, du droit d\'un État membre ou en vertu d\'un contrat conclu avec un professionnel de la santé et soumis aux conditions et garanties visées au paragraphe 3 de l\'article 9 du RGPD';
$string['gdpr_art_9_2_h_name'] = 'Fins médicales (RGPD Art. 9.2(h))';
$string['gdpr_art_9_2_i_description'] = 'Le traitement est nécessaire pour des motifs d\'intérêt public dans le domaine de la santé publique, tels que la protection contre les menaces transfrontalières graves pesant sur la santé, ou aux fins de garantir des normes élevées de qualité et de sécurité des soins de santé et des médicaments ou des dispositifs médicaux, sur la base du droit de l\'Union ou du droit de l\'État membre qui prévoit des mesures appropriées et spécifiques pour la sauvegarde des droits et libertés de la personne concernée, notamment le secret professionnel';
$string['gdpr_art_9_2_i_name'] = 'Santé publique (RGPD Art. 9.2(i))';
$string['gdpr_art_9_2_j_description'] = 'Le traitement est nécessaire à des fins archivistiques dans l\'intérêt public, à des fins de recherche scientifique ou historique ou à des fins statistiques, conformément à l\'article 89, paragraphe 1, sur la base du droit de l\'Union ou du droit d\'un État membre qui doit être proportionné à l\'objectif poursuivi, respecter l\'essence du droit à la protection des données et prévoir des mesures appropriées et spécifiques pour la sauvegarde des droits fondamentaux et des intérêts de la personne concernée';
$string['gdpr_art_9_2_j_name'] = 'Fins archivistiques dans l\'intérêt public, ou fins de recherche scientifique/historique/statistiques (RGPD Art. 9.2(j))';
$string['hide'] = 'Tout replier';
$string['httpwarning'] = 'Certaines données téléchargées de ce site ne sont pas chiffrées. Veuillez contacter l\'administrateur système et demander d\'installer SSL sur ce site.';
$string['inherit'] = 'Hériter';
$string['lawfulbases'] = 'Bases légales';
$string['lawfulbases_help'] = 'Veuillez sélectionner au moins une des options, qui servira de base légale au traitement des données personnelles. Pour des détails sur ces bases légales, consultez l\'article 6 du <a href="https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32016R0679" target="_blank">RGPD</a>';
$string['message'] = 'Message';
$string['messagelabel'] = 'Message :';
$string['messageprovider:contactdataprotectionofficer'] = 'Demandes de données';
$string['messageprovider:datarequestprocessingresults'] = 'Résultats du traitement de la demande de données';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Mes demandes de données personnelles';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} enfants';
$string['newrequest'] = 'Nouvelle demande';
$string['noactivitiestoload'] = 'Pas d\'activité';
$string['noassignedroles'] = 'Aucun rôle attribué dans ce contexte';
$string['noblockstoload'] = 'Aucun bloc';
$string['nocategories'] = 'Il n\'y a pas encore de catégorie';
$string['nocoursestoload'] = 'Pas d\'activité';
$string['nodatarequests'] = 'Il n\'y a pas de demande de données';
$string['noexpiredcontexts'] = 'Ce niveau de contexte échu n\'a pas de données dont la date de conservation est échue.';
$string['nopersonaldatarequests'] = 'Vous n\'avez pas de demande de données personnelles';
$string['nopurposes'] = 'Il n\'y a pas encore de finalité';
$string['nosubjectaccessrequests'] = 'Il n\'y a pas de demande de données à traiter';
$string['nosystemdefaults'] = 'La finalité et la catégorie du site n\'ont pas encore été définies.';
$string['notset'] = 'Non défini (la valeur par défaut est utilisée)';
$string['pluginname'] = 'Protection des données';
$string['pluginname_help'] = 'Plugin Protection des données';
$string['pluginregistry'] = 'Registre des données personnelles  des plugins';
$string['pluginregistrytitle'] = 'Registre de conformité des plugins avec la protection des données';
$string['privacy'] = 'Confidentialité';
$string['privacy:metadata:request'] = 'Informations sur les demandes de données personnelles (demandes d\'accès et de suppression) faites sur ce site.';
$string['privacy:metadata:request:comments'] = 'Tous les commentaires de l\'utilisateur accompagnant sa demande.';
$string['privacy:metadata:request:dpocomment'] = 'Tous les commentaires fait par le Délégué à la protection des données du site au sujet de la demande.';
$string['privacy:metadata:request:requestedby'] = 'L\'identifiant de l\'utilisateur faisant la demande, si elle est effectuée au nom d\'un autre utilisateur.';
$string['privacy:metadata:request:timecreated'] = 'L\'horodatage de la demande faite par l\'utilisateur.';
$string['privacy:metadata:request:userid'] = 'L\'identifiant de l\'utilisateur concerné par la demande';
$string['protected'] = 'Protégé';
$string['protectedlabel'] = 'La conservation de ces données a une priorité légale plus importante que le droit à l\'oubli de l\'utilisateur. Ces données ne seront supprimées qu\'après l\'échéance de la durée de conservation.';
$string['purpose'] = 'Finalité';
$string['purposecreated'] = 'Finalité créée';
$string['purposedefault'] = 'Finalité par défaut';
$string['purposes'] = 'Finalités';
$string['purposeslist'] = 'Liste des finalités de données';
$string['purposeupdated'] = 'Finalité mise à jour';
$string['replyto'] = 'Répondre à';
$string['requestactions'] = 'Action';
$string['requestby'] = 'Demandé par';
$string['requestcomments'] = 'Commentaires';
$string['requestcomments_help'] = 'Ce champ vous permet de renseigner des informations complémentaires à votre demande de données.';
$string['requestemailintro'] = 'Vous avez reçu une demande de données :';
$string['requestfor'] = 'Demande pour';
$string['requeststatus'] = 'Statut';
$string['requestsubmitted'] = 'Votre demande a été envoyée au Délégué à la protection des données du site';
$string['requesttype'] = 'Type';
$string['requesttypedelete'] = 'Supprimer toutes mes données personnelles';
$string['requesttypedeleteshort'] = 'Suppression';
$string['requesttypeexport'] = 'Exporter toutes mes données personnelles';
$string['requesttypeexportshort'] = 'Exportation';
$string['requesttype_help'] = 'Sélectionner la raison pour laquelle vous désirez contacter le Délégué à la protection des données du site';
$string['requesttypeothers'] = 'Demande d\'ordre général';
$string['requesttypeothersshort'] = 'Autres';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requiresattention'] = 'Requiert votre attention.';
$string['requiresattentionexplanation'] = 'Ce plugin n\'implémente pas l\'API de protection des données de Moodle. Si ce plugin enregistre des données personnelles, il ne sera pas possible d\'exporter ou de supprimer ces données au moyen du système de protection des données de Moodle.';
$string['resultdeleted'] = 'Vous avez demandé récemment la suppression de votre compte et de données personnelles sur {$a}. Les suppressions sont effectuées et vous ne pouvez plus vous connecter.';
$string['resultdownloadready'] = 'La copie de vos données personnelles sur {$a} que vous avez demandée récemment est maintenant disponible pour téléchargement. Veuillez cliquer sur le lien ci-dessous pour accéder à la page de téléchargement.';
$string['retentionperiod'] = 'Période de conservation';
$string['retentionperiodnotdefined'] = 'Aucune période de conservation n\'a été définie';
$string['retentionperiodzero'] = 'Pas de période de conservation';
$string['reviewdata'] = 'Passer en revue les données';
$string['send'] = 'Envoyer';
$string['sensitivedatareasons'] = 'Raisons pour le traitement des données personnelles sensibles';
$string['sensitivedatareasons_help'] = 'Sélectionner une ou plusieurs raisons applicables qui exemptent de l\'interdiction de traiter des données personnelles sensibles liées à cette finalité. Pour plus d\'informations, consulter l\'article 9, paragraphe 2 du <a href="https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32016R0679" target="_blank">RGPD</a>';
$string['setdefaults'] = 'Définir les réglages par défaut';
$string['statusapproved'] = 'Approuvée';
$string['statusawaitingapproval'] = 'En attente d\'approbation';
$string['statuscancelled'] = 'Annulée';
$string['statuscomplete'] = 'Terminée';
$string['statusdetail'] = 'Statut :';
$string['statuspending'] = 'En suspens';
$string['statuspreprocessing'] = 'En cours de pré-traitement';
$string['statusprocessing'] = 'En cours de traitement';
$string['statusrejected'] = 'Rejetée';
$string['subjectscope'] = 'Champ d\'application';
$string['user'] = 'Utilisateur';
$string['viewrequest'] = 'Consulter la demande';
$string['visible'] = 'Tout développer';
