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
 * Strings for component 'forum', language 'ca', version '4.1'.
 *
 * @package     forum
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actionsforgraderinterface'] = 'Accions per a la interfície del qualificador';
$string['actionsforpost'] = 'Accions per a la publicació';
$string['activitydate:due'] = 'Venciment:';
$string['activityoverview'] = 'Hi ha missatges nous al fòrum';
$string['addanewdiscussion'] = 'Afegeix un tema de debat';
$string['addanewquestion'] = 'Afegeix una pregunta nova';
$string['addanewtopic'] = 'Afegeix un tema nou';
$string['addreply'] = 'Afegeix una resposta';
$string['addtofavourites'] = 'Destaca aquest debat';
$string['advancedsearch'] = 'Cerca avançada';
$string['alldiscussions'] = 'Tots els debats';
$string['allforums'] = 'Tots els fòrums';
$string['allowdiscussions'] = 'Pot un {$a} enviar un missatge a aquest fòrum?';
$string['allowsallsubscribe'] = 'Aquest fòrum permet que cadascú triï si vol subscriure-s\'hi o no.';
$string['allowsdiscussions'] = 'Aquest fòrum permet que cada persona iniciï un tema de debat.';
$string['allsubscribe'] = 'Subscriu-me a tots els fòrums';
$string['allunsubscribe'] = 'Cancel·la la subscripció a tots els fòrums';
$string['allusers'] = 'Tots els usuaris';
$string['alreadyfirstpost'] = 'Aquest ja és el missatge inicial del debat';
$string['anyfile'] = 'Qualsevol fitxer';
$string['areaattachment'] = 'Fitxers adjunts';
$string['areapost'] = 'Missatges';
$string['attachment'] = 'Fitxer adjunt';
$string['attachment_help'] = 'Podeu adjuntar un o més fitxers a cada missatge enviat al fòrum. Si hi adjunteu una imatge, es visualitzarà al final del missatge.';
$string['attachmentname'] = 'Fitxer adjunt {$a}';
$string['attachmentnameandfilesize'] = '{$a->name} ({$a->size})';
$string['attachmentnopost'] = 'No podeu exportar els adjunts sense l\'ID del missatge';
$string['attachments'] = 'Fitxers adjunts';
$string['attachmentswordcount'] = 'Comptador de fitxers adjunts i paraules';
$string['authorreplyingprivatelytoauthor'] = '{$a->respondant} responent privadament a {$a->author}';
$string['authorreplyingtoauthor'] = '{$a->respondant} responent a {$a->author}';
$string['availability'] = 'Disponibilitat';
$string['blockafter'] = 'Llindar de missatges per blocar';
$string['blockafter_help'] = 'Aquest paràmetre especifica el nombre màxim de missatges que un usuari pot enviar al fòrum en el període de temps establert. Aquest límit no afecta els usuaris amb privilegis mod/forum:postwithoutthrottling (usualment els administradors o professors).';
$string['blockperiod'] = 'Període de temps per blocar';
$string['blockperiod_help'] = 'Es pot limitar el nombre de missatges que l\'estudiant envia a un fòrum en un temps determinat. Aquest límit no afecta els usuaris amb privilegis mod/forum:postwithoutthrottling (usualment els administradors o professors).';
$string['blockperioddisabled'] = 'No bloquis';
$string['blogforum'] = 'Fòrum estàndard mostrat com si fos un blog';
$string['bynameondate'] = 'per {$a->name} - {$a->date}';
$string['cachedef_forum_is_tracked'] = 'Estat del seguiment del fòrum per a l\'usuari';
$string['calendardue'] = 'Venciment del {$a}';
$string['cancelreply'] = 'Cancel·la la resposta';
$string['cannotadd'] = 'No s\'ha pogut afegir el debat al fòrum';
$string['cannotadddiscussion'] = 'Afegir debats en aquest fòrum requereix pertànyer al grup.';
$string['cannotadddiscussionall'] = 'No teniu permís per a afegir un tema de debat nou per a tots els participants.';
$string['cannotadddiscussiongroup'] = 'No podeu crear un debat perquè no sou membre de cap grup.';
$string['cannotaddsubscriber'] = 'No es pot afegir la subscripció de l\'usuari ID {$a} en aquest fòrum.';
$string['cannotaddteacherforumto'] = 'No s\'ha pogut agregar instància al fòrum del professor en la secció 0 del curs.';
$string['cannotcreatediscussion'] = 'No s\'ha pogut obrir un debat nou';
$string['cannotcreateinstanceforteacher'] = 'No s\'ha pogut crear una instància nova del mòdul de curs al fòrum del professor.';
$string['cannotdeletepost'] = 'No podeu esborrar aquest missatge';
$string['cannoteditposts'] = 'No podeu modificar els missatges d\'altres usuaris';
$string['cannotexportforum'] = 'No podeu exportar aquest fòrum';
$string['cannotfavourite'] = 'No teniu permís per destacar debats.';
$string['cannotfinddiscussion'] = 'No s\'ha pogut trobar el debat en aquest fòrum';
$string['cannotfindfirstpost'] = 'No s\'ha pogut trobar el primer missatge d\'aquest fòrum';
$string['cannotfindorcreateforum'] = 'No s\'ha pogut trobar ni crear el fòrum general d\'anuncis del lloc';
$string['cannotfindparentpost'] = 'No s\'ha pogut trobar l\'inici del debat del missatge {$a}';
$string['cannotmovefromsingleforum'] = 'No es pot traslladar el debat que pertany a un fòrum del tipus «debat simple»';
$string['cannotmovenotvisible'] = 'El fòrum no és visible';
$string['cannotmovetonotexist'] = 'No pot fer-se el trasllat perquè el fòrum no existeix';
$string['cannotmovetonotfound'] = 'No s\'ha trobat el fòrum de destinació en aquest curs';
$string['cannotmovetosingleforum'] = 'No es pot traslladar el debat a un fòrum del tipus «debat simple»';
$string['cannotpindiscussions'] = 'No teniu permís per fixar debats.';
$string['cannotpurgecachedrss'] = 'No s\'han pogut eliminar de la memòria CAU els canals RSS dels fòrums d\'origen i/o destinació. Comproveu els permisos dels fitxers.';
$string['cannotremovesubscriber'] = 'No s\'ha pogut cancel·lar la subscripció de l\'usuari ID {$a} en aquest fòrum.';
$string['cannotreply'] = 'No podeu respondre aquest missatge';
$string['cannotsplit'] = 'Els debats d\'aquest fòrum no es poden dividir';
$string['cannotsubscribe'] = 'Només els membres del grup es poden subscriure.';
$string['cannottrack'] = 'El seguiment d\'aquest fòrum no es pot interrompre';
$string['cannotunsubscribe'] = 'La vostra subscripció a aquest fòrum no es pot cancel·lar';
$string['cannotupdatepost'] = 'No podeu actualitzar aquest missatge';
$string['cannotviewpostyet'] = 'Encara no podeu llegir les preguntes d\'altres estudiants en aquest debat perquè no hi heu enviat cap missatge';
$string['cannotviewusersposts'] = 'No hi ha missatges d\'aquest usuari a la vostra disposició';
$string['cleanreadtime'] = 'Hora per a marcar els missatges vells com a llegits';
$string['clicktofavourite'] = 'No heu destacat aquest debat. Feu clic per destacar-lo.';
$string['clicktolockdiscussion'] = 'Feu clic per blocar aquest debat';
$string['clicktosubscribe'] = 'No us heu subscrit a aquest debat. Cliqueu per a subscriure-us-hi.';
$string['clicktounfavourite'] = 'Heu destacat aquest debat. Feu clic per deixar de destacar-lo.';
$string['clicktounlockdiscussion'] = 'Feu clic per desblocar aquest debat.';
$string['clicktounsubscribe'] = 'Us heu subscrit a aquest debat. Cliqueu per cancel·lar la subscripció.';
$string['close'] = 'Tanca';
$string['closegrader'] = 'Tanca el qualificador';
$string['completiondetail:discussions'] = 'Comença debats: {$a}';
$string['completiondetail:posts'] = 'Envia missatges al fòrum: {$a}';
$string['completiondetail:replies'] = 'Envia respostes: {$a}';
$string['completiondiscussions'] = 'L\'estudiant ha d\'obrir debats:';
$string['completiondiscussionsdesc'] = 'L\'estudiant ha de crear almenys {$a} debat(s)';
$string['completiondiscussionsgroup'] = 'Requereix obrir debats';
$string['completiondiscussionshelp'] = 'S\'han de tancar els debats';
$string['completionposts'] = 'L\'estudiant ha d\'obrir debats o participar-hi:';
$string['completionpostsdesc'] = 'L\'estudiant ha d\'obrir debats o participar-hi almenys amb {$a} intervencions';
$string['completionpostsgroup'] = 'Requereix contribucions';
$string['completionpostshelp'] = 'Cal que acabeu els debats o les respostes.';
$string['completionreplies'] = 'L\'estudiant ha d\'enviar respostes als debats:';
$string['completionrepliesdesc'] = 'L\'estudiant ha de participar-hi almenys amb {$a} respostes';
$string['completionrepliesgroup'] = 'Requereix respostes';
$string['completionreplieshelp'] = 'S\'han de finalitzar les respostes';
$string['configcleanreadtime'] = 'L\'hora del dia per a netejar missatges vells de la taula de missatges llegits.';
$string['configdigestmailtime'] = 'Les persones que triïn rebre el correu electrònic en format resum, el rebran una vegada al dia. Aquest paràmetre controla a quina hora s\'envia el resum diari (l\'enviarà el següent cron que s\'executi després d\'aquesta hora).';
$string['configdisplaymode'] = 'El mode de visualització per defecte dels debats si no se n\'especifica un.';
$string['configenablerssfeeds'] = 'Aquest commutador habilitarà la possibilitat de tenir agregats RSS en tots els fòrums. Tot i això, haureu d\'activar els agregats en els paràmetres de cada fòrum.';
$string['configenabletimedposts'] = 'Aquesta opció permet definir un període de visualització quan es crea un debat nou en un fòrum.';
$string['configlongpost'] = 'Qualsevol missatge per damunt d\'aquesta mida (exclòs l\'HTML) es considera massa llarg. Els missatges que es mostren a la pàgina principal del lloc, a les pàgines d\'un curs amb format social o als perfils d\'usuari s\'escurcen fins a un tall natural en algun punt entre els valors forum_shortpost i forum_longpost.';
$string['configmanydiscussions'] = 'Nombre màxim de debats per pàgina';
$string['configmaxattachments'] = 'El nombre màxim per defecte de fitxers adjunts admesos per cada missatge.';
$string['configmaxbytes'] = 'Mida màxima per defecte per a tots els fitxers adjuntats als fòrums d\'aquest lloc (subjecta als límits de cada curs i a altres paràmetres locals)';
$string['configoldpostdays'] = 'Nombre de dies que han de passar per a donar per llegit un missatge.';
$string['configreplytouser'] = 'Quan s\'envia per correu un missatge d\'un fòrum, ha de portar l\'adreça de l\'usuari com a remitent de manera que els destinataris puguin contestar-li privadament per correu? Encara que s\'especifiqui així, els usuaris poden triar en el seu perfil de mantenir oculta l\'adreça de correu.';
$string['configrssarticlesdefault'] = 'Si el canal de continguts RSS està habilitat, configura el nombre d\'articles per defecte (ja siguin debats o missatges).';
$string['configrsstypedefault'] = 'Si el canal de continguts RSS està habilitat, configura el tipus d\'activitat per defecte.';
$string['configshortpost'] = 'Qualsevol missatge per sota d\'aquesta longitud (en caràcters que no incloguin HTML) es considera massa breu (vegeu més avall).';
$string['configsubscriptiontype'] = 'Paràmetre per defecte del mode de subscripció.';
$string['configtrackingtype'] = 'Configuració per defecte per al seguiment de la lectura.';
$string['configtrackreadposts'] = 'Poseu «sí» per fer el seguiment dels missatges llegits/no llegits per cada usuari.';
$string['configusermarksread'] = '«Sí» vol dir que l\'usuari ha de marcar el missatge com a llegit. «No» vol dir que en llegir un missatge es marca automàticament com a llegit.';
$string['confirmsubscribe'] = 'Segur que voleu subscriure-us al fòrum «{$a}»?';
$string['confirmsubscribediscussion'] = 'De veritat voleu subscriure-us al debat «{$a->discussion}» al fòrum «{$a->forum}»?';
$string['confirmunsubscribe'] = 'Segur que voleu cancel·lar la vostra subscripció al fòrum «{$a}»?';
$string['confirmunsubscribediscussion'] = 'De veritat voleu cancel·lar la subscripció del debat «{$a->discussion}» al fòrum «{$a->forum}»?';
$string['couldnotadd'] = 'Un error desconegut ha impedit afegir el vostre missatge';
$string['couldnotdeletereplies'] = 'No es pot suprimir perquè ja l\'han contestat altres persones';
$string['couldnotupdate'] = 'Un error desconegut ha impedit actualitzar el vostre missatge';
$string['created'] = 'Creat';
$string['crontask'] = 'Tasques de manteniment i missatgeria del fòrum';
$string['cutoffdate'] = 'Data límit';
$string['cutoffdate_help'] = 'Si s\'habilita, el fòrum no acceptarà missatges després d\'aquesta data.';
$string['cutoffdatereached'] = 'La data límit per enviar missatges al fòrum ha passat, no podeu enviar-ne més.';
$string['cutoffdatevalidation'] = 'La data límit no pot ser anterior a la data de venciment.';
$string['delete'] = 'Suprimeix';
$string['deleteddiscussion'] = 'El tema de debat s\'ha suprimit';
$string['deletedpost'] = 'El missatge s\'ha suprimit';
$string['deletedposts'] = 'Aquests missatges s\'han suprimit';
$string['deleteduser'] = 'S\'ha esborrat l\'usuari';
$string['deletesure'] = 'Segur que voleu suprimir aquest missatge?';
$string['deletesureplural'] = 'Segur que voleu suprimir aquest missatges i totes les seves respostes? ({$a} missatges)';
$string['digestmailheader'] = 'Aquest és el vostre resum diari de missatges enviats als fòrums de {$a->sitename}. Si voleu canviar les vostres preferències de correu per defecte dels fòrums, aneu a {$a->userprefs}.';
$string['digestmailpost'] = 'Canvia les vostres preferències de resum per al fòrum';
$string['digestmailpostlink'] = 'Canvieu les preferències al resum del fòrum: {$a}';
$string['digestmailprefs'] = 'el vostre perfil d\'usuari';
$string['digestmailsubject'] = 'Resum diari de missatges {$a}';
$string['digestmailtime'] = 'Hora per enviar el correu en format resum';
$string['digestsentusers'] = 'S\'han enviat amb èxit els resums de correu de: {$a} usuaris.';
$string['disallowsubscribe'] = 'No es permeten subscripcions';
$string['disallowsubscribeteacher'] = 'No es permeten subscripcions (excepte als professors)';
$string['disallowsubscription'] = 'Subscripció';
$string['disallowsubscription_help'] = 'Aquest fòrum s\'ha configurat de manera que no us podeu subscriure als debats.';
$string['discussion'] = 'Debat';
$string['discussionlistsortbycreatedasc'] = 'Ordena per data de creació en ordre ascendent';
$string['discussionlistsortbycreateddesc'] = 'Ordena per data de creació en ordre descendent';
$string['discussionlistsortbydiscussionasc'] = 'Ordena pel nom del debat en ordre ascendent';
$string['discussionlistsortbydiscussiondesc'] = 'Ordena pel nom del debat en ordre descendent';
$string['discussionlistsortbygroupasc'] = 'Ordena per grup en ordre ascendent';
$string['discussionlistsortbygroupdesc'] = 'Ordena per grup en ordre descendent';
$string['discussionlistsortbylastpostasc'] = 'Ordena per data de creació de l\'ultim missatge en ordre ascendent';
$string['discussionlistsortbylastpostdesc'] = 'Ordena per data de creació de l\'ultim missatge en ordre descendent';
$string['discussionlistsortbyrepliesasc'] = 'Ordena per nombre de respostes en ordre ascendent';
$string['discussionlistsortbyrepliesdesc'] = 'Ordena per nombre de respostes en ordre descendent';
$string['discussionlistsortbystarterasc'] = 'Ordena per nom d\'usuari que comença el debat en ordre ascendent';
$string['discussionlistsortbystarterdesc'] = 'Ordena per nom d\'usuari que comença el debat en ordre descendent';
$string['discussionlocked'] = 'Aquest fil de debat ha finalitzat, així que no admet respostes.';
$string['discussionlockingdisabled'] = 'No bloquegis els debats';
$string['discussionlockingheader'] = 'Bloqueig del debat';
$string['discussionmoved'] = 'Aquest debat s\'ha traslladat a «{$a}».';
$string['discussionmovedpost'] = 'Aquest debat s\'ha traslladat <a href="{$a->discusshref}">aquí</a> dins del fòrum <a href="{$a->forumhref}">{$a->forumname}</a>';
$string['discussionname'] = 'Títol del debat';
$string['discussionnownotsubscribed'] = '{$a->name} NO rebrà més notificacions de missatges al «{$a->discussion}» del «{$a->forum}»';
$string['discussionnowsubscribed'] = '{$a->name} rebrà notificacions dels missatges nous al debat «{$a->discussion}» del fòrum «{$a->forum}»';
$string['discussionpin'] = 'Fixa';
$string['discussionpinned'] = 'Fixat';
$string['discussionpinned_help'] = 'Les discussions fixades apareixeran al capdamunt del fòrum.';
$string['discussions'] = 'Debats';
$string['discussionsplit'] = 'El debat s\'ha dividit';
$string['discussionsstartedby'] = 'Debats iniciats per {$a}';
$string['discussionsstartedbyrecent'] = 'Debats iniciats recentment per {$a}';
$string['discussionsstartedbyuserincourse'] = 'Debats iniciats per {$a->fullname} en el curs {$a->coursename}';
$string['discussionsstartedincourse'] = 'Els debats van començar el {$a}';
$string['discussionstartedby'] = '{$a} ha començat el debat';
$string['discussionsubscribed'] = 'Ara esteu subscrit a aquest debat.';
$string['discussionsubscribestart'] = 'Envieu-me notificacions de missatges nous en aquest debat';
$string['discussionsubscribestop'] = 'No vull rebre més notificacions de missatges nous en aquest debat';
$string['discussionsubscription'] = 'Subscripció als debats';
$string['discussionsubscription_help'] = 'Subscriure\'s a un debat significa que rebreu notificacions quan s\'afegeixin nous missatges a aquell debat.';
$string['discussionunpin'] = 'Desfixa';
$string['discussionunsubscribed'] = 'Ara no esteu subscrit a aquest debat.';
$string['discussthistopic'] = 'Debateu aquest tema';
$string['discusstopicname'] = 'Debateu aquest tema: {$a}';
$string['displayend'] = 'Fi de la visualització';
$string['displayend_help'] = 'Aquest paràmetre especifica si un missatge del fòrum s\'ha d\'amagar a partir d\'una data determinada. Els administradors, però, sempre podran veure els missatges.';
$string['displayenddate'] = 'La visualització acaba: {$a}';
$string['displaymode'] = 'Mode de visualització';
$string['displayperiod'] = 'Període de visualització';
$string['displaystart'] = 'Inici de la visualització';
$string['displaystart_help'] = 'Aquest paràmetre especifica si un missatge del fòrum s\'ha de mostrar només a partir d\'una data determinada. Els administradors, però, sempre podran veure els missatges.';
$string['displaystartdate'] = 'La visualització comença: {$a}';
$string['displaywordcount'] = 'Mostra el nombre de paraules';
$string['displaywordcount_help'] = 'Aquest paràmetre especifica si el nombre de paraules de cada missatge s\'ha de mostrar o no.';
$string['duedate'] = 'Data de venciment';
$string['duedate_help'] = 'És la data fins a la qual s\'espera que s\'enviïn missatges al fòrum. Tot i que aquesta data es mostra al calendari com a data de venciment per al fòrum, seria possible enviar missatges després d\'aquesta data. Establiu una data límit al fòrum per tal d\'evitar que s\'enviïn missatges després d\'una data determinada.';
$string['duedatetodisplayincalendar'] = 'Data de venciment per mostrar al calendari';
$string['eachuserforum'] = 'Cada persona inicia un debat';
$string['edit'] = 'Edita';
$string['editdiscussion'] = 'Edita el debat';
$string['editdiscussiontopic'] = 'Edita el tema de debat';
$string['editedby'] = 'Editat per {$a->name} - Missatge original enviat el {$a->date}';
$string['editedpostupdated'] = 'El missatge de {$a} s\'ha actualitzat';
$string['editing'] = 'S\'està editant';
$string['emaildigestcompleteshort'] = 'Missatges complets';
$string['emaildigestdefault'] = 'Per defecte ({$a})';
$string['emaildigestoffshort'] = 'Sense resum';
$string['emaildigestsubjectsshort'] = 'Sols assumptes';
$string['emaildigesttype'] = 'Opcions de resum del correu electrònic';
$string['emaildigesttype_help'] = 'El tipus de notificacions que rebreu de cada fòrum.

