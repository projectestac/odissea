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
 * Strings for component 'grades', language 'nl', branch 'MOODLE_31_STABLE'
 *
 * @package   grades
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = 'Activiteiten';
$string['addcategory'] = 'Voeg categorie toe';
$string['addcategoryerror'] = 'Kon geen categorie toevoegen';
$string['addexceptionerror'] = 'Fout opgetreden bij het toevoegen van een uitzondering voor userid:gradeitem';
$string['addfeedback'] = 'Feedback toevoegen';
$string['addgradeletter'] = 'Voeg een beoordelingsletter toe';
$string['addidnumbers'] = 'Voeg id-nummers toe';
$string['additem'] = 'Beoordelingsitem toevoegen';
$string['addoutcome'] = 'Voeg competentie toe';
$string['addoutcomeitem'] = 'Voeg competentie-item toe';
$string['addscale'] = 'Voeg schaal toe';
$string['adjustedweight'] = 'Aangepaste weging';
$string['aggregateextracreditmean'] = 'Gemiddelde van cijfers (met bonuspunten)';
$string['aggregatemax'] = 'Hoogste cijfer';
$string['aggregatemean'] = 'Gemiddelde';
$string['aggregatemedian'] = 'Mediaan';
$string['aggregatemin'] = 'Laagste cijfer';
$string['aggregatemode'] = 'Modus';
$string['aggregatenotonlygraded'] = 'Lege cijfers mee opnemen';
$string['aggregateonlygraded'] = 'Lege cijfers uitsluiten';
$string['aggregateonlygraded_help'] = '<p>Nietbestaande cijfers kunnen beschouwd worden als minimumcijfers of als niet begrepen in de aggregatie.</p>';
$string['aggregateoutcomes'] = 'Resultaten in aggregatie opnemen';
$string['aggregateoutcomes_help'] = '<p>Het opnemen van resultaten in aggregatie kan een vreemd totaalcijfer geven. Daarom heb je hier de optie om de competenties op te nemen of niet op te nemen.</p>';
$string['aggregatesonly'] = 'Wijzig naar enkel geaggregeerden';
$string['aggregatesubcatsupgradedgrades'] = 'Opmerking: de aggregatie-instelling "Aggregatie inclusief subcategorieën" is verwijderd als deel van de site-upgrade. Vermits "Aggregatie inclusief subcategorieën" voorheen gebruikt werd in deze cursus, is het aangewezen om deze wijziging eens na te kijken in de cijferlijst.';
$string['aggregatesum'] = 'Natuurlijk';
$string['aggregateweightedmean'] = 'Gewogen gemiddelde';
$string['aggregateweightedmean2'] = 'Eenvoudig gewogen cijfergemiddelde';
$string['aggregation'] = 'Aggregatie';
$string['aggregationcoef'] = 'Aggregatiecoëfficiënt';
$string['aggregationcoefextra'] = 'Bonus';
$string['aggregationcoefextra_help'] = 'Wanneer de aggregatiestrategie "Natuurlijk" of "Eenvoudig gewogen gemiddelde" en het bonus vinkje is aangevinkt, dan wordt het maximumcijfer niet toegevoegd bij het maximale cijfer van de categorie. Dit heeft als resultaat de mogelijkheid om het om het maximale cijfer te behalen in de categorie zonder het maximale cijfer te behalen in alle beoordelingsitems.

Wanneer als aggregatiestrategie "Het gemiddelde van cijfers (met bonuspunten)" is gekozen en het bonuspunt is ingesteld met een waarde groter dan nul, dan is het bonuspunt de factor waarmee het cijfer wordt vermenigvuldigd voor het aan het het totaal wordt toegevoegd na de berekening van het gemiddelde.';
$string['aggregationcoefextrasum'] = 'Bonus';
$string['aggregationcoefextrasumabbr'] = '+';
$string['aggregationcoefextrasum_help'] = '<p>Wanneer de "som van cijfers" aggregatiestrategie wordt gebruikt, dan kan een beoordelingsitem ingesteld worden als bonusitem voor de categorie. Dit betekent dat het maximumcijfer voor dit item niet toegevoegd zal worden aan het maximumcijfer van de categorie, maar het cijfer van het beoordelingsitem zal wel meegerekend worden. Voorbeeld:</p>

<ul>
    <li>Item 1 wordt beoordeeld tussen 0-100</li>
    <li>Item 2 wordt beoordeeld tussen 0-75</li>
    <li>Item 1 heeft een vinkje bij "bonus", item 2 niet.</li>
    <li>Beide items horen bij categorie 1, die "Som van cijfers" als aggregatiestrategie heeft</li>
    <li>Het totaal van categorie 1 zal tussen 0-75 liggen</li>
    <li>Een leerling krijgt als beoordelingen 20 voor item 1 en 70 voor item 2</li>
    <li>Het totaal van de leerling voor categorie 1 zal 75/75 zijn (20+70 = 90, maar item 1 geldt als bonus en brengt zo het totaal tot het maximumcijfer voor de categorie)</li>
</ul>';
$string['aggregationcoefextraweight'] = 'Bonus weging';
$string['aggregationcoefextraweight_help'] = '<p>Een waarde hoger dan 0 zorgt ervoor dat dit beoordelingsitem als bonus behandeld wordt tijdens aggregatie. Het getal is een factor waarmee dit cijfer wordt vermenigvuldigd voor het opgeteld wordt bij alle andere cijfers, maar het item zelf zal niet inbegrepen worden in de deling. Bijvoorbeeld:</p>

<ul>
    <li>Item 1 wordt beoordeeld tussen 0-100 en de  "Bonus"-waarde staat op 2</li>
    <li>Item 2 wordt beoordeeld tussen 0-100 en de "Bonus"-waarde staat nog op 0.0000</li>
    <li>Item 3 wordt beoordeeld tussen 0-100 en de "Bonus"-waarde staat nog op 0.0000</li>
    <li>De 3 items staan in categorie 1, die als aggregatiestrategie "Gemiddelde van cijfers (met bonus) heeft</li>
    <li>Een leerling krijgt als beoordelingen 20 op Item 1, 40 op Item 2 en 70 op Item 3</li>
    <li>Het totaal voor categorie 1 voor deze leerling zal zijn: 75/100 (20*2 + 40 + 70) / 2</li>
</ul>';
$string['aggregationcoefweight'] = 'Weging beoordelingsitem';
$string['aggregationcoefweight_help'] = '<p>Weging toegepast op alle cijfers in dit beoordelingsitem wanneer dit geaggregeerd wordt met andere beoordelingsitems.</p>';
$string['aggregation_help'] = 'De aggregatie bepaalt hoe cijfers in een categorie gecombineerd worden, zoals

