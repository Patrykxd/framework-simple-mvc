<?php

class SystemEngineLoad {


    public function __construct() {
        
    }

    public static function view($filePath, $variables = array()) {
        $path = '';

        $path = str_replace(DS, '/', $filePath);

        $filePath = BASE_PATH . DS . "view" . DS . $path . ".php";

        $load = NULL;
        if (file_exists($filePath)) {
            extract($variables);

            ob_start();
            include_once $filePath;
            $load = ob_get_contents();
            ob_get_clean();
        }

        return $load;
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

        include_once "model" . $path;
    }

}
