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
 * Strings for component 'group', language 'sv', version '4.1'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = 'Tillagd av {$a}';
$string['addgroup'] = 'Lägg till användaren i gruppen';
$string['addgroupstogrouping'] = 'Lägg till grupp i gruppindelning';
$string['addgroupstogroupings'] = 'Lägg till/ta bort grupper';
$string['adduserstogroup'] = 'Lägg till/ta bort användare';
$string['allocateby'] = 'Tilldela medlemmar';
$string['anygrouping'] = '[Alla gruppindelningar]';
$string['autocreategroups'] = 'Skapa grupper automatiskt';
$string['backtogroupings'] = 'Tillbaka till gruppindelningar';
$string['backtogroups'] = 'Tillbaka till grupper';
$string['badnamingscheme'] = 'Det måste innehålla exakt ett \'@\' eller ett \'#\' tecken';
$string['byfirstname'] = 'Alfabetiskt efter förnamn, efternamn';
$string['byidnumber'] = 'Alfabetiskt efter ID-nummer';
$string['bylastname'] = 'Alfabetiskt efter efternamn, förnamn';
$string['createautomaticgrouping'] = 'Skapa automatiska gruppindelningar';
$string['creategroup'] = 'Skapa grupp';
$string['creategrouping'] = 'Skapa gruppindelning';
$string['creategroupinselectedgrouping'] = 'Skapa grupp i gruppindelning';
$string['createingrouping'] = 'Gruppindelning utifrån automatiskt skapade grupper';
$string['createorphangroup'] = 'Skapa föräldralös grupp';
$string['csvdelimiter'] = 'CSV-avgränsare';
$string['databaseupgradegroups'] = 'Versionerna för grupper är nu {$a}';
$string['defaultgrouping'] = 'Standardgruppindelning';
$string['defaultgroupingname'] = 'Gruppindelning';
$string['defaultgroupname'] = 'Grupp';
$string['deleteallgroupings'] = 'Ta bort alla gruppindelningar';
$string['deleteallgroups'] = 'Ta bort alla grupper';
$string['deletegroupconfirm'] = 'Är du säker på att du vill ta bort gruppen <b>\'{$a}\'</b>?';
$string['deletegrouping'] = 'Tar bort gruppindelning';
$string['deletegroupingconfirm'] = 'Är du säker på att du vill ta bort gruppindelning <b>\'{$a}\'</b>? (Grupperna i gruppindelningen tas inte bort).';
$string['deletegroupsconfirm'] = 'Är du säker på att du vill ta bort följande grupper?';
$string['deleteselectedgroup'] = 'Ta bort markerad grupp';
$string['editgroupingsettings'] = 'Redigera gruppindelningsinställningar';
$string['editgroupsettings'] = 'Redigera gruppinställningar';
$string['editusersgroupsa'] = 'Redigera grupper för "{$a}"';
$string['enablemessaging'] = 'Gruppmeddelanden';
$string['enablemessaging_help'] = 'Om detta alternativ är aktivt kan användare skicka meddelanden till andra gruppmedlemmar';
$string['encoding'] = 'Teckenkodning';
$string['enrolmentkey'] = 'Registreringsnyckel';
$string['enrolmentkey_help'] = 'En registreringsnyckel gör att åtkomsten till kursen kan begränsas till endast de som känner till nyckeln. Om en gruppregistreringsnyckel anges kommer nyckeln inte bara släppa in användaren i kursen utan det kommer också automatiskt att göra dem till medlemmar i den här gruppen.