* Per defecte: mantindrà els paràmetres de resum trobats al vostre perfil. Si actualitzeu els vostre perfil, el canvi es reflectirà també aquí.
* Sense resum, missatges complets: rebreu un correu electrònic per cada missatge del fòrum.
* Resum, missatges complets: rebreu un correu de resum al dia que contindrà els missatges complets del fòrum.
* Resum, sols assumptes: rebreu un correu de resum al dia que contindrà només els assumptes dels missatges del fòrum.';
$string['emptymessage'] = 'El vostre missatge presentava algun problema. Potser l\'havíeu deixat en blanc, o el fitxer adjunt era massa gran. Els canvis NO s\'han desat.';
$string['errorcannotlock'] = 'No teniu permís per blocar debats.';
$string['erroremptymessage'] = 'El missatge no pot estar buit';
$string['erroremptysubject'] = 'La casella «Assumpte» no pot estar buida';
$string['errorenrolmentrequired'] = 'Us heu d\'haver inscrit en aquest curs per a poder accedir a aquest contingut';
$string['errorwhiledelete'] = 'S\'ha produït un error en esborrar el registre.';
$string['eventassessableuploaded'] = 'S\'han publicat alguns continguts.';
$string['eventcoursesearched'] = 'Curs cercat';
$string['eventdiscussioncreated'] = 'S\'ha creat el debat';
$string['eventdiscussiondeleted'] = 'S\'ha suprimit el debat';
$string['eventdiscussionmoved'] = 'S\'ha canviat de lloc el debat';
$string['eventdiscussionpinned'] = 'S\'ha fixat la discussió';
$string['eventdiscussionsubscriptioncreated'] = 'S\'ha creat la subscripció a la discussió';
$string['eventdiscussionsubscriptiondeleted'] = 'S\'ha esborrat la subscripció a la discussió';
$string['eventdiscussionunpinned'] = 'S\'ha desfixat la discussió';
$string['eventdiscussionupdated'] = 'S\'ha actualitzat el debat';
$string['eventdiscussionviewed'] = 'S\'ha mostrat el debat';
$string['eventpostcreated'] = 'S\'ha creat el missatge';
$string['eventpostdeleted'] = 'S\'ha suprimit el missatge';
$string['eventpostupdated'] = 'S\'ha actualitzat el missatge';
$string['eventreadtrackingdisabled'] = 'S\'ha inhabilitat el seguiment de lectures';
$string['eventreadtrackingenabled'] = 'S\'ha habilitat el seguiment de lectures';
$string['eventsubscribersviewed'] = 'S\'han mostrat el subscriptors';
$string['eventsubscriptioncreated'] = 'S\'ha creat la subscripció';
$string['eventsubscriptiondeleted'] = 'S\'ha suprimit la subscripció';
$string['eventuserreportviewed'] = 'S\'ha mostrat l\'informe de l\'usuari';
$string['everyonecanchoose'] = 'Cadascú pot triar subscriure\'s';
$string['everyonecannowchoose'] = 'A partir d\'ara cadascú pot triar subscriure\'s';
$string['everyoneisnowsubscribed'] = 'Ara tothom està subscrit a aquest fòrum';
$string['everyoneissubscribed'] = 'Tothom està subscrit a aquest fòrum';
$string['existingsubscribers'] = 'Subscriptors actuals';
$string['export'] = 'Exporta';
$string['exportattachmentname'] = 'Exporta el fitxer adjunt {$a} al portafolis';
$string['exportdiscussion'] = 'Exporta el debat sencer al portafolis';
$string['exporthumandates'] = 'Dates intel·ligibles per a humans';
$string['exporthumandates_help'] = 'Estableix si les dates s\'haurien d\'exportar en un format llegible per humans o com a marca de temps (seqüència de nombres).';
$string['exportoptions'] = 'Exporta les opcions';
$string['exportstriphtml'] = 'Elimina l\'HTML';
$string['exportstriphtml_help'] = 'Estableix si les etiquetes HTML, com ara p i br, s\'haurien de suprimir del missatge al fòrum.';
$string['favourites'] = 'Destacat';
$string['favouriteupdated'] = 'L\'opció de destacat s\'ha actualitzat.';
$string['firstpost'] = 'Primer missatge';
$string['forcedreadtracking'] = 'Habilita el seguiment de lectura forçat';
$string['forcedreadtracking_desc'] = 'Si habiliteu configurar els fòrums per seguir la lectura forçada, disminuireu el rendiment per a alguns usuaris, sobretot en cursos amb molts fòrums i missatges. Si no ho habiliteu, qualsevol fòrum configurat prèviament com a forçat es tractarà com a opcional.';
$string['forcesubscribed'] = 'Aquest fòrum subscriu obligatòriament a tothom';
$string['forcesubscribed_help'] = 'El fòrum ha estat configurat de forma que no podeu cancel·lar la subscripció als debats.';
$string['forum'] = 'Fòrum';
$string['forum:addinstance'] = 'Afegeix un fòrum nou';
$string['forum:addnews'] = 'Afegeix anuncis';
$string['forum:addquestion'] = 'Afegeix una pregunta';
$string['forum:allowforcesubscribe'] = 'Permet imposar la subscripció';
$string['forum:canoverridecutoff'] = 'Publica als fòrums més enllà de la seva data límit';
$string['forum:canoverridediscussionlock'] = 'Respon a debats tancats';
$string['forum:canposttomygroups'] = 'Els missatges s\'envien a tots els grups als quals teniu accés';
$string['forum:cantogglefavourite'] = 'Destaca els debats';
$string['forum:createattachment'] = 'Crea adjuncions';
$string['forum:deleteanypost'] = 'Suprimeix qualsevol missatge (sempre)';
$string['forum:deleteownpost'] = 'Suprimeix els missatges propis (dins del termini)';
$string['forum:editanypost'] = 'Edita qualsevol missatge';
$string['forum:exportdiscussion'] = 'Exporta el debat sencer';
$string['forum:exportforum'] = 'Exporta el fòrum';
$string['forum:exportownpost'] = 'Exporta les contribucions pròpies';
$string['forum:exportpost'] = 'Exporta les contribucions';
$string['forum:grade'] = 'Puntua el fòrum';
$string['forum:managesubscriptions'] = 'Gestiona els subscriptors';
$string['forum:movediscussions'] = 'Trasllada els debats';
$string['forum:pindiscussions'] = 'Fixa les discussions';
$string['forum:postprivatereply'] = 'Respon a les publicacions de forma privada';
$string['forum:postwithoutthrottling'] = 'Exempt del llindar de missatges';
$string['forum:rate'] = 'Valora els missatges';
$string['forum:readprivatereplies'] = 'Visualitza les respostes privades';
$string['forum:replynews'] = 'Respon als anuncis';
$string['forum:replypost'] = 'Respondre els missatges';
$string['forum:splitdiscussions'] = 'Divideix els debats';
$string['forum:startdiscussion'] = 'Comença debats nous';
$string['forum:viewallratings'] = 'Visualitza totes les valoracions fetes individualment';
$string['forum:viewanyrating'] = 'Visualitza les valoracions totals rebudes per tothom';
$string['forum:viewdiscussion'] = 'Visualitza els debats';
$string['forum:viewhiddentimedposts'] = 'Mostra els missatges temporitzats ocults';
$string['forum:viewqandawithoutposting'] = 'Mostra sempre les contribucions de preguntes i respostes';
$string['forum:viewrating'] = 'Mostra la valoració total que heu rebut';
$string['forum:viewsubscribers'] = 'Mostra els subscriptors';
$string['forumauthorhidden'] = 'Autor (ocult)';
$string['forumblockingalmosttoomanyposts'] = 'Us esteu apropant al llindar de missatges. Heu enviat {$a->numposts} missatges en {$a->blockperiod} i el límit són {$a->blockafter} missatges.';
$string['forumbodydeleted'] = 'El contingut del missatge al fòrum s\'ha suprimit i ja no hi podeu accedir.';
$string['forumbodyhidden'] = 'No podeu veure aquest missatge, probablement perquè: encara no heu enviat un missatge en aquest debat, encara no ha conclòs el temps màxim d\'edició, el debat encara no ha començat o el debat ja ha acabat.';
$string['forumgrader'] = 'Qualificador del fòrum';
$string['forumgradingnavigation'] = 'Navegació de la qualificació del fòrum';
$string['forumgradingpanel'] = 'Panell de la qualificació del fòrum';
$string['forumintro'] = 'Descripció';
$string['forumname'] = 'Nom del fòrum';
$string['forumposts'] = 'Missatges al fòrum';
$string['forums'] = 'Fòrums';
$string['forumsubjectdeleted'] = 'S\'ha suprimit aquest missatge del fòrum';
$string['forumsubjecthidden'] = 'Assumpte (ocult)';
$string['forumtracked'] = 'S\'està fent el seguiment dels missatges no llegits';
$string['forumtrackednot'] = 'No s\'està fent el seguiment dels missatges no llegits';
$string['forumtype'] = 'Tipus de fòrum';
$string['forumtype_help'] = 'Hi ha 5 tipus de fòrums:

* Cada persona inicia un debat. Cada estudiant pot obrir únicament un tema de debat (i tothom pot enviar-hi respostes).
* Fòrum de preguntes i respostes. L\'estudiant ha d\'enviar la seva resposta per poder veure les respostes dels seus companys.
* Fòrum estàndard mostrat com si fos un blog. És un fòrum obert en el qual tothom pot iniciar un tema de debat nou en qualsevol moment. Els seus temes de debat es mostren a una pàgina amb enllaços tipus «Debateu aquest tema».
* Fòrum estàndard per a ús general. És un fòrum obert en el qual tothom pot iniciar un tema de debat nou en qualsevol moment.
* Un debat simple. És un sol tema de debat al qual tothom pot respondre (no es pot fer servir amb grups separats).';
$string['generalforum'] = 'Fòrum estàndard per a ús general';
$string['generalforums'] = 'Fòrums generals';
$string['grade_forum_header'] = 'Qualificació de tot el fòrum';
$string['grade_forum_name'] = 'Fòrum sencer';
$string['grade_forum_title'] = 'Qualificació';
$string['grade_rating_name'] = 'Valoració';
$string['graded'] = 'Qualificat';
$string['gradedby'] = 'Qualificat per';
$string['gradeforrating'] = 'Qualificació per la valoració: {$a->str_long_grade}';
$string['gradeforratinghidden'] = 'Qualificació per la valoració oculta';
$string['gradeforwholeforum'] = 'Qualificació per al fòrum: {$a->str_long_grade}';
$string['gradeforwholeforumhidden'] = 'Qualificació per al fòrum oculta';
$string['gradeitem:forum'] = 'Fòrum';
$string['gradeitemnameforrating'] = 'Qualificació de les valoracions per a {$a->name}';
$string['gradeitemnameforwholeforum'] = 'Qualificació del fòrum sencer per a {$a->name}';
$string['grades:gradesavedfor'] = 'S\'ha desat la qualificació de {$a->fullname}';
$string['grades:gradesavefailed'] = 'No s\'ha pogut desat la qualificació de {$a->fullname}: {$a->error}';
$string['gradeusers'] = 'Qualifica els usuaris';
$string['grading'] = 'S\'està qualificant';
$string['gradingstatus'] = 'Estat de la qualificació:';
$string['hiddenforumpost'] = 'Amaga el missatge al fòrum';
$string['hidegraderpanel'] = 'Amaga el panell del qualificador';
$string['hidepreviousrepliescount'] = 'Oculta les respostes prèvies ({$a})';
$string['hideusersearch'] = 'Amaga la cerca d\'usuaris';
$string['indexoutoftotal'] = '{$a->index} de {$a->total}';
$string['indicator:cognitivedepth'] = 'Fòrum: aspecte cognitiu';
$string['indicator:cognitivedepth_help'] = 'Aquest indicador es basa en la profunditat cognitiva que ha assolit l\'estudiant en una activitat de fòrum.';
$string['indicator:cognitivedepthdef'] = 'Fòrum: aspecte cognitiu';
$string['indicator:cognitivedepthdef_help'] = 'El participant ha assolit aquest percentatge de la implicació cognitiva oferta per les activitats de Fòrum en el decurs d\'aquest interval d\'anàlisi (Nivells = No visualització, Visualització, Enviament, Visualització de retroalimentacions, Comenaris a les retroalimentacions, Reenviament després de veure les retroalimentacions)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'Fòrum social';
$string['indicator:socialbreadth_help'] = 'Aquest indicador es basa en l\'abast social assolit per l\'estudiant en una activitat de fòrum.';
$string['indicator:socialbreadthdef'] = 'Fòrum social';
$string['indicator:socialbreadthdef_help'] = 'El participant ha assolit aquest percentatge de compromís social oferit per les activitats de fòrum durant aquest interval d\'anàlisi (Nivells: Sense participació, Hi participa tot sol, Hi participa amb altres persones)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inforum'] = 'en {$a}';
$string['inreplyto'] = 'En resposta a {$a}';
$string['introblog'] = 'Els missatges d\'alguns blogs d\'usuaris d\'aquest curs s\'han copiat automàticament en aquest fòrum perquè les entrades d\'aquests blogs ja no estan disponibles';
$string['intronews'] = 'Anuncis i notícies generals';
$string['introsocial'] = 'Un fòrum obert per xerrar sobre qualsevol cosa que es vulgui';
$string['introteacher'] = 'Un fòrum per a notes i debats només del professor';
$string['invalidaccess'] = 'No s\'ha accedit correctament a aquesta pàgina';
$string['invaliddigestsetting'] = 'Heu proporcionat un paràmetre no vàlid de resum de correu';
$string['invaliddiscussionid'] = 'L\'ID del debat és incorrecte o el debat s\'ha eliminat';
$string['invalidforcesubscribe'] = 'El mode de subscripció obligatòria no és vàlid';
$string['invalidforumid'] = 'L\'ID del fòrum és incorrecte';
$string['invalidparentpostid'] = 'L\'ID del missatge original és incorrecte';
$string['invalidpostid'] = 'ID de missatge no vàlid: {$a}';
$string['lastpost'] = 'Darrer missatge';
$string['learningforums'] = 'Fòrums d\'aprenentatge';
$string['lockdiscussion'] = 'Bloqueja aquest debat';
$string['lockdiscussionafter'] = 'Bloqueja els debats després d\'un període d\'inactivitat';
$string['lockdiscussionafter_help'] = 'Els debats es poden bloquejar de manera automàtica després que hagi transcorregut un temps indicat des de la darrera resposta.

