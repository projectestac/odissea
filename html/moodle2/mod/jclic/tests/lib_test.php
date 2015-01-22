<?php
/**
 * Unit tests for mod/jclic/lib.php.
 *
 * @package    mod_jclic
 * @category   phpunit
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/mod/jclic/tests/base_test.php');
require_once($CFG->dirroot . '/mod/jclic/lib.php');
require_once($CFG->dirroot . '/mod/jclic/locallib.php');

class mod_jclic_lib_testcase extends mod_jclic_base_testcase {

    /*
     * Test de jclic_delete_instance()
     */
    public function test_mod_jclic_delete_instance() {
        global $DB;

        $this->resetAfterTest(true);
        // Add additional default data (some real attempts and stuff).
        $this->setUser($this->editingteachers[0]);
        $jclic = $this->create_instance();

        // Simulate adding a grade.
        $this->setUser($this->teachers[0]);

        $generator = $this->getDataGenerator()->get_plugin_generator('mod_jclic');
        $generator->grade_jclic($jclic, $this->students[0]->id, array('rawgrade' => 1));

        // Now try and delete.
        $this->assertTrue(jclic_delete_instance($jclic->id));
        $this->assertFalse($DB->record_exists('jclic', array('id' => $jclic->id)));
    }

    /*
     * Test de jclic_add_instance()
     */
    public function test_mod_jclic_add_instance() {
        global $DB, $CFG;

        $this->resetAfterTest(true);

        // Add additional default data (some real attempts and stuff).
        $this->setUser($this->editingteachers[0]);

        $data = array();
        $data['url'] = 'http://clic.xtec.cat/projects/colour2/jclic/colour2.jclic.zip';
        $data['skin'] = '@orange.xml';
        $data['maxattempts'] = 1;
        $data['width'] = 800;
        $data['height'] = 600;
        $data['avaluation'] = 'score';
        $data['maxgrade'] = 0;
        $data['grade'] = 100;
        $data['lang'] = $CFG->lang;
        $data['exiturl'] = "";
        $data['timeavailable'] = time();
        $data['timedue'] = time();
        $jclic = $this->create_instance($data);

        $this->assertNotEmpty($jclic);
        $this->assertTrue($DB->record_exists('jclic', array('id' => $jclic->id)));
    }

    public function test_mod_jclic_backup_restore() {
        global $USER, $DB, $CFG;

        require_once($CFG->dirroot . '/backup/util/includes/backup_includes.php');
        require_once($CFG->dirroot . '/backup/util/includes/restore_includes.php');

        $this->resetAfterTest(true);

        $this->setUser(2); // Admin user.

        // Create a course with some availability data set.
        $generator = $this->getDataGenerator();
        $course = $generator->create_course(
                array('format' => 'topics', 'numsections' => 3,
                    'enablecompletion' => COMPLETION_ENABLED),
                array('createsections' => true));
        $jclic = $generator->create_module('jclic', array(
                'course' => $course->id));

        // Turn off file logging, otherwise it can't delete the file (Windows).
        $CFG->backup_file_logger_level = backup::LOG_NONE;

        // Do backup with default settings. MODE_IMPORT means it will just
        // create the directory and not zip it.
        $bc = new backup_controller(backup::TYPE_1COURSE, $course->id,
                backup::FORMAT_MOODLE, backup::INTERACTIVE_NO, backup::MODE_IMPORT,
                $USER->id);
        $backupid = $bc->get_backupid();
        $bc->execute_plan();
        $bc->destroy();

        // Do restore to new course with default settings.
        $newcourseid = restore_dbops::create_new_course(
                $course->fullname, $course->shortname . '_2', $course->category);
        $rc = new restore_controller($backupid, $newcourseid,
                backup::INTERACTIVE_NO, backup::MODE_GENERAL, $USER->id,
                backup::TARGET_NEW_COURSE);

        $this->assertTrue($rc->execute_precheck());
        $rc->execute_plan();
        $rc->destroy();

        // Check settings in new course.
        $modinfo = get_fast_modinfo($newcourseid);
        $jclics = array_values($modinfo->get_instances_of('jclic'));
        $newjclic = new jclic(context_module::instance($jclics[0]->id), false, false);
        $newjclicmodule = $newjclic->get_instance();

        $this->assertNotEmpty($newjclic);

        $jclic = new jclic(context_module::instance($jclic->cmid), false, false);
        $jclicmodule = $jclic->get_instance();

        $fields = (array) $jclicmodule;
        unset($fields['id']);
        unset($fields['course']);
        foreach ($fields as $key => $unused) {
            $this->assertEquals($newjclicmodule->$key, $jclicmodule->$key, "Failed on field $key");
        }

        // Avoid errors...
        ini_set('max_execution_time', 0);
    }

    public function test_mod_jclic_duplicate() {
        global $USER, $DB, $CFG;

        require_once($CFG->dirroot . '/backup/util/includes/backup_includes.php');
        require_once($CFG->dirroot . '/backup/util/includes/restore_includes.php');

        $this->resetAfterTest(true);

        $this->setUser(2); // Admin user.

        // Create a course with some availability data set.
        $generator = $this->getDataGenerator();
        $course = $generator->create_course(
                array('format' => 'topics', 'numsections' => 3,
                    'enablecompletion' => COMPLETION_ENABLED),
                array('createsections' => true));
        $jclic = $generator->create_module('jclic', array(
                'course' => $course->id));

        $cmid = $jclic->cmid;

        // Do backup.
        $bc = new backup_controller(backup::TYPE_1ACTIVITY, $cmid, backup::FORMAT_MOODLE,
                backup::INTERACTIVE_NO, backup::MODE_IMPORT, $USER->id);
        $backupid = $bc->get_backupid();
        $bc->execute_plan();
        $bc->destroy();

        // Do restore.
        $rc = new restore_controller($backupid, $course->id,
                backup::INTERACTIVE_NO, backup::MODE_IMPORT, $USER->id, backup::TARGET_CURRENT_ADDING);
        $this->assertTrue($rc->execute_precheck());
        $rc->execute_plan();

        // Find cmid.
        $tasks = $rc->get_plan()->get_tasks();
        $cmcontext = context_module::instance($cmid);
        $newcmid = 0;
        foreach ($tasks as $task) {
            if (is_subclass_of($task, 'restore_activity_task')) {
                if ($task->get_old_contextid() == $cmcontext->id) {
                    $newcmid = $task->get_moduleid();
                    break;
                }
            }
        }
        $rc->destroy();
        if (!$newcmid) {
            throw new coding_exception('Unexpected: failure to find restored cmid');
        }

        // Check settings in new course.
        $newjclic = new jclic(context_module::instance($newcmid), false, false);
        $newjclicmodule = $newjclic->get_instance();

        $this->assertNotEmpty($newjclic);

        $jclic = new jclic(context_module::instance($jclic->cmid), false, false);
        $jclicmodule = $jclic->get_instance();

        $fields = (array) $jclicmodule;
        unset($fields['id']);
        unset($fields['course']);
        foreach ($fields as $key => $unused) {
            $this->assertEquals($newjclicmodule->$key, $jclicmodule->$key, "Failed on field $key");
        }

        // Avoid errors...
        ini_set('max_execution_time', 0);
    }

}