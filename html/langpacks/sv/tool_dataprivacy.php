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
 * Strings for component 'tool_dataprivacy', language 'sv', branch 'MOODLE_38_STABLE'
 *
 * @package   tool_dataprivacy
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = 'Aktiviteter och resurser';
$string['addcategory'] = 'Lägg till kategori';
$string['addnewdefaults'] = 'Lägg till nya standardvärden för modulen';
$string['addpurpose'] = 'Lägg till syfte';
$string['addroleoverride'] = 'Lägg till ny åsidosättning av roll';
$string['approve'] = 'Godkänn';
$string['approverequest'] = 'Godkänn begäran';
$string['automaticdeletionrequests'] = 'Skapa begäranden om automatisk databorttagning';
$string['automaticdeletionrequests_desc'] = 'Om aktiverad kommer en begäran om borttagning av data att skapas automatiskt för eventuella användarkonton som tas bort manuellt.';
$string['bulkapproverequests'] = 'Godkänn förfrågningar';
$string['bulkdenyrequests'] = 'Neka begäranden';
$string['cachedef_contextlevel'] = 'Ändamål för kontextnivåer och kategorier';
$string['cachedef_purpose'] = 'Ändamål med data';
$string['cachedef_purpose_overrides'] = 'Åsidosättande av syfte i integritetsverktyget';
$string['cancelrequest'] = 'Ta bort begäran';
$string['cancelrequestconfirmation'] = 'Vill du verkligen ta bort denna begäran?';
$string['cannotreset'] = 'Det gick inte att återställa denna begäran. Endast avvisade begäranden kan återställas.';
$string['categories'] = 'Kategorier';
$string['categorieslist'] = '';
$string['category'] = 'Kategori';
$string['categorycreated'] = 'Kategori skapad';
$string['categorydefault'] = 'Standardkategori';
$string['categorydefault_help'] = 'Standardkategorin är den datakategori som tillämpas på eventuella nya instanser. Om Ärv är markerat tillämpas datakategorin från en högre kontext. Kontexter är (från låg till hög): Block > Aktivitetsmoduler > Kurser > Kurskategorier > Användare > Webbplats.';
$string['category_help'] = 'En kategori i dataregistret beskriver en typ av data. En ny kategori kan läggas till, eller om "Ärv" är markerat tillämpas datakategorin från en högre kontext. Kontexter är (från lågt till högt): Block > Aktivitetsmoduler > Kurser > Kurskategorier > Webbplats.';
$string['categoryupdated'] = 'Kategori uppdaterad';
$string['close'] = 'Stäng';
$string['compliant'] = 'Förenlig';
$string['confirmapproval'] = 'Vill du verkligen godkänna denna begäran?';
$string['confirmbulkapproval'] = 'Vill du verkligen godkänna alla valda begäranden?';
$string['confirmbulkdenial'] = 'Vill du verkligen avslå alla valda begäranden?';
$string['confirmcompletion'] = 'Vill du verkligen markera denna användares förfrågan som komplett?';
$string['confirmcontextdeletion'] = 'Vill du verkligen bekräfta borttagningen av de valda kontextgen? Detta kommer också att radera alla användardata för respektive delkontexter.';
$string['confirmdenial'] = 'Vill du verkligen avslå denna begäran.';
$string['confirmrequestresubmit'] = 'Är du säker på att du vill avbryta den aktuella {$a->type}-begäran för {$a->username} och skicka den igen?';
$string['contactdataprotectionofficer'] = 'Kontakta Dataskyddsombud';
$string['contactdataprotectionofficer_desc'] = 'Om aktiverat kommer användarna att kunna kontakta Dataskyddsombudet och göra en databegäran via en länk på deras profilsida.';
$string['contactdpoviaprivacypolicy'] = 'Kontakta Dataskyddsombudet enligt beskrivningen i integritetspolicyn.';
$string['contextlevelname10'] = 'Webbplats';
$string['contextlevelname30'] = 'Användare';
$string['contextlevelname40'] = 'Kurskategorier';
$string['contextlevelname50'] = 'Kurser';
$string['contextlevelname70'] = 'Aktivitetsmoduler';
$string['contextlevelname80'] = 'Block';
$string['contextpurposecategorysaved'] = 'Syfte och kategori sparad.';
$string['createcategory'] = '';
$string['createdeletedatarequest'] = 'Skapa begäran om borttagning av data';
$string['createnewdatarequest'] = 'Skapa en ny databegäran';
$string['createpurpose'] = 'Skapa syfte';
$string['creationauto'] = 'Automatiskt';
$string['creationmanual'] = 'Manuellt';
$string['datadeletion'] = 'Borttagning av data';
$string['datadeletionpagehelp'] = 'Uppgifter som lagringstiden har löpt ut för anges här. Vänligen granska och bekräfta borttagning av data, som sedan kommer att utföras av den schemalagda aktiviteten "Delete expired contexts".';
$string['dataprivacy:downloadallrequests'] = 'Ladda ner exporterade data för alla';
$string['dataprivacy:downloadownrequest'] = 'Ladda ner din egna exporterade data';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = 'Begär borttagning av data för minderåriga';
$string['dataprivacy:makedatarequestsforchildren'] = 'Gör dataförfrågningar för minderåriga';
$string['dataprivacy:managedataregistry'] = 'Hantera dataregister';
$string['dataprivacy:managedatarequests'] = 'Bearbeta';
$string['dataprivacy:requestdelete'] = 'Begär borttagning av data för dig själv';
$string['dataprivacy:requestdeleteforotheruser'] = 'Begär borttagning av data för en annan användares räkning';
$string['dataregistry'] = '';
$string['dataregistryinfo'] = 'Dataregistret gör det möjligt för kategorier (typer av data) och syften (skälen för att behandla data) att ställas in för allt innehåll på webbplatsen - från användare och kurser ner till aktiviteter och block. För varje ändamål kan en kvarhållningsperiod fastställas. När en kvarhållningsperiod har löpt ut flaggas och listas data för radering, i väntan på administratörsbekräftelse.';
$string['datarequestcreatedforuser'] = '';
$string['datarequestcreatedfromscheduledtask'] = 'Automatiskt skapad från en schemalagd aktivitet (redan befintlig borttagen användare).';
$string['datarequestcreatedupondelete'] = 'Automatiskt skapad vid borttagning av användare.';
$string['datarequestemailsubject'] = 'Begäran om personuppgifter: {$a}';
$string['datarequests'] = 'Begäran om personuppgifter';
$string['dataretentionexplanation'] = 'Denna sammanfattning visar standardkategorierna och syftena för att behålla användardata. Vissa områden kan ha mer specifika kategorier och syften än de som anges här.';
$string['dataretentionsummary'] = 'Sammanfattning av kvarhållningsprinciper för data';
$string['datecomment'] = '[{$a->date}]:
 {$a->comment}';
