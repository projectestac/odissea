<?php

require_once 'agora_script_base.class.php';

class script_migratehvp2h5p extends agora_script_base {

    public $title = 'Migració d\'HVP a H5P';
    public $info = "<p>Executa l'script de migració d'HVP a H5P - admin/tool/migratehvp2h5p/cli/migrate.php</p>
           <p>Possibles valors de les variables de configuració:</p>
               <ul>
                   <li>execute: 0 per no fer la conversió (només llistar les activitats), 1 per fer-la. 
                                Per defecte: 0.</li>
                   <li>keeporiginal: 0 per esborrar l'activitat original, 1 per mantenir-la visible i 
                                     2 per mantenir-la amagada. Per defecte: 2.</li>
                   <li>copy2cb: 0 per no afegir els fitxers H5P al banc de continguts, 1 per afegir-los amb un enllaç i 
                                2 per copiar-los. Per defecte: 1.</li>
                   <li>contenttypes: llista d'id de les biblioteques H5P els continguts de les quals s'han de migrar. 
                                     En blanc, es migren tots. Per defecte: En blanc.</li>
                   <li>limit: Nombre màxim d'activitats que es migraran en una execució. Per defecte: 1000.</li>
               </ul>
           </p>";
    public $cron = false;
    protected $test = false;
    public $cli = true;
    public $api = true;
    protected $category = 'Utils';

    /**
     * @throws coding_exception
     */
    public function params(): array {
        return [
            'execute' => optional_param('execute', 0, PARAM_INT),
            'keeporiginal' => optional_param('keeporiginal', 2, PARAM_INT),
            'copy2cb' => optional_param('copy2cb', 1, PARAM_INT),
            'contenttypes' => optional_param('contenttypes', '', PARAM_TEXT),
            'limit' => optional_param('limit', 1000, PARAM_INT),
        ];
    }

    /**
     * @throws invalid_dataroot_permissions
     * @throws coding_exception
     */
    protected function _execute($params = [], $execute = true): bool {

        global $CFG, $OUTPUT, $agora;

        $cliparams = ' --ccentre=' . $params['ccentre'] .
            ' --keeporiginal=' . $params['keeporiginal'] .
            ' --copy2cb=' . $params['copy2cb'] .
            ' --limit=' . $params['limit'];

        if (!empty($params['contenttypes'])) {
            $cliparams .= ' --contenttypes=' . $params['contenttypes'];
        }

        if ($params['execute']) {
            $cliparams .= ' --execute';
        }

        $cliphp = $CFG->pathtophp ?? 'php';
        $command = $cliphp . ' ' . $CFG->dirroot . '/admin/tool/migratehvp2h5p/cli/migrate.php' . $cliparams;

        ob_start();
        passthru($command);
        $output = ob_get_clean();

        echo $OUTPUT->notification('Executed command: ' . $command . "\n", 'notifysuccess');
        echo $OUTPUT->notification($output, 'notifysuccess');

        // Log $output in a centralized file (/dades/data/portaldata/data/moodle2/migratehvp2h5p/).
        $logdir = $agora['server']['root'] . $agora['admin']['datadir'] . '/data/moodle2/migratehvp2h5p/';
        $logfile = $logdir . 'migratehvp2h5p_' . date("Ymd") . '.log';

        if (make_writable_directory($logdir)) {
            file_put_contents($logfile, $CFG->dnscentre . ' - ' . $CFG->dbuser . "\n\n" . $output . "\n\n", FILE_APPEND);
        }

        return true;
    }

}
