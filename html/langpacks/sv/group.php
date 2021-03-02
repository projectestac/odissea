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
 * Strings for component 'group', language 'sv', version '3.8'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Lagt till av {$a}';
$string['addgroup'] = 'Lägg till användaren till gruppen';
$string['addgroupstogrouping'] = 'Lägg till grupp i gruppindelning';
$string['addgroupstogroupings'] = 'Lägg till/ta bort grupper';
$string['adduserstogroup'] = 'Lägg till/ta bort användare';
$string['allocateby'] = 'Fördela medlemmar';
$string['anygrouping'] = '[Alla gruppindelningar]';
$string['autocreategroups'] = 'Skapa grupper automatiskt';
$string['backtogroupings'] = 'Tillbaka till gruppindelningar';
$string['backtogroups'] = 'Tillbaka till grupper';
$string['badnamingscheme'] = 'Det måste innehålla exakt ett \'@\' eller ett \'#\' tecken.';
$string['byfirstname'] = 'Alfabetiskt enligt förnamn, efternamn';
$string['byidnumber'] = 'Alfabetiskt enligt  ID-nummer';
$string['bylastname'] = 'Alfabetiskt enligt efternamn, förnamn';
$string['createautomaticgrouping'] = 'Skapa automatiska gruppindelningar';
$string['creategroup'] = 'Skapa grupp';
$string['creategrouping'] = 'Skapa gruppindelning';
$string['creategroupinselectedgrouping'] = 'Skapa grupp i gruppindelning';
$string['createingrouping'] = 'Gruppindelning utifrån automatiskt skapade grupper';
$string['createorphangroup'] = 'Skapa \'föräldralös\' grupp';
$string['csvdelimiter'] = 'CSV-avgränsare';
$string['databaseupgradegroups'] = 'Versionerna för grupper är nu {$a}';
$string['defaultgrouping'] = 'Förinställd gruppindelning';
$string['defaultgroupingname'] = 'Gruppindelning';
$string['defaultgroupname'] = 'Grupp';
$string['deleteallgroupings'] = 'Ta bort alla gruppindelningar';
$string['deleteallgroups'] = 'Ta bort alla grupper';
$string['deletegroupconfirm'] = 'Är Du säker på att Du vill ta bort grupp \'{$a}\'?';
$string['deletegrouping'] = 'Tar bort gruppindelning';
$string['deletegroupingconfirm'] = 'Är du säker på att du vill ta bort gruppindelning \'{$a}\'? (Grupperna i gruppindelningen tas inte bort).';
$string['deletegroupsconfirm'] = 'Är Du säker på att Du vill ta bort de följande grupperna?';
$string['deleteselectedgroup'] = 'Ta bort markerad grupp';
$string['editgroupingsettings'] = 'Redigera gruppindelningsinställningar';
$string['editgroupsettings'] = 'Redigera inställningar för grupp';
$string['editusersgroupsa'] = 'Redigera grupper för "{$a}"';
$string['enablemessaging'] = 'Gruppmeddelanden';
$string['enablemessaging_help'] = 'Om detta alternativ är aktivt kan användare skicka meddelanden till andra gruppmedlemmar';
$string['encoding'] = 'Teckenkodning';
$string['enrolmentkey'] = 'Nyckel för registrering';
$string['enrolmentkey_help'] = 'En kursnyckel ger tillgång till kursen och begränsar tillträdet till de som känner till nyckeln. Om en grupp-kursnyckel används kommer användaren förutom att få tillträde till kursen även bli medlem av den här gruppen automatiskt.';
$string['enrolmentkeyalreadyinuse'] = 'Denna kursnyckel används redan för en annan grupp.';
$string['erroraddremoveuser'] = 'Fel i samband med att användare  {$a} skulle läggas till/ tas bort från grupp';
$string['erroreditgroup'] = 'Fel i samband med skapande/uppdatering av  {$a}';
$string['erroreditgrouping'] = 'Fel i samband med skapande/uppdatering av gruppindelningen {$a}';
$string['errorinvalidgroup'] = 'Fel, ogiltig grupp {$a}';
$string['errorremovenotpermitted'] = 'Du har inte behörighet att ta bort den automatiskt tillagda grupp medlemen {$a}';
$string['errorselectone'] = 'Var snäll och välj en enskild grupp innan Du väljer det här alternativet.';
$string['errorselectsome'] = 'Var snäll och välj en eller flera grupper innan Du väljer det här alternativet.';
$string['evenallocation'] = 'OBS! För att fördelningen på grupper ska bli jämn så kommer det faktiska antalet medlemmar per grupp att variera i förhållande till det antal du har angivit.';
$string['eventgroupcreated'] = 'Grupp skapad';
$string['eventgroupdeleted'] = 'Grupp borttagen';
$string['eventgroupingcreated'] = 'Gruppindelning skapad';
$string['eventgroupingdeleted'] = 'Gruppindelning borttagen';
$string['eventgroupinggroupassigned'] = 'Grupp tilldelad gruppindelning';
$string['eventgroupinggroupunassigned'] = 'Grupp borttagen ur gruppindelning';
$string['eventgroupingupdated'] = 'Gruppindelning updaterad';
$string['eventgroupmemberadded'] = 'Gruppmedlem tillagd';
$string['eventgroupmemberremoved'] = 'Gruppmedlem borttagen';
$string['eventgroupupdated'] = 'Grupp uppdaterad';
$string['existingmembers'] = 'Befintliga medlemmar: {$a}';
$string['filtergroups'] = 'Filtrera grupper enligt:';
$string['group'] = 'Grupp';
$string['groupaddedsuccesfully'] = 'Grupp {$a} har lagts till';
$string['groupaddedtogroupingsuccesfully'] = 'Grupp {$a->groupname} framgångsrik tillagd till gruppindelning {$a->groupingname}';
$string['groupby'] = 'Automatiskt skapad baserad på';
$string['groupdescription'] = 'Beskrivning av grupp';
$string['groupinfo'] = 'Info om vald grupp';
$string['groupinfomembers'] = 'Info om valda  medlemmar';
$string['groupinfopeople'] = 'Info om valda personer';
$string['grouping'] = 'Gruppindelning';
$string['grouping_help'] = '<p>En gruppering är en samling av grupper
 inom en kurs - ett nytt koncept som introducerades i Moodle 1.8.