* Gemiddelde van cijfers - de som van alle punten wordt gedeeld door het totaal aantal punten
* Mediaan van cijfers - het middelste cijfer wanneer alle cijfers in volgorde van grootte worden gezet
* Laagste cijfer
* Hoogste cijfer
* Modus van cijfers - het cijfer dat het meest voorkomt
* Natuurlijk - de som van alle cijferwaardes geschaald door weging';
$string['aggregationhintdropped'] = '(Weggevallen)';
$string['aggregationhintexcluded'] = '(Uitgesloten)';
$string['aggregationhintextra'] = '(Bonus)';
$string['aggregationhintnovalue'] = '(Leeg)';
$string['aggregationofa'] = 'Aggregatie van {$a}';
$string['aggregationposition'] = 'Aggregatiepositie';
$string['aggregationposition_help'] = '<p>Definieert de positie van de totalenkolom van de aggregatie in het rapport tenopzichte van de cijfers die geaggregeerd worden.</p>';
$string['aggregationsvisible'] = 'Beschikbare aggregatietypes';
$string['aggregationsvisiblehelp'] = 'Selecteer alle aggregatietypes die beschikbaar moeten zijn. Houd de Ctrl-toets ingedrukt om meerdere items te selecteren';
$string['allgrades'] = 'Alle cijfers per categorie';
$string['allstudents'] = 'Alle leerlingen';
$string['allusers'] = 'Alle gebruikers';
$string['autosort'] = 'Auto-sorteer';
$string['availableidnumbers'] = 'Beschikbare id-nummers';
$string['average'] = 'Gemiddelde';
$string['averagesdecimalpoints'] = 'Decimalen in kolom gemiddelden';
$string['averagesdecimalpoints_help'] = '<p>Specifieert het aantal te tonen decimalen voor elk kolomgemiddelde. Als overerven is geselecteerd, dan wordt deze opmaak voor elke kolom gebruikt.</p>';
$string['averagesdisplaytype'] = 'Opmaak kolom gemiddelden';
$string['averagesdisplaytype_help'] = '<p>Specifieert hoe het gemiddelde voor elke kolom getoond wordt. Als overerven is ingeschakeld dan wordt deze opmaak voor elke kolom gebruikt.</p>';
$string['backupwithoutgradebook'] = 'De configuratie van de cijferlijst is niet opgenomen in de back-up.';
$string['badgrade'] = 'Beoordeling ongeldig';
$string['badlyformattedscale'] = 'Geef een komma-gescheiden lijst met waarden (minstens twee waarden vereist)';
$string['baduser'] = 'Gebruiker ongeldig';
$string['bonuspoints'] = 'Bonuspunten';
$string['bulkcheckboxes'] = 'Selectievakjes voor bulkoperaties';
$string['calculatedgrade'] = 'Berekend cijfer';
$string['calculation'] = 'Berekening';
$string['calculationadd'] = 'Berekening toevoegen';
$string['calculationedit'] = 'Berekening bewerken';
$string['calculation_help'] = 'Een cijferberekening is een formule die gebruikt wordt om cijfers te bepalen. De formule moet beginnen met een gelijkheidsteken (=) en mag algemene wiskundige operators bevatten, zoals min, max, sum. Indien gewenst kunnen andere cijferelementen in de berekening betrokken worden door hun ID-nummer tussen dubbele vierkante haken op te nemen.';
$string['calculationsaved'] = 'Berekening bewaard';
$string['calculationview'] = 'Bekijk berekening';
$string['cannotaccessgroup'] = 'Geen toegang tot de cijfers van de geselecteerde groep.';
$string['categories'] = 'Categorieën';
$string['categoriesanditems'] = 'Categorieën en items';
$string['category'] = 'Categorie';
$string['categoryedit'] = 'Bewerk categorie';
$string['categoryname'] = 'Categorienaam';
$string['categorytotal'] = 'Categorietotaal';
$string['categorytotalfull'] = '{$a->category} totaal';
$string['categorytotalname'] = 'Naam categorietotaal';
$string['changedefaults'] = 'Wijzig standaardinstellingen';
$string['changereportdefaults'] = 'Wijzig standaardinstellingen rapport';
$string['chooseaction'] = 'Kies een actie ...';
$string['choosecategory'] = 'Kies categorie';
$string['combo'] = 'Tabbladen en rolmenu';
$string['compact'] = 'Compact';
$string['componentcontrolsvisibility'] = 'Of dit cijfer al dan niet verborgen is, wordt gecontroleerd door de activiteitsinstellingen.';
$string['contract'] = 'Contractcategorie';
$string['contributiontocoursetotal'] = 'Aandeel in cursustotaal';
$string['controls'] = 'Beheer';
$string['courseavg'] = 'Cursusgemiddelde';
$string['coursegradecategory'] = 'Cursus beoordelingscategorie';
$string['coursegradedisplaytype'] = 'Opmaak beoordelingen voor de cursus';
$string['coursegradedisplayupdated'] = 'De opmaak van beoordelingen voor deze cursus is gewijzigd.';
$string['coursegradesettings'] = 'Instellingen cursuscijfer';
$string['coursename'] = 'Cursusnaam';
$string['coursescales'] = 'Cursusschalen';
$string['coursesettings'] = 'Cursusinstellingen';
$string['coursesettingsexplanation'] = 'Cursusinstellingen bepalen hoe de cijferlijst er zal uitzien voor alle deelnemers van de cursus';
$string['coursesiamtaking'] = 'Cursussen die ik volg';
$string['coursesiamteaching'] = 'Cursussen waarin ik les geef';
$string['coursetotal'] = 'Cursustotaal';
$string['createcategory'] = 'Maak categorie';
$string['createcategoryerror'] = 'Kon geen nieuwe categorie maken';
$string['creatinggradebooksettings'] = 'Instellingen cijferlijst maken';
$string['csv'] = 'CSV';
$string['currentparentaggregation'] = 'Huidige bovenliggende aggregatie';
$string['curveto'] = 'Afbuigen naar';
$string['decimalpoints'] = 'Aantal decimalen';
$string['decimalpoints_help'] = '<p>Stelt het aantal te tonen decimalen in voor elk cijfer. Deze instelling heeft geen effect op de berekeningen met cijfers. Die worden gemaakt met een nauwkeurigheid van 5 decimalen.</p>';
$string['default'] = 'Standaard';
$string['defaultprev'] = 'Standaard ({$a})';
$string['deletecategory'] = 'Verwijder categorie';
$string['disablegradehistory'] = 'Geschiedenis van cijfertabellen uitschakelen';
$string['disablegradehistory_help'] = 'Geschiedenis van wijzigingen in cijfertabellen uitschakelen. Dit kan de server een klein beetje minder belasten en zal wat plaats in de databank besparen.';
$string['displaylettergrade'] = 'Toon een beoordeling met letters';
$string['displaypercent'] = 'Toon procent';
$string['displaypoints'] = 'Toon punten';
$string['displayweighted'] = 'Toon een gewogen cijfer';
$string['dropdown'] = 'Rolmenu';
$string['droplow'] = 'Laagste weglaten';
$string['droplowestvalue'] = 'Laat laagste cijferwaarde vallen';
$string['droplowestvalues'] = 'Laat de {$a} laagste waarden vallen';
$string['droplow_help'] = '<p>Indien ingesteld zal deze optie de X laagste cijfers negeren, waarbij X de ingestelde waarde voor deze optie is.</p>';
$string['dropped'] = 'Weggelaten';
$string['dropxlowest'] = 'Laat de X laagste weg';
$string['dropxlowestwarning'] = 'Opmerking: als je \'Laat de X laagste weg\' gebruikt, dan gaat het cijferlijst er van uit dat alle items in de categorie dezelfde puntenwaarde hebben. Als de puntenwaarden verschillen, dan zullen de resultaten onvoorspelbaar zijn.';
$string['duplicatescale'] = 'Kopieer schaal';
$string['edit'] = 'Bewerk';
$string['editcalculation'] = 'Bewerk berekening';
$string['editcalculationverbose'] = 'Bewerk berekening voor {$a->category} {$a->itemmodule} {$a->itemname}';
$string['editfeedback'] = 'Bewerk feedback';
$string['editgrade'] = 'Bewerk beoordeling';
$string['editgradeletters'] = 'Bewerk beoordelingsletters';
$string['editoutcome'] = 'Bewerk competentie';
$string['editoutcomes'] = 'Bewerk resultaten';
$string['editscale'] = 'Bewerk schaal';
$string['edittree'] = 'Instellingen';
$string['editverbose'] = 'Bewerk {$a->category} {$a->itemmodule} {$a->itemname}';
$string['enableajax'] = 'AJAX inschakelen';
$string['enableajax_help'] = 'Voegt een laagje AJAX functionaliteit toe aan het rapport, wat het bewerken ervan vereenvoudigd en versneld. Dit werkt alleen als Javascript is ingeschakeld in de browser van de gebruiker.';
$string['enableoutcomes'] = 'Resultaten inschakelen';
$string['enableoutcomes_help'] = 'Indien ingeschakeld kunnen beoordelingsitems beoordeeld worden door één of meerdere schalen te gebruiken die aan competenties gelinkt zijn.';
$string['encoding'] = 'Codering';
$string['encoding_help'] = 'Selecteer de teken-encodering voor de gegevens. (De standaard-encodering is UTF-8. Als de verkeerde encodering geselecteerd wordt, dan kun je dat zien wanneer je de gegevens bekijkt tijdens het importeren.';
$string['errorcalculationbroken'] = 'Waarschijnlijk een kringloopreferentie of een foute berekeningsformule';
$string['errorcalculationnoequal'] = 'Formule moet beginnen met een gelijkheidsteken (=1+2)';
$string['errorcalculationunknown'] = 'Formule is niet geldig';
$string['errorgradevaluenonnumeric'] = 'Niet-numerieke waarde ontvangen voor laagste en hoogste cijfer voor';
$string['errornocalculationallowed'] = 'Berekeningen zijn voor dit item niet toegelaten';
$string['errornocategorisedid'] = 'Kon geen id zonder categorie vinden';
$string['errornocourse'] = 'Kon geen informatie over de cursus vinden';
$string['errorreprintheadersnonnumeric'] = 'Niet-numerieke waarde ontvangen voor koppen herhalen';
$string['errorsavegrade'] = 'Kon cijfer niet bewaren.';
$string['errorsettinggrade'] = 'Fout bij het bewaren van het cijfer voor "{$a->itemname}" voor gebruikersid {$a->userid}';
$string['errorupdatinggradecategoryaggregateonlygraded'] = 'Fout bij het updaten van de "Aggregeer alleen beoordeelde items"-instelling van cijfercategorie ID {$a->id}';
$string['errorupdatinggradecategoryaggregateoutcomes'] = 'Fout bij het updaten van de "Aggregeer resultaten"-instelling van de cijfercategorie ID {$a->id}';
$string['errorupdatinggradecategoryaggregation'] = 'Fout bij het aanpassen van het aggregatietype van cijfercategorie ID {$a->id}';
$string['errorupdatinggradeitemaggregationcoef'] = 'Fout bij het updaten van de aggregatiecoëfficiënt (weging of bonus) van beoordelingsitem ID {$a->id}';
$string['eventgradedeleted'] = 'Cijfer verwijderd';
$string['eventgradeviewed'] = 'Cijfers werden bekeken in de cijferlijst';
$string['eventusergraded'] = 'Gebruikerscijfer';
$string['excluded'] = 'Uitgesloten';
$string['excluded_help'] = '<p>Als -uitgesloten- is ingesloten, dan zal dit cijfer niet gebruikt worden in aggregaties door bovenliggende beoordelingsitems of categorieën.</p>';
$string['expand'] = 'Categorie uitbreiden';
$string['export'] = 'Exporteer';
$string['exportalloutcomes'] = 'Exporteer alle restultaten';
$string['exportfeedback'] = 'Feedback opnemen in export';
$string['exportformatoptions'] = 'Opties exportformaat';
$string['exportonlyactive'] = 'Geschorste gebruikers uitsluiten';
$string['exportonlyactive_help'] = 'Enkel leerlingen in de export zetten van wie de aanmelding actief en niet geschorst is';
$string['exportplugins'] = 'Exporteerplugins';
$string['exportsettings'] = 'Exporteer instellingen';
$string['exportto'] = 'Exporteer naar';
$string['externalurl'] = 'Externe URL';
$string['externalurl_desc'] = 'Als je een extern cijferboek gebruikt, kun je hier de URL opgeven.';
$string['extracreditvalue'] = 'Extra bonus voor {$a}';
$string['extracreditwarning'] = 'Opmerking: als je alle items van een categorie als \'Extra krediet\' instelt, haal je ze uit de berekening van de cijfers omdat er geen puntentotaal meer is';
$string['feedback'] = 'Feedback';
$string['feedbackadd'] = 'Voeg feedback toe';
$string['feedbackedit'] = 'Bewerk feedback';
$string['feedbackforgradeitems'] = 'Feedback voor {$a}';
$string['feedback_help'] = '<p>Notities die de leraar kan maken om bij de beoordelingen te voegen. Dit kan uitgebreide, gepersonaliseerde feedback zijn of een eenvoudige code die verwijst naar een intern systeem of feedback.</p>';
$string['feedbacks'] = 'Feedback';
$string['feedbacksaved'] = 'Feedback bewaard';
$string['feedbackview'] = 'Bekijk feedback';
$string['finalgrade'] = 'Totaal beoordeling';
$string['finalgrade_help'] = '<p>Het uiteindelijke cijfer (gecached) nadat alle berekeningen uitgevoerd zijn.</p>';
$string['fixedstudents'] = 'Geblokkeerde namenkolom';
$string['fixedstudents_help'] = 'Blokkeert de kolom met namen, zodat de cijfers horizontaal kunnen scrollen.';
$string['forceimport'] = 'Verplicht import';
$string['forceimport_help'] = 'Verplicht importeren van cijfers, zelfs als de cijfers aangepast waren nadat het importbestand was geëxporteerd';
$string['forceoff'] = 'Verplicht: uit';
$string['forceon'] = 'Verplicht: aan';
$string['forelementtypes'] = 'Voor de gekozen {$a}';
$string['forstudents'] = 'Voor leerlingen';
$string['full'] = 'Volledig';
$string['fullmode'] = 'Wijzig naar volledig overzicht';
$string['generalsettings'] = 'Algemene instellingen';
$string['grade'] = 'Beoordeling';
$string['gradeadministration'] = 'Cijferbeheer';
$string['gradealreadyupdated'] = '{$a} cijfers zijn niet geïmporteerd omdat de cijfers in het importbestand ouder zijn dan in het beoordelingsrapport. Gebruik de optie "Verplicht import" om toch verder te gaan met het importeren van cijfers.';
$string['gradeanalysis'] = 'Cijferanalyse';
$string['gradebook'] = 'Cijferlijst';
$string['gradebookcalculationsfixbutton'] = 'Cijferwijzigingen aanvaarden en berekeningsfouten herstellen';
$string['gradebookcalculationsuptodate'] = 'De berekeningen in het cijferboek zijn up-to-date. Vernieuw de pagina om de wijzigingen te zien.';
$string['gradebookcalculationswarning'] = 'Opmerking: er zijn fouten ontdekt in de berekeningen van de cijfers die in het cijferboek getoond worden. Aangeraden wordt om de fouten te herstellen door op onderstaande knop de drukken, maar dat zal er toe leiden dat sommige cijfers wijzigen.  Als je cursus al beëindigd is en je cijfers zijn al ingestuurd, dan wil je dit misschien niet doen.

