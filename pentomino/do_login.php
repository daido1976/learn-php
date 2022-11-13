<?php
$user = $_POST['user'];
$password = $_POST['password'];

if ($password === 'pass') {
    session_save_path("./");
    session_start();
    $_SESSION['user'] = $user;
    header('Location: item_list.php');
} else {
    header('Location: login_failed.html');
}
