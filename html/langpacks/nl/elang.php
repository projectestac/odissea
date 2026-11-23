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
 * Strings for component 'elang', language 'nl', version '4.5'.
 *
 * @package     elang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedlanguages'] = 'Toegestane inhoudstalen';
$string['allowedlanguages_desc'] = 'De inhoudstalen die worden aangeboden bij het aanmaken of bewerken van een videodictee. Selecteer er geen om de volledige talenlijst aan te bieden. Een activiteit behoudt de opgeslagen taal, ook als je die hier later verwijdert.';
$string['allowtranscriptdownload'] = 'Transcript downloaden door deelnemers';
$string['allowtranscriptdownload_help'] = 'Als dit aanstaat, kunnen deelnemers het werkblad van het transcript downloaden, met elk invulveld verborgen, als PDF, Word, OpenDocument of tekst.

Standaard staat het uit. Onderwijzend personeel met rechten kan het transcript altijd downloaden, wat deze instelling ook is.';
$string['allowtranscriptdownload_label'] = 'Deelnemers mogen het werkblad downloaden';
$string['completiondetail_completionfinishattempt'] = 'Een poging afronden';
$string['completionfinishattempt'] = 'Deelnemer moet een poging afronden';
$string['cuepausemode'] = 'Pauzeren aan het einde van een ondertitel';
$string['cuepausemode_auto'] = 'Automatisch';
$string['cuepausemode_help'] = 'Of het medium aan het einde van een ondertitel pauzeert.

* Automatisch — het afspelen gaat door en pauzeert alleen aan het einde van een ondertitel zolang aan die ondertitel gewerkt wordt, dus nadat erop of op een van de invulvelden is geklikt, of wanneer de toetsenbordfocus in een ervan staat.
* Pauzeren bij elke onbeantwoorde ondertitel — het afspelen pauzeert aan het einde van elke ondertitel die nog een leeg invulveld heeft, en wacht tot je verdergaat.
* Nooit pauzeren — het afspelen loopt door tot het einde van het medium.

