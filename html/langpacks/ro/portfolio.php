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
 * Strings for component 'portfolio', language 'ro', version '4.1'.
 *
 * @package     portfolio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeexport'] = 'Soluționați exportul activ';
$string['activeportfolios'] = 'Portofolii disponibile';
$string['addalltoportfolio'] = 'Exportă tot către portofoliu';
$string['addnewportfolio'] = 'Adaugă un nou portofoliu';
$string['addtoportfolio'] = 'Export către portofoliu';
$string['alreadyalt'] = 'Se exportă deja - vă rugăm să dați click aici pentru a rezolva acest transfer';
$string['alreadyexporting'] = 'Aveți deja un export de portofoliu activ în această sesiune. Înainte de a continua, trebuie fie să încheiați acest export, fie să îl anulați. Doriți să continuați? (Dcaă bifați Nu, va fi anulat)';
$string['availableformats'] = 'Formate de export disponibile';
$string['callbackclassinvalid'] = 'Callback class specificat a fost nevalid sau nu este o parte a ierarhiei portfolio_caller';
$string['callercouldnotpackage'] = 'Nu s-a putut realiza pachetul cu datele dumneavoastră pentru export: eroarea originală a fost  {$a}';
$string['cannotsetvisible'] = 'Nu se poate seta pentru a fi vizibil - plugin-ul a fost complet dezactivat din cauza unei erori de configurare';
$string['commonportfoliosettings'] = 'Setările comune ale portofoliului';
$string['commonsettingsdesc'] = '<p>Dacă un transfer este considerat ca fiind "moderat" sau "ridicat" timpul necesar se modifică în funcție de disponibilitatea utilizatorului de a aștepta ca transferul să fie finalizat sau nu.</p><p>Dimensiunile până la pragul "Moderat "permit transferul imediat, fără ca utilizatorul să fie întrebat, iar "Moderat" și                  "Transferuri mari" oferă opțiuni, dar și avertizează că ar putea să dureze ceva timp.</p><p> În plus, unele plugin-uri de portofoliu ar putea ignora complet această opțiune și să forțeze toate transferurile care urmează să fie puse în așteptare. </p>';
$string['configexport'] = 'Configurare date exportate';
$string['configplugin'] = 'Configurare plugin portofoliu';
$string['configure'] = 'Configurează';
$string['confirmcancel'] = 'Sunteți sigur că doriți să anulați acest export?';
$string['confirmexport'] = 'Vă rugăm să confirmați exportul';
$string['confirmsummary'] = 'Rezumatul exportului dumeavoastră';
$string['continuetoportfolio'] = 'Continuați către portofoliul dumneavoastră';
$string['deleteportfolio'] = 'Ștergeți exemplul de portofoliu';
$string['destination'] = 'Destinația';
$string['disabled'] = 'Ne pare rău, dar exporturile portofoliului nu sunt active în acest site';
$string['disabledinstance'] = 'Dezactivat';
$string['displayarea'] = 'Zona de export';
$string['displayexpiry'] = 'Timp de export expirat';
$string['displayinfo'] = 'Informații export';
$string['dontwait'] = 'Nu așteptați';
$string['enabled'] = 'Activați portofolii';
$string['enableddesc'] = 'Dacă este activat, utilizatorii pot exporta conținut, cum ar fi posturi pe forum și asignări către portofolii externe sau pagini HTML.';
$string['err_uniquename'] = 'Numele portofoliului trebuie să fie unic (pe plugin)';
$string['exportalreadyfinished'] = 'Export portofoliu complet!';
$string['exportalreadyfinisheddesc'] = 'Export portofoliu complet!';
$string['exportcomplete'] = 'Export portofoliu complet!';
$string['exportedpreviously'] = 'Exporturi anterioare';
$string['exportexceptionnoexporter'] = 'O  portfolio_export_exception a apărut în timpul sesiunii active dar  nu a apărut niciun obiect pentru export.';
$string['exportexpired'] = 'Exportul portofoliului a expirat';
$string['exportexpireddesc'] = 'Ați încercat să repetați exportul unor informații sau să începeți un export gol. Pentru a face acest lucru în mod corespunzător, ar trebui să mergeți înapoi la locația originală și să începeți din nou. Acest lucru se întâmplă uneori, dacă utilizați butonul back, după ce un export este terminat, sau prin bookmarking al unui URL nevalid.';
$string['exporting'] = 'Se exportă în portofoliu';
$string['exportingcontentfrom'] = 'Se exportă conținut de la {$a}';
$string['exportingcontentto'] = 'Se exportă conținut la {$a}';
$string['exportqueued'] = 'Exportul portofoliului a fost pus în așteptare cu succes pentru transfer';
$string['exportqueuedforced'] = 'Export portofoliului a fost pus în așteptare cu succes pentru transfer (sistemul remote pune transferurile în așteptare)';
$string['failedtopackage'] = 'Nu s-au putut găsi fișiere pentru package';
$string['failedtosendpackage'] = 'Nu s-au trimis datele la sistemul de portofoliu selectat: eroarea originală a fost {$a}';
$string['filedenied'] = 'Nu aveți acces la acest fișier';
$string['filenotfound'] = 'Fișierul nu a fost găsit';
$string['fileoutputnotsupported'] = 'Rescrierea output-ului fișierului nu este acceptată pentru acest format';
$string['format_document'] = 'Document';
$string['format_file'] = 'Fișier';
$string['format_image'] = 'Imagine';
$string['format_leap2a'] = 'Format portofoliu Leap2A';
$string['format_mbkp'] = 'Format backup Moodle';
$string['format_pdf'] = 'PDF';
$string['format_plainhtml'] = 'HTML';
$string['format_presentation'] = 'Prezentare';
$string['format_richhtml'] = 'HTML cu atașamente';
$string['format_spreadsheet'] = 'Foaie de calcul';
$string['format_text'] = 'Text simplu';
$string['format_video'] = 'Video';
$string['highdbsizethreshold'] = 'Dbsize high transfer';
$string['highdbsizethresholddesc'] = 'Numărul înregistrărilor db pentru care se consideră că este nevoie de mult timp pentru transfer';
$string['highfilesizethreshold'] = 'Dimensiune fișier high transfer';
$string['highfilesizethresholddesc'] = 'Fișierele a căror dimensiune depășește acest prag vor fi considerate ca necesitând mult timp pentru transfer.';
$string['insanebody'] = 'Bună! Ați primit acest mesaj pentru că sunteți administrator al {$a->sitename}.