De nieuwe versie is  {$a->currentversion}; Jij gebruikt cijferboekversie {$a->gradebookversion}. Je kunt de wijzigingen zien op <a href="{$a->url}">Gradebook calculation changes</a>.';
$string['gradebookhiddenerror'] = 'Het cijferlijst is nu ingesteld om alles voor de leerlingen te verbergen.';
$string['gradebookhistories'] = 'Cijfergeschiedenis';
$string['gradebooksetup'] = 'Cijferboek instellen';
$string['gradeboundary'] = 'Marge cijferbeoordeling';
$string['gradeboundary_help'] = 'Deze instelling bepaalt het minimale percentage waarboven cijfers de letter zullen toegewezen krijgen.';
$string['gradecategories'] = 'Beoordelingscategorieën';
$string['gradecategory'] = 'Beoordelingscategorie';
$string['gradecategoryonmodform'] = 'Beoordelingscategorie';
$string['gradecategoryonmodform_help'] = 'Deze instelling controleert de categorie waarin deze cijfers gezet worden in de cijferlijst.';
$string['gradecategorysettings'] = 'Beoordelingscategorieën';
$string['gradedisplay'] = 'Beoordelingen tonen';
$string['gradedisplaytype'] = 'Hoe beoordelingen tonen';
$string['gradedisplaytype_help'] = 'Deze instelling bepaalt hoe cijfers getoond worden in beoordeler- en gebruikersrapporten.

* Echt - De echte cijfers
* Percentage
* Letter - Er worden letters of woorden gebruikt om een bereik van cijfers voor te stellen';
$string['gradedon'] = 'Beoordeeld op {$a}';
$string['gradeexport'] = 'Export beoordeling';
$string['gradeexportcolumntype'] = '{$a->name} ({$a->extra})';
$string['gradeexportcustomprofilefields'] = 'Cijferexport aangepaste profielvelden';
$string['gradeexportcustomprofilefields_desc'] = 'Geef deze aangepaste profielvelden mee in de cijferexport, gescheiden door komma\'s';
$string['gradeexportdecimalpoints'] = 'Cijfers exporteren: decimalen';
$string['gradeexportdecimalpoints_desc'] = 'Het aantal te tonen decimalen voor export. Deze instelling kan genegeerd worden tijdens de export.';
$string['gradeexportdisplaytype'] = 'Cijfers exporteren: hoe beoordelingen tonen';
$string['gradeexportdisplaytype_desc'] = 'Beoordelingen kunnen tijdens de export getoond worden als cijfers, als percentages (zich verhoudend tot het minimum- en het maximumcijfer) of als letters (A,B,C, enz). Dit kan genegeerd worden tijdens de export.';
$string['gradeexportdisplaytypes'] = 'Cijfer export schermtypes';
$string['gradeexportuserprofilefields'] = 'Cijferexport gebruikersprofielvelden';
$string['gradeexportuserprofilefields_desc'] = 'Geef deze profielvelden mee in de cijferexport, gescheiken door komma\'s';
$string['gradeforstudent'] = '{$a->student}<br />{$a->item}{$a->feedback}';
$string['gradegrademinmax'] = 'initiële min- en max-cijfers';
$string['gradehelp'] = 'Hulp bij cijfers';
$string['gradehistorylifetime'] = 'Levensduur van de cijfergeschiedenis';
$string['gradehistorylifetime_help'] = 'Met deze instelling bepaal je hoelang je de geschiedenis van de wijzigingen aan de cijfertabellen wil bijhouden. Het is aangewezen dit zo lang mogelijk te doen. Als je performantieproblemen ondervindt of je hebt maar beperkte databaseruimte, dan kun je hier een lagere waarde instellen.';
$string['gradeimport'] = 'Import beoordeling';
$string['gradeimportfailed'] = 'Importeren cijfer mislukt tijdens het insturen. Details:';
$string['gradeitem'] = 'Beoordelingsitem';
$string['gradeitemaddusers'] = 'Niet meerekenen';
$string['gradeitemadvanced'] = 'Geavanceerde opties';
$string['gradeitemadvanced_help'] = 'Kies alle elementen die als geavanceerd getoond moeten worden wanneer cijfers bewerkt worden.';
$string['gradeitemislocked'] = 'Deze activiteit is in de cijferlijst geblokkeerd. Als je de cijfers wijzigt, dan zullen de cijfers, intern door deze activiteit bijgehouden, verschillen van de cijfers in de cijferlijst. Dat zal ongewijzigd blijven. Ben je zeker dat je wil verdergaan met het wijzigen van de cijfers?';
$string['gradeitemlocked'] = 'Beoordeling geblokkeerd';
$string['gradeitemmembersselected'] = 'Niet meegerekend';
$string['gradeitemminmax'] = 'Min- en max-cijfers zoals ingesteld in beoordelingsiteminstellingen';
$string['gradeitemnonmembers'] = 'Meegerekend';
$string['gradeitemremovemembers'] = 'Meerekenen';
$string['gradeitems'] = 'Beoordelingsitems';
$string['gradeitemsettings'] = 'Instellingen beoordelingsitems';
$string['gradeitemsinc'] = 'Te gebruiken beoordelingsitems';
$string['gradeletter'] = 'Letterbeoordeling';
$string['gradeletter_help'] = '<p>Een letter of ander symbool dat gebruikt wordt om een cijfermarge voor te stellen.</p>';
$string['gradeletternote'] = 'Om een letterbeoordeling te verwijderen, maak je<br /> gewoon één van de drie tekstzones voor die letter leeg en klik je op bewaren.';
$string['gradeletteroverridden'] = 'De standaard beoordelingsletters worden overschreven.';
$string['gradeletters'] = 'Letterbeoordelingen';
$string['gradelocked'] = 'Cijfer is geblokkeerd';
$string['gradelong'] = '{$a->grade} / {$a->max}';
$string['grademax'] = 'Maximumcijfer';
$string['grademax_help'] = 'Deze instelling bepaalt het maximumcijfer wanneer je een waarde als cijfer gebruikt. De maximumwaarde voor een activiteitsgebaseerd cijfer wordt ingesteld op de instellingspagina van de activiteit.';
$string['grademin'] = 'Minimale beoordeling';
$string['grademin_help'] = 'Deze instelling bepaalt het minimumcijfer wanneer je met cijfers beoordeelt.';
$string['gradeoutcomeitem'] = 'Item voor beoordeling competentie';
$string['gradeoutcomes'] = 'Resultaten';
$string['gradeoutcomescourses'] = 'Cursusresultaten';
$string['gradepass'] = 'Cijfer om te slagen';
$string['gradepassgreaterthangrade'] = 'Het slaagcijfer kan niet hoger zijn dan het maximaal mogelijke cijfer {$a}';
$string['gradepass_help'] = 'Deze instelling bepaalt het minimumcijfer dat vereist is om te slagen. De waarde wordt gebruikt in activiteits- en cursusvoltooiing en in de cijferlijst, waar geslaagde cijfers in groen en niet geslaagd in rood wordt weergegeven.';
$string['gradepointdefault'] = 'Standaardcijfer';
$string['gradepointdefault_help'] = 'Deze instelling bepaalt de standaardwaarde voor het cijfer in dit beoordelingsitem.';
$string['gradepointdefault_validateerror'] = 'Deze instelling moet een geheel getal zijn tussen 1 en het maximumcijfer.';
$string['gradepointmax'] = 'Maximumcijfer';
$string['gradepointmax_help'] = 'Deze instelling bepaalt het maximumcijfer dat kan gegeven worden in een activiteit.';
$string['gradepointmax_validateerror'] = 'Deze instelling moet een geheel getal zijn tussen 1 en 10000';
$string['gradepreferences'] = 'Beoordelingsvoorkeuren';
$string['gradepreferenceshelp'] = 'Help bij voorkeursinstellingen';
$string['gradepublishing'] = 'Publiceren inschakelen';
$string['gradepublishing_help'] = 'Publiceren in import en export inschakelen: Geëxporteerde cijfers kunnen opgevraagd worden via een URL zonder te moeten inloggen. Cijfers kunnen door zo een URL te bezoeken ook geïmporteerd worden (wat betekent dat een Moodle site cijfers kan importeren die gepubliceerd worden door een andere site).';
$string['gradepublishinglink'] = 'Download: {$a}';
$string['gradereport'] = 'Beoordelingsrapport';
$string['graderreport'] = 'Rapportage';
$string['grades'] = 'Cijfers';
$string['gradesforuser'] = 'Cijfers voor {$a->user}';
$string['gradesonly'] = 'Wijzig naar enkel beoordelingen';
$string['gradessettings'] = 'Beoordelingsinstellingen';
$string['gradetype'] = 'Beoordelingstype';
$string['gradetype_help'] = 'Er zijn 4 beoordelingstypes:

