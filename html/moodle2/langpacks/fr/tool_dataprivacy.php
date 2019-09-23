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
 * Strings for component 'tool_dataprivacy', language 'fr', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_dataprivacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Activités et ressources';
$string['addcategory'] = 'Ajouter une catégorie';
$string['addnewdefaults'] = 'Ajouter une nouvelle valeur par défaut pour le module';
$string['addpurpose'] = 'Ajouter une finalité';
$string['addroleoverride'] = 'Ajouter une dérogation de rôle';
$string['approve'] = 'Approuver';
$string['approverequest'] = 'Approuver la demande';
$string['automaticdeletionrequests'] = 'Créer automatiquement des demandes de suppression de données';
$string['automaticdeletionrequests_desc'] = 'Si ce réglage est activé, une demande de suppression de données sera créée automatiquement pour chaque utilisateur supprimé manuellement.';
$string['bulkapproverequests'] = 'Approuver les demandes';
$string['bulkdenyrequests'] = 'Rejeter les demandes';
$string['cachedef_contextlevel'] = 'Niveaux de contexte des catégories et finalités';
$string['cachedef_purpose'] = 'Finalité des données';
$string['cachedef_purpose_overrides'] = 'Dérogation de finalité dans l\'Outil de protection des données';
$string['cancelrequest'] = 'Annuler la demande';
$string['cancelrequestconfirmation'] = 'Voulez-vous vraiment annuler cette demande de données ?';
$string['cannotreset'] = 'Impossible de réinitialiser cette demande. Seules les demandes rejetées peuvent être réinitialisées.';
$string['categories'] = 'Catégories';
$string['categorieslist'] = 'Liste des catégories de données';
$string['category'] = 'Catégorie';
$string['categorycreated'] = 'Catégorie créée';
$string['categorydefault'] = 'Catégorie par défaut';
$string['categorydefault_help'] = 'La catégorie par défaut est la catégorie de données attribuée à toute nouvelle instance. Si Hériter est sélectionné, la catégorie de données du contexte supérieur est attribuée. Les contextes sont (du bas vers le haut) : Blocs > Modules d\'activité > Cours > Catégories de cours > Utilisateur > Site.';
$string['category_help'] = 'Une catégorie du registre des données décrit un type de données Une nouvelle catégorie peut être ajoutée, ou, si Hériter est sélectionné, la catégorie d\'un contexte supérieure est attribuée. Les contextes sont (du bas vers le haut) : Blocs > Modules d\'activité > Cours > Catégories de cours > Utilisateur > Site.';
$string['categoryupdated'] = 'Catégorie modifiée';
$string['close'] = 'Fermer';
$string['compliant'] = 'Conforme';
$string['confirmapproval'] = 'Voulez-vous vraiment approuver cette demande de données ?';
$string['confirmbulkapproval'] = 'Voulez-vous vraiment approuver en masse les demandes de données sélectionnées ?';
$string['confirmbulkdenial'] = 'Voulez-vous vraiment rejeter en masse les demandes de données sélectionnées ?';
$string['confirmcompletion'] = 'Voulez-vous vraiment marquer comme terminée la demande de cet utilisateur ?';
$string['confirmcontextdeletion'] = 'Voulez-vous vraiment confirmer la suppression des contextes sélectionnés ? Ceci supprimera également toutes les données des utilisateurs des sous-contextes concernés.';
$string['confirmdenial'] = 'Voulez-vous vraiment refuser cette demande de données ?';
$string['confirmrequestresubmit'] = 'Voulez-vous vraiment annuler la demande actuelle {$a->type} pour {$a->username} et l\'envoyer de nouveau ?';
$string['contactdataprotectionofficer'] = 'Contacter le délégué à la protection des données';
$string['contactdataprotectionofficer_desc'] = 'Si ce réglage est activé, les utilisateurs auront la possibilité de contacter le délégué à la protection des données et de faire une demande de données au moyen d\'un lien sur leur page de profil.';
$string['contactdpoviaprivacypolicy'] = 'Veuillez contacter le délégué à la protection des données, conformément à la politique de confidentialité.';
$string['contextlevelname10'] = 'Site';
$string['contextlevelname30'] = 'Utilisateurs';
$string['contextlevelname40'] = 'Catégories de cours';
$string['contextlevelname50'] = 'Cours';
$string['contextlevelname70'] = 'Modules d\'activité';
$string['contextlevelname80'] = 'Bloc';
$string['contextpurposecategorysaved'] = 'Finalité et catégorie enregistrées.';
$string['createcategory'] = 'Créer une catégorie de données';
$string['createnewdatarequest'] = 'Créer une nouvelle demande de données';
$string['createpurpose'] = 'Créer une finalité de données';
$string['creationauto'] = 'Automatiquement';
$string['creationmanual'] = 'Manuellement';
$string['datadeletion'] = 'Suppression de données';
$string['datadeletionpagehelp'] = 'Les données dont la période de conservation est échue sont énumérées ici. Veuillez vérifier et confirmer la suppression des données, qui sera effectuée lors du prochain lancement de la tâche programmée « Supprimer les contextes échus ».';
$string['dataprivacy:downloadallrequests'] = 'Télécharger les données exportées de tout le monde';
$string['dataprivacy:downloadownrequest'] = 'Télécharger mes propres données exportées';
$string['dataprivacy:makedatarequestsforchildren'] = 'Faire des demandes de données pour mineurs';
$string['dataprivacy:managedataregistry'] = 'Gérer le registre des données';
$string['dataprivacy:managedatarequests'] = 'Gérer les demandes de données';
$string['dataregistry'] = 'Registre des données';
$string['dataregistryinfo'] = 'Le registre des données permet de définir des catégories (types de données) et des finalités (les raisons du traitement des données) pour tous les contenus du site — depuis les utilisateurs et les cours jusqu\'aux activités et aux blocs. Pour chaque finalité, une période de conservation peut être fixée. Lorsqu\'une période de conservation est échue, les données sont marquées et listées pour suppression, dans l\'attente d\'une confirmation de l\'administrateur.';
$string['datarequestcreatedforuser'] = 'Demande de données créée pour {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'Créée automatiquement par une tâche programmée (utilisateur supprimé antérieurement).';
$string['datarequestcreatedupondelete'] = 'Créée automatiquement lors de la suppression de l\'utilisateur.';
$string['datarequestemailsubject'] = 'Demande de données : {$a}';
$string['datarequests'] = 'Demandes de données';
$string['dataretentionexplanation'] = 'Ce résumé affiche les catégories et finalités par défaut pour la conservation des données des utilisateurs. Certaines zones peuvent avoir des catégories et finalités plus spécifiques que celles indiquées ici.';
$string['dataretentionsummary'] = 'Résumé de conservation de données';
$string['datecomment'] = '[{$a->date}] :
 {$a->comment}';