</p>

<p>Avsikten är att olika grupperingar kan användas för olika aktiviteter
i kursen, så att grupperna i t.ex.
 en "gruppering för samarbete" skulle användas för en grupp-wiki medan
en "gruppering för diskussioner" skulle användas för en forum-aktivitetet.

</p>

<p>På sidan för inställningar för kurs så kan du helt enkelt behålla det förinställda
standardvärdet (vilken gruppering som helst) eller välja den gruppering du vill ha och spara dina ändringar.
</p>';
$string['groupingaddedsuccesfully'] = 'Gruppindelning {$a} lades till framgångsrikt';
$string['groupingdescription'] = 'Beskrivning';
$string['groupingname'] = 'Namn på ggruppkategori';
$string['groupingnameexists'] = 'Namnet \'{$a}\' för gruppkategorisering finns redan i den här kursen, var snäll och välj en annan.';
$string['groupings'] = 'Gruppindelningar';
$string['groupingsection'] = 'Gruperat tillträde';
$string['groupingsection_help'] = 'En gruppering är en samling av grupper inom en kurs. Om gruppering väljs här kommer endast studenter som tilldelats grupper inom den här gruppen ha tillgång till sektionen.';
$string['groupingsonly'] = 'Endast gruppindelningar';
$string['groupmember'] = 'Gruppmedlem';
$string['groupmemberdesc'] = 'Standardroll för en medlem i en grupp';
$string['groupmembers'] = 'Gruppmedlemmar';
$string['groupmemberssee'] = 'Se gruppmedlemmar';
$string['groupmembersselected'] = 'Medlemmar i vald grupp';
$string['groupmode'] = 'Gruppläge';
$string['groupmode_help'] = 'Den här inställningen har 3 alternativ:

* Inga grupper
* Separata grupper - Varje gruppmedlem kan bara se sin egen grupp, andra är osynliga
* Synliga grupper - Varje gruppmedlem arbetar i sin egen grupp, men kan även se andra grupper

Det gruppläge som definieras på kursnivå är standardläget för alla aktiviteter inom kursen. Varje aktivitet som stöder grupper kan också definiera sitt eget gruppläge, men om gruppläget tvingas fram på kursnivå ignoreras grupplägesinställningen för de enskilda aktiviteterna.';
$string['groupmodeforce'] = 'Påtvinga gruppläge?';
$string['groupmodeforce_help'] = 'Om gruppläge är tvingande, kommer gruppläge att tillämpas på varje aktivitet i kursen. Gruppinställningar för varje enskild aktivitet kommer då att ignoreras.';
$string['groupmy'] = 'Min grupp';
$string['groupname'] = 'Group name';
$string['groupnameexists'] = 'Gruppnamnet \'{$a}\' finns redan i den här kursen, var snäll och välj en annan,';
$string['groupnotamember'] = 'Du är tyvärr inte medlem av den gruppen.';
$string['groups'] = 'Grupper';
$string['groupscount'] = 'Grupper ({$a})';
$string['groupsettingsheader'] = 'Grupper';
$string['groupsgroupings'] = 'Grupper & gruppindelningar';
$string['groupsinselectedgrouping'] = 'Grupper i gruppindelning';
$string['groupsnone'] = 'Inga grupper';
$string['groupsonly'] = 'Endast grupper';
$string['groupspreview'] = 'Förhandsgranska grupper';
$string['groupsseparate'] = 'Separata';
$string['groupsvisible'] = 'Synliga grupper';
$string['grouptemplate'] = 'Grupp @';
$string['hidepicture'] = 'Dölj bild';
$string['importgroups'] = 'Importera grupper';
$string['importgroups_help'] = 'Grupper kan importeras via testfiler. Formatet för filen ska vara som följer:

* Varje rad i filen innehåller en post
* Varje post är en serie av data separerade av kommatecken
* Den första posten innehåller en lista över fältnamn och definierar formatet på resten av filen.
* Obligatoriska fältnamn är groupname (gruppnamn)
* Valfria fältnamn är description, enrolmentkey, picture, hidepicture (beskrivning, kursnyckel, offentlig bild, dold bild)';
$string['includeonlyactiveenrol'] = 'Inkludera endast aktiva registreringar';
$string['includeonlyactiveenrol_help'] = 'Om aktiverat inkluderas inte avstängda användare i grupper.';
$string['javascriptrequired'] = 'Den här sidan kräver Javascript för att aktiveras.';
$string['memberofgroup'] = 'Medlem i: {$a}';
$string['members'] = 'Medlemmar per grupp';
$string['membersofselectedgroup'] = 'Medlemmar i:';
$string['mygroups'] = 'Mina grupper';
$string['namingscheme'] = 'Modell för namngivning';
$string['namingscheme_help'] = 'At (@) symbolen kan användas för att skapa grupper med fortlöpande bokstavs benämning. Till exempel Grupp @ genererar grupper med namnen Grupp A, Grupp B, Grupp C osv.

Nummertecknet (#) kan användas för att skapa grupper med fortlöpande numerisk benämning. Till exempel Grupp # genererar grupper med namnen Grupp1, Grupp2, Grupp3 osv.';
$string['newgrouping'] = 'Ny gruppindelning';
$string['newpicture'] = 'Ny bild';
$string['newpicture_help'] = 'Välj en bild i JPG- eller PNG-format. Bilden kommer att beskäras till en fyrkant som är 100x100 pixlar.';
$string['noallocation'] = 'Ingen fördelning';
$string['nogroup'] = 'Ingen grupp';
$string['nogrouping'] = 'Ingen gruppindelning';
$string['nogroups'] = 'Det har inte skapats några grupper i den här kursen ännu.';
$string['nogroupsassigned'] = 'Det har inte tilldelats några grupper';
$string['nopermissionforcreation'] = 'Det går inte att skapa grupp \'{$a}\' eftersom Du inte har de rättigheter som krävs.';
$string['nosmallgroups'] = 'Förhindra den sista lilla gruppen';
$string['notingroup'] = 'Ignorera användare i grupper';
$string['notingrouping'] = 'Ej med i en gruppindelning';
$string['notingrouplist'] = 'Ej med i en grupp';
$string['nousersinrole'] = 'Det finns inga lämpliga användare i den valda rollen';
$string['number'] = 'Räkning av grupper/medlemmar';
$string['numgroups'] = 'Antal grupper';
$string['nummembers'] = 'Medlemmar per grupp';
$string['othergroups'] = 'Andra grupper';
$string['overview'] = 'Översikt';
$string['potentialmembers'] = 'Potentiella medlemmar: {$a}';
$string['potentialmembs'] = 'Möjliga medlemmar';
$string['printerfriendly'] = 'Utskriftsvänlig visning';
$string['privacy:metadata:core_message'] = 'Gruppkonversationerna';
$string['random'] = 'Slumpmässig';
$string['removefromgroup'] = 'Ta bort användare från grupp {$a}';
$string['removefromgroupconfirm'] = 'Vill du verkligen ta bort användaren "{$a->user}" från gruppen  "{$a->group}"?';
$string['removegroupfromselectedgrouping'] = 'Ta bort grupp från gruppindelning';
$string['removegroupingsmembers'] = 'Ta bort alla grupper från gruppindelningar';
$string['removegroupsmembers'] = 'Ta bort alla medlemmar i grupp';
$string['removeselectedusers'] = 'Ta bort de markerade användarna';
$string['selectfromgroup'] = 'Välj medlemmar från gruppen';
$string['selectfromgrouping'] = 'Välj medlemmar från gruppindelning';
$string['selectfromrole'] = 'Välj medlemmar med roll';
$string['showgroupsingrouping'] = 'Visa grupper i gruppindelningen';
$string['showmembersforgroup'] = 'Visa medlemmar i grupp';
$string['toomanygroups'] = 'Otillräckligt antal användare för att fylla upp det här antalet grupper - det finns bara {$a} användare i den valda rollen.';
$string['usercount'] = 'Antal användare';
$string['usercounttotal'] = 'Antal användare ({$a})';
$string['usergroupmembership'] = 'Vald användares medlemsskap:';