* Geen - geen beoordeling mogelijk
* Waarde - een numerieke waarde met een maximum en een minimum
* Schaal - een item in een lijst
* Tekst - enkel feedback

Enkel de waarde en schaal kunnen geaggregeerd worden. Het beoordelingstype voor een activiteitsgebaseerd beoordelingsitem wordt op de instellingspagina van de activiteit ingesteld.';
$string['gradevaluetoobig'] = 'Eén van de cijferswaarden is groter dan het maximumcijfer ({$a})';
$string['gradeview'] = 'Bekijk beoordeling';
$string['gradewasmodifiedduringediting'] = 'Het ingegeven cijfer voor {$a->itemname} van {$a->username} is weggelaten omdat het recent is aangepast door iemand anders.';
$string['gradeweighthelp'] = 'Help bij gewogen beoordelingen';
$string['groupavg'] = 'Groepsgemiddelde';
$string['hidden'] = 'Verborgen';
$string['hiddenasdate'] = 'Toon de datum voor verborgen beoordelingen';
$string['hiddenasdate_help'] = 'Als een gebruiker verborgen cijfers niet kan zien, toon dan de datum in de plaats van een \'-\'.';
$string['hidden_help'] = 'Beoordelingen worden verborgen voor leerlingen indien geselecteerd. Een verborgen tot-datum kan ingesteld worden indien gewenst. De cijfers worden pas getoond nadat het beoordelen klaar is.';
$string['hiddenuntil'] = 'Verborgen tot';
$string['hiddenuntildate'] = 'Verborgen tot: {$a}';
$string['hideadvanced'] = 'Verberg geavanceerde mogelijkheden';
$string['hideaverages'] = 'Verberg gemiddelden';
$string['hidecalculations'] = 'Verberg berekeningen';
$string['hidecategory'] = 'Verborgen';
$string['hideeyecons'] = 'Verberg toon/verberg-icoontjes';
$string['hidefeedback'] = 'Verberg feedback';
$string['hideforcedsettings'] = 'Verberg opgelegde instellingen';
$string['hideforcedsettings_help'] = 'Toon geen geforceerde instellignen in de beoordelingsgebruikerinterface';
$string['hidegroups'] = 'Verberg groepen';
$string['hidelocks'] = 'Verberg blokkering';
$string['hidenooutcomes'] = 'Toon resultaten';
$string['hidequickfeedback'] = 'Verberg snelle feedback';
$string['hideranges'] = 'Verberg marges';
$string['hidetotalifhiddenitems'] = 'Totalen verbergen als ze verborgen items bevatten?';
$string['hidetotalifhiddenitems_help'] = 'Deze instelling bepaalt of totalen die verborgen beoordelingen bevatten aan leerllingen getoond worden of vervangen worden door een liggend streepje (-). Indien ze getoond worden, dan kan in het totaal de verborgen items meegerekend worden of niet.

Indien de verborgen items niet meegerekend worden, dan kan het totaal dat leerling en leraar ziet verschillend zijn, omdat de leraar altijd het totaal ziet van alle items, verborgen of niet. Indien de verborgen items wel meegerekend worden, dan zou het kunnen dat leerlingen het resultaat van die items zelf berekenen.';
$string['hidetotalshowexhiddenitems'] = 'Toon totalen zonder verborgen items';
$string['hidetotalshowinchiddenitems'] = 'Toon totalen met verborgen items';
$string['hideverbose'] = 'Verberg {$a->category} {$a->itemmodule} {$a->itemname}';
$string['highgradeascending'] = 'Sorteer cijfers oplopend';
$string['highgradedescending'] = 'Sorteer cijfers aflopend';
$string['highgradeletter'] = 'Hoog';
$string['identifier'] = 'Identificeer gebruiker door';
$string['idnumbers'] = 'id-nummers';
$string['ignore'] = 'Negeer';
$string['import'] = 'Importeer';
$string['importcsv'] = 'Importeer CSV';
$string['importcsv_help'] = 'Cijfers kunnen als volgt via een CSV-bestand geïmporteerd worden:

* elke lijn van het bestand bevat één record
* elke record is een reeks gegevens die door comma\'s of een ander scheidingsteken gescheiden zijn
* de eerste record bevat een lijst met veldnamen die de opmaak van de rest van het bestand definiëren
* een veldnaam die de gebruikersidentiteit bevat is vereist - ofwel username, ID number of email address

