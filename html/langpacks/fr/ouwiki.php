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
 * Strings for component 'ouwiki', language 'fr', version '4.1'.
 *
 * @package     ouwiki
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actionheading'] = 'Actions';
$string['add'] = 'Ajouter';
$string['addannotation'] = 'Ajouter une annotation';
$string['addedbegins'] = '[Début du texte ajouté]';
$string['addedends'] = '[Fin du texte ajouté]';
$string['addnewsection'] = 'Ajouter une nouvelle section à cette page';
$string['addnewsection1'] = 'Ajouter une nouvelle section';
$string['advice_annotate'] = '<p>Annotez la page ci-dessous et cliquez sur <strong>Enregistrer</strong>.</p>
<ul>
<li>Pour annoter, cliquez sur un des marqueurs et saisir le texte.</li>
<li>Les annotations peuvent être supprimées en enlevant le texte ci-dessous.</li>
<li>Les numéros entre crochets font référence aux annotations.</li>
</ul>';
$string['advice_diff'] = 'L’ancienne version est montrée à gauche<span class=\'accesshide\'> sous le titre Ancienne version</span>,
où le texte supprimé est surligné. Le texte ajouté est indiqué dans la nouvelle version, à droite,<span class=\'accesshide\'> sous le titre Nouvelle version</span>.';
$string['advice_edit'] = '<p>Editez la page ci-dessous.</p>
<ul>
<li>Faites un lien vers une autre page en tapant son nom entre doubles parenthèses carrées : [[nom de la page]]. Le lien deviendra actif une fois vos modifications enregistrées.</li>
<li>Pour créer une nouvelle page, créez d’abord un lien de cette façon. {$a}</li>
</ul>
</p>';
$string['advice_history'] = '<p>Le tableau ci-dessous affiche toutes les modifications apportées à <a href="{$a}">la page en cours</a>.</p>
<p>Vous pourvez voir les anciennes versions, ou voir ce qui a changé dans une version en particulier. Si vous désirez comparer deux versions, sélectionnez les cases à cocher correspondantes, puis cliquez sur Comparer les sélections.</p>';
$string['advice_missingpage'] = 'Un ou des liens existent vers cette page, mais elle n’a pas encore été créée.';
$string['advice_missingpages'] = 'Des liens existent vers ces pages, mais elles n’ont pas encore été créées.';
$string['advice_viewdeleted'] = 'Vous êtes en train de voir une version suppriméée de cette page.';
$string['advice_viewold'] = 'Vous visionnez actuellement une ancienne version de cette page.';
$string['advice_wikirecentchanges_changes'] = '<p>Le tableau ci-dessous liste toutes les modifications sur toutes les pages du wiki, par ordre chronologique inverse. La version le plus récente de chaque page est surlignée.</p>
<p>En utilisant les liens, vous pouvez voir une page telle qu’elle était après une certaine modification, ou voir ce qui a été modifié à cet instant.</p>';
$string['advice_wikirecentchanges_changes_nohighlight'] = '<p>Le tableau ci-dessous liste toutes les modifications sur toutes les pages du wiki, par ordre chronologique inverse.</p>
<p>En utilisant les liens, vous pouvez voir une page telle qu’elle était après une certaine modification, ou voir ce qui a été modifié à cet instant.</p>';
$string['advice_wikirecentchanges_pages'] = '<p>Ce tableau montre quand chaque page a été ajoutée au wiki, par ordre chronologique inverse.</p>';
$string['ajaxnotenabled'] = 'AJAX n’est pas activé dans votre profil.';
$string['allowediting_help'] = '<p>
Si vous activez cette option, le wiki sera accessible en lecture seulement. Les utilisateurs pourront consulter les pages, voir l’historique et participer aux discussions, mais ne pourront pas modifier les pages.
</p>

<h2>Empêcher l’édition à partir du</h2>

<p>
Si vous activez cette option, le wiki sera accessible en lecture seulement à partir de la date choisie.
</p>';
$string['allowimport'] = 'Lien d’importation de pages';
$string['allowimport_help'] = 'L’activation de cette fonctionnalité permettra l’importation de pages à partir d’autres wikis du cours.';
$string['annotate'] = 'Annoter';
$string['annotatingpage'] = 'Annotation de page';
$string['annotationmarker'] = 'Marqueur d’annotation';
$string['annotations'] = 'Annotations';
$string['annotationsystem'] = 'Système d’annotation';
$string['annotationsystem_help'] = 'Active l’onglet d’annotation pour les utilisateurs qui ont les droits requis.