Els usuaris amb la capacitat de respondre als debats bloquejats poden desbloquejar-los responent-hi.';
$string['locked'] = 'Bloquejat';
$string['lockupdated'] = 'La opció de bloqueig s\'ha actualitzat.';
$string['longpost'] = 'Missatge llarg';
$string['mailnow'] = 'Envia les notificacions per correu sense temps d\'espera per a l\'edició';
$string['managesubscriptionsoff'] = 'Finalitza la gestió de les subscripcions';
$string['managesubscriptionson'] = 'Gestiona els subscriptors';
$string['manydiscussions'] = 'Debats per pàgina';
$string['markalldread'] = 'Marca com a llegits tots els missatges d\'aquest debat.';
$string['markallread'] = 'Marca com a llegits tots els missatges d\'aquest fòrum.';
$string['markasread'] = 'Marca com a llegit';
$string['markasreadonnotification'] = 'Quan s\'envia la notificació d\'un missatge del fòrum';
$string['markasreadonnotification_help'] = 'Quan rebeu la notificació d\'un missatge del fòrum, podeu triar si s\'hauria de marcar com a llegit amb el propòsit de fer el seguiment del fòrum.';
$string['markasreadonnotificationno'] = 'No marquis el missatge com a llegit';
$string['markasreadonnotificationyes'] = 'Marca el missatge com a llegit';
$string['markread'] = 'Marca com a llegit';
$string['markreadbutton'] = 'Marca com a<br />llegit';
$string['markunread'] = 'Marca com a no llegit';
$string['markunreadbutton'] = 'Marca com a<br />no llegit';
$string['maxattachments'] = 'Nombre màxim de fitxers adjunts';
$string['maxattachments_help'] = 'Aquest paràmetre determina el nombre màxim de fitxers que es poden adjuntar en una contribució al fòrum.';
$string['maxattachmentsize'] = 'Mida màxima dels fitxers adjunts';
$string['maxattachmentsize_help'] = 'Aquest paràmetre especifica la mida màxima que pot tenir el fitxer que s\'adjunta a un missatge del fòrum';
$string['maxtimehaspassed'] = 'Ha passat el temps màxim per editar aquest missatge! ({$a})';
$string['message'] = 'Missatge';
$string['messageinboundattachmentdisallowed'] = 'No teniu permís per enviar una resposta, ja que heu inclòs un fitxer adjunt i el fòrum no permet els fitxers adjunts.';
$string['messageinboundfilecountexceeded'] = 'No teniu permís per enviar una resposta, ja que heu inclòs un nombre de fitxers adjunts superior al màxim permès al fòrum  ({$a->forum->maxattachments}).';
$string['messageinboundfilesizeexceeded'] = 'No teniu permís per enviar una resposta, ja que la mida total del fitxer adjunt ({$a->filesize}) és superior a la màxima permesa al fòrum ({$a->maxbytes}).';
$string['messageinboundforumhidden'] = 'No teniu permís per enviar una resposta, ja que el fòrum no està disponible actualment.';
$string['messageinboundnopostforum'] = 'No teniu permís per enviar una resposta, ja que no teniu permís per enviar missatges al fòrum  {$a->forum->name}.';
$string['messageinboundthresholdhit'] = 'No teniu permís per enviar una resposta, ja que heu excedit el llindar de missatges configurat per a aquest fòrum.';
$string['messageprovider:digests'] = 'Resums dels fòrums als quals esteu subscrit';
$string['messageprovider:posts'] = 'Missatges dels fòrums als quals esteu subscrit';
$string['missingsearchterms'] = 'Els termes de cerca següents només apareixen a les etiquetes HTML del missatge:';
$string['modeflatnewestfirst'] = 'Visualitza les respostes, començant per la més recent';
$string['modeflatoldestfirst'] = 'Visualitza les respostes, començant per la més antiga';
$string['modenested'] = 'Visualitza les respostes escalonades';
$string['modenestedv2'] = 'Mostra les respostes en el format experimental imbricat';
$string['modethreaded'] = 'Visualitza les respostes abreujades, seguint el fil de la discussió';
$string['modulename'] = 'Fòrum';
$string['modulename_help'] = 'El mòdul d\'activitat de fòrum permet que els participants mantinguin debats asíncrons, és a dir, debats que s\'estenen durant un període de temps llarg.