Geen van de eerste twee pauzeert bij een ondertitel waarvan alle invulvelden ingevuld zijn: dat is af werk, en daar pauzeren zou om een toetsaanslag vragen die niets doet. Daardoor pauzeert een tweede ronde door een oefening ook alleen waar nog iets ontbreekt.';
$string['cuepausemode_nostop'] = 'Nooit pauzeren';
$string['cuepausemode_stop'] = 'Pauzeren bij elke onbeantwoorde ondertitel';
$string['editcontent'] = 'Inhoud bewerken';
$string['editor_addcue'] = 'Segment toevoegen';
$string['editor_addgap'] = 'Invulveld maken van de selectie';
$string['editor_addhint'] = 'Hint toevoegen';
$string['editor_addvariant'] = 'Variant toevoegen';
$string['editor_advanced'] = 'Geavanceerde instellingen';
$string['editor_algoexact'] = 'Exacte overeenkomst';
$string['editor_algorithm'] = 'Antwoordvergelijking';
$string['editor_algowordrecognized'] = 'Vergelijkbare antwoorden accepteren';
$string['editor_answers'] = 'Geaccepteerde varianten';
$string['editor_autosaved'] = 'Alle wijzigingen zijn opgeslagen.';
$string['editor_autosaveerror'] = 'Automatisch opslaan is mislukt — gebruik Opslaan om het opnieuw te proberen.';
$string['editor_captureend'] = 'Eindtijd overnemen uit het afspelen';
$string['editor_capturestart'] = 'Starttijd overnemen uit het afspelen';
$string['editor_cueactions'] = 'Acties voor het segment';
$string['editor_cuecount'] = 'Segmenten: {$a}';
$string['editor_currentmedia'] = 'Huidig medium:';
$string['editor_deletecue'] = 'Segment verwijderen';
$string['editor_deletegap'] = 'Invulveld verwijderen';
$string['editor_emptytranscript'] = '(nog geen tekst)';
$string['editor_endtime'] = 'Eindtijd';
$string['editor_formatsubrip'] = 'SubRip (.srt)';
$string['editor_formatwebvtt'] = 'WebVTT (.vtt)';
$string['editor_gapcount'] = 'Invulvelden: {$a}';
$string['editor_gaprange'] = 'Positie van het invulveld (tekens)';
$string['editor_gotomedia'] = 'Naar Media';
$string['editor_heading'] = 'Ondertitels en invulvelden bewerken';
$string['editor_hints'] = 'Hints';
$string['editor_hinttext'] = 'Hinttekst';
$string['editor_hinttype'] = 'Type';
$string['editor_hinttype_firstletter'] = 'Eerste letter';
$string['editor_hinttype_partial'] = 'Gedeeltelijk';
$string['editor_hinttype_solution'] = 'Oplossing';
$string['editor_hinttype_text'] = 'Vrije tekst';
$string['editor_hinttype_translation'] = 'Vertaling';
$string['editor_hinttype_wordlength'] = 'Woordlengte';
$string['editor_import'] = 'Ondertitels importeren';
$string['editor_importappend'] = 'Toevoegen aan bestaande segmenten';
$string['editor_importapply'] = 'Importeren';
$string['editor_importcancel'] = 'Annuleren';
$string['editor_importcheck'] = 'Inhoud controleren';
$string['editor_importchecking'] = 'Bezig met controleren…';
$string['editor_importcuecount'] = 'Gevonden segmenten';
$string['editor_importduration'] = 'Duur';
$string['editor_importedcues'] = 'Geïmporteerde segmenten: {$a}';
$string['editor_importfilehint'] = 'Kies een WebVTT- (.vtt) of SubRip-bestand (.srt) met ondertitels.';
$string['editor_importformat'] = 'Formaat';
$string['editor_importfromfile'] = 'Bestand uploaden';
$string['editor_importfromtext'] = 'Tekst plakken';
$string['editor_importgapcount'] = 'Gevonden invulvelden';
$string['editor_importhint'] = 'Plak WebVTT- of SubRip-inhoud en importeer die als segmenten.';
$string['editor_importparseerror'] = 'Deze inhoud kon niet als WebVTT of SubRip worden gelezen.';
$string['editor_importpastedtext'] = 'Geplakte tekst';
$string['editor_importreaderror'] = 'Het bestand kon niet worden gelezen.';
$string['editor_importready'] = 'Klaar om te importeren';
$string['editor_importreplace'] = 'Alle segmenten vervangen';
$string['editor_importreplacedcues'] = 'Segmenten vervangen; nieuw geïmporteerd: {$a}';
$string['editor_importsource'] = 'Bron';
$string['editor_importsummary'] = 'Wat er gevonden is';
$string['editor_importtoolarge'] = 'Dit bestand is {$a->size}; de import accepteert maximaal {$a->max}.';
$string['editor_importwrongtype'] = 'Kies een ondertitelbestand ({$a}).';
$string['editor_insertafter'] = 'Segment erna invoegen';
$string['editor_insertbefore'] = 'Segment ervoor invoegen';
$string['editor_invalidtime'] = 'Voer een tijd in als mm:ss.SSS, bijvoorbeeld 01:05.400.';
$string['editor_linkurl'] = 'Link om op te zoeken';
$string['editor_linkurl_help'] = 'Wordt naast het invulveld getoond als plek om het woord op te zoeken. Laat leeg als je er geen wilt aanbieden.';
$string['editor_loaderror'] = 'De editor kon niet worden geladen. Laad de pagina opnieuw.';
$string['editor_loading'] = 'De editor wordt geladen…';
$string['editor_maxlength'] = 'Maximale lengte';
$string['editor_maxlength_help'] = 'Beperkt hoeveel een deelnemer kan typen. 0 betekent geen limiet.';
$string['editor_media'] = 'Media';
$string['editor_mediafile'] = 'Geüpload bestand';
$string['editor_mediakind'] = 'Type medium';
$string['editor_medianone'] = 'Geen';
$string['editor_mediaprovider'] = 'Aanbieder';
$string['editor_mediaproviderref'] = 'Verwijzing van de aanbieder';
$string['editor_mediaproviderrefhint'] = 'Video-ID of link in een gangbare vorm (bijv. youtu.be/…).';
$string['editor_mediasaved'] = 'Medium opgeslagen.';
$string['editor_mediaurl'] = 'Directe media-URL';
$string['editor_nocues'] = 'Nog geen segmenten. Voeg er een toe of importeer ondertitels.';
$string['editor_nocueselected'] = 'Kies een segment uit de lijst om het te bewerken.';
$string['editor_nocuesmatch'] = 'Geen enkel segment komt overeen met deze zoekopdracht.';
$string['editor_nogaps'] = 'Geen invulvelden';
$string['editor_nomedia'] = 'geen';
$string['editor_nomedianotice'] = 'Voeg eerst het video- of audiobestand toe op het tabblad Media. Ondertitels worden op het medium getimed, dus de editor heeft er een nodig voordat je met segmenten en invulvelden kunt werken.';
$string['editor_novideotrack'] = 'Deze browser kan het videospoor van dit medium niet decoderen (alleen het geluid speelt af); deelnemers zouden een zwart beeld zien. Codeer het bestand opnieuw als H.264/MP4 (bijvoorbeeld met ffmpeg of HandBrake) en upload het opnieuw.';
$string['editor_onboardinggaps'] = 'Selecteer een woord in een segment en maak er een invulveld van.';
$string['editor_onboardingimport'] = 'Importeer WebVTT- of SubRip-ondertitels, of voeg segmenten met de hand toe.';
$string['editor_onboardingintro'] = 'Maak een oefening in drie stappen:';
$string['editor_onboardingmedia'] = 'Kies een medium (upload, URL of aanbieder).';
$string['editor_onboardingtitle'] = 'Begin met je oefening';
$string['editor_onlywarnings'] = 'Alleen segmenten met waarschuwingen';
$string['editor_parsegaps'] = 'Markeringen voor invulvelden herkennen: [woord] maakt een invulveld met hints, {woord} een zonder.';
$string['editor_penalty'] = 'Aftrek';
$string['editor_poster'] = 'Posterafbeelding';
$string['editor_preview'] = 'Voorbeeld voor de deelnemer';
$string['editor_publish'] = 'Publiceren';
$string['editor_published'] = 'Versie gepubliceerd.';
$string['editor_removehint'] = 'Hint verwijderen';
$string['editor_removevariant'] = 'Verwijderen';
$string['editor_ruleapplied'] = '%count% invulvelden aangemaakt op basis van de regel.';
$string['editor_ruleapply'] = '%count% invulvelden toepassen';
$string['editor_ruleerror'] = 'De invulvelden konden niet worden aangemaakt.';
$string['editor_ruleeverynth'] = 'Elk n-de woord';
$string['editor_rulefound'] = 'De regel heeft %count% invulvelden gevonden.';
$string['editor_rulegenerate'] = 'Invulvelden aanmaken';
$string['editor_ruleinterval'] = 'Interval (n)';
$string['editor_ruletype'] = 'Regel voor invulvelden';
$string['editor_rulewordlist'] = 'Woorden om te verbergen';
$string['editor_rulewords'] = 'Woordenlijst';
$string['editor_save'] = 'Concept opslaan';
$string['editor_saved'] = 'Concept opgeslagen.';
$string['editor_saveerror'] = 'Het concept kon niet worden opgeslagen.';
$string['editor_savemedia'] = 'Medium opslaan';
$string['editor_saving'] = 'Bezig met opslaan…';
$string['editor_searchcues'] = 'Segmenten doorzoeken';
$string['editor_selecttext'] = 'Selecteer eerst het woord dat in het transcript verborgen moet worden.';
$string['editor_solution'] = 'Oplossing';
$string['editor_starttime'] = 'Starttijd';
$string['editor_transcript'] = 'Transcript';
$string['editor_unsaved'] = 'Niet-opgeslagen wijzigingen';
$string['editor_uploadmedia'] = 'Mediabestanden uploaden';
$string['editor_variantisregex'] = '{$a} als reguliere expressie behandelen';
$string['editor_variantmatching'] = 'Hoe de geaccepteerde varianten worden vergeleken';
$string['editor_warnemptysolution'] = 'Een invulveld zonder oplossing';
$string['editor_warnnotranscript'] = 'Geen tekst';
$string['editor_warntiming'] = 'Het einde ligt niet na het begin';
$string['editor_waveform'] = 'Geluidsgolfvorm';
$string['elang:addinstance'] = 'Een nieuw videodictee toevoegen';
$string['elang:attempt'] = 'Een videodictee maken';
$string['elang:deleteattempts'] = 'Pogingen van deelnemers verwijderen';
$string['elang:exportreports'] = 'Rapporten met persoonsgegevens exporteren';
$string['elang:exportsolution'] = 'Het volledige transcript met oplossingen exporteren';
$string['elang:exporttranscript'] = 'Het werkblad als document exporteren';
$string['elang:manage'] = 'Oefeninhoud aanmaken en bewerken';
$string['elang:useregex'] = 'Reguliere expressies gebruiken in geaccepteerde antwoorden';
$string['elang:view'] = 'Een videodictee bekijken';
$string['elang:viewreports'] = 'Rapporten van deelnemers bekijken';
$string['error_attemptnotinprogress'] = 'Deze poging loopt niet meer.';
$string['error_couldnotobtainlock'] = 'Er kon geen vergrendeling voor deze bewerking worden verkregen. Probeer het opnieuw.';
$string['error_draftrevisionmismatch'] = 'Dit concept is gewijzigd sinds je het hebt geladen. Laad het opnieuw en probeer het nog eens.';
$string['error_duplicatecuekey'] = 'Twee segmenten delen de sleutel «{$a}»; elk segment heeft een unieke sleutel nodig.';
$string['error_duplicategapkey'] = 'Twee invulvelden in hetzelfde segment delen de sleutel «{$a}»; elk invulveld heeft een unieke sleutel nodig.';
$string['error_duplicatehintlevel'] = 'Een invulveld heeft twee hints op niveau {$a}; elk niveau moet uniek zijn.';
$string['error_gapnotinattemptversion'] = 'Dit invulveld hoort niet bij de oefeningsversie van deze poging.';
$string['error_importnocues'] = 'Er konden geen ondertitels uit deze inhoud worden gelezen. Een WebVTT- of SubRip-bestand heeft boven elke ondertitel een tijdregel zoals 00:00:01.000 --> 00:00:04.000.';
$string['error_importnotutf8'] = 'Dit bestand is geen geldige UTF-8. Het is waarschijnlijk opgeslagen in een oudere codering — open het in een teksteditor en sla het opnieuw op als UTF-8.';
$string['error_importtoolarge'] = 'Dit bestand is {$a->size}; de import accepteert maximaal {$a->max}. Een ondertitelbestand van een lesopname is veel kleiner, dus dit is er waarschijnlijk geen.';
$string['error_importtoomanycues'] = 'Dit bestand bevat {$a->count} ondertitels; de import accepteert er maximaal {$a->max}.';
$string['error_invalidcuepausemode'] = 'Kies een van de aangeboden opties voor het pauzeren aan het einde van een ondertitel.';
$string['error_invalidgradingalgorithm'] = 'Het beoordelingsalgoritme «{$a}» is niet exact of wordrecognized.';
$string['error_invalidhinttype'] = 'Het hinttype «{$a}» is geen van de toegestane types.';
$string['error_invalidisregex'] = 'De regex-markering van een variant moet 0 of 1 zijn.';
$string['error_invalidmediakind'] = 'Het gekozen type medium is niet file, url of provider.';
$string['error_invalidpenalty'] = 'Een aftrek voor een hint moet tussen 0 en 1 liggen.';
$string['error_invalidproviderref'] = '«{$a}» is geen herkend video-ID of geen herkende link voor deze aanbieder.';
$string['error_invalidregexpattern'] = '«{$a}» is geen geldige reguliere expressie.';
$string['error_invalidsolutionavailability'] = 'Kies een van de aangeboden opties voor wanneer deelnemers het transcript met oplossingen mogen zien.';
$string['error_invalidsourceurl'] = 'Voer een volledig adres in dat begint met http:// of https://, of een YouTube- of Vimeo-link.';
$string['error_invalidsubtitleposition'] = 'Kies een van de aangeboden opties voor waar de ondertitels worden getoond.';
$string['error_invalidv1cuejson'] = 'Dit segment uit versie 1 kon niet worden verwerkt.';
$string['error_negativegapoffset'] = 'De positie en lengte van een invulveld mogen niet negatief zijn.';
$string['error_noaccesstoattempt'] = 'Je hebt geen toegang tot deze poging.';
$string['error_nomorehints'] = 'Er zijn geen verdere hints voor dit invulveld.';
$string['error_nopublishedversion'] = 'Deze oefening heeft nog geen gepubliceerde inhoud.';
$string['error_responsetoolong'] = 'Je antwoord is te lang. Het maximum voor dit invulveld is {$a} tekens.';
$string['error_solutionnotavailable'] = 'Het transcript met oplossingen is voor jou niet beschikbaar in deze activiteit.';
$string['error_staleattemptstate'] = 'Je weergave van deze poging is verouderd. Laad de huidige stand opnieuw en probeer het nog eens.';
$string['error_transcriptnotavailable'] = 'In deze activiteit is geen transcript beschikbaar om te downloaden.';
$string['error_unknowngaprule'] = 'Onbekend type regel voor invulvelden «{$a}».';
$string['error_unknownmediaprovider'] = '«{$a}» is geen van de ondersteunde media-aanbieders.';
$string['error_versionnotadraft'] = 'Alleen een versie met de status concept kan worden bewerkt.';
$string['error_versionnotfound'] = 'Deze versie van de oefening bestaat niet meer.';
$string['error_versionnotpublishable'] = 'Deze versie kan niet worden gepubliceerd: {$a}';
$string['export_audienceaftersubmission'] = 'Deelnemers kunnen dit downloaden zodra ze een poging hebben afgerond';
$string['export_audiencealways'] = 'Deelnemers kunnen dit op elk moment downloaden';
$string['export_audiencestaff'] = 'Alleen onderwijzend personeel met rechten — niet beschikbaar voor deelnemers';
$string['export_docx'] = 'Downloaden als Word (DOCX)';
$string['export_downloadpdf'] = 'PDF downloaden';
$string['export_heading'] = 'Transcript exporteren';
$string['export_intro'] = 'Download het transcript van deze oefening in verschillende formaten.';
$string['export_moreformats'] = 'Meer formaten';
$string['export_nocontent'] = 'Er is nog geen gepubliceerd transcript om te exporteren.';
$string['export_odt'] = 'Downloaden als OpenDocument (ODT)';
$string['export_pdf'] = 'Downloaden als PDF';
$string['export_solution'] = 'Transcript met oplossingen';
$string['export_solutionhint'] = 'De volledige tekst waarin de oplossing van elk invulveld zichtbaar is.';
$string['export_text'] = 'Downloaden als tekst';
$string['export_versionnote'] = 'Exports zijn gebaseerd op de nu gepubliceerde versie van deze oefening.';
$string['export_worksheet'] = 'Werkblad (invulvelden verborgen)';
$string['export_worksheethint'] = 'De tekst waarin elk invulveld verborgen is. Klaar om uit te delen als lesmateriaal.';
$string['exporttranscript'] = 'Transcript exporteren';
$string['filearea_media'] = 'Media';
$string['filearea_poster'] = 'Posterafbeelding';
$string['gradingheading'] = 'Beoordeling van antwoorden';
$string['import_badtiming'] = 'De tijdregel kon niet worden gelezen: {$a}';
$string['import_emptytranscript'] = 'Een segment zonder tekst is overgeslagen.';
$string['import_warnlinetoolong'] = 'Blok {$a->block} is overgeslagen: het bevat een regel van meer dan {$a->max} tekens, wat geen ondertitelregel is.';
$string['jarothreshold'] = 'Gelijkenisdrempel';
$string['jarothreshold_help'] = 'Voor invulvelden die op «Vergelijkbare antwoorden accepteren» staan, is dit de minimale Jaro-gelijkenis tussen het verwachte antwoord en het getypte antwoord. De waarde 1 vereist een exacte overeenkomst na de taalspecifieke normalisatie; lagere waarden accepteren steeds meer afwijkende spellingen.';
$string['jarothresholdrange'] = 'De drempel moet tussen 0 en 1 liggen.';
$string['language'] = 'Taal van de inhoud';
$string['language_help'] = 'Kies de taal van de oefeninhoud. Die bepaalt hoe antwoorden worden vergeleken, waaronder hoofdlettergebruik en transliteratie. Kies «Algemeen (niet opgegeven)» als er geen taalspecifieke verwerking moet worden toegepast. Nieuwe inhoudsversies beginnen met deze instelling.';
$string['language_none'] = 'Algemeen (niet opgegeven)';
$string['media_cuenote'] = 'Bestaande ondertitels en invulvelden blijven behouden als je het medium wijzigt. Hun tijden worden niet aangepast, controleer ze daarom daarna in de editor.';
$string['media_current'] = 'Huidig medium';
$string['media_heading'] = 'Media';
$string['media_intro'] = 'Kies de video of het geluid waarop deze oefening is gebaseerd. De ondertitels worden erop getimed, dus dit komt eerst.';
$string['media_none'] = 'Voor deze oefening is nog geen medium ingesteld.';
$string['media_othersource'] = 'Andere bron';
$string['media_providerhint'] = 'Herkende aanbieders: {$a}. Elk ander adres wordt gebruikt als directe media-URL.';
$string['media_sourceurl'] = 'Media-URL';
$string['media_sourceurl_help'] = 'Plak het adres van een video in plaats van een bestand te uploaden — een YouTube- of Vimeo-link, of het directe adres van een mediabestand.