Unele exemple de plugin portofoliu au fost dezactivate automat datorită configurării greșite. Acest lucru înseamnă că utilizatorii nu pot exporta în prezent conținutul acestor portofolii.

Lista exemplelor de plugin portofoliu care au fost dezactivate este:

{$a->textlist}

Acest lucru ar trebui să fie corectat cât mai curând posibil, accesând {$a->fixurl}.';
$string['insanebodyhtml'] = '<p>Bună! Ați primit acest mesaj deoarece sunteți administrator al {$a->sitename}.</p>
<p>Unele exemple de plugin-uri de portofoliu au fost dezactivate automat datorită configurării greșite. Acest lucru înseamnă că utilizatorii nu pot exporta în prezent conținutul acestor portofolii.</p>Lista exemplelor de portofoliu plugin care au fost dezactivate este:</p>
{$a->htmllist}
<p>acest lucru ar trebui să fie corectat cât mai curând posibil, accesând <a href="{$a->fixurl}">paginile de configurare a portofoliului</a></p>';
$string['insanebodysmall'] = 'Bună! Ați primit acest mesaj pentru că sunteți administrator al {$a->sitename}. Unele exemple ale plugin-ului portofoliu au fost dezactivate automat din cauza configurării greșite. Acest lucru înseamnă că utilizatorii nu pot exporta în prezent conținutul acestor portofolii. Acest lucru ar trebui să fie corectat cât mai curând posibil, accesând {$a->fixurl}.';
$string['insanesubject'] = 'Unele instanțe ale portofoliului sunt dezactivate automat';
$string['instancedeleted'] = 'Portofoliu șters cu succes';
$string['instanceismisconfigured'] = 'Exemplul de portofoliu este configurat în mod greșit, se omite. Eroarea a fost: {$a}';
$string['instancenotdelete'] = 'Nu s-a putut șterge portofoliul';
$string['instancenotsaved'] = 'Nu s-a putut salva portofoliul';
$string['instancesaved'] = 'Portofoliu salvat cu succes';
$string['intro'] = 'Conținut pe care l-ați creat, cum ar fi assignment-urile, mesajele și postările pe blog pot fi exportate într-un portofoliu sau pot fi descărcate.<br>
Orice portofoliu pe care nu doriți să utilizați pot fi ascuns, astfel încât acesta nu este listat ca o opțiune către care să exportați conținut.';
$string['invalidaddformat'] = 'Format nevalid adăugat la portfolio_add_button. ({$a}) Trebuie să fie unul dintre PORTFOLIO_ADD_XXX';
$string['invalidbuttonproperty'] = 'Nu s-a putut găsi acea proprietate  ({$a}) a portfolio_button';
$string['invalidconfigproperty'] = 'Nu s-a putut configura această proprietate ({$a->property} a {$a->class})';
$string['invalidexportproperty'] = 'Nu se poate găsi acea proprietate pentru configurarea exportului ({$a->property} a {$a->class})';
$string['invalidfileareaargs'] = 'Argumentele nevalide pentru zona fișierului set_file_and_format_data - trebuie să conțină contextid, componentă, filearea și itemid';
$string['invalidformat'] = 'Se exportă un format invalid, {$a}';
$string['invalidinstance'] = 'Nu s-a putut găsi acel exemplu de portofoliu';
$string['invalidpreparepackagefile'] = 'Apel nevalid pentru prepare_package_file - fișiere single sau multiple trebuie să fie setate';
$string['invalidproperty'] = 'Nu s-a putut găsi acea proprietate ({$a->property} a{$a->class})';
$string['invalidsha1file'] = 'Apel nevalid pentru a obține_sha1_file - fișiere single sau multiple trebuie să fie setate';
$string['invalidtempid'] = 'ID export invalid. Este posibil să fie expirat.';
$string['invaliduserproperty'] = 'Nu se poate găsi această proprietate de configurare ({$a->property} a {$a->class})';
$string['leap2a_emptyselection'] = 'Valoarea necesară nu este selectată';
$string['leap2a_entryalreadyexists'] = 'Ați încercat să adăugați o postare cu id-ul ({$a}) care există deja în acest feed';
$string['leap2a_feedtitle'] = 'Export Leap2A din Moodle pentru {$a}';
$string['leap2a_filecontent'] = 'S-a încercat să se seteze conținutul unei postări Leap2A ca un fișier, nu s-a folosit fișierul subclass';
$string['leap2a_invalidentryfield'] = 'Ați încercat să setați un câmp al postării care nu există ({$a}) sau nu îl puteți seta direct';
$string['leap2a_invalidentryid'] = 'Ați încercat să accesați o postare de la un ID care nu există ({$a})';
$string['leap2a_missingfield'] = 'Câmpul necesar {$a} al postării Leap2A lipsește';
$string['leap2a_nonexistantlink'] = 'O postare Leap2A ({$a->from}) a încercat să ofere un link către o postare neexistentă ({$a->to}) cu rel {$a->rel}';
$string['leap2a_overwritingselection'] = 'Suprascrierea tipului original al postării ({$a}) ca selecție în make_selection';
$string['leap2a_selflink'] = 'O postare Leap2A  ({$a->id})  a încercat să seteze un link către ea cu rel {$a->rel}';
$string['logs'] = 'Jurnale transferuri';
$string['logsummary'] = 'Transferurile anterioare reușite';
$string['manageportfolios'] = 'Administrează portofolii';
$string['manageyourportfolios'] = 'Administrați portofoliile dumneavoastră';
$string['mimecheckfail'] = 'Plugin-ul portofolio {$a->plugin} nu acceptă acel mimetype {$a->mimetype}';
$string['missingcallbackarg'] = 'Lipsește  callback argument {$a->arg} pentru clasa {$a->class}';
$string['moderatedbsizethreshold'] = 'Transfer moderat dbsize';
$string['moderatedbsizethresholddesc'] = 'Numărul înregistrărilor db peste carese va considera că este nevoie de mult timp pentru realizarea transferului';
$string['moderatefilesizethreshold'] = 'Dimensiune fișier pentru transfer moderat';
$string['moderatefilesizethresholddesc'] = 'Fișierele cu dimensiuni peste acest prag vor fi considerate ca necesitând o cantitate moderată de timp pentru transfer';
$string['multipleinstancesdisallowed'] = 'Încercarea de a crea un alt exemplu al unui plug-in care a anulat mai multe exemplu ({$a})';
$string['mustsetcallbackoptions'] = 'Trebuie să setați opțiunile callback, fie din portfolio_add_button  constructor, fiefolosind metoda set_callback_options';
$string['noavailableplugins'] = 'Ne pare rău, dar nu există disponibile pentru exportul dumneavoastră';
$string['nocallbackclass'] = 'Nu se poate găsi callback class pentru a fi utilizat ({$a})';
$string['nocallbackcomponent'] = 'Nu s-a putut găsi componenta specificată {$a}.';
$string['nocallbackfile'] = 'Ceva în modul pe care încercați să îl exportați este deteriorat - nu s-a putut găsi un fișier necesar pentru portofoliu';
$string['noclassbeforeformats'] = 'Trebuie să setați callback class înaintea calling set_formats în portfolio_button';
$string['nocommonformats'] = 'Nu există formate comune între orice plugin de portofoliu disponibil și calling location {$a->location} (caller supported {$a->formats})';
$string['noinstanceyet'] = 'Nu a fost selectat încă';
$string['nologs'] = 'Nu există înregistrări de afișat!';
$string['nomultipleexports'] = 'Ne pare rău, dar destinația portofoliului ({$a->plugin}) nu acceptă exporturi multiple în același timp. Vă rugăm să <a href="{$a->link}"> îl încheiați mai întâi pe cel actual </a> și să încercați din nou.';
$string['nonprimative'] = 'O valoare non-primitve a fost setată ca și callback argument pentru portfolio_add_button. Nu se poate continua.Cheia a fost {$a->key}  iar valoarea a a fost {$a->value}';
$string['nopermissions'] = 'Ne pare rău, dar nua veți permisiunea necesară pentru a exporta fișiere din această zonă.';
$string['notexportable'] = 'Ne pare rău, dar tipul de conținut pe care încercați să îl exportați nu poate fi exportat.';
$string['notimplemented'] = 'Ne pare rău, dar încercați să exportați conținut într-un format care nu este încă implementat ({$a})';
$string['notyetselected'] = 'Neselectat încă';
$string['notyours'] = 'Încercați să rezumați un portofoliu care nu vă aparține.';
$string['nouploaddirectory'] = 'Nu s-a putut crea un director temporar pentru pachetul dumneavoastră de date.';
$string['off'] = 'Activ, dar ascuns';
$string['on'] = 'Activ și vizibil';
$string['plugin'] = 'Plugin portofoliu';
$string['plugincouldnotpackage'] = 'Nu s-a putut realiza pachetul pentru exportul datelor dumneavoastră: eroarea originală a fost {$a}';
$string['pluginismisconfigured'] = 'Plugin-ul portofoliu este configurat în mod greșit, se omite. Eroarea a fost: {$a}';
$string['portfolio'] = 'Portofoliu';
$string['portfolios'] = 'Portofolii';
$string['privacy:metadata'] = 'Subsistemul portofoliu acționează ca un canal, trecând cererile de la pluginuri la diferitele pluginuri de portofoliu.';
$string['privacy:metadata:instance'] = 'Identificator al portofoliului.';
$string['privacy:metadata:instancesummary'] = 'Stochează date despre instanțele și preferințele portofoliului.';
$string['privacy:metadata:name'] = 'Denumire preferințe';
$string['privacy:metadata:portfolio_log'] = 'Jurnalul de transferuri de portofoliu (utilizat pentru a verifica ulterior duplicatele)';
$string['privacy:metadata:portfolio_log:caller_class'] = 'Numele clasei utilizate pentru a crea transferul';
$string['privacy:metadata:portfolio_log:caller_component'] = 'Numele componentului responsabil pentru export';
$string['privacy:metadata:portfolio_log:time'] = 'Timpul transferului (în cazul unui transfer aflat în coadă, acesta este momentul în care a rulat transferul efectiv, nu când utilizatorul a început-o)';
$string['privacy:metadata:portfolio_log:userid'] = 'Identificatorul utilizatorului care a exportat conținut';
$string['privacy:metadata:portfolio_tempdata'] = 'Stochează date temporare pentru exporturile de portofoliu.';
$string['privacy:metadata:portfolio_tempdata:data'] = 'Export de date';
$string['privacy:metadata:portfolio_tempdata:expirytime'] = 'Data când această înregistrare va expira';
$string['privacy:metadata:portfolio_tempdata:instance'] = 'Instanța de portofoliu este folosită';
$string['privacy:metadata:portfolio_tempdata:userid'] = 'Utilizator care efectuează export';
$string['privacy:metadata:userid'] = 'Identificatorul utilizatorului';
$string['privacy:metadata:value'] = 'Valoare pentru preferință';
$string['privacy:path'] = 'Instanțele portofoliului';
$string['queuesummary'] = 'Transferuri puse acum în așteptare';
$string['returntowhereyouwere'] = 'Reveniți';
$string['save'] = 'Salvează';
$string['selectedformat'] = 'Formatul pentru export a fost selectat';
$string['selectedwait'] = 'Selectat și pus în așteptare?';
$string['selectplugin'] = 'Selectează destinația';
$string['showhide'] = 'Arată / ascunde';
$string['singleinstancenomultiallowed'] = 'Doar un singur exemplu de  plugin portofoliu este disponibil, acesta nu acceptă exporturi multiple pe sesiune, și există deja un export activ în cadrul sesiunii care folosește acest plugin!';
$string['somepluginsdisabled'] = 'Unele plugin-uri întregi de portofoliu au fost dezactivate, deoarece sunt fie configurate greșit, fie sunt bazate pe altceva, anume:';
$string['sure'] = 'Sunteți sigur (ă) că doriți să ștergeți  \'{$a}\'? Această acțiune nu poate fi anulată.';
$string['thirdpartyexception'] = 'O a treia excepție a apărut  în timpul exportului portofoliului ({$a}). A fost detectată dar trebuie reparată.';
$string['transfertime'] = 'Timp de transfer';
$string['unknownplugin'] = 'Necunoscut (se poate să fie ștearsă de administrator)';
$string['wait'] = 'Așteptați';
$string['wanttowait_high'] = 'Nu se recomandă să așteptați ca acest transfer să se încheie, dar se poate, dacă sunteți sigur(ă)';
$string['wanttowait_moderate'] = 'Doriți să așteptați acestr transfer? Poate dura câteva minute';
