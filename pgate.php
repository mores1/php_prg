<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $x = 5;
    $y = 2;
    $a = 8;
    $b = 4;
    
  ?>

  <!-- この下で$xの計算をしていきましょう -->
  <?php
    $x += 10;
    echo $x;
  ?>

  <br>

  <!-- この下で$yの計算をしていきましょう -->
  <?php
    $y *=5;
    echo $y;
  ?>

  <br>

  <!-- この下で$aの計算をしていきましょう -->
  <?php
    $a ++;
    echo $a;
  ?>

  <br>
  
  <!-- この下で$bの計算をしていきましょう -->
  <?php
    $b --;
    echo $b;
  ?>

</body>
</html>
