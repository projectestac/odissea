<?php

// This file keeps track of upgrades to
// the choice module
//
// Sometimes, changes between versions involve
// alterations to database structures and other
// major things that may break installations.
//
// The upgrade function in this file will attempt
// to perform all the necessary actions to upgrade
// your older installation to the current version.
//
// If there's something it cannot do itself, it
// will tell you what you need to do.
//
// The commands in here will all be database-neutral,
// using the methods of database_manager class
//
// Please do not forget to use upgrade_set_timeout()
// before any action that may take longer time to finish.

/**
 * Task to do on plugin upgrade.
 *
 * @throws stored_file_creation_exception
 * @throws ddl_exception
 * @throws upgrade_exception
 * @throws ddl_change_structure_exception
 * @throws downgrade_exception
 * @throws dml_exception
 * @throws file_exception
 * @throws coding_exception
 * @throws ddl_table_missing_exception
 */
function xmldb_local_agora_upgrade($oldversion): bool {
    global $CFG, $DB;

    $dbman = $DB->get_manager();

    if ($oldversion < 2014022400) {
    	$DB->set_field('course', 'format', 'simple', array('format' => 'senzill'));
        upgrade_plugin_savepoint(true, 2014022400, 'local', 'agora');
    }

    if ($oldversion < 2014121100) {
        $DB->delete_records('events_handlers', array('eventname' => 'user_logout', 'component' => 'mod_chat'));
        upgrade_plugin_savepoint(true, 2014121100, 'local', 'agora');
    }

    if ($oldversion < 2015011400) {
        $rcommonlogdir = get_admin_datadir_folder();
        set_config('data_store_log', $rcommonlogdir, 'rcommon');

        upgrade_plugin_savepoint(true, 2015011400, 'local', 'agora');
    }

    if ($oldversion < 2015050400) {
        // Preconfigure airnotifier
        $config = get_config('message');
        $providers = $DB->get_records('message_providers');
        foreach ($providers as $provider) {
            $componentproviderbase = $provider->component.'_'.$provider->name;
            foreach (array('loggedin', 'loggedoff') as $state) {
                $linepref = '';
                $componentproviderstate = $componentproviderbase.'_'.$state;
                $name = 'message_provider_'.$provider->component.'_'.$provider->name.'_'.$state;
                if (isset($config->$name) && !empty($config->$name)) {
                    $value = explode(',', $config->$name);
                    $value[] = 'airnotifier';
                    $value = implode(',', $value);
                    set_config($name, $value, 'message');
                }
            }
        }

        upgrade_plugin_savepoint(true, 2015050400, 'local', 'agora');
    }

    if ($oldversion < 2015051900) {
        $DB->set_field('block', 'visible', 0, array('name' => 'participants'));
        $DB->set_field('block', 'visible', 0, array('name' => 'myprofile'));
        $DB->set_field('block', 'visible', 0, array('name' => 'mnet_hosts'));

        upgrade_plugin_savepoint(true, 2015051900, 'local', 'agora');
    }

    if ($oldversion < 2015060500) {
        set_config('customusermenuitems', "messages,message|/message/index.php|message
mybadges,badges|/badges/mybadges.php|award");
        set_config('alternativefullnameformat', 'language');

        set_config('toolbar', 'collapse = collapse
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
math = wiris', 'editor_atto');

        set_config('texteditors', 'atto,textarea');
        set_config('autosavefrequency', 60, 'editor_atto');

        set_config('httpurl', 'http://cdn.mathjax.org/mathjax/2.3-latest/MathJax.js', 'filter_mathjaxloader');
        set_config('httpsurl', 'https://cdn.mathjax.org/mathjax/2.3-latest/MathJax.js', 'filter_mathjaxloader');
        set_config('mathjaxconfig', 'MathJax.Hub.Config({
    config: ["Accessible.js", "Safe.js"],
    errorSettings: { message: ["!"] },
    skipStartupTypeset: true,
    messageStyle: "none"
});
', '    ');

        set_config('librarygroup1', '\cdot
\times
\ast
\div
\diamond
\pm
\mp
\oplus
\ominus
\otimes
\oslash
\odot
\circ
\bullet
\asymp
\equiv
\subseteq
\supseteq
\leq
\geq
\preceq
\succeq
\sim
\simeq
\approx
\subset
\supset
\ll
\gg
\prec
\succ
\infty
\in
\ni
\forall
\exists
\neq
', 'atto_equation');

        set_config('librarygroup2', '\leftarrow
\rightarrow
\uparrow
\downarrow
\leftrightarrow
\nearrow
\searrow
\swarrow
\nwarrow
\Leftarrow
\Rightarrow
\Uparrow
\Downarrow
\Leftrightarrow
', 'atto_equation');

        set_config('librarygroup3', '\alpha
\beta
\gamma
\delta
\epsilon
\zeta
\eta
\theta
\iota
\kappa
\lambda
\mu
\nu
\xi
\pi
\rho
\sigma
\tau
\upsilon
\phi
\chi
\psi
\omega
\Gamma
\Delta
\Theta
\Lambda
\Xi
\Pi
\Sigma
\Upsilon
\Phi
\Psi
\Omega
', 'atto_equation');

        set_config('librarygroup4', '\sum{a,b}
\int_{a}^{b}{c}
\iint_{a}^{b}{c}
\iiint_{a}^{b}{c}
\oint{a}
(a)
[a]
\lbrace{a}\rbrace
\left| \begin{matrix} a_1 & a_2 \ a_3 & a_4 \end{matrix} \right|
', 'atto_equation');

        set_config('pathdvisvgm', '/usr/bin/dvisvgm', 'filter_tex');
        set_config('pathmimetex', '', 'filter_tex');

        upgrade_plugin_savepoint(true, 2015060500, 'local', 'agora');
    }

    if ($oldversion < 2015060501) {
        uninstall_plugin('block', 'advices');
        uninstall_plugin('block', 'rcommon');
        uninstall_plugin('rscormreport', 'basic');
        uninstall_plugin('rscormreport', 'graphs');
        uninstall_plugin('rscormreport', 'interactions');
        uninstall_plugin('mod', 'rscorm');
        uninstall_plugin('editor', 'tinymce');
        uninstall_plugin('tinymce', 'ctrlhelp');
        uninstall_plugin('tinymce', 'dragmath');
        uninstall_plugin('tinymce', 'managefiles');
        uninstall_plugin('tinymce', 'moodleemoticon');
        uninstall_plugin('tinymce', 'moodleimage');
        uninstall_plugin('tinymce', 'moodlemedia');
        uninstall_plugin('tinymce', 'moodlenolink');
        uninstall_plugin('tinymce', 'pdw');
        uninstall_plugin('tinymce', 'spellchecker');
        uninstall_plugin('tinymce', 'tiny_mce_wiris');
        uninstall_plugin('tinymce', 'wrap');

        // Delete block advices table
        $table = new xmldb_table('block_advices');
        if ($dbman->table_exists($table)) {
            $dbman->drop_table($table);
        }

        upgrade_plugin_savepoint(true, 2015060501, 'local', 'agora');
    }

    if ($oldversion < 2015061600) {
        set_config('customusermenuitems', "messages,message|/message/index.php|message
mybadges,badges|/badges/mybadges.php|award");
        set_config('alternativefullnameformat', 'language');

        upgrade_plugin_savepoint(true, 2015061600, 'local', 'agora');
    }

    if ($oldversion < 2015062200) {
        set_config('grade_report_showcalculations', 1);

        upgrade_plugin_savepoint(true, 2015062200, 'local', 'agora');
    }

    if ($oldversion < 2015071300) {

        // Define index notification (not unique) to be added to message_read.
        $table = new xmldb_table('message_read');
        $index = new xmldb_index('notification', XMLDB_INDEX_NOTUNIQUE, array('notification'));

        // Conditionally launch add index notification.
        if (!$dbman->index_exists($table, $index)) {
            $dbman->add_index($table, $index);
        }

        // Main savepoint reached.
        upgrade_plugin_savepoint(true, 2015071300, 'local', 'agora');
    }

    if ($oldversion < 2015100200) {

        unset_config('apligestlogpath');

        // Main savepoint reached.
        upgrade_plugin_savepoint(true, 2015100200, 'local', 'agora');
    }

    if ($oldversion < 2020072300) {

        // Set theme to xtec2020
        set_config('theme', 'xtec2020');

        // Theme xtec2020 has less parameters than xtec2. This is the list of pairs "old name" - "new name"
        $equivalences = [
            'admin_alert_end' => 'admin_alert_end',
            'admin_alert_message' => 'admin_alert_message',
            'admin_alert_start' => 'admin_alert_start',
            'agora_alert_end' => 'agora_alert_end',
            'agora_alert_message' => 'agora_alert_message',
            'agora_alert_start' => 'agora_alert_start',
            'color2' => 'maincolor',
            'color4' => 'fontcolor',
            'color5' => 'linkscolor',
            'colorset' => 'colorset',
            'customcss' => 'customcss',
            'email' => 'email',
            'facebook' => 'facebook',
            'flickr' => 'flickr',
            'fontsize' => 'fontsize',
            'fontstyle' => 'fontstyle',
            'footnote' => 'footnote',
            'importcss' => 'importcss',
            'instagram' => 'instagram',
            'linkedin' => 'linkedin',
            'logo' => 'logo',
            'logo_color' => 'headerbg',
            'nodes' => 'nodes',
            'phone' => 'phone',
            'pinterest' => 'pinterest',
            'skype' => 'skype',
            'twitter' => 'twitter',
            'website' => 'website',
            'whatsapp' => 'whatsapp',
            'youtube' => 'youtube',
        ];

        // The font size parameter has changed the accepted values. This is the transformation matrix
        $fontsize_transform = [
            'moltpetita' => '80',
            'petita' => '90',
            'mitjana' => '100',
            'gran' => '120',
            'moltgran' => '140',
        ];

        try {
            // Get all records from theme xtec2
            $results = $DB->get_records('config_plugins', ['plugin' => 'theme_xtec2']);
        } catch (Exception $exception) {
            mtrace($exception->getMessage());
        }

        foreach ($results as $result) {
            // Skip values that doesn't exist in xtec2
            if (array_key_exists($result->name, $equivalences)) {
                // Special case: font size transformation
                if ('fontsize' == $result->name) {
                    $result->value = $fontsize_transform[$result->value];
                }
                set_config($equivalences[$result->name], $result->value, 'theme_xtec2020');
            }
        }

        // Copy logo to theme xtec2020
        $fs = get_file_storage();
        $files = $fs->get_area_files(1, 'theme_xtec2', 'logo');

        foreach ($files as $file) {
            if (!$file->is_directory()) {
                // First parameter is the difference with the original file
                $fs->create_file_from_storedfile(['component' => 'theme_xtec2020'], $file->get_id());
            }
        }

        purge_caches(['theme']);

        upgrade_plugin_savepoint(true, 2020072300, 'local', 'agora');
    }

    if ($oldversion < 2023011300) {
        require_once $CFG->dirroot . '/local/agora/db/upgradelib.php';
        // Create user profile field for IDI.
        create_user_tag_field();
    }

    return true;
}


