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
 * Strings for component 'book', language 'sv', version '3.8'.
 *
 * @package     book
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addafter'] = 'Lägg till ett nytt kapitel';
$string['addafterchapter'] = 'Lägg till ett nytt kapitel efter "{$a->title}"';
$string['book:addinstance'] = 'Lägg till ny bok';
$string['book:edit'] = 'Redigera bokkapitel';
$string['book:read'] = 'Visa bok';
$string['book:viewhiddenchapters'] = 'Visa dolda kapitel';
$string['chapterandsubchaptersdeleted'] = 'Kapitel "{$a->title}" och dess underkapitel  {$a->subchapters} har tagits bort.';
$string['chapterdeleted'] = 'Kapitel "{$a->title}" har tagits bort.';
$string['chapters'] = 'Kapitel';
$string['chaptertitle'] = 'Kapitelrubrik';
$string['confchapterdelete'] = 'Är du säker på att vill ta bort det här kapitlet?';
$string['confchapterdeleteall'] = 'Är du säker på att vill ta bort det här kapitlet och alla dess underkapitel?';
$string['content'] = 'Innehåll';
$string['customtitles'] = 'Anpassade rubriker';
$string['customtitles_help'] = 'Normalt visas kapitelrubriken i innehållsförteckningen och som rubrik ovanför innehållet. Om kryssrutan för att kunna anpassa titlar är markerad, visas kapitelrubriken inte som rubrik ovanför innehållet.
En annan titel (kanske längre än kapitelrubriken) kan anges som en del av innehållet.';
$string['deletechapter'] = 'Ta bort kapitel "{$a}"';
$string['editchapter'] = 'Redigera kapitel "{$a}"';
$string['editingchapter'] = 'Redigerar kapitel';
$string['errorchapter'] = 'Fel vid läsning av kapitel';
$string['eventchaptercreated'] = 'Kapitel skapat';
$string['eventchapterdeleted'] = 'Kapitel borttaget';
$string['eventchapterupdated'] = 'Kapitel uppdaterat';
$string['eventchapterviewed'] = 'Kapitel visat';
$string['hidechapter'] = 'Dölj kapitel "{$a}"';
$string['indicator:cognitivedepth'] = 'Bok kognitiv';
$string['indicator:cognitivedepth_help'] = 'Denna indikator är baserad på det kognitiva djup som studenten nått i en Bok-resurs.';
$string['indicator:cognitivedepthdef'] = 'Bok kognitiv';
$string['indicator:cognitivedepthdef_help'] = 'Deltagaren har nått denna procentandel av det kognitiva engagemang som erbjuds av Bokaktiviteterna under detta analysintervall (Nivåer = Ingen visning, Visa)';
$string['indicator:socialbreadth'] = 'Bok socialt';
$string['indicator:socialbreadth_help'] = 'Denna indikator baseras på den sociala bredd användaren nått i en Bok-resurs.';
$string['indicator:socialbreadthdef'] = 'Bok socialt';
$string['indicator:socialbreadthdef_help'] = 'Deltagaren har nått denna procentandel av det sociala engagemanget som erbjuds av Bokaktiviteterna under detta analysintervall (Nivåer = Inget deltagande, Deltagaren ensamt)';
$string['modulename'] = 'Bok';
$string['modulename_help'] = 'Bok-modulen möjliggör för en lärare att skapa en flersidig resurs i ett bok-liknande format inklusive kapitel och underkapitel. Böcker kan innehålla media och text och är användbara för att visa långa passager av information som kan delas in i sektioner. En bok kan t.ex. användas
* För att visa litteratur för enskilda studiemoment
* Som en personalhandbok
* Som en portfölj/presentation av studentarbeten';
$string['modulenameplural'] = 'Böcker';
$string['movechapterdown'] = 'Flytta kapitel ner "{$a}"';
$string['movechapterup'] = 'Flytta kapitel upp "{$a}"';
$string['navexit'] = 'Lämna bok';
$string['navimages'] = 'Bilder';
$string['navnext'] = 'Nästa';
$string['navnexttitle'] = 'Nästa: {$a}';
$string['navoptions'] = 'Tillgängliga alternativ för navigeringslänkar';
$string['navoptions_desc'] = 'Alternativ för visning av navigering på boksidor';
$string['navprev'] = 'Föregående';
$string['navprevtitle'] = 'Föregående: {$a}';
$string['navstyle'] = 'Navigeringssätt';
$string['navstyle_help'] = '* Bilder - ikoner (bilder) används för navigering
* Text - Kapiteltitlar används för navigering';
$string['navtext'] = 'Text';
$string['navtoc'] = 'Endast innehållsförteckning';
$string['nocontent'] = 'Inget innehåll har lagts till den här boken än.';
$string['numbering'] = 'Kapitelformatering';
$string['numbering0'] = 'Ingen';
$string['numbering1'] = 'Numrerade';
$string['numbering2'] = 'Punkter';
$string['numbering3'] = 'Indragna';
$string['numbering_help'] = '* Ingen - Kapitel- och underkapitelrubriker har ingen formatering
* Numrerade - Kapitel- och underkapitelrubriker är numrerade 1, 1.1, 1.2, 2, ...
* Punkter - Underkapitel är indragna och visas med punkter i innehållsförteckningen
* Indragna - Underkapitel är indragna i innehållsförteckningen';
$string['numberingoptions'] = 'Tillgängliga alternativ för kapitelformatering';
$string['numberingoptions_desc'] = 'Alternativ för visning av kapitel och underkapitel i innehållsförteckningen';
$string['page-mod-book-x'] = 'Valfri bokmodulsida';
$string['pluginadministration'] = 'Bok administration';
$string['pluginname'] = 'Bok';
$string['previouschapter'] = 'Föregående kapitel';
$string['privacy:metadata'] = 'Modulen Bok sparar inte personuppgifter.';
$string['removeallbooktags'] = 'Ta bort alla boketiketter';
$string['search:activity'] = 'Bok - resursinformation';
$string['search:chapter'] = 'Bok - kapitel';
$string['showchapter'] = 'Visa kapitel "{$a}"';
$string['subchapter'] = 'Underkapitel';
$string['subchapternotice'] = '(Endast tillgängligt när det första kapitlet har skapats)';
$string['subplugintype_booktool'] = 'Bokverktyg';
$string['subplugintype_booktool_plural'] = 'Bokverktyg';
$string['tagarea_book_chapters'] = 'Kapitel';
$string['tagsdeleted'] = 'Boketiketter har tagits bort';
$string['toc'] = 'Innehållsförteckning';
$string['top'] = 'upp';