Hi ha diversos tipus de fòrum per escollir, com ara un fòrum estàndard on tothom pot iniciar un debat nou en qualsevol moment; un fòrum en què cada estudiant pot iniciar únicament un sol debat; o bé un fòrum de preguntes i respostes en què els estudiants han d\'enviar obligatòriament un missatge abans no puguin veure els missatges dels altres estudiants. Un professor pot permetre l\'enviament de fitxers adjunts als missatges del fòrum. Les imatges adjuntes es mostren dins del missatge.

Els participants poden subscriure\'s a un fòrum per rebre notificacions quan hi hagi missatges nous. El professor pot establir el mode de subscripció a voluntari, obligatori o automàtic, o bé impedir la subscripció completament. Si cal, es pot impedir que els estudiants enviïn més d\'un cert nombre de missatges en un determinat període de temps; això evita que algú monopolitzi els debats.

Els missatges del fòrum poden ser puntuats, ja sigui per professors o bé pels estudiants mateixos (avaluació entre iguals). Aquestes puntuacions es poden agregar per formar una qualificació final que apareixerà al llibre de qualificacions.

Els fòrums tenen diverses utilitats, com ara:

* Un espai social on els estudiants es poden conèixer
* Per a anuncis del curs (usant un fòrum de notícies amb subscripció obligatòria)
* Per discutir els continguts del curs o materials de lectura
* Per prosseguir en línia alguna qüestió que hagi sorgit prèviament en una sessió presencial
* Per a debats entre professors (usant un fòrum ocult)
* Com a centre d\'ajuda on tutors i estudiants poden oferir consells
* Com a àrea de suport personalitzada per establir una comunicació privada entre el professor i un estudiant (utilitzant un fòrum amb grups separats i un sol estudiant per grup)
* Per a activitats d\'extensió; per exemple, proposar reptes als estudiants per tal que hi reflexionin i hi proposin solucions';
$string['modulename_link'] = 'mod/forum/view';
$string['modulenameplural'] = 'Fòrums';
$string['more'] = 'més';
$string['movedmarker'] = '(traslladat)';
$string['movethisdiscussionlabel'] = 'Mou el debat actual al fòrum especificat';
$string['movethisdiscussionto'] = 'Trasllada aquest debat a...';
$string['mustprovidediscussionorpost'] = 'Per a l\'exportació, heu de especificar o l\'ID del debat o l\'ID del missatge.';
$string['myprofileotherdis'] = 'Debats del fòrum';
$string['myprofileowndis'] = 'Els meus debats del fòrum';
$string['myprofileownpost'] = 'Els meus missatges del fòrum';
$string['namenews'] = 'Anuncis';
$string['namenews_help'] = 'El fòrum d\'anuncis és un fòrum especial que es crea automàticament amb el curs. Cada curs pot tenir només un fòrum d\'anuncis. Els administradors i els professors són els únics que poden escriure anuncis en aquest fòrum. El bloc «Darrers anuncis» mostrarà els anuncis recents.';
$string['namesocial'] = 'Fòrum social';
$string['nameteacher'] = 'Fòrum del professor';
$string['newforumposts'] = 'Nous missatges dels fòrums';
$string['nextdiscussiona'] = 'Debat següent: {$a}';
$string['nextuser'] = 'Desa els canvis i passa al següent usuari';
$string['noattachments'] = 'No hi ha fitxers adjunts en aquest missatge';
$string['nodiscussions'] = 'Encara no hi ha cap tema de debat en aquest fòrum';
$string['nodiscussionsstartedby'] = 'L\'usuari {$a} no ha iniciat cap debat';
$string['nodiscussionsstartedbyyou'] = 'Encara no heu iniciat cap debat';
$string['noguestpost'] = 'Els visitants no poden enviar missatges.';
$string['noguestsubscribe'] = 'Els convidats no es poden subscriure.';
$string['noguesttracking'] = 'Els visitants no poden definir opcions de seguiment.';
$string['nomorepostscontaining'] = 'No s\'han trobat més missatges que continguin «{$a}»';
$string['nonews'] = 'Encara no s\'ha enviat cap anunci.';
$string['noonecansubscribenow'] = 'S\'han desactivat les subscripcions';
$string['nopermissiontosubscribe'] = 'No teniu permís per a veure les subscripcions del fòrum';
$string['nopermissiontoview'] = 'No teniu permís per a veure aquest missatge';
$string['nopostforum'] = 'No us és permès d\'escriure en aquest fòrum';
$string['noposts'] = 'No hi ha missatges';
$string['nopostsmadebyuser'] = '{$a} no ha enviat cap missatge';
$string['nopostsmadebyyou'] = 'No heu enviat cap missatge';
$string['noquestions'] = 'Encara no hi ha preguntes en aquest fòrum';
$string['nosubscribers'] = 'Encara no hi ha subscriptors d\'aquest fòrum';
$string['notexists'] = 'Ja no existeix aquest debat';
$string['notgraded'] = 'No s\'ha qualificat';
$string['nothingnew'] = 'Res nou per a {$a}';
$string['notingroup'] = 'Heu de formar part d\'un grup per veure aquest fòrum.';
$string['notinstalled'] = 'No s\'ha instal·lat el mòdul dels fòrums';
$string['notlocked'] = 'Bloqueja';
$string['notpartofdiscussion'] = 'Aquest missatge no forma part d\'un debat';
$string['notrackforum'] = 'No facis el seguiment de missatges no llegits';
$string['notsubscribed'] = 'Subscriu';
$string['nousersmatch'] = 'No s\'han trobat usuaris pels criteris facilitats';
$string['noviewdiscussionspermission'] = 'No teniu permís per visualitzar debats en aquest fòrum';
$string['nowallsubscribed'] = 'Us heu subscrit a tots els fòrums de {$a}.';
$string['nowallunsubscribed'] = 'Heu cancel·lat la subscripció a tots els fòrums de {$a}.';
$string['nowgradinguser'] = 'S\'està qualificant {$a}';
$string['nownotsubscribed'] = '{$a->name} NO rebrà còpies de «{$a->forum}» per correu electrònic.';
$string['nownottracking'] = '{$a->name} ja no fa el seguiment del fòrum «{$a->forum}».';
$string['nowsubscribed'] = '{$a->name} rebrà còpies de «{$a->forum}» per correu electrònic.';
$string['nowtracking'] = '{$a->name} fa el seguiment del fòrum «{$a->forum}».';
$string['numberofreplies'] = 'Nombre de respostes: {$a}';
$string['numposts'] = '{$a} missatges';
$string['olderdiscussions'] = 'Debats anteriors';
$string['oldertopics'] = 'Temes anteriors';
$string['oldpostdays'] = 'Llegit dies després';
$string['page-mod-forum-discuss'] = 'Pàgina dels temes de debat del mòdul «fòrum»';
$string['page-mod-forum-view'] = 'Pàgina principal del mòdul «fòrum»';
$string['page-mod-forum-x'] = 'Qualsevol pàgina del mòdul «fòrum»';
$string['parent'] = 'Mostra el missatge original';
$string['parentofthispost'] = 'Missatge original';
$string['permalink'] = 'Enllaç permanent';
$string['permanentlinktoparentpost'] = 'Enllaç permanent al pare d\'aquest missatge';
$string['permanentlinktopost'] = 'Enllaç permanent a aquest missatge';
$string['pindiscussion'] = 'Fixa aquest debat';
$string['pinupdated'] = 'La opció de fixar s\'ha actualitzat.';
$string['pluginadministration'] = 'Administració del fòrum';
$string['pluginname'] = 'Fòrum';
$string['postadded'] = '<p>S\'ha afegit el vostre missatge.</p> <p>Teniu {$a} per editar-lo si voleu fer algun canvi.</p>';
$string['postaddedsuccess'] = 'S\'ha afegit correctament el vostre missatge.';
$string['postaddedtimeleft'] = 'Teniu {$a} per a editar-lo si voleu fer-hi cap canvi.';
$string['postbymailsuccess'] = 'La vostra resposta «{$a->subject}» s\'ha afegit amb èxit: {$a->discussionurl}';
$string['postbymailsuccess_html'] = 'La vostra resposta <a href="{$a->discussionurl}">{$a->subject}</a> s\'ha publicat amb èxit.';
$string['postbyuser'] = '{$a->post} de {$a->user}';
$string['postincontext'] = 'Mostra aquest missatge en el seu context';
$string['postisprivatereply'] = 'Aquesta resposta és privada. (Els docents i la resta d\'usuaris amb la capacitat de veure respostes privades també la poden veure.)';
$string['postmailinfo'] = 'Això és una còpia d\'un missatge enviat a {$a}.';
$string['postmailinfolink'] = 'Aquesta és una còpia d\'un missatge enviat al curs {$a->coursename}.
Per respondre, feu clic en aquest enllaç: {$a->replylink}';
$string['postmailnow'] = '<p>Aquest missatge s\'enviarà per correu, immediatament, a tots els subscriptors del fòrum.</p>';
$string['postmailreply'] = 'Per respondre-hi cliqueu damunt d\'aquest enllaç: {$a}';
$string['postmailsubject'] = '{$a->courseshortname}: {$a->subject}';
$string['postrating1'] = 'Sobretot coneixements separats';
$string['postrating2'] = 'Separats i connectats';
$string['postrating3'] = 'Sobretot coneixements connectats';
$string['posts'] = 'Missatges';
$string['postsfrom'] = 'Missatges de';
$string['postsmadebyuser'] = 'Missatges enviats per {$a}';
$string['postsmadebyuserincourse'] = 'Missatges de {$a->fullname} en el curs {$a->coursename}';
$string['postsmadeincourse'] = 'Missatges enviats el {$a}';
$string['poststo'] = 'Missatges a';
$string['posttoforum'] = 'Envia al fòrum';
$string['posttomygroups'] = 'Envia una còpia a tots els grups';
$string['posttomygroups_help'] = 'S\'envia una còpia d\'aquest missatge a tots els grups als quals teniu accés. Els participants dels grups als quals no teniu accés no ho veuran';
$string['postupdated'] = 'S\'ha actualitzat el vostre missatge';
$string['potentialsubscribers'] = 'Subscriptors potencials';
$string['prevdiscussiona'] = 'Debat anterior: {$a}';
$string['previoususer'] = 'Desa els canvis i passa a l\'usuari anterior';
$string['privacy:digesttypenone'] = 'No tenim cap dada sobre les vostres preferències del tipus de resum per a aquest fòrum.';
$string['privacy:digesttypepreference'] = 'Heu triat rebre aquest tipus de resum del fòrum: «{$a->type}».';
$string['privacy:discussionsubscriptionpreference'] = 'Heu triat aquesta preferència de subscripció de debat per a aquest fòrum: «{$a->preference}»';
$string['privacy:metadata:core_rating'] = 'El fòrum utilitza el subsistema de puntuacions per permetre la puntuació dels missatges.';
$string['privacy:metadata:core_tag'] = 'El fòrum utilitza el subsistema d\'etiquetes per permetre l\'etiquetatge dels missatges.';
$string['privacy:metadata:forum_digests'] = 'Informació sobre les preferències de resum per cada fòrum';
$string['privacy:metadata:forum_digests:forum'] = 'El fòrum a què s\'està subscrit.';
$string['privacy:metadata:forum_digests:maildigest'] = 'La preferència de resum.';
$string['privacy:metadata:forum_digests:userid'] = 'L\'identificador (ID) de l\'usuari amb preferència de resum.';
$string['privacy:metadata:forum_discussion_subs'] = 'Informació sobre les subscripcions a debats individuals del fòrum';
$string['privacy:metadata:forum_discussion_subs:discussionid'] = 'L\'identificador (ID) del debat a què es va subscriure.';
$string['privacy:metadata:forum_discussion_subs:preference'] = 'L\'hora d\'inici de la subscripció.';
$string['privacy:metadata:forum_discussion_subs:userid'] = 'L\'identificador (ID) de l\'usuari amb la subscripció al debat.';
$string['privacy:metadata:forum_discussions'] = 'Informació sobre els debats individuals que ha creat un usuari';
$string['privacy:metadata:forum_discussions:name'] = 'El nom del debat, tal com el va triar l\'autor.';
$string['privacy:metadata:forum_discussions:timemodified'] = 'L\'hora a la qual es va modificar el debat per última vegada.';
$string['privacy:metadata:forum_discussions:userid'] = 'L\'identificador (ID) de l\'usuari que va crear el debat';
$string['privacy:metadata:forum_discussions:usermodified'] = 'L\'identificador (ID) de l\'últim usuari que ha modificat el debat d\'alguna manera.';
$string['privacy:metadata:forum_grades'] = 'Dades de qualificació del fòrum';
$string['privacy:metadata:forum_grades:forum'] = 'El fòrum que s\'ha qualificat';
$string['privacy:metadata:forum_grades:grade'] = 'La qualificació obtinguda';
$string['privacy:metadata:forum_grades:userid'] = 'L\'usuari que s\'ha qualificat';
$string['privacy:metadata:forum_posts'] = 'Informació sobre les preferències de resum de cada fòrum.';
$string['privacy:metadata:forum_posts:created'] = 'L\'hora a la qual es va crear el missatge.';
$string['privacy:metadata:forum_posts:discussion'] = 'El debat on es troba el missatge.';
$string['privacy:metadata:forum_posts:message'] = 'El missatge de la publicació al fòrum.';
$string['privacy:metadata:forum_posts:modified'] = 'L\'hora a la qual es va modificar el missatge per última vegada.';
$string['privacy:metadata:forum_posts:parent'] = 'La publicació pare a la qual es responia.';
$string['privacy:metadata:forum_posts:privatereplyto'] = 'L\'identificador (ID) de l\'usuari a qui es va respondre.';
$string['privacy:metadata:forum_posts:subject'] = 'El tema de la publicació al fòrum.';
$string['privacy:metadata:forum_posts:totalscore'] = 'El missatge de la publicació al fòrum.';
$string['privacy:metadata:forum_posts:userid'] = 'L\'identificador (ID) de l\'usuari autor del missatge al fòrum.';
$string['privacy:metadata:forum_queue'] = 'Registre temporal de publicacions que s\'enviaran per correu en forma de resum';
$string['privacy:metadata:forum_queue:discussionid'] = 'Identificador (ID) del debat del fòrum';
$string['privacy:metadata:forum_queue:postid'] = 'Identificador (ID) del missatge del fòrum';
$string['privacy:metadata:forum_queue:timemodified'] = 'L\'hora modificada del missatge original';
$string['privacy:metadata:forum_queue:userid'] = 'L\'usuari a qui cal enviar una notificació del missatge';
$string['privacy:metadata:forum_read'] = 'Informació sobre quines publicacions ha llegit l\'usuari.';
$string['privacy:metadata:forum_read:discussionid'] = 'El debat en què s\'ubica aquesta publicació.';
$string['privacy:metadata:forum_read:firstread'] = 'L\'instant en què la publicació s\'ha llegit per primer cop.';
$string['privacy:metadata:forum_read:lastread'] = 'L\'instant més recent en què s\'ha llegit la publicació.';
$string['privacy:metadata:forum_read:postid'] = 'La publicació que s\'ha llegit.';
$string['privacy:metadata:forum_read:userid'] = 'L\'identificador (ID) de l\'usuari corresponent a aquest registre.';
$string['privacy:metadata:forum_subscriptions'] = 'Informació sobre els fòrums als quals s\'ha subscrit l\'usuari.';
$string['privacy:metadata:forum_subscriptions:forum'] = 'El fòrum a què s\'ha subscrit.';
$string['privacy:metadata:forum_subscriptions:userid'] = 'L\'identificador (ID) de l\'usuari corresponent a la subscripció d\'aquest fòrum.';
$string['privacy:metadata:forum_track_prefs'] = 'Informació sobre els fòrums per als quals l\'usuari ha triat fer el seguiment de lectura.';
$string['privacy:metadata:forum_track_prefs:forumid'] = 'El fòrum que té habilitat el seguiment de lectures.';
$string['privacy:metadata:forum_track_prefs:userid'] = 'L\'identificador (ID) de l\'usuari corresponent a la preferència de seguiment d\'aquest fòrum.';
$string['privacy:metadata:preference:autosubscribe'] = 'Indica si l\'usuari se subscriu als debats tan bon punt n\'hi respon als missatges.';
$string['privacy:metadata:preference:forum_discussionlistsortorder'] = 'L\'ordenació preferida de la llista de debats';
$string['privacy:metadata:preference:maildigest'] = 'La preferència del resum de correu a tot el servidor';
$string['privacy:metadata:preference:markasreadonnotification'] = 'Indica si els missatges al fòrum es marquen com a llegits quan es reben com a missatges per correu.';
$string['privacy:metadata:preference:trackforums'] = 'Indica si s\'habilita el seguiment de lectura.';
$string['privacy:postwasread'] = 'Aquest missatge es va llegir per primer cop el {$a->firstread} i de manera més recent, el {$a->lastread}';
$string['privacy:readtrackingdisabled'] = 'Heu escollit de no fer el seguiment de les publicacions que heu llegit en aquest fòrum.';
$string['privacy:request:delete:discussion:name'] = 'Esborra a petició de l\'autor';
$string['privacy:request:delete:post:message'] = 'El contingut d\'aquesta publicació s\'ha esborrat a petició del seu autor.';
$string['privacy:request:delete:post:subject'] = 'Esborrat a petició de l\'autor';
$string['privacy:subscribedtoforum'] = 'Esteu subscrit a aquest fòrum.';
$string['privatereply'] = 'Respon de forma privada';
$string['privatereply_help'] = 'Una resposta privada només pot ser vista per l\'autor del missatge a qui s\'està responent, i per qualsevol usuari amb la capacitat de veure respostes privades.';
$string['processingdigest'] = 'S\'està processant el resum de correu de l\'usuari {$a}';
$string['processingpost'] = 'S\'està processant el missatge {$a}';
$string['prune'] = 'Divideix';
$string['prunediscussion'] = 'Divideix el debat';
$string['prunedpost'] = 'S\'ha creat un nou debat amb aquest missatge';
$string['pruneheading'] = 'Divideix el debat i mou aquest missatge a un debat nou';
$string['qandaforum'] = 'Fòrum de preguntes i respostes';
$string['qandanotify'] = 'Aquest és un fòrum de preguntes i respostes. Per tal de poder veure altres respostes, primer n\'heu de publicar la vostra.';
$string['re'] = 'Re:';
$string['readtherest'] = 'Mostra la resta d\'aquest tema';
$string['removeallforumtags'] = 'Suprimeix totes les etiquetes del fòrum';
$string['removefromfavourites'] = 'No destaquis aquest debat';
$string['replies'] = 'Respostes';
$string['repliesmany'] = '{$a} respostes fins ara';
$string['repliesone'] = '{$a} resposta fins ara';
$string['reply'] = 'Respon';
$string['reply_handler'] = 'Respon als missatges dels fòrums mitjançant el correu electrònic';
$string['reply_handler_name'] = 'Respon als missatges del fòrum';
$string['replyauthorself'] = '{$a} (vós)';
$string['replyforum'] = 'Respon al fòrum';
$string['replyingtoauthor'] = 'Responent a {$a}...';
$string['replyplaceholder'] = 'Escriviu una resposta...';
$string['replypostdiscussion'] = 'Respon al debat';
$string['replytopostbyemail'] = 'Podeu respondre-hi mitjançant el correu electrònic.
<strong>Atenció</strong>: cal esborrar tot el text del missatge original abans d\'enviar la resposta; és imprescindible perquè arribi correctament.';
$string['replytouser'] = 'Utilitza l\'adreça de correu en la resposta';
$string['resetdigests'] = 'Suprimeix totes les preferències de resum als fòrums de l\'usuari';
$string['resetforums'] = 'Suprimeix els missatges de';
$string['resetforumsall'] = 'Suprimeix tots els missatges';
$string['resetsubscriptions'] = 'Suprimeix totes les subscripcions al fòrum';
$string['resettrackprefs'] = 'Suprimeix totes les preferències de seguiment del fòrum';
$string['rssarticles'] = 'Nombre d\'articles RSS recents';
$string['rssarticles_help'] = '<p>Aquesta opció us permet triar el nombre d\'articles que s\'inclouran en l\'RSS.</p>

