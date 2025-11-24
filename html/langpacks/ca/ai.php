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
 * Strings for component 'ai', language 'ca', version '4.5'.
 *
 * @package     ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptai'] = 'Accepta i continua';
$string['action'] = 'Acció';
$string['action_generate_image'] = 'Genera una imatge';
$string['action_generate_image_desc'] = 'Genera una imatge a partir d\'una instrucció de text.';
$string['action_generate_text'] = 'Genera un text';
$string['action_generate_text_desc'] = 'Genera un text a partir d\'una instrucció de text.';
$string['action_generate_text_instruction'] = 'Rebreu una entrada de text de l\'usuari. La vostra tasca és generar un text basat en la seva sol·licitud. Seguiu aquestes instruccions importants:

1. Retorneu el resum només en text pla.
2. No inclogueu cap format de marques, salutacions ni tòpics.';
$string['action_summarise_text'] = 'Resumeix un text';
$string['action_summarise_text_desc'] = 'Resumeix el contingut del text d\'una pàgina del curs.';
$string['action_summarise_text_instruction'] = 'Rebreu una entrada de text de l\'usuari. La vostra tasca és resumir el text proporcionat. Seguiu aquestes pautes:

1. Condensar: Escurçar els passatges llargs en punts clau.
2. Simplificar: Facilitar la comprensió de la informació complexa, especialment per als estudiants.

Instruccions importants:

1. Retornar el resum només en text pla.
2. No incloure cap format de marques, salutacions ni tòpics.
3. Centrar-se en la claredat, la concisió i l\'accessibilitat.

