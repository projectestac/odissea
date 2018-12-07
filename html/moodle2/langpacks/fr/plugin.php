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
 * Strings for component 'plugin', language 'fr', branch 'MOODLE_34_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['availability'] = 'Disponibilité';
$string['cancelinstallall'] = 'Annuler les nouvelles installations ({$a})';
$string['cancelinstallhead'] = 'Annulation de l\'installation des plugins';
$string['cancelinstallinfo'] = 'Les plugins ci-dessous ne sont pas encore complètement installés, c\'est pourquoi leur installation peut être annulée. Pour ce faire, le dossier du plugin doit être supprimé du serveur maintenant. Assurez-vous que c\'est vraiment ce que vous voulez faire, afin d\'éviter des pertes de données, par exemple vos propres modifications du code source.';
$string['cancelinstallinfodir'] = 'Dossier à supprimer : {$a}';
$string['cancelinstallone'] = 'Annuler cette installation';
$string['cancelupgradeall'] = 'Annuler les mises à jour ({$a})';
$string['cancelupgradehead'] = 'Restauration des versions antérieures de plugins';
$string['cancelupgradeone'] = 'Annuler cette mise à jour';
$string['checkforupdates'] = 'Rechercher des mises à jour';
$string['checkforupdateslast'] = 'Dernière vérification effectuée le {$a}';
$string['dependencyavailable'] = 'Disponible';
$string['dependencyfails'] = 'Échoue';
$string['dependencyinstall'] = 'Installer';
$string['dependencyinstallhead'] = 'Installation des dépendances manquantes';
$string['dependencyinstallmissing'] = 'Installer les dépendances manquantes ({$a})';
$string['dependencymissing'] = 'Manquant';
$string['dependencyunavailable'] = 'Non disponible';
$string['dependencyupload'] = 'Déposer';
$string['dependencyuploadmissing'] = 'Déposer les fichiers ZIP';
$string['detectedmisplacedplugin'] = 'Le plugin « {$a->component} » est installé à l\'emplacement incorrect « {$a->current} ». L\'emplacement d\'installation attendu est :  « {$a->expected} »';
$string['displayname'] = 'Nom du plugin';
$string['err_response_curl'] = 'Impossible de récupérer les données de mise à jour. Erreur de cURL.';
$string['err_response_format_version'] = 'Version inattendue du format de réponse. Veuillez vérifier si des mises à jour sont disponibles.';
$string['err_response_http_code'] = 'Impossible de récupérer les données de mise à jour. Code de réponse HTTP inapproprié.';
$string['filterall'] = 'Tout afficher';
$string['filtercontribonly'] = 'N\'afficher que les plugins additionnels';
$string['filterupdatesonly'] = 'Afficher seulement les éléments susceptibles de mise à jour';
$string['isenabled'] = 'Activé ?';
$string['misdepinfoplugin'] = 'Infos du plugin';
$string['misdepinfoversion'] = 'Infos de version';
$string['misdepsavail'] = 'Dépendances manquantes disponibles';
$string['misdepsunavail'] = 'Dépendances manquantes non disponibles';
$string['misdepsunavaillist'] = 'Aucune version n\'a été trouvée pour les dépendances requises : {$a}.';
$string['misdepsunknownlist'] = 'Manquant du dossier « plugins » : <strong>{$a}</strong>.';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Aucun plugin de ce type n\'est installé';
$string['notdownloadable'] = 'Impossible de télécharger le paquetage';
$string['notdownloadable_help'] = 'Le paquetage ZIP contenant la mise à jour ne peut pas être téléchargé automatiquement. Veuillez vous référer à la documentation pour plus d\'aide.';
$string['notes'] = 'Annotations';
$string['notwritable'] = 'Impossible d\'écrire les fichiers du plugin';
$string['notwritable_help'] = 'Les fichiers de plugin ne sont pas accessibles en écriture par le serveur web. Le serveur web doit avoir accès en écriture au dossier des plugins et à tout son contenu. L\'accès en écriture au dossier racine du plugin concerné peut être également nécessaire.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Tous les plugins';
$string['overviewext'] = 'Plugins additionnels';
$string['overviewupdatable'] = 'Mise à jour disponibles';
$string['packagesdebug'] = 'Débogage de l\'output activé';
$string['packagesdownloading'] = 'Téléchargement de {$a}';
$string['packagesextracting'] = 'Extraction de {$a}';
$string['packagesvalidating'] = 'Validation de {$a}';
$string['packagesvalidatingfailed'] = 'Installation interrompue en raison de l\'échec de la validation';
$string['packagesvalidatingok'] = 'Validation effectuée. L\'installation peut continuer';
$string['plugincheckall'] = 'Tous les plugins';
$string['plugincheckattention'] = 'Plugins requérant votre attention';
$string['pluginchecknone'] = 'Aucune plugin ne nécessite votre attention';
$string['pluginchecknotice'] = 'Cette page affiche les plugins pouvant requérir votre attention durant la mise à jour, par exemple les nouveaux plugins à installer, les plugins à mettre à jour, les plugins manquants, etc. Les plugins additionnels sont affichés si une mise à jour est disponible. Il est recommandé que vous vérifiiez si des versions plus récentes des plugins sont disponibles et de mettre à jour leur code source avant de poursuivre la mise à jour de ce Moodle.';
$string['plugindisable'] = 'Désactiver';
$string['plugindisabled'] = 'Désactivé';
$string['pluginenable'] = 'Activer';
$string['pluginenabled'] = 'Activé';
$string['release'] = 'Version';
$string['requiredby'] = 'Requis par {$a}';
$string['requires'] = 'Requiert';
$string['rootdir'] = 'Dossier';
$string['settings'] = 'Paramètres';
$string['source'] = 'Source';
$string['sourceext'] = 'Additionnel';
$string['sourcestd'] = 'Standard';
$string['status'] = 'Statut';
$string['status_delete'] = 'À supprimer';
$string['status_downgrade'] = 'Version plus récente déjà installée !';
$string['status_missing'] = 'Absent du disque dur !';
$string['status_new'] = 'À installer';
$string['status_nodb'] = 'Pas de base de données';
$string['status_upgrade'] = 'À mettre à jour';
$string['status_uptodate'] = 'Installé';
$string['supportedconversions'] = 'Conversions de documents supportées';
$string['supportedmoodleversions'] = 'Versions de Moodle supportées';
$string['systemname'] = 'Identifiant';
$string['type_antivirus'] = 'Plugin antivirus';
$string['type_antivirus_plural'] = 'Plugins antivirus';
$string['type_auth'] = 'Méthode d\'authentification';
$string['type_auth_plural'] = 'Méthodes d\'authentification';
$string['type_availability'] = 'Restriction d\'accès';
$string['type_availability_plural'] = 'Restrictions d\'accès';
$string['type_block'] = 'Bloc';
$string['type_block_plural'] = 'Blocs';
$string['type_cachelock'] = 'Gestionnaire de verrou de cache';
$string['type_cachelock_plural'] = 'Gestionnaires de verrou de cache';
$string['type_cachestore'] = 'Entrepôt du cache';
$string['type_cachestore_plural'] = 'Entrepôts du cache';
$string['type_calendartype'] = 'Type de calendrier';
$string['type_calendartype_plural'] = 'Types de calendriers';
$string['type_coursereport'] = 'Rapport de cours';
$string['type_coursereport_plural'] = 'Rapports du cours';
$string['type_dataformat'] = 'Format de données';
$string['type_dataformat_plural'] = 'Formats de données';
$string['type_editor'] = 'Éditeur';
$string['type_editor_plural'] = 'Éditeurs';
$string['type_enrol'] = 'Méthode d\'inscription';
$string['type_enrol_plural'] = 'Méthodes d\'inscription';
$string['type_fileconverter'] = 'Convertisseur de documents';
$string['type_fileconvertermanage'] = 'Gérer les convertisseurs de documents';
$string['type_fileconverter_plural'] = 'Convertisseurs de documents';
$string['type_filter'] = 'Filtre de texte';
$string['type_filter_plural'] = 'Filtres de texte';
$string['type_format'] = 'Format de cours';
$string['type_format_plural'] = 'Formats de cours';
$string['type_gradeexport'] = 'Méthode d\'exportation des notes';
$string['type_gradeexport_plural'] = 'Méthodes d\'exportation des notes';
$string['type_gradeimport'] = 'Méthode d\'importation des notes';
$string['type_gradeimport_plural'] = 'Méthodes d\'importation des notes';
$string['type_gradereport'] = 'Rapport de carnet de notes';
$string['type_gradereport_plural'] = 'Rapports de carnet de notes';
$string['type_gradingform'] = 'Méthode d\'évaluation avancée';
$string['type_gradingform_plural'] = 'Méthodes d\'évaluation avancées';
$string['type_local'] = 'Plugin local';
$string['type_local_plural'] = 'Plugins locaux';
$string['type_media'] = 'Lecteur de média';
$string['type_media_plural'] = 'Lecteurs de média';
$string['type_message'] = 'Notification de messagerie';
$string['type_message_plural'] = 'Notifications de messagerie';
$string['type_mlbackend'] = 'Programme d\'apprentissage automatique';
$string['type_mlbackend_plural'] = 'Programmes d\'apprentissage automatique';
$string['type_mnetservice'] = 'Service MNet';
$string['type_mnetservice_plural'] = 'Services MNet';
$string['type_mod'] = 'Module d\'activité';
$string['type_mod_plural'] = 'Modules d\'activité';
$string['type_plagiarism'] = 'Plugin plagiat';
$string['type_plagiarism_plural'] = 'Plugins de plagiat';
$string['type_portfolio'] = 'Portfolio';
$string['type_portfolio_plural'] = 'Portfolios';
$string['type_profilefield'] = 'Type de champ de profil';
$string['type_profilefield_plural'] = 'Types de champ de profil';
$string['type_qbehaviour'] = 'Comportement de question';
$string['type_qbehaviour_plural'] = 'Comportements de question';
$string['type_qformat'] = 'Format d\'importation/exportation de question';
$string['type_qformat_plural'] = 'Formats d\'importation/exportation de question';
$string['type_qtype'] = 'Type de question';
$string['type_qtype_plural'] = 'Types de question';
$string['type_report'] = 'Rapport de site';
$string['type_report_plural'] = 'Rapports';
$string['type_repository'] = 'Dépôt';
$string['type_repository_plural'] = 'Dépôts';
$string['type_search'] = 'Moteur de recherche';
$string['type_search_plural'] = 'Moteurs de recherche';
$string['type_theme'] = 'Thème';
$string['type_theme_plural'] = 'Thèmes';
$string['type_tool'] = 'Outil d\'administration';
$string['type_tool_plural'] = 'Outils d\'administration';
$string['type_webservice'] = 'Protocole de service web';
$string['type_webservice_plural'] = 'Protocoles de service web';
$string['uninstall'] = 'Désinstaller';
$string['uninstallconfirm'] = 'Vous allez supprimer le plugin « {$a->name} ». Cela va effacer de la base de données tous les éléments associés à ce plugin, y compris sa configuration, les enregistrements du journal, les fichiers des utilisateurs gérés par le plugin, etc. L\'opération est irréversible et Moodle lui-même ne crée pas de sauvegarde de récupération. Voulez-vous <b>vraiment</b> continuer ?';
$string['uninstalldelete'] = 'Tous les éléments associés au plugin « {$a->name} » ont été effacés de la base de données. Pour terminer la suppression (et empêcher que le module se réinstalle automatiquement), son dossier « {$a->rootdir} » doit maintenant être supprimé manuellement de votre serveur. Moodle lui-même ne peut pas le supprimer, car il ne possède pas les autorisations nécessaires.';
$string['uninstalldeleteconfirm'] = 'Tous les éléments associés au plugin « {$a->name} » ont été effacés de la base de données. Pour terminer la suppression (et empêcher que le module se réinstalle automatiquement), son dossier « {$a->rootdir} » doit maintenant être supprimé de votre serveur. Voulez-vous <b>vraiment</b> supprimer le dossier du plugin maintenant ?';
$string['uninstalldeleteconfirmexternal'] = 'Il semble que la version actuelle du plugin a été obtenue via le système de gestion de code source ({$a}). Si vous supprimez le dossier de plugin, vous risquez de perdre des modifications locales importantes du code. Veuillez vous assurer que vous voulez vraiment supprimer le dossier du plugin avant de poursuivre.';
$string['uninstallextraconfirmblock'] = 'Il y a {$a->instances} instances de ce bloc.';
$string['uninstallextraconfirmenrol'] = 'Il y a {$a->enrolments} inscriptions d\'utilisateurs.';
$string['uninstallextraconfirmmod'] = 'Il y a {$a->instances} instances de ce module dans {$a->courses} cours.';
$string['uninstalling'] = 'Désinstallation de {$a->name}';
$string['updateavailable'] = 'Une nouvelle version {$a} est disponible !';
$string['updateavailable_moreinfo'] = 'Plus d\'infos...';
$string['updateavailable_release'] = 'Version {$a}';
$string['updatepluginconfirm'] = 'Confirmation de mise à jour du plugin';
$string['updatepluginconfirmexternal'] = 'La version actuelle de ce plugin semble avoir été installée au moyen d\'un gestionnaire de code source ({$a}). Si vous installez cette mise à jour, vous ne pourrez plus effectuer les mises à jour au moyen de ce gestionnaire de code source. Veuillez vous assurer que c\'est bien ce que vous voulez faire avant de continuer.';
$string['updatepluginconfirminfo'] = 'Vous allez installer une nouvelle version du plugin <strong>{$a->name}</strong>. Un fichier ZIP de la version {$a->version} du plugin va être téléchargé de <a href="{$a->url}">{$a->url}</a> et décompressé dans votre installation Moodle afin d\'être installé.';
$string['updatepluginconfirmwarning'] = 'Veuillez prendre note que Moodle ne fera pas de sauvegarde automatique de votre base de données avant la mise à jour. Nous recommandons vivement d\'en effectuer une sauvegarde maintenant, pour pallier les rares cas où le nouveau code aurait un défaut rendant votre site indisponible ou même corrompant votre base de données. Continuez à vos risques et périls.';
$string['validationmsg_componentmatch'] = 'Nom complet du composant';
$string['validationmsg_componentmismatchname'] = 'Incohérence du nom du plugin';
$string['validationmsg_componentmismatchname_help'] = 'Certains paquetages ZIP, par exemple ceux qui sont généré par Github, peuvent comporter un nom de dossier principal incorrect. Vous devez renommer ce dossier afin qu\'il corresponde au nom déclaré par le plugin.';
$string['validationmsg_componentmismatchname_info'] = 'Ce plugin déclare que son nom est « {$a} », mais ce nom de correspond pas au nom du dossier principal.';
$string['validationmsg_componentmismatchtype'] = 'Incohérence du type du plugin';
$string['validationmsg_componentmismatchtype_info'] = 'Type de plugin attendu « {$a->expected} », alors que le plugin déclare que son type est « {$a->found} ».';
$string['validationmsg_filenotexists'] = 'Fichier extrait introuvable';
$string['validationmsg_filesnumber'] = 'Il n\'y a pas assez de fichiers dans le paquetage';
$string['validationmsg_filestatus'] = 'Impossible d\'extraire tous les fichiers';
$string['validationmsg_filestatus_info'] = 'La tentative d\'extraction du fichier {$a->file} a provoqué une erreur « {$a->status} ».';
$string['validationmsg_foundlangfile'] = 'Fichier de langue trouvé';
$string['validationmsglevel_debug'] = 'Débogage';
$string['validationmsglevel_error'] = 'Erreur';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Avertissement';
$string['validationmsg_maturity'] = 'Niveau de maturité déclaré';
$string['validationmsg_maturity_help'] = 'Le plugin peut déclarer son niveau de maturité. Si le mainteneur considère que son plugin est stable, le niveau de maturité déclaré sera MATURITY_STABLE. Les autres niveaux de maturité (par exemple alpha ou bêta) doivent être considérés comme instables et un avertissement est donné.';
$string['validationmsg_missingcomponent'] = 'Ce plugin ne déclare pas son nom de composant';
$string['validationmsg_missingcomponent_help'] = 'Tous les plugins doivent fournir leur nom complet de composant au moyen d\'une déclaration « $plugin->component » dans le fichier version.php.';
$string['validationmsg_missingexpectedlangenfile'] = 'Incohérence du nom du fichier de langue anglaise';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Le type de plugin indiqué ne fournit pas le fichier de langue anglaise attendu {$a}.';
$string['validationmsg_missinglangenfile'] = 'Aucun fichier de langue anglaise trouvé';
$string['validationmsg_missinglangenfolder'] = 'Le dossier de langue anglaise est manquant';
$string['validationmsg_missingversion'] = 'Le plugin ne déclare pas sa version';
$string['validationmsg_missingversionphp'] = 'Le fichier version.php est introuvable';
$string['validationmsg_multiplelangenfiles'] = 'Plusieurs fichiers de langue anglaises trouvés';
$string['validationmsg_onedir'] = 'Structure non valide du paquetage ZIP';
$string['validationmsg_onedir_help'] = 'Ce paquetage ZIP doit contenir un seul dossier principal, contenant le code source du plugin. Le nom de ce dossier principal doit correspondre au nom du plugin.';
$string['validationmsg_pathwritable'] = 'Vérification de l\'autorisation d\'écriture';
$string['validationmsg_pluginversion'] = 'Version du plugin';
$string['validationmsg_release'] = 'Détails de la version du plugin';
$string['validationmsg_requiresmoodle'] = 'Version de Moodle requise';
$string['validationmsg_rootdir'] = 'Nom du plugin à installer';
$string['validationmsg_rootdir_help'] = 'Le nom du dossier principal dans le paquetage ZIP est aussi le nom du plugin à installer. Si ce nom n\'est pas correct, vous pouvez le modifier dans le fichier ZIP avant d\'installer le plugin.';
$string['validationmsg_rootdirinvalid'] = 'Nom du plugin non valide';
$string['validationmsg_rootdirinvalid_help'] = 'Le nom du dossier principal dans le paquetage ZIP n\'est pas conforme à la syntaxe requise. Certains paquetages ZIP, par exemple ceux générés par Github, peuvent contenir un nom de dossier principal incorrect. Vous devez corriger ce nom afin qu\'il corresponde au nom du plugin.';
$string['validationmsg_targetexists'] = 'L\'emplacement cible existe déjà et sera supprimé';
$string['validationmsg_targetexists_help'] = 'Le dossier du plugin existe déjà. Il sera remplacé par le contenu du paquetage du plugin.';
$string['validationmsg_targetnotdir'] = 'L\'emplacement cible est occupé par un fichier';
$string['validationmsg_unknowntype'] = 'Type de plugin inconnu';
$string['validationmsg_versionphpsyntax'] = 'Syntaxe non supportée détectée dans le fichier version.php.';
$string['version'] = 'Version';
$string['versiondb'] = 'Version actuelle';
$string['versiondisk'] = 'Nouvelle version';
