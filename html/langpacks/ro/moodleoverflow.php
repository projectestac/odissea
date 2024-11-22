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
 * Strings for component 'moodleoverflow', language 'ro', version '4.1'.
 *
 * @package     moodleoverflow
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanewdiscussion'] = 'Adăugați un nou subiect de discuție';
$string['addanewreply'] = 'Adăugați un răspuns nou';
$string['allowcoursereputation'] = 'Suma reputației în cadrul unui curs.';
$string['allownegativereputation'] = 'Permiteți reputația negativă?';
$string['allownegativereputation_help'] = 'Dacă este setat la da, reputația utilizatorilor în cadrul unui curs sau în cadrul unui modul poate fi negativă. Dacă este setat la nu, reputația se va opri pentru a scădea la zero.';
$string['allowratingchange'] = 'Permiteți modificări de rating';
$string['allsubscribe'] = 'Abonați-vă la toate forumurile';
$string['allunsubscribe'] = 'Dezabonați-vă de la toate forumurile';
$string['areaattachment'] = 'Atașamente';
$string['areapost'] = 'Mesaje';
$string['attachment'] = 'Atașament';
$string['attachment_help'] = 'În mod opțional, puteți atașa unul sau mai multe fișiere unei postări pe forum. Dacă atașați o imagine, ea va fi afișată după mesaj.';
$string['attachments'] = 'Atașamente';
$string['bynameondate'] = 'de {$a->name} ({$a->rating}) - {$a->date}';
$string['bynameondatenorating'] = 'de {$a->name} - {$a->date}';
$string['cannotcreatediscussion'] = 'Nu se poate crea o discuție nouă';
$string['cannotdeletepost'] = 'Nu puteți șterge această postare!';
$string['cannotfindparentpost'] = 'Nu am putut găsi părintele principal al postării {$a}';
$string['cannotreply'] = 'Nu puteți răspunde la această postare';
$string['cannottrack'] = 'Nu am putut opri urmărirea acelui forum';
$string['cannotunsubscribe'] = 'Nu v-am putut dezabona de la acel forum';
$string['cannotupdatepost'] = 'Nu puteți actualiza această postare';
$string['cleanreadtime'] = 'Marcați postările vechi ca ora citită';
$string['clicktosubscribe'] = 'Nu sunteți abonat la această discuție. Faceți clic pentru a vă abona.';
$string['clicktounsubscribe'] = 'Sunteți abonat la această discuție. Faceți clic pentru a vă dezabona.';
$string['configallowcoursereputation'] = 'Permiteți să rezumați reputația tuturor instanțelor cursului curent?';
$string['configallowratingchange'] = 'Poate un utilizator să-și schimbe evaluările?';
$string['configcleanreadtime'] = 'Ora zilei pentru a curăța postările vechi din tabelul „citire”.';
$string['configforcedreadtracking'] = 'Permite ca fluxurile Moodleover să fie setate la urmărirea forțată a citirii. Va avea ca rezultat scăderea performanței pentru unii utilizatori, în special la cursurile cu multe fluxuri de dispoziții și postări. Când este dezactivat, orice fluxuri de moodleover setate anterior la Forțat sunt tratate ca opționale.';
$string['configmanydiscussions'] = 'Numărul maxim de discuții afișate într-o instanță Moodleoverflow pe pagină';
$string['configmaxattachments'] = 'Numărul maxim de atașamente acceptate la o postare.';
$string['configmaxbytes'] = 'Dimensiune maximă implicită pentru toate atașamentele forumului de pe site (sub rezerva limitelor cursului și a altor setări locale)';
$string['configmaxeditingtime'] = 'Secundele maxime implicite sunt 3600 (= o oră).';
$string['configmaxmailingtime'] = 'Postările mai vechi de acest număr de ore nu vor fi trimise utilizatorilor prin poștă. Acest lucru va ajuta la evitarea problemelor în care cronul nu mai rulează de mult timp.';
$string['configoldpostdays'] = 'Numărul de zile vechi în care orice postare este considerată citită.';
$string['configpreferteachersmark'] = 'Răspunsul marcat ca soluție de către un proprietar de curs este prioritar față de răspunsul marcat ca util de către inițiatorul discuției.';
$string['configreputationnotnegative'] = 'Interzice situația în care reputația utilizatorilor este negativă.';
$string['configtrackingtype'] = 'Setare implicită pentru urmărirea citirii.';
$string['configtrackmoodleoverflow'] = 'Setați la \'da\' dacă doriți să urmăriți citirea/necitirea pentru fiecare utilizator.';
$string['configvotescaledownvote'] = 'Reputația pe care o dă un vot negativ pentru postarea dvs.';
$string['configvotescalehelpful'] = 'Reputația pe care o acordă o notă de utilitate pentru postarea dvs.';
$string['configvotescalesolved'] = 'Reputația pe care o acordă o notă de rezolvare pentru postarea dvs.';
$string['configvotescaleupvote'] = 'Reputația pe care o acordă un vot pozitiv pentru postarea dvs.';
$string['configvotescalevote'] = 'Reputația pe care o acordă votul.';
$string['confirmsubscribe'] = 'Sigur doriți să vă abonați la forumul \'{$a}\'?';
$string['confirmsubscribediscussion'] = 'Sigur doriți să vă abonați la discuția \'{$a->discussion}\' pe forumul \'{$a->moodleoverflow}\'?';
$string['confirmunsubscribe'] = 'Sigur doriți să vă dezabonați de la moodleoverflow \'{$a}\'?';
$string['confirmunsubscribediscussion'] = 'Sigur doriți să vă dezabonați de la discuții \'{$a->discussion}\' din moodleoverflow \'{$a->moodleoverflow}\'?';
$string['couldnotadd'] = 'Nu se poate adăuga postarea dumneavoastră din cauze unei erori necunoscute';
$string['couldnotdeletereplies'] = 'Ne pare rău, acest element nu poate fi șters, deoarece oamenii au răspuns deja la acesta';
$string['couldnotupdate'] = 'Nu s-a putut actualiza postarea dvs. din cauza unei erori necunoscute';
$string['coursewidereputation'] = 'Reputația din toate modulele?';
$string['coursewidereputation_help'] = 'Dacă este setat la da, reputația utilizatorilor tuturor modulelor moodleoverflow din acest curs va fi însumată.';
$string['crontask'] = 'Lucrări de întreținere Moodleoverflow';
$string['delete'] = 'Ștergere';
$string['deletesure'] = 'Sigur doriți să ștergeți această postare?';
$string['deletesureplural'] = 'Sigur doriți să ștergeți această postare și toate răspunsurile? ({$a} posts)';
$string['disallowsubscribe'] = 'Abonamentele nu sunt permise';
$string['discussionlocked'] = 'Această discuție a fost blocată, astfel încât să nu mai puteți răspunde la ea.';
$string['discussionname'] = 'Numele discuției';
$string['discussionnownotsubscribed'] = '{$a->name} NU va fi notificat despre postările noi în \'{$a->discussion}\' de \'{$a->moodleoverflow}\\';
$string['discussionnowsubscribed'] = '{$a->name} vor fi anunțați despre postările noi în \'{$a->discussion}\' de \'{$a->moodleoverflow}\\';
$string['discussions'] = 'Discuții';
$string['discussionsubscription'] = 'Abonament la discuții';
$string['discussionsubscription_help'] = 'Abonarea la o discuție înseamnă că veți primi notificări de postări noi la acea discuție.';
$string['downvotenotchangeable'] = 'Vot negativ (nu poate fi modificat)';
$string['edit'] = 'Editare';
$string['editedby'] = 'Editat de {$a->name} - trimitere inițială {$a->date}';
$string['editedpostupdated'] = '{$a}\'s postarea a fost actualizată';
$string['erroremptymessage'] = 'Mesajul de postare nu poate fi gol';
$string['erroremptysubject'] = 'Subiectul postării nu poate fi gol.';
$string['errorwhiledelete'] = 'A apărut o eroare la ștergerea înregistrării.';
$string['eventdiscussioncreated'] = 'Discuția a fost creată';
$string['eventdiscussiondeleted'] = 'Discuția a fost ștearsă';
$string['eventdiscussionsubscriptioncreated'] = 'Abonamentul pentru discuții a fost creat';
$string['eventdiscussionsubscriptiondeleted'] = 'Abonamentul pentru discuții a fost șters';
$string['eventdiscussionviewed'] = 'Discuție vizualizată';
$string['eventpostcreated'] = 'Postare a fost creată';
$string['eventpostdeleted'] = 'Postarea a fost ștearsă';
$string['eventpostupdated'] = 'Postare a fost actualizată';
$string['eventratingcreated'] = 'Evaluarea a fost creată';
$string['eventratingdeleted'] = 'Evaluarea a fost ștearsă';
$string['eventratingupdated'] = 'Evaluarea a fost actualizată';
$string['eventreadtrackingdisabled'] = 'Urmărirea citirii este dezactivată';
$string['eventreadtrackingenabled'] = 'Urmărirea citirii este activată';
$string['eventsubscriptioncreated'] = 'Abonament a fost creat';
$string['eventsubscriptiondeleted'] = 'Abonamentul a fost șters';
$string['everyonecannowchoose'] = 'Toată lumea poate alege acum să fie abonați';
$string['everyoneisnowsubscribed'] = 'Toată lumea este acum abonată la acest forum';
$string['everyoneissubscribed'] = 'Toată lumea este abonată la acest forum';
$string['forcedreadtracking'] = 'Permiteți urmărirea forțată a citirii';
$string['generalmoodleoverflows'] = 'Forumuri în acest curs';
$string['gotoindex'] = 'Gestionați preferințele';
$string['grademaxgradeerror'] = 'Nota maximă trebuie să fie un număr întreg pozitiv diferit de 0';
$string['gradesreport'] = 'Raportul notelor';
$string['gradesupdated'] = 'Notele au fost actualizate';
$string['hiddenmoodleoverflowpost'] = 'Postare ascunsă pe forum';
$string['invaliddiscussionid'] = 'ID-ul discuției a fost incorect';
$string['invalidforcesubscribe'] = 'Mod de abonament forțat nevalid';
$string['invalidmoodleoverflowid'] = 'ID-ul forumului a fost incorect';
$string['invalidparentpostid'] = 'ID-ul postării părinte a fost incorect';
$string['invalidpostid'] = 'ID de postare nevalid - {$a}';
$string['invalidratingid'] = 'Evaluarea trimisă nu este nici un vot pozitiv, nici un vot negativ.';
$string['mailindexlink'] = 'Schimbați preferințele forumului: {$a}';
$string['manydiscussions'] = 'Discuții pe pagină';
$string['markallread'] = 'Marcați toate postările din această discuție ca citite.';
$string['markdiscussionreadsuccessful'] = 'Discuția a fost marcată ca citită.';
$string['markhelpful'] = 'Marcați ca util';
$string['markmoodleoverflowreadsuccessful'] = 'Toate postările au fost marcate ca citite.';
$string['marknothelpful'] = 'Nu e de ajutor';
$string['marknotsolved'] = 'Îndepărtați marcajul Rezolvat';
$string['markread'] = 'Marchează ca fiind citit';
$string['markreadfailed'] = 'O postare a discuției nu a putut fi marcată ca citită.';
$string['marksolved'] = 'Marcați ca fiind o soluție';
$string['markunread'] = 'Marcați ca necitit';
$string['maxattachments'] = 'Numărul maxim de atașamente';
$string['maxattachments_help'] = 'Această setare specifică numărul maxim de fișiere care pot fi atașate la o postare pe forum.';
$string['maxattachmentsize'] = 'Dimensiunea maximă a atașamentului';
$string['maxattachmentsize_help'] = 'Această setare specifică cea mai mare dimensiune a fișierului care poate fi atașat la o postare pe forum.';
$string['maxeditingtime'] = 'Perioada maximă în care o postare poate fi editată de proprietar (sec)';
$string['maxmailingtime'] = 'Timp maxim de expediere';
$string['message'] = 'Mesaj';
$string['messageprovider:posts'] = 'Notificări pentru postările noi';
$string['modulename'] = 'Moodleoverflow';
$string['modulename_help'] = 'Modulul Moodleoverflow permite participanților să utilizeze o structură de forum de întrebări-răspunsuri. Afișarea forumului este necronologică, deoarece ordonarea depinde de votul colaborativ în loc de timp.';
$string['modulenameplural'] = 'Moodleoverflows';
$string['moodleoverflow'] = 'Moodleoverflow';
$string['moodleoverflow:addinstance'] = 'Adăugați o nouă instanță Moodleoverflow';
$string['moodleoverflow:allowforcesubscribe'] = 'Permiteți abonamentul forțat';
$string['moodleoverflow:createattachment'] = 'Creați atașamente';
$string['moodleoverflow:deleteanypost'] = 'Ștergeți postările';
$string['moodleoverflow:deleteownpost'] = 'Ștergeți postările proprii';
$string['moodleoverflow:editanypost'] = 'Editați postările';
$string['moodleoverflow:managesubscriptions'] = 'Gestionați abonamentele';
$string['moodleoverflow:marksolved'] = 'Marcați o postare ca soluție';
$string['moodleoverflow:ratehelpful'] = 'Marcați o postare ca fiind utilă';
$string['moodleoverflow:ratepost'] = 'Evaluați o postare';
$string['moodleoverflow:replypost'] = 'Răspundeți în discuție';
$string['moodleoverflow:startdiscussion'] = 'Începeți o discuție';
$string['moodleoverflow:viewanyrating'] = 'Vizualizați evaluările';
$string['moodleoverflow:viewdiscussion'] = 'Vizualizați discuția';
$string['moodleoverflowauthorhidden'] = 'Autor (ascuns)';
$string['moodleoverflowbodyhidden'] = 'Această postare nu poate fi vizualizată de dvs., probabil pentru că nu ați postat în discuție, timpul maxim de editare nu a trecut încă, discuția nu a început sau discuția a expirat.';
$string['moodleoverflowfieldset'] = 'Set de câmpuri exemplu personalizat';
$string['moodleoverflowname'] = 'Nume Moodleoverflow';
$string['moodleoverflows'] = 'Moodleoverflows';
$string['moodleoverflowsubjecthidden'] = 'Subiect (ascuns)';
$string['nodiscussions'] = 'Nu există încă subiecte de discuție în acest forum.';
$string['noguestpost'] = 'Ne pare rău, invitații nu au voie să posteze.';
$string['noguesttracking'] = 'Ne pare rău, invitații nu au voie să seteze opțiuni de urmărire.';
$string['noonecansubscribenow'] = 'Abonamentele sunt acum interzise';
$string['nopermissiontosubscribe'] = 'Nu aveți permisiunea de a vizualiza abonații';
$string['nopostmoodleoverflow'] = 'Ne pare rău, nu aveți voie să postați pe acest forum.';
$string['noratemoodleoverflow'] = 'Ne pare rău, nu aveți voie să votați pe acest forum.';
$string['noratingchangeallowed'] = 'Nu aveți voie să vă modificați evaluările.';
$string['notexists'] = 'Discuția nu mai există';
$string['notpartofdiscussion'] = 'Această postare nu face parte dintr-o discuție!';
$string['notrackmoodleoverflow'] = 'Nu urmăriți postările necitite';
$string['notstartuser'] = 'Numai utilizatorul care a început discuția poate marca un răspuns ca fiind util.';
$string['notteacher'] = 'Doar proprietarii de cursuri pot face acest lucru.';
$string['noviewdiscussionspermission'] = 'Nu aveți permisiunea de a vizualiza discuțiile pe acest forum';
$string['nowallsubscribed'] = 'Toate forumurile din {$a} sunt abonate.';
$string['nowallunsubscribed'] = 'Toate forumurile din {$a} sunt dezabonate.';
$string['nownotsubscribed'] = '{$a->name} NU va fi notificat despre postările noi în \'{$a->moodleoverflow}\\';
$string['nownottracking'] = '{$a->name} nu mai urmărește \'{$a->moodleoverflow}\'.';
$string['nowsubscribed'] = '{$a->name} vor fi anunțați despre postările noi în \'{$a->moodleoverflow}\\';
$string['nowtracking'] = '{$a->name} urmărește \'{$a->moodleoverflow}\'.';
$string['oldpostdays'] = 'Citiți după zile';
$string['parent'] = 'Arată părinte';
$string['permalink'] = 'Permalink';
$string['pluginadministration'] = 'Administrarea Moodleoverflow';
$string['pluginname'] = 'Moodleoverflow';
$string['postaddedsuccess'] = 'Postarea dvs. a fost adăugată cu succes.';
$string['postaddedtimeleft'] = 'Aveți {$a} pentru a-l edita dacă doriți să faceți modificări.';
$string['postbyuser'] = '{$a->post} de {$a->user}';
$string['postincontext'] = 'Vedeți această postare în context';
$string['postmailinfolink'] = 'Aceasta este o copie a unui mesaj postat în {$a->coursename}.

