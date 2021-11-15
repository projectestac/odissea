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

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot.'/blocks/courses_vicensvives/lib/vicensvives.php');
require_once($CFG->dirroot.'/course/lib.php');
require_once($CFG->libdir.'/gradelib.php');

class courses_vicensvives_add_book {

    private $book;
    private $progress;
    private $current = 0;
    private $total;
    private $course;
    private $updatedunits = array();

    private function __construct($bookid, $course, progress_bar $progress) {
        $this->course = $course;
        $this->progress = $progress;
        if ($this->progress) {
            $this->progress->create();
        }
        $ws = new vicensvives_ws();
        $this->book = $ws->book($bookid);
        if (!$this->book) {
            throw new moodle_exception('booknotfetched', 'block_courses_vicensvives');
        }
        $this->total = $this->progress_total(!$course);
        $this->update_progress();
    }

    public static function create($bookid, $format, progress_bar $progress = null) {
        $addbook = new self($bookid, null, $progress);
        $courseid = $addbook->create_course($format);
        $addbook->create_course_content();
        return $courseid;
    }

    public static function enrol_user($courseid, $userid) {
        global $DB;

        if (!$role = $DB->get_record('role', array('shortname' => 'editingteacher'))) {
            return get_string('editingteachernotexist', 'block_courses_vicensvives');
        }

        // Matriculación manual.
        if (!enrol_is_enabled('manual')) {
            return get_string('manualnotenable', 'block_courses_vicensvives');
        }

        $context = context_course::instance($courseid);
        if (user_has_role_assignment($userid, $role->id, $context->id)) {
            return;
        }

        $manual = enrol_get_plugin('manual');
        $instances = enrol_get_instances($courseid, false);
        foreach ($instances as $instance) {
            if ($instance->enrol === 'manual') {
                $manual->enrol_user($instance, $userid, $role->id);
                break;
            }
        }
    }

    public static function update($courseid, progress_bar $progress=null) {
        global $DB;

        $course = $DB->get_record('course', array('id' => $courseid), '*', MUST_EXIST);

        $bookid = null;
        preg_match('/^vv-(\d+)-/', $course->idnumber, $match);
        if ($match) {
            $bookid = (int) $match[1];
        }

        $addbook = new self($bookid, $course, $progress);
        $addbook->create_course_content(true);

        return $addbook->updatedunits;
    }

    private function create_course($format) {
        global $CFG, $DB;

        $courseobj = new stdClass();
        $courseobj->category = $CFG->block_courses_vicensvives_defaultcategory;

        // Asignación de un shortname y idnumber no utilitzados.
        for ($n = 1; true; $n++) {
            $shortname = $this->book->shortname . '_' . $n;
            $idnumber = 'vv-' . $this->book->idBook . '-' . $n . '-' . $this->book->subject;
            $select = 'shortname = ? OR idnumber = ?';
            $params = array($shortname, $idnumber);
            if (!$DB->record_exists_select('course', $select, $params)) {
                break;
            }
        }
        $courseobj->shortname = $shortname;
        $courseobj->fullname = $this->book->fullname;
        $courseobj->idnumber = $idnumber;
        $courseobj->summary = $this->book->authors;
        // Comprobar q existe el formato de curso personalizado para aplicarlo.
        $courseobj->format = 'topics';
        $courseformats = get_plugin_list('format');
        if (isset($courseformats[$format])) {
            $courseobj->format = $format;
        }
        // De esta manera no crearemos el foro de noticias.
        $courseobj->newsitems = 0;

        $this->course = create_course($courseobj);

        $gradecategory = grade_category::fetch_course_category($this->course->id);
        $gradecategory->aggregation = GRADE_AGGREGATE_MEAN;
        $gradecategory->update();

        $this->update_progress();

        return $this->course->id;
    }

    private function create_course_content($update = false) {
        $coursegradecat = grade_category::fetch_course_category($this->course->id);
        // Generate content.
        echo '<h3>' . get_string('generatingcontent', 'block_courses_vicensvives').'</h3>';
        $sectionnum = 1;
        foreach ($this->book->units as $unit) {
            $mods = $this->get_section_mods($unit);
            $sectionname = $unit->name;
            if ($unit->label) {
                $sectionname = $unit->label . '. ' . $sectionname;
            }
            echo $unit->name . '</br>';
            $section = $this->setup_section($sectionnum, $sectionname, $mods, $update);

            $this->set_num_sections($sectionnum);

            $idnumber = $this->book->idBook . '_unit_' . $unit->id;
            $gradecat = $this->setup_grade_category($coursegradecat, $idnumber, $section->name, $section->section, true);

            $this->update_progress();
            $this->create_section_content($section, $unit, $mods, $gradecat, $update);
            $sectionnum++;
        }

        rebuild_course_cache($this->course->id);
        get_fast_modinfo($this->course);
        grade_regrade_final_grades($this->course->id);
        $this->update_progress();
    }

