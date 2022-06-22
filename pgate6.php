<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // この下に連想配列を作ってください
    $scores = array(
      '数学' => 70,
      '英語' => 90,
      '国語' => 80
      );
    $scores['国語'] += 5;
    echo $scores['国語'];
  ?>

</body>
</html>