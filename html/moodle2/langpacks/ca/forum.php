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
 * Strings for component 'forum', language 'ca', branch 'MOODLE_36_STABLE'
 *
 * @package   forum
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Hi ha missatges nous al fòrum';
$string['addanewdiscussion'] = 'Afegeix un tema de debat nou';
$string['addanewquestion'] = 'Afegeix una pregunta nova';
$string['addanewtopic'] = 'Afegeix un tema nou';
$string['advancedsearch'] = 'Cerca avançada';
$string['allforums'] = 'Tots els fòrums';
$string['allowdiscussions'] = 'Pot un {$a} enviar un missatge a aquest fòrum?';
$string['allowsallsubscribe'] = 'Aquest fòrum permet que cadascú triï si vol subscriure-s\'hi o no.';
$string['allowsdiscussions'] = 'Aquest fòrum permet que cada persona iniciï un tema de debat.';
$string['allsubscribe'] = 'Subscriu-me a tots els fòrums';
$string['allunsubscribe'] = 'Cancel·la la subscripció a tots els fòrums';
$string['alreadyfirstpost'] = 'Aquest ja és el missatge inicial del debat';
$string['anyfile'] = 'Qualsevol fitxer';
$string['areaattachment'] = 'Fitxers adjunts';
$string['areapost'] = 'Missatges';
$string['attachment'] = 'Fitxer adjunt';
$string['attachment_help'] = 'Podeu adjuntar un o més fitxers a cada missatge enviat al fòrum. Si hi adjunteu una imatge, es visualitzarà al final del missatge.';
$string['attachmentnopost'] = 'No podeu exportar els adjunts sense l\'ID del missatge';
$string['attachments'] = 'Fitxers adjunts';
$string['attachmentswordcount'] = 'Comptador de fitxers adjunts i paraules';
$string['blockafter'] = 'Llindar de missatges per blocar';
$string['blockafter_help'] = 'Aquest paràmetre especifica el nombre màxim de missatges que un usuari pot enviar al fòrum en el període de temps establert. Aquest límit no afecta els usuaris amb privilegis mod/forum:postwithoutthrottling (usualment els administradors o professors).';
$string['blockperiod'] = 'Període de temps per blocar';
$string['blockperioddisabled'] = 'No bloquis';
$string['blockperiod_help'] = 'Es pot limitar el nombre de missatges que l\'estudiant envia a un fòrum en un temps determinat. Aquest límit no afecta els usuaris amb privilegis mod/forum:postwithoutthrottling (usualment els administradors o professors).';
$string['blogforum'] = 'Fòrum estàndard mostrat com si fos un blog';
$string['bynameondate'] = 'per {$a->name} - {$a->date}';
$string['cannotadd'] = 'No s\'ha pogut afegir el debat al fòrum';
$string['cannotadddiscussion'] = 'Afegir debats en aquest fòrum requereix pertànyer al grup.';
$string['cannotadddiscussionall'] = 'No teniu permís per a afegir un tema de debat nou per a tots els participants.';
$string['cannotaddsubscriber'] = 'No es pot afegir la subscripció de l\'usuari ID {$a} en aquest fòrum.';
$string['cannotaddteacherforumto'] = 'No s\'ha pogut agregar instància al fòrum del professor en la secció 0 del curs.';
$string['cannotcreatediscussion'] = 'No s\'ha pogut obrir un debat nou';
$string['cannotcreateinstanceforteacher'] = 'No s\'ha pogut crear una instància nova del mòdul de curs al fòrum del professor.';
$string['cannotdeletepost'] = 'No podeu esborrar aquest missatge';
$string['cannoteditposts'] = 'No podeu modificar els missatges d\'altres usuaris';
$string['cannotfinddiscussion'] = 'No s\'ha pogut trobar el debat en aquest fòrum';
$string['cannotfindfirstpost'] = 'No s\'ha pogut trobar el primer missatge d\'aquest fòrum';
$string['cannotfindorcreateforum'] = 'No s\'ha pogut trobar ni crear el fòrum general de notícies del lloc';
$string['cannotfindparentpost'] = 'No s\'ha pogut trobar l\'inici del debat del missatge {$a}';
$string['cannotmovefromsingleforum'] = 'No es pot traslladar el debat que pertany a un fòrum del tipus «debat simple»';
$string['cannotmovenotvisible'] = 'El fòrum no és visible';
$string['cannotmovetonotexist'] = 'No pot fer-se el trasllat perquè el fòrum no existeix';
$string['cannotmovetonotfound'] = 'No s\'ha trobat el fòrum de destinació en aquest curs';
$string['cannotmovetosingleforum'] = 'No es pot traslladar el debat a un fòrum del tipus «debat simple»';
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
$string['clicktosubscribe'] = 'No us heu subscrit a aquest debat. Cliqueu per a subscriure-us-hi.';
$string['clicktounsubscribe'] = 'Us heu subscrit a aquest debat. Cliqueu per cancel·lar la subscripció.';
$string['completiondiscussions'] = 'L\'estudiant ha d\'obrir debats:';
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
$string['configlongpost'] = 'Qualsevol missatge per damunt d\'aquesta mida (exclòs l\'HTML) es considera massa llarg.';
$string['configmanydiscussions'] = 'Nombre màxim de debats per pàgina';
$string['configmaxattachments'] = 'El nombre màxim per defecte de fitxers adjunts admesos per cada missatge.';
$string['configmaxbytes'] = 'Mida màxima per defecte per a tots els fitxers adjuntats als fòrums d\'aquest lloc (subjecta als límits de cada curs i a altres paràmetres locals)';
$string['configoldpostdays'] = 'Nombre de dies que han de passar per a donar per llegit un missatge.';
$string['configreplytouser'] = 'Quan s\'envia per correu un missatge d\'un fòrum, ha de portar l\'adreça de l\'usuari com a remitent de manera que els destinataris puguin contestar-li privadament per correu? Encara que s\'especifiqui així, els usuaris poden triar en el seu perfil de mantenir oculta l\'adreça de correu.';
$string['configrssarticlesdefault'] = 'Si el canal de continguts RSS està habilitat, configura el nombre d\'articles per defecte (ja siguin debats o missatges).';
$string['configrsstypedefault'] = 'Si el canal de continguts RSS està habilitat, configura el tipus d\'activitat per defecte.';
$string['configshortpost'] = 'Qualsevol missatge per sota d\'aquesta longitud (en caràcters que no incloguin HTML) es considera massa breu (vegeu més avall).';
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
$string['crontask'] = 'Tasques de manteniment i missatgeria del fòrum';
$string['delete'] = 'Suprimeix';
$string['deleteddiscussion'] = 'El tema de debat s\'ha suprimit';
$string['deletedpost'] = 'El missatge s\'ha suprimit';
$string['deletedposts'] = 'Aquests missatges s\'han suprimit';
$string['deletesure'] = 'Segur que voleu suprimir aquest missatge?';
$string['deletesureplural'] = 'Segur que voleu suprimir aquest missatges i totes les seves respostes? ({$a} missatges)';
$string['digestmailheader'] = 'Aquest és el vostre resum diari de missatges enviats als fòrums de {$a->sitename}. Si voleu canviar les vostres preferències de correu per defecte dels fòrums, aneu a {$a->userprefs}.';
$string['digestmailpost'] = 'Canvia les vostres preferències de resum per al fòrum';
$string['digestmailpostlink'] = 'Canvieu les preferències al resum del fòrum: {$a}';
$string['digestmailprefs'] = 'el vostre perfil d\'usuari';
$string['digestmailsubject'] = 'Resum diari de missatges {$a}';
$string['digestmailtime'] = 'Hora per a enviar el correu en format resum';
$string['digestsentusers'] = 'S\'han enviat amb èxit els resums de correu de: {$a} usuaris.';
$string['disallowsubscribe'] = 'No es permeten subscripcions';
$string['disallowsubscribeteacher'] = 'No es permeten subscripcions (excepte als professors)';
$string['disallowsubscription'] = 'Subscripció';
$string['disallowsubscription_help'] = 'Aquest fòrum s\'ha configurat de manera que no us podeu subscriure als debats.';
$string['discussion'] = 'Debat';
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
$string['discussionsstartedby'] = 'Debats iniciats per {$a}';
$string['discussionsstartedbyrecent'] = 'Debats iniciats recentment per {$a}';
$string['discussionsstartedbyuserincourse'] = 'Debats iniciats per {$a->fullname} en el curs {$a->coursename}';
$string['discussionsubscribestart'] = 'Envieu-me notificacions de missatges nous en aquest debat';
$string['discussionsubscribestop'] = 'No vull rebre més notificacions de missatges nous en aquest debat';
$string['discussionsubscription'] = 'Subscripció als debats';
$string['discussionsubscription_help'] = 'Subscriure\'s a un debat significa que rebreu notificacions quan s\'afegeixin nous missatges a aquell debat.';
$string['discussionunpin'] = 'Desfixa';
$string['discussthistopic'] = 'Debateu aquest tema';
$string['displayend'] = 'Fi de la visualització';
$string['displayend_help'] = 'Aquest paràmetre especifica si un missatge del fòrum s\'ha d\'amagar a partir d\'una data determinada. Els administradors, però, sempre podran veure els missatges.';
$string['displaymode'] = 'Mode de visualització';
$string['displayperiod'] = 'Període de visualització';
$string['displaystart'] = 'Inici de la visualització';
$string['displaystart_help'] = 'Aquest paràmetre especifica si un missatge del fòrum s\'ha de mostrar només a partir d\'una data determinada. Els administradors, però, sempre podran veure els missatges.';
$string['displaywordcount'] = 'Mostra el nombre de paraules';
$string['displaywordcount_help'] = 'Aquest paràmetre especifica si el nombre de paraules de cada missatge s\'ha de mostrar o no.';
$string['eachuserforum'] = 'Cada persona inicia un debat';
$string['edit'] = 'Edita';
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
$string['exportdiscussion'] = 'Exporta el debat sencer al dossier';
$string['forcedreadtracking'] = 'Habilita el seguiment de lectura forçat';
$string['forcedreadtracking_desc'] = 'Si habiliteu configurar els fòrums per seguir la lectura forçada, disminuireu el rendiment per a alguns usuaris, sobretot en cursos amb molts fòrums i missatges. Si no ho habiliteu, qualsevol fòrum configurat prèviament com a forçat es tractarà com a opcional.';
$string['forcesubscribed'] = 'Aquest fòrum subscriu obligatòriament a tothom';
$string['forcesubscribed_help'] = 'El fòrum ha estat configurat de forma que no podeu cancel·lar la subscripció als debats.';
$string['forum'] = 'Fòrum';
$string['forum:addinstance'] = 'Afegeix un fòrum nou';
$string['forum:addnews'] = 'Afegeix notícies';
$string['forum:addquestion'] = 'Afegeix una pregunta';
$string['forum:allowforcesubscribe'] = 'Permet imposar la subscripció';
$string['forumauthorhidden'] = 'Autor (ocult)';
$string['forumblockingalmosttoomanyposts'] = 'Us esteu apropant al llindar de missatges. Heu enviat {$a->numposts} missatges en {$a->blockperiod} i el límit són {$a->blockafter} missatges.';
$string['forumbodyhidden'] = 'No podeu veure aquest missatge, probablement perquè: encara no heu enviat un missatge en aquest debat, encara no ha conclòs el temps màxim d\'edició, el debat encara no ha començat o el debat ja ha acabat.';
$string['forum:canoverridediscussionlock'] = 'Respon a debats tancats';
$string['forum:canposttomygroups'] = 'Podeu enviar missatges a tots els grups als quals teniu accés';
$string['forum:createattachment'] = 'Crea adjuncions';
$string['forum:deleteanypost'] = 'Suprimeix qualsevol missatge (sempre)';
$string['forum:deleteownpost'] = 'Suprimeix els missatges propis (dins del termini)';
$string['forum:editanypost'] = 'Edita qualsevol missatge';
$string['forum:exportdiscussion'] = 'Exporta el debat sencer';
$string['forum:exportownpost'] = 'Exporta les contribucions pròpies';
$string['forum:exportpost'] = 'Exporta les contribucions';
$string['forumintro'] = 'Descripció';
$string['forum:managesubscriptions'] = 'Gestiona les subscripcions';
$string['forum:movediscussions'] = 'Trasllada els debats';
$string['forumname'] = 'Nom del fòrum';
$string['forum:pindiscussions'] = 'Fixa les discussions';
$string['forumposts'] = 'Missatges al fòrum';
$string['forum:postwithoutthrottling'] = 'Exempt del llindar de missatges';
$string['forum:rate'] = 'Valora els missatges';
$string['forum:replynews'] = 'Respon a les notícies';
$string['forum:replypost'] = 'Respondre els missatges';
$string['forums'] = 'Fòrums';
$string['forum:splitdiscussions'] = 'Divideix els debats';
$string['forum:startdiscussion'] = 'Comença debats nous';
$string['forumsubjecthidden'] = 'Assumpte (ocult)';
$string['forumtracked'] = 'S\'està fent el seguiment dels missatges no llegits';
$string['forumtrackednot'] = 'No s\'està fent el seguiment dels missatges no llegits';
$string['forumtype'] = 'Tipus de fòrum';
$string['forumtype_help'] = 'Hi ha 5 tipus de fòrums:

* Un debat únic - És un sol tema de debat al qual tothom pot respondre (no es pot fer servir amb grups separats).
* Cada persona envia un debat - Cada estudiant pot obrir únicament un tema de debat (i tothom pot enviar-hi respostes).
* Fòrum P/R (pregunta/resposta) - L\'estudiant ha d\'enviar la seva resposta per a poder veure les respostes dels seus companys.
* Fòrum estàndard en format de blog - És un fòrum obert en el qual tothom pot iniciar un nou tema de debat en qualsevol moment. I els temes de debat es mostren en una pàgina amb enllaços de «Debateu aquest tema".
* Fòrum estàndard per a ús general - És un fòrum obert en el qual tothom pot iniciar un nou tema de debat en qualsevol moment.';
$string['forum:viewallratings'] = 'Visualitza totes les valoracions fetes individualment';
$string['forum:viewanyrating'] = 'Visualitza les valoracions totals rebudes per tothom';
$string['forum:viewdiscussion'] = 'Mostra els debats';
$string['forum:viewhiddentimedposts'] = 'Mostra els missatges temporitzats ocults';
$string['forum:viewqandawithoutposting'] = 'Mostra sempre les contribucions de preguntes i respostes';
$string['forum:viewrating'] = 'Mostra la valoració total que heu rebut';
$string['forum:viewsubscribers'] = 'Mostra els subscriptors';
$string['generalforum'] = 'Fòrum estàndard per a ús general';
$string['generalforums'] = 'Fòrums generals';
$string['hiddenforumpost'] = 'Amaga el missatge al fòrum';
$string['inforum'] = 'en {$a}';
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
$string['lockdiscussionafter'] = 'Bloqueja els debats després d\'un període d\'inactivitat';
$string['lockdiscussionafter_help'] = 'Els debats es poden bloquejar de manera automàtica després que hagi transcorregut un temps indicat des de la darrera resposta.

