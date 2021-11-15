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
 * Strings for component 'tool_lp', language 'sv', version '3.11'.
 *
 * @package     tool_lp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Åtgärder';
$string['activities'] = 'Aktiviteter';
$string['addcohorts'] = 'Lägg till kohorter';
$string['addcohortstosync'] = 'Lägg till kohorter att synka';
$string['addcompetency'] = 'Lägg till kompetens';
$string['addcoursecompetencies'] = 'Lägg till kompetenser till kursen';
$string['addcrossreferencedcompetency'] = 'Lägg till korsrefererad kompetens';
$string['addingcompetencywillresetparentrule'] = 'Lägg till en kompetens kommer att ta bort regeln gällande \'{$a}\'. Vill du fortsätta?';
$string['addnewcompetency'] = 'Ny kompetens';
$string['addnewcompetencyframework'] = 'Nytt kompetensramverk';
$string['addnewplan'] = 'Ny studieplan';
$string['addnewtemplate'] = 'Ny studieplansmall';
$string['addnewuserevidence'] = 'Lägg till nytt bevis';
$string['addtemplatecompetencies'] = 'Lägg till kompetenser till studieplansmallen';
$string['aisrequired'] = '\'{$a}\' krävs';
$string['aplanswerecreated'] = '{$a} studieplaner skapades.';
$string['aplanswerecreatedmoremayrequiresync'] = '{$a} studieplaner skapades; fler kommer skapas vid nästa synkronisering.';
$string['assigncohorts'] = 'Tilldela kohorter';
$string['averageproficiencyrate'] = 'Den genomsnittliga graden av färdighet för slutförda studieplaner baserade på denna mall är {$a}%.';
$string['cancelreviewrequest'] = 'Avbryt granskningsbegäran';
$string['cannotaddrules'] = 'Kompetensen kan inte konfigureras.';
$string['cannotcreateuserplanswhentemplateduedateispassed'] = 'Nya studieplaner kan inte skapas. Mallens förfallodatum har passerats eller kommer att passeras snart.';
$string['cannotcreateuserplanswhentemplatehidden'] = 'Nya studieplaner kan inte skapas när denna mall är dold.';
$string['category'] = 'Kategori';
$string['chooserating'] = 'Välj en bedömning...';
$string['cohortssyncedtotemplate'] = 'Kohorter synkade till denna studieplansmall';
$string['competenciesforframework'] = 'Kompetenser för {$a}';
$string['competenciesmostoftennotproficient'] = 'Kompetenser som oftast ej uppnåtts i slutförda studieplaner';
$string['competenciesmostoftennotproficientincourse'] = 'Kompetenser där kunskap oftast ej uppnåtts i denna kurs';
$string['competencycannotbedeleted'] = 'Kompetensen \'{$a}\' kan inte tas bort';
$string['competencycreated'] = 'Kompetens skapad';
$string['competencycrossreferencedcompetencies'] = '{$a} korsrefererade kompetenser';
$string['competencyframework'] = 'Kompetensramverk';
$string['competencyframeworkcreated'] = 'Kompetensramverk skapat.';
$string['competencyframeworkname'] = 'Namn';
$string['competencyframeworkroot'] = 'Ingen ovanliggande (toppnivå-kompetens)';
$string['competencyframeworks'] = 'Kompetensramverk';
$string['competencyframeworksrepository'] = 'Marknadsplats för kompetensramverk';
$string['competencyframeworkupdated'] = 'Kompetensramverk uppdaterat';
$string['competencyoutcome_complete'] = 'Markera som slutförd';
$string['competencyoutcome_evidence'] = 'Bifoga en verifiering';
$string['competencyoutcome_none'] = 'Ingen';
$string['competencyoutcome_recommend'] = 'Rekommendera kompetensen';
$string['competencypicker'] = 'Kompetensväljare';
$string['competencyrule'] = 'Kompetensregel';
$string['competencyupdated'] = 'Kompetens uppdaterad';
$string['completeplan'] = 'Slutför denna studieplan';
$string['completeplanconfirm'] = 'Markera studieplan <strong>{$a}</strong> som slutförd? Om så kommer alla användares kompetenser registreras och studieplanen kommer inte längre vara skrivbar utan endast läsbar.';
$string['configurecoursecompetencysettings'] = 'Konfigurera kurskompetenser';
$string['configurescale'] = 'Konfigurera betygsskalor';
$string['coursecompetencies'] = 'Kurskompetenser';
$string['coursecompetencyratingsarenotpushedtouserplans'] = 'Kompetensbedömningar i denna kurs påverkar inte studieplaner.';
$string['coursecompetencyratingsarepushedtouserplans'] = 'Kompetensbedömningar i denna kurs uppdateras omedelbart i studieplanerna.';
$string['coursecompetencyratingsquestion'] = 'När en kurskompetens är bedömd; kommer bedömningen uppdatera kompetensen i studieplanerna eller gäller det endast för kursen?';
$string['coursesusingthiscompetency'] = 'Kurser länkade till denna kompetens';
$string['coveragesummary'] = '{$a->competenciescoveredcount} av {$a->competenciescount} kompetenser täcks ( {$a->coveragepercentage}% )';
$string['createlearningplans'] = 'Skapa studieplaner';
$string['createplans'] = 'Skapa studieplaner';
$string['crossreferencedcompetencies'] = 'Korsrefererade kompetenser';
$string['default'] = 'Standard';
$string['deletecompetency'] = 'Ta bort kompetens \'{$a}\'?';
$string['deletecompetencyframework'] = 'Ta bort kompetensramverket \'{$a}\'?';
$string['deletecompetencyparenthasrule'] = 'Ta bort kompetensen \'{$a}\'? Detta tar även bort regelsamlingen för dess ovanliggande nivå.';
$string['deleteplan'] = 'Ta bort studieplan \'{$a}\'?';
$string['deleteplans'] = 'Ta bort studieplanerna';
$string['deletetemplate'] = 'Ta bort studieplansmallen \'{$a}\'?';
$string['deletetemplatewithplans'] = 'Denna mall har studieplaner kopplade till sig. Du måste ange hur dessa studieplaner ska hanteras.';
$string['deletethisplan'] = 'Ta bort denna studieplan';
$string['deletethisuserevidence'] = 'Ta bort denna verifiering';
$string['deleteuserevidence'] = 'Ta bort verifieringar för tidigare lärande \'{$a}\'?';
$string['description'] = 'Beskrivning';
$string['duedate'] = 'Förfallodatum';
$string['duedate_help'] = 'Datum då en studieplan ska vara slutförd.';
$string['editcompetency'] = 'Redigera kompetens';
$string['editcompetencyframework'] = 'Redigera kompetensramverk';
$string['editplan'] = 'Redigera studieplan';
$string['editrating'] = 'Redigera bedömning';
$string['edittemplate'] = 'Redigera studieplansmall';
$string['editthisplan'] = 'Redigera denna studieplan';
$string['editthisuserevidence'] = 'Redigera denna verifiering';
$string['edituserevidence'] = 'Redigera verifiering';
$string['evidence'] = 'Bevis';
$string['filterbyactivity'] = 'Filtrera kompetenser på resurs eller aktivitet';
$string['findcourses'] = 'Hitta kurser';
$string['frameworkcannotbedeleted'] = 'Kompetensramverket \'{$a}\' kan inte tas bort.';
$string['hidden'] = 'Dold';
$string['hiddenhint'] = '(dold)';
$string['idnumber'] = 'ID-nummer';
$string['inheritfromframework'] = 'Ärv från kompetensramverk (standard)';
$string['itemstoadd'] = 'Objekt att lägga till';
$string['jumptocompetency'] = 'Hoppa till kompetens';
$string['jumptouser'] = 'Hoppa till användare';
$string['learningplancompetencies'] = 'Studieplanskompetenser';
$string['learningplans'] = 'Studieplaner';
$string['levela'] = 'Nivå {$a}';
$string['linkcompetencies'] = 'Länka kompetenser';
$string['linkcompetency'] = 'Länka kompetens';
$string['linkedcompetencies'] = 'Länkade kompetenser';
$string['linkedcourses'] = 'Länkade kurser';
$string['linkedcourseslist'] = 'Länkade kurser:';
$string['listcompetencyframeworkscaption'] = 'Kompetensramverk';
$string['listofevidence'] = 'Verifieringar';
$string['listplanscaption'] = 'Studieplaner';
$string['listtemplatescaption'] = 'Studieplansmallar';
$string['loading'] = 'Laddar....';
$string['locatecompetency'] = 'Hitta kompetens';
$string['managecompetenciesandframeworks'] = 'Hantera kompetenser och ramverk';
$string['modcompetencies'] = 'Kurskompetenser';
$string['modcompetencies_help'] = 'Kurskompetenser länkade till denna aktivitet';
$string['move'] = 'Flytta';
$string['movecompetency'] = 'Flytta kompetens';
$string['movecompetencyafter'] = 'Flytta kompetens efter \'{$a}\'';
$string['movecompetencyframework'] = 'Flytta kompetensramverk';
$string['movecompetencytochildofselfwillresetrules'] = 'Flyttande av kompetensen kommer ta bort dess egen regel och regler satta för ovanliggande nivå och målet för kompetensen. Vill du fortsätta?';
$string['movecompetencywillresetrules'] = 'Flyttande av kompetensen kommer ta bort regler satta för ovanliggande nivå och målet för kompetensen. Vill du fortsätta?';
$string['moveframeworkafter'] = 'Flytta kompetensramverk efter \'{$a}\'';
$string['movetonewparent'] = 'Flytta';
$string['myplans'] = 'Mina studieplaner';
$string['nfiles'] = '{$a} fil(er)';
$string['noactivities'] = 'Inga aktiviteter';
$string['nocompetencies'] = 'Inga kompetenser har skapats för detta ramverk';
$string['nocompetenciesinactivity'] = 'Det finns inga kompetenser kopplade till denna aktivitet eller resurs.';
$string['nocompetenciesincourse'] = 'Inga kompetenser har länkats till denna kurs.';
$string['nocompetenciesinevidence'] = 'Inga kompetenser har länkats till denna verifiering';
$string['nocompetenciesinlearningplan'] = 'Inga kompetenser har länkats till denna studieplan';
$string['nocompetenciesinlist'] = 'Inga kompetenser valda.';
$string['nocompetenciesintemplate'] = 'Inga kompetenser har länkats till denna studieplansmall';
$string['nocompetencyframeworks'] = 'Inga kompetensramverk har skapats ännu.';
$string['nocompetencyselected'] = 'Inga kompetenser valda';
$string['nocrossreferencedcompetencies'] = 'Inga andra kompetenser har korsrefererats till denna kompetens.';
$string['noevidence'] = 'Inga bevis';
$string['nofiles'] = 'Inga filer';
$string['nolinkedcourses'] = 'Inga kurser är länkade till denna kompetens';
$string['noparticipants'] = 'Inga deltagare funna.';
$string['noplanswerecreated'] = 'Inga studieplaner skapades.';
$string['notemplates'] = 'Inga studieplansmallar har skapats ännu.';
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
$string['plancompleted'] = 'Studieplan slutförd';
$string['plancreated'] = 'Studieplan skapades';
$string['plandescription'] = 'Beskrivning';
$string['planname'] = 'Namn';
$string['plantemplate'] = 'Välj studieplansmall';
$string['plantemplate_help'] = 'En studieplan skapad från en mall kommer innehålla en lista med kompetenser som matchar denna mall. Uppdateringar av mallen kommer påverka alla studieplaner skapade utifrån denna mall.';
$string['planunapprove'] = 'Skicka tillbaka till utkast';
$string['planupdated'] = 'Studieplan uppdaterad';
$string['pluginname'] = 'Studieplaner';
$string['points'] = 'Poäng';
$string['pointsgivenfor'] = 'Poäng tilldelade för \'{$a}\'';
$string['privacy:metadata'] = 'Studieplans-pluginen lagrar ingen personinformation.';
$string['proficient'] = 'Kunnig';
$string['progress'] = 'Förlopp';
$string['rate'] = 'Bedöm';
$string['ratecomment'] = 'Verifieringskommentarer';
$string['rating'] = 'Bedömning';
$string['ratingaffectsonlycourse'] = 'Bedömning av en kompetens uppdaterar bara kompetensen i denna kurs';
$string['ratingaffectsuserplans'] = 'Bedömning av en kompetens uppdaterar kompetensen i alla studieplaner';
$string['reopenplan'] = 'Återöppna denna studieplan';
$string['reopenplanconfirm'] = 'Återöppna studieplanen \'{$a}\'? Om så kommer statusen för användarens kompetenser som registrerades när studieplanen tidigare genomfördes att tas bort och studieplanen bli aktiv igen.';
$string['requestreview'] = 'Begär granskning';
$string['reviewer'] = 'Granskare';
$string['reviewstatus'] = 'Granskningsstatus';
$string['savechanges'] = 'Spara';
$string['scale'] = 'Skala';
$string['scale_help'] = 'En skala bestämmer hur kunnighet i en kompetens mäts. Efter val av skala måste den konfigureras.