Dans cet onglet, vous pouvez ajouter des annotations aux pages du wiki (par exemple, l’enseignant annote le travail des étudiants).';
$string['attachments'] = 'Annexes';
$string['brokenimage'] = '<span class="imgremoved"> Image manquante </span>';
$string['cancel'] = 'Annuler';
$string['cannotlockpage'] = 'Cette page ne peut pas être verrouillée. Vos modifications n’ont pas été enregistrées.';
$string['changebutton'] = 'Modifier';
$string['changedby'] = 'Modifiée par';
$string['changedifferences'] = 'Différences';
$string['changes'] = 'modifications';
$string['changesnav'] = 'Modifications';
$string['collapseallannotations'] = 'Réduire les annotations';
$string['collapseannotation'] = 'Réduire l’annotation';
$string['compare'] = 'Comparer';
$string['compareselected'] = 'Comparer les sélections';
$string['completion_help'] = '<ul>
<li>
Si vous choisissez "Exiger de nouvelle pages", le wiki ne sera considéré comme complété que lorsque l’utilisateur aura créé le nombre de pages spécifiées. Avec cette option, les utilisateurs doivent créer des pages à partir de zéro. Si quelqu’un d’autre crée la page et qu’ils la modifient, ça ne compte pas.
</li>

<li>
Si vous choisissez "Exiger des modifications",  le wiki ne sera considéré comme complété que lorsque l’utilisateur aura fait le nombre de modifications spécifiées. L’utilisateur peut alors modifier plusieurs fois la même page ou modifier différentes pages.
</li>
</ul>

<p>
Veuillez noter que la première version d’une page comptera aussi comme une modification. Alors si vous exigez de l’utilisateur qu’il crée une page et qu’il fasse au moins une modification, entrez 1 page et 2 modifications dans les paramètres.
</p>';
$string['completionedits'] = 'L’utilisateur doit effectuer des modifications :';
$string['completioneditsgroup'] = 'Exiger des modifications';
$string['completioneditshelp'] = 'des modifications sont requises pour complétion';
$string['completionpages'] = 'L’utilisateur doit créer de nouvelles pages :';
$string['completionpagesgroup'] = 'Exiger de nouvelles pages';
$string['completionpageshelp'] = 'des nouvelles pages sont requises pour complétion';
$string['contributions'] = '<strong>{$a->pages}</strong> nouvelle page{$a->pagesplural}, <strong>{$a->changes}</strong> autre{$a->changesplural} modification{$a->changesplural}.';
$string['contributionsbyuser'] = 'Contributions par l’utilisateur';
$string['contributionsgrouplabel'] = 'Groupe';
$string['countdowntext'] = 'Ce wiki ne permet que {$a} minutes pour chaque modification. Effectuez vos modifications, puis cliquez Enregistrer ou Annuler avant que le temps restant (à droite) atteigne zéro.';
$string['countdownurgent'] = 'Veuillez terminer ou annuler votre modification maintenant. Si vous n’enregistrez pas vos modifications avant que le temps arrive à zéro, celles-ci seront enregistrées automatiquement.';
$string['create'] = 'Créer';
$string['createdbyon'] = 'Créé par {$a->name} le {$a->date}';
$string['createlinkedwiki'] = 'Création d’une nouvelle page';
$string['createlinkedwiki_help'] = 'Pendant l’édition, vous pouvez faire un lien vers une page qui n’existe pas encore, comme [[Chiens]]. Enregistrez la page en cours et cliquez sur le lien ‘Chiens’ pour créer la nouvelle page.