Els usuaris amb la capacitat de respondre als debats bloquejats poden desbloquejar-los responent-hi.';
$string['longpost'] = 'Missatge llarg';
$string['mailnow'] = 'Envia notificacions dels missatges al fòrum sense període de retard per editar';
$string['managesubscriptionsoff'] = 'Finalitza la gestió de les subscripcions';
$string['managesubscriptionson'] = 'Gestiona les subscripcions';
$string['manydiscussions'] = 'Debats per pàgina';
$string['markalldread'] = 'Marca com a llegits tots els missatges d\'aquest debat.';
$string['markallread'] = 'Marca com a llegits tots els missatges d\'aquest fòrum.';
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
$string['modulenameplural'] = 'Fòrums';
$string['more'] = 'més';
$string['movedmarker'] = '(traslladat)';
$string['movethisdiscussionto'] = 'Trasllada aquest debat a...';
$string['mustprovidediscussionorpost'] = 'Per a l\'exportació, heu de especificar o l\'ID del debat o l\'ID del missatge';
$string['myprofileotherdis'] = 'Debats del fòrum';
$string['myprofileowndis'] = 'Els meus debats del fòrum';
$string['myprofileownpost'] = 'Els meus missatges del fòrum';
$string['namenews'] = 'Avisos i notícies';
$string['namenews_help'] = 'El fòrum d\'avisos i notícies és un fòrum especial d\'anuncis que es crea automàticament amb el curs. Cada curs pot tenir només un fòrum d\'avisos i notícies. Els administradors i els professors són els únics que poden escriure en aquest fòrum. El bloc «Últimes notícies» mostrarà els debats recents d\'aquest fòrum de notícies.';
$string['namesocial'] = 'Fòrum social';
$string['nameteacher'] = 'Fòrum del professor';
$string['newforumposts'] = 'Nous missatges dels fòrums';
$string['nextdiscussiona'] = 'Debat següent: {$a}';
$string['noattachments'] = 'No hi ha fitxers adjunts en aquest missatge';
$string['nodiscussions'] = 'Encara no hi ha cap tema de debat en aquest fòrum';
$string['nodiscussionsstartedby'] = 'L\'usuari {$a} no ha iniciat cap debat';
$string['nodiscussionsstartedbyyou'] = 'Encara no heu iniciat cap debat';
$string['noguestpost'] = 'Els visitants no poden enviar missatges.';
$string['noguestsubscribe'] = 'Els convidats no es poden subscriure.';
$string['noguesttracking'] = 'Els visitants no poden definir opcions de seguiment.';
$string['nomorepostscontaining'] = 'No s\'han trobat més missatges que continguin «{$a}»';
$string['nonews'] = 'Encara no s\'han enviat notícies';
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
$string['nothingnew'] = 'Res nou per a {$a}';
$string['notingroup'] = 'Heu de formar part d\'un grup per veure aquest fòrum.';
$string['notinstalled'] = 'No s\'ha instal·lat el mòdul dels fòrums';
$string['notpartofdiscussion'] = 'Aquest missatge no forma part d\'un debat';
$string['notrackforum'] = 'No facis el seguiment de missatges no llegits';
$string['notsubscribed'] = 'Subscriu';
$string['noviewdiscussionspermission'] = 'No teniu permís per a veure debats en aquest fòrum';
$string['nowallsubscribed'] = 'Us heu subscrit a tots els fòrums de {$a}';
$string['nowallunsubscribed'] = 'Heu cancel·lat la subscripció a tots els fòrums de {$a}';
$string['nownotsubscribed'] = '{$a->name} NO rebrà còpies de «{$a->forum}» per correu electrònic.';
$string['nownottracking'] = '{$a->name} ja no fa el seguiment del fòrum «{$a->forum}».';
$string['nowsubscribed'] = '{$a->name} rebrà còpies de «{$a->forum}» per correu electrònic.';
$string['nowtracking'] = '{$a->name} fa el seguiment del fòrum «{$a->forum}».';
$string['numposts'] = '{$a} missatges';
$string['olderdiscussions'] = 'Debats anteriors';
$string['oldertopics'] = 'Temes anteriors';
$string['oldpostdays'] = 'Llegit dies després';
$string['overviewnumpostssince'] = '{$a} missatges des del darrer inici de sessió';
$string['overviewnumunread'] = '{$a} no llegits en total';
$string['page-mod-forum-discuss'] = 'Pàgina dels temes de debat del mòdul «fòrum»';
$string['page-mod-forum-view'] = 'Pàgina principal del mòdul «fòrum»';
$string['page-mod-forum-x'] = 'Qualsevol pàgina del mòdul «fòrum»';
$string['parent'] = 'Mostra el missatge original';
$string['parentofthispost'] = 'Missatge original';
$string['permalink'] = 'Enllaç permanent';
$string['pluginadministration'] = 'Administració del fòrum';
$string['pluginname'] = 'Fòrum';
$string['postadded'] = '<p>S\'ha afegit el vostre missatge.</p> <p>Teniu {$a} per editar-lo si voleu fer algun canvi.</p>';
$string['postaddedsuccess'] = 'S\'ha afegit correctament el vostre missatge.';
$string['postaddedtimeleft'] = 'Teniu {$a} per a editar-lo si voleu fer-hi algun canvi.';
$string['postbymailsuccess'] = 'El vostre missatge de fòrum amb l\'assumpte «{$a->subject}» s\'ha afegit amb èxit. El podeu visualitzar a {$a->discussionurl}';
$string['postbymailsuccess_html'] = 'El vostre missatge de fòrum <a href="{$a->discussionurl}"> amb l\'assumpte «{$a->subject}» s\'ha publicat amb èxit.';
$string['postbyuser'] = '{$a->post} de {$a->user}';
$string['postincontext'] = 'Mostra aquest missatge en el seu context';
$string['postmailinfolink'] = 'Aquesta és una còpia d\'un missatge enviat al curs {$a->coursename}.
Per respondre, feu clic en aquest enllaç: {$a->replylink}';
$string['postmailnow'] = '<p>Aquest missatge s\'enviarà per correu, immediatament, a tots els subscriptors del fòrum.</p>';
$string['postmailsubject'] = '{$a->courseshortname}: {$a->subject}';
$string['postrating1'] = 'Sobretot coneixements separats';
$string['postrating2'] = 'Separats i connectats';
$string['postrating3'] = 'Sobretot coneixements connectats';
$string['posts'] = 'Missatges';
$string['postsmadebyuser'] = 'Missatges enviats per {$a}';
$string['postsmadebyuserincourse'] = 'Missatges de {$a->fullname} en el curs {$a->coursename}';
$string['posttoforum'] = 'Envia al fòrum';
$string['posttomygroups'] = 'Envia una còpia a tots els grups';
$string['posttomygroups_help'] = 'S\'envia una còpia d\'aquest missatge a tots els grups als quals teniu accés. Els participants dels grups als quals no teniu accés no ho veuran';
$string['postupdated'] = 'S\'ha actualitzat el vostre missatge';
$string['potentialsubscribers'] = 'Subscriptors potencials';
$string['prevdiscussiona'] = 'Debat anterior: {$a}';
$string['processingdigest'] = 'S\'està processant el resum de correu de l\'usuari {$a}';
$string['processingpost'] = 'S\'està processant el missatge {$a}';
$string['prune'] = 'Divideix';
$string['prunedpost'] = 'S\'ha creat un nou debat amb aquest missatge';
$string['pruneheading'] = 'Divideix el debat i mou aquest missatge a un debat nou';
$string['qandaforum'] = 'Fòrum de preguntes i respostes';
$string['qandanotify'] = 'Aquest és un fòrum de preguntes i respostes. Per tal de poder veure les respostes d\'altres a aquestes preguntes, heu d\'enviar primer la vostra resposta.';
$string['re'] = 'Re:';
$string['readtherest'] = 'Mostra la resta d\'aquest tema';
$string['removeallforumtags'] = 'Suprimeix totes les etiquetes del fòrum';
$string['replies'] = 'Respostes';
$string['repliesmany'] = '{$a} respostes fins ara';
$string['repliesone'] = '{$a} resposta fins ara';
$string['reply'] = 'Respon';
$string['replyforum'] = 'Respon al fòrum';
$string['reply_handler'] = 'Respon als missatges dels fòrums mitjançant el correu electrònic';
$string['reply_handler_name'] = 'Respon als missatges del fòrum';
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
$string['rsstypedefault'] = 'Tipus de canal de continguts RSS';
$string['rsstype_help'] = '<p>Aquesta opció us permet habilitar l\'RSS en aquest fòrum.</p>

