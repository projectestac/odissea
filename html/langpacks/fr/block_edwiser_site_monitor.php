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
 * Strings for component 'block_edwiser_site_monitor', language 'fr', version '4.1'.
 *
 * @package     block_edwiser_site_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeusers'] = 'Actif';
$string['cannotshowonsidebar'] = 'Impossible d\'afficher le tableau d\'utilisation dans la barre latérale. Veuillez déplacer le bloc vers la zone de contenu pour voir le tableau d\'utilisation.';
$string['changelog'] = 'Journal des modifications';
$string['checksettings'] = 'Veuillez vérifier le <a target="_blank" href="{$a->link}">{$a->text}</a>';
$string['comeswith'] = 'Fourni avec : {$a}';
$string['configtitle'] = 'Titre du bloc Edwiser Site Monitor';
$string['contactus'] = 'Nous contacter';
$string['cpu'] = 'Processeur';
$string['cpucommandnotallowed'] = 'Ligne de commande <strong>/proc/cpuinfo</strong> --Autorisation refusée.';
$string['cpuhigherlimit'] = 'Limite supérieure du processeur';
$string['cpuhigherlimit_help'] = 'Limite supérieure d\'utilisation du processeur';
$string['cpulimit_invalid'] = 'Veuillez saisir une limite de processeur valide';
$string['cpulimit_overlap'] = 'Veuillez saisir une limite de processeur valide. La limite supérieure ne peut pas être inférieure ou égale à la limite inférieure';
$string['cpulowerlimit'] = 'Limite inférieure du processeur';
$string['cpulowerlimit_help'] = 'Limite inférieure d\'utilisation du processeur';
$string['cpuusage'] = 'Utilisation du processeur';
$string['crontask'] = 'Edwiser Site Monitor - Collecter des statistiques d\'utilisation sur 24 heures';
$string['deletedusers'] = 'Supprimé';
$string['edwiser_site_monitor:addinstance'] = 'Ajouter un nouveau bloc de surveillance de site';
$string['edwiser_site_monitor:myaddinstance'] = 'Ajouter un nouveau moniteur de site au tableau de bord';
$string['edwiserplugins'] = 'Plugins Edwiser';
$string['emailfailed'] = 'Envoi de courriel impossible.';
$string['emailsent'] = 'Courriel envoyé.';
$string['emailsuccess'] = 'Votre message a été envoyé avec succès. Merci.';
$string['enablethreshold'] = 'Activer les limites de seuil';
$string['enablethreshold_help'] = 'Cela permettra des vérifications de seuil et enverra un courriel si l\'utilisation est inférieure à la limite inférieure ou supérieure à la limite la plus élevée';
$string['errorfetching'] = 'Erreur lors de la récupération du plugin ZIP. <b>{$a}</b>';
$string['errorfetchingexist'] = 'Erreur lors de la récupération du plugin ZIP: l\'emplacement cible existe déjà. <b>{$a}</b>';
$string['errors'] = 'Erreurs';
$string['failed'] = 'Échoué';
$string['hader-threshold'] = 'Seuil';
$string['header-current'] = 'Courant';
$string['header-expected'] = 'Bas/Haut';
$string['header-type'] = 'Type';
$string['high'] = 'Haut';
$string['highusage'] = 'Utilisation élevée';
$string['installnew'] = 'Installer un nouveau plugin';
$string['invalidjsonfile'] = 'Liste de produits Edwiser non valide.';
$string['invalidzip'] = 'Fichier ZIP invalide. <b>{$a}</b>';
$string['knowmore'] = 'En savoir plus';
$string['last24hoursusage'] = 'Dernières 24 heures d\'utilisation';
$string['livestatusrefreshrate'] = 'Fréquence de rafraîchissement';
$string['livestatusrefreshrate_help'] = 'Fréquence de rafraîchissement en secondes pour l\'onglet d\'état en direct';
$string['livestatusrefreshrate_invalid'] = 'Veuillez fournir une fréquence de rafraîchissement valide en secondes';
$string['liveusage'] = 'Utilisation en direct';
$string['liveusers'] = 'Utilisateurs en direct';
$string['low'] = 'Bas';
$string['lowusage'] = 'Faible utilisation';
$string['memory'] = 'Mémoire';
$string['memorycommandnotallowed'] = 'Ligne de commande <strong>free</strong> --Autorisation refusée.';
$string['memoryhigherlimit'] = 'Limite supérieure de la mémoire';
$string['memoryhigherlimit_help'] = 'Limite supérieure d\'utilisation de la mémoire';
$string['memorylimit_invalid'] = 'Veuillez saisir une limite de mémoire valide';
$string['memorylimit_overlap'] = 'Veuillez saisir une limite de mémoire valide. La limite supérieure ne peut pas être inférieure ou égale à la limite inférieure';
$string['memorylowerlimit'] = 'Limite inférieure de la mémoire';
$string['memorylowerlimit_help'] = 'Limite inférieure d\'utilisation de la mémoire';
$string['memoryusage'] = 'Utilisation de la mémoire';
$string['messageprovider:notifications'] = 'Nouveautés et mises à jour Edwiser';
$string['moderateusage'] = 'Utilisation modérée';
$string['news'] = 'Nouveautés et mises à jour Edwiser';
$string['noupdates'] = 'Tout est à jour.';
$string['otherplugins'] = 'Autres plugins';
$string['pluginname'] = 'Edwiser Site Monitor';
$string['policy'] = 'Je suis d\'accord avec la <a href="{$a}" target="_blank">politique de confidentialité</a>';
$string['privacy:metadata'] = 'Le bloc de surveillance de site affiche des informations sur le serveur.';
$string['privacy:metadata:block_edwiser_site_monitor:cpu'] = 'Utilisation du processeur par le site lorsqu\'elle est enregistrée.';
$string['privacy:metadata:block_edwiser_site_monitor:memory'] = 'Mémoire utilisée par le site lorsqu\'elle est enregistrée.';
$string['privacy:metadata:block_edwiser_site_monitor:storage'] = 'Stockage utilisé par le site lorsqu\'il est enregistré.';
$string['privacy:metadata:block_edwiser_site_monitor:tableexplanation'] = 'Stocke l\'utilisation du processeur, de la mémoire et du stockage du site.';
$string['privacy:metadata:block_edwiser_site_monitor:time'] = 'Durée quand l\'utilisation est enregistrée.';
$string['recommendation'] = 'Plugins recommandés';
$string['requirehigherversion'] = 'Version de Moodle requise : <b>{$a}</b>';
$string['storage'] = 'Stockage';
$string['storagehigherlimit'] = 'Limite supérieure de stockage';
$string['storagehigherlimit_help'] = 'Limite supérieure d\'utilisation du stockage';
$string['storagelimit_invalid'] = 'Veuillez saisir une limite de stockage valide';
$string['storagelimit_overlap'] = 'Veuillez saisir une limite de stockage valide. La limite supérieure ne peut pas être inférieure ou égale à la limite inférieure';
$string['storagelowerlimit'] = 'Limite inférieure de stockage';
$string['storagelowerlimit_help'] = 'Limite inférieure d\'utilisation du stockage';
$string['storageusage'] = 'Utilisation du stockage';
$string['suspendedusers'] = 'Suspendu';
$string['thanksmessage'] = '<div style="background-color: #efefef; -webkit-text-size-adjust: none !important; margin: 0; padding: 70px 70px 70px 70px;"><table id="template_container" style="text-align: center; padding-bottom: 20px; background-color: rgb(223, 223, 223); box-shadow: rgba(0, 0, 0, 0.024) 0px 0px 0px 3px !important; border-radius: 6px !important; margin: auto;" border="0" width="500" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="background-color: #1177d1;border-top-left-radius: 6px !important;border-top-right-radius: 6px !important;border-bottom: 0;font-family: Arial;font-weight: bold;line-height: 100%;vertical-align: middle;">
<center><img style="height: 60px;" src="https://edwiser.org/wp-content/uploads/2016/07/edwiser-logoalternate.png"></center>
</td>
</tr>
<tr>
<td style="padding: 20px; background-color: #dfdfdf; border-radius: 6px !important;" align="center" valign="top">
<div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;">Hi {$a->user},</div><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;"><br>Merci de nous contacter.<br><br> Notre équipe d\'assistance reviendra vers vous dans les prochaines 24 heures.</div><br><div style="font-family: Arial; font-size: 14px; line-height: 150%; text-align: left;"> Il s\'agit d\'un e-mail généré automatiquement. Pour toute question ou aide supplémentaire, vous pouvez nous contacter à {$a->email}</div></td></tr></tbody></table><br>
</div>';
$string['thankssubject'] = 'Merci de nous contacter';
$string['thresholdheader'] = 'Seuil limite';
$string['today'] = 'Aujourd\'hui';
$string['unabletoloadplugindetails'] = 'Impossible de charger les détails du plugin <b>{$a}</b>';
$string['unabletounzip'] = 'Impossible d\'extraire <b>{$a}</b>';
$string['usageemailsubject'] = '{$a} : Edwiser Site Monitor - Avertissement d\'utilisation';
$string['users'] = 'Utilisateurs';
$string['xaxistitle'] = 'Temps';
$string['yaxistitle'] = 'Utilisation (%)';
