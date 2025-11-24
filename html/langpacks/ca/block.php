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
 * Strings for component 'block', language 'ca', version '4.5'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addblock'] = 'Afegeix el bloc {$a}';
$string['anypagematchingtheabove'] = 'Qualsevol pàgina que concordi amb l\'anterior';
$string['appearsinsubcontexts'] = 'Apareix en subcontextos';
$string['assignrolesinblock'] = 'Assigna rols al bloc {$a}';
$string['blocksdrawertoggle'] = 'Amaga/mostra el calaix de blocs';
$string['blocksettings'] = 'Paràmetres de bloc';
$string['bracketfirst'] = '{$a} (primera)';
$string['bracketlast'] = '{$a} (darrera)';
$string['configureblock'] = 'Configura el bloc {$a}';
$string['contexts'] = 'Contexts de pàgina';
$string['contexts_help'] = 'Els contextos són tipus de pàgines més específics on es pot visualitzar aquest bloc dins de la ubicació original del bloc. Tindreu diferents opcions segons la ubicació original del bloc i la vostra ubicació actual. Per exemple, per a imposar que el bloc aparegui només en pàgines de fòrum d\'un curs, afegiu el bloc al curs (fent que aparegui a totes les subpàgines), i després aneu a un fòrum i editeu de nou els paràmetres del bloc per restringir la visualització només en pàgines de fòrum.';
$string['createdat'] = 'Ubicació original del bloc';
$string['createdat_help'] = 'La ubicació original on es va crear el bloc. Els paràmetres del bloc poden fer que aparegui en altres ubicacions (contextos) dins de la ubicació original. Per exemple, un bloc creat en una pàgina de curs es pot visualitzar en activitats dins d\'aquest curs. Un bloc creat a la pàgina principal es pot visualitzar a tot el lloc.';
$string['defaultregion'] = 'Regió per defecte';
$string['defaultregion_help'] = 'Els temes poden definir regions de blocs -amb noms- on es visualitzen els blocs. Aquest paràmetre defineix en quina d\'aquestes regions voleu que aparegui per defecte aquest bloc. La regió es pot canviar si cal en pàgines específiques.';
$string['defaultweight'] = 'Pes per defecte';
$string['defaultweight_help'] = 'El pes per defecte permet triar aproximadament on voleu que aparegui el bloc dins de la regió, més amunt o més avall. La ubicació definitiva es calcula prenent en consideració tots els blocs que apareguin a la regió. Aquest valor es pot canviar si cal en pàgines específiques.';
$string['deleteblock'] = 'Suprimeix el bloc {$a}';
$string['deleteblockcheck'] = 'Confirmeu que voleu suprimir aquest bloc anomenat {$a}?';
$string['deleteblockinprogress'] = 'S\'està eliminant el bloc {$a}...';
$string['deleteblockwarning'] = '<p> Ara eliminareu un bloc que apareix en un altre lloc. </p><p> Ubicació del bloc original: {$a->location} <br /> Visualització en tipus de pàgines: {$a->pagetype} </p><p> Confirmeu que voleu continuar? </p>';
$string['deletecheck'] = 'Suprimiu el bloc {$a}?';
$string['deletecheck_modal'] = 'Segur que voleu eliminar el bloc?';
$string['hideblock'] = 'Amaga el bloc {$a}';
$string['hidepanel'] = 'Amaga el tauler';
$string['moveblock'] = 'Mou el bloc {$a}';
$string['moveblockafter'] = 'Mou el bloc després del bloc {$a}';
$string['moveblockbefore'] = 'Mou el bloc abans del del bloc {$a}';
$string['moveblockinregion'] = 'Mou el bloc a la regió {$a}';
$string['movingthisblockcancel'] = 'S\'està movent aquest bloc ({$a})';
$string['myblocks'] = 'Els meus blocs';
$string['onthispage'] = 'En aquesta pàgina';
$string['pagetypes'] = 'Tipus de pàgina';
$string['pagetypewarning'] = 'El tipus de pàgina especificat prèviament ja no es pot seleccionar. Trieu a sota el tipus de pàgina més adequat.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Registra quan l\'usuari acobla un bloc';
$string['privacy:metadata:userpref:hiddenblock'] = 'Registra quan l\'usuari s\'ha col·lapsat/amagat un bloc';
$string['privacy:request:blockisdocked'] = 'Indica si el bloc s\'ha acoblat';
$string['privacy:request:blockishidden'] = 'Indica si el bloc s\'ha ocultat/col·lapsat';
$string['region'] = 'Regió';
$string['restrictpagetypes'] = 'Visualitza en aquests tipus de pàgines';
$string['showblock'] = 'Mostra el bloc {$a}';
$string['showoncontextandsubs'] = 'Mostra a \'{$a}\' i a qualsevol plana interior';
$string['showoncontextonly'] = 'Mostra només a \'{$a}\'';
$string['showonentiresite'] = 'Mostra en tot el lloc';
$string['showonfrontpageandsubs'] = 'Mostra a la primera plana i a qualsevol pàgina afegida a la primera plana';
$string['showonfrontpageonly'] = 'Mostra només a la primera plana';
$string['subpages'] = 'Selecciona pàgines';
$string['thisspecificpage'] = 'Aquesta pàgina específica';
$string['visible'] = 'Visible';
$string['weight'] = 'Pes';
$string['wherethisblockappears'] = 'Lloc on apareix aquest bloc';