<p>Podeu triar dues modalitats:</p>

<ul>
<li><b>Debats:</b> l\'RSS inclourà els nous debats que s\'encetin en el fòrum, amb el missatge inicial.</li>
<li><b>Missatges:</b> l\'RSS inclourà cada missatge nou que s\'enviï al fòrum.</li>
</ul>';
$string['search'] = 'Cerca';
$string['search:activity'] = 'Fòrum: informació de l\'activitat';
$string['searchdatefrom'] = 'Missatges posteriors a aquesta data';
$string['searchdateto'] = 'Missatges anteriors a aquesta data';
$string['searchforumintro'] = 'Introduïu els termes de la cerca en els camps següents:';
$string['searchforums'] = 'Cerca als fòrums';
$string['searchfullwords'] = 'Aquests mots haurien d\'aparèixer com a mots complets';
$string['searchnotwords'] = 'Aquests mots NO s\'hi haurien d\'incloure';
$string['searcholderposts'] = 'Cerca missatges anteriors...';
$string['searchphrase'] = 'Aquesta frase exacta ha d\'aparèixer al missatge';
$string['search:post'] = 'Fòrum - missatges';
$string['searchresults'] = 'Resultats de la cerca';
$string['searchsubject'] = 'Aquests mots haurien de ser a l\'assumpte';
$string['searchtags'] = 'S\'ha etiquetat com a';
$string['searchuser'] = 'Aquest nom hauria de coincidir amb l\'autor';
$string['searchuserid'] = 'L\'ID de Moodle de l\'autor';
$string['searchwhichforums'] = 'Trieu quins fòrums voleu cercar';
$string['searchwords'] = 'Aquests mots poden aparèixer a qualsevol part del missatge';
$string['seeallposts'] = 'Visualitza tots els missatges d\'aquest usuari';
$string['shortpost'] = 'Missatge curt';
$string['showsubscribers'] = 'Mostra/edita els subscriptors';
$string['singleforum'] = 'Un debat simple';
$string['smallmessage'] = '{$a->user} ha escrit a {$a->forumname}';
$string['smallmessagedigest'] = 'Resum del fòrum contenint {$a} missatges';
$string['startedby'] = 'Iniciat per';
$string['subject'] = 'Assumpte';
$string['subscribe'] = 'Subscriu-me a aquest fòrum';
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
$string['subscriptionandtracking'] = 'Subscripció i seguiment';
$string['subscriptionauto'] = 'Subscripció automàtica (l\'usuari la podrà canceŀlar)';
$string['subscriptiondisabled'] = 'No es permet la subscripció';
$string['subscriptionforced'] = 'Subscripció obligatòria';
$string['subscription_help'] = 'La subscripció a un fòrum significa que la persona rebrà notificacions dels missatges nous del fòrum. Normalment, la gent pot triar si vol subscriure\'s a un fòrum o no. A vegades, la subscripció a un fòrum pot ser obligatòria, de manera que tots els membres del curs rebran notificacions.';
$string['subscriptionmode'] = 'Mode de subscripció';
$string['subscriptionmode_help'] = 'La subscripció a un fòrum significa que la persona rebrà còpies per correu electrònic dels missatges del fòrum.

