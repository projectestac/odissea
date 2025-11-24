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
 * Strings for component 'webservice', language 'lt', version '4.5'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Prieigos valdymo išimtis';
$string['actwebserviceshhdr'] = 'Aktyvūs žiniatinklio tarnybos protokolai';
$string['addaservice'] = 'Įtraukti tarnybą';
$string['addcapabilitytousers'] = 'Tikrinti naudotojų galimybes';
$string['addcapabilitytousersdescription'] = 'Naudotojai turi dvi galimybes – webservice:createtoken ir naudojamus protokolus atitinkanti galimybė, pvz., webservice/rest:use, webservice/soap:use. Norėdami jas pasiekti, sukurkite žiniatinklio tarnybų vaidmenį su leidžiamomis atitinkamomis galimybėmis ir priskirkite jį žiniatinklio tarnybos naudotojui kaip sistemos vaidmenį.';
$string['addexternalservice'] = 'Pridėti išorinę paslaugą';
$string['addfunction'] = 'Įtraukti funkciją';
$string['addfunctionhelp'] = 'Pasirinkite į tarnybą įtrauktiną funkciją.';
$string['addfunctions'] = 'Įtraukti funkcijas';
$string['addfunctionsdescription'] = 'Pasirinkite reikiamas naujai sukurtos tarnybos funkcijas.';
$string['addrequiredcapability'] = 'Priskirti reikiamą galimybę / panaikinti jos priskyrimą';
$string['addservice'] = 'Įtraukti naują tarnyba: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Įtraukti funkcijas į tarnybą {$a}';
$string['allusers'] = 'Visi naudotojai';
$string['apiexplorer'] = 'API naršyklė';
$string['apiexplorernotavalaible'] = 'API naršyklė dar neprieinama.';
$string['arguments'] = 'Argumentai';
$string['authmethod'] = 'Autentifikavimo metodas';
$string['callablefromajax'] = 'Kviečiama iš AJAX';
$string['cannotcreatetoken'] = 'Nėra leidimo sukurti voratinklio paslaugos atpažinimo ženklą paslaugai {$a}.';
$string['cannotgetcoursecontents'] = 'Nepavyko gauti kurso turinio';
$string['checkusercapability'] = 'Tikrinti naudotojo galimybę';
$string['checkusercapabilitydescription'] = 'Naudotojai privalo turėti atitinkamas galimybes, atsižvelgiant į naudojamus protokolus, pvz., webservice/rest:use, webservice/soap:use. Norėdami jas pasiekti, sukurkite žiniatinklio tarnybų vaidmenį su leidžiamomis atitinkamomis galimybėmis ir priskirkite jį žiniatinklio tarnybos naudotojui kaip sistemos vaidmenį.';
$string['configwebserviceplugins'] = 'Dėl saugos priežasčių turi būti įjungti tik tie protokolai, kurie naudojami.';
$string['context'] = 'Kontekstas';
$string['createservicedescription'] = 'Tarnyba yra žiniatinklio tarnybos funkcijų rinkinys. Leisite naudotojui pasiekti naują tarnybą. <strong>Tarnybos įtraukimo</strong> puslapyje pažymėkite parinktis Įjungti ir Įgaliotieji naudotojai. Pasirinkite Nėra būtinos galimybės.';
$string['createserviceforusersdescription'] = 'Tarnyba yra žiniatinklio tarnybos funkcijų rinkinys. Leisite naudotojams pasiekti naują tarnybą. <strong>Tarnybos įtraukimo</strong> puslapyje pažymėkite parinktį Įjungti ir panaikinkite parinkties Įgaliotieji naudotojai žymėjimą. Pasirinkite Nėra būtinos galimybės.';
$string['createtoken'] = 'Kurti atpažinimo ženklą';
$string['createtokenforuser'] = 'Kurti naudotojo atpažinimo ženklą';
$string['createtokenforuserdescription'] = 'Sukurkite žiniatinklio tarnybos naudotojo atpažinimo ženklą.';
$string['createuser'] = 'Sukukite konkretų naudotoją';
$string['createuserdescription'] = '„Moodle“ valdančiai sistemai nurodyti būtinas žiniatinklio tarnybų naudotojas.';
$string['criteriaerror'] = 'Trūksta teisių, ieškoti pagal kriterijus.';
$string['default'] = '{$a} numatytosios reikšmės';
$string['deleteaservice'] = 'Naikinti tarnybą';
$string['deleteservice'] = 'Naikinti tarnybą: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Panaikinus tarnybą, taip pat bus panaikinti su šia tarnyba susiję atpažinimo ženklai. Ar tikrai norite naikinti išorinę tarnybą {$a}?';
$string['deletetoken'] = 'Ištrinti prieigos raktą';
$string['deletetokenconfirm'] = 'Ar tikrai norite naikinti šį žiniatinklio tarnybos <strong>{$a->service}</strong> atpažinimo ženklą, skirtą <strong>{$a->user}</strong>?';
$string['deprecated'] = 'Nebenaudojama';
$string['disabledwarning'] = 'Visi žiniatinklio tarnybų protokolai yra išjungti. Parametrą Įjungti žiniatinklio tarnybas galima rasti dalyje Išplėstinės funkcijos.';
$string['doc'] = 'Dokumentacija';
$string['docaccessrefused'] = 'Negalite peržiūrėti šio atpažinimo ženklo dokumentacijos';
$string['downloadfiles'] = 'Galima parsisiųsti failus';
$string['downloadfiles_help'] = 'Jei įjungtas, bet kuris naudotojas gali parsisiųsti failus su savo saugos raktu. Žinoma, jie yra apriboti failams kuriuos jie gali siųstis toje svetainėje.';
$string['editaservice'] = 'Redaguoti tarnybą';
$string['editexternalservice'] = 'Redaguoti išorinę paslaugą';
$string['editservice'] = 'Redaguoti tarnybą: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Įjungta';
$string['enabledocumentation'] = 'Įjungti programų kūrėjų dokumentaciją';
$string['enabledocumentationdescription'] = 'Prieinama išsami įjungtų protokolų žiniatinklio tarnybų informacija.';
$string['enableprotocols'] = 'Įjungti protokolus';
$string['enableprotocolsdescription'] = 'Turi būti įjungtas bent vienas protokolas. Dėl saugos priežasčių reikia įjungti tik tuos protokolus, kurie bus naudojami.';
$string['enablews'] = 'Įjungti žiniatinklio tarnybas';
$string['enablewsdescription'] = 'Žiniatinklio tarnybas reikia įjungti dalyje Išplėstinės funkcijos.';
$string['entertoken'] = 'Įveskite saugos raktą / atpažinimo ženklą:';
$string['error'] = 'Klaida: {$a}';
$string['errorcatcontextnotvalid'] = 'Kategorijos kontekste (category id:{$a->catid}) funkcijų vykdyti negalite. Konteksto klaidos pranešimas: {$a->message}';
$string['errorcodes'] = 'Klaidos pranešimas';
$string['errorcoursecontextnotvalid'] = 'Kursų kontekste (course id:{$a->courseid}) funkcijų vykdyti negalite. Konteksto klaidos pranešimas: {$a->message}';
$string['errorinvalidparam'] = 'Parametras {$a} yra netinkamas.';
$string['errornotemptydefaultparamarray'] = 'Žiniatinklio tarnybos aprašo parametras, kurio pavadinimas {$a}, yra viena arba kelios struktūros.  Numatytoji reikšmė gali būti tik tuščias masyvas. Patikrinkite žiniatinklio tarnybos aprašą.';
$string['erroroptionalparamarray'] = 'Interneto paslaugos aprašo parametras, pavadintas „{$a}“, yra viena arba kelios struktūros. Jo negalima nustatyti kaip VALUE_OPTIONAL. Patikrinkite interneto paslaugos aprašą.';
$string['eventwebservicefunctioncalled'] = 'Iškviesta interneto paslaugų funkcija';
$string['eventwebserviceloginfailed'] = 'Nepavyko prisijungti prie interneto paslaugos';
$string['eventwebserviceservicecreated'] = 'Interneto paslauga sukurta';
$string['eventwebserviceservicedeleted'] = 'Interneto paslauga ištrinta';
$string['eventwebserviceserviceupdated'] = 'Interneto paslauga atnaujinta';
$string['eventwebserviceserviceuseradded'] = 'Pridėtas interneto paslaugos naudotojas';
$string['eventwebserviceserviceuserremoved'] = 'Interneto paslaugos naudotojas pašalintas';
$string['eventwebservicetokencreated'] = 'Sukurtas žiniatinklio paslaugos prieigos raktas';
$string['eventwebservicetokensent'] = 'Žiniatinklio paslaugos prieigos raktas išsiųstas';
$string['execute'] = 'Vykdyti';
$string['executewarnign'] = 'ĮSPĖJIMAS! Jei paspausite vykdyti, duomenų bazė bus modifikuota ir automatiškai nebus galima sugrąžinti pakeitimų.';
$string['externalservice'] = 'Išorinė tarnyba';
$string['externalservicefunctions'] = 'Išorinės tarnybos funkcijos';
$string['externalservices'] = 'Išorinės tarnybos';
$string['externalserviceusers'] = 'Išorinės tarnybos naudotojai';
$string['failedtolog'] = 'Nepavyko prisijungti';
$string['filenameexist'] = 'Toks failo pavadinimas jau yra: {$a}';
$string['forbiddenwsuser'] = 'Nepavyko sukurti atpažinimo ženklo nepatvirtinta, pašalintam, sulaikytam ar svečio naudotojui';
$string['function'] = 'Funkcija';
$string['functions'] = 'Funkcijos';
$string['generalstructure'] = 'Bendroji struktūra';
$string['information'] = 'Informacija';
$string['installexistingserviceshortnameerror'] = 'Interneto paslauga su trumpiniu "{$a}" jau yra. Negalima įrašyti ar atnaujinti kitos interneto paslaugos su šiuo trumpiniu.';
$string['installserviceshortnameerror'] = 'Kodavimo klaida: paslaugos "{$a}" trumpajame pavadinime gali būti tik raidiniai ir skaitiniai simboliai (raidės ir skaičiai), pabraukimas (_), brūkšnys (-) arba taškas (.)';
$string['invalidextparam'] = 'Neteisingas išorinis API parametras: {$a}';
$string['invalidextresponse'] = 'Neteisingas išorinis API atsakas: {$a}';
$string['invalidiptoken'] = 'Netinkamas atpažinimo ženklas – jūsų IP nepalaikomas';
$string['invalidtimedtoken'] = 'Netinkamas atpažinimo ženklas – baigėsi jo galiojimo laikas';
$string['invalidtoken'] = 'Netinkamas atpažinimo ženklas – nerastas';
$string['iprestriction'] = 'IP apribojimas';
$string['iprestriction_help'] = 'Naudotojas turės iškviesti žiniatinklio tarnybą naudodamas išvardytus IP.';
$string['key'] = 'Raktas';
$string['keyshelp'] = 'Raktai naudojami „Moodle“ paskyrai pasiekti iš išorinių taikomųjų programų.';
$string['loginrequired'] = 'Skirta tik prisijungusiems naudotojams';
$string['manageprotocols'] = 'Tvarkyti protokolus';
$string['managetokens'] = 'Tvarkyti atpažinimo ženklus';
$string['missingcaps'] = 'Trūkstamos galimybės';
$string['missingcaps_help'] = 'Paslaugos deklaruotų galimybių, kurių naudotojas neturi, sąrašas. Kai kurios paslaugos funkcijos gali būti nepasiekiamos be šių galimybių.';
$string['missingpassword'] = 'Nėra slaptažodžio';
$string['missingrequiredcapability'] = 'Sugebėjimas {$a} yra reikalingas.';
$string['missingusername'] = 'Nėra naudotojo vardo';
$string['missingversionfile'] = 'Kodavimo klaida: version.php failas nerastas komponentui {$a}';
$string['nameexists'] = 'Šis pavadinimas jau yra naudojamas kito serviso';
$string['nocapabilitytouseparameter'] = 'Naudotojas neturi reikiamų galimybių naudoti parametrą {$a}';
$string['nofunctions'] = 'Šioje tarnyboje nėra funkcijų.';
$string['norequiredcapability'] = 'Nėra būtinos galimybės';
$string['notoken'] = 'Atpažinimo ženklų sąrašas tuščias.';
$string['onesystemcontrolling'] = 'Viena „Moodle“ valdanti sistema su atpažinimo ženklu';
$string['onesystemcontrollingdescription'] = 'Toliau pateikti veiksmai padės nustatyti sistemos „Moodle“ žiniatinklio tarnybą „Moodle“ valdyti. Šie veiksmai taip pat padės nustatyti rekomenduojamą atpažinimo ženklų (saugos raktų) autentifikavimo metodą.';
$string['onlyseecreatedtokens'] = 'Galite peržiūrėti tik tuos prieigos raktus, kuriuos sukūrėte.';
$string['operation'] = 'Operacija';
$string['optional'] = 'Pasirinktinai';
$string['passwordisexpired'] = 'Slaptažodžio galiojimo laikas pasibaigęs.';
$string['phpparam'] = 'XML-RPC (PHP struktūra)';
$string['phpresponse'] = 'XML-RPC (PHP struktūra)';
$string['postrestparam'] = 'REST PHP kodas (POST užklausa)';
$string['potusers'] = 'Neįgaliotieji naudotojai';
$string['potusersmatching'] = 'Atitinkantys neįgaliotieji naudotojai';
$string['print'] = 'Spausdinti viską';
$string['privacy:metadata'] = 'WebService API nesaugo jokių duomenų';
$string['protocol'] = 'Protokolas';
$string['removefunction'] = 'Šalinti';
$string['removefunctionconfirm'] = 'Ar tikrai norite iš tarnybos {$a->service} šalinti funkciją {$a->function}?';
$string['requireauthentication'] = 'Šiam metodui būtinas autentifikavimas su xxx teise.';
$string['required'] = 'Būtina';
$string['requiredcapability'] = 'Būtina galimybė';
$string['requiredcapability_help'] = 'Jei nustatyta, tarnybą gali pasiekti tik naudotojai, turintys būtiną galimybę.';
$string['requiredcaps'] = 'Būtinos galimybės';
$string['resettokencomplete'] = 'Pasirinktas prieigos raktas buvo nustatytas iš naujo';
$string['resettokenconfirm'] = 'Ar tikrai norite iš naujo nustatyti šį <strong>{$a->user}</strong> žiniatinklio tarnybos raktą, skirtą <strong>{$a->service}</strong>?';
$string['resettokenconfirmsimple'] = 'Ar tikrai norite iš naujo nustatyti šį raktą? Visi įrašyti saitai, kuriuose yra senas raktas, nebeveiks.';
$string['response'] = 'Atsakas';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Atkurtoms paskyrom reikia iš naujo nustatyti slaptažodį prieš gaunant atpažinimo ženklą.';
$string['restparam'] = 'REST (POST parametrai)';
$string['restrictedusers'] = 'Tik įgaliotieji naudotojai';
$string['restrictedusers_help'] = 'Šis parametras nustato, ar visi naudotojai, turintys teisę kurti žiniatinklio tarnybų atpažinimo ženklus, gali generuoti šios tarnybos atpažinimo ženklą savo saugos raktų puslapyje, ar tai daryti gali tik įgaliotieji naudotojai.';
$string['securitykey'] = 'Saugos raktas (atpažinimo ženklas)';
$string['securitykeys'] = 'Saugos raktai';
$string['selectauthorisedusers'] = 'Pasirinkti įgaliotuosius naudotojus';
$string['selectedcapability'] = 'Pasirinkta';
$string['selectedcapabilitydoesntexit'] = 'Dabar nustatytos būtinos galimybės ({$a}) nebėra. Pakeiskite ją ir įrašykite keitimus.';
$string['selectservice'] = 'Pasirinkite tarnybą';
$string['selectspecificuser'] = 'Pasirinkite konkretų naudotoją';
$string['selectspecificuserdescription'] = 'Įtraukti žiniatinklio tarnybų naudotoją kaip įgaliotąjį naudotoją.';
$string['service'] = 'Tarnyba';
$string['servicehelpexplanation'] = 'Tarnyba yra funkcijų rinkinys. Tarnybą gali pasiekti visi naudotojai arba tik nurodyti naudotojai.';
$string['servicename'] = 'Tarnybos pavadinimas';
$string['servicenotavailable'] = 'Žiniatinklio paslauga negalima. (Jos nėra arba ji gali būti išjungta.)';
$string['servicerequireslogin'] = 'Žiniatinklio paslauga negalima. (Seansas buvo atjungtas arba jo galiojimo laikas baigėsi.)';
$string['servicesbuiltin'] = 'Įtaisytosios tarnybos';
$string['servicescustom'] = 'Pasirinktinės tarnybos';
$string['serviceusers'] = 'Įgaliotieji naudotojai';
$string['serviceusersettings'] = 'Naudotojų parametrai';
$string['serviceusersmatching'] = 'Atitinkantys įgaliotieji naudotojai';
$string['serviceuserssettings'] = 'Keisti įgaliotųjų naudotojų parametrus';
$string['shortnametaken'] = 'Trumpas pavadinimas jau yra naudojamas kitam servisui ({$})';
$string['simpleauthlog'] = 'Paprasto autentifikavimo prisijungimas';
$string['step'] = 'Veiksmas';
$string['supplyinfo'] = 'Daugiau informacijos';
$string['testauserwithtestclientdescription'] = 'Imituokite išorinę prieigą prie paslaugos naudodami interneto paslaugos bandomąjį klientą. Prieš tai darydami prisijunkite kaip naudotojas su Moodle/webservice:createtoken funkcija ir gaukite saugos raktą (prieigos raktą) per naudotojo nuostatų puslapį. Šį prieigos raktą naudosite bandomajame kliente. Bandomajame kliente taip pat pasirinkite įgalintą protokolą su prieigos rakto autentifikavimu. <strong>ĮSPĖJIMAS: funkcijos, kurias bandote, BUS ĮVYKDYTOS šiam naudotojui, todėl būkite atsargūs, ką pasirinksite išbandyti!</strong>';
$string['testclient'] = 'Žiniatinklio paslaugų tikrinimo klientas';
$string['testclientdescription'] = '* Žiniatinklio paslaugų bandomasis klientas <strong>vykdo</strong> <strong>REAL</strong> funkcijas. Netikrinkite funkcijų, kurių nežinote. <br/>* Visos esamos žiniatinklio paslaugų funkcijos dar neįdiegtos į bandomąjį klientą. <br/>* Norėdami patikrinti, ar naudotojas negali pasiekti kai kurių funkcijų, galite išbandyti kai kurias funkcijas, kurių neleidote.<br/>* Norėdami matyti aiškesnius klaidų pranešimus, nustatykite derinimo funkciją į <strong>{$a- >mode}</strong> į {$a->atag}.';
$string['testwithtestclient'] = 'Tikrinti tarnybą';
$string['testwithtestclientdescription'] = 'Naudodami žiniatinklio tarnybos tikrinimo klientą, modeliuokite išorinę prieigą prie tarnybos.. Naudokite įjungtą protokolą su atpažinimo ženklų autentifikavimu. <strong>ĮSPĖJIMAS: tikrinamos funkcijos BUS VYKDOMOS naudojant šį naudotoją, todėl būkite atidūs pasirinkdami, ką tikrinsite!!</strong>';
$string['token'] = 'Atpažinimo ženklas';
$string['tokenauthlog'] = 'Atpažinimo ženklų autentifikavimas';
$string['tokencopied'] = 'Tekstas nukopijuotas į iškarpinę.';
$string['tokencreatedbyadmin'] = 'Nustatyti iš naujo gali tik administratorius (*)';
$string['tokencreator'] = 'Kūrėjas';
$string['tokenfilter'] = 'Prieigos raktų filtras';
$string['tokenfilterreset'] = 'Rodyti visus prieigos raktus';
$string['tokenfiltersubmit'] = 'Rodyti tik atitinkamus prieigos raktus';
$string['tokenname'] = 'Pavadinimas';
$string['tokennamehint'] = 'Jei neįvesite pavadinimo, bus naudojamas atsitiktinis pavadinimas.';
$string['tokennameprefix'] = 'Žiniatinklio paslauga – {$a}';
$string['tokennewmessage'] = 'Dabar nukopijuokite raktą. Išėjus iš šio puslapio jis daugiau nebus rodomas.';
$string['unknownoptionkey'] = 'Nežinomas nustatymo raktas ({$a})';
$string['unnamedstringparam'] = 'Eilutės parametras yra be pavadinimo.';
$string['updateusersettings'] = 'Atnaujinti';
$string['uploadfiles'] = 'Galima įkelti failus';
$string['uploadfiles_help'] = 'Jei įjungta, bet kuris naudotojas gali įkelti failus su savo saugos raktais į savo asmeninių failų sritį arba failo juodraščio sritį. Taikomos bet kokios naudotojo failų kvotos.';
$string['userasclients'] = 'Naudotojai kaip klientai su atpažinimo ženklais';
$string['userasclientsdescription'] = 'Šie veiksmai padės nustatyti Moodle interneto paslaugą naudotojams kaip klientams. Šie veiksmai taip pat padeda nustatyti rekomenduojamą prieigos raktų (saugos raktų) autentifikavimo metodą. Tokiu atveju naudotojas sugeneruos prieigos raktą iš saugos raktų puslapio per savo nuostatų puslapį.';
$string['usermissingcaps'] = 'Trūkstamos galimybės: {$a}';
$string['usernameorid'] = 'Naudotojo vardas/ Naudotojo id';
$string['usernameorid_help'] = 'Įveskite naudotojo vardą arba naudotojo id.';
$string['usernotallowed'] = 'Šioje tarnyboje šis naudotojas neleidžiamas. Pirmiausia {$a} leidžiamų naudotojų administravimo puslapyje turite nustatyti naudotoją kaip leidžiamą.';
$string['userservices'] = 'Naudotojo paslaugos: {$a}';
$string['usersettingssaved'] = 'Naudotojų parametrai įrašyti';
$string['validuntil'] = 'Galioja iki';
$string['validuntil_empty'] = 'Šis raktas neturi galiojimo pabaigos datos.';
$string['validuntil_help'] = 'Jei nustatyta, po šios datos šiam naudotojui tarnyba bus išjungta.';
$string['webservice'] = 'Žiniatinklio tarnyba';
$string['webservices'] = 'Žiniatinklio tarnybos';
$string['webservicesoverview'] = 'Apžvalga';
$string['webservicetokens'] = 'Žiniatinklio tarnybų atpažinimo ženklai';
$string['wrongusernamepassword'] = 'Neteisingas naudotojo vardas arba slaptažodis';
$string['wsaccessuserdeleted'] = 'Atmestas voratinklio paslaugos priėjimas pašalintam naudotojui : {$a}';
$string['wsaccessuserexpired'] = 'Atmestas voratinklio paslaugos priėjimas su pasibaigusio galiojimo slaptažodžiu naudotojui: {$a}';
$string['wsaccessusernologin'] = 'Atmestas voratinklio paslaugos priėjimas dar neužsiregistravusiam naudotojui: {$a}';
$string['wsaccessusersuspended'] = 'Atmestas voratinklio paslaugos priėjimas sustabdytam naudotojui: {$a}';
$string['wsaccessuserunconfirmed'] = 'Atmestas voratinklio paslaugos priėjimas nepatvirtintam naudotojui: {$a}';
$string['wsclientdoc'] = '„Moodle“ žiniatinklio tarnybų kliento dokumentacija';
$string['wsdocapi'] = 'API dokumentacija';
$string['wsdocumentation'] = 'Žiniatinklio tarnybos dokumentacija';
$string['wsdocumentationdisable'] = 'Žiniatinklio tarnybos dokumentacija išjungta.';
$string['wsdocumentationintro'] = 'Jei norite sukurti klientą, patariame perskaityti {$a->doclink}';
$string['wsdocumentationlogin'] = 'arba įveskite savo žiniatinklio tarnybos paslaugos naudotojo vardą ir slaptažodį';
$string['wspassword'] = 'Žiniatinklio tarnybos slaptažodis';
$string['wsusername'] = 'Žiniatinklio tarnybos naudotojo vardas';