On peut aussi créer de nouvelles pages dans l’onglet ‘Voir’ avec la commande ‘Créer une nouvelle page’.';
$string['createnewpage'] = 'Créer une nouvelle page';
$string['createpage'] = 'Créer page';
$string['csvdownload'] = 'Télécharger au format tableur (UTF-8 .csv)';
$string['current'] = 'Actuelle';
$string['currentversion'] = 'Version actuelle';
$string['currentversionof'] = 'Version actuelle de';
$string['deletedbegins'] = '[Début du texte supprimé]';
$string['deletedends'] = '[Fin du texte supprimé]';
$string['deleteorphanedannotations'] = 'Supprimer les annotations perdues';
$string['deleteversionerror'] = 'Erreur de suppression de la version de la page';
$string['deleteversionerrorversion'] = 'Impossible de supprimer une version inexistante de la page';
$string['detail'] = 'détail';
$string['diff_nochanges'] = 'Votre modification n’a pas eu d’impact sur le texte et ne sera pas enregistrée dans les différences ci-dessous. Mais l’apparence peut avoir été modifiée.';
$string['diff_someannotations'] = 'Votre modification n’a pas eu d’impact sur le texte et ne sera pas enregistrée dans les différences ci-dessous, mais les annotations ont été modifiées. L’apparence peut aussi avoir été modifiée.';
$string['displayversion'] = 'Version d’OU wiki: <strong>{$a}</strong>';
$string['downloadcsv'] = 'Fichier CSV';
$string['downloadspreadsheet'] = 'Télécharger comme tableur';
$string['duplicatepagetitle'] = 'Ce nom de page existe déjà.';
$string['editbegin'] = 'Permettre l’édition depuis';
$string['editbegin_help'] = 'Si vous activez cette option, le wiki sera accessible en lecture seulement jusqu’à la date donnée. Les utilisateurs pourront consulter les pages, voir l’historique et participer aux discussions, mais ne pourront pas modifier les pages.';
$string['editedby'] = 'Modifié par {$a}';
$string['editend'] = 'Empêcher l’édition depuis';
$string['editend_help'] = 'Si vous activez cette option, le wiki sera accessible en lecture seulement à partir de la date choisie.';
$string['editingpage'] = 'Page en cours d’édition';
$string['editingsection'] = 'Section en cours d’édition : {$a}';
$string['editpage'] = 'Editer page';
$string['editsection'] = 'Editer section';
$string['emptypagetitle'] = 'Le champ titre de la nouvelle page ne doit pas être vide.';
$string['emptysectiontitle'] = 'Le champ titre de la nouvelle section ne doit pas être vide.';
$string['endannotation'] = 'Fin de l’annotation';
$string['entirewiki'] = 'Wiki entier';
$string['error_export'] = 'Une erreur est survenue durant l’exportation des données';
$string['error_nopermission'] = 'Vous n’avez pas les droits nécessaires pour voir le contenu de cette page';
$string['errorcoursesubwiki'] = 'Doit être ‘Aucun groupe’ à moins que le paramètre des sous-wikis soit ‘Un wiki par groupe’';
$string['errorgroupssubwiki'] = 'Doit être activé lorsque le paramètre des sous-wikis est &lsquo;Un wiki par groupe&rsquo;';
$string['event:ouwikipagecreated'] = 'Page ouwiki créée';
$string['event:ouwikipageupdated'] = 'Page ouwiki mise à jour';
$string['excelcsvdownload'] = 'Télécharger au format compatible Excel (.csv)';
$string['expandallannotations'] = 'Déplier les annotations';
$string['expandannotation'] = 'Déplier l’annotation';
$string['externaldashboardadd'] = 'Ajouter le wiki au tableau de bord';
$string['externaldashboardremove'] = 'Enlever le wiki du tableau de bord';
$string['feedalt'] = 'S’abonner au flux Atom';
$string['feedchange'] = 'Modifié par {$a->name} (<a href=\'{$a->url}\'>voir modification</a>)';
$string['feeddescriptionchanges'] = 'Liste toutes les modifications apportées au wiki. Abonnez-vous à ce flux pour être informé des mises à jour du wiki.';
$string['feeddescriptionhistory'] = 'Liste toutes les modifications apportées à cette page du wiki. Abonnez-vous à ce flux pour être informé des modifications à cette page.';
$string['feeddescriptionpages'] = 'Liste toutes les nouvelles pages créées dans le wiki. Abonnez-vous à ce flux pour être informé des nouvelles pages créées sur ce wiki.';
$string['feeditemdescriptiondate'] = '{$a->main} à {$a->date}.';
$string['feeditemdescriptionnodate'] = '{$a->main}.';
$string['feednewpage'] = 'Créée par {$a->name}';
$string['feedsubscribe'] = 'Vous pouvez vous abonner à un flux contenant cette information : <a href=\'{$a->atom}\'>Atom</a> ou <a href=\'{$a->rss}\'>RSS</a>.';
$string['feedtitle'] = '{$a->course} wiki : {$a->name} - {$a->subtitle}';
$string['format_html'] = 'Visionner';
$string['format_rtf'] = 'Télécharger sous la forme d’un fichier pour traitement de texte';
$string['format_template'] = 'Télécharger sous la forme d’un fichier modèle pour wiki';
$string['frompage'] = 'de {$a}';
$string['frompages'] = 'de {$a}…';
$string['gradesupdated'] = 'Notes mises à jour';
$string['hideannotationicons'] = 'Cacher les annotations';
$string['historycompareaccessibility'] = 'Sélectionner {$a->lastdate} {$a->createdtime}';
$string['historyfor'] = 'Historique pour';
$string['import'] = 'Importer des pages';
$string['import_confirm'] = 'Confirmer l’importation';
$string['import_confirm_conflicts'] = 'Conflits de pages:';
$string['import_confirm_conflicts_instruct'] = 'Il y a conflit lorsque les noms des pages importées existent déjà dans le wiki.';
$string['import_confirm_conflicts_label'] = 'Fusion:';
$string['import_confirm_conflicts_locked'] = 'La page {$a} est verrouillée.';
$string['import_confirm_conflicts_lockedwarn'] = 'A page to be overwritten is currently locked. Check you are able to edit this page before trying again.';
$string['import_confirm_conflicts_notlocked'] = 'Page non verrouillée';
$string['import_confirm_conflicts_option1'] = 'Fusionner le contenu de la page';
$string['import_confirm_conflicts_option2'] = 'Remplacer le contenu de la page';
$string['import_confirm_from'] = 'Importer de';
$string['import_confirm_infoheader'] = 'Information d’importation';
$string['import_confirm_linkfrom_newpage'] = 'Nouvelle page';
$string['import_confirm_linkfrom_startpage'] = 'Utiliser la page de démarrage importée:';
$string['import_confirm_linkfrom_startpage1'] = 'Fusionner dans la page de démarrage existante';
$string['import_confirm_linkfrom_startpage2'] = 'Créer une nouvelle page à partir de la page de démarrage importée';
$string['import_confirm_linkheader'] = 'Liens de pages';
$string['import_confirm_mergeheader'] = 'Conflits de pages';
$string['import_confirm_pages'] = 'Importer pages:';
$string['import_confirm_pages_help'] = 'Pages sélectionnées pour importation et toute page liée.';
$string['import_confirm_pages_none'] = 'Aucune page sélectionnée pour importation';
$string['import_lockedpage'] = 'Page verrouillée';
$string['import_nocontent'] = 'Ce wiki n’a aucun contenu disponible pour importation.';
$string['import_process'] = 'Importation de pages';
$string['import_process_locked'] = 'Une des pages devant recevoir du contenu importé est verrouillée, soit en permanence pour prévenir toute modification, soit temporairement parce qu’elle est modifiée par un autre utilisateur.';
$string['import_process_startpage_locked'] = 'La page de démarrage devant recevoir du contenu importé est verrouillée, soit en permanence pour prévenir toute modification, soit temporairement parce qu’elle est modifiée par un autre utilisateur.';
$string['import_process_summary'] = 'Résumé';
$string['import_process_summary_imported'] = 'Pages importées';
$string['import_process_summary_success'] = 'L’importation est terminée avec succès.';
$string['import_process_summary_updated'] = 'Pages mises à jour';
$string['import_process_summary_warn'] = 'L’importation est terminée avec des messages d’avertissement.';
$string['import_selectsubwiki'] = 'Sélectionner le wiki';
$string['import_selectsubwiki_help'] = 'Choisir parmi les wikis disponibles. Les wikis sans contenu ne seront pas listés.';
$string['import_selectwiki'] = 'Importer de {$a}';
$string['importedfrom'] = 'Importé de';
$string['importedpages'] = 'Pages importées';
$string['importedstartpage'] = 'Page de démarrage importée';
$string['index'] = 'Index du wiki';
$string['jsajaxrequired'] = 'Cette page d’annotation requiert l’activation de Javascript dans votre navigateur et l’activation du paramètre AJAX et Javascript dans votre profil.';
$string['jsnotenabled'] = 'Javascript n’est pas activé dans votre navigateur.';
$string['lastchange'] = 'Dernière modification : {$a->date} / {$a->userlink}';
$string['lastmodified'] = 'Dernière modification: {$a}';
$string['linkedfrom'] = 'Pages contenant un lien vers celle-ci';
$string['linkedfromsingle'] = 'Page contenant un lien vers celle-ci';
$string['lockcancelled'] = 'Votre verrou d’édition a été outrepassé et quelqu’un d’autre est actuellement en train de modifier cette page. Si vous désirez garder vos modifications, veuillez les sélectionner et les copier avant de cliquer sur Annuler, puis essayer à nouveau de modifier la page.';
$string['lockediting'] = 'Verrouiller wiki - pas de modification';
$string['lockpage'] = 'Verrouiller page';
$string['missingpages'] = 'Pages manquantes';
$string['modulename'] = 'OU wiki';
$string['modulename_help'] = '<p>
Un wiki est un outil web permettant la co-édition d’une séries de pages. Dans Moodle, vous pouvez utiliser le wiki pour faire collaborer vos étudiants.
</p>

