<?php
    require_once('utils/constant.php');

    class Router{
        private const METHOD_GET  = "GET";
        private const METHOD_POST = "POST";
        private const PATH_CONTROLLER = '\controllers';

        private static $routes = [];


        private function __construct(){}

        public static function get(string $url, $action){
            return static::request($url, static::METHOD_GET, $action);
        }

        public static function post(string $url, $action){
            return static::request($url, static::METHOD_POST, $action);
        }

        private static function request(string $url, string $method, $action){
            //Kiem tra url voi method ton tai trong mang chua
            foreach (static::$routes as $route) {
                if($route['url'] === $url && $route['method'] === $method){
                    return;
                }
            }

            // Kiem tra xem URL co chua param khong. 
            // URL: post/{title}/{id}...  -> Regex: \/post\/(.+)\/(.+)...
            if (preg_match_all('/({([a-zA-Z]+)})/', $url, $params)) {
                $url = preg_replace('/({([a-zA-Z]+)})/', '(.+)', $url);
            }
            $urlRegex = str_replace('/', '\/', $url);

            $actionObj;
            if(is_callable($action)){
                $actionObj = new Action($url, $action);
            } else if (is_string($action)) {
                $actionObj = new Action($action);
            } else {
                return;
            }

            $route = [
                'url' => $urlRegex,
                'method' => $method,
                'action' => $actionObj,
                'params' => $params[2]
            ];
            array_push(static::$routes, $route);
            
            // Tra ve 
            return $route['action'];
        }

        public static function map(string $url, string $method){
            foreach (static::$routes as $route) {
                if ($route['method'] === $method) {
                    // Kiem tra URL thong qua regex: 
                    // VD: \/post\/(.+)\/(.+)... = /post/abc/123...
                    if (preg_match('/^' . $route['url'] . '$/', $url, $params)) {
                        // Bo phan tu dau
                        // URL = /post/abc/123 -> Array(0) = /post/abc/123 , Array(1) = abc , Array(2) = 123
                        array_shift($params);
                        // Call action
                        static::actionRoute($route['action'], $params);
                        return true;
                    }
                }
            }

            return false;
        }

        private static function actionRoute($action, $params){
            // Nếu $action->method là một callback.
            if (is_callable($action->getMethod())) {
                call_user_func_array($action->getMethod(), $params);
            } else {
                $controller_name = ROOT_PATH . static::PATH_CONTROLLER . '\\' . $action->getController();
                $controller = new $controller_name();
                call_user_func_array([$controller, $action[1]], $params);
            }
        }
    }

    class Action{
        private $controller;
        private $method;

        public function __construct(){
            $arguments = func_get_args();
            $numberOfArguments = func_num_args();

            // Call funsion defind by number params
            // 1 params -> __construct1 , 2 params -> __construct2 , ...
            if (method_exists($this, $function = '__construct' . $numberOfArguments)) {
                call_user_func_array(array($this, $function), $arguments);
            }
        }

        public function __construct1($controller){
            $this->controller = $controller;
        }

        public function __construct2($controller, $method){
            $this->controller = $controller;
            $this->method = $method;
        }

        public function getController(){
            return $this->controller;
        }

        public function getMethod(){
            return $this->method;
        }

        public function name($method){
            $this->method = $method;
        }
    }
?>