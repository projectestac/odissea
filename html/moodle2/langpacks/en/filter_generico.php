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
 * Strings for component 'filter_generico', language 'en', branch 'MOODLE_26_STABLE'
 *
 * @package   filter_generico
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['commonpageheading'] = 'Common Settings';
$string['filterdescription'] = 'Convert filter strings into templates merged with data';
$string['filtername'] = 'Generico';
$string['jqueryurl'] = 'JQuery URL';
$string['jqueryurl_desc'] = 'The URL Generico will use if adding jquery to the host page. If your theme already uses jquery (eg the essential theme), then you probably can leave jquery unchecked in your templates. This setting defaults to the CDN hosted version. If your site does not have internet access you will probably need to point this to a location on your Moodle server. Whatever you do do not start with http: or https:. Begin the url with //';
$string['pluginname'] = 'Generico';
$string['presets'] = 'Autofill template with a Preset';
$string['presets_desc'] = 'Generico comes with some default presets you can use out of the box, or to help you get started with your own template. Choose one of those here, or just create your own template from scratch.';
$string['template'] = 'The body of template {$a}';
$string['templatedefaults'] = 'variable defaults (template {$a})';
$string['templatedefaults_desc'] = 'Define the defaults in comma delimited sets of name=value pairs. eg width=800,height=900,feeling=joy';
$string['template_desc'] = 'Put the template here, define variables by surrounding them with @@ marks at either e. eg @@variable@@';
$string['templateend'] = 'End tags(template {$a})';
$string['templateend_desc'] = 'If your template encloses user content, eg an info box, put the closing tags here. The user will enter something like {GENERICO:mytag_end} to close out the filter.';
$string['templateheading'] = 'Settings for Generico Template {$a}';
$string['templateheadingcss'] = 'CSS/Style Settings.';
$string['templateheadingjs'] = 'Javascript Settings.';
$string['templatekey'] = 'The key that identifies template {$a}';
$string['templatekey_desc'] = 'The key should be one word and only contain numbers and letters, underscores, hyphens and dots .';
$string['templatepageheading'] = 'Template: {$a}';
$string['templaterequire_css'] = 'Requires CSS (template {$a})';
$string['templaterequire_css_desc'] = 'A link(1 only) to an external CSS file that this template requires. optional.';
$string['templaterequire_jquery'] = 'Requires JQuery (template {$a})';
$string['templaterequire_jquery_desc'] = 'If the template requires JQuery check this.';
$string['templaterequire_js'] = 'Requires JS (template {$a})';
$string['templaterequire_js_desc'] = 'A link(1 only) to an external JS file that this template requires. optional.';
$string['templatescript'] = 'Custom JS (template {$a})';
$string['templatescript_desc'] = 'If your template needs to run custom javascript, enter that here. It will be run once all the elements have loaded on the page.';
$string['templatestyle'] = 'Custom CSS (template {$a})';
$string['templatestyle_desc'] = 'Enter any custom CSS that your template uses here. Template variables will not work here. Just plain old css.';
$string['uploadcss'] = 'Upload CSS(template {$a})';
$string['uploadcss_desc'] = 'You can upload one CSS file which will be loaded for your template. Only one.';
$string['uploadjs'] = 'Upload JS (template {$a})';
$string['uploadjs_desc'] = 'You can upload one js library file which will be loaded for your template. Only one.';
