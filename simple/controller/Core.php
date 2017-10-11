<?php

use system\engine\load;

class ControllerCore {

    public $core;

    public function __construct() {
        
    }
 
    public function view($body) {


        $d = array('test' => 'test');
        $data = array(
            'head' => 'head',
            'body' => SystemEngineLoad::view("frontend/articles/news", $body),
            'footer' => 'footer',
        );

        return SystemEngineLoad::view("frontend/articles/articles", $data);
    }

}
