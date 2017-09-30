<?php

class SystemEngineLoad {

    public $load;

    public function __construct() {
        
    }

    public function view($filePath, $variables = array()) {
        $path = '';

        $path = str_replace(DS, '/', $filePath);
//        var_dump($path);
        $filePath = BASE_PATH . "view" . DS . $path . ".php";

        $this->load = NULL;
        if (file_exists($filePath)) {
            extract($variables);
            
            ob_start();
            include $filePath;
            $this->load = ob_get_contents();
            ob_get_clean();
        }

        return $this->load;
    }

    public function model($filePath) {
        $path = '';

        $arrayPath = explode('/', $filePath);
        if (is_array($arrayPath)) {
            foreach ($arrayPath as $array) {
                $path .= DS . $array;
            }
        } else {
            $path = $filePath;
        }

        include_once BASE_PATH . "model" . $path;
    }

}
