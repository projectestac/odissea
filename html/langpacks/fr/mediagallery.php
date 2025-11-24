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
 * Strings for component 'mediagallery', language 'fr', version '4.5'.
 *
 * @package     mediagallery
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addagallery'] = 'Ajouter une galerie';
$string['addanitem'] = 'Ajouter un élément';
$string['addbulkitems'] = 'Ajouter plusieurs éléments en une fois';
$string['addsamplegallery'] = 'Ajouter un exemple de galerie';
$string['allowcomments'] = 'Autoriser les commentaires';
$string['allowcomments_help'] = 'Autoriser les utilisateurs à commenter les galeries et leurs éléments.';
$string['allowlikes'] = 'Autoriser les "j’aime"';
$string['allowlikes_help'] = 'Autoriser les utilisateurs à aimer les éléments d’une galerie';
$string['areagallery'] = 'Galeries';
$string['areaitem'] = 'Objects';
$string['arealowres'] = 'Basse résolution';
$string['areathumbnail'] = 'Vignettes';
$string['automatic'] = 'Automatique';
$string['beingprocessed'] = 'calcul en cours…';
$string['bottom'] = 'Bas';
$string['broadcaster'] = 'Diffuseur';
$string['broadcaster_help'] = 'Qui diffuse ce contenu ?';
$string['caption'] = 'Légende';
$string['caption_help'] = 'La légende de cet élément dans la galerie. Cette légende apparaîtra avec l’élément.';
$string['captionposition'] = 'Position de la légende';
$string['carousel'] = 'Carousel';
$string['choosecontent'] = 'Sélectionner un fichier à déposer ou une URL dans les options ci-dessous.';
$string['close'] = 'Fermer';
$string['collection'] = 'Collection';
$string['collectionwasdeleted'] = 'Désolé cette collection n’existe plus, elle a été supprimé du cours.';
$string['collmode'] = 'Mode de la collection';
$string['collmode_help'] = 'Cette collection sera-t-elle uniquement stocké dans Moodle, ou lié depuis l’extérieur. Attention, une fois choisie cette option ne pourra plus être modifié.

<ul>
<li>Standard:  dans ce mode, la collection, ses galeries et ses éléments sont stocké uniquement dans Moodle.</li>
</ul>';
$string['colltype'] = 'Type de la collection';
$string['colltype_help'] = 'Le type d’une collection détermine le niveau d’interaction entre un utilisateur et cette collection.