$string['daterequested'] = 'Données demandées';
$string['daterequesteddetail'] = 'Données demandées :';
$string['defaultexpired'] = 'Données de tous les utilisateurs';
$string['defaultexpiredexcept'] = 'Données de tous les utilisateurs, sauf ceux qui ont l\'un des rôles suivants :<br>
{$a->unexpired}';
$string['defaultsinfo'] = 'Les catégories et finalités par défaut sont appliquées à toutes les instances nouvellement créées ainsi qu\'aux instances existantes pour les valeurs non définies.';
$string['defaultssaved'] = 'Réglages par défaut enregistrés';
$string['defaultswarninginfo'] = 'Attention ! La modifications de ces valeurs par défaut pourrait modifier la période de conservation des instances existantes.';
$string['defaultunexpired'] = 'Seulement les données des utilisateurs qui ont l\'un des rôles suivants :<br>
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Seulement les données des utilisateurs qui ont l\'un des rôles suivants :<br>
{$a->expired}
À moins qu\'ils n\'aient également l\'un des rôles suivants :<br>
{$a->unexpired}';
$string['deletecategory'] = 'Supprimer la catégorie';
$string['deletecategorytext'] = 'Voulez-vous vraiment supprimer la catégorie « {$a} »?';
$string['deletedefaults'] = 'Supprimer les valeurs par défaut : {$a}';
$string['deletedefaultsconfirmation'] = 'Voulez-vous vraiment supprimer la catégorie et la finalité par défaut de {$a} modules ?';
$string['deleteexistingdeleteduserstask'] = 'Créer des demandes de suppression de données pour les utilisateurs supprimés antérieurement';
$string['deleteexpiredcontextstask'] = 'Supprimer les contextes échus';
$string['deleteexpireddatarequeststask'] = 'Supprimer les fichiers d\'exportation des demandes de données échues';
$string['deletemyaccount'] = 'Supprimer mon compte';
$string['deletepurpose'] = 'Supprimer la finalité';
$string['deletepurposetext'] = 'Voulez-vous vraiment supprimer la finalité « {$a} »?';
$string['deny'] = 'Refuser';
$string['denyrequest'] = 'Refuser la demande';
$string['deprecated'] = 'Obsolète';
$string['deprecatedexplanation'] = 'Ce plugin utilise une ancienne version des interfaces de protection des données et doit être mis à jour.';
$string['download'] = 'Télécharger';
$string['downloadexpireduser'] = 'Le téléchargement est échu. Veuillez effectuer une nouvelle demande si vous voulez exporter vos données personnelles.';
$string['dporolemapping'] = 'Correspondance du rôle de Délégué à la protection des données';
$string['dporolemapping_desc'] = 'Le délégué à la protection des données peut gérer les demandes de données. La capacité tool/dataprivacy:managedatarequests doit être autorisée pour un rôle afin de pouvoir le mettre en correspondance avec le rôle de Délégué à la protection des données.';
$string['duplicaterole'] = 'Rôle déjà indiqué';
$string['editcategories'] = 'Modifier les catégories';
$string['editcategory'] = 'Modifier la catégorie';
$string['editdefaults'] = 'Modifier les valeurs par défaut : {$a}';
$string['editmoduledefaults'] = 'Supprimer les valeurs par défaut du module';
$string['editpurpose'] = 'Modifier la finalité';
$string['editpurposes'] = 'Modifier les finalités';
$string['effectiveretentionperiodcourse'] = '{$a} (après la date de fin du cours)';
$string['effectiveretentionperioduser'] = '{$a} (depuis le dernier accès de l\'utilisateur au site)';
$string['emailsalutation'] = 'Cher {$a},';
$string['errorcontexthasunexpiredchildren'] = 'Le contexte « {$a} » comporte des sous-contextes qui ne sont pas encore échus. Aucun contexte n\'a été confirmé pour suppression.';
$string['errorinvalidrequestcreationmethod'] = 'Méthode de création de demande non valide !';
$string['errorinvalidrequeststatus'] = 'Statut de la demande non valide !';
$string['errorinvalidrequesttype'] = 'Type de demande non valide !';
$string['errornocapabilitytorequestforothers'] = 'L\'utilisateur {$a->requestedby} n\'a pas l\'autorisation d\'effectuer une demande de données au nom de l\'utilisateur {$a->userid}';
$string['errornoexpiredcontexts'] = 'Il n\'y a pas de contexte échu à traiter';
$string['errorrequestalreadyexists'] = 'Vous avez déjà une demande en cours.';
$string['errorrequestnotfound'] = 'Demande non trouvée';
$string['errorrequestnotwaitingforapproval'] = 'La demande n\'est pas en attente d\'approbation. Soit elle n\'est pas encore prête, soit elle n\'a pas encore été traitée.';
$string['errorsendingmessagetodpo'] = 'Une erreur est survenue lors de l\'envoi d\'un message à {$a}.';
$string['exceptionnotificationbody'] = '<p>Une exception est survenue lors de l\'appel de <b>{$a->fullmethodname}</b>.<br />Cela signifie que le plugin <b>{$a->component}</b> n\'a pas terminé le traitement des données. Les informations de l\'exception sont indiquées ci-dessous. Elles peuvent être envoyées au développeur du plugin.</p>
<pre>{$a->message}<br />

