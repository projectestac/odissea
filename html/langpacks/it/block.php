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
 * Strings for component 'block', language 'it', version '4.1'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anypagematchingtheabove'] = 'Qualsiasi pagina corrispondente a quanto sopra';
$string['appearsinsubcontexts'] = 'Visibile nei sotto contesti';
$string['assignrolesinblock'] = 'Assegna ruoli nel blocco {$a}';
$string['blocksdrawertoggle'] = 'Visualizza/nascondi cassetto blocchi';
$string['blocksettings'] = 'Impostazioni del blocco';
$string['bracketfirst'] = '{$a} (prima)';
$string['bracketlast'] = '{$a} (fine)';
$string['configureblock'] = 'Configura blocco {$a}';
$string['contexts'] = 'Contesti pagina';
$string['contexts_help'] = 'I contesti sono specifici tipi di pagine dove il blocco sarà visualizzato nella sua posizione originale. Puoi avere diverse opzioni in funzione della posizione originale ed effettiva del blocco. Per esempio puoi far apparire un blocco solo nelle pagine dei forum aggiungendolo al corso e impostandolo per farlo apparire solo nelle pagine figlie. Poi nelle pagine dei forum dove vuoi che il blocco appaia modifica le impostazioni del blocco affinché sia visualizzato solo nella pagine dei forum.';
$string['createdat'] = 'Posizione originale del blocco';
$string['createdat_help'] = 'La posizione originaria dove il blocco è stato creato. Le impostazioni del blocco possono consentire la sua visualizzazione in altre posizioni (contesti) figlie della posizione originaria.  Ad esempio, un blocco creato su una pagina del corso può essere visualizzato anche nelle attività del corso. Un blocco creato nella pagina home del sito può essere visualizzato in tutto il sito.';
$string['defaultregion'] = 'Area di default';
$string['defaultregion_help'] = 'I temi possono disporre di una o più regioni denominate dove visualizzare i blocchi. L\'impostazione definisce la regione di default dove comparirà il blocco.  Tenere presente che le impostazioni di pagine specifiche possono avere la precedenza sul peso di default.';
$string['defaultweight'] = 'Peso di default';
$string['defaultweight_help'] = 'Il peso di default consente di indicare grossolanamente la posizione del blocco in una data regione. La posizione effettiva sarà calcolata tenendo presenti tutti i blocchi presenti nella regione, (ad esempio, solo un blocco può essere presente nel punto più alto della regione). Tenere presente che le impostazioni di pagine specifiche possono avere la precedenza sul peso di default.';
$string['deleteblock'] = 'Elimina blocco {$a}';
$string['deleteblockcheck'] = 'Il blocco {$a} sarà eliminato.';
$string['deleteblockinprogress'] = 'Rimozione del blocco {$a} in corso...';
$string['deleteblockwarning'] = '<p>Stai per eliminare un blocco che è presente in altri posizioni.</p><p>Posizione originale del blocco: {$a->location}<br />Visualizzato nelle pagine di tipo: {$a->pagetype}</p><p>Sei sicuro di continuare?</p>';
$string['deletecheck'] = 'Eliminare il blocco {$a}?';
$string['deletecheck_modal'] = 'Eliminare il blocco?';
$string['hideblock'] = 'Nascondi blocco {$a}';
$string['hidepanel'] = 'Nascondi pannello';
$string['moveblock'] = 'Sposta blocco {$a}';
$string['moveblockafter'] = 'Sposta il blocco dopo il blocco {$a}';
$string['moveblockbefore'] = 'Sposta il blocco prima del blocco {$a}';
$string['moveblockinregion'] = 'Sposta il blocco nella regione {$a}';
$string['movingthisblockcancel'] = 'Stai spostando il blocco ({$a})';
$string['myblocks'] = 'I miei blocchi';
$string['onthispage'] = 'In questa pagina';
$string['pagetypes'] = 'Tipi di pagine';
$string['pagetypewarning'] = 'Il tipo di pagina specificata in precedenza non è più selezionabile. Per favore scegli sotto il tipo di pagina più adatto.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Registro di quando un utente ha spostato un blocco nel dock.';
$string['privacy:metadata:userpref:hiddenblock'] = 'Registro di quando un utente ha minimizzato/nascosto un blocco.';
$string['privacy:request:blockisdocked'] = 'Indicazione di blocco spostato nel dock';
$string['privacy:request:blockishidden'] = 'Indicazione di blocco minimizzato o nascosto';
$string['region'] = 'Area';
$string['restrictpagetypes'] = 'Visualizza nelle pagine di tipo';
$string['showblock'] = 'Visualizza blocco {$a}';
$string['showoncontextandsubs'] = 'Visualizza in \'{$a}\' e tutte le pagine in esso';
$string['showoncontextonly'] = 'Visualizza solo in \'{$a}\'';
$string['showonentiresite'] = 'Visualizza in tutto il sito';
$string['showonfrontpageandsubs'] = 'Visualizza nella pagina home del sito e nelle pagine figlie della pagina home';
$string['showonfrontpageonly'] = 'Visualizza nella pagina home del sito';
$string['subpages'] = 'Seleziona pagine';
$string['thisspecificpage'] = 'Questa pagina specifica';
$string['visible'] = 'Visibile';
$string['weight'] = 'Peso';
$string['wherethisblockappears'] = 'Persistenza e visibilità';