<ul>
<li>Collection pour enseignant : seuls les utilisateurs pouvant noter la collection pourront ajouter/éditer sont contenu.
Ce type est principalement utilisé pour créer des exemples de collections, ou un ensemble de galeries sans risque de modification par les utilisateurs.</li>
<li>Collection ouverte : permet aux utilisateurs de créer leurs propres galeries et éléments.
Ne peut être utilisé dans le cadre d’une activité notée.</li>
<li>Collection pour devoir : les utilisateurs ne verront que les galeries qu’ils ont créés (et celles de leur groupe - si le mode groupe est activé) .
Peut être utilisé dans le cadre d’une activité notée.</li>
<li>Collection évalué par les pairs : chaque utilisateur est en mesure de voir les galeries des autres utilisateurs / groupes. Ils peuvent les commenter et/ou les aimer si ces fonctions sont activées.
Peut être utilisé dans le cadre d’une activité notée.</li>
</ul>';
$string['colltypeassignment'] = 'Collection pour devoir';
$string['colltypecontributed'] = 'Collection ouverte';
$string['colltypeinstructor'] = 'Collection pour enseignant';
$string['colltypepeerreviewed'] = 'Collection évalué par les pairs';
$string['comments'] = 'Commentaires';
$string['completegallery'] = 'Galerie complète';
$string['configdisablestandardgallery'] = 'Si activé, les utilisateurs ne pourront plus créer de galerie standard.';
$string['configenablethebox'] = 'Cette option doit être activée afin que les utilisateurs puissent créer des collections et des contenus avec le dépôts theBox. Avec l’option désactivée, les collections theBox existantes afficheront un message disant que l’activité est indisponible.
N’affecte pas les collections standard.';
$string['configmaxbytes'] = 'Taille maximale par défaut des fichier pour toutes les collections multimédias sur le site (sous réserve des limites de cours et d’autres paramètres locaux)';
$string['confirmcollectiondelete'] = 'Confirmer la suppression de la collection';
$string['confirmgallerydelete'] = 'Confirmer la suppression de la galerie';
$string['confirmitemdelete'] = 'Confirmer la suppression de l’élément';
$string['content'] = 'Contenu';
$string['content_help'] = 'L’élément à ajouter à la galerie.';
$string['contentbulk'] = 'Contenu';
$string['contentbulk_help'] = 'Vous pouvez sélectionner une archive zip contenant plusieurs images qui seront alors extraites dans le répertoire.';
$string['contentbulkheader'] = 'Vous pouvez déposer une archive au format ZIP contenant des fichiers multimédias.
Chaque fichier de l’archive sera ajouté comme un élément supplémentaire de la galerie.
Faites attention à ce que l’archive ne contienne que les fichiers désirés avant de l’envoyer !
Les dossiers à l’intérieur de l’archive seront ignorés.';
$string['contentlinked'] = 'Contenu';
$string['contentlinked_help'] = 'Une fois qu’un élément est liée à un contenu dans un dépôt theBox, vous ne pourrez plus changer le fichier lié.';
$string['contentlinkedinfo'] = 'Cet article est lié au fichier {$ a} dans le dépôt theBox.';
$string['copyright'] = 'Droit d’auteur';
$string['copyright_help'] = 'Définit la licence à appliquer pour tous les éléments envoyé avec ce formulaire.';
$string['createdby'] = 'Créé par : {$a}';
$string['creator'] = 'Créateur';
$string['datecreated'] = 'Date de création';
$string['deletegallery'] = 'Supprimer la galerie';
$string['deleteitem'] = 'Supprimer l’élément';
$string['deleteorremovecollection'] = 'Si vous souhaitez supprimer le lien vers la collection sans supprimer le contenu, cliquez pour confirmer.
<br/><br/>
Si vous souhaitez supprimer le lien vers la collection ainsi que son contenu, écrivez DELETE dans la zone de texte ci-dessous et cliquez sur soumettre.';
$string['deleteorremovecollectionwarn'] = 'En supprimant, vous êtes conscient que vous : <br/>
- supprimez le lien vers la collection ;<br/>
- supprimez la collection et/ou toutes ses galeries ainsi que tous ses contenus ;<br/>
- Invalidez tous les liens faits dans d’autres cours vers cette collection ou son contenu.';
$string['deleteorremovegallery'] = 'Si vous souhaitez supprimer le lien vers la galerie sans supprimer le contenu, cliquez sur soumettre.
<br/><br/>
Si vous souhaitez supprimer le lien vers la galerie ainsi que son contenu, écrivez DELETE dans la zone de texte ci-dessous et cliquez sur soumettre.';
$string['deleteorremovegallerywarn'] = 'En supprimant, vous êtes conscient que vous : <br/>
- supprimez le lien vers la galerie ;<br/>
- supprimez la galerie ainsi que tous ses contenus ;<br/>
- Invalidez tous les liens faits dans d’autres cours vers cette galerie ou son contenu.';
$string['deleteorremoveitem'] = 'Si vous souhaitez supprimer le lien vers l’élément de la galerie sans supprimer le contenu, cliquez sur soumettre.
<br/><br/>
Si vous souhaitez supprimer le lien vers l’élément de la galerie ainsi que son contenu, écrivez DELETE dans la zone de texte ci-dessous et cliquez sur soumettre.';
$string['deleteorremoveitemwarn'] = 'En supprimant, vous êtes conscient que vous : <br/>
- supprimez le lien vers l’oblet multimédia ;<br/>
- supprimez l’oblet multimédia ;<br/>
- Invalidez tous les liens faits dans d’autres cours vers ce contenu.';
$string['disablestandardgallery'] = 'Désactiver les galeries standards';
$string['displayfullcaption'] = 'Afficher la légende complète';
$string['editgallery'] = 'Modifier les paramètres de la galerie';
$string['editthisgallery'] = 'Modifier la galerie';
$string['enablethebox'] = 'Activer theBox';
$string['enforcedefaults'] = 'Appliquer les options par défaut sur la galerie';
$string['enforcedefaults_help'] = 'Si l’option est activée, le paramétrage par défaut, tel que déterminé par l’enseignant sera appliqué.';
$string['errorchooseimportoption'] = 'Merci de sélectionner une option d’importation';
$string['errornotyouritem'] = 'Vous ne pouvez pas modifier cet élément multimédia, il appartient à un autre utilisateur.';
$string['errortheboxunavailable'] = 'Désolé, mais le dépôt theBox semble actuellement indisponible. Merci de patienter avant toute nouvelle tentative.';
$string['errortoomanygalleries'] = 'Désolé, vous (ou votre groupe) avez dépassé le nombre maximum de galeries autorisés dans cette collection ({$ a}).';
$string['errortoomanyitems'] = 'Désolé, cette galerie a attient le nombre maximum d’éléments autorisés ({$a}).';
$string['eventcollectiondeleted'] = 'Collection supprimée';
$string['eventgallerycreated'] = 'Galerie créée';
$string['eventgallerydeleted'] = 'Galerie supprimée';
$string['eventgalleryupdated'] = 'Galerie mise à jour';
$string['eventgalleryviewed'] = 'Galerie affichée';
$string['eventitemcreated'] = 'Élément créé';
$string['eventitemdeleted'] = 'Élément supprimé';
$string['eventitemupdated'] = 'Élément mis à jour';
$string['export'] = 'Export';
$string['exportgallery'] = 'Exporter la galerie';
$string['externalurl'] = 'URL externe';
$string['externalurl_help'] = 'Ne sont actuellement pris en charge que les liens vers des images et des vidéos YouTube .';
$string['filename'] = 'Nom du fichier';
$string['filesize'] = 'Taille du fichier';
$string['foundxresults'] = '{$a} résultats trouvés :';
$string['gallery'] = 'Galerie';
$string['galleryfocus'] = 'Focus';
$string['galleryfocus_help'] = 'Le focus par défaut de la galerie (détermine quel type de fichier sera présenté comme le focus de la galerie). Le focus sera automatiquement vidéo pour les galeries Youtube.';
$string['galleryname'] = 'Nom de la galerie';
$string['gallerythumbnail'] = 'Utiliser comme vignette';
$string['gallerythumbnail_help'] = 'Si elle est sélectionnée, la vignette de cette élément sera utilisée comme vignette de la galerie.';
$string['galleryviewoptions'] = 'Options de visualisation';
$string['galleryviewoptions_help'] = 'Détermine les options d’affichage de la galerie qui seront disponibles pour les étudiants.';
$string['gridview'] = 'Mode grille';
$string['gridviewcolumns'] = 'Colonnes';
$string['gridviewcolumns_help'] = 'Le nombre de colonnes affichées en mode grille.';
$string['gridviewrows'] = 'Lignes';
$string['gridviewrows_help'] = 'En mode grille, le nombre de lignes affichées.';
$string['group'] = 'Groupe';
$string['group_help'] = 'Comme vous êtes un membre de plusieurs groupes (ou avez l’autorisation de gérer des groupes dans ce cours), cette option défini le groupe que vous souhaitez associer à la galerie.';
$string['information'] = 'Information';
$string['itemdisplay'] = 'Afficher l’élément';
$string['itemdisplay_help'] = 'Inclure cet élément dans l’affichage (par exemple carrousel) de la galerie.';
$string['like'] = 'Aimer';
$string['likedby'] = 'Aimé par';
$string['maxbytes'] = 'Taille maximum par élément';
$string['maxgalleries'] = 'Nombre de galeries maximum par utilisateur/groupe';
$string['maxgalleries_help'] = 'Le nombre maximum de galeries un utilisateur / groupe peut créer dans cette collection.

