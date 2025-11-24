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
 * Strings for component 'tool_oauth2', language 'ca', version '4.5'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrisk'] = 'Entenc que desactivar la verificació del correu electrònic pot ser un problema de seguretat.';
$string['acceptrisk_help'] = 'La desactivació de la verificació del correu electrònic pot permetre que un usuari s\'autentiqui com un altre usuari.';
$string['authconfirm'] = 'Aquesta acció atorgarà accés permanent mitjançant l\'API al Moodle per al compte autenticat. Està pensat per ser utilitzat com a compte del sistema per gestionar fitxers propietat de Moodle.';
$string['authconnected'] = 'El compte del sistema ara està connectat per accedir fora de línia';
$string['authnotconnected'] = 'El compte del sistema no estava connectat per accedir fora de línia';
$string['clever_service'] = 'Clever';
$string['configured'] = 'Configurat';
$string['configuredstatus'] = 'Configurat';
$string['connectsystemaccount'] = 'Connecta a un compte de sistema';
$string['createfromtemplate'] = 'Crea un servei OAuth 2 des d\'una plantilla';
$string['createfromtemplatedesc'] = 'Trieu una de les plantilles de servei OAuth 2 següents per crear un servei OAuth amb una configuració vàlida per a un dels tipus de servei coneguts. Això crearà el servei OAuth 2, amb tots els punts finals correctes i els paràmetres necessaris per a l\'autenticació, tot i que encara haureu d\'introduir l\'identificador de client i el secret per al nou servei abans que es pugui utilitzar.';
$string['createnewendpoint'] = 'Crea un punt final nou per a l\'emissor «{$a}»';
$string['createnewservice'] = 'Crea un servei nou:';
$string['createnewuserfieldmapping'] = 'Crea un mapatge de camp d\'usuari nou per a l\'emissor «{$a}»';
$string['custom_service'] = 'Personalitzat';
$string['deleteconfirm'] = 'Esteu segur que voleu esborrar l\'emissor d\'identitat «{$a}»? Qualsevol connector que depengui d\'aquest emissor deixarà de funcionar.';
$string['deleteendpointconfirm'] = 'Esteu segur que voleu esborrar el punt final «{$a->endpoint}» de l\'emissor «{$a->issuer}»? Qualsevol connector que depengui d\'aquest punt final deixarà de funcionar.';
$string['deleteuserfieldmappingconfirm'] = 'Esteu segur que voleu esborrar el mapatge de camps d\'usuari per a l\'emissor «{$a}»?';
$string['discovered'] = 'El descobriment del servei ha estat satisfactori';
$string['discovered_help'] = 'El descobriment significa que els punts finals d\'OAuth 2 es podrien determinar automàticament a partir de l\'URL base del servei OAuth. No cal que es «descobreixin» tots els serveis, però si no ho són, s\'hauran d\'introduir manualment els punts finals i la informació de mapatges d\'usuari.';
$string['discoverystatus'] = 'Descobriment';
$string['editendpoint'] = 'Edita el punt final: {$a->endpoint} per a l\'emissor {$a->issuer}';
$string['editendpoints'] = 'Configura els punts finals';
$string['editissuer'] = 'Edita l\'emissor d\'identitat: {$a}';
$string['edituserfieldmapping'] = 'Edita el mapatge de camps d\'usuari per a l\'emissor {$a}';
$string['edituserfieldmappings'] = 'Configura el mapatge de camps d\'usuari';
$string['endpointdeleted'] = 'S\'ha esborrat el punt final';
$string['endpointname'] = 'Nom';
$string['endpointname_help'] = 'Clau utilitzada per cercar aquest punt final. Ha d\'acabar amb «_endpoint».';
$string['endpointsforissuer'] = 'Punts finals per a l\'emissor: {$a}';
$string['endpointurl'] = 'URL';
$string['endpointurl_help'] = 'URL d\'aquest punt final. Cal utilitzar el protocol https://.';
$string['facebook_service'] = 'Facebook';
$string['google_service'] = 'Google';
$string['imsobv2p1_service'] = 'Open Badges';
$string['issueralloweddomains'] = 'Dominis d\'inici de sessió';
$string['issueralloweddomains_help'] = 'Si s\'estableix, aquest paràmetre és una llista de dominis separats per comes als quals es restringiran els inicis de sessió quan utilitzeu aquest proveïdor.';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = 'URL base de servei';
$string['issuerbaseurl_help'] = 'URL base utilitzat per accedir al servei.';
$string['issuerclientid'] = 'ID de client';
$string['issuerclientid_help'] = 'L\'identificador de client OAuth per a aquest emissor.';
$string['issuerclientsecret'] = 'Secret de client';
$string['issuerclientsecret_help'] = 'El secret de client OAuth per a aquest emissor.';
$string['issuerdeleted'] = 'S\'ha esborrat l\'emissor d\'identitat';
$string['issuerdisabled'] = 'S\'ha deshabilitat l\'emissor d\'identitat';
$string['issuerenabled'] = 'S\'ha habilitat l\'emissor d\'identitat';
$string['issuerimage'] = 'URL del logotip';
$string['issuerimage_help'] = 'URL d\'una imatge que s\'utilitza per mostrar un logotip per aquest emissor. Es pot mostrar a la pàgina d\'inici de sessió.';
$string['issuerloginpagename'] = 'Nom que es mostra a la pàgina d\'inici de sessió';
$string['issuerloginpagename_help'] = 'Si s\'especifica, aquest nom s\'utilitzarà a la pàgina d\'inici de sessió en lloc del nom del servei.';
$string['issuerloginparams'] = 'Paràmetres addicionals inclosos en una sol·licitud d\'inici de sessió.';
$string['issuerloginparams_help'] = 'Alguns sistemes requereixen paràmetres addicionals per a una sol·licitud d\'inici de sessió per poder llegir el perfil bàsic de l\'usuari.';
$string['issuerloginparamsoffline'] = 'Paràmetres addicionals inclosos en una sol·licitud d\'inici de sessió per a l\'accés fora de línia.';
$string['issuerloginparamsoffline_help'] = 'Cada sistema OAuth defineix una manera diferent de sol·licitar accés fora de línia. Per exemple, Google requereix els paràmetres addicionals: «access_type=offline&prompt=consent». Aquests paràmetres haurien d\'estar en format de paràmetre de consulta d\'URL.';
$string['issuerloginscopes'] = 'Àmbits inclosos en una sol·licitud d’inici de sessió.';
$string['issuerloginscopes_help'] = 'Alguns sistemes requereixen àmbits addicionals per a una sol·licitud d\'inici de sessió per poder llegir el perfil bàsic de l\'usuari. Els àmbits estàndard per a un sistema compatible amb OpenID Connect són «openid profile email».';
$string['issuerloginscopesoffline'] = 'Àmbits inclosos en una sol·licitud d\'inici de sessió per a l\'accés fora de línia.';
$string['issuerloginscopesoffline_help'] = 'Cada sistema OAuth defineix una manera diferent de sol·licitar accés fora de línia. Per exemple, Microsoft requereix un àmbit addicional «offline_access».';
$string['issuername'] = 'Nom';
$string['issuername_help'] = 'Nom de l\'emissor de la identitat. Es pot mostrar a la pàgina d\'inici de sessió.';
$string['issuerrequireconfirmation'] = 'Requereix correu electrònic de verificació';
$string['issuerrequireconfirmation_help'] = 'Requereix que tots els usuaris verifiquin la seva adreça electrònica abans de poder iniciar sessió amb OAuth. Això s\'aplica als comptes de creació recent com a part del procés d\'inici de sessió o quan un compte de Moodle existent està connectat a un inici de sessió OAuth mitjançant adreces de correu electrònic coincidents.';
$string['issuers'] = 'Emissors';
$string['issuersetup'] = 'Instruccions detallades per la configuració dels serveis comuns d\'OAuth 2';
$string['issuersetuptype'] = 'Instruccions detallades per configurar el proveïdor OAuth 2 de {$a}';
$string['issuershowonloginpage'] = 'Mostra a la pàgina d\'autenticació';
$string['issuershowonloginpage_help'] = 'Si el connector d\'autenticació OAuth 2 està habilitat, aquest emissor d\'inici de sessió apareixerà a la pàgina d\'inici de sessió per permetre als usuaris iniciar sessió amb comptes d\'aquest emissor.';
$string['issuersservicesallow'] = 'Permetre serveis';
$string['issuersservicesnotallow'] = 'No permetre serveis';
$string['issuerusedforinternal'] = 'Serveis interns';
$string['issuerusedforlogin'] = 'Inici de sessió';
$string['issuerusein'] = 'Aquest servei s\'utilitzarà a';
$string['issuerusein_help'] = 'Els serveis OAuth 2 es poden utilitzar per a serveis interns, a la pàgina d\'inici de sessió o a tots dos, si cal.';
$string['issueruseineverywhere'] = 'Pàgina d\'inici de sessió i serveis interns';
$string['issueruseininternalonly'] = 'Només serveis interns';
$string['issueruseinloginonly'] = 'Només la pàgina d\'inici de sessió';
$string['linkedin_service'] = 'LinkedIn';
$string['logindisplay'] = 'Mostra a la pàgina d\'inici de sessió com a';
$string['loginissuer'] = 'Permet l\'autenticació';
$string['microsoft_service'] = 'Microsoft';
$string['moodlenet_service'] = 'MoodleNet';
$string['nextcloud_service'] = 'Nextcloud';
$string['notconfigured'] = 'Sense configurar';
$string['notdiscovered'] = 'El descobriment del servei no ha estat satisfactori';
$string['notloginissuer'] = 'No permetre l\'inici de sessió';
$string['pluginname'] = 'Serveis OAuth 2';
$string['privacy:metadata'] = 'El connector de serveis OAuth 2 no emmagatzema cap dada personal.';
$string['savechanges'] = 'Desa els canvis';
$string['serviceshelp'] = 'Instruccions de configuració del proveïdor de serveis.';
$string['systemaccountconnected'] = 'Compte del sistema connectat';
$string['systemaccountconnected_help'] = 'Els comptes del sistema s\'utilitzen per proporcionar funcionalitats avançades per als connectors. No són necessaris només per a la funcionalitat d\'inici de sessió, però altres connectors que utilitzen el servei OAuth poden oferir un conjunt reduït de funcions si el compte del sistema no s\'ha connectat. Per exemple, els repositoris no poden suportar «enllaços controlats» sense un compte de sistema per realitzar operacions de fitxers.';
$string['systemaccountnotconnected'] = 'Compte de sistema no connectat';
$string['systemauthstatus'] = 'Compte de sistema connectat';
$string['usebasicauth'] = 'Autentica les sol·licituds de testimoni mitjançant capçaleres HTTP';
$string['usebasicauth_help'] = 'Utilitzeu l\'esquema d\'autenticació bàsic HTTP quan envieu l\'idenfiticador de client i la contrasenya amb una sol·licitud d\'actualització del testimoni. Recomanat per l\'estàndard OAuth 2, però pot ser que no estigui disponible amb alguns emissors.';
$string['userfieldexternalfield'] = 'Nom del camp extern';
$string['userfieldexternalfield_error'] = 'Aquest camp no pot contenir HTML.';
$string['userfieldexternalfield_help'] = 'Nom del camp proporcionat pel sistema OAuth extern.';
$string['userfieldinternalfield'] = 'Nom del camp intern';
$string['userfieldinternalfield_help'] = 'Nom del camp d\'usuari de Moodle que s\'ha de mapar des del camp extern.';
$string['userfieldmappingdeleted'] = 'S\'ha esborrat el mapatge del camp d\'usuari';
$string['userfieldmappingsforissuer'] = 'Mapatge de camps d\'usuari per a l\'emissor: {$a}';
