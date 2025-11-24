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
 * Strings for component 'tool_mfa', language 'nl', version '4.5'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Bereikt gewicht';
$string['added'] = 'Toegevoegd';
$string['alltime'] = 'Altijd';
$string['areyousure'] = 'Weet je zeker dat je deze factor wil verwijderen?';
$string['cancellogin'] = 'Annuleer inloggen';
$string['combination'] = 'Combinatie';
$string['confirmationreplace'] = 'Je zult onmiddellijk een andere \'{$a}\' moeten instellen. Zorg ervoor dat je klaar bent om dit proces te voltooien.';
$string['confirmationrevoke'] = 'Je zult niet langer \'{$a}\' kunnen gebruiken om aan te melden op deze site.';
$string['connector'] = 'EN';
$string['created'] = 'Aangemaakt';
$string['createdfromip'] = 'Aangemaakt vanuit IP';
$string['debugmode:heading'] = 'Ontwikkelmodus';
$string['devicename'] = 'Apparaat';
$string['editfactor'] = 'Bewerk instellingen voor de {$a} factor';
$string['email:subject'] = 'Inloggen op {$a} is mislukt';
$string['enablefactor'] = 'Verificatiestap inschakelen';
$string['entercode'] = 'Geef code';
$string['error:actionnotfound'] = 'Actie \'{$a}\' is niet ondersteund';
$string['error:couldnotreplace'] = 'Kon deze factor niet vervangen.';
$string['error:directaccess'] = 'Deze pagina kan niet rechtstreeks worden benaderd';
$string['error:factornotenabled'] = 'Multifactor verificatiestap \'{$a}\' is niet ingeschakeld';
$string['error:factornotfound'] = 'Multifactor verificatiestap \'{$a}\' niet gevonden';
$string['error:isguestuser'] = 'Gasten niet toegelaten.';
$string['error:notenoughfactors'] = 'Authenticatie is mislukt';
$string['error:reauth'] = 'Het is niet gelukt om je identiteit goed genoeg te valideren volgens de ingestelde beveiligingsmaatregelen.<br>Dit kan veroorzaakt zijn door: <br> 1) Verificatiestappen die geblokkeerd zijn - probeer het over enkele minuten opnieuw.
     <br> 2) Verificatiestappen die niet geslaagd zijn - controleer de details voor elke stap. <br> 3) Verificatiestappen zijn overgeslagen - ververs deze pagina en probeer opnieuw in te loggen.';