{$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'Une exception est survenue lors du traitement des données personnelles';
$string['expandplugin'] = 'Développer et replier le plugin.';
$string['expandplugintype'] = 'Développer et replier le type de plugin.';
$string['expiredretentionperiodtask'] = 'Durée de conservation échue';
$string['expiredrolewithretention'] = '{$a->retention} (échue)';
$string['expiry'] = 'Échéance';
$string['explanationtitle'] = 'Icônes utilisées sur cette page et leur signification.';
$string['external'] = 'Additionnel';
$string['externalexplanation'] = 'Un plugin additionnel a été installé sur ce site.';
$string['filteroption'] = '{$a->category} : {$a->name}';
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
$string['gdpr_art_9_2_c_name'] = 'Sauvegarde des intérêts vitaux (RGPD Art. 9.2(c))';
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
$string['markcomplete'] = 'Marquer comme terminée';
$string['markedcomplete'] = 'Votre demande a été marquée comme terminée par le délégué à la protection des données.';
$string['message'] = 'Message';
$string['messagelabel'] = 'Message :';
$string['messageprovider:contactdataprotectionofficer'] = 'Demandes de données';
$string['messageprovider:datarequestprocessingresults'] = 'Résultats du traitement de la demande de données';
$string['messageprovider:notifyexceptions'] = 'Notifications des exceptions de demandes de données';
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
$string['nodatarequestsmatchingfilter'] = 'Il n\'y a pas de demande de données correspondant au filtre';
$string['noexpiredcontexts'] = 'Ce niveau de contexte échu n\'a pas de données dont la date de conservation est échue.';
$string['nopersonaldatarequests'] = 'Vous n\'avez pas de demande de données personnelles';
$string['nopurposes'] = 'Il n\'y a pas encore de finalité';
$string['nosubjectaccessrequests'] = 'Il n\'y a pas de demande de données à traiter';
$string['nosystemdefaults'] = 'La finalité et la catégorie du site n\'ont pas encore été définies.';
$string['notset'] = 'Non défini (la valeur par défaut est utilisée)';
$string['notyetexpired'] = '{$a} (pas encore échue)';
$string['overrideinstances'] = 'Réinitialiser les instances avec des valeurs personnalisées';
$string['pluginname'] = 'Protection des données';
$string['pluginname_help'] = 'Plugin Protection des données';
$string['pluginregistry'] = 'Registre des données personnelles des plugins';
$string['pluginregistrytitle'] = 'Registre de conformité des plugins avec la protection des données';
$string['privacy'] = 'Confidentialité';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Les filtres appliqués actuellement à la page de demandes de données.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'Le nombre de demandes de données que l\'utilisateur préfère voir affichées sur une page';
$string['privacy:metadata:request'] = 'Informations sur les demandes de données personnelles (demandes d\'accès et de suppression) faites sur ce site.';
$string['privacy:metadata:request:comments'] = 'Tous les commentaires de l\'utilisateur accompagnant sa demande.';
$string['privacy:metadata:request:dpocomment'] = 'Tous les commentaires fait par le délégué à la protection des données du site au sujet de la demande.';
$string['privacy:metadata:request:requestedby'] = 'L\'identifiant de l\'utilisateur faisant la demande, si elle est effectuée au nom d\'un autre utilisateur.';
$string['privacy:metadata:request:timecreated'] = 'L\'horodatage de la demande faite par l\'utilisateur.';
$string['privacy:metadata:request:userid'] = 'L\'identifiant de l\'utilisateur concerné par la demande';
$string['privacyofficeronly'] = 'Seuls les utilisateurs ayant le rôle de délégué à la protection des données ({$a}) peuvent accéder à ce contenu.';
$string['privacyrequestexpiry'] = 'Échéance de la demande de données';
$string['privacyrequestexpiry_desc'] = 'La durée pendant laquelle les demandes de données seront disponibles pour téléchargement avant d\'arriver à échéance. Si égal à 0, aucune limite n\'est fixée.';
$string['protected'] = 'Protégé';
$string['protectedlabel'] = 'La conservation de ces données a une priorité légale plus importante que le droit à l\'oubli de l\'utilisateur. Ces données ne seront supprimées qu\'après l\'échéance de la durée de conservation.';
$string['purpose'] = 'Finalité';
$string['purposecreated'] = 'Finalité créée';
$string['purposedefault'] = 'Finalité par défaut';
$string['purposedefault_help'] = 'La finalité par défaut est la finalité qui est attribuée à toute nouvelle instance. Si Hériter est choisi, la finalité du contexte supérieur est attribuée. Les contextes sont (du bas vers le haut) : Blocs > Modules d\'activité > Cours > Catégories de cours > Utilisateur > Site.';
$string['purpose_help'] = 'La finalité décrit la raison du traitement des données. Une nouvelle finalité peut être ajoutée, ou, si Hériter est sélectionné, la finalité d\'un contexte supérieur est attribuée. Les contextes sont (du bas vers le haut) : Blocs > Modules d\'activité > Cours > Catégories de cours > Utilisateur > Site.';
$string['purposeoverview'] = 'Une finalité décrit les raisons de l\'utilisation et de la conservation de données enregistrées. La base légale permettant l\'enregistrement et la conservation de ces données est également décrite dans la finalité.';
$string['purposes'] = 'Finalités';
$string['purposeslist'] = 'Liste des finalités de données';
$string['purposeupdated'] = 'Finalité mise à jour';
$string['replyto'] = 'Répondre à';
$string['requestactions'] = 'Action';
$string['requestapproved'] = 'La demande a été approuvée';
$string['requestby'] = 'Demandé par';
$string['requestbydetail'] = 'Demandé par :';
$string['requestcomments'] = 'Commentaires';
$string['requestcomments_help'] = 'Ce champ vous permet de renseigner des informations complémentaires à votre demande de données.';
$string['requestcreation'] = 'Création';
$string['requestdenied'] = 'La demande a été rejetée';
$string['requestemailintro'] = 'Vous avez reçu une demande de données :';
$string['requestfor'] = 'Utilisateur';
$string['requestmarkedcomplete'] = 'La demande a été marquée comme terminée';
$string['requestorigin'] = 'Site';
$string['requestsapproved'] = 'Les demandes ont été approuvées';
$string['requestsdenied'] = 'Les demandes ont été rejetées';
$string['requeststatus'] = 'Statut';
$string['requestsubmitted'] = 'Votre demande a été envoyée au délégué à la protection des données';
$string['requesttype'] = 'Type';
$string['requesttypedelete'] = 'Supprimer toutes mes données personnelles';
$string['requesttypedeleteshort'] = 'Suppression';
$string['requesttypeexport'] = 'Exporter toutes mes données personnelles';
$string['requesttypeexportshort'] = 'Exportation';
$string['requesttype_help'] = 'Sélectionner la raison pour laquelle vous désirez contacter le délégué à la protection des données. Veuillez noter que la suppression de toutes vos données personnelles ne vous permettra plus de vous connecter sur ce site.';
$string['requesttypeothers'] = 'Demande d\'ordre général';
$string['requesttypeothersshort'] = 'Message';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'Considérer les cours sans date de fin comme actifs';
$string['requireallenddatesforuserdeletion_desc'] = 'Lors du calcul de l\'échéance d\'un utilisateur, plusieurs facteurs sont considérés :

* la date de la dernière connexion de l\'utilisateur est comparée à la date de conservation des données des utilisateurs, et
* l\'inscription active de l\'utilisateur dans des cours.

Lors de la vérification d\'une inscription active dans un cours, si le cours n\'a pas de date de fin, ce réglage est utilisé pour déterminer si le cours doit être considéré comme actif.

Si ce réglage est activé et que le cours n\'a pas de date de fin, l\'utilisateur ne peut pas être supprimé.';
$string['requiresattention'] = 'Requiert votre attention.';
$string['requiresattentionexplanation'] = 'Ce plugin n\'implémente pas l\'API de protection des données de Moodle. Si ce plugin enregistre des données personnelles, il ne sera pas possible d\'exporter ou de supprimer ces données au moyen du système de protection des données de Moodle.';
$string['resubmitrequest'] = 'Envoyer de nouveau la demande {$a->type} pour {$a->username}';
$string['resubmitrequestasnew'] = 'Envoyer comme nouvelle demande';
$string['resubmittedrequest'] = 'La demande existante {$a->type} pour {$a->username} a été annulée et de nouveau envoyée';
$string['resultdeleted'] = 'Vous avez demandé récemment la suppression de votre compte et de données personnelles sur {$a}. Les suppressions sont effectuées et vous ne pouvez plus vous connecter.';
$string['resultdownloadready'] = 'La copie de vos données personnelles sur {$a} que vous avez demandée récemment est maintenant disponible pour téléchargement au moyen du lien ci-dessous.';
$string['retentionperiod'] = 'Période de conservation';
$string['retentionperiod_help'] = 'La période de conservation spécifie la durée pendant laquelle les données doivent être conservées. Lorsque la période de conservation est échue, les données sont signalées pour suppression, en attente de confirmation par l\'administrateur.';
$string['retentionperiodnotdefined'] = 'Aucune période de conservation n\'a été définie';
$string['retentionperiodzero'] = 'Pas de période de conservation';
$string['reviewdata'] = 'Passer en revue les données';
$string['role'] = 'Rôle';
$string['role_help'] = 'Le rôle auquel vous voulez appliquer cette dérogation.';
$string['roleoverride'] = 'Dérogation de rôle';
$string['roleoverrideoverview'] = 'La politique de conservation par défaut peut être assortie d\'une dérogation pour certains rôles, vous permettant de spécifier une politique de conservation plus longue ou plus courte. L\'échéance survient lorsque les périodes de chacun des rôles d\'un utilisateur arrivent à échéance.';
$string['roleoverrides'] = 'Dérogations de rôle';
$string['selectbulkaction'] = 'Veuillez choisir une action à effectuer en masse.';
$string['selectdatarequests'] = 'Veuillez sélectionner des demandes de données.';
$string['selectuserdatarequest'] = 'Sélectionner la demande {$a->requesttype} de {$a->username}.';
$string['send'] = 'Envoyer';
$string['sensitivedatareasons'] = 'Raisons pour le traitement des données personnelles sensibles';
$string['sensitivedatareasons_help'] = 'Sélectionner une ou plusieurs raisons applicables qui exemptent de l\'interdiction de traiter des données personnelles sensibles liées à cette finalité. Pour plus d\'informations, consulter l\'article 9, paragraphe 2 du <a href="https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32016R0679" target="_blank">RGPD</a>';
$string['setdefaults'] = 'Définir les réglages par défaut';
$string['showdataretentionsummary'] = 'Afficher le résumé de conservation des données';
$string['showdataretentionsummary_desc'] = 'Si ce réglage est activé, un lien vers le résumé de conservation des données est affiché dans le pied de page et dans le profil utilisateur.';
$string['statusapproved'] = 'Approuvée';
$string['statusawaitingapproval'] = 'En attente d\'approbation';
$string['statuscancelled'] = 'Annulée';
$string['statuscomplete'] = 'Terminée';
$string['statusdeleted'] = 'Supprimée';
$string['statusdetail'] = 'Statut :';
$string['statusexpired'] = 'Échue';
$string['statuspending'] = 'En suspens';
$string['statuspreprocessing'] = 'En cours de pré-traitement';
$string['statusprocessing'] = 'En cours de traitement';
$string['statusready'] = 'Téléchargement prêt';
$string['statusrejected'] = 'Rejetée';
$string['subjectscope'] = 'Champ d\'application';
$string['subjectscope_help'] = 'Le champ d\'application liste les rôles qui peuvent être attribués dans ce contexte.';
$string['summary'] = 'Résumé de configuration du registre';
$string['systemconfignotsetwarning'] = 'Une finalité et une catégorie de site n\'ont pas été définies. Lorsque ces éléments ne sont pas définis, toutes les données sont supprimées lors du traitement des demandes de suppression de données.';
$string['tobedeleted'] = 'Données à supprimer';
$string['unexpiredrolewithretention'] = '{$a->retention} (pas échue)';
$string['user'] = 'Utilisateur';
$string['userlistexplanation'] = 'Ce plugin possède le <i>provider</i> de base, mais devrait également implémenter le <i>provider</i> user list pour offrir le support complet de la fonctionnalité de protection des données.';
$string['userlistnoncompliant'] = 'Provider userlist manquant';
$string['viewrequest'] = 'Consulter la demande';
$string['visible'] = 'Tout développer';
