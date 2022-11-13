<?php
session_save_path("./");
session_start();
$user = $_SESSION['user'] ?? '';
if ($user === '') {
    header('Location: login_failed.html');
    exit();
}

if (isset($_POST['itemA']) && $_POST['itemA'] === 'checked') {
    if (isset($_SESSION['itemA'])) {
        $_SESSION['itemA']++;
    } else {
        $_SESSION['itemA'] = 1;
    }
}
if (isset($_POST['itemB']) && $_POST['itemB'] === 'checked') {
    if (isset($_SESSION['itemB'])) {
        $_SESSION['itemB']++;
    } else {
        $_SESSION['itemB'] = 1;
    }
}
if (isset($_POST['itemC']) && $_POST['itemC'] === 'checked') {
    if (isset($_SESSION['itemC'])) {
        $_SESSION['itemC']++;
    } else {
        $_SESSION['itemC'] = 1;
    }
}
if (isset($_POST['itemD']) && $_POST['itemD'] === 'checked') {
    if (isset($_SESSION['itemD'])) {
        $_SESSION['itemD']++;
    } else {
        $_SESSION['itemD'] = 1;
    }
}
if (isset($_POST['itemE']) && $_POST['itemE'] === 'checked') {
    if (isset($_SESSION['itemE'])) {
        $_SESSION['itemE']++;
    } else {
        $_SESSION['itemE'] = 1;
    }
}

header('Location: item_list.php');