Hi ha quatre modalitats de subscripció:

* Subscripció voluntària. Els participants poden triar si s\'hi subscriuen o no
* Subscripció obligatòria. Tothom hi està subscrit i no pot esborrar-se\'n
* Subscripció inicial. D\'entrada, tothom hi està subscrit, però hi ha la possibilitat d\'esborrar-se\'n quan es vulgui
* Subscripció inhabilitada. No s\'hi permeten les subscripcions.

Nota: Qualssevol canvis en la modalitat de subscripció afecten només els usuaris que s\'inscriguin al curs en el futur i els usuaris no existents.';
$string['subscriptionoptional'] = 'Subscripció voluntària';
$string['subscriptions'] = 'Subscripcions';
$string['tagarea_forum_posts'] = 'Missatges del fòrum';
$string['tagsdeleted'] = 'Les etiquetes del fòrum s\'han suprimit';
$string['thisforumisthrottled'] = 'Aquest fòrum té limitat el nombre de missatges que podeu enviar-hi en un període de temps determinat. Actualment el límit són {$a->blockafter} missatges en {$a->blockperiod}';
$string['timedhidden'] = 'Estat actual: Amagat per als estudiants';
$string['timedposts'] = 'Missatges programats';
$string['timedvisible'] = 'Estat actual: Visible per a tots els usuaris';
$string['timestartenderror'] = 'La data de fi de la visualització no pot ser anterior a la data d\'inici';
$string['trackforum'] = 'Fes el seguiment de missatges no llegits';
$string['tracking'] = 'Seguiment';
$string['trackingoff'] = 'Inactiu';
$string['trackingon'] = 'Obligat';
$string['trackingoptional'] = 'Opcional';
$string['trackingtype'] = 'Seguiment de missatges llegits';
$string['trackingtype_help'] = 'El seguiment de missatges llegits habilita els participants per comprovar fàcilment quins missatges no han vist mitjançant el realçament de qualsevol missatge nou.

