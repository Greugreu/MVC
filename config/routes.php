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
    $controller->listing();
}
elseif ($page == 'detailfruit' && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $controller = new \App\Controller\FruitController();
    $controller->single($id);
}
elseif ($page == 'addfruit') {
    $controller = new \App\Controller\FruitController();
    $controller->addFruit();
}
else {
    $controller = new App\Controller\DefaultController();
    $controller->Page404();
}