<p>
Le OU wiki offre différentes options. Voir l’aide individuelle de chaque paramètre pour plus d’information.
</p>';
$string['modulenameplural'] = 'OU wikis';
$string['mustspecify2'] = 'Vous devez spécifier exactement deux versions à comparer.';
$string['myparticipation'] = 'Ma participation';
$string['newerversion'] = 'Nouvelle version';
$string['newpage'] = 'première version';
$string['next'] = 'Anciennes modifications';
$string['nextversion'] = 'Suivante : {$a}';
$string['noattachments'] = 'Aucune annexe';
$string['nochanges'] = 'Utilisateurs n’ayant fait aucune contribution';
$string['nojsbrowser'] = 'Toutes nos excuses, mais vous utilisez un navigateur Internet que nous ne supportons pas complètement.';
$string['nojsdisabled'] = 'JavaScript est désactivé dans les réglages de votre navigateur.';
$string['nojswarning'] = 'Ceci a pour effet que cette page ne peut être verrouillée pour vous que pendant {$a->minutes} minutes. Assurez-vous d’avoir enregistré vos modifications avant {$a->deadline} (il est actuellement {$a->now}). Sinon, quelqu’un d’autre pourrait modifier la page et vos modifications pourraient être perdues.';
$string['noparticipation'] = 'Aucune participation à afficher.';
$string['note'] = 'Note:';
$string['nousersingroup'] = 'Le groupe sélectionné ne contient pas d’utilisateurs.';
$string['nowikipages'] = 'Ce wiki ne compte aucune page.';
$string['numedits'] = '{$a} modifications';
$string['numwords'] = 'Mots: {$a}';
$string['olderversion'] = 'Ancienne version';
$string['oldversion'] = 'Ancienne version';
$string['onepageview'] = 'You can view all pages of this wiki at once for convenient printing or permanent reference.';
$string['orphanedannotations'] = 'Annotations perdues';
$string['orphanpages'] = 'Pages non liées';
$string['ouwiki:addinstance'] = 'Ajouter un nouveau OU wiki';
$string['ouwiki:annotate'] = 'Annotations permises';
$string['ouwiki:annotateothers'] = 'Annoter tout sous-wiki visible';
$string['ouwiki:deletepage'] = 'Supprimer des pages';
$string['ouwiki:edit'] = 'Modifier les pages du wiki';
$string['ouwiki:editothers'] = 'Modifier le contenu de tout sous-wiki visible';
$string['ouwiki:grade'] = 'Évaluer les utilisateurs qui ont accès au wiki';
$string['ouwiki:lock'] = 'Permettre de verrouiller et de déverrouiller les pages';
$string['ouwiki:overridelock'] = 'Outrepasser les pages verrouillées';
$string['ouwiki:view'] = 'Voir les wikis';
$string['ouwiki:viewallindividuals'] = 'Sous-wikis par utilisateur : voir tous';
$string['ouwiki:viewcontributions'] = 'Voir la liste des contributions organisée par utilisateur';
$string['ouwiki:viewgroupindividuals'] = 'Sous-wikis par utilisateur : voir même groupe';
$string['ouwiki:viewparticipation'] = 'Voir la participation des tous les utilisateurs qui ont accès au wiki';
$string['overridelock'] = 'Outrepasser le verrou';
$string['overviewnumentrysince'] = 'nouvelles modifications de wiki depuis la dernière connexion';
$string['overviewnumentrysince1'] = 'nouvelle modification de wiki depuis la dernière connexion';
$string['page'] = 'Page';
$string['pagecheckboxlabel'] = 'Importer page, {$a}';
$string['pagedeletedinfo'] = 'Des versions supprimées sont visibles dans la liste ci-dessous. Celles-ci ne sont visibles qu’aux utilisateurs ayant la permission de supprimer des versions. Les utilisateurs ordinaires ne les voient pas.';
$string['pagedoesnotexist'] = 'Cette page n’existe pas encore dans le wiki.';
$string['pageedits'] = 'Modifications de page';
$string['pagelockeddetails'] = '{$a->name} a commencé à éditer cette page à {$a->lockedat}, et était toujours en train de l’éditer à {$a->seenat}. Vous ne pouvez pas l’éditer avant qu’ils aient terminé.';
$string['pagelockeddetailsnojs'] = '{$a->name} ont commencé à éditer cette page à {$a->lockedat}. Ils ont jusqu’à {$a->nojs} pour terminer. Vous ne pouvez pas éditer cette page avant qu’ils aient terminé.';
$string['pagelockedoverride'] = 'Vous disposez d’un accès spécial vous permettant d’annuler leurs modifications en cours et de déverrouiller la page.
Si vous faites ceci, leurs modifications seront perdues !
Considérez cet avertissement avant de cliquer sur le bouton Outrepasser.';
$string['pagelockedtimeout'] = 'Leur temps d’édition se termine à {$a}.';
$string['pagelockedtitle'] = 'Cette page est en cours d’édition par quelqu’un d’autre.';
$string['pagenameisstartpage'] = 'Ce nom de page est le même que celui de la page de démarrage. Veuillez entrer un nom différent.';
$string['pagenametoolong'] = 'Ce nom est trop long. Utilisez un nom plus court.';
$string['pagescreated'] = 'Pages créées';
$string['pagesimported'] = 'Pages importées';
$string['participation'] = 'Participation';
$string['participationbyuser'] = 'Participation par utilisateur';
$string['pluginadministration'] = 'Administration OU wiki';
$string['pluginname'] = 'OU wiki';
$string['preview'] = 'Aperçu';
$string['previewwarning'] = 'L’aperçu suivant de vos pages n’a pas encore été enregistré.
<strong>Si vous n’enregistrez pas vos modifications, celles-ci seront perdues.</strong> Pour enregistrer, utilisez le bouton Enregistrer au bas de la page.';
$string['previous'] = 'Nouvelles modifications';
$string['previousversion'] = 'Précédente : {$a}';
$string['recentchanges'] = 'Dernières modifications';
$string['returntohistory'] = '(<a href=\'{$a}\'>Retour à l’historique</a>.)';
$string['returntopage'] = 'Retourner à la page du wiki';
$string['returntoview'] = 'Voir la page en cours';
$string['revert'] = 'Revenir';
$string['reverterrorcapability'] = 'Vous n’avez pas la permission de revenir à une version antérieure';
$string['reverterrorversion'] = 'Impossible de revenir à une version inexistante de la page';
$string['revertversion'] = 'Revenir';
$string['revertversionconfirm'] = '<p>Cette page sera retournée à l’état dans lequel elle était le {$a}, en annulant toutes les modifications faites depuis. Les modifications annulées seront toutefois toujours disponibles dans l’historique de la page.</p><p>Voulez-vous vraiment revenir à cette version de la page ?</p>';
$string['savedat'] = 'Enregistré sous {$a}';
$string['savedby'] = 'enregistrée par {$a}';
$string['savefailcontent'] = 'Votre version de la page est affichée ci-dessous afin que vous puissiez copier et coller vos ajouts et modificatios dans un autre programme. Si vous les enregistrez sur le wiki plus tard, faites attention à ne pas écraser le travail de quelqu’un d’autre.';
$string['savefaildesynch'] = 'Pendant que vous modifiiez cette page, quelqu’un d’autre a réussi à la modifier.
(Ceci peut se produire dans diverses situations, telles que si vous utilisez un navigateur Internet spécial ou si JavaScript est désactivé.) Vos modifications ne peuvent malheureusement pas être enregistrées pour l’instant, car cela aurait pour effet d’annuler celles de l’autre utilisateur.';
$string['savefaillocked'] = 'Pendant que vous modifiiez cette page, quelqu’un d’autre en a obtenu le verrou.
(Ceci peut se produire dans diverses situations, telles que si vous utilisez un navigateur Internet spécial ou si JavaScript est désactivé.) Vos modifications ne peuvent malheureusement pas être enregistrées pour l’instant.';
$string['savefailnetwork'] = '<p>Malheureusement, vos modifications ne peuvent pas être enregistrées en ce moment en raison d,un problème de connexion: le site est hors service ou votre session est échue. </p><p>L’enregistrement a été désactivé sur cette page. Pour conserver vos modifications, copiez le contenu, accédez à de nouveau à la page d’édition et collez vos modifications.</p>';
$string['savefailtitle'] = 'La page ne peut être enregistrée';
$string['savegrades'] = 'Enregistrer les notes';
$string['savetemplate'] = 'Enregistrer le wiki comme un modèle';
$string['search'] = 'Rechercher dans ce wiki';
$string['search_help'] = 'Entrez une expression et appuyer sur Entrée ou cliquez sur le bouton.