Assegureu-vos que el resum sigui fàcil de llegir i que transmeti eficaçment els punts principals del text original.';
$string['action_translate_text'] = 'Traduir un text';
$string['action_translate_text_desc'] = 'Traduir el text proporcionat d\'un idioma a un altre.';
$string['actionsettingprovider'] = 'Paràmetres de l\'acció {$a}';
$string['actionsettingprovider_desc'] = 'Aquests paràmetres controlen com el {$a->providername} realitza l\'acció {$a->actionname}.';
$string['ai'] = 'IA';
$string['aiplacements'] = 'Emplaçaments IA';
$string['aiproviders'] = 'Proveïdors d\'IA';
$string['aiusagepolicy'] = 'Política d\'ús de la IA';
$string['availableplacements'] = 'Trieu on estan disponibles les accions d\'IA';
$string['availableplacements_desc'] = 'Els emplaçaments defineixen com i on es poden utilitzar les accions d\'IA al vostre lloc web. Podeu triar quines accions estan disponibles a cada ubicació a través de la configuració.';
$string['availableproviders'] = 'Gestiona els proveïdors d\'IA connectats a l\'LMS';
$string['availableproviders_desc'] = 'Els proveïdors d\'IA afegeixen funcionalitats d\'IA al vostre lloc web mitjançant «accions» com ara el resum de text o la generació d\'imatges.<br/>
Podeu gestionar les accions de cada proveïdor a la seva configuració.';
$string['contentwatermark'] = 'Generat per IA';
$string['declineaipolicy'] = 'Rebutja';
$string['manageaiplacements'] = 'Gestiona els emplaçaments de la IA';
$string['manageaiproviders'] = 'Gestiona els proveïdors d\'IA';
$string['noproviders'] = 'Aquesta acció no està disponible. No hi ha cap <a href="{$a}">proveïdor d\'IA</a> configurat per a aquesta acció.';
$string['placement'] = 'Emplaçament';
$string['placementactionsettings'] = 'Accions';
$string['placementactionsettings_desc'] = 'Les accions d\'IA disponibles per a aquest emplaçament.';
$string['placementsettings'] = 'Paràmetres específics dels emplaçaments';
$string['placementsettings_desc'] = 'Aquests paràmetres controlen la manera com aquest emplaçament d\'IA es connecta al servei d\'IA i a les operacions relacionades';
$string['privacy:metadata:ai_action_generate_image'] = 'Una taula que emmagatzema les peticions de generació d\'imatges fetes pels usuaris.';
$string['privacy:metadata:ai_action_generate_image:aspectratio'] = 'La relació d\'aspecte de les imatges generades.';
$string['privacy:metadata:ai_action_generate_image:numberimages'] = 'El nombre d\'imatges generades.';
$string['privacy:metadata:ai_action_generate_image:prompt'] = 'La indicació d\'entrada per a la petició de la generació d\'imatge.';
$string['privacy:metadata:ai_action_generate_image:quality'] = 'La qualitat de les imatges generades.';
$string['privacy:metadata:ai_action_generate_image:revisedprompt'] = 'La indicació d\'entrada revisada de les imatges generades.';
$string['privacy:metadata:ai_action_generate_image:sourceurl'] = 'L\'URL d\'origen de les imatges generades.';
$string['privacy:metadata:ai_action_generate_image:style'] = 'L\'estil de les imatges generades.';
$string['privacy:metadata:ai_action_generate_text'] = 'Una taula que emmagatzema les peticions de generació de text fetes pels usuaris.';
$string['privacy:metadata:ai_action_generate_text:completiontoken'] = 'Els segments textuals de processament utilitzats per generar el text.';
$string['privacy:metadata:ai_action_generate_text:fingerprint'] = 'L\'identificador únic (hash) que representa l\'estat o la versió del model i del contingut.';
$string['privacy:metadata:ai_action_generate_text:generatedcontent'] = 'El text generat pel model d\'IA basat en la indicació d\'entrada.';
$string['privacy:metadata:ai_action_generate_text:prompt'] = 'La indicació d\'entrada per a la petició de generació de text.';
$string['privacy:metadata:ai_action_generate_text:prompttokens'] = 'Els segments textuals de la indicació d\'entrada utilitzats per generar el text.';
$string['privacy:metadata:ai_action_generate_text:responseid'] = 'L\'ID de la resposta.';
$string['privacy:metadata:ai_action_register'] = 'Una taula que emmagatzema les peticions d\'accions fetes pels usuaris.';
$string['privacy:metadata:ai_action_register:actionid'] = 'L\'ID de la petició d\'acció.';
$string['privacy:metadata:ai_action_register:actionname'] = 'El nom de l\'acció de la petició.';
$string['privacy:metadata:ai_action_register:provider'] = 'El nom del proveïdor que ha gestionat la petició.';
$string['privacy:metadata:ai_action_register:success'] = 'L\'estat de la petició d\'acció.';
$string['privacy:metadata:ai_action_register:timecompleted'] = 'L\'hora de finalització de la petició.';
$string['privacy:metadata:ai_action_register:timecreated'] = 'L\'hora de creació de la petició.';
$string['privacy:metadata:ai_action_register:userid'] = 'L\'ID de l\'usuari que ha fet la petició.';
$string['privacy:metadata:ai_action_summarise_text'] = 'Una taula que emmagatzema les peticions de resum de text fetes pels usuaris.';
$string['privacy:metadata:ai_action_summarise_text:completiontoken'] = 'Els segments textuals de processament utilitzats per resumir el text.';
$string['privacy:metadata:ai_action_summarise_text:fingerprint'] = 'L\'identificador únic (hash) que representa l\'estat o la versió del model i del contingut.';
$string['privacy:metadata:ai_action_summarise_text:generatedcontent'] = 'El text generat pel model d\'IA basat en la indicació d\'entrada.';
$string['privacy:metadata:ai_action_summarise_text:prompt'] = 'La indicació d\'entrada per a la petició de resum de text.';
$string['privacy:metadata:ai_action_summarise_text:prompttokens'] = 'Els segments textuals de la indicació d\'entrada utilitzats per resumir el text.';
$string['privacy:metadata:ai_action_summarise_text:responseid'] = 'L\'ID de la resposta';
$string['privacy:metadata:ai_policy_register'] = 'Una taula que emmagatzema l\'estat de l\'acceptació de la política d\'IA de cada usuari.';
$string['privacy:metadata:ai_policy_register:contextid'] = 'L\'ID del context les dades del qual s\'han desat.';
$string['privacy:metadata:ai_policy_register:timeaccepted'] = 'L\'hora en què l\'usuari va acceptar la política d\'IA.';
$string['privacy:metadata:ai_policy_register:userid'] = 'L\'ID de l\'usuari les dades del qual s\'han desat.';
$string['provider'] = 'Proveïdor';
$string['provideractionsettings'] = 'Accions';
$string['provideractionsettings_desc'] = 'Trieu i configureu les accions que {$a} pot dur a terme al vostre lloc web.';
$string['providers'] = 'Proveïdors';
$string['providersettings'] = 'Paràmetres';
$string['userpolicy'] = '<h4><strong>Benvinguts a la nova funció d\'IA!</strong></h4>
<p>Aquesta funció d\'intel·ligència artificial (IA) es basa únicament en models de llenguatge grans (LLM) externs per millorar la vostra experiència d\'aprenentatge i ensenyament. Abans de començar a utilitzar aquests serveis d\'IA, llegiu aquesta política d\'ús.</p>
<h4><strong>Precisió del contingut generat per IA</strong></h4>
<p>La IA pot oferir suggeriments i informació útils, però la seva precisió pot variar. Sempre heu de comprovar la informació proporcionada per assegurar-vos que sigui precisa, completa i adequada per a la vostra situació específica.</p>
<h4><strong>Com es processen les vostres dades</strong></h4>
<p>Aquesta funció d\'IA utilitza models de llenguatge grans (LLM) externs. Si utilitzeu aquesta funció, qualsevol informació o dades personals que compartiu es gestionarà d\'acord amb la política de privadesa d\'aquests LLM. Us recomanem que llegiu la seva política de privadesa per entendre com gestionaran les vostres dades. A més, en aquest lloc web es pot desar un registre de les vostres interaccions amb les funcions d\'IA.</p>
<p>Si teniu preguntes sobre com es processen les vostres dades, consulteu amb els vostres professors o l\'organització que dur a terme l\'ensenyament.</p>
<p>Si continueu, reconeixeu que enteneu i accepteu aquesta política.</p>';
