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
 * Strings for component 'payment', language 'ro', version '4.5'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'Arhivat';
$string['accountconfignote'] = 'Portalurile de plată pentru acest cont vor fi configurate separat.';
$string['accountdeleteconfirm'] = 'Dacă acest cont are plăți anterioare, va fi arhivat, în caz contrar, datele sale de configurare vor fi șterse definitiv. Esti sigur ca vrei sa continui?';
$string['accountidnumber'] = 'Număr identificator';
$string['accountidnumber_help'] = 'Numărul de identificare este utilizat numai atunci când contul corespunde cu sisteme externe și nu este afișat nicăieri pe site. Dacă contul are un nume de cod oficial, acesta poate fi inserat, în caz contrar câmpul poate fi lăsat necompletat.';
$string['accountname'] = 'Denumirea contului';
$string['accountname_help'] = 'Cum va fi identificat acest cont de profesorii sau managerii care au configurat plăți (de exemplu, în pluginul de înscriere la curs).';
$string['accountnotavailable'] = 'Indisponibil';
$string['createaccount'] = 'Creează cont de plată';
$string['deleteorarchive'] = 'Șterge sau arhivează';
$string['editpaymentaccount'] = 'Editează contul de plată';
$string['eventaccountcreated'] = 'Cont de plată creat';
$string['eventaccountdeleted'] = 'Cont de plată șters';
$string['eventaccountupdated'] = 'Cont de plată actualizat';
$string['feeincludesurcharge'] = '{$a->fee} (include {$a->surcharge}% suprataxă pentru utilizarea acestui tip de plată)';
$string['gatewaycannotbeenabled'] = 'Portalul de plată nu a putut fi activat deoarece configurarea nu este completă.';
$string['gatewaydisabled'] = 'Dezactivat';
$string['gatewayenabled'] = 'Activat';
$string['gatewaynotfound'] = 'Gateway nu a fost găsit';
$string['gotomanageplugins'] = 'Activați și dezactivați gateway-urile de plată și setați suprataxe prin {$a}.';
$string['gotopaymentaccounts'] = 'Puteți crea mai multe conturi de plată folosind oricare dintre aceste portaluri pe pagina {$a}';
$string['hidearchived'] = 'Ascunde arhivă';
$string['noaccountsavilable'] = 'Nu sunt disponibile conturi de plată';
$string['nocurrencysupported'] = 'Nu este acceptată nicio plată în nicio monedă. Vă rugăm să vă asigurați că cel puțin un portal de plată este activat.';
$string['nogateway'] = 'Nu există niciun portal de plată care să poată fi folosit.';
$string['nogatewayselected'] = 'Prima dată trebuie să selectați un portal de plată.';
$string['paymentaccount'] = 'Cont de plată';
$string['paymentaccounts'] = 'Conturi de plată';
$string['paymentaccountsexplained'] = 'Creează unul sau mai multe conturi de plată pentru acest site. Fiecare cont include configurația pentru gateway-urile de plată disponibile. Persoana care configurează plățile pe site (de exemplu, plata pentru înscrierea la curs) va putea alege dintre conturile disponibile.';
$string['payments'] = 'Plăți';
$string['privacy:metadata:database:payments'] = 'Informații despre plăți.';
$string['privacy:metadata:database:payments:amount'] = 'Suma de plată.';
$string['privacy:metadata:database:payments:currency'] = 'Moneda în care se face plata.';
$string['privacy:metadata:database:payments:gateway'] = 'Portalul de plată care este utilizat pentru plată.';
$string['privacy:metadata:database:payments:timecreated'] = 'Când s-a făcut plata.';
$string['privacy:metadata:database:payments:timemodified'] = 'Ora la care înregistrarea plăților a fost actualizată ultima dată.';
$string['privacy:metadata:database:payments:userid'] = 'Utilizatorul care a făcut plata.';
$string['restoreaccount'] = 'Restaurează';
$string['selectpaymenttype'] = 'Selectează tipul de plată';
$string['showarchived'] = 'Afișează arhivă';
$string['supportedcurrencies'] = 'Valute acceptate';
$string['surcharge'] = 'Taxă suplimentară (procentaj)';
$string['surcharge_desc'] = 'Suprataxa este un procent suplimentar perceput utilizatorilor care aleg să plătească folosind acest portal de plată.';
