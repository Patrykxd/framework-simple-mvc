<?php

namespace Engine;

class AutoLoad {

    private $classpath = "";

    public function LoadClass($classNameToFile) {
        foreach (str_split($classNameToFile) as $pos => $element) {
            if (ctype_upper($element) && $pos != 0) {
                $this->classpath .= DS . strtolower($element);
            } else {
                $this->classpath .= strtolower($element);
            }
        }
//echo $this->classpath.'<br/>';   
        include_once BASE_PATH . DS . $this->classpath . ".php";
    }

}

spl_autoload_register(function ($name) {
    $auto = new \Engine\AutoLoad();
    $auto->LoadClass($name);
});