Remarque: les collections des enseignants sont toujours illimitées.';
$string['maxgalleriesreached'] = 'Vous avez atteint votre maximum de galerie';
$string['maxitems'] = 'Nombre d’éléments maximum par galerie';
$string['maxitems_help'] = 'Le nombre maximum d’éléments qu’un utilisateur peut mettre dans une galerie de cette collection.
Remarque: les collections des enseignants sont toujours illimitées.';
$string['maxitemsreached'] = 'Vous avez atteint le maximum d’éléments';
$string['mediagallery'] = 'Collection multimédia';
$string['mediagallery:addinstance'] = 'Ajouter une instance de collection multimédia';
$string['mediagallery:comment'] = 'Commenter sur une galerie ou un élément';
$string['mediagallery:grade'] = 'Noter une galerie';
$string['mediagallery:like'] = 'Possibilité d’aimer les éléments dune collection';
$string['mediagallery:manage'] = 'Gérer une instance de collection multimédia';
$string['mediagallery:viewall'] = 'Possibilité de visualiser toutes les galeries dans une collection';
$string['mediagalleryfieldset'] = 'Exemple de fieldset';
$string['mediagalleryname'] = 'Nom de la collection';
$string['mediagalleryname_help'] = 'Le nom que vous souhaitez donner à votre collection multimédia.';
$string['medium'] = 'Medium';
$string['medium_help'] = 'Le medium utilisé pour créer l’œuvre (peinture, photographie, son, etc.).';
$string['metainfobulkheader'] = 'Les valeurs ci-dessous seront utilisés comme les métadonnées initiales pour chacun des éléments ajoutés ci-dessus.';
$string['mode'] = 'Mode gallerie';
$string['mode_help'] = 'Définit le type de contenu de la galerie. Une fois choisi, cette valeur ne pourra pas être modifié.

