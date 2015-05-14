<?php
require_once($CFG->dirroot."/config.php");
require_once($CFG->dirroot.'/local/rcommon/wslib.php');
require_once($CFG->dirroot.'/local/rcommon/locallib.php');

function get_all_books_structure($publisherid = false, $isbn = false) {
    global $DB;

    set_time_limit(0);

    $ret = true;

    $params = array();
    if ($publisherid) {
        $params['id'] = $publisherid;
    }

    $publishers = $DB->get_records('rcommon_publisher', $params);
    if ($publishers) {
        echo '<ul>';
        foreach ($publishers as $pub) {
            echo '<li>'.$pub->name;

            if (!empty($pub->urlwsbookstructure)) {
                $ret = $ret && get_books_structure_publisher($pub, $isbn);
            }
            echo '</li>';
        }
        echo '</ul>';
    } else {
        $ret = false;
    }

    return $ret;
}


function get_books_structure_publisher($publisher, $isbn = false) {
    global $OUTPUT;

    set_time_limit(0);

    $books = get_books($publisher);

    try {
        if (!empty($books)) {
			//  Fix bug, when there is just one received book
			if (!is_array($books) || !isset($books[0])) {
				$books = array($books);
			}
            echo '<ol>';
            foreach ($books as $book) {
                // Disable scorm import
                $bookformat = core_text::strtolower($book['formato']);
                if (!in_array($bookformat, rcommon_book::$allowedformats)) {
                    continue;
                }

                $codisbn = $book['isbn'];

                // Si se ha especificado un isbn guarda el libro
                if (!$isbn || $codisbn == $isbn) {
                    $message = 'ISBN: '.$codisbn;
                    // Obtiene los datos del indice del libro
                    try {
                        $instance = new StdClass();
                        $instance->isbn = $codisbn;
                        $instance->name = $book['titulo'];
                        $instance->summary = $book['titulo'];
                        $instance->format = $bookformat;
                        $instance->levelid = isset($book['nivel']) ? $book['nivel'] : false;
                        $instance->publisherid = $publisher->id;
                        rcommon_book::add_update($instance);

                        get_book_structure($publisher, $codisbn);
                        echo '<li>'.$OUTPUT->notification($message, 'notifysuccess').'</li>';
                    } catch (Exception $e) {
                        $message .= " - Error: ".$e->getMessage();
                        echo '<li>'.$OUTPUT->notification($message).'</li>';
                    }
                }
            }
            echo '</ol>';
            return true;
        } else {
        	echo get_string('nobooks', 'local_rcommon');
        	return true;
        }
    } catch (Exception $fault) {
        $message = rcommon_ws_error('get_books_structure_publisher', $fault->getMessage());
        throw new Exception($message);
    }
    return false;
}



/**
 * Web Service to access digital content SM
 * @param none
 * @return obj -> web service response
 */
function get_books($publisher) {
    global $OUTPUT;
    try {
        $center = get_marsupial_center();

        $client = get_marsupial_ws_client($publisher);

        $idcentro = @new SoapVar($center, XSD_STRING, "string", "http://www.w3.org/2001/XMLSchema");
        $response = $client->ObtenerTodos(array('IdCentro' => $idcentro));

        log_to_file("get_books Request: ".$client->__getLastRequest());
        log_to_file("get_books Response: ".$client->__getLastResponse());

        // Check if there are any response error
        $response = rcommon_object_to_array_lower($response, true);
        $response = isset($response['obtenertodosresult']) ? $response['obtenertodosresult'] : false;

        if ($response && isset($response['codigo']) && $response['codigo'] <= 0) {
            $text = array('code' => $response['codigo'], 'description' => $response['descripcion']);
            $message  = get_string('wserror', 'local_rcommon', $text);
            if (isset($response['url'])) {
                $message .= ', URL: '.test_ws_url($response['url']);
            }
            throw new Exception($message);
        } else if ($response && isset($response['catalogo']['libros']['libro'])) {
            return $response['catalogo']['libros']['libro'];
        } else {
            debugging('<pre>'.htmlentities($client->__getLastResponse()).'</pre>');
            throw new Exception(get_string('empty_response_error', 'local_rcommon'));
        }

    } catch (Exception $e) {
        $message = rcommon_ws_error('get_books', $e->getMessage());
        throw new Exception($message);
    }
    return false;
}


/**
 * Web Service to access digital content SM
 * @param none
 * @return obj -> web service response
 */
