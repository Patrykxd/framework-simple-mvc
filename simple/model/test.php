<?

class ModelTest extends SystemModel {

    public $model;

    public function __construct() {
        $this->model = new SystemModel();
    }

    public function get_users() {
        return $this->model
                ->select('name_grups')
//                ->where('id = 3','or')
//                ->where('id = 2')
                ->get('grups',3);
    }

    public function get_articles() {
        return $this->model->get('articles');
    }

}
