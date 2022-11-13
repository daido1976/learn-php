<?php
session_save_path("./");
session_start();
// セッションのグローバル変数の削除
$_SESSION = array();

// cookie のセッション ID を削除
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// セッションデータ（ファイル）の削除
session_destroy();
header('Location: index.html');
