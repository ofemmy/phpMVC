<?php


    class Router
    {
        protected $routes;

        public function __construct()
        {
            $this->routes = [];
        }
        /*
         * Adds new routes to the routes array
         *
         * */
        public function add($route, $params)
        {
            $this->routes[$route] = $params;
        }

        public function get()
        {
        var_dump($this->routes);
        }
    }