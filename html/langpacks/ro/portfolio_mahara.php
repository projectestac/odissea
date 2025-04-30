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
 * Strings for component 'portfolio_mahara', language 'ro', version '4.4'.
 *
 * @package     portfolio_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Activați Leap2A portfolio support (necesită Mahara 1.3 sau o versiune superioară )';
$string['err_invalidhost'] = 'Gazda MNet nu esta validă';
$string['err_invalidhost_help'] = 'Acest plugin este configurat greșit pentru a indica o gazdă MNet nevalidă (sau ștearsă). Acest plugin se bazează pe colegii Moodle Networking cu SSO IDP publicat, SSO_SP abonat și portofoliu abonat <b> și </b> publicat.';
$string['err_networkingoff'] = 'MNet este dezactivat';
$string['err_networkingoff_help'] = 'Autentificarea MNet este dezactivată în prezent. Vă rugăm să îl activați înainte de a încerca să configurați acest plugin. Orice instanță a acestui plugin a fost ascunsă până când MNet este activat. Apoi vor trebui setate manual la vizibil din nou.';
$string['err_nomnetauth'] = 'Plugin-ul de autentificare MNet este dezactivat';
$string['err_nomnetauth_help'] = 'Pluginul de autentificare MNet este dezactivat, dar este necesar pentru acest serviciu';
$string['err_nomnethosts'] = 'Se bazează pe MNet';
$string['err_nomnethosts_help'] = 'Acest plugin se bazează pe colegii MNet cu SSO IDP publicat, SSO SP abonat, servicii de portofoliu publicate <b> și </b> abonat, precum și pluginul de autentificare MNet. Orice instanță a acestui plugin a fost ascunsă până când sunt îndeplinite aceste condiții. Apoi vor avea nevoie manual de setare pentru a fi vizibile din nou.';
$string['failedtojump'] = 'Comunicarea cu serverul de la distanță nu a reușit';
$string['failedtoping'] = 'Comunicarea cu serverul la distanță nu a reușit: {$a}';
$string['mnet_nofile'] = 'Nu s-a putut găsi fișierul în obiectul de transfer - eroare ciudată';
$string['mnet_nofilecontents'] = 'S-a găsit fișierul în obiectul de transfer, dar nu s-a putut obține conținut - eroare ciudată: {$a}';
$string['mnet_noid'] = 'Nu s-a putut găsi înregistrarea de transfer potrivită pentru acest simbol';
$string['mnet_notoken'] = 'Nu s-a putut găsi jetonul care să corespundă acestui transfer';
$string['mnet_wronghost'] = 'Gazda la distanță nu s-a potrivit cu înregistrarea de transfer pentru acest simbol';
$string['mnethost'] = 'Gazdă MNet';
$string['pf_description'] = 'Permiteți utilizatorilor să trimită conținut Moodle către această gazdă <br /> Abonați-vă la <b> și </b> publicați acest serviciu pentru a permite utilizatorilor autentificați de pe site-ul dvs. să împingă conținutul la {$a} <br /> <ul> <li > <em> Dependență </em>: De asemenea, trebuie să <strong> publicați </strong> serviciul SSO (Identificați furnizorul) în {$a}. </li> <li> <em> Dependență </em>: De asemenea, trebuie să vă <strong> abonați </strong> la serviciul SSO (Furnizor de servicii) pe {$a} </li> <li> <em> Dependență </em>: trebuie să activați și pluginul de autentificare MNet. < / li> </ul> <br />';
$string['pf_name'] = 'Servicii Portfolio';
$string['pluginname'] = 'ePortfolio Mahara';
$string['privacy:metadata'] = 'Acest plugin trimite date extern către o aplicație Mahara conectată. Nu stochează date local.';
$string['privacy:metadata:data'] = 'Datele personale trecute din subsistemul portofoliu.';
$string['senddisallowed'] = 'Momenatn nu puteți transfera fișiere către Mahara';
$string['url'] = 'URL';