Pour rechercher une expression exacte, utilisez les guillemets.

Pour exclure un mot de la recherche, mettez un trait d’union devant.

Exemple: la recherche <tt>picasso -sculpture "premières œuvres"</tt>donnera des résultats pour ‘picasso’ ou l’expression ‘premières œuvres’ mais exclura le terme ‘sculpture’.';
$string['seedetails'] = 'historique global';
$string['showannotationicons'] = 'Afficher les annotations';
$string['showwordcounts'] = 'Afficher le nombre de mots';
$string['showwordcounts_help'] = 'Si activé, le décompte des mots sera affiché au pied du contenu principal.';
$string['sizewarning'] = 'Cette page est très longue et peut exiger un long temps de chargement. Si possible, la diviser en unités logiques plus courtes.';
$string['startannotation'] = 'Début de l’annotation';
$string['startpage'] = 'Page de départ';
$string['startpagedoesnotexist'] = 'La page de départ du wiki n’a pas encore été créée.';
$string['subwikiexist'] = 'Les sous-wikis ont déjà été créés. L’ajout d’un modèle  n’affectera que les nouvelles pages et les sous-wikis vides. Le contenu existant demeurera tel quel.';
$string['subwikis'] = 'Sous-wikis';
$string['subwikis_groups'] = 'Un wiki par groupe';
$string['subwikis_help'] = '<ul>
<li><strong>Wiki unique pour le cours</strong><br />
Tous les participants partagent le même wiki.</li>
<li><strong>Un wiki par groupe</strong><br />
Les membres d’un groupe ont accès à leur copie du wiki. L’accès au contenu est limité aux membres du groupe. Si vous appartenez à plus d,un groupe, vous aurez un menu déroulant vous permettant de passe d’un wiki à l’autre.</li>
<li><strong>Un wiki par utilisateur</strong><br />
Chaque utilisateur possède son propre wiki. À moins d’avoir des droits supplémentaires, il ne verra que son wiki.</li>
</ul>

