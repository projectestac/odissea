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

class restore_qtype_multianswerwiris_plugin extends restore_qtype_multianswer_plugin {

    /**
     * Returns the paths to be handled by the plugin at question level.
     */
    protected function define_question_plugin_structure() {
        $paths = array();

        // This qtype uses question_answers, add them.
        $this->add_question_question_answers($paths);

        // Add own qtype stuff.
        $elename = 'multianswer';
        $xmlname = 'qtype_wq_multianswerwiris';

        $elepath = $this->get_pathfor('/multianswer');
        $xmlpath = $this->get_pathfor('/question_xml');

        $paths[] = new restore_path_element($elename, $elepath);
        $paths[] = new restore_path_element($xmlname, $xmlpath);

        return $paths; // And we return the interesting paths.
    }

    public static function convert_backup_to_questiondata(array $backupdata): \stdClass {

        // Moodle abstract implementation for this function assumes that the qtype plugin options are stored in the
        // ['plugin_qtype_{qtypename}_question']['{qtypename}'] array, so we need map the options from the base qtype.
        if (isset($backupdata['plugin_qtype_multianswerwiris_question']['multianswer'])) {
            $backupdata['plugin_qtype_multianswerwiris_question']['multianswerwiris'] = $backupdata['plugin_qtype_multianswerwiris_question']['multianswer'];
        }

        // Convert the backup data to question data.
        $questiondata = parent::convert_backup_to_questiondata($backupdata);

        // Include Wiris question XML if it exists.
        if (isset($backupdata['plugin_qtype_multianswerwiris_question']['question_xml'][0]['xml'])) {
            $questiondata->options->wirisquestion = $backupdata['plugin_qtype_multianswerwiris_question']['question_xml'][0]['xml'];
        }

        return $questiondata;
    }

    public function define_excluded_identity_hash_fields(): array {
        // Only truefalsewiris uses wirisoptions. Exclude them for other qtypes.
        return array_merge(
            parent::define_excluded_identity_hash_fields(),
            [
                '/options/wirisoptions'
            ]
        );
    }

    public function process_qtype_wq_multianswerwiris($data) {
        global $DB;

        $data = (object)$data;
        $data->xml = $this->decode_html_entities($data->xml);
        $oldid = $data->id;

        // Detect if the question is created or mapped.
        $oldquestionid   = $this->get_old_parentid('question');
        $newquestionid   = $this->get_new_parentid('question');
        $questioncreated = $this->get_mappingid('question_created', $oldquestionid) ? true : false;

        // If the question has been created by restore, we need to fill
        // qtype_wq tables too.
        if ($questioncreated) {
            // Adjust some columns.
            $data->question = $newquestionid;
            // Insert record.
            $newitemid = $DB->insert_record('qtype_wq', $data);
            // Create mapping.
            $this->set_mapping('qtype_wq', $oldid, $newitemid);
        }
    }

    /**
     * Remaps subquestion IDs in question_multianswer.sequence after restore.
     *
     * Overrides the parent to scope processing to 'multianswerwiris' records only.
     * Without this, when a backup contains both native multianswer and multianswerwiris
     * questions, the parent's unscoped query would run twice and corrupt the sequences
     * (already-remapped IDs would pass through get_mappingid() as nulls, emptying the
     * sequence and making all embedded answer fields disappear).
     *
     * Assumes Moodle runs the native multianswer plugin first (guaranteed by backup
     * ordering). The native plugin has no qtype filter, so it must run before this one.
     *
     * @see restore_qtype_multianswer_plugin::after_execute_question()
     */
    public function after_execute_question() {
        global $DB;

        $rs = $DB->get_recordset_sql("
                SELECT qma.id, qma.sequence
                  FROM {question_multianswer} qma
                  JOIN {backup_ids_temp} bi ON bi.newitemid = qma.question
                  JOIN {question} q ON q.id = qma.question
                 WHERE bi.backupid = :backupid
                   AND bi.itemname = 'question_created'
                   AND q.qtype = 'multianswerwiris'",
                ['backupid' => $this->get_restoreid()]);

        foreach ($rs as $rec) {
            $sequence = $this->remap_sequence($rec->sequence);
            if ($sequence === null) {
                continue; // Already processed by the native multianswer plugin.
            }
            $DB->set_field('question_multianswer', 'sequence', $sequence, ['id' => $rec->id]);
            $this->fix_multichoice_shuffle($sequence);
        }

        $rs->close();
    }

    /**
     * Maps old backup subquestion IDs to new restored IDs for a sequence string.
     *
     * Returns null if no ID in the sequence has a backup→restore mapping, which means
     * the native multianswer plugin has already processed this record.
     */
    private function remap_sequence(string $sequence): ?string {
        $ids = preg_split('/,/', $sequence, -1, PREG_SPLIT_NO_EMPTY);
        $remapped = array_filter(array_map(
            fn($id) => $this->get_mappingid('question', $id),
            $ids
        ));
        return !empty($remapped) ? implode(',', $remapped) : null;
    }

    /**
     * Resets shuffleanswers to 0 on any multichoice subquestion in the sequence.
     *
     * Mirrors restore_qtype_multianswer_plugin::after_execute_question(). Multichoice
     * answers embedded in a cloze question must not be shuffled because their order is
     * determined by the question text syntax ({1:MC:=A~B~C}).
     */
    private function fix_multichoice_shuffle(string $sequence): void {
        global $DB;

        $subquestions = $DB->get_records_list('question', 'id', explode(',', $sequence), 'id ASC');
        foreach ($subquestions as $sub) {
            if ($sub->qtype !== 'multichoice') {
                continue;
            }
            question_bank::get_qtype('multichoice')->get_question_options($sub);
            if (!isset($sub->options->shuffleanswers)) {
                continue;
            }
            preg_match('/' . ANSWER_REGEX . '/s', $sub->questiontext, $match);
            if (!empty($match[ANSWER_REGEX_ANSWER_TYPE_MULTICHOICE])) {
                $DB->set_field('qtype_multichoice_options', 'shuffleanswers', 0,
                    ['id' => $sub->options->id]);
            }
        }
    }

    protected function decode_html_entities($xml) {
        $htmlentitiestable = get_html_translation_table(HTML_ENTITIES, ENT_QUOTES, 'UTF-8');
        $xmlentitiestable = get_html_translation_table(HTML_SPECIALCHARS, ENT_COMPAT, 'UTF-8');
        $entitiestable = array_diff($htmlentitiestable, $xmlentitiestable);
        $decodetable = array_flip($entitiestable);
        $xml = str_replace(array_keys($decodetable), array_values($decodetable), $xml);
        return $xml;
    }
}