* Punkten som anges som \'Standardvärde\' är bedömningen som ges om en kompetens har uppnåtts automatiskt.
* Punkt eller punkter som anges som "Kunnig" indikerar vilka värden som är giltiga för att uppnå tillräcklig kompetens.';
$string['scalevalue'] = 'Skalvärde';
$string['search'] = 'Sök...';
$string['selectcohortstosync'] = 'Välj kohorter att synka';
$string['selectcompetencymovetarget'] = 'Välj en plats att flytta kompetensen till:';
$string['selectedcompetency'] = 'Vald kompetens';
$string['selectuserstocreateplansfor'] = 'Välj användare att skapa studieplaner för';
$string['sendallcompetenciestoreview'] = 'Skicka alla kompetenser uppe för granskning till verifiering av tidigare kunskap \'{$a}\'';
$string['sendcompetenciestoreview'] = 'Skicka kompetenser för granskning';
$string['shortname'] = 'Namn';
$string['sitedefault'] = '(Webbplatsstandard)';
$string['startreview'] = 'Påbörja granskning';
$string['state'] = 'Stadie';
$string['status'] = 'Status';
$string['stopreview'] = 'Avsluta granskning';
$string['stopsyncingcohort'] = 'Stoppa synkronisering av kohort';
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
$string['taxonomy_selected_behaviour'] = 'Valt beteende';
$string['taxonomy_selected_competency'] = 'Vald kompetens';
$string['taxonomy_selected_concept'] = 'Valt koncept';
$string['taxonomy_selected_domain'] = 'Vald domän';
$string['taxonomy_selected_indicator'] = 'Vald indikator';
$string['taxonomy_selected_level'] = 'Vald nivå';
$string['taxonomy_selected_outcome'] = 'Valt utfall';
$string['taxonomy_selected_practice'] = 'Vald övning';
$string['taxonomy_selected_proficiency'] = 'Vald förmåga';
$string['taxonomy_selected_skill'] = 'Vald färdighet';
$string['taxonomy_selected_value'] = 'Valt värde';
$string['template'] = 'Studieplansmall';
$string['templatebased'] = 'Mallbaserad';
$string['templatecohortnotsyncedwhileduedateispassed'] = 'Kohorter kommer inte synkas om mallens förfallodatum har passerats';
$string['templatecohortnotsyncedwhilehidden'] = 'Kohorter kommer inte synkas om denna mall är dold';
$string['templatecompetencies'] = 'Studieplansmalls-kompetenser';
$string['templatecreated'] = 'Studieplansmall skapad';
$string['templatename'] = 'Namn';
$string['templates'] = 'Studieplansmallar';
$string['templateupdated'] = 'Studieplansmall uppdaterad';
$string['totalrequiredtocomplete'] = 'Totalt för att slutföra';
$string['unlinkcompetencycourse'] = 'Ta bort länkning av kompetens \'{$a}\' från kursen?';
$string['unlinkcompetencyplan'] = 'Ta bort länkning av kompetens \'{$a}\' i studieplanen?';
$string['unlinkcompetencytemplate'] = 'Ta bort länkning till kompetens \'{$a}\' i studieplansmallen?';
$string['unlinkplanstemplate'] = 'Avlänka studieplaner från deras mallar';
$string['unlinkplantemplate'] = 'Avlänka från studieplansmall';
$string['unlinkplantemplateconfirm'] = 'Avlänka studieplanen {$a}\' från dess mall? Ändringar i mallen kommer inte längre appliceras på studieplanen. Detta går ej att ångra.';
$string['uponcoursecompletion'] = 'Vid slutförande av kurs:';
$string['uponcoursemodulecompletion'] = 'Vid slutförande av aktivitet:';
$string['usercompetencyfrozen'] = 'Denna post är nu låst. Den visar statusen på användarens kompetens när dennes studieplan markerades som slutförd.';
$string['userevidence'] = 'Verifiering av tidigare lärande';
$string['userevidencecreated'] = 'Verifiering av tidigare lärande skapat';
$string['userevidencedescription'] = 'Beskrivning';
$string['userevidencefiles'] = 'Filer';
$string['userevidencename'] = 'Namn';
$string['userevidencesummary'] = 'Sammanfattning';
$string['userevidenceupdated'] = 'Verifiering av tidigare lärande uppdaterat';
$string['userevidenceurl'] = 'URL';
$string['userevidenceurl_help'] = 'URL måste börja med \'http://\' eller \'https://\'.';
$string['viewdetails'] = 'Visa detaljer';
$string['visible'] = 'Synlig';
$string['visible_help'] = 'Ett kompetensramverk eller studieplansmall kan döljas medan det skapas eller uppdateras till en ny version.';
$string['when'] = 'När';
$string['xcompetencieslinkedoutofy'] = '{$a->x} av {$a->y} kompetenser länkade till kurser';
$string['xcompetenciesproficientoutofy'] = '{$a->x} av {$a->y} kompetenser är uppnådda';
$string['xcompetenciesproficientoutofyincourse'] = 'Du har uppnått {$a->x} av {$a->y} kompetenser i denna kurs.';
$string['xplanscompletedoutofy'] = '{$a->x} av {$a->y} studieplaner baserade på denna mall slutförda';
