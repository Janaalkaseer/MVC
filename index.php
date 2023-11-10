<?php
// public/index.php
require_once __DIR__ .'/app/controllers/UserController.php';
require_once __DIR__ .'/app/models/UserModel.php';
require_once __DIR__ .'/config/config.php';
require_once __DIR__ .'/lib/DB/MysqliDb.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$config = require 'config/config.php';
$db = new MysqliDb(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
);

$model = new m\UserModel($db);
$controller = new c\UserController($model);

if (method_exists($controller, $action)) {
    $controller->$action($id);
} else {
    echo "Action not found!";
}
?>
