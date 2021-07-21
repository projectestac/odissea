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
 * Strings for component 'report_security', language 'sv', version '3.11'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>Det rekommenderas att filbehörigheterna för <code>config.php</code> ändras efter installationen så att filen inte kan ändras av webbservern. Observera att denna åtgärd inte förbättrar serverns säkerhet nämvärt, även om den kan fördröja eller begränsa säkerhetsrisker generellt.</p>';
$string['check_configrw_name'] = 'Skrivbar config.php';
$string['check_configrw_ok'] = 'config.php kan inte ändras av PHP-skript.';
$string['check_configrw_warning'] = 'PHP-skript kan göra ändringar i config.php.';
$string['check_cookiesecure_details'] = '<p>Om https-kommunikation är aktiverad är det rekommenderat att möjliggöra sändning av säkra cookies. Du bör ha permanent omdirigering från http till https konfigurerad och helst stödja HSTS-headers.</p>';
$string['check_cookiesecure_error'] = 'Vänligen aktivera säkra cookies';
$string['check_cookiesecure_http'] = 'Du måste slå på HTTPS för att kunna använda säkra cookies';
$string['check_cookiesecure_name'] = 'Säkra cookies';
$string['check_cookiesecure_ok'] = 'Säkra cookies aktiverat.';
$string['check_crawlers_details'] = '<p> Inställningen "Öppen för sökmotorer" gör det möjligt för sökmotorer att nå kurser med gäståtkomst. Det är ingen idé att aktivera den här inställningen om gästinloggning inte är tillåten.</p>';
$string['check_crawlers_error'] = 'Sökmotorer tillåts, men gäståkomst är inaktiverad.';
$string['check_crawlers_info'] = 'Sökmotorer har gäståtkomst.';
$string['check_crawlers_name'] = 'Öppen för sökmotorer';
$string['check_crawlers_ok'] = 'Åtkomst för sökmotorer inaktiverad.';
$string['check_defaultuserrole_details'] = '<p>Alla inloggade användare ges förmågorna från rollen standardanvändare. Var god se till att inga riskabla förmågor tillåts i denna roll.</p>
<p>Den enda äldre typen för rollen standardanvändare som stöds är <em>Autentiserad användare</em>. Förmågan att se kurser ska inte vara aktiverad.</p>';
$string['check_defaultuserrole_error'] = 'Standardrollen "{$a}" är felaktigt definierad!';
$string['check_defaultuserrole_name'] = 'Standardroll för alla användare';
$string['check_defaultuserrole_notset'] = 'Standardroll ej angiven.';
$string['check_defaultuserrole_ok'] = 'Standardrollen för alla användardefinitioner är OK.';
$string['check_dirindex_info'] = 'Katalogindex bör inte vara aktiverat';
$string['check_displayerrors_details'] = '<p>Aktiveringen av PHP-inställningen <code>display_errors</code> rekommenderas inte på produktionswebbplatser eftersom felmeddelanden kan avslöja känslig information om din server.</p>';
$string['check_displayerrors_error'] = 'PHP-inställningen för att visa fel är aktiverad. Det rekommenderas att detta är inaktiverat.';
$string['check_displayerrors_name'] = 'Visning av PHP-felmeddelanden';
$string['check_displayerrors_ok'] = 'Visning av PHP-felmeddelanden är inaktiverad.';
$string['check_dotfiles_info'] = 'Inga filändelser, förutom /.välkänd/* bör vara publika';
$string['check_emailchangeconfirmation_details'] = '<p>Det rekommenderas att ett e-postbekräftelse steg krävs när användare ändrar sin e-postadress i sin profil. Om det är inaktiverat kan det hända att spammare försöker utnyttja servern för att skicka spam.</p>
<p>Email-fältet kan också vara låst från autentisering plugins, denna möjlighet beaktas inte här.</p>';
$string['check_emailchangeconfirmation_error'] = 'Användare kan ange valfri e-postadress.';
$string['check_emailchangeconfirmation_info'] = 'Användare kan endast ange e-postadresser från tillåtna domäner.';
$string['check_emailchangeconfirmation_name'] = 'Bekräftelse vid ändring av e-postadress';
$string['check_emailchangeconfirmation_ok'] = 'Bekräftelse vid ändring av e-postadressen i användarprofilen.';
$string['check_embed_details'] = '<p>Obegränsad objekts-inbäddning är mycket farligt - alla registrerade användare kan starta en XSS-attack mot andra serveranvändare. Den här inställningen ska inaktiveras på produktionsservrar.</p>';
$string['check_embed_error'] = 'Obegränsad objekts-inbäddning aktiverad. Detta är mycket farligt för majoriteten av servrar.';
$string['check_embed_name'] = 'Tillåt EMBED och OBJECT';
$string['check_embed_ok'] = 'Obegränsad objekts-inbäddning ej tillåten.';
$string['check_frontpagerole_details'] = '<p>Standardrollen för förstasidan ges till alla registrerade användare för aktiviteter på förstasidan. Vänligen se till att inga riskfyllda funktioner är tillåtna för den här rollen.</p>
<p>Det rekommenderas att en särskild roll skapas för detta ändamål och att en äldre rolltyp inte används.</p>';
$string['check_frontpagerole_error'] = 'Felaktigt definierad roll "{$a}" för förstasidan har upptäckts!';
$string['check_frontpagerole_name'] = 'Förstasidesroll';
$string['check_frontpagerole_notset'] = 'Förstasidesroll ej angiven.';
$string['check_frontpagerole_ok'] = 'Förstasidesroll OK.';
$string['check_guestrole_details'] = '<p>Gästrollen används för gäster, inte inloggade användare och tillfällig gästkursåtkomst. Vänligen se till att inga riskfyllda funktioner är tillåtna i den här rollen.</p> <p>Den enda äldre gästrolltyp som stöds är <em>Gäst</em>.</p>';
$string['check_guestrole_error'] = 'Gästrollen "{$a}" är felaktigt definierad!';
$string['check_guestrole_name'] = 'Gästroll';
$string['check_guestrole_notset'] = 'Gästroll är inte angiven.';
$string['check_guestrole_ok'] = 'Gästroll OK.';
$string['check_mediafilterswf_details'] = '<p>Automatisk swf-inbäddning är mycket farligt - alla registrerade användare kan starta en XSS-attack mot andra serveranvändare. Vänligen inaktivera den på produktionservrar.</p>';
$string['check_mediafilterswf_error'] = 'Mediafilter för Flash är aktiverat - detta är mycket farligt för de flesta servrar.';
$string['check_mediafilterswf_name'] = 'Aktiverat .swf-filter';
$string['check_mediafilterswf_ok'] = 'Mediafilter för Flash är inte aktiverat.';
$string['check_nodemodules_details'] = '<p>Katalogen <code>{$a->path}</code> innehåller Node.js-moduler och deras beroenden, vanligtvis installerade av NPM-verktyget. Dessa moduler kan behövas för lokal Moodle-utveckling, till exempel för att använda grunt-ramverket. De behövs inte för att köra en Moodle-plats i produktion och de kan innehålla potentiellt farlig kod som exponerar din webbplats för fjärrattacker.</p>
<p>Det rekommenderas starkt att ta bort katalogen om webbplatsen är tillgänglig via en offentlig webbadress, eller åtminstone förbjuda webbåtkomst till den i din webserverkonfiguration.</p>';
$string['check_nodemodules_info'] = 'Katalogen node_modules bör inte finnas på produktionsservrar.';
$string['check_nodemodules_name'] = 'Node.js-bibliotek';
$string['check_openprofiles_details'] = 'Öppna användarprofiler kan missbrukas av spammare. Det rekommenderas att antingen <code>Tvinga användare att logga in för profiler</code> eller <code>Tvinga användare att logga in</code> är aktiverat.';
$string['check_openprofiles_error'] = 'Vemsomhelst kan visa användarprofiler utan att logga in.';
$string['check_openprofiles_name'] = 'Öppna användarprofiler';
$string['check_openprofiles_ok'] = 'Inloggning krävs för att visa användarprofiler.';
$string['check_passwordpolicy_details'] = '<p>Det rekommenderas att en lösenordsprincip är inställd, eftersom att gissa lösenord mycket ofta är det enklaste sättet att få obehörig åtkomst. Gör inte kraven alltför strikta dock, eftersom detta kan resultera i att användarna inte kan komma ihåg sina lösenord och antingen glömmer dem eller skriver ner dem.</p>';
$string['check_passwordpolicy_error'] = 'Lösenordsprincip ej konfigurerad.';
$string['check_passwordpolicy_name'] = 'Lösenordspolicy';
$string['check_passwordpolicy_ok'] = 'Lösenordspolicy är aktiverad.';
$string['check_preventexecpath_details'] = '<p>Att tillåta att sökvägar till körbara program anges via administratörsgränssnittet är en vektor för privilegieskalering. Detta måste tvingas i config.php:</p><p><code>$CFG->preventexecpath = true;<code></p>';
$string['check_preventexecpath_name'] = 'Sökvägar till programfiler';
$string['check_preventexecpath_ok'] = 'Sökvägar till körbara filer är endast möjliga att ange i config.php.';
$string['check_preventexecpath_warning'] = 'Sökvägar till körbara filer kan anges via administratörsgränssnittet.';
$string['check_publicpaths_403'] = '(Returnerade 403, skulle helst vara 404)';
$string['check_publicpaths_generic'] = '{$a)-filer bör inte vara publika';
$string['check_publicpaths_name'] = 'Kontrollera alla publika / privata sökvägar';
$string['check_riskadmin_detailsok'] = '<p>Vänligen verifiera följande lista över systemadministratörer:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Vänligen verifiera följande lista över systemadministratörer:</p>{$a->admins}
<p>Det rekommenderas att endast tilldela administratörsroll i systemetskontexten. Följande användare har administratörsrolltilldelningar (som inte stöds) i andra kontext:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Administratörer';
$string['check_riskadmin_ok'] = 'Hittade {$a} serveradministratörer(er)';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) granska rolltilldelning</a>';
$string['check_riskadmin_warning'] = 'Hittade {$a->admincount} serveradministratörer och {$a->unsupcount} administratörsrolltilldelningar som inte stöds.';
$string['check_riskbackup_details_overriddenroles'] = '<p>Det här aktiva åsidosättningar ger användare möjlighet att inkludera användardata i säkerhetskopior. Vänligen försäkra dig om att denna behörighet är nödvändig.</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>Följande systemroller tillåter för närvarande användare att inkludera användardata i säkerhetskopior. Vänligen försäkra dig om att denna behörighet är nödvändig.</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>På grund av ovanstående roller eller lokala åsidosättningar har följande användarkonton för närvarande behörighet att göra säkerhetskopior som innehåller privata data från alla användare som registrerats i deras kurs. Kontrollera att de är (a) betrodda och (b) skyddas av starka lösenord:</p> {$a}';
$string['check_riskbackup_detailsok'] = 'Inga roller tillåter uttryckligen säkerhetskopiering av användardata.  Observera dock att administratörer med "göraallt"-behörighet är fortfarande sannolikt kan göra detta.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} i {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'Säkerhetskopiera användardata';
$string['check_riskbackup_ok'] = 'Inga roller tillåter uttryckligen säkerhetskopiering av användardata';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) i {$a->contextname}</a>';
$string['check_riskbackup_warning'] = 'Hittade {$a->rolecount} roller, {$a->overridecount} åsidosättanden och {$a->usercount} användare med möjlighet att säkerhetskopiera användardata.';
$string['check_riskxss_details'] = '<p>RISK_XSS betecknar samtliga farliga funktionsbehörigheter som endast betrodda användare får använda.</p>
<p>Kontrollera följande användarlista och bekräfta att användarna är betrodda på denna server:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS-betrodda användare';
$string['check_riskxss_warning'] = 'RISK_XSS - hittade {$a} användare som måste vara betrodda.';
$string['check_unsecuredataroot_details'] = '<p>Dataroot-katalogen får inte vara tillgänglig via webben. Det bästa sättet att se till att katalogen inte är åtkomlig är att använda en katalog utanför den offentliga webbkatalogen.</p><p>Om du flyttar katalogen måste du uppdatera inställningen <code>$CFG->dataroot</code> i <code>config.php</code>.</p>';
$string['check_unsecuredataroot_error'] = 'Din dataroot-katalog <code>{$a}</code> är på fel plats och exponeras för webben!';
$string['check_unsecuredataroot_name'] = 'Osäker rotkatalog';
$string['check_unsecuredataroot_ok'] = 'Datarootkatalogen får inte vara tillgänglig från webben.';
$string['check_unsecuredataroot_warning'] = 'Din dataroot-katalog <code>{$a}</code> är på fel plats och exponeras för webben!';
$string['check_vendordir_details'] = '<p>Katalogen <code>{$a->path}</code> innehåller olika tredjepartsbibliotek och deras beroenden, som typiskt installeras av PHP Composer. Dessa bibliotek kan behövas för lokal Moodle-utveckling, till exempel för installation av PHPUnit-ramverket. De behövs inte för att köra en Moodle-plats i produktion och de kan innehålla potentiellt farlig kod som exponerar din webbplats för fjärrattacker.</p> <p>Det rekommenderas starkt att ta bort katalogen om webbplatsen är tillgänglig via en offentlig webbadress, eller åtminstone förbjuda webbåtkomst till den i din webserverkonfiguration.</p>';
$string['check_vendordir_info'] = 'Vendor-katalogen ska inte finnas på publika webbplatser.';
$string['check_vendordir_name'] = 'Vendor-katalog';
$string['check_webcron_details'] = '<p>Att köra cron från en webbläsare kan exponera privilegierad information för anonyma användare. Det rekommenderas att endast köra cron från kommandoraden eller ställa in ett lösenord för cron för fjärråtkomst.</p>';
$string['check_webcron_name'] = 'Webb-cron';
$string['check_webcron_ok'] = 'Anonyma användare har inte åtkomst till cron.';
$string['check_webcron_warning'] = 'Anonyma användare har åtkomst till cron.';
$string['configuration'] = 'Konfiguration';
$string['description'] = 'Beskrivning';
$string['details'] = 'Detaljer';
$string['eventreportviewed'] = 'Visade säkerhetsrapport';
$string['issue'] = 'Problem';
$string['pluginname'] = 'Säkerhetsöversikt';
$string['privacy:metadata'] = 'Pluginmodulen Säkerhetsöversikt lagrar ingen personlig information.';
$string['security:view'] = 'Visa säkerhetsrapport';
$string['timewarning'] = 'Databearbetningen kan ta tid, ha tålamod...';