Een adres dat je hier invoert, vervangt een geüpload bestand. Laat het leeg om de upload hierboven te gebruiken.

Een video van een aanbieder wordt in het frame van die aanbieder afgespeeld, dat de afspeeltijd niet doorgeeft. Zo\'n oefening toont de ondertitels altijd onder het medium en pauzeert nooit aan het einde van een ondertitel.

**Waar de gegevens heen gaan.** Een YouTube- of Vimeo-frame verbindt de browser van elke deelnemer met dat bedrijf, dat daarmee het IP-adres en de apparaatgegevens ontvangt. Standaard vraagt de oefening daar eerst toestemming voor. Heeft je instelling een eigen mediaserver — Opencast, Panopto, Kaltura of vergelijkbaar — plak dan het directe adres van het bestand daarvandaan: dat wordt als gewone media-URL behandeld, behoudt de ondertitelpositie en de pauze-instelling die je hebt gekozen, en er komt geen derde partij aan te pas.';
$string['migratev1_approvalheading'] = 'Gemigreerd, wacht op controle';
$string['migratev1_approvebutton'] = 'Deze migratie goedkeuren';
$string['migratev1_approved'] = 'Videodictee {$a} is als goedgekeurd gemarkeerd.';
$string['migratev1_colactivity'] = 'Activiteit';
$string['migratev1_colalgorithm'] = 'Beoordelingsalgoritme';
$string['migratev1_colcues'] = 'Segmenten';
$string['migratev1_colgaps'] = 'Invulvelden';
$string['migratev1_colissues'] = 'Problemen';
$string['migratev1_collearners'] = 'Deelnemers';
$string['migratev1_confirmdecommission'] = 'Hiermee worden de oude tabellen van versie 1 en elang.options ONHERROEPELIJK verwijderd. Dit kan niet ongedaan worden gemaakt. Doorgaan?';
$string['migratev1_confirmmigrate'] = 'Hiermee wordt een achtergrondtaak in de wachtrij gezet die voor elke hierboven genoemde activiteit nieuwe gegevens voor versie 2 schrijft. De tabellen van versie 1 en elang.options blijven ongemoeid. Doorgaan?';
$string['migratev1_decommissionblocked'] = 'Het verwijderen is nog geblokkeerd; zie de lijst hieronder.';
$string['migratev1_decommissionblockedintro'] = 'Het verwijderen is geblokkeerd totdat:';
$string['migratev1_decommissionbutton'] = 'Oude gegevens van versie 1 verwijderen';
$string['migratev1_decommissioned'] = 'De oude gegevens van versie 1 zijn verwijderd.';
$string['migratev1_decommissionheading'] = 'Gegevens van versie 1 buiten gebruik stellen';
$string['migratev1_decommissionready'] = 'Alle activiteiten van versie 1 zijn gemigreerd en goedgekeurd. De oude tabellen en elang.options kunnen nu worden verwijderd. Dit is onomkeerbaar.';
$string['migratev1_heading'] = 'Activiteiten van versie 1 migreren';
$string['migratev1_migratebutton'] = 'Deze activiteiten migreren';
$string['migratev1_noissues'] = 'Geen';
$string['migratev1_nonepending'] = 'Er wachten geen activiteiten van versie 1 op migratie.';
$string['migratev1_nonependingapproval'] = 'Er wachten geen gemigreerde activiteiten op controle.';
$string['migratev1_notablespresent'] = 'Op deze site zijn geen oude tabellen van versie 1 gevonden. Er valt niets te migreren.';
$string['migratev1_parseerrorcount'] = 'Segmenten die niet konden worden verwerkt: {$a}';
$string['migratev1_pendingheading'] = 'Nog niet gemigreerd';
$string['migratev1_queued'] = 'De migratietaak staat in de wachtrij. Ze wordt bij de volgende cron-ronde uitgevoerd, of meteen via admin/cli/adhoc_task.php --execute.';
$string['migratev1_verifiedclean'] = 'Gecontroleerd: de gemigreerde gegevens komen zonder afwijkingen overeen met de bron uit versie 1.';
$string['migratev1_verifieddiscrepancies'] = 'De controle heeft afwijkingen ten opzichte van de bron uit versie 1 gevonden: {$a}';
$string['migratev1_verifyfailed'] = 'Deze activiteit kon niet worden gecontroleerd: {$a}';
$string['modulename'] = 'Videodictee';
$string['modulename_help'] = 'Met de activiteit videodictee vullen deelnemers invulvelden in getimede ondertitels in terwijl ze naar een video kijken of luisteren.

