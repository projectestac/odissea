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
 * Strings for component 'block_xp', language 'eu', version '4.4'.
 *
 * @package     block_xp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ekintzak';
$string['activityname'] = 'Jardueraren izena';
$string['activityname_help'] = 'Jardueraren izenak izan behar duen testua. Maiuskulak eta minuskulak ez dira kontuan hartzen.';
$string['activityoresourceis'] = 'Jarduera edo baliabidea {$a} da';
$string['addacondition'] = 'Gehitu baldintza bat';
$string['addarule'] = 'Gehitu arau bat';
$string['addinstructions'] = 'Gehitu informazio gehiago';
$string['additionalresources'] = 'Baliabide gehigarriak';
$string['addlevel'] = 'Gehitu maila';
$string['addoninstallationerror'] = 'Pluginarekin (block_xp) arazo bat dagoela antzeman dugu, badirudi ez dagoela ondo instalatuta. Kudeatzaile batek instalazioa amaitu beharko luke.';
$string['addonnotactivated'] = 'Gehigarria ez dago gaituta.';
$string['addrulesformhelp'] = 'Azken zutabeak irizpidea betetzen denean irabazten diren esperientzia-puntuak zehazten du.';
$string['admindefaultrulesintro'] = 'Hurrengo arauak lehenetsitako gisa erabiliko dira blokea ikastaro batean gehitzen denean.';
$string['admindefaultsettingsintro'] = 'Azpiko ezarpenak lehenetsitako gisa erabiliko dira blokea ikastaro batean gehitzen denean. Ezarpen batzuk blokeatu daitezke, eta horrela pluginaren instantzia guztiak balio horiek erabiltzera behartuko dira.';
$string['admindefaultvisualsintro'] = 'Hurrengoak lehenetsitako gisa erabiliko dira blokea ikastaro batean gehitzen denean.';
$string['adminnoticeoutofsyncmessage'] = 'Maila gora XP eta Maila gora XP+ arteko bateraezintasun abisua!

Mezu hau jaso duzu Maila Gora XP (block_xp) eta Maila gora XP+ (local_xp) pluginak une honetan "sinkronizatu gabe" daudelako eta elkarrekiko bateraezinak direlako. Arazo hau gertatzen da XP bertsio berriago batera eguneratu den bitartean XP+ eguneratu gabe geratu denean.

Sinkronizazio falta honek funtzionalitate galera, arazoak eta bestelako ezusteko ondorioak izan ditzake. Arazo hau konpontzeko, Maila Gora XP+ eguneratu beharko duzu.

**Garrantzitsua!** Etorkizunean, plugin hauek sinkronizatu gabe badaude, Maila Gora XP+ plugina automatikoki desgaituko da. Hori gertatzea ekiditeko, ziurtatu ezazu ez duzula Maila Gora XP bertsio nagusi berri batera eguneratzen aldi berean Maila Gora XP+ ere eguneratu gabe.

- Maila Gora XP (block_xp) bertsioa: {$a->blockxpversion}
- Maila Gora XP+ (local_xp) bertsioa: {$a->localxpversion}
- Maila Gora XP+ esperotako bertsioa: {$a->localxpversionexpected}

Baliabide gehigarriak:

- [Eguneratze dokumentazioa](https://docs.levelup.plus/xp/docs/upgrade)
- [Bateragarritasun dokumentazioa](https://docs.levelup.plus/xp/docs/requirements-compatibility)

--

Jakinarazpen hau kudeatzaile guztiei bidali zaie. Kudeatzaile jakinarazpen guztiak desgaitzeko, joan Maila Gora XP pluginaren kudeaketa-ezarpenetara.';
$string['adminnoticeoutofsyncsubject'] = 'XP pluginen bateraezintasun abisua!';
$string['adminnotices'] = 'Kudeatzaile jakinarazpenak';
$string['adminnotices_desc'] = 'Gaituz gero, guneko kudeatzaileek bateragarritasunarekin, segurtasunarekin eta Maila Gora XP+ bertsio berriekin lotutako jakinarazpenak jaso ahalko dituzte.';
$string['adminscanearnxp'] = 'Kudeatzaileek puntuak lortu ditzakete';
$string['adminscanearnxp_desc'] = 'Modu lehenetsian, kudeatzaileak ez daude puntuak eskuratu ahal dituzten erabiltzaileen taldean. Honen arrazoia da kudeatzaileek beti _block/xp:earnxp_ baimena daukatela da, eta horrek etengabe edonon puntuak eskuratzeko aukera ematen die. Ezarpen hau erabili dezakezu kudeatzaileek ere puntuak eskuratu ahal izateko.';
$string['allcoursesreset'] = 'Ikastaro guztiak berrabiarazi dira.';
$string['anonymity'] = 'Anonimotasuna';
$string['anonymity_help'] = 'Ezarpen honek partaideek beste erabiltzaileen izena eta irudia ikusi ahalko duten zehazten du.';
$string['apply'] = 'Aplikatu';
$string['awardaxpwhen'] = '<strong>{$a}</strong> puntu irabaziko dira hurrengoa betetzean:';
$string['badgeaward'] = 'Emateko domina';
$string['badgeawarddesc'] = 'Erabiltzaileak maila lortzen duenean eman beharreko domina.';
$string['basepoints'] = 'Oinarrizko puntuak';
$string['basepointslineardesc'] = 'Mailen artean gehitu beharreko gutxienekoa.';
$string['basepointsrelativedesc'] = 'Hasierako puntu kopurua.';
$string['basexp'] = 'Algoritmoaren oinarria';
$string['blockappearance'] = 'Blokearen itxura';
$string['blockappearancemovedtopluginsettings'] = 'Blokearen itxuraren ezarpenak pluginaren ezarpen-orrira mugitu dira.';
$string['cachedef_filters'] = 'Mailen iragazkiak';
$string['cachedef_ruleevent_eventslist'] = 'Ekitaldi batzuen zerrenda';
$string['cannotbesetindefaults'] = 'Hau ezin da lehenetsitako balioetan zehaztu.';
$string['cannotearnpoints'] = 'Ezin du punturik lortu.';
$string['cannotshowblockconfig'] = 'Normalean hemen itxuraren ezarpenak erakutsiko lirateke, baina ezin izan da zure blokea aurkitu. Blokearen itxura aldatzeko, itzuli [hona]({$a}) (edo blokea gehitu zenuen lekura), edizioa aktibatu ezazu, eta egin klik blokearen menuko "Konfiguratu" aukeran. Ezin baduzu blokea aurkitu, zure ikastaroan berriz gehitu ezazu.';
$string['cannotshowblockconfigsys'] = 'Normalean hemen itxuraren ezarpenak erakutsiko lirateke, baina ezin izan da zure blokea aurkitu. Baliteke [hasiera orritik] ({$a->fp}) eta zure erabiltzaileen [lehenetsitako aginte-paneletik] ({$a->mysys}) desagertu izana edo bietan agertzea. Ezarpenak hemendik editatzeko, ziurtatu ezazu bietako batean bakarrik agertzen dela.';
$string['changecourse'] = 'Aldatu ikastaroa';
$string['changelevelformhelp'] = 'Maila kopurua aldatzen baduzu, mailen domina pertsonalizatuak behin behinean desgaituko dira dominarik gabeko mailak saihesteko. Maila kopurua aldatuz gero formulario hau gorde ondoren \'Itxura\' orrira joan zaitez mailen domina pertsonalizatuak berriz gaitzeko.';
$string['changetocourse'] = 'Aldatu ikastaro honetara:';
$string['changetositewide'] = 'Itzuli gune mailara';
$string['cheatguard'] = 'Kopiatzearen kontrako babesa';
$string['cheatguardsettingsmovednotice'] = 'Kopiatzearen kontrako babesaren ezarpenak [ekitaldi-arauen orrira]({$a->url}) mugitu dira.';
$string['chooseacondition'] = 'Aukeratu baldintza bat';
$string['clearfilter'] = 'Garbitu iragazkia';
$string['clicktoselectcm'] = 'Egin klik jarduera edo baliabidea aukeratzeko';
$string['cmselector'] = 'Ikastaro-moduluen hautatzailea';
$string['coefxp'] = 'Algoritmoaren koefizientea';
$string['colon'] = '{$a->a}: {$a->b}';
$string['compatibilitycheck'] = 'Bateragarritasun egiaztapena';
$string['completionrules'] = 'Osatze arauak';
$string['completionrules_help'] = 'Osatze arauak hiru kategoriatan banatuta daude: jarduera osaketa, atal osaketa eta ikastaro osaketa. Kategorietan baldintzak gehituta puntuak noiz eta nola banatuko diren zehaztuko da.

Arauak pantailan erakutsitako ordena berean ebaluatzen dira. Baldintzak bete ahala, dagozkion puntuak banatzen dira eta ez dira hurrengo arauak ebaluatuko.

[Jakin gehiago](https://docs.levelup.plus/xp/docs/completion-rules?ref=blockxp_help)';
$string['completionrulesintro'] = 'Eman puntuak ikasleei jarduerak, atalak edo ikastaroak osatu ahala.';
$string['completionruleslegacyusednotice'] = 'Osatze baldintzak erabiltzen dituzten "Ekitaldi-arauak" dauzkazu. Horiek kentzea eta azpiko metodoekin ordezkatzea irmoki gomendatzen dugu "Ekitaldi-arauak" eta "Osatze arauak" erabiltzeak puntuak bi aldiz ematea eragin dezakeelako.';
$string['condition'] = 'Baldintza';
$string['configblockrankingsnapshot'] = 'Erakutsi lider-panelaren pantaila-irudia';
$string['configblockrankingsnapshot_help'] = 'Lider-panelaren pantaila-irudiak erabiltzailearen sailkapena erakusten du. Erabiltzailearen inguruan dauden bi pertsonak erakusten ere saiatuko da. Funtzio honek lider-panela gaituta egotea behar du, baita bere rankinga erakustea ere.';
$string['configdescription'] = 'Sarrera';
$string['configdescription_help'] = 'Ikaslearen mailaren azpian blokearen sarrera gisa erakutsiko den mezu laburra. Ikasleek mezu hau baztertzeko aukera dute, eta hori eginez gero ez dute berriz ikusiko.';
$string['configheader'] = 'Ezarpenak';
$string['configrecentactivity'] = 'Erakutsi orain dela gutxiko sariak';
$string['configrecentactivity_help'] = 'Gaituz gero, blokean ikasleak orain dela gutxi puntuak eman dizkien sarien zerrenda laburra erakutsiko du.';
$string['configtitle'] = 'Izenburua';
$string['configtitle_help'] = 'Blokearen izenburua.';
$string['congratulationsyouleveledup'] = 'Zorionak!';
$string['coolthanks'] = 'Oso ondo, eskerrik asko!';
$string['coursea'] = '"{$a}" ikastaroa';
$string['courselog'] = 'Erregistroa';
$string['courselogintro'] = 'Erregistroak antzemandako ekintzak erakusten ditu, baita horietan lortutako puntuak ere.';
$string['coursereport'] = 'Txostena';
$string['coursereportintro'] = 'Txostenak partaide bakoitzaren xehetasunak erakusten ditu, eta horien gainean banaka ala guztiekin batera ekintzak egitea ahalbidetzen du.';
$string['courserules'] = 'Ikastaroko arauak';
$string['courseselectedcolon'] = 'Aukeratutako ikastaroak:';
$string['coursesettings'] = 'Ikastaroko ezarpenak';
$string['coursevisuals'] = 'Ikastaroko itxura';
$string['currencysign'] = 'Puntuen sinboloa';
$string['currencysign_help'] = 'Ezarpen honekin puntuen esanahia aldatu dezakezu. Esanahi berria erabiltzaile bakoitzaren puntu kopuruaren ondoan erakutsiko da _esperientzia puntuak_ kontzeptuaren ordez.

Aukeratu emandako sinboloetako bat, edo beste bat igo ezazu!';
$string['currencysignxp'] = 'XP (Esperientzia puntuak)';
$string['customizelevels'] = 'Pertsonalizatu mailak';
$string['dangerzone'] = 'Arrisku-eremua';
$string['dataformat'] = 'Formatua';
$string['defaultlevels'] = 'Maila lehenetsiak';
$string['defaultrules'] = 'Arau lehenetsiak';
$string['defaultrulesformhelp'] = 'Hauek pluginak eskainitako lehenetsitako arauak dira. Arau hauek puntuak modu lehenetsian ematen dituzte, ekitaldi erredundante batzuk alde batera utzita. Zure arau propioek hauekiko lehentasuna dute.';
$string['defaultsettings'] = 'Ezarpen lehenetsiak';
$string['defaultvisuals'] = 'Itxura lehenetsia';
$string['deletecondition'] = 'Ezabatu baldintza';
$string['deleterule'] = 'Ezabatu araua';
$string['description'] = 'Deskribapena';
$string['difference'] = 'Dif.';
$string['difficulty'] = 'Puntuak kalkulatzeko metodoa';
$string['difficultyflat'] = 'Berdina';
$string['difficultyflatdesc'] = 'Maila guztietan lorpen-mailak puntu kopuru berdina behar da.';
$string['difficultylinear'] = 'Geroz eta handiagoa';
$string['difficultylineardesc'] = 'Mailen lorpen-mailek modu progresiboan puntu kopuru gehiago behar dute.';
$string['difficultylinearincrdesc'] = 'Zailtasun progresiborako erabilitako puntu kopurua.';
$string['difficultypointincrease'] = 'Puntu kopurua handitu';
$string['difficultyrelative'] = 'Elur-pilota modua';
$string['difficultyrelativedesc'] = 'Mailen lorpen-mailek modu esponentzialean puntu kopuru gehiago behar dute.';
$string['difficultyrelativeincrdesc'] = 'Aurreko mailatik lorpen-maila igo beharreko puntu kopuruaren ehunekoa.';
$string['discoverlevelupplus'] = 'Ezagutu Maila gora XP+';
$string['dismissnotice'] = 'Baztertu mezua';
$string['displayeveryone'] = 'Erakutsi guztiei';
$string['displaynneighbours'] = 'Erakutsi {$a} aldameneko';
$string['displayoneneigbour'] = 'Erakutsi aldameneko bat';
$string['displayparticipantsidentity'] = 'Erakutsi partaideen identitatea';
$string['displayrank'] = 'Erakutsi rankinga';
$string['displayrelativerank'] = 'Erakutsi ranking erlatiboa';
$string['documentation'] = 'Dokumentazioa';
$string['drops'] = 'Utzitako elementuak (drops)';
$string['drops_help'] = 'Bideo-jokoetan pertsonaia batzuk elementuak edo esperientzia puntuak lurrean _utzi_  ditzakete jokalariak hartu ditzan. Elementu hauei \'drop\' edo utzitako elementuak deitu ohi zaie.

Maila gora XPn utzitako elementuak irakasleek Moodleko ohiko edukian kokatu ditzaketen kode laburrak dira (esaterako `[xpdrop id=1 secret=abcdef]`). Erabiltzaile batek aurkitzen dituenean, utzitako elementu horiek _hartuko_ ditu eta ondorioz puntu kopuru zehatz bat eskuratuko du.

Une honetan, utzitako elementuak erabiltzailearentzat ikusezinak dira eta modu pasiboan puntuak ematen dituzte lehen aldiz aurkituak izaten direnean.

Utzitako elementuak ikasleei eduki mota zehatzak kontsumitzeagatik puntuak eskuratu ditzaten erabili daitezke. Hauek dira erabilera posible batzuk:

- Kokatu utzitako elementu bat galdetegi batean dena ondo erantzundakoan erakusten den feedbackean
- Kokatu utzitako elementu bat eduki sakonetan horiek kontsumitzea saritzeko
- Kokatu utzitako elementu bat foro bateko elkarrizketa interesgarri batean
- Kokatu utzitako elementu bat ikasgai batean lortzen zaila den orri batean

[Informazio gehiago](https://docs.levelup.plus/xp/docs/how-to/use-drops?ref=blockxp_help)';
$string['dropsintro'] = 'Utzitako elementuak (drops) edukian txertatutako kode laburrak dira aurkitzen dituen erabiltzaileei puntuak ematen dizkienak.';
$string['editcondition'] = 'Editatu baldintza';
$string['editingdefaultsettingsinwholesitemodenotice'] = '**Kontuz!** Ez zara une honetan aktibo dauden ezarpenak aldatzen ari, lehenetsitako balioak baizik. Maila gora XP gune mailan erabiltzen denez, zure asmoa gune mailako ezarpenak aldatzea izango da ziur aski. [Nabigatu hona]({$a->url}) ezarpen horiek aldatzeko, edo jarraitu XP blokearen "Ezarpenak" esteka bera.';
$string['editinstructions'] = 'Editatu informazioa';
$string['enablecheatguard'] = 'Gaitu kopiatzearen kontrako babesa';
$string['enablecheatguard_help'] = 'Kopiatzearen kontrako babesak ikasleek sistemaren erabilera okerra teknika obvioekin egitea mekanismo merke eta sinplearekin saihesten du, hala nola orri bera etengabe freskatzea edo ekintza bera behin eta berriz errepikatzea.

[Informazio gehiago](https://docs.levelup.plus/xp/docs/getting-started/cheat-guard?ref=blockxp_help)';
$string['enableinfos'] = 'Gaitu informazio-orria';
$string['enableinfos_help'] = '\'Ez\' aukeratuz gero ikasleek ezingo dute informazio-orria ikusi.';
$string['enableladder'] = 'Gaitu lider-panela';
$string['enableladder_help'] = '\'Ez\' aukeratuz gero ikasleek ezingo dute lider-panela ikusi';
$string['enablelevelupnotif'] = 'Gaitu Maila gora! jakinarazpena';
$string['enablelevelupnotif_help'] = '\'Bai\' aukeratuz gero ikasleek zorion-mezua erakutsiko zaie maila berri batera igotzen direnean.';
$string['enablelogging'] = 'Gaitu erregistroa';
$string['enablexpgain'] = 'Gaitu puntu-irabaztea';
$string['enablexpgain_help'] = '\'Ez\' aukeratuz gero, ikastaroan inork ez du punturik eskuratuko. Hau erabilgarria izan daiteke lortutako puntuak izozteko, edo puntuen banaketa une zehatz batean gaitzeko.

Kontuan izan aukera hau zehatzago kontrolatu daitekeela _block/xp:earnxp_ gaitasuna erabilita.';
$string['entersearchterm'] = 'Idatzi bilatu beharreko terminoa';
$string['errorcontextcoursemismatchforwholesite'] = '<em>Maila gora XP</em> pluginaren orri honen URLa ez dator bat pluginaren oraingo konfigurazioarekin. Zure oraingo konfigurazioak <em>Maila gora XP</em> plugina \'Gune mailan\' erabiliko dela zehazten du, baina orri hau \'Ikastaro bakoitzean\' erabiltzea espero da. <a href="{$a->nexturl}">Egin klik hemen</a> mesedez orri zuzenera nabigatzeko. Bilatu ezazu \'block_xp_context\' konfigurazio-ezarpena konfigurazio hau aldatu nahi baduzu.';
$string['errorcontextcoursemismatchpercourse'] = '<em>Maila gora XP</em> pluginaren orri honen URLa ez dator bat pluginaren oraingo konfigurazioarekin. Zure oraingo konfigurazioak <em>Maila gora XP</em> plugina \'Ikastaro bakoitzean\' erabiliko dela zehazten du, baina orri hau \'Gune mailan\' erabiltzea espero da. Hau ziur aski konfigurazio ezberdin bat zegoenean aginte-panelean edo hasiera-orrian gehitutako <em>bloke</em> batek eragingo zuen. Esandako orri horietatik blokea kendu beharko zenuke, eta blokea banakako ikastaroetan soilik erabili.';
$string['errorformvalues'] = 'Arazo batzuk daude formularioko balioetan, konpondu itzazu mesedez.';
$string['errorlevelsincorrect'] = 'Gutxienez 2 maila egon behar dira';
$string['errornotalllevelsbadgesprovided'] = 'Ez dira maila guztientzako dominak eman. Falta direnak: {$a}';
$string['errorunknownevent'] = 'Errorea: gertaera ezezaguna';
$string['errorunknownmodule'] = 'Errorea: modulu ezezaguna';
$string['errorxprequiredlowerthanpreviouslevel'] = 'Beharrezko puntuak aurreko mailarenak baino gutxiago edo berdinak dira.';
$string['event_user_leveledup'] = 'Erabiltzaileak maila igo du';
$string['eventis'] = 'Ekitaldia {$a} da';
$string['eventname'] = 'Ekitaldiaren izena';
$string['eventproperty'] = 'Ekitaldiaren ezaugarria';
$string['eventsrules'] = 'Ekitaldi-arauak';
$string['eventsrules_help'] = 'Plugin honek ekitaldiak erabiltzen ditu ikasleek egindako ekintzei puntuak esleitzeko. Azpiko formularioa erabili dezakezu zure arau pertsonalizatuak gehitu eta lehenetsitako arauak aldatzeko.

Ikastaroko ikasleen ekintzek abiarazten dituzten ekitaldiak zeintzuk diren identifikatzeko gomendagarria da pluginaren _agerraldien_ orria begiratzea.

Baliabide gehigarriak:

- [Nola kalkulatzen dira esperientzia-puntuak?](https://docs.levelup.plus/xp/docs/getting-started/points-calculation?ref=blockxp_help)
- [Arazoen konponketa arauekin](https://docs.levelup.plus/xp/docs/troubleshooting/event-rule-not-working?ref=blockxp_help)';
$string['eventsrulesintro'] = 'Ikuskatu ekintzak eta eman puntuak ekintza horiek betetzen dituzten ikasleei.';
$string['eventtime'] = 'Ekitaldiaren denbora';
$string['export'] = 'Esportatu';
$string['exportdata'] = 'Esportatu datuak';
$string['filterbyuser'] = 'Iragazi erabiltzailearen arabera';
$string['filterellipsis'] = 'Iragazi...';
$string['filtermodules'] = 'Iragazki-moduluak';
$string['filterparticipants'] = 'Iragazi partaideak';
$string['for1day'] = 'Egun baterako';
$string['for1month'] = 'Hilabete baterako';
$string['for1week'] = 'Astebeterako';
$string['for3days'] = '3 egunerako';
$string['forever'] = 'Behin-betiko';
$string['forthewholesite'] = 'Gune osorako';
$string['give'] = 'eman';
$string['gotofullladder'] = 'Joan lider-panel osora';
$string['graderules'] = 'Kalifikazio-arauak';
$string['graderules_help'] = 'Ikasleek euren kalifikazioan beste puntuak lortuko ditu.
10etik 5eko kalifikazioarekin zein 100etik 5eko kalifikazioarekin ikasleak 5 puntu lortuko ditu.
Ikaslearen kalifikazioa hainbat aldiz aldatzen denean, ikasleak jasotako gehieneko kalifikazioaren puntuak lortuko ditu.
Ikasleei inoiz ez zaizkie puntuak kentzen, eta kalifikazio negatiboak ez dira kontuan hartzen.

Adibidez: Jonek zeregin batean bidalketa egiten du, eta 100etik 40ko kalifikazioa jasotzen du. _Maila gora XPn_ Jonek bere kalifikazioarengatik 40 puntu lortuko ditu.
Jonek bere zereginean saiakera berria egiten du, baina oraingoan 100etik 25eko kalifikazioa jasotzen du. _Maila gora XPn_ Joneren kalifikazioa ez da aldatzen.
Jonek hirugarren saiakera bat egiten du, eta bertan 100etik 60ko kalifikazioa jasotzen du, eta ondorioz _Maila gora XPn_ 20 puntu gehiago jasotzen ditu, 60 puntu guztira.

[Informazio gehiago _Maila gora XPko_ dokumentazioan](https://docs.levelup.plus/xp/docs/how-to/grade-based-rewards?ref=blockxp_help)';
$string['graderulesintro'] = 'Kalifikazio-arauek erabiltzaileek jasotako kalifikazioaren puntu berdinak jasotzea ahalbidetzen dute.';
$string['grid'] = 'Lauki-sarea';
$string['hasbadgeaward'] = 'Emateko domina multzoa';
$string['hasdescription'] = 'Deskribapena multzoa';
$string['hasname'] = 'Izena multzoa';
$string['hasnobadgeaward'] = 'Emateko dominarik ez';
$string['hasnodescription'] = 'Deskribapenik ez';
$string['hasnoname'] = 'Izenik ez';
$string['hasnopopupmessage'] = 'Zorion-mezurik ez';
$string['haspopupmessage'] = 'Zorion-mezua multzoa';
$string['hideparticipantsidentity'] = 'Ezkutatu partaideen identitatea';
$string['hiderank'] = 'Ezkutatu rankinga';
$string['importpoints'] = 'Inportatu puntuak';
$string['importpoints_help'] = 'Inportatzea ikasleen puntu kopurua _handitzeko_ edo emandako balioarekin _gainidazteko_ erabili daiteke.

Kontuan izan inportatzeak __ez duela__ esportatutako txostenaren formatu berdina erabiltzen. Eskatutako formatua [dokumentazioan](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help) azaltzen da, eta bertan [adibiderako fitxategia](https://docs.levelup.plus/xp/docs/how-to/import-points/importing-points-from-csv?ref=localxp_help#sample-file) ere eskuragarri dago.';
$string['importpointsintro'] = 'Inportatu puntuak CSV fitxategi batetik, eta (aukeran) bidali mezu bat jasotzaileari.';
$string['incourses'] = 'Ikastaroetan';
$string['ineffective'] = 'Ez-eraginkorra';
$string['infos'] = 'Informazioa';
$string['infos_help'] = 'Informazio-orriak ikasleen mailen ikuspegi orokorra erakusten du, baita horiek lortzeko behar diren puntuak ere. Horretaz gain maila bakoitzaren izena eta deskribapena ere erakusten dira.';
$string['infosintro'] = 'Informazio-orriak mailen zerrenda bat eta euren xehetasun batzuk erakusten ditu.';
$string['installed'] = 'Instalatuta';
$string['instructions'] = 'Argibideak';
$string['instructions_help'] = 'Argibideak informazio-orrian erakutsiko dira. Argibideak informazioa partekatzeko eta mailen inguruko azalpenak emateko erabili ditzakezu, esaterako puntuak nola lortzen diren.';
$string['invalidxp'] = 'Balio-puntu baliobageak';
$string['keeplogs'] = 'Gorde erregistroak';
$string['ladder'] = 'Lider-panela';
$string['ladder_help'] = 'Lider-panelak ikasleak euren puntuazioaren arabera sailkatzen ditu. Taldeak dituen ikastaro batean erabiltzen denean, talde bakoitzarentzako lider-panel bana sortu lezake.

Lider-panela pertsonalizatzeko eta partaideen esperientzia hobetzeko hainbat aukera daude eskuragarri.';
$string['ladderadditionalcols'] = 'Zutabe gehigarriak';
$string['ladderadditionalcols_help'] = 'Ezarpen honek lider-panelean erakutsiko diren zutabe gehigarriak zehazten du. Zutabe bat baino gehiago aukeratzeko edo aukeratutako bat kentzeko sakatu ezazu CTRL edo CMD tekla klik egitean.';
$string['ladderempty'] = 'Lider-panela hutsik dago une honetan, utzi zaitez hona beranduago!';
$string['ladderintro'] = 'Lider-panelak ikasleak euren puntuazioaren arabera sailkatzen ditu.';
$string['ladderiso'] = 'Banatu partaideak';
$string['ladderiso_help'] = 'Partaide-multzo ezberdinentzako banatutako lider-panelak sortu daitezke.

- Lehenetsia (talde-modua): Ikastaroaren talde-modua erabiltzen du talde bakoitzarentzako lider-panel bana sortzen du.
- Kohorteak erabilita: Kohorte bereko partaideak lider-panel ezberdin batean agertuko dira.

[Informazio gehiago](https://docs.levelup.plus/xp/docs/leaderboard-isolation)';
$string['ladderisocohorts'] = 'Kohorteak erabilita';
$string['ladderisodefault'] = 'Lehenetsia (talde-modua)';
$string['laddersettingsmovednotice'] = 'Lider-panelaren ezarpenak [lider-panelaren orrira]({$a->url}) mugitu dira.';
$string['learnmore'] = 'Ikasi gehiago';
$string['level'] = 'Maila';
$string['levelbadge'] = 'Mailaren domina';
$string['levelbadges'] = 'Mailen dominak';
$string['levelbadges_help'] = 'Igo irudiak erabiltzaileen itxura ordekatzeko.

Fitxategiek [maila].[fitxategi-luzapena] izena izan behar dute, esaterako 1.png, 2.png, etabar.

100x100 pixeleko irudiak gomendatzen ditugu, hurrengo formatuetako batean: GIF, JPEG, PNG ala SVG.';
$string['levelbadgesformhelp'] = 'Izendatu fitxategiak [maila].[fitxategi luzapena] ereduarekin, esaterako 1.png, 2.jpg... Gomendatutako irudi-tamaina 100x100 da.';
$string['levelcount'] = 'Maila kopurua';
$string['leveldesc'] = 'Mailaren deskribapena';
$string['leveldesc_help'] = 'Mailaren deskribapen txikia; hau mailarekin batera informazio-orrian erakusten da. Eremu hau erabili dezakezu maila hau lortzen dutenei ematen zaien saria deskribatzeko, maila hau eskuratzeko argibideak emateko, maila modu jostalari batean deskribatzeko (esaterako _Soilik arima ausartenek lortuko dute maila hau_), eta abar.';
$string['leveldescriptiondesc'] = 'Mailaren deskribapen labur bat, ikasleei informazio-orrian erakutsiko dena.';
$string['levelname'] = 'Mailaren izena';
$string['levelname_help'] = 'Batzuetan _1. Maila_, _2. Maila_ eta abarren ordez erakusten den testu laburra. Maila batzuei izena ematen badiezu maila guztiei ematea gomendatzen dugu.';
$string['levelpointslength'] = 'Luzera';
$string['levelpointsstart'] = 'Hasi';
$string['levels'] = 'Mailak';
$string['levelsappearance'] = 'Mailen itxura';
$string['levelssaved'] = 'Mailak gorde dira.';
$string['levelswillbereset'] = 'Kontuz! Formulario hau gordez gero erabiltzaile GUZTIEN mailak berriz kalkulatuko dira!';
$string['levelup'] = 'Maila gora!';
$string['levelupoptionsunavailableforlevelone'] = 'Maila bat eskuratzeko aukerak desgaituta daude lehen mailarako.';
$string['levelupplus'] = 'Maila gora XP+';
$string['levelx'] = '{$a}. maila';
$string['likenotice'] = '<strong>Plugin hau gustoko duzu?</strong> Hartu mesedez tarte bat Moodle.org-ko <a href="{$a->moodleorg}" target="_blank">zure gogokoetara gehitzeko</a> eta <a href="{$a->github}" target="_blank">izarra emateko GitHub-en</a>.';
$string['limitparticipants'] = 'Mugatu partaideak';
$string['limitparticipants_help'] = 'Ezarpen honek lider-panelean nori erakusten zaion kontrolatzen du. Aldamenekoak rankingean uneko erabiltzailearen gainetik eta azpitik dauden partaideak dira. Esaterako, \'Erakutsi 2 aldameneko\' aukeratuta soilik uneko erabiltzailearen rankingeko aurreko eta hurrengo partaideak erakutsiko dira.';
$string['list'] = 'Zerrenda';
$string['logging'] = 'Erregistratzea';
$string['manually'] = 'Eskuz';
$string['maxactionspertime'] = 'Gehieneko ekintza kopurua denbora-tartean';
$string['maxactionspertime_help'] = 'Emandako denbora-tartean puntuak eskuratzeko zenbatuko diren gehieneko ekintza kopurua. Horien ondorengo ekintzak ez dira kontuan hartuko. Balio hau hutsik badago edo zero bada, ez da aplikatzen.';
$string['maxlevelexcl'] = 'maila gorena!';
$string['menu'] = 'Menua';
$string['messageprovider:adminnotice'] = 'Kudeatzaileen jakinarazpena';
$string['missing'] = 'Faltan';
$string['movecondition'] = 'Mugitu baldintza';
$string['moverule'] = 'Mugitu araua';
$string['name'] = 'Izena';
$string['namecontains'] = '"{$a}" dauka';
$string['nameequalsto'] = 'Hau da: "{$a}"';
$string['navbardisplay'] = 'Erakutsi nabigazio-barran';
$string['navbardisplay_desc'] = 'Gaituz gero, erabiltzailearen maila goiko aldeko nabigazio-barran erakutsiko da. Ikastaroa "Ikastaro mailan" erabiltzen bada soilik ikastaroan agertuko da. Funtzionalitate honek azalarekin erlazio estua dauka eta beraz baliteke azalen plugin gehigarrietan ondo ez erakustea (edo ez erakustea).[Gehiago jakin nahi dut](https://docs.levelup.plus/xp/docs/navbar-display)';
$string['navcompletionrules'] = 'Osaketa';
$string['navdrops'] = 'Utzitako elementuak (drops)';
$string['naveventrules'] = 'Ekitaldi-arauak';
$string['navgraderules'] = 'Kalifikazio-arauak';
$string['navimport'] = 'Inportatu';
$string['navinfos'] = 'Informazioa';
$string['navladder'] = 'Lider-panela';
$string['navlevels'] = 'Mailak';
$string['navlevelssetup'] = 'Konfigurazioa';
$string['navlog'] = 'Erregistroa';
$string['navpoints'] = 'Puntuak';
$string['navpromo'] = 'XP+';
$string['navreport'] = 'Txostena';
$string['navrules'] = 'Arauak';
$string['navsettings'] = 'Ezarpenak';
$string['navvisuals'] = 'Itxura';
$string['nextlevelin'] = 'hurrengo mailarako';
$string['noconditionsyet'] = 'Oraindik ez dago baldintzarik!';
$string['noconditionsyetintro'] = 'Baldintza bat gehituta hasi zaitez.';
$string['nodescription'] = 'Deskribapenik ez';
$string['noissuesidentified'] = 'Ez da antzeman arazorik';
$string['nologsrecordedyet'] = 'Oraindik ez da erregistrorik gorde.';
$string['noname'] = 'Izenik ez';
$string['noneareavailable'] = 'Bat ere ez dago eskuragarri';
$string['notecompatibilityissues'] = 'Kontuan izan behean identifikatutako bateragarritasun-arazoak:';
$string['notesomesettingslocked'] = 'Kontuan izan balitekeela ezarpen batzuk ezin editatzea kudeatzaile batek blokeatu izan baditu.';
$string['nothingmatchesfilter'] = 'Ez dago iragazkiarekin bat datorren ezer.';
$string['numberoflevels'] = 'Maila kopurua';
$string['occasionally'] = 'Noizean behin';
$string['outofsync'] = 'XP pluginen bateraezintasuna';
$string['outofsyncexcessive'] = 'Gehiegizko desinkronizazioa';
$string['outofsyncexcessiveinfo'] = 'XP+ XP baino askoz zaharragoa da eta horrek ezusteko arazoak ekar ditzake. Etorkizunean XP+ automatikoki desgaituko da.';
$string['outofsyncinfo'] = 'XP pluginak elkarri bateraezinak dira eta horrek ezusteko arazoak ekar ditzake. Etorkizunean XP+ automatikoki desgaituko da. XP+ pluginaren (local_xp) esperotako bertsioa {$a->localxpversion} da.';
$string['pagecurrentnotvisibletoviewers'] = 'Orri hau ez dago ikasleentzat ikusgai une honetan.';
$string['pagecurrentvisibletoviewers'] = 'Orri hau ikasleentzat ikusgai dago une honetan.';
$string['pagesettings'] = 'Orriaren ezarpenak';
$string['participant'] = 'Partaidea';
$string['participants'] = 'Partaideak';
$string['participatetolevelup'] = 'Ikastaroan parte hartu ezazu puntuak irabazi eta mailaz igotzeko!';
$string['perpagecolon'] = 'Orri bakoitzeko:';
$string['pickaconditiontype'] = 'Aukeratu baldintza-mota';
$string['pluginavailabilityxpdesc'] = 'Plugin honek irakasleari jardueren eskuragarritasuna ikaslearen mailaren arabera murrizteko aukera ematen du.';
$string['pluginenrolxpdesc'] = 'Plugin honek ikaslearen beste ikastaro bateko mailaren araberako ikastaroetako matrikulazio automatikoa gaitzen du.';
$string['pluginname'] = 'Maila gora XP';
$string['pluginshortcodesdesc'] = 'Plugin honek irakasleari edukietan XP-rekin lotutako elementuak erabilita (puntuak, maila, lider-panela) bere materialak pertsonalizatzeko aukera ematen dio, baita ikaslearen mailaren arabera edukiak erakutsi ala ezkutatu ere.';
$string['pluginsoutofsync'] = '__XP pluginen bateraezintasuna!__

_Maila gora XP_ eta  _Maila gora XP+_ arteko bateragarritasun-arazoak daude. Etorkizunean Maila gora XP+ plugina automatikoki desgaituko da bateragarria ez bada.  Hori gertatzea saihesteko, jarri zaitez harremanetan zure guneko kudeatzailearekin. [Irakurri gehiago]({$a->url})';
$string['pluginxmaybeincompatible'] = 'Baliteke {$a->name}(r)en bertsio hau ({$a->component}) Moodleko {$a->version} bertsioarekin bateraezina izan daiteke.';
$string['pointsintimelinker'] = 'denbora-tarte honetan:';
$string['pointsperlevel'] = 'Maila bakoitzerako puntu kopurua';
$string['pointsrequired'] = 'Beharrezko puntuak';
$string['pointstoaward'] = 'Eman beharreko puntu kopurua';
$string['pointstoaward_help'] = 'Baldintza betetzen denean eman beharreko puntu kopurua.';
$string['popupnotificationmessage'] = 'Zorion-mezuaren edukia';
$string['popupnotificationmessagedesc'] = 'Erabiltzaileak maila berri batera igotzen denean aukeran erakutsi daitekeen zorion-mezuaren edukia.';
$string['potentialmoodleincompatibility'] = 'Moodle bateraezintasun potentziala';
$string['previewpopupnotification'] = 'Aurreikusi jakinarazpena';
$string['privacy:metadata:log'] = 'Ekitaldien erregistroa gordetzen du';
$string['privacy:metadata:log:eventname'] = 'Ekitaldiaren izena';
$string['privacy:metadata:log:time'] = 'Gertatu zeneko unea';
$string['privacy:metadata:log:userid'] = 'Puntuak lortu zituen erabiltzailea';
$string['privacy:metadata:log:xp'] = 'Ekitaldiak emandako puntuak';
$string['privacy:metadata:prefintro'] = 'Erabiltzaileak blokearen sarbidea baztertu duen gordetzen du';
$string['privacy:metadata:prefladderpagesize'] = 'Lider-panela ikustean erabiltzailearen orri-tamainaren hobespena';
$string['privacy:metadata:preflevelup'] = 'Erabiltzaileak maila igotzeagatiko jakinarazpena jaso behar duen gordetzen du';
$string['privacy:metadata:prefnotices'] = 'Erabiltzaileak laguntza-oharra itxi duen gordetzen du';
$string['privacy:metadata:prefseenpromo'] = 'Erabiltzaileak iragarpen-orria ikusi duen gordetzen du';
$string['privacy:metadata:xp'] = 'Erabiltzaileen puntu eta mailak gordetzen ditu';
$string['privacy:metadata:xp:lvl'] = 'Erabiltzailearen maila';
$string['privacy:metadata:xp:userid'] = 'Erabiltzailea';
$string['privacy:metadata:xp:xp'] = 'Erabiltzailearen puntuak';
$string['privacy:path:addon'] = 'Gehigarria';
$string['privacy:path:level'] = 'Maila';
$string['privacy:path:logs'] = 'Erregistroak';
$string['progress'] = 'Aurrerapena';
$string['progressbar'] = 'Aurrerapen-barra';
$string['promocheatguard'] = 'Kopiatzearen kontrako babes hau ez dago diseinatuta denbora-tarte luzeetan funtzionatzeko. Baloratu ezazu <em>Maila gora XP+</em>-era eguneratzea denbora-tarte hobeak eta beste funtzio batzuk desblokeatzeko. <a href="{$a->url}">Irakurri gehiago hemen</a>.';
$string['promocontactintro'] = 'Jarri harremanetan gurekin informazio gehiagorako. Ez dugu kosk egiten eta azkar erantzuten dugu!';
$string['promocontactus'] = 'Jarri harremanetan';
$string['promoemailusat'] = 'E-maila bidali iezaguzu _levelup@branchup.tech_ helbidera.';
$string['promoerrorsendingemail'] = 'Ups! Ezin izan dugu mezua bidali... e-maila zuzenean bidali iezaguzu {$a} helbidera. Eskerrik asko!';
$string['promogetnow'] = 'Eskuratu Maila Gora XP+ orain!';
$string['promoifpreferemailusat'] = 'Aizu! Nahiago baduzu, e-maila zuzenean bidali iezaguzu _{$a}_ helbidera.';
$string['promointro'] = 'Joko aditua bihurtu zaitez! Desblokeatu funtzio gehigarriak eta eraman ezazu gamifikazioa bere maila gorenera Maila Gora XP+ bertsioarekin!';
$string['promointroinstalled'] = '_Maila gora XP+_ gehigarria zure sisteman instalatuta dago eta bere funtzio guztiak gaituta daude.';
$string['promorulesdidyouknow'] = 'Ba al dakizu <em>Maila gora XP+</em>-ekin ikasleek puntuak jaso ditzaketela <em>ikastaroak</em> eta <em>jarduerak osatzeagatik</em>, baita euren <em>kalifikazioen</em> arabera ere? <a href="{$a->url}">Ezagutu gehiago hemen</a>.';
$string['promoyourmessagewassent'] = 'Eskerrik asko, zure mezua bidali. Laster erantzungo dizugu.';
$string['property:action'] = 'Ekitaldiaren ekintza';
$string['property:component'] = 'Ekitaldiaren osagaia';
$string['property:crud'] = 'Ekitaldiaren CRUDa';
$string['property:eventname'] = 'Ekitaldiaren izena';
$string['property:target'] = 'Ekitaldiaren helburua';
$string['questreleasenotice'] = '🎉 Pozik gaude **Maila Gora Bilaketa (Level Up Quest)** izeneko gure **gamifikazio plugin berria** iragarrita 🥳. Bihurtu itzazu zure ikastaroak **abentura zirraragarri**, **berrengaiatze estrategiez** eta **ospakizunez** betez 🤯! Ezagutu ezazu [Level Up Quest-en webgunea]({$a->questurl}) eta gure [iragartze-mezua hemen]({$a->questblogurl}). 👈';
$string['quickeditpoints'] = 'Puntuen editatze azkarra';
$string['rank'] = 'Rankinga';
$string['ranking'] = 'Rankinga';
$string['ranking_help'] = 'Rankinga oraingo erabiltzaileak lider-panelean duen kokapen absolutua da. Ranking erlatiboa erabiltzailearen esperientzia-puntuen eta bere aldamenekoen arteko diferentzia da.';
$string['reallydeleteuserstate'] = 'Erabiltzaile bat ezabatzea lider-paneletik kentzeko soilik da erabilgarria. Beste edozein arrazoietarako, horren ordez bere puntuak 0ra aldatzea gomendatzen dugu. Kontuan izan erabiltzaileak ezabatzeak ez duela etorkizunean puntuak lortzeko gaitasunean eragiten.

_Maila gora XP_ gune mailan erabiltzean, erabiltzaileak ezabatzeak txostenetik desagertzea suposatuko du, eta ondorioz ezingo diezu puntuak berriz esleitu. _Maila gora XP_ ikastaroetan erabiliz gero ordea, ikaslea txostenean agertzen jarraituko du ikastaroan matrikulatuta badago.

Ziur zaude erabiltzaile honen puntuak ezabatu nahi dituzula?';
$string['reallydeleteuserstateandlogs'] = 'Erabiltzaile bat ezabatzeak erabiltzailea lider-paneletik kendu eta berarekin lotutako erregistroak kentzen ditu.

Erregistroak kentzeak erabiltzaileak aurretiko ekintzengatik puntuak berriz lortzea gaitu lezake. Zure asmoa soilik bere puntuazioa berrabiaraztea bada, honen ordez bere puntuazioan 0 jartzea gomendatzen dizugu. Kontuan izan erabiltzaileak ezabatzeak ez duela etorkizunean puntuak lortzeko gaitasunean eragiten.

_Maila gora XP_ gune mailan erabiltzean, erabiltzaileak ezabatzeak txostenetik desagertzea suposatuko du, eta ondorioz ezingo diezu puntuak berriz esleitu. _Maila gora XP_ ikastaroetan erabiliz gero ordea, ikaslea txostenean agertzen jarraituko du ikastaroan matrikulatuta badago.

Ziur zaude erabiltzaile honen puntuak eta erregistroak ezabatu nahi dituzula?';
$string['reallyresetallcourselevelstodefaults'] = 'Ziur zaude ikastaro GUZTIETAKO mailak lehenetsitako mailetara berrabiarazi nahi dituzula? Ekintza honek ez du atzera bueltarik.';
$string['reallyresetallcoursestodefaults'] = 'Ziur zaude ikastaro GUZTIETAKO arauak lehenetsitako arauetara berrabiarazi nahi dituzuela? Ekintza honek ez du atzera bueltarik.';
$string['reallyresetallcoursevisualstodefaults'] = 'Ziur zaude ikastaro GUZTIETAKO itxura lehenetsitako itxurara berrabiarazi nahi dituzula? Ekintza honek ez du atzera bueltarik.';
$string['reallyresetcourselevelstodefaults'] = 'Ziur zaude ikastaro mailak lehenetsitako balioetara berrabiarazi nahi dituzula? Ekintza honek ez dauka atzera bueltarik.';
$string['reallyresetcourserulestodefaults'] = 'Ziur zaude ikastaro honetako arauak lehenetsitako arauetara berrabiarazi nahi dituzuela? Ekintza honek ez du atzera bueltarik.';
$string['reallyresetcoursevisualstodefaults'] = 'Ziur zaude ikastaro mailen itxura lehenetsitako balioetara berrabiarazi nahi dituzula? Ekintza honek ez dauka atzera bueltarik.';
$string['reallyresetdata'] = 'Ziur zaude ikastaro honetako erabiltzaile guztien mailak eta puntuak berrabiarazi nahi dituzula? Ekintza honek ez du atzera bueltarik.';
$string['reallyresetgroupdata'] = 'Ziur zaude talde honetako erabiltzaile guztien mailak eta puntuak berrabiarazi nahi dituzula?';
$string['reallyreverttopluginsdefaults'] = 'Ziur zaude pluginak proposatutako lehenetsitako balioak berrabiarazi nahi dituzula? Ekintza honek ez du atzera bueltarik.';
$string['recentrewards'] = 'Orain dela gutxiko sariak';
$string['recommended'] = 'Gomendatuta';
$string['recommendedplugins'] = 'Gomendatutako pluginak';
$string['releasenotes'] = 'Kaleratze-oharrak';
$string['remaining'] = 'faltan';
$string['removefilter'] = 'Kendu iragazkia';
$string['reportisempty'] = 'Txostena hutsik dago, ikasleek oraindik ez dute punturik irabazi.';
$string['reportisemptyenrolstudents'] = 'Txostena hutsik dago, ikastaroan oraindik ez dago ikaslerik matrikulatuta?';
$string['requires'] = 'Behar du';
$string['resetallcoursestodefaults'] = 'Berrabiarazi ikastaro guztiak lehenetsitako balioetara';
$string['resetallcoursestodefaultsintro'] = 'Egin klik azpiko botoian ikastaro guztiak lehenetsitako balioetara berrabiarazteko.';
$string['resetcoursedata'] = 'Berrabiarazi ikastaroko datuak';
$string['resetcourserulestodefaults'] = 'Berrabiarazi ikastaroko arauak lehenetsitako balioetara';
$string['resetgroupdata'] = 'Berrabiarazi taldeko datuak';
$string['resetlevelstodefaults'] = 'Berrabiarazi mailak lehenetsitako balioetara';
$string['resettodefaults'] = 'Berrabiarazi lehenetsitako balioetara';
$string['resetvisualstodefaults'] = 'Berrabiarazi mailen itxura lehenetsitako balioetara';
$string['resultsfilteredforn'] = '{$a}(e)rako iragazitako emaitzak.';
$string['reverttopluginsdefaults'] = 'Itzuli pluginaren lehenetsitako balioetara';
$string['reverttopluginsdefaultsintro'] = 'Erabili azpiko botoia goiko lehenetsitako balioak pluginak lehenetsitakotara itzultzea nahi baduzu. Honek ez du existitzen diren ikastaroetan eragiten.';
$string['reward'] = 'Saria';
$string['rule'] = 'Araua';
$string['rule:contains'] = 'barne du';
$string['rule:eq'] = 'hurrengo honen berdina da';
$string['rule:eqs'] = 'hurrengo honen berdin-berdina da';
$string['rule:gt'] = 'hurrengo hau baino handiagoa da';
$string['rule:gte'] = 'hurrengo hau baino handiagoa edo berdina da';
$string['rule:lt'] = 'hurrengo hau baino txikiagoa da';
$string['rule:lte'] = 'hurrengo hau baino txikiagoa edo berdina da';
$string['rule:regex'] = 'adierazpen erregularra betetzen du';
$string['ruleadded'] = 'Baldintza gehitu da.';
$string['rulecm'] = 'Jarduera edo baliabidea';
$string['rulecm_help'] = 'Baldintza hau betetzeko da ekitaldia zehaztutako jarduera edo baliabidean gertatzen denean.';
$string['rulecmdesc'] = 'Jarduera edo baliabidea \'{$a->contextname}\' da.';
$string['rulecmdescwithcourse'] = 'Jarduera edo baliabidea hurrengoa da: \'{$a->coursename}\' ikastaroko \'{$a->contextname}\'.';
$string['rulecminfo'] = 'Baldintza honek ekintza jarduera edo baliabide zehatz batean gertatzea behar du.';
$string['ruleevent'] = 'Ekitaldi zehatza';
$string['ruleeventdesc'] = 'Ekitaldia \'{$a->eventname}\' da';
$string['ruleeventinfo'] = 'Aukeratu ekitaldien zerrendatik erabiltzaileak egin beharko duen ekintza.';
$string['rulefilterany'] = 'Edozein';
$string['rulefilteranycm'] = 'Edozein jarduera';
$string['rulefilteranycmdesc'] = 'Baldintza hau edozein jarduerarekin bat etorriko da.';
$string['rulefilteranycourse'] = 'Edozein ikastaro';
$string['rulefilteranycoursedesc'] = 'Baldintza hau edozein ikastarorekin bat etorriko da.';
$string['rulefilteranydesc'] = 'Baldintza hau edozerekin bat etorriko da.';
$string['rulefilteranysection'] = 'Edozein atal';
$string['rulefilteranysectiondesc'] = 'Baldintza hau edozein atalekin bat etorriko da.';
$string['rulefiltercm'] = 'Jarduera zehatza';
$string['rulefiltercmdesc'] = 'Markatu ikastaroko jarduera edo baliabide bat helburu gisa.';
$string['rulefiltercmname'] = 'Jardueraren izena';
$string['rulefiltercmnamedesc'] = 'Jardueraren izenean oinarritutako baldintza.';
$string['rulefilternone'] = 'Ezer ez';
$string['rulefiltersection'] = 'Atal zehatza';
$string['rulefiltersectiondesc'] = 'Markatu ikastaroko atal zehatz bat helburu gisa.';
$string['rulefilterthiscourse'] = 'Ikastaro hau';
$string['rulefilterthiscoursedesc'] = 'Markatu oraingo ikastaroa helburu gisa.';
$string['ruleproperty'] = 'Ekitaldiaren ezaugarria';
$string['rulepropertydesc'] = '\'{$a->property}\' ezaugarria {$a->compare}: \'{$a->value}\'';
$string['rulepropertyinfo'] = 'Baldintza hau ekitaldiak eta euren ezaugarriak teknikoki ulertzen duten erabiltzaile aurreratuentzako da.';
$string['ruleset'] = 'Baldintza sorta';
$string['ruleset:all'] = 'Baldintza GUZTIAK betetzen dira';
$string['ruleset:any'] = 'EDOZEIN baldintza betetzen da';
$string['ruleset:none'] = 'Baldintza BAT ERE EZ da betetzen';
$string['rulesetinfo'] = 'Konbinatu hainbat baldintza';
$string['rulesformhelp'] = '<p>Plugin honek ekitaldiak erabiltzen ditu ikasleek egindako ekintzei puntuak esleitzeko. Azpiko formularioa erabili dezakezu zure arau pertsonalizatuak gehitu eta lehenetsitako arauak aldatzeko.</p>
<p>Ikastaroko ikasleen ekintzek abiarazten dituzten ekitaldiak zeintzuk diren identifikatzeko gomendagarria da pluginaren <a href="{$a->log}">agerraldien</a> orria begiratzea, baita ekintzei buruz gehiago irakurtzeko: <a href="{$a->list}">ekintza guztien zerrenda</a>, <a href="{$a->doc}">garatzailearen dokumentazioa</a>.</p>
<p>Amaitzeko, kontuan izan plugin honek ez dituela kontuan hartzen:
<ul>
    <li>Kudeatzaileek, gonbidatuek edo saioa hasi gabekoek egindako ekintzak.</li>
    <li><em>block/xp:earnxp</em> baimena ez duten erabiltzaileek egindako ekintzak.</li>
    <li>Denbora-tarte txikian errepikatutako ekintzak, tranpak egitea saihesteko.</li>
    <li><em>Anonimo</em> gisa markatutako ekintzak, feedback anonimoa esaterako.</li>
    <li><em>Parte-hartzea</em> hezkuntza-mailakoak ez diren ekintzak.</li>
</ul>
</p>';
$string['rulesscope'] = 'Esparrua';
$string['rulesscope_help'] = 'Arauen esparruak non aplikatuko diren zehazten du.

Arauak bi esparrutan sortu daitezke: gune-mailan eta ikastaro mailan. Posible den heinean, ikastaro mailako arauak lehenago ebaluatzen dira, eta ondoren gune-mailakoak. Modu honetan egiteak irakasleek gune-mailako arau orokorrak sortzea eta gero ikastaro bakoitzean moldatzea ahalbidetzen du.

- Gune-mailan: Arau hauek gune osoan aplikatzen dira, ikastaro mailako arauak ez dauden kasuetan.
- Ikastaro mailan: Arau hauek ikastaro zehatzetan aplikatzen dira. Gune-mailako arauek baino lehentasun handiagoa dute.';
$string['ruletypecmcompletion'] = 'Jarduera osaketa';
$string['ruletypecmcompletiondesc'] = 'Eman puntuak jarduera bat osatuta gisa markatzen denean.';
$string['ruletypecoursecompletion'] = 'Ikastaro osaketa';
$string['ruletypecoursecompletiondesc'] = 'Eman puntuak ikastaro bat osatuta gisa markatzen denean.';
$string['ruletypesectioncompletion'] = 'Atalaren osaketa';
$string['ruletypesectioncompletiondesc'] = 'Eman puntuak ikastaro-atal bat osatuta gisa markatzen denean.';
$string['searchandselectcourse'] = 'Bilatu eta aukeratu ikastaro bat';
$string['searchandselectmodule'] = 'Bilatu eta aukeratu jarduera edo baliabidea';
$string['selectcourse'] = 'Aukeratu ikastaroa';
$string['send'] = 'Bidali';
$string['setpoints'] = 'Zehaztu puntuazioak';
$string['settingsoutdatedxppnotice'] = 'Mezu honen azpian ezarpenak ikusten badituzu, instalatutako XP+ pluginaren bertsioa zaharkituta dagoela esan nahi du. Jarri zaitez harremanetan zure guneko kudeatzailearekin arazoa konpondu dezan bertsio berriena instalatuta.';
$string['shortcode:xpbadge'] = 'Oraingo erabiltzailearen mailari dagokion domina.';
$string['shortcode:xpiflevel'] = 'Erakutsi edukia oraingo erabiltzailearen mailarekin bat datorrenean';
$string['shortcode:xpiflevel_help'] = 'Ikusi azpiko adibideak kode labur hau formateatzeko. Maila konkretu bat zehazten denean, edukia beste arauak kontuan hartu gabe erakutsiko da.
_Handiago_ eta _txikiago_ arau guztiak bete behar dira edukia erakutsi dadin. Kontuan izan honen ondorioz edukia ez erakustea gertatu daitekeela!

```
[xpiflevel 1 3 5]
    Erabiltzailearen maila zehazki 1, 3 edo 5 denean erakusten da.
[/xpiflevel]

[xpiflevel >3]
    Erabiltzailearen maila 3 baino handiago denean erakusten da.
[/xpiflevel]

[xpiflevel >=3]
    Erabiltzailearen maila 3 baino handiago edo berdina denean erakusten da.
[/xpiflevel]

[xpiflevel >=10 <20 30]
    Erabiltzailearen maila 10 baino handiago edo berdina denean ETA 20 baino txikiagoa EDO zehazki 30 denean erakusten da.
[/xpiflevel]

[xpiflevel <=10 >=20]
    Ez da inoiz erakutsiko erabiltzailearen maila ezin delako aldi berean 10 baino txikiago edo berdina ETA 20 edo handiagoa edo berdina izan.
[/xpiflevel]
```

Kontuan izan kode labur hauek EZIN DIRELA beste baten barruan erabili.';
$string['shortcode:xpladder'] = 'Erakutsi lider-panelaren zati bat.';
$string['shortcode:xpladder_help'] = 'Modu lehenetsian, uneko erabiltzailearen inguruan dauden lider-paneleko erabiltzaileak erakutsiko dira.

```
[xpladder]
```

Erabiltzailearen aldamenekoak erakutsi beharrean lider-paneleko lehen 10 ikasleak erakutsi nahi badituzu `top` aldagaia erabili ezazu. Aukeran gehienez erakutsiko diren ikasleak zehaztu ditzakezu, esaterako `top=20`.

```
[xpladder top]
[xpladder top=15]
```

Taularen azpian lider-panel osoa erakusteko esteka automatikoki erakutsiko da, esteka hori ezkutatzeko `hidelink` aldagaia erabili ezazu.

```
[xpladder hidelink]
```

Modu lehenetsian taulak ez du aurrerapen-barraren zutabea erakusten. Zutabe gehigarrien artean zutabe hori aukeratzen bada lider-panelaren ezarpenetan, `withprogress` aldagaia erabili ezazu.

```
[xpladder withprogress]
```

Kontuan izan ikastaro batean taldeak erabiltzen badituzu, lider-panelak zein taldeko erabiltzaileen lider-panelea erakutsi behar diren asmatuko du.';
$string['shortcode:xplevelname'] = 'Erakutsi mailaren izena.';
$string['shortcode:xplevelname_help'] = 'Modu lehenetsian etiketak uneko erabiltzailearen mailaren izena erakusten du.
Horren ordez, `level` aldagaia erabili dezakezu maila zehatz baten izena erakusteko.

```
[xplevelname]
[xplevelname level=5]
```

`level` aldagaia zehazten bada eta maila ez bada existitzen, ez da ezer erakutsiko.';
$string['shortcode:xppoints'] = 'Erakutsi puntu kopurua esperientzia-puntu gisa formateatuta.';
$string['shortcode:xppoints_help'] = 'Modu lehenetsian honek unean uneko erabiltzaileren puntuak erakusten ditu. Horren ordez balio hori baliogabetzeko zenbaki bat zehaztu dezakezu.

Puntuen estiloa erabiltzailearen puntuak ala zehaztutako balioa erakutsiko denaren menpe egongo da. `plain` argumentua erabili daiteke edozein estilo kentzeko.

```
[xppoints]
[xppoints 500]
[xppoints 123 plain]
```';
$string['shortcode:xpprogressbar'] = 'Oraingo erabiltzailea hurrengo mailara heltzeko aurrerapen-barra.';
$string['sitewide'] = 'Gune mailan';
$string['somefeaturesrequireotherplugins'] = 'Funtzionalitate batzuk plugin gehigarriak instalatzea behar dute.';
$string['someoneelse'] = 'Beste norbait';
$string['somethinghappened'] = 'Zerbait gertatu da';
$string['taskadminnotices'] = 'Kudeatzaileen jakinarazpenak';
$string['taskcollectionloggerpurge'] = 'Garbitu bildutako erregistroak';
$string['taskusagereport'] = 'Erabilera txostena';
$string['teamleaderboard'] = 'Taldearen lider-panela';
$string['teamleaderboard_help'] = 'Taldearen lider-panelak taldeko kideen lortutako puntuazioaren araberako sailkapena erakusten du.

Taldeak ikastaroko taldeetan oinarrituta ala kohorteak erabiliz sortu daitezke. Taldeen tamaina ezberdinetara egokitzeko aukerak ere badaude.

[Jakin gehiago](https://docs.levelup.plus/xp/docs/how-to/setup-team-leaderboard/team-leaderboard?ref=blockxp_help)';
$string['teamleaderboardintro'] = 'Taldearen lider-panelak taldeko kideen lortutako puntuazioaren araberako sailkapena da';
$string['teams'] = 'Taldeak';
$string['thankyou'] = 'Eskerrik asko!';
$string['timebetweensameactions'] = 'Ekintza berdinen arteko igaro beharreko denbora';
$string['timebetweensameactions_help'] = 'Dagoeneko gertatu den ekintza baten ondoren berriz onartua izan dadin pasa beharreko gutxieneko denbora. Ekintza bat berdintzat hartzen da testuinguru eta objektu berean gertatu bada, esaterako foroko elkarrizketa bat berdintzat hartuko da elkarrizketa bera berriz irakurtzen bada. Balio hau hutsik badago, edo zero bada, ez da aplikatzen.';
$string['timeformaxactions'] = 'Gehieneko ekintzentzako denbora-tartea';
$string['timeformaxactions_help'] = 'Erabiltzaile batek gehieneko ekintza kopurua ez gainditzeko duen denbora-tartea (segundotan).';
$string['tinytimedays'] = '{$a}e';
$string['tinytimehours'] = '{$a}o';
$string['tinytimeminutes'] = '{$a}m';
$string['tinytimenow'] = 'orain';
$string['tinytimeolderyearformat'] = '%b %Y';
$string['tinytimeseconds'] = '{$a}s';
$string['tinytimeweeks'] = '{$a}a';
$string['tinytimewithinayearformat'] = '%b %e';
$string['total'] = 'Guztira';
$string['tryme'] = 'Probatu nazazu';
$string['unavailable'] = 'Ez-eskuragarri';
$string['unknownactivitya'] = 'Jarduera ezezaguna ({$a})';
$string['unknownbadgea'] = 'Domina ezezaguna ({$a})';
$string['unknownconditiona'] = 'Baldintza ezezaguna ({$a})';
$string['unknowneventa'] = 'Ekitaldi ezezaguna ({$a})';
$string['unknownsectiona'] = 'Atal ezezaguna ({$a})';
$string['unknowntypea'] = 'Mota ezezaguna ({$a})';
$string['unlockfeaturewithxpplus'] = 'Desblokeatu funtzio hau Maila Gora XP+-rekin. <a href="{$a}">Gehiago jakin nahi dut</a>';
$string['unstableversioninstalled'] = 'Garapeneko bertsioa instalatuta';
$string['unstableversioninstalledinfo'] = 'Maila Gora XP (block_xp) pluginaren bertsio hau oraindik garapenean dago eta ezegonkorra izan daiteke, erabili ezazu mesedez kaleratze ofizial bat.';
$string['updateandpreview'] = 'Eguneratu eta aurreikusi';
$string['upgradingplugins'] = 'Pluginak eguneratzen';
$string['urlaccessdeprecated'] = 'URL bidezko sarbidea zaharkituta dago, mesedez zure estekak eguneratu itzazu.';
$string['usagereport'] = 'Partekatu erabilera txostena';
$string['usagereport_desc'] = 'Aldizka partekatu pluginaren garatzaileekin erabileraren informazio anonimoa. Informazio hau plugina nola erabiltzen den ulertzeko baliagarria izango da eta bere garapenean eragina izango du. Partekatutako informazioak Moodle gunearen inguruko oinarrizko informazioa (URLa, bertsioa), eta pluginaren erabilera informazioa (puntuak lortzen dituen erabiltzailea kopurua, ezarpenen ikuspegi orokorra, erabilitako arauak...) barne hartzen du.';
$string['usealgo'] = 'Erabili algoritmoa';
$string['usecustomlevelbadges'] = 'Erabili mailen domina pertsonalizatuak';
$string['usecustomlevelbadges_help'] = '\'Bai\' aukeratuz gero, maila bakoitzarentzako irudi bana eman beharko duzu.';
$string['usingalgo'] = 'Algoritmoa erabilita';
$string['value'] = 'Balioa';
$string['valuessaved'] = 'Balioak ondo gorde dira.';
$string['viewas'] = 'Ikusi honela';
$string['viewlogs'] = 'Ikusi erregistroak';
$string['viewtheladder'] = 'Ikusi eskailera';
$string['visualsintro'] = 'Pertsonalizatu mailen itxura eta puntuen esanahia.';
$string['wewillreplyat'] = 'Hurrengo helbidean erantzungo zaitugu: _{$a}_.';
$string['when'] = 'Noiz';
$string['wherearexpused'] = 'Non erabiltzen dira puntuak?';
$string['wherearexpused_desc'] = '\'Ikastaroetan\' zehaztuz gero, lortutako puntuak soilik blokea gehitu zeneko  ikastaroan zenbatuko dira. \'Gune mailan\' zehaztuz gero, erabiltzaile batek ikastaro bakoitzean izan ordez "maila gora" gune osoan egingo du, eta gune osoan lortutako puntuak erabiliko dira.';
$string['whoops'] = 'Ups!';
$string['xp'] = 'Esperientzia-puntuak';
$string['xp:addinstance'] = 'Gehitu bloke berri bat';
$string['xp:earnxp'] = 'Eskuratu puntuak';
$string['xp:manage'] = 'Kudeatu esperientzia-puntuen ezaugarri guztiak';
$string['xp:myaddinstance'] = 'Gehitu blokea nire aginte-panelera';
$string['xp:view'] = 'Ikusi blokea eta lotutako orriak';
$string['xp:viewlogs'] = 'Ikusi txostenak';
$string['xp:viewreport'] = 'Ikusi txostena';
$string['xpgaindisabled'] = 'Puntuak irabaztea desgaituta dago';
$string['xpplusrequired'] = 'Maila Gora XP+ behar da';
$string['xprequired'] = 'XP behar da';
$string['xptogo'] = '[[{$a}]] amaitzeko';
$string['youleveledupexcl'] = 'Mailaz igo zara!';
$string['youreachedlevel'] = 'Maila honetara iritsi zara:';
$string['youreachedlevela'] = '{$a} mailara iritsi zara!';
$string['yourmessage'] = 'Zure mezua';
$string['yourownrules'] = 'Zure arau propioak';
