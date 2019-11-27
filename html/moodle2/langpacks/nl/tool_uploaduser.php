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
 * Strings for component 'tool_uploaduser', language 'nl', branch 'MOODLE_36_STABLE'
 *
 * @package   tool_uploaduser
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Verwijderen toestaan';
$string['allowrenames'] = 'Gebruikersnamen bijwerken toestaan';
$string['allowsuspends'] = 'Sta het schorsen en activeren van accounts toe';
$string['assignedsysrole'] = 'Toegewezen systeemrol {$a}';
$string['csvdelimiter'] = 'Scheidingsteken voor CSV';
$string['defaultvalues'] = 'Standaardwaarden';
$string['deleteerrors'] = 'Verwijder fouten';
$string['encoding'] = 'Codering';
$string['errormnetadd'] = 'Kan externe gebruikers niet toevoegen';
$string['errors'] = 'Fouten';
$string['invalidupdatetype'] = 'Je kunt deze optie niet selecteren met het gekozen upload-type.';
$string['invaliduserdata'] = 'Ongeldige gegevens ontdekt voor gebruiker {$a} en automatisch opgeschoond.';
$string['nochanges'] = 'Geen wijzigingen';
$string['pluginname'] = 'Gebruiker upload';
$string['privacy:metadata'] = 'De upload gebruikers-plugin bewaart geen persoonlijke gegevens.';
$string['renameerrors'] = 'Fouten in hernoemen';
$string['requiredtemplate'] = 'Vereist. Je kunt hier sjabloonsyntax gebruiken (%l = achternaam, %f = voornaam, %u = gebruikersnaam). Bekijk het helpbestand voor details en voorbeelden.';
$string['rowpreviewnum'] = 'Voorbeeld rijen';
$string['unassignedsysrole'] = 'Niet-toegewezen systeemrol {$a}';
$string['uploadpicture_baduserfield'] = 'Het gespecificeerde gebruikersattribuut is niet geldig. Probeer opnieuw.';
$string['uploadpicture_cannotmovezip'] = 'Kan zip-bestand niet naar tijdelijke map verplaatsten.';
$string['uploadpicture_cannotprocessdir'] = 'Kan uitgepakte bestanden niet verwerken';
$string['uploadpicture_cannotsave'] = 'Kan afbeelding voor gebruiker {$a} niet bewaren. Controleer het originele afbeeldingsbestand.';
$string['uploadpicture_cannotunzip'] = 'Kan fotobestanden niet uitpakken';
$string['uploadpicture_invalidfilename'] = 'Afbeeldingsbestand {$a} heeft ongeldige tekens in de naam. Overgeslagen.';
$string['uploadpicture_overwrite'] = 'Bestaande gebruikersfoto\'s overschrijven?';
$string['uploadpictures'] = 'Upload gebruikersfoto\'s';
$string['uploadpictures_help'] = '<p>Gebruikersfoto\'s kunnen als zip-bestand of afbeeldingsbestand geüpload worden. De bestanden moeten als naam <i>gekozen-gebruikersattribuut.extentie</i> hebben. Bijvoorbeeld, als het gekozen gebruikersattribuut voor het koppelen van de afbeeldingen de gebruikersnaam is en de gebruikersnaam is user1234, dan moet de bestandsnaam user1234.jpg zijn.</p>
<p>Ondersteunde afbeeldingsformaten zijn gif, jpg, en png.</p>
<p>Afbeeldingsbestandsnamen zijn niet hoofdlettergevoelig.</p>';
$string['uploadpicture_userfield'] = 'Gebruikersattribuut waaraan foto\'s gekoppeld worden:';
$string['uploadpicture_usernotfound'] = 'De gebruiker met \'{$a->userfield}\' met de waarde \'{$a->uservalue}\' bestaat niet. Overgeslagen.';
$string['uploadpicture_userskipped'] = 'Gebruiker {$a} overgeslagen (heeft al een afbeelding)';
$string['uploadpicture_userupdated'] = 'Foto geüpdatet voor gebruiker {$a}';
$string['uploadusers'] = 'Uploaden';
$string['uploadusers_help'] = 'Gebruikers kunnen geïmporteerd worden en optioneel aangemeld worden in een cursus vanuit een tekstbestand. Het bestand moet er als volgt uitzien:

* Elke lijn van het bestand moet één record bevatten
* Elke record is een datareeks, gescheiden door komma\'s (of andere scheidingstekens)
* Het eerste record van het bestand is speciaal: het bevat de lijst met veldnamen. Dit bepaalt de opmaak van de rest van het bestand.
* Vereiste veldnamen zijn: username, firstname,  lastname, email';
$string['uploaduserspreview'] = 'Voorbeeld uploaden gebruikers';
$string['uploadusersresult'] = 'Resultaat uploaden gebruikers';
$string['uploaduser:uploaduserpictures'] = 'Gebruikersfoto\'s uploaden';
$string['useraccountupdated'] = 'Gebruiker geüpdatet';
$string['useraccountuptodate'] = 'Gebruiker up-to-date';
$string['userdeleted'] = 'Gebruiker verwijderd';
$string['userrenamed'] = 'Gebruiker hernoemd';
$string['userscreated'] = 'Gebruikers gecreëerd';
$string['usersdeleted'] = 'Gebruikers verwijderd';
$string['usersrenamed'] = 'Gebruikers hernoemd';
$string['usersskipped'] = 'Gebruikers overgeslagen';
$string['usersupdated'] = 'Gebruikers geüpdatet';
$string['usersweakpassword'] = 'Gebruikers met een zwak wachtwoord';
$string['uubulk'] = 'Selecteer voor bulkoperaties';
$string['uubulkall'] = 'Alle gebruikers';
$string['uubulknew'] = 'Nieuwe gebruikers';
$string['uubulkupdated'] = 'geüpdate gebruikers';
$string['uucsvline'] = 'CSV-lijn';
$string['uulegacy1role'] = '(Oorspronkelijk leerling) typeN=1';
$string['uulegacy2role'] = '(Oorspronkelijk leraar) typeN=2';
$string['uulegacy3role'] = '(Oorspronkelijk leraar zonder bewerken) typeN=3';
$string['uunoemailduplicates'] = 'Voorkom duplicaten van e-mailadressen';
$string['uuoptype'] = 'Uploadtype';
$string['uuoptype_addinc'] = 'Allen toevoegen, zet een teller achter de gebruikersnaam indien nodig';
$string['uuoptype_addnew'] = 'Enkel nieuwe gebruikers toevoegen, bestaande overslaan';
$string['uuoptype_addupdate'] = 'Nieuwe gebruikers toevoegen en bestaande updaten';
$string['uuoptype_update'] = 'Enkel bestaande gebruikers updaten';
$string['uupasswordcron'] = 'Gegenereerd in cron';
$string['uupasswordnew'] = 'Nieuw wachtwoord';
$string['uupasswordold'] = 'Bestaand wachtwoord';
$string['uustandardusernames'] = 'Maak gebruikersnamen standaard';
$string['uuupdateall'] = 'Overschrijven met bestand en standaardinstellingen';
$string['uuupdatefromfile'] = 'Overschrijven met bestand';
$string['uuupdatemissing'] = 'Ontbrekende waarden invullen vanuit bestand en standaardwaarden';
$string['uuupdatetype'] = 'Details van bestaande gebruikers';
$string['uuusernametemplate'] = 'Sjabloon gebruikersnaam';
