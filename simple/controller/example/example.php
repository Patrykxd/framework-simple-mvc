<?

use system\core;
use model\test;

class ControllerExampleExample{

    public $model;
    public function __construct() {
       $this->model = new ModelTest();
    }

    public function index() {
        $data = array();
        SystemCore::view(SystemEngineLoad::view("frontend/example/example_view", $data));
    }

}
