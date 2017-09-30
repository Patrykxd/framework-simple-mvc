<?

use Controller\Core;

class ControllerError {

    public function __construct() {
        
    }

    public function index() {
        ControllerCore::view(SystemEngineLoad::view("frontend/includes/error404"));
    }

}