    // Esta función es diferente para cada versión de Moodle.
    private function create_mod($mod, $section) {
        global $CFG, $DB;

        $fromform = new stdClass();
        $fromform->module = $DB->get_field('modules', 'id', array('name' => $mod['modname']));
        $fromform->modulename = $mod['modname'];
        $fromform->visible = true;
        $fromform->cmidnumber = $mod['idnumber'];
        $fromform->name = $mod['name'];
        $fromform->indent = $mod['indent'];
        $fromform->intro = '-';
        $fromform->introformat = 0;
        $fromform->availablefrom = 0;
        $fromform->availableuntil = 0;
        $fromform->showavailability = 0;
        $fromform->conditiongradegroup = array();
        $fromform->conditionfieldgroup = array();
        $fromform->conditioncompletiongroup = array();
        $fromform->grade = $CFG->gradepointdefault;

        foreach ($mod['params'] as $key => $value) {
            $fromform->$key = $value;
        }

        courses_vicensvives_add_moduleinfo($fromform, $this->course, $section);

        return $fromform->coursemodule;
    }

    private function create_section_content($section, $unit, $mods, $gradecat, $update = false) {
        global $DB;

        $roleid = $DB->get_field('role', 'id', array('shortname' => 'user'));

        $sequence = $section->sequence ? explode(',', $section->sequence) : array();
        $prevmod = null;

        foreach ($mods as $mod) {
            $cm = $this->get_cm($mod, $section);
            if ($update && $cm) {
                // Actualizamos idnumber si ha cambiado (etiquetas y enlaces creadas con una versión anterior).
                $needupdate = false;

                if ($cm->idnumber != $mod['idnumber']) {
                    $needupdate = true;
                    $DB->set_field('course_modules', 'idnumber', $mod['idnumber'], array('id' => $cm->id));
                }
                $module = $DB->get_record($mod['modname'], array('id' => $cm->instance));

                if ($module->name != $mod['name']) {
                    $needupdate = true;
                    $module->name = $mod['name'];
                }
                foreach ($mod['params'] as $key => $value) {
                    if ($module->$key != $value) {
                        $needupdate = true;
                        $module->$key = $value;
                    }
                }
                if (!$needupdate) {
                    // Mantenemos timemmodified como última actualización.
                    $DB->set_field($mod['modname'], 'timemodified', time(), array('id' => $module->id));
                } else {
                    $module->timemodified = time();
                    $DB->update_record($mod['modname'], $module);
                }

                $prevmod = $cm->id;
                $sortgradeitem = false;
            } else {
                $transaction = $DB->start_delegated_transaction();

                // Nueva actividad.
                $cmid = $this->create_mod($mod, $section);
                // Añade a la sección.
                if ($prevmod) {
                    $index = array_search($prevmod, $sequence);
                    array_splice($sequence, $index + 1, 0, array($cmid));
                } else {
                    $sequence[] = $cmid;
                }
                $section->sequence = implode(',', $sequence);
                $DB->set_field('course_sections', 'sequence', $section->sequence, array('id' => $section->id));

                // Denegación del permiso de edición de la actividad.
                $context = context_module::instance($cmid);
                assign_capability('moodle/course:manageactivities', CAP_PROHIBIT, $roleid, $context);

                $this->updatedunits[$unit->id] = $unit;

                $transaction->allow_commit();
                $prevmod = $cmid;
                $sortgradeitem = true;
            }

            if (!empty($mod['gradecat'])) {
                $index = array_search($prevmod, $sequence);
                $prevcmids = array_slice($sequence, 0, $index);
                $this->setup_grade_item($gradecat, $mod, $prevcmids, $sortgradeitem);
            }

            $this->update_progress();
        }
    }

    private function get_cm($mod, $section) {
        global $DB;

        $conditions = array(
            'course' => $this->course->id,
            'idnumber' => $mod['idnumber'],
            'section' => $section->id,
            'deletioninprogress' => 0
        );

        $cms = $DB->get_records('course_modules', $conditions);

        if (count($cms) == 1) {
            return array_shift($cms);
        } else {
            foreach ($cms as $cm) {
                // Vemos si se ha actualizado en el proceso, para permitir repeticiones.
                $module = $DB->get_record($mod['modname'], array('id' => $cm->instance));
                if ($module->timemodified < (time() - 60)) {
                    return $cm;
                }
            }
        }
        return false;
    }

