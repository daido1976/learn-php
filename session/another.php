<?php
session_save_path("./");
session_start();
if (empty($_SESSION['another_count'])) {
    $_SESSION['another_count'] = 1;
} else {
    $_SESSION['another_count']++;
}
?>

<html>

<head>
  <title>別のページ</title>
</head>

<body>
  <p>
    別のページだよ！
  </p>
  <p>
    あなたがこのページに来たのは <?php echo $_SESSION['another_count']; ?> 回目ですね。
  </p>
  <a href="/">top</a>
</body>

</html>
