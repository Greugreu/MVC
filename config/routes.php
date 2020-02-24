<?php
$page = 'home';
if(!empty($_GET['page'])) {
    $page = $_GET['page'];
}


if($page == 'home') {
    $controller = new App\Controller\DefaultController();
    $controller->index();
}
elseif ($page == 'contact') {
    $controller = new \App\Controller\DefaultController();
    $controller->contact();
}
elseif ($page == 'fruit') {
    $controller = new \App\Controller\FruitController();
    $controller->index();
}
else {
    $controller = new App\Controller\DefaultController();
    $controller->Page404();
}