<p>Un nombre entre 5 i 20 seria apropiat per a la majoria dels fòrums. Incrementeu aquest valor si el fòrum té moltes intervencions.</p>';
$string['rsssubscriberssdiscussions'] = 'Canal RSS dels debats';
$string['rsssubscriberssposts'] = 'Canal RSS dels missatges';
$string['rsstype'] = 'Canal RSS d\'aquesta activitat';
$string['rsstype_help'] = '<p>Aquesta opció us permet habilitar l\'RSS en aquest fòrum.</p>

<p>Podeu triar dues modalitats:</p>

<ul>
<li><b>Debats:</b> l\'RSS inclourà els nous debats que s\'encetin en el fòrum, amb el missatge inicial.</li>
<li><b>Missatges:</b> l\'RSS inclourà cada missatge nou que s\'enviï al fòrum.</li>
</ul>';
$string['rsstypedefault'] = 'Tipus de canal de continguts RSS';
$string['search'] = 'Cerca';
$string['search:activity'] = 'Fòrum: informació de l\'activitat';
$string['search:post'] = 'Fòrum - missatges';
$string['searchdatefrom'] = 'Missatges posteriors a aquesta data';
$string['searchdateto'] = 'Missatges anteriors a aquesta data';
$string['searchforumintro'] = 'Introduïu els termes de la cerca en els camps següents:';
$string['searchforums'] = 'Cerca als fòrums';
$string['searchfullwords'] = 'Aquests mots haurien d\'aparèixer com a mots complets';
$string['searchnotwords'] = 'Aquests mots NO s\'hi haurien d\'incloure';
$string['searcholderposts'] = 'Cerca missatges anteriors...';
$string['searchphrase'] = 'Aquesta frase exacta ha d\'aparèixer al missatge';
$string['searchresults'] = 'Resultats de la cerca';
$string['searchsubject'] = 'Aquests mots haurien de ser a l\'assumpte';
$string['searchtags'] = 'S\'ha etiquetat com a';
$string['searchuser'] = 'Aquest nom hauria de coincidir amb l\'autor';
$string['searchuserid'] = 'L\'ID de Moodle de l\'autor';
$string['searchusers'] = 'Cerca usuaris';
$string['searchwhichforums'] = 'Trieu quins fòrums voleu cercar';
$string['searchwords'] = 'Aquests mots poden aparèixer a qualsevol part del missatge';
$string['seeallposts'] = 'Visualitza tots els missatges d\'aquest usuari';
$string['sendstudentnotificationsdefault'] = 'Paràmetre per defecte per a «Notifica als estudiants»';
$string['sendstudentnotificationsdefault_help'] = 'Defineix el valor per defecte de la casella de verificació «Notifica als estudiants» al formulari de qualificació.';
$string['sendstudentnotificationsno'] = 'No';
$string['sendstudentnotificationsyes'] = 'Sí, envia una notificació a l\'estudiant';
$string['settings'] = 'Configuració';
$string['shortpost'] = 'Missatge curt';
$string['showgraderpanel'] = 'Mostra el panell del qualificador';
$string['showingcountoftotaldiscussions'] = 'Llista de debats. S\'estan mostrant els debats següents: {$a->count} de {$a->total}';
$string['showmoreusers'] = 'Mostra més usuaris';
$string['showpreviousrepliescount'] = 'Mostra les respostes prèvies ({$a})';
$string['showsubscribers'] = 'Mostra/edita els subscriptors';
$string['showusersearch'] = 'Mostra la cerca d\'usuari';
$string['singleforum'] = 'Un debat simple';
$string['smallmessage'] = '{$a->user} ha escrit a {$a->forumname}';
$string['smallmessagedigest'] = 'Resum del fòrum contenint {$a} missatges';
$string['starredonly'] = 'Cerca només debats destacats';
$string['startedby'] = 'Iniciat per';
$string['subject'] = 'Assumpte';
$string['subscribe'] = 'Subscriu-me al fòrum';
$string['subscribeall'] = 'Subscriu tothom a aquest fòrum';
$string['subscribed'] = 'Subscrit';
$string['subscribediscussion'] = 'Subscriu-me a aquest debat';
$string['subscribeenrolledonly'] = 'Només els usuaris inscrits al curs es poden subscriure al fòrum i rebre els missatges per correu electrònic.';
$string['subscribenone'] = 'Cancel·la totes les subscripcions a aquest fòrum';
$string['subscribers'] = 'Subscriptors';
$string['subscriberstowithcount'] = 'Subscriptors de «{$a->name}» ({$a->count})';
$string['subscribestart'] = 'Envia\'m notificacions dels missatges nous d\'aquest fòrum';
$string['subscribestop'] = 'No vull rebre notificacions dels nous missatges d\'aquest fòrum';
$string['subscription'] = 'Subscripció';
$string['subscription_help'] = 'La subscripció a un fòrum significa que la persona rebrà notificacions dels missatges nous del fòrum. Normalment, la gent pot triar si vol subscriure\'s a un fòrum o no. A vegades, la subscripció a un fòrum pot ser obligatòria, de manera que tots els membres del curs rebran notificacions.';
$string['subscriptionandtracking'] = 'Subscripció i seguiment';
$string['subscriptionauto'] = 'Subscripció automàtica (l\'usuari la podrà canceŀlar)';
$string['subscriptiondisabled'] = 'No es permet la subscripció';
$string['subscriptionforced'] = 'Subscripció obligatòria';
$string['subscriptionmode'] = 'Mode de subscripció';
$string['subscriptionmode_help'] = 'La subscripció a un fòrum significa que la persona rebrà còpies per correu electrònic dels missatges del fòrum.

