<?

use system\core;
use model\test;

class ControllerWelcomeWelcome {

    public $model;
    public function __construct() {
       $this->model = new ModelTest();
    }

    public function index() {

        $data = array(
            'content' => 'Patryk Pawlicki'
        );
//        var_dump($this->model->get_users());
        SystemCore::view(SystemEngineLoad::view("frontend/includes/welcome", $data));
    }

}
