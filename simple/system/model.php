<?

class SystemModel {

    public $connection;
    public $select = '*';
    public $where = null;
    public $sql;

    public function __construct() {
        $server = DB_SERVER;
        $database = DB_NAME;
        $user = DB_USER;
        $password = DB_PASSWORD;

        try {
            $this->connection = new \PDO("mysql:host=$server;dbname=$database", $user, $password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function select($select) {

        $this->select = $select;
        return $this;
    }

    public function where($where, $operator = false) {
        $this->where = ($this->where == null) ? 'WHERE ' : '';
        $sql = ($operator) ? $operator . ' ' : ',';
        $this->where .= $where . " " . $sql;

        return $this;
    }

    public function get($table, $start = null, $limit = null) {

        $where = substr($this->where, 0, -1);
        if ($start)
            $where .= 'LIMIT ' . $start;

        if ($limit)
            $where .= ',' . $limit;

        $sql = "SELECT $this->select FROM $table $where ";
        var_dump($sql);
//        exit;

        $query = $this->connection->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

}
