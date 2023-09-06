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
 * Strings for component 'grading', language 'nl', version '4.1'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->method}\' is gekozen als beoordelingsmethode voor de zone \'{$a->area}\'.';
$string['activemethodinfonone'] = 'Er is geen geavanceerde beoordelingsmethode geselecteerd voor de \'{$a->area}\' zone. Eenvoudig rechtstreeks beoordelen zal gebruikt worden';
$string['changeactivemethod'] = 'Wijzig de beoordelingsmethode naar';
$string['clicktoclose'] = 'klik om te sluiten';
$string['error:gradingunavailable'] = 'De geavanceerde beoordelingsmethode is niet correct ingesteld. Controleer alle forum beoordelingsopties in de instellingen van het forum.';
$string['error:notinrange'] = 'Ongeldig cijfer \'{$a->grade}\' gegeven. Cijfers moeten tussen 0 en {$a->maxgrade} liggen.';
$string['exc_gradingformelement'] = 'Kon beoordelingsformulierelement niet instantiëren';
$string['formnotavailable'] = 'Geavanceerd beoordelen was geselecteerd, maar het beoordelingsformulier moet nog gedefinieerd worden.';
$string['gradingformunavailable'] = 'Merk op: het formulier voor geavanceerd beoordelen is nog niet klaar op dit ogenblik. Eenvoudig beoordelen zal gebruikt worden tot het beoordelingsformulier helemaal klaar is.';
$string['gradingmanagement'] = 'Geavanceerd beoordelen';
$string['gradingmanagementtitle'] = 'Geavanceerd beoordelen: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Beoordelingsmethode';
$string['gradingmethod_help'] = 'Kies de geavanceerde beoordelingsmethode die zou moeten gebruikt worden voor het berekenen van de cijfers in de gegeven context.

Om geavanceerd beoordelen uit te schakelen en terug te gaan naar het standaard beoordelingsmechanisme, kies \'Eenvoudig rechtstreeks beoordelen\'';
$string['gradingmethodnone'] = 'Eenvoudig rechtstreeks beoordelen';
$string['gradingmethods'] = 'Beoordelingsmethodes';
$string['manageactionclone'] = 'Maak een nieuw beoordelingsformulier van een sjabloon';
$string['manageactiondelete'] = 'Verwijder de huidige formulierdefinitie';
$string['manageactiondeleteconfirm'] = 'Je gaat nu beoordelingsformulier \'{$a->formname}\' en alle geassocieerde informatie van \'{$a->component}\' (\'{$a->area}\') verwijderen. Zorg ervoor dat je volgende consequenties begrijpt:

* Je kunt deze operatie niet ongedaan maken
* Je kunt naar een andere beoordelingsmethode, zoals \'Eenvoudig rechtstreeks beoordelen\', overschakelen zonder dit formulier te verwijderen.
* Alle informatie over hoe de beoordelingsformulieren gevuld zijn zal verloren gaan.
* De berekende resultaatscijfers die in de cijferlijst staan zullen niet gewijzigd worden. De manier waarop ze verkregen werden zal niet meer beschikbaar zijn.
* Deze operatie heeft geen invloed op eventuele kopieën van dit formulier die in andere activiteiten gebruikt worden.';
$string['manageactiondeletedone'] = 'Het formulier is verwijderd';
$string['manageactionedit'] = 'Bewerk de huidige formulierdefinitie';
$string['manageactionnew'] = 'Definieer een nieuw beoordelingsformulier';
$string['manageactionshare'] = 'Publiceer het formulier als een nieuw sjabloon';
$string['manageactionshareconfirm'] = 'Je gaat een kopie bewaren van het beoordelingsfomulier \'{$a}\' als een nieuw publiek sjabloon. Andere gebruikers op de site kunnen nieuwe beoordelingsformulieren maken, gebaseerd op dat sjabloon.';
$string['manageactionsharedone'] = 'Het formulier is bewaard als sjabloon';
$string['noitemid'] = 'Beoordeling niet mogelijk; Het beoordeelde item bestaat niet;';
$string['nosharedformfound'] = 'Geen sjabloon gevonden';
$string['privacy:metadata:grading_definitions'] = 'Basisinformatie over een geavanceerde beoordelingsvorm in een beoordeelbare zone.';
$string['privacy:metadata:grading_definitions:areaid'] = 'De zone-ID waar het geavanceerd beoordelingsformulier is gedefinieerd.';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'De beoordelingsdefinitieID waar dit van gekopieerd is.';
$string['privacy:metadata:grading_definitions:description'] = 'De beschrijving van de geavanceerde beoordelingsmethode.';
$string['privacy:metadata:grading_definitions:method'] = 'De beoordelingsmethode die verantwoordelijk is voor de definitie.';
$string['privacy:metadata:grading_definitions:name'] = 'De naam van de geavanceerde beoordelingsdefinitie.';
$string['privacy:metadata:grading_definitions:options'] = 'Sommige instellingen van deze beoordelingsdefinitie.';
$string['privacy:metadata:grading_definitions:status'] = 'De status van deze geavanceerde beoordelingsdefinitie.';
$string['privacy:metadata:grading_definitions:timecopied'] = 'Het tijdstip waarop de beoordelingsdefinitie werd gekopieerd.';
$string['privacy:metadata:grading_definitions:timecreated'] = 'Het tijdstip waarop de beoordelingsdefinitie gemaakt werd.';
$string['privacy:metadata:grading_definitions:timemodified'] = 'Het tijdstip waarop de beoordelingsdefinitie laatst werd gewijzigd.';
$string['privacy:metadata:grading_definitions:usercreated'] = 'De ID van de gebruiker die deze beoordelingsdefinitie gemaakt heeft.';
$string['privacy:metadata:grading_definitions:usermodified'] = 'De ID van de gebruiker die deze beoordelingsdefinitie laatst gewijzigd heeft.';
$string['privacy:metadata:grading_instances'] = 'Beoordelingsrecord voor een degradeerbaar artikel beoordeeld door één beoordelaar.';
$string['privacy:metadata:grading_instances:feedback'] = 'De feedback gegeven door de gebruiker.';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'Het tekstformaat van de feedback gegeven door de gebruiker.';
$string['privacy:metadata:grading_instances:raterid'] = 'De ID van de gebruiker die de beoordeling instantie heeft beoordeeld.';
$string['privacy:metadata:grading_instances:rawgrade'] = 'Het cijfer voor de beoordeling instantie';
$string['privacy:metadata:grading_instances:status'] = 'De status van deze beoordeling instantie';
$string['privacy:metadata:grading_instances:timemodified'] = 'Het tijdstip waarop de  beoordeling instantie voor het laatst is gewijzigd.';
$string['privacy:metadata:gradingformpluginsummary'] = 'Gegevens voor de beoordelingsmethode.';
$string['searchownforms'] = 'Zoek ook eigen beoordelingsformulieren';
$string['searchtemplate'] = 'Beoordelingsformulieren zoeken';
$string['searchtemplate_help'] = 'Je kunt zoeken naar een beoordelingsformulier en het hier als sjabloon gebruiken voor een nieuw beoordelingsformulier. Typ woorden die in de formuliernaam, de beschrijving of in het formulier zelf zouden moeten voorkomen. Om een zin te zoeken, plaats je de woorden tussen dubbele aanhalingstekens.

Standaard worden alleen beoordelingsformulieren die als gedeelde sjablonen bewaard zijn getoond. Je kunt ook al je eigen formulieren in de zoekresultaten opnemen. Hiermee kun je eenvoudig je eigen formulieren hergebruiken zonder ze te moeten delen. Enkel formulieren die gemarkeerd zijn met \'Klaar voor gebruik\' kunnen op deze manier herbruikt worden.';
$string['statusdraft'] = 'Concept';
$string['statusready'] = 'Klaar voor gebruik';
$string['templatedelete'] = 'Verwijder';
$string['templatedeleteconfirm'] = 'Je gaat dit gedeelde sjabloon \'{$a}\' verwijderen. Het verwijderen van een sjabloon heeft geen invloed op bestaande formulieren die er op gebaseerd zijn.';
$string['templateedit'] = 'Bewerk';
$string['templatepick'] = 'Gebruik dit sjabloon';
$string['templatepickconfirm'] = 'Wil je beoordelingsformulier \'{$a->formname}\' gebruiken als sjabloon voor het nieuwe beoordelingsformulier in \'{$a->component} ({$a->area})\'?';
$string['templatepickownform'] = 'Gebruik dit formulier als sjabloon';
$string['templatesource'] = 'Plaats: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Eigen beoordelingsformulier';
$string['templatetypeshared'] = 'Gedeeld sjabloon';
