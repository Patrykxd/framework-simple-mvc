<?

use system\core;

class ControllerError {

    public function __construct() {
        
    }

    public function index() {
        SystemCore::view(SystemEngineLoad::view("frontend/includes/error404"));
    }

}