Hi ha quatre modalitats de subscripció:

* Subscripció voluntària. Els participants poden triar si s\'hi subscriuen o no
* Subscripció obligatòria. Tothom hi està subscrit i no pot esborrar-se\'n
* Subscripció inicial. D\'entrada, tothom hi està subscrit, però hi ha la possibilitat d\'esborrar-se\'n quan es vulgui
* Subscripció inhabilitada. No s\'hi permeten les subscripcions.

Nota: Qualssevol canvis en la modalitat de subscripció afecten només els usuaris que s\'inscriguin al curs en el futur i els usuaris no existents.';
$string['subscriptionmodeconfirm'] = 'Segur que voleu canviar el mode de subscripció a {$a}?';
$string['subscriptionoptional'] = 'Subscripció voluntària';
$string['subscriptions'] = 'Subscripcions';
$string['tagarea_forum_posts'] = 'Missatges del fòrum';
$string['tagsdeleted'] = 'Les etiquetes del fòrum s\'han suprimit';
$string['thisforumhasduedate'] = 'La data de venciment per enviar missatges a aquest fòrum és {$a}.';
$string['thisforumisdue'] = 'La data de venciment per enviar missatges a aquest fòrum va ser {$a}.';
$string['thisforumisthrottled'] = 'Aquest fòrum té limitat el nombre de missatges que podeu enviar-hi en un període de temps determinat. Actualment el límit són {$a->blockafter} missatges en {$a->blockperiod}';
$string['timed'] = 'Temporitzat';
$string['timeddiscussion'] = 'Debat temporitzat';
$string['timedhidden'] = 'Estat actual: Amagat per als estudiants';
$string['timedposts'] = 'Missatges programats';
$string['timedvisible'] = 'Estat actual: Visible per a tots els usuaris';
$string['timestartenderror'] = 'La data de fi de la visualització no pot ser anterior a la data d\'inici';
$string['togglediscussionmenu'] = '(Des)activa el menú del debat';
$string['togglefullscreen'] = '(Des)activa la pantalla completa';
$string['togglesettingsdrawer'] = '(Des)activa el calaix dels paràmetres';
$string['trackforum'] = 'Fes el seguiment de missatges no llegits';
$string['tracking'] = 'Seguiment';
$string['trackingoff'] = 'Inactiu';
$string['trackingon'] = 'Obligat';
$string['trackingoptional'] = 'Opcional';
$string['trackingtype'] = 'Seguiment de missatges llegits';
$string['trackingtype_help'] = 'El seguiment de missatges llegits habilita els participants per comprovar fàcilment quins missatges no han vist mitjançant el realçament de qualsevol missatge nou.

