<?php
  echo 'Hello, PHP';
  echo '<br>';
  echo '10 + 7';
?>

<?php
$name = 'Tom';
echo '変数$nameの値: '.$name;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
echo 'My name is'.$name;

?>

<?php
$price = 1000;
$taxRate = 0.08;
echo '変数$priceの値: '.$price;
echo '<br>';
echo '変数$taxRateの値: '.$taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$total = $price + $price * $taxRate;
echo '税込価格は'.$total.'円です';

?>

<?php
$money = 2000;
$price = 1000;
$taxRate = 0.08;
echo '変数$moneyの値: '.$money;
echo '<br>';
echo '変数$priceの値: '.$price;
echo '<br>';
echo '変数$taxRateの値: '.$taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$total = $price + $price * $taxRate;
if($money > $total){
  echo '商品を買うことができます';
}elseif($money == $total){
  echo '商品を買うことができますが、所持金がなくなります';
}else{
  echo '商品を買うことができません';
}

?>

<?php
for ($i=1; $i<=100; $i++){
  if ($i%3==0 && $i%5==0){
    echo 'FizzBuzz';
  }elseif($i%3==0){
    echo 'Fizz';
  }elseif($i%5==0){
    echo 'Buzz';
  }else{
    echo $i;
  }
    echo '<br>';
}
?>

<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$i = 0;
foreach($prices as $price){
  $i += $price;
}
echo '合計金額は'.$i.'円です'
?>

<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$i = 0;
$h = 0;
foreach($prices as $price){
  $i += $price;
  if($h <= $price){
    $h = $price;
  }
}
echo '合計金額は'.$i.'円です';
echo '<br>';
echo '最高価格は'.$h.'円です';
?>

<?php
$menu = array('name' => 'CURRY', 'price' => 900);
echo '$menuの値: ';
// var_exportは変数の中身を見るための関数です
var_export($menu);
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
echo $menu['name'].'は'.$menu['price'].'円です';

?>

<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
foreach($menus as $menu){
  echo $menu['name'].'は'.$menu['price'].'円です';
  echo '<br>';
}

?>

<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
$total = 0;
foreach($menus as $menu){
  echo $menu['name'].'は'.$menu['price'].'円です';
  echo '<br>';
  $total += $menu['price'];
}
echo '合計金額は'.$total.'円です';
?>

<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

$totalPrice = 0;
$maxPrice = 0; // 最高価格を入れるための変数
$maxPriceMenuName = ''; // 最高価格のものの名前を入れるための変数
foreach ($menus as $menu) {
  $name = $menu['name'];
  $price = $menu['price'];
  echo $name.'は'.$price.'円です';
  echo '<br>';
  $totalPrice += $price;
  // $maxPriceに入っている価格より大きければ
  if ($price > $maxPrice) {
    // その価格で$maxPriceを上書きする
    $maxPrice = $price;
    // 最高価格のものの名前で上書きする
    $maxPriceMenuName = $name;
  }
}
echo '合計金額は'.$totalPrice.'円です';
echo '<br>';
echo $maxPriceMenuName.'が最高価格で'.$maxPrice.'円です';

?>

<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
$total = 0;
$hiprice = 0;
foreach($menus as $menu){
  $name = $menu['name'];
  $price = $menu['price'];
  echo $name.'は'.$price.'円です';
  echo '<br>';
  $total += $price;
  if($hiprice < $price){
    $hiprice = $price;
    $hiname = $name;
  }
}
echo '合計金額は'.$total.'円です';
echo '<br>';
echo $hiname.'が最高価格で'.$hiprice.'円です';
?>
