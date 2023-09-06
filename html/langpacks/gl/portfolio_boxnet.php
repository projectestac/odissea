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
 * Strings for component 'portfolio_boxnet', language 'gl', version '4.1'.
 *
 * @package     portfolio_boxnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID do cliente';
$string['clientsecret'] = 'Segredo do cliente';
$string['existingfolder'] = 'Cartafol existente para incluír ficheiros';
$string['folderclash'] = 'O cartafol que tenta crear xa existe';
$string['foldercreatefailed'] = 'Non foi posíbel crear o cartafol de destino en Box';
$string['folderlistfailed'] = 'Non foi posíbel crear o cartafol destino en Box';
$string['missinghttps'] = 'Requírese HTTPS';
$string['missinghttps_help'] = 'Box soamente traballará cun sitio que teña activado HTTPS.';
$string['missingoauthkeys'] = 'Faltan o ID e o segredo do cliente';
$string['missingoauthkeys_help'] = 'Non hai un ID ou segredo do cliente configurado para este engadido. Pode obter un destes da páxina de desenvolvemento de Box.';
$string['newfolder'] = 'Cartafol novo para incluír ficheiros';
$string['noauthtoken'] = 'Non foi posíbel obter un testemuño de autenticación para empregar nesta sesión';
$string['notarget'] = 'Ten que especificar se se enviará a un cartafol existente ou a un novo';
$string['noticket'] = 'Non foi posíbel recibir un ticket dende Box para comezar coa sesión de autenticación';
$string['password'] = 'O seu contrasinal de Box (non se gardará)';
$string['pluginname'] = 'Caixa';
$string['privacy:metadata'] = 'Este engadido envía datos externamente a unha conta de Box ligada. Non almacena datos localmente.';
$string['privacy:metadata:data'] = 'Datos persoais pasados a mediante o subsistema portafolios.';
$string['sendfailed'] = 'Non foi posíbel enviar contido a Box: {$a}';
$string['setupinfo'] = 'Instrucións de configuración';
$string['setupinfodetails'] = 'Para obter un segredo e un ID de cliente, entre en Box e visite a <a href="{$a->servicesurl}">Páxina de desenvolvedores de Box(Box developers page)</a>. Siga «Crear unha nova aplicación (Create new application» e cree unha nova aplicación para o seu sitio Moodle. O ID do cliente e o segredo amósanse na sección de «OAuth2 parameters» do formulario de edición da aplicación. Opcionalmente, tamén pode  fornecer outra información sobre o seu sitio Moodle';
$string['sharedfolder'] = 'Compartido';
$string['sharefile'] = 'Compartir este ficheiro?';
$string['sharefolder'] = 'Compartir este cartafol novo?';
$string['targetfolder'] = 'Cartafol de destino';
$string['tobecreated'] = 'Para crear';
$string['username'] = 'O seu nome de usuario en Box (non se gardará)';
$string['warninghttps'] = 'Box require que o seu sitio estea usando HTTPS para que poida funcionar o portafolios.';
