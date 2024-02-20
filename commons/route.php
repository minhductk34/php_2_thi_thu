<?php
require_once "./vendor/autoload.php";
use Phroute\Phroute\RouteCollector;
use App\Controllers\TeacherController;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});


// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', [TeacherController::class, "getTeacher"]
);

$router->group(['prefix' => 'teacher'], function ($router) {

    $router->get('/create', [TeacherController::class, 'create']);
    $router->post('/add', [TeacherController::class, 'add']);
    $router->get('/{id}', [TeacherController::class, 'show']);
    $router->get('/edit/{id}', [TeacherController::class, 'edit']);
    $router->post('/update/{id}', [TeacherController::class, 'update']);
    $router->get('/delete/{id}', [TeacherController::class, 'destroy']);

});
# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>