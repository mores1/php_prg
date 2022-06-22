<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // 変数$numを定義し、好きな数字を代入してください
    $num = 45;
  
    // 変数$remainderを定義し、変数$numを3で割った時の余りを代入してください
    $remainder = $num%3;
 
    // switch文を用いてください
    switch($remainder){
      case 0:
        echo '大吉です。';
        break;
      case 1:
        echo '中吉です。';
        break;
      case 2:
        echo '小吉です。';
        break;
      default:
        echo '凶です。';
    }
  
  ?>

</body>
</html>