Je kunt een bestand bekomen met de juiste opmaak door eerst wat cijfers te exporteren. Dat bestand kan dan bewerkt en bewaard worden als CSV-bestand.';
$string['importcustom'] = 'Importeer als aangepaste resultaten (enkel deze cursus)';
$string['importerror'] = 'Er is een fout opgetreden. Dit script is niet aangeroepen met de juiste parameters.';
$string['importfailed'] = 'Importeren mislukt. Er zijn geen gegevens geïmporteerd.';
$string['importfeedback'] = 'Importeer feedback';
$string['importfile'] = 'Importeer bestand';
$string['importfilemissing'] = 'Geen bestand ontvangen, ga terug naar het formulier en upload een geldig bestand.';
$string['importfrom'] = 'Importeer van';
$string['importoutcomenofile'] = 'Het geüploade bestand is leeg of corrupt. Controleer de geldigheid van je bestand. Het probleem is gevonden op lijn {$a}; De oorzaak is dat de data lijn niet evenveel kolommen telt als de eerste lijn (de lijn met veldnamen) of er ontbreken veldnamen op de eerste lijn. Kijk naar een geëxporteerd bestand als voorbeeld van een bestand met een geldige eerste lijn.';
$string['importoutcomes'] = 'Importeer resultaten';
$string['importoutcomes_help'] = 'Resultaten kunnen geïmporteerd worden via een CSV-bestand met dezelfde opmaak als het export CSV-bestand.';
$string['importoutcomesuccess'] = 'Geïmporteerde competentie "{$a->name}" met ID #{$a->id}';
$string['importplugins'] = 'Importeer plugins';
$string['importpreview'] = 'Importeervoorbeeld';
$string['importsettings'] = 'Importeer instellingen';
$string['importskippednomanagescale'] = 'Je hebt het recht niet om een nieuwe schaal toe te voegen, dus competentie "{$a}" is overgeslagen omdat daarvoor een nieuwe schaal aangemaakt moest worden.';
$string['importskippedoutcome'] = 'Een competentie met de korte naam "{$a}" bestaat al in deze context. Degene die in het geïmporteerde bestand zat is overgeslagen.';
$string['importstandard'] = 'Importeer als standaard resultaten';
$string['importsuccess'] = 'Beoordelingen importeren gelukt';
$string['importxml'] = 'Importeer XML';
$string['includescalesinaggregation'] = 'Gebruik ook schalen in aggregatie';
$string['includescalesinaggregation_help'] = 'Je kunt kiezen of schalen als getallen in alle geaggregeerde cijfers over alle cijferlijsten in alle cursussen opgenomen worden.
OPGELET: door deze instelling te wijzigen zullen alle geaggregeerde cijfers herberekend worden.';
$string['incorrectcourseid'] = 'Cursus ID was fout';
$string['incorrectcustomscale'] = '(Verkeerde aangepaste schaal, wijzigen aub.)';
$string['incorrectminmax'] = 'Het minimum moet kleiner zijn dan het maximum';
$string['inherit'] = 'overerf';
$string['intersectioninfo'] = 'Leerling/cijferinformatie';
$string['invalidgradeexporteddate'] = 'De exportdatum is fout omdat het meer dan een jaar geleden is, of in de toekomst, of omdat het formaat fout is.';
$string['item'] = 'Item';
$string['iteminfo'] = 'Iteminformatie';
$string['iteminfo_help'] = '<p>Een plaats om informatie te zetten over dit item. De tekst die je hier ingeeft wordt nergens anders getoond.</p>';
$string['itemname'] = 'Itemnaam';
$string['itemnamehelp'] = 'De naam van dit item, doorgegeven vanuit de module.';
$string['items'] = 'Items';
$string['itemsedit'] = 'Bewerk beoordelingsitem';
$string['keephigh'] = 'Weerhoud hoogste';
$string['keephighestvalues'] = 'Behoud de {$a} hoogste waarden';
$string['keephigh_help'] = 'Indien ingesteld, zal deze optie enkel de X hoogst cijfers behouden, waarbij X de geselecteerde waarde is voor deze optie.';
$string['keymanager'] = 'Sleutelbeheerder';
$string['lessthanmin'] = 'Het cijfer, ingegeven voor {$a->itemname} voor {$a->username} is minder dan het minimaal toegelaten';
$string['letter'] = 'Letter';
$string['lettergrade'] = 'Letterbeoordeling';
$string['lettergradenonnumber'] = 'Laagste en/of hoogste cijfer was geen cijfer';
$string['letterpercentage'] = 'Letter (percentage)';
$string['letterreal'] = 'Letter (reëel)';
$string['letters'] = 'Letters';
$string['linkedactivity'] = 'Gelinkte activiteit';
$string['linkedactivity_help'] = '<p>Specifiëert een optionele activiteit waaraan deze competentie is gelinkt. Dit wordt gebruikt om de performantie van de leerling te testen voor criteria die niet beoordeeld worden door het cijfer van de activiteit.</p>';
$string['linktoactivity'] = 'Link naar {$a->name} activiteit';
$string['lock'] = 'Blokkeer';
$string['locked'] = 'Geblokkeerd';
$string['locked_help'] = 'Indien geselecteerd kunnen beoordelingen niet meer automatisch aangepast worden vanuit de activiteitsmodule.';
$string['locktime'] = 'Blokkeer na';
$string['locktimedate'] = 'Geblokkeerd na: {$a}';
$string['lockverbose'] = 'Blokkeer {$a->category} {$a->itemmodule} {$a->itemname}';
$string['lowest'] = 'Laagste';
$string['lowgradeletter'] = 'Laag';
$string['manualitem'] = 'Manueel beoordelingsitem';
$string['mapfrom'] = 'Koppel van';
$string['mapfrom_help'] = 'Selecteer de kolom in het rekenblad waar de gegevens in staan om de gebruiker te identificeren, zoals gebruikersnaam, gebruikers-ID of e-mailadres.';
$string['mappings'] = 'Beoordelingsitems koppelingen';
$string['mappings_help'] = 'Selecteer voor elke cijferkolom in het rekenblad het overeenkomstige cijferitem om de cijfers in te importeren.';
$string['mapto'] = 'Koppel aan';
$string['mapto_help'] = 'Selecteer de zelfde identificatiegegevens als geselecteerd voor \'Koppel van\'.';
$string['max'] = 'Hoogste';
$string['maxgrade'] = 'Maximaal cijfer';
$string['meanall'] = 'Alle beoordelingen';
$string['meangraded'] = 'Niet lege beoordelingen';
$string['meanselection'] = 'Beoordelingen opgenomen in gemiddelde';
$string['meanselection_help'] = 'Kies welke beoordelingstypes voor gemiddeldes zullen gebruikt worden. Lege cellen kunnen genegeerd worden of als 0 berekend worden (standaardinstelling)';
$string['median'] = 'Mediaan';
$string['min'] = 'Laagste';
$string['minimum_show'] = 'Toon het minimumcijfer';
$string['minimum_show_help'] = 'Het minimumcijfer wordt gebruikt bij het berekenen van cijfers en wegingen. Indien het niet getoond wordt, zal voor het minimumcijfer standaard nul genomen worden en kan niet bewerkt worden.';
$string['minmaxtouse'] = 'In berekening gebruikte min- en max-cijfers';
$string['minmaxtouse_desc'] = 'Deze instelling bepaalt of de initiële minimum- en maximumcijfers van wanneer het cijfer gegeven werd moet gebruikt worden de minimum- en maximumcijfers zoals opgegeven in de instellingen van het beoordelingsitem wanneer het cijfer dat in het cijferboek verschijnt berekend moet worden. Het is aanbevolen wordt om deze instelling alleen op een rustig moment aan te passen omdat alle cijfers herberekend zullen worden. Dit kan een hoge serverbelasting veroorzaken.';
$string['minmaxtouse_help'] = 'Deze instelling bepaalt of de initiële minimum- en maximumcijfers van wanneer het cijfer gegeven werd moet gebruikt worden de minimum- en maximumcijfers zoals opgegeven in de instellingen van het beoordelingsitem wanneer het cijfer dat in het cijferboek verschijnt berekend moet worden.';
$string['minmaxupgradedgrades'] = 'Opmerking: sommige cijfers zijn gewijzigd om een inconsistentie op te lossen in het cijferboek. Deze wordt veroorzaakt door een wijziging in de minimum- en maximumcijfers die gebruikt werden toen het getoonde cijfer berekend werd. Het is aangewezen om de cijfers na te kijken en te bevestigen.';
$string['minmaxupgradefixbutton'] = 'Inconsistenties oplossen';
$string['minmaxupgradewarning'] = 'Opmerking: er is een inconsistentie opgemerkt bij sommige cijfers die veroorzaakt wordt door een wijziging in de minimum- en maximumcijfers die gebruikt werden bij het berekenen van het getoonde cijfer in het cijferboek. Het is aangeraden om de inconsistentie op te lossen door op onderstaande knop te klikken, maar dat kan als gevolg hebben dat sommige cijfers zullen wijzigen.';
$string['missingitemtypeoreid'] = 'Array key (itemtype of eid) ontbreekt van 2de param van grade_edit_tree_column_select::get_item_cell($item, $params)';
$string['missingscale'] = 'Je moet een schaal selecteren';
$string['mode'] = 'Modus';
$string['modgrade'] = 'Cijfer';
$string['modgradecantchangegradetype'] = 'Je kunt het type niet wijzigen omdat er al cijfers voor dit item bestaan.';
$string['modgradecantchangegradetypemsg'] = 'Sommige cijfers zijn al toegekend, dus het beoordelingstype kan niet meer gewijzigd worden. Als je het maximumcijfer wilt wijzigen, moet je eerste kiezen of je al dan niet de bestaande cijfers wil herschalen.';
$string['modgradecantchangegradetyporscalemsg'] = 'Sommige cijfers zijn al toegekend, dus je kan het beoordelingstype en de schaal niet meer wijzigen.';
$string['modgradecantchangeratingmaxgrade'] = 'Je kunt het maximumcijfer niet wijzigen wanneer er al cijfers voor de activiteit gegeven zijn.';
$string['modgradecantchangescale'] = 'Je kunt de schaal niet wijzigen omdat er al cijfers bestaan voor dit item.';
$string['modgradecategorycantchangegradetypemsg'] = 'In deze categorie zitten cijfers die overschreven zijn. Daarom zijn sommige cijfers al toegekend en kan het cijfertype niet meer gewijzigd worden. Als je het maximumcijfer wil wijzigen, met je eerst kieen of je al dan niet de bestaande cijfers wil herschalen.';
$string['modgradecategorycantchangegradetyporscalemsg'] = 'In deze categorie zitten cijfers die overschreven zijn. Daarom zijn sommige cijfers al toegekend en kan het cijfertype niet meer gewijzigd worden.';
$string['modgradecategoryrescalegrades'] = 'Herschaal overschreven cijfers';
$string['modgradecategoryrescalegrades_help'] = 'Wanneer je de maximumcijfers van een item in het puntenboek wijzigt, moet je specificeren of dit al dan niet bestaande percentages moet wijzigen.

Als deze optie op \'ja\' gezet wordt, dan zullen alle overschreven cijfers herschaald worden zodat het procentuele cijfer gelijk blijft.

