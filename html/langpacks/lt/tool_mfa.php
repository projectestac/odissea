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
 * Strings for component 'tool_mfa', language 'lt', version '4.5'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Pasiektas svoris';
$string['added'] = 'Pridėta';
$string['alltime'] = 'Visą laiką';
$string['areyousure'] = 'Ar tikrai norite pašalinti šį faktorių?';
$string['cancellogin'] = 'Atšaukti prisijungimą';
$string['combination'] = 'Kombinacija';
$string['confirmationreplace'] = 'Iškart po to reikės nustatyti kitą „{$a}“. Prašome įsitikinti, kad esate pasiruošę užbaigti nustatymo procesą.';
$string['confirmationrevoke'] = 'Prisijungdami prie šios svetainės nebegalėsite naudoti "{$a}".';
$string['connector'] = 'IR';
$string['created'] = 'Sukurta';
$string['createdfromip'] = 'Sukurta iš IP';
$string['debugmode:heading'] = 'Derinimo režimas';
$string['devicename'] = 'Įrenginys';
$string['editfactor'] = 'Redaguoti {$a} faktoriaus nustatymus';
$string['email:subject'] = 'Nepavyksta prisijungti prie {$a}';
$string['enablefactor'] = 'Įjungti faktorių';
$string['entercode'] = 'Įvesti kodą';
$string['error:actionnotfound'] = 'Veiksmas „{$a}“ nepalaikomas';
$string['error:couldnotreplace'] = 'Negalima pakeisti šio faktoriaus.';
$string['error:directaccess'] = 'Šis puslapis neturėtų būti pasiekiamas tiesiogiai';
$string['error:factornotenabled'] = 'Kelių veiksnių autentifikavimo faktorius „{$a}“ neįjungtas';
$string['error:factornotfound'] = 'Kelių veiksnių autentifikavimo faktorius „{$a}“ nerastas';
$string['error:isguestuser'] = 'Svečiams čia neleidžiama.';
$string['error:notenoughfactors'] = 'Nepavyksta autentifikuoti';
$string['error:reauth'] = 'Nepavyko patvirtinti jūsų tapatybės pagal svetainės autentifikavimo saugos politiką.<br>Tai gali būti dėl: <br> 1) Veiksmai užrakinti – palaukite kelias minutes ir bandykite dar kartą.
<br> 2) Nepavykę veiksmai – dar kartą patikrinkite kiekvieno etapo informaciją. <br> 3) Veiksmai buvo praleisti – iš naujo įkelkite šį puslapį arba bandykite prisijungti dar kartą.';
$string['error:revoke'] = 'Negalima pašalinti faktoriaus';
$string['error:setupfactor'] = 'Negalima nustatyti faktoriaus';
$string['error:support'] = 'Jei vis dar negalite prisijungti arba manote, kad tai yra klaida, susisiekite el. paštu:';
$string['error:wrongfactorid'] = 'Faktoriaus ID „{$a}“ yra neteisingas';
$string['event:failfactor'] = 'Kelių veiksnių autentifikavimas nepavyko dėl nesėkmingo faktoriaus.';
$string['event:faillockout'] = 'Kelių veiksnių autentifikavimas nepavyko dėl per didelio bandymų skaičiaus.';
$string['event:failnotenoughfactors'] = 'Kelių veiksnių autentifikavimas nepavyko dėl nepakankamo faktorių patenkinimo.';
$string['event:userdeletedfactor'] = 'Faktorius panaikintas';
$string['event:userfailedmfa'] = 'Naudotojui kelių veiksnių autentifikacija nepavyko';
$string['event:userpassedmfa'] = 'Patikrinimas sėkmingai atliktas';
$string['event:userrevokedfactor'] = 'Faktoriaus atšaukimas';
$string['event:usersetupfactor'] = 'Faktoriaus nustatymai';
$string['factor'] = 'Faktorius';
$string['factorreplace'] = 'Faktorius „{$a}“ sėkmingai pakeistas.';
$string['factorreport'] = 'Visos faktoriaus ataskaitos';
$string['factorreset'] = 'Svetainės administratorius iš naujo nustatė jūsų kelių veiksnių autentifikavimo patvirtinimą „{$a->factor}“. Jums gali tekti iš naujo nustatyti šį faktorių. {$a->url}';
$string['factorresetall'] = 'Visi jūsų kelių veiksnių autentifikacijos veiksniai buvo nustatyti iš naujo svetainės administratoriaus. Gali tekti šiuos veiksnius nustatyti iš naujo. {$a}';
$string['factorrevoked'] = '„{$a}“ sėkmingai pašalintas.';
$string['factorsetup'] = '„{$a}“ sėkmingai nustatytas.';
$string['fallback'] = 'Atsarginis faktorius';
$string['fallback_info'] = 'Šis faktorius yra atsarginis, jei nėra sukonfigūruoti jokie kiti faktoriai. Šis faktorius visada bus atmestas.';
$string['guidance'] = 'Kelių veiksnių autentifikavimo naudotojo vadovas';
$string['inputrequired'] = 'Naudotojo įvestis';
$string['ipatcreation'] = 'IP adresas, kai sukurtas faktorius';
$string['lastused'] = 'Paskutinį kartą naudotas';
$string['lastverified'] = 'Paskutinį kartą patvirtinta';
$string['locked'] = '{$a} (Nepasiekiama)';
$string['lockedusersforallfactors'] = 'Užrakinti naudotojai: Visi faktoriai';
$string['lockedusersforfactor'] = 'Užrakinti naudotojai: {$a}';
$string['lockoutnotification'] = 'Jums liko {$a} bandymų.';
$string['managefactor'] = 'Faktoriaus valdymas';
$string['mfa'] = 'Kelių veiksnių autentifikavimas';
$string['mfa:intro'] = 'Padarykite savo paskyrą saugesne, reikalaujant papildomo patikrinimo metodo, kai prisijungiate.';
$string['mfa:mfaaccess'] = 'Sąveika su MFA';
$string['mfareports'] = 'MFA ataskaitos';
$string['mfasettings'] = 'Valdyti kelių veiksnių autentifikavimą';
$string['na'] = 'n/a';
$string['needhelp'] = 'Reikia pagalbos?';
$string['nologinusers'] = 'Neprisijungęs';
$string['nonauthusers'] = 'Laukiama MFA';
$string['overall'] = 'Bendras';
$string['pending'] = 'Laukiama';
$string['performbulk'] = 'Masinis veiksmas';
$string['pluginname'] = 'Kelių veiksnių autentifikavimas (MFA)';
$string['preferences:activefactors'] = 'Aktyvūs faktoriai';
$string['preferences:availablefactors'] = 'Galimi faktoriai';
$string['preferences:header'] = 'Kelių veiksnių autentifikavimo nuostatos';
$string['preferenceslink'] = 'Spustelėkite čia, jei norite pereiti į naudotojo nuostatas.';
$string['privacy:metadata:tool_mfa'] = 'Duomenys su sukonfigūruotais MFA faktoriais.';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP, iš kurio nustatytas faktorius.';
$string['privacy:metadata:tool_mfa:factor'] = 'Faktoriaus tipas';
$string['privacy:metadata:tool_mfa:id'] = 'Įrašo ID';
$string['privacy:metadata:tool_mfa:label'] = 'Faktoriaus žyma, pvz., įrenginys ar el. paštas.';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Laikas, kai naudotojas paskutinį kartą buvo patvirtintas naudojant šį faktorių';
$string['privacy:metadata:tool_mfa:secret'] = 'Bet kokie slapti duomenys, susiję su faktoriumi';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Faktoriaus nustatymo laikas.';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Laiko faktorius paskutinį kartą buvo pakeistas';
$string['privacy:metadata:tool_mfa:userid'] = 'Naudotojo, kuriam priklauso faktorius, ID';
$string['privacy:metadata:tool_mfa_auth'] = 'Paskutinis kartas, kai naudotojo ID buvo užregistruotas sėkmingas kelių veiksnių autentifikavimas.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Paskutinis laikas, kai naudotojas buvo autentifikuotas';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'Naudotojas, su kuriuo susijusi ši laiko žyma.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Laikinos paslaptys, skirtos naudotojo autentifikavimui.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'Faktorius, su kuriuo susijusi ši paslaptis.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'Slaptas apsaugos kodas.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'Sesijos ID, su kuriuo susieta ši paslaptis.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'Naudotojas, su kuriuo susieta ši paslaptis.';
$string['remove'] = 'Pašalinti';
$string['replace'] = 'Pakeisti';
$string['replacefactor'] = 'Pakeisti faktorių';
$string['resetconfirm'] = 'Atstatyti naudotojo faktorių';
$string['resetfactor'] = 'Atstatyti naudotojo autentifikavimo faktorius';
$string['resetfactorconfirm'] = 'Ar tikrai norite iš naujo nustatyti šį {$a} faktorių?';
$string['resetfactorplaceholder'] = 'Naudotojo vardas arba el. pašto adresas';
$string['resetsuccess'] = '„{$a->username}“ naudotojui faktorius „{$a->factor}“ sėkmingai atstatytas.';
$string['resetsuccessbulk'] = 'Faktorius „{$a}\'“ sėkmingai atstatytas nurodytiems naudotojams.';
$string['resetuser'] = 'Naudotojas:';
$string['revoke'] = 'Atšaukti';
$string['revokefactor'] = 'Pašalinti faktorių';
$string['selectfactor'] = 'Pasirinkite faktorių, kurį norite atstatyti:';
$string['selectperiod'] = 'Pasirinkite ataskaitos grįžtamąjį laikotarpį:';
$string['settings:combinations'] = 'Gerų prisijungimo sąlygų santrauka';
$string['settings:debugmode'] = 'Įjungti derinimo režimą';
$string['settings:duration'] = 'Paslapties galiojimo trukmė';
$string['settings:duration_help'] = 'Generuojamų paslapčių galiojimo trukmė.';
$string['settings:enabled'] = 'MFA įskiepis papildinys';
$string['settings:enablefactor'] = 'Įjungti faktorių';
$string['settings:enablefactor_help'] = 'Pažymėkite šį nustatymą, norėdami faktorių leisti naudoti MFA autentifikavimui.';
$string['settings:general'] = 'Bendrieji MFA nustatymai';
$string['settings:guidancecheck'] = 'Naudoti gairių puslapį';
$string['settings:guidancecheck_help'] = 'Įtraukiama nuoroda į gairių puslapį MFA autentifikavimo puslapiuose ir MFA nuostatų puslapyje.';
$string['settings:guidancefiles'] = 'Gairių puslapio failai';
$string['settings:guidancefiles_help'] = 'Čia įtraukite bet kokius failus, kuriuos norite naudoti gairių puslapyje ir įdėkite juos į puslapį redaktoriuje naudodami {{filename}} (išspręstas kelias) arba {{{filename}}} (html nuoroda).';
$string['settings:guidancepage'] = 'Gairių puslapio turinys';
$string['settings:guidancepage_help'] = 'Šis HTML bus rodomas gairių puslapyje. Įveskite failų pavadinimus iš failų srities, norėdami įterpti failą su išspręstu keliu {{filename}} arba kaip HTML nuorodą naudodami {{{filename}}}.';
$string['settings:weight'] = 'Faktoriaus svoris';
$string['setup'] = 'Nustatymai';
$string['setupfactor'] = 'Nustatyti faktorių';
$string['setuprequired'] = 'Naudotojo nustatymai';
$string['state:fail'] = 'Nepavyko';
$string['state:locked'] = 'Užrakinta';
$string['state:neutral'] = 'Neutralus';
$string['state:pass'] = 'Pavyko';
$string['state:unknown'] = 'Nežinomas';
$string['subplugintype_factor'] = 'Faktoriaus tipas';
$string['subplugintype_factor_plural'] = 'Faktorių tipai';
$string['totalusers'] = 'Iš viso naudotojų';
$string['totalweight'] = 'Bendras svoris';
$string['userempty'] = 'Naudotojas laukelis negali būti tuščias.';
$string['userlogs'] = 'Naudotojo žurnalai';
$string['usernotfound'] = 'Nepavyksta rasti naudotojo.';
$string['usersauthedinperiod'] = 'Prisijungęs';
$string['verification'] = '2 etapų patvirtinimas';
$string['verification_desc'] = 'Kad jūsų paskyra būtų saugi, turime patikrinti, ar tai tikrai esate jūs.';
$string['verificationcode'] = 'Patvirtinimo kodas';
$string['verificationcode_help'] = 'Patvirtinimo kodas, kurį pateikia dabartinis autentifikavimo faktorius.';
$string['verifyalt'] = 'Išbandykite kitą patvirtinimo būdą:';
$string['weight'] = 'Svoris';
$string['yesremove'] = 'Taip, pašalinti';
$string['yesreplace'] = 'Taip, pakeisti';
