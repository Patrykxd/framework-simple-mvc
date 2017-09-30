<?php



class AutoLoad {

    private $classpath = "";

    public function LoadClass($classNameToFile) {
        foreach (str_split($classNameToFile) as $pos => $element) {
            
            if (ctype_upper($element) && $pos != 0) {
                $this->classpath .= DIRECTORY_SEPARATOR . strtolower($element);
            } else {
                $this->classpath .= strtolower($element);
            }
        }
        include_once BASE_PATH . $this->classpath . ".php";
    }

}

spl_autoload_register(function ($name) {
    $auto = new AutoLoad();
    $auto->LoadClass($name);
});
