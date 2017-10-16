<?

class SystemEngineRoute {

    /**
     *
     * @var type array()
     * lista aliasów ktore uzywa routing
     * jesli aktualny url nie istanieje 404 page
     */
    private static $data = array();

    private static function parse() {
        $path = parse_url($_SERVER["REDIRECT_URL"]);
        return (empty($path['path'])) ? "/" : $path['path'];
    }

    private static function set($key, $value) {
        $_SERVER[$key] = $value;
    }

    public static function get($alias, $controller, $method) {


        $current_url = self::parse();

        self::$data[$alias] = array($controller, $method);

        if (isset(self::$data[$current_url]) && $current_url == $alias) {
            $body = new self::$data[$current_url][0]();
            $body->{self::$data[$current_url][1]}();
        }
    }

    public static function page_404() {

        $current_url = self::parse();

        if (!isset(self::$data[$current_url])) {
            /**
             * dla ulatwienia rozpoznania czy strona istnieje
             * $_SERVER[key]=value;
             * self::set(key, value);
             */
            self::set('REDIRECT_STATUS', '404');
            $body = new ControllerError();
            $body->index();
        }
    }

    public function fetch() {
        return self::$data;
    }

}
