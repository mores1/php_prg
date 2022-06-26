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