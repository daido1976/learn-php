<?php
session_save_path("./");
session_start();
if (empty($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
?>

<html>

<head>
  <title>セッションのテスト</title>
</head>

<body>
  <p>
    セッションのテストのページだよ！
  </p>
  <p>
    あなたがこのページに来たのは <?php echo $_SESSION['count']; ?> 回目ですね。
  </p>
  <a href="another.php">another</a>
</body>

</html>