Bijvoorbeeld, als deze optie op \'ja\' gezet is, dan zal het wijzigen van het maximumcijfer voor een item van 10 naar 20 er voor zorgen dat een item van 6/10 (60%) herschaald wordt naar 12/20 (60%). Met deze optie op \'nee\' zal het cijfer ongewijzigd blijven, waarbij manueel aanpassen van de cijfers nodig is om juiste scores te verzekeren.';
$string['modgradedonotmodify'] = 'Wijzig bestaande cijfers niet';
$string['modgradeerrorbadpoint'] = 'Ongeldige cijferwaarde. Dit moet een geheel getal zijn tussen 1 en {$a}';
$string['modgradeerrorbadscale'] = 'Ongeldige schaal geselecteerd. Kies een schaal uit onderstaande selectie.';
$string['modgrade_help'] = 'Selecteer het type sortering dat wordt gebruikt voor deze activiteit. Als &quot;schaal&quot; wordt gekozen, kun je vervolgens kiezen voor de schaal van de &quot;schaal&quot;-dropdown. Bij gebruik van &quot;punt&quot;-indeling, kun je vervolgens het maximale cijfer beschikbaar voor deze activiteit.';
$string['modgrademaxgrade'] = 'Maximum cijfer';
$string['modgraderescalegrades'] = 'Herschaal bestaande cijfers';
$string['modgraderescalegrades_help'] = 'Wanneer je de maximumcijfers van een item in het puntenboek wijzigt, moet je specificeren of dit al dan niet bestaande percentages moet wijzigen.

Als deze optie op \'ja\' gezet wordt, dan zullen alle bestaande cijfers herschaald worden zodat het procentuele cijfer gelijk blijft.

Bijvoorbeeld, als deze optie op \'ja\' gezet is, dan zal het wijzigen van het maximumcijfer voor een item van 10 naar 20 er voor zorgen dat een item van 6/10 (60%) herschaald wordt naar 12/20 (60%). Met deze optie op \'nee\' zou het cijfer wijzigen van 6/10 (60%) naar 6/20 (30%), waarbij manueel aanpassen van de cijfers nodig is om juiste scores te verzekeren.';
$string['modgradetype'] = 'Type';
$string['modgradetypenone'] = 'Geen';
$string['modgradetypepoint'] = 'Punt';
$string['modgradetypescale'] = 'Schaal';
$string['morethanmax'] = 'Het cijfer, ingegeven voor {$a->itemname} voor {$a->username} is meer dan het maximaal toegelaten.';
$string['moveselectedto'] = 'Verplaats geselecteerde items naar:';
$string['movingelement'] = '{$a} aan het verplaatsen';
$string['multfactor'] = 'Multiplicator';
$string['multfactor_help'] = '<p>Factor waarmee alle cijfers voor dit beoordelingsitem moeten vermenigvuldigd worden.</p>';
$string['multfactorvalue'] = 'Vermenigvuldig waarde voor {$a}';
$string['mustchooserescaleyesorno'] = 'Je moet kiezen of je bestaande cijfers wil herschalen of niet.';
$string['mygrades'] = 'Link naar gebruikersmenu voor cijfers';
$string['mygrades_desc'] = 'Deze instelling geeft de mogelijkheid om een extern cijferboek aan het gebruikersmenu te koppelen';
$string['mypreferences'] = 'Mijn voorkeuren';
$string['myreportpreferences'] = 'Mijn rapport voorkeuren';
$string['navmethod'] = 'Navigatiemethode';
$string['neverdeletehistory'] = 'Cijfergeschiedenis nooit verwijderen';
$string['newcategory'] = 'Nieuwe categorie';
$string['newitem'] = 'Nieuw beoordelingsitem';
$string['newoutcomeitem'] = 'Nieuw competentie-item';
$string['no'] = 'Nee';
$string['nocategories'] = 'Cijfercategorieën konden voor deze cursus niet gevonden of toegevoegd worden';
$string['nocategoryname'] = 'Je hebt geen categorienaam opgegeven';
$string['nocategoryview'] = 'Geen categorieën om te tonen';
$string['nocourses'] = 'Er zijn nog geen cursussen';
$string['noforce'] = 'Niet forceren';
$string['nogradeletters'] = 'Geen cijferbeoordelingen ingesteld';
$string['nogradesreturned'] = 'Geen cijfers';
$string['noidnumber'] = 'Geen id nummer';
$string['nolettergrade'] = 'Geen letterbeoordeling voor';
$string['nomode'] = 'NA';
$string['nonnumericweight'] = 'Een niet-numerieke waarde ontvangen voor';
$string['nonunlockableverbose'] = 'Dit cijfer kan niet gedeblokkeerd worden tot {$a->itemname} gedeblokkeerd is.';
$string['nonweightedpct'] = '% zonder weging';
$string['nooutcome'] = 'Geen competentie';
$string['nooutcomes'] = 'Resultaten-items moeten gelinkt zijn aan een cursusresultaat, maar er zijn geen resultaten in deze cursus. Wil je er toevoegen?';
$string['nopermissiontoresetweights'] = 'Geen rechten om de wegingen opnieuw in te stellen';
$string['nopublish'] = 'Niet publiceren';
$string['noreports'] = 'Je bent in geen enkele cursus van deze site aangemeld als leerling of leraar.';
$string['norolesdefined'] = 'Geen rollen gedefiniëerd in Beheer -> Algemene instellingen -> Beoordelingsrollen';
$string['noscales'] = 'Resultaten moeten gelinkt zijn aan een cursusschaal of een globale schaal, maar er zijn er geen. Wil je er toevoegen?';
$string['noselectedcategories'] = 'Je hebt geen categorieën geselecteerd';
$string['noselecteditems'] = 'Je hebt geen items geselecteerd';
$string['notenrolled'] = 'Je bent in geen enkele cursus aangemeld.';
$string['notteachererror'] = 'Je moet leraar zijn om deze functie te gebruiken';
$string['nousersloaded'] = 'Geen gebruikers geladen';
$string['numberofgrades'] = 'Aantal beoordelingen';
$string['onascaleof'] = 'op een schaal van {$a-grademin} tot {$a->grademax}';
$string['operations'] = 'Operatie';
$string['options'] = 'Opties';
$string['others'] = 'Anderen';
$string['outcome'] = 'Competentie';
$string['outcomeassigntocourse'] = 'Wijs nog een competentie toe aan deze cursus';
$string['outcomecategory'] = 'Maak resultaten in categorie';
$string['outcomecategorynew'] = 'Nieuwe categorie';
$string['outcomeconfirmdelete'] = 'Ben je zeker dat je competentie "{$a}" wil verwijderen?';
$string['outcomecreate'] = 'Voeg een nieuwe competentie toe';
$string['outcomedelete'] = 'Verwijder competentie';
$string['outcomefullname'] = 'Volledige naam';
$string['outcome_help'] = 'De competentie waarvoor dit beoordelingsitem staat.';
$string['outcomeitem'] = 'Competentie-item';
$string['outcomeitemsedit'] = 'Bewerk competentie-item';
$string['outcomereport'] = 'Rapport competentie';
$string['outcomes'] = 'Resultaten';
$string['outcomescourse'] = 'Resultaten gebruikt in deze cursus';
$string['outcomescoursecustom'] = 'Eigen gebruikt (niet verwijderen)';
$string['outcomescoursenotused'] = 'Standaard niet gebruikt';
$string['outcomescourseused'] = 'Standaard gebruikt (niet verwijderen)';
$string['outcomescustom'] = 'Eigen resultaten';
$string['outcomeshortname'] = 'Korte naam';
$string['outcomesstandard'] = 'Standaardresultaten';
$string['outcomesstandardavailable'] = 'Beschikbare standaardresultaten';
$string['outcomestandard'] = 'Standaardcompetentie';
$string['outcomestandard_help'] = '<p>Een standaardcompetentie is voor de hele site beschikbaar, voor alle cursussen.</p>';
$string['overallaverage'] = 'Algemeen gemiddelde';
$string['overridden'] = 'Gewijzigd';
$string['overridden_help'] = '<p>Wanneer ingeschakeld zal deze vlag verhinderen dat deze beoordeling automatisch overschreven kan worden. Deze vlag wordt dikwijls intern ingeschakeld door de cijferlijst, maar kan hier manueel in- en uitgeschakeld worden.</p>';
$string['overriddennotice'] = 'Je totaalcijfer voor deze activiteit is manueel aangepast.';
$string['overridecat'] = 'Toestaan dat categoriecijfers manueel overschreven worden';
$string['overridecat_help'] = 'Door deze instelling uit te zetten wordt het voor gebruikers onmogelijk om de categoriecijfers te overschrijven.';
$string['overridesitedefaultgradedisplaytype'] = 'Standaardinstellingen voor de site negeren';
$string['overridesitedefaultgradedisplaytype_help'] = 'Indien aangeduid kunnen de marges voor letter en cijferbeoordeling per cursus ingesteld worden, eerder dan de site standaarden te gebruiken.';
$string['overrideweightofa'] = 'Weging overschrijven van {$a}';
$string['parentcategory'] = 'Bovenliggende categorie';
$string['pctoftotalgrade'] = '% van totaalcijfer';
$string['percent'] = 'Procent';
$string['percentage'] = 'Percentage';
$string['percentageletter'] = 'Percentage (letter)';
$string['percentagereal'] = 'Percentage (Reëel)';
$string['percentascending'] = 'Sorteer procent oplopend';
$string['percentdescending'] = 'Sorteer procent aflopend';
$string['percentshort'] = '%';
$string['plusfactor'] = 'Compensatie';
$string['plusfactor_help'] = '<p>Getal dat zal opgeteld worden bij elk cijfer voor dit beoordelingsitem, nadat de Multiplicator is toegepast.</p>';
$string['plusfactorvalue'] = 'Offsetwaarde voor {$a}';
$string['points'] = 'punten';
$string['pointsascending'] = 'Sorteer punten oplopend';
$string['pointsdescending'] = 'Sorteer punten aflopend';
$string['positionfirst'] = 'Eerst';
$string['positionlast'] = 'Laatst';
$string['preferences'] = 'Voorkeuren';
$string['prefgeneral'] = 'Algemeen';
$string['prefletters'] = 'Beoordelingscijfers en marges';
$string['prefrows'] = 'Speciale rijen';
$string['prefshow'] = 'Toon/verberg schakelaars';
$string['previewrows'] = 'Voorbeeld rijen';
$string['profilereport'] = 'Rapport gebruikersprofiel';
$string['profilereport_help'] = 'Cijferrapport, gebruikt op gebruikersprofielpagina';
$string['publishing'] = 'Publiceren';
$string['publishingoptions'] = 'Opties om cijfers te publiceren';
$string['quickfeedback'] = 'Snelle feedback';
$string['quickgrading'] = 'Snel beoordelen';
$string['quickgrading_help'] = '<p>Snel beoordelen voegt een tekstveld toe aan elke beoordelingscel op het rapportagescherm, waarmee je tegelijk de feedback kunt geven voor een heel aantal beoordelingen tegelijk. Je kunt dan op de Aanpassen-knop klikken om al deze wijzigingen in één keer door te voeren i.p.v. één voor één.</p>';
$string['range'] = 'Marge';
$string['rangedecimals'] = 'Bereik decimale cijfers';
$string['rangedecimals_help'] = 'Het aantal te tonen decimale cijfers voor bereik';
$string['rangesdecimalpoints'] = 'Aantal decimalen in marges';
$string['rangesdecimalpoints_help'] = '<p>Specifieerd het aantal decimalen die voor elke marge getoond worden. Deze instelling kan overschreven worden per beoordelingsitem.</p>';
$string['rangesdisplaytype'] = 'Hoe marges tonen';
$string['rangesdisplaytype_help'] = '<p>Specifieerd hoe marges getoond moeten worden. Als je voor overerven kiest, dan wordt dit type voor elke kolom gebruikt.</p>';
$string['rank'] = 'Ranglijst';
$string['rawpct'] = 'Ruw %';
$string['real'] = 'Echt';
$string['realletter'] = 'Reëel (letter)';
$string['realpercentage'] = 'Reëel (percentage)';
$string['recalculatinggrades'] = 'Cijfers herberekenen';
$string['recovergradesdefault'] = 'Standaard herstel cijfers';
$string['recovergradesdefault_help'] = 'Herstel als standaardinstelling oude cijfers bij het opnieuw aanmelden in een cursus.';
$string['refreshpreview'] = 'Voorbeeld vernieuwen';
$string['regradeanyway'] = 'Cijfers toch opnieuw berekenen';
$string['removeallcoursegrades'] = 'Verwijder alle cijfers';
$string['removeallcoursegrades_help'] = 'Indien ingeschakeld zullen alle beoordelingsitems die manueel aan de cijferlijst zijn toegevoegd, verwijderd worden, samen met alle cijfers en gegevens op overschreven, uitgesloten, verborgen en geblokkeerde cijfers. Enkel beoordelingsitems die met activiteiten geassocieerd zijn zullen overblijven.';
$string['removeallcourseitems'] = 'Verwijder alle items en categorieën';
$string['removeallcourseitems_help'] = 'Indien ingeschakeld zullen alle categorieën die manueel aan de cijferlijst zijn toegevoegd, verwijderd worden, samen met alle cijfers en gegevens op overschreven, uitgesloten, verborgen en geblokkeerde cijfers. Enkel beoordelingsitems die met activiteiten geassocieerd zijn zullen overblijven.';
$string['report'] = 'Rapport';
$string['reportdefault'] = 'Rapportvoorbeeld ({$a})';
$string['reportplugins'] = 'Rapportplugins';
$string['reportsettings'] = 'Rapportinstellingen';
$string['reprintheaders'] = 'Koppen herhalen';
$string['resetweights'] = 'Weging van {$a->itemname} opnieuw instellen';
$string['resetweightsshort'] = 'Wegingen opnieuw instellen';
$string['respectingcurrentdata'] = 'huidige configuratie wordt niet aangepast';
$string['rowpreviewnum'] = 'Voorbeeld rijen';
$string['rowpreviewnum_help'] = 'Gegevens voor import kunnen bekeken worden voor je de import start. Deze instelling bepaalt hoeveel rijen er in het voorbeeld getoond worden.';
$string['savechanges'] = 'Bewaar wijzigingen';
$string['savepreferences'] = 'Bewaar instellingen';
$string['scaleconfirmdelete'] = 'Ben je er zeker van dat je schaal \'{$a}\' wil verwijderen?';
$string['scaledpct'] = 'Procentuele schaal';
$string['seeallcoursegrades'] = 'Bekijk alle cursuscijfers';
$string['select'] = 'Selecteer {$a}';
$string['selectalloroneuser'] = 'Selecteer alle of één gebruiker';
$string['selectauser'] = 'Kies een gebruiker';
$string['selectdestination'] = 'Selecteer bestemming voor {$a}';
$string['separator'] = 'Scheidingsteken';
$string['separator_help'] = 'Selecteer het scheidingsteken dat in het CSV-bestand gebruikt wordt. (Gewoonlijk is dit een komma.)';
$string['sepcolon'] = 'Dubbele punt';
$string['sepcomma'] = 'Komma';
$string['sepsemicolon'] = 'Kommapunt';
$string['septab'] = 'Tabulatie';
$string['setcategories'] = 'Categorieën instellen';
$string['setcategorieserror'] = 'Je moet eerst de categorieën voor je cursus instellen voor je er wegingen kan aan geven.';
$string['setgradeletters'] = 'Letterbeoordeling instellen';
$string['setpreferences'] = 'Voorkeuren instellen';
$string['setting'] = 'Instelling';
$string['settings'] = 'Instellingen';
$string['setweights'] = 'Wegingen instellen';
$string['showactivityicons'] = 'Toon icoontjes voor activiteiten';
$string['showactivityicons_help'] = '<p>Moeten de activiteiten-icoontjes naast de activiteitennamen getoond worden?</p>';
$string['showallhidden'] = 'Toon verborgen';
$string['showallstudents'] = 'Toon alle leerlingen';
$string['showanalysisicon'] = 'Toon cijferanalyse icoontje';
$string['showanalysisicon_desc'] = 'Toon standaard het icoontje voor cijferanalyse. Als de activiteitsmodule dit ondersteund, dan zal het cijferanalyse icoontje linken naar een pagina met meer gedetailleerde informatie over het cijfer en hoe dat verkregen is.';
$string['showanalysisicon_help'] = 'Als de activiteitsmodule het ondersteunt, dan zal het cijferanalyse icoontje naar een pagina linken die meer informatie geeft over het cijfer en hoe het verkregen is.';
$string['showaverage'] = 'Toon gemiddelde';
$string['showaverage_help'] = 'Of een kolom met gemiddelden getoond moet worden. Merk op dat leerlingen de cijfers van andere leerlingen kunnen schatten als het gemiddelde uit een klein aantal cijfers berekend wordt. Om performantie-redenen is het gemiddelde benaderd als het afhankelijk is van verborgen items.';
$string['showaverages'] = 'Toon kolomgemiddelden';
$string['showaverages_help'] = 'Toon kolomgemiddeldes op het rapport';
$string['showcalculations'] = 'Toon berekeningen';
$string['showcalculations_help'] = 'Indien ingeschakeld zal er tijdens het bewerken een berekeningsicoontje getoond worden naast elk beoordelingsitem en categorie met een visuele indicatie wanneer een beoordelingsitem berekend is.';
$string['showcontributiontocoursetotal'] = 'Toon bijdrage aan cursustotaal';
$string['showcontributiontocoursetotal_help'] = 'Of er een kolom moet getoond worden met het percentage dat aangeeft hoeveel elk beoordelingsitem bijdraagt tot het cursustotaal van de gebruiker (nadat de weging is toegepast).';
$string['showeyecons'] = 'Toon toon/verberg-icoontjes';
$string['showeyecons_help'] = 'Of er een toon/verberg icoontje getoond moet worden naast elk cijfer (waarmee de zichtbaarheid voor de gebruiker ingesteld kan worden.';
$string['showfeedback'] = 'Toon feedback';
$string['showfeedback_help'] = 'Toon de feedback-kolom?';
$string['showgrade'] = 'Toon cijfers';
$string['showgrade_help'] = 'Toon de cijferkolom?';
$string['showgroups'] = 'Toon groepen';
$string['showhiddenitems'] = 'Toon verborgen items';
$string['showhiddenitems_help'] = 'Of verborgen items in een rapport volledig verborgen zijn of enkel de cijfers verborgen zijn en de naam niet.

