<?php
global $CFG;
defined('MOODLE_INTERNAL') || die();
$configuration = array (
  'siteidentifier' => 'unknown',
  'stores' =>
    array (
      'default_application' =>
        array (
          'name' => 'default_application',
          'plugin' => 'file',
          'configuration' =>
            array (
              'path' =>  $CFG->agora_muc_path,
              'autocreate' => true,
            ),
          'features' => 14,
          'modes' => 3,
          'default' => true,
          'class' => 'cachestore_file',
          'lock' => 'cachelock_file_default',
        ),
      'default_session' =>
        array (
          'name' => 'default_session',
          'plugin' => 'session',
          'configuration' =>
            array (
            ),
          'features' => 14,
          'modes' => 2,
          'default' => true,
          'class' => 'cachestore_session',
          'lock' => 'cachelock_file_default',
        ),
      'default_request' =>
        array (
          'name' => 'default_request',
          'plugin' => 'static',
          'configuration' =>
            array (
            ),
          'features' => 14,
          'modes' => 4,
          'default' => true,
          'class' => 'cachestore_static',
          'lock' => 'cachelock_file_default',
        ),
      'memcachedservers' =>
        array (
          'name' => 'memcachedservers',
          'plugin' => 'memcached',
          'configuration' =>
            array (
              'servers' => array(explode("\n", $CFG->memcache_servers)),
              'compression' => '1',
              'serialiser' => '2',
              'prefix' => $CFG->memcache_prefix,
              'hash' => '8',
              'bufferwrites' => '0',
              'clustered' => false,
              'setservers' =>'',
              'isshared' => '0',
            ),
          'features' => 20,
          'modes' => 1,
          'mappingsonly' => false,
          'class' => 'cachestore_memcached',
          'default' => false,
          'lock' => 'cachelock_file_default',
        ),
    ),
  'modemappings' =>
    array (
      0 =>
        array (
          'mode' => 1,
          'store' => 'memcachedservers',
          'sort' => -1,
        ),
      1 =>
        array (
          'mode' => 2,
          'store' => 'default_session',
          'sort' => -1,
        ),
      2 =>
        array (
          'mode' => 4,
          'store' => 'default_request',
          'sort' => -1,
        ),
    ),
  'definitions' =>
    array (
      'core/string' =>
        array (
          'mode' => 1,
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 30,
          'canuselocalstore' => true,
          'component' => 'core',
          'area' => 'string',
          'selectedsharingoption' => 1,
          'userinputsharingkey' => '',
        ),
      'core/langmenu' =>
        array (
          'mode' => 1,
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'canuselocalstore' => true,
          'component' => 'core',
          'area' => 'langmenu',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/databasemeta' =>
        array (
          'mode' => 1,
          'requireidentifiers' =>
            array (
              0 => 'dbfamily',
            ),
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 15,
          'component' => 'core',
          'area' => 'databasemeta',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/eventinvalidation' =>
        array (
          'mode' => 1,
          'staticacceleration' => true,
          'requiredataguarantee' => true,
          'simpledata' => true,
          'component' => 'core',
          'area' => 'eventinvalidation',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/questiondata' =>
        array (
          'mode' => 1,
          'simplekeys' => true,
          'requiredataguarantee' => false,
          'datasource' => 'question_finder',
          'datasourcefile' => 'question/engine/bank.php',
          'component' => 'core',
          'area' => 'questiondata',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/htmlpurifier' =>
        array (
          'mode' => 1,
          'canuselocalstore' => true,
          'component' => 'core',
          'area' => 'htmlpurifier',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/config' =>
        array (
          'mode' => 1,
          'staticacceleration' => true,
          'simpledata' => true,
          'component' => 'core',
          'area' => 'config',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/groupdata' =>
        array (
          'mode' => 1,
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 2,
          'component' => 'core',
          'area' => 'groupdata',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/calendar_subscriptions' =>
        array (
          'mode' => 1,
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'component' => 'core',
          'area' => 'calendar_subscriptions',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/capabilities' =>
        array (
          'mode' => 1,
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 1,
          'ttl' => 3600,
          'component' => 'core',
          'area' => 'capabilities',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/yuimodules' =>
        array (
          'mode' => 1,
          'component' => 'core',
          'area' => 'yuimodules',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/observers' =>
        array (
          'mode' => 1,
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 2,
          'component' => 'core',
          'area' => 'observers',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/plugin_manager' =>
        array (
          'mode' => 1,
          'simplekeys' => true,
          'simpledata' => true,
          'component' => 'core',
          'area' => 'plugin_manager',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/coursecattree' =>
        array (
          'mode' => 1,
          'staticacceleration' => true,
          'invalidationevents' =>
            array (
              0 => 'changesincoursecat',
            ),
          'component' => 'core',
          'area' => 'coursecattree',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/coursecat' =>
        array (
          'mode' => 2,
          'invalidationevents' =>
            array (
              0 => 'changesincoursecat',
              1 => 'changesincourse',
            ),
          'ttl' => 600,
          'component' => 'core',
          'area' => 'coursecat',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/coursecatrecords' =>
        array (
          'mode' => 4,
          'simplekeys' => true,
          'invalidationevents' =>
            array (
              0 => 'changesincoursecat',
            ),
          'component' => 'core',
          'area' => 'coursecatrecords',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/coursecontacts' =>
        array (
          'mode' => 1,
          'staticacceleration' => true,
          'simplekeys' => true,
          'ttl' => 3600,
          'component' => 'core',
          'area' => 'coursecontacts',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/repositories' =>
        array (
          'mode' => 4,
          'component' => 'core',
          'area' => 'repositories',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/externalbadges' =>
        array (
          'mode' => 1,
          'simplekeys' => true,
          'ttl' => 3600,
          'component' => 'core',
          'area' => 'externalbadges',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/coursemodinfo' =>
        array (
          'mode' => 1,
          'simplekeys' => true,
          'canuselocalstore' => true,
          'component' => 'core',
          'area' => 'coursemodinfo',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/userselections' =>
        array (
          'mode' => 2,
          'simplekeys' => true,
          'simpledata' => true,
          'component' => 'core',
          'area' => 'userselections',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/completion' =>
        array (
          'mode' => 1,
          'simplekeys' => true,
          'ttl' => 3600,
          'staticacceleration' => true,
          'staticaccelerationsize' => 2,
          'component' => 'core',
          'area' => 'completion',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/navigation_expandcourse' =>
        array (
          'mode' => 2,
          'simplekeys' => true,
          'simpledata' => true,
          'component' => 'core',
          'area' => 'navigation_expandcourse',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/suspended_userids' =>
        array (
          'mode' => 4,
          'simplekeys' => true,
          'simpledata' => true,
          'component' => 'core',
          'area' => 'suspended_userids',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/plugin_functions' =>
        array (
          'mode' => 1,
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 5,
          'component' => 'core',
          'area' => 'plugin_functions',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/tags' =>
        array (
          'mode' => 4,
          'simplekeys' => true,
          'staticacceleration' => true,
          'component' => 'core',
          'area' => 'tags',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/grade_categories' =>
        array (
          'mode' => 2,
          'simplekeys' => true,
          'invalidationevents' =>
            array (
              0 => 'changesingradecategories',
            ),
          'component' => 'core',
          'area' => 'grade_categories',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/temp_tables' =>
        array (
          'mode' => 4,
          'simplekeys' => true,
          'simpledata' => true,
          'component' => 'core',
          'area' => 'temp_tables',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'core/tagindexbuilder' =>
        array (
          'mode' => 2,
          'simplekeys' => true,
          'simplevalues' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 10,
          'ttl' => 900,
          'invalidationevents' =>
            array (
              0 => 'resettagindexbuilder',
            ),
          'component' => 'core',
          'area' => 'tagindexbuilder',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'availability_grade/scores' =>
        array (
          'mode' => 1,
          'staticacceleration' => true,
          'staticaccelerationsize' => 2,
          'ttl' => 3600,
          'component' => 'availability_grade',
          'area' => 'scores',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'availability_grade/items' =>
        array (
          'mode' => 1,
          'staticacceleration' => true,
          'staticaccelerationsize' => 2,
          'ttl' => 3600,
          'component' => 'availability_grade',
          'area' => 'items',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'mod_glossary/concepts' =>
        array (
          'mode' => 1,
          'simplekeys' => true,
          'simpledata' => false,
          'staticacceleration' => true,
          'staticaccelerationsize' => 30,
          'component' => 'mod_glossary',
          'area' => 'concepts',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'filter_wiris/images' =>
        array (
          'mode' => 1,
          'component' => 'filter_wiris',
          'area' => 'images',
        ),
      'filter_wiris/formulas' =>
        array (
          'mode' => 1,
          'component' => 'filter_wiris',
          'area' => 'formulas',
        ),
      'repository_skydrive/foldername' =>
        array (
          'mode' => 2,
          'component' => 'repository_skydrive',
          'area' => 'foldername',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'tool_monitor/eventsubscriptions' =>
        array (
          'mode' => 1,
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 10,
          'component' => 'tool_monitor',
          'area' => 'eventsubscriptions',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'tool_uploadcourse/helper' =>
        array (
          'mode' => 4,
          'component' => 'tool_uploadcourse',
          'area' => 'helper',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
        ),
      'tool_usertours/tourdata' =>
        array(
          'mode' => 1,
          'component'=>'tool_usertours',
          'area' =>"tourdata",
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 1,
        ),
      'tool_usertours/stepdata' =>
        array(
          'mode' => 1,
          'component'=>'tool_usertours',
          'area'=>'stepdata',
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 1,
        ),
      'tool_mobile/plugininfo' =>
        array (
          'mode' => 1,
          'simplekeys' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 1,
          'component' => 'tool_mobile',
          'area' => 'plugininfo',
          'selectedsharingoption' => 2,
          'userinputsharingkey' => '',
          'sharingoptions' => 15,
        ),
      'core/message_processors_enabled' =>
        array(
          'mode' => 1,
          'component' => 'core',
          'area' => 'message_processors_enabled',
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 3
        ),
      'core/postprocessedcss' =>
        array(
          'mode' => 1,
          'component' => 'core',
          'area' => 'postprocessedcss',
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 3
        ),
      'core/coursecompletion' =>
        array(
          'mode' => 1,
          'component' => 'core',
          'area' => 'coursecompletion',
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 3
        ),
      'core/contextwithinsights' =>
        array(
          'mode' => 1,
          'component' => 'core',
          'area' => 'contextwithinsights',
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 3
        ),
      'core/calendar_categories' =>
        array(
          'mode' => 1,
          'component' => 'core',
          'area' => 'calendar_categories',
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 3
        ),
      'core/roledefs' =>
        array(
          'mode' => 1,
          'component' => 'core',
          'area' => 'roledefs',
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 3
        ),
      'core/fontawesomeiconmapping' =>
        array(
          'mode' => 1,
          'component' => 'core',
          'area' => 'fontawesomeiconmapping',
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 3
        ),
      'core/user_group_groupings' =>
        array(
          'mode' => 1,
          'component' => 'core',
          'area' => 'user_group_groupings',
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 3
        ),
      'core/presignup' =>
        array(
          'mode' => 1,
          'component' => 'core',
          'area' => 'presignup',
          'simplekeys' => true,
          'simpledata' => true,
          'staticacceleration' => true,
          'staticaccelerationsize' => 3
        ),
    ),
  'definitionmappings' =>
    array (
      0 =>
        array (
          'store' => 'default_application',
          'definition' => 'core/string',
          'sort' => 1,
        ),
    ),
  'locks' =>
    array (
      'cachelock_file_default' =>
        array (
          'name' => 'cachelock_file_default',
          'type' => 'cachelock_file',
          'dir' => 'filelocks',
          'default' => true,
        ),
    ),
);