<?php
// Menuクラスを定義しましょう
class Menu{
  
}

// Menuクラスのインスタンスを作り、変数$curryに代入してください
$curry = new Menu();

// Menuクラスのインスタンスを作り、変数$pastaに代入してください
$pasta = new Menu();

?>

<?php
class Menu {
  // $nameというプロパティを定義してください
  public $name;
  
}

$curry = new Menu();
$pasta = new Menu();
// $curryのnameプロパティに'CURRY'を代入してください
$curry -> name = 'CURRY';

// $pastaのnameプロパティに'PASTA'を代入してください
$pasta -> name = 'PASTA';

// $curryのnameプロパティをechoしてください
echo $curry->name;

echo '<br>';
// $pastaのnameプロパティをechoしてください
echo $pasta->name;


?>

<?php
class Menu {
  public $name;
  
  // helloメソッドを定義してください
  public function hello(){
    echo '私はMenuクラスのインスタンスです';
  }
  
}

$curry = new Menu();
$pasta = new Menu();
$curry->name = 'CURRY';
$pasta->name = 'PASTA';
// $curryに対してhelloメソッドを呼び出してください
$curry -> hello();

echo '<br>';
// $pastaに対してhelloメソッドを呼び出してください
$pasta -> hello();

?>

<?php
class Menu {
  public $name;
  
  public function hello() {
    // '私は○○です'とechoしてください
    echo '私は'.$this->name.'です';
    
  }
}

$curry = new Menu();
$pasta = new Menu();
$curry->name = 'CURRY';
$pasta->name = 'PASTA';
$curry->hello();
echo '<br>';
$pasta->hello();

?>

<?php
class Menu {
  public $name;
  
  // コンストラクタを定義してください
  public function __construct(){
    echo '１つのメニューが作られました';
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
}

$curry = new Menu();
echo '<br>';
$pasta = new Menu();
echo '<br>';
$curry->name = 'CURRY';
$pasta->name = 'PASTA';
$curry->hello();
echo '<br>';
$pasta->hello();

?>