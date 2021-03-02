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
 * Strings for component 'repository', language 'sv', version '3.8'.
 *
 * @package     repository
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'Tillgänglig filväljare';
$string['activaterep'] = 'Aktiva lagringsplatser';
$string['activerepository'] = 'Tillgängliga pluginmoduler för lagringsplats';
$string['activitybackup'] = 'Säkerhetskopiering av aktivitet';
$string['add'] = 'Lägg till';
$string['addfile'] = 'Lägg till...';
$string['addfiletext'] = 'Lägg till fil';
$string['addplugin'] = 'Lägg till pluginmodul för lagringsplats';
$string['allowexternallinks'] = 'Tillåt externa länkar';
$string['areacategoryintro'] = 'Kategoripresentation';
$string['areacourseintro'] = 'Kurspresentation';
$string['areacourseoverviewfiles'] = 'Kursbild';
$string['areamainfile'] = 'Huvudfil';
$string['arearoot'] = 'System';
$string['areauserbackup'] = 'Säkerhetskopiering av användare';
$string['areauserdraft'] = 'Utkast';
$string['areauserpersonal'] = 'Privata filer';
$string['areauserprofile'] = 'Profil';
$string['attachedfiles'] = 'Bifogade filer';
$string['attachment'] = 'Bilaga';
$string['author'] = 'Författare';
$string['automatedbackup'] = 'Automatisk säkerhetskopiering';
$string['back'] = 'Tillbaka';
$string['backtodraftfiles'] = 'Tillbaka till filutkast-hanteraren';
$string['cachecleared'] = 'Cachlagrade filer tas bort';
$string['cacheexpire'] = 'Förfallotid för cache';
$string['cannotaccessparentwin'] = 'När HTTPS används uppdateras inte lagringsplatsen automatiskt. Du behöver istället gå tillbaka till filväljaren och välja lagringsplatsen igen.';
$string['cannotdelete'] = 'Kan inte ta bort filen.';
$string['cannotdownload'] = 'Det går inte att ladda ner den här filen';
$string['cannotdownloaddir'] = 'Det går inte att ladda ner den här katalogen';
$string['cannotinitplugin'] = 'Anropet till plugin_init misslyckades';
$string['cannotunzipcontentunreadable'] = 'Kan inte packa upp filen eftersom innehållet inte kan läsas.';
$string['cannotunzipquotaexceeded'] = 'Kan inte packa upp filen eftersom den tillåtna maxstorleken för platsen för utkast kommer överskridas.';
$string['choosealink'] = 'Välj en länk';
$string['chooselicense'] = 'Välj en licens';
$string['cleancache'] = 'Rensa mina cachade filer';
$string['close'] = 'Stäng';
$string['commonrepositorysettings'] = 'Standardinställningar för lagringsplats';
$string['configallowexternallinks'] = 'Med det här alternativet kan alla användare välja om externa media kopieras in i Moodle eller inte. Om detta är inaktiverat kopieras media alltid till Moodle (detta är oftast bäst för övergripande dataintegritet och säkerhet).  Om detta är aktiverat kan välja alternativ varje gång de lägger till media till en text.';
$string['configcacheexpire'] = 'Hur lång tid som filförteckningar cachelagras lokalt (i sekunder) när du listar filer från externa lagringsplatser.';
$string['configgetfiletimeout'] = 'Timeout i sekunder för nedladdning av en extern fil till Moodle.';
$string['configsaved'] = 'Konfigurationen har sparats';
$string['configsyncfiletimeout'] = 'Timeout i sekunder för synkronisering av den externa filstorleken.';
$string['configsyncimagetimeout'] = 'Timeout i sekunder för hämtning av en bildfil från extern lagringsplats vid synkronisering.';
$string['confirmdelete'] = 'Vill du ta bort lagringsplatsen {$a}? Om du väljer "Fortsätt och ladda ner" kommer filreferenser till externt innehåll att laddas ner till Moodle. Detta kan ta lång tid att bearbeta.';
$string['confirmdeletefile'] = 'Är du säker på att du vill ta bort den här filen?';
$string['confirmdeletefolder'] = 'Är du säker på att du vill ta bort den här mappen? Alla filer och undermappar kommer att raderas.';
$string['confirmremove'] = 'Är du säker på att du vill ta bort denna plugin-modul, dess alternativ och <strong>alla av dess instanser</strong> - {$a}? Om du väljer "Fortsätt och ladda ner" kommer filreferenser till externt innehåll att laddas ner till Moodle. Detta kan ta lång tid att bearbeta.';
$string['continueuninstall'] = 'Fortsätt';
$string['continueuninstallanddownload'] = 'Fortsätt och hämta';
$string['copying'] = 'Kopierar';
$string['coursebackup'] = 'Säkerhetskopior av kurser';
$string['create'] = 'Skapa';
$string['createfolder'] = 'Skapa katalog';
$string['createfolderfail'] = 'Misslyckas med att skapa den här katalogen';
$string['createfoldersuccess'] = 'Skapa katalog framgångsrikt';
$string['createinstance'] = 'Skapa ny lagringsplats';
$string['createrepository'] = 'Skapa en ny lagringsplats';
$string['createxxinstance'] = 'Skapa en "{$a}" instans ';
$string['date'] = 'Datum';
$string['datecreated'] = 'Skapad';
$string['deleted'] = 'Lagringsplats borttagen';
$string['deleterepository'] = 'Ta bort den här lagringsplatsen';
$string['detailview'] = 'Se detaljer';
$string['dimensions'] = 'Mått';
$string['disabled'] = 'Inaktiverad';
$string['displayasdetails'] = 'Visa som fildetaljer';
$string['displayasicons'] = 'Visa som ikoner';
$string['displayastree'] = 'Visa som filträd';
$string['displaydetails'] = 'Visa mapp som en lista med detaljer om filerna';
$string['displayicons'] = 'Visa mapp med symboler för filerna';
$string['displaytree'] = 'Visa mapp som trädstruktur';
$string['download'] = 'Ladda ner';
$string['downloadallfiles'] = 'Ladda ned alla filer';
$string['downloadfolder'] = 'Ladda ner allt';
$string['downloadsucc'] = 'Filen har laddats ner framgångsrikt';
$string['draftareanofiles'] = 'Det går inte att ladda ner eftersom det inte finns några bifogade filer';
$string['editrepositoryinstance'] = 'Redigera lagringsplats';
$string['emptylist'] = 'Tom lista';
$string['emptytype'] = 'Det går inte att skapa denna typ av lagringsplats: typnamnet är tomt';
$string['enablecourseinstances'] = 'Tillåt användare att lägga till en instans av en lagringsplats till kursen';
$string['enableuserinstances'] = 'Tillåt användare att lägga till en instans av en lagringsplats i användarens kontext';
$string['enter'] = 'Skriv in';
$string['entername'] = 'Var snäll och skriv in namnet på katalogen';
$string['enternewname'] = 'Var snäll och skriv in det nya namnet på
filen ';
$string['error'] = 'Det inträffade ett okänt fel!';
$string['errornotyourfile'] = 'Du kan endast välja filer som du lagt till.';
$string['errorpostmaxsize'] = 'Den uppladdade filen kan överstiga max_post_size inställningen som tillåts enligt php.ini.';
$string['erroruniquename'] = 'Namnet på instansen av en lagringsplats ska vara unikt';
$string['errorwhiledownload'] = 'Ett fel uppstod vid nerladdning av filen: {$a}';
$string['existingrepository'] = 'Den här lagringsplatsen finns redan';
$string['federatedsearch'] = 'Federerad sökning';
$string['fileexists'] = 'Filnamnet används redan, var snäll och välj ett annat namn';
$string['fileexistsdialog_editor'] = 'En fil med det namnet redan bifogats till texten som du redigerar.';
$string['fileexistsdialog_filemanager'] = 'En fil med det namnet har redan bifogats';
$string['fileexistsdialogheader'] = 'Filen finns';
$string['filename'] = 'Filnamn';
$string['filenotnull'] = 'Du måste välja en fil som ska laddas upp';
$string['filepicker'] = 'Filväljare';
$string['filesaved'] = 'Den här filen har sparats';
$string['filesizenull'] = 'Filstorlek kan inte bestämmas';
$string['folderexists'] = 'Mappnamn används redan, använd ett annat namn';
$string['foldernotfound'] = 'Mapp hittades inte';
$string['folderrecurse'] = 'Mapp kan inte flyttas till sin en egna underkatalog';
$string['getfile'] = 'Välj den här filen';
$string['getfiletimeout'] = 'Timeout vid filnedladdning';
$string['help'] = 'Hjälp';
$string['iconview'] = 'Visa som ikoner';
$string['imagesize'] = '{$a->width} x {$a->height} px';
$string['instance'] = 'instans';
$string['instancedeleted'] = 'Instansen har tagits bort';
$string['instances'] = 'Lagringsplatsinstanser';
$string['instancesforcourses'] = '{$a} allmänna instanser på kursnivå';
$string['instancesforsite'] = '{$a} allmänna instanser på webbplatsnivå';
$string['instancesforusers'] = '{$a} privata instanser för användare';
$string['invalidfiletype'] = 'filtypen {$a} kan inte accepteras';
$string['invalidjson'] = 'Ogiltig JSON-sträng';
$string['invalidparams'] = 'Ogiltiga parametrar';
$string['invalidplugin'] = 'Ogiltig pluginmodul {$a} för lagringsplats';
$string['invalidrepositoryid'] = 'Ogiltigt ID för lagringsplats';
$string['isactive'] = 'Aktiv?';
$string['keyword'] = 'Nyckelord';
$string['lastmodified'] = 'Senast ändrad';
$string['linkexternal'] = 'Extern länk';
$string['listview'] = 'Visa som lista';
$string['loading'] = 'Laddar...';
$string['login'] = 'Logga in';
$string['logintoaccount'] = 'Logga in på ditt {$a}-konto';
$string['logout'] = 'Logga ut';
$string['lostsource'] = 'Fel. Källa saknas. {$a}';
$string['makefilecontrolledlink'] = 'Skapa en behörighetskontrollerad länk till filen';
$string['makefileinternal'] = 'Gör en kopia av filen';
$string['manage'] = 'Hantera lagringsplatser';
$string['manageinstances'] = 'Hantera instanser';
$string['manageurl'] = 'Hantera';
$string['manageuserrepository'] = 'Hantera individuell lagringsplats';
$string['moving'] = 'Flytta';
$string['name'] = 'Namn';
$string['newfolder'] = 'Ny mapp';
$string['newfoldername'] = 'Nytt namn';
$string['noenter'] = 'Ingenting skrevs in';
$string['nofilesattached'] = 'Inga bifogade filer';
$string['nofilesavailable'] = 'Det finns inga tillgängliga filer';
$string['nomorefiles'] = 'Inga fler bilagor tillåts';
$string['nopathselected'] = 'Det har inte valts någon sökväg ännu (dubbelklicka på noden för att välja)';
$string['noresult'] = 'Inget sökresultat';
$string['off'] = 'Aktiverad men dold';
$string['on'] = 'Aktiverad och synlig';
$string['openpicker'] = 'Välj en fil';
$string['operation'] = 'Operation';
$string['original'] = 'Original';
$string['overwrite'] = 'Skriv över';
$string['overwriteall'] = 'Skriv över alla';
$string['plugin'] = 'Pluginmoduler för lagringsplatser';
$string['pluginerror'] = 'Fel i plugin-modul för lagringsplats.';
$string['pluginname'] = 'Namn';
$string['pluginnamehelp'] = 'Om detta fält lämnas tomt används standardnamnet';
$string['popup'] = 'Klicka på knappen \'Logga in\' för att logga in';
$string['popupblockeddownload'] = 'Det nedladdande fönstret är blockerat, v.g. tillåt popup-fönstret och försök igen.';
$string['preview'] = 'Förhandsgranska';
$string['privatefilesof'] = '{$a} privata filer';
$string['readonlyinstance'] = 'Du kan inte redigera/ta bort en instans som bara är läsbar';
$string['refresh'] = 'Uppdatera';
$string['refreshnonjsfilepicker'] = 'Vänligen ta bort det här fönstret och återställ den filväljare som inte använder javascript.';
$string['removed'] = 'Lagringsplatsen har tagits bort';
$string['renameall'] = 'Byta namn på alla';
$string['renameto'] = 'Byt namn till &quot;{$a}&quot;';
$string['repositories'] = 'Lagringsplatser';
$string['repository'] = 'Lagringsplats';
$string['repositorycourse'] = 'Lagringsplatser för kurser';
$string['save'] = 'Spara ';
$string['saveas'] = 'Spara som';
$string['saved'] = 'Sparad';
$string['saving'] = 'Sparar';
$string['search'] = 'Sök';
$string['searching'] = 'Sök i ';
$string['sectionbackup'] = 'Säkerhetskopior av sektioner';
$string['select'] = 'Välj';
$string['setmainfile'] = 'Ställ in huvudfilen';
$string['settings'] = 'Inställningar';
$string['setupdefaultplugins'] = 'Konfigurerar pluginmoduler för standardlagringsplatser';
$string['siteinstances'] = 'Instanser av lagringsplatser på webbplatsen';
$string['size'] = 'Storlek';
$string['submit'] = 'Skicka in';
$string['sync'] = 'Synk';
$string['syncfiletimeout'] = 'Timeout för filsynkronisering';
$string['syncimagetimeout'] = 'Timeout för bildsynkning';
$string['thumbview'] = 'Visa som ikoner';
$string['title'] = 'Välj en fil...';
$string['type'] = 'Typ';
$string['typenotvisible'] = 'Typen är inte synlig';
$string['undisclosedreference'] = '(Hemlig)';
$string['undisclosedsource'] = '(Hemlig)';
$string['unknownoriginal'] = 'Okänd';
$string['unzipped'] = 'Packade upp framgångsrikt';
$string['upload'] = 'Ladda upp den här filen';
$string['uploading'] = 'Laddar upp...';
$string['uploadsucc'] = 'Filen har laddats upp framgångsrikt';
$string['uselatestfile'] = 'Använd senaste filen';
$string['usenonjsfilemanager'] = 'Öppna filhanteraren i nytt fönster';
$string['usercontextrepositorydisabled'] = 'Du kan inte redigera det här lagringsplatsen i sammanhanget för användare';
$string['ziped'] = 'Komprimera katalogen framgångsrikt';
