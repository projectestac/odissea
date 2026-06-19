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
 * Strings for component 'tool_health', language 'nl', version '4.5'.
 *
 * @package     tool_health
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['category_loop_parents'] = 'Volgende categorieën vormen een lus van bovenliggende categorieën:';
$string['category_missing_parents'] = 'De volgende categorieën hebben geen bovenliggende categorieën:';
$string['healthnoproblemsfound'] = 'Er zijn geen problemen gevonden!';
$string['healthproblemsdetected'] = 'Gezondheidsproblemen ontdekt!';
$string['healthproblemsolution'] = 'Oplossing';
$string['healthreturntomain'] = 'Ga verder';
$string['healthsolution'] = 'Oplossing';
$string['pluginname'] = 'Gezondheidscentrum';
$string['privacy:metadata'] = 'De gezondheidscentrum-plugin bewaart geen persoonlijke gegevens.';
$string['problem_000002_description'] = 'Uw Moodle-configuratiebestand config.php of een ander bibliotheekbestand bevat enkele tekens na de afsluitende PHP-tag (?>). Dit leidt tot diverse problemen in Moodle (zoals beschadigde gedownloade bestanden) en moet worden verholpen.';
$string['problem_000002_solution'] = 'Je moet het bestand {$a}/config.php bewerken en alle tekens (inclusief spaties en regeleinden) achter de afsluitende ?>-tag verwijderen. Deze twee tekens moeten de allerlaatste in dat bestand zijn. De extra witruimte aan het einde kan ook voorkomen in andere PHP-bestanden die vanuit lib/setup.php worden ingeladen.';
$string['problem_000002_title'] = 'Extra tekens aan het einde van config.php of een andere bibliotheekfunctie';
$string['problem_000003_description'] = 'In je config.php staat dat je "data root"-map {$a} is. Deze map bestaat echter niet of Moodle heeft er geen schrijftoegang toe. Dit leidt tot allerlei problemen, zoals gebruikers die niet kunnen inloggen en geen bestanden kunnen uploaden. Het is absoluut noodzakelijk dat je dit probleem oplost, zodat Moodle correct kan werken.';
$string['problem_000003_solution'] = 'Controleer allereerst of de map {$a} bestaat. Als de map bestaat, moet je ervoor zorgen dat Moodle ernaar kan schrijven. Neem contact op met de beheerder van je webserver en vraag hem om schrijfrechten voor die map toe te kennen aan de gebruiker onder wiens account het webserverproces draait.';
$string['problem_000003_title'] = '$CFG->dataroot bestaat niet of heeft geen schrijfrechten';
$string['problem_000004_description'] = 'Het onderhoudsscript cron.php is niet volgens de verwachte frequentie uitgevoerd; deze frequentie kan worden ingesteld via $CFG->expectedcronfrequency. Dit betekent waarschijnlijk dat je server niet is geconfigureerd om dit script automatisch met regelmatige tussenpozen uit te voeren. Als dit het geval is, zal Moodle grotendeels naar behoren werken, maar zullen sommige bewerkingen (met name het versturen van e-mails naar gebruikers) helemaal niet worden uitgevoerd.';
$string['problem_000004_link_cron'] = 'Cron - MoodleDocs';
$string['problem_000004_solution'] = 'Raadpleeg de onderstaande links voor gedetailleerde instructies over het inschakelen van cron.';
$string['problem_000004_title'] = 'cron.php is niet ingesteld om automatisch te worden uitgevoerd';
$string['problem_000005_description'] = 'In je PHP-configuratie is de instelling \'session.auto_start\' ingeschakeld. Deze moet worden uitgeschakeld om Moodle correct te laten werken. Opvallende symptomen van deze verkeerde configuratie zijn onder meer fatale fouten en/of lege pagina’s bij het inloggen.';
$string['problem_000005_solution'] = 'Er zijn twee manieren hoe je dit probleem kunt oplossen:';
$string['problem_000005_solution_step_one'] = 'Als je toegang hebt tot je hoofdbestand php.ini, zoek dan de regel die er als volgt uitziet: "session.auto_start = 1" en verander deze in "session.auto_start = 0". Start vervolgens je webserver opnieuw op. Houd er rekening mee dat dit, net als elke andere wijziging in de PHP-instellingen, gevolgen kan hebben voor andere webapplicaties die op de server draaien.';
$string['problem_000005_solution_step_two'] = 'Tot slot kun je deze instelling mogelijk alleen voor jouw site wijzigen door het bestand {$a}/.htaccess aan te maken of te bewerken en daarin de volgende regel op te nemen: "php_value session.auto_start 0"';
$string['problem_000005_title'] = 'PHP: session.auto_start is ingeschakeld';
$string['problem_000007_description'] = 'In je PHP-configuratie is de instelling `file_uploads` uitgeschakeld. Deze instelling moet worden ingeschakeld om ervoor te zorgen dat Moodle alle functies kan bieden. Zolang deze instelling niet is ingeschakeld, is het niet mogelijk om bestanden naar Moodle te uploaden. Dit geldt bijvoorbeeld voor cursusmateriaal en gebruikersfoto’s.';
$string['problem_000007_solution'] = 'Er zijn twee manieren om dit probleem op te lossen:';
$string['problem_000007_solution_step_one'] = 'Als je toegang hebt tot je hoofdbestand php.ini, zoek dan de regel die er als volgt uitziet: "file_uploads = Off" en verander deze in "file_uploads = On". Start vervolgens je webserver opnieuw op. Houd er rekening mee dat dit, net als elke andere wijziging in de PHP-instellingen, gevolgen kan hebben voor andere webapplicaties die op de server draaien.';
$string['problem_000007_solution_step_two'] = 'Tot slot kun je deze instelling mogelijk alleen voor jouw site wijzigen door het bestand {$a}/.htaccess aan te maken of te bewerken en daarin de volgende regel op te nemen: "php_value file_uploads On"';
$string['problem_000007_title'] = 'PHP: file_uploads is uitgeschakeld';
$string['problem_000008_description'] = 'De instellingen voor PHP op je server staan niet toe dat een script tijdens de uitvoering extra geheugen aanvraagt. Dit betekent dat er voor elk script een vaste limiet van {$a} geldt. Het is mogelijk dat bepaalde bewerkingen binnen Moodle meer geheugen nodig hebben om succesvol te kunnen worden uitgevoerd, vooral als er grote hoeveelheden gegevens moeten worden verwerkt.';
$string['problem_000008_solution'] = 'Het wordt aanbevolen om contact op te nemen met de beheerder van uw webserver om dit probleem op te lossen.';
$string['problem_000008_title'] = 'PHP: moodle kan memory_limit niet wijzigen';
$string['problem_000009_description'] = 'Het gebruikersaccount waarmee je verbinding maakt met de databaseserver is ingesteld zonder wachtwoord. Dit vormt een zeer groot veiligheidsrisico en wordt slechts in beperkte mate verminderd als uw database zo is geconfigureerd dat deze geen verbindingen accepteert van andere hosts dan de server waarop Moodle draait. Tenzij je een sterk wachtwoord gebruikt om verbinding te maken met de database, loop je het risico dat er onbevoegde toegang tot uw gegevens plaatsvindt en dat deze worden gemanipuleerd.';
$string['problem_000009_description_root'] = 'Dit is vooral zorgwekkend omdat die toegang tot de database als superuser (root) zou zijn!';
$string['problem_000009_solution'] = 'Je moet het wachtwoord van de gebruiker {$a} onmiddellijk wijzigen, zowel in uw database als in het bestand config.php van Moodle!';
$string['problem_000009_solution_root'] = 'Het zou ook een goed idee zijn om het gebruikersaccount te wijzigen van root naar iets anders, omdat dit de gevolgen zou beperken mocht je database toch gehackt worden.';
$string['problem_000009_title'] = 'SQL: een account gebruiken zonder wachtwoord';
$string['problem_000012_description'] = 'Bij willekeurige vragen moet `question.parent` gelijk zijn aan `question.id`. Er staan enkele vragen in je database waarvoor dit niet het geval is. Dit kan onder andere zijn gebeurd doordat willekeurige vragen zijn teruggezet vanuit een back-up voordat MDL-5482 was verholpen.';
$string['problem_000012_solution'] = 'Upgrade naar Moodle 1.9.1 of hoger, of voer de SQL-opdracht handmatig uit';
$string['problem_000012_title'] = 'Willekeurige vragen over de consistentie van gegevens';
$string['problem_000014_description'] = 'Er staan vragen in je database die hieraan niet voldoen. Je zult moeten uitzoeken hoe dit is gebeurd.';
$string['problem_000014_link_cron'] = 'Quiz-forum';
$string['problem_000014_solution'] = 'Het is onmogelijk om een oplossing te geven zonder meer te weten over de oorzaak van het probleem. Misschien kun je hulp vinden op het Quiz-forum.';
$string['problem_000014_title'] = 'Alleen vragen met meerdere antwoorden en willekeurige vragen mogen een bovenliggende vraag hebben';
$string['problem_000016_description'] = 'Als de ene vraagcategorie de bovenliggende categorie is van een andere, dan zouden ze beide tot dezelfde context moeten behoren. Dit geldt echter niet voor de volgende categorieën:';
$string['problem_000016_description_child'] = 'Onderliggende categorie';
$string['problem_000016_description_context'] = 'Context ID';
$string['problem_000016_description_id'] = 'ID';
$string['problem_000016_description_name'] = 'Naam';
$string['problem_000016_description_parent'] = 'Bovenliggende categorie';
$string['problem_000016_link_cron'] = 'Quiz forum';
$string['problem_000016_solution'] = 'Een geautomatiseerde oplossing is lastig. Het hangt ervan af of de bovenliggende categorie of de onderliggende categorie op de verkeerde plek staat. De mensen op het Quiz-forum kunnen je wellicht helpen.';
$string['problem_000016_title'] = 'Vraagcategorieën moeten tot dezelfde context behoren als hun bovenliggende categorie';
$string['problem_000017_description'] = 'De vraagcategorieën moeten op basis van het veld `question_categories.parent` in boomstructuren worden ingedeeld. Soms raakt deze boomstructuur in de war.';
$string['problem_000017_solution'] = 'Voer de volgende SQL-query’s uit. Hiermee wordt het probleem opgelost door een aantal categorieën naar het hoogste niveau te verplaatsen.';
$string['problem_000017_title'] = 'Boomstructuur van vraagcategorieën';
$string['problem_000018_description'] = 'De cursuscategorieën moeten op basis van het veld `course_categories.parent` in boomstructuren worden ingedeeld. Soms raakt deze boomstructuur in de war.';
$string['problem_000018_solution'] = 'Voer de volgende SQL-query’s uit. Hiermee wordt het probleem opgelost door een aantal categorieën naar het hoogste niveau te verplaatsen.';
$string['problem_000018_title'] = 'Boomstructuur van cursuscategorieën';
