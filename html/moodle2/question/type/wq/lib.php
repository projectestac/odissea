<?php

function decode_html_entities($xml) {
    $htmlentitiestable = get_html_translation_table(HTML_ENTITIES, ENT_QUOTES, 'UTF-8');
    $xmlentitiestable = get_html_translation_table(HTML_SPECIALCHARS , ENT_COMPAT, 'UTF-8');
    $entitiestable = array_diff($htmlentitiestable, $xmlentitiestable);
    $decodetable = array_flip($entitiestable);
    $xml = str_replace(array_keys($decodetable), array_values($decodetable), $xml);
    return $xml;
}

function wrsqz_mathmlDecode($input) {
    $from = array('«', '»', '¨', '§', '`');
    $to = array('<', '>', '"', '&', '\'');
    $r = str_replace($from, $to, $input);
    return decode_html_entities($r);
}

function qtype_wq_cron() {
    global $CFG, $DB;

    $dbmanager = $DB->get_manager();

    try{
     $transaction = $DB->start_delegated_transaction();

        if ($dbmanager->table_exists('qtype_essaywiris_backup') && $CFG->version >= 2013111800)   {
            echo "Updating wirisessayoptions";

            $count = 0;

            if ($wirisessayoptions = $DB->get_records('qtype_essaywiris_backup')) {
                foreach ($wirisessayoptions as $record) {
                    if (!$DB->get_record('qtype_essay_options', array('questionid' => $record->questionid))) {
                        $DB->insert_record('qtype_essay_options', $record);
                        $count++;
                    }
                }
            }

            echo "\n" . $count . " questions updated";

            $table = new xmldb_table('qtype_essaywiris_backup');
            $dbmanager->drop_table($table);
        }

    $transaction->allow_commit();

    } catch(Exception $e) {
        $transaction->rollback($e);
    }

    return true;
}