<p>
On peut limiter l’accès à un groupement. Les autres groupes seront alors ignorés.
</p>';
$string['subwikis_individual'] = 'Un wiki par utilisateur';
$string['subwikis_single'] = 'Un seul wiki par cours';
$string['summary'] = 'Résumé';
$string['summary_help'] = '<p>
Si vous rédigez un résumé, il sera affiché sur la page de démarrage du wiki, au-dessus de la partie éditable. Le résumé ne peut pas être modifié.
</p>

<p>
Le résumé n’est pas nécessaire. Vous pouvez laisser la zone de saisie vide si vous n’en avez pas besoin.
</p>';
$string['system'] = 'le système';
$string['tab_annotate'] = 'Annoter';
$string['tab_discuss'] = 'Discuster';
$string['tab_edit'] = 'Editer';
$string['tab_history'] = 'Historique';
$string['tab_index_alpha'] = 'Alphabétique';
$string['tab_index_changes'] = 'Toutes les modifications';
$string['tab_index_pages'] = 'Nouvelles pages';
$string['tab_index_tree'] = 'Structure';
$string['tab_view'] = 'Voir';
$string['template'] = 'Modèle';
$string['template_help'] = '<p>
Un modèle est un ensemble de pages prédéfinies. Chaque nouveau wiki porte alors le contenu du modèle.
</p>