Pentru a răspunde, faceți clic pe acest link: {$a->replylink}';
$string['postmailsubject'] = '{$a->courseshortname}: {$a->subject}';
$string['postnotexist'] = 'Postarea solicitată nu există';
$string['posts'] = 'Postări';
$string['posttomoodleoverflow'] = 'Postați pe forum';
$string['postupdated'] = 'Postarea dumneavoastră a fost actualizată';
$string['preferteachersmark'] = 'Preferați notele proprietarilor de cursuri?';
$string['privacy:anonym_discussion_name'] = 'Numele discuției anonimizat';
$string['privacy:anonym_post_message'] = 'Acest conținut a fost șters.';
$string['privacy:anonym_user_name'] = 'Anonim';
$string['privacy:discussionsubscriptionpreference'] = 'Ați ales următoarea preferință de abonament pentru discuții pentru acest forum: "{$a->preference}"';
$string['privacy:metadata:core_files'] = 'Moodleoverflow stochează fișiere care au fost încărcate de utilizator pentru a face parte dintr-o postare pe forum.';
$string['privacy:metadata:moodleoverflow_discuss_subs'] = 'Informații despre abonamentele la discuții individuale pe forum. Aceasta include situațiile în care un utilizator a ales să se aboneze la o discuție sau să se dezaboneze de la una în care altfel ar fi abonat.';
$string['privacy:metadata:moodleoverflow_discuss_subs:discussion'] = 'ID-ul discuției pentru care s-a făcut abonarea/ dezabonarea.';
$string['privacy:metadata:moodleoverflow_discuss_subs:preference'] = 'Ora de începere a abonamentului.';
$string['privacy:metadata:moodleoverflow_discuss_subs:userid'] = 'ID-ul utilizatorului care a modificat setările de abonament.';
$string['privacy:metadata:moodleoverflow_discussions'] = 'Informații despre discuții pe forum. Aceasta include ce discuții a început un utilizator.';
$string['privacy:metadata:moodleoverflow_discussions:name'] = 'Numele discuției.';
$string['privacy:metadata:moodleoverflow_discussions:timemodified'] = 'Ora când ultima discuție (de exemplu, o postare) a fost modificată ultima dată.';
$string['privacy:metadata:moodleoverflow_discussions:userid'] = 'ID-ul utilizatorului care a început discuția.';
$string['privacy:metadata:moodleoverflow_discussions:usermodified'] = 'ID-ul ultimului utilizator care a modificat discuția';
$string['privacy:metadata:moodleoverflow_posts'] = 'Informații despre postările de pe forum. Aceasta include date despre postările scrise de un utilizator.';
$string['privacy:metadata:moodleoverflow_posts:created'] = 'Data la care a fost creată această postare.';
$string['privacy:metadata:moodleoverflow_posts:discussion'] = 'ID-ul discuției la care contribuie această postare.';
$string['privacy:metadata:moodleoverflow_posts:message'] = 'Textul acestei postări.';
$string['privacy:metadata:moodleoverflow_posts:modified'] = 'Modificat ultima dată.';
$string['privacy:metadata:moodleoverflow_posts:parent'] = 'ID-ul postării la care se referă această postare.';
$string['privacy:metadata:moodleoverflow_posts:userid'] = 'ID-ul utilizatorului care a trimis această postare.';
$string['privacy:metadata:moodleoverflow_ratings'] = 'Informații despre evaluările postărilor. Aceasta include atunci când un utilizator a evaluat o postare și evaluarea specifică a acesteia.';
$string['privacy:metadata:moodleoverflow_ratings:discussionid'] = 'ID-ul discuției din care face parte postarea evaluată.';
$string['privacy:metadata:moodleoverflow_ratings:firstrated'] = 'Data acordării ratingului.';
$string['privacy:metadata:moodleoverflow_ratings:lastchanged'] = 'Data ultimei schimbări a ratingului.';
$string['privacy:metadata:moodleoverflow_ratings:moodleoverflowid'] = 'ID-ul forumului Moodleoverflow care conține postarea evaluată.';
$string['privacy:metadata:moodleoverflow_ratings:postid'] = 'ID-ul postării care a fost evaluată.';
$string['privacy:metadata:moodleoverflow_ratings:rating'] = 'Evaluarea trimisă. 0 = neutru, 1 = negativ, 2 = pozitiv, 3 = util, 4 = soluție';
$string['privacy:metadata:moodleoverflow_ratings:userid'] = 'ID-ul utilizatorului care a trimis evaluarea.';
$string['privacy:metadata:moodleoverflow_read'] = 'Informații despre urmărirea citită a postărilor. Aceasta include atunci când postările au fost citite de un utilizator.';
$string['privacy:metadata:moodleoverflow_read:discussionid'] = 'ID-ul discuției căreia îi aparține postarea citită,';
$string['privacy:metadata:moodleoverflow_read:firstread'] = 'Data la care a fost citită postarea pentru prima dată.';
$string['privacy:metadata:moodleoverflow_read:lastread'] = 'Data la care postarea a fost citită ultima dată de utilizator.';
$string['privacy:metadata:moodleoverflow_read:postid'] = 'ID-ul postării care a fost citită.';
$string['privacy:metadata:moodleoverflow_read:userid'] = 'ID-ul utilizatorului care a citit postarea.';
$string['privacy:metadata:moodleoverflow_subscriptions'] = 'Informații despre abonamentele la forumuri. Aceasta include ce forumuri s-a abonat un utilizator.';
$string['privacy:metadata:moodleoverflow_subscriptions:moodleoverflow'] = 'ID-ul forumului Moodleoverflow la care s-a abonat utilizatorul.';
$string['privacy:metadata:moodleoverflow_subscriptions:userid'] = 'ID-ul utilizatorului care s-a abonat la un forum.';
$string['privacy:metadata:moodleoverflow_tracking'] = 'Informații despre urmărirea forumurilor. Aceasta include forumurile pe care un utilizator nu le urmărește.';
$string['privacy:metadata:moodleoverflow_tracking:moodleoverflowid'] = 'ID-ul forumului moodleoverflow care nu este urmărit de utilizator.';
$string['privacy:metadata:moodleoverflow_tracking:userid'] = 'ID-ul utilizatorului care nu urmărește forumul.';
$string['privacy:postwasread'] = 'Această postare a fost citită pentru prima dată {$a->firstread} și cel mai recent citită pe data de {$a->lastread}';
$string['privacy:readtrackingdisabled'] = 'Ați ales să nu urmăriți ce postări ați citit în cadrul acestui forum.';
$string['privacy:subscribedtoforum'] = 'Sunteți abonat la acest forum.';
$string['rateownpost'] = 'Nu poți evalua propria postare.';
$string['ratingfailed'] = 'Evaluarea nu a reușit. Încearcă din nou.';
$string['ratingheading'] = 'Evaluare și reputație';
$string['ratingpreference'] = 'Afișați mai întâi';
$string['ratingpreference_help'] = 'Răspunsurile pot fi marcate ca soluții și utile. Această opțiune decide care dintre acestea va fi fixată ca primul răspuns al discuției. Există 2 opțiuni:

* Util - Marcarea ca fiind utilă a începutului de thread pe un subiect va fi fixată în partea de sus a discuției
* Rezolvat - nota de soluție a formatorului va fi fixată în partea de sus a discuției';
$string['ratingtoold'] = 'Evaluările pot fi modificate numai în termen de 30 de minute de la primul vot.';
$string['re'] = 'Re:';
$string['reply'] = 'Comentariu';
$string['replyfirst'] = 'Răspuns';
$string['reputation'] = 'Reputație';
$string['reputationnotnegative'] = 'Reputație strict pozitivă?';
$string['scalefactor'] = 'Factor de scară';
$string['scalefactor_help'] = 'Evaluarea utilizatorilor este împărțită la factorul de scară pentru a obține nota fiecărui utilizator. Dacă nota rezultată este mai mare decât nota maximă, valoarea este limitată la nota maximă specificată';
$string['scalefactorerror'] = 'Factorul de scară trebuie să fie un număr întreg pozitiv diferit de 0';
$string['smallmessage'] = '{$a->user} postat în {$a->moodleoverflowname}';
$string['starterrating'] = 'Util';
$string['subject'] = 'Subiect';
$string['subscribe'] = 'Abonați-vă la acest forum';
$string['subscribed'] = 'Abonat';
$string['subscribeenrolledonly'] = 'Ne pare rău, numai utilizatorii înscriși au permisiunea de a se abona la notificările de postare.';
$string['subscribestart'] = 'Trimiteți-mi notificări de postări noi în acest forum';
$string['subscribestop'] = 'Nu vreau să fiu informat despre postările noi pe acest forum';
$string['subscriptionauto'] = 'Abonare automată';
$string['subscriptiondisabled'] = 'Abonamentul a fost dezactivat';
$string['subscriptionforced'] = 'Abonament forțat';
$string['subscriptionmode'] = 'Mod abonament';
$string['subscriptionmode_help'] = 'Atunci când un participant este abonat la un forum înseamnă că va primi notificări de postare pe forum. Există 4 opțiuni pentru modul abonament:

* Abonament opțional - Participanții pot alege dacă vor fi abonați
* Abonament forțat - Toată lumea este abonată și nu se poate dezabona
* Abonament automat - Toată lumea este abonată inițial, dar poate alege să se dezaboneze în orice moment
* Abonament dezactivat - Abonamentele nu sunt permise

Notă: Orice modificare a modului de abonament va afecta doar utilizatorii care se înscriu la curs în viitor și nu utilizatorii existenți.';
$string['subscriptionoptional'] = 'Abonament opțional';
$string['subscriptiontrackingheader'] = 'Abonament și urmărire';
$string['taskcleanreadrecords'] = 'Task-ul de suport Moodleoverflow pentru a curăța înregistrările vechi citite';
$string['tasksendmails'] = 'Task-ul de suport Moodleoverflow pentru a trimite mesaje';
$string['taskupdategrades'] = 'Task-ul de suport Moodleoverflow pentru actualizarea notelor';
$string['teacherrating'] = 'Soluţie';
$string['tracking'] = 'Urmărire';
$string['trackingoff'] = 'Oprit';
$string['trackingon'] = 'Forţat';
$string['trackingoptional'] = 'Opțional';
$string['trackingtype'] = 'Citiți urmărirea';
$string['trackingtype_help'] = 'Urmărirea citirii permite participanților să verifice cu ușurință ce postări nu au văzut încă prin evidențierea unor postări noi.