* Toon verborgen - Namen van verborgen beoordelingsitems worden getoond, maar de cijfers zijn verborgen
* Enkel verborgen tot - Beoordelingsitems met een "verborgen tot"-datum ingesteld, zijn volledig verborgen tot de ingestelde datum. Daarna wordt het hele item getoond.
* Niet tonen - Verborgen items zijn volledig verborgen';
$string['showhiddenuntilonly'] = 'Verborgen tot';
$string['showingaggregatesonly'] = 'Toont enkel geaggregeerde cijfers';
$string['showingfullmode'] = 'Toont volledig beeld';
$string['showinggradesonly'] = 'Toont enkel cijfers';
$string['showlettergrade'] = 'Toon letterbeoordelingen';
$string['showlettergrade_help'] = 'Toon de letterbeoordelingskolom?';
$string['showlocks'] = 'Toon blokkeringen';
$string['showlocks_help'] = 'Of er een blokkeer/vrijgeven icoontje getoond moet worden naast elke beoordeling.';
$string['shownohidden'] = 'Niet tonen';
$string['shownooutcomes'] = 'Verberg resultaten';
$string['shownumberofgrades'] = 'Toon het aantal cijfers in gemiddelden';
$string['shownumberofgrades_help'] = 'Toont het aantal cijfers dat geaggregeerd wordt tussen haakjes naast elk gemiddelde. Voorbeeld 45(34)';
$string['showonlyactiveenrol'] = 'Toon enkel actieve aanmeldingen';
$string['showonlyactiveenrol_help'] = 'Deze instelling bepaalt of enkel actieve aangemelde gebruikers in de cijferlijst zullen verschijnen. Indien ingeschakeld zullen geschorste gebruikers niet verschijnen.';
$string['showpercentage'] = 'Toon percentage';
$string['showpercentage_help'] = 'Het percentage van elk beoordelingsitem tonen?';
$string['showquickfeedback'] = 'Toon formulier voor snelle feedback';
$string['showquickfeedback_help'] = 'Snelle feedback voegt een element voor tekstinvoer toe aan elke cel op het rapportagescherm, waardoor je snel de feedback kunt wijzigen voor veel cijfers tegelijk. Je kunt dan op de Update-knop klikken om al deze wijzigingen in één keer door te voeren.';
$string['showrange'] = 'Toon bereik';
$string['showrange_help'] = 'Toon een kolom voor het bereik?';
$string['showranges'] = 'Toon marges';
$string['showranges_help'] = 'Toon een rij met de mogelijke marges voor elk beoordelingsitem in het rapport.';
$string['showrank'] = 'Toon ranglijst';
$string['showrank_help'] = 'Toon de positie van de leerling in relatie tot de rest van de klas voor elk beoordelingsitem?';
$string['showuserimage'] = 'Toon gebruikersprofielafbeeldingen';
$string['showuserimage_help'] = 'Of de afbeelding van het gebruikersprofiel naast de naam moet getoond worden op het rapport.';
$string['showverbose'] = 'Toon {$a->category} {$a->itemmodule} {$a->itemname}';
$string['showweight'] = 'Toon wegingen';
$string['showweight_help'] = 'Toon een kolom voor de weging van het cijfer?';
$string['simpleview'] = 'Enkelvoudig overzicht';
$string['singleview'] = 'Alleen bekijken voor {$a}';
$string['sitewide'] = 'Voor heel de site';
$string['sort'] = 'Sorteer';
$string['sortasc'] = 'Sorteer stijgend';
$string['sortbyfirstname'] = 'Sorteer op voornaam';
$string['sortbylastname'] = 'Sorteer op achternaam';
$string['sortdesc'] = 'Sorteer dalend';
$string['standarddeviation'] = 'Standaarddeviatie';
$string['stats'] = 'Statistieken';
$string['statslink'] = 'Statistieken';
$string['student'] = 'Leerling';
$string['studentsperpage'] = 'Aantal leerlingen per pagina';
$string['studentsperpage_help'] = 'Het aantal leerlingen dat op één pagina van het rapport getoond wordt.';
$string['studentsperpagereduced'] = 'Het maximale aantal getoonde leerlingen per pagina is verminderd van {$a->originalstudentsperpage} tot {$a->studentsperpage}. Overweeg om je PHP-instelling  max_input_vars te verhogen van {$a->maxinputvars}.';
$string['subcategory'] = 'Normale categorie';
$string['submissions'] = 'Inzendingen';
$string['submittedon'] = 'Ingezonden: {$a}';
$string['sumofgradesupgradedgrades'] = 'Opmerking: de aggregatiemethode "Som van cijfers" is gewijzigd in "Natuurlijk" als deel van de site-upgrade. Omdat "Som van cijfers" voorheen gebruikt werd in de cursus, is het aangewezen dat je de wijziging nakijkt in de cijferlijst.';
$string['switchtofullview'] = 'Schakel naar volledig overzicht';
$string['switchtosimpleview'] = 'Schakel naar eenvoudig overzicht';
$string['tabs'] = 'Tabbladen';
$string['topcategory'] = 'Topcategorie';
$string['total'] = 'Totaal';
$string['totalweight100'] = 'Het totaalgewicht is 100';
$string['totalweightnot100'] = 'Het totaalgewicht is verschillend van 100';
$string['turnfeedbackoff'] = 'Feedback uitschakelen';
$string['turnfeedbackon'] = 'Feedback inschakelen';
$string['typenone'] = 'Geen';
$string['typescale'] = 'Schaal';
$string['typescale_help'] = '<p>Wanneer het schaal beoordelingstype kiest, kun je een schaal kiezen. De schaal voor een Moodle-activiteit gebaseerde beoording kun je kiezen op de instellingspagina van de activiteit.</p>';
$string['typetext'] = 'Text';
$string['typevalue'] = 'Waarde';
$string['uncategorised'] = 'Zonder categorie';
$string['unchangedgrade'] = 'Beoordeling ongewijzigd';
$string['unenrolledusersinimport'] = 'In deze import zaten cijfers voor gebruikers die niet in de cursus aangemeld zijn: {$a}';
$string['unlimitedgrades'] = 'Onbeperkte cijfers';
$string['unlimitedgrades_help'] = 'Standaard worden cijfers beperkt door de minimum- en de maximumwaarden van het beoordelingsitem. Door deze instelling in te schakelen verwijder je deze limiet en laat je toe om cijfers boven de 100% in de cijferlijst te zetten.';
$string['unlock'] = 'deblokkeer';
$string['unlockverbose'] = '{$a->category} {$a->itemmodule} {$a->itemname} vrijgeven';
$string['unused'] = 'Ongebruikt';
$string['updatedgradesonly'] = 'Exporteer enkel nieuwe of gewijzigde cijfers';
$string['upgradedgradeshidemessage'] = 'Bericht verbergen';
$string['upgradedminmaxrevertmessage'] = 'Wijzigingen ongedaan maken';
$string['uploadgrades'] = 'Beoordelingen uploaden';
$string['useadvanced'] = 'Gebruik geavanceerde mogelijkheden';
$string['usedcourses'] = 'Gebruikte cursussen';
$string['usedgradeitem'] = 'Gebruikt beoordelingsitem';
$string['usenooutcome'] = 'Gebruik geen competentie';
$string['usenoscale'] = 'Gebruik geen schaal';
$string['usepercent'] = 'Gebruik procent';
$string['user'] = 'Gebruiker';
$string['userenrolmentsuspended'] = 'Aanmelding gebruiker geschorst';
$string['userfields_show'] = 'Toon gebruikersvelden';
$string['userfields_show_help'] = 'Toon bijkomende gebruikersvelden, zoals e-mailadres op het beoordelaarsrapport. De specifieke velden die getoond worden, worden gecontroleerd door de site-instelling showuseridentity.';
$string['usergrade'] = 'Gebruiker {$a->fullname} ({$a->useridnumber}) op item {$a->gradeidnumber}';
$string['userid'] = 'GebruikersID';
$string['useridnumberwarning'] = 'Gebruikers zonder ID-nummer worden niet geëxporteerd vermits ze niet geïmporteerd kunnen worden.';
$string['usermappingerror'] = 'Fout in het koppelen van gebruikers: kon geen gebruiiker vinden met {$a->field} gelijk aan "{$a->value}".';
$string['usermappingerrorcurrentgroup'] = 'Gebruiker is geen lid van huidige groep.';
$string['usermappingerrorusernotfound'] = 'Probleem met koppelen van van gebruiker. Kon gebruiker niet vinden.';
$string['userpreferences'] = 'Gebruikersvoorkeuren';
$string['useweighted'] = 'Gebruik weging';
$string['verbosescales'] = 'Schalen tonen';
$string['verbosescales_help'] = 'Een schaal met woorden gebruikt woorden in plaats van getallen. Zet op \'ja\' als er zowel numerieke schalen als schalen met woorden geïmporteerd worden. Zet op \'Nee\' als er enkel numerieke schalen geïmporteerd worden.';
$string['viewbygroup'] = 'Groep';
$string['viewgrades'] = 'Bekijk cijfers';
$string['weight'] = 'Weging';
$string['weightcourse'] = 'Gebruik gewogen cijfers voor de cursus';
$string['weightedascending'] = 'Sorteer oplopend gewogen procent';
$string['weighteddescending'] = 'Sorteer aflopend gewogen procent';
$string['weightedpct'] = 'gewogen %';
$string['weightedpctcontribution'] = 'gewogen % bijdrage';
$string['weight_help'] = 'Een waarde die gebruikt wordt om de relatieve waarde te bepalen van meerdere beoordelingsitems in een categorie of cursus.';
$string['weightofa'] = 'Weging van {$a}';
$string['weightorextracredit'] = 'Weging of bonus';
$string['weightoverride'] = 'wegingsaanpassing';
$string['weightoverride_help'] = 'Verwijder selectie om een gewogen beoordelingsitem terug te zetten naar zijn automatisch berekende waarde. Dit selecteren zal voorkomen dat de weging automatisch aangepast wordt.';
$string['weights'] = 'Wegingen';
$string['weightsadjusted'] = 'Je wegingen zijn aangepast naar een totaal van 100';
$string['weightsedit'] = 'Bewerk weging en bonus';
$string['weightuc'] = 'Berekende weging';
$string['writinggradebookinfo'] = 'Instelling cijferlijst wegschrijven';
$string['xml'] = 'XML';
$string['yes'] = 'Ja';
$string['yourgrade'] = 'Jouw cijfer';