<ul> <li> Standard: dans ce mode, l’utilisateur peut ajouter tout type de contenu multimédia ;</ li>
<li> YouTube: dans ce mode, seules les vidéos YouTube peuvent être ajoutés à la galerie.</ li> </ ul>';
$string['modestandard'] = 'Standard';
$string['modethebox'] = 'theBox';
$string['modeyoutube'] = 'YouTube';
$string['modulename'] = 'Collection multimédia';
$string['modulename_help'] = 'Le module collection multimédia permet de créer des galeries au contenu multimédia.

Les utilisateurs peuvent créer leurs propres galeries d’images, de vidéo ou d’audio. En propre ou en groupes.

Le contenu déposé est présenté sous forme de vignettes dans un carrousel ou dans une grille. Cliquer sur une vignette place l’image en focus et permet de naviguer à l’intérieur de la galerie. Les utilisateurs peuvent aussi «Aimer» et commenter le contenu des galeries.';
$string['modulenameplural'] = 'Collections multimédia';
$string['moralrights'] = 'Droits moraux';
$string['moralrights_help'] = 'Souhaitez-vous faire valoir vos droits moraux ?

En sélectionnant oui vous accordez votre consentement à ce que cet article soit potentiellement utilisé comme un exemple de travail.';
$string['noitemsadded'] = 'Aucun élément n’a été ajouté à cette galerie.';
$string['noitemsfound'] = 'Aucun élément trouvé.';
$string['noitemsselected'] = 'Aucun élément n’a été sélectionné pour exportation.';
$string['originalauthor'] = 'Auteur de l’original';
$string['originalauthor_help'] = 'L’auteur original de l’élément';
$string['other'] = 'autre';
$string['otherfiles'] = 'Autres fichiers';
$string['others'] = 'autres';
$string['pluginadministration'] = 'Administration de Media collection';
$string['pluginname'] = 'Media collection';
$string['productiondate'] = 'Date de production';
$string['productiondate_help'] = 'La date de production de l’œuvre originale.';
$string['publisher'] = 'Éditeur';
$string['publisher_help'] = 'L’éditeur (si applicable) de l’œuvre originale.';
$string['readonlyfrom'] = 'Lecture seule à partir de';
$string['readonlyto'] = 'Lecture seule jusqu’à';
$string['reference'] = 'Référence';
$string['reference_help'] = 'Référence à la collection (si applicable) d’origine de l’œuvre.';
$string['removecollectionconfirm'] = 'Voulez-vous vraiment supprimer le lien vers cette collection ?';
$string['removegalleryconfirm'] = 'Voulez-vous vraiment supprimer le lien vers cette galerie ?';
$string['removeitemconfirm'] = 'Voulez-vous vraiment supprimer le lien vers cet élément  ?';
$string['removethecollection'] = 'Retirer / supprimer la collection';
$string['restrictavailableinfo'] = 'Utilisez la section "Restreindre l’accès" ci-dessous pour limiter les dates de disponibilité de cette activité.';
$string['sample'] = 'Échantillon';
$string['search'] = 'Rechercher';
$string['search_help'] = 'Entrez les mots clés que vous souhaitez rechercher.';
$string['searchcourseonly'] = 'Dans ce cours seulement';
$string['searchcourseonly_help'] = 'Souhaitez-vous rechercher des éléments dans les galeries multimédias de ce cours uniquement.';
$string['searchdisplayxtoyofzresults'] = '{$ a-> total} résultat (s) trouvé (s). Affichage {$ a-> from} - {$ a-> to} :';
$string['searchresults'] = 'Résultats de recherche';
$string['searchtitle'] = 'Recherches de collections multimédias';
$string['selection'] = 'Sélection';
$string['settingsavailability'] = 'Disponibilité';
$string['settingsdisplay'] = 'Liste d’affichage';
$string['settingsgallery'] = 'Options par défaut de la galerie';
$string['settingsgallerydisplay'] = 'Affichage de la galerie';
$string['settingsvisibility'] = 'Visibilité';
$string['showall'] = 'Tout afficher';
$string['storagereport'] = 'Stockage du plugin Media Collection';
$string['storagetotalusage'] = 'Stockage total sur l’ensemble du site : {$a}.';
$string['submittedforgrading'] = 'Soumis à notation';
$string['synclastcompleted'] = 'Dernière synchronisation';
$string['syncwiththebox'] = 'Synchroniser avec theBox';
$string['tags'] = 'Mots clés';
$string['theboxisnotenabled'] = 'Cette collection est actuellement indisponible. Elle est lié au dépôt thebox, qui n’est pas activée.';
$string['thumbnail'] = 'Vignette';
$string['thumbnail_help'] = 'Vous pouvez sélectionner une image dans la galerie à utiliser comme vignette de cet élément.