Dacă este setat la opțional, urmărirea este activată implicit, dar participanții pot dezactiva urmărirea.

Dacă opțiunea „Permite urmărirea citirii forțate” este activată în administrarea site-ului, atunci este disponibilă o altă opțiune - forțată. Aceasta înseamnă că urmărirea este întotdeauna activă.';
$string['trackmoodleoverflow'] = 'Urmăriți postările necitite';
$string['unknownerror'] = 'Acest lucru nu este de așteptat să se întâmple.';
$string['unreadposts'] = 'Postări necitite';
$string['unreadpostsnumber'] = '{$a} postări necitite';
$string['unreadpostsone'] = '1 postare necitită';
$string['unsubscribe'] = 'Dezabonați-vă de la acest forum';
$string['unsubscribediscussion'] = 'Dezabonați-vă de la această discuție';
$string['unsubscribediscussionlink'] = 'Dezabonați-vă de la această discuție: {$a}';
$string['unsubscribelink'] = 'Dezabonați-vă de la acest forum: {$a}';
$string['updategrades'] = 'Actualizați notele';
$string['upvotenotchangeable'] = 'Vot pozitiv (nu se poate modifica)';
$string['votescaledownvote'] = 'Reputație: vot negativ';
$string['votescalehelpful'] = 'Reputație: Util';
$string['votescalesolved'] = 'Reputație: Soluție';
$string['votescaleupvote'] = 'Reputație: vot pozitiv';
$string['votescalevote'] = 'Reputație: Vot.';
$string['yournewtopic'] = 'Noul dvs. subiect de discuție';
$string['yourreply'] = 'Răspunsul dvs.';
