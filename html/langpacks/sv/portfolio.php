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
 * Strings for component 'portfolio', language 'sv', version '4.1'.
 *
 * @package     portfolio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = 'Lös aktiv export';
$string['activeportfolios'] = 'Tillgängliga portföljer';
$string['addalltoportfolio'] = 'Exportera allt till portfölj';
$string['addnewportfolio'] = 'Lägg till ny portfölj';
$string['addtoportfolio'] = 'Exportera till portfölj';
$string['alreadyalt'] = 'Exporterar redan. Vänligen klicka för att lösa denna överföring';
$string['alreadyexporting'] = 'Du har redan en pågående portföljexport i den här sessionen. Innan du fortsätter måste du antingen slutföra den här exporten, eller avbryta den. Vill du fortsätta med exporten? (Nej kommer att avbryta den)';
$string['availableformats'] = 'Tillgängliga exportformat';
$string['callbackclassinvalid'] = 'Den klass \'callback\' som angavs var ogiltig eller inte del av hierarkin för \'portfolio_caller\'';
$string['callercouldnotpackage'] = 'Det gick inte att packa upp dina data för export: det ursprungliga felet var {$a}';
$string['cannotsetvisible'] = 'Det går inte att ställa in det här till synlig - plugin-programmet har inaktiverats helt p g a felaktig konfiguration';
$string['commonportfoliosettings'] = 'Generella portföljinställningar';
$string['commonsettingsdesc'] = '<p>Om en överföring anses ta godtagbar eller lång tid beror på om användaren kan vänta eller inte tills överföringen är klar.</p><p>Storlekar upp till värdet för godtagbar tid händer direkt utan att användaren tillfrågas, och godtagbar resp. lång överföringstid innebär att de erbjuds möjligheten men varnas för att det kan ta lite tid.</p><p>Dessutom kan vissa portföljpkugins ignorera denna inställning totalt och tvinga alla överföringar att ställas i kö.</p>';
$string['configexport'] = 'Konfigurera exporterade data';
$string['configplugin'] = 'Konfigurera portfölj-plugin';
$string['configure'] = 'Konfigurera';
$string['confirmcancel'] = 'Är du säker på att du vill avbryta den här exporten?';
$string['confirmexport'] = 'Vänligen bekräfta den här exporten';
$string['confirmsummary'] = 'Sammanfattning av din export';
$string['continuetoportfolio'] = 'Fortsätt till din portfölj';
$string['deleteportfolio'] = 'Ta bort portföljinstans';
$string['destination'] = 'Mål';
$string['disabled'] = 'Export av portföljer är inte aktiverade på den här webbplatsen';
$string['disabledinstance'] = 'Inaktiverad';
$string['displayarea'] = 'Område för export';
$string['displayexpiry'] = 'Förfallotid för överföring';
$string['displayinfo'] = 'Info om export';
$string['dontwait'] = 'Vänta inte';
$string['enabled'] = 'Aktivera portföljer';
$string['enableddesc'] = 'Om det här alternativet är aktiverat kan användare exportera innehåll, till exempel foruminlägg och uppgiftsinlämningar, till externa portföljer eller HTML-sidor.';
$string['err_uniquename'] = 'Namnet på portföljen måste vara unikt (per plugin-program)';
$string['exportalreadyfinished'] = 'Portföljexport slutförd!';
$string['exportalreadyfinisheddesc'] = 'Portföljexport slutförd!';
$string['exportcomplete'] = 'Portföljexport slutförd!';
$string['exportedpreviously'] = 'Tidigare exporter';
$string['exportexceptionnoexporter'] = 'Ett <tt>portfolio_export_exception</tt> kastades med en aktiv session men utan exportörsobjekt';
$string['exportexpired'] = 'Exporten av portföljen förföll';
$string['exportexpireddesc'] = 'Du försökte upprepa exporten av viss information, eller starta en tom export. För att göra det på rätt sätt bör du gå tillbaka till den ursprungliga platsen och börja om igen. Detta händer ibland om du använder bakåtknappen efter att en export har slutförts, eller genom att bokmärka en ogiltig url.';
$string['exporting'] = 'Exporterar till portfölj';
$string['exportingcontentfrom'] = 'Exporterar innehåll från {$a}';
$string['exportingcontentto'] = 'Exporterar innehåll till {$a}';
$string['exportqueued'] = 'Portföljexporten har lagts till i kön och väntar på att överföras';
$string['exportqueuedforced'] = 'Portföljexporten har lagts till i kön och väntar på att överföras (mottagarsystemet kräver köade överföringar)';
$string['failedtopackage'] = 'Det gick inte att hitta filer till paketet';
$string['failedtosendpackage'] = 'Kunde inte skicka din data till vald portföljmottagare: det ursprungliga felet var {$a}';
$string['filedenied'] = 'Tillträdet nekas till denna fil';
$string['filenotfound'] = 'Det gick inte att hitta filen';
$string['fileoutputnotsupported'] = 'Omskrivning av filresultatet stöds inte för detta format';
$string['format_document'] = 'Dokument';
$string['format_file'] = 'Fil';
$string['format_image'] = 'Bild';
$string['format_leap2a'] = 'Leap2A portföljformat';
$string['format_mbkp'] = 'Moodle-format';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'Presentation';
$string['format_richhtml'] = 'HTML med bilagor';
$string['format_spreadsheet'] = 'Kalkylblad';
$string['format_text'] = 'Oformaterad text';
$string['format_video'] = 'Video';
$string['highdbsizethreshold'] = 'Hög överföring dbstorlek';
$string['highdbsizethresholddesc'] = 'Antal db poster vilka kommer att anses ta lång tid att överföra';
$string['highfilesizethreshold'] = 'Filstorlek hög överföringshastighet';
$string['highfilesizethresholddesc'] = 'Filstorlekar över detta tröskelvärde kommer att anses ta lång tid att överföra';
$string['insanebody'] = 'Hej! Du får detta meddelande eftersom du är administratör för {$a->sitename}. Någon portföljplugin instans har automatiskt inaktiverats på grund av felkonfiguration. Detta innebär att användare för närvarande inte kan exportera innehåll till dessa portföljer. Listan över portföljinstanser som har inaktiverats är: {$a->textlist} Detta bör åtgärdas snarast möjligt genom att besöka {$a->fixurl}.';
$string['insanebodyhtml'] = '<p>Hej! Du får detta meddelande eftersom du är administratör för {$a->sitename}.</p> <p>Någon instans av portföljplugin har automatiskt inaktiverats på grund av felkonfiguration. Detta innebär att användare för närvarande inte kan exportera innehåll till dessa portföljer.</p> <p>Listan över instanser av portföljplugins som har inaktiverats är:</p> {$a->htmllist} <p>Detta bör åtgärdas snarast möjligt genom att besöka <a href="{$a->fixurl}">sidorna för konfiguration av portföljer</a></p>';
$string['insanebodysmall'] = 'Hej! Du får detta meddelande eftersom du är administratör för {$a->sitename}. Någon instans av portfölj plugin har automatiskt inaktiverats på grund av felkonfiguration. Detta innebär att användare för närvarande inte kan exportera innehåll till dessa portföljer. Detta bör åtgärdas snarast möjligt genom att besöka {$a->fixurl}.';
$string['insanesubject'] = 'Vissa portföljinstanser har inaktiverats automatiskt';
$string['instancedeleted'] = 'Portfölj borttagen';
$string['instanceismisconfigured'] = 'Portföljinstansen är felkonfigurerad, hoppar över. Felet var: {$a}';
$string['instancenotdelete'] = 'Kunde inte ta bort portfölj';
$string['instancenotsaved'] = 'Kunde inte spara portfölj';
$string['instancesaved'] = 'Portfölj sparad';
$string['intro'] = 'Innehåll som du har skapat, till exempel inlämningsuppgifter, foruminlägg och blogginlägg, kan exporteras till en portfölj eller laddas ner. <br> Alla portföljer som du inte vill använda kan döljas så att den inte är listad som ett alternativ att exportera innehåll till.';
$string['invalidaddformat'] = 'Ogiltigt lägg till-format skickades till portfolio_add_button. ({$a}) Måste vara ett av PORTFOLIO_ADD_XXX';
$string['invalidbuttonproperty'] = 'Kunde inte hitta denna egenskap ({$a}) för portfolio_button';
$string['invalidconfigproperty'] = 'Kunde inte hitta den konfigureringsegenskapen ({$a->property} för {$a->class})';
$string['invalidexportproperty'] = 'Kunde inte hitta den egenskapen för exportkonfigration ({$a->property} för {$a->class})';
$string['invalidfileareaargs'] = 'Ogiltiga filområdesargument skickades till set_file_and_format_data - måste innehålla contextid, component, filearea och itemid';
$string['invalidformat'] = 'Något exporterar ett felaktigt format, {$a}';
$string['invalidinstance'] = 'Kunde inte hitta denna portföljinstans';
$string['invalidpreparepackagefile'] = 'Ogiltigt anrop till prepare_package_file - antingen måste enstaka eller flera filer anges';
$string['invalidproperty'] = 'Kunde inte hitta denna egenskap ({$a->property} för {$a->class})';
$string['invalidsha1file'] = 'Ogiltigt anrop till get_sha1_file - antingen måste enstaka eller flera filer anges';
$string['invalidtempid'] = 'Felaktigt export id. Det kanske är för gammalt.';
$string['invaliduserproperty'] = 'Kunde inte hitta denna egenskap för användarkonfiguration ({$a->property} för {$a->class})';
$string['leap2a_emptyselection'] = 'Nödvändigt värde ej valt';
$string['leap2a_entryalreadyexists'] = 'Du försökte lägga till en Leap2A post med ett id ({$a}) som redan existerar i denna feed';
$string['leap2a_feedtitle'] = 'Leap2A export från Moodle för {$a}';
$string['leap2a_filecontent'] = 'Försökte ange innehållet i en Leap2A post till en fil istället för att använda underklassen file';
$string['leap2a_invalidentryfield'] = 'Du försökte ange ett inmatningsfält som inte existerade ({$a}) eller som inte kan anges direkt directly';
$string['leap2a_invalidentryid'] = 'Du försökte komma åt en post med ett id som inte finns ({$a})';
$string['leap2a_missingfield'] = 'Nödvändigt Leap2A inmatningsfält {$a} saknas';
$string['leap2a_nonexistantlink'] = 'En Leap2A post ({$a->from}) försökte länka till en post som inte finns ({$a->to}) med rel {$a->rel}';
$string['leap2a_overwritingselection'] = 'Skriver över orginaltypen för en post ({$a}) till val i make_selection';
$string['leap2a_selflink'] = 'En Leap2A post ({$a->id}) försökte länka till sig själv med rel {$a->rel}';
$string['logs'] = 'Överföringsloggar';
$string['logsummary'] = 'Tidigare framgångsrika överföringar';
$string['manageportfolios'] = 'Hantera portföljer';
$string['manageyourportfolios'] = 'Hantera dina portföljer';
$string['mimecheckfail'] = 'Portföljpluginen {$a->plugin} stödjer inte denna MIME-typ {$a->mimetype}';
$string['missingcallbackarg'] = 'Saknat callback argument {$a->arg} för klass {$a->class}';
$string['moderatedbsizethreshold'] = 'Dbstorlek för måttlig överföringshastighet';
$string['moderatedbsizethresholddesc'] = 'Antal db poster som kommer att anses ta måttlig tid att överföra';
$string['moderatefilesizethreshold'] = 'Filstorlek för måttlig överföringshastighet';
$string['moderatefilesizethresholddesc'] = 'Filstorlekar över detta tröskelvärde kommer att anses ta måttlig tid att överföra';
$string['multipleinstancesdisallowed'] = 'Försöker skapa en ny instans av en plugin som inte tillåter multipla instanser ({$a})';
$string['mustsetcallbackoptions'] = 'Du måste ange callback-alternativet, antingen i <code>portfolio_add_button</code>-konstruktorn eller via <code>set_callback_options</code>-metoden';
$string['noavailableplugins'] = 'Tyvärr, det finns inga tillgängliga portföljer för dig att exportera till';
$string['nocallbackclass'] = 'Kunde inte hitta klassen för callback som ska användas ({$a})';
$string['nocallbackcomponent'] = 'Det gick inte att hitta den angivna komponenten {$a}.';
$string['nocallbackfile'] = 'Något i modulen du försöker exportera från är fel - kunde inte hitta en lämplig portföljfil.';
$string['noclassbeforeformats'] = 'Du måste ställa in callback klassen före anrop av set_formats in portfolio_button';
$string['nocommonformats'] = 'Inga vanliga format mellan en tillgänglig portfölj-plugin och den anropande platsen {$a->location} (anroparen stödjer {$a->formats})';
$string['noinstanceyet'] = 'Ännu ej valt';
$string['nologs'] = 'Det finns inga loggar att visa!';
$string['nomultipleexports'] = 'Tyvärr, exportmålet för portföljen ({$a->plugin}) stödjer inte multipla exporter på samma gång. Vänligen <a href="{$a->link}">avsluta nuvarande först</a> och försök sedan igen';
$string['nonprimative'] = 'Ett icke primitivt värde skickades som ett callback argument till portfolio_add_button. Kan inte fortsätta. Nyckel var {$a->key} och värdet var {$a->value}';
$string['nopermissions'] = 'Du har tyvärr inte tillräckliga rättigheter för att exportera filer från den här platsen';
$string['notexportable'] = 'Den typ av innehåll du försöker exportera är tyvärr inte exporterbart';
$string['notimplemented'] = 'Du försöker exportera innehåll i något format som tyvärr ännu inte är implementerat ({$a})';
$string['notyetselected'] = 'Ännu ej vald';
$string['notyours'] = 'Du försöker återuppta en portfolioexport som inte tillhör dig!';
$string['nouploaddirectory'] = 'Kunde inte skapa temporär katalog att skapa datapaketet i';
$string['off'] = 'Aktiverad men dold';
$string['on'] = 'Aktiverad och synlig';
$string['plugin'] = 'Pluginmodul för portfölj';
$string['plugincouldnotpackage'] = 'Misslyckades med att packa din data för export: ursprungligt fel var {$a}';
$string['pluginismisconfigured'] = 'Portföljpluginen är felkonfigurerad, hoppar över. Felet var: {$a}';
$string['portfolio'] = 'Portfölj';
$string['portfolios'] = 'Portföljer';
$string['privacy:metadata'] = 'Portföljundersystemet fungerar som en kanal och skickar förfrågningar från plugins till de olika portföljpluginerna.';
$string['privacy:metadata:instance'] = 'Portföljidentifierare';
$string['privacy:metadata:instancesummary'] = 'Lagrar data om portföljinstanser och -inställningar.';
$string['privacy:metadata:name'] = 'Inställningsnamn';
$string['privacy:metadata:portfolio_log'] = 'Logg över portföljöverföringar (används för att senare söka efter dubbletter)';
$string['privacy:metadata:portfolio_log:caller_class'] = 'Namn på den klass som används för att skapa överföringen';
$string['privacy:metadata:portfolio_log:caller_component'] = 'Komponentnamn som ansvarar för exporten';
$string['privacy:metadata:portfolio_log:time'] = 'Överföringstid (när det gäller en köad överföring är det den tid då den faktiska överföringen kördes, inte när användaren startade den)';
$string['privacy:metadata:portfolio_log:userid'] = 'ID för användare som exporterade innehåll';
$string['privacy:metadata:portfolio_tempdata'] = 'Lagrar tillfälliga data för portföljexport.';
$string['privacy:metadata:portfolio_tempdata:data'] = 'Exportdata';
$string['privacy:metadata:portfolio_tempdata:expirytime'] = 'Tid då den här posten upphör att gälla';
$string['privacy:metadata:portfolio_tempdata:instance'] = 'Portfölj plugin-instans som används';
$string['privacy:metadata:portfolio_tempdata:userid'] = 'Användare som utför exporten';
$string['privacy:metadata:userid'] = 'Användar-ID';
$string['privacy:metadata:value'] = 'Värdet för inställningen';
$string['privacy:path'] = 'Portföljinstanser';
$string['queuesummary'] = 'Aktuella köade överföringar';
$string['returntowhereyouwere'] = 'Återgå till där du var';
$string['save'] = 'Spara';
$string['selectedformat'] = 'Valt exportformat';
$string['selectedwait'] = 'Valde att vänta?';
$string['selectplugin'] = 'Välj mål';
$string['showhide'] = 'Visa / Dölj';
$string['singleinstancenomultiallowed'] = 'Endast en instans av portfölj plugin är tillgänglig och den stödjer inte multipla exporter per session. Det finns redan en aktiv export i sessionen som använder denna plugin!';
$string['somepluginsdisabled'] = 'Vissa portfölj pluginmoduler har inaktiverats på grund av att de är felkonfigurerade eller är beroende av något annat som är:';
$string['sure'] = 'Är du säker på att du vill ta bort \'{$a}? Detta kan inte ångras.';
$string['thirdpartyexception'] = 'Ett undantag från tredje part kastades under portföljexporten ({$a}). Fångat och återkastat, men detta bör verkligen fixas';
$string['transfertime'] = 'Överföringstiden';
$string['unknownplugin'] = 'Okänd (kan ha tagits bort av en administratör)';
$string['wait'] = 'Vänta';
$string['wanttowait_high'] = 'Det rekommenderas inte att du väntar på att denna överföring ska slutföras, men du kan göra så om du är säker på vad du gör';
$string['wanttowait_moderate'] = 'Vill du vänta på denna överföring? Det kan ta några minuter';
