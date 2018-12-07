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
 * Strings for component 'tool_lp', language 'sv', branch 'MOODLE_34_STABLE'
 *
 * @package   tool_lp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Händelser';
$string['activities'] = 'Aktiviteter';
$string['addcohorts'] = 'Lägg till kohorter';
$string['addcohortstosync'] = 'Lägg till kohorter att synka';
$string['addcompetency'] = 'Lägg till kompetens';
$string['addcoursecompetencies'] = 'Lägg till kompetenser till kurs';
$string['addcrossreferencedcompetency'] = 'Lägg till korsrefererad kompetens';
$string['addingcompetencywillresetparentrule'] = 'Lägg till en kompetens kommer att ta bort regeln gällande  \'{$a}\'. Vill du fortsätta?';
$string['addnewcompetency'] = 'Lägg till en ny kompetens';
$string['addnewcompetencyframework'] = 'Lägg till ett nytt ramverk för kompetenser';
$string['addnewplan'] = 'Lägg till ny studieplan';
$string['addnewtemplate'] = 'Lägg till ny studieplansmall';
$string['addnewuserevidence'] = 'Lägg till ny verifiering';
$string['addtemplatecompetencies'] = 'Lägg till kompetenser i en mall för studieplaner';
$string['aisrequired'] = '\'{$a}\' krävs';
$string['aplanswerecreated'] = '{$a} studieplan skapades.';
$string['aplanswerecreatedmoremayrequiresync'] = '{$a} studieplaner skapades; fler kommer skapas under nästa synkronisering.';
$string['assigncohorts'] = 'Tilldela kohorter';
$string['averageproficiencyrate'] = 'Den genomsnittliga fullföljandegraden för fullföljda studieplaner baserat på denna mall är {$a} %';
$string['cancelreviewrequest'] = 'Avbryt bedömningsförfråga';
$string['cannotaddrules'] = 'Kompetensen kan inte bli konfigurerad.';
$string['cannotcreateuserplanswhentemplateduedateispassed'] = 'Nya studieplaner kan inte skapas. Mallens sista datum har passerats eller kommer att passeras snart.';
$string['cannotcreateuserplanswhentemplatehidden'] = 'Nya studieplaner kan inte skapas medan denna mall är gömd.';
$string['category'] = 'Kategori';
$string['chooserating'] = 'Välj en bedömning...';
$string['cohortssyncedtotemplate'] = 'Kohorter är synkade till denna studieplansmall';
$string['competenciesforframework'] = 'Kompetenser för {$a}';
$string['competenciesmostoftennotproficient'] = 'Kompetenser som oftast ej uppnåtts i avslutade studieplaner';
$string['competenciesmostoftennotproficientincourse'] = 'Kompetenser som oftast ej uppnåtts i denna kurs';
$string['competencycannotbedeleted'] = 'Kompetensen \'{$a}\' kan inte raderas';
$string['competencycreated'] = 'Kompetens skapad';
$string['competencycrossreferencedcompetencies'] = '{$a} korsrefererade kompetenser';
$string['competencyframework'] = 'Ramverk för kompetenser';
$string['competencyframeworkcreated'] = 'Ramverk för kompetenser skapad.';
$string['competencyframeworkname'] = 'Namn';
$string['competencyframeworkroot'] = 'Ingen nivå ovan (högsta nivån av kompetenser)';
$string['competencyframeworks'] = 'Ramverk för kompetenser';
$string['competencyframeworkupdated'] = 'Ramverk för kompetenser uppdaterad';
$string['competencyoutcome_complete'] = 'Markera som fullgjord';
$string['competencyoutcome_evidence'] = 'Bifoga en verifiering';
$string['competencyoutcome_none'] = 'Ingen';
$string['competencyoutcome_recommend'] = 'Rekommendera kompetensen';
$string['competencypicker'] = 'Väljare av kompetens';
$string['competencyrule'] = 'Regel för kompetens';
$string['competencyupdated'] = 'Kompetens uppdaterad';
$string['completeplan'] = 'Fullfölj denna studieplan';
$string['completeplanconfirm'] = 'Markera studieplan {$a}\' som genomförd? Om så är fallet kommer alla användares kompetenser registreras och studieplanen kommer endast att vara möjlig att läsas av.';
$string['configurecoursecompetencysettings'] = 'Konfigurera kurskompetenser';
$string['configurescale'] = 'Konfigurera skalor';
$string['coursecompetencies'] = 'Kurskompetenser';
$string['coursecompetencyratingsarenotpushedtouserplans'] = 'Bedömning av kompetenser i denna kurs kommer inte att påverka studieplaner.';
$string['coursecompetencyratingsarepushedtouserplans'] = 'Bedömning av kompetenser i denna kurs uppdateras omedelbart i studieplanerna.';
$string['coursecompetencyratingsquestion'] = 'När en kurskompetens är bedömd, kommer bedömningen uppdatera kompetensen i studieplanerna eller är gäller det endast kursen?';
$string['coursesusingthiscompetency'] = 'Kurser länkade till denna kompetens.';
$string['coveragesummary'] = '{$a->competenciescoveredcount} av {$a->competenciescount} kompetenser är täckta ( {$a->coveragepercentage} % )';
$string['createlearningplans'] = 'Skapa studieplaner';
$string['createplans'] = 'Skapa studieplaner';
$string['crossreferencedcompetencies'] = 'Korsrefererade kompetenser.';
$string['default'] = 'Standard';
$string['deletecompetency'] = 'Radera kompetens \'{$a}\'?';
$string['deletecompetencyframework'] = 'Radera ramverk för kompetenser \'{$a}\'?';
$string['deletecompetencyparenthasrule'] = 'Radera kompetens \'{$a}\'? Detta tar även bort regeln för ovanliggande nivå.';
$string['deleteplan'] = 'Ta bort studieplan \'{$a}\'?';
$string['deleteplans'] = 'Ta bort studieplanerna';
$string['deletetemplate'] = 'Ta bort mallen för studieplaner  \'{$a}\'?';
$string['deletetemplatewithplans'] = 'Denna mall har studieplaner kopplade till sig. Du måste ange hur dessa studieplaner ska hanteras.';
$string['deletethisplan'] = 'Radera denna studieplan';
$string['deletethisuserevidence'] = 'Radera denna verifiering';
$string['deleteuserevidence'] = 'Radera verifieringar för tidigare lärande \'{$a}\'?';
$string['description'] = 'Beskrivning';
$string['duedate'] = 'Sista datum';
$string['duedate_help'] = 'Datumet som en studieplan ska vara genomförd';
$string['editcompetency'] = 'Redigera kompetens';
$string['editcompetencyframework'] = 'Redigera ramverk för kompetenser';
$string['editplan'] = 'Redigera en studieplan';
$string['editrating'] = 'Redigera bedömning';
$string['edittemplate'] = 'Redigera mall för studieplan';
$string['editthisplan'] = 'Redigera denna studieplan';
$string['editthisuserevidence'] = 'Redigera denna verifiering';
$string['edituserevidence'] = 'Redigera verifiering';
$string['evidence'] = 'Verifiering';
$string['findcourses'] = 'Hitta kurser';
$string['hidden'] = 'Gömd';
$string['hiddenhint'] = '(gömd)';
$string['idnumber'] = 'ID-nummer';
$string['inheritfromframework'] = 'Ärv från ramverk för studieplan (standard)';
$string['itemstoadd'] = 'Punkter att tillägga';
$string['jumptocompetency'] = 'Hoppa till kompetens';
$string['jumptouser'] = 'Hoppa till användare';
$string['learningplancompetencies'] = 'Kompetenser i studieplaner';
$string['learningplans'] = 'Studieplaner';
$string['levela'] = 'Nivå {$a}';
$string['linkcompetencies'] = 'Länka kompetenser';
$string['linkcompetency'] = 'Länka kompetens';
$string['linkedcompetencies'] = 'Länkade kompetenser';
$string['linkedcourses'] = 'Länkade kurser';
$string['linkedcourseslist'] = 'Länkade kurser:';
$string['listcompetencyframeworkscaption'] = 'Lista med ramverk för kompetenser';
$string['listofevidence'] = 'Lista med verifieringar';
$string['listplanscaption'] = 'Lista med studieplaner';
$string['listtemplatescaption'] = 'Lista med mallar för studieplaner';
$string['loading'] = 'Laddar....';
$string['locatecompetency'] = 'Hitta kompetens';
$string['managecompetenciesandframeworks'] = 'Hantera kompetenser och ramverk';
$string['modcompetencies'] = 'Kurskompetenser';
$string['modcompetencies_help'] = 'Kurskompetenser länkade till denna aktivitet';
$string['move'] = 'Flytta';
$string['movecompetency'] = 'Flytta kompetens';
$string['movecompetencyafter'] = 'Flytta kompetens efter \'{$a}\'';
$string['movecompetencyframework'] = 'Flytta ramverk för kompetenser';
$string['movecompetencytochildofselfwillresetrules'] = 'Flyttande av kompetensen kommer ta bort dess egen regel och regler satta för ovanliggande nivå och målet för kompetensen. Vill du fortsätta?';
$string['movecompetencywillresetrules'] = 'Flyttande av kompetensen kommer ta bort regler satta för ovanliggande nivå och målet för kompetensen. Vill du fortsätta?';
$string['moveframeworkafter'] = 'Flytta ramverk för kompetens efter \'{$a}\'';
$string['movetonewparent'] = 'Omlokalisera';
$string['myplans'] = 'Mina studieplaner';
$string['nfiles'] = '{$a} fil(er)';
$string['noactivities'] = 'Inga aktiviteter';
$string['nocompetencies'] = 'Inga kompetenser har skapats för detta ramverk';
$string['nocompetenciesincourse'] = 'Inga kompetenser har länkats till denna kurs';
$string['nocompetenciesinevidence'] = 'Inga kompetenser har länkats till denna verifiering';
$string['nocompetenciesinlearningplan'] = 'Inga kompetenser har länkats till denna studieplan';
$string['nocompetenciesintemplate'] = 'Inga kompetenser har länkats till denna studieplansmall';
$string['nocompetencyframeworks'] = 'Inga kompetenser har skapats än';
$string['nocompetencyselected'] = 'Inga kompetenser valda';
$string['nocrossreferencedcompetencies'] = 'Inga andra kompetenser har korsrefererats till denna kompetens.';
$string['noevidence'] = 'Inga verifieringar';
$string['nofiles'] = 'Inga filer';
$string['nolinkedcourses'] = 'Inga kurser är länkade till denna kompetens';
$string['noparticipants'] = 'Inga deltagare funna.';
$string['noplanswerecreated'] = 'Inga studieplaner var skapade.';
$string['notemplates'] = 'Inga studieplansmallar har skapats än.';
$string['nourl'] = 'Ingen URL';
$string['nouserevidence'] = 'Inga verifieringar av tidigare lärande har lagts till än.';
$string['nouserplans'] = 'Inga studieplaner har skapats än.';
$string['oneplanwascreated'] = 'En studieplan skapades';
$string['outcome'] = 'Utfall';
$string['parentcompetency'] = 'Ovanliggande nivå';
$string['parentcompetency_edit'] = 'Redigera ovanliggande nivå';
$string['parentcompetency_help'] = 'Definiera den ovanliggande nivå där kompetensen kommer läggas till. Det kan antigen vara en annan kompetens i samma ramverk eller grunden till ett ramverk för kompetensers toppnivå.';
$string['path'] = 'Sökväg:';
$string['planapprove'] = 'Aktivera';
$string['plancompleted'] = 'Studieplan är genomförd';
$string['plancreated'] = 'Studieplan skapades';
$string['plandescription'] = 'Beskrivning';
$string['planname'] = 'Namn';
$string['plantemplate'] = 'Välj studieplansmall';
$string['plantemplate_help'] = 'En studieplan skapad från en mall kommer innehålla en lista med kompetenser som matchar denna mall. Uppdateringar av mallen kommer påverka alla studieplaner skapade utifrån denna mall.';
$string['planunapprove'] = 'Skicka tillbaka som utkast';
$string['planupdated'] = 'Studieplan uppdaterad';
$string['pluginname'] = 'Studieplaner';
$string['points'] = 'Poäng';
$string['pointsgivenfor'] = 'Poäng tilldelade för {$a}\'';
$string['proficient'] = 'Kunnig';
$string['progress'] = 'Utveckling';
$string['rate'] = 'Bedöm';
$string['ratecomment'] = 'Noteringar verifiering';
$string['rating'] = 'Bedömning';
$string['ratingaffectsonlycourse'] = 'Bedöm en kompetens uppdaterar bara kompetensen i denna kurs';
$string['ratingaffectsuserplans'] = 'Bedömning av en kompetens uppdaterar kompetensen i alla studieplaner';
$string['reopenplan'] = 'Återöppna denna studieplan';
$string['reopenplanconfirm'] = 'Återöppna studieplanen \'{$a}\'? Om så, statusen för användarens kompetenser som registrerades när studieplanen tidigare genomfördes kommer att raderas och studieplanen blir aktiv igen.';
$string['requestreview'] = 'Begär bedömning';
$string['reviewer'] = 'Bedömare';
$string['reviewstatus'] = 'Granska status';
$string['savechanges'] = 'Spara ändringar';
$string['scale'] = 'Skala';
$string['scale_help'] = 'En skala bestämmer hur kunnighet i en kompetens mäts. Efter val av skala måste den konfigureras.

* Punkten som anges som \'Standardvärde\' är bedömningen som ges om en kompetens har uppnåtts automatiskt.
* Punkt eller punkter som anges som "Kunnig" indikerar vilka värden som är giltiga för att uppnå tillräcklig kompetens.';
$string['scalevalue'] = 'Skalvärde';
$string['search'] = 'Sök...';
$string['selectcohortstosync'] = 'Välj kohorter att synka';
$string['selectcompetencymovetarget'] = 'Välj en plats att flytta kompetensen till:';
$string['selectedcompetency'] = 'Vald kompetens.';
$string['selectuserstocreateplansfor'] = 'Välj användare som studieplaner ska skapas för';
$string['sendallcompetenciestoreview'] = 'Skicka alla kompetenser uppe för bedömning till verifiering av tidigare kunskap \'{$a}\'';
$string['sendcompetenciestoreview'] = 'Skicka kompetenser för bedömning';
$string['shortname'] = 'Namn';
$string['sitedefault'] = '(Standardvärde för sajt)';
$string['startreview'] = 'Börja bedömning';
$string['state'] = 'Stadie';
$string['status'] = 'Status';
$string['stopreview'] = 'Avsluta bedömning';
$string['stopsyncingcohort'] = 'Avsluta synkning med kohort';
$string['taxonomies'] = 'Taxonomier';
$string['taxonomy_add_behaviour'] = 'Lägg till beteende';
$string['taxonomy_add_competency'] = 'Lägg till kompetens';
$string['taxonomy_add_concept'] = 'Lägg till koncept';
$string['taxonomy_add_domain'] = 'Lägg till domän';
$string['taxonomy_add_indicator'] = 'Lägg till indikator';
$string['taxonomy_add_level'] = 'Lägg till nivå';
$string['taxonomy_add_outcome'] = 'Lätt till utfall';
$string['taxonomy_add_practice'] = 'Lägg till övning';
$string['taxonomy_add_proficiency'] = 'Lägg till färdighet';
$string['taxonomy_add_skill'] = 'Lägg till förmåga';
$string['taxonomy_add_value'] = 'Lägg till värde';
$string['taxonomy_edit_behaviour'] = 'Lägg till beteende';
$string['taxonomy_edit_competency'] = 'Redigera kompetens';
$string['taxonomy_edit_concept'] = 'Redigera koncept';
$string['taxonomy_edit_domain'] = 'Redigera domän';
$string['taxonomy_edit_indicator'] = 'Rediger indikator';
$string['taxonomy_edit_level'] = 'Redigera nivå';
$string['taxonomy_edit_outcome'] = 'Redigera utfall';
$string['taxonomy_edit_practice'] = 'Redigera övning';
$string['taxonomy_edit_proficiency'] = 'Redigera färdighet';
$string['taxonomy_edit_skill'] = 'Redigera förmåga';
$string['taxonomy_edit_value'] = 'Redigera värde';
$string['taxonomy_parent_behaviour'] = 'Ovanliggande beteende';
$string['taxonomy_parent_competency'] = 'Ovanliggande kompetens';
$string['taxonomy_parent_concept'] = 'Ovanliggande koncept';
$string['taxonomy_parent_domain'] = 'Ovanliggande domän';
$string['taxonomy_parent_indicator'] = 'Ovanliggande indikator';
$string['taxonomy_parent_level'] = 'Ovanliggande nivå';
$string['taxonomy_parent_outcome'] = 'Ovanliggande utfall';
$string['taxonomy_parent_practice'] = 'Ovanliggande övning';
$string['taxonomy_parent_proficiency'] = 'Ovanliggande färdighet';
$string['taxonomy_parent_skill'] = 'Ovanliggande förmåga';
$string['taxonomy_parent_value'] = 'Ovanliggande värde';
$string['taxonomy_selected_behaviour'] = 'Välj beteende';
$string['taxonomy_selected_competency'] = 'Vald kompetens';
$string['taxonomy_selected_concept'] = 'Välj koncept';
$string['taxonomy_selected_domain'] = 'Välj domän';
$string['taxonomy_selected_indicator'] = 'Välj indikator';
$string['taxonomy_selected_level'] = 'Vald nivå';
$string['taxonomy_selected_outcome'] = 'Valt utfall';
$string['taxonomy_selected_practice'] = 'Vald övning';
$string['taxonomy_selected_proficiency'] = 'Vald förmåga';
$string['taxonomy_selected_skill'] = 'Vald färdighet';
$string['taxonomy_selected_value'] = 'Valt värde';
$string['template'] = 'Mall för studieplan';
$string['templatebased'] = 'Mallbaserad';
$string['templatecohortnotsyncedwhileduedateispassed'] = 'Kohorter kommer inte synkas om mallens sista datum har passerats';
$string['templatecohortnotsyncedwhilehidden'] = 'Kohorter kommer inte synkas om denna mall är gömd';
$string['templatecompetencies'] = 'Kompetenser för studieplansmallar';
$string['templatecreated'] = 'Studieplansmall  skapad';
$string['templatename'] = 'Namn';
$string['templates'] = 'Studieplansmallar';
$string['templateupdated'] = 'Studieplansmall uppdaterad';
$string['totalrequiredtocomplete'] = 'Alla krav för genomförande';
$string['unlinkcompetencycourse'] = 'Ta bort länkning av kompetens  \'{$a}\' i kursen?';
$string['unlinkcompetencyplan'] = 'Ta bort länkning av kompetens  \'{$a}\' i studieplanen?';
$string['unlinkcompetencytemplate'] = 'Ta bort länkning av kompetens  \'{$a}\' i mallen för studieplan?';
$string['unlinkplanstemplate'] = 'Avlänka studieplaner från deras mallar';
$string['unlinkplantemplate'] = 'Avlänka från studieplansmall';
$string['unlinkplantemplateconfirm'] = 'Avlänka studieplanen {$a}\' från dess mall? Alla ändringar i mallen kommer inte att föras över till studieplanen. Detta går ej att ångra.';
$string['uponcoursecompletion'] = 'Vid genomförande av kurs:';
$string['uponcoursemodulecompletion'] = 'Vid genomförande av aktivitet:';
$string['usercompetencyfrozen'] = 'Denna post är nu låst. Den visar statusen på användarens kompetens när dennes studieplan angavs som genomförd.';
$string['userevidence'] = 'Verifiering av tidigare lärande';
$string['userevidencecreated'] = 'Verifiering av tidigare lärande skapat';
$string['userevidencedescription'] = 'Beskrivning';
$string['userevidencefiles'] = 'Filer';
$string['userevidencename'] = 'Namn';
$string['userevidencesummary'] = 'Summering';
$string['userevidenceupdated'] = 'Verifiering av tidigare lärande uppdaterat';
$string['userevidenceurl'] = 'URL';
$string['userevidenceurl_help'] = 'URL måste börja med \'http://\' eller \'https://\'.';
$string['viewdetails'] = 'Visa detaljer';
$string['visible'] = 'Synlig';
$string['visible_help'] = 'Ett ramverk för kompetenser kan gömas medan den skapas eller uppdateras till en ny version.';
$string['when'] = 'När';
$string['xcompetencieslinkedoutofy'] = '{$a->x} av {$a->y} kompetenser länkade till kurser';
$string['xcompetenciesproficientoutofy'] = '{$a->x} av {$a->y} kompetenser är uppnådda';
$string['xcompetenciesproficientoutofyincourse'] = 'Du har uppnått  {$a->x} av {$a->y} kompetenser i denna kurs..';
$string['xplanscompletedoutofy'] = '$a->x} av {$a->y} studieplaner baserade på denna mall genomförda';