Si vous n’en fournissez pas une, la vignette sera généré automatiquement à partir de l’élément (pour les images) ou de l\' icône du type de fichier (pour les autres fichiers).';
$string['thumbnailsperpage'] = 'Vignettes par page';
$string['thumbnailsperrow'] = 'Vignettes par ligne';
$string['togglefullscreen'] = 'activer le plein écran';
$string['togglesidebar'] = 'activer la barre latérale';
$string['top'] = 'haut';
$string['typeaudio'] = 'Audio';
$string['typeimage'] = 'Image';
$string['typevideo'] = 'Vidéo';
$string['unlike'] = 'Ne plus aimer';
$string['uploader'] = 'Déposer';
$string['viewgallery'] = 'Voir la galerie';
$string['visibleinstructor'] = 'Visible pour les enseignants à partir de';
$string['visibleinstructor_help'] = 'Définit la galerie comme visible aux enseignants après la date spécifiée. Cela peut être utile pour permettre aux enseignants d’accéder avant tous les autres utilisateurs. Les gestionnaires de cours (avec les capacités appropriées) seront toujours en mesure de voir la galerie.';
$string['visibleother'] = 'Visible pour tous (dans le cours) à partir de';
$string['visibleother_help'] = 'Définit la galerie comme visible aux utilisateurs après la date spécifiée. Les gestionnaires de cours (avec les capacités appropriées) seront toujours en mesure de voir la galerie.';
$string['you'] = 'Vous';
$string['youmusttypedelete'] = 'Vous devez taper DELETE pour confirmer la suppression.';
$string['youtubeurl'] = 'URL YouTube';