<p>
Le modèle s’applique à chaque sous-wiki. Par exemple, en mode "Un wiki par groupe", chaque wiki de groupe est basé sur le modèle.
</p>

<p>
Pour créer un modèle, utilisez n’importe quel wiki. Ensuite, dans la page index de ce wiki, cliquez sur "Enregistrer comme modèle". (Vous pourriez aussi créer un modèle dans un autre éditeur puisque le format XML utilisé est très simple.)
</p>

<p>
Vous pouvez ajouter le modèle après la création du wiki. Un nouveau modèle ne s’appliquera qu’aux nouveaux sous-wikis. Les wikis déjà existants demeureront tels quels. </p>';
$string['templatefileexists'] = 'Un fichier modèle « {$a} » est déjà utilisé.';
$string['thispageislocked'] = 'Cette page de wiki est verrouillée et ne peut pas être modifiée.';
$string['timelocked_after'] = 'Ce wiki est actuellement verrouillé et ne peut plus être édité.';
$string['timelocked_before'] = 'Ce wiki est actuellement verrouillé. Il peut être édité dès {$a}.';
$string['timeout'] = 'Temps d’expiration pour édition';
$string['timeout_help'] = '<p>
Si vous imposez une limite de temps, les utilisateurs ne pourront modifier le wiki que pour une période de temps donnée. Les pages en cours de modification sont verrouillées pour empêcher deux utilisateurs de modifier le même contenu simultanément. Une limite de temps empêche un verrouillage trop long.
</p>