    private function get_lti_mod($type, $element, $gradecat) {
        $mod = array(
            'idnumber' => $this->book->idBook . '_' . $type . '_' . $element->id,
            'name' => $element->lti->activityName,
            'modname' => 'lti',
            'indent' => 1,
            'params' => array(
                'toolurl' => $element->lti->launchURL,
                'instructorchoicesendname' => true,
                'instructorchoicesendemailaddr' => true,
                'launchcontainer' => 4, // Window.
            ),
            'gradecat' => null,
        );
        if (isset($element->element->lti->activityDescription)) {
            $mod['params']['intro'] = $element->lti->activityDescription;
        }
        if (isset($element->lti->consumerKey)) {
            $mod['params']['resourcekey'] = $element->lti->consumerKey;
        }
        if (isset($element->lti->sharedSecret)) {
            $mod['params']['password'] = $element->lti->sharedSecret;
        }
        if (isset($element->lti->customParameters)) {
            $mod['params']['instructorcustomparameters'] = $element->lti->customParameters;
        }
        if (isset($element->lti->acceptGrades)) {
            $mod['params']['instructorchoiceacceptgrades'] = (int) $element->lti->acceptGrades;
            if ($element->lti->acceptGrades != 0) {
                $mod['gradecat'] = $gradecat;
            }
        }
        return $mod;
    }

    private function get_section_mods($unit) {
        $mods = array();
        $sectionnum = 0;
        if (!isset($unit->sections) || empty($unit->sections)) {
            return $mods;
        }
        foreach ($unit->sections as $section) {
            // Name without label.
            $name = s($section->name);
            if ($section->label) {
                $name = s($section->label) . '. ' . s($section->name);
            }
            $mods[] = array(
                'idnumber' => $this->book->idBook . '_label_' . $section->id,
                'name' => $name,
                'modname' => 'label',
                'indent' => 0,
                'params' => array(
                    'intro' => html_writer::tag('h4', $name),
                    'introformat' => FORMAT_HTML,
                ),
                'gradecat' => null,
            );

            $gradecat = array(
                'idnumber' => $this->book->idBook . '_label_' . $section->id,
                'name' => $name,
                'position' => $sectionnum,
            );

            if (!empty($section->lti)) {
                $mods[] = $this->get_lti_mod('section', $section, $gradecat);
            }

            if (!empty($section->questions)) {
                foreach ($section->questions as $question) {
                    $mods[] = $this->get_lti_mod('question', $question, $gradecat);
                }
            }
            if (!empty($section->links)) {
                foreach ($section->links as $link) {
                    $mods[] = array(
                        'idnumber' => $this->book->idBook . '_link_' . $link->id,
                        'name' => $link->name,
                        'modname' => 'url',
                        'indent' => 1,
                        'params' => array(
                            'externalurl' => $link->url,
                            'intro' => $link->summary,
                            'display' => 0,
                        ),
                        'gradecat' => null,
                    );
                }
            }
            if (!empty($section->documents)) {
                foreach ($section->documents as $document) {
                    $mods[] = $this->get_lti_mod('document', $document, $gradecat);
                }
            }
            if (!empty($section->videos)) {
                foreach ($section->videos as $video) {
                    $mods[] = $this->get_lti_mod('video', $video, $gradecat);
                }
            }
            if (!empty($section->mauthors)) {
                foreach ($section->mauthors as $mauthor) {
                    $type = 'mauthor';
                    if (isset($mauthor->mauthorType) && !empty($mauthor->mauthorType)) {
                        $type .= strtolower(str_replace("_", '', $mauthor->mauthorType));
                    }
                    $mods[] = $this->get_lti_mod($type, $mauthor, $gradecat);
                }
            }
            $sectionnum++;
        }

        return $mods;
    }

    private function progress_total($createcourse=true) {
        $total = 1; // Fetch book content.
        $total += ($createcourse ? 1 : 0); // Create course.
        foreach ($this->book->units as $unit) {
            $total++; // Setup section.
            if (!isset($unit->sections) || empty($unit->sections)) {
                continue;
            }
            foreach ($unit->sections as $section) {
                $total++; // Section label.
                if (!empty($section->lti)) {
                    $total++; // Section lti.
                }
                $total += count($section->questions);
                $total += count($section->links);
                $total += count($section->documents);
                $total += count($section->videos);
                $total += count($section->mauthors);
            }
        }
        $total++; // Rebuild course cache.
        return $total;
    }

