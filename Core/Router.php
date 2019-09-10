<?php


    class Router
    {
        protected $routes;
        protected $params;

        public function __construct()
        {
            $this->routes = [];

        }
        /*
         * Adds new routes to the routes array
         * @param string $route Route to be registered
         * @param array $params Controller and corresponding action for the route
         * @return void
         *
         * */
        public function add($route, $params)
        {
            $this->routes[$route] = $params;
        }
        /*
         * Match the incoming url with the registered routes
         * @param string url The route URL
         * @return boolean true if route is found, false otherwise
         * */
        public function match($url)
        {
           foreach ($this->routes as $route=>$route_params)
           {
               if ($route === $url)
               {
                   $this->params = $route_params;
                   return true;
               }

           }
            return false;
        }
        /*
         * gets the parameters of the currently matched route
         * @return array
         * */
        public function getparams()
        {
        return $this->params;
        }
    }