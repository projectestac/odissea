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
 * Strings for component 'auth', language 'lt', version '4.5'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Galimi autentifikavimo papildiniai';
$string['allowaccountssameemail'] = 'Leisti paskyras su tuo pačiu el.paštu';
$string['allowaccountssameemail_desc'] = 'Jei įjungta, daugiau nei vieno naudotojo paskyra gali dalintis tuo pačiu el. pašto adresu. Dėl to gali kilti problemų dėl saugumo ar privatumo, pavyzdžiui, slaptažodžio keitimo patvirtinimo el. pašto adresu.';
$string['alternatelogin'] = 'Jei čia įvesite URL, jis bus naudojamas kaip prisijungimo prie šios svetainės puslapis. Puslapyje turėtų būti forma, kurioje veiksmo ypatybė nustatyta kaip <strong>{$a}</strong>, ir turėtų būti pateikti laukai <strong>naudotojo vardas</strong> ir <strong>slaptažodis</strong>.<br />Būkite atidūs ir neįveskite neteisingo URL, nes galite užrakinti savo prieigą prie šios svetainės.<br />Palikite šio parametro lauką tuščią norėdami naudoti numatytąjį prisijungimo puslapį.';
$string['alternateloginurl'] = 'Papildomas prisijungimo URL';
$string['auth_changepasswordhelp'] = 'Slaptažodžio keitimas – pagalba';
$string['auth_changepasswordhelp_expl'] = 'Naudotojams, kurie pamiršo savo {$a} slaptažodį, rodoma pagalbinė informacija, ką daryti pamiršus slaptažodį. Tai bus rodoma kartu su arba vietoj <strong>slaptažodžio keitimo URL</strong> ar vidinio „Moodle“ slaptažodžio keitimo informacijos.';
$string['auth_changepasswordurl'] = 'Slaptažodžio keitimo URL';
$string['auth_changepasswordurl_expl'] = 'Nurodykite URL, kuris bus siunčiamas naudotojams, pamiršusiems savo {$a} slaptažodį. Nustatykite parametro <strong>Naudoti standartinį slaptažodžio keitimo puslapį</strong> reikšmę <strong>Ne</strong>.';
$string['auth_changingemailaddress'] = 'Jūs pateikėte užklausą pakeisti elektroninio pašto adresą: {$a->oldemail} į {$a->newemail}. Saugumo sumetimais mes jums siunčiame el. pranešimą naujuoju adresu, kad patvirtintumėte, jog tas adresas priklauso jums. Jūsų el. pašto adresas bus atnaujintas iškart, kai tik atidarysite tame pranešime nurodytą URL.';
$string['auth_common_settings'] = 'Bendrieji nustatymai';
$string['auth_data_mapping'] = 'Duomenų susiejimas';
$string['auth_fieldlock'] = 'Užrakinti reikšmę';
$string['auth_fieldlock_expl'] = '<p>Užrakinimo reikšmė: jei įjungta, naudotojai negalės redaguoti lauko. Naudokite šią parinktį, jei tvarkote šiuos duomenis išorinėje autentifikavimo sistemoje. </p>';
$string['auth_fieldlockfield'] = 'Užrakinti reikšmę ({$a})';
$string['auth_fieldlocks'] = 'Užrakinti naudotojo laukus';
$string['auth_fieldlocks_help'] = '<p>Galite užrakinti naudotojo duomenų laukus. Tai naudinga tose svetainėse, kuriose naudotojo duomenis tvarko administratoriai rankiniu būdu redaguodami naudotojo įrašus arba nusiųsdami per priemonę Nusiųsti naudotojus. Jei ketinate užrakinti tuos laukus, kuriuos „Moodle“ reikalauja užpildyti, tuos duomenis būtinai turėsite pateikti kurdami naudotojo paskyras, nes kitaip paskyromis nebus įmanoma naudotis.</p><p>Apsvarstykite variantą nustatyti užrakinimo režimą Neužrakinta, kai tuščia, kad išvengtumėte šios problemos.</p>';
$string['auth_fieldmapping'] = 'Duomenų susiejimas ({$a})';
$string['auth_invalidnewemailkey'] = 'Klaida: jei bandote patvirtinti el. pašto adreso keitimą, tikriausiai padarėte klaidą kopijuodami URL, kurį atsiuntėme jums laiške. Nukopijuokite adresą ir bandykite dar kartą.';
$string['auth_loginpasswordtoggle'] = 'Slaptažodžio matomumo perjungimas';
$string['auth_loginpasswordtoggle_desc'] = 'Prisijungimo ekrane prie slaptažodžio lauko pridėti piktogramą, leidžiančią naudotojams parodyti arba paslėpti įvestą slaptažodį.';
$string['auth_loginrecaptcha'] = 'Įjungti reCAPTCHA prisijungimui';
$string['auth_multiplehosts'] = 'Daugelis pagrindinių kompiuterių ARBA adresų gali būti nurodyti (pvz., host1.com;host2.com;host3.com) ar (pvz., xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'Autentifikavimo metodas {$a} nėra sukonfigūruotas.';
$string['auth_outofnewemailupdateattempts'] = 'Jūs išnaudojote visus bandymus atnaujinti savo el. pašto adresą. Jūsų atnaujinimo užklausa atšaukta.';
$string['auth_passwordisexpired'] = 'Jūsų slaptažodis nebegalioja. Prašome jį pakeisti dabar.';
$string['auth_passwordwillexpire'] = 'Jūsų slaptažodis nebegalios po {$a} dienų. Ar norite dabar pakeisti savo slaptažodį?';
$string['auth_remove_delete'] = 'Visiškai panaikinti vidinę';
$string['auth_remove_keep'] = 'Išlaikyti vidinę';
$string['auth_remove_suspend'] = 'Laikinai sustabdyti vidinę';
$string['auth_remove_user'] = 'Nurodyti, ką daryti su vidine naudotojo paskyra masinio sinchronizavimo metu, kai naudotojas buvo pašalintas iš išorinio šaltinio. Tik laikinai sustabdyti naudotojai automatiškai atkuriami, jei jie vėl pasirodo išoriniame šaltinyje.';
$string['auth_remove_user_key'] = 'Pašalintas išorinis naudotojas';
$string['auth_sync_script'] = 'Naudotojo paskyros sinchronizavimas';
$string['auth_sync_suspended'] = 'Jei įjungta, sustabdytas atributas bus naudojamas vietinės naudotojo paskyros sustabdymo būsenai atnaujinti.';
$string['auth_sync_suspended_key'] = 'Sinchronizuoti prisijungus naudotojo sustabdymo būseną';
$string['auth_updatelocal'] = 'Atnaujinti prisijungus';
$string['auth_updatelocal_expl'] = '<p><b>Atnaujinti vietinį:</b> jei įjungta, laukas bus atnaujintas (iš išorinio autentifikavimo) kiekvieną kartą, kai naudotojas prisijungs arba kai naudotojas sinchronizuojamas. Laukai, nustatyti vietiniam atnaujinimui, turėtų būti užrakinti.</p>';
$string['auth_updatelocalfield'] = 'Atnaujinti prisijungus ({$a})';
$string['auth_updateremote'] = 'Atnaujinti neprisijungus';
$string['auth_updateremote_expl'] = '<p><b>Atnaujinti neprisijungus:</b> jei įjungta, išorinio autentifikavimo duomenys bus atnaujinti atnaujinus naudotojo įrašą. Laukai turėtų būti atrakinti, kad būtų galima redaguoti.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Pastaba.</b> Norint atnaujinti išorinius LDAP duomenis, reikia nustatyti „binddn“ ir „bindpw“ – visiems susietojo naudotojo, turinčio redagavimo teises, įrašams. Šiuo metu atributai su keliomis reikšmėmis nepalaikomi, todėl naujinant bus pašalintos papildomos reikšmės. </p>';
$string['auth_updateremotefield'] = 'Atnaujinti neprisijungus ({$a})';
$string['auth_user_create'] = 'Įjungti naudotojų kūrimo funkciją';
$string['auth_user_creation'] = 'Nauji (anoniminiai) naudotojai gali kurti naudotojų paskyras, tvirtinamas el. paštu, išorinio autentifikavimo šaltinyje. Jei įjungsite šią funkciją, nepamirškite sukonfigūruoti moduliui būdingų parinkčių, reikalingų norint kurti naudotoją.';
$string['auth_usernameexists'] = 'Pasirinktas naudotojo vardas jau yra. Pasirinkite kitą vardą.';
$string['auth_usernotexist'] = 'Negalima atnaujinti neegzistuojančio naudotojo: {$a}';
$string['authenticationoptions'] = 'Autentifikavimo parinktys';
$string['authinstructions'] = 'Čia galite pateikti instrukciją naudotojams, kad jie žinotų, kurį naudotojo vardą ir slaptažodį turi naudoti. Čia įvestas tekstas bus rodomas prisijungimo puslapyje. Jei čia nieko neįrašysite, jokia instrukcija nebus spausdinama.';
$string['authloginviaemail'] = 'Leisti prisijungti elektroniniu paštu';
$string['authloginviaemail_desc'] = 'Leisti naudotojams prisijungti naudojant naudotojo vardą ir elektroninio pašto adresą (jei unikalus).';
$string['auto_add_remote_users'] = 'Automatiškai įtraukti nuotolinius naudotojus';
$string['cannotmapfield'] = 'Lauko „{$a->fieldname}“ negalima susieti, nes jo trumpasis pavadinimas „{$a->shortname}“ yra per ilgas. Norėdami leisti jį susieti, turite sumažinti trumpąjį pavadinimą iki {$a->charlimit} simbolių. <a href="{$a->link}">Redaguoti naudotojo profilio laukus</a>';
$string['changepassword'] = 'Slaptažodžio keitimo URL';
$string['changepasswordhelp'] = 'Puslapio URL pamirštam slaptažodžiui atkurti, kuris bus išsiųsta naudotojams el. paštu. Pastaba: šis nustatymas nebus veiksmingas, jei pamiršto slaptažodžio URL nustatytas bendrojo autentifikavimo nustatymuose.';
$string['chooseauthmethod'] = 'Pasirinkti autentifikavimo metodą';
$string['chooseauthmethod_help'] = 'Šis nustatymas nustato autentifikavimo būdą, kuris naudojamas naudotojui prisijungiant. Reikėtų pasirinkti tik įgalintus autentifikavimo įskiepius, kitaip naudotojas nebegalės prisijungti. Norėdami užblokuoti naudotojo prisijungimą, pasirinkite "Neprisijungti".';
$string['createpassword'] = 'Sukurti slaptažodį ir informuoti naudotoją';
$string['createpasswordifneeded'] = 'Jei reikia, kurti slaptažodį ir siųsti el. paštu';
$string['emailchangecancel'] = 'Atšaukti el. pašto pakeitimą';
$string['emailchangepending'] = 'Pakeisti laukiančius. Atverti nuorodą siųsta jums {$a->preference_newemail}.';
$string['emailnowexists'] = 'El. pašto adresas kurį jūs bandėte susieti su savo profiliu buvo susietas su kitu jau prieš tai. Jūsų prašymas atšauktas, bet galite bandyti vėl su kitu adresu.';
$string['emailupdate'] = 'El. pašto adreso atnaujinimas';
$string['emailupdatemessage'] = 'Gerb. {$a->fullname},

Jūs paprašėte pakeisti el. pašto adresą jūsų naudotojo paskyrai puslapyje {$a->site}. Norėdami patvirtinti šį pakeitimą, eikite šiuo interneto adresu:

{$a->url}
Patvirtinimo nuoroda nustos galioti po <b>10 minučių</b>.

{$a->supportemail}';
$string['emailupdatesuccess'] = 'Naudotojo <em>{$a->fullname}</em> el. pašto adresas buvo sėkmingai atnaujintas į  <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'El. pašto adreso atnaujinimo patvirtinimas {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'Slaptažodyje gali būti daugiausia {$a} iš eilės einantys vienodi simboliai.';
$string['errorminpassworddigits'] = 'Slaptažodyje turi būti bent {$a} skaitmuo (-enys).';
$string['errorminpasswordlength'] = 'Slaptažodį turi sudaryti bent {$a} simbolis (-iai).';
$string['errorminpasswordlower'] = 'Slaptažodyje turi būti bent {$a} mažoji (-osios) raidė (-s).';
$string['errorminpasswordnonalphanum'] = 'Slaptažodyje turi būti bent {$a} specialusis (-ieji) simbolis (-iai), pvz., *, - arba #.';
$string['errorminpasswordupper'] = 'Slaptažodyje turi būti bent {$a} didžioji (-iosios) raidė (-s).';
$string['errorpasswordreused'] = 'Šis slaptažodis buvo naudojamas anksčiau, ir neleidžiama naudoti pakartotinai';
$string['errorpasswordupdate'] = 'Klaida atnaujinant slaptažodį, slaptažodis nepakeistas';
$string['eventuserloggedin'] = 'Naudotojas prisijungęs';
$string['eventuserloggedinas'] = 'Naudotojas prisijungęs kaip kitas naudotojas';
$string['eventuserloginfailed'] = 'Naudotojo prisijungimas nepavyko';
$string['forcechangepassword'] = 'Reikalauti pasikeisti slaptažodį';
$string['forcechangepassword_help'] = 'Reikalauti pasikeisti slaptažodį naudotojams kitą kartą prisijungus prie „Moodle“.';
$string['forcechangepasswordfirst_help'] = 'Reikalauti pasikeisti slaptažodį naudotojams pirmą kartą prisijungus prie „Moodle“.';
$string['forgottenpassword'] = 'Jei čia įvesite URL, jis šioje svetainėje bus naudojamas kaip pamiršto slaptažodžio atkūrimo puslapis. Tai skirta svetainėms, kuriose visi slaptažodžiai tvarkomi už „Moodle“ sistemos ribų. Palikite lauką tuščią norėdami naudoti numatytąją slaptažodžio atkūrimo procedūrą.';
$string['forgottenpasswordurl'] = 'Pamiršto slaptažodžio URL';
$string['getrecaptchaapi'] = 'Norėdami naudoti „reCAPTCHA“, turite gauti API raktą iš <a href=\'https://www.google.com/recaptcha/admin\'> https://www.google.com/recaptcha/admin </a>';
$string['guestloginbutton'] = 'Svečio prisijungimo mygtukas';
$string['incorrectpleasetryagain'] = 'Neteisinga. Bandykite dar kartą.';
$string['infilefield'] = 'Būtinas laukas faile';
$string['informminpassworddigits'] = 'bent {$a} skaitmuo (-enys)';
$string['informminpasswordlength'] = 'bent {$a} simbolis (-iai)';
$string['informminpasswordlower'] = 'bent {$a} mažoji (-osios) raidė (-s)';
$string['informminpasswordnonalphanum'] = 'bent {$a} specialusis (-ieji) simbolis (-iai), pvz., *, - arba #';
$string['informminpasswordreuselimit'] = 'Slaptažodžiai gali būti pakartotinai naudojami po {$a} pakeitimų';
$string['informminpasswordupper'] = 'bent {$a} didžioji (-iosios) raidė (-s)';
$string['informpasswordpolicy'] = 'Slaptažodyje turi būti {$a}';
$string['instructions'] = 'Instrukcijos';
$string['internal'] = 'Vidinis';
$string['limitconcurrentlogins'] = 'Apriboti sutampančius prisijungimus';
$string['limitconcurrentlogins_desc'] = 'Jei įjungta, kiekvienam naudotojui yra apribojami sutampantys naršyklės prisijungimų  skaičius. Seniausia sesija nutraukiama pasiekus limitą, tačiau atkreipkite dėmesį, kad naudotojai gali prarasti neišsaugotą darbą. Šis nustatymas nėra suderinamas su vieno prisijungimo (SSO) autentifikavimo papildiniu.';
$string['locked'] = 'Užrakinta';
$string['md5'] = 'MD5 maiša';
$string['nopasswordchange'] = 'Slaptažodžio pakeisti negalima';
$string['nopasswordchangeforced'] = 'Negalite tęsti nepakeitę slaptažodžio, tačiau nėra slaptažodžio keitimo puslapio. Susisiekite su „Moodle“ administratoriumi.';
$string['noprofileedit'] = 'Profilio redaguoti negalima';
$string['ntlmsso_attempting'] = 'Vienkartinis įėjimas per NTLM – bandoma...';
$string['ntlmsso_failed'] = 'Automatiškai prisijungti nepavyko, bandykite jungtis per įprastą prisijungimo puslapį';
$string['ntlmsso_isdisabled'] = 'NTLM SSO yra išjungta.';
$string['passwordhandling'] = 'Slaptažodžio lauko tvarkymas';
$string['plaintext'] = 'Paprastasis tekstas';
$string['pluginnotenabled'] = 'Autentifikavimo papildinys {$a} neįjungtas.';
$string['pluginnotinstalled'] = 'Autentifikavimo papildinys {$a} neįdiegtas.';
$string['potentialidps'] = 'Prisijungti su išorine paskyra:';
$string['privacy:metadata:userpref:createpassword'] = 'Nurodo, kad naudotojui turi būti sukurtas slaptažodis';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Nurodo, ar naudotojas turėtų pakeisti slaptažodį prisijungęs';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Kiek kartų naudotojui nepavyko prisijungti';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Kiek kartų naudotojui nepavyko prisijungti nuo paskutinio sėkmingo prisijungimo';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Data, kai buvo įrašytas paskutinis nepavykęs prisijungimo bandymas';
$string['privacy:metadata:userpref:loginlockout'] = 'Ar naudotojo paskyra užrakinta dėl nepavykusių bandymų prisijungti, ir data, kada paskyra buvo užrakinta';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Nurodo, kad naudotojo paskyra niekada neturėtų būti užblokuota';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Kai užrakinta, paslaptis, kurią naudotojas turi naudoti, norėdamas atrakinti savo paskyrą';
$string['recaptcha'] = '„reCAPTCHA"';
$string['recaptcha_help'] = 'CAPTCHA skirta užkirsti kelią automatizuotų programų piktnaudžiavimui. Vadovaukitės instrukcijomis, kad patvirtintumėte, jog esate asmuo. Tai gali būti langelis, kurį reikia pažymėti, simboliai, pateikti paveikslėlyje, kurį turite įvesti, arba vaizdų rinkinys, iš kurio galima pasirinkti.

Jei nesate tikri, kokie yra vaizdai, galite pabandyti gauti kitą CAPTCHA arba garso CAPTCHA.';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'Saugumo klausimas';
$string['selfregistration'] = 'Registravimasis';
$string['selfregistration_help'] = 'Jei pasirinktas autentifikavimo papildinys, pvz., registravimasis naudojant el. paštą, tada potencialūs naudotojai gali registruotis ir kurti savo paskyras. Tada pašto šiukšlintojams atsiranda galimybė kurti paskyras, kad galėtų forumo skelbimus, tinklaraščio įrašus ir pan. naudoti pašto šiukšlėms. Norint išvengti šios rizikos, registravimasis turėtų būti išjungtas arba apribotas naudojant parametrą <em>Leidžiami el. pašto domenai</em>.';
$string['settingmigrationmismatch'] = 'Nustatyta nesuderinamumo reikšmė taisant nustatymuose papildinio pavadinimus! Autentifikavimo papildinio \'{$a->plugin}\' nustatymas \'{$a->setting}\' sukonfigūruotas \'{$a->legacy}\'  pagal senąjį pavadinimą ir {$a->current}\' pagal dabartinį pavadinimą. Pastaroji reikšmė buvo nustatyta kaip galiojanti, bet turėtumėte patikrinti ir patvirtinti, kad to tikimasi.';
$string['sha1'] = 'SHA-1 maiša';
$string['showguestlogin'] = 'Prisijungimo puslapyje galite slėpti arba rodyti svečio prisijungimo mygtuką.';
$string['showloginform'] = 'Rodyti rankinio prisijungimo formą';
$string['stdchangepassword'] = 'Naudoti standartinį slaptažodžio keitimo puslapį';
$string['stdchangepassword_expl'] = 'Jei išorinė autentifikavimo sistema leidžia keisti slaptažodį per „Moodle“, nustatykite Taip. Šis parametras pakeičia parametrą Slaptažodžio keitimo URL.';
$string['stdchangepassword_explldap'] = 'PASTABA. Rekomenduojame naudoti LDAP per SSL šifruotą tunelį (ldaps://), jei LDAP serveris yra nuotolinis.';
$string['suspended'] = 'Sulaikyta paskyra';
$string['suspended_help'] = 'Sulaikytos naudotojų paskyros negali prisijungti arba naudotis interneto paslaugomis, ir visi išeinantys pranešimai yra išmetami.';
$string['testsettings'] = 'Bandymo nustatymai';
$string['testsettingsheading'] = 'Bandymo autentifikavimo nustatymai - {$a}';
$string['unlocked'] = 'Atrakinta';
$string['unlockedifempty'] = 'Atrakinta, jei tuščia';
$string['update_never'] = 'Niekada';
$string['update_oncreate'] = 'Kuriant';
$string['update_onlogin'] = 'Kiekvieną kartą jungiantis';
$string['update_onupdate'] = 'Naujinant';
$string['user_activatenotsupportusertype'] = 'autentifikavimas: ldap user_activate() nepalaiko pasirinkto naudotojo tipo: {$a}';
$string['user_disablenotsupportusertype'] = 'autentifikavimas: ldap user_disable() nepalaiko pasirinkto naudotojo tipo (kol kas...)';
$string['username'] = 'Naudotojo vardas';
$string['username_help'] = 'Atminkite, kad kai kurie autentifikavimo papildiniai neleis pakeisti naudotojo vardo.';