Docenten importeren een WebVTT- of SubRip-ondertitelbestand, markeren woorden of uitdrukkingen als invulveld en stellen in hoe streng antwoorden worden vergeleken. Deelnemers werken het transcript segment voor segment door, vragen hints met puntenaftrek en krijgen meteen terugkoppeling.';
$string['modulenameplural'] = 'Videodictees';
$string['nav_exportshort'] = 'Exporteren';
$string['nav_media'] = 'Media';
$string['nav_reports'] = 'Pogingen';
$string['nav_subtitles'] = 'Ondertitels en invulvelden';
$string['noinstances'] = 'Er zijn geen videodictees in deze cursus.';
$string['overview_attempts'] = 'Pogingen';
$string['playbackheading'] = 'Afspelen en ondertitels';
$string['playbackoverlayhint'] = 'Een ondertitel over het beeld toont alleen de ondertitel die op dat moment speelt, dus het afspelen pauzeert altijd aan het einde van een ondertitel die nog invulvelden heeft. Hier valt niets te kiezen.';
$string['playbackproviderhint'] = 'Een YouTube- of Vimeo-video wordt door de aanbieder in een eigen frame afgespeeld, dat de afspeeltijd niet doorgeeft. Zo\'n oefening toont de ondertitels altijd onder het medium en pauzeert nooit aan het einde van een ondertitel, wat er hierboven ook gekozen is. Geüploade bestanden en directe media-URL\'s volgen beide instellingen wel.';
$string['player_check'] = 'Antwoord controleren';
$string['player_consentaccept'] = 'De video laden van {$a}';
$string['player_consentdetail'] = 'Bij het afspelen maakt je browser verbinding met {$a}. {$a} ontvangt je IP-adres en gegevens over je apparaat, en kan cookies lezen die eerder zijn geplaatst. Er wordt niets verstuurd totdat je ervoor kiest de video te laden.';
$string['player_consentheading'] = 'Deze video wordt aangeboden door {$a}';
$string['player_finish'] = 'Poging afronden';
$string['player_finished'] = 'Poging afgerond. Score: %score%%';
$string['player_finishincomplete'] = 'Nog lege invulvelden: {$a}. De poging toch afronden?';
$string['player_gaplabel'] = 'Invulveld %gap%';
$string['player_gaplink'] = 'Link openen';
$string['player_hint'] = 'Een hint tonen';
$string['player_loaderror'] = 'De oefening kon niet worden geladen. Laad de pagina opnieuw.';
$string['player_loading'] = 'De oefening wordt geladen…';
$string['player_nocontent'] = 'Er is nog geen oefeninhoud gepubliceerd. Probeer het later opnieuw.';
$string['player_novideotrack'] = 'Je browser kan het videospoor van dit medium niet tonen; het geluid speelt wel af. Laat het je docent weten.';
$string['player_outdatedattempt'] = 'Deze oefening is bijgewerkt sinds je aan deze poging begon. Je gaat verder met de eerdere inhoud; rond deze poging af om de volgende keer met de bijgewerkte oefening te werken.';
$string['player_progress'] = '{$a->done} van {$a->total} invulvelden beantwoord';
$string['player_ready'] = 'Oefening klaar.';
$string['player_scorelabel'] = 'Score: %score%%';
$string['player_stateaccepted'] = 'Geaccepteerd';
$string['player_statecorrect'] = 'Goed';
$string['player_statehinted'] = 'Hint gebruikt';
$string['player_stateincorrect'] = 'Fout';
$string['player_submitfailed'] = 'Je antwoord kon niet worden opgeslagen. Probeer het opnieuw.';
$string['player_transcriptheading'] = 'Transcript';
$string['pluginadministration'] = 'Beheer van het videodictee';
$string['pluginname'] = 'Videodictee';
$string['privacy_metadata_elang'] = 'Voor elke activiteit de vastlegging van wie de eenrichtingsmigratie van de 1.x-inhoud heeft goedgekeurd.';
$string['privacy_metadata_elang_attempt'] = 'Voor elke poging bij een oefening slaat de activiteit op wie die heeft gemaakt, wanneer, hoe ver die is gekomen en hoe die is beoordeeld.';
$string['privacy_metadata_elang_attempt_answeredgaps'] = 'Hoeveel invulvelden de deelnemer in deze poging heeft ingevuld.';
$string['privacy_metadata_elang_attempt_attemptnumber'] = 'Het volgnummer van deze poging voor de gebruiker en de activiteit.';
$string['privacy_metadata_elang_attempt_correctgaps'] = 'Hoeveel invulvelden in deze poging als goed zijn geaccepteerd.';
$string['privacy_metadata_elang_attempt_exactgaps'] = 'Hoeveel invulvelden in deze poging met een exacte overeenkomst zijn beantwoord.';
$string['privacy_metadata_elang_attempt_hintedgaps'] = 'Voor hoeveel invulvelden de deelnemer in deze poging een hint heeft gevraagd.';
$string['privacy_metadata_elang_attempt_score'] = 'De score die in deze poging is behaald.';
$string['privacy_metadata_elang_attempt_state'] = 'Of de poging loopt, is afgerond of is afgebroken.';
$string['privacy_metadata_elang_attempt_timefinish'] = 'Het tijdstip waarop de poging is afgerond.';
$string['privacy_metadata_elang_attempt_timemodified'] = 'Het tijdstip waarop de poging voor het laatst is bijgewerkt.';
$string['privacy_metadata_elang_attempt_timestart'] = 'Het tijdstip waarop de poging is begonnen.';
$string['privacy_metadata_elang_attempt_totalgaps'] = 'Het totale aantal invulvelden in de oefeningsversie van deze poging.';
$string['privacy_metadata_elang_attempt_userid'] = 'De id van de gebruiker die de poging heeft gemaakt.';
$string['privacy_metadata_elang_attempt_versionid'] = 'De oefeningsversie waarop deze poging is gemaakt.';
$string['privacy_metadata_elang_migrationapproveduserid'] = 'De gebruiker die de migratie van deze activiteit vanuit mod_elang 1.x heeft goedgekeurd. Wordt bewaard zodat de goedkeuring controleerbaar blijft.';
$string['privacy_metadata_elang_response'] = 'Voor elk invulveld dat een deelnemer binnen een poging beantwoordt, slaat de activiteit de antwoordtekst op en hoe die is beoordeeld.';
$string['privacy_metadata_elang_response_accepted'] = 'Of het antwoord voor dit invulveld als goed is geaccepteerd.';
$string['privacy_metadata_elang_response_hintlevel'] = 'Het hoogste hintniveau dat de deelnemer voor dit invulveld te zien heeft gekregen.';
$string['privacy_metadata_elang_response_responsetext'] = 'De tekst die de deelnemer voor dit invulveld heeft getypt.';
$string['privacy_metadata_elang_response_resultstate'] = 'De classificatie die de beoordelaar aan dit antwoord heeft gegeven (exact, woord herkend, fout of leeg).';
$string['privacy_metadata_elang_response_score'] = 'De punten die dit antwoord heeft opgeleverd, na een eventuele aftrek voor een hint.';
$string['privacy_metadata_elang_response_timecreated'] = 'Het tijdstip waarop dit antwoord voor het eerst is ingediend.';
$string['privacy_metadata_elang_response_timemodified'] = 'Het tijdstip waarop dit antwoord voor het laatst is bijgewerkt.';
$string['privacy_metadata_elang_response_tries'] = 'Hoe vaak de deelnemer een antwoord voor dit invulveld heeft ingediend.';
$string['privacy_metadata_elang_version'] = 'Voor elke inhoudsversie slaat de activiteit op welke gebruiker die het laatst heeft gewijzigd.';
$string['privacy_metadata_elang_version_usermodified'] = 'De gebruiker die deze inhoudsversie het laatst heeft gewijzigd. Wordt bewaard om te kunnen nagaan wie de oefeninhoud heeft bewerkt.';
$string['privacy_provider_externallink'] = 'Als een oefening op een YouTube- of Vimeo-video is gebaseerd, maakt de browser van de deelnemer bij het openen verbinding met die aanbieder. De plug-in verstuurt zelf niets, maar de verbinding wordt door de activiteit veroorzaakt. Of dit überhaupt gebeurt, hangt af van de site-instelling voor toestemming voor aanbieders en van de instemming van de deelnemer.';
$string['privacy_provider_ipaddress'] = 'Het IP-adres waarvandaan de browser van de deelnemer verbinding maakt.';
$string['privacy_provider_useragent'] = 'De browser- en apparaatgegevens die de browser verstuurt.';
$string['provider_vimeo'] = 'Vimeo';
$string['provider_youtube'] = 'YouTube';
$string['providerconsent'] = 'Vragen voordat YouTube of Vimeo wordt ingesloten';
$string['providerconsent_desc'] = 'Oefeningen die op een YouTube- of Vimeo-video zijn gebaseerd, tonen een melding in plaats van de video en sluiten die pas in nadat de deelnemer instemt. Zonder dit ontvangt de aanbieder het IP-adres en de browsergegevens van de deelnemer zodra de pagina opent — voordat iemand op afspelen drukt. Zet dit alleen uit als je instelling deze toestemming elders verkrijgt.';
$string['report_actions'] = 'Acties';
$string['report_answered'] = 'Beantwoord';
$string['report_attemptnumber'] = 'Poging';
$string['report_back'] = 'Terug naar alle pogingen';
$string['report_correct'] = 'Goed';
$string['report_delete'] = 'Verwijderen';
$string['report_deleteconfirm'] = 'Deze poging en al haar antwoorden definitief verwijderen? Dit kan niet ongedaan worden gemaakt.';
$string['report_deleted'] = 'De poging is verwijderd.';
$string['report_exact'] = 'Exact';
$string['report_export'] = 'Exporteren';
$string['report_filterany'] = 'Alle';
$string['report_filterapply'] = 'Filters toepassen';
$string['report_filterattempt'] = 'Nummer van de poging';
$string['report_filterfrom'] = 'Begonnen vanaf';
$string['report_filterrangeerror'] = 'Het einde van de periode ligt voor het begin ervan.';
$string['report_filterreset'] = 'Filters wissen';
$string['report_filterstate'] = 'Status';
$string['report_filterto'] = 'Begonnen tot en met';
$string['report_filteruser'] = 'Deelnemer';
$string['report_finished'] = 'Afgerond';
$string['report_heading'] = 'Pogingen';
$string['report_hinted'] = 'Met hint';
$string['report_hints'] = 'Hintniveau';
$string['report_kpianswered'] = 'Beantwoord';
$string['report_kpiattempts'] = 'Getoonde pogingen';
$string['report_kpiaverage'] = 'Gemiddelde score (afgerond)';
$string['report_kpicorrect'] = 'Geaccepteerd';
$string['report_kpiexact'] = 'Exact goed';
$string['report_kpifinished'] = 'Afgerond';
$string['report_kpihinted'] = 'Hebben een hint gebruikt';
$string['report_kpihintedgaps'] = 'Hadden een hint nodig';
$string['report_noattempts'] = 'Nog geen pogingen.';
$string['report_nogaps'] = 'De versie waarop deze poging is gemaakt, heeft geen invulvelden.';
$string['report_nomatchingattempts'] = 'Geen enkele poging komt overeen met deze filters.';
$string['report_noresponse'] = 'Niet beantwoord';
$string['report_response'] = 'Antwoord';
$string['report_result'] = 'Resultaat';
$string['report_result_empty'] = 'Leeg';
$string['report_result_exact'] = 'Exact';
$string['report_result_incorrect'] = 'Fout';
$string['report_result_none'] = '—';
$string['report_result_wordrecognized'] = 'Herkend';
$string['report_score'] = 'Score';
$string['report_solution'] = 'Oplossing';
$string['report_started'] = 'Begonnen';
$string['report_state'] = 'Status';
$string['report_state_abandoned'] = 'Afgebroken';
$string['report_state_finished'] = 'Afgerond';
$string['report_state_inprogress'] = 'Loopt';
$string['report_transcript'] = 'Transcript';
$string['report_tries'] = 'Antwoordpogingen';
$string['report_user'] = 'Deelnemer';
$string['report_view'] = 'Bekijken';
$string['reports'] = 'Rapporten';
$string['resetattempts'] = 'Alle pogingen en antwoorden van deelnemers verwijderen';
$string['solutionavailability'] = 'Transcript met oplossingen voor deelnemers';
$string['solutionavailability_aftersubmission'] = 'Nadat de poging is afgerond';
$string['solutionavailability_always'] = 'Op elk moment';
$string['solutionavailability_help'] = 'Wanneer deelnemers het volledige transcript met de oplossing van elk invulveld mogen downloaden.

* Nooit — alleen docenten kunnen het downloaden.
* Nadat de poging is afgerond — een deelnemer mag het downloaden zodra die een poging in deze activiteit heeft afgerond.
* Op elk moment — een deelnemer mag het ook vóór het beantwoorden downloaden.

Onderwijzend personeel met rechten kan het altijd downloaden, wat deze instelling ook is.';
$string['solutionavailability_never'] = 'Nooit';
$string['subplugintype_elangscript'] = 'Schriftafhandelaar';
$string['subplugintype_elangscript_plural'] = 'Schriftafhandelaars';
$string['subtitleposition'] = 'Weergave van de ondertitels';
$string['subtitleposition_below'] = 'Onder het medium';
$string['subtitleposition_help'] = 'Waar de interactieve ondertitels worden getoond.

* Onder het medium — het hele transcript staat onder het medium in een eigen scrolgebied en volgt het afspelen.
* In de video, onderaan of bovenaan — alleen de ondertitel die op dat moment speelt, wordt over het medium getekend.

Een medium met alleen geluid heeft geen beeld om op te tekenen en gebruikt daarom altijd de weergave onder het medium. De instelling zelf blijft bewaard en geldt weer zodra de activiteit een video gebruikt.';
$string['subtitleposition_overlaybottom'] = 'In de video — onderaan';
$string['subtitleposition_overlaytop'] = 'In de video — bovenaan';
$string['task_migratev1activities'] = 'Activiteiten van versie 1 migreren';
$string['transcriptheading'] = 'Transcript voor deelnemers';
$string['validate_cueafterend'] = '{$a->where}: eindigt op {$a->endtime} ms, na het medium ({$a->duration} ms). Het afspelen kan daar nooit komen.';
$string['validate_cueendbeforestart'] = '{$a}: het einde ligt niet na het begin.';
$string['validate_cuewhere'] = 'Segment {$a->sortorder} ({$a->cuekey})';
$string['validate_emptysolution'] = 'De oplossing van {$a} is leeg.';
$string['validate_hintlevels'] = 'De hintniveaus van {$a} vormen geen aaneengesloten reeks die bij 1 begint.';
$string['validate_negativetime'] = '{$a}: de starttijd ligt voor het begin van de opname.';
$string['validate_nocues'] = 'De versie heeft geen segmenten.';
$string['validate_nogaps'] = 'De versie heeft geen invulvelden om te beantwoorden.';
$string['validate_nonpositivelength'] = 'De lengte in tekens van {$a} moet positief zijn.';
$string['validate_rangeoutside'] = 'Het tekenbereik van {$a} ligt buiten het bijbehorende transcript.';
$string['validate_rangeoverlap'] = 'Het tekenbereik van {$a} overlapt met een ander invulveld.';
$string['validate_unknownalgorithm'] = 'Het beoordelingsalgoritme «{$a->algorithm}» van {$a->where} wordt niet herkend.';
$string['validate_where'] = 'invulveld {$a->gapkey} in segment {$a->cuekey}';
$string['verify_algorithmmismatch'] = 'Invulveld {$a->gapkey}: het beoordelingsalgoritme is «{$a->actual}», verwacht werd «{$a->expected}».';
$string['verify_attemptcount'] = 'Het aantal gemigreerde pogingen is {$a->actual}, verwacht werden {$a->expected} verschillende deelnemers uit 1.x.';
$string['verify_jarothreshold'] = 'De drempel voor antwoordvergelijking is {$a->actual}, verwacht werd {$a->expected}.';
$string['verify_missingattempt'] = 'Gebruiker {$a}: er werd een gemigreerde poging verwacht, maar geen gevonden.';
$string['verify_missingcue'] = 'Segment {$a}: het gemigreerde segment ontbreekt.';
$string['verify_missinggap'] = 'Invulveld {$a}: het gemigreerde invulveld ontbreekt.';
$string['verify_missinghint'] = 'Invulveld {$a}: versie 1 stond hier hulp toe, maar er is geen hint gemigreerd.';
$string['verify_orphancue'] = 'Segment {$a}: er is geen bijbehorend segment uit versie 1 gevonden.';
$string['verify_orphangap'] = 'Invulveld {$a}: er is geen bijbehorend invulveld uit versie 1 gevonden.';
$string['verify_rangemismatch'] = 'Invulveld {$a}: het tekenbereik komt niet overeen met de bron uit versie 1.';
$string['verify_responsecount'] = 'Gebruiker {$a->userid}: het aantal gemigreerde antwoorden is {$a->actual}, verwacht werd {$a->expected}.';
$string['verify_solutionmismatch'] = 'Invulveld {$a->gapkey}: de oplossing is «{$a->actual}», verwacht werd «{$a->expected}».';
$string['verify_transcriptmismatch'] = 'Segment {$a}: het transcript komt niet overeen met de bron uit versie 1.';
$string['verify_unexpectedhint'] = 'Invulveld {$a}: versie 1 stond hier geen hulp toe, maar er is een hint gemigreerd.';