$string['daterequested'] = 'Datum';
$string['daterequesteddetail'] = 'Datum:';
$string['defaultexpired'] = 'Data för alla användare';
$string['defaultexpiredexcept'] = 'Data för alla användare, utom de som innehar någon av följande roller:<br> {$a->unexpired}';
$string['defaultsinfo'] = 'Standardkategorier och syften tillämpas på alla nya och befintliga instanser där ett värde inte har angetts.';
$string['defaultssaved'] = 'Standardinställningar sparade';
$string['defaultswarninginfo'] = 'Varning: Om du ändrar dessa standardvärden kan det påverka kvarhållningsperioden för befintliga instanser.';
$string['defaultunexpired'] = 'Data enbart för användare som innehar någon av följande roller:<br> {$a->expired}';
$string['defaultunexpiredwithexceptions'] = 'Endast data för användare som har någon av följande roller:<br> {$a->expired} såvida de inte också innehar någon av följande roller:<br> {$a->unexpired}';
$string['deletecategory'] = 'Ta bort kategori';
$string['deletecategorytext'] = 'Är du säker på att du vill ta bort kategorin \'{$a}\'?';
$string['deletedefaults'] = 'Ta bort standardvärdena: {$a}';
$string['deletedefaultsconfirmation'] = 'Vill du ta bort standardkategori och -syfte för {$a}-modulen?';
$string['deleteexistingdeleteduserstask'] = 'Skapa borttagningsdatabegäran för redan befintliga borttagna användare';
$string['deleteexpiredcontextstask'] = 'Ta bort utgångna kontext';
$string['deleteexpireddatarequeststask'] = 'Radera exportfiler för utgångna databegäranden';
$string['deletemyaccount'] = 'Radera mitt konto';
$string['deletepurpose'] = 'Ta bort syfte';
$string['deletepurposetext'] = 'Vill du ta bort syftet \'{$a}\'?';
$string['deny'] = 'Avslå';
$string['denyrequest'] = 'Avslå begäran';
$string['deprecated'] = 'Föråldrad sekretessplugin';
$string['deprecatedexplanation'] = 'Denna plugin använder en gammal version av ett av integritetsgränssnitten och bör uppdateras.';
$string['download'] = 'Ladda ned';
$string['downloadexpireduser'] = 'Giltighetstiden för nedladdningen har löpt ut. Skicka in en ny förfrågan om du vill exportera dina personuppgifter.';
$string['dporolemapping_desc'] = 'Dataskyddsombudet kan hantera dataförfrågningar. Förmågan tool/dataprivacy:managedatarequests måste tillåtas för en roll för att den ska kunna visas som en roll av typen Dataskyddsombud.';
$string['duplicaterole'] = 'Rollen är redan angiven';
$string['editcategories'] = 'Redigera kategorier';
$string['editcategory'] = 'Redigera kategori';
$string['editdefaults'] = 'Redigera standardinställniongar: {$a}';
$string['editmoduledefaults'] = 'Redigera standardinställningar för modul';
$string['editpurpose'] = 'Redigera syfte';
$string['editpurposes'] = 'Redigera syften';
$string['effectiveretentionperiodcourse'] = '{$a} (efter kursens slutdatum)';
$string['effectiveretentionperioduser'] = '{$a} (efter sista tillfället som användaren loggat in på sajten)';
$string['emailsalutation'] = 'Hej {$a},';
$string['errorcannotrequestdeleteforother'] = 'Du har inte behörighet att skapa borttagningsbegäran för den här användaren.';
$string['errorcannotrequestdeleteforself'] = 'Du har inte behörighet att skapa borttagningsbegäran åt dig själv.';
$string['errorcontexthasunexpiredchildren'] = 'Kontexten "{$a}" har fortfarande underkontexter som ännu inte har löpt ut. Inga kontexter har flaggats för borttagning.';
$string['errorinvalidrequestcomments'] = 'Vänligen se till att din kommentar endast innehåller klartext.';
$string['errorinvalidrequestcreationmethod'] = 'Ogiltig metod för att skapa begäran!';
$string['errorinvalidrequeststatus'] = 'Ogiltig status för begäran!';
$string['errorinvalidrequesttype'] = 'Ogiltig begäranstyp!';
$string['errornocapabilitytorequestforothers'] = 'Användaren {$a->requestedby} har inte möjlighet att göra en databegäran för användaren {$a->userid}:s räkning.';
$string['errornoexpiredcontexts'] = 'Det finns inga utgångna kontexter att behandla.';
$string['errorrequestalreadyexists'] = 'Du har redan en begäran om personuppgifter som är under bearbetning.';
$string['errorrequestnotfound'] = 'Inga begäran om personuppgifter har hittats';
$string['errorrequestnotwaitingforapproval'] = 'Begäran väntar inte på godkännande. Antingen är den inte klar ännu, eller så har den redan behandlats.';
$string['errorsendingmessagetodpo'] = 'Ett fel inträffade när meddelande skickades till {$a}.';
$string['exceptionnotificationbody'] = '<p>Ett fel inträffade när <b>{$a->fullmethodname}</b> anropades. <br>Detta innebär att plugin <b>{$a->komponent}</b> inte slutförde behandlingen av data. Följande felinformation kan skickas vidare till plugin-utvecklaren:</p><pre>{$a->message}<br> {$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = 'Ett fel inträffade vid bearbetningen av sekretessinformation';
$string['expandplugin'] = 'Visa och dölj plugin.';
$string['expandplugintype'] = 'Visa och dölj plugin-typ.';
$string['expiredretentionperiodtask'] = 'Utgången kvarhållningsperiod';
$string['expiredrolewithretention'] = '{$a->retention} (Förfallen)';
$string['expiry'] = 'Förfallodatum';
$string['explanationtitle'] = 'Ikoner som används på denna sida och vad de betyder.';
$string['external'] = 'Externa';
$string['externalexplanation'] = 'En ytterligare plugin installerad på denna webbplats.';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = 'Kurs på förstasidan';
$string['gdpr_art_6_1_a_description'] = 'Den registrerade har lämnat sitt samtycke till att dennes personuppgifter behandlas för ett eller flera specifika ändamål.';
$string['gdpr_art_6_1_a_name'] = 'Samtycke (GDPR Art. 6.1(a))';
$string['gdpr_art_6_1_b_description'] = 'Behandlingen är nödvändig för att fullgöra ett avtal i vilket den registrerade är part eller för att vidta åtgärder på begäran av den registrerade innan ett sådant avtal ingås.';
$string['gdpr_art_6_1_b_name'] = 'Avtal (GDPR Art. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = 'Behandlingen är nödvändig för att fullgöra en rättslig förpliktelse som åvilar den personuppgiftsansvarige.';
$string['gdpr_art_6_1_c_name'] = 'Rättslig förpliktelse (GDPR Art 6.1(c))';
$string['gdpr_art_6_1_d_description'] = 'Behandlingen är nödvändig för att skydda intressen som är av grundläggande betydelse för den registrerade eller för en annan fysisk person.';
$string['gdpr_art_6_1_d_name'] = 'Grundläggande intressen (GDPR Art. 6.1(d))';
$string['gdpr_art_6_1_e_description'] = 'Behandlingen är nödvändig för att utföra en uppgift av allmänt intresse eller som ett led i den personuppgiftsansvariges myndighetsutövning.';
$string['gdpr_art_6_1_e_name'] = 'Allmänt intresse eller myndighetsutövning (GDPR Art. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = 'Behandlingen är nödvändig för ändamål som rör den personuppgiftsansvariges eller en tredje parts berättigade intressen, om inte den registrerades intressen eller grundläggande rättigheter och friheter väger tyngre och kräver skydd av personuppgifter, särskilt när den registrerade är ett barn.';
$string['gdpr_art_6_1_f_name'] = 'Berättigade intressen (GDPR Art. 6.1(f))';
$string['gdpr_art_9_2_a_description'] = 'Den registrerade har uttryckligen lämnat sitt samtycke till behandlingen av dessa personuppgifter för ett eller flera specifika ändamål, utom då unionsrätten eller medlemsstaternas nationella rätt föreskriver att förbudet i punkt 1 i GDPR, artikel 9 inte kan upphävas av den registrerade.';
$string['gdpr_art_9_2_a_name'] = 'Uttryckligt samtycke (GDPR Art. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = 'Behandlingen är nödvändig för att den personuppgiftsansvarige eller den registrerade ska kunna fullgöra sina skyldigheter och utöva sina särskilda rättigheter inom arbetsrätten och på områdena social trygghet och socialt skydd, i den omfattning detta är tillåtet enligt unionsrätten eller medlemsstaternas nationella rätt eller ett kollektivavtal som antagits med stöd av medlemsstaternas nationella rätt, där lämpliga skyddsåtgärder som säkerställer den registrerades grundläggande rättigheter och intressen fastställs.';
$string['gdpr_art_9_2_b_name'] = 'Arbets- och socialförsäkrings-/skyddsrättlag (GDPR Art. 9.2(b))';
$string['gdpr_art_9_2_c_description'] = 'Behandlingen är nödvändig för att skydda den registrerades eller någon annan fysisk persons grundläggande intressen när den registrerade är fysiskt eller rättsligt förhindrad att ge sitt samtycke.';
$string['gdpr_art_9_2_c_name'] = 'Skydd av grundläggande intressen (GDPR Art. 9.2(c))';
$string['gdpr_art_9_2_d_description'] = 'Behandlingen utförs inom ramen för berättigad verksamhet med lämpliga skyddsåtgärder hos en stiftelse, en förening eller ett annat icke vinstdrivande organ, som har ett politiskt, filosofiskt, religiöst eller fackligt syfte, förutsatt att behandlingen enbart rör sådana organs medlemmar eller tidigare medlemmar eller personer som på grund av organets ändamål har regelbunden kontakt med detta och personuppgifterna inte lämnas ut utanför det organet utan den registrerades samtycke.';
$string['gdpr_art_9_2_d_name'] = 'Legitim verksamhet avseende medlemmarna/nära kontakter hos en stiftelse, en sammanslutning eller annat icke vinstdrivande organ (GDPR Art. 9.2(d))';
$string['gdpr_art_9_2_e_description'] = 'Behandlingen rör personuppgifter som på ett tydligt sätt har offentliggjorts av den registrerade.';
$string['gdpr_art_9_2_e_name'] = 'Uppgifter som offentliggjorts av den registrerade (GDPR Art. 9.2(e))';
$string['gdpr_art_9_2_f_description'] = 'Behandlingen är nödvändig för att fastställa, göra gällande eller försvara rättsliga anspråk eller som en del av domstolarnas dömande verksamhet.';
$string['gdpr_art_9_2_f_name'] = 'Rättsliga anspråk och domstolsverksamhet  (GDPR Art. 9.2(f))';
$string['gdpr_art_9_2_g_description'] = 'Behandlingen är nödvändig av hänsyn till ett viktigt allmänt intresse, på grundval av unionsrätten eller medlemsstaternas nationella rätt, vilken ska stå i proportion till det eftersträvade syftet, vara förenligt med det väsentliga innehållet i rätten till dataskydd och innehålla bestämmelser om lämpliga och särskilda åtgärder för att säkerställa den registrerades grundläggande rättigheter och intressen.';
$string['gdpr_art_9_2_g_name'] = 'Viktigt allmänt intresse (GDPR Art. 9.2(g))';
$string['gdpr_art_9_2_h_description'] = 'Behandlingen är nödvändig av skäl som hör samman med förebyggande hälso- och sjukvård och yrkesmedicin, bedömningen av en arbetstagares arbetskapacitet, medicinska diagnoser, tillhandahållande av hälso- och sjukvård, behandling, social omsorg eller förvaltning av hälso- och sjukvårdstjänster och social omsorg och av deras system, på grundval av unionsrätten eller medlemsstaternas nationella rätt eller enligt avtal med yrkesverksamma på hälsoområdet och under förutsättning att de villkor och skyddsåtgärder som avses i punkt 3 i GDPR, artikel 9, är uppfyllda.';
$string['gdpr_art_9_2_h_name'] = 'Medicinska ändamål (GDPR Art. 9.2(h))';
$string['gdpr_art_9_2_i_description'] = 'Behandlingen är nödvändig av skäl av allmänt intresse på folkhälsoområdet, såsom behovet av att säkerställa ett skydd mot allvarliga gränsöverskridande hot mot hälsan eller säkerställa höga kvalitets- och säkerhetsnormer för vård och läkemedel eller medicintekniska produkter, på grundval av unionsrätten eller medlemsstaternas nationella rätt, där lämpliga och specifika åtgärder för att skydda den registrerades rättigheter och friheter fastställs, särskilt tystnadsplikt.';
$string['gdpr_art_9_2_i_name'] = 'Folkhälsa (GDPR Art. 9.2(i))';
$string['gdpr_art_9_2_j_description'] = 'Behandlingen är nödvändig för arkivändamål av allmänt intresse, vetenskapliga eller historiska forskningsändamål eller statistiska ändamål i enlighet med artikel 89.1, på grundval av unionsrätten eller medlemsstaternas nationella rätt, vilken ska stå i proportion till det eftersträvade syftet, vara förenligt med det väsentliga innehållet i rätten till dataskydd och innehålla bestämmelser om lämpliga och särskilda åtgärder för att säkerställa den registrerades grundläggande rättigheter och intressen.';
$string['gdpr_art_9_2_j_name'] = 'Allmänhetens intresse eller vetenskaplig/historisk/statistisk forskning (GDPR Art. 9.2(j))';
$string['hide'] = 'Dölj alla';
$string['httpwarning'] = 'Alla data som hämtas från den här webbplatsen kanske inte är krypterade. Kontakta din systemadministratör och begär att de installerar SSL på denna webbplats.';
$string['inherit'] = 'Ärv';
$string['lawfulbases'] = 'Rättslig grund';
$string['lawfulbases_help'] = 'Välj minst ett alternativ som kommer att tjäna som rättslig grund för behandling av personuppgifter. För information om dessa rättsliga grunder, se <a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">GDPR Art. 6.1</a>';
$string['markcomplete'] = 'Markera som slutförd';
$string['markedcomplete'] = 'Din förfrågan har markerats som slutförd av Dataskyddsombudet.';
$string['message'] = 'Meddelande';
$string['messagelabel'] = 'Meddelande:';
$string['messageprovider:contactdataprotectionofficer'] = 'Begäran om personuppgifter';
$string['messageprovider:datarequestprocessingresults'] = 'Resultat från bearbetning av dataförfrågan';
$string['messageprovider:notifyexceptions'] = 'Aviseringar om fel vid databearbetningar';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = 'Mina begäran om personuppgifter';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a} barn';
$string['newrequest'] = 'Ny begäran';
$string['noactivitiestoload'] = 'Inga aktiviteter';
$string['noassignedroles'] = 'Inga tilldelade roller i denna kontext';
$string['noblockstoload'] = 'Inga block';
$string['nocategories'] = 'Det finns inga kategorier ännu';
$string['nocoursestoload'] = 'Inga aktiviteter';
$string['nodatarequests'] = 'Det finns ingen begäran om personuppgifter';
$string['nodatarequestsmatchingfilter'] = 'Det finns inga dataförfrågningar som matchar det angivna filtret';
$string['noexpiredcontexts'] = 'Det finns ingen data för kontextnivån där kvarhållningsperioden har förfallit.';
$string['nopersonaldatarequests'] = 'Du har inte begäran om personuppgifter';
$string['nopurposes'] = 'Det finns inga syften ännu';
$string['nosubjectaccessrequests'] = 'Det finns inga begäran om personuppgifter som du behöver bearbeta';
$string['nosystemdefaults'] = 'Syfte och kategori för webbplatsen har inte definierats ännu.';
$string['notset'] = 'Inte angivet (använd standardvärdet)';
$string['notyetexpired'] = '{$a} (ännu inte förfallit)';
$string['overrideinstances'] = 'Återställ instanserna med anpassade värden';
$string['pluginname'] = 'Sekretess';
$string['pluginname_help'] = 'Sekretess-plugin';
$string['pluginregistry'] = 'Sekretess hos plugin-moduler';
$string['pluginregistrytitle'] = 'Sekretessefterlevnad hos installerade plugin-moduler';
$string['privacy'] = 'Sekretess';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = 'Filter som för närvarande valts för sidan för databegäran.';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = 'Antal dataförfrågningar användaren vill se på sidan';
$string['privacy:metadata:request'] = 'Information från personuppgiftsförfrågningar (användaråtkomst och raderingsbegäranden) som gjorts för den här webbplatsen.';
$string['privacy:metadata:request:comments'] = 'Alla användarkommentarer som följer med denna förfrågan.';
$string['privacy:metadata:request:dpocomment'] = 'Kommentarer från Dataskyddsombudet rörande förfrågan.';
$string['privacy:metadata:request:requestedby'] = 'ID för den användare som gör begäran, om det görs på uppdrag av en annan användare.';
$string['privacy:metadata:request:timecreated'] = 'Tidsstämpel som visar när användaren gjorde förfrågan.';
$string['privacy:metadata:request:userid'] = 'ID för användare förfrågan tillhör.';
$string['privacyofficeronly'] = 'Endast användare som tilldelats Dataskyddsombudsrollen ({$a}) kan nå detta innehåll.';
$string['privacyrequestexpiry'] = 'Personuppgiftsförfrågan upphör';
$string['privacyrequestexpiry_desc'] = 'Den tid som godkända personuppgiftsförfråganingar kommer att vara tillgängliga för nedladdning innan den löper ut. Om den är satt till noll, finns det ingen tidsgräns.';
$string['protected'] = 'Skyddad';
$string['protectedlabel'] = 'Den rättsliga grunden för kvarhållning av dessa uppgifter har företrädesrätt framför en användares begäran att bli bortglömd. Dessa data kommer endast att tas bort när kvarhållningsperioden löpt ut.';
$string['purpose'] = '';
$string['purposecreated'] = '';
$string['purposedefault'] = 'Standardsyfte';
$string['purposedefault_help'] = 'Standardsyftet är syftet som tillämpas på eventuella nya instanser. Om "Ärv" är valt tillämpas syftet från en högre kontext. Kontexter är (från låg till hög): Block > Aktivitetsmoduler > Kurser > Kurskategorier > Användare > Webbplats.';
$string['purpose_help'] = 'Syftet beskriver orsaken till behandlingen av personuppgifterna. Ett nytt syfte kan läggas till, eller om "Ärv" är valt, tillämpas syftet från en högre kontext. Kontexter är (från låg till hög): Block > Aktivitetsmoduler > Kurser > Kurskategorier > Användare > Webbplats.';
$string['purposeoverview'] = 'Ett syfte beskriver det avsedda användandet och kvarhållningsprincipen för den data som lagras. Dessutom anges bakgrunden till användandet och kvarhållningen i beskrivningen av syftet.';
$string['purposes'] = '';
$string['purposeslist'] = 'Syften för personuppgifter';
$string['purposeupdated'] = 'Syfte uppdaterat';
$string['replyto'] = 'Svara';
$string['requestactions'] = 'Åtgärder';
$string['requestapproved'] = 'Begäran har godkänts';
$string['requestby'] = 'Begärt av';
$string['requestbydetail'] = 'Begärt av:';
$string['requestcomments'] = 'Kommentar';
$string['requestcomments_help'] = 'Denna ruta kan användas för att ange ytterligare detaljer för din förfrågan om personuppgifter.';
$string['requestcreation'] = 'Skapande';
$string['requestdenied'] = 'Begäran har avslagits';
$string['requestemailintro'] = 'Du har fått en personuppgiftsförfrågan:';
$string['requestfor'] = 'Användare';
$string['requestmarkedcomplete'] = 'Förfrågan har markerats som slutförd';
$string['requestorigin'] = 'Webbplats';
$string['requestsapproved'] = 'Förfrågningarna har godkänts';
$string['requestsdenied'] = 'Förfrågningarna har avslagits';
$string['requeststatus'] = 'Status';
$string['requestsubmitted'] = 'Din begäran har skickats till sajtens personuppgiftsansvarige';
$string['requesttype'] = 'Typ';
$string['requesttypedelete'] = 'Radering av alla mina personuppgifter';
$string['requesttypedeleteshort'] = 'Radera';
$string['requesttypeexport'] = 'Export av alla mina personuppgifter';
$string['requesttypeexportshort'] = 'Exportera';
$string['requesttype_help'] = 'Välj en anledning till att du vill kontakta sajtens personuppgiftsansvarige';
$string['requesttypeothers'] = 'Allmän förfrågan';
$string['requesttypeothersshort'] = 'Övrigt';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = 'Betrakta kurser utan slutdatum som aktiva';
$string['requireallenddatesforuserdeletion_desc'] = 'Vid beräkning av användarens förfallande beaktas flera faktorer:

* användarens senaste inloggningstid jämförs mot kvarhållningsperioden för användare; och
* om användaren är registrerad vid några kurser.

Vid kontroll av den registreringen till en kurs, om kursen inte har något slutdatum, då används denna inställning för att avgöra om den kursen anses aktiv eller inte.

Om kursen inte har något slutdatum, och den här inställningen är aktiverad, kan användaren inte tas bort.';
$string['requiresattention'] = 'Kräver uppmärksamhet.';
$string['requiresattentionexplanation'] = 'Denna plugin implementerar inte Moodles sekretess-API. Om denna plugin lagrar några personuppgifter kommer de inte att kunna exporteras eller raderas med hjälp av Moodles integritetssystem.';
$string['resubmitrequest'] = 'Skicka om {$a->type}-begäran för {$a->username}';
$string['resubmitrequestasnew'] = 'Skicka om som ny begäran';
$string['resubmittedrequest'] = 'Den befintliga {$a->type}-begäran för {$a->username} avbröts och skickades in på nytt';
$string['resultdeleted'] = 'Du har begärt borttagning av dina personuppgifter i {$a}. Detta har genomförts och du kommer inte längre att kunna logga in.';
$string['resultdownloadready'] = 'Den kopia av dina personuppgifter i {$a} som du har begärt är nu klar. Klicka på länken nedan för att komma till download-sidan.';
$string['retentionperiod'] = 'Kvarhållningsperiod';
$string['retentionperiod_help'] = 'Kvarhållningsperioden anger hur lång tid som data ska behållas. När kvarhållningsperioden har gått ut flaggas data och listas för radering i väntan på administratörsbekräftelse.';
$string['retentionperiodnotdefined'] = 'Ingen kvarhållningsperiod angavs';
$string['retentionperiodzero'] = 'Ingen kvarhållningsperiod';
$string['reviewdata'] = 'Granska data';
$string['role'] = 'Roll';
$string['role_help'] = 'Rollen som åsidosättandet gäller för.';
$string['roleoverride'] = 'Åsidosättande av roll';
$string['roleoverrideoverview'] = 'Standardprincipen för kvarhållande kan åsidosättas för specifika användarroller så att du kan ange en längre, eller en kortare, kvarhållningsprincip. En användare har bara förfallit då alla deras roller också förfallit.';
$string['roleoverrides'] = 'Åsidosatta roller';
$string['selectbulkaction'] = 'Välj en massåtgärd';
$string['selectdatarequests'] = 'Välj personuppgiftsförfrågningar';
$string['selectuserdatarequest'] = 'Välj {$a->username}\'s {$a->requesttype}-begäran.';
$string['send'] = 'Skicka';
$string['sensitivedatareasons'] = 'Orsaker till hantering av känslig personinformation';
$string['sensitivedatareasons_help'] = 'Välj ett eller flera tillämpliga skäl som undantar förbudet mot behandling av känsliga personuppgifter som är knutna till detta ändamål. För mer information, se <a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">GDPR Art. 9.2</a>';
$string['setdefaults'] = 'Ange standardvärden';
$string['showdataretentionsummary'] = 'Visa länk till kvarhållningsprinciper';
$string['showdataretentionsummary_desc'] = 'Om aktiv visas länken till webbplatsens kvarhållningsprinciper';
$string['statusapproved'] = 'Godkänd';
$string['statusawaitingapproval'] = 'Inväntar godkännande';
$string['statuscancelled'] = 'Avbruten';
$string['statuscomplete'] = 'Färdigt';
$string['statusdeleted'] = 'Borttagen';
$string['statusdetail'] = 'Status:';
$string['statusexpired'] = 'Utgången';
$string['statuspending'] = 'Väntande';
$string['statuspreprocessing'] = 'Förbehandlar';
$string['statusprocessing'] = 'Behandlar';
$string['statusready'] = 'Nedladdning klar';
$string['statusrejected'] = 'Avvisad';
$string['summary'] = 'Översikt över registerkonfiguration';
$string['systemconfignotsetwarning'] = 'Syfte och kategori för webbplatsen har inte angivits. Om dessa inte är angivna kommer all data tas bort i samband med begäranden om borttagning.';
$string['tobedeleted'] = 'Data som kommer tas bort';
$string['unexpiredrolewithretention'] = '{$a->retention} (Ej förfallen)';
$string['user'] = 'Användare';
$string['userlistexplanation'] = 'Denna plugin implementerar endast grundläggande funktionalitet när det gäller hantering av personuppgifter. Den skulle också behöva använda sig av en "Userlist provider" för att fullt ut stödja sekretessfunktionerna i Moodle.';
$string['userlistnoncompliant'] = 'User list-provider saknas';
$string['viewrequest'] = 'Visa begäran';
$string['visible'] = 'Utöka alla';