function get_book_structure($publisher, $isbn) {
    global $DB;
    // echo "<br>Indice Libro: ".$wsurl_contenido."<br>";

    $book = $DB->get_record('rcommon_books', array('isbn' => $isbn));
    if (!$book) {
        throw new Exception('Book not found');
    }

    try {
        $client = get_marsupial_ws_client($publisher);

        $isbnparam = @new SoapVar($isbn, XSD_STRING, "string", "http://www.w3.org/2001/XMLSchema");
        $response = $client->ObtenerEstructura(array('ISBN' => $isbnparam));

        log_to_file("get_book_structure Request: ".$client->__getLastRequest());
        log_to_file("get_book_structure Response: ".$client->__getLastResponse());
    } catch (Exception $fault) {
        log_to_file("wsBookStructure: get_book_structure - Exception = ".$fault->getMessage());
        $message = rcommon_ws_error('get_book_structure', $fault->getMessage());
        throw new Exception($message);
    }

    $response = rcommon_object_to_array_lower($response, true);
    $response = isset($response['obtenerestructuraresult']) ? $response['obtenerestructuraresult'] : false;
    if (!$response) {
        $message  = get_string('empty_response_error', 'local_rcommon');
        print_object($client->__getLastRequest());
        print_object($client->__getLastResponse());
        debugging('<pre>'.htmlentities($client->__getLastResponse()).'</pre>');
        $message = rcommon_ws_error('get_book_structure', $message);
        die();
        throw new Exception(get_string('empty_response_error', 'local_rcommon'));
    } else if (isset($response['codigo']) && $response['codigo'] <= 0) {
        $text = array('code' => $response['codigo'], 'description' => $response['descripcion']);
        $message  = get_string('wserror', 'local_rcommon', $text);
        if (isset($response['url'])) {
            $message .= ', URL: '.test_ws_url($response['url']);
        }
        $message = rcommon_ws_error('get_book_structure', $message);
        throw new Exception($message);
    } else {
        save_book_structure($response, $book);
    }
}

function save_book_structure($response, $book) {

    $units = isset($response['libros']['libro']['unidades']['unidad']) ? $response['libros']['libro']['unidades']['unidad'] : false;
    // Guarda los datos del libro
    $book->structureforaccess = (count($units) > 0) ? 1 : 0;

    $bookid = rcommon_book::add_update($book);
    if (!$bookid) {
        return;
    }

    if ($units) {
        $docleaning = true; // If we have no errors, we will clean old units and activities
        $timemodified = time(); // Time to do the cleaning

        // If is not associtive, it will have only one unit
        if (is_associative_array($units)) {
            $units = array($units);
        }

        foreach ($units as $unit) {
            $actividades = isset($unit['actividades']['actividad']) ? $unit['actividades']['actividad'] : false;

            // Unit with no code detected!
            if (!isset($unit['id']) || empty($unit['id'])) {
                $docleaning = false;
                continue;
            }

            $unitinstance = new stdClass();
            $unitinstance->bookid = $bookid;
            $unitinstance->code = $unit['id'];
            $unitinstance->name = isset($unit['titulo']) ? $unit['titulo'] : "";
            $unitinstance->summary = $unitinstance->name;
            $unitinstance->sortorder = isset($unit['orden']) ? $unit['orden'] : "";

            // echo "<li>Unit: {$unitinstance->name}";
            $unitid = rcommon_unit::add_update($unitinstance);

            if (!$unitid) { // Cannot Add/Update Unit
                $docleaning = false;
                continue;
            }

            if ($actividades) {
                // If is not associtive, it will have only one activity
                if (is_associative_array($actividades)) {
                    $actividades = array($actividades);
                }

                foreach ($actividades as $act) {
                    // Activity with no code detected!
                    if (!isset($act['id']) || empty($act['id'])) {
                        $docleaning = false;
                        continue;
                    }

                    $activityinstance = new stdClass();
                    $activityinstance->bookid = $bookid;
                    $activityinstance->unitid = $unitid;
                    $activityinstance->code = $act['id'];
                    $activityinstance->name = isset($act['titulo']) ? $act['titulo'] : "";
                    $activityinstance->summary = $activityinstance->name;
                    $activityinstance->sortorder = isset($act['orden']) ? $act['orden'] : "";

                    $activid = rcommon_activity::add_update($activityinstance);
                    if (!$activid) { // Cannot Add/Update Activity
                        $docleaning = false;
                    }
                }
            }
        }

        if ($docleaning) {
            rcommon_book::clean($bookid, $timemodified);
        }
    }
}
