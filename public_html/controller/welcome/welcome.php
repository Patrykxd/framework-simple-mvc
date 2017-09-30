<?

use Controller\Core;

class ControllerWelcomeWelcome {

    public function __construct() {
        
    }

    public function index() {

        $data = array(
            'content' => 'Patryk Pawlicki'
        );
        
        ControllerCore::view(SystemEngineLoad::view("frontend/includes/welcome", $data));
    }

}