    // Esta función es diferente para cada versión de Moodle.
    private function set_num_sections($sectionnum) {
        global $DB;

        $conditions = array('courseid' => $this->course->id, 'sectionid' => 0, 'name' => 'numsections');
        $numsections = (int) $DB->get_field('course_format_options', 'value', $conditions);
        if ($sectionnum > $numsections) {
            $DB->set_field('course_format_options', 'value', $sectionnum, $conditions);
        }
    }

    private function setup_grade_category(grade_category $parent, $idnumber, $name, $position, $sort=false) {
        // Obtien o crea la categoria.
        $params = array('courseid' => $parent->courseid, 'itemtype' => 'category', 'idnumber' => $idnumber);
        $item = grade_item::fetch($params);
        if ($item) {
            $category = grade_category::fetch(array('id' => $item->iteminstance));
            if ($category->parent != $parent->id or $category->fullname != $name) {
                $category->parent = $parent->id;
                $category->fullname = $name;
                $category->update();
                // Obtiene al grade_item actualizado.
                $item = $category->get_grade_item();
                $sort = true;
            }
        } else {
            $params = array(
                'courseid' => $parent->courseid,
                'parent' => $parent->id,
                'fullname' => $name,
            );
            $category = new grade_category($params, false);
            $category->apply_default_settings();
            $category->apply_forced_settings();
            $category->aggregation = GRADE_AGGREGATE_MEAN;
            $category->insert();
            $item = $category->get_grade_item();
            $item->idnumber = $idnumber;
            $item->update();
            $sort = true;
        }

        if ($sort) {
            // Obtiene los grade_items de las categorías del mismo nivel y los ordena por sortorder.
            $categories = grade_category::fetch_all(array('parent' => $parent->id));
            $items = array();
            foreach ($categories as $c) {
                $items[] = $c->get_grade_item();
            }
            usort($items, function($a, $b) {
                return $a->sortorder - $b->sortorder;
            });

            // Ordena la categoría.
            if (isset($items[$position]) and $items[$position]->id != $item->id) {
                $item->move_after_sortorder($items[$position]->sortorder - 1);
            }
        }

        return $category;
    }


    private function setup_grade_item(grade_category $parent, $mod, $prevcmids, $sort=false) {
        global $DB;

        $gradecat = $this->setup_grade_category($parent, $mod['gradecat']['idnumber'], $mod['gradecat']['name'],
                                                $mod['gradecat']['position']);

        $params = array('courseid' => $gradecat->courseid, 'idnumber' => $mod['idnumber']);
        $items = grade_item::fetch_all($params);
        if (!$items) {
            return;
        }

        foreach ($items as $item) {
            if ($item->categoryid != $gradecat->id) {
                $item->categoryid = $gradecat->id;
                $item->update();
                $sort = true;
            }
        }

        if (!$sort) {
            return;
        }

        usort($items, function($a, $b) {
            return $a->sortorder - $b->sortorder;
        });

        list($sqlin, $params) = $DB->get_in_or_equal($prevcmids, SQL_PARAMS_NAMED);
        $sql = "SELECT MAX(sortorder)
                FROM {course_modules} cm
                JOIN {modules} m ON m.id = cm.module
                JOIN {grade_items} gi ON gi.iteminstance = cm.instance AND gi.itemmodule = m.name
                WHERE cm.id $sqlin
                AND cm.deletioninprogress = 0
                AND gi.itemtype = :itemtype
                AND gi.courseid = cm.course";
        $params['itemtype'] = 'mod';
        $sortorder = $DB->get_field_sql($sql, $params);

        if (!$sortorder) {
            $sortorder = $gradecat->get_grade_item()->sortorder;
        }

        foreach ($items as $item) {
            if ($item->sortorder != $sortorder + 1) {
                $item->move_after_sortorder($sortorder);
                $sortorder = $item->sortorder;
            }
        }
    }

    private function setup_section($sectionnum, $name, array $mods = null, $update = false) {
        global $DB;

        $section = null;

        // Búsqueda de la sección basada en los elementos ya creados.
        // Durena FIX: sólo si update porque en actualizaciones de elementos vincula secciones.

        if ($mods && $update) {
            $idnumbers = array();
            foreach ($mods as $mod) {
                break;
            }
            $sql = "SELECT s.*
                    FROM {course_modules} cm
                    JOIN {course_sections} s
                    WHERE s.id = cm.section
                    AND cm.course = :courseid
                    AND cm.idnumber = :idnumber
                    AND cm.deletioninprogress = 0";
            $params['courseid'] = $this->course->id;
            $params['idnumber'] = $mod['idnumber'];
            $sections = $DB->get_records_sql($sql, $params);

            if ($sections) {
                $section = reset($sections);
            }
        }

        // No existe ningún elemento, buscamos la primera sección vacía.
        if (!$section) {
            $sections = $DB->get_records('course_sections', array('course' => $this->course->id), 'section');
            $nextsectionnum = 1;
            foreach ($sections as $section) {
                $nextsectionnum = $section->section + 1;
                // Validamos el nombre de la sección y no la secuencia.
                // Al estar vacía la sección,la secuencia queda en blanco.
                if ($section->section > 0 and $section->name == '') {
                    break;
                }
            }
            // Si no existe ninguna sección vacía, creamos una nueva.
            // Validamos el nombre de la sección y no la secuencia.
            // Al estar vacía la sección,la secuencia queda en blanco.
            if (!$section or $section->section == 0 or $section->name != '') {
                $section = new stdClass();
                $section->course = $this->course->id;
                $section->section = $nextsectionnum;
                $section->summary = '';
                $section->summaryformat = FORMAT_HTML;
                $section->sequence = '';
                $section->id = $DB->insert_record('course_sections', $section);
            }
        }

        // Actualización del nombre de la sección.
        $section->name = $name;
        $DB->set_field('course_sections', 'name', $name, array('id' => $section->id ));

        // Reordenación de las secciones.
        if ($sectionnum != $section->section) {
            move_section_to($this->course, $section->section, $sectionnum);
            return $DB->get_record('course_sections', array('id' => $section->id));
        }

        return $section;
    }

    private function update_progress($msg='') {
        $this->current++;
        if ($this->progress) {
            $this->progress->update($this->current, $this->total, $msg);
        }
    }
}

// Función basa en add_moduleinfo, con estas diferencias:
// - Se pasa el objeto de la sección para evitar una consulta a la base de datos
// - Se ha eliminado código que procesa parámetros no utilitzados
// - Se guarda el campo "indent"
// - No se llama rebuild_course_cache (se llama una sola vez al final)
// - No se llama grade_regrade_final_grades (se llama una sola vez al final)
// - No añade el módulo a la sección (se hace posteriormente).
function courses_vicensvives_add_moduleinfo($moduleinfo, $course, $section) {
    global $DB, $CFG;

    require_once("$CFG->dirroot/course/modlib.php");

    // Attempt to include module library before we make any changes to DB.
    include_modulelib($moduleinfo->modulename);

    $moduleinfo->course = $course->id;
    $moduleinfo = set_moduleinfo_defaults($moduleinfo);

    $moduleinfo->groupmode = 0; // Do not set groupmode.

    // First add course_module record because we need the context.
    $newcm = new stdClass();
    $newcm->course           = $course->id;
    $newcm->module           = $moduleinfo->module;
    $newcm->instance         = 0; // Not known yet, will be updated later (this is similar to restore code).
    $newcm->visible          = $moduleinfo->visible;
    $newcm->visibleold       = $moduleinfo->visible;
    if (isset($moduleinfo->cmidnumber)) {
        $newcm->idnumber         = $moduleinfo->cmidnumber;
    }
    $newcm->groupmode        = $moduleinfo->groupmode;
    $newcm->groupingid       = $moduleinfo->groupingid;
    $newcm->showdescription  = 0;
    $newcm->indent           = $moduleinfo->indent;

    $newcm->added = time();
    $newcm->section = $section->id;
    if (!$moduleinfo->coursemodule = $DB->insert_record("course_modules", $newcm)) {
        throw new moodle_exception('cannotaddcoursemodule');
    }

    $addinstancefunction    = $moduleinfo->modulename."_add_instance";
    try {
        $returnfromfunc = $addinstancefunction($moduleinfo, null);
    } catch (moodle_exception $e) {
        $returnfromfunc = $e;
    }
    if (!$returnfromfunc or !is_number($returnfromfunc)) {
        // Undo everything we can. This is not necessary for databases which.
        // support transactions, but improves consistency for other databases.
        $modcontext = context_module::instance($moduleinfo->coursemodule);
        context_helper::delete_instance(CONTEXT_MODULE, $moduleinfo->coursemodule);
        $DB->delete_records('course_modules', array('id' => $moduleinfo->coursemodule));

        if ($e instanceof moodle_exception) {
            throw $e;
        } else if (!is_number($returnfromfunc)) {
            throw new moodle_exception('invalidfunction', '', course_get_url($course, $section->section));
        } else {
            throw new moodle_exception('cannotaddnewmodule', '', course_get_url($course, $section->section),
                $moduleinfo->modulename);
        }
    }

    $moduleinfo->instance = $returnfromfunc;

    $DB->set_field('course_modules', 'instance', $returnfromfunc, array('id' => $moduleinfo->coursemodule));
}
