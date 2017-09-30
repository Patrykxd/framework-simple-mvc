<?php

use system\engine\load;

class ControllerCore {

    public $core;

    public function __construct() {
        
    }

    public function error() {
        return SystemEngineLoad::view("frontend/includes/error404", array());
    }

    public function view($body = array()) {


        $data = array(
            'head' => SystemEngineLoad::view("frontend/includes/head", array()),
            'body' => empty($body)?SystemEngineLoad::view("frontend/includes/body"):$body,
            'footer' => SystemEngineLoad::view("frontend/includes/footer", array()),
        );

        echo SystemEngineLoad::view("frontend/index_view", $data);
    }

}
