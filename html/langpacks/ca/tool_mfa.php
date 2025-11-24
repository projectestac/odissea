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
 * Strings for component 'tool_mfa', language 'ca', version '4.5'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Pes assolit';
$string['added'] = 'Afegit';
$string['alltime'] = 'Tots els temps';
$string['areyousure'] = 'Esteu segur que voleu eliminar aquest factor?';
$string['cancellogin'] = 'Cancel·la l\'inici de sessió';
$string['combination'] = 'Combinació';
$string['confirmationreplace'] = 'Immediatament se us demanarà que configureu un altre «{$a}». Assegureu-vos que esteu a punt per completar el procés de configuració.';
$string['confirmationrevoke'] = 'Ja no podreu utilitzar «{$a}» per iniciar la sessió en aquest lloc.';
$string['connector'] = 'Y';
$string['debugmode:heading'] = 'Mode de depuració';
$string['devicename'] = 'Dispositiu';
$string['editfactor'] = 'Edita la configuració del factor {$a}';
$string['email:subject'] = 'No es pot iniciar la sessió a {$a}';
$string['enablefactor'] = 'Habilita el factor';
$string['entercode'] = 'Introduïu el codi';
$string['error:actionnotfound'] = 'L\'acció «{$a}» no és compatible';
$string['error:couldnotreplace'] = 'No s\'ha pogut substituir aquest factor.';
$string['error:directaccess'] = 'No s\'hauria d\'accedir directament a aquesta pàgina';
$string['error:factornotenabled'] = 'El factor d\'autenticació multifactor «{$a}» no està habilitat';
$string['error:factornotfound'] = 'El factor d\'autenticació multifactor «{$a}» no s\'ha trobat';
$string['error:isguestuser'] = 'No s\'admeten convidats aquí.';
$string['error:notenoughfactors'] = 'No s\'ha pogut autenticar';
$string['error:reauth'] = 'No s\'ha pogut confirmar la vostra identitat prou bé per complir amb la política de seguretat d\'autenticació del lloc.<br>Això pot ser degut a:<br> 1) Passos bloquejats: espereu uns minuts i torneu-ho a intentar.<br> 2) Passos fallats: comproveu els detalls de cada pas.<br> 3) Passos omesos: torneu a carregar aquesta pàgina o torneu a intentar iniciar la sessió.';
$string['error:revoke'] = 'No es pot eliminar el factor';
$string['error:setupfactor'] = 'No es pot configurar el factor';
$string['error:support'] = 'Si encara no podeu iniciar la sessió o creieu que esteu veient això per error, envieu un correu electrònic a:';
$string['error:wrongfactorid'] = 'L\'ID del factor «{$a}» és incorrecte';
$string['event:failfactor'] = 'L\'autenticació multifactor ha fallat perquè ha fallat un factor';
$string['event:faillockout'] = 'L\'autenticació multifactor ha fallat a causa de massa intents.';
$string['event:failnotenoughfactors'] = 'L\'autenticació multifactor ha fallat perquè no hi ha prou factors satisfets.';
$string['event:userdeletedfactor'] = 'S\'ha esborrat el factor';
$string['event:userfailedmfa'] = 'L\'usuari no ha passat l\'autenticació multifactor';
$string['event:userpassedmfa'] = 'S\'ha passat la verificació';
$string['event:userrevokedfactor'] = 'Revocació del factor';
$string['event:usersetupfactor'] = 'Configuració del factor';
$string['factor'] = 'Factor';
$string['factorreplace'] = 'El factor «{$a}» s\'ha substituït correctament.';
$string['factorreport'] = 'Informe de tots els factors';
$string['factorreset'] = 'Un administrador del lloc ha restablert l\'autenticació multifactor «{$a->factor}». És possible que hàgiu de tornar a configurar aquest factor. {$a->url}';
$string['factorresetall'] = 'Un administrador del lloc web ha restablert tots els factors d\'autenticació multifactor. És possible que hàgiu de tornar a configurar aquests factors. {$a}';
$string['factorrevoked'] = 'S\'ha suprimit «{$a}» correctament.';
$string['factorsetup'] = 'S\'ha configurat «{$a}» correctament.';
$string['fallback'] = 'Factor de reserva';
$string['fallback_info'] = 'Aquest factor és una alternativa si no hi ha altres factors configurats. Aquest factor sempre fallarà.';
$string['guidance'] = 'Guia d\'usuari de l\'autenticació multifactor';
$string['inputrequired'] = 'Entrada de l\'usuari';
$string['ipatcreation'] = 'Adreça IP quan es va crear el factor';
$string['lastused'] = 'Utilitzat per darrera vegada';
$string['locked'] = '{$a} (No disponible)';
$string['lockedusersforallfactors'] = 'Usuaris bloquejats: tots els factors';
$string['lockedusersforfactor'] = 'Usuaris bloquejats: {$a}';
$string['lockoutnotification'] = 'Us queden {$a} intents.';
$string['managefactor'] = 'Gestiona el factor';
$string['mfa'] = 'Autenticació multifactor';
$string['mfa:intro'] = 'Fes que el vostre compte sigui més segur requerint un mètode de verificació addicional en iniciar la sessió.';
$string['mfa:mfaaccess'] = 'Interactua amb MFA';
$string['mfareports'] = 'Informes MFA';
$string['mfasettings'] = 'Gestiona l\'autenticació multifactor';
$string['na'] = 'n/d';
$string['needhelp'] = 'Necessiteu ajuda?';
$string['nologinusers'] = 'No heu iniciat la sessió';
$string['nonauthusers'] = 'MFA pendents';
$string['overall'] = 'General';
$string['pending'] = 'Pendent';
$string['performbulk'] = 'Acció massiva';
$string['pluginname'] = 'Autenticació multifactor';
$string['preferences:activefactors'] = 'Factors actius';
$string['preferences:availablefactors'] = 'Factors disponibles';
$string['preferences:header'] = 'Preferències d\'autenticació multifactor';
$string['preferenceslink'] = 'Feu clic aquí per anar a les preferències d\'usuari';
$string['privacy:metadata:tool_mfa'] = 'Dades amb factors MFA configurats';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP des de la qual es va configurar el factor.';
$string['privacy:metadata:tool_mfa:factor'] = 'Tipus de factor';
$string['privacy:metadata:tool_mfa:id'] = 'ID del registre';
$string['privacy:metadata:tool_mfa:label'] = 'Etiqueta per a la instància del factor, p. ex. dispositiu o correu electrònic.';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Hora en què l\'usuari va ser verificat per última vegada amb aquest factor';
$string['privacy:metadata:tool_mfa:secret'] = 'Qualsevol dada secreta per al factor';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Hora en què es va configurar la instància del factor.';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Hora en què es va modificar el factor per darrera vegada';
$string['privacy:metadata:tool_mfa:userid'] = 'L\'ID de l\'usuari al qual pertany el factor';
$string['privacy:metadata:tool_mfa_auth'] = 'L\'última vegada que es va registrar una autenticació multifactor correcta per a un ID d\'usuari.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'Hora en què l\'usuari es va autenticar per última vegada';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'L\'usuari amb el qual està associada aquesta marca de temps.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Secrets temporals per a l\'autenticació d\'usuaris.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'El factor amb què s\'associa aquest secret.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'El codi secret de seguretat.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'L\'ID de sessió amb què està associat aquest secret.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'L\'usuari amb qui està associat aquest secret.';
$string['redirecterrordetected'] = 'S\'ha detectat una redirecció no compatible, l\'execució de l\'script ha finalitzat. S\'ha produït un error de redirecció entre MFA i {$a}.';
$string['remove'] = 'Suprimeix';
$string['replace'] = 'Substitueix';
$string['replacefactor'] = 'Substitueix el factor';
$string['resetconfirm'] = 'Restableix el factor d\'usuari';
$string['resetfactor'] = 'Restablieix els factors d\'autenticació de l\'usuari';
$string['resetfactorconfirm'] = 'Esteu segur que voleu restablir aquest factor per a {$a}?';
$string['resetfactorplaceholder'] = 'Nom d\'usuari o adreça de correu electrònic';
$string['resetsuccess'] = 'El factor «{$a->factor}» s\'ha restablert correctament per a l\'usuari «{$a->username}».';
$string['resetsuccessbulk'] = 'El factor «{$a}» s\'ha restablert correctament per als usuaris proporcionats.';
$string['resetuser'] = 'Usuari:';
$string['revokefactor'] = 'Elimina el factor';
$string['selectfactor'] = 'Seleccioneu el factor a restablir:';
$string['selectperiod'] = 'Seleccioneu un període enrere per a l\'informe:';
$string['settings:combinations'] = 'Resum de les bones condicions per iniciar sessió';
$string['settings:debugmode'] = 'Habilita el mode de depuració';
$string['settings:debugmode_help'] = 'El mode de depuració mostrarà un petit bàner de notificació a les pàgines d\'administració de MFA, així com a la pàgina de preferències de l\'usuari amb informació sobre els factors actualment activats.';
$string['settings:duration'] = 'Durada de validesa dels secrets';
$string['settings:duration_help'] = 'La quantitat de temps que els secrets generats són vàlids.';
$string['settings:enabled'] = 'El connector MFA està habilitat';
$string['settings:enablefactor'] = 'Habilita el factor';
$string['settings:enablefactor_help'] = 'Marqueu aquest control per permetre que el factor s\'utilitzi per a l\'autenticació MFA.';
$string['settings:general'] = 'Paràmetres MFA generals';
$string['settings:guidancecheck'] = 'Utilitza la pàgina d\'orientació';
$string['settings:guidancecheck_help'] = 'Afegiu un enllaç a la pàgina d\'orientació a les pàgines d\'autenticació MFA i a la pàgina de preferències MFA.';
$string['settings:guidancefiles'] = 'Fitxers de la pàgina d\'orientació';
$string['settings:guidancefiles_help'] = 'Afegiu aquí qualsevol fitxer per utilitzar-lo a la pàgina d\'orientació i incrusteu-lo a la pàgina mitjançant {{filename}} (camí resolt) o {{{filename}}} (enllaç html) a l\'editor.';
$string['settings:guidancepage'] = 'Contingut de la pàgina d\'orientació';
$string['settings:guidancepage_help'] = 'L\'HTML afegit aquí es mostrarà a la pàgina d\'orientació. Introduïu els noms de fitxer de l\'àrea de fitxers per incrustar el fitxer amb la ruta resolta {{filename}} o com a enllaç HTML mitjançant {{{filename}}}.';
$string['settings:lockout'] = 'Llindar de bloqueig';
$string['settings:lockout_help'] = 'Nombre d\'intents que un usuari pot respondre als factors d\'entrada abans que se li impedeixi iniciar la sessió.';
$string['settings:redir_exclusions'] = 'URL que no haurien de redirigir a la comprovació MFA.';
$string['settings:redir_exclusions_help'] = 'Cada nova línia és un URL relatiu des de l\'arrel del lloc des del qual no es redirigirà a la comprovació MFA.';
$string['settings:weight'] = 'Pes del factor';
$string['settings:weight_help'] = 'El pes d\'aquest factor si se supera. Un usuari necessita almenys 100 punts per iniciar la sessió.';
$string['setupfactor'] = 'Configuració del factor';
$string['setupfactorbuttonadditional'] = 'Afegeix un factor addicional';
$string['setuprequired'] = 'Configuració de l\'usuari';
$string['state:fail'] = 'Falla';
$string['state:locked'] = 'Bloquejat';
$string['state:neutral'] = 'Neutre';
$string['state:pass'] = 'Passa';
$string['state:unknown'] = 'Desconegut';
$string['subplugintype_factor'] = 'Tipus de factor';
$string['subplugintype_factor_plural'] = 'Tipus de factors';
$string['totalusers'] = 'Usuaris totals';
$string['totalweight'] = 'Pes total';
$string['userempty'] = 'L\'usuari no pot estar buit.';
$string['userlogs'] = 'Registres de l\'usuari';
$string['usernotfound'] = 'No s\'ha pogut localitzar l\'usuari.';
$string['usersauthedinperiod'] = 'Sessió iniciada';
$string['verification'] = 'Verificació en dos passos';
$string['verification_desc'] = 'Per mantenir el vostre compte segur, hem de comprovar que realment sou vos.';
$string['verificationcode'] = 'Codi de verificació';
$string['verificationcode_help'] = 'El codi de verificació proporcionat pel factor d\'autenticació actual.';
$string['verifyalt'] = 'Prova una altra manera de verificar:';
$string['weight'] = 'Pes';
$string['yesremove'] = 'Sí, esborra-ho';
$string['yesreplace'] = 'Sí, substitueix-ho';
