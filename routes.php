<?php
require 'config/db.php';

$page = $_GET['page'] ?? 'donor';
$action = $_GET['action'] ?? 'list';

$controller = null;

switch ($page) {
    case 'dashboard':
        require_once 'controllers/DashboardController.php';
        $controller = new DashboardController($pdo);
        break;
    
    case 'donor':
        require_once 'controllers/DonorController.php';
        $controller = new DonorController($pdo);
        break;
    case 'event':
        require_once 'controllers/EventController.php';
        $controller = new EventController($pdo);
        break;
    case 'contribution':
        require_once 'controllers/ContributionController.php';
        $controller = new ContributionController($pdo);
        break;
    case 'user':
        require_once 'controllers/UserController.php';
        $controller = new UserController($pdo);
        break;
    default:
        echo "Invalid page!";
        exit;
}

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Invalid action!";
}
