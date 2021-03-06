<?php 

    class Router {

        protected $routerMiddleware = [

        ];

        /**
         * The route collection instance.
         */
        protected $routes;

        /**
         * All of the short-hand keys for middlewares.
         *
         * @var array
         */
        protected $middleware = [];

        /**
         * All of the verbs supported by the router.
         *
         * @var string[]
         */
        public static $verbs = ['GET', 'HEAD', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'];

        function __construct() {
            
            $this->routes = [];
        }

        /**
         * Register a new GET route with the router.
         *
         * @param  string  $uri
         * @param  array|string|callable|null  $action
         */
        public function get(string $uri, $action = null) {

            $this->__request($uri, 'GET', $action);

            return $this;
        }

        /**
         * Register a new POST route with the router.
         *
         * @param  string  $uri
         * @param  array|string|callable|null  $action
         */
        public function post(string $uri, $action) {

            $this->__request($uri, 'POST', $action);

            return $this;
        }

        public function __request(string $url, string $method, $action) {

            if(preg_match_all('/({([a-zA-Z0-9_]+)})/', $url, $params)) { 

                $url = preg_replace('/({([a-zA-Z0-9_]+)})/', '(.+)', $url); 
            }

            $url = str_replace('/', '\/', $url);

            $route = [
                'url' => $url,
                'method' => $method,
                'action' => $action,
                'params' => $params[2],
            ];

            /**
             * Register for routing
             */
            array_push($this->routes, $route);
        }

        public function middleware($name = null) {

            if(count($this->routes) > 0 && !is_null($name)) {

                $this->routes[count($this->routes) - 1]['middleware'] = $name;
            }
        }

        public function mapRoute(string $url, string $method) {

            foreach($this->routes as $route) {
                
                $flagContinue = true;

                if(isset($route['middleware']) && !is_null($route['middleware'])) {

                    if($route['middleware'] == "auth") {

                        $flagContinue = $statusAuth = (new AuthDashboardLogin())->auth();

                        if(!$statusAuth) {

                            return redirect('/dashboard/login');
                        }
                    }
                }

                if($flagContinue == true) {

                    if($route['method'] == $method) {

                        $reg = '/^' . $route['url'] . '$/';
    
                        if(preg_match($reg, $url, $params)) {
    
                            array_shift($params);
    
                            $this->__call_action_route($route['action'], $params);
    
                            return;
                        }
                    }
                }
            }

            echo '404 - Not Found';

            return false;
        }

        public function __call_action_route($action, $params) {

            /**
             * Checking url has query string or not
             */
            $p_checkParams = "/\?/";

            if(count($params) > 0) {

                if(preg_match($p_checkParams, $params[0], $paramsC) === 1 && count($params) > 0) {

                    $params[0] = explode($paramsC[0], $params[0])[0];
                }
            }

            /**
             * Old versions
             */
            if(is_string($action)) {

                $action = explode('@', $action);

                $Controller_Name = $action[0];

                $Controller = new $Controller_Name();

                call_user_func_array([

                    $Controller, 

                    $action[1]
                    
                ], $params);

                return false;
            }

            if(is_array($action)) {

                $Controller_Name = $action[0];

                $Controller = new $Controller_Name();

                /**
                 *  [Controller, Method] is equal to Controller::Method, i.e. a static method 
                 * 
                 *  Docs: https://www.php.net/manual/en/language.types.callable.php
                 */
                call_user_func_array([

                    $Controller, 

                    $action[1]

                ], $params);

                return false;
            }

            if(is_callable($action)) {

                call_user_func_array($action, $params);

                return false;
            }
        }
    }
?>