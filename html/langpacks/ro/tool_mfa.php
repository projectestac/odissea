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
 * Strings for component 'tool_mfa', language 'ro', version '4.5'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Pondere obținută';
$string['added'] = 'Adăugat';
$string['alltime'] = 'Întotdeauna';
$string['areyousure'] = 'Ești sigur că vrei să ștergi acest factor?';
$string['cancellogin'] = 'Anulează autentificare';
$string['combination'] = 'Combinație';
$string['confirmationreplace'] = 'Vi se va cere imediat să configurați un alt „{$a}”. Vă rugăm să vă asigurați că sunteți gata să finalizați procesul de configurare.';
$string['confirmationrevoke'] = 'Nu vei mai putea să folosești \'{$a}\' pentru a te autentifica în acest site.';
$string['connector'] = 'ȘI';
$string['created'] = 'Creat';
$string['createdfromip'] = 'Creat din IP';
$string['debugmode:heading'] = 'Mod depanare';
$string['devicename'] = 'Dispozitiv';
$string['editfactor'] = 'Editați setările factorului {$a}';
$string['email:subject'] = 'Nu te-ai putut autentifica în {$a}';
$string['enablefactor'] = 'Activare factor';
$string['entercode'] = 'Introdu codul';
$string['error:actionnotfound'] = 'Acțiunea \'{$a}\' nu este acceptată';
$string['error:couldnotreplace'] = 'Nu s-a putut înlocui acest factor.';
$string['error:directaccess'] = 'Această pagină nu ar trebui să fie accesată direct';
$string['error:factornotenabled'] = 'Factorul autentificare multi-factor \'{$a}\' nu este activat';
$string['error:factornotfound'] = 'Factorul autentificare multi-factor \'{$a}\' nu a fost găsit';
$string['error:isguestuser'] = 'Vizitatorii nu sunt acceptați aici.';
$string['error:notenoughfactors'] = 'Nu se poate face autentificarea';
$string['error:reauth'] = 'Nu v-am putut confirma identitatea suficient pentru a îndeplini politica de securitate a autentificării site-ului.<br>Acest lucru se poate datora: <br> 1) Pașii sunt blocați - așteptați câteva minute și încercați din nou.
      <br> 2) Pașii nu au reușit - vă rugăm să verificați detaliile pentru fiecare pas. <br> 3) Pașii au fost omiși - vă rugăm să reîncărcați această pagină sau încercați să vă conectați din nou.';
$string['error:revoke'] = 'Nu se poate șterge factorul';
$string['error:setupfactor'] = 'Nu se poate configura factorul';
$string['error:support'] = '';
$string['error:wrongfactorid'] = 'Identificatorul factorului \'{$a}\' este incorect';
$string['event:failfactor'] = 'Autentificarea multi-factor nu a reușit din cauza unui factor care a eșuat.';
$string['event:faillockout'] = 'Autentificarea multi-factor a eșuat din cauza prea multelor încercări.';
$string['event:failnotenoughfactors'] = 'Autentificarea multi-factor a eșuat deoarece nu există suficienți factori îndepliniți.';
$string['event:userdeletedfactor'] = 'Factor șters';
$string['event:userfailedmfa'] = 'Utilizatorul nu a trecut de autentificarea multi-factor';
$string['event:userpassedmfa'] = 'Verificare realizată cu succes';
$string['event:userrevokedfactor'] = 'Revocare factor';
$string['event:usersetupfactor'] = 'Configurare factor';
$string['factor'] = 'Factor';
$string['factorreplace'] = 'Factor \'{$a}\' înlocuit cu succes.';
$string['factorreport'] = 'Raport al tuturor factorilor';
$string['factorreset'] = 'Autentificarea ta multi-factor \'{$a->factor}\' a fost resetată de un administrator al site-ului. E posibil să fie necesar să setezi acest factor din nou. {$a}';
$string['factorresetall'] = 'Toți factorii tăi de autentificare multi-factor au fost resetati de un administrator al site-ului. E posibil să fie necesar să setezi acești factori din nou. {$a}';
$string['factorrevoked'] = '\'{$a}\' șters cu succes.';
$string['factorsetup'] = '\'{$a}\' a fost configurat succes.';
$string['fallback'] = 'Factor implicit';
$string['fallback_info'] = 'Acest factor este o rezervă dacă nu sunt configurați alți factori. Acest factor va fi întotdeauna neîndeplinit.';
$string['guidance'] = 'Ghidul utilizatorului pentru autentificarea multi-factor';
$string['inputrequired'] = 'Acțiunea utilizatorului';
$string['ipatcreation'] = 'Adresa IP când factorul a fost creat';
$string['lastused'] = 'Cel mai recent utilizat';
$string['lastverified'] = 'Când a fost verificat ultima dată';
$string['locked'] = '{$a} (Nedisponibil)';
$string['lockedusersforallfactors'] = 'Utilizatori blocați: Toți factorii';
$string['lockedusersforfactor'] = 'Utilizatori blocați: {$a}';
$string['lockoutnotification'] = 'Ai {$a} încercări rămase.';
$string['managefactor'] = 'Administrare factor';
$string['mfa'] = 'Multi-factor authentication';
$string['mfa:intro'] = 'Îmbunătățește siguranța contului tău solicitând o metodă adițională de verificare la autentificare.';
$string['mfa:mfaaccess'] = 'Interacțiune cu MFA';
$string['mfareports'] = 'Rapoarte MFA';
$string['mfasettings'] = 'Administrare autentificare multi-factor';
$string['na'] = 'n/a';
$string['needhelp'] = 'Ai nevoie de ajutor?';
$string['nologinusers'] = 'Neautentificat';
$string['nonauthusers'] = 'MFA în așteptare';
$string['overall'] = 'În context general';
$string['pending'] = 'În așteptare';
$string['performbulk'] = 'Acțiuni în masă';
$string['pluginname'] = 'Autentificare multi-factor';
$string['preferences:activefactors'] = 'Factori activi';
$string['preferences:availablefactors'] = 'Factori disponibili';
$string['preferences:header'] = 'Preferințe pentru autentificarea multi-factor';
$string['preferenceslink'] = 'Click aici pentru a merge la preferințele utilizatorului.';
$string['privacy:metadata:tool_mfa'] = 'Date cu factorii';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP-ul de la care a fost configurat factorul.';
$string['privacy:metadata:tool_mfa:factor'] = 'Tipul factorului';
$string['privacy:metadata:tool_mfa:id'] = 'ID înregistrare';
$string['privacy:metadata:tool_mfa:label'] = 'Etichetă pentru instanța factorului, de ex. dispozitiv sau email.';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Data și ora când utilizatorul a fost verificat ultima dată cu acest factor';
$string['privacy:metadata:tool_mfa:secret'] = 'Orice cheie de securitate pentru factor';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Data și ora când instanța factorului a fost configurată.';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Data și ora când factorul a fost modificat ultima dată.';
$string['privacy:metadata:tool_mfa:userid'] = 'ID-ul utilizatorului care are acest factor';
$string['privacy:metadata:tool_mfa_auth'] = 'Ultima dată când a fost înregistrată o autentificare multi-factor cu succes pentru un ID de utilizator.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Data și ora când utilizatorul a fost ultima dată autentificat cu';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'Utilizatorul cu care este asociat acest timestamp.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Chei de securitate temporare pentru autentificarea utilizatorului.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'Factorul cu care este asociată această cheie de securitate.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'Codul secret de securitate.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'ID-ul sesiunii cu care este asociată această cheie de securitate.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'Utilizatorul căruia îi este asociată această cheie de securitate.';
$string['redirecterrordetected'] = '';
$string['remove'] = 'Șterge';
$string['replace'] = 'Înlocuire';
$string['replacefactor'] = 'Înlocuiește factor';
$string['resetconfirm'] = 'Resetează factorul utilizatorului';
$string['resetfactor'] = 'dResetează factorii de autentificare ai utilizatorului';
$string['resetfactorconfirm'] = 'Ești sigur(ă) că vrei să resetezi acest factor pentru {$a}?';
$string['resetfactorplaceholder'] = 'Nume de utilizator și email';
$string['resetsuccess'] = 'Factorul \'{$a->factor}\' resetat cu succes pentru utilizatorul \'{$a->username}\'.';
$string['resetsuccessbulk'] = 'Factorul \'{$a}\' resetat cu succes pentru utilizatorii declarați.';
$string['resetuser'] = 'Utilizator:';
$string['revoke'] = 'Revocare';
$string['revokefactor'] = 'Șterge factor';
$string['selectfactor'] = 'Selectează factorul pentru resetare:';
$string['selectperiod'] = 'Selectează un interval de căutare în cronologie pentru raport:';
$string['settings:combinations'] = 'Rezumat al condițiilor optime pentru autentificare';
$string['settings:debugmode'] = 'Activează modul depanare';
$string['settings:debugmode_help'] = 'Modul de depanare va afișa un mic banner de notificare pe paginile de administrare MFA, precum și pagina de preferințe ale utilizatorului, cu informații despre factorii activați în prezent.';
$string['settings:duration'] = 'Durata validității cheii de securitate';
$string['settings:duration_help'] = 'Durata cât cheile de securitate generate sunt valabile.';
$string['settings:enabled'] = 'Plugin MFA activat';
$string['settings:enablefactor'] = 'Activare factor';
$string['settings:enablefactor_help'] = 'Activați acest control pentru a permite ca factorul să fie utilizat pentru autentificarea MFA.';
$string['settings:general'] = 'Setări MFA generale';
$string['settings:guidancecheck'] = 'Consultă pagina cu informații';
$string['settings:guidancecheck_help'] = 'Adăugați un link către pagina de suport în paginile de autentificare MFA și pagina de preferințe MFA.';
$string['settings:guidancefiles'] = 'Pagini cu informații de orientare';
$string['settings:guidancefiles_help'] = 'Adaugă orice fișiere aici pentru a le utiliza în pagina cu informații de orientare și încorporează-le în pagină folosind {{filename}} (resolved path) sau {{{filename}}} (html link) în editor';
$string['settings:guidancepage'] = 'Conținutul paginii cu informații';
$string['settings:guidancepage_help'] = 'HTML va fi afișat pe pagina cu infrmații de orientare. Inserează denumirea fișierelor din zona de fișiere pentru a încorpora fișierul cu calea identificată {{filename}} sau ca un link html folosind {{{filename}}}.';
$string['settings:lockout'] = 'Pragul de blocare';
$string['settings:lockout_help'] = 'Numărul de încercări la care un utilizator poate răspunde unui factor de autentificare înainte ca aceștia să fie împiedicați să se conecteze.';
$string['settings:redir_exclusions'] = 'Adrese URL care nu ar trebui să redirecționeze către validarea MFA.';
$string['settings:redir_exclusions_help'] = 'Fiecare linie nouă este o adresă URL relativă de la siteroot pentru care verificarea MFA nu va face redirecționarea';
$string['settings:weight'] = 'Pondere factor';
$string['settings:weight_help'] = 'Ponderea acestui factor, dacă a fost validat. Un utilizator are nevoie de cel puțin 100 de puncte pentru a fi autentificat.';
$string['setup'] = 'Configurare';
$string['setupfactor'] = 'Configurare factor';
$string['setuprequired'] = 'Configurare utilizator';
$string['state:fail'] = 'Eșuat';
$string['state:locked'] = 'Blocat';
$string['state:neutral'] = 'Neutru';
$string['state:pass'] = 'Validat';
$string['state:unknown'] = 'Necunoscut';
$string['subplugintype_factor'] = 'Tip de factor';
$string['subplugintype_factor_plural'] = 'Tipurile de factor';
$string['totalusers'] = 'Total utilizatori';
$string['totalweight'] = 'Pondere totală';
$string['userempty'] = 'Câmpul utilizator trebuie să fie completat.';
$string['userlogs'] = 'Autentificările utilizatorului';
$string['usernotfound'] = 'Nu se poate localiza utilizatorul.';
$string['usersauthedinperiod'] = 'Logat';
$string['verification'] = 'Verificare în 2 pași';
$string['verification_desc'] = 'Pentru securitatea contului tău, trebuie să verificăm identitatea ta.';
$string['verificationcode'] = 'Cod de verificare';
$string['verificationcode_help'] = 'Codul de verificare furnizat de factorul de autentificare curent.';
$string['verifyalt'] = 'Încearcă altă modalitate de verificare:';
$string['weight'] = 'Pondere';
$string['yesremove'] = 'Da, șterge';
$string['yesreplace'] = 'Da, înlocuiește';
