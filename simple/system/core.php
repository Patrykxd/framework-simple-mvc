<?php

use system\engine\load;

class SystemCore {

    public $core;

    public function __construct() {
        
    }

    public function error() {
        return SystemEngineLoad::view("frontend/includes/error404");
    }

    public function view($body = array()) {
        /**
         * LADOWANIE WIDOKOW
         * ladowanie widoków zmienna $body jesli jest pusta lub nie istanieje 
         * laduje glowny widok includes/body standardowy index.php 
         * dane mozna wrzucic poprzez array 2 parametr
         * 
         */
        $data = array(
            'head' => SystemEngineLoad::view("frontend/includes/head"),
            'body' => empty($body) ? SystemEngineLoad::view("frontend/includes/body") : $body,
            'footer' => SystemEngineLoad::view("frontend/includes/footer"),
        );
        
        /**
         * zwracanie elementów strony do glownego index_view
         */
        
        echo SystemEngineLoad::view("frontend/index_view", $data);
    }

}