Si s\'estableix com a opcional, els participants poden triar si activen o desactiven el seguiment mitjançant un enllaç al menú d\'accions o al bloc d\'administració. (Els usuaris han d\'habilitar també el seguiment dels fòrums en les seves preferències del fòrum.)

Si l\'administrador del lloc ha habilitat l\'opció «Permet el seguiment de lectura forçat», apareixerà una nova opció —obligat. Això vol dir que el seguiment estarà sempre actiu, malgrat les preferències de fòrum dels usuaris.';
$string['trackreadposts_header'] = 'Seguiment dels fòrums';
$string['unlockdiscussion'] = 'Desbloqueja aquest debat';
$string['unpindiscussion'] = 'No fixis aquest debat';
$string['unread'] = 'No llegit';
$string['unreadpost'] = 'Missatge sense llegir';
$string['unreadposts'] = 'Missatges no llegits';
$string['unreadpostsnumber'] = '{$a} missatges no llegits';
$string['unreadpostsone'] = 'Un missatge no llegit';
$string['unsubscribe'] = 'Cancel·la la meva subscripció al fòrum';
$string['unsubscribeall'] = 'Cancel·la la meva subscripció a tots els fòrums';
$string['unsubscribeallconfirm'] = 'Us heu subscrit a {$a->forums} fòrums i a {$a->discussions} debats. Segur que voleu cancel·lar la vostra subscripció a tots els fòrums i debats, i inhabilitar la subscripció automàtica?';
$string['unsubscribeallconfirmdiscussions'] = 'Us heu subscrit a {$a->discussions} debats. Segur que voleu cancel·lar la vostra subscripció a tots els debats i inhabilitar-hi la subscripció automàtica?';
$string['unsubscribeallconfirmforums'] = 'Us heu subscrit a {$a->forums} fòrums. Segur que voleu cancel·lar la vostra subscripció a tots els fòrums i inhabilitar-hi la subscripció automàtica?';
$string['unsubscribealldone'] = 'S\'han cancel·lat totes les vostres subscripcions a fòrums, però encara rebreu notificacions dels fòrums que imposin la subscripció. Per gestionar les notificacions del fòrum, aneu a la Missatgeria de la Configuració del meu perfil, al bloc Configuració.';
$string['unsubscribeallempty'] = 'No us heu subscrit a cap fòrum.
Per desactivar totes les notificacions del servidor, aneu a la Missatgeria de la Configuració del meu perfil, al bloc Configuració.';
$string['unsubscribed'] = 'La vostra subscripció ha estat cancel·lada';
$string['unsubscribediscussion'] = 'Cancel·la la subscripció a aquest debat';
$string['unsubscribediscussionlink'] = 'Cancel·la la subscripció a aquest debat: {$a}';
$string['unsubscribelink'] = 'Cancel·la la subscripció a aquest fòrum: {$a}';
$string['unsubscribeshort'] = 'Cancel·la subscripció';
$string['useexperimentalui'] = 'Utilitza la vista experimental de debat imbricat';
$string['usermarksread'] = 'Marcatge manual de missatges llegits';
$string['usernavigation'] = 'Navegació de l\'usuari';
$string['usersforumposts'] = 'Publicacions de l\'usuari al fòrum';
$string['viewalldiscussions'] = 'Mostra tots els debats';
$string['viewconversation'] = 'Visualitza el debat';
$string['viewgrades'] = 'Mostra les qualificacions';
$string['viewparentpost'] = 'Visualitza el missatge pare';
$string['viewthediscussion'] = 'Mostra el debat';
$string['warnafter'] = 'Llindar de missatges per a l\'avís';
$string['warnafter_help'] = 'L\'estudiant pot rebre un avís quan s\'acosti al nombre màxim de missatges enviats a un fòrum en un temps determinat. Aquest paràmetre especifica quants missatges pot enviar-hi abans de rebre l\'avís. Aquest límit no afecta els usuaris amb privilegis mod/forum:postwithoutthrottling (usualment, els administradors o professors).';
$string['warnformorepost'] = 'Hi ha més d\'un debat obert en aquest fòrum. S\'utilitzarà el més recent';
$string['yournewquestion'] = 'La vostra pregunta nova';
$string['yournewtopic'] = 'El vostre tema de debat nou';
$string['yourreply'] = 'La vostra resposta';