<h3>Ce que voient les utilisateurs</h3>

<p>
QUand il y a une limite de temps, les utilisateurs voient un décompte du temps restant. À zéro, leurs modification seront automatiquement enregistrées et le wiki sera déverrouillé.
</p>

<h3>Sans Javascript</h3>

<p>
Cette option n’a aucun effet sur les utilisateurs qui n’ont pas Javascript dans leur navigateur. Ils seront toujours soumis à un maximum de 15 minutes. L’enregistrement ne peut pas se faire automatiquement. Il y a donc un risque de perdre sont travail.
</p>

<h3>Pourquoi cette option ?</h3>

<p>
Even when this option is turned off, locks are automatically discarded in the following situations after
a user has begun to edit a page:
</p>

<ul>
<li>Without saving changes or cancelling, the user moves to a different page.</li>
<li>The user closes their browser.</li>
<li>The user’s computer crashes.</li>
<li>The user loses their Internet connection.</li>
</ul>

<p>
In these situations the lock is automatically removed after about two minutes.
</p>

<p>
In addition, tutors and course staff have (by default) the ability to override any lock at any time.
</p>

<h3>What this option doesn’t do</h3>

<p>
This option doesn’t stop somebody holding on to a page and preventing other users from editing it if
they are very determined. They could edit a page and wait until the timeout is about to expire before
saving changes then very quickly editing it again.
</p>';
$string['timeout_none'] = 'Pas d’expiration';
$string['tryagain'] = 'Ré-essayer';
$string['typeinpagename'] = 'Entrez le titre de la page ici';
$string['typeinsectionname'] = 'Entrez le nom de la section ici';
$string['unabletoimport'] = 'Aucun wiki disponible pour importation';
$string['undelete'] = 'Annuler la suppression';
$string['unlockpage'] = 'Déverrouiller la page';
$string['userdetails'] = 'Détails pour {$a}';
$string['usergrade'] = 'Note de l’utilisateur';
$string['userparticipation'] = 'Participation de l’utilisateur';
$string['viewdeletedversionerrorcapability'] = 'Erreur d’affichage de la version de la page';
$string['viewparticipationerrror'] = 'Impossible d’afficher la participation de l’utilisateur';
$string['viewwikichanges'] = 'Change pour {$a}';
$string['viewwikistartpage'] = 'Afficher {$a}';
$string['wikifor'] = 'Affichage du wiki de :';
$string['wikifullchanges'] = 'Voir la liste complète des modifications';
$string['wikirecentchanges'] = 'Modifications sur le wiki';
$string['wikirecentchanges_from'] = 'Modifications sur le wiki (page {$a})';
$string['words'] = 'Mots';
$string['wordsadded'] = 'Mots ajoutés';
$string['wordsdeleted'] = 'Mots supprimés';
$string['wouldyouliketocreate'] = 'Voulez-vous la créer ?';
