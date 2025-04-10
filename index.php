<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if (!isset($_GET['page'])) {
    header("Location: index.php?page=dashboard");
    exit;
}
?>

<?php
require_once 'routes.php';
?>