$string['error:revoke'] = 'Kan factor niet verwijderen';
$string['error:setupfactor'] = 'Instellen factor mislukt';
$string['error:support'] = 'Als je nog steeds niet kan aanmelden, of je denkt dat je deze melding foutief ziet, stuur een e-mail naar:';
$string['error:wrongfactorid'] = 'Factor id \'{$a}\' is onjuist';
$string['event:failfactor'] = 'Multifactor-authenticatie niet gelukt vanwege een mislukte factor.';
$string['event:faillockout'] = 'Multifactor-authenticatie mislukt vanwege teveel pogingen.';
$string['event:failnotenoughfactors'] = 'Multifactor-authenticatie mislukt vanwege het ontbreken van voldoende geslaagde verificatiestappen.';
$string['event:userdeletedfactor'] = 'Factor verwijderd';
$string['event:userfailedmfa'] = 'Multifactor-authenticatie mislukt';
$string['event:userpassedmfa'] = 'Verificatie gelukt';
$string['event:userrevokedfactor'] = 'Verificatiestap ingetrokken';
$string['event:usersetupfactor'] = 'Verificatiestap instellen';
$string['factor'] = 'Verificatiestap';
$string['factorreplace'] = 'Factor \'{$a}\' is vervangen.';
$string['factorreport'] = 'Rapportage verificatiestappen';
$string['factorreset'] = 'Je multifactor-authenticatie \'{$a->factor}\' is gereset door een site-beheerder. Je moet deze verificatie mogelijk opnieuw instellen. {$a->url}';
$string['factorresetall'] = 'Al je multifactor verificatiestappen zijn gereset door een site-beheerder. Je moet deze mogelijk opnieuw instellen. {$a}';
$string['factorrevoked'] = '\'{$a}\' succesvol verwijderd.';
$string['factorsetup'] = '\'{$a}\' succesvol ingesteld.';
$string['fallback'] = 'Terugval factor';
$string['fallback_info'] = 'Deze verificatiestap is een terugval factor die gebruikt wordt als er geen andere stappen zijn ingesteld. De verificatie van deze stap zal altijd mislukken.';
$string['guidance'] = 'Multifactor-authenticatie gebruikershandleiding';
$string['inputrequired'] = 'Gebruikers invoer';
$string['ipatcreation'] = 'IP-adres bij aanmaken verificatiestap';
$string['lastused'] = 'Laatst gebruikt';
$string['lastverified'] = 'Laatste verificatie';
$string['locked'] = '{$a} (niet beschikbaar)';
$string['lockedusersforallfactors'] = 'Geblokkeerde gebruikers: Alle verificatiestappen';
$string['lockedusersforfactor'] = 'Geblokkeerde gebruikers: {$a}';
$string['lockoutnotification'] = 'Je hebt nog {$a} pogingen over.';
$string['managefactor'] = 'Beheer factor';
$string['mfa'] = 'Multifactor-authenticatie';
$string['mfa:intro'] = 'Maak je account veiliger door het eisen van een bijkomende verificatiemethode bij aanmelden.';
$string['mfa:mfaaccess'] = 'Werk met MFA';
$string['mfareports'] = 'MFA rapportage';
$string['mfasettings'] = 'Beheer multifactor-authenticatie';
$string['na'] = 'nvt';
$string['needhelp'] = 'Hulp nodig?';
$string['nologinusers'] = 'Niet ingelogd';
$string['nonauthusers'] = 'Openstaande MFA';
$string['overall'] = 'Totaal';
$string['pending'] = 'In afwachting';
$string['performbulk'] = 'Bulk actie';
$string['pluginname'] = 'Multi-factor authenticatie';
$string['preferences:activefactors'] = 'Actieve verificatiestappen';
$string['preferences:availablefactors'] = 'Beschikbare verificatiestappen';
$string['preferences:header'] = 'Multi-factor authenticatie instellingen';
$string['preferenceslink'] = 'Klik hier om naar de gebruikersvoorkeuren te gaan';
$string['privacy:metadata:tool_mfa'] = 'Data met ingestelde MFA verificatiestappen';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP vanwaar de factor is ingesteld';
$string['privacy:metadata:tool_mfa:factor'] = 'Type verificatiestap';
$string['privacy:metadata:tool_mfa:id'] = 'Record ID';
$string['privacy:metadata:tool_mfa:label'] = 'Label voor factor-instantie, bijvoorbeeld apparaat of e-mail';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Tijd waarop gebruiker voor het laatst werd geverifieerd met deze stap';
$string['privacy:metadata:tool_mfa:secret'] = 'Geheim gegeven voor deze verificatiestap';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Tijdstip waarop deze factor-instantie is ingesteld';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Tijdstip waarop deze verificatiestap werd aangepast';
$string['privacy:metadata:tool_mfa:userid'] = 'Het ID van de gebruiker waar de verificatiestap bij hoort';
$string['privacy:metadata:tool_mfa_auth'] = 'Het laatste tijdstip waarop een succesvolle multifactor-authenticatie is geregistreerd voor een gebruikerID.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Tijdstip waarop gebruiker voor het laatste geauthenticeerd werd met';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'De gebruiker waarmee deze tijdstempel is geassocieerd.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Tijdelijke geheimen voor gebruikersauthenticatie.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'De verificatiestap waarmee dit geheim is geassocieerd.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'De geheime beveiligingscode.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'De sessie-ID waarmee dit geheim geassocieerd is.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'De gebruiker waar dit geheim mee geassocieerd is.';
$string['redirecterrordetected'] = 'Niet ondersteunde verwijzing gedetecteerd, uitvoering van het script is afgebroken. Omleidingsfout tussen MFA en {$a}.';
$string['remove'] = 'Verwijder';
$string['replace'] = 'Vervang';
$string['replacefactor'] = 'Vervang factor';
$string['resetconfirm'] = 'Verificatiestap gebruikers opnieuw instellen';
$string['resetfactor'] = 'Verificatiestappen gebruikers opnieuw instellen';
$string['resetfactorconfirm'] = 'Weet je zeker dat je deze verificatiestap opnieuw wil instellen voor {$a}?';
$string['resetfactorplaceholder'] = 'Gebruikersnaam of e-mail';
$string['resetsuccess'] = 'Verificatiestap \'{$a->factor}\' succesvol opnieuw ingesteld voor gebruiker \'{$a->username}\'.';
$string['resetsuccessbulk'] = 'Verificatiestap \'{$a}\' succesvol opnieuw ingesteld voor opgegeven gebruikers.';
$string['resetuser'] = 'Gebruiker:';
$string['revoke'] = 'Intrekken';
$string['revokefactor'] = 'Factor verwijderen';
$string['selectfactor'] = 'Selecteer verificatiestap om opnieuw in te stellen:';
$string['selectperiod'] = 'Selecteer de periode om terug te kijken voor het rapport:';
$string['settings:combinations'] = 'Samenvatting van goede condities voor de login';
$string['settings:debugmode'] = 'Schakel foutopsporingsmodus in';
$string['settings:debugmode_help'] = 'Foutopsporingsmodus toont een kleine notificatie banner op MFA beheerpagina\'s en op de gebruikers voorkeurenpagina met informatie over de ingestelde verificatie stappen.';
$string['settings:duration'] = 'Duur geldigheid geheim';
$string['settings:duration_help'] = 'De duur dat gegenereerde geheimen geldig zijn.';
$string['settings:enabled'] = 'MFA-plugin ingeschakeld';
$string['settings:enablefactor'] = 'Schakel verificatiestap in';
$string['settings:enablefactor_help'] = 'Vink aan om deze verificatiestap te kunnen gebruiken voor MFA Authenticatie.';
$string['settings:general'] = 'Algemene MFA-instellingen';
$string['settings:guidancecheck'] = 'Gebruik gidspagina';
$string['settings:guidancecheck_help'] = 'Voeg een link toe aan de gidspagina van de MFA Authenticatiepagina\'s en de MFA voorkeurenpagina.';
$string['settings:guidancefiles'] = 'Gidspaginabestanden';
$string['settings:guidancefiles_help'] = 'Voeg hier bestanden toe voor gebruik in de gidspagina en voeg ze in bij de pagina door gebruik te maken van de volgende plaatshouders {{filename}} (resolved path) of {{{filename}}} (html link) in de editor';
$string['settings:guidancepage'] = 'Inhoud gidspagina';
$string['settings:guidancepage_help'] = 'HTML hier ingevoegd zal worden getoond op de gidspagina. Voeg bestandsnamen in vanuit de bestandenzoeker om het bestand in te voegen met het pad naar het bestand {{filename}} of als een html-link met gebruik van {{{filename}}}.';
$string['settings:lockout'] = 'Aantal pogingen voor blokkering';
$string['settings:lockout_help'] = 'Aantal pogingen die een gebruiker heeft om factors in te geven voor ze niet meer mogen inloggen.';
$string['settings:redir_exclusions'] = 'URLs die niet naar de multifactor-controle moeten doorverwijzen';
$string['settings:redir_exclusions_help'] = 'Elke nieuwe regel is een relatieve URL van de siteroot waarvandaan de MFA-controle niet zal omleiden';
$string['settings:weight'] = 'Gewicht verificatiestap';
$string['settings:weight_help'] = 'Het gewicht voor deze factor indien succesvol. Een gebruiker heeft minstens 100 punten nodig om in te loggen.';
$string['setup'] = 'Instellen';
$string['setupfactor'] = 'Factor instellen';
$string['setuprequired'] = 'Gebruiker instellingen';
$string['state:fail'] = 'Mislukt';
$string['state:locked'] = 'Geblokkeerd';
$string['state:neutral'] = 'Neutraal';
$string['state:pass'] = 'Gelukt';
$string['state:unknown'] = 'Onbekend';
$string['subplugintype_factor'] = 'Factortype';
$string['subplugintype_factor_plural'] = 'Factortypen';
$string['totalusers'] = 'Totaal aantal gebruikers';
$string['totalweight'] = 'Totaal gewicht';
$string['userempty'] = 'Gebruiker kan niet leeg zijn.';
$string['userlogs'] = 'Gebruikerslogs';
$string['usernotfound'] = 'Kan gebruiker niet vinden.';
$string['usersauthedinperiod'] = 'Ingelogd';
$string['verification'] = '2-stapsverificatie';
$string['verification_desc'] = 'Om je account veilig te houden, moeten we controleren of jij dit echt bent.';
$string['verificationcode'] = 'Verificatiecode';
$string['verificationcode_help'] = 'De code verstrekt door de huidige verificatiestap';
$string['verifyalt'] = 'Probeer een andere manier om te verifiëren:';
$string['weight'] = 'Gewicht';
$string['yesremove'] = 'Ja, verwijder';
$string['yesreplace'] = 'Ja, vervang';