Gruppregistreringsnycklar måste aktiveras i inställningarna för självregistrering och en registreringsnyckel för kursen måste också anges.';
$string['enrolmentkeyalreadyinuse'] = 'Denna registreringsnyckel används redan för en annan grupp.';
$string['erroraddremoveuser'] = 'Fel i samband med att användare {$a} skulle läggas till/ tas bort från grupp';
$string['erroreditgroup'] = 'Fel i samband med skapande/uppdatering av {$a}';
$string['erroreditgrouping'] = 'Fel i samband med skapande/uppdatering av gruppindelningen {$a}';
$string['errorinvalidgroup'] = 'Fel, ogiltig grupp {$a}';
$string['errorremovenotpermitted'] = 'Du har inte behörighet att ta bort den automatiskt tillagda gruppmedlemmen {$a}';
$string['errorselectone'] = 'Vänligen markera en enskild grupp innan du väljer det här alternativet';
$string['errorselectsome'] = 'Vänligen markera en eller flera grupper innan du väljer det här alternativet';
$string['evenallocation'] = 'OBS! För att tilldelningen till grupper ska bli jämn så kommer det faktiska antalet medlemmar per grupp att variera i förhållande till det antal du har angivit.';
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
$string['exportgroupsgroupings'] = 'Ladda ned grupper och grupperingar som';
$string['filtergroups'] = 'Filtrera grupper efter:';
$string['group'] = 'Grupp';
$string['groupaddedsuccesfully'] = 'Gruppen {$a} har lagts till';
$string['groupaddedtogroupingsuccesfully'] = 'Gruppen <b>{$a->groupname}</b> lades till i gruppindelningen <b>{$a->groupingname}</b>';
$string['groupby'] = 'Skapa automatiskt utifrån';
$string['groupdescription'] = 'Beskrivning';
$string['groupinfo'] = 'Info om vald grupp';
$string['groupinfomembers'] = 'Info om valda medlemmar';
$string['groupinfopeople'] = 'Info om valda personer';
$string['grouping'] = 'Gruppindelning';
$string['grouping_help'] = 'En gruppindelning är en samling grupper inom en kurs. Om en gruppindelning väljs kan deltagare som tilldelats till grupper inom gruppindelningen arbeta tillsammans.';
$string['groupingaddedsuccesfully'] = 'Gruppindelningen {$a} lades till';
$string['groupingdescription'] = 'Beskrivning';
$string['groupingname'] = 'Namn på gruppindelning';
$string['groupingnameexists'] = 'Namnet \'{$a}\' för gruppindelningen finns redan i den här kursen. Vänligen välj ett annat namn.';
$string['groupings'] = 'Gruppindelningar';
$string['groupingsection'] = 'Gruppindelningsåtkomst';
$string['groupingsection_help'] = 'En gruppindelning är en samling av grupper inom en kurs. Om gruppindelning väljs här kommer endast studenter som tilldelats till grupper inom den här gruppindelningen ha tillgång till sektionen.';
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
$string['groupmodeforce'] = 'Påtvinga gruppläge';
$string['groupmodeforce_help'] = 'Om gruppläget är påtvingat kommer gruppläget att tillämpas på varje aktivitet i kursen. Gruppinställningar för varje enskild aktivitet kommer då att ignoreras.';
$string['groupmy'] = 'Min grupp';
$string['groupname'] = 'Gruppnamn';
$string['groupnameexists'] = 'Gruppnamnet \'{$a}\' finns redan i den här kursen. Vänligen välj ett annat namn.';
$string['groupnotamember'] = 'Du är tyvärr inte medlem av den gruppen.';
$string['groups'] = 'Grupper';
$string['groupscount'] = 'Grupper ({$a})';
$string['groupsettingsheader'] = 'Grupper';
$string['groupsgroupings'] = 'Grupper & gruppindelningar';
$string['groupsinselectedgrouping'] = 'Grupper i:';
$string['groupsnone'] = 'Inga grupper';
$string['groupsonly'] = 'Endast grupper';
$string['groupspreview'] = 'Förhandsgranska grupper';
$string['groupsseparate'] = 'Separata grupper';
$string['groupsvisible'] = 'Synliga grupper';
$string['grouptemplate'] = 'Grupp @';
$string['hidepicture'] = 'Dölj bild';
$string['importgroups'] = 'Importera grupper';
$string['importgroups_help'] = 'Grupper kan importeras via textfiler. Formatet för filen ska vara som följer:

* Varje rad i filen innehåller en post
* Varje post är en serie av data separerade av kommatecken
* Den första posten innehåller en lista över fältnamn och definierar formatet på resten av filen.
* Obligatoriska fältnamn är <code>groupname</code> (gruppnamn)
* Valfria fältnamn är <code>description</code>, <code>enrolmentkey</code>, <code>picture</code> samt <code>hidepicture</code> (beskrivning, registreringsnyckel, bild, dölj bild)';
$string['importgroups_link'] = 'group/import';
$string['includeonlyactiveenrol'] = 'Inkludera endast aktiva registreringar';
$string['includeonlyactiveenrol_help'] = 'Om aktiverat inkluderas inte avstängda användare i grupper.';
$string['javascriptrequired'] = 'Den här sidan kräver Javascript för att fungera.';
$string['memberofgroup'] = 'Medlem i: {$a}';
$string['members'] = 'Medlemmar per grupp';
$string['membersofselectedgroup'] = 'Medlemmar i:';
$string['mygroups'] = 'Mina grupper';
$string['namingscheme'] = 'Namngivningsschema';
$string['namingscheme_help'] = 'At-symbolen (@) kan användas för att skapa grupper med namn som innehåller bokstäver. <code>Grupp @</code> genererar till exempel grupper med namnen "Grupp A", "Grupp B", "Grupp C", ...