Si es defineix com a opcional, els participants poden triar si activen o desactiven el seguiment mitjançant un enllaç al bloc d\'administració. (Els usuaris han d\'habilitar també el seguiment dels fòrums en les seves preferències del fòrum.)

Si s\'habilita «Habilita el seguiment de lectura forçat» a l\'administració del lloc, apareixerà una nova opció —obligat. Això vol dir que el seguiment estarà sempre actiu, malgrat les preferències de fòrum dels usuaris.';
$string['trackreadposts_header'] = 'Seguiment dels fòrums';
$string['unread'] = 'No llegit';
$string['unreadposts'] = 'Missatges no llegits';
$string['unreadpostsnumber'] = '{$a} missatges no llegits';
$string['unreadpostsone'] = 'Un missatge no llegit';
$string['unsubscribe'] = 'Cancel·la la meva subscripció a aquest fòrum';
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
$string['usermarksread'] = 'Marcatge manual de missatges llegits';
$string['viewalldiscussions'] = 'Mostra tots els debats';
$string['viewthediscussion'] = 'Mostra el debat';
$string['warnafter'] = 'Llindar de missatges per a l\'avís';
$string['warnafter_help'] = 'L\'estudiant pot rebre un avís quan s\'acosti al nombre màxim de missatges enviats a un fòrum en un temps determinat. Aquest paràmetre especifica quants missatges pot enviar-hi abans de rebre l\'avís. Aquest límit no afecta els usuaris amb privilegis mod/forum:postwithoutthrottling (usualment, els administradors o professors).';
$string['warnformorepost'] = 'Hi ha més d\'un debat obert en aquest fòrum. S\'utilitzarà el més recent';
$string['yournewquestion'] = 'La vostra pregunta nova';
$string['yournewtopic'] = 'El vostre tema de debat nou';
$string['yourreply'] = 'La vostra resposta';
