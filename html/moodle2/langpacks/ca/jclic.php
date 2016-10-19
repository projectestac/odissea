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
 * Strings for component 'jclic', language 'ca', branch 'MOODLE_31_STABLE'
 *
 * @package   jclic
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Accions';
$string['activity'] = 'Activitat';
$string['activitydone'] = 'Activitats fetes';
$string['activitysolved'] = 'Activitats encertades';
$string['attempts'] = 'Intents';
$string['availabledate'] = 'Disponible des de';
$string['avaluation'] = 'Criteri d\'avaluació';
$string['avaluation_score'] = 'Assolir aquesta puntuació mitja entre totes les activitats';
$string['avaluation_solved'] = 'Resoldre correctament aquest nombre d\'activitats diferents';
$string['closebeforeopen'] = 'No s\'ha pogut actualitzar el JClic. Heu especificat una data de finalització anterior a la data d\'inici.';
$string['contentheader'] = 'Contingut';
$string['deleteallsessions'] = 'Suprimeix totes les sessions';
$string['description'] = 'Descripció';
$string['duedate'] = 'Data de venciment';
$string['event_course_module_viewed'] = 'S\'ha visualitzat el mòdul del curs';
$string['event_instances_list_viewed'] = 'S\'ha visualitzat la llista d\'instàncies';
$string['exiturl'] = 'Enllaç de sortida';
$string['exiturl_help'] = 'Es tracta del URL que s\'obrirà quan l\'alumnat finalitzi la darrera activitat JClic.

Per tal que aquesta redirecció funcioni cal que, a la pestanya seqüències, la darrera activitat del projecte JClic, a la "Fletxa endavant", tingui associada l\'acció "Sortir del JClic".';
$string['expired'] = 'Aquesta activitat es va tancar el dia {$a} i ja no està disponible';
$string['filetype'] = 'Tipus';
$string['filetypeexternal'] = 'URL extern';
$string['filetype_help'] = 'Aquest paràmetre determina com s\'insereix l\'activitat JClic en el curs. Tenim 2 opcions:

* Fitxer JClic pujat - Permet escollir un fitxer ".jclic.zip" vàlid mitjançant el selector d\'arxius.
* URL extern - Permet especificar l\'URL d\'un paquet JClic. Nota: L\'URL ha de començar amb http(s) o www i contenir un fitxer "jclic.zip" o ".jclic" vàlid.';
$string['filetypelocal'] = 'Fitxer JClic pujat';
$string['height'] = 'Alçada';
$string['invalidjclicfile'] = 'S\'ha especificat un fitxer JClic no vàlid. El fitxer ha de tenir l\'extensió ".jclic.zip".';
$string['invalidurl'] = 'S\'ha especificat un URL no vàlid. L\'URL ha de començar amb http(s) i ha d\'enllaçar a un fitxer «.jclic.zip» vàlid.';
$string['jclic'] = 'JClic';
$string['jclic:addinstance'] = 'Afegeix una activitat JClic';
$string['jclicfile'] = 'Fitxer JClic';
$string['jclicfile_help'] = 'El fitxer ".jclic.zip" que conté el paquet JClic.';
$string['jclic:grade'] = 'Avalua JClic';
$string['jclicjarbase'] = 'URL base dels fitxers JAR';
$string['jclicjarbase_help'] = 'Adreça web on localitzar tots els fitxers jar de JClic.';
$string['jclic:submit'] = 'Envia JClic';
$string['jclicurl'] = 'URL';
$string['jclicurl_help'] = 'Aquest paràmetre permet especificar el URL del paquet JClic enlloc de seleccionar-ho mitjançant el selector d\'arxius.';
$string['jclic:view'] = 'Visualitza JClic';
$string['lang'] = 'Idioma';
$string['lap'] = 'Temps entre voltes';
$string['lap_help'] = 'Temps que es deixa entre les transaccions client-servidor (expressat en segons)';
$string['lastaccess'] = 'Últim accés';
$string['maxattempts'] = 'Nombre màxim d\'intents';
$string['maxgrade'] = 'Puntuació/activitats que cal assolir';
$string['modulename'] = 'JClic';
$string['modulename_help'] = 'El <a href="http://clic.xtec.cat" target="_blank">JClic</a> és un projecte del Departament d\'Ensenyament de la Generalitat de Catalunya que està format per un conjunt d\'aplicacions de programari lliure que permeten crear diversos tipus d\'activitats educatives multimèdia: puzles, associacions, exercicis de text, mots encreuats, sopes de lletres i altres. A més, la <a href="http://clic.xtec.cat/db/listact_ca.jsp" target="_blank">zonaClic</a> disposa d\'una biblioteca d\'activitats que compta amb uns mil projectes que han creat professors i persones d\'altres col·lectius que han volgut compartir solidàriament el seu treball.

Aquest mòdul permet al professorat afegir a un curs qualsevol activitat de tipus JClic i recopilar els resultats obtinguts (temps utilitzat a cada activitat, intents, encerts...) per cada alumne/a.';
$string['modulenameplural'] = 'JClic';
$string['msg_noattempts'] = 'Ja has fet aquesta activitat el nombre màxim de vegades permès';
$string['msg_nosessions'] = 'Aquesta activitat JClic encara no té cap sessió';
$string['notopenyet'] = 'Aquesta activitat no estarà disponible fins al dia {$a}';
$string['pluginadministration'] = 'Administració de JClic';
$string['pluginjs'] = 'URL del fitxer JClic plugin js';
$string['pluginjs_help'] = 'URL on es cercarà el fitxer jclicplugin.js necessari per funcionar. Si està buit, es farà servir el fitxer del mòdul.';
$string['pluginname'] = 'JClic';
$string['preview_jclic'] = 'Previsualitza l\'activitat JClic';
$string['report_details'] = 'Resultats detallats amb totes les sessions';
$string['report_normal'] = 'Resum de resultats';
$string['results'] = 'Resultats';
$string['return_results'] = 'Torna als resultats';
$string['score'] = 'Puntuació';
$string['sessions'] = 'Sessions';
$string['show_my_results'] = 'Mostra els meus resultats';
$string['size'] = 'Mides';
$string['skin'] = 'Aparença (<i>skin</i>)';
$string['solved'] = 'Correcta';
$string['solveddone'] = 'Activitats encertades / fetes';
$string['starttime'] = 'Data d\'inici';
$string['time'] = 'Temps';
$string['timing'] = 'Temporització';
$string['totals'] = 'Totals';
$string['totaltime'] = 'Temps total';
$string['unlimited'] = 'Il·limitat';
$string['url'] = 'URL';
$string['urledit'] = 'Fitxer JClic';
$string['urledit_help'] = 'El fitxer ".jclic.zip" que conté l\'activitat JClic.';
$string['width'] = 'Amplada';
