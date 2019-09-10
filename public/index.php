<?php
    require "../Core/Router.php";
    $router = new Router();
    $router->add('',['controller'=>'Home', 'action'=> 'index']);
    $router->add('/posts',['controller'=>'Post', 'action'=> 'index']);
    $router->add('/posts/create',['controller'=>'Post', 'action'=> 'create']);

    $router->get();



?>