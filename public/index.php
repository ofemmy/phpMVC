<?php
    require "../Core/Router.php";
    $router = new Router();
    $router->add('',['controller'=>'Home', 'action'=> 'index']);
    $router->add('posts',['controller'=>'Post', 'action'=> 'index']);
    $router->add('posts/create',['controller'=>'Post', 'action'=> 'create']);


    $url = $_GET['url'];
    $result = $router->match($url);
    if($result) {
        echo "there is a match" ."<br>";
        var_dump($router->getparams());
    } else {
        echo "no match found for this url " . $url;
    }





?>