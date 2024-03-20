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
 * Strings for component 'tool_dataprivacy', language 'nl', version '4.1'.
 *
 * @package     tool_dataprivacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Activiteiten en bronnen';
$string['addcategory'] = 'Categorie toevoegen';
$string['addnewdefaults'] = 'Voeg een nieuwe module-standaard toe';
$string['addpurpose'] = 'Voeg doel toe';
$string['addroleoverride'] = 'Rol overschrijven toevoegen';
$string['approve'] = 'Goedkeuren';
$string['approvedrequestsubmitted'] = 'Je vraag is ingestuurd en zal snel behandeld worden.';
$string['approverequest'] = 'Aanvraag goedkeuren';
$string['automaticdatadeletionapproval'] = 'Goedkeuring voor aanvraag voor automatische gegevensverwijdering';
$string['automaticdatadeletionapproval_desc'] = 'Indien ingeschakeld zullen aanvragen voor gegevensverwijdering automatisch goedgekeurd worden. <br />Merk op dat de automatische goedkeuring enkel van toepassing is op nieuwe aanvragen voor het verwijderen van gegevens sinds deze instelling ingeschakeld is. Bestaande aanvragen voor gegevensverwijdering blijven in de wachtrij tot ze manueel goedgekeurd zijn door de privacy-officer.';
$string['automaticdataexportapproval'] = 'Automatisch goedkeuren van gegevensexport';
$string['automaticdataexportapproval_desc'] = 'Indien ingeschakeld zullen gegevensexports automatisch goedgekeurd worden.<br />Merk op dat de automatische goedkeuring enkel van toepassing is op nieuwe aanvragen voor het exporteren van gegevens sinds deze instelling ingeschakeld is. Bestaande aanvragen voor het exporteren van gegevens blijven in de wachtrij tot ze manueel goedgekeurd zijn door de privacy-officer.';
$string['automaticdeletionrequests'] = 'Maak automatische gegevens verwijder verzoeken aan';
$string['automaticdeletionrequests_desc'] = 'Indien ingeschakeld, wordt er automatisch een aanvraag tot verwijderen van gebruikersgegevens gemaakt voor elke gebruiker die manueel verwijderd wordt.';
$string['bulkapproverequests'] = 'Aanvragen goedkeuren';
$string['bulkdenyrequests'] = 'Weiger aanvragen';
$string['cachedef_contextlevel'] = 'Contextniveau, doel en categorie';
$string['cachedef_purpose'] = 'Gegevensdoelen';
$string['cachedef_purpose_overrides'] = 'Overschrijvingen van doelen in de Data Privacy tool';
$string['cancelrequest'] = 'Annuleer verzoek';
$string['cancelrequestconfirmation'] = 'Wil je dit gegevensverzoek echt annuleren?';
$string['cannotreset'] = 'Je kunt dit verzoek niet resetten. Alleen afgewezen verzoeken kunnen gerest worden.';
$string['categories'] = 'Categorieën';
$string['categorieslist'] = 'Lijst met gegevenscategorieën';
$string['category'] = 'Categorie';
$string['category_help'] = 'Een categorie in het gegevensregister beschrijft een gegevenstype. Een nieuwe categorie kan toegevoegd worden, of wanneer overerven is ingeschakeld, dan wordt de categorie van een hogere context toegepast. Contexten zijn (van laag naar hoog): Blokken > Activiteitsmodules > Cursussen > Cursuscategorieën > Gebruiker > Site.';
$string['categorycreated'] = 'Categorie gemaakt';
$string['categorydefault'] = 'Standaardcategorie';
$string['categorydefault_help'] = 'De standaardcategorie is de datacategorie die toegepast wordt op elke nieuwe instantie. Indien overerven is geselecteerd, dan wordt de datacategorie van een hogere context toegepast. Contexten zijn (van laag naar hoog): Blokken > Activiteitsmodules > Cursussen > Cursuscategorieën > Gebruiker > Site.';
$string['categoryupdated'] = 'Categorie bijgewerkt';
$string['close'] = 'Sluiten';
$string['compliant'] = 'Klacht';
$string['confirmapproval'] = 'Wil je dit gegevensverzoek echt goedkeuren?';
$string['confirmbulkapproval'] = 'Wilt u de geselecteerde gegevensverzoeken echt goedkeuren?';
$string['confirmbulkdenial'] = 'Wilt u de geselecteerde gegevensverzoeken echt weigeren?';
$string['confirmcompletion'] = 'Wil je echt deze gebruikersvraag als onvolledig markeren?';
$string['confirmcontextdeletion'] = 'Wil je echt het verwijderen van de geselecteerde contexten bevestigen? Dit zal ook alle gebruikersgegevens voor de gerelateerde subcontexten verwijderen.';
$string['confirmdenial'] = 'Wil je echt dit gegevensverzoek weigeren?';
$string['confirmrequestresubmit'] = 'Weet je zeker dat je het huidige {$a->type} verzoek voor {$a->username} wilt annuleren en opnieuw wil indienen?';
$string['contactdataprotectionofficer'] = 'Neem contact op met de functionaris voor gegevensbescherming';
$string['contactdataprotectionofficer_desc'] = 'Door deze functie in te schakelen, kunnen gebruikers contact opnemen met de functionaris gegevensbescherming en hun gegevens opvragen via een link op hun profielpagina.';
$string['contactdpoviaprivacypolicy'] = 'Neem contact op met de functionaris gegevensbescherming van deze website, zoals beschreven in het privacybeleid.';
$string['contextlevelname10'] = 'Website';
$string['contextlevelname30'] = 'Gebruikers';
$string['contextlevelname40'] = 'Cursuscategorieën';
$string['contextlevelname50'] = 'Cursussen';
$string['contextlevelname70'] = 'Activiteiten modules';
$string['contextlevelname80'] = 'Blokken';
$string['contextpurposecategorysaved'] = 'Doel en categorie opgeslagen.';
$string['createcategory'] = 'Maak gegevenscategorie';
$string['createdeletedatarequest'] = 'Verzoek om gegevens te verwijderen';
$string['createnewdatarequest'] = 'Maak een nieuw gegevensverzoek';
$string['createpurpose'] = 'Maak datadoel';
$string['creationauto'] = 'Automatisch';
$string['creationmanual'] = 'Handmatig';
$string['datadeletion'] = 'Gegevensverwijdering';
$string['datadeletionpagehelp'] = 'Gegevens waarvoor de bewaarperiode vervallen is, worden hier vermeld. Controleer en bevestig het verwijderen van de gegevens, wat daarna zal worden uitgevoerd door de geplande taak "Verwijder vervallen contexten".';
$string['dataprivacy:downloadallrequests'] = 'Download geëxporteerde gegevens voor iedereen';
$string['dataprivacy:downloadownrequest'] = 'Download je eigen geëxporteerde gegevens';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Verzoek om gegevens te verwijderen voor minderjarigen';
$string['dataprivacy:makedatarequestsforchildren'] = 'Gegevensverzoeken voor minderjarigen maken';
$string['dataprivacy:managedataregistry'] = 'Beheer gegevensregister';
$string['dataprivacy:managedatarequests'] = 'Gegevensverzoeken beheren';
$string['dataprivacy:requestdelete'] = 'Verzoek om gegevens te verwijderen voor jezelf';
$string['dataprivacy:requestdeleteforotheruser'] = 'Gegevensverwijdering aanvragen namens een andere gebruiker';
$string['dataregistry'] = 'Gegevensregister';
$string['dataregistryinfo'] = 'Het gegevensregister maakt het mogelijk om categorieën (types van gegevens) en doelen (de redenen van het verwerken van gegevens) in te stellen voor alle inhoud van de site - van gebruikers en cursussen tot activiteiten en blokken. Voor elk doel kan een bewaartijd ingesteld worden. Wanneer de bewaartijd verstreken is, dan worden de gegevens gemarkeerd en opgelijst voor verwijdering in afwachting van de bevestiging van de beheerder.';
$string['datarequestcreatedforuser'] = 'Gegevensaanvraag gemaakt voor {$a}';
$string['datarequestcreatedfromscheduledtask'] = 'Automatisch aangemaakt vanuit een geplande taak (gebruikers die al eerder verwijderd zijn).';
$string['datarequestcreatedupondelete'] = 'Automatisch aangemaakt bij gebruikersverwijdering.';
$string['datarequestemailsubject'] = 'Gegevensverzoek: {$a}';
$string['datarequests'] = 'Gegevens verzoeken';
$string['dataretentionexplanation'] = 'Deze samenvatting toont de standaardcategorieën en -doelen voor het bewaren van gebruikersinformatie. Bepaalde delen van het systeem kunnen meer specifieke categorieën en doelen hebben dan de hier vermelde.';
$string['dataretentionsummary'] = 'Samenvatting gegevensretentie';
$string['datecomment'] = '[{$a->date}]:
 {$a->comment}';
$string['daterequested'] = 'Gegevens aangevraagd';
$string['daterequesteddetail'] = 'Gevraagde gegevens:';
$string['defaultexpired'] = 'Gegevens voor alle gebruikers';
$string['defaultexpiredexcept'] = 'Gegevens voor alle gebruikers, behalve voor gebruikers met een van de volgende rollen: <br>
{$a->unexpired}';
$string['defaultsinfo'] = 'Standaardcategorieën en -doelen worden toegepast op alle nieuw gemaakte exemplaren waar geen waarde is ingegeven.';
$string['defaultssaved'] = 'Standaardinstellingen opgeslagen';
$string['defaultswarninginfo'] = 'Waarschuwing: het wijzigen van deze standaardwaarden kan van invloed zijn op de bewaarperiode van bestaande exemplaren.';
$string['defaultunexpired'] = 'Alleen gegevens voor gebruikers met een van de volgende rollen: <br>
{$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Alleen gegevens voor gebruikers met een van de volgende rollen: <br>
{$a->expired}
Tenzij ze ook een van de volgende rollen hebben: <br>
{$a->unexpired}';
$string['deletecategory'] = 'Verwijder de categorie';
$string['deletecategorytext'] = 'Weet je zeker dat je de categorie \'{$a}\' wilt verwijderen?';
$string['deletedefaults'] = 'Standaardwaarden verwijderen: {$a}';
$string['deletedefaultsconfirmation'] = 'Weet u zeker dat u de standaardcategorie en het doel voor {$a} modules wilt verwijderen?';
$string['deleteexistingdeleteduserstask'] = 'Maak een gegevens verwijder verzoek aan voor gebruikers die eerder verwijderd zijn.';
$string['deleteexpiredcontextstask'] = 'Verwijder vervallen contexten';
$string['deleteexpireddatarequeststask'] = 'Verwijder verlopen gegevensverzoeken';
$string['deletemyaccount'] = 'Verwijder mijn account';
$string['deletepurpose'] = 'Verwijder doel';
$string['deletepurposetext'] = 'Weet je zeker dat u het doel "{$a}" wilt verwijderen?';
$string['deny'] = 'Weigeren';
$string['denyrequest'] = 'Verzoek weigeren';
$string['deprecated'] = 'Verouderd';
$string['deprecatedexplanation'] = 'Deze plug-in gebruikt een oude versie van een van de privacy-interfaces en moet worden bijgewerkt.';
$string['download'] = 'Download';
$string['downloadexpireduser'] = 'Downloaden is verlopen. Dien een nieuw verzoek in als u uw persoonlijke gegevens wenst te exporteren.';
$string['dporolemapping'] = 'Roltoewijzing  functionaris voor gegevensbescherming';
$string['dporolemapping_desc'] = 'De functionaris gegevensbescherming kan gegevensverzoeken beheren. Het recht tool/dataprivacy:managedatarequests moet toegestaan zijn voor een rol om opgenomen te kunnen worden als rol-optie voor functionaris gegevensbescherming .';
$string['duplicaterole'] = 'Rol al opgegeven';
$string['editcategories'] = 'Bewerk categorieën';
$string['editcategory'] = 'Bewerk categorie';
$string['editdefaults'] = 'Standaardinstellingen bewerken: {$a}';
$string['editmoduledefaults'] = 'Pas de standaardinstellingen van de module aan';
$string['editpurpose'] = 'Doel bewerken';
$string['editpurposes'] = 'Doeleinden bewerken';
$string['effectiveretentionperiodcourse'] = '{$a} (na de einddatum van cursus)';
$string['effectiveretentionperioduser'] = '{$a} sinds de laatste keer dat de gebruiker de site bezocht)';
$string['emailsalutation'] = 'Beste {$a},';
$string['errorcannotrequestdeleteforother'] = 'Je bent niet gemachtigd om verwijderingsverzoeken voor deze gebruiker te maken.';
$string['errorcannotrequestdeleteforself'] = 'Je bent niet gemachtigd om een verwijderingsverzoek voor jezelf te maken.';
$string['errorcannotrequestexportforself'] = 'Je hebt geen rechten om een exportverzoek voor jezelf te maken.';
$string['errorcontactdpodisabled'] = 'De optie om contact op te nemen met de privacy-verantwoordelijke is uitgeschakeld.';
$string['errorcontexthasunexpiredchildren'] = 'De context "{$a}" heeft subcontexten die nog niet vervallen zijn. Er zijn geen contexten gemarkeerd voor verwijdering.';
$string['errorinvalidrequestcomments'] = 'Het opmerkingenveld mag alleen platte tekst bevatten.';
$string['errorinvalidrequestcreationmethod'] = 'Ongeldige methode voor het maken van aanvragen!';
$string['errorinvalidrequeststatus'] = 'Ongeldige aanvraagstatus!';
$string['errorinvalidrequesttype'] = 'Ongeldig verzoektype!';
$string['errornocapabilitytorequestforothers'] = 'Gebruiker {$a->requestedby} heeft niet het recht om een gegevensaanvraag te doen in naam van gebruiker {$a->userid}';
$string['errornoexpiredcontexts'] = 'Er zijn geen vervallen contexten te verwerken';
$string['errorrequestalreadyexists'] = 'Je hebt al een lopende aanvraag.';
$string['errorrequestnotfound'] = 'Verzoek niet gevonden';
$string['errorrequestnotwaitingforapproval'] = 'Het verzoek wacht niet op goedkeuring. Of het is nog niet klaar of het is al verwerkt.';
$string['errorsendingmessagetodpo'] = 'Er is een fout opgetreden bij het verzenden van een bericht naar {$a}.';
$string['exceptionnotificationbody'] = '<p>Uitzondering gebeurd bij het aanroepen van <b>{$a->fullmethodname}</b>.<br>Dit betekent dat plugin <b>{$a->component}</b> het verwerken van gegevens niet voltooid heeft. Volgende uitzondering kan doorgegegeven worden aan de ontwikkelaar van de plugin:</p><pre>{$a->message}<br>

{$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'Er is een uitzondering opgetreden tijdens het verwerken van privacygegevens';
$string['expandplugin'] = 'Uitklappen en samenvouwen plugin.';
$string['expandplugintype'] = 'Uitklappen en samenvouwen plugintype.';
$string['expiredretentionperiodtask'] = 'Periode weerhouden na vervallen';
$string['expiredrolewithretention'] = '{$a->retention} (verlopen)';
$string['expiry'] = 'Vervallen';
$string['explanationtitle'] = 'Gebruikte icoontjes op deze pagina en wat ze betekenen.';
$string['external'] = 'Bijkomend';
$string['externalexplanation'] = 'Een bijkomende plugin die op deze site geïnstalleerd is.';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'Site startpaginacursus';
$string['gdpr_art_6_1_a_description'] = 'De betrokkene heeft toestemming gegeven voor de verwerking van zijn persoonsgegevens voor een of meer specifieke doeleinden';
$string['gdpr_art_6_1_a_name'] = 'Toestemming  (AVG Art. 6.1(a))';
$string['gdpr_art_6_1_b_description'] = 'De verwerking is noodzakelijk voor de uitvoering van een overeenkomst waarbij de betrokkene partij is, of om op verzoek van de betrokkene vóór de sluiting van een overeenkomst maatregelen te nemen';
$string['gdpr_art_6_1_b_name'] = 'Overeenkomst (AVG Art. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = 'De verwerking is noodzakelijk om te voldoen aan een wettelijke verplichting die op de verwerkingsverantwoordelijke rust';
$string['gdpr_art_6_1_c_name'] = 'Wettelijke verplichting (AVG Art 6.1(c))';
$string['gdpr_art_6_1_d_description'] = 'De verwerking is noodzakelijk om de vitale belangen van de betrokkene of van een andere natuurlijke persoon te beschermen.';
$string['gdpr_art_6_1_d_name'] = 'Vitale belangen (AVG Art. 6.1(d))';
$string['gdpr_art_6_1_e_description'] = 'De verwerking is noodzakelijk voor de vervulling van een taak van algemeen belang of van een taak in het kader van de uitoefening van het openbaar gezag dat aan de verwerkingsverantwoordelijke is opgedragen';
$string['gdpr_art_6_1_e_name'] = 'Algemeen belang (AVG Art. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = 'De verwerking is noodzakelijk voor de behartiging van de gerechtvaardigde belangen van de verwerkingsverantwoordelijke of van een derde, behalve wanneer de belangen of de grondrechten en de fundamentele vrijheden van de betrokkene die tot bescherming van persoonsgegevens nopen, zwaarder wegen dan die belangen, met name wanneer de betrokkene een kind is';
$string['gdpr_art_6_1_f_name'] = 'Gerechtvaardigd belang  (AVG Art. 6.1(f))';
$string['gdpr_art_9_2_a_description'] = 'De betrokkene heeft uitdrukkelijke toestemming gegeven voor de verwerking van die persoonsgegevens voor een of meer welbepaalde doeleinden, behalve indien in Unierecht of lidstatelijk recht is bepaald dat het in lid 1 van AVG artikel 9 genoemde verbod niet door de betrokkene kan worden opgeheven';
$string['gdpr_art_9_2_a_name'] = 'Uitdrukkelijke toestemming (AVG Art. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = 'De verwerking is noodzakelijk met het oog op de uitvoering van verplichtingen en de uitoefening van specifieke rechten van de verwerkingsverantwoordelijke of de betrokkene op het gebied van het arbeidsrecht en het socialezekerheids- en socialebeschermingsrecht, voor zover zulks is toegestaan bij Unierecht of lidstatelijk recht of bij een collectieve overeenkomst op grond van lidstatelijk recht die passende waarborgen voor de grondrechten en de fundamentele belangen van de betrokkene biedt';
$string['gdpr_art_9_2_b_name'] = 'Arbeidsrecht en het socialezekerheids- en socialebeschermingsrecht (AVG Art. 9.2(b))';
$string['gdpr_art_9_2_c_description'] = 'De verwerking is noodzakelijk ter bescherming van de vitale belangen van de betrokkene of van een andere natuurlijke persoon indien de betrokkene fysiek of juridisch niet in staat is zijn toestemming te geven';
$string['gdpr_art_9_2_c_name'] = 'Bescherming van de vitale belangen (AVG Art. 9.2(c))';
$string['gdpr_art_9_2_d_description'] = 'De verwerking wordt verricht door een stichting, een vereniging of een andere instantie zonder winstoogmerk die op politiek, levensbeschouwelijk, godsdienstig of vakbondsgebied werkzaam is, in het kader van haar gerechtvaardigde activiteiten en met passende waarborgen, mits de verwerking uitsluitend betrekking heeft op de leden of de voormalige leden van de instantie of op personen die in verband met haar doeleinden regelmatig contact met haar onderhouden, en de persoonsgegevens niet zonder de toestemming van de betrokkenen buiten die instantie worden verstrekt';
$string['gdpr_art_9_2_d_name'] = 'Verwerking van leden en contacten door een stichting, een vereniging of een andere instantie zonder winstoogmerk (AVG Art. 9.2(d))';
$string['gdpr_art_9_2_e_description'] = 'De verwerking heeft betrekking op persoonsgegevens die kennelijk door de betrokkene openbaar zijn gemaakt';
$string['gdpr_art_9_2_e_name'] = 'Gegevens door de betrokkene openbaar gemaakt (AVG Art. 9.2(e))';
$string['gdpr_art_9_2_f_description'] = 'De verwerking is noodzakelijk voor de instelling, uitoefening of onderbouwing van een rechtsvordering of wanneer gerechten handelen in het kader van hun rechtsbevoegdheid';
$string['gdpr_art_9_2_f_name'] = 'Rechtsvordering (AVG Art. 9.2(f))';
$string['gdpr_art_9_2_g_description'] = 'De verwerking is noodzakelijk om redenen van zwaarwegend algemeen belang, op grond van Unierecht of lidstatelijk recht, waarbij de evenredigheid met het nagestreefde doel wordt gewaarborgd, de wezenlijke inhoud van het recht op bescherming van persoonsgegevens wordt geëerbiedigd en passende en specifieke maatregelen worden getroffen ter bescherming van de grondrechten en de fundamentele belangen van de betrokkene';
$string['gdpr_art_9_2_g_name'] = 'Zwaarwegend algemeen belang (AVG Art. 9.2(g))';
$string['gdpr_art_9_2_h_description'] = 'De verwerking is noodzakelijk voor doeleinden van preventieve of arbeidsgeneeskunde, voor de beoordeling van de arbeidsgeschiktheid van de werknemer, medische diagnosen, het verstrekken van gezondheidszorg of sociale diensten of behandelingen dan wel het beheren van gezondheidszorgstelsels en -diensten of sociale stelsels en diensten, op grond van Unierecht of lidstatelijk recht, of uit hoofde van een overeenkomst met een gezondheidswerker en behoudens de in lid 3 van AVG artikel 9 genoemde voorwaarden en waarborgen';
$string['gdpr_art_9_2_h_name'] = 'Medisch noodzakelijk (AVG Art. 9.2(h))';
$string['gdpr_art_9_2_i_description'] = 'De verwerking is noodzakelijk om redenen van algemeen belang op het gebied van de volksgezondheid, zoals bescherming tegen ernstige grensoverschrijdende gevaren voor de gezondheid of het waarborgen van hoge normen inzake kwaliteit en veiligheid van de gezondheidszorg en van geneesmiddelen of medische hulpmiddelen, op grond van Unierecht of lidstatelijk recht waarin passende en specifieke maatregelen zijn opgenomen ter bescherming van de rechten en vrijheden van de betrokkene, met name van het beroepsgeheim';
$string['gdpr_art_9_2_i_name'] = 'Volksgezondheid (AVG Art. 9.2(i))';
$string['gdpr_art_9_2_j_description'] = 'De verwerking is noodzakelijk met het oog op archivering in het algemeen belang, wetenschappelijk of historisch onderzoek of statistische doeleinden overeenkomstig artikel 89, lid 1, op grond van Unierecht of lidstatelijk recht, waarbij de evenredigheid met het nagestreefde doel wordt gewaarborgd, de wezenlijke inhoud van het recht op bescherming van persoonsgegevens wordt geëerbiedigd en passende en specifieke maatregelen worden getroffen ter bescherming van de grondrechten en de belangen van de betrokkene';
$string['gdpr_art_9_2_j_name'] = 'Archivering in het algemeen belang, wetenschappelijk of historisch onderzoek of statistische doeleinden (AVG Art. 9.2(j))';
$string['hide'] = 'Alles samenklappen';
$string['httpwarning'] = 'Gegevens die gedownload worden van deze site zijn mogelijk niet geëncrypteerd. Contacteer je systeembeheerder en vraag om SSL te installeren op deze site.';
$string['inherit'] = 'Overerven';
$string['lawfulbases'] = 'Wettelijke basis';
$string['lawfulbases_help'] = 'Selecteer minstens één optie die als wettelijke basis dient voor het verwerken van persoonlijke gegevens. Voor details over deze wettelijke basis, zie <a href="https://www.privacy-regulation.eu/nl/artikel-6-rechtmatigheid-van-de-verwerking-EU-AVG.htm" target="_blank">AVG Art. 6.1</a>';
$string['markcomplete'] = 'Markeer als voltooid';
$string['markedcomplete'] = 'Uw aanvraag is door de privacy officer als voltooid gemarkeerd.';
$string['message'] = 'Bericht';
$string['messagelabel'] = 'Bericht:';
$string['messageprovider:contactdataprotectionofficer'] = 'Gegevens verzoeken';
$string['messageprovider:datarequestprocessingresults'] = 'Data-aanvraag verwerkingsresultaten';
$string['messageprovider:notifyexceptions'] = 'Meldingen van uitzonderingen op gegevensaanvragen';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Mijn persoonlijke gegevensverzoeken';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} onderliggend';
$string['newrequest'] = 'Nieuw verzoek';
$string['noactivitiestoload'] = 'Geen activiteiten';
$string['noassignedroles'] = 'Geen toegewezen rollen in deze context';
$string['noblockstoload'] = 'Geen blokken';
$string['nocategories'] = 'Er zijn nog geen categorieën';
$string['nocoursestoload'] = 'Geen activiteiten';
$string['nodatarequests'] = 'Er zijn geen gegevensverzoeken';
$string['nodatarequestsmatchingfilter'] = 'Er zijn geen gegevensaanvragen die overeenkomen met deze filter';
$string['noexpiredcontexts'] = 'Dit contextniveau heeft geen gegevens waarvoor de bewaarperiode vervallen is.';
$string['nopersonaldatarequests'] = 'U hebt geen verzoeken om persoonlijke gegevens';
$string['nopurposes'] = 'Er zijn nog geen doelen';
$string['nosubjectaccessrequests'] = 'Er zijn geen gegevensverzoeken waarop u moet reageren';
$string['nosystemdefaults'] = 'Het doel en de categorie van deze website zijn nog niet gedefinieerd.';
$string['notset'] = 'Niet ingesteld (gebruik standaardwaarde)';
$string['notyetexpired'] = '{$a} (nog niet verlopen)';
$string['overrideinstances'] = 'Instanties opnieuw instellen met aangepaste waarden';
$string['pluginname'] = 'Data Privacy';
$string['pluginname_help'] = 'Data-privacy-plugin';
$string['pluginregistry'] = 'Plugin privacy-register';
$string['pluginregistrytitle'] = 'Plugin privacy-register compliance';
$string['privacy'] = 'Privacy';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'De filters die toegepast zijn op de pagina met gegevensaanvragen.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'Het aantal gegevensverzoeken dat de gebruiker het liefst op één pagina ziet';
$string['privacy:metadata:purpose'] = 'Informatie uit gegevensdoeleinden gemaakt voor deze site.';
$string['privacy:metadata:purpose:usermodified'] = 'De ID van de gebruiker die het doel heeft gewijzigd';
$string['privacy:metadata:request'] = 'Informatie van verzoeken om persoonlijke gegevens (toegang tot het onderwerp en verwijderingsverzoeken) gedaan voor deze website.';
$string['privacy:metadata:request:comments'] = 'Eventuele opmerkingen van gebruikers bij het verzoek.';
$string['privacy:metadata:request:dpocomment'] = 'Eventuele opmerkingen van de functionaris voor gegevensbescherming van deze website met betrekking tot het verzoek.';
$string['privacy:metadata:request:requestedby'] = 'De ID van de gebruiker die de aanvraag doet, indien deze is gedaan namens een andere gebruiker.';
$string['privacy:metadata:request:timecreated'] = 'Het tijdstempel dat aangeeft wanneer het verzoek door de gebruiker is gedaan.';
$string['privacy:metadata:request:userid'] = 'De ID van de gebruiker waartoe het verzoek behoort';
$string['privacyofficeronly'] = 'Alleen gebruikers aan wie een rol als privacymedewerker is toegewezen ({$a}) hebben toegang tot deze inhoud';
$string['privacyrequestexpiry'] = 'Dataverzoek verlopen';
$string['privacyrequestexpiry_desc'] = 'De tijd dat goedgekeurde gegevensverzoeken beschikbaar zullen zijn om te downloaden voordat ze verlopen. Als dit op nul gezet wordt, betekent dit dat er geen tijdslimiet is.';
$string['protected'] = 'Beschermd';
$string['protectedlabel'] = 'Het bewaren van deze gegevens heeft een hoger juridisch precedent over het verzoek van een gebruiker om te worden vergeten. Deze gegevens worden pas verwijderd nadat de bewaarperiode is verstreken.';
$string['purpose'] = 'Doel';
$string['purpose_help'] = 'Het doel beschrijft de reden voor het verwerken van de gegevens. Een nieuw doel kan toegevoegd worden of worden overgeërfd als dit is ingeschakeld, als het doel van een hogere context wordt toegepast. Contexten zijn (van laag naar hoog): Blokken > Activiteitsmodules > Cursussen > Cursuscategorieën > Gebruikers > Site.';
$string['purposecreated'] = 'Doel aangemaakt';
$string['purposedefault'] = 'Standaard doel';
$string['purposedefault_help'] = 'Het standaard doel is het doel dat toegepast wordt op elke nieuwe instantie. Als overerven is ingeschakeld, dan zal het doel van een hogere context toegepast worden. Contexten zijn (van laag naar hoog): Blokken > Activiteitsmodules > Cursussen > Cursuscategorieën > Gebruikers > Site.';
$string['purposeoverview'] = 'Een doel beschrijft het beoogde gebruik en bewaarbeleid voor opgeslagen gegevens. De basis voor het opslaan en bewaren van die gegevens wordt ook beschreven in het doel.';
$string['purposes'] = 'Doeleinden';
$string['purposeslist'] = 'Lijst van gegevensdoeleinden';
$string['purposeupdated'] = 'Doel bijgewerkt';
$string['replyto'] = 'Beantwoorden';
$string['requestactions'] = 'Acties';
$string['requestapproved'] = 'De aanvraag is goedgekeurd';
$string['requestby'] = 'Aangevraagd door';
$string['requestbydetail'] = 'Aangevraagd door:';
$string['requestcomments'] = 'Opmerkingen';
$string['requestcomments_help'] = 'In dit tekstvak kun je aanvullende informatie invoeren over je gegevensverzoek.';
$string['requestcreation'] = 'Aanvraag maken';
$string['requestdenied'] = 'De aanvraag is afgewezen';
$string['requestemailintro'] = 'U hebt een gegevensverzoek ontvangen:';
$string['requestfor'] = 'Gebruiker';
$string['requestmarkedcomplete'] = 'De aanvraag is als voltooid gemarkeerd';
$string['requestorigin'] = 'Site';
$string['requestsapproved'] = 'De verzoeken zijn goedgekeurd';
$string['requestsdenied'] = 'De verzoeken zijn geweigerd';
$string['requeststatus'] = 'Status';
$string['requestsubmitted'] = 'Je aanvraag is ingediend bij de  functionaris voor gegevensbescherming van deze website';
$string['requesttype'] = 'Type';
$string['requesttype_help'] = 'Selecteer de reden waarom je contact wilt opnemen met de  functionaris voor gegevensbescherming  van deze website. Wees je er van bewust dat het verwijderen van al je gegevens van deze site er ook zal voor zorgen dat je je niet meer kunt aanmelden.';
$string['requesttypedelete'] = 'Verwijder al mijn persoonlijke gegevens';
$string['requesttypedeleteshort'] = 'Verwijder';
$string['requesttypeexport'] = 'Exporteer al mijn persoonlijke gegevens';
$string['requesttypeexportshort'] = 'Exporteer';
$string['requesttypeothers'] = 'Algemene vraag';
$string['requesttypeothersshort'] = 'Bericht';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'Beschouw cursussen zonder einddatum als actief';
$string['requireallenddatesforuserdeletion_desc'] = 'Bij het berekenen van het verlopen van cursusaanmeldingen van gebruikers, worden verschillende factoren beschouwd:

* de laatste inlogtijd van de gebruiker wordt vergeleken met de bewaartermijn voor gebruikers; en
* of de gebruiker actief is ingeschreven voor cursussen.

Bij het controleren van de actieve inschrijving in een cursus, als de cursus geen einddatum heeft, wordt deze instelling gebruikt om te bepalen of die cursus als actief wordt beschouwd of niet.

Als de cursus geen einddatum heeft en deze instelling is ingeschakeld, kan de gebruiker niet worden verwijderd.';
$string['requiresattention'] = 'Nakijken.';
$string['requiresattentionexplanation'] = 'Deze plugin implementeert de Moodle privacy API niet. Als deze plugin persoonlijke gegevens bewaart, dan zullen die niet kunnen geëxporteerd of verwijderd worden via het privacy-systeem van Moodle.';
$string['resubmitrequest'] = 'Dien een {$a- type} aanvraag voor {$a->username} opnieuw in';
$string['resubmitrequestasnew'] = 'Dien opnieuw in als nieuw verzoek';
$string['resubmittedrequest'] = 'Het bestaande {$a->type} verzoek voor {$a->username} is geannuleerd en opnieuw ingediend.';
$string['resultdeleted'] = 'U hebt onlangs verzocht om uw account en persoonlijke gegevens in {$a} te laten verwijderen. Dit proces is voltooid en u kunt niet langer inloggen.';
$string['resultdownloadready'] = 'De kopie van je persoonlijke gegevens in {$a} die je onlangs hebt aangevraagd, is nu beschikbaar om te downloaden via volgende link.';
$string['retentionperiod'] = 'Bewaarperiode';
$string['retentionperiod_help'] = 'De bewaartermijn geeft de tijdsduur op hoelang gegevens bewaard moeten worden. Wanneer de bewaartermijn verstrekn is, dan worden de gegevens gemarkeerd en opgelijst voor verwijdering in afwachting van bevestiging door een beheerder.';
$string['retentionperiodnotdefined'] = 'Er is geen bewaarperiode gedefinieerd';
$string['retentionperiodzero'] = 'Geen bewaarperiode';
$string['reviewdata'] = 'Gegevens bekijken';
$string['role'] = 'Rol';
$string['role_help'] = 'Op welke rol je wil  dat deze overschrijving toegepast wordt.';
$string['roleoverride'] = 'Rol overschrijven';
$string['roleoverrideoverview'] = 'Het standaardbewaarbeleid kan worden opgeheven voor specifieke gebruikersrollen, zodat je een langer of korter bewaarbeleid kunt opgeven. Een gebruiker is pas verlopen als al zijn rollen zijn verlopen.';
$string['roleoverrides'] = 'Rol overschrijvingen';
$string['selectbulkaction'] = 'Selecteer een bulkactie.';
$string['selectdatarequests'] = 'Selecteer gegevensverzoeken.';
$string['selectuserdatarequest'] = 'Selecteer het gegevensverzoek {$a->requesttype} van {$a->username}.';
$string['send'] = 'Verstuur';
$string['sensitivedatareasons'] = 'Reden voor het verwerken van gevoelige persoonlijke gegevens';
$string['sensitivedatareasons_help'] = 'Selecteer één of meerdere redenen of doelen die het verwerken van gevoelige persoonlijke gegevens voor dit doel rechtvaardigen. Zie <a href="https://www.privacy-regulation.eu/nl/artikel-9-verwerking-van-bijzondere-categorieen-van-persoonsgegevens-EU-AVG.htm" target="_blank">AVG Art. 9.2</a';
$string['setdefaults'] = 'Stel de standaardwaarden in';
$string['showdataretentionsummary'] = 'Toon samenvatting gegevensretentie';
$string['showdataretentionsummary_desc'] = 'Indien ingeschakeld wordt er een link naar de samenvatting van dataretentie getoond onderaan de pagina en op de pagina van het gebruikersprofiel.';
$string['statusapproved'] = 'Goedgekeurd';
$string['statusawaitingapproval'] = 'In afwachting van goedkeuring';
$string['statuscancelled'] = 'Geannuleerd';
$string['statuscomplete'] = 'Compleet';
$string['statusdeleted'] = 'Verwijderd';
$string['statusdetail'] = 'Status:';
$string['statusexpired'] = 'Verlopen';
$string['statuspending'] = 'In afwachting';
$string['statusprocessing'] = 'Verwerken';
$string['statusready'] = 'Klaar om te downloaden';
$string['statusrejected'] = 'Afgekeurd';
$string['subjectscope'] = 'Omvang onderwerp';
$string['subjectscope_help'] = 'De onderwerpbereik lijst de rollen op die toegewezen kunnen worden in deze context.';
$string['summary'] = 'Samenvatting registerconfiguratie';
$string['systemconfignotsetwarning'] = 'Een site-doel en categorie zijn niet gedefinieerd. Wanneer deze niet zijn gedefinieerd, worden alle gegevens verwijderd bij het verwerken van verwijderingsverzoeken.';
$string['tobedeleted'] = 'Gegevens die moeten worden verwijderd';
$string['unexpiredrolewithretention'] = '{$a->retention} (niet verlopen)';
$string['user'] = 'Gebruiker';
$string['userlistexplanation'] = 'Deze plugin heeft de basis provider, maar moet ook de gebruikerslijst-provider implementeren voor volledige ondersteuning van de privacy-functionaliteit.';
$string['userlistnoncompliant'] = 'Gebruikerslijst-provider ontbreekt';
$string['viewrequest'] = 'Bekijk het verzoek';
$string['visible'] = 'Alles uitklappen';
