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

<?php
class Menu {
  public $name;
  
  // コンストラクタの引数に$nameを入れてください
  public function __construct($name) {
    // nameプロパティに引数の$nameを代入してください
    $this->name = $name;
    
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
}

// new Menu()の引数に'CURRY'を入れてください
$curry = new Menu('CURRY');
// new Menu()の引数に'PASTA'を入れてください
$pasta = new Menu('PASTA');
// 以下の1行を消してください
// $curry->name = 'CURRY';
// 以下の1行を消してください
// $pasta->name = 'PASTA';
$curry->hello();
echo '<br>';
$pasta->hello();

?>

<?php
class Menu {
  public $name;
  
  public function __construct($name) {
    $this->name = $name;
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
}

$curry = new Menu('CURRY');
$pasta = new Menu('PASTA');

?>

<!-- <p>タグの中で、$curryのnameプロパティを表示してください -->
<p><?php echo $curry->name ?></p>


<!-- <p>タグの中で、$pastaのnameプロパティを表示してください -->
<p><?php echo $pasta->name ?></p>