Hash-symbolen (#) kan användas för att skapa grupper med namn som innehåller tal. <code>Grupp #</code> genererar till exempel grupper med namnen "Grupp 1", "Grupp 2", "Grupp 3", ...';
$string['newgrouping'] = 'Ny gruppindelning';
$string['newpicture'] = 'Ny bild';
$string['newpicture_help'] = 'Välj en bild i JPG- eller PNG-format. Bilden kommer att beskäras till en fyrkant som är 100x100 pixlar.';
$string['noallocation'] = 'Ingen tilldelning';
$string['nogroup'] = 'Ingen grupp';
$string['nogrouping'] = 'Ingen gruppindelning';
$string['nogroups'] = 'Det har inte skapats några grupper i den här kursen ännu.';
$string['nogroupsassigned'] = 'Det har inte tilldelats några grupper';
$string['nopermissionforcreation'] = 'Du har inte behörighet att skapa gruppen <b>"{$a}"</b>.';
$string['nosmallgroups'] = 'Förhindra den sista lilla gruppen';
$string['notingroup'] = 'Ignorera användare i grupper';
$string['notingrouping'] = 'Ej med i en gruppindelning';
$string['notingrouplist'] = 'Ej med i en grupp';
$string['nousersinrole'] = 'Det finns inga lämpliga användare i den valda rollen';
$string['number'] = 'Antal Grupper/medlemmar';
$string['numgroups'] = 'Antal grupper';
$string['nummembers'] = 'Medlemmar per grupp';
$string['othergroups'] = 'Övriga grupper';
$string['overview'] = 'Översikt';
$string['potentialmembers'] = 'Möjliga medlemmar: {$a}';
$string['potentialmembs'] = 'Möjliga medlemmar';
$string['printerfriendly'] = 'Utskriftsvänlig vy';
$string['privacy:metadata:core_message'] = 'Gruppkonversationerna';
$string['privacy:metadata:groups'] = 'En post med gruppmedlemskap.';
$string['privacy:metadata:groups:groupid'] = 'Gruppens ID';
$string['privacy:metadata:groups:timeadded'] = 'Tidsstämpeln som anger när användaren lades till i gruppen.';
$string['privacy:metadata:groups:userid'] = 'ID:t för den användare som är associerad med gruppen.';
$string['random'] = 'Slumpmässig';
$string['removefromgroup'] = 'Ta bort användare från grupp {$a}';
$string['removefromgroupconfirm'] = 'Vill du verkligen ta bort användaren <b>"{$a->user}"</b> från gruppen <b>"{$a->group}"</b>?';
$string['removegroupfromselectedgrouping'] = 'Ta bort grupp från gruppindelning';
$string['removegroupingsmembers'] = 'Ta bort alla grupper från gruppindelningar';
$string['removegroupsmembers'] = 'Ta bort alla medlemmar i gruppen';
$string['removeselectedusers'] = 'Ta bort de markerade användarna';
$string['selectfromgroup'] = 'Välj medlemmar från gruppen';
$string['selectfromgrouping'] = 'Välj medlemmar från gruppindelning';
$string['selectfromrole'] = 'Välj medlemmar med roll';
$string['showgroupsingrouping'] = 'Visa grupper i gruppindelningen';
$string['showmembersforgroup'] = 'Visa medlemmar i grupp';
$string['toomanygroups'] = 'Otillräckligt antal användare för att fylla upp det här antalet grupper - det finns bara {$a} användare i den valda rollen.';
$string['usercount'] = 'Antal användare';
$string['usercounttotal'] = 'Antal användare ({$a})';
$string['usergroupmembership'] = 'Vald användares medlemskap:';
