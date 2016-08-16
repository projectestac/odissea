<?php
/*
Different default site settings can be stored in file /local/defaults.php.
These new defaults are used during installation, upgrade and later are displayed as default values in admin settings.
This means that the content of the defaults files is usually updated BEFORE installation or upgrade.
These customised defaults are useful especially when using CLI tools for installation and upgrade.
Sample /local/defaults.php file content:
<?php
$defaults['moodle']['forcelogin'] = 1;  // new default for $CFG->forcelogin
$defaults['scorm']['maxgrade'] = 20;    // default for get_config('scorm', 'maxgrade')
$defaults['moodlecourse']['numsections'] = 11;
$defaults['moodle']['hiddenuserfields'] = array('city', 'country');
First bracket contains string from column plugin of config_plugins table. Second bracket is the name of setting.
In the admin settings UI the plugin and name of setting is separated by "|".
The values usually correspond to the raw string in config table, with the exception of comma separated lists that are
usually entered as real arrays.
Please note that not all settings are converted to admin_tree, they are mostly intended to be set directly in config.php.
*/

$defaults['moodle']['calendar_startwday'] = 1;
$defaults['moodle']['allowblockstodock'] = 0;
$defaults['editor_atto']['toolbar'] = 'collapse = collapse
style1 = title, bold, italic, underline
list = unorderedlist, orderedlist
links = link
files = image, media, managefiles
undo = undo
style3 = fontfamily, fontsize, fontcolor, backcolor, clear
style2 = strike, subscript, superscript
align = align
indent = indent
insert = equation, charmap, table
accessibility = accessibilitychecker, accessibilityhelper
other = html
math = wiris';
$defaults['moodle']['limitconcurrentlogins'] = 50;
$defaults['backup']['backup_auto_delete_days'] = 365;
$defaults['backup']['import_general_duplicate_admin_allowed'] = 1;
$defaults['core_competency']['enabled'] = 0;
$defaults['core_competency']['pushcourseratingstouserplans'] = 1;
$defaults['assignsubmission_file']['maxfiles'] = 10;