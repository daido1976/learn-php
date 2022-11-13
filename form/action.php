<?php
// https://developer.mozilla.org/en-US/docs/Learn/Forms/Sending_and_retrieving_form_data#example_raw_php
$say = htmlspecialchars($_POST['say']);
$to = htmlspecialchars($_POST['to']);
?>

<html>

<head>
  <title>PHP form submission result</title>
</head>

<body>
  <output>
    <?php echo $say, ' ', $to; ?>!
  </output>
  <div>
    <a href="/">top</a>
  </div>
</body>

</html>
