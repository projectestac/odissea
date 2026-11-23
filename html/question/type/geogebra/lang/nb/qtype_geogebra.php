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
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'Legg til begrensninger (vilkår) til variabler.';
$string['addmorevarblanks'] = 'Mellomrom for {no} flere variabler';
$string['answerinvalid'] = 'Svarstrengen i tilbakemeldingen er ugyldig. Dette bør ikke skje.';
$string['answermissing'] = 'Svaret i tilbakemeldingen mangler. Sannsynligvis er ikke JavaScript aktivert i nettleseren, eller en ukjent feil kan ha oppstått.';
$string['answervar'] = 'Variabler for automatisk vurdering';
$string['answervar_help'] = 'For automatisk vurdering: Et navn på en boolsk variabel i GeoGebra som er «true» dersom eleven har løst oppgaven (delvis). Denne variabelen summerer opp alle svarandeler for alle boolske variabler. Spørsmålet er riktig om der finnes kombinasjoner av svarandeler som er større enn 100 %. Der bør være minst én kombinasjon av svarandeler der summen overstiger 100 %. La denne variabelen være blank for manuell vurdering.';
$string['applet_advanced_settings'] = 'Avanserte innstillinger...';
$string['constraints'] = 'Begrensninger (vilkår)';
$string['constraints_help'] = 'Er der noen begrensninger for variable, slik som a < b, som kan defineres med innstillingene på glidere? Disse må være adskilte med komma. Eksempler på lovlige vilkår er: <, <=, >, >=. Dersom du har bruk for en likhet (likning) må du bruke den samme variabeIen når du lager arbeidsarket i GeoGebra. Det er ikke mulig å bruke dynamiske grenser, som min og maks for glidere.';
$string['constraintswrongortoohard'] = '{$a->inequalities} are feil eller for vanskelig. Vi prøvde {$a->tries} ganger i {$a->time} sekunder. Kanskje må vi bruke en bedre metode i fremtiden...';
$string['dragndrop'] = 'Dra og slipp en GeoGebra-fil hvor som helst på applet-seksjonen til GeoGebra';
$string['enable_label_drags'] = 'Tillat flytting av etiketter';
$string['enable_right_click'] = 'Tillat høgreklikk, zooming og redigering frå tastaturet';
$string['enable_shift_drag_zoom'] = 'Tillat skift og dra og zoom';
$string['feedback'] = 'Tilbakemelding når variabelen er riktig';
$string['feedback_help'] = 'Tilbakemeldingen er automatisk basert på navnet på variabelen i GeoGebra-fila.';
$string['geogebraapplet'] = 'GeoGebra-applet';
$string['getvars'] = 'Hent variabler som kan få vilkårlige verdier fra applet';
$string['ggbfilemissing'] = 'Base64-strengen i svaret mangler. Sannsynligvis er ikke JavaScript aktivert i nettleseren, eller en ukjent feil kan ha oppstått.';
$string['ggbturl'] = 'URL eller ID for arbeidsarket i GeoGebra';
$string['ggbturl_help'] = 'Du kan enter bruke delingsknappen i GeoGebra og kopiere og lime linken, eller du kan bruke lagringsstedet i GeoGebra. Appleten og parameterne blir lagret i databasen. Appleten vil ikke bli lastet på ny fra GeoGebra med mindre det blir spurt etter dette. Det er også mulig å bare oppgi ID-en eller delingsnøkkelen til appleten.';
$string['ggbxmlmissing'] = 'XML-strengen i svaret mangler. Sannsynligvis er ikke JavaScript aktivert i nettleseren, eller en ukjent feil oppstod.';
$string['invalidinequality'] = '{$a} er ugyldig';
$string['isexercise'] = 'Bruk GeoGebra-oppgave for å kontrollere spørsmålet';
$string['isexercise_help'] = 'Fila inneholder brukerdefinerte verktøy som kan bli brukt til automatisk kontroll av oppgaven.\nOBS: Alle svarene nedenfor kan ikke brukes her.';
$string['israndomized'] = 'Er der noen variabler som skal få tilfeldige verdier?';
$string['loadapplet'] = 'Last opp (på ny) og vis applet';
$string['loadapplet_help'] = 'Last opp appleten fra GeoGebra og lagre den nye versjonen fra GeoGebra i databasen.';
$string['mineqmax'] = 'Min og Maks for tilfeldig generering er ikke spesifisert riktig for variabel {$a}. Enter har du ikke definert min og maks for glideren, eller så er ikke dette elementet en glider. Du må trolig korrigere dette i GeoGebra-fila.';
$string['minplusstepgtmax'] = 'Min pluss animasjonstrinnet er større enn Maks for variabel {$a}. Du må trolig rette opp dette i GeoGebra-fila.';
$string['noappletloaded'] = 'Ingen applet ble lastet opp! Seek om URL-en er riktig og se om du kan finne en applet etter å ha valgt en lenke eller etter å ha lastet opp appleten på ny.';
$string['nofractionsumeq1'] = 'Minst én kombinasjon av grader må ha en sum på 100 %';
$string['pluginname_help'] = 'Spørsmål der eleven kan svare ved å bruke GeoGebra';
$string['pluginnameadding'] = 'Legg til et GeoGebra-spørsmål';
$string['pluginnameediting'] = 'Redigering av GeoGebra-spørsmål';
$string['pluginnamesummary'] = 'En type spørsmål som bruker GeoGebra til å vise spørsmålet og til å vurdere om svaret er riktig når testen er tatt.';
$string['randomizedbutnovars'] = 'Du har valgt at spørsmålet skulle inholde tilfeldige elementer, men du har ikke valgt noen elementer som skal ha tilfeldige verdier.';
$string['randomizedvar'] = 'Variable som skal ha tilfeldige verdier';
$string['randomizedvar_help'] = 'Variabler som skal være tilfeldige (og adskilte med komma). Bruk innstillingene på glideren i GeoGebra til å angi Min, Maks og Animasjonstrinn. Diss variablene kan også brukes i spørsmålsteksten ved å ha dem i krøllparenteser, som for eksempel: {a}';
$string['show_algebra_input'] = 'Vis inntastingsfelt';
$string['show_menu_bar'] = 'Vis meny';
$string['show_reset_icon'] = 'Vis ikon for å tilbakestille konstruksjonen';
$string['show_tool_bar'] = 'Vis verktøylinje';
$string['stepzero'] = 'Animasjonstrinnet er 0 for variabelen {$a}. Enter har du ikke definert animasjonstrinnet, eller så er ikke dette elementet en glider. Du må trolig korrigere dette i GeoGebra-fila.';
$string['useafile'] = '... eller bruk en ggb-fil';
$string['valuecheckedfor'] = 'Boolske objekter i GeoGebra som blir brukte til å sjekke om noe er riktig.';
$string['variablenamewrong'] = 'En variable med det navnet kunne ikke finnes i GeoGebrafila.';
$string['variableno'] = 'Variabel {$a}';
$string['variables'] = 'Variabler';
$string['willbereadfromfile'] = 'Vil bli lest fra GeoGebra... (se Hjelp)';
