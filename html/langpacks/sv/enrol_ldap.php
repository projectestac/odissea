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
 * Strings for component 'enrol_ldap', language 'sv', version '3.11'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Tilldela rollen \'{$a->role_shortname}\' till användaren \'{$a->user_username}\' i kursen \'{$a->course_shortname}\' (id {$a->course_id})';
$string['assignrolefailed'] = 'Kunde inte tilldela rollen \'{$a->role_shortname}\' till användaren \'{$a->user_username}\' i kursen \'{$a->course_shortname}\' (id {$a->course_id})';
$string['autocreate'] = 'Kurser kan skapas automatiskt om det finns registreringar på en kurs som ännu inte finns i Moodle.';
$string['autocreate_key'] = 'Skapa automatiskt';
$string['autocreation_settings'] = 'Inställningar för att skapa kurser automatiskt.';
$string['autoupdate_settings'] = 'Inställningar för automatisk kursuppdatering';
$string['autoupdate_settings_desc'] = 'Välj fält som ska uppdateras när den schemalagda aktiviteten Synkronisera LDAP-kursregistreringar körs. När minst ett fält är markerat kommer en uppdatering att ske.';
$string['bind_dn'] = 'Om Du vill använda "bind"-användare för att söka användare så ska du ange detta här. Någonting i stil med \'cn=ldapuser,ou=public,o=org\'';
$string['bind_dn_key'] = 'Bind användarens unika namn';
$string['bind_pw'] = 'Lösenord för \'bind\'-användare';
$string['bind_pw_key'] = 'Lösenord';
$string['bind_settings'] = 'Bindningsinställningar';
$string['cannotcreatecourse'] = 'Kan inte skapa kurs. Det saknas obligatorisk data i LDAP-posten.';
$string['cannotupdatecourse'] = 'Kan inte skapa kurs. Det saknas obligatorisk data i LDAP-posten. Kurs-ID: \'{$a->idnumber}\'';
$string['cannotupdatecourse_duplicateshortname'] = 'Det går inte att uppdatera kursen: Duplicerat kortnamn. Hoppar över kurs med ID-nummer \'{$a->idnumber}\'...';
$string['category'] = 'Kategorin för automatiskt skapade kurser';
$string['category_key'] = 'Kategori';
$string['contexts'] = 'LDAP-kontext';
$string['couldnotfinduser'] = 'Hittar inte användare \'{$a}\'. Hoppar över.';
$string['course_fullname'] = 'Valfritt: LDAP-fält för att hämta det kompletta namnet från';
$string['course_fullname_key'] = 'Fullständigt namn';
$string['course_fullname_updateonsync'] = 'Uppdatera fullständigt namn vid körning av synkroniseringsskriptet';
$string['course_fullname_updateonsync_key'] = 'Uppdatera fullständigt namn';
$string['course_idnumber'] = 'Karta som visar var den unika identifieraren i LDAP finns, vanligtvis <em>cn</em> or <em>uid</em>. Du rekommenderas att låsa detta  värde om Du använder automatiskt skapande av kurser.';
$string['course_idnumber_key'] = 'ID-nummer';
$string['course_search_sub'] = 'Sök gruppmedlemskap i underkontext';
$string['course_search_sub_key'] = 'Sök underkontext';
$string['course_settings'] = 'Inställningar för registrering på kurser';
$string['course_shortname'] = 'Valfritt: LDAP-fält att hämta kortnamnet från.';
$string['course_shortname_key'] = 'Kortnamn';
$string['course_shortname_updateonsync'] = 'Uppdatera kortnamn vid körning av synkroniseringsskriptet';
$string['course_shortname_updateonsync_key'] = 'Uppdatera kortnamn';
$string['course_summary'] = 'Valfritt: LDAP-fält att hämta sammanfattningen från.';
$string['course_summary_key'] = 'Sammanfattning';
$string['course_summary_updateonsync'] = 'Uppdatera sammanfattning vid körning av synkroniseringsskriptet';
$string['course_summary_updateonsync_key'] = 'Uppdatera sammanfattning';
$string['coursenotexistskip'] = 'Kursen \'{$a}\' finns inte och <kbd>Skapa automatiskt</kbd> är inaktiverat. Hoppar över...';
$string['courseupdated'] = 'Kursen med ID \'{$a->idnumber}\' uppdaterades.';
$string['courseupdateskipped'] = 'Kursen med ID \'{$a->idnumber}\' behöver inte uppdateras. Hoppar över...';
$string['createcourseextid'] = 'SKAPA användare som är registrerad på en icke-existerande kurs \'{$a->courseextid}\'';
$string['createnotcourseextid'] = 'Användare är registrerad på en icke-existerande kurs \'{$a->courseextid}\'';
$string['creatingcourse'] = 'Skapar kurs \'{$a}\'...';
$string['duplicateshortname'] = 'Det gick inte att skapa kursen. Kortnamnet finns redan. Hoppar över kursen med ID \'{$a->idnumber}\'...';
$string['editlock'] = 'Lås värde';
$string['emptyenrolment'] = 'Tom kursregistrering för rollen \'{$a->role_shortname}\' i kursen \'{$a->course_shortname}\'';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = 'Registrera användare \'{$a->user_username}\' i kursen \'{$a->course_shortname}\' (id {$a->course_id})';
$string['enroluserenable'] = 'Aktiverade registreringen för användare \'{$a->user_username}\' i kursen \'{$a->course_shortname}\' (id {$a->course_id})';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group() stödjer inte vald användartyp: {$a}';
$string['extcourseidinvalid'] = 'Det externa kurs-ID:t är ogiltigt!';
$string['extremovedsuspend'] = 'Inaktiverade registreringen för användare \'{$a->user_username}\' i kursen \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedsuspendnoroles'] = 'Inaktiverade registreringen och tog bort rollerna för användare \'{$a->user_username}\' i kursen \'{$a->course_shortname}\' (id {$a->course_id})';
$string['extremovedunenrol'] = 'Avregistrera användare \'{$a->user_username}\' i kursen \'{$a->course_shortname}\' (id {$a->course_id})';
$string['failed'] = 'Misslyckades!';
$string['general_options'] = 'Allmänna inställningar';
$string['group_memberofattribute'] = 'Namn på attributet som anger vilka grupper en viss användare eller grupp tillhör (t.ex. memberOf, groupMembership, etc.)';
$string['group_memberofattribute_key'] = '\'Member of\'-attribut';
$string['host_url'] = 'Ange LDAP-värden i URL-form som \'ldap://ldap.myorg.com/\'
eller \'ldaps://ldap.myorg.com/\'';
$string['host_url_key'] = 'Server-URL';
$string['idnumber_attribute'] = 'Om gruppmedlemskapet innehåller unika namn anger du samma attribut som du har använt för användarens \'ID-nummer\'-mappning i LDAP-autentiseringsinställningarna.';
$string['idnumber_attribute_key'] = 'ID-nummer attribut';
$string['ldap:manage'] = 'Hantera LDAP-registreringsinstanser';
$string['ldap_encoding'] = 'Ange teckenkodningen som används av LDAP-servern. Antagligen utf-8. MS AD v2 använder standardteckenkodning såsom cp1252, cp1250, etc.';
$string['ldap_encoding_key'] = 'LDAP-kodning';
$string['memberattribute'] = 'Attribut för medlem i LDAP';
$string['memberattribute_isdn'] = 'Om gruppmedlemskapet innehåller unika namn måste du ange dem här. I så fall måste du också konfigurera de återstående inställningarna i det här avsnittet.';
$string['memberattribute_isdn_key'] = 'Medlemsattribut använder dn';
$string['nested_groups'] = 'Vill du använda nästlade grupper (grupper med grupper) för kursregistrering?';
$string['nested_groups_key'] = 'Nästlade grupper';
$string['nested_groups_settings'] = 'Inställningar för nästlade grupper';
$string['nosuchrole'] = 'Rollen finns inte: \'{$a}\'';
$string['objectclass'] = 'objectClass som används för att söka kurser. Vanligtvis \'posixGroup\'.';
$string['objectclass_key'] = 'Objektklass';
$string['ok'] = 'OK!';
$string['opt_deref'] = 'Om gruppmedlemskapet innehåller unika namn anger du hur alias hanteras vid en sökning. Välj något av följande värden: "Nej" (LDAP_DEREF_NEVER) eller "Ja" (LDAP_DEREF_ALWAYS).';
$string['opt_deref_key'] = 'Ta bort aliasreferenser';
$string['phpldap_noextension'] = 'PHP LDAP-modulen verkar inte vara tillgänglig. Se till att den är installerad och aktiverad om du vill använda den här pluginmodulen för kursregistreringar.';
$string['pluginname'] = 'Kursregistrering via LDAP';
$string['pluginname_desc'] = '<p>Du kan använda en LDAP-server för att styra dina registreringar. Utgångspunkten är att ditt LDAP-träd innehåller grupper som visar en karta till kurserna och att var och en av dessa grupper/kurser har kartor över medlemsdata som visar vägen till studenterna</p><p>Utgångspunkten är att kurser är definierade som grupper i LDAP där varje grupp har ett flertal fält för medlemsskap (<em>member</em> eller <em>memberUid</em>) som innehåller en unik identifiering av användaren.</p><p>För att använda LDAP-registrering <strong>måste</strong> dina användare ha giltiga fält för ID-nummer. LDAP-grupperna måste ha detta ID-nummer i fältet för medlemmar för att man ska kunna registrera en användare på en kurs. Detta kommer i normalfallet att fungera bra om du redan använder autentisering via LDAP.</p><p>Registreringarna kommer att uppdateras när användaren loggar in. Du kan också köra ett skript för att synkronisera registreringarna. Titta i <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Denna plugin kan också ställas in så att den automatiskt skapar nya kurser när det dyker upp nya grupper i LDAP.</p>';
$string['pluginnotenabled'] = 'Pluginmodul inaktiverad!';
$string['privacy:metadata'] = 'Pluginmodulen LDAP-kursregistrering lagrar ingen personinformation.';
$string['role_mapping'] = 'För varje roll måste du ange alla LDAP-sammanhang där grupperna som representerar kurserna finns. Separera olika sammanhang med ett semikolon (;). Du måste också ange det attribut som din LDAP-server använder för att hålla medlemmarna i en grupp. Detta är vanligtvis "member" eller "memberUid".';
$string['role_mapping_attribute'] = 'LDAP-medlemsattribut för {$a}';
$string['role_mapping_context'] = 'LDAP-kontext för {$a}';
$string['role_mapping_key'] = 'Matcha roller från LDAP';
$string['roles'] = 'Rollmappning';
$string['server_settings'] = 'LDAP-serverinställningar';
$string['synccourserole'] = '== Synkroniserar kurs \'{$a->idnumber}\' för rollen \'{$a->role_shortname}\'';
$string['syncenrolmentstask'] = 'Synkronisera kursregistreringar via LDAP';
$string['template'] = 'Valfritt: automatiskt skapade kurser kan kopiera sina inställningar från en kursmall.';
$string['template_key'] = 'Mall';
$string['unassignrole'] = 'Tar bort rollen \'{$a->role_shortname}\' för användare \'{$a->user_username}\' i kursen \'{$a->course_shortname}\' (id {$a->course_id})';
$string['unassignrolefailed'] = 'Det gick inte att ta bort rollen \'{$a->role_shortname}\' för användaren \'{$a->user_username}\' från kursen \'{$a->course_shortname}\' (ID: {$a->course_id})';
$string['unassignroleid'] = 'Ta bort tilldelningen av rollen med ID \'{$a->role_id}\' till användaren med ID \'{$a->user_id}\'';
$string['updatelocal'] = 'Uppdatera lokala data';
$string['user_attribute'] = 'Om gruppmedlemskapet innehåller unika namn anger du det attribut som används för att namnge/söka efter användare. Om du använder LDAP-autentisering ska det här värdet matcha attributet som anges i \'ID-nummer\'-mappningen i LDAP-autentiseringspluginmodulen.';
$string['user_attribute_key'] = 'ID-nummer attribut';
$string['user_contexts'] = 'Om gruppmedlemskapet innehåller unika namn anger du listan över kontext där användarna finns. Separera olika sammanhang med ett semikolon (;). Till exempel: <var>ou=users,o=org; ou=others,o=org</var>.';
$string['user_contexts_key'] = 'Kontext';
$string['user_search_sub'] = 'Om gruppmedlemskapet innehåller unika namn anger du om sökningen efter användare också görs i underkontexter.';
$string['user_search_sub_key'] = 'Sök i underliggande kontext';
$string['user_settings'] = 'Inställningar för användarsökning';
$string['user_type'] = 'Om gruppmedlemskapet innehåller unika namn anger du hur användare lagras i LDAP';
$string['user_type_key'] = 'Användartyp';
$string['version'] = 'Detta är den version av LDAP-protokollet som DIn server använder.';
$string['version_key'] = 'Version